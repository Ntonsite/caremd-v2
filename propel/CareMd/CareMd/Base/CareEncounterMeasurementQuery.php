<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterMeasurement as ChildCareEncounterMeasurement;
use CareMd\CareMd\CareEncounterMeasurementQuery as ChildCareEncounterMeasurementQuery;
use CareMd\CareMd\Map\CareEncounterMeasurementTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_measurement' table.
 *
 *
 *
 * @method     ChildCareEncounterMeasurementQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareEncounterMeasurementQuery orderByMsrDate($order = Criteria::ASC) Order by the msr_date column
 * @method     ChildCareEncounterMeasurementQuery orderByMsrTime($order = Criteria::ASC) Order by the msr_time column
 * @method     ChildCareEncounterMeasurementQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterMeasurementQuery orderByMsrTypeNr($order = Criteria::ASC) Order by the msr_type_nr column
 * @method     ChildCareEncounterMeasurementQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     ChildCareEncounterMeasurementQuery orderByUnitNr($order = Criteria::ASC) Order by the unit_nr column
 * @method     ChildCareEncounterMeasurementQuery orderByUnitTypeNr($order = Criteria::ASC) Order by the unit_type_nr column
 * @method     ChildCareEncounterMeasurementQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareEncounterMeasurementQuery orderByMeasuredBy($order = Criteria::ASC) Order by the measured_by column
 * @method     ChildCareEncounterMeasurementQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterMeasurementQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterMeasurementQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterMeasurementQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterMeasurementQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterMeasurementQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterMeasurementQuery groupByNr() Group by the nr column
 * @method     ChildCareEncounterMeasurementQuery groupByMsrDate() Group by the msr_date column
 * @method     ChildCareEncounterMeasurementQuery groupByMsrTime() Group by the msr_time column
 * @method     ChildCareEncounterMeasurementQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterMeasurementQuery groupByMsrTypeNr() Group by the msr_type_nr column
 * @method     ChildCareEncounterMeasurementQuery groupByValue() Group by the value column
 * @method     ChildCareEncounterMeasurementQuery groupByUnitNr() Group by the unit_nr column
 * @method     ChildCareEncounterMeasurementQuery groupByUnitTypeNr() Group by the unit_type_nr column
 * @method     ChildCareEncounterMeasurementQuery groupByNotes() Group by the notes column
 * @method     ChildCareEncounterMeasurementQuery groupByMeasuredBy() Group by the measured_by column
 * @method     ChildCareEncounterMeasurementQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterMeasurementQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterMeasurementQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterMeasurementQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterMeasurementQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterMeasurementQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterMeasurementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterMeasurementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterMeasurementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterMeasurementQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterMeasurementQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterMeasurementQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterMeasurement findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterMeasurement matching the query
 * @method     ChildCareEncounterMeasurement findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterMeasurement matching the query, or a new ChildCareEncounterMeasurement object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterMeasurement findOneByNr(int $nr) Return the first ChildCareEncounterMeasurement filtered by the nr column
 * @method     ChildCareEncounterMeasurement findOneByMsrDate(string $msr_date) Return the first ChildCareEncounterMeasurement filtered by the msr_date column
 * @method     ChildCareEncounterMeasurement findOneByMsrTime(string $msr_time) Return the first ChildCareEncounterMeasurement filtered by the msr_time column
 * @method     ChildCareEncounterMeasurement findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterMeasurement filtered by the encounter_nr column
 * @method     ChildCareEncounterMeasurement findOneByMsrTypeNr(int $msr_type_nr) Return the first ChildCareEncounterMeasurement filtered by the msr_type_nr column
 * @method     ChildCareEncounterMeasurement findOneByValue(string $value) Return the first ChildCareEncounterMeasurement filtered by the value column
 * @method     ChildCareEncounterMeasurement findOneByUnitNr(int $unit_nr) Return the first ChildCareEncounterMeasurement filtered by the unit_nr column
 * @method     ChildCareEncounterMeasurement findOneByUnitTypeNr(int $unit_type_nr) Return the first ChildCareEncounterMeasurement filtered by the unit_type_nr column
 * @method     ChildCareEncounterMeasurement findOneByNotes(string $notes) Return the first ChildCareEncounterMeasurement filtered by the notes column
 * @method     ChildCareEncounterMeasurement findOneByMeasuredBy(string $measured_by) Return the first ChildCareEncounterMeasurement filtered by the measured_by column
 * @method     ChildCareEncounterMeasurement findOneByStatus(string $status) Return the first ChildCareEncounterMeasurement filtered by the status column
 * @method     ChildCareEncounterMeasurement findOneByHistory(string $history) Return the first ChildCareEncounterMeasurement filtered by the history column
 * @method     ChildCareEncounterMeasurement findOneByModifyId(string $modify_id) Return the first ChildCareEncounterMeasurement filtered by the modify_id column
 * @method     ChildCareEncounterMeasurement findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterMeasurement filtered by the modify_time column
 * @method     ChildCareEncounterMeasurement findOneByCreateId(string $create_id) Return the first ChildCareEncounterMeasurement filtered by the create_id column
 * @method     ChildCareEncounterMeasurement findOneByCreateTime(string $create_time) Return the first ChildCareEncounterMeasurement filtered by the create_time column *

 * @method     ChildCareEncounterMeasurement requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterMeasurement by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterMeasurement matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterMeasurement requireOneByNr(int $nr) Return the first ChildCareEncounterMeasurement filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByMsrDate(string $msr_date) Return the first ChildCareEncounterMeasurement filtered by the msr_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByMsrTime(string $msr_time) Return the first ChildCareEncounterMeasurement filtered by the msr_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterMeasurement filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByMsrTypeNr(int $msr_type_nr) Return the first ChildCareEncounterMeasurement filtered by the msr_type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByValue(string $value) Return the first ChildCareEncounterMeasurement filtered by the value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByUnitNr(int $unit_nr) Return the first ChildCareEncounterMeasurement filtered by the unit_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByUnitTypeNr(int $unit_type_nr) Return the first ChildCareEncounterMeasurement filtered by the unit_type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByNotes(string $notes) Return the first ChildCareEncounterMeasurement filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByMeasuredBy(string $measured_by) Return the first ChildCareEncounterMeasurement filtered by the measured_by column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByStatus(string $status) Return the first ChildCareEncounterMeasurement filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByHistory(string $history) Return the first ChildCareEncounterMeasurement filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterMeasurement filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterMeasurement filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByCreateId(string $create_id) Return the first ChildCareEncounterMeasurement filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterMeasurement requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterMeasurement filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterMeasurement objects based on current ModelCriteria
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByNr(int $nr) Return ChildCareEncounterMeasurement objects filtered by the nr column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByMsrDate(string $msr_date) Return ChildCareEncounterMeasurement objects filtered by the msr_date column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByMsrTime(string $msr_time) Return ChildCareEncounterMeasurement objects filtered by the msr_time column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterMeasurement objects filtered by the encounter_nr column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByMsrTypeNr(int $msr_type_nr) Return ChildCareEncounterMeasurement objects filtered by the msr_type_nr column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByValue(string $value) Return ChildCareEncounterMeasurement objects filtered by the value column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByUnitNr(int $unit_nr) Return ChildCareEncounterMeasurement objects filtered by the unit_nr column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByUnitTypeNr(int $unit_type_nr) Return ChildCareEncounterMeasurement objects filtered by the unit_type_nr column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByNotes(string $notes) Return ChildCareEncounterMeasurement objects filtered by the notes column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByMeasuredBy(string $measured_by) Return ChildCareEncounterMeasurement objects filtered by the measured_by column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterMeasurement objects filtered by the status column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterMeasurement objects filtered by the history column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterMeasurement objects filtered by the modify_id column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterMeasurement objects filtered by the modify_time column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterMeasurement objects filtered by the create_id column
 * @method     ChildCareEncounterMeasurement[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterMeasurement objects filtered by the create_time column
 * @method     ChildCareEncounterMeasurement[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterMeasurementQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterMeasurementQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterMeasurement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterMeasurementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterMeasurementQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterMeasurementQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterMeasurementQuery();
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
     * @return ChildCareEncounterMeasurement|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterMeasurementTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterMeasurementTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterMeasurement A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, msr_date, msr_time, encounter_nr, msr_type_nr, value, unit_nr, unit_type_nr, notes, measured_by, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_measurement WHERE nr = :p0';
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
            /** @var ChildCareEncounterMeasurement $obj */
            $obj = new ChildCareEncounterMeasurement();
            $obj->hydrate($row);
            CareEncounterMeasurementTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterMeasurement|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the msr_date column
     *
     * Example usage:
     * <code>
     * $query->filterByMsrDate('2011-03-14'); // WHERE msr_date = '2011-03-14'
     * $query->filterByMsrDate('now'); // WHERE msr_date = '2011-03-14'
     * $query->filterByMsrDate(array('max' => 'yesterday')); // WHERE msr_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $msrDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByMsrDate($msrDate = null, $comparison = null)
    {
        if (is_array($msrDate)) {
            $useMinMax = false;
            if (isset($msrDate['min'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MSR_DATE, $msrDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($msrDate['max'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MSR_DATE, $msrDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MSR_DATE, $msrDate, $comparison);
    }

    /**
     * Filter the query on the msr_time column
     *
     * Example usage:
     * <code>
     * $query->filterByMsrTime('fooValue');   // WHERE msr_time = 'fooValue'
     * $query->filterByMsrTime('%fooValue%', Criteria::LIKE); // WHERE msr_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $msrTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByMsrTime($msrTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($msrTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MSR_TIME, $msrTime, $comparison);
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
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the msr_type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByMsrTypeNr(1234); // WHERE msr_type_nr = 1234
     * $query->filterByMsrTypeNr(array(12, 34)); // WHERE msr_type_nr IN (12, 34)
     * $query->filterByMsrTypeNr(array('min' => 12)); // WHERE msr_type_nr > 12
     * </code>
     *
     * @param     mixed $msrTypeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByMsrTypeNr($msrTypeNr = null, $comparison = null)
    {
        if (is_array($msrTypeNr)) {
            $useMinMax = false;
            if (isset($msrTypeNr['min'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MSR_TYPE_NR, $msrTypeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($msrTypeNr['max'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MSR_TYPE_NR, $msrTypeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MSR_TYPE_NR, $msrTypeNr, $comparison);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
     * $query->filterByValue('%fooValue%', Criteria::LIKE); // WHERE value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $value The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByValue($value = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($value)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_VALUE, $value, $comparison);
    }

    /**
     * Filter the query on the unit_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitNr(1234); // WHERE unit_nr = 1234
     * $query->filterByUnitNr(array(12, 34)); // WHERE unit_nr IN (12, 34)
     * $query->filterByUnitNr(array('min' => 12)); // WHERE unit_nr > 12
     * </code>
     *
     * @param     mixed $unitNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByUnitNr($unitNr = null, $comparison = null)
    {
        if (is_array($unitNr)) {
            $useMinMax = false;
            if (isset($unitNr['min'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_UNIT_NR, $unitNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitNr['max'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_UNIT_NR, $unitNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_UNIT_NR, $unitNr, $comparison);
    }

    /**
     * Filter the query on the unit_type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitTypeNr(1234); // WHERE unit_type_nr = 1234
     * $query->filterByUnitTypeNr(array(12, 34)); // WHERE unit_type_nr IN (12, 34)
     * $query->filterByUnitTypeNr(array('min' => 12)); // WHERE unit_type_nr > 12
     * </code>
     *
     * @param     mixed $unitTypeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByUnitTypeNr($unitTypeNr = null, $comparison = null)
    {
        if (is_array($unitTypeNr)) {
            $useMinMax = false;
            if (isset($unitTypeNr['min'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_UNIT_TYPE_NR, $unitTypeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitTypeNr['max'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_UNIT_TYPE_NR, $unitTypeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_UNIT_TYPE_NR, $unitTypeNr, $comparison);
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
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the measured_by column
     *
     * Example usage:
     * <code>
     * $query->filterByMeasuredBy('fooValue');   // WHERE measured_by = 'fooValue'
     * $query->filterByMeasuredBy('%fooValue%', Criteria::LIKE); // WHERE measured_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $measuredBy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByMeasuredBy($measuredBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($measuredBy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MEASURED_BY, $measuredBy, $comparison);
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
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterMeasurement $careEncounterMeasurement Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterMeasurementQuery The current query, for fluid interface
     */
    public function prune($careEncounterMeasurement = null)
    {
        if ($careEncounterMeasurement) {
            $this->addUsingAlias(CareEncounterMeasurementTableMap::COL_NR, $careEncounterMeasurement->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_measurement table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterMeasurementTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterMeasurementTableMap::clearInstancePool();
            CareEncounterMeasurementTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterMeasurementTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterMeasurementTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterMeasurementTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterMeasurementTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterMeasurementQuery
