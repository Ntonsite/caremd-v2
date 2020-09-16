<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzVillage as ChildCareTzVillage;
use CareMd\CareMd\CareTzVillageQuery as ChildCareTzVillageQuery;
use CareMd\CareMd\Map\CareTzVillageTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_village' table.
 *
 *
 *
 * @method     ChildCareTzVillageQuery orderByVillageId($order = Criteria::ASC) Order by the village_id column
 * @method     ChildCareTzVillageQuery orderByVillageCode($order = Criteria::ASC) Order by the village_code column
 * @method     ChildCareTzVillageQuery orderByVillageName($order = Criteria::ASC) Order by the village_name column
 * @method     ChildCareTzVillageQuery orderByIsAdditional($order = Criteria::ASC) Order by the is_additional column
 *
 * @method     ChildCareTzVillageQuery groupByVillageId() Group by the village_id column
 * @method     ChildCareTzVillageQuery groupByVillageCode() Group by the village_code column
 * @method     ChildCareTzVillageQuery groupByVillageName() Group by the village_name column
 * @method     ChildCareTzVillageQuery groupByIsAdditional() Group by the is_additional column
 *
 * @method     ChildCareTzVillageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzVillageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzVillageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzVillageQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzVillageQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzVillageQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzVillage findOne(ConnectionInterface $con = null) Return the first ChildCareTzVillage matching the query
 * @method     ChildCareTzVillage findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzVillage matching the query, or a new ChildCareTzVillage object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzVillage findOneByVillageId(int $village_id) Return the first ChildCareTzVillage filtered by the village_id column
 * @method     ChildCareTzVillage findOneByVillageCode(string $village_code) Return the first ChildCareTzVillage filtered by the village_code column
 * @method     ChildCareTzVillage findOneByVillageName(string $village_name) Return the first ChildCareTzVillage filtered by the village_name column
 * @method     ChildCareTzVillage findOneByIsAdditional(string $is_additional) Return the first ChildCareTzVillage filtered by the is_additional column *

 * @method     ChildCareTzVillage requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzVillage by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzVillage requireOne(ConnectionInterface $con = null) Return the first ChildCareTzVillage matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzVillage requireOneByVillageId(int $village_id) Return the first ChildCareTzVillage filtered by the village_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzVillage requireOneByVillageCode(string $village_code) Return the first ChildCareTzVillage filtered by the village_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzVillage requireOneByVillageName(string $village_name) Return the first ChildCareTzVillage filtered by the village_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzVillage requireOneByIsAdditional(string $is_additional) Return the first ChildCareTzVillage filtered by the is_additional column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzVillage[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzVillage objects based on current ModelCriteria
 * @method     ChildCareTzVillage[]|ObjectCollection findByVillageId(int $village_id) Return ChildCareTzVillage objects filtered by the village_id column
 * @method     ChildCareTzVillage[]|ObjectCollection findByVillageCode(string $village_code) Return ChildCareTzVillage objects filtered by the village_code column
 * @method     ChildCareTzVillage[]|ObjectCollection findByVillageName(string $village_name) Return ChildCareTzVillage objects filtered by the village_name column
 * @method     ChildCareTzVillage[]|ObjectCollection findByIsAdditional(string $is_additional) Return ChildCareTzVillage objects filtered by the is_additional column
 * @method     ChildCareTzVillage[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzVillageQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzVillageQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzVillage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzVillageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzVillageQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzVillageQuery) {
            return $criteria;
        }
        $query = new ChildCareTzVillageQuery();
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
     * @return ChildCareTzVillage|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzVillageTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzVillageTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzVillage A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT village_id, village_code, village_name, is_additional FROM care_tz_village WHERE village_id = :p0';
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
            /** @var ChildCareTzVillage $obj */
            $obj = new ChildCareTzVillage();
            $obj->hydrate($row);
            CareTzVillageTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzVillage|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzVillageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzVillageTableMap::COL_VILLAGE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzVillageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzVillageTableMap::COL_VILLAGE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the village_id column
     *
     * Example usage:
     * <code>
     * $query->filterByVillageId(1234); // WHERE village_id = 1234
     * $query->filterByVillageId(array(12, 34)); // WHERE village_id IN (12, 34)
     * $query->filterByVillageId(array('min' => 12)); // WHERE village_id > 12
     * </code>
     *
     * @param     mixed $villageId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzVillageQuery The current query, for fluid interface
     */
    public function filterByVillageId($villageId = null, $comparison = null)
    {
        if (is_array($villageId)) {
            $useMinMax = false;
            if (isset($villageId['min'])) {
                $this->addUsingAlias(CareTzVillageTableMap::COL_VILLAGE_ID, $villageId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($villageId['max'])) {
                $this->addUsingAlias(CareTzVillageTableMap::COL_VILLAGE_ID, $villageId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzVillageTableMap::COL_VILLAGE_ID, $villageId, $comparison);
    }

    /**
     * Filter the query on the village_code column
     *
     * Example usage:
     * <code>
     * $query->filterByVillageCode('fooValue');   // WHERE village_code = 'fooValue'
     * $query->filterByVillageCode('%fooValue%', Criteria::LIKE); // WHERE village_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villageCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzVillageQuery The current query, for fluid interface
     */
    public function filterByVillageCode($villageCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villageCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzVillageTableMap::COL_VILLAGE_CODE, $villageCode, $comparison);
    }

    /**
     * Filter the query on the village_name column
     *
     * Example usage:
     * <code>
     * $query->filterByVillageName('fooValue');   // WHERE village_name = 'fooValue'
     * $query->filterByVillageName('%fooValue%', Criteria::LIKE); // WHERE village_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villageName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzVillageQuery The current query, for fluid interface
     */
    public function filterByVillageName($villageName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villageName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzVillageTableMap::COL_VILLAGE_NAME, $villageName, $comparison);
    }

    /**
     * Filter the query on the is_additional column
     *
     * Example usage:
     * <code>
     * $query->filterByIsAdditional('fooValue');   // WHERE is_additional = 'fooValue'
     * $query->filterByIsAdditional('%fooValue%', Criteria::LIKE); // WHERE is_additional LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isAdditional The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzVillageQuery The current query, for fluid interface
     */
    public function filterByIsAdditional($isAdditional = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isAdditional)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzVillageTableMap::COL_IS_ADDITIONAL, $isAdditional, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzVillage $careTzVillage Object to remove from the list of results
     *
     * @return $this|ChildCareTzVillageQuery The current query, for fluid interface
     */
    public function prune($careTzVillage = null)
    {
        if ($careTzVillage) {
            $this->addUsingAlias(CareTzVillageTableMap::COL_VILLAGE_ID, $careTzVillage->getVillageId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_village table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzVillageTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzVillageTableMap::clearInstancePool();
            CareTzVillageTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzVillageTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzVillageTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzVillageTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzVillageTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzVillageQuery
