<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzDhisPeriod as ChildCareTzDhisPeriod;
use CareMd\CareMd\CareTzDhisPeriodQuery as ChildCareTzDhisPeriodQuery;
use CareMd\CareMd\Map\CareTzDhisPeriodTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_dhis_period' table.
 *
 *
 *
 * @method     ChildCareTzDhisPeriodQuery orderByPeriodid($order = Criteria::ASC) Order by the periodid column
 * @method     ChildCareTzDhisPeriodQuery orderByPeriodtypeid($order = Criteria::ASC) Order by the periodtypeid column
 * @method     ChildCareTzDhisPeriodQuery orderByStartdate($order = Criteria::ASC) Order by the startdate column
 * @method     ChildCareTzDhisPeriodQuery orderByEnddate($order = Criteria::ASC) Order by the enddate column
 *
 * @method     ChildCareTzDhisPeriodQuery groupByPeriodid() Group by the periodid column
 * @method     ChildCareTzDhisPeriodQuery groupByPeriodtypeid() Group by the periodtypeid column
 * @method     ChildCareTzDhisPeriodQuery groupByStartdate() Group by the startdate column
 * @method     ChildCareTzDhisPeriodQuery groupByEnddate() Group by the enddate column
 *
 * @method     ChildCareTzDhisPeriodQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzDhisPeriodQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzDhisPeriodQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzDhisPeriodQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzDhisPeriodQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzDhisPeriodQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzDhisPeriod findOne(ConnectionInterface $con = null) Return the first ChildCareTzDhisPeriod matching the query
 * @method     ChildCareTzDhisPeriod findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzDhisPeriod matching the query, or a new ChildCareTzDhisPeriod object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzDhisPeriod findOneByPeriodid(int $periodid) Return the first ChildCareTzDhisPeriod filtered by the periodid column
 * @method     ChildCareTzDhisPeriod findOneByPeriodtypeid(int $periodtypeid) Return the first ChildCareTzDhisPeriod filtered by the periodtypeid column
 * @method     ChildCareTzDhisPeriod findOneByStartdate(string $startdate) Return the first ChildCareTzDhisPeriod filtered by the startdate column
 * @method     ChildCareTzDhisPeriod findOneByEnddate(string $enddate) Return the first ChildCareTzDhisPeriod filtered by the enddate column *

 * @method     ChildCareTzDhisPeriod requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzDhisPeriod by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisPeriod requireOne(ConnectionInterface $con = null) Return the first ChildCareTzDhisPeriod matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDhisPeriod requireOneByPeriodid(int $periodid) Return the first ChildCareTzDhisPeriod filtered by the periodid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisPeriod requireOneByPeriodtypeid(int $periodtypeid) Return the first ChildCareTzDhisPeriod filtered by the periodtypeid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisPeriod requireOneByStartdate(string $startdate) Return the first ChildCareTzDhisPeriod filtered by the startdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisPeriod requireOneByEnddate(string $enddate) Return the first ChildCareTzDhisPeriod filtered by the enddate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDhisPeriod[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzDhisPeriod objects based on current ModelCriteria
 * @method     ChildCareTzDhisPeriod[]|ObjectCollection findByPeriodid(int $periodid) Return ChildCareTzDhisPeriod objects filtered by the periodid column
 * @method     ChildCareTzDhisPeriod[]|ObjectCollection findByPeriodtypeid(int $periodtypeid) Return ChildCareTzDhisPeriod objects filtered by the periodtypeid column
 * @method     ChildCareTzDhisPeriod[]|ObjectCollection findByStartdate(string $startdate) Return ChildCareTzDhisPeriod objects filtered by the startdate column
 * @method     ChildCareTzDhisPeriod[]|ObjectCollection findByEnddate(string $enddate) Return ChildCareTzDhisPeriod objects filtered by the enddate column
 * @method     ChildCareTzDhisPeriod[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzDhisPeriodQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzDhisPeriodQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzDhisPeriod', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzDhisPeriodQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzDhisPeriodQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzDhisPeriodQuery) {
            return $criteria;
        }
        $query = new ChildCareTzDhisPeriodQuery();
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
     * @return ChildCareTzDhisPeriod|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzDhisPeriodTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzDhisPeriodTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzDhisPeriod A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT periodid, periodtypeid, startdate, enddate FROM care_tz_dhis_period WHERE periodid = :p0';
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
            /** @var ChildCareTzDhisPeriod $obj */
            $obj = new ChildCareTzDhisPeriod();
            $obj->hydrate($row);
            CareTzDhisPeriodTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzDhisPeriod|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzDhisPeriodQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_PERIODID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzDhisPeriodQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_PERIODID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the periodid column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodid(1234); // WHERE periodid = 1234
     * $query->filterByPeriodid(array(12, 34)); // WHERE periodid IN (12, 34)
     * $query->filterByPeriodid(array('min' => 12)); // WHERE periodid > 12
     * </code>
     *
     * @param     mixed $periodid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisPeriodQuery The current query, for fluid interface
     */
    public function filterByPeriodid($periodid = null, $comparison = null)
    {
        if (is_array($periodid)) {
            $useMinMax = false;
            if (isset($periodid['min'])) {
                $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_PERIODID, $periodid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($periodid['max'])) {
                $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_PERIODID, $periodid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_PERIODID, $periodid, $comparison);
    }

    /**
     * Filter the query on the periodtypeid column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodtypeid(1234); // WHERE periodtypeid = 1234
     * $query->filterByPeriodtypeid(array(12, 34)); // WHERE periodtypeid IN (12, 34)
     * $query->filterByPeriodtypeid(array('min' => 12)); // WHERE periodtypeid > 12
     * </code>
     *
     * @param     mixed $periodtypeid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisPeriodQuery The current query, for fluid interface
     */
    public function filterByPeriodtypeid($periodtypeid = null, $comparison = null)
    {
        if (is_array($periodtypeid)) {
            $useMinMax = false;
            if (isset($periodtypeid['min'])) {
                $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_PERIODTYPEID, $periodtypeid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($periodtypeid['max'])) {
                $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_PERIODTYPEID, $periodtypeid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_PERIODTYPEID, $periodtypeid, $comparison);
    }

    /**
     * Filter the query on the startdate column
     *
     * Example usage:
     * <code>
     * $query->filterByStartdate('2011-03-14'); // WHERE startdate = '2011-03-14'
     * $query->filterByStartdate('now'); // WHERE startdate = '2011-03-14'
     * $query->filterByStartdate(array('max' => 'yesterday')); // WHERE startdate > '2011-03-13'
     * </code>
     *
     * @param     mixed $startdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisPeriodQuery The current query, for fluid interface
     */
    public function filterByStartdate($startdate = null, $comparison = null)
    {
        if (is_array($startdate)) {
            $useMinMax = false;
            if (isset($startdate['min'])) {
                $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_STARTDATE, $startdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startdate['max'])) {
                $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_STARTDATE, $startdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_STARTDATE, $startdate, $comparison);
    }

    /**
     * Filter the query on the enddate column
     *
     * Example usage:
     * <code>
     * $query->filterByEnddate('2011-03-14'); // WHERE enddate = '2011-03-14'
     * $query->filterByEnddate('now'); // WHERE enddate = '2011-03-14'
     * $query->filterByEnddate(array('max' => 'yesterday')); // WHERE enddate > '2011-03-13'
     * </code>
     *
     * @param     mixed $enddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisPeriodQuery The current query, for fluid interface
     */
    public function filterByEnddate($enddate = null, $comparison = null)
    {
        if (is_array($enddate)) {
            $useMinMax = false;
            if (isset($enddate['min'])) {
                $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_ENDDATE, $enddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enddate['max'])) {
                $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_ENDDATE, $enddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_ENDDATE, $enddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzDhisPeriod $careTzDhisPeriod Object to remove from the list of results
     *
     * @return $this|ChildCareTzDhisPeriodQuery The current query, for fluid interface
     */
    public function prune($careTzDhisPeriod = null)
    {
        if ($careTzDhisPeriod) {
            $this->addUsingAlias(CareTzDhisPeriodTableMap::COL_PERIODID, $careTzDhisPeriod->getPeriodid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_dhis_period table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDhisPeriodTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzDhisPeriodTableMap::clearInstancePool();
            CareTzDhisPeriodTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDhisPeriodTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzDhisPeriodTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzDhisPeriodTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzDhisPeriodTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzDhisPeriodQuery
