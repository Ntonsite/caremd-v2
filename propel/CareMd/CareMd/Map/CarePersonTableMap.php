<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CarePerson;
use CareMd\CareMd\CarePersonQuery;
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
 * This class defines the structure of the 'care_person' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CarePersonTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CarePersonTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_person';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CarePerson';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CarePerson';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 81;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 81;

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_person.pid';

    /**
     * the column name for the selian_pid field
     */
    const COL_SELIAN_PID = 'care_person.selian_pid';

    /**
     * the column name for the date_reg field
     */
    const COL_DATE_REG = 'care_person.date_reg';

    /**
     * the column name for the name_first field
     */
    const COL_NAME_FIRST = 'care_person.name_first';

    /**
     * the column name for the name_2 field
     */
    const COL_NAME_2 = 'care_person.name_2';

    /**
     * the column name for the name_3 field
     */
    const COL_NAME_3 = 'care_person.name_3';

    /**
     * the column name for the name_middle field
     */
    const COL_NAME_MIDDLE = 'care_person.name_middle';

    /**
     * the column name for the name_last field
     */
    const COL_NAME_LAST = 'care_person.name_last';

    /**
     * the column name for the name_maiden field
     */
    const COL_NAME_MAIDEN = 'care_person.name_maiden';

    /**
     * the column name for the name_others field
     */
    const COL_NAME_OTHERS = 'care_person.name_others';

    /**
     * the column name for the education field
     */
    const COL_EDUCATION = 'care_person.education';

    /**
     * the column name for the date_birth field
     */
    const COL_DATE_BIRTH = 'care_person.date_birth';

    /**
     * the column name for the blood_group field
     */
    const COL_BLOOD_GROUP = 'care_person.blood_group';

    /**
     * the column name for the rh field
     */
    const COL_RH = 'care_person.rh';

    /**
     * the column name for the addr_str field
     */
    const COL_ADDR_STR = 'care_person.addr_str';

    /**
     * the column name for the addr_str_nr field
     */
    const COL_ADDR_STR_NR = 'care_person.addr_str_nr';

    /**
     * the column name for the addr_zip field
     */
    const COL_ADDR_ZIP = 'care_person.addr_zip';

    /**
     * the column name for the addr_citytown_nr field
     */
    const COL_ADDR_CITYTOWN_NR = 'care_person.addr_citytown_nr';

    /**
     * the column name for the addr_is_valid field
     */
    const COL_ADDR_IS_VALID = 'care_person.addr_is_valid';

    /**
     * the column name for the citizenship field
     */
    const COL_CITIZENSHIP = 'care_person.citizenship';

    /**
     * the column name for the phone_1_code field
     */
    const COL_PHONE_1_CODE = 'care_person.phone_1_code';

    /**
     * the column name for the phone_1_nr field
     */
    const COL_PHONE_1_NR = 'care_person.phone_1_nr';

    /**
     * the column name for the phone_2_code field
     */
    const COL_PHONE_2_CODE = 'care_person.phone_2_code';

    /**
     * the column name for the phone_2_nr field
     */
    const COL_PHONE_2_NR = 'care_person.phone_2_nr';

    /**
     * the column name for the cellphone_1_nr field
     */
    const COL_CELLPHONE_1_NR = 'care_person.cellphone_1_nr';

    /**
     * the column name for the cellphone_2_nr field
     */
    const COL_CELLPHONE_2_NR = 'care_person.cellphone_2_nr';

    /**
     * the column name for the fax field
     */
    const COL_FAX = 'care_person.fax';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'care_person.email';

    /**
     * the column name for the civil_status field
     */
    const COL_CIVIL_STATUS = 'care_person.civil_status';

    /**
     * the column name for the sex field
     */
    const COL_SEX = 'care_person.sex';

    /**
     * the column name for the title field
     */
    const COL_TITLE = 'care_person.title';

    /**
     * the column name for the photo field
     */
    const COL_PHOTO = 'care_person.photo';

    /**
     * the column name for the photo_filename field
     */
    const COL_PHOTO_FILENAME = 'care_person.photo_filename';

    /**
     * the column name for the ethnic_orig field
     */
    const COL_ETHNIC_ORIG = 'care_person.ethnic_orig';

    /**
     * the column name for the org_id field
     */
    const COL_ORG_ID = 'care_person.org_id';

    /**
     * the column name for the sss_nr field
     */
    const COL_SSS_NR = 'care_person.sss_nr';

    /**
     * the column name for the nat_id_nr field
     */
    const COL_NAT_ID_NR = 'care_person.nat_id_nr';

    /**
     * the column name for the religion field
     */
    const COL_RELIGION = 'care_person.religion';

    /**
     * the column name for the is_first_reg field
     */
    const COL_IS_FIRST_REG = 'care_person.is_first_reg';

    /**
     * the column name for the region field
     */
    const COL_REGION = 'care_person.region';

    /**
     * the column name for the district field
     */
    const COL_DISTRICT = 'care_person.district';

    /**
     * the column name for the ward field
     */
    const COL_WARD = 'care_person.ward';

    /**
     * the column name for the mother_pid field
     */
    const COL_MOTHER_PID = 'care_person.mother_pid';

    /**
     * the column name for the father_pid field
     */
    const COL_FATHER_PID = 'care_person.father_pid';

    /**
     * the column name for the contact_person field
     */
    const COL_CONTACT_PERSON = 'care_person.contact_person';

    /**
     * the column name for the contact_pid field
     */
    const COL_CONTACT_PID = 'care_person.contact_pid';

    /**
     * the column name for the contact_relation field
     */
    const COL_CONTACT_RELATION = 'care_person.contact_relation';

    /**
     * the column name for the death_date field
     */
    const COL_DEATH_DATE = 'care_person.death_date';

    /**
     * the column name for the death_encounter_nr field
     */
    const COL_DEATH_ENCOUNTER_NR = 'care_person.death_encounter_nr';

    /**
     * the column name for the death_cause field
     */
    const COL_DEATH_CAUSE = 'care_person.death_cause';

    /**
     * the column name for the death_cause_code field
     */
    const COL_DEATH_CAUSE_CODE = 'care_person.death_cause_code';

    /**
     * the column name for the date_update field
     */
    const COL_DATE_UPDATE = 'care_person.date_update';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_person.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_person.history';

    /**
     * the column name for the allergy field
     */
    const COL_ALLERGY = 'care_person.allergy';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_person.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_person.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_person.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_person.create_time';

    /**
     * the column name for the addr_citytown_name field
     */
    const COL_ADDR_CITYTOWN_NAME = 'care_person.addr_citytown_name';

    /**
     * the column name for the is_transmit2ERP field
     */
    const COL_IS_TRANSMIT2ERP = 'care_person.is_transmit2ERP';

    /**
     * the column name for the insurance_ID field
     */
    const COL_INSURANCE_ID = 'care_person.insurance_ID';

    /**
     * the column name for the insurance_head_pid field
     */
    const COL_INSURANCE_HEAD_PID = 'care_person.insurance_head_pid';

    /**
     * the column name for the membership_nr field
     */
    const COL_MEMBERSHIP_NR = 'care_person.membership_nr';

    /**
     * the column name for the form_nr field
     */
    const COL_FORM_NR = 'care_person.form_nr';

    /**
     * the column name for the nhif_nr field
     */
    const COL_NHIF_NR = 'care_person.nhif_nr';

    /**
     * the column name for the insurance_silver field
     */
    const COL_INSURANCE_SILVER = 'care_person.insurance_silver';

    /**
     * the column name for the insurance_gold field
     */
    const COL_INSURANCE_GOLD = 'care_person.insurance_gold';

    /**
     * the column name for the insurance_friedkin field
     */
    const COL_INSURANCE_FRIEDKIN = 'care_person.insurance_friedkin';

    /**
     * the column name for the insurance_selian_stuff field
     */
    const COL_INSURANCE_SELIAN_STUFF = 'care_person.insurance_selian_stuff';

    /**
     * the column name for the insurance_premium_for_adults field
     */
    const COL_INSURANCE_PREMIUM_FOR_ADULTS = 'care_person.insurance_premium_for_adults';

    /**
     * the column name for the insurance_premium_for_childs field
     */
    const COL_INSURANCE_PREMIUM_FOR_CHILDS = 'care_person.insurance_premium_for_childs';

    /**
     * the column name for the insurance_premium_for_senior field
     */
    const COL_INSURANCE_PREMIUM_FOR_SENIOR = 'care_person.insurance_premium_for_senior';

    /**
     * the column name for the insurance_copayment_OPD field
     */
    const COL_INSURANCE_COPAYMENT_OPD = 'care_person.insurance_copayment_OPD';

    /**
     * the column name for the insurance_copayment_IPD field
     */
    const COL_INSURANCE_COPAYMENT_IPD = 'care_person.insurance_copayment_IPD';

    /**
     * the column name for the insurance_ceiling_by_individual field
     */
    const COL_INSURANCE_CEILING_BY_INDIVIDUAL = 'care_person.insurance_ceiling_by_individual';

    /**
     * the column name for the insurance_ceiling_by_family field
     */
    const COL_INSURANCE_CEILING_BY_FAMILY = 'care_person.insurance_ceiling_by_family';

    /**
     * the column name for the insurance_ceiling_amount field
     */
    const COL_INSURANCE_CEILING_AMOUNT = 'care_person.insurance_ceiling_amount';

    /**
     * the column name for the insurance_ceiling_for_families field
     */
    const COL_INSURANCE_CEILING_FOR_FAMILIES = 'care_person.insurance_ceiling_for_families';

    /**
     * the column name for the national_id field
     */
    const COL_NATIONAL_ID = 'care_person.national_id';

    /**
     * the column name for the employee_Id field
     */
    const COL_EMPLOYEE_ID = 'care_person.employee_Id';

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
        self::TYPE_PHPNAME       => array('Pid', 'SelianPid', 'DateReg', 'NameFirst', 'Name2', 'Name3', 'NameMiddle', 'NameLast', 'NameMaiden', 'NameOthers', 'Education', 'DateBirth', 'BloodGroup', 'Rh', 'AddrStr', 'AddrStrNr', 'AddrZip', 'AddrCitytownNr', 'AddrIsValid', 'Citizenship', 'Phone1Code', 'Phone1Nr', 'Phone2Code', 'Phone2Nr', 'Cellphone1Nr', 'Cellphone2Nr', 'Fax', 'Email', 'CivilStatus', 'Sex', 'Title', 'Photo', 'PhotoFilename', 'EthnicOrig', 'OrgId', 'SssNr', 'NatIdNr', 'Religion', 'IsFirstReg', 'Region', 'District', 'Ward', 'MotherPid', 'FatherPid', 'ContactPerson', 'ContactPid', 'ContactRelation', 'DeathDate', 'DeathEncounterNr', 'DeathCause', 'DeathCauseCode', 'DateUpdate', 'Status', 'History', 'Allergy', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'AddrCitytownName', 'IsTransmit2erp', 'InsuranceId', 'InsuranceHeadPid', 'MembershipNr', 'FormNr', 'NhifNr', 'InsuranceSilver', 'InsuranceGold', 'InsuranceFriedkin', 'InsuranceSelianStuff', 'InsurancePremiumForAdults', 'InsurancePremiumForChilds', 'InsurancePremiumForSenior', 'InsuranceCopaymentOpd', 'InsuranceCopaymentIpd', 'InsuranceCeilingByIndividual', 'InsuranceCeilingByFamily', 'InsuranceCeilingAmount', 'InsuranceCeilingForFamilies', 'NationalId', 'EmployeeId', ),
        self::TYPE_CAMELNAME     => array('pid', 'selianPid', 'dateReg', 'nameFirst', 'name2', 'name3', 'nameMiddle', 'nameLast', 'nameMaiden', 'nameOthers', 'education', 'dateBirth', 'bloodGroup', 'rh', 'addrStr', 'addrStrNr', 'addrZip', 'addrCitytownNr', 'addrIsValid', 'citizenship', 'phone1Code', 'phone1Nr', 'phone2Code', 'phone2Nr', 'cellphone1Nr', 'cellphone2Nr', 'fax', 'email', 'civilStatus', 'sex', 'title', 'photo', 'photoFilename', 'ethnicOrig', 'orgId', 'sssNr', 'natIdNr', 'religion', 'isFirstReg', 'region', 'district', 'ward', 'motherPid', 'fatherPid', 'contactPerson', 'contactPid', 'contactRelation', 'deathDate', 'deathEncounterNr', 'deathCause', 'deathCauseCode', 'dateUpdate', 'status', 'history', 'allergy', 'modifyId', 'modifyTime', 'createId', 'createTime', 'addrCitytownName', 'isTransmit2erp', 'insuranceId', 'insuranceHeadPid', 'membershipNr', 'formNr', 'nhifNr', 'insuranceSilver', 'insuranceGold', 'insuranceFriedkin', 'insuranceSelianStuff', 'insurancePremiumForAdults', 'insurancePremiumForChilds', 'insurancePremiumForSenior', 'insuranceCopaymentOpd', 'insuranceCopaymentIpd', 'insuranceCeilingByIndividual', 'insuranceCeilingByFamily', 'insuranceCeilingAmount', 'insuranceCeilingForFamilies', 'nationalId', 'employeeId', ),
        self::TYPE_COLNAME       => array(CarePersonTableMap::COL_PID, CarePersonTableMap::COL_SELIAN_PID, CarePersonTableMap::COL_DATE_REG, CarePersonTableMap::COL_NAME_FIRST, CarePersonTableMap::COL_NAME_2, CarePersonTableMap::COL_NAME_3, CarePersonTableMap::COL_NAME_MIDDLE, CarePersonTableMap::COL_NAME_LAST, CarePersonTableMap::COL_NAME_MAIDEN, CarePersonTableMap::COL_NAME_OTHERS, CarePersonTableMap::COL_EDUCATION, CarePersonTableMap::COL_DATE_BIRTH, CarePersonTableMap::COL_BLOOD_GROUP, CarePersonTableMap::COL_RH, CarePersonTableMap::COL_ADDR_STR, CarePersonTableMap::COL_ADDR_STR_NR, CarePersonTableMap::COL_ADDR_ZIP, CarePersonTableMap::COL_ADDR_CITYTOWN_NR, CarePersonTableMap::COL_ADDR_IS_VALID, CarePersonTableMap::COL_CITIZENSHIP, CarePersonTableMap::COL_PHONE_1_CODE, CarePersonTableMap::COL_PHONE_1_NR, CarePersonTableMap::COL_PHONE_2_CODE, CarePersonTableMap::COL_PHONE_2_NR, CarePersonTableMap::COL_CELLPHONE_1_NR, CarePersonTableMap::COL_CELLPHONE_2_NR, CarePersonTableMap::COL_FAX, CarePersonTableMap::COL_EMAIL, CarePersonTableMap::COL_CIVIL_STATUS, CarePersonTableMap::COL_SEX, CarePersonTableMap::COL_TITLE, CarePersonTableMap::COL_PHOTO, CarePersonTableMap::COL_PHOTO_FILENAME, CarePersonTableMap::COL_ETHNIC_ORIG, CarePersonTableMap::COL_ORG_ID, CarePersonTableMap::COL_SSS_NR, CarePersonTableMap::COL_NAT_ID_NR, CarePersonTableMap::COL_RELIGION, CarePersonTableMap::COL_IS_FIRST_REG, CarePersonTableMap::COL_REGION, CarePersonTableMap::COL_DISTRICT, CarePersonTableMap::COL_WARD, CarePersonTableMap::COL_MOTHER_PID, CarePersonTableMap::COL_FATHER_PID, CarePersonTableMap::COL_CONTACT_PERSON, CarePersonTableMap::COL_CONTACT_PID, CarePersonTableMap::COL_CONTACT_RELATION, CarePersonTableMap::COL_DEATH_DATE, CarePersonTableMap::COL_DEATH_ENCOUNTER_NR, CarePersonTableMap::COL_DEATH_CAUSE, CarePersonTableMap::COL_DEATH_CAUSE_CODE, CarePersonTableMap::COL_DATE_UPDATE, CarePersonTableMap::COL_STATUS, CarePersonTableMap::COL_HISTORY, CarePersonTableMap::COL_ALLERGY, CarePersonTableMap::COL_MODIFY_ID, CarePersonTableMap::COL_MODIFY_TIME, CarePersonTableMap::COL_CREATE_ID, CarePersonTableMap::COL_CREATE_TIME, CarePersonTableMap::COL_ADDR_CITYTOWN_NAME, CarePersonTableMap::COL_IS_TRANSMIT2ERP, CarePersonTableMap::COL_INSURANCE_ID, CarePersonTableMap::COL_INSURANCE_HEAD_PID, CarePersonTableMap::COL_MEMBERSHIP_NR, CarePersonTableMap::COL_FORM_NR, CarePersonTableMap::COL_NHIF_NR, CarePersonTableMap::COL_INSURANCE_SILVER, CarePersonTableMap::COL_INSURANCE_GOLD, CarePersonTableMap::COL_INSURANCE_FRIEDKIN, CarePersonTableMap::COL_INSURANCE_SELIAN_STUFF, CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_ADULTS, CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_CHILDS, CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_SENIOR, CarePersonTableMap::COL_INSURANCE_COPAYMENT_OPD, CarePersonTableMap::COL_INSURANCE_COPAYMENT_IPD, CarePersonTableMap::COL_INSURANCE_CEILING_BY_INDIVIDUAL, CarePersonTableMap::COL_INSURANCE_CEILING_BY_FAMILY, CarePersonTableMap::COL_INSURANCE_CEILING_AMOUNT, CarePersonTableMap::COL_INSURANCE_CEILING_FOR_FAMILIES, CarePersonTableMap::COL_NATIONAL_ID, CarePersonTableMap::COL_EMPLOYEE_ID, ),
        self::TYPE_FIELDNAME     => array('pid', 'selian_pid', 'date_reg', 'name_first', 'name_2', 'name_3', 'name_middle', 'name_last', 'name_maiden', 'name_others', 'education', 'date_birth', 'blood_group', 'rh', 'addr_str', 'addr_str_nr', 'addr_zip', 'addr_citytown_nr', 'addr_is_valid', 'citizenship', 'phone_1_code', 'phone_1_nr', 'phone_2_code', 'phone_2_nr', 'cellphone_1_nr', 'cellphone_2_nr', 'fax', 'email', 'civil_status', 'sex', 'title', 'photo', 'photo_filename', 'ethnic_orig', 'org_id', 'sss_nr', 'nat_id_nr', 'religion', 'is_first_reg', 'region', 'district', 'ward', 'mother_pid', 'father_pid', 'contact_person', 'contact_pid', 'contact_relation', 'death_date', 'death_encounter_nr', 'death_cause', 'death_cause_code', 'date_update', 'status', 'history', 'allergy', 'modify_id', 'modify_time', 'create_id', 'create_time', 'addr_citytown_name', 'is_transmit2ERP', 'insurance_ID', 'insurance_head_pid', 'membership_nr', 'form_nr', 'nhif_nr', 'insurance_silver', 'insurance_gold', 'insurance_friedkin', 'insurance_selian_stuff', 'insurance_premium_for_adults', 'insurance_premium_for_childs', 'insurance_premium_for_senior', 'insurance_copayment_OPD', 'insurance_copayment_IPD', 'insurance_ceiling_by_individual', 'insurance_ceiling_by_family', 'insurance_ceiling_amount', 'insurance_ceiling_for_families', 'national_id', 'employee_Id', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Pid' => 0, 'SelianPid' => 1, 'DateReg' => 2, 'NameFirst' => 3, 'Name2' => 4, 'Name3' => 5, 'NameMiddle' => 6, 'NameLast' => 7, 'NameMaiden' => 8, 'NameOthers' => 9, 'Education' => 10, 'DateBirth' => 11, 'BloodGroup' => 12, 'Rh' => 13, 'AddrStr' => 14, 'AddrStrNr' => 15, 'AddrZip' => 16, 'AddrCitytownNr' => 17, 'AddrIsValid' => 18, 'Citizenship' => 19, 'Phone1Code' => 20, 'Phone1Nr' => 21, 'Phone2Code' => 22, 'Phone2Nr' => 23, 'Cellphone1Nr' => 24, 'Cellphone2Nr' => 25, 'Fax' => 26, 'Email' => 27, 'CivilStatus' => 28, 'Sex' => 29, 'Title' => 30, 'Photo' => 31, 'PhotoFilename' => 32, 'EthnicOrig' => 33, 'OrgId' => 34, 'SssNr' => 35, 'NatIdNr' => 36, 'Religion' => 37, 'IsFirstReg' => 38, 'Region' => 39, 'District' => 40, 'Ward' => 41, 'MotherPid' => 42, 'FatherPid' => 43, 'ContactPerson' => 44, 'ContactPid' => 45, 'ContactRelation' => 46, 'DeathDate' => 47, 'DeathEncounterNr' => 48, 'DeathCause' => 49, 'DeathCauseCode' => 50, 'DateUpdate' => 51, 'Status' => 52, 'History' => 53, 'Allergy' => 54, 'ModifyId' => 55, 'ModifyTime' => 56, 'CreateId' => 57, 'CreateTime' => 58, 'AddrCitytownName' => 59, 'IsTransmit2erp' => 60, 'InsuranceId' => 61, 'InsuranceHeadPid' => 62, 'MembershipNr' => 63, 'FormNr' => 64, 'NhifNr' => 65, 'InsuranceSilver' => 66, 'InsuranceGold' => 67, 'InsuranceFriedkin' => 68, 'InsuranceSelianStuff' => 69, 'InsurancePremiumForAdults' => 70, 'InsurancePremiumForChilds' => 71, 'InsurancePremiumForSenior' => 72, 'InsuranceCopaymentOpd' => 73, 'InsuranceCopaymentIpd' => 74, 'InsuranceCeilingByIndividual' => 75, 'InsuranceCeilingByFamily' => 76, 'InsuranceCeilingAmount' => 77, 'InsuranceCeilingForFamilies' => 78, 'NationalId' => 79, 'EmployeeId' => 80, ),
        self::TYPE_CAMELNAME     => array('pid' => 0, 'selianPid' => 1, 'dateReg' => 2, 'nameFirst' => 3, 'name2' => 4, 'name3' => 5, 'nameMiddle' => 6, 'nameLast' => 7, 'nameMaiden' => 8, 'nameOthers' => 9, 'education' => 10, 'dateBirth' => 11, 'bloodGroup' => 12, 'rh' => 13, 'addrStr' => 14, 'addrStrNr' => 15, 'addrZip' => 16, 'addrCitytownNr' => 17, 'addrIsValid' => 18, 'citizenship' => 19, 'phone1Code' => 20, 'phone1Nr' => 21, 'phone2Code' => 22, 'phone2Nr' => 23, 'cellphone1Nr' => 24, 'cellphone2Nr' => 25, 'fax' => 26, 'email' => 27, 'civilStatus' => 28, 'sex' => 29, 'title' => 30, 'photo' => 31, 'photoFilename' => 32, 'ethnicOrig' => 33, 'orgId' => 34, 'sssNr' => 35, 'natIdNr' => 36, 'religion' => 37, 'isFirstReg' => 38, 'region' => 39, 'district' => 40, 'ward' => 41, 'motherPid' => 42, 'fatherPid' => 43, 'contactPerson' => 44, 'contactPid' => 45, 'contactRelation' => 46, 'deathDate' => 47, 'deathEncounterNr' => 48, 'deathCause' => 49, 'deathCauseCode' => 50, 'dateUpdate' => 51, 'status' => 52, 'history' => 53, 'allergy' => 54, 'modifyId' => 55, 'modifyTime' => 56, 'createId' => 57, 'createTime' => 58, 'addrCitytownName' => 59, 'isTransmit2erp' => 60, 'insuranceId' => 61, 'insuranceHeadPid' => 62, 'membershipNr' => 63, 'formNr' => 64, 'nhifNr' => 65, 'insuranceSilver' => 66, 'insuranceGold' => 67, 'insuranceFriedkin' => 68, 'insuranceSelianStuff' => 69, 'insurancePremiumForAdults' => 70, 'insurancePremiumForChilds' => 71, 'insurancePremiumForSenior' => 72, 'insuranceCopaymentOpd' => 73, 'insuranceCopaymentIpd' => 74, 'insuranceCeilingByIndividual' => 75, 'insuranceCeilingByFamily' => 76, 'insuranceCeilingAmount' => 77, 'insuranceCeilingForFamilies' => 78, 'nationalId' => 79, 'employeeId' => 80, ),
        self::TYPE_COLNAME       => array(CarePersonTableMap::COL_PID => 0, CarePersonTableMap::COL_SELIAN_PID => 1, CarePersonTableMap::COL_DATE_REG => 2, CarePersonTableMap::COL_NAME_FIRST => 3, CarePersonTableMap::COL_NAME_2 => 4, CarePersonTableMap::COL_NAME_3 => 5, CarePersonTableMap::COL_NAME_MIDDLE => 6, CarePersonTableMap::COL_NAME_LAST => 7, CarePersonTableMap::COL_NAME_MAIDEN => 8, CarePersonTableMap::COL_NAME_OTHERS => 9, CarePersonTableMap::COL_EDUCATION => 10, CarePersonTableMap::COL_DATE_BIRTH => 11, CarePersonTableMap::COL_BLOOD_GROUP => 12, CarePersonTableMap::COL_RH => 13, CarePersonTableMap::COL_ADDR_STR => 14, CarePersonTableMap::COL_ADDR_STR_NR => 15, CarePersonTableMap::COL_ADDR_ZIP => 16, CarePersonTableMap::COL_ADDR_CITYTOWN_NR => 17, CarePersonTableMap::COL_ADDR_IS_VALID => 18, CarePersonTableMap::COL_CITIZENSHIP => 19, CarePersonTableMap::COL_PHONE_1_CODE => 20, CarePersonTableMap::COL_PHONE_1_NR => 21, CarePersonTableMap::COL_PHONE_2_CODE => 22, CarePersonTableMap::COL_PHONE_2_NR => 23, CarePersonTableMap::COL_CELLPHONE_1_NR => 24, CarePersonTableMap::COL_CELLPHONE_2_NR => 25, CarePersonTableMap::COL_FAX => 26, CarePersonTableMap::COL_EMAIL => 27, CarePersonTableMap::COL_CIVIL_STATUS => 28, CarePersonTableMap::COL_SEX => 29, CarePersonTableMap::COL_TITLE => 30, CarePersonTableMap::COL_PHOTO => 31, CarePersonTableMap::COL_PHOTO_FILENAME => 32, CarePersonTableMap::COL_ETHNIC_ORIG => 33, CarePersonTableMap::COL_ORG_ID => 34, CarePersonTableMap::COL_SSS_NR => 35, CarePersonTableMap::COL_NAT_ID_NR => 36, CarePersonTableMap::COL_RELIGION => 37, CarePersonTableMap::COL_IS_FIRST_REG => 38, CarePersonTableMap::COL_REGION => 39, CarePersonTableMap::COL_DISTRICT => 40, CarePersonTableMap::COL_WARD => 41, CarePersonTableMap::COL_MOTHER_PID => 42, CarePersonTableMap::COL_FATHER_PID => 43, CarePersonTableMap::COL_CONTACT_PERSON => 44, CarePersonTableMap::COL_CONTACT_PID => 45, CarePersonTableMap::COL_CONTACT_RELATION => 46, CarePersonTableMap::COL_DEATH_DATE => 47, CarePersonTableMap::COL_DEATH_ENCOUNTER_NR => 48, CarePersonTableMap::COL_DEATH_CAUSE => 49, CarePersonTableMap::COL_DEATH_CAUSE_CODE => 50, CarePersonTableMap::COL_DATE_UPDATE => 51, CarePersonTableMap::COL_STATUS => 52, CarePersonTableMap::COL_HISTORY => 53, CarePersonTableMap::COL_ALLERGY => 54, CarePersonTableMap::COL_MODIFY_ID => 55, CarePersonTableMap::COL_MODIFY_TIME => 56, CarePersonTableMap::COL_CREATE_ID => 57, CarePersonTableMap::COL_CREATE_TIME => 58, CarePersonTableMap::COL_ADDR_CITYTOWN_NAME => 59, CarePersonTableMap::COL_IS_TRANSMIT2ERP => 60, CarePersonTableMap::COL_INSURANCE_ID => 61, CarePersonTableMap::COL_INSURANCE_HEAD_PID => 62, CarePersonTableMap::COL_MEMBERSHIP_NR => 63, CarePersonTableMap::COL_FORM_NR => 64, CarePersonTableMap::COL_NHIF_NR => 65, CarePersonTableMap::COL_INSURANCE_SILVER => 66, CarePersonTableMap::COL_INSURANCE_GOLD => 67, CarePersonTableMap::COL_INSURANCE_FRIEDKIN => 68, CarePersonTableMap::COL_INSURANCE_SELIAN_STUFF => 69, CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_ADULTS => 70, CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_CHILDS => 71, CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_SENIOR => 72, CarePersonTableMap::COL_INSURANCE_COPAYMENT_OPD => 73, CarePersonTableMap::COL_INSURANCE_COPAYMENT_IPD => 74, CarePersonTableMap::COL_INSURANCE_CEILING_BY_INDIVIDUAL => 75, CarePersonTableMap::COL_INSURANCE_CEILING_BY_FAMILY => 76, CarePersonTableMap::COL_INSURANCE_CEILING_AMOUNT => 77, CarePersonTableMap::COL_INSURANCE_CEILING_FOR_FAMILIES => 78, CarePersonTableMap::COL_NATIONAL_ID => 79, CarePersonTableMap::COL_EMPLOYEE_ID => 80, ),
        self::TYPE_FIELDNAME     => array('pid' => 0, 'selian_pid' => 1, 'date_reg' => 2, 'name_first' => 3, 'name_2' => 4, 'name_3' => 5, 'name_middle' => 6, 'name_last' => 7, 'name_maiden' => 8, 'name_others' => 9, 'education' => 10, 'date_birth' => 11, 'blood_group' => 12, 'rh' => 13, 'addr_str' => 14, 'addr_str_nr' => 15, 'addr_zip' => 16, 'addr_citytown_nr' => 17, 'addr_is_valid' => 18, 'citizenship' => 19, 'phone_1_code' => 20, 'phone_1_nr' => 21, 'phone_2_code' => 22, 'phone_2_nr' => 23, 'cellphone_1_nr' => 24, 'cellphone_2_nr' => 25, 'fax' => 26, 'email' => 27, 'civil_status' => 28, 'sex' => 29, 'title' => 30, 'photo' => 31, 'photo_filename' => 32, 'ethnic_orig' => 33, 'org_id' => 34, 'sss_nr' => 35, 'nat_id_nr' => 36, 'religion' => 37, 'is_first_reg' => 38, 'region' => 39, 'district' => 40, 'ward' => 41, 'mother_pid' => 42, 'father_pid' => 43, 'contact_person' => 44, 'contact_pid' => 45, 'contact_relation' => 46, 'death_date' => 47, 'death_encounter_nr' => 48, 'death_cause' => 49, 'death_cause_code' => 50, 'date_update' => 51, 'status' => 52, 'history' => 53, 'allergy' => 54, 'modify_id' => 55, 'modify_time' => 56, 'create_id' => 57, 'create_time' => 58, 'addr_citytown_name' => 59, 'is_transmit2ERP' => 60, 'insurance_ID' => 61, 'insurance_head_pid' => 62, 'membership_nr' => 63, 'form_nr' => 64, 'nhif_nr' => 65, 'insurance_silver' => 66, 'insurance_gold' => 67, 'insurance_friedkin' => 68, 'insurance_selian_stuff' => 69, 'insurance_premium_for_adults' => 70, 'insurance_premium_for_childs' => 71, 'insurance_premium_for_senior' => 72, 'insurance_copayment_OPD' => 73, 'insurance_copayment_IPD' => 74, 'insurance_ceiling_by_individual' => 75, 'insurance_ceiling_by_family' => 76, 'insurance_ceiling_amount' => 77, 'insurance_ceiling_for_families' => 78, 'national_id' => 79, 'employee_Id' => 80, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, )
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
        $this->setName('care_person');
        $this->setPhpName('CarePerson');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CarePerson');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('pid', 'Pid', 'INTEGER', true, null, null);
        $this->addColumn('selian_pid', 'SelianPid', 'BIGINT', true, null, 0);
        $this->addColumn('date_reg', 'DateReg', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('name_first', 'NameFirst', 'VARCHAR', true, 60, '');
        $this->addColumn('name_2', 'Name2', 'VARCHAR', false, 60, null);
        $this->addColumn('name_3', 'Name3', 'VARCHAR', false, 60, null);
        $this->addColumn('name_middle', 'NameMiddle', 'VARCHAR', false, 60, null);
        $this->addColumn('name_last', 'NameLast', 'VARCHAR', true, 60, '');
        $this->addColumn('name_maiden', 'NameMaiden', 'VARCHAR', false, 60, null);
        $this->addColumn('name_others', 'NameOthers', 'LONGVARCHAR', true, null, null);
        $this->addColumn('education', 'Education', 'VARCHAR', true, 50, null);
        $this->addColumn('date_birth', 'DateBirth', 'DATE', true, null, '0000-00-00');
        $this->addColumn('blood_group', 'BloodGroup', 'CHAR', true, 2, '');
        $this->addColumn('rh', 'Rh', 'VARCHAR', true, 10, '');
        $this->addColumn('addr_str', 'AddrStr', 'VARCHAR', true, 60, '');
        $this->addColumn('addr_str_nr', 'AddrStrNr', 'VARCHAR', true, 10, '');
        $this->addColumn('addr_zip', 'AddrZip', 'VARCHAR', true, 15, '');
        $this->addColumn('addr_citytown_nr', 'AddrCitytownNr', 'SMALLINT', true, 8, 0);
        $this->addColumn('addr_is_valid', 'AddrIsValid', 'BOOLEAN', true, 1, false);
        $this->addColumn('citizenship', 'Citizenship', 'VARCHAR', false, 35, null);
        $this->addColumn('phone_1_code', 'Phone1Code', 'VARCHAR', false, 15, '0');
        $this->addColumn('phone_1_nr', 'Phone1Nr', 'VARCHAR', false, 35, null);
        $this->addColumn('phone_2_code', 'Phone2Code', 'VARCHAR', false, 15, '0');
        $this->addColumn('phone_2_nr', 'Phone2Nr', 'VARCHAR', false, 35, null);
        $this->addColumn('cellphone_1_nr', 'Cellphone1Nr', 'VARCHAR', false, 35, null);
        $this->addColumn('cellphone_2_nr', 'Cellphone2Nr', 'VARCHAR', false, 35, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 35, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 60, null);
        $this->addColumn('civil_status', 'CivilStatus', 'VARCHAR', true, 35, '');
        $this->addColumn('sex', 'Sex', 'CHAR', true, null, '');
        $this->addColumn('title', 'Title', 'VARCHAR', false, 25, null);
        $this->addColumn('photo', 'Photo', 'BLOB', false, null, null);
        $this->addColumn('photo_filename', 'PhotoFilename', 'VARCHAR', true, 60, '');
        $this->addColumn('ethnic_orig', 'EthnicOrig', 'SMALLINT', false, 8, null);
        $this->addColumn('org_id', 'OrgId', 'VARCHAR', false, 60, null);
        $this->addColumn('sss_nr', 'SssNr', 'VARCHAR', false, 60, null);
        $this->addColumn('nat_id_nr', 'NatIdNr', 'VARCHAR', false, 60, null);
        $this->addColumn('religion', 'Religion', 'VARCHAR', false, 125, null);
        $this->addColumn('is_first_reg', 'IsFirstReg', 'INTEGER', true, 1, null);
        $this->addColumn('region', 'Region', 'VARCHAR', true, 50, null);
        $this->addColumn('district', 'District', 'VARCHAR', true, 50, null);
        $this->addColumn('ward', 'Ward', 'VARCHAR', true, 50, null);
        $this->addColumn('mother_pid', 'MotherPid', 'INTEGER', true, null, 0);
        $this->addColumn('father_pid', 'FatherPid', 'INTEGER', true, null, 0);
        $this->addColumn('contact_person', 'ContactPerson', 'VARCHAR', false, 255, null);
        $this->addColumn('contact_pid', 'ContactPid', 'INTEGER', true, null, 0);
        $this->addColumn('contact_relation', 'ContactRelation', 'VARCHAR', false, 25, '0');
        $this->addColumn('death_date', 'DeathDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('death_encounter_nr', 'DeathEncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('death_cause', 'DeathCause', 'VARCHAR', false, 255, null);
        $this->addColumn('death_cause_code', 'DeathCauseCode', 'VARCHAR', false, 15, null);
        $this->addColumn('date_update', 'DateUpdate', 'TIMESTAMP', false, null, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 20, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('allergy', 'Allergy', 'VARCHAR', true, 50, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('addr_citytown_name', 'AddrCitytownName', 'VARCHAR', true, 35, '');
        $this->addColumn('is_transmit2ERP', 'IsTransmit2erp', 'TINYINT', true, null, null);
        $this->addColumn('insurance_ID', 'InsuranceId', 'SMALLINT', true, 5, null);
        $this->addColumn('insurance_head_pid', 'InsuranceHeadPid', 'BIGINT', true, null, 0);
        $this->addColumn('membership_nr', 'MembershipNr', 'VARCHAR', true, 20, null);
        $this->addColumn('form_nr', 'FormNr', 'VARCHAR', true, 20, null);
        $this->addColumn('nhif_nr', 'NhifNr', 'VARCHAR', true, 20, null);
        $this->addColumn('insurance_silver', 'InsuranceSilver', 'TINYINT', true, null, 0);
        $this->addColumn('insurance_gold', 'InsuranceGold', 'TINYINT', true, null, 0);
        $this->addColumn('insurance_friedkin', 'InsuranceFriedkin', 'TINYINT', true, null, 0);
        $this->addColumn('insurance_selian_stuff', 'InsuranceSelianStuff', 'TINYINT', true, null, 0);
        $this->addColumn('insurance_premium_for_adults', 'InsurancePremiumForAdults', 'INTEGER', true, null, 0);
        $this->addColumn('insurance_premium_for_childs', 'InsurancePremiumForChilds', 'INTEGER', true, null, 0);
        $this->addColumn('insurance_premium_for_senior', 'InsurancePremiumForSenior', 'INTEGER', true, null, 0);
        $this->addColumn('insurance_copayment_OPD', 'InsuranceCopaymentOpd', 'INTEGER', true, null, 0);
        $this->addColumn('insurance_copayment_IPD', 'InsuranceCopaymentIpd', 'INTEGER', true, null, 0);
        $this->addColumn('insurance_ceiling_by_individual', 'InsuranceCeilingByIndividual', 'TINYINT', true, null, 0);
        $this->addColumn('insurance_ceiling_by_family', 'InsuranceCeilingByFamily', 'TINYINT', true, null, 0);
        $this->addColumn('insurance_ceiling_amount', 'InsuranceCeilingAmount', 'INTEGER', true, null, 0);
        $this->addColumn('insurance_ceiling_for_families', 'InsuranceCeilingForFamilies', 'INTEGER', true, null, 0);
        $this->addColumn('national_id', 'NationalId', 'VARCHAR', false, 255, null);
        $this->addColumn('employee_Id', 'EmployeeId', 'VARCHAR', false, 255, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CarePersonTableMap::CLASS_DEFAULT : CarePersonTableMap::OM_CLASS;
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
     * @return array           (CarePerson object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CarePersonTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CarePersonTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CarePersonTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CarePersonTableMap::OM_CLASS;
            /** @var CarePerson $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CarePersonTableMap::addInstanceToPool($obj, $key);
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
            $key = CarePersonTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CarePersonTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CarePerson $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CarePersonTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CarePersonTableMap::COL_PID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_SELIAN_PID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_DATE_REG);
            $criteria->addSelectColumn(CarePersonTableMap::COL_NAME_FIRST);
            $criteria->addSelectColumn(CarePersonTableMap::COL_NAME_2);
            $criteria->addSelectColumn(CarePersonTableMap::COL_NAME_3);
            $criteria->addSelectColumn(CarePersonTableMap::COL_NAME_MIDDLE);
            $criteria->addSelectColumn(CarePersonTableMap::COL_NAME_LAST);
            $criteria->addSelectColumn(CarePersonTableMap::COL_NAME_MAIDEN);
            $criteria->addSelectColumn(CarePersonTableMap::COL_NAME_OTHERS);
            $criteria->addSelectColumn(CarePersonTableMap::COL_EDUCATION);
            $criteria->addSelectColumn(CarePersonTableMap::COL_DATE_BIRTH);
            $criteria->addSelectColumn(CarePersonTableMap::COL_BLOOD_GROUP);
            $criteria->addSelectColumn(CarePersonTableMap::COL_RH);
            $criteria->addSelectColumn(CarePersonTableMap::COL_ADDR_STR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_ADDR_STR_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_ADDR_ZIP);
            $criteria->addSelectColumn(CarePersonTableMap::COL_ADDR_CITYTOWN_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_ADDR_IS_VALID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_CITIZENSHIP);
            $criteria->addSelectColumn(CarePersonTableMap::COL_PHONE_1_CODE);
            $criteria->addSelectColumn(CarePersonTableMap::COL_PHONE_1_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_PHONE_2_CODE);
            $criteria->addSelectColumn(CarePersonTableMap::COL_PHONE_2_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_CELLPHONE_1_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_CELLPHONE_2_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_FAX);
            $criteria->addSelectColumn(CarePersonTableMap::COL_EMAIL);
            $criteria->addSelectColumn(CarePersonTableMap::COL_CIVIL_STATUS);
            $criteria->addSelectColumn(CarePersonTableMap::COL_SEX);
            $criteria->addSelectColumn(CarePersonTableMap::COL_TITLE);
            $criteria->addSelectColumn(CarePersonTableMap::COL_PHOTO);
            $criteria->addSelectColumn(CarePersonTableMap::COL_PHOTO_FILENAME);
            $criteria->addSelectColumn(CarePersonTableMap::COL_ETHNIC_ORIG);
            $criteria->addSelectColumn(CarePersonTableMap::COL_ORG_ID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_SSS_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_NAT_ID_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_RELIGION);
            $criteria->addSelectColumn(CarePersonTableMap::COL_IS_FIRST_REG);
            $criteria->addSelectColumn(CarePersonTableMap::COL_REGION);
            $criteria->addSelectColumn(CarePersonTableMap::COL_DISTRICT);
            $criteria->addSelectColumn(CarePersonTableMap::COL_WARD);
            $criteria->addSelectColumn(CarePersonTableMap::COL_MOTHER_PID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_FATHER_PID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_CONTACT_PERSON);
            $criteria->addSelectColumn(CarePersonTableMap::COL_CONTACT_PID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_CONTACT_RELATION);
            $criteria->addSelectColumn(CarePersonTableMap::COL_DEATH_DATE);
            $criteria->addSelectColumn(CarePersonTableMap::COL_DEATH_ENCOUNTER_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_DEATH_CAUSE);
            $criteria->addSelectColumn(CarePersonTableMap::COL_DEATH_CAUSE_CODE);
            $criteria->addSelectColumn(CarePersonTableMap::COL_DATE_UPDATE);
            $criteria->addSelectColumn(CarePersonTableMap::COL_STATUS);
            $criteria->addSelectColumn(CarePersonTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CarePersonTableMap::COL_ALLERGY);
            $criteria->addSelectColumn(CarePersonTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CarePersonTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CarePersonTableMap::COL_ADDR_CITYTOWN_NAME);
            $criteria->addSelectColumn(CarePersonTableMap::COL_IS_TRANSMIT2ERP);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_ID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_HEAD_PID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_MEMBERSHIP_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_FORM_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_NHIF_NR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_SILVER);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_GOLD);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_FRIEDKIN);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_SELIAN_STUFF);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_ADULTS);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_CHILDS);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_SENIOR);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_COPAYMENT_OPD);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_COPAYMENT_IPD);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_CEILING_BY_INDIVIDUAL);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_CEILING_BY_FAMILY);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_CEILING_AMOUNT);
            $criteria->addSelectColumn(CarePersonTableMap::COL_INSURANCE_CEILING_FOR_FAMILIES);
            $criteria->addSelectColumn(CarePersonTableMap::COL_NATIONAL_ID);
            $criteria->addSelectColumn(CarePersonTableMap::COL_EMPLOYEE_ID);
        } else {
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.selian_pid');
            $criteria->addSelectColumn($alias . '.date_reg');
            $criteria->addSelectColumn($alias . '.name_first');
            $criteria->addSelectColumn($alias . '.name_2');
            $criteria->addSelectColumn($alias . '.name_3');
            $criteria->addSelectColumn($alias . '.name_middle');
            $criteria->addSelectColumn($alias . '.name_last');
            $criteria->addSelectColumn($alias . '.name_maiden');
            $criteria->addSelectColumn($alias . '.name_others');
            $criteria->addSelectColumn($alias . '.education');
            $criteria->addSelectColumn($alias . '.date_birth');
            $criteria->addSelectColumn($alias . '.blood_group');
            $criteria->addSelectColumn($alias . '.rh');
            $criteria->addSelectColumn($alias . '.addr_str');
            $criteria->addSelectColumn($alias . '.addr_str_nr');
            $criteria->addSelectColumn($alias . '.addr_zip');
            $criteria->addSelectColumn($alias . '.addr_citytown_nr');
            $criteria->addSelectColumn($alias . '.addr_is_valid');
            $criteria->addSelectColumn($alias . '.citizenship');
            $criteria->addSelectColumn($alias . '.phone_1_code');
            $criteria->addSelectColumn($alias . '.phone_1_nr');
            $criteria->addSelectColumn($alias . '.phone_2_code');
            $criteria->addSelectColumn($alias . '.phone_2_nr');
            $criteria->addSelectColumn($alias . '.cellphone_1_nr');
            $criteria->addSelectColumn($alias . '.cellphone_2_nr');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.civil_status');
            $criteria->addSelectColumn($alias . '.sex');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.photo');
            $criteria->addSelectColumn($alias . '.photo_filename');
            $criteria->addSelectColumn($alias . '.ethnic_orig');
            $criteria->addSelectColumn($alias . '.org_id');
            $criteria->addSelectColumn($alias . '.sss_nr');
            $criteria->addSelectColumn($alias . '.nat_id_nr');
            $criteria->addSelectColumn($alias . '.religion');
            $criteria->addSelectColumn($alias . '.is_first_reg');
            $criteria->addSelectColumn($alias . '.region');
            $criteria->addSelectColumn($alias . '.district');
            $criteria->addSelectColumn($alias . '.ward');
            $criteria->addSelectColumn($alias . '.mother_pid');
            $criteria->addSelectColumn($alias . '.father_pid');
            $criteria->addSelectColumn($alias . '.contact_person');
            $criteria->addSelectColumn($alias . '.contact_pid');
            $criteria->addSelectColumn($alias . '.contact_relation');
            $criteria->addSelectColumn($alias . '.death_date');
            $criteria->addSelectColumn($alias . '.death_encounter_nr');
            $criteria->addSelectColumn($alias . '.death_cause');
            $criteria->addSelectColumn($alias . '.death_cause_code');
            $criteria->addSelectColumn($alias . '.date_update');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.allergy');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.addr_citytown_name');
            $criteria->addSelectColumn($alias . '.is_transmit2ERP');
            $criteria->addSelectColumn($alias . '.insurance_ID');
            $criteria->addSelectColumn($alias . '.insurance_head_pid');
            $criteria->addSelectColumn($alias . '.membership_nr');
            $criteria->addSelectColumn($alias . '.form_nr');
            $criteria->addSelectColumn($alias . '.nhif_nr');
            $criteria->addSelectColumn($alias . '.insurance_silver');
            $criteria->addSelectColumn($alias . '.insurance_gold');
            $criteria->addSelectColumn($alias . '.insurance_friedkin');
            $criteria->addSelectColumn($alias . '.insurance_selian_stuff');
            $criteria->addSelectColumn($alias . '.insurance_premium_for_adults');
            $criteria->addSelectColumn($alias . '.insurance_premium_for_childs');
            $criteria->addSelectColumn($alias . '.insurance_premium_for_senior');
            $criteria->addSelectColumn($alias . '.insurance_copayment_OPD');
            $criteria->addSelectColumn($alias . '.insurance_copayment_IPD');
            $criteria->addSelectColumn($alias . '.insurance_ceiling_by_individual');
            $criteria->addSelectColumn($alias . '.insurance_ceiling_by_family');
            $criteria->addSelectColumn($alias . '.insurance_ceiling_amount');
            $criteria->addSelectColumn($alias . '.insurance_ceiling_for_families');
            $criteria->addSelectColumn($alias . '.national_id');
            $criteria->addSelectColumn($alias . '.employee_Id');
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
        return Propel::getServiceContainer()->getDatabaseMap(CarePersonTableMap::DATABASE_NAME)->getTable(CarePersonTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CarePersonTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CarePersonTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CarePersonTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CarePerson or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CarePerson object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CarePerson) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CarePersonTableMap::DATABASE_NAME);
            $criteria->add(CarePersonTableMap::COL_PID, (array) $values, Criteria::IN);
        }

        $query = CarePersonQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CarePersonTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CarePersonTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_person table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CarePersonQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CarePerson or Criteria object.
     *
     * @param mixed               $criteria Criteria or CarePerson object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CarePerson object
        }

        if ($criteria->containsKey(CarePersonTableMap::COL_PID) && $criteria->keyContainsValue(CarePersonTableMap::COL_PID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CarePersonTableMap::COL_PID.')');
        }


        // Set the correct dbName
        $query = CarePersonQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CarePersonTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CarePersonTableMap::buildTableMap();
