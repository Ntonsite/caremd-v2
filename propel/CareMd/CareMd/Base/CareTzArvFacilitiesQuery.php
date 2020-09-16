<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvFacilities as ChildCareTzArvFacilities;
use CareMd\CareMd\CareTzArvFacilitiesQuery as ChildCareTzArvFacilitiesQuery;
use CareMd\CareMd\Map\CareTzArvFacilitiesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_facilities' table.
 *
 *
 *
 * @method     ChildCareTzArvFacilitiesQuery orderByRegionCode($order = Criteria::ASC) Order by the region_code column
 * @method     ChildCareTzArvFacilitiesQuery orderByDistrictCode($order = Criteria::ASC) Order by the district_code column
 * @method     ChildCareTzArvFacilitiesQuery orderByCareTzArvFacilityId($order = Criteria::ASC) Order by the care_tz_arv_facility_id column
 * @method     ChildCareTzArvFacilitiesQuery orderByFacilityName($order = Criteria::ASC) Order by the facility_name column
 *
 * @method     ChildCareTzArvFacilitiesQuery groupByRegionCode() Group by the region_code column
 * @method     ChildCareTzArvFacilitiesQuery groupByDistrictCode() Group by the district_code column
 * @method     ChildCareTzArvFacilitiesQuery groupByCareTzArvFacilityId() Group by the care_tz_arv_facility_id column
 * @method     ChildCareTzArvFacilitiesQuery groupByFacilityName() Group by the facility_name column
 *
 * @method     ChildCareTzArvFacilitiesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvFacilitiesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvFacilitiesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvFacilitiesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvFacilitiesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvFacilitiesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvFacilities findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvFacilities matching the query
 * @method     ChildCareTzArvFacilities findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvFacilities matching the query, or a new ChildCareTzArvFacilities object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvFacilities findOneByRegionCode(string $region_code) Return the first ChildCareTzArvFacilities filtered by the region_code column
 * @method     ChildCareTzArvFacilities findOneByDistrictCode(string $district_code) Return the first ChildCareTzArvFacilities filtered by the district_code column
 * @method     ChildCareTzArvFacilities findOneByCareTzArvFacilityId(string $care_tz_arv_facility_id) Return the first ChildCareTzArvFacilities filtered by the care_tz_arv_facility_id column
 * @method     ChildCareTzArvFacilities findOneByFacilityName(string $facility_name) Return the first ChildCareTzArvFacilities filtered by the facility_name column *

 * @method     ChildCareTzArvFacilities requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvFacilities by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvFacilities requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvFacilities matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvFacilities requireOneByRegionCode(string $region_code) Return the first ChildCareTzArvFacilities filtered by the region_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvFacilities requireOneByDistrictCode(string $district_code) Return the first ChildCareTzArvFacilities filtered by the district_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvFacilities requireOneByCareTzArvFacilityId(string $care_tz_arv_facility_id) Return the first ChildCareTzArvFacilities filtered by the care_tz_arv_facility_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvFacilities requireOneByFacilityName(string $facility_name) Return the first ChildCareTzArvFacilities filtered by the facility_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvFacilities[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvFacilities objects based on current ModelCriteria
 * @method     ChildCareTzArvFacilities[]|ObjectCollection findByRegionCode(string $region_code) Return ChildCareTzArvFacilities objects filtered by the region_code column
 * @method     ChildCareTzArvFacilities[]|ObjectCollection findByDistrictCode(string $district_code) Return ChildCareTzArvFacilities objects filtered by the district_code column
 * @method     ChildCareTzArvFacilities[]|ObjectCollection findByCareTzArvFacilityId(string $care_tz_arv_facility_id) Return ChildCareTzArvFacilities objects filtered by the care_tz_arv_facility_id column
 * @method     ChildCareTzArvFacilities[]|ObjectCollection findByFacilityName(string $facility_name) Return ChildCareTzArvFacilities objects filtered by the facility_name column
 * @method     ChildCareTzArvFacilities[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvFacilitiesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvFacilitiesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvFacilities', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvFacilitiesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvFacilitiesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvFacilitiesQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvFacilitiesQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$region_code, $district_code, $care_tz_arv_facility_id] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTzArvFacilities|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvFacilitiesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvFacilitiesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildCareTzArvFacilities A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT region_code, district_code, care_tz_arv_facility_id, facility_name FROM care_tz_arv_facilities WHERE region_code = :p0 AND district_code = :p1 AND care_tz_arv_facility_id = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTzArvFacilities $obj */
            $obj = new ChildCareTzArvFacilities();
            $obj->hydrate($row);
            CareTzArvFacilitiesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildCareTzArvFacilities|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvFacilitiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTzArvFacilitiesTableMap::COL_REGION_CODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTzArvFacilitiesTableMap::COL_DISTRICT_CODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CareTzArvFacilitiesTableMap::COL_CARE_TZ_ARV_FACILITY_ID, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvFacilitiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTzArvFacilitiesTableMap::COL_REGION_CODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTzArvFacilitiesTableMap::COL_DISTRICT_CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CareTzArvFacilitiesTableMap::COL_CARE_TZ_ARV_FACILITY_ID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the region_code column
     *
     * Example usage:
     * <code>
     * $query->filterByRegionCode('fooValue');   // WHERE region_code = 'fooValue'
     * $query->filterByRegionCode('%fooValue%', Criteria::LIKE); // WHERE region_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regionCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvFacilitiesQuery The current query, for fluid interface
     */
    public function filterByRegionCode($regionCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regionCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvFacilitiesTableMap::COL_REGION_CODE, $regionCode, $comparison);
    }

    /**
     * Filter the query on the district_code column
     *
     * Example usage:
     * <code>
     * $query->filterByDistrictCode('fooValue');   // WHERE district_code = 'fooValue'
     * $query->filterByDistrictCode('%fooValue%', Criteria::LIKE); // WHERE district_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $districtCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvFacilitiesQuery The current query, for fluid interface
     */
    public function filterByDistrictCode($districtCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($districtCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvFacilitiesTableMap::COL_DISTRICT_CODE, $districtCode, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_facility_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvFacilityId('fooValue');   // WHERE care_tz_arv_facility_id = 'fooValue'
     * $query->filterByCareTzArvFacilityId('%fooValue%', Criteria::LIKE); // WHERE care_tz_arv_facility_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $careTzArvFacilityId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvFacilitiesQuery The current query, for fluid interface
     */
    public function filterByCareTzArvFacilityId($careTzArvFacilityId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($careTzArvFacilityId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvFacilitiesTableMap::COL_CARE_TZ_ARV_FACILITY_ID, $careTzArvFacilityId, $comparison);
    }

    /**
     * Filter the query on the facility_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFacilityName('fooValue');   // WHERE facility_name = 'fooValue'
     * $query->filterByFacilityName('%fooValue%', Criteria::LIKE); // WHERE facility_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facilityName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvFacilitiesQuery The current query, for fluid interface
     */
    public function filterByFacilityName($facilityName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facilityName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvFacilitiesTableMap::COL_FACILITY_NAME, $facilityName, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvFacilities $careTzArvFacilities Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvFacilitiesQuery The current query, for fluid interface
     */
    public function prune($careTzArvFacilities = null)
    {
        if ($careTzArvFacilities) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTzArvFacilitiesTableMap::COL_REGION_CODE), $careTzArvFacilities->getRegionCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTzArvFacilitiesTableMap::COL_DISTRICT_CODE), $careTzArvFacilities->getDistrictCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CareTzArvFacilitiesTableMap::COL_CARE_TZ_ARV_FACILITY_ID), $careTzArvFacilities->getCareTzArvFacilityId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_facilities table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvFacilitiesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvFacilitiesTableMap::clearInstancePool();
            CareTzArvFacilitiesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvFacilitiesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvFacilitiesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvFacilitiesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvFacilitiesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvFacilitiesQuery
