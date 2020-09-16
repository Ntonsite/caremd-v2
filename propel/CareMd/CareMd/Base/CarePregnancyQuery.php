<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CarePregnancy as ChildCarePregnancy;
use CareMd\CareMd\CarePregnancyQuery as ChildCarePregnancyQuery;
use CareMd\CareMd\Map\CarePregnancyTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_pregnancy' table.
 *
 *
 *
 * @method     ChildCarePregnancyQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCarePregnancyQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCarePregnancyQuery orderByThisPregnancyNr($order = Criteria::ASC) Order by the this_pregnancy_nr column
 * @method     ChildCarePregnancyQuery orderByDeliveryDate($order = Criteria::ASC) Order by the delivery_date column
 * @method     ChildCarePregnancyQuery orderByDeliveryTime($order = Criteria::ASC) Order by the delivery_time column
 * @method     ChildCarePregnancyQuery orderByGravida($order = Criteria::ASC) Order by the gravida column
 * @method     ChildCarePregnancyQuery orderByPara($order = Criteria::ASC) Order by the para column
 * @method     ChildCarePregnancyQuery orderByPregnancyGestationalAge($order = Criteria::ASC) Order by the pregnancy_gestational_age column
 * @method     ChildCarePregnancyQuery orderByNrOfFetuses($order = Criteria::ASC) Order by the nr_of_fetuses column
 * @method     ChildCarePregnancyQuery orderByChildEncounterNr($order = Criteria::ASC) Order by the child_encounter_nr column
 * @method     ChildCarePregnancyQuery orderByIsBooked($order = Criteria::ASC) Order by the is_booked column
 * @method     ChildCarePregnancyQuery orderByVdrl($order = Criteria::ASC) Order by the vdrl column
 * @method     ChildCarePregnancyQuery orderByRh($order = Criteria::ASC) Order by the rh column
 * @method     ChildCarePregnancyQuery orderByDeliveryMode($order = Criteria::ASC) Order by the delivery_mode column
 * @method     ChildCarePregnancyQuery orderByDeliveryBy($order = Criteria::ASC) Order by the delivery_by column
 * @method     ChildCarePregnancyQuery orderByBpSystolicHigh($order = Criteria::ASC) Order by the bp_systolic_high column
 * @method     ChildCarePregnancyQuery orderByBpDiastolicHigh($order = Criteria::ASC) Order by the bp_diastolic_high column
 * @method     ChildCarePregnancyQuery orderByProteinuria($order = Criteria::ASC) Order by the proteinuria column
 * @method     ChildCarePregnancyQuery orderByLabourDuration($order = Criteria::ASC) Order by the labour_duration column
 * @method     ChildCarePregnancyQuery orderByInductionMethod($order = Criteria::ASC) Order by the induction_method column
 * @method     ChildCarePregnancyQuery orderByInductionIndication($order = Criteria::ASC) Order by the induction_indication column
 * @method     ChildCarePregnancyQuery orderByAnaesthTypeNr($order = Criteria::ASC) Order by the anaesth_type_nr column
 * @method     ChildCarePregnancyQuery orderByIsEpidural($order = Criteria::ASC) Order by the is_epidural column
 * @method     ChildCarePregnancyQuery orderByComplications($order = Criteria::ASC) Order by the complications column
 * @method     ChildCarePregnancyQuery orderByPerineum($order = Criteria::ASC) Order by the perineum column
 * @method     ChildCarePregnancyQuery orderByBloodLoss($order = Criteria::ASC) Order by the blood_loss column
 * @method     ChildCarePregnancyQuery orderByBloodLossUnit($order = Criteria::ASC) Order by the blood_loss_unit column
 * @method     ChildCarePregnancyQuery orderByIsRetainedPlacenta($order = Criteria::ASC) Order by the is_retained_placenta column
 * @method     ChildCarePregnancyQuery orderByPostLabourCondition($order = Criteria::ASC) Order by the post_labour_condition column
 * @method     ChildCarePregnancyQuery orderByOutcome($order = Criteria::ASC) Order by the outcome column
 * @method     ChildCarePregnancyQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCarePregnancyQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCarePregnancyQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCarePregnancyQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCarePregnancyQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCarePregnancyQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCarePregnancyQuery groupByNr() Group by the nr column
 * @method     ChildCarePregnancyQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCarePregnancyQuery groupByThisPregnancyNr() Group by the this_pregnancy_nr column
 * @method     ChildCarePregnancyQuery groupByDeliveryDate() Group by the delivery_date column
 * @method     ChildCarePregnancyQuery groupByDeliveryTime() Group by the delivery_time column
 * @method     ChildCarePregnancyQuery groupByGravida() Group by the gravida column
 * @method     ChildCarePregnancyQuery groupByPara() Group by the para column
 * @method     ChildCarePregnancyQuery groupByPregnancyGestationalAge() Group by the pregnancy_gestational_age column
 * @method     ChildCarePregnancyQuery groupByNrOfFetuses() Group by the nr_of_fetuses column
 * @method     ChildCarePregnancyQuery groupByChildEncounterNr() Group by the child_encounter_nr column
 * @method     ChildCarePregnancyQuery groupByIsBooked() Group by the is_booked column
 * @method     ChildCarePregnancyQuery groupByVdrl() Group by the vdrl column
 * @method     ChildCarePregnancyQuery groupByRh() Group by the rh column
 * @method     ChildCarePregnancyQuery groupByDeliveryMode() Group by the delivery_mode column
 * @method     ChildCarePregnancyQuery groupByDeliveryBy() Group by the delivery_by column
 * @method     ChildCarePregnancyQuery groupByBpSystolicHigh() Group by the bp_systolic_high column
 * @method     ChildCarePregnancyQuery groupByBpDiastolicHigh() Group by the bp_diastolic_high column
 * @method     ChildCarePregnancyQuery groupByProteinuria() Group by the proteinuria column
 * @method     ChildCarePregnancyQuery groupByLabourDuration() Group by the labour_duration column
 * @method     ChildCarePregnancyQuery groupByInductionMethod() Group by the induction_method column
 * @method     ChildCarePregnancyQuery groupByInductionIndication() Group by the induction_indication column
 * @method     ChildCarePregnancyQuery groupByAnaesthTypeNr() Group by the anaesth_type_nr column
 * @method     ChildCarePregnancyQuery groupByIsEpidural() Group by the is_epidural column
 * @method     ChildCarePregnancyQuery groupByComplications() Group by the complications column
 * @method     ChildCarePregnancyQuery groupByPerineum() Group by the perineum column
 * @method     ChildCarePregnancyQuery groupByBloodLoss() Group by the blood_loss column
 * @method     ChildCarePregnancyQuery groupByBloodLossUnit() Group by the blood_loss_unit column
 * @method     ChildCarePregnancyQuery groupByIsRetainedPlacenta() Group by the is_retained_placenta column
 * @method     ChildCarePregnancyQuery groupByPostLabourCondition() Group by the post_labour_condition column
 * @method     ChildCarePregnancyQuery groupByOutcome() Group by the outcome column
 * @method     ChildCarePregnancyQuery groupByStatus() Group by the status column
 * @method     ChildCarePregnancyQuery groupByHistory() Group by the history column
 * @method     ChildCarePregnancyQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCarePregnancyQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCarePregnancyQuery groupByCreateId() Group by the create_id column
 * @method     ChildCarePregnancyQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCarePregnancyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCarePregnancyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCarePregnancyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCarePregnancyQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCarePregnancyQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCarePregnancyQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCarePregnancy findOne(ConnectionInterface $con = null) Return the first ChildCarePregnancy matching the query
 * @method     ChildCarePregnancy findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCarePregnancy matching the query, or a new ChildCarePregnancy object populated from the query conditions when no match is found
 *
 * @method     ChildCarePregnancy findOneByNr(int $nr) Return the first ChildCarePregnancy filtered by the nr column
 * @method     ChildCarePregnancy findOneByEncounterNr(int $encounter_nr) Return the first ChildCarePregnancy filtered by the encounter_nr column
 * @method     ChildCarePregnancy findOneByThisPregnancyNr(int $this_pregnancy_nr) Return the first ChildCarePregnancy filtered by the this_pregnancy_nr column
 * @method     ChildCarePregnancy findOneByDeliveryDate(string $delivery_date) Return the first ChildCarePregnancy filtered by the delivery_date column
 * @method     ChildCarePregnancy findOneByDeliveryTime(string $delivery_time) Return the first ChildCarePregnancy filtered by the delivery_time column
 * @method     ChildCarePregnancy findOneByGravida(int $gravida) Return the first ChildCarePregnancy filtered by the gravida column
 * @method     ChildCarePregnancy findOneByPara(int $para) Return the first ChildCarePregnancy filtered by the para column
 * @method     ChildCarePregnancy findOneByPregnancyGestationalAge(int $pregnancy_gestational_age) Return the first ChildCarePregnancy filtered by the pregnancy_gestational_age column
 * @method     ChildCarePregnancy findOneByNrOfFetuses(int $nr_of_fetuses) Return the first ChildCarePregnancy filtered by the nr_of_fetuses column
 * @method     ChildCarePregnancy findOneByChildEncounterNr(string $child_encounter_nr) Return the first ChildCarePregnancy filtered by the child_encounter_nr column
 * @method     ChildCarePregnancy findOneByIsBooked(boolean $is_booked) Return the first ChildCarePregnancy filtered by the is_booked column
 * @method     ChildCarePregnancy findOneByVdrl(string $vdrl) Return the first ChildCarePregnancy filtered by the vdrl column
 * @method     ChildCarePregnancy findOneByRh(boolean $rh) Return the first ChildCarePregnancy filtered by the rh column
 * @method     ChildCarePregnancy findOneByDeliveryMode(int $delivery_mode) Return the first ChildCarePregnancy filtered by the delivery_mode column
 * @method     ChildCarePregnancy findOneByDeliveryBy(string $delivery_by) Return the first ChildCarePregnancy filtered by the delivery_by column
 * @method     ChildCarePregnancy findOneByBpSystolicHigh(int $bp_systolic_high) Return the first ChildCarePregnancy filtered by the bp_systolic_high column
 * @method     ChildCarePregnancy findOneByBpDiastolicHigh(int $bp_diastolic_high) Return the first ChildCarePregnancy filtered by the bp_diastolic_high column
 * @method     ChildCarePregnancy findOneByProteinuria(boolean $proteinuria) Return the first ChildCarePregnancy filtered by the proteinuria column
 * @method     ChildCarePregnancy findOneByLabourDuration(int $labour_duration) Return the first ChildCarePregnancy filtered by the labour_duration column
 * @method     ChildCarePregnancy findOneByInductionMethod(int $induction_method) Return the first ChildCarePregnancy filtered by the induction_method column
 * @method     ChildCarePregnancy findOneByInductionIndication(string $induction_indication) Return the first ChildCarePregnancy filtered by the induction_indication column
 * @method     ChildCarePregnancy findOneByAnaesthTypeNr(int $anaesth_type_nr) Return the first ChildCarePregnancy filtered by the anaesth_type_nr column
 * @method     ChildCarePregnancy findOneByIsEpidural(string $is_epidural) Return the first ChildCarePregnancy filtered by the is_epidural column
 * @method     ChildCarePregnancy findOneByComplications(string $complications) Return the first ChildCarePregnancy filtered by the complications column
 * @method     ChildCarePregnancy findOneByPerineum(int $perineum) Return the first ChildCarePregnancy filtered by the perineum column
 * @method     ChildCarePregnancy findOneByBloodLoss(double $blood_loss) Return the first ChildCarePregnancy filtered by the blood_loss column
 * @method     ChildCarePregnancy findOneByBloodLossUnit(string $blood_loss_unit) Return the first ChildCarePregnancy filtered by the blood_loss_unit column
 * @method     ChildCarePregnancy findOneByIsRetainedPlacenta(string $is_retained_placenta) Return the first ChildCarePregnancy filtered by the is_retained_placenta column
 * @method     ChildCarePregnancy findOneByPostLabourCondition(string $post_labour_condition) Return the first ChildCarePregnancy filtered by the post_labour_condition column
 * @method     ChildCarePregnancy findOneByOutcome(string $outcome) Return the first ChildCarePregnancy filtered by the outcome column
 * @method     ChildCarePregnancy findOneByStatus(string $status) Return the first ChildCarePregnancy filtered by the status column
 * @method     ChildCarePregnancy findOneByHistory(string $history) Return the first ChildCarePregnancy filtered by the history column
 * @method     ChildCarePregnancy findOneByModifyId(string $modify_id) Return the first ChildCarePregnancy filtered by the modify_id column
 * @method     ChildCarePregnancy findOneByModifyTime(string $modify_time) Return the first ChildCarePregnancy filtered by the modify_time column
 * @method     ChildCarePregnancy findOneByCreateId(string $create_id) Return the first ChildCarePregnancy filtered by the create_id column
 * @method     ChildCarePregnancy findOneByCreateTime(string $create_time) Return the first ChildCarePregnancy filtered by the create_time column *

 * @method     ChildCarePregnancy requirePk($key, ConnectionInterface $con = null) Return the ChildCarePregnancy by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOne(ConnectionInterface $con = null) Return the first ChildCarePregnancy matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePregnancy requireOneByNr(int $nr) Return the first ChildCarePregnancy filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByEncounterNr(int $encounter_nr) Return the first ChildCarePregnancy filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByThisPregnancyNr(int $this_pregnancy_nr) Return the first ChildCarePregnancy filtered by the this_pregnancy_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByDeliveryDate(string $delivery_date) Return the first ChildCarePregnancy filtered by the delivery_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByDeliveryTime(string $delivery_time) Return the first ChildCarePregnancy filtered by the delivery_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByGravida(int $gravida) Return the first ChildCarePregnancy filtered by the gravida column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByPara(int $para) Return the first ChildCarePregnancy filtered by the para column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByPregnancyGestationalAge(int $pregnancy_gestational_age) Return the first ChildCarePregnancy filtered by the pregnancy_gestational_age column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByNrOfFetuses(int $nr_of_fetuses) Return the first ChildCarePregnancy filtered by the nr_of_fetuses column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByChildEncounterNr(string $child_encounter_nr) Return the first ChildCarePregnancy filtered by the child_encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByIsBooked(boolean $is_booked) Return the first ChildCarePregnancy filtered by the is_booked column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByVdrl(string $vdrl) Return the first ChildCarePregnancy filtered by the vdrl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByRh(boolean $rh) Return the first ChildCarePregnancy filtered by the rh column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByDeliveryMode(int $delivery_mode) Return the first ChildCarePregnancy filtered by the delivery_mode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByDeliveryBy(string $delivery_by) Return the first ChildCarePregnancy filtered by the delivery_by column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByBpSystolicHigh(int $bp_systolic_high) Return the first ChildCarePregnancy filtered by the bp_systolic_high column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByBpDiastolicHigh(int $bp_diastolic_high) Return the first ChildCarePregnancy filtered by the bp_diastolic_high column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByProteinuria(boolean $proteinuria) Return the first ChildCarePregnancy filtered by the proteinuria column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByLabourDuration(int $labour_duration) Return the first ChildCarePregnancy filtered by the labour_duration column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByInductionMethod(int $induction_method) Return the first ChildCarePregnancy filtered by the induction_method column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByInductionIndication(string $induction_indication) Return the first ChildCarePregnancy filtered by the induction_indication column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByAnaesthTypeNr(int $anaesth_type_nr) Return the first ChildCarePregnancy filtered by the anaesth_type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByIsEpidural(string $is_epidural) Return the first ChildCarePregnancy filtered by the is_epidural column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByComplications(string $complications) Return the first ChildCarePregnancy filtered by the complications column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByPerineum(int $perineum) Return the first ChildCarePregnancy filtered by the perineum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByBloodLoss(double $blood_loss) Return the first ChildCarePregnancy filtered by the blood_loss column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByBloodLossUnit(string $blood_loss_unit) Return the first ChildCarePregnancy filtered by the blood_loss_unit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByIsRetainedPlacenta(string $is_retained_placenta) Return the first ChildCarePregnancy filtered by the is_retained_placenta column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByPostLabourCondition(string $post_labour_condition) Return the first ChildCarePregnancy filtered by the post_labour_condition column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByOutcome(string $outcome) Return the first ChildCarePregnancy filtered by the outcome column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByStatus(string $status) Return the first ChildCarePregnancy filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByHistory(string $history) Return the first ChildCarePregnancy filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByModifyId(string $modify_id) Return the first ChildCarePregnancy filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByModifyTime(string $modify_time) Return the first ChildCarePregnancy filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByCreateId(string $create_id) Return the first ChildCarePregnancy filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePregnancy requireOneByCreateTime(string $create_time) Return the first ChildCarePregnancy filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePregnancy[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCarePregnancy objects based on current ModelCriteria
 * @method     ChildCarePregnancy[]|ObjectCollection findByNr(int $nr) Return ChildCarePregnancy objects filtered by the nr column
 * @method     ChildCarePregnancy[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCarePregnancy objects filtered by the encounter_nr column
 * @method     ChildCarePregnancy[]|ObjectCollection findByThisPregnancyNr(int $this_pregnancy_nr) Return ChildCarePregnancy objects filtered by the this_pregnancy_nr column
 * @method     ChildCarePregnancy[]|ObjectCollection findByDeliveryDate(string $delivery_date) Return ChildCarePregnancy objects filtered by the delivery_date column
 * @method     ChildCarePregnancy[]|ObjectCollection findByDeliveryTime(string $delivery_time) Return ChildCarePregnancy objects filtered by the delivery_time column
 * @method     ChildCarePregnancy[]|ObjectCollection findByGravida(int $gravida) Return ChildCarePregnancy objects filtered by the gravida column
 * @method     ChildCarePregnancy[]|ObjectCollection findByPara(int $para) Return ChildCarePregnancy objects filtered by the para column
 * @method     ChildCarePregnancy[]|ObjectCollection findByPregnancyGestationalAge(int $pregnancy_gestational_age) Return ChildCarePregnancy objects filtered by the pregnancy_gestational_age column
 * @method     ChildCarePregnancy[]|ObjectCollection findByNrOfFetuses(int $nr_of_fetuses) Return ChildCarePregnancy objects filtered by the nr_of_fetuses column
 * @method     ChildCarePregnancy[]|ObjectCollection findByChildEncounterNr(string $child_encounter_nr) Return ChildCarePregnancy objects filtered by the child_encounter_nr column
 * @method     ChildCarePregnancy[]|ObjectCollection findByIsBooked(boolean $is_booked) Return ChildCarePregnancy objects filtered by the is_booked column
 * @method     ChildCarePregnancy[]|ObjectCollection findByVdrl(string $vdrl) Return ChildCarePregnancy objects filtered by the vdrl column
 * @method     ChildCarePregnancy[]|ObjectCollection findByRh(boolean $rh) Return ChildCarePregnancy objects filtered by the rh column
 * @method     ChildCarePregnancy[]|ObjectCollection findByDeliveryMode(int $delivery_mode) Return ChildCarePregnancy objects filtered by the delivery_mode column
 * @method     ChildCarePregnancy[]|ObjectCollection findByDeliveryBy(string $delivery_by) Return ChildCarePregnancy objects filtered by the delivery_by column
 * @method     ChildCarePregnancy[]|ObjectCollection findByBpSystolicHigh(int $bp_systolic_high) Return ChildCarePregnancy objects filtered by the bp_systolic_high column
 * @method     ChildCarePregnancy[]|ObjectCollection findByBpDiastolicHigh(int $bp_diastolic_high) Return ChildCarePregnancy objects filtered by the bp_diastolic_high column
 * @method     ChildCarePregnancy[]|ObjectCollection findByProteinuria(boolean $proteinuria) Return ChildCarePregnancy objects filtered by the proteinuria column
 * @method     ChildCarePregnancy[]|ObjectCollection findByLabourDuration(int $labour_duration) Return ChildCarePregnancy objects filtered by the labour_duration column
 * @method     ChildCarePregnancy[]|ObjectCollection findByInductionMethod(int $induction_method) Return ChildCarePregnancy objects filtered by the induction_method column
 * @method     ChildCarePregnancy[]|ObjectCollection findByInductionIndication(string $induction_indication) Return ChildCarePregnancy objects filtered by the induction_indication column
 * @method     ChildCarePregnancy[]|ObjectCollection findByAnaesthTypeNr(int $anaesth_type_nr) Return ChildCarePregnancy objects filtered by the anaesth_type_nr column
 * @method     ChildCarePregnancy[]|ObjectCollection findByIsEpidural(string $is_epidural) Return ChildCarePregnancy objects filtered by the is_epidural column
 * @method     ChildCarePregnancy[]|ObjectCollection findByComplications(string $complications) Return ChildCarePregnancy objects filtered by the complications column
 * @method     ChildCarePregnancy[]|ObjectCollection findByPerineum(int $perineum) Return ChildCarePregnancy objects filtered by the perineum column
 * @method     ChildCarePregnancy[]|ObjectCollection findByBloodLoss(double $blood_loss) Return ChildCarePregnancy objects filtered by the blood_loss column
 * @method     ChildCarePregnancy[]|ObjectCollection findByBloodLossUnit(string $blood_loss_unit) Return ChildCarePregnancy objects filtered by the blood_loss_unit column
 * @method     ChildCarePregnancy[]|ObjectCollection findByIsRetainedPlacenta(string $is_retained_placenta) Return ChildCarePregnancy objects filtered by the is_retained_placenta column
 * @method     ChildCarePregnancy[]|ObjectCollection findByPostLabourCondition(string $post_labour_condition) Return ChildCarePregnancy objects filtered by the post_labour_condition column
 * @method     ChildCarePregnancy[]|ObjectCollection findByOutcome(string $outcome) Return ChildCarePregnancy objects filtered by the outcome column
 * @method     ChildCarePregnancy[]|ObjectCollection findByStatus(string $status) Return ChildCarePregnancy objects filtered by the status column
 * @method     ChildCarePregnancy[]|ObjectCollection findByHistory(string $history) Return ChildCarePregnancy objects filtered by the history column
 * @method     ChildCarePregnancy[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCarePregnancy objects filtered by the modify_id column
 * @method     ChildCarePregnancy[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCarePregnancy objects filtered by the modify_time column
 * @method     ChildCarePregnancy[]|ObjectCollection findByCreateId(string $create_id) Return ChildCarePregnancy objects filtered by the create_id column
 * @method     ChildCarePregnancy[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCarePregnancy objects filtered by the create_time column
 * @method     ChildCarePregnancy[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CarePregnancyQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CarePregnancyQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CarePregnancy', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCarePregnancyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCarePregnancyQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCarePregnancyQuery) {
            return $criteria;
        }
        $query = new ChildCarePregnancyQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$nr, $encounter_nr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCarePregnancy|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CarePregnancyTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CarePregnancyTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCarePregnancy A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, encounter_nr, this_pregnancy_nr, delivery_date, delivery_time, gravida, para, pregnancy_gestational_age, nr_of_fetuses, child_encounter_nr, is_booked, vdrl, rh, delivery_mode, delivery_by, bp_systolic_high, bp_diastolic_high, proteinuria, labour_duration, induction_method, induction_indication, anaesth_type_nr, is_epidural, complications, perineum, blood_loss, blood_loss_unit, is_retained_placenta, post_labour_condition, outcome, status, history, modify_id, modify_time, create_id, create_time FROM care_pregnancy WHERE nr = :p0 AND encounter_nr = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCarePregnancy $obj */
            $obj = new ChildCarePregnancy();
            $obj->hydrate($row);
            CarePregnancyTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCarePregnancy|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CarePregnancyTableMap::COL_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CarePregnancyTableMap::COL_ENCOUNTER_NR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CarePregnancyTableMap::COL_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CarePregnancyTableMap::COL_ENCOUNTER_NR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the this_pregnancy_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByThisPregnancyNr(1234); // WHERE this_pregnancy_nr = 1234
     * $query->filterByThisPregnancyNr(array(12, 34)); // WHERE this_pregnancy_nr IN (12, 34)
     * $query->filterByThisPregnancyNr(array('min' => 12)); // WHERE this_pregnancy_nr > 12
     * </code>
     *
     * @param     mixed $thisPregnancyNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByThisPregnancyNr($thisPregnancyNr = null, $comparison = null)
    {
        if (is_array($thisPregnancyNr)) {
            $useMinMax = false;
            if (isset($thisPregnancyNr['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_THIS_PREGNANCY_NR, $thisPregnancyNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thisPregnancyNr['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_THIS_PREGNANCY_NR, $thisPregnancyNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_THIS_PREGNANCY_NR, $thisPregnancyNr, $comparison);
    }

    /**
     * Filter the query on the delivery_date column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliveryDate('2011-03-14'); // WHERE delivery_date = '2011-03-14'
     * $query->filterByDeliveryDate('now'); // WHERE delivery_date = '2011-03-14'
     * $query->filterByDeliveryDate(array('max' => 'yesterday')); // WHERE delivery_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $deliveryDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByDeliveryDate($deliveryDate = null, $comparison = null)
    {
        if (is_array($deliveryDate)) {
            $useMinMax = false;
            if (isset($deliveryDate['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_DELIVERY_DATE, $deliveryDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deliveryDate['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_DELIVERY_DATE, $deliveryDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_DELIVERY_DATE, $deliveryDate, $comparison);
    }

    /**
     * Filter the query on the delivery_time column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliveryTime('2011-03-14'); // WHERE delivery_time = '2011-03-14'
     * $query->filterByDeliveryTime('now'); // WHERE delivery_time = '2011-03-14'
     * $query->filterByDeliveryTime(array('max' => 'yesterday')); // WHERE delivery_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $deliveryTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByDeliveryTime($deliveryTime = null, $comparison = null)
    {
        if (is_array($deliveryTime)) {
            $useMinMax = false;
            if (isset($deliveryTime['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_DELIVERY_TIME, $deliveryTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deliveryTime['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_DELIVERY_TIME, $deliveryTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_DELIVERY_TIME, $deliveryTime, $comparison);
    }

    /**
     * Filter the query on the gravida column
     *
     * Example usage:
     * <code>
     * $query->filterByGravida(1234); // WHERE gravida = 1234
     * $query->filterByGravida(array(12, 34)); // WHERE gravida IN (12, 34)
     * $query->filterByGravida(array('min' => 12)); // WHERE gravida > 12
     * </code>
     *
     * @param     mixed $gravida The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByGravida($gravida = null, $comparison = null)
    {
        if (is_array($gravida)) {
            $useMinMax = false;
            if (isset($gravida['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_GRAVIDA, $gravida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gravida['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_GRAVIDA, $gravida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_GRAVIDA, $gravida, $comparison);
    }

    /**
     * Filter the query on the para column
     *
     * Example usage:
     * <code>
     * $query->filterByPara(1234); // WHERE para = 1234
     * $query->filterByPara(array(12, 34)); // WHERE para IN (12, 34)
     * $query->filterByPara(array('min' => 12)); // WHERE para > 12
     * </code>
     *
     * @param     mixed $para The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByPara($para = null, $comparison = null)
    {
        if (is_array($para)) {
            $useMinMax = false;
            if (isset($para['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_PARA, $para['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($para['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_PARA, $para['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_PARA, $para, $comparison);
    }

    /**
     * Filter the query on the pregnancy_gestational_age column
     *
     * Example usage:
     * <code>
     * $query->filterByPregnancyGestationalAge(1234); // WHERE pregnancy_gestational_age = 1234
     * $query->filterByPregnancyGestationalAge(array(12, 34)); // WHERE pregnancy_gestational_age IN (12, 34)
     * $query->filterByPregnancyGestationalAge(array('min' => 12)); // WHERE pregnancy_gestational_age > 12
     * </code>
     *
     * @param     mixed $pregnancyGestationalAge The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByPregnancyGestationalAge($pregnancyGestationalAge = null, $comparison = null)
    {
        if (is_array($pregnancyGestationalAge)) {
            $useMinMax = false;
            if (isset($pregnancyGestationalAge['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_PREGNANCY_GESTATIONAL_AGE, $pregnancyGestationalAge['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pregnancyGestationalAge['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_PREGNANCY_GESTATIONAL_AGE, $pregnancyGestationalAge['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_PREGNANCY_GESTATIONAL_AGE, $pregnancyGestationalAge, $comparison);
    }

    /**
     * Filter the query on the nr_of_fetuses column
     *
     * Example usage:
     * <code>
     * $query->filterByNrOfFetuses(1234); // WHERE nr_of_fetuses = 1234
     * $query->filterByNrOfFetuses(array(12, 34)); // WHERE nr_of_fetuses IN (12, 34)
     * $query->filterByNrOfFetuses(array('min' => 12)); // WHERE nr_of_fetuses > 12
     * </code>
     *
     * @param     mixed $nrOfFetuses The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByNrOfFetuses($nrOfFetuses = null, $comparison = null)
    {
        if (is_array($nrOfFetuses)) {
            $useMinMax = false;
            if (isset($nrOfFetuses['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_NR_OF_FETUSES, $nrOfFetuses['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nrOfFetuses['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_NR_OF_FETUSES, $nrOfFetuses['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_NR_OF_FETUSES, $nrOfFetuses, $comparison);
    }

    /**
     * Filter the query on the child_encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByChildEncounterNr('fooValue');   // WHERE child_encounter_nr = 'fooValue'
     * $query->filterByChildEncounterNr('%fooValue%', Criteria::LIKE); // WHERE child_encounter_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $childEncounterNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByChildEncounterNr($childEncounterNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($childEncounterNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_CHILD_ENCOUNTER_NR, $childEncounterNr, $comparison);
    }

    /**
     * Filter the query on the is_booked column
     *
     * Example usage:
     * <code>
     * $query->filterByIsBooked(true); // WHERE is_booked = true
     * $query->filterByIsBooked('yes'); // WHERE is_booked = true
     * </code>
     *
     * @param     boolean|string $isBooked The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByIsBooked($isBooked = null, $comparison = null)
    {
        if (is_string($isBooked)) {
            $isBooked = in_array(strtolower($isBooked), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_IS_BOOKED, $isBooked, $comparison);
    }

    /**
     * Filter the query on the vdrl column
     *
     * Example usage:
     * <code>
     * $query->filterByVdrl('fooValue');   // WHERE vdrl = 'fooValue'
     * $query->filterByVdrl('%fooValue%', Criteria::LIKE); // WHERE vdrl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vdrl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByVdrl($vdrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vdrl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_VDRL, $vdrl, $comparison);
    }

    /**
     * Filter the query on the rh column
     *
     * Example usage:
     * <code>
     * $query->filterByRh(true); // WHERE rh = true
     * $query->filterByRh('yes'); // WHERE rh = true
     * </code>
     *
     * @param     boolean|string $rh The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByRh($rh = null, $comparison = null)
    {
        if (is_string($rh)) {
            $rh = in_array(strtolower($rh), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_RH, $rh, $comparison);
    }

    /**
     * Filter the query on the delivery_mode column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliveryMode(1234); // WHERE delivery_mode = 1234
     * $query->filterByDeliveryMode(array(12, 34)); // WHERE delivery_mode IN (12, 34)
     * $query->filterByDeliveryMode(array('min' => 12)); // WHERE delivery_mode > 12
     * </code>
     *
     * @param     mixed $deliveryMode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByDeliveryMode($deliveryMode = null, $comparison = null)
    {
        if (is_array($deliveryMode)) {
            $useMinMax = false;
            if (isset($deliveryMode['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_DELIVERY_MODE, $deliveryMode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deliveryMode['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_DELIVERY_MODE, $deliveryMode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_DELIVERY_MODE, $deliveryMode, $comparison);
    }

    /**
     * Filter the query on the delivery_by column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliveryBy('fooValue');   // WHERE delivery_by = 'fooValue'
     * $query->filterByDeliveryBy('%fooValue%', Criteria::LIKE); // WHERE delivery_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deliveryBy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByDeliveryBy($deliveryBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deliveryBy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_DELIVERY_BY, $deliveryBy, $comparison);
    }

    /**
     * Filter the query on the bp_systolic_high column
     *
     * Example usage:
     * <code>
     * $query->filterByBpSystolicHigh(1234); // WHERE bp_systolic_high = 1234
     * $query->filterByBpSystolicHigh(array(12, 34)); // WHERE bp_systolic_high IN (12, 34)
     * $query->filterByBpSystolicHigh(array('min' => 12)); // WHERE bp_systolic_high > 12
     * </code>
     *
     * @param     mixed $bpSystolicHigh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByBpSystolicHigh($bpSystolicHigh = null, $comparison = null)
    {
        if (is_array($bpSystolicHigh)) {
            $useMinMax = false;
            if (isset($bpSystolicHigh['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_BP_SYSTOLIC_HIGH, $bpSystolicHigh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bpSystolicHigh['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_BP_SYSTOLIC_HIGH, $bpSystolicHigh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_BP_SYSTOLIC_HIGH, $bpSystolicHigh, $comparison);
    }

    /**
     * Filter the query on the bp_diastolic_high column
     *
     * Example usage:
     * <code>
     * $query->filterByBpDiastolicHigh(1234); // WHERE bp_diastolic_high = 1234
     * $query->filterByBpDiastolicHigh(array(12, 34)); // WHERE bp_diastolic_high IN (12, 34)
     * $query->filterByBpDiastolicHigh(array('min' => 12)); // WHERE bp_diastolic_high > 12
     * </code>
     *
     * @param     mixed $bpDiastolicHigh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByBpDiastolicHigh($bpDiastolicHigh = null, $comparison = null)
    {
        if (is_array($bpDiastolicHigh)) {
            $useMinMax = false;
            if (isset($bpDiastolicHigh['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_BP_DIASTOLIC_HIGH, $bpDiastolicHigh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bpDiastolicHigh['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_BP_DIASTOLIC_HIGH, $bpDiastolicHigh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_BP_DIASTOLIC_HIGH, $bpDiastolicHigh, $comparison);
    }

    /**
     * Filter the query on the proteinuria column
     *
     * Example usage:
     * <code>
     * $query->filterByProteinuria(true); // WHERE proteinuria = true
     * $query->filterByProteinuria('yes'); // WHERE proteinuria = true
     * </code>
     *
     * @param     boolean|string $proteinuria The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByProteinuria($proteinuria = null, $comparison = null)
    {
        if (is_string($proteinuria)) {
            $proteinuria = in_array(strtolower($proteinuria), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_PROTEINURIA, $proteinuria, $comparison);
    }

    /**
     * Filter the query on the labour_duration column
     *
     * Example usage:
     * <code>
     * $query->filterByLabourDuration(1234); // WHERE labour_duration = 1234
     * $query->filterByLabourDuration(array(12, 34)); // WHERE labour_duration IN (12, 34)
     * $query->filterByLabourDuration(array('min' => 12)); // WHERE labour_duration > 12
     * </code>
     *
     * @param     mixed $labourDuration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByLabourDuration($labourDuration = null, $comparison = null)
    {
        if (is_array($labourDuration)) {
            $useMinMax = false;
            if (isset($labourDuration['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_LABOUR_DURATION, $labourDuration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($labourDuration['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_LABOUR_DURATION, $labourDuration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_LABOUR_DURATION, $labourDuration, $comparison);
    }

    /**
     * Filter the query on the induction_method column
     *
     * Example usage:
     * <code>
     * $query->filterByInductionMethod(1234); // WHERE induction_method = 1234
     * $query->filterByInductionMethod(array(12, 34)); // WHERE induction_method IN (12, 34)
     * $query->filterByInductionMethod(array('min' => 12)); // WHERE induction_method > 12
     * </code>
     *
     * @param     mixed $inductionMethod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByInductionMethod($inductionMethod = null, $comparison = null)
    {
        if (is_array($inductionMethod)) {
            $useMinMax = false;
            if (isset($inductionMethod['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_INDUCTION_METHOD, $inductionMethod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inductionMethod['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_INDUCTION_METHOD, $inductionMethod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_INDUCTION_METHOD, $inductionMethod, $comparison);
    }

    /**
     * Filter the query on the induction_indication column
     *
     * Example usage:
     * <code>
     * $query->filterByInductionIndication('fooValue');   // WHERE induction_indication = 'fooValue'
     * $query->filterByInductionIndication('%fooValue%', Criteria::LIKE); // WHERE induction_indication LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inductionIndication The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByInductionIndication($inductionIndication = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inductionIndication)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_INDUCTION_INDICATION, $inductionIndication, $comparison);
    }

    /**
     * Filter the query on the anaesth_type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByAnaesthTypeNr(1234); // WHERE anaesth_type_nr = 1234
     * $query->filterByAnaesthTypeNr(array(12, 34)); // WHERE anaesth_type_nr IN (12, 34)
     * $query->filterByAnaesthTypeNr(array('min' => 12)); // WHERE anaesth_type_nr > 12
     * </code>
     *
     * @param     mixed $anaesthTypeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByAnaesthTypeNr($anaesthTypeNr = null, $comparison = null)
    {
        if (is_array($anaesthTypeNr)) {
            $useMinMax = false;
            if (isset($anaesthTypeNr['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_ANAESTH_TYPE_NR, $anaesthTypeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($anaesthTypeNr['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_ANAESTH_TYPE_NR, $anaesthTypeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_ANAESTH_TYPE_NR, $anaesthTypeNr, $comparison);
    }

    /**
     * Filter the query on the is_epidural column
     *
     * Example usage:
     * <code>
     * $query->filterByIsEpidural('fooValue');   // WHERE is_epidural = 'fooValue'
     * $query->filterByIsEpidural('%fooValue%', Criteria::LIKE); // WHERE is_epidural LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isEpidural The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByIsEpidural($isEpidural = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isEpidural)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_IS_EPIDURAL, $isEpidural, $comparison);
    }

    /**
     * Filter the query on the complications column
     *
     * Example usage:
     * <code>
     * $query->filterByComplications('fooValue');   // WHERE complications = 'fooValue'
     * $query->filterByComplications('%fooValue%', Criteria::LIKE); // WHERE complications LIKE '%fooValue%'
     * </code>
     *
     * @param     string $complications The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByComplications($complications = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($complications)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_COMPLICATIONS, $complications, $comparison);
    }

    /**
     * Filter the query on the perineum column
     *
     * Example usage:
     * <code>
     * $query->filterByPerineum(1234); // WHERE perineum = 1234
     * $query->filterByPerineum(array(12, 34)); // WHERE perineum IN (12, 34)
     * $query->filterByPerineum(array('min' => 12)); // WHERE perineum > 12
     * </code>
     *
     * @param     mixed $perineum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByPerineum($perineum = null, $comparison = null)
    {
        if (is_array($perineum)) {
            $useMinMax = false;
            if (isset($perineum['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_PERINEUM, $perineum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($perineum['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_PERINEUM, $perineum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_PERINEUM, $perineum, $comparison);
    }

    /**
     * Filter the query on the blood_loss column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodLoss(1234); // WHERE blood_loss = 1234
     * $query->filterByBloodLoss(array(12, 34)); // WHERE blood_loss IN (12, 34)
     * $query->filterByBloodLoss(array('min' => 12)); // WHERE blood_loss > 12
     * </code>
     *
     * @param     mixed $bloodLoss The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByBloodLoss($bloodLoss = null, $comparison = null)
    {
        if (is_array($bloodLoss)) {
            $useMinMax = false;
            if (isset($bloodLoss['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_BLOOD_LOSS, $bloodLoss['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bloodLoss['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_BLOOD_LOSS, $bloodLoss['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_BLOOD_LOSS, $bloodLoss, $comparison);
    }

    /**
     * Filter the query on the blood_loss_unit column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodLossUnit('fooValue');   // WHERE blood_loss_unit = 'fooValue'
     * $query->filterByBloodLossUnit('%fooValue%', Criteria::LIKE); // WHERE blood_loss_unit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloodLossUnit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByBloodLossUnit($bloodLossUnit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloodLossUnit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_BLOOD_LOSS_UNIT, $bloodLossUnit, $comparison);
    }

    /**
     * Filter the query on the is_retained_placenta column
     *
     * Example usage:
     * <code>
     * $query->filterByIsRetainedPlacenta('fooValue');   // WHERE is_retained_placenta = 'fooValue'
     * $query->filterByIsRetainedPlacenta('%fooValue%', Criteria::LIKE); // WHERE is_retained_placenta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isRetainedPlacenta The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByIsRetainedPlacenta($isRetainedPlacenta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isRetainedPlacenta)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_IS_RETAINED_PLACENTA, $isRetainedPlacenta, $comparison);
    }

    /**
     * Filter the query on the post_labour_condition column
     *
     * Example usage:
     * <code>
     * $query->filterByPostLabourCondition('fooValue');   // WHERE post_labour_condition = 'fooValue'
     * $query->filterByPostLabourCondition('%fooValue%', Criteria::LIKE); // WHERE post_labour_condition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postLabourCondition The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByPostLabourCondition($postLabourCondition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postLabourCondition)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_POST_LABOUR_CONDITION, $postLabourCondition, $comparison);
    }

    /**
     * Filter the query on the outcome column
     *
     * Example usage:
     * <code>
     * $query->filterByOutcome('fooValue');   // WHERE outcome = 'fooValue'
     * $query->filterByOutcome('%fooValue%', Criteria::LIKE); // WHERE outcome LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outcome The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByOutcome($outcome = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outcome)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_OUTCOME, $outcome, $comparison);
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
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CarePregnancyTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePregnancyTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCarePregnancy $carePregnancy Object to remove from the list of results
     *
     * @return $this|ChildCarePregnancyQuery The current query, for fluid interface
     */
    public function prune($carePregnancy = null)
    {
        if ($carePregnancy) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CarePregnancyTableMap::COL_NR), $carePregnancy->getNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CarePregnancyTableMap::COL_ENCOUNTER_NR), $carePregnancy->getEncounterNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_pregnancy table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePregnancyTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CarePregnancyTableMap::clearInstancePool();
            CarePregnancyTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePregnancyTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CarePregnancyTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CarePregnancyTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CarePregnancyTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CarePregnancyQuery
