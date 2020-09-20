<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CarePersonInsurance as ChildCarePersonInsurance;
use CareMd\CareMd\CarePersonInsuranceQuery as ChildCarePersonInsuranceQuery;
use CareMd\CareMd\Map\CarePersonInsuranceTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_person_insurance' table.
 *
 *
 *
 * @method     ChildCarePersonInsuranceQuery orderByItemNr($order = Criteria::ASC) Order by the item_nr column
 * @method     ChildCarePersonInsuranceQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCarePersonInsuranceQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCarePersonInsuranceQuery orderByInsuranceNr($order = Criteria::ASC) Order by the insurance_nr column
 * @method     ChildCarePersonInsuranceQuery orderByFirmId($order = Criteria::ASC) Order by the firm_id column
 * @method     ChildCarePersonInsuranceQuery orderByClassNr($order = Criteria::ASC) Order by the class_nr column
 * @method     ChildCarePersonInsuranceQuery orderByIsVoid($order = Criteria::ASC) Order by the is_void column
 * @method     ChildCarePersonInsuranceQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCarePersonInsuranceQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCarePersonInsuranceQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCarePersonInsuranceQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCarePersonInsuranceQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCarePersonInsuranceQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCarePersonInsuranceQuery groupByItemNr() Group by the item_nr column
 * @method     ChildCarePersonInsuranceQuery groupByPid() Group by the pid column
 * @method     ChildCarePersonInsuranceQuery groupByType() Group by the type column
 * @method     ChildCarePersonInsuranceQuery groupByInsuranceNr() Group by the insurance_nr column
 * @method     ChildCarePersonInsuranceQuery groupByFirmId() Group by the firm_id column
 * @method     ChildCarePersonInsuranceQuery groupByClassNr() Group by the class_nr column
 * @method     ChildCarePersonInsuranceQuery groupByIsVoid() Group by the is_void column
 * @method     ChildCarePersonInsuranceQuery groupByStatus() Group by the status column
 * @method     ChildCarePersonInsuranceQuery groupByHistory() Group by the history column
 * @method     ChildCarePersonInsuranceQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCarePersonInsuranceQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCarePersonInsuranceQuery groupByCreateId() Group by the create_id column
 * @method     ChildCarePersonInsuranceQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCarePersonInsuranceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCarePersonInsuranceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCarePersonInsuranceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCarePersonInsuranceQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCarePersonInsuranceQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCarePersonInsuranceQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCarePersonInsurance findOne(ConnectionInterface $con = null) Return the first ChildCarePersonInsurance matching the query
 * @method     ChildCarePersonInsurance findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCarePersonInsurance matching the query, or a new ChildCarePersonInsurance object populated from the query conditions when no match is found
 *
 * @method     ChildCarePersonInsurance findOneByItemNr(int $item_nr) Return the first ChildCarePersonInsurance filtered by the item_nr column
 * @method     ChildCarePersonInsurance findOneByPid(int $pid) Return the first ChildCarePersonInsurance filtered by the pid column
 * @method     ChildCarePersonInsurance findOneByType(string $type) Return the first ChildCarePersonInsurance filtered by the type column
 * @method     ChildCarePersonInsurance findOneByInsuranceNr(string $insurance_nr) Return the first ChildCarePersonInsurance filtered by the insurance_nr column
 * @method     ChildCarePersonInsurance findOneByFirmId(string $firm_id) Return the first ChildCarePersonInsurance filtered by the firm_id column
 * @method     ChildCarePersonInsurance findOneByClassNr(int $class_nr) Return the first ChildCarePersonInsurance filtered by the class_nr column
 * @method     ChildCarePersonInsurance findOneByIsVoid(boolean $is_void) Return the first ChildCarePersonInsurance filtered by the is_void column
 * @method     ChildCarePersonInsurance findOneByStatus(string $status) Return the first ChildCarePersonInsurance filtered by the status column
 * @method     ChildCarePersonInsurance findOneByHistory(string $history) Return the first ChildCarePersonInsurance filtered by the history column
 * @method     ChildCarePersonInsurance findOneByModifyId(string $modify_id) Return the first ChildCarePersonInsurance filtered by the modify_id column
 * @method     ChildCarePersonInsurance findOneByModifyTime(string $modify_time) Return the first ChildCarePersonInsurance filtered by the modify_time column
 * @method     ChildCarePersonInsurance findOneByCreateId(string $create_id) Return the first ChildCarePersonInsurance filtered by the create_id column
 * @method     ChildCarePersonInsurance findOneByCreateTime(string $create_time) Return the first ChildCarePersonInsurance filtered by the create_time column *

 * @method     ChildCarePersonInsurance requirePk($key, ConnectionInterface $con = null) Return the ChildCarePersonInsurance by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOne(ConnectionInterface $con = null) Return the first ChildCarePersonInsurance matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePersonInsurance requireOneByItemNr(int $item_nr) Return the first ChildCarePersonInsurance filtered by the item_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByPid(int $pid) Return the first ChildCarePersonInsurance filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByType(string $type) Return the first ChildCarePersonInsurance filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByInsuranceNr(string $insurance_nr) Return the first ChildCarePersonInsurance filtered by the insurance_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByFirmId(string $firm_id) Return the first ChildCarePersonInsurance filtered by the firm_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByClassNr(int $class_nr) Return the first ChildCarePersonInsurance filtered by the class_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByIsVoid(boolean $is_void) Return the first ChildCarePersonInsurance filtered by the is_void column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByStatus(string $status) Return the first ChildCarePersonInsurance filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByHistory(string $history) Return the first ChildCarePersonInsurance filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByModifyId(string $modify_id) Return the first ChildCarePersonInsurance filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByModifyTime(string $modify_time) Return the first ChildCarePersonInsurance filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByCreateId(string $create_id) Return the first ChildCarePersonInsurance filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonInsurance requireOneByCreateTime(string $create_time) Return the first ChildCarePersonInsurance filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePersonInsurance[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCarePersonInsurance objects based on current ModelCriteria
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByItemNr(int $item_nr) Return ChildCarePersonInsurance objects filtered by the item_nr column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByPid(int $pid) Return ChildCarePersonInsurance objects filtered by the pid column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByType(string $type) Return ChildCarePersonInsurance objects filtered by the type column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByInsuranceNr(string $insurance_nr) Return ChildCarePersonInsurance objects filtered by the insurance_nr column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByFirmId(string $firm_id) Return ChildCarePersonInsurance objects filtered by the firm_id column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByClassNr(int $class_nr) Return ChildCarePersonInsurance objects filtered by the class_nr column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByIsVoid(boolean $is_void) Return ChildCarePersonInsurance objects filtered by the is_void column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByStatus(string $status) Return ChildCarePersonInsurance objects filtered by the status column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByHistory(string $history) Return ChildCarePersonInsurance objects filtered by the history column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCarePersonInsurance objects filtered by the modify_id column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCarePersonInsurance objects filtered by the modify_time column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByCreateId(string $create_id) Return ChildCarePersonInsurance objects filtered by the create_id column
 * @method     ChildCarePersonInsurance[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCarePersonInsurance objects filtered by the create_time column
 * @method     ChildCarePersonInsurance[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CarePersonInsuranceQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CarePersonInsuranceQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CarePersonInsurance', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCarePersonInsuranceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCarePersonInsuranceQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCarePersonInsuranceQuery) {
            return $criteria;
        }
        $query = new ChildCarePersonInsuranceQuery();
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
     * @return ChildCarePersonInsurance|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CarePersonInsuranceTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CarePersonInsuranceTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCarePersonInsurance A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT item_nr, pid, type, insurance_nr, firm_id, class_nr, is_void, status, history, modify_id, modify_time, create_id, create_time FROM care_person_insurance WHERE item_nr = :p0';
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
            /** @var ChildCarePersonInsurance $obj */
            $obj = new ChildCarePersonInsurance();
            $obj->hydrate($row);
            CarePersonInsuranceTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCarePersonInsurance|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_ITEM_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_ITEM_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the item_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByItemNr(1234); // WHERE item_nr = 1234
     * $query->filterByItemNr(array(12, 34)); // WHERE item_nr IN (12, 34)
     * $query->filterByItemNr(array('min' => 12)); // WHERE item_nr > 12
     * </code>
     *
     * @param     mixed $itemNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByItemNr($itemNr = null, $comparison = null)
    {
        if (is_array($itemNr)) {
            $useMinMax = false;
            if (isset($itemNr['min'])) {
                $this->addUsingAlias(CarePersonInsuranceTableMap::COL_ITEM_NR, $itemNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemNr['max'])) {
                $this->addUsingAlias(CarePersonInsuranceTableMap::COL_ITEM_NR, $itemNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_ITEM_NR, $itemNr, $comparison);
    }

    /**
     * Filter the query on the pid column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE pid = 1234
     * $query->filterByPid(array(12, 34)); // WHERE pid IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE pid > 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CarePersonInsuranceTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CarePersonInsuranceTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_PID, $pid, $comparison);
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
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the insurance_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceNr('fooValue');   // WHERE insurance_nr = 'fooValue'
     * $query->filterByInsuranceNr('%fooValue%', Criteria::LIKE); // WHERE insurance_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insuranceNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByInsuranceNr($insuranceNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insuranceNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_INSURANCE_NR, $insuranceNr, $comparison);
    }

    /**
     * Filter the query on the firm_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFirmId('fooValue');   // WHERE firm_id = 'fooValue'
     * $query->filterByFirmId('%fooValue%', Criteria::LIKE); // WHERE firm_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firmId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByFirmId($firmId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firmId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_FIRM_ID, $firmId, $comparison);
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
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByClassNr($classNr = null, $comparison = null)
    {
        if (is_array($classNr)) {
            $useMinMax = false;
            if (isset($classNr['min'])) {
                $this->addUsingAlias(CarePersonInsuranceTableMap::COL_CLASS_NR, $classNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classNr['max'])) {
                $this->addUsingAlias(CarePersonInsuranceTableMap::COL_CLASS_NR, $classNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_CLASS_NR, $classNr, $comparison);
    }

    /**
     * Filter the query on the is_void column
     *
     * Example usage:
     * <code>
     * $query->filterByIsVoid(true); // WHERE is_void = true
     * $query->filterByIsVoid('yes'); // WHERE is_void = true
     * </code>
     *
     * @param     boolean|string $isVoid The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByIsVoid($isVoid = null, $comparison = null)
    {
        if (is_string($isVoid)) {
            $isVoid = in_array(strtolower($isVoid), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_IS_VOID, $isVoid, $comparison);
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
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CarePersonInsuranceTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CarePersonInsuranceTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CarePersonInsuranceTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CarePersonInsuranceTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonInsuranceTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCarePersonInsurance $carePersonInsurance Object to remove from the list of results
     *
     * @return $this|ChildCarePersonInsuranceQuery The current query, for fluid interface
     */
    public function prune($carePersonInsurance = null)
    {
        if ($carePersonInsurance) {
            $this->addUsingAlias(CarePersonInsuranceTableMap::COL_ITEM_NR, $carePersonInsurance->getItemNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_person_insurance table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonInsuranceTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CarePersonInsuranceTableMap::clearInstancePool();
            CarePersonInsuranceTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonInsuranceTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CarePersonInsuranceTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CarePersonInsuranceTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CarePersonInsuranceTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CarePersonInsuranceQuery
