<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvIllness as ChildCareTzArvIllness;
use CareMd\CareMd\CareTzArvIllnessQuery as ChildCareTzArvIllnessQuery;
use CareMd\CareMd\Map\CareTzArvIllnessTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_illness' table.
 *
 *
 *
 * @method     ChildCareTzArvIllnessQuery orderByCareTzArvIllnessId($order = Criteria::ASC) Order by the care_tz_arv_illness_id column
 * @method     ChildCareTzArvIllnessQuery orderByCareTzArvIllnessCodeId($order = Criteria::ASC) Order by the care_tz_arv_illness_code_id column
 * @method     ChildCareTzArvIllnessQuery orderByCareTzArvVisit2Id($order = Criteria::ASC) Order by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvIllnessQuery orderByOther($order = Criteria::ASC) Order by the other column
 *
 * @method     ChildCareTzArvIllnessQuery groupByCareTzArvIllnessId() Group by the care_tz_arv_illness_id column
 * @method     ChildCareTzArvIllnessQuery groupByCareTzArvIllnessCodeId() Group by the care_tz_arv_illness_code_id column
 * @method     ChildCareTzArvIllnessQuery groupByCareTzArvVisit2Id() Group by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvIllnessQuery groupByOther() Group by the other column
 *
 * @method     ChildCareTzArvIllnessQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvIllnessQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvIllnessQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvIllnessQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvIllnessQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvIllnessQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvIllness findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvIllness matching the query
 * @method     ChildCareTzArvIllness findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvIllness matching the query, or a new ChildCareTzArvIllness object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvIllness findOneByCareTzArvIllnessId(int $care_tz_arv_illness_id) Return the first ChildCareTzArvIllness filtered by the care_tz_arv_illness_id column
 * @method     ChildCareTzArvIllness findOneByCareTzArvIllnessCodeId(string $care_tz_arv_illness_code_id) Return the first ChildCareTzArvIllness filtered by the care_tz_arv_illness_code_id column
 * @method     ChildCareTzArvIllness findOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvIllness filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvIllness findOneByOther(string $other) Return the first ChildCareTzArvIllness filtered by the other column *

 * @method     ChildCareTzArvIllness requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvIllness by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvIllness requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvIllness matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvIllness requireOneByCareTzArvIllnessId(int $care_tz_arv_illness_id) Return the first ChildCareTzArvIllness filtered by the care_tz_arv_illness_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvIllness requireOneByCareTzArvIllnessCodeId(string $care_tz_arv_illness_code_id) Return the first ChildCareTzArvIllness filtered by the care_tz_arv_illness_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvIllness requireOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvIllness filtered by the care_tz_arv_visit_2_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvIllness requireOneByOther(string $other) Return the first ChildCareTzArvIllness filtered by the other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvIllness[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvIllness objects based on current ModelCriteria
 * @method     ChildCareTzArvIllness[]|ObjectCollection findByCareTzArvIllnessId(int $care_tz_arv_illness_id) Return ChildCareTzArvIllness objects filtered by the care_tz_arv_illness_id column
 * @method     ChildCareTzArvIllness[]|ObjectCollection findByCareTzArvIllnessCodeId(string $care_tz_arv_illness_code_id) Return ChildCareTzArvIllness objects filtered by the care_tz_arv_illness_code_id column
 * @method     ChildCareTzArvIllness[]|ObjectCollection findByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return ChildCareTzArvIllness objects filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvIllness[]|ObjectCollection findByOther(string $other) Return ChildCareTzArvIllness objects filtered by the other column
 * @method     ChildCareTzArvIllness[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvIllnessQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvIllnessQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvIllness', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvIllnessQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvIllnessQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvIllnessQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvIllnessQuery();
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
     * @return ChildCareTzArvIllness|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvIllnessTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvIllnessTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvIllness A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_illness_id, care_tz_arv_illness_code_id, care_tz_arv_visit_2_id, other FROM care_tz_arv_illness WHERE care_tz_arv_illness_id = :p0';
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
            /** @var ChildCareTzArvIllness $obj */
            $obj = new ChildCareTzArvIllness();
            $obj->hydrate($row);
            CareTzArvIllnessTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvIllness|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvIllnessQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_ILLNESS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvIllnessQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_ILLNESS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_illness_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvIllnessId(1234); // WHERE care_tz_arv_illness_id = 1234
     * $query->filterByCareTzArvIllnessId(array(12, 34)); // WHERE care_tz_arv_illness_id IN (12, 34)
     * $query->filterByCareTzArvIllnessId(array('min' => 12)); // WHERE care_tz_arv_illness_id > 12
     * </code>
     *
     * @param     mixed $careTzArvIllnessId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvIllnessQuery The current query, for fluid interface
     */
    public function filterByCareTzArvIllnessId($careTzArvIllnessId = null, $comparison = null)
    {
        if (is_array($careTzArvIllnessId)) {
            $useMinMax = false;
            if (isset($careTzArvIllnessId['min'])) {
                $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_ILLNESS_ID, $careTzArvIllnessId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvIllnessId['max'])) {
                $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_ILLNESS_ID, $careTzArvIllnessId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_ILLNESS_ID, $careTzArvIllnessId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_illness_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvIllnessCodeId(1234); // WHERE care_tz_arv_illness_code_id = 1234
     * $query->filterByCareTzArvIllnessCodeId(array(12, 34)); // WHERE care_tz_arv_illness_code_id IN (12, 34)
     * $query->filterByCareTzArvIllnessCodeId(array('min' => 12)); // WHERE care_tz_arv_illness_code_id > 12
     * </code>
     *
     * @param     mixed $careTzArvIllnessCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvIllnessQuery The current query, for fluid interface
     */
    public function filterByCareTzArvIllnessCodeId($careTzArvIllnessCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvIllnessCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvIllnessCodeId['min'])) {
                $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_ILLNESS_CODE_ID, $careTzArvIllnessCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvIllnessCodeId['max'])) {
                $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_ILLNESS_CODE_ID, $careTzArvIllnessCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_ILLNESS_CODE_ID, $careTzArvIllnessCodeId, $comparison);
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
     * @return $this|ChildCareTzArvIllnessQuery The current query, for fluid interface
     */
    public function filterByCareTzArvVisit2Id($careTzArvVisit2Id = null, $comparison = null)
    {
        if (is_array($careTzArvVisit2Id)) {
            $useMinMax = false;
            if (isset($careTzArvVisit2Id['min'])) {
                $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvVisit2Id['max'])) {
                $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id, $comparison);
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
     * @return $this|ChildCareTzArvIllnessQuery The current query, for fluid interface
     */
    public function filterByOther($other = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($other)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvIllnessTableMap::COL_OTHER, $other, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvIllness $careTzArvIllness Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvIllnessQuery The current query, for fluid interface
     */
    public function prune($careTzArvIllness = null)
    {
        if ($careTzArvIllness) {
            $this->addUsingAlias(CareTzArvIllnessTableMap::COL_CARE_TZ_ARV_ILLNESS_ID, $careTzArvIllness->getCareTzArvIllnessId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_illness table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvIllnessTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvIllnessTableMap::clearInstancePool();
            CareTzArvIllnessTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvIllnessTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvIllnessTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvIllnessTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvIllnessTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvIllnessQuery
