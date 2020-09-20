<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareStandbyDutyReport as ChildCareStandbyDutyReport;
use CareMd\CareMd\CareStandbyDutyReportQuery as ChildCareStandbyDutyReportQuery;
use CareMd\CareMd\Map\CareStandbyDutyReportTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_standby_duty_report' table.
 *
 *
 *
 * @method     ChildCareStandbyDutyReportQuery orderByReportNr($order = Criteria::ASC) Order by the report_nr column
 * @method     ChildCareStandbyDutyReportQuery orderByDept($order = Criteria::ASC) Order by the dept column
 * @method     ChildCareStandbyDutyReportQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareStandbyDutyReportQuery orderByStandbyName($order = Criteria::ASC) Order by the standby_name column
 * @method     ChildCareStandbyDutyReportQuery orderByStandbyStart($order = Criteria::ASC) Order by the standby_start column
 * @method     ChildCareStandbyDutyReportQuery orderByStandbyEnd($order = Criteria::ASC) Order by the standby_end column
 * @method     ChildCareStandbyDutyReportQuery orderByOncallName($order = Criteria::ASC) Order by the oncall_name column
 * @method     ChildCareStandbyDutyReportQuery orderByOncallStart($order = Criteria::ASC) Order by the oncall_start column
 * @method     ChildCareStandbyDutyReportQuery orderByOncallEnd($order = Criteria::ASC) Order by the oncall_end column
 * @method     ChildCareStandbyDutyReportQuery orderByOpRoom($order = Criteria::ASC) Order by the op_room column
 * @method     ChildCareStandbyDutyReportQuery orderByDiagnosisTherapy($order = Criteria::ASC) Order by the diagnosis_therapy column
 * @method     ChildCareStandbyDutyReportQuery orderByEncoding($order = Criteria::ASC) Order by the encoding column
 * @method     ChildCareStandbyDutyReportQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareStandbyDutyReportQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareStandbyDutyReportQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareStandbyDutyReportQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareStandbyDutyReportQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareStandbyDutyReportQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareStandbyDutyReportQuery groupByReportNr() Group by the report_nr column
 * @method     ChildCareStandbyDutyReportQuery groupByDept() Group by the dept column
 * @method     ChildCareStandbyDutyReportQuery groupByDate() Group by the date column
 * @method     ChildCareStandbyDutyReportQuery groupByStandbyName() Group by the standby_name column
 * @method     ChildCareStandbyDutyReportQuery groupByStandbyStart() Group by the standby_start column
 * @method     ChildCareStandbyDutyReportQuery groupByStandbyEnd() Group by the standby_end column
 * @method     ChildCareStandbyDutyReportQuery groupByOncallName() Group by the oncall_name column
 * @method     ChildCareStandbyDutyReportQuery groupByOncallStart() Group by the oncall_start column
 * @method     ChildCareStandbyDutyReportQuery groupByOncallEnd() Group by the oncall_end column
 * @method     ChildCareStandbyDutyReportQuery groupByOpRoom() Group by the op_room column
 * @method     ChildCareStandbyDutyReportQuery groupByDiagnosisTherapy() Group by the diagnosis_therapy column
 * @method     ChildCareStandbyDutyReportQuery groupByEncoding() Group by the encoding column
 * @method     ChildCareStandbyDutyReportQuery groupByStatus() Group by the status column
 * @method     ChildCareStandbyDutyReportQuery groupByHistory() Group by the history column
 * @method     ChildCareStandbyDutyReportQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareStandbyDutyReportQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareStandbyDutyReportQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareStandbyDutyReportQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareStandbyDutyReportQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareStandbyDutyReportQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareStandbyDutyReportQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareStandbyDutyReportQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareStandbyDutyReportQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareStandbyDutyReportQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareStandbyDutyReport findOne(ConnectionInterface $con = null) Return the first ChildCareStandbyDutyReport matching the query
 * @method     ChildCareStandbyDutyReport findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareStandbyDutyReport matching the query, or a new ChildCareStandbyDutyReport object populated from the query conditions when no match is found
 *
 * @method     ChildCareStandbyDutyReport findOneByReportNr(int $report_nr) Return the first ChildCareStandbyDutyReport filtered by the report_nr column
 * @method     ChildCareStandbyDutyReport findOneByDept(string $dept) Return the first ChildCareStandbyDutyReport filtered by the dept column
 * @method     ChildCareStandbyDutyReport findOneByDate(string $date) Return the first ChildCareStandbyDutyReport filtered by the date column
 * @method     ChildCareStandbyDutyReport findOneByStandbyName(string $standby_name) Return the first ChildCareStandbyDutyReport filtered by the standby_name column
 * @method     ChildCareStandbyDutyReport findOneByStandbyStart(string $standby_start) Return the first ChildCareStandbyDutyReport filtered by the standby_start column
 * @method     ChildCareStandbyDutyReport findOneByStandbyEnd(string $standby_end) Return the first ChildCareStandbyDutyReport filtered by the standby_end column
 * @method     ChildCareStandbyDutyReport findOneByOncallName(string $oncall_name) Return the first ChildCareStandbyDutyReport filtered by the oncall_name column
 * @method     ChildCareStandbyDutyReport findOneByOncallStart(string $oncall_start) Return the first ChildCareStandbyDutyReport filtered by the oncall_start column
 * @method     ChildCareStandbyDutyReport findOneByOncallEnd(string $oncall_end) Return the first ChildCareStandbyDutyReport filtered by the oncall_end column
 * @method     ChildCareStandbyDutyReport findOneByOpRoom(string $op_room) Return the first ChildCareStandbyDutyReport filtered by the op_room column
 * @method     ChildCareStandbyDutyReport findOneByDiagnosisTherapy(string $diagnosis_therapy) Return the first ChildCareStandbyDutyReport filtered by the diagnosis_therapy column
 * @method     ChildCareStandbyDutyReport findOneByEncoding(string $encoding) Return the first ChildCareStandbyDutyReport filtered by the encoding column
 * @method     ChildCareStandbyDutyReport findOneByStatus(string $status) Return the first ChildCareStandbyDutyReport filtered by the status column
 * @method     ChildCareStandbyDutyReport findOneByHistory(string $history) Return the first ChildCareStandbyDutyReport filtered by the history column
 * @method     ChildCareStandbyDutyReport findOneByModifyId(string $modify_id) Return the first ChildCareStandbyDutyReport filtered by the modify_id column
 * @method     ChildCareStandbyDutyReport findOneByModifyTime(string $modify_time) Return the first ChildCareStandbyDutyReport filtered by the modify_time column
 * @method     ChildCareStandbyDutyReport findOneByCreateId(string $create_id) Return the first ChildCareStandbyDutyReport filtered by the create_id column
 * @method     ChildCareStandbyDutyReport findOneByCreateTime(string $create_time) Return the first ChildCareStandbyDutyReport filtered by the create_time column *

 * @method     ChildCareStandbyDutyReport requirePk($key, ConnectionInterface $con = null) Return the ChildCareStandbyDutyReport by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOne(ConnectionInterface $con = null) Return the first ChildCareStandbyDutyReport matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareStandbyDutyReport requireOneByReportNr(int $report_nr) Return the first ChildCareStandbyDutyReport filtered by the report_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByDept(string $dept) Return the first ChildCareStandbyDutyReport filtered by the dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByDate(string $date) Return the first ChildCareStandbyDutyReport filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByStandbyName(string $standby_name) Return the first ChildCareStandbyDutyReport filtered by the standby_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByStandbyStart(string $standby_start) Return the first ChildCareStandbyDutyReport filtered by the standby_start column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByStandbyEnd(string $standby_end) Return the first ChildCareStandbyDutyReport filtered by the standby_end column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByOncallName(string $oncall_name) Return the first ChildCareStandbyDutyReport filtered by the oncall_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByOncallStart(string $oncall_start) Return the first ChildCareStandbyDutyReport filtered by the oncall_start column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByOncallEnd(string $oncall_end) Return the first ChildCareStandbyDutyReport filtered by the oncall_end column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByOpRoom(string $op_room) Return the first ChildCareStandbyDutyReport filtered by the op_room column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByDiagnosisTherapy(string $diagnosis_therapy) Return the first ChildCareStandbyDutyReport filtered by the diagnosis_therapy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByEncoding(string $encoding) Return the first ChildCareStandbyDutyReport filtered by the encoding column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByStatus(string $status) Return the first ChildCareStandbyDutyReport filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByHistory(string $history) Return the first ChildCareStandbyDutyReport filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByModifyId(string $modify_id) Return the first ChildCareStandbyDutyReport filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByModifyTime(string $modify_time) Return the first ChildCareStandbyDutyReport filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByCreateId(string $create_id) Return the first ChildCareStandbyDutyReport filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareStandbyDutyReport requireOneByCreateTime(string $create_time) Return the first ChildCareStandbyDutyReport filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareStandbyDutyReport objects based on current ModelCriteria
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByReportNr(int $report_nr) Return ChildCareStandbyDutyReport objects filtered by the report_nr column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByDept(string $dept) Return ChildCareStandbyDutyReport objects filtered by the dept column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByDate(string $date) Return ChildCareStandbyDutyReport objects filtered by the date column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByStandbyName(string $standby_name) Return ChildCareStandbyDutyReport objects filtered by the standby_name column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByStandbyStart(string $standby_start) Return ChildCareStandbyDutyReport objects filtered by the standby_start column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByStandbyEnd(string $standby_end) Return ChildCareStandbyDutyReport objects filtered by the standby_end column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByOncallName(string $oncall_name) Return ChildCareStandbyDutyReport objects filtered by the oncall_name column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByOncallStart(string $oncall_start) Return ChildCareStandbyDutyReport objects filtered by the oncall_start column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByOncallEnd(string $oncall_end) Return ChildCareStandbyDutyReport objects filtered by the oncall_end column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByOpRoom(string $op_room) Return ChildCareStandbyDutyReport objects filtered by the op_room column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByDiagnosisTherapy(string $diagnosis_therapy) Return ChildCareStandbyDutyReport objects filtered by the diagnosis_therapy column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByEncoding(string $encoding) Return ChildCareStandbyDutyReport objects filtered by the encoding column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByStatus(string $status) Return ChildCareStandbyDutyReport objects filtered by the status column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByHistory(string $history) Return ChildCareStandbyDutyReport objects filtered by the history column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareStandbyDutyReport objects filtered by the modify_id column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareStandbyDutyReport objects filtered by the modify_time column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareStandbyDutyReport objects filtered by the create_id column
 * @method     ChildCareStandbyDutyReport[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareStandbyDutyReport objects filtered by the create_time column
 * @method     ChildCareStandbyDutyReport[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareStandbyDutyReportQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareStandbyDutyReportQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareStandbyDutyReport', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareStandbyDutyReportQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareStandbyDutyReportQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareStandbyDutyReportQuery) {
            return $criteria;
        }
        $query = new ChildCareStandbyDutyReportQuery();
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
     * @return ChildCareStandbyDutyReport|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareStandbyDutyReportTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareStandbyDutyReportTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareStandbyDutyReport A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT report_nr, dept, date, standby_name, standby_start, standby_end, oncall_name, oncall_start, oncall_end, op_room, diagnosis_therapy, encoding, status, history, modify_id, modify_time, create_id, create_time FROM care_standby_duty_report WHERE report_nr = :p0';
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
            /** @var ChildCareStandbyDutyReport $obj */
            $obj = new ChildCareStandbyDutyReport();
            $obj->hydrate($row);
            CareStandbyDutyReportTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareStandbyDutyReport|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_REPORT_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_REPORT_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the report_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByReportNr(1234); // WHERE report_nr = 1234
     * $query->filterByReportNr(array(12, 34)); // WHERE report_nr IN (12, 34)
     * $query->filterByReportNr(array('min' => 12)); // WHERE report_nr > 12
     * </code>
     *
     * @param     mixed $reportNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByReportNr($reportNr = null, $comparison = null)
    {
        if (is_array($reportNr)) {
            $useMinMax = false;
            if (isset($reportNr['min'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_REPORT_NR, $reportNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reportNr['max'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_REPORT_NR, $reportNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_REPORT_NR, $reportNr, $comparison);
    }

    /**
     * Filter the query on the dept column
     *
     * Example usage:
     * <code>
     * $query->filterByDept('fooValue');   // WHERE dept = 'fooValue'
     * $query->filterByDept('%fooValue%', Criteria::LIKE); // WHERE dept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dept The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByDept($dept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_DEPT, $dept, $comparison);
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
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the standby_name column
     *
     * Example usage:
     * <code>
     * $query->filterByStandbyName('fooValue');   // WHERE standby_name = 'fooValue'
     * $query->filterByStandbyName('%fooValue%', Criteria::LIKE); // WHERE standby_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $standbyName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByStandbyName($standbyName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($standbyName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_STANDBY_NAME, $standbyName, $comparison);
    }

    /**
     * Filter the query on the standby_start column
     *
     * Example usage:
     * <code>
     * $query->filterByStandbyStart('2011-03-14'); // WHERE standby_start = '2011-03-14'
     * $query->filterByStandbyStart('now'); // WHERE standby_start = '2011-03-14'
     * $query->filterByStandbyStart(array('max' => 'yesterday')); // WHERE standby_start > '2011-03-13'
     * </code>
     *
     * @param     mixed $standbyStart The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByStandbyStart($standbyStart = null, $comparison = null)
    {
        if (is_array($standbyStart)) {
            $useMinMax = false;
            if (isset($standbyStart['min'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_STANDBY_START, $standbyStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($standbyStart['max'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_STANDBY_START, $standbyStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_STANDBY_START, $standbyStart, $comparison);
    }

    /**
     * Filter the query on the standby_end column
     *
     * Example usage:
     * <code>
     * $query->filterByStandbyEnd('2011-03-14'); // WHERE standby_end = '2011-03-14'
     * $query->filterByStandbyEnd('now'); // WHERE standby_end = '2011-03-14'
     * $query->filterByStandbyEnd(array('max' => 'yesterday')); // WHERE standby_end > '2011-03-13'
     * </code>
     *
     * @param     mixed $standbyEnd The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByStandbyEnd($standbyEnd = null, $comparison = null)
    {
        if (is_array($standbyEnd)) {
            $useMinMax = false;
            if (isset($standbyEnd['min'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_STANDBY_END, $standbyEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($standbyEnd['max'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_STANDBY_END, $standbyEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_STANDBY_END, $standbyEnd, $comparison);
    }

    /**
     * Filter the query on the oncall_name column
     *
     * Example usage:
     * <code>
     * $query->filterByOncallName('fooValue');   // WHERE oncall_name = 'fooValue'
     * $query->filterByOncallName('%fooValue%', Criteria::LIKE); // WHERE oncall_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oncallName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByOncallName($oncallName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oncallName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_ONCALL_NAME, $oncallName, $comparison);
    }

    /**
     * Filter the query on the oncall_start column
     *
     * Example usage:
     * <code>
     * $query->filterByOncallStart('2011-03-14'); // WHERE oncall_start = '2011-03-14'
     * $query->filterByOncallStart('now'); // WHERE oncall_start = '2011-03-14'
     * $query->filterByOncallStart(array('max' => 'yesterday')); // WHERE oncall_start > '2011-03-13'
     * </code>
     *
     * @param     mixed $oncallStart The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByOncallStart($oncallStart = null, $comparison = null)
    {
        if (is_array($oncallStart)) {
            $useMinMax = false;
            if (isset($oncallStart['min'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_ONCALL_START, $oncallStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oncallStart['max'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_ONCALL_START, $oncallStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_ONCALL_START, $oncallStart, $comparison);
    }

    /**
     * Filter the query on the oncall_end column
     *
     * Example usage:
     * <code>
     * $query->filterByOncallEnd('2011-03-14'); // WHERE oncall_end = '2011-03-14'
     * $query->filterByOncallEnd('now'); // WHERE oncall_end = '2011-03-14'
     * $query->filterByOncallEnd(array('max' => 'yesterday')); // WHERE oncall_end > '2011-03-13'
     * </code>
     *
     * @param     mixed $oncallEnd The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByOncallEnd($oncallEnd = null, $comparison = null)
    {
        if (is_array($oncallEnd)) {
            $useMinMax = false;
            if (isset($oncallEnd['min'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_ONCALL_END, $oncallEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oncallEnd['max'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_ONCALL_END, $oncallEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_ONCALL_END, $oncallEnd, $comparison);
    }

    /**
     * Filter the query on the op_room column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRoom('fooValue');   // WHERE op_room = 'fooValue'
     * $query->filterByOpRoom('%fooValue%', Criteria::LIKE); // WHERE op_room LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opRoom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByOpRoom($opRoom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opRoom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_OP_ROOM, $opRoom, $comparison);
    }

    /**
     * Filter the query on the diagnosis_therapy column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosisTherapy('fooValue');   // WHERE diagnosis_therapy = 'fooValue'
     * $query->filterByDiagnosisTherapy('%fooValue%', Criteria::LIKE); // WHERE diagnosis_therapy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosisTherapy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByDiagnosisTherapy($diagnosisTherapy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosisTherapy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_DIAGNOSIS_THERAPY, $diagnosisTherapy, $comparison);
    }

    /**
     * Filter the query on the encoding column
     *
     * Example usage:
     * <code>
     * $query->filterByEncoding('fooValue');   // WHERE encoding = 'fooValue'
     * $query->filterByEncoding('%fooValue%', Criteria::LIKE); // WHERE encoding LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encoding The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByEncoding($encoding = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encoding)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_ENCODING, $encoding, $comparison);
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
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareStandbyDutyReport $careStandbyDutyReport Object to remove from the list of results
     *
     * @return $this|ChildCareStandbyDutyReportQuery The current query, for fluid interface
     */
    public function prune($careStandbyDutyReport = null)
    {
        if ($careStandbyDutyReport) {
            $this->addUsingAlias(CareStandbyDutyReportTableMap::COL_REPORT_NR, $careStandbyDutyReport->getReportNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_standby_duty_report table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareStandbyDutyReportTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareStandbyDutyReportTableMap::clearInstancePool();
            CareStandbyDutyReportTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareStandbyDutyReportTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareStandbyDutyReportTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareStandbyDutyReportTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareStandbyDutyReportTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareStandbyDutyReportQuery
