<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestChemlabor as ChildCareTestRequestChemlabor;
use CareMd\CareMd\CareTestRequestChemlaborQuery as ChildCareTestRequestChemlaborQuery;
use CareMd\CareMd\Map\CareTestRequestChemlaborTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_request_chemlabor' table.
 *
 *
 *
 * @method     ChildCareTestRequestChemlaborQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestRequestChemlaborQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestRequestChemlaborQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ChildCareTestRequestChemlaborQuery orderByRoomNr($order = Criteria::ASC) Order by the room_nr column
 * @method     ChildCareTestRequestChemlaborQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTestRequestChemlaborQuery orderByParameters($order = Criteria::ASC) Order by the parameters column
 * @method     ChildCareTestRequestChemlaborQuery orderByDoctorSign($order = Criteria::ASC) Order by the doctor_sign column
 * @method     ChildCareTestRequestChemlaborQuery orderByHighrisk($order = Criteria::ASC) Order by the highrisk column
 * @method     ChildCareTestRequestChemlaborQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareTestRequestChemlaborQuery orderBySendDate($order = Criteria::ASC) Order by the send_date column
 * @method     ChildCareTestRequestChemlaborQuery orderBySpecimenCollected($order = Criteria::ASC) Order by the specimen_collected column
 * @method     ChildCareTestRequestChemlaborQuery orderBySpecimenDate($order = Criteria::ASC) Order by the specimen_date column
 * @method     ChildCareTestRequestChemlaborQuery orderBySpecimenType($order = Criteria::ASC) Order by the specimen_type column
 * @method     ChildCareTestRequestChemlaborQuery orderBySpecimenVolume($order = Criteria::ASC) Order by the specimen_volume column
 * @method     ChildCareTestRequestChemlaborQuery orderBySpecimenUnits($order = Criteria::ASC) Order by the specimen_units column
 * @method     ChildCareTestRequestChemlaborQuery orderBySpecimenTakenBy($order = Criteria::ASC) Order by the specimen_taken_by column
 * @method     ChildCareTestRequestChemlaborQuery orderBySpecimenContainer($order = Criteria::ASC) Order by the specimen_container column
 * @method     ChildCareTestRequestChemlaborQuery orderBySampleTime($order = Criteria::ASC) Order by the sample_time column
 * @method     ChildCareTestRequestChemlaborQuery orderBySampleWeekday($order = Criteria::ASC) Order by the sample_weekday column
 * @method     ChildCareTestRequestChemlaborQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestRequestChemlaborQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestRequestChemlaborQuery orderByBillNumber($order = Criteria::ASC) Order by the bill_number column
 * @method     ChildCareTestRequestChemlaborQuery orderByBillStatus($order = Criteria::ASC) Order by the bill_status column
 * @method     ChildCareTestRequestChemlaborQuery orderByIsDisabled($order = Criteria::ASC) Order by the is_disabled column
 * @method     ChildCareTestRequestChemlaborQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestRequestChemlaborQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestRequestChemlaborQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestRequestChemlaborQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareTestRequestChemlaborQuery orderByPriority($order = Criteria::ASC) Order by the priority column
 *
 * @method     ChildCareTestRequestChemlaborQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestRequestChemlaborQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestRequestChemlaborQuery groupByItemId() Group by the item_id column
 * @method     ChildCareTestRequestChemlaborQuery groupByRoomNr() Group by the room_nr column
 * @method     ChildCareTestRequestChemlaborQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTestRequestChemlaborQuery groupByParameters() Group by the parameters column
 * @method     ChildCareTestRequestChemlaborQuery groupByDoctorSign() Group by the doctor_sign column
 * @method     ChildCareTestRequestChemlaborQuery groupByHighrisk() Group by the highrisk column
 * @method     ChildCareTestRequestChemlaborQuery groupByNotes() Group by the notes column
 * @method     ChildCareTestRequestChemlaborQuery groupBySendDate() Group by the send_date column
 * @method     ChildCareTestRequestChemlaborQuery groupBySpecimenCollected() Group by the specimen_collected column
 * @method     ChildCareTestRequestChemlaborQuery groupBySpecimenDate() Group by the specimen_date column
 * @method     ChildCareTestRequestChemlaborQuery groupBySpecimenType() Group by the specimen_type column
 * @method     ChildCareTestRequestChemlaborQuery groupBySpecimenVolume() Group by the specimen_volume column
 * @method     ChildCareTestRequestChemlaborQuery groupBySpecimenUnits() Group by the specimen_units column
 * @method     ChildCareTestRequestChemlaborQuery groupBySpecimenTakenBy() Group by the specimen_taken_by column
 * @method     ChildCareTestRequestChemlaborQuery groupBySpecimenContainer() Group by the specimen_container column
 * @method     ChildCareTestRequestChemlaborQuery groupBySampleTime() Group by the sample_time column
 * @method     ChildCareTestRequestChemlaborQuery groupBySampleWeekday() Group by the sample_weekday column
 * @method     ChildCareTestRequestChemlaborQuery groupByStatus() Group by the status column
 * @method     ChildCareTestRequestChemlaborQuery groupByHistory() Group by the history column
 * @method     ChildCareTestRequestChemlaborQuery groupByBillNumber() Group by the bill_number column
 * @method     ChildCareTestRequestChemlaborQuery groupByBillStatus() Group by the bill_status column
 * @method     ChildCareTestRequestChemlaborQuery groupByIsDisabled() Group by the is_disabled column
 * @method     ChildCareTestRequestChemlaborQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestRequestChemlaborQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestRequestChemlaborQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestRequestChemlaborQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareTestRequestChemlaborQuery groupByPriority() Group by the priority column
 *
 * @method     ChildCareTestRequestChemlaborQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestRequestChemlaborQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestRequestChemlaborQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestRequestChemlaborQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestRequestChemlaborQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestRequestChemlaborQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestRequestChemlabor findOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestChemlabor matching the query
 * @method     ChildCareTestRequestChemlabor findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestRequestChemlabor matching the query, or a new ChildCareTestRequestChemlabor object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestRequestChemlabor findOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestChemlabor filtered by the batch_nr column
 * @method     ChildCareTestRequestChemlabor findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestChemlabor filtered by the encounter_nr column
 * @method     ChildCareTestRequestChemlabor findOneByItemId(string $item_id) Return the first ChildCareTestRequestChemlabor filtered by the item_id column
 * @method     ChildCareTestRequestChemlabor findOneByRoomNr(string $room_nr) Return the first ChildCareTestRequestChemlabor filtered by the room_nr column
 * @method     ChildCareTestRequestChemlabor findOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestChemlabor filtered by the dept_nr column
 * @method     ChildCareTestRequestChemlabor findOneByParameters(string $parameters) Return the first ChildCareTestRequestChemlabor filtered by the parameters column
 * @method     ChildCareTestRequestChemlabor findOneByDoctorSign(string $doctor_sign) Return the first ChildCareTestRequestChemlabor filtered by the doctor_sign column
 * @method     ChildCareTestRequestChemlabor findOneByHighrisk(int $highrisk) Return the first ChildCareTestRequestChemlabor filtered by the highrisk column
 * @method     ChildCareTestRequestChemlabor findOneByNotes(string $notes) Return the first ChildCareTestRequestChemlabor filtered by the notes column
 * @method     ChildCareTestRequestChemlabor findOneBySendDate(string $send_date) Return the first ChildCareTestRequestChemlabor filtered by the send_date column
 * @method     ChildCareTestRequestChemlabor findOneBySpecimenCollected(boolean $specimen_collected) Return the first ChildCareTestRequestChemlabor filtered by the specimen_collected column
 * @method     ChildCareTestRequestChemlabor findOneBySpecimenDate(string $specimen_date) Return the first ChildCareTestRequestChemlabor filtered by the specimen_date column
 * @method     ChildCareTestRequestChemlabor findOneBySpecimenType(string $specimen_type) Return the first ChildCareTestRequestChemlabor filtered by the specimen_type column
 * @method     ChildCareTestRequestChemlabor findOneBySpecimenVolume(string $specimen_volume) Return the first ChildCareTestRequestChemlabor filtered by the specimen_volume column
 * @method     ChildCareTestRequestChemlabor findOneBySpecimenUnits(string $specimen_units) Return the first ChildCareTestRequestChemlabor filtered by the specimen_units column
 * @method     ChildCareTestRequestChemlabor findOneBySpecimenTakenBy(string $specimen_taken_by) Return the first ChildCareTestRequestChemlabor filtered by the specimen_taken_by column
 * @method     ChildCareTestRequestChemlabor findOneBySpecimenContainer(string $specimen_container) Return the first ChildCareTestRequestChemlabor filtered by the specimen_container column
 * @method     ChildCareTestRequestChemlabor findOneBySampleTime(string $sample_time) Return the first ChildCareTestRequestChemlabor filtered by the sample_time column
 * @method     ChildCareTestRequestChemlabor findOneBySampleWeekday(int $sample_weekday) Return the first ChildCareTestRequestChemlabor filtered by the sample_weekday column
 * @method     ChildCareTestRequestChemlabor findOneByStatus(string $status) Return the first ChildCareTestRequestChemlabor filtered by the status column
 * @method     ChildCareTestRequestChemlabor findOneByHistory(string $history) Return the first ChildCareTestRequestChemlabor filtered by the history column
 * @method     ChildCareTestRequestChemlabor findOneByBillNumber(string $bill_number) Return the first ChildCareTestRequestChemlabor filtered by the bill_number column
 * @method     ChildCareTestRequestChemlabor findOneByBillStatus(string $bill_status) Return the first ChildCareTestRequestChemlabor filtered by the bill_status column
 * @method     ChildCareTestRequestChemlabor findOneByIsDisabled(string $is_disabled) Return the first ChildCareTestRequestChemlabor filtered by the is_disabled column
 * @method     ChildCareTestRequestChemlabor findOneByModifyId(string $modify_id) Return the first ChildCareTestRequestChemlabor filtered by the modify_id column
 * @method     ChildCareTestRequestChemlabor findOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestChemlabor filtered by the modify_time column
 * @method     ChildCareTestRequestChemlabor findOneByCreateId(string $create_id) Return the first ChildCareTestRequestChemlabor filtered by the create_id column
 * @method     ChildCareTestRequestChemlabor findOneByCreateTime(string $create_time) Return the first ChildCareTestRequestChemlabor filtered by the create_time column
 * @method     ChildCareTestRequestChemlabor findOneByPriority(boolean $priority) Return the first ChildCareTestRequestChemlabor filtered by the priority column *

 * @method     ChildCareTestRequestChemlabor requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestRequestChemlabor by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestChemlabor matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestChemlabor requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestChemlabor filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestChemlabor filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByItemId(string $item_id) Return the first ChildCareTestRequestChemlabor filtered by the item_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByRoomNr(string $room_nr) Return the first ChildCareTestRequestChemlabor filtered by the room_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestChemlabor filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByParameters(string $parameters) Return the first ChildCareTestRequestChemlabor filtered by the parameters column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByDoctorSign(string $doctor_sign) Return the first ChildCareTestRequestChemlabor filtered by the doctor_sign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByHighrisk(int $highrisk) Return the first ChildCareTestRequestChemlabor filtered by the highrisk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByNotes(string $notes) Return the first ChildCareTestRequestChemlabor filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneBySendDate(string $send_date) Return the first ChildCareTestRequestChemlabor filtered by the send_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneBySpecimenCollected(boolean $specimen_collected) Return the first ChildCareTestRequestChemlabor filtered by the specimen_collected column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneBySpecimenDate(string $specimen_date) Return the first ChildCareTestRequestChemlabor filtered by the specimen_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneBySpecimenType(string $specimen_type) Return the first ChildCareTestRequestChemlabor filtered by the specimen_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneBySpecimenVolume(string $specimen_volume) Return the first ChildCareTestRequestChemlabor filtered by the specimen_volume column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneBySpecimenUnits(string $specimen_units) Return the first ChildCareTestRequestChemlabor filtered by the specimen_units column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneBySpecimenTakenBy(string $specimen_taken_by) Return the first ChildCareTestRequestChemlabor filtered by the specimen_taken_by column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneBySpecimenContainer(string $specimen_container) Return the first ChildCareTestRequestChemlabor filtered by the specimen_container column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneBySampleTime(string $sample_time) Return the first ChildCareTestRequestChemlabor filtered by the sample_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneBySampleWeekday(int $sample_weekday) Return the first ChildCareTestRequestChemlabor filtered by the sample_weekday column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByStatus(string $status) Return the first ChildCareTestRequestChemlabor filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByHistory(string $history) Return the first ChildCareTestRequestChemlabor filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByBillNumber(string $bill_number) Return the first ChildCareTestRequestChemlabor filtered by the bill_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByBillStatus(string $bill_status) Return the first ChildCareTestRequestChemlabor filtered by the bill_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByIsDisabled(string $is_disabled) Return the first ChildCareTestRequestChemlabor filtered by the is_disabled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByModifyId(string $modify_id) Return the first ChildCareTestRequestChemlabor filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestChemlabor filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByCreateId(string $create_id) Return the first ChildCareTestRequestChemlabor filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByCreateTime(string $create_time) Return the first ChildCareTestRequestChemlabor filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestChemlabor requireOneByPriority(boolean $priority) Return the first ChildCareTestRequestChemlabor filtered by the priority column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestRequestChemlabor objects based on current ModelCriteria
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestRequestChemlabor objects filtered by the batch_nr column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestRequestChemlabor objects filtered by the encounter_nr column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByItemId(string $item_id) Return ChildCareTestRequestChemlabor objects filtered by the item_id column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByRoomNr(string $room_nr) Return ChildCareTestRequestChemlabor objects filtered by the room_nr column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareTestRequestChemlabor objects filtered by the dept_nr column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByParameters(string $parameters) Return ChildCareTestRequestChemlabor objects filtered by the parameters column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByDoctorSign(string $doctor_sign) Return ChildCareTestRequestChemlabor objects filtered by the doctor_sign column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByHighrisk(int $highrisk) Return ChildCareTestRequestChemlabor objects filtered by the highrisk column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByNotes(string $notes) Return ChildCareTestRequestChemlabor objects filtered by the notes column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findBySendDate(string $send_date) Return ChildCareTestRequestChemlabor objects filtered by the send_date column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findBySpecimenCollected(boolean $specimen_collected) Return ChildCareTestRequestChemlabor objects filtered by the specimen_collected column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findBySpecimenDate(string $specimen_date) Return ChildCareTestRequestChemlabor objects filtered by the specimen_date column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findBySpecimenType(string $specimen_type) Return ChildCareTestRequestChemlabor objects filtered by the specimen_type column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findBySpecimenVolume(string $specimen_volume) Return ChildCareTestRequestChemlabor objects filtered by the specimen_volume column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findBySpecimenUnits(string $specimen_units) Return ChildCareTestRequestChemlabor objects filtered by the specimen_units column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findBySpecimenTakenBy(string $specimen_taken_by) Return ChildCareTestRequestChemlabor objects filtered by the specimen_taken_by column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findBySpecimenContainer(string $specimen_container) Return ChildCareTestRequestChemlabor objects filtered by the specimen_container column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findBySampleTime(string $sample_time) Return ChildCareTestRequestChemlabor objects filtered by the sample_time column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findBySampleWeekday(int $sample_weekday) Return ChildCareTestRequestChemlabor objects filtered by the sample_weekday column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByStatus(string $status) Return ChildCareTestRequestChemlabor objects filtered by the status column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByHistory(string $history) Return ChildCareTestRequestChemlabor objects filtered by the history column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByBillNumber(string $bill_number) Return ChildCareTestRequestChemlabor objects filtered by the bill_number column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByBillStatus(string $bill_status) Return ChildCareTestRequestChemlabor objects filtered by the bill_status column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByIsDisabled(string $is_disabled) Return ChildCareTestRequestChemlabor objects filtered by the is_disabled column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestRequestChemlabor objects filtered by the modify_id column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestRequestChemlabor objects filtered by the modify_time column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestRequestChemlabor objects filtered by the create_id column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestRequestChemlabor objects filtered by the create_time column
 * @method     ChildCareTestRequestChemlabor[]|ObjectCollection findByPriority(boolean $priority) Return ChildCareTestRequestChemlabor objects filtered by the priority column
 * @method     ChildCareTestRequestChemlabor[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestRequestChemlaborQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestRequestChemlaborQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestRequestChemlabor', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestRequestChemlaborQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestRequestChemlaborQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestRequestChemlaborQuery) {
            return $criteria;
        }
        $query = new ChildCareTestRequestChemlaborQuery();
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
     * @return ChildCareTestRequestChemlabor|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestChemlaborTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestRequestChemlaborTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTestRequestChemlabor A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, encounter_nr, item_id, room_nr, dept_nr, parameters, doctor_sign, highrisk, notes, send_date, specimen_collected, specimen_date, specimen_type, specimen_volume, specimen_units, specimen_taken_by, specimen_container, sample_time, sample_weekday, status, history, bill_number, bill_status, is_disabled, modify_id, modify_time, create_id, create_time, priority FROM care_test_request_chemlabor WHERE batch_nr = :p0';
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
            /** @var ChildCareTestRequestChemlabor $obj */
            $obj = new ChildCareTestRequestChemlabor();
            $obj->hydrate($row);
            CareTestRequestChemlaborTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTestRequestChemlabor|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_BATCH_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_BATCH_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemId('fooValue');   // WHERE item_id = 'fooValue'
     * $query->filterByItemId('%fooValue%', Criteria::LIKE); // WHERE item_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_ITEM_ID, $itemId, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByRoomNr($roomNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($roomNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_ROOM_NR, $roomNr, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the parameters column
     *
     * Example usage:
     * <code>
     * $query->filterByParameters('fooValue');   // WHERE parameters = 'fooValue'
     * $query->filterByParameters('%fooValue%', Criteria::LIKE); // WHERE parameters LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parameters The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByParameters($parameters = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parameters)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_PARAMETERS, $parameters, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByDoctorSign($doctorSign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doctorSign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_DOCTOR_SIGN, $doctorSign, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByHighrisk($highrisk = null, $comparison = null)
    {
        if (is_array($highrisk)) {
            $useMinMax = false;
            if (isset($highrisk['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_HIGHRISK, $highrisk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($highrisk['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_HIGHRISK, $highrisk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_HIGHRISK, $highrisk, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_NOTES, $notes, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterBySendDate($sendDate = null, $comparison = null)
    {
        if (is_array($sendDate)) {
            $useMinMax = false;
            if (isset($sendDate['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SEND_DATE, $sendDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendDate['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SEND_DATE, $sendDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SEND_DATE, $sendDate, $comparison);
    }

    /**
     * Filter the query on the specimen_collected column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecimenCollected(true); // WHERE specimen_collected = true
     * $query->filterBySpecimenCollected('yes'); // WHERE specimen_collected = true
     * </code>
     *
     * @param     boolean|string $specimenCollected The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterBySpecimenCollected($specimenCollected = null, $comparison = null)
    {
        if (is_string($specimenCollected)) {
            $specimenCollected = in_array(strtolower($specimenCollected), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SPECIMEN_COLLECTED, $specimenCollected, $comparison);
    }

    /**
     * Filter the query on the specimen_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecimenDate('2011-03-14'); // WHERE specimen_date = '2011-03-14'
     * $query->filterBySpecimenDate('now'); // WHERE specimen_date = '2011-03-14'
     * $query->filterBySpecimenDate(array('max' => 'yesterday')); // WHERE specimen_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $specimenDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterBySpecimenDate($specimenDate = null, $comparison = null)
    {
        if (is_array($specimenDate)) {
            $useMinMax = false;
            if (isset($specimenDate['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SPECIMEN_DATE, $specimenDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($specimenDate['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SPECIMEN_DATE, $specimenDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SPECIMEN_DATE, $specimenDate, $comparison);
    }

    /**
     * Filter the query on the specimen_type column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecimenType('fooValue');   // WHERE specimen_type = 'fooValue'
     * $query->filterBySpecimenType('%fooValue%', Criteria::LIKE); // WHERE specimen_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specimenType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterBySpecimenType($specimenType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specimenType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SPECIMEN_TYPE, $specimenType, $comparison);
    }

    /**
     * Filter the query on the specimen_volume column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecimenVolume('fooValue');   // WHERE specimen_volume = 'fooValue'
     * $query->filterBySpecimenVolume('%fooValue%', Criteria::LIKE); // WHERE specimen_volume LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specimenVolume The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterBySpecimenVolume($specimenVolume = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specimenVolume)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SPECIMEN_VOLUME, $specimenVolume, $comparison);
    }

    /**
     * Filter the query on the specimen_units column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecimenUnits('fooValue');   // WHERE specimen_units = 'fooValue'
     * $query->filterBySpecimenUnits('%fooValue%', Criteria::LIKE); // WHERE specimen_units LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specimenUnits The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterBySpecimenUnits($specimenUnits = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specimenUnits)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SPECIMEN_UNITS, $specimenUnits, $comparison);
    }

    /**
     * Filter the query on the specimen_taken_by column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecimenTakenBy('fooValue');   // WHERE specimen_taken_by = 'fooValue'
     * $query->filterBySpecimenTakenBy('%fooValue%', Criteria::LIKE); // WHERE specimen_taken_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specimenTakenBy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterBySpecimenTakenBy($specimenTakenBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specimenTakenBy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SPECIMEN_TAKEN_BY, $specimenTakenBy, $comparison);
    }

    /**
     * Filter the query on the specimen_container column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecimenContainer('fooValue');   // WHERE specimen_container = 'fooValue'
     * $query->filterBySpecimenContainer('%fooValue%', Criteria::LIKE); // WHERE specimen_container LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specimenContainer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterBySpecimenContainer($specimenContainer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specimenContainer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SPECIMEN_CONTAINER, $specimenContainer, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterBySampleTime($sampleTime = null, $comparison = null)
    {
        if (is_array($sampleTime)) {
            $useMinMax = false;
            if (isset($sampleTime['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SAMPLE_TIME, $sampleTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sampleTime['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SAMPLE_TIME, $sampleTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SAMPLE_TIME, $sampleTime, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterBySampleWeekday($sampleWeekday = null, $comparison = null)
    {
        if (is_array($sampleWeekday)) {
            $useMinMax = false;
            if (isset($sampleWeekday['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SAMPLE_WEEKDAY, $sampleWeekday['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sampleWeekday['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SAMPLE_WEEKDAY, $sampleWeekday['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_SAMPLE_WEEKDAY, $sampleWeekday, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByBillNumber($billNumber = null, $comparison = null)
    {
        if (is_array($billNumber)) {
            $useMinMax = false;
            if (isset($billNumber['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_BILL_NUMBER, $billNumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billNumber['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_BILL_NUMBER, $billNumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_BILL_NUMBER, $billNumber, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByBillStatus($billStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_BILL_STATUS, $billStatus, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByIsDisabled($isDisabled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isDisabled)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_IS_DISABLED, $isDisabled, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Filter the query on the priority column
     *
     * Example usage:
     * <code>
     * $query->filterByPriority(true); // WHERE priority = true
     * $query->filterByPriority('yes'); // WHERE priority = true
     * </code>
     *
     * @param     boolean|string $priority The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function filterByPriority($priority = null, $comparison = null)
    {
        if (is_string($priority)) {
            $priority = in_array(strtolower($priority), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_PRIORITY, $priority, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestRequestChemlabor $careTestRequestChemlabor Object to remove from the list of results
     *
     * @return $this|ChildCareTestRequestChemlaborQuery The current query, for fluid interface
     */
    public function prune($careTestRequestChemlabor = null)
    {
        if ($careTestRequestChemlabor) {
            $this->addUsingAlias(CareTestRequestChemlaborTableMap::COL_BATCH_NR, $careTestRequestChemlabor->getBatchNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_request_chemlabor table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestChemlaborTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestRequestChemlaborTableMap::clearInstancePool();
            CareTestRequestChemlaborTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestChemlaborTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestRequestChemlaborTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestRequestChemlaborTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestRequestChemlaborTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestRequestChemlaborQuery
