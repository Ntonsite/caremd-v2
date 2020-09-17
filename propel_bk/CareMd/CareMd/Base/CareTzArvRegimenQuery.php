<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvRegimen as ChildCareTzArvRegimen;
use CareMd\CareMd\CareTzArvRegimenQuery as ChildCareTzArvRegimenQuery;
use CareMd\CareMd\Map\CareTzArvRegimenTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_regimen' table.
 *
 *
 *
 * @method     ChildCareTzArvRegimenQuery orderByCareTzArvRegimenId($order = Criteria::ASC) Order by the care_tz_arv_regimen_id column
 * @method     ChildCareTzArvRegimenQuery orderByCareTzArvRegimenCodeId($order = Criteria::ASC) Order by the care_tz_arv_regimen_code_id column
 * @method     ChildCareTzArvRegimenQuery orderByCareTzArvVisit2Id($order = Criteria::ASC) Order by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvRegimenQuery orderByOther($order = Criteria::ASC) Order by the other column
 * @method     ChildCareTzArvRegimenQuery orderByRegimenDays($order = Criteria::ASC) Order by the regimen_days column
 *
 * @method     ChildCareTzArvRegimenQuery groupByCareTzArvRegimenId() Group by the care_tz_arv_regimen_id column
 * @method     ChildCareTzArvRegimenQuery groupByCareTzArvRegimenCodeId() Group by the care_tz_arv_regimen_code_id column
 * @method     ChildCareTzArvRegimenQuery groupByCareTzArvVisit2Id() Group by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvRegimenQuery groupByOther() Group by the other column
 * @method     ChildCareTzArvRegimenQuery groupByRegimenDays() Group by the regimen_days column
 *
 * @method     ChildCareTzArvRegimenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvRegimenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvRegimenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvRegimenQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvRegimenQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvRegimenQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvRegimen findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvRegimen matching the query
 * @method     ChildCareTzArvRegimen findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvRegimen matching the query, or a new ChildCareTzArvRegimen object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvRegimen findOneByCareTzArvRegimenId(int $care_tz_arv_regimen_id) Return the first ChildCareTzArvRegimen filtered by the care_tz_arv_regimen_id column
 * @method     ChildCareTzArvRegimen findOneByCareTzArvRegimenCodeId(string $care_tz_arv_regimen_code_id) Return the first ChildCareTzArvRegimen filtered by the care_tz_arv_regimen_code_id column
 * @method     ChildCareTzArvRegimen findOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvRegimen filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvRegimen findOneByOther(string $other) Return the first ChildCareTzArvRegimen filtered by the other column
 * @method     ChildCareTzArvRegimen findOneByRegimenDays(int $regimen_days) Return the first ChildCareTzArvRegimen filtered by the regimen_days column *

 * @method     ChildCareTzArvRegimen requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvRegimen by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegimen requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvRegimen matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvRegimen requireOneByCareTzArvRegimenId(int $care_tz_arv_regimen_id) Return the first ChildCareTzArvRegimen filtered by the care_tz_arv_regimen_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegimen requireOneByCareTzArvRegimenCodeId(string $care_tz_arv_regimen_code_id) Return the first ChildCareTzArvRegimen filtered by the care_tz_arv_regimen_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegimen requireOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvRegimen filtered by the care_tz_arv_visit_2_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegimen requireOneByOther(string $other) Return the first ChildCareTzArvRegimen filtered by the other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegimen requireOneByRegimenDays(int $regimen_days) Return the first ChildCareTzArvRegimen filtered by the regimen_days column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvRegimen[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvRegimen objects based on current ModelCriteria
 * @method     ChildCareTzArvRegimen[]|ObjectCollection findByCareTzArvRegimenId(int $care_tz_arv_regimen_id) Return ChildCareTzArvRegimen objects filtered by the care_tz_arv_regimen_id column
 * @method     ChildCareTzArvRegimen[]|ObjectCollection findByCareTzArvRegimenCodeId(string $care_tz_arv_regimen_code_id) Return ChildCareTzArvRegimen objects filtered by the care_tz_arv_regimen_code_id column
 * @method     ChildCareTzArvRegimen[]|ObjectCollection findByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return ChildCareTzArvRegimen objects filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvRegimen[]|ObjectCollection findByOther(string $other) Return ChildCareTzArvRegimen objects filtered by the other column
 * @method     ChildCareTzArvRegimen[]|ObjectCollection findByRegimenDays(int $regimen_days) Return ChildCareTzArvRegimen objects filtered by the regimen_days column
 * @method     ChildCareTzArvRegimen[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvRegimenQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvRegimenQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvRegimen', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvRegimenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvRegimenQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvRegimenQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvRegimenQuery();
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
     * @return ChildCareTzArvRegimen|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvRegimenTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvRegimenTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvRegimen A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_regimen_id, care_tz_arv_regimen_code_id, care_tz_arv_visit_2_id, other, regimen_days FROM care_tz_arv_regimen WHERE care_tz_arv_regimen_id = :p0';
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
            /** @var ChildCareTzArvRegimen $obj */
            $obj = new ChildCareTzArvRegimen();
            $obj->hydrate($row);
            CareTzArvRegimenTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvRegimen|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvRegimenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_REGIMEN_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvRegimenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_REGIMEN_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_regimen_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvRegimenId(1234); // WHERE care_tz_arv_regimen_id = 1234
     * $query->filterByCareTzArvRegimenId(array(12, 34)); // WHERE care_tz_arv_regimen_id IN (12, 34)
     * $query->filterByCareTzArvRegimenId(array('min' => 12)); // WHERE care_tz_arv_regimen_id > 12
     * </code>
     *
     * @param     mixed $careTzArvRegimenId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegimenQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegimenId($careTzArvRegimenId = null, $comparison = null)
    {
        if (is_array($careTzArvRegimenId)) {
            $useMinMax = false;
            if (isset($careTzArvRegimenId['min'])) {
                $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_REGIMEN_ID, $careTzArvRegimenId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegimenId['max'])) {
                $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_REGIMEN_ID, $careTzArvRegimenId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_REGIMEN_ID, $careTzArvRegimenId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_regimen_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvRegimenCodeId(1234); // WHERE care_tz_arv_regimen_code_id = 1234
     * $query->filterByCareTzArvRegimenCodeId(array(12, 34)); // WHERE care_tz_arv_regimen_code_id IN (12, 34)
     * $query->filterByCareTzArvRegimenCodeId(array('min' => 12)); // WHERE care_tz_arv_regimen_code_id > 12
     * </code>
     *
     * @param     mixed $careTzArvRegimenCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegimenQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegimenCodeId($careTzArvRegimenCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvRegimenCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvRegimenCodeId['min'])) {
                $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_REGIMEN_CODE_ID, $careTzArvRegimenCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegimenCodeId['max'])) {
                $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_REGIMEN_CODE_ID, $careTzArvRegimenCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_REGIMEN_CODE_ID, $careTzArvRegimenCodeId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_visit_2_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvVisit2Id(1234); // WHERE care_tz_arv_visit_2_id = 1234
     * $query->filterByCareTzArvVisit2Id(array(12, 34)); // WHERE care_tz_arv_visit_2_id IN (12, 34)
     * $query->filterByCareTzArvVisit2Id(array('min' => 12)); // WHERE care_tz_arv_visit_2_id > 12
     * </code>
     *
     * @param     mixed $careTzArvVisit2Id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegimenQuery The current query, for fluid interface
     */
    public function filterByCareTzArvVisit2Id($careTzArvVisit2Id = null, $comparison = null)
    {
        if (is_array($careTzArvVisit2Id)) {
            $useMinMax = false;
            if (isset($careTzArvVisit2Id['min'])) {
                $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvVisit2Id['max'])) {
                $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id, $comparison);
    }

    /**
     * Filter the query on the other column
     *
     * Example usage:
     * <code>
     * $query->filterByOther('fooValue');   // WHERE other = 'fooValue'
     * $query->filterByOther('%fooValue%', Criteria::LIKE); // WHERE other LIKE '%fooValue%'
     * </code>
     *
     * @param     string $other The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegimenQuery The current query, for fluid interface
     */
    public function filterByOther($other = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($other)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegimenTableMap::COL_OTHER, $other, $comparison);
    }

    /**
     * Filter the query on the regimen_days column
     *
     * Example usage:
     * <code>
     * $query->filterByRegimenDays(1234); // WHERE regimen_days = 1234
     * $query->filterByRegimenDays(array(12, 34)); // WHERE regimen_days IN (12, 34)
     * $query->filterByRegimenDays(array('min' => 12)); // WHERE regimen_days > 12
     * </code>
     *
     * @param     mixed $regimenDays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegimenQuery The current query, for fluid interface
     */
    public function filterByRegimenDays($regimenDays = null, $comparison = null)
    {
        if (is_array($regimenDays)) {
            $useMinMax = false;
            if (isset($regimenDays['min'])) {
                $this->addUsingAlias(CareTzArvRegimenTableMap::COL_REGIMEN_DAYS, $regimenDays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regimenDays['max'])) {
                $this->addUsingAlias(CareTzArvRegimenTableMap::COL_REGIMEN_DAYS, $regimenDays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegimenTableMap::COL_REGIMEN_DAYS, $regimenDays, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvRegimen $careTzArvRegimen Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvRegimenQuery The current query, for fluid interface
     */
    public function prune($careTzArvRegimen = null)
    {
        if ($careTzArvRegimen) {
            $this->addUsingAlias(CareTzArvRegimenTableMap::COL_CARE_TZ_ARV_REGIMEN_ID, $careTzArvRegimen->getCareTzArvRegimenId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_regimen table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegimenTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvRegimenTableMap::clearInstancePool();
            CareTzArvRegimenTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegimenTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvRegimenTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvRegimenTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvRegimenTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvRegimenQuery
