<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzStockTransfer as ChildCareTzStockTransfer;
use CareMd\CareMd\CareTzStockTransferQuery as ChildCareTzStockTransferQuery;
use CareMd\CareMd\Map\CareTzStockTransferTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_stock_transfer' table.
 *
 *
 *
 * @method     ChildCareTzStockTransferQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildCareTzStockTransferQuery orderByDrugsandservicesId($order = Criteria::ASC) Order by the Drugsandservices_id column
 * @method     ChildCareTzStockTransferQuery orderByAmount($order = Criteria::ASC) Order by the Amount column
 * @method     ChildCareTzStockTransferQuery orderByTransferFrom($order = Criteria::ASC) Order by the Transfer_from column
 * @method     ChildCareTzStockTransferQuery orderByTransferTo($order = Criteria::ASC) Order by the Transfer_to column
 * @method     ChildCareTzStockTransferQuery orderByTimestampStarted($order = Criteria::ASC) Order by the Timestamp_started column
 * @method     ChildCareTzStockTransferQuery orderByTimestampFinished($order = Criteria::ASC) Order by the Timestamp_finished column
 * @method     ChildCareTzStockTransferQuery orderByCancelFlag($order = Criteria::ASC) Order by the Cancel_flag column
 *
 * @method     ChildCareTzStockTransferQuery groupById() Group by the ID column
 * @method     ChildCareTzStockTransferQuery groupByDrugsandservicesId() Group by the Drugsandservices_id column
 * @method     ChildCareTzStockTransferQuery groupByAmount() Group by the Amount column
 * @method     ChildCareTzStockTransferQuery groupByTransferFrom() Group by the Transfer_from column
 * @method     ChildCareTzStockTransferQuery groupByTransferTo() Group by the Transfer_to column
 * @method     ChildCareTzStockTransferQuery groupByTimestampStarted() Group by the Timestamp_started column
 * @method     ChildCareTzStockTransferQuery groupByTimestampFinished() Group by the Timestamp_finished column
 * @method     ChildCareTzStockTransferQuery groupByCancelFlag() Group by the Cancel_flag column
 *
 * @method     ChildCareTzStockTransferQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzStockTransferQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzStockTransferQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzStockTransferQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzStockTransferQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzStockTransferQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzStockTransfer findOne(ConnectionInterface $con = null) Return the first ChildCareTzStockTransfer matching the query
 * @method     ChildCareTzStockTransfer findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzStockTransfer matching the query, or a new ChildCareTzStockTransfer object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzStockTransfer findOneById(string $ID) Return the first ChildCareTzStockTransfer filtered by the ID column
 * @method     ChildCareTzStockTransfer findOneByDrugsandservicesId(string $Drugsandservices_id) Return the first ChildCareTzStockTransfer filtered by the Drugsandservices_id column
 * @method     ChildCareTzStockTransfer findOneByAmount(string $Amount) Return the first ChildCareTzStockTransfer filtered by the Amount column
 * @method     ChildCareTzStockTransfer findOneByTransferFrom(string $Transfer_from) Return the first ChildCareTzStockTransfer filtered by the Transfer_from column
 * @method     ChildCareTzStockTransfer findOneByTransferTo(string $Transfer_to) Return the first ChildCareTzStockTransfer filtered by the Transfer_to column
 * @method     ChildCareTzStockTransfer findOneByTimestampStarted(string $Timestamp_started) Return the first ChildCareTzStockTransfer filtered by the Timestamp_started column
 * @method     ChildCareTzStockTransfer findOneByTimestampFinished(string $Timestamp_finished) Return the first ChildCareTzStockTransfer filtered by the Timestamp_finished column
 * @method     ChildCareTzStockTransfer findOneByCancelFlag(int $Cancel_flag) Return the first ChildCareTzStockTransfer filtered by the Cancel_flag column *

 * @method     ChildCareTzStockTransfer requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzStockTransfer by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockTransfer requireOne(ConnectionInterface $con = null) Return the first ChildCareTzStockTransfer matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzStockTransfer requireOneById(string $ID) Return the first ChildCareTzStockTransfer filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockTransfer requireOneByDrugsandservicesId(string $Drugsandservices_id) Return the first ChildCareTzStockTransfer filtered by the Drugsandservices_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockTransfer requireOneByAmount(string $Amount) Return the first ChildCareTzStockTransfer filtered by the Amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockTransfer requireOneByTransferFrom(string $Transfer_from) Return the first ChildCareTzStockTransfer filtered by the Transfer_from column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockTransfer requireOneByTransferTo(string $Transfer_to) Return the first ChildCareTzStockTransfer filtered by the Transfer_to column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockTransfer requireOneByTimestampStarted(string $Timestamp_started) Return the first ChildCareTzStockTransfer filtered by the Timestamp_started column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockTransfer requireOneByTimestampFinished(string $Timestamp_finished) Return the first ChildCareTzStockTransfer filtered by the Timestamp_finished column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzStockTransfer requireOneByCancelFlag(int $Cancel_flag) Return the first ChildCareTzStockTransfer filtered by the Cancel_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzStockTransfer[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzStockTransfer objects based on current ModelCriteria
 * @method     ChildCareTzStockTransfer[]|ObjectCollection findById(string $ID) Return ChildCareTzStockTransfer objects filtered by the ID column
 * @method     ChildCareTzStockTransfer[]|ObjectCollection findByDrugsandservicesId(string $Drugsandservices_id) Return ChildCareTzStockTransfer objects filtered by the Drugsandservices_id column
 * @method     ChildCareTzStockTransfer[]|ObjectCollection findByAmount(string $Amount) Return ChildCareTzStockTransfer objects filtered by the Amount column
 * @method     ChildCareTzStockTransfer[]|ObjectCollection findByTransferFrom(string $Transfer_from) Return ChildCareTzStockTransfer objects filtered by the Transfer_from column
 * @method     ChildCareTzStockTransfer[]|ObjectCollection findByTransferTo(string $Transfer_to) Return ChildCareTzStockTransfer objects filtered by the Transfer_to column
 * @method     ChildCareTzStockTransfer[]|ObjectCollection findByTimestampStarted(string $Timestamp_started) Return ChildCareTzStockTransfer objects filtered by the Timestamp_started column
 * @method     ChildCareTzStockTransfer[]|ObjectCollection findByTimestampFinished(string $Timestamp_finished) Return ChildCareTzStockTransfer objects filtered by the Timestamp_finished column
 * @method     ChildCareTzStockTransfer[]|ObjectCollection findByCancelFlag(int $Cancel_flag) Return ChildCareTzStockTransfer objects filtered by the Cancel_flag column
 * @method     ChildCareTzStockTransfer[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzStockTransferQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzStockTransferQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzStockTransfer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzStockTransferQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzStockTransferQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzStockTransferQuery) {
            return $criteria;
        }
        $query = new ChildCareTzStockTransferQuery();
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
     * @return ChildCareTzStockTransfer|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzStockTransferTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzStockTransferTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzStockTransfer A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, Drugsandservices_id, Amount, Transfer_from, Transfer_to, Timestamp_started, Timestamp_finished, Cancel_flag FROM care_tz_stock_transfer WHERE ID = :p0';
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
            /** @var ChildCareTzStockTransfer $obj */
            $obj = new ChildCareTzStockTransfer();
            $obj->hydrate($row);
            CareTzStockTransferTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzStockTransfer|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzStockTransferTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzStockTransferTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockTransferTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function filterByDrugsandservicesId($drugsandservicesId = null, $comparison = null)
    {
        if (is_array($drugsandservicesId)) {
            $useMinMax = false;
            if (isset($drugsandservicesId['min'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_DRUGSANDSERVICES_ID, $drugsandservicesId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($drugsandservicesId['max'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_DRUGSANDSERVICES_ID, $drugsandservicesId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockTransferTableMap::COL_DRUGSANDSERVICES_ID, $drugsandservicesId, $comparison);
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
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function filterByAmount($amount = null, $comparison = null)
    {
        if (is_array($amount)) {
            $useMinMax = false;
            if (isset($amount['min'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amount['max'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockTransferTableMap::COL_AMOUNT, $amount, $comparison);
    }

    /**
     * Filter the query on the Transfer_from column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferFrom(1234); // WHERE Transfer_from = 1234
     * $query->filterByTransferFrom(array(12, 34)); // WHERE Transfer_from IN (12, 34)
     * $query->filterByTransferFrom(array('min' => 12)); // WHERE Transfer_from > 12
     * </code>
     *
     * @param     mixed $transferFrom The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function filterByTransferFrom($transferFrom = null, $comparison = null)
    {
        if (is_array($transferFrom)) {
            $useMinMax = false;
            if (isset($transferFrom['min'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_TRANSFER_FROM, $transferFrom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transferFrom['max'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_TRANSFER_FROM, $transferFrom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockTransferTableMap::COL_TRANSFER_FROM, $transferFrom, $comparison);
    }

    /**
     * Filter the query on the Transfer_to column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferTo(1234); // WHERE Transfer_to = 1234
     * $query->filterByTransferTo(array(12, 34)); // WHERE Transfer_to IN (12, 34)
     * $query->filterByTransferTo(array('min' => 12)); // WHERE Transfer_to > 12
     * </code>
     *
     * @param     mixed $transferTo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function filterByTransferTo($transferTo = null, $comparison = null)
    {
        if (is_array($transferTo)) {
            $useMinMax = false;
            if (isset($transferTo['min'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_TRANSFER_TO, $transferTo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transferTo['max'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_TRANSFER_TO, $transferTo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockTransferTableMap::COL_TRANSFER_TO, $transferTo, $comparison);
    }

    /**
     * Filter the query on the Timestamp_started column
     *
     * Example usage:
     * <code>
     * $query->filterByTimestampStarted(1234); // WHERE Timestamp_started = 1234
     * $query->filterByTimestampStarted(array(12, 34)); // WHERE Timestamp_started IN (12, 34)
     * $query->filterByTimestampStarted(array('min' => 12)); // WHERE Timestamp_started > 12
     * </code>
     *
     * @param     mixed $timestampStarted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function filterByTimestampStarted($timestampStarted = null, $comparison = null)
    {
        if (is_array($timestampStarted)) {
            $useMinMax = false;
            if (isset($timestampStarted['min'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_TIMESTAMP_STARTED, $timestampStarted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timestampStarted['max'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_TIMESTAMP_STARTED, $timestampStarted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockTransferTableMap::COL_TIMESTAMP_STARTED, $timestampStarted, $comparison);
    }

    /**
     * Filter the query on the Timestamp_finished column
     *
     * Example usage:
     * <code>
     * $query->filterByTimestampFinished(1234); // WHERE Timestamp_finished = 1234
     * $query->filterByTimestampFinished(array(12, 34)); // WHERE Timestamp_finished IN (12, 34)
     * $query->filterByTimestampFinished(array('min' => 12)); // WHERE Timestamp_finished > 12
     * </code>
     *
     * @param     mixed $timestampFinished The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function filterByTimestampFinished($timestampFinished = null, $comparison = null)
    {
        if (is_array($timestampFinished)) {
            $useMinMax = false;
            if (isset($timestampFinished['min'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_TIMESTAMP_FINISHED, $timestampFinished['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timestampFinished['max'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_TIMESTAMP_FINISHED, $timestampFinished['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockTransferTableMap::COL_TIMESTAMP_FINISHED, $timestampFinished, $comparison);
    }

    /**
     * Filter the query on the Cancel_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByCancelFlag(1234); // WHERE Cancel_flag = 1234
     * $query->filterByCancelFlag(array(12, 34)); // WHERE Cancel_flag IN (12, 34)
     * $query->filterByCancelFlag(array('min' => 12)); // WHERE Cancel_flag > 12
     * </code>
     *
     * @param     mixed $cancelFlag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function filterByCancelFlag($cancelFlag = null, $comparison = null)
    {
        if (is_array($cancelFlag)) {
            $useMinMax = false;
            if (isset($cancelFlag['min'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_CANCEL_FLAG, $cancelFlag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cancelFlag['max'])) {
                $this->addUsingAlias(CareTzStockTransferTableMap::COL_CANCEL_FLAG, $cancelFlag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzStockTransferTableMap::COL_CANCEL_FLAG, $cancelFlag, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzStockTransfer $careTzStockTransfer Object to remove from the list of results
     *
     * @return $this|ChildCareTzStockTransferQuery The current query, for fluid interface
     */
    public function prune($careTzStockTransfer = null)
    {
        if ($careTzStockTransfer) {
            $this->addUsingAlias(CareTzStockTransferTableMap::COL_ID, $careTzStockTransfer->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_stock_transfer table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockTransferTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzStockTransferTableMap::clearInstancePool();
            CareTzStockTransferTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockTransferTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzStockTransferTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzStockTransferTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzStockTransferTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzStockTransferQuery
