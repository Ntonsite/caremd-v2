<?php

	namespace Concerto\TextExpressions;
	use ArrayAccess;

	/**
	 * Find and replace PHP like variables in a string.
	 */
	class VariableExpression implements VariableExpressionInterface {
		/**
		 * Items that make up an expression.
		 *
		 * @var		array
		 */
		protected $expression;

		/**
		 * Construct a new expression.
		 *
		 * @param	string					$expression
		 *	Optional.
		 * @param	VariableLexerInterface	$lexer
		 *	Optional. The lexer to use.
		 *
		 * @throws	LexerException
		 *	When a syntax error occured while parsing.
		 */
		public function __construct($expression = null, VariableLexerInterface $lexer = null) {
			$this->expression = [];

			if ($expression !== null) {
				if ($lexer === null) {
					$lexer = new VariableLexer();
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
			$this->expression[] = $source;
		}

		/**
		 * Add a variable to the expression.
		 *
		 * @param	string	$name
		 */
		public function appendVariable($name, $source) {
			$this->expression[] = (object)[
				'name' =>		$name,
				'source' =>		$source
			];
		}

		/**
		 * Execute the expression against a path.
		 *
		 * @param	array	$variables
		 *
		 * @return	null|string
		 */
		public function execute(array $variables) {
			$result = null;

			foreach ($this->expression as $current) {
				if (is_object($current)) {
					if (isset($variables[$current->name])) {
						$result .= $variables[$current->name];
					}
				}

				else {
					$result .= $current;
				}
			}

			return $result;
		}
	}