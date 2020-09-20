<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzDhisElement as ChildCareTzDhisElement;
use CareMd\CareMd\CareTzDhisElementQuery as ChildCareTzDhisElementQuery;
use CareMd\CareMd\Map\CareTzDhisElementTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_dhis_element' table.
 *
 *
 *
 * @method     ChildCareTzDhisElementQuery orderByCodeid($order = Criteria::ASC) Order by the codeid column
 * @method     ChildCareTzDhisElementQuery orderByIcdCode($order = Criteria::ASC) Order by the icd_code column
 * @method     ChildCareTzDhisElementQuery orderByDataelementId($order = Criteria::ASC) Order by the dataelement_id column
 * @method     ChildCareTzDhisElementQuery orderByCategoryid($order = Criteria::ASC) Order by the categoryid column
 * @method     ChildCareTzDhisElementQuery orderByOptionid($order = Criteria::ASC) Order by the optionid column
 * @method     ChildCareTzDhisElementQuery orderByIcdDeseaseName($order = Criteria::ASC) Order by the icd_desease_name column
 * @method     ChildCareTzDhisElementQuery orderByDhisDataelement($order = Criteria::ASC) Order by the dhis_dataelement column
 * @method     ChildCareTzDhisElementQuery orderByDhisUnder5($order = Criteria::ASC) Order by the dhis_under5 column
 * @method     ChildCareTzDhisElementQuery orderByDhisUnder5id($order = Criteria::ASC) Order by the dhis_under5id column
 *
 * @method     ChildCareTzDhisElementQuery groupByCodeid() Group by the codeid column
 * @method     ChildCareTzDhisElementQuery groupByIcdCode() Group by the icd_code column
 * @method     ChildCareTzDhisElementQuery groupByDataelementId() Group by the dataelement_id column
 * @method     ChildCareTzDhisElementQuery groupByCategoryid() Group by the categoryid column
 * @method     ChildCareTzDhisElementQuery groupByOptionid() Group by the optionid column
 * @method     ChildCareTzDhisElementQuery groupByIcdDeseaseName() Group by the icd_desease_name column
 * @method     ChildCareTzDhisElementQuery groupByDhisDataelement() Group by the dhis_dataelement column
 * @method     ChildCareTzDhisElementQuery groupByDhisUnder5() Group by the dhis_under5 column
 * @method     ChildCareTzDhisElementQuery groupByDhisUnder5id() Group by the dhis_under5id column
 *
 * @method     ChildCareTzDhisElementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzDhisElementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzDhisElementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzDhisElementQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzDhisElementQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzDhisElementQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzDhisElement findOne(ConnectionInterface $con = null) Return the first ChildCareTzDhisElement matching the query
 * @method     ChildCareTzDhisElement findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzDhisElement matching the query, or a new ChildCareTzDhisElement object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzDhisElement findOneByCodeid(int $codeid) Return the first ChildCareTzDhisElement filtered by the codeid column
 * @method     ChildCareTzDhisElement findOneByIcdCode(string $icd_code) Return the first ChildCareTzDhisElement filtered by the icd_code column
 * @method     ChildCareTzDhisElement findOneByDataelementId(int $dataelement_id) Return the first ChildCareTzDhisElement filtered by the dataelement_id column
 * @method     ChildCareTzDhisElement findOneByCategoryid(int $categoryid) Return the first ChildCareTzDhisElement filtered by the categoryid column
 * @method     ChildCareTzDhisElement findOneByOptionid(int $optionid) Return the first ChildCareTzDhisElement filtered by the optionid column
 * @method     ChildCareTzDhisElement findOneByIcdDeseaseName(string $icd_desease_name) Return the first ChildCareTzDhisElement filtered by the icd_desease_name column
 * @method     ChildCareTzDhisElement findOneByDhisDataelement(string $dhis_dataelement) Return the first ChildCareTzDhisElement filtered by the dhis_dataelement column
 * @method     ChildCareTzDhisElement findOneByDhisUnder5(string $dhis_under5) Return the first ChildCareTzDhisElement filtered by the dhis_under5 column
 * @method     ChildCareTzDhisElement findOneByDhisUnder5id(int $dhis_under5id) Return the first ChildCareTzDhisElement filtered by the dhis_under5id column *

 * @method     ChildCareTzDhisElement requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzDhisElement by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisElement requireOne(ConnectionInterface $con = null) Return the first ChildCareTzDhisElement matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDhisElement requireOneByCodeid(int $codeid) Return the first ChildCareTzDhisElement filtered by the codeid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisElement requireOneByIcdCode(string $icd_code) Return the first ChildCareTzDhisElement filtered by the icd_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisElement requireOneByDataelementId(int $dataelement_id) Return the first ChildCareTzDhisElement filtered by the dataelement_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisElement requireOneByCategoryid(int $categoryid) Return the first ChildCareTzDhisElement filtered by the categoryid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisElement requireOneByOptionid(int $optionid) Return the first ChildCareTzDhisElement filtered by the optionid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisElement requireOneByIcdDeseaseName(string $icd_desease_name) Return the first ChildCareTzDhisElement filtered by the icd_desease_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisElement requireOneByDhisDataelement(string $dhis_dataelement) Return the first ChildCareTzDhisElement filtered by the dhis_dataelement column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisElement requireOneByDhisUnder5(string $dhis_under5) Return the first ChildCareTzDhisElement filtered by the dhis_under5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDhisElement requireOneByDhisUnder5id(int $dhis_under5id) Return the first ChildCareTzDhisElement filtered by the dhis_under5id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDhisElement[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzDhisElement objects based on current ModelCriteria
 * @method     ChildCareTzDhisElement[]|ObjectCollection findByCodeid(int $codeid) Return ChildCareTzDhisElement objects filtered by the codeid column
 * @method     ChildCareTzDhisElement[]|ObjectCollection findByIcdCode(string $icd_code) Return ChildCareTzDhisElement objects filtered by the icd_code column
 * @method     ChildCareTzDhisElement[]|ObjectCollection findByDataelementId(int $dataelement_id) Return ChildCareTzDhisElement objects filtered by the dataelement_id column
 * @method     ChildCareTzDhisElement[]|ObjectCollection findByCategoryid(int $categoryid) Return ChildCareTzDhisElement objects filtered by the categoryid column
 * @method     ChildCareTzDhisElement[]|ObjectCollection findByOptionid(int $optionid) Return ChildCareTzDhisElement objects filtered by the optionid column
 * @method     ChildCareTzDhisElement[]|ObjectCollection findByIcdDeseaseName(string $icd_desease_name) Return ChildCareTzDhisElement objects filtered by the icd_desease_name column
 * @method     ChildCareTzDhisElement[]|ObjectCollection findByDhisDataelement(string $dhis_dataelement) Return ChildCareTzDhisElement objects filtered by the dhis_dataelement column
 * @method     ChildCareTzDhisElement[]|ObjectCollection findByDhisUnder5(string $dhis_under5) Return ChildCareTzDhisElement objects filtered by the dhis_under5 column
 * @method     ChildCareTzDhisElement[]|ObjectCollection findByDhisUnder5id(int $dhis_under5id) Return ChildCareTzDhisElement objects filtered by the dhis_under5id column
 * @method     ChildCareTzDhisElement[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzDhisElementQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzDhisElementQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzDhisElement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzDhisElementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzDhisElementQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzDhisElementQuery) {
            return $criteria;
        }
        $query = new ChildCareTzDhisElementQuery();
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
     * @return ChildCareTzDhisElement|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzDhisElementTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzDhisElementTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzDhisElement A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT codeid, icd_code, dataelement_id, categoryid, optionid, icd_desease_name, dhis_dataelement, dhis_under5, dhis_under5id FROM care_tz_dhis_element WHERE codeid = :p0';
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
            /** @var ChildCareTzDhisElement $obj */
            $obj = new ChildCareTzDhisElement();
            $obj->hydrate($row);
            CareTzDhisElementTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzDhisElement|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_CODEID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_CODEID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the codeid column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeid(1234); // WHERE codeid = 1234
     * $query->filterByCodeid(array(12, 34)); // WHERE codeid IN (12, 34)
     * $query->filterByCodeid(array('min' => 12)); // WHERE codeid > 12
     * </code>
     *
     * @param     mixed $codeid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByCodeid($codeid = null, $comparison = null)
    {
        if (is_array($codeid)) {
            $useMinMax = false;
            if (isset($codeid['min'])) {
                $this->addUsingAlias(CareTzDhisElementTableMap::COL_CODEID, $codeid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codeid['max'])) {
                $this->addUsingAlias(CareTzDhisElementTableMap::COL_CODEID, $codeid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_CODEID, $codeid, $comparison);
    }

    /**
     * Filter the query on the icd_code column
     *
     * Example usage:
     * <code>
     * $query->filterByIcdCode('fooValue');   // WHERE icd_code = 'fooValue'
     * $query->filterByIcdCode('%fooValue%', Criteria::LIKE); // WHERE icd_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icdCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByIcdCode($icdCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icdCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_ICD_CODE, $icdCode, $comparison);
    }

    /**
     * Filter the query on the dataelement_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDataelementId(1234); // WHERE dataelement_id = 1234
     * $query->filterByDataelementId(array(12, 34)); // WHERE dataelement_id IN (12, 34)
     * $query->filterByDataelementId(array('min' => 12)); // WHERE dataelement_id > 12
     * </code>
     *
     * @param     mixed $dataelementId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByDataelementId($dataelementId = null, $comparison = null)
    {
        if (is_array($dataelementId)) {
            $useMinMax = false;
            if (isset($dataelementId['min'])) {
                $this->addUsingAlias(CareTzDhisElementTableMap::COL_DATAELEMENT_ID, $dataelementId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataelementId['max'])) {
                $this->addUsingAlias(CareTzDhisElementTableMap::COL_DATAELEMENT_ID, $dataelementId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_DATAELEMENT_ID, $dataelementId, $comparison);
    }

    /**
     * Filter the query on the categoryid column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoryid(1234); // WHERE categoryid = 1234
     * $query->filterByCategoryid(array(12, 34)); // WHERE categoryid IN (12, 34)
     * $query->filterByCategoryid(array('min' => 12)); // WHERE categoryid > 12
     * </code>
     *
     * @param     mixed $categoryid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByCategoryid($categoryid = null, $comparison = null)
    {
        if (is_array($categoryid)) {
            $useMinMax = false;
            if (isset($categoryid['min'])) {
                $this->addUsingAlias(CareTzDhisElementTableMap::COL_CATEGORYID, $categoryid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categoryid['max'])) {
                $this->addUsingAlias(CareTzDhisElementTableMap::COL_CATEGORYID, $categoryid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_CATEGORYID, $categoryid, $comparison);
    }

    /**
     * Filter the query on the optionid column
     *
     * Example usage:
     * <code>
     * $query->filterByOptionid(1234); // WHERE optionid = 1234
     * $query->filterByOptionid(array(12, 34)); // WHERE optionid IN (12, 34)
     * $query->filterByOptionid(array('min' => 12)); // WHERE optionid > 12
     * </code>
     *
     * @param     mixed $optionid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByOptionid($optionid = null, $comparison = null)
    {
        if (is_array($optionid)) {
            $useMinMax = false;
            if (isset($optionid['min'])) {
                $this->addUsingAlias(CareTzDhisElementTableMap::COL_OPTIONID, $optionid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optionid['max'])) {
                $this->addUsingAlias(CareTzDhisElementTableMap::COL_OPTIONID, $optionid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_OPTIONID, $optionid, $comparison);
    }

    /**
     * Filter the query on the icd_desease_name column
     *
     * Example usage:
     * <code>
     * $query->filterByIcdDeseaseName('fooValue');   // WHERE icd_desease_name = 'fooValue'
     * $query->filterByIcdDeseaseName('%fooValue%', Criteria::LIKE); // WHERE icd_desease_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icdDeseaseName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByIcdDeseaseName($icdDeseaseName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icdDeseaseName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_ICD_DESEASE_NAME, $icdDeseaseName, $comparison);
    }

    /**
     * Filter the query on the dhis_dataelement column
     *
     * Example usage:
     * <code>
     * $query->filterByDhisDataelement('fooValue');   // WHERE dhis_dataelement = 'fooValue'
     * $query->filterByDhisDataelement('%fooValue%', Criteria::LIKE); // WHERE dhis_dataelement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dhisDataelement The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByDhisDataelement($dhisDataelement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dhisDataelement)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_DHIS_DATAELEMENT, $dhisDataelement, $comparison);
    }

    /**
     * Filter the query on the dhis_under5 column
     *
     * Example usage:
     * <code>
     * $query->filterByDhisUnder5('fooValue');   // WHERE dhis_under5 = 'fooValue'
     * $query->filterByDhisUnder5('%fooValue%', Criteria::LIKE); // WHERE dhis_under5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dhisUnder5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByDhisUnder5($dhisUnder5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dhisUnder5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_DHIS_UNDER5, $dhisUnder5, $comparison);
    }

    /**
     * Filter the query on the dhis_under5id column
     *
     * Example usage:
     * <code>
     * $query->filterByDhisUnder5id(1234); // WHERE dhis_under5id = 1234
     * $query->filterByDhisUnder5id(array(12, 34)); // WHERE dhis_under5id IN (12, 34)
     * $query->filterByDhisUnder5id(array('min' => 12)); // WHERE dhis_under5id > 12
     * </code>
     *
     * @param     mixed $dhisUnder5id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function filterByDhisUnder5id($dhisUnder5id = null, $comparison = null)
    {
        if (is_array($dhisUnder5id)) {
            $useMinMax = false;
            if (isset($dhisUnder5id['min'])) {
                $this->addUsingAlias(CareTzDhisElementTableMap::COL_DHIS_UNDER5ID, $dhisUnder5id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dhisUnder5id['max'])) {
                $this->addUsingAlias(CareTzDhisElementTableMap::COL_DHIS_UNDER5ID, $dhisUnder5id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDhisElementTableMap::COL_DHIS_UNDER5ID, $dhisUnder5id, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzDhisElement $careTzDhisElement Object to remove from the list of results
     *
     * @return $this|ChildCareTzDhisElementQuery The current query, for fluid interface
     */
    public function prune($careTzDhisElement = null)
    {
        if ($careTzDhisElement) {
            $this->addUsingAlias(CareTzDhisElementTableMap::COL_CODEID, $careTzDhisElement->getCodeid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_dhis_element table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDhisElementTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzDhisElementTableMap::clearInstancePool();
            CareTzDhisElementTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDhisElementTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzDhisElementTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzDhisElementTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzDhisElementTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzDhisElementQuery
