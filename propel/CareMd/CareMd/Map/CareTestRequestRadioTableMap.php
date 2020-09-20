<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestRequestRadio;
use CareMd\CareMd\CareTestRequestRadioQuery;
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
 * This class defines the structure of the 'care_test_request_radio' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestRequestRadioTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestRequestRadioTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_request_radio';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestRequestRadio';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestRequestRadio';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 40;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 40;

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_request_radio.batch_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_request_radio.encounter_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_test_request_radio.dept_nr';

    /**
     * the column name for the xray field
     */
    const COL_XRAY = 'care_test_request_radio.xray';

    /**
     * the column name for the ct field
     */
    const COL_CT = 'care_test_request_radio.ct';

    /**
     * the column name for the sono field
     */
    const COL_SONO = 'care_test_request_radio.sono';

    /**
     * the column name for the mammograph field
     */
    const COL_MAMMOGRAPH = 'care_test_request_radio.mammograph';

    /**
     * the column name for the mrt field
     */
    const COL_MRT = 'care_test_request_radio.mrt';

    /**
     * the column name for the nuclear field
     */
    const COL_NUCLEAR = 'care_test_request_radio.nuclear';

    /**
     * the column name for the if_patmobile field
     */
    const COL_IF_PATMOBILE = 'care_test_request_radio.if_patmobile';

    /**
     * the column name for the if_allergy field
     */
    const COL_IF_ALLERGY = 'care_test_request_radio.if_allergy';

    /**
     * the column name for the if_hyperten field
     */
    const COL_IF_HYPERTEN = 'care_test_request_radio.if_hyperten';

    /**
     * the column name for the if_pregnant field
     */
    const COL_IF_PREGNANT = 'care_test_request_radio.if_pregnant';

    /**
     * the column name for the clinical_info field
     */
    const COL_CLINICAL_INFO = 'care_test_request_radio.clinical_info';

    /**
     * the column name for the item_id field
     */
    const COL_ITEM_ID = 'care_test_request_radio.item_id';

    /**
     * the column name for the test_request field
     */
    const COL_TEST_REQUEST = 'care_test_request_radio.test_request';

    /**
     * the column name for the number_of_tests field
     */
    const COL_NUMBER_OF_TESTS = 'care_test_request_radio.number_of_tests';

    /**
     * the column name for the send_date field
     */
    const COL_SEND_DATE = 'care_test_request_radio.send_date';

    /**
     * the column name for the send_doctor field
     */
    const COL_SEND_DOCTOR = 'care_test_request_radio.send_doctor';

    /**
     * the column name for the is_disabled field
     */
    const COL_IS_DISABLED = 'care_test_request_radio.is_disabled';

    /**
     * the column name for the disable_id field
     */
    const COL_DISABLE_ID = 'care_test_request_radio.disable_id';

    /**
     * the column name for the disable_date field
     */
    const COL_DISABLE_DATE = 'care_test_request_radio.disable_date';

    /**
     * the column name for the xray_nr field
     */
    const COL_XRAY_NR = 'care_test_request_radio.xray_nr';

    /**
     * the column name for the r_cm_2 field
     */
    const COL_R_CM_2 = 'care_test_request_radio.r_cm_2';

    /**
     * the column name for the mtr field
     */
    const COL_MTR = 'care_test_request_radio.mtr';

    /**
     * the column name for the xray_date field
     */
    const COL_XRAY_DATE = 'care_test_request_radio.xray_date';

    /**
     * the column name for the xray_time field
     */
    const COL_XRAY_TIME = 'care_test_request_radio.xray_time';

    /**
     * the column name for the results field
     */
    const COL_RESULTS = 'care_test_request_radio.results';

    /**
     * the column name for the results_date field
     */
    const COL_RESULTS_DATE = 'care_test_request_radio.results_date';

    /**
     * the column name for the results_doctor field
     */
    const COL_RESULTS_DOCTOR = 'care_test_request_radio.results_doctor';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_request_radio.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_request_radio.history';

    /**
     * the column name for the bill_number field
     */
    const COL_BILL_NUMBER = 'care_test_request_radio.bill_number';

    /**
     * the column name for the bill_status field
     */
    const COL_BILL_STATUS = 'care_test_request_radio.bill_status';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_request_radio.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_request_radio.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_request_radio.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_request_radio.create_time';

    /**
     * the column name for the process_id field
     */
    const COL_PROCESS_ID = 'care_test_request_radio.process_id';

    /**
     * the column name for the process_time field
     */
    const COL_PROCESS_TIME = 'care_test_request_radio.process_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'EncounterNr', 'DeptNr', 'Xray', 'Ct', 'Sono', 'Mammograph', 'Mrt', 'Nuclear', 'IfPatmobile', 'IfAllergy', 'IfHyperten', 'IfPregnant', 'ClinicalInfo', 'ItemId', 'TestRequest', 'NumberOfTests', 'SendDate', 'SendDoctor', 'IsDisabled', 'DisableId', 'DisableDate', 'XrayNr', 'RCm2', 'Mtr', 'XrayDate', 'XrayTime', 'Results', 'ResultsDate', 'ResultsDoctor', 'Status', 'History', 'BillNumber', 'BillStatus', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'ProcessId', 'ProcessTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'encounterNr', 'deptNr', 'xray', 'ct', 'sono', 'mammograph', 'mrt', 'nuclear', 'ifPatmobile', 'ifAllergy', 'ifHyperten', 'ifPregnant', 'clinicalInfo', 'itemId', 'testRequest', 'numberOfTests', 'sendDate', 'sendDoctor', 'isDisabled', 'disableId', 'disableDate', 'xrayNr', 'rCm2', 'mtr', 'xrayDate', 'xrayTime', 'results', 'resultsDate', 'resultsDoctor', 'status', 'history', 'billNumber', 'billStatus', 'modifyId', 'modifyTime', 'createId', 'createTime', 'processId', 'processTime', ),
        self::TYPE_COLNAME       => array(CareTestRequestRadioTableMap::COL_BATCH_NR, CareTestRequestRadioTableMap::COL_ENCOUNTER_NR, CareTestRequestRadioTableMap::COL_DEPT_NR, CareTestRequestRadioTableMap::COL_XRAY, CareTestRequestRadioTableMap::COL_CT, CareTestRequestRadioTableMap::COL_SONO, CareTestRequestRadioTableMap::COL_MAMMOGRAPH, CareTestRequestRadioTableMap::COL_MRT, CareTestRequestRadioTableMap::COL_NUCLEAR, CareTestRequestRadioTableMap::COL_IF_PATMOBILE, CareTestRequestRadioTableMap::COL_IF_ALLERGY, CareTestRequestRadioTableMap::COL_IF_HYPERTEN, CareTestRequestRadioTableMap::COL_IF_PREGNANT, CareTestRequestRadioTableMap::COL_CLINICAL_INFO, CareTestRequestRadioTableMap::COL_ITEM_ID, CareTestRequestRadioTableMap::COL_TEST_REQUEST, CareTestRequestRadioTableMap::COL_NUMBER_OF_TESTS, CareTestRequestRadioTableMap::COL_SEND_DATE, CareTestRequestRadioTableMap::COL_SEND_DOCTOR, CareTestRequestRadioTableMap::COL_IS_DISABLED, CareTestRequestRadioTableMap::COL_DISABLE_ID, CareTestRequestRadioTableMap::COL_DISABLE_DATE, CareTestRequestRadioTableMap::COL_XRAY_NR, CareTestRequestRadioTableMap::COL_R_CM_2, CareTestRequestRadioTableMap::COL_MTR, CareTestRequestRadioTableMap::COL_XRAY_DATE, CareTestRequestRadioTableMap::COL_XRAY_TIME, CareTestRequestRadioTableMap::COL_RESULTS, CareTestRequestRadioTableMap::COL_RESULTS_DATE, CareTestRequestRadioTableMap::COL_RESULTS_DOCTOR, CareTestRequestRadioTableMap::COL_STATUS, CareTestRequestRadioTableMap::COL_HISTORY, CareTestRequestRadioTableMap::COL_BILL_NUMBER, CareTestRequestRadioTableMap::COL_BILL_STATUS, CareTestRequestRadioTableMap::COL_MODIFY_ID, CareTestRequestRadioTableMap::COL_MODIFY_TIME, CareTestRequestRadioTableMap::COL_CREATE_ID, CareTestRequestRadioTableMap::COL_CREATE_TIME, CareTestRequestRadioTableMap::COL_PROCESS_ID, CareTestRequestRadioTableMap::COL_PROCESS_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'encounter_nr', 'dept_nr', 'xray', 'ct', 'sono', 'mammograph', 'mrt', 'nuclear', 'if_patmobile', 'if_allergy', 'if_hyperten', 'if_pregnant', 'clinical_info', 'item_id', 'test_request', 'number_of_tests', 'send_date', 'send_doctor', 'is_disabled', 'disable_id', 'disable_date', 'xray_nr', 'r_cm_2', 'mtr', 'xray_date', 'xray_time', 'results', 'results_date', 'results_doctor', 'status', 'history', 'bill_number', 'bill_status', 'modify_id', 'modify_time', 'create_id', 'create_time', 'process_id', 'process_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'EncounterNr' => 1, 'DeptNr' => 2, 'Xray' => 3, 'Ct' => 4, 'Sono' => 5, 'Mammograph' => 6, 'Mrt' => 7, 'Nuclear' => 8, 'IfPatmobile' => 9, 'IfAllergy' => 10, 'IfHyperten' => 11, 'IfPregnant' => 12, 'ClinicalInfo' => 13, 'ItemId' => 14, 'TestRequest' => 15, 'NumberOfTests' => 16, 'SendDate' => 17, 'SendDoctor' => 18, 'IsDisabled' => 19, 'DisableId' => 20, 'DisableDate' => 21, 'XrayNr' => 22, 'RCm2' => 23, 'Mtr' => 24, 'XrayDate' => 25, 'XrayTime' => 26, 'Results' => 27, 'ResultsDate' => 28, 'ResultsDoctor' => 29, 'Status' => 30, 'History' => 31, 'BillNumber' => 32, 'BillStatus' => 33, 'ModifyId' => 34, 'ModifyTime' => 35, 'CreateId' => 36, 'CreateTime' => 37, 'ProcessId' => 38, 'ProcessTime' => 39, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'encounterNr' => 1, 'deptNr' => 2, 'xray' => 3, 'ct' => 4, 'sono' => 5, 'mammograph' => 6, 'mrt' => 7, 'nuclear' => 8, 'ifPatmobile' => 9, 'ifAllergy' => 10, 'ifHyperten' => 11, 'ifPregnant' => 12, 'clinicalInfo' => 13, 'itemId' => 14, 'testRequest' => 15, 'numberOfTests' => 16, 'sendDate' => 17, 'sendDoctor' => 18, 'isDisabled' => 19, 'disableId' => 20, 'disableDate' => 21, 'xrayNr' => 22, 'rCm2' => 23, 'mtr' => 24, 'xrayDate' => 25, 'xrayTime' => 26, 'results' => 27, 'resultsDate' => 28, 'resultsDoctor' => 29, 'status' => 30, 'history' => 31, 'billNumber' => 32, 'billStatus' => 33, 'modifyId' => 34, 'modifyTime' => 35, 'createId' => 36, 'createTime' => 37, 'processId' => 38, 'processTime' => 39, ),
        self::TYPE_COLNAME       => array(CareTestRequestRadioTableMap::COL_BATCH_NR => 0, CareTestRequestRadioTableMap::COL_ENCOUNTER_NR => 1, CareTestRequestRadioTableMap::COL_DEPT_NR => 2, CareTestRequestRadioTableMap::COL_XRAY => 3, CareTestRequestRadioTableMap::COL_CT => 4, CareTestRequestRadioTableMap::COL_SONO => 5, CareTestRequestRadioTableMap::COL_MAMMOGRAPH => 6, CareTestRequestRadioTableMap::COL_MRT => 7, CareTestRequestRadioTableMap::COL_NUCLEAR => 8, CareTestRequestRadioTableMap::COL_IF_PATMOBILE => 9, CareTestRequestRadioTableMap::COL_IF_ALLERGY => 10, CareTestRequestRadioTableMap::COL_IF_HYPERTEN => 11, CareTestRequestRadioTableMap::COL_IF_PREGNANT => 12, CareTestRequestRadioTableMap::COL_CLINICAL_INFO => 13, CareTestRequestRadioTableMap::COL_ITEM_ID => 14, CareTestRequestRadioTableMap::COL_TEST_REQUEST => 15, CareTestRequestRadioTableMap::COL_NUMBER_OF_TESTS => 16, CareTestRequestRadioTableMap::COL_SEND_DATE => 17, CareTestRequestRadioTableMap::COL_SEND_DOCTOR => 18, CareTestRequestRadioTableMap::COL_IS_DISABLED => 19, CareTestRequestRadioTableMap::COL_DISABLE_ID => 20, CareTestRequestRadioTableMap::COL_DISABLE_DATE => 21, CareTestRequestRadioTableMap::COL_XRAY_NR => 22, CareTestRequestRadioTableMap::COL_R_CM_2 => 23, CareTestRequestRadioTableMap::COL_MTR => 24, CareTestRequestRadioTableMap::COL_XRAY_DATE => 25, CareTestRequestRadioTableMap::COL_XRAY_TIME => 26, CareTestRequestRadioTableMap::COL_RESULTS => 27, CareTestRequestRadioTableMap::COL_RESULTS_DATE => 28, CareTestRequestRadioTableMap::COL_RESULTS_DOCTOR => 29, CareTestRequestRadioTableMap::COL_STATUS => 30, CareTestRequestRadioTableMap::COL_HISTORY => 31, CareTestRequestRadioTableMap::COL_BILL_NUMBER => 32, CareTestRequestRadioTableMap::COL_BILL_STATUS => 33, CareTestRequestRadioTableMap::COL_MODIFY_ID => 34, CareTestRequestRadioTableMap::COL_MODIFY_TIME => 35, CareTestRequestRadioTableMap::COL_CREATE_ID => 36, CareTestRequestRadioTableMap::COL_CREATE_TIME => 37, CareTestRequestRadioTableMap::COL_PROCESS_ID => 38, CareTestRequestRadioTableMap::COL_PROCESS_TIME => 39, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'encounter_nr' => 1, 'dept_nr' => 2, 'xray' => 3, 'ct' => 4, 'sono' => 5, 'mammograph' => 6, 'mrt' => 7, 'nuclear' => 8, 'if_patmobile' => 9, 'if_allergy' => 10, 'if_hyperten' => 11, 'if_pregnant' => 12, 'clinical_info' => 13, 'item_id' => 14, 'test_request' => 15, 'number_of_tests' => 16, 'send_date' => 17, 'send_doctor' => 18, 'is_disabled' => 19, 'disable_id' => 20, 'disable_date' => 21, 'xray_nr' => 22, 'r_cm_2' => 23, 'mtr' => 24, 'xray_date' => 25, 'xray_time' => 26, 'results' => 27, 'results_date' => 28, 'results_doctor' => 29, 'status' => 30, 'history' => 31, 'bill_number' => 32, 'bill_status' => 33, 'modify_id' => 34, 'modify_time' => 35, 'create_id' => 36, 'create_time' => 37, 'process_id' => 38, 'process_time' => 39, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
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
        $this->setName('care_test_request_radio');
        $this->setPhpName('CareTestRequestRadio');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestRequestRadio');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, 0);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('xray', 'Xray', 'BOOLEAN', true, 1, false);
        $this->addColumn('ct', 'Ct', 'BOOLEAN', true, 1, false);
        $this->addColumn('sono', 'Sono', 'BOOLEAN', true, 1, false);
        $this->addColumn('mammograph', 'Mammograph', 'BOOLEAN', true, 1, false);
        $this->addColumn('mrt', 'Mrt', 'BOOLEAN', true, 1, false);
        $this->addColumn('nuclear', 'Nuclear', 'BOOLEAN', true, 1, false);
        $this->addColumn('if_patmobile', 'IfPatmobile', 'BOOLEAN', true, 1, false);
        $this->addColumn('if_allergy', 'IfAllergy', 'BOOLEAN', true, 1, false);
        $this->addColumn('if_hyperten', 'IfHyperten', 'BOOLEAN', true, 1, false);
        $this->addColumn('if_pregnant', 'IfPregnant', 'BOOLEAN', true, 1, false);
        $this->addColumn('clinical_info', 'ClinicalInfo', 'LONGVARCHAR', true, null, null);
        $this->addColumn('item_id', 'ItemId', 'VARCHAR', true, 10, null);
        $this->addColumn('test_request', 'TestRequest', 'VARCHAR', true, 25, null);
        $this->addColumn('number_of_tests', 'NumberOfTests', 'INTEGER', true, 5, null);
        $this->addColumn('send_date', 'SendDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('send_doctor', 'SendDoctor', 'VARCHAR', true, 35, '0');
        $this->addColumn('is_disabled', 'IsDisabled', 'INTEGER', true, 4, null);
        $this->addColumn('disable_id', 'DisableId', 'VARCHAR', true, 25, null);
        $this->addColumn('disable_date', 'DisableDate', 'DATE', true, null, null);
        $this->addColumn('xray_nr', 'XrayNr', 'VARCHAR', true, 9, '0');
        $this->addColumn('r_cm_2', 'RCm2', 'VARCHAR', true, 15, null);
        $this->addColumn('mtr', 'Mtr', 'VARCHAR', true, 35, null);
        $this->addColumn('xray_date', 'XrayDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('xray_time', 'XrayTime', 'TIME', true, null, '00:00:00');
        $this->addColumn('results', 'Results', 'LONGVARCHAR', true, null, null);
        $this->addColumn('results_date', 'ResultsDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('results_doctor', 'ResultsDoctor', 'VARCHAR', true, 35, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 10, null);
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('bill_number', 'BillNumber', 'INTEGER', true, 10, null);
        $this->addColumn('bill_status', 'BillStatus', 'VARCHAR', true, 10, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, null);
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, null);
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('process_id', 'ProcessId', 'VARCHAR', true, 35, null);
        $this->addColumn('process_time', 'ProcessTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
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
        return $withPrefix ? CareTestRequestRadioTableMap::CLASS_DEFAULT : CareTestRequestRadioTableMap::OM_CLASS;
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
     * @return array           (CareTestRequestRadio object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestRequestRadioTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestRequestRadioTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestRequestRadioTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestRequestRadioTableMap::OM_CLASS;
            /** @var CareTestRequestRadio $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestRequestRadioTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestRequestRadioTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestRequestRadioTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestRequestRadio $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestRequestRadioTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_XRAY);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_CT);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_SONO);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_MAMMOGRAPH);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_MRT);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_NUCLEAR);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_IF_PATMOBILE);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_IF_ALLERGY);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_IF_HYPERTEN);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_IF_PREGNANT);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_CLINICAL_INFO);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_ITEM_ID);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_TEST_REQUEST);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_NUMBER_OF_TESTS);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_SEND_DATE);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_SEND_DOCTOR);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_IS_DISABLED);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_DISABLE_ID);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_DISABLE_DATE);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_XRAY_NR);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_R_CM_2);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_MTR);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_XRAY_DATE);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_XRAY_TIME);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_RESULTS);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_RESULTS_DATE);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_RESULTS_DOCTOR);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_BILL_NUMBER);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_BILL_STATUS);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_PROCESS_ID);
            $criteria->addSelectColumn(CareTestRequestRadioTableMap::COL_PROCESS_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.xray');
            $criteria->addSelectColumn($alias . '.ct');
            $criteria->addSelectColumn($alias . '.sono');
            $criteria->addSelectColumn($alias . '.mammograph');
            $criteria->addSelectColumn($alias . '.mrt');
            $criteria->addSelectColumn($alias . '.nuclear');
            $criteria->addSelectColumn($alias . '.if_patmobile');
            $criteria->addSelectColumn($alias . '.if_allergy');
            $criteria->addSelectColumn($alias . '.if_hyperten');
            $criteria->addSelectColumn($alias . '.if_pregnant');
            $criteria->addSelectColumn($alias . '.clinical_info');
            $criteria->addSelectColumn($alias . '.item_id');
            $criteria->addSelectColumn($alias . '.test_request');
            $criteria->addSelectColumn($alias . '.number_of_tests');
            $criteria->addSelectColumn($alias . '.send_date');
            $criteria->addSelectColumn($alias . '.send_doctor');
            $criteria->addSelectColumn($alias . '.is_disabled');
            $criteria->addSelectColumn($alias . '.disable_id');
            $criteria->addSelectColumn($alias . '.disable_date');
            $criteria->addSelectColumn($alias . '.xray_nr');
            $criteria->addSelectColumn($alias . '.r_cm_2');
            $criteria->addSelectColumn($alias . '.mtr');
            $criteria->addSelectColumn($alias . '.xray_date');
            $criteria->addSelectColumn($alias . '.xray_time');
            $criteria->addSelectColumn($alias . '.results');
            $criteria->addSelectColumn($alias . '.results_date');
            $criteria->addSelectColumn($alias . '.results_doctor');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.bill_number');
            $criteria->addSelectColumn($alias . '.bill_status');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.process_id');
            $criteria->addSelectColumn($alias . '.process_time');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestRequestRadioTableMap::DATABASE_NAME)->getTable(CareTestRequestRadioTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestRequestRadioTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestRequestRadioTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestRequestRadioTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestRequestRadio or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestRequestRadio object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestRadioTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestRequestRadio) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestRequestRadioTableMap::DATABASE_NAME);
            $criteria->add(CareTestRequestRadioTableMap::COL_BATCH_NR, (array) $values, Criteria::IN);
        }

        $query = CareTestRequestRadioQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestRequestRadioTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestRequestRadioTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_request_radio table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestRequestRadioQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestRequestRadio or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestRequestRadio object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestRadioTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestRequestRadio object
        }


        // Set the correct dbName
        $query = CareTestRequestRadioQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestRequestRadioTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestRequestRadioTableMap::buildTableMap();
