<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounter;
use CareMd\CareMd\CareEncounterQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'care_encounter' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounter';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounter';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 50;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 50;

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter.encounter_nr';

    /**
     * the column name for the encounter_nr_prev field
     */
    const COL_ENCOUNTER_NR_PREV = 'care_encounter.encounter_nr_prev';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_encounter.pid';

    /**
     * the column name for the encounter_date field
     */
    const COL_ENCOUNTER_DATE = 'care_encounter.encounter_date';

    /**
     * the column name for the encounter_class_nr field
     */
    const COL_ENCOUNTER_CLASS_NR = 'care_encounter.encounter_class_nr';

    /**
     * the column name for the encounter_type field
     */
    const COL_ENCOUNTER_TYPE = 'care_encounter.encounter_type';

    /**
     * the column name for the encounter_status field
     */
    const COL_ENCOUNTER_STATUS = 'care_encounter.encounter_status';

    /**
     * the column name for the referrer_diagnosis field
     */
    const COL_REFERRER_DIAGNOSIS = 'care_encounter.referrer_diagnosis';

    /**
     * the column name for the referrer_recom_therapy field
     */
    const COL_REFERRER_RECOM_THERAPY = 'care_encounter.referrer_recom_therapy';

    /**
     * the column name for the referrer_dr field
     */
    const COL_REFERRER_DR = 'care_encounter.referrer_dr';

    /**
     * the column name for the referrer_dept field
     */
    const COL_REFERRER_DEPT = 'care_encounter.referrer_dept';

    /**
     * the column name for the referrer_institution field
     */
    const COL_REFERRER_INSTITUTION = 'care_encounter.referrer_institution';

    /**
     * the column name for the referrer_notes field
     */
    const COL_REFERRER_NOTES = 'care_encounter.referrer_notes';

    /**
     * the column name for the financial_class_nr field
     */
    const COL_FINANCIAL_CLASS_NR = 'care_encounter.financial_class_nr';

    /**
     * the column name for the insurance_nr field
     */
    const COL_INSURANCE_NR = 'care_encounter.insurance_nr';

    /**
     * the column name for the insurance_firm_id field
     */
    const COL_INSURANCE_FIRM_ID = 'care_encounter.insurance_firm_id';

    /**
     * the column name for the insurance_class_nr field
     */
    const COL_INSURANCE_CLASS_NR = 'care_encounter.insurance_class_nr';

    /**
     * the column name for the insurance_2_nr field
     */
    const COL_INSURANCE_2_NR = 'care_encounter.insurance_2_nr';

    /**
     * the column name for the insurance_2_firm_id field
     */
    const COL_INSURANCE_2_FIRM_ID = 'care_encounter.insurance_2_firm_id';

    /**
     * the column name for the guarantor_pid field
     */
    const COL_GUARANTOR_PID = 'care_encounter.guarantor_pid';

    /**
     * the column name for the contact_pid field
     */
    const COL_CONTACT_PID = 'care_encounter.contact_pid';

    /**
     * the column name for the contact_relation field
     */
    const COL_CONTACT_RELATION = 'care_encounter.contact_relation';

    /**
     * the column name for the current_ward_nr field
     */
    const COL_CURRENT_WARD_NR = 'care_encounter.current_ward_nr';

    /**
     * the column name for the current_room_nr field
     */
    const COL_CURRENT_ROOM_NR = 'care_encounter.current_room_nr';

    /**
     * the column name for the in_ward field
     */
    const COL_IN_WARD = 'care_encounter.in_ward';

    /**
     * the column name for the current_dept_nr field
     */
    const COL_CURRENT_DEPT_NR = 'care_encounter.current_dept_nr';

    /**
     * the column name for the pharmacy field
     */
    const COL_PHARMACY = 'care_encounter.pharmacy';

    /**
     * the column name for the in_dept field
     */
    const COL_IN_DEPT = 'care_encounter.in_dept';

    /**
     * the column name for the current_firm_nr field
     */
    const COL_CURRENT_FIRM_NR = 'care_encounter.current_firm_nr';

    /**
     * the column name for the current_att_dr_nr field
     */
    const COL_CURRENT_ATT_DR_NR = 'care_encounter.current_att_dr_nr';

    /**
     * the column name for the consulting_dr field
     */
    const COL_CONSULTING_DR = 'care_encounter.consulting_dr';

    /**
     * the column name for the extra_service field
     */
    const COL_EXTRA_SERVICE = 'care_encounter.extra_service';

    /**
     * the column name for the form_nr field
     */
    const COL_FORM_NR = 'care_encounter.form_nr';

    /**
     * the column name for the is_discharged field
     */
    const COL_IS_DISCHARGED = 'care_encounter.is_discharged';

    /**
     * the column name for the discharge_date field
     */
    const COL_DISCHARGE_DATE = 'care_encounter.discharge_date';

    /**
     * the column name for the discharge_time field
     */
    const COL_DISCHARGE_TIME = 'care_encounter.discharge_time';

    /**
     * the column name for the followup_date field
     */
    const COL_FOLLOWUP_DATE = 'care_encounter.followup_date';

    /**
     * the column name for the followup_responsibility field
     */
    const COL_FOLLOWUP_RESPONSIBILITY = 'care_encounter.followup_responsibility';

    /**
     * the column name for the post_encounter_notes field
     */
    const COL_POST_ENCOUNTER_NOTES = 'care_encounter.post_encounter_notes';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter.create_time';

    /**
     * the column name for the room field
     */
    const COL_ROOM = 'care_encounter.room';

    /**
     * the column name for the room_history field
     */
    const COL_ROOM_HISTORY = 'care_encounter.room_history';

    /**
     * the column name for the current_dept_history field
     */
    const COL_CURRENT_DEPT_HISTORY = 'care_encounter.current_dept_history';

    /**
     * the column name for the medical_service field
     */
    const COL_MEDICAL_SERVICE = 'care_encounter.medical_service';

    /**
     * the column name for the referrer_number field
     */
    const COL_REFERRER_NUMBER = 'care_encounter.referrer_number';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('EncounterNr', 'EncounterNrPrev', 'Pid', 'EncounterDate', 'EncounterClassNr', 'EncounterType', 'EncounterStatus', 'ReferrerDiagnosis', 'ReferrerRecomTherapy', 'ReferrerDr', 'ReferrerDept', 'ReferrerInstitution', 'ReferrerNotes', 'FinancialClassNr', 'InsuranceNr', 'InsuranceFirmId', 'InsuranceClassNr', 'Insurance2Nr', 'Insurance2FirmId', 'GuarantorPid', 'ContactPid', 'ContactRelation', 'CurrentWardNr', 'CurrentRoomNr', 'InWard', 'CurrentDeptNr', 'Pharmacy', 'InDept', 'CurrentFirmNr', 'CurrentAttDrNr', 'ConsultingDr', 'ExtraService', 'FormNr', 'IsDischarged', 'DischargeDate', 'DischargeTime', 'FollowupDate', 'FollowupResponsibility', 'PostEncounterNotes', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'Room', 'RoomHistory', 'CurrentDeptHistory', 'MedicalService', 'ReferrerNumber', ),
        self::TYPE_CAMELNAME     => array('encounterNr', 'encounterNrPrev', 'pid', 'encounterDate', 'encounterClassNr', 'encounterType', 'encounterStatus', 'referrerDiagnosis', 'referrerRecomTherapy', 'referrerDr', 'referrerDept', 'referrerInstitution', 'referrerNotes', 'financialClassNr', 'insuranceNr', 'insuranceFirmId', 'insuranceClassNr', 'insurance2Nr', 'insurance2FirmId', 'guarantorPid', 'contactPid', 'contactRelation', 'currentWardNr', 'currentRoomNr', 'inWard', 'currentDeptNr', 'pharmacy', 'inDept', 'currentFirmNr', 'currentAttDrNr', 'consultingDr', 'extraService', 'formNr', 'isDischarged', 'dischargeDate', 'dischargeTime', 'followupDate', 'followupResponsibility', 'postEncounterNotes', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', 'room', 'roomHistory', 'currentDeptHistory', 'medicalService', 'referrerNumber', ),
        self::TYPE_COLNAME       => array(CareEncounterTableMap::COL_ENCOUNTER_NR, CareEncounterTableMap::COL_ENCOUNTER_NR_PREV, CareEncounterTableMap::COL_PID, CareEncounterTableMap::COL_ENCOUNTER_DATE, CareEncounterTableMap::COL_ENCOUNTER_CLASS_NR, CareEncounterTableMap::COL_ENCOUNTER_TYPE, CareEncounterTableMap::COL_ENCOUNTER_STATUS, CareEncounterTableMap::COL_REFERRER_DIAGNOSIS, CareEncounterTableMap::COL_REFERRER_RECOM_THERAPY, CareEncounterTableMap::COL_REFERRER_DR, CareEncounterTableMap::COL_REFERRER_DEPT, CareEncounterTableMap::COL_REFERRER_INSTITUTION, CareEncounterTableMap::COL_REFERRER_NOTES, CareEncounterTableMap::COL_FINANCIAL_CLASS_NR, CareEncounterTableMap::COL_INSURANCE_NR, CareEncounterTableMap::COL_INSURANCE_FIRM_ID, CareEncounterTableMap::COL_INSURANCE_CLASS_NR, CareEncounterTableMap::COL_INSURANCE_2_NR, CareEncounterTableMap::COL_INSURANCE_2_FIRM_ID, CareEncounterTableMap::COL_GUARANTOR_PID, CareEncounterTableMap::COL_CONTACT_PID, CareEncounterTableMap::COL_CONTACT_RELATION, CareEncounterTableMap::COL_CURRENT_WARD_NR, CareEncounterTableMap::COL_CURRENT_ROOM_NR, CareEncounterTableMap::COL_IN_WARD, CareEncounterTableMap::COL_CURRENT_DEPT_NR, CareEncounterTableMap::COL_PHARMACY, CareEncounterTableMap::COL_IN_DEPT, CareEncounterTableMap::COL_CURRENT_FIRM_NR, CareEncounterTableMap::COL_CURRENT_ATT_DR_NR, CareEncounterTableMap::COL_CONSULTING_DR, CareEncounterTableMap::COL_EXTRA_SERVICE, CareEncounterTableMap::COL_FORM_NR, CareEncounterTableMap::COL_IS_DISCHARGED, CareEncounterTableMap::COL_DISCHARGE_DATE, CareEncounterTableMap::COL_DISCHARGE_TIME, CareEncounterTableMap::COL_FOLLOWUP_DATE, CareEncounterTableMap::COL_FOLLOWUP_RESPONSIBILITY, CareEncounterTableMap::COL_POST_ENCOUNTER_NOTES, CareEncounterTableMap::COL_STATUS, CareEncounterTableMap::COL_HISTORY, CareEncounterTableMap::COL_MODIFY_ID, CareEncounterTableMap::COL_MODIFY_TIME, CareEncounterTableMap::COL_CREATE_ID, CareEncounterTableMap::COL_CREATE_TIME, CareEncounterTableMap::COL_ROOM, CareEncounterTableMap::COL_ROOM_HISTORY, CareEncounterTableMap::COL_CURRENT_DEPT_HISTORY, CareEncounterTableMap::COL_MEDICAL_SERVICE, CareEncounterTableMap::COL_REFERRER_NUMBER, ),
        self::TYPE_FIELDNAME     => array('encounter_nr', 'encounter_nr_prev', 'pid', 'encounter_date', 'encounter_class_nr', 'encounter_type', 'encounter_status', 'referrer_diagnosis', 'referrer_recom_therapy', 'referrer_dr', 'referrer_dept', 'referrer_institution', 'referrer_notes', 'financial_class_nr', 'insurance_nr', 'insurance_firm_id', 'insurance_class_nr', 'insurance_2_nr', 'insurance_2_firm_id', 'guarantor_pid', 'contact_pid', 'contact_relation', 'current_ward_nr', 'current_room_nr', 'in_ward', 'current_dept_nr', 'pharmacy', 'in_dept', 'current_firm_nr', 'current_att_dr_nr', 'consulting_dr', 'extra_service', 'form_nr', 'is_discharged', 'discharge_date', 'discharge_time', 'followup_date', 'followup_responsibility', 'post_encounter_notes', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'room', 'room_history', 'current_dept_history', 'medical_service', 'referrer_number', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('EncounterNr' => 0, 'EncounterNrPrev' => 1, 'Pid' => 2, 'EncounterDate' => 3, 'EncounterClassNr' => 4, 'EncounterType' => 5, 'EncounterStatus' => 6, 'ReferrerDiagnosis' => 7, 'ReferrerRecomTherapy' => 8, 'ReferrerDr' => 9, 'ReferrerDept' => 10, 'ReferrerInstitution' => 11, 'ReferrerNotes' => 12, 'FinancialClassNr' => 13, 'InsuranceNr' => 14, 'InsuranceFirmId' => 15, 'InsuranceClassNr' => 16, 'Insurance2Nr' => 17, 'Insurance2FirmId' => 18, 'GuarantorPid' => 19, 'ContactPid' => 20, 'ContactRelation' => 21, 'CurrentWardNr' => 22, 'CurrentRoomNr' => 23, 'InWard' => 24, 'CurrentDeptNr' => 25, 'Pharmacy' => 26, 'InDept' => 27, 'CurrentFirmNr' => 28, 'CurrentAttDrNr' => 29, 'ConsultingDr' => 30, 'ExtraService' => 31, 'FormNr' => 32, 'IsDischarged' => 33, 'DischargeDate' => 34, 'DischargeTime' => 35, 'FollowupDate' => 36, 'FollowupResponsibility' => 37, 'PostEncounterNotes' => 38, 'Status' => 39, 'History' => 40, 'ModifyId' => 41, 'ModifyTime' => 42, 'CreateId' => 43, 'CreateTime' => 44, 'Room' => 45, 'RoomHistory' => 46, 'CurrentDeptHistory' => 47, 'MedicalService' => 48, 'ReferrerNumber' => 49, ),
        self::TYPE_CAMELNAME     => array('encounterNr' => 0, 'encounterNrPrev' => 1, 'pid' => 2, 'encounterDate' => 3, 'encounterClassNr' => 4, 'encounterType' => 5, 'encounterStatus' => 6, 'referrerDiagnosis' => 7, 'referrerRecomTherapy' => 8, 'referrerDr' => 9, 'referrerDept' => 10, 'referrerInstitution' => 11, 'referrerNotes' => 12, 'financialClassNr' => 13, 'insuranceNr' => 14, 'insuranceFirmId' => 15, 'insuranceClassNr' => 16, 'insurance2Nr' => 17, 'insurance2FirmId' => 18, 'guarantorPid' => 19, 'contactPid' => 20, 'contactRelation' => 21, 'currentWardNr' => 22, 'currentRoomNr' => 23, 'inWard' => 24, 'currentDeptNr' => 25, 'pharmacy' => 26, 'inDept' => 27, 'currentFirmNr' => 28, 'currentAttDrNr' => 29, 'consultingDr' => 30, 'extraService' => 31, 'formNr' => 32, 'isDischarged' => 33, 'dischargeDate' => 34, 'dischargeTime' => 35, 'followupDate' => 36, 'followupResponsibility' => 37, 'postEncounterNotes' => 38, 'status' => 39, 'history' => 40, 'modifyId' => 41, 'modifyTime' => 42, 'createId' => 43, 'createTime' => 44, 'room' => 45, 'roomHistory' => 46, 'currentDeptHistory' => 47, 'medicalService' => 48, 'referrerNumber' => 49, ),
        self::TYPE_COLNAME       => array(CareEncounterTableMap::COL_ENCOUNTER_NR => 0, CareEncounterTableMap::COL_ENCOUNTER_NR_PREV => 1, CareEncounterTableMap::COL_PID => 2, CareEncounterTableMap::COL_ENCOUNTER_DATE => 3, CareEncounterTableMap::COL_ENCOUNTER_CLASS_NR => 4, CareEncounterTableMap::COL_ENCOUNTER_TYPE => 5, CareEncounterTableMap::COL_ENCOUNTER_STATUS => 6, CareEncounterTableMap::COL_REFERRER_DIAGNOSIS => 7, CareEncounterTableMap::COL_REFERRER_RECOM_THERAPY => 8, CareEncounterTableMap::COL_REFERRER_DR => 9, CareEncounterTableMap::COL_REFERRER_DEPT => 10, CareEncounterTableMap::COL_REFERRER_INSTITUTION => 11, CareEncounterTableMap::COL_REFERRER_NOTES => 12, CareEncounterTableMap::COL_FINANCIAL_CLASS_NR => 13, CareEncounterTableMap::COL_INSURANCE_NR => 14, CareEncounterTableMap::COL_INSURANCE_FIRM_ID => 15, CareEncounterTableMap::COL_INSURANCE_CLASS_NR => 16, CareEncounterTableMap::COL_INSURANCE_2_NR => 17, CareEncounterTableMap::COL_INSURANCE_2_FIRM_ID => 18, CareEncounterTableMap::COL_GUARANTOR_PID => 19, CareEncounterTableMap::COL_CONTACT_PID => 20, CareEncounterTableMap::COL_CONTACT_RELATION => 21, CareEncounterTableMap::COL_CURRENT_WARD_NR => 22, CareEncounterTableMap::COL_CURRENT_ROOM_NR => 23, CareEncounterTableMap::COL_IN_WARD => 24, CareEncounterTableMap::COL_CURRENT_DEPT_NR => 25, CareEncounterTableMap::COL_PHARMACY => 26, CareEncounterTableMap::COL_IN_DEPT => 27, CareEncounterTableMap::COL_CURRENT_FIRM_NR => 28, CareEncounterTableMap::COL_CURRENT_ATT_DR_NR => 29, CareEncounterTableMap::COL_CONSULTING_DR => 30, CareEncounterTableMap::COL_EXTRA_SERVICE => 31, CareEncounterTableMap::COL_FORM_NR => 32, CareEncounterTableMap::COL_IS_DISCHARGED => 33, CareEncounterTableMap::COL_DISCHARGE_DATE => 34, CareEncounterTableMap::COL_DISCHARGE_TIME => 35, CareEncounterTableMap::COL_FOLLOWUP_DATE => 36, CareEncounterTableMap::COL_FOLLOWUP_RESPONSIBILITY => 37, CareEncounterTableMap::COL_POST_ENCOUNTER_NOTES => 38, CareEncounterTableMap::COL_STATUS => 39, CareEncounterTableMap::COL_HISTORY => 40, CareEncounterTableMap::COL_MODIFY_ID => 41, CareEncounterTableMap::COL_MODIFY_TIME => 42, CareEncounterTableMap::COL_CREATE_ID => 43, CareEncounterTableMap::COL_CREATE_TIME => 44, CareEncounterTableMap::COL_ROOM => 45, CareEncounterTableMap::COL_ROOM_HISTORY => 46, CareEncounterTableMap::COL_CURRENT_DEPT_HISTORY => 47, CareEncounterTableMap::COL_MEDICAL_SERVICE => 48, CareEncounterTableMap::COL_REFERRER_NUMBER => 49, ),
        self::TYPE_FIELDNAME     => array('encounter_nr' => 0, 'encounter_nr_prev' => 1, 'pid' => 2, 'encounter_date' => 3, 'encounter_class_nr' => 4, 'encounter_type' => 5, 'encounter_status' => 6, 'referrer_diagnosis' => 7, 'referrer_recom_therapy' => 8, 'referrer_dr' => 9, 'referrer_dept' => 10, 'referrer_institution' => 11, 'referrer_notes' => 12, 'financial_class_nr' => 13, 'insurance_nr' => 14, 'insurance_firm_id' => 15, 'insurance_class_nr' => 16, 'insurance_2_nr' => 17, 'insurance_2_firm_id' => 18, 'guarantor_pid' => 19, 'contact_pid' => 20, 'contact_relation' => 21, 'current_ward_nr' => 22, 'current_room_nr' => 23, 'in_ward' => 24, 'current_dept_nr' => 25, 'pharmacy' => 26, 'in_dept' => 27, 'current_firm_nr' => 28, 'current_att_dr_nr' => 29, 'consulting_dr' => 30, 'extra_service' => 31, 'form_nr' => 32, 'is_discharged' => 33, 'discharge_date' => 34, 'discharge_time' => 35, 'followup_date' => 36, 'followup_responsibility' => 37, 'post_encounter_notes' => 38, 'status' => 39, 'history' => 40, 'modify_id' => 41, 'modify_time' => 42, 'create_id' => 43, 'create_time' => 44, 'room' => 45, 'room_history' => 46, 'current_dept_history' => 47, 'medical_service' => 48, 'referrer_number' => 49, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('care_encounter');
        $this->setPhpName('CareEncounter');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounter');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('encounter_nr', 'EncounterNr', 'BIGINT', true, 11, null);
        $this->addColumn('encounter_nr_prev', 'EncounterNrPrev', 'BIGINT', true, 11, null);
        $this->addColumn('pid', 'Pid', 'INTEGER', true, null, 0);
        $this->addColumn('encounter_date', 'EncounterDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('encounter_class_nr', 'EncounterClassNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('encounter_type', 'EncounterType', 'VARCHAR', true, 35, '');
        $this->addColumn('encounter_status', 'EncounterStatus', 'VARCHAR', true, 35, '');
        $this->addColumn('referrer_diagnosis', 'ReferrerDiagnosis', 'VARCHAR', true, 255, '');
        $this->addColumn('referrer_recom_therapy', 'ReferrerRecomTherapy', 'VARCHAR', false, 255, null);
        $this->addColumn('referrer_dr', 'ReferrerDr', 'VARCHAR', true, 60, '');
        $this->addColumn('referrer_dept', 'ReferrerDept', 'VARCHAR', true, 255, '');
        $this->addColumn('referrer_institution', 'ReferrerInstitution', 'VARCHAR', true, 255, '');
        $this->addColumn('referrer_notes', 'ReferrerNotes', 'LONGVARCHAR', true, null, null);
        $this->addColumn('financial_class_nr', 'FinancialClassNr', 'TINYINT', true, 3, 0);
        $this->addColumn('insurance_nr', 'InsuranceNr', 'VARCHAR', false, 25, '0');
        $this->addColumn('insurance_firm_id', 'InsuranceFirmId', 'VARCHAR', true, 25, '0');
        $this->addColumn('insurance_class_nr', 'InsuranceClassNr', 'TINYINT', true, 3, 0);
        $this->addColumn('insurance_2_nr', 'Insurance2Nr', 'VARCHAR', false, 25, '0');
        $this->addColumn('insurance_2_firm_id', 'Insurance2FirmId', 'VARCHAR', true, 25, '0');
        $this->addColumn('guarantor_pid', 'GuarantorPid', 'INTEGER', true, null, 0);
        $this->addColumn('contact_pid', 'ContactPid', 'INTEGER', true, null, 0);
        $this->addColumn('contact_relation', 'ContactRelation', 'VARCHAR', true, 35, '');
        $this->addColumn('current_ward_nr', 'CurrentWardNr', 'SMALLINT', true, 3, 0);
        $this->addColumn('current_room_nr', 'CurrentRoomNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('in_ward', 'InWard', 'BOOLEAN', true, 1, false);
        $this->addColumn('current_dept_nr', 'CurrentDeptNr', 'SMALLINT', true, 3, 0);
        $this->addColumn('pharmacy', 'Pharmacy', 'VARCHAR', true, 20, null);
        $this->addColumn('in_dept', 'InDept', 'BOOLEAN', true, 1, false);
        $this->addColumn('current_firm_nr', 'CurrentFirmNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('current_att_dr_nr', 'CurrentAttDrNr', 'INTEGER', true, 10, 0);
        $this->addColumn('consulting_dr', 'ConsultingDr', 'VARCHAR', true, 60, '');
        $this->addColumn('extra_service', 'ExtraService', 'VARCHAR', true, 25, '');
        $this->addColumn('form_nr', 'FormNr', 'VARCHAR', true, 20, null);
        $this->addColumn('is_discharged', 'IsDischarged', 'BOOLEAN', true, 1, false);
        $this->addColumn('discharge_date', 'DischargeDate', 'DATE', false, null, null);
        $this->addColumn('discharge_time', 'DischargeTime', 'TIME', false, null, null);
        $this->addColumn('followup_date', 'FollowupDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('followup_responsibility', 'FollowupResponsibility', 'VARCHAR', false, 255, null);
        $this->addColumn('post_encounter_notes', 'PostEncounterNotes', 'LONGVARCHAR', true, null, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('room', 'Room', 'VARCHAR', true, 20, 'GENERAL');
        $this->addColumn('room_history', 'RoomHistory', 'LONGVARCHAR', true, null, null);
        $this->addColumn('current_dept_history', 'CurrentDeptHistory', 'LONGVARCHAR', true, null, null);
        $this->addColumn('medical_service', 'MedicalService', 'VARCHAR', true, 50, null);
        $this->addColumn('referrer_number', 'ReferrerNumber', 'VARCHAR', true, 255, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? CareEncounterTableMap::CLASS_DEFAULT : CareEncounterTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (CareEncounter object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterTableMap::OM_CLASS;
            /** @var CareEncounter $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = CareEncounterTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounter $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CareEncounterTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_ENCOUNTER_NR_PREV);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_PID);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_ENCOUNTER_DATE);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_ENCOUNTER_CLASS_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_ENCOUNTER_TYPE);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_ENCOUNTER_STATUS);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_REFERRER_DIAGNOSIS);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_REFERRER_RECOM_THERAPY);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_REFERRER_DR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_REFERRER_DEPT);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_REFERRER_INSTITUTION);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_REFERRER_NOTES);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_FINANCIAL_CLASS_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_INSURANCE_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_INSURANCE_FIRM_ID);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_INSURANCE_CLASS_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_INSURANCE_2_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_INSURANCE_2_FIRM_ID);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_GUARANTOR_PID);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CONTACT_PID);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CONTACT_RELATION);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CURRENT_WARD_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CURRENT_ROOM_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_IN_WARD);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CURRENT_DEPT_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_PHARMACY);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_IN_DEPT);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CURRENT_FIRM_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CURRENT_ATT_DR_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CONSULTING_DR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_EXTRA_SERVICE);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_FORM_NR);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_IS_DISCHARGED);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_DISCHARGE_DATE);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_DISCHARGE_TIME);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_FOLLOWUP_DATE);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_FOLLOWUP_RESPONSIBILITY);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_POST_ENCOUNTER_NOTES);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_ROOM);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_ROOM_HISTORY);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_CURRENT_DEPT_HISTORY);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_MEDICAL_SERVICE);
            $criteria->addSelectColumn(CareEncounterTableMap::COL_REFERRER_NUMBER);
        } else {
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr_prev');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.encounter_date');
            $criteria->addSelectColumn($alias . '.encounter_class_nr');
            $criteria->addSelectColumn($alias . '.encounter_type');
            $criteria->addSelectColumn($alias . '.encounter_status');
            $criteria->addSelectColumn($alias . '.referrer_diagnosis');
            $criteria->addSelectColumn($alias . '.referrer_recom_therapy');
            $criteria->addSelectColumn($alias . '.referrer_dr');
            $criteria->addSelectColumn($alias . '.referrer_dept');
            $criteria->addSelectColumn($alias . '.referrer_institution');
            $criteria->addSelectColumn($alias . '.referrer_notes');
            $criteria->addSelectColumn($alias . '.financial_class_nr');
            $criteria->addSelectColumn($alias . '.insurance_nr');
            $criteria->addSelectColumn($alias . '.insurance_firm_id');
            $criteria->addSelectColumn($alias . '.insurance_class_nr');
            $criteria->addSelectColumn($alias . '.insurance_2_nr');
            $criteria->addSelectColumn($alias . '.insurance_2_firm_id');
            $criteria->addSelectColumn($alias . '.guarantor_pid');
            $criteria->addSelectColumn($alias . '.contact_pid');
            $criteria->addSelectColumn($alias . '.contact_relation');
            $criteria->addSelectColumn($alias . '.current_ward_nr');
            $criteria->addSelectColumn($alias . '.current_room_nr');
            $criteria->addSelectColumn($alias . '.in_ward');
            $criteria->addSelectColumn($alias . '.current_dept_nr');
            $criteria->addSelectColumn($alias . '.pharmacy');
            $criteria->addSelectColumn($alias . '.in_dept');
            $criteria->addSelectColumn($alias . '.current_firm_nr');
            $criteria->addSelectColumn($alias . '.current_att_dr_nr');
            $criteria->addSelectColumn($alias . '.consulting_dr');
            $criteria->addSelectColumn($alias . '.extra_service');
            $criteria->addSelectColumn($alias . '.form_nr');
            $criteria->addSelectColumn($alias . '.is_discharged');
            $criteria->addSelectColumn($alias . '.discharge_date');
            $criteria->addSelectColumn($alias . '.discharge_time');
            $criteria->addSelectColumn($alias . '.followup_date');
            $criteria->addSelectColumn($alias . '.followup_responsibility');
            $criteria->addSelectColumn($alias . '.post_encounter_notes');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.room');
            $criteria->addSelectColumn($alias . '.room_history');
            $criteria->addSelectColumn($alias . '.current_dept_history');
            $criteria->addSelectColumn($alias . '.medical_service');
            $criteria->addSelectColumn($alias . '.referrer_number');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterTableMap::DATABASE_NAME)->getTable(CareEncounterTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounter or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounter object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounter) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterTableMap::COL_ENCOUNTER_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounter or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounter object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounter object
        }

        if ($criteria->containsKey(CareEncounterTableMap::COL_ENCOUNTER_NR) && $criteria->keyContainsValue(CareEncounterTableMap::COL_ENCOUNTER_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterTableMap::COL_ENCOUNTER_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterTableMap::buildTableMap();
