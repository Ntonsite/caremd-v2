<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestFindingsLaboratory as ChildCareTestFindingsLaboratory;
use CareMd\CareMd\CareTestFindingsLaboratoryQuery as ChildCareTestFindingsLaboratoryQuery;
use CareMd\CareMd\Map\CareTestFindingsLaboratoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_findings_laboratory' table.
 *
 *
 *
 * @method     ChildCareTestFindingsLaboratoryQuery orderByFindingsNr($order = Criteria::ASC) Order by the findings_nr column
 * @method     ChildCareTestFindingsLaboratoryQuery orderByParent($order = Criteria::ASC) Order by the parent column
 * @method     ChildCareTestFindingsLaboratoryQuery orderByTaskNr($order = Criteria::ASC) Order by the task_nr column
 * @method     ChildCareTestFindingsLaboratoryQuery orderByTimestamp($order = Criteria::ASC) Order by the timestamp column
 * @method     ChildCareTestFindingsLaboratoryQuery orderByFinding($order = Criteria::ASC) Order by the finding column
 * @method     ChildCareTestFindingsLaboratoryQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestFindingsLaboratoryQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestFindingsLaboratoryQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestFindingsLaboratoryQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestFindingsLaboratoryQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestFindingsLaboratoryQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestFindingsLaboratoryQuery groupByFindingsNr() Group by the findings_nr column
 * @method     ChildCareTestFindingsLaboratoryQuery groupByParent() Group by the parent column
 * @method     ChildCareTestFindingsLaboratoryQuery groupByTaskNr() Group by the task_nr column
 * @method     ChildCareTestFindingsLaboratoryQuery groupByTimestamp() Group by the timestamp column
 * @method     ChildCareTestFindingsLaboratoryQuery groupByFinding() Group by the finding column
 * @method     ChildCareTestFindingsLaboratoryQuery groupByStatus() Group by the status column
 * @method     ChildCareTestFindingsLaboratoryQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestFindingsLaboratoryQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestFindingsLaboratoryQuery groupByHistory() Group by the history column
 * @method     ChildCareTestFindingsLaboratoryQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestFindingsLaboratoryQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestFindingsLaboratoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestFindingsLaboratoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestFindingsLaboratoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestFindingsLaboratoryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestFindingsLaboratoryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestFindingsLaboratoryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestFindingsLaboratory findOne(ConnectionInterface $con = null) Return the first ChildCareTestFindingsLaboratory matching the query
 * @method     ChildCareTestFindingsLaboratory findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestFindingsLaboratory matching the query, or a new ChildCareTestFindingsLaboratory object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestFindingsLaboratory findOneByFindingsNr(int $findings_nr) Return the first ChildCareTestFindingsLaboratory filtered by the findings_nr column
 * @method     ChildCareTestFindingsLaboratory findOneByParent(int $parent) Return the first ChildCareTestFindingsLaboratory filtered by the parent column
 * @method     ChildCareTestFindingsLaboratory findOneByTaskNr(int $task_nr) Return the first ChildCareTestFindingsLaboratory filtered by the task_nr column
 * @method     ChildCareTestFindingsLaboratory findOneByTimestamp(string $timestamp) Return the first ChildCareTestFindingsLaboratory filtered by the timestamp column
 * @method     ChildCareTestFindingsLaboratory findOneByFinding(string $finding) Return the first ChildCareTestFindingsLaboratory filtered by the finding column
 * @method     ChildCareTestFindingsLaboratory findOneByStatus(string $status) Return the first ChildCareTestFindingsLaboratory filtered by the status column
 * @method     ChildCareTestFindingsLaboratory findOneByModifyId(string $modify_id) Return the first ChildCareTestFindingsLaboratory filtered by the modify_id column
 * @method     ChildCareTestFindingsLaboratory findOneByModifyTime(string $modify_time) Return the first ChildCareTestFindingsLaboratory filtered by the modify_time column
 * @method     ChildCareTestFindingsLaboratory findOneByHistory(string $history) Return the first ChildCareTestFindingsLaboratory filtered by the history column
 * @method     ChildCareTestFindingsLaboratory findOneByCreateId(string $create_id) Return the first ChildCareTestFindingsLaboratory filtered by the create_id column
 * @method     ChildCareTestFindingsLaboratory findOneByCreateTime(string $create_time) Return the first ChildCareTestFindingsLaboratory filtered by the create_time column *

 * @method     ChildCareTestFindingsLaboratory requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestFindingsLaboratory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOne(ConnectionInterface $con = null) Return the first ChildCareTestFindingsLaboratory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestFindingsLaboratory requireOneByFindingsNr(int $findings_nr) Return the first ChildCareTestFindingsLaboratory filtered by the findings_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOneByParent(int $parent) Return the first ChildCareTestFindingsLaboratory filtered by the parent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOneByTaskNr(int $task_nr) Return the first ChildCareTestFindingsLaboratory filtered by the task_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOneByTimestamp(string $timestamp) Return the first ChildCareTestFindingsLaboratory filtered by the timestamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOneByFinding(string $finding) Return the first ChildCareTestFindingsLaboratory filtered by the finding column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOneByStatus(string $status) Return the first ChildCareTestFindingsLaboratory filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOneByModifyId(string $modify_id) Return the first ChildCareTestFindingsLaboratory filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOneByModifyTime(string $modify_time) Return the first ChildCareTestFindingsLaboratory filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOneByHistory(string $history) Return the first ChildCareTestFindingsLaboratory filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOneByCreateId(string $create_id) Return the first ChildCareTestFindingsLaboratory filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestFindingsLaboratory requireOneByCreateTime(string $create_time) Return the first ChildCareTestFindingsLaboratory filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestFindingsLaboratory objects based on current ModelCriteria
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByFindingsNr(int $findings_nr) Return ChildCareTestFindingsLaboratory objects filtered by the findings_nr column
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByParent(int $parent) Return ChildCareTestFindingsLaboratory objects filtered by the parent column
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByTaskNr(int $task_nr) Return ChildCareTestFindingsLaboratory objects filtered by the task_nr column
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByTimestamp(string $timestamp) Return ChildCareTestFindingsLaboratory objects filtered by the timestamp column
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByFinding(string $finding) Return ChildCareTestFindingsLaboratory objects filtered by the finding column
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByStatus(string $status) Return ChildCareTestFindingsLaboratory objects filtered by the status column
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestFindingsLaboratory objects filtered by the modify_id column
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestFindingsLaboratory objects filtered by the modify_time column
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByHistory(string $history) Return ChildCareTestFindingsLaboratory objects filtered by the history column
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestFindingsLaboratory objects filtered by the create_id column
 * @method     ChildCareTestFindingsLaboratory[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestFindingsLaboratory objects filtered by the create_time column
 * @method     ChildCareTestFindingsLaboratory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestFindingsLaboratoryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestFindingsLaboratoryQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestFindingsLaboratory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestFindingsLaboratoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestFindingsLaboratoryQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestFindingsLaboratoryQuery) {
            return $criteria;
        }
        $query = new ChildCareTestFindingsLaboratoryQuery();
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
     * @param array[$findings_nr, $task_nr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTestFindingsLaboratory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestFindingsLaboratoryTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestFindingsLaboratoryTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCareTestFindingsLaboratory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT findings_nr, parent, task_nr, timestamp, finding, status, modify_id, modify_time, history, create_id, create_time FROM care_test_findings_laboratory WHERE findings_nr = :p0 AND task_nr = :p1';
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
            /** @var ChildCareTestFindingsLaboratory $obj */
            $obj = new ChildCareTestFindingsLaboratory();
            $obj->hydrate($row);
            CareTestFindingsLaboratoryTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCareTestFindingsLaboratory|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_TASK_NR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTestFindingsLaboratoryTableMap::COL_TASK_NR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the findings_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByFindingsNr(1234); // WHERE findings_nr = 1234
     * $query->filterByFindingsNr(array(12, 34)); // WHERE findings_nr IN (12, 34)
     * $query->filterByFindingsNr(array('min' => 12)); // WHERE findings_nr > 12
     * </code>
     *
     * @param     mixed $findingsNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByFindingsNr($findingsNr = null, $comparison = null)
    {
        if (is_array($findingsNr)) {
            $useMinMax = false;
            if (isset($findingsNr['min'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR, $findingsNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($findingsNr['max'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR, $findingsNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR, $findingsNr, $comparison);
    }

    /**
     * Filter the query on the parent column
     *
     * Example usage:
     * <code>
     * $query->filterByParent(1234); // WHERE parent = 1234
     * $query->filterByParent(array(12, 34)); // WHERE parent IN (12, 34)
     * $query->filterByParent(array('min' => 12)); // WHERE parent > 12
     * </code>
     *
     * @param     mixed $parent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByParent($parent = null, $comparison = null)
    {
        if (is_array($parent)) {
            $useMinMax = false;
            if (isset($parent['min'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_PARENT, $parent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parent['max'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_PARENT, $parent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_PARENT, $parent, $comparison);
    }

    /**
     * Filter the query on the task_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByTaskNr(1234); // WHERE task_nr = 1234
     * $query->filterByTaskNr(array(12, 34)); // WHERE task_nr IN (12, 34)
     * $query->filterByTaskNr(array('min' => 12)); // WHERE task_nr > 12
     * </code>
     *
     * @param     mixed $taskNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByTaskNr($taskNr = null, $comparison = null)
    {
        if (is_array($taskNr)) {
            $useMinMax = false;
            if (isset($taskNr['min'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_TASK_NR, $taskNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taskNr['max'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_TASK_NR, $taskNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_TASK_NR, $taskNr, $comparison);
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
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByTimestamp($timestamp = null, $comparison = null)
    {
        if (is_array($timestamp)) {
            $useMinMax = false;
            if (isset($timestamp['min'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_TIMESTAMP, $timestamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timestamp['max'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_TIMESTAMP, $timestamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_TIMESTAMP, $timestamp, $comparison);
    }

    /**
     * Filter the query on the finding column
     *
     * Example usage:
     * <code>
     * $query->filterByFinding('fooValue');   // WHERE finding = 'fooValue'
     * $query->filterByFinding('%fooValue%', Criteria::LIKE); // WHERE finding LIKE '%fooValue%'
     * </code>
     *
     * @param     string $finding The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByFinding($finding = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($finding)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_FINDING, $finding, $comparison);
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
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestFindingsLaboratoryTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestFindingsLaboratory $careTestFindingsLaboratory Object to remove from the list of results
     *
     * @return $this|ChildCareTestFindingsLaboratoryQuery The current query, for fluid interface
     */
    public function prune($careTestFindingsLaboratory = null)
    {
        if ($careTestFindingsLaboratory) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR), $careTestFindingsLaboratory->getFindingsNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTestFindingsLaboratoryTableMap::COL_TASK_NR), $careTestFindingsLaboratory->getTaskNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_findings_laboratory table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsLaboratoryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestFindingsLaboratoryTableMap::clearInstancePool();
            CareTestFindingsLaboratoryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsLaboratoryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestFindingsLaboratoryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestFindingsLaboratoryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestFindingsLaboratoryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestFindingsLaboratoryQuery
