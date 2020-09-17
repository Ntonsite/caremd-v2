<?php

	namespace Concerto\TextExpressions;

	interface QueryLexerInterface {
		/**
		 * Get the default expression to be used by a named parameter.
		 *
		 * @param	string		$name
		 *	The name of the parameter.
		 *
		 * @return	string
		 *	Regular expression used as the default.
		 */
		public function getParameter($name);

		/**
		 * Parse a string into a QueryExpressionInterface.
		 *
		 * @param	QueryExpressionInterface	$expression
		 * @param	string						$source
		 */
		public function parse(QueryExpressionInterface $expression, $source);

		/**
		 * Set the default expression to be used by a named parameter.
		 *
		 * @param	string		$name
		 *	The name of the parameter.
		 * @param	string		$expression
		 *	Regular expression used as the default.
		 */
		public function setParameter($name, $expression = null);
	}