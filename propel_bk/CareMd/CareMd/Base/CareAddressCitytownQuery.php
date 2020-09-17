<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareAddressCitytown as ChildCareAddressCitytown;
use CareMd\CareMd\CareAddressCitytownQuery as ChildCareAddressCitytownQuery;
use CareMd\CareMd\Map\CareAddressCitytownTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_address_citytown' table.
 *
 *
 *
 * @method     ChildCareAddressCitytownQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareAddressCitytownQuery orderByUneceModifier($order = Criteria::ASC) Order by the unece_modifier column
 * @method     ChildCareAddressCitytownQuery orderByUneceLocode($order = Criteria::ASC) Order by the unece_locode column
 * @method     ChildCareAddressCitytownQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareAddressCitytownQuery orderByZipCode($order = Criteria::ASC) Order by the zip_code column
 * @method     ChildCareAddressCitytownQuery orderByIsoCountryId($order = Criteria::ASC) Order by the iso_country_id column
 * @method     ChildCareAddressCitytownQuery orderByUneceLocodeType($order = Criteria::ASC) Order by the unece_locode_type column
 * @method     ChildCareAddressCitytownQuery orderByUneceCoordinates($order = Criteria::ASC) Order by the unece_coordinates column
 * @method     ChildCareAddressCitytownQuery orderByInfoUrl($order = Criteria::ASC) Order by the info_url column
 * @method     ChildCareAddressCitytownQuery orderByUseFrequency($order = Criteria::ASC) Order by the use_frequency column
 * @method     ChildCareAddressCitytownQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareAddressCitytownQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareAddressCitytownQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareAddressCitytownQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareAddressCitytownQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareAddressCitytownQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareAddressCitytownQuery orderByIsAdditional($order = Criteria::ASC) Order by the is_additional column
 *
 * @method     ChildCareAddressCitytownQuery groupByNr() Group by the nr column
 * @method     ChildCareAddressCitytownQuery groupByUneceModifier() Group by the unece_modifier column
 * @method     ChildCareAddressCitytownQuery groupByUneceLocode() Group by the unece_locode column
 * @method     ChildCareAddressCitytownQuery groupByName() Group by the name column
 * @method     ChildCareAddressCitytownQuery groupByZipCode() Group by the zip_code column
 * @method     ChildCareAddressCitytownQuery groupByIsoCountryId() Group by the iso_country_id column
 * @method     ChildCareAddressCitytownQuery groupByUneceLocodeType() Group by the unece_locode_type column
 * @method     ChildCareAddressCitytownQuery groupByUneceCoordinates() Group by the unece_coordinates column
 * @method     ChildCareAddressCitytownQuery groupByInfoUrl() Group by the info_url column
 * @method     ChildCareAddressCitytownQuery groupByUseFrequency() Group by the use_frequency column
 * @method     ChildCareAddressCitytownQuery groupByStatus() Group by the status column
 * @method     ChildCareAddressCitytownQuery groupByHistory() Group by the history column
 * @method     ChildCareAddressCitytownQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareAddressCitytownQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareAddressCitytownQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareAddressCitytownQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareAddressCitytownQuery groupByIsAdditional() Group by the is_additional column
 *
 * @method     ChildCareAddressCitytownQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareAddressCitytownQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareAddressCitytownQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareAddressCitytownQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareAddressCitytownQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareAddressCitytownQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareAddressCitytown findOne(ConnectionInterface $con = null) Return the first ChildCareAddressCitytown matching the query
 * @method     ChildCareAddressCitytown findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareAddressCitytown matching the query, or a new ChildCareAddressCitytown object populated from the query conditions when no match is found
 *
 * @method     ChildCareAddressCitytown findOneByNr(int $nr) Return the first ChildCareAddressCitytown filtered by the nr column
 * @method     ChildCareAddressCitytown findOneByUneceModifier(string $unece_modifier) Return the first ChildCareAddressCitytown filtered by the unece_modifier column
 * @method     ChildCareAddressCitytown findOneByUneceLocode(string $unece_locode) Return the first ChildCareAddressCitytown filtered by the unece_locode column
 * @method     ChildCareAddressCitytown findOneByName(string $name) Return the first ChildCareAddressCitytown filtered by the name column
 * @method     ChildCareAddressCitytown findOneByZipCode(string $zip_code) Return the first ChildCareAddressCitytown filtered by the zip_code column
 * @method     ChildCareAddressCitytown findOneByIsoCountryId(string $iso_country_id) Return the first ChildCareAddressCitytown filtered by the iso_country_id column
 * @method     ChildCareAddressCitytown findOneByUneceLocodeType(int $unece_locode_type) Return the first ChildCareAddressCitytown filtered by the unece_locode_type column
 * @method     ChildCareAddressCitytown findOneByUneceCoordinates(string $unece_coordinates) Return the first ChildCareAddressCitytown filtered by the unece_coordinates column
 * @method     ChildCareAddressCitytown findOneByInfoUrl(string $info_url) Return the first ChildCareAddressCitytown filtered by the info_url column
 * @method     ChildCareAddressCitytown findOneByUseFrequency(string $use_frequency) Return the first ChildCareAddressCitytown filtered by the use_frequency column
 * @method     ChildCareAddressCitytown findOneByStatus(string $status) Return the first ChildCareAddressCitytown filtered by the status column
 * @method     ChildCareAddressCitytown findOneByHistory(string $history) Return the first ChildCareAddressCitytown filtered by the history column
 * @method     ChildCareAddressCitytown findOneByModifyId(string $modify_id) Return the first ChildCareAddressCitytown filtered by the modify_id column
 * @method     ChildCareAddressCitytown findOneByModifyTime(string $modify_time) Return the first ChildCareAddressCitytown filtered by the modify_time column
 * @method     ChildCareAddressCitytown findOneByCreateId(string $create_id) Return the first ChildCareAddressCitytown filtered by the create_id column
 * @method     ChildCareAddressCitytown findOneByCreateTime(string $create_time) Return the first ChildCareAddressCitytown filtered by the create_time column
 * @method     ChildCareAddressCitytown findOneByIsAdditional(int $is_additional) Return the first ChildCareAddressCitytown filtered by the is_additional column *

 * @method     ChildCareAddressCitytown requirePk($key, ConnectionInterface $con = null) Return the ChildCareAddressCitytown by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOne(ConnectionInterface $con = null) Return the first ChildCareAddressCitytown matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareAddressCitytown requireOneByNr(int $nr) Return the first ChildCareAddressCitytown filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByUneceModifier(string $unece_modifier) Return the first ChildCareAddressCitytown filtered by the unece_modifier column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByUneceLocode(string $unece_locode) Return the first ChildCareAddressCitytown filtered by the unece_locode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByName(string $name) Return the first ChildCareAddressCitytown filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByZipCode(string $zip_code) Return the first ChildCareAddressCitytown filtered by the zip_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByIsoCountryId(string $iso_country_id) Return the first ChildCareAddressCitytown filtered by the iso_country_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByUneceLocodeType(int $unece_locode_type) Return the first ChildCareAddressCitytown filtered by the unece_locode_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByUneceCoordinates(string $unece_coordinates) Return the first ChildCareAddressCitytown filtered by the unece_coordinates column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByInfoUrl(string $info_url) Return the first ChildCareAddressCitytown filtered by the info_url column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByUseFrequency(string $use_frequency) Return the first ChildCareAddressCitytown filtered by the use_frequency column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByStatus(string $status) Return the first ChildCareAddressCitytown filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByHistory(string $history) Return the first ChildCareAddressCitytown filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByModifyId(string $modify_id) Return the first ChildCareAddressCitytown filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByModifyTime(string $modify_time) Return the first ChildCareAddressCitytown filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByCreateId(string $create_id) Return the first ChildCareAddressCitytown filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByCreateTime(string $create_time) Return the first ChildCareAddressCitytown filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareAddressCitytown requireOneByIsAdditional(int $is_additional) Return the first ChildCareAddressCitytown filtered by the is_additional column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareAddressCitytown[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareAddressCitytown objects based on current ModelCriteria
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByNr(int $nr) Return ChildCareAddressCitytown objects filtered by the nr column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByUneceModifier(string $unece_modifier) Return ChildCareAddressCitytown objects filtered by the unece_modifier column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByUneceLocode(string $unece_locode) Return ChildCareAddressCitytown objects filtered by the unece_locode column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByName(string $name) Return ChildCareAddressCitytown objects filtered by the name column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByZipCode(string $zip_code) Return ChildCareAddressCitytown objects filtered by the zip_code column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByIsoCountryId(string $iso_country_id) Return ChildCareAddressCitytown objects filtered by the iso_country_id column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByUneceLocodeType(int $unece_locode_type) Return ChildCareAddressCitytown objects filtered by the unece_locode_type column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByUneceCoordinates(string $unece_coordinates) Return ChildCareAddressCitytown objects filtered by the unece_coordinates column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByInfoUrl(string $info_url) Return ChildCareAddressCitytown objects filtered by the info_url column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByUseFrequency(string $use_frequency) Return ChildCareAddressCitytown objects filtered by the use_frequency column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByStatus(string $status) Return ChildCareAddressCitytown objects filtered by the status column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByHistory(string $history) Return ChildCareAddressCitytown objects filtered by the history column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareAddressCitytown objects filtered by the modify_id column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareAddressCitytown objects filtered by the modify_time column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareAddressCitytown objects filtered by the create_id column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareAddressCitytown objects filtered by the create_time column
 * @method     ChildCareAddressCitytown[]|ObjectCollection findByIsAdditional(int $is_additional) Return ChildCareAddressCitytown objects filtered by the is_additional column
 * @method     ChildCareAddressCitytown[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareAddressCitytownQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareAddressCitytownQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareAddressCitytown', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareAddressCitytownQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareAddressCitytownQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareAddressCitytownQuery) {
            return $criteria;
        }
        $query = new ChildCareAddressCitytownQuery();
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
     * @return ChildCareAddressCitytown|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareAddressCitytownTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareAddressCitytownTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareAddressCitytown A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, unece_modifier, unece_locode, name, zip_code, iso_country_id, unece_locode_type, unece_coordinates, info_url, use_frequency, status, history, modify_id, modify_time, create_id, create_time, is_additional FROM care_address_citytown WHERE nr = :p0';
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
            /** @var ChildCareAddressCitytown $obj */
            $obj = new ChildCareAddressCitytown();
            $obj->hydrate($row);
            CareAddressCitytownTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareAddressCitytown|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the unece_modifier column
     *
     * Example usage:
     * <code>
     * $query->filterByUneceModifier('fooValue');   // WHERE unece_modifier = 'fooValue'
     * $query->filterByUneceModifier('%fooValue%', Criteria::LIKE); // WHERE unece_modifier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uneceModifier The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByUneceModifier($uneceModifier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uneceModifier)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_UNECE_MODIFIER, $uneceModifier, $comparison);
    }

    /**
     * Filter the query on the unece_locode column
     *
     * Example usage:
     * <code>
     * $query->filterByUneceLocode('fooValue');   // WHERE unece_locode = 'fooValue'
     * $query->filterByUneceLocode('%fooValue%', Criteria::LIKE); // WHERE unece_locode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uneceLocode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByUneceLocode($uneceLocode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uneceLocode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_UNECE_LOCODE, $uneceLocode, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the zip_code column
     *
     * Example usage:
     * <code>
     * $query->filterByZipCode('fooValue');   // WHERE zip_code = 'fooValue'
     * $query->filterByZipCode('%fooValue%', Criteria::LIKE); // WHERE zip_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zipCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByZipCode($zipCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zipCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_ZIP_CODE, $zipCode, $comparison);
    }

    /**
     * Filter the query on the iso_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByIsoCountryId('fooValue');   // WHERE iso_country_id = 'fooValue'
     * $query->filterByIsoCountryId('%fooValue%', Criteria::LIKE); // WHERE iso_country_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isoCountryId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByIsoCountryId($isoCountryId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isoCountryId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_ISO_COUNTRY_ID, $isoCountryId, $comparison);
    }

    /**
     * Filter the query on the unece_locode_type column
     *
     * Example usage:
     * <code>
     * $query->filterByUneceLocodeType(1234); // WHERE unece_locode_type = 1234
     * $query->filterByUneceLocodeType(array(12, 34)); // WHERE unece_locode_type IN (12, 34)
     * $query->filterByUneceLocodeType(array('min' => 12)); // WHERE unece_locode_type > 12
     * </code>
     *
     * @param     mixed $uneceLocodeType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByUneceLocodeType($uneceLocodeType = null, $comparison = null)
    {
        if (is_array($uneceLocodeType)) {
            $useMinMax = false;
            if (isset($uneceLocodeType['min'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_UNECE_LOCODE_TYPE, $uneceLocodeType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uneceLocodeType['max'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_UNECE_LOCODE_TYPE, $uneceLocodeType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_UNECE_LOCODE_TYPE, $uneceLocodeType, $comparison);
    }

    /**
     * Filter the query on the unece_coordinates column
     *
     * Example usage:
     * <code>
     * $query->filterByUneceCoordinates('fooValue');   // WHERE unece_coordinates = 'fooValue'
     * $query->filterByUneceCoordinates('%fooValue%', Criteria::LIKE); // WHERE unece_coordinates LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uneceCoordinates The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByUneceCoordinates($uneceCoordinates = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uneceCoordinates)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_UNECE_COORDINATES, $uneceCoordinates, $comparison);
    }

    /**
     * Filter the query on the info_url column
     *
     * Example usage:
     * <code>
     * $query->filterByInfoUrl('fooValue');   // WHERE info_url = 'fooValue'
     * $query->filterByInfoUrl('%fooValue%', Criteria::LIKE); // WHERE info_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $infoUrl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByInfoUrl($infoUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($infoUrl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_INFO_URL, $infoUrl, $comparison);
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
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByUseFrequency($useFrequency = null, $comparison = null)
    {
        if (is_array($useFrequency)) {
            $useMinMax = false;
            if (isset($useFrequency['min'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_USE_FREQUENCY, $useFrequency['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($useFrequency['max'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_USE_FREQUENCY, $useFrequency['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_USE_FREQUENCY, $useFrequency, $comparison);
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
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Filter the query on the is_additional column
     *
     * Example usage:
     * <code>
     * $query->filterByIsAdditional(1234); // WHERE is_additional = 1234
     * $query->filterByIsAdditional(array(12, 34)); // WHERE is_additional IN (12, 34)
     * $query->filterByIsAdditional(array('min' => 12)); // WHERE is_additional > 12
     * </code>
     *
     * @param     mixed $isAdditional The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function filterByIsAdditional($isAdditional = null, $comparison = null)
    {
        if (is_array($isAdditional)) {
            $useMinMax = false;
            if (isset($isAdditional['min'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_IS_ADDITIONAL, $isAdditional['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isAdditional['max'])) {
                $this->addUsingAlias(CareAddressCitytownTableMap::COL_IS_ADDITIONAL, $isAdditional['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareAddressCitytownTableMap::COL_IS_ADDITIONAL, $isAdditional, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareAddressCitytown $careAddressCitytown Object to remove from the list of results
     *
     * @return $this|ChildCareAddressCitytownQuery The current query, for fluid interface
     */
    public function prune($careAddressCitytown = null)
    {
        if ($careAddressCitytown) {
            $this->addUsingAlias(CareAddressCitytownTableMap::COL_NR, $careAddressCitytown->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_address_citytown table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareAddressCitytownTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareAddressCitytownTableMap::clearInstancePool();
            CareAddressCitytownTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareAddressCitytownTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareAddressCitytownTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareAddressCitytownTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareAddressCitytownTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareAddressCitytownQuery
