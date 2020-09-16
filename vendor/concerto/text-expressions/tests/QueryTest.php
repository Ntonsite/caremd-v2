<?php

	namespace Concerto\TextExpressions\Tests;
	use Concerto\TextExpressions\QueryExpression;
	use Concerto\TextExpressions\QueryExpressionResult;
	use Concerto\TextExpressions\QueryExpressionException;
	use Concerto\TextExpressions\QueryLexer;
	use Concerto\TextExpressions\QueryLexerException;
	use PHPUnit_Framework_TestCase as TestCase;

	/**
	 * @covers Concerto\TextExpressions\QueryExpression
	 * @covers Concerto\TextExpressions\QueryExpressionResult
	 * @covers Concerto\TextExpressions\QueryLexer
	 */
	class QueryTest extends TestCase {
		public function testSingleParameter() {
			$exp = new QueryExpression('page');
			$this->assertTrue($exp->test('page=a'));
			$this->assertTrue($exp->test('page=1'));
		}

		public function testParameterExpressions() {
			$exp = new QueryExpression('<year=[0-9]{4}>&<month=0[1-9]|10|11|12>&rss');
			$this->assertFalse($exp->test('year=2014&month=00&rss'));
			$this->assertFalse($exp->test('year=2014&month=13&rss'));
			$this->assertTrue($exp->test('year=2014&month=05&rss'));
		}

		public function testExecutionResults() {
			$exp = new QueryExpression('<year=[0-9]{4}>&<month=0[1-9]|10|11|12>&article');
			$match = $exp->execute('year=2014&month=05&article=i-have-existed-since-the-dawn-of-time');
			$this->assertInstanceOf('Concerto\TextExpressions\QueryExpressionResult', $match);
			$this->assertEquals('i-have-existed-since-the-dawn-of-time', $match->article);
			$this->assertEquals('/blog/i-have-existed-since-the-dawn-of-time', $match->replace('/blog/$article'));
			$this->assertEquals('year=2014&month=05&article=i-have-existed-since-the-dawn-of-time', $match->build());
		}

		public function testEmptyParameterExpressions() {
			$exp = new QueryExpression('foo=&bar=');
			$this->assertTrue($exp->hasParameter('foo'));
			$this->assertTrue($exp->hasParameter('bar'));

			$exp = new QueryExpression('<foo=>&<bar=>');
			$this->assertTrue($exp->hasParameter('foo'));
			$this->assertTrue($exp->hasParameter('bar'));
		}

		/**
		 * @expectedException Concerto\TextExpressions\QueryExpressionException
		 */
		public function testDuplicateParameter() {
			$exp = new QueryExpression('<page=[1-9][0-9]*>');
			$this->assertTrue($exp->hasParameter('page'));
			$exp->appendParameter('page', '1');
		}

		public function testLexerExecution() {
			$lexer = new QueryLexer();
			$lexer->setParameter('page', '[1-9][0-9]*');
			$this->assertEquals($lexer->getParameter('page'), '[1-9][0-9]*');

			$query = new QueryExpression('page', $lexer);
			$lexer->parse($query, 'id=[0-9]+');
		}

		public function testEscapesInParameterNames() {
			$exp = new QueryExpression('foo\&bar');
			$this->assertTrue($exp->hasParameter('foo&bar'));

			$exp = new QueryExpression('<foo\&bar>');
			$this->assertTrue($exp->hasParameter('foo&bar'));

			$exp = new QueryExpression('foo\=bar');
			$this->assertTrue($exp->hasParameter('foo=bar'));

			$exp = new QueryExpression('<foo\=bar>');
			$this->assertTrue($exp->hasParameter('foo=bar'));

			$exp = new QueryExpression('foo\\\bar');
			$this->assertTrue($exp->hasParameter('foo\\bar'));

			$exp = new QueryExpression('<foo\\\bar>');
			$this->assertTrue($exp->hasParameter('foo\\bar'));

			$exp = new QueryExpression('<foo\>bar>');
			$this->assertTrue($exp->hasParameter('foo>bar'));
		}

		public function testEscapesInParameterExpressions() {
			$exp = new QueryExpression('test=foo\&bar');
			$this->assertTrue($exp->hasParameter('test'));

			$exp = new QueryExpression('test=foo\\\bar');
			$this->assertTrue($exp->hasParameter('test'));

			$exp = new QueryExpression('<test=foo\\\bar>');
			$this->assertTrue($exp->hasParameter('test'));

			$exp = new QueryExpression('<test=foo\>bar>');
			$this->assertTrue($exp->hasParameter('test'));
		}

		/**
		 * @expectedException Concerto\TextExpressions\QueryLexerException
		 */
		public function testLexerParameterNameEmpty() {
			$exp = new QueryExpression('&');
		}

		/**
		 * @expectedException Concerto\TextExpressions\QueryLexerException
		 */
		public function testLexerDuplicateLiteralParameter() {
			$exp = new QueryExpression('name&name');
		}

		/**
		 * @expectedException Concerto\TextExpressions\QueryLexerException
		 */
		public function testLexerDuplicateLiteralParameterExpression() {
			$exp = new QueryExpression('name=a&name=b');
		}

		/**
		 * @expectedException Concerto\TextExpressions\QueryLexerException
		 */
		public function testLexerDuplicateExpressionParameter() {
			$exp = new QueryExpression('name&<name>');
		}

		/**
		 * @expectedException Concerto\TextExpressions\QueryLexerException
		 */
		public function testLexerDuplicateExpressionComplexParameter() {
			$exp = new QueryExpression('name&<name=foo>');
		}

		/**
		 * @expectedException Concerto\TextExpressions\QueryLexerException
		 */
		public function testLexerLiteralParameterUnexpectedWhitespace() {
			$exp = new QueryExpression('foo &bar');
		}

		/**
		 * @expectedException Concerto\TextExpressions\QueryLexerException
		 */
		public function testLexerExpressionParameterUnexpectedWhitespace() {
			$exp = new QueryExpression('<name >');
		}
	}