<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzHospitalDoctorHistory as ChildCareTzHospitalDoctorHistory;
use CareMd\CareMd\CareTzHospitalDoctorHistoryQuery as ChildCareTzHospitalDoctorHistoryQuery;
use CareMd\CareMd\Map\CareTzHospitalDoctorHistoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_hospital_doctor_history' table.
 *
 *
 *
 * @method     ChildCareTzHospitalDoctorHistoryQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareTzHospitalDoctorHistoryQuery orderByDoctor($order = Criteria::ASC) Order by the doctor column
 * @method     ChildCareTzHospitalDoctorHistoryQuery orderByDept($order = Criteria::ASC) Order by the dept column
 * @method     ChildCareTzHospitalDoctorHistoryQuery orderByRoom($order = Criteria::ASC) Order by the room column
 * @method     ChildCareTzHospitalDoctorHistoryQuery orderByAttend($order = Criteria::ASC) Order by the attend column
 * @method     ChildCareTzHospitalDoctorHistoryQuery orderByPatients($order = Criteria::ASC) Order by the patients column
 *
 * @method     ChildCareTzHospitalDoctorHistoryQuery groupByDate() Group by the date column
 * @method     ChildCareTzHospitalDoctorHistoryQuery groupByDoctor() Group by the doctor column
 * @method     ChildCareTzHospitalDoctorHistoryQuery groupByDept() Group by the dept column
 * @method     ChildCareTzHospitalDoctorHistoryQuery groupByRoom() Group by the room column
 * @method     ChildCareTzHospitalDoctorHistoryQuery groupByAttend() Group by the attend column
 * @method     ChildCareTzHospitalDoctorHistoryQuery groupByPatients() Group by the patients column
 *
 * @method     ChildCareTzHospitalDoctorHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzHospitalDoctorHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzHospitalDoctorHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzHospitalDoctorHistoryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzHospitalDoctorHistoryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzHospitalDoctorHistoryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzHospitalDoctorHistory findOne(ConnectionInterface $con = null) Return the first ChildCareTzHospitalDoctorHistory matching the query
 * @method     ChildCareTzHospitalDoctorHistory findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzHospitalDoctorHistory matching the query, or a new ChildCareTzHospitalDoctorHistory object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzHospitalDoctorHistory findOneByDate(string $date) Return the first ChildCareTzHospitalDoctorHistory filtered by the date column
 * @method     ChildCareTzHospitalDoctorHistory findOneByDoctor(string $doctor) Return the first ChildCareTzHospitalDoctorHistory filtered by the doctor column
 * @method     ChildCareTzHospitalDoctorHistory findOneByDept(int $dept) Return the first ChildCareTzHospitalDoctorHistory filtered by the dept column
 * @method     ChildCareTzHospitalDoctorHistory findOneByRoom(string $room) Return the first ChildCareTzHospitalDoctorHistory filtered by the room column
 * @method     ChildCareTzHospitalDoctorHistory findOneByAttend(int $attend) Return the first ChildCareTzHospitalDoctorHistory filtered by the attend column
 * @method     ChildCareTzHospitalDoctorHistory findOneByPatients(string $patients) Return the first ChildCareTzHospitalDoctorHistory filtered by the patients column *

 * @method     ChildCareTzHospitalDoctorHistory requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzHospitalDoctorHistory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalDoctorHistory requireOne(ConnectionInterface $con = null) Return the first ChildCareTzHospitalDoctorHistory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzHospitalDoctorHistory requireOneByDate(string $date) Return the first ChildCareTzHospitalDoctorHistory filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalDoctorHistory requireOneByDoctor(string $doctor) Return the first ChildCareTzHospitalDoctorHistory filtered by the doctor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalDoctorHistory requireOneByDept(int $dept) Return the first ChildCareTzHospitalDoctorHistory filtered by the dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalDoctorHistory requireOneByRoom(string $room) Return the first ChildCareTzHospitalDoctorHistory filtered by the room column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalDoctorHistory requireOneByAttend(int $attend) Return the first ChildCareTzHospitalDoctorHistory filtered by the attend column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalDoctorHistory requireOneByPatients(string $patients) Return the first ChildCareTzHospitalDoctorHistory filtered by the patients column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzHospitalDoctorHistory[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzHospitalDoctorHistory objects based on current ModelCriteria
 * @method     ChildCareTzHospitalDoctorHistory[]|ObjectCollection findByDate(string $date) Return ChildCareTzHospitalDoctorHistory objects filtered by the date column
 * @method     ChildCareTzHospitalDoctorHistory[]|ObjectCollection findByDoctor(string $doctor) Return ChildCareTzHospitalDoctorHistory objects filtered by the doctor column
 * @method     ChildCareTzHospitalDoctorHistory[]|ObjectCollection findByDept(int $dept) Return ChildCareTzHospitalDoctorHistory objects filtered by the dept column
 * @method     ChildCareTzHospitalDoctorHistory[]|ObjectCollection findByRoom(string $room) Return ChildCareTzHospitalDoctorHistory objects filtered by the room column
 * @method     ChildCareTzHospitalDoctorHistory[]|ObjectCollection findByAttend(int $attend) Return ChildCareTzHospitalDoctorHistory objects filtered by the attend column
 * @method     ChildCareTzHospitalDoctorHistory[]|ObjectCollection findByPatients(string $patients) Return ChildCareTzHospitalDoctorHistory objects filtered by the patients column
 * @method     ChildCareTzHospitalDoctorHistory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzHospitalDoctorHistoryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzHospitalDoctorHistoryQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzHospitalDoctorHistory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzHospitalDoctorHistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzHospitalDoctorHistoryQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzHospitalDoctorHistoryQuery) {
            return $criteria;
        }
        $query = new ChildCareTzHospitalDoctorHistoryQuery();
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
     * @param array[$date, $doctor, $dept, $room] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTzHospitalDoctorHistory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzHospitalDoctorHistoryTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzHospitalDoctorHistoryTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildCareTzHospitalDoctorHistory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT date, doctor, dept, room, attend, patients FROM care_tz_hospital_doctor_history WHERE date = :p0 AND doctor = :p1 AND dept = :p2 AND room = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0] ? $key[0]->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTzHospitalDoctorHistory $obj */
            $obj = new ChildCareTzHospitalDoctorHistory();
            $obj->hydrate($row);
            CareTzHospitalDoctorHistoryTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildCareTzHospitalDoctorHistory|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzHospitalDoctorHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_DATE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_DOCTOR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_DEPT, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_ROOM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzHospitalDoctorHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTzHospitalDoctorHistoryTableMap::COL_DATE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTzHospitalDoctorHistoryTableMap::COL_DOCTOR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CareTzHospitalDoctorHistoryTableMap::COL_DEPT, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CareTzHospitalDoctorHistoryTableMap::COL_ROOM, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalDoctorHistoryQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the doctor column
     *
     * Example usage:
     * <code>
     * $query->filterByDoctor('fooValue');   // WHERE doctor = 'fooValue'
     * $query->filterByDoctor('%fooValue%', Criteria::LIKE); // WHERE doctor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doctor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalDoctorHistoryQuery The current query, for fluid interface
     */
    public function filterByDoctor($doctor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doctor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_DOCTOR, $doctor, $comparison);
    }

    /**
     * Filter the query on the dept column
     *
     * Example usage:
     * <code>
     * $query->filterByDept(1234); // WHERE dept = 1234
     * $query->filterByDept(array(12, 34)); // WHERE dept IN (12, 34)
     * $query->filterByDept(array('min' => 12)); // WHERE dept > 12
     * </code>
     *
     * @param     mixed $dept The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalDoctorHistoryQuery The current query, for fluid interface
     */
    public function filterByDept($dept = null, $comparison = null)
    {
        if (is_array($dept)) {
            $useMinMax = false;
            if (isset($dept['min'])) {
                $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_DEPT, $dept['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dept['max'])) {
                $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_DEPT, $dept['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_DEPT, $dept, $comparison);
    }

    /**
     * Filter the query on the room column
     *
     * Example usage:
     * <code>
     * $query->filterByRoom('fooValue');   // WHERE room = 'fooValue'
     * $query->filterByRoom('%fooValue%', Criteria::LIKE); // WHERE room LIKE '%fooValue%'
     * </code>
     *
     * @param     string $room The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalDoctorHistoryQuery The current query, for fluid interface
     */
    public function filterByRoom($room = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($room)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_ROOM, $room, $comparison);
    }

    /**
     * Filter the query on the attend column
     *
     * Example usage:
     * <code>
     * $query->filterByAttend(1234); // WHERE attend = 1234
     * $query->filterByAttend(array(12, 34)); // WHERE attend IN (12, 34)
     * $query->filterByAttend(array('min' => 12)); // WHERE attend > 12
     * </code>
     *
     * @param     mixed $attend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalDoctorHistoryQuery The current query, for fluid interface
     */
    public function filterByAttend($attend = null, $comparison = null)
    {
        if (is_array($attend)) {
            $useMinMax = false;
            if (isset($attend['min'])) {
                $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_ATTEND, $attend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attend['max'])) {
                $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_ATTEND, $attend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_ATTEND, $attend, $comparison);
    }

    /**
     * Filter the query on the patients column
     *
     * Example usage:
     * <code>
     * $query->filterByPatients('fooValue');   // WHERE patients = 'fooValue'
     * $query->filterByPatients('%fooValue%', Criteria::LIKE); // WHERE patients LIKE '%fooValue%'
     * </code>
     *
     * @param     string $patients The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalDoctorHistoryQuery The current query, for fluid interface
     */
    public function filterByPatients($patients = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($patients)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalDoctorHistoryTableMap::COL_PATIENTS, $patients, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzHospitalDoctorHistory $careTzHospitalDoctorHistory Object to remove from the list of results
     *
     * @return $this|ChildCareTzHospitalDoctorHistoryQuery The current query, for fluid interface
     */
    public function prune($careTzHospitalDoctorHistory = null)
    {
        if ($careTzHospitalDoctorHistory) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTzHospitalDoctorHistoryTableMap::COL_DATE), $careTzHospitalDoctorHistory->getDate(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTzHospitalDoctorHistoryTableMap::COL_DOCTOR), $careTzHospitalDoctorHistory->getDoctor(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CareTzHospitalDoctorHistoryTableMap::COL_DEPT), $careTzHospitalDoctorHistory->getDept(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CareTzHospitalDoctorHistoryTableMap::COL_ROOM), $careTzHospitalDoctorHistory->getRoom(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_hospital_doctor_history table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzHospitalDoctorHistoryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzHospitalDoctorHistoryTableMap::clearInstancePool();
            CareTzHospitalDoctorHistoryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzHospitalDoctorHistoryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzHospitalDoctorHistoryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzHospitalDoctorHistoryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzHospitalDoctorHistoryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzHospitalDoctorHistoryQuery
