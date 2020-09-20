<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterObstetric as ChildCareEncounterObstetric;
use CareMd\CareMd\CareEncounterObstetricQuery as ChildCareEncounterObstetricQuery;
use CareMd\CareMd\Map\CareEncounterObstetricTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_obstetric' table.
 *
 *
 *
 * @method     ChildCareEncounterObstetricQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterObstetricQuery orderByPregnancyNr($order = Criteria::ASC) Order by the pregnancy_nr column
 * @method     ChildCareEncounterObstetricQuery orderByHospitalAdmNr($order = Criteria::ASC) Order by the hospital_adm_nr column
 * @method     ChildCareEncounterObstetricQuery orderByPatientClass($order = Criteria::ASC) Order by the patient_class column
 * @method     ChildCareEncounterObstetricQuery orderByIsDischargedNotInLabour($order = Criteria::ASC) Order by the is_discharged_not_in_labour column
 * @method     ChildCareEncounterObstetricQuery orderByIsReAdmission($order = Criteria::ASC) Order by the is_re_admission column
 * @method     ChildCareEncounterObstetricQuery orderByReferralStatus($order = Criteria::ASC) Order by the referral_status column
 * @method     ChildCareEncounterObstetricQuery orderByReferralReason($order = Criteria::ASC) Order by the referral_reason column
 * @method     ChildCareEncounterObstetricQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterObstetricQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterObstetricQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterObstetricQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterObstetricQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterObstetricQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterObstetricQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterObstetricQuery groupByPregnancyNr() Group by the pregnancy_nr column
 * @method     ChildCareEncounterObstetricQuery groupByHospitalAdmNr() Group by the hospital_adm_nr column
 * @method     ChildCareEncounterObstetricQuery groupByPatientClass() Group by the patient_class column
 * @method     ChildCareEncounterObstetricQuery groupByIsDischargedNotInLabour() Group by the is_discharged_not_in_labour column
 * @method     ChildCareEncounterObstetricQuery groupByIsReAdmission() Group by the is_re_admission column
 * @method     ChildCareEncounterObstetricQuery groupByReferralStatus() Group by the referral_status column
 * @method     ChildCareEncounterObstetricQuery groupByReferralReason() Group by the referral_reason column
 * @method     ChildCareEncounterObstetricQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterObstetricQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterObstetricQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterObstetricQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterObstetricQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterObstetricQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterObstetricQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterObstetricQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterObstetricQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterObstetricQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterObstetricQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterObstetricQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterObstetric findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterObstetric matching the query
 * @method     ChildCareEncounterObstetric findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterObstetric matching the query, or a new ChildCareEncounterObstetric object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterObstetric findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterObstetric filtered by the encounter_nr column
 * @method     ChildCareEncounterObstetric findOneByPregnancyNr(int $pregnancy_nr) Return the first ChildCareEncounterObstetric filtered by the pregnancy_nr column
 * @method     ChildCareEncounterObstetric findOneByHospitalAdmNr(int $hospital_adm_nr) Return the first ChildCareEncounterObstetric filtered by the hospital_adm_nr column
 * @method     ChildCareEncounterObstetric findOneByPatientClass(string $patient_class) Return the first ChildCareEncounterObstetric filtered by the patient_class column
 * @method     ChildCareEncounterObstetric findOneByIsDischargedNotInLabour(boolean $is_discharged_not_in_labour) Return the first ChildCareEncounterObstetric filtered by the is_discharged_not_in_labour column
 * @method     ChildCareEncounterObstetric findOneByIsReAdmission(boolean $is_re_admission) Return the first ChildCareEncounterObstetric filtered by the is_re_admission column
 * @method     ChildCareEncounterObstetric findOneByReferralStatus(string $referral_status) Return the first ChildCareEncounterObstetric filtered by the referral_status column
 * @method     ChildCareEncounterObstetric findOneByReferralReason(string $referral_reason) Return the first ChildCareEncounterObstetric filtered by the referral_reason column
 * @method     ChildCareEncounterObstetric findOneByStatus(string $status) Return the first ChildCareEncounterObstetric filtered by the status column
 * @method     ChildCareEncounterObstetric findOneByHistory(string $history) Return the first ChildCareEncounterObstetric filtered by the history column
 * @method     ChildCareEncounterObstetric findOneByModifyId(string $modify_id) Return the first ChildCareEncounterObstetric filtered by the modify_id column
 * @method     ChildCareEncounterObstetric findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterObstetric filtered by the modify_time column
 * @method     ChildCareEncounterObstetric findOneByCreateId(string $create_id) Return the first ChildCareEncounterObstetric filtered by the create_id column
 * @method     ChildCareEncounterObstetric findOneByCreateTime(string $create_time) Return the first ChildCareEncounterObstetric filtered by the create_time column *

 * @method     ChildCareEncounterObstetric requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterObstetric by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterObstetric matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterObstetric requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterObstetric filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByPregnancyNr(int $pregnancy_nr) Return the first ChildCareEncounterObstetric filtered by the pregnancy_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByHospitalAdmNr(int $hospital_adm_nr) Return the first ChildCareEncounterObstetric filtered by the hospital_adm_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByPatientClass(string $patient_class) Return the first ChildCareEncounterObstetric filtered by the patient_class column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByIsDischargedNotInLabour(boolean $is_discharged_not_in_labour) Return the first ChildCareEncounterObstetric filtered by the is_discharged_not_in_labour column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByIsReAdmission(boolean $is_re_admission) Return the first ChildCareEncounterObstetric filtered by the is_re_admission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByReferralStatus(string $referral_status) Return the first ChildCareEncounterObstetric filtered by the referral_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByReferralReason(string $referral_reason) Return the first ChildCareEncounterObstetric filtered by the referral_reason column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByStatus(string $status) Return the first ChildCareEncounterObstetric filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByHistory(string $history) Return the first ChildCareEncounterObstetric filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterObstetric filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterObstetric filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByCreateId(string $create_id) Return the first ChildCareEncounterObstetric filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterObstetric requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterObstetric filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterObstetric[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterObstetric objects based on current ModelCriteria
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterObstetric objects filtered by the encounter_nr column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByPregnancyNr(int $pregnancy_nr) Return ChildCareEncounterObstetric objects filtered by the pregnancy_nr column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByHospitalAdmNr(int $hospital_adm_nr) Return ChildCareEncounterObstetric objects filtered by the hospital_adm_nr column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByPatientClass(string $patient_class) Return ChildCareEncounterObstetric objects filtered by the patient_class column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByIsDischargedNotInLabour(boolean $is_discharged_not_in_labour) Return ChildCareEncounterObstetric objects filtered by the is_discharged_not_in_labour column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByIsReAdmission(boolean $is_re_admission) Return ChildCareEncounterObstetric objects filtered by the is_re_admission column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByReferralStatus(string $referral_status) Return ChildCareEncounterObstetric objects filtered by the referral_status column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByReferralReason(string $referral_reason) Return ChildCareEncounterObstetric objects filtered by the referral_reason column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterObstetric objects filtered by the status column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterObstetric objects filtered by the history column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterObstetric objects filtered by the modify_id column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterObstetric objects filtered by the modify_time column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterObstetric objects filtered by the create_id column
 * @method     ChildCareEncounterObstetric[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterObstetric objects filtered by the create_time column
 * @method     ChildCareEncounterObstetric[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterObstetricQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterObstetricQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterObstetric', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterObstetricQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterObstetricQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterObstetricQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterObstetricQuery();
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
     * @return ChildCareEncounterObstetric|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterObstetricTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterObstetricTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterObstetric A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT encounter_nr, pregnancy_nr, hospital_adm_nr, patient_class, is_discharged_not_in_labour, is_re_admission, referral_status, referral_reason, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_obstetric WHERE encounter_nr = :p0';
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
            /** @var ChildCareEncounterObstetric $obj */
            $obj = new ChildCareEncounterObstetric();
            $obj->hydrate($row);
            CareEncounterObstetricTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterObstetric|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterNr(1234); // WHERE encounter_nr = 1234
     * $query->filterByEncounterNr(array(12, 34)); // WHERE encounter_nr IN (12, 34)
     * $query->filterByEncounterNr(array('min' => 12)); // WHERE encounter_nr > 12
     * </code>
     *
     * @param     mixed $encounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the pregnancy_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPregnancyNr(1234); // WHERE pregnancy_nr = 1234
     * $query->filterByPregnancyNr(array(12, 34)); // WHERE pregnancy_nr IN (12, 34)
     * $query->filterByPregnancyNr(array('min' => 12)); // WHERE pregnancy_nr > 12
     * </code>
     *
     * @param     mixed $pregnancyNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByPregnancyNr($pregnancyNr = null, $comparison = null)
    {
        if (is_array($pregnancyNr)) {
            $useMinMax = false;
            if (isset($pregnancyNr['min'])) {
                $this->addUsingAlias(CareEncounterObstetricTableMap::COL_PREGNANCY_NR, $pregnancyNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pregnancyNr['max'])) {
                $this->addUsingAlias(CareEncounterObstetricTableMap::COL_PREGNANCY_NR, $pregnancyNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_PREGNANCY_NR, $pregnancyNr, $comparison);
    }

    /**
     * Filter the query on the hospital_adm_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByHospitalAdmNr(1234); // WHERE hospital_adm_nr = 1234
     * $query->filterByHospitalAdmNr(array(12, 34)); // WHERE hospital_adm_nr IN (12, 34)
     * $query->filterByHospitalAdmNr(array('min' => 12)); // WHERE hospital_adm_nr > 12
     * </code>
     *
     * @param     mixed $hospitalAdmNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByHospitalAdmNr($hospitalAdmNr = null, $comparison = null)
    {
        if (is_array($hospitalAdmNr)) {
            $useMinMax = false;
            if (isset($hospitalAdmNr['min'])) {
                $this->addUsingAlias(CareEncounterObstetricTableMap::COL_HOSPITAL_ADM_NR, $hospitalAdmNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hospitalAdmNr['max'])) {
                $this->addUsingAlias(CareEncounterObstetricTableMap::COL_HOSPITAL_ADM_NR, $hospitalAdmNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_HOSPITAL_ADM_NR, $hospitalAdmNr, $comparison);
    }

    /**
     * Filter the query on the patient_class column
     *
     * Example usage:
     * <code>
     * $query->filterByPatientClass('fooValue');   // WHERE patient_class = 'fooValue'
     * $query->filterByPatientClass('%fooValue%', Criteria::LIKE); // WHERE patient_class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $patientClass The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByPatientClass($patientClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($patientClass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_PATIENT_CLASS, $patientClass, $comparison);
    }

    /**
     * Filter the query on the is_discharged_not_in_labour column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDischargedNotInLabour(true); // WHERE is_discharged_not_in_labour = true
     * $query->filterByIsDischargedNotInLabour('yes'); // WHERE is_discharged_not_in_labour = true
     * </code>
     *
     * @param     boolean|string $isDischargedNotInLabour The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByIsDischargedNotInLabour($isDischargedNotInLabour = null, $comparison = null)
    {
        if (is_string($isDischargedNotInLabour)) {
            $isDischargedNotInLabour = in_array(strtolower($isDischargedNotInLabour), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_IS_DISCHARGED_NOT_IN_LABOUR, $isDischargedNotInLabour, $comparison);
    }

    /**
     * Filter the query on the is_re_admission column
     *
     * Example usage:
     * <code>
     * $query->filterByIsReAdmission(true); // WHERE is_re_admission = true
     * $query->filterByIsReAdmission('yes'); // WHERE is_re_admission = true
     * </code>
     *
     * @param     boolean|string $isReAdmission The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByIsReAdmission($isReAdmission = null, $comparison = null)
    {
        if (is_string($isReAdmission)) {
            $isReAdmission = in_array(strtolower($isReAdmission), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_IS_RE_ADMISSION, $isReAdmission, $comparison);
    }

    /**
     * Filter the query on the referral_status column
     *
     * Example usage:
     * <code>
     * $query->filterByReferralStatus('fooValue');   // WHERE referral_status = 'fooValue'
     * $query->filterByReferralStatus('%fooValue%', Criteria::LIKE); // WHERE referral_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referralStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByReferralStatus($referralStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referralStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_REFERRAL_STATUS, $referralStatus, $comparison);
    }

    /**
     * Filter the query on the referral_reason column
     *
     * Example usage:
     * <code>
     * $query->filterByReferralReason('fooValue');   // WHERE referral_reason = 'fooValue'
     * $query->filterByReferralReason('%fooValue%', Criteria::LIKE); // WHERE referral_reason LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referralReason The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByReferralReason($referralReason = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referralReason)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_REFERRAL_REASON, $referralReason, $comparison);
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
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterObstetricTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterObstetricTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterObstetricTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterObstetricTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterObstetricTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterObstetric $careEncounterObstetric Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterObstetricQuery The current query, for fluid interface
     */
    public function prune($careEncounterObstetric = null)
    {
        if ($careEncounterObstetric) {
            $this->addUsingAlias(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR, $careEncounterObstetric->getEncounterNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_obstetric table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterObstetricTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterObstetricTableMap::clearInstancePool();
            CareEncounterObstetricTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterObstetricTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterObstetricTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterObstetricTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterObstetricTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterObstetricQuery
