<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterDiagnosis as ChildCareEncounterDiagnosis;
use CareMd\CareMd\CareEncounterDiagnosisQuery as ChildCareEncounterDiagnosisQuery;
use CareMd\CareMd\Map\CareEncounterDiagnosisTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_diagnosis' table.
 *
 *
 *
 * @method     ChildCareEncounterDiagnosisQuery orderByDiagnosisNr($order = Criteria::ASC) Order by the diagnosis_nr column
 * @method     ChildCareEncounterDiagnosisQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterDiagnosisQuery orderByOpNr($order = Criteria::ASC) Order by the op_nr column
 * @method     ChildCareEncounterDiagnosisQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareEncounterDiagnosisQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareEncounterDiagnosisQuery orderByCodeParent($order = Criteria::ASC) Order by the code_parent column
 * @method     ChildCareEncounterDiagnosisQuery orderByGroupNr($order = Criteria::ASC) Order by the group_nr column
 * @method     ChildCareEncounterDiagnosisQuery orderByCodeVersion($order = Criteria::ASC) Order by the code_version column
 * @method     ChildCareEncounterDiagnosisQuery orderByLocalcode($order = Criteria::ASC) Order by the localcode column
 * @method     ChildCareEncounterDiagnosisQuery orderByCategoryNr($order = Criteria::ASC) Order by the category_nr column
 * @method     ChildCareEncounterDiagnosisQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareEncounterDiagnosisQuery orderByLocalization($order = Criteria::ASC) Order by the localization column
 * @method     ChildCareEncounterDiagnosisQuery orderByDiagnosingClinician($order = Criteria::ASC) Order by the diagnosing_clinician column
 * @method     ChildCareEncounterDiagnosisQuery orderByDiagnosingDeptNr($order = Criteria::ASC) Order by the diagnosing_dept_nr column
 * @method     ChildCareEncounterDiagnosisQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterDiagnosisQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterDiagnosisQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterDiagnosisQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterDiagnosisQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterDiagnosisQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterDiagnosisQuery groupByDiagnosisNr() Group by the diagnosis_nr column
 * @method     ChildCareEncounterDiagnosisQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterDiagnosisQuery groupByOpNr() Group by the op_nr column
 * @method     ChildCareEncounterDiagnosisQuery groupByDate() Group by the date column
 * @method     ChildCareEncounterDiagnosisQuery groupByCode() Group by the code column
 * @method     ChildCareEncounterDiagnosisQuery groupByCodeParent() Group by the code_parent column
 * @method     ChildCareEncounterDiagnosisQuery groupByGroupNr() Group by the group_nr column
 * @method     ChildCareEncounterDiagnosisQuery groupByCodeVersion() Group by the code_version column
 * @method     ChildCareEncounterDiagnosisQuery groupByLocalcode() Group by the localcode column
 * @method     ChildCareEncounterDiagnosisQuery groupByCategoryNr() Group by the category_nr column
 * @method     ChildCareEncounterDiagnosisQuery groupByType() Group by the type column
 * @method     ChildCareEncounterDiagnosisQuery groupByLocalization() Group by the localization column
 * @method     ChildCareEncounterDiagnosisQuery groupByDiagnosingClinician() Group by the diagnosing_clinician column
 * @method     ChildCareEncounterDiagnosisQuery groupByDiagnosingDeptNr() Group by the diagnosing_dept_nr column
 * @method     ChildCareEncounterDiagnosisQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterDiagnosisQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterDiagnosisQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterDiagnosisQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterDiagnosisQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterDiagnosisQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterDiagnosisQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterDiagnosisQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterDiagnosisQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterDiagnosisQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterDiagnosisQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterDiagnosisQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterDiagnosis findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterDiagnosis matching the query
 * @method     ChildCareEncounterDiagnosis findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterDiagnosis matching the query, or a new ChildCareEncounterDiagnosis object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterDiagnosis findOneByDiagnosisNr(int $diagnosis_nr) Return the first ChildCareEncounterDiagnosis filtered by the diagnosis_nr column
 * @method     ChildCareEncounterDiagnosis findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterDiagnosis filtered by the encounter_nr column
 * @method     ChildCareEncounterDiagnosis findOneByOpNr(int $op_nr) Return the first ChildCareEncounterDiagnosis filtered by the op_nr column
 * @method     ChildCareEncounterDiagnosis findOneByDate(string $date) Return the first ChildCareEncounterDiagnosis filtered by the date column
 * @method     ChildCareEncounterDiagnosis findOneByCode(string $code) Return the first ChildCareEncounterDiagnosis filtered by the code column
 * @method     ChildCareEncounterDiagnosis findOneByCodeParent(string $code_parent) Return the first ChildCareEncounterDiagnosis filtered by the code_parent column
 * @method     ChildCareEncounterDiagnosis findOneByGroupNr(int $group_nr) Return the first ChildCareEncounterDiagnosis filtered by the group_nr column
 * @method     ChildCareEncounterDiagnosis findOneByCodeVersion(int $code_version) Return the first ChildCareEncounterDiagnosis filtered by the code_version column
 * @method     ChildCareEncounterDiagnosis findOneByLocalcode(string $localcode) Return the first ChildCareEncounterDiagnosis filtered by the localcode column
 * @method     ChildCareEncounterDiagnosis findOneByCategoryNr(int $category_nr) Return the first ChildCareEncounterDiagnosis filtered by the category_nr column
 * @method     ChildCareEncounterDiagnosis findOneByType(string $type) Return the first ChildCareEncounterDiagnosis filtered by the type column
 * @method     ChildCareEncounterDiagnosis findOneByLocalization(string $localization) Return the first ChildCareEncounterDiagnosis filtered by the localization column
 * @method     ChildCareEncounterDiagnosis findOneByDiagnosingClinician(string $diagnosing_clinician) Return the first ChildCareEncounterDiagnosis filtered by the diagnosing_clinician column
 * @method     ChildCareEncounterDiagnosis findOneByDiagnosingDeptNr(int $diagnosing_dept_nr) Return the first ChildCareEncounterDiagnosis filtered by the diagnosing_dept_nr column
 * @method     ChildCareEncounterDiagnosis findOneByStatus(string $status) Return the first ChildCareEncounterDiagnosis filtered by the status column
 * @method     ChildCareEncounterDiagnosis findOneByHistory(string $history) Return the first ChildCareEncounterDiagnosis filtered by the history column
 * @method     ChildCareEncounterDiagnosis findOneByModifyId(string $modify_id) Return the first ChildCareEncounterDiagnosis filtered by the modify_id column
 * @method     ChildCareEncounterDiagnosis findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterDiagnosis filtered by the modify_time column
 * @method     ChildCareEncounterDiagnosis findOneByCreateId(string $create_id) Return the first ChildCareEncounterDiagnosis filtered by the create_id column
 * @method     ChildCareEncounterDiagnosis findOneByCreateTime(string $create_time) Return the first ChildCareEncounterDiagnosis filtered by the create_time column *

 * @method     ChildCareEncounterDiagnosis requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterDiagnosis by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterDiagnosis matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterDiagnosis requireOneByDiagnosisNr(int $diagnosis_nr) Return the first ChildCareEncounterDiagnosis filtered by the diagnosis_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterDiagnosis filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByOpNr(int $op_nr) Return the first ChildCareEncounterDiagnosis filtered by the op_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByDate(string $date) Return the first ChildCareEncounterDiagnosis filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByCode(string $code) Return the first ChildCareEncounterDiagnosis filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByCodeParent(string $code_parent) Return the first ChildCareEncounterDiagnosis filtered by the code_parent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByGroupNr(int $group_nr) Return the first ChildCareEncounterDiagnosis filtered by the group_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByCodeVersion(int $code_version) Return the first ChildCareEncounterDiagnosis filtered by the code_version column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByLocalcode(string $localcode) Return the first ChildCareEncounterDiagnosis filtered by the localcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByCategoryNr(int $category_nr) Return the first ChildCareEncounterDiagnosis filtered by the category_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByType(string $type) Return the first ChildCareEncounterDiagnosis filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByLocalization(string $localization) Return the first ChildCareEncounterDiagnosis filtered by the localization column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByDiagnosingClinician(string $diagnosing_clinician) Return the first ChildCareEncounterDiagnosis filtered by the diagnosing_clinician column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByDiagnosingDeptNr(int $diagnosing_dept_nr) Return the first ChildCareEncounterDiagnosis filtered by the diagnosing_dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByStatus(string $status) Return the first ChildCareEncounterDiagnosis filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByHistory(string $history) Return the first ChildCareEncounterDiagnosis filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterDiagnosis filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterDiagnosis filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByCreateId(string $create_id) Return the first ChildCareEncounterDiagnosis filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterDiagnosis requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterDiagnosis filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterDiagnosis objects based on current ModelCriteria
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByDiagnosisNr(int $diagnosis_nr) Return ChildCareEncounterDiagnosis objects filtered by the diagnosis_nr column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterDiagnosis objects filtered by the encounter_nr column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByOpNr(int $op_nr) Return ChildCareEncounterDiagnosis objects filtered by the op_nr column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByDate(string $date) Return ChildCareEncounterDiagnosis objects filtered by the date column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByCode(string $code) Return ChildCareEncounterDiagnosis objects filtered by the code column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByCodeParent(string $code_parent) Return ChildCareEncounterDiagnosis objects filtered by the code_parent column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByGroupNr(int $group_nr) Return ChildCareEncounterDiagnosis objects filtered by the group_nr column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByCodeVersion(int $code_version) Return ChildCareEncounterDiagnosis objects filtered by the code_version column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByLocalcode(string $localcode) Return ChildCareEncounterDiagnosis objects filtered by the localcode column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByCategoryNr(int $category_nr) Return ChildCareEncounterDiagnosis objects filtered by the category_nr column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByType(string $type) Return ChildCareEncounterDiagnosis objects filtered by the type column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByLocalization(string $localization) Return ChildCareEncounterDiagnosis objects filtered by the localization column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByDiagnosingClinician(string $diagnosing_clinician) Return ChildCareEncounterDiagnosis objects filtered by the diagnosing_clinician column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByDiagnosingDeptNr(int $diagnosing_dept_nr) Return ChildCareEncounterDiagnosis objects filtered by the diagnosing_dept_nr column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterDiagnosis objects filtered by the status column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterDiagnosis objects filtered by the history column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterDiagnosis objects filtered by the modify_id column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterDiagnosis objects filtered by the modify_time column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterDiagnosis objects filtered by the create_id column
 * @method     ChildCareEncounterDiagnosis[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterDiagnosis objects filtered by the create_time column
 * @method     ChildCareEncounterDiagnosis[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterDiagnosisQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterDiagnosisQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterDiagnosis', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterDiagnosisQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterDiagnosisQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterDiagnosisQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterDiagnosisQuery();
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
     * @return ChildCareEncounterDiagnosis|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterDiagnosisTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterDiagnosisTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterDiagnosis A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT diagnosis_nr, encounter_nr, op_nr, date, code, code_parent, group_nr, code_version, localcode, category_nr, type, localization, diagnosing_clinician, diagnosing_dept_nr, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_diagnosis WHERE diagnosis_nr = :p0';
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
            /** @var ChildCareEncounterDiagnosis $obj */
            $obj = new ChildCareEncounterDiagnosis();
            $obj->hydrate($row);
            CareEncounterDiagnosisTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterDiagnosis|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DIAGNOSIS_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DIAGNOSIS_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the diagnosis_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosisNr(1234); // WHERE diagnosis_nr = 1234
     * $query->filterByDiagnosisNr(array(12, 34)); // WHERE diagnosis_nr IN (12, 34)
     * $query->filterByDiagnosisNr(array('min' => 12)); // WHERE diagnosis_nr > 12
     * </code>
     *
     * @param     mixed $diagnosisNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByDiagnosisNr($diagnosisNr = null, $comparison = null)
    {
        if (is_array($diagnosisNr)) {
            $useMinMax = false;
            if (isset($diagnosisNr['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DIAGNOSIS_NR, $diagnosisNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diagnosisNr['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DIAGNOSIS_NR, $diagnosisNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DIAGNOSIS_NR, $diagnosisNr, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the op_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByOpNr(1234); // WHERE op_nr = 1234
     * $query->filterByOpNr(array(12, 34)); // WHERE op_nr IN (12, 34)
     * $query->filterByOpNr(array('min' => 12)); // WHERE op_nr > 12
     * </code>
     *
     * @param     mixed $opNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByOpNr($opNr = null, $comparison = null)
    {
        if (is_array($opNr)) {
            $useMinMax = false;
            if (isset($opNr['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_OP_NR, $opNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opNr['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_OP_NR, $opNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_OP_NR, $opNr, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CODE, $code, $comparison);
    }

    /**
     * Filter the query on the code_parent column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeParent('fooValue');   // WHERE code_parent = 'fooValue'
     * $query->filterByCodeParent('%fooValue%', Criteria::LIKE); // WHERE code_parent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeParent The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByCodeParent($codeParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeParent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CODE_PARENT, $codeParent, $comparison);
    }

    /**
     * Filter the query on the group_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupNr(1234); // WHERE group_nr = 1234
     * $query->filterByGroupNr(array(12, 34)); // WHERE group_nr IN (12, 34)
     * $query->filterByGroupNr(array('min' => 12)); // WHERE group_nr > 12
     * </code>
     *
     * @param     mixed $groupNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByGroupNr($groupNr = null, $comparison = null)
    {
        if (is_array($groupNr)) {
            $useMinMax = false;
            if (isset($groupNr['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_GROUP_NR, $groupNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groupNr['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_GROUP_NR, $groupNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_GROUP_NR, $groupNr, $comparison);
    }

    /**
     * Filter the query on the code_version column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeVersion(1234); // WHERE code_version = 1234
     * $query->filterByCodeVersion(array(12, 34)); // WHERE code_version IN (12, 34)
     * $query->filterByCodeVersion(array('min' => 12)); // WHERE code_version > 12
     * </code>
     *
     * @param     mixed $codeVersion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByCodeVersion($codeVersion = null, $comparison = null)
    {
        if (is_array($codeVersion)) {
            $useMinMax = false;
            if (isset($codeVersion['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CODE_VERSION, $codeVersion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codeVersion['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CODE_VERSION, $codeVersion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CODE_VERSION, $codeVersion, $comparison);
    }

    /**
     * Filter the query on the localcode column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalcode('fooValue');   // WHERE localcode = 'fooValue'
     * $query->filterByLocalcode('%fooValue%', Criteria::LIKE); // WHERE localcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByLocalcode($localcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_LOCALCODE, $localcode, $comparison);
    }

    /**
     * Filter the query on the category_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoryNr(1234); // WHERE category_nr = 1234
     * $query->filterByCategoryNr(array(12, 34)); // WHERE category_nr IN (12, 34)
     * $query->filterByCategoryNr(array('min' => 12)); // WHERE category_nr > 12
     * </code>
     *
     * @param     mixed $categoryNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByCategoryNr($categoryNr = null, $comparison = null)
    {
        if (is_array($categoryNr)) {
            $useMinMax = false;
            if (isset($categoryNr['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CATEGORY_NR, $categoryNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categoryNr['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CATEGORY_NR, $categoryNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CATEGORY_NR, $categoryNr, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%', Criteria::LIKE); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the localization column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalization('fooValue');   // WHERE localization = 'fooValue'
     * $query->filterByLocalization('%fooValue%', Criteria::LIKE); // WHERE localization LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localization The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByLocalization($localization = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localization)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_LOCALIZATION, $localization, $comparison);
    }

    /**
     * Filter the query on the diagnosing_clinician column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosingClinician('fooValue');   // WHERE diagnosing_clinician = 'fooValue'
     * $query->filterByDiagnosingClinician('%fooValue%', Criteria::LIKE); // WHERE diagnosing_clinician LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosingClinician The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByDiagnosingClinician($diagnosingClinician = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosingClinician)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DIAGNOSING_CLINICIAN, $diagnosingClinician, $comparison);
    }

    /**
     * Filter the query on the diagnosing_dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosingDeptNr(1234); // WHERE diagnosing_dept_nr = 1234
     * $query->filterByDiagnosingDeptNr(array(12, 34)); // WHERE diagnosing_dept_nr IN (12, 34)
     * $query->filterByDiagnosingDeptNr(array('min' => 12)); // WHERE diagnosing_dept_nr > 12
     * </code>
     *
     * @param     mixed $diagnosingDeptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByDiagnosingDeptNr($diagnosingDeptNr = null, $comparison = null)
    {
        if (is_array($diagnosingDeptNr)) {
            $useMinMax = false;
            if (isset($diagnosingDeptNr['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DIAGNOSING_DEPT_NR, $diagnosingDeptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diagnosingDeptNr['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DIAGNOSING_DEPT_NR, $diagnosingDeptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DIAGNOSING_DEPT_NR, $diagnosingDeptNr, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterDiagnosis $careEncounterDiagnosis Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterDiagnosisQuery The current query, for fluid interface
     */
    public function prune($careEncounterDiagnosis = null)
    {
        if ($careEncounterDiagnosis) {
            $this->addUsingAlias(CareEncounterDiagnosisTableMap::COL_DIAGNOSIS_NR, $careEncounterDiagnosis->getDiagnosisNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_diagnosis table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDiagnosisTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterDiagnosisTableMap::clearInstancePool();
            CareEncounterDiagnosisTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDiagnosisTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterDiagnosisTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterDiagnosisTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterDiagnosisTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterDiagnosisQuery
