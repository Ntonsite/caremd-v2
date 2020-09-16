<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterFinancialClass as ChildCareEncounterFinancialClass;
use CareMd\CareMd\CareEncounterFinancialClassQuery as ChildCareEncounterFinancialClassQuery;
use CareMd\CareMd\Map\CareEncounterFinancialClassTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_financial_class' table.
 *
 *
 *
 * @method     ChildCareEncounterFinancialClassQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareEncounterFinancialClassQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterFinancialClassQuery orderByClassNr($order = Criteria::ASC) Order by the class_nr column
 * @method     ChildCareEncounterFinancialClassQuery orderByDateStart($order = Criteria::ASC) Order by the date_start column
 * @method     ChildCareEncounterFinancialClassQuery orderByDateEnd($order = Criteria::ASC) Order by the date_end column
 * @method     ChildCareEncounterFinancialClassQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method     ChildCareEncounterFinancialClassQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterFinancialClassQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterFinancialClassQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterFinancialClassQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterFinancialClassQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterFinancialClassQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterFinancialClassQuery groupByNr() Group by the nr column
 * @method     ChildCareEncounterFinancialClassQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterFinancialClassQuery groupByClassNr() Group by the class_nr column
 * @method     ChildCareEncounterFinancialClassQuery groupByDateStart() Group by the date_start column
 * @method     ChildCareEncounterFinancialClassQuery groupByDateEnd() Group by the date_end column
 * @method     ChildCareEncounterFinancialClassQuery groupByDateCreate() Group by the date_create column
 * @method     ChildCareEncounterFinancialClassQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterFinancialClassQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterFinancialClassQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterFinancialClassQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterFinancialClassQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterFinancialClassQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterFinancialClassQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterFinancialClassQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterFinancialClassQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterFinancialClassQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterFinancialClassQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterFinancialClassQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterFinancialClass findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterFinancialClass matching the query
 * @method     ChildCareEncounterFinancialClass findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterFinancialClass matching the query, or a new ChildCareEncounterFinancialClass object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterFinancialClass findOneByNr(string $nr) Return the first ChildCareEncounterFinancialClass filtered by the nr column
 * @method     ChildCareEncounterFinancialClass findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterFinancialClass filtered by the encounter_nr column
 * @method     ChildCareEncounterFinancialClass findOneByClassNr(int $class_nr) Return the first ChildCareEncounterFinancialClass filtered by the class_nr column
 * @method     ChildCareEncounterFinancialClass findOneByDateStart(string $date_start) Return the first ChildCareEncounterFinancialClass filtered by the date_start column
 * @method     ChildCareEncounterFinancialClass findOneByDateEnd(string $date_end) Return the first ChildCareEncounterFinancialClass filtered by the date_end column
 * @method     ChildCareEncounterFinancialClass findOneByDateCreate(string $date_create) Return the first ChildCareEncounterFinancialClass filtered by the date_create column
 * @method     ChildCareEncounterFinancialClass findOneByStatus(string $status) Return the first ChildCareEncounterFinancialClass filtered by the status column
 * @method     ChildCareEncounterFinancialClass findOneByHistory(string $history) Return the first ChildCareEncounterFinancialClass filtered by the history column
 * @method     ChildCareEncounterFinancialClass findOneByModifyId(string $modify_id) Return the first ChildCareEncounterFinancialClass filtered by the modify_id column
 * @method     ChildCareEncounterFinancialClass findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterFinancialClass filtered by the modify_time column
 * @method     ChildCareEncounterFinancialClass findOneByCreateId(string $create_id) Return the first ChildCareEncounterFinancialClass filtered by the create_id column
 * @method     ChildCareEncounterFinancialClass findOneByCreateTime(string $create_time) Return the first ChildCareEncounterFinancialClass filtered by the create_time column *

 * @method     ChildCareEncounterFinancialClass requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterFinancialClass by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterFinancialClass matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterFinancialClass requireOneByNr(string $nr) Return the first ChildCareEncounterFinancialClass filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterFinancialClass filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByClassNr(int $class_nr) Return the first ChildCareEncounterFinancialClass filtered by the class_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByDateStart(string $date_start) Return the first ChildCareEncounterFinancialClass filtered by the date_start column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByDateEnd(string $date_end) Return the first ChildCareEncounterFinancialClass filtered by the date_end column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByDateCreate(string $date_create) Return the first ChildCareEncounterFinancialClass filtered by the date_create column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByStatus(string $status) Return the first ChildCareEncounterFinancialClass filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByHistory(string $history) Return the first ChildCareEncounterFinancialClass filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterFinancialClass filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterFinancialClass filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByCreateId(string $create_id) Return the first ChildCareEncounterFinancialClass filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterFinancialClass requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterFinancialClass filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterFinancialClass objects based on current ModelCriteria
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByNr(string $nr) Return ChildCareEncounterFinancialClass objects filtered by the nr column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterFinancialClass objects filtered by the encounter_nr column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByClassNr(int $class_nr) Return ChildCareEncounterFinancialClass objects filtered by the class_nr column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByDateStart(string $date_start) Return ChildCareEncounterFinancialClass objects filtered by the date_start column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByDateEnd(string $date_end) Return ChildCareEncounterFinancialClass objects filtered by the date_end column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByDateCreate(string $date_create) Return ChildCareEncounterFinancialClass objects filtered by the date_create column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterFinancialClass objects filtered by the status column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterFinancialClass objects filtered by the history column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterFinancialClass objects filtered by the modify_id column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterFinancialClass objects filtered by the modify_time column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterFinancialClass objects filtered by the create_id column
 * @method     ChildCareEncounterFinancialClass[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterFinancialClass objects filtered by the create_time column
 * @method     ChildCareEncounterFinancialClass[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterFinancialClassQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterFinancialClassQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterFinancialClass', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterFinancialClassQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterFinancialClassQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterFinancialClassQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterFinancialClassQuery();
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
     * @return ChildCareEncounterFinancialClass|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterFinancialClassTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterFinancialClassTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterFinancialClass A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, encounter_nr, class_nr, date_start, date_end, date_create, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_financial_class WHERE nr = :p0';
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
            /** @var ChildCareEncounterFinancialClass $obj */
            $obj = new ChildCareEncounterFinancialClass();
            $obj->hydrate($row);
            CareEncounterFinancialClassTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterFinancialClass|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the class_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByClassNr(1234); // WHERE class_nr = 1234
     * $query->filterByClassNr(array(12, 34)); // WHERE class_nr IN (12, 34)
     * $query->filterByClassNr(array('min' => 12)); // WHERE class_nr > 12
     * </code>
     *
     * @param     mixed $classNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByClassNr($classNr = null, $comparison = null)
    {
        if (is_array($classNr)) {
            $useMinMax = false;
            if (isset($classNr['min'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_CLASS_NR, $classNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classNr['max'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_CLASS_NR, $classNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_CLASS_NR, $classNr, $comparison);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByDateStart($dateStart = null, $comparison = null)
    {
        if (is_array($dateStart)) {
            $useMinMax = false;
            if (isset($dateStart['min'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_DATE_START, $dateStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateStart['max'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_DATE_START, $dateStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_DATE_START, $dateStart, $comparison);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByDateEnd($dateEnd = null, $comparison = null)
    {
        if (is_array($dateEnd)) {
            $useMinMax = false;
            if (isset($dateEnd['min'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_DATE_END, $dateEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnd['max'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_DATE_END, $dateEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_DATE_END, $dateEnd, $comparison);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_DATE_CREATE, $dateCreate, $comparison);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterFinancialClass $careEncounterFinancialClass Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterFinancialClassQuery The current query, for fluid interface
     */
    public function prune($careEncounterFinancialClass = null)
    {
        if ($careEncounterFinancialClass) {
            $this->addUsingAlias(CareEncounterFinancialClassTableMap::COL_NR, $careEncounterFinancialClass->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_financial_class table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterFinancialClassTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterFinancialClassTableMap::clearInstancePool();
            CareEncounterFinancialClassTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterFinancialClassTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterFinancialClassTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterFinancialClassTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterFinancialClassTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterFinancialClassQuery
