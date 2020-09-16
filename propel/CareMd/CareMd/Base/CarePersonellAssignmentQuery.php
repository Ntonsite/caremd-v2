<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CarePersonellAssignment as ChildCarePersonellAssignment;
use CareMd\CareMd\CarePersonellAssignmentQuery as ChildCarePersonellAssignmentQuery;
use CareMd\CareMd\Map\CarePersonellAssignmentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_personell_assignment' table.
 *
 *
 *
 * @method     ChildCarePersonellAssignmentQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCarePersonellAssignmentQuery orderByPersonellNr($order = Criteria::ASC) Order by the personell_nr column
 * @method     ChildCarePersonellAssignmentQuery orderByRoleNr($order = Criteria::ASC) Order by the role_nr column
 * @method     ChildCarePersonellAssignmentQuery orderByLocationTypeNr($order = Criteria::ASC) Order by the location_type_nr column
 * @method     ChildCarePersonellAssignmentQuery orderByLocationNr($order = Criteria::ASC) Order by the location_nr column
 * @method     ChildCarePersonellAssignmentQuery orderByDateStart($order = Criteria::ASC) Order by the date_start column
 * @method     ChildCarePersonellAssignmentQuery orderByDateEnd($order = Criteria::ASC) Order by the date_end column
 * @method     ChildCarePersonellAssignmentQuery orderByIsTemporary($order = Criteria::ASC) Order by the is_temporary column
 * @method     ChildCarePersonellAssignmentQuery orderByListFrequency($order = Criteria::ASC) Order by the list_frequency column
 * @method     ChildCarePersonellAssignmentQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCarePersonellAssignmentQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCarePersonellAssignmentQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCarePersonellAssignmentQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCarePersonellAssignmentQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCarePersonellAssignmentQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCarePersonellAssignmentQuery groupByNr() Group by the nr column
 * @method     ChildCarePersonellAssignmentQuery groupByPersonellNr() Group by the personell_nr column
 * @method     ChildCarePersonellAssignmentQuery groupByRoleNr() Group by the role_nr column
 * @method     ChildCarePersonellAssignmentQuery groupByLocationTypeNr() Group by the location_type_nr column
 * @method     ChildCarePersonellAssignmentQuery groupByLocationNr() Group by the location_nr column
 * @method     ChildCarePersonellAssignmentQuery groupByDateStart() Group by the date_start column
 * @method     ChildCarePersonellAssignmentQuery groupByDateEnd() Group by the date_end column
 * @method     ChildCarePersonellAssignmentQuery groupByIsTemporary() Group by the is_temporary column
 * @method     ChildCarePersonellAssignmentQuery groupByListFrequency() Group by the list_frequency column
 * @method     ChildCarePersonellAssignmentQuery groupByStatus() Group by the status column
 * @method     ChildCarePersonellAssignmentQuery groupByHistory() Group by the history column
 * @method     ChildCarePersonellAssignmentQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCarePersonellAssignmentQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCarePersonellAssignmentQuery groupByCreateId() Group by the create_id column
 * @method     ChildCarePersonellAssignmentQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCarePersonellAssignmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCarePersonellAssignmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCarePersonellAssignmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCarePersonellAssignmentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCarePersonellAssignmentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCarePersonellAssignmentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCarePersonellAssignment findOne(ConnectionInterface $con = null) Return the first ChildCarePersonellAssignment matching the query
 * @method     ChildCarePersonellAssignment findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCarePersonellAssignment matching the query, or a new ChildCarePersonellAssignment object populated from the query conditions when no match is found
 *
 * @method     ChildCarePersonellAssignment findOneByNr(int $nr) Return the first ChildCarePersonellAssignment filtered by the nr column
 * @method     ChildCarePersonellAssignment findOneByPersonellNr(int $personell_nr) Return the first ChildCarePersonellAssignment filtered by the personell_nr column
 * @method     ChildCarePersonellAssignment findOneByRoleNr(int $role_nr) Return the first ChildCarePersonellAssignment filtered by the role_nr column
 * @method     ChildCarePersonellAssignment findOneByLocationTypeNr(int $location_type_nr) Return the first ChildCarePersonellAssignment filtered by the location_type_nr column
 * @method     ChildCarePersonellAssignment findOneByLocationNr(int $location_nr) Return the first ChildCarePersonellAssignment filtered by the location_nr column
 * @method     ChildCarePersonellAssignment findOneByDateStart(string $date_start) Return the first ChildCarePersonellAssignment filtered by the date_start column
 * @method     ChildCarePersonellAssignment findOneByDateEnd(string $date_end) Return the first ChildCarePersonellAssignment filtered by the date_end column
 * @method     ChildCarePersonellAssignment findOneByIsTemporary(boolean $is_temporary) Return the first ChildCarePersonellAssignment filtered by the is_temporary column
 * @method     ChildCarePersonellAssignment findOneByListFrequency(int $list_frequency) Return the first ChildCarePersonellAssignment filtered by the list_frequency column
 * @method     ChildCarePersonellAssignment findOneByStatus(string $status) Return the first ChildCarePersonellAssignment filtered by the status column
 * @method     ChildCarePersonellAssignment findOneByHistory(string $history) Return the first ChildCarePersonellAssignment filtered by the history column
 * @method     ChildCarePersonellAssignment findOneByModifyId(string $modify_id) Return the first ChildCarePersonellAssignment filtered by the modify_id column
 * @method     ChildCarePersonellAssignment findOneByModifyTime(string $modify_time) Return the first ChildCarePersonellAssignment filtered by the modify_time column
 * @method     ChildCarePersonellAssignment findOneByCreateId(string $create_id) Return the first ChildCarePersonellAssignment filtered by the create_id column
 * @method     ChildCarePersonellAssignment findOneByCreateTime(string $create_time) Return the first ChildCarePersonellAssignment filtered by the create_time column *

 * @method     ChildCarePersonellAssignment requirePk($key, ConnectionInterface $con = null) Return the ChildCarePersonellAssignment by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOne(ConnectionInterface $con = null) Return the first ChildCarePersonellAssignment matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePersonellAssignment requireOneByNr(int $nr) Return the first ChildCarePersonellAssignment filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByPersonellNr(int $personell_nr) Return the first ChildCarePersonellAssignment filtered by the personell_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByRoleNr(int $role_nr) Return the first ChildCarePersonellAssignment filtered by the role_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByLocationTypeNr(int $location_type_nr) Return the first ChildCarePersonellAssignment filtered by the location_type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByLocationNr(int $location_nr) Return the first ChildCarePersonellAssignment filtered by the location_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByDateStart(string $date_start) Return the first ChildCarePersonellAssignment filtered by the date_start column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByDateEnd(string $date_end) Return the first ChildCarePersonellAssignment filtered by the date_end column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByIsTemporary(boolean $is_temporary) Return the first ChildCarePersonellAssignment filtered by the is_temporary column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByListFrequency(int $list_frequency) Return the first ChildCarePersonellAssignment filtered by the list_frequency column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByStatus(string $status) Return the first ChildCarePersonellAssignment filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByHistory(string $history) Return the first ChildCarePersonellAssignment filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByModifyId(string $modify_id) Return the first ChildCarePersonellAssignment filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByModifyTime(string $modify_time) Return the first ChildCarePersonellAssignment filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByCreateId(string $create_id) Return the first ChildCarePersonellAssignment filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonellAssignment requireOneByCreateTime(string $create_time) Return the first ChildCarePersonellAssignment filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePersonellAssignment[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCarePersonellAssignment objects based on current ModelCriteria
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByNr(int $nr) Return ChildCarePersonellAssignment objects filtered by the nr column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByPersonellNr(int $personell_nr) Return ChildCarePersonellAssignment objects filtered by the personell_nr column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByRoleNr(int $role_nr) Return ChildCarePersonellAssignment objects filtered by the role_nr column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByLocationTypeNr(int $location_type_nr) Return ChildCarePersonellAssignment objects filtered by the location_type_nr column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByLocationNr(int $location_nr) Return ChildCarePersonellAssignment objects filtered by the location_nr column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByDateStart(string $date_start) Return ChildCarePersonellAssignment objects filtered by the date_start column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByDateEnd(string $date_end) Return ChildCarePersonellAssignment objects filtered by the date_end column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByIsTemporary(boolean $is_temporary) Return ChildCarePersonellAssignment objects filtered by the is_temporary column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByListFrequency(int $list_frequency) Return ChildCarePersonellAssignment objects filtered by the list_frequency column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByStatus(string $status) Return ChildCarePersonellAssignment objects filtered by the status column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByHistory(string $history) Return ChildCarePersonellAssignment objects filtered by the history column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCarePersonellAssignment objects filtered by the modify_id column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCarePersonellAssignment objects filtered by the modify_time column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByCreateId(string $create_id) Return ChildCarePersonellAssignment objects filtered by the create_id column
 * @method     ChildCarePersonellAssignment[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCarePersonellAssignment objects filtered by the create_time column
 * @method     ChildCarePersonellAssignment[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CarePersonellAssignmentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CarePersonellAssignmentQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CarePersonellAssignment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCarePersonellAssignmentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCarePersonellAssignmentQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCarePersonellAssignmentQuery) {
            return $criteria;
        }
        $query = new ChildCarePersonellAssignmentQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array[$nr, $personell_nr, $role_nr, $location_type_nr, $location_nr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCarePersonellAssignment|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CarePersonellAssignmentTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CarePersonellAssignmentTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4])]))))) {
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
     * @return ChildCarePersonellAssignment A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, personell_nr, role_nr, location_type_nr, location_nr, date_start, date_end, is_temporary, list_frequency, status, history, modify_id, modify_time, create_id, create_time FROM care_personell_assignment WHERE nr = :p0 AND personell_nr = :p1 AND role_nr = :p2 AND location_type_nr = :p3 AND location_nr = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCarePersonellAssignment $obj */
            $obj = new ChildCarePersonellAssignment();
            $obj->hydrate($row);
            CarePersonellAssignmentTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4])]));
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
     * @return ChildCarePersonellAssignment|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_PERSONELL_NR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_ROLE_NR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LOCATION_TYPE_NR, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LOCATION_NR, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CarePersonellAssignmentTableMap::COL_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CarePersonellAssignmentTableMap::COL_PERSONELL_NR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CarePersonellAssignmentTableMap::COL_ROLE_NR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CarePersonellAssignmentTableMap::COL_LOCATION_TYPE_NR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(CarePersonellAssignmentTableMap::COL_LOCATION_NR, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
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
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the personell_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonellNr(1234); // WHERE personell_nr = 1234
     * $query->filterByPersonellNr(array(12, 34)); // WHERE personell_nr IN (12, 34)
     * $query->filterByPersonellNr(array('min' => 12)); // WHERE personell_nr > 12
     * </code>
     *
     * @param     mixed $personellNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByPersonellNr($personellNr = null, $comparison = null)
    {
        if (is_array($personellNr)) {
            $useMinMax = false;
            if (isset($personellNr['min'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_PERSONELL_NR, $personellNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personellNr['max'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_PERSONELL_NR, $personellNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_PERSONELL_NR, $personellNr, $comparison);
    }

    /**
     * Filter the query on the role_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByRoleNr(1234); // WHERE role_nr = 1234
     * $query->filterByRoleNr(array(12, 34)); // WHERE role_nr IN (12, 34)
     * $query->filterByRoleNr(array('min' => 12)); // WHERE role_nr > 12
     * </code>
     *
     * @param     mixed $roleNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByRoleNr($roleNr = null, $comparison = null)
    {
        if (is_array($roleNr)) {
            $useMinMax = false;
            if (isset($roleNr['min'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_ROLE_NR, $roleNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roleNr['max'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_ROLE_NR, $roleNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_ROLE_NR, $roleNr, $comparison);
    }

    /**
     * Filter the query on the location_type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationTypeNr(1234); // WHERE location_type_nr = 1234
     * $query->filterByLocationTypeNr(array(12, 34)); // WHERE location_type_nr IN (12, 34)
     * $query->filterByLocationTypeNr(array('min' => 12)); // WHERE location_type_nr > 12
     * </code>
     *
     * @param     mixed $locationTypeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByLocationTypeNr($locationTypeNr = null, $comparison = null)
    {
        if (is_array($locationTypeNr)) {
            $useMinMax = false;
            if (isset($locationTypeNr['min'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LOCATION_TYPE_NR, $locationTypeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationTypeNr['max'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LOCATION_TYPE_NR, $locationTypeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LOCATION_TYPE_NR, $locationTypeNr, $comparison);
    }

    /**
     * Filter the query on the location_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationNr(1234); // WHERE location_nr = 1234
     * $query->filterByLocationNr(array(12, 34)); // WHERE location_nr IN (12, 34)
     * $query->filterByLocationNr(array('min' => 12)); // WHERE location_nr > 12
     * </code>
     *
     * @param     mixed $locationNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByLocationNr($locationNr = null, $comparison = null)
    {
        if (is_array($locationNr)) {
            $useMinMax = false;
            if (isset($locationNr['min'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LOCATION_NR, $locationNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationNr['max'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LOCATION_NR, $locationNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LOCATION_NR, $locationNr, $comparison);
    }

    /**
     * Filter the query on the date_start column
     *
     * Example usage:
     * <code>
     * $query->filterByDateStart('2011-03-14'); // WHERE date_start = '2011-03-14'
     * $query->filterByDateStart('now'); // WHERE date_start = '2011-03-14'
     * $query->filterByDateStart(array('max' => 'yesterday')); // WHERE date_start > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateStart The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByDateStart($dateStart = null, $comparison = null)
    {
        if (is_array($dateStart)) {
            $useMinMax = false;
            if (isset($dateStart['min'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_DATE_START, $dateStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateStart['max'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_DATE_START, $dateStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_DATE_START, $dateStart, $comparison);
    }

    /**
     * Filter the query on the date_end column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnd('2011-03-14'); // WHERE date_end = '2011-03-14'
     * $query->filterByDateEnd('now'); // WHERE date_end = '2011-03-14'
     * $query->filterByDateEnd(array('max' => 'yesterday')); // WHERE date_end > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEnd The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByDateEnd($dateEnd = null, $comparison = null)
    {
        if (is_array($dateEnd)) {
            $useMinMax = false;
            if (isset($dateEnd['min'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_DATE_END, $dateEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnd['max'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_DATE_END, $dateEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_DATE_END, $dateEnd, $comparison);
    }

    /**
     * Filter the query on the is_temporary column
     *
     * Example usage:
     * <code>
     * $query->filterByIsTemporary(true); // WHERE is_temporary = true
     * $query->filterByIsTemporary('yes'); // WHERE is_temporary = true
     * </code>
     *
     * @param     boolean|string $isTemporary The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByIsTemporary($isTemporary = null, $comparison = null)
    {
        if (is_string($isTemporary)) {
            $isTemporary = in_array(strtolower($isTemporary), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_IS_TEMPORARY, $isTemporary, $comparison);
    }

    /**
     * Filter the query on the list_frequency column
     *
     * Example usage:
     * <code>
     * $query->filterByListFrequency(1234); // WHERE list_frequency = 1234
     * $query->filterByListFrequency(array(12, 34)); // WHERE list_frequency IN (12, 34)
     * $query->filterByListFrequency(array('min' => 12)); // WHERE list_frequency > 12
     * </code>
     *
     * @param     mixed $listFrequency The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByListFrequency($listFrequency = null, $comparison = null)
    {
        if (is_array($listFrequency)) {
            $useMinMax = false;
            if (isset($listFrequency['min'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LIST_FREQUENCY, $listFrequency['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($listFrequency['max'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LIST_FREQUENCY, $listFrequency['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_LIST_FREQUENCY, $listFrequency, $comparison);
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
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellAssignmentTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCarePersonellAssignment $carePersonellAssignment Object to remove from the list of results
     *
     * @return $this|ChildCarePersonellAssignmentQuery The current query, for fluid interface
     */
    public function prune($carePersonellAssignment = null)
    {
        if ($carePersonellAssignment) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CarePersonellAssignmentTableMap::COL_NR), $carePersonellAssignment->getNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CarePersonellAssignmentTableMap::COL_PERSONELL_NR), $carePersonellAssignment->getPersonellNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CarePersonellAssignmentTableMap::COL_ROLE_NR), $carePersonellAssignment->getRoleNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CarePersonellAssignmentTableMap::COL_LOCATION_TYPE_NR), $carePersonellAssignment->getLocationTypeNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(CarePersonellAssignmentTableMap::COL_LOCATION_NR), $carePersonellAssignment->getLocationNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_personell_assignment table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonellAssignmentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CarePersonellAssignmentTableMap::clearInstancePool();
            CarePersonellAssignmentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonellAssignmentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CarePersonellAssignmentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CarePersonellAssignmentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CarePersonellAssignmentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CarePersonellAssignmentQuery
