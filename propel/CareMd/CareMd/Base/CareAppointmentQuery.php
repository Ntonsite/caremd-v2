<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareAppointment as ChildCareAppointment;
use CareMd\CareMd\CareAppointmentQuery as ChildCareAppointmentQuery;
use CareMd\CareMd\Map\CareAppointmentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_appointment' table.
 *
 *
 *
 * @method     ChildCareAppointmentQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareAppointmentQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCareAppointmentQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareAppointmentQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildCareAppointmentQuery orderByToDeptId($order = Criteria::ASC) Order by the to_dept_id column
 * @method     ChildCareAppointmentQuery orderByToDeptNr($order = Criteria::ASC) Order by the to_dept_nr column
 * @method     ChildCareAppointmentQuery orderByToPersonellNr($order = Criteria::ASC) Order by the to_personell_nr column
 * @method     ChildCareAppointmentQuery orderByToPersonellName($order = Criteria::ASC) Order by the to_personell_name column
 * @method     ChildCareAppointmentQuery orderByPurpose($order = Criteria::ASC) Order by the purpose column
 * @method     ChildCareAppointmentQuery orderByUrgency($order = Criteria::ASC) Order by the urgency column
 * @method     ChildCareAppointmentQuery orderByRemind($order = Criteria::ASC) Order by the remind column
 * @method     ChildCareAppointmentQuery orderByRemindEmail($order = Criteria::ASC) Order by the remind_email column
 * @method     ChildCareAppointmentQuery orderByRemindMail($order = Criteria::ASC) Order by the remind_mail column
 * @method     ChildCareAppointmentQuery orderByRemindPhone($order = Criteria::ASC) Order by the remind_phone column
 * @method     ChildCareAppointmentQuery orderByApptStatus($order = Criteria::ASC) Order by the appt_status column
 * @method     ChildCareAppointmentQuery orderByCancelBy($order = Criteria::ASC) Order by the cancel_by column
 * @method     ChildCareAppointmentQuery orderByCancelDate($order = Criteria::ASC) Order by the cancel_date column
 * @method     ChildCareAppointmentQuery orderByCancelReason($order = Criteria::ASC) Order by the cancel_reason column
 * @method     ChildCareAppointmentQuery orderByEncounterClassNr($order = Criteria::ASC) Order by the encounter_class_nr column
 * @method     ChildCareAppointmentQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareAppointmentQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareAppointmentQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareAppointmentQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareAppointmentQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareAppointmentQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareAppointmentQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareAppointmentQuery groupByNr() Group by the nr column
 * @method     ChildCareAppointmentQuery groupByPid() Group by the pid column
 * @method     ChildCareAppointmentQuery groupByDate() Group by the date column
 * @method     ChildCareAppointmentQuery groupByTime() Group by the time column
 * @method     ChildCareAppointmentQuery groupByToDeptId() Group by the to_dept_id column
 * @method     ChildCareAppointmentQuery groupByToDeptNr() Group by the to_dept_nr column
 * @method     ChildCareAppointmentQuery groupByToPersonellNr() Group by the to_personell_nr column
 * @method     ChildCareAppointmentQuery groupByToPersonellName() Group by the to_personell_name column
 * @method     ChildCareAppointmentQuery groupByPurpose() Group by the purpose column
 * @method     ChildCareAppointmentQuery groupByUrgency() Group by the urgency column
 * @method     ChildCareAppointmentQuery groupByRemind() Group by the remind column
 * @method     ChildCareAppointmentQuery groupByRemindEmail() Group by the remind_email column
 * @method     ChildCareAppointmentQuery groupByRemindMail() Group by the remind_mail column
 * @method     ChildCareAppointmentQuery groupByRemindPhone() Group by the remind_phone column
 * @method     ChildCareAppointmentQuery groupByApptStatus() Group by the appt_status column
 * @method     ChildCareAppointmentQuery groupByCancelBy() Group by the cancel_by column
 * @method     ChildCareAppointmentQuery groupByCancelDate() Group by the cancel_date column
 * @method     ChildCareAppointmentQuery groupByCancelReason() Group by the cancel_reason column
 * @method     ChildCareAppointmentQuery groupByEncounterClassNr() Group by the encounter_class_nr column
 * @method     ChildCareAppointmentQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareAppointmentQuery groupByStatus() Group by the status column
 * @method     ChildCareAppointmentQuery groupByHistory() Group by the history column
 * @method     ChildCareAppointmentQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareAppointmentQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareAppointmentQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareAppointmentQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareAppointmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareAppointmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareAppointmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareAppointmentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareAppointmentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareAppointmentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareAppointment findOne(ConnectionInterface $con = null) Return the first ChildCareAppointment matching the query
 * @method     ChildCareAppointment findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareAppointment matching the query, or a new ChildCareAppointment object populated from the query conditions when no match is found
 *
 * @method     ChildCareAppointment findOneByNr(string $nr) Return the first ChildCareAppointment filtered by the nr column
 * @method     ChildCareAppointment findOneByPid(int $pid) Return the first ChildCareAppointment filtered by the pid column
 * @method     ChildCareAppointment findOneByDate(string $date) Return the first ChildCareAppointment filtered by the date column
 * @method     ChildCareAppointment findOneByTime(string $time) Return the first ChildCareAppointment filtered by the time column
 * @method     ChildCareAppointment findOneByToDeptId(string $to_dept_id) Return the first ChildCareAppointment filtered by the to_dept_id column
 * @method     ChildCareAppointment findOneByToDeptNr(int $to_dept_nr) Return the first ChildCareAppointment filtered by the to_dept_nr column
 * @method     ChildCareAppointment findOneByToPersonellNr(int $to_personell_nr) Return the first ChildCareAppointment filtered by the to_personell_nr column
 * @method     ChildCareAppointment findOneByToPersonellName(string $to_personell_name) Return the first ChildCareAppointment filtered by the to_personell_name column
 * @method     ChildCareAppointment findOneByPurpose(string $purpose) Return the first ChildCareAppointment filtered by the purpose column
 * @method     ChildCareAppointment findOneByUrgency(int $urgency) Return the first ChildCareAppointment filtered by the urgency column
 * @method     ChildCareAppointment findOneByRemind(boolean $remind) Return the first ChildCareAppointment filtered by the remind column
 * @method     ChildCareAppointment findOneByRemindEmail(boolean $remind_email) Return the first ChildCareAppointment filtered by the remind_email column
 * @method     ChildCareAppointment findOneByRemindMail(boolean $remind_mail) Return the first ChildCareAppointment filtered by the remind_mail column
 * @method     ChildCareAppointment findOneByRemindPhone(boolean $remind_phone) Return the first ChildCareAppointment filtered by the remind_phone column
 * @method     ChildCareAppointment findOneByApptStatus(string $appt_status) Return the first ChildCareAppointment filtered by the appt_status column
 * @method     ChildCareAppointment findOneByCancelBy(string $cancel_by) Return the first ChildCareAppointment filtered by the cancel_by column
 * @method     ChildCareAppointment findOneByCancelDate(string $cancel_date) Return the first ChildCareAppointment filtered by the cancel_date column
 * @method     ChildCareAppointment findOneByCancelReason(string $cancel_reason) Return the first ChildCareAppointment filtered by the cancel_reason column
 * @method     ChildCareAppointment findOneByEncounterClassNr(int $encounter_class_nr) Return the first ChildCareAppointment filtered by the encounter_class_nr column
 * @method     ChildCareAppointment findOneByEncounterNr(int $encounter_nr) Return the first ChildCareAppointment filtered by the encounter_nr column
 * @method     ChildCareAppointment findOneByStatus(string $status) Return the first ChildCareAppointment filtered by the status column
 * @method     ChildCareAppointment findOneByHistory(string $history) Return the first ChildCareAppointment filtered by the history column
 * @method     ChildCareAppointment findOneByModifyId(string $modify_id) Return the first ChildCareAppointment filtered by the modify_id column
 * @method     ChildCareAppointment findOneByModifyTime(string $modify_time) Return the first ChildCareAppointment filtered by the modify_time column
 * @method     ChildCareAppointment findOneByCreateId(string $create_id) Return the first ChildCareAppointment filtered by the create_id column
 * @method     ChildCareAppointment findOneByCreateTime(string $create_time) Return the first ChildCareAppointment filtered by the create_time column *

 * @method     ChildCareAppointment requirePk($key, ConnectionInterface $con = null) Return the ChildCareAppointment by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOne(ConnectionInterface $con = null) Return the first ChildCareAppointment matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareAppointment requireOneByNr(string $nr) Return the first ChildCareAppointment filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByPid(int $pid) Return the first ChildCareAppointment filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByDate(string $date) Return the first ChildCareAppointment filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByTime(string $time) Return the first ChildCareAppointment filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByToDeptId(string $to_dept_id) Return the first ChildCareAppointment filtered by the to_dept_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByToDeptNr(int $to_dept_nr) Return the first ChildCareAppointment filtered by the to_dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByToPersonellNr(int $to_personell_nr) Return the first ChildCareAppointment filtered by the to_personell_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByToPersonellName(string $to_personell_name) Return the first ChildCareAppointment filtered by the to_personell_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByPurpose(string $purpose) Return the first ChildCareAppointment filtered by the purpose column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByUrgency(int $urgency) Return the first ChildCareAppointment filtered by the urgency column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByRemind(boolean $remind) Return the first ChildCareAppointment filtered by the remind column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByRemindEmail(boolean $remind_email) Return the first ChildCareAppointment filtered by the remind_email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByRemindMail(boolean $remind_mail) Return the first ChildCareAppointment filtered by the remind_mail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByRemindPhone(boolean $remind_phone) Return the first ChildCareAppointment filtered by the remind_phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByApptStatus(string $appt_status) Return the first ChildCareAppointment filtered by the appt_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByCancelBy(string $cancel_by) Return the first ChildCareAppointment filtered by the cancel_by column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByCancelDate(string $cancel_date) Return the first ChildCareAppointment filtered by the cancel_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByCancelReason(string $cancel_reason) Return the first ChildCareAppointment filtered by the cancel_reason column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByEncounterClassNr(int $encounter_class_nr) Return the first ChildCareAppointment filtered by the encounter_class_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareAppointment filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByStatus(string $status) Return the first ChildCareAppointment filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByHistory(string $history) Return the first ChildCareAppointment filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByModifyId(string $modify_id) Return the first ChildCareAppointment filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByModifyTime(string $modify_time) Return the first ChildCareAppointment filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByCreateId(string $create_id) Return the first ChildCareAppointment filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAppointment requireOneByCreateTime(string $create_time) Return the first ChildCareAppointment filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareAppointment[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareAppointment objects based on current ModelCriteria
 * @method     ChildCareAppointment[]|ObjectCollection findByNr(string $nr) Return ChildCareAppointment objects filtered by the nr column
 * @method     ChildCareAppointment[]|ObjectCollection findByPid(int $pid) Return ChildCareAppointment objects filtered by the pid column
 * @method     ChildCareAppointment[]|ObjectCollection findByDate(string $date) Return ChildCareAppointment objects filtered by the date column
 * @method     ChildCareAppointment[]|ObjectCollection findByTime(string $time) Return ChildCareAppointment objects filtered by the time column
 * @method     ChildCareAppointment[]|ObjectCollection findByToDeptId(string $to_dept_id) Return ChildCareAppointment objects filtered by the to_dept_id column
 * @method     ChildCareAppointment[]|ObjectCollection findByToDeptNr(int $to_dept_nr) Return ChildCareAppointment objects filtered by the to_dept_nr column
 * @method     ChildCareAppointment[]|ObjectCollection findByToPersonellNr(int $to_personell_nr) Return ChildCareAppointment objects filtered by the to_personell_nr column
 * @method     ChildCareAppointment[]|ObjectCollection findByToPersonellName(string $to_personell_name) Return ChildCareAppointment objects filtered by the to_personell_name column
 * @method     ChildCareAppointment[]|ObjectCollection findByPurpose(string $purpose) Return ChildCareAppointment objects filtered by the purpose column
 * @method     ChildCareAppointment[]|ObjectCollection findByUrgency(int $urgency) Return ChildCareAppointment objects filtered by the urgency column
 * @method     ChildCareAppointment[]|ObjectCollection findByRemind(boolean $remind) Return ChildCareAppointment objects filtered by the remind column
 * @method     ChildCareAppointment[]|ObjectCollection findByRemindEmail(boolean $remind_email) Return ChildCareAppointment objects filtered by the remind_email column
 * @method     ChildCareAppointment[]|ObjectCollection findByRemindMail(boolean $remind_mail) Return ChildCareAppointment objects filtered by the remind_mail column
 * @method     ChildCareAppointment[]|ObjectCollection findByRemindPhone(boolean $remind_phone) Return ChildCareAppointment objects filtered by the remind_phone column
 * @method     ChildCareAppointment[]|ObjectCollection findByApptStatus(string $appt_status) Return ChildCareAppointment objects filtered by the appt_status column
 * @method     ChildCareAppointment[]|ObjectCollection findByCancelBy(string $cancel_by) Return ChildCareAppointment objects filtered by the cancel_by column
 * @method     ChildCareAppointment[]|ObjectCollection findByCancelDate(string $cancel_date) Return ChildCareAppointment objects filtered by the cancel_date column
 * @method     ChildCareAppointment[]|ObjectCollection findByCancelReason(string $cancel_reason) Return ChildCareAppointment objects filtered by the cancel_reason column
 * @method     ChildCareAppointment[]|ObjectCollection findByEncounterClassNr(int $encounter_class_nr) Return ChildCareAppointment objects filtered by the encounter_class_nr column
 * @method     ChildCareAppointment[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareAppointment objects filtered by the encounter_nr column
 * @method     ChildCareAppointment[]|ObjectCollection findByStatus(string $status) Return ChildCareAppointment objects filtered by the status column
 * @method     ChildCareAppointment[]|ObjectCollection findByHistory(string $history) Return ChildCareAppointment objects filtered by the history column
 * @method     ChildCareAppointment[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareAppointment objects filtered by the modify_id column
 * @method     ChildCareAppointment[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareAppointment objects filtered by the modify_time column
 * @method     ChildCareAppointment[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareAppointment objects filtered by the create_id column
 * @method     ChildCareAppointment[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareAppointment objects filtered by the create_time column
 * @method     ChildCareAppointment[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareAppointmentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareAppointmentQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareAppointment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareAppointmentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareAppointmentQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareAppointmentQuery) {
            return $criteria;
        }
        $query = new ChildCareAppointmentQuery();
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
     * @return ChildCareAppointment|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareAppointmentTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareAppointmentTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareAppointment A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, pid, date, time, to_dept_id, to_dept_nr, to_personell_nr, to_personell_name, purpose, urgency, remind, remind_email, remind_mail, remind_phone, appt_status, cancel_by, cancel_date, cancel_reason, encounter_class_nr, encounter_nr, status, history, modify_id, modify_time, create_id, create_time FROM care_appointment WHERE nr = :p0';
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
            /** @var ChildCareAppointment $obj */
            $obj = new ChildCareAppointment();
            $obj->hydrate($row);
            CareAppointmentTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareAppointment|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareAppointmentTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareAppointmentTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the pid column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE pid = 1234
     * $query->filterByPid(array(12, 34)); // WHERE pid IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE pid > 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_PID, $pid, $comparison);
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_DATE, $date, $comparison);
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_TIME, $time, $comparison);
    }

    /**
     * Filter the query on the to_dept_id column
     *
     * Example usage:
     * <code>
     * $query->filterByToDeptId('fooValue');   // WHERE to_dept_id = 'fooValue'
     * $query->filterByToDeptId('%fooValue%', Criteria::LIKE); // WHERE to_dept_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $toDeptId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByToDeptId($toDeptId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($toDeptId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_TO_DEPT_ID, $toDeptId, $comparison);
    }

    /**
     * Filter the query on the to_dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByToDeptNr(1234); // WHERE to_dept_nr = 1234
     * $query->filterByToDeptNr(array(12, 34)); // WHERE to_dept_nr IN (12, 34)
     * $query->filterByToDeptNr(array('min' => 12)); // WHERE to_dept_nr > 12
     * </code>
     *
     * @param     mixed $toDeptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByToDeptNr($toDeptNr = null, $comparison = null)
    {
        if (is_array($toDeptNr)) {
            $useMinMax = false;
            if (isset($toDeptNr['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_TO_DEPT_NR, $toDeptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toDeptNr['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_TO_DEPT_NR, $toDeptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_TO_DEPT_NR, $toDeptNr, $comparison);
    }

    /**
     * Filter the query on the to_personell_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByToPersonellNr(1234); // WHERE to_personell_nr = 1234
     * $query->filterByToPersonellNr(array(12, 34)); // WHERE to_personell_nr IN (12, 34)
     * $query->filterByToPersonellNr(array('min' => 12)); // WHERE to_personell_nr > 12
     * </code>
     *
     * @param     mixed $toPersonellNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByToPersonellNr($toPersonellNr = null, $comparison = null)
    {
        if (is_array($toPersonellNr)) {
            $useMinMax = false;
            if (isset($toPersonellNr['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_TO_PERSONELL_NR, $toPersonellNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toPersonellNr['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_TO_PERSONELL_NR, $toPersonellNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_TO_PERSONELL_NR, $toPersonellNr, $comparison);
    }

    /**
     * Filter the query on the to_personell_name column
     *
     * Example usage:
     * <code>
     * $query->filterByToPersonellName('fooValue');   // WHERE to_personell_name = 'fooValue'
     * $query->filterByToPersonellName('%fooValue%', Criteria::LIKE); // WHERE to_personell_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $toPersonellName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByToPersonellName($toPersonellName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($toPersonellName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_TO_PERSONELL_NAME, $toPersonellName, $comparison);
    }

    /**
     * Filter the query on the purpose column
     *
     * Example usage:
     * <code>
     * $query->filterByPurpose('fooValue');   // WHERE purpose = 'fooValue'
     * $query->filterByPurpose('%fooValue%', Criteria::LIKE); // WHERE purpose LIKE '%fooValue%'
     * </code>
     *
     * @param     string $purpose The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByPurpose($purpose = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($purpose)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_PURPOSE, $purpose, $comparison);
    }

    /**
     * Filter the query on the urgency column
     *
     * Example usage:
     * <code>
     * $query->filterByUrgency(1234); // WHERE urgency = 1234
     * $query->filterByUrgency(array(12, 34)); // WHERE urgency IN (12, 34)
     * $query->filterByUrgency(array('min' => 12)); // WHERE urgency > 12
     * </code>
     *
     * @param     mixed $urgency The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByUrgency($urgency = null, $comparison = null)
    {
        if (is_array($urgency)) {
            $useMinMax = false;
            if (isset($urgency['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_URGENCY, $urgency['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($urgency['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_URGENCY, $urgency['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_URGENCY, $urgency, $comparison);
    }

    /**
     * Filter the query on the remind column
     *
     * Example usage:
     * <code>
     * $query->filterByRemind(true); // WHERE remind = true
     * $query->filterByRemind('yes'); // WHERE remind = true
     * </code>
     *
     * @param     boolean|string $remind The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByRemind($remind = null, $comparison = null)
    {
        if (is_string($remind)) {
            $remind = in_array(strtolower($remind), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_REMIND, $remind, $comparison);
    }

    /**
     * Filter the query on the remind_email column
     *
     * Example usage:
     * <code>
     * $query->filterByRemindEmail(true); // WHERE remind_email = true
     * $query->filterByRemindEmail('yes'); // WHERE remind_email = true
     * </code>
     *
     * @param     boolean|string $remindEmail The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByRemindEmail($remindEmail = null, $comparison = null)
    {
        if (is_string($remindEmail)) {
            $remindEmail = in_array(strtolower($remindEmail), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_REMIND_EMAIL, $remindEmail, $comparison);
    }

    /**
     * Filter the query on the remind_mail column
     *
     * Example usage:
     * <code>
     * $query->filterByRemindMail(true); // WHERE remind_mail = true
     * $query->filterByRemindMail('yes'); // WHERE remind_mail = true
     * </code>
     *
     * @param     boolean|string $remindMail The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByRemindMail($remindMail = null, $comparison = null)
    {
        if (is_string($remindMail)) {
            $remindMail = in_array(strtolower($remindMail), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_REMIND_MAIL, $remindMail, $comparison);
    }

    /**
     * Filter the query on the remind_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByRemindPhone(true); // WHERE remind_phone = true
     * $query->filterByRemindPhone('yes'); // WHERE remind_phone = true
     * </code>
     *
     * @param     boolean|string $remindPhone The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByRemindPhone($remindPhone = null, $comparison = null)
    {
        if (is_string($remindPhone)) {
            $remindPhone = in_array(strtolower($remindPhone), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_REMIND_PHONE, $remindPhone, $comparison);
    }

    /**
     * Filter the query on the appt_status column
     *
     * Example usage:
     * <code>
     * $query->filterByApptStatus('fooValue');   // WHERE appt_status = 'fooValue'
     * $query->filterByApptStatus('%fooValue%', Criteria::LIKE); // WHERE appt_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apptStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByApptStatus($apptStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apptStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_APPT_STATUS, $apptStatus, $comparison);
    }

    /**
     * Filter the query on the cancel_by column
     *
     * Example usage:
     * <code>
     * $query->filterByCancelBy('fooValue');   // WHERE cancel_by = 'fooValue'
     * $query->filterByCancelBy('%fooValue%', Criteria::LIKE); // WHERE cancel_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cancelBy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByCancelBy($cancelBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cancelBy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_CANCEL_BY, $cancelBy, $comparison);
    }

    /**
     * Filter the query on the cancel_date column
     *
     * Example usage:
     * <code>
     * $query->filterByCancelDate('2011-03-14'); // WHERE cancel_date = '2011-03-14'
     * $query->filterByCancelDate('now'); // WHERE cancel_date = '2011-03-14'
     * $query->filterByCancelDate(array('max' => 'yesterday')); // WHERE cancel_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $cancelDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByCancelDate($cancelDate = null, $comparison = null)
    {
        if (is_array($cancelDate)) {
            $useMinMax = false;
            if (isset($cancelDate['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_CANCEL_DATE, $cancelDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cancelDate['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_CANCEL_DATE, $cancelDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_CANCEL_DATE, $cancelDate, $comparison);
    }

    /**
     * Filter the query on the cancel_reason column
     *
     * Example usage:
     * <code>
     * $query->filterByCancelReason('fooValue');   // WHERE cancel_reason = 'fooValue'
     * $query->filterByCancelReason('%fooValue%', Criteria::LIKE); // WHERE cancel_reason LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cancelReason The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByCancelReason($cancelReason = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cancelReason)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_CANCEL_REASON, $cancelReason, $comparison);
    }

    /**
     * Filter the query on the encounter_class_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterClassNr(1234); // WHERE encounter_class_nr = 1234
     * $query->filterByEncounterClassNr(array(12, 34)); // WHERE encounter_class_nr IN (12, 34)
     * $query->filterByEncounterClassNr(array('min' => 12)); // WHERE encounter_class_nr > 12
     * </code>
     *
     * @param     mixed $encounterClassNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByEncounterClassNr($encounterClassNr = null, $comparison = null)
    {
        if (is_array($encounterClassNr)) {
            $useMinMax = false;
            if (isset($encounterClassNr['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_ENCOUNTER_CLASS_NR, $encounterClassNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterClassNr['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_ENCOUNTER_CLASS_NR, $encounterClassNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_ENCOUNTER_CLASS_NR, $encounterClassNr, $comparison);
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareAppointmentTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAppointmentTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareAppointment $careAppointment Object to remove from the list of results
     *
     * @return $this|ChildCareAppointmentQuery The current query, for fluid interface
     */
    public function prune($careAppointment = null)
    {
        if ($careAppointment) {
            $this->addUsingAlias(CareAppointmentTableMap::COL_NR, $careAppointment->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_appointment table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareAppointmentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareAppointmentTableMap::clearInstancePool();
            CareAppointmentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareAppointmentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareAppointmentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareAppointmentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareAppointmentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareAppointmentQuery
