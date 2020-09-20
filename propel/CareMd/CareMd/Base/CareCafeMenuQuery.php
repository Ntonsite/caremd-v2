<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareCafeMenu as ChildCareCafeMenu;
use CareMd\CareMd\CareCafeMenuQuery as ChildCareCafeMenuQuery;
use CareMd\CareMd\Map\CareCafeMenuTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_cafe_menu' table.
 *
 *
 *
 * @method     ChildCareCafeMenuQuery orderByItem($order = Criteria::ASC) Order by the item column
 * @method     ChildCareCafeMenuQuery orderByLang($order = Criteria::ASC) Order by the lang column
 * @method     ChildCareCafeMenuQuery orderByCdate($order = Criteria::ASC) Order by the cdate column
 * @method     ChildCareCafeMenuQuery orderByMenu($order = Criteria::ASC) Order by the menu column
 * @method     ChildCareCafeMenuQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareCafeMenuQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareCafeMenuQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareCafeMenuQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareCafeMenuQuery groupByItem() Group by the item column
 * @method     ChildCareCafeMenuQuery groupByLang() Group by the lang column
 * @method     ChildCareCafeMenuQuery groupByCdate() Group by the cdate column
 * @method     ChildCareCafeMenuQuery groupByMenu() Group by the menu column
 * @method     ChildCareCafeMenuQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareCafeMenuQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareCafeMenuQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareCafeMenuQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareCafeMenuQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareCafeMenuQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareCafeMenuQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareCafeMenuQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareCafeMenuQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareCafeMenuQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareCafeMenu findOne(ConnectionInterface $con = null) Return the first ChildCareCafeMenu matching the query
 * @method     ChildCareCafeMenu findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareCafeMenu matching the query, or a new ChildCareCafeMenu object populated from the query conditions when no match is found
 *
 * @method     ChildCareCafeMenu findOneByItem(int $item) Return the first ChildCareCafeMenu filtered by the item column
 * @method     ChildCareCafeMenu findOneByLang(string $lang) Return the first ChildCareCafeMenu filtered by the lang column
 * @method     ChildCareCafeMenu findOneByCdate(string $cdate) Return the first ChildCareCafeMenu filtered by the cdate column
 * @method     ChildCareCafeMenu findOneByMenu(string $menu) Return the first ChildCareCafeMenu filtered by the menu column
 * @method     ChildCareCafeMenu findOneByModifyId(string $modify_id) Return the first ChildCareCafeMenu filtered by the modify_id column
 * @method     ChildCareCafeMenu findOneByModifyTime(string $modify_time) Return the first ChildCareCafeMenu filtered by the modify_time column
 * @method     ChildCareCafeMenu findOneByCreateId(string $create_id) Return the first ChildCareCafeMenu filtered by the create_id column
 * @method     ChildCareCafeMenu findOneByCreateTime(string $create_time) Return the first ChildCareCafeMenu filtered by the create_time column *

 * @method     ChildCareCafeMenu requirePk($key, ConnectionInterface $con = null) Return the ChildCareCafeMenu by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafeMenu requireOne(ConnectionInterface $con = null) Return the first ChildCareCafeMenu matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareCafeMenu requireOneByItem(int $item) Return the first ChildCareCafeMenu filtered by the item column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafeMenu requireOneByLang(string $lang) Return the first ChildCareCafeMenu filtered by the lang column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafeMenu requireOneByCdate(string $cdate) Return the first ChildCareCafeMenu filtered by the cdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafeMenu requireOneByMenu(string $menu) Return the first ChildCareCafeMenu filtered by the menu column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafeMenu requireOneByModifyId(string $modify_id) Return the first ChildCareCafeMenu filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafeMenu requireOneByModifyTime(string $modify_time) Return the first ChildCareCafeMenu filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafeMenu requireOneByCreateId(string $create_id) Return the first ChildCareCafeMenu filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCafeMenu requireOneByCreateTime(string $create_time) Return the first ChildCareCafeMenu filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareCafeMenu[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareCafeMenu objects based on current ModelCriteria
 * @method     ChildCareCafeMenu[]|ObjectCollection findByItem(int $item) Return ChildCareCafeMenu objects filtered by the item column
 * @method     ChildCareCafeMenu[]|ObjectCollection findByLang(string $lang) Return ChildCareCafeMenu objects filtered by the lang column
 * @method     ChildCareCafeMenu[]|ObjectCollection findByCdate(string $cdate) Return ChildCareCafeMenu objects filtered by the cdate column
 * @method     ChildCareCafeMenu[]|ObjectCollection findByMenu(string $menu) Return ChildCareCafeMenu objects filtered by the menu column
 * @method     ChildCareCafeMenu[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareCafeMenu objects filtered by the modify_id column
 * @method     ChildCareCafeMenu[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareCafeMenu objects filtered by the modify_time column
 * @method     ChildCareCafeMenu[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareCafeMenu objects filtered by the create_id column
 * @method     ChildCareCafeMenu[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareCafeMenu objects filtered by the create_time column
 * @method     ChildCareCafeMenu[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareCafeMenuQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareCafeMenuQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareCafeMenu', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareCafeMenuQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareCafeMenuQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareCafeMenuQuery) {
            return $criteria;
        }
        $query = new ChildCareCafeMenuQuery();
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
     * @return ChildCareCafeMenu|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareCafeMenu object has no primary key');
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
        throw new LogicException('The CareCafeMenu object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareCafeMenu object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareCafeMenu object has no primary key');
    }

    /**
     * Filter the query on the item column
     *
     * Example usage:
     * <code>
     * $query->filterByItem(1234); // WHERE item = 1234
     * $query->filterByItem(array(12, 34)); // WHERE item IN (12, 34)
     * $query->filterByItem(array('min' => 12)); // WHERE item > 12
     * </code>
     *
     * @param     mixed $item The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function filterByItem($item = null, $comparison = null)
    {
        if (is_array($item)) {
            $useMinMax = false;
            if (isset($item['min'])) {
                $this->addUsingAlias(CareCafeMenuTableMap::COL_ITEM, $item['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($item['max'])) {
                $this->addUsingAlias(CareCafeMenuTableMap::COL_ITEM, $item['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafeMenuTableMap::COL_ITEM, $item, $comparison);
    }

    /**
     * Filter the query on the lang column
     *
     * Example usage:
     * <code>
     * $query->filterByLang('fooValue');   // WHERE lang = 'fooValue'
     * $query->filterByLang('%fooValue%', Criteria::LIKE); // WHERE lang LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lang The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function filterByLang($lang = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lang)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafeMenuTableMap::COL_LANG, $lang, $comparison);
    }

    /**
     * Filter the query on the cdate column
     *
     * Example usage:
     * <code>
     * $query->filterByCdate('2011-03-14'); // WHERE cdate = '2011-03-14'
     * $query->filterByCdate('now'); // WHERE cdate = '2011-03-14'
     * $query->filterByCdate(array('max' => 'yesterday')); // WHERE cdate > '2011-03-13'
     * </code>
     *
     * @param     mixed $cdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function filterByCdate($cdate = null, $comparison = null)
    {
        if (is_array($cdate)) {
            $useMinMax = false;
            if (isset($cdate['min'])) {
                $this->addUsingAlias(CareCafeMenuTableMap::COL_CDATE, $cdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cdate['max'])) {
                $this->addUsingAlias(CareCafeMenuTableMap::COL_CDATE, $cdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafeMenuTableMap::COL_CDATE, $cdate, $comparison);
    }

    /**
     * Filter the query on the menu column
     *
     * Example usage:
     * <code>
     * $query->filterByMenu('fooValue');   // WHERE menu = 'fooValue'
     * $query->filterByMenu('%fooValue%', Criteria::LIKE); // WHERE menu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menu The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function filterByMenu($menu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menu)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafeMenuTableMap::COL_MENU, $menu, $comparison);
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
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafeMenuTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareCafeMenuTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareCafeMenuTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafeMenuTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafeMenuTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareCafeMenuTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareCafeMenuTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCafeMenuTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareCafeMenu $careCafeMenu Object to remove from the list of results
     *
     * @return $this|ChildCareCafeMenuQuery The current query, for fluid interface
     */
    public function prune($careCafeMenu = null)
    {
        if ($careCafeMenu) {
            throw new LogicException('CareCafeMenu object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_cafe_menu table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareCafeMenuTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareCafeMenuTableMap::clearInstancePool();
            CareCafeMenuTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareCafeMenuTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareCafeMenuTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareCafeMenuTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareCafeMenuTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareCafeMenuQuery
