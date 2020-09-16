<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareMenuSub as ChildCareMenuSub;
use CareMd\CareMd\CareMenuSubQuery as ChildCareMenuSubQuery;
use CareMd\CareMd\Map\CareMenuSubTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_menu_sub' table.
 *
 *
 *
 * @method     ChildCareMenuSubQuery orderBySNr($order = Criteria::ASC) Order by the s_nr column
 * @method     ChildCareMenuSubQuery orderBySSortNr($order = Criteria::ASC) Order by the s_sort_nr column
 * @method     ChildCareMenuSubQuery orderBySMainNr($order = Criteria::ASC) Order by the s_main_nr column
 * @method     ChildCareMenuSubQuery orderBySEbene($order = Criteria::ASC) Order by the s_ebene column
 * @method     ChildCareMenuSubQuery orderBySName($order = Criteria::ASC) Order by the s_name column
 * @method     ChildCareMenuSubQuery orderBySLdVar($order = Criteria::ASC) Order by the s_LD_var column
 * @method     ChildCareMenuSubQuery orderBySUrl($order = Criteria::ASC) Order by the s_url column
 * @method     ChildCareMenuSubQuery orderBySUrlExt($order = Criteria::ASC) Order by the s_url_ext column
 * @method     ChildCareMenuSubQuery orderBySImage($order = Criteria::ASC) Order by the s_image column
 * @method     ChildCareMenuSubQuery orderBySOpenImage($order = Criteria::ASC) Order by the s_open_image column
 * @method     ChildCareMenuSubQuery orderBySIsVisible($order = Criteria::ASC) Order by the s_is_visible column
 * @method     ChildCareMenuSubQuery orderBySHideBy($order = Criteria::ASC) Order by the s_hide_by column
 * @method     ChildCareMenuSubQuery orderBySStatus($order = Criteria::ASC) Order by the s_status column
 * @method     ChildCareMenuSubQuery orderBySModifyId($order = Criteria::ASC) Order by the s_modify_id column
 * @method     ChildCareMenuSubQuery orderBySModifyTime($order = Criteria::ASC) Order by the s_modify_time column
 *
 * @method     ChildCareMenuSubQuery groupBySNr() Group by the s_nr column
 * @method     ChildCareMenuSubQuery groupBySSortNr() Group by the s_sort_nr column
 * @method     ChildCareMenuSubQuery groupBySMainNr() Group by the s_main_nr column
 * @method     ChildCareMenuSubQuery groupBySEbene() Group by the s_ebene column
 * @method     ChildCareMenuSubQuery groupBySName() Group by the s_name column
 * @method     ChildCareMenuSubQuery groupBySLdVar() Group by the s_LD_var column
 * @method     ChildCareMenuSubQuery groupBySUrl() Group by the s_url column
 * @method     ChildCareMenuSubQuery groupBySUrlExt() Group by the s_url_ext column
 * @method     ChildCareMenuSubQuery groupBySImage() Group by the s_image column
 * @method     ChildCareMenuSubQuery groupBySOpenImage() Group by the s_open_image column
 * @method     ChildCareMenuSubQuery groupBySIsVisible() Group by the s_is_visible column
 * @method     ChildCareMenuSubQuery groupBySHideBy() Group by the s_hide_by column
 * @method     ChildCareMenuSubQuery groupBySStatus() Group by the s_status column
 * @method     ChildCareMenuSubQuery groupBySModifyId() Group by the s_modify_id column
 * @method     ChildCareMenuSubQuery groupBySModifyTime() Group by the s_modify_time column
 *
 * @method     ChildCareMenuSubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareMenuSubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareMenuSubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareMenuSubQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareMenuSubQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareMenuSubQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareMenuSub findOne(ConnectionInterface $con = null) Return the first ChildCareMenuSub matching the query
 * @method     ChildCareMenuSub findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareMenuSub matching the query, or a new ChildCareMenuSub object populated from the query conditions when no match is found
 *
 * @method     ChildCareMenuSub findOneBySNr(int $s_nr) Return the first ChildCareMenuSub filtered by the s_nr column
 * @method     ChildCareMenuSub findOneBySSortNr(int $s_sort_nr) Return the first ChildCareMenuSub filtered by the s_sort_nr column
 * @method     ChildCareMenuSub findOneBySMainNr(int $s_main_nr) Return the first ChildCareMenuSub filtered by the s_main_nr column
 * @method     ChildCareMenuSub findOneBySEbene(int $s_ebene) Return the first ChildCareMenuSub filtered by the s_ebene column
 * @method     ChildCareMenuSub findOneBySName(string $s_name) Return the first ChildCareMenuSub filtered by the s_name column
 * @method     ChildCareMenuSub findOneBySLdVar(string $s_LD_var) Return the first ChildCareMenuSub filtered by the s_LD_var column
 * @method     ChildCareMenuSub findOneBySUrl(string $s_url) Return the first ChildCareMenuSub filtered by the s_url column
 * @method     ChildCareMenuSub findOneBySUrlExt(string $s_url_ext) Return the first ChildCareMenuSub filtered by the s_url_ext column
 * @method     ChildCareMenuSub findOneBySImage(string $s_image) Return the first ChildCareMenuSub filtered by the s_image column
 * @method     ChildCareMenuSub findOneBySOpenImage(string $s_open_image) Return the first ChildCareMenuSub filtered by the s_open_image column
 * @method     ChildCareMenuSub findOneBySIsVisible(string $s_is_visible) Return the first ChildCareMenuSub filtered by the s_is_visible column
 * @method     ChildCareMenuSub findOneBySHideBy(string $s_hide_by) Return the first ChildCareMenuSub filtered by the s_hide_by column
 * @method     ChildCareMenuSub findOneBySStatus(string $s_status) Return the first ChildCareMenuSub filtered by the s_status column
 * @method     ChildCareMenuSub findOneBySModifyId(string $s_modify_id) Return the first ChildCareMenuSub filtered by the s_modify_id column
 * @method     ChildCareMenuSub findOneBySModifyTime(string $s_modify_time) Return the first ChildCareMenuSub filtered by the s_modify_time column *

 * @method     ChildCareMenuSub requirePk($key, ConnectionInterface $con = null) Return the ChildCareMenuSub by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOne(ConnectionInterface $con = null) Return the first ChildCareMenuSub matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMenuSub requireOneBySNr(int $s_nr) Return the first ChildCareMenuSub filtered by the s_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySSortNr(int $s_sort_nr) Return the first ChildCareMenuSub filtered by the s_sort_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySMainNr(int $s_main_nr) Return the first ChildCareMenuSub filtered by the s_main_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySEbene(int $s_ebene) Return the first ChildCareMenuSub filtered by the s_ebene column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySName(string $s_name) Return the first ChildCareMenuSub filtered by the s_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySLdVar(string $s_LD_var) Return the first ChildCareMenuSub filtered by the s_LD_var column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySUrl(string $s_url) Return the first ChildCareMenuSub filtered by the s_url column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySUrlExt(string $s_url_ext) Return the first ChildCareMenuSub filtered by the s_url_ext column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySImage(string $s_image) Return the first ChildCareMenuSub filtered by the s_image column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySOpenImage(string $s_open_image) Return the first ChildCareMenuSub filtered by the s_open_image column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySIsVisible(string $s_is_visible) Return the first ChildCareMenuSub filtered by the s_is_visible column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySHideBy(string $s_hide_by) Return the first ChildCareMenuSub filtered by the s_hide_by column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySStatus(string $s_status) Return the first ChildCareMenuSub filtered by the s_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySModifyId(string $s_modify_id) Return the first ChildCareMenuSub filtered by the s_modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMenuSub requireOneBySModifyTime(string $s_modify_time) Return the first ChildCareMenuSub filtered by the s_modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMenuSub[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareMenuSub objects based on current ModelCriteria
 * @method     ChildCareMenuSub[]|ObjectCollection findBySNr(int $s_nr) Return ChildCareMenuSub objects filtered by the s_nr column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySSortNr(int $s_sort_nr) Return ChildCareMenuSub objects filtered by the s_sort_nr column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySMainNr(int $s_main_nr) Return ChildCareMenuSub objects filtered by the s_main_nr column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySEbene(int $s_ebene) Return ChildCareMenuSub objects filtered by the s_ebene column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySName(string $s_name) Return ChildCareMenuSub objects filtered by the s_name column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySLdVar(string $s_LD_var) Return ChildCareMenuSub objects filtered by the s_LD_var column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySUrl(string $s_url) Return ChildCareMenuSub objects filtered by the s_url column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySUrlExt(string $s_url_ext) Return ChildCareMenuSub objects filtered by the s_url_ext column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySImage(string $s_image) Return ChildCareMenuSub objects filtered by the s_image column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySOpenImage(string $s_open_image) Return ChildCareMenuSub objects filtered by the s_open_image column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySIsVisible(string $s_is_visible) Return ChildCareMenuSub objects filtered by the s_is_visible column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySHideBy(string $s_hide_by) Return ChildCareMenuSub objects filtered by the s_hide_by column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySStatus(string $s_status) Return ChildCareMenuSub objects filtered by the s_status column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySModifyId(string $s_modify_id) Return ChildCareMenuSub objects filtered by the s_modify_id column
 * @method     ChildCareMenuSub[]|ObjectCollection findBySModifyTime(string $s_modify_time) Return ChildCareMenuSub objects filtered by the s_modify_time column
 * @method     ChildCareMenuSub[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareMenuSubQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareMenuSubQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareMenuSub', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareMenuSubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareMenuSubQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareMenuSubQuery) {
            return $criteria;
        }
        $query = new ChildCareMenuSubQuery();
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
     * @return ChildCareMenuSub|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareMenuSub object has no primary key');
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
        throw new LogicException('The CareMenuSub object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareMenuSub object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareMenuSub object has no primary key');
    }

    /**
     * Filter the query on the s_nr column
     *
     * Example usage:
     * <code>
     * $query->filterBySNr(1234); // WHERE s_nr = 1234
     * $query->filterBySNr(array(12, 34)); // WHERE s_nr IN (12, 34)
     * $query->filterBySNr(array('min' => 12)); // WHERE s_nr > 12
     * </code>
     *
     * @param     mixed $sNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySNr($sNr = null, $comparison = null)
    {
        if (is_array($sNr)) {
            $useMinMax = false;
            if (isset($sNr['min'])) {
                $this->addUsingAlias(CareMenuSubTableMap::COL_S_NR, $sNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sNr['max'])) {
                $this->addUsingAlias(CareMenuSubTableMap::COL_S_NR, $sNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_NR, $sNr, $comparison);
    }

    /**
     * Filter the query on the s_sort_nr column
     *
     * Example usage:
     * <code>
     * $query->filterBySSortNr(1234); // WHERE s_sort_nr = 1234
     * $query->filterBySSortNr(array(12, 34)); // WHERE s_sort_nr IN (12, 34)
     * $query->filterBySSortNr(array('min' => 12)); // WHERE s_sort_nr > 12
     * </code>
     *
     * @param     mixed $sSortNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySSortNr($sSortNr = null, $comparison = null)
    {
        if (is_array($sSortNr)) {
            $useMinMax = false;
            if (isset($sSortNr['min'])) {
                $this->addUsingAlias(CareMenuSubTableMap::COL_S_SORT_NR, $sSortNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sSortNr['max'])) {
                $this->addUsingAlias(CareMenuSubTableMap::COL_S_SORT_NR, $sSortNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_SORT_NR, $sSortNr, $comparison);
    }

    /**
     * Filter the query on the s_main_nr column
     *
     * Example usage:
     * <code>
     * $query->filterBySMainNr(1234); // WHERE s_main_nr = 1234
     * $query->filterBySMainNr(array(12, 34)); // WHERE s_main_nr IN (12, 34)
     * $query->filterBySMainNr(array('min' => 12)); // WHERE s_main_nr > 12
     * </code>
     *
     * @param     mixed $sMainNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySMainNr($sMainNr = null, $comparison = null)
    {
        if (is_array($sMainNr)) {
            $useMinMax = false;
            if (isset($sMainNr['min'])) {
                $this->addUsingAlias(CareMenuSubTableMap::COL_S_MAIN_NR, $sMainNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sMainNr['max'])) {
                $this->addUsingAlias(CareMenuSubTableMap::COL_S_MAIN_NR, $sMainNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_MAIN_NR, $sMainNr, $comparison);
    }

    /**
     * Filter the query on the s_ebene column
     *
     * Example usage:
     * <code>
     * $query->filterBySEbene(1234); // WHERE s_ebene = 1234
     * $query->filterBySEbene(array(12, 34)); // WHERE s_ebene IN (12, 34)
     * $query->filterBySEbene(array('min' => 12)); // WHERE s_ebene > 12
     * </code>
     *
     * @param     mixed $sEbene The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySEbene($sEbene = null, $comparison = null)
    {
        if (is_array($sEbene)) {
            $useMinMax = false;
            if (isset($sEbene['min'])) {
                $this->addUsingAlias(CareMenuSubTableMap::COL_S_EBENE, $sEbene['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sEbene['max'])) {
                $this->addUsingAlias(CareMenuSubTableMap::COL_S_EBENE, $sEbene['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_EBENE, $sEbene, $comparison);
    }

    /**
     * Filter the query on the s_name column
     *
     * Example usage:
     * <code>
     * $query->filterBySName('fooValue');   // WHERE s_name = 'fooValue'
     * $query->filterBySName('%fooValue%', Criteria::LIKE); // WHERE s_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySName($sName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_NAME, $sName, $comparison);
    }

    /**
     * Filter the query on the s_LD_var column
     *
     * Example usage:
     * <code>
     * $query->filterBySLdVar('fooValue');   // WHERE s_LD_var = 'fooValue'
     * $query->filterBySLdVar('%fooValue%', Criteria::LIKE); // WHERE s_LD_var LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sLdVar The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySLdVar($sLdVar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sLdVar)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_LD_VAR, $sLdVar, $comparison);
    }

    /**
     * Filter the query on the s_url column
     *
     * Example usage:
     * <code>
     * $query->filterBySUrl('fooValue');   // WHERE s_url = 'fooValue'
     * $query->filterBySUrl('%fooValue%', Criteria::LIKE); // WHERE s_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sUrl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySUrl($sUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sUrl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_URL, $sUrl, $comparison);
    }

    /**
     * Filter the query on the s_url_ext column
     *
     * Example usage:
     * <code>
     * $query->filterBySUrlExt('fooValue');   // WHERE s_url_ext = 'fooValue'
     * $query->filterBySUrlExt('%fooValue%', Criteria::LIKE); // WHERE s_url_ext LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sUrlExt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySUrlExt($sUrlExt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sUrlExt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_URL_EXT, $sUrlExt, $comparison);
    }

    /**
     * Filter the query on the s_image column
     *
     * Example usage:
     * <code>
     * $query->filterBySImage('fooValue');   // WHERE s_image = 'fooValue'
     * $query->filterBySImage('%fooValue%', Criteria::LIKE); // WHERE s_image LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sImage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySImage($sImage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sImage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_IMAGE, $sImage, $comparison);
    }

    /**
     * Filter the query on the s_open_image column
     *
     * Example usage:
     * <code>
     * $query->filterBySOpenImage('fooValue');   // WHERE s_open_image = 'fooValue'
     * $query->filterBySOpenImage('%fooValue%', Criteria::LIKE); // WHERE s_open_image LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sOpenImage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySOpenImage($sOpenImage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sOpenImage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_OPEN_IMAGE, $sOpenImage, $comparison);
    }

    /**
     * Filter the query on the s_is_visible column
     *
     * Example usage:
     * <code>
     * $query->filterBySIsVisible('fooValue');   // WHERE s_is_visible = 'fooValue'
     * $query->filterBySIsVisible('%fooValue%', Criteria::LIKE); // WHERE s_is_visible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sIsVisible The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySIsVisible($sIsVisible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sIsVisible)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_IS_VISIBLE, $sIsVisible, $comparison);
    }

    /**
     * Filter the query on the s_hide_by column
     *
     * Example usage:
     * <code>
     * $query->filterBySHideBy('fooValue');   // WHERE s_hide_by = 'fooValue'
     * $query->filterBySHideBy('%fooValue%', Criteria::LIKE); // WHERE s_hide_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sHideBy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySHideBy($sHideBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sHideBy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_HIDE_BY, $sHideBy, $comparison);
    }

    /**
     * Filter the query on the s_status column
     *
     * Example usage:
     * <code>
     * $query->filterBySStatus('fooValue');   // WHERE s_status = 'fooValue'
     * $query->filterBySStatus('%fooValue%', Criteria::LIKE); // WHERE s_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySStatus($sStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_STATUS, $sStatus, $comparison);
    }

    /**
     * Filter the query on the s_modify_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySModifyId('fooValue');   // WHERE s_modify_id = 'fooValue'
     * $query->filterBySModifyId('%fooValue%', Criteria::LIKE); // WHERE s_modify_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sModifyId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySModifyId($sModifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sModifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_MODIFY_ID, $sModifyId, $comparison);
    }

    /**
     * Filter the query on the s_modify_time column
     *
     * Example usage:
     * <code>
     * $query->filterBySModifyTime('2011-03-14'); // WHERE s_modify_time = '2011-03-14'
     * $query->filterBySModifyTime('now'); // WHERE s_modify_time = '2011-03-14'
     * $query->filterBySModifyTime(array('max' => 'yesterday')); // WHERE s_modify_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $sModifyTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function filterBySModifyTime($sModifyTime = null, $comparison = null)
    {
        if (is_array($sModifyTime)) {
            $useMinMax = false;
            if (isset($sModifyTime['min'])) {
                $this->addUsingAlias(CareMenuSubTableMap::COL_S_MODIFY_TIME, $sModifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sModifyTime['max'])) {
                $this->addUsingAlias(CareMenuSubTableMap::COL_S_MODIFY_TIME, $sModifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMenuSubTableMap::COL_S_MODIFY_TIME, $sModifyTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareMenuSub $careMenuSub Object to remove from the list of results
     *
     * @return $this|ChildCareMenuSubQuery The current query, for fluid interface
     */
    public function prune($careMenuSub = null)
    {
        if ($careMenuSub) {
            throw new LogicException('CareMenuSub object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_menu_sub table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMenuSubTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareMenuSubTableMap::clearInstancePool();
            CareMenuSubTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMenuSubTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareMenuSubTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareMenuSubTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareMenuSubTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareMenuSubQuery
