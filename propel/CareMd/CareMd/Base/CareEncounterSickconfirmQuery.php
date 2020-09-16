<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterSickconfirm as ChildCareEncounterSickconfirm;
use CareMd\CareMd\CareEncounterSickconfirmQuery as ChildCareEncounterSickconfirmQuery;
use CareMd\CareMd\Map\CareEncounterSickconfirmTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_sickconfirm' table.
 *
 *
 *
 * @method     ChildCareEncounterSickconfirmQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareEncounterSickconfirmQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterSickconfirmQuery orderByDateConfirm($order = Criteria::ASC) Order by the date_confirm column
 * @method     ChildCareEncounterSickconfirmQuery orderByDateStart($order = Criteria::ASC) Order by the date_start column
 * @method     ChildCareEncounterSickconfirmQuery orderByDateEnd($order = Criteria::ASC) Order by the date_end column
 * @method     ChildCareEncounterSickconfirmQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method     ChildCareEncounterSickconfirmQuery orderByDiagnosis($order = Criteria::ASC) Order by the diagnosis column
 * @method     ChildCareEncounterSickconfirmQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareEncounterSickconfirmQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterSickconfirmQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterSickconfirmQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterSickconfirmQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterSickconfirmQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterSickconfirmQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterSickconfirmQuery groupByNr() Group by the nr column
 * @method     ChildCareEncounterSickconfirmQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterSickconfirmQuery groupByDateConfirm() Group by the date_confirm column
 * @method     ChildCareEncounterSickconfirmQuery groupByDateStart() Group by the date_start column
 * @method     ChildCareEncounterSickconfirmQuery groupByDateEnd() Group by the date_end column
 * @method     ChildCareEncounterSickconfirmQuery groupByDateCreate() Group by the date_create column
 * @method     ChildCareEncounterSickconfirmQuery groupByDiagnosis() Group by the diagnosis column
 * @method     ChildCareEncounterSickconfirmQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareEncounterSickconfirmQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterSickconfirmQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterSickconfirmQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterSickconfirmQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterSickconfirmQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterSickconfirmQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterSickconfirmQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterSickconfirmQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterSickconfirmQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterSickconfirmQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterSickconfirmQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterSickconfirmQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterSickconfirm findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterSickconfirm matching the query
 * @method     ChildCareEncounterSickconfirm findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterSickconfirm matching the query, or a new ChildCareEncounterSickconfirm object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterSickconfirm findOneByNr(int $nr) Return the first ChildCareEncounterSickconfirm filtered by the nr column
 * @method     ChildCareEncounterSickconfirm findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterSickconfirm filtered by the encounter_nr column
 * @method     ChildCareEncounterSickconfirm findOneByDateConfirm(string $date_confirm) Return the first ChildCareEncounterSickconfirm filtered by the date_confirm column
 * @method     ChildCareEncounterSickconfirm findOneByDateStart(string $date_start) Return the first ChildCareEncounterSickconfirm filtered by the date_start column
 * @method     ChildCareEncounterSickconfirm findOneByDateEnd(string $date_end) Return the first ChildCareEncounterSickconfirm filtered by the date_end column
 * @method     ChildCareEncounterSickconfirm findOneByDateCreate(string $date_create) Return the first ChildCareEncounterSickconfirm filtered by the date_create column
 * @method     ChildCareEncounterSickconfirm findOneByDiagnosis(string $diagnosis) Return the first ChildCareEncounterSickconfirm filtered by the diagnosis column
 * @method     ChildCareEncounterSickconfirm findOneByDeptNr(int $dept_nr) Return the first ChildCareEncounterSickconfirm filtered by the dept_nr column
 * @method     ChildCareEncounterSickconfirm findOneByStatus(string $status) Return the first ChildCareEncounterSickconfirm filtered by the status column
 * @method     ChildCareEncounterSickconfirm findOneByHistory(string $history) Return the first ChildCareEncounterSickconfirm filtered by the history column
 * @method     ChildCareEncounterSickconfirm findOneByModifyId(string $modify_id) Return the first ChildCareEncounterSickconfirm filtered by the modify_id column
 * @method     ChildCareEncounterSickconfirm findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterSickconfirm filtered by the modify_time column
 * @method     ChildCareEncounterSickconfirm findOneByCreateId(string $create_id) Return the first ChildCareEncounterSickconfirm filtered by the create_id column
 * @method     ChildCareEncounterSickconfirm findOneByCreateTime(string $create_time) Return the first ChildCareEncounterSickconfirm filtered by the create_time column *

 * @method     ChildCareEncounterSickconfirm requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterSickconfirm by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterSickconfirm matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterSickconfirm requireOneByNr(int $nr) Return the first ChildCareEncounterSickconfirm filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterSickconfirm filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByDateConfirm(string $date_confirm) Return the first ChildCareEncounterSickconfirm filtered by the date_confirm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByDateStart(string $date_start) Return the first ChildCareEncounterSickconfirm filtered by the date_start column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByDateEnd(string $date_end) Return the first ChildCareEncounterSickconfirm filtered by the date_end column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByDateCreate(string $date_create) Return the first ChildCareEncounterSickconfirm filtered by the date_create column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByDiagnosis(string $diagnosis) Return the first ChildCareEncounterSickconfirm filtered by the diagnosis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByDeptNr(int $dept_nr) Return the first ChildCareEncounterSickconfirm filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByStatus(string $status) Return the first ChildCareEncounterSickconfirm filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByHistory(string $history) Return the first ChildCareEncounterSickconfirm filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterSickconfirm filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterSickconfirm filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByCreateId(string $create_id) Return the first ChildCareEncounterSickconfirm filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterSickconfirm requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterSickconfirm filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterSickconfirm objects based on current ModelCriteria
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByNr(int $nr) Return ChildCareEncounterSickconfirm objects filtered by the nr column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterSickconfirm objects filtered by the encounter_nr column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByDateConfirm(string $date_confirm) Return ChildCareEncounterSickconfirm objects filtered by the date_confirm column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByDateStart(string $date_start) Return ChildCareEncounterSickconfirm objects filtered by the date_start column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByDateEnd(string $date_end) Return ChildCareEncounterSickconfirm objects filtered by the date_end column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByDateCreate(string $date_create) Return ChildCareEncounterSickconfirm objects filtered by the date_create column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByDiagnosis(string $diagnosis) Return ChildCareEncounterSickconfirm objects filtered by the diagnosis column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareEncounterSickconfirm objects filtered by the dept_nr column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterSickconfirm objects filtered by the status column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterSickconfirm objects filtered by the history column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterSickconfirm objects filtered by the modify_id column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterSickconfirm objects filtered by the modify_time column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterSickconfirm objects filtered by the create_id column
 * @method     ChildCareEncounterSickconfirm[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterSickconfirm objects filtered by the create_time column
 * @method     ChildCareEncounterSickconfirm[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterSickconfirmQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterSickconfirmQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterSickconfirm', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterSickconfirmQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterSickconfirmQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterSickconfirmQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterSickconfirmQuery();
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
     * @return ChildCareEncounterSickconfirm|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterSickconfirmTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterSickconfirmTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterSickconfirm A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, encounter_nr, date_confirm, date_start, date_end, date_create, diagnosis, dept_nr, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_sickconfirm WHERE nr = :p0';
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
            /** @var ChildCareEncounterSickconfirm $obj */
            $obj = new ChildCareEncounterSickconfirm();
            $obj->hydrate($row);
            CareEncounterSickconfirmTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterSickconfirm|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the date_confirm column
     *
     * Example usage:
     * <code>
     * $query->filterByDateConfirm('2011-03-14'); // WHERE date_confirm = '2011-03-14'
     * $query->filterByDateConfirm('now'); // WHERE date_confirm = '2011-03-14'
     * $query->filterByDateConfirm(array('max' => 'yesterday')); // WHERE date_confirm > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateConfirm The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByDateConfirm($dateConfirm = null, $comparison = null)
    {
        if (is_array($dateConfirm)) {
            $useMinMax = false;
            if (isset($dateConfirm['min'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_CONFIRM, $dateConfirm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateConfirm['max'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_CONFIRM, $dateConfirm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_CONFIRM, $dateConfirm, $comparison);
    }

    /**
     * Filter the query on the date_start column
     *
     * Example usage:
     * <code>
     * $query->filterByDateStart('2011-03-14'); // WHERE date_start = '2011-03-14'
     * $query->filterByDateStart('now'); // WHERE date_start = '2011-03-14'
     * $query->filterByDateStart(array('max' => 'yesterday')); // WHERE date_start > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateStart The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByDateStart($dateStart = null, $comparison = null)
    {
        if (is_array($dateStart)) {
            $useMinMax = false;
            if (isset($dateStart['min'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_START, $dateStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateStart['max'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_START, $dateStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_START, $dateStart, $comparison);
    }

    /**
     * Filter the query on the date_end column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnd('2011-03-14'); // WHERE date_end = '2011-03-14'
     * $query->filterByDateEnd('now'); // WHERE date_end = '2011-03-14'
     * $query->filterByDateEnd(array('max' => 'yesterday')); // WHERE date_end > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEnd The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByDateEnd($dateEnd = null, $comparison = null)
    {
        if (is_array($dateEnd)) {
            $useMinMax = false;
            if (isset($dateEnd['min'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_END, $dateEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnd['max'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_END, $dateEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_END, $dateEnd, $comparison);
    }

    /**
     * Filter the query on the date_create column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreate('2011-03-14'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate('now'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate(array('max' => 'yesterday')); // WHERE date_create > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DATE_CREATE, $dateCreate, $comparison);
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByDiagnosis($diagnosis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DIAGNOSIS, $diagnosis, $comparison);
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_DEPT_NR, $deptNr, $comparison);
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterSickconfirm $careEncounterSickconfirm Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterSickconfirmQuery The current query, for fluid interface
     */
    public function prune($careEncounterSickconfirm = null)
    {
        if ($careEncounterSickconfirm) {
            $this->addUsingAlias(CareEncounterSickconfirmTableMap::COL_NR, $careEncounterSickconfirm->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_sickconfirm table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterSickconfirmTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterSickconfirmTableMap::clearInstancePool();
            CareEncounterSickconfirmTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterSickconfirmTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterSickconfirmTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterSickconfirmTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterSickconfirmTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterSickconfirmQuery
