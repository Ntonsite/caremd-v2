<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareCurrency as ChildCareCurrency;
use CareMd\CareMd\CareCurrencyQuery as ChildCareCurrencyQuery;
use CareMd\CareMd\Map\CareCurrencyTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_currency' table.
 *
 *
 *
 * @method     ChildCareCurrencyQuery orderByItemNo($order = Criteria::ASC) Order by the item_no column
 * @method     ChildCareCurrencyQuery orderByShortName($order = Criteria::ASC) Order by the short_name column
 * @method     ChildCareCurrencyQuery orderByLongName($order = Criteria::ASC) Order by the long_name column
 * @method     ChildCareCurrencyQuery orderByInfo($order = Criteria::ASC) Order by the info column
 * @method     ChildCareCurrencyQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareCurrencyQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareCurrencyQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareCurrencyQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareCurrencyQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareCurrencyQuery groupByItemNo() Group by the item_no column
 * @method     ChildCareCurrencyQuery groupByShortName() Group by the short_name column
 * @method     ChildCareCurrencyQuery groupByLongName() Group by the long_name column
 * @method     ChildCareCurrencyQuery groupByInfo() Group by the info column
 * @method     ChildCareCurrencyQuery groupByStatus() Group by the status column
 * @method     ChildCareCurrencyQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareCurrencyQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareCurrencyQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareCurrencyQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareCurrencyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareCurrencyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareCurrencyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareCurrencyQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareCurrencyQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareCurrencyQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareCurrency findOne(ConnectionInterface $con = null) Return the first ChildCareCurrency matching the query
 * @method     ChildCareCurrency findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareCurrency matching the query, or a new ChildCareCurrency object populated from the query conditions when no match is found
 *
 * @method     ChildCareCurrency findOneByItemNo(int $item_no) Return the first ChildCareCurrency filtered by the item_no column
 * @method     ChildCareCurrency findOneByShortName(string $short_name) Return the first ChildCareCurrency filtered by the short_name column
 * @method     ChildCareCurrency findOneByLongName(string $long_name) Return the first ChildCareCurrency filtered by the long_name column
 * @method     ChildCareCurrency findOneByInfo(string $info) Return the first ChildCareCurrency filtered by the info column
 * @method     ChildCareCurrency findOneByStatus(string $status) Return the first ChildCareCurrency filtered by the status column
 * @method     ChildCareCurrency findOneByModifyId(string $modify_id) Return the first ChildCareCurrency filtered by the modify_id column
 * @method     ChildCareCurrency findOneByModifyTime(string $modify_time) Return the first ChildCareCurrency filtered by the modify_time column
 * @method     ChildCareCurrency findOneByCreateId(string $create_id) Return the first ChildCareCurrency filtered by the create_id column
 * @method     ChildCareCurrency findOneByCreateTime(string $create_time) Return the first ChildCareCurrency filtered by the create_time column *

 * @method     ChildCareCurrency requirePk($key, ConnectionInterface $con = null) Return the ChildCareCurrency by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCurrency requireOne(ConnectionInterface $con = null) Return the first ChildCareCurrency matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareCurrency requireOneByItemNo(int $item_no) Return the first ChildCareCurrency filtered by the item_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCurrency requireOneByShortName(string $short_name) Return the first ChildCareCurrency filtered by the short_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCurrency requireOneByLongName(string $long_name) Return the first ChildCareCurrency filtered by the long_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCurrency requireOneByInfo(string $info) Return the first ChildCareCurrency filtered by the info column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCurrency requireOneByStatus(string $status) Return the first ChildCareCurrency filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCurrency requireOneByModifyId(string $modify_id) Return the first ChildCareCurrency filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCurrency requireOneByModifyTime(string $modify_time) Return the first ChildCareCurrency filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCurrency requireOneByCreateId(string $create_id) Return the first ChildCareCurrency filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCurrency requireOneByCreateTime(string $create_time) Return the first ChildCareCurrency filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareCurrency[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareCurrency objects based on current ModelCriteria
 * @method     ChildCareCurrency[]|ObjectCollection findByItemNo(int $item_no) Return ChildCareCurrency objects filtered by the item_no column
 * @method     ChildCareCurrency[]|ObjectCollection findByShortName(string $short_name) Return ChildCareCurrency objects filtered by the short_name column
 * @method     ChildCareCurrency[]|ObjectCollection findByLongName(string $long_name) Return ChildCareCurrency objects filtered by the long_name column
 * @method     ChildCareCurrency[]|ObjectCollection findByInfo(string $info) Return ChildCareCurrency objects filtered by the info column
 * @method     ChildCareCurrency[]|ObjectCollection findByStatus(string $status) Return ChildCareCurrency objects filtered by the status column
 * @method     ChildCareCurrency[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareCurrency objects filtered by the modify_id column
 * @method     ChildCareCurrency[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareCurrency objects filtered by the modify_time column
 * @method     ChildCareCurrency[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareCurrency objects filtered by the create_id column
 * @method     ChildCareCurrency[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareCurrency objects filtered by the create_time column
 * @method     ChildCareCurrency[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareCurrencyQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareCurrencyQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareCurrency', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareCurrencyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareCurrencyQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareCurrencyQuery) {
            return $criteria;
        }
        $query = new ChildCareCurrencyQuery();
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
     * @return ChildCareCurrency|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareCurrency object has no primary key');
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
        throw new LogicException('The CareCurrency object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareCurrency object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareCurrency object has no primary key');
    }

    /**
     * Filter the query on the item_no column
     *
     * Example usage:
     * <code>
     * $query->filterByItemNo(1234); // WHERE item_no = 1234
     * $query->filterByItemNo(array(12, 34)); // WHERE item_no IN (12, 34)
     * $query->filterByItemNo(array('min' => 12)); // WHERE item_no > 12
     * </code>
     *
     * @param     mixed $itemNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByItemNo($itemNo = null, $comparison = null)
    {
        if (is_array($itemNo)) {
            $useMinMax = false;
            if (isset($itemNo['min'])) {
                $this->addUsingAlias(CareCurrencyTableMap::COL_ITEM_NO, $itemNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemNo['max'])) {
                $this->addUsingAlias(CareCurrencyTableMap::COL_ITEM_NO, $itemNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCurrencyTableMap::COL_ITEM_NO, $itemNo, $comparison);
    }

    /**
     * Filter the query on the short_name column
     *
     * Example usage:
     * <code>
     * $query->filterByShortName('fooValue');   // WHERE short_name = 'fooValue'
     * $query->filterByShortName('%fooValue%', Criteria::LIKE); // WHERE short_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shortName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByShortName($shortName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCurrencyTableMap::COL_SHORT_NAME, $shortName, $comparison);
    }

    /**
     * Filter the query on the long_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLongName('fooValue');   // WHERE long_name = 'fooValue'
     * $query->filterByLongName('%fooValue%', Criteria::LIKE); // WHERE long_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $longName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByLongName($longName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($longName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCurrencyTableMap::COL_LONG_NAME, $longName, $comparison);
    }

    /**
     * Filter the query on the info column
     *
     * Example usage:
     * <code>
     * $query->filterByInfo('fooValue');   // WHERE info = 'fooValue'
     * $query->filterByInfo('%fooValue%', Criteria::LIKE); // WHERE info LIKE '%fooValue%'
     * </code>
     *
     * @param     string $info The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByInfo($info = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($info)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCurrencyTableMap::COL_INFO, $info, $comparison);
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
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCurrencyTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCurrencyTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareCurrencyTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareCurrencyTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCurrencyTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCurrencyTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareCurrencyTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareCurrencyTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCurrencyTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareCurrency $careCurrency Object to remove from the list of results
     *
     * @return $this|ChildCareCurrencyQuery The current query, for fluid interface
     */
    public function prune($careCurrency = null)
    {
        if ($careCurrency) {
            throw new LogicException('CareCurrency object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_currency table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareCurrencyTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareCurrencyTableMap::clearInstancePool();
            CareCurrencyTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareCurrencyTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareCurrencyTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareCurrencyTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareCurrencyTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareCurrencyQuery
