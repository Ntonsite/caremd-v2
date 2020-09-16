<?php

	namespace Concerto\TextExpressions\Tests;
	use Concerto\TextExpressions\ExpressionResult;
	use Concerto\TextExpressions\LexerException;
	use Concerto\TextExpressions\VariableExpression;
	use Concerto\TextExpressions\VariableLexer;
	use PHPUnit_Framework_TestCase as TestCase;

	/**
	 * @covers Concerto\TextExpressions\VariableExpression
	 * @covers Concerto\TextExpressions\VariableLexer
	 */
	class VariableText extends TestCase {
		public function testBuildString() {
			$exp = new VariableExpression('Lets have $one of ${each} {$type}.');
			$this->assertEquals('Lets have one of each type.', $exp->execute([
				'one' =>	'one',
				'each' =>	'each',
				'type' =>	'type'
			]));

			$exp = new VariableExpression('$one$two');
			$this->assertNull($exp->execute([
				'one' =>	null,
				'two' =>	null
			]));

			$exp = new VariableExpression('$one{$two}');
			$this->assertNull($exp->execute([
				'one' =>	null,
				'two' =>	null
			]));

			$exp = new VariableExpression('{$one}$two');
			$this->assertNull($exp->execute([
				'one' =>	null,
				'two' =>	null
			]));
		}

		public function testEscapesInLiteral() {
			$exp = new VariableExpression('Nothing \$ to see here');
			$this->assertEquals('Nothing $ to see here', $exp->execute([]));

			$exp = new VariableExpression('Nothing \\\ to see here');
			$this->assertEquals('Nothing \\ to see here', $exp->execute([]));
		}

		public function testEscapesInVariable() {
			$exp = new VariableExpression('$broken}');
			$this->assertEquals('}', $exp->execute([
				'broken' =>	null
			]));

			$exp = new VariableExpression('$broken\}');
			$this->assertNull($exp->execute([
				'broken}' =>	null
			]));

			$exp = new VariableExpression('{$one\$two}');
			$this->assertNull($exp->execute([
				'one$two' =>	null
			]));

			$exp = new VariableExpression('{$one.two}');
			$this->assertNull($exp->execute([
				'one.two' =>	null
			]));

			$exp = new VariableExpression('{$one\\\}');
			$this->assertNull($exp->execute([
				'one\\' =>	null
			]));

			$exp = new VariableExpression('{$one }');
			$this->assertNull($exp->execute([
				'one ' =>	null
			]));
		}

		/**
		 * @expectedException Concerto\TextExpressions\LexerException
		 */
		public function testerUnexpectedWhitespaceInVariable() {
			$exp = new VariableExpression('$ ');
		}

		/**
		 * @expectedException Concerto\TextExpressions\LexerException
		 */
		public function testerUnexpectedEndOfVariable() {
			$exp = new VariableExpression('{$}');
		}

		/**
		 * @expectedException Concerto\TextExpressions\LexerException
		 */
		public function testerUnexpectedEndOfExpressionInTerminated() {
			$exp = new VariableExpression('{$');
		}

		/**
		 * @expectedException Concerto\TextExpressions\LexerException
		 */
		public function testerUnexpectedEndOfExpressionInUnterminated() {
			$exp = new VariableExpression('$');
		}

		/**
		 * @expectedException Concerto\TextExpressions\LexerException
		 */
		public function testerUnexpectedVariableTerminated() {
			$exp = new VariableExpression('{$foo$bar}');
			var_dump($exp);
		}

		/**
		 * @expectedException Concerto\TextExpressions\LexerException
		 */
		public function testerUnexpectedVariableUnterminated() {
			$exp = new VariableExpression('$$bar');
		}

		// /**
		//  * @expectedException Concerto\TextExpressions\LexerException
		//  */
		// public function testLexerUnexpectedEndInExpression() {
		// 	$exp = new VariableExpression('/<foo=');
		// }
	}