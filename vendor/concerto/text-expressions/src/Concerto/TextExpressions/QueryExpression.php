<?php

	namespace Concerto\TextExpressions;

	class QueryExpression implements QueryExpressionInterface {
		protected $parameters;

		/**
		 * Construct a new expression.
		 *
		 * @param	string				$expression
		 *	Optional.
		 * @param	QueryLexerInterface	$lexer
		 *	Optional. The lexer to use.
		 *
		 * @throws	LexerException
		 *	When a syntax error occured while parsing.
		 */
		public function __construct($expression = null, QueryLexerInterface $lexer = null) {
			$this->parameters = [];

			if ($expression !== null) {
				if ($lexer === null) {
					$lexer = new QueryLexer();
				}

				$lexer->parse($this, $expression);
			}
		}

		/**
		 * Add a parameter to the expression.
		 *
		 * @param	string	$name
		 * @param	string	$source
		 */
		public function appendParameter($name, $source) {
			if (isset($this->parameters[$name])) {
				throw new QueryExpressionException("Parameter {$name} already defined.", QueryExpressionException::DUPLICATE_PARAMETER);
			}

			$source = str_replace('%', '\\\%', $source);

			$this->parameters[$name] = sprintf('%%^(%s)$%%i', $source);
		}

		/**
		 * Execute the expression against a query string.
		 *
		 * @param	string	$value
		 *
		 * @return	QueryExpressionResult
		 */
		public function execute($value) {
			parse_str(ltrim($value, '?&'), $data);
			$diff = array_diff_key($data, $this->parameters);
			$result = [];

			// Make sure all required parameters are met:
			if (empty($diff)) {
				// Test each parameter until failure:
				foreach ($this->parameters as $name => $expression) {
					// We cannot deal with arrays at this time...
					if (false === is_string($data[$name])) continue;

					// Match failed.
					if (false === (boolean)preg_match($expression, $data[$name])) continue;

					$result[$name] = $data[$name];
				}
			}

			return new QueryExpressionResult($result);
		}

		/**
		 * Is the named parameter defined?
		 *
		 * @param	string	$name
		 *
		 * @return	boolean
		 */
		public function hasParameter($name) {
			return isset($this->parameters[$name]);
		}

		/**
		 * Test the expression against a query string.
		 *
		 * @param	string	$value
		 *
		 * @return	boolean
		 */
		public function test($value) {
			parse_str(ltrim($value, '?&'), $data);
			$diff = array_diff_key($data, $this->parameters);

			// Make sure all required parameters are met:
			if (false === empty($diff)) return false;

			// Test each parameter until failure:
			foreach ($this->parameters as $name => $expression) {
				// We cannot deal with arrays at this time...
				if (false === is_string($data[$name])) return false;

				// Match failed.
				if (false === (boolean)preg_match($expression, $data[$name])) return false;
			}

			return true;
		}
	}