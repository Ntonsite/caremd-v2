<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareBillingItem as ChildCareBillingItem;
use CareMd\CareMd\CareBillingItemQuery as ChildCareBillingItemQuery;
use CareMd\CareMd\Map\CareBillingItemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_billing_item' table.
 *
 *
 *
 * @method     ChildCareBillingItemQuery orderByItemCode($order = Criteria::ASC) Order by the item_code column
 * @method     ChildCareBillingItemQuery orderByItemDescription($order = Criteria::ASC) Order by the item_description column
 * @method     ChildCareBillingItemQuery orderByItemUnitCost($order = Criteria::ASC) Order by the item_unit_cost column
 * @method     ChildCareBillingItemQuery orderByItemType($order = Criteria::ASC) Order by the item_type column
 * @method     ChildCareBillingItemQuery orderByItemDiscountMaxAllowed($order = Criteria::ASC) Order by the item_discount_max_allowed column
 * @method     ChildCareBillingItemQuery orderByGroup($order = Criteria::ASC) Order by the group column
 *
 * @method     ChildCareBillingItemQuery groupByItemCode() Group by the item_code column
 * @method     ChildCareBillingItemQuery groupByItemDescription() Group by the item_description column
 * @method     ChildCareBillingItemQuery groupByItemUnitCost() Group by the item_unit_cost column
 * @method     ChildCareBillingItemQuery groupByItemType() Group by the item_type column
 * @method     ChildCareBillingItemQuery groupByItemDiscountMaxAllowed() Group by the item_discount_max_allowed column
 * @method     ChildCareBillingItemQuery groupByGroup() Group by the group column
 *
 * @method     ChildCareBillingItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareBillingItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareBillingItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareBillingItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareBillingItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareBillingItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareBillingItem findOne(ConnectionInterface $con = null) Return the first ChildCareBillingItem matching the query
 * @method     ChildCareBillingItem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareBillingItem matching the query, or a new ChildCareBillingItem object populated from the query conditions when no match is found
 *
 * @method     ChildCareBillingItem findOneByItemCode(string $item_code) Return the first ChildCareBillingItem filtered by the item_code column
 * @method     ChildCareBillingItem findOneByItemDescription(string $item_description) Return the first ChildCareBillingItem filtered by the item_description column
 * @method     ChildCareBillingItem findOneByItemUnitCost(double $item_unit_cost) Return the first ChildCareBillingItem filtered by the item_unit_cost column
 * @method     ChildCareBillingItem findOneByItemType(string $item_type) Return the first ChildCareBillingItem filtered by the item_type column
 * @method     ChildCareBillingItem findOneByItemDiscountMaxAllowed(int $item_discount_max_allowed) Return the first ChildCareBillingItem filtered by the item_discount_max_allowed column
 * @method     ChildCareBillingItem findOneByGroup(string $group) Return the first ChildCareBillingItem filtered by the group column *

 * @method     ChildCareBillingItem requirePk($key, ConnectionInterface $con = null) Return the ChildCareBillingItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingItem requireOne(ConnectionInterface $con = null) Return the first ChildCareBillingItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingItem requireOneByItemCode(string $item_code) Return the first ChildCareBillingItem filtered by the item_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingItem requireOneByItemDescription(string $item_description) Return the first ChildCareBillingItem filtered by the item_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingItem requireOneByItemUnitCost(double $item_unit_cost) Return the first ChildCareBillingItem filtered by the item_unit_cost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingItem requireOneByItemType(string $item_type) Return the first ChildCareBillingItem filtered by the item_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingItem requireOneByItemDiscountMaxAllowed(int $item_discount_max_allowed) Return the first ChildCareBillingItem filtered by the item_discount_max_allowed column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingItem requireOneByGroup(string $group) Return the first ChildCareBillingItem filtered by the group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingItem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareBillingItem objects based on current ModelCriteria
 * @method     ChildCareBillingItem[]|ObjectCollection findByItemCode(string $item_code) Return ChildCareBillingItem objects filtered by the item_code column
 * @method     ChildCareBillingItem[]|ObjectCollection findByItemDescription(string $item_description) Return ChildCareBillingItem objects filtered by the item_description column
 * @method     ChildCareBillingItem[]|ObjectCollection findByItemUnitCost(double $item_unit_cost) Return ChildCareBillingItem objects filtered by the item_unit_cost column
 * @method     ChildCareBillingItem[]|ObjectCollection findByItemType(string $item_type) Return ChildCareBillingItem objects filtered by the item_type column
 * @method     ChildCareBillingItem[]|ObjectCollection findByItemDiscountMaxAllowed(int $item_discount_max_allowed) Return ChildCareBillingItem objects filtered by the item_discount_max_allowed column
 * @method     ChildCareBillingItem[]|ObjectCollection findByGroup(string $group) Return ChildCareBillingItem objects filtered by the group column
 * @method     ChildCareBillingItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareBillingItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareBillingItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareBillingItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareBillingItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareBillingItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareBillingItemQuery) {
            return $criteria;
        }
        $query = new ChildCareBillingItemQuery();
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
     * @return ChildCareBillingItem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareBillingItemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareBillingItemTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareBillingItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT item_code, item_description, item_unit_cost, item_type, item_discount_max_allowed, group FROM care_billing_item WHERE item_code = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareBillingItem $obj */
            $obj = new ChildCareBillingItem();
            $obj->hydrate($row);
            CareBillingItemTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareBillingItem|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareBillingItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_CODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareBillingItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_CODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the item_code column
     *
     * Example usage:
     * <code>
     * $query->filterByItemCode('fooValue');   // WHERE item_code = 'fooValue'
     * $query->filterByItemCode('%fooValue%', Criteria::LIKE); // WHERE item_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingItemQuery The current query, for fluid interface
     */
    public function filterByItemCode($itemCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_CODE, $itemCode, $comparison);
    }

    /**
     * Filter the query on the item_description column
     *
     * Example usage:
     * <code>
     * $query->filterByItemDescription('fooValue');   // WHERE item_description = 'fooValue'
     * $query->filterByItemDescription('%fooValue%', Criteria::LIKE); // WHERE item_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingItemQuery The current query, for fluid interface
     */
    public function filterByItemDescription($itemDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_DESCRIPTION, $itemDescription, $comparison);
    }

    /**
     * Filter the query on the item_unit_cost column
     *
     * Example usage:
     * <code>
     * $query->filterByItemUnitCost(1234); // WHERE item_unit_cost = 1234
     * $query->filterByItemUnitCost(array(12, 34)); // WHERE item_unit_cost IN (12, 34)
     * $query->filterByItemUnitCost(array('min' => 12)); // WHERE item_unit_cost > 12
     * </code>
     *
     * @param     mixed $itemUnitCost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingItemQuery The current query, for fluid interface
     */
    public function filterByItemUnitCost($itemUnitCost = null, $comparison = null)
    {
        if (is_array($itemUnitCost)) {
            $useMinMax = false;
            if (isset($itemUnitCost['min'])) {
                $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_UNIT_COST, $itemUnitCost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemUnitCost['max'])) {
                $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_UNIT_COST, $itemUnitCost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_UNIT_COST, $itemUnitCost, $comparison);
    }

    /**
     * Filter the query on the item_type column
     *
     * Example usage:
     * <code>
     * $query->filterByItemType('fooValue');   // WHERE item_type = 'fooValue'
     * $query->filterByItemType('%fooValue%', Criteria::LIKE); // WHERE item_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingItemQuery The current query, for fluid interface
     */
    public function filterByItemType($itemType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_TYPE, $itemType, $comparison);
    }

    /**
     * Filter the query on the item_discount_max_allowed column
     *
     * Example usage:
     * <code>
     * $query->filterByItemDiscountMaxAllowed(1234); // WHERE item_discount_max_allowed = 1234
     * $query->filterByItemDiscountMaxAllowed(array(12, 34)); // WHERE item_discount_max_allowed IN (12, 34)
     * $query->filterByItemDiscountMaxAllowed(array('min' => 12)); // WHERE item_discount_max_allowed > 12
     * </code>
     *
     * @param     mixed $itemDiscountMaxAllowed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingItemQuery The current query, for fluid interface
     */
    public function filterByItemDiscountMaxAllowed($itemDiscountMaxAllowed = null, $comparison = null)
    {
        if (is_array($itemDiscountMaxAllowed)) {
            $useMinMax = false;
            if (isset($itemDiscountMaxAllowed['min'])) {
                $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_DISCOUNT_MAX_ALLOWED, $itemDiscountMaxAllowed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemDiscountMaxAllowed['max'])) {
                $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_DISCOUNT_MAX_ALLOWED, $itemDiscountMaxAllowed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_DISCOUNT_MAX_ALLOWED, $itemDiscountMaxAllowed, $comparison);
    }

    /**
     * Filter the query on the group column
     *
     * Example usage:
     * <code>
     * $query->filterByGroup('fooValue');   // WHERE group = 'fooValue'
     * $query->filterByGroup('%fooValue%', Criteria::LIKE); // WHERE group LIKE '%fooValue%'
     * </code>
     *
     * @param     string $group The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingItemQuery The current query, for fluid interface
     */
    public function filterByGroup($group = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($group)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingItemTableMap::COL_GROUP, $group, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareBillingItem $careBillingItem Object to remove from the list of results
     *
     * @return $this|ChildCareBillingItemQuery The current query, for fluid interface
     */
    public function prune($careBillingItem = null)
    {
        if ($careBillingItem) {
            $this->addUsingAlias(CareBillingItemTableMap::COL_ITEM_CODE, $careBillingItem->getItemCode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_billing_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareBillingItemTableMap::clearInstancePool();
            CareBillingItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareBillingItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareBillingItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareBillingItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareBillingItemQuery
