<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterNotes as ChildCareEncounterNotes;
use CareMd\CareMd\CareEncounterNotesQuery as ChildCareEncounterNotesQuery;
use CareMd\CareMd\Map\CareEncounterNotesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_notes' table.
 *
 *
 *
 * @method     ChildCareEncounterNotesQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareEncounterNotesQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterNotesQuery orderByTypeNr($order = Criteria::ASC) Order by the type_nr column
 * @method     ChildCareEncounterNotesQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareEncounterNotesQuery orderByShortNotes($order = Criteria::ASC) Order by the short_notes column
 * @method     ChildCareEncounterNotesQuery orderByAuxNotes($order = Criteria::ASC) Order by the aux_notes column
 * @method     ChildCareEncounterNotesQuery orderByRefNotesNr($order = Criteria::ASC) Order by the ref_notes_nr column
 * @method     ChildCareEncounterNotesQuery orderByPersonellNr($order = Criteria::ASC) Order by the personell_nr column
 * @method     ChildCareEncounterNotesQuery orderByPersonellName($order = Criteria::ASC) Order by the personell_name column
 * @method     ChildCareEncounterNotesQuery orderBySendToPid($order = Criteria::ASC) Order by the send_to_pid column
 * @method     ChildCareEncounterNotesQuery orderBySendToName($order = Criteria::ASC) Order by the send_to_name column
 * @method     ChildCareEncounterNotesQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareEncounterNotesQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildCareEncounterNotesQuery orderByLocationType($order = Criteria::ASC) Order by the location_type column
 * @method     ChildCareEncounterNotesQuery orderByLocationTypeNr($order = Criteria::ASC) Order by the location_type_nr column
 * @method     ChildCareEncounterNotesQuery orderByLocationNr($order = Criteria::ASC) Order by the location_nr column
 * @method     ChildCareEncounterNotesQuery orderByLocationId($order = Criteria::ASC) Order by the location_id column
 * @method     ChildCareEncounterNotesQuery orderByAckShortId($order = Criteria::ASC) Order by the ack_short_id column
 * @method     ChildCareEncounterNotesQuery orderByDateAck($order = Criteria::ASC) Order by the date_ack column
 * @method     ChildCareEncounterNotesQuery orderByDateChecked($order = Criteria::ASC) Order by the date_checked column
 * @method     ChildCareEncounterNotesQuery orderByDatePrinted($order = Criteria::ASC) Order by the date_printed column
 * @method     ChildCareEncounterNotesQuery orderBySendByMail($order = Criteria::ASC) Order by the send_by_mail column
 * @method     ChildCareEncounterNotesQuery orderBySendByEmail($order = Criteria::ASC) Order by the send_by_email column
 * @method     ChildCareEncounterNotesQuery orderBySendByFax($order = Criteria::ASC) Order by the send_by_fax column
 * @method     ChildCareEncounterNotesQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterNotesQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterNotesQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterNotesQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterNotesQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterNotesQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterNotesQuery groupByNr() Group by the nr column
 * @method     ChildCareEncounterNotesQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterNotesQuery groupByTypeNr() Group by the type_nr column
 * @method     ChildCareEncounterNotesQuery groupByNotes() Group by the notes column
 * @method     ChildCareEncounterNotesQuery groupByShortNotes() Group by the short_notes column
 * @method     ChildCareEncounterNotesQuery groupByAuxNotes() Group by the aux_notes column
 * @method     ChildCareEncounterNotesQuery groupByRefNotesNr() Group by the ref_notes_nr column
 * @method     ChildCareEncounterNotesQuery groupByPersonellNr() Group by the personell_nr column
 * @method     ChildCareEncounterNotesQuery groupByPersonellName() Group by the personell_name column
 * @method     ChildCareEncounterNotesQuery groupBySendToPid() Group by the send_to_pid column
 * @method     ChildCareEncounterNotesQuery groupBySendToName() Group by the send_to_name column
 * @method     ChildCareEncounterNotesQuery groupByDate() Group by the date column
 * @method     ChildCareEncounterNotesQuery groupByTime() Group by the time column
 * @method     ChildCareEncounterNotesQuery groupByLocationType() Group by the location_type column
 * @method     ChildCareEncounterNotesQuery groupByLocationTypeNr() Group by the location_type_nr column
 * @method     ChildCareEncounterNotesQuery groupByLocationNr() Group by the location_nr column
 * @method     ChildCareEncounterNotesQuery groupByLocationId() Group by the location_id column
 * @method     ChildCareEncounterNotesQuery groupByAckShortId() Group by the ack_short_id column
 * @method     ChildCareEncounterNotesQuery groupByDateAck() Group by the date_ack column
 * @method     ChildCareEncounterNotesQuery groupByDateChecked() Group by the date_checked column
 * @method     ChildCareEncounterNotesQuery groupByDatePrinted() Group by the date_printed column
 * @method     ChildCareEncounterNotesQuery groupBySendByMail() Group by the send_by_mail column
 * @method     ChildCareEncounterNotesQuery groupBySendByEmail() Group by the send_by_email column
 * @method     ChildCareEncounterNotesQuery groupBySendByFax() Group by the send_by_fax column
 * @method     ChildCareEncounterNotesQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterNotesQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterNotesQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterNotesQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterNotesQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterNotesQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterNotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterNotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterNotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterNotesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterNotesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterNotesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterNotes findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterNotes matching the query
 * @method     ChildCareEncounterNotes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterNotes matching the query, or a new ChildCareEncounterNotes object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterNotes findOneByNr(int $nr) Return the first ChildCareEncounterNotes filtered by the nr column
 * @method     ChildCareEncounterNotes findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterNotes filtered by the encounter_nr column
 * @method     ChildCareEncounterNotes findOneByTypeNr(int $type_nr) Return the first ChildCareEncounterNotes filtered by the type_nr column
 * @method     ChildCareEncounterNotes findOneByNotes(string $notes) Return the first ChildCareEncounterNotes filtered by the notes column
 * @method     ChildCareEncounterNotes findOneByShortNotes(string $short_notes) Return the first ChildCareEncounterNotes filtered by the short_notes column
 * @method     ChildCareEncounterNotes findOneByAuxNotes(string $aux_notes) Return the first ChildCareEncounterNotes filtered by the aux_notes column
 * @method     ChildCareEncounterNotes findOneByRefNotesNr(int $ref_notes_nr) Return the first ChildCareEncounterNotes filtered by the ref_notes_nr column
 * @method     ChildCareEncounterNotes findOneByPersonellNr(int $personell_nr) Return the first ChildCareEncounterNotes filtered by the personell_nr column
 * @method     ChildCareEncounterNotes findOneByPersonellName(string $personell_name) Return the first ChildCareEncounterNotes filtered by the personell_name column
 * @method     ChildCareEncounterNotes findOneBySendToPid(int $send_to_pid) Return the first ChildCareEncounterNotes filtered by the send_to_pid column
 * @method     ChildCareEncounterNotes findOneBySendToName(string $send_to_name) Return the first ChildCareEncounterNotes filtered by the send_to_name column
 * @method     ChildCareEncounterNotes findOneByDate(string $date) Return the first ChildCareEncounterNotes filtered by the date column
 * @method     ChildCareEncounterNotes findOneByTime(string $time) Return the first ChildCareEncounterNotes filtered by the time column
 * @method     ChildCareEncounterNotes findOneByLocationType(string $location_type) Return the first ChildCareEncounterNotes filtered by the location_type column
 * @method     ChildCareEncounterNotes findOneByLocationTypeNr(int $location_type_nr) Return the first ChildCareEncounterNotes filtered by the location_type_nr column
 * @method     ChildCareEncounterNotes findOneByLocationNr(int $location_nr) Return the first ChildCareEncounterNotes filtered by the location_nr column
 * @method     ChildCareEncounterNotes findOneByLocationId(string $location_id) Return the first ChildCareEncounterNotes filtered by the location_id column
 * @method     ChildCareEncounterNotes findOneByAckShortId(string $ack_short_id) Return the first ChildCareEncounterNotes filtered by the ack_short_id column
 * @method     ChildCareEncounterNotes findOneByDateAck(string $date_ack) Return the first ChildCareEncounterNotes filtered by the date_ack column
 * @method     ChildCareEncounterNotes findOneByDateChecked(string $date_checked) Return the first ChildCareEncounterNotes filtered by the date_checked column
 * @method     ChildCareEncounterNotes findOneByDatePrinted(string $date_printed) Return the first ChildCareEncounterNotes filtered by the date_printed column
 * @method     ChildCareEncounterNotes findOneBySendByMail(boolean $send_by_mail) Return the first ChildCareEncounterNotes filtered by the send_by_mail column
 * @method     ChildCareEncounterNotes findOneBySendByEmail(boolean $send_by_email) Return the first ChildCareEncounterNotes filtered by the send_by_email column
 * @method     ChildCareEncounterNotes findOneBySendByFax(boolean $send_by_fax) Return the first ChildCareEncounterNotes filtered by the send_by_fax column
 * @method     ChildCareEncounterNotes findOneByStatus(string $status) Return the first ChildCareEncounterNotes filtered by the status column
 * @method     ChildCareEncounterNotes findOneByHistory(string $history) Return the first ChildCareEncounterNotes filtered by the history column
 * @method     ChildCareEncounterNotes findOneByModifyId(string $modify_id) Return the first ChildCareEncounterNotes filtered by the modify_id column
 * @method     ChildCareEncounterNotes findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterNotes filtered by the modify_time column
 * @method     ChildCareEncounterNotes findOneByCreateId(string $create_id) Return the first ChildCareEncounterNotes filtered by the create_id column
 * @method     ChildCareEncounterNotes findOneByCreateTime(string $create_time) Return the first ChildCareEncounterNotes filtered by the create_time column *

 * @method     ChildCareEncounterNotes requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterNotes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterNotes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterNotes requireOneByNr(int $nr) Return the first ChildCareEncounterNotes filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterNotes filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByTypeNr(int $type_nr) Return the first ChildCareEncounterNotes filtered by the type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByNotes(string $notes) Return the first ChildCareEncounterNotes filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByShortNotes(string $short_notes) Return the first ChildCareEncounterNotes filtered by the short_notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByAuxNotes(string $aux_notes) Return the first ChildCareEncounterNotes filtered by the aux_notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByRefNotesNr(int $ref_notes_nr) Return the first ChildCareEncounterNotes filtered by the ref_notes_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByPersonellNr(int $personell_nr) Return the first ChildCareEncounterNotes filtered by the personell_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByPersonellName(string $personell_name) Return the first ChildCareEncounterNotes filtered by the personell_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneBySendToPid(int $send_to_pid) Return the first ChildCareEncounterNotes filtered by the send_to_pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneBySendToName(string $send_to_name) Return the first ChildCareEncounterNotes filtered by the send_to_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByDate(string $date) Return the first ChildCareEncounterNotes filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByTime(string $time) Return the first ChildCareEncounterNotes filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByLocationType(string $location_type) Return the first ChildCareEncounterNotes filtered by the location_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByLocationTypeNr(int $location_type_nr) Return the first ChildCareEncounterNotes filtered by the location_type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByLocationNr(int $location_nr) Return the first ChildCareEncounterNotes filtered by the location_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByLocationId(string $location_id) Return the first ChildCareEncounterNotes filtered by the location_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByAckShortId(string $ack_short_id) Return the first ChildCareEncounterNotes filtered by the ack_short_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByDateAck(string $date_ack) Return the first ChildCareEncounterNotes filtered by the date_ack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByDateChecked(string $date_checked) Return the first ChildCareEncounterNotes filtered by the date_checked column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByDatePrinted(string $date_printed) Return the first ChildCareEncounterNotes filtered by the date_printed column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneBySendByMail(boolean $send_by_mail) Return the first ChildCareEncounterNotes filtered by the send_by_mail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneBySendByEmail(boolean $send_by_email) Return the first ChildCareEncounterNotes filtered by the send_by_email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneBySendByFax(boolean $send_by_fax) Return the first ChildCareEncounterNotes filtered by the send_by_fax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByStatus(string $status) Return the first ChildCareEncounterNotes filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByHistory(string $history) Return the first ChildCareEncounterNotes filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterNotes filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterNotes filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByCreateId(string $create_id) Return the first ChildCareEncounterNotes filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterNotes requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterNotes filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterNotes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterNotes objects based on current ModelCriteria
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByNr(int $nr) Return ChildCareEncounterNotes objects filtered by the nr column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterNotes objects filtered by the encounter_nr column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByTypeNr(int $type_nr) Return ChildCareEncounterNotes objects filtered by the type_nr column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByNotes(string $notes) Return ChildCareEncounterNotes objects filtered by the notes column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByShortNotes(string $short_notes) Return ChildCareEncounterNotes objects filtered by the short_notes column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByAuxNotes(string $aux_notes) Return ChildCareEncounterNotes objects filtered by the aux_notes column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByRefNotesNr(int $ref_notes_nr) Return ChildCareEncounterNotes objects filtered by the ref_notes_nr column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByPersonellNr(int $personell_nr) Return ChildCareEncounterNotes objects filtered by the personell_nr column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByPersonellName(string $personell_name) Return ChildCareEncounterNotes objects filtered by the personell_name column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findBySendToPid(int $send_to_pid) Return ChildCareEncounterNotes objects filtered by the send_to_pid column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findBySendToName(string $send_to_name) Return ChildCareEncounterNotes objects filtered by the send_to_name column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByDate(string $date) Return ChildCareEncounterNotes objects filtered by the date column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByTime(string $time) Return ChildCareEncounterNotes objects filtered by the time column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByLocationType(string $location_type) Return ChildCareEncounterNotes objects filtered by the location_type column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByLocationTypeNr(int $location_type_nr) Return ChildCareEncounterNotes objects filtered by the location_type_nr column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByLocationNr(int $location_nr) Return ChildCareEncounterNotes objects filtered by the location_nr column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByLocationId(string $location_id) Return ChildCareEncounterNotes objects filtered by the location_id column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByAckShortId(string $ack_short_id) Return ChildCareEncounterNotes objects filtered by the ack_short_id column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByDateAck(string $date_ack) Return ChildCareEncounterNotes objects filtered by the date_ack column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByDateChecked(string $date_checked) Return ChildCareEncounterNotes objects filtered by the date_checked column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByDatePrinted(string $date_printed) Return ChildCareEncounterNotes objects filtered by the date_printed column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findBySendByMail(boolean $send_by_mail) Return ChildCareEncounterNotes objects filtered by the send_by_mail column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findBySendByEmail(boolean $send_by_email) Return ChildCareEncounterNotes objects filtered by the send_by_email column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findBySendByFax(boolean $send_by_fax) Return ChildCareEncounterNotes objects filtered by the send_by_fax column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterNotes objects filtered by the status column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterNotes objects filtered by the history column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterNotes objects filtered by the modify_id column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterNotes objects filtered by the modify_time column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterNotes objects filtered by the create_id column
 * @method     ChildCareEncounterNotes[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterNotes objects filtered by the create_time column
 * @method     ChildCareEncounterNotes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterNotesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterNotesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterNotes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterNotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterNotesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterNotesQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterNotesQuery();
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
     * @return ChildCareEncounterNotes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterNotesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterNotesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterNotes A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, encounter_nr, type_nr, notes, short_notes, aux_notes, ref_notes_nr, personell_nr, personell_name, send_to_pid, send_to_name, date, time, location_type, location_type_nr, location_nr, location_id, ack_short_id, date_ack, date_checked, date_printed, send_by_mail, send_by_email, send_by_fax, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_notes WHERE nr = :p0';
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
            /** @var ChildCareEncounterNotes $obj */
            $obj = new ChildCareEncounterNotes();
            $obj->hydrate($row);
            CareEncounterNotesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterNotes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the nr column
     *
     * Example usage:
     * <code>
     * $query->filterByNr(1234); // WHERE nr = 1234
     * $query->filterByNr(array(12, 34)); // WHERE nr IN (12, 34)
     * $query->filterByNr(array('min' => 12)); // WHERE nr > 12
     * </code>
     *
     * @param     mixed $nr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeNr(1234); // WHERE type_nr = 1234
     * $query->filterByTypeNr(array(12, 34)); // WHERE type_nr IN (12, 34)
     * $query->filterByTypeNr(array('min' => 12)); // WHERE type_nr > 12
     * </code>
     *
     * @param     mixed $typeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByTypeNr($typeNr = null, $comparison = null)
    {
        if (is_array($typeNr)) {
            $useMinMax = false;
            if (isset($typeNr['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_TYPE_NR, $typeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeNr['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_TYPE_NR, $typeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_TYPE_NR, $typeNr, $comparison);
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
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the short_notes column
     *
     * Example usage:
     * <code>
     * $query->filterByShortNotes('fooValue');   // WHERE short_notes = 'fooValue'
     * $query->filterByShortNotes('%fooValue%', Criteria::LIKE); // WHERE short_notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shortNotes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByShortNotes($shortNotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortNotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_SHORT_NOTES, $shortNotes, $comparison);
    }

    /**
     * Filter the query on the aux_notes column
     *
     * Example usage:
     * <code>
     * $query->filterByAuxNotes('fooValue');   // WHERE aux_notes = 'fooValue'
     * $query->filterByAuxNotes('%fooValue%', Criteria::LIKE); // WHERE aux_notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $auxNotes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByAuxNotes($auxNotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($auxNotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_AUX_NOTES, $auxNotes, $comparison);
    }

    /**
     * Filter the query on the ref_notes_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByRefNotesNr(1234); // WHERE ref_notes_nr = 1234
     * $query->filterByRefNotesNr(array(12, 34)); // WHERE ref_notes_nr IN (12, 34)
     * $query->filterByRefNotesNr(array('min' => 12)); // WHERE ref_notes_nr > 12
     * </code>
     *
     * @param     mixed $refNotesNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByRefNotesNr($refNotesNr = null, $comparison = null)
    {
        if (is_array($refNotesNr)) {
            $useMinMax = false;
            if (isset($refNotesNr['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_REF_NOTES_NR, $refNotesNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refNotesNr['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_REF_NOTES_NR, $refNotesNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_REF_NOTES_NR, $refNotesNr, $comparison);
    }

    /**
     * Filter the query on the personell_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonellNr(1234); // WHERE personell_nr = 1234
     * $query->filterByPersonellNr(array(12, 34)); // WHERE personell_nr IN (12, 34)
     * $query->filterByPersonellNr(array('min' => 12)); // WHERE personell_nr > 12
     * </code>
     *
     * @param     mixed $personellNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByPersonellNr($personellNr = null, $comparison = null)
    {
        if (is_array($personellNr)) {
            $useMinMax = false;
            if (isset($personellNr['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_PERSONELL_NR, $personellNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personellNr['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_PERSONELL_NR, $personellNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_PERSONELL_NR, $personellNr, $comparison);
    }

    /**
     * Filter the query on the personell_name column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonellName('fooValue');   // WHERE personell_name = 'fooValue'
     * $query->filterByPersonellName('%fooValue%', Criteria::LIKE); // WHERE personell_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $personellName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByPersonellName($personellName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($personellName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_PERSONELL_NAME, $personellName, $comparison);
    }

    /**
     * Filter the query on the send_to_pid column
     *
     * Example usage:
     * <code>
     * $query->filterBySendToPid(1234); // WHERE send_to_pid = 1234
     * $query->filterBySendToPid(array(12, 34)); // WHERE send_to_pid IN (12, 34)
     * $query->filterBySendToPid(array('min' => 12)); // WHERE send_to_pid > 12
     * </code>
     *
     * @param     mixed $sendToPid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterBySendToPid($sendToPid = null, $comparison = null)
    {
        if (is_array($sendToPid)) {
            $useMinMax = false;
            if (isset($sendToPid['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_SEND_TO_PID, $sendToPid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendToPid['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_SEND_TO_PID, $sendToPid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_SEND_TO_PID, $sendToPid, $comparison);
    }

    /**
     * Filter the query on the send_to_name column
     *
     * Example usage:
     * <code>
     * $query->filterBySendToName('fooValue');   // WHERE send_to_name = 'fooValue'
     * $query->filterBySendToName('%fooValue%', Criteria::LIKE); // WHERE send_to_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sendToName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterBySendToName($sendToName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sendToName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_SEND_TO_NAME, $sendToName, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the time column
     *
     * Example usage:
     * <code>
     * $query->filterByTime('2011-03-14'); // WHERE time = '2011-03-14'
     * $query->filterByTime('now'); // WHERE time = '2011-03-14'
     * $query->filterByTime(array('max' => 'yesterday')); // WHERE time > '2011-03-13'
     * </code>
     *
     * @param     mixed $time The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_TIME, $time, $comparison);
    }

    /**
     * Filter the query on the location_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationType('fooValue');   // WHERE location_type = 'fooValue'
     * $query->filterByLocationType('%fooValue%', Criteria::LIKE); // WHERE location_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locationType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByLocationType($locationType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locationType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_LOCATION_TYPE, $locationType, $comparison);
    }

    /**
     * Filter the query on the location_type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationTypeNr(1234); // WHERE location_type_nr = 1234
     * $query->filterByLocationTypeNr(array(12, 34)); // WHERE location_type_nr IN (12, 34)
     * $query->filterByLocationTypeNr(array('min' => 12)); // WHERE location_type_nr > 12
     * </code>
     *
     * @param     mixed $locationTypeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByLocationTypeNr($locationTypeNr = null, $comparison = null)
    {
        if (is_array($locationTypeNr)) {
            $useMinMax = false;
            if (isset($locationTypeNr['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_LOCATION_TYPE_NR, $locationTypeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationTypeNr['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_LOCATION_TYPE_NR, $locationTypeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_LOCATION_TYPE_NR, $locationTypeNr, $comparison);
    }

    /**
     * Filter the query on the location_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationNr(1234); // WHERE location_nr = 1234
     * $query->filterByLocationNr(array(12, 34)); // WHERE location_nr IN (12, 34)
     * $query->filterByLocationNr(array('min' => 12)); // WHERE location_nr > 12
     * </code>
     *
     * @param     mixed $locationNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByLocationNr($locationNr = null, $comparison = null)
    {
        if (is_array($locationNr)) {
            $useMinMax = false;
            if (isset($locationNr['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_LOCATION_NR, $locationNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationNr['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_LOCATION_NR, $locationNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_LOCATION_NR, $locationNr, $comparison);
    }

    /**
     * Filter the query on the location_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationId('fooValue');   // WHERE location_id = 'fooValue'
     * $query->filterByLocationId('%fooValue%', Criteria::LIKE); // WHERE location_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locationId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByLocationId($locationId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locationId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_LOCATION_ID, $locationId, $comparison);
    }

    /**
     * Filter the query on the ack_short_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAckShortId('fooValue');   // WHERE ack_short_id = 'fooValue'
     * $query->filterByAckShortId('%fooValue%', Criteria::LIKE); // WHERE ack_short_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ackShortId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByAckShortId($ackShortId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ackShortId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_ACK_SHORT_ID, $ackShortId, $comparison);
    }

    /**
     * Filter the query on the date_ack column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAck('2011-03-14'); // WHERE date_ack = '2011-03-14'
     * $query->filterByDateAck('now'); // WHERE date_ack = '2011-03-14'
     * $query->filterByDateAck(array('max' => 'yesterday')); // WHERE date_ack > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateAck The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByDateAck($dateAck = null, $comparison = null)
    {
        if (is_array($dateAck)) {
            $useMinMax = false;
            if (isset($dateAck['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE_ACK, $dateAck['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateAck['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE_ACK, $dateAck['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE_ACK, $dateAck, $comparison);
    }

    /**
     * Filter the query on the date_checked column
     *
     * Example usage:
     * <code>
     * $query->filterByDateChecked('2011-03-14'); // WHERE date_checked = '2011-03-14'
     * $query->filterByDateChecked('now'); // WHERE date_checked = '2011-03-14'
     * $query->filterByDateChecked(array('max' => 'yesterday')); // WHERE date_checked > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateChecked The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByDateChecked($dateChecked = null, $comparison = null)
    {
        if (is_array($dateChecked)) {
            $useMinMax = false;
            if (isset($dateChecked['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE_CHECKED, $dateChecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateChecked['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE_CHECKED, $dateChecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE_CHECKED, $dateChecked, $comparison);
    }

    /**
     * Filter the query on the date_printed column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePrinted('2011-03-14'); // WHERE date_printed = '2011-03-14'
     * $query->filterByDatePrinted('now'); // WHERE date_printed = '2011-03-14'
     * $query->filterByDatePrinted(array('max' => 'yesterday')); // WHERE date_printed > '2011-03-13'
     * </code>
     *
     * @param     mixed $datePrinted The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByDatePrinted($datePrinted = null, $comparison = null)
    {
        if (is_array($datePrinted)) {
            $useMinMax = false;
            if (isset($datePrinted['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE_PRINTED, $datePrinted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datePrinted['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE_PRINTED, $datePrinted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_DATE_PRINTED, $datePrinted, $comparison);
    }

    /**
     * Filter the query on the send_by_mail column
     *
     * Example usage:
     * <code>
     * $query->filterBySendByMail(true); // WHERE send_by_mail = true
     * $query->filterBySendByMail('yes'); // WHERE send_by_mail = true
     * </code>
     *
     * @param     boolean|string $sendByMail The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterBySendByMail($sendByMail = null, $comparison = null)
    {
        if (is_string($sendByMail)) {
            $sendByMail = in_array(strtolower($sendByMail), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_SEND_BY_MAIL, $sendByMail, $comparison);
    }

    /**
     * Filter the query on the send_by_email column
     *
     * Example usage:
     * <code>
     * $query->filterBySendByEmail(true); // WHERE send_by_email = true
     * $query->filterBySendByEmail('yes'); // WHERE send_by_email = true
     * </code>
     *
     * @param     boolean|string $sendByEmail The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterBySendByEmail($sendByEmail = null, $comparison = null)
    {
        if (is_string($sendByEmail)) {
            $sendByEmail = in_array(strtolower($sendByEmail), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_SEND_BY_EMAIL, $sendByEmail, $comparison);
    }

    /**
     * Filter the query on the send_by_fax column
     *
     * Example usage:
     * <code>
     * $query->filterBySendByFax(true); // WHERE send_by_fax = true
     * $query->filterBySendByFax('yes'); // WHERE send_by_fax = true
     * </code>
     *
     * @param     boolean|string $sendByFax The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterBySendByFax($sendByFax = null, $comparison = null)
    {
        if (is_string($sendByFax)) {
            $sendByFax = in_array(strtolower($sendByFax), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_SEND_BY_FAX, $sendByFax, $comparison);
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
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterNotesTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterNotesTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterNotes $careEncounterNotes Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterNotesQuery The current query, for fluid interface
     */
    public function prune($careEncounterNotes = null)
    {
        if ($careEncounterNotes) {
            $this->addUsingAlias(CareEncounterNotesTableMap::COL_NR, $careEncounterNotes->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_notes table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterNotesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterNotesTableMap::clearInstancePool();
            CareEncounterNotesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterNotesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterNotesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterNotesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterNotesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterNotesQuery
