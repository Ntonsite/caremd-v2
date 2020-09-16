<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareClassEthnicOrig as ChildCareClassEthnicOrig;
use CareMd\CareMd\CareClassEthnicOrigQuery as ChildCareClassEthnicOrigQuery;
use CareMd\CareMd\Map\CareClassEthnicOrigTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_class_ethnic_orig' table.
 *
 *
 *
 * @method     ChildCareClassEthnicOrigQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareClassEthnicOrigQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareClassEthnicOrigQuery orderByLdVar($order = Criteria::ASC) Order by the LD_var column
 * @method     ChildCareClassEthnicOrigQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareClassEthnicOrigQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareClassEthnicOrigQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareClassEthnicOrigQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareClassEthnicOrigQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareClassEthnicOrigQuery groupByNr() Group by the nr column
 * @method     ChildCareClassEthnicOrigQuery groupByName() Group by the name column
 * @method     ChildCareClassEthnicOrigQuery groupByLdVar() Group by the LD_var column
 * @method     ChildCareClassEthnicOrigQuery groupByStatus() Group by the status column
 * @method     ChildCareClassEthnicOrigQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareClassEthnicOrigQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareClassEthnicOrigQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareClassEthnicOrigQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareClassEthnicOrigQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareClassEthnicOrigQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareClassEthnicOrigQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareClassEthnicOrigQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareClassEthnicOrigQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareClassEthnicOrigQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareClassEthnicOrig findOne(ConnectionInterface $con = null) Return the first ChildCareClassEthnicOrig matching the query
 * @method     ChildCareClassEthnicOrig findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareClassEthnicOrig matching the query, or a new ChildCareClassEthnicOrig object populated from the query conditions when no match is found
 *
 * @method     ChildCareClassEthnicOrig findOneByNr(int $nr) Return the first ChildCareClassEthnicOrig filtered by the nr column
 * @method     ChildCareClassEthnicOrig findOneByName(string $name) Return the first ChildCareClassEthnicOrig filtered by the name column
 * @method     ChildCareClassEthnicOrig findOneByLdVar(string $LD_var) Return the first ChildCareClassEthnicOrig filtered by the LD_var column
 * @method     ChildCareClassEthnicOrig findOneByStatus(string $status) Return the first ChildCareClassEthnicOrig filtered by the status column
 * @method     ChildCareClassEthnicOrig findOneByModifyId(string $modify_id) Return the first ChildCareClassEthnicOrig filtered by the modify_id column
 * @method     ChildCareClassEthnicOrig findOneByModifyTime(string $modify_time) Return the first ChildCareClassEthnicOrig filtered by the modify_time column
 * @method     ChildCareClassEthnicOrig findOneByCreateId(string $create_id) Return the first ChildCareClassEthnicOrig filtered by the create_id column
 * @method     ChildCareClassEthnicOrig findOneByCreateTime(string $create_time) Return the first ChildCareClassEthnicOrig filtered by the create_time column *

 * @method     ChildCareClassEthnicOrig requirePk($key, ConnectionInterface $con = null) Return the ChildCareClassEthnicOrig by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassEthnicOrig requireOne(ConnectionInterface $con = null) Return the first ChildCareClassEthnicOrig matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareClassEthnicOrig requireOneByNr(int $nr) Return the first ChildCareClassEthnicOrig filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassEthnicOrig requireOneByName(string $name) Return the first ChildCareClassEthnicOrig filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassEthnicOrig requireOneByLdVar(string $LD_var) Return the first ChildCareClassEthnicOrig filtered by the LD_var column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassEthnicOrig requireOneByStatus(string $status) Return the first ChildCareClassEthnicOrig filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassEthnicOrig requireOneByModifyId(string $modify_id) Return the first ChildCareClassEthnicOrig filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassEthnicOrig requireOneByModifyTime(string $modify_time) Return the first ChildCareClassEthnicOrig filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassEthnicOrig requireOneByCreateId(string $create_id) Return the first ChildCareClassEthnicOrig filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareClassEthnicOrig requireOneByCreateTime(string $create_time) Return the first ChildCareClassEthnicOrig filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareClassEthnicOrig[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareClassEthnicOrig objects based on current ModelCriteria
 * @method     ChildCareClassEthnicOrig[]|ObjectCollection findByNr(int $nr) Return ChildCareClassEthnicOrig objects filtered by the nr column
 * @method     ChildCareClassEthnicOrig[]|ObjectCollection findByName(string $name) Return ChildCareClassEthnicOrig objects filtered by the name column
 * @method     ChildCareClassEthnicOrig[]|ObjectCollection findByLdVar(string $LD_var) Return ChildCareClassEthnicOrig objects filtered by the LD_var column
 * @method     ChildCareClassEthnicOrig[]|ObjectCollection findByStatus(string $status) Return ChildCareClassEthnicOrig objects filtered by the status column
 * @method     ChildCareClassEthnicOrig[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareClassEthnicOrig objects filtered by the modify_id column
 * @method     ChildCareClassEthnicOrig[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareClassEthnicOrig objects filtered by the modify_time column
 * @method     ChildCareClassEthnicOrig[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareClassEthnicOrig objects filtered by the create_id column
 * @method     ChildCareClassEthnicOrig[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareClassEthnicOrig objects filtered by the create_time column
 * @method     ChildCareClassEthnicOrig[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareClassEthnicOrigQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareClassEthnicOrigQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareClassEthnicOrig', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareClassEthnicOrigQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareClassEthnicOrigQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareClassEthnicOrigQuery) {
            return $criteria;
        }
        $query = new ChildCareClassEthnicOrigQuery();
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
     * @return ChildCareClassEthnicOrig|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareClassEthnicOrigTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareClassEthnicOrigTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareClassEthnicOrig A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, name, LD_var, status, modify_id, modify_time, create_id, create_time FROM care_class_ethnic_orig WHERE nr = :p0';
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
            /** @var ChildCareClassEthnicOrig $obj */
            $obj = new ChildCareClassEthnicOrig();
            $obj->hydrate($row);
            CareClassEthnicOrigTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareClassEthnicOrig|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the nr column
     *
     * Example usage:
     * <code>
     * $query->filterByNr(1234); // WHERE nr = 1234
     * $query->filterByNr(array(12, 34)); // WHERE nr IN (12, 34)
     * $query->filterByNr(array('min' => 12)); // WHERE nr > 12
     * </code>
     *
     * @param     mixed $nr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the LD_var column
     *
     * Example usage:
     * <code>
     * $query->filterByLdVar('fooValue');   // WHERE LD_var = 'fooValue'
     * $query->filterByLdVar('%fooValue%', Criteria::LIKE); // WHERE LD_var LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ldVar The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByLdVar($ldVar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ldVar)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_LD_VAR, $ldVar, $comparison);
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
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareClassEthnicOrig $careClassEthnicOrig Object to remove from the list of results
     *
     * @return $this|ChildCareClassEthnicOrigQuery The current query, for fluid interface
     */
    public function prune($careClassEthnicOrig = null)
    {
        if ($careClassEthnicOrig) {
            $this->addUsingAlias(CareClassEthnicOrigTableMap::COL_NR, $careClassEthnicOrig->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_class_ethnic_orig table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareClassEthnicOrigTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareClassEthnicOrigTableMap::clearInstancePool();
            CareClassEthnicOrigTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareClassEthnicOrigTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareClassEthnicOrigTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareClassEthnicOrigTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareClassEthnicOrigTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareClassEthnicOrigQuery
