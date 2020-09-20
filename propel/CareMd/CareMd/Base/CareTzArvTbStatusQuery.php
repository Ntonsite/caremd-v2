<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvTbStatus as ChildCareTzArvTbStatus;
use CareMd\CareMd\CareTzArvTbStatusQuery as ChildCareTzArvTbStatusQuery;
use CareMd\CareMd\Map\CareTzArvTbStatusTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_tb_status' table.
 *
 *
 *
 * @method     ChildCareTzArvTbStatusQuery orderByCareTzArvTbStatusId($order = Criteria::ASC) Order by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvTbStatusQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareTzArvTbStatusQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareTzArvTbStatusQuery orderByOther($order = Criteria::ASC) Order by the other column
 *
 * @method     ChildCareTzArvTbStatusQuery groupByCareTzArvTbStatusId() Group by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvTbStatusQuery groupByCode() Group by the code column
 * @method     ChildCareTzArvTbStatusQuery groupByDescription() Group by the description column
 * @method     ChildCareTzArvTbStatusQuery groupByOther() Group by the other column
 *
 * @method     ChildCareTzArvTbStatusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvTbStatusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvTbStatusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvTbStatusQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvTbStatusQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvTbStatusQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvTbStatus findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvTbStatus matching the query
 * @method     ChildCareTzArvTbStatus findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvTbStatus matching the query, or a new ChildCareTzArvTbStatus object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvTbStatus findOneByCareTzArvTbStatusId(int $care_tz_arv_tb_status_id) Return the first ChildCareTzArvTbStatus filtered by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvTbStatus findOneByCode(string $code) Return the first ChildCareTzArvTbStatus filtered by the code column
 * @method     ChildCareTzArvTbStatus findOneByDescription(string $description) Return the first ChildCareTzArvTbStatus filtered by the description column
 * @method     ChildCareTzArvTbStatus findOneByOther(boolean $other) Return the first ChildCareTzArvTbStatus filtered by the other column *

 * @method     ChildCareTzArvTbStatus requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvTbStatus by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTbStatus requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvTbStatus matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvTbStatus requireOneByCareTzArvTbStatusId(int $care_tz_arv_tb_status_id) Return the first ChildCareTzArvTbStatus filtered by the care_tz_arv_tb_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTbStatus requireOneByCode(string $code) Return the first ChildCareTzArvTbStatus filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTbStatus requireOneByDescription(string $description) Return the first ChildCareTzArvTbStatus filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTbStatus requireOneByOther(boolean $other) Return the first ChildCareTzArvTbStatus filtered by the other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvTbStatus[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvTbStatus objects based on current ModelCriteria
 * @method     ChildCareTzArvTbStatus[]|ObjectCollection findByCareTzArvTbStatusId(int $care_tz_arv_tb_status_id) Return ChildCareTzArvTbStatus objects filtered by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvTbStatus[]|ObjectCollection findByCode(string $code) Return ChildCareTzArvTbStatus objects filtered by the code column
 * @method     ChildCareTzArvTbStatus[]|ObjectCollection findByDescription(string $description) Return ChildCareTzArvTbStatus objects filtered by the description column
 * @method     ChildCareTzArvTbStatus[]|ObjectCollection findByOther(boolean $other) Return ChildCareTzArvTbStatus objects filtered by the other column
 * @method     ChildCareTzArvTbStatus[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvTbStatusQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvTbStatusQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvTbStatus', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvTbStatusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvTbStatusQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvTbStatusQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvTbStatusQuery();
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
     * @return ChildCareTzArvTbStatus|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvTbStatusTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvTbStatusTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvTbStatus A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_tb_status_id, code, description, other FROM care_tz_arv_tb_status WHERE care_tz_arv_tb_status_id = :p0';
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
            /** @var ChildCareTzArvTbStatus $obj */
            $obj = new ChildCareTzArvTbStatus();
            $obj->hydrate($row);
            CareTzArvTbStatusTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvTbStatus|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvTbStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvTbStatusTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvTbStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvTbStatusTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_tb_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvTbStatusId(1234); // WHERE care_tz_arv_tb_status_id = 1234
     * $query->filterByCareTzArvTbStatusId(array(12, 34)); // WHERE care_tz_arv_tb_status_id IN (12, 34)
     * $query->filterByCareTzArvTbStatusId(array('min' => 12)); // WHERE care_tz_arv_tb_status_id > 12
     * </code>
     *
     * @param     mixed $careTzArvTbStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvTbStatusQuery The current query, for fluid interface
     */
    public function filterByCareTzArvTbStatusId($careTzArvTbStatusId = null, $comparison = null)
    {
        if (is_array($careTzArvTbStatusId)) {
            $useMinMax = false;
            if (isset($careTzArvTbStatusId['min'])) {
                $this->addUsingAlias(CareTzArvTbStatusTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $careTzArvTbStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvTbStatusId['max'])) {
                $this->addUsingAlias(CareTzArvTbStatusTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $careTzArvTbStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTbStatusTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $careTzArvTbStatusId, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvTbStatusQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTbStatusTableMap::COL_CODE, $code, $comparison);
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
     * @return $this|ChildCareTzArvTbStatusQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTbStatusTableMap::COL_DESCRIPTION, $description, $comparison);
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
     * @return $this|ChildCareTzArvTbStatusQuery The current query, for fluid interface
     */
    public function filterByOther($other = null, $comparison = null)
    {
        if (is_string($other)) {
            $other = in_array(strtolower($other), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvTbStatusTableMap::COL_OTHER, $other, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvTbStatus $careTzArvTbStatus Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvTbStatusQuery The current query, for fluid interface
     */
    public function prune($careTzArvTbStatus = null)
    {
        if ($careTzArvTbStatus) {
            $this->addUsingAlias(CareTzArvTbStatusTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $careTzArvTbStatus->getCareTzArvTbStatusId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_tb_status table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvTbStatusTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvTbStatusTableMap::clearInstancePool();
            CareTzArvTbStatusTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvTbStatusTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvTbStatusTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvTbStatusTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvTbStatusTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvTbStatusQuery
