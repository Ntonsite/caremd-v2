<?php

	namespace Concerto\TextExpressions;

	class PathExpression implements PathExpressionInterface {
		protected $expression;
		protected $expressions;
		protected $parameters;

		/**
		 * Construct a new expression.
		 *
		 * @param	string				$expression
		 *	Optional.
		 * @param	PathLexerInterface	$lexer
		 *	Optional. The lexer to use.
		 *
		 * @throws	LexerException
		 *	When a syntax error occured while parsing.
		 */
		public function __construct($expression = null, PathLexerInterface $lexer = null) {
			$this->expressions = [];
			$this->parameters = [];

			if ($expression !== null) {
				if ($lexer === null) {
					$lexer = new PathLexer();
				}

				$lexer->parse($this, $expression);
			}
		}

		/**
		 * Add a string literal to the expression.
		 *
		 * @param	string	$source
		 */
		public function appendLiteral($source) {
			$this->expressions[] = preg_quote($source, '%');
		}

		/**
		 * Add an expression to the expression.
		 *
		 * @param	string	$source
		 */
		public function appendExpression($source) {
			$source = str_replace(['%', '\\'], ['\\\%', '\\\\'], $source);

			$this->expressions[] = sprintf('(%s)', $source);
		}

		/**
		 * Add a parameter to the expression.
		 *
		 * @param	string	$name
		 * @param	string	$source
		 */
		public function appendParameter($name, $source) {
			$source = str_replace(['%', '\\'], ['\\\%', '\\\\'], $source);
			$id = 'p' . count($this->parameters);

			$this->parameters[$id] = strtolower($name);
			$this->expressions[] = sprintf('(?<%s> %s)', $id, $source);
		}

		/**
		 * Execute the expression against a path.
		 *
		 * @param	string	$value
		 */
		public function execute($value) {
			$result = [];

			$success = (boolean)preg_match($this->expression, $value, $matches);

			foreach ($this->parameters as $id => $name) {
				if (isset($matches[$id]) === false) continue;

				if ($name !== null) {
					$result[$name] = trim($matches[$id], '/');
				}
			}

			return new ExpressionResult($result);
		}

		/**
		 * Test the expression against a path.
		 *
		 * @param	string	$value
		 */
		public function test($value) {
			return (boolean)preg_match($this->expression, $value, $matches);
		}

		/**
		 * Once parsing is done, finalize the expression.
		 */
		public function finalize() {
			$this->expression = '%^' . implode('', $this->expressions) . '$%ix';
		}
	}