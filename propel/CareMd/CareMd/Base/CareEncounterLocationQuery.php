<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterLocation as ChildCareEncounterLocation;
use CareMd\CareMd\CareEncounterLocationQuery as ChildCareEncounterLocationQuery;
use CareMd\CareMd\Map\CareEncounterLocationTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_location' table.
 *
 *
 *
 * @method     ChildCareEncounterLocationQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareEncounterLocationQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterLocationQuery orderByTypeNr($order = Criteria::ASC) Order by the type_nr column
 * @method     ChildCareEncounterLocationQuery orderByLocationNr($order = Criteria::ASC) Order by the location_nr column
 * @method     ChildCareEncounterLocationQuery orderByGroupNr($order = Criteria::ASC) Order by the group_nr column
 * @method     ChildCareEncounterLocationQuery orderByDateFrom($order = Criteria::ASC) Order by the date_from column
 * @method     ChildCareEncounterLocationQuery orderByDateTo($order = Criteria::ASC) Order by the date_to column
 * @method     ChildCareEncounterLocationQuery orderByTimeFrom($order = Criteria::ASC) Order by the time_from column
 * @method     ChildCareEncounterLocationQuery orderByTimeTo($order = Criteria::ASC) Order by the time_to column
 * @method     ChildCareEncounterLocationQuery orderByDischargeTypeNr($order = Criteria::ASC) Order by the discharge_type_nr column
 * @method     ChildCareEncounterLocationQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterLocationQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterLocationQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterLocationQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterLocationQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterLocationQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterLocationQuery groupByNr() Group by the nr column
 * @method     ChildCareEncounterLocationQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterLocationQuery groupByTypeNr() Group by the type_nr column
 * @method     ChildCareEncounterLocationQuery groupByLocationNr() Group by the location_nr column
 * @method     ChildCareEncounterLocationQuery groupByGroupNr() Group by the group_nr column
 * @method     ChildCareEncounterLocationQuery groupByDateFrom() Group by the date_from column
 * @method     ChildCareEncounterLocationQuery groupByDateTo() Group by the date_to column
 * @method     ChildCareEncounterLocationQuery groupByTimeFrom() Group by the time_from column
 * @method     ChildCareEncounterLocationQuery groupByTimeTo() Group by the time_to column
 * @method     ChildCareEncounterLocationQuery groupByDischargeTypeNr() Group by the discharge_type_nr column
 * @method     ChildCareEncounterLocationQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterLocationQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterLocationQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterLocationQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterLocationQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterLocationQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterLocationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterLocationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterLocationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterLocationQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterLocationQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterLocationQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterLocation findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterLocation matching the query
 * @method     ChildCareEncounterLocation findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterLocation matching the query, or a new ChildCareEncounterLocation object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterLocation findOneByNr(int $nr) Return the first ChildCareEncounterLocation filtered by the nr column
 * @method     ChildCareEncounterLocation findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterLocation filtered by the encounter_nr column
 * @method     ChildCareEncounterLocation findOneByTypeNr(int $type_nr) Return the first ChildCareEncounterLocation filtered by the type_nr column
 * @method     ChildCareEncounterLocation findOneByLocationNr(int $location_nr) Return the first ChildCareEncounterLocation filtered by the location_nr column
 * @method     ChildCareEncounterLocation findOneByGroupNr(int $group_nr) Return the first ChildCareEncounterLocation filtered by the group_nr column
 * @method     ChildCareEncounterLocation findOneByDateFrom(string $date_from) Return the first ChildCareEncounterLocation filtered by the date_from column
 * @method     ChildCareEncounterLocation findOneByDateTo(string $date_to) Return the first ChildCareEncounterLocation filtered by the date_to column
 * @method     ChildCareEncounterLocation findOneByTimeFrom(string $time_from) Return the first ChildCareEncounterLocation filtered by the time_from column
 * @method     ChildCareEncounterLocation findOneByTimeTo(string $time_to) Return the first ChildCareEncounterLocation filtered by the time_to column
 * @method     ChildCareEncounterLocation findOneByDischargeTypeNr(int $discharge_type_nr) Return the first ChildCareEncounterLocation filtered by the discharge_type_nr column
 * @method     ChildCareEncounterLocation findOneByStatus(string $status) Return the first ChildCareEncounterLocation filtered by the status column
 * @method     ChildCareEncounterLocation findOneByHistory(string $history) Return the first ChildCareEncounterLocation filtered by the history column
 * @method     ChildCareEncounterLocation findOneByModifyId(string $modify_id) Return the first ChildCareEncounterLocation filtered by the modify_id column
 * @method     ChildCareEncounterLocation findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterLocation filtered by the modify_time column
 * @method     ChildCareEncounterLocation findOneByCreateId(string $create_id) Return the first ChildCareEncounterLocation filtered by the create_id column
 * @method     ChildCareEncounterLocation findOneByCreateTime(string $create_time) Return the first ChildCareEncounterLocation filtered by the create_time column *

 * @method     ChildCareEncounterLocation requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterLocation by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterLocation matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterLocation requireOneByNr(int $nr) Return the first ChildCareEncounterLocation filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterLocation filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByTypeNr(int $type_nr) Return the first ChildCareEncounterLocation filtered by the type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByLocationNr(int $location_nr) Return the first ChildCareEncounterLocation filtered by the location_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByGroupNr(int $group_nr) Return the first ChildCareEncounterLocation filtered by the group_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByDateFrom(string $date_from) Return the first ChildCareEncounterLocation filtered by the date_from column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByDateTo(string $date_to) Return the first ChildCareEncounterLocation filtered by the date_to column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByTimeFrom(string $time_from) Return the first ChildCareEncounterLocation filtered by the time_from column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByTimeTo(string $time_to) Return the first ChildCareEncounterLocation filtered by the time_to column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByDischargeTypeNr(int $discharge_type_nr) Return the first ChildCareEncounterLocation filtered by the discharge_type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByStatus(string $status) Return the first ChildCareEncounterLocation filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByHistory(string $history) Return the first ChildCareEncounterLocation filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterLocation filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterLocation filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByCreateId(string $create_id) Return the first ChildCareEncounterLocation filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterLocation requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterLocation filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterLocation[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterLocation objects based on current ModelCriteria
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByNr(int $nr) Return ChildCareEncounterLocation objects filtered by the nr column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterLocation objects filtered by the encounter_nr column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByTypeNr(int $type_nr) Return ChildCareEncounterLocation objects filtered by the type_nr column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByLocationNr(int $location_nr) Return ChildCareEncounterLocation objects filtered by the location_nr column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByGroupNr(int $group_nr) Return ChildCareEncounterLocation objects filtered by the group_nr column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByDateFrom(string $date_from) Return ChildCareEncounterLocation objects filtered by the date_from column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByDateTo(string $date_to) Return ChildCareEncounterLocation objects filtered by the date_to column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByTimeFrom(string $time_from) Return ChildCareEncounterLocation objects filtered by the time_from column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByTimeTo(string $time_to) Return ChildCareEncounterLocation objects filtered by the time_to column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByDischargeTypeNr(int $discharge_type_nr) Return ChildCareEncounterLocation objects filtered by the discharge_type_nr column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterLocation objects filtered by the status column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterLocation objects filtered by the history column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterLocation objects filtered by the modify_id column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterLocation objects filtered by the modify_time column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterLocation objects filtered by the create_id column
 * @method     ChildCareEncounterLocation[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterLocation objects filtered by the create_time column
 * @method     ChildCareEncounterLocation[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterLocationQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterLocationQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterLocation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterLocationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterLocationQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterLocationQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterLocationQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$nr, $location_nr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareEncounterLocation|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterLocationTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterLocationTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCareEncounterLocation A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, encounter_nr, type_nr, location_nr, group_nr, date_from, date_to, time_from, time_to, discharge_type_nr, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_location WHERE nr = :p0 AND location_nr = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareEncounterLocation $obj */
            $obj = new ChildCareEncounterLocation();
            $obj->hydrate($row);
            CareEncounterLocationTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCareEncounterLocation|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareEncounterLocationTableMap::COL_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareEncounterLocationTableMap::COL_LOCATION_NR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareEncounterLocationTableMap::COL_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareEncounterLocationTableMap::COL_LOCATION_NR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByTypeNr($typeNr = null, $comparison = null)
    {
        if (is_array($typeNr)) {
            $useMinMax = false;
            if (isset($typeNr['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_TYPE_NR, $typeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeNr['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_TYPE_NR, $typeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_TYPE_NR, $typeNr, $comparison);
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByLocationNr($locationNr = null, $comparison = null)
    {
        if (is_array($locationNr)) {
            $useMinMax = false;
            if (isset($locationNr['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_LOCATION_NR, $locationNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationNr['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_LOCATION_NR, $locationNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_LOCATION_NR, $locationNr, $comparison);
    }

    /**
     * Filter the query on the group_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupNr(1234); // WHERE group_nr = 1234
     * $query->filterByGroupNr(array(12, 34)); // WHERE group_nr IN (12, 34)
     * $query->filterByGroupNr(array('min' => 12)); // WHERE group_nr > 12
     * </code>
     *
     * @param     mixed $groupNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByGroupNr($groupNr = null, $comparison = null)
    {
        if (is_array($groupNr)) {
            $useMinMax = false;
            if (isset($groupNr['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_GROUP_NR, $groupNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groupNr['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_GROUP_NR, $groupNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_GROUP_NR, $groupNr, $comparison);
    }

    /**
     * Filter the query on the date_from column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFrom('2011-03-14'); // WHERE date_from = '2011-03-14'
     * $query->filterByDateFrom('now'); // WHERE date_from = '2011-03-14'
     * $query->filterByDateFrom(array('max' => 'yesterday')); // WHERE date_from > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateFrom The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByDateFrom($dateFrom = null, $comparison = null)
    {
        if (is_array($dateFrom)) {
            $useMinMax = false;
            if (isset($dateFrom['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_DATE_FROM, $dateFrom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFrom['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_DATE_FROM, $dateFrom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_DATE_FROM, $dateFrom, $comparison);
    }

    /**
     * Filter the query on the date_to column
     *
     * Example usage:
     * <code>
     * $query->filterByDateTo('2011-03-14'); // WHERE date_to = '2011-03-14'
     * $query->filterByDateTo('now'); // WHERE date_to = '2011-03-14'
     * $query->filterByDateTo(array('max' => 'yesterday')); // WHERE date_to > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateTo The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByDateTo($dateTo = null, $comparison = null)
    {
        if (is_array($dateTo)) {
            $useMinMax = false;
            if (isset($dateTo['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_DATE_TO, $dateTo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateTo['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_DATE_TO, $dateTo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_DATE_TO, $dateTo, $comparison);
    }

    /**
     * Filter the query on the time_from column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeFrom('2011-03-14'); // WHERE time_from = '2011-03-14'
     * $query->filterByTimeFrom('now'); // WHERE time_from = '2011-03-14'
     * $query->filterByTimeFrom(array('max' => 'yesterday')); // WHERE time_from > '2011-03-13'
     * </code>
     *
     * @param     mixed $timeFrom The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByTimeFrom($timeFrom = null, $comparison = null)
    {
        if (is_array($timeFrom)) {
            $useMinMax = false;
            if (isset($timeFrom['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_TIME_FROM, $timeFrom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeFrom['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_TIME_FROM, $timeFrom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_TIME_FROM, $timeFrom, $comparison);
    }

    /**
     * Filter the query on the time_to column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeTo('2011-03-14'); // WHERE time_to = '2011-03-14'
     * $query->filterByTimeTo('now'); // WHERE time_to = '2011-03-14'
     * $query->filterByTimeTo(array('max' => 'yesterday')); // WHERE time_to > '2011-03-13'
     * </code>
     *
     * @param     mixed $timeTo The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByTimeTo($timeTo = null, $comparison = null)
    {
        if (is_array($timeTo)) {
            $useMinMax = false;
            if (isset($timeTo['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_TIME_TO, $timeTo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeTo['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_TIME_TO, $timeTo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_TIME_TO, $timeTo, $comparison);
    }

    /**
     * Filter the query on the discharge_type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDischargeTypeNr(1234); // WHERE discharge_type_nr = 1234
     * $query->filterByDischargeTypeNr(array(12, 34)); // WHERE discharge_type_nr IN (12, 34)
     * $query->filterByDischargeTypeNr(array('min' => 12)); // WHERE discharge_type_nr > 12
     * </code>
     *
     * @param     mixed $dischargeTypeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByDischargeTypeNr($dischargeTypeNr = null, $comparison = null)
    {
        if (is_array($dischargeTypeNr)) {
            $useMinMax = false;
            if (isset($dischargeTypeNr['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_DISCHARGE_TYPE_NR, $dischargeTypeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dischargeTypeNr['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_DISCHARGE_TYPE_NR, $dischargeTypeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_DISCHARGE_TYPE_NR, $dischargeTypeNr, $comparison);
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterLocationTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterLocationTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterLocation $careEncounterLocation Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterLocationQuery The current query, for fluid interface
     */
    public function prune($careEncounterLocation = null)
    {
        if ($careEncounterLocation) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareEncounterLocationTableMap::COL_NR), $careEncounterLocation->getNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareEncounterLocationTableMap::COL_LOCATION_NR), $careEncounterLocation->getLocationNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_location table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterLocationTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterLocationTableMap::clearInstancePool();
            CareEncounterLocationTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterLocationTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterLocationTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterLocationTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterLocationTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterLocationQuery
