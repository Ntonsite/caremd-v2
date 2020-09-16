<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareWard as ChildCareWard;
use CareMd\CareMd\CareWardQuery as ChildCareWardQuery;
use CareMd\CareMd\Map\CareWardTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_ward' table.
 *
 *
 *
 * @method     ChildCareWardQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareWardQuery orderByWardId($order = Criteria::ASC) Order by the ward_id column
 * @method     ChildCareWardQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareWardQuery orderByIsTempClosed($order = Criteria::ASC) Order by the is_temp_closed column
 * @method     ChildCareWardQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method     ChildCareWardQuery orderByDateClose($order = Criteria::ASC) Order by the date_close column
 * @method     ChildCareWardQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareWardQuery orderByInfo($order = Criteria::ASC) Order by the info column
 * @method     ChildCareWardQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareWardQuery orderByRoomNrStart($order = Criteria::ASC) Order by the room_nr_start column
 * @method     ChildCareWardQuery orderByRoomNrEnd($order = Criteria::ASC) Order by the room_nr_end column
 * @method     ChildCareWardQuery orderByRoomprefix($order = Criteria::ASC) Order by the roomprefix column
 * @method     ChildCareWardQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareWardQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareWardQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareWardQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareWardQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareWardQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareWardQuery groupByNr() Group by the nr column
 * @method     ChildCareWardQuery groupByWardId() Group by the ward_id column
 * @method     ChildCareWardQuery groupByName() Group by the name column
 * @method     ChildCareWardQuery groupByIsTempClosed() Group by the is_temp_closed column
 * @method     ChildCareWardQuery groupByDateCreate() Group by the date_create column
 * @method     ChildCareWardQuery groupByDateClose() Group by the date_close column
 * @method     ChildCareWardQuery groupByDescription() Group by the description column
 * @method     ChildCareWardQuery groupByInfo() Group by the info column
 * @method     ChildCareWardQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareWardQuery groupByRoomNrStart() Group by the room_nr_start column
 * @method     ChildCareWardQuery groupByRoomNrEnd() Group by the room_nr_end column
 * @method     ChildCareWardQuery groupByRoomprefix() Group by the roomprefix column
 * @method     ChildCareWardQuery groupByStatus() Group by the status column
 * @method     ChildCareWardQuery groupByHistory() Group by the history column
 * @method     ChildCareWardQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareWardQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareWardQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareWardQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareWardQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareWardQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareWardQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareWardQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareWardQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareWardQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareWard findOne(ConnectionInterface $con = null) Return the first ChildCareWard matching the query
 * @method     ChildCareWard findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareWard matching the query, or a new ChildCareWard object populated from the query conditions when no match is found
 *
 * @method     ChildCareWard findOneByNr(int $nr) Return the first ChildCareWard filtered by the nr column
 * @method     ChildCareWard findOneByWardId(string $ward_id) Return the first ChildCareWard filtered by the ward_id column
 * @method     ChildCareWard findOneByName(string $name) Return the first ChildCareWard filtered by the name column
 * @method     ChildCareWard findOneByIsTempClosed(boolean $is_temp_closed) Return the first ChildCareWard filtered by the is_temp_closed column
 * @method     ChildCareWard findOneByDateCreate(string $date_create) Return the first ChildCareWard filtered by the date_create column
 * @method     ChildCareWard findOneByDateClose(string $date_close) Return the first ChildCareWard filtered by the date_close column
 * @method     ChildCareWard findOneByDescription(string $description) Return the first ChildCareWard filtered by the description column
 * @method     ChildCareWard findOneByInfo(string $info) Return the first ChildCareWard filtered by the info column
 * @method     ChildCareWard findOneByDeptNr(int $dept_nr) Return the first ChildCareWard filtered by the dept_nr column
 * @method     ChildCareWard findOneByRoomNrStart(int $room_nr_start) Return the first ChildCareWard filtered by the room_nr_start column
 * @method     ChildCareWard findOneByRoomNrEnd(int $room_nr_end) Return the first ChildCareWard filtered by the room_nr_end column
 * @method     ChildCareWard findOneByRoomprefix(string $roomprefix) Return the first ChildCareWard filtered by the roomprefix column
 * @method     ChildCareWard findOneByStatus(string $status) Return the first ChildCareWard filtered by the status column
 * @method     ChildCareWard findOneByHistory(string $history) Return the first ChildCareWard filtered by the history column
 * @method     ChildCareWard findOneByModifyId(string $modify_id) Return the first ChildCareWard filtered by the modify_id column
 * @method     ChildCareWard findOneByModifyTime(string $modify_time) Return the first ChildCareWard filtered by the modify_time column
 * @method     ChildCareWard findOneByCreateId(string $create_id) Return the first ChildCareWard filtered by the create_id column
 * @method     ChildCareWard findOneByCreateTime(string $create_time) Return the first ChildCareWard filtered by the create_time column *

 * @method     ChildCareWard requirePk($key, ConnectionInterface $con = null) Return the ChildCareWard by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOne(ConnectionInterface $con = null) Return the first ChildCareWard matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareWard requireOneByNr(int $nr) Return the first ChildCareWard filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByWardId(string $ward_id) Return the first ChildCareWard filtered by the ward_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByName(string $name) Return the first ChildCareWard filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByIsTempClosed(boolean $is_temp_closed) Return the first ChildCareWard filtered by the is_temp_closed column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByDateCreate(string $date_create) Return the first ChildCareWard filtered by the date_create column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByDateClose(string $date_close) Return the first ChildCareWard filtered by the date_close column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByDescription(string $description) Return the first ChildCareWard filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByInfo(string $info) Return the first ChildCareWard filtered by the info column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByDeptNr(int $dept_nr) Return the first ChildCareWard filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByRoomNrStart(int $room_nr_start) Return the first ChildCareWard filtered by the room_nr_start column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByRoomNrEnd(int $room_nr_end) Return the first ChildCareWard filtered by the room_nr_end column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByRoomprefix(string $roomprefix) Return the first ChildCareWard filtered by the roomprefix column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByStatus(string $status) Return the first ChildCareWard filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByHistory(string $history) Return the first ChildCareWard filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByModifyId(string $modify_id) Return the first ChildCareWard filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByModifyTime(string $modify_time) Return the first ChildCareWard filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByCreateId(string $create_id) Return the first ChildCareWard filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareWard requireOneByCreateTime(string $create_time) Return the first ChildCareWard filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareWard[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareWard objects based on current ModelCriteria
 * @method     ChildCareWard[]|ObjectCollection findByNr(int $nr) Return ChildCareWard objects filtered by the nr column
 * @method     ChildCareWard[]|ObjectCollection findByWardId(string $ward_id) Return ChildCareWard objects filtered by the ward_id column
 * @method     ChildCareWard[]|ObjectCollection findByName(string $name) Return ChildCareWard objects filtered by the name column
 * @method     ChildCareWard[]|ObjectCollection findByIsTempClosed(boolean $is_temp_closed) Return ChildCareWard objects filtered by the is_temp_closed column
 * @method     ChildCareWard[]|ObjectCollection findByDateCreate(string $date_create) Return ChildCareWard objects filtered by the date_create column
 * @method     ChildCareWard[]|ObjectCollection findByDateClose(string $date_close) Return ChildCareWard objects filtered by the date_close column
 * @method     ChildCareWard[]|ObjectCollection findByDescription(string $description) Return ChildCareWard objects filtered by the description column
 * @method     ChildCareWard[]|ObjectCollection findByInfo(string $info) Return ChildCareWard objects filtered by the info column
 * @method     ChildCareWard[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareWard objects filtered by the dept_nr column
 * @method     ChildCareWard[]|ObjectCollection findByRoomNrStart(int $room_nr_start) Return ChildCareWard objects filtered by the room_nr_start column
 * @method     ChildCareWard[]|ObjectCollection findByRoomNrEnd(int $room_nr_end) Return ChildCareWard objects filtered by the room_nr_end column
 * @method     ChildCareWard[]|ObjectCollection findByRoomprefix(string $roomprefix) Return ChildCareWard objects filtered by the roomprefix column
 * @method     ChildCareWard[]|ObjectCollection findByStatus(string $status) Return ChildCareWard objects filtered by the status column
 * @method     ChildCareWard[]|ObjectCollection findByHistory(string $history) Return ChildCareWard objects filtered by the history column
 * @method     ChildCareWard[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareWard objects filtered by the modify_id column
 * @method     ChildCareWard[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareWard objects filtered by the modify_time column
 * @method     ChildCareWard[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareWard objects filtered by the create_id column
 * @method     ChildCareWard[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareWard objects filtered by the create_time column
 * @method     ChildCareWard[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareWardQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareWardQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareWard', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareWardQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareWardQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareWardQuery) {
            return $criteria;
        }
        $query = new ChildCareWardQuery();
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
     * @return ChildCareWard|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareWardTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareWardTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareWard A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, ward_id, name, is_temp_closed, date_create, date_close, description, info, dept_nr, room_nr_start, room_nr_end, roomprefix, status, history, modify_id, modify_time, create_id, create_time FROM care_ward WHERE nr = :p0';
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
            /** @var ChildCareWard $obj */
            $obj = new ChildCareWard();
            $obj->hydrate($row);
            CareWardTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareWard|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareWardTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareWardTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareWardTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareWardTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the ward_id column
     *
     * Example usage:
     * <code>
     * $query->filterByWardId('fooValue');   // WHERE ward_id = 'fooValue'
     * $query->filterByWardId('%fooValue%', Criteria::LIKE); // WHERE ward_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wardId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByWardId($wardId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wardId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_WARD_ID, $wardId, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the is_temp_closed column
     *
     * Example usage:
     * <code>
     * $query->filterByIsTempClosed(true); // WHERE is_temp_closed = true
     * $query->filterByIsTempClosed('yes'); // WHERE is_temp_closed = true
     * </code>
     *
     * @param     boolean|string $isTempClosed The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByIsTempClosed($isTempClosed = null, $comparison = null)
    {
        if (is_string($isTempClosed)) {
            $isTempClosed = in_array(strtolower($isTempClosed), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareWardTableMap::COL_IS_TEMP_CLOSED, $isTempClosed, $comparison);
    }

    /**
     * Filter the query on the date_create column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreate('2011-03-14'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate('now'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate(array('max' => 'yesterday')); // WHERE date_create > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(CareWardTableMap::COL_DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(CareWardTableMap::COL_DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query on the date_close column
     *
     * Example usage:
     * <code>
     * $query->filterByDateClose('2011-03-14'); // WHERE date_close = '2011-03-14'
     * $query->filterByDateClose('now'); // WHERE date_close = '2011-03-14'
     * $query->filterByDateClose(array('max' => 'yesterday')); // WHERE date_close > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateClose The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByDateClose($dateClose = null, $comparison = null)
    {
        if (is_array($dateClose)) {
            $useMinMax = false;
            if (isset($dateClose['min'])) {
                $this->addUsingAlias(CareWardTableMap::COL_DATE_CLOSE, $dateClose['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateClose['max'])) {
                $this->addUsingAlias(CareWardTableMap::COL_DATE_CLOSE, $dateClose['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_DATE_CLOSE, $dateClose, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the info column
     *
     * Example usage:
     * <code>
     * $query->filterByInfo('fooValue');   // WHERE info = 'fooValue'
     * $query->filterByInfo('%fooValue%', Criteria::LIKE); // WHERE info LIKE '%fooValue%'
     * </code>
     *
     * @param     string $info The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByInfo($info = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($info)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_INFO, $info, $comparison);
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
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareWardTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareWardTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the room_nr_start column
     *
     * Example usage:
     * <code>
     * $query->filterByRoomNrStart(1234); // WHERE room_nr_start = 1234
     * $query->filterByRoomNrStart(array(12, 34)); // WHERE room_nr_start IN (12, 34)
     * $query->filterByRoomNrStart(array('min' => 12)); // WHERE room_nr_start > 12
     * </code>
     *
     * @param     mixed $roomNrStart The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByRoomNrStart($roomNrStart = null, $comparison = null)
    {
        if (is_array($roomNrStart)) {
            $useMinMax = false;
            if (isset($roomNrStart['min'])) {
                $this->addUsingAlias(CareWardTableMap::COL_ROOM_NR_START, $roomNrStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roomNrStart['max'])) {
                $this->addUsingAlias(CareWardTableMap::COL_ROOM_NR_START, $roomNrStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_ROOM_NR_START, $roomNrStart, $comparison);
    }

    /**
     * Filter the query on the room_nr_end column
     *
     * Example usage:
     * <code>
     * $query->filterByRoomNrEnd(1234); // WHERE room_nr_end = 1234
     * $query->filterByRoomNrEnd(array(12, 34)); // WHERE room_nr_end IN (12, 34)
     * $query->filterByRoomNrEnd(array('min' => 12)); // WHERE room_nr_end > 12
     * </code>
     *
     * @param     mixed $roomNrEnd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByRoomNrEnd($roomNrEnd = null, $comparison = null)
    {
        if (is_array($roomNrEnd)) {
            $useMinMax = false;
            if (isset($roomNrEnd['min'])) {
                $this->addUsingAlias(CareWardTableMap::COL_ROOM_NR_END, $roomNrEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roomNrEnd['max'])) {
                $this->addUsingAlias(CareWardTableMap::COL_ROOM_NR_END, $roomNrEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_ROOM_NR_END, $roomNrEnd, $comparison);
    }

    /**
     * Filter the query on the roomprefix column
     *
     * Example usage:
     * <code>
     * $query->filterByRoomprefix('fooValue');   // WHERE roomprefix = 'fooValue'
     * $query->filterByRoomprefix('%fooValue%', Criteria::LIKE); // WHERE roomprefix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $roomprefix The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByRoomprefix($roomprefix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($roomprefix)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_ROOMPREFIX, $roomprefix, $comparison);
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
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareWardTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareWardTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareWardTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareWardTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareWardTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareWard $careWard Object to remove from the list of results
     *
     * @return $this|ChildCareWardQuery The current query, for fluid interface
     */
    public function prune($careWard = null)
    {
        if ($careWard) {
            $this->addUsingAlias(CareWardTableMap::COL_NR, $careWard->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_ward table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareWardTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareWardTableMap::clearInstancePool();
            CareWardTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareWardTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareWardTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareWardTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareWardTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareWardQuery
