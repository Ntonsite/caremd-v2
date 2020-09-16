<?php

	namespace Concerto\TextExpressions;

	interface PathExpressionInterface extends ExpressionInterface {
		/**
		 * Add a string literal to the expression.
		 *
		 * @param	string	$source
		 */
		public function appendLiteral($source);

		/**
		 * Add an expression to the expression.
		 *
		 * @param	string	$source
		 */
		public function appendExpression($source);

		/**
		 * Add a parameter to the expression.
		 *
		 * @param	string	$name
		 * @param	string	$source
		 */
		public function appendParameter($name, $source);

		/**
		 * Once parsing is done, finalize the expression.
		 */
		public function finalize();
	}