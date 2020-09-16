<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareMedReport as ChildCareMedReport;
use CareMd\CareMd\CareMedReportQuery as ChildCareMedReportQuery;
use CareMd\CareMd\Map\CareMedReportTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_med_report' table.
 *
 *
 *
 * @method     ChildCareMedReportQuery orderByReportNr($order = Criteria::ASC) Order by the report_nr column
 * @method     ChildCareMedReportQuery orderByDept($order = Criteria::ASC) Order by the dept column
 * @method     ChildCareMedReportQuery orderByReport($order = Criteria::ASC) Order by the report column
 * @method     ChildCareMedReportQuery orderByReporter($order = Criteria::ASC) Order by the reporter column
 * @method     ChildCareMedReportQuery orderByIdNr($order = Criteria::ASC) Order by the id_nr column
 * @method     ChildCareMedReportQuery orderByReportDate($order = Criteria::ASC) Order by the report_date column
 * @method     ChildCareMedReportQuery orderByReportTime($order = Criteria::ASC) Order by the report_time column
 * @method     ChildCareMedReportQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareMedReportQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareMedReportQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareMedReportQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareMedReportQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareMedReportQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareMedReportQuery groupByReportNr() Group by the report_nr column
 * @method     ChildCareMedReportQuery groupByDept() Group by the dept column
 * @method     ChildCareMedReportQuery groupByReport() Group by the report column
 * @method     ChildCareMedReportQuery groupByReporter() Group by the reporter column
 * @method     ChildCareMedReportQuery groupByIdNr() Group by the id_nr column
 * @method     ChildCareMedReportQuery groupByReportDate() Group by the report_date column
 * @method     ChildCareMedReportQuery groupByReportTime() Group by the report_time column
 * @method     ChildCareMedReportQuery groupByStatus() Group by the status column
 * @method     ChildCareMedReportQuery groupByHistory() Group by the history column
 * @method     ChildCareMedReportQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareMedReportQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareMedReportQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareMedReportQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareMedReportQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareMedReportQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareMedReportQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareMedReportQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareMedReportQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareMedReportQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareMedReport findOne(ConnectionInterface $con = null) Return the first ChildCareMedReport matching the query
 * @method     ChildCareMedReport findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareMedReport matching the query, or a new ChildCareMedReport object populated from the query conditions when no match is found
 *
 * @method     ChildCareMedReport findOneByReportNr(int $report_nr) Return the first ChildCareMedReport filtered by the report_nr column
 * @method     ChildCareMedReport findOneByDept(string $dept) Return the first ChildCareMedReport filtered by the dept column
 * @method     ChildCareMedReport findOneByReport(string $report) Return the first ChildCareMedReport filtered by the report column
 * @method     ChildCareMedReport findOneByReporter(string $reporter) Return the first ChildCareMedReport filtered by the reporter column
 * @method     ChildCareMedReport findOneByIdNr(string $id_nr) Return the first ChildCareMedReport filtered by the id_nr column
 * @method     ChildCareMedReport findOneByReportDate(string $report_date) Return the first ChildCareMedReport filtered by the report_date column
 * @method     ChildCareMedReport findOneByReportTime(string $report_time) Return the first ChildCareMedReport filtered by the report_time column
 * @method     ChildCareMedReport findOneByStatus(string $status) Return the first ChildCareMedReport filtered by the status column
 * @method     ChildCareMedReport findOneByHistory(string $history) Return the first ChildCareMedReport filtered by the history column
 * @method     ChildCareMedReport findOneByModifyId(string $modify_id) Return the first ChildCareMedReport filtered by the modify_id column
 * @method     ChildCareMedReport findOneByModifyTime(string $modify_time) Return the first ChildCareMedReport filtered by the modify_time column
 * @method     ChildCareMedReport findOneByCreateId(string $create_id) Return the first ChildCareMedReport filtered by the create_id column
 * @method     ChildCareMedReport findOneByCreateTime(string $create_time) Return the first ChildCareMedReport filtered by the create_time column *

 * @method     ChildCareMedReport requirePk($key, ConnectionInterface $con = null) Return the ChildCareMedReport by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOne(ConnectionInterface $con = null) Return the first ChildCareMedReport matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMedReport requireOneByReportNr(int $report_nr) Return the first ChildCareMedReport filtered by the report_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByDept(string $dept) Return the first ChildCareMedReport filtered by the dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByReport(string $report) Return the first ChildCareMedReport filtered by the report column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByReporter(string $reporter) Return the first ChildCareMedReport filtered by the reporter column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByIdNr(string $id_nr) Return the first ChildCareMedReport filtered by the id_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByReportDate(string $report_date) Return the first ChildCareMedReport filtered by the report_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByReportTime(string $report_time) Return the first ChildCareMedReport filtered by the report_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByStatus(string $status) Return the first ChildCareMedReport filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByHistory(string $history) Return the first ChildCareMedReport filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByModifyId(string $modify_id) Return the first ChildCareMedReport filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByModifyTime(string $modify_time) Return the first ChildCareMedReport filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByCreateId(string $create_id) Return the first ChildCareMedReport filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedReport requireOneByCreateTime(string $create_time) Return the first ChildCareMedReport filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMedReport[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareMedReport objects based on current ModelCriteria
 * @method     ChildCareMedReport[]|ObjectCollection findByReportNr(int $report_nr) Return ChildCareMedReport objects filtered by the report_nr column
 * @method     ChildCareMedReport[]|ObjectCollection findByDept(string $dept) Return ChildCareMedReport objects filtered by the dept column
 * @method     ChildCareMedReport[]|ObjectCollection findByReport(string $report) Return ChildCareMedReport objects filtered by the report column
 * @method     ChildCareMedReport[]|ObjectCollection findByReporter(string $reporter) Return ChildCareMedReport objects filtered by the reporter column
 * @method     ChildCareMedReport[]|ObjectCollection findByIdNr(string $id_nr) Return ChildCareMedReport objects filtered by the id_nr column
 * @method     ChildCareMedReport[]|ObjectCollection findByReportDate(string $report_date) Return ChildCareMedReport objects filtered by the report_date column
 * @method     ChildCareMedReport[]|ObjectCollection findByReportTime(string $report_time) Return ChildCareMedReport objects filtered by the report_time column
 * @method     ChildCareMedReport[]|ObjectCollection findByStatus(string $status) Return ChildCareMedReport objects filtered by the status column
 * @method     ChildCareMedReport[]|ObjectCollection findByHistory(string $history) Return ChildCareMedReport objects filtered by the history column
 * @method     ChildCareMedReport[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareMedReport objects filtered by the modify_id column
 * @method     ChildCareMedReport[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareMedReport objects filtered by the modify_time column
 * @method     ChildCareMedReport[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareMedReport objects filtered by the create_id column
 * @method     ChildCareMedReport[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareMedReport objects filtered by the create_time column
 * @method     ChildCareMedReport[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareMedReportQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareMedReportQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareMedReport', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareMedReportQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareMedReportQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareMedReportQuery) {
            return $criteria;
        }
        $query = new ChildCareMedReportQuery();
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
     * @return ChildCareMedReport|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareMedReportTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareMedReportTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareMedReport A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT report_nr, dept, report, reporter, id_nr, report_date, report_time, status, history, modify_id, modify_time, create_id, create_time FROM care_med_report WHERE report_nr = :p0';
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
            /** @var ChildCareMedReport $obj */
            $obj = new ChildCareMedReport();
            $obj->hydrate($row);
            CareMedReportTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareMedReport|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByReportNr($reportNr = null, $comparison = null)
    {
        if (is_array($reportNr)) {
            $useMinMax = false;
            if (isset($reportNr['min'])) {
                $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_NR, $reportNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reportNr['max'])) {
                $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_NR, $reportNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_NR, $reportNr, $comparison);
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
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByDept($dept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_DEPT, $dept, $comparison);
    }

    /**
     * Filter the query on the report column
     *
     * Example usage:
     * <code>
     * $query->filterByReport('fooValue');   // WHERE report = 'fooValue'
     * $query->filterByReport('%fooValue%', Criteria::LIKE); // WHERE report LIKE '%fooValue%'
     * </code>
     *
     * @param     string $report The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByReport($report = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($report)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_REPORT, $report, $comparison);
    }

    /**
     * Filter the query on the reporter column
     *
     * Example usage:
     * <code>
     * $query->filterByReporter('fooValue');   // WHERE reporter = 'fooValue'
     * $query->filterByReporter('%fooValue%', Criteria::LIKE); // WHERE reporter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reporter The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByReporter($reporter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reporter)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_REPORTER, $reporter, $comparison);
    }

    /**
     * Filter the query on the id_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByIdNr('fooValue');   // WHERE id_nr = 'fooValue'
     * $query->filterByIdNr('%fooValue%', Criteria::LIKE); // WHERE id_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByIdNr($idNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_ID_NR, $idNr, $comparison);
    }

    /**
     * Filter the query on the report_date column
     *
     * Example usage:
     * <code>
     * $query->filterByReportDate('2011-03-14'); // WHERE report_date = '2011-03-14'
     * $query->filterByReportDate('now'); // WHERE report_date = '2011-03-14'
     * $query->filterByReportDate(array('max' => 'yesterday')); // WHERE report_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $reportDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByReportDate($reportDate = null, $comparison = null)
    {
        if (is_array($reportDate)) {
            $useMinMax = false;
            if (isset($reportDate['min'])) {
                $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_DATE, $reportDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reportDate['max'])) {
                $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_DATE, $reportDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_DATE, $reportDate, $comparison);
    }

    /**
     * Filter the query on the report_time column
     *
     * Example usage:
     * <code>
     * $query->filterByReportTime('2011-03-14'); // WHERE report_time = '2011-03-14'
     * $query->filterByReportTime('now'); // WHERE report_time = '2011-03-14'
     * $query->filterByReportTime(array('max' => 'yesterday')); // WHERE report_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $reportTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByReportTime($reportTime = null, $comparison = null)
    {
        if (is_array($reportTime)) {
            $useMinMax = false;
            if (isset($reportTime['min'])) {
                $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_TIME, $reportTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reportTime['max'])) {
                $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_TIME, $reportTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_TIME, $reportTime, $comparison);
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
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareMedReportTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareMedReportTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareMedReportTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareMedReportTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedReportTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareMedReport $careMedReport Object to remove from the list of results
     *
     * @return $this|ChildCareMedReportQuery The current query, for fluid interface
     */
    public function prune($careMedReport = null)
    {
        if ($careMedReport) {
            $this->addUsingAlias(CareMedReportTableMap::COL_REPORT_NR, $careMedReport->getReportNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_med_report table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedReportTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareMedReportTableMap::clearInstancePool();
            CareMedReportTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedReportTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareMedReportTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareMedReportTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareMedReportTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareMedReportQuery
