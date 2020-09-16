<?php

	namespace Concerto\TextExpressions;

	interface VariableLexerInterface {
		public function parse(VariableExpressionInterface $expression, $source);
	}