<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzDiagnosis as ChildCareTzDiagnosis;
use CareMd\CareMd\CareTzDiagnosisQuery as ChildCareTzDiagnosisQuery;
use CareMd\CareMd\Map\CareTzDiagnosisTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_diagnosis' table.
 *
 *
 *
 * @method     ChildCareTzDiagnosisQuery orderByCaseNr($order = Criteria::ASC) Order by the case_nr column
 * @method     ChildCareTzDiagnosisQuery orderByParentCaseNr($order = Criteria::ASC) Order by the parent_case_nr column
 * @method     ChildCareTzDiagnosisQuery orderByPid($order = Criteria::ASC) Order by the PID column
 * @method     ChildCareTzDiagnosisQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTzDiagnosisQuery orderByTimestamp($order = Criteria::ASC) Order by the timestamp column
 * @method     ChildCareTzDiagnosisQuery orderByIcd10Code($order = Criteria::ASC) Order by the ICD_10_code column
 * @method     ChildCareTzDiagnosisQuery orderByIcd10Description($order = Criteria::ASC) Order by the ICD_10_description column
 * @method     ChildCareTzDiagnosisQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareTzDiagnosisQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     ChildCareTzDiagnosisQuery orderByDoctorName($order = Criteria::ASC) Order by the doctor_name column
 * @method     ChildCareTzDiagnosisQuery orderByDiagnosisType($order = Criteria::ASC) Order by the diagnosis_type column
 *
 * @method     ChildCareTzDiagnosisQuery groupByCaseNr() Group by the case_nr column
 * @method     ChildCareTzDiagnosisQuery groupByParentCaseNr() Group by the parent_case_nr column
 * @method     ChildCareTzDiagnosisQuery groupByPid() Group by the PID column
 * @method     ChildCareTzDiagnosisQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTzDiagnosisQuery groupByTimestamp() Group by the timestamp column
 * @method     ChildCareTzDiagnosisQuery groupByIcd10Code() Group by the ICD_10_code column
 * @method     ChildCareTzDiagnosisQuery groupByIcd10Description() Group by the ICD_10_description column
 * @method     ChildCareTzDiagnosisQuery groupByType() Group by the type column
 * @method     ChildCareTzDiagnosisQuery groupByComment() Group by the comment column
 * @method     ChildCareTzDiagnosisQuery groupByDoctorName() Group by the doctor_name column
 * @method     ChildCareTzDiagnosisQuery groupByDiagnosisType() Group by the diagnosis_type column
 *
 * @method     ChildCareTzDiagnosisQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzDiagnosisQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzDiagnosisQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzDiagnosisQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzDiagnosisQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzDiagnosisQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzDiagnosis findOne(ConnectionInterface $con = null) Return the first ChildCareTzDiagnosis matching the query
 * @method     ChildCareTzDiagnosis findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzDiagnosis matching the query, or a new ChildCareTzDiagnosis object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzDiagnosis findOneByCaseNr(string $case_nr) Return the first ChildCareTzDiagnosis filtered by the case_nr column
 * @method     ChildCareTzDiagnosis findOneByParentCaseNr(string $parent_case_nr) Return the first ChildCareTzDiagnosis filtered by the parent_case_nr column
 * @method     ChildCareTzDiagnosis findOneByPid(string $PID) Return the first ChildCareTzDiagnosis filtered by the PID column
 * @method     ChildCareTzDiagnosis findOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzDiagnosis filtered by the encounter_nr column
 * @method     ChildCareTzDiagnosis findOneByTimestamp(string $timestamp) Return the first ChildCareTzDiagnosis filtered by the timestamp column
 * @method     ChildCareTzDiagnosis findOneByIcd10Code(string $ICD_10_code) Return the first ChildCareTzDiagnosis filtered by the ICD_10_code column
 * @method     ChildCareTzDiagnosis findOneByIcd10Description(string $ICD_10_description) Return the first ChildCareTzDiagnosis filtered by the ICD_10_description column
 * @method     ChildCareTzDiagnosis findOneByType(string $type) Return the first ChildCareTzDiagnosis filtered by the type column
 * @method     ChildCareTzDiagnosis findOneByComment(string $comment) Return the first ChildCareTzDiagnosis filtered by the comment column
 * @method     ChildCareTzDiagnosis findOneByDoctorName(string $doctor_name) Return the first ChildCareTzDiagnosis filtered by the doctor_name column
 * @method     ChildCareTzDiagnosis findOneByDiagnosisType(string $diagnosis_type) Return the first ChildCareTzDiagnosis filtered by the diagnosis_type column *

 * @method     ChildCareTzDiagnosis requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzDiagnosis by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOne(ConnectionInterface $con = null) Return the first ChildCareTzDiagnosis matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDiagnosis requireOneByCaseNr(string $case_nr) Return the first ChildCareTzDiagnosis filtered by the case_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOneByParentCaseNr(string $parent_case_nr) Return the first ChildCareTzDiagnosis filtered by the parent_case_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOneByPid(string $PID) Return the first ChildCareTzDiagnosis filtered by the PID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzDiagnosis filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOneByTimestamp(string $timestamp) Return the first ChildCareTzDiagnosis filtered by the timestamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOneByIcd10Code(string $ICD_10_code) Return the first ChildCareTzDiagnosis filtered by the ICD_10_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOneByIcd10Description(string $ICD_10_description) Return the first ChildCareTzDiagnosis filtered by the ICD_10_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOneByType(string $type) Return the first ChildCareTzDiagnosis filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOneByComment(string $comment) Return the first ChildCareTzDiagnosis filtered by the comment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOneByDoctorName(string $doctor_name) Return the first ChildCareTzDiagnosis filtered by the doctor_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDiagnosis requireOneByDiagnosisType(string $diagnosis_type) Return the first ChildCareTzDiagnosis filtered by the diagnosis_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDiagnosis[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzDiagnosis objects based on current ModelCriteria
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByCaseNr(string $case_nr) Return ChildCareTzDiagnosis objects filtered by the case_nr column
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByParentCaseNr(string $parent_case_nr) Return ChildCareTzDiagnosis objects filtered by the parent_case_nr column
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByPid(string $PID) Return ChildCareTzDiagnosis objects filtered by the PID column
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByEncounterNr(string $encounter_nr) Return ChildCareTzDiagnosis objects filtered by the encounter_nr column
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByTimestamp(string $timestamp) Return ChildCareTzDiagnosis objects filtered by the timestamp column
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByIcd10Code(string $ICD_10_code) Return ChildCareTzDiagnosis objects filtered by the ICD_10_code column
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByIcd10Description(string $ICD_10_description) Return ChildCareTzDiagnosis objects filtered by the ICD_10_description column
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByType(string $type) Return ChildCareTzDiagnosis objects filtered by the type column
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByComment(string $comment) Return ChildCareTzDiagnosis objects filtered by the comment column
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByDoctorName(string $doctor_name) Return ChildCareTzDiagnosis objects filtered by the doctor_name column
 * @method     ChildCareTzDiagnosis[]|ObjectCollection findByDiagnosisType(string $diagnosis_type) Return ChildCareTzDiagnosis objects filtered by the diagnosis_type column
 * @method     ChildCareTzDiagnosis[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzDiagnosisQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzDiagnosisQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzDiagnosis', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzDiagnosisQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzDiagnosisQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzDiagnosisQuery) {
            return $criteria;
        }
        $query = new ChildCareTzDiagnosisQuery();
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
     * @return ChildCareTzDiagnosis|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzDiagnosisTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzDiagnosisTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzDiagnosis A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT case_nr, parent_case_nr, PID, encounter_nr, timestamp, ICD_10_code, ICD_10_description, type, comment, doctor_name, diagnosis_type FROM care_tz_diagnosis WHERE case_nr = :p0';
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
            /** @var ChildCareTzDiagnosis $obj */
            $obj = new ChildCareTzDiagnosis();
            $obj->hydrate($row);
            CareTzDiagnosisTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzDiagnosis|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_CASE_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_CASE_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the case_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCaseNr(1234); // WHERE case_nr = 1234
     * $query->filterByCaseNr(array(12, 34)); // WHERE case_nr IN (12, 34)
     * $query->filterByCaseNr(array('min' => 12)); // WHERE case_nr > 12
     * </code>
     *
     * @param     mixed $caseNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByCaseNr($caseNr = null, $comparison = null)
    {
        if (is_array($caseNr)) {
            $useMinMax = false;
            if (isset($caseNr['min'])) {
                $this->addUsingAlias(CareTzDiagnosisTableMap::COL_CASE_NR, $caseNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caseNr['max'])) {
                $this->addUsingAlias(CareTzDiagnosisTableMap::COL_CASE_NR, $caseNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_CASE_NR, $caseNr, $comparison);
    }

    /**
     * Filter the query on the parent_case_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByParentCaseNr(1234); // WHERE parent_case_nr = 1234
     * $query->filterByParentCaseNr(array(12, 34)); // WHERE parent_case_nr IN (12, 34)
     * $query->filterByParentCaseNr(array('min' => 12)); // WHERE parent_case_nr > 12
     * </code>
     *
     * @param     mixed $parentCaseNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByParentCaseNr($parentCaseNr = null, $comparison = null)
    {
        if (is_array($parentCaseNr)) {
            $useMinMax = false;
            if (isset($parentCaseNr['min'])) {
                $this->addUsingAlias(CareTzDiagnosisTableMap::COL_PARENT_CASE_NR, $parentCaseNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parentCaseNr['max'])) {
                $this->addUsingAlias(CareTzDiagnosisTableMap::COL_PARENT_CASE_NR, $parentCaseNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_PARENT_CASE_NR, $parentCaseNr, $comparison);
    }

    /**
     * Filter the query on the PID column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE PID = 1234
     * $query->filterByPid(array(12, 34)); // WHERE PID IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE PID > 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CareTzDiagnosisTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CareTzDiagnosisTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_PID, $pid, $comparison);
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
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTzDiagnosisTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTzDiagnosisTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the timestamp column
     *
     * Example usage:
     * <code>
     * $query->filterByTimestamp(1234); // WHERE timestamp = 1234
     * $query->filterByTimestamp(array(12, 34)); // WHERE timestamp IN (12, 34)
     * $query->filterByTimestamp(array('min' => 12)); // WHERE timestamp > 12
     * </code>
     *
     * @param     mixed $timestamp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByTimestamp($timestamp = null, $comparison = null)
    {
        if (is_array($timestamp)) {
            $useMinMax = false;
            if (isset($timestamp['min'])) {
                $this->addUsingAlias(CareTzDiagnosisTableMap::COL_TIMESTAMP, $timestamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timestamp['max'])) {
                $this->addUsingAlias(CareTzDiagnosisTableMap::COL_TIMESTAMP, $timestamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_TIMESTAMP, $timestamp, $comparison);
    }

    /**
     * Filter the query on the ICD_10_code column
     *
     * Example usage:
     * <code>
     * $query->filterByIcd10Code('fooValue');   // WHERE ICD_10_code = 'fooValue'
     * $query->filterByIcd10Code('%fooValue%', Criteria::LIKE); // WHERE ICD_10_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icd10Code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByIcd10Code($icd10Code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icd10Code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_ICD_10_CODE, $icd10Code, $comparison);
    }

    /**
     * Filter the query on the ICD_10_description column
     *
     * Example usage:
     * <code>
     * $query->filterByIcd10Description('fooValue');   // WHERE ICD_10_description = 'fooValue'
     * $query->filterByIcd10Description('%fooValue%', Criteria::LIKE); // WHERE ICD_10_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icd10Description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByIcd10Description($icd10Description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icd10Description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_ICD_10_DESCRIPTION, $icd10Description, $comparison);
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
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE comment = 'fooValue'
     * $query->filterByComment('%fooValue%', Criteria::LIKE); // WHERE comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the doctor_name column
     *
     * Example usage:
     * <code>
     * $query->filterByDoctorName('fooValue');   // WHERE doctor_name = 'fooValue'
     * $query->filterByDoctorName('%fooValue%', Criteria::LIKE); // WHERE doctor_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doctorName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByDoctorName($doctorName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doctorName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_DOCTOR_NAME, $doctorName, $comparison);
    }

    /**
     * Filter the query on the diagnosis_type column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosisType('fooValue');   // WHERE diagnosis_type = 'fooValue'
     * $query->filterByDiagnosisType('%fooValue%', Criteria::LIKE); // WHERE diagnosis_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosisType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function filterByDiagnosisType($diagnosisType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosisType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDiagnosisTableMap::COL_DIAGNOSIS_TYPE, $diagnosisType, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzDiagnosis $careTzDiagnosis Object to remove from the list of results
     *
     * @return $this|ChildCareTzDiagnosisQuery The current query, for fluid interface
     */
    public function prune($careTzDiagnosis = null)
    {
        if ($careTzDiagnosis) {
            $this->addUsingAlias(CareTzDiagnosisTableMap::COL_CASE_NR, $careTzDiagnosis->getCaseNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_diagnosis table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDiagnosisTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzDiagnosisTableMap::clearInstancePool();
            CareTzDiagnosisTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDiagnosisTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzDiagnosisTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzDiagnosisTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzDiagnosisTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzDiagnosisQuery
