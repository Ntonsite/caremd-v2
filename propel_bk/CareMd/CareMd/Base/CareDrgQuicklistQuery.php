<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareDrgQuicklist as ChildCareDrgQuicklist;
use CareMd\CareMd\CareDrgQuicklistQuery as ChildCareDrgQuicklistQuery;
use CareMd\CareMd\Map\CareDrgQuicklistTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_drg_quicklist' table.
 *
 *
 *
 * @method     ChildCareDrgQuicklistQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareDrgQuicklistQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareDrgQuicklistQuery orderByCodeParent($order = Criteria::ASC) Order by the code_parent column
 * @method     ChildCareDrgQuicklistQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareDrgQuicklistQuery orderByQlistType($order = Criteria::ASC) Order by the qlist_type column
 * @method     ChildCareDrgQuicklistQuery orderByRank($order = Criteria::ASC) Order by the rank column
 * @method     ChildCareDrgQuicklistQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareDrgQuicklistQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareDrgQuicklistQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareDrgQuicklistQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareDrgQuicklistQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareDrgQuicklistQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareDrgQuicklistQuery groupByNr() Group by the nr column
 * @method     ChildCareDrgQuicklistQuery groupByCode() Group by the code column
 * @method     ChildCareDrgQuicklistQuery groupByCodeParent() Group by the code_parent column
 * @method     ChildCareDrgQuicklistQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareDrgQuicklistQuery groupByQlistType() Group by the qlist_type column
 * @method     ChildCareDrgQuicklistQuery groupByRank() Group by the rank column
 * @method     ChildCareDrgQuicklistQuery groupByStatus() Group by the status column
 * @method     ChildCareDrgQuicklistQuery groupByHistory() Group by the history column
 * @method     ChildCareDrgQuicklistQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareDrgQuicklistQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareDrgQuicklistQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareDrgQuicklistQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareDrgQuicklistQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareDrgQuicklistQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareDrgQuicklistQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareDrgQuicklistQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareDrgQuicklistQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareDrgQuicklistQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareDrgQuicklist findOne(ConnectionInterface $con = null) Return the first ChildCareDrgQuicklist matching the query
 * @method     ChildCareDrgQuicklist findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareDrgQuicklist matching the query, or a new ChildCareDrgQuicklist object populated from the query conditions when no match is found
 *
 * @method     ChildCareDrgQuicklist findOneByNr(int $nr) Return the first ChildCareDrgQuicklist filtered by the nr column
 * @method     ChildCareDrgQuicklist findOneByCode(string $code) Return the first ChildCareDrgQuicklist filtered by the code column
 * @method     ChildCareDrgQuicklist findOneByCodeParent(string $code_parent) Return the first ChildCareDrgQuicklist filtered by the code_parent column
 * @method     ChildCareDrgQuicklist findOneByDeptNr(int $dept_nr) Return the first ChildCareDrgQuicklist filtered by the dept_nr column
 * @method     ChildCareDrgQuicklist findOneByQlistType(string $qlist_type) Return the first ChildCareDrgQuicklist filtered by the qlist_type column
 * @method     ChildCareDrgQuicklist findOneByRank(int $rank) Return the first ChildCareDrgQuicklist filtered by the rank column
 * @method     ChildCareDrgQuicklist findOneByStatus(string $status) Return the first ChildCareDrgQuicklist filtered by the status column
 * @method     ChildCareDrgQuicklist findOneByHistory(string $history) Return the first ChildCareDrgQuicklist filtered by the history column
 * @method     ChildCareDrgQuicklist findOneByModifyId(string $modify_id) Return the first ChildCareDrgQuicklist filtered by the modify_id column
 * @method     ChildCareDrgQuicklist findOneByModifyTime(string $modify_time) Return the first ChildCareDrgQuicklist filtered by the modify_time column
 * @method     ChildCareDrgQuicklist findOneByCreateId(string $create_id) Return the first ChildCareDrgQuicklist filtered by the create_id column
 * @method     ChildCareDrgQuicklist findOneByCreateTime(string $create_time) Return the first ChildCareDrgQuicklist filtered by the create_time column *

 * @method     ChildCareDrgQuicklist requirePk($key, ConnectionInterface $con = null) Return the ChildCareDrgQuicklist by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOne(ConnectionInterface $con = null) Return the first ChildCareDrgQuicklist matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareDrgQuicklist requireOneByNr(int $nr) Return the first ChildCareDrgQuicklist filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByCode(string $code) Return the first ChildCareDrgQuicklist filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByCodeParent(string $code_parent) Return the first ChildCareDrgQuicklist filtered by the code_parent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByDeptNr(int $dept_nr) Return the first ChildCareDrgQuicklist filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByQlistType(string $qlist_type) Return the first ChildCareDrgQuicklist filtered by the qlist_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByRank(int $rank) Return the first ChildCareDrgQuicklist filtered by the rank column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByStatus(string $status) Return the first ChildCareDrgQuicklist filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByHistory(string $history) Return the first ChildCareDrgQuicklist filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByModifyId(string $modify_id) Return the first ChildCareDrgQuicklist filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByModifyTime(string $modify_time) Return the first ChildCareDrgQuicklist filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByCreateId(string $create_id) Return the first ChildCareDrgQuicklist filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgQuicklist requireOneByCreateTime(string $create_time) Return the first ChildCareDrgQuicklist filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareDrgQuicklist[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareDrgQuicklist objects based on current ModelCriteria
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByNr(int $nr) Return ChildCareDrgQuicklist objects filtered by the nr column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByCode(string $code) Return ChildCareDrgQuicklist objects filtered by the code column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByCodeParent(string $code_parent) Return ChildCareDrgQuicklist objects filtered by the code_parent column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareDrgQuicklist objects filtered by the dept_nr column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByQlistType(string $qlist_type) Return ChildCareDrgQuicklist objects filtered by the qlist_type column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByRank(int $rank) Return ChildCareDrgQuicklist objects filtered by the rank column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByStatus(string $status) Return ChildCareDrgQuicklist objects filtered by the status column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByHistory(string $history) Return ChildCareDrgQuicklist objects filtered by the history column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareDrgQuicklist objects filtered by the modify_id column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareDrgQuicklist objects filtered by the modify_time column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareDrgQuicklist objects filtered by the create_id column
 * @method     ChildCareDrgQuicklist[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareDrgQuicklist objects filtered by the create_time column
 * @method     ChildCareDrgQuicklist[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareDrgQuicklistQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareDrgQuicklistQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareDrgQuicklist', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareDrgQuicklistQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareDrgQuicklistQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareDrgQuicklistQuery) {
            return $criteria;
        }
        $query = new ChildCareDrgQuicklistQuery();
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
     * @return ChildCareDrgQuicklist|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareDrgQuicklistTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareDrgQuicklistTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareDrgQuicklist A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, code, code_parent, dept_nr, qlist_type, rank, status, history, modify_id, modify_time, create_id, create_time FROM care_drg_quicklist WHERE nr = :p0';
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
            /** @var ChildCareDrgQuicklist $obj */
            $obj = new ChildCareDrgQuicklist();
            $obj->hydrate($row);
            CareDrgQuicklistTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareDrgQuicklist|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareDrgQuicklistTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareDrgQuicklistTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_CODE, $code, $comparison);
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByCodeParent($codeParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeParent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_CODE_PARENT, $codeParent, $comparison);
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareDrgQuicklistTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareDrgQuicklistTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the qlist_type column
     *
     * Example usage:
     * <code>
     * $query->filterByQlistType('fooValue');   // WHERE qlist_type = 'fooValue'
     * $query->filterByQlistType('%fooValue%', Criteria::LIKE); // WHERE qlist_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qlistType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByQlistType($qlistType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qlistType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_QLIST_TYPE, $qlistType, $comparison);
    }

    /**
     * Filter the query on the rank column
     *
     * Example usage:
     * <code>
     * $query->filterByRank(1234); // WHERE rank = 1234
     * $query->filterByRank(array(12, 34)); // WHERE rank IN (12, 34)
     * $query->filterByRank(array('min' => 12)); // WHERE rank > 12
     * </code>
     *
     * @param     mixed $rank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByRank($rank = null, $comparison = null)
    {
        if (is_array($rank)) {
            $useMinMax = false;
            if (isset($rank['min'])) {
                $this->addUsingAlias(CareDrgQuicklistTableMap::COL_RANK, $rank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rank['max'])) {
                $this->addUsingAlias(CareDrgQuicklistTableMap::COL_RANK, $rank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_RANK, $rank, $comparison);
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareDrgQuicklistTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareDrgQuicklistTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareDrgQuicklistTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareDrgQuicklistTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgQuicklistTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareDrgQuicklist $careDrgQuicklist Object to remove from the list of results
     *
     * @return $this|ChildCareDrgQuicklistQuery The current query, for fluid interface
     */
    public function prune($careDrgQuicklist = null)
    {
        if ($careDrgQuicklist) {
            $this->addUsingAlias(CareDrgQuicklistTableMap::COL_NR, $careDrgQuicklist->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_drg_quicklist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDrgQuicklistTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareDrgQuicklistTableMap::clearInstancePool();
            CareDrgQuicklistTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDrgQuicklistTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareDrgQuicklistTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareDrgQuicklistTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareDrgQuicklistTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareDrgQuicklistQuery
