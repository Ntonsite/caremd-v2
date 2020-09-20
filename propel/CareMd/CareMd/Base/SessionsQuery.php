<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\Sessions as ChildSessions;
use CareMd\CareMd\SessionsQuery as ChildSessionsQuery;
use CareMd\CareMd\Map\SessionsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'sessions' table.
 *
 *
 *
 * @method     ChildSessionsQuery orderBySesskey($order = Criteria::ASC) Order by the SESSKEY column
 * @method     ChildSessionsQuery orderByExpiry($order = Criteria::ASC) Order by the EXPIRY column
 * @method     ChildSessionsQuery orderByExpireref($order = Criteria::ASC) Order by the EXPIREREF column
 * @method     ChildSessionsQuery orderByData($order = Criteria::ASC) Order by the DATA column
 *
 * @method     ChildSessionsQuery groupBySesskey() Group by the SESSKEY column
 * @method     ChildSessionsQuery groupByExpiry() Group by the EXPIRY column
 * @method     ChildSessionsQuery groupByExpireref() Group by the EXPIREREF column
 * @method     ChildSessionsQuery groupByData() Group by the DATA column
 *
 * @method     ChildSessionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSessionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSessionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSessionsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSessionsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSessionsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSessions findOne(ConnectionInterface $con = null) Return the first ChildSessions matching the query
 * @method     ChildSessions findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSessions matching the query, or a new ChildSessions object populated from the query conditions when no match is found
 *
 * @method     ChildSessions findOneBySesskey(string $SESSKEY) Return the first ChildSessions filtered by the SESSKEY column
 * @method     ChildSessions findOneByExpiry(int $EXPIRY) Return the first ChildSessions filtered by the EXPIRY column
 * @method     ChildSessions findOneByExpireref(string $EXPIREREF) Return the first ChildSessions filtered by the EXPIREREF column
 * @method     ChildSessions findOneByData(string $DATA) Return the first ChildSessions filtered by the DATA column *

 * @method     ChildSessions requirePk($key, ConnectionInterface $con = null) Return the ChildSessions by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSessions requireOne(ConnectionInterface $con = null) Return the first ChildSessions matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSessions requireOneBySesskey(string $SESSKEY) Return the first ChildSessions filtered by the SESSKEY column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSessions requireOneByExpiry(int $EXPIRY) Return the first ChildSessions filtered by the EXPIRY column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSessions requireOneByExpireref(string $EXPIREREF) Return the first ChildSessions filtered by the EXPIREREF column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSessions requireOneByData(string $DATA) Return the first ChildSessions filtered by the DATA column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSessions[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSessions objects based on current ModelCriteria
 * @method     ChildSessions[]|ObjectCollection findBySesskey(string $SESSKEY) Return ChildSessions objects filtered by the SESSKEY column
 * @method     ChildSessions[]|ObjectCollection findByExpiry(int $EXPIRY) Return ChildSessions objects filtered by the EXPIRY column
 * @method     ChildSessions[]|ObjectCollection findByExpireref(string $EXPIREREF) Return ChildSessions objects filtered by the EXPIREREF column
 * @method     ChildSessions[]|ObjectCollection findByData(string $DATA) Return ChildSessions objects filtered by the DATA column
 * @method     ChildSessions[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SessionsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\SessionsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\Sessions', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSessionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSessionsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSessionsQuery) {
            return $criteria;
        }
        $query = new ChildSessionsQuery();
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
     * @return ChildSessions|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SessionsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SessionsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSessions A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT SESSKEY, EXPIRY, EXPIREREF, DATA FROM sessions WHERE SESSKEY = :p0';
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
            /** @var ChildSessions $obj */
            $obj = new ChildSessions();
            $obj->hydrate($row);
            SessionsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSessions|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SessionsTableMap::COL_SESSKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SessionsTableMap::COL_SESSKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the SESSKEY column
     *
     * Example usage:
     * <code>
     * $query->filterBySesskey('fooValue');   // WHERE SESSKEY = 'fooValue'
     * $query->filterBySesskey('%fooValue%', Criteria::LIKE); // WHERE SESSKEY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sesskey The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterBySesskey($sesskey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sesskey)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SessionsTableMap::COL_SESSKEY, $sesskey, $comparison);
    }

    /**
     * Filter the query on the EXPIRY column
     *
     * Example usage:
     * <code>
     * $query->filterByExpiry(1234); // WHERE EXPIRY = 1234
     * $query->filterByExpiry(array(12, 34)); // WHERE EXPIRY IN (12, 34)
     * $query->filterByExpiry(array('min' => 12)); // WHERE EXPIRY > 12
     * </code>
     *
     * @param     mixed $expiry The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByExpiry($expiry = null, $comparison = null)
    {
        if (is_array($expiry)) {
            $useMinMax = false;
            if (isset($expiry['min'])) {
                $this->addUsingAlias(SessionsTableMap::COL_EXPIRY, $expiry['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expiry['max'])) {
                $this->addUsingAlias(SessionsTableMap::COL_EXPIRY, $expiry['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SessionsTableMap::COL_EXPIRY, $expiry, $comparison);
    }

    /**
     * Filter the query on the EXPIREREF column
     *
     * Example usage:
     * <code>
     * $query->filterByExpireref('fooValue');   // WHERE EXPIREREF = 'fooValue'
     * $query->filterByExpireref('%fooValue%', Criteria::LIKE); // WHERE EXPIREREF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expireref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByExpireref($expireref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expireref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SessionsTableMap::COL_EXPIREREF, $expireref, $comparison);
    }

    /**
     * Filter the query on the DATA column
     *
     * Example usage:
     * <code>
     * $query->filterByData('fooValue');   // WHERE DATA = 'fooValue'
     * $query->filterByData('%fooValue%', Criteria::LIKE); // WHERE DATA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByData($data = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SessionsTableMap::COL_DATA, $data, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSessions $sessions Object to remove from the list of results
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function prune($sessions = null)
    {
        if ($sessions) {
            $this->addUsingAlias(SessionsTableMap::COL_SESSKEY, $sessions->getSesskey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sessions table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SessionsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SessionsTableMap::clearInstancePool();
            SessionsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SessionsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SessionsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SessionsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SessionsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SessionsQuery
