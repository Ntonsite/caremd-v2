<?php

	namespace Concerto\TextExpressions;

	interface LexerInterface {
		public function parse(ExpressionInterface $expression, $source);
	}