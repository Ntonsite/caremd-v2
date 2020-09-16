<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvEvents as ChildCareTzArvEvents;
use CareMd\CareMd\CareTzArvEventsQuery as ChildCareTzArvEventsQuery;
use CareMd\CareMd\Map\CareTzArvEventsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_events' table.
 *
 *
 *
 * @method     ChildCareTzArvEventsQuery orderByCareTzArvEventsId($order = Criteria::ASC) Order by the care_tz_arv_events_id column
 * @method     ChildCareTzArvEventsQuery orderByCareTzArvEventsCodeId($order = Criteria::ASC) Order by the care_tz_arv_events_code_id column
 * @method     ChildCareTzArvEventsQuery orderByCareTzArvVisitId($order = Criteria::ASC) Order by the care_tz_arv_visit_id column
 *
 * @method     ChildCareTzArvEventsQuery groupByCareTzArvEventsId() Group by the care_tz_arv_events_id column
 * @method     ChildCareTzArvEventsQuery groupByCareTzArvEventsCodeId() Group by the care_tz_arv_events_code_id column
 * @method     ChildCareTzArvEventsQuery groupByCareTzArvVisitId() Group by the care_tz_arv_visit_id column
 *
 * @method     ChildCareTzArvEventsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvEventsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvEventsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvEventsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvEventsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvEventsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvEvents findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvEvents matching the query
 * @method     ChildCareTzArvEvents findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvEvents matching the query, or a new ChildCareTzArvEvents object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvEvents findOneByCareTzArvEventsId(string $care_tz_arv_events_id) Return the first ChildCareTzArvEvents filtered by the care_tz_arv_events_id column
 * @method     ChildCareTzArvEvents findOneByCareTzArvEventsCodeId(string $care_tz_arv_events_code_id) Return the first ChildCareTzArvEvents filtered by the care_tz_arv_events_code_id column
 * @method     ChildCareTzArvEvents findOneByCareTzArvVisitId(string $care_tz_arv_visit_id) Return the first ChildCareTzArvEvents filtered by the care_tz_arv_visit_id column *

 * @method     ChildCareTzArvEvents requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvEvents by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEvents requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvEvents matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvEvents requireOneByCareTzArvEventsId(string $care_tz_arv_events_id) Return the first ChildCareTzArvEvents filtered by the care_tz_arv_events_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEvents requireOneByCareTzArvEventsCodeId(string $care_tz_arv_events_code_id) Return the first ChildCareTzArvEvents filtered by the care_tz_arv_events_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEvents requireOneByCareTzArvVisitId(string $care_tz_arv_visit_id) Return the first ChildCareTzArvEvents filtered by the care_tz_arv_visit_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvEvents[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvEvents objects based on current ModelCriteria
 * @method     ChildCareTzArvEvents[]|ObjectCollection findByCareTzArvEventsId(string $care_tz_arv_events_id) Return ChildCareTzArvEvents objects filtered by the care_tz_arv_events_id column
 * @method     ChildCareTzArvEvents[]|ObjectCollection findByCareTzArvEventsCodeId(string $care_tz_arv_events_code_id) Return ChildCareTzArvEvents objects filtered by the care_tz_arv_events_code_id column
 * @method     ChildCareTzArvEvents[]|ObjectCollection findByCareTzArvVisitId(string $care_tz_arv_visit_id) Return ChildCareTzArvEvents objects filtered by the care_tz_arv_visit_id column
 * @method     ChildCareTzArvEvents[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvEventsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvEventsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvEvents', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvEventsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvEventsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvEventsQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvEventsQuery();
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
     * @return ChildCareTzArvEvents|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvEventsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvEventsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvEvents A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_events_id, care_tz_arv_events_code_id, care_tz_arv_visit_id FROM care_tz_arv_events WHERE care_tz_arv_events_id = :p0';
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
            /** @var ChildCareTzArvEvents $obj */
            $obj = new ChildCareTzArvEvents();
            $obj->hydrate($row);
            CareTzArvEventsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvEvents|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvEventsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_EVENTS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvEventsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_EVENTS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_events_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvEventsId(1234); // WHERE care_tz_arv_events_id = 1234
     * $query->filterByCareTzArvEventsId(array(12, 34)); // WHERE care_tz_arv_events_id IN (12, 34)
     * $query->filterByCareTzArvEventsId(array('min' => 12)); // WHERE care_tz_arv_events_id > 12
     * </code>
     *
     * @param     mixed $careTzArvEventsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEventsQuery The current query, for fluid interface
     */
    public function filterByCareTzArvEventsId($careTzArvEventsId = null, $comparison = null)
    {
        if (is_array($careTzArvEventsId)) {
            $useMinMax = false;
            if (isset($careTzArvEventsId['min'])) {
                $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_EVENTS_ID, $careTzArvEventsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvEventsId['max'])) {
                $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_EVENTS_ID, $careTzArvEventsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_EVENTS_ID, $careTzArvEventsId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_events_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvEventsCodeId(1234); // WHERE care_tz_arv_events_code_id = 1234
     * $query->filterByCareTzArvEventsCodeId(array(12, 34)); // WHERE care_tz_arv_events_code_id IN (12, 34)
     * $query->filterByCareTzArvEventsCodeId(array('min' => 12)); // WHERE care_tz_arv_events_code_id > 12
     * </code>
     *
     * @param     mixed $careTzArvEventsCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEventsQuery The current query, for fluid interface
     */
    public function filterByCareTzArvEventsCodeId($careTzArvEventsCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvEventsCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvEventsCodeId['min'])) {
                $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_EVENTS_CODE_ID, $careTzArvEventsCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvEventsCodeId['max'])) {
                $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_EVENTS_CODE_ID, $careTzArvEventsCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_EVENTS_CODE_ID, $careTzArvEventsCodeId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_visit_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvVisitId(1234); // WHERE care_tz_arv_visit_id = 1234
     * $query->filterByCareTzArvVisitId(array(12, 34)); // WHERE care_tz_arv_visit_id IN (12, 34)
     * $query->filterByCareTzArvVisitId(array('min' => 12)); // WHERE care_tz_arv_visit_id > 12
     * </code>
     *
     * @param     mixed $careTzArvVisitId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEventsQuery The current query, for fluid interface
     */
    public function filterByCareTzArvVisitId($careTzArvVisitId = null, $comparison = null)
    {
        if (is_array($careTzArvVisitId)) {
            $useMinMax = false;
            if (isset($careTzArvVisitId['min'])) {
                $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_VISIT_ID, $careTzArvVisitId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvVisitId['max'])) {
                $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_VISIT_ID, $careTzArvVisitId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_VISIT_ID, $careTzArvVisitId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvEvents $careTzArvEvents Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvEventsQuery The current query, for fluid interface
     */
    public function prune($careTzArvEvents = null)
    {
        if ($careTzArvEvents) {
            $this->addUsingAlias(CareTzArvEventsTableMap::COL_CARE_TZ_ARV_EVENTS_ID, $careTzArvEvents->getCareTzArvEventsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_events table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvEventsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvEventsTableMap::clearInstancePool();
            CareTzArvEventsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvEventsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvEventsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvEventsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvEventsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvEventsQuery
