<?php

	namespace Concerto\TextExpressions;

	interface PathLexerInterface {
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
		 * Parse a string into a PathExpressionInterface.
		 *
		 * @param	PathExpressionInterface		$expression
		 * @param	string						$source
		 */
		public function parse(PathExpressionInterface $expression, $source);

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