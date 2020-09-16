<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareCafePrices as ChildCareCafePrices;
use CareMd\CareMd\CareCafePricesQuery as ChildCareCafePricesQuery;
use CareMd\CareMd\Map\CareCafePricesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_cafe_prices' table.
 *
 *
 *
 * @method     ChildCareCafePricesQuery orderByItem($order = Criteria::ASC) Order by the item column
 * @method     ChildCareCafePricesQuery orderByLang($order = Criteria::ASC) Order by the lang column
 * @method     ChildCareCafePricesQuery orderByProductgroup($order = Criteria::ASC) Order by the productgroup column
 * @method     ChildCareCafePricesQuery orderByArticle($order = Criteria::ASC) Order by the article column
 * @method     ChildCareCafePricesQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareCafePricesQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     ChildCareCafePricesQuery orderByUnit($order = Criteria::ASC) Order by the unit column
 * @method     ChildCareCafePricesQuery orderByPicFilename($order = Criteria::ASC) Order by the pic_filename column
 * @method     ChildCareCafePricesQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareCafePricesQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareCafePricesQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareCafePricesQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareCafePricesQuery groupByItem() Group by the item column
 * @method     ChildCareCafePricesQuery groupByLang() Group by the lang column
 * @method     ChildCareCafePricesQuery groupByProductgroup() Group by the productgroup column
 * @method     ChildCareCafePricesQuery groupByArticle() Group by the article column
 * @method     ChildCareCafePricesQuery groupByDescription() Group by the description column
 * @method     ChildCareCafePricesQuery groupByPrice() Group by the price column
 * @method     ChildCareCafePricesQuery groupByUnit() Group by the unit column
 * @method     ChildCareCafePricesQuery groupByPicFilename() Group by the pic_filename column
 * @method     ChildCareCafePricesQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareCafePricesQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareCafePricesQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareCafePricesQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareCafePricesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareCafePricesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareCafePricesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareCafePricesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareCafePricesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareCafePricesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareCafePrices findOne(ConnectionInterface $con = null) Return the first ChildCareCafePrices matching the query
 * @method     ChildCareCafePrices findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareCafePrices matching the query, or a new ChildCareCafePrices object populated from the query conditions when no match is found
 *
 * @method     ChildCareCafePrices findOneByItem(int $item) Return the first ChildCareCafePrices filtered by the item column
 * @method     ChildCareCafePrices findOneByLang(string $lang) Return the first ChildCareCafePrices filtered by the lang column
 * @method     ChildCareCafePrices findOneByProductgroup(string $productgroup) Return the first ChildCareCafePrices filtered by the productgroup column
 * @method     ChildCareCafePrices findOneByArticle(string $article) Return the first ChildCareCafePrices filtered by the article column
 * @method     ChildCareCafePrices findOneByDescription(string $description) Return the first ChildCareCafePrices filtered by the description column
 * @method     ChildCareCafePrices findOneByPrice(string $price) Return the first ChildCareCafePrices filtered by the price column
 * @method     ChildCareCafePrices findOneByUnit(string $unit) Return the first ChildCareCafePrices filtered by the unit column
 * @method     ChildCareCafePrices findOneByPicFilename(string $pic_filename) Return the first ChildCareCafePrices filtered by the pic_filename column
 * @method     ChildCareCafePrices findOneByModifyId(string $modify_id) Return the first ChildCareCafePrices filtered by the modify_id column
 * @method     ChildCareCafePrices findOneByModifyTime(string $modify_time) Return the first ChildCareCafePrices filtered by the modify_time column
 * @method     ChildCareCafePrices findOneByCreateId(string $create_id) Return the first ChildCareCafePrices filtered by the create_id column
 * @method     ChildCareCafePrices findOneByCreateTime(string $create_time) Return the first ChildCareCafePrices filtered by the create_time column *

 * @method     ChildCareCafePrices requirePk($key, ConnectionInterface $con = null) Return the ChildCareCafePrices by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOne(ConnectionInterface $con = null) Return the first ChildCareCafePrices matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareCafePrices requireOneByItem(int $item) Return the first ChildCareCafePrices filtered by the item column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByLang(string $lang) Return the first ChildCareCafePrices filtered by the lang column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByProductgroup(string $productgroup) Return the first ChildCareCafePrices filtered by the productgroup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByArticle(string $article) Return the first ChildCareCafePrices filtered by the article column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByDescription(string $description) Return the first ChildCareCafePrices filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByPrice(string $price) Return the first ChildCareCafePrices filtered by the price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByUnit(string $unit) Return the first ChildCareCafePrices filtered by the unit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByPicFilename(string $pic_filename) Return the first ChildCareCafePrices filtered by the pic_filename column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByModifyId(string $modify_id) Return the first ChildCareCafePrices filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByModifyTime(string $modify_time) Return the first ChildCareCafePrices filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByCreateId(string $create_id) Return the first ChildCareCafePrices filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafePrices requireOneByCreateTime(string $create_time) Return the first ChildCareCafePrices filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareCafePrices[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareCafePrices objects based on current ModelCriteria
 * @method     ChildCareCafePrices[]|ObjectCollection findByItem(int $item) Return ChildCareCafePrices objects filtered by the item column
 * @method     ChildCareCafePrices[]|ObjectCollection findByLang(string $lang) Return ChildCareCafePrices objects filtered by the lang column
 * @method     ChildCareCafePrices[]|ObjectCollection findByProductgroup(string $productgroup) Return ChildCareCafePrices objects filtered by the productgroup column
 * @method     ChildCareCafePrices[]|ObjectCollection findByArticle(string $article) Return ChildCareCafePrices objects filtered by the article column
 * @method     ChildCareCafePrices[]|ObjectCollection findByDescription(string $description) Return ChildCareCafePrices objects filtered by the description column
 * @method     ChildCareCafePrices[]|ObjectCollection findByPrice(string $price) Return ChildCareCafePrices objects filtered by the price column
 * @method     ChildCareCafePrices[]|ObjectCollection findByUnit(string $unit) Return ChildCareCafePrices objects filtered by the unit column
 * @method     ChildCareCafePrices[]|ObjectCollection findByPicFilename(string $pic_filename) Return ChildCareCafePrices objects filtered by the pic_filename column
 * @method     ChildCareCafePrices[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareCafePrices objects filtered by the modify_id column
 * @method     ChildCareCafePrices[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareCafePrices objects filtered by the modify_time column
 * @method     ChildCareCafePrices[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareCafePrices objects filtered by the create_id column
 * @method     ChildCareCafePrices[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareCafePrices objects filtered by the create_time column
 * @method     ChildCareCafePrices[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareCafePricesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareCafePricesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareCafePrices', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareCafePricesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareCafePricesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareCafePricesQuery) {
            return $criteria;
        }
        $query = new ChildCareCafePricesQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareCafePrices|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareCafePrices object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareCafePrices object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareCafePrices object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareCafePrices object has no primary key');
    }

    /**
     * Filter the query on the item column
     *
     * Example usage:
     * <code>
     * $query->filterByItem(1234); // WHERE item = 1234
     * $query->filterByItem(array(12, 34)); // WHERE item IN (12, 34)
     * $query->filterByItem(array('min' => 12)); // WHERE item > 12
     * </code>
     *
     * @param     mixed $item The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByItem($item = null, $comparison = null)
    {
        if (is_array($item)) {
            $useMinMax = false;
            if (isset($item['min'])) {
                $this->addUsingAlias(CareCafePricesTableMap::COL_ITEM, $item['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($item['max'])) {
                $this->addUsingAlias(CareCafePricesTableMap::COL_ITEM, $item['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_ITEM, $item, $comparison);
    }

    /**
     * Filter the query on the lang column
     *
     * Example usage:
     * <code>
     * $query->filterByLang('fooValue');   // WHERE lang = 'fooValue'
     * $query->filterByLang('%fooValue%', Criteria::LIKE); // WHERE lang LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lang The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByLang($lang = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lang)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_LANG, $lang, $comparison);
    }

    /**
     * Filter the query on the productgroup column
     *
     * Example usage:
     * <code>
     * $query->filterByProductgroup('fooValue');   // WHERE productgroup = 'fooValue'
     * $query->filterByProductgroup('%fooValue%', Criteria::LIKE); // WHERE productgroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productgroup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByProductgroup($productgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productgroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_PRODUCTGROUP, $productgroup, $comparison);
    }

    /**
     * Filter the query on the article column
     *
     * Example usage:
     * <code>
     * $query->filterByArticle('fooValue');   // WHERE article = 'fooValue'
     * $query->filterByArticle('%fooValue%', Criteria::LIKE); // WHERE article LIKE '%fooValue%'
     * </code>
     *
     * @param     string $article The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByArticle($article = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($article)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_ARTICLE, $article, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice('fooValue');   // WHERE price = 'fooValue'
     * $query->filterByPrice('%fooValue%', Criteria::LIKE); // WHERE price LIKE '%fooValue%'
     * </code>
     *
     * @param     string $price The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($price)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the unit column
     *
     * Example usage:
     * <code>
     * $query->filterByUnit('fooValue');   // WHERE unit = 'fooValue'
     * $query->filterByUnit('%fooValue%', Criteria::LIKE); // WHERE unit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_UNIT, $unit, $comparison);
    }

    /**
     * Filter the query on the pic_filename column
     *
     * Example usage:
     * <code>
     * $query->filterByPicFilename('fooValue');   // WHERE pic_filename = 'fooValue'
     * $query->filterByPicFilename('%fooValue%', Criteria::LIKE); // WHERE pic_filename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picFilename The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByPicFilename($picFilename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picFilename)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_PIC_FILENAME, $picFilename, $comparison);
    }

    /**
     * Filter the query on the modify_id column
     *
     * Example usage:
     * <code>
     * $query->filterByModifyId('fooValue');   // WHERE modify_id = 'fooValue'
     * $query->filterByModifyId('%fooValue%', Criteria::LIKE); // WHERE modify_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifyId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_MODIFY_ID, $modifyId, $comparison);
    }

    /**
     * Filter the query on the modify_time column
     *
     * Example usage:
     * <code>
     * $query->filterByModifyTime('2011-03-14'); // WHERE modify_time = '2011-03-14'
     * $query->filterByModifyTime('now'); // WHERE modify_time = '2011-03-14'
     * $query->filterByModifyTime(array('max' => 'yesterday')); // WHERE modify_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $modifyTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareCafePricesTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareCafePricesTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
    }

    /**
     * Filter the query on the create_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateId('fooValue');   // WHERE create_id = 'fooValue'
     * $query->filterByCreateId('%fooValue%', Criteria::LIKE); // WHERE create_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $createId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_CREATE_ID, $createId, $comparison);
    }

    /**
     * Filter the query on the create_time column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateTime('2011-03-14'); // WHERE create_time = '2011-03-14'
     * $query->filterByCreateTime('now'); // WHERE create_time = '2011-03-14'
     * $query->filterByCreateTime(array('max' => 'yesterday')); // WHERE create_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $createTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareCafePricesTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareCafePricesTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafePricesTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareCafePrices $careCafePrices Object to remove from the list of results
     *
     * @return $this|ChildCareCafePricesQuery The current query, for fluid interface
     */
    public function prune($careCafePrices = null)
    {
        if ($careCafePrices) {
            throw new LogicException('CareCafePrices object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_cafe_prices table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareCafePricesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareCafePricesTableMap::clearInstancePool();
            CareCafePricesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareCafePricesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareCafePricesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareCafePricesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareCafePricesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareCafePricesQuery
