<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestParam as ChildCareTestParam;
use CareMd\CareMd\CareTestParamQuery as ChildCareTestParamQuery;
use CareMd\CareMd\Map\CareTestParamTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_param' table.
 *
 *
 *
 * @method     ChildCareTestParamQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareTestParamQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method     ChildCareTestParamQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTestParamQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTestParamQuery orderByMsrUnit($order = Criteria::ASC) Order by the msr_unit column
 * @method     ChildCareTestParamQuery orderByMedian($order = Criteria::ASC) Order by the median column
 * @method     ChildCareTestParamQuery orderByHiBound($order = Criteria::ASC) Order by the hi_bound column
 * @method     ChildCareTestParamQuery orderByLoBound($order = Criteria::ASC) Order by the lo_bound column
 * @method     ChildCareTestParamQuery orderByHiCritical($order = Criteria::ASC) Order by the hi_critical column
 * @method     ChildCareTestParamQuery orderByLoCritical($order = Criteria::ASC) Order by the lo_critical column
 * @method     ChildCareTestParamQuery orderByHiToxic($order = Criteria::ASC) Order by the hi_toxic column
 * @method     ChildCareTestParamQuery orderByLoToxic($order = Criteria::ASC) Order by the lo_toxic column
 * @method     ChildCareTestParamQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestParamQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestParamQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestParamQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestParamQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestParamQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestParamQuery groupByNr() Group by the nr column
 * @method     ChildCareTestParamQuery groupByGroupId() Group by the group_id column
 * @method     ChildCareTestParamQuery groupByName() Group by the name column
 * @method     ChildCareTestParamQuery groupById() Group by the id column
 * @method     ChildCareTestParamQuery groupByMsrUnit() Group by the msr_unit column
 * @method     ChildCareTestParamQuery groupByMedian() Group by the median column
 * @method     ChildCareTestParamQuery groupByHiBound() Group by the hi_bound column
 * @method     ChildCareTestParamQuery groupByLoBound() Group by the lo_bound column
 * @method     ChildCareTestParamQuery groupByHiCritical() Group by the hi_critical column
 * @method     ChildCareTestParamQuery groupByLoCritical() Group by the lo_critical column
 * @method     ChildCareTestParamQuery groupByHiToxic() Group by the hi_toxic column
 * @method     ChildCareTestParamQuery groupByLoToxic() Group by the lo_toxic column
 * @method     ChildCareTestParamQuery groupByStatus() Group by the status column
 * @method     ChildCareTestParamQuery groupByHistory() Group by the history column
 * @method     ChildCareTestParamQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestParamQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestParamQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestParamQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestParamQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestParamQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestParamQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestParamQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestParamQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestParamQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestParam findOne(ConnectionInterface $con = null) Return the first ChildCareTestParam matching the query
 * @method     ChildCareTestParam findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestParam matching the query, or a new ChildCareTestParam object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestParam findOneByNr(int $nr) Return the first ChildCareTestParam filtered by the nr column
 * @method     ChildCareTestParam findOneByGroupId(string $group_id) Return the first ChildCareTestParam filtered by the group_id column
 * @method     ChildCareTestParam findOneByName(string $name) Return the first ChildCareTestParam filtered by the name column
 * @method     ChildCareTestParam findOneById(string $id) Return the first ChildCareTestParam filtered by the id column
 * @method     ChildCareTestParam findOneByMsrUnit(string $msr_unit) Return the first ChildCareTestParam filtered by the msr_unit column
 * @method     ChildCareTestParam findOneByMedian(string $median) Return the first ChildCareTestParam filtered by the median column
 * @method     ChildCareTestParam findOneByHiBound(string $hi_bound) Return the first ChildCareTestParam filtered by the hi_bound column
 * @method     ChildCareTestParam findOneByLoBound(string $lo_bound) Return the first ChildCareTestParam filtered by the lo_bound column
 * @method     ChildCareTestParam findOneByHiCritical(string $hi_critical) Return the first ChildCareTestParam filtered by the hi_critical column
 * @method     ChildCareTestParam findOneByLoCritical(string $lo_critical) Return the first ChildCareTestParam filtered by the lo_critical column
 * @method     ChildCareTestParam findOneByHiToxic(string $hi_toxic) Return the first ChildCareTestParam filtered by the hi_toxic column
 * @method     ChildCareTestParam findOneByLoToxic(string $lo_toxic) Return the first ChildCareTestParam filtered by the lo_toxic column
 * @method     ChildCareTestParam findOneByStatus(string $status) Return the first ChildCareTestParam filtered by the status column
 * @method     ChildCareTestParam findOneByHistory(string $history) Return the first ChildCareTestParam filtered by the history column
 * @method     ChildCareTestParam findOneByModifyId(string $modify_id) Return the first ChildCareTestParam filtered by the modify_id column
 * @method     ChildCareTestParam findOneByModifyTime(string $modify_time) Return the first ChildCareTestParam filtered by the modify_time column
 * @method     ChildCareTestParam findOneByCreateId(string $create_id) Return the first ChildCareTestParam filtered by the create_id column
 * @method     ChildCareTestParam findOneByCreateTime(string $create_time) Return the first ChildCareTestParam filtered by the create_time column *

 * @method     ChildCareTestParam requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestParam by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOne(ConnectionInterface $con = null) Return the first ChildCareTestParam matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestParam requireOneByNr(int $nr) Return the first ChildCareTestParam filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByGroupId(string $group_id) Return the first ChildCareTestParam filtered by the group_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByName(string $name) Return the first ChildCareTestParam filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneById(string $id) Return the first ChildCareTestParam filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByMsrUnit(string $msr_unit) Return the first ChildCareTestParam filtered by the msr_unit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByMedian(string $median) Return the first ChildCareTestParam filtered by the median column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByHiBound(string $hi_bound) Return the first ChildCareTestParam filtered by the hi_bound column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByLoBound(string $lo_bound) Return the first ChildCareTestParam filtered by the lo_bound column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByHiCritical(string $hi_critical) Return the first ChildCareTestParam filtered by the hi_critical column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByLoCritical(string $lo_critical) Return the first ChildCareTestParam filtered by the lo_critical column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByHiToxic(string $hi_toxic) Return the first ChildCareTestParam filtered by the hi_toxic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByLoToxic(string $lo_toxic) Return the first ChildCareTestParam filtered by the lo_toxic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByStatus(string $status) Return the first ChildCareTestParam filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByHistory(string $history) Return the first ChildCareTestParam filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByModifyId(string $modify_id) Return the first ChildCareTestParam filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByModifyTime(string $modify_time) Return the first ChildCareTestParam filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByCreateId(string $create_id) Return the first ChildCareTestParam filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestParam requireOneByCreateTime(string $create_time) Return the first ChildCareTestParam filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestParam[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestParam objects based on current ModelCriteria
 * @method     ChildCareTestParam[]|ObjectCollection findByNr(int $nr) Return ChildCareTestParam objects filtered by the nr column
 * @method     ChildCareTestParam[]|ObjectCollection findByGroupId(string $group_id) Return ChildCareTestParam objects filtered by the group_id column
 * @method     ChildCareTestParam[]|ObjectCollection findByName(string $name) Return ChildCareTestParam objects filtered by the name column
 * @method     ChildCareTestParam[]|ObjectCollection findById(string $id) Return ChildCareTestParam objects filtered by the id column
 * @method     ChildCareTestParam[]|ObjectCollection findByMsrUnit(string $msr_unit) Return ChildCareTestParam objects filtered by the msr_unit column
 * @method     ChildCareTestParam[]|ObjectCollection findByMedian(string $median) Return ChildCareTestParam objects filtered by the median column
 * @method     ChildCareTestParam[]|ObjectCollection findByHiBound(string $hi_bound) Return ChildCareTestParam objects filtered by the hi_bound column
 * @method     ChildCareTestParam[]|ObjectCollection findByLoBound(string $lo_bound) Return ChildCareTestParam objects filtered by the lo_bound column
 * @method     ChildCareTestParam[]|ObjectCollection findByHiCritical(string $hi_critical) Return ChildCareTestParam objects filtered by the hi_critical column
 * @method     ChildCareTestParam[]|ObjectCollection findByLoCritical(string $lo_critical) Return ChildCareTestParam objects filtered by the lo_critical column
 * @method     ChildCareTestParam[]|ObjectCollection findByHiToxic(string $hi_toxic) Return ChildCareTestParam objects filtered by the hi_toxic column
 * @method     ChildCareTestParam[]|ObjectCollection findByLoToxic(string $lo_toxic) Return ChildCareTestParam objects filtered by the lo_toxic column
 * @method     ChildCareTestParam[]|ObjectCollection findByStatus(string $status) Return ChildCareTestParam objects filtered by the status column
 * @method     ChildCareTestParam[]|ObjectCollection findByHistory(string $history) Return ChildCareTestParam objects filtered by the history column
 * @method     ChildCareTestParam[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestParam objects filtered by the modify_id column
 * @method     ChildCareTestParam[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestParam objects filtered by the modify_time column
 * @method     ChildCareTestParam[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestParam objects filtered by the create_id column
 * @method     ChildCareTestParam[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestParam objects filtered by the create_time column
 * @method     ChildCareTestParam[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestParamQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestParamQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestParam', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestParamQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestParamQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestParamQuery) {
            return $criteria;
        }
        $query = new ChildCareTestParamQuery();
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
     * @param array[$nr, $group_id] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTestParam|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestParamTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestParamTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCareTestParam A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, group_id, name, id, msr_unit, median, hi_bound, lo_bound, hi_critical, lo_critical, hi_toxic, lo_toxic, status, history, modify_id, modify_time, create_id, create_time FROM care_test_param WHERE nr = :p0 AND group_id = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTestParam $obj */
            $obj = new ChildCareTestParam();
            $obj->hydrate($row);
            CareTestParamTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCareTestParam|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTestParamTableMap::COL_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTestParamTableMap::COL_GROUP_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTestParamTableMap::COL_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTestParamTableMap::COL_GROUP_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareTestParamTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareTestParamTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the group_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupId('fooValue');   // WHERE group_id = 'fooValue'
     * $query->filterByGroupId('%fooValue%', Criteria::LIKE); // WHERE group_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groupId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByGroupId($groupId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_GROUP_ID, $groupId, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE id = 'fooValue'
     * $query->filterById('%fooValue%', Criteria::LIKE); // WHERE id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the msr_unit column
     *
     * Example usage:
     * <code>
     * $query->filterByMsrUnit('fooValue');   // WHERE msr_unit = 'fooValue'
     * $query->filterByMsrUnit('%fooValue%', Criteria::LIKE); // WHERE msr_unit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $msrUnit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByMsrUnit($msrUnit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($msrUnit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_MSR_UNIT, $msrUnit, $comparison);
    }

    /**
     * Filter the query on the median column
     *
     * Example usage:
     * <code>
     * $query->filterByMedian('fooValue');   // WHERE median = 'fooValue'
     * $query->filterByMedian('%fooValue%', Criteria::LIKE); // WHERE median LIKE '%fooValue%'
     * </code>
     *
     * @param     string $median The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByMedian($median = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($median)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_MEDIAN, $median, $comparison);
    }

    /**
     * Filter the query on the hi_bound column
     *
     * Example usage:
     * <code>
     * $query->filterByHiBound('fooValue');   // WHERE hi_bound = 'fooValue'
     * $query->filterByHiBound('%fooValue%', Criteria::LIKE); // WHERE hi_bound LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiBound The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByHiBound($hiBound = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiBound)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_HI_BOUND, $hiBound, $comparison);
    }

    /**
     * Filter the query on the lo_bound column
     *
     * Example usage:
     * <code>
     * $query->filterByLoBound('fooValue');   // WHERE lo_bound = 'fooValue'
     * $query->filterByLoBound('%fooValue%', Criteria::LIKE); // WHERE lo_bound LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loBound The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByLoBound($loBound = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loBound)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_LO_BOUND, $loBound, $comparison);
    }

    /**
     * Filter the query on the hi_critical column
     *
     * Example usage:
     * <code>
     * $query->filterByHiCritical('fooValue');   // WHERE hi_critical = 'fooValue'
     * $query->filterByHiCritical('%fooValue%', Criteria::LIKE); // WHERE hi_critical LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiCritical The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByHiCritical($hiCritical = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiCritical)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_HI_CRITICAL, $hiCritical, $comparison);
    }

    /**
     * Filter the query on the lo_critical column
     *
     * Example usage:
     * <code>
     * $query->filterByLoCritical('fooValue');   // WHERE lo_critical = 'fooValue'
     * $query->filterByLoCritical('%fooValue%', Criteria::LIKE); // WHERE lo_critical LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loCritical The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByLoCritical($loCritical = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loCritical)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_LO_CRITICAL, $loCritical, $comparison);
    }

    /**
     * Filter the query on the hi_toxic column
     *
     * Example usage:
     * <code>
     * $query->filterByHiToxic('fooValue');   // WHERE hi_toxic = 'fooValue'
     * $query->filterByHiToxic('%fooValue%', Criteria::LIKE); // WHERE hi_toxic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiToxic The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByHiToxic($hiToxic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiToxic)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_HI_TOXIC, $hiToxic, $comparison);
    }

    /**
     * Filter the query on the lo_toxic column
     *
     * Example usage:
     * <code>
     * $query->filterByLoToxic('fooValue');   // WHERE lo_toxic = 'fooValue'
     * $query->filterByLoToxic('%fooValue%', Criteria::LIKE); // WHERE lo_toxic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loToxic The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByLoToxic($loToxic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loToxic)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_LO_TOXIC, $loToxic, $comparison);
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
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestParamTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestParamTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestParamTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestParamTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestParamTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestParam $careTestParam Object to remove from the list of results
     *
     * @return $this|ChildCareTestParamQuery The current query, for fluid interface
     */
    public function prune($careTestParam = null)
    {
        if ($careTestParam) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTestParamTableMap::COL_NR), $careTestParam->getNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTestParamTableMap::COL_GROUP_ID), $careTestParam->getGroupId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_param table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestParamTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestParamTableMap::clearInstancePool();
            CareTestParamTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestParamTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestParamTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestParamTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestParamTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestParamQuery
