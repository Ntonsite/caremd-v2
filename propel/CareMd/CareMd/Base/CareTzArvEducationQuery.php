<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvEducation as ChildCareTzArvEducation;
use CareMd\CareMd\CareTzArvEducationQuery as ChildCareTzArvEducationQuery;
use CareMd\CareMd\Map\CareTzArvEducationTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_education' table.
 *
 *
 *
 * @method     ChildCareTzArvEducationQuery orderByCareTzArvEducationId($order = Criteria::ASC) Order by the care_tz_arv_education_id column
 * @method     ChildCareTzArvEducationQuery orderByCareTzArvEducationTopicId($order = Criteria::ASC) Order by the care_tz_arv_education_topic_id column
 * @method     ChildCareTzArvEducationQuery orderByCareTzArvRegistrationId($order = Criteria::ASC) Order by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvEducationQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     ChildCareTzArvEducationQuery orderByCommentDate($order = Criteria::ASC) Order by the comment_date column
 * @method     ChildCareTzArvEducationQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTzArvEducationQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTzArvEducationQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTzArvEducationQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTzArvEducationQuery orderByCareTzArvEducationGroupId($order = Criteria::ASC) Order by the care_tz_arv_education_group_id column
 *
 * @method     ChildCareTzArvEducationQuery groupByCareTzArvEducationId() Group by the care_tz_arv_education_id column
 * @method     ChildCareTzArvEducationQuery groupByCareTzArvEducationTopicId() Group by the care_tz_arv_education_topic_id column
 * @method     ChildCareTzArvEducationQuery groupByCareTzArvRegistrationId() Group by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvEducationQuery groupByComment() Group by the comment column
 * @method     ChildCareTzArvEducationQuery groupByCommentDate() Group by the comment_date column
 * @method     ChildCareTzArvEducationQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTzArvEducationQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTzArvEducationQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTzArvEducationQuery groupByHistory() Group by the history column
 * @method     ChildCareTzArvEducationQuery groupByCareTzArvEducationGroupId() Group by the care_tz_arv_education_group_id column
 *
 * @method     ChildCareTzArvEducationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvEducationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvEducationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvEducationQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvEducationQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvEducationQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvEducation findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvEducation matching the query
 * @method     ChildCareTzArvEducation findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvEducation matching the query, or a new ChildCareTzArvEducation object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvEducation findOneByCareTzArvEducationId(int $care_tz_arv_education_id) Return the first ChildCareTzArvEducation filtered by the care_tz_arv_education_id column
 * @method     ChildCareTzArvEducation findOneByCareTzArvEducationTopicId(string $care_tz_arv_education_topic_id) Return the first ChildCareTzArvEducation filtered by the care_tz_arv_education_topic_id column
 * @method     ChildCareTzArvEducation findOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvEducation filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvEducation findOneByComment(string $comment) Return the first ChildCareTzArvEducation filtered by the comment column
 * @method     ChildCareTzArvEducation findOneByCommentDate(string $comment_date) Return the first ChildCareTzArvEducation filtered by the comment_date column
 * @method     ChildCareTzArvEducation findOneByCreateId(string $create_id) Return the first ChildCareTzArvEducation filtered by the create_id column
 * @method     ChildCareTzArvEducation findOneByModifyId(string $modify_id) Return the first ChildCareTzArvEducation filtered by the modify_id column
 * @method     ChildCareTzArvEducation findOneByModifyTime(string $modify_time) Return the first ChildCareTzArvEducation filtered by the modify_time column
 * @method     ChildCareTzArvEducation findOneByHistory(string $history) Return the first ChildCareTzArvEducation filtered by the history column
 * @method     ChildCareTzArvEducation findOneByCareTzArvEducationGroupId(int $care_tz_arv_education_group_id) Return the first ChildCareTzArvEducation filtered by the care_tz_arv_education_group_id column *

 * @method     ChildCareTzArvEducation requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvEducation by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEducation requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvEducation matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvEducation requireOneByCareTzArvEducationId(int $care_tz_arv_education_id) Return the first ChildCareTzArvEducation filtered by the care_tz_arv_education_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEducation requireOneByCareTzArvEducationTopicId(string $care_tz_arv_education_topic_id) Return the first ChildCareTzArvEducation filtered by the care_tz_arv_education_topic_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEducation requireOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvEducation filtered by the care_tz_arv_registration_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEducation requireOneByComment(string $comment) Return the first ChildCareTzArvEducation filtered by the comment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEducation requireOneByCommentDate(string $comment_date) Return the first ChildCareTzArvEducation filtered by the comment_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEducation requireOneByCreateId(string $create_id) Return the first ChildCareTzArvEducation filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEducation requireOneByModifyId(string $modify_id) Return the first ChildCareTzArvEducation filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEducation requireOneByModifyTime(string $modify_time) Return the first ChildCareTzArvEducation filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEducation requireOneByHistory(string $history) Return the first ChildCareTzArvEducation filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEducation requireOneByCareTzArvEducationGroupId(int $care_tz_arv_education_group_id) Return the first ChildCareTzArvEducation filtered by the care_tz_arv_education_group_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvEducation[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvEducation objects based on current ModelCriteria
 * @method     ChildCareTzArvEducation[]|ObjectCollection findByCareTzArvEducationId(int $care_tz_arv_education_id) Return ChildCareTzArvEducation objects filtered by the care_tz_arv_education_id column
 * @method     ChildCareTzArvEducation[]|ObjectCollection findByCareTzArvEducationTopicId(string $care_tz_arv_education_topic_id) Return ChildCareTzArvEducation objects filtered by the care_tz_arv_education_topic_id column
 * @method     ChildCareTzArvEducation[]|ObjectCollection findByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return ChildCareTzArvEducation objects filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvEducation[]|ObjectCollection findByComment(string $comment) Return ChildCareTzArvEducation objects filtered by the comment column
 * @method     ChildCareTzArvEducation[]|ObjectCollection findByCommentDate(string $comment_date) Return ChildCareTzArvEducation objects filtered by the comment_date column
 * @method     ChildCareTzArvEducation[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTzArvEducation objects filtered by the create_id column
 * @method     ChildCareTzArvEducation[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTzArvEducation objects filtered by the modify_id column
 * @method     ChildCareTzArvEducation[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTzArvEducation objects filtered by the modify_time column
 * @method     ChildCareTzArvEducation[]|ObjectCollection findByHistory(string $history) Return ChildCareTzArvEducation objects filtered by the history column
 * @method     ChildCareTzArvEducation[]|ObjectCollection findByCareTzArvEducationGroupId(int $care_tz_arv_education_group_id) Return ChildCareTzArvEducation objects filtered by the care_tz_arv_education_group_id column
 * @method     ChildCareTzArvEducation[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvEducationQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvEducationQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvEducation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvEducationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvEducationQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvEducationQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvEducationQuery();
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
     * @return ChildCareTzArvEducation|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvEducationTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvEducationTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvEducation A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_education_id, care_tz_arv_education_topic_id, care_tz_arv_registration_id, comment, comment_date, create_id, modify_id, modify_time, history, care_tz_arv_education_group_id FROM care_tz_arv_education WHERE care_tz_arv_education_id = :p0';
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
            /** @var ChildCareTzArvEducation $obj */
            $obj = new ChildCareTzArvEducation();
            $obj->hydrate($row);
            CareTzArvEducationTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvEducation|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_education_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvEducationId(1234); // WHERE care_tz_arv_education_id = 1234
     * $query->filterByCareTzArvEducationId(array(12, 34)); // WHERE care_tz_arv_education_id IN (12, 34)
     * $query->filterByCareTzArvEducationId(array('min' => 12)); // WHERE care_tz_arv_education_id > 12
     * </code>
     *
     * @param     mixed $careTzArvEducationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByCareTzArvEducationId($careTzArvEducationId = null, $comparison = null)
    {
        if (is_array($careTzArvEducationId)) {
            $useMinMax = false;
            if (isset($careTzArvEducationId['min'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID, $careTzArvEducationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvEducationId['max'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID, $careTzArvEducationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID, $careTzArvEducationId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_education_topic_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvEducationTopicId(1234); // WHERE care_tz_arv_education_topic_id = 1234
     * $query->filterByCareTzArvEducationTopicId(array(12, 34)); // WHERE care_tz_arv_education_topic_id IN (12, 34)
     * $query->filterByCareTzArvEducationTopicId(array('min' => 12)); // WHERE care_tz_arv_education_topic_id > 12
     * </code>
     *
     * @param     mixed $careTzArvEducationTopicId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByCareTzArvEducationTopicId($careTzArvEducationTopicId = null, $comparison = null)
    {
        if (is_array($careTzArvEducationTopicId)) {
            $useMinMax = false;
            if (isset($careTzArvEducationTopicId['min'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_TOPIC_ID, $careTzArvEducationTopicId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvEducationTopicId['max'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_TOPIC_ID, $careTzArvEducationTopicId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_TOPIC_ID, $careTzArvEducationTopicId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_registration_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvRegistrationId(1234); // WHERE care_tz_arv_registration_id = 1234
     * $query->filterByCareTzArvRegistrationId(array(12, 34)); // WHERE care_tz_arv_registration_id IN (12, 34)
     * $query->filterByCareTzArvRegistrationId(array('min' => 12)); // WHERE care_tz_arv_registration_id > 12
     * </code>
     *
     * @param     mixed $careTzArvRegistrationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegistrationId($careTzArvRegistrationId = null, $comparison = null)
    {
        if (is_array($careTzArvRegistrationId)) {
            $useMinMax = false;
            if (isset($careTzArvRegistrationId['min'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegistrationId['max'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId, $comparison);
    }

    /**
     * Filter the query on the comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE comment = 'fooValue'
     * $query->filterByComment('%fooValue%', Criteria::LIKE); // WHERE comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the comment_date column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentDate('2011-03-14'); // WHERE comment_date = '2011-03-14'
     * $query->filterByCommentDate('now'); // WHERE comment_date = '2011-03-14'
     * $query->filterByCommentDate(array('max' => 'yesterday')); // WHERE comment_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $commentDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByCommentDate($commentDate = null, $comparison = null)
    {
        if (is_array($commentDate)) {
            $useMinMax = false;
            if (isset($commentDate['min'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_COMMENT_DATE, $commentDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentDate['max'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_COMMENT_DATE, $commentDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_COMMENT_DATE, $commentDate, $comparison);
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
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_education_group_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvEducationGroupId(1234); // WHERE care_tz_arv_education_group_id = 1234
     * $query->filterByCareTzArvEducationGroupId(array(12, 34)); // WHERE care_tz_arv_education_group_id IN (12, 34)
     * $query->filterByCareTzArvEducationGroupId(array('min' => 12)); // WHERE care_tz_arv_education_group_id > 12
     * </code>
     *
     * @param     mixed $careTzArvEducationGroupId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function filterByCareTzArvEducationGroupId($careTzArvEducationGroupId = null, $comparison = null)
    {
        if (is_array($careTzArvEducationGroupId)) {
            $useMinMax = false;
            if (isset($careTzArvEducationGroupId['min'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_GROUP_ID, $careTzArvEducationGroupId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvEducationGroupId['max'])) {
                $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_GROUP_ID, $careTzArvEducationGroupId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_GROUP_ID, $careTzArvEducationGroupId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvEducation $careTzArvEducation Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvEducationQuery The current query, for fluid interface
     */
    public function prune($careTzArvEducation = null)
    {
        if ($careTzArvEducation) {
            $this->addUsingAlias(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID, $careTzArvEducation->getCareTzArvEducationId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_education table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvEducationTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvEducationTableMap::clearInstancePool();
            CareTzArvEducationTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvEducationTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvEducationTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvEducationTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvEducationTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvEducationQuery
