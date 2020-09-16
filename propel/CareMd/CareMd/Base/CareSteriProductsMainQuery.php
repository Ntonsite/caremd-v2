<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareSteriProductsMain as ChildCareSteriProductsMain;
use CareMd\CareMd\CareSteriProductsMainQuery as ChildCareSteriProductsMainQuery;
use CareMd\CareMd\Map\CareSteriProductsMainTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_steri_products_main' table.
 *
 *
 *
 * @method     ChildCareSteriProductsMainQuery orderByBestellnum($order = Criteria::ASC) Order by the bestellnum column
 * @method     ChildCareSteriProductsMainQuery orderByContainernum($order = Criteria::ASC) Order by the containernum column
 * @method     ChildCareSteriProductsMainQuery orderByIndustrynum($order = Criteria::ASC) Order by the industrynum column
 * @method     ChildCareSteriProductsMainQuery orderByContainername($order = Criteria::ASC) Order by the containername column
 * @method     ChildCareSteriProductsMainQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareSteriProductsMainQuery orderByPacking($order = Criteria::ASC) Order by the packing column
 * @method     ChildCareSteriProductsMainQuery orderByMinorder($order = Criteria::ASC) Order by the minorder column
 * @method     ChildCareSteriProductsMainQuery orderByMaxorder($order = Criteria::ASC) Order by the maxorder column
 * @method     ChildCareSteriProductsMainQuery orderByProorder($order = Criteria::ASC) Order by the proorder column
 * @method     ChildCareSteriProductsMainQuery orderByPicfile($order = Criteria::ASC) Order by the picfile column
 * @method     ChildCareSteriProductsMainQuery orderByEncoder($order = Criteria::ASC) Order by the encoder column
 * @method     ChildCareSteriProductsMainQuery orderByEncDate($order = Criteria::ASC) Order by the enc_date column
 * @method     ChildCareSteriProductsMainQuery orderByEncTime($order = Criteria::ASC) Order by the enc_time column
 * @method     ChildCareSteriProductsMainQuery orderByLockFlag($order = Criteria::ASC) Order by the lock_flag column
 * @method     ChildCareSteriProductsMainQuery orderByMedgroup($order = Criteria::ASC) Order by the medgroup column
 * @method     ChildCareSteriProductsMainQuery orderByCave($order = Criteria::ASC) Order by the cave column
 *
 * @method     ChildCareSteriProductsMainQuery groupByBestellnum() Group by the bestellnum column
 * @method     ChildCareSteriProductsMainQuery groupByContainernum() Group by the containernum column
 * @method     ChildCareSteriProductsMainQuery groupByIndustrynum() Group by the industrynum column
 * @method     ChildCareSteriProductsMainQuery groupByContainername() Group by the containername column
 * @method     ChildCareSteriProductsMainQuery groupByDescription() Group by the description column
 * @method     ChildCareSteriProductsMainQuery groupByPacking() Group by the packing column
 * @method     ChildCareSteriProductsMainQuery groupByMinorder() Group by the minorder column
 * @method     ChildCareSteriProductsMainQuery groupByMaxorder() Group by the maxorder column
 * @method     ChildCareSteriProductsMainQuery groupByProorder() Group by the proorder column
 * @method     ChildCareSteriProductsMainQuery groupByPicfile() Group by the picfile column
 * @method     ChildCareSteriProductsMainQuery groupByEncoder() Group by the encoder column
 * @method     ChildCareSteriProductsMainQuery groupByEncDate() Group by the enc_date column
 * @method     ChildCareSteriProductsMainQuery groupByEncTime() Group by the enc_time column
 * @method     ChildCareSteriProductsMainQuery groupByLockFlag() Group by the lock_flag column
 * @method     ChildCareSteriProductsMainQuery groupByMedgroup() Group by the medgroup column
 * @method     ChildCareSteriProductsMainQuery groupByCave() Group by the cave column
 *
 * @method     ChildCareSteriProductsMainQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareSteriProductsMainQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareSteriProductsMainQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareSteriProductsMainQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareSteriProductsMainQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareSteriProductsMainQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareSteriProductsMain findOne(ConnectionInterface $con = null) Return the first ChildCareSteriProductsMain matching the query
 * @method     ChildCareSteriProductsMain findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareSteriProductsMain matching the query, or a new ChildCareSteriProductsMain object populated from the query conditions when no match is found
 *
 * @method     ChildCareSteriProductsMain findOneByBestellnum(int $bestellnum) Return the first ChildCareSteriProductsMain filtered by the bestellnum column
 * @method     ChildCareSteriProductsMain findOneByContainernum(string $containernum) Return the first ChildCareSteriProductsMain filtered by the containernum column
 * @method     ChildCareSteriProductsMain findOneByIndustrynum(string $industrynum) Return the first ChildCareSteriProductsMain filtered by the industrynum column
 * @method     ChildCareSteriProductsMain findOneByContainername(string $containername) Return the first ChildCareSteriProductsMain filtered by the containername column
 * @method     ChildCareSteriProductsMain findOneByDescription(string $description) Return the first ChildCareSteriProductsMain filtered by the description column
 * @method     ChildCareSteriProductsMain findOneByPacking(string $packing) Return the first ChildCareSteriProductsMain filtered by the packing column
 * @method     ChildCareSteriProductsMain findOneByMinorder(int $minorder) Return the first ChildCareSteriProductsMain filtered by the minorder column
 * @method     ChildCareSteriProductsMain findOneByMaxorder(int $maxorder) Return the first ChildCareSteriProductsMain filtered by the maxorder column
 * @method     ChildCareSteriProductsMain findOneByProorder(string $proorder) Return the first ChildCareSteriProductsMain filtered by the proorder column
 * @method     ChildCareSteriProductsMain findOneByPicfile(string $picfile) Return the first ChildCareSteriProductsMain filtered by the picfile column
 * @method     ChildCareSteriProductsMain findOneByEncoder(string $encoder) Return the first ChildCareSteriProductsMain filtered by the encoder column
 * @method     ChildCareSteriProductsMain findOneByEncDate(string $enc_date) Return the first ChildCareSteriProductsMain filtered by the enc_date column
 * @method     ChildCareSteriProductsMain findOneByEncTime(string $enc_time) Return the first ChildCareSteriProductsMain filtered by the enc_time column
 * @method     ChildCareSteriProductsMain findOneByLockFlag(boolean $lock_flag) Return the first ChildCareSteriProductsMain filtered by the lock_flag column
 * @method     ChildCareSteriProductsMain findOneByMedgroup(string $medgroup) Return the first ChildCareSteriProductsMain filtered by the medgroup column
 * @method     ChildCareSteriProductsMain findOneByCave(string $cave) Return the first ChildCareSteriProductsMain filtered by the cave column *

 * @method     ChildCareSteriProductsMain requirePk($key, ConnectionInterface $con = null) Return the ChildCareSteriProductsMain by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOne(ConnectionInterface $con = null) Return the first ChildCareSteriProductsMain matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareSteriProductsMain requireOneByBestellnum(int $bestellnum) Return the first ChildCareSteriProductsMain filtered by the bestellnum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByContainernum(string $containernum) Return the first ChildCareSteriProductsMain filtered by the containernum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByIndustrynum(string $industrynum) Return the first ChildCareSteriProductsMain filtered by the industrynum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByContainername(string $containername) Return the first ChildCareSteriProductsMain filtered by the containername column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByDescription(string $description) Return the first ChildCareSteriProductsMain filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByPacking(string $packing) Return the first ChildCareSteriProductsMain filtered by the packing column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByMinorder(int $minorder) Return the first ChildCareSteriProductsMain filtered by the minorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByMaxorder(int $maxorder) Return the first ChildCareSteriProductsMain filtered by the maxorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByProorder(string $proorder) Return the first ChildCareSteriProductsMain filtered by the proorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByPicfile(string $picfile) Return the first ChildCareSteriProductsMain filtered by the picfile column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByEncoder(string $encoder) Return the first ChildCareSteriProductsMain filtered by the encoder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByEncDate(string $enc_date) Return the first ChildCareSteriProductsMain filtered by the enc_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByEncTime(string $enc_time) Return the first ChildCareSteriProductsMain filtered by the enc_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByLockFlag(boolean $lock_flag) Return the first ChildCareSteriProductsMain filtered by the lock_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByMedgroup(string $medgroup) Return the first ChildCareSteriProductsMain filtered by the medgroup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareSteriProductsMain requireOneByCave(string $cave) Return the first ChildCareSteriProductsMain filtered by the cave column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareSteriProductsMain[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareSteriProductsMain objects based on current ModelCriteria
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByBestellnum(int $bestellnum) Return ChildCareSteriProductsMain objects filtered by the bestellnum column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByContainernum(string $containernum) Return ChildCareSteriProductsMain objects filtered by the containernum column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByIndustrynum(string $industrynum) Return ChildCareSteriProductsMain objects filtered by the industrynum column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByContainername(string $containername) Return ChildCareSteriProductsMain objects filtered by the containername column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByDescription(string $description) Return ChildCareSteriProductsMain objects filtered by the description column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByPacking(string $packing) Return ChildCareSteriProductsMain objects filtered by the packing column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByMinorder(int $minorder) Return ChildCareSteriProductsMain objects filtered by the minorder column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByMaxorder(int $maxorder) Return ChildCareSteriProductsMain objects filtered by the maxorder column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByProorder(string $proorder) Return ChildCareSteriProductsMain objects filtered by the proorder column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByPicfile(string $picfile) Return ChildCareSteriProductsMain objects filtered by the picfile column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByEncoder(string $encoder) Return ChildCareSteriProductsMain objects filtered by the encoder column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByEncDate(string $enc_date) Return ChildCareSteriProductsMain objects filtered by the enc_date column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByEncTime(string $enc_time) Return ChildCareSteriProductsMain objects filtered by the enc_time column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByLockFlag(boolean $lock_flag) Return ChildCareSteriProductsMain objects filtered by the lock_flag column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByMedgroup(string $medgroup) Return ChildCareSteriProductsMain objects filtered by the medgroup column
 * @method     ChildCareSteriProductsMain[]|ObjectCollection findByCave(string $cave) Return ChildCareSteriProductsMain objects filtered by the cave column
 * @method     ChildCareSteriProductsMain[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareSteriProductsMainQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareSteriProductsMainQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareSteriProductsMain', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareSteriProductsMainQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareSteriProductsMainQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareSteriProductsMainQuery) {
            return $criteria;
        }
        $query = new ChildCareSteriProductsMainQuery();
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
     * @return ChildCareSteriProductsMain|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareSteriProductsMain object has no primary key');
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
        throw new LogicException('The CareSteriProductsMain object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareSteriProductsMain object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareSteriProductsMain object has no primary key');
    }

    /**
     * Filter the query on the bestellnum column
     *
     * Example usage:
     * <code>
     * $query->filterByBestellnum(1234); // WHERE bestellnum = 1234
     * $query->filterByBestellnum(array(12, 34)); // WHERE bestellnum IN (12, 34)
     * $query->filterByBestellnum(array('min' => 12)); // WHERE bestellnum > 12
     * </code>
     *
     * @param     mixed $bestellnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByBestellnum($bestellnum = null, $comparison = null)
    {
        if (is_array($bestellnum)) {
            $useMinMax = false;
            if (isset($bestellnum['min'])) {
                $this->addUsingAlias(CareSteriProductsMainTableMap::COL_BESTELLNUM, $bestellnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestellnum['max'])) {
                $this->addUsingAlias(CareSteriProductsMainTableMap::COL_BESTELLNUM, $bestellnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_BESTELLNUM, $bestellnum, $comparison);
    }

    /**
     * Filter the query on the containernum column
     *
     * Example usage:
     * <code>
     * $query->filterByContainernum('fooValue');   // WHERE containernum = 'fooValue'
     * $query->filterByContainernum('%fooValue%', Criteria::LIKE); // WHERE containernum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $containernum The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByContainernum($containernum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($containernum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_CONTAINERNUM, $containernum, $comparison);
    }

    /**
     * Filter the query on the industrynum column
     *
     * Example usage:
     * <code>
     * $query->filterByIndustrynum('fooValue');   // WHERE industrynum = 'fooValue'
     * $query->filterByIndustrynum('%fooValue%', Criteria::LIKE); // WHERE industrynum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $industrynum The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByIndustrynum($industrynum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($industrynum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_INDUSTRYNUM, $industrynum, $comparison);
    }

    /**
     * Filter the query on the containername column
     *
     * Example usage:
     * <code>
     * $query->filterByContainername('fooValue');   // WHERE containername = 'fooValue'
     * $query->filterByContainername('%fooValue%', Criteria::LIKE); // WHERE containername LIKE '%fooValue%'
     * </code>
     *
     * @param     string $containername The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByContainername($containername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($containername)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_CONTAINERNAME, $containername, $comparison);
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
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the packing column
     *
     * Example usage:
     * <code>
     * $query->filterByPacking('fooValue');   // WHERE packing = 'fooValue'
     * $query->filterByPacking('%fooValue%', Criteria::LIKE); // WHERE packing LIKE '%fooValue%'
     * </code>
     *
     * @param     string $packing The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByPacking($packing = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($packing)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_PACKING, $packing, $comparison);
    }

    /**
     * Filter the query on the minorder column
     *
     * Example usage:
     * <code>
     * $query->filterByMinorder(1234); // WHERE minorder = 1234
     * $query->filterByMinorder(array(12, 34)); // WHERE minorder IN (12, 34)
     * $query->filterByMinorder(array('min' => 12)); // WHERE minorder > 12
     * </code>
     *
     * @param     mixed $minorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByMinorder($minorder = null, $comparison = null)
    {
        if (is_array($minorder)) {
            $useMinMax = false;
            if (isset($minorder['min'])) {
                $this->addUsingAlias(CareSteriProductsMainTableMap::COL_MINORDER, $minorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minorder['max'])) {
                $this->addUsingAlias(CareSteriProductsMainTableMap::COL_MINORDER, $minorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_MINORDER, $minorder, $comparison);
    }

    /**
     * Filter the query on the maxorder column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxorder(1234); // WHERE maxorder = 1234
     * $query->filterByMaxorder(array(12, 34)); // WHERE maxorder IN (12, 34)
     * $query->filterByMaxorder(array('min' => 12)); // WHERE maxorder > 12
     * </code>
     *
     * @param     mixed $maxorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByMaxorder($maxorder = null, $comparison = null)
    {
        if (is_array($maxorder)) {
            $useMinMax = false;
            if (isset($maxorder['min'])) {
                $this->addUsingAlias(CareSteriProductsMainTableMap::COL_MAXORDER, $maxorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxorder['max'])) {
                $this->addUsingAlias(CareSteriProductsMainTableMap::COL_MAXORDER, $maxorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_MAXORDER, $maxorder, $comparison);
    }

    /**
     * Filter the query on the proorder column
     *
     * Example usage:
     * <code>
     * $query->filterByProorder('fooValue');   // WHERE proorder = 'fooValue'
     * $query->filterByProorder('%fooValue%', Criteria::LIKE); // WHERE proorder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proorder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByProorder($proorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proorder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_PROORDER, $proorder, $comparison);
    }

    /**
     * Filter the query on the picfile column
     *
     * Example usage:
     * <code>
     * $query->filterByPicfile('fooValue');   // WHERE picfile = 'fooValue'
     * $query->filterByPicfile('%fooValue%', Criteria::LIKE); // WHERE picfile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picfile The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByPicfile($picfile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picfile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_PICFILE, $picfile, $comparison);
    }

    /**
     * Filter the query on the encoder column
     *
     * Example usage:
     * <code>
     * $query->filterByEncoder('fooValue');   // WHERE encoder = 'fooValue'
     * $query->filterByEncoder('%fooValue%', Criteria::LIKE); // WHERE encoder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encoder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByEncoder($encoder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encoder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_ENCODER, $encoder, $comparison);
    }

    /**
     * Filter the query on the enc_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEncDate('fooValue');   // WHERE enc_date = 'fooValue'
     * $query->filterByEncDate('%fooValue%', Criteria::LIKE); // WHERE enc_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encDate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByEncDate($encDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encDate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_ENC_DATE, $encDate, $comparison);
    }

    /**
     * Filter the query on the enc_time column
     *
     * Example usage:
     * <code>
     * $query->filterByEncTime('fooValue');   // WHERE enc_time = 'fooValue'
     * $query->filterByEncTime('%fooValue%', Criteria::LIKE); // WHERE enc_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByEncTime($encTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_ENC_TIME, $encTime, $comparison);
    }

    /**
     * Filter the query on the lock_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByLockFlag(true); // WHERE lock_flag = true
     * $query->filterByLockFlag('yes'); // WHERE lock_flag = true
     * </code>
     *
     * @param     boolean|string $lockFlag The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByLockFlag($lockFlag = null, $comparison = null)
    {
        if (is_string($lockFlag)) {
            $lockFlag = in_array(strtolower($lockFlag), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_LOCK_FLAG, $lockFlag, $comparison);
    }

    /**
     * Filter the query on the medgroup column
     *
     * Example usage:
     * <code>
     * $query->filterByMedgroup('fooValue');   // WHERE medgroup = 'fooValue'
     * $query->filterByMedgroup('%fooValue%', Criteria::LIKE); // WHERE medgroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medgroup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByMedgroup($medgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medgroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_MEDGROUP, $medgroup, $comparison);
    }

    /**
     * Filter the query on the cave column
     *
     * Example usage:
     * <code>
     * $query->filterByCave('fooValue');   // WHERE cave = 'fooValue'
     * $query->filterByCave('%fooValue%', Criteria::LIKE); // WHERE cave LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cave The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function filterByCave($cave = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cave)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareSteriProductsMainTableMap::COL_CAVE, $cave, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareSteriProductsMain $careSteriProductsMain Object to remove from the list of results
     *
     * @return $this|ChildCareSteriProductsMainQuery The current query, for fluid interface
     */
    public function prune($careSteriProductsMain = null)
    {
        if ($careSteriProductsMain) {
            throw new LogicException('CareSteriProductsMain object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_steri_products_main table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareSteriProductsMainTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareSteriProductsMainTableMap::clearInstancePool();
            CareSteriProductsMainTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareSteriProductsMainTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareSteriProductsMainTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareSteriProductsMainTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareSteriProductsMainTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareSteriProductsMainQuery
