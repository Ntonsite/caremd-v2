<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvTreatmentSupporter as ChildCareTzArvTreatmentSupporter;
use CareMd\CareMd\CareTzArvTreatmentSupporterQuery as ChildCareTzArvTreatmentSupporterQuery;
use CareMd\CareMd\Map\CareTzArvTreatmentSupporterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_treatment_supporter' table.
 *
 *
 *
 * @method     ChildCareTzArvTreatmentSupporterQuery orderByCareTzArvTreatmentSupporterId($order = Criteria::ASC) Order by the care_tz_arv_treatment_supporter_id column
 * @method     ChildCareTzArvTreatmentSupporterQuery orderByCareTzArvRegistrationId($order = Criteria::ASC) Order by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvTreatmentSupporterQuery orderByVname($order = Criteria::ASC) Order by the vname column
 * @method     ChildCareTzArvTreatmentSupporterQuery orderByNname($order = Criteria::ASC) Order by the nname column
 * @method     ChildCareTzArvTreatmentSupporterQuery orderByStreet($order = Criteria::ASC) Order by the street column
 * @method     ChildCareTzArvTreatmentSupporterQuery orderByVillage($order = Criteria::ASC) Order by the village column
 * @method     ChildCareTzArvTreatmentSupporterQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method     ChildCareTzArvTreatmentSupporterQuery orderByJoinedSupporterOrg($order = Criteria::ASC) Order by the joined_supporter_org column
 * @method     ChildCareTzArvTreatmentSupporterQuery orderByOrganisation($order = Criteria::ASC) Order by the organisation column
 *
 * @method     ChildCareTzArvTreatmentSupporterQuery groupByCareTzArvTreatmentSupporterId() Group by the care_tz_arv_treatment_supporter_id column
 * @method     ChildCareTzArvTreatmentSupporterQuery groupByCareTzArvRegistrationId() Group by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvTreatmentSupporterQuery groupByVname() Group by the vname column
 * @method     ChildCareTzArvTreatmentSupporterQuery groupByNname() Group by the nname column
 * @method     ChildCareTzArvTreatmentSupporterQuery groupByStreet() Group by the street column
 * @method     ChildCareTzArvTreatmentSupporterQuery groupByVillage() Group by the village column
 * @method     ChildCareTzArvTreatmentSupporterQuery groupByTelephone() Group by the telephone column
 * @method     ChildCareTzArvTreatmentSupporterQuery groupByJoinedSupporterOrg() Group by the joined_supporter_org column
 * @method     ChildCareTzArvTreatmentSupporterQuery groupByOrganisation() Group by the organisation column
 *
 * @method     ChildCareTzArvTreatmentSupporterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvTreatmentSupporterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvTreatmentSupporterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvTreatmentSupporterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvTreatmentSupporterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvTreatmentSupporterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvTreatmentSupporter findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvTreatmentSupporter matching the query
 * @method     ChildCareTzArvTreatmentSupporter findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvTreatmentSupporter matching the query, or a new ChildCareTzArvTreatmentSupporter object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvTreatmentSupporter findOneByCareTzArvTreatmentSupporterId(int $care_tz_arv_treatment_supporter_id) Return the first ChildCareTzArvTreatmentSupporter filtered by the care_tz_arv_treatment_supporter_id column
 * @method     ChildCareTzArvTreatmentSupporter findOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvTreatmentSupporter filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvTreatmentSupporter findOneByVname(string $vname) Return the first ChildCareTzArvTreatmentSupporter filtered by the vname column
 * @method     ChildCareTzArvTreatmentSupporter findOneByNname(string $nname) Return the first ChildCareTzArvTreatmentSupporter filtered by the nname column
 * @method     ChildCareTzArvTreatmentSupporter findOneByStreet(string $street) Return the first ChildCareTzArvTreatmentSupporter filtered by the street column
 * @method     ChildCareTzArvTreatmentSupporter findOneByVillage(string $village) Return the first ChildCareTzArvTreatmentSupporter filtered by the village column
 * @method     ChildCareTzArvTreatmentSupporter findOneByTelephone(string $telephone) Return the first ChildCareTzArvTreatmentSupporter filtered by the telephone column
 * @method     ChildCareTzArvTreatmentSupporter findOneByJoinedSupporterOrg(string $joined_supporter_org) Return the first ChildCareTzArvTreatmentSupporter filtered by the joined_supporter_org column
 * @method     ChildCareTzArvTreatmentSupporter findOneByOrganisation(string $organisation) Return the first ChildCareTzArvTreatmentSupporter filtered by the organisation column *

 * @method     ChildCareTzArvTreatmentSupporter requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvTreatmentSupporter by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTreatmentSupporter requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvTreatmentSupporter matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvTreatmentSupporter requireOneByCareTzArvTreatmentSupporterId(int $care_tz_arv_treatment_supporter_id) Return the first ChildCareTzArvTreatmentSupporter filtered by the care_tz_arv_treatment_supporter_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTreatmentSupporter requireOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvTreatmentSupporter filtered by the care_tz_arv_registration_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTreatmentSupporter requireOneByVname(string $vname) Return the first ChildCareTzArvTreatmentSupporter filtered by the vname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTreatmentSupporter requireOneByNname(string $nname) Return the first ChildCareTzArvTreatmentSupporter filtered by the nname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTreatmentSupporter requireOneByStreet(string $street) Return the first ChildCareTzArvTreatmentSupporter filtered by the street column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTreatmentSupporter requireOneByVillage(string $village) Return the first ChildCareTzArvTreatmentSupporter filtered by the village column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTreatmentSupporter requireOneByTelephone(string $telephone) Return the first ChildCareTzArvTreatmentSupporter filtered by the telephone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTreatmentSupporter requireOneByJoinedSupporterOrg(string $joined_supporter_org) Return the first ChildCareTzArvTreatmentSupporter filtered by the joined_supporter_org column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvTreatmentSupporter requireOneByOrganisation(string $organisation) Return the first ChildCareTzArvTreatmentSupporter filtered by the organisation column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvTreatmentSupporter[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvTreatmentSupporter objects based on current ModelCriteria
 * @method     ChildCareTzArvTreatmentSupporter[]|ObjectCollection findByCareTzArvTreatmentSupporterId(int $care_tz_arv_treatment_supporter_id) Return ChildCareTzArvTreatmentSupporter objects filtered by the care_tz_arv_treatment_supporter_id column
 * @method     ChildCareTzArvTreatmentSupporter[]|ObjectCollection findByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return ChildCareTzArvTreatmentSupporter objects filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvTreatmentSupporter[]|ObjectCollection findByVname(string $vname) Return ChildCareTzArvTreatmentSupporter objects filtered by the vname column
 * @method     ChildCareTzArvTreatmentSupporter[]|ObjectCollection findByNname(string $nname) Return ChildCareTzArvTreatmentSupporter objects filtered by the nname column
 * @method     ChildCareTzArvTreatmentSupporter[]|ObjectCollection findByStreet(string $street) Return ChildCareTzArvTreatmentSupporter objects filtered by the street column
 * @method     ChildCareTzArvTreatmentSupporter[]|ObjectCollection findByVillage(string $village) Return ChildCareTzArvTreatmentSupporter objects filtered by the village column
 * @method     ChildCareTzArvTreatmentSupporter[]|ObjectCollection findByTelephone(string $telephone) Return ChildCareTzArvTreatmentSupporter objects filtered by the telephone column
 * @method     ChildCareTzArvTreatmentSupporter[]|ObjectCollection findByJoinedSupporterOrg(string $joined_supporter_org) Return ChildCareTzArvTreatmentSupporter objects filtered by the joined_supporter_org column
 * @method     ChildCareTzArvTreatmentSupporter[]|ObjectCollection findByOrganisation(string $organisation) Return ChildCareTzArvTreatmentSupporter objects filtered by the organisation column
 * @method     ChildCareTzArvTreatmentSupporter[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvTreatmentSupporterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvTreatmentSupporterQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvTreatmentSupporter', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvTreatmentSupporterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvTreatmentSupporterQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvTreatmentSupporterQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvTreatmentSupporterQuery();
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
     * @return ChildCareTzArvTreatmentSupporter|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvTreatmentSupporterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvTreatmentSupporterTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvTreatmentSupporter A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_treatment_supporter_id, care_tz_arv_registration_id, vname, nname, street, village, telephone, joined_supporter_org, organisation FROM care_tz_arv_treatment_supporter WHERE care_tz_arv_treatment_supporter_id = :p0';
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
            /** @var ChildCareTzArvTreatmentSupporter $obj */
            $obj = new ChildCareTzArvTreatmentSupporter();
            $obj->hydrate($row);
            CareTzArvTreatmentSupporterTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvTreatmentSupporter|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_CARE_TZ_ARV_TREATMENT_SUPPORTER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_CARE_TZ_ARV_TREATMENT_SUPPORTER_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_treatment_supporter_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvTreatmentSupporterId(1234); // WHERE care_tz_arv_treatment_supporter_id = 1234
     * $query->filterByCareTzArvTreatmentSupporterId(array(12, 34)); // WHERE care_tz_arv_treatment_supporter_id IN (12, 34)
     * $query->filterByCareTzArvTreatmentSupporterId(array('min' => 12)); // WHERE care_tz_arv_treatment_supporter_id > 12
     * </code>
     *
     * @param     mixed $careTzArvTreatmentSupporterId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByCareTzArvTreatmentSupporterId($careTzArvTreatmentSupporterId = null, $comparison = null)
    {
        if (is_array($careTzArvTreatmentSupporterId)) {
            $useMinMax = false;
            if (isset($careTzArvTreatmentSupporterId['min'])) {
                $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_CARE_TZ_ARV_TREATMENT_SUPPORTER_ID, $careTzArvTreatmentSupporterId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvTreatmentSupporterId['max'])) {
                $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_CARE_TZ_ARV_TREATMENT_SUPPORTER_ID, $careTzArvTreatmentSupporterId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_CARE_TZ_ARV_TREATMENT_SUPPORTER_ID, $careTzArvTreatmentSupporterId, $comparison);
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
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegistrationId($careTzArvRegistrationId = null, $comparison = null)
    {
        if (is_array($careTzArvRegistrationId)) {
            $useMinMax = false;
            if (isset($careTzArvRegistrationId['min'])) {
                $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegistrationId['max'])) {
                $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId, $comparison);
    }

    /**
     * Filter the query on the vname column
     *
     * Example usage:
     * <code>
     * $query->filterByVname('fooValue');   // WHERE vname = 'fooValue'
     * $query->filterByVname('%fooValue%', Criteria::LIKE); // WHERE vname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByVname($vname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_VNAME, $vname, $comparison);
    }

    /**
     * Filter the query on the nname column
     *
     * Example usage:
     * <code>
     * $query->filterByNname('fooValue');   // WHERE nname = 'fooValue'
     * $query->filterByNname('%fooValue%', Criteria::LIKE); // WHERE nname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByNname($nname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_NNAME, $nname, $comparison);
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
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByStreet($street = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($street)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_STREET, $street, $comparison);
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
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByVillage($village = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($village)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_VILLAGE, $village, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%', Criteria::LIKE); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the joined_supporter_org column
     *
     * Example usage:
     * <code>
     * $query->filterByJoinedSupporterOrg('fooValue');   // WHERE joined_supporter_org = 'fooValue'
     * $query->filterByJoinedSupporterOrg('%fooValue%', Criteria::LIKE); // WHERE joined_supporter_org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $joinedSupporterOrg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByJoinedSupporterOrg($joinedSupporterOrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($joinedSupporterOrg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_JOINED_SUPPORTER_ORG, $joinedSupporterOrg, $comparison);
    }

    /**
     * Filter the query on the organisation column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisation('fooValue');   // WHERE organisation = 'fooValue'
     * $query->filterByOrganisation('%fooValue%', Criteria::LIKE); // WHERE organisation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisation The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function filterByOrganisation($organisation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisation)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_ORGANISATION, $organisation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvTreatmentSupporter $careTzArvTreatmentSupporter Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvTreatmentSupporterQuery The current query, for fluid interface
     */
    public function prune($careTzArvTreatmentSupporter = null)
    {
        if ($careTzArvTreatmentSupporter) {
            $this->addUsingAlias(CareTzArvTreatmentSupporterTableMap::COL_CARE_TZ_ARV_TREATMENT_SUPPORTER_ID, $careTzArvTreatmentSupporter->getCareTzArvTreatmentSupporterId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_treatment_supporter table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvTreatmentSupporterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvTreatmentSupporterTableMap::clearInstancePool();
            CareTzArvTreatmentSupporterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvTreatmentSupporterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvTreatmentSupporterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvTreatmentSupporterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvTreatmentSupporterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvTreatmentSupporterQuery
