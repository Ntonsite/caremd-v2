<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzDrugsandservicesUpdate as ChildCareTzDrugsandservicesUpdate;
use CareMd\CareMd\CareTzDrugsandservicesUpdateQuery as ChildCareTzDrugsandservicesUpdateQuery;
use CareMd\CareMd\Map\CareTzDrugsandservicesUpdateTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_drugsandservices_update' table.
 *
 *
 *
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByItemNumber($order = Criteria::ASC) Order by the item_number column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByPartcode($order = Criteria::ASC) Order by the partcode column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByIsPediatric($order = Criteria::ASC) Order by the is_pediatric column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByIsAdult($order = Criteria::ASC) Order by the is_adult column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByIsOther($order = Criteria::ASC) Order by the is_other column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByIsConsumable($order = Criteria::ASC) Order by the is_consumable column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByIsLabtest($order = Criteria::ASC) Order by the is_labtest column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByItemDescription($order = Criteria::ASC) Order by the item_description column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByItemFullDescription($order = Criteria::ASC) Order by the item_full_description column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByUnitPrice($order = Criteria::ASC) Order by the unit_price column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByUnitPrice1($order = Criteria::ASC) Order by the unit_price_1 column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByUnitPrice2($order = Criteria::ASC) Order by the unit_price_2 column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByUnitPrice3($order = Criteria::ASC) Order by the unit_price_3 column
 * @method     ChildCareTzDrugsandservicesUpdateQuery orderByPurchasingClass($order = Criteria::ASC) Order by the purchasing_class column
 *
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByItemId() Group by the item_id column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByItemNumber() Group by the item_number column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByPartcode() Group by the partcode column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByIsPediatric() Group by the is_pediatric column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByIsAdult() Group by the is_adult column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByIsOther() Group by the is_other column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByIsConsumable() Group by the is_consumable column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByIsLabtest() Group by the is_labtest column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByItemDescription() Group by the item_description column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByItemFullDescription() Group by the item_full_description column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByUnitPrice() Group by the unit_price column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByUnitPrice1() Group by the unit_price_1 column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByUnitPrice2() Group by the unit_price_2 column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByUnitPrice3() Group by the unit_price_3 column
 * @method     ChildCareTzDrugsandservicesUpdateQuery groupByPurchasingClass() Group by the purchasing_class column
 *
 * @method     ChildCareTzDrugsandservicesUpdateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzDrugsandservicesUpdateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzDrugsandservicesUpdateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzDrugsandservicesUpdateQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzDrugsandservicesUpdateQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzDrugsandservicesUpdateQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzDrugsandservicesUpdate findOne(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservicesUpdate matching the query
 * @method     ChildCareTzDrugsandservicesUpdate findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservicesUpdate matching the query, or a new ChildCareTzDrugsandservicesUpdate object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzDrugsandservicesUpdate findOneByItemId(string $item_id) Return the first ChildCareTzDrugsandservicesUpdate filtered by the item_id column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByItemNumber(string $item_number) Return the first ChildCareTzDrugsandservicesUpdate filtered by the item_number column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByPartcode(string $partcode) Return the first ChildCareTzDrugsandservicesUpdate filtered by the partcode column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByIsPediatric(int $is_pediatric) Return the first ChildCareTzDrugsandservicesUpdate filtered by the is_pediatric column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByIsAdult(int $is_adult) Return the first ChildCareTzDrugsandservicesUpdate filtered by the is_adult column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByIsOther(int $is_other) Return the first ChildCareTzDrugsandservicesUpdate filtered by the is_other column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByIsConsumable(int $is_consumable) Return the first ChildCareTzDrugsandservicesUpdate filtered by the is_consumable column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByIsLabtest(int $is_labtest) Return the first ChildCareTzDrugsandservicesUpdate filtered by the is_labtest column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByItemDescription(string $item_description) Return the first ChildCareTzDrugsandservicesUpdate filtered by the item_description column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByItemFullDescription(string $item_full_description) Return the first ChildCareTzDrugsandservicesUpdate filtered by the item_full_description column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByUnitPrice(string $unit_price) Return the first ChildCareTzDrugsandservicesUpdate filtered by the unit_price column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByUnitPrice1(string $unit_price_1) Return the first ChildCareTzDrugsandservicesUpdate filtered by the unit_price_1 column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByUnitPrice2(string $unit_price_2) Return the first ChildCareTzDrugsandservicesUpdate filtered by the unit_price_2 column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByUnitPrice3(string $unit_price_3) Return the first ChildCareTzDrugsandservicesUpdate filtered by the unit_price_3 column
 * @method     ChildCareTzDrugsandservicesUpdate findOneByPurchasingClass(string $purchasing_class) Return the first ChildCareTzDrugsandservicesUpdate filtered by the purchasing_class column *

 * @method     ChildCareTzDrugsandservicesUpdate requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzDrugsandservicesUpdate by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOne(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservicesUpdate matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByItemId(string $item_id) Return the first ChildCareTzDrugsandservicesUpdate filtered by the item_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByItemNumber(string $item_number) Return the first ChildCareTzDrugsandservicesUpdate filtered by the item_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByPartcode(string $partcode) Return the first ChildCareTzDrugsandservicesUpdate filtered by the partcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByIsPediatric(int $is_pediatric) Return the first ChildCareTzDrugsandservicesUpdate filtered by the is_pediatric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByIsAdult(int $is_adult) Return the first ChildCareTzDrugsandservicesUpdate filtered by the is_adult column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByIsOther(int $is_other) Return the first ChildCareTzDrugsandservicesUpdate filtered by the is_other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByIsConsumable(int $is_consumable) Return the first ChildCareTzDrugsandservicesUpdate filtered by the is_consumable column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByIsLabtest(int $is_labtest) Return the first ChildCareTzDrugsandservicesUpdate filtered by the is_labtest column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByItemDescription(string $item_description) Return the first ChildCareTzDrugsandservicesUpdate filtered by the item_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByItemFullDescription(string $item_full_description) Return the first ChildCareTzDrugsandservicesUpdate filtered by the item_full_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByUnitPrice(string $unit_price) Return the first ChildCareTzDrugsandservicesUpdate filtered by the unit_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByUnitPrice1(string $unit_price_1) Return the first ChildCareTzDrugsandservicesUpdate filtered by the unit_price_1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByUnitPrice2(string $unit_price_2) Return the first ChildCareTzDrugsandservicesUpdate filtered by the unit_price_2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByUnitPrice3(string $unit_price_3) Return the first ChildCareTzDrugsandservicesUpdate filtered by the unit_price_3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesUpdate requireOneByPurchasingClass(string $purchasing_class) Return the first ChildCareTzDrugsandservicesUpdate filtered by the purchasing_class column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzDrugsandservicesUpdate objects based on current ModelCriteria
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByItemId(string $item_id) Return ChildCareTzDrugsandservicesUpdate objects filtered by the item_id column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByItemNumber(string $item_number) Return ChildCareTzDrugsandservicesUpdate objects filtered by the item_number column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByPartcode(string $partcode) Return ChildCareTzDrugsandservicesUpdate objects filtered by the partcode column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByIsPediatric(int $is_pediatric) Return ChildCareTzDrugsandservicesUpdate objects filtered by the is_pediatric column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByIsAdult(int $is_adult) Return ChildCareTzDrugsandservicesUpdate objects filtered by the is_adult column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByIsOther(int $is_other) Return ChildCareTzDrugsandservicesUpdate objects filtered by the is_other column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByIsConsumable(int $is_consumable) Return ChildCareTzDrugsandservicesUpdate objects filtered by the is_consumable column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByIsLabtest(int $is_labtest) Return ChildCareTzDrugsandservicesUpdate objects filtered by the is_labtest column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByItemDescription(string $item_description) Return ChildCareTzDrugsandservicesUpdate objects filtered by the item_description column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByItemFullDescription(string $item_full_description) Return ChildCareTzDrugsandservicesUpdate objects filtered by the item_full_description column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByUnitPrice(string $unit_price) Return ChildCareTzDrugsandservicesUpdate objects filtered by the unit_price column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByUnitPrice1(string $unit_price_1) Return ChildCareTzDrugsandservicesUpdate objects filtered by the unit_price_1 column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByUnitPrice2(string $unit_price_2) Return ChildCareTzDrugsandservicesUpdate objects filtered by the unit_price_2 column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByUnitPrice3(string $unit_price_3) Return ChildCareTzDrugsandservicesUpdate objects filtered by the unit_price_3 column
 * @method     ChildCareTzDrugsandservicesUpdate[]|ObjectCollection findByPurchasingClass(string $purchasing_class) Return ChildCareTzDrugsandservicesUpdate objects filtered by the purchasing_class column
 * @method     ChildCareTzDrugsandservicesUpdate[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzDrugsandservicesUpdateQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzDrugsandservicesUpdateQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzDrugsandservicesUpdate', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzDrugsandservicesUpdateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzDrugsandservicesUpdateQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzDrugsandservicesUpdateQuery) {
            return $criteria;
        }
        $query = new ChildCareTzDrugsandservicesUpdateQuery();
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
     * @return ChildCareTzDrugsandservicesUpdate|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzDrugsandservicesUpdateTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzDrugsandservicesUpdateTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzDrugsandservicesUpdate A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT item_id, item_number, partcode, is_pediatric, is_adult, is_other, is_consumable, is_labtest, item_description, item_full_description, unit_price, unit_price_1, unit_price_2, unit_price_3, purchasing_class FROM care_tz_drugsandservices_update WHERE item_id = :p0';
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
            /** @var ChildCareTzDrugsandservicesUpdate $obj */
            $obj = new ChildCareTzDrugsandservicesUpdate();
            $obj->hydrate($row);
            CareTzDrugsandservicesUpdateTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzDrugsandservicesUpdate|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_ITEM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_ITEM_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (is_array($itemId)) {
            $useMinMax = false;
            if (isset($itemId['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemId['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_ITEM_ID, $itemId, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByItemNumber($itemNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_ITEM_NUMBER, $itemNumber, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByPartcode($partcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($partcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_PARTCODE, $partcode, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByIsPediatric($isPediatric = null, $comparison = null)
    {
        if (is_array($isPediatric)) {
            $useMinMax = false;
            if (isset($isPediatric['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_PEDIATRIC, $isPediatric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isPediatric['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_PEDIATRIC, $isPediatric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_PEDIATRIC, $isPediatric, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByIsAdult($isAdult = null, $comparison = null)
    {
        if (is_array($isAdult)) {
            $useMinMax = false;
            if (isset($isAdult['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_ADULT, $isAdult['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isAdult['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_ADULT, $isAdult['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_ADULT, $isAdult, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByIsOther($isOther = null, $comparison = null)
    {
        if (is_array($isOther)) {
            $useMinMax = false;
            if (isset($isOther['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_OTHER, $isOther['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isOther['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_OTHER, $isOther['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_OTHER, $isOther, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByIsConsumable($isConsumable = null, $comparison = null)
    {
        if (is_array($isConsumable)) {
            $useMinMax = false;
            if (isset($isConsumable['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_CONSUMABLE, $isConsumable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isConsumable['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_CONSUMABLE, $isConsumable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_CONSUMABLE, $isConsumable, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByIsLabtest($isLabtest = null, $comparison = null)
    {
        if (is_array($isLabtest)) {
            $useMinMax = false;
            if (isset($isLabtest['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_LABTEST, $isLabtest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isLabtest['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_LABTEST, $isLabtest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_IS_LABTEST, $isLabtest, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByItemDescription($itemDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_ITEM_DESCRIPTION, $itemDescription, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByItemFullDescription($itemFullDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemFullDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_ITEM_FULL_DESCRIPTION, $itemFullDescription, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByUnitPrice($unitPrice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitPrice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_UNIT_PRICE, $unitPrice, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByUnitPrice1($unitPrice1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitPrice1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_UNIT_PRICE_1, $unitPrice1, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByUnitPrice2($unitPrice2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitPrice2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_UNIT_PRICE_2, $unitPrice2, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByUnitPrice3($unitPrice3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitPrice3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_UNIT_PRICE_3, $unitPrice3, $comparison);
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
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function filterByPurchasingClass($purchasingClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($purchasingClass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_PURCHASING_CLASS, $purchasingClass, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzDrugsandservicesUpdate $careTzDrugsandservicesUpdate Object to remove from the list of results
     *
     * @return $this|ChildCareTzDrugsandservicesUpdateQuery The current query, for fluid interface
     */
    public function prune($careTzDrugsandservicesUpdate = null)
    {
        if ($careTzDrugsandservicesUpdate) {
            $this->addUsingAlias(CareTzDrugsandservicesUpdateTableMap::COL_ITEM_ID, $careTzDrugsandservicesUpdate->getItemId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_drugsandservices_update table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesUpdateTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzDrugsandservicesUpdateTableMap::clearInstancePool();
            CareTzDrugsandservicesUpdateTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesUpdateTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzDrugsandservicesUpdateTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzDrugsandservicesUpdateTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzDrugsandservicesUpdateTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzDrugsandservicesUpdateQuery
