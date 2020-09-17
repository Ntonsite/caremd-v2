<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareDutyplanOncall as ChildCareDutyplanOncall;
use CareMd\CareMd\CareDutyplanOncallQuery as ChildCareDutyplanOncallQuery;
use CareMd\CareMd\Map\CareDutyplanOncallTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_dutyplan_oncall' table.
 *
 *
 *
 * @method     ChildCareDutyplanOncallQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareDutyplanOncallQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareDutyplanOncallQuery orderByRoleNr($order = Criteria::ASC) Order by the role_nr column
 * @method     ChildCareDutyplanOncallQuery orderByYear($order = Criteria::ASC) Order by the year column
 * @method     ChildCareDutyplanOncallQuery orderByMonth($order = Criteria::ASC) Order by the month column
 * @method     ChildCareDutyplanOncallQuery orderByDuty1Txt($order = Criteria::ASC) Order by the duty_1_txt column
 * @method     ChildCareDutyplanOncallQuery orderByDuty2Txt($order = Criteria::ASC) Order by the duty_2_txt column
 * @method     ChildCareDutyplanOncallQuery orderByDuty1Pnr($order = Criteria::ASC) Order by the duty_1_pnr column
 * @method     ChildCareDutyplanOncallQuery orderByDuty2Pnr($order = Criteria::ASC) Order by the duty_2_pnr column
 * @method     ChildCareDutyplanOncallQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareDutyplanOncallQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareDutyplanOncallQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareDutyplanOncallQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareDutyplanOncallQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareDutyplanOncallQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareDutyplanOncallQuery groupByNr() Group by the nr column
 * @method     ChildCareDutyplanOncallQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareDutyplanOncallQuery groupByRoleNr() Group by the role_nr column
 * @method     ChildCareDutyplanOncallQuery groupByYear() Group by the year column
 * @method     ChildCareDutyplanOncallQuery groupByMonth() Group by the month column
 * @method     ChildCareDutyplanOncallQuery groupByDuty1Txt() Group by the duty_1_txt column
 * @method     ChildCareDutyplanOncallQuery groupByDuty2Txt() Group by the duty_2_txt column
 * @method     ChildCareDutyplanOncallQuery groupByDuty1Pnr() Group by the duty_1_pnr column
 * @method     ChildCareDutyplanOncallQuery groupByDuty2Pnr() Group by the duty_2_pnr column
 * @method     ChildCareDutyplanOncallQuery groupByStatus() Group by the status column
 * @method     ChildCareDutyplanOncallQuery groupByHistory() Group by the history column
 * @method     ChildCareDutyplanOncallQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareDutyplanOncallQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareDutyplanOncallQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareDutyplanOncallQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareDutyplanOncallQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareDutyplanOncallQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareDutyplanOncallQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareDutyplanOncallQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareDutyplanOncallQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareDutyplanOncallQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareDutyplanOncall findOne(ConnectionInterface $con = null) Return the first ChildCareDutyplanOncall matching the query
 * @method     ChildCareDutyplanOncall findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareDutyplanOncall matching the query, or a new ChildCareDutyplanOncall object populated from the query conditions when no match is found
 *
 * @method     ChildCareDutyplanOncall findOneByNr(string $nr) Return the first ChildCareDutyplanOncall filtered by the nr column
 * @method     ChildCareDutyplanOncall findOneByDeptNr(int $dept_nr) Return the first ChildCareDutyplanOncall filtered by the dept_nr column
 * @method     ChildCareDutyplanOncall findOneByRoleNr(int $role_nr) Return the first ChildCareDutyplanOncall filtered by the role_nr column
 * @method     ChildCareDutyplanOncall findOneByYear(int $year) Return the first ChildCareDutyplanOncall filtered by the year column
 * @method     ChildCareDutyplanOncall findOneByMonth(string $month) Return the first ChildCareDutyplanOncall filtered by the month column
 * @method     ChildCareDutyplanOncall findOneByDuty1Txt(string $duty_1_txt) Return the first ChildCareDutyplanOncall filtered by the duty_1_txt column
 * @method     ChildCareDutyplanOncall findOneByDuty2Txt(string $duty_2_txt) Return the first ChildCareDutyplanOncall filtered by the duty_2_txt column
 * @method     ChildCareDutyplanOncall findOneByDuty1Pnr(string $duty_1_pnr) Return the first ChildCareDutyplanOncall filtered by the duty_1_pnr column
 * @method     ChildCareDutyplanOncall findOneByDuty2Pnr(string $duty_2_pnr) Return the first ChildCareDutyplanOncall filtered by the duty_2_pnr column
 * @method     ChildCareDutyplanOncall findOneByStatus(string $status) Return the first ChildCareDutyplanOncall filtered by the status column
 * @method     ChildCareDutyplanOncall findOneByHistory(string $history) Return the first ChildCareDutyplanOncall filtered by the history column
 * @method     ChildCareDutyplanOncall findOneByModifyId(string $modify_id) Return the first ChildCareDutyplanOncall filtered by the modify_id column
 * @method     ChildCareDutyplanOncall findOneByModifyTime(string $modify_time) Return the first ChildCareDutyplanOncall filtered by the modify_time column
 * @method     ChildCareDutyplanOncall findOneByCreateId(string $create_id) Return the first ChildCareDutyplanOncall filtered by the create_id column
 * @method     ChildCareDutyplanOncall findOneByCreateTime(string $create_time) Return the first ChildCareDutyplanOncall filtered by the create_time column *

 * @method     ChildCareDutyplanOncall requirePk($key, ConnectionInterface $con = null) Return the ChildCareDutyplanOncall by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOne(ConnectionInterface $con = null) Return the first ChildCareDutyplanOncall matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareDutyplanOncall requireOneByNr(string $nr) Return the first ChildCareDutyplanOncall filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByDeptNr(int $dept_nr) Return the first ChildCareDutyplanOncall filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByRoleNr(int $role_nr) Return the first ChildCareDutyplanOncall filtered by the role_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByYear(int $year) Return the first ChildCareDutyplanOncall filtered by the year column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByMonth(string $month) Return the first ChildCareDutyplanOncall filtered by the month column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByDuty1Txt(string $duty_1_txt) Return the first ChildCareDutyplanOncall filtered by the duty_1_txt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByDuty2Txt(string $duty_2_txt) Return the first ChildCareDutyplanOncall filtered by the duty_2_txt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByDuty1Pnr(string $duty_1_pnr) Return the first ChildCareDutyplanOncall filtered by the duty_1_pnr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByDuty2Pnr(string $duty_2_pnr) Return the first ChildCareDutyplanOncall filtered by the duty_2_pnr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByStatus(string $status) Return the first ChildCareDutyplanOncall filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByHistory(string $history) Return the first ChildCareDutyplanOncall filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByModifyId(string $modify_id) Return the first ChildCareDutyplanOncall filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByModifyTime(string $modify_time) Return the first ChildCareDutyplanOncall filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByCreateId(string $create_id) Return the first ChildCareDutyplanOncall filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDutyplanOncall requireOneByCreateTime(string $create_time) Return the first ChildCareDutyplanOncall filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareDutyplanOncall[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareDutyplanOncall objects based on current ModelCriteria
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByNr(string $nr) Return ChildCareDutyplanOncall objects filtered by the nr column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareDutyplanOncall objects filtered by the dept_nr column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByRoleNr(int $role_nr) Return ChildCareDutyplanOncall objects filtered by the role_nr column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByYear(int $year) Return ChildCareDutyplanOncall objects filtered by the year column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByMonth(string $month) Return ChildCareDutyplanOncall objects filtered by the month column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByDuty1Txt(string $duty_1_txt) Return ChildCareDutyplanOncall objects filtered by the duty_1_txt column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByDuty2Txt(string $duty_2_txt) Return ChildCareDutyplanOncall objects filtered by the duty_2_txt column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByDuty1Pnr(string $duty_1_pnr) Return ChildCareDutyplanOncall objects filtered by the duty_1_pnr column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByDuty2Pnr(string $duty_2_pnr) Return ChildCareDutyplanOncall objects filtered by the duty_2_pnr column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByStatus(string $status) Return ChildCareDutyplanOncall objects filtered by the status column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByHistory(string $history) Return ChildCareDutyplanOncall objects filtered by the history column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareDutyplanOncall objects filtered by the modify_id column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareDutyplanOncall objects filtered by the modify_time column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareDutyplanOncall objects filtered by the create_id column
 * @method     ChildCareDutyplanOncall[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareDutyplanOncall objects filtered by the create_time column
 * @method     ChildCareDutyplanOncall[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareDutyplanOncallQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareDutyplanOncallQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareDutyplanOncall', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareDutyplanOncallQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareDutyplanOncallQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareDutyplanOncallQuery) {
            return $criteria;
        }
        $query = new ChildCareDutyplanOncallQuery();
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
     * @return ChildCareDutyplanOncall|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareDutyplanOncallTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareDutyplanOncallTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareDutyplanOncall A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, dept_nr, role_nr, year, month, duty_1_txt, duty_2_txt, duty_1_pnr, duty_2_pnr, status, history, modify_id, modify_time, create_id, create_time FROM care_dutyplan_oncall WHERE nr = :p0';
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
            /** @var ChildCareDutyplanOncall $obj */
            $obj = new ChildCareDutyplanOncall();
            $obj->hydrate($row);
            CareDutyplanOncallTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareDutyplanOncall|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_DEPT_NR, $deptNr, $comparison);
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
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByRoleNr($roleNr = null, $comparison = null)
    {
        if (is_array($roleNr)) {
            $useMinMax = false;
            if (isset($roleNr['min'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_ROLE_NR, $roleNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roleNr['max'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_ROLE_NR, $roleNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_ROLE_NR, $roleNr, $comparison);
    }

    /**
     * Filter the query on the year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE year > 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the month column
     *
     * Example usage:
     * <code>
     * $query->filterByMonth('fooValue');   // WHERE month = 'fooValue'
     * $query->filterByMonth('%fooValue%', Criteria::LIKE); // WHERE month LIKE '%fooValue%'
     * </code>
     *
     * @param     string $month The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByMonth($month = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($month)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_MONTH, $month, $comparison);
    }

    /**
     * Filter the query on the duty_1_txt column
     *
     * Example usage:
     * <code>
     * $query->filterByDuty1Txt('fooValue');   // WHERE duty_1_txt = 'fooValue'
     * $query->filterByDuty1Txt('%fooValue%', Criteria::LIKE); // WHERE duty_1_txt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $duty1Txt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByDuty1Txt($duty1Txt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($duty1Txt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_DUTY_1_TXT, $duty1Txt, $comparison);
    }

    /**
     * Filter the query on the duty_2_txt column
     *
     * Example usage:
     * <code>
     * $query->filterByDuty2Txt('fooValue');   // WHERE duty_2_txt = 'fooValue'
     * $query->filterByDuty2Txt('%fooValue%', Criteria::LIKE); // WHERE duty_2_txt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $duty2Txt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByDuty2Txt($duty2Txt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($duty2Txt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_DUTY_2_TXT, $duty2Txt, $comparison);
    }

    /**
     * Filter the query on the duty_1_pnr column
     *
     * Example usage:
     * <code>
     * $query->filterByDuty1Pnr('fooValue');   // WHERE duty_1_pnr = 'fooValue'
     * $query->filterByDuty1Pnr('%fooValue%', Criteria::LIKE); // WHERE duty_1_pnr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $duty1Pnr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByDuty1Pnr($duty1Pnr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($duty1Pnr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_DUTY_1_PNR, $duty1Pnr, $comparison);
    }

    /**
     * Filter the query on the duty_2_pnr column
     *
     * Example usage:
     * <code>
     * $query->filterByDuty2Pnr('fooValue');   // WHERE duty_2_pnr = 'fooValue'
     * $query->filterByDuty2Pnr('%fooValue%', Criteria::LIKE); // WHERE duty_2_pnr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $duty2Pnr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByDuty2Pnr($duty2Pnr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($duty2Pnr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_DUTY_2_PNR, $duty2Pnr, $comparison);
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
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareDutyplanOncallTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDutyplanOncallTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareDutyplanOncall $careDutyplanOncall Object to remove from the list of results
     *
     * @return $this|ChildCareDutyplanOncallQuery The current query, for fluid interface
     */
    public function prune($careDutyplanOncall = null)
    {
        if ($careDutyplanOncall) {
            $this->addUsingAlias(CareDutyplanOncallTableMap::COL_NR, $careDutyplanOncall->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_dutyplan_oncall table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDutyplanOncallTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareDutyplanOncallTableMap::clearInstancePool();
            CareDutyplanOncallTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDutyplanOncallTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareDutyplanOncallTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareDutyplanOncallTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareDutyplanOncallTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareDutyplanOncallQuery
