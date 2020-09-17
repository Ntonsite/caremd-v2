<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareTzDrugsandservicesArchive as ChildCareTzDrugsandservicesArchive;
use CareMd\CareMd\CareTzDrugsandservicesArchiveQuery as ChildCareTzDrugsandservicesArchiveQuery;
use CareMd\CareMd\Map\CareTzDrugsandservicesArchiveTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_drugsandservices_archive' table.
 *
 *
 *
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByItemNumber($order = Criteria::ASC) Order by the item_number column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByPartcode($order = Criteria::ASC) Order by the partcode column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByIsPediatric($order = Criteria::ASC) Order by the is_pediatric column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByIsAdult($order = Criteria::ASC) Order by the is_adult column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByIsOther($order = Criteria::ASC) Order by the is_other column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByIsConsumable($order = Criteria::ASC) Order by the is_consumable column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByIsLabtest($order = Criteria::ASC) Order by the is_labtest column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByItemDescription($order = Criteria::ASC) Order by the item_description column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByItemFullDescription($order = Criteria::ASC) Order by the item_full_description column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByUnitPrice($order = Criteria::ASC) Order by the unit_price column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByUnitPrice1($order = Criteria::ASC) Order by the unit_price_1 column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByUnitPrice2($order = Criteria::ASC) Order by the unit_price_2 column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByUnitPrice3($order = Criteria::ASC) Order by the unit_price_3 column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByPurchasingClass($order = Criteria::ASC) Order by the purchasing_class column
 * @method     ChildCareTzDrugsandservicesArchiveQuery orderByTimestamp($order = Criteria::ASC) Order by the timestamp column
 *
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByItemId() Group by the item_id column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByItemNumber() Group by the item_number column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByPartcode() Group by the partcode column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByIsPediatric() Group by the is_pediatric column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByIsAdult() Group by the is_adult column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByIsOther() Group by the is_other column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByIsConsumable() Group by the is_consumable column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByIsLabtest() Group by the is_labtest column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByItemDescription() Group by the item_description column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByItemFullDescription() Group by the item_full_description column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByUnitPrice() Group by the unit_price column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByUnitPrice1() Group by the unit_price_1 column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByUnitPrice2() Group by the unit_price_2 column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByUnitPrice3() Group by the unit_price_3 column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByPurchasingClass() Group by the purchasing_class column
 * @method     ChildCareTzDrugsandservicesArchiveQuery groupByTimestamp() Group by the timestamp column
 *
 * @method     ChildCareTzDrugsandservicesArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzDrugsandservicesArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzDrugsandservicesArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzDrugsandservicesArchiveQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzDrugsandservicesArchiveQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzDrugsandservicesArchiveQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzDrugsandservicesArchive findOne(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservicesArchive matching the query
 * @method     ChildCareTzDrugsandservicesArchive findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservicesArchive matching the query, or a new ChildCareTzDrugsandservicesArchive object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzDrugsandservicesArchive findOneByItemId(string $item_id) Return the first ChildCareTzDrugsandservicesArchive filtered by the item_id column
 * @method     ChildCareTzDrugsandservicesArchive findOneByItemNumber(string $item_number) Return the first ChildCareTzDrugsandservicesArchive filtered by the item_number column
 * @method     ChildCareTzDrugsandservicesArchive findOneByPartcode(string $partcode) Return the first ChildCareTzDrugsandservicesArchive filtered by the partcode column
 * @method     ChildCareTzDrugsandservicesArchive findOneByIsPediatric(int $is_pediatric) Return the first ChildCareTzDrugsandservicesArchive filtered by the is_pediatric column
 * @method     ChildCareTzDrugsandservicesArchive findOneByIsAdult(int $is_adult) Return the first ChildCareTzDrugsandservicesArchive filtered by the is_adult column
 * @method     ChildCareTzDrugsandservicesArchive findOneByIsOther(int $is_other) Return the first ChildCareTzDrugsandservicesArchive filtered by the is_other column
 * @method     ChildCareTzDrugsandservicesArchive findOneByIsConsumable(int $is_consumable) Return the first ChildCareTzDrugsandservicesArchive filtered by the is_consumable column
 * @method     ChildCareTzDrugsandservicesArchive findOneByIsLabtest(int $is_labtest) Return the first ChildCareTzDrugsandservicesArchive filtered by the is_labtest column
 * @method     ChildCareTzDrugsandservicesArchive findOneByItemDescription(string $item_description) Return the first ChildCareTzDrugsandservicesArchive filtered by the item_description column
 * @method     ChildCareTzDrugsandservicesArchive findOneByItemFullDescription(string $item_full_description) Return the first ChildCareTzDrugsandservicesArchive filtered by the item_full_description column
 * @method     ChildCareTzDrugsandservicesArchive findOneByUnitPrice(string $unit_price) Return the first ChildCareTzDrugsandservicesArchive filtered by the unit_price column
 * @method     ChildCareTzDrugsandservicesArchive findOneByUnitPrice1(string $unit_price_1) Return the first ChildCareTzDrugsandservicesArchive filtered by the unit_price_1 column
 * @method     ChildCareTzDrugsandservicesArchive findOneByUnitPrice2(string $unit_price_2) Return the first ChildCareTzDrugsandservicesArchive filtered by the unit_price_2 column
 * @method     ChildCareTzDrugsandservicesArchive findOneByUnitPrice3(string $unit_price_3) Return the first ChildCareTzDrugsandservicesArchive filtered by the unit_price_3 column
 * @method     ChildCareTzDrugsandservicesArchive findOneByPurchasingClass(string $purchasing_class) Return the first ChildCareTzDrugsandservicesArchive filtered by the purchasing_class column
 * @method     ChildCareTzDrugsandservicesArchive findOneByTimestamp(string $timestamp) Return the first ChildCareTzDrugsandservicesArchive filtered by the timestamp column *

 * @method     ChildCareTzDrugsandservicesArchive requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzDrugsandservicesArchive by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOne(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservicesArchive matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDrugsandservicesArchive requireOneByItemId(string $item_id) Return the first ChildCareTzDrugsandservicesArchive filtered by the item_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByItemNumber(string $item_number) Return the first ChildCareTzDrugsandservicesArchive filtered by the item_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByPartcode(string $partcode) Return the first ChildCareTzDrugsandservicesArchive filtered by the partcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByIsPediatric(int $is_pediatric) Return the first ChildCareTzDrugsandservicesArchive filtered by the is_pediatric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByIsAdult(int $is_adult) Return the first ChildCareTzDrugsandservicesArchive filtered by the is_adult column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByIsOther(int $is_other) Return the first ChildCareTzDrugsandservicesArchive filtered by the is_other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByIsConsumable(int $is_consumable) Return the first ChildCareTzDrugsandservicesArchive filtered by the is_consumable column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByIsLabtest(int $is_labtest) Return the first ChildCareTzDrugsandservicesArchive filtered by the is_labtest column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByItemDescription(string $item_description) Return the first ChildCareTzDrugsandservicesArchive filtered by the item_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByItemFullDescription(string $item_full_description) Return the first ChildCareTzDrugsandservicesArchive filtered by the item_full_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByUnitPrice(string $unit_price) Return the first ChildCareTzDrugsandservicesArchive filtered by the unit_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByUnitPrice1(string $unit_price_1) Return the first ChildCareTzDrugsandservicesArchive filtered by the unit_price_1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByUnitPrice2(string $unit_price_2) Return the first ChildCareTzDrugsandservicesArchive filtered by the unit_price_2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByUnitPrice3(string $unit_price_3) Return the first ChildCareTzDrugsandservicesArchive filtered by the unit_price_3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByPurchasingClass(string $purchasing_class) Return the first ChildCareTzDrugsandservicesArchive filtered by the purchasing_class column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesArchive requireOneByTimestamp(string $timestamp) Return the first ChildCareTzDrugsandservicesArchive filtered by the timestamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzDrugsandservicesArchive objects based on current ModelCriteria
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByItemId(string $item_id) Return ChildCareTzDrugsandservicesArchive objects filtered by the item_id column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByItemNumber(string $item_number) Return ChildCareTzDrugsandservicesArchive objects filtered by the item_number column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByPartcode(string $partcode) Return ChildCareTzDrugsandservicesArchive objects filtered by the partcode column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByIsPediatric(int $is_pediatric) Return ChildCareTzDrugsandservicesArchive objects filtered by the is_pediatric column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByIsAdult(int $is_adult) Return ChildCareTzDrugsandservicesArchive objects filtered by the is_adult column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByIsOther(int $is_other) Return ChildCareTzDrugsandservicesArchive objects filtered by the is_other column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByIsConsumable(int $is_consumable) Return ChildCareTzDrugsandservicesArchive objects filtered by the is_consumable column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByIsLabtest(int $is_labtest) Return ChildCareTzDrugsandservicesArchive objects filtered by the is_labtest column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByItemDescription(string $item_description) Return ChildCareTzDrugsandservicesArchive objects filtered by the item_description column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByItemFullDescription(string $item_full_description) Return ChildCareTzDrugsandservicesArchive objects filtered by the item_full_description column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByUnitPrice(string $unit_price) Return ChildCareTzDrugsandservicesArchive objects filtered by the unit_price column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByUnitPrice1(string $unit_price_1) Return ChildCareTzDrugsandservicesArchive objects filtered by the unit_price_1 column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByUnitPrice2(string $unit_price_2) Return ChildCareTzDrugsandservicesArchive objects filtered by the unit_price_2 column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByUnitPrice3(string $unit_price_3) Return ChildCareTzDrugsandservicesArchive objects filtered by the unit_price_3 column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByPurchasingClass(string $purchasing_class) Return ChildCareTzDrugsandservicesArchive objects filtered by the purchasing_class column
 * @method     ChildCareTzDrugsandservicesArchive[]|ObjectCollection findByTimestamp(string $timestamp) Return ChildCareTzDrugsandservicesArchive objects filtered by the timestamp column
 * @method     ChildCareTzDrugsandservicesArchive[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzDrugsandservicesArchiveQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzDrugsandservicesArchiveQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzDrugsandservicesArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzDrugsandservicesArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzDrugsandservicesArchiveQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzDrugsandservicesArchiveQuery) {
            return $criteria;
        }
        $query = new ChildCareTzDrugsandservicesArchiveQuery();
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
     * @return ChildCareTzDrugsandservicesArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareTzDrugsandservicesArchive object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareTzDrugsandservicesArchive object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareTzDrugsandservicesArchive object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareTzDrugsandservicesArchive object has no primary key');
    }

    /**
     * Filter the query on the item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemId(1234); // WHERE item_id = 1234
     * $query->filterByItemId(array(12, 34)); // WHERE item_id IN (12, 34)
     * $query->filterByItemId(array('min' => 12)); // WHERE item_id > 12
     * </code>
     *
     * @param     mixed $itemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (is_array($itemId)) {
            $useMinMax = false;
            if (isset($itemId['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemId['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the item_number column
     *
     * Example usage:
     * <code>
     * $query->filterByItemNumber('fooValue');   // WHERE item_number = 'fooValue'
     * $query->filterByItemNumber('%fooValue%', Criteria::LIKE); // WHERE item_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemNumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByItemNumber($itemNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_ITEM_NUMBER, $itemNumber, $comparison);
    }

    /**
     * Filter the query on the partcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPartcode('fooValue');   // WHERE partcode = 'fooValue'
     * $query->filterByPartcode('%fooValue%', Criteria::LIKE); // WHERE partcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $partcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByPartcode($partcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($partcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_PARTCODE, $partcode, $comparison);
    }

    /**
     * Filter the query on the is_pediatric column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPediatric(1234); // WHERE is_pediatric = 1234
     * $query->filterByIsPediatric(array(12, 34)); // WHERE is_pediatric IN (12, 34)
     * $query->filterByIsPediatric(array('min' => 12)); // WHERE is_pediatric > 12
     * </code>
     *
     * @param     mixed $isPediatric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByIsPediatric($isPediatric = null, $comparison = null)
    {
        if (is_array($isPediatric)) {
            $useMinMax = false;
            if (isset($isPediatric['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_PEDIATRIC, $isPediatric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isPediatric['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_PEDIATRIC, $isPediatric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_PEDIATRIC, $isPediatric, $comparison);
    }

    /**
     * Filter the query on the is_adult column
     *
     * Example usage:
     * <code>
     * $query->filterByIsAdult(1234); // WHERE is_adult = 1234
     * $query->filterByIsAdult(array(12, 34)); // WHERE is_adult IN (12, 34)
     * $query->filterByIsAdult(array('min' => 12)); // WHERE is_adult > 12
     * </code>
     *
     * @param     mixed $isAdult The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByIsAdult($isAdult = null, $comparison = null)
    {
        if (is_array($isAdult)) {
            $useMinMax = false;
            if (isset($isAdult['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_ADULT, $isAdult['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isAdult['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_ADULT, $isAdult['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_ADULT, $isAdult, $comparison);
    }

    /**
     * Filter the query on the is_other column
     *
     * Example usage:
     * <code>
     * $query->filterByIsOther(1234); // WHERE is_other = 1234
     * $query->filterByIsOther(array(12, 34)); // WHERE is_other IN (12, 34)
     * $query->filterByIsOther(array('min' => 12)); // WHERE is_other > 12
     * </code>
     *
     * @param     mixed $isOther The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByIsOther($isOther = null, $comparison = null)
    {
        if (is_array($isOther)) {
            $useMinMax = false;
            if (isset($isOther['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_OTHER, $isOther['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isOther['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_OTHER, $isOther['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_OTHER, $isOther, $comparison);
    }

    /**
     * Filter the query on the is_consumable column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConsumable(1234); // WHERE is_consumable = 1234
     * $query->filterByIsConsumable(array(12, 34)); // WHERE is_consumable IN (12, 34)
     * $query->filterByIsConsumable(array('min' => 12)); // WHERE is_consumable > 12
     * </code>
     *
     * @param     mixed $isConsumable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByIsConsumable($isConsumable = null, $comparison = null)
    {
        if (is_array($isConsumable)) {
            $useMinMax = false;
            if (isset($isConsumable['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_CONSUMABLE, $isConsumable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isConsumable['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_CONSUMABLE, $isConsumable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_CONSUMABLE, $isConsumable, $comparison);
    }

    /**
     * Filter the query on the is_labtest column
     *
     * Example usage:
     * <code>
     * $query->filterByIsLabtest(1234); // WHERE is_labtest = 1234
     * $query->filterByIsLabtest(array(12, 34)); // WHERE is_labtest IN (12, 34)
     * $query->filterByIsLabtest(array('min' => 12)); // WHERE is_labtest > 12
     * </code>
     *
     * @param     mixed $isLabtest The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByIsLabtest($isLabtest = null, $comparison = null)
    {
        if (is_array($isLabtest)) {
            $useMinMax = false;
            if (isset($isLabtest['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_LABTEST, $isLabtest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isLabtest['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_LABTEST, $isLabtest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_IS_LABTEST, $isLabtest, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByItemDescription($itemDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_ITEM_DESCRIPTION, $itemDescription, $comparison);
    }

    /**
     * Filter the query on the item_full_description column
     *
     * Example usage:
     * <code>
     * $query->filterByItemFullDescription('fooValue');   // WHERE item_full_description = 'fooValue'
     * $query->filterByItemFullDescription('%fooValue%', Criteria::LIKE); // WHERE item_full_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemFullDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByItemFullDescription($itemFullDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemFullDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_ITEM_FULL_DESCRIPTION, $itemFullDescription, $comparison);
    }

    /**
     * Filter the query on the unit_price column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice('fooValue');   // WHERE unit_price = 'fooValue'
     * $query->filterByUnitPrice('%fooValue%', Criteria::LIKE); // WHERE unit_price LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitPrice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByUnitPrice($unitPrice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitPrice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_UNIT_PRICE, $unitPrice, $comparison);
    }

    /**
     * Filter the query on the unit_price_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice1('fooValue');   // WHERE unit_price_1 = 'fooValue'
     * $query->filterByUnitPrice1('%fooValue%', Criteria::LIKE); // WHERE unit_price_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitPrice1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByUnitPrice1($unitPrice1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitPrice1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_UNIT_PRICE_1, $unitPrice1, $comparison);
    }

    /**
     * Filter the query on the unit_price_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice2('fooValue');   // WHERE unit_price_2 = 'fooValue'
     * $query->filterByUnitPrice2('%fooValue%', Criteria::LIKE); // WHERE unit_price_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitPrice2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByUnitPrice2($unitPrice2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitPrice2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_UNIT_PRICE_2, $unitPrice2, $comparison);
    }

    /**
     * Filter the query on the unit_price_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice3('fooValue');   // WHERE unit_price_3 = 'fooValue'
     * $query->filterByUnitPrice3('%fooValue%', Criteria::LIKE); // WHERE unit_price_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitPrice3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByUnitPrice3($unitPrice3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitPrice3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_UNIT_PRICE_3, $unitPrice3, $comparison);
    }

    /**
     * Filter the query on the purchasing_class column
     *
     * Example usage:
     * <code>
     * $query->filterByPurchasingClass('fooValue');   // WHERE purchasing_class = 'fooValue'
     * $query->filterByPurchasingClass('%fooValue%', Criteria::LIKE); // WHERE purchasing_class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $purchasingClass The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByPurchasingClass($purchasingClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($purchasingClass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_PURCHASING_CLASS, $purchasingClass, $comparison);
    }

    /**
     * Filter the query on the timestamp column
     *
     * Example usage:
     * <code>
     * $query->filterByTimestamp(1234); // WHERE timestamp = 1234
     * $query->filterByTimestamp(array(12, 34)); // WHERE timestamp IN (12, 34)
     * $query->filterByTimestamp(array('min' => 12)); // WHERE timestamp > 12
     * </code>
     *
     * @param     mixed $timestamp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function filterByTimestamp($timestamp = null, $comparison = null)
    {
        if (is_array($timestamp)) {
            $useMinMax = false;
            if (isset($timestamp['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_TIMESTAMP, $timestamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timestamp['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_TIMESTAMP, $timestamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesArchiveTableMap::COL_TIMESTAMP, $timestamp, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzDrugsandservicesArchive $careTzDrugsandservicesArchive Object to remove from the list of results
     *
     * @return $this|ChildCareTzDrugsandservicesArchiveQuery The current query, for fluid interface
     */
    public function prune($careTzDrugsandservicesArchive = null)
    {
        if ($careTzDrugsandservicesArchive) {
            throw new LogicException('CareTzDrugsandservicesArchive object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_drugsandservices_archive table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesArchiveTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzDrugsandservicesArchiveTableMap::clearInstancePool();
            CareTzDrugsandservicesArchiveTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesArchiveTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzDrugsandservicesArchiveTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzDrugsandservicesArchiveTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzDrugsandservicesArchiveTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzDrugsandservicesArchiveQuery
