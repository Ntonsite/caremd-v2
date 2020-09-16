<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareTzPricedescription as ChildCareTzPricedescription;
use CareMd\CareMd\CareTzPricedescriptionQuery as ChildCareTzPricedescriptionQuery;
use CareMd\CareMd\Map\CareTzPricedescriptionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_pricedescription' table.
 *
 *
 *
 * @method     ChildCareTzPricedescriptionQuery orderByAccountNr($order = Criteria::ASC) Order by the account_nr column
 * @method     ChildCareTzPricedescriptionQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     ChildCareTzPricedescriptionQuery groupByAccountNr() Group by the account_nr column
 * @method     ChildCareTzPricedescriptionQuery groupByDescription() Group by the description column
 *
 * @method     ChildCareTzPricedescriptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzPricedescriptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzPricedescriptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzPricedescriptionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzPricedescriptionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzPricedescriptionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzPricedescription findOne(ConnectionInterface $con = null) Return the first ChildCareTzPricedescription matching the query
 * @method     ChildCareTzPricedescription findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzPricedescription matching the query, or a new ChildCareTzPricedescription object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzPricedescription findOneByAccountNr(string $account_nr) Return the first ChildCareTzPricedescription filtered by the account_nr column
 * @method     ChildCareTzPricedescription findOneByDescription(string $description) Return the first ChildCareTzPricedescription filtered by the description column *

 * @method     ChildCareTzPricedescription requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzPricedescription by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzPricedescription requireOne(ConnectionInterface $con = null) Return the first ChildCareTzPricedescription matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzPricedescription requireOneByAccountNr(string $account_nr) Return the first ChildCareTzPricedescription filtered by the account_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzPricedescription requireOneByDescription(string $description) Return the first ChildCareTzPricedescription filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzPricedescription[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzPricedescription objects based on current ModelCriteria
 * @method     ChildCareTzPricedescription[]|ObjectCollection findByAccountNr(string $account_nr) Return ChildCareTzPricedescription objects filtered by the account_nr column
 * @method     ChildCareTzPricedescription[]|ObjectCollection findByDescription(string $description) Return ChildCareTzPricedescription objects filtered by the description column
 * @method     ChildCareTzPricedescription[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzPricedescriptionQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzPricedescriptionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzPricedescription', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzPricedescriptionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzPricedescriptionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzPricedescriptionQuery) {
            return $criteria;
        }
        $query = new ChildCareTzPricedescriptionQuery();
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
     * @return ChildCareTzPricedescription|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareTzPricedescription object has no primary key');
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
        throw new LogicException('The CareTzPricedescription object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareTzPricedescriptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareTzPricedescription object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzPricedescriptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareTzPricedescription object has no primary key');
    }

    /**
     * Filter the query on the account_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByAccountNr(1234); // WHERE account_nr = 1234
     * $query->filterByAccountNr(array(12, 34)); // WHERE account_nr IN (12, 34)
     * $query->filterByAccountNr(array('min' => 12)); // WHERE account_nr > 12
     * </code>
     *
     * @param     mixed $accountNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzPricedescriptionQuery The current query, for fluid interface
     */
    public function filterByAccountNr($accountNr = null, $comparison = null)
    {
        if (is_array($accountNr)) {
            $useMinMax = false;
            if (isset($accountNr['min'])) {
                $this->addUsingAlias(CareTzPricedescriptionTableMap::COL_ACCOUNT_NR, $accountNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($accountNr['max'])) {
                $this->addUsingAlias(CareTzPricedescriptionTableMap::COL_ACCOUNT_NR, $accountNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzPricedescriptionTableMap::COL_ACCOUNT_NR, $accountNr, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzPricedescriptionQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzPricedescriptionTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzPricedescription $careTzPricedescription Object to remove from the list of results
     *
     * @return $this|ChildCareTzPricedescriptionQuery The current query, for fluid interface
     */
    public function prune($careTzPricedescription = null)
    {
        if ($careTzPricedescription) {
            throw new LogicException('CareTzPricedescription object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_pricedescription table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzPricedescriptionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzPricedescriptionTableMap::clearInstancePool();
            CareTzPricedescriptionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzPricedescriptionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzPricedescriptionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzPricedescriptionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzPricedescriptionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzPricedescriptionQuery
