<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestFindingsPatho as ChildCareTestFindingsPatho;
use CareMd\CareMd\CareTestFindingsPathoQuery as ChildCareTestFindingsPathoQuery;
use CareMd\CareMd\Map\CareTestFindingsPathoTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_findings_patho' table.
 *
 *
 *
 * @method     ChildCareTestFindingsPathoQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestFindingsPathoQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestFindingsPathoQuery orderByRoomNr($order = Criteria::ASC) Order by the room_nr column
 * @method     ChildCareTestFindingsPathoQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTestFindingsPathoQuery orderByMaterial($order = Criteria::ASC) Order by the material column
 * @method     ChildCareTestFindingsPathoQuery orderByMacro($order = Criteria::ASC) Order by the macro column
 * @method     ChildCareTestFindingsPathoQuery orderByMicro($order = Criteria::ASC) Order by the micro column
 * @method     ChildCareTestFindingsPathoQuery orderByFindings($order = Criteria::ASC) Order by the findings column
 * @method     ChildCareTestFindingsPathoQuery orderByDiagnosis($order = Criteria::ASC) Order by the diagnosis column
 * @method     ChildCareTestFindingsPathoQuery orderByDoctorId($order = Criteria::ASC) Order by the doctor_id column
 * @method     ChildCareTestFindingsPathoQuery orderByFindingsDate($order = Criteria::ASC) Order by the findings_date column
 * @method     ChildCareTestFindingsPathoQuery orderByFindingsTime($order = Criteria::ASC) Order by the findings_time column
 * @method     ChildCareTestFindingsPathoQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestFindingsPathoQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestFindingsPathoQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestFindingsPathoQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestFindingsPathoQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestFindingsPathoQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestFindingsPathoQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestFindingsPathoQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestFindingsPathoQuery groupByRoomNr() Group by the room_nr column
 * @method     ChildCareTestFindingsPathoQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTestFindingsPathoQuery groupByMaterial() Group by the material column
 * @method     ChildCareTestFindingsPathoQuery groupByMacro() Group by the macro column
 * @method     ChildCareTestFindingsPathoQuery groupByMicro() Group by the micro column
 * @method     ChildCareTestFindingsPathoQuery groupByFindings() Group by the findings column
 * @method     ChildCareTestFindingsPathoQuery groupByDiagnosis() Group by the diagnosis column
 * @method     ChildCareTestFindingsPathoQuery groupByDoctorId() Group by the doctor_id column
 * @method     ChildCareTestFindingsPathoQuery groupByFindingsDate() Group by the findings_date column
 * @method     ChildCareTestFindingsPathoQuery groupByFindingsTime() Group by the findings_time column
 * @method     ChildCareTestFindingsPathoQuery groupByStatus() Group by the status column
 * @method     ChildCareTestFindingsPathoQuery groupByHistory() Group by the history column
 * @method     ChildCareTestFindingsPathoQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestFindingsPathoQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestFindingsPathoQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestFindingsPathoQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestFindingsPathoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestFindingsPathoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestFindingsPathoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestFindingsPathoQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestFindingsPathoQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestFindingsPathoQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestFindingsPatho findOne(ConnectionInterface $con = null) Return the first ChildCareTestFindingsPatho matching the query
 * @method     ChildCareTestFindingsPatho findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestFindingsPatho matching the query, or a new ChildCareTestFindingsPatho object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestFindingsPatho findOneByBatchNr(int $batch_nr) Return the first ChildCareTestFindingsPatho filtered by the batch_nr column
 * @method     ChildCareTestFindingsPatho findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestFindingsPatho filtered by the encounter_nr column
 * @method     ChildCareTestFindingsPatho findOneByRoomNr(string $room_nr) Return the first ChildCareTestFindingsPatho filtered by the room_nr column
 * @method     ChildCareTestFindingsPatho findOneByDeptNr(int $dept_nr) Return the first ChildCareTestFindingsPatho filtered by the dept_nr column
 * @method     ChildCareTestFindingsPatho findOneByMaterial(string $material) Return the first ChildCareTestFindingsPatho filtered by the material column
 * @method     ChildCareTestFindingsPatho findOneByMacro(string $macro) Return the first ChildCareTestFindingsPatho filtered by the macro column
 * @method     ChildCareTestFindingsPatho findOneByMicro(string $micro) Return the first ChildCareTestFindingsPatho filtered by the micro column
 * @method     ChildCareTestFindingsPatho findOneByFindings(string $findings) Return the first ChildCareTestFindingsPatho filtered by the findings column
 * @method     ChildCareTestFindingsPatho findOneByDiagnosis(string $diagnosis) Return the first ChildCareTestFindingsPatho filtered by the diagnosis column
 * @method     ChildCareTestFindingsPatho findOneByDoctorId(string $doctor_id) Return the first ChildCareTestFindingsPatho filtered by the doctor_id column
 * @method     ChildCareTestFindingsPatho findOneByFindingsDate(string $findings_date) Return the first ChildCareTestFindingsPatho filtered by the findings_date column
 * @method     ChildCareTestFindingsPatho findOneByFindingsTime(string $findings_time) Return the first ChildCareTestFindingsPatho filtered by the findings_time column
 * @method     ChildCareTestFindingsPatho findOneByStatus(string $status) Return the first ChildCareTestFindingsPatho filtered by the status column
 * @method     ChildCareTestFindingsPatho findOneByHistory(string $history) Return the first ChildCareTestFindingsPatho filtered by the history column
 * @method     ChildCareTestFindingsPatho findOneByModifyId(string $modify_id) Return the first ChildCareTestFindingsPatho filtered by the modify_id column
 * @method     ChildCareTestFindingsPatho findOneByModifyTime(string $modify_time) Return the first ChildCareTestFindingsPatho filtered by the modify_time column
 * @method     ChildCareTestFindingsPatho findOneByCreateId(string $create_id) Return the first ChildCareTestFindingsPatho filtered by the create_id column
 * @method     ChildCareTestFindingsPatho findOneByCreateTime(string $create_time) Return the first ChildCareTestFindingsPatho filtered by the create_time column *

 * @method     ChildCareTestFindingsPatho requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestFindingsPatho by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOne(ConnectionInterface $con = null) Return the first ChildCareTestFindingsPatho matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestFindingsPatho requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestFindingsPatho filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestFindingsPatho filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByRoomNr(string $room_nr) Return the first ChildCareTestFindingsPatho filtered by the room_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByDeptNr(int $dept_nr) Return the first ChildCareTestFindingsPatho filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByMaterial(string $material) Return the first ChildCareTestFindingsPatho filtered by the material column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByMacro(string $macro) Return the first ChildCareTestFindingsPatho filtered by the macro column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByMicro(string $micro) Return the first ChildCareTestFindingsPatho filtered by the micro column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByFindings(string $findings) Return the first ChildCareTestFindingsPatho filtered by the findings column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByDiagnosis(string $diagnosis) Return the first ChildCareTestFindingsPatho filtered by the diagnosis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByDoctorId(string $doctor_id) Return the first ChildCareTestFindingsPatho filtered by the doctor_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByFindingsDate(string $findings_date) Return the first ChildCareTestFindingsPatho filtered by the findings_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByFindingsTime(string $findings_time) Return the first ChildCareTestFindingsPatho filtered by the findings_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByStatus(string $status) Return the first ChildCareTestFindingsPatho filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByHistory(string $history) Return the first ChildCareTestFindingsPatho filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByModifyId(string $modify_id) Return the first ChildCareTestFindingsPatho filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByModifyTime(string $modify_time) Return the first ChildCareTestFindingsPatho filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByCreateId(string $create_id) Return the first ChildCareTestFindingsPatho filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsPatho requireOneByCreateTime(string $create_time) Return the first ChildCareTestFindingsPatho filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestFindingsPatho objects based on current ModelCriteria
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestFindingsPatho objects filtered by the batch_nr column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestFindingsPatho objects filtered by the encounter_nr column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByRoomNr(string $room_nr) Return ChildCareTestFindingsPatho objects filtered by the room_nr column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareTestFindingsPatho objects filtered by the dept_nr column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByMaterial(string $material) Return ChildCareTestFindingsPatho objects filtered by the material column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByMacro(string $macro) Return ChildCareTestFindingsPatho objects filtered by the macro column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByMicro(string $micro) Return ChildCareTestFindingsPatho objects filtered by the micro column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByFindings(string $findings) Return ChildCareTestFindingsPatho objects filtered by the findings column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByDiagnosis(string $diagnosis) Return ChildCareTestFindingsPatho objects filtered by the diagnosis column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByDoctorId(string $doctor_id) Return ChildCareTestFindingsPatho objects filtered by the doctor_id column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByFindingsDate(string $findings_date) Return ChildCareTestFindingsPatho objects filtered by the findings_date column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByFindingsTime(string $findings_time) Return ChildCareTestFindingsPatho objects filtered by the findings_time column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByStatus(string $status) Return ChildCareTestFindingsPatho objects filtered by the status column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByHistory(string $history) Return ChildCareTestFindingsPatho objects filtered by the history column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestFindingsPatho objects filtered by the modify_id column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestFindingsPatho objects filtered by the modify_time column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestFindingsPatho objects filtered by the create_id column
 * @method     ChildCareTestFindingsPatho[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestFindingsPatho objects filtered by the create_time column
 * @method     ChildCareTestFindingsPatho[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestFindingsPathoQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestFindingsPathoQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestFindingsPatho', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestFindingsPathoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestFindingsPathoQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestFindingsPathoQuery) {
            return $criteria;
        }
        $query = new ChildCareTestFindingsPathoQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array[$batch_nr, $encounter_nr, $room_nr, $dept_nr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTestFindingsPatho|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestFindingsPathoTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestFindingsPathoTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildCareTestFindingsPatho A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, encounter_nr, room_nr, dept_nr, material, macro, micro, findings, diagnosis, doctor_id, findings_date, findings_time, status, history, modify_id, modify_time, create_id, create_time FROM care_test_findings_patho WHERE batch_nr = :p0 AND encounter_nr = :p1 AND room_nr = :p2 AND dept_nr = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTestFindingsPatho $obj */
            $obj = new ChildCareTestFindingsPatho();
            $obj->hydrate($row);
            CareTestFindingsPathoTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildCareTestFindingsPatho|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_BATCH_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_ENCOUNTER_NR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_ROOM_NR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_DEPT_NR, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTestFindingsPathoTableMap::COL_BATCH_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTestFindingsPathoTableMap::COL_ENCOUNTER_NR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CareTestFindingsPathoTableMap::COL_ROOM_NR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CareTestFindingsPathoTableMap::COL_DEPT_NR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
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
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the room_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByRoomNr('fooValue');   // WHERE room_nr = 'fooValue'
     * $query->filterByRoomNr('%fooValue%', Criteria::LIKE); // WHERE room_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $roomNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByRoomNr($roomNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($roomNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_ROOM_NR, $roomNr, $comparison);
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
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the material column
     *
     * Example usage:
     * <code>
     * $query->filterByMaterial('fooValue');   // WHERE material = 'fooValue'
     * $query->filterByMaterial('%fooValue%', Criteria::LIKE); // WHERE material LIKE '%fooValue%'
     * </code>
     *
     * @param     string $material The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByMaterial($material = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($material)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_MATERIAL, $material, $comparison);
    }

    /**
     * Filter the query on the macro column
     *
     * Example usage:
     * <code>
     * $query->filterByMacro('fooValue');   // WHERE macro = 'fooValue'
     * $query->filterByMacro('%fooValue%', Criteria::LIKE); // WHERE macro LIKE '%fooValue%'
     * </code>
     *
     * @param     string $macro The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByMacro($macro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($macro)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_MACRO, $macro, $comparison);
    }

    /**
     * Filter the query on the micro column
     *
     * Example usage:
     * <code>
     * $query->filterByMicro('fooValue');   // WHERE micro = 'fooValue'
     * $query->filterByMicro('%fooValue%', Criteria::LIKE); // WHERE micro LIKE '%fooValue%'
     * </code>
     *
     * @param     string $micro The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByMicro($micro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($micro)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_MICRO, $micro, $comparison);
    }

    /**
     * Filter the query on the findings column
     *
     * Example usage:
     * <code>
     * $query->filterByFindings('fooValue');   // WHERE findings = 'fooValue'
     * $query->filterByFindings('%fooValue%', Criteria::LIKE); // WHERE findings LIKE '%fooValue%'
     * </code>
     *
     * @param     string $findings The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByFindings($findings = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($findings)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_FINDINGS, $findings, $comparison);
    }

    /**
     * Filter the query on the diagnosis column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosis('fooValue');   // WHERE diagnosis = 'fooValue'
     * $query->filterByDiagnosis('%fooValue%', Criteria::LIKE); // WHERE diagnosis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosis The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByDiagnosis($diagnosis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_DIAGNOSIS, $diagnosis, $comparison);
    }

    /**
     * Filter the query on the doctor_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDoctorId('fooValue');   // WHERE doctor_id = 'fooValue'
     * $query->filterByDoctorId('%fooValue%', Criteria::LIKE); // WHERE doctor_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doctorId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByDoctorId($doctorId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doctorId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_DOCTOR_ID, $doctorId, $comparison);
    }

    /**
     * Filter the query on the findings_date column
     *
     * Example usage:
     * <code>
     * $query->filterByFindingsDate('2011-03-14'); // WHERE findings_date = '2011-03-14'
     * $query->filterByFindingsDate('now'); // WHERE findings_date = '2011-03-14'
     * $query->filterByFindingsDate(array('max' => 'yesterday')); // WHERE findings_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $findingsDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByFindingsDate($findingsDate = null, $comparison = null)
    {
        if (is_array($findingsDate)) {
            $useMinMax = false;
            if (isset($findingsDate['min'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_FINDINGS_DATE, $findingsDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($findingsDate['max'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_FINDINGS_DATE, $findingsDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_FINDINGS_DATE, $findingsDate, $comparison);
    }

    /**
     * Filter the query on the findings_time column
     *
     * Example usage:
     * <code>
     * $query->filterByFindingsTime('2011-03-14'); // WHERE findings_time = '2011-03-14'
     * $query->filterByFindingsTime('now'); // WHERE findings_time = '2011-03-14'
     * $query->filterByFindingsTime(array('max' => 'yesterday')); // WHERE findings_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $findingsTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByFindingsTime($findingsTime = null, $comparison = null)
    {
        if (is_array($findingsTime)) {
            $useMinMax = false;
            if (isset($findingsTime['min'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_FINDINGS_TIME, $findingsTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($findingsTime['max'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_FINDINGS_TIME, $findingsTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_FINDINGS_TIME, $findingsTime, $comparison);
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
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsPathoTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestFindingsPatho $careTestFindingsPatho Object to remove from the list of results
     *
     * @return $this|ChildCareTestFindingsPathoQuery The current query, for fluid interface
     */
    public function prune($careTestFindingsPatho = null)
    {
        if ($careTestFindingsPatho) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTestFindingsPathoTableMap::COL_BATCH_NR), $careTestFindingsPatho->getBatchNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTestFindingsPathoTableMap::COL_ENCOUNTER_NR), $careTestFindingsPatho->getEncounterNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CareTestFindingsPathoTableMap::COL_ROOM_NR), $careTestFindingsPatho->getRoomNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CareTestFindingsPathoTableMap::COL_DEPT_NR), $careTestFindingsPatho->getDeptNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_findings_patho table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsPathoTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestFindingsPathoTableMap::clearInstancePool();
            CareTestFindingsPathoTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsPathoTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestFindingsPathoTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestFindingsPathoTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestFindingsPathoTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestFindingsPathoQuery
