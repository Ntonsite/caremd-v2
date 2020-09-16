<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestFindingsBaclabor as ChildCareTestFindingsBaclabor;
use CareMd\CareMd\CareTestFindingsBaclaborQuery as ChildCareTestFindingsBaclaborQuery;
use CareMd\CareMd\Map\CareTestFindingsBaclaborTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_findings_baclabor' table.
 *
 *
 *
 * @method     ChildCareTestFindingsBaclaborQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestFindingsBaclaborQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestFindingsBaclaborQuery orderByRoomNr($order = Criteria::ASC) Order by the room_nr column
 * @method     ChildCareTestFindingsBaclaborQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTestFindingsBaclaborQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareTestFindingsBaclaborQuery orderByFindingsInit($order = Criteria::ASC) Order by the findings_init column
 * @method     ChildCareTestFindingsBaclaborQuery orderByFindingsCurrent($order = Criteria::ASC) Order by the findings_current column
 * @method     ChildCareTestFindingsBaclaborQuery orderByFindingsFinal($order = Criteria::ASC) Order by the findings_final column
 * @method     ChildCareTestFindingsBaclaborQuery orderByEntryNr($order = Criteria::ASC) Order by the entry_nr column
 * @method     ChildCareTestFindingsBaclaborQuery orderByRecDate($order = Criteria::ASC) Order by the rec_date column
 * @method     ChildCareTestFindingsBaclaborQuery orderByTypeGeneral($order = Criteria::ASC) Order by the type_general column
 * @method     ChildCareTestFindingsBaclaborQuery orderByResistAnaerob($order = Criteria::ASC) Order by the resist_anaerob column
 * @method     ChildCareTestFindingsBaclaborQuery orderByResistAerob($order = Criteria::ASC) Order by the resist_aerob column
 * @method     ChildCareTestFindingsBaclaborQuery orderByFindings($order = Criteria::ASC) Order by the findings column
 * @method     ChildCareTestFindingsBaclaborQuery orderByDoctorId($order = Criteria::ASC) Order by the doctor_id column
 * @method     ChildCareTestFindingsBaclaborQuery orderByFindingsDate($order = Criteria::ASC) Order by the findings_date column
 * @method     ChildCareTestFindingsBaclaborQuery orderByFindingsTime($order = Criteria::ASC) Order by the findings_time column
 * @method     ChildCareTestFindingsBaclaborQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestFindingsBaclaborQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestFindingsBaclaborQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestFindingsBaclaborQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestFindingsBaclaborQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestFindingsBaclaborQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestFindingsBaclaborQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestFindingsBaclaborQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestFindingsBaclaborQuery groupByRoomNr() Group by the room_nr column
 * @method     ChildCareTestFindingsBaclaborQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTestFindingsBaclaborQuery groupByNotes() Group by the notes column
 * @method     ChildCareTestFindingsBaclaborQuery groupByFindingsInit() Group by the findings_init column
 * @method     ChildCareTestFindingsBaclaborQuery groupByFindingsCurrent() Group by the findings_current column
 * @method     ChildCareTestFindingsBaclaborQuery groupByFindingsFinal() Group by the findings_final column
 * @method     ChildCareTestFindingsBaclaborQuery groupByEntryNr() Group by the entry_nr column
 * @method     ChildCareTestFindingsBaclaborQuery groupByRecDate() Group by the rec_date column
 * @method     ChildCareTestFindingsBaclaborQuery groupByTypeGeneral() Group by the type_general column
 * @method     ChildCareTestFindingsBaclaborQuery groupByResistAnaerob() Group by the resist_anaerob column
 * @method     ChildCareTestFindingsBaclaborQuery groupByResistAerob() Group by the resist_aerob column
 * @method     ChildCareTestFindingsBaclaborQuery groupByFindings() Group by the findings column
 * @method     ChildCareTestFindingsBaclaborQuery groupByDoctorId() Group by the doctor_id column
 * @method     ChildCareTestFindingsBaclaborQuery groupByFindingsDate() Group by the findings_date column
 * @method     ChildCareTestFindingsBaclaborQuery groupByFindingsTime() Group by the findings_time column
 * @method     ChildCareTestFindingsBaclaborQuery groupByStatus() Group by the status column
 * @method     ChildCareTestFindingsBaclaborQuery groupByHistory() Group by the history column
 * @method     ChildCareTestFindingsBaclaborQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestFindingsBaclaborQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestFindingsBaclaborQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestFindingsBaclaborQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestFindingsBaclaborQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestFindingsBaclaborQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestFindingsBaclaborQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestFindingsBaclaborQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestFindingsBaclaborQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestFindingsBaclaborQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestFindingsBaclabor findOne(ConnectionInterface $con = null) Return the first ChildCareTestFindingsBaclabor matching the query
 * @method     ChildCareTestFindingsBaclabor findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestFindingsBaclabor matching the query, or a new ChildCareTestFindingsBaclabor object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestFindingsBaclabor findOneByBatchNr(int $batch_nr) Return the first ChildCareTestFindingsBaclabor filtered by the batch_nr column
 * @method     ChildCareTestFindingsBaclabor findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestFindingsBaclabor filtered by the encounter_nr column
 * @method     ChildCareTestFindingsBaclabor findOneByRoomNr(string $room_nr) Return the first ChildCareTestFindingsBaclabor filtered by the room_nr column
 * @method     ChildCareTestFindingsBaclabor findOneByDeptNr(int $dept_nr) Return the first ChildCareTestFindingsBaclabor filtered by the dept_nr column
 * @method     ChildCareTestFindingsBaclabor findOneByNotes(string $notes) Return the first ChildCareTestFindingsBaclabor filtered by the notes column
 * @method     ChildCareTestFindingsBaclabor findOneByFindingsInit(boolean $findings_init) Return the first ChildCareTestFindingsBaclabor filtered by the findings_init column
 * @method     ChildCareTestFindingsBaclabor findOneByFindingsCurrent(boolean $findings_current) Return the first ChildCareTestFindingsBaclabor filtered by the findings_current column
 * @method     ChildCareTestFindingsBaclabor findOneByFindingsFinal(boolean $findings_final) Return the first ChildCareTestFindingsBaclabor filtered by the findings_final column
 * @method     ChildCareTestFindingsBaclabor findOneByEntryNr(string $entry_nr) Return the first ChildCareTestFindingsBaclabor filtered by the entry_nr column
 * @method     ChildCareTestFindingsBaclabor findOneByRecDate(string $rec_date) Return the first ChildCareTestFindingsBaclabor filtered by the rec_date column
 * @method     ChildCareTestFindingsBaclabor findOneByTypeGeneral(string $type_general) Return the first ChildCareTestFindingsBaclabor filtered by the type_general column
 * @method     ChildCareTestFindingsBaclabor findOneByResistAnaerob(string $resist_anaerob) Return the first ChildCareTestFindingsBaclabor filtered by the resist_anaerob column
 * @method     ChildCareTestFindingsBaclabor findOneByResistAerob(string $resist_aerob) Return the first ChildCareTestFindingsBaclabor filtered by the resist_aerob column
 * @method     ChildCareTestFindingsBaclabor findOneByFindings(string $findings) Return the first ChildCareTestFindingsBaclabor filtered by the findings column
 * @method     ChildCareTestFindingsBaclabor findOneByDoctorId(string $doctor_id) Return the first ChildCareTestFindingsBaclabor filtered by the doctor_id column
 * @method     ChildCareTestFindingsBaclabor findOneByFindingsDate(string $findings_date) Return the first ChildCareTestFindingsBaclabor filtered by the findings_date column
 * @method     ChildCareTestFindingsBaclabor findOneByFindingsTime(string $findings_time) Return the first ChildCareTestFindingsBaclabor filtered by the findings_time column
 * @method     ChildCareTestFindingsBaclabor findOneByStatus(string $status) Return the first ChildCareTestFindingsBaclabor filtered by the status column
 * @method     ChildCareTestFindingsBaclabor findOneByHistory(string $history) Return the first ChildCareTestFindingsBaclabor filtered by the history column
 * @method     ChildCareTestFindingsBaclabor findOneByModifyId(string $modify_id) Return the first ChildCareTestFindingsBaclabor filtered by the modify_id column
 * @method     ChildCareTestFindingsBaclabor findOneByModifyTime(string $modify_time) Return the first ChildCareTestFindingsBaclabor filtered by the modify_time column
 * @method     ChildCareTestFindingsBaclabor findOneByCreateId(string $create_id) Return the first ChildCareTestFindingsBaclabor filtered by the create_id column
 * @method     ChildCareTestFindingsBaclabor findOneByCreateTime(string $create_time) Return the first ChildCareTestFindingsBaclabor filtered by the create_time column *

 * @method     ChildCareTestFindingsBaclabor requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestFindingsBaclabor by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOne(ConnectionInterface $con = null) Return the first ChildCareTestFindingsBaclabor matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestFindingsBaclabor requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestFindingsBaclabor filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestFindingsBaclabor filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByRoomNr(string $room_nr) Return the first ChildCareTestFindingsBaclabor filtered by the room_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByDeptNr(int $dept_nr) Return the first ChildCareTestFindingsBaclabor filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByNotes(string $notes) Return the first ChildCareTestFindingsBaclabor filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByFindingsInit(boolean $findings_init) Return the first ChildCareTestFindingsBaclabor filtered by the findings_init column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByFindingsCurrent(boolean $findings_current) Return the first ChildCareTestFindingsBaclabor filtered by the findings_current column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByFindingsFinal(boolean $findings_final) Return the first ChildCareTestFindingsBaclabor filtered by the findings_final column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByEntryNr(string $entry_nr) Return the first ChildCareTestFindingsBaclabor filtered by the entry_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByRecDate(string $rec_date) Return the first ChildCareTestFindingsBaclabor filtered by the rec_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByTypeGeneral(string $type_general) Return the first ChildCareTestFindingsBaclabor filtered by the type_general column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByResistAnaerob(string $resist_anaerob) Return the first ChildCareTestFindingsBaclabor filtered by the resist_anaerob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByResistAerob(string $resist_aerob) Return the first ChildCareTestFindingsBaclabor filtered by the resist_aerob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByFindings(string $findings) Return the first ChildCareTestFindingsBaclabor filtered by the findings column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByDoctorId(string $doctor_id) Return the first ChildCareTestFindingsBaclabor filtered by the doctor_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByFindingsDate(string $findings_date) Return the first ChildCareTestFindingsBaclabor filtered by the findings_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByFindingsTime(string $findings_time) Return the first ChildCareTestFindingsBaclabor filtered by the findings_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByStatus(string $status) Return the first ChildCareTestFindingsBaclabor filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByHistory(string $history) Return the first ChildCareTestFindingsBaclabor filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByModifyId(string $modify_id) Return the first ChildCareTestFindingsBaclabor filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByModifyTime(string $modify_time) Return the first ChildCareTestFindingsBaclabor filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByCreateId(string $create_id) Return the first ChildCareTestFindingsBaclabor filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsBaclabor requireOneByCreateTime(string $create_time) Return the first ChildCareTestFindingsBaclabor filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestFindingsBaclabor objects based on current ModelCriteria
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestFindingsBaclabor objects filtered by the batch_nr column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestFindingsBaclabor objects filtered by the encounter_nr column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByRoomNr(string $room_nr) Return ChildCareTestFindingsBaclabor objects filtered by the room_nr column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareTestFindingsBaclabor objects filtered by the dept_nr column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByNotes(string $notes) Return ChildCareTestFindingsBaclabor objects filtered by the notes column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByFindingsInit(boolean $findings_init) Return ChildCareTestFindingsBaclabor objects filtered by the findings_init column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByFindingsCurrent(boolean $findings_current) Return ChildCareTestFindingsBaclabor objects filtered by the findings_current column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByFindingsFinal(boolean $findings_final) Return ChildCareTestFindingsBaclabor objects filtered by the findings_final column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByEntryNr(string $entry_nr) Return ChildCareTestFindingsBaclabor objects filtered by the entry_nr column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByRecDate(string $rec_date) Return ChildCareTestFindingsBaclabor objects filtered by the rec_date column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByTypeGeneral(string $type_general) Return ChildCareTestFindingsBaclabor objects filtered by the type_general column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByResistAnaerob(string $resist_anaerob) Return ChildCareTestFindingsBaclabor objects filtered by the resist_anaerob column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByResistAerob(string $resist_aerob) Return ChildCareTestFindingsBaclabor objects filtered by the resist_aerob column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByFindings(string $findings) Return ChildCareTestFindingsBaclabor objects filtered by the findings column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByDoctorId(string $doctor_id) Return ChildCareTestFindingsBaclabor objects filtered by the doctor_id column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByFindingsDate(string $findings_date) Return ChildCareTestFindingsBaclabor objects filtered by the findings_date column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByFindingsTime(string $findings_time) Return ChildCareTestFindingsBaclabor objects filtered by the findings_time column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByStatus(string $status) Return ChildCareTestFindingsBaclabor objects filtered by the status column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByHistory(string $history) Return ChildCareTestFindingsBaclabor objects filtered by the history column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestFindingsBaclabor objects filtered by the modify_id column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestFindingsBaclabor objects filtered by the modify_time column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestFindingsBaclabor objects filtered by the create_id column
 * @method     ChildCareTestFindingsBaclabor[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestFindingsBaclabor objects filtered by the create_time column
 * @method     ChildCareTestFindingsBaclabor[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestFindingsBaclaborQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestFindingsBaclaborQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestFindingsBaclabor', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestFindingsBaclaborQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestFindingsBaclaborQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestFindingsBaclaborQuery) {
            return $criteria;
        }
        $query = new ChildCareTestFindingsBaclaborQuery();
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
     * @return ChildCareTestFindingsBaclabor|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestFindingsBaclaborTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestFindingsBaclaborTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildCareTestFindingsBaclabor A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, encounter_nr, room_nr, dept_nr, notes, findings_init, findings_current, findings_final, entry_nr, rec_date, type_general, resist_anaerob, resist_aerob, findings, doctor_id, findings_date, findings_time, status, history, modify_id, modify_time, create_id, create_time FROM care_test_findings_baclabor WHERE batch_nr = :p0 AND encounter_nr = :p1 AND room_nr = :p2 AND dept_nr = :p3';
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
            /** @var ChildCareTestFindingsBaclabor $obj */
            $obj = new ChildCareTestFindingsBaclabor();
            $obj->hydrate($row);
            CareTestFindingsBaclaborTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildCareTestFindingsBaclabor|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_BATCH_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_ROOM_NR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_DEPT_NR, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTestFindingsBaclaborTableMap::COL_BATCH_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CareTestFindingsBaclaborTableMap::COL_ROOM_NR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CareTestFindingsBaclaborTableMap::COL_DEPT_NR, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByRoomNr($roomNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($roomNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_ROOM_NR, $roomNr, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_DEPT_NR, $deptNr, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the findings_init column
     *
     * Example usage:
     * <code>
     * $query->filterByFindingsInit(true); // WHERE findings_init = true
     * $query->filterByFindingsInit('yes'); // WHERE findings_init = true
     * </code>
     *
     * @param     boolean|string $findingsInit The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByFindingsInit($findingsInit = null, $comparison = null)
    {
        if (is_string($findingsInit)) {
            $findingsInit = in_array(strtolower($findingsInit), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_FINDINGS_INIT, $findingsInit, $comparison);
    }

    /**
     * Filter the query on the findings_current column
     *
     * Example usage:
     * <code>
     * $query->filterByFindingsCurrent(true); // WHERE findings_current = true
     * $query->filterByFindingsCurrent('yes'); // WHERE findings_current = true
     * </code>
     *
     * @param     boolean|string $findingsCurrent The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByFindingsCurrent($findingsCurrent = null, $comparison = null)
    {
        if (is_string($findingsCurrent)) {
            $findingsCurrent = in_array(strtolower($findingsCurrent), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_FINDINGS_CURRENT, $findingsCurrent, $comparison);
    }

    /**
     * Filter the query on the findings_final column
     *
     * Example usage:
     * <code>
     * $query->filterByFindingsFinal(true); // WHERE findings_final = true
     * $query->filterByFindingsFinal('yes'); // WHERE findings_final = true
     * </code>
     *
     * @param     boolean|string $findingsFinal The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByFindingsFinal($findingsFinal = null, $comparison = null)
    {
        if (is_string($findingsFinal)) {
            $findingsFinal = in_array(strtolower($findingsFinal), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_FINDINGS_FINAL, $findingsFinal, $comparison);
    }

    /**
     * Filter the query on the entry_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEntryNr('fooValue');   // WHERE entry_nr = 'fooValue'
     * $query->filterByEntryNr('%fooValue%', Criteria::LIKE); // WHERE entry_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entryNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByEntryNr($entryNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entryNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_ENTRY_NR, $entryNr, $comparison);
    }

    /**
     * Filter the query on the rec_date column
     *
     * Example usage:
     * <code>
     * $query->filterByRecDate('2011-03-14'); // WHERE rec_date = '2011-03-14'
     * $query->filterByRecDate('now'); // WHERE rec_date = '2011-03-14'
     * $query->filterByRecDate(array('max' => 'yesterday')); // WHERE rec_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $recDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByRecDate($recDate = null, $comparison = null)
    {
        if (is_array($recDate)) {
            $useMinMax = false;
            if (isset($recDate['min'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_REC_DATE, $recDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recDate['max'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_REC_DATE, $recDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_REC_DATE, $recDate, $comparison);
    }

    /**
     * Filter the query on the type_general column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeGeneral('fooValue');   // WHERE type_general = 'fooValue'
     * $query->filterByTypeGeneral('%fooValue%', Criteria::LIKE); // WHERE type_general LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeGeneral The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByTypeGeneral($typeGeneral = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeGeneral)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_TYPE_GENERAL, $typeGeneral, $comparison);
    }

    /**
     * Filter the query on the resist_anaerob column
     *
     * Example usage:
     * <code>
     * $query->filterByResistAnaerob('fooValue');   // WHERE resist_anaerob = 'fooValue'
     * $query->filterByResistAnaerob('%fooValue%', Criteria::LIKE); // WHERE resist_anaerob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resistAnaerob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByResistAnaerob($resistAnaerob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resistAnaerob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_RESIST_ANAEROB, $resistAnaerob, $comparison);
    }

    /**
     * Filter the query on the resist_aerob column
     *
     * Example usage:
     * <code>
     * $query->filterByResistAerob('fooValue');   // WHERE resist_aerob = 'fooValue'
     * $query->filterByResistAerob('%fooValue%', Criteria::LIKE); // WHERE resist_aerob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resistAerob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByResistAerob($resistAerob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resistAerob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_RESIST_AEROB, $resistAerob, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByFindings($findings = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($findings)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_FINDINGS, $findings, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByDoctorId($doctorId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doctorId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_DOCTOR_ID, $doctorId, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByFindingsDate($findingsDate = null, $comparison = null)
    {
        if (is_array($findingsDate)) {
            $useMinMax = false;
            if (isset($findingsDate['min'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_FINDINGS_DATE, $findingsDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($findingsDate['max'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_FINDINGS_DATE, $findingsDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_FINDINGS_DATE, $findingsDate, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByFindingsTime($findingsTime = null, $comparison = null)
    {
        if (is_array($findingsTime)) {
            $useMinMax = false;
            if (isset($findingsTime['min'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_FINDINGS_TIME, $findingsTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($findingsTime['max'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_FINDINGS_TIME, $findingsTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_FINDINGS_TIME, $findingsTime, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsBaclaborTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestFindingsBaclabor $careTestFindingsBaclabor Object to remove from the list of results
     *
     * @return $this|ChildCareTestFindingsBaclaborQuery The current query, for fluid interface
     */
    public function prune($careTestFindingsBaclabor = null)
    {
        if ($careTestFindingsBaclabor) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTestFindingsBaclaborTableMap::COL_BATCH_NR), $careTestFindingsBaclabor->getBatchNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR), $careTestFindingsBaclabor->getEncounterNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CareTestFindingsBaclaborTableMap::COL_ROOM_NR), $careTestFindingsBaclabor->getRoomNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CareTestFindingsBaclaborTableMap::COL_DEPT_NR), $careTestFindingsBaclabor->getDeptNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_findings_baclabor table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsBaclaborTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestFindingsBaclaborTableMap::clearInstancePool();
            CareTestFindingsBaclaborTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsBaclaborTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestFindingsBaclaborTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestFindingsBaclaborTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestFindingsBaclaborTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestFindingsBaclaborQuery
