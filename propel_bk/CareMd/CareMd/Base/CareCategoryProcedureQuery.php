<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareCategoryProcedure as ChildCareCategoryProcedure;
use CareMd\CareMd\CareCategoryProcedureQuery as ChildCareCategoryProcedureQuery;
use CareMd\CareMd\Map\CareCategoryProcedureTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_category_procedure' table.
 *
 *
 *
 * @method     ChildCareCategoryProcedureQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareCategoryProcedureQuery orderByCategory($order = Criteria::ASC) Order by the category column
 * @method     ChildCareCategoryProcedureQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareCategoryProcedureQuery orderByLdVar($order = Criteria::ASC) Order by the LD_var column
 * @method     ChildCareCategoryProcedureQuery orderByShortCode($order = Criteria::ASC) Order by the short_code column
 * @method     ChildCareCategoryProcedureQuery orderByLdVarShortCode($order = Criteria::ASC) Order by the LD_var_short_code column
 * @method     ChildCareCategoryProcedureQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareCategoryProcedureQuery orderByHideFrom($order = Criteria::ASC) Order by the hide_from column
 * @method     ChildCareCategoryProcedureQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareCategoryProcedureQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareCategoryProcedureQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareCategoryProcedureQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareCategoryProcedureQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareCategoryProcedureQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareCategoryProcedureQuery groupByNr() Group by the nr column
 * @method     ChildCareCategoryProcedureQuery groupByCategory() Group by the category column
 * @method     ChildCareCategoryProcedureQuery groupByName() Group by the name column
 * @method     ChildCareCategoryProcedureQuery groupByLdVar() Group by the LD_var column
 * @method     ChildCareCategoryProcedureQuery groupByShortCode() Group by the short_code column
 * @method     ChildCareCategoryProcedureQuery groupByLdVarShortCode() Group by the LD_var_short_code column
 * @method     ChildCareCategoryProcedureQuery groupByDescription() Group by the description column
 * @method     ChildCareCategoryProcedureQuery groupByHideFrom() Group by the hide_from column
 * @method     ChildCareCategoryProcedureQuery groupByStatus() Group by the status column
 * @method     ChildCareCategoryProcedureQuery groupByHistory() Group by the history column
 * @method     ChildCareCategoryProcedureQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareCategoryProcedureQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareCategoryProcedureQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareCategoryProcedureQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareCategoryProcedureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareCategoryProcedureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareCategoryProcedureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareCategoryProcedureQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareCategoryProcedureQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareCategoryProcedureQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareCategoryProcedure findOne(ConnectionInterface $con = null) Return the first ChildCareCategoryProcedure matching the query
 * @method     ChildCareCategoryProcedure findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareCategoryProcedure matching the query, or a new ChildCareCategoryProcedure object populated from the query conditions when no match is found
 *
 * @method     ChildCareCategoryProcedure findOneByNr(int $nr) Return the first ChildCareCategoryProcedure filtered by the nr column
 * @method     ChildCareCategoryProcedure findOneByCategory(string $category) Return the first ChildCareCategoryProcedure filtered by the category column
 * @method     ChildCareCategoryProcedure findOneByName(string $name) Return the first ChildCareCategoryProcedure filtered by the name column
 * @method     ChildCareCategoryProcedure findOneByLdVar(string $LD_var) Return the first ChildCareCategoryProcedure filtered by the LD_var column
 * @method     ChildCareCategoryProcedure findOneByShortCode(string $short_code) Return the first ChildCareCategoryProcedure filtered by the short_code column
 * @method     ChildCareCategoryProcedure findOneByLdVarShortCode(string $LD_var_short_code) Return the first ChildCareCategoryProcedure filtered by the LD_var_short_code column
 * @method     ChildCareCategoryProcedure findOneByDescription(string $description) Return the first ChildCareCategoryProcedure filtered by the description column
 * @method     ChildCareCategoryProcedure findOneByHideFrom(string $hide_from) Return the first ChildCareCategoryProcedure filtered by the hide_from column
 * @method     ChildCareCategoryProcedure findOneByStatus(string $status) Return the first ChildCareCategoryProcedure filtered by the status column
 * @method     ChildCareCategoryProcedure findOneByHistory(string $history) Return the first ChildCareCategoryProcedure filtered by the history column
 * @method     ChildCareCategoryProcedure findOneByModifyId(string $modify_id) Return the first ChildCareCategoryProcedure filtered by the modify_id column
 * @method     ChildCareCategoryProcedure findOneByModifyTime(string $modify_time) Return the first ChildCareCategoryProcedure filtered by the modify_time column
 * @method     ChildCareCategoryProcedure findOneByCreateId(string $create_id) Return the first ChildCareCategoryProcedure filtered by the create_id column
 * @method     ChildCareCategoryProcedure findOneByCreateTime(string $create_time) Return the first ChildCareCategoryProcedure filtered by the create_time column *

 * @method     ChildCareCategoryProcedure requirePk($key, ConnectionInterface $con = null) Return the ChildCareCategoryProcedure by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOne(ConnectionInterface $con = null) Return the first ChildCareCategoryProcedure matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareCategoryProcedure requireOneByNr(int $nr) Return the first ChildCareCategoryProcedure filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByCategory(string $category) Return the first ChildCareCategoryProcedure filtered by the category column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByName(string $name) Return the first ChildCareCategoryProcedure filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByLdVar(string $LD_var) Return the first ChildCareCategoryProcedure filtered by the LD_var column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByShortCode(string $short_code) Return the first ChildCareCategoryProcedure filtered by the short_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByLdVarShortCode(string $LD_var_short_code) Return the first ChildCareCategoryProcedure filtered by the LD_var_short_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByDescription(string $description) Return the first ChildCareCategoryProcedure filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByHideFrom(string $hide_from) Return the first ChildCareCategoryProcedure filtered by the hide_from column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByStatus(string $status) Return the first ChildCareCategoryProcedure filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByHistory(string $history) Return the first ChildCareCategoryProcedure filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByModifyId(string $modify_id) Return the first ChildCareCategoryProcedure filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByModifyTime(string $modify_time) Return the first ChildCareCategoryProcedure filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByCreateId(string $create_id) Return the first ChildCareCategoryProcedure filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCategoryProcedure requireOneByCreateTime(string $create_time) Return the first ChildCareCategoryProcedure filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareCategoryProcedure[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareCategoryProcedure objects based on current ModelCriteria
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByNr(int $nr) Return ChildCareCategoryProcedure objects filtered by the nr column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByCategory(string $category) Return ChildCareCategoryProcedure objects filtered by the category column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByName(string $name) Return ChildCareCategoryProcedure objects filtered by the name column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByLdVar(string $LD_var) Return ChildCareCategoryProcedure objects filtered by the LD_var column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByShortCode(string $short_code) Return ChildCareCategoryProcedure objects filtered by the short_code column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByLdVarShortCode(string $LD_var_short_code) Return ChildCareCategoryProcedure objects filtered by the LD_var_short_code column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByDescription(string $description) Return ChildCareCategoryProcedure objects filtered by the description column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByHideFrom(string $hide_from) Return ChildCareCategoryProcedure objects filtered by the hide_from column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByStatus(string $status) Return ChildCareCategoryProcedure objects filtered by the status column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByHistory(string $history) Return ChildCareCategoryProcedure objects filtered by the history column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareCategoryProcedure objects filtered by the modify_id column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareCategoryProcedure objects filtered by the modify_time column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareCategoryProcedure objects filtered by the create_id column
 * @method     ChildCareCategoryProcedure[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareCategoryProcedure objects filtered by the create_time column
 * @method     ChildCareCategoryProcedure[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareCategoryProcedureQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareCategoryProcedureQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareCategoryProcedure', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareCategoryProcedureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareCategoryProcedureQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareCategoryProcedureQuery) {
            return $criteria;
        }
        $query = new ChildCareCategoryProcedureQuery();
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
     * @return ChildCareCategoryProcedure|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareCategoryProcedureTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareCategoryProcedureTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareCategoryProcedure A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, category, name, LD_var, short_code, LD_var_short_code, description, hide_from, status, history, modify_id, modify_time, create_id, create_time FROM care_category_procedure WHERE nr = :p0';
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
            /** @var ChildCareCategoryProcedure $obj */
            $obj = new ChildCareCategoryProcedure();
            $obj->hydrate($row);
            CareCategoryProcedureTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareCategoryProcedure|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the nr column
     *
     * Example usage:
     * <code>
     * $query->filterByNr(1234); // WHERE nr = 1234
     * $query->filterByNr(array(12, 34)); // WHERE nr IN (12, 34)
     * $query->filterByNr(array('min' => 12)); // WHERE nr > 12
     * </code>
     *
     * @param     mixed $nr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareCategoryProcedureTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareCategoryProcedureTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the category column
     *
     * Example usage:
     * <code>
     * $query->filterByCategory('fooValue');   // WHERE category = 'fooValue'
     * $query->filterByCategory('%fooValue%', Criteria::LIKE); // WHERE category LIKE '%fooValue%'
     * </code>
     *
     * @param     string $category The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByCategory($category = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($category)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_CATEGORY, $category, $comparison);
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
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the LD_var column
     *
     * Example usage:
     * <code>
     * $query->filterByLdVar('fooValue');   // WHERE LD_var = 'fooValue'
     * $query->filterByLdVar('%fooValue%', Criteria::LIKE); // WHERE LD_var LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ldVar The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByLdVar($ldVar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ldVar)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_LD_VAR, $ldVar, $comparison);
    }

    /**
     * Filter the query on the short_code column
     *
     * Example usage:
     * <code>
     * $query->filterByShortCode('fooValue');   // WHERE short_code = 'fooValue'
     * $query->filterByShortCode('%fooValue%', Criteria::LIKE); // WHERE short_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shortCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByShortCode($shortCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_SHORT_CODE, $shortCode, $comparison);
    }

    /**
     * Filter the query on the LD_var_short_code column
     *
     * Example usage:
     * <code>
     * $query->filterByLdVarShortCode('fooValue');   // WHERE LD_var_short_code = 'fooValue'
     * $query->filterByLdVarShortCode('%fooValue%', Criteria::LIKE); // WHERE LD_var_short_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ldVarShortCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByLdVarShortCode($ldVarShortCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ldVarShortCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_LD_VAR_SHORT_CODE, $ldVarShortCode, $comparison);
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
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the hide_from column
     *
     * Example usage:
     * <code>
     * $query->filterByHideFrom('fooValue');   // WHERE hide_from = 'fooValue'
     * $query->filterByHideFrom('%fooValue%', Criteria::LIKE); // WHERE hide_from LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hideFrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByHideFrom($hideFrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hideFrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_HIDE_FROM, $hideFrom, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%', Criteria::LIKE); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the history column
     *
     * Example usage:
     * <code>
     * $query->filterByHistory('fooValue');   // WHERE history = 'fooValue'
     * $query->filterByHistory('%fooValue%', Criteria::LIKE); // WHERE history LIKE '%fooValue%'
     * </code>
     *
     * @param     string $history The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareCategoryProcedureTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareCategoryProcedureTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareCategoryProcedureTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareCategoryProcedureTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCategoryProcedureTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareCategoryProcedure $careCategoryProcedure Object to remove from the list of results
     *
     * @return $this|ChildCareCategoryProcedureQuery The current query, for fluid interface
     */
    public function prune($careCategoryProcedure = null)
    {
        if ($careCategoryProcedure) {
            $this->addUsingAlias(CareCategoryProcedureTableMap::COL_NR, $careCategoryProcedure->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_category_procedure table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareCategoryProcedureTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareCategoryProcedureTableMap::clearInstancePool();
            CareCategoryProcedureTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareCategoryProcedureTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareCategoryProcedureTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareCategoryProcedureTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareCategoryProcedureTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareCategoryProcedureQuery
