<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareTzEyeHistory5 as ChildCareTzEyeHistory5;
use CareMd\CareMd\CareTzEyeHistory5Query as ChildCareTzEyeHistory5Query;
use CareMd\CareMd\Map\CareTzEyeHistory5TableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_eye_history5' table.
 *
 *
 *
 * @method     ChildCareTzEyeHistory5Query orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzEyeHistory5Query orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCareTzEyeHistory5Query orderByHid1($order = Criteria::ASC) Order by the hid1 column
 * @method     ChildCareTzEyeHistory5Query orderByHid1e($order = Criteria::ASC) Order by the hid1e column
 * @method     ChildCareTzEyeHistory5Query orderByHid1d($order = Criteria::ASC) Order by the hid1d column
 * @method     ChildCareTzEyeHistory5Query orderByHid2($order = Criteria::ASC) Order by the hid2 column
 * @method     ChildCareTzEyeHistory5Query orderByHid2e($order = Criteria::ASC) Order by the hid2e column
 * @method     ChildCareTzEyeHistory5Query orderByHid2d($order = Criteria::ASC) Order by the hid2d column
 * @method     ChildCareTzEyeHistory5Query orderByHid3($order = Criteria::ASC) Order by the hid3 column
 * @method     ChildCareTzEyeHistory5Query orderByHid3e($order = Criteria::ASC) Order by the hid3e column
 * @method     ChildCareTzEyeHistory5Query orderByHid3d($order = Criteria::ASC) Order by the hid3d column
 * @method     ChildCareTzEyeHistory5Query orderByHid4($order = Criteria::ASC) Order by the hid4 column
 * @method     ChildCareTzEyeHistory5Query orderByHid4e($order = Criteria::ASC) Order by the hid4e column
 * @method     ChildCareTzEyeHistory5Query orderByHid4d($order = Criteria::ASC) Order by the hid4d column
 * @method     ChildCareTzEyeHistory5Query orderByHid5($order = Criteria::ASC) Order by the hid5 column
 * @method     ChildCareTzEyeHistory5Query orderByHid5e($order = Criteria::ASC) Order by the hid5e column
 * @method     ChildCareTzEyeHistory5Query orderByHid5d($order = Criteria::ASC) Order by the hid5d column
 * @method     ChildCareTzEyeHistory5Query orderByHid6($order = Criteria::ASC) Order by the hid6 column
 * @method     ChildCareTzEyeHistory5Query orderByHid6e($order = Criteria::ASC) Order by the hid6e column
 * @method     ChildCareTzEyeHistory5Query orderByHid6d($order = Criteria::ASC) Order by the hid6d column
 * @method     ChildCareTzEyeHistory5Query orderByHid7($order = Criteria::ASC) Order by the hid7 column
 * @method     ChildCareTzEyeHistory5Query orderByHid7e($order = Criteria::ASC) Order by the hid7e column
 * @method     ChildCareTzEyeHistory5Query orderByHid7d($order = Criteria::ASC) Order by the hid7d column
 * @method     ChildCareTzEyeHistory5Query orderBySignature($order = Criteria::ASC) Order by the signature column
 * @method     ChildCareTzEyeHistory5Query orderByRemarks($order = Criteria::ASC) Order by the remarks column
 * @method     ChildCareTzEyeHistory5Query orderByExaminationDate($order = Criteria::ASC) Order by the examination_date column
 *
 * @method     ChildCareTzEyeHistory5Query groupById() Group by the id column
 * @method     ChildCareTzEyeHistory5Query groupByPid() Group by the pid column
 * @method     ChildCareTzEyeHistory5Query groupByHid1() Group by the hid1 column
 * @method     ChildCareTzEyeHistory5Query groupByHid1e() Group by the hid1e column
 * @method     ChildCareTzEyeHistory5Query groupByHid1d() Group by the hid1d column
 * @method     ChildCareTzEyeHistory5Query groupByHid2() Group by the hid2 column
 * @method     ChildCareTzEyeHistory5Query groupByHid2e() Group by the hid2e column
 * @method     ChildCareTzEyeHistory5Query groupByHid2d() Group by the hid2d column
 * @method     ChildCareTzEyeHistory5Query groupByHid3() Group by the hid3 column
 * @method     ChildCareTzEyeHistory5Query groupByHid3e() Group by the hid3e column
 * @method     ChildCareTzEyeHistory5Query groupByHid3d() Group by the hid3d column
 * @method     ChildCareTzEyeHistory5Query groupByHid4() Group by the hid4 column
 * @method     ChildCareTzEyeHistory5Query groupByHid4e() Group by the hid4e column
 * @method     ChildCareTzEyeHistory5Query groupByHid4d() Group by the hid4d column
 * @method     ChildCareTzEyeHistory5Query groupByHid5() Group by the hid5 column
 * @method     ChildCareTzEyeHistory5Query groupByHid5e() Group by the hid5e column
 * @method     ChildCareTzEyeHistory5Query groupByHid5d() Group by the hid5d column
 * @method     ChildCareTzEyeHistory5Query groupByHid6() Group by the hid6 column
 * @method     ChildCareTzEyeHistory5Query groupByHid6e() Group by the hid6e column
 * @method     ChildCareTzEyeHistory5Query groupByHid6d() Group by the hid6d column
 * @method     ChildCareTzEyeHistory5Query groupByHid7() Group by the hid7 column
 * @method     ChildCareTzEyeHistory5Query groupByHid7e() Group by the hid7e column
 * @method     ChildCareTzEyeHistory5Query groupByHid7d() Group by the hid7d column
 * @method     ChildCareTzEyeHistory5Query groupBySignature() Group by the signature column
 * @method     ChildCareTzEyeHistory5Query groupByRemarks() Group by the remarks column
 * @method     ChildCareTzEyeHistory5Query groupByExaminationDate() Group by the examination_date column
 *
 * @method     ChildCareTzEyeHistory5Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzEyeHistory5Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzEyeHistory5Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzEyeHistory5Query leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzEyeHistory5Query rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzEyeHistory5Query innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzEyeHistory5 findOne(ConnectionInterface $con = null) Return the first ChildCareTzEyeHistory5 matching the query
 * @method     ChildCareTzEyeHistory5 findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzEyeHistory5 matching the query, or a new ChildCareTzEyeHistory5 object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzEyeHistory5 findOneById(int $id) Return the first ChildCareTzEyeHistory5 filtered by the id column
 * @method     ChildCareTzEyeHistory5 findOneByPid(string $pid) Return the first ChildCareTzEyeHistory5 filtered by the pid column
 * @method     ChildCareTzEyeHistory5 findOneByHid1(string $hid1) Return the first ChildCareTzEyeHistory5 filtered by the hid1 column
 * @method     ChildCareTzEyeHistory5 findOneByHid1e(string $hid1e) Return the first ChildCareTzEyeHistory5 filtered by the hid1e column
 * @method     ChildCareTzEyeHistory5 findOneByHid1d(string $hid1d) Return the first ChildCareTzEyeHistory5 filtered by the hid1d column
 * @method     ChildCareTzEyeHistory5 findOneByHid2(string $hid2) Return the first ChildCareTzEyeHistory5 filtered by the hid2 column
 * @method     ChildCareTzEyeHistory5 findOneByHid2e(string $hid2e) Return the first ChildCareTzEyeHistory5 filtered by the hid2e column
 * @method     ChildCareTzEyeHistory5 findOneByHid2d(string $hid2d) Return the first ChildCareTzEyeHistory5 filtered by the hid2d column
 * @method     ChildCareTzEyeHistory5 findOneByHid3(string $hid3) Return the first ChildCareTzEyeHistory5 filtered by the hid3 column
 * @method     ChildCareTzEyeHistory5 findOneByHid3e(string $hid3e) Return the first ChildCareTzEyeHistory5 filtered by the hid3e column
 * @method     ChildCareTzEyeHistory5 findOneByHid3d(string $hid3d) Return the first ChildCareTzEyeHistory5 filtered by the hid3d column
 * @method     ChildCareTzEyeHistory5 findOneByHid4(string $hid4) Return the first ChildCareTzEyeHistory5 filtered by the hid4 column
 * @method     ChildCareTzEyeHistory5 findOneByHid4e(string $hid4e) Return the first ChildCareTzEyeHistory5 filtered by the hid4e column
 * @method     ChildCareTzEyeHistory5 findOneByHid4d(string $hid4d) Return the first ChildCareTzEyeHistory5 filtered by the hid4d column
 * @method     ChildCareTzEyeHistory5 findOneByHid5(string $hid5) Return the first ChildCareTzEyeHistory5 filtered by the hid5 column
 * @method     ChildCareTzEyeHistory5 findOneByHid5e(string $hid5e) Return the first ChildCareTzEyeHistory5 filtered by the hid5e column
 * @method     ChildCareTzEyeHistory5 findOneByHid5d(string $hid5d) Return the first ChildCareTzEyeHistory5 filtered by the hid5d column
 * @method     ChildCareTzEyeHistory5 findOneByHid6(string $hid6) Return the first ChildCareTzEyeHistory5 filtered by the hid6 column
 * @method     ChildCareTzEyeHistory5 findOneByHid6e(string $hid6e) Return the first ChildCareTzEyeHistory5 filtered by the hid6e column
 * @method     ChildCareTzEyeHistory5 findOneByHid6d(string $hid6d) Return the first ChildCareTzEyeHistory5 filtered by the hid6d column
 * @method     ChildCareTzEyeHistory5 findOneByHid7(string $hid7) Return the first ChildCareTzEyeHistory5 filtered by the hid7 column
 * @method     ChildCareTzEyeHistory5 findOneByHid7e(string $hid7e) Return the first ChildCareTzEyeHistory5 filtered by the hid7e column
 * @method     ChildCareTzEyeHistory5 findOneByHid7d(string $hid7d) Return the first ChildCareTzEyeHistory5 filtered by the hid7d column
 * @method     ChildCareTzEyeHistory5 findOneBySignature(string $signature) Return the first ChildCareTzEyeHistory5 filtered by the signature column
 * @method     ChildCareTzEyeHistory5 findOneByRemarks(string $remarks) Return the first ChildCareTzEyeHistory5 filtered by the remarks column
 * @method     ChildCareTzEyeHistory5 findOneByExaminationDate(string $examination_date) Return the first ChildCareTzEyeHistory5 filtered by the examination_date column *

 * @method     ChildCareTzEyeHistory5 requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzEyeHistory5 by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOne(ConnectionInterface $con = null) Return the first ChildCareTzEyeHistory5 matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzEyeHistory5 requireOneById(int $id) Return the first ChildCareTzEyeHistory5 filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByPid(string $pid) Return the first ChildCareTzEyeHistory5 filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid1(string $hid1) Return the first ChildCareTzEyeHistory5 filtered by the hid1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid1e(string $hid1e) Return the first ChildCareTzEyeHistory5 filtered by the hid1e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid1d(string $hid1d) Return the first ChildCareTzEyeHistory5 filtered by the hid1d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid2(string $hid2) Return the first ChildCareTzEyeHistory5 filtered by the hid2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid2e(string $hid2e) Return the first ChildCareTzEyeHistory5 filtered by the hid2e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid2d(string $hid2d) Return the first ChildCareTzEyeHistory5 filtered by the hid2d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid3(string $hid3) Return the first ChildCareTzEyeHistory5 filtered by the hid3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid3e(string $hid3e) Return the first ChildCareTzEyeHistory5 filtered by the hid3e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid3d(string $hid3d) Return the first ChildCareTzEyeHistory5 filtered by the hid3d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid4(string $hid4) Return the first ChildCareTzEyeHistory5 filtered by the hid4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid4e(string $hid4e) Return the first ChildCareTzEyeHistory5 filtered by the hid4e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid4d(string $hid4d) Return the first ChildCareTzEyeHistory5 filtered by the hid4d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid5(string $hid5) Return the first ChildCareTzEyeHistory5 filtered by the hid5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid5e(string $hid5e) Return the first ChildCareTzEyeHistory5 filtered by the hid5e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid5d(string $hid5d) Return the first ChildCareTzEyeHistory5 filtered by the hid5d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid6(string $hid6) Return the first ChildCareTzEyeHistory5 filtered by the hid6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid6e(string $hid6e) Return the first ChildCareTzEyeHistory5 filtered by the hid6e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid6d(string $hid6d) Return the first ChildCareTzEyeHistory5 filtered by the hid6d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid7(string $hid7) Return the first ChildCareTzEyeHistory5 filtered by the hid7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid7e(string $hid7e) Return the first ChildCareTzEyeHistory5 filtered by the hid7e column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByHid7d(string $hid7d) Return the first ChildCareTzEyeHistory5 filtered by the hid7d column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneBySignature(string $signature) Return the first ChildCareTzEyeHistory5 filtered by the signature column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByRemarks(string $remarks) Return the first ChildCareTzEyeHistory5 filtered by the remarks column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzEyeHistory5 requireOneByExaminationDate(string $examination_date) Return the first ChildCareTzEyeHistory5 filtered by the examination_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzEyeHistory5 objects based on current ModelCriteria
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findById(int $id) Return ChildCareTzEyeHistory5 objects filtered by the id column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByPid(string $pid) Return ChildCareTzEyeHistory5 objects filtered by the pid column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid1(string $hid1) Return ChildCareTzEyeHistory5 objects filtered by the hid1 column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid1e(string $hid1e) Return ChildCareTzEyeHistory5 objects filtered by the hid1e column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid1d(string $hid1d) Return ChildCareTzEyeHistory5 objects filtered by the hid1d column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid2(string $hid2) Return ChildCareTzEyeHistory5 objects filtered by the hid2 column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid2e(string $hid2e) Return ChildCareTzEyeHistory5 objects filtered by the hid2e column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid2d(string $hid2d) Return ChildCareTzEyeHistory5 objects filtered by the hid2d column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid3(string $hid3) Return ChildCareTzEyeHistory5 objects filtered by the hid3 column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid3e(string $hid3e) Return ChildCareTzEyeHistory5 objects filtered by the hid3e column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid3d(string $hid3d) Return ChildCareTzEyeHistory5 objects filtered by the hid3d column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid4(string $hid4) Return ChildCareTzEyeHistory5 objects filtered by the hid4 column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid4e(string $hid4e) Return ChildCareTzEyeHistory5 objects filtered by the hid4e column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid4d(string $hid4d) Return ChildCareTzEyeHistory5 objects filtered by the hid4d column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid5(string $hid5) Return ChildCareTzEyeHistory5 objects filtered by the hid5 column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid5e(string $hid5e) Return ChildCareTzEyeHistory5 objects filtered by the hid5e column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid5d(string $hid5d) Return ChildCareTzEyeHistory5 objects filtered by the hid5d column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid6(string $hid6) Return ChildCareTzEyeHistory5 objects filtered by the hid6 column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid6e(string $hid6e) Return ChildCareTzEyeHistory5 objects filtered by the hid6e column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid6d(string $hid6d) Return ChildCareTzEyeHistory5 objects filtered by the hid6d column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid7(string $hid7) Return ChildCareTzEyeHistory5 objects filtered by the hid7 column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid7e(string $hid7e) Return ChildCareTzEyeHistory5 objects filtered by the hid7e column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByHid7d(string $hid7d) Return ChildCareTzEyeHistory5 objects filtered by the hid7d column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findBySignature(string $signature) Return ChildCareTzEyeHistory5 objects filtered by the signature column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByRemarks(string $remarks) Return ChildCareTzEyeHistory5 objects filtered by the remarks column
 * @method     ChildCareTzEyeHistory5[]|ObjectCollection findByExaminationDate(string $examination_date) Return ChildCareTzEyeHistory5 objects filtered by the examination_date column
 * @method     ChildCareTzEyeHistory5[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzEyeHistory5Query extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzEyeHistory5Query object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzEyeHistory5', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzEyeHistory5Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzEyeHistory5Query
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzEyeHistory5Query) {
            return $criteria;
        }
        $query = new ChildCareTzEyeHistory5Query();
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
     * @return ChildCareTzEyeHistory5|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareTzEyeHistory5 object has no primary key');
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
        throw new LogicException('The CareTzEyeHistory5 object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareTzEyeHistory5 object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareTzEyeHistory5 object has no primary key');
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_PID, $pid, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid1($hid1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID1, $hid1, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid1e($hid1e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid1e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID1E, $hid1e, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid1d($hid1d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid1d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID1D, $hid1d, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid2($hid2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID2, $hid2, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid2e($hid2e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid2e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID2E, $hid2e, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid2d($hid2d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid2d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID2D, $hid2d, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid3($hid3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID3, $hid3, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid3e($hid3e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid3e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID3E, $hid3e, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid3d($hid3d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid3d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID3D, $hid3d, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid4($hid4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID4, $hid4, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid4e($hid4e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid4e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID4E, $hid4e, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid4d($hid4d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid4d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID4D, $hid4d, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid5($hid5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID5, $hid5, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid5e($hid5e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid5e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID5E, $hid5e, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid5d($hid5d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid5d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID5D, $hid5d, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid6($hid6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID6, $hid6, $comparison);
    }

    /**
     * Filter the query on the hid6e column
     *
     * Example usage:
     * <code>
     * $query->filterByHid6e('fooValue');   // WHERE hid6e = 'fooValue'
     * $query->filterByHid6e('%fooValue%', Criteria::LIKE); // WHERE hid6e LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid6e The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid6e($hid6e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid6e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID6E, $hid6e, $comparison);
    }

    /**
     * Filter the query on the hid6d column
     *
     * Example usage:
     * <code>
     * $query->filterByHid6d('fooValue');   // WHERE hid6d = 'fooValue'
     * $query->filterByHid6d('%fooValue%', Criteria::LIKE); // WHERE hid6d LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid6d The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid6d($hid6d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid6d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID6D, $hid6d, $comparison);
    }

    /**
     * Filter the query on the hid7 column
     *
     * Example usage:
     * <code>
     * $query->filterByHid7('fooValue');   // WHERE hid7 = 'fooValue'
     * $query->filterByHid7('%fooValue%', Criteria::LIKE); // WHERE hid7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid7($hid7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID7, $hid7, $comparison);
    }

    /**
     * Filter the query on the hid7e column
     *
     * Example usage:
     * <code>
     * $query->filterByHid7e('fooValue');   // WHERE hid7e = 'fooValue'
     * $query->filterByHid7e('%fooValue%', Criteria::LIKE); // WHERE hid7e LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid7e The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid7e($hid7e = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid7e)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID7E, $hid7e, $comparison);
    }

    /**
     * Filter the query on the hid7d column
     *
     * Example usage:
     * <code>
     * $query->filterByHid7d('fooValue');   // WHERE hid7d = 'fooValue'
     * $query->filterByHid7d('%fooValue%', Criteria::LIKE); // WHERE hid7d LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hid7d The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByHid7d($hid7d = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hid7d)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_HID7D, $hid7d, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterBySignature($signature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signature)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_SIGNATURE, $signature, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_REMARKS, $remarks, $comparison);
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
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function filterByExaminationDate($examinationDate = null, $comparison = null)
    {
        if (is_array($examinationDate)) {
            $useMinMax = false;
            if (isset($examinationDate['min'])) {
                $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_EXAMINATION_DATE, $examinationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($examinationDate['max'])) {
                $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_EXAMINATION_DATE, $examinationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzEyeHistory5TableMap::COL_EXAMINATION_DATE, $examinationDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzEyeHistory5 $careTzEyeHistory5 Object to remove from the list of results
     *
     * @return $this|ChildCareTzEyeHistory5Query The current query, for fluid interface
     */
    public function prune($careTzEyeHistory5 = null)
    {
        if ($careTzEyeHistory5) {
            throw new LogicException('CareTzEyeHistory5 object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_eye_history5 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeHistory5TableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzEyeHistory5TableMap::clearInstancePool();
            CareTzEyeHistory5TableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeHistory5TableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzEyeHistory5TableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzEyeHistory5TableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzEyeHistory5TableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzEyeHistory5Query
