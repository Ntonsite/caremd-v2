<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvDistricts as ChildCareTzArvDistricts;
use CareMd\CareMd\CareTzArvDistrictsQuery as ChildCareTzArvDistrictsQuery;
use CareMd\CareMd\Map\CareTzArvDistrictsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_districts' table.
 *
 *
 *
 * @method     ChildCareTzArvDistrictsQuery orderByCareTzArvRegionId($order = Criteria::ASC) Order by the care_tz_arv_region_id column
 * @method     ChildCareTzArvDistrictsQuery orderByCareTzArvDistrictId($order = Criteria::ASC) Order by the care_tz_arv_district_id column
 * @method     ChildCareTzArvDistrictsQuery orderByDistrictName($order = Criteria::ASC) Order by the district_name column
 *
 * @method     ChildCareTzArvDistrictsQuery groupByCareTzArvRegionId() Group by the care_tz_arv_region_id column
 * @method     ChildCareTzArvDistrictsQuery groupByCareTzArvDistrictId() Group by the care_tz_arv_district_id column
 * @method     ChildCareTzArvDistrictsQuery groupByDistrictName() Group by the district_name column
 *
 * @method     ChildCareTzArvDistrictsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvDistrictsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvDistrictsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvDistrictsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvDistrictsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvDistrictsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvDistricts findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvDistricts matching the query
 * @method     ChildCareTzArvDistricts findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvDistricts matching the query, or a new ChildCareTzArvDistricts object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvDistricts findOneByCareTzArvRegionId(int $care_tz_arv_region_id) Return the first ChildCareTzArvDistricts filtered by the care_tz_arv_region_id column
 * @method     ChildCareTzArvDistricts findOneByCareTzArvDistrictId(int $care_tz_arv_district_id) Return the first ChildCareTzArvDistricts filtered by the care_tz_arv_district_id column
 * @method     ChildCareTzArvDistricts findOneByDistrictName(string $district_name) Return the first ChildCareTzArvDistricts filtered by the district_name column *

 * @method     ChildCareTzArvDistricts requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvDistricts by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvDistricts requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvDistricts matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvDistricts requireOneByCareTzArvRegionId(int $care_tz_arv_region_id) Return the first ChildCareTzArvDistricts filtered by the care_tz_arv_region_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvDistricts requireOneByCareTzArvDistrictId(int $care_tz_arv_district_id) Return the first ChildCareTzArvDistricts filtered by the care_tz_arv_district_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvDistricts requireOneByDistrictName(string $district_name) Return the first ChildCareTzArvDistricts filtered by the district_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvDistricts[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvDistricts objects based on current ModelCriteria
 * @method     ChildCareTzArvDistricts[]|ObjectCollection findByCareTzArvRegionId(int $care_tz_arv_region_id) Return ChildCareTzArvDistricts objects filtered by the care_tz_arv_region_id column
 * @method     ChildCareTzArvDistricts[]|ObjectCollection findByCareTzArvDistrictId(int $care_tz_arv_district_id) Return ChildCareTzArvDistricts objects filtered by the care_tz_arv_district_id column
 * @method     ChildCareTzArvDistricts[]|ObjectCollection findByDistrictName(string $district_name) Return ChildCareTzArvDistricts objects filtered by the district_name column
 * @method     ChildCareTzArvDistricts[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvDistrictsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvDistrictsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvDistricts', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvDistrictsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvDistrictsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvDistrictsQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvDistrictsQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$care_tz_arv_region_id, $care_tz_arv_district_id] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTzArvDistricts|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvDistrictsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvDistrictsTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCareTzArvDistricts A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_region_id, care_tz_arv_district_id, district_name FROM care_tz_arv_districts WHERE care_tz_arv_region_id = :p0 AND care_tz_arv_district_id = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTzArvDistricts $obj */
            $obj = new ChildCareTzArvDistricts();
            $obj->hydrate($row);
            CareTzArvDistrictsTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCareTzArvDistricts|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildCareTzArvDistrictsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_REGION_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_DISTRICT_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvDistrictsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_REGION_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_DISTRICT_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildCareTzArvDistrictsQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegionId($careTzArvRegionId = null, $comparison = null)
    {
        if (is_array($careTzArvRegionId)) {
            $useMinMax = false;
            if (isset($careTzArvRegionId['min'])) {
                $this->addUsingAlias(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_REGION_ID, $careTzArvRegionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegionId['max'])) {
                $this->addUsingAlias(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_REGION_ID, $careTzArvRegionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_REGION_ID, $careTzArvRegionId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_district_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvDistrictId(1234); // WHERE care_tz_arv_district_id = 1234
     * $query->filterByCareTzArvDistrictId(array(12, 34)); // WHERE care_tz_arv_district_id IN (12, 34)
     * $query->filterByCareTzArvDistrictId(array('min' => 12)); // WHERE care_tz_arv_district_id > 12
     * </code>
     *
     * @param     mixed $careTzArvDistrictId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvDistrictsQuery The current query, for fluid interface
     */
    public function filterByCareTzArvDistrictId($careTzArvDistrictId = null, $comparison = null)
    {
        if (is_array($careTzArvDistrictId)) {
            $useMinMax = false;
            if (isset($careTzArvDistrictId['min'])) {
                $this->addUsingAlias(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_DISTRICT_ID, $careTzArvDistrictId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvDistrictId['max'])) {
                $this->addUsingAlias(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_DISTRICT_ID, $careTzArvDistrictId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_DISTRICT_ID, $careTzArvDistrictId, $comparison);
    }

    /**
     * Filter the query on the district_name column
     *
     * Example usage:
     * <code>
     * $query->filterByDistrictName('fooValue');   // WHERE district_name = 'fooValue'
     * $query->filterByDistrictName('%fooValue%', Criteria::LIKE); // WHERE district_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $districtName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvDistrictsQuery The current query, for fluid interface
     */
    public function filterByDistrictName($districtName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($districtName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvDistrictsTableMap::COL_DISTRICT_NAME, $districtName, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvDistricts $careTzArvDistricts Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvDistrictsQuery The current query, for fluid interface
     */
    public function prune($careTzArvDistricts = null)
    {
        if ($careTzArvDistricts) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_REGION_ID), $careTzArvDistricts->getCareTzArvRegionId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTzArvDistrictsTableMap::COL_CARE_TZ_ARV_DISTRICT_ID), $careTzArvDistricts->getCareTzArvDistrictId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_districts table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvDistrictsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvDistrictsTableMap::clearInstancePool();
            CareTzArvDistrictsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvDistrictsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvDistrictsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvDistrictsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvDistrictsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvDistrictsQuery
