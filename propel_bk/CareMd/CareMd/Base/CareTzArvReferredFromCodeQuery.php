<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvReferredFromCode as ChildCareTzArvReferredFromCode;
use CareMd\CareMd\CareTzArvReferredFromCodeQuery as ChildCareTzArvReferredFromCodeQuery;
use CareMd\CareMd\Map\CareTzArvReferredFromCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_referred_from_code' table.
 *
 *
 *
 * @method     ChildCareTzArvReferredFromCodeQuery orderByCareTzArvReferredFromCodeId($order = Criteria::ASC) Order by the care_tz_arv_referred_from_code_id column
 * @method     ChildCareTzArvReferredFromCodeQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     ChildCareTzArvReferredFromCodeQuery groupByCareTzArvReferredFromCodeId() Group by the care_tz_arv_referred_from_code_id column
 * @method     ChildCareTzArvReferredFromCodeQuery groupByDescription() Group by the description column
 *
 * @method     ChildCareTzArvReferredFromCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvReferredFromCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvReferredFromCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvReferredFromCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvReferredFromCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvReferredFromCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvReferredFromCode findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvReferredFromCode matching the query
 * @method     ChildCareTzArvReferredFromCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvReferredFromCode matching the query, or a new ChildCareTzArvReferredFromCode object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvReferredFromCode findOneByCareTzArvReferredFromCodeId(int $care_tz_arv_referred_from_code_id) Return the first ChildCareTzArvReferredFromCode filtered by the care_tz_arv_referred_from_code_id column
 * @method     ChildCareTzArvReferredFromCode findOneByDescription(string $description) Return the first ChildCareTzArvReferredFromCode filtered by the description column *

 * @method     ChildCareTzArvReferredFromCode requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvReferredFromCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvReferredFromCode requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvReferredFromCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvReferredFromCode requireOneByCareTzArvReferredFromCodeId(int $care_tz_arv_referred_from_code_id) Return the first ChildCareTzArvReferredFromCode filtered by the care_tz_arv_referred_from_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvReferredFromCode requireOneByDescription(string $description) Return the first ChildCareTzArvReferredFromCode filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvReferredFromCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvReferredFromCode objects based on current ModelCriteria
 * @method     ChildCareTzArvReferredFromCode[]|ObjectCollection findByCareTzArvReferredFromCodeId(int $care_tz_arv_referred_from_code_id) Return ChildCareTzArvReferredFromCode objects filtered by the care_tz_arv_referred_from_code_id column
 * @method     ChildCareTzArvReferredFromCode[]|ObjectCollection findByDescription(string $description) Return ChildCareTzArvReferredFromCode objects filtered by the description column
 * @method     ChildCareTzArvReferredFromCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvReferredFromCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvReferredFromCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvReferredFromCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvReferredFromCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvReferredFromCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvReferredFromCodeQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvReferredFromCodeQuery();
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
     * @return ChildCareTzArvReferredFromCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvReferredFromCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvReferredFromCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvReferredFromCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_referred_from_code_id, description FROM care_tz_arv_referred_from_code WHERE care_tz_arv_referred_from_code_id = :p0';
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
            /** @var ChildCareTzArvReferredFromCode $obj */
            $obj = new ChildCareTzArvReferredFromCode();
            $obj->hydrate($row);
            CareTzArvReferredFromCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvReferredFromCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvReferredFromCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvReferredFromCodeTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_CODE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvReferredFromCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvReferredFromCodeTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_CODE_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzArvReferredFromCodeQuery The current query, for fluid interface
     */
    public function filterByCareTzArvReferredFromCodeId($careTzArvReferredFromCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvReferredFromCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvReferredFromCodeId['min'])) {
                $this->addUsingAlias(CareTzArvReferredFromCodeTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_CODE_ID, $careTzArvReferredFromCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvReferredFromCodeId['max'])) {
                $this->addUsingAlias(CareTzArvReferredFromCodeTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_CODE_ID, $careTzArvReferredFromCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvReferredFromCodeTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_CODE_ID, $careTzArvReferredFromCodeId, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvReferredFromCodeQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvReferredFromCodeTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvReferredFromCode $careTzArvReferredFromCode Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvReferredFromCodeQuery The current query, for fluid interface
     */
    public function prune($careTzArvReferredFromCode = null)
    {
        if ($careTzArvReferredFromCode) {
            $this->addUsingAlias(CareTzArvReferredFromCodeTableMap::COL_CARE_TZ_ARV_REFERRED_FROM_CODE_ID, $careTzArvReferredFromCode->getCareTzArvReferredFromCodeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_referred_from_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvReferredFromCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvReferredFromCodeTableMap::clearInstancePool();
            CareTzArvReferredFromCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvReferredFromCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvReferredFromCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvReferredFromCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvReferredFromCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvReferredFromCodeQuery
