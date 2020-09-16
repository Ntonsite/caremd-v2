<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTypeColor as ChildCareTypeColor;
use CareMd\CareMd\CareTypeColorQuery as ChildCareTypeColorQuery;
use CareMd\CareMd\Map\CareTypeColorTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_type_color' table.
 *
 *
 *
 * @method     ChildCareTypeColorQuery orderByColorId($order = Criteria::ASC) Order by the color_id column
 * @method     ChildCareTypeColorQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTypeColorQuery orderByLdVar($order = Criteria::ASC) Order by the LD_var column
 * @method     ChildCareTypeColorQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTypeColorQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTypeColorQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 *
 * @method     ChildCareTypeColorQuery groupByColorId() Group by the color_id column
 * @method     ChildCareTypeColorQuery groupByName() Group by the name column
 * @method     ChildCareTypeColorQuery groupByLdVar() Group by the LD_var column
 * @method     ChildCareTypeColorQuery groupByStatus() Group by the status column
 * @method     ChildCareTypeColorQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTypeColorQuery groupByModifyTime() Group by the modify_time column
 *
 * @method     ChildCareTypeColorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTypeColorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTypeColorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTypeColorQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTypeColorQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTypeColorQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTypeColor findOne(ConnectionInterface $con = null) Return the first ChildCareTypeColor matching the query
 * @method     ChildCareTypeColor findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTypeColor matching the query, or a new ChildCareTypeColor object populated from the query conditions when no match is found
 *
 * @method     ChildCareTypeColor findOneByColorId(string $color_id) Return the first ChildCareTypeColor filtered by the color_id column
 * @method     ChildCareTypeColor findOneByName(string $name) Return the first ChildCareTypeColor filtered by the name column
 * @method     ChildCareTypeColor findOneByLdVar(string $LD_var) Return the first ChildCareTypeColor filtered by the LD_var column
 * @method     ChildCareTypeColor findOneByStatus(string $status) Return the first ChildCareTypeColor filtered by the status column
 * @method     ChildCareTypeColor findOneByModifyId(string $modify_id) Return the first ChildCareTypeColor filtered by the modify_id column
 * @method     ChildCareTypeColor findOneByModifyTime(string $modify_time) Return the first ChildCareTypeColor filtered by the modify_time column *

 * @method     ChildCareTypeColor requirePk($key, ConnectionInterface $con = null) Return the ChildCareTypeColor by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeColor requireOne(ConnectionInterface $con = null) Return the first ChildCareTypeColor matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTypeColor requireOneByColorId(string $color_id) Return the first ChildCareTypeColor filtered by the color_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeColor requireOneByName(string $name) Return the first ChildCareTypeColor filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeColor requireOneByLdVar(string $LD_var) Return the first ChildCareTypeColor filtered by the LD_var column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeColor requireOneByStatus(string $status) Return the first ChildCareTypeColor filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeColor requireOneByModifyId(string $modify_id) Return the first ChildCareTypeColor filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeColor requireOneByModifyTime(string $modify_time) Return the first ChildCareTypeColor filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTypeColor[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTypeColor objects based on current ModelCriteria
 * @method     ChildCareTypeColor[]|ObjectCollection findByColorId(string $color_id) Return ChildCareTypeColor objects filtered by the color_id column
 * @method     ChildCareTypeColor[]|ObjectCollection findByName(string $name) Return ChildCareTypeColor objects filtered by the name column
 * @method     ChildCareTypeColor[]|ObjectCollection findByLdVar(string $LD_var) Return ChildCareTypeColor objects filtered by the LD_var column
 * @method     ChildCareTypeColor[]|ObjectCollection findByStatus(string $status) Return ChildCareTypeColor objects filtered by the status column
 * @method     ChildCareTypeColor[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTypeColor objects filtered by the modify_id column
 * @method     ChildCareTypeColor[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTypeColor objects filtered by the modify_time column
 * @method     ChildCareTypeColor[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTypeColorQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTypeColorQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTypeColor', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTypeColorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTypeColorQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTypeColorQuery) {
            return $criteria;
        }
        $query = new ChildCareTypeColorQuery();
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
     * @return ChildCareTypeColor|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTypeColorTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTypeColorTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTypeColor A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT color_id, name, LD_var, status, modify_id, modify_time FROM care_type_color WHERE color_id = :p0';
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
            /** @var ChildCareTypeColor $obj */
            $obj = new ChildCareTypeColor();
            $obj->hydrate($row);
            CareTypeColorTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTypeColor|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTypeColorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTypeColorTableMap::COL_COLOR_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTypeColorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTypeColorTableMap::COL_COLOR_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the color_id column
     *
     * Example usage:
     * <code>
     * $query->filterByColorId('fooValue');   // WHERE color_id = 'fooValue'
     * $query->filterByColorId('%fooValue%', Criteria::LIKE); // WHERE color_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $colorId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeColorQuery The current query, for fluid interface
     */
    public function filterByColorId($colorId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($colorId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeColorTableMap::COL_COLOR_ID, $colorId, $comparison);
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
     * @return $this|ChildCareTypeColorQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeColorTableMap::COL_NAME, $name, $comparison);
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
     * @return $this|ChildCareTypeColorQuery The current query, for fluid interface
     */
    public function filterByLdVar($ldVar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ldVar)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeColorTableMap::COL_LD_VAR, $ldVar, $comparison);
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
     * @return $this|ChildCareTypeColorQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeColorTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTypeColorQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeColorTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTypeColorQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTypeColorTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTypeColorTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeColorTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTypeColor $careTypeColor Object to remove from the list of results
     *
     * @return $this|ChildCareTypeColorQuery The current query, for fluid interface
     */
    public function prune($careTypeColor = null)
    {
        if ($careTypeColor) {
            $this->addUsingAlias(CareTypeColorTableMap::COL_COLOR_ID, $careTypeColor->getColorId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_type_color table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeColorTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTypeColorTableMap::clearInstancePool();
            CareTypeColorTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeColorTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTypeColorTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTypeColorTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTypeColorTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTypeColorQuery
