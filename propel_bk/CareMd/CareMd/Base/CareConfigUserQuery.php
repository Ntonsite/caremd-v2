<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareConfigUser as ChildCareConfigUser;
use CareMd\CareMd\CareConfigUserQuery as ChildCareConfigUserQuery;
use CareMd\CareMd\Map\CareConfigUserTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_config_user' table.
 *
 *
 *
 * @method     ChildCareConfigUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ChildCareConfigUserQuery orderBySerialConfigData($order = Criteria::ASC) Order by the serial_config_data column
 * @method     ChildCareConfigUserQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareConfigUserQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareConfigUserQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareConfigUserQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareConfigUserQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareConfigUserQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareConfigUserQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareConfigUserQuery groupByUserId() Group by the user_id column
 * @method     ChildCareConfigUserQuery groupBySerialConfigData() Group by the serial_config_data column
 * @method     ChildCareConfigUserQuery groupByNotes() Group by the notes column
 * @method     ChildCareConfigUserQuery groupByStatus() Group by the status column
 * @method     ChildCareConfigUserQuery groupByHistory() Group by the history column
 * @method     ChildCareConfigUserQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareConfigUserQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareConfigUserQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareConfigUserQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareConfigUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareConfigUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareConfigUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareConfigUserQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareConfigUserQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareConfigUserQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareConfigUser findOne(ConnectionInterface $con = null) Return the first ChildCareConfigUser matching the query
 * @method     ChildCareConfigUser findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareConfigUser matching the query, or a new ChildCareConfigUser object populated from the query conditions when no match is found
 *
 * @method     ChildCareConfigUser findOneByUserId(string $user_id) Return the first ChildCareConfigUser filtered by the user_id column
 * @method     ChildCareConfigUser findOneBySerialConfigData(string $serial_config_data) Return the first ChildCareConfigUser filtered by the serial_config_data column
 * @method     ChildCareConfigUser findOneByNotes(string $notes) Return the first ChildCareConfigUser filtered by the notes column
 * @method     ChildCareConfigUser findOneByStatus(string $status) Return the first ChildCareConfigUser filtered by the status column
 * @method     ChildCareConfigUser findOneByHistory(string $history) Return the first ChildCareConfigUser filtered by the history column
 * @method     ChildCareConfigUser findOneByModifyId(string $modify_id) Return the first ChildCareConfigUser filtered by the modify_id column
 * @method     ChildCareConfigUser findOneByModifyTime(string $modify_time) Return the first ChildCareConfigUser filtered by the modify_time column
 * @method     ChildCareConfigUser findOneByCreateId(string $create_id) Return the first ChildCareConfigUser filtered by the create_id column
 * @method     ChildCareConfigUser findOneByCreateTime(string $create_time) Return the first ChildCareConfigUser filtered by the create_time column *

 * @method     ChildCareConfigUser requirePk($key, ConnectionInterface $con = null) Return the ChildCareConfigUser by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareConfigUser requireOne(ConnectionInterface $con = null) Return the first ChildCareConfigUser matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareConfigUser requireOneByUserId(string $user_id) Return the first ChildCareConfigUser filtered by the user_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareConfigUser requireOneBySerialConfigData(string $serial_config_data) Return the first ChildCareConfigUser filtered by the serial_config_data column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareConfigUser requireOneByNotes(string $notes) Return the first ChildCareConfigUser filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareConfigUser requireOneByStatus(string $status) Return the first ChildCareConfigUser filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareConfigUser requireOneByHistory(string $history) Return the first ChildCareConfigUser filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareConfigUser requireOneByModifyId(string $modify_id) Return the first ChildCareConfigUser filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareConfigUser requireOneByModifyTime(string $modify_time) Return the first ChildCareConfigUser filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareConfigUser requireOneByCreateId(string $create_id) Return the first ChildCareConfigUser filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareConfigUser requireOneByCreateTime(string $create_time) Return the first ChildCareConfigUser filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareConfigUser[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareConfigUser objects based on current ModelCriteria
 * @method     ChildCareConfigUser[]|ObjectCollection findByUserId(string $user_id) Return ChildCareConfigUser objects filtered by the user_id column
 * @method     ChildCareConfigUser[]|ObjectCollection findBySerialConfigData(string $serial_config_data) Return ChildCareConfigUser objects filtered by the serial_config_data column
 * @method     ChildCareConfigUser[]|ObjectCollection findByNotes(string $notes) Return ChildCareConfigUser objects filtered by the notes column
 * @method     ChildCareConfigUser[]|ObjectCollection findByStatus(string $status) Return ChildCareConfigUser objects filtered by the status column
 * @method     ChildCareConfigUser[]|ObjectCollection findByHistory(string $history) Return ChildCareConfigUser objects filtered by the history column
 * @method     ChildCareConfigUser[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareConfigUser objects filtered by the modify_id column
 * @method     ChildCareConfigUser[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareConfigUser objects filtered by the modify_time column
 * @method     ChildCareConfigUser[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareConfigUser objects filtered by the create_id column
 * @method     ChildCareConfigUser[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareConfigUser objects filtered by the create_time column
 * @method     ChildCareConfigUser[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareConfigUserQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareConfigUserQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareConfigUser', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareConfigUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareConfigUserQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareConfigUserQuery) {
            return $criteria;
        }
        $query = new ChildCareConfigUserQuery();
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
     * @return ChildCareConfigUser|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareConfigUserTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareConfigUserTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareConfigUser A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT user_id, serial_config_data, notes, status, history, modify_id, modify_time, create_id, create_time FROM care_config_user WHERE user_id = :p0';
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
            /** @var ChildCareConfigUser $obj */
            $obj = new ChildCareConfigUser();
            $obj->hydrate($row);
            CareConfigUserTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareConfigUser|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareConfigUserTableMap::COL_USER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareConfigUserTableMap::COL_USER_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId('fooValue');   // WHERE user_id = 'fooValue'
     * $query->filterByUserId('%fooValue%', Criteria::LIKE); // WHERE user_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareConfigUserTableMap::COL_USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the serial_config_data column
     *
     * Example usage:
     * <code>
     * $query->filterBySerialConfigData('fooValue');   // WHERE serial_config_data = 'fooValue'
     * $query->filterBySerialConfigData('%fooValue%', Criteria::LIKE); // WHERE serial_config_data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serialConfigData The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterBySerialConfigData($serialConfigData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serialConfigData)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareConfigUserTableMap::COL_SERIAL_CONFIG_DATA, $serialConfigData, $comparison);
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
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareConfigUserTableMap::COL_NOTES, $notes, $comparison);
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
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareConfigUserTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the history column
     *
     * Example usage:
     * <code>
     * $query->filterByHistory('fooValue');   // WHERE history = 'fooValue'
     * $query->filterByHistory('%fooValue%', Criteria::LIKE); // WHERE history LIKE '%fooValue%'
     * </code>
     *
     * @param     string $history The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareConfigUserTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareConfigUserTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareConfigUserTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareConfigUserTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareConfigUserTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareConfigUserTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareConfigUserTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareConfigUserTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareConfigUserTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareConfigUser $careConfigUser Object to remove from the list of results
     *
     * @return $this|ChildCareConfigUserQuery The current query, for fluid interface
     */
    public function prune($careConfigUser = null)
    {
        if ($careConfigUser) {
            $this->addUsingAlias(CareConfigUserTableMap::COL_USER_ID, $careConfigUser->getUserId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_config_user table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareConfigUserTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareConfigUserTableMap::clearInstancePool();
            CareConfigUserTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareConfigUserTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareConfigUserTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareConfigUserTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareConfigUserTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareConfigUserQuery
