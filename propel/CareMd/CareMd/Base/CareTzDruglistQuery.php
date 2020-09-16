<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzDruglist as ChildCareTzDruglist;
use CareMd\CareMd\CareTzDruglistQuery as ChildCareTzDruglistQuery;
use CareMd\CareMd\Map\CareTzDruglistTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_druglist' table.
 *
 *
 *
 * @method     ChildCareTzDruglistQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ChildCareTzDruglistQuery orderByItemNumber($order = Criteria::ASC) Order by the item_number column
 * @method     ChildCareTzDruglistQuery orderByIsPediatric($order = Criteria::ASC) Order by the is_pediatric column
 * @method     ChildCareTzDruglistQuery orderByIsAdult($order = Criteria::ASC) Order by the is_adult column
 * @method     ChildCareTzDruglistQuery orderByIsOther($order = Criteria::ASC) Order by the is_other column
 * @method     ChildCareTzDruglistQuery orderByIsConsumable($order = Criteria::ASC) Order by the is_consumable column
 * @method     ChildCareTzDruglistQuery orderByMemsItemCode($order = Criteria::ASC) Order by the mems_item_code column
 * @method     ChildCareTzDruglistQuery orderByMemsItemDescription($order = Criteria::ASC) Order by the mems_item_description column
 * @method     ChildCareTzDruglistQuery orderByMemsPackSize($order = Criteria::ASC) Order by the mems_pack_size column
 * @method     ChildCareTzDruglistQuery orderByMemsPricePerPackSize($order = Criteria::ASC) Order by the mems_price_per_pack_size column
 * @method     ChildCareTzDruglistQuery orderByMemsSizes($order = Criteria::ASC) Order by the mems_sizes column
 * @method     ChildCareTzDruglistQuery orderByItemDescription($order = Criteria::ASC) Order by the item_description column
 * @method     ChildCareTzDruglistQuery orderByItemFullDescription($order = Criteria::ASC) Order by the item_full_description column
 * @method     ChildCareTzDruglistQuery orderByDosage($order = Criteria::ASC) Order by the dosage column
 * @method     ChildCareTzDruglistQuery orderByUnitPrice($order = Criteria::ASC) Order by the unit_price column
 * @method     ChildCareTzDruglistQuery orderByPurchasingClass($order = Criteria::ASC) Order by the purchasing_class column
 *
 * @method     ChildCareTzDruglistQuery groupByItemId() Group by the item_id column
 * @method     ChildCareTzDruglistQuery groupByItemNumber() Group by the item_number column
 * @method     ChildCareTzDruglistQuery groupByIsPediatric() Group by the is_pediatric column
 * @method     ChildCareTzDruglistQuery groupByIsAdult() Group by the is_adult column
 * @method     ChildCareTzDruglistQuery groupByIsOther() Group by the is_other column
 * @method     ChildCareTzDruglistQuery groupByIsConsumable() Group by the is_consumable column
 * @method     ChildCareTzDruglistQuery groupByMemsItemCode() Group by the mems_item_code column
 * @method     ChildCareTzDruglistQuery groupByMemsItemDescription() Group by the mems_item_description column
 * @method     ChildCareTzDruglistQuery groupByMemsPackSize() Group by the mems_pack_size column
 * @method     ChildCareTzDruglistQuery groupByMemsPricePerPackSize() Group by the mems_price_per_pack_size column
 * @method     ChildCareTzDruglistQuery groupByMemsSizes() Group by the mems_sizes column
 * @method     ChildCareTzDruglistQuery groupByItemDescription() Group by the item_description column
 * @method     ChildCareTzDruglistQuery groupByItemFullDescription() Group by the item_full_description column
 * @method     ChildCareTzDruglistQuery groupByDosage() Group by the dosage column
 * @method     ChildCareTzDruglistQuery groupByUnitPrice() Group by the unit_price column
 * @method     ChildCareTzDruglistQuery groupByPurchasingClass() Group by the purchasing_class column
 *
 * @method     ChildCareTzDruglistQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzDruglistQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzDruglistQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzDruglistQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzDruglistQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzDruglistQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzDruglist findOne(ConnectionInterface $con = null) Return the first ChildCareTzDruglist matching the query
 * @method     ChildCareTzDruglist findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzDruglist matching the query, or a new ChildCareTzDruglist object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzDruglist findOneByItemId(string $item_id) Return the first ChildCareTzDruglist filtered by the item_id column
 * @method     ChildCareTzDruglist findOneByItemNumber(string $item_number) Return the first ChildCareTzDruglist filtered by the item_number column
 * @method     ChildCareTzDruglist findOneByIsPediatric(int $is_pediatric) Return the first ChildCareTzDruglist filtered by the is_pediatric column
 * @method     ChildCareTzDruglist findOneByIsAdult(int $is_adult) Return the first ChildCareTzDruglist filtered by the is_adult column
 * @method     ChildCareTzDruglist findOneByIsOther(int $is_other) Return the first ChildCareTzDruglist filtered by the is_other column
 * @method     ChildCareTzDruglist findOneByIsConsumable(int $is_consumable) Return the first ChildCareTzDruglist filtered by the is_consumable column
 * @method     ChildCareTzDruglist findOneByMemsItemCode(string $mems_item_code) Return the first ChildCareTzDruglist filtered by the mems_item_code column
 * @method     ChildCareTzDruglist findOneByMemsItemDescription(string $mems_item_description) Return the first ChildCareTzDruglist filtered by the mems_item_description column
 * @method     ChildCareTzDruglist findOneByMemsPackSize(string $mems_pack_size) Return the first ChildCareTzDruglist filtered by the mems_pack_size column
 * @method     ChildCareTzDruglist findOneByMemsPricePerPackSize(double $mems_price_per_pack_size) Return the first ChildCareTzDruglist filtered by the mems_price_per_pack_size column
 * @method     ChildCareTzDruglist findOneByMemsSizes(string $mems_sizes) Return the first ChildCareTzDruglist filtered by the mems_sizes column
 * @method     ChildCareTzDruglist findOneByItemDescription(string $item_description) Return the first ChildCareTzDruglist filtered by the item_description column
 * @method     ChildCareTzDruglist findOneByItemFullDescription(string $item_full_description) Return the first ChildCareTzDruglist filtered by the item_full_description column
 * @method     ChildCareTzDruglist findOneByDosage(string $dosage) Return the first ChildCareTzDruglist filtered by the dosage column
 * @method     ChildCareTzDruglist findOneByUnitPrice(string $unit_price) Return the first ChildCareTzDruglist filtered by the unit_price column
 * @method     ChildCareTzDruglist findOneByPurchasingClass(string $purchasing_class) Return the first ChildCareTzDruglist filtered by the purchasing_class column *

 * @method     ChildCareTzDruglist requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzDruglist by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOne(ConnectionInterface $con = null) Return the first ChildCareTzDruglist matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDruglist requireOneByItemId(string $item_id) Return the first ChildCareTzDruglist filtered by the item_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByItemNumber(string $item_number) Return the first ChildCareTzDruglist filtered by the item_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByIsPediatric(int $is_pediatric) Return the first ChildCareTzDruglist filtered by the is_pediatric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByIsAdult(int $is_adult) Return the first ChildCareTzDruglist filtered by the is_adult column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByIsOther(int $is_other) Return the first ChildCareTzDruglist filtered by the is_other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByIsConsumable(int $is_consumable) Return the first ChildCareTzDruglist filtered by the is_consumable column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByMemsItemCode(string $mems_item_code) Return the first ChildCareTzDruglist filtered by the mems_item_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByMemsItemDescription(string $mems_item_description) Return the first ChildCareTzDruglist filtered by the mems_item_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByMemsPackSize(string $mems_pack_size) Return the first ChildCareTzDruglist filtered by the mems_pack_size column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByMemsPricePerPackSize(double $mems_price_per_pack_size) Return the first ChildCareTzDruglist filtered by the mems_price_per_pack_size column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByMemsSizes(string $mems_sizes) Return the first ChildCareTzDruglist filtered by the mems_sizes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByItemDescription(string $item_description) Return the first ChildCareTzDruglist filtered by the item_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByItemFullDescription(string $item_full_description) Return the first ChildCareTzDruglist filtered by the item_full_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByDosage(string $dosage) Return the first ChildCareTzDruglist filtered by the dosage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByUnitPrice(string $unit_price) Return the first ChildCareTzDruglist filtered by the unit_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDruglist requireOneByPurchasingClass(string $purchasing_class) Return the first ChildCareTzDruglist filtered by the purchasing_class column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDruglist[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzDruglist objects based on current ModelCriteria
 * @method     ChildCareTzDruglist[]|ObjectCollection findByItemId(string $item_id) Return ChildCareTzDruglist objects filtered by the item_id column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByItemNumber(string $item_number) Return ChildCareTzDruglist objects filtered by the item_number column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByIsPediatric(int $is_pediatric) Return ChildCareTzDruglist objects filtered by the is_pediatric column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByIsAdult(int $is_adult) Return ChildCareTzDruglist objects filtered by the is_adult column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByIsOther(int $is_other) Return ChildCareTzDruglist objects filtered by the is_other column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByIsConsumable(int $is_consumable) Return ChildCareTzDruglist objects filtered by the is_consumable column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByMemsItemCode(string $mems_item_code) Return ChildCareTzDruglist objects filtered by the mems_item_code column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByMemsItemDescription(string $mems_item_description) Return ChildCareTzDruglist objects filtered by the mems_item_description column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByMemsPackSize(string $mems_pack_size) Return ChildCareTzDruglist objects filtered by the mems_pack_size column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByMemsPricePerPackSize(double $mems_price_per_pack_size) Return ChildCareTzDruglist objects filtered by the mems_price_per_pack_size column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByMemsSizes(string $mems_sizes) Return ChildCareTzDruglist objects filtered by the mems_sizes column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByItemDescription(string $item_description) Return ChildCareTzDruglist objects filtered by the item_description column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByItemFullDescription(string $item_full_description) Return ChildCareTzDruglist objects filtered by the item_full_description column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByDosage(string $dosage) Return ChildCareTzDruglist objects filtered by the dosage column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByUnitPrice(string $unit_price) Return ChildCareTzDruglist objects filtered by the unit_price column
 * @method     ChildCareTzDruglist[]|ObjectCollection findByPurchasingClass(string $purchasing_class) Return ChildCareTzDruglist objects filtered by the purchasing_class column
 * @method     ChildCareTzDruglist[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzDruglistQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzDruglistQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzDruglist', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzDruglistQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzDruglistQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzDruglistQuery) {
            return $criteria;
        }
        $query = new ChildCareTzDruglistQuery();
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
     * @return ChildCareTzDruglist|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzDruglistTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzDruglistTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzDruglist A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT item_id, item_number, is_pediatric, is_adult, is_other, is_consumable, mems_item_code, mems_item_description, mems_pack_size, mems_price_per_pack_size, mems_sizes, item_description, item_full_description, dosage, unit_price, purchasing_class FROM care_tz_druglist WHERE item_id = :p0';
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
            /** @var ChildCareTzDruglist $obj */
            $obj = new ChildCareTzDruglist();
            $obj->hydrate($row);
            CareTzDruglistTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzDruglist|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_ITEM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_ITEM_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (is_array($itemId)) {
            $useMinMax = false;
            if (isset($itemId['min'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemId['max'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_ITEM_ID, $itemId, $comparison);
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByItemNumber($itemNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_ITEM_NUMBER, $itemNumber, $comparison);
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByIsPediatric($isPediatric = null, $comparison = null)
    {
        if (is_array($isPediatric)) {
            $useMinMax = false;
            if (isset($isPediatric['min'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_PEDIATRIC, $isPediatric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isPediatric['max'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_PEDIATRIC, $isPediatric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_PEDIATRIC, $isPediatric, $comparison);
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByIsAdult($isAdult = null, $comparison = null)
    {
        if (is_array($isAdult)) {
            $useMinMax = false;
            if (isset($isAdult['min'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_ADULT, $isAdult['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isAdult['max'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_ADULT, $isAdult['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_ADULT, $isAdult, $comparison);
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByIsOther($isOther = null, $comparison = null)
    {
        if (is_array($isOther)) {
            $useMinMax = false;
            if (isset($isOther['min'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_OTHER, $isOther['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isOther['max'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_OTHER, $isOther['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_OTHER, $isOther, $comparison);
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByIsConsumable($isConsumable = null, $comparison = null)
    {
        if (is_array($isConsumable)) {
            $useMinMax = false;
            if (isset($isConsumable['min'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_CONSUMABLE, $isConsumable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isConsumable['max'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_CONSUMABLE, $isConsumable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_IS_CONSUMABLE, $isConsumable, $comparison);
    }

    /**
     * Filter the query on the mems_item_code column
     *
     * Example usage:
     * <code>
     * $query->filterByMemsItemCode('fooValue');   // WHERE mems_item_code = 'fooValue'
     * $query->filterByMemsItemCode('%fooValue%', Criteria::LIKE); // WHERE mems_item_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memsItemCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByMemsItemCode($memsItemCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memsItemCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_MEMS_ITEM_CODE, $memsItemCode, $comparison);
    }

    /**
     * Filter the query on the mems_item_description column
     *
     * Example usage:
     * <code>
     * $query->filterByMemsItemDescription('fooValue');   // WHERE mems_item_description = 'fooValue'
     * $query->filterByMemsItemDescription('%fooValue%', Criteria::LIKE); // WHERE mems_item_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memsItemDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByMemsItemDescription($memsItemDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memsItemDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_MEMS_ITEM_DESCRIPTION, $memsItemDescription, $comparison);
    }

    /**
     * Filter the query on the mems_pack_size column
     *
     * Example usage:
     * <code>
     * $query->filterByMemsPackSize('fooValue');   // WHERE mems_pack_size = 'fooValue'
     * $query->filterByMemsPackSize('%fooValue%', Criteria::LIKE); // WHERE mems_pack_size LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memsPackSize The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByMemsPackSize($memsPackSize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memsPackSize)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_MEMS_PACK_SIZE, $memsPackSize, $comparison);
    }

    /**
     * Filter the query on the mems_price_per_pack_size column
     *
     * Example usage:
     * <code>
     * $query->filterByMemsPricePerPackSize(1234); // WHERE mems_price_per_pack_size = 1234
     * $query->filterByMemsPricePerPackSize(array(12, 34)); // WHERE mems_price_per_pack_size IN (12, 34)
     * $query->filterByMemsPricePerPackSize(array('min' => 12)); // WHERE mems_price_per_pack_size > 12
     * </code>
     *
     * @param     mixed $memsPricePerPackSize The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByMemsPricePerPackSize($memsPricePerPackSize = null, $comparison = null)
    {
        if (is_array($memsPricePerPackSize)) {
            $useMinMax = false;
            if (isset($memsPricePerPackSize['min'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_MEMS_PRICE_PER_PACK_SIZE, $memsPricePerPackSize['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($memsPricePerPackSize['max'])) {
                $this->addUsingAlias(CareTzDruglistTableMap::COL_MEMS_PRICE_PER_PACK_SIZE, $memsPricePerPackSize['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_MEMS_PRICE_PER_PACK_SIZE, $memsPricePerPackSize, $comparison);
    }

    /**
     * Filter the query on the mems_sizes column
     *
     * Example usage:
     * <code>
     * $query->filterByMemsSizes('fooValue');   // WHERE mems_sizes = 'fooValue'
     * $query->filterByMemsSizes('%fooValue%', Criteria::LIKE); // WHERE mems_sizes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memsSizes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByMemsSizes($memsSizes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memsSizes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_MEMS_SIZES, $memsSizes, $comparison);
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByItemDescription($itemDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_ITEM_DESCRIPTION, $itemDescription, $comparison);
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByItemFullDescription($itemFullDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemFullDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_ITEM_FULL_DESCRIPTION, $itemFullDescription, $comparison);
    }

    /**
     * Filter the query on the dosage column
     *
     * Example usage:
     * <code>
     * $query->filterByDosage('fooValue');   // WHERE dosage = 'fooValue'
     * $query->filterByDosage('%fooValue%', Criteria::LIKE); // WHERE dosage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dosage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByDosage($dosage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dosage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_DOSAGE, $dosage, $comparison);
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByUnitPrice($unitPrice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitPrice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_UNIT_PRICE, $unitPrice, $comparison);
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
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function filterByPurchasingClass($purchasingClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($purchasingClass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDruglistTableMap::COL_PURCHASING_CLASS, $purchasingClass, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzDruglist $careTzDruglist Object to remove from the list of results
     *
     * @return $this|ChildCareTzDruglistQuery The current query, for fluid interface
     */
    public function prune($careTzDruglist = null)
    {
        if ($careTzDruglist) {
            $this->addUsingAlias(CareTzDruglistTableMap::COL_ITEM_ID, $careTzDruglist->getItemId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_druglist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDruglistTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzDruglistTableMap::clearInstancePool();
            CareTzDruglistTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDruglistTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzDruglistTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzDruglistTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzDruglistTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzDruglistQuery
