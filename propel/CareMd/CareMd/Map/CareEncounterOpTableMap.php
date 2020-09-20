<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterOp;
use CareMd\CareMd\CareEncounterOpQuery;
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
 * This class defines the structure of the 'care_encounter_op' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterOpTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterOpTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_op';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterOp';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterOp';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 41;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 41;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_encounter_op.nr';

    /**
     * the column name for the year field
     */
    const COL_YEAR = 'care_encounter_op.year';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_encounter_op.dept_nr';

    /**
     * the column name for the op_room field
     */
    const COL_OP_ROOM = 'care_encounter_op.op_room';

    /**
     * the column name for the op_nr field
     */
    const COL_OP_NR = 'care_encounter_op.op_nr';

    /**
     * the column name for the op_date field
     */
    const COL_OP_DATE = 'care_encounter_op.op_date';

    /**
     * the column name for the op_src_date field
     */
    const COL_OP_SRC_DATE = 'care_encounter_op.op_src_date';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_op.encounter_nr';

    /**
     * the column name for the diagnosis field
     */
    const COL_DIAGNOSIS = 'care_encounter_op.diagnosis';

    /**
     * the column name for the operator field
     */
    const COL_OPERATOR = 'care_encounter_op.operator';

    /**
     * the column name for the assistant field
     */
    const COL_ASSISTANT = 'care_encounter_op.assistant';

    /**
     * the column name for the scrub_nurse field
     */
    const COL_SCRUB_NURSE = 'care_encounter_op.scrub_nurse';

    /**
     * the column name for the rotating_nurse field
     */
    const COL_ROTATING_NURSE = 'care_encounter_op.rotating_nurse';

    /**
     * the column name for the anesthesia field
     */
    const COL_ANESTHESIA = 'care_encounter_op.anesthesia';

    /**
     * the column name for the an_doctor field
     */
    const COL_AN_DOCTOR = 'care_encounter_op.an_doctor';

    /**
     * the column name for the op_therapy field
     */
    const COL_OP_THERAPY = 'care_encounter_op.op_therapy';

    /**
     * the column name for the result_info field
     */
    const COL_RESULT_INFO = 'care_encounter_op.result_info';

    /**
     * the column name for the entry_time field
     */
    const COL_ENTRY_TIME = 'care_encounter_op.entry_time';

    /**
     * the column name for the cut_time field
     */
    const COL_CUT_TIME = 'care_encounter_op.cut_time';

    /**
     * the column name for the close_time field
     */
    const COL_CLOSE_TIME = 'care_encounter_op.close_time';

    /**
     * the column name for the exit_time field
     */
    const COL_EXIT_TIME = 'care_encounter_op.exit_time';

    /**
     * the column name for the entry_out field
     */
    const COL_ENTRY_OUT = 'care_encounter_op.entry_out';

    /**
     * the column name for the cut_close field
     */
    const COL_CUT_CLOSE = 'care_encounter_op.cut_close';

    /**
     * the column name for the wait_time field
     */
    const COL_WAIT_TIME = 'care_encounter_op.wait_time';

    /**
     * the column name for the bandage_time field
     */
    const COL_BANDAGE_TIME = 'care_encounter_op.bandage_time';

    /**
     * the column name for the repos_time field
     */
    const COL_REPOS_TIME = 'care_encounter_op.repos_time';

    /**
     * the column name for the encoding field
     */
    const COL_ENCODING = 'care_encounter_op.encoding';

    /**
     * the column name for the doc_date field
     */
    const COL_DOC_DATE = 'care_encounter_op.doc_date';

    /**
     * the column name for the doc_time field
     */
    const COL_DOC_TIME = 'care_encounter_op.doc_time';

    /**
     * the column name for the duty_type field
     */
    const COL_DUTY_TYPE = 'care_encounter_op.duty_type';

    /**
     * the column name for the material_codedlist field
     */
    const COL_MATERIAL_CODEDLIST = 'care_encounter_op.material_codedlist';

    /**
     * the column name for the container_codedlist field
     */
    const COL_CONTAINER_CODEDLIST = 'care_encounter_op.container_codedlist';

    /**
     * the column name for the icd_code field
     */
    const COL_ICD_CODE = 'care_encounter_op.icd_code';

    /**
     * the column name for the ops_code field
     */
    const COL_OPS_CODE = 'care_encounter_op.ops_code';

    /**
     * the column name for the ops_intern_code field
     */
    const COL_OPS_INTERN_CODE = 'care_encounter_op.ops_intern_code';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_op.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_op.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_op.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_op.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_op.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_op.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'Year', 'DeptNr', 'OpRoom', 'OpNr', 'OpDate', 'OpSrcDate', 'EncounterNr', 'Diagnosis', 'Operator', 'Assistant', 'ScrubNurse', 'RotatingNurse', 'Anesthesia', 'AnDoctor', 'OpTherapy', 'ResultInfo', 'EntryTime', 'CutTime', 'CloseTime', 'ExitTime', 'EntryOut', 'CutClose', 'WaitTime', 'BandageTime', 'ReposTime', 'Encoding', 'DocDate', 'DocTime', 'DutyType', 'MaterialCodedlist', 'ContainerCodedlist', 'IcdCode', 'OpsCode', 'OpsInternCode', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'year', 'deptNr', 'opRoom', 'opNr', 'opDate', 'opSrcDate', 'encounterNr', 'diagnosis', 'operator', 'assistant', 'scrubNurse', 'rotatingNurse', 'anesthesia', 'anDoctor', 'opTherapy', 'resultInfo', 'entryTime', 'cutTime', 'closeTime', 'exitTime', 'entryOut', 'cutClose', 'waitTime', 'bandageTime', 'reposTime', 'encoding', 'docDate', 'docTime', 'dutyType', 'materialCodedlist', 'containerCodedlist', 'icdCode', 'opsCode', 'opsInternCode', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterOpTableMap::COL_NR, CareEncounterOpTableMap::COL_YEAR, CareEncounterOpTableMap::COL_DEPT_NR, CareEncounterOpTableMap::COL_OP_ROOM, CareEncounterOpTableMap::COL_OP_NR, CareEncounterOpTableMap::COL_OP_DATE, CareEncounterOpTableMap::COL_OP_SRC_DATE, CareEncounterOpTableMap::COL_ENCOUNTER_NR, CareEncounterOpTableMap::COL_DIAGNOSIS, CareEncounterOpTableMap::COL_OPERATOR, CareEncounterOpTableMap::COL_ASSISTANT, CareEncounterOpTableMap::COL_SCRUB_NURSE, CareEncounterOpTableMap::COL_ROTATING_NURSE, CareEncounterOpTableMap::COL_ANESTHESIA, CareEncounterOpTableMap::COL_AN_DOCTOR, CareEncounterOpTableMap::COL_OP_THERAPY, CareEncounterOpTableMap::COL_RESULT_INFO, CareEncounterOpTableMap::COL_ENTRY_TIME, CareEncounterOpTableMap::COL_CUT_TIME, CareEncounterOpTableMap::COL_CLOSE_TIME, CareEncounterOpTableMap::COL_EXIT_TIME, CareEncounterOpTableMap::COL_ENTRY_OUT, CareEncounterOpTableMap::COL_CUT_CLOSE, CareEncounterOpTableMap::COL_WAIT_TIME, CareEncounterOpTableMap::COL_BANDAGE_TIME, CareEncounterOpTableMap::COL_REPOS_TIME, CareEncounterOpTableMap::COL_ENCODING, CareEncounterOpTableMap::COL_DOC_DATE, CareEncounterOpTableMap::COL_DOC_TIME, CareEncounterOpTableMap::COL_DUTY_TYPE, CareEncounterOpTableMap::COL_MATERIAL_CODEDLIST, CareEncounterOpTableMap::COL_CONTAINER_CODEDLIST, CareEncounterOpTableMap::COL_ICD_CODE, CareEncounterOpTableMap::COL_OPS_CODE, CareEncounterOpTableMap::COL_OPS_INTERN_CODE, CareEncounterOpTableMap::COL_STATUS, CareEncounterOpTableMap::COL_HISTORY, CareEncounterOpTableMap::COL_MODIFY_ID, CareEncounterOpTableMap::COL_MODIFY_TIME, CareEncounterOpTableMap::COL_CREATE_ID, CareEncounterOpTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'year', 'dept_nr', 'op_room', 'op_nr', 'op_date', 'op_src_date', 'encounter_nr', 'diagnosis', 'operator', 'assistant', 'scrub_nurse', 'rotating_nurse', 'anesthesia', 'an_doctor', 'op_therapy', 'result_info', 'entry_time', 'cut_time', 'close_time', 'exit_time', 'entry_out', 'cut_close', 'wait_time', 'bandage_time', 'repos_time', 'encoding', 'doc_date', 'doc_time', 'duty_type', 'material_codedlist', 'container_codedlist', 'icd_code', 'ops_code', 'ops_intern_code', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'Year' => 1, 'DeptNr' => 2, 'OpRoom' => 3, 'OpNr' => 4, 'OpDate' => 5, 'OpSrcDate' => 6, 'EncounterNr' => 7, 'Diagnosis' => 8, 'Operator' => 9, 'Assistant' => 10, 'ScrubNurse' => 11, 'RotatingNurse' => 12, 'Anesthesia' => 13, 'AnDoctor' => 14, 'OpTherapy' => 15, 'ResultInfo' => 16, 'EntryTime' => 17, 'CutTime' => 18, 'CloseTime' => 19, 'ExitTime' => 20, 'EntryOut' => 21, 'CutClose' => 22, 'WaitTime' => 23, 'BandageTime' => 24, 'ReposTime' => 25, 'Encoding' => 26, 'DocDate' => 27, 'DocTime' => 28, 'DutyType' => 29, 'MaterialCodedlist' => 30, 'ContainerCodedlist' => 31, 'IcdCode' => 32, 'OpsCode' => 33, 'OpsInternCode' => 34, 'Status' => 35, 'History' => 36, 'ModifyId' => 37, 'ModifyTime' => 38, 'CreateId' => 39, 'CreateTime' => 40, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'year' => 1, 'deptNr' => 2, 'opRoom' => 3, 'opNr' => 4, 'opDate' => 5, 'opSrcDate' => 6, 'encounterNr' => 7, 'diagnosis' => 8, 'operator' => 9, 'assistant' => 10, 'scrubNurse' => 11, 'rotatingNurse' => 12, 'anesthesia' => 13, 'anDoctor' => 14, 'opTherapy' => 15, 'resultInfo' => 16, 'entryTime' => 17, 'cutTime' => 18, 'closeTime' => 19, 'exitTime' => 20, 'entryOut' => 21, 'cutClose' => 22, 'waitTime' => 23, 'bandageTime' => 24, 'reposTime' => 25, 'encoding' => 26, 'docDate' => 27, 'docTime' => 28, 'dutyType' => 29, 'materialCodedlist' => 30, 'containerCodedlist' => 31, 'icdCode' => 32, 'opsCode' => 33, 'opsInternCode' => 34, 'status' => 35, 'history' => 36, 'modifyId' => 37, 'modifyTime' => 38, 'createId' => 39, 'createTime' => 40, ),
        self::TYPE_COLNAME       => array(CareEncounterOpTableMap::COL_NR => 0, CareEncounterOpTableMap::COL_YEAR => 1, CareEncounterOpTableMap::COL_DEPT_NR => 2, CareEncounterOpTableMap::COL_OP_ROOM => 3, CareEncounterOpTableMap::COL_OP_NR => 4, CareEncounterOpTableMap::COL_OP_DATE => 5, CareEncounterOpTableMap::COL_OP_SRC_DATE => 6, CareEncounterOpTableMap::COL_ENCOUNTER_NR => 7, CareEncounterOpTableMap::COL_DIAGNOSIS => 8, CareEncounterOpTableMap::COL_OPERATOR => 9, CareEncounterOpTableMap::COL_ASSISTANT => 10, CareEncounterOpTableMap::COL_SCRUB_NURSE => 11, CareEncounterOpTableMap::COL_ROTATING_NURSE => 12, CareEncounterOpTableMap::COL_ANESTHESIA => 13, CareEncounterOpTableMap::COL_AN_DOCTOR => 14, CareEncounterOpTableMap::COL_OP_THERAPY => 15, CareEncounterOpTableMap::COL_RESULT_INFO => 16, CareEncounterOpTableMap::COL_ENTRY_TIME => 17, CareEncounterOpTableMap::COL_CUT_TIME => 18, CareEncounterOpTableMap::COL_CLOSE_TIME => 19, CareEncounterOpTableMap::COL_EXIT_TIME => 20, CareEncounterOpTableMap::COL_ENTRY_OUT => 21, CareEncounterOpTableMap::COL_CUT_CLOSE => 22, CareEncounterOpTableMap::COL_WAIT_TIME => 23, CareEncounterOpTableMap::COL_BANDAGE_TIME => 24, CareEncounterOpTableMap::COL_REPOS_TIME => 25, CareEncounterOpTableMap::COL_ENCODING => 26, CareEncounterOpTableMap::COL_DOC_DATE => 27, CareEncounterOpTableMap::COL_DOC_TIME => 28, CareEncounterOpTableMap::COL_DUTY_TYPE => 29, CareEncounterOpTableMap::COL_MATERIAL_CODEDLIST => 30, CareEncounterOpTableMap::COL_CONTAINER_CODEDLIST => 31, CareEncounterOpTableMap::COL_ICD_CODE => 32, CareEncounterOpTableMap::COL_OPS_CODE => 33, CareEncounterOpTableMap::COL_OPS_INTERN_CODE => 34, CareEncounterOpTableMap::COL_STATUS => 35, CareEncounterOpTableMap::COL_HISTORY => 36, CareEncounterOpTableMap::COL_MODIFY_ID => 37, CareEncounterOpTableMap::COL_MODIFY_TIME => 38, CareEncounterOpTableMap::COL_CREATE_ID => 39, CareEncounterOpTableMap::COL_CREATE_TIME => 40, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'year' => 1, 'dept_nr' => 2, 'op_room' => 3, 'op_nr' => 4, 'op_date' => 5, 'op_src_date' => 6, 'encounter_nr' => 7, 'diagnosis' => 8, 'operator' => 9, 'assistant' => 10, 'scrub_nurse' => 11, 'rotating_nurse' => 12, 'anesthesia' => 13, 'an_doctor' => 14, 'op_therapy' => 15, 'result_info' => 16, 'entry_time' => 17, 'cut_time' => 18, 'close_time' => 19, 'exit_time' => 20, 'entry_out' => 21, 'cut_close' => 22, 'wait_time' => 23, 'bandage_time' => 24, 'repos_time' => 25, 'encoding' => 26, 'doc_date' => 27, 'doc_time' => 28, 'duty_type' => 29, 'material_codedlist' => 30, 'container_codedlist' => 31, 'icd_code' => 32, 'ops_code' => 33, 'ops_intern_code' => 34, 'status' => 35, 'history' => 36, 'modify_id' => 37, 'modify_time' => 38, 'create_id' => 39, 'create_time' => 40, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, )
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
        $this->setName('care_encounter_op');
        $this->setPhpName('CareEncounterOp');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterOp');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('year', 'Year', 'VARCHAR', true, 4, '0');
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('op_room', 'OpRoom', 'VARCHAR', true, 10, '0');
        $this->addColumn('op_nr', 'OpNr', 'SMALLINT', true, 9, 0);
        $this->addColumn('op_date', 'OpDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('op_src_date', 'OpSrcDate', 'VARCHAR', true, 8, '');
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('diagnosis', 'Diagnosis', 'LONGVARCHAR', true, null, null);
        $this->addColumn('operator', 'Operator', 'LONGVARCHAR', true, null, null);
        $this->addColumn('assistant', 'Assistant', 'LONGVARCHAR', true, null, null);
        $this->addColumn('scrub_nurse', 'ScrubNurse', 'LONGVARCHAR', true, null, null);
        $this->addColumn('rotating_nurse', 'RotatingNurse', 'LONGVARCHAR', true, null, null);
        $this->addColumn('anesthesia', 'Anesthesia', 'VARCHAR', true, 30, '');
        $this->addColumn('an_doctor', 'AnDoctor', 'LONGVARCHAR', true, null, null);
        $this->addColumn('op_therapy', 'OpTherapy', 'LONGVARCHAR', true, null, null);
        $this->addColumn('result_info', 'ResultInfo', 'LONGVARCHAR', true, null, null);
        $this->addColumn('entry_time', 'EntryTime', 'VARCHAR', true, 5, '');
        $this->addColumn('cut_time', 'CutTime', 'VARCHAR', true, 5, '');
        $this->addColumn('close_time', 'CloseTime', 'VARCHAR', true, 5, '');
        $this->addColumn('exit_time', 'ExitTime', 'VARCHAR', true, 5, '');
        $this->addColumn('entry_out', 'EntryOut', 'LONGVARCHAR', true, null, null);
        $this->addColumn('cut_close', 'CutClose', 'LONGVARCHAR', true, null, null);
        $this->addColumn('wait_time', 'WaitTime', 'LONGVARCHAR', true, null, null);
        $this->addColumn('bandage_time', 'BandageTime', 'LONGVARCHAR', true, null, null);
        $this->addColumn('repos_time', 'ReposTime', 'LONGVARCHAR', true, null, null);
        $this->addColumn('encoding', 'Encoding', 'CLOB', true, null, null);
        $this->addColumn('doc_date', 'DocDate', 'VARCHAR', true, 10, '');
        $this->addColumn('doc_time', 'DocTime', 'VARCHAR', true, 5, '');
        $this->addColumn('duty_type', 'DutyType', 'VARCHAR', true, 15, '');
        $this->addColumn('material_codedlist', 'MaterialCodedlist', 'LONGVARCHAR', true, null, null);
        $this->addColumn('container_codedlist', 'ContainerCodedlist', 'LONGVARCHAR', true, null, null);
        $this->addColumn('icd_code', 'IcdCode', 'LONGVARCHAR', true, null, null);
        $this->addColumn('ops_code', 'OpsCode', 'LONGVARCHAR', true, null, null);
        $this->addColumn('ops_intern_code', 'OpsInternCode', 'LONGVARCHAR', true, null, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareEncounterOpTableMap::CLASS_DEFAULT : CareEncounterOpTableMap::OM_CLASS;
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
     * @return array           (CareEncounterOp object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterOpTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterOpTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterOpTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterOpTableMap::OM_CLASS;
            /** @var CareEncounterOp $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterOpTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterOpTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterOpTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterOp $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterOpTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_NR);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_YEAR);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_OP_ROOM);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_OP_NR);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_OP_DATE);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_OP_SRC_DATE);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_DIAGNOSIS);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_OPERATOR);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_ASSISTANT);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_SCRUB_NURSE);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_ROTATING_NURSE);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_ANESTHESIA);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_AN_DOCTOR);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_OP_THERAPY);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_RESULT_INFO);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_ENTRY_TIME);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_CUT_TIME);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_CLOSE_TIME);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_EXIT_TIME);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_ENTRY_OUT);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_CUT_CLOSE);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_WAIT_TIME);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_BANDAGE_TIME);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_REPOS_TIME);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_ENCODING);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_DOC_DATE);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_DOC_TIME);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_DUTY_TYPE);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_MATERIAL_CODEDLIST);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_CONTAINER_CODEDLIST);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_ICD_CODE);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_OPS_CODE);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_OPS_INTERN_CODE);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterOpTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.year');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.op_room');
            $criteria->addSelectColumn($alias . '.op_nr');
            $criteria->addSelectColumn($alias . '.op_date');
            $criteria->addSelectColumn($alias . '.op_src_date');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.diagnosis');
            $criteria->addSelectColumn($alias . '.operator');
            $criteria->addSelectColumn($alias . '.assistant');
            $criteria->addSelectColumn($alias . '.scrub_nurse');
            $criteria->addSelectColumn($alias . '.rotating_nurse');
            $criteria->addSelectColumn($alias . '.anesthesia');
            $criteria->addSelectColumn($alias . '.an_doctor');
            $criteria->addSelectColumn($alias . '.op_therapy');
            $criteria->addSelectColumn($alias . '.result_info');
            $criteria->addSelectColumn($alias . '.entry_time');
            $criteria->addSelectColumn($alias . '.cut_time');
            $criteria->addSelectColumn($alias . '.close_time');
            $criteria->addSelectColumn($alias . '.exit_time');
            $criteria->addSelectColumn($alias . '.entry_out');
            $criteria->addSelectColumn($alias . '.cut_close');
            $criteria->addSelectColumn($alias . '.wait_time');
            $criteria->addSelectColumn($alias . '.bandage_time');
            $criteria->addSelectColumn($alias . '.repos_time');
            $criteria->addSelectColumn($alias . '.encoding');
            $criteria->addSelectColumn($alias . '.doc_date');
            $criteria->addSelectColumn($alias . '.doc_time');
            $criteria->addSelectColumn($alias . '.duty_type');
            $criteria->addSelectColumn($alias . '.material_codedlist');
            $criteria->addSelectColumn($alias . '.container_codedlist');
            $criteria->addSelectColumn($alias . '.icd_code');
            $criteria->addSelectColumn($alias . '.ops_code');
            $criteria->addSelectColumn($alias . '.ops_intern_code');
            $criteria->addSelectColumn($alias . '.status');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterOpTableMap::DATABASE_NAME)->getTable(CareEncounterOpTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterOpTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterOpTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterOpTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterOp or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterOp object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterOpTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterOp) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterOpTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterOpTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterOpQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterOpTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterOpTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_op table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterOpQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterOp or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterOp object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterOpTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterOp object
        }

        if ($criteria->containsKey(CareEncounterOpTableMap::COL_NR) && $criteria->keyContainsValue(CareEncounterOpTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterOpTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterOpQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterOpTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterOpTableMap::buildTableMap();
