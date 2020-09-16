<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTypeAnaesthesia as ChildCareTypeAnaesthesia;
use CareMd\CareMd\CareTypeAnaesthesiaQuery as ChildCareTypeAnaesthesiaQuery;
use CareMd\CareMd\Map\CareTypeAnaesthesiaTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_type_anaesthesia' table.
 *
 *
 *
 * @method     ChildCareTypeAnaesthesiaQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareTypeAnaesthesiaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTypeAnaesthesiaQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTypeAnaesthesiaQuery orderByLdVar($order = Criteria::ASC) Order by the LD_var column
 * @method     ChildCareTypeAnaesthesiaQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareTypeAnaesthesiaQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTypeAnaesthesiaQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTypeAnaesthesiaQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTypeAnaesthesiaQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTypeAnaesthesiaQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTypeAnaesthesiaQuery groupByNr() Group by the nr column
 * @method     ChildCareTypeAnaesthesiaQuery groupById() Group by the id column
 * @method     ChildCareTypeAnaesthesiaQuery groupByName() Group by the name column
 * @method     ChildCareTypeAnaesthesiaQuery groupByLdVar() Group by the LD_var column
 * @method     ChildCareTypeAnaesthesiaQuery groupByDescription() Group by the description column
 * @method     ChildCareTypeAnaesthesiaQuery groupByStatus() Group by the status column
 * @method     ChildCareTypeAnaesthesiaQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTypeAnaesthesiaQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTypeAnaesthesiaQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTypeAnaesthesiaQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTypeAnaesthesiaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTypeAnaesthesiaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTypeAnaesthesiaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTypeAnaesthesiaQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTypeAnaesthesiaQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTypeAnaesthesiaQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTypeAnaesthesia findOne(ConnectionInterface $con = null) Return the first ChildCareTypeAnaesthesia matching the query
 * @method     ChildCareTypeAnaesthesia findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTypeAnaesthesia matching the query, or a new ChildCareTypeAnaesthesia object populated from the query conditions when no match is found
 *
 * @method     ChildCareTypeAnaesthesia findOneByNr(int $nr) Return the first ChildCareTypeAnaesthesia filtered by the nr column
 * @method     ChildCareTypeAnaesthesia findOneById(string $id) Return the first ChildCareTypeAnaesthesia filtered by the id column
 * @method     ChildCareTypeAnaesthesia findOneByName(string $name) Return the first ChildCareTypeAnaesthesia filtered by the name column
 * @method     ChildCareTypeAnaesthesia findOneByLdVar(string $LD_var) Return the first ChildCareTypeAnaesthesia filtered by the LD_var column
 * @method     ChildCareTypeAnaesthesia findOneByDescription(string $description) Return the first ChildCareTypeAnaesthesia filtered by the description column
 * @method     ChildCareTypeAnaesthesia findOneByStatus(string $status) Return the first ChildCareTypeAnaesthesia filtered by the status column
 * @method     ChildCareTypeAnaesthesia findOneByModifyId(string $modify_id) Return the first ChildCareTypeAnaesthesia filtered by the modify_id column
 * @method     ChildCareTypeAnaesthesia findOneByModifyTime(string $modify_time) Return the first ChildCareTypeAnaesthesia filtered by the modify_time column
 * @method     ChildCareTypeAnaesthesia findOneByCreateId(string $create_id) Return the first ChildCareTypeAnaesthesia filtered by the create_id column
 * @method     ChildCareTypeAnaesthesia findOneByCreateTime(string $create_time) Return the first ChildCareTypeAnaesthesia filtered by the create_time column *

 * @method     ChildCareTypeAnaesthesia requirePk($key, ConnectionInterface $con = null) Return the ChildCareTypeAnaesthesia by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeAnaesthesia requireOne(ConnectionInterface $con = null) Return the first ChildCareTypeAnaesthesia matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTypeAnaesthesia requireOneByNr(int $nr) Return the first ChildCareTypeAnaesthesia filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeAnaesthesia requireOneById(string $id) Return the first ChildCareTypeAnaesthesia filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeAnaesthesia requireOneByName(string $name) Return the first ChildCareTypeAnaesthesia filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeAnaesthesia requireOneByLdVar(string $LD_var) Return the first ChildCareTypeAnaesthesia filtered by the LD_var column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeAnaesthesia requireOneByDescription(string $description) Return the first ChildCareTypeAnaesthesia filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeAnaesthesia requireOneByStatus(string $status) Return the first ChildCareTypeAnaesthesia filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeAnaesthesia requireOneByModifyId(string $modify_id) Return the first ChildCareTypeAnaesthesia filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeAnaesthesia requireOneByModifyTime(string $modify_time) Return the first ChildCareTypeAnaesthesia filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeAnaesthesia requireOneByCreateId(string $create_id) Return the first ChildCareTypeAnaesthesia filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeAnaesthesia requireOneByCreateTime(string $create_time) Return the first ChildCareTypeAnaesthesia filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTypeAnaesthesia objects based on current ModelCriteria
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection findByNr(int $nr) Return ChildCareTypeAnaesthesia objects filtered by the nr column
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection findById(string $id) Return ChildCareTypeAnaesthesia objects filtered by the id column
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection findByName(string $name) Return ChildCareTypeAnaesthesia objects filtered by the name column
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection findByLdVar(string $LD_var) Return ChildCareTypeAnaesthesia objects filtered by the LD_var column
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection findByDescription(string $description) Return ChildCareTypeAnaesthesia objects filtered by the description column
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection findByStatus(string $status) Return ChildCareTypeAnaesthesia objects filtered by the status column
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTypeAnaesthesia objects filtered by the modify_id column
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTypeAnaesthesia objects filtered by the modify_time column
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTypeAnaesthesia objects filtered by the create_id column
 * @method     ChildCareTypeAnaesthesia[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTypeAnaesthesia objects filtered by the create_time column
 * @method     ChildCareTypeAnaesthesia[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTypeAnaesthesiaQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTypeAnaesthesiaQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTypeAnaesthesia', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTypeAnaesthesiaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTypeAnaesthesiaQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTypeAnaesthesiaQuery) {
            return $criteria;
        }
        $query = new ChildCareTypeAnaesthesiaQuery();
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
     * @return ChildCareTypeAnaesthesia|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTypeAnaesthesiaTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTypeAnaesthesiaTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTypeAnaesthesia A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, id, name, LD_var, description, status, modify_id, modify_time, create_id, create_time FROM care_type_anaesthesia WHERE nr = :p0';
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
            /** @var ChildCareTypeAnaesthesia $obj */
            $obj = new ChildCareTypeAnaesthesia();
            $obj->hydrate($row);
            CareTypeAnaesthesiaTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTypeAnaesthesia|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_NAME, $name, $comparison);
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
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByLdVar($ldVar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ldVar)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_LD_VAR, $ldVar, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_DESCRIPTION, $description, $comparison);
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
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTypeAnaesthesia $careTypeAnaesthesia Object to remove from the list of results
     *
     * @return $this|ChildCareTypeAnaesthesiaQuery The current query, for fluid interface
     */
    public function prune($careTypeAnaesthesia = null)
    {
        if ($careTypeAnaesthesia) {
            $this->addUsingAlias(CareTypeAnaesthesiaTableMap::COL_NR, $careTypeAnaesthesia->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_type_anaesthesia table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeAnaesthesiaTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTypeAnaesthesiaTableMap::clearInstancePool();
            CareTypeAnaesthesiaTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeAnaesthesiaTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTypeAnaesthesiaTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTypeAnaesthesiaTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTypeAnaesthesiaTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTypeAnaesthesiaQuery
