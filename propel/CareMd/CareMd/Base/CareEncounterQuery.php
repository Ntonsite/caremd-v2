<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounter as ChildCareEncounter;
use CareMd\CareMd\CareEncounterQuery as ChildCareEncounterQuery;
use CareMd\CareMd\Map\CareEncounterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter' table.
 *
 *
 *
 * @method     ChildCareEncounterQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterQuery orderByEncounterNrPrev($order = Criteria::ASC) Order by the encounter_nr_prev column
 * @method     ChildCareEncounterQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCareEncounterQuery orderByEncounterDate($order = Criteria::ASC) Order by the encounter_date column
 * @method     ChildCareEncounterQuery orderByEncounterClassNr($order = Criteria::ASC) Order by the encounter_class_nr column
 * @method     ChildCareEncounterQuery orderByEncounterType($order = Criteria::ASC) Order by the encounter_type column
 * @method     ChildCareEncounterQuery orderByEncounterStatus($order = Criteria::ASC) Order by the encounter_status column
 * @method     ChildCareEncounterQuery orderByReferrerDiagnosis($order = Criteria::ASC) Order by the referrer_diagnosis column
 * @method     ChildCareEncounterQuery orderByReferrerRecomTherapy($order = Criteria::ASC) Order by the referrer_recom_therapy column
 * @method     ChildCareEncounterQuery orderByReferrerDr($order = Criteria::ASC) Order by the referrer_dr column
 * @method     ChildCareEncounterQuery orderByReferrerDept($order = Criteria::ASC) Order by the referrer_dept column
 * @method     ChildCareEncounterQuery orderByReferrerInstitution($order = Criteria::ASC) Order by the referrer_institution column
 * @method     ChildCareEncounterQuery orderByReferrerNotes($order = Criteria::ASC) Order by the referrer_notes column
 * @method     ChildCareEncounterQuery orderByFinancialClassNr($order = Criteria::ASC) Order by the financial_class_nr column
 * @method     ChildCareEncounterQuery orderByInsuranceNr($order = Criteria::ASC) Order by the insurance_nr column
 * @method     ChildCareEncounterQuery orderByInsuranceFirmId($order = Criteria::ASC) Order by the insurance_firm_id column
 * @method     ChildCareEncounterQuery orderByInsuranceClassNr($order = Criteria::ASC) Order by the insurance_class_nr column
 * @method     ChildCareEncounterQuery orderByInsurance2Nr($order = Criteria::ASC) Order by the insurance_2_nr column
 * @method     ChildCareEncounterQuery orderByInsurance2FirmId($order = Criteria::ASC) Order by the insurance_2_firm_id column
 * @method     ChildCareEncounterQuery orderByGuarantorPid($order = Criteria::ASC) Order by the guarantor_pid column
 * @method     ChildCareEncounterQuery orderByContactPid($order = Criteria::ASC) Order by the contact_pid column
 * @method     ChildCareEncounterQuery orderByContactRelation($order = Criteria::ASC) Order by the contact_relation column
 * @method     ChildCareEncounterQuery orderByCurrentWardNr($order = Criteria::ASC) Order by the current_ward_nr column
 * @method     ChildCareEncounterQuery orderByCurrentRoomNr($order = Criteria::ASC) Order by the current_room_nr column
 * @method     ChildCareEncounterQuery orderByInWard($order = Criteria::ASC) Order by the in_ward column
 * @method     ChildCareEncounterQuery orderByCurrentDeptNr($order = Criteria::ASC) Order by the current_dept_nr column
 * @method     ChildCareEncounterQuery orderByPharmacy($order = Criteria::ASC) Order by the pharmacy column
 * @method     ChildCareEncounterQuery orderByInDept($order = Criteria::ASC) Order by the in_dept column
 * @method     ChildCareEncounterQuery orderByCurrentFirmNr($order = Criteria::ASC) Order by the current_firm_nr column
 * @method     ChildCareEncounterQuery orderByCurrentAttDrNr($order = Criteria::ASC) Order by the current_att_dr_nr column
 * @method     ChildCareEncounterQuery orderByConsultingDr($order = Criteria::ASC) Order by the consulting_dr column
 * @method     ChildCareEncounterQuery orderByExtraService($order = Criteria::ASC) Order by the extra_service column
 * @method     ChildCareEncounterQuery orderByFormNr($order = Criteria::ASC) Order by the form_nr column
 * @method     ChildCareEncounterQuery orderByIsDischarged($order = Criteria::ASC) Order by the is_discharged column
 * @method     ChildCareEncounterQuery orderByDischargeDate($order = Criteria::ASC) Order by the discharge_date column
 * @method     ChildCareEncounterQuery orderByDischargeTime($order = Criteria::ASC) Order by the discharge_time column
 * @method     ChildCareEncounterQuery orderByFollowupDate($order = Criteria::ASC) Order by the followup_date column
 * @method     ChildCareEncounterQuery orderByFollowupResponsibility($order = Criteria::ASC) Order by the followup_responsibility column
 * @method     ChildCareEncounterQuery orderByPostEncounterNotes($order = Criteria::ASC) Order by the post_encounter_notes column
 * @method     ChildCareEncounterQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareEncounterQuery orderByRoom($order = Criteria::ASC) Order by the room column
 * @method     ChildCareEncounterQuery orderByRoomHistory($order = Criteria::ASC) Order by the room_history column
 * @method     ChildCareEncounterQuery orderByCurrentDeptHistory($order = Criteria::ASC) Order by the current_dept_history column
 * @method     ChildCareEncounterQuery orderByMedicalService($order = Criteria::ASC) Order by the medical_service column
 * @method     ChildCareEncounterQuery orderByReferrerNumber($order = Criteria::ASC) Order by the referrer_number column
 *
 * @method     ChildCareEncounterQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterQuery groupByEncounterNrPrev() Group by the encounter_nr_prev column
 * @method     ChildCareEncounterQuery groupByPid() Group by the pid column
 * @method     ChildCareEncounterQuery groupByEncounterDate() Group by the encounter_date column
 * @method     ChildCareEncounterQuery groupByEncounterClassNr() Group by the encounter_class_nr column
 * @method     ChildCareEncounterQuery groupByEncounterType() Group by the encounter_type column
 * @method     ChildCareEncounterQuery groupByEncounterStatus() Group by the encounter_status column
 * @method     ChildCareEncounterQuery groupByReferrerDiagnosis() Group by the referrer_diagnosis column
 * @method     ChildCareEncounterQuery groupByReferrerRecomTherapy() Group by the referrer_recom_therapy column
 * @method     ChildCareEncounterQuery groupByReferrerDr() Group by the referrer_dr column
 * @method     ChildCareEncounterQuery groupByReferrerDept() Group by the referrer_dept column
 * @method     ChildCareEncounterQuery groupByReferrerInstitution() Group by the referrer_institution column
 * @method     ChildCareEncounterQuery groupByReferrerNotes() Group by the referrer_notes column
 * @method     ChildCareEncounterQuery groupByFinancialClassNr() Group by the financial_class_nr column
 * @method     ChildCareEncounterQuery groupByInsuranceNr() Group by the insurance_nr column
 * @method     ChildCareEncounterQuery groupByInsuranceFirmId() Group by the insurance_firm_id column
 * @method     ChildCareEncounterQuery groupByInsuranceClassNr() Group by the insurance_class_nr column
 * @method     ChildCareEncounterQuery groupByInsurance2Nr() Group by the insurance_2_nr column
 * @method     ChildCareEncounterQuery groupByInsurance2FirmId() Group by the insurance_2_firm_id column
 * @method     ChildCareEncounterQuery groupByGuarantorPid() Group by the guarantor_pid column
 * @method     ChildCareEncounterQuery groupByContactPid() Group by the contact_pid column
 * @method     ChildCareEncounterQuery groupByContactRelation() Group by the contact_relation column
 * @method     ChildCareEncounterQuery groupByCurrentWardNr() Group by the current_ward_nr column
 * @method     ChildCareEncounterQuery groupByCurrentRoomNr() Group by the current_room_nr column
 * @method     ChildCareEncounterQuery groupByInWard() Group by the in_ward column
 * @method     ChildCareEncounterQuery groupByCurrentDeptNr() Group by the current_dept_nr column
 * @method     ChildCareEncounterQuery groupByPharmacy() Group by the pharmacy column
 * @method     ChildCareEncounterQuery groupByInDept() Group by the in_dept column
 * @method     ChildCareEncounterQuery groupByCurrentFirmNr() Group by the current_firm_nr column
 * @method     ChildCareEncounterQuery groupByCurrentAttDrNr() Group by the current_att_dr_nr column
 * @method     ChildCareEncounterQuery groupByConsultingDr() Group by the consulting_dr column
 * @method     ChildCareEncounterQuery groupByExtraService() Group by the extra_service column
 * @method     ChildCareEncounterQuery groupByFormNr() Group by the form_nr column
 * @method     ChildCareEncounterQuery groupByIsDischarged() Group by the is_discharged column
 * @method     ChildCareEncounterQuery groupByDischargeDate() Group by the discharge_date column
 * @method     ChildCareEncounterQuery groupByDischargeTime() Group by the discharge_time column
 * @method     ChildCareEncounterQuery groupByFollowupDate() Group by the followup_date column
 * @method     ChildCareEncounterQuery groupByFollowupResponsibility() Group by the followup_responsibility column
 * @method     ChildCareEncounterQuery groupByPostEncounterNotes() Group by the post_encounter_notes column
 * @method     ChildCareEncounterQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareEncounterQuery groupByRoom() Group by the room column
 * @method     ChildCareEncounterQuery groupByRoomHistory() Group by the room_history column
 * @method     ChildCareEncounterQuery groupByCurrentDeptHistory() Group by the current_dept_history column
 * @method     ChildCareEncounterQuery groupByMedicalService() Group by the medical_service column
 * @method     ChildCareEncounterQuery groupByReferrerNumber() Group by the referrer_number column
 *
 * @method     ChildCareEncounterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounter findOne(ConnectionInterface $con = null) Return the first ChildCareEncounter matching the query
 * @method     ChildCareEncounter findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounter matching the query, or a new ChildCareEncounter object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounter findOneByEncounterNr(string $encounter_nr) Return the first ChildCareEncounter filtered by the encounter_nr column
 * @method     ChildCareEncounter findOneByEncounterNrPrev(string $encounter_nr_prev) Return the first ChildCareEncounter filtered by the encounter_nr_prev column
 * @method     ChildCareEncounter findOneByPid(int $pid) Return the first ChildCareEncounter filtered by the pid column
 * @method     ChildCareEncounter findOneByEncounterDate(string $encounter_date) Return the first ChildCareEncounter filtered by the encounter_date column
 * @method     ChildCareEncounter findOneByEncounterClassNr(int $encounter_class_nr) Return the first ChildCareEncounter filtered by the encounter_class_nr column
 * @method     ChildCareEncounter findOneByEncounterType(string $encounter_type) Return the first ChildCareEncounter filtered by the encounter_type column
 * @method     ChildCareEncounter findOneByEncounterStatus(string $encounter_status) Return the first ChildCareEncounter filtered by the encounter_status column
 * @method     ChildCareEncounter findOneByReferrerDiagnosis(string $referrer_diagnosis) Return the first ChildCareEncounter filtered by the referrer_diagnosis column
 * @method     ChildCareEncounter findOneByReferrerRecomTherapy(string $referrer_recom_therapy) Return the first ChildCareEncounter filtered by the referrer_recom_therapy column
 * @method     ChildCareEncounter findOneByReferrerDr(string $referrer_dr) Return the first ChildCareEncounter filtered by the referrer_dr column
 * @method     ChildCareEncounter findOneByReferrerDept(string $referrer_dept) Return the first ChildCareEncounter filtered by the referrer_dept column
 * @method     ChildCareEncounter findOneByReferrerInstitution(string $referrer_institution) Return the first ChildCareEncounter filtered by the referrer_institution column
 * @method     ChildCareEncounter findOneByReferrerNotes(string $referrer_notes) Return the first ChildCareEncounter filtered by the referrer_notes column
 * @method     ChildCareEncounter findOneByFinancialClassNr(int $financial_class_nr) Return the first ChildCareEncounter filtered by the financial_class_nr column
 * @method     ChildCareEncounter findOneByInsuranceNr(string $insurance_nr) Return the first ChildCareEncounter filtered by the insurance_nr column
 * @method     ChildCareEncounter findOneByInsuranceFirmId(string $insurance_firm_id) Return the first ChildCareEncounter filtered by the insurance_firm_id column
 * @method     ChildCareEncounter findOneByInsuranceClassNr(int $insurance_class_nr) Return the first ChildCareEncounter filtered by the insurance_class_nr column
 * @method     ChildCareEncounter findOneByInsurance2Nr(string $insurance_2_nr) Return the first ChildCareEncounter filtered by the insurance_2_nr column
 * @method     ChildCareEncounter findOneByInsurance2FirmId(string $insurance_2_firm_id) Return the first ChildCareEncounter filtered by the insurance_2_firm_id column
 * @method     ChildCareEncounter findOneByGuarantorPid(int $guarantor_pid) Return the first ChildCareEncounter filtered by the guarantor_pid column
 * @method     ChildCareEncounter findOneByContactPid(int $contact_pid) Return the first ChildCareEncounter filtered by the contact_pid column
 * @method     ChildCareEncounter findOneByContactRelation(string $contact_relation) Return the first ChildCareEncounter filtered by the contact_relation column
 * @method     ChildCareEncounter findOneByCurrentWardNr(int $current_ward_nr) Return the first ChildCareEncounter filtered by the current_ward_nr column
 * @method     ChildCareEncounter findOneByCurrentRoomNr(int $current_room_nr) Return the first ChildCareEncounter filtered by the current_room_nr column
 * @method     ChildCareEncounter findOneByInWard(boolean $in_ward) Return the first ChildCareEncounter filtered by the in_ward column
 * @method     ChildCareEncounter findOneByCurrentDeptNr(int $current_dept_nr) Return the first ChildCareEncounter filtered by the current_dept_nr column
 * @method     ChildCareEncounter findOneByPharmacy(string $pharmacy) Return the first ChildCareEncounter filtered by the pharmacy column
 * @method     ChildCareEncounter findOneByInDept(boolean $in_dept) Return the first ChildCareEncounter filtered by the in_dept column
 * @method     ChildCareEncounter findOneByCurrentFirmNr(int $current_firm_nr) Return the first ChildCareEncounter filtered by the current_firm_nr column
 * @method     ChildCareEncounter findOneByCurrentAttDrNr(int $current_att_dr_nr) Return the first ChildCareEncounter filtered by the current_att_dr_nr column
 * @method     ChildCareEncounter findOneByConsultingDr(string $consulting_dr) Return the first ChildCareEncounter filtered by the consulting_dr column
 * @method     ChildCareEncounter findOneByExtraService(string $extra_service) Return the first ChildCareEncounter filtered by the extra_service column
 * @method     ChildCareEncounter findOneByFormNr(string $form_nr) Return the first ChildCareEncounter filtered by the form_nr column
 * @method     ChildCareEncounter findOneByIsDischarged(boolean $is_discharged) Return the first ChildCareEncounter filtered by the is_discharged column
 * @method     ChildCareEncounter findOneByDischargeDate(string $discharge_date) Return the first ChildCareEncounter filtered by the discharge_date column
 * @method     ChildCareEncounter findOneByDischargeTime(string $discharge_time) Return the first ChildCareEncounter filtered by the discharge_time column
 * @method     ChildCareEncounter findOneByFollowupDate(string $followup_date) Return the first ChildCareEncounter filtered by the followup_date column
 * @method     ChildCareEncounter findOneByFollowupResponsibility(string $followup_responsibility) Return the first ChildCareEncounter filtered by the followup_responsibility column
 * @method     ChildCareEncounter findOneByPostEncounterNotes(string $post_encounter_notes) Return the first ChildCareEncounter filtered by the post_encounter_notes column
 * @method     ChildCareEncounter findOneByStatus(string $status) Return the first ChildCareEncounter filtered by the status column
 * @method     ChildCareEncounter findOneByHistory(string $history) Return the first ChildCareEncounter filtered by the history column
 * @method     ChildCareEncounter findOneByModifyId(string $modify_id) Return the first ChildCareEncounter filtered by the modify_id column
 * @method     ChildCareEncounter findOneByModifyTime(string $modify_time) Return the first ChildCareEncounter filtered by the modify_time column
 * @method     ChildCareEncounter findOneByCreateId(string $create_id) Return the first ChildCareEncounter filtered by the create_id column
 * @method     ChildCareEncounter findOneByCreateTime(string $create_time) Return the first ChildCareEncounter filtered by the create_time column
 * @method     ChildCareEncounter findOneByRoom(string $room) Return the first ChildCareEncounter filtered by the room column
 * @method     ChildCareEncounter findOneByRoomHistory(string $room_history) Return the first ChildCareEncounter filtered by the room_history column
 * @method     ChildCareEncounter findOneByCurrentDeptHistory(string $current_dept_history) Return the first ChildCareEncounter filtered by the current_dept_history column
 * @method     ChildCareEncounter findOneByMedicalService(string $medical_service) Return the first ChildCareEncounter filtered by the medical_service column
 * @method     ChildCareEncounter findOneByReferrerNumber(string $referrer_number) Return the first ChildCareEncounter filtered by the referrer_number column *

 * @method     ChildCareEncounter requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounter by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounter matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounter requireOneByEncounterNr(string $encounter_nr) Return the first ChildCareEncounter filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByEncounterNrPrev(string $encounter_nr_prev) Return the first ChildCareEncounter filtered by the encounter_nr_prev column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByPid(int $pid) Return the first ChildCareEncounter filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByEncounterDate(string $encounter_date) Return the first ChildCareEncounter filtered by the encounter_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByEncounterClassNr(int $encounter_class_nr) Return the first ChildCareEncounter filtered by the encounter_class_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByEncounterType(string $encounter_type) Return the first ChildCareEncounter filtered by the encounter_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByEncounterStatus(string $encounter_status) Return the first ChildCareEncounter filtered by the encounter_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByReferrerDiagnosis(string $referrer_diagnosis) Return the first ChildCareEncounter filtered by the referrer_diagnosis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByReferrerRecomTherapy(string $referrer_recom_therapy) Return the first ChildCareEncounter filtered by the referrer_recom_therapy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByReferrerDr(string $referrer_dr) Return the first ChildCareEncounter filtered by the referrer_dr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByReferrerDept(string $referrer_dept) Return the first ChildCareEncounter filtered by the referrer_dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByReferrerInstitution(string $referrer_institution) Return the first ChildCareEncounter filtered by the referrer_institution column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByReferrerNotes(string $referrer_notes) Return the first ChildCareEncounter filtered by the referrer_notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByFinancialClassNr(int $financial_class_nr) Return the first ChildCareEncounter filtered by the financial_class_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByInsuranceNr(string $insurance_nr) Return the first ChildCareEncounter filtered by the insurance_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByInsuranceFirmId(string $insurance_firm_id) Return the first ChildCareEncounter filtered by the insurance_firm_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByInsuranceClassNr(int $insurance_class_nr) Return the first ChildCareEncounter filtered by the insurance_class_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByInsurance2Nr(string $insurance_2_nr) Return the first ChildCareEncounter filtered by the insurance_2_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByInsurance2FirmId(string $insurance_2_firm_id) Return the first ChildCareEncounter filtered by the insurance_2_firm_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByGuarantorPid(int $guarantor_pid) Return the first ChildCareEncounter filtered by the guarantor_pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByContactPid(int $contact_pid) Return the first ChildCareEncounter filtered by the contact_pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByContactRelation(string $contact_relation) Return the first ChildCareEncounter filtered by the contact_relation column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByCurrentWardNr(int $current_ward_nr) Return the first ChildCareEncounter filtered by the current_ward_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByCurrentRoomNr(int $current_room_nr) Return the first ChildCareEncounter filtered by the current_room_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByInWard(boolean $in_ward) Return the first ChildCareEncounter filtered by the in_ward column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByCurrentDeptNr(int $current_dept_nr) Return the first ChildCareEncounter filtered by the current_dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByPharmacy(string $pharmacy) Return the first ChildCareEncounter filtered by the pharmacy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByInDept(boolean $in_dept) Return the first ChildCareEncounter filtered by the in_dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByCurrentFirmNr(int $current_firm_nr) Return the first ChildCareEncounter filtered by the current_firm_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByCurrentAttDrNr(int $current_att_dr_nr) Return the first ChildCareEncounter filtered by the current_att_dr_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByConsultingDr(string $consulting_dr) Return the first ChildCareEncounter filtered by the consulting_dr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByExtraService(string $extra_service) Return the first ChildCareEncounter filtered by the extra_service column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByFormNr(string $form_nr) Return the first ChildCareEncounter filtered by the form_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByIsDischarged(boolean $is_discharged) Return the first ChildCareEncounter filtered by the is_discharged column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByDischargeDate(string $discharge_date) Return the first ChildCareEncounter filtered by the discharge_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByDischargeTime(string $discharge_time) Return the first ChildCareEncounter filtered by the discharge_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByFollowupDate(string $followup_date) Return the first ChildCareEncounter filtered by the followup_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByFollowupResponsibility(string $followup_responsibility) Return the first ChildCareEncounter filtered by the followup_responsibility column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByPostEncounterNotes(string $post_encounter_notes) Return the first ChildCareEncounter filtered by the post_encounter_notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByStatus(string $status) Return the first ChildCareEncounter filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByHistory(string $history) Return the first ChildCareEncounter filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByModifyId(string $modify_id) Return the first ChildCareEncounter filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounter filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByCreateId(string $create_id) Return the first ChildCareEncounter filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByCreateTime(string $create_time) Return the first ChildCareEncounter filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByRoom(string $room) Return the first ChildCareEncounter filtered by the room column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByRoomHistory(string $room_history) Return the first ChildCareEncounter filtered by the room_history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByCurrentDeptHistory(string $current_dept_history) Return the first ChildCareEncounter filtered by the current_dept_history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByMedicalService(string $medical_service) Return the first ChildCareEncounter filtered by the medical_service column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounter requireOneByReferrerNumber(string $referrer_number) Return the first ChildCareEncounter filtered by the referrer_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounter[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounter objects based on current ModelCriteria
 * @method     ChildCareEncounter[]|ObjectCollection findByEncounterNr(string $encounter_nr) Return ChildCareEncounter objects filtered by the encounter_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByEncounterNrPrev(string $encounter_nr_prev) Return ChildCareEncounter objects filtered by the encounter_nr_prev column
 * @method     ChildCareEncounter[]|ObjectCollection findByPid(int $pid) Return ChildCareEncounter objects filtered by the pid column
 * @method     ChildCareEncounter[]|ObjectCollection findByEncounterDate(string $encounter_date) Return ChildCareEncounter objects filtered by the encounter_date column
 * @method     ChildCareEncounter[]|ObjectCollection findByEncounterClassNr(int $encounter_class_nr) Return ChildCareEncounter objects filtered by the encounter_class_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByEncounterType(string $encounter_type) Return ChildCareEncounter objects filtered by the encounter_type column
 * @method     ChildCareEncounter[]|ObjectCollection findByEncounterStatus(string $encounter_status) Return ChildCareEncounter objects filtered by the encounter_status column
 * @method     ChildCareEncounter[]|ObjectCollection findByReferrerDiagnosis(string $referrer_diagnosis) Return ChildCareEncounter objects filtered by the referrer_diagnosis column
 * @method     ChildCareEncounter[]|ObjectCollection findByReferrerRecomTherapy(string $referrer_recom_therapy) Return ChildCareEncounter objects filtered by the referrer_recom_therapy column
 * @method     ChildCareEncounter[]|ObjectCollection findByReferrerDr(string $referrer_dr) Return ChildCareEncounter objects filtered by the referrer_dr column
 * @method     ChildCareEncounter[]|ObjectCollection findByReferrerDept(string $referrer_dept) Return ChildCareEncounter objects filtered by the referrer_dept column
 * @method     ChildCareEncounter[]|ObjectCollection findByReferrerInstitution(string $referrer_institution) Return ChildCareEncounter objects filtered by the referrer_institution column
 * @method     ChildCareEncounter[]|ObjectCollection findByReferrerNotes(string $referrer_notes) Return ChildCareEncounter objects filtered by the referrer_notes column
 * @method     ChildCareEncounter[]|ObjectCollection findByFinancialClassNr(int $financial_class_nr) Return ChildCareEncounter objects filtered by the financial_class_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByInsuranceNr(string $insurance_nr) Return ChildCareEncounter objects filtered by the insurance_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByInsuranceFirmId(string $insurance_firm_id) Return ChildCareEncounter objects filtered by the insurance_firm_id column
 * @method     ChildCareEncounter[]|ObjectCollection findByInsuranceClassNr(int $insurance_class_nr) Return ChildCareEncounter objects filtered by the insurance_class_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByInsurance2Nr(string $insurance_2_nr) Return ChildCareEncounter objects filtered by the insurance_2_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByInsurance2FirmId(string $insurance_2_firm_id) Return ChildCareEncounter objects filtered by the insurance_2_firm_id column
 * @method     ChildCareEncounter[]|ObjectCollection findByGuarantorPid(int $guarantor_pid) Return ChildCareEncounter objects filtered by the guarantor_pid column
 * @method     ChildCareEncounter[]|ObjectCollection findByContactPid(int $contact_pid) Return ChildCareEncounter objects filtered by the contact_pid column
 * @method     ChildCareEncounter[]|ObjectCollection findByContactRelation(string $contact_relation) Return ChildCareEncounter objects filtered by the contact_relation column
 * @method     ChildCareEncounter[]|ObjectCollection findByCurrentWardNr(int $current_ward_nr) Return ChildCareEncounter objects filtered by the current_ward_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByCurrentRoomNr(int $current_room_nr) Return ChildCareEncounter objects filtered by the current_room_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByInWard(boolean $in_ward) Return ChildCareEncounter objects filtered by the in_ward column
 * @method     ChildCareEncounter[]|ObjectCollection findByCurrentDeptNr(int $current_dept_nr) Return ChildCareEncounter objects filtered by the current_dept_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByPharmacy(string $pharmacy) Return ChildCareEncounter objects filtered by the pharmacy column
 * @method     ChildCareEncounter[]|ObjectCollection findByInDept(boolean $in_dept) Return ChildCareEncounter objects filtered by the in_dept column
 * @method     ChildCareEncounter[]|ObjectCollection findByCurrentFirmNr(int $current_firm_nr) Return ChildCareEncounter objects filtered by the current_firm_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByCurrentAttDrNr(int $current_att_dr_nr) Return ChildCareEncounter objects filtered by the current_att_dr_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByConsultingDr(string $consulting_dr) Return ChildCareEncounter objects filtered by the consulting_dr column
 * @method     ChildCareEncounter[]|ObjectCollection findByExtraService(string $extra_service) Return ChildCareEncounter objects filtered by the extra_service column
 * @method     ChildCareEncounter[]|ObjectCollection findByFormNr(string $form_nr) Return ChildCareEncounter objects filtered by the form_nr column
 * @method     ChildCareEncounter[]|ObjectCollection findByIsDischarged(boolean $is_discharged) Return ChildCareEncounter objects filtered by the is_discharged column
 * @method     ChildCareEncounter[]|ObjectCollection findByDischargeDate(string $discharge_date) Return ChildCareEncounter objects filtered by the discharge_date column
 * @method     ChildCareEncounter[]|ObjectCollection findByDischargeTime(string $discharge_time) Return ChildCareEncounter objects filtered by the discharge_time column
 * @method     ChildCareEncounter[]|ObjectCollection findByFollowupDate(string $followup_date) Return ChildCareEncounter objects filtered by the followup_date column
 * @method     ChildCareEncounter[]|ObjectCollection findByFollowupResponsibility(string $followup_responsibility) Return ChildCareEncounter objects filtered by the followup_responsibility column
 * @method     ChildCareEncounter[]|ObjectCollection findByPostEncounterNotes(string $post_encounter_notes) Return ChildCareEncounter objects filtered by the post_encounter_notes column
 * @method     ChildCareEncounter[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounter objects filtered by the status column
 * @method     ChildCareEncounter[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounter objects filtered by the history column
 * @method     ChildCareEncounter[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounter objects filtered by the modify_id column
 * @method     ChildCareEncounter[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounter objects filtered by the modify_time column
 * @method     ChildCareEncounter[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounter objects filtered by the create_id column
 * @method     ChildCareEncounter[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounter objects filtered by the create_time column
 * @method     ChildCareEncounter[]|ObjectCollection findByRoom(string $room) Return ChildCareEncounter objects filtered by the room column
 * @method     ChildCareEncounter[]|ObjectCollection findByRoomHistory(string $room_history) Return ChildCareEncounter objects filtered by the room_history column
 * @method     ChildCareEncounter[]|ObjectCollection findByCurrentDeptHistory(string $current_dept_history) Return ChildCareEncounter objects filtered by the current_dept_history column
 * @method     ChildCareEncounter[]|ObjectCollection findByMedicalService(string $medical_service) Return ChildCareEncounter objects filtered by the medical_service column
 * @method     ChildCareEncounter[]|ObjectCollection findByReferrerNumber(string $referrer_number) Return ChildCareEncounter objects filtered by the referrer_number column
 * @method     ChildCareEncounter[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounter', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterQuery();
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
     * @return ChildCareEncounter|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounter A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT encounter_nr, encounter_nr_prev, pid, encounter_date, encounter_class_nr, encounter_type, encounter_status, referrer_diagnosis, referrer_recom_therapy, referrer_dr, referrer_dept, referrer_institution, referrer_notes, financial_class_nr, insurance_nr, insurance_firm_id, insurance_class_nr, insurance_2_nr, insurance_2_firm_id, guarantor_pid, contact_pid, contact_relation, current_ward_nr, current_room_nr, in_ward, current_dept_nr, pharmacy, in_dept, current_firm_nr, current_att_dr_nr, consulting_dr, extra_service, form_nr, is_discharged, discharge_date, discharge_time, followup_date, followup_responsibility, post_encounter_notes, status, history, modify_id, modify_time, create_id, create_time, room, room_history, current_dept_history, medical_service, referrer_number FROM care_encounter WHERE encounter_nr = :p0';
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
            /** @var ChildCareEncounter $obj */
            $obj = new ChildCareEncounter();
            $obj->hydrate($row);
            CareEncounterTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounter|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the encounter_nr_prev column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterNrPrev(1234); // WHERE encounter_nr_prev = 1234
     * $query->filterByEncounterNrPrev(array(12, 34)); // WHERE encounter_nr_prev IN (12, 34)
     * $query->filterByEncounterNrPrev(array('min' => 12)); // WHERE encounter_nr_prev > 12
     * </code>
     *
     * @param     mixed $encounterNrPrev The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByEncounterNrPrev($encounterNrPrev = null, $comparison = null)
    {
        if (is_array($encounterNrPrev)) {
            $useMinMax = false;
            if (isset($encounterNrPrev['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_NR_PREV, $encounterNrPrev['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNrPrev['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_NR_PREV, $encounterNrPrev['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_NR_PREV, $encounterNrPrev, $comparison);
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
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the encounter_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterDate('2011-03-14'); // WHERE encounter_date = '2011-03-14'
     * $query->filterByEncounterDate('now'); // WHERE encounter_date = '2011-03-14'
     * $query->filterByEncounterDate(array('max' => 'yesterday')); // WHERE encounter_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $encounterDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByEncounterDate($encounterDate = null, $comparison = null)
    {
        if (is_array($encounterDate)) {
            $useMinMax = false;
            if (isset($encounterDate['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_DATE, $encounterDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterDate['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_DATE, $encounterDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_DATE, $encounterDate, $comparison);
    }

    /**
     * Filter the query on the encounter_class_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterClassNr(1234); // WHERE encounter_class_nr = 1234
     * $query->filterByEncounterClassNr(array(12, 34)); // WHERE encounter_class_nr IN (12, 34)
     * $query->filterByEncounterClassNr(array('min' => 12)); // WHERE encounter_class_nr > 12
     * </code>
     *
     * @param     mixed $encounterClassNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByEncounterClassNr($encounterClassNr = null, $comparison = null)
    {
        if (is_array($encounterClassNr)) {
            $useMinMax = false;
            if (isset($encounterClassNr['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_CLASS_NR, $encounterClassNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterClassNr['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_CLASS_NR, $encounterClassNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_CLASS_NR, $encounterClassNr, $comparison);
    }

    /**
     * Filter the query on the encounter_type column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterType('fooValue');   // WHERE encounter_type = 'fooValue'
     * $query->filterByEncounterType('%fooValue%', Criteria::LIKE); // WHERE encounter_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encounterType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByEncounterType($encounterType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encounterType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_TYPE, $encounterType, $comparison);
    }

    /**
     * Filter the query on the encounter_status column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterStatus('fooValue');   // WHERE encounter_status = 'fooValue'
     * $query->filterByEncounterStatus('%fooValue%', Criteria::LIKE); // WHERE encounter_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encounterStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByEncounterStatus($encounterStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encounterStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_STATUS, $encounterStatus, $comparison);
    }

    /**
     * Filter the query on the referrer_diagnosis column
     *
     * Example usage:
     * <code>
     * $query->filterByReferrerDiagnosis('fooValue');   // WHERE referrer_diagnosis = 'fooValue'
     * $query->filterByReferrerDiagnosis('%fooValue%', Criteria::LIKE); // WHERE referrer_diagnosis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referrerDiagnosis The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByReferrerDiagnosis($referrerDiagnosis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referrerDiagnosis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_REFERRER_DIAGNOSIS, $referrerDiagnosis, $comparison);
    }

    /**
     * Filter the query on the referrer_recom_therapy column
     *
     * Example usage:
     * <code>
     * $query->filterByReferrerRecomTherapy('fooValue');   // WHERE referrer_recom_therapy = 'fooValue'
     * $query->filterByReferrerRecomTherapy('%fooValue%', Criteria::LIKE); // WHERE referrer_recom_therapy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referrerRecomTherapy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByReferrerRecomTherapy($referrerRecomTherapy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referrerRecomTherapy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_REFERRER_RECOM_THERAPY, $referrerRecomTherapy, $comparison);
    }

    /**
     * Filter the query on the referrer_dr column
     *
     * Example usage:
     * <code>
     * $query->filterByReferrerDr('fooValue');   // WHERE referrer_dr = 'fooValue'
     * $query->filterByReferrerDr('%fooValue%', Criteria::LIKE); // WHERE referrer_dr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referrerDr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByReferrerDr($referrerDr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referrerDr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_REFERRER_DR, $referrerDr, $comparison);
    }

    /**
     * Filter the query on the referrer_dept column
     *
     * Example usage:
     * <code>
     * $query->filterByReferrerDept('fooValue');   // WHERE referrer_dept = 'fooValue'
     * $query->filterByReferrerDept('%fooValue%', Criteria::LIKE); // WHERE referrer_dept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referrerDept The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByReferrerDept($referrerDept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referrerDept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_REFERRER_DEPT, $referrerDept, $comparison);
    }

    /**
     * Filter the query on the referrer_institution column
     *
     * Example usage:
     * <code>
     * $query->filterByReferrerInstitution('fooValue');   // WHERE referrer_institution = 'fooValue'
     * $query->filterByReferrerInstitution('%fooValue%', Criteria::LIKE); // WHERE referrer_institution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referrerInstitution The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByReferrerInstitution($referrerInstitution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referrerInstitution)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_REFERRER_INSTITUTION, $referrerInstitution, $comparison);
    }

    /**
     * Filter the query on the referrer_notes column
     *
     * Example usage:
     * <code>
     * $query->filterByReferrerNotes('fooValue');   // WHERE referrer_notes = 'fooValue'
     * $query->filterByReferrerNotes('%fooValue%', Criteria::LIKE); // WHERE referrer_notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referrerNotes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByReferrerNotes($referrerNotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referrerNotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_REFERRER_NOTES, $referrerNotes, $comparison);
    }

    /**
     * Filter the query on the financial_class_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByFinancialClassNr(1234); // WHERE financial_class_nr = 1234
     * $query->filterByFinancialClassNr(array(12, 34)); // WHERE financial_class_nr IN (12, 34)
     * $query->filterByFinancialClassNr(array('min' => 12)); // WHERE financial_class_nr > 12
     * </code>
     *
     * @param     mixed $financialClassNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByFinancialClassNr($financialClassNr = null, $comparison = null)
    {
        if (is_array($financialClassNr)) {
            $useMinMax = false;
            if (isset($financialClassNr['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_FINANCIAL_CLASS_NR, $financialClassNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($financialClassNr['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_FINANCIAL_CLASS_NR, $financialClassNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_FINANCIAL_CLASS_NR, $financialClassNr, $comparison);
    }

    /**
     * Filter the query on the insurance_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceNr('fooValue');   // WHERE insurance_nr = 'fooValue'
     * $query->filterByInsuranceNr('%fooValue%', Criteria::LIKE); // WHERE insurance_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insuranceNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByInsuranceNr($insuranceNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insuranceNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_INSURANCE_NR, $insuranceNr, $comparison);
    }

    /**
     * Filter the query on the insurance_firm_id column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceFirmId('fooValue');   // WHERE insurance_firm_id = 'fooValue'
     * $query->filterByInsuranceFirmId('%fooValue%', Criteria::LIKE); // WHERE insurance_firm_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insuranceFirmId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByInsuranceFirmId($insuranceFirmId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insuranceFirmId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_INSURANCE_FIRM_ID, $insuranceFirmId, $comparison);
    }

    /**
     * Filter the query on the insurance_class_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceClassNr(1234); // WHERE insurance_class_nr = 1234
     * $query->filterByInsuranceClassNr(array(12, 34)); // WHERE insurance_class_nr IN (12, 34)
     * $query->filterByInsuranceClassNr(array('min' => 12)); // WHERE insurance_class_nr > 12
     * </code>
     *
     * @param     mixed $insuranceClassNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByInsuranceClassNr($insuranceClassNr = null, $comparison = null)
    {
        if (is_array($insuranceClassNr)) {
            $useMinMax = false;
            if (isset($insuranceClassNr['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_INSURANCE_CLASS_NR, $insuranceClassNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceClassNr['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_INSURANCE_CLASS_NR, $insuranceClassNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_INSURANCE_CLASS_NR, $insuranceClassNr, $comparison);
    }

    /**
     * Filter the query on the insurance_2_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByInsurance2Nr('fooValue');   // WHERE insurance_2_nr = 'fooValue'
     * $query->filterByInsurance2Nr('%fooValue%', Criteria::LIKE); // WHERE insurance_2_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insurance2Nr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByInsurance2Nr($insurance2Nr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insurance2Nr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_INSURANCE_2_NR, $insurance2Nr, $comparison);
    }

    /**
     * Filter the query on the insurance_2_firm_id column
     *
     * Example usage:
     * <code>
     * $query->filterByInsurance2FirmId('fooValue');   // WHERE insurance_2_firm_id = 'fooValue'
     * $query->filterByInsurance2FirmId('%fooValue%', Criteria::LIKE); // WHERE insurance_2_firm_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insurance2FirmId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByInsurance2FirmId($insurance2FirmId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insurance2FirmId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_INSURANCE_2_FIRM_ID, $insurance2FirmId, $comparison);
    }

    /**
     * Filter the query on the guarantor_pid column
     *
     * Example usage:
     * <code>
     * $query->filterByGuarantorPid(1234); // WHERE guarantor_pid = 1234
     * $query->filterByGuarantorPid(array(12, 34)); // WHERE guarantor_pid IN (12, 34)
     * $query->filterByGuarantorPid(array('min' => 12)); // WHERE guarantor_pid > 12
     * </code>
     *
     * @param     mixed $guarantorPid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByGuarantorPid($guarantorPid = null, $comparison = null)
    {
        if (is_array($guarantorPid)) {
            $useMinMax = false;
            if (isset($guarantorPid['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_GUARANTOR_PID, $guarantorPid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($guarantorPid['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_GUARANTOR_PID, $guarantorPid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_GUARANTOR_PID, $guarantorPid, $comparison);
    }

    /**
     * Filter the query on the contact_pid column
     *
     * Example usage:
     * <code>
     * $query->filterByContactPid(1234); // WHERE contact_pid = 1234
     * $query->filterByContactPid(array(12, 34)); // WHERE contact_pid IN (12, 34)
     * $query->filterByContactPid(array('min' => 12)); // WHERE contact_pid > 12
     * </code>
     *
     * @param     mixed $contactPid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByContactPid($contactPid = null, $comparison = null)
    {
        if (is_array($contactPid)) {
            $useMinMax = false;
            if (isset($contactPid['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CONTACT_PID, $contactPid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contactPid['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CONTACT_PID, $contactPid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CONTACT_PID, $contactPid, $comparison);
    }

    /**
     * Filter the query on the contact_relation column
     *
     * Example usage:
     * <code>
     * $query->filterByContactRelation('fooValue');   // WHERE contact_relation = 'fooValue'
     * $query->filterByContactRelation('%fooValue%', Criteria::LIKE); // WHERE contact_relation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactRelation The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByContactRelation($contactRelation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactRelation)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CONTACT_RELATION, $contactRelation, $comparison);
    }

    /**
     * Filter the query on the current_ward_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentWardNr(1234); // WHERE current_ward_nr = 1234
     * $query->filterByCurrentWardNr(array(12, 34)); // WHERE current_ward_nr IN (12, 34)
     * $query->filterByCurrentWardNr(array('min' => 12)); // WHERE current_ward_nr > 12
     * </code>
     *
     * @param     mixed $currentWardNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByCurrentWardNr($currentWardNr = null, $comparison = null)
    {
        if (is_array($currentWardNr)) {
            $useMinMax = false;
            if (isset($currentWardNr['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_WARD_NR, $currentWardNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentWardNr['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_WARD_NR, $currentWardNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_WARD_NR, $currentWardNr, $comparison);
    }

    /**
     * Filter the query on the current_room_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentRoomNr(1234); // WHERE current_room_nr = 1234
     * $query->filterByCurrentRoomNr(array(12, 34)); // WHERE current_room_nr IN (12, 34)
     * $query->filterByCurrentRoomNr(array('min' => 12)); // WHERE current_room_nr > 12
     * </code>
     *
     * @param     mixed $currentRoomNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByCurrentRoomNr($currentRoomNr = null, $comparison = null)
    {
        if (is_array($currentRoomNr)) {
            $useMinMax = false;
            if (isset($currentRoomNr['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_ROOM_NR, $currentRoomNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentRoomNr['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_ROOM_NR, $currentRoomNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_ROOM_NR, $currentRoomNr, $comparison);
    }

    /**
     * Filter the query on the in_ward column
     *
     * Example usage:
     * <code>
     * $query->filterByInWard(true); // WHERE in_ward = true
     * $query->filterByInWard('yes'); // WHERE in_ward = true
     * </code>
     *
     * @param     boolean|string $inWard The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByInWard($inWard = null, $comparison = null)
    {
        if (is_string($inWard)) {
            $inWard = in_array(strtolower($inWard), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_IN_WARD, $inWard, $comparison);
    }

    /**
     * Filter the query on the current_dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentDeptNr(1234); // WHERE current_dept_nr = 1234
     * $query->filterByCurrentDeptNr(array(12, 34)); // WHERE current_dept_nr IN (12, 34)
     * $query->filterByCurrentDeptNr(array('min' => 12)); // WHERE current_dept_nr > 12
     * </code>
     *
     * @param     mixed $currentDeptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByCurrentDeptNr($currentDeptNr = null, $comparison = null)
    {
        if (is_array($currentDeptNr)) {
            $useMinMax = false;
            if (isset($currentDeptNr['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_DEPT_NR, $currentDeptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentDeptNr['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_DEPT_NR, $currentDeptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_DEPT_NR, $currentDeptNr, $comparison);
    }

    /**
     * Filter the query on the pharmacy column
     *
     * Example usage:
     * <code>
     * $query->filterByPharmacy('fooValue');   // WHERE pharmacy = 'fooValue'
     * $query->filterByPharmacy('%fooValue%', Criteria::LIKE); // WHERE pharmacy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pharmacy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByPharmacy($pharmacy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pharmacy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_PHARMACY, $pharmacy, $comparison);
    }

    /**
     * Filter the query on the in_dept column
     *
     * Example usage:
     * <code>
     * $query->filterByInDept(true); // WHERE in_dept = true
     * $query->filterByInDept('yes'); // WHERE in_dept = true
     * </code>
     *
     * @param     boolean|string $inDept The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByInDept($inDept = null, $comparison = null)
    {
        if (is_string($inDept)) {
            $inDept = in_array(strtolower($inDept), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_IN_DEPT, $inDept, $comparison);
    }

    /**
     * Filter the query on the current_firm_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentFirmNr(1234); // WHERE current_firm_nr = 1234
     * $query->filterByCurrentFirmNr(array(12, 34)); // WHERE current_firm_nr IN (12, 34)
     * $query->filterByCurrentFirmNr(array('min' => 12)); // WHERE current_firm_nr > 12
     * </code>
     *
     * @param     mixed $currentFirmNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByCurrentFirmNr($currentFirmNr = null, $comparison = null)
    {
        if (is_array($currentFirmNr)) {
            $useMinMax = false;
            if (isset($currentFirmNr['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_FIRM_NR, $currentFirmNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentFirmNr['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_FIRM_NR, $currentFirmNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_FIRM_NR, $currentFirmNr, $comparison);
    }

    /**
     * Filter the query on the current_att_dr_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentAttDrNr(1234); // WHERE current_att_dr_nr = 1234
     * $query->filterByCurrentAttDrNr(array(12, 34)); // WHERE current_att_dr_nr IN (12, 34)
     * $query->filterByCurrentAttDrNr(array('min' => 12)); // WHERE current_att_dr_nr > 12
     * </code>
     *
     * @param     mixed $currentAttDrNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByCurrentAttDrNr($currentAttDrNr = null, $comparison = null)
    {
        if (is_array($currentAttDrNr)) {
            $useMinMax = false;
            if (isset($currentAttDrNr['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_ATT_DR_NR, $currentAttDrNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentAttDrNr['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_ATT_DR_NR, $currentAttDrNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_ATT_DR_NR, $currentAttDrNr, $comparison);
    }

    /**
     * Filter the query on the consulting_dr column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultingDr('fooValue');   // WHERE consulting_dr = 'fooValue'
     * $query->filterByConsultingDr('%fooValue%', Criteria::LIKE); // WHERE consulting_dr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultingDr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByConsultingDr($consultingDr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultingDr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CONSULTING_DR, $consultingDr, $comparison);
    }

    /**
     * Filter the query on the extra_service column
     *
     * Example usage:
     * <code>
     * $query->filterByExtraService('fooValue');   // WHERE extra_service = 'fooValue'
     * $query->filterByExtraService('%fooValue%', Criteria::LIKE); // WHERE extra_service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extraService The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByExtraService($extraService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraService)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_EXTRA_SERVICE, $extraService, $comparison);
    }

    /**
     * Filter the query on the form_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByFormNr('fooValue');   // WHERE form_nr = 'fooValue'
     * $query->filterByFormNr('%fooValue%', Criteria::LIKE); // WHERE form_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByFormNr($formNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_FORM_NR, $formNr, $comparison);
    }

    /**
     * Filter the query on the is_discharged column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDischarged(true); // WHERE is_discharged = true
     * $query->filterByIsDischarged('yes'); // WHERE is_discharged = true
     * </code>
     *
     * @param     boolean|string $isDischarged The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByIsDischarged($isDischarged = null, $comparison = null)
    {
        if (is_string($isDischarged)) {
            $isDischarged = in_array(strtolower($isDischarged), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_IS_DISCHARGED, $isDischarged, $comparison);
    }

    /**
     * Filter the query on the discharge_date column
     *
     * Example usage:
     * <code>
     * $query->filterByDischargeDate('2011-03-14'); // WHERE discharge_date = '2011-03-14'
     * $query->filterByDischargeDate('now'); // WHERE discharge_date = '2011-03-14'
     * $query->filterByDischargeDate(array('max' => 'yesterday')); // WHERE discharge_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $dischargeDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByDischargeDate($dischargeDate = null, $comparison = null)
    {
        if (is_array($dischargeDate)) {
            $useMinMax = false;
            if (isset($dischargeDate['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_DISCHARGE_DATE, $dischargeDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dischargeDate['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_DISCHARGE_DATE, $dischargeDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_DISCHARGE_DATE, $dischargeDate, $comparison);
    }

    /**
     * Filter the query on the discharge_time column
     *
     * Example usage:
     * <code>
     * $query->filterByDischargeTime('2011-03-14'); // WHERE discharge_time = '2011-03-14'
     * $query->filterByDischargeTime('now'); // WHERE discharge_time = '2011-03-14'
     * $query->filterByDischargeTime(array('max' => 'yesterday')); // WHERE discharge_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $dischargeTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByDischargeTime($dischargeTime = null, $comparison = null)
    {
        if (is_array($dischargeTime)) {
            $useMinMax = false;
            if (isset($dischargeTime['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_DISCHARGE_TIME, $dischargeTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dischargeTime['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_DISCHARGE_TIME, $dischargeTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_DISCHARGE_TIME, $dischargeTime, $comparison);
    }

    /**
     * Filter the query on the followup_date column
     *
     * Example usage:
     * <code>
     * $query->filterByFollowupDate('2011-03-14'); // WHERE followup_date = '2011-03-14'
     * $query->filterByFollowupDate('now'); // WHERE followup_date = '2011-03-14'
     * $query->filterByFollowupDate(array('max' => 'yesterday')); // WHERE followup_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $followupDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByFollowupDate($followupDate = null, $comparison = null)
    {
        if (is_array($followupDate)) {
            $useMinMax = false;
            if (isset($followupDate['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_FOLLOWUP_DATE, $followupDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($followupDate['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_FOLLOWUP_DATE, $followupDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_FOLLOWUP_DATE, $followupDate, $comparison);
    }

    /**
     * Filter the query on the followup_responsibility column
     *
     * Example usage:
     * <code>
     * $query->filterByFollowupResponsibility('fooValue');   // WHERE followup_responsibility = 'fooValue'
     * $query->filterByFollowupResponsibility('%fooValue%', Criteria::LIKE); // WHERE followup_responsibility LIKE '%fooValue%'
     * </code>
     *
     * @param     string $followupResponsibility The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByFollowupResponsibility($followupResponsibility = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($followupResponsibility)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_FOLLOWUP_RESPONSIBILITY, $followupResponsibility, $comparison);
    }

    /**
     * Filter the query on the post_encounter_notes column
     *
     * Example usage:
     * <code>
     * $query->filterByPostEncounterNotes('fooValue');   // WHERE post_encounter_notes = 'fooValue'
     * $query->filterByPostEncounterNotes('%fooValue%', Criteria::LIKE); // WHERE post_encounter_notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postEncounterNotes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByPostEncounterNotes($postEncounterNotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postEncounterNotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_POST_ENCOUNTER_NOTES, $postEncounterNotes, $comparison);
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
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Filter the query on the room column
     *
     * Example usage:
     * <code>
     * $query->filterByRoom('fooValue');   // WHERE room = 'fooValue'
     * $query->filterByRoom('%fooValue%', Criteria::LIKE); // WHERE room LIKE '%fooValue%'
     * </code>
     *
     * @param     string $room The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByRoom($room = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($room)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_ROOM, $room, $comparison);
    }

    /**
     * Filter the query on the room_history column
     *
     * Example usage:
     * <code>
     * $query->filterByRoomHistory('fooValue');   // WHERE room_history = 'fooValue'
     * $query->filterByRoomHistory('%fooValue%', Criteria::LIKE); // WHERE room_history LIKE '%fooValue%'
     * </code>
     *
     * @param     string $roomHistory The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByRoomHistory($roomHistory = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($roomHistory)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_ROOM_HISTORY, $roomHistory, $comparison);
    }

    /**
     * Filter the query on the current_dept_history column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentDeptHistory('fooValue');   // WHERE current_dept_history = 'fooValue'
     * $query->filterByCurrentDeptHistory('%fooValue%', Criteria::LIKE); // WHERE current_dept_history LIKE '%fooValue%'
     * </code>
     *
     * @param     string $currentDeptHistory The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByCurrentDeptHistory($currentDeptHistory = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($currentDeptHistory)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_CURRENT_DEPT_HISTORY, $currentDeptHistory, $comparison);
    }

    /**
     * Filter the query on the medical_service column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicalService('fooValue');   // WHERE medical_service = 'fooValue'
     * $query->filterByMedicalService('%fooValue%', Criteria::LIKE); // WHERE medical_service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicalService The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByMedicalService($medicalService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicalService)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_MEDICAL_SERVICE, $medicalService, $comparison);
    }

    /**
     * Filter the query on the referrer_number column
     *
     * Example usage:
     * <code>
     * $query->filterByReferrerNumber('fooValue');   // WHERE referrer_number = 'fooValue'
     * $query->filterByReferrerNumber('%fooValue%', Criteria::LIKE); // WHERE referrer_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referrerNumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function filterByReferrerNumber($referrerNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referrerNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterTableMap::COL_REFERRER_NUMBER, $referrerNumber, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounter $careEncounter Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterQuery The current query, for fluid interface
     */
    public function prune($careEncounter = null)
    {
        if ($careEncounter) {
            $this->addUsingAlias(CareEncounterTableMap::COL_ENCOUNTER_NR, $careEncounter->getEncounterNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterTableMap::clearInstancePool();
            CareEncounterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterQuery
