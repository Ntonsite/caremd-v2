<?php

	namespace Concerto\TextExpressions;

	class PathLexer implements PathLexerInterface {
		const MODE_STRING_LITERAL = 10;
		const MODE_PARAMETER_NAME = 20;
		const MODE_PARAMETER_TYPE = 21;

		const EXPRESSION_WILDCARD = '[^/]+';

		protected $parameters;

		public function __construct() {
			$this->parameters = [];
		}

		/**
		 * Parse a string into a PathExpressionInterface.
		 *
		 * @param	PathExpressionInterface		$expression
		 * @param	string						$source
		 */
		public function parse(PathExpressionInterface $expression, $source) {
			$length = strlen($source);

			// Split it into larger chunks to avoid excessively
			// long loops and string concatinations:
			$bits = preg_split(
				'%([<=:>\s\\\])%', $source, 0,
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

		protected function parseLoop(PathExpressionInterface $expression, $source, $length) {
			$mode = self::MODE_STRING_LITERAL;
			$escaped = false;
			$literal = $name = $type = null;
			$index = $line = $offset = 0;

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

				case self::MODE_STRING_LITERAL:
					switch ($current) {
						// It's finished:
						case null:
							if ($literal !== null) {
								$expression->appendLiteral($literal);
							}

							break 3;
						break;

						// Escaped character:
						case '\\':
							if ($escaped) {
								$escaped = false;
								$literal .= $current;
							}

							else {
								$escaped = true;
							}
						break;

						// Begin parameter:
						case '<':
							if ($escaped) {
								$escaped = false;
								$literal .= $current;
							}

							else {
								if ($literal !== null) {
									$expression->appendLiteral($literal);
								}

								$mode = self::MODE_PARAMETER_NAME;
								$name = null; $type = null;
							}
						break;

						// Named queries:
						default:
							$literal .= $current;
							$escaped = false;
					}
				break;

				case self::MODE_PARAMETER_NAME:
					switch ($current) {
						case null:
							throw new LexerException(sprintf(
								'Unexpected end of expression at offset %d on line %d, expecting one of ">".',
								$offset, $line
							), LexerException::END_OF_EXPRESSION);

						// Ignore whitespace:
						case ' ':
						case "\n":
						case "\r":
						case "\t":
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
								$mode = self::MODE_PARAMETER_TYPE;
							}
						break;

						// End parameter:
						case '>':
							if ($escaped) {
								$escaped = false;
								$name .= $current;
							}

							else {
								$mode = self::MODE_STRING_LITERAL;
								$literal = null;

								if ($type === null) {
									$type = $this->getParameter($name);
								}

								if ($name !== null) {
									$expression->appendParameter($name, $type);
								}
							}
						break;

						default:
							$name .= $current;
							$escaped = false;
						break;
					}
				break;

				case self::MODE_PARAMETER_TYPE:
					switch ($current) {
						case null:
							throw new LexerException(sprintf(
								'Unexpected end of expression at offset %d on line %d, expecting one of ">".',
								$offset, $line
							), LexerException::END_OF_EXPRESSION);

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
						case '>':
							if ($escaped) {
								$escaped = false;
								$type .= $current;
							}

							else {
								$mode = self::MODE_STRING_LITERAL;
								$literal = null;

								if ($type === null) {
									$type = $this->getParameter($name);
								}

								if ($name !== null) {
									$expression->appendParameter($name, $type);
								}

								else {
									$expression->appendExpression($type);
								}
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

			$expression->finalize();
		}
	}