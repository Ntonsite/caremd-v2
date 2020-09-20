<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTechRepairDone as ChildCareTechRepairDone;
use CareMd\CareMd\CareTechRepairDoneQuery as ChildCareTechRepairDoneQuery;
use CareMd\CareMd\Map\CareTechRepairDoneTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tech_repair_done' table.
 *
 *
 *
 * @method     ChildCareTechRepairDoneQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTechRepairDoneQuery orderByDept($order = Criteria::ASC) Order by the dept column
 * @method     ChildCareTechRepairDoneQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTechRepairDoneQuery orderByJobId($order = Criteria::ASC) Order by the job_id column
 * @method     ChildCareTechRepairDoneQuery orderByJob($order = Criteria::ASC) Order by the job column
 * @method     ChildCareTechRepairDoneQuery orderByReporter($order = Criteria::ASC) Order by the reporter column
 * @method     ChildCareTechRepairDoneQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTechRepairDoneQuery orderByTdate($order = Criteria::ASC) Order by the tdate column
 * @method     ChildCareTechRepairDoneQuery orderByTtime($order = Criteria::ASC) Order by the ttime column
 * @method     ChildCareTechRepairDoneQuery orderByTid($order = Criteria::ASC) Order by the tid column
 * @method     ChildCareTechRepairDoneQuery orderBySeen($order = Criteria::ASC) Order by the seen column
 * @method     ChildCareTechRepairDoneQuery orderByDIdx($order = Criteria::ASC) Order by the d_idx column
 * @method     ChildCareTechRepairDoneQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTechRepairDoneQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTechRepairDoneQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTechRepairDoneQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTechRepairDoneQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTechRepairDoneQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTechRepairDoneQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTechRepairDoneQuery groupByDept() Group by the dept column
 * @method     ChildCareTechRepairDoneQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTechRepairDoneQuery groupByJobId() Group by the job_id column
 * @method     ChildCareTechRepairDoneQuery groupByJob() Group by the job column
 * @method     ChildCareTechRepairDoneQuery groupByReporter() Group by the reporter column
 * @method     ChildCareTechRepairDoneQuery groupById() Group by the id column
 * @method     ChildCareTechRepairDoneQuery groupByTdate() Group by the tdate column
 * @method     ChildCareTechRepairDoneQuery groupByTtime() Group by the ttime column
 * @method     ChildCareTechRepairDoneQuery groupByTid() Group by the tid column
 * @method     ChildCareTechRepairDoneQuery groupBySeen() Group by the seen column
 * @method     ChildCareTechRepairDoneQuery groupByDIdx() Group by the d_idx column
 * @method     ChildCareTechRepairDoneQuery groupByStatus() Group by the status column
 * @method     ChildCareTechRepairDoneQuery groupByHistory() Group by the history column
 * @method     ChildCareTechRepairDoneQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTechRepairDoneQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTechRepairDoneQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTechRepairDoneQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTechRepairDoneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTechRepairDoneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTechRepairDoneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTechRepairDoneQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTechRepairDoneQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTechRepairDoneQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTechRepairDone findOne(ConnectionInterface $con = null) Return the first ChildCareTechRepairDone matching the query
 * @method     ChildCareTechRepairDone findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTechRepairDone matching the query, or a new ChildCareTechRepairDone object populated from the query conditions when no match is found
 *
 * @method     ChildCareTechRepairDone findOneByBatchNr(int $batch_nr) Return the first ChildCareTechRepairDone filtered by the batch_nr column
 * @method     ChildCareTechRepairDone findOneByDept(string $dept) Return the first ChildCareTechRepairDone filtered by the dept column
 * @method     ChildCareTechRepairDone findOneByDeptNr(int $dept_nr) Return the first ChildCareTechRepairDone filtered by the dept_nr column
 * @method     ChildCareTechRepairDone findOneByJobId(string $job_id) Return the first ChildCareTechRepairDone filtered by the job_id column
 * @method     ChildCareTechRepairDone findOneByJob(string $job) Return the first ChildCareTechRepairDone filtered by the job column
 * @method     ChildCareTechRepairDone findOneByReporter(string $reporter) Return the first ChildCareTechRepairDone filtered by the reporter column
 * @method     ChildCareTechRepairDone findOneById(string $id) Return the first ChildCareTechRepairDone filtered by the id column
 * @method     ChildCareTechRepairDone findOneByTdate(string $tdate) Return the first ChildCareTechRepairDone filtered by the tdate column
 * @method     ChildCareTechRepairDone findOneByTtime(string $ttime) Return the first ChildCareTechRepairDone filtered by the ttime column
 * @method     ChildCareTechRepairDone findOneByTid(string $tid) Return the first ChildCareTechRepairDone filtered by the tid column
 * @method     ChildCareTechRepairDone findOneBySeen(boolean $seen) Return the first ChildCareTechRepairDone filtered by the seen column
 * @method     ChildCareTechRepairDone findOneByDIdx(string $d_idx) Return the first ChildCareTechRepairDone filtered by the d_idx column
 * @method     ChildCareTechRepairDone findOneByStatus(string $status) Return the first ChildCareTechRepairDone filtered by the status column
 * @method     ChildCareTechRepairDone findOneByHistory(string $history) Return the first ChildCareTechRepairDone filtered by the history column
 * @method     ChildCareTechRepairDone findOneByModifyId(string $modify_id) Return the first ChildCareTechRepairDone filtered by the modify_id column
 * @method     ChildCareTechRepairDone findOneByModifyTime(string $modify_time) Return the first ChildCareTechRepairDone filtered by the modify_time column
 * @method     ChildCareTechRepairDone findOneByCreateId(string $create_id) Return the first ChildCareTechRepairDone filtered by the create_id column
 * @method     ChildCareTechRepairDone findOneByCreateTime(string $create_time) Return the first ChildCareTechRepairDone filtered by the create_time column *

 * @method     ChildCareTechRepairDone requirePk($key, ConnectionInterface $con = null) Return the ChildCareTechRepairDone by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOne(ConnectionInterface $con = null) Return the first ChildCareTechRepairDone matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTechRepairDone requireOneByBatchNr(int $batch_nr) Return the first ChildCareTechRepairDone filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByDept(string $dept) Return the first ChildCareTechRepairDone filtered by the dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByDeptNr(int $dept_nr) Return the first ChildCareTechRepairDone filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByJobId(string $job_id) Return the first ChildCareTechRepairDone filtered by the job_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByJob(string $job) Return the first ChildCareTechRepairDone filtered by the job column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByReporter(string $reporter) Return the first ChildCareTechRepairDone filtered by the reporter column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneById(string $id) Return the first ChildCareTechRepairDone filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByTdate(string $tdate) Return the first ChildCareTechRepairDone filtered by the tdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByTtime(string $ttime) Return the first ChildCareTechRepairDone filtered by the ttime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByTid(string $tid) Return the first ChildCareTechRepairDone filtered by the tid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneBySeen(boolean $seen) Return the first ChildCareTechRepairDone filtered by the seen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByDIdx(string $d_idx) Return the first ChildCareTechRepairDone filtered by the d_idx column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByStatus(string $status) Return the first ChildCareTechRepairDone filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByHistory(string $history) Return the first ChildCareTechRepairDone filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByModifyId(string $modify_id) Return the first ChildCareTechRepairDone filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByModifyTime(string $modify_time) Return the first ChildCareTechRepairDone filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByCreateId(string $create_id) Return the first ChildCareTechRepairDone filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairDone requireOneByCreateTime(string $create_time) Return the first ChildCareTechRepairDone filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTechRepairDone[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTechRepairDone objects based on current ModelCriteria
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTechRepairDone objects filtered by the batch_nr column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByDept(string $dept) Return ChildCareTechRepairDone objects filtered by the dept column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareTechRepairDone objects filtered by the dept_nr column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByJobId(string $job_id) Return ChildCareTechRepairDone objects filtered by the job_id column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByJob(string $job) Return ChildCareTechRepairDone objects filtered by the job column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByReporter(string $reporter) Return ChildCareTechRepairDone objects filtered by the reporter column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findById(string $id) Return ChildCareTechRepairDone objects filtered by the id column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByTdate(string $tdate) Return ChildCareTechRepairDone objects filtered by the tdate column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByTtime(string $ttime) Return ChildCareTechRepairDone objects filtered by the ttime column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByTid(string $tid) Return ChildCareTechRepairDone objects filtered by the tid column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findBySeen(boolean $seen) Return ChildCareTechRepairDone objects filtered by the seen column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByDIdx(string $d_idx) Return ChildCareTechRepairDone objects filtered by the d_idx column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByStatus(string $status) Return ChildCareTechRepairDone objects filtered by the status column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByHistory(string $history) Return ChildCareTechRepairDone objects filtered by the history column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTechRepairDone objects filtered by the modify_id column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTechRepairDone objects filtered by the modify_time column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTechRepairDone objects filtered by the create_id column
 * @method     ChildCareTechRepairDone[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTechRepairDone objects filtered by the create_time column
 * @method     ChildCareTechRepairDone[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTechRepairDoneQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTechRepairDoneQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTechRepairDone', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTechRepairDoneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTechRepairDoneQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTechRepairDoneQuery) {
            return $criteria;
        }
        $query = new ChildCareTechRepairDoneQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$batch_nr, $dept_nr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTechRepairDone|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTechRepairDoneTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTechRepairDoneTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCareTechRepairDone A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, dept, dept_nr, job_id, job, reporter, id, tdate, ttime, tid, seen, d_idx, status, history, modify_id, modify_time, create_id, create_time FROM care_tech_repair_done WHERE batch_nr = :p0 AND dept_nr = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTechRepairDone $obj */
            $obj = new ChildCareTechRepairDone();
            $obj->hydrate($row);
            CareTechRepairDoneTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCareTechRepairDone|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTechRepairDoneTableMap::COL_BATCH_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTechRepairDoneTableMap::COL_DEPT_NR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTechRepairDoneTableMap::COL_BATCH_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTechRepairDoneTableMap::COL_DEPT_NR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the batch_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByBatchNr(1234); // WHERE batch_nr = 1234
     * $query->filterByBatchNr(array(12, 34)); // WHERE batch_nr IN (12, 34)
     * $query->filterByBatchNr(array('min' => 12)); // WHERE batch_nr > 12
     * </code>
     *
     * @param     mixed $batchNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_BATCH_NR, $batchNr, $comparison);
    }

    /**
     * Filter the query on the dept column
     *
     * Example usage:
     * <code>
     * $query->filterByDept('fooValue');   // WHERE dept = 'fooValue'
     * $query->filterByDept('%fooValue%', Criteria::LIKE); // WHERE dept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dept The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByDept($dept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_DEPT, $dept, $comparison);
    }

    /**
     * Filter the query on the dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptNr(1234); // WHERE dept_nr = 1234
     * $query->filterByDeptNr(array(12, 34)); // WHERE dept_nr IN (12, 34)
     * $query->filterByDeptNr(array('min' => 12)); // WHERE dept_nr > 12
     * </code>
     *
     * @param     mixed $deptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the job_id column
     *
     * Example usage:
     * <code>
     * $query->filterByJobId('fooValue');   // WHERE job_id = 'fooValue'
     * $query->filterByJobId('%fooValue%', Criteria::LIKE); // WHERE job_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jobId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByJobId($jobId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jobId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_JOB_ID, $jobId, $comparison);
    }

    /**
     * Filter the query on the job column
     *
     * Example usage:
     * <code>
     * $query->filterByJob('fooValue');   // WHERE job = 'fooValue'
     * $query->filterByJob('%fooValue%', Criteria::LIKE); // WHERE job LIKE '%fooValue%'
     * </code>
     *
     * @param     string $job The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByJob($job = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($job)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_JOB, $job, $comparison);
    }

    /**
     * Filter the query on the reporter column
     *
     * Example usage:
     * <code>
     * $query->filterByReporter('fooValue');   // WHERE reporter = 'fooValue'
     * $query->filterByReporter('%fooValue%', Criteria::LIKE); // WHERE reporter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reporter The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByReporter($reporter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reporter)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_REPORTER, $reporter, $comparison);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE id = 'fooValue'
     * $query->filterById('%fooValue%', Criteria::LIKE); // WHERE id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the tdate column
     *
     * Example usage:
     * <code>
     * $query->filterByTdate('2011-03-14'); // WHERE tdate = '2011-03-14'
     * $query->filterByTdate('now'); // WHERE tdate = '2011-03-14'
     * $query->filterByTdate(array('max' => 'yesterday')); // WHERE tdate > '2011-03-13'
     * </code>
     *
     * @param     mixed $tdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByTdate($tdate = null, $comparison = null)
    {
        if (is_array($tdate)) {
            $useMinMax = false;
            if (isset($tdate['min'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_TDATE, $tdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tdate['max'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_TDATE, $tdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_TDATE, $tdate, $comparison);
    }

    /**
     * Filter the query on the ttime column
     *
     * Example usage:
     * <code>
     * $query->filterByTtime('2011-03-14'); // WHERE ttime = '2011-03-14'
     * $query->filterByTtime('now'); // WHERE ttime = '2011-03-14'
     * $query->filterByTtime(array('max' => 'yesterday')); // WHERE ttime > '2011-03-13'
     * </code>
     *
     * @param     mixed $ttime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByTtime($ttime = null, $comparison = null)
    {
        if (is_array($ttime)) {
            $useMinMax = false;
            if (isset($ttime['min'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_TTIME, $ttime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ttime['max'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_TTIME, $ttime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_TTIME, $ttime, $comparison);
    }

    /**
     * Filter the query on the tid column
     *
     * Example usage:
     * <code>
     * $query->filterByTid('2011-03-14'); // WHERE tid = '2011-03-14'
     * $query->filterByTid('now'); // WHERE tid = '2011-03-14'
     * $query->filterByTid(array('max' => 'yesterday')); // WHERE tid > '2011-03-13'
     * </code>
     *
     * @param     mixed $tid The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByTid($tid = null, $comparison = null)
    {
        if (is_array($tid)) {
            $useMinMax = false;
            if (isset($tid['min'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_TID, $tid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tid['max'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_TID, $tid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_TID, $tid, $comparison);
    }

    /**
     * Filter the query on the seen column
     *
     * Example usage:
     * <code>
     * $query->filterBySeen(true); // WHERE seen = true
     * $query->filterBySeen('yes'); // WHERE seen = true
     * </code>
     *
     * @param     boolean|string $seen The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterBySeen($seen = null, $comparison = null)
    {
        if (is_string($seen)) {
            $seen = in_array(strtolower($seen), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_SEEN, $seen, $comparison);
    }

    /**
     * Filter the query on the d_idx column
     *
     * Example usage:
     * <code>
     * $query->filterByDIdx('fooValue');   // WHERE d_idx = 'fooValue'
     * $query->filterByDIdx('%fooValue%', Criteria::LIKE); // WHERE d_idx LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dIdx The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByDIdx($dIdx = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dIdx)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_D_IDX, $dIdx, $comparison);
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
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTechRepairDoneTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairDoneTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTechRepairDone $careTechRepairDone Object to remove from the list of results
     *
     * @return $this|ChildCareTechRepairDoneQuery The current query, for fluid interface
     */
    public function prune($careTechRepairDone = null)
    {
        if ($careTechRepairDone) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTechRepairDoneTableMap::COL_BATCH_NR), $careTechRepairDone->getBatchNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTechRepairDoneTableMap::COL_DEPT_NR), $careTechRepairDone->getDeptNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tech_repair_done table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechRepairDoneTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTechRepairDoneTableMap::clearInstancePool();
            CareTechRepairDoneTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechRepairDoneTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTechRepairDoneTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTechRepairDoneTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTechRepairDoneTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTechRepairDoneQuery
