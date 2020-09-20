<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareDrgIntern as ChildCareDrgIntern;
use CareMd\CareMd\CareDrgInternQuery as ChildCareDrgInternQuery;
use CareMd\CareMd\Map\CareDrgInternTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_drg_intern' table.
 *
 *
 *
 * @method     ChildCareDrgInternQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareDrgInternQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareDrgInternQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareDrgInternQuery orderBySynonyms($order = Criteria::ASC) Order by the synonyms column
 * @method     ChildCareDrgInternQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareDrgInternQuery orderByStdCode($order = Criteria::ASC) Order by the std_code column
 * @method     ChildCareDrgInternQuery orderBySubLevel($order = Criteria::ASC) Order by the sub_level column
 * @method     ChildCareDrgInternQuery orderByParentCode($order = Criteria::ASC) Order by the parent_code column
 * @method     ChildCareDrgInternQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareDrgInternQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareDrgInternQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareDrgInternQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareDrgInternQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareDrgInternQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareDrgInternQuery groupByNr() Group by the nr column
 * @method     ChildCareDrgInternQuery groupByCode() Group by the code column
 * @method     ChildCareDrgInternQuery groupByDescription() Group by the description column
 * @method     ChildCareDrgInternQuery groupBySynonyms() Group by the synonyms column
 * @method     ChildCareDrgInternQuery groupByNotes() Group by the notes column
 * @method     ChildCareDrgInternQuery groupByStdCode() Group by the std_code column
 * @method     ChildCareDrgInternQuery groupBySubLevel() Group by the sub_level column
 * @method     ChildCareDrgInternQuery groupByParentCode() Group by the parent_code column
 * @method     ChildCareDrgInternQuery groupByStatus() Group by the status column
 * @method     ChildCareDrgInternQuery groupByHistory() Group by the history column
 * @method     ChildCareDrgInternQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareDrgInternQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareDrgInternQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareDrgInternQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareDrgInternQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareDrgInternQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareDrgInternQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareDrgInternQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareDrgInternQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareDrgInternQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareDrgIntern findOne(ConnectionInterface $con = null) Return the first ChildCareDrgIntern matching the query
 * @method     ChildCareDrgIntern findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareDrgIntern matching the query, or a new ChildCareDrgIntern object populated from the query conditions when no match is found
 *
 * @method     ChildCareDrgIntern findOneByNr(int $nr) Return the first ChildCareDrgIntern filtered by the nr column
 * @method     ChildCareDrgIntern findOneByCode(string $code) Return the first ChildCareDrgIntern filtered by the code column
 * @method     ChildCareDrgIntern findOneByDescription(string $description) Return the first ChildCareDrgIntern filtered by the description column
 * @method     ChildCareDrgIntern findOneBySynonyms(string $synonyms) Return the first ChildCareDrgIntern filtered by the synonyms column
 * @method     ChildCareDrgIntern findOneByNotes(string $notes) Return the first ChildCareDrgIntern filtered by the notes column
 * @method     ChildCareDrgIntern findOneByStdCode(string $std_code) Return the first ChildCareDrgIntern filtered by the std_code column
 * @method     ChildCareDrgIntern findOneBySubLevel(boolean $sub_level) Return the first ChildCareDrgIntern filtered by the sub_level column
 * @method     ChildCareDrgIntern findOneByParentCode(string $parent_code) Return the first ChildCareDrgIntern filtered by the parent_code column
 * @method     ChildCareDrgIntern findOneByStatus(string $status) Return the first ChildCareDrgIntern filtered by the status column
 * @method     ChildCareDrgIntern findOneByHistory(string $history) Return the first ChildCareDrgIntern filtered by the history column
 * @method     ChildCareDrgIntern findOneByModifyId(string $modify_id) Return the first ChildCareDrgIntern filtered by the modify_id column
 * @method     ChildCareDrgIntern findOneByModifyTime(string $modify_time) Return the first ChildCareDrgIntern filtered by the modify_time column
 * @method     ChildCareDrgIntern findOneByCreateId(string $create_id) Return the first ChildCareDrgIntern filtered by the create_id column
 * @method     ChildCareDrgIntern findOneByCreateTime(string $create_time) Return the first ChildCareDrgIntern filtered by the create_time column *

 * @method     ChildCareDrgIntern requirePk($key, ConnectionInterface $con = null) Return the ChildCareDrgIntern by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOne(ConnectionInterface $con = null) Return the first ChildCareDrgIntern matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareDrgIntern requireOneByNr(int $nr) Return the first ChildCareDrgIntern filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByCode(string $code) Return the first ChildCareDrgIntern filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByDescription(string $description) Return the first ChildCareDrgIntern filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneBySynonyms(string $synonyms) Return the first ChildCareDrgIntern filtered by the synonyms column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByNotes(string $notes) Return the first ChildCareDrgIntern filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByStdCode(string $std_code) Return the first ChildCareDrgIntern filtered by the std_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneBySubLevel(boolean $sub_level) Return the first ChildCareDrgIntern filtered by the sub_level column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByParentCode(string $parent_code) Return the first ChildCareDrgIntern filtered by the parent_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByStatus(string $status) Return the first ChildCareDrgIntern filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByHistory(string $history) Return the first ChildCareDrgIntern filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByModifyId(string $modify_id) Return the first ChildCareDrgIntern filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByModifyTime(string $modify_time) Return the first ChildCareDrgIntern filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByCreateId(string $create_id) Return the first ChildCareDrgIntern filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDrgIntern requireOneByCreateTime(string $create_time) Return the first ChildCareDrgIntern filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareDrgIntern[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareDrgIntern objects based on current ModelCriteria
 * @method     ChildCareDrgIntern[]|ObjectCollection findByNr(int $nr) Return ChildCareDrgIntern objects filtered by the nr column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByCode(string $code) Return ChildCareDrgIntern objects filtered by the code column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByDescription(string $description) Return ChildCareDrgIntern objects filtered by the description column
 * @method     ChildCareDrgIntern[]|ObjectCollection findBySynonyms(string $synonyms) Return ChildCareDrgIntern objects filtered by the synonyms column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByNotes(string $notes) Return ChildCareDrgIntern objects filtered by the notes column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByStdCode(string $std_code) Return ChildCareDrgIntern objects filtered by the std_code column
 * @method     ChildCareDrgIntern[]|ObjectCollection findBySubLevel(boolean $sub_level) Return ChildCareDrgIntern objects filtered by the sub_level column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByParentCode(string $parent_code) Return ChildCareDrgIntern objects filtered by the parent_code column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByStatus(string $status) Return ChildCareDrgIntern objects filtered by the status column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByHistory(string $history) Return ChildCareDrgIntern objects filtered by the history column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareDrgIntern objects filtered by the modify_id column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareDrgIntern objects filtered by the modify_time column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareDrgIntern objects filtered by the create_id column
 * @method     ChildCareDrgIntern[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareDrgIntern objects filtered by the create_time column
 * @method     ChildCareDrgIntern[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareDrgInternQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareDrgInternQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareDrgIntern', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareDrgInternQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareDrgInternQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareDrgInternQuery) {
            return $criteria;
        }
        $query = new ChildCareDrgInternQuery();
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
     * @return ChildCareDrgIntern|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareDrgInternTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareDrgInternTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareDrgIntern A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, code, description, synonyms, notes, std_code, sub_level, parent_code, status, history, modify_id, modify_time, create_id, create_time FROM care_drg_intern WHERE nr = :p0';
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
            /** @var ChildCareDrgIntern $obj */
            $obj = new ChildCareDrgIntern();
            $obj->hydrate($row);
            CareDrgInternTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareDrgIntern|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareDrgInternTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareDrgInternTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareDrgInternTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareDrgInternTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_CODE, $code, $comparison);
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the synonyms column
     *
     * Example usage:
     * <code>
     * $query->filterBySynonyms('fooValue');   // WHERE synonyms = 'fooValue'
     * $query->filterBySynonyms('%fooValue%', Criteria::LIKE); // WHERE synonyms LIKE '%fooValue%'
     * </code>
     *
     * @param     string $synonyms The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterBySynonyms($synonyms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($synonyms)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_SYNONYMS, $synonyms, $comparison);
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_NOTES, $notes, $comparison);
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByStdCode($stdCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stdCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_STD_CODE, $stdCode, $comparison);
    }

    /**
     * Filter the query on the sub_level column
     *
     * Example usage:
     * <code>
     * $query->filterBySubLevel(true); // WHERE sub_level = true
     * $query->filterBySubLevel('yes'); // WHERE sub_level = true
     * </code>
     *
     * @param     boolean|string $subLevel The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterBySubLevel($subLevel = null, $comparison = null)
    {
        if (is_string($subLevel)) {
            $subLevel = in_array(strtolower($subLevel), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_SUB_LEVEL, $subLevel, $comparison);
    }

    /**
     * Filter the query on the parent_code column
     *
     * Example usage:
     * <code>
     * $query->filterByParentCode('fooValue');   // WHERE parent_code = 'fooValue'
     * $query->filterByParentCode('%fooValue%', Criteria::LIKE); // WHERE parent_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parentCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByParentCode($parentCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parentCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_PARENT_CODE, $parentCode, $comparison);
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareDrgInternTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareDrgInternTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareDrgInternTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareDrgInternTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDrgInternTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareDrgIntern $careDrgIntern Object to remove from the list of results
     *
     * @return $this|ChildCareDrgInternQuery The current query, for fluid interface
     */
    public function prune($careDrgIntern = null)
    {
        if ($careDrgIntern) {
            $this->addUsingAlias(CareDrgInternTableMap::COL_NR, $careDrgIntern->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_drg_intern table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDrgInternTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareDrgInternTableMap::clearInstancePool();
            CareDrgInternTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDrgInternTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareDrgInternTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareDrgInternTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareDrgInternTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareDrgInternQuery
