<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareIcd10En as ChildCareIcd10En;
use CareMd\CareMd\CareIcd10EnQuery as ChildCareIcd10EnQuery;
use CareMd\CareMd\Map\CareIcd10EnTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_icd10_en' table.
 *
 *
 *
 * @method     ChildCareIcd10EnQuery orderByDiagnosisCode($order = Criteria::ASC) Order by the diagnosis_code column
 * @method     ChildCareIcd10EnQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareIcd10EnQuery orderByClassSub($order = Criteria::ASC) Order by the class_sub column
 * @method     ChildCareIcd10EnQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareIcd10EnQuery orderByInclusive($order = Criteria::ASC) Order by the inclusive column
 * @method     ChildCareIcd10EnQuery orderByExclusive($order = Criteria::ASC) Order by the exclusive column
 * @method     ChildCareIcd10EnQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareIcd10EnQuery orderByStdCode($order = Criteria::ASC) Order by the std_code column
 * @method     ChildCareIcd10EnQuery orderBySubLevel($order = Criteria::ASC) Order by the sub_level column
 * @method     ChildCareIcd10EnQuery orderByRemarks($order = Criteria::ASC) Order by the remarks column
 * @method     ChildCareIcd10EnQuery orderByExtraCodes($order = Criteria::ASC) Order by the extra_codes column
 * @method     ChildCareIcd10EnQuery orderByExtraSubclass($order = Criteria::ASC) Order by the extra_subclass column
 * @method     ChildCareIcd10EnQuery orderByShow($order = Criteria::ASC) Order by the show column
 *
 * @method     ChildCareIcd10EnQuery groupByDiagnosisCode() Group by the diagnosis_code column
 * @method     ChildCareIcd10EnQuery groupByDescription() Group by the description column
 * @method     ChildCareIcd10EnQuery groupByClassSub() Group by the class_sub column
 * @method     ChildCareIcd10EnQuery groupByType() Group by the type column
 * @method     ChildCareIcd10EnQuery groupByInclusive() Group by the inclusive column
 * @method     ChildCareIcd10EnQuery groupByExclusive() Group by the exclusive column
 * @method     ChildCareIcd10EnQuery groupByNotes() Group by the notes column
 * @method     ChildCareIcd10EnQuery groupByStdCode() Group by the std_code column
 * @method     ChildCareIcd10EnQuery groupBySubLevel() Group by the sub_level column
 * @method     ChildCareIcd10EnQuery groupByRemarks() Group by the remarks column
 * @method     ChildCareIcd10EnQuery groupByExtraCodes() Group by the extra_codes column
 * @method     ChildCareIcd10EnQuery groupByExtraSubclass() Group by the extra_subclass column
 * @method     ChildCareIcd10EnQuery groupByShow() Group by the show column
 *
 * @method     ChildCareIcd10EnQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareIcd10EnQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareIcd10EnQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareIcd10EnQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareIcd10EnQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareIcd10EnQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareIcd10En findOne(ConnectionInterface $con = null) Return the first ChildCareIcd10En matching the query
 * @method     ChildCareIcd10En findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareIcd10En matching the query, or a new ChildCareIcd10En object populated from the query conditions when no match is found
 *
 * @method     ChildCareIcd10En findOneByDiagnosisCode(string $diagnosis_code) Return the first ChildCareIcd10En filtered by the diagnosis_code column
 * @method     ChildCareIcd10En findOneByDescription(string $description) Return the first ChildCareIcd10En filtered by the description column
 * @method     ChildCareIcd10En findOneByClassSub(string $class_sub) Return the first ChildCareIcd10En filtered by the class_sub column
 * @method     ChildCareIcd10En findOneByType(string $type) Return the first ChildCareIcd10En filtered by the type column
 * @method     ChildCareIcd10En findOneByInclusive(string $inclusive) Return the first ChildCareIcd10En filtered by the inclusive column
 * @method     ChildCareIcd10En findOneByExclusive(string $exclusive) Return the first ChildCareIcd10En filtered by the exclusive column
 * @method     ChildCareIcd10En findOneByNotes(string $notes) Return the first ChildCareIcd10En filtered by the notes column
 * @method     ChildCareIcd10En findOneByStdCode(string $std_code) Return the first ChildCareIcd10En filtered by the std_code column
 * @method     ChildCareIcd10En findOneBySubLevel(int $sub_level) Return the first ChildCareIcd10En filtered by the sub_level column
 * @method     ChildCareIcd10En findOneByRemarks(string $remarks) Return the first ChildCareIcd10En filtered by the remarks column
 * @method     ChildCareIcd10En findOneByExtraCodes(string $extra_codes) Return the first ChildCareIcd10En filtered by the extra_codes column
 * @method     ChildCareIcd10En findOneByExtraSubclass(string $extra_subclass) Return the first ChildCareIcd10En filtered by the extra_subclass column
 * @method     ChildCareIcd10En findOneByShow(int $show) Return the first ChildCareIcd10En filtered by the show column *

 * @method     ChildCareIcd10En requirePk($key, ConnectionInterface $con = null) Return the ChildCareIcd10En by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOne(ConnectionInterface $con = null) Return the first ChildCareIcd10En matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareIcd10En requireOneByDiagnosisCode(string $diagnosis_code) Return the first ChildCareIcd10En filtered by the diagnosis_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByDescription(string $description) Return the first ChildCareIcd10En filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByClassSub(string $class_sub) Return the first ChildCareIcd10En filtered by the class_sub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByType(string $type) Return the first ChildCareIcd10En filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByInclusive(string $inclusive) Return the first ChildCareIcd10En filtered by the inclusive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByExclusive(string $exclusive) Return the first ChildCareIcd10En filtered by the exclusive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByNotes(string $notes) Return the first ChildCareIcd10En filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByStdCode(string $std_code) Return the first ChildCareIcd10En filtered by the std_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneBySubLevel(int $sub_level) Return the first ChildCareIcd10En filtered by the sub_level column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByRemarks(string $remarks) Return the first ChildCareIcd10En filtered by the remarks column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByExtraCodes(string $extra_codes) Return the first ChildCareIcd10En filtered by the extra_codes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByExtraSubclass(string $extra_subclass) Return the first ChildCareIcd10En filtered by the extra_subclass column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareIcd10En requireOneByShow(int $show) Return the first ChildCareIcd10En filtered by the show column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareIcd10En[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareIcd10En objects based on current ModelCriteria
 * @method     ChildCareIcd10En[]|ObjectCollection findByDiagnosisCode(string $diagnosis_code) Return ChildCareIcd10En objects filtered by the diagnosis_code column
 * @method     ChildCareIcd10En[]|ObjectCollection findByDescription(string $description) Return ChildCareIcd10En objects filtered by the description column
 * @method     ChildCareIcd10En[]|ObjectCollection findByClassSub(string $class_sub) Return ChildCareIcd10En objects filtered by the class_sub column
 * @method     ChildCareIcd10En[]|ObjectCollection findByType(string $type) Return ChildCareIcd10En objects filtered by the type column
 * @method     ChildCareIcd10En[]|ObjectCollection findByInclusive(string $inclusive) Return ChildCareIcd10En objects filtered by the inclusive column
 * @method     ChildCareIcd10En[]|ObjectCollection findByExclusive(string $exclusive) Return ChildCareIcd10En objects filtered by the exclusive column
 * @method     ChildCareIcd10En[]|ObjectCollection findByNotes(string $notes) Return ChildCareIcd10En objects filtered by the notes column
 * @method     ChildCareIcd10En[]|ObjectCollection findByStdCode(string $std_code) Return ChildCareIcd10En objects filtered by the std_code column
 * @method     ChildCareIcd10En[]|ObjectCollection findBySubLevel(int $sub_level) Return ChildCareIcd10En objects filtered by the sub_level column
 * @method     ChildCareIcd10En[]|ObjectCollection findByRemarks(string $remarks) Return ChildCareIcd10En objects filtered by the remarks column
 * @method     ChildCareIcd10En[]|ObjectCollection findByExtraCodes(string $extra_codes) Return ChildCareIcd10En objects filtered by the extra_codes column
 * @method     ChildCareIcd10En[]|ObjectCollection findByExtraSubclass(string $extra_subclass) Return ChildCareIcd10En objects filtered by the extra_subclass column
 * @method     ChildCareIcd10En[]|ObjectCollection findByShow(int $show) Return ChildCareIcd10En objects filtered by the show column
 * @method     ChildCareIcd10En[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareIcd10EnQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareIcd10EnQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareIcd10En', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareIcd10EnQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareIcd10EnQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareIcd10EnQuery) {
            return $criteria;
        }
        $query = new ChildCareIcd10EnQuery();
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
     * @return ChildCareIcd10En|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareIcd10En object has no primary key');
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
        throw new LogicException('The CareIcd10En object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareIcd10En object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareIcd10En object has no primary key');
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByDiagnosisCode($diagnosisCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosisCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_DIAGNOSIS_CODE, $diagnosisCode, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_DESCRIPTION, $description, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByClassSub($classSub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($classSub)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_CLASS_SUB, $classSub, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_TYPE, $type, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByInclusive($inclusive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inclusive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_INCLUSIVE, $inclusive, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByExclusive($exclusive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exclusive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_EXCLUSIVE, $exclusive, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_NOTES, $notes, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByStdCode($stdCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stdCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_STD_CODE, $stdCode, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterBySubLevel($subLevel = null, $comparison = null)
    {
        if (is_array($subLevel)) {
            $useMinMax = false;
            if (isset($subLevel['min'])) {
                $this->addUsingAlias(CareIcd10EnTableMap::COL_SUB_LEVEL, $subLevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subLevel['max'])) {
                $this->addUsingAlias(CareIcd10EnTableMap::COL_SUB_LEVEL, $subLevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_SUB_LEVEL, $subLevel, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_REMARKS, $remarks, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByExtraCodes($extraCodes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraCodes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_EXTRA_CODES, $extraCodes, $comparison);
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
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByExtraSubclass($extraSubclass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraSubclass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_EXTRA_SUBCLASS, $extraSubclass, $comparison);
    }

    /**
     * Filter the query on the show column
     *
     * Example usage:
     * <code>
     * $query->filterByShow(1234); // WHERE show = 1234
     * $query->filterByShow(array(12, 34)); // WHERE show IN (12, 34)
     * $query->filterByShow(array('min' => 12)); // WHERE show > 12
     * </code>
     *
     * @param     mixed $show The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function filterByShow($show = null, $comparison = null)
    {
        if (is_array($show)) {
            $useMinMax = false;
            if (isset($show['min'])) {
                $this->addUsingAlias(CareIcd10EnTableMap::COL_SHOW, $show['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($show['max'])) {
                $this->addUsingAlias(CareIcd10EnTableMap::COL_SHOW, $show['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareIcd10EnTableMap::COL_SHOW, $show, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareIcd10En $careIcd10En Object to remove from the list of results
     *
     * @return $this|ChildCareIcd10EnQuery The current query, for fluid interface
     */
    public function prune($careIcd10En = null)
    {
        if ($careIcd10En) {
            throw new LogicException('CareIcd10En object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_icd10_en table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareIcd10EnTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareIcd10EnTableMap::clearInstancePool();
            CareIcd10EnTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareIcd10EnTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareIcd10EnTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareIcd10EnTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareIcd10EnTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareIcd10EnQuery
