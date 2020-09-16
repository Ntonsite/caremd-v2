<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterDiagnosticsReport as ChildCareEncounterDiagnosticsReport;
use CareMd\CareMd\CareEncounterDiagnosticsReportQuery as ChildCareEncounterDiagnosticsReportQuery;
use CareMd\CareMd\Map\CareEncounterDiagnosticsReportTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_diagnostics_report' table.
 *
 *
 *
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByItemNr($order = Criteria::ASC) Order by the item_nr column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByReportNr($order = Criteria::ASC) Order by the report_nr column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByReportingDeptNr($order = Criteria::ASC) Order by the reporting_dept_nr column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByReportingDept($order = Criteria::ASC) Order by the reporting_dept column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByReportDate($order = Criteria::ASC) Order by the report_date column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByReportTime($order = Criteria::ASC) Order by the report_time column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByScriptCall($order = Criteria::ASC) Order by the script_call column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByOpenStatus($order = Criteria::ASC) Order by the open_status column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByIsReviewed($order = Criteria::ASC) Order by the is_reviewed column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByReviewerComments($order = Criteria::ASC) Order by the reviewer_comments column
 * @method     ChildCareEncounterDiagnosticsReportQuery orderByReviewedBy($order = Criteria::ASC) Order by the reviewed_by column
 *
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByItemNr() Group by the item_nr column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByReportNr() Group by the report_nr column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByReportingDeptNr() Group by the reporting_dept_nr column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByReportingDept() Group by the reporting_dept column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByReportDate() Group by the report_date column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByReportTime() Group by the report_time column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByScriptCall() Group by the script_call column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByOpenStatus() Group by the open_status column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByIsReviewed() Group by the is_reviewed column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByReviewerComments() Group by the reviewer_comments column
 * @method     ChildCareEncounterDiagnosticsReportQuery groupByReviewedBy() Group by the reviewed_by column
 *
 * @method     ChildCareEncounterDiagnosticsReportQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterDiagnosticsReportQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterDiagnosticsReportQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterDiagnosticsReportQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterDiagnosticsReportQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterDiagnosticsReportQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterDiagnosticsReport findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterDiagnosticsReport matching the query
 * @method     ChildCareEncounterDiagnosticsReport findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterDiagnosticsReport matching the query, or a new ChildCareEncounterDiagnosticsReport object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterDiagnosticsReport findOneByItemNr(int $item_nr) Return the first ChildCareEncounterDiagnosticsReport filtered by the item_nr column
 * @method     ChildCareEncounterDiagnosticsReport findOneByReportNr(int $report_nr) Return the first ChildCareEncounterDiagnosticsReport filtered by the report_nr column
 * @method     ChildCareEncounterDiagnosticsReport findOneByReportingDeptNr(int $reporting_dept_nr) Return the first ChildCareEncounterDiagnosticsReport filtered by the reporting_dept_nr column
 * @method     ChildCareEncounterDiagnosticsReport findOneByReportingDept(string $reporting_dept) Return the first ChildCareEncounterDiagnosticsReport filtered by the reporting_dept column
 * @method     ChildCareEncounterDiagnosticsReport findOneByReportDate(string $report_date) Return the first ChildCareEncounterDiagnosticsReport filtered by the report_date column
 * @method     ChildCareEncounterDiagnosticsReport findOneByReportTime(string $report_time) Return the first ChildCareEncounterDiagnosticsReport filtered by the report_time column
 * @method     ChildCareEncounterDiagnosticsReport findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterDiagnosticsReport filtered by the encounter_nr column
 * @method     ChildCareEncounterDiagnosticsReport findOneByScriptCall(string $script_call) Return the first ChildCareEncounterDiagnosticsReport filtered by the script_call column
 * @method     ChildCareEncounterDiagnosticsReport findOneByStatus(string $status) Return the first ChildCareEncounterDiagnosticsReport filtered by the status column
 * @method     ChildCareEncounterDiagnosticsReport findOneByHistory(string $history) Return the first ChildCareEncounterDiagnosticsReport filtered by the history column
 * @method     ChildCareEncounterDiagnosticsReport findOneByModifyId(string $modify_id) Return the first ChildCareEncounterDiagnosticsReport filtered by the modify_id column
 * @method     ChildCareEncounterDiagnosticsReport findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterDiagnosticsReport filtered by the modify_time column
 * @method     ChildCareEncounterDiagnosticsReport findOneByCreateId(string $create_id) Return the first ChildCareEncounterDiagnosticsReport filtered by the create_id column
 * @method     ChildCareEncounterDiagnosticsReport findOneByCreateTime(string $create_time) Return the first ChildCareEncounterDiagnosticsReport filtered by the create_time column
 * @method     ChildCareEncounterDiagnosticsReport findOneByOpenStatus(boolean $open_status) Return the first ChildCareEncounterDiagnosticsReport filtered by the open_status column
 * @method     ChildCareEncounterDiagnosticsReport findOneByIsReviewed(boolean $is_reviewed) Return the first ChildCareEncounterDiagnosticsReport filtered by the is_reviewed column
 * @method     ChildCareEncounterDiagnosticsReport findOneByReviewerComments(string $reviewer_comments) Return the first ChildCareEncounterDiagnosticsReport filtered by the reviewer_comments column
 * @method     ChildCareEncounterDiagnosticsReport findOneByReviewedBy(string $reviewed_by) Return the first ChildCareEncounterDiagnosticsReport filtered by the reviewed_by column *

 * @method     ChildCareEncounterDiagnosticsReport requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterDiagnosticsReport by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterDiagnosticsReport matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterDiagnosticsReport requireOneByItemNr(int $item_nr) Return the first ChildCareEncounterDiagnosticsReport filtered by the item_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByReportNr(int $report_nr) Return the first ChildCareEncounterDiagnosticsReport filtered by the report_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByReportingDeptNr(int $reporting_dept_nr) Return the first ChildCareEncounterDiagnosticsReport filtered by the reporting_dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByReportingDept(string $reporting_dept) Return the first ChildCareEncounterDiagnosticsReport filtered by the reporting_dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByReportDate(string $report_date) Return the first ChildCareEncounterDiagnosticsReport filtered by the report_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByReportTime(string $report_time) Return the first ChildCareEncounterDiagnosticsReport filtered by the report_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterDiagnosticsReport filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByScriptCall(string $script_call) Return the first ChildCareEncounterDiagnosticsReport filtered by the script_call column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByStatus(string $status) Return the first ChildCareEncounterDiagnosticsReport filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByHistory(string $history) Return the first ChildCareEncounterDiagnosticsReport filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterDiagnosticsReport filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterDiagnosticsReport filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByCreateId(string $create_id) Return the first ChildCareEncounterDiagnosticsReport filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterDiagnosticsReport filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByOpenStatus(boolean $open_status) Return the first ChildCareEncounterDiagnosticsReport filtered by the open_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByIsReviewed(boolean $is_reviewed) Return the first ChildCareEncounterDiagnosticsReport filtered by the is_reviewed column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByReviewerComments(string $reviewer_comments) Return the first ChildCareEncounterDiagnosticsReport filtered by the reviewer_comments column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosticsReport requireOneByReviewedBy(string $reviewed_by) Return the first ChildCareEncounterDiagnosticsReport filtered by the reviewed_by column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterDiagnosticsReport objects based on current ModelCriteria
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByItemNr(int $item_nr) Return ChildCareEncounterDiagnosticsReport objects filtered by the item_nr column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByReportNr(int $report_nr) Return ChildCareEncounterDiagnosticsReport objects filtered by the report_nr column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByReportingDeptNr(int $reporting_dept_nr) Return ChildCareEncounterDiagnosticsReport objects filtered by the reporting_dept_nr column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByReportingDept(string $reporting_dept) Return ChildCareEncounterDiagnosticsReport objects filtered by the reporting_dept column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByReportDate(string $report_date) Return ChildCareEncounterDiagnosticsReport objects filtered by the report_date column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByReportTime(string $report_time) Return ChildCareEncounterDiagnosticsReport objects filtered by the report_time column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterDiagnosticsReport objects filtered by the encounter_nr column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByScriptCall(string $script_call) Return ChildCareEncounterDiagnosticsReport objects filtered by the script_call column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterDiagnosticsReport objects filtered by the status column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterDiagnosticsReport objects filtered by the history column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterDiagnosticsReport objects filtered by the modify_id column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterDiagnosticsReport objects filtered by the modify_time column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterDiagnosticsReport objects filtered by the create_id column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterDiagnosticsReport objects filtered by the create_time column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByOpenStatus(boolean $open_status) Return ChildCareEncounterDiagnosticsReport objects filtered by the open_status column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByIsReviewed(boolean $is_reviewed) Return ChildCareEncounterDiagnosticsReport objects filtered by the is_reviewed column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByReviewerComments(string $reviewer_comments) Return ChildCareEncounterDiagnosticsReport objects filtered by the reviewer_comments column
 * @method     ChildCareEncounterDiagnosticsReport[]|ObjectCollection findByReviewedBy(string $reviewed_by) Return ChildCareEncounterDiagnosticsReport objects filtered by the reviewed_by column
 * @method     ChildCareEncounterDiagnosticsReport[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterDiagnosticsReportQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterDiagnosticsReportQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterDiagnosticsReport', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterDiagnosticsReportQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterDiagnosticsReportQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterDiagnosticsReportQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterDiagnosticsReportQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$item_nr, $report_nr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareEncounterDiagnosticsReport|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterDiagnosticsReportTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCareEncounterDiagnosticsReport A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT item_nr, report_nr, reporting_dept_nr, reporting_dept, report_date, report_time, encounter_nr, script_call, status, history, modify_id, modify_time, create_id, create_time, open_status, is_reviewed, reviewer_comments, reviewed_by FROM care_encounter_diagnostics_report WHERE item_nr = :p0 AND report_nr = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareEncounterDiagnosticsReport $obj */
            $obj = new ChildCareEncounterDiagnosticsReport();
            $obj->hydrate($row);
            CareEncounterDiagnosticsReportTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCareEncounterDiagnosticsReport|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the item_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByItemNr(1234); // WHERE item_nr = 1234
     * $query->filterByItemNr(array(12, 34)); // WHERE item_nr IN (12, 34)
     * $query->filterByItemNr(array('min' => 12)); // WHERE item_nr > 12
     * </code>
     *
     * @param     mixed $itemNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByItemNr($itemNr = null, $comparison = null)
    {
        if (is_array($itemNr)) {
            $useMinMax = false;
            if (isset($itemNr['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR, $itemNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemNr['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR, $itemNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR, $itemNr, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByReportNr($reportNr = null, $comparison = null)
    {
        if (is_array($reportNr)) {
            $useMinMax = false;
            if (isset($reportNr['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR, $reportNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reportNr['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR, $reportNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR, $reportNr, $comparison);
    }

    /**
     * Filter the query on the reporting_dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByReportingDeptNr(1234); // WHERE reporting_dept_nr = 1234
     * $query->filterByReportingDeptNr(array(12, 34)); // WHERE reporting_dept_nr IN (12, 34)
     * $query->filterByReportingDeptNr(array('min' => 12)); // WHERE reporting_dept_nr > 12
     * </code>
     *
     * @param     mixed $reportingDeptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByReportingDeptNr($reportingDeptNr = null, $comparison = null)
    {
        if (is_array($reportingDeptNr)) {
            $useMinMax = false;
            if (isset($reportingDeptNr['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT_NR, $reportingDeptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reportingDeptNr['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT_NR, $reportingDeptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT_NR, $reportingDeptNr, $comparison);
    }

    /**
     * Filter the query on the reporting_dept column
     *
     * Example usage:
     * <code>
     * $query->filterByReportingDept('fooValue');   // WHERE reporting_dept = 'fooValue'
     * $query->filterByReportingDept('%fooValue%', Criteria::LIKE); // WHERE reporting_dept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reportingDept The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByReportingDept($reportingDept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reportingDept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT, $reportingDept, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByReportDate($reportDate = null, $comparison = null)
    {
        if (is_array($reportDate)) {
            $useMinMax = false;
            if (isset($reportDate['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORT_DATE, $reportDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reportDate['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORT_DATE, $reportDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORT_DATE, $reportDate, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByReportTime($reportTime = null, $comparison = null)
    {
        if (is_array($reportTime)) {
            $useMinMax = false;
            if (isset($reportTime['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORT_TIME, $reportTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reportTime['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORT_TIME, $reportTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REPORT_TIME, $reportTime, $comparison);
    }

    /**
     * Filter the query on the encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterNr(1234); // WHERE encounter_nr = 1234
     * $query->filterByEncounterNr(array(12, 34)); // WHERE encounter_nr IN (12, 34)
     * $query->filterByEncounterNr(array('min' => 12)); // WHERE encounter_nr > 12
     * </code>
     *
     * @param     mixed $encounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the script_call column
     *
     * Example usage:
     * <code>
     * $query->filterByScriptCall('fooValue');   // WHERE script_call = 'fooValue'
     * $query->filterByScriptCall('%fooValue%', Criteria::LIKE); // WHERE script_call LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scriptCall The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByScriptCall($scriptCall = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scriptCall)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_SCRIPT_CALL, $scriptCall, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Filter the query on the open_status column
     *
     * Example usage:
     * <code>
     * $query->filterByOpenStatus(true); // WHERE open_status = true
     * $query->filterByOpenStatus('yes'); // WHERE open_status = true
     * </code>
     *
     * @param     boolean|string $openStatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByOpenStatus($openStatus = null, $comparison = null)
    {
        if (is_string($openStatus)) {
            $openStatus = in_array(strtolower($openStatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_OPEN_STATUS, $openStatus, $comparison);
    }

    /**
     * Filter the query on the is_reviewed column
     *
     * Example usage:
     * <code>
     * $query->filterByIsReviewed(true); // WHERE is_reviewed = true
     * $query->filterByIsReviewed('yes'); // WHERE is_reviewed = true
     * </code>
     *
     * @param     boolean|string $isReviewed The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByIsReviewed($isReviewed = null, $comparison = null)
    {
        if (is_string($isReviewed)) {
            $isReviewed = in_array(strtolower($isReviewed), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_IS_REVIEWED, $isReviewed, $comparison);
    }

    /**
     * Filter the query on the reviewer_comments column
     *
     * Example usage:
     * <code>
     * $query->filterByReviewerComments('fooValue');   // WHERE reviewer_comments = 'fooValue'
     * $query->filterByReviewerComments('%fooValue%', Criteria::LIKE); // WHERE reviewer_comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reviewerComments The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByReviewerComments($reviewerComments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reviewerComments)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REVIEWER_COMMENTS, $reviewerComments, $comparison);
    }

    /**
     * Filter the query on the reviewed_by column
     *
     * Example usage:
     * <code>
     * $query->filterByReviewedBy('fooValue');   // WHERE reviewed_by = 'fooValue'
     * $query->filterByReviewedBy('%fooValue%', Criteria::LIKE); // WHERE reviewed_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reviewedBy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function filterByReviewedBy($reviewedBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reviewedBy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosticsReportTableMap::COL_REVIEWED_BY, $reviewedBy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterDiagnosticsReport $careEncounterDiagnosticsReport Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterDiagnosticsReportQuery The current query, for fluid interface
     */
    public function prune($careEncounterDiagnosticsReport = null)
    {
        if ($careEncounterDiagnosticsReport) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR), $careEncounterDiagnosticsReport->getItemNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR), $careEncounterDiagnosticsReport->getReportNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_diagnostics_report table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterDiagnosticsReportTableMap::clearInstancePool();
            CareEncounterDiagnosticsReportTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterDiagnosticsReportTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterDiagnosticsReportTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterDiagnosticsReportQuery
