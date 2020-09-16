<?php

	namespace Concerto\TextExpressions;

	class RegularExpression implements ExpressionInterface {
		protected $expression;

		public function __construct($expression, $flags = null) {
			$expression = str_replace('/', '\\/', $expression);

			$this->expression = '/' . $expression . '/' . $flags;
		}

		public function execute($value) {
			if (preg_match($this->expression, $value, $match)) {
				return new ExpressionResult($match);
			}

			return new ExpressionResult([]);
		}

		public function test($value) {
			if (preg_match($this->expression, $value, $match)) {
				return true;
			}

			return false;
		}
	}