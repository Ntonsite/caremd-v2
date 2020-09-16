<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareOps301Es as ChildCareOps301Es;
use CareMd\CareMd\CareOps301EsQuery as ChildCareOps301EsQuery;
use CareMd\CareMd\Map\CareOps301EsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_ops301_es' table.
 *
 *
 *
 * @method     ChildCareOps301EsQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareOps301EsQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareOps301EsQuery orderByInclusive($order = Criteria::ASC) Order by the inclusive column
 * @method     ChildCareOps301EsQuery orderByExclusive($order = Criteria::ASC) Order by the exclusive column
 * @method     ChildCareOps301EsQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareOps301EsQuery orderByStdCode($order = Criteria::ASC) Order by the std_code column
 * @method     ChildCareOps301EsQuery orderBySubLevel($order = Criteria::ASC) Order by the sub_level column
 * @method     ChildCareOps301EsQuery orderByRemarks($order = Criteria::ASC) Order by the remarks column
 *
 * @method     ChildCareOps301EsQuery groupByCode() Group by the code column
 * @method     ChildCareOps301EsQuery groupByDescription() Group by the description column
 * @method     ChildCareOps301EsQuery groupByInclusive() Group by the inclusive column
 * @method     ChildCareOps301EsQuery groupByExclusive() Group by the exclusive column
 * @method     ChildCareOps301EsQuery groupByNotes() Group by the notes column
 * @method     ChildCareOps301EsQuery groupByStdCode() Group by the std_code column
 * @method     ChildCareOps301EsQuery groupBySubLevel() Group by the sub_level column
 * @method     ChildCareOps301EsQuery groupByRemarks() Group by the remarks column
 *
 * @method     ChildCareOps301EsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareOps301EsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareOps301EsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareOps301EsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareOps301EsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareOps301EsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareOps301Es findOne(ConnectionInterface $con = null) Return the first ChildCareOps301Es matching the query
 * @method     ChildCareOps301Es findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareOps301Es matching the query, or a new ChildCareOps301Es object populated from the query conditions when no match is found
 *
 * @method     ChildCareOps301Es findOneByCode(string $code) Return the first ChildCareOps301Es filtered by the code column
 * @method     ChildCareOps301Es findOneByDescription(string $description) Return the first ChildCareOps301Es filtered by the description column
 * @method     ChildCareOps301Es findOneByInclusive(string $inclusive) Return the first ChildCareOps301Es filtered by the inclusive column
 * @method     ChildCareOps301Es findOneByExclusive(string $exclusive) Return the first ChildCareOps301Es filtered by the exclusive column
 * @method     ChildCareOps301Es findOneByNotes(string $notes) Return the first ChildCareOps301Es filtered by the notes column
 * @method     ChildCareOps301Es findOneByStdCode(string $std_code) Return the first ChildCareOps301Es filtered by the std_code column
 * @method     ChildCareOps301Es findOneBySubLevel(int $sub_level) Return the first ChildCareOps301Es filtered by the sub_level column
 * @method     ChildCareOps301Es findOneByRemarks(string $remarks) Return the first ChildCareOps301Es filtered by the remarks column *

 * @method     ChildCareOps301Es requirePk($key, ConnectionInterface $con = null) Return the ChildCareOps301Es by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOps301Es requireOne(ConnectionInterface $con = null) Return the first ChildCareOps301Es matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareOps301Es requireOneByCode(string $code) Return the first ChildCareOps301Es filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOps301Es requireOneByDescription(string $description) Return the first ChildCareOps301Es filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOps301Es requireOneByInclusive(string $inclusive) Return the first ChildCareOps301Es filtered by the inclusive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOps301Es requireOneByExclusive(string $exclusive) Return the first ChildCareOps301Es filtered by the exclusive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOps301Es requireOneByNotes(string $notes) Return the first ChildCareOps301Es filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOps301Es requireOneByStdCode(string $std_code) Return the first ChildCareOps301Es filtered by the std_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOps301Es requireOneBySubLevel(int $sub_level) Return the first ChildCareOps301Es filtered by the sub_level column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOps301Es requireOneByRemarks(string $remarks) Return the first ChildCareOps301Es filtered by the remarks column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareOps301Es[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareOps301Es objects based on current ModelCriteria
 * @method     ChildCareOps301Es[]|ObjectCollection findByCode(string $code) Return ChildCareOps301Es objects filtered by the code column
 * @method     ChildCareOps301Es[]|ObjectCollection findByDescription(string $description) Return ChildCareOps301Es objects filtered by the description column
 * @method     ChildCareOps301Es[]|ObjectCollection findByInclusive(string $inclusive) Return ChildCareOps301Es objects filtered by the inclusive column
 * @method     ChildCareOps301Es[]|ObjectCollection findByExclusive(string $exclusive) Return ChildCareOps301Es objects filtered by the exclusive column
 * @method     ChildCareOps301Es[]|ObjectCollection findByNotes(string $notes) Return ChildCareOps301Es objects filtered by the notes column
 * @method     ChildCareOps301Es[]|ObjectCollection findByStdCode(string $std_code) Return ChildCareOps301Es objects filtered by the std_code column
 * @method     ChildCareOps301Es[]|ObjectCollection findBySubLevel(int $sub_level) Return ChildCareOps301Es objects filtered by the sub_level column
 * @method     ChildCareOps301Es[]|ObjectCollection findByRemarks(string $remarks) Return ChildCareOps301Es objects filtered by the remarks column
 * @method     ChildCareOps301Es[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareOps301EsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareOps301EsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareOps301Es', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareOps301EsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareOps301EsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareOps301EsQuery) {
            return $criteria;
        }
        $query = new ChildCareOps301EsQuery();
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
     * @return ChildCareOps301Es|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareOps301Es object has no primary key');
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
        throw new LogicException('The CareOps301Es object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareOps301Es object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareOps301Es object has no primary key');
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOps301EsTableMap::COL_CODE, $code, $comparison);
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
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOps301EsTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the inclusive column
     *
     * Example usage:
     * <code>
     * $query->filterByInclusive('fooValue');   // WHERE inclusive = 'fooValue'
     * $query->filterByInclusive('%fooValue%', Criteria::LIKE); // WHERE inclusive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inclusive The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function filterByInclusive($inclusive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inclusive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOps301EsTableMap::COL_INCLUSIVE, $inclusive, $comparison);
    }

    /**
     * Filter the query on the exclusive column
     *
     * Example usage:
     * <code>
     * $query->filterByExclusive('fooValue');   // WHERE exclusive = 'fooValue'
     * $query->filterByExclusive('%fooValue%', Criteria::LIKE); // WHERE exclusive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exclusive The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function filterByExclusive($exclusive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exclusive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOps301EsTableMap::COL_EXCLUSIVE, $exclusive, $comparison);
    }

    /**
     * Filter the query on the notes column
     *
     * Example usage:
     * <code>
     * $query->filterByNotes('fooValue');   // WHERE notes = 'fooValue'
     * $query->filterByNotes('%fooValue%', Criteria::LIKE); // WHERE notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOps301EsTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the std_code column
     *
     * Example usage:
     * <code>
     * $query->filterByStdCode('fooValue');   // WHERE std_code = 'fooValue'
     * $query->filterByStdCode('%fooValue%', Criteria::LIKE); // WHERE std_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stdCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function filterByStdCode($stdCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stdCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOps301EsTableMap::COL_STD_CODE, $stdCode, $comparison);
    }

    /**
     * Filter the query on the sub_level column
     *
     * Example usage:
     * <code>
     * $query->filterBySubLevel(1234); // WHERE sub_level = 1234
     * $query->filterBySubLevel(array(12, 34)); // WHERE sub_level IN (12, 34)
     * $query->filterBySubLevel(array('min' => 12)); // WHERE sub_level > 12
     * </code>
     *
     * @param     mixed $subLevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function filterBySubLevel($subLevel = null, $comparison = null)
    {
        if (is_array($subLevel)) {
            $useMinMax = false;
            if (isset($subLevel['min'])) {
                $this->addUsingAlias(CareOps301EsTableMap::COL_SUB_LEVEL, $subLevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subLevel['max'])) {
                $this->addUsingAlias(CareOps301EsTableMap::COL_SUB_LEVEL, $subLevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOps301EsTableMap::COL_SUB_LEVEL, $subLevel, $comparison);
    }

    /**
     * Filter the query on the remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%', Criteria::LIKE); // WHERE remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOps301EsTableMap::COL_REMARKS, $remarks, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareOps301Es $careOps301Es Object to remove from the list of results
     *
     * @return $this|ChildCareOps301EsQuery The current query, for fluid interface
     */
    public function prune($careOps301Es = null)
    {
        if ($careOps301Es) {
            throw new LogicException('CareOps301Es object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_ops301_es table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareOps301EsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareOps301EsTableMap::clearInstancePool();
            CareOps301EsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareOps301EsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareOps301EsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareOps301EsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareOps301EsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareOps301EsQuery
