<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestFindingsChemlab as ChildCareTestFindingsChemlab;
use CareMd\CareMd\CareTestFindingsChemlabQuery as ChildCareTestFindingsChemlabQuery;
use CareMd\CareMd\Map\CareTestFindingsChemlabTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_findings_chemlab' table.
 *
 *
 *
 * @method     ChildCareTestFindingsChemlabQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestFindingsChemlabQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestFindingsChemlabQuery orderByJobId($order = Criteria::ASC) Order by the job_id column
 * @method     ChildCareTestFindingsChemlabQuery orderByTestDate($order = Criteria::ASC) Order by the test_date column
 * @method     ChildCareTestFindingsChemlabQuery orderByTestTime($order = Criteria::ASC) Order by the test_time column
 * @method     ChildCareTestFindingsChemlabQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method     ChildCareTestFindingsChemlabQuery orderBySerialValue($order = Criteria::ASC) Order by the serial_value column
 * @method     ChildCareTestFindingsChemlabQuery orderByAddValue($order = Criteria::ASC) Order by the add_value column
 * @method     ChildCareTestFindingsChemlabQuery orderByValidator($order = Criteria::ASC) Order by the validator column
 * @method     ChildCareTestFindingsChemlabQuery orderByValidateDt($order = Criteria::ASC) Order by the validate_dt column
 * @method     ChildCareTestFindingsChemlabQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestFindingsChemlabQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestFindingsChemlabQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestFindingsChemlabQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestFindingsChemlabQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestFindingsChemlabQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestFindingsChemlabQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestFindingsChemlabQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestFindingsChemlabQuery groupByJobId() Group by the job_id column
 * @method     ChildCareTestFindingsChemlabQuery groupByTestDate() Group by the test_date column
 * @method     ChildCareTestFindingsChemlabQuery groupByTestTime() Group by the test_time column
 * @method     ChildCareTestFindingsChemlabQuery groupByGroupId() Group by the group_id column
 * @method     ChildCareTestFindingsChemlabQuery groupBySerialValue() Group by the serial_value column
 * @method     ChildCareTestFindingsChemlabQuery groupByAddValue() Group by the add_value column
 * @method     ChildCareTestFindingsChemlabQuery groupByValidator() Group by the validator column
 * @method     ChildCareTestFindingsChemlabQuery groupByValidateDt() Group by the validate_dt column
 * @method     ChildCareTestFindingsChemlabQuery groupByStatus() Group by the status column
 * @method     ChildCareTestFindingsChemlabQuery groupByHistory() Group by the history column
 * @method     ChildCareTestFindingsChemlabQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestFindingsChemlabQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestFindingsChemlabQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestFindingsChemlabQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestFindingsChemlabQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestFindingsChemlabQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestFindingsChemlabQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestFindingsChemlabQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestFindingsChemlabQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestFindingsChemlabQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestFindingsChemlab findOne(ConnectionInterface $con = null) Return the first ChildCareTestFindingsChemlab matching the query
 * @method     ChildCareTestFindingsChemlab findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestFindingsChemlab matching the query, or a new ChildCareTestFindingsChemlab object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestFindingsChemlab findOneByBatchNr(int $batch_nr) Return the first ChildCareTestFindingsChemlab filtered by the batch_nr column
 * @method     ChildCareTestFindingsChemlab findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestFindingsChemlab filtered by the encounter_nr column
 * @method     ChildCareTestFindingsChemlab findOneByJobId(string $job_id) Return the first ChildCareTestFindingsChemlab filtered by the job_id column
 * @method     ChildCareTestFindingsChemlab findOneByTestDate(string $test_date) Return the first ChildCareTestFindingsChemlab filtered by the test_date column
 * @method     ChildCareTestFindingsChemlab findOneByTestTime(string $test_time) Return the first ChildCareTestFindingsChemlab filtered by the test_time column
 * @method     ChildCareTestFindingsChemlab findOneByGroupId(string $group_id) Return the first ChildCareTestFindingsChemlab filtered by the group_id column
 * @method     ChildCareTestFindingsChemlab findOneBySerialValue(string $serial_value) Return the first ChildCareTestFindingsChemlab filtered by the serial_value column
 * @method     ChildCareTestFindingsChemlab findOneByAddValue(string $add_value) Return the first ChildCareTestFindingsChemlab filtered by the add_value column
 * @method     ChildCareTestFindingsChemlab findOneByValidator(string $validator) Return the first ChildCareTestFindingsChemlab filtered by the validator column
 * @method     ChildCareTestFindingsChemlab findOneByValidateDt(string $validate_dt) Return the first ChildCareTestFindingsChemlab filtered by the validate_dt column
 * @method     ChildCareTestFindingsChemlab findOneByStatus(string $status) Return the first ChildCareTestFindingsChemlab filtered by the status column
 * @method     ChildCareTestFindingsChemlab findOneByHistory(string $history) Return the first ChildCareTestFindingsChemlab filtered by the history column
 * @method     ChildCareTestFindingsChemlab findOneByModifyId(string $modify_id) Return the first ChildCareTestFindingsChemlab filtered by the modify_id column
 * @method     ChildCareTestFindingsChemlab findOneByModifyTime(string $modify_time) Return the first ChildCareTestFindingsChemlab filtered by the modify_time column
 * @method     ChildCareTestFindingsChemlab findOneByCreateId(string $create_id) Return the first ChildCareTestFindingsChemlab filtered by the create_id column
 * @method     ChildCareTestFindingsChemlab findOneByCreateTime(string $create_time) Return the first ChildCareTestFindingsChemlab filtered by the create_time column *

 * @method     ChildCareTestFindingsChemlab requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestFindingsChemlab by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOne(ConnectionInterface $con = null) Return the first ChildCareTestFindingsChemlab matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestFindingsChemlab requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestFindingsChemlab filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestFindingsChemlab filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByJobId(string $job_id) Return the first ChildCareTestFindingsChemlab filtered by the job_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByTestDate(string $test_date) Return the first ChildCareTestFindingsChemlab filtered by the test_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByTestTime(string $test_time) Return the first ChildCareTestFindingsChemlab filtered by the test_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByGroupId(string $group_id) Return the first ChildCareTestFindingsChemlab filtered by the group_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneBySerialValue(string $serial_value) Return the first ChildCareTestFindingsChemlab filtered by the serial_value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByAddValue(string $add_value) Return the first ChildCareTestFindingsChemlab filtered by the add_value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByValidator(string $validator) Return the first ChildCareTestFindingsChemlab filtered by the validator column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByValidateDt(string $validate_dt) Return the first ChildCareTestFindingsChemlab filtered by the validate_dt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByStatus(string $status) Return the first ChildCareTestFindingsChemlab filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByHistory(string $history) Return the first ChildCareTestFindingsChemlab filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByModifyId(string $modify_id) Return the first ChildCareTestFindingsChemlab filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByModifyTime(string $modify_time) Return the first ChildCareTestFindingsChemlab filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByCreateId(string $create_id) Return the first ChildCareTestFindingsChemlab filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsChemlab requireOneByCreateTime(string $create_time) Return the first ChildCareTestFindingsChemlab filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestFindingsChemlab objects based on current ModelCriteria
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestFindingsChemlab objects filtered by the batch_nr column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestFindingsChemlab objects filtered by the encounter_nr column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByJobId(string $job_id) Return ChildCareTestFindingsChemlab objects filtered by the job_id column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByTestDate(string $test_date) Return ChildCareTestFindingsChemlab objects filtered by the test_date column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByTestTime(string $test_time) Return ChildCareTestFindingsChemlab objects filtered by the test_time column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByGroupId(string $group_id) Return ChildCareTestFindingsChemlab objects filtered by the group_id column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findBySerialValue(string $serial_value) Return ChildCareTestFindingsChemlab objects filtered by the serial_value column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByAddValue(string $add_value) Return ChildCareTestFindingsChemlab objects filtered by the add_value column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByValidator(string $validator) Return ChildCareTestFindingsChemlab objects filtered by the validator column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByValidateDt(string $validate_dt) Return ChildCareTestFindingsChemlab objects filtered by the validate_dt column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByStatus(string $status) Return ChildCareTestFindingsChemlab objects filtered by the status column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByHistory(string $history) Return ChildCareTestFindingsChemlab objects filtered by the history column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestFindingsChemlab objects filtered by the modify_id column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestFindingsChemlab objects filtered by the modify_time column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestFindingsChemlab objects filtered by the create_id column
 * @method     ChildCareTestFindingsChemlab[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestFindingsChemlab objects filtered by the create_time column
 * @method     ChildCareTestFindingsChemlab[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestFindingsChemlabQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestFindingsChemlabQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestFindingsChemlab', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestFindingsChemlabQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestFindingsChemlabQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestFindingsChemlabQuery) {
            return $criteria;
        }
        $query = new ChildCareTestFindingsChemlabQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$batch_nr, $encounter_nr, $job_id] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTestFindingsChemlab|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestFindingsChemlabTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestFindingsChemlabTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildCareTestFindingsChemlab A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, encounter_nr, job_id, test_date, test_time, group_id, serial_value, add_value, validator, validate_dt, status, history, modify_id, modify_time, create_id, create_time FROM care_test_findings_chemlab WHERE batch_nr = :p0 AND encounter_nr = :p1 AND job_id = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTestFindingsChemlab $obj */
            $obj = new ChildCareTestFindingsChemlab();
            $obj->hydrate($row);
            CareTestFindingsChemlabTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildCareTestFindingsChemlab|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_BATCH_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_ENCOUNTER_NR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_JOB_ID, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTestFindingsChemlabTableMap::COL_BATCH_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTestFindingsChemlabTableMap::COL_ENCOUNTER_NR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CareTestFindingsChemlabTableMap::COL_JOB_ID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByJobId($jobId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jobId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_JOB_ID, $jobId, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByTestDate($testDate = null, $comparison = null)
    {
        if (is_array($testDate)) {
            $useMinMax = false;
            if (isset($testDate['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_TEST_DATE, $testDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($testDate['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_TEST_DATE, $testDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_TEST_DATE, $testDate, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByTestTime($testTime = null, $comparison = null)
    {
        if (is_array($testTime)) {
            $useMinMax = false;
            if (isset($testTime['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_TEST_TIME, $testTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($testTime['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_TEST_TIME, $testTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_TEST_TIME, $testTime, $comparison);
    }

    /**
     * Filter the query on the group_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupId('fooValue');   // WHERE group_id = 'fooValue'
     * $query->filterByGroupId('%fooValue%', Criteria::LIKE); // WHERE group_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groupId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByGroupId($groupId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_GROUP_ID, $groupId, $comparison);
    }

    /**
     * Filter the query on the serial_value column
     *
     * Example usage:
     * <code>
     * $query->filterBySerialValue('fooValue');   // WHERE serial_value = 'fooValue'
     * $query->filterBySerialValue('%fooValue%', Criteria::LIKE); // WHERE serial_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serialValue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterBySerialValue($serialValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serialValue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_SERIAL_VALUE, $serialValue, $comparison);
    }

    /**
     * Filter the query on the add_value column
     *
     * Example usage:
     * <code>
     * $query->filterByAddValue('fooValue');   // WHERE add_value = 'fooValue'
     * $query->filterByAddValue('%fooValue%', Criteria::LIKE); // WHERE add_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addValue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByAddValue($addValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addValue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_ADD_VALUE, $addValue, $comparison);
    }

    /**
     * Filter the query on the validator column
     *
     * Example usage:
     * <code>
     * $query->filterByValidator('fooValue');   // WHERE validator = 'fooValue'
     * $query->filterByValidator('%fooValue%', Criteria::LIKE); // WHERE validator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validator The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByValidator($validator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validator)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_VALIDATOR, $validator, $comparison);
    }

    /**
     * Filter the query on the validate_dt column
     *
     * Example usage:
     * <code>
     * $query->filterByValidateDt('2011-03-14'); // WHERE validate_dt = '2011-03-14'
     * $query->filterByValidateDt('now'); // WHERE validate_dt = '2011-03-14'
     * $query->filterByValidateDt(array('max' => 'yesterday')); // WHERE validate_dt > '2011-03-13'
     * </code>
     *
     * @param     mixed $validateDt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByValidateDt($validateDt = null, $comparison = null)
    {
        if (is_array($validateDt)) {
            $useMinMax = false;
            if (isset($validateDt['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_VALIDATE_DT, $validateDt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($validateDt['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_VALIDATE_DT, $validateDt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_VALIDATE_DT, $validateDt, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsChemlabTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestFindingsChemlab $careTestFindingsChemlab Object to remove from the list of results
     *
     * @return $this|ChildCareTestFindingsChemlabQuery The current query, for fluid interface
     */
    public function prune($careTestFindingsChemlab = null)
    {
        if ($careTestFindingsChemlab) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTestFindingsChemlabTableMap::COL_BATCH_NR), $careTestFindingsChemlab->getBatchNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTestFindingsChemlabTableMap::COL_ENCOUNTER_NR), $careTestFindingsChemlab->getEncounterNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CareTestFindingsChemlabTableMap::COL_JOB_ID), $careTestFindingsChemlab->getJobId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_findings_chemlab table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsChemlabTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestFindingsChemlabTableMap::clearInstancePool();
            CareTestFindingsChemlabTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsChemlabTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestFindingsChemlabTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestFindingsChemlabTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestFindingsChemlabTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestFindingsChemlabQuery
