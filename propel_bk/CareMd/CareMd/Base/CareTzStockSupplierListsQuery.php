<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzStockSupplierLists as ChildCareTzStockSupplierLists;
use CareMd\CareMd\CareTzStockSupplierListsQuery as ChildCareTzStockSupplierListsQuery;
use CareMd\CareMd\Map\CareTzStockSupplierListsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_stock_supplier_lists' table.
 *
 *
 *
 * @method     ChildCareTzStockSupplierListsQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildCareTzStockSupplierListsQuery orderBySupplierId($order = Criteria::ASC) Order by the Supplier_id column
 * @method     ChildCareTzStockSupplierListsQuery orderBySupplierItemId1($order = Criteria::ASC) Order by the Supplier_item_id1 column
 * @method     ChildCareTzStockSupplierListsQuery orderBySupplierItemId2($order = Criteria::ASC) Order by the Supplier_item_id2 column
 * @method     ChildCareTzStockSupplierListsQuery orderBySupplierItemName($order = Criteria::ASC) Order by the Supplier_item_name column
 * @method     ChildCareTzStockSupplierListsQuery orderBySupplierItemDescription($order = Criteria::ASC) Order by the Supplier_item_description column
 * @method     ChildCareTzStockSupplierListsQuery orderBySupplierItemPacksize($order = Criteria::ASC) Order by the Supplier_item_packsize column
 *
 * @method     ChildCareTzStockSupplierListsQuery groupById() Group by the ID column
 * @method     ChildCareTzStockSupplierListsQuery groupBySupplierId() Group by the Supplier_id column
 * @method     ChildCareTzStockSupplierListsQuery groupBySupplierItemId1() Group by the Supplier_item_id1 column
 * @method     ChildCareTzStockSupplierListsQuery groupBySupplierItemId2() Group by the Supplier_item_id2 column
 * @method     ChildCareTzStockSupplierListsQuery groupBySupplierItemName() Group by the Supplier_item_name column
 * @method     ChildCareTzStockSupplierListsQuery groupBySupplierItemDescription() Group by the Supplier_item_description column
 * @method     ChildCareTzStockSupplierListsQuery groupBySupplierItemPacksize() Group by the Supplier_item_packsize column
 *
 * @method     ChildCareTzStockSupplierListsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzStockSupplierListsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzStockSupplierListsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzStockSupplierListsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzStockSupplierListsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzStockSupplierListsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzStockSupplierLists findOne(ConnectionInterface $con = null) Return the first ChildCareTzStockSupplierLists matching the query
 * @method     ChildCareTzStockSupplierLists findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzStockSupplierLists matching the query, or a new ChildCareTzStockSupplierLists object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzStockSupplierLists findOneById(string $ID) Return the first ChildCareTzStockSupplierLists filtered by the ID column
 * @method     ChildCareTzStockSupplierLists findOneBySupplierId(string $Supplier_id) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_id column
 * @method     ChildCareTzStockSupplierLists findOneBySupplierItemId1(string $Supplier_item_id1) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_item_id1 column
 * @method     ChildCareTzStockSupplierLists findOneBySupplierItemId2(string $Supplier_item_id2) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_item_id2 column
 * @method     ChildCareTzStockSupplierLists findOneBySupplierItemName(string $Supplier_item_name) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_item_name column
 * @method     ChildCareTzStockSupplierLists findOneBySupplierItemDescription(string $Supplier_item_description) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_item_description column
 * @method     ChildCareTzStockSupplierLists findOneBySupplierItemPacksize(string $Supplier_item_packsize) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_item_packsize column *

 * @method     ChildCareTzStockSupplierLists requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzStockSupplierLists by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockSupplierLists requireOne(ConnectionInterface $con = null) Return the first ChildCareTzStockSupplierLists matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzStockSupplierLists requireOneById(string $ID) Return the first ChildCareTzStockSupplierLists filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockSupplierLists requireOneBySupplierId(string $Supplier_id) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockSupplierLists requireOneBySupplierItemId1(string $Supplier_item_id1) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_item_id1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockSupplierLists requireOneBySupplierItemId2(string $Supplier_item_id2) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_item_id2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockSupplierLists requireOneBySupplierItemName(string $Supplier_item_name) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_item_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockSupplierLists requireOneBySupplierItemDescription(string $Supplier_item_description) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_item_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockSupplierLists requireOneBySupplierItemPacksize(string $Supplier_item_packsize) Return the first ChildCareTzStockSupplierLists filtered by the Supplier_item_packsize column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzStockSupplierLists[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzStockSupplierLists objects based on current ModelCriteria
 * @method     ChildCareTzStockSupplierLists[]|ObjectCollection findById(string $ID) Return ChildCareTzStockSupplierLists objects filtered by the ID column
 * @method     ChildCareTzStockSupplierLists[]|ObjectCollection findBySupplierId(string $Supplier_id) Return ChildCareTzStockSupplierLists objects filtered by the Supplier_id column
 * @method     ChildCareTzStockSupplierLists[]|ObjectCollection findBySupplierItemId1(string $Supplier_item_id1) Return ChildCareTzStockSupplierLists objects filtered by the Supplier_item_id1 column
 * @method     ChildCareTzStockSupplierLists[]|ObjectCollection findBySupplierItemId2(string $Supplier_item_id2) Return ChildCareTzStockSupplierLists objects filtered by the Supplier_item_id2 column
 * @method     ChildCareTzStockSupplierLists[]|ObjectCollection findBySupplierItemName(string $Supplier_item_name) Return ChildCareTzStockSupplierLists objects filtered by the Supplier_item_name column
 * @method     ChildCareTzStockSupplierLists[]|ObjectCollection findBySupplierItemDescription(string $Supplier_item_description) Return ChildCareTzStockSupplierLists objects filtered by the Supplier_item_description column
 * @method     ChildCareTzStockSupplierLists[]|ObjectCollection findBySupplierItemPacksize(string $Supplier_item_packsize) Return ChildCareTzStockSupplierLists objects filtered by the Supplier_item_packsize column
 * @method     ChildCareTzStockSupplierLists[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzStockSupplierListsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzStockSupplierListsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzStockSupplierLists', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzStockSupplierListsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzStockSupplierListsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzStockSupplierListsQuery) {
            return $criteria;
        }
        $query = new ChildCareTzStockSupplierListsQuery();
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
     * @return ChildCareTzStockSupplierLists|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzStockSupplierListsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzStockSupplierListsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzStockSupplierLists A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, Supplier_id, Supplier_item_id1, Supplier_item_id2, Supplier_item_name, Supplier_item_description, Supplier_item_packsize FROM care_tz_stock_supplier_lists WHERE ID = :p0';
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
            /** @var ChildCareTzStockSupplierLists $obj */
            $obj = new ChildCareTzStockSupplierLists();
            $obj->hydrate($row);
            CareTzStockSupplierListsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzStockSupplierLists|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzStockSupplierListsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzStockSupplierListsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzStockSupplierListsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the Supplier_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySupplierId(1234); // WHERE Supplier_id = 1234
     * $query->filterBySupplierId(array(12, 34)); // WHERE Supplier_id IN (12, 34)
     * $query->filterBySupplierId(array('min' => 12)); // WHERE Supplier_id > 12
     * </code>
     *
     * @param     mixed $supplierId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockSupplierListsQuery The current query, for fluid interface
     */
    public function filterBySupplierId($supplierId = null, $comparison = null)
    {
        if (is_array($supplierId)) {
            $useMinMax = false;
            if (isset($supplierId['min'])) {
                $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ID, $supplierId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($supplierId['max'])) {
                $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ID, $supplierId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ID, $supplierId, $comparison);
    }

    /**
     * Filter the query on the Supplier_item_id1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySupplierItemId1('fooValue');   // WHERE Supplier_item_id1 = 'fooValue'
     * $query->filterBySupplierItemId1('%fooValue%', Criteria::LIKE); // WHERE Supplier_item_id1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supplierItemId1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockSupplierListsQuery The current query, for fluid interface
     */
    public function filterBySupplierItemId1($supplierItemId1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supplierItemId1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_ID1, $supplierItemId1, $comparison);
    }

    /**
     * Filter the query on the Supplier_item_id2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySupplierItemId2('fooValue');   // WHERE Supplier_item_id2 = 'fooValue'
     * $query->filterBySupplierItemId2('%fooValue%', Criteria::LIKE); // WHERE Supplier_item_id2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supplierItemId2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockSupplierListsQuery The current query, for fluid interface
     */
    public function filterBySupplierItemId2($supplierItemId2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supplierItemId2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_ID2, $supplierItemId2, $comparison);
    }

    /**
     * Filter the query on the Supplier_item_name column
     *
     * Example usage:
     * <code>
     * $query->filterBySupplierItemName('fooValue');   // WHERE Supplier_item_name = 'fooValue'
     * $query->filterBySupplierItemName('%fooValue%', Criteria::LIKE); // WHERE Supplier_item_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supplierItemName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockSupplierListsQuery The current query, for fluid interface
     */
    public function filterBySupplierItemName($supplierItemName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supplierItemName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_NAME, $supplierItemName, $comparison);
    }

    /**
     * Filter the query on the Supplier_item_description column
     *
     * Example usage:
     * <code>
     * $query->filterBySupplierItemDescription('fooValue');   // WHERE Supplier_item_description = 'fooValue'
     * $query->filterBySupplierItemDescription('%fooValue%', Criteria::LIKE); // WHERE Supplier_item_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supplierItemDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockSupplierListsQuery The current query, for fluid interface
     */
    public function filterBySupplierItemDescription($supplierItemDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supplierItemDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_DESCRIPTION, $supplierItemDescription, $comparison);
    }

    /**
     * Filter the query on the Supplier_item_packsize column
     *
     * Example usage:
     * <code>
     * $query->filterBySupplierItemPacksize('fooValue');   // WHERE Supplier_item_packsize = 'fooValue'
     * $query->filterBySupplierItemPacksize('%fooValue%', Criteria::LIKE); // WHERE Supplier_item_packsize LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supplierItemPacksize The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockSupplierListsQuery The current query, for fluid interface
     */
    public function filterBySupplierItemPacksize($supplierItemPacksize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supplierItemPacksize)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_PACKSIZE, $supplierItemPacksize, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzStockSupplierLists $careTzStockSupplierLists Object to remove from the list of results
     *
     * @return $this|ChildCareTzStockSupplierListsQuery The current query, for fluid interface
     */
    public function prune($careTzStockSupplierLists = null)
    {
        if ($careTzStockSupplierLists) {
            $this->addUsingAlias(CareTzStockSupplierListsTableMap::COL_ID, $careTzStockSupplierLists->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_stock_supplier_lists table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockSupplierListsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzStockSupplierListsTableMap::clearInstancePool();
            CareTzStockSupplierListsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockSupplierListsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzStockSupplierListsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzStockSupplierListsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzStockSupplierListsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzStockSupplierListsQuery
