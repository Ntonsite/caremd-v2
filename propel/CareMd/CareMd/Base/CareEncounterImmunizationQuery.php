<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterImmunization as ChildCareEncounterImmunization;
use CareMd\CareMd\CareEncounterImmunizationQuery as ChildCareEncounterImmunizationQuery;
use CareMd\CareMd\Map\CareEncounterImmunizationTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_immunization' table.
 *
 *
 *
 * @method     ChildCareEncounterImmunizationQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareEncounterImmunizationQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterImmunizationQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareEncounterImmunizationQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareEncounterImmunizationQuery orderByMedicine($order = Criteria::ASC) Order by the medicine column
 * @method     ChildCareEncounterImmunizationQuery orderByDosage($order = Criteria::ASC) Order by the dosage column
 * @method     ChildCareEncounterImmunizationQuery orderByApplicationTypeNr($order = Criteria::ASC) Order by the application_type_nr column
 * @method     ChildCareEncounterImmunizationQuery orderByApplicationBy($order = Criteria::ASC) Order by the application_by column
 * @method     ChildCareEncounterImmunizationQuery orderByTiter($order = Criteria::ASC) Order by the titer column
 * @method     ChildCareEncounterImmunizationQuery orderByRefreshDate($order = Criteria::ASC) Order by the refresh_date column
 * @method     ChildCareEncounterImmunizationQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareEncounterImmunizationQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterImmunizationQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterImmunizationQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterImmunizationQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterImmunizationQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterImmunizationQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterImmunizationQuery groupByNr() Group by the nr column
 * @method     ChildCareEncounterImmunizationQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterImmunizationQuery groupByDate() Group by the date column
 * @method     ChildCareEncounterImmunizationQuery groupByType() Group by the type column
 * @method     ChildCareEncounterImmunizationQuery groupByMedicine() Group by the medicine column
 * @method     ChildCareEncounterImmunizationQuery groupByDosage() Group by the dosage column
 * @method     ChildCareEncounterImmunizationQuery groupByApplicationTypeNr() Group by the application_type_nr column
 * @method     ChildCareEncounterImmunizationQuery groupByApplicationBy() Group by the application_by column
 * @method     ChildCareEncounterImmunizationQuery groupByTiter() Group by the titer column
 * @method     ChildCareEncounterImmunizationQuery groupByRefreshDate() Group by the refresh_date column
 * @method     ChildCareEncounterImmunizationQuery groupByNotes() Group by the notes column
 * @method     ChildCareEncounterImmunizationQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterImmunizationQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterImmunizationQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterImmunizationQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterImmunizationQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterImmunizationQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterImmunizationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterImmunizationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterImmunizationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterImmunizationQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterImmunizationQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterImmunizationQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterImmunization findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterImmunization matching the query
 * @method     ChildCareEncounterImmunization findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterImmunization matching the query, or a new ChildCareEncounterImmunization object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterImmunization findOneByNr(int $nr) Return the first ChildCareEncounterImmunization filtered by the nr column
 * @method     ChildCareEncounterImmunization findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterImmunization filtered by the encounter_nr column
 * @method     ChildCareEncounterImmunization findOneByDate(string $date) Return the first ChildCareEncounterImmunization filtered by the date column
 * @method     ChildCareEncounterImmunization findOneByType(string $type) Return the first ChildCareEncounterImmunization filtered by the type column
 * @method     ChildCareEncounterImmunization findOneByMedicine(string $medicine) Return the first ChildCareEncounterImmunization filtered by the medicine column
 * @method     ChildCareEncounterImmunization findOneByDosage(string $dosage) Return the first ChildCareEncounterImmunization filtered by the dosage column
 * @method     ChildCareEncounterImmunization findOneByApplicationTypeNr(int $application_type_nr) Return the first ChildCareEncounterImmunization filtered by the application_type_nr column
 * @method     ChildCareEncounterImmunization findOneByApplicationBy(string $application_by) Return the first ChildCareEncounterImmunization filtered by the application_by column
 * @method     ChildCareEncounterImmunization findOneByTiter(string $titer) Return the first ChildCareEncounterImmunization filtered by the titer column
 * @method     ChildCareEncounterImmunization findOneByRefreshDate(string $refresh_date) Return the first ChildCareEncounterImmunization filtered by the refresh_date column
 * @method     ChildCareEncounterImmunization findOneByNotes(string $notes) Return the first ChildCareEncounterImmunization filtered by the notes column
 * @method     ChildCareEncounterImmunization findOneByStatus(string $status) Return the first ChildCareEncounterImmunization filtered by the status column
 * @method     ChildCareEncounterImmunization findOneByHistory(string $history) Return the first ChildCareEncounterImmunization filtered by the history column
 * @method     ChildCareEncounterImmunization findOneByModifyId(string $modify_id) Return the first ChildCareEncounterImmunization filtered by the modify_id column
 * @method     ChildCareEncounterImmunization findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterImmunization filtered by the modify_time column
 * @method     ChildCareEncounterImmunization findOneByCreateId(string $create_id) Return the first ChildCareEncounterImmunization filtered by the create_id column
 * @method     ChildCareEncounterImmunization findOneByCreateTime(string $create_time) Return the first ChildCareEncounterImmunization filtered by the create_time column *

 * @method     ChildCareEncounterImmunization requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterImmunization by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterImmunization matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterImmunization requireOneByNr(int $nr) Return the first ChildCareEncounterImmunization filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterImmunization filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByDate(string $date) Return the first ChildCareEncounterImmunization filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByType(string $type) Return the first ChildCareEncounterImmunization filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByMedicine(string $medicine) Return the first ChildCareEncounterImmunization filtered by the medicine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByDosage(string $dosage) Return the first ChildCareEncounterImmunization filtered by the dosage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByApplicationTypeNr(int $application_type_nr) Return the first ChildCareEncounterImmunization filtered by the application_type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByApplicationBy(string $application_by) Return the first ChildCareEncounterImmunization filtered by the application_by column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByTiter(string $titer) Return the first ChildCareEncounterImmunization filtered by the titer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByRefreshDate(string $refresh_date) Return the first ChildCareEncounterImmunization filtered by the refresh_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByNotes(string $notes) Return the first ChildCareEncounterImmunization filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByStatus(string $status) Return the first ChildCareEncounterImmunization filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByHistory(string $history) Return the first ChildCareEncounterImmunization filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterImmunization filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterImmunization filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByCreateId(string $create_id) Return the first ChildCareEncounterImmunization filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImmunization requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterImmunization filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterImmunization[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterImmunization objects based on current ModelCriteria
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByNr(int $nr) Return ChildCareEncounterImmunization objects filtered by the nr column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterImmunization objects filtered by the encounter_nr column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByDate(string $date) Return ChildCareEncounterImmunization objects filtered by the date column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByType(string $type) Return ChildCareEncounterImmunization objects filtered by the type column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByMedicine(string $medicine) Return ChildCareEncounterImmunization objects filtered by the medicine column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByDosage(string $dosage) Return ChildCareEncounterImmunization objects filtered by the dosage column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByApplicationTypeNr(int $application_type_nr) Return ChildCareEncounterImmunization objects filtered by the application_type_nr column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByApplicationBy(string $application_by) Return ChildCareEncounterImmunization objects filtered by the application_by column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByTiter(string $titer) Return ChildCareEncounterImmunization objects filtered by the titer column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByRefreshDate(string $refresh_date) Return ChildCareEncounterImmunization objects filtered by the refresh_date column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByNotes(string $notes) Return ChildCareEncounterImmunization objects filtered by the notes column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterImmunization objects filtered by the status column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterImmunization objects filtered by the history column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterImmunization objects filtered by the modify_id column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterImmunization objects filtered by the modify_time column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterImmunization objects filtered by the create_id column
 * @method     ChildCareEncounterImmunization[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterImmunization objects filtered by the create_time column
 * @method     ChildCareEncounterImmunization[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterImmunizationQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterImmunizationQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterImmunization', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterImmunizationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterImmunizationQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterImmunizationQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterImmunizationQuery();
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
     * @return ChildCareEncounterImmunization|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterImmunizationTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterImmunizationTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterImmunization A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, encounter_nr, date, type, medicine, dosage, application_type_nr, application_by, titer, refresh_date, notes, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_immunization WHERE nr = :p0';
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
            /** @var ChildCareEncounterImmunization $obj */
            $obj = new ChildCareEncounterImmunization();
            $obj->hydrate($row);
            CareEncounterImmunizationTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterImmunization|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%', Criteria::LIKE); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the medicine column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicine('fooValue');   // WHERE medicine = 'fooValue'
     * $query->filterByMedicine('%fooValue%', Criteria::LIKE); // WHERE medicine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicine The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByMedicine($medicine = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicine)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_MEDICINE, $medicine, $comparison);
    }

    /**
     * Filter the query on the dosage column
     *
     * Example usage:
     * <code>
     * $query->filterByDosage('fooValue');   // WHERE dosage = 'fooValue'
     * $query->filterByDosage('%fooValue%', Criteria::LIKE); // WHERE dosage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dosage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByDosage($dosage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dosage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_DOSAGE, $dosage, $comparison);
    }

    /**
     * Filter the query on the application_type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByApplicationTypeNr(1234); // WHERE application_type_nr = 1234
     * $query->filterByApplicationTypeNr(array(12, 34)); // WHERE application_type_nr IN (12, 34)
     * $query->filterByApplicationTypeNr(array('min' => 12)); // WHERE application_type_nr > 12
     * </code>
     *
     * @param     mixed $applicationTypeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByApplicationTypeNr($applicationTypeNr = null, $comparison = null)
    {
        if (is_array($applicationTypeNr)) {
            $useMinMax = false;
            if (isset($applicationTypeNr['min'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_APPLICATION_TYPE_NR, $applicationTypeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($applicationTypeNr['max'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_APPLICATION_TYPE_NR, $applicationTypeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_APPLICATION_TYPE_NR, $applicationTypeNr, $comparison);
    }

    /**
     * Filter the query on the application_by column
     *
     * Example usage:
     * <code>
     * $query->filterByApplicationBy('fooValue');   // WHERE application_by = 'fooValue'
     * $query->filterByApplicationBy('%fooValue%', Criteria::LIKE); // WHERE application_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $applicationBy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByApplicationBy($applicationBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($applicationBy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_APPLICATION_BY, $applicationBy, $comparison);
    }

    /**
     * Filter the query on the titer column
     *
     * Example usage:
     * <code>
     * $query->filterByTiter('fooValue');   // WHERE titer = 'fooValue'
     * $query->filterByTiter('%fooValue%', Criteria::LIKE); // WHERE titer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByTiter($titer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_TITER, $titer, $comparison);
    }

    /**
     * Filter the query on the refresh_date column
     *
     * Example usage:
     * <code>
     * $query->filterByRefreshDate('2011-03-14'); // WHERE refresh_date = '2011-03-14'
     * $query->filterByRefreshDate('now'); // WHERE refresh_date = '2011-03-14'
     * $query->filterByRefreshDate(array('max' => 'yesterday')); // WHERE refresh_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $refreshDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByRefreshDate($refreshDate = null, $comparison = null)
    {
        if (is_array($refreshDate)) {
            $useMinMax = false;
            if (isset($refreshDate['min'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_REFRESH_DATE, $refreshDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refreshDate['max'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_REFRESH_DATE, $refreshDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_REFRESH_DATE, $refreshDate, $comparison);
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_NOTES, $notes, $comparison);
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterImmunization $careEncounterImmunization Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterImmunizationQuery The current query, for fluid interface
     */
    public function prune($careEncounterImmunization = null)
    {
        if ($careEncounterImmunization) {
            $this->addUsingAlias(CareEncounterImmunizationTableMap::COL_NR, $careEncounterImmunization->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_immunization table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterImmunizationTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterImmunizationTableMap::clearInstancePool();
            CareEncounterImmunizationTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterImmunizationTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterImmunizationTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterImmunizationTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterImmunizationTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterImmunizationQuery
