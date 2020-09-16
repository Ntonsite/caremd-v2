<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzTracker as ChildCareTzTracker;
use CareMd\CareMd\CareTzTrackerQuery as ChildCareTzTrackerQuery;
use CareMd\CareMd\Map\CareTzTrackerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_tracker' table.
 *
 *
 *
 * @method     ChildCareTzTrackerQuery orderByTrackerId($order = Criteria::ASC) Order by the tracker_ID column
 * @method     ChildCareTzTrackerQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildCareTzTrackerQuery orderByModule($order = Criteria::ASC) Order by the module column
 * @method     ChildCareTzTrackerQuery orderByModuleId($order = Criteria::ASC) Order by the module_id column
 * @method     ChildCareTzTrackerQuery orderByReferingModule($order = Criteria::ASC) Order by the refering_module column
 * @method     ChildCareTzTrackerQuery orderByReferingModuleId($order = Criteria::ASC) Order by the refering_module_id column
 * @method     ChildCareTzTrackerQuery orderByAction($order = Criteria::ASC) Order by the action column
 * @method     ChildCareTzTrackerQuery orderByOldValue($order = Criteria::ASC) Order by the old_value column
 * @method     ChildCareTzTrackerQuery orderByNewValue($order = Criteria::ASC) Order by the new_value column
 * @method     ChildCareTzTrackerQuery orderByValueType($order = Criteria::ASC) Order by the value_type column
 * @method     ChildCareTzTrackerQuery orderByParameters($order = Criteria::ASC) Order by the parameters column
 * @method     ChildCareTzTrackerQuery orderByCommentUser($order = Criteria::ASC) Order by the comment_user column
 * @method     ChildCareTzTrackerQuery orderBySessionUser($order = Criteria::ASC) Order by the session_user column
 *
 * @method     ChildCareTzTrackerQuery groupByTrackerId() Group by the tracker_ID column
 * @method     ChildCareTzTrackerQuery groupByTime() Group by the time column
 * @method     ChildCareTzTrackerQuery groupByModule() Group by the module column
 * @method     ChildCareTzTrackerQuery groupByModuleId() Group by the module_id column
 * @method     ChildCareTzTrackerQuery groupByReferingModule() Group by the refering_module column
 * @method     ChildCareTzTrackerQuery groupByReferingModuleId() Group by the refering_module_id column
 * @method     ChildCareTzTrackerQuery groupByAction() Group by the action column
 * @method     ChildCareTzTrackerQuery groupByOldValue() Group by the old_value column
 * @method     ChildCareTzTrackerQuery groupByNewValue() Group by the new_value column
 * @method     ChildCareTzTrackerQuery groupByValueType() Group by the value_type column
 * @method     ChildCareTzTrackerQuery groupByParameters() Group by the parameters column
 * @method     ChildCareTzTrackerQuery groupByCommentUser() Group by the comment_user column
 * @method     ChildCareTzTrackerQuery groupBySessionUser() Group by the session_user column
 *
 * @method     ChildCareTzTrackerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzTrackerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzTrackerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzTrackerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzTrackerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzTrackerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzTracker findOne(ConnectionInterface $con = null) Return the first ChildCareTzTracker matching the query
 * @method     ChildCareTzTracker findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzTracker matching the query, or a new ChildCareTzTracker object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzTracker findOneByTrackerId(string $tracker_ID) Return the first ChildCareTzTracker filtered by the tracker_ID column
 * @method     ChildCareTzTracker findOneByTime(string $time) Return the first ChildCareTzTracker filtered by the time column
 * @method     ChildCareTzTracker findOneByModule(string $module) Return the first ChildCareTzTracker filtered by the module column
 * @method     ChildCareTzTracker findOneByModuleId(string $module_id) Return the first ChildCareTzTracker filtered by the module_id column
 * @method     ChildCareTzTracker findOneByReferingModule(string $refering_module) Return the first ChildCareTzTracker filtered by the refering_module column
 * @method     ChildCareTzTracker findOneByReferingModuleId(string $refering_module_id) Return the first ChildCareTzTracker filtered by the refering_module_id column
 * @method     ChildCareTzTracker findOneByAction(string $action) Return the first ChildCareTzTracker filtered by the action column
 * @method     ChildCareTzTracker findOneByOldValue(string $old_value) Return the first ChildCareTzTracker filtered by the old_value column
 * @method     ChildCareTzTracker findOneByNewValue(string $new_value) Return the first ChildCareTzTracker filtered by the new_value column
 * @method     ChildCareTzTracker findOneByValueType(string $value_type) Return the first ChildCareTzTracker filtered by the value_type column
 * @method     ChildCareTzTracker findOneByParameters(string $parameters) Return the first ChildCareTzTracker filtered by the parameters column
 * @method     ChildCareTzTracker findOneByCommentUser(string $comment_user) Return the first ChildCareTzTracker filtered by the comment_user column
 * @method     ChildCareTzTracker findOneBySessionUser(string $session_user) Return the first ChildCareTzTracker filtered by the session_user column *

 * @method     ChildCareTzTracker requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzTracker by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOne(ConnectionInterface $con = null) Return the first ChildCareTzTracker matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzTracker requireOneByTrackerId(string $tracker_ID) Return the first ChildCareTzTracker filtered by the tracker_ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByTime(string $time) Return the first ChildCareTzTracker filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByModule(string $module) Return the first ChildCareTzTracker filtered by the module column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByModuleId(string $module_id) Return the first ChildCareTzTracker filtered by the module_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByReferingModule(string $refering_module) Return the first ChildCareTzTracker filtered by the refering_module column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByReferingModuleId(string $refering_module_id) Return the first ChildCareTzTracker filtered by the refering_module_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByAction(string $action) Return the first ChildCareTzTracker filtered by the action column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByOldValue(string $old_value) Return the first ChildCareTzTracker filtered by the old_value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByNewValue(string $new_value) Return the first ChildCareTzTracker filtered by the new_value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByValueType(string $value_type) Return the first ChildCareTzTracker filtered by the value_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByParameters(string $parameters) Return the first ChildCareTzTracker filtered by the parameters column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneByCommentUser(string $comment_user) Return the first ChildCareTzTracker filtered by the comment_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTracker requireOneBySessionUser(string $session_user) Return the first ChildCareTzTracker filtered by the session_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzTracker[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzTracker objects based on current ModelCriteria
 * @method     ChildCareTzTracker[]|ObjectCollection findByTrackerId(string $tracker_ID) Return ChildCareTzTracker objects filtered by the tracker_ID column
 * @method     ChildCareTzTracker[]|ObjectCollection findByTime(string $time) Return ChildCareTzTracker objects filtered by the time column
 * @method     ChildCareTzTracker[]|ObjectCollection findByModule(string $module) Return ChildCareTzTracker objects filtered by the module column
 * @method     ChildCareTzTracker[]|ObjectCollection findByModuleId(string $module_id) Return ChildCareTzTracker objects filtered by the module_id column
 * @method     ChildCareTzTracker[]|ObjectCollection findByReferingModule(string $refering_module) Return ChildCareTzTracker objects filtered by the refering_module column
 * @method     ChildCareTzTracker[]|ObjectCollection findByReferingModuleId(string $refering_module_id) Return ChildCareTzTracker objects filtered by the refering_module_id column
 * @method     ChildCareTzTracker[]|ObjectCollection findByAction(string $action) Return ChildCareTzTracker objects filtered by the action column
 * @method     ChildCareTzTracker[]|ObjectCollection findByOldValue(string $old_value) Return ChildCareTzTracker objects filtered by the old_value column
 * @method     ChildCareTzTracker[]|ObjectCollection findByNewValue(string $new_value) Return ChildCareTzTracker objects filtered by the new_value column
 * @method     ChildCareTzTracker[]|ObjectCollection findByValueType(string $value_type) Return ChildCareTzTracker objects filtered by the value_type column
 * @method     ChildCareTzTracker[]|ObjectCollection findByParameters(string $parameters) Return ChildCareTzTracker objects filtered by the parameters column
 * @method     ChildCareTzTracker[]|ObjectCollection findByCommentUser(string $comment_user) Return ChildCareTzTracker objects filtered by the comment_user column
 * @method     ChildCareTzTracker[]|ObjectCollection findBySessionUser(string $session_user) Return ChildCareTzTracker objects filtered by the session_user column
 * @method     ChildCareTzTracker[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzTrackerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzTrackerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzTracker', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzTrackerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzTrackerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzTrackerQuery) {
            return $criteria;
        }
        $query = new ChildCareTzTrackerQuery();
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
     * @return ChildCareTzTracker|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzTrackerTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzTrackerTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzTracker A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT tracker_ID, time, module, module_id, refering_module, refering_module_id, action, old_value, new_value, value_type, parameters, comment_user, session_user FROM care_tz_tracker WHERE tracker_ID = :p0';
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
            /** @var ChildCareTzTracker $obj */
            $obj = new ChildCareTzTracker();
            $obj->hydrate($row);
            CareTzTrackerTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzTracker|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_TRACKER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_TRACKER_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the tracker_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByTrackerId(1234); // WHERE tracker_ID = 1234
     * $query->filterByTrackerId(array(12, 34)); // WHERE tracker_ID IN (12, 34)
     * $query->filterByTrackerId(array('min' => 12)); // WHERE tracker_ID > 12
     * </code>
     *
     * @param     mixed $trackerId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByTrackerId($trackerId = null, $comparison = null)
    {
        if (is_array($trackerId)) {
            $useMinMax = false;
            if (isset($trackerId['min'])) {
                $this->addUsingAlias(CareTzTrackerTableMap::COL_TRACKER_ID, $trackerId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trackerId['max'])) {
                $this->addUsingAlias(CareTzTrackerTableMap::COL_TRACKER_ID, $trackerId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_TRACKER_ID, $trackerId, $comparison);
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
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(CareTzTrackerTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(CareTzTrackerTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_TIME, $time, $comparison);
    }

    /**
     * Filter the query on the module column
     *
     * Example usage:
     * <code>
     * $query->filterByModule('fooValue');   // WHERE module = 'fooValue'
     * $query->filterByModule('%fooValue%', Criteria::LIKE); // WHERE module LIKE '%fooValue%'
     * </code>
     *
     * @param     string $module The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByModule($module = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($module)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_MODULE, $module, $comparison);
    }

    /**
     * Filter the query on the module_id column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleId(1234); // WHERE module_id = 1234
     * $query->filterByModuleId(array(12, 34)); // WHERE module_id IN (12, 34)
     * $query->filterByModuleId(array('min' => 12)); // WHERE module_id > 12
     * </code>
     *
     * @param     mixed $moduleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByModuleId($moduleId = null, $comparison = null)
    {
        if (is_array($moduleId)) {
            $useMinMax = false;
            if (isset($moduleId['min'])) {
                $this->addUsingAlias(CareTzTrackerTableMap::COL_MODULE_ID, $moduleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($moduleId['max'])) {
                $this->addUsingAlias(CareTzTrackerTableMap::COL_MODULE_ID, $moduleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_MODULE_ID, $moduleId, $comparison);
    }

    /**
     * Filter the query on the refering_module column
     *
     * Example usage:
     * <code>
     * $query->filterByReferingModule('fooValue');   // WHERE refering_module = 'fooValue'
     * $query->filterByReferingModule('%fooValue%', Criteria::LIKE); // WHERE refering_module LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referingModule The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByReferingModule($referingModule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referingModule)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_REFERING_MODULE, $referingModule, $comparison);
    }

    /**
     * Filter the query on the refering_module_id column
     *
     * Example usage:
     * <code>
     * $query->filterByReferingModuleId(1234); // WHERE refering_module_id = 1234
     * $query->filterByReferingModuleId(array(12, 34)); // WHERE refering_module_id IN (12, 34)
     * $query->filterByReferingModuleId(array('min' => 12)); // WHERE refering_module_id > 12
     * </code>
     *
     * @param     mixed $referingModuleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByReferingModuleId($referingModuleId = null, $comparison = null)
    {
        if (is_array($referingModuleId)) {
            $useMinMax = false;
            if (isset($referingModuleId['min'])) {
                $this->addUsingAlias(CareTzTrackerTableMap::COL_REFERING_MODULE_ID, $referingModuleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($referingModuleId['max'])) {
                $this->addUsingAlias(CareTzTrackerTableMap::COL_REFERING_MODULE_ID, $referingModuleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_REFERING_MODULE_ID, $referingModuleId, $comparison);
    }

    /**
     * Filter the query on the action column
     *
     * Example usage:
     * <code>
     * $query->filterByAction('fooValue');   // WHERE action = 'fooValue'
     * $query->filterByAction('%fooValue%', Criteria::LIKE); // WHERE action LIKE '%fooValue%'
     * </code>
     *
     * @param     string $action The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByAction($action = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($action)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_ACTION, $action, $comparison);
    }

    /**
     * Filter the query on the old_value column
     *
     * Example usage:
     * <code>
     * $query->filterByOldValue('fooValue');   // WHERE old_value = 'fooValue'
     * $query->filterByOldValue('%fooValue%', Criteria::LIKE); // WHERE old_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oldValue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByOldValue($oldValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oldValue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_OLD_VALUE, $oldValue, $comparison);
    }

    /**
     * Filter the query on the new_value column
     *
     * Example usage:
     * <code>
     * $query->filterByNewValue('fooValue');   // WHERE new_value = 'fooValue'
     * $query->filterByNewValue('%fooValue%', Criteria::LIKE); // WHERE new_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $newValue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByNewValue($newValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($newValue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_NEW_VALUE, $newValue, $comparison);
    }

    /**
     * Filter the query on the value_type column
     *
     * Example usage:
     * <code>
     * $query->filterByValueType('fooValue');   // WHERE value_type = 'fooValue'
     * $query->filterByValueType('%fooValue%', Criteria::LIKE); // WHERE value_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valueType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByValueType($valueType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valueType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_VALUE_TYPE, $valueType, $comparison);
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
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByParameters($parameters = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parameters)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_PARAMETERS, $parameters, $comparison);
    }

    /**
     * Filter the query on the comment_user column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentUser('fooValue');   // WHERE comment_user = 'fooValue'
     * $query->filterByCommentUser('%fooValue%', Criteria::LIKE); // WHERE comment_user LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentUser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterByCommentUser($commentUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentUser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_COMMENT_USER, $commentUser, $comparison);
    }

    /**
     * Filter the query on the session_user column
     *
     * Example usage:
     * <code>
     * $query->filterBySessionUser('fooValue');   // WHERE session_user = 'fooValue'
     * $query->filterBySessionUser('%fooValue%', Criteria::LIKE); // WHERE session_user LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sessionUser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function filterBySessionUser($sessionUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sessionUser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTrackerTableMap::COL_SESSION_USER, $sessionUser, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzTracker $careTzTracker Object to remove from the list of results
     *
     * @return $this|ChildCareTzTrackerQuery The current query, for fluid interface
     */
    public function prune($careTzTracker = null)
    {
        if ($careTzTracker) {
            $this->addUsingAlias(CareTzTrackerTableMap::COL_TRACKER_ID, $careTzTracker->getTrackerId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_tracker table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzTrackerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzTrackerTableMap::clearInstancePool();
            CareTzTrackerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzTrackerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzTrackerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzTrackerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzTrackerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzTrackerQuery
