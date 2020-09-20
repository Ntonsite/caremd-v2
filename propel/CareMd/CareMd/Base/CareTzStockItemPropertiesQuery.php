<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzStockItemProperties as ChildCareTzStockItemProperties;
use CareMd\CareMd\CareTzStockItemPropertiesQuery as ChildCareTzStockItemPropertiesQuery;
use CareMd\CareMd\Map\CareTzStockItemPropertiesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_stock_item_properties' table.
 *
 *
 *
 * @method     ChildCareTzStockItemPropertiesQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildCareTzStockItemPropertiesQuery orderByDrugsandservicesId($order = Criteria::ASC) Order by the Drugsandservices_id column
 * @method     ChildCareTzStockItemPropertiesQuery orderByItemDescription($order = Criteria::ASC) Order by the item_description column
 * @method     ChildCareTzStockItemPropertiesQuery orderByUnitofissue($order = Criteria::ASC) Order by the UnitOfIssue column
 * @method     ChildCareTzStockItemPropertiesQuery orderByAlternatives($order = Criteria::ASC) Order by the Alternatives column
 * @method     ChildCareTzStockItemPropertiesQuery orderByMaximumlevel($order = Criteria::ASC) Order by the Maximumlevel column
 * @method     ChildCareTzStockItemPropertiesQuery orderByReorderlevel($order = Criteria::ASC) Order by the Reorderlevel column
 * @method     ChildCareTzStockItemPropertiesQuery orderByMinimumlevel($order = Criteria::ASC) Order by the Minimumlevel column
 * @method     ChildCareTzStockItemPropertiesQuery orderByOrderquantity($order = Criteria::ASC) Order by the Orderquantity column
 * @method     ChildCareTzStockItemPropertiesQuery orderByIsDisabled($order = Criteria::ASC) Order by the is_disabled column
 *
 * @method     ChildCareTzStockItemPropertiesQuery groupById() Group by the ID column
 * @method     ChildCareTzStockItemPropertiesQuery groupByDrugsandservicesId() Group by the Drugsandservices_id column
 * @method     ChildCareTzStockItemPropertiesQuery groupByItemDescription() Group by the item_description column
 * @method     ChildCareTzStockItemPropertiesQuery groupByUnitofissue() Group by the UnitOfIssue column
 * @method     ChildCareTzStockItemPropertiesQuery groupByAlternatives() Group by the Alternatives column
 * @method     ChildCareTzStockItemPropertiesQuery groupByMaximumlevel() Group by the Maximumlevel column
 * @method     ChildCareTzStockItemPropertiesQuery groupByReorderlevel() Group by the Reorderlevel column
 * @method     ChildCareTzStockItemPropertiesQuery groupByMinimumlevel() Group by the Minimumlevel column
 * @method     ChildCareTzStockItemPropertiesQuery groupByOrderquantity() Group by the Orderquantity column
 * @method     ChildCareTzStockItemPropertiesQuery groupByIsDisabled() Group by the is_disabled column
 *
 * @method     ChildCareTzStockItemPropertiesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzStockItemPropertiesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzStockItemPropertiesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzStockItemPropertiesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzStockItemPropertiesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzStockItemPropertiesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzStockItemProperties findOne(ConnectionInterface $con = null) Return the first ChildCareTzStockItemProperties matching the query
 * @method     ChildCareTzStockItemProperties findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzStockItemProperties matching the query, or a new ChildCareTzStockItemProperties object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzStockItemProperties findOneById(string $ID) Return the first ChildCareTzStockItemProperties filtered by the ID column
 * @method     ChildCareTzStockItemProperties findOneByDrugsandservicesId(string $Drugsandservices_id) Return the first ChildCareTzStockItemProperties filtered by the Drugsandservices_id column
 * @method     ChildCareTzStockItemProperties findOneByItemDescription(string $item_description) Return the first ChildCareTzStockItemProperties filtered by the item_description column
 * @method     ChildCareTzStockItemProperties findOneByUnitofissue(string $UnitOfIssue) Return the first ChildCareTzStockItemProperties filtered by the UnitOfIssue column
 * @method     ChildCareTzStockItemProperties findOneByAlternatives(string $Alternatives) Return the first ChildCareTzStockItemProperties filtered by the Alternatives column
 * @method     ChildCareTzStockItemProperties findOneByMaximumlevel(string $Maximumlevel) Return the first ChildCareTzStockItemProperties filtered by the Maximumlevel column
 * @method     ChildCareTzStockItemProperties findOneByReorderlevel(string $Reorderlevel) Return the first ChildCareTzStockItemProperties filtered by the Reorderlevel column
 * @method     ChildCareTzStockItemProperties findOneByMinimumlevel(string $Minimumlevel) Return the first ChildCareTzStockItemProperties filtered by the Minimumlevel column
 * @method     ChildCareTzStockItemProperties findOneByOrderquantity(string $Orderquantity) Return the first ChildCareTzStockItemProperties filtered by the Orderquantity column
 * @method     ChildCareTzStockItemProperties findOneByIsDisabled(int $is_disabled) Return the first ChildCareTzStockItemProperties filtered by the is_disabled column *

 * @method     ChildCareTzStockItemProperties requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzStockItemProperties by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemProperties requireOne(ConnectionInterface $con = null) Return the first ChildCareTzStockItemProperties matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzStockItemProperties requireOneById(string $ID) Return the first ChildCareTzStockItemProperties filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemProperties requireOneByDrugsandservicesId(string $Drugsandservices_id) Return the first ChildCareTzStockItemProperties filtered by the Drugsandservices_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemProperties requireOneByItemDescription(string $item_description) Return the first ChildCareTzStockItemProperties filtered by the item_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemProperties requireOneByUnitofissue(string $UnitOfIssue) Return the first ChildCareTzStockItemProperties filtered by the UnitOfIssue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemProperties requireOneByAlternatives(string $Alternatives) Return the first ChildCareTzStockItemProperties filtered by the Alternatives column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemProperties requireOneByMaximumlevel(string $Maximumlevel) Return the first ChildCareTzStockItemProperties filtered by the Maximumlevel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemProperties requireOneByReorderlevel(string $Reorderlevel) Return the first ChildCareTzStockItemProperties filtered by the Reorderlevel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemProperties requireOneByMinimumlevel(string $Minimumlevel) Return the first ChildCareTzStockItemProperties filtered by the Minimumlevel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemProperties requireOneByOrderquantity(string $Orderquantity) Return the first ChildCareTzStockItemProperties filtered by the Orderquantity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockItemProperties requireOneByIsDisabled(int $is_disabled) Return the first ChildCareTzStockItemProperties filtered by the is_disabled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzStockItemProperties objects based on current ModelCriteria
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection findById(string $ID) Return ChildCareTzStockItemProperties objects filtered by the ID column
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection findByDrugsandservicesId(string $Drugsandservices_id) Return ChildCareTzStockItemProperties objects filtered by the Drugsandservices_id column
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection findByItemDescription(string $item_description) Return ChildCareTzStockItemProperties objects filtered by the item_description column
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection findByUnitofissue(string $UnitOfIssue) Return ChildCareTzStockItemProperties objects filtered by the UnitOfIssue column
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection findByAlternatives(string $Alternatives) Return ChildCareTzStockItemProperties objects filtered by the Alternatives column
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection findByMaximumlevel(string $Maximumlevel) Return ChildCareTzStockItemProperties objects filtered by the Maximumlevel column
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection findByReorderlevel(string $Reorderlevel) Return ChildCareTzStockItemProperties objects filtered by the Reorderlevel column
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection findByMinimumlevel(string $Minimumlevel) Return ChildCareTzStockItemProperties objects filtered by the Minimumlevel column
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection findByOrderquantity(string $Orderquantity) Return ChildCareTzStockItemProperties objects filtered by the Orderquantity column
 * @method     ChildCareTzStockItemProperties[]|ObjectCollection findByIsDisabled(int $is_disabled) Return ChildCareTzStockItemProperties objects filtered by the is_disabled column
 * @method     ChildCareTzStockItemProperties[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzStockItemPropertiesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzStockItemPropertiesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzStockItemProperties', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzStockItemPropertiesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzStockItemPropertiesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzStockItemPropertiesQuery) {
            return $criteria;
        }
        $query = new ChildCareTzStockItemPropertiesQuery();
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
     * @return ChildCareTzStockItemProperties|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzStockItemPropertiesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzStockItemPropertiesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzStockItemProperties A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, Drugsandservices_id, item_description, UnitOfIssue, Alternatives, Maximumlevel, Reorderlevel, Minimumlevel, Orderquantity, is_disabled FROM care_tz_stock_item_properties WHERE ID = :p0';
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
            /** @var ChildCareTzStockItemProperties $obj */
            $obj = new ChildCareTzStockItemProperties();
            $obj->hydrate($row);
            CareTzStockItemPropertiesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzStockItemProperties|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the Drugsandservices_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDrugsandservicesId('fooValue');   // WHERE Drugsandservices_id = 'fooValue'
     * $query->filterByDrugsandservicesId('%fooValue%', Criteria::LIKE); // WHERE Drugsandservices_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $drugsandservicesId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByDrugsandservicesId($drugsandservicesId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($drugsandservicesId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_DRUGSANDSERVICES_ID, $drugsandservicesId, $comparison);
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
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByItemDescription($itemDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ITEM_DESCRIPTION, $itemDescription, $comparison);
    }

    /**
     * Filter the query on the UnitOfIssue column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitofissue('fooValue');   // WHERE UnitOfIssue = 'fooValue'
     * $query->filterByUnitofissue('%fooValue%', Criteria::LIKE); // WHERE UnitOfIssue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitofissue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByUnitofissue($unitofissue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitofissue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_UNITOFISSUE, $unitofissue, $comparison);
    }

    /**
     * Filter the query on the Alternatives column
     *
     * Example usage:
     * <code>
     * $query->filterByAlternatives('fooValue');   // WHERE Alternatives = 'fooValue'
     * $query->filterByAlternatives('%fooValue%', Criteria::LIKE); // WHERE Alternatives LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alternatives The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByAlternatives($alternatives = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alternatives)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ALTERNATIVES, $alternatives, $comparison);
    }

    /**
     * Filter the query on the Maximumlevel column
     *
     * Example usage:
     * <code>
     * $query->filterByMaximumlevel(1234); // WHERE Maximumlevel = 1234
     * $query->filterByMaximumlevel(array(12, 34)); // WHERE Maximumlevel IN (12, 34)
     * $query->filterByMaximumlevel(array('min' => 12)); // WHERE Maximumlevel > 12
     * </code>
     *
     * @param     mixed $maximumlevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByMaximumlevel($maximumlevel = null, $comparison = null)
    {
        if (is_array($maximumlevel)) {
            $useMinMax = false;
            if (isset($maximumlevel['min'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_MAXIMUMLEVEL, $maximumlevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maximumlevel['max'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_MAXIMUMLEVEL, $maximumlevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_MAXIMUMLEVEL, $maximumlevel, $comparison);
    }

    /**
     * Filter the query on the Reorderlevel column
     *
     * Example usage:
     * <code>
     * $query->filterByReorderlevel(1234); // WHERE Reorderlevel = 1234
     * $query->filterByReorderlevel(array(12, 34)); // WHERE Reorderlevel IN (12, 34)
     * $query->filterByReorderlevel(array('min' => 12)); // WHERE Reorderlevel > 12
     * </code>
     *
     * @param     mixed $reorderlevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByReorderlevel($reorderlevel = null, $comparison = null)
    {
        if (is_array($reorderlevel)) {
            $useMinMax = false;
            if (isset($reorderlevel['min'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_REORDERLEVEL, $reorderlevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reorderlevel['max'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_REORDERLEVEL, $reorderlevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_REORDERLEVEL, $reorderlevel, $comparison);
    }

    /**
     * Filter the query on the Minimumlevel column
     *
     * Example usage:
     * <code>
     * $query->filterByMinimumlevel(1234); // WHERE Minimumlevel = 1234
     * $query->filterByMinimumlevel(array(12, 34)); // WHERE Minimumlevel IN (12, 34)
     * $query->filterByMinimumlevel(array('min' => 12)); // WHERE Minimumlevel > 12
     * </code>
     *
     * @param     mixed $minimumlevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByMinimumlevel($minimumlevel = null, $comparison = null)
    {
        if (is_array($minimumlevel)) {
            $useMinMax = false;
            if (isset($minimumlevel['min'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_MINIMUMLEVEL, $minimumlevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minimumlevel['max'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_MINIMUMLEVEL, $minimumlevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_MINIMUMLEVEL, $minimumlevel, $comparison);
    }

    /**
     * Filter the query on the Orderquantity column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderquantity(1234); // WHERE Orderquantity = 1234
     * $query->filterByOrderquantity(array(12, 34)); // WHERE Orderquantity IN (12, 34)
     * $query->filterByOrderquantity(array('min' => 12)); // WHERE Orderquantity > 12
     * </code>
     *
     * @param     mixed $orderquantity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByOrderquantity($orderquantity = null, $comparison = null)
    {
        if (is_array($orderquantity)) {
            $useMinMax = false;
            if (isset($orderquantity['min'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ORDERQUANTITY, $orderquantity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderquantity['max'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ORDERQUANTITY, $orderquantity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ORDERQUANTITY, $orderquantity, $comparison);
    }

    /**
     * Filter the query on the is_disabled column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDisabled(1234); // WHERE is_disabled = 1234
     * $query->filterByIsDisabled(array(12, 34)); // WHERE is_disabled IN (12, 34)
     * $query->filterByIsDisabled(array('min' => 12)); // WHERE is_disabled > 12
     * </code>
     *
     * @param     mixed $isDisabled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function filterByIsDisabled($isDisabled = null, $comparison = null)
    {
        if (is_array($isDisabled)) {
            $useMinMax = false;
            if (isset($isDisabled['min'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_IS_DISABLED, $isDisabled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isDisabled['max'])) {
                $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_IS_DISABLED, $isDisabled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_IS_DISABLED, $isDisabled, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzStockItemProperties $careTzStockItemProperties Object to remove from the list of results
     *
     * @return $this|ChildCareTzStockItemPropertiesQuery The current query, for fluid interface
     */
    public function prune($careTzStockItemProperties = null)
    {
        if ($careTzStockItemProperties) {
            $this->addUsingAlias(CareTzStockItemPropertiesTableMap::COL_ID, $careTzStockItemProperties->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_stock_item_properties table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockItemPropertiesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzStockItemPropertiesTableMap::clearInstancePool();
            CareTzStockItemPropertiesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockItemPropertiesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzStockItemPropertiesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzStockItemPropertiesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzStockItemPropertiesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzStockItemPropertiesQuery
