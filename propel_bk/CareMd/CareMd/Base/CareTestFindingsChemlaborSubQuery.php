<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestFindingsChemlaborSub as ChildCareTestFindingsChemlaborSub;
use CareMd\CareMd\CareTestFindingsChemlaborSubQuery as ChildCareTestFindingsChemlaborSubQuery;
use CareMd\CareMd\Map\CareTestFindingsChemlaborSubTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_findings_chemlabor_sub' table.
 *
 *
 *
 * @method     ChildCareTestFindingsChemlaborSubQuery orderBySubId($order = Criteria::ASC) Order by the sub_id column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByJobId($order = Criteria::ASC) Order by the job_id column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByParamaterName($order = Criteria::ASC) Order by the paramater_name column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByParameterValue($order = Criteria::ASC) Order by the parameter_value column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByIsUpdated($order = Criteria::ASC) Order by the is_updated column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByOldParamValue($order = Criteria::ASC) Order by the old_param_value column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByTestDate($order = Criteria::ASC) Order by the test_date column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByTestTime($order = Criteria::ASC) Order by the test_time column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestFindingsChemlaborSubQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestFindingsChemlaborSubQuery groupBySubId() Group by the sub_id column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByJobId() Group by the job_id column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByParamaterName() Group by the paramater_name column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByParameterValue() Group by the parameter_value column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByIsUpdated() Group by the is_updated column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByOldParamValue() Group by the old_param_value column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByStatus() Group by the status column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByHistory() Group by the history column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByTestDate() Group by the test_date column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByTestTime() Group by the test_time column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestFindingsChemlaborSubQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestFindingsChemlaborSubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestFindingsChemlaborSubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestFindingsChemlaborSubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestFindingsChemlaborSubQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestFindingsChemlaborSubQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestFindingsChemlaborSubQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestFindingsChemlaborSub findOne(ConnectionInterface $con = null) Return the first ChildCareTestFindingsChemlaborSub matching the query
 * @method     ChildCareTestFindingsChemlaborSub findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestFindingsChemlaborSub matching the query, or a new ChildCareTestFindingsChemlaborSub object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestFindingsChemlaborSub findOneBySubId(int $sub_id) Return the first ChildCareTestFindingsChemlaborSub filtered by the sub_id column
 * @method     ChildCareTestFindingsChemlaborSub findOneByBatchNr(int $batch_nr) Return the first ChildCareTestFindingsChemlaborSub filtered by the batch_nr column
 * @method     ChildCareTestFindingsChemlaborSub findOneByJobId(string $job_id) Return the first ChildCareTestFindingsChemlaborSub filtered by the job_id column
 * @method     ChildCareTestFindingsChemlaborSub findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestFindingsChemlaborSub filtered by the encounter_nr column
 * @method     ChildCareTestFindingsChemlaborSub findOneByParamaterName(string $paramater_name) Return the first ChildCareTestFindingsChemlaborSub filtered by the paramater_name column
 * @method     ChildCareTestFindingsChemlaborSub findOneByParameterValue(string $parameter_value) Return the first ChildCareTestFindingsChemlaborSub filtered by the parameter_value column
 * @method     ChildCareTestFindingsChemlaborSub findOneByIsUpdated(boolean $is_updated) Return the first ChildCareTestFindingsChemlaborSub filtered by the is_updated column
 * @method     ChildCareTestFindingsChemlaborSub findOneByOldParamValue(string $old_param_value) Return the first ChildCareTestFindingsChemlaborSub filtered by the old_param_value column
 * @method     ChildCareTestFindingsChemlaborSub findOneByStatus(string $status) Return the first ChildCareTestFindingsChemlaborSub filtered by the status column
 * @method     ChildCareTestFindingsChemlaborSub findOneByHistory(string $history) Return the first ChildCareTestFindingsChemlaborSub filtered by the history column
 * @method     ChildCareTestFindingsChemlaborSub findOneByTestDate(string $test_date) Return the first ChildCareTestFindingsChemlaborSub filtered by the test_date column
 * @method     ChildCareTestFindingsChemlaborSub findOneByTestTime(string $test_time) Return the first ChildCareTestFindingsChemlaborSub filtered by the test_time column
 * @method     ChildCareTestFindingsChemlaborSub findOneByCreateId(string $create_id) Return the first ChildCareTestFindingsChemlaborSub filtered by the create_id column
 * @method     ChildCareTestFindingsChemlaborSub findOneByCreateTime(string $create_time) Return the first ChildCareTestFindingsChemlaborSub filtered by the create_time column *

 * @method     ChildCareTestFindingsChemlaborSub requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestFindingsChemlaborSub by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOne(ConnectionInterface $con = null) Return the first ChildCareTestFindingsChemlaborSub matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestFindingsChemlaborSub requireOneBySubId(int $sub_id) Return the first ChildCareTestFindingsChemlaborSub filtered by the sub_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestFindingsChemlaborSub filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByJobId(string $job_id) Return the first ChildCareTestFindingsChemlaborSub filtered by the job_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestFindingsChemlaborSub filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByParamaterName(string $paramater_name) Return the first ChildCareTestFindingsChemlaborSub filtered by the paramater_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByParameterValue(string $parameter_value) Return the first ChildCareTestFindingsChemlaborSub filtered by the parameter_value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByIsUpdated(boolean $is_updated) Return the first ChildCareTestFindingsChemlaborSub filtered by the is_updated column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByOldParamValue(string $old_param_value) Return the first ChildCareTestFindingsChemlaborSub filtered by the old_param_value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByStatus(string $status) Return the first ChildCareTestFindingsChemlaborSub filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByHistory(string $history) Return the first ChildCareTestFindingsChemlaborSub filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByTestDate(string $test_date) Return the first ChildCareTestFindingsChemlaborSub filtered by the test_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByTestTime(string $test_time) Return the first ChildCareTestFindingsChemlaborSub filtered by the test_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByCreateId(string $create_id) Return the first ChildCareTestFindingsChemlaborSub filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlaborSub requireOneByCreateTime(string $create_time) Return the first ChildCareTestFindingsChemlaborSub filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestFindingsChemlaborSub objects based on current ModelCriteria
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findBySubId(int $sub_id) Return ChildCareTestFindingsChemlaborSub objects filtered by the sub_id column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestFindingsChemlaborSub objects filtered by the batch_nr column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByJobId(string $job_id) Return ChildCareTestFindingsChemlaborSub objects filtered by the job_id column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestFindingsChemlaborSub objects filtered by the encounter_nr column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByParamaterName(string $paramater_name) Return ChildCareTestFindingsChemlaborSub objects filtered by the paramater_name column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByParameterValue(string $parameter_value) Return ChildCareTestFindingsChemlaborSub objects filtered by the parameter_value column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByIsUpdated(boolean $is_updated) Return ChildCareTestFindingsChemlaborSub objects filtered by the is_updated column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByOldParamValue(string $old_param_value) Return ChildCareTestFindingsChemlaborSub objects filtered by the old_param_value column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByStatus(string $status) Return ChildCareTestFindingsChemlaborSub objects filtered by the status column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByHistory(string $history) Return ChildCareTestFindingsChemlaborSub objects filtered by the history column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByTestDate(string $test_date) Return ChildCareTestFindingsChemlaborSub objects filtered by the test_date column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByTestTime(string $test_time) Return ChildCareTestFindingsChemlaborSub objects filtered by the test_time column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestFindingsChemlaborSub objects filtered by the create_id column
 * @method     ChildCareTestFindingsChemlaborSub[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestFindingsChemlaborSub objects filtered by the create_time column
 * @method     ChildCareTestFindingsChemlaborSub[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestFindingsChemlaborSubQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestFindingsChemlaborSubQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestFindingsChemlaborSub', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestFindingsChemlaborSubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestFindingsChemlaborSubQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestFindingsChemlaborSubQuery) {
            return $criteria;
        }
        $query = new ChildCareTestFindingsChemlaborSubQuery();
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
     * @return ChildCareTestFindingsChemlaborSub|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestFindingsChemlaborSubTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestFindingsChemlaborSubTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTestFindingsChemlaborSub A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT sub_id, batch_nr, job_id, encounter_nr, paramater_name, parameter_value, is_updated, old_param_value, status, history, test_date, test_time, create_id, create_time FROM care_test_findings_chemlabor_sub WHERE sub_id = :p0';
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
            /** @var ChildCareTestFindingsChemlaborSub $obj */
            $obj = new ChildCareTestFindingsChemlaborSub();
            $obj->hydrate($row);
            CareTestFindingsChemlaborSubTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTestFindingsChemlaborSub|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the sub_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySubId(1234); // WHERE sub_id = 1234
     * $query->filterBySubId(array(12, 34)); // WHERE sub_id IN (12, 34)
     * $query->filterBySubId(array('min' => 12)); // WHERE sub_id > 12
     * </code>
     *
     * @param     mixed $subId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterBySubId($subId = null, $comparison = null)
    {
        if (is_array($subId)) {
            $useMinMax = false;
            if (isset($subId['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID, $subId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subId['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID, $subId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID, $subId, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByJobId($jobId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jobId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_JOB_ID, $jobId, $comparison);
    }

    /**
     * Filter the query on the encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterNr(1234); // WHERE encounter_nr = 1234
     * $query->filterByEncounterNr(array(12, 34)); // WHERE encounter_nr IN (12, 34)
     * $query->filterByEncounterNr(array('min' => 12)); // WHERE encounter_nr > 12
     * </code>
     *
     * @param     mixed $encounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the paramater_name column
     *
     * Example usage:
     * <code>
     * $query->filterByParamaterName('fooValue');   // WHERE paramater_name = 'fooValue'
     * $query->filterByParamaterName('%fooValue%', Criteria::LIKE); // WHERE paramater_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paramaterName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByParamaterName($paramaterName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paramaterName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_PARAMATER_NAME, $paramaterName, $comparison);
    }

    /**
     * Filter the query on the parameter_value column
     *
     * Example usage:
     * <code>
     * $query->filterByParameterValue('fooValue');   // WHERE parameter_value = 'fooValue'
     * $query->filterByParameterValue('%fooValue%', Criteria::LIKE); // WHERE parameter_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parameterValue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByParameterValue($parameterValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parameterValue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_PARAMETER_VALUE, $parameterValue, $comparison);
    }

    /**
     * Filter the query on the is_updated column
     *
     * Example usage:
     * <code>
     * $query->filterByIsUpdated(true); // WHERE is_updated = true
     * $query->filterByIsUpdated('yes'); // WHERE is_updated = true
     * </code>
     *
     * @param     boolean|string $isUpdated The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByIsUpdated($isUpdated = null, $comparison = null)
    {
        if (is_string($isUpdated)) {
            $isUpdated = in_array(strtolower($isUpdated), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_IS_UPDATED, $isUpdated, $comparison);
    }

    /**
     * Filter the query on the old_param_value column
     *
     * Example usage:
     * <code>
     * $query->filterByOldParamValue('fooValue');   // WHERE old_param_value = 'fooValue'
     * $query->filterByOldParamValue('%fooValue%', Criteria::LIKE); // WHERE old_param_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oldParamValue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByOldParamValue($oldParamValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oldParamValue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_OLD_PARAM_VALUE, $oldParamValue, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Filter the query on the test_date column
     *
     * Example usage:
     * <code>
     * $query->filterByTestDate('2011-03-14'); // WHERE test_date = '2011-03-14'
     * $query->filterByTestDate('now'); // WHERE test_date = '2011-03-14'
     * $query->filterByTestDate(array('max' => 'yesterday')); // WHERE test_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $testDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByTestDate($testDate = null, $comparison = null)
    {
        if (is_array($testDate)) {
            $useMinMax = false;
            if (isset($testDate['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_TEST_DATE, $testDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($testDate['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_TEST_DATE, $testDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_TEST_DATE, $testDate, $comparison);
    }

    /**
     * Filter the query on the test_time column
     *
     * Example usage:
     * <code>
     * $query->filterByTestTime('2011-03-14'); // WHERE test_time = '2011-03-14'
     * $query->filterByTestTime('now'); // WHERE test_time = '2011-03-14'
     * $query->filterByTestTime(array('max' => 'yesterday')); // WHERE test_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $testTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByTestTime($testTime = null, $comparison = null)
    {
        if (is_array($testTime)) {
            $useMinMax = false;
            if (isset($testTime['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_TEST_TIME, $testTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($testTime['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_TEST_TIME, $testTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_TEST_TIME, $testTime, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestFindingsChemlaborSub $careTestFindingsChemlaborSub Object to remove from the list of results
     *
     * @return $this|ChildCareTestFindingsChemlaborSubQuery The current query, for fluid interface
     */
    public function prune($careTestFindingsChemlaborSub = null)
    {
        if ($careTestFindingsChemlaborSub) {
            $this->addUsingAlias(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID, $careTestFindingsChemlaborSub->getSubId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_findings_chemlabor_sub table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsChemlaborSubTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestFindingsChemlaborSubTableMap::clearInstancePool();
            CareTestFindingsChemlaborSubTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsChemlaborSubTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestFindingsChemlaborSubTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestFindingsChemlaborSubTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestFindingsChemlaborSubTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestFindingsChemlaborSubQuery
