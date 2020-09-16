<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTechRepairJob as ChildCareTechRepairJob;
use CareMd\CareMd\CareTechRepairJobQuery as ChildCareTechRepairJobQuery;
use CareMd\CareMd\Map\CareTechRepairJobTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tech_repair_job' table.
 *
 *
 *
 * @method     ChildCareTechRepairJobQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTechRepairJobQuery orderByDept($order = Criteria::ASC) Order by the dept column
 * @method     ChildCareTechRepairJobQuery orderByJob($order = Criteria::ASC) Order by the job column
 * @method     ChildCareTechRepairJobQuery orderByReporter($order = Criteria::ASC) Order by the reporter column
 * @method     ChildCareTechRepairJobQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTechRepairJobQuery orderByTphone($order = Criteria::ASC) Order by the tphone column
 * @method     ChildCareTechRepairJobQuery orderByTdate($order = Criteria::ASC) Order by the tdate column
 * @method     ChildCareTechRepairJobQuery orderByTtime($order = Criteria::ASC) Order by the ttime column
 * @method     ChildCareTechRepairJobQuery orderByTid($order = Criteria::ASC) Order by the tid column
 * @method     ChildCareTechRepairJobQuery orderByDone($order = Criteria::ASC) Order by the done column
 * @method     ChildCareTechRepairJobQuery orderBySeen($order = Criteria::ASC) Order by the seen column
 * @method     ChildCareTechRepairJobQuery orderBySeenby($order = Criteria::ASC) Order by the seenby column
 * @method     ChildCareTechRepairJobQuery orderBySstamp($order = Criteria::ASC) Order by the sstamp column
 * @method     ChildCareTechRepairJobQuery orderByDoneby($order = Criteria::ASC) Order by the doneby column
 * @method     ChildCareTechRepairJobQuery orderByDstamp($order = Criteria::ASC) Order by the dstamp column
 * @method     ChildCareTechRepairJobQuery orderByDIdx($order = Criteria::ASC) Order by the d_idx column
 * @method     ChildCareTechRepairJobQuery orderByArchive($order = Criteria::ASC) Order by the archive column
 * @method     ChildCareTechRepairJobQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTechRepairJobQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTechRepairJobQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTechRepairJobQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTechRepairJobQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTechRepairJobQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTechRepairJobQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTechRepairJobQuery groupByDept() Group by the dept column
 * @method     ChildCareTechRepairJobQuery groupByJob() Group by the job column
 * @method     ChildCareTechRepairJobQuery groupByReporter() Group by the reporter column
 * @method     ChildCareTechRepairJobQuery groupById() Group by the id column
 * @method     ChildCareTechRepairJobQuery groupByTphone() Group by the tphone column
 * @method     ChildCareTechRepairJobQuery groupByTdate() Group by the tdate column
 * @method     ChildCareTechRepairJobQuery groupByTtime() Group by the ttime column
 * @method     ChildCareTechRepairJobQuery groupByTid() Group by the tid column
 * @method     ChildCareTechRepairJobQuery groupByDone() Group by the done column
 * @method     ChildCareTechRepairJobQuery groupBySeen() Group by the seen column
 * @method     ChildCareTechRepairJobQuery groupBySeenby() Group by the seenby column
 * @method     ChildCareTechRepairJobQuery groupBySstamp() Group by the sstamp column
 * @method     ChildCareTechRepairJobQuery groupByDoneby() Group by the doneby column
 * @method     ChildCareTechRepairJobQuery groupByDstamp() Group by the dstamp column
 * @method     ChildCareTechRepairJobQuery groupByDIdx() Group by the d_idx column
 * @method     ChildCareTechRepairJobQuery groupByArchive() Group by the archive column
 * @method     ChildCareTechRepairJobQuery groupByStatus() Group by the status column
 * @method     ChildCareTechRepairJobQuery groupByHistory() Group by the history column
 * @method     ChildCareTechRepairJobQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTechRepairJobQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTechRepairJobQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTechRepairJobQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTechRepairJobQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTechRepairJobQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTechRepairJobQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTechRepairJobQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTechRepairJobQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTechRepairJobQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTechRepairJob findOne(ConnectionInterface $con = null) Return the first ChildCareTechRepairJob matching the query
 * @method     ChildCareTechRepairJob findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTechRepairJob matching the query, or a new ChildCareTechRepairJob object populated from the query conditions when no match is found
 *
 * @method     ChildCareTechRepairJob findOneByBatchNr(int $batch_nr) Return the first ChildCareTechRepairJob filtered by the batch_nr column
 * @method     ChildCareTechRepairJob findOneByDept(string $dept) Return the first ChildCareTechRepairJob filtered by the dept column
 * @method     ChildCareTechRepairJob findOneByJob(string $job) Return the first ChildCareTechRepairJob filtered by the job column
 * @method     ChildCareTechRepairJob findOneByReporter(string $reporter) Return the first ChildCareTechRepairJob filtered by the reporter column
 * @method     ChildCareTechRepairJob findOneById(string $id) Return the first ChildCareTechRepairJob filtered by the id column
 * @method     ChildCareTechRepairJob findOneByTphone(string $tphone) Return the first ChildCareTechRepairJob filtered by the tphone column
 * @method     ChildCareTechRepairJob findOneByTdate(string $tdate) Return the first ChildCareTechRepairJob filtered by the tdate column
 * @method     ChildCareTechRepairJob findOneByTtime(string $ttime) Return the first ChildCareTechRepairJob filtered by the ttime column
 * @method     ChildCareTechRepairJob findOneByTid(string $tid) Return the first ChildCareTechRepairJob filtered by the tid column
 * @method     ChildCareTechRepairJob findOneByDone(boolean $done) Return the first ChildCareTechRepairJob filtered by the done column
 * @method     ChildCareTechRepairJob findOneBySeen(boolean $seen) Return the first ChildCareTechRepairJob filtered by the seen column
 * @method     ChildCareTechRepairJob findOneBySeenby(string $seenby) Return the first ChildCareTechRepairJob filtered by the seenby column
 * @method     ChildCareTechRepairJob findOneBySstamp(string $sstamp) Return the first ChildCareTechRepairJob filtered by the sstamp column
 * @method     ChildCareTechRepairJob findOneByDoneby(string $doneby) Return the first ChildCareTechRepairJob filtered by the doneby column
 * @method     ChildCareTechRepairJob findOneByDstamp(string $dstamp) Return the first ChildCareTechRepairJob filtered by the dstamp column
 * @method     ChildCareTechRepairJob findOneByDIdx(string $d_idx) Return the first ChildCareTechRepairJob filtered by the d_idx column
 * @method     ChildCareTechRepairJob findOneByArchive(boolean $archive) Return the first ChildCareTechRepairJob filtered by the archive column
 * @method     ChildCareTechRepairJob findOneByStatus(string $status) Return the first ChildCareTechRepairJob filtered by the status column
 * @method     ChildCareTechRepairJob findOneByHistory(string $history) Return the first ChildCareTechRepairJob filtered by the history column
 * @method     ChildCareTechRepairJob findOneByModifyId(string $modify_id) Return the first ChildCareTechRepairJob filtered by the modify_id column
 * @method     ChildCareTechRepairJob findOneByModifyTime(string $modify_time) Return the first ChildCareTechRepairJob filtered by the modify_time column
 * @method     ChildCareTechRepairJob findOneByCreateId(string $create_id) Return the first ChildCareTechRepairJob filtered by the create_id column
 * @method     ChildCareTechRepairJob findOneByCreateTime(string $create_time) Return the first ChildCareTechRepairJob filtered by the create_time column *

 * @method     ChildCareTechRepairJob requirePk($key, ConnectionInterface $con = null) Return the ChildCareTechRepairJob by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOne(ConnectionInterface $con = null) Return the first ChildCareTechRepairJob matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTechRepairJob requireOneByBatchNr(int $batch_nr) Return the first ChildCareTechRepairJob filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByDept(string $dept) Return the first ChildCareTechRepairJob filtered by the dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByJob(string $job) Return the first ChildCareTechRepairJob filtered by the job column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByReporter(string $reporter) Return the first ChildCareTechRepairJob filtered by the reporter column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneById(string $id) Return the first ChildCareTechRepairJob filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByTphone(string $tphone) Return the first ChildCareTechRepairJob filtered by the tphone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByTdate(string $tdate) Return the first ChildCareTechRepairJob filtered by the tdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByTtime(string $ttime) Return the first ChildCareTechRepairJob filtered by the ttime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByTid(string $tid) Return the first ChildCareTechRepairJob filtered by the tid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByDone(boolean $done) Return the first ChildCareTechRepairJob filtered by the done column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneBySeen(boolean $seen) Return the first ChildCareTechRepairJob filtered by the seen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneBySeenby(string $seenby) Return the first ChildCareTechRepairJob filtered by the seenby column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneBySstamp(string $sstamp) Return the first ChildCareTechRepairJob filtered by the sstamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByDoneby(string $doneby) Return the first ChildCareTechRepairJob filtered by the doneby column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByDstamp(string $dstamp) Return the first ChildCareTechRepairJob filtered by the dstamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByDIdx(string $d_idx) Return the first ChildCareTechRepairJob filtered by the d_idx column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByArchive(boolean $archive) Return the first ChildCareTechRepairJob filtered by the archive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByStatus(string $status) Return the first ChildCareTechRepairJob filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByHistory(string $history) Return the first ChildCareTechRepairJob filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByModifyId(string $modify_id) Return the first ChildCareTechRepairJob filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByModifyTime(string $modify_time) Return the first ChildCareTechRepairJob filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByCreateId(string $create_id) Return the first ChildCareTechRepairJob filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechRepairJob requireOneByCreateTime(string $create_time) Return the first ChildCareTechRepairJob filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTechRepairJob[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTechRepairJob objects based on current ModelCriteria
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTechRepairJob objects filtered by the batch_nr column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByDept(string $dept) Return ChildCareTechRepairJob objects filtered by the dept column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByJob(string $job) Return ChildCareTechRepairJob objects filtered by the job column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByReporter(string $reporter) Return ChildCareTechRepairJob objects filtered by the reporter column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findById(string $id) Return ChildCareTechRepairJob objects filtered by the id column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByTphone(string $tphone) Return ChildCareTechRepairJob objects filtered by the tphone column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByTdate(string $tdate) Return ChildCareTechRepairJob objects filtered by the tdate column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByTtime(string $ttime) Return ChildCareTechRepairJob objects filtered by the ttime column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByTid(string $tid) Return ChildCareTechRepairJob objects filtered by the tid column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByDone(boolean $done) Return ChildCareTechRepairJob objects filtered by the done column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findBySeen(boolean $seen) Return ChildCareTechRepairJob objects filtered by the seen column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findBySeenby(string $seenby) Return ChildCareTechRepairJob objects filtered by the seenby column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findBySstamp(string $sstamp) Return ChildCareTechRepairJob objects filtered by the sstamp column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByDoneby(string $doneby) Return ChildCareTechRepairJob objects filtered by the doneby column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByDstamp(string $dstamp) Return ChildCareTechRepairJob objects filtered by the dstamp column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByDIdx(string $d_idx) Return ChildCareTechRepairJob objects filtered by the d_idx column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByArchive(boolean $archive) Return ChildCareTechRepairJob objects filtered by the archive column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByStatus(string $status) Return ChildCareTechRepairJob objects filtered by the status column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByHistory(string $history) Return ChildCareTechRepairJob objects filtered by the history column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTechRepairJob objects filtered by the modify_id column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTechRepairJob objects filtered by the modify_time column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTechRepairJob objects filtered by the create_id column
 * @method     ChildCareTechRepairJob[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTechRepairJob objects filtered by the create_time column
 * @method     ChildCareTechRepairJob[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTechRepairJobQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTechRepairJobQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTechRepairJob', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTechRepairJobQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTechRepairJobQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTechRepairJobQuery) {
            return $criteria;
        }
        $query = new ChildCareTechRepairJobQuery();
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
     * @return ChildCareTechRepairJob|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTechRepairJobTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTechRepairJobTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTechRepairJob A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, dept, job, reporter, id, tphone, tdate, ttime, tid, done, seen, seenby, sstamp, doneby, dstamp, d_idx, archive, status, history, modify_id, modify_time, create_id, create_time FROM care_tech_repair_job WHERE batch_nr = :p0';
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
            /** @var ChildCareTechRepairJob $obj */
            $obj = new ChildCareTechRepairJob();
            $obj->hydrate($row);
            CareTechRepairJobTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTechRepairJob|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_BATCH_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_BATCH_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByDept($dept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_DEPT, $dept, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByJob($job = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($job)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_JOB, $job, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByReporter($reporter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reporter)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_REPORTER, $reporter, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the tphone column
     *
     * Example usage:
     * <code>
     * $query->filterByTphone('fooValue');   // WHERE tphone = 'fooValue'
     * $query->filterByTphone('%fooValue%', Criteria::LIKE); // WHERE tphone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tphone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByTphone($tphone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tphone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_TPHONE, $tphone, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByTdate($tdate = null, $comparison = null)
    {
        if (is_array($tdate)) {
            $useMinMax = false;
            if (isset($tdate['min'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_TDATE, $tdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tdate['max'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_TDATE, $tdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_TDATE, $tdate, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByTtime($ttime = null, $comparison = null)
    {
        if (is_array($ttime)) {
            $useMinMax = false;
            if (isset($ttime['min'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_TTIME, $ttime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ttime['max'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_TTIME, $ttime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_TTIME, $ttime, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByTid($tid = null, $comparison = null)
    {
        if (is_array($tid)) {
            $useMinMax = false;
            if (isset($tid['min'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_TID, $tid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tid['max'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_TID, $tid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_TID, $tid, $comparison);
    }

    /**
     * Filter the query on the done column
     *
     * Example usage:
     * <code>
     * $query->filterByDone(true); // WHERE done = true
     * $query->filterByDone('yes'); // WHERE done = true
     * </code>
     *
     * @param     boolean|string $done The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByDone($done = null, $comparison = null)
    {
        if (is_string($done)) {
            $done = in_array(strtolower($done), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_DONE, $done, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterBySeen($seen = null, $comparison = null)
    {
        if (is_string($seen)) {
            $seen = in_array(strtolower($seen), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_SEEN, $seen, $comparison);
    }

    /**
     * Filter the query on the seenby column
     *
     * Example usage:
     * <code>
     * $query->filterBySeenby('fooValue');   // WHERE seenby = 'fooValue'
     * $query->filterBySeenby('%fooValue%', Criteria::LIKE); // WHERE seenby LIKE '%fooValue%'
     * </code>
     *
     * @param     string $seenby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterBySeenby($seenby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($seenby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_SEENBY, $seenby, $comparison);
    }

    /**
     * Filter the query on the sstamp column
     *
     * Example usage:
     * <code>
     * $query->filterBySstamp('fooValue');   // WHERE sstamp = 'fooValue'
     * $query->filterBySstamp('%fooValue%', Criteria::LIKE); // WHERE sstamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sstamp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterBySstamp($sstamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sstamp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_SSTAMP, $sstamp, $comparison);
    }

    /**
     * Filter the query on the doneby column
     *
     * Example usage:
     * <code>
     * $query->filterByDoneby('fooValue');   // WHERE doneby = 'fooValue'
     * $query->filterByDoneby('%fooValue%', Criteria::LIKE); // WHERE doneby LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doneby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByDoneby($doneby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doneby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_DONEBY, $doneby, $comparison);
    }

    /**
     * Filter the query on the dstamp column
     *
     * Example usage:
     * <code>
     * $query->filterByDstamp('fooValue');   // WHERE dstamp = 'fooValue'
     * $query->filterByDstamp('%fooValue%', Criteria::LIKE); // WHERE dstamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dstamp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByDstamp($dstamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dstamp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_DSTAMP, $dstamp, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByDIdx($dIdx = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dIdx)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_D_IDX, $dIdx, $comparison);
    }

    /**
     * Filter the query on the archive column
     *
     * Example usage:
     * <code>
     * $query->filterByArchive(true); // WHERE archive = true
     * $query->filterByArchive('yes'); // WHERE archive = true
     * </code>
     *
     * @param     boolean|string $archive The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByArchive($archive = null, $comparison = null)
    {
        if (is_string($archive)) {
            $archive = in_array(strtolower($archive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_ARCHIVE, $archive, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTechRepairJobTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechRepairJobTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTechRepairJob $careTechRepairJob Object to remove from the list of results
     *
     * @return $this|ChildCareTechRepairJobQuery The current query, for fluid interface
     */
    public function prune($careTechRepairJob = null)
    {
        if ($careTechRepairJob) {
            $this->addUsingAlias(CareTechRepairJobTableMap::COL_BATCH_NR, $careTechRepairJob->getBatchNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tech_repair_job table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechRepairJobTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTechRepairJobTableMap::clearInstancePool();
            CareTechRepairJobTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechRepairJobTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTechRepairJobTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTechRepairJobTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTechRepairJobTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTechRepairJobQuery
