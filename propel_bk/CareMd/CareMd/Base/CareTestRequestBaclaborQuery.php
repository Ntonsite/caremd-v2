<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestBaclabor as ChildCareTestRequestBaclabor;
use CareMd\CareMd\CareTestRequestBaclaborQuery as ChildCareTestRequestBaclaborQuery;
use CareMd\CareMd\Map\CareTestRequestBaclaborTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_request_baclabor' table.
 *
 *
 *
 * @method     ChildCareTestRequestBaclaborQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestRequestBaclaborQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestRequestBaclaborQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTestRequestBaclaborQuery orderByMaterial($order = Criteria::ASC) Order by the material column
 * @method     ChildCareTestRequestBaclaborQuery orderByTestType($order = Criteria::ASC) Order by the test_type column
 * @method     ChildCareTestRequestBaclaborQuery orderByMaterialNote($order = Criteria::ASC) Order by the material_note column
 * @method     ChildCareTestRequestBaclaborQuery orderByDiagnosisNote($order = Criteria::ASC) Order by the diagnosis_note column
 * @method     ChildCareTestRequestBaclaborQuery orderByImmuneSupp($order = Criteria::ASC) Order by the immune_supp column
 * @method     ChildCareTestRequestBaclaborQuery orderBySendDate($order = Criteria::ASC) Order by the send_date column
 * @method     ChildCareTestRequestBaclaborQuery orderBySampleDate($order = Criteria::ASC) Order by the sample_date column
 * @method     ChildCareTestRequestBaclaborQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestRequestBaclaborQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestRequestBaclaborQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestRequestBaclaborQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestRequestBaclaborQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestRequestBaclaborQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestRequestBaclaborQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestRequestBaclaborQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestRequestBaclaborQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTestRequestBaclaborQuery groupByMaterial() Group by the material column
 * @method     ChildCareTestRequestBaclaborQuery groupByTestType() Group by the test_type column
 * @method     ChildCareTestRequestBaclaborQuery groupByMaterialNote() Group by the material_note column
 * @method     ChildCareTestRequestBaclaborQuery groupByDiagnosisNote() Group by the diagnosis_note column
 * @method     ChildCareTestRequestBaclaborQuery groupByImmuneSupp() Group by the immune_supp column
 * @method     ChildCareTestRequestBaclaborQuery groupBySendDate() Group by the send_date column
 * @method     ChildCareTestRequestBaclaborQuery groupBySampleDate() Group by the sample_date column
 * @method     ChildCareTestRequestBaclaborQuery groupByStatus() Group by the status column
 * @method     ChildCareTestRequestBaclaborQuery groupByHistory() Group by the history column
 * @method     ChildCareTestRequestBaclaborQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestRequestBaclaborQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestRequestBaclaborQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestRequestBaclaborQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestRequestBaclaborQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestRequestBaclaborQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestRequestBaclaborQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestRequestBaclaborQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestRequestBaclaborQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestRequestBaclaborQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestRequestBaclabor findOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestBaclabor matching the query
 * @method     ChildCareTestRequestBaclabor findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestRequestBaclabor matching the query, or a new ChildCareTestRequestBaclabor object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestRequestBaclabor findOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestBaclabor filtered by the batch_nr column
 * @method     ChildCareTestRequestBaclabor findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestBaclabor filtered by the encounter_nr column
 * @method     ChildCareTestRequestBaclabor findOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestBaclabor filtered by the dept_nr column
 * @method     ChildCareTestRequestBaclabor findOneByMaterial(string $material) Return the first ChildCareTestRequestBaclabor filtered by the material column
 * @method     ChildCareTestRequestBaclabor findOneByTestType(string $test_type) Return the first ChildCareTestRequestBaclabor filtered by the test_type column
 * @method     ChildCareTestRequestBaclabor findOneByMaterialNote(string $material_note) Return the first ChildCareTestRequestBaclabor filtered by the material_note column
 * @method     ChildCareTestRequestBaclabor findOneByDiagnosisNote(string $diagnosis_note) Return the first ChildCareTestRequestBaclabor filtered by the diagnosis_note column
 * @method     ChildCareTestRequestBaclabor findOneByImmuneSupp(int $immune_supp) Return the first ChildCareTestRequestBaclabor filtered by the immune_supp column
 * @method     ChildCareTestRequestBaclabor findOneBySendDate(string $send_date) Return the first ChildCareTestRequestBaclabor filtered by the send_date column
 * @method     ChildCareTestRequestBaclabor findOneBySampleDate(string $sample_date) Return the first ChildCareTestRequestBaclabor filtered by the sample_date column
 * @method     ChildCareTestRequestBaclabor findOneByStatus(string $status) Return the first ChildCareTestRequestBaclabor filtered by the status column
 * @method     ChildCareTestRequestBaclabor findOneByHistory(string $history) Return the first ChildCareTestRequestBaclabor filtered by the history column
 * @method     ChildCareTestRequestBaclabor findOneByModifyId(string $modify_id) Return the first ChildCareTestRequestBaclabor filtered by the modify_id column
 * @method     ChildCareTestRequestBaclabor findOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestBaclabor filtered by the modify_time column
 * @method     ChildCareTestRequestBaclabor findOneByCreateId(string $create_id) Return the first ChildCareTestRequestBaclabor filtered by the create_id column
 * @method     ChildCareTestRequestBaclabor findOneByCreateTime(string $create_time) Return the first ChildCareTestRequestBaclabor filtered by the create_time column *

 * @method     ChildCareTestRequestBaclabor requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestRequestBaclabor by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestBaclabor matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestBaclabor requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestBaclabor filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestBaclabor filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestBaclabor filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByMaterial(string $material) Return the first ChildCareTestRequestBaclabor filtered by the material column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByTestType(string $test_type) Return the first ChildCareTestRequestBaclabor filtered by the test_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByMaterialNote(string $material_note) Return the first ChildCareTestRequestBaclabor filtered by the material_note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByDiagnosisNote(string $diagnosis_note) Return the first ChildCareTestRequestBaclabor filtered by the diagnosis_note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByImmuneSupp(int $immune_supp) Return the first ChildCareTestRequestBaclabor filtered by the immune_supp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneBySendDate(string $send_date) Return the first ChildCareTestRequestBaclabor filtered by the send_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneBySampleDate(string $sample_date) Return the first ChildCareTestRequestBaclabor filtered by the sample_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByStatus(string $status) Return the first ChildCareTestRequestBaclabor filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByHistory(string $history) Return the first ChildCareTestRequestBaclabor filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByModifyId(string $modify_id) Return the first ChildCareTestRequestBaclabor filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestBaclabor filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByCreateId(string $create_id) Return the first ChildCareTestRequestBaclabor filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBaclabor requireOneByCreateTime(string $create_time) Return the first ChildCareTestRequestBaclabor filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestRequestBaclabor objects based on current ModelCriteria
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestRequestBaclabor objects filtered by the batch_nr column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestRequestBaclabor objects filtered by the encounter_nr column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareTestRequestBaclabor objects filtered by the dept_nr column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByMaterial(string $material) Return ChildCareTestRequestBaclabor objects filtered by the material column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByTestType(string $test_type) Return ChildCareTestRequestBaclabor objects filtered by the test_type column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByMaterialNote(string $material_note) Return ChildCareTestRequestBaclabor objects filtered by the material_note column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByDiagnosisNote(string $diagnosis_note) Return ChildCareTestRequestBaclabor objects filtered by the diagnosis_note column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByImmuneSupp(int $immune_supp) Return ChildCareTestRequestBaclabor objects filtered by the immune_supp column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findBySendDate(string $send_date) Return ChildCareTestRequestBaclabor objects filtered by the send_date column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findBySampleDate(string $sample_date) Return ChildCareTestRequestBaclabor objects filtered by the sample_date column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByStatus(string $status) Return ChildCareTestRequestBaclabor objects filtered by the status column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByHistory(string $history) Return ChildCareTestRequestBaclabor objects filtered by the history column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestRequestBaclabor objects filtered by the modify_id column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestRequestBaclabor objects filtered by the modify_time column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestRequestBaclabor objects filtered by the create_id column
 * @method     ChildCareTestRequestBaclabor[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestRequestBaclabor objects filtered by the create_time column
 * @method     ChildCareTestRequestBaclabor[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestRequestBaclaborQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestRequestBaclaborQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestRequestBaclabor', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestRequestBaclaborQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestRequestBaclaborQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestRequestBaclaborQuery) {
            return $criteria;
        }
        $query = new ChildCareTestRequestBaclaborQuery();
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
     * @return ChildCareTestRequestBaclabor|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestBaclaborTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestRequestBaclaborTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTestRequestBaclabor A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, encounter_nr, dept_nr, material, test_type, material_note, diagnosis_note, immune_supp, send_date, sample_date, status, history, modify_id, modify_time, create_id, create_time FROM care_test_request_baclabor WHERE batch_nr = :p0';
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
            /** @var ChildCareTestRequestBaclabor $obj */
            $obj = new ChildCareTestRequestBaclabor();
            $obj->hydrate($row);
            CareTestRequestBaclaborTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTestRequestBaclabor|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_BATCH_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_BATCH_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the batch_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByBatchNr(1234); // WHERE batch_nr = 1234
     * $query->filterByBatchNr(array(12, 34)); // WHERE batch_nr IN (12, 34)
     * $query->filterByBatchNr(array('min' => 12)); // WHERE batch_nr > 12
     * </code>
     *
     * @param     mixed $batchNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the material column
     *
     * Example usage:
     * <code>
     * $query->filterByMaterial('fooValue');   // WHERE material = 'fooValue'
     * $query->filterByMaterial('%fooValue%', Criteria::LIKE); // WHERE material LIKE '%fooValue%'
     * </code>
     *
     * @param     string $material The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByMaterial($material = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($material)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_MATERIAL, $material, $comparison);
    }

    /**
     * Filter the query on the test_type column
     *
     * Example usage:
     * <code>
     * $query->filterByTestType('fooValue');   // WHERE test_type = 'fooValue'
     * $query->filterByTestType('%fooValue%', Criteria::LIKE); // WHERE test_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $testType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByTestType($testType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($testType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_TEST_TYPE, $testType, $comparison);
    }

    /**
     * Filter the query on the material_note column
     *
     * Example usage:
     * <code>
     * $query->filterByMaterialNote('fooValue');   // WHERE material_note = 'fooValue'
     * $query->filterByMaterialNote('%fooValue%', Criteria::LIKE); // WHERE material_note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $materialNote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByMaterialNote($materialNote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($materialNote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_MATERIAL_NOTE, $materialNote, $comparison);
    }

    /**
     * Filter the query on the diagnosis_note column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosisNote('fooValue');   // WHERE diagnosis_note = 'fooValue'
     * $query->filterByDiagnosisNote('%fooValue%', Criteria::LIKE); // WHERE diagnosis_note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosisNote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByDiagnosisNote($diagnosisNote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosisNote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_DIAGNOSIS_NOTE, $diagnosisNote, $comparison);
    }

    /**
     * Filter the query on the immune_supp column
     *
     * Example usage:
     * <code>
     * $query->filterByImmuneSupp(1234); // WHERE immune_supp = 1234
     * $query->filterByImmuneSupp(array(12, 34)); // WHERE immune_supp IN (12, 34)
     * $query->filterByImmuneSupp(array('min' => 12)); // WHERE immune_supp > 12
     * </code>
     *
     * @param     mixed $immuneSupp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByImmuneSupp($immuneSupp = null, $comparison = null)
    {
        if (is_array($immuneSupp)) {
            $useMinMax = false;
            if (isset($immuneSupp['min'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_IMMUNE_SUPP, $immuneSupp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($immuneSupp['max'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_IMMUNE_SUPP, $immuneSupp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_IMMUNE_SUPP, $immuneSupp, $comparison);
    }

    /**
     * Filter the query on the send_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySendDate('2011-03-14'); // WHERE send_date = '2011-03-14'
     * $query->filterBySendDate('now'); // WHERE send_date = '2011-03-14'
     * $query->filterBySendDate(array('max' => 'yesterday')); // WHERE send_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $sendDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterBySendDate($sendDate = null, $comparison = null)
    {
        if (is_array($sendDate)) {
            $useMinMax = false;
            if (isset($sendDate['min'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_SEND_DATE, $sendDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendDate['max'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_SEND_DATE, $sendDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_SEND_DATE, $sendDate, $comparison);
    }

    /**
     * Filter the query on the sample_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySampleDate('2011-03-14'); // WHERE sample_date = '2011-03-14'
     * $query->filterBySampleDate('now'); // WHERE sample_date = '2011-03-14'
     * $query->filterBySampleDate(array('max' => 'yesterday')); // WHERE sample_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $sampleDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterBySampleDate($sampleDate = null, $comparison = null)
    {
        if (is_array($sampleDate)) {
            $useMinMax = false;
            if (isset($sampleDate['min'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_SAMPLE_DATE, $sampleDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sampleDate['max'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_SAMPLE_DATE, $sampleDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_SAMPLE_DATE, $sampleDate, $comparison);
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
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestRequestBaclabor $careTestRequestBaclabor Object to remove from the list of results
     *
     * @return $this|ChildCareTestRequestBaclaborQuery The current query, for fluid interface
     */
    public function prune($careTestRequestBaclabor = null)
    {
        if ($careTestRequestBaclabor) {
            $this->addUsingAlias(CareTestRequestBaclaborTableMap::COL_BATCH_NR, $careTestRequestBaclabor->getBatchNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_request_baclabor table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestBaclaborTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestRequestBaclaborTableMap::clearInstancePool();
            CareTestRequestBaclaborTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestBaclaborTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestRequestBaclaborTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestRequestBaclaborTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestRequestBaclaborTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestRequestBaclaborQuery
