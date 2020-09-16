<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestGroup as ChildCareTestGroup;
use CareMd\CareMd\CareTestGroupQuery as ChildCareTestGroupQuery;
use CareMd\CareMd\Map\CareTestGroupTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_group' table.
 *
 *
 *
 * @method     ChildCareTestGroupQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareTestGroupQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method     ChildCareTestGroupQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTestGroupQuery orderBySortNr($order = Criteria::ASC) Order by the sort_nr column
 * @method     ChildCareTestGroupQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestGroupQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestGroupQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestGroupQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestGroupQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestGroupQuery groupByNr() Group by the nr column
 * @method     ChildCareTestGroupQuery groupByGroupId() Group by the group_id column
 * @method     ChildCareTestGroupQuery groupByName() Group by the name column
 * @method     ChildCareTestGroupQuery groupBySortNr() Group by the sort_nr column
 * @method     ChildCareTestGroupQuery groupByStatus() Group by the status column
 * @method     ChildCareTestGroupQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestGroupQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestGroupQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestGroupQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestGroupQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestGroupQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestGroupQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestGroup findOne(ConnectionInterface $con = null) Return the first ChildCareTestGroup matching the query
 * @method     ChildCareTestGroup findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestGroup matching the query, or a new ChildCareTestGroup object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestGroup findOneByNr(int $nr) Return the first ChildCareTestGroup filtered by the nr column
 * @method     ChildCareTestGroup findOneByGroupId(string $group_id) Return the first ChildCareTestGroup filtered by the group_id column
 * @method     ChildCareTestGroup findOneByName(string $name) Return the first ChildCareTestGroup filtered by the name column
 * @method     ChildCareTestGroup findOneBySortNr(int $sort_nr) Return the first ChildCareTestGroup filtered by the sort_nr column
 * @method     ChildCareTestGroup findOneByStatus(string $status) Return the first ChildCareTestGroup filtered by the status column
 * @method     ChildCareTestGroup findOneByModifyId(string $modify_id) Return the first ChildCareTestGroup filtered by the modify_id column
 * @method     ChildCareTestGroup findOneByModifyTime(string $modify_time) Return the first ChildCareTestGroup filtered by the modify_time column
 * @method     ChildCareTestGroup findOneByCreateId(string $create_id) Return the first ChildCareTestGroup filtered by the create_id column
 * @method     ChildCareTestGroup findOneByCreateTime(string $create_time) Return the first ChildCareTestGroup filtered by the create_time column *

 * @method     ChildCareTestGroup requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestGroup by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestGroup requireOne(ConnectionInterface $con = null) Return the first ChildCareTestGroup matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestGroup requireOneByNr(int $nr) Return the first ChildCareTestGroup filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestGroup requireOneByGroupId(string $group_id) Return the first ChildCareTestGroup filtered by the group_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestGroup requireOneByName(string $name) Return the first ChildCareTestGroup filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestGroup requireOneBySortNr(int $sort_nr) Return the first ChildCareTestGroup filtered by the sort_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestGroup requireOneByStatus(string $status) Return the first ChildCareTestGroup filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestGroup requireOneByModifyId(string $modify_id) Return the first ChildCareTestGroup filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestGroup requireOneByModifyTime(string $modify_time) Return the first ChildCareTestGroup filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestGroup requireOneByCreateId(string $create_id) Return the first ChildCareTestGroup filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestGroup requireOneByCreateTime(string $create_time) Return the first ChildCareTestGroup filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestGroup[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestGroup objects based on current ModelCriteria
 * @method     ChildCareTestGroup[]|ObjectCollection findByNr(int $nr) Return ChildCareTestGroup objects filtered by the nr column
 * @method     ChildCareTestGroup[]|ObjectCollection findByGroupId(string $group_id) Return ChildCareTestGroup objects filtered by the group_id column
 * @method     ChildCareTestGroup[]|ObjectCollection findByName(string $name) Return ChildCareTestGroup objects filtered by the name column
 * @method     ChildCareTestGroup[]|ObjectCollection findBySortNr(int $sort_nr) Return ChildCareTestGroup objects filtered by the sort_nr column
 * @method     ChildCareTestGroup[]|ObjectCollection findByStatus(string $status) Return ChildCareTestGroup objects filtered by the status column
 * @method     ChildCareTestGroup[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestGroup objects filtered by the modify_id column
 * @method     ChildCareTestGroup[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestGroup objects filtered by the modify_time column
 * @method     ChildCareTestGroup[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestGroup objects filtered by the create_id column
 * @method     ChildCareTestGroup[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestGroup objects filtered by the create_time column
 * @method     ChildCareTestGroup[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestGroupQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestGroupQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestGroup', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestGroupQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestGroupQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestGroupQuery) {
            return $criteria;
        }
        $query = new ChildCareTestGroupQuery();
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
     * @return ChildCareTestGroup|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestGroupTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestGroupTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCareTestGroup A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, group_id, name, sort_nr, status, modify_id, modify_time, create_id, create_time FROM care_test_group WHERE nr = :p0 AND group_id = :p1';
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
            /** @var ChildCareTestGroup $obj */
            $obj = new ChildCareTestGroup();
            $obj->hydrate($row);
            CareTestGroupTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCareTestGroup|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTestGroupTableMap::COL_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTestGroupTableMap::COL_GROUP_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTestGroupTableMap::COL_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTestGroupTableMap::COL_GROUP_ID, $key[1], Criteria::EQUAL);
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
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareTestGroupTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareTestGroupTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestGroupTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterByGroupId($groupId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestGroupTableMap::COL_GROUP_ID, $groupId, $comparison);
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
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestGroupTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the sort_nr column
     *
     * Example usage:
     * <code>
     * $query->filterBySortNr(1234); // WHERE sort_nr = 1234
     * $query->filterBySortNr(array(12, 34)); // WHERE sort_nr IN (12, 34)
     * $query->filterBySortNr(array('min' => 12)); // WHERE sort_nr > 12
     * </code>
     *
     * @param     mixed $sortNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterBySortNr($sortNr = null, $comparison = null)
    {
        if (is_array($sortNr)) {
            $useMinMax = false;
            if (isset($sortNr['min'])) {
                $this->addUsingAlias(CareTestGroupTableMap::COL_SORT_NR, $sortNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortNr['max'])) {
                $this->addUsingAlias(CareTestGroupTableMap::COL_SORT_NR, $sortNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestGroupTableMap::COL_SORT_NR, $sortNr, $comparison);
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
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestGroupTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestGroupTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestGroupTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestGroupTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestGroupTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestGroupTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestGroupTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestGroupTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestGroupTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestGroup $careTestGroup Object to remove from the list of results
     *
     * @return $this|ChildCareTestGroupQuery The current query, for fluid interface
     */
    public function prune($careTestGroup = null)
    {
        if ($careTestGroup) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTestGroupTableMap::COL_NR), $careTestGroup->getNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTestGroupTableMap::COL_GROUP_ID), $careTestGroup->getGroupId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_group table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestGroupTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestGroupTableMap::clearInstancePool();
            CareTestGroupTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestGroupTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestGroupTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestGroupTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestGroupTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestGroupQuery
