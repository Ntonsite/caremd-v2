<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvLabParam as ChildCareTzArvLabParam;
use CareMd\CareMd\CareTzArvLabParamQuery as ChildCareTzArvLabParamQuery;
use CareMd\CareMd\Map\CareTzArvLabParamTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_lab_param' table.
 *
 *
 *
 * @method     ChildCareTzArvLabParamQuery orderByCareTzArvLabParamId($order = Criteria::ASC) Order by the care_tz_arv_lab_param_id column
 * @method     ChildCareTzArvLabParamQuery orderByLabParam($order = Criteria::ASC) Order by the lab_param column
 * @method     ChildCareTzArvLabParamQuery orderByUnit($order = Criteria::ASC) Order by the unit column
 * @method     ChildCareTzArvLabParamQuery orderByParamUpper($order = Criteria::ASC) Order by the param_upper column
 * @method     ChildCareTzArvLabParamQuery orderByParamLower($order = Criteria::ASC) Order by the param_lower column
 *
 * @method     ChildCareTzArvLabParamQuery groupByCareTzArvLabParamId() Group by the care_tz_arv_lab_param_id column
 * @method     ChildCareTzArvLabParamQuery groupByLabParam() Group by the lab_param column
 * @method     ChildCareTzArvLabParamQuery groupByUnit() Group by the unit column
 * @method     ChildCareTzArvLabParamQuery groupByParamUpper() Group by the param_upper column
 * @method     ChildCareTzArvLabParamQuery groupByParamLower() Group by the param_lower column
 *
 * @method     ChildCareTzArvLabParamQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvLabParamQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvLabParamQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvLabParamQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvLabParamQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvLabParamQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvLabParam findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvLabParam matching the query
 * @method     ChildCareTzArvLabParam findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvLabParam matching the query, or a new ChildCareTzArvLabParam object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvLabParam findOneByCareTzArvLabParamId(string $care_tz_arv_lab_param_id) Return the first ChildCareTzArvLabParam filtered by the care_tz_arv_lab_param_id column
 * @method     ChildCareTzArvLabParam findOneByLabParam(int $lab_param) Return the first ChildCareTzArvLabParam filtered by the lab_param column
 * @method     ChildCareTzArvLabParam findOneByUnit(string $unit) Return the first ChildCareTzArvLabParam filtered by the unit column
 * @method     ChildCareTzArvLabParam findOneByParamUpper(int $param_upper) Return the first ChildCareTzArvLabParam filtered by the param_upper column
 * @method     ChildCareTzArvLabParam findOneByParamLower(int $param_lower) Return the first ChildCareTzArvLabParam filtered by the param_lower column *

 * @method     ChildCareTzArvLabParam requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvLabParam by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvLabParam requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvLabParam matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvLabParam requireOneByCareTzArvLabParamId(string $care_tz_arv_lab_param_id) Return the first ChildCareTzArvLabParam filtered by the care_tz_arv_lab_param_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvLabParam requireOneByLabParam(int $lab_param) Return the first ChildCareTzArvLabParam filtered by the lab_param column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvLabParam requireOneByUnit(string $unit) Return the first ChildCareTzArvLabParam filtered by the unit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvLabParam requireOneByParamUpper(int $param_upper) Return the first ChildCareTzArvLabParam filtered by the param_upper column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvLabParam requireOneByParamLower(int $param_lower) Return the first ChildCareTzArvLabParam filtered by the param_lower column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvLabParam[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvLabParam objects based on current ModelCriteria
 * @method     ChildCareTzArvLabParam[]|ObjectCollection findByCareTzArvLabParamId(string $care_tz_arv_lab_param_id) Return ChildCareTzArvLabParam objects filtered by the care_tz_arv_lab_param_id column
 * @method     ChildCareTzArvLabParam[]|ObjectCollection findByLabParam(int $lab_param) Return ChildCareTzArvLabParam objects filtered by the lab_param column
 * @method     ChildCareTzArvLabParam[]|ObjectCollection findByUnit(string $unit) Return ChildCareTzArvLabParam objects filtered by the unit column
 * @method     ChildCareTzArvLabParam[]|ObjectCollection findByParamUpper(int $param_upper) Return ChildCareTzArvLabParam objects filtered by the param_upper column
 * @method     ChildCareTzArvLabParam[]|ObjectCollection findByParamLower(int $param_lower) Return ChildCareTzArvLabParam objects filtered by the param_lower column
 * @method     ChildCareTzArvLabParam[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvLabParamQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvLabParamQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvLabParam', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvLabParamQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvLabParamQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvLabParamQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvLabParamQuery();
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
     * @return ChildCareTzArvLabParam|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvLabParamTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvLabParamTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvLabParam A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_lab_param_id, lab_param, unit, param_upper, param_lower FROM care_tz_arv_lab_param WHERE care_tz_arv_lab_param_id = :p0';
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
            /** @var ChildCareTzArvLabParam $obj */
            $obj = new ChildCareTzArvLabParam();
            $obj->hydrate($row);
            CareTzArvLabParamTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvLabParam|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvLabParamQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvLabParamTableMap::COL_CARE_TZ_ARV_LAB_PARAM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvLabParamQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvLabParamTableMap::COL_CARE_TZ_ARV_LAB_PARAM_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_lab_param_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvLabParamId(1234); // WHERE care_tz_arv_lab_param_id = 1234
     * $query->filterByCareTzArvLabParamId(array(12, 34)); // WHERE care_tz_arv_lab_param_id IN (12, 34)
     * $query->filterByCareTzArvLabParamId(array('min' => 12)); // WHERE care_tz_arv_lab_param_id > 12
     * </code>
     *
     * @param     mixed $careTzArvLabParamId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvLabParamQuery The current query, for fluid interface
     */
    public function filterByCareTzArvLabParamId($careTzArvLabParamId = null, $comparison = null)
    {
        if (is_array($careTzArvLabParamId)) {
            $useMinMax = false;
            if (isset($careTzArvLabParamId['min'])) {
                $this->addUsingAlias(CareTzArvLabParamTableMap::COL_CARE_TZ_ARV_LAB_PARAM_ID, $careTzArvLabParamId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvLabParamId['max'])) {
                $this->addUsingAlias(CareTzArvLabParamTableMap::COL_CARE_TZ_ARV_LAB_PARAM_ID, $careTzArvLabParamId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvLabParamTableMap::COL_CARE_TZ_ARV_LAB_PARAM_ID, $careTzArvLabParamId, $comparison);
    }

    /**
     * Filter the query on the lab_param column
     *
     * Example usage:
     * <code>
     * $query->filterByLabParam(1234); // WHERE lab_param = 1234
     * $query->filterByLabParam(array(12, 34)); // WHERE lab_param IN (12, 34)
     * $query->filterByLabParam(array('min' => 12)); // WHERE lab_param > 12
     * </code>
     *
     * @param     mixed $labParam The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvLabParamQuery The current query, for fluid interface
     */
    public function filterByLabParam($labParam = null, $comparison = null)
    {
        if (is_array($labParam)) {
            $useMinMax = false;
            if (isset($labParam['min'])) {
                $this->addUsingAlias(CareTzArvLabParamTableMap::COL_LAB_PARAM, $labParam['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($labParam['max'])) {
                $this->addUsingAlias(CareTzArvLabParamTableMap::COL_LAB_PARAM, $labParam['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvLabParamTableMap::COL_LAB_PARAM, $labParam, $comparison);
    }

    /**
     * Filter the query on the unit column
     *
     * Example usage:
     * <code>
     * $query->filterByUnit('fooValue');   // WHERE unit = 'fooValue'
     * $query->filterByUnit('%fooValue%', Criteria::LIKE); // WHERE unit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvLabParamQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvLabParamTableMap::COL_UNIT, $unit, $comparison);
    }

    /**
     * Filter the query on the param_upper column
     *
     * Example usage:
     * <code>
     * $query->filterByParamUpper(1234); // WHERE param_upper = 1234
     * $query->filterByParamUpper(array(12, 34)); // WHERE param_upper IN (12, 34)
     * $query->filterByParamUpper(array('min' => 12)); // WHERE param_upper > 12
     * </code>
     *
     * @param     mixed $paramUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvLabParamQuery The current query, for fluid interface
     */
    public function filterByParamUpper($paramUpper = null, $comparison = null)
    {
        if (is_array($paramUpper)) {
            $useMinMax = false;
            if (isset($paramUpper['min'])) {
                $this->addUsingAlias(CareTzArvLabParamTableMap::COL_PARAM_UPPER, $paramUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paramUpper['max'])) {
                $this->addUsingAlias(CareTzArvLabParamTableMap::COL_PARAM_UPPER, $paramUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvLabParamTableMap::COL_PARAM_UPPER, $paramUpper, $comparison);
    }

    /**
     * Filter the query on the param_lower column
     *
     * Example usage:
     * <code>
     * $query->filterByParamLower(1234); // WHERE param_lower = 1234
     * $query->filterByParamLower(array(12, 34)); // WHERE param_lower IN (12, 34)
     * $query->filterByParamLower(array('min' => 12)); // WHERE param_lower > 12
     * </code>
     *
     * @param     mixed $paramLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvLabParamQuery The current query, for fluid interface
     */
    public function filterByParamLower($paramLower = null, $comparison = null)
    {
        if (is_array($paramLower)) {
            $useMinMax = false;
            if (isset($paramLower['min'])) {
                $this->addUsingAlias(CareTzArvLabParamTableMap::COL_PARAM_LOWER, $paramLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paramLower['max'])) {
                $this->addUsingAlias(CareTzArvLabParamTableMap::COL_PARAM_LOWER, $paramLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvLabParamTableMap::COL_PARAM_LOWER, $paramLower, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvLabParam $careTzArvLabParam Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvLabParamQuery The current query, for fluid interface
     */
    public function prune($careTzArvLabParam = null)
    {
        if ($careTzArvLabParam) {
            $this->addUsingAlias(CareTzArvLabParamTableMap::COL_CARE_TZ_ARV_LAB_PARAM_ID, $careTzArvLabParam->getCareTzArvLabParamId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_lab_param table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvLabParamTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvLabParamTableMap::clearInstancePool();
            CareTzArvLabParamTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvLabParamTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvLabParamTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvLabParamTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvLabParamTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvLabParamQuery
