<?php

	namespace Concerto\TextExpressions;

	class QueryLexer implements QueryLexerInterface {
		const MODE_EXPECT_PARAMETER = 10;
		const MODE_LITERAL_NAME = 20;
		const MODE_LITERAL_TYPE = 21;
		const MODE_REGEX_NAME = 30;
		const MODE_REGEX_TYPE = 31;

		const EXPRESSION_WILDCARD = '[^?&]*';

		protected $parameters;

		public function __construct() {
			$this->parameters = [];
		}

		/**
		 * Parse a string into a QueryExpressionInterface.
		 *
		 * @param	QueryExpressionInterface	$expression
		 * @param	string						$source
		 */
		public function parse(QueryExpressionInterface $expression, $source) {
			$length = strlen($source);

			// Split it into larger chunks to avoid excessively
			// long loops and string concatinations:
			$bits = preg_split(
				'%([?&]<|[?&<=:>\s\\\])%', ltrim($source, '?&'), 0,
				PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE
			);

			$this->parseLoop($expression, $bits, $length);
		}

		/**
		 * Get the default expression to be used by a named parameter.
		 *
		 * @param	string		$name
		 *	The name of the parameter.
		 *
		 * @return	string
		 *	Regular expression used as the default.
		 */
		public function getParameter($name) {
			if (isset($this->parameters[$name])) {
				return $this->parameters[$name];
			}

			return self::EXPRESSION_WILDCARD;
		}

		/**
		 * Set the default expression to be used by a named parameter.
		 *
		 * @param	string		$name
		 *	The name of the parameter.
		 * @param	string		$expression
		 *	Regular expression used as the default.
		 */
		public function setParameter($name, $expression = null) {
			$this->parameters[$name] = $expression;
		}

		/**
		 * Main parser loop.
		 */
		protected function parseLoop(QueryExpressionInterface $expression, $source, $length) {
			$mode = self::MODE_LITERAL_NAME;
			$escaped = false;
			$literal = $name = $type = null;
			$index = $line = $offset = 0;

			if (isset($source[$index]) && $source[$index] === '<') {
				$mode = self::MODE_REGEX_NAME;
				$index++;
			}

			for ($index; $index <= $length; $index++) {
				$current = isset($source[$index])
					? $source[$index]
					: null;

				// Track our current position for errors:
				if ($current === "\n" || $line == 0) {
					$line++;
					$offset = 1;
				}

				else {
					$offset++;
				}

				// Choose what's next:
				switch ($mode):

				case self::MODE_EXPECT_PARAMETER:
					switch ($current) {
						// It's finished:
						case null:
							break 3;

						// Begin literal parameter:
						case '?':
						case '&':
							$mode = self::MODE_LITERAL_NAME;
							$name = null;
							$type = null;
						break;

						// Begin regex parameter:
						case '?<':
						case '&<':
							$mode = self::MODE_REGEX_NAME;
							$name = null;
							$type = null;
						break;
					}
				break;

				case self::MODE_LITERAL_NAME:
					switch ($current) {
						case ' ':
						case "\n":
						case "\r":
						case "\t":
							throw new QueryLexerException(sprintf(
								'Unexpected whitespace at offset %d on line %d, expecting query parameter name.',
								$offset, $line
							), QueryLexerException::UNEXPECTED_WHITESPACE);
						break;

						// Escaped character:
						case '\\':
							if ($escaped) {
								$escaped = false;
								$name .= $current;
							}

							else {
								$escaped = true;
							}
						break;

						// Parameter type:
						case ':':
						case '=':
							if ($escaped) {
								$escaped = false;
								$name .= $current;
							}

							else {
								$mode = self::MODE_LITERAL_TYPE;
							}
						break;

						// End parameter:
						case null:
							if (empty($name)) throw new QueryLexerException(sprintf(
								'Unexpected end of expression at offset %d on line %d, expecting query parameter name.',
								$offset, $line
							), QueryLexerException::END_OF_EXPRESSION);

						case '?':
						case '&':
						case '?<':
						case '&<':
							if ($escaped) {
								$escaped = false;
								$name .= $current;
							}

							else if ($expression->hasParameter($name)) {
								throw new QueryLexerException(sprintf(
									'Duplicate parameter "%s" encountered at offset %d on line %d.',
									$name, $offset, $line
								), QueryLexerException::DUPLICATE_PARAMETER);
							}

							else {
								$mode = self::MODE_EXPECT_PARAMETER;
								$index--;

								if ($type === null) {
									$type = $this->getParameter($name);
								}

								$expression->appendParameter($name, $type);
							}
						break;

						default:
							$name .= $current;
							$escaped = false;
						break;
					}
				break;

				case self::MODE_LITERAL_TYPE:
					switch ($current) {
						// Escaped character:
						case '\\':
							if ($escaped) {
								$escaped = false;
								$type .= $current;
							}

							else {
								$escaped = true;
							}
						break;

						// End parameter:
						case null:
						case '?':
						case '&':
						case '?<':
						case '&<':
							if ($escaped) {
								$escaped = false;
								$type .= $current;
							}

							else if ($expression->hasParameter($name)) {
								throw new QueryLexerException(sprintf(
									'Duplicate parameter "%s" encountered at offset %d on line %d.',
									$name, $offset, $line
								), QueryLexerException::DUPLICATE_PARAMETER);
							}

							else {
								$mode = self::MODE_EXPECT_PARAMETER;
								$literal = null;
								$index--;

								if ($type === null) {
									$type = $this->getParameter($name);
								}

								$expression->appendParameter($name, $type);
							}
						break;

						default:
							$type .= $current;
							$escaped = false;
						break;
					}
				break;

				case self::MODE_REGEX_NAME:
					switch ($current) {
						case ' ':
						case "\n":
						case "\r":
						case "\t":
							throw new QueryLexerException(sprintf(
								'Unexpected whitespace at offset %d on line %d, expecting query parameter name.',
								$offset, $line
							), QueryLexerException::UNEXPECTED_WHITESPACE);
						break;

						// Escaped character:
						case '\\':
							if ($escaped) {
								$escaped = false;
								$name .= $current;
							}

							else {
								$escaped = true;
							}
						break;

						// Parameter type:
						case ':':
						case '=':
							if ($escaped) {
								$escaped = false;
								$name .= $current;
							}

							else {
								$mode = self::MODE_REGEX_TYPE;
							}
						break;

						// End parameter:
						case null:
						case '>':
							if ($escaped) {
								$escaped = false;
								$name .= $current;
							}

							else if ($expression->hasParameter($name)) {
								throw new QueryLexerException(sprintf(
									'Duplicate parameter "%s" encountered at offset %d on line %d.',
									$name, $offset, $line
								), QueryLexerException::DUPLICATE_PARAMETER);
							}

							else {
								$mode = self::MODE_EXPECT_PARAMETER;

								if ($type === null) {
									$type = $this->getParameter($name);
								}

								$expression->appendParameter($name, $type);
							}
						break;

						default:
							$name .= $current;
							$escaped = false;
						break;
					}
				break;

				case self::MODE_REGEX_TYPE:
					switch ($current) {
						// Escaped character:
						case '\\':
							if ($escaped) {
								$escaped = false;
								$type .= $current;
							}

							else {
								$escaped = true;
							}
						break;

						// End parameter:
						case null:
						case '>':
							if ($escaped) {
								$escaped = false;
								$type .= $current;
							}

							else if ($expression->hasParameter($name)) {
								throw new QueryLexerException(sprintf(
									'Duplicate parameter "%s" encountered at offset %d on line %d.',
									$name, $offset, $line
								), QueryLexerException::DUPLICATE_PARAMETER);
							}

							else {
								$mode = self::MODE_EXPECT_PARAMETER;
								$literal = null;

								if ($type === null) {
									$type = $this->getParameter($name);
								}

								$expression->appendParameter($name, $type);
							}
						break;

						default:
							$type .= $current;
							$escaped = false;
						break;
					}
				break;

				endswitch;
			}
		}
	}