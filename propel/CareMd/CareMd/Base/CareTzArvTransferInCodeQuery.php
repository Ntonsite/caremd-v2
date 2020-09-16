<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvTransferInCode as ChildCareTzArvTransferInCode;
use CareMd\CareMd\CareTzArvTransferInCodeQuery as ChildCareTzArvTransferInCodeQuery;
use CareMd\CareMd\Map\CareTzArvTransferInCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_transfer_in_code' table.
 *
 *
 *
 * @method     ChildCareTzArvTransferInCodeQuery orderByCareTzArvTransferInCodeId($order = Criteria::ASC) Order by the care_tz_arv_transfer_in_code_id column
 * @method     ChildCareTzArvTransferInCodeQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     ChildCareTzArvTransferInCodeQuery groupByCareTzArvTransferInCodeId() Group by the care_tz_arv_transfer_in_code_id column
 * @method     ChildCareTzArvTransferInCodeQuery groupByDescription() Group by the description column
 *
 * @method     ChildCareTzArvTransferInCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvTransferInCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvTransferInCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvTransferInCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvTransferInCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvTransferInCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvTransferInCode findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvTransferInCode matching the query
 * @method     ChildCareTzArvTransferInCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvTransferInCode matching the query, or a new ChildCareTzArvTransferInCode object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvTransferInCode findOneByCareTzArvTransferInCodeId(int $care_tz_arv_transfer_in_code_id) Return the first ChildCareTzArvTransferInCode filtered by the care_tz_arv_transfer_in_code_id column
 * @method     ChildCareTzArvTransferInCode findOneByDescription(string $description) Return the first ChildCareTzArvTransferInCode filtered by the description column *

 * @method     ChildCareTzArvTransferInCode requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvTransferInCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTransferInCode requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvTransferInCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvTransferInCode requireOneByCareTzArvTransferInCodeId(int $care_tz_arv_transfer_in_code_id) Return the first ChildCareTzArvTransferInCode filtered by the care_tz_arv_transfer_in_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTransferInCode requireOneByDescription(string $description) Return the first ChildCareTzArvTransferInCode filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvTransferInCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvTransferInCode objects based on current ModelCriteria
 * @method     ChildCareTzArvTransferInCode[]|ObjectCollection findByCareTzArvTransferInCodeId(int $care_tz_arv_transfer_in_code_id) Return ChildCareTzArvTransferInCode objects filtered by the care_tz_arv_transfer_in_code_id column
 * @method     ChildCareTzArvTransferInCode[]|ObjectCollection findByDescription(string $description) Return ChildCareTzArvTransferInCode objects filtered by the description column
 * @method     ChildCareTzArvTransferInCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvTransferInCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvTransferInCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvTransferInCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvTransferInCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvTransferInCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvTransferInCodeQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvTransferInCodeQuery();
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
     * @return ChildCareTzArvTransferInCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvTransferInCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvTransferInCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvTransferInCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_transfer_in_code_id, description FROM care_tz_arv_transfer_in_code WHERE care_tz_arv_transfer_in_code_id = :p0';
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
            /** @var ChildCareTzArvTransferInCode $obj */
            $obj = new ChildCareTzArvTransferInCode();
            $obj->hydrate($row);
            CareTzArvTransferInCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvTransferInCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvTransferInCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvTransferInCodeTableMap::COL_CARE_TZ_ARV_TRANSFER_IN_CODE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvTransferInCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvTransferInCodeTableMap::COL_CARE_TZ_ARV_TRANSFER_IN_CODE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_transfer_in_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvTransferInCodeId(1234); // WHERE care_tz_arv_transfer_in_code_id = 1234
     * $query->filterByCareTzArvTransferInCodeId(array(12, 34)); // WHERE care_tz_arv_transfer_in_code_id IN (12, 34)
     * $query->filterByCareTzArvTransferInCodeId(array('min' => 12)); // WHERE care_tz_arv_transfer_in_code_id > 12
     * </code>
     *
     * @param     mixed $careTzArvTransferInCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvTransferInCodeQuery The current query, for fluid interface
     */
    public function filterByCareTzArvTransferInCodeId($careTzArvTransferInCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvTransferInCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvTransferInCodeId['min'])) {
                $this->addUsingAlias(CareTzArvTransferInCodeTableMap::COL_CARE_TZ_ARV_TRANSFER_IN_CODE_ID, $careTzArvTransferInCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvTransferInCodeId['max'])) {
                $this->addUsingAlias(CareTzArvTransferInCodeTableMap::COL_CARE_TZ_ARV_TRANSFER_IN_CODE_ID, $careTzArvTransferInCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTransferInCodeTableMap::COL_CARE_TZ_ARV_TRANSFER_IN_CODE_ID, $careTzArvTransferInCodeId, $comparison);
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
     * @return $this|ChildCareTzArvTransferInCodeQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTransferInCodeTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvTransferInCode $careTzArvTransferInCode Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvTransferInCodeQuery The current query, for fluid interface
     */
    public function prune($careTzArvTransferInCode = null)
    {
        if ($careTzArvTransferInCode) {
            $this->addUsingAlias(CareTzArvTransferInCodeTableMap::COL_CARE_TZ_ARV_TRANSFER_IN_CODE_ID, $careTzArvTransferInCode->getCareTzArvTransferInCodeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_transfer_in_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvTransferInCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvTransferInCodeTableMap::clearInstancePool();
            CareTzArvTransferInCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvTransferInCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvTransferInCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvTransferInCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvTransferInCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvTransferInCodeQuery
