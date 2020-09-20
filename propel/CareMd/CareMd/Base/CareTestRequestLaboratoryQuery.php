<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestLaboratory as ChildCareTestRequestLaboratory;
use CareMd\CareMd\CareTestRequestLaboratoryQuery as ChildCareTestRequestLaboratoryQuery;
use CareMd\CareMd\Map\CareTestRequestLaboratoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_request_laboratory' table.
 *
 *
 *
 * @method     ChildCareTestRequestLaboratoryQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestRequestLaboratoryQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestRequestLaboratoryQuery orderByRoomNr($order = Criteria::ASC) Order by the room_nr column
 * @method     ChildCareTestRequestLaboratoryQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTestRequestLaboratoryQuery orderByDoctorSign($order = Criteria::ASC) Order by the doctor_sign column
 * @method     ChildCareTestRequestLaboratoryQuery orderByHighrisk($order = Criteria::ASC) Order by the highrisk column
 * @method     ChildCareTestRequestLaboratoryQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareTestRequestLaboratoryQuery orderBySendDate($order = Criteria::ASC) Order by the send_date column
 * @method     ChildCareTestRequestLaboratoryQuery orderBySampleTime($order = Criteria::ASC) Order by the sample_time column
 * @method     ChildCareTestRequestLaboratoryQuery orderBySampleWeekday($order = Criteria::ASC) Order by the sample_weekday column
 * @method     ChildCareTestRequestLaboratoryQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestRequestLaboratoryQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestRequestLaboratoryQuery orderByIsDisabled($order = Criteria::ASC) Order by the is_disabled column
 * @method     ChildCareTestRequestLaboratoryQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestRequestLaboratoryQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestRequestLaboratoryQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestRequestLaboratoryQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestRequestLaboratoryQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestRequestLaboratoryQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestRequestLaboratoryQuery groupByRoomNr() Group by the room_nr column
 * @method     ChildCareTestRequestLaboratoryQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTestRequestLaboratoryQuery groupByDoctorSign() Group by the doctor_sign column
 * @method     ChildCareTestRequestLaboratoryQuery groupByHighrisk() Group by the highrisk column
 * @method     ChildCareTestRequestLaboratoryQuery groupByNotes() Group by the notes column
 * @method     ChildCareTestRequestLaboratoryQuery groupBySendDate() Group by the send_date column
 * @method     ChildCareTestRequestLaboratoryQuery groupBySampleTime() Group by the sample_time column
 * @method     ChildCareTestRequestLaboratoryQuery groupBySampleWeekday() Group by the sample_weekday column
 * @method     ChildCareTestRequestLaboratoryQuery groupByStatus() Group by the status column
 * @method     ChildCareTestRequestLaboratoryQuery groupByHistory() Group by the history column
 * @method     ChildCareTestRequestLaboratoryQuery groupByIsDisabled() Group by the is_disabled column
 * @method     ChildCareTestRequestLaboratoryQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestRequestLaboratoryQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestRequestLaboratoryQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestRequestLaboratoryQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestRequestLaboratoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestRequestLaboratoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestRequestLaboratoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestRequestLaboratoryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestRequestLaboratoryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestRequestLaboratoryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestRequestLaboratory findOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestLaboratory matching the query
 * @method     ChildCareTestRequestLaboratory findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestRequestLaboratory matching the query, or a new ChildCareTestRequestLaboratory object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestRequestLaboratory findOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestLaboratory filtered by the batch_nr column
 * @method     ChildCareTestRequestLaboratory findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestLaboratory filtered by the encounter_nr column
 * @method     ChildCareTestRequestLaboratory findOneByRoomNr(int $room_nr) Return the first ChildCareTestRequestLaboratory filtered by the room_nr column
 * @method     ChildCareTestRequestLaboratory findOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestLaboratory filtered by the dept_nr column
 * @method     ChildCareTestRequestLaboratory findOneByDoctorSign(string $doctor_sign) Return the first ChildCareTestRequestLaboratory filtered by the doctor_sign column
 * @method     ChildCareTestRequestLaboratory findOneByHighrisk(int $highrisk) Return the first ChildCareTestRequestLaboratory filtered by the highrisk column
 * @method     ChildCareTestRequestLaboratory findOneByNotes(string $notes) Return the first ChildCareTestRequestLaboratory filtered by the notes column
 * @method     ChildCareTestRequestLaboratory findOneBySendDate(string $send_date) Return the first ChildCareTestRequestLaboratory filtered by the send_date column
 * @method     ChildCareTestRequestLaboratory findOneBySampleTime(string $sample_time) Return the first ChildCareTestRequestLaboratory filtered by the sample_time column
 * @method     ChildCareTestRequestLaboratory findOneBySampleWeekday(int $sample_weekday) Return the first ChildCareTestRequestLaboratory filtered by the sample_weekday column
 * @method     ChildCareTestRequestLaboratory findOneByStatus(string $status) Return the first ChildCareTestRequestLaboratory filtered by the status column
 * @method     ChildCareTestRequestLaboratory findOneByHistory(string $history) Return the first ChildCareTestRequestLaboratory filtered by the history column
 * @method     ChildCareTestRequestLaboratory findOneByIsDisabled(string $is_disabled) Return the first ChildCareTestRequestLaboratory filtered by the is_disabled column
 * @method     ChildCareTestRequestLaboratory findOneByModifyId(string $modify_id) Return the first ChildCareTestRequestLaboratory filtered by the modify_id column
 * @method     ChildCareTestRequestLaboratory findOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestLaboratory filtered by the modify_time column
 * @method     ChildCareTestRequestLaboratory findOneByCreateId(string $create_id) Return the first ChildCareTestRequestLaboratory filtered by the create_id column
 * @method     ChildCareTestRequestLaboratory findOneByCreateTime(string $create_time) Return the first ChildCareTestRequestLaboratory filtered by the create_time column *

 * @method     ChildCareTestRequestLaboratory requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestRequestLaboratory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestLaboratory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestLaboratory requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestLaboratory filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestLaboratory filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByRoomNr(int $room_nr) Return the first ChildCareTestRequestLaboratory filtered by the room_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestLaboratory filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByDoctorSign(string $doctor_sign) Return the first ChildCareTestRequestLaboratory filtered by the doctor_sign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByHighrisk(int $highrisk) Return the first ChildCareTestRequestLaboratory filtered by the highrisk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByNotes(string $notes) Return the first ChildCareTestRequestLaboratory filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneBySendDate(string $send_date) Return the first ChildCareTestRequestLaboratory filtered by the send_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneBySampleTime(string $sample_time) Return the first ChildCareTestRequestLaboratory filtered by the sample_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneBySampleWeekday(int $sample_weekday) Return the first ChildCareTestRequestLaboratory filtered by the sample_weekday column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByStatus(string $status) Return the first ChildCareTestRequestLaboratory filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByHistory(string $history) Return the first ChildCareTestRequestLaboratory filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByIsDisabled(string $is_disabled) Return the first ChildCareTestRequestLaboratory filtered by the is_disabled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByModifyId(string $modify_id) Return the first ChildCareTestRequestLaboratory filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestLaboratory filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByCreateId(string $create_id) Return the first ChildCareTestRequestLaboratory filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestLaboratory requireOneByCreateTime(string $create_time) Return the first ChildCareTestRequestLaboratory filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestRequestLaboratory objects based on current ModelCriteria
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestRequestLaboratory objects filtered by the batch_nr column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestRequestLaboratory objects filtered by the encounter_nr column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByRoomNr(int $room_nr) Return ChildCareTestRequestLaboratory objects filtered by the room_nr column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareTestRequestLaboratory objects filtered by the dept_nr column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByDoctorSign(string $doctor_sign) Return ChildCareTestRequestLaboratory objects filtered by the doctor_sign column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByHighrisk(int $highrisk) Return ChildCareTestRequestLaboratory objects filtered by the highrisk column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByNotes(string $notes) Return ChildCareTestRequestLaboratory objects filtered by the notes column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findBySendDate(string $send_date) Return ChildCareTestRequestLaboratory objects filtered by the send_date column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findBySampleTime(string $sample_time) Return ChildCareTestRequestLaboratory objects filtered by the sample_time column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findBySampleWeekday(int $sample_weekday) Return ChildCareTestRequestLaboratory objects filtered by the sample_weekday column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByStatus(string $status) Return ChildCareTestRequestLaboratory objects filtered by the status column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByHistory(string $history) Return ChildCareTestRequestLaboratory objects filtered by the history column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByIsDisabled(string $is_disabled) Return ChildCareTestRequestLaboratory objects filtered by the is_disabled column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestRequestLaboratory objects filtered by the modify_id column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestRequestLaboratory objects filtered by the modify_time column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestRequestLaboratory objects filtered by the create_id column
 * @method     ChildCareTestRequestLaboratory[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestRequestLaboratory objects filtered by the create_time column
 * @method     ChildCareTestRequestLaboratory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestRequestLaboratoryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestRequestLaboratoryQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestRequestLaboratory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestRequestLaboratoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestRequestLaboratoryQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestRequestLaboratoryQuery) {
            return $criteria;
        }
        $query = new ChildCareTestRequestLaboratoryQuery();
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
     * @return ChildCareTestRequestLaboratory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestLaboratoryTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestRequestLaboratoryTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTestRequestLaboratory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, encounter_nr, room_nr, dept_nr, doctor_sign, highrisk, notes, send_date, sample_time, sample_weekday, status, history, is_disabled, modify_id, modify_time, create_id, create_time FROM care_test_request_laboratory WHERE batch_nr = :p0';
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
            /** @var ChildCareTestRequestLaboratory $obj */
            $obj = new ChildCareTestRequestLaboratory();
            $obj->hydrate($row);
            CareTestRequestLaboratoryTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTestRequestLaboratory|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_BATCH_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_BATCH_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the room_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByRoomNr(1234); // WHERE room_nr = 1234
     * $query->filterByRoomNr(array(12, 34)); // WHERE room_nr IN (12, 34)
     * $query->filterByRoomNr(array('min' => 12)); // WHERE room_nr > 12
     * </code>
     *
     * @param     mixed $roomNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByRoomNr($roomNr = null, $comparison = null)
    {
        if (is_array($roomNr)) {
            $useMinMax = false;
            if (isset($roomNr['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_ROOM_NR, $roomNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roomNr['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_ROOM_NR, $roomNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_ROOM_NR, $roomNr, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the doctor_sign column
     *
     * Example usage:
     * <code>
     * $query->filterByDoctorSign('fooValue');   // WHERE doctor_sign = 'fooValue'
     * $query->filterByDoctorSign('%fooValue%', Criteria::LIKE); // WHERE doctor_sign LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doctorSign The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByDoctorSign($doctorSign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doctorSign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_DOCTOR_SIGN, $doctorSign, $comparison);
    }

    /**
     * Filter the query on the highrisk column
     *
     * Example usage:
     * <code>
     * $query->filterByHighrisk(1234); // WHERE highrisk = 1234
     * $query->filterByHighrisk(array(12, 34)); // WHERE highrisk IN (12, 34)
     * $query->filterByHighrisk(array('min' => 12)); // WHERE highrisk > 12
     * </code>
     *
     * @param     mixed $highrisk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByHighrisk($highrisk = null, $comparison = null)
    {
        if (is_array($highrisk)) {
            $useMinMax = false;
            if (isset($highrisk['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_HIGHRISK, $highrisk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($highrisk['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_HIGHRISK, $highrisk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_HIGHRISK, $highrisk, $comparison);
    }

    /**
     * Filter the query on the notes column
     *
     * Example usage:
     * <code>
     * $query->filterByNotes('fooValue');   // WHERE notes = 'fooValue'
     * $query->filterByNotes('%fooValue%', Criteria::LIKE); // WHERE notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_NOTES, $notes, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterBySendDate($sendDate = null, $comparison = null)
    {
        if (is_array($sendDate)) {
            $useMinMax = false;
            if (isset($sendDate['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_SEND_DATE, $sendDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendDate['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_SEND_DATE, $sendDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_SEND_DATE, $sendDate, $comparison);
    }

    /**
     * Filter the query on the sample_time column
     *
     * Example usage:
     * <code>
     * $query->filterBySampleTime('2011-03-14'); // WHERE sample_time = '2011-03-14'
     * $query->filterBySampleTime('now'); // WHERE sample_time = '2011-03-14'
     * $query->filterBySampleTime(array('max' => 'yesterday')); // WHERE sample_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $sampleTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterBySampleTime($sampleTime = null, $comparison = null)
    {
        if (is_array($sampleTime)) {
            $useMinMax = false;
            if (isset($sampleTime['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_SAMPLE_TIME, $sampleTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sampleTime['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_SAMPLE_TIME, $sampleTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_SAMPLE_TIME, $sampleTime, $comparison);
    }

    /**
     * Filter the query on the sample_weekday column
     *
     * Example usage:
     * <code>
     * $query->filterBySampleWeekday(1234); // WHERE sample_weekday = 1234
     * $query->filterBySampleWeekday(array(12, 34)); // WHERE sample_weekday IN (12, 34)
     * $query->filterBySampleWeekday(array('min' => 12)); // WHERE sample_weekday > 12
     * </code>
     *
     * @param     mixed $sampleWeekday The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterBySampleWeekday($sampleWeekday = null, $comparison = null)
    {
        if (is_array($sampleWeekday)) {
            $useMinMax = false;
            if (isset($sampleWeekday['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_SAMPLE_WEEKDAY, $sampleWeekday['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sampleWeekday['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_SAMPLE_WEEKDAY, $sampleWeekday['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_SAMPLE_WEEKDAY, $sampleWeekday, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Filter the query on the is_disabled column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDisabled('fooValue');   // WHERE is_disabled = 'fooValue'
     * $query->filterByIsDisabled('%fooValue%', Criteria::LIKE); // WHERE is_disabled LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isDisabled The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByIsDisabled($isDisabled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isDisabled)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_IS_DISABLED, $isDisabled, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestRequestLaboratory $careTestRequestLaboratory Object to remove from the list of results
     *
     * @return $this|ChildCareTestRequestLaboratoryQuery The current query, for fluid interface
     */
    public function prune($careTestRequestLaboratory = null)
    {
        if ($careTestRequestLaboratory) {
            $this->addUsingAlias(CareTestRequestLaboratoryTableMap::COL_BATCH_NR, $careTestRequestLaboratory->getBatchNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_request_laboratory table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestLaboratoryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestRequestLaboratoryTableMap::clearInstancePool();
            CareTestRequestLaboratoryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestLaboratoryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestRequestLaboratoryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestRequestLaboratoryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestRequestLaboratoryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestRequestLaboratoryQuery
