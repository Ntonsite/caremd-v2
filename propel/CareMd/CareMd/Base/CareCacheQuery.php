<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareCache as ChildCareCache;
use CareMd\CareMd\CareCacheQuery as ChildCareCacheQuery;
use CareMd\CareMd\Map\CareCacheTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_cache' table.
 *
 *
 *
 * @method     ChildCareCacheQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareCacheQuery orderByCtext($order = Criteria::ASC) Order by the ctext column
 * @method     ChildCareCacheQuery orderByCbinary($order = Criteria::ASC) Order by the cbinary column
 * @method     ChildCareCacheQuery orderByTstamp($order = Criteria::ASC) Order by the tstamp column
 *
 * @method     ChildCareCacheQuery groupById() Group by the id column
 * @method     ChildCareCacheQuery groupByCtext() Group by the ctext column
 * @method     ChildCareCacheQuery groupByCbinary() Group by the cbinary column
 * @method     ChildCareCacheQuery groupByTstamp() Group by the tstamp column
 *
 * @method     ChildCareCacheQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareCacheQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareCacheQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareCacheQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareCacheQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareCacheQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareCache findOne(ConnectionInterface $con = null) Return the first ChildCareCache matching the query
 * @method     ChildCareCache findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareCache matching the query, or a new ChildCareCache object populated from the query conditions when no match is found
 *
 * @method     ChildCareCache findOneById(string $id) Return the first ChildCareCache filtered by the id column
 * @method     ChildCareCache findOneByCtext(string $ctext) Return the first ChildCareCache filtered by the ctext column
 * @method     ChildCareCache findOneByCbinary(resource $cbinary) Return the first ChildCareCache filtered by the cbinary column
 * @method     ChildCareCache findOneByTstamp(string $tstamp) Return the first ChildCareCache filtered by the tstamp column *

 * @method     ChildCareCache requirePk($key, ConnectionInterface $con = null) Return the ChildCareCache by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCache requireOne(ConnectionInterface $con = null) Return the first ChildCareCache matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareCache requireOneById(string $id) Return the first ChildCareCache filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCache requireOneByCtext(string $ctext) Return the first ChildCareCache filtered by the ctext column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCache requireOneByCbinary(resource $cbinary) Return the first ChildCareCache filtered by the cbinary column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareCache requireOneByTstamp(string $tstamp) Return the first ChildCareCache filtered by the tstamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareCache[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareCache objects based on current ModelCriteria
 * @method     ChildCareCache[]|ObjectCollection findById(string $id) Return ChildCareCache objects filtered by the id column
 * @method     ChildCareCache[]|ObjectCollection findByCtext(string $ctext) Return ChildCareCache objects filtered by the ctext column
 * @method     ChildCareCache[]|ObjectCollection findByCbinary(resource $cbinary) Return ChildCareCache objects filtered by the cbinary column
 * @method     ChildCareCache[]|ObjectCollection findByTstamp(string $tstamp) Return ChildCareCache objects filtered by the tstamp column
 * @method     ChildCareCache[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareCacheQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareCacheQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareCache', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareCacheQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareCacheQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareCacheQuery) {
            return $criteria;
        }
        $query = new ChildCareCacheQuery();
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
     * @return ChildCareCache|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareCacheTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareCacheTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareCache A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, ctext, cbinary, tstamp FROM care_cache WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareCache $obj */
            $obj = new ChildCareCache();
            $obj->hydrate($row);
            CareCacheTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareCache|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareCacheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareCacheTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareCacheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareCacheTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE id = 'fooValue'
     * $query->filterById('%fooValue%', Criteria::LIKE); // WHERE id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCacheQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCacheTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the ctext column
     *
     * Example usage:
     * <code>
     * $query->filterByCtext('fooValue');   // WHERE ctext = 'fooValue'
     * $query->filterByCtext('%fooValue%', Criteria::LIKE); // WHERE ctext LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCacheQuery The current query, for fluid interface
     */
    public function filterByCtext($ctext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCacheTableMap::COL_CTEXT, $ctext, $comparison);
    }

    /**
     * Filter the query on the cbinary column
     *
     * @param     mixed $cbinary The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCacheQuery The current query, for fluid interface
     */
    public function filterByCbinary($cbinary = null, $comparison = null)
    {

        return $this->addUsingAlias(CareCacheTableMap::COL_CBINARY, $cbinary, $comparison);
    }

    /**
     * Filter the query on the tstamp column
     *
     * Example usage:
     * <code>
     * $query->filterByTstamp('2011-03-14'); // WHERE tstamp = '2011-03-14'
     * $query->filterByTstamp('now'); // WHERE tstamp = '2011-03-14'
     * $query->filterByTstamp(array('max' => 'yesterday')); // WHERE tstamp > '2011-03-13'
     * </code>
     *
     * @param     mixed $tstamp The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareCacheQuery The current query, for fluid interface
     */
    public function filterByTstamp($tstamp = null, $comparison = null)
    {
        if (is_array($tstamp)) {
            $useMinMax = false;
            if (isset($tstamp['min'])) {
                $this->addUsingAlias(CareCacheTableMap::COL_TSTAMP, $tstamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tstamp['max'])) {
                $this->addUsingAlias(CareCacheTableMap::COL_TSTAMP, $tstamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareCacheTableMap::COL_TSTAMP, $tstamp, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareCache $careCache Object to remove from the list of results
     *
     * @return $this|ChildCareCacheQuery The current query, for fluid interface
     */
    public function prune($careCache = null)
    {
        if ($careCache) {
            $this->addUsingAlias(CareCacheTableMap::COL_ID, $careCache->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_cache table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareCacheTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareCacheTableMap::clearInstancePool();
            CareCacheTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareCacheTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareCacheTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareCacheTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareCacheTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareCacheQuery
