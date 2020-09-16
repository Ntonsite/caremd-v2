<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzInsurance as ChildCareTzInsurance;
use CareMd\CareMd\CareTzInsuranceQuery as ChildCareTzInsuranceQuery;
use CareMd\CareMd\Map\CareTzInsuranceTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_insurance' table.
 *
 *
 *
 * @method     ChildCareTzInsuranceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzInsuranceQuery orderByParent($order = Criteria::ASC) Order by the parent column
 * @method     ChildCareTzInsuranceQuery orderByCompanyParent($order = Criteria::ASC) Order by the company_parent column
 * @method     ChildCareTzInsuranceQuery orderByCompanyId($order = Criteria::ASC) Order by the company_id column
 * @method     ChildCareTzInsuranceQuery orderByPid($order = Criteria::ASC) Order by the PID column
 * @method     ChildCareTzInsuranceQuery orderByCeiling($order = Criteria::ASC) Order by the ceiling column
 * @method     ChildCareTzInsuranceQuery orderByCeilingStartupSubtraction($order = Criteria::ASC) Order by the ceiling_startup_subtraction column
 * @method     ChildCareTzInsuranceQuery orderByPlan($order = Criteria::ASC) Order by the plan column
 * @method     ChildCareTzInsuranceQuery orderByStartDate($order = Criteria::ASC) Order by the start_date column
 * @method     ChildCareTzInsuranceQuery orderByEndDate($order = Criteria::ASC) Order by the end_date column
 * @method     ChildCareTzInsuranceQuery orderByTimestamp($order = Criteria::ASC) Order by the timestamp column
 * @method     ChildCareTzInsuranceQuery orderByCancelFlag($order = Criteria::ASC) Order by the cancel_flag column
 * @method     ChildCareTzInsuranceQuery orderByPaidFlag($order = Criteria::ASC) Order by the paid_flag column
 * @method     ChildCareTzInsuranceQuery orderByGetsCompanyCredit($order = Criteria::ASC) Order by the gets_company_credit column
 * @method     ChildCareTzInsuranceQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 *
 * @method     ChildCareTzInsuranceQuery groupById() Group by the id column
 * @method     ChildCareTzInsuranceQuery groupByParent() Group by the parent column
 * @method     ChildCareTzInsuranceQuery groupByCompanyParent() Group by the company_parent column
 * @method     ChildCareTzInsuranceQuery groupByCompanyId() Group by the company_id column
 * @method     ChildCareTzInsuranceQuery groupByPid() Group by the PID column
 * @method     ChildCareTzInsuranceQuery groupByCeiling() Group by the ceiling column
 * @method     ChildCareTzInsuranceQuery groupByCeilingStartupSubtraction() Group by the ceiling_startup_subtraction column
 * @method     ChildCareTzInsuranceQuery groupByPlan() Group by the plan column
 * @method     ChildCareTzInsuranceQuery groupByStartDate() Group by the start_date column
 * @method     ChildCareTzInsuranceQuery groupByEndDate() Group by the end_date column
 * @method     ChildCareTzInsuranceQuery groupByTimestamp() Group by the timestamp column
 * @method     ChildCareTzInsuranceQuery groupByCancelFlag() Group by the cancel_flag column
 * @method     ChildCareTzInsuranceQuery groupByPaidFlag() Group by the paid_flag column
 * @method     ChildCareTzInsuranceQuery groupByGetsCompanyCredit() Group by the gets_company_credit column
 * @method     ChildCareTzInsuranceQuery groupByModifyId() Group by the modify_id column
 *
 * @method     ChildCareTzInsuranceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzInsuranceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzInsuranceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzInsuranceQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzInsuranceQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzInsuranceQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzInsurance findOne(ConnectionInterface $con = null) Return the first ChildCareTzInsurance matching the query
 * @method     ChildCareTzInsurance findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzInsurance matching the query, or a new ChildCareTzInsurance object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzInsurance findOneById(string $id) Return the first ChildCareTzInsurance filtered by the id column
 * @method     ChildCareTzInsurance findOneByParent(string $parent) Return the first ChildCareTzInsurance filtered by the parent column
 * @method     ChildCareTzInsurance findOneByCompanyParent(int $company_parent) Return the first ChildCareTzInsurance filtered by the company_parent column
 * @method     ChildCareTzInsurance findOneByCompanyId(string $company_id) Return the first ChildCareTzInsurance filtered by the company_id column
 * @method     ChildCareTzInsurance findOneByPid(string $PID) Return the first ChildCareTzInsurance filtered by the PID column
 * @method     ChildCareTzInsurance findOneByCeiling(string $ceiling) Return the first ChildCareTzInsurance filtered by the ceiling column
 * @method     ChildCareTzInsurance findOneByCeilingStartupSubtraction(string $ceiling_startup_subtraction) Return the first ChildCareTzInsurance filtered by the ceiling_startup_subtraction column
 * @method     ChildCareTzInsurance findOneByPlan(string $plan) Return the first ChildCareTzInsurance filtered by the plan column
 * @method     ChildCareTzInsurance findOneByStartDate(string $start_date) Return the first ChildCareTzInsurance filtered by the start_date column
 * @method     ChildCareTzInsurance findOneByEndDate(string $end_date) Return the first ChildCareTzInsurance filtered by the end_date column
 * @method     ChildCareTzInsurance findOneByTimestamp(string $timestamp) Return the first ChildCareTzInsurance filtered by the timestamp column
 * @method     ChildCareTzInsurance findOneByCancelFlag(int $cancel_flag) Return the first ChildCareTzInsurance filtered by the cancel_flag column
 * @method     ChildCareTzInsurance findOneByPaidFlag(int $paid_flag) Return the first ChildCareTzInsurance filtered by the paid_flag column
 * @method     ChildCareTzInsurance findOneByGetsCompanyCredit(int $gets_company_credit) Return the first ChildCareTzInsurance filtered by the gets_company_credit column
 * @method     ChildCareTzInsurance findOneByModifyId(string $modify_id) Return the first ChildCareTzInsurance filtered by the modify_id column *

 * @method     ChildCareTzInsurance requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzInsurance by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOne(ConnectionInterface $con = null) Return the first ChildCareTzInsurance matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzInsurance requireOneById(string $id) Return the first ChildCareTzInsurance filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByParent(string $parent) Return the first ChildCareTzInsurance filtered by the parent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByCompanyParent(int $company_parent) Return the first ChildCareTzInsurance filtered by the company_parent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByCompanyId(string $company_id) Return the first ChildCareTzInsurance filtered by the company_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByPid(string $PID) Return the first ChildCareTzInsurance filtered by the PID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByCeiling(string $ceiling) Return the first ChildCareTzInsurance filtered by the ceiling column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByCeilingStartupSubtraction(string $ceiling_startup_subtraction) Return the first ChildCareTzInsurance filtered by the ceiling_startup_subtraction column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByPlan(string $plan) Return the first ChildCareTzInsurance filtered by the plan column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByStartDate(string $start_date) Return the first ChildCareTzInsurance filtered by the start_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByEndDate(string $end_date) Return the first ChildCareTzInsurance filtered by the end_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByTimestamp(string $timestamp) Return the first ChildCareTzInsurance filtered by the timestamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByCancelFlag(int $cancel_flag) Return the first ChildCareTzInsurance filtered by the cancel_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByPaidFlag(int $paid_flag) Return the first ChildCareTzInsurance filtered by the paid_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByGetsCompanyCredit(int $gets_company_credit) Return the first ChildCareTzInsurance filtered by the gets_company_credit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurance requireOneByModifyId(string $modify_id) Return the first ChildCareTzInsurance filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzInsurance[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzInsurance objects based on current ModelCriteria
 * @method     ChildCareTzInsurance[]|ObjectCollection findById(string $id) Return ChildCareTzInsurance objects filtered by the id column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByParent(string $parent) Return ChildCareTzInsurance objects filtered by the parent column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByCompanyParent(int $company_parent) Return ChildCareTzInsurance objects filtered by the company_parent column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByCompanyId(string $company_id) Return ChildCareTzInsurance objects filtered by the company_id column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByPid(string $PID) Return ChildCareTzInsurance objects filtered by the PID column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByCeiling(string $ceiling) Return ChildCareTzInsurance objects filtered by the ceiling column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByCeilingStartupSubtraction(string $ceiling_startup_subtraction) Return ChildCareTzInsurance objects filtered by the ceiling_startup_subtraction column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByPlan(string $plan) Return ChildCareTzInsurance objects filtered by the plan column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByStartDate(string $start_date) Return ChildCareTzInsurance objects filtered by the start_date column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByEndDate(string $end_date) Return ChildCareTzInsurance objects filtered by the end_date column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByTimestamp(string $timestamp) Return ChildCareTzInsurance objects filtered by the timestamp column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByCancelFlag(int $cancel_flag) Return ChildCareTzInsurance objects filtered by the cancel_flag column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByPaidFlag(int $paid_flag) Return ChildCareTzInsurance objects filtered by the paid_flag column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByGetsCompanyCredit(int $gets_company_credit) Return ChildCareTzInsurance objects filtered by the gets_company_credit column
 * @method     ChildCareTzInsurance[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTzInsurance objects filtered by the modify_id column
 * @method     ChildCareTzInsurance[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzInsuranceQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzInsuranceQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzInsurance', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzInsuranceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzInsuranceQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzInsuranceQuery) {
            return $criteria;
        }
        $query = new ChildCareTzInsuranceQuery();
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
     * @return ChildCareTzInsurance|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzInsuranceTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzInsuranceTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzInsurance A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, parent, company_parent, company_id, PID, ceiling, ceiling_startup_subtraction, plan, start_date, end_date, timestamp, cancel_flag, paid_flag, gets_company_credit, modify_id FROM care_tz_insurance WHERE id = :p0';
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
            /** @var ChildCareTzInsurance $obj */
            $obj = new ChildCareTzInsurance();
            $obj->hydrate($row);
            CareTzInsuranceTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzInsurance|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByParent($parent = null, $comparison = null)
    {
        if (is_array($parent)) {
            $useMinMax = false;
            if (isset($parent['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_PARENT, $parent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parent['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_PARENT, $parent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_PARENT, $parent, $comparison);
    }

    /**
     * Filter the query on the company_parent column
     *
     * Example usage:
     * <code>
     * $query->filterByCompanyParent(1234); // WHERE company_parent = 1234
     * $query->filterByCompanyParent(array(12, 34)); // WHERE company_parent IN (12, 34)
     * $query->filterByCompanyParent(array('min' => 12)); // WHERE company_parent > 12
     * </code>
     *
     * @param     mixed $companyParent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByCompanyParent($companyParent = null, $comparison = null)
    {
        if (is_array($companyParent)) {
            $useMinMax = false;
            if (isset($companyParent['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_COMPANY_PARENT, $companyParent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($companyParent['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_COMPANY_PARENT, $companyParent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_COMPANY_PARENT, $companyParent, $comparison);
    }

    /**
     * Filter the query on the company_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCompanyId(1234); // WHERE company_id = 1234
     * $query->filterByCompanyId(array(12, 34)); // WHERE company_id IN (12, 34)
     * $query->filterByCompanyId(array('min' => 12)); // WHERE company_id > 12
     * </code>
     *
     * @param     mixed $companyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByCompanyId($companyId = null, $comparison = null)
    {
        if (is_array($companyId)) {
            $useMinMax = false;
            if (isset($companyId['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_COMPANY_ID, $companyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($companyId['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_COMPANY_ID, $companyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_COMPANY_ID, $companyId, $comparison);
    }

    /**
     * Filter the query on the PID column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE PID = 1234
     * $query->filterByPid(array(12, 34)); // WHERE PID IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE PID > 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the ceiling column
     *
     * Example usage:
     * <code>
     * $query->filterByCeiling('fooValue');   // WHERE ceiling = 'fooValue'
     * $query->filterByCeiling('%fooValue%', Criteria::LIKE); // WHERE ceiling LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ceiling The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByCeiling($ceiling = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ceiling)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_CEILING, $ceiling, $comparison);
    }

    /**
     * Filter the query on the ceiling_startup_subtraction column
     *
     * Example usage:
     * <code>
     * $query->filterByCeilingStartupSubtraction('fooValue');   // WHERE ceiling_startup_subtraction = 'fooValue'
     * $query->filterByCeilingStartupSubtraction('%fooValue%', Criteria::LIKE); // WHERE ceiling_startup_subtraction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ceilingStartupSubtraction The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByCeilingStartupSubtraction($ceilingStartupSubtraction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ceilingStartupSubtraction)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_CEILING_STARTUP_SUBTRACTION, $ceilingStartupSubtraction, $comparison);
    }

    /**
     * Filter the query on the plan column
     *
     * Example usage:
     * <code>
     * $query->filterByPlan('fooValue');   // WHERE plan = 'fooValue'
     * $query->filterByPlan('%fooValue%', Criteria::LIKE); // WHERE plan LIKE '%fooValue%'
     * </code>
     *
     * @param     string $plan The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByPlan($plan = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($plan)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_PLAN, $plan, $comparison);
    }

    /**
     * Filter the query on the start_date column
     *
     * Example usage:
     * <code>
     * $query->filterByStartDate(1234); // WHERE start_date = 1234
     * $query->filterByStartDate(array(12, 34)); // WHERE start_date IN (12, 34)
     * $query->filterByStartDate(array('min' => 12)); // WHERE start_date > 12
     * </code>
     *
     * @param     mixed $startDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByStartDate($startDate = null, $comparison = null)
    {
        if (is_array($startDate)) {
            $useMinMax = false;
            if (isset($startDate['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_START_DATE, $startDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startDate['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_START_DATE, $startDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_START_DATE, $startDate, $comparison);
    }

    /**
     * Filter the query on the end_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEndDate(1234); // WHERE end_date = 1234
     * $query->filterByEndDate(array(12, 34)); // WHERE end_date IN (12, 34)
     * $query->filterByEndDate(array('min' => 12)); // WHERE end_date > 12
     * </code>
     *
     * @param     mixed $endDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByEndDate($endDate = null, $comparison = null)
    {
        if (is_array($endDate)) {
            $useMinMax = false;
            if (isset($endDate['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_END_DATE, $endDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($endDate['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_END_DATE, $endDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_END_DATE, $endDate, $comparison);
    }

    /**
     * Filter the query on the timestamp column
     *
     * Example usage:
     * <code>
     * $query->filterByTimestamp(1234); // WHERE timestamp = 1234
     * $query->filterByTimestamp(array(12, 34)); // WHERE timestamp IN (12, 34)
     * $query->filterByTimestamp(array('min' => 12)); // WHERE timestamp > 12
     * </code>
     *
     * @param     mixed $timestamp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByTimestamp($timestamp = null, $comparison = null)
    {
        if (is_array($timestamp)) {
            $useMinMax = false;
            if (isset($timestamp['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_TIMESTAMP, $timestamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timestamp['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_TIMESTAMP, $timestamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_TIMESTAMP, $timestamp, $comparison);
    }

    /**
     * Filter the query on the cancel_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByCancelFlag(1234); // WHERE cancel_flag = 1234
     * $query->filterByCancelFlag(array(12, 34)); // WHERE cancel_flag IN (12, 34)
     * $query->filterByCancelFlag(array('min' => 12)); // WHERE cancel_flag > 12
     * </code>
     *
     * @param     mixed $cancelFlag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByCancelFlag($cancelFlag = null, $comparison = null)
    {
        if (is_array($cancelFlag)) {
            $useMinMax = false;
            if (isset($cancelFlag['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_CANCEL_FLAG, $cancelFlag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cancelFlag['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_CANCEL_FLAG, $cancelFlag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_CANCEL_FLAG, $cancelFlag, $comparison);
    }

    /**
     * Filter the query on the paid_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByPaidFlag(1234); // WHERE paid_flag = 1234
     * $query->filterByPaidFlag(array(12, 34)); // WHERE paid_flag IN (12, 34)
     * $query->filterByPaidFlag(array('min' => 12)); // WHERE paid_flag > 12
     * </code>
     *
     * @param     mixed $paidFlag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByPaidFlag($paidFlag = null, $comparison = null)
    {
        if (is_array($paidFlag)) {
            $useMinMax = false;
            if (isset($paidFlag['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_PAID_FLAG, $paidFlag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paidFlag['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_PAID_FLAG, $paidFlag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_PAID_FLAG, $paidFlag, $comparison);
    }

    /**
     * Filter the query on the gets_company_credit column
     *
     * Example usage:
     * <code>
     * $query->filterByGetsCompanyCredit(1234); // WHERE gets_company_credit = 1234
     * $query->filterByGetsCompanyCredit(array(12, 34)); // WHERE gets_company_credit IN (12, 34)
     * $query->filterByGetsCompanyCredit(array('min' => 12)); // WHERE gets_company_credit > 12
     * </code>
     *
     * @param     mixed $getsCompanyCredit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByGetsCompanyCredit($getsCompanyCredit = null, $comparison = null)
    {
        if (is_array($getsCompanyCredit)) {
            $useMinMax = false;
            if (isset($getsCompanyCredit['min'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_GETS_COMPANY_CREDIT, $getsCompanyCredit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($getsCompanyCredit['max'])) {
                $this->addUsingAlias(CareTzInsuranceTableMap::COL_GETS_COMPANY_CREDIT, $getsCompanyCredit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_GETS_COMPANY_CREDIT, $getsCompanyCredit, $comparison);
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
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTableMap::COL_MODIFY_ID, $modifyId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzInsurance $careTzInsurance Object to remove from the list of results
     *
     * @return $this|ChildCareTzInsuranceQuery The current query, for fluid interface
     */
    public function prune($careTzInsurance = null)
    {
        if ($careTzInsurance) {
            $this->addUsingAlias(CareTzInsuranceTableMap::COL_ID, $careTzInsurance->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_insurance table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsuranceTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzInsuranceTableMap::clearInstancePool();
            CareTzInsuranceTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsuranceTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzInsuranceTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzInsuranceTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzInsuranceTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzInsuranceQuery
