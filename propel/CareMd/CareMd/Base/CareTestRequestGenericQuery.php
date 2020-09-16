<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestGeneric as ChildCareTestRequestGeneric;
use CareMd\CareMd\CareTestRequestGenericQuery as ChildCareTestRequestGenericQuery;
use CareMd\CareMd\Map\CareTestRequestGenericTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_request_generic' table.
 *
 *
 *
 * @method     ChildCareTestRequestGenericQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestRequestGenericQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestRequestGenericQuery orderByTestingDept($order = Criteria::ASC) Order by the testing_dept column
 * @method     ChildCareTestRequestGenericQuery orderByVisit($order = Criteria::ASC) Order by the visit column
 * @method     ChildCareTestRequestGenericQuery orderByOrderPatient($order = Criteria::ASC) Order by the order_patient column
 * @method     ChildCareTestRequestGenericQuery orderByDiagnosisQuiry($order = Criteria::ASC) Order by the diagnosis_quiry column
 * @method     ChildCareTestRequestGenericQuery orderBySendDate($order = Criteria::ASC) Order by the send_date column
 * @method     ChildCareTestRequestGenericQuery orderBySendDoctor($order = Criteria::ASC) Order by the send_doctor column
 * @method     ChildCareTestRequestGenericQuery orderByResult($order = Criteria::ASC) Order by the result column
 * @method     ChildCareTestRequestGenericQuery orderByResultDate($order = Criteria::ASC) Order by the result_date column
 * @method     ChildCareTestRequestGenericQuery orderByResultDoctor($order = Criteria::ASC) Order by the result_doctor column
 * @method     ChildCareTestRequestGenericQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestRequestGenericQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestRequestGenericQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestRequestGenericQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestRequestGenericQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestRequestGenericQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestRequestGenericQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestRequestGenericQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestRequestGenericQuery groupByTestingDept() Group by the testing_dept column
 * @method     ChildCareTestRequestGenericQuery groupByVisit() Group by the visit column
 * @method     ChildCareTestRequestGenericQuery groupByOrderPatient() Group by the order_patient column
 * @method     ChildCareTestRequestGenericQuery groupByDiagnosisQuiry() Group by the diagnosis_quiry column
 * @method     ChildCareTestRequestGenericQuery groupBySendDate() Group by the send_date column
 * @method     ChildCareTestRequestGenericQuery groupBySendDoctor() Group by the send_doctor column
 * @method     ChildCareTestRequestGenericQuery groupByResult() Group by the result column
 * @method     ChildCareTestRequestGenericQuery groupByResultDate() Group by the result_date column
 * @method     ChildCareTestRequestGenericQuery groupByResultDoctor() Group by the result_doctor column
 * @method     ChildCareTestRequestGenericQuery groupByStatus() Group by the status column
 * @method     ChildCareTestRequestGenericQuery groupByHistory() Group by the history column
 * @method     ChildCareTestRequestGenericQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestRequestGenericQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestRequestGenericQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestRequestGenericQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestRequestGenericQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestRequestGenericQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestRequestGenericQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestRequestGenericQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestRequestGenericQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestRequestGenericQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestRequestGeneric findOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestGeneric matching the query
 * @method     ChildCareTestRequestGeneric findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestRequestGeneric matching the query, or a new ChildCareTestRequestGeneric object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestRequestGeneric findOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestGeneric filtered by the batch_nr column
 * @method     ChildCareTestRequestGeneric findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestGeneric filtered by the encounter_nr column
 * @method     ChildCareTestRequestGeneric findOneByTestingDept(string $testing_dept) Return the first ChildCareTestRequestGeneric filtered by the testing_dept column
 * @method     ChildCareTestRequestGeneric findOneByVisit(boolean $visit) Return the first ChildCareTestRequestGeneric filtered by the visit column
 * @method     ChildCareTestRequestGeneric findOneByOrderPatient(boolean $order_patient) Return the first ChildCareTestRequestGeneric filtered by the order_patient column
 * @method     ChildCareTestRequestGeneric findOneByDiagnosisQuiry(string $diagnosis_quiry) Return the first ChildCareTestRequestGeneric filtered by the diagnosis_quiry column
 * @method     ChildCareTestRequestGeneric findOneBySendDate(string $send_date) Return the first ChildCareTestRequestGeneric filtered by the send_date column
 * @method     ChildCareTestRequestGeneric findOneBySendDoctor(string $send_doctor) Return the first ChildCareTestRequestGeneric filtered by the send_doctor column
 * @method     ChildCareTestRequestGeneric findOneByResult(string $result) Return the first ChildCareTestRequestGeneric filtered by the result column
 * @method     ChildCareTestRequestGeneric findOneByResultDate(string $result_date) Return the first ChildCareTestRequestGeneric filtered by the result_date column
 * @method     ChildCareTestRequestGeneric findOneByResultDoctor(string $result_doctor) Return the first ChildCareTestRequestGeneric filtered by the result_doctor column
 * @method     ChildCareTestRequestGeneric findOneByStatus(string $status) Return the first ChildCareTestRequestGeneric filtered by the status column
 * @method     ChildCareTestRequestGeneric findOneByHistory(string $history) Return the first ChildCareTestRequestGeneric filtered by the history column
 * @method     ChildCareTestRequestGeneric findOneByModifyId(string $modify_id) Return the first ChildCareTestRequestGeneric filtered by the modify_id column
 * @method     ChildCareTestRequestGeneric findOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestGeneric filtered by the modify_time column
 * @method     ChildCareTestRequestGeneric findOneByCreateId(string $create_id) Return the first ChildCareTestRequestGeneric filtered by the create_id column
 * @method     ChildCareTestRequestGeneric findOneByCreateTime(string $create_time) Return the first ChildCareTestRequestGeneric filtered by the create_time column *

 * @method     ChildCareTestRequestGeneric requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestRequestGeneric by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestGeneric matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestGeneric requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestGeneric filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestGeneric filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByTestingDept(string $testing_dept) Return the first ChildCareTestRequestGeneric filtered by the testing_dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByVisit(boolean $visit) Return the first ChildCareTestRequestGeneric filtered by the visit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByOrderPatient(boolean $order_patient) Return the first ChildCareTestRequestGeneric filtered by the order_patient column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByDiagnosisQuiry(string $diagnosis_quiry) Return the first ChildCareTestRequestGeneric filtered by the diagnosis_quiry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneBySendDate(string $send_date) Return the first ChildCareTestRequestGeneric filtered by the send_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneBySendDoctor(string $send_doctor) Return the first ChildCareTestRequestGeneric filtered by the send_doctor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByResult(string $result) Return the first ChildCareTestRequestGeneric filtered by the result column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByResultDate(string $result_date) Return the first ChildCareTestRequestGeneric filtered by the result_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByResultDoctor(string $result_doctor) Return the first ChildCareTestRequestGeneric filtered by the result_doctor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByStatus(string $status) Return the first ChildCareTestRequestGeneric filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByHistory(string $history) Return the first ChildCareTestRequestGeneric filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByModifyId(string $modify_id) Return the first ChildCareTestRequestGeneric filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestGeneric filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByCreateId(string $create_id) Return the first ChildCareTestRequestGeneric filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestGeneric requireOneByCreateTime(string $create_time) Return the first ChildCareTestRequestGeneric filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestRequestGeneric objects based on current ModelCriteria
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestRequestGeneric objects filtered by the batch_nr column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestRequestGeneric objects filtered by the encounter_nr column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByTestingDept(string $testing_dept) Return ChildCareTestRequestGeneric objects filtered by the testing_dept column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByVisit(boolean $visit) Return ChildCareTestRequestGeneric objects filtered by the visit column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByOrderPatient(boolean $order_patient) Return ChildCareTestRequestGeneric objects filtered by the order_patient column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByDiagnosisQuiry(string $diagnosis_quiry) Return ChildCareTestRequestGeneric objects filtered by the diagnosis_quiry column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findBySendDate(string $send_date) Return ChildCareTestRequestGeneric objects filtered by the send_date column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findBySendDoctor(string $send_doctor) Return ChildCareTestRequestGeneric objects filtered by the send_doctor column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByResult(string $result) Return ChildCareTestRequestGeneric objects filtered by the result column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByResultDate(string $result_date) Return ChildCareTestRequestGeneric objects filtered by the result_date column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByResultDoctor(string $result_doctor) Return ChildCareTestRequestGeneric objects filtered by the result_doctor column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByStatus(string $status) Return ChildCareTestRequestGeneric objects filtered by the status column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByHistory(string $history) Return ChildCareTestRequestGeneric objects filtered by the history column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestRequestGeneric objects filtered by the modify_id column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestRequestGeneric objects filtered by the modify_time column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestRequestGeneric objects filtered by the create_id column
 * @method     ChildCareTestRequestGeneric[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestRequestGeneric objects filtered by the create_time column
 * @method     ChildCareTestRequestGeneric[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestRequestGenericQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestRequestGenericQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestRequestGeneric', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestRequestGenericQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestRequestGenericQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestRequestGenericQuery) {
            return $criteria;
        }
        $query = new ChildCareTestRequestGenericQuery();
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
     * @return ChildCareTestRequestGeneric|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestGenericTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestRequestGenericTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTestRequestGeneric A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, encounter_nr, testing_dept, visit, order_patient, diagnosis_quiry, send_date, send_doctor, result, result_date, result_doctor, status, history, modify_id, modify_time, create_id, create_time FROM care_test_request_generic WHERE batch_nr = :p0';
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
            /** @var ChildCareTestRequestGeneric $obj */
            $obj = new ChildCareTestRequestGeneric();
            $obj->hydrate($row);
            CareTestRequestGenericTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTestRequestGeneric|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_BATCH_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_BATCH_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the testing_dept column
     *
     * Example usage:
     * <code>
     * $query->filterByTestingDept('fooValue');   // WHERE testing_dept = 'fooValue'
     * $query->filterByTestingDept('%fooValue%', Criteria::LIKE); // WHERE testing_dept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $testingDept The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByTestingDept($testingDept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($testingDept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_TESTING_DEPT, $testingDept, $comparison);
    }

    /**
     * Filter the query on the visit column
     *
     * Example usage:
     * <code>
     * $query->filterByVisit(true); // WHERE visit = true
     * $query->filterByVisit('yes'); // WHERE visit = true
     * </code>
     *
     * @param     boolean|string $visit The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByVisit($visit = null, $comparison = null)
    {
        if (is_string($visit)) {
            $visit = in_array(strtolower($visit), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_VISIT, $visit, $comparison);
    }

    /**
     * Filter the query on the order_patient column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderPatient(true); // WHERE order_patient = true
     * $query->filterByOrderPatient('yes'); // WHERE order_patient = true
     * </code>
     *
     * @param     boolean|string $orderPatient The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByOrderPatient($orderPatient = null, $comparison = null)
    {
        if (is_string($orderPatient)) {
            $orderPatient = in_array(strtolower($orderPatient), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_ORDER_PATIENT, $orderPatient, $comparison);
    }

    /**
     * Filter the query on the diagnosis_quiry column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosisQuiry('fooValue');   // WHERE diagnosis_quiry = 'fooValue'
     * $query->filterByDiagnosisQuiry('%fooValue%', Criteria::LIKE); // WHERE diagnosis_quiry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosisQuiry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByDiagnosisQuiry($diagnosisQuiry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosisQuiry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_DIAGNOSIS_QUIRY, $diagnosisQuiry, $comparison);
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
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterBySendDate($sendDate = null, $comparison = null)
    {
        if (is_array($sendDate)) {
            $useMinMax = false;
            if (isset($sendDate['min'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_SEND_DATE, $sendDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendDate['max'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_SEND_DATE, $sendDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_SEND_DATE, $sendDate, $comparison);
    }

    /**
     * Filter the query on the send_doctor column
     *
     * Example usage:
     * <code>
     * $query->filterBySendDoctor('fooValue');   // WHERE send_doctor = 'fooValue'
     * $query->filterBySendDoctor('%fooValue%', Criteria::LIKE); // WHERE send_doctor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sendDoctor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterBySendDoctor($sendDoctor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sendDoctor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_SEND_DOCTOR, $sendDoctor, $comparison);
    }

    /**
     * Filter the query on the result column
     *
     * Example usage:
     * <code>
     * $query->filterByResult('fooValue');   // WHERE result = 'fooValue'
     * $query->filterByResult('%fooValue%', Criteria::LIKE); // WHERE result LIKE '%fooValue%'
     * </code>
     *
     * @param     string $result The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByResult($result = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($result)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_RESULT, $result, $comparison);
    }

    /**
     * Filter the query on the result_date column
     *
     * Example usage:
     * <code>
     * $query->filterByResultDate('2011-03-14'); // WHERE result_date = '2011-03-14'
     * $query->filterByResultDate('now'); // WHERE result_date = '2011-03-14'
     * $query->filterByResultDate(array('max' => 'yesterday')); // WHERE result_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $resultDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByResultDate($resultDate = null, $comparison = null)
    {
        if (is_array($resultDate)) {
            $useMinMax = false;
            if (isset($resultDate['min'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_RESULT_DATE, $resultDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($resultDate['max'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_RESULT_DATE, $resultDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_RESULT_DATE, $resultDate, $comparison);
    }

    /**
     * Filter the query on the result_doctor column
     *
     * Example usage:
     * <code>
     * $query->filterByResultDoctor('fooValue');   // WHERE result_doctor = 'fooValue'
     * $query->filterByResultDoctor('%fooValue%', Criteria::LIKE); // WHERE result_doctor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resultDoctor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByResultDoctor($resultDoctor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resultDoctor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_RESULT_DOCTOR, $resultDoctor, $comparison);
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
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestRequestGenericTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestGenericTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestRequestGeneric $careTestRequestGeneric Object to remove from the list of results
     *
     * @return $this|ChildCareTestRequestGenericQuery The current query, for fluid interface
     */
    public function prune($careTestRequestGeneric = null)
    {
        if ($careTestRequestGeneric) {
            $this->addUsingAlias(CareTestRequestGenericTableMap::COL_BATCH_NR, $careTestRequestGeneric->getBatchNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_request_generic table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestGenericTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestRequestGenericTableMap::clearInstancePool();
            CareTestRequestGenericTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestGenericTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestRequestGenericTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestRequestGenericTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestRequestGenericTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestRequestGenericQuery
