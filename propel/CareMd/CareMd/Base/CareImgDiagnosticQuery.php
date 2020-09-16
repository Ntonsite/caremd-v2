<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareImgDiagnostic as ChildCareImgDiagnostic;
use CareMd\CareMd\CareImgDiagnosticQuery as ChildCareImgDiagnosticQuery;
use CareMd\CareMd\Map\CareImgDiagnosticTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_img_diagnostic' table.
 *
 *
 *
 * @method     ChildCareImgDiagnosticQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareImgDiagnosticQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCareImgDiagnosticQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareImgDiagnosticQuery orderByDocRefIds($order = Criteria::ASC) Order by the doc_ref_ids column
 * @method     ChildCareImgDiagnosticQuery orderByImgType($order = Criteria::ASC) Order by the img_type column
 * @method     ChildCareImgDiagnosticQuery orderByMaxNr($order = Criteria::ASC) Order by the max_nr column
 * @method     ChildCareImgDiagnosticQuery orderByUploadDate($order = Criteria::ASC) Order by the upload_date column
 * @method     ChildCareImgDiagnosticQuery orderByCancelDate($order = Criteria::ASC) Order by the cancel_date column
 * @method     ChildCareImgDiagnosticQuery orderByCancelBy($order = Criteria::ASC) Order by the cancel_by column
 * @method     ChildCareImgDiagnosticQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareImgDiagnosticQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareImgDiagnosticQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareImgDiagnosticQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareImgDiagnosticQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareImgDiagnosticQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareImgDiagnosticQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareImgDiagnosticQuery groupByNr() Group by the nr column
 * @method     ChildCareImgDiagnosticQuery groupByPid() Group by the pid column
 * @method     ChildCareImgDiagnosticQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareImgDiagnosticQuery groupByDocRefIds() Group by the doc_ref_ids column
 * @method     ChildCareImgDiagnosticQuery groupByImgType() Group by the img_type column
 * @method     ChildCareImgDiagnosticQuery groupByMaxNr() Group by the max_nr column
 * @method     ChildCareImgDiagnosticQuery groupByUploadDate() Group by the upload_date column
 * @method     ChildCareImgDiagnosticQuery groupByCancelDate() Group by the cancel_date column
 * @method     ChildCareImgDiagnosticQuery groupByCancelBy() Group by the cancel_by column
 * @method     ChildCareImgDiagnosticQuery groupByNotes() Group by the notes column
 * @method     ChildCareImgDiagnosticQuery groupByStatus() Group by the status column
 * @method     ChildCareImgDiagnosticQuery groupByHistory() Group by the history column
 * @method     ChildCareImgDiagnosticQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareImgDiagnosticQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareImgDiagnosticQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareImgDiagnosticQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareImgDiagnosticQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareImgDiagnosticQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareImgDiagnosticQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareImgDiagnosticQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareImgDiagnosticQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareImgDiagnosticQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareImgDiagnostic findOne(ConnectionInterface $con = null) Return the first ChildCareImgDiagnostic matching the query
 * @method     ChildCareImgDiagnostic findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareImgDiagnostic matching the query, or a new ChildCareImgDiagnostic object populated from the query conditions when no match is found
 *
 * @method     ChildCareImgDiagnostic findOneByNr(string $nr) Return the first ChildCareImgDiagnostic filtered by the nr column
 * @method     ChildCareImgDiagnostic findOneByPid(int $pid) Return the first ChildCareImgDiagnostic filtered by the pid column
 * @method     ChildCareImgDiagnostic findOneByEncounterNr(int $encounter_nr) Return the first ChildCareImgDiagnostic filtered by the encounter_nr column
 * @method     ChildCareImgDiagnostic findOneByDocRefIds(string $doc_ref_ids) Return the first ChildCareImgDiagnostic filtered by the doc_ref_ids column
 * @method     ChildCareImgDiagnostic findOneByImgType(string $img_type) Return the first ChildCareImgDiagnostic filtered by the img_type column
 * @method     ChildCareImgDiagnostic findOneByMaxNr(int $max_nr) Return the first ChildCareImgDiagnostic filtered by the max_nr column
 * @method     ChildCareImgDiagnostic findOneByUploadDate(string $upload_date) Return the first ChildCareImgDiagnostic filtered by the upload_date column
 * @method     ChildCareImgDiagnostic findOneByCancelDate(string $cancel_date) Return the first ChildCareImgDiagnostic filtered by the cancel_date column
 * @method     ChildCareImgDiagnostic findOneByCancelBy(string $cancel_by) Return the first ChildCareImgDiagnostic filtered by the cancel_by column
 * @method     ChildCareImgDiagnostic findOneByNotes(string $notes) Return the first ChildCareImgDiagnostic filtered by the notes column
 * @method     ChildCareImgDiagnostic findOneByStatus(string $status) Return the first ChildCareImgDiagnostic filtered by the status column
 * @method     ChildCareImgDiagnostic findOneByHistory(string $history) Return the first ChildCareImgDiagnostic filtered by the history column
 * @method     ChildCareImgDiagnostic findOneByModifyId(string $modify_id) Return the first ChildCareImgDiagnostic filtered by the modify_id column
 * @method     ChildCareImgDiagnostic findOneByModifyTime(string $modify_time) Return the first ChildCareImgDiagnostic filtered by the modify_time column
 * @method     ChildCareImgDiagnostic findOneByCreateId(string $create_id) Return the first ChildCareImgDiagnostic filtered by the create_id column
 * @method     ChildCareImgDiagnostic findOneByCreateTime(string $create_time) Return the first ChildCareImgDiagnostic filtered by the create_time column *

 * @method     ChildCareImgDiagnostic requirePk($key, ConnectionInterface $con = null) Return the ChildCareImgDiagnostic by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOne(ConnectionInterface $con = null) Return the first ChildCareImgDiagnostic matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareImgDiagnostic requireOneByNr(string $nr) Return the first ChildCareImgDiagnostic filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByPid(int $pid) Return the first ChildCareImgDiagnostic filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareImgDiagnostic filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByDocRefIds(string $doc_ref_ids) Return the first ChildCareImgDiagnostic filtered by the doc_ref_ids column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByImgType(string $img_type) Return the first ChildCareImgDiagnostic filtered by the img_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByMaxNr(int $max_nr) Return the first ChildCareImgDiagnostic filtered by the max_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByUploadDate(string $upload_date) Return the first ChildCareImgDiagnostic filtered by the upload_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByCancelDate(string $cancel_date) Return the first ChildCareImgDiagnostic filtered by the cancel_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByCancelBy(string $cancel_by) Return the first ChildCareImgDiagnostic filtered by the cancel_by column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByNotes(string $notes) Return the first ChildCareImgDiagnostic filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByStatus(string $status) Return the first ChildCareImgDiagnostic filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByHistory(string $history) Return the first ChildCareImgDiagnostic filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByModifyId(string $modify_id) Return the first ChildCareImgDiagnostic filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByModifyTime(string $modify_time) Return the first ChildCareImgDiagnostic filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByCreateId(string $create_id) Return the first ChildCareImgDiagnostic filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareImgDiagnostic requireOneByCreateTime(string $create_time) Return the first ChildCareImgDiagnostic filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareImgDiagnostic[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareImgDiagnostic objects based on current ModelCriteria
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByNr(string $nr) Return ChildCareImgDiagnostic objects filtered by the nr column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByPid(int $pid) Return ChildCareImgDiagnostic objects filtered by the pid column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareImgDiagnostic objects filtered by the encounter_nr column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByDocRefIds(string $doc_ref_ids) Return ChildCareImgDiagnostic objects filtered by the doc_ref_ids column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByImgType(string $img_type) Return ChildCareImgDiagnostic objects filtered by the img_type column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByMaxNr(int $max_nr) Return ChildCareImgDiagnostic objects filtered by the max_nr column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByUploadDate(string $upload_date) Return ChildCareImgDiagnostic objects filtered by the upload_date column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByCancelDate(string $cancel_date) Return ChildCareImgDiagnostic objects filtered by the cancel_date column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByCancelBy(string $cancel_by) Return ChildCareImgDiagnostic objects filtered by the cancel_by column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByNotes(string $notes) Return ChildCareImgDiagnostic objects filtered by the notes column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByStatus(string $status) Return ChildCareImgDiagnostic objects filtered by the status column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByHistory(string $history) Return ChildCareImgDiagnostic objects filtered by the history column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareImgDiagnostic objects filtered by the modify_id column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareImgDiagnostic objects filtered by the modify_time column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareImgDiagnostic objects filtered by the create_id column
 * @method     ChildCareImgDiagnostic[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareImgDiagnostic objects filtered by the create_time column
 * @method     ChildCareImgDiagnostic[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareImgDiagnosticQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareImgDiagnosticQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareImgDiagnostic', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareImgDiagnosticQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareImgDiagnosticQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareImgDiagnosticQuery) {
            return $criteria;
        }
        $query = new ChildCareImgDiagnosticQuery();
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
     * @return ChildCareImgDiagnostic|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareImgDiagnosticTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareImgDiagnosticTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareImgDiagnostic A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, pid, encounter_nr, doc_ref_ids, img_type, max_nr, upload_date, cancel_date, cancel_by, notes, status, history, modify_id, modify_time, create_id, create_time FROM care_img_diagnostic WHERE nr = :p0';
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
            /** @var ChildCareImgDiagnostic $obj */
            $obj = new ChildCareImgDiagnostic();
            $obj->hydrate($row);
            CareImgDiagnosticTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareImgDiagnostic|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_PID, $pid, $comparison);
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
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the doc_ref_ids column
     *
     * Example usage:
     * <code>
     * $query->filterByDocRefIds('fooValue');   // WHERE doc_ref_ids = 'fooValue'
     * $query->filterByDocRefIds('%fooValue%', Criteria::LIKE); // WHERE doc_ref_ids LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docRefIds The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByDocRefIds($docRefIds = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docRefIds)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_DOC_REF_IDS, $docRefIds, $comparison);
    }

    /**
     * Filter the query on the img_type column
     *
     * Example usage:
     * <code>
     * $query->filterByImgType('fooValue');   // WHERE img_type = 'fooValue'
     * $query->filterByImgType('%fooValue%', Criteria::LIKE); // WHERE img_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $imgType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByImgType($imgType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($imgType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_IMG_TYPE, $imgType, $comparison);
    }

    /**
     * Filter the query on the max_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxNr(1234); // WHERE max_nr = 1234
     * $query->filterByMaxNr(array(12, 34)); // WHERE max_nr IN (12, 34)
     * $query->filterByMaxNr(array('min' => 12)); // WHERE max_nr > 12
     * </code>
     *
     * @param     mixed $maxNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByMaxNr($maxNr = null, $comparison = null)
    {
        if (is_array($maxNr)) {
            $useMinMax = false;
            if (isset($maxNr['min'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_MAX_NR, $maxNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxNr['max'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_MAX_NR, $maxNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_MAX_NR, $maxNr, $comparison);
    }

    /**
     * Filter the query on the upload_date column
     *
     * Example usage:
     * <code>
     * $query->filterByUploadDate('2011-03-14'); // WHERE upload_date = '2011-03-14'
     * $query->filterByUploadDate('now'); // WHERE upload_date = '2011-03-14'
     * $query->filterByUploadDate(array('max' => 'yesterday')); // WHERE upload_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $uploadDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByUploadDate($uploadDate = null, $comparison = null)
    {
        if (is_array($uploadDate)) {
            $useMinMax = false;
            if (isset($uploadDate['min'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_UPLOAD_DATE, $uploadDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uploadDate['max'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_UPLOAD_DATE, $uploadDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_UPLOAD_DATE, $uploadDate, $comparison);
    }

    /**
     * Filter the query on the cancel_date column
     *
     * Example usage:
     * <code>
     * $query->filterByCancelDate('2011-03-14'); // WHERE cancel_date = '2011-03-14'
     * $query->filterByCancelDate('now'); // WHERE cancel_date = '2011-03-14'
     * $query->filterByCancelDate(array('max' => 'yesterday')); // WHERE cancel_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $cancelDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByCancelDate($cancelDate = null, $comparison = null)
    {
        if (is_array($cancelDate)) {
            $useMinMax = false;
            if (isset($cancelDate['min'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_CANCEL_DATE, $cancelDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cancelDate['max'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_CANCEL_DATE, $cancelDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_CANCEL_DATE, $cancelDate, $comparison);
    }

    /**
     * Filter the query on the cancel_by column
     *
     * Example usage:
     * <code>
     * $query->filterByCancelBy('fooValue');   // WHERE cancel_by = 'fooValue'
     * $query->filterByCancelBy('%fooValue%', Criteria::LIKE); // WHERE cancel_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cancelBy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByCancelBy($cancelBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cancelBy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_CANCEL_BY, $cancelBy, $comparison);
    }

    /**
     * Filter the query on the notes column
     *
     * Example usage:
     * <code>
     * $query->filterByNotes('fooValue');   // WHERE notes = 'fooValue'
     * $query->filterByNotes('%fooValue%', Criteria::LIKE); // WHERE notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_NOTES, $notes, $comparison);
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
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareImgDiagnosticTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareImgDiagnosticTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareImgDiagnostic $careImgDiagnostic Object to remove from the list of results
     *
     * @return $this|ChildCareImgDiagnosticQuery The current query, for fluid interface
     */
    public function prune($careImgDiagnostic = null)
    {
        if ($careImgDiagnostic) {
            $this->addUsingAlias(CareImgDiagnosticTableMap::COL_NR, $careImgDiagnostic->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_img_diagnostic table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareImgDiagnosticTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareImgDiagnosticTableMap::clearInstancePool();
            CareImgDiagnosticTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareImgDiagnosticTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareImgDiagnosticTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareImgDiagnosticTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareImgDiagnosticTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareImgDiagnosticQuery
