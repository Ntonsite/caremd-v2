<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvAdherReas as ChildCareTzArvAdherReas;
use CareMd\CareMd\CareTzArvAdherReasQuery as ChildCareTzArvAdherReasQuery;
use CareMd\CareMd\Map\CareTzArvAdherReasTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_adher_reas' table.
 *
 *
 *
 * @method     ChildCareTzArvAdherReasQuery orderByCareTzArvAdherReasId($order = Criteria::ASC) Order by the care_tz_arv_adher_reas_id column
 * @method     ChildCareTzArvAdherReasQuery orderByCareTzArvVisit2Id($order = Criteria::ASC) Order by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvAdherReasQuery orderByCareTzArvAdherReasCodeId($order = Criteria::ASC) Order by the care_tz_arv_adher_reas_code_id column
 * @method     ChildCareTzArvAdherReasQuery orderByOther($order = Criteria::ASC) Order by the other column
 *
 * @method     ChildCareTzArvAdherReasQuery groupByCareTzArvAdherReasId() Group by the care_tz_arv_adher_reas_id column
 * @method     ChildCareTzArvAdherReasQuery groupByCareTzArvVisit2Id() Group by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvAdherReasQuery groupByCareTzArvAdherReasCodeId() Group by the care_tz_arv_adher_reas_code_id column
 * @method     ChildCareTzArvAdherReasQuery groupByOther() Group by the other column
 *
 * @method     ChildCareTzArvAdherReasQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvAdherReasQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvAdherReasQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvAdherReasQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvAdherReasQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvAdherReasQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvAdherReas findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvAdherReas matching the query
 * @method     ChildCareTzArvAdherReas findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvAdherReas matching the query, or a new ChildCareTzArvAdherReas object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvAdherReas findOneByCareTzArvAdherReasId(string $care_tz_arv_adher_reas_id) Return the first ChildCareTzArvAdherReas filtered by the care_tz_arv_adher_reas_id column
 * @method     ChildCareTzArvAdherReas findOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvAdherReas filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvAdherReas findOneByCareTzArvAdherReasCodeId(int $care_tz_arv_adher_reas_code_id) Return the first ChildCareTzArvAdherReas filtered by the care_tz_arv_adher_reas_code_id column
 * @method     ChildCareTzArvAdherReas findOneByOther(string $other) Return the first ChildCareTzArvAdherReas filtered by the other column *

 * @method     ChildCareTzArvAdherReas requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvAdherReas by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvAdherReas requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvAdherReas matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvAdherReas requireOneByCareTzArvAdherReasId(string $care_tz_arv_adher_reas_id) Return the first ChildCareTzArvAdherReas filtered by the care_tz_arv_adher_reas_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvAdherReas requireOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvAdherReas filtered by the care_tz_arv_visit_2_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvAdherReas requireOneByCareTzArvAdherReasCodeId(int $care_tz_arv_adher_reas_code_id) Return the first ChildCareTzArvAdherReas filtered by the care_tz_arv_adher_reas_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvAdherReas requireOneByOther(string $other) Return the first ChildCareTzArvAdherReas filtered by the other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvAdherReas[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvAdherReas objects based on current ModelCriteria
 * @method     ChildCareTzArvAdherReas[]|ObjectCollection findByCareTzArvAdherReasId(string $care_tz_arv_adher_reas_id) Return ChildCareTzArvAdherReas objects filtered by the care_tz_arv_adher_reas_id column
 * @method     ChildCareTzArvAdherReas[]|ObjectCollection findByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return ChildCareTzArvAdherReas objects filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvAdherReas[]|ObjectCollection findByCareTzArvAdherReasCodeId(int $care_tz_arv_adher_reas_code_id) Return ChildCareTzArvAdherReas objects filtered by the care_tz_arv_adher_reas_code_id column
 * @method     ChildCareTzArvAdherReas[]|ObjectCollection findByOther(string $other) Return ChildCareTzArvAdherReas objects filtered by the other column
 * @method     ChildCareTzArvAdherReas[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvAdherReasQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvAdherReasQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvAdherReas', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvAdherReasQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvAdherReasQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvAdherReasQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvAdherReasQuery();
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
     * @return ChildCareTzArvAdherReas|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvAdherReasTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvAdherReasTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvAdherReas A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_adher_reas_id, care_tz_arv_visit_2_id, care_tz_arv_adher_reas_code_id, other FROM care_tz_arv_adher_reas WHERE care_tz_arv_adher_reas_id = :p0';
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
            /** @var ChildCareTzArvAdherReas $obj */
            $obj = new ChildCareTzArvAdherReas();
            $obj->hydrate($row);
            CareTzArvAdherReasTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvAdherReas|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvAdherReasQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_ADHER_REAS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvAdherReasQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_ADHER_REAS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_adher_reas_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvAdherReasId(1234); // WHERE care_tz_arv_adher_reas_id = 1234
     * $query->filterByCareTzArvAdherReasId(array(12, 34)); // WHERE care_tz_arv_adher_reas_id IN (12, 34)
     * $query->filterByCareTzArvAdherReasId(array('min' => 12)); // WHERE care_tz_arv_adher_reas_id > 12
     * </code>
     *
     * @param     mixed $careTzArvAdherReasId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvAdherReasQuery The current query, for fluid interface
     */
    public function filterByCareTzArvAdherReasId($careTzArvAdherReasId = null, $comparison = null)
    {
        if (is_array($careTzArvAdherReasId)) {
            $useMinMax = false;
            if (isset($careTzArvAdherReasId['min'])) {
                $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_ADHER_REAS_ID, $careTzArvAdherReasId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvAdherReasId['max'])) {
                $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_ADHER_REAS_ID, $careTzArvAdherReasId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_ADHER_REAS_ID, $careTzArvAdherReasId, $comparison);
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
     * @return $this|ChildCareTzArvAdherReasQuery The current query, for fluid interface
     */
    public function filterByCareTzArvVisit2Id($careTzArvVisit2Id = null, $comparison = null)
    {
        if (is_array($careTzArvVisit2Id)) {
            $useMinMax = false;
            if (isset($careTzArvVisit2Id['min'])) {
                $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvVisit2Id['max'])) {
                $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_adher_reas_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvAdherReasCodeId(1234); // WHERE care_tz_arv_adher_reas_code_id = 1234
     * $query->filterByCareTzArvAdherReasCodeId(array(12, 34)); // WHERE care_tz_arv_adher_reas_code_id IN (12, 34)
     * $query->filterByCareTzArvAdherReasCodeId(array('min' => 12)); // WHERE care_tz_arv_adher_reas_code_id > 12
     * </code>
     *
     * @param     mixed $careTzArvAdherReasCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvAdherReasQuery The current query, for fluid interface
     */
    public function filterByCareTzArvAdherReasCodeId($careTzArvAdherReasCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvAdherReasCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvAdherReasCodeId['min'])) {
                $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_ADHER_REAS_CODE_ID, $careTzArvAdherReasCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvAdherReasCodeId['max'])) {
                $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_ADHER_REAS_CODE_ID, $careTzArvAdherReasCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_ADHER_REAS_CODE_ID, $careTzArvAdherReasCodeId, $comparison);
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
     * @return $this|ChildCareTzArvAdherReasQuery The current query, for fluid interface
     */
    public function filterByOther($other = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($other)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_OTHER, $other, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvAdherReas $careTzArvAdherReas Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvAdherReasQuery The current query, for fluid interface
     */
    public function prune($careTzArvAdherReas = null)
    {
        if ($careTzArvAdherReas) {
            $this->addUsingAlias(CareTzArvAdherReasTableMap::COL_CARE_TZ_ARV_ADHER_REAS_ID, $careTzArvAdherReas->getCareTzArvAdherReasId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_adher_reas table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvAdherReasTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvAdherReasTableMap::clearInstancePool();
            CareTzArvAdherReasTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvAdherReasTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvAdherReasTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvAdherReasTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvAdherReasTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvAdherReasQuery
