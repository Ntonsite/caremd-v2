<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterDrugsheet as ChildCareEncounterDrugsheet;
use CareMd\CareMd\CareEncounterDrugsheetQuery as ChildCareEncounterDrugsheetQuery;
use CareMd\CareMd\Map\CareEncounterDrugsheetTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_drugsheet' table.
 *
 *
 *
 * @method     ChildCareEncounterDrugsheetQuery orderByPrescrNr($order = Criteria::ASC) Order by the prescr_nr column
 * @method     ChildCareEncounterDrugsheetQuery orderByChartDate($order = Criteria::ASC) Order by the chart_date column
 * @method     ChildCareEncounterDrugsheetQuery orderByChartTime($order = Criteria::ASC) Order by the chart_time column
 * @method     ChildCareEncounterDrugsheetQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     ChildCareEncounterDrugsheetQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterDrugsheetQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareEncounterDrugsheetQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterDrugsheetQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 *
 * @method     ChildCareEncounterDrugsheetQuery groupByPrescrNr() Group by the prescr_nr column
 * @method     ChildCareEncounterDrugsheetQuery groupByChartDate() Group by the chart_date column
 * @method     ChildCareEncounterDrugsheetQuery groupByChartTime() Group by the chart_time column
 * @method     ChildCareEncounterDrugsheetQuery groupByAmount() Group by the amount column
 * @method     ChildCareEncounterDrugsheetQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterDrugsheetQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareEncounterDrugsheetQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterDrugsheetQuery groupByModifyId() Group by the modify_id column
 *
 * @method     ChildCareEncounterDrugsheetQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterDrugsheetQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterDrugsheetQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterDrugsheetQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterDrugsheetQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterDrugsheetQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterDrugsheet findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterDrugsheet matching the query
 * @method     ChildCareEncounterDrugsheet findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterDrugsheet matching the query, or a new ChildCareEncounterDrugsheet object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterDrugsheet findOneByPrescrNr(int $prescr_nr) Return the first ChildCareEncounterDrugsheet filtered by the prescr_nr column
 * @method     ChildCareEncounterDrugsheet findOneByChartDate(string $chart_date) Return the first ChildCareEncounterDrugsheet filtered by the chart_date column
 * @method     ChildCareEncounterDrugsheet findOneByChartTime(string $chart_time) Return the first ChildCareEncounterDrugsheet filtered by the chart_time column
 * @method     ChildCareEncounterDrugsheet findOneByAmount(string $amount) Return the first ChildCareEncounterDrugsheet filtered by the amount column
 * @method     ChildCareEncounterDrugsheet findOneByStatus(int $status) Return the first ChildCareEncounterDrugsheet filtered by the status column
 * @method     ChildCareEncounterDrugsheet findOneByCreateTime(string $create_time) Return the first ChildCareEncounterDrugsheet filtered by the create_time column
 * @method     ChildCareEncounterDrugsheet findOneByCreateId(string $create_id) Return the first ChildCareEncounterDrugsheet filtered by the create_id column
 * @method     ChildCareEncounterDrugsheet findOneByModifyId(string $modify_id) Return the first ChildCareEncounterDrugsheet filtered by the modify_id column *

 * @method     ChildCareEncounterDrugsheet requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterDrugsheet by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDrugsheet requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterDrugsheet matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterDrugsheet requireOneByPrescrNr(int $prescr_nr) Return the first ChildCareEncounterDrugsheet filtered by the prescr_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDrugsheet requireOneByChartDate(string $chart_date) Return the first ChildCareEncounterDrugsheet filtered by the chart_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDrugsheet requireOneByChartTime(string $chart_time) Return the first ChildCareEncounterDrugsheet filtered by the chart_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDrugsheet requireOneByAmount(string $amount) Return the first ChildCareEncounterDrugsheet filtered by the amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDrugsheet requireOneByStatus(int $status) Return the first ChildCareEncounterDrugsheet filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDrugsheet requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterDrugsheet filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDrugsheet requireOneByCreateId(string $create_id) Return the first ChildCareEncounterDrugsheet filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDrugsheet requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterDrugsheet filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterDrugsheet[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterDrugsheet objects based on current ModelCriteria
 * @method     ChildCareEncounterDrugsheet[]|ObjectCollection findByPrescrNr(int $prescr_nr) Return ChildCareEncounterDrugsheet objects filtered by the prescr_nr column
 * @method     ChildCareEncounterDrugsheet[]|ObjectCollection findByChartDate(string $chart_date) Return ChildCareEncounterDrugsheet objects filtered by the chart_date column
 * @method     ChildCareEncounterDrugsheet[]|ObjectCollection findByChartTime(string $chart_time) Return ChildCareEncounterDrugsheet objects filtered by the chart_time column
 * @method     ChildCareEncounterDrugsheet[]|ObjectCollection findByAmount(string $amount) Return ChildCareEncounterDrugsheet objects filtered by the amount column
 * @method     ChildCareEncounterDrugsheet[]|ObjectCollection findByStatus(int $status) Return ChildCareEncounterDrugsheet objects filtered by the status column
 * @method     ChildCareEncounterDrugsheet[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterDrugsheet objects filtered by the create_time column
 * @method     ChildCareEncounterDrugsheet[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterDrugsheet objects filtered by the create_id column
 * @method     ChildCareEncounterDrugsheet[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterDrugsheet objects filtered by the modify_id column
 * @method     ChildCareEncounterDrugsheet[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterDrugsheetQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterDrugsheetQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterDrugsheet', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterDrugsheetQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterDrugsheetQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterDrugsheetQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterDrugsheetQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$prescr_nr, $chart_date, $chart_time] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareEncounterDrugsheet|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterDrugsheetTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterDrugsheetTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildCareEncounterDrugsheet A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT prescr_nr, chart_date, chart_time, amount, status, create_time, create_id, modify_id FROM care_encounter_drugsheet WHERE prescr_nr = :p0 AND chart_date = :p1 AND chart_time = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1] ? $key[1]->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareEncounterDrugsheet $obj */
            $obj = new ChildCareEncounterDrugsheet();
            $obj->hydrate($row);
            CareEncounterDrugsheetTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildCareEncounterDrugsheet|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_PRESCR_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_CHART_DATE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_CHART_TIME, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareEncounterDrugsheetTableMap::COL_PRESCR_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareEncounterDrugsheetTableMap::COL_CHART_DATE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CareEncounterDrugsheetTableMap::COL_CHART_TIME, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the prescr_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPrescrNr(1234); // WHERE prescr_nr = 1234
     * $query->filterByPrescrNr(array(12, 34)); // WHERE prescr_nr IN (12, 34)
     * $query->filterByPrescrNr(array('min' => 12)); // WHERE prescr_nr > 12
     * </code>
     *
     * @param     mixed $prescrNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function filterByPrescrNr($prescrNr = null, $comparison = null)
    {
        if (is_array($prescrNr)) {
            $useMinMax = false;
            if (isset($prescrNr['min'])) {
                $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_PRESCR_NR, $prescrNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prescrNr['max'])) {
                $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_PRESCR_NR, $prescrNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_PRESCR_NR, $prescrNr, $comparison);
    }

    /**
     * Filter the query on the chart_date column
     *
     * Example usage:
     * <code>
     * $query->filterByChartDate('2011-03-14'); // WHERE chart_date = '2011-03-14'
     * $query->filterByChartDate('now'); // WHERE chart_date = '2011-03-14'
     * $query->filterByChartDate(array('max' => 'yesterday')); // WHERE chart_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $chartDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function filterByChartDate($chartDate = null, $comparison = null)
    {
        if (is_array($chartDate)) {
            $useMinMax = false;
            if (isset($chartDate['min'])) {
                $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_CHART_DATE, $chartDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chartDate['max'])) {
                $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_CHART_DATE, $chartDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_CHART_DATE, $chartDate, $comparison);
    }

    /**
     * Filter the query on the chart_time column
     *
     * Example usage:
     * <code>
     * $query->filterByChartTime('fooValue');   // WHERE chart_time = 'fooValue'
     * $query->filterByChartTime('%fooValue%', Criteria::LIKE); // WHERE chart_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chartTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function filterByChartTime($chartTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chartTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_CHART_TIME, $chartTime, $comparison);
    }

    /**
     * Filter the query on the amount column
     *
     * Example usage:
     * <code>
     * $query->filterByAmount(1234); // WHERE amount = 1234
     * $query->filterByAmount(array(12, 34)); // WHERE amount IN (12, 34)
     * $query->filterByAmount(array('min' => 12)); // WHERE amount > 12
     * </code>
     *
     * @param     mixed $amount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function filterByAmount($amount = null, $comparison = null)
    {
        if (is_array($amount)) {
            $useMinMax = false;
            if (isset($amount['min'])) {
                $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amount['max'])) {
                $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_AMOUNT, $amount, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(1234); // WHERE status = 1234
     * $query->filterByStatus(array(12, 34)); // WHERE status IN (12, 34)
     * $query->filterByStatus(array('min' => 12)); // WHERE status > 12
     * </code>
     *
     * @param     mixed $status The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_CREATE_TIME, $createTime, $comparison);
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
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDrugsheetTableMap::COL_MODIFY_ID, $modifyId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterDrugsheet $careEncounterDrugsheet Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterDrugsheetQuery The current query, for fluid interface
     */
    public function prune($careEncounterDrugsheet = null)
    {
        if ($careEncounterDrugsheet) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareEncounterDrugsheetTableMap::COL_PRESCR_NR), $careEncounterDrugsheet->getPrescrNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareEncounterDrugsheetTableMap::COL_CHART_DATE), $careEncounterDrugsheet->getChartDate(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CareEncounterDrugsheetTableMap::COL_CHART_TIME), $careEncounterDrugsheet->getChartTime(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_drugsheet table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDrugsheetTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterDrugsheetTableMap::clearInstancePool();
            CareEncounterDrugsheetTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDrugsheetTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterDrugsheetTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterDrugsheetTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterDrugsheetTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterDrugsheetQuery
