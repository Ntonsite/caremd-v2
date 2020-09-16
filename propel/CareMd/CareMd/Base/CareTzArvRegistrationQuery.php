<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvRegistration as ChildCareTzArvRegistration;
use CareMd\CareMd\CareTzArvRegistrationQuery as ChildCareTzArvRegistrationQuery;
use CareMd\CareMd\Map\CareTzArvRegistrationTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_registration' table.
 *
 *
 *
 * @method     ChildCareTzArvRegistrationQuery orderByCareTzArvRegistrationId($order = Criteria::ASC) Order by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvRegistrationQuery orderByCareTzArvLabId($order = Criteria::ASC) Order by the care_tz_arv_lab_id column
 * @method     ChildCareTzArvRegistrationQuery orderByCareTzArvFunctionalStatusId($order = Criteria::ASC) Order by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvRegistrationQuery orderByCareTzArvExposureId($order = Criteria::ASC) Order by the care_tz_arv_exposure_id column
 * @method     ChildCareTzArvRegistrationQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCareTzArvRegistrationQuery orderByCtcId($order = Criteria::ASC) Order by the ctc_id column
 * @method     ChildCareTzArvRegistrationQuery orderByTbRegNo($order = Criteria::ASC) Order by the tb_reg_no column
 * @method     ChildCareTzArvRegistrationQuery orderByHbcNumber($order = Criteria::ASC) Order by the hbc_number column
 * @method     ChildCareTzArvRegistrationQuery orderByTenCellLeader($order = Criteria::ASC) Order by the ten_cell_leader column
 * @method     ChildCareTzArvRegistrationQuery orderByHeadOfHousehold($order = Criteria::ASC) Order by the head_of_household column
 * @method     ChildCareTzArvRegistrationQuery orderByHeadOfHouseholdContact($order = Criteria::ASC) Order by the head_of_household_contact column
 * @method     ChildCareTzArvRegistrationQuery orderByDateFirstHivTest($order = Criteria::ASC) Order by the date_first_hiv_test column
 * @method     ChildCareTzArvRegistrationQuery orderByDateConfirmedHiv($order = Criteria::ASC) Order by the date_confirmed_hiv column
 * @method     ChildCareTzArvRegistrationQuery orderByDateEligible($order = Criteria::ASC) Order by the date_eligible column
 * @method     ChildCareTzArvRegistrationQuery orderByDateEnrolled($order = Criteria::ASC) Order by the date_enrolled column
 * @method     ChildCareTzArvRegistrationQuery orderByDateReady($order = Criteria::ASC) Order by the date_ready column
 * @method     ChildCareTzArvRegistrationQuery orderByDateStartArt($order = Criteria::ASC) Order by the date_start_art column
 * @method     ChildCareTzArvRegistrationQuery orderByAgeStartArt($order = Criteria::ASC) Order by the age_start_art column
 * @method     ChildCareTzArvRegistrationQuery orderByStatusClinicalStage($order = Criteria::ASC) Order by the status_clinical_stage column
 * @method     ChildCareTzArvRegistrationQuery orderByStatusWeight($order = Criteria::ASC) Order by the status_weight column
 * @method     ChildCareTzArvRegistrationQuery orderByStatusHeight($order = Criteria::ASC) Order by the status_height column
 * @method     ChildCareTzArvRegistrationQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTzArvRegistrationQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareTzArvRegistrationQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTzArvRegistrationQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTzArvRegistrationQuery orderByHistory($order = Criteria::ASC) Order by the history column
 *
 * @method     ChildCareTzArvRegistrationQuery groupByCareTzArvRegistrationId() Group by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvRegistrationQuery groupByCareTzArvLabId() Group by the care_tz_arv_lab_id column
 * @method     ChildCareTzArvRegistrationQuery groupByCareTzArvFunctionalStatusId() Group by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvRegistrationQuery groupByCareTzArvExposureId() Group by the care_tz_arv_exposure_id column
 * @method     ChildCareTzArvRegistrationQuery groupByPid() Group by the pid column
 * @method     ChildCareTzArvRegistrationQuery groupByCtcId() Group by the ctc_id column
 * @method     ChildCareTzArvRegistrationQuery groupByTbRegNo() Group by the tb_reg_no column
 * @method     ChildCareTzArvRegistrationQuery groupByHbcNumber() Group by the hbc_number column
 * @method     ChildCareTzArvRegistrationQuery groupByTenCellLeader() Group by the ten_cell_leader column
 * @method     ChildCareTzArvRegistrationQuery groupByHeadOfHousehold() Group by the head_of_household column
 * @method     ChildCareTzArvRegistrationQuery groupByHeadOfHouseholdContact() Group by the head_of_household_contact column
 * @method     ChildCareTzArvRegistrationQuery groupByDateFirstHivTest() Group by the date_first_hiv_test column
 * @method     ChildCareTzArvRegistrationQuery groupByDateConfirmedHiv() Group by the date_confirmed_hiv column
 * @method     ChildCareTzArvRegistrationQuery groupByDateEligible() Group by the date_eligible column
 * @method     ChildCareTzArvRegistrationQuery groupByDateEnrolled() Group by the date_enrolled column
 * @method     ChildCareTzArvRegistrationQuery groupByDateReady() Group by the date_ready column
 * @method     ChildCareTzArvRegistrationQuery groupByDateStartArt() Group by the date_start_art column
 * @method     ChildCareTzArvRegistrationQuery groupByAgeStartArt() Group by the age_start_art column
 * @method     ChildCareTzArvRegistrationQuery groupByStatusClinicalStage() Group by the status_clinical_stage column
 * @method     ChildCareTzArvRegistrationQuery groupByStatusWeight() Group by the status_weight column
 * @method     ChildCareTzArvRegistrationQuery groupByStatusHeight() Group by the status_height column
 * @method     ChildCareTzArvRegistrationQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTzArvRegistrationQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareTzArvRegistrationQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTzArvRegistrationQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTzArvRegistrationQuery groupByHistory() Group by the history column
 *
 * @method     ChildCareTzArvRegistrationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvRegistrationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvRegistrationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvRegistrationQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvRegistrationQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvRegistrationQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvRegistration findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvRegistration matching the query
 * @method     ChildCareTzArvRegistration findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvRegistration matching the query, or a new ChildCareTzArvRegistration object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvRegistration findOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvRegistration filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvRegistration findOneByCareTzArvLabId(string $care_tz_arv_lab_id) Return the first ChildCareTzArvRegistration filtered by the care_tz_arv_lab_id column
 * @method     ChildCareTzArvRegistration findOneByCareTzArvFunctionalStatusId(int $care_tz_arv_functional_status_id) Return the first ChildCareTzArvRegistration filtered by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvRegistration findOneByCareTzArvExposureId(int $care_tz_arv_exposure_id) Return the first ChildCareTzArvRegistration filtered by the care_tz_arv_exposure_id column
 * @method     ChildCareTzArvRegistration findOneByPid(int $pid) Return the first ChildCareTzArvRegistration filtered by the pid column
 * @method     ChildCareTzArvRegistration findOneByCtcId(string $ctc_id) Return the first ChildCareTzArvRegistration filtered by the ctc_id column
 * @method     ChildCareTzArvRegistration findOneByTbRegNo(string $tb_reg_no) Return the first ChildCareTzArvRegistration filtered by the tb_reg_no column
 * @method     ChildCareTzArvRegistration findOneByHbcNumber(string $hbc_number) Return the first ChildCareTzArvRegistration filtered by the hbc_number column
 * @method     ChildCareTzArvRegistration findOneByTenCellLeader(string $ten_cell_leader) Return the first ChildCareTzArvRegistration filtered by the ten_cell_leader column
 * @method     ChildCareTzArvRegistration findOneByHeadOfHousehold(string $head_of_household) Return the first ChildCareTzArvRegistration filtered by the head_of_household column
 * @method     ChildCareTzArvRegistration findOneByHeadOfHouseholdContact(string $head_of_household_contact) Return the first ChildCareTzArvRegistration filtered by the head_of_household_contact column
 * @method     ChildCareTzArvRegistration findOneByDateFirstHivTest(string $date_first_hiv_test) Return the first ChildCareTzArvRegistration filtered by the date_first_hiv_test column
 * @method     ChildCareTzArvRegistration findOneByDateConfirmedHiv(string $date_confirmed_hiv) Return the first ChildCareTzArvRegistration filtered by the date_confirmed_hiv column
 * @method     ChildCareTzArvRegistration findOneByDateEligible(string $date_eligible) Return the first ChildCareTzArvRegistration filtered by the date_eligible column
 * @method     ChildCareTzArvRegistration findOneByDateEnrolled(string $date_enrolled) Return the first ChildCareTzArvRegistration filtered by the date_enrolled column
 * @method     ChildCareTzArvRegistration findOneByDateReady(string $date_ready) Return the first ChildCareTzArvRegistration filtered by the date_ready column
 * @method     ChildCareTzArvRegistration findOneByDateStartArt(string $date_start_art) Return the first ChildCareTzArvRegistration filtered by the date_start_art column
 * @method     ChildCareTzArvRegistration findOneByAgeStartArt(int $age_start_art) Return the first ChildCareTzArvRegistration filtered by the age_start_art column
 * @method     ChildCareTzArvRegistration findOneByStatusClinicalStage(int $status_clinical_stage) Return the first ChildCareTzArvRegistration filtered by the status_clinical_stage column
 * @method     ChildCareTzArvRegistration findOneByStatusWeight(double $status_weight) Return the first ChildCareTzArvRegistration filtered by the status_weight column
 * @method     ChildCareTzArvRegistration findOneByStatusHeight(double $status_height) Return the first ChildCareTzArvRegistration filtered by the status_height column
 * @method     ChildCareTzArvRegistration findOneByCreateId(string $create_id) Return the first ChildCareTzArvRegistration filtered by the create_id column
 * @method     ChildCareTzArvRegistration findOneByCreateTime(string $create_time) Return the first ChildCareTzArvRegistration filtered by the create_time column
 * @method     ChildCareTzArvRegistration findOneByModifyId(string $modify_id) Return the first ChildCareTzArvRegistration filtered by the modify_id column
 * @method     ChildCareTzArvRegistration findOneByModifyTime(string $modify_time) Return the first ChildCareTzArvRegistration filtered by the modify_time column
 * @method     ChildCareTzArvRegistration findOneByHistory(string $history) Return the first ChildCareTzArvRegistration filtered by the history column *

 * @method     ChildCareTzArvRegistration requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvRegistration by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvRegistration matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvRegistration requireOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvRegistration filtered by the care_tz_arv_registration_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByCareTzArvLabId(string $care_tz_arv_lab_id) Return the first ChildCareTzArvRegistration filtered by the care_tz_arv_lab_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByCareTzArvFunctionalStatusId(int $care_tz_arv_functional_status_id) Return the first ChildCareTzArvRegistration filtered by the care_tz_arv_functional_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByCareTzArvExposureId(int $care_tz_arv_exposure_id) Return the first ChildCareTzArvRegistration filtered by the care_tz_arv_exposure_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByPid(int $pid) Return the first ChildCareTzArvRegistration filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByCtcId(string $ctc_id) Return the first ChildCareTzArvRegistration filtered by the ctc_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByTbRegNo(string $tb_reg_no) Return the first ChildCareTzArvRegistration filtered by the tb_reg_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByHbcNumber(string $hbc_number) Return the first ChildCareTzArvRegistration filtered by the hbc_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByTenCellLeader(string $ten_cell_leader) Return the first ChildCareTzArvRegistration filtered by the ten_cell_leader column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByHeadOfHousehold(string $head_of_household) Return the first ChildCareTzArvRegistration filtered by the head_of_household column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByHeadOfHouseholdContact(string $head_of_household_contact) Return the first ChildCareTzArvRegistration filtered by the head_of_household_contact column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByDateFirstHivTest(string $date_first_hiv_test) Return the first ChildCareTzArvRegistration filtered by the date_first_hiv_test column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByDateConfirmedHiv(string $date_confirmed_hiv) Return the first ChildCareTzArvRegistration filtered by the date_confirmed_hiv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByDateEligible(string $date_eligible) Return the first ChildCareTzArvRegistration filtered by the date_eligible column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByDateEnrolled(string $date_enrolled) Return the first ChildCareTzArvRegistration filtered by the date_enrolled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByDateReady(string $date_ready) Return the first ChildCareTzArvRegistration filtered by the date_ready column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByDateStartArt(string $date_start_art) Return the first ChildCareTzArvRegistration filtered by the date_start_art column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByAgeStartArt(int $age_start_art) Return the first ChildCareTzArvRegistration filtered by the age_start_art column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByStatusClinicalStage(int $status_clinical_stage) Return the first ChildCareTzArvRegistration filtered by the status_clinical_stage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByStatusWeight(double $status_weight) Return the first ChildCareTzArvRegistration filtered by the status_weight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByStatusHeight(double $status_height) Return the first ChildCareTzArvRegistration filtered by the status_height column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByCreateId(string $create_id) Return the first ChildCareTzArvRegistration filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByCreateTime(string $create_time) Return the first ChildCareTzArvRegistration filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByModifyId(string $modify_id) Return the first ChildCareTzArvRegistration filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByModifyTime(string $modify_time) Return the first ChildCareTzArvRegistration filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRegistration requireOneByHistory(string $history) Return the first ChildCareTzArvRegistration filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvRegistration[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvRegistration objects based on current ModelCriteria
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return ChildCareTzArvRegistration objects filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByCareTzArvLabId(string $care_tz_arv_lab_id) Return ChildCareTzArvRegistration objects filtered by the care_tz_arv_lab_id column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByCareTzArvFunctionalStatusId(int $care_tz_arv_functional_status_id) Return ChildCareTzArvRegistration objects filtered by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByCareTzArvExposureId(int $care_tz_arv_exposure_id) Return ChildCareTzArvRegistration objects filtered by the care_tz_arv_exposure_id column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByPid(int $pid) Return ChildCareTzArvRegistration objects filtered by the pid column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByCtcId(string $ctc_id) Return ChildCareTzArvRegistration objects filtered by the ctc_id column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByTbRegNo(string $tb_reg_no) Return ChildCareTzArvRegistration objects filtered by the tb_reg_no column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByHbcNumber(string $hbc_number) Return ChildCareTzArvRegistration objects filtered by the hbc_number column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByTenCellLeader(string $ten_cell_leader) Return ChildCareTzArvRegistration objects filtered by the ten_cell_leader column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByHeadOfHousehold(string $head_of_household) Return ChildCareTzArvRegistration objects filtered by the head_of_household column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByHeadOfHouseholdContact(string $head_of_household_contact) Return ChildCareTzArvRegistration objects filtered by the head_of_household_contact column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByDateFirstHivTest(string $date_first_hiv_test) Return ChildCareTzArvRegistration objects filtered by the date_first_hiv_test column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByDateConfirmedHiv(string $date_confirmed_hiv) Return ChildCareTzArvRegistration objects filtered by the date_confirmed_hiv column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByDateEligible(string $date_eligible) Return ChildCareTzArvRegistration objects filtered by the date_eligible column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByDateEnrolled(string $date_enrolled) Return ChildCareTzArvRegistration objects filtered by the date_enrolled column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByDateReady(string $date_ready) Return ChildCareTzArvRegistration objects filtered by the date_ready column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByDateStartArt(string $date_start_art) Return ChildCareTzArvRegistration objects filtered by the date_start_art column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByAgeStartArt(int $age_start_art) Return ChildCareTzArvRegistration objects filtered by the age_start_art column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByStatusClinicalStage(int $status_clinical_stage) Return ChildCareTzArvRegistration objects filtered by the status_clinical_stage column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByStatusWeight(double $status_weight) Return ChildCareTzArvRegistration objects filtered by the status_weight column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByStatusHeight(double $status_height) Return ChildCareTzArvRegistration objects filtered by the status_height column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTzArvRegistration objects filtered by the create_id column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTzArvRegistration objects filtered by the create_time column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTzArvRegistration objects filtered by the modify_id column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTzArvRegistration objects filtered by the modify_time column
 * @method     ChildCareTzArvRegistration[]|ObjectCollection findByHistory(string $history) Return ChildCareTzArvRegistration objects filtered by the history column
 * @method     ChildCareTzArvRegistration[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvRegistrationQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvRegistrationQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvRegistration', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvRegistrationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvRegistrationQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvRegistrationQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvRegistrationQuery();
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
     * @return ChildCareTzArvRegistration|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvRegistrationTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvRegistrationTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvRegistration A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_registration_id, care_tz_arv_lab_id, care_tz_arv_functional_status_id, care_tz_arv_exposure_id, pid, ctc_id, tb_reg_no, hbc_number, ten_cell_leader, head_of_household, head_of_household_contact, date_first_hiv_test, date_confirmed_hiv, date_eligible, date_enrolled, date_ready, date_start_art, age_start_art, status_clinical_stage, status_weight, status_height, create_id, create_time, modify_id, modify_time, history FROM care_tz_arv_registration WHERE care_tz_arv_registration_id = :p0';
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
            /** @var ChildCareTzArvRegistration $obj */
            $obj = new ChildCareTzArvRegistration();
            $obj->hydrate($row);
            CareTzArvRegistrationTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvRegistration|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegistrationId($careTzArvRegistrationId = null, $comparison = null)
    {
        if (is_array($careTzArvRegistrationId)) {
            $useMinMax = false;
            if (isset($careTzArvRegistrationId['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegistrationId['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_lab_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvLabId(1234); // WHERE care_tz_arv_lab_id = 1234
     * $query->filterByCareTzArvLabId(array(12, 34)); // WHERE care_tz_arv_lab_id IN (12, 34)
     * $query->filterByCareTzArvLabId(array('min' => 12)); // WHERE care_tz_arv_lab_id > 12
     * </code>
     *
     * @param     mixed $careTzArvLabId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByCareTzArvLabId($careTzArvLabId = null, $comparison = null)
    {
        if (is_array($careTzArvLabId)) {
            $useMinMax = false;
            if (isset($careTzArvLabId['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_LAB_ID, $careTzArvLabId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvLabId['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_LAB_ID, $careTzArvLabId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_LAB_ID, $careTzArvLabId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_functional_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvFunctionalStatusId(1234); // WHERE care_tz_arv_functional_status_id = 1234
     * $query->filterByCareTzArvFunctionalStatusId(array(12, 34)); // WHERE care_tz_arv_functional_status_id IN (12, 34)
     * $query->filterByCareTzArvFunctionalStatusId(array('min' => 12)); // WHERE care_tz_arv_functional_status_id > 12
     * </code>
     *
     * @param     mixed $careTzArvFunctionalStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByCareTzArvFunctionalStatusId($careTzArvFunctionalStatusId = null, $comparison = null)
    {
        if (is_array($careTzArvFunctionalStatusId)) {
            $useMinMax = false;
            if (isset($careTzArvFunctionalStatusId['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $careTzArvFunctionalStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvFunctionalStatusId['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $careTzArvFunctionalStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $careTzArvFunctionalStatusId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_exposure_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvExposureId(1234); // WHERE care_tz_arv_exposure_id = 1234
     * $query->filterByCareTzArvExposureId(array(12, 34)); // WHERE care_tz_arv_exposure_id IN (12, 34)
     * $query->filterByCareTzArvExposureId(array('min' => 12)); // WHERE care_tz_arv_exposure_id > 12
     * </code>
     *
     * @param     mixed $careTzArvExposureId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByCareTzArvExposureId($careTzArvExposureId = null, $comparison = null)
    {
        if (is_array($careTzArvExposureId)) {
            $useMinMax = false;
            if (isset($careTzArvExposureId['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_EXPOSURE_ID, $careTzArvExposureId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvExposureId['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_EXPOSURE_ID, $careTzArvExposureId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_EXPOSURE_ID, $careTzArvExposureId, $comparison);
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
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the ctc_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCtcId('fooValue');   // WHERE ctc_id = 'fooValue'
     * $query->filterByCtcId('%fooValue%', Criteria::LIKE); // WHERE ctc_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctcId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByCtcId($ctcId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctcId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CTC_ID, $ctcId, $comparison);
    }

    /**
     * Filter the query on the tb_reg_no column
     *
     * Example usage:
     * <code>
     * $query->filterByTbRegNo('fooValue');   // WHERE tb_reg_no = 'fooValue'
     * $query->filterByTbRegNo('%fooValue%', Criteria::LIKE); // WHERE tb_reg_no LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tbRegNo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByTbRegNo($tbRegNo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tbRegNo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_TB_REG_NO, $tbRegNo, $comparison);
    }

    /**
     * Filter the query on the hbc_number column
     *
     * Example usage:
     * <code>
     * $query->filterByHbcNumber('fooValue');   // WHERE hbc_number = 'fooValue'
     * $query->filterByHbcNumber('%fooValue%', Criteria::LIKE); // WHERE hbc_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hbcNumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByHbcNumber($hbcNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hbcNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_HBC_NUMBER, $hbcNumber, $comparison);
    }

    /**
     * Filter the query on the ten_cell_leader column
     *
     * Example usage:
     * <code>
     * $query->filterByTenCellLeader('fooValue');   // WHERE ten_cell_leader = 'fooValue'
     * $query->filterByTenCellLeader('%fooValue%', Criteria::LIKE); // WHERE ten_cell_leader LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tenCellLeader The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByTenCellLeader($tenCellLeader = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tenCellLeader)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_TEN_CELL_LEADER, $tenCellLeader, $comparison);
    }

    /**
     * Filter the query on the head_of_household column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadOfHousehold('fooValue');   // WHERE head_of_household = 'fooValue'
     * $query->filterByHeadOfHousehold('%fooValue%', Criteria::LIKE); // WHERE head_of_household LIKE '%fooValue%'
     * </code>
     *
     * @param     string $headOfHousehold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByHeadOfHousehold($headOfHousehold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($headOfHousehold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD, $headOfHousehold, $comparison);
    }

    /**
     * Filter the query on the head_of_household_contact column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadOfHouseholdContact('fooValue');   // WHERE head_of_household_contact = 'fooValue'
     * $query->filterByHeadOfHouseholdContact('%fooValue%', Criteria::LIKE); // WHERE head_of_household_contact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $headOfHouseholdContact The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByHeadOfHouseholdContact($headOfHouseholdContact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($headOfHouseholdContact)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD_CONTACT, $headOfHouseholdContact, $comparison);
    }

    /**
     * Filter the query on the date_first_hiv_test column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFirstHivTest('2011-03-14'); // WHERE date_first_hiv_test = '2011-03-14'
     * $query->filterByDateFirstHivTest('now'); // WHERE date_first_hiv_test = '2011-03-14'
     * $query->filterByDateFirstHivTest(array('max' => 'yesterday')); // WHERE date_first_hiv_test > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateFirstHivTest The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByDateFirstHivTest($dateFirstHivTest = null, $comparison = null)
    {
        if (is_array($dateFirstHivTest)) {
            $useMinMax = false;
            if (isset($dateFirstHivTest['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_FIRST_HIV_TEST, $dateFirstHivTest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFirstHivTest['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_FIRST_HIV_TEST, $dateFirstHivTest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_FIRST_HIV_TEST, $dateFirstHivTest, $comparison);
    }

    /**
     * Filter the query on the date_confirmed_hiv column
     *
     * Example usage:
     * <code>
     * $query->filterByDateConfirmedHiv('2011-03-14'); // WHERE date_confirmed_hiv = '2011-03-14'
     * $query->filterByDateConfirmedHiv('now'); // WHERE date_confirmed_hiv = '2011-03-14'
     * $query->filterByDateConfirmedHiv(array('max' => 'yesterday')); // WHERE date_confirmed_hiv > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateConfirmedHiv The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByDateConfirmedHiv($dateConfirmedHiv = null, $comparison = null)
    {
        if (is_array($dateConfirmedHiv)) {
            $useMinMax = false;
            if (isset($dateConfirmedHiv['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_CONFIRMED_HIV, $dateConfirmedHiv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateConfirmedHiv['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_CONFIRMED_HIV, $dateConfirmedHiv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_CONFIRMED_HIV, $dateConfirmedHiv, $comparison);
    }

    /**
     * Filter the query on the date_eligible column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEligible('2011-03-14'); // WHERE date_eligible = '2011-03-14'
     * $query->filterByDateEligible('now'); // WHERE date_eligible = '2011-03-14'
     * $query->filterByDateEligible(array('max' => 'yesterday')); // WHERE date_eligible > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEligible The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByDateEligible($dateEligible = null, $comparison = null)
    {
        if (is_array($dateEligible)) {
            $useMinMax = false;
            if (isset($dateEligible['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_ELIGIBLE, $dateEligible['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEligible['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_ELIGIBLE, $dateEligible['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_ELIGIBLE, $dateEligible, $comparison);
    }

    /**
     * Filter the query on the date_enrolled column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnrolled('2011-03-14'); // WHERE date_enrolled = '2011-03-14'
     * $query->filterByDateEnrolled('now'); // WHERE date_enrolled = '2011-03-14'
     * $query->filterByDateEnrolled(array('max' => 'yesterday')); // WHERE date_enrolled > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEnrolled The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByDateEnrolled($dateEnrolled = null, $comparison = null)
    {
        if (is_array($dateEnrolled)) {
            $useMinMax = false;
            if (isset($dateEnrolled['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_ENROLLED, $dateEnrolled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnrolled['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_ENROLLED, $dateEnrolled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_ENROLLED, $dateEnrolled, $comparison);
    }

    /**
     * Filter the query on the date_ready column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReady('2011-03-14'); // WHERE date_ready = '2011-03-14'
     * $query->filterByDateReady('now'); // WHERE date_ready = '2011-03-14'
     * $query->filterByDateReady(array('max' => 'yesterday')); // WHERE date_ready > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReady The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByDateReady($dateReady = null, $comparison = null)
    {
        if (is_array($dateReady)) {
            $useMinMax = false;
            if (isset($dateReady['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_READY, $dateReady['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReady['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_READY, $dateReady['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_READY, $dateReady, $comparison);
    }

    /**
     * Filter the query on the date_start_art column
     *
     * Example usage:
     * <code>
     * $query->filterByDateStartArt('2011-03-14'); // WHERE date_start_art = '2011-03-14'
     * $query->filterByDateStartArt('now'); // WHERE date_start_art = '2011-03-14'
     * $query->filterByDateStartArt(array('max' => 'yesterday')); // WHERE date_start_art > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateStartArt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByDateStartArt($dateStartArt = null, $comparison = null)
    {
        if (is_array($dateStartArt)) {
            $useMinMax = false;
            if (isset($dateStartArt['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_START_ART, $dateStartArt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateStartArt['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_START_ART, $dateStartArt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_DATE_START_ART, $dateStartArt, $comparison);
    }

    /**
     * Filter the query on the age_start_art column
     *
     * Example usage:
     * <code>
     * $query->filterByAgeStartArt(1234); // WHERE age_start_art = 1234
     * $query->filterByAgeStartArt(array(12, 34)); // WHERE age_start_art IN (12, 34)
     * $query->filterByAgeStartArt(array('min' => 12)); // WHERE age_start_art > 12
     * </code>
     *
     * @param     mixed $ageStartArt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByAgeStartArt($ageStartArt = null, $comparison = null)
    {
        if (is_array($ageStartArt)) {
            $useMinMax = false;
            if (isset($ageStartArt['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_AGE_START_ART, $ageStartArt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ageStartArt['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_AGE_START_ART, $ageStartArt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_AGE_START_ART, $ageStartArt, $comparison);
    }

    /**
     * Filter the query on the status_clinical_stage column
     *
     * Example usage:
     * <code>
     * $query->filterByStatusClinicalStage(1234); // WHERE status_clinical_stage = 1234
     * $query->filterByStatusClinicalStage(array(12, 34)); // WHERE status_clinical_stage IN (12, 34)
     * $query->filterByStatusClinicalStage(array('min' => 12)); // WHERE status_clinical_stage > 12
     * </code>
     *
     * @param     mixed $statusClinicalStage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByStatusClinicalStage($statusClinicalStage = null, $comparison = null)
    {
        if (is_array($statusClinicalStage)) {
            $useMinMax = false;
            if (isset($statusClinicalStage['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_STATUS_CLINICAL_STAGE, $statusClinicalStage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statusClinicalStage['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_STATUS_CLINICAL_STAGE, $statusClinicalStage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_STATUS_CLINICAL_STAGE, $statusClinicalStage, $comparison);
    }

    /**
     * Filter the query on the status_weight column
     *
     * Example usage:
     * <code>
     * $query->filterByStatusWeight(1234); // WHERE status_weight = 1234
     * $query->filterByStatusWeight(array(12, 34)); // WHERE status_weight IN (12, 34)
     * $query->filterByStatusWeight(array('min' => 12)); // WHERE status_weight > 12
     * </code>
     *
     * @param     mixed $statusWeight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByStatusWeight($statusWeight = null, $comparison = null)
    {
        if (is_array($statusWeight)) {
            $useMinMax = false;
            if (isset($statusWeight['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_STATUS_WEIGHT, $statusWeight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statusWeight['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_STATUS_WEIGHT, $statusWeight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_STATUS_WEIGHT, $statusWeight, $comparison);
    }

    /**
     * Filter the query on the status_height column
     *
     * Example usage:
     * <code>
     * $query->filterByStatusHeight(1234); // WHERE status_height = 1234
     * $query->filterByStatusHeight(array(12, 34)); // WHERE status_height IN (12, 34)
     * $query->filterByStatusHeight(array('min' => 12)); // WHERE status_height > 12
     * </code>
     *
     * @param     mixed $statusHeight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByStatusHeight($statusHeight = null, $comparison = null)
    {
        if (is_array($statusHeight)) {
            $useMinMax = false;
            if (isset($statusHeight['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_STATUS_HEIGHT, $statusHeight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statusHeight['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_STATUS_HEIGHT, $statusHeight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_STATUS_HEIGHT, $statusHeight, $comparison);
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
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CREATE_TIME, $createTime, $comparison);
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
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvRegistration $careTzArvRegistration Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvRegistrationQuery The current query, for fluid interface
     */
    public function prune($careTzArvRegistration = null)
    {
        if ($careTzArvRegistration) {
            $this->addUsingAlias(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistration->getCareTzArvRegistrationId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_registration table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegistrationTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvRegistrationTableMap::clearInstancePool();
            CareTzArvRegistrationTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegistrationTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvRegistrationTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvRegistrationTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvRegistrationTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvRegistrationQuery
