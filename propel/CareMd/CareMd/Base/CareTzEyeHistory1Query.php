<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzEyeHistory1 as ChildCareTzEyeHistory1;
use CareMd\CareMd\CareTzEyeHistory1Query as ChildCareTzEyeHistory1Query;
use CareMd\CareMd\Map\CareTzEyeHistory1TableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_eye_history1' table.
 *
 *
 *
 * @method     ChildCareTzEyeHistory1Query orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzEyeHistory1Query orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCareTzEyeHistory1Query orderByHid1($order = Criteria::ASC) Order by the hid1 column
 * @method     ChildCareTzEyeHistory1Query orderByHid1e($order = Criteria::ASC) Order by the hid1e column
 * @method     ChildCareTzEyeHistory1Query orderByHid1d($order = Criteria::ASC) Order by the hid1d column
 * @method     ChildCareTzEyeHistory1Query orderByHid2($order = Criteria::ASC) Order by the hid2 column
 * @method     ChildCareTzEyeHistory1Query orderByHid2e($order = Criteria::ASC) Order by the hid2e column
 * @method     ChildCareTzEyeHistory1Query orderByHid2d($order = Criteria::ASC) Order by the hid2d column
 * @method     ChildCareTzEyeHistory1Query orderByHid3($order = Criteria::ASC) Order by the hid3 column
 * @method     ChildCareTzEyeHistory1Query orderByHid3e($order = Criteria::ASC) Order by the hid3e column
 * @method     ChildCareTzEyeHistory1Query orderByHid3d($order = Criteria::ASC) Order by the hid3d column
 * @method     ChildCareTzEyeHistory1Query orderByHid4($order = Criteria::ASC) Order by the hid4 column
 * @method     ChildCareTzEyeHistory1Query orderByHid4e($order = Criteria::ASC) Order by the hid4e column
 * @method     ChildCareTzEyeHistory1Query orderByHid4d($order = Criteria::ASC) Order by the hid4d column
 * @method     ChildCareTzEyeHistory1Query orderByHid5($order = Criteria::ASC) Order by the hid5 column
 * @method     ChildCareTzEyeHistory1Query orderByHid5e($order = Criteria::ASC) Order by the hid5e column
 * @method     ChildCareTzEyeHistory1Query orderByHid5d($order = Criteria::ASC) Order by the hid5d column
 * @method     ChildCareTzEyeHistory1Query orderByHid6($order = Criteria::ASC) Order by the hid6 column
 * @method     ChildCareTzEyeHistory1Query orderBySignature($order = Criteria::ASC) Order by the signature column
 * @method     ChildCareTzEyeHistory1Query orderByRemarks($order = Criteria::ASC) Order by the remarks column
 * @method     ChildCareTzEyeHistory1Query orderByExaminationDate($order = Criteria::ASC) Order by the examination_date column
 *
 * @method     ChildCareTzEyeHistory1Query groupById() Group by the id column
 * @method     ChildCareTzEyeHistory1Query groupByPid() Group by the pid column
 * @method     ChildCareTzEyeHistory1Query groupByHid1() Group by the hid1 column
 * @method     ChildCareTzEyeHistory1Query groupByHid1e() Group by the hid1e column
 * @method     ChildCareTzEyeHistory1Query groupByHid1d() Group by the hid1d column
 * @method     ChildCareTzEyeHistory1Query groupByHid2() Group by the hid2 column
 * @method     ChildCareTzEyeHistory1Query groupByHid2e() Group by the hid2e column
 * @method     ChildCareTzEyeHistory1Query groupByHid2d() Group by the hid2d column
 * @method     ChildCareTzEyeHistory1Query groupByHid3() Group by the hid3 column
 * @method     ChildCareTzEyeHistory1Query groupByHid3e() Group by the hid3e column
 * @method     ChildCareTzEyeHistory1Query groupByHid3d() Group by the hid3d column
 * @method     ChildCareTzEyeHistory1Query groupByHid4() Group by the hid4 column
 * @method     ChildCareTzEyeHistory1Query groupByHid4e() Group by the hid4e column
 * @method     ChildCareTzEyeHistory1Query groupByHid4d() Group by the hid4d column
 * @method     ChildCareTzEyeHistory1Query groupByHid5() Group by the hid5 column
 * @method     ChildCareTzEyeHistory1Query groupByHid5e() Group by the hid5e column
 * @method     ChildCareTzEyeHistory1Query groupByHid5d() Group by the hid5d column
 * @method     ChildCareTzEyeHistory1Query groupByHid6() Group by the hid6 column
 * @method     ChildCareTzEyeHistory1Query groupBySignature() Group by the signature column
 * @method     ChildCareTzEyeHistory1Query groupByRemarks() Group by the remarks column
 * @method     ChildCareTzEyeHistory1Query groupByExaminationDate() Group by the examination_date column
 *
 * @method     ChildCareTzEyeHistory1Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzEyeHistory1Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzEyeHistory1Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzEyeHistory1Query leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzEyeHistory1Query rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzEyeHistory1Query innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzEyeHistory1 findOne(ConnectionInterface $con = null) Return the first ChildCareTzEyeHistory1 matching the query
 * @method     ChildCareTzEyeHistory1 findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzEyeHistory1 matching the query, or a new ChildCareTzEyeHistory1 object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzEyeHistory1 findOneById(int $id) Return the first ChildCareTzEyeHistory1 filtered by the id column
 * @method     ChildCareTzEyeHistory1 findOneByPid(string $pid) Return the first ChildCareTzEyeHistory1 filtered by the pid column
 * @method     ChildCareTzEyeHistory1 findOneByHid1(string $hid1) Return the first ChildCareTzEyeHistory1 filtered by the hid1 column
 * @method     ChildCareTzEyeHistory1 findOneByHid1e(string $hid1e) Return the first ChildCareTzEyeHistory1 filtered by the hid1e column
 * @method     ChildCareTzEyeHistory1 findOneByHid1d(string $hid1d) Return the first ChildCareTzEyeHistory1 filtered by the hid1d column
 * @method     ChildCareTzEyeHistory1 findOneByHid2(string $hid2) Return the first ChildCareTzEyeHistory1 filtered by the hid2 column
 * @method     ChildCareTzEyeHistory1 findOneByHid2e(string $hid2e) Return the first ChildCareTzEyeHistory1 filtered by the hid2e column
 * @method     ChildCareTzEyeHistory1 findOneByHid2d(string $hid2d) Return the first ChildCareTzEyeHistory1 filtered by the hid2d column
 * @method     ChildCareTzEyeHistory1 findOneByHid3(string $hid3) Return the first ChildCareTzEyeHistory1 filtered by the hid3 column
 * @method     ChildCareTzEyeHistory1 findOneByHid3e(string $hid3e) Return the first ChildCareTzEyeHistory1 filtered by the hid3e column
 * @method     ChildCareTzEyeHistory1 findOneByHid3d(string $hid3d) Return the first ChildCareTzEyeHistory1 filtered by the hid3d column
 * @method     ChildCareTzEyeHistory1 findOneByHid4(string $hid4) Return the first ChildCareTzEyeHistory1 filtered by the hid4 column
 * @method     ChildCareTzEyeHistory1 findOneByHid4e(string $hid4e) Return the first ChildCareTzEyeHistory1 filtered by the hid4e column
 * @method     ChildCareTzEyeHistory1 findOneByHid4d(string $hid4d) Return the first ChildCareTzEyeHistory1 filtered by the hid4d column
 * @method     ChildCareTzEyeHistory1 findOneByHid5(string $hid5) Return the first ChildCareTzEyeHistory1 filtered by the hid5 column
 * @method     ChildCareTzEyeHistory1 findOneByHid5e(string $hid5e) Return the first ChildCareTzEyeHistory1 filtered by the hid5e column
 * @method     ChildCareTzEyeHistory1 findOneByHid5d(string $hid5d) Return the first ChildCareTzEyeHistory1 filtered by the hid5d column
 * @method     ChildCareTzEyeHistory1 findOneByHid6(string $hid6) Return the first ChildCareTzEyeHistory1 filtered by the hid6 column
 * @method     ChildCareTzEyeHistory1 findOneBySignature(string $signature) Return the first ChildCareTzEyeHistory1 filtered by the signature column
 * @method     ChildCareTzEyeHistory1 findOneByRemarks(string $remarks) Return the first ChildCareTzEyeHistory1 filtered by the remarks column
 * @method     ChildCareTzEyeHistory1 findOneByExaminationDate(string $examination_date) Return the first ChildCareTzEyeHistory1 filtered by the examination_date column *

 * @method     ChildCareTzEyeHistory1 requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzEyeHistory1 by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOne(ConnectionInterface $con = null) Return the first ChildCareTzEyeHistory1 matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzEyeHistory1 requireOneById(int $id) Return the first ChildCareTzEyeHistory1 filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByPid(string $pid) Return the first ChildCareTzEyeHistory1 filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid1(string $hid1) Return the first ChildCareTzEyeHistory1 filtered by the hid1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid1e(string $hid1e) Return the first ChildCareTzEyeHistory1 filtered by the hid1e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid1d(string $hid1d) Return the first ChildCareTzEyeHistory1 filtered by the hid1d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid2(string $hid2) Return the first ChildCareTzEyeHistory1 filtered by the hid2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid2e(string $hid2e) Return the first ChildCareTzEyeHistory1 filtered by the hid2e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid2d(string $hid2d) Return the first ChildCareTzEyeHistory1 filtered by the hid2d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid3(string $hid3) Return the first ChildCareTzEyeHistory1 filtered by the hid3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid3e(string $hid3e) Return the first ChildCareTzEyeHistory1 filtered by the hid3e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid3d(string $hid3d) Return the first ChildCareTzEyeHistory1 filtered by the hid3d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid4(string $hid4) Return the first ChildCareTzEyeHistory1 filtered by the hid4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid4e(string $hid4e) Return the first ChildCareTzEyeHistory1 filtered by the hid4e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid4d(string $hid4d) Return the first ChildCareTzEyeHistory1 filtered by the hid4d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid5(string $hid5) Return the first ChildCareTzEyeHistory1 filtered by the hid5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid5e(string $hid5e) Return the first ChildCareTzEyeHistory1 filtered by the hid5e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid5d(string $hid5d) Return the first ChildCareTzEyeHistory1 filtered by the hid5d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByHid6(string $hid6) Return the first ChildCareTzEyeHistory1 filtered by the hid6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneBySignature(string $signature) Return the first ChildCareTzEyeHistory1 filtered by the signature column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByRemarks(string $remarks) Return the first ChildCareTzEyeHistory1 filtered by the remarks column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory1 requireOneByExaminationDate(string $examination_date) Return the first ChildCareTzEyeHistory1 filtered by the examination_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzEyeHistory1 objects based on current ModelCriteria
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findById(int $id) Return ChildCareTzEyeHistory1 objects filtered by the id column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByPid(string $pid) Return ChildCareTzEyeHistory1 objects filtered by the pid column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid1(string $hid1) Return ChildCareTzEyeHistory1 objects filtered by the hid1 column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid1e(string $hid1e) Return ChildCareTzEyeHistory1 objects filtered by the hid1e column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid1d(string $hid1d) Return ChildCareTzEyeHistory1 objects filtered by the hid1d column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid2(string $hid2) Return ChildCareTzEyeHistory1 objects filtered by the hid2 column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid2e(string $hid2e) Return ChildCareTzEyeHistory1 objects filtered by the hid2e column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid2d(string $hid2d) Return ChildCareTzEyeHistory1 objects filtered by the hid2d column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid3(string $hid3) Return ChildCareTzEyeHistory1 objects filtered by the hid3 column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid3e(string $hid3e) Return ChildCareTzEyeHistory1 objects filtered by the hid3e column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid3d(string $hid3d) Return ChildCareTzEyeHistory1 objects filtered by the hid3d column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid4(string $hid4) Return ChildCareTzEyeHistory1 objects filtered by the hid4 column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid4e(string $hid4e) Return ChildCareTzEyeHistory1 objects filtered by the hid4e column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid4d(string $hid4d) Return ChildCareTzEyeHistory1 objects filtered by the hid4d column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid5(string $hid5) Return ChildCareTzEyeHistory1 objects filtered by the hid5 column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid5e(string $hid5e) Return ChildCareTzEyeHistory1 objects filtered by the hid5e column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid5d(string $hid5d) Return ChildCareTzEyeHistory1 objects filtered by the hid5d column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByHid6(string $hid6) Return ChildCareTzEyeHistory1 objects filtered by the hid6 column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findBySignature(string $signature) Return ChildCareTzEyeHistory1 objects filtered by the signature column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByRemarks(string $remarks) Return ChildCareTzEyeHistory1 objects filtered by the remarks column
 * @method     ChildCareTzEyeHistory1[]|ObjectCollection findByExaminationDate(string $examination_date) Return ChildCareTzEyeHistory1 objects filtered by the examination_date column
 * @method     ChildCareTzEyeHistory1[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzEyeHistory1Query extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzEyeHistory1Query object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzEyeHistory1', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzEyeHistory1Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzEyeHistory1Query
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzEyeHistory1Query) {
            return $criteria;
        }
        $query = new ChildCareTzEyeHistory1Query();
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
     * @return ChildCareTzEyeHistory1|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzEyeHistory1TableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzEyeHistory1TableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzEyeHistory1 A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, pid, hid1, hid1e, hid1d, hid2, hid2e, hid2d, hid3, hid3e, hid3d, hid4, hid4e, hid4d, hid5, hid5e, hid5d, hid6, signature, remarks, examination_date FROM care_tz_eye_history1 WHERE id = :p0';
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
            /** @var ChildCareTzEyeHistory1 $obj */
            $obj = new ChildCareTzEyeHistory1();
            $obj->hydrate($row);
            CareTzEyeHistory1TableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzEyeHistory1|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the pid column
     *
     * Example usage:
     * <code>
     * $query->filterByPid('fooValue');   // WHERE pid = 'fooValue'
     * $query->filterByPid('%fooValue%', Criteria::LIKE); // WHERE pid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the hid1 column
     *
     * Example usage:
     * <code>
     * $query->filterByHid1('fooValue');   // WHERE hid1 = 'fooValue'
     * $query->filterByHid1('%fooValue%', Criteria::LIKE); // WHERE hid1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid1($hid1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID1, $hid1, $comparison);
    }

    /**
     * Filter the query on the hid1e column
     *
     * Example usage:
     * <code>
     * $query->filterByHid1e('fooValue');   // WHERE hid1e = 'fooValue'
     * $query->filterByHid1e('%fooValue%', Criteria::LIKE); // WHERE hid1e LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid1e The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid1e($hid1e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid1e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID1E, $hid1e, $comparison);
    }

    /**
     * Filter the query on the hid1d column
     *
     * Example usage:
     * <code>
     * $query->filterByHid1d('fooValue');   // WHERE hid1d = 'fooValue'
     * $query->filterByHid1d('%fooValue%', Criteria::LIKE); // WHERE hid1d LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid1d The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid1d($hid1d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid1d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID1D, $hid1d, $comparison);
    }

    /**
     * Filter the query on the hid2 column
     *
     * Example usage:
     * <code>
     * $query->filterByHid2('fooValue');   // WHERE hid2 = 'fooValue'
     * $query->filterByHid2('%fooValue%', Criteria::LIKE); // WHERE hid2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid2($hid2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID2, $hid2, $comparison);
    }

    /**
     * Filter the query on the hid2e column
     *
     * Example usage:
     * <code>
     * $query->filterByHid2e('fooValue');   // WHERE hid2e = 'fooValue'
     * $query->filterByHid2e('%fooValue%', Criteria::LIKE); // WHERE hid2e LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid2e The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid2e($hid2e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid2e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID2E, $hid2e, $comparison);
    }

    /**
     * Filter the query on the hid2d column
     *
     * Example usage:
     * <code>
     * $query->filterByHid2d('fooValue');   // WHERE hid2d = 'fooValue'
     * $query->filterByHid2d('%fooValue%', Criteria::LIKE); // WHERE hid2d LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid2d The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid2d($hid2d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid2d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID2D, $hid2d, $comparison);
    }

    /**
     * Filter the query on the hid3 column
     *
     * Example usage:
     * <code>
     * $query->filterByHid3('fooValue');   // WHERE hid3 = 'fooValue'
     * $query->filterByHid3('%fooValue%', Criteria::LIKE); // WHERE hid3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid3($hid3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID3, $hid3, $comparison);
    }

    /**
     * Filter the query on the hid3e column
     *
     * Example usage:
     * <code>
     * $query->filterByHid3e('fooValue');   // WHERE hid3e = 'fooValue'
     * $query->filterByHid3e('%fooValue%', Criteria::LIKE); // WHERE hid3e LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid3e The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid3e($hid3e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid3e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID3E, $hid3e, $comparison);
    }

    /**
     * Filter the query on the hid3d column
     *
     * Example usage:
     * <code>
     * $query->filterByHid3d('fooValue');   // WHERE hid3d = 'fooValue'
     * $query->filterByHid3d('%fooValue%', Criteria::LIKE); // WHERE hid3d LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid3d The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid3d($hid3d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid3d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID3D, $hid3d, $comparison);
    }

    /**
     * Filter the query on the hid4 column
     *
     * Example usage:
     * <code>
     * $query->filterByHid4('fooValue');   // WHERE hid4 = 'fooValue'
     * $query->filterByHid4('%fooValue%', Criteria::LIKE); // WHERE hid4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid4($hid4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID4, $hid4, $comparison);
    }

    /**
     * Filter the query on the hid4e column
     *
     * Example usage:
     * <code>
     * $query->filterByHid4e('fooValue');   // WHERE hid4e = 'fooValue'
     * $query->filterByHid4e('%fooValue%', Criteria::LIKE); // WHERE hid4e LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid4e The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid4e($hid4e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid4e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID4E, $hid4e, $comparison);
    }

    /**
     * Filter the query on the hid4d column
     *
     * Example usage:
     * <code>
     * $query->filterByHid4d('fooValue');   // WHERE hid4d = 'fooValue'
     * $query->filterByHid4d('%fooValue%', Criteria::LIKE); // WHERE hid4d LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid4d The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid4d($hid4d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid4d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID4D, $hid4d, $comparison);
    }

    /**
     * Filter the query on the hid5 column
     *
     * Example usage:
     * <code>
     * $query->filterByHid5('fooValue');   // WHERE hid5 = 'fooValue'
     * $query->filterByHid5('%fooValue%', Criteria::LIKE); // WHERE hid5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid5($hid5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID5, $hid5, $comparison);
    }

    /**
     * Filter the query on the hid5e column
     *
     * Example usage:
     * <code>
     * $query->filterByHid5e('fooValue');   // WHERE hid5e = 'fooValue'
     * $query->filterByHid5e('%fooValue%', Criteria::LIKE); // WHERE hid5e LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid5e The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid5e($hid5e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid5e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID5E, $hid5e, $comparison);
    }

    /**
     * Filter the query on the hid5d column
     *
     * Example usage:
     * <code>
     * $query->filterByHid5d('fooValue');   // WHERE hid5d = 'fooValue'
     * $query->filterByHid5d('%fooValue%', Criteria::LIKE); // WHERE hid5d LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid5d The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid5d($hid5d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid5d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID5D, $hid5d, $comparison);
    }

    /**
     * Filter the query on the hid6 column
     *
     * Example usage:
     * <code>
     * $query->filterByHid6('fooValue');   // WHERE hid6 = 'fooValue'
     * $query->filterByHid6('%fooValue%', Criteria::LIKE); // WHERE hid6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByHid6($hid6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_HID6, $hid6, $comparison);
    }

    /**
     * Filter the query on the signature column
     *
     * Example usage:
     * <code>
     * $query->filterBySignature('fooValue');   // WHERE signature = 'fooValue'
     * $query->filterBySignature('%fooValue%', Criteria::LIKE); // WHERE signature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signature The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterBySignature($signature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signature)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_SIGNATURE, $signature, $comparison);
    }

    /**
     * Filter the query on the remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%', Criteria::LIKE); // WHERE remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the examination_date column
     *
     * Example usage:
     * <code>
     * $query->filterByExaminationDate('2011-03-14'); // WHERE examination_date = '2011-03-14'
     * $query->filterByExaminationDate('now'); // WHERE examination_date = '2011-03-14'
     * $query->filterByExaminationDate(array('max' => 'yesterday')); // WHERE examination_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $examinationDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function filterByExaminationDate($examinationDate = null, $comparison = null)
    {
        if (is_array($examinationDate)) {
            $useMinMax = false;
            if (isset($examinationDate['min'])) {
                $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_EXAMINATION_DATE, $examinationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($examinationDate['max'])) {
                $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_EXAMINATION_DATE, $examinationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_EXAMINATION_DATE, $examinationDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzEyeHistory1 $careTzEyeHistory1 Object to remove from the list of results
     *
     * @return $this|ChildCareTzEyeHistory1Query The current query, for fluid interface
     */
    public function prune($careTzEyeHistory1 = null)
    {
        if ($careTzEyeHistory1) {
            $this->addUsingAlias(CareTzEyeHistory1TableMap::COL_ID, $careTzEyeHistory1->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_eye_history1 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeHistory1TableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzEyeHistory1TableMap::clearInstancePool();
            CareTzEyeHistory1TableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeHistory1TableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzEyeHistory1TableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzEyeHistory1TableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzEyeHistory1TableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzEyeHistory1Query
