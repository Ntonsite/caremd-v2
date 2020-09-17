<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestLaboratoryTasks as ChildCareTestRequestLaboratoryTasks;
use CareMd\CareMd\CareTestRequestLaboratoryTasksQuery as ChildCareTestRequestLaboratoryTasksQuery;
use CareMd\CareMd\Map\CareTestRequestLaboratoryTasksTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_request_laboratory_tasks' table.
 *
 *
 *
 * @method     ChildCareTestRequestLaboratoryTasksQuery orderByTaskNr($order = Criteria::ASC) Order by the task_nr column
 * @method     ChildCareTestRequestLaboratoryTasksQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestRequestLaboratoryTasksQuery orderByTestNr($order = Criteria::ASC) Order by the test_nr column
 * @method     ChildCareTestRequestLaboratoryTasksQuery orderByBillNumber($order = Criteria::ASC) Order by the bill_number column
 * @method     ChildCareTestRequestLaboratoryTasksQuery orderByBillStatus($order = Criteria::ASC) Order by the bill_status column
 * @method     ChildCareTestRequestLaboratoryTasksQuery orderBySendDate($order = Criteria::ASC) Order by the send_date column
 * @method     ChildCareTestRequestLaboratoryTasksQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestRequestLaboratoryTasksQuery orderByIsDisabled($order = Criteria::ASC) Order by the is_disabled column
 *
 * @method     ChildCareTestRequestLaboratoryTasksQuery groupByTaskNr() Group by the task_nr column
 * @method     ChildCareTestRequestLaboratoryTasksQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestRequestLaboratoryTasksQuery groupByTestNr() Group by the test_nr column
 * @method     ChildCareTestRequestLaboratoryTasksQuery groupByBillNumber() Group by the bill_number column
 * @method     ChildCareTestRequestLaboratoryTasksQuery groupByBillStatus() Group by the bill_status column
 * @method     ChildCareTestRequestLaboratoryTasksQuery groupBySendDate() Group by the send_date column
 * @method     ChildCareTestRequestLaboratoryTasksQuery groupByStatus() Group by the status column
 * @method     ChildCareTestRequestLaboratoryTasksQuery groupByIsDisabled() Group by the is_disabled column
 *
 * @method     ChildCareTestRequestLaboratoryTasksQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestRequestLaboratoryTasksQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestRequestLaboratoryTasksQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestRequestLaboratoryTasksQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestRequestLaboratoryTasksQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestRequestLaboratoryTasksQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestRequestLaboratoryTasks findOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestLaboratoryTasks matching the query
 * @method     ChildCareTestRequestLaboratoryTasks findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestRequestLaboratoryTasks matching the query, or a new ChildCareTestRequestLaboratoryTasks object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestRequestLaboratoryTasks findOneByTaskNr(int $task_nr) Return the first ChildCareTestRequestLaboratoryTasks filtered by the task_nr column
 * @method     ChildCareTestRequestLaboratoryTasks findOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestLaboratoryTasks filtered by the batch_nr column
 * @method     ChildCareTestRequestLaboratoryTasks findOneByTestNr(int $test_nr) Return the first ChildCareTestRequestLaboratoryTasks filtered by the test_nr column
 * @method     ChildCareTestRequestLaboratoryTasks findOneByBillNumber(string $bill_number) Return the first ChildCareTestRequestLaboratoryTasks filtered by the bill_number column
 * @method     ChildCareTestRequestLaboratoryTasks findOneByBillStatus(string $bill_status) Return the first ChildCareTestRequestLaboratoryTasks filtered by the bill_status column
 * @method     ChildCareTestRequestLaboratoryTasks findOneBySendDate(string $send_date) Return the first ChildCareTestRequestLaboratoryTasks filtered by the send_date column
 * @method     ChildCareTestRequestLaboratoryTasks findOneByStatus(string $status) Return the first ChildCareTestRequestLaboratoryTasks filtered by the status column
 * @method     ChildCareTestRequestLaboratoryTasks findOneByIsDisabled(int $is_disabled) Return the first ChildCareTestRequestLaboratoryTasks filtered by the is_disabled column *

 * @method     ChildCareTestRequestLaboratoryTasks requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestRequestLaboratoryTasks by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratoryTasks requireOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestLaboratoryTasks matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestLaboratoryTasks requireOneByTaskNr(int $task_nr) Return the first ChildCareTestRequestLaboratoryTasks filtered by the task_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratoryTasks requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestLaboratoryTasks filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratoryTasks requireOneByTestNr(int $test_nr) Return the first ChildCareTestRequestLaboratoryTasks filtered by the test_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratoryTasks requireOneByBillNumber(string $bill_number) Return the first ChildCareTestRequestLaboratoryTasks filtered by the bill_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratoryTasks requireOneByBillStatus(string $bill_status) Return the first ChildCareTestRequestLaboratoryTasks filtered by the bill_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratoryTasks requireOneBySendDate(string $send_date) Return the first ChildCareTestRequestLaboratoryTasks filtered by the send_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratoryTasks requireOneByStatus(string $status) Return the first ChildCareTestRequestLaboratoryTasks filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratoryTasks requireOneByIsDisabled(int $is_disabled) Return the first ChildCareTestRequestLaboratoryTasks filtered by the is_disabled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestLaboratoryTasks[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestRequestLaboratoryTasks objects based on current ModelCriteria
 * @method     ChildCareTestRequestLaboratoryTasks[]|ObjectCollection findByTaskNr(int $task_nr) Return ChildCareTestRequestLaboratoryTasks objects filtered by the task_nr column
 * @method     ChildCareTestRequestLaboratoryTasks[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestRequestLaboratoryTasks objects filtered by the batch_nr column
 * @method     ChildCareTestRequestLaboratoryTasks[]|ObjectCollection findByTestNr(int $test_nr) Return ChildCareTestRequestLaboratoryTasks objects filtered by the test_nr column
 * @method     ChildCareTestRequestLaboratoryTasks[]|ObjectCollection findByBillNumber(string $bill_number) Return ChildCareTestRequestLaboratoryTasks objects filtered by the bill_number column
 * @method     ChildCareTestRequestLaboratoryTasks[]|ObjectCollection findByBillStatus(string $bill_status) Return ChildCareTestRequestLaboratoryTasks objects filtered by the bill_status column
 * @method     ChildCareTestRequestLaboratoryTasks[]|ObjectCollection findBySendDate(string $send_date) Return ChildCareTestRequestLaboratoryTasks objects filtered by the send_date column
 * @method     ChildCareTestRequestLaboratoryTasks[]|ObjectCollection findByStatus(string $status) Return ChildCareTestRequestLaboratoryTasks objects filtered by the status column
 * @method     ChildCareTestRequestLaboratoryTasks[]|ObjectCollection findByIsDisabled(int $is_disabled) Return ChildCareTestRequestLaboratoryTasks objects filtered by the is_disabled column
 * @method     ChildCareTestRequestLaboratoryTasks[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestRequestLaboratoryTasksQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestRequestLaboratoryTasksQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestRequestLaboratoryTasks', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestRequestLaboratoryTasksQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestRequestLaboratoryTasksQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestRequestLaboratoryTasksQuery) {
            return $criteria;
        }
        $query = new ChildCareTestRequestLaboratoryTasksQuery();
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
     * @return ChildCareTestRequestLaboratoryTasks|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestLaboratoryTasksTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestRequestLaboratoryTasksTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTestRequestLaboratoryTasks A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT task_nr, batch_nr, test_nr, bill_number, bill_status, send_date, status, is_disabled FROM care_test_request_laboratory_tasks WHERE task_nr = :p0';
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
            /** @var ChildCareTestRequestLaboratoryTasks $obj */
            $obj = new ChildCareTestRequestLaboratoryTasks();
            $obj->hydrate($row);
            CareTestRequestLaboratoryTasksTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTestRequestLaboratoryTasks|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the task_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByTaskNr(1234); // WHERE task_nr = 1234
     * $query->filterByTaskNr(array(12, 34)); // WHERE task_nr IN (12, 34)
     * $query->filterByTaskNr(array('min' => 12)); // WHERE task_nr > 12
     * </code>
     *
     * @param     mixed $taskNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function filterByTaskNr($taskNr = null, $comparison = null)
    {
        if (is_array($taskNr)) {
            $useMinMax = false;
            if (isset($taskNr['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR, $taskNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taskNr['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR, $taskNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR, $taskNr, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_BATCH_NR, $batchNr, $comparison);
    }

    /**
     * Filter the query on the test_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByTestNr(1234); // WHERE test_nr = 1234
     * $query->filterByTestNr(array(12, 34)); // WHERE test_nr IN (12, 34)
     * $query->filterByTestNr(array('min' => 12)); // WHERE test_nr > 12
     * </code>
     *
     * @param     mixed $testNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function filterByTestNr($testNr = null, $comparison = null)
    {
        if (is_array($testNr)) {
            $useMinMax = false;
            if (isset($testNr['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_TEST_NR, $testNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($testNr['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_TEST_NR, $testNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_TEST_NR, $testNr, $comparison);
    }

    /**
     * Filter the query on the bill_number column
     *
     * Example usage:
     * <code>
     * $query->filterByBillNumber(1234); // WHERE bill_number = 1234
     * $query->filterByBillNumber(array(12, 34)); // WHERE bill_number IN (12, 34)
     * $query->filterByBillNumber(array('min' => 12)); // WHERE bill_number > 12
     * </code>
     *
     * @param     mixed $billNumber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function filterByBillNumber($billNumber = null, $comparison = null)
    {
        if (is_array($billNumber)) {
            $useMinMax = false;
            if (isset($billNumber['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_BILL_NUMBER, $billNumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billNumber['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_BILL_NUMBER, $billNumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_BILL_NUMBER, $billNumber, $comparison);
    }

    /**
     * Filter the query on the bill_status column
     *
     * Example usage:
     * <code>
     * $query->filterByBillStatus('fooValue');   // WHERE bill_status = 'fooValue'
     * $query->filterByBillStatus('%fooValue%', Criteria::LIKE); // WHERE bill_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function filterByBillStatus($billStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_BILL_STATUS, $billStatus, $comparison);
    }

    /**
     * Filter the query on the send_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySendDate('2011-03-14'); // WHERE send_date = '2011-03-14'
     * $query->filterBySendDate('now'); // WHERE send_date = '2011-03-14'
     * $query->filterBySendDate(array('max' => 'yesterday')); // WHERE send_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $sendDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function filterBySendDate($sendDate = null, $comparison = null)
    {
        if (is_array($sendDate)) {
            $useMinMax = false;
            if (isset($sendDate['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_SEND_DATE, $sendDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendDate['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_SEND_DATE, $sendDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_SEND_DATE, $sendDate, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the is_disabled column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDisabled(1234); // WHERE is_disabled = 1234
     * $query->filterByIsDisabled(array(12, 34)); // WHERE is_disabled IN (12, 34)
     * $query->filterByIsDisabled(array('min' => 12)); // WHERE is_disabled > 12
     * </code>
     *
     * @param     mixed $isDisabled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function filterByIsDisabled($isDisabled = null, $comparison = null)
    {
        if (is_array($isDisabled)) {
            $useMinMax = false;
            if (isset($isDisabled['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_IS_DISABLED, $isDisabled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isDisabled['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_IS_DISABLED, $isDisabled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_IS_DISABLED, $isDisabled, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestRequestLaboratoryTasks $careTestRequestLaboratoryTasks Object to remove from the list of results
     *
     * @return $this|ChildCareTestRequestLaboratoryTasksQuery The current query, for fluid interface
     */
    public function prune($careTestRequestLaboratoryTasks = null)
    {
        if ($careTestRequestLaboratoryTasks) {
            $this->addUsingAlias(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR, $careTestRequestLaboratoryTasks->getTaskNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_request_laboratory_tasks table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestLaboratoryTasksTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestRequestLaboratoryTasksTableMap::clearInstancePool();
            CareTestRequestLaboratoryTasksTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestLaboratoryTasksTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestRequestLaboratoryTasksTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestRequestLaboratoryTasksTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestRequestLaboratoryTasksTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestRequestLaboratoryTasksQuery
