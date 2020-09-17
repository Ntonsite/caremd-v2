<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTechQuestions as ChildCareTechQuestions;
use CareMd\CareMd\CareTechQuestionsQuery as ChildCareTechQuestionsQuery;
use CareMd\CareMd\Map\CareTechQuestionsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tech_questions' table.
 *
 *
 *
 * @method     ChildCareTechQuestionsQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTechQuestionsQuery orderByDept($order = Criteria::ASC) Order by the dept column
 * @method     ChildCareTechQuestionsQuery orderByQuery($order = Criteria::ASC) Order by the query column
 * @method     ChildCareTechQuestionsQuery orderByInquirer($order = Criteria::ASC) Order by the inquirer column
 * @method     ChildCareTechQuestionsQuery orderByTphone($order = Criteria::ASC) Order by the tphone column
 * @method     ChildCareTechQuestionsQuery orderByTdate($order = Criteria::ASC) Order by the tdate column
 * @method     ChildCareTechQuestionsQuery orderByTtime($order = Criteria::ASC) Order by the ttime column
 * @method     ChildCareTechQuestionsQuery orderByTid($order = Criteria::ASC) Order by the tid column
 * @method     ChildCareTechQuestionsQuery orderByReply($order = Criteria::ASC) Order by the reply column
 * @method     ChildCareTechQuestionsQuery orderByAnswered($order = Criteria::ASC) Order by the answered column
 * @method     ChildCareTechQuestionsQuery orderByAnsby($order = Criteria::ASC) Order by the ansby column
 * @method     ChildCareTechQuestionsQuery orderByAstamp($order = Criteria::ASC) Order by the astamp column
 * @method     ChildCareTechQuestionsQuery orderByArchive($order = Criteria::ASC) Order by the archive column
 * @method     ChildCareTechQuestionsQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTechQuestionsQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTechQuestionsQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTechQuestionsQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTechQuestionsQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTechQuestionsQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTechQuestionsQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTechQuestionsQuery groupByDept() Group by the dept column
 * @method     ChildCareTechQuestionsQuery groupByQuery() Group by the query column
 * @method     ChildCareTechQuestionsQuery groupByInquirer() Group by the inquirer column
 * @method     ChildCareTechQuestionsQuery groupByTphone() Group by the tphone column
 * @method     ChildCareTechQuestionsQuery groupByTdate() Group by the tdate column
 * @method     ChildCareTechQuestionsQuery groupByTtime() Group by the ttime column
 * @method     ChildCareTechQuestionsQuery groupByTid() Group by the tid column
 * @method     ChildCareTechQuestionsQuery groupByReply() Group by the reply column
 * @method     ChildCareTechQuestionsQuery groupByAnswered() Group by the answered column
 * @method     ChildCareTechQuestionsQuery groupByAnsby() Group by the ansby column
 * @method     ChildCareTechQuestionsQuery groupByAstamp() Group by the astamp column
 * @method     ChildCareTechQuestionsQuery groupByArchive() Group by the archive column
 * @method     ChildCareTechQuestionsQuery groupByStatus() Group by the status column
 * @method     ChildCareTechQuestionsQuery groupByHistory() Group by the history column
 * @method     ChildCareTechQuestionsQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTechQuestionsQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTechQuestionsQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTechQuestionsQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTechQuestionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTechQuestionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTechQuestionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTechQuestionsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTechQuestionsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTechQuestionsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTechQuestions findOne(ConnectionInterface $con = null) Return the first ChildCareTechQuestions matching the query
 * @method     ChildCareTechQuestions findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTechQuestions matching the query, or a new ChildCareTechQuestions object populated from the query conditions when no match is found
 *
 * @method     ChildCareTechQuestions findOneByBatchNr(int $batch_nr) Return the first ChildCareTechQuestions filtered by the batch_nr column
 * @method     ChildCareTechQuestions findOneByDept(string $dept) Return the first ChildCareTechQuestions filtered by the dept column
 * @method     ChildCareTechQuestions findOneByQuery(string $query) Return the first ChildCareTechQuestions filtered by the query column
 * @method     ChildCareTechQuestions findOneByInquirer(string $inquirer) Return the first ChildCareTechQuestions filtered by the inquirer column
 * @method     ChildCareTechQuestions findOneByTphone(string $tphone) Return the first ChildCareTechQuestions filtered by the tphone column
 * @method     ChildCareTechQuestions findOneByTdate(string $tdate) Return the first ChildCareTechQuestions filtered by the tdate column
 * @method     ChildCareTechQuestions findOneByTtime(string $ttime) Return the first ChildCareTechQuestions filtered by the ttime column
 * @method     ChildCareTechQuestions findOneByTid(string $tid) Return the first ChildCareTechQuestions filtered by the tid column
 * @method     ChildCareTechQuestions findOneByReply(string $reply) Return the first ChildCareTechQuestions filtered by the reply column
 * @method     ChildCareTechQuestions findOneByAnswered(boolean $answered) Return the first ChildCareTechQuestions filtered by the answered column
 * @method     ChildCareTechQuestions findOneByAnsby(string $ansby) Return the first ChildCareTechQuestions filtered by the ansby column
 * @method     ChildCareTechQuestions findOneByAstamp(string $astamp) Return the first ChildCareTechQuestions filtered by the astamp column
 * @method     ChildCareTechQuestions findOneByArchive(boolean $archive) Return the first ChildCareTechQuestions filtered by the archive column
 * @method     ChildCareTechQuestions findOneByStatus(string $status) Return the first ChildCareTechQuestions filtered by the status column
 * @method     ChildCareTechQuestions findOneByHistory(string $history) Return the first ChildCareTechQuestions filtered by the history column
 * @method     ChildCareTechQuestions findOneByModifyId(string $modify_id) Return the first ChildCareTechQuestions filtered by the modify_id column
 * @method     ChildCareTechQuestions findOneByModifyTime(string $modify_time) Return the first ChildCareTechQuestions filtered by the modify_time column
 * @method     ChildCareTechQuestions findOneByCreateId(string $create_id) Return the first ChildCareTechQuestions filtered by the create_id column
 * @method     ChildCareTechQuestions findOneByCreateTime(string $create_time) Return the first ChildCareTechQuestions filtered by the create_time column *

 * @method     ChildCareTechQuestions requirePk($key, ConnectionInterface $con = null) Return the ChildCareTechQuestions by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOne(ConnectionInterface $con = null) Return the first ChildCareTechQuestions matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTechQuestions requireOneByBatchNr(int $batch_nr) Return the first ChildCareTechQuestions filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByDept(string $dept) Return the first ChildCareTechQuestions filtered by the dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByQuery(string $query) Return the first ChildCareTechQuestions filtered by the query column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByInquirer(string $inquirer) Return the first ChildCareTechQuestions filtered by the inquirer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByTphone(string $tphone) Return the first ChildCareTechQuestions filtered by the tphone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByTdate(string $tdate) Return the first ChildCareTechQuestions filtered by the tdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByTtime(string $ttime) Return the first ChildCareTechQuestions filtered by the ttime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByTid(string $tid) Return the first ChildCareTechQuestions filtered by the tid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByReply(string $reply) Return the first ChildCareTechQuestions filtered by the reply column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByAnswered(boolean $answered) Return the first ChildCareTechQuestions filtered by the answered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByAnsby(string $ansby) Return the first ChildCareTechQuestions filtered by the ansby column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByAstamp(string $astamp) Return the first ChildCareTechQuestions filtered by the astamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByArchive(boolean $archive) Return the first ChildCareTechQuestions filtered by the archive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByStatus(string $status) Return the first ChildCareTechQuestions filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByHistory(string $history) Return the first ChildCareTechQuestions filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByModifyId(string $modify_id) Return the first ChildCareTechQuestions filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByModifyTime(string $modify_time) Return the first ChildCareTechQuestions filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByCreateId(string $create_id) Return the first ChildCareTechQuestions filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTechQuestions requireOneByCreateTime(string $create_time) Return the first ChildCareTechQuestions filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTechQuestions[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTechQuestions objects based on current ModelCriteria
 * @method     ChildCareTechQuestions[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTechQuestions objects filtered by the batch_nr column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByDept(string $dept) Return ChildCareTechQuestions objects filtered by the dept column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByQuery(string $query) Return ChildCareTechQuestions objects filtered by the query column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByInquirer(string $inquirer) Return ChildCareTechQuestions objects filtered by the inquirer column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByTphone(string $tphone) Return ChildCareTechQuestions objects filtered by the tphone column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByTdate(string $tdate) Return ChildCareTechQuestions objects filtered by the tdate column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByTtime(string $ttime) Return ChildCareTechQuestions objects filtered by the ttime column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByTid(string $tid) Return ChildCareTechQuestions objects filtered by the tid column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByReply(string $reply) Return ChildCareTechQuestions objects filtered by the reply column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByAnswered(boolean $answered) Return ChildCareTechQuestions objects filtered by the answered column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByAnsby(string $ansby) Return ChildCareTechQuestions objects filtered by the ansby column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByAstamp(string $astamp) Return ChildCareTechQuestions objects filtered by the astamp column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByArchive(boolean $archive) Return ChildCareTechQuestions objects filtered by the archive column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByStatus(string $status) Return ChildCareTechQuestions objects filtered by the status column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByHistory(string $history) Return ChildCareTechQuestions objects filtered by the history column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTechQuestions objects filtered by the modify_id column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTechQuestions objects filtered by the modify_time column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTechQuestions objects filtered by the create_id column
 * @method     ChildCareTechQuestions[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTechQuestions objects filtered by the create_time column
 * @method     ChildCareTechQuestions[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTechQuestionsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTechQuestionsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTechQuestions', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTechQuestionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTechQuestionsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTechQuestionsQuery) {
            return $criteria;
        }
        $query = new ChildCareTechQuestionsQuery();
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
     * @return ChildCareTechQuestions|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTechQuestionsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTechQuestionsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTechQuestions A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, dept, query, inquirer, tphone, tdate, ttime, tid, reply, answered, ansby, astamp, archive, status, history, modify_id, modify_time, create_id, create_time FROM care_tech_questions WHERE batch_nr = :p0';
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
            /** @var ChildCareTechQuestions $obj */
            $obj = new ChildCareTechQuestions();
            $obj->hydrate($row);
            CareTechQuestionsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTechQuestions|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_BATCH_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_BATCH_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the batch_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByBatchNr(1234); // WHERE batch_nr = 1234
     * $query->filterByBatchNr(array(12, 34)); // WHERE batch_nr IN (12, 34)
     * $query->filterByBatchNr(array('min' => 12)); // WHERE batch_nr > 12
     * </code>
     *
     * @param     mixed $batchNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_BATCH_NR, $batchNr, $comparison);
    }

    /**
     * Filter the query on the dept column
     *
     * Example usage:
     * <code>
     * $query->filterByDept('fooValue');   // WHERE dept = 'fooValue'
     * $query->filterByDept('%fooValue%', Criteria::LIKE); // WHERE dept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dept The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByDept($dept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_DEPT, $dept, $comparison);
    }

    /**
     * Filter the query on the query column
     *
     * Example usage:
     * <code>
     * $query->filterByQuery('fooValue');   // WHERE query = 'fooValue'
     * $query->filterByQuery('%fooValue%', Criteria::LIKE); // WHERE query LIKE '%fooValue%'
     * </code>
     *
     * @param     string $query The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByQuery($query = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($query)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_QUERY, $query, $comparison);
    }

    /**
     * Filter the query on the inquirer column
     *
     * Example usage:
     * <code>
     * $query->filterByInquirer('fooValue');   // WHERE inquirer = 'fooValue'
     * $query->filterByInquirer('%fooValue%', Criteria::LIKE); // WHERE inquirer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inquirer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByInquirer($inquirer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inquirer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_INQUIRER, $inquirer, $comparison);
    }

    /**
     * Filter the query on the tphone column
     *
     * Example usage:
     * <code>
     * $query->filterByTphone('fooValue');   // WHERE tphone = 'fooValue'
     * $query->filterByTphone('%fooValue%', Criteria::LIKE); // WHERE tphone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tphone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByTphone($tphone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tphone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_TPHONE, $tphone, $comparison);
    }

    /**
     * Filter the query on the tdate column
     *
     * Example usage:
     * <code>
     * $query->filterByTdate('2011-03-14'); // WHERE tdate = '2011-03-14'
     * $query->filterByTdate('now'); // WHERE tdate = '2011-03-14'
     * $query->filterByTdate(array('max' => 'yesterday')); // WHERE tdate > '2011-03-13'
     * </code>
     *
     * @param     mixed $tdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByTdate($tdate = null, $comparison = null)
    {
        if (is_array($tdate)) {
            $useMinMax = false;
            if (isset($tdate['min'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_TDATE, $tdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tdate['max'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_TDATE, $tdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_TDATE, $tdate, $comparison);
    }

    /**
     * Filter the query on the ttime column
     *
     * Example usage:
     * <code>
     * $query->filterByTtime('2011-03-14'); // WHERE ttime = '2011-03-14'
     * $query->filterByTtime('now'); // WHERE ttime = '2011-03-14'
     * $query->filterByTtime(array('max' => 'yesterday')); // WHERE ttime > '2011-03-13'
     * </code>
     *
     * @param     mixed $ttime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByTtime($ttime = null, $comparison = null)
    {
        if (is_array($ttime)) {
            $useMinMax = false;
            if (isset($ttime['min'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_TTIME, $ttime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ttime['max'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_TTIME, $ttime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_TTIME, $ttime, $comparison);
    }

    /**
     * Filter the query on the tid column
     *
     * Example usage:
     * <code>
     * $query->filterByTid('2011-03-14'); // WHERE tid = '2011-03-14'
     * $query->filterByTid('now'); // WHERE tid = '2011-03-14'
     * $query->filterByTid(array('max' => 'yesterday')); // WHERE tid > '2011-03-13'
     * </code>
     *
     * @param     mixed $tid The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByTid($tid = null, $comparison = null)
    {
        if (is_array($tid)) {
            $useMinMax = false;
            if (isset($tid['min'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_TID, $tid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tid['max'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_TID, $tid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_TID, $tid, $comparison);
    }

    /**
     * Filter the query on the reply column
     *
     * Example usage:
     * <code>
     * $query->filterByReply('fooValue');   // WHERE reply = 'fooValue'
     * $query->filterByReply('%fooValue%', Criteria::LIKE); // WHERE reply LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reply The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByReply($reply = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reply)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_REPLY, $reply, $comparison);
    }

    /**
     * Filter the query on the answered column
     *
     * Example usage:
     * <code>
     * $query->filterByAnswered(true); // WHERE answered = true
     * $query->filterByAnswered('yes'); // WHERE answered = true
     * </code>
     *
     * @param     boolean|string $answered The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByAnswered($answered = null, $comparison = null)
    {
        if (is_string($answered)) {
            $answered = in_array(strtolower($answered), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_ANSWERED, $answered, $comparison);
    }

    /**
     * Filter the query on the ansby column
     *
     * Example usage:
     * <code>
     * $query->filterByAnsby('fooValue');   // WHERE ansby = 'fooValue'
     * $query->filterByAnsby('%fooValue%', Criteria::LIKE); // WHERE ansby LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ansby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByAnsby($ansby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ansby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_ANSBY, $ansby, $comparison);
    }

    /**
     * Filter the query on the astamp column
     *
     * Example usage:
     * <code>
     * $query->filterByAstamp('fooValue');   // WHERE astamp = 'fooValue'
     * $query->filterByAstamp('%fooValue%', Criteria::LIKE); // WHERE astamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $astamp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByAstamp($astamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($astamp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_ASTAMP, $astamp, $comparison);
    }

    /**
     * Filter the query on the archive column
     *
     * Example usage:
     * <code>
     * $query->filterByArchive(true); // WHERE archive = true
     * $query->filterByArchive('yes'); // WHERE archive = true
     * </code>
     *
     * @param     boolean|string $archive The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByArchive($archive = null, $comparison = null)
    {
        if (is_string($archive)) {
            $archive = in_array(strtolower($archive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_ARCHIVE, $archive, $comparison);
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
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTechQuestionsTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTechQuestionsTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTechQuestions $careTechQuestions Object to remove from the list of results
     *
     * @return $this|ChildCareTechQuestionsQuery The current query, for fluid interface
     */
    public function prune($careTechQuestions = null)
    {
        if ($careTechQuestions) {
            $this->addUsingAlias(CareTechQuestionsTableMap::COL_BATCH_NR, $careTechQuestions->getBatchNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tech_questions table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechQuestionsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTechQuestionsTableMap::clearInstancePool();
            CareTechQuestionsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechQuestionsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTechQuestionsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTechQuestionsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTechQuestionsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTechQuestionsQuery
