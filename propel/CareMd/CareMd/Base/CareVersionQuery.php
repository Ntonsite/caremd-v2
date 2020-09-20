<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareVersion as ChildCareVersion;
use CareMd\CareMd\CareVersionQuery as ChildCareVersionQuery;
use CareMd\CareMd\Map\CareVersionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_version' table.
 *
 *
 *
 * @method     ChildCareVersionQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareVersionQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareVersionQuery orderByNumber($order = Criteria::ASC) Order by the number column
 * @method     ChildCareVersionQuery orderByBuild($order = Criteria::ASC) Order by the build column
 * @method     ChildCareVersionQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareVersionQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildCareVersionQuery orderByReleaser($order = Criteria::ASC) Order by the releaser column
 *
 * @method     ChildCareVersionQuery groupByName() Group by the name column
 * @method     ChildCareVersionQuery groupByType() Group by the type column
 * @method     ChildCareVersionQuery groupByNumber() Group by the number column
 * @method     ChildCareVersionQuery groupByBuild() Group by the build column
 * @method     ChildCareVersionQuery groupByDate() Group by the date column
 * @method     ChildCareVersionQuery groupByTime() Group by the time column
 * @method     ChildCareVersionQuery groupByReleaser() Group by the releaser column
 *
 * @method     ChildCareVersionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareVersionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareVersionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareVersionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareVersionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareVersionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareVersion findOne(ConnectionInterface $con = null) Return the first ChildCareVersion matching the query
 * @method     ChildCareVersion findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareVersion matching the query, or a new ChildCareVersion object populated from the query conditions when no match is found
 *
 * @method     ChildCareVersion findOneByName(string $name) Return the first ChildCareVersion filtered by the name column
 * @method     ChildCareVersion findOneByType(string $type) Return the first ChildCareVersion filtered by the type column
 * @method     ChildCareVersion findOneByNumber(string $number) Return the first ChildCareVersion filtered by the number column
 * @method     ChildCareVersion findOneByBuild(string $build) Return the first ChildCareVersion filtered by the build column
 * @method     ChildCareVersion findOneByDate(string $date) Return the first ChildCareVersion filtered by the date column
 * @method     ChildCareVersion findOneByTime(string $time) Return the first ChildCareVersion filtered by the time column
 * @method     ChildCareVersion findOneByReleaser(string $releaser) Return the first ChildCareVersion filtered by the releaser column *

 * @method     ChildCareVersion requirePk($key, ConnectionInterface $con = null) Return the ChildCareVersion by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareVersion requireOne(ConnectionInterface $con = null) Return the first ChildCareVersion matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareVersion requireOneByName(string $name) Return the first ChildCareVersion filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareVersion requireOneByType(string $type) Return the first ChildCareVersion filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareVersion requireOneByNumber(string $number) Return the first ChildCareVersion filtered by the number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareVersion requireOneByBuild(string $build) Return the first ChildCareVersion filtered by the build column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareVersion requireOneByDate(string $date) Return the first ChildCareVersion filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareVersion requireOneByTime(string $time) Return the first ChildCareVersion filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareVersion requireOneByReleaser(string $releaser) Return the first ChildCareVersion filtered by the releaser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareVersion[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareVersion objects based on current ModelCriteria
 * @method     ChildCareVersion[]|ObjectCollection findByName(string $name) Return ChildCareVersion objects filtered by the name column
 * @method     ChildCareVersion[]|ObjectCollection findByType(string $type) Return ChildCareVersion objects filtered by the type column
 * @method     ChildCareVersion[]|ObjectCollection findByNumber(string $number) Return ChildCareVersion objects filtered by the number column
 * @method     ChildCareVersion[]|ObjectCollection findByBuild(string $build) Return ChildCareVersion objects filtered by the build column
 * @method     ChildCareVersion[]|ObjectCollection findByDate(string $date) Return ChildCareVersion objects filtered by the date column
 * @method     ChildCareVersion[]|ObjectCollection findByTime(string $time) Return ChildCareVersion objects filtered by the time column
 * @method     ChildCareVersion[]|ObjectCollection findByReleaser(string $releaser) Return ChildCareVersion objects filtered by the releaser column
 * @method     ChildCareVersion[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareVersionQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareVersionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareVersion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareVersionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareVersionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareVersionQuery) {
            return $criteria;
        }
        $query = new ChildCareVersionQuery();
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
     * @return ChildCareVersion|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareVersion object has no primary key');
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
        throw new LogicException('The CareVersion object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareVersionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareVersion object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareVersionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareVersion object has no primary key');
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareVersionQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareVersionTableMap::COL_NAME, $name, $comparison);
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
     * @return $this|ChildCareVersionQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareVersionTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the number column
     *
     * Example usage:
     * <code>
     * $query->filterByNumber('fooValue');   // WHERE number = 'fooValue'
     * $query->filterByNumber('%fooValue%', Criteria::LIKE); // WHERE number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $number The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareVersionQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($number)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareVersionTableMap::COL_NUMBER, $number, $comparison);
    }

    /**
     * Filter the query on the build column
     *
     * Example usage:
     * <code>
     * $query->filterByBuild('fooValue');   // WHERE build = 'fooValue'
     * $query->filterByBuild('%fooValue%', Criteria::LIKE); // WHERE build LIKE '%fooValue%'
     * </code>
     *
     * @param     string $build The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareVersionQuery The current query, for fluid interface
     */
    public function filterByBuild($build = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($build)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareVersionTableMap::COL_BUILD, $build, $comparison);
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
     * @return $this|ChildCareVersionQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareVersionTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareVersionTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareVersionTableMap::COL_DATE, $date, $comparison);
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
     * @return $this|ChildCareVersionQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(CareVersionTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(CareVersionTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareVersionTableMap::COL_TIME, $time, $comparison);
    }

    /**
     * Filter the query on the releaser column
     *
     * Example usage:
     * <code>
     * $query->filterByReleaser('fooValue');   // WHERE releaser = 'fooValue'
     * $query->filterByReleaser('%fooValue%', Criteria::LIKE); // WHERE releaser LIKE '%fooValue%'
     * </code>
     *
     * @param     string $releaser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareVersionQuery The current query, for fluid interface
     */
    public function filterByReleaser($releaser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($releaser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareVersionTableMap::COL_RELEASER, $releaser, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareVersion $careVersion Object to remove from the list of results
     *
     * @return $this|ChildCareVersionQuery The current query, for fluid interface
     */
    public function prune($careVersion = null)
    {
        if ($careVersion) {
            throw new LogicException('CareVersion object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_version table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareVersionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareVersionTableMap::clearInstancePool();
            CareVersionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareVersionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareVersionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareVersionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareVersionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareVersionQuery
