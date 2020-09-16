<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTypeEthnicOrig as ChildCareTypeEthnicOrig;
use CareMd\CareMd\CareTypeEthnicOrigQuery as ChildCareTypeEthnicOrigQuery;
use CareMd\CareMd\Map\CareTypeEthnicOrigTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_type_ethnic_orig' table.
 *
 *
 *
 * @method     ChildCareTypeEthnicOrigQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareTypeEthnicOrigQuery orderByClassNr($order = Criteria::ASC) Order by the class_nr column
 * @method     ChildCareTypeEthnicOrigQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTypeEthnicOrigQuery orderByLdVar($order = Criteria::ASC) Order by the LD_var column
 * @method     ChildCareTypeEthnicOrigQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTypeEthnicOrigQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTypeEthnicOrigQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTypeEthnicOrigQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTypeEthnicOrigQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTypeEthnicOrigQuery groupByNr() Group by the nr column
 * @method     ChildCareTypeEthnicOrigQuery groupByClassNr() Group by the class_nr column
 * @method     ChildCareTypeEthnicOrigQuery groupByName() Group by the name column
 * @method     ChildCareTypeEthnicOrigQuery groupByLdVar() Group by the LD_var column
 * @method     ChildCareTypeEthnicOrigQuery groupByStatus() Group by the status column
 * @method     ChildCareTypeEthnicOrigQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTypeEthnicOrigQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTypeEthnicOrigQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTypeEthnicOrigQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTypeEthnicOrigQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTypeEthnicOrigQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTypeEthnicOrigQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTypeEthnicOrigQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTypeEthnicOrigQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTypeEthnicOrigQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTypeEthnicOrig findOne(ConnectionInterface $con = null) Return the first ChildCareTypeEthnicOrig matching the query
 * @method     ChildCareTypeEthnicOrig findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTypeEthnicOrig matching the query, or a new ChildCareTypeEthnicOrig object populated from the query conditions when no match is found
 *
 * @method     ChildCareTypeEthnicOrig findOneByNr(int $nr) Return the first ChildCareTypeEthnicOrig filtered by the nr column
 * @method     ChildCareTypeEthnicOrig findOneByClassNr(int $class_nr) Return the first ChildCareTypeEthnicOrig filtered by the class_nr column
 * @method     ChildCareTypeEthnicOrig findOneByName(string $name) Return the first ChildCareTypeEthnicOrig filtered by the name column
 * @method     ChildCareTypeEthnicOrig findOneByLdVar(string $LD_var) Return the first ChildCareTypeEthnicOrig filtered by the LD_var column
 * @method     ChildCareTypeEthnicOrig findOneByStatus(string $status) Return the first ChildCareTypeEthnicOrig filtered by the status column
 * @method     ChildCareTypeEthnicOrig findOneByModifyId(string $modify_id) Return the first ChildCareTypeEthnicOrig filtered by the modify_id column
 * @method     ChildCareTypeEthnicOrig findOneByModifyTime(string $modify_time) Return the first ChildCareTypeEthnicOrig filtered by the modify_time column
 * @method     ChildCareTypeEthnicOrig findOneByCreateId(string $create_id) Return the first ChildCareTypeEthnicOrig filtered by the create_id column
 * @method     ChildCareTypeEthnicOrig findOneByCreateTime(string $create_time) Return the first ChildCareTypeEthnicOrig filtered by the create_time column *

 * @method     ChildCareTypeEthnicOrig requirePk($key, ConnectionInterface $con = null) Return the ChildCareTypeEthnicOrig by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeEthnicOrig requireOne(ConnectionInterface $con = null) Return the first ChildCareTypeEthnicOrig matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTypeEthnicOrig requireOneByNr(int $nr) Return the first ChildCareTypeEthnicOrig filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeEthnicOrig requireOneByClassNr(int $class_nr) Return the first ChildCareTypeEthnicOrig filtered by the class_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeEthnicOrig requireOneByName(string $name) Return the first ChildCareTypeEthnicOrig filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeEthnicOrig requireOneByLdVar(string $LD_var) Return the first ChildCareTypeEthnicOrig filtered by the LD_var column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeEthnicOrig requireOneByStatus(string $status) Return the first ChildCareTypeEthnicOrig filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeEthnicOrig requireOneByModifyId(string $modify_id) Return the first ChildCareTypeEthnicOrig filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeEthnicOrig requireOneByModifyTime(string $modify_time) Return the first ChildCareTypeEthnicOrig filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeEthnicOrig requireOneByCreateId(string $create_id) Return the first ChildCareTypeEthnicOrig filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeEthnicOrig requireOneByCreateTime(string $create_time) Return the first ChildCareTypeEthnicOrig filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTypeEthnicOrig[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTypeEthnicOrig objects based on current ModelCriteria
 * @method     ChildCareTypeEthnicOrig[]|ObjectCollection findByNr(int $nr) Return ChildCareTypeEthnicOrig objects filtered by the nr column
 * @method     ChildCareTypeEthnicOrig[]|ObjectCollection findByClassNr(int $class_nr) Return ChildCareTypeEthnicOrig objects filtered by the class_nr column
 * @method     ChildCareTypeEthnicOrig[]|ObjectCollection findByName(string $name) Return ChildCareTypeEthnicOrig objects filtered by the name column
 * @method     ChildCareTypeEthnicOrig[]|ObjectCollection findByLdVar(string $LD_var) Return ChildCareTypeEthnicOrig objects filtered by the LD_var column
 * @method     ChildCareTypeEthnicOrig[]|ObjectCollection findByStatus(string $status) Return ChildCareTypeEthnicOrig objects filtered by the status column
 * @method     ChildCareTypeEthnicOrig[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTypeEthnicOrig objects filtered by the modify_id column
 * @method     ChildCareTypeEthnicOrig[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTypeEthnicOrig objects filtered by the modify_time column
 * @method     ChildCareTypeEthnicOrig[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTypeEthnicOrig objects filtered by the create_id column
 * @method     ChildCareTypeEthnicOrig[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTypeEthnicOrig objects filtered by the create_time column
 * @method     ChildCareTypeEthnicOrig[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTypeEthnicOrigQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTypeEthnicOrigQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTypeEthnicOrig', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTypeEthnicOrigQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTypeEthnicOrigQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTypeEthnicOrigQuery) {
            return $criteria;
        }
        $query = new ChildCareTypeEthnicOrigQuery();
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
     * @return ChildCareTypeEthnicOrig|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTypeEthnicOrigTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTypeEthnicOrigTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTypeEthnicOrig A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, class_nr, name, LD_var, status, modify_id, modify_time, create_id, create_time FROM care_type_ethnic_orig WHERE nr = :p0';
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
            /** @var ChildCareTypeEthnicOrig $obj */
            $obj = new ChildCareTypeEthnicOrig();
            $obj->hydrate($row);
            CareTypeEthnicOrigTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTypeEthnicOrig|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the class_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByClassNr(1234); // WHERE class_nr = 1234
     * $query->filterByClassNr(array(12, 34)); // WHERE class_nr IN (12, 34)
     * $query->filterByClassNr(array('min' => 12)); // WHERE class_nr > 12
     * </code>
     *
     * @param     mixed $classNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByClassNr($classNr = null, $comparison = null)
    {
        if (is_array($classNr)) {
            $useMinMax = false;
            if (isset($classNr['min'])) {
                $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_CLASS_NR, $classNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classNr['max'])) {
                $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_CLASS_NR, $classNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_CLASS_NR, $classNr, $comparison);
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
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_NAME, $name, $comparison);
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
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByLdVar($ldVar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ldVar)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_LD_VAR, $ldVar, $comparison);
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
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTypeEthnicOrig $careTypeEthnicOrig Object to remove from the list of results
     *
     * @return $this|ChildCareTypeEthnicOrigQuery The current query, for fluid interface
     */
    public function prune($careTypeEthnicOrig = null)
    {
        if ($careTypeEthnicOrig) {
            $this->addUsingAlias(CareTypeEthnicOrigTableMap::COL_NR, $careTypeEthnicOrig->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_type_ethnic_orig table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeEthnicOrigTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTypeEthnicOrigTableMap::clearInstancePool();
            CareTypeEthnicOrigTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeEthnicOrigTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTypeEthnicOrigTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTypeEthnicOrigTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTypeEthnicOrigTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTypeEthnicOrigQuery
