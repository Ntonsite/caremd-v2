<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvStatus as ChildCareTzArvStatus;
use CareMd\CareMd\CareTzArvStatusQuery as ChildCareTzArvStatusQuery;
use CareMd\CareMd\Map\CareTzArvStatusTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_status' table.
 *
 *
 *
 * @method     ChildCareTzArvStatusQuery orderByCareTzArvStatusId($order = Criteria::ASC) Order by the care_tz_arv_status_id column
 * @method     ChildCareTzArvStatusQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareTzArvStatusQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareTzArvStatusQuery orderByOther($order = Criteria::ASC) Order by the other column
 *
 * @method     ChildCareTzArvStatusQuery groupByCareTzArvStatusId() Group by the care_tz_arv_status_id column
 * @method     ChildCareTzArvStatusQuery groupByCode() Group by the code column
 * @method     ChildCareTzArvStatusQuery groupByDescription() Group by the description column
 * @method     ChildCareTzArvStatusQuery groupByOther() Group by the other column
 *
 * @method     ChildCareTzArvStatusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvStatusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvStatusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvStatusQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvStatusQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvStatusQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvStatus findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvStatus matching the query
 * @method     ChildCareTzArvStatus findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvStatus matching the query, or a new ChildCareTzArvStatus object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvStatus findOneByCareTzArvStatusId(string $care_tz_arv_status_id) Return the first ChildCareTzArvStatus filtered by the care_tz_arv_status_id column
 * @method     ChildCareTzArvStatus findOneByCode(boolean $code) Return the first ChildCareTzArvStatus filtered by the code column
 * @method     ChildCareTzArvStatus findOneByDescription(string $description) Return the first ChildCareTzArvStatus filtered by the description column
 * @method     ChildCareTzArvStatus findOneByOther(boolean $other) Return the first ChildCareTzArvStatus filtered by the other column *

 * @method     ChildCareTzArvStatus requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvStatus by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvStatus requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvStatus matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvStatus requireOneByCareTzArvStatusId(string $care_tz_arv_status_id) Return the first ChildCareTzArvStatus filtered by the care_tz_arv_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvStatus requireOneByCode(boolean $code) Return the first ChildCareTzArvStatus filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvStatus requireOneByDescription(string $description) Return the first ChildCareTzArvStatus filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvStatus requireOneByOther(boolean $other) Return the first ChildCareTzArvStatus filtered by the other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvStatus[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvStatus objects based on current ModelCriteria
 * @method     ChildCareTzArvStatus[]|ObjectCollection findByCareTzArvStatusId(string $care_tz_arv_status_id) Return ChildCareTzArvStatus objects filtered by the care_tz_arv_status_id column
 * @method     ChildCareTzArvStatus[]|ObjectCollection findByCode(boolean $code) Return ChildCareTzArvStatus objects filtered by the code column
 * @method     ChildCareTzArvStatus[]|ObjectCollection findByDescription(string $description) Return ChildCareTzArvStatus objects filtered by the description column
 * @method     ChildCareTzArvStatus[]|ObjectCollection findByOther(boolean $other) Return ChildCareTzArvStatus objects filtered by the other column
 * @method     ChildCareTzArvStatus[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvStatusQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvStatusQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvStatus', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvStatusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvStatusQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvStatusQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvStatusQuery();
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
     * @return ChildCareTzArvStatus|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvStatusTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvStatusTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvStatus A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_status_id, code, description, other FROM care_tz_arv_status WHERE care_tz_arv_status_id = :p0';
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
            /** @var ChildCareTzArvStatus $obj */
            $obj = new ChildCareTzArvStatus();
            $obj->hydrate($row);
            CareTzArvStatusTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvStatus|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvStatusTableMap::COL_CARE_TZ_ARV_STATUS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvStatusTableMap::COL_CARE_TZ_ARV_STATUS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvStatusId(1234); // WHERE care_tz_arv_status_id = 1234
     * $query->filterByCareTzArvStatusId(array(12, 34)); // WHERE care_tz_arv_status_id IN (12, 34)
     * $query->filterByCareTzArvStatusId(array('min' => 12)); // WHERE care_tz_arv_status_id > 12
     * </code>
     *
     * @param     mixed $careTzArvStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvStatusQuery The current query, for fluid interface
     */
    public function filterByCareTzArvStatusId($careTzArvStatusId = null, $comparison = null)
    {
        if (is_array($careTzArvStatusId)) {
            $useMinMax = false;
            if (isset($careTzArvStatusId['min'])) {
                $this->addUsingAlias(CareTzArvStatusTableMap::COL_CARE_TZ_ARV_STATUS_ID, $careTzArvStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvStatusId['max'])) {
                $this->addUsingAlias(CareTzArvStatusTableMap::COL_CARE_TZ_ARV_STATUS_ID, $careTzArvStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvStatusTableMap::COL_CARE_TZ_ARV_STATUS_ID, $careTzArvStatusId, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode(true); // WHERE code = true
     * $query->filterByCode('yes'); // WHERE code = true
     * </code>
     *
     * @param     boolean|string $code The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvStatusQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (is_string($code)) {
            $code = in_array(strtolower($code), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvStatusTableMap::COL_CODE, $code, $comparison);
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
     * @return $this|ChildCareTzArvStatusQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvStatusTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the other column
     *
     * Example usage:
     * <code>
     * $query->filterByOther(true); // WHERE other = true
     * $query->filterByOther('yes'); // WHERE other = true
     * </code>
     *
     * @param     boolean|string $other The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvStatusQuery The current query, for fluid interface
     */
    public function filterByOther($other = null, $comparison = null)
    {
        if (is_string($other)) {
            $other = in_array(strtolower($other), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvStatusTableMap::COL_OTHER, $other, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvStatus $careTzArvStatus Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvStatusQuery The current query, for fluid interface
     */
    public function prune($careTzArvStatus = null)
    {
        if ($careTzArvStatus) {
            $this->addUsingAlias(CareTzArvStatusTableMap::COL_CARE_TZ_ARV_STATUS_ID, $careTzArvStatus->getCareTzArvStatusId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_status table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvStatusTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvStatusTableMap::clearInstancePool();
            CareTzArvStatusTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvStatusTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvStatusTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvStatusTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvStatusTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvStatusQuery
