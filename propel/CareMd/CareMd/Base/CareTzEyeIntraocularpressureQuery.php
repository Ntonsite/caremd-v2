<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzEyeIntraocularpressure as ChildCareTzEyeIntraocularpressure;
use CareMd\CareMd\CareTzEyeIntraocularpressureQuery as ChildCareTzEyeIntraocularpressureQuery;
use CareMd\CareMd\Map\CareTzEyeIntraocularpressureTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_eye_intraocularpressure' table.
 *
 *
 *
 * @method     ChildCareTzEyeIntraocularpressureQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzEyeIntraocularpressureQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCareTzEyeIntraocularpressureQuery orderByRightEyeTest1($order = Criteria::ASC) Order by the right_eye_test1 column
 * @method     ChildCareTzEyeIntraocularpressureQuery orderByLeftEyeTest1($order = Criteria::ASC) Order by the left_eye_test1 column
 * @method     ChildCareTzEyeIntraocularpressureQuery orderByTest3($order = Criteria::ASC) Order by the test3 column
 * @method     ChildCareTzEyeIntraocularpressureQuery orderBySignature($order = Criteria::ASC) Order by the Signature column
 * @method     ChildCareTzEyeIntraocularpressureQuery orderByExaminationDate($order = Criteria::ASC) Order by the Examination_date column
 *
 * @method     ChildCareTzEyeIntraocularpressureQuery groupById() Group by the id column
 * @method     ChildCareTzEyeIntraocularpressureQuery groupByPid() Group by the pid column
 * @method     ChildCareTzEyeIntraocularpressureQuery groupByRightEyeTest1() Group by the right_eye_test1 column
 * @method     ChildCareTzEyeIntraocularpressureQuery groupByLeftEyeTest1() Group by the left_eye_test1 column
 * @method     ChildCareTzEyeIntraocularpressureQuery groupByTest3() Group by the test3 column
 * @method     ChildCareTzEyeIntraocularpressureQuery groupBySignature() Group by the Signature column
 * @method     ChildCareTzEyeIntraocularpressureQuery groupByExaminationDate() Group by the Examination_date column
 *
 * @method     ChildCareTzEyeIntraocularpressureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzEyeIntraocularpressureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzEyeIntraocularpressureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzEyeIntraocularpressureQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzEyeIntraocularpressureQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzEyeIntraocularpressureQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzEyeIntraocularpressure findOne(ConnectionInterface $con = null) Return the first ChildCareTzEyeIntraocularpressure matching the query
 * @method     ChildCareTzEyeIntraocularpressure findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzEyeIntraocularpressure matching the query, or a new ChildCareTzEyeIntraocularpressure object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzEyeIntraocularpressure findOneById(int $id) Return the first ChildCareTzEyeIntraocularpressure filtered by the id column
 * @method     ChildCareTzEyeIntraocularpressure findOneByPid(int $pid) Return the first ChildCareTzEyeIntraocularpressure filtered by the pid column
 * @method     ChildCareTzEyeIntraocularpressure findOneByRightEyeTest1(string $right_eye_test1) Return the first ChildCareTzEyeIntraocularpressure filtered by the right_eye_test1 column
 * @method     ChildCareTzEyeIntraocularpressure findOneByLeftEyeTest1(string $left_eye_test1) Return the first ChildCareTzEyeIntraocularpressure filtered by the left_eye_test1 column
 * @method     ChildCareTzEyeIntraocularpressure findOneByTest3(string $test3) Return the first ChildCareTzEyeIntraocularpressure filtered by the test3 column
 * @method     ChildCareTzEyeIntraocularpressure findOneBySignature(string $Signature) Return the first ChildCareTzEyeIntraocularpressure filtered by the Signature column
 * @method     ChildCareTzEyeIntraocularpressure findOneByExaminationDate(string $Examination_date) Return the first ChildCareTzEyeIntraocularpressure filtered by the Examination_date column *

 * @method     ChildCareTzEyeIntraocularpressure requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzEyeIntraocularpressure by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeIntraocularpressure requireOne(ConnectionInterface $con = null) Return the first ChildCareTzEyeIntraocularpressure matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzEyeIntraocularpressure requireOneById(int $id) Return the first ChildCareTzEyeIntraocularpressure filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeIntraocularpressure requireOneByPid(int $pid) Return the first ChildCareTzEyeIntraocularpressure filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeIntraocularpressure requireOneByRightEyeTest1(string $right_eye_test1) Return the first ChildCareTzEyeIntraocularpressure filtered by the right_eye_test1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeIntraocularpressure requireOneByLeftEyeTest1(string $left_eye_test1) Return the first ChildCareTzEyeIntraocularpressure filtered by the left_eye_test1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeIntraocularpressure requireOneByTest3(string $test3) Return the first ChildCareTzEyeIntraocularpressure filtered by the test3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeIntraocularpressure requireOneBySignature(string $Signature) Return the first ChildCareTzEyeIntraocularpressure filtered by the Signature column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeIntraocularpressure requireOneByExaminationDate(string $Examination_date) Return the first ChildCareTzEyeIntraocularpressure filtered by the Examination_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzEyeIntraocularpressure[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzEyeIntraocularpressure objects based on current ModelCriteria
 * @method     ChildCareTzEyeIntraocularpressure[]|ObjectCollection findById(int $id) Return ChildCareTzEyeIntraocularpressure objects filtered by the id column
 * @method     ChildCareTzEyeIntraocularpressure[]|ObjectCollection findByPid(int $pid) Return ChildCareTzEyeIntraocularpressure objects filtered by the pid column
 * @method     ChildCareTzEyeIntraocularpressure[]|ObjectCollection findByRightEyeTest1(string $right_eye_test1) Return ChildCareTzEyeIntraocularpressure objects filtered by the right_eye_test1 column
 * @method     ChildCareTzEyeIntraocularpressure[]|ObjectCollection findByLeftEyeTest1(string $left_eye_test1) Return ChildCareTzEyeIntraocularpressure objects filtered by the left_eye_test1 column
 * @method     ChildCareTzEyeIntraocularpressure[]|ObjectCollection findByTest3(string $test3) Return ChildCareTzEyeIntraocularpressure objects filtered by the test3 column
 * @method     ChildCareTzEyeIntraocularpressure[]|ObjectCollection findBySignature(string $Signature) Return ChildCareTzEyeIntraocularpressure objects filtered by the Signature column
 * @method     ChildCareTzEyeIntraocularpressure[]|ObjectCollection findByExaminationDate(string $Examination_date) Return ChildCareTzEyeIntraocularpressure objects filtered by the Examination_date column
 * @method     ChildCareTzEyeIntraocularpressure[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzEyeIntraocularpressureQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzEyeIntraocularpressureQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzEyeIntraocularpressure', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzEyeIntraocularpressureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzEyeIntraocularpressureQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzEyeIntraocularpressureQuery) {
            return $criteria;
        }
        $query = new ChildCareTzEyeIntraocularpressureQuery();
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
     * @return ChildCareTzEyeIntraocularpressure|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzEyeIntraocularpressureTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzEyeIntraocularpressureTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzEyeIntraocularpressure A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, pid, right_eye_test1, left_eye_test1, test3, Signature, Examination_date FROM care_tz_eye_intraocularpressure WHERE id = :p0';
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
            /** @var ChildCareTzEyeIntraocularpressure $obj */
            $obj = new ChildCareTzEyeIntraocularpressure();
            $obj->hydrate($row);
            CareTzEyeIntraocularpressureTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzEyeIntraocularpressure|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzEyeIntraocularpressureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzEyeIntraocularpressureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzEyeIntraocularpressureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the pid column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE pid = 1234
     * $query->filterByPid(array(12, 34)); // WHERE pid IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE pid > 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeIntraocularpressureQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the right_eye_test1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRightEyeTest1('fooValue');   // WHERE right_eye_test1 = 'fooValue'
     * $query->filterByRightEyeTest1('%fooValue%', Criteria::LIKE); // WHERE right_eye_test1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rightEyeTest1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeIntraocularpressureQuery The current query, for fluid interface
     */
    public function filterByRightEyeTest1($rightEyeTest1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rightEyeTest1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_RIGHT_EYE_TEST1, $rightEyeTest1, $comparison);
    }

    /**
     * Filter the query on the left_eye_test1 column
     *
     * Example usage:
     * <code>
     * $query->filterByLeftEyeTest1('fooValue');   // WHERE left_eye_test1 = 'fooValue'
     * $query->filterByLeftEyeTest1('%fooValue%', Criteria::LIKE); // WHERE left_eye_test1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leftEyeTest1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeIntraocularpressureQuery The current query, for fluid interface
     */
    public function filterByLeftEyeTest1($leftEyeTest1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leftEyeTest1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_LEFT_EYE_TEST1, $leftEyeTest1, $comparison);
    }

    /**
     * Filter the query on the test3 column
     *
     * Example usage:
     * <code>
     * $query->filterByTest3('fooValue');   // WHERE test3 = 'fooValue'
     * $query->filterByTest3('%fooValue%', Criteria::LIKE); // WHERE test3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $test3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeIntraocularpressureQuery The current query, for fluid interface
     */
    public function filterByTest3($test3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($test3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_TEST3, $test3, $comparison);
    }

    /**
     * Filter the query on the Signature column
     *
     * Example usage:
     * <code>
     * $query->filterBySignature('fooValue');   // WHERE Signature = 'fooValue'
     * $query->filterBySignature('%fooValue%', Criteria::LIKE); // WHERE Signature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signature The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeIntraocularpressureQuery The current query, for fluid interface
     */
    public function filterBySignature($signature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signature)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_SIGNATURE, $signature, $comparison);
    }

    /**
     * Filter the query on the Examination_date column
     *
     * Example usage:
     * <code>
     * $query->filterByExaminationDate('2011-03-14'); // WHERE Examination_date = '2011-03-14'
     * $query->filterByExaminationDate('now'); // WHERE Examination_date = '2011-03-14'
     * $query->filterByExaminationDate(array('max' => 'yesterday')); // WHERE Examination_date > '2011-03-13'
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
     * @return $this|ChildCareTzEyeIntraocularpressureQuery The current query, for fluid interface
     */
    public function filterByExaminationDate($examinationDate = null, $comparison = null)
    {
        if (is_array($examinationDate)) {
            $useMinMax = false;
            if (isset($examinationDate['min'])) {
                $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_EXAMINATION_DATE, $examinationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($examinationDate['max'])) {
                $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_EXAMINATION_DATE, $examinationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_EXAMINATION_DATE, $examinationDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzEyeIntraocularpressure $careTzEyeIntraocularpressure Object to remove from the list of results
     *
     * @return $this|ChildCareTzEyeIntraocularpressureQuery The current query, for fluid interface
     */
    public function prune($careTzEyeIntraocularpressure = null)
    {
        if ($careTzEyeIntraocularpressure) {
            $this->addUsingAlias(CareTzEyeIntraocularpressureTableMap::COL_ID, $careTzEyeIntraocularpressure->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_eye_intraocularpressure table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeIntraocularpressureTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzEyeIntraocularpressureTableMap::clearInstancePool();
            CareTzEyeIntraocularpressureTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeIntraocularpressureTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzEyeIntraocularpressureTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzEyeIntraocularpressureTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzEyeIntraocularpressureTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzEyeIntraocularpressureQuery
