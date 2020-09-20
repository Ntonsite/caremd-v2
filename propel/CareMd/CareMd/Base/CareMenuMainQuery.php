<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareMenuMain as ChildCareMenuMain;
use CareMd\CareMd\CareMenuMainQuery as ChildCareMenuMainQuery;
use CareMd\CareMd\Map\CareMenuMainTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_menu_main' table.
 *
 *
 *
 * @method     ChildCareMenuMainQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareMenuMainQuery orderBySortNr($order = Criteria::ASC) Order by the sort_nr column
 * @method     ChildCareMenuMainQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareMenuMainQuery orderByLdVar($order = Criteria::ASC) Order by the LD_var column
 * @method     ChildCareMenuMainQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     ChildCareMenuMainQuery orderByIsVisible($order = Criteria::ASC) Order by the is_visible column
 * @method     ChildCareMenuMainQuery orderByHideBy($order = Criteria::ASC) Order by the hide_by column
 * @method     ChildCareMenuMainQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareMenuMainQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareMenuMainQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 *
 * @method     ChildCareMenuMainQuery groupByNr() Group by the nr column
 * @method     ChildCareMenuMainQuery groupBySortNr() Group by the sort_nr column
 * @method     ChildCareMenuMainQuery groupByName() Group by the name column
 * @method     ChildCareMenuMainQuery groupByLdVar() Group by the LD_var column
 * @method     ChildCareMenuMainQuery groupByUrl() Group by the url column
 * @method     ChildCareMenuMainQuery groupByIsVisible() Group by the is_visible column
 * @method     ChildCareMenuMainQuery groupByHideBy() Group by the hide_by column
 * @method     ChildCareMenuMainQuery groupByStatus() Group by the status column
 * @method     ChildCareMenuMainQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareMenuMainQuery groupByModifyTime() Group by the modify_time column
 *
 * @method     ChildCareMenuMainQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareMenuMainQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareMenuMainQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareMenuMainQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareMenuMainQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareMenuMainQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareMenuMain findOne(ConnectionInterface $con = null) Return the first ChildCareMenuMain matching the query
 * @method     ChildCareMenuMain findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareMenuMain matching the query, or a new ChildCareMenuMain object populated from the query conditions when no match is found
 *
 * @method     ChildCareMenuMain findOneByNr(int $nr) Return the first ChildCareMenuMain filtered by the nr column
 * @method     ChildCareMenuMain findOneBySortNr(int $sort_nr) Return the first ChildCareMenuMain filtered by the sort_nr column
 * @method     ChildCareMenuMain findOneByName(string $name) Return the first ChildCareMenuMain filtered by the name column
 * @method     ChildCareMenuMain findOneByLdVar(string $LD_var) Return the first ChildCareMenuMain filtered by the LD_var column
 * @method     ChildCareMenuMain findOneByUrl(string $url) Return the first ChildCareMenuMain filtered by the url column
 * @method     ChildCareMenuMain findOneByIsVisible(boolean $is_visible) Return the first ChildCareMenuMain filtered by the is_visible column
 * @method     ChildCareMenuMain findOneByHideBy(string $hide_by) Return the first ChildCareMenuMain filtered by the hide_by column
 * @method     ChildCareMenuMain findOneByStatus(string $status) Return the first ChildCareMenuMain filtered by the status column
 * @method     ChildCareMenuMain findOneByModifyId(string $modify_id) Return the first ChildCareMenuMain filtered by the modify_id column
 * @method     ChildCareMenuMain findOneByModifyTime(string $modify_time) Return the first ChildCareMenuMain filtered by the modify_time column *

 * @method     ChildCareMenuMain requirePk($key, ConnectionInterface $con = null) Return the ChildCareMenuMain by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuMain requireOne(ConnectionInterface $con = null) Return the first ChildCareMenuMain matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMenuMain requireOneByNr(int $nr) Return the first ChildCareMenuMain filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuMain requireOneBySortNr(int $sort_nr) Return the first ChildCareMenuMain filtered by the sort_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuMain requireOneByName(string $name) Return the first ChildCareMenuMain filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuMain requireOneByLdVar(string $LD_var) Return the first ChildCareMenuMain filtered by the LD_var column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuMain requireOneByUrl(string $url) Return the first ChildCareMenuMain filtered by the url column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuMain requireOneByIsVisible(boolean $is_visible) Return the first ChildCareMenuMain filtered by the is_visible column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuMain requireOneByHideBy(string $hide_by) Return the first ChildCareMenuMain filtered by the hide_by column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuMain requireOneByStatus(string $status) Return the first ChildCareMenuMain filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuMain requireOneByModifyId(string $modify_id) Return the first ChildCareMenuMain filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuMain requireOneByModifyTime(string $modify_time) Return the first ChildCareMenuMain filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMenuMain[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareMenuMain objects based on current ModelCriteria
 * @method     ChildCareMenuMain[]|ObjectCollection findByNr(int $nr) Return ChildCareMenuMain objects filtered by the nr column
 * @method     ChildCareMenuMain[]|ObjectCollection findBySortNr(int $sort_nr) Return ChildCareMenuMain objects filtered by the sort_nr column
 * @method     ChildCareMenuMain[]|ObjectCollection findByName(string $name) Return ChildCareMenuMain objects filtered by the name column
 * @method     ChildCareMenuMain[]|ObjectCollection findByLdVar(string $LD_var) Return ChildCareMenuMain objects filtered by the LD_var column
 * @method     ChildCareMenuMain[]|ObjectCollection findByUrl(string $url) Return ChildCareMenuMain objects filtered by the url column
 * @method     ChildCareMenuMain[]|ObjectCollection findByIsVisible(boolean $is_visible) Return ChildCareMenuMain objects filtered by the is_visible column
 * @method     ChildCareMenuMain[]|ObjectCollection findByHideBy(string $hide_by) Return ChildCareMenuMain objects filtered by the hide_by column
 * @method     ChildCareMenuMain[]|ObjectCollection findByStatus(string $status) Return ChildCareMenuMain objects filtered by the status column
 * @method     ChildCareMenuMain[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareMenuMain objects filtered by the modify_id column
 * @method     ChildCareMenuMain[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareMenuMain objects filtered by the modify_time column
 * @method     ChildCareMenuMain[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareMenuMainQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareMenuMainQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareMenuMain', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareMenuMainQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareMenuMainQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareMenuMainQuery) {
            return $criteria;
        }
        $query = new ChildCareMenuMainQuery();
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
     * @return ChildCareMenuMain|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareMenuMainTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareMenuMainTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareMenuMain A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, sort_nr, name, LD_var, url, is_visible, hide_by, status, modify_id, modify_time FROM care_menu_main WHERE nr = :p0';
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
            /** @var ChildCareMenuMain $obj */
            $obj = new ChildCareMenuMain();
            $obj->hydrate($row);
            CareMenuMainTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareMenuMain|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareMenuMainTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareMenuMainTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareMenuMainTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareMenuMainTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuMainTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterBySortNr($sortNr = null, $comparison = null)
    {
        if (is_array($sortNr)) {
            $useMinMax = false;
            if (isset($sortNr['min'])) {
                $this->addUsingAlias(CareMenuMainTableMap::COL_SORT_NR, $sortNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortNr['max'])) {
                $this->addUsingAlias(CareMenuMainTableMap::COL_SORT_NR, $sortNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuMainTableMap::COL_SORT_NR, $sortNr, $comparison);
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
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuMainTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the LD_var column
     *
     * Example usage:
     * <code>
     * $query->filterByLdVar('fooValue');   // WHERE LD_var = 'fooValue'
     * $query->filterByLdVar('%fooValue%', Criteria::LIKE); // WHERE LD_var LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ldVar The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByLdVar($ldVar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ldVar)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuMainTableMap::COL_LD_VAR, $ldVar, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%', Criteria::LIKE); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuMainTableMap::COL_URL, $url, $comparison);
    }

    /**
     * Filter the query on the is_visible column
     *
     * Example usage:
     * <code>
     * $query->filterByIsVisible(true); // WHERE is_visible = true
     * $query->filterByIsVisible('yes'); // WHERE is_visible = true
     * </code>
     *
     * @param     boolean|string $isVisible The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByIsVisible($isVisible = null, $comparison = null)
    {
        if (is_string($isVisible)) {
            $isVisible = in_array(strtolower($isVisible), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareMenuMainTableMap::COL_IS_VISIBLE, $isVisible, $comparison);
    }

    /**
     * Filter the query on the hide_by column
     *
     * Example usage:
     * <code>
     * $query->filterByHideBy('fooValue');   // WHERE hide_by = 'fooValue'
     * $query->filterByHideBy('%fooValue%', Criteria::LIKE); // WHERE hide_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hideBy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByHideBy($hideBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hideBy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuMainTableMap::COL_HIDE_BY, $hideBy, $comparison);
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
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuMainTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the modify_id column
     *
     * Example usage:
     * <code>
     * $query->filterByModifyId('2011-03-14'); // WHERE modify_id = '2011-03-14'
     * $query->filterByModifyId('now'); // WHERE modify_id = '2011-03-14'
     * $query->filterByModifyId(array('max' => 'yesterday')); // WHERE modify_id > '2011-03-13'
     * </code>
     *
     * @param     mixed $modifyId The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (is_array($modifyId)) {
            $useMinMax = false;
            if (isset($modifyId['min'])) {
                $this->addUsingAlias(CareMenuMainTableMap::COL_MODIFY_ID, $modifyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyId['max'])) {
                $this->addUsingAlias(CareMenuMainTableMap::COL_MODIFY_ID, $modifyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuMainTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareMenuMainTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareMenuMainTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuMainTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareMenuMain $careMenuMain Object to remove from the list of results
     *
     * @return $this|ChildCareMenuMainQuery The current query, for fluid interface
     */
    public function prune($careMenuMain = null)
    {
        if ($careMenuMain) {
            $this->addUsingAlias(CareMenuMainTableMap::COL_NR, $careMenuMain->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_menu_main table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMenuMainTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareMenuMainTableMap::clearInstancePool();
            CareMenuMainTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMenuMainTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareMenuMainTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareMenuMainTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareMenuMainTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareMenuMainQuery
