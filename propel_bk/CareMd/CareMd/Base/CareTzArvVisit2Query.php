<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvVisit2 as ChildCareTzArvVisit2;
use CareMd\CareMd\CareTzArvVisit2Query as ChildCareTzArvVisit2Query;
use CareMd\CareMd\Map\CareTzArvVisit2TableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_visit_2' table.
 *
 *
 *
 * @method     ChildCareTzArvVisit2Query orderByCareTzArvVisit2Id($order = Criteria::ASC) Order by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvVisit2Query orderByCareTzArvRegistrationId($order = Criteria::ASC) Order by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvVisit2Query orderByCareTzArvAdherCodeId($order = Criteria::ASC) Order by the care_tz_arv_adher_code_id column
 * @method     ChildCareTzArvVisit2Query orderByCareTzArvFunctionalStatusId($order = Criteria::ASC) Order by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvVisit2Query orderByCareTzArvTbStatusId($order = Criteria::ASC) Order by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvVisit2Query orderByCareTzArvStatusId($order = Criteria::ASC) Order by the care_tz_arv_status_id column
 * @method     ChildCareTzArvVisit2Query orderByCareTzArvNutritionalStatusId($order = Criteria::ASC) Order by the care_tz_arv_nutritional_status_id column
 * @method     ChildCareTzArvVisit2Query orderByCareTzArvNutritionalSuppId($order = Criteria::ASC) Order by the care_tz_arv_nutritional_supp_id column
 * @method     ChildCareTzArvVisit2Query orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTzArvVisit2Query orderByVisitDate($order = Criteria::ASC) Order by the visit_date column
 * @method     ChildCareTzArvVisit2Query orderByCareTzArvVisitTypeId($order = Criteria::ASC) Order by the care_tz_arv_visit_type_id column
 * @method     ChildCareTzArvVisit2Query orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     ChildCareTzArvVisit2Query orderByHeight($order = Criteria::ASC) Order by the height column
 * @method     ChildCareTzArvVisit2Query orderByClinicalStage($order = Criteria::ASC) Order by the clinical_stage column
 * @method     ChildCareTzArvVisit2Query orderByPregnant($order = Criteria::ASC) Order by the pregnant column
 * @method     ChildCareTzArvVisit2Query orderByDateOfDelivery($order = Criteria::ASC) Order by the date_of_delivery column
 * @method     ChildCareTzArvVisit2Query orderByFamilyPlanningId($order = Criteria::ASC) Order by the family_planning_id column
 * @method     ChildCareTzArvVisit2Query orderByPregClinicId($order = Criteria::ASC) Order by the preg_clinic_id column
 * @method     ChildCareTzArvVisit2Query orderByCotrim($order = Criteria::ASC) Order by the cotrim column
 * @method     ChildCareTzArvVisit2Query orderByDiflucan($order = Criteria::ASC) Order by the diflucan column
 * @method     ChildCareTzArvVisit2Query orderByNutritionSupport($order = Criteria::ASC) Order by the nutrition_support column
 * @method     ChildCareTzArvVisit2Query orderByNextVisitDate($order = Criteria::ASC) Order by the next_visit_date column
 * @method     ChildCareTzArvVisit2Query orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTzArvVisit2Query orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareTzArvVisit2Query orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTzArvVisit2Query orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTzArvVisit2Query orderByHistory($order = Criteria::ASC) Order by the history column
 *
 * @method     ChildCareTzArvVisit2Query groupByCareTzArvVisit2Id() Group by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvVisit2Query groupByCareTzArvRegistrationId() Group by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvVisit2Query groupByCareTzArvAdherCodeId() Group by the care_tz_arv_adher_code_id column
 * @method     ChildCareTzArvVisit2Query groupByCareTzArvFunctionalStatusId() Group by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvVisit2Query groupByCareTzArvTbStatusId() Group by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvVisit2Query groupByCareTzArvStatusId() Group by the care_tz_arv_status_id column
 * @method     ChildCareTzArvVisit2Query groupByCareTzArvNutritionalStatusId() Group by the care_tz_arv_nutritional_status_id column
 * @method     ChildCareTzArvVisit2Query groupByCareTzArvNutritionalSuppId() Group by the care_tz_arv_nutritional_supp_id column
 * @method     ChildCareTzArvVisit2Query groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTzArvVisit2Query groupByVisitDate() Group by the visit_date column
 * @method     ChildCareTzArvVisit2Query groupByCareTzArvVisitTypeId() Group by the care_tz_arv_visit_type_id column
 * @method     ChildCareTzArvVisit2Query groupByWeight() Group by the weight column
 * @method     ChildCareTzArvVisit2Query groupByHeight() Group by the height column
 * @method     ChildCareTzArvVisit2Query groupByClinicalStage() Group by the clinical_stage column
 * @method     ChildCareTzArvVisit2Query groupByPregnant() Group by the pregnant column
 * @method     ChildCareTzArvVisit2Query groupByDateOfDelivery() Group by the date_of_delivery column
 * @method     ChildCareTzArvVisit2Query groupByFamilyPlanningId() Group by the family_planning_id column
 * @method     ChildCareTzArvVisit2Query groupByPregClinicId() Group by the preg_clinic_id column
 * @method     ChildCareTzArvVisit2Query groupByCotrim() Group by the cotrim column
 * @method     ChildCareTzArvVisit2Query groupByDiflucan() Group by the diflucan column
 * @method     ChildCareTzArvVisit2Query groupByNutritionSupport() Group by the nutrition_support column
 * @method     ChildCareTzArvVisit2Query groupByNextVisitDate() Group by the next_visit_date column
 * @method     ChildCareTzArvVisit2Query groupByCreateId() Group by the create_id column
 * @method     ChildCareTzArvVisit2Query groupByCreateTime() Group by the create_time column
 * @method     ChildCareTzArvVisit2Query groupByModifyId() Group by the modify_id column
 * @method     ChildCareTzArvVisit2Query groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTzArvVisit2Query groupByHistory() Group by the history column
 *
 * @method     ChildCareTzArvVisit2Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvVisit2Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvVisit2Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvVisit2Query leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvVisit2Query rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvVisit2Query innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvVisit2 findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvVisit2 matching the query
 * @method     ChildCareTzArvVisit2 findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvVisit2 matching the query, or a new ChildCareTzArvVisit2 object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvVisit2 findOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvVisit2 findOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvVisit2 findOneByCareTzArvAdherCodeId(string $care_tz_arv_adher_code_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_adher_code_id column
 * @method     ChildCareTzArvVisit2 findOneByCareTzArvFunctionalStatusId(int $care_tz_arv_functional_status_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvVisit2 findOneByCareTzArvTbStatusId(string $care_tz_arv_tb_status_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvVisit2 findOneByCareTzArvStatusId(string $care_tz_arv_status_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_status_id column
 * @method     ChildCareTzArvVisit2 findOneByCareTzArvNutritionalStatusId(int $care_tz_arv_nutritional_status_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_nutritional_status_id column
 * @method     ChildCareTzArvVisit2 findOneByCareTzArvNutritionalSuppId(int $care_tz_arv_nutritional_supp_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_nutritional_supp_id column
 * @method     ChildCareTzArvVisit2 findOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzArvVisit2 filtered by the encounter_nr column
 * @method     ChildCareTzArvVisit2 findOneByVisitDate(string $visit_date) Return the first ChildCareTzArvVisit2 filtered by the visit_date column
 * @method     ChildCareTzArvVisit2 findOneByCareTzArvVisitTypeId(int $care_tz_arv_visit_type_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_visit_type_id column
 * @method     ChildCareTzArvVisit2 findOneByWeight(double $weight) Return the first ChildCareTzArvVisit2 filtered by the weight column
 * @method     ChildCareTzArvVisit2 findOneByHeight(double $height) Return the first ChildCareTzArvVisit2 filtered by the height column
 * @method     ChildCareTzArvVisit2 findOneByClinicalStage(int $clinical_stage) Return the first ChildCareTzArvVisit2 filtered by the clinical_stage column
 * @method     ChildCareTzArvVisit2 findOneByPregnant(boolean $pregnant) Return the first ChildCareTzArvVisit2 filtered by the pregnant column
 * @method     ChildCareTzArvVisit2 findOneByDateOfDelivery(string $date_of_delivery) Return the first ChildCareTzArvVisit2 filtered by the date_of_delivery column
 * @method     ChildCareTzArvVisit2 findOneByFamilyPlanningId(int $family_planning_id) Return the first ChildCareTzArvVisit2 filtered by the family_planning_id column
 * @method     ChildCareTzArvVisit2 findOneByPregClinicId(string $preg_clinic_id) Return the first ChildCareTzArvVisit2 filtered by the preg_clinic_id column
 * @method     ChildCareTzArvVisit2 findOneByCotrim(boolean $cotrim) Return the first ChildCareTzArvVisit2 filtered by the cotrim column
 * @method     ChildCareTzArvVisit2 findOneByDiflucan(boolean $diflucan) Return the first ChildCareTzArvVisit2 filtered by the diflucan column
 * @method     ChildCareTzArvVisit2 findOneByNutritionSupport(boolean $nutrition_support) Return the first ChildCareTzArvVisit2 filtered by the nutrition_support column
 * @method     ChildCareTzArvVisit2 findOneByNextVisitDate(string $next_visit_date) Return the first ChildCareTzArvVisit2 filtered by the next_visit_date column
 * @method     ChildCareTzArvVisit2 findOneByCreateId(string $create_id) Return the first ChildCareTzArvVisit2 filtered by the create_id column
 * @method     ChildCareTzArvVisit2 findOneByCreateTime(string $create_time) Return the first ChildCareTzArvVisit2 filtered by the create_time column
 * @method     ChildCareTzArvVisit2 findOneByModifyId(string $modify_id) Return the first ChildCareTzArvVisit2 filtered by the modify_id column
 * @method     ChildCareTzArvVisit2 findOneByModifyTime(string $modify_time) Return the first ChildCareTzArvVisit2 filtered by the modify_time column
 * @method     ChildCareTzArvVisit2 findOneByHistory(string $history) Return the first ChildCareTzArvVisit2 filtered by the history column *

 * @method     ChildCareTzArvVisit2 requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvVisit2 by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvVisit2 matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvVisit2 requireOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_visit_2_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_registration_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCareTzArvAdherCodeId(string $care_tz_arv_adher_code_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_adher_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCareTzArvFunctionalStatusId(int $care_tz_arv_functional_status_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_functional_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCareTzArvTbStatusId(string $care_tz_arv_tb_status_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_tb_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCareTzArvStatusId(string $care_tz_arv_status_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCareTzArvNutritionalStatusId(int $care_tz_arv_nutritional_status_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_nutritional_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCareTzArvNutritionalSuppId(int $care_tz_arv_nutritional_supp_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_nutritional_supp_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzArvVisit2 filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByVisitDate(string $visit_date) Return the first ChildCareTzArvVisit2 filtered by the visit_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCareTzArvVisitTypeId(int $care_tz_arv_visit_type_id) Return the first ChildCareTzArvVisit2 filtered by the care_tz_arv_visit_type_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByWeight(double $weight) Return the first ChildCareTzArvVisit2 filtered by the weight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByHeight(double $height) Return the first ChildCareTzArvVisit2 filtered by the height column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByClinicalStage(int $clinical_stage) Return the first ChildCareTzArvVisit2 filtered by the clinical_stage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByPregnant(boolean $pregnant) Return the first ChildCareTzArvVisit2 filtered by the pregnant column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByDateOfDelivery(string $date_of_delivery) Return the first ChildCareTzArvVisit2 filtered by the date_of_delivery column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByFamilyPlanningId(int $family_planning_id) Return the first ChildCareTzArvVisit2 filtered by the family_planning_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByPregClinicId(string $preg_clinic_id) Return the first ChildCareTzArvVisit2 filtered by the preg_clinic_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCotrim(boolean $cotrim) Return the first ChildCareTzArvVisit2 filtered by the cotrim column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByDiflucan(boolean $diflucan) Return the first ChildCareTzArvVisit2 filtered by the diflucan column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByNutritionSupport(boolean $nutrition_support) Return the first ChildCareTzArvVisit2 filtered by the nutrition_support column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByNextVisitDate(string $next_visit_date) Return the first ChildCareTzArvVisit2 filtered by the next_visit_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCreateId(string $create_id) Return the first ChildCareTzArvVisit2 filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByCreateTime(string $create_time) Return the first ChildCareTzArvVisit2 filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByModifyId(string $modify_id) Return the first ChildCareTzArvVisit2 filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByModifyTime(string $modify_time) Return the first ChildCareTzArvVisit2 filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisit2 requireOneByHistory(string $history) Return the first ChildCareTzArvVisit2 filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvVisit2[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvVisit2 objects based on current ModelCriteria
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return ChildCareTzArvVisit2 objects filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return ChildCareTzArvVisit2 objects filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCareTzArvAdherCodeId(string $care_tz_arv_adher_code_id) Return ChildCareTzArvVisit2 objects filtered by the care_tz_arv_adher_code_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCareTzArvFunctionalStatusId(int $care_tz_arv_functional_status_id) Return ChildCareTzArvVisit2 objects filtered by the care_tz_arv_functional_status_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCareTzArvTbStatusId(string $care_tz_arv_tb_status_id) Return ChildCareTzArvVisit2 objects filtered by the care_tz_arv_tb_status_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCareTzArvStatusId(string $care_tz_arv_status_id) Return ChildCareTzArvVisit2 objects filtered by the care_tz_arv_status_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCareTzArvNutritionalStatusId(int $care_tz_arv_nutritional_status_id) Return ChildCareTzArvVisit2 objects filtered by the care_tz_arv_nutritional_status_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCareTzArvNutritionalSuppId(int $care_tz_arv_nutritional_supp_id) Return ChildCareTzArvVisit2 objects filtered by the care_tz_arv_nutritional_supp_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByEncounterNr(string $encounter_nr) Return ChildCareTzArvVisit2 objects filtered by the encounter_nr column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByVisitDate(string $visit_date) Return ChildCareTzArvVisit2 objects filtered by the visit_date column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCareTzArvVisitTypeId(int $care_tz_arv_visit_type_id) Return ChildCareTzArvVisit2 objects filtered by the care_tz_arv_visit_type_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByWeight(double $weight) Return ChildCareTzArvVisit2 objects filtered by the weight column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByHeight(double $height) Return ChildCareTzArvVisit2 objects filtered by the height column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByClinicalStage(int $clinical_stage) Return ChildCareTzArvVisit2 objects filtered by the clinical_stage column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByPregnant(boolean $pregnant) Return ChildCareTzArvVisit2 objects filtered by the pregnant column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByDateOfDelivery(string $date_of_delivery) Return ChildCareTzArvVisit2 objects filtered by the date_of_delivery column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByFamilyPlanningId(int $family_planning_id) Return ChildCareTzArvVisit2 objects filtered by the family_planning_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByPregClinicId(string $preg_clinic_id) Return ChildCareTzArvVisit2 objects filtered by the preg_clinic_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCotrim(boolean $cotrim) Return ChildCareTzArvVisit2 objects filtered by the cotrim column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByDiflucan(boolean $diflucan) Return ChildCareTzArvVisit2 objects filtered by the diflucan column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByNutritionSupport(boolean $nutrition_support) Return ChildCareTzArvVisit2 objects filtered by the nutrition_support column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByNextVisitDate(string $next_visit_date) Return ChildCareTzArvVisit2 objects filtered by the next_visit_date column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTzArvVisit2 objects filtered by the create_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTzArvVisit2 objects filtered by the create_time column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTzArvVisit2 objects filtered by the modify_id column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTzArvVisit2 objects filtered by the modify_time column
 * @method     ChildCareTzArvVisit2[]|ObjectCollection findByHistory(string $history) Return ChildCareTzArvVisit2 objects filtered by the history column
 * @method     ChildCareTzArvVisit2[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvVisit2Query extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvVisit2Query object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvVisit2', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvVisit2Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvVisit2Query
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvVisit2Query) {
            return $criteria;
        }
        $query = new ChildCareTzArvVisit2Query();
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
     * @return ChildCareTzArvVisit2|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvVisit2TableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvVisit2TableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvVisit2 A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_visit_2_id, care_tz_arv_registration_id, care_tz_arv_adher_code_id, care_tz_arv_functional_status_id, care_tz_arv_tb_status_id, care_tz_arv_status_id, care_tz_arv_nutritional_status_id, care_tz_arv_nutritional_supp_id, encounter_nr, visit_date, care_tz_arv_visit_type_id, weight, height, clinical_stage, pregnant, date_of_delivery, family_planning_id, preg_clinic_id, cotrim, diflucan, nutrition_support, next_visit_date, create_id, create_time, modify_id, modify_time, history FROM care_tz_arv_visit_2 WHERE care_tz_arv_visit_2_id = :p0';
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
            /** @var ChildCareTzArvVisit2 $obj */
            $obj = new ChildCareTzArvVisit2();
            $obj->hydrate($row);
            CareTzArvVisit2TableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvVisit2|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCareTzArvVisit2Id($careTzArvVisit2Id = null, $comparison = null)
    {
        if (is_array($careTzArvVisit2Id)) {
            $useMinMax = false;
            if (isset($careTzArvVisit2Id['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvVisit2Id['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCareTzArvRegistrationId($careTzArvRegistrationId = null, $comparison = null)
    {
        if (is_array($careTzArvRegistrationId)) {
            $useMinMax = false;
            if (isset($careTzArvRegistrationId['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegistrationId['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCareTzArvAdherCodeId($careTzArvAdherCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvAdherCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvAdherCodeId['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID, $careTzArvAdherCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvAdherCodeId['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID, $careTzArvAdherCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID, $careTzArvAdherCodeId, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCareTzArvFunctionalStatusId($careTzArvFunctionalStatusId = null, $comparison = null)
    {
        if (is_array($careTzArvFunctionalStatusId)) {
            $useMinMax = false;
            if (isset($careTzArvFunctionalStatusId['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $careTzArvFunctionalStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvFunctionalStatusId['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $careTzArvFunctionalStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $careTzArvFunctionalStatusId, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCareTzArvTbStatusId($careTzArvTbStatusId = null, $comparison = null)
    {
        if (is_array($careTzArvTbStatusId)) {
            $useMinMax = false;
            if (isset($careTzArvTbStatusId['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $careTzArvTbStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvTbStatusId['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $careTzArvTbStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $careTzArvTbStatusId, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCareTzArvStatusId($careTzArvStatusId = null, $comparison = null)
    {
        if (is_array($careTzArvStatusId)) {
            $useMinMax = false;
            if (isset($careTzArvStatusId['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_STATUS_ID, $careTzArvStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvStatusId['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_STATUS_ID, $careTzArvStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_STATUS_ID, $careTzArvStatusId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_nutritional_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvNutritionalStatusId(1234); // WHERE care_tz_arv_nutritional_status_id = 1234
     * $query->filterByCareTzArvNutritionalStatusId(array(12, 34)); // WHERE care_tz_arv_nutritional_status_id IN (12, 34)
     * $query->filterByCareTzArvNutritionalStatusId(array('min' => 12)); // WHERE care_tz_arv_nutritional_status_id > 12
     * </code>
     *
     * @param     mixed $careTzArvNutritionalStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCareTzArvNutritionalStatusId($careTzArvNutritionalStatusId = null, $comparison = null)
    {
        if (is_array($careTzArvNutritionalStatusId)) {
            $useMinMax = false;
            if (isset($careTzArvNutritionalStatusId['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_STATUS_ID, $careTzArvNutritionalStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvNutritionalStatusId['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_STATUS_ID, $careTzArvNutritionalStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_STATUS_ID, $careTzArvNutritionalStatusId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_nutritional_supp_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvNutritionalSuppId(1234); // WHERE care_tz_arv_nutritional_supp_id = 1234
     * $query->filterByCareTzArvNutritionalSuppId(array(12, 34)); // WHERE care_tz_arv_nutritional_supp_id IN (12, 34)
     * $query->filterByCareTzArvNutritionalSuppId(array('min' => 12)); // WHERE care_tz_arv_nutritional_supp_id > 12
     * </code>
     *
     * @param     mixed $careTzArvNutritionalSuppId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCareTzArvNutritionalSuppId($careTzArvNutritionalSuppId = null, $comparison = null)
    {
        if (is_array($careTzArvNutritionalSuppId)) {
            $useMinMax = false;
            if (isset($careTzArvNutritionalSuppId['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_SUPP_ID, $careTzArvNutritionalSuppId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvNutritionalSuppId['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_SUPP_ID, $careTzArvNutritionalSuppId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_SUPP_ID, $careTzArvNutritionalSuppId, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByVisitDate($visitDate = null, $comparison = null)
    {
        if (is_array($visitDate)) {
            $useMinMax = false;
            if (isset($visitDate['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_VISIT_DATE, $visitDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitDate['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_VISIT_DATE, $visitDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_VISIT_DATE, $visitDate, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_visit_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvVisitTypeId(1234); // WHERE care_tz_arv_visit_type_id = 1234
     * $query->filterByCareTzArvVisitTypeId(array(12, 34)); // WHERE care_tz_arv_visit_type_id IN (12, 34)
     * $query->filterByCareTzArvVisitTypeId(array('min' => 12)); // WHERE care_tz_arv_visit_type_id > 12
     * </code>
     *
     * @param     mixed $careTzArvVisitTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCareTzArvVisitTypeId($careTzArvVisitTypeId = null, $comparison = null)
    {
        if (is_array($careTzArvVisitTypeId)) {
            $useMinMax = false;
            if (isset($careTzArvVisitTypeId['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID, $careTzArvVisitTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvVisitTypeId['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID, $careTzArvVisitTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID, $careTzArvVisitTypeId, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_WEIGHT, $weight, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByHeight($height = null, $comparison = null)
    {
        if (is_array($height)) {
            $useMinMax = false;
            if (isset($height['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_HEIGHT, $height['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($height['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_HEIGHT, $height['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_HEIGHT, $height, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByClinicalStage($clinicalStage = null, $comparison = null)
    {
        if (is_array($clinicalStage)) {
            $useMinMax = false;
            if (isset($clinicalStage['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CLINICAL_STAGE, $clinicalStage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clinicalStage['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CLINICAL_STAGE, $clinicalStage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CLINICAL_STAGE, $clinicalStage, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByPregnant($pregnant = null, $comparison = null)
    {
        if (is_string($pregnant)) {
            $pregnant = in_array(strtolower($pregnant), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_PREGNANT, $pregnant, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByDateOfDelivery($dateOfDelivery = null, $comparison = null)
    {
        if (is_array($dateOfDelivery)) {
            $useMinMax = false;
            if (isset($dateOfDelivery['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_DATE_OF_DELIVERY, $dateOfDelivery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateOfDelivery['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_DATE_OF_DELIVERY, $dateOfDelivery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_DATE_OF_DELIVERY, $dateOfDelivery, $comparison);
    }

    /**
     * Filter the query on the family_planning_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFamilyPlanningId(1234); // WHERE family_planning_id = 1234
     * $query->filterByFamilyPlanningId(array(12, 34)); // WHERE family_planning_id IN (12, 34)
     * $query->filterByFamilyPlanningId(array('min' => 12)); // WHERE family_planning_id > 12
     * </code>
     *
     * @param     mixed $familyPlanningId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByFamilyPlanningId($familyPlanningId = null, $comparison = null)
    {
        if (is_array($familyPlanningId)) {
            $useMinMax = false;
            if (isset($familyPlanningId['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_FAMILY_PLANNING_ID, $familyPlanningId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($familyPlanningId['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_FAMILY_PLANNING_ID, $familyPlanningId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_FAMILY_PLANNING_ID, $familyPlanningId, $comparison);
    }

    /**
     * Filter the query on the preg_clinic_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPregClinicId('fooValue');   // WHERE preg_clinic_id = 'fooValue'
     * $query->filterByPregClinicId('%fooValue%', Criteria::LIKE); // WHERE preg_clinic_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pregClinicId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByPregClinicId($pregClinicId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pregClinicId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_PREG_CLINIC_ID, $pregClinicId, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCotrim($cotrim = null, $comparison = null)
    {
        if (is_string($cotrim)) {
            $cotrim = in_array(strtolower($cotrim), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_COTRIM, $cotrim, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByDiflucan($diflucan = null, $comparison = null)
    {
        if (is_string($diflucan)) {
            $diflucan = in_array(strtolower($diflucan), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_DIFLUCAN, $diflucan, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByNutritionSupport($nutritionSupport = null, $comparison = null)
    {
        if (is_string($nutritionSupport)) {
            $nutritionSupport = in_array(strtolower($nutritionSupport), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_NUTRITION_SUPPORT, $nutritionSupport, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByNextVisitDate($nextVisitDate = null, $comparison = null)
    {
        if (is_array($nextVisitDate)) {
            $useMinMax = false;
            if (isset($nextVisitDate['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_NEXT_VISIT_DATE, $nextVisitDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nextVisitDate['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_NEXT_VISIT_DATE, $nextVisitDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_NEXT_VISIT_DATE, $nextVisitDate, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CREATE_TIME, $createTime, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTzArvVisit2TableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisit2TableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvVisit2 $careTzArvVisit2 Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvVisit2Query The current query, for fluid interface
     */
    public function prune($careTzArvVisit2 = null)
    {
        if ($careTzArvVisit2) {
            $this->addUsingAlias(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2->getCareTzArvVisit2Id(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_visit_2 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisit2TableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvVisit2TableMap::clearInstancePool();
            CareTzArvVisit2TableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisit2TableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvVisit2TableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvVisit2TableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvVisit2TableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvVisit2Query
