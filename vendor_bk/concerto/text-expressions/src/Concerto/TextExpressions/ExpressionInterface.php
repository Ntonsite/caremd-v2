<?php

	namespace Concerto\TextExpressions;

	interface ExpressionInterface {
		/**
		 * Execute the expression against a value.
		 *
		 * @param	string	$value
		 *
		 * @return	ExpressionMatch
		 */
		public function execute($value);

		/**
		 * Test the expression against a value.
		 *
		 * @return	boolean
		 */
		public function test($value);
	}