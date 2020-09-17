<?php

	namespace Concerto\TextExpressions;
	use Exception;

	class LexerException extends Exception {
		const UNEXPECTED_CHARACTER = 10;
		const UNEXPECTED_WHITESPACE = 11;
		const END_OF_EXPRESSION = 20;
	}