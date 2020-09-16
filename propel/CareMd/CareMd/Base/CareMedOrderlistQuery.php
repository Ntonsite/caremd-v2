<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareMedOrderlist as ChildCareMedOrderlist;
use CareMd\CareMd\CareMedOrderlistQuery as ChildCareMedOrderlistQuery;
use CareMd\CareMd\Map\CareMedOrderlistTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_med_orderlist' table.
 *
 *
 *
 * @method     ChildCareMedOrderlistQuery orderByOrderNr($order = Criteria::ASC) Order by the order_nr column
 * @method     ChildCareMedOrderlistQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareMedOrderlistQuery orderByOrderDate($order = Criteria::ASC) Order by the order_date column
 * @method     ChildCareMedOrderlistQuery orderByOrderTime($order = Criteria::ASC) Order by the order_time column
 * @method     ChildCareMedOrderlistQuery orderByArticles($order = Criteria::ASC) Order by the articles column
 * @method     ChildCareMedOrderlistQuery orderByExtra1($order = Criteria::ASC) Order by the extra1 column
 * @method     ChildCareMedOrderlistQuery orderByExtra2($order = Criteria::ASC) Order by the extra2 column
 * @method     ChildCareMedOrderlistQuery orderByValidator($order = Criteria::ASC) Order by the validator column
 * @method     ChildCareMedOrderlistQuery orderByIpAddr($order = Criteria::ASC) Order by the ip_addr column
 * @method     ChildCareMedOrderlistQuery orderByPriority($order = Criteria::ASC) Order by the priority column
 * @method     ChildCareMedOrderlistQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareMedOrderlistQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareMedOrderlistQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareMedOrderlistQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareMedOrderlistQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareMedOrderlistQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareMedOrderlistQuery orderBySentDatetime($order = Criteria::ASC) Order by the sent_datetime column
 * @method     ChildCareMedOrderlistQuery orderByProcessDatetime($order = Criteria::ASC) Order by the process_datetime column
 *
 * @method     ChildCareMedOrderlistQuery groupByOrderNr() Group by the order_nr column
 * @method     ChildCareMedOrderlistQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareMedOrderlistQuery groupByOrderDate() Group by the order_date column
 * @method     ChildCareMedOrderlistQuery groupByOrderTime() Group by the order_time column
 * @method     ChildCareMedOrderlistQuery groupByArticles() Group by the articles column
 * @method     ChildCareMedOrderlistQuery groupByExtra1() Group by the extra1 column
 * @method     ChildCareMedOrderlistQuery groupByExtra2() Group by the extra2 column
 * @method     ChildCareMedOrderlistQuery groupByValidator() Group by the validator column
 * @method     ChildCareMedOrderlistQuery groupByIpAddr() Group by the ip_addr column
 * @method     ChildCareMedOrderlistQuery groupByPriority() Group by the priority column
 * @method     ChildCareMedOrderlistQuery groupByStatus() Group by the status column
 * @method     ChildCareMedOrderlistQuery groupByHistory() Group by the history column
 * @method     ChildCareMedOrderlistQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareMedOrderlistQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareMedOrderlistQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareMedOrderlistQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareMedOrderlistQuery groupBySentDatetime() Group by the sent_datetime column
 * @method     ChildCareMedOrderlistQuery groupByProcessDatetime() Group by the process_datetime column
 *
 * @method     ChildCareMedOrderlistQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareMedOrderlistQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareMedOrderlistQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareMedOrderlistQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareMedOrderlistQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareMedOrderlistQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareMedOrderlist findOne(ConnectionInterface $con = null) Return the first ChildCareMedOrderlist matching the query
 * @method     ChildCareMedOrderlist findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareMedOrderlist matching the query, or a new ChildCareMedOrderlist object populated from the query conditions when no match is found
 *
 * @method     ChildCareMedOrderlist findOneByOrderNr(int $order_nr) Return the first ChildCareMedOrderlist filtered by the order_nr column
 * @method     ChildCareMedOrderlist findOneByDeptNr(int $dept_nr) Return the first ChildCareMedOrderlist filtered by the dept_nr column
 * @method     ChildCareMedOrderlist findOneByOrderDate(string $order_date) Return the first ChildCareMedOrderlist filtered by the order_date column
 * @method     ChildCareMedOrderlist findOneByOrderTime(string $order_time) Return the first ChildCareMedOrderlist filtered by the order_time column
 * @method     ChildCareMedOrderlist findOneByArticles(string $articles) Return the first ChildCareMedOrderlist filtered by the articles column
 * @method     ChildCareMedOrderlist findOneByExtra1(string $extra1) Return the first ChildCareMedOrderlist filtered by the extra1 column
 * @method     ChildCareMedOrderlist findOneByExtra2(string $extra2) Return the first ChildCareMedOrderlist filtered by the extra2 column
 * @method     ChildCareMedOrderlist findOneByValidator(string $validator) Return the first ChildCareMedOrderlist filtered by the validator column
 * @method     ChildCareMedOrderlist findOneByIpAddr(string $ip_addr) Return the first ChildCareMedOrderlist filtered by the ip_addr column
 * @method     ChildCareMedOrderlist findOneByPriority(string $priority) Return the first ChildCareMedOrderlist filtered by the priority column
 * @method     ChildCareMedOrderlist findOneByStatus(string $status) Return the first ChildCareMedOrderlist filtered by the status column
 * @method     ChildCareMedOrderlist findOneByHistory(string $history) Return the first ChildCareMedOrderlist filtered by the history column
 * @method     ChildCareMedOrderlist findOneByModifyId(string $modify_id) Return the first ChildCareMedOrderlist filtered by the modify_id column
 * @method     ChildCareMedOrderlist findOneByModifyTime(string $modify_time) Return the first ChildCareMedOrderlist filtered by the modify_time column
 * @method     ChildCareMedOrderlist findOneByCreateId(string $create_id) Return the first ChildCareMedOrderlist filtered by the create_id column
 * @method     ChildCareMedOrderlist findOneByCreateTime(string $create_time) Return the first ChildCareMedOrderlist filtered by the create_time column
 * @method     ChildCareMedOrderlist findOneBySentDatetime(string $sent_datetime) Return the first ChildCareMedOrderlist filtered by the sent_datetime column
 * @method     ChildCareMedOrderlist findOneByProcessDatetime(string $process_datetime) Return the first ChildCareMedOrderlist filtered by the process_datetime column *

 * @method     ChildCareMedOrderlist requirePk($key, ConnectionInterface $con = null) Return the ChildCareMedOrderlist by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOne(ConnectionInterface $con = null) Return the first ChildCareMedOrderlist matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMedOrderlist requireOneByOrderNr(int $order_nr) Return the first ChildCareMedOrderlist filtered by the order_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByDeptNr(int $dept_nr) Return the first ChildCareMedOrderlist filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByOrderDate(string $order_date) Return the first ChildCareMedOrderlist filtered by the order_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByOrderTime(string $order_time) Return the first ChildCareMedOrderlist filtered by the order_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByArticles(string $articles) Return the first ChildCareMedOrderlist filtered by the articles column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByExtra1(string $extra1) Return the first ChildCareMedOrderlist filtered by the extra1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByExtra2(string $extra2) Return the first ChildCareMedOrderlist filtered by the extra2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByValidator(string $validator) Return the first ChildCareMedOrderlist filtered by the validator column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByIpAddr(string $ip_addr) Return the first ChildCareMedOrderlist filtered by the ip_addr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByPriority(string $priority) Return the first ChildCareMedOrderlist filtered by the priority column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByStatus(string $status) Return the first ChildCareMedOrderlist filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByHistory(string $history) Return the first ChildCareMedOrderlist filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByModifyId(string $modify_id) Return the first ChildCareMedOrderlist filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByModifyTime(string $modify_time) Return the first ChildCareMedOrderlist filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByCreateId(string $create_id) Return the first ChildCareMedOrderlist filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByCreateTime(string $create_time) Return the first ChildCareMedOrderlist filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneBySentDatetime(string $sent_datetime) Return the first ChildCareMedOrderlist filtered by the sent_datetime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrderlist requireOneByProcessDatetime(string $process_datetime) Return the first ChildCareMedOrderlist filtered by the process_datetime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMedOrderlist[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareMedOrderlist objects based on current ModelCriteria
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByOrderNr(int $order_nr) Return ChildCareMedOrderlist objects filtered by the order_nr column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareMedOrderlist objects filtered by the dept_nr column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByOrderDate(string $order_date) Return ChildCareMedOrderlist objects filtered by the order_date column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByOrderTime(string $order_time) Return ChildCareMedOrderlist objects filtered by the order_time column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByArticles(string $articles) Return ChildCareMedOrderlist objects filtered by the articles column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByExtra1(string $extra1) Return ChildCareMedOrderlist objects filtered by the extra1 column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByExtra2(string $extra2) Return ChildCareMedOrderlist objects filtered by the extra2 column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByValidator(string $validator) Return ChildCareMedOrderlist objects filtered by the validator column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByIpAddr(string $ip_addr) Return ChildCareMedOrderlist objects filtered by the ip_addr column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByPriority(string $priority) Return ChildCareMedOrderlist objects filtered by the priority column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByStatus(string $status) Return ChildCareMedOrderlist objects filtered by the status column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByHistory(string $history) Return ChildCareMedOrderlist objects filtered by the history column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareMedOrderlist objects filtered by the modify_id column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareMedOrderlist objects filtered by the modify_time column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareMedOrderlist objects filtered by the create_id column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareMedOrderlist objects filtered by the create_time column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findBySentDatetime(string $sent_datetime) Return ChildCareMedOrderlist objects filtered by the sent_datetime column
 * @method     ChildCareMedOrderlist[]|ObjectCollection findByProcessDatetime(string $process_datetime) Return ChildCareMedOrderlist objects filtered by the process_datetime column
 * @method     ChildCareMedOrderlist[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareMedOrderlistQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareMedOrderlistQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareMedOrderlist', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareMedOrderlistQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareMedOrderlistQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareMedOrderlistQuery) {
            return $criteria;
        }
        $query = new ChildCareMedOrderlistQuery();
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
     * @return ChildCareMedOrderlist|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareMedOrderlistTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareMedOrderlistTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareMedOrderlist A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT order_nr, dept_nr, order_date, order_time, articles, extra1, extra2, validator, ip_addr, priority, status, history, modify_id, modify_time, create_id, create_time, sent_datetime, process_datetime FROM care_med_orderlist WHERE order_nr = :p0';
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
            /** @var ChildCareMedOrderlist $obj */
            $obj = new ChildCareMedOrderlist();
            $obj->hydrate($row);
            CareMedOrderlistTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareMedOrderlist|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the order_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderNr(1234); // WHERE order_nr = 1234
     * $query->filterByOrderNr(array(12, 34)); // WHERE order_nr IN (12, 34)
     * $query->filterByOrderNr(array('min' => 12)); // WHERE order_nr > 12
     * </code>
     *
     * @param     mixed $orderNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByOrderNr($orderNr = null, $comparison = null)
    {
        if (is_array($orderNr)) {
            $useMinMax = false;
            if (isset($orderNr['min'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_NR, $orderNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderNr['max'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_NR, $orderNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_NR, $orderNr, $comparison);
    }

    /**
     * Filter the query on the dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptNr(1234); // WHERE dept_nr = 1234
     * $query->filterByDeptNr(array(12, 34)); // WHERE dept_nr IN (12, 34)
     * $query->filterByDeptNr(array('min' => 12)); // WHERE dept_nr > 12
     * </code>
     *
     * @param     mixed $deptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the order_date column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderDate('2011-03-14'); // WHERE order_date = '2011-03-14'
     * $query->filterByOrderDate('now'); // WHERE order_date = '2011-03-14'
     * $query->filterByOrderDate(array('max' => 'yesterday')); // WHERE order_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $orderDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByOrderDate($orderDate = null, $comparison = null)
    {
        if (is_array($orderDate)) {
            $useMinMax = false;
            if (isset($orderDate['min'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_DATE, $orderDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderDate['max'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_DATE, $orderDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_DATE, $orderDate, $comparison);
    }

    /**
     * Filter the query on the order_time column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderTime('2011-03-14'); // WHERE order_time = '2011-03-14'
     * $query->filterByOrderTime('now'); // WHERE order_time = '2011-03-14'
     * $query->filterByOrderTime(array('max' => 'yesterday')); // WHERE order_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $orderTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByOrderTime($orderTime = null, $comparison = null)
    {
        if (is_array($orderTime)) {
            $useMinMax = false;
            if (isset($orderTime['min'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_TIME, $orderTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderTime['max'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_TIME, $orderTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_TIME, $orderTime, $comparison);
    }

    /**
     * Filter the query on the articles column
     *
     * Example usage:
     * <code>
     * $query->filterByArticles('fooValue');   // WHERE articles = 'fooValue'
     * $query->filterByArticles('%fooValue%', Criteria::LIKE); // WHERE articles LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articles The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByArticles($articles = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articles)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_ARTICLES, $articles, $comparison);
    }

    /**
     * Filter the query on the extra1 column
     *
     * Example usage:
     * <code>
     * $query->filterByExtra1('fooValue');   // WHERE extra1 = 'fooValue'
     * $query->filterByExtra1('%fooValue%', Criteria::LIKE); // WHERE extra1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extra1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByExtra1($extra1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extra1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_EXTRA1, $extra1, $comparison);
    }

    /**
     * Filter the query on the extra2 column
     *
     * Example usage:
     * <code>
     * $query->filterByExtra2('fooValue');   // WHERE extra2 = 'fooValue'
     * $query->filterByExtra2('%fooValue%', Criteria::LIKE); // WHERE extra2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extra2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByExtra2($extra2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extra2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_EXTRA2, $extra2, $comparison);
    }

    /**
     * Filter the query on the validator column
     *
     * Example usage:
     * <code>
     * $query->filterByValidator('fooValue');   // WHERE validator = 'fooValue'
     * $query->filterByValidator('%fooValue%', Criteria::LIKE); // WHERE validator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validator The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByValidator($validator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validator)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_VALIDATOR, $validator, $comparison);
    }

    /**
     * Filter the query on the ip_addr column
     *
     * Example usage:
     * <code>
     * $query->filterByIpAddr('fooValue');   // WHERE ip_addr = 'fooValue'
     * $query->filterByIpAddr('%fooValue%', Criteria::LIKE); // WHERE ip_addr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ipAddr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByIpAddr($ipAddr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ipAddr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_IP_ADDR, $ipAddr, $comparison);
    }

    /**
     * Filter the query on the priority column
     *
     * Example usage:
     * <code>
     * $query->filterByPriority('fooValue');   // WHERE priority = 'fooValue'
     * $query->filterByPriority('%fooValue%', Criteria::LIKE); // WHERE priority LIKE '%fooValue%'
     * </code>
     *
     * @param     string $priority The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByPriority($priority = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($priority)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_PRIORITY, $priority, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%', Criteria::LIKE); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the history column
     *
     * Example usage:
     * <code>
     * $query->filterByHistory('fooValue');   // WHERE history = 'fooValue'
     * $query->filterByHistory('%fooValue%', Criteria::LIKE); // WHERE history LIKE '%fooValue%'
     * </code>
     *
     * @param     string $history The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Filter the query on the modify_id column
     *
     * Example usage:
     * <code>
     * $query->filterByModifyId('fooValue');   // WHERE modify_id = 'fooValue'
     * $query->filterByModifyId('%fooValue%', Criteria::LIKE); // WHERE modify_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifyId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_MODIFY_ID, $modifyId, $comparison);
    }

    /**
     * Filter the query on the modify_time column
     *
     * Example usage:
     * <code>
     * $query->filterByModifyTime('2011-03-14'); // WHERE modify_time = '2011-03-14'
     * $query->filterByModifyTime('now'); // WHERE modify_time = '2011-03-14'
     * $query->filterByModifyTime(array('max' => 'yesterday')); // WHERE modify_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $modifyTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
    }

    /**
     * Filter the query on the create_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateId('fooValue');   // WHERE create_id = 'fooValue'
     * $query->filterByCreateId('%fooValue%', Criteria::LIKE); // WHERE create_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $createId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_CREATE_ID, $createId, $comparison);
    }

    /**
     * Filter the query on the create_time column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateTime('2011-03-14'); // WHERE create_time = '2011-03-14'
     * $query->filterByCreateTime('now'); // WHERE create_time = '2011-03-14'
     * $query->filterByCreateTime(array('max' => 'yesterday')); // WHERE create_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $createTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Filter the query on the sent_datetime column
     *
     * Example usage:
     * <code>
     * $query->filterBySentDatetime('2011-03-14'); // WHERE sent_datetime = '2011-03-14'
     * $query->filterBySentDatetime('now'); // WHERE sent_datetime = '2011-03-14'
     * $query->filterBySentDatetime(array('max' => 'yesterday')); // WHERE sent_datetime > '2011-03-13'
     * </code>
     *
     * @param     mixed $sentDatetime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterBySentDatetime($sentDatetime = null, $comparison = null)
    {
        if (is_array($sentDatetime)) {
            $useMinMax = false;
            if (isset($sentDatetime['min'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_SENT_DATETIME, $sentDatetime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sentDatetime['max'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_SENT_DATETIME, $sentDatetime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_SENT_DATETIME, $sentDatetime, $comparison);
    }

    /**
     * Filter the query on the process_datetime column
     *
     * Example usage:
     * <code>
     * $query->filterByProcessDatetime('2011-03-14'); // WHERE process_datetime = '2011-03-14'
     * $query->filterByProcessDatetime('now'); // WHERE process_datetime = '2011-03-14'
     * $query->filterByProcessDatetime(array('max' => 'yesterday')); // WHERE process_datetime > '2011-03-13'
     * </code>
     *
     * @param     mixed $processDatetime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function filterByProcessDatetime($processDatetime = null, $comparison = null)
    {
        if (is_array($processDatetime)) {
            $useMinMax = false;
            if (isset($processDatetime['min'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_PROCESS_DATETIME, $processDatetime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processDatetime['max'])) {
                $this->addUsingAlias(CareMedOrderlistTableMap::COL_PROCESS_DATETIME, $processDatetime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrderlistTableMap::COL_PROCESS_DATETIME, $processDatetime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareMedOrderlist $careMedOrderlist Object to remove from the list of results
     *
     * @return $this|ChildCareMedOrderlistQuery The current query, for fluid interface
     */
    public function prune($careMedOrderlist = null)
    {
        if ($careMedOrderlist) {
            $this->addUsingAlias(CareMedOrderlistTableMap::COL_ORDER_NR, $careMedOrderlist->getOrderNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_med_orderlist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedOrderlistTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareMedOrderlistTableMap::clearInstancePool();
            CareMedOrderlistTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedOrderlistTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareMedOrderlistTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareMedOrderlistTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareMedOrderlistTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareMedOrderlistQuery
