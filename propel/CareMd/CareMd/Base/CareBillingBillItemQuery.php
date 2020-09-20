<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareBillingBillItem as ChildCareBillingBillItem;
use CareMd\CareMd\CareBillingBillItemQuery as ChildCareBillingBillItemQuery;
use CareMd\CareMd\Map\CareBillingBillItemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_billing_bill_item' table.
 *
 *
 *
 * @method     ChildCareBillingBillItemQuery orderByBillItemId($order = Criteria::ASC) Order by the bill_item_id column
 * @method     ChildCareBillingBillItemQuery orderByBillItemEncounterNr($order = Criteria::ASC) Order by the bill_item_encounter_nr column
 * @method     ChildCareBillingBillItemQuery orderByBillItemCode($order = Criteria::ASC) Order by the bill_item_code column
 * @method     ChildCareBillingBillItemQuery orderByBillItemUnitCost($order = Criteria::ASC) Order by the bill_item_unit_cost column
 * @method     ChildCareBillingBillItemQuery orderByBillItemUnits($order = Criteria::ASC) Order by the bill_item_units column
 * @method     ChildCareBillingBillItemQuery orderByBillItemAmount($order = Criteria::ASC) Order by the bill_item_amount column
 * @method     ChildCareBillingBillItemQuery orderByBillItemDate($order = Criteria::ASC) Order by the bill_item_date column
 * @method     ChildCareBillingBillItemQuery orderByBillItemStatus($order = Criteria::ASC) Order by the bill_item_status column
 * @method     ChildCareBillingBillItemQuery orderByBillItemBillNo($order = Criteria::ASC) Order by the bill_item_bill_no column
 *
 * @method     ChildCareBillingBillItemQuery groupByBillItemId() Group by the bill_item_id column
 * @method     ChildCareBillingBillItemQuery groupByBillItemEncounterNr() Group by the bill_item_encounter_nr column
 * @method     ChildCareBillingBillItemQuery groupByBillItemCode() Group by the bill_item_code column
 * @method     ChildCareBillingBillItemQuery groupByBillItemUnitCost() Group by the bill_item_unit_cost column
 * @method     ChildCareBillingBillItemQuery groupByBillItemUnits() Group by the bill_item_units column
 * @method     ChildCareBillingBillItemQuery groupByBillItemAmount() Group by the bill_item_amount column
 * @method     ChildCareBillingBillItemQuery groupByBillItemDate() Group by the bill_item_date column
 * @method     ChildCareBillingBillItemQuery groupByBillItemStatus() Group by the bill_item_status column
 * @method     ChildCareBillingBillItemQuery groupByBillItemBillNo() Group by the bill_item_bill_no column
 *
 * @method     ChildCareBillingBillItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareBillingBillItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareBillingBillItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareBillingBillItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareBillingBillItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareBillingBillItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareBillingBillItem findOne(ConnectionInterface $con = null) Return the first ChildCareBillingBillItem matching the query
 * @method     ChildCareBillingBillItem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareBillingBillItem matching the query, or a new ChildCareBillingBillItem object populated from the query conditions when no match is found
 *
 * @method     ChildCareBillingBillItem findOneByBillItemId(int $bill_item_id) Return the first ChildCareBillingBillItem filtered by the bill_item_id column
 * @method     ChildCareBillingBillItem findOneByBillItemEncounterNr(int $bill_item_encounter_nr) Return the first ChildCareBillingBillItem filtered by the bill_item_encounter_nr column
 * @method     ChildCareBillingBillItem findOneByBillItemCode(string $bill_item_code) Return the first ChildCareBillingBillItem filtered by the bill_item_code column
 * @method     ChildCareBillingBillItem findOneByBillItemUnitCost(double $bill_item_unit_cost) Return the first ChildCareBillingBillItem filtered by the bill_item_unit_cost column
 * @method     ChildCareBillingBillItem findOneByBillItemUnits(int $bill_item_units) Return the first ChildCareBillingBillItem filtered by the bill_item_units column
 * @method     ChildCareBillingBillItem findOneByBillItemAmount(double $bill_item_amount) Return the first ChildCareBillingBillItem filtered by the bill_item_amount column
 * @method     ChildCareBillingBillItem findOneByBillItemDate(string $bill_item_date) Return the first ChildCareBillingBillItem filtered by the bill_item_date column
 * @method     ChildCareBillingBillItem findOneByBillItemStatus(string $bill_item_status) Return the first ChildCareBillingBillItem filtered by the bill_item_status column
 * @method     ChildCareBillingBillItem findOneByBillItemBillNo(int $bill_item_bill_no) Return the first ChildCareBillingBillItem filtered by the bill_item_bill_no column *

 * @method     ChildCareBillingBillItem requirePk($key, ConnectionInterface $con = null) Return the ChildCareBillingBillItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBillItem requireOne(ConnectionInterface $con = null) Return the first ChildCareBillingBillItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingBillItem requireOneByBillItemId(int $bill_item_id) Return the first ChildCareBillingBillItem filtered by the bill_item_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBillItem requireOneByBillItemEncounterNr(int $bill_item_encounter_nr) Return the first ChildCareBillingBillItem filtered by the bill_item_encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBillItem requireOneByBillItemCode(string $bill_item_code) Return the first ChildCareBillingBillItem filtered by the bill_item_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBillItem requireOneByBillItemUnitCost(double $bill_item_unit_cost) Return the first ChildCareBillingBillItem filtered by the bill_item_unit_cost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBillItem requireOneByBillItemUnits(int $bill_item_units) Return the first ChildCareBillingBillItem filtered by the bill_item_units column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBillItem requireOneByBillItemAmount(double $bill_item_amount) Return the first ChildCareBillingBillItem filtered by the bill_item_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBillItem requireOneByBillItemDate(string $bill_item_date) Return the first ChildCareBillingBillItem filtered by the bill_item_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBillItem requireOneByBillItemStatus(string $bill_item_status) Return the first ChildCareBillingBillItem filtered by the bill_item_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBillItem requireOneByBillItemBillNo(int $bill_item_bill_no) Return the first ChildCareBillingBillItem filtered by the bill_item_bill_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingBillItem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareBillingBillItem objects based on current ModelCriteria
 * @method     ChildCareBillingBillItem[]|ObjectCollection findByBillItemId(int $bill_item_id) Return ChildCareBillingBillItem objects filtered by the bill_item_id column
 * @method     ChildCareBillingBillItem[]|ObjectCollection findByBillItemEncounterNr(int $bill_item_encounter_nr) Return ChildCareBillingBillItem objects filtered by the bill_item_encounter_nr column
 * @method     ChildCareBillingBillItem[]|ObjectCollection findByBillItemCode(string $bill_item_code) Return ChildCareBillingBillItem objects filtered by the bill_item_code column
 * @method     ChildCareBillingBillItem[]|ObjectCollection findByBillItemUnitCost(double $bill_item_unit_cost) Return ChildCareBillingBillItem objects filtered by the bill_item_unit_cost column
 * @method     ChildCareBillingBillItem[]|ObjectCollection findByBillItemUnits(int $bill_item_units) Return ChildCareBillingBillItem objects filtered by the bill_item_units column
 * @method     ChildCareBillingBillItem[]|ObjectCollection findByBillItemAmount(double $bill_item_amount) Return ChildCareBillingBillItem objects filtered by the bill_item_amount column
 * @method     ChildCareBillingBillItem[]|ObjectCollection findByBillItemDate(string $bill_item_date) Return ChildCareBillingBillItem objects filtered by the bill_item_date column
 * @method     ChildCareBillingBillItem[]|ObjectCollection findByBillItemStatus(string $bill_item_status) Return ChildCareBillingBillItem objects filtered by the bill_item_status column
 * @method     ChildCareBillingBillItem[]|ObjectCollection findByBillItemBillNo(int $bill_item_bill_no) Return ChildCareBillingBillItem objects filtered by the bill_item_bill_no column
 * @method     ChildCareBillingBillItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareBillingBillItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareBillingBillItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareBillingBillItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareBillingBillItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareBillingBillItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareBillingBillItemQuery) {
            return $criteria;
        }
        $query = new ChildCareBillingBillItemQuery();
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
     * @return ChildCareBillingBillItem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareBillingBillItemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareBillingBillItemTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareBillingBillItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT bill_item_id, bill_item_encounter_nr, bill_item_code, bill_item_unit_cost, bill_item_units, bill_item_amount, bill_item_date, bill_item_status, bill_item_bill_no FROM care_billing_bill_item WHERE bill_item_id = :p0';
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
            /** @var ChildCareBillingBillItem $obj */
            $obj = new ChildCareBillingBillItem();
            $obj->hydrate($row);
            CareBillingBillItemTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareBillingBillItem|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the bill_item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByBillItemId(1234); // WHERE bill_item_id = 1234
     * $query->filterByBillItemId(array(12, 34)); // WHERE bill_item_id IN (12, 34)
     * $query->filterByBillItemId(array('min' => 12)); // WHERE bill_item_id > 12
     * </code>
     *
     * @param     mixed $billItemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByBillItemId($billItemId = null, $comparison = null)
    {
        if (is_array($billItemId)) {
            $useMinMax = false;
            if (isset($billItemId['min'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_ID, $billItemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billItemId['max'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_ID, $billItemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_ID, $billItemId, $comparison);
    }

    /**
     * Filter the query on the bill_item_encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByBillItemEncounterNr(1234); // WHERE bill_item_encounter_nr = 1234
     * $query->filterByBillItemEncounterNr(array(12, 34)); // WHERE bill_item_encounter_nr IN (12, 34)
     * $query->filterByBillItemEncounterNr(array('min' => 12)); // WHERE bill_item_encounter_nr > 12
     * </code>
     *
     * @param     mixed $billItemEncounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByBillItemEncounterNr($billItemEncounterNr = null, $comparison = null)
    {
        if (is_array($billItemEncounterNr)) {
            $useMinMax = false;
            if (isset($billItemEncounterNr['min'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_ENCOUNTER_NR, $billItemEncounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billItemEncounterNr['max'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_ENCOUNTER_NR, $billItemEncounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_ENCOUNTER_NR, $billItemEncounterNr, $comparison);
    }

    /**
     * Filter the query on the bill_item_code column
     *
     * Example usage:
     * <code>
     * $query->filterByBillItemCode('fooValue');   // WHERE bill_item_code = 'fooValue'
     * $query->filterByBillItemCode('%fooValue%', Criteria::LIKE); // WHERE bill_item_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billItemCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByBillItemCode($billItemCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billItemCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_CODE, $billItemCode, $comparison);
    }

    /**
     * Filter the query on the bill_item_unit_cost column
     *
     * Example usage:
     * <code>
     * $query->filterByBillItemUnitCost(1234); // WHERE bill_item_unit_cost = 1234
     * $query->filterByBillItemUnitCost(array(12, 34)); // WHERE bill_item_unit_cost IN (12, 34)
     * $query->filterByBillItemUnitCost(array('min' => 12)); // WHERE bill_item_unit_cost > 12
     * </code>
     *
     * @param     mixed $billItemUnitCost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByBillItemUnitCost($billItemUnitCost = null, $comparison = null)
    {
        if (is_array($billItemUnitCost)) {
            $useMinMax = false;
            if (isset($billItemUnitCost['min'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_UNIT_COST, $billItemUnitCost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billItemUnitCost['max'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_UNIT_COST, $billItemUnitCost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_UNIT_COST, $billItemUnitCost, $comparison);
    }

    /**
     * Filter the query on the bill_item_units column
     *
     * Example usage:
     * <code>
     * $query->filterByBillItemUnits(1234); // WHERE bill_item_units = 1234
     * $query->filterByBillItemUnits(array(12, 34)); // WHERE bill_item_units IN (12, 34)
     * $query->filterByBillItemUnits(array('min' => 12)); // WHERE bill_item_units > 12
     * </code>
     *
     * @param     mixed $billItemUnits The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByBillItemUnits($billItemUnits = null, $comparison = null)
    {
        if (is_array($billItemUnits)) {
            $useMinMax = false;
            if (isset($billItemUnits['min'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_UNITS, $billItemUnits['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billItemUnits['max'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_UNITS, $billItemUnits['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_UNITS, $billItemUnits, $comparison);
    }

    /**
     * Filter the query on the bill_item_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBillItemAmount(1234); // WHERE bill_item_amount = 1234
     * $query->filterByBillItemAmount(array(12, 34)); // WHERE bill_item_amount IN (12, 34)
     * $query->filterByBillItemAmount(array('min' => 12)); // WHERE bill_item_amount > 12
     * </code>
     *
     * @param     mixed $billItemAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByBillItemAmount($billItemAmount = null, $comparison = null)
    {
        if (is_array($billItemAmount)) {
            $useMinMax = false;
            if (isset($billItemAmount['min'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_AMOUNT, $billItemAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billItemAmount['max'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_AMOUNT, $billItemAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_AMOUNT, $billItemAmount, $comparison);
    }

    /**
     * Filter the query on the bill_item_date column
     *
     * Example usage:
     * <code>
     * $query->filterByBillItemDate('2011-03-14'); // WHERE bill_item_date = '2011-03-14'
     * $query->filterByBillItemDate('now'); // WHERE bill_item_date = '2011-03-14'
     * $query->filterByBillItemDate(array('max' => 'yesterday')); // WHERE bill_item_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $billItemDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByBillItemDate($billItemDate = null, $comparison = null)
    {
        if (is_array($billItemDate)) {
            $useMinMax = false;
            if (isset($billItemDate['min'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_DATE, $billItemDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billItemDate['max'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_DATE, $billItemDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_DATE, $billItemDate, $comparison);
    }

    /**
     * Filter the query on the bill_item_status column
     *
     * Example usage:
     * <code>
     * $query->filterByBillItemStatus('fooValue');   // WHERE bill_item_status = 'fooValue'
     * $query->filterByBillItemStatus('%fooValue%', Criteria::LIKE); // WHERE bill_item_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billItemStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByBillItemStatus($billItemStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billItemStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_STATUS, $billItemStatus, $comparison);
    }

    /**
     * Filter the query on the bill_item_bill_no column
     *
     * Example usage:
     * <code>
     * $query->filterByBillItemBillNo(1234); // WHERE bill_item_bill_no = 1234
     * $query->filterByBillItemBillNo(array(12, 34)); // WHERE bill_item_bill_no IN (12, 34)
     * $query->filterByBillItemBillNo(array('min' => 12)); // WHERE bill_item_bill_no > 12
     * </code>
     *
     * @param     mixed $billItemBillNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function filterByBillItemBillNo($billItemBillNo = null, $comparison = null)
    {
        if (is_array($billItemBillNo)) {
            $useMinMax = false;
            if (isset($billItemBillNo['min'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_BILL_NO, $billItemBillNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billItemBillNo['max'])) {
                $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_BILL_NO, $billItemBillNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_BILL_NO, $billItemBillNo, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareBillingBillItem $careBillingBillItem Object to remove from the list of results
     *
     * @return $this|ChildCareBillingBillItemQuery The current query, for fluid interface
     */
    public function prune($careBillingBillItem = null)
    {
        if ($careBillingBillItem) {
            $this->addUsingAlias(CareBillingBillItemTableMap::COL_BILL_ITEM_ID, $careBillingBillItem->getBillItemId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_billing_bill_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingBillItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareBillingBillItemTableMap::clearInstancePool();
            CareBillingBillItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingBillItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareBillingBillItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareBillingBillItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareBillingBillItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareBillingBillItemQuery
