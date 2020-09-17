<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzEyePosteriorSegment as ChildCareTzEyePosteriorSegment;
use CareMd\CareMd\CareTzEyePosteriorSegmentQuery as ChildCareTzEyePosteriorSegmentQuery;
use CareMd\CareMd\Map\CareTzEyePosteriorSegmentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_eye_posterior_segment' table.
 *
 *
 *
 * @method     ChildCareTzEyePosteriorSegmentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByRightEyeTest1($order = Criteria::ASC) Order by the right_eye_test1 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByRightEyeTest2($order = Criteria::ASC) Order by the right_eye_test2 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByRightEyeTest3($order = Criteria::ASC) Order by the right_eye_test3 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByRightEyeTest4($order = Criteria::ASC) Order by the right_eye_test4 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByRightEyeTest5($order = Criteria::ASC) Order by the right_eye_test5 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByRightEyeTest6($order = Criteria::ASC) Order by the right_eye_test6 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByRightEyeTest7($order = Criteria::ASC) Order by the right_eye_test7 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByRightEyeTest8($order = Criteria::ASC) Order by the right_eye_test8 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByRightEyeTest9($order = Criteria::ASC) Order by the right_eye_test9 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByLeftEyeTest1($order = Criteria::ASC) Order by the left_eye_test1 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByLeftEyeTest2($order = Criteria::ASC) Order by the left_eye_test2 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByLeftEyeTest3($order = Criteria::ASC) Order by the left_eye_test3 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByLeftEyeTest4($order = Criteria::ASC) Order by the left_eye_test4 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByLeftEyeTest5($order = Criteria::ASC) Order by the left_eye_test5 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByLeftEyeTest6($order = Criteria::ASC) Order by the left_eye_test6 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByLeftEyeTest7($order = Criteria::ASC) Order by the left_eye_test7 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByLeftEyeTest8($order = Criteria::ASC) Order by the left_eye_test8 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByLeftEyeTest9($order = Criteria::ASC) Order by the left_eye_test9 column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderBySignature($order = Criteria::ASC) Order by the Signature column
 * @method     ChildCareTzEyePosteriorSegmentQuery orderByExaminationDate($order = Criteria::ASC) Order by the Examination_date column
 *
 * @method     ChildCareTzEyePosteriorSegmentQuery groupById() Group by the id column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByPid() Group by the pid column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByRightEyeTest1() Group by the right_eye_test1 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByRightEyeTest2() Group by the right_eye_test2 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByRightEyeTest3() Group by the right_eye_test3 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByRightEyeTest4() Group by the right_eye_test4 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByRightEyeTest5() Group by the right_eye_test5 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByRightEyeTest6() Group by the right_eye_test6 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByRightEyeTest7() Group by the right_eye_test7 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByRightEyeTest8() Group by the right_eye_test8 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByRightEyeTest9() Group by the right_eye_test9 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByLeftEyeTest1() Group by the left_eye_test1 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByLeftEyeTest2() Group by the left_eye_test2 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByLeftEyeTest3() Group by the left_eye_test3 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByLeftEyeTest4() Group by the left_eye_test4 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByLeftEyeTest5() Group by the left_eye_test5 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByLeftEyeTest6() Group by the left_eye_test6 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByLeftEyeTest7() Group by the left_eye_test7 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByLeftEyeTest8() Group by the left_eye_test8 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByLeftEyeTest9() Group by the left_eye_test9 column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupBySignature() Group by the Signature column
 * @method     ChildCareTzEyePosteriorSegmentQuery groupByExaminationDate() Group by the Examination_date column
 *
 * @method     ChildCareTzEyePosteriorSegmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzEyePosteriorSegmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzEyePosteriorSegmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzEyePosteriorSegmentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzEyePosteriorSegmentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzEyePosteriorSegmentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzEyePosteriorSegment findOne(ConnectionInterface $con = null) Return the first ChildCareTzEyePosteriorSegment matching the query
 * @method     ChildCareTzEyePosteriorSegment findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzEyePosteriorSegment matching the query, or a new ChildCareTzEyePosteriorSegment object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzEyePosteriorSegment findOneById(int $id) Return the first ChildCareTzEyePosteriorSegment filtered by the id column
 * @method     ChildCareTzEyePosteriorSegment findOneByPid(int $pid) Return the first ChildCareTzEyePosteriorSegment filtered by the pid column
 * @method     ChildCareTzEyePosteriorSegment findOneByRightEyeTest1(string $right_eye_test1) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test1 column
 * @method     ChildCareTzEyePosteriorSegment findOneByRightEyeTest2(string $right_eye_test2) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test2 column
 * @method     ChildCareTzEyePosteriorSegment findOneByRightEyeTest3(string $right_eye_test3) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test3 column
 * @method     ChildCareTzEyePosteriorSegment findOneByRightEyeTest4(string $right_eye_test4) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test4 column
 * @method     ChildCareTzEyePosteriorSegment findOneByRightEyeTest5(string $right_eye_test5) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test5 column
 * @method     ChildCareTzEyePosteriorSegment findOneByRightEyeTest6(string $right_eye_test6) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test6 column
 * @method     ChildCareTzEyePosteriorSegment findOneByRightEyeTest7(string $right_eye_test7) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test7 column
 * @method     ChildCareTzEyePosteriorSegment findOneByRightEyeTest8(string $right_eye_test8) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test8 column
 * @method     ChildCareTzEyePosteriorSegment findOneByRightEyeTest9(string $right_eye_test9) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test9 column
 * @method     ChildCareTzEyePosteriorSegment findOneByLeftEyeTest1(string $left_eye_test1) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test1 column
 * @method     ChildCareTzEyePosteriorSegment findOneByLeftEyeTest2(string $left_eye_test2) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test2 column
 * @method     ChildCareTzEyePosteriorSegment findOneByLeftEyeTest3(string $left_eye_test3) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test3 column
 * @method     ChildCareTzEyePosteriorSegment findOneByLeftEyeTest4(string $left_eye_test4) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test4 column
 * @method     ChildCareTzEyePosteriorSegment findOneByLeftEyeTest5(string $left_eye_test5) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test5 column
 * @method     ChildCareTzEyePosteriorSegment findOneByLeftEyeTest6(string $left_eye_test6) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test6 column
 * @method     ChildCareTzEyePosteriorSegment findOneByLeftEyeTest7(string $left_eye_test7) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test7 column
 * @method     ChildCareTzEyePosteriorSegment findOneByLeftEyeTest8(string $left_eye_test8) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test8 column
 * @method     ChildCareTzEyePosteriorSegment findOneByLeftEyeTest9(string $left_eye_test9) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test9 column
 * @method     ChildCareTzEyePosteriorSegment findOneBySignature(string $Signature) Return the first ChildCareTzEyePosteriorSegment filtered by the Signature column
 * @method     ChildCareTzEyePosteriorSegment findOneByExaminationDate(string $Examination_date) Return the first ChildCareTzEyePosteriorSegment filtered by the Examination_date column *

 * @method     ChildCareTzEyePosteriorSegment requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzEyePosteriorSegment by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOne(ConnectionInterface $con = null) Return the first ChildCareTzEyePosteriorSegment matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzEyePosteriorSegment requireOneById(int $id) Return the first ChildCareTzEyePosteriorSegment filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByPid(int $pid) Return the first ChildCareTzEyePosteriorSegment filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByRightEyeTest1(string $right_eye_test1) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByRightEyeTest2(string $right_eye_test2) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByRightEyeTest3(string $right_eye_test3) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByRightEyeTest4(string $right_eye_test4) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByRightEyeTest5(string $right_eye_test5) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByRightEyeTest6(string $right_eye_test6) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByRightEyeTest7(string $right_eye_test7) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByRightEyeTest8(string $right_eye_test8) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByRightEyeTest9(string $right_eye_test9) Return the first ChildCareTzEyePosteriorSegment filtered by the right_eye_test9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByLeftEyeTest1(string $left_eye_test1) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByLeftEyeTest2(string $left_eye_test2) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByLeftEyeTest3(string $left_eye_test3) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByLeftEyeTest4(string $left_eye_test4) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByLeftEyeTest5(string $left_eye_test5) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByLeftEyeTest6(string $left_eye_test6) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByLeftEyeTest7(string $left_eye_test7) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByLeftEyeTest8(string $left_eye_test8) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByLeftEyeTest9(string $left_eye_test9) Return the first ChildCareTzEyePosteriorSegment filtered by the left_eye_test9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneBySignature(string $Signature) Return the first ChildCareTzEyePosteriorSegment filtered by the Signature column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyePosteriorSegment requireOneByExaminationDate(string $Examination_date) Return the first ChildCareTzEyePosteriorSegment filtered by the Examination_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzEyePosteriorSegment objects based on current ModelCriteria
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findById(int $id) Return ChildCareTzEyePosteriorSegment objects filtered by the id column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByPid(int $pid) Return ChildCareTzEyePosteriorSegment objects filtered by the pid column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByRightEyeTest1(string $right_eye_test1) Return ChildCareTzEyePosteriorSegment objects filtered by the right_eye_test1 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByRightEyeTest2(string $right_eye_test2) Return ChildCareTzEyePosteriorSegment objects filtered by the right_eye_test2 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByRightEyeTest3(string $right_eye_test3) Return ChildCareTzEyePosteriorSegment objects filtered by the right_eye_test3 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByRightEyeTest4(string $right_eye_test4) Return ChildCareTzEyePosteriorSegment objects filtered by the right_eye_test4 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByRightEyeTest5(string $right_eye_test5) Return ChildCareTzEyePosteriorSegment objects filtered by the right_eye_test5 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByRightEyeTest6(string $right_eye_test6) Return ChildCareTzEyePosteriorSegment objects filtered by the right_eye_test6 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByRightEyeTest7(string $right_eye_test7) Return ChildCareTzEyePosteriorSegment objects filtered by the right_eye_test7 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByRightEyeTest8(string $right_eye_test8) Return ChildCareTzEyePosteriorSegment objects filtered by the right_eye_test8 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByRightEyeTest9(string $right_eye_test9) Return ChildCareTzEyePosteriorSegment objects filtered by the right_eye_test9 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByLeftEyeTest1(string $left_eye_test1) Return ChildCareTzEyePosteriorSegment objects filtered by the left_eye_test1 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByLeftEyeTest2(string $left_eye_test2) Return ChildCareTzEyePosteriorSegment objects filtered by the left_eye_test2 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByLeftEyeTest3(string $left_eye_test3) Return ChildCareTzEyePosteriorSegment objects filtered by the left_eye_test3 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByLeftEyeTest4(string $left_eye_test4) Return ChildCareTzEyePosteriorSegment objects filtered by the left_eye_test4 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByLeftEyeTest5(string $left_eye_test5) Return ChildCareTzEyePosteriorSegment objects filtered by the left_eye_test5 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByLeftEyeTest6(string $left_eye_test6) Return ChildCareTzEyePosteriorSegment objects filtered by the left_eye_test6 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByLeftEyeTest7(string $left_eye_test7) Return ChildCareTzEyePosteriorSegment objects filtered by the left_eye_test7 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByLeftEyeTest8(string $left_eye_test8) Return ChildCareTzEyePosteriorSegment objects filtered by the left_eye_test8 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByLeftEyeTest9(string $left_eye_test9) Return ChildCareTzEyePosteriorSegment objects filtered by the left_eye_test9 column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findBySignature(string $Signature) Return ChildCareTzEyePosteriorSegment objects filtered by the Signature column
 * @method     ChildCareTzEyePosteriorSegment[]|ObjectCollection findByExaminationDate(string $Examination_date) Return ChildCareTzEyePosteriorSegment objects filtered by the Examination_date column
 * @method     ChildCareTzEyePosteriorSegment[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzEyePosteriorSegmentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzEyePosteriorSegmentQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzEyePosteriorSegment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzEyePosteriorSegmentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzEyePosteriorSegmentQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzEyePosteriorSegmentQuery) {
            return $criteria;
        }
        $query = new ChildCareTzEyePosteriorSegmentQuery();
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
     * @return ChildCareTzEyePosteriorSegment|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzEyePosteriorSegmentTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzEyePosteriorSegmentTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzEyePosteriorSegment A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, pid, right_eye_test1, right_eye_test2, right_eye_test3, right_eye_test4, right_eye_test5, right_eye_test6, right_eye_test7, right_eye_test8, right_eye_test9, left_eye_test1, left_eye_test2, left_eye_test3, left_eye_test4, left_eye_test5, left_eye_test6, left_eye_test7, left_eye_test8, left_eye_test9, Signature, Examination_date FROM care_tz_eye_posterior_segment WHERE id = :p0';
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
            /** @var ChildCareTzEyePosteriorSegment $obj */
            $obj = new ChildCareTzEyePosteriorSegment();
            $obj->hydrate($row);
            CareTzEyePosteriorSegmentTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzEyePosteriorSegment|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_PID, $pid, $comparison);
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
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByRightEyeTest1($rightEyeTest1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rightEyeTest1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_RIGHT_EYE_TEST1, $rightEyeTest1, $comparison);
    }

    /**
     * Filter the query on the right_eye_test2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRightEyeTest2('fooValue');   // WHERE right_eye_test2 = 'fooValue'
     * $query->filterByRightEyeTest2('%fooValue%', Criteria::LIKE); // WHERE right_eye_test2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rightEyeTest2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByRightEyeTest2($rightEyeTest2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rightEyeTest2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_RIGHT_EYE_TEST2, $rightEyeTest2, $comparison);
    }

    /**
     * Filter the query on the right_eye_test3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRightEyeTest3('fooValue');   // WHERE right_eye_test3 = 'fooValue'
     * $query->filterByRightEyeTest3('%fooValue%', Criteria::LIKE); // WHERE right_eye_test3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rightEyeTest3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByRightEyeTest3($rightEyeTest3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rightEyeTest3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_RIGHT_EYE_TEST3, $rightEyeTest3, $comparison);
    }

    /**
     * Filter the query on the right_eye_test4 column
     *
     * Example usage:
     * <code>
     * $query->filterByRightEyeTest4('fooValue');   // WHERE right_eye_test4 = 'fooValue'
     * $query->filterByRightEyeTest4('%fooValue%', Criteria::LIKE); // WHERE right_eye_test4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rightEyeTest4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByRightEyeTest4($rightEyeTest4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rightEyeTest4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_RIGHT_EYE_TEST4, $rightEyeTest4, $comparison);
    }

    /**
     * Filter the query on the right_eye_test5 column
     *
     * Example usage:
     * <code>
     * $query->filterByRightEyeTest5('fooValue');   // WHERE right_eye_test5 = 'fooValue'
     * $query->filterByRightEyeTest5('%fooValue%', Criteria::LIKE); // WHERE right_eye_test5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rightEyeTest5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByRightEyeTest5($rightEyeTest5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rightEyeTest5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_RIGHT_EYE_TEST5, $rightEyeTest5, $comparison);
    }

    /**
     * Filter the query on the right_eye_test6 column
     *
     * Example usage:
     * <code>
     * $query->filterByRightEyeTest6('fooValue');   // WHERE right_eye_test6 = 'fooValue'
     * $query->filterByRightEyeTest6('%fooValue%', Criteria::LIKE); // WHERE right_eye_test6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rightEyeTest6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByRightEyeTest6($rightEyeTest6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rightEyeTest6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_RIGHT_EYE_TEST6, $rightEyeTest6, $comparison);
    }

    /**
     * Filter the query on the right_eye_test7 column
     *
     * Example usage:
     * <code>
     * $query->filterByRightEyeTest7('fooValue');   // WHERE right_eye_test7 = 'fooValue'
     * $query->filterByRightEyeTest7('%fooValue%', Criteria::LIKE); // WHERE right_eye_test7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rightEyeTest7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByRightEyeTest7($rightEyeTest7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rightEyeTest7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_RIGHT_EYE_TEST7, $rightEyeTest7, $comparison);
    }

    /**
     * Filter the query on the right_eye_test8 column
     *
     * Example usage:
     * <code>
     * $query->filterByRightEyeTest8('fooValue');   // WHERE right_eye_test8 = 'fooValue'
     * $query->filterByRightEyeTest8('%fooValue%', Criteria::LIKE); // WHERE right_eye_test8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rightEyeTest8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByRightEyeTest8($rightEyeTest8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rightEyeTest8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_RIGHT_EYE_TEST8, $rightEyeTest8, $comparison);
    }

    /**
     * Filter the query on the right_eye_test9 column
     *
     * Example usage:
     * <code>
     * $query->filterByRightEyeTest9('fooValue');   // WHERE right_eye_test9 = 'fooValue'
     * $query->filterByRightEyeTest9('%fooValue%', Criteria::LIKE); // WHERE right_eye_test9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rightEyeTest9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByRightEyeTest9($rightEyeTest9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rightEyeTest9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_RIGHT_EYE_TEST9, $rightEyeTest9, $comparison);
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
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByLeftEyeTest1($leftEyeTest1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leftEyeTest1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_LEFT_EYE_TEST1, $leftEyeTest1, $comparison);
    }

    /**
     * Filter the query on the left_eye_test2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLeftEyeTest2('fooValue');   // WHERE left_eye_test2 = 'fooValue'
     * $query->filterByLeftEyeTest2('%fooValue%', Criteria::LIKE); // WHERE left_eye_test2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leftEyeTest2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByLeftEyeTest2($leftEyeTest2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leftEyeTest2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_LEFT_EYE_TEST2, $leftEyeTest2, $comparison);
    }

    /**
     * Filter the query on the left_eye_test3 column
     *
     * Example usage:
     * <code>
     * $query->filterByLeftEyeTest3('fooValue');   // WHERE left_eye_test3 = 'fooValue'
     * $query->filterByLeftEyeTest3('%fooValue%', Criteria::LIKE); // WHERE left_eye_test3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leftEyeTest3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByLeftEyeTest3($leftEyeTest3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leftEyeTest3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_LEFT_EYE_TEST3, $leftEyeTest3, $comparison);
    }

    /**
     * Filter the query on the left_eye_test4 column
     *
     * Example usage:
     * <code>
     * $query->filterByLeftEyeTest4('fooValue');   // WHERE left_eye_test4 = 'fooValue'
     * $query->filterByLeftEyeTest4('%fooValue%', Criteria::LIKE); // WHERE left_eye_test4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leftEyeTest4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByLeftEyeTest4($leftEyeTest4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leftEyeTest4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_LEFT_EYE_TEST4, $leftEyeTest4, $comparison);
    }

    /**
     * Filter the query on the left_eye_test5 column
     *
     * Example usage:
     * <code>
     * $query->filterByLeftEyeTest5('fooValue');   // WHERE left_eye_test5 = 'fooValue'
     * $query->filterByLeftEyeTest5('%fooValue%', Criteria::LIKE); // WHERE left_eye_test5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leftEyeTest5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByLeftEyeTest5($leftEyeTest5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leftEyeTest5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_LEFT_EYE_TEST5, $leftEyeTest5, $comparison);
    }

    /**
     * Filter the query on the left_eye_test6 column
     *
     * Example usage:
     * <code>
     * $query->filterByLeftEyeTest6('fooValue');   // WHERE left_eye_test6 = 'fooValue'
     * $query->filterByLeftEyeTest6('%fooValue%', Criteria::LIKE); // WHERE left_eye_test6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leftEyeTest6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByLeftEyeTest6($leftEyeTest6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leftEyeTest6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_LEFT_EYE_TEST6, $leftEyeTest6, $comparison);
    }

    /**
     * Filter the query on the left_eye_test7 column
     *
     * Example usage:
     * <code>
     * $query->filterByLeftEyeTest7('fooValue');   // WHERE left_eye_test7 = 'fooValue'
     * $query->filterByLeftEyeTest7('%fooValue%', Criteria::LIKE); // WHERE left_eye_test7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leftEyeTest7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByLeftEyeTest7($leftEyeTest7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leftEyeTest7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_LEFT_EYE_TEST7, $leftEyeTest7, $comparison);
    }

    /**
     * Filter the query on the left_eye_test8 column
     *
     * Example usage:
     * <code>
     * $query->filterByLeftEyeTest8('fooValue');   // WHERE left_eye_test8 = 'fooValue'
     * $query->filterByLeftEyeTest8('%fooValue%', Criteria::LIKE); // WHERE left_eye_test8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leftEyeTest8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByLeftEyeTest8($leftEyeTest8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leftEyeTest8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_LEFT_EYE_TEST8, $leftEyeTest8, $comparison);
    }

    /**
     * Filter the query on the left_eye_test9 column
     *
     * Example usage:
     * <code>
     * $query->filterByLeftEyeTest9('fooValue');   // WHERE left_eye_test9 = 'fooValue'
     * $query->filterByLeftEyeTest9('%fooValue%', Criteria::LIKE); // WHERE left_eye_test9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leftEyeTest9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByLeftEyeTest9($leftEyeTest9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leftEyeTest9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_LEFT_EYE_TEST9, $leftEyeTest9, $comparison);
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
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterBySignature($signature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signature)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_SIGNATURE, $signature, $comparison);
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
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function filterByExaminationDate($examinationDate = null, $comparison = null)
    {
        if (is_array($examinationDate)) {
            $useMinMax = false;
            if (isset($examinationDate['min'])) {
                $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_EXAMINATION_DATE, $examinationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($examinationDate['max'])) {
                $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_EXAMINATION_DATE, $examinationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_EXAMINATION_DATE, $examinationDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzEyePosteriorSegment $careTzEyePosteriorSegment Object to remove from the list of results
     *
     * @return $this|ChildCareTzEyePosteriorSegmentQuery The current query, for fluid interface
     */
    public function prune($careTzEyePosteriorSegment = null)
    {
        if ($careTzEyePosteriorSegment) {
            $this->addUsingAlias(CareTzEyePosteriorSegmentTableMap::COL_ID, $careTzEyePosteriorSegment->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_eye_posterior_segment table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyePosteriorSegmentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzEyePosteriorSegmentTableMap::clearInstancePool();
            CareTzEyePosteriorSegmentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyePosteriorSegmentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzEyePosteriorSegmentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzEyePosteriorSegmentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzEyePosteriorSegmentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzEyePosteriorSegmentQuery
