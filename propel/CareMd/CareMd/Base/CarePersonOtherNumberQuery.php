<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CarePersonOtherNumber as ChildCarePersonOtherNumber;
use CareMd\CareMd\CarePersonOtherNumberQuery as ChildCarePersonOtherNumberQuery;
use CareMd\CareMd\Map\CarePersonOtherNumberTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_person_other_number' table.
 *
 *
 *
 * @method     ChildCarePersonOtherNumberQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCarePersonOtherNumberQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCarePersonOtherNumberQuery orderByOtherNr($order = Criteria::ASC) Order by the other_nr column
 * @method     ChildCarePersonOtherNumberQuery orderByOrg($order = Criteria::ASC) Order by the org column
 * @method     ChildCarePersonOtherNumberQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCarePersonOtherNumberQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCarePersonOtherNumberQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCarePersonOtherNumberQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCarePersonOtherNumberQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCarePersonOtherNumberQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCarePersonOtherNumberQuery groupByNr() Group by the nr column
 * @method     ChildCarePersonOtherNumberQuery groupByPid() Group by the pid column
 * @method     ChildCarePersonOtherNumberQuery groupByOtherNr() Group by the other_nr column
 * @method     ChildCarePersonOtherNumberQuery groupByOrg() Group by the org column
 * @method     ChildCarePersonOtherNumberQuery groupByStatus() Group by the status column
 * @method     ChildCarePersonOtherNumberQuery groupByHistory() Group by the history column
 * @method     ChildCarePersonOtherNumberQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCarePersonOtherNumberQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCarePersonOtherNumberQuery groupByCreateId() Group by the create_id column
 * @method     ChildCarePersonOtherNumberQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCarePersonOtherNumberQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCarePersonOtherNumberQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCarePersonOtherNumberQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCarePersonOtherNumberQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCarePersonOtherNumberQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCarePersonOtherNumberQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCarePersonOtherNumber findOne(ConnectionInterface $con = null) Return the first ChildCarePersonOtherNumber matching the query
 * @method     ChildCarePersonOtherNumber findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCarePersonOtherNumber matching the query, or a new ChildCarePersonOtherNumber object populated from the query conditions when no match is found
 *
 * @method     ChildCarePersonOtherNumber findOneByNr(int $nr) Return the first ChildCarePersonOtherNumber filtered by the nr column
 * @method     ChildCarePersonOtherNumber findOneByPid(int $pid) Return the first ChildCarePersonOtherNumber filtered by the pid column
 * @method     ChildCarePersonOtherNumber findOneByOtherNr(string $other_nr) Return the first ChildCarePersonOtherNumber filtered by the other_nr column
 * @method     ChildCarePersonOtherNumber findOneByOrg(string $org) Return the first ChildCarePersonOtherNumber filtered by the org column
 * @method     ChildCarePersonOtherNumber findOneByStatus(string $status) Return the first ChildCarePersonOtherNumber filtered by the status column
 * @method     ChildCarePersonOtherNumber findOneByHistory(string $history) Return the first ChildCarePersonOtherNumber filtered by the history column
 * @method     ChildCarePersonOtherNumber findOneByModifyId(string $modify_id) Return the first ChildCarePersonOtherNumber filtered by the modify_id column
 * @method     ChildCarePersonOtherNumber findOneByModifyTime(string $modify_time) Return the first ChildCarePersonOtherNumber filtered by the modify_time column
 * @method     ChildCarePersonOtherNumber findOneByCreateId(string $create_id) Return the first ChildCarePersonOtherNumber filtered by the create_id column
 * @method     ChildCarePersonOtherNumber findOneByCreateTime(string $create_time) Return the first ChildCarePersonOtherNumber filtered by the create_time column *

 * @method     ChildCarePersonOtherNumber requirePk($key, ConnectionInterface $con = null) Return the ChildCarePersonOtherNumber by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonOtherNumber requireOne(ConnectionInterface $con = null) Return the first ChildCarePersonOtherNumber matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePersonOtherNumber requireOneByNr(int $nr) Return the first ChildCarePersonOtherNumber filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonOtherNumber requireOneByPid(int $pid) Return the first ChildCarePersonOtherNumber filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonOtherNumber requireOneByOtherNr(string $other_nr) Return the first ChildCarePersonOtherNumber filtered by the other_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonOtherNumber requireOneByOrg(string $org) Return the first ChildCarePersonOtherNumber filtered by the org column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonOtherNumber requireOneByStatus(string $status) Return the first ChildCarePersonOtherNumber filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonOtherNumber requireOneByHistory(string $history) Return the first ChildCarePersonOtherNumber filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonOtherNumber requireOneByModifyId(string $modify_id) Return the first ChildCarePersonOtherNumber filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonOtherNumber requireOneByModifyTime(string $modify_time) Return the first ChildCarePersonOtherNumber filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonOtherNumber requireOneByCreateId(string $create_id) Return the first ChildCarePersonOtherNumber filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonOtherNumber requireOneByCreateTime(string $create_time) Return the first ChildCarePersonOtherNumber filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCarePersonOtherNumber objects based on current ModelCriteria
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection findByNr(int $nr) Return ChildCarePersonOtherNumber objects filtered by the nr column
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection findByPid(int $pid) Return ChildCarePersonOtherNumber objects filtered by the pid column
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection findByOtherNr(string $other_nr) Return ChildCarePersonOtherNumber objects filtered by the other_nr column
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection findByOrg(string $org) Return ChildCarePersonOtherNumber objects filtered by the org column
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection findByStatus(string $status) Return ChildCarePersonOtherNumber objects filtered by the status column
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection findByHistory(string $history) Return ChildCarePersonOtherNumber objects filtered by the history column
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCarePersonOtherNumber objects filtered by the modify_id column
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCarePersonOtherNumber objects filtered by the modify_time column
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection findByCreateId(string $create_id) Return ChildCarePersonOtherNumber objects filtered by the create_id column
 * @method     ChildCarePersonOtherNumber[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCarePersonOtherNumber objects filtered by the create_time column
 * @method     ChildCarePersonOtherNumber[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CarePersonOtherNumberQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CarePersonOtherNumberQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CarePersonOtherNumber', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCarePersonOtherNumberQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCarePersonOtherNumberQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCarePersonOtherNumberQuery) {
            return $criteria;
        }
        $query = new ChildCarePersonOtherNumberQuery();
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
     * @return ChildCarePersonOtherNumber|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CarePersonOtherNumberTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CarePersonOtherNumberTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCarePersonOtherNumber A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, pid, other_nr, org, status, history, modify_id, modify_time, create_id, create_time FROM care_person_other_number WHERE nr = :p0';
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
            /** @var ChildCarePersonOtherNumber $obj */
            $obj = new ChildCarePersonOtherNumber();
            $obj->hydrate($row);
            CarePersonOtherNumberTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCarePersonOtherNumber|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the nr column
     *
     * Example usage:
     * <code>
     * $query->filterByNr(1234); // WHERE nr = 1234
     * $query->filterByNr(array(12, 34)); // WHERE nr IN (12, 34)
     * $query->filterByNr(array('min' => 12)); // WHERE nr > 12
     * </code>
     *
     * @param     mixed $nr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the pid column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE pid = 1234
     * $query->filterByPid(array(12, 34)); // WHERE pid IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE pid > 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the other_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherNr('fooValue');   // WHERE other_nr = 'fooValue'
     * $query->filterByOtherNr('%fooValue%', Criteria::LIKE); // WHERE other_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByOtherNr($otherNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_OTHER_NR, $otherNr, $comparison);
    }

    /**
     * Filter the query on the org column
     *
     * Example usage:
     * <code>
     * $query->filterByOrg('fooValue');   // WHERE org = 'fooValue'
     * $query->filterByOrg('%fooValue%', Criteria::LIKE); // WHERE org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $org The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByOrg($org = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($org)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_ORG, $org, $comparison);
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
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCarePersonOtherNumber $carePersonOtherNumber Object to remove from the list of results
     *
     * @return $this|ChildCarePersonOtherNumberQuery The current query, for fluid interface
     */
    public function prune($carePersonOtherNumber = null)
    {
        if ($carePersonOtherNumber) {
            $this->addUsingAlias(CarePersonOtherNumberTableMap::COL_NR, $carePersonOtherNumber->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_person_other_number table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonOtherNumberTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CarePersonOtherNumberTableMap::clearInstancePool();
            CarePersonOtherNumberTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonOtherNumberTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CarePersonOtherNumberTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CarePersonOtherNumberTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CarePersonOtherNumberTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CarePersonOtherNumberQuery
