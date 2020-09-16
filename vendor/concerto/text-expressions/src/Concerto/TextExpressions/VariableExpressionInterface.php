<?php

	namespace Concerto\TextExpressions;
	use ArrayAccess;

	interface VariableExpressionInterface {
		/**
		 * Add a string literal to the expression.
		 *
		 * @param	string	$source
		 */
		public function appendLiteral($source);

		/**
		 * Add a variable to the expression.
		 *
		 * @param	string	$name
		 */
		public function appendVariable($name, $source);

		/**
		 * Execute the expression against a path.
		 *
		 * @param	array	$variables
		 *
		 * @return	null|string
		 */
		public function execute(array $variables);
	}