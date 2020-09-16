<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvReferredFrom as ChildCareTzArvReferredFrom;
use CareMd\CareMd\CareTzArvReferredFromQuery as ChildCareTzArvReferredFromQuery;
use CareMd\CareMd\Map\CareTzArvReferredFromTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_referred_from' table.
 *
 *
 *
 * @method     ChildCareTzArvReferredFromQuery orderByCareTzArvReferredFromId($order = Criteria::ASC) Order by the care_tz_arv_referred_from_id column
 * @method     ChildCareTzArvReferredFromQuery orderByCareTzArvReferredFromCodeId($order = Criteria::ASC) Order by the care_tz_arv_referred_from_code_id column
 * @method     ChildCareTzArvReferredFromQuery orderByCareTzArvRegistrationId($order = Criteria::ASC) Order by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvReferredFromQuery orderByOther($order = Criteria::ASC) Order by the other column
 *
 * @method     ChildCareTzArvReferredFromQuery groupByCareTzArvReferredFromId() Group by the care_tz_arv_referred_from_id column
 * @method     ChildCareTzArvReferredFromQuery groupByCareTzArvReferredFromCodeId() Group by the care_tz_arv_referred_from_code_id column
 * @method     ChildCareTzArvReferredFromQuery groupByCareTzArvRegistrationId() Group by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvReferredFromQuery groupByOther() Group by the other column
 *
 * @method     ChildCareTzArvReferredFromQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvReferredFromQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvReferredFromQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvReferredFromQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvReferredFromQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvReferredFromQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvReferredFrom findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvReferredFrom matching the query
 * @method     ChildCareTzArvReferredFrom findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvReferredFrom matching the query, or a new ChildCareTzArvReferredFrom object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvReferredFrom findOneByCareTzArvReferredFromId(int $care_tz_arv_referred_from_id) Return the first ChildCareTzArvReferredFrom filtered by the care_tz_arv_referred_from_id column
 * @method     ChildCareTzArvReferredFrom findOneByCareTzArvReferredFromCodeId(int $care_tz_arv_referred_from_code_id) Return the first ChildCareTzArvReferredFrom filtered by the care_tz_arv_referred_from_code_id column
 * @method     ChildCareTzArvReferredFrom findOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvReferredFrom filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvReferredFrom findOneByOther(string $other) Return the first ChildCareTzArvReferredFrom filtered by the other column *

 * @method     ChildCareTzArvReferredFrom requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvReferredFrom by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvReferredFrom requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvReferredFrom matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvReferredFrom requireOneByCareTzArvReferredFromId(int $care_tz_arv_referred_from_id) Return the first ChildCareTzArvReferredFrom filtered by the care_tz_arv_referred_from_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvReferredFrom requireOneByCareTzArvReferredFromCodeId(int $care_tz_arv_referred_from_code_id) Return the first ChildCareTzArvReferredFrom filtered by the care_tz_arv_referred_from_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvReferredFrom requireOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvReferredFrom filtered by the care_tz_arv_registration_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvReferredFrom requireOneByOther(string $other) Return the first ChildCareTzArvReferredFrom filtered by the other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvReferredFrom[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvReferredFrom objects based on current ModelCriteria
 * @method     ChildCareTzArvReferredFrom[]|ObjectCollection findByCareTzArvReferredFromId(int $care_tz_arv_referred_from_id) Return ChildCareTzArvReferredFrom objects filtered by the care_tz_arv_referred_from_id column
 * @method     ChildCareTzArvReferredFrom[]|ObjectCollection findByCareTzArvReferredFromCodeId(int $care_tz_arv_referred_from_code_id) Return ChildCareTzArvReferredFrom objects filtered by the care_tz_arv_referred_from_code_id column
 * @method     ChildCareTzArvReferredFrom[]|ObjectCollection findByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return ChildCareTzArvReferredFrom objects filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvReferredFrom[]|ObjectCollection findByOther(string $other) Return ChildCareTzArvReferredFrom objects filtered by the other column
 * @method     ChildCareTzArvReferredFrom[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvReferredFromQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvReferredFromQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvReferredFrom', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvReferredFromQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvReferredFromQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvReferredFromQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvReferredFromQuery();
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
     * @return ChildCareTzArvReferredFrom|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvReferredFromTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvReferredFromTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvReferredFrom A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_referred_from_id, care_tz_arv_referred_from_code_id, care_tz_arv_registration_id, other FROM care_tz_arv_referred_from WHERE care_tz_arv_referred_from_id = :p0';
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
            /** @var ChildCareTzArvReferredFrom $obj */
            $obj = new ChildCareTzArvReferredFrom();
            $obj->hydrate($row);
            CareTzArvReferredFromTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvReferredFrom|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvReferredFromQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvReferredFromQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_referred_from_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvReferredFromId(1234); // WHERE care_tz_arv_referred_from_id = 1234
     * $query->filterByCareTzArvReferredFromId(array(12, 34)); // WHERE care_tz_arv_referred_from_id IN (12, 34)
     * $query->filterByCareTzArvReferredFromId(array('min' => 12)); // WHERE care_tz_arv_referred_from_id > 12
     * </code>
     *
     * @param     mixed $careTzArvReferredFromId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvReferredFromQuery The current query, for fluid interface
     */
    public function filterByCareTzArvReferredFromId($careTzArvReferredFromId = null, $comparison = null)
    {
        if (is_array($careTzArvReferredFromId)) {
            $useMinMax = false;
            if (isset($careTzArvReferredFromId['min'])) {
                $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_ID, $careTzArvReferredFromId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvReferredFromId['max'])) {
                $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_ID, $careTzArvReferredFromId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_ID, $careTzArvReferredFromId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_referred_from_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvReferredFromCodeId(1234); // WHERE care_tz_arv_referred_from_code_id = 1234
     * $query->filterByCareTzArvReferredFromCodeId(array(12, 34)); // WHERE care_tz_arv_referred_from_code_id IN (12, 34)
     * $query->filterByCareTzArvReferredFromCodeId(array('min' => 12)); // WHERE care_tz_arv_referred_from_code_id > 12
     * </code>
     *
     * @param     mixed $careTzArvReferredFromCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvReferredFromQuery The current query, for fluid interface
     */
    public function filterByCareTzArvReferredFromCodeId($careTzArvReferredFromCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvReferredFromCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvReferredFromCodeId['min'])) {
                $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_CODE_ID, $careTzArvReferredFromCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvReferredFromCodeId['max'])) {
                $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_CODE_ID, $careTzArvReferredFromCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_CODE_ID, $careTzArvReferredFromCodeId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_registration_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvRegistrationId(1234); // WHERE care_tz_arv_registration_id = 1234
     * $query->filterByCareTzArvRegistrationId(array(12, 34)); // WHERE care_tz_arv_registration_id IN (12, 34)
     * $query->filterByCareTzArvRegistrationId(array('min' => 12)); // WHERE care_tz_arv_registration_id > 12
     * </code>
     *
     * @param     mixed $careTzArvRegistrationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvReferredFromQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegistrationId($careTzArvRegistrationId = null, $comparison = null)
    {
        if (is_array($careTzArvRegistrationId)) {
            $useMinMax = false;
            if (isset($careTzArvRegistrationId['min'])) {
                $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegistrationId['max'])) {
                $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId, $comparison);
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
     * @return $this|ChildCareTzArvReferredFromQuery The current query, for fluid interface
     */
    public function filterByOther($other = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($other)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_OTHER, $other, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvReferredFrom $careTzArvReferredFrom Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvReferredFromQuery The current query, for fluid interface
     */
    public function prune($careTzArvReferredFrom = null)
    {
        if ($careTzArvReferredFrom) {
            $this->addUsingAlias(CareTzArvReferredFromTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_ID, $careTzArvReferredFrom->getCareTzArvReferredFromId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_referred_from table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvReferredFromTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvReferredFromTableMap::clearInstancePool();
            CareTzArvReferredFromTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvReferredFromTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvReferredFromTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvReferredFromTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvReferredFromTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvReferredFromQuery
