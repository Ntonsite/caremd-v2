<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareRoom as ChildCareRoom;
use CareMd\CareMd\CareRoomQuery as ChildCareRoomQuery;
use CareMd\CareMd\Map\CareRoomTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_room' table.
 *
 *
 *
 * @method     ChildCareRoomQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareRoomQuery orderByTypeNr($order = Criteria::ASC) Order by the type_nr column
 * @method     ChildCareRoomQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method     ChildCareRoomQuery orderByDateClose($order = Criteria::ASC) Order by the date_close column
 * @method     ChildCareRoomQuery orderByIsTempClosed($order = Criteria::ASC) Order by the is_temp_closed column
 * @method     ChildCareRoomQuery orderByRoomNr($order = Criteria::ASC) Order by the room_nr column
 * @method     ChildCareRoomQuery orderByWardNr($order = Criteria::ASC) Order by the ward_nr column
 * @method     ChildCareRoomQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareRoomQuery orderByNrOfBeds($order = Criteria::ASC) Order by the nr_of_beds column
 * @method     ChildCareRoomQuery orderByClosedBeds($order = Criteria::ASC) Order by the closed_beds column
 * @method     ChildCareRoomQuery orderByInfo($order = Criteria::ASC) Order by the info column
 * @method     ChildCareRoomQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareRoomQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareRoomQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareRoomQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareRoomQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareRoomQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareRoomQuery groupByNr() Group by the nr column
 * @method     ChildCareRoomQuery groupByTypeNr() Group by the type_nr column
 * @method     ChildCareRoomQuery groupByDateCreate() Group by the date_create column
 * @method     ChildCareRoomQuery groupByDateClose() Group by the date_close column
 * @method     ChildCareRoomQuery groupByIsTempClosed() Group by the is_temp_closed column
 * @method     ChildCareRoomQuery groupByRoomNr() Group by the room_nr column
 * @method     ChildCareRoomQuery groupByWardNr() Group by the ward_nr column
 * @method     ChildCareRoomQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareRoomQuery groupByNrOfBeds() Group by the nr_of_beds column
 * @method     ChildCareRoomQuery groupByClosedBeds() Group by the closed_beds column
 * @method     ChildCareRoomQuery groupByInfo() Group by the info column
 * @method     ChildCareRoomQuery groupByStatus() Group by the status column
 * @method     ChildCareRoomQuery groupByHistory() Group by the history column
 * @method     ChildCareRoomQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareRoomQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareRoomQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareRoomQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareRoomQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareRoomQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareRoomQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareRoomQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareRoomQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareRoomQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareRoom findOne(ConnectionInterface $con = null) Return the first ChildCareRoom matching the query
 * @method     ChildCareRoom findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareRoom matching the query, or a new ChildCareRoom object populated from the query conditions when no match is found
 *
 * @method     ChildCareRoom findOneByNr(int $nr) Return the first ChildCareRoom filtered by the nr column
 * @method     ChildCareRoom findOneByTypeNr(int $type_nr) Return the first ChildCareRoom filtered by the type_nr column
 * @method     ChildCareRoom findOneByDateCreate(string $date_create) Return the first ChildCareRoom filtered by the date_create column
 * @method     ChildCareRoom findOneByDateClose(string $date_close) Return the first ChildCareRoom filtered by the date_close column
 * @method     ChildCareRoom findOneByIsTempClosed(boolean $is_temp_closed) Return the first ChildCareRoom filtered by the is_temp_closed column
 * @method     ChildCareRoom findOneByRoomNr(int $room_nr) Return the first ChildCareRoom filtered by the room_nr column
 * @method     ChildCareRoom findOneByWardNr(int $ward_nr) Return the first ChildCareRoom filtered by the ward_nr column
 * @method     ChildCareRoom findOneByDeptNr(int $dept_nr) Return the first ChildCareRoom filtered by the dept_nr column
 * @method     ChildCareRoom findOneByNrOfBeds(int $nr_of_beds) Return the first ChildCareRoom filtered by the nr_of_beds column
 * @method     ChildCareRoom findOneByClosedBeds(string $closed_beds) Return the first ChildCareRoom filtered by the closed_beds column
 * @method     ChildCareRoom findOneByInfo(string $info) Return the first ChildCareRoom filtered by the info column
 * @method     ChildCareRoom findOneByStatus(string $status) Return the first ChildCareRoom filtered by the status column
 * @method     ChildCareRoom findOneByHistory(string $history) Return the first ChildCareRoom filtered by the history column
 * @method     ChildCareRoom findOneByModifyId(string $modify_id) Return the first ChildCareRoom filtered by the modify_id column
 * @method     ChildCareRoom findOneByModifyTime(string $modify_time) Return the first ChildCareRoom filtered by the modify_time column
 * @method     ChildCareRoom findOneByCreateId(string $create_id) Return the first ChildCareRoom filtered by the create_id column
 * @method     ChildCareRoom findOneByCreateTime(string $create_time) Return the first ChildCareRoom filtered by the create_time column *

 * @method     ChildCareRoom requirePk($key, ConnectionInterface $con = null) Return the ChildCareRoom by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOne(ConnectionInterface $con = null) Return the first ChildCareRoom matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareRoom requireOneByNr(int $nr) Return the first ChildCareRoom filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByTypeNr(int $type_nr) Return the first ChildCareRoom filtered by the type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByDateCreate(string $date_create) Return the first ChildCareRoom filtered by the date_create column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByDateClose(string $date_close) Return the first ChildCareRoom filtered by the date_close column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByIsTempClosed(boolean $is_temp_closed) Return the first ChildCareRoom filtered by the is_temp_closed column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByRoomNr(int $room_nr) Return the first ChildCareRoom filtered by the room_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByWardNr(int $ward_nr) Return the first ChildCareRoom filtered by the ward_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByDeptNr(int $dept_nr) Return the first ChildCareRoom filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByNrOfBeds(int $nr_of_beds) Return the first ChildCareRoom filtered by the nr_of_beds column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByClosedBeds(string $closed_beds) Return the first ChildCareRoom filtered by the closed_beds column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByInfo(string $info) Return the first ChildCareRoom filtered by the info column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByStatus(string $status) Return the first ChildCareRoom filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByHistory(string $history) Return the first ChildCareRoom filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByModifyId(string $modify_id) Return the first ChildCareRoom filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByModifyTime(string $modify_time) Return the first ChildCareRoom filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByCreateId(string $create_id) Return the first ChildCareRoom filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRoom requireOneByCreateTime(string $create_time) Return the first ChildCareRoom filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareRoom[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareRoom objects based on current ModelCriteria
 * @method     ChildCareRoom[]|ObjectCollection findByNr(int $nr) Return ChildCareRoom objects filtered by the nr column
 * @method     ChildCareRoom[]|ObjectCollection findByTypeNr(int $type_nr) Return ChildCareRoom objects filtered by the type_nr column
 * @method     ChildCareRoom[]|ObjectCollection findByDateCreate(string $date_create) Return ChildCareRoom objects filtered by the date_create column
 * @method     ChildCareRoom[]|ObjectCollection findByDateClose(string $date_close) Return ChildCareRoom objects filtered by the date_close column
 * @method     ChildCareRoom[]|ObjectCollection findByIsTempClosed(boolean $is_temp_closed) Return ChildCareRoom objects filtered by the is_temp_closed column
 * @method     ChildCareRoom[]|ObjectCollection findByRoomNr(int $room_nr) Return ChildCareRoom objects filtered by the room_nr column
 * @method     ChildCareRoom[]|ObjectCollection findByWardNr(int $ward_nr) Return ChildCareRoom objects filtered by the ward_nr column
 * @method     ChildCareRoom[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareRoom objects filtered by the dept_nr column
 * @method     ChildCareRoom[]|ObjectCollection findByNrOfBeds(int $nr_of_beds) Return ChildCareRoom objects filtered by the nr_of_beds column
 * @method     ChildCareRoom[]|ObjectCollection findByClosedBeds(string $closed_beds) Return ChildCareRoom objects filtered by the closed_beds column
 * @method     ChildCareRoom[]|ObjectCollection findByInfo(string $info) Return ChildCareRoom objects filtered by the info column
 * @method     ChildCareRoom[]|ObjectCollection findByStatus(string $status) Return ChildCareRoom objects filtered by the status column
 * @method     ChildCareRoom[]|ObjectCollection findByHistory(string $history) Return ChildCareRoom objects filtered by the history column
 * @method     ChildCareRoom[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareRoom objects filtered by the modify_id column
 * @method     ChildCareRoom[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareRoom objects filtered by the modify_time column
 * @method     ChildCareRoom[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareRoom objects filtered by the create_id column
 * @method     ChildCareRoom[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareRoom objects filtered by the create_time column
 * @method     ChildCareRoom[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareRoomQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareRoomQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareRoom', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareRoomQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareRoomQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareRoomQuery) {
            return $criteria;
        }
        $query = new ChildCareRoomQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array[$nr, $type_nr, $ward_nr, $dept_nr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareRoom|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareRoomTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareRoomTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildCareRoom A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, type_nr, date_create, date_close, is_temp_closed, room_nr, ward_nr, dept_nr, nr_of_beds, closed_beds, info, status, history, modify_id, modify_time, create_id, create_time FROM care_room WHERE nr = :p0 AND type_nr = :p1 AND ward_nr = :p2 AND dept_nr = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareRoom $obj */
            $obj = new ChildCareRoom();
            $obj->hydrate($row);
            CareRoomTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildCareRoom|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareRoomTableMap::COL_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareRoomTableMap::COL_TYPE_NR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CareRoomTableMap::COL_WARD_NR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CareRoomTableMap::COL_DEPT_NR, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareRoomTableMap::COL_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareRoomTableMap::COL_TYPE_NR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CareRoomTableMap::COL_WARD_NR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CareRoomTableMap::COL_DEPT_NR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeNr(1234); // WHERE type_nr = 1234
     * $query->filterByTypeNr(array(12, 34)); // WHERE type_nr IN (12, 34)
     * $query->filterByTypeNr(array('min' => 12)); // WHERE type_nr > 12
     * </code>
     *
     * @param     mixed $typeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByTypeNr($typeNr = null, $comparison = null)
    {
        if (is_array($typeNr)) {
            $useMinMax = false;
            if (isset($typeNr['min'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_TYPE_NR, $typeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeNr['max'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_TYPE_NR, $typeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_TYPE_NR, $typeNr, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_DATE_CREATE, $dateCreate, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByDateClose($dateClose = null, $comparison = null)
    {
        if (is_array($dateClose)) {
            $useMinMax = false;
            if (isset($dateClose['min'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_DATE_CLOSE, $dateClose['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateClose['max'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_DATE_CLOSE, $dateClose['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_DATE_CLOSE, $dateClose, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByIsTempClosed($isTempClosed = null, $comparison = null)
    {
        if (is_string($isTempClosed)) {
            $isTempClosed = in_array(strtolower($isTempClosed), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_IS_TEMP_CLOSED, $isTempClosed, $comparison);
    }

    /**
     * Filter the query on the room_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByRoomNr(1234); // WHERE room_nr = 1234
     * $query->filterByRoomNr(array(12, 34)); // WHERE room_nr IN (12, 34)
     * $query->filterByRoomNr(array('min' => 12)); // WHERE room_nr > 12
     * </code>
     *
     * @param     mixed $roomNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByRoomNr($roomNr = null, $comparison = null)
    {
        if (is_array($roomNr)) {
            $useMinMax = false;
            if (isset($roomNr['min'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_ROOM_NR, $roomNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roomNr['max'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_ROOM_NR, $roomNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_ROOM_NR, $roomNr, $comparison);
    }

    /**
     * Filter the query on the ward_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByWardNr(1234); // WHERE ward_nr = 1234
     * $query->filterByWardNr(array(12, 34)); // WHERE ward_nr IN (12, 34)
     * $query->filterByWardNr(array('min' => 12)); // WHERE ward_nr > 12
     * </code>
     *
     * @param     mixed $wardNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByWardNr($wardNr = null, $comparison = null)
    {
        if (is_array($wardNr)) {
            $useMinMax = false;
            if (isset($wardNr['min'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_WARD_NR, $wardNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wardNr['max'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_WARD_NR, $wardNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_WARD_NR, $wardNr, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the nr_of_beds column
     *
     * Example usage:
     * <code>
     * $query->filterByNrOfBeds(1234); // WHERE nr_of_beds = 1234
     * $query->filterByNrOfBeds(array(12, 34)); // WHERE nr_of_beds IN (12, 34)
     * $query->filterByNrOfBeds(array('min' => 12)); // WHERE nr_of_beds > 12
     * </code>
     *
     * @param     mixed $nrOfBeds The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByNrOfBeds($nrOfBeds = null, $comparison = null)
    {
        if (is_array($nrOfBeds)) {
            $useMinMax = false;
            if (isset($nrOfBeds['min'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_NR_OF_BEDS, $nrOfBeds['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nrOfBeds['max'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_NR_OF_BEDS, $nrOfBeds['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_NR_OF_BEDS, $nrOfBeds, $comparison);
    }

    /**
     * Filter the query on the closed_beds column
     *
     * Example usage:
     * <code>
     * $query->filterByClosedBeds('fooValue');   // WHERE closed_beds = 'fooValue'
     * $query->filterByClosedBeds('%fooValue%', Criteria::LIKE); // WHERE closed_beds LIKE '%fooValue%'
     * </code>
     *
     * @param     string $closedBeds The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByClosedBeds($closedBeds = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($closedBeds)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_CLOSED_BEDS, $closedBeds, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByInfo($info = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($info)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_INFO, $info, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareRoomTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRoomTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareRoom $careRoom Object to remove from the list of results
     *
     * @return $this|ChildCareRoomQuery The current query, for fluid interface
     */
    public function prune($careRoom = null)
    {
        if ($careRoom) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareRoomTableMap::COL_NR), $careRoom->getNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareRoomTableMap::COL_TYPE_NR), $careRoom->getTypeNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CareRoomTableMap::COL_WARD_NR), $careRoom->getWardNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CareRoomTableMap::COL_DEPT_NR), $careRoom->getDeptNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_room table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareRoomTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareRoomTableMap::clearInstancePool();
            CareRoomTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareRoomTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareRoomTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareRoomTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareRoomTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareRoomQuery
