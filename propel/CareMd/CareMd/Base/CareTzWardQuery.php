<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzWard as ChildCareTzWard;
use CareMd\CareMd\CareTzWardQuery as ChildCareTzWardQuery;
use CareMd\CareMd\Map\CareTzWardTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_ward' table.
 *
 *
 *
 * @method     ChildCareTzWardQuery orderByWardId($order = Criteria::ASC) Order by the ward_id column
 * @method     ChildCareTzWardQuery orderByWardCode($order = Criteria::ASC) Order by the ward_code column
 * @method     ChildCareTzWardQuery orderByWardName($order = Criteria::ASC) Order by the ward_name column
 * @method     ChildCareTzWardQuery orderByIsAdditional($order = Criteria::ASC) Order by the is_additional column
 *
 * @method     ChildCareTzWardQuery groupByWardId() Group by the ward_id column
 * @method     ChildCareTzWardQuery groupByWardCode() Group by the ward_code column
 * @method     ChildCareTzWardQuery groupByWardName() Group by the ward_name column
 * @method     ChildCareTzWardQuery groupByIsAdditional() Group by the is_additional column
 *
 * @method     ChildCareTzWardQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzWardQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzWardQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzWardQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzWardQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzWardQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzWard findOne(ConnectionInterface $con = null) Return the first ChildCareTzWard matching the query
 * @method     ChildCareTzWard findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzWard matching the query, or a new ChildCareTzWard object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzWard findOneByWardId(int $ward_id) Return the first ChildCareTzWard filtered by the ward_id column
 * @method     ChildCareTzWard findOneByWardCode(int $ward_code) Return the first ChildCareTzWard filtered by the ward_code column
 * @method     ChildCareTzWard findOneByWardName(string $ward_name) Return the first ChildCareTzWard filtered by the ward_name column
 * @method     ChildCareTzWard findOneByIsAdditional(int $is_additional) Return the first ChildCareTzWard filtered by the is_additional column *

 * @method     ChildCareTzWard requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzWard by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzWard requireOne(ConnectionInterface $con = null) Return the first ChildCareTzWard matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzWard requireOneByWardId(int $ward_id) Return the first ChildCareTzWard filtered by the ward_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzWard requireOneByWardCode(int $ward_code) Return the first ChildCareTzWard filtered by the ward_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzWard requireOneByWardName(string $ward_name) Return the first ChildCareTzWard filtered by the ward_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzWard requireOneByIsAdditional(int $is_additional) Return the first ChildCareTzWard filtered by the is_additional column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzWard[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzWard objects based on current ModelCriteria
 * @method     ChildCareTzWard[]|ObjectCollection findByWardId(int $ward_id) Return ChildCareTzWard objects filtered by the ward_id column
 * @method     ChildCareTzWard[]|ObjectCollection findByWardCode(int $ward_code) Return ChildCareTzWard objects filtered by the ward_code column
 * @method     ChildCareTzWard[]|ObjectCollection findByWardName(string $ward_name) Return ChildCareTzWard objects filtered by the ward_name column
 * @method     ChildCareTzWard[]|ObjectCollection findByIsAdditional(int $is_additional) Return ChildCareTzWard objects filtered by the is_additional column
 * @method     ChildCareTzWard[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzWardQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzWardQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzWard', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzWardQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzWardQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzWardQuery) {
            return $criteria;
        }
        $query = new ChildCareTzWardQuery();
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
     * @return ChildCareTzWard|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzWardTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzWardTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzWard A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ward_id, ward_code, ward_name, is_additional FROM care_tz_ward WHERE ward_id = :p0';
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
            /** @var ChildCareTzWard $obj */
            $obj = new ChildCareTzWard();
            $obj->hydrate($row);
            CareTzWardTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzWard|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzWardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzWardTableMap::COL_WARD_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzWardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzWardTableMap::COL_WARD_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ward_id column
     *
     * Example usage:
     * <code>
     * $query->filterByWardId(1234); // WHERE ward_id = 1234
     * $query->filterByWardId(array(12, 34)); // WHERE ward_id IN (12, 34)
     * $query->filterByWardId(array('min' => 12)); // WHERE ward_id > 12
     * </code>
     *
     * @param     mixed $wardId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzWardQuery The current query, for fluid interface
     */
    public function filterByWardId($wardId = null, $comparison = null)
    {
        if (is_array($wardId)) {
            $useMinMax = false;
            if (isset($wardId['min'])) {
                $this->addUsingAlias(CareTzWardTableMap::COL_WARD_ID, $wardId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wardId['max'])) {
                $this->addUsingAlias(CareTzWardTableMap::COL_WARD_ID, $wardId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzWardTableMap::COL_WARD_ID, $wardId, $comparison);
    }

    /**
     * Filter the query on the ward_code column
     *
     * Example usage:
     * <code>
     * $query->filterByWardCode(1234); // WHERE ward_code = 1234
     * $query->filterByWardCode(array(12, 34)); // WHERE ward_code IN (12, 34)
     * $query->filterByWardCode(array('min' => 12)); // WHERE ward_code > 12
     * </code>
     *
     * @param     mixed $wardCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzWardQuery The current query, for fluid interface
     */
    public function filterByWardCode($wardCode = null, $comparison = null)
    {
        if (is_array($wardCode)) {
            $useMinMax = false;
            if (isset($wardCode['min'])) {
                $this->addUsingAlias(CareTzWardTableMap::COL_WARD_CODE, $wardCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wardCode['max'])) {
                $this->addUsingAlias(CareTzWardTableMap::COL_WARD_CODE, $wardCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzWardTableMap::COL_WARD_CODE, $wardCode, $comparison);
    }

    /**
     * Filter the query on the ward_name column
     *
     * Example usage:
     * <code>
     * $query->filterByWardName('fooValue');   // WHERE ward_name = 'fooValue'
     * $query->filterByWardName('%fooValue%', Criteria::LIKE); // WHERE ward_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wardName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzWardQuery The current query, for fluid interface
     */
    public function filterByWardName($wardName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wardName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzWardTableMap::COL_WARD_NAME, $wardName, $comparison);
    }

    /**
     * Filter the query on the is_additional column
     *
     * Example usage:
     * <code>
     * $query->filterByIsAdditional(1234); // WHERE is_additional = 1234
     * $query->filterByIsAdditional(array(12, 34)); // WHERE is_additional IN (12, 34)
     * $query->filterByIsAdditional(array('min' => 12)); // WHERE is_additional > 12
     * </code>
     *
     * @param     mixed $isAdditional The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzWardQuery The current query, for fluid interface
     */
    public function filterByIsAdditional($isAdditional = null, $comparison = null)
    {
        if (is_array($isAdditional)) {
            $useMinMax = false;
            if (isset($isAdditional['min'])) {
                $this->addUsingAlias(CareTzWardTableMap::COL_IS_ADDITIONAL, $isAdditional['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isAdditional['max'])) {
                $this->addUsingAlias(CareTzWardTableMap::COL_IS_ADDITIONAL, $isAdditional['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzWardTableMap::COL_IS_ADDITIONAL, $isAdditional, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzWard $careTzWard Object to remove from the list of results
     *
     * @return $this|ChildCareTzWardQuery The current query, for fluid interface
     */
    public function prune($careTzWard = null)
    {
        if ($careTzWard) {
            $this->addUsingAlias(CareTzWardTableMap::COL_WARD_ID, $careTzWard->getWardId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_ward table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzWardTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzWardTableMap::clearInstancePool();
            CareTzWardTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzWardTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzWardTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzWardTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzWardTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzWardQuery
