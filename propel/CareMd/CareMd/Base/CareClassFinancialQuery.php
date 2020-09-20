<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareClassFinancial as ChildCareClassFinancial;
use CareMd\CareMd\CareClassFinancialQuery as ChildCareClassFinancialQuery;
use CareMd\CareMd\Map\CareClassFinancialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_class_financial' table.
 *
 *
 *
 * @method     ChildCareClassFinancialQuery orderByClassNr($order = Criteria::ASC) Order by the class_nr column
 * @method     ChildCareClassFinancialQuery orderByClassId($order = Criteria::ASC) Order by the class_id column
 * @method     ChildCareClassFinancialQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareClassFinancialQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareClassFinancialQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareClassFinancialQuery orderByLdVar($order = Criteria::ASC) Order by the LD_var column
 * @method     ChildCareClassFinancialQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareClassFinancialQuery orderByPolicy($order = Criteria::ASC) Order by the policy column
 * @method     ChildCareClassFinancialQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareClassFinancialQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareClassFinancialQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareClassFinancialQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareClassFinancialQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareClassFinancialQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareClassFinancialQuery groupByClassNr() Group by the class_nr column
 * @method     ChildCareClassFinancialQuery groupByClassId() Group by the class_id column
 * @method     ChildCareClassFinancialQuery groupByType() Group by the type column
 * @method     ChildCareClassFinancialQuery groupByCode() Group by the code column
 * @method     ChildCareClassFinancialQuery groupByName() Group by the name column
 * @method     ChildCareClassFinancialQuery groupByLdVar() Group by the LD_var column
 * @method     ChildCareClassFinancialQuery groupByDescription() Group by the description column
 * @method     ChildCareClassFinancialQuery groupByPolicy() Group by the policy column
 * @method     ChildCareClassFinancialQuery groupByStatus() Group by the status column
 * @method     ChildCareClassFinancialQuery groupByHistory() Group by the history column
 * @method     ChildCareClassFinancialQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareClassFinancialQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareClassFinancialQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareClassFinancialQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareClassFinancialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareClassFinancialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareClassFinancialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareClassFinancialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareClassFinancialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareClassFinancialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareClassFinancial findOne(ConnectionInterface $con = null) Return the first ChildCareClassFinancial matching the query
 * @method     ChildCareClassFinancial findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareClassFinancial matching the query, or a new ChildCareClassFinancial object populated from the query conditions when no match is found
 *
 * @method     ChildCareClassFinancial findOneByClassNr(int $class_nr) Return the first ChildCareClassFinancial filtered by the class_nr column
 * @method     ChildCareClassFinancial findOneByClassId(string $class_id) Return the first ChildCareClassFinancial filtered by the class_id column
 * @method     ChildCareClassFinancial findOneByType(string $type) Return the first ChildCareClassFinancial filtered by the type column
 * @method     ChildCareClassFinancial findOneByCode(string $code) Return the first ChildCareClassFinancial filtered by the code column
 * @method     ChildCareClassFinancial findOneByName(string $name) Return the first ChildCareClassFinancial filtered by the name column
 * @method     ChildCareClassFinancial findOneByLdVar(string $LD_var) Return the first ChildCareClassFinancial filtered by the LD_var column
 * @method     ChildCareClassFinancial findOneByDescription(string $description) Return the first ChildCareClassFinancial filtered by the description column
 * @method     ChildCareClassFinancial findOneByPolicy(string $policy) Return the first ChildCareClassFinancial filtered by the policy column
 * @method     ChildCareClassFinancial findOneByStatus(string $status) Return the first ChildCareClassFinancial filtered by the status column
 * @method     ChildCareClassFinancial findOneByHistory(string $history) Return the first ChildCareClassFinancial filtered by the history column
 * @method     ChildCareClassFinancial findOneByModifyId(string $modify_id) Return the first ChildCareClassFinancial filtered by the modify_id column
 * @method     ChildCareClassFinancial findOneByModifyTime(string $modify_time) Return the first ChildCareClassFinancial filtered by the modify_time column
 * @method     ChildCareClassFinancial findOneByCreateId(string $create_id) Return the first ChildCareClassFinancial filtered by the create_id column
 * @method     ChildCareClassFinancial findOneByCreateTime(string $create_time) Return the first ChildCareClassFinancial filtered by the create_time column *

 * @method     ChildCareClassFinancial requirePk($key, ConnectionInterface $con = null) Return the ChildCareClassFinancial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOne(ConnectionInterface $con = null) Return the first ChildCareClassFinancial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareClassFinancial requireOneByClassNr(int $class_nr) Return the first ChildCareClassFinancial filtered by the class_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByClassId(string $class_id) Return the first ChildCareClassFinancial filtered by the class_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByType(string $type) Return the first ChildCareClassFinancial filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByCode(string $code) Return the first ChildCareClassFinancial filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByName(string $name) Return the first ChildCareClassFinancial filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByLdVar(string $LD_var) Return the first ChildCareClassFinancial filtered by the LD_var column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByDescription(string $description) Return the first ChildCareClassFinancial filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByPolicy(string $policy) Return the first ChildCareClassFinancial filtered by the policy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByStatus(string $status) Return the first ChildCareClassFinancial filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByHistory(string $history) Return the first ChildCareClassFinancial filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByModifyId(string $modify_id) Return the first ChildCareClassFinancial filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByModifyTime(string $modify_time) Return the first ChildCareClassFinancial filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByCreateId(string $create_id) Return the first ChildCareClassFinancial filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassFinancial requireOneByCreateTime(string $create_time) Return the first ChildCareClassFinancial filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareClassFinancial[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareClassFinancial objects based on current ModelCriteria
 * @method     ChildCareClassFinancial[]|ObjectCollection findByClassNr(int $class_nr) Return ChildCareClassFinancial objects filtered by the class_nr column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByClassId(string $class_id) Return ChildCareClassFinancial objects filtered by the class_id column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByType(string $type) Return ChildCareClassFinancial objects filtered by the type column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByCode(string $code) Return ChildCareClassFinancial objects filtered by the code column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByName(string $name) Return ChildCareClassFinancial objects filtered by the name column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByLdVar(string $LD_var) Return ChildCareClassFinancial objects filtered by the LD_var column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByDescription(string $description) Return ChildCareClassFinancial objects filtered by the description column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByPolicy(string $policy) Return ChildCareClassFinancial objects filtered by the policy column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByStatus(string $status) Return ChildCareClassFinancial objects filtered by the status column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByHistory(string $history) Return ChildCareClassFinancial objects filtered by the history column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareClassFinancial objects filtered by the modify_id column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareClassFinancial objects filtered by the modify_time column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareClassFinancial objects filtered by the create_id column
 * @method     ChildCareClassFinancial[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareClassFinancial objects filtered by the create_time column
 * @method     ChildCareClassFinancial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareClassFinancialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareClassFinancialQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareClassFinancial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareClassFinancialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareClassFinancialQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareClassFinancialQuery) {
            return $criteria;
        }
        $query = new ChildCareClassFinancialQuery();
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
     * @return ChildCareClassFinancial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareClassFinancialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareClassFinancialTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareClassFinancial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT class_nr, class_id, type, code, name, LD_var, description, policy, status, history, modify_id, modify_time, create_id, create_time FROM care_class_financial WHERE class_nr = :p0';
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
            /** @var ChildCareClassFinancial $obj */
            $obj = new ChildCareClassFinancial();
            $obj->hydrate($row);
            CareClassFinancialTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareClassFinancial|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_CLASS_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_CLASS_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the class_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByClassNr(1234); // WHERE class_nr = 1234
     * $query->filterByClassNr(array(12, 34)); // WHERE class_nr IN (12, 34)
     * $query->filterByClassNr(array('min' => 12)); // WHERE class_nr > 12
     * </code>
     *
     * @param     mixed $classNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByClassNr($classNr = null, $comparison = null)
    {
        if (is_array($classNr)) {
            $useMinMax = false;
            if (isset($classNr['min'])) {
                $this->addUsingAlias(CareClassFinancialTableMap::COL_CLASS_NR, $classNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classNr['max'])) {
                $this->addUsingAlias(CareClassFinancialTableMap::COL_CLASS_NR, $classNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_CLASS_NR, $classNr, $comparison);
    }

    /**
     * Filter the query on the class_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClassId('fooValue');   // WHERE class_id = 'fooValue'
     * $query->filterByClassId('%fooValue%', Criteria::LIKE); // WHERE class_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $classId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByClassId($classId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($classId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_CLASS_ID, $classId, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%', Criteria::LIKE); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_CODE, $code, $comparison);
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
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_NAME, $name, $comparison);
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
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByLdVar($ldVar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ldVar)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_LD_VAR, $ldVar, $comparison);
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
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the policy column
     *
     * Example usage:
     * <code>
     * $query->filterByPolicy('fooValue');   // WHERE policy = 'fooValue'
     * $query->filterByPolicy('%fooValue%', Criteria::LIKE); // WHERE policy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $policy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByPolicy($policy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($policy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_POLICY, $policy, $comparison);
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
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareClassFinancialTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareClassFinancialTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareClassFinancialTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareClassFinancialTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassFinancialTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareClassFinancial $careClassFinancial Object to remove from the list of results
     *
     * @return $this|ChildCareClassFinancialQuery The current query, for fluid interface
     */
    public function prune($careClassFinancial = null)
    {
        if ($careClassFinancial) {
            $this->addUsingAlias(CareClassFinancialTableMap::COL_CLASS_NR, $careClassFinancial->getClassNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_class_financial table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareClassFinancialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareClassFinancialTableMap::clearInstancePool();
            CareClassFinancialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareClassFinancialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareClassFinancialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareClassFinancialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareClassFinancialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareClassFinancialQuery
