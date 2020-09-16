<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvCase as ChildCareTzArvCase;
use CareMd\CareMd\CareTzArvCaseQuery as ChildCareTzArvCaseQuery;
use CareMd\CareMd\Map\CareTzArvCaseTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_case' table.
 *
 *
 *
 * @method     ChildCareTzArvCaseQuery orderByCareTzArvCaseId($order = Criteria::ASC) Order by the care_tz_arv_case_id column
 * @method     ChildCareTzArvCaseQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCareTzArvCaseQuery orderByDatetimeFirstHivtest($order = Criteria::ASC) Order by the datetime_first_hivtest column
 * @method     ChildCareTzArvCaseQuery orderByDatetimeStartArv($order = Criteria::ASC) Order by the datetime_start_arv column
 * @method     ChildCareTzArvCaseQuery orderByArvPid($order = Criteria::ASC) Order by the arv_pid column
 * @method     ChildCareTzArvCaseQuery orderByDistrict($order = Criteria::ASC) Order by the district column
 * @method     ChildCareTzArvCaseQuery orderByVillage($order = Criteria::ASC) Order by the village column
 * @method     ChildCareTzArvCaseQuery orderByStreet($order = Criteria::ASC) Order by the street column
 * @method     ChildCareTzArvCaseQuery orderByBalozi($order = Criteria::ASC) Order by the balozi column
 * @method     ChildCareTzArvCaseQuery orderByChairmanOfVillage($order = Criteria::ASC) Order by the chairman_of_village column
 * @method     ChildCareTzArvCaseQuery orderByHeadOfFamily($order = Criteria::ASC) Order by the head_of_family column
 * @method     ChildCareTzArvCaseQuery orderByNameOfSecretary($order = Criteria::ASC) Order by the name_of_secretary column
 * @method     ChildCareTzArvCaseQuery orderBySecretaryPhone($order = Criteria::ASC) Order by the secretary_phone column
 * @method     ChildCareTzArvCaseQuery orderBySecretaryAdress($order = Criteria::ASC) Order by the secretary_adress column
 * @method     ChildCareTzArvCaseQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTzArvCaseQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTzArvCaseQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareTzArvCaseQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTzArvCaseQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 *
 * @method     ChildCareTzArvCaseQuery groupByCareTzArvCaseId() Group by the care_tz_arv_case_id column
 * @method     ChildCareTzArvCaseQuery groupByPid() Group by the pid column
 * @method     ChildCareTzArvCaseQuery groupByDatetimeFirstHivtest() Group by the datetime_first_hivtest column
 * @method     ChildCareTzArvCaseQuery groupByDatetimeStartArv() Group by the datetime_start_arv column
 * @method     ChildCareTzArvCaseQuery groupByArvPid() Group by the arv_pid column
 * @method     ChildCareTzArvCaseQuery groupByDistrict() Group by the district column
 * @method     ChildCareTzArvCaseQuery groupByVillage() Group by the village column
 * @method     ChildCareTzArvCaseQuery groupByStreet() Group by the street column
 * @method     ChildCareTzArvCaseQuery groupByBalozi() Group by the balozi column
 * @method     ChildCareTzArvCaseQuery groupByChairmanOfVillage() Group by the chairman_of_village column
 * @method     ChildCareTzArvCaseQuery groupByHeadOfFamily() Group by the head_of_family column
 * @method     ChildCareTzArvCaseQuery groupByNameOfSecretary() Group by the name_of_secretary column
 * @method     ChildCareTzArvCaseQuery groupBySecretaryPhone() Group by the secretary_phone column
 * @method     ChildCareTzArvCaseQuery groupBySecretaryAdress() Group by the secretary_adress column
 * @method     ChildCareTzArvCaseQuery groupByHistory() Group by the history column
 * @method     ChildCareTzArvCaseQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTzArvCaseQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareTzArvCaseQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTzArvCaseQuery groupByModifyTime() Group by the modify_time column
 *
 * @method     ChildCareTzArvCaseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvCaseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvCaseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvCaseQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvCaseQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvCaseQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvCase findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvCase matching the query
 * @method     ChildCareTzArvCase findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvCase matching the query, or a new ChildCareTzArvCase object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvCase findOneByCareTzArvCaseId(string $care_tz_arv_case_id) Return the first ChildCareTzArvCase filtered by the care_tz_arv_case_id column
 * @method     ChildCareTzArvCase findOneByPid(int $pid) Return the first ChildCareTzArvCase filtered by the pid column
 * @method     ChildCareTzArvCase findOneByDatetimeFirstHivtest(string $datetime_first_hivtest) Return the first ChildCareTzArvCase filtered by the datetime_first_hivtest column
 * @method     ChildCareTzArvCase findOneByDatetimeStartArv(string $datetime_start_arv) Return the first ChildCareTzArvCase filtered by the datetime_start_arv column
 * @method     ChildCareTzArvCase findOneByArvPid(string $arv_pid) Return the first ChildCareTzArvCase filtered by the arv_pid column
 * @method     ChildCareTzArvCase findOneByDistrict(string $district) Return the first ChildCareTzArvCase filtered by the district column
 * @method     ChildCareTzArvCase findOneByVillage(string $village) Return the first ChildCareTzArvCase filtered by the village column
 * @method     ChildCareTzArvCase findOneByStreet(string $street) Return the first ChildCareTzArvCase filtered by the street column
 * @method     ChildCareTzArvCase findOneByBalozi(string $balozi) Return the first ChildCareTzArvCase filtered by the balozi column
 * @method     ChildCareTzArvCase findOneByChairmanOfVillage(string $chairman_of_village) Return the first ChildCareTzArvCase filtered by the chairman_of_village column
 * @method     ChildCareTzArvCase findOneByHeadOfFamily(string $head_of_family) Return the first ChildCareTzArvCase filtered by the head_of_family column
 * @method     ChildCareTzArvCase findOneByNameOfSecretary(string $name_of_secretary) Return the first ChildCareTzArvCase filtered by the name_of_secretary column
 * @method     ChildCareTzArvCase findOneBySecretaryPhone(string $secretary_phone) Return the first ChildCareTzArvCase filtered by the secretary_phone column
 * @method     ChildCareTzArvCase findOneBySecretaryAdress(string $secretary_adress) Return the first ChildCareTzArvCase filtered by the secretary_adress column
 * @method     ChildCareTzArvCase findOneByHistory(string $history) Return the first ChildCareTzArvCase filtered by the history column
 * @method     ChildCareTzArvCase findOneByCreateId(string $create_id) Return the first ChildCareTzArvCase filtered by the create_id column
 * @method     ChildCareTzArvCase findOneByCreateTime(string $create_time) Return the first ChildCareTzArvCase filtered by the create_time column
 * @method     ChildCareTzArvCase findOneByModifyId(string $modify_id) Return the first ChildCareTzArvCase filtered by the modify_id column
 * @method     ChildCareTzArvCase findOneByModifyTime(string $modify_time) Return the first ChildCareTzArvCase filtered by the modify_time column *

 * @method     ChildCareTzArvCase requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvCase by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvCase matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvCase requireOneByCareTzArvCaseId(string $care_tz_arv_case_id) Return the first ChildCareTzArvCase filtered by the care_tz_arv_case_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByPid(int $pid) Return the first ChildCareTzArvCase filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByDatetimeFirstHivtest(string $datetime_first_hivtest) Return the first ChildCareTzArvCase filtered by the datetime_first_hivtest column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByDatetimeStartArv(string $datetime_start_arv) Return the first ChildCareTzArvCase filtered by the datetime_start_arv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByArvPid(string $arv_pid) Return the first ChildCareTzArvCase filtered by the arv_pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByDistrict(string $district) Return the first ChildCareTzArvCase filtered by the district column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByVillage(string $village) Return the first ChildCareTzArvCase filtered by the village column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByStreet(string $street) Return the first ChildCareTzArvCase filtered by the street column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByBalozi(string $balozi) Return the first ChildCareTzArvCase filtered by the balozi column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByChairmanOfVillage(string $chairman_of_village) Return the first ChildCareTzArvCase filtered by the chairman_of_village column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByHeadOfFamily(string $head_of_family) Return the first ChildCareTzArvCase filtered by the head_of_family column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByNameOfSecretary(string $name_of_secretary) Return the first ChildCareTzArvCase filtered by the name_of_secretary column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneBySecretaryPhone(string $secretary_phone) Return the first ChildCareTzArvCase filtered by the secretary_phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneBySecretaryAdress(string $secretary_adress) Return the first ChildCareTzArvCase filtered by the secretary_adress column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByHistory(string $history) Return the first ChildCareTzArvCase filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByCreateId(string $create_id) Return the first ChildCareTzArvCase filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByCreateTime(string $create_time) Return the first ChildCareTzArvCase filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByModifyId(string $modify_id) Return the first ChildCareTzArvCase filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCase requireOneByModifyTime(string $modify_time) Return the first ChildCareTzArvCase filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvCase[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvCase objects based on current ModelCriteria
 * @method     ChildCareTzArvCase[]|ObjectCollection findByCareTzArvCaseId(string $care_tz_arv_case_id) Return ChildCareTzArvCase objects filtered by the care_tz_arv_case_id column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByPid(int $pid) Return ChildCareTzArvCase objects filtered by the pid column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByDatetimeFirstHivtest(string $datetime_first_hivtest) Return ChildCareTzArvCase objects filtered by the datetime_first_hivtest column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByDatetimeStartArv(string $datetime_start_arv) Return ChildCareTzArvCase objects filtered by the datetime_start_arv column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByArvPid(string $arv_pid) Return ChildCareTzArvCase objects filtered by the arv_pid column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByDistrict(string $district) Return ChildCareTzArvCase objects filtered by the district column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByVillage(string $village) Return ChildCareTzArvCase objects filtered by the village column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByStreet(string $street) Return ChildCareTzArvCase objects filtered by the street column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByBalozi(string $balozi) Return ChildCareTzArvCase objects filtered by the balozi column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByChairmanOfVillage(string $chairman_of_village) Return ChildCareTzArvCase objects filtered by the chairman_of_village column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByHeadOfFamily(string $head_of_family) Return ChildCareTzArvCase objects filtered by the head_of_family column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByNameOfSecretary(string $name_of_secretary) Return ChildCareTzArvCase objects filtered by the name_of_secretary column
 * @method     ChildCareTzArvCase[]|ObjectCollection findBySecretaryPhone(string $secretary_phone) Return ChildCareTzArvCase objects filtered by the secretary_phone column
 * @method     ChildCareTzArvCase[]|ObjectCollection findBySecretaryAdress(string $secretary_adress) Return ChildCareTzArvCase objects filtered by the secretary_adress column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByHistory(string $history) Return ChildCareTzArvCase objects filtered by the history column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTzArvCase objects filtered by the create_id column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTzArvCase objects filtered by the create_time column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTzArvCase objects filtered by the modify_id column
 * @method     ChildCareTzArvCase[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTzArvCase objects filtered by the modify_time column
 * @method     ChildCareTzArvCase[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvCaseQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvCaseQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvCase', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvCaseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvCaseQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvCaseQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvCaseQuery();
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
     * @return ChildCareTzArvCase|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvCaseTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvCaseTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvCase A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_case_id, pid, datetime_first_hivtest, datetime_start_arv, arv_pid, district, village, street, balozi, chairman_of_village, head_of_family, name_of_secretary, secretary_phone, secretary_adress, history, create_id, create_time, modify_id, modify_time FROM care_tz_arv_case WHERE care_tz_arv_case_id = :p0';
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
            /** @var ChildCareTzArvCase $obj */
            $obj = new ChildCareTzArvCase();
            $obj->hydrate($row);
            CareTzArvCaseTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvCase|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_case_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvCaseId(1234); // WHERE care_tz_arv_case_id = 1234
     * $query->filterByCareTzArvCaseId(array(12, 34)); // WHERE care_tz_arv_case_id IN (12, 34)
     * $query->filterByCareTzArvCaseId(array('min' => 12)); // WHERE care_tz_arv_case_id > 12
     * </code>
     *
     * @param     mixed $careTzArvCaseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByCareTzArvCaseId($careTzArvCaseId = null, $comparison = null)
    {
        if (is_array($careTzArvCaseId)) {
            $useMinMax = false;
            if (isset($careTzArvCaseId['min'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID, $careTzArvCaseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvCaseId['max'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID, $careTzArvCaseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID, $careTzArvCaseId, $comparison);
    }

    /**
     * Filter the query on the pid column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE pid = 1234
     * $query->filterByPid(array(12, 34)); // WHERE pid IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE pid > 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the datetime_first_hivtest column
     *
     * Example usage:
     * <code>
     * $query->filterByDatetimeFirstHivtest('2011-03-14'); // WHERE datetime_first_hivtest = '2011-03-14'
     * $query->filterByDatetimeFirstHivtest('now'); // WHERE datetime_first_hivtest = '2011-03-14'
     * $query->filterByDatetimeFirstHivtest(array('max' => 'yesterday')); // WHERE datetime_first_hivtest > '2011-03-13'
     * </code>
     *
     * @param     mixed $datetimeFirstHivtest The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByDatetimeFirstHivtest($datetimeFirstHivtest = null, $comparison = null)
    {
        if (is_array($datetimeFirstHivtest)) {
            $useMinMax = false;
            if (isset($datetimeFirstHivtest['min'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_DATETIME_FIRST_HIVTEST, $datetimeFirstHivtest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datetimeFirstHivtest['max'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_DATETIME_FIRST_HIVTEST, $datetimeFirstHivtest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_DATETIME_FIRST_HIVTEST, $datetimeFirstHivtest, $comparison);
    }

    /**
     * Filter the query on the datetime_start_arv column
     *
     * Example usage:
     * <code>
     * $query->filterByDatetimeStartArv('2011-03-14'); // WHERE datetime_start_arv = '2011-03-14'
     * $query->filterByDatetimeStartArv('now'); // WHERE datetime_start_arv = '2011-03-14'
     * $query->filterByDatetimeStartArv(array('max' => 'yesterday')); // WHERE datetime_start_arv > '2011-03-13'
     * </code>
     *
     * @param     mixed $datetimeStartArv The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByDatetimeStartArv($datetimeStartArv = null, $comparison = null)
    {
        if (is_array($datetimeStartArv)) {
            $useMinMax = false;
            if (isset($datetimeStartArv['min'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_DATETIME_START_ARV, $datetimeStartArv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datetimeStartArv['max'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_DATETIME_START_ARV, $datetimeStartArv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_DATETIME_START_ARV, $datetimeStartArv, $comparison);
    }

    /**
     * Filter the query on the arv_pid column
     *
     * Example usage:
     * <code>
     * $query->filterByArvPid(1234); // WHERE arv_pid = 1234
     * $query->filterByArvPid(array(12, 34)); // WHERE arv_pid IN (12, 34)
     * $query->filterByArvPid(array('min' => 12)); // WHERE arv_pid > 12
     * </code>
     *
     * @param     mixed $arvPid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByArvPid($arvPid = null, $comparison = null)
    {
        if (is_array($arvPid)) {
            $useMinMax = false;
            if (isset($arvPid['min'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_ARV_PID, $arvPid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arvPid['max'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_ARV_PID, $arvPid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_ARV_PID, $arvPid, $comparison);
    }

    /**
     * Filter the query on the district column
     *
     * Example usage:
     * <code>
     * $query->filterByDistrict('fooValue');   // WHERE district = 'fooValue'
     * $query->filterByDistrict('%fooValue%', Criteria::LIKE); // WHERE district LIKE '%fooValue%'
     * </code>
     *
     * @param     string $district The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByDistrict($district = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($district)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_DISTRICT, $district, $comparison);
    }

    /**
     * Filter the query on the village column
     *
     * Example usage:
     * <code>
     * $query->filterByVillage('fooValue');   // WHERE village = 'fooValue'
     * $query->filterByVillage('%fooValue%', Criteria::LIKE); // WHERE village LIKE '%fooValue%'
     * </code>
     *
     * @param     string $village The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByVillage($village = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($village)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_VILLAGE, $village, $comparison);
    }

    /**
     * Filter the query on the street column
     *
     * Example usage:
     * <code>
     * $query->filterByStreet('fooValue');   // WHERE street = 'fooValue'
     * $query->filterByStreet('%fooValue%', Criteria::LIKE); // WHERE street LIKE '%fooValue%'
     * </code>
     *
     * @param     string $street The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByStreet($street = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($street)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_STREET, $street, $comparison);
    }

    /**
     * Filter the query on the balozi column
     *
     * Example usage:
     * <code>
     * $query->filterByBalozi('fooValue');   // WHERE balozi = 'fooValue'
     * $query->filterByBalozi('%fooValue%', Criteria::LIKE); // WHERE balozi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $balozi The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByBalozi($balozi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($balozi)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_BALOZI, $balozi, $comparison);
    }

    /**
     * Filter the query on the chairman_of_village column
     *
     * Example usage:
     * <code>
     * $query->filterByChairmanOfVillage('fooValue');   // WHERE chairman_of_village = 'fooValue'
     * $query->filterByChairmanOfVillage('%fooValue%', Criteria::LIKE); // WHERE chairman_of_village LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chairmanOfVillage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByChairmanOfVillage($chairmanOfVillage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chairmanOfVillage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_CHAIRMAN_OF_VILLAGE, $chairmanOfVillage, $comparison);
    }

    /**
     * Filter the query on the head_of_family column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadOfFamily('fooValue');   // WHERE head_of_family = 'fooValue'
     * $query->filterByHeadOfFamily('%fooValue%', Criteria::LIKE); // WHERE head_of_family LIKE '%fooValue%'
     * </code>
     *
     * @param     string $headOfFamily The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByHeadOfFamily($headOfFamily = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($headOfFamily)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_HEAD_OF_FAMILY, $headOfFamily, $comparison);
    }

    /**
     * Filter the query on the name_of_secretary column
     *
     * Example usage:
     * <code>
     * $query->filterByNameOfSecretary('fooValue');   // WHERE name_of_secretary = 'fooValue'
     * $query->filterByNameOfSecretary('%fooValue%', Criteria::LIKE); // WHERE name_of_secretary LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameOfSecretary The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByNameOfSecretary($nameOfSecretary = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameOfSecretary)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_NAME_OF_SECRETARY, $nameOfSecretary, $comparison);
    }

    /**
     * Filter the query on the secretary_phone column
     *
     * Example usage:
     * <code>
     * $query->filterBySecretaryPhone('fooValue');   // WHERE secretary_phone = 'fooValue'
     * $query->filterBySecretaryPhone('%fooValue%', Criteria::LIKE); // WHERE secretary_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $secretaryPhone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterBySecretaryPhone($secretaryPhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($secretaryPhone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_SECRETARY_PHONE, $secretaryPhone, $comparison);
    }

    /**
     * Filter the query on the secretary_adress column
     *
     * Example usage:
     * <code>
     * $query->filterBySecretaryAdress('fooValue');   // WHERE secretary_adress = 'fooValue'
     * $query->filterBySecretaryAdress('%fooValue%', Criteria::LIKE); // WHERE secretary_adress LIKE '%fooValue%'
     * </code>
     *
     * @param     string $secretaryAdress The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterBySecretaryAdress($secretaryAdress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($secretaryAdress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_SECRETARY_ADRESS, $secretaryAdress, $comparison);
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
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Filter the query on the create_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateId('2011-03-14'); // WHERE create_id = '2011-03-14'
     * $query->filterByCreateId('now'); // WHERE create_id = '2011-03-14'
     * $query->filterByCreateId(array('max' => 'yesterday')); // WHERE create_id > '2011-03-13'
     * </code>
     *
     * @param     mixed $createId The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (is_array($createId)) {
            $useMinMax = false;
            if (isset($createId['min'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_CREATE_ID, $createId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createId['max'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_CREATE_ID, $createId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_CREATE_ID, $createId, $comparison);
    }

    /**
     * Filter the query on the create_time column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateTime(1234); // WHERE create_time = 1234
     * $query->filterByCreateTime(array(12, 34)); // WHERE create_time IN (12, 34)
     * $query->filterByCreateTime(array('min' => 12)); // WHERE create_time > 12
     * </code>
     *
     * @param     mixed $createTime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_CREATE_TIME, $createTime, $comparison);
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
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTzArvCaseTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCaseTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvCase $careTzArvCase Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvCaseQuery The current query, for fluid interface
     */
    public function prune($careTzArvCase = null)
    {
        if ($careTzArvCase) {
            $this->addUsingAlias(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID, $careTzArvCase->getCareTzArvCaseId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_case table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvCaseTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvCaseTableMap::clearInstancePool();
            CareTzArvCaseTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvCaseTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvCaseTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvCaseTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvCaseTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvCaseQuery
