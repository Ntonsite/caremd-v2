<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareDiagnosisLocalcode as ChildCareDiagnosisLocalcode;
use CareMd\CareMd\CareDiagnosisLocalcodeQuery as ChildCareDiagnosisLocalcodeQuery;
use CareMd\CareMd\Map\CareDiagnosisLocalcodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_diagnosis_localcode' table.
 *
 *
 *
 * @method     ChildCareDiagnosisLocalcodeQuery orderByLocalcode($order = Criteria::ASC) Order by the localcode column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByClassSub($order = Criteria::ASC) Order by the class_sub column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByInclusive($order = Criteria::ASC) Order by the inclusive column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByExclusive($order = Criteria::ASC) Order by the exclusive column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByStdCode($order = Criteria::ASC) Order by the std_code column
 * @method     ChildCareDiagnosisLocalcodeQuery orderBySubLevel($order = Criteria::ASC) Order by the sub_level column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByRemarks($order = Criteria::ASC) Order by the remarks column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByExtraCodes($order = Criteria::ASC) Order by the extra_codes column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByExtraSubclass($order = Criteria::ASC) Order by the extra_subclass column
 * @method     ChildCareDiagnosisLocalcodeQuery orderBySearchKeys($order = Criteria::ASC) Order by the search_keys column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByUseFrequency($order = Criteria::ASC) Order by the use_frequency column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareDiagnosisLocalcodeQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareDiagnosisLocalcodeQuery groupByLocalcode() Group by the localcode column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByDescription() Group by the description column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByClassSub() Group by the class_sub column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByType() Group by the type column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByInclusive() Group by the inclusive column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByExclusive() Group by the exclusive column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByNotes() Group by the notes column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByStdCode() Group by the std_code column
 * @method     ChildCareDiagnosisLocalcodeQuery groupBySubLevel() Group by the sub_level column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByRemarks() Group by the remarks column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByExtraCodes() Group by the extra_codes column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByExtraSubclass() Group by the extra_subclass column
 * @method     ChildCareDiagnosisLocalcodeQuery groupBySearchKeys() Group by the search_keys column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByUseFrequency() Group by the use_frequency column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByStatus() Group by the status column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByHistory() Group by the history column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareDiagnosisLocalcodeQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareDiagnosisLocalcodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareDiagnosisLocalcodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareDiagnosisLocalcodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareDiagnosisLocalcodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareDiagnosisLocalcodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareDiagnosisLocalcodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareDiagnosisLocalcode findOne(ConnectionInterface $con = null) Return the first ChildCareDiagnosisLocalcode matching the query
 * @method     ChildCareDiagnosisLocalcode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareDiagnosisLocalcode matching the query, or a new ChildCareDiagnosisLocalcode object populated from the query conditions when no match is found
 *
 * @method     ChildCareDiagnosisLocalcode findOneByLocalcode(string $localcode) Return the first ChildCareDiagnosisLocalcode filtered by the localcode column
 * @method     ChildCareDiagnosisLocalcode findOneByDescription(string $description) Return the first ChildCareDiagnosisLocalcode filtered by the description column
 * @method     ChildCareDiagnosisLocalcode findOneByClassSub(string $class_sub) Return the first ChildCareDiagnosisLocalcode filtered by the class_sub column
 * @method     ChildCareDiagnosisLocalcode findOneByType(string $type) Return the first ChildCareDiagnosisLocalcode filtered by the type column
 * @method     ChildCareDiagnosisLocalcode findOneByInclusive(string $inclusive) Return the first ChildCareDiagnosisLocalcode filtered by the inclusive column
 * @method     ChildCareDiagnosisLocalcode findOneByExclusive(string $exclusive) Return the first ChildCareDiagnosisLocalcode filtered by the exclusive column
 * @method     ChildCareDiagnosisLocalcode findOneByNotes(string $notes) Return the first ChildCareDiagnosisLocalcode filtered by the notes column
 * @method     ChildCareDiagnosisLocalcode findOneByStdCode(string $std_code) Return the first ChildCareDiagnosisLocalcode filtered by the std_code column
 * @method     ChildCareDiagnosisLocalcode findOneBySubLevel(int $sub_level) Return the first ChildCareDiagnosisLocalcode filtered by the sub_level column
 * @method     ChildCareDiagnosisLocalcode findOneByRemarks(string $remarks) Return the first ChildCareDiagnosisLocalcode filtered by the remarks column
 * @method     ChildCareDiagnosisLocalcode findOneByExtraCodes(string $extra_codes) Return the first ChildCareDiagnosisLocalcode filtered by the extra_codes column
 * @method     ChildCareDiagnosisLocalcode findOneByExtraSubclass(string $extra_subclass) Return the first ChildCareDiagnosisLocalcode filtered by the extra_subclass column
 * @method     ChildCareDiagnosisLocalcode findOneBySearchKeys(string $search_keys) Return the first ChildCareDiagnosisLocalcode filtered by the search_keys column
 * @method     ChildCareDiagnosisLocalcode findOneByUseFrequency(int $use_frequency) Return the first ChildCareDiagnosisLocalcode filtered by the use_frequency column
 * @method     ChildCareDiagnosisLocalcode findOneByStatus(string $status) Return the first ChildCareDiagnosisLocalcode filtered by the status column
 * @method     ChildCareDiagnosisLocalcode findOneByHistory(string $history) Return the first ChildCareDiagnosisLocalcode filtered by the history column
 * @method     ChildCareDiagnosisLocalcode findOneByModifyId(string $modify_id) Return the first ChildCareDiagnosisLocalcode filtered by the modify_id column
 * @method     ChildCareDiagnosisLocalcode findOneByModifyTime(string $modify_time) Return the first ChildCareDiagnosisLocalcode filtered by the modify_time column
 * @method     ChildCareDiagnosisLocalcode findOneByCreateId(string $create_id) Return the first ChildCareDiagnosisLocalcode filtered by the create_id column
 * @method     ChildCareDiagnosisLocalcode findOneByCreateTime(string $create_time) Return the first ChildCareDiagnosisLocalcode filtered by the create_time column *

 * @method     ChildCareDiagnosisLocalcode requirePk($key, ConnectionInterface $con = null) Return the ChildCareDiagnosisLocalcode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOne(ConnectionInterface $con = null) Return the first ChildCareDiagnosisLocalcode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareDiagnosisLocalcode requireOneByLocalcode(string $localcode) Return the first ChildCareDiagnosisLocalcode filtered by the localcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByDescription(string $description) Return the first ChildCareDiagnosisLocalcode filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByClassSub(string $class_sub) Return the first ChildCareDiagnosisLocalcode filtered by the class_sub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByType(string $type) Return the first ChildCareDiagnosisLocalcode filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByInclusive(string $inclusive) Return the first ChildCareDiagnosisLocalcode filtered by the inclusive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByExclusive(string $exclusive) Return the first ChildCareDiagnosisLocalcode filtered by the exclusive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByNotes(string $notes) Return the first ChildCareDiagnosisLocalcode filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByStdCode(string $std_code) Return the first ChildCareDiagnosisLocalcode filtered by the std_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneBySubLevel(int $sub_level) Return the first ChildCareDiagnosisLocalcode filtered by the sub_level column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByRemarks(string $remarks) Return the first ChildCareDiagnosisLocalcode filtered by the remarks column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByExtraCodes(string $extra_codes) Return the first ChildCareDiagnosisLocalcode filtered by the extra_codes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByExtraSubclass(string $extra_subclass) Return the first ChildCareDiagnosisLocalcode filtered by the extra_subclass column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneBySearchKeys(string $search_keys) Return the first ChildCareDiagnosisLocalcode filtered by the search_keys column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByUseFrequency(int $use_frequency) Return the first ChildCareDiagnosisLocalcode filtered by the use_frequency column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByStatus(string $status) Return the first ChildCareDiagnosisLocalcode filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByHistory(string $history) Return the first ChildCareDiagnosisLocalcode filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByModifyId(string $modify_id) Return the first ChildCareDiagnosisLocalcode filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByModifyTime(string $modify_time) Return the first ChildCareDiagnosisLocalcode filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByCreateId(string $create_id) Return the first ChildCareDiagnosisLocalcode filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDiagnosisLocalcode requireOneByCreateTime(string $create_time) Return the first ChildCareDiagnosisLocalcode filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareDiagnosisLocalcode objects based on current ModelCriteria
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByLocalcode(string $localcode) Return ChildCareDiagnosisLocalcode objects filtered by the localcode column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByDescription(string $description) Return ChildCareDiagnosisLocalcode objects filtered by the description column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByClassSub(string $class_sub) Return ChildCareDiagnosisLocalcode objects filtered by the class_sub column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByType(string $type) Return ChildCareDiagnosisLocalcode objects filtered by the type column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByInclusive(string $inclusive) Return ChildCareDiagnosisLocalcode objects filtered by the inclusive column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByExclusive(string $exclusive) Return ChildCareDiagnosisLocalcode objects filtered by the exclusive column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByNotes(string $notes) Return ChildCareDiagnosisLocalcode objects filtered by the notes column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByStdCode(string $std_code) Return ChildCareDiagnosisLocalcode objects filtered by the std_code column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findBySubLevel(int $sub_level) Return ChildCareDiagnosisLocalcode objects filtered by the sub_level column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByRemarks(string $remarks) Return ChildCareDiagnosisLocalcode objects filtered by the remarks column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByExtraCodes(string $extra_codes) Return ChildCareDiagnosisLocalcode objects filtered by the extra_codes column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByExtraSubclass(string $extra_subclass) Return ChildCareDiagnosisLocalcode objects filtered by the extra_subclass column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findBySearchKeys(string $search_keys) Return ChildCareDiagnosisLocalcode objects filtered by the search_keys column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByUseFrequency(int $use_frequency) Return ChildCareDiagnosisLocalcode objects filtered by the use_frequency column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByStatus(string $status) Return ChildCareDiagnosisLocalcode objects filtered by the status column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByHistory(string $history) Return ChildCareDiagnosisLocalcode objects filtered by the history column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareDiagnosisLocalcode objects filtered by the modify_id column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareDiagnosisLocalcode objects filtered by the modify_time column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareDiagnosisLocalcode objects filtered by the create_id column
 * @method     ChildCareDiagnosisLocalcode[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareDiagnosisLocalcode objects filtered by the create_time column
 * @method     ChildCareDiagnosisLocalcode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareDiagnosisLocalcodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareDiagnosisLocalcodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareDiagnosisLocalcode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareDiagnosisLocalcodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareDiagnosisLocalcodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareDiagnosisLocalcodeQuery) {
            return $criteria;
        }
        $query = new ChildCareDiagnosisLocalcodeQuery();
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
     * @return ChildCareDiagnosisLocalcode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareDiagnosisLocalcodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareDiagnosisLocalcode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT localcode, description, class_sub, type, inclusive, exclusive, notes, std_code, sub_level, remarks, extra_codes, extra_subclass, search_keys, use_frequency, status, history, modify_id, modify_time, create_id, create_time FROM care_diagnosis_localcode WHERE localcode = :p0';
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
            /** @var ChildCareDiagnosisLocalcode $obj */
            $obj = new ChildCareDiagnosisLocalcode();
            $obj->hydrate($row);
            CareDiagnosisLocalcodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareDiagnosisLocalcode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the localcode column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalcode('fooValue');   // WHERE localcode = 'fooValue'
     * $query->filterByLocalcode('%fooValue%', Criteria::LIKE); // WHERE localcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByLocalcode($localcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE, $localcode, $comparison);
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
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the class_sub column
     *
     * Example usage:
     * <code>
     * $query->filterByClassSub('fooValue');   // WHERE class_sub = 'fooValue'
     * $query->filterByClassSub('%fooValue%', Criteria::LIKE); // WHERE class_sub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $classSub The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByClassSub($classSub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($classSub)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_CLASS_SUB, $classSub, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%', Criteria::LIKE); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the inclusive column
     *
     * Example usage:
     * <code>
     * $query->filterByInclusive('fooValue');   // WHERE inclusive = 'fooValue'
     * $query->filterByInclusive('%fooValue%', Criteria::LIKE); // WHERE inclusive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inclusive The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByInclusive($inclusive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inclusive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_INCLUSIVE, $inclusive, $comparison);
    }

    /**
     * Filter the query on the exclusive column
     *
     * Example usage:
     * <code>
     * $query->filterByExclusive('fooValue');   // WHERE exclusive = 'fooValue'
     * $query->filterByExclusive('%fooValue%', Criteria::LIKE); // WHERE exclusive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exclusive The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByExclusive($exclusive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exclusive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_EXCLUSIVE, $exclusive, $comparison);
    }

    /**
     * Filter the query on the notes column
     *
     * Example usage:
     * <code>
     * $query->filterByNotes('fooValue');   // WHERE notes = 'fooValue'
     * $query->filterByNotes('%fooValue%', Criteria::LIKE); // WHERE notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the std_code column
     *
     * Example usage:
     * <code>
     * $query->filterByStdCode('fooValue');   // WHERE std_code = 'fooValue'
     * $query->filterByStdCode('%fooValue%', Criteria::LIKE); // WHERE std_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stdCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByStdCode($stdCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stdCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_STD_CODE, $stdCode, $comparison);
    }

    /**
     * Filter the query on the sub_level column
     *
     * Example usage:
     * <code>
     * $query->filterBySubLevel(1234); // WHERE sub_level = 1234
     * $query->filterBySubLevel(array(12, 34)); // WHERE sub_level IN (12, 34)
     * $query->filterBySubLevel(array('min' => 12)); // WHERE sub_level > 12
     * </code>
     *
     * @param     mixed $subLevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterBySubLevel($subLevel = null, $comparison = null)
    {
        if (is_array($subLevel)) {
            $useMinMax = false;
            if (isset($subLevel['min'])) {
                $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_SUB_LEVEL, $subLevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subLevel['max'])) {
                $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_SUB_LEVEL, $subLevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_SUB_LEVEL, $subLevel, $comparison);
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
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the extra_codes column
     *
     * Example usage:
     * <code>
     * $query->filterByExtraCodes('fooValue');   // WHERE extra_codes = 'fooValue'
     * $query->filterByExtraCodes('%fooValue%', Criteria::LIKE); // WHERE extra_codes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extraCodes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByExtraCodes($extraCodes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraCodes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_EXTRA_CODES, $extraCodes, $comparison);
    }

    /**
     * Filter the query on the extra_subclass column
     *
     * Example usage:
     * <code>
     * $query->filterByExtraSubclass('fooValue');   // WHERE extra_subclass = 'fooValue'
     * $query->filterByExtraSubclass('%fooValue%', Criteria::LIKE); // WHERE extra_subclass LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extraSubclass The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByExtraSubclass($extraSubclass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraSubclass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_EXTRA_SUBCLASS, $extraSubclass, $comparison);
    }

    /**
     * Filter the query on the search_keys column
     *
     * Example usage:
     * <code>
     * $query->filterBySearchKeys('fooValue');   // WHERE search_keys = 'fooValue'
     * $query->filterBySearchKeys('%fooValue%', Criteria::LIKE); // WHERE search_keys LIKE '%fooValue%'
     * </code>
     *
     * @param     string $searchKeys The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterBySearchKeys($searchKeys = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($searchKeys)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_SEARCH_KEYS, $searchKeys, $comparison);
    }

    /**
     * Filter the query on the use_frequency column
     *
     * Example usage:
     * <code>
     * $query->filterByUseFrequency(1234); // WHERE use_frequency = 1234
     * $query->filterByUseFrequency(array(12, 34)); // WHERE use_frequency IN (12, 34)
     * $query->filterByUseFrequency(array('min' => 12)); // WHERE use_frequency > 12
     * </code>
     *
     * @param     mixed $useFrequency The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByUseFrequency($useFrequency = null, $comparison = null)
    {
        if (is_array($useFrequency)) {
            $useMinMax = false;
            if (isset($useFrequency['min'])) {
                $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_USE_FREQUENCY, $useFrequency['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($useFrequency['max'])) {
                $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_USE_FREQUENCY, $useFrequency['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_USE_FREQUENCY, $useFrequency, $comparison);
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
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareDiagnosisLocalcode $careDiagnosisLocalcode Object to remove from the list of results
     *
     * @return $this|ChildCareDiagnosisLocalcodeQuery The current query, for fluid interface
     */
    public function prune($careDiagnosisLocalcode = null)
    {
        if ($careDiagnosisLocalcode) {
            $this->addUsingAlias(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE, $careDiagnosisLocalcode->getLocalcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_diagnosis_localcode table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareDiagnosisLocalcodeTableMap::clearInstancePool();
            CareDiagnosisLocalcodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareDiagnosisLocalcodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareDiagnosisLocalcodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareDiagnosisLocalcodeQuery
