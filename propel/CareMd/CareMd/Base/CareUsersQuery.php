<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareUsers as ChildCareUsers;
use CareMd\CareMd\CareUsersQuery as ChildCareUsersQuery;
use CareMd\CareMd\Map\CareUsersTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_users' table.
 *
 *
 *
 * @method     ChildCareUsersQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareUsersQuery orderByLoginId($order = Criteria::ASC) Order by the login_id column
 * @method     ChildCareUsersQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     ChildCareUsersQuery orderByPersonellNr($order = Criteria::ASC) Order by the personell_nr column
 * @method     ChildCareUsersQuery orderByLockflag($order = Criteria::ASC) Order by the lockflag column
 * @method     ChildCareUsersQuery orderByRoleId($order = Criteria::ASC) Order by the role_id column
 * @method     ChildCareUsersQuery orderByExc($order = Criteria::ASC) Order by the exc column
 * @method     ChildCareUsersQuery orderBySDate($order = Criteria::ASC) Order by the s_date column
 * @method     ChildCareUsersQuery orderBySTime($order = Criteria::ASC) Order by the s_time column
 * @method     ChildCareUsersQuery orderByExpireDate($order = Criteria::ASC) Order by the expire_date column
 * @method     ChildCareUsersQuery orderByExpireTime($order = Criteria::ASC) Order by the expire_time column
 * @method     ChildCareUsersQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareUsersQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareUsersQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareUsersQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareUsersQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareUsersQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareUsersQuery orderByThemeName($order = Criteria::ASC) Order by the theme_name column
 * @method     ChildCareUsersQuery orderByOccupation($order = Criteria::ASC) Order by the occupation column
 * @method     ChildCareUsersQuery orderByTelNo($order = Criteria::ASC) Order by the tel_no column
 *
 * @method     ChildCareUsersQuery groupByName() Group by the name column
 * @method     ChildCareUsersQuery groupByLoginId() Group by the login_id column
 * @method     ChildCareUsersQuery groupByPassword() Group by the password column
 * @method     ChildCareUsersQuery groupByPersonellNr() Group by the personell_nr column
 * @method     ChildCareUsersQuery groupByLockflag() Group by the lockflag column
 * @method     ChildCareUsersQuery groupByRoleId() Group by the role_id column
 * @method     ChildCareUsersQuery groupByExc() Group by the exc column
 * @method     ChildCareUsersQuery groupBySDate() Group by the s_date column
 * @method     ChildCareUsersQuery groupBySTime() Group by the s_time column
 * @method     ChildCareUsersQuery groupByExpireDate() Group by the expire_date column
 * @method     ChildCareUsersQuery groupByExpireTime() Group by the expire_time column
 * @method     ChildCareUsersQuery groupByStatus() Group by the status column
 * @method     ChildCareUsersQuery groupByHistory() Group by the history column
 * @method     ChildCareUsersQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareUsersQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareUsersQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareUsersQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareUsersQuery groupByThemeName() Group by the theme_name column
 * @method     ChildCareUsersQuery groupByOccupation() Group by the occupation column
 * @method     ChildCareUsersQuery groupByTelNo() Group by the tel_no column
 *
 * @method     ChildCareUsersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareUsersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareUsersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareUsersQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareUsersQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareUsersQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareUsers findOne(ConnectionInterface $con = null) Return the first ChildCareUsers matching the query
 * @method     ChildCareUsers findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareUsers matching the query, or a new ChildCareUsers object populated from the query conditions when no match is found
 *
 * @method     ChildCareUsers findOneByName(string $name) Return the first ChildCareUsers filtered by the name column
 * @method     ChildCareUsers findOneByLoginId(string $login_id) Return the first ChildCareUsers filtered by the login_id column
 * @method     ChildCareUsers findOneByPassword(string $password) Return the first ChildCareUsers filtered by the password column
 * @method     ChildCareUsers findOneByPersonellNr(int $personell_nr) Return the first ChildCareUsers filtered by the personell_nr column
 * @method     ChildCareUsers findOneByLockflag(int $lockflag) Return the first ChildCareUsers filtered by the lockflag column
 * @method     ChildCareUsers findOneByRoleId(int $role_id) Return the first ChildCareUsers filtered by the role_id column
 * @method     ChildCareUsers findOneByExc(boolean $exc) Return the first ChildCareUsers filtered by the exc column
 * @method     ChildCareUsers findOneBySDate(string $s_date) Return the first ChildCareUsers filtered by the s_date column
 * @method     ChildCareUsers findOneBySTime(string $s_time) Return the first ChildCareUsers filtered by the s_time column
 * @method     ChildCareUsers findOneByExpireDate(string $expire_date) Return the first ChildCareUsers filtered by the expire_date column
 * @method     ChildCareUsers findOneByExpireTime(string $expire_time) Return the first ChildCareUsers filtered by the expire_time column
 * @method     ChildCareUsers findOneByStatus(string $status) Return the first ChildCareUsers filtered by the status column
 * @method     ChildCareUsers findOneByHistory(string $history) Return the first ChildCareUsers filtered by the history column
 * @method     ChildCareUsers findOneByModifyId(string $modify_id) Return the first ChildCareUsers filtered by the modify_id column
 * @method     ChildCareUsers findOneByModifyTime(string $modify_time) Return the first ChildCareUsers filtered by the modify_time column
 * @method     ChildCareUsers findOneByCreateId(string $create_id) Return the first ChildCareUsers filtered by the create_id column
 * @method     ChildCareUsers findOneByCreateTime(string $create_time) Return the first ChildCareUsers filtered by the create_time column
 * @method     ChildCareUsers findOneByThemeName(string $theme_name) Return the first ChildCareUsers filtered by the theme_name column
 * @method     ChildCareUsers findOneByOccupation(string $occupation) Return the first ChildCareUsers filtered by the occupation column
 * @method     ChildCareUsers findOneByTelNo(string $tel_no) Return the first ChildCareUsers filtered by the tel_no column *

 * @method     ChildCareUsers requirePk($key, ConnectionInterface $con = null) Return the ChildCareUsers by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOne(ConnectionInterface $con = null) Return the first ChildCareUsers matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareUsers requireOneByName(string $name) Return the first ChildCareUsers filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByLoginId(string $login_id) Return the first ChildCareUsers filtered by the login_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByPassword(string $password) Return the first ChildCareUsers filtered by the password column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByPersonellNr(int $personell_nr) Return the first ChildCareUsers filtered by the personell_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByLockflag(int $lockflag) Return the first ChildCareUsers filtered by the lockflag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByRoleId(int $role_id) Return the first ChildCareUsers filtered by the role_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByExc(boolean $exc) Return the first ChildCareUsers filtered by the exc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneBySDate(string $s_date) Return the first ChildCareUsers filtered by the s_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneBySTime(string $s_time) Return the first ChildCareUsers filtered by the s_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByExpireDate(string $expire_date) Return the first ChildCareUsers filtered by the expire_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByExpireTime(string $expire_time) Return the first ChildCareUsers filtered by the expire_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByStatus(string $status) Return the first ChildCareUsers filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByHistory(string $history) Return the first ChildCareUsers filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByModifyId(string $modify_id) Return the first ChildCareUsers filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByModifyTime(string $modify_time) Return the first ChildCareUsers filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByCreateId(string $create_id) Return the first ChildCareUsers filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByCreateTime(string $create_time) Return the first ChildCareUsers filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByThemeName(string $theme_name) Return the first ChildCareUsers filtered by the theme_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByOccupation(string $occupation) Return the first ChildCareUsers filtered by the occupation column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareUsers requireOneByTelNo(string $tel_no) Return the first ChildCareUsers filtered by the tel_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareUsers[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareUsers objects based on current ModelCriteria
 * @method     ChildCareUsers[]|ObjectCollection findByName(string $name) Return ChildCareUsers objects filtered by the name column
 * @method     ChildCareUsers[]|ObjectCollection findByLoginId(string $login_id) Return ChildCareUsers objects filtered by the login_id column
 * @method     ChildCareUsers[]|ObjectCollection findByPassword(string $password) Return ChildCareUsers objects filtered by the password column
 * @method     ChildCareUsers[]|ObjectCollection findByPersonellNr(int $personell_nr) Return ChildCareUsers objects filtered by the personell_nr column
 * @method     ChildCareUsers[]|ObjectCollection findByLockflag(int $lockflag) Return ChildCareUsers objects filtered by the lockflag column
 * @method     ChildCareUsers[]|ObjectCollection findByRoleId(int $role_id) Return ChildCareUsers objects filtered by the role_id column
 * @method     ChildCareUsers[]|ObjectCollection findByExc(boolean $exc) Return ChildCareUsers objects filtered by the exc column
 * @method     ChildCareUsers[]|ObjectCollection findBySDate(string $s_date) Return ChildCareUsers objects filtered by the s_date column
 * @method     ChildCareUsers[]|ObjectCollection findBySTime(string $s_time) Return ChildCareUsers objects filtered by the s_time column
 * @method     ChildCareUsers[]|ObjectCollection findByExpireDate(string $expire_date) Return ChildCareUsers objects filtered by the expire_date column
 * @method     ChildCareUsers[]|ObjectCollection findByExpireTime(string $expire_time) Return ChildCareUsers objects filtered by the expire_time column
 * @method     ChildCareUsers[]|ObjectCollection findByStatus(string $status) Return ChildCareUsers objects filtered by the status column
 * @method     ChildCareUsers[]|ObjectCollection findByHistory(string $history) Return ChildCareUsers objects filtered by the history column
 * @method     ChildCareUsers[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareUsers objects filtered by the modify_id column
 * @method     ChildCareUsers[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareUsers objects filtered by the modify_time column
 * @method     ChildCareUsers[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareUsers objects filtered by the create_id column
 * @method     ChildCareUsers[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareUsers objects filtered by the create_time column
 * @method     ChildCareUsers[]|ObjectCollection findByThemeName(string $theme_name) Return ChildCareUsers objects filtered by the theme_name column
 * @method     ChildCareUsers[]|ObjectCollection findByOccupation(string $occupation) Return ChildCareUsers objects filtered by the occupation column
 * @method     ChildCareUsers[]|ObjectCollection findByTelNo(string $tel_no) Return ChildCareUsers objects filtered by the tel_no column
 * @method     ChildCareUsers[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareUsersQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareUsersQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareUsers', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareUsersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareUsersQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareUsersQuery) {
            return $criteria;
        }
        $query = new ChildCareUsersQuery();
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
     * @return ChildCareUsers|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareUsersTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareUsersTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareUsers A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT name, login_id, password, personell_nr, lockflag, role_id, exc, s_date, s_time, expire_date, expire_time, status, history, modify_id, modify_time, create_id, create_time, theme_name, occupation, tel_no FROM care_users WHERE login_id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareUsers $obj */
            $obj = new ChildCareUsers();
            $obj->hydrate($row);
            CareUsersTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareUsers|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareUsersTableMap::COL_LOGIN_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareUsersTableMap::COL_LOGIN_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the login_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLoginId('fooValue');   // WHERE login_id = 'fooValue'
     * $query->filterByLoginId('%fooValue%', Criteria::LIKE); // WHERE login_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loginId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByLoginId($loginId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loginId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_LOGIN_ID, $loginId, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%', Criteria::LIKE); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the personell_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonellNr(1234); // WHERE personell_nr = 1234
     * $query->filterByPersonellNr(array(12, 34)); // WHERE personell_nr IN (12, 34)
     * $query->filterByPersonellNr(array('min' => 12)); // WHERE personell_nr > 12
     * </code>
     *
     * @param     mixed $personellNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByPersonellNr($personellNr = null, $comparison = null)
    {
        if (is_array($personellNr)) {
            $useMinMax = false;
            if (isset($personellNr['min'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_PERSONELL_NR, $personellNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personellNr['max'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_PERSONELL_NR, $personellNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_PERSONELL_NR, $personellNr, $comparison);
    }

    /**
     * Filter the query on the lockflag column
     *
     * Example usage:
     * <code>
     * $query->filterByLockflag(1234); // WHERE lockflag = 1234
     * $query->filterByLockflag(array(12, 34)); // WHERE lockflag IN (12, 34)
     * $query->filterByLockflag(array('min' => 12)); // WHERE lockflag > 12
     * </code>
     *
     * @param     mixed $lockflag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByLockflag($lockflag = null, $comparison = null)
    {
        if (is_array($lockflag)) {
            $useMinMax = false;
            if (isset($lockflag['min'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_LOCKFLAG, $lockflag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lockflag['max'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_LOCKFLAG, $lockflag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_LOCKFLAG, $lockflag, $comparison);
    }

    /**
     * Filter the query on the role_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRoleId(1234); // WHERE role_id = 1234
     * $query->filterByRoleId(array(12, 34)); // WHERE role_id IN (12, 34)
     * $query->filterByRoleId(array('min' => 12)); // WHERE role_id > 12
     * </code>
     *
     * @param     mixed $roleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByRoleId($roleId = null, $comparison = null)
    {
        if (is_array($roleId)) {
            $useMinMax = false;
            if (isset($roleId['min'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_ROLE_ID, $roleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roleId['max'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_ROLE_ID, $roleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_ROLE_ID, $roleId, $comparison);
    }

    /**
     * Filter the query on the exc column
     *
     * Example usage:
     * <code>
     * $query->filterByExc(true); // WHERE exc = true
     * $query->filterByExc('yes'); // WHERE exc = true
     * </code>
     *
     * @param     boolean|string $exc The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByExc($exc = null, $comparison = null)
    {
        if (is_string($exc)) {
            $exc = in_array(strtolower($exc), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_EXC, $exc, $comparison);
    }

    /**
     * Filter the query on the s_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySDate('2011-03-14'); // WHERE s_date = '2011-03-14'
     * $query->filterBySDate('now'); // WHERE s_date = '2011-03-14'
     * $query->filterBySDate(array('max' => 'yesterday')); // WHERE s_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $sDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterBySDate($sDate = null, $comparison = null)
    {
        if (is_array($sDate)) {
            $useMinMax = false;
            if (isset($sDate['min'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_S_DATE, $sDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sDate['max'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_S_DATE, $sDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_S_DATE, $sDate, $comparison);
    }

    /**
     * Filter the query on the s_time column
     *
     * Example usage:
     * <code>
     * $query->filterBySTime('2011-03-14'); // WHERE s_time = '2011-03-14'
     * $query->filterBySTime('now'); // WHERE s_time = '2011-03-14'
     * $query->filterBySTime(array('max' => 'yesterday')); // WHERE s_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $sTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterBySTime($sTime = null, $comparison = null)
    {
        if (is_array($sTime)) {
            $useMinMax = false;
            if (isset($sTime['min'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_S_TIME, $sTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sTime['max'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_S_TIME, $sTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_S_TIME, $sTime, $comparison);
    }

    /**
     * Filter the query on the expire_date column
     *
     * Example usage:
     * <code>
     * $query->filterByExpireDate('2011-03-14'); // WHERE expire_date = '2011-03-14'
     * $query->filterByExpireDate('now'); // WHERE expire_date = '2011-03-14'
     * $query->filterByExpireDate(array('max' => 'yesterday')); // WHERE expire_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $expireDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByExpireDate($expireDate = null, $comparison = null)
    {
        if (is_array($expireDate)) {
            $useMinMax = false;
            if (isset($expireDate['min'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_EXPIRE_DATE, $expireDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expireDate['max'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_EXPIRE_DATE, $expireDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_EXPIRE_DATE, $expireDate, $comparison);
    }

    /**
     * Filter the query on the expire_time column
     *
     * Example usage:
     * <code>
     * $query->filterByExpireTime('2011-03-14'); // WHERE expire_time = '2011-03-14'
     * $query->filterByExpireTime('now'); // WHERE expire_time = '2011-03-14'
     * $query->filterByExpireTime(array('max' => 'yesterday')); // WHERE expire_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $expireTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByExpireTime($expireTime = null, $comparison = null)
    {
        if (is_array($expireTime)) {
            $useMinMax = false;
            if (isset($expireTime['min'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_EXPIRE_TIME, $expireTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expireTime['max'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_EXPIRE_TIME, $expireTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_EXPIRE_TIME, $expireTime, $comparison);
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
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareUsersTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Filter the query on the theme_name column
     *
     * Example usage:
     * <code>
     * $query->filterByThemeName('fooValue');   // WHERE theme_name = 'fooValue'
     * $query->filterByThemeName('%fooValue%', Criteria::LIKE); // WHERE theme_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $themeName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByThemeName($themeName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($themeName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_THEME_NAME, $themeName, $comparison);
    }

    /**
     * Filter the query on the occupation column
     *
     * Example usage:
     * <code>
     * $query->filterByOccupation('fooValue');   // WHERE occupation = 'fooValue'
     * $query->filterByOccupation('%fooValue%', Criteria::LIKE); // WHERE occupation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $occupation The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByOccupation($occupation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($occupation)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_OCCUPATION, $occupation, $comparison);
    }

    /**
     * Filter the query on the tel_no column
     *
     * Example usage:
     * <code>
     * $query->filterByTelNo('fooValue');   // WHERE tel_no = 'fooValue'
     * $query->filterByTelNo('%fooValue%', Criteria::LIKE); // WHERE tel_no LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telNo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function filterByTelNo($telNo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telNo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareUsersTableMap::COL_TEL_NO, $telNo, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareUsers $careUsers Object to remove from the list of results
     *
     * @return $this|ChildCareUsersQuery The current query, for fluid interface
     */
    public function prune($careUsers = null)
    {
        if ($careUsers) {
            $this->addUsingAlias(CareUsersTableMap::COL_LOGIN_ID, $careUsers->getLoginId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_users table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareUsersTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareUsersTableMap::clearInstancePool();
            CareUsersTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareUsersTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareUsersTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareUsersTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareUsersTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareUsersQuery
