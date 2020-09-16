# Text Expressions Component

Library of text expression engines, for searching, replacing and testing text.

[![Build Status](https://secure.travis-ci.org/concertophp/text-expressions.png?branch=master)](http://travis-ci.org/concertophp/text-expressions)


## Install

The recommended way to install Text Expressions is [through composer](http://getcomposer.org).

```JSON
{
    "require": {
        "concerto/text-expressions": "0.*"
    }
}
```


## Usage
### Regular Expressions

Wraps PHPs internal PCRE functions with intuitive OOP.

```php
use Concerto\TextExpressions\RegularExpression as RegExp;

// Does a string contain the words 'than' or 'then':
$exp = new RegExp('\b(?<word>th[ae]n)\b', 'i');

$exp->test('not see much');
// > false

$exp->test('they did then');
// > true

$exp->execute('they did then')->replace('Found: $word')l
// > Found: then
```


### Path Expressions

An expression engine for parsing HTTP request paths.

```php
use Concerto\TextExpressions\PathExpression as PathExp;

// Quick and easy testing:
$exp = new PathExp('/blog/<page>');

$exp->test('/blog/1');
// > true

// Add regular expressions for validation:
$exp = new PathExp('/blog/<page=[1-9][0-9]*>');

$exp->test('/blog/a');
// > false

$exp->test('/blog/1');
// > true

// Testing even more complex paths:
$exp = new PathExp('/blog/<year=[0-9]{4}>/<month=0[1-9]|10|11|12>/rss');

$exp->test('/blog/2014/00/rss');
// > false

$exp->test('/blog/2014/13/rss');
// > false

$exp->test('/blog/2014/05/rss');
// > true

// Extract or replace parameters:
$exp = new PathExp('/blog/<year=[0-9]{4}>/<month=0[1-9]|10|11|12>/<article>');
$match = $exp->execute('/blog/2014/05/i-have-existed-since-the-dawn-of-time');

$match->article;
// > i-have-existed-since-the-dawn-of-time

$match->replace('/blog/$article');
// > /blog/i-have-existed-since-the-dawn-of-time
```

Alternatively you can define your own lexer and set some default expressions:

```php
use Concerto\TextExpressions\PathLexer;

// Set default expression for page:
$lexer = new PathLexer();
$lexer->setParameter('page', '[1-9][0-9]*');

// Using page without an expression:
$exp = new PathExp('/blog/<page>', $lexer);

$exp->test('/blog/a');
// > false

$exp->test('/blog/1');
// > true
```


### Query Expressions

An expression engine for parsing HTTP query strings. **At this time query strings containing arrays cannot be parsed using this library.**

```php
use Concerto\TextExpressions\QueryExpression as QueryExp;

// Quick and easy testing:
$exp = new QueryExp('page');

$exp->test('page=1');
// > true

// The order of arguments does not matter:
$exp = new QueryExp('first&second');

$exp->test('second&first');
// > true

// Add regular expressions for validation:
$exp = new QueryExp('<page=[1-9][0-9]*>');

$exp->test('page=a');
// > false

$exp->test('page=1');
// > true

// Testing even more complex paths:
$exp = new QueryExp('<year=[0-9]{4}>&<month=0[1-9]|10|11|12>&feed=rss');

$exp->test('year=2014&month=00&feed=rss');
// > false

$exp->test('year=2014&month=13&feed=rss');
// > false

$exp->test('year=2014&month=05&feed=rss');
// > true

// Extract or replace parameters:
$exp = new QueryExp('<year=[0-9]{4}>&<month=0[1-9]|10|11|12>&article');
$match = $exp->execute('year=2014&month=05&article=i-have-existed-since-the-dawn-of-time');

$match->article;
// > i-have-existed-since-the-dawn-of-time

$match->replace('article=$article');
// > article=i-have-existed-since-the-dawn-of-time

// Build a new query from the results:
$match->build();
// > year=2014&month=05&article=i-have-existed-since-the-dawn-of-time
```

Alternatively you can define your own lexer and set some default expressions:

```php
use Concerto\TextExpressions\QeuryLexer;

// Set default expression for page:
$lexer = new QeuryLexer();
$lexer->setParameter('page', '[1-9][0-9]*');

// Using page without an expression:
$exp = new QueryExp('page', $lexer);

$exp->test('page=a');
// > false

$exp->test('page=1');
// > true
```


### Variable Expressions

Simulates PHPs embedded variable syntax.

```php
use Concerto\TextExpressions\VariableExpression as VarExp;

$exp = new VarExp('Take it easy {$name}!');

$exp->execute(['name' => 'human']);
// > Take it easy human!
```