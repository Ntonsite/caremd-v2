<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareIcd10Bs as ChildCareIcd10Bs;
use CareMd\CareMd\CareIcd10BsQuery as ChildCareIcd10BsQuery;
use CareMd\CareMd\Map\CareIcd10BsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_icd10_bs' table.
 *
 *
 *
 * @method     ChildCareIcd10BsQuery orderByDiagnosisCode($order = Criteria::ASC) Order by the diagnosis_code column
 * @method     ChildCareIcd10BsQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareIcd10BsQuery orderByClassSub($order = Criteria::ASC) Order by the class_sub column
 * @method     ChildCareIcd10BsQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareIcd10BsQuery orderByInclusive($order = Criteria::ASC) Order by the inclusive column
 * @method     ChildCareIcd10BsQuery orderByExclusive($order = Criteria::ASC) Order by the exclusive column
 * @method     ChildCareIcd10BsQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareIcd10BsQuery orderByStdCode($order = Criteria::ASC) Order by the std_code column
 * @method     ChildCareIcd10BsQuery orderBySubLevel($order = Criteria::ASC) Order by the sub_level column
 * @method     ChildCareIcd10BsQuery orderByRemarks($order = Criteria::ASC) Order by the remarks column
 * @method     ChildCareIcd10BsQuery orderByExtraCodes($order = Criteria::ASC) Order by the extra_codes column
 * @method     ChildCareIcd10BsQuery orderByExtraSubclass($order = Criteria::ASC) Order by the extra_subclass column
 *
 * @method     ChildCareIcd10BsQuery groupByDiagnosisCode() Group by the diagnosis_code column
 * @method     ChildCareIcd10BsQuery groupByDescription() Group by the description column
 * @method     ChildCareIcd10BsQuery groupByClassSub() Group by the class_sub column
 * @method     ChildCareIcd10BsQuery groupByType() Group by the type column
 * @method     ChildCareIcd10BsQuery groupByInclusive() Group by the inclusive column
 * @method     ChildCareIcd10BsQuery groupByExclusive() Group by the exclusive column
 * @method     ChildCareIcd10BsQuery groupByNotes() Group by the notes column
 * @method     ChildCareIcd10BsQuery groupByStdCode() Group by the std_code column
 * @method     ChildCareIcd10BsQuery groupBySubLevel() Group by the sub_level column
 * @method     ChildCareIcd10BsQuery groupByRemarks() Group by the remarks column
 * @method     ChildCareIcd10BsQuery groupByExtraCodes() Group by the extra_codes column
 * @method     ChildCareIcd10BsQuery groupByExtraSubclass() Group by the extra_subclass column
 *
 * @method     ChildCareIcd10BsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareIcd10BsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareIcd10BsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareIcd10BsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareIcd10BsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareIcd10BsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareIcd10Bs findOne(ConnectionInterface $con = null) Return the first ChildCareIcd10Bs matching the query
 * @method     ChildCareIcd10Bs findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareIcd10Bs matching the query, or a new ChildCareIcd10Bs object populated from the query conditions when no match is found
 *
 * @method     ChildCareIcd10Bs findOneByDiagnosisCode(string $diagnosis_code) Return the first ChildCareIcd10Bs filtered by the diagnosis_code column
 * @method     ChildCareIcd10Bs findOneByDescription(string $description) Return the first ChildCareIcd10Bs filtered by the description column
 * @method     ChildCareIcd10Bs findOneByClassSub(string $class_sub) Return the first ChildCareIcd10Bs filtered by the class_sub column
 * @method     ChildCareIcd10Bs findOneByType(string $type) Return the first ChildCareIcd10Bs filtered by the type column
 * @method     ChildCareIcd10Bs findOneByInclusive(string $inclusive) Return the first ChildCareIcd10Bs filtered by the inclusive column
 * @method     ChildCareIcd10Bs findOneByExclusive(string $exclusive) Return the first ChildCareIcd10Bs filtered by the exclusive column
 * @method     ChildCareIcd10Bs findOneByNotes(string $notes) Return the first ChildCareIcd10Bs filtered by the notes column
 * @method     ChildCareIcd10Bs findOneByStdCode(string $std_code) Return the first ChildCareIcd10Bs filtered by the std_code column
 * @method     ChildCareIcd10Bs findOneBySubLevel(int $sub_level) Return the first ChildCareIcd10Bs filtered by the sub_level column
 * @method     ChildCareIcd10Bs findOneByRemarks(string $remarks) Return the first ChildCareIcd10Bs filtered by the remarks column
 * @method     ChildCareIcd10Bs findOneByExtraCodes(string $extra_codes) Return the first ChildCareIcd10Bs filtered by the extra_codes column
 * @method     ChildCareIcd10Bs findOneByExtraSubclass(string $extra_subclass) Return the first ChildCareIcd10Bs filtered by the extra_subclass column *

 * @method     ChildCareIcd10Bs requirePk($key, ConnectionInterface $con = null) Return the ChildCareIcd10Bs by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOne(ConnectionInterface $con = null) Return the first ChildCareIcd10Bs matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareIcd10Bs requireOneByDiagnosisCode(string $diagnosis_code) Return the first ChildCareIcd10Bs filtered by the diagnosis_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneByDescription(string $description) Return the first ChildCareIcd10Bs filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneByClassSub(string $class_sub) Return the first ChildCareIcd10Bs filtered by the class_sub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneByType(string $type) Return the first ChildCareIcd10Bs filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneByInclusive(string $inclusive) Return the first ChildCareIcd10Bs filtered by the inclusive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneByExclusive(string $exclusive) Return the first ChildCareIcd10Bs filtered by the exclusive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneByNotes(string $notes) Return the first ChildCareIcd10Bs filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneByStdCode(string $std_code) Return the first ChildCareIcd10Bs filtered by the std_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneBySubLevel(int $sub_level) Return the first ChildCareIcd10Bs filtered by the sub_level column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneByRemarks(string $remarks) Return the first ChildCareIcd10Bs filtered by the remarks column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneByExtraCodes(string $extra_codes) Return the first ChildCareIcd10Bs filtered by the extra_codes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10Bs requireOneByExtraSubclass(string $extra_subclass) Return the first ChildCareIcd10Bs filtered by the extra_subclass column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareIcd10Bs[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareIcd10Bs objects based on current ModelCriteria
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByDiagnosisCode(string $diagnosis_code) Return ChildCareIcd10Bs objects filtered by the diagnosis_code column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByDescription(string $description) Return ChildCareIcd10Bs objects filtered by the description column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByClassSub(string $class_sub) Return ChildCareIcd10Bs objects filtered by the class_sub column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByType(string $type) Return ChildCareIcd10Bs objects filtered by the type column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByInclusive(string $inclusive) Return ChildCareIcd10Bs objects filtered by the inclusive column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByExclusive(string $exclusive) Return ChildCareIcd10Bs objects filtered by the exclusive column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByNotes(string $notes) Return ChildCareIcd10Bs objects filtered by the notes column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByStdCode(string $std_code) Return ChildCareIcd10Bs objects filtered by the std_code column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findBySubLevel(int $sub_level) Return ChildCareIcd10Bs objects filtered by the sub_level column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByRemarks(string $remarks) Return ChildCareIcd10Bs objects filtered by the remarks column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByExtraCodes(string $extra_codes) Return ChildCareIcd10Bs objects filtered by the extra_codes column
 * @method     ChildCareIcd10Bs[]|ObjectCollection findByExtraSubclass(string $extra_subclass) Return ChildCareIcd10Bs objects filtered by the extra_subclass column
 * @method     ChildCareIcd10Bs[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareIcd10BsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareIcd10BsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareIcd10Bs', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareIcd10BsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareIcd10BsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareIcd10BsQuery) {
            return $criteria;
        }
        $query = new ChildCareIcd10BsQuery();
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
     * @return ChildCareIcd10Bs|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareIcd10BsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareIcd10BsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareIcd10Bs A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT diagnosis_code, description, class_sub, type, inclusive, exclusive, notes, std_code, sub_level, remarks, extra_codes, extra_subclass FROM care_icd10_bs WHERE diagnosis_code = :p0';
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
            /** @var ChildCareIcd10Bs $obj */
            $obj = new ChildCareIcd10Bs();
            $obj->hydrate($row);
            CareIcd10BsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareIcd10Bs|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_DIAGNOSIS_CODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_DIAGNOSIS_CODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the diagnosis_code column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosisCode('fooValue');   // WHERE diagnosis_code = 'fooValue'
     * $query->filterByDiagnosisCode('%fooValue%', Criteria::LIKE); // WHERE diagnosis_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosisCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByDiagnosisCode($diagnosisCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosisCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_DIAGNOSIS_CODE, $diagnosisCode, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_DESCRIPTION, $description, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByClassSub($classSub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($classSub)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_CLASS_SUB, $classSub, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_TYPE, $type, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByInclusive($inclusive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inclusive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_INCLUSIVE, $inclusive, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByExclusive($exclusive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exclusive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_EXCLUSIVE, $exclusive, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_NOTES, $notes, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByStdCode($stdCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stdCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_STD_CODE, $stdCode, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterBySubLevel($subLevel = null, $comparison = null)
    {
        if (is_array($subLevel)) {
            $useMinMax = false;
            if (isset($subLevel['min'])) {
                $this->addUsingAlias(CareIcd10BsTableMap::COL_SUB_LEVEL, $subLevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subLevel['max'])) {
                $this->addUsingAlias(CareIcd10BsTableMap::COL_SUB_LEVEL, $subLevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_SUB_LEVEL, $subLevel, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_REMARKS, $remarks, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByExtraCodes($extraCodes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraCodes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_EXTRA_CODES, $extraCodes, $comparison);
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
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function filterByExtraSubclass($extraSubclass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraSubclass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10BsTableMap::COL_EXTRA_SUBCLASS, $extraSubclass, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareIcd10Bs $careIcd10Bs Object to remove from the list of results
     *
     * @return $this|ChildCareIcd10BsQuery The current query, for fluid interface
     */
    public function prune($careIcd10Bs = null)
    {
        if ($careIcd10Bs) {
            $this->addUsingAlias(CareIcd10BsTableMap::COL_DIAGNOSIS_CODE, $careIcd10Bs->getDiagnosisCode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_icd10_bs table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareIcd10BsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareIcd10BsTableMap::clearInstancePool();
            CareIcd10BsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareIcd10BsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareIcd10BsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareIcd10BsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareIcd10BsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareIcd10BsQuery
