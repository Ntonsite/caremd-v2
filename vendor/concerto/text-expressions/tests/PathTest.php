<?php

	namespace Concerto\TextExpressions\Tests;
	use Concerto\TextExpressions\ExpressionResult;
	use Concerto\TextExpressions\LexerException;
	use Concerto\TextExpressions\PathExpression;
	use Concerto\TextExpressions\PathLexer;
	use PHPUnit_Framework_TestCase as TestCase;

	/**
	 * @covers Concerto\TextExpressions\PathExpression
	 * @covers Concerto\TextExpressions\PathLexer
	 */
	class PathText extends TestCase {
		public function testSingleParameter() {
			$exp = new PathExpression('/blog/<page>');
			$this->assertTrue($exp->test('/blog/page=a'));
			$this->assertTrue($exp->test('/blog/page=1'));
		}

		public function testLoneExpression() {
			$exp = new PathExpression('/blog/<=[0-9]>');
			$this->assertFalse($exp->test('/blog/a'));
			$this->assertTrue($exp->test('/blog/1'));
		}

		public function testEmptyExpression() {
			$exp = new PathExpression('/blog/<page=>');
			$this->assertTrue($exp->test('/blog/a'));
			$this->assertTrue($exp->test('/blog/1'));
		}

		public function testParameterExpressions() {
			$exp = new PathExpression('/blog/<year=[0-9]{4}>/<month=0[1-9]|10|11|12>/rss');
			$this->assertFalse($exp->test('/blog/2014/00/rss'));
			$this->assertFalse($exp->test('/blog/2014/13/rss'));
			$this->assertTrue($exp->test('/blog/2014/05/rss'));
		}

		public function testExecutionResults() {
			$exp = new PathExpression('/blog/<year=[0-9]{4}>/<month=0[1-9]|10|11|12>/<article>');
			$match = $exp->execute('/blog/2014/05/i-have-existed-since-the-dawn-of-time');
			$this->assertInstanceOf('Concerto\TextExpressions\ExpressionResult', $match);
			$this->assertEquals('i-have-existed-since-the-dawn-of-time', $match->article);
			$this->assertEquals('/blog/i-have-existed-since-the-dawn-of-time', $match->replace('/blog/$article'));
		}

		public function testLexerExecution() {
			$lexer = new PathLexer();
			$lexer->setParameter('page', '[1-9][0-9]*');
			$this->assertEquals($lexer->getParameter('page'), '[1-9][0-9]*');

			$query = new PathExpression('/<page>', $lexer);
			$lexer->parse($query, 'id=[0-9]+');
		}

		public function testEscapesInPath() {
			$exp = new PathExpression('/foo\<bar');
			$this->assertTrue($exp->test('/foo<bar'));

			$exp = new PathExpression('/foo\\\bar');
			$this->assertTrue($exp->test('/foo\\bar'));
		}

		public function testEscapesInParameters() {
			$exp = new PathExpression('/<test me>');
			$this->assertTrue($exp->test('/anything'));

			$exp = new PathExpression('/<test\=me>');
			$this->assertTrue($exp->test('/anything'));

			$exp = new PathExpression('/<test\>me>');
			$this->assertTrue($exp->test('/anything'));

			$exp = new PathExpression('/<test\\\me>');
			$this->assertTrue($exp->test('/anything'));
		}

		public function testEscapesInExpressions() {
			$exp = new PathExpression('/<test=foo\>bar>');
			$this->assertTrue($exp->test('/foo>bar'));

			$exp = new PathExpression('/<test=foo\\\bar>');
			$this->assertTrue($exp->test('/foo\bar'));
		}

		/**
		 * @expectedException Concerto\TextExpressions\LexerException
		 */
		public function testLexerUnexpectedEndInParameter() {
			$exp = new PathExpression('/<foo');
		}

		/**
		 * @expectedException Concerto\TextExpressions\LexerException
		 */
		public function testLexerUnexpectedEndInExpression() {
			$exp = new PathExpression('/<foo=');
		}

		// /**
		//  * @expectedException Concerto\TextExpressions\PathLexerException
		//  */
		// public function testLexerDuplicateLiteralParameter() {
		// 	$exp = new PathExpression('name&name');
		// }

		// /**
		//  * @expectedException Concerto\TextExpressions\PathLexerException
		//  */
		// public function testLexerDuplicateLiteralParameterExpression() {
		// 	$exp = new PathExpression('name=a&name=b');
		// }

		// /**
		//  * @expectedException Concerto\TextExpressions\PathLexerException
		//  */
		// public function testLexerDuplicateExpressionParameter() {
		// 	$exp = new PathExpression('name&<name>');
		// }

		// /**
		//  * @expectedException Concerto\TextExpressions\PathLexerException
		//  */
		// public function testLexerDuplicateExpressionComplexParameter() {
		// 	$exp = new PathExpression('name&<name=foo>');
		// }

		// /**
		//  * @expectedException Concerto\TextExpressions\PathLexerException
		//  */
		// public function testLexerLiteralParameterUnexpectedWhitespace() {
		// 	$exp = new PathExpression('foo &bar');
		// }

		// /**
		//  * @expectedException Concerto\TextExpressions\PathLexerException
		//  */
		// public function testLexerExpressionParameterUnexpectedWhitespace() {
		// 	$exp = new PathExpression('<name >');
		// }
	}