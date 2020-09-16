<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvVisit as ChildCareTzArvVisit;
use CareMd\CareMd\CareTzArvVisitQuery as ChildCareTzArvVisitQuery;
use CareMd\CareMd\Map\CareTzArvVisitTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_visit' table.
 *
 *
 *
 * @method     ChildCareTzArvVisitQuery orderByCareTzArvVisit2Id($order = Criteria::ASC) Order by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvVisitQuery orderByCareTzArvRegistrationId($order = Criteria::ASC) Order by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvVisitQuery orderByCareTzArvAdherCodeId($order = Criteria::ASC) Order by the care_tz_arv_adher_code_id column
 * @method     ChildCareTzArvVisitQuery orderByCareTzArvFunctionalStatusId($order = Criteria::ASC) Order by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvVisitQuery orderByCareTzArvTbStatusId($order = Criteria::ASC) Order by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvVisitQuery orderByCareTzArvCaseId($order = Criteria::ASC) Order by the care_tz_arv_case_id column
 * @method     ChildCareTzArvVisitQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTzArvVisitQuery orderByVisitDate($order = Criteria::ASC) Order by the visit_date column
 * @method     ChildCareTzArvVisitQuery orderByCareTzArvStatusId($order = Criteria::ASC) Order by the care_tz_arv_status_id column
 * @method     ChildCareTzArvVisitQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     ChildCareTzArvVisitQuery orderByHeight($order = Criteria::ASC) Order by the height column
 * @method     ChildCareTzArvVisitQuery orderByClinicalStage($order = Criteria::ASC) Order by the clinical_stage column
 * @method     ChildCareTzArvVisitQuery orderByPregnant($order = Criteria::ASC) Order by the pregnant column
 * @method     ChildCareTzArvVisitQuery orderByDateOfDelivery($order = Criteria::ASC) Order by the date_of_delivery column
 * @method     ChildCareTzArvVisitQuery orderByTestTb($order = Criteria::ASC) Order by the test_TB column
 * @method     ChildCareTzArvVisitQuery orderByCotrim($order = Criteria::ASC) Order by the cotrim column
 * @method     ChildCareTzArvVisitQuery orderByTestInh($order = Criteria::ASC) Order by the test_INH column
 * @method     ChildCareTzArvVisitQuery orderByDiflucan($order = Criteria::ASC) Order by the diflucan column
 * @method     ChildCareTzArvVisitQuery orderByNutritionSupport($order = Criteria::ASC) Order by the nutrition_support column
 * @method     ChildCareTzArvVisitQuery orderByNextVisitDate($order = Criteria::ASC) Order by the next_visit_date column
 * @method     ChildCareTzArvVisitQuery orderByOtherProblems($order = Criteria::ASC) Order by the other_problems column
 * @method     ChildCareTzArvVisitQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTzArvVisitQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareTzArvVisitQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTzArvVisitQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTzArvVisitQuery orderByHistory($order = Criteria::ASC) Order by the history column
 *
 * @method     ChildCareTzArvVisitQuery groupByCareTzArvVisit2Id() Group by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvVisitQuery groupByCareTzArvRegistrationId() Group by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvVisitQuery groupByCareTzArvAdherCodeId() Group by the care_tz_arv_adher_code_id column
 * @method     ChildCareTzArvVisitQuery groupByCareTzArvFunctionalStatusId() Group by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvVisitQuery groupByCareTzArvTbStatusId() Group by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvVisitQuery groupByCareTzArvCaseId() Group by the care_tz_arv_case_id column
 * @method     ChildCareTzArvVisitQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTzArvVisitQuery groupByVisitDate() Group by the visit_date column
 * @method     ChildCareTzArvVisitQuery groupByCareTzArvStatusId() Group by the care_tz_arv_status_id column
 * @method     ChildCareTzArvVisitQuery groupByWeight() Group by the weight column
 * @method     ChildCareTzArvVisitQuery groupByHeight() Group by the height column
 * @method     ChildCareTzArvVisitQuery groupByClinicalStage() Group by the clinical_stage column
 * @method     ChildCareTzArvVisitQuery groupByPregnant() Group by the pregnant column
 * @method     ChildCareTzArvVisitQuery groupByDateOfDelivery() Group by the date_of_delivery column
 * @method     ChildCareTzArvVisitQuery groupByTestTb() Group by the test_TB column
 * @method     ChildCareTzArvVisitQuery groupByCotrim() Group by the cotrim column
 * @method     ChildCareTzArvVisitQuery groupByTestInh() Group by the test_INH column
 * @method     ChildCareTzArvVisitQuery groupByDiflucan() Group by the diflucan column
 * @method     ChildCareTzArvVisitQuery groupByNutritionSupport() Group by the nutrition_support column
 * @method     ChildCareTzArvVisitQuery groupByNextVisitDate() Group by the next_visit_date column
 * @method     ChildCareTzArvVisitQuery groupByOtherProblems() Group by the other_problems column
 * @method     ChildCareTzArvVisitQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTzArvVisitQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareTzArvVisitQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTzArvVisitQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTzArvVisitQuery groupByHistory() Group by the history column
 *
 * @method     ChildCareTzArvVisitQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvVisitQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvVisitQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvVisitQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvVisitQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvVisitQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvVisit findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvVisit matching the query
 * @method     ChildCareTzArvVisit findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvVisit matching the query, or a new ChildCareTzArvVisit object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvVisit findOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvVisit findOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvVisit findOneByCareTzArvAdherCodeId(string $care_tz_arv_adher_code_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_adher_code_id column
 * @method     ChildCareTzArvVisit findOneByCareTzArvFunctionalStatusId(int $care_tz_arv_functional_status_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvVisit findOneByCareTzArvTbStatusId(string $care_tz_arv_tb_status_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvVisit findOneByCareTzArvCaseId(string $care_tz_arv_case_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_case_id column
 * @method     ChildCareTzArvVisit findOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzArvVisit filtered by the encounter_nr column
 * @method     ChildCareTzArvVisit findOneByVisitDate(string $visit_date) Return the first ChildCareTzArvVisit filtered by the visit_date column
 * @method     ChildCareTzArvVisit findOneByCareTzArvStatusId(string $care_tz_arv_status_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_status_id column
 * @method     ChildCareTzArvVisit findOneByWeight(double $weight) Return the first ChildCareTzArvVisit filtered by the weight column
 * @method     ChildCareTzArvVisit findOneByHeight(double $height) Return the first ChildCareTzArvVisit filtered by the height column
 * @method     ChildCareTzArvVisit findOneByClinicalStage(int $clinical_stage) Return the first ChildCareTzArvVisit filtered by the clinical_stage column
 * @method     ChildCareTzArvVisit findOneByPregnant(boolean $pregnant) Return the first ChildCareTzArvVisit filtered by the pregnant column
 * @method     ChildCareTzArvVisit findOneByDateOfDelivery(string $date_of_delivery) Return the first ChildCareTzArvVisit filtered by the date_of_delivery column
 * @method     ChildCareTzArvVisit findOneByTestTb(boolean $test_TB) Return the first ChildCareTzArvVisit filtered by the test_TB column
 * @method     ChildCareTzArvVisit findOneByCotrim(boolean $cotrim) Return the first ChildCareTzArvVisit filtered by the cotrim column
 * @method     ChildCareTzArvVisit findOneByTestInh(boolean $test_INH) Return the first ChildCareTzArvVisit filtered by the test_INH column
 * @method     ChildCareTzArvVisit findOneByDiflucan(boolean $diflucan) Return the first ChildCareTzArvVisit filtered by the diflucan column
 * @method     ChildCareTzArvVisit findOneByNutritionSupport(boolean $nutrition_support) Return the first ChildCareTzArvVisit filtered by the nutrition_support column
 * @method     ChildCareTzArvVisit findOneByNextVisitDate(string $next_visit_date) Return the first ChildCareTzArvVisit filtered by the next_visit_date column
 * @method     ChildCareTzArvVisit findOneByOtherProblems(string $other_problems) Return the first ChildCareTzArvVisit filtered by the other_problems column
 * @method     ChildCareTzArvVisit findOneByCreateId(string $create_id) Return the first ChildCareTzArvVisit filtered by the create_id column
 * @method     ChildCareTzArvVisit findOneByCreateTime(string $create_time) Return the first ChildCareTzArvVisit filtered by the create_time column
 * @method     ChildCareTzArvVisit findOneByModifyId(string $modify_id) Return the first ChildCareTzArvVisit filtered by the modify_id column
 * @method     ChildCareTzArvVisit findOneByModifyTime(string $modify_time) Return the first ChildCareTzArvVisit filtered by the modify_time column
 * @method     ChildCareTzArvVisit findOneByHistory(string $history) Return the first ChildCareTzArvVisit filtered by the history column *

 * @method     ChildCareTzArvVisit requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvVisit by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvVisit matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvVisit requireOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_visit_2_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_registration_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByCareTzArvAdherCodeId(string $care_tz_arv_adher_code_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_adher_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByCareTzArvFunctionalStatusId(int $care_tz_arv_functional_status_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_functional_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByCareTzArvTbStatusId(string $care_tz_arv_tb_status_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_tb_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByCareTzArvCaseId(string $care_tz_arv_case_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_case_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzArvVisit filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByVisitDate(string $visit_date) Return the first ChildCareTzArvVisit filtered by the visit_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByCareTzArvStatusId(string $care_tz_arv_status_id) Return the first ChildCareTzArvVisit filtered by the care_tz_arv_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByWeight(double $weight) Return the first ChildCareTzArvVisit filtered by the weight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByHeight(double $height) Return the first ChildCareTzArvVisit filtered by the height column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByClinicalStage(int $clinical_stage) Return the first ChildCareTzArvVisit filtered by the clinical_stage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByPregnant(boolean $pregnant) Return the first ChildCareTzArvVisit filtered by the pregnant column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByDateOfDelivery(string $date_of_delivery) Return the first ChildCareTzArvVisit filtered by the date_of_delivery column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByTestTb(boolean $test_TB) Return the first ChildCareTzArvVisit filtered by the test_TB column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByCotrim(boolean $cotrim) Return the first ChildCareTzArvVisit filtered by the cotrim column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByTestInh(boolean $test_INH) Return the first ChildCareTzArvVisit filtered by the test_INH column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByDiflucan(boolean $diflucan) Return the first ChildCareTzArvVisit filtered by the diflucan column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByNutritionSupport(boolean $nutrition_support) Return the first ChildCareTzArvVisit filtered by the nutrition_support column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByNextVisitDate(string $next_visit_date) Return the first ChildCareTzArvVisit filtered by the next_visit_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByOtherProblems(string $other_problems) Return the first ChildCareTzArvVisit filtered by the other_problems column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByCreateId(string $create_id) Return the first ChildCareTzArvVisit filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByCreateTime(string $create_time) Return the first ChildCareTzArvVisit filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByModifyId(string $modify_id) Return the first ChildCareTzArvVisit filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByModifyTime(string $modify_time) Return the first ChildCareTzArvVisit filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit requireOneByHistory(string $history) Return the first ChildCareTzArvVisit filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvVisit[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvVisit objects based on current ModelCriteria
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return ChildCareTzArvVisit objects filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return ChildCareTzArvVisit objects filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByCareTzArvAdherCodeId(string $care_tz_arv_adher_code_id) Return ChildCareTzArvVisit objects filtered by the care_tz_arv_adher_code_id column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByCareTzArvFunctionalStatusId(int $care_tz_arv_functional_status_id) Return ChildCareTzArvVisit objects filtered by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByCareTzArvTbStatusId(string $care_tz_arv_tb_status_id) Return ChildCareTzArvVisit objects filtered by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByCareTzArvCaseId(string $care_tz_arv_case_id) Return ChildCareTzArvVisit objects filtered by the care_tz_arv_case_id column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByEncounterNr(string $encounter_nr) Return ChildCareTzArvVisit objects filtered by the encounter_nr column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByVisitDate(string $visit_date) Return ChildCareTzArvVisit objects filtered by the visit_date column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByCareTzArvStatusId(string $care_tz_arv_status_id) Return ChildCareTzArvVisit objects filtered by the care_tz_arv_status_id column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByWeight(double $weight) Return ChildCareTzArvVisit objects filtered by the weight column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByHeight(double $height) Return ChildCareTzArvVisit objects filtered by the height column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByClinicalStage(int $clinical_stage) Return ChildCareTzArvVisit objects filtered by the clinical_stage column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByPregnant(boolean $pregnant) Return ChildCareTzArvVisit objects filtered by the pregnant column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByDateOfDelivery(string $date_of_delivery) Return ChildCareTzArvVisit objects filtered by the date_of_delivery column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByTestTb(boolean $test_TB) Return ChildCareTzArvVisit objects filtered by the test_TB column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByCotrim(boolean $cotrim) Return ChildCareTzArvVisit objects filtered by the cotrim column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByTestInh(boolean $test_INH) Return ChildCareTzArvVisit objects filtered by the test_INH column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByDiflucan(boolean $diflucan) Return ChildCareTzArvVisit objects filtered by the diflucan column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByNutritionSupport(boolean $nutrition_support) Return ChildCareTzArvVisit objects filtered by the nutrition_support column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByNextVisitDate(string $next_visit_date) Return ChildCareTzArvVisit objects filtered by the next_visit_date column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByOtherProblems(string $other_problems) Return ChildCareTzArvVisit objects filtered by the other_problems column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTzArvVisit objects filtered by the create_id column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTzArvVisit objects filtered by the create_time column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTzArvVisit objects filtered by the modify_id column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTzArvVisit objects filtered by the modify_time column
 * @method     ChildCareTzArvVisit[]|ObjectCollection findByHistory(string $history) Return ChildCareTzArvVisit objects filtered by the history column
 * @method     ChildCareTzArvVisit[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvVisitQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvVisitQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvVisit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvVisitQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvVisitQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvVisitQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvVisitQuery();
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
     * @return ChildCareTzArvVisit|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvVisitTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvVisitTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvVisit A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_visit_2_id, care_tz_arv_registration_id, care_tz_arv_adher_code_id, care_tz_arv_functional_status_id, care_tz_arv_tb_status_id, care_tz_arv_case_id, encounter_nr, visit_date, care_tz_arv_status_id, weight, height, clinical_stage, pregnant, date_of_delivery, test_TB, cotrim, test_INH, diflucan, nutrition_support, next_visit_date, other_problems, create_id, create_time, modify_id, modify_time, history FROM care_tz_arv_visit WHERE care_tz_arv_visit_2_id = :p0';
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
            /** @var ChildCareTzArvVisit $obj */
            $obj = new ChildCareTzArvVisit();
            $obj->hydrate($row);
            CareTzArvVisitTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvVisit|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_visit_2_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvVisit2Id(1234); // WHERE care_tz_arv_visit_2_id = 1234
     * $query->filterByCareTzArvVisit2Id(array(12, 34)); // WHERE care_tz_arv_visit_2_id IN (12, 34)
     * $query->filterByCareTzArvVisit2Id(array('min' => 12)); // WHERE care_tz_arv_visit_2_id > 12
     * </code>
     *
     * @param     mixed $careTzArvVisit2Id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByCareTzArvVisit2Id($careTzArvVisit2Id = null, $comparison = null)
    {
        if (is_array($careTzArvVisit2Id)) {
            $useMinMax = false;
            if (isset($careTzArvVisit2Id['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvVisit2Id['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id, $comparison);
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
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegistrationId($careTzArvRegistrationId = null, $comparison = null)
    {
        if (is_array($careTzArvRegistrationId)) {
            $useMinMax = false;
            if (isset($careTzArvRegistrationId['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegistrationId['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_adher_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvAdherCodeId(1234); // WHERE care_tz_arv_adher_code_id = 1234
     * $query->filterByCareTzArvAdherCodeId(array(12, 34)); // WHERE care_tz_arv_adher_code_id IN (12, 34)
     * $query->filterByCareTzArvAdherCodeId(array('min' => 12)); // WHERE care_tz_arv_adher_code_id > 12
     * </code>
     *
     * @param     mixed $careTzArvAdherCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByCareTzArvAdherCodeId($careTzArvAdherCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvAdherCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvAdherCodeId['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID, $careTzArvAdherCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvAdherCodeId['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID, $careTzArvAdherCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID, $careTzArvAdherCodeId, $comparison);
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
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByCareTzArvFunctionalStatusId($careTzArvFunctionalStatusId = null, $comparison = null)
    {
        if (is_array($careTzArvFunctionalStatusId)) {
            $useMinMax = false;
            if (isset($careTzArvFunctionalStatusId['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $careTzArvFunctionalStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvFunctionalStatusId['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $careTzArvFunctionalStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $careTzArvFunctionalStatusId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_tb_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvTbStatusId(1234); // WHERE care_tz_arv_tb_status_id = 1234
     * $query->filterByCareTzArvTbStatusId(array(12, 34)); // WHERE care_tz_arv_tb_status_id IN (12, 34)
     * $query->filterByCareTzArvTbStatusId(array('min' => 12)); // WHERE care_tz_arv_tb_status_id > 12
     * </code>
     *
     * @param     mixed $careTzArvTbStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByCareTzArvTbStatusId($careTzArvTbStatusId = null, $comparison = null)
    {
        if (is_array($careTzArvTbStatusId)) {
            $useMinMax = false;
            if (isset($careTzArvTbStatusId['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $careTzArvTbStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvTbStatusId['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $careTzArvTbStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $careTzArvTbStatusId, $comparison);
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
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByCareTzArvCaseId($careTzArvCaseId = null, $comparison = null)
    {
        if (is_array($careTzArvCaseId)) {
            $useMinMax = false;
            if (isset($careTzArvCaseId['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_CASE_ID, $careTzArvCaseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvCaseId['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_CASE_ID, $careTzArvCaseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_CASE_ID, $careTzArvCaseId, $comparison);
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
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the visit_date column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitDate('2011-03-14'); // WHERE visit_date = '2011-03-14'
     * $query->filterByVisitDate('now'); // WHERE visit_date = '2011-03-14'
     * $query->filterByVisitDate(array('max' => 'yesterday')); // WHERE visit_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $visitDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByVisitDate($visitDate = null, $comparison = null)
    {
        if (is_array($visitDate)) {
            $useMinMax = false;
            if (isset($visitDate['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_VISIT_DATE, $visitDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitDate['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_VISIT_DATE, $visitDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_VISIT_DATE, $visitDate, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvStatusId(1234); // WHERE care_tz_arv_status_id = 1234
     * $query->filterByCareTzArvStatusId(array(12, 34)); // WHERE care_tz_arv_status_id IN (12, 34)
     * $query->filterByCareTzArvStatusId(array('min' => 12)); // WHERE care_tz_arv_status_id > 12
     * </code>
     *
     * @param     mixed $careTzArvStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByCareTzArvStatusId($careTzArvStatusId = null, $comparison = null)
    {
        if (is_array($careTzArvStatusId)) {
            $useMinMax = false;
            if (isset($careTzArvStatusId['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_STATUS_ID, $careTzArvStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvStatusId['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_STATUS_ID, $careTzArvStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_STATUS_ID, $careTzArvStatusId, $comparison);
    }

    /**
     * Filter the query on the weight column
     *
     * Example usage:
     * <code>
     * $query->filterByWeight(1234); // WHERE weight = 1234
     * $query->filterByWeight(array(12, 34)); // WHERE weight IN (12, 34)
     * $query->filterByWeight(array('min' => 12)); // WHERE weight > 12
     * </code>
     *
     * @param     mixed $weight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_WEIGHT, $weight, $comparison);
    }

    /**
     * Filter the query on the height column
     *
     * Example usage:
     * <code>
     * $query->filterByHeight(1234); // WHERE height = 1234
     * $query->filterByHeight(array(12, 34)); // WHERE height IN (12, 34)
     * $query->filterByHeight(array('min' => 12)); // WHERE height > 12
     * </code>
     *
     * @param     mixed $height The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByHeight($height = null, $comparison = null)
    {
        if (is_array($height)) {
            $useMinMax = false;
            if (isset($height['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_HEIGHT, $height['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($height['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_HEIGHT, $height['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_HEIGHT, $height, $comparison);
    }

    /**
     * Filter the query on the clinical_stage column
     *
     * Example usage:
     * <code>
     * $query->filterByClinicalStage(1234); // WHERE clinical_stage = 1234
     * $query->filterByClinicalStage(array(12, 34)); // WHERE clinical_stage IN (12, 34)
     * $query->filterByClinicalStage(array('min' => 12)); // WHERE clinical_stage > 12
     * </code>
     *
     * @param     mixed $clinicalStage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByClinicalStage($clinicalStage = null, $comparison = null)
    {
        if (is_array($clinicalStage)) {
            $useMinMax = false;
            if (isset($clinicalStage['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CLINICAL_STAGE, $clinicalStage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clinicalStage['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CLINICAL_STAGE, $clinicalStage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CLINICAL_STAGE, $clinicalStage, $comparison);
    }

    /**
     * Filter the query on the pregnant column
     *
     * Example usage:
     * <code>
     * $query->filterByPregnant(true); // WHERE pregnant = true
     * $query->filterByPregnant('yes'); // WHERE pregnant = true
     * </code>
     *
     * @param     boolean|string $pregnant The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByPregnant($pregnant = null, $comparison = null)
    {
        if (is_string($pregnant)) {
            $pregnant = in_array(strtolower($pregnant), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_PREGNANT, $pregnant, $comparison);
    }

    /**
     * Filter the query on the date_of_delivery column
     *
     * Example usage:
     * <code>
     * $query->filterByDateOfDelivery('2011-03-14'); // WHERE date_of_delivery = '2011-03-14'
     * $query->filterByDateOfDelivery('now'); // WHERE date_of_delivery = '2011-03-14'
     * $query->filterByDateOfDelivery(array('max' => 'yesterday')); // WHERE date_of_delivery > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateOfDelivery The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByDateOfDelivery($dateOfDelivery = null, $comparison = null)
    {
        if (is_array($dateOfDelivery)) {
            $useMinMax = false;
            if (isset($dateOfDelivery['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_DATE_OF_DELIVERY, $dateOfDelivery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateOfDelivery['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_DATE_OF_DELIVERY, $dateOfDelivery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_DATE_OF_DELIVERY, $dateOfDelivery, $comparison);
    }

    /**
     * Filter the query on the test_TB column
     *
     * Example usage:
     * <code>
     * $query->filterByTestTb(true); // WHERE test_TB = true
     * $query->filterByTestTb('yes'); // WHERE test_TB = true
     * </code>
     *
     * @param     boolean|string $testTb The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByTestTb($testTb = null, $comparison = null)
    {
        if (is_string($testTb)) {
            $testTb = in_array(strtolower($testTb), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_TEST_TB, $testTb, $comparison);
    }

    /**
     * Filter the query on the cotrim column
     *
     * Example usage:
     * <code>
     * $query->filterByCotrim(true); // WHERE cotrim = true
     * $query->filterByCotrim('yes'); // WHERE cotrim = true
     * </code>
     *
     * @param     boolean|string $cotrim The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByCotrim($cotrim = null, $comparison = null)
    {
        if (is_string($cotrim)) {
            $cotrim = in_array(strtolower($cotrim), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_COTRIM, $cotrim, $comparison);
    }

    /**
     * Filter the query on the test_INH column
     *
     * Example usage:
     * <code>
     * $query->filterByTestInh(true); // WHERE test_INH = true
     * $query->filterByTestInh('yes'); // WHERE test_INH = true
     * </code>
     *
     * @param     boolean|string $testInh The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByTestInh($testInh = null, $comparison = null)
    {
        if (is_string($testInh)) {
            $testInh = in_array(strtolower($testInh), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_TEST_INH, $testInh, $comparison);
    }

    /**
     * Filter the query on the diflucan column
     *
     * Example usage:
     * <code>
     * $query->filterByDiflucan(true); // WHERE diflucan = true
     * $query->filterByDiflucan('yes'); // WHERE diflucan = true
     * </code>
     *
     * @param     boolean|string $diflucan The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByDiflucan($diflucan = null, $comparison = null)
    {
        if (is_string($diflucan)) {
            $diflucan = in_array(strtolower($diflucan), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_DIFLUCAN, $diflucan, $comparison);
    }

    /**
     * Filter the query on the nutrition_support column
     *
     * Example usage:
     * <code>
     * $query->filterByNutritionSupport(true); // WHERE nutrition_support = true
     * $query->filterByNutritionSupport('yes'); // WHERE nutrition_support = true
     * </code>
     *
     * @param     boolean|string $nutritionSupport The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByNutritionSupport($nutritionSupport = null, $comparison = null)
    {
        if (is_string($nutritionSupport)) {
            $nutritionSupport = in_array(strtolower($nutritionSupport), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_NUTRITION_SUPPORT, $nutritionSupport, $comparison);
    }

    /**
     * Filter the query on the next_visit_date column
     *
     * Example usage:
     * <code>
     * $query->filterByNextVisitDate('2011-03-14'); // WHERE next_visit_date = '2011-03-14'
     * $query->filterByNextVisitDate('now'); // WHERE next_visit_date = '2011-03-14'
     * $query->filterByNextVisitDate(array('max' => 'yesterday')); // WHERE next_visit_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $nextVisitDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByNextVisitDate($nextVisitDate = null, $comparison = null)
    {
        if (is_array($nextVisitDate)) {
            $useMinMax = false;
            if (isset($nextVisitDate['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_NEXT_VISIT_DATE, $nextVisitDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nextVisitDate['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_NEXT_VISIT_DATE, $nextVisitDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_NEXT_VISIT_DATE, $nextVisitDate, $comparison);
    }

    /**
     * Filter the query on the other_problems column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherProblems('fooValue');   // WHERE other_problems = 'fooValue'
     * $query->filterByOtherProblems('%fooValue%', Criteria::LIKE); // WHERE other_problems LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherProblems The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByOtherProblems($otherProblems = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherProblems)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_OTHER_PROBLEMS, $otherProblems, $comparison);
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
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_CREATE_TIME, $createTime, $comparison);
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
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTzArvVisitTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvVisit $careTzArvVisit Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvVisitQuery The current query, for fluid interface
     */
    public function prune($careTzArvVisit = null)
    {
        if ($careTzArvVisit) {
            $this->addUsingAlias(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit->getCareTzArvVisit2Id(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_visit table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisitTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvVisitTableMap::clearInstancePool();
            CareTzArvVisitTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisitTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvVisitTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvVisitTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvVisitTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvVisitQuery
