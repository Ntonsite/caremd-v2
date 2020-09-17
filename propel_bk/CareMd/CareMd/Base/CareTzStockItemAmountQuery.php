<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzStockItemAmount as ChildCareTzStockItemAmount;
use CareMd\CareMd\CareTzStockItemAmountQuery as ChildCareTzStockItemAmountQuery;
use CareMd\CareMd\Map\CareTzStockItemAmountTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_stock_item_amount' table.
 *
 *
 *
 * @method     ChildCareTzStockItemAmountQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildCareTzStockItemAmountQuery orderByDrugsandservicesId($order = Criteria::ASC) Order by the Drugsandservices_id column
 * @method     ChildCareTzStockItemAmountQuery orderByAmount($order = Criteria::ASC) Order by the Amount column
 * @method     ChildCareTzStockItemAmountQuery orderByStockPlaceId($order = Criteria::ASC) Order by the Stock_place_id column
 *
 * @method     ChildCareTzStockItemAmountQuery groupById() Group by the ID column
 * @method     ChildCareTzStockItemAmountQuery groupByDrugsandservicesId() Group by the Drugsandservices_id column
 * @method     ChildCareTzStockItemAmountQuery groupByAmount() Group by the Amount column
 * @method     ChildCareTzStockItemAmountQuery groupByStockPlaceId() Group by the Stock_place_id column
 *
 * @method     ChildCareTzStockItemAmountQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzStockItemAmountQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzStockItemAmountQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzStockItemAmountQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzStockItemAmountQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzStockItemAmountQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzStockItemAmount findOne(ConnectionInterface $con = null) Return the first ChildCareTzStockItemAmount matching the query
 * @method     ChildCareTzStockItemAmount findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzStockItemAmount matching the query, or a new ChildCareTzStockItemAmount object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzStockItemAmount findOneById(string $ID) Return the first ChildCareTzStockItemAmount filtered by the ID column
 * @method     ChildCareTzStockItemAmount findOneByDrugsandservicesId(string $Drugsandservices_id) Return the first ChildCareTzStockItemAmount filtered by the Drugsandservices_id column
 * @method     ChildCareTzStockItemAmount findOneByAmount(string $Amount) Return the first ChildCareTzStockItemAmount filtered by the Amount column
 * @method     ChildCareTzStockItemAmount findOneByStockPlaceId(string $Stock_place_id) Return the first ChildCareTzStockItemAmount filtered by the Stock_place_id column *

 * @method     ChildCareTzStockItemAmount requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzStockItemAmount by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemAmount requireOne(ConnectionInterface $con = null) Return the first ChildCareTzStockItemAmount matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzStockItemAmount requireOneById(string $ID) Return the first ChildCareTzStockItemAmount filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemAmount requireOneByDrugsandservicesId(string $Drugsandservices_id) Return the first ChildCareTzStockItemAmount filtered by the Drugsandservices_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemAmount requireOneByAmount(string $Amount) Return the first ChildCareTzStockItemAmount filtered by the Amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemAmount requireOneByStockPlaceId(string $Stock_place_id) Return the first ChildCareTzStockItemAmount filtered by the Stock_place_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzStockItemAmount[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzStockItemAmount objects based on current ModelCriteria
 * @method     ChildCareTzStockItemAmount[]|ObjectCollection findById(string $ID) Return ChildCareTzStockItemAmount objects filtered by the ID column
 * @method     ChildCareTzStockItemAmount[]|ObjectCollection findByDrugsandservicesId(string $Drugsandservices_id) Return ChildCareTzStockItemAmount objects filtered by the Drugsandservices_id column
 * @method     ChildCareTzStockItemAmount[]|ObjectCollection findByAmount(string $Amount) Return ChildCareTzStockItemAmount objects filtered by the Amount column
 * @method     ChildCareTzStockItemAmount[]|ObjectCollection findByStockPlaceId(string $Stock_place_id) Return ChildCareTzStockItemAmount objects filtered by the Stock_place_id column
 * @method     ChildCareTzStockItemAmount[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzStockItemAmountQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzStockItemAmountQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzStockItemAmount', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzStockItemAmountQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzStockItemAmountQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzStockItemAmountQuery) {
            return $criteria;
        }
        $query = new ChildCareTzStockItemAmountQuery();
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
     * @return ChildCareTzStockItemAmount|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzStockItemAmountTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzStockItemAmountTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzStockItemAmount A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, Drugsandservices_id, Amount, Stock_place_id FROM care_tz_stock_item_amount WHERE ID = :p0';
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
            /** @var ChildCareTzStockItemAmount $obj */
            $obj = new ChildCareTzStockItemAmount();
            $obj->hydrate($row);
            CareTzStockItemAmountTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzStockItemAmount|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzStockItemAmountQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzStockItemAmountQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemAmountQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the Drugsandservices_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDrugsandservicesId(1234); // WHERE Drugsandservices_id = 1234
     * $query->filterByDrugsandservicesId(array(12, 34)); // WHERE Drugsandservices_id IN (12, 34)
     * $query->filterByDrugsandservicesId(array('min' => 12)); // WHERE Drugsandservices_id > 12
     * </code>
     *
     * @param     mixed $drugsandservicesId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemAmountQuery The current query, for fluid interface
     */
    public function filterByDrugsandservicesId($drugsandservicesId = null, $comparison = null)
    {
        if (is_array($drugsandservicesId)) {
            $useMinMax = false;
            if (isset($drugsandservicesId['min'])) {
                $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_DRUGSANDSERVICES_ID, $drugsandservicesId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($drugsandservicesId['max'])) {
                $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_DRUGSANDSERVICES_ID, $drugsandservicesId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_DRUGSANDSERVICES_ID, $drugsandservicesId, $comparison);
    }

    /**
     * Filter the query on the Amount column
     *
     * Example usage:
     * <code>
     * $query->filterByAmount(1234); // WHERE Amount = 1234
     * $query->filterByAmount(array(12, 34)); // WHERE Amount IN (12, 34)
     * $query->filterByAmount(array('min' => 12)); // WHERE Amount > 12
     * </code>
     *
     * @param     mixed $amount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemAmountQuery The current query, for fluid interface
     */
    public function filterByAmount($amount = null, $comparison = null)
    {
        if (is_array($amount)) {
            $useMinMax = false;
            if (isset($amount['min'])) {
                $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amount['max'])) {
                $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_AMOUNT, $amount, $comparison);
    }

    /**
     * Filter the query on the Stock_place_id column
     *
     * Example usage:
     * <code>
     * $query->filterByStockPlaceId(1234); // WHERE Stock_place_id = 1234
     * $query->filterByStockPlaceId(array(12, 34)); // WHERE Stock_place_id IN (12, 34)
     * $query->filterByStockPlaceId(array('min' => 12)); // WHERE Stock_place_id > 12
     * </code>
     *
     * @param     mixed $stockPlaceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemAmountQuery The current query, for fluid interface
     */
    public function filterByStockPlaceId($stockPlaceId = null, $comparison = null)
    {
        if (is_array($stockPlaceId)) {
            $useMinMax = false;
            if (isset($stockPlaceId['min'])) {
                $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_STOCK_PLACE_ID, $stockPlaceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockPlaceId['max'])) {
                $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_STOCK_PLACE_ID, $stockPlaceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_STOCK_PLACE_ID, $stockPlaceId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzStockItemAmount $careTzStockItemAmount Object to remove from the list of results
     *
     * @return $this|ChildCareTzStockItemAmountQuery The current query, for fluid interface
     */
    public function prune($careTzStockItemAmount = null)
    {
        if ($careTzStockItemAmount) {
            $this->addUsingAlias(CareTzStockItemAmountTableMap::COL_ID, $careTzStockItemAmount->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_stock_item_amount table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockItemAmountTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzStockItemAmountTableMap::clearInstancePool();
            CareTzStockItemAmountTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockItemAmountTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzStockItemAmountTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzStockItemAmountTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzStockItemAmountTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzStockItemAmountQuery
