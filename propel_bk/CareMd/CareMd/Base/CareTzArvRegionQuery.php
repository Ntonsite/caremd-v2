<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvRegion as ChildCareTzArvRegion;
use CareMd\CareMd\CareTzArvRegionQuery as ChildCareTzArvRegionQuery;
use CareMd\CareMd\Map\CareTzArvRegionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_region' table.
 *
 *
 *
 * @method     ChildCareTzArvRegionQuery orderByCareTzArvRegionId($order = Criteria::ASC) Order by the care_tz_arv_region_id column
 * @method     ChildCareTzArvRegionQuery orderByRegionName($order = Criteria::ASC) Order by the region_name column
 *
 * @method     ChildCareTzArvRegionQuery groupByCareTzArvRegionId() Group by the care_tz_arv_region_id column
 * @method     ChildCareTzArvRegionQuery groupByRegionName() Group by the region_name column
 *
 * @method     ChildCareTzArvRegionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvRegionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvRegionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvRegionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvRegionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvRegionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvRegion findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvRegion matching the query
 * @method     ChildCareTzArvRegion findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvRegion matching the query, or a new ChildCareTzArvRegion object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvRegion findOneByCareTzArvRegionId(int $care_tz_arv_region_id) Return the first ChildCareTzArvRegion filtered by the care_tz_arv_region_id column
 * @method     ChildCareTzArvRegion findOneByRegionName(string $region_name) Return the first ChildCareTzArvRegion filtered by the region_name column *

 * @method     ChildCareTzArvRegion requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvRegion by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegion requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvRegion matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvRegion requireOneByCareTzArvRegionId(int $care_tz_arv_region_id) Return the first ChildCareTzArvRegion filtered by the care_tz_arv_region_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegion requireOneByRegionName(string $region_name) Return the first ChildCareTzArvRegion filtered by the region_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvRegion[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvRegion objects based on current ModelCriteria
 * @method     ChildCareTzArvRegion[]|ObjectCollection findByCareTzArvRegionId(int $care_tz_arv_region_id) Return ChildCareTzArvRegion objects filtered by the care_tz_arv_region_id column
 * @method     ChildCareTzArvRegion[]|ObjectCollection findByRegionName(string $region_name) Return ChildCareTzArvRegion objects filtered by the region_name column
 * @method     ChildCareTzArvRegion[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvRegionQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvRegionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvRegion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvRegionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvRegionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvRegionQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvRegionQuery();
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
     * @return ChildCareTzArvRegion|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvRegionTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvRegionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvRegion A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_region_id, region_name FROM care_tz_arv_region WHERE care_tz_arv_region_id = :p0';
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
            /** @var ChildCareTzArvRegion $obj */
            $obj = new ChildCareTzArvRegion();
            $obj->hydrate($row);
            CareTzArvRegionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvRegion|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvRegionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvRegionTableMap::COL_CARE_TZ_ARV_REGION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvRegionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvRegionTableMap::COL_CARE_TZ_ARV_REGION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_region_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvRegionId(1234); // WHERE care_tz_arv_region_id = 1234
     * $query->filterByCareTzArvRegionId(array(12, 34)); // WHERE care_tz_arv_region_id IN (12, 34)
     * $query->filterByCareTzArvRegionId(array('min' => 12)); // WHERE care_tz_arv_region_id > 12
     * </code>
     *
     * @param     mixed $careTzArvRegionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegionQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegionId($careTzArvRegionId = null, $comparison = null)
    {
        if (is_array($careTzArvRegionId)) {
            $useMinMax = false;
            if (isset($careTzArvRegionId['min'])) {
                $this->addUsingAlias(CareTzArvRegionTableMap::COL_CARE_TZ_ARV_REGION_ID, $careTzArvRegionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegionId['max'])) {
                $this->addUsingAlias(CareTzArvRegionTableMap::COL_CARE_TZ_ARV_REGION_ID, $careTzArvRegionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegionTableMap::COL_CARE_TZ_ARV_REGION_ID, $careTzArvRegionId, $comparison);
    }

    /**
     * Filter the query on the region_name column
     *
     * Example usage:
     * <code>
     * $query->filterByRegionName('fooValue');   // WHERE region_name = 'fooValue'
     * $query->filterByRegionName('%fooValue%', Criteria::LIKE); // WHERE region_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regionName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegionQuery The current query, for fluid interface
     */
    public function filterByRegionName($regionName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regionName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegionTableMap::COL_REGION_NAME, $regionName, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvRegion $careTzArvRegion Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvRegionQuery The current query, for fluid interface
     */
    public function prune($careTzArvRegion = null)
    {
        if ($careTzArvRegion) {
            $this->addUsingAlias(CareTzArvRegionTableMap::COL_CARE_TZ_ARV_REGION_ID, $careTzArvRegion->getCareTzArvRegionId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_region table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvRegionTableMap::clearInstancePool();
            CareTzArvRegionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvRegionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvRegionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvRegionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvRegionQuery
