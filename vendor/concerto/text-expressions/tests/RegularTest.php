<?php

	namespace Concerto\TextExpressions\Tests;

	use Concerto\TextExpressions\ExpressionResult;
	use Concerto\TextExpressions\RegularExpression;
	use PHPUnit_Framework_TestCase as TestCase;

	/**
	 * @covers Concerto\TextExpressions\RegularExpression
	 */
	class RegularTest extends TestCase {
		public function testRegularExpressions() {
			$exp = new RegularExpression('\b(?<word>th[ae]n)\b', 'i');
			$this->assertFalse($exp->test('not see much'));
			$this->assertTrue($exp->test('they did then'));

			$exp = new RegularExpression('\b(?<word>th[ae]n)\b', 'i');
			$match = $exp->execute('they did then');
			$this->assertInstanceOf('Concerto\TextExpressions\ExpressionResult', $match);
			$this->assertEquals('Found: then', $match->replace('Found: $word'));

			$exp = new RegularExpression('\b(?<word>th[ae]n)\b', 'i');
			$match = $exp->execute('nothing');
			$this->assertInstanceOf('Concerto\TextExpressions\ExpressionResult', $match);
			$this->assertEquals('Found: ', $match->replace('Found: $word'));
		}
	}