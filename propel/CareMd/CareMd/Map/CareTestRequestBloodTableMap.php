<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestRequestBlood;
use CareMd\CareMd\CareTestRequestBloodQuery;
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
 * This class defines the structure of the 'care_test_request_blood' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestRequestBloodTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestRequestBloodTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_request_blood';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestRequestBlood';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestRequestBlood';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 70;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 70;

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_request_blood.batch_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_request_blood.encounter_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_test_request_blood.dept_nr';

    /**
     * the column name for the blood_group field
     */
    const COL_BLOOD_GROUP = 'care_test_request_blood.blood_group';

    /**
     * the column name for the rh_factor field
     */
    const COL_RH_FACTOR = 'care_test_request_blood.rh_factor';

    /**
     * the column name for the kell field
     */
    const COL_KELL = 'care_test_request_blood.kell';

    /**
     * the column name for the date_protoc_nr field
     */
    const COL_DATE_PROTOC_NR = 'care_test_request_blood.date_protoc_nr';

    /**
     * the column name for the pure_blood field
     */
    const COL_PURE_BLOOD = 'care_test_request_blood.pure_blood';

    /**
     * the column name for the red_blood field
     */
    const COL_RED_BLOOD = 'care_test_request_blood.red_blood';

    /**
     * the column name for the leukoless_blood field
     */
    const COL_LEUKOLESS_BLOOD = 'care_test_request_blood.leukoless_blood';

    /**
     * the column name for the washed_blood field
     */
    const COL_WASHED_BLOOD = 'care_test_request_blood.washed_blood';

    /**
     * the column name for the prp_blood field
     */
    const COL_PRP_BLOOD = 'care_test_request_blood.prp_blood';

    /**
     * the column name for the thrombo_con field
     */
    const COL_THROMBO_CON = 'care_test_request_blood.thrombo_con';

    /**
     * the column name for the ffp_plasma field
     */
    const COL_FFP_PLASMA = 'care_test_request_blood.ffp_plasma';

    /**
     * the column name for the transfusion_dev field
     */
    const COL_TRANSFUSION_DEV = 'care_test_request_blood.transfusion_dev';

    /**
     * the column name for the match_sample field
     */
    const COL_MATCH_SAMPLE = 'care_test_request_blood.match_sample';

    /**
     * the column name for the transfusion_date field
     */
    const COL_TRANSFUSION_DATE = 'care_test_request_blood.transfusion_date';

    /**
     * the column name for the diagnosis field
     */
    const COL_DIAGNOSIS = 'care_test_request_blood.diagnosis';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_test_request_blood.notes';

    /**
     * the column name for the send_date field
     */
    const COL_SEND_DATE = 'care_test_request_blood.send_date';

    /**
     * the column name for the doctor field
     */
    const COL_DOCTOR = 'care_test_request_blood.doctor';

    /**
     * the column name for the phone_nr field
     */
    const COL_PHONE_NR = 'care_test_request_blood.phone_nr';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_request_blood.status';

    /**
     * the column name for the blood_pb field
     */
    const COL_BLOOD_PB = 'care_test_request_blood.blood_pb';

    /**
     * the column name for the blood_rb field
     */
    const COL_BLOOD_RB = 'care_test_request_blood.blood_rb';

    /**
     * the column name for the blood_llrb field
     */
    const COL_BLOOD_LLRB = 'care_test_request_blood.blood_llrb';

    /**
     * the column name for the blood_wrb field
     */
    const COL_BLOOD_WRB = 'care_test_request_blood.blood_wrb';

    /**
     * the column name for the blood_prp field
     */
    const COL_BLOOD_PRP = 'care_test_request_blood.blood_prp';

    /**
     * the column name for the blood_tc field
     */
    const COL_BLOOD_TC = 'care_test_request_blood.blood_tc';

    /**
     * the column name for the blood_ffp field
     */
    const COL_BLOOD_FFP = 'care_test_request_blood.blood_ffp';

    /**
     * the column name for the b_group_count field
     */
    const COL_B_GROUP_COUNT = 'care_test_request_blood.b_group_count';

    /**
     * the column name for the b_group_price field
     */
    const COL_B_GROUP_PRICE = 'care_test_request_blood.b_group_price';

    /**
     * the column name for the a_subgroup_count field
     */
    const COL_A_SUBGROUP_COUNT = 'care_test_request_blood.a_subgroup_count';

    /**
     * the column name for the a_subgroup_price field
     */
    const COL_A_SUBGROUP_PRICE = 'care_test_request_blood.a_subgroup_price';

    /**
     * the column name for the extra_factors_count field
     */
    const COL_EXTRA_FACTORS_COUNT = 'care_test_request_blood.extra_factors_count';

    /**
     * the column name for the extra_factors_price field
     */
    const COL_EXTRA_FACTORS_PRICE = 'care_test_request_blood.extra_factors_price';

    /**
     * the column name for the coombs_count field
     */
    const COL_COOMBS_COUNT = 'care_test_request_blood.coombs_count';

    /**
     * the column name for the coombs_price field
     */
    const COL_COOMBS_PRICE = 'care_test_request_blood.coombs_price';

    /**
     * the column name for the ab_test_count field
     */
    const COL_AB_TEST_COUNT = 'care_test_request_blood.ab_test_count';

    /**
     * the column name for the ab_test_price field
     */
    const COL_AB_TEST_PRICE = 'care_test_request_blood.ab_test_price';

    /**
     * the column name for the crosstest_count field
     */
    const COL_CROSSTEST_COUNT = 'care_test_request_blood.crosstest_count';

    /**
     * the column name for the crosstest_price field
     */
    const COL_CROSSTEST_PRICE = 'care_test_request_blood.crosstest_price';

    /**
     * the column name for the ab_diff_count field
     */
    const COL_AB_DIFF_COUNT = 'care_test_request_blood.ab_diff_count';

    /**
     * the column name for the ab_diff_price field
     */
    const COL_AB_DIFF_PRICE = 'care_test_request_blood.ab_diff_price';

    /**
     * the column name for the x_test_1_code field
     */
    const COL_X_TEST_1_CODE = 'care_test_request_blood.x_test_1_code';

    /**
     * the column name for the x_test_1_name field
     */
    const COL_X_TEST_1_NAME = 'care_test_request_blood.x_test_1_name';

    /**
     * the column name for the x_test_1_count field
     */
    const COL_X_TEST_1_COUNT = 'care_test_request_blood.x_test_1_count';

    /**
     * the column name for the x_test_1_price field
     */
    const COL_X_TEST_1_PRICE = 'care_test_request_blood.x_test_1_price';

    /**
     * the column name for the x_test_2_code field
     */
    const COL_X_TEST_2_CODE = 'care_test_request_blood.x_test_2_code';

    /**
     * the column name for the x_test_2_name field
     */
    const COL_X_TEST_2_NAME = 'care_test_request_blood.x_test_2_name';

    /**
     * the column name for the x_test_2_count field
     */
    const COL_X_TEST_2_COUNT = 'care_test_request_blood.x_test_2_count';

    /**
     * the column name for the x_test_2_price field
     */
    const COL_X_TEST_2_PRICE = 'care_test_request_blood.x_test_2_price';

    /**
     * the column name for the x_test_3_code field
     */
    const COL_X_TEST_3_CODE = 'care_test_request_blood.x_test_3_code';

    /**
     * the column name for the x_test_3_name field
     */
    const COL_X_TEST_3_NAME = 'care_test_request_blood.x_test_3_name';

    /**
     * the column name for the x_test_3_count field
     */
    const COL_X_TEST_3_COUNT = 'care_test_request_blood.x_test_3_count';

    /**
     * the column name for the x_test_3_price field
     */
    const COL_X_TEST_3_PRICE = 'care_test_request_blood.x_test_3_price';

    /**
     * the column name for the lab_stamp field
     */
    const COL_LAB_STAMP = 'care_test_request_blood.lab_stamp';

    /**
     * the column name for the release_via field
     */
    const COL_RELEASE_VIA = 'care_test_request_blood.release_via';

    /**
     * the column name for the receipt_ack field
     */
    const COL_RECEIPT_ACK = 'care_test_request_blood.receipt_ack';

    /**
     * the column name for the mainlog_nr field
     */
    const COL_MAINLOG_NR = 'care_test_request_blood.mainlog_nr';

    /**
     * the column name for the lab_nr field
     */
    const COL_LAB_NR = 'care_test_request_blood.lab_nr';

    /**
     * the column name for the mainlog_date field
     */
    const COL_MAINLOG_DATE = 'care_test_request_blood.mainlog_date';

    /**
     * the column name for the lab_date field
     */
    const COL_LAB_DATE = 'care_test_request_blood.lab_date';

    /**
     * the column name for the mainlog_sign field
     */
    const COL_MAINLOG_SIGN = 'care_test_request_blood.mainlog_sign';

    /**
     * the column name for the lab_sign field
     */
    const COL_LAB_SIGN = 'care_test_request_blood.lab_sign';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_request_blood.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_request_blood.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_request_blood.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_request_blood.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_request_blood.create_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'EncounterNr', 'DeptNr', 'BloodGroup', 'RhFactor', 'Kell', 'DateProtocNr', 'PureBlood', 'RedBlood', 'LeukolessBlood', 'WashedBlood', 'PrpBlood', 'ThromboCon', 'FfpPlasma', 'TransfusionDev', 'MatchSample', 'TransfusionDate', 'Diagnosis', 'Notes', 'SendDate', 'Doctor', 'PhoneNr', 'Status', 'BloodPb', 'BloodRb', 'BloodLlrb', 'BloodWrb', 'BloodPrp', 'BloodTc', 'BloodFfp', 'BGroupCount', 'BGroupPrice', 'ASubgroupCount', 'ASubgroupPrice', 'ExtraFactorsCount', 'ExtraFactorsPrice', 'CoombsCount', 'CoombsPrice', 'AbTestCount', 'AbTestPrice', 'CrosstestCount', 'CrosstestPrice', 'AbDiffCount', 'AbDiffPrice', 'XTest1Code', 'XTest1Name', 'XTest1Count', 'XTest1Price', 'XTest2Code', 'XTest2Name', 'XTest2Count', 'XTest2Price', 'XTest3Code', 'XTest3Name', 'XTest3Count', 'XTest3Price', 'LabStamp', 'ReleaseVia', 'ReceiptAck', 'MainlogNr', 'LabNr', 'MainlogDate', 'LabDate', 'MainlogSign', 'LabSign', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'encounterNr', 'deptNr', 'bloodGroup', 'rhFactor', 'kell', 'dateProtocNr', 'pureBlood', 'redBlood', 'leukolessBlood', 'washedBlood', 'prpBlood', 'thromboCon', 'ffpPlasma', 'transfusionDev', 'matchSample', 'transfusionDate', 'diagnosis', 'notes', 'sendDate', 'doctor', 'phoneNr', 'status', 'bloodPb', 'bloodRb', 'bloodLlrb', 'bloodWrb', 'bloodPrp', 'bloodTc', 'bloodFfp', 'bGroupCount', 'bGroupPrice', 'aSubgroupCount', 'aSubgroupPrice', 'extraFactorsCount', 'extraFactorsPrice', 'coombsCount', 'coombsPrice', 'abTestCount', 'abTestPrice', 'crosstestCount', 'crosstestPrice', 'abDiffCount', 'abDiffPrice', 'xTest1Code', 'xTest1Name', 'xTest1Count', 'xTest1Price', 'xTest2Code', 'xTest2Name', 'xTest2Count', 'xTest2Price', 'xTest3Code', 'xTest3Name', 'xTest3Count', 'xTest3Price', 'labStamp', 'releaseVia', 'receiptAck', 'mainlogNr', 'labNr', 'mainlogDate', 'labDate', 'mainlogSign', 'labSign', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTestRequestBloodTableMap::COL_BATCH_NR, CareTestRequestBloodTableMap::COL_ENCOUNTER_NR, CareTestRequestBloodTableMap::COL_DEPT_NR, CareTestRequestBloodTableMap::COL_BLOOD_GROUP, CareTestRequestBloodTableMap::COL_RH_FACTOR, CareTestRequestBloodTableMap::COL_KELL, CareTestRequestBloodTableMap::COL_DATE_PROTOC_NR, CareTestRequestBloodTableMap::COL_PURE_BLOOD, CareTestRequestBloodTableMap::COL_RED_BLOOD, CareTestRequestBloodTableMap::COL_LEUKOLESS_BLOOD, CareTestRequestBloodTableMap::COL_WASHED_BLOOD, CareTestRequestBloodTableMap::COL_PRP_BLOOD, CareTestRequestBloodTableMap::COL_THROMBO_CON, CareTestRequestBloodTableMap::COL_FFP_PLASMA, CareTestRequestBloodTableMap::COL_TRANSFUSION_DEV, CareTestRequestBloodTableMap::COL_MATCH_SAMPLE, CareTestRequestBloodTableMap::COL_TRANSFUSION_DATE, CareTestRequestBloodTableMap::COL_DIAGNOSIS, CareTestRequestBloodTableMap::COL_NOTES, CareTestRequestBloodTableMap::COL_SEND_DATE, CareTestRequestBloodTableMap::COL_DOCTOR, CareTestRequestBloodTableMap::COL_PHONE_NR, CareTestRequestBloodTableMap::COL_STATUS, CareTestRequestBloodTableMap::COL_BLOOD_PB, CareTestRequestBloodTableMap::COL_BLOOD_RB, CareTestRequestBloodTableMap::COL_BLOOD_LLRB, CareTestRequestBloodTableMap::COL_BLOOD_WRB, CareTestRequestBloodTableMap::COL_BLOOD_PRP, CareTestRequestBloodTableMap::COL_BLOOD_TC, CareTestRequestBloodTableMap::COL_BLOOD_FFP, CareTestRequestBloodTableMap::COL_B_GROUP_COUNT, CareTestRequestBloodTableMap::COL_B_GROUP_PRICE, CareTestRequestBloodTableMap::COL_A_SUBGROUP_COUNT, CareTestRequestBloodTableMap::COL_A_SUBGROUP_PRICE, CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_COUNT, CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_PRICE, CareTestRequestBloodTableMap::COL_COOMBS_COUNT, CareTestRequestBloodTableMap::COL_COOMBS_PRICE, CareTestRequestBloodTableMap::COL_AB_TEST_COUNT, CareTestRequestBloodTableMap::COL_AB_TEST_PRICE, CareTestRequestBloodTableMap::COL_CROSSTEST_COUNT, CareTestRequestBloodTableMap::COL_CROSSTEST_PRICE, CareTestRequestBloodTableMap::COL_AB_DIFF_COUNT, CareTestRequestBloodTableMap::COL_AB_DIFF_PRICE, CareTestRequestBloodTableMap::COL_X_TEST_1_CODE, CareTestRequestBloodTableMap::COL_X_TEST_1_NAME, CareTestRequestBloodTableMap::COL_X_TEST_1_COUNT, CareTestRequestBloodTableMap::COL_X_TEST_1_PRICE, CareTestRequestBloodTableMap::COL_X_TEST_2_CODE, CareTestRequestBloodTableMap::COL_X_TEST_2_NAME, CareTestRequestBloodTableMap::COL_X_TEST_2_COUNT, CareTestRequestBloodTableMap::COL_X_TEST_2_PRICE, CareTestRequestBloodTableMap::COL_X_TEST_3_CODE, CareTestRequestBloodTableMap::COL_X_TEST_3_NAME, CareTestRequestBloodTableMap::COL_X_TEST_3_COUNT, CareTestRequestBloodTableMap::COL_X_TEST_3_PRICE, CareTestRequestBloodTableMap::COL_LAB_STAMP, CareTestRequestBloodTableMap::COL_RELEASE_VIA, CareTestRequestBloodTableMap::COL_RECEIPT_ACK, CareTestRequestBloodTableMap::COL_MAINLOG_NR, CareTestRequestBloodTableMap::COL_LAB_NR, CareTestRequestBloodTableMap::COL_MAINLOG_DATE, CareTestRequestBloodTableMap::COL_LAB_DATE, CareTestRequestBloodTableMap::COL_MAINLOG_SIGN, CareTestRequestBloodTableMap::COL_LAB_SIGN, CareTestRequestBloodTableMap::COL_HISTORY, CareTestRequestBloodTableMap::COL_MODIFY_ID, CareTestRequestBloodTableMap::COL_MODIFY_TIME, CareTestRequestBloodTableMap::COL_CREATE_ID, CareTestRequestBloodTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'encounter_nr', 'dept_nr', 'blood_group', 'rh_factor', 'kell', 'date_protoc_nr', 'pure_blood', 'red_blood', 'leukoless_blood', 'washed_blood', 'prp_blood', 'thrombo_con', 'ffp_plasma', 'transfusion_dev', 'match_sample', 'transfusion_date', 'diagnosis', 'notes', 'send_date', 'doctor', 'phone_nr', 'status', 'blood_pb', 'blood_rb', 'blood_llrb', 'blood_wrb', 'blood_prp', 'blood_tc', 'blood_ffp', 'b_group_count', 'b_group_price', 'a_subgroup_count', 'a_subgroup_price', 'extra_factors_count', 'extra_factors_price', 'coombs_count', 'coombs_price', 'ab_test_count', 'ab_test_price', 'crosstest_count', 'crosstest_price', 'ab_diff_count', 'ab_diff_price', 'x_test_1_code', 'x_test_1_name', 'x_test_1_count', 'x_test_1_price', 'x_test_2_code', 'x_test_2_name', 'x_test_2_count', 'x_test_2_price', 'x_test_3_code', 'x_test_3_name', 'x_test_3_count', 'x_test_3_price', 'lab_stamp', 'release_via', 'receipt_ack', 'mainlog_nr', 'lab_nr', 'mainlog_date', 'lab_date', 'mainlog_sign', 'lab_sign', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'EncounterNr' => 1, 'DeptNr' => 2, 'BloodGroup' => 3, 'RhFactor' => 4, 'Kell' => 5, 'DateProtocNr' => 6, 'PureBlood' => 7, 'RedBlood' => 8, 'LeukolessBlood' => 9, 'WashedBlood' => 10, 'PrpBlood' => 11, 'ThromboCon' => 12, 'FfpPlasma' => 13, 'TransfusionDev' => 14, 'MatchSample' => 15, 'TransfusionDate' => 16, 'Diagnosis' => 17, 'Notes' => 18, 'SendDate' => 19, 'Doctor' => 20, 'PhoneNr' => 21, 'Status' => 22, 'BloodPb' => 23, 'BloodRb' => 24, 'BloodLlrb' => 25, 'BloodWrb' => 26, 'BloodPrp' => 27, 'BloodTc' => 28, 'BloodFfp' => 29, 'BGroupCount' => 30, 'BGroupPrice' => 31, 'ASubgroupCount' => 32, 'ASubgroupPrice' => 33, 'ExtraFactorsCount' => 34, 'ExtraFactorsPrice' => 35, 'CoombsCount' => 36, 'CoombsPrice' => 37, 'AbTestCount' => 38, 'AbTestPrice' => 39, 'CrosstestCount' => 40, 'CrosstestPrice' => 41, 'AbDiffCount' => 42, 'AbDiffPrice' => 43, 'XTest1Code' => 44, 'XTest1Name' => 45, 'XTest1Count' => 46, 'XTest1Price' => 47, 'XTest2Code' => 48, 'XTest2Name' => 49, 'XTest2Count' => 50, 'XTest2Price' => 51, 'XTest3Code' => 52, 'XTest3Name' => 53, 'XTest3Count' => 54, 'XTest3Price' => 55, 'LabStamp' => 56, 'ReleaseVia' => 57, 'ReceiptAck' => 58, 'MainlogNr' => 59, 'LabNr' => 60, 'MainlogDate' => 61, 'LabDate' => 62, 'MainlogSign' => 63, 'LabSign' => 64, 'History' => 65, 'ModifyId' => 66, 'ModifyTime' => 67, 'CreateId' => 68, 'CreateTime' => 69, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'encounterNr' => 1, 'deptNr' => 2, 'bloodGroup' => 3, 'rhFactor' => 4, 'kell' => 5, 'dateProtocNr' => 6, 'pureBlood' => 7, 'redBlood' => 8, 'leukolessBlood' => 9, 'washedBlood' => 10, 'prpBlood' => 11, 'thromboCon' => 12, 'ffpPlasma' => 13, 'transfusionDev' => 14, 'matchSample' => 15, 'transfusionDate' => 16, 'diagnosis' => 17, 'notes' => 18, 'sendDate' => 19, 'doctor' => 20, 'phoneNr' => 21, 'status' => 22, 'bloodPb' => 23, 'bloodRb' => 24, 'bloodLlrb' => 25, 'bloodWrb' => 26, 'bloodPrp' => 27, 'bloodTc' => 28, 'bloodFfp' => 29, 'bGroupCount' => 30, 'bGroupPrice' => 31, 'aSubgroupCount' => 32, 'aSubgroupPrice' => 33, 'extraFactorsCount' => 34, 'extraFactorsPrice' => 35, 'coombsCount' => 36, 'coombsPrice' => 37, 'abTestCount' => 38, 'abTestPrice' => 39, 'crosstestCount' => 40, 'crosstestPrice' => 41, 'abDiffCount' => 42, 'abDiffPrice' => 43, 'xTest1Code' => 44, 'xTest1Name' => 45, 'xTest1Count' => 46, 'xTest1Price' => 47, 'xTest2Code' => 48, 'xTest2Name' => 49, 'xTest2Count' => 50, 'xTest2Price' => 51, 'xTest3Code' => 52, 'xTest3Name' => 53, 'xTest3Count' => 54, 'xTest3Price' => 55, 'labStamp' => 56, 'releaseVia' => 57, 'receiptAck' => 58, 'mainlogNr' => 59, 'labNr' => 60, 'mainlogDate' => 61, 'labDate' => 62, 'mainlogSign' => 63, 'labSign' => 64, 'history' => 65, 'modifyId' => 66, 'modifyTime' => 67, 'createId' => 68, 'createTime' => 69, ),
        self::TYPE_COLNAME       => array(CareTestRequestBloodTableMap::COL_BATCH_NR => 0, CareTestRequestBloodTableMap::COL_ENCOUNTER_NR => 1, CareTestRequestBloodTableMap::COL_DEPT_NR => 2, CareTestRequestBloodTableMap::COL_BLOOD_GROUP => 3, CareTestRequestBloodTableMap::COL_RH_FACTOR => 4, CareTestRequestBloodTableMap::COL_KELL => 5, CareTestRequestBloodTableMap::COL_DATE_PROTOC_NR => 6, CareTestRequestBloodTableMap::COL_PURE_BLOOD => 7, CareTestRequestBloodTableMap::COL_RED_BLOOD => 8, CareTestRequestBloodTableMap::COL_LEUKOLESS_BLOOD => 9, CareTestRequestBloodTableMap::COL_WASHED_BLOOD => 10, CareTestRequestBloodTableMap::COL_PRP_BLOOD => 11, CareTestRequestBloodTableMap::COL_THROMBO_CON => 12, CareTestRequestBloodTableMap::COL_FFP_PLASMA => 13, CareTestRequestBloodTableMap::COL_TRANSFUSION_DEV => 14, CareTestRequestBloodTableMap::COL_MATCH_SAMPLE => 15, CareTestRequestBloodTableMap::COL_TRANSFUSION_DATE => 16, CareTestRequestBloodTableMap::COL_DIAGNOSIS => 17, CareTestRequestBloodTableMap::COL_NOTES => 18, CareTestRequestBloodTableMap::COL_SEND_DATE => 19, CareTestRequestBloodTableMap::COL_DOCTOR => 20, CareTestRequestBloodTableMap::COL_PHONE_NR => 21, CareTestRequestBloodTableMap::COL_STATUS => 22, CareTestRequestBloodTableMap::COL_BLOOD_PB => 23, CareTestRequestBloodTableMap::COL_BLOOD_RB => 24, CareTestRequestBloodTableMap::COL_BLOOD_LLRB => 25, CareTestRequestBloodTableMap::COL_BLOOD_WRB => 26, CareTestRequestBloodTableMap::COL_BLOOD_PRP => 27, CareTestRequestBloodTableMap::COL_BLOOD_TC => 28, CareTestRequestBloodTableMap::COL_BLOOD_FFP => 29, CareTestRequestBloodTableMap::COL_B_GROUP_COUNT => 30, CareTestRequestBloodTableMap::COL_B_GROUP_PRICE => 31, CareTestRequestBloodTableMap::COL_A_SUBGROUP_COUNT => 32, CareTestRequestBloodTableMap::COL_A_SUBGROUP_PRICE => 33, CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_COUNT => 34, CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_PRICE => 35, CareTestRequestBloodTableMap::COL_COOMBS_COUNT => 36, CareTestRequestBloodTableMap::COL_COOMBS_PRICE => 37, CareTestRequestBloodTableMap::COL_AB_TEST_COUNT => 38, CareTestRequestBloodTableMap::COL_AB_TEST_PRICE => 39, CareTestRequestBloodTableMap::COL_CROSSTEST_COUNT => 40, CareTestRequestBloodTableMap::COL_CROSSTEST_PRICE => 41, CareTestRequestBloodTableMap::COL_AB_DIFF_COUNT => 42, CareTestRequestBloodTableMap::COL_AB_DIFF_PRICE => 43, CareTestRequestBloodTableMap::COL_X_TEST_1_CODE => 44, CareTestRequestBloodTableMap::COL_X_TEST_1_NAME => 45, CareTestRequestBloodTableMap::COL_X_TEST_1_COUNT => 46, CareTestRequestBloodTableMap::COL_X_TEST_1_PRICE => 47, CareTestRequestBloodTableMap::COL_X_TEST_2_CODE => 48, CareTestRequestBloodTableMap::COL_X_TEST_2_NAME => 49, CareTestRequestBloodTableMap::COL_X_TEST_2_COUNT => 50, CareTestRequestBloodTableMap::COL_X_TEST_2_PRICE => 51, CareTestRequestBloodTableMap::COL_X_TEST_3_CODE => 52, CareTestRequestBloodTableMap::COL_X_TEST_3_NAME => 53, CareTestRequestBloodTableMap::COL_X_TEST_3_COUNT => 54, CareTestRequestBloodTableMap::COL_X_TEST_3_PRICE => 55, CareTestRequestBloodTableMap::COL_LAB_STAMP => 56, CareTestRequestBloodTableMap::COL_RELEASE_VIA => 57, CareTestRequestBloodTableMap::COL_RECEIPT_ACK => 58, CareTestRequestBloodTableMap::COL_MAINLOG_NR => 59, CareTestRequestBloodTableMap::COL_LAB_NR => 60, CareTestRequestBloodTableMap::COL_MAINLOG_DATE => 61, CareTestRequestBloodTableMap::COL_LAB_DATE => 62, CareTestRequestBloodTableMap::COL_MAINLOG_SIGN => 63, CareTestRequestBloodTableMap::COL_LAB_SIGN => 64, CareTestRequestBloodTableMap::COL_HISTORY => 65, CareTestRequestBloodTableMap::COL_MODIFY_ID => 66, CareTestRequestBloodTableMap::COL_MODIFY_TIME => 67, CareTestRequestBloodTableMap::COL_CREATE_ID => 68, CareTestRequestBloodTableMap::COL_CREATE_TIME => 69, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'encounter_nr' => 1, 'dept_nr' => 2, 'blood_group' => 3, 'rh_factor' => 4, 'kell' => 5, 'date_protoc_nr' => 6, 'pure_blood' => 7, 'red_blood' => 8, 'leukoless_blood' => 9, 'washed_blood' => 10, 'prp_blood' => 11, 'thrombo_con' => 12, 'ffp_plasma' => 13, 'transfusion_dev' => 14, 'match_sample' => 15, 'transfusion_date' => 16, 'diagnosis' => 17, 'notes' => 18, 'send_date' => 19, 'doctor' => 20, 'phone_nr' => 21, 'status' => 22, 'blood_pb' => 23, 'blood_rb' => 24, 'blood_llrb' => 25, 'blood_wrb' => 26, 'blood_prp' => 27, 'blood_tc' => 28, 'blood_ffp' => 29, 'b_group_count' => 30, 'b_group_price' => 31, 'a_subgroup_count' => 32, 'a_subgroup_price' => 33, 'extra_factors_count' => 34, 'extra_factors_price' => 35, 'coombs_count' => 36, 'coombs_price' => 37, 'ab_test_count' => 38, 'ab_test_price' => 39, 'crosstest_count' => 40, 'crosstest_price' => 41, 'ab_diff_count' => 42, 'ab_diff_price' => 43, 'x_test_1_code' => 44, 'x_test_1_name' => 45, 'x_test_1_count' => 46, 'x_test_1_price' => 47, 'x_test_2_code' => 48, 'x_test_2_name' => 49, 'x_test_2_count' => 50, 'x_test_2_price' => 51, 'x_test_3_code' => 52, 'x_test_3_name' => 53, 'x_test_3_count' => 54, 'x_test_3_price' => 55, 'lab_stamp' => 56, 'release_via' => 57, 'receipt_ack' => 58, 'mainlog_nr' => 59, 'lab_nr' => 60, 'mainlog_date' => 61, 'lab_date' => 62, 'mainlog_sign' => 63, 'lab_sign' => 64, 'history' => 65, 'modify_id' => 66, 'modify_time' => 67, 'create_id' => 68, 'create_time' => 69, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, )
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
        $this->setName('care_test_request_blood');
        $this->setPhpName('CareTestRequestBlood');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestRequestBlood');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('blood_group', 'BloodGroup', 'VARCHAR', true, 10, '');
        $this->addColumn('rh_factor', 'RhFactor', 'VARCHAR', true, 10, '');
        $this->addColumn('kell', 'Kell', 'VARCHAR', true, 10, '');
        $this->addColumn('date_protoc_nr', 'DateProtocNr', 'VARCHAR', true, 45, '');
        $this->addColumn('pure_blood', 'PureBlood', 'VARCHAR', true, 15, '');
        $this->addColumn('red_blood', 'RedBlood', 'VARCHAR', true, 15, '');
        $this->addColumn('leukoless_blood', 'LeukolessBlood', 'VARCHAR', true, 15, '');
        $this->addColumn('washed_blood', 'WashedBlood', 'VARCHAR', true, 15, '');
        $this->addColumn('prp_blood', 'PrpBlood', 'VARCHAR', true, 15, '');
        $this->addColumn('thrombo_con', 'ThromboCon', 'VARCHAR', true, 15, '');
        $this->addColumn('ffp_plasma', 'FfpPlasma', 'VARCHAR', true, 15, '');
        $this->addColumn('transfusion_dev', 'TransfusionDev', 'VARCHAR', true, 15, '');
        $this->addColumn('match_sample', 'MatchSample', 'TINYINT', true, null, 0);
        $this->addColumn('transfusion_date', 'TransfusionDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('diagnosis', 'Diagnosis', 'VARCHAR', true, 255, null);
        $this->addColumn('notes', 'Notes', 'VARCHAR', true, 255, null);
        $this->addColumn('send_date', 'SendDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('doctor', 'Doctor', 'VARCHAR', true, 35, '');
        $this->addColumn('phone_nr', 'PhoneNr', 'VARCHAR', true, 40, '');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 10, '');
        $this->addColumn('blood_pb', 'BloodPb', 'VARCHAR', true, 255, null);
        $this->addColumn('blood_rb', 'BloodRb', 'VARCHAR', true, 255, null);
        $this->addColumn('blood_llrb', 'BloodLlrb', 'VARCHAR', true, 255, null);
        $this->addColumn('blood_wrb', 'BloodWrb', 'VARCHAR', true, 255, null);
        $this->addColumn('blood_prp', 'BloodPrp', 'BINARY', true, null, null);
        $this->addColumn('blood_tc', 'BloodTc', 'VARCHAR', true, 255, null);
        $this->addColumn('blood_ffp', 'BloodFfp', 'VARCHAR', true, 255, null);
        $this->addColumn('b_group_count', 'BGroupCount', 'SMALLINT', true, 9, 0);
        $this->addColumn('b_group_price', 'BGroupPrice', 'FLOAT', true, 10, 0);
        $this->addColumn('a_subgroup_count', 'ASubgroupCount', 'SMALLINT', true, 9, 0);
        $this->addColumn('a_subgroup_price', 'ASubgroupPrice', 'FLOAT', true, 10, 0);
        $this->addColumn('extra_factors_count', 'ExtraFactorsCount', 'SMALLINT', true, 9, 0);
        $this->addColumn('extra_factors_price', 'ExtraFactorsPrice', 'FLOAT', true, 10, 0);
        $this->addColumn('coombs_count', 'CoombsCount', 'SMALLINT', true, 9, 0);
        $this->addColumn('coombs_price', 'CoombsPrice', 'FLOAT', true, 10, 0);
        $this->addColumn('ab_test_count', 'AbTestCount', 'SMALLINT', true, 9, 0);
        $this->addColumn('ab_test_price', 'AbTestPrice', 'FLOAT', true, 10, 0);
        $this->addColumn('crosstest_count', 'CrosstestCount', 'SMALLINT', true, 9, 0);
        $this->addColumn('crosstest_price', 'CrosstestPrice', 'FLOAT', true, 10, 0);
        $this->addColumn('ab_diff_count', 'AbDiffCount', 'SMALLINT', true, 9, 0);
        $this->addColumn('ab_diff_price', 'AbDiffPrice', 'FLOAT', true, 10, 0);
        $this->addColumn('x_test_1_code', 'XTest1Code', 'SMALLINT', true, 9, 0);
        $this->addColumn('x_test_1_name', 'XTest1Name', 'VARCHAR', true, 35, '');
        $this->addColumn('x_test_1_count', 'XTest1Count', 'SMALLINT', true, 9, 0);
        $this->addColumn('x_test_1_price', 'XTest1Price', 'FLOAT', true, 10, 0);
        $this->addColumn('x_test_2_code', 'XTest2Code', 'SMALLINT', true, 9, 0);
        $this->addColumn('x_test_2_name', 'XTest2Name', 'VARCHAR', true, 35, '');
        $this->addColumn('x_test_2_count', 'XTest2Count', 'SMALLINT', true, 9, 0);
        $this->addColumn('x_test_2_price', 'XTest2Price', 'FLOAT', true, 10, 0);
        $this->addColumn('x_test_3_code', 'XTest3Code', 'SMALLINT', true, 9, 0);
        $this->addColumn('x_test_3_name', 'XTest3Name', 'VARCHAR', true, 35, '');
        $this->addColumn('x_test_3_count', 'XTest3Count', 'SMALLINT', true, 9, 0);
        $this->addColumn('x_test_3_price', 'XTest3Price', 'FLOAT', true, 10, 0);
        $this->addColumn('lab_stamp', 'LabStamp', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('release_via', 'ReleaseVia', 'VARCHAR', true, 20, '');
        $this->addColumn('receipt_ack', 'ReceiptAck', 'VARCHAR', true, 20, '');
        $this->addColumn('mainlog_nr', 'MainlogNr', 'VARCHAR', true, 7, '');
        $this->addColumn('lab_nr', 'LabNr', 'VARCHAR', true, 7, '');
        $this->addColumn('mainlog_date', 'MainlogDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('lab_date', 'LabDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('mainlog_sign', 'MainlogSign', 'VARCHAR', true, 20, '');
        $this->addColumn('lab_sign', 'LabSign', 'VARCHAR', true, 20, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTestRequestBloodTableMap::CLASS_DEFAULT : CareTestRequestBloodTableMap::OM_CLASS;
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
     * @return array           (CareTestRequestBlood object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestRequestBloodTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestRequestBloodTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestRequestBloodTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestRequestBloodTableMap::OM_CLASS;
            /** @var CareTestRequestBlood $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestRequestBloodTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestRequestBloodTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestRequestBloodTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestRequestBlood $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestRequestBloodTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_BLOOD_GROUP);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_RH_FACTOR);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_KELL);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_DATE_PROTOC_NR);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_PURE_BLOOD);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_RED_BLOOD);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_LEUKOLESS_BLOOD);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_WASHED_BLOOD);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_PRP_BLOOD);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_THROMBO_CON);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_FFP_PLASMA);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_TRANSFUSION_DEV);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_MATCH_SAMPLE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_TRANSFUSION_DATE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_DIAGNOSIS);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_SEND_DATE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_DOCTOR);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_PHONE_NR);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_BLOOD_PB);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_BLOOD_RB);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_BLOOD_LLRB);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_BLOOD_WRB);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_BLOOD_PRP);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_BLOOD_TC);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_BLOOD_FFP);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_B_GROUP_COUNT);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_B_GROUP_PRICE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_A_SUBGROUP_COUNT);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_A_SUBGROUP_PRICE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_COUNT);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_PRICE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_COOMBS_COUNT);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_COOMBS_PRICE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_AB_TEST_COUNT);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_AB_TEST_PRICE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_CROSSTEST_COUNT);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_CROSSTEST_PRICE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_AB_DIFF_COUNT);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_AB_DIFF_PRICE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_1_CODE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_1_NAME);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_1_COUNT);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_1_PRICE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_2_CODE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_2_NAME);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_2_COUNT);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_2_PRICE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_3_CODE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_3_NAME);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_3_COUNT);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_X_TEST_3_PRICE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_LAB_STAMP);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_RELEASE_VIA);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_RECEIPT_ACK);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_MAINLOG_NR);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_LAB_NR);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_MAINLOG_DATE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_LAB_DATE);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_MAINLOG_SIGN);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_LAB_SIGN);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestRequestBloodTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.blood_group');
            $criteria->addSelectColumn($alias . '.rh_factor');
            $criteria->addSelectColumn($alias . '.kell');
            $criteria->addSelectColumn($alias . '.date_protoc_nr');
            $criteria->addSelectColumn($alias . '.pure_blood');
            $criteria->addSelectColumn($alias . '.red_blood');
            $criteria->addSelectColumn($alias . '.leukoless_blood');
            $criteria->addSelectColumn($alias . '.washed_blood');
            $criteria->addSelectColumn($alias . '.prp_blood');
            $criteria->addSelectColumn($alias . '.thrombo_con');
            $criteria->addSelectColumn($alias . '.ffp_plasma');
            $criteria->addSelectColumn($alias . '.transfusion_dev');
            $criteria->addSelectColumn($alias . '.match_sample');
            $criteria->addSelectColumn($alias . '.transfusion_date');
            $criteria->addSelectColumn($alias . '.diagnosis');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.send_date');
            $criteria->addSelectColumn($alias . '.doctor');
            $criteria->addSelectColumn($alias . '.phone_nr');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.blood_pb');
            $criteria->addSelectColumn($alias . '.blood_rb');
            $criteria->addSelectColumn($alias . '.blood_llrb');
            $criteria->addSelectColumn($alias . '.blood_wrb');
            $criteria->addSelectColumn($alias . '.blood_prp');
            $criteria->addSelectColumn($alias . '.blood_tc');
            $criteria->addSelectColumn($alias . '.blood_ffp');
            $criteria->addSelectColumn($alias . '.b_group_count');
            $criteria->addSelectColumn($alias . '.b_group_price');
            $criteria->addSelectColumn($alias . '.a_subgroup_count');
            $criteria->addSelectColumn($alias . '.a_subgroup_price');
            $criteria->addSelectColumn($alias . '.extra_factors_count');
            $criteria->addSelectColumn($alias . '.extra_factors_price');
            $criteria->addSelectColumn($alias . '.coombs_count');
            $criteria->addSelectColumn($alias . '.coombs_price');
            $criteria->addSelectColumn($alias . '.ab_test_count');
            $criteria->addSelectColumn($alias . '.ab_test_price');
            $criteria->addSelectColumn($alias . '.crosstest_count');
            $criteria->addSelectColumn($alias . '.crosstest_price');
            $criteria->addSelectColumn($alias . '.ab_diff_count');
            $criteria->addSelectColumn($alias . '.ab_diff_price');
            $criteria->addSelectColumn($alias . '.x_test_1_code');
            $criteria->addSelectColumn($alias . '.x_test_1_name');
            $criteria->addSelectColumn($alias . '.x_test_1_count');
            $criteria->addSelectColumn($alias . '.x_test_1_price');
            $criteria->addSelectColumn($alias . '.x_test_2_code');
            $criteria->addSelectColumn($alias . '.x_test_2_name');
            $criteria->addSelectColumn($alias . '.x_test_2_count');
            $criteria->addSelectColumn($alias . '.x_test_2_price');
            $criteria->addSelectColumn($alias . '.x_test_3_code');
            $criteria->addSelectColumn($alias . '.x_test_3_name');
            $criteria->addSelectColumn($alias . '.x_test_3_count');
            $criteria->addSelectColumn($alias . '.x_test_3_price');
            $criteria->addSelectColumn($alias . '.lab_stamp');
            $criteria->addSelectColumn($alias . '.release_via');
            $criteria->addSelectColumn($alias . '.receipt_ack');
            $criteria->addSelectColumn($alias . '.mainlog_nr');
            $criteria->addSelectColumn($alias . '.lab_nr');
            $criteria->addSelectColumn($alias . '.mainlog_date');
            $criteria->addSelectColumn($alias . '.lab_date');
            $criteria->addSelectColumn($alias . '.mainlog_sign');
            $criteria->addSelectColumn($alias . '.lab_sign');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestRequestBloodTableMap::DATABASE_NAME)->getTable(CareTestRequestBloodTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestRequestBloodTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestRequestBloodTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestRequestBloodTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestRequestBlood or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestRequestBlood object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestBloodTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestRequestBlood) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestRequestBloodTableMap::DATABASE_NAME);
            $criteria->add(CareTestRequestBloodTableMap::COL_BATCH_NR, (array) $values, Criteria::IN);
        }

        $query = CareTestRequestBloodQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestRequestBloodTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestRequestBloodTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_request_blood table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestRequestBloodQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestRequestBlood or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestRequestBlood object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestBloodTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestRequestBlood object
        }

        if ($criteria->containsKey(CareTestRequestBloodTableMap::COL_BATCH_NR) && $criteria->keyContainsValue(CareTestRequestBloodTableMap::COL_BATCH_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestRequestBloodTableMap::COL_BATCH_NR.')');
        }


        // Set the correct dbName
        $query = CareTestRequestBloodQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestRequestBloodTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestRequestBloodTableMap::buildTableMap();
