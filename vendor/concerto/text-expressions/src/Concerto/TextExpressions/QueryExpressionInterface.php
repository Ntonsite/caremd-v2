<?php

	namespace Concerto\TextExpressions;

	interface QueryExpressionInterface extends ExpressionInterface {
		/**
		 * Add a parameter to the expression.
		 *
		 * @param	string	$name
		 * @param	string	$source
		 */
		public function appendParameter($name, $source);

		/**
		 * Is the named parameter defined?
		 *
		 * @param	string	$name
		 */
		public function hasParameter($name);
	}