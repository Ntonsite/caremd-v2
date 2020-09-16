<?php

	namespace Concerto\TextExpressions\Tests;

	use Concerto\TextExpressions\ExpressionResult;
	use Concerto\TextExpressions\PathExpression;
	use PHPUnit_Framework_TestCase as TestCase;

	/**
	 * @covers Concerto\TextExpressions\ExpressionResult
	 */
	class ResultTest extends TestCase {
		public function testRegularExpressions() {
			$exp = new PathExpression('/blog/<year=[0-9]{4}>/<month=0[1-9]|10|11|12>/rss');
			$match = $exp->execute('/blog/2014/13/rss');

			$this->assertInstanceOf('Concerto\TextExpressions\ExpressionResult', $match);

			foreach ($match as $name => $value) {
				$this->assertTrue(isset($match->{$name}));
				$this->assertNotNull($match->{$name});

				switch ($name) {
					case 'year':
						$this->assertEquals('2014', $value);
						break;
					case 'month':
						$this->assertEquals('05', $value);
						break;
				}

				usnet($match->{$name});
				$this->assertFalse(isset($match->{$name}));

				$match->{$name} = $value;
				$this->assertTrue(isset($match->{$name}));

				$match->offsetUnset($name);
				$this->assertFalse(isset($match->{$name}));
			}
		}
	}