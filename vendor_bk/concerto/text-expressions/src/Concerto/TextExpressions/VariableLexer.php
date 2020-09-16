<?php

	namespace Concerto\TextExpressions;

	class VariableLexer {
		const MODE_LITERAL = 10;
		const MODE_VARIABLE = 20;

		public function parse(VariableExpressionInterface $expression, $source) {
			$length = strlen($source);

			// Split it into larger chunks to avoid excessively
			// long loops and string concatinations:
			$bits = preg_split(
				'%(\{\$|\$\{|[\{\}\$\s\\\]|\b)%', $source, 0,
				PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE
			);

			$this->parseLoop($expression, $bits, $length);
		}

		protected function parseLoop(VariableExpressionInterface $expression, $source, $length) {
			$mode = self::MODE_LITERAL;
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

				case self::MODE_LITERAL:
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
						case '$':
						case '{$':
						case '${':
							if ($escaped) {
								$escaped = false;
								$literal .= $current;
							}

							else {
								if ($literal !== null) {
									$expression->appendLiteral($literal);
								}

								$mode = self::MODE_VARIABLE;
								$terminated = ($current !== '$');
								$name = null;
								$literal = $current;
							}
						break;

						// Named queries:
						default:
							$literal .= $current;
							$escaped = false;
					}
				break;

				case self::MODE_VARIABLE:
					switch ($current) {
						// Escaped character:
						case '\\':
							if ($escaped) {
								$literal .= $current;
								$name .= $current;
								$escaped = false;
							}

							else {
								$escaped = true;
							}
						break;

						// End at whitespace:
						case ' ':
						case "\n":
						case "\r":
						case "\t":
							if ($terminated) {
								$literal .= $current;
								$name .= $current;
								$escaped = false;
							}

							else if ($name === null) {
								throw new LexerException(sprintf(
									'Unexpected variable at offset %d on line %d, expecting variable name.',
									$offset, $line
								));
							}

							else {
								$expression->appendVariable($name, $literal);

								$mode = self::MODE_LITERAL;
								$literal = $current;
							}
						break;

						// End at terminator:
						case '}':
							if ($escaped) {
								$escaped = false;
								$literal .= $current;
								$name .= $current;
							}

							else if ($terminated === false) {
								$expression->appendVariable($name, $literal);

								$mode = self::MODE_LITERAL;
								$literal = $current;
							}

							else if ($name === null) {
								throw new LexerException(sprintf(
									'Unexpected variable at offset %d on line %d, expecting variable name.',
									$offset, $line
								));
							}

							else {
								$literal .= $current;

								$expression->appendVariable($name, $literal);

								$mode = self::MODE_LITERAL;
								$literal = null;
							}
						break;

						// End at end of string:
						case null:
							if ($terminated || $name === null) {
								throw new LexerException(sprintf(
									'Unexpected end of expression at offset %d on line %d, expecting one of ">".',
									$offset, $line
								));
							}

							else {
								$expression->appendVariable($name, $literal);

								$mode = self::MODE_LITERAL;
								$literal = null;
							}
						break;

						// End at next parameter:
						case '$':
						case '{$':
						case '${':
							if ($escaped) {
								$escaped = false;
								$literal .= $current;
								$name .= $current;
							}

							else if ($terminated || $name === null) {
								throw new LexerException(sprintf(
									'Unexpected variable at offset %d on line %d, expecting variable name.',
									$offset, $line
								));
							}

							else {
								$expression->appendVariable($name, $literal);

								$mode = self::MODE_LITERAL;
								$literal = null;
								$index--;
							}
						break;

						// End at invalid character:
						default:
							$literal .= $current;
							$name .= $current;
							$escaped = false;
					}
				break;

				endswitch;
			}
		}
	}