<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzLaboratoryTests as ChildCareTzLaboratoryTests;
use CareMd\CareMd\CareTzLaboratoryTestsQuery as ChildCareTzLaboratoryTestsQuery;
use CareMd\CareMd\Map\CareTzLaboratoryTestsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_laboratory_tests' table.
 *
 *
 *
 * @method     ChildCareTzLaboratoryTestsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzLaboratoryTestsQuery orderByParent($order = Criteria::ASC) Order by the parent column
 * @method     ChildCareTzLaboratoryTestsQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTzLaboratoryTestsQuery orderByIsCommon($order = Criteria::ASC) Order by the is_common column
 * @method     ChildCareTzLaboratoryTestsQuery orderByIsCommentRequired($order = Criteria::ASC) Order by the is_comment_required column
 * @method     ChildCareTzLaboratoryTestsQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     ChildCareTzLaboratoryTestsQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     ChildCareTzLaboratoryTestsQuery orderByIsEnabled($order = Criteria::ASC) Order by the is_enabled column
 *
 * @method     ChildCareTzLaboratoryTestsQuery groupById() Group by the id column
 * @method     ChildCareTzLaboratoryTestsQuery groupByParent() Group by the parent column
 * @method     ChildCareTzLaboratoryTestsQuery groupByName() Group by the name column
 * @method     ChildCareTzLaboratoryTestsQuery groupByIsCommon() Group by the is_common column
 * @method     ChildCareTzLaboratoryTestsQuery groupByIsCommentRequired() Group by the is_comment_required column
 * @method     ChildCareTzLaboratoryTestsQuery groupByComment() Group by the comment column
 * @method     ChildCareTzLaboratoryTestsQuery groupByPrice() Group by the price column
 * @method     ChildCareTzLaboratoryTestsQuery groupByIsEnabled() Group by the is_enabled column
 *
 * @method     ChildCareTzLaboratoryTestsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzLaboratoryTestsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzLaboratoryTestsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzLaboratoryTestsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzLaboratoryTestsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzLaboratoryTestsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzLaboratoryTests findOne(ConnectionInterface $con = null) Return the first ChildCareTzLaboratoryTests matching the query
 * @method     ChildCareTzLaboratoryTests findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzLaboratoryTests matching the query, or a new ChildCareTzLaboratoryTests object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzLaboratoryTests findOneById(string $id) Return the first ChildCareTzLaboratoryTests filtered by the id column
 * @method     ChildCareTzLaboratoryTests findOneByParent(string $parent) Return the first ChildCareTzLaboratoryTests filtered by the parent column
 * @method     ChildCareTzLaboratoryTests findOneByName(string $name) Return the first ChildCareTzLaboratoryTests filtered by the name column
 * @method     ChildCareTzLaboratoryTests findOneByIsCommon(int $is_common) Return the first ChildCareTzLaboratoryTests filtered by the is_common column
 * @method     ChildCareTzLaboratoryTests findOneByIsCommentRequired(int $is_comment_required) Return the first ChildCareTzLaboratoryTests filtered by the is_comment_required column
 * @method     ChildCareTzLaboratoryTests findOneByComment(string $comment) Return the first ChildCareTzLaboratoryTests filtered by the comment column
 * @method     ChildCareTzLaboratoryTests findOneByPrice(double $price) Return the first ChildCareTzLaboratoryTests filtered by the price column
 * @method     ChildCareTzLaboratoryTests findOneByIsEnabled(int $is_enabled) Return the first ChildCareTzLaboratoryTests filtered by the is_enabled column *

 * @method     ChildCareTzLaboratoryTests requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzLaboratoryTests by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryTests requireOne(ConnectionInterface $con = null) Return the first ChildCareTzLaboratoryTests matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzLaboratoryTests requireOneById(string $id) Return the first ChildCareTzLaboratoryTests filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryTests requireOneByParent(string $parent) Return the first ChildCareTzLaboratoryTests filtered by the parent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryTests requireOneByName(string $name) Return the first ChildCareTzLaboratoryTests filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryTests requireOneByIsCommon(int $is_common) Return the first ChildCareTzLaboratoryTests filtered by the is_common column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryTests requireOneByIsCommentRequired(int $is_comment_required) Return the first ChildCareTzLaboratoryTests filtered by the is_comment_required column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryTests requireOneByComment(string $comment) Return the first ChildCareTzLaboratoryTests filtered by the comment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryTests requireOneByPrice(double $price) Return the first ChildCareTzLaboratoryTests filtered by the price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryTests requireOneByIsEnabled(int $is_enabled) Return the first ChildCareTzLaboratoryTests filtered by the is_enabled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzLaboratoryTests[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzLaboratoryTests objects based on current ModelCriteria
 * @method     ChildCareTzLaboratoryTests[]|ObjectCollection findById(string $id) Return ChildCareTzLaboratoryTests objects filtered by the id column
 * @method     ChildCareTzLaboratoryTests[]|ObjectCollection findByParent(string $parent) Return ChildCareTzLaboratoryTests objects filtered by the parent column
 * @method     ChildCareTzLaboratoryTests[]|ObjectCollection findByName(string $name) Return ChildCareTzLaboratoryTests objects filtered by the name column
 * @method     ChildCareTzLaboratoryTests[]|ObjectCollection findByIsCommon(int $is_common) Return ChildCareTzLaboratoryTests objects filtered by the is_common column
 * @method     ChildCareTzLaboratoryTests[]|ObjectCollection findByIsCommentRequired(int $is_comment_required) Return ChildCareTzLaboratoryTests objects filtered by the is_comment_required column
 * @method     ChildCareTzLaboratoryTests[]|ObjectCollection findByComment(string $comment) Return ChildCareTzLaboratoryTests objects filtered by the comment column
 * @method     ChildCareTzLaboratoryTests[]|ObjectCollection findByPrice(double $price) Return ChildCareTzLaboratoryTests objects filtered by the price column
 * @method     ChildCareTzLaboratoryTests[]|ObjectCollection findByIsEnabled(int $is_enabled) Return ChildCareTzLaboratoryTests objects filtered by the is_enabled column
 * @method     ChildCareTzLaboratoryTests[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzLaboratoryTestsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzLaboratoryTestsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzLaboratoryTests', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzLaboratoryTestsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzLaboratoryTestsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzLaboratoryTestsQuery) {
            return $criteria;
        }
        $query = new ChildCareTzLaboratoryTestsQuery();
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
     * @return ChildCareTzLaboratoryTests|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzLaboratoryTestsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzLaboratoryTestsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCareTzLaboratoryTests A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, parent, name, is_common, is_comment_required, comment, price, is_enabled FROM care_tz_laboratory_tests WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTzLaboratoryTests $obj */
            $obj = new ChildCareTzLaboratoryTests();
            $obj->hydrate($row);
            CareTzLaboratoryTestsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildCareTzLaboratoryTests|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the parent column
     *
     * Example usage:
     * <code>
     * $query->filterByParent(1234); // WHERE parent = 1234
     * $query->filterByParent(array(12, 34)); // WHERE parent IN (12, 34)
     * $query->filterByParent(array('min' => 12)); // WHERE parent > 12
     * </code>
     *
     * @param     mixed $parent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function filterByParent($parent = null, $comparison = null)
    {
        if (is_array($parent)) {
            $useMinMax = false;
            if (isset($parent['min'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_PARENT, $parent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parent['max'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_PARENT, $parent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_PARENT, $parent, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the is_common column
     *
     * Example usage:
     * <code>
     * $query->filterByIsCommon(1234); // WHERE is_common = 1234
     * $query->filterByIsCommon(array(12, 34)); // WHERE is_common IN (12, 34)
     * $query->filterByIsCommon(array('min' => 12)); // WHERE is_common > 12
     * </code>
     *
     * @param     mixed $isCommon The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function filterByIsCommon($isCommon = null, $comparison = null)
    {
        if (is_array($isCommon)) {
            $useMinMax = false;
            if (isset($isCommon['min'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_IS_COMMON, $isCommon['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isCommon['max'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_IS_COMMON, $isCommon['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_IS_COMMON, $isCommon, $comparison);
    }

    /**
     * Filter the query on the is_comment_required column
     *
     * Example usage:
     * <code>
     * $query->filterByIsCommentRequired(1234); // WHERE is_comment_required = 1234
     * $query->filterByIsCommentRequired(array(12, 34)); // WHERE is_comment_required IN (12, 34)
     * $query->filterByIsCommentRequired(array('min' => 12)); // WHERE is_comment_required > 12
     * </code>
     *
     * @param     mixed $isCommentRequired The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function filterByIsCommentRequired($isCommentRequired = null, $comparison = null)
    {
        if (is_array($isCommentRequired)) {
            $useMinMax = false;
            if (isset($isCommentRequired['min'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_IS_COMMENT_REQUIRED, $isCommentRequired['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isCommentRequired['max'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_IS_COMMENT_REQUIRED, $isCommentRequired['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_IS_COMMENT_REQUIRED, $isCommentRequired, $comparison);
    }

    /**
     * Filter the query on the comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE comment = 'fooValue'
     * $query->filterByComment('%fooValue%', Criteria::LIKE); // WHERE comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice(1234); // WHERE price = 1234
     * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
     * $query->filterByPrice(array('min' => 12)); // WHERE price > 12
     * </code>
     *
     * @param     mixed $price The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (is_array($price)) {
            $useMinMax = false;
            if (isset($price['min'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_PRICE, $price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($price['max'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_PRICE, $price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the is_enabled column
     *
     * Example usage:
     * <code>
     * $query->filterByIsEnabled(1234); // WHERE is_enabled = 1234
     * $query->filterByIsEnabled(array(12, 34)); // WHERE is_enabled IN (12, 34)
     * $query->filterByIsEnabled(array('min' => 12)); // WHERE is_enabled > 12
     * </code>
     *
     * @param     mixed $isEnabled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function filterByIsEnabled($isEnabled = null, $comparison = null)
    {
        if (is_array($isEnabled)) {
            $useMinMax = false;
            if (isset($isEnabled['min'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_IS_ENABLED, $isEnabled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isEnabled['max'])) {
                $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_IS_ENABLED, $isEnabled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_IS_ENABLED, $isEnabled, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzLaboratoryTests $careTzLaboratoryTests Object to remove from the list of results
     *
     * @return $this|ChildCareTzLaboratoryTestsQuery The current query, for fluid interface
     */
    public function prune($careTzLaboratoryTests = null)
    {
        if ($careTzLaboratoryTests) {
            $this->addUsingAlias(CareTzLaboratoryTestsTableMap::COL_ID, $careTzLaboratoryTests->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_laboratory_tests table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzLaboratoryTestsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzLaboratoryTestsTableMap::clearInstancePool();
            CareTzLaboratoryTestsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzLaboratoryTestsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzLaboratoryTestsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzLaboratoryTestsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzLaboratoryTestsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzLaboratoryTestsQuery
