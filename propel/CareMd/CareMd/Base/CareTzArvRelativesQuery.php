<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvRelatives as ChildCareTzArvRelatives;
use CareMd\CareMd\CareTzArvRelativesQuery as ChildCareTzArvRelativesQuery;
use CareMd\CareMd\Map\CareTzArvRelativesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_relatives' table.
 *
 *
 *
 * @method     ChildCareTzArvRelativesQuery orderByCareTzArvRegistrationId($order = Criteria::ASC) Order by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvRelativesQuery orderByRelativeName($order = Criteria::ASC) Order by the relative_name column
 * @method     ChildCareTzArvRelativesQuery orderByCareTzArvRelativesCodeId($order = Criteria::ASC) Order by the care_tz_arv_relatives_code_id column
 * @method     ChildCareTzArvRelativesQuery orderByAge($order = Criteria::ASC) Order by the age column
 * @method     ChildCareTzArvRelativesQuery orderByHivStatus($order = Criteria::ASC) Order by the hiv_status column
 * @method     ChildCareTzArvRelativesQuery orderByHivCareStatus($order = Criteria::ASC) Order by the hiv_care_status column
 * @method     ChildCareTzArvRelativesQuery orderByRelativeCtcId($order = Criteria::ASC) Order by the relative_ctc_id column
 * @method     ChildCareTzArvRelativesQuery orderByFacilityFileNo($order = Criteria::ASC) Order by the facility_file_no column
 * @method     ChildCareTzArvRelativesQuery orderByHistory($order = Criteria::ASC) Order by the history column
 *
 * @method     ChildCareTzArvRelativesQuery groupByCareTzArvRegistrationId() Group by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvRelativesQuery groupByRelativeName() Group by the relative_name column
 * @method     ChildCareTzArvRelativesQuery groupByCareTzArvRelativesCodeId() Group by the care_tz_arv_relatives_code_id column
 * @method     ChildCareTzArvRelativesQuery groupByAge() Group by the age column
 * @method     ChildCareTzArvRelativesQuery groupByHivStatus() Group by the hiv_status column
 * @method     ChildCareTzArvRelativesQuery groupByHivCareStatus() Group by the hiv_care_status column
 * @method     ChildCareTzArvRelativesQuery groupByRelativeCtcId() Group by the relative_ctc_id column
 * @method     ChildCareTzArvRelativesQuery groupByFacilityFileNo() Group by the facility_file_no column
 * @method     ChildCareTzArvRelativesQuery groupByHistory() Group by the history column
 *
 * @method     ChildCareTzArvRelativesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvRelativesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvRelativesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvRelativesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvRelativesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvRelativesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvRelatives findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvRelatives matching the query
 * @method     ChildCareTzArvRelatives findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvRelatives matching the query, or a new ChildCareTzArvRelatives object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvRelatives findOneByCareTzArvRegistrationId(int $care_tz_arv_registration_id) Return the first ChildCareTzArvRelatives filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvRelatives findOneByRelativeName(string $relative_name) Return the first ChildCareTzArvRelatives filtered by the relative_name column
 * @method     ChildCareTzArvRelatives findOneByCareTzArvRelativesCodeId(int $care_tz_arv_relatives_code_id) Return the first ChildCareTzArvRelatives filtered by the care_tz_arv_relatives_code_id column
 * @method     ChildCareTzArvRelatives findOneByAge(int $age) Return the first ChildCareTzArvRelatives filtered by the age column
 * @method     ChildCareTzArvRelatives findOneByHivStatus(string $hiv_status) Return the first ChildCareTzArvRelatives filtered by the hiv_status column
 * @method     ChildCareTzArvRelatives findOneByHivCareStatus(string $hiv_care_status) Return the first ChildCareTzArvRelatives filtered by the hiv_care_status column
 * @method     ChildCareTzArvRelatives findOneByRelativeCtcId(string $relative_ctc_id) Return the first ChildCareTzArvRelatives filtered by the relative_ctc_id column
 * @method     ChildCareTzArvRelatives findOneByFacilityFileNo(string $facility_file_no) Return the first ChildCareTzArvRelatives filtered by the facility_file_no column
 * @method     ChildCareTzArvRelatives findOneByHistory(string $history) Return the first ChildCareTzArvRelatives filtered by the history column *

 * @method     ChildCareTzArvRelatives requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvRelatives by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRelatives requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvRelatives matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvRelatives requireOneByCareTzArvRegistrationId(int $care_tz_arv_registration_id) Return the first ChildCareTzArvRelatives filtered by the care_tz_arv_registration_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRelatives requireOneByRelativeName(string $relative_name) Return the first ChildCareTzArvRelatives filtered by the relative_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRelatives requireOneByCareTzArvRelativesCodeId(int $care_tz_arv_relatives_code_id) Return the first ChildCareTzArvRelatives filtered by the care_tz_arv_relatives_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRelatives requireOneByAge(int $age) Return the first ChildCareTzArvRelatives filtered by the age column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRelatives requireOneByHivStatus(string $hiv_status) Return the first ChildCareTzArvRelatives filtered by the hiv_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRelatives requireOneByHivCareStatus(string $hiv_care_status) Return the first ChildCareTzArvRelatives filtered by the hiv_care_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRelatives requireOneByRelativeCtcId(string $relative_ctc_id) Return the first ChildCareTzArvRelatives filtered by the relative_ctc_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRelatives requireOneByFacilityFileNo(string $facility_file_no) Return the first ChildCareTzArvRelatives filtered by the facility_file_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRelatives requireOneByHistory(string $history) Return the first ChildCareTzArvRelatives filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvRelatives[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvRelatives objects based on current ModelCriteria
 * @method     ChildCareTzArvRelatives[]|ObjectCollection findByCareTzArvRegistrationId(int $care_tz_arv_registration_id) Return ChildCareTzArvRelatives objects filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvRelatives[]|ObjectCollection findByRelativeName(string $relative_name) Return ChildCareTzArvRelatives objects filtered by the relative_name column
 * @method     ChildCareTzArvRelatives[]|ObjectCollection findByCareTzArvRelativesCodeId(int $care_tz_arv_relatives_code_id) Return ChildCareTzArvRelatives objects filtered by the care_tz_arv_relatives_code_id column
 * @method     ChildCareTzArvRelatives[]|ObjectCollection findByAge(int $age) Return ChildCareTzArvRelatives objects filtered by the age column
 * @method     ChildCareTzArvRelatives[]|ObjectCollection findByHivStatus(string $hiv_status) Return ChildCareTzArvRelatives objects filtered by the hiv_status column
 * @method     ChildCareTzArvRelatives[]|ObjectCollection findByHivCareStatus(string $hiv_care_status) Return ChildCareTzArvRelatives objects filtered by the hiv_care_status column
 * @method     ChildCareTzArvRelatives[]|ObjectCollection findByRelativeCtcId(string $relative_ctc_id) Return ChildCareTzArvRelatives objects filtered by the relative_ctc_id column
 * @method     ChildCareTzArvRelatives[]|ObjectCollection findByFacilityFileNo(string $facility_file_no) Return ChildCareTzArvRelatives objects filtered by the facility_file_no column
 * @method     ChildCareTzArvRelatives[]|ObjectCollection findByHistory(string $history) Return ChildCareTzArvRelatives objects filtered by the history column
 * @method     ChildCareTzArvRelatives[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvRelativesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvRelativesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvRelatives', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvRelativesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvRelativesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvRelativesQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvRelativesQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$care_tz_arv_registration_id, $relative_ctc_id, $facility_file_no] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTzArvRelatives|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvRelativesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvRelativesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildCareTzArvRelatives A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_registration_id, relative_name, care_tz_arv_relatives_code_id, age, hiv_status, hiv_care_status, relative_ctc_id, facility_file_no, history FROM care_tz_arv_relatives WHERE care_tz_arv_registration_id = :p0 AND relative_ctc_id = :p1 AND facility_file_no = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTzArvRelatives $obj */
            $obj = new ChildCareTzArvRelatives();
            $obj->hydrate($row);
            CareTzArvRelativesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildCareTzArvRelatives|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTzArvRelativesTableMap::COL_RELATIVE_CTC_ID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CareTzArvRelativesTableMap::COL_FACILITY_FILE_NO, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTzArvRelativesTableMap::COL_RELATIVE_CTC_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CareTzArvRelativesTableMap::COL_FACILITY_FILE_NO, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegistrationId($careTzArvRegistrationId = null, $comparison = null)
    {
        if (is_array($careTzArvRegistrationId)) {
            $useMinMax = false;
            if (isset($careTzArvRegistrationId['min'])) {
                $this->addUsingAlias(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegistrationId['max'])) {
                $this->addUsingAlias(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId, $comparison);
    }

    /**
     * Filter the query on the relative_name column
     *
     * Example usage:
     * <code>
     * $query->filterByRelativeName('fooValue');   // WHERE relative_name = 'fooValue'
     * $query->filterByRelativeName('%fooValue%', Criteria::LIKE); // WHERE relative_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relativeName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByRelativeName($relativeName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relativeName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRelativesTableMap::COL_RELATIVE_NAME, $relativeName, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_relatives_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvRelativesCodeId(1234); // WHERE care_tz_arv_relatives_code_id = 1234
     * $query->filterByCareTzArvRelativesCodeId(array(12, 34)); // WHERE care_tz_arv_relatives_code_id IN (12, 34)
     * $query->filterByCareTzArvRelativesCodeId(array('min' => 12)); // WHERE care_tz_arv_relatives_code_id > 12
     * </code>
     *
     * @param     mixed $careTzArvRelativesCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRelativesCodeId($careTzArvRelativesCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvRelativesCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvRelativesCodeId['min'])) {
                $this->addUsingAlias(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_RELATIVES_CODE_ID, $careTzArvRelativesCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRelativesCodeId['max'])) {
                $this->addUsingAlias(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_RELATIVES_CODE_ID, $careTzArvRelativesCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_RELATIVES_CODE_ID, $careTzArvRelativesCodeId, $comparison);
    }

    /**
     * Filter the query on the age column
     *
     * Example usage:
     * <code>
     * $query->filterByAge(1234); // WHERE age = 1234
     * $query->filterByAge(array(12, 34)); // WHERE age IN (12, 34)
     * $query->filterByAge(array('min' => 12)); // WHERE age > 12
     * </code>
     *
     * @param     mixed $age The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByAge($age = null, $comparison = null)
    {
        if (is_array($age)) {
            $useMinMax = false;
            if (isset($age['min'])) {
                $this->addUsingAlias(CareTzArvRelativesTableMap::COL_AGE, $age['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($age['max'])) {
                $this->addUsingAlias(CareTzArvRelativesTableMap::COL_AGE, $age['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRelativesTableMap::COL_AGE, $age, $comparison);
    }

    /**
     * Filter the query on the hiv_status column
     *
     * Example usage:
     * <code>
     * $query->filterByHivStatus('fooValue');   // WHERE hiv_status = 'fooValue'
     * $query->filterByHivStatus('%fooValue%', Criteria::LIKE); // WHERE hiv_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hivStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByHivStatus($hivStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hivStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRelativesTableMap::COL_HIV_STATUS, $hivStatus, $comparison);
    }

    /**
     * Filter the query on the hiv_care_status column
     *
     * Example usage:
     * <code>
     * $query->filterByHivCareStatus('fooValue');   // WHERE hiv_care_status = 'fooValue'
     * $query->filterByHivCareStatus('%fooValue%', Criteria::LIKE); // WHERE hiv_care_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hivCareStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByHivCareStatus($hivCareStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hivCareStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRelativesTableMap::COL_HIV_CARE_STATUS, $hivCareStatus, $comparison);
    }

    /**
     * Filter the query on the relative_ctc_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelativeCtcId('fooValue');   // WHERE relative_ctc_id = 'fooValue'
     * $query->filterByRelativeCtcId('%fooValue%', Criteria::LIKE); // WHERE relative_ctc_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relativeCtcId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByRelativeCtcId($relativeCtcId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relativeCtcId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRelativesTableMap::COL_RELATIVE_CTC_ID, $relativeCtcId, $comparison);
    }

    /**
     * Filter the query on the facility_file_no column
     *
     * Example usage:
     * <code>
     * $query->filterByFacilityFileNo('fooValue');   // WHERE facility_file_no = 'fooValue'
     * $query->filterByFacilityFileNo('%fooValue%', Criteria::LIKE); // WHERE facility_file_no LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facilityFileNo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByFacilityFileNo($facilityFileNo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facilityFileNo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRelativesTableMap::COL_FACILITY_FILE_NO, $facilityFileNo, $comparison);
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
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRelativesTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvRelatives $careTzArvRelatives Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvRelativesQuery The current query, for fluid interface
     */
    public function prune($careTzArvRelatives = null)
    {
        if ($careTzArvRelatives) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID), $careTzArvRelatives->getCareTzArvRegistrationId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTzArvRelativesTableMap::COL_RELATIVE_CTC_ID), $careTzArvRelatives->getRelativeCtcId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CareTzArvRelativesTableMap::COL_FACILITY_FILE_NO), $careTzArvRelatives->getFacilityFileNo(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_relatives table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRelativesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvRelativesTableMap::clearInstancePool();
            CareTzArvRelativesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRelativesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvRelativesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvRelativesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvRelativesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvRelativesQuery
