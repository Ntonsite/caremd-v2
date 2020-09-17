<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestRequestPatho;
use CareMd\CareMd\CareTestRequestPathoQuery;
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
 * This class defines the structure of the 'care_test_request_patho' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestRequestPathoTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestRequestPathoTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_request_patho';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestRequestPatho';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestRequestPatho';

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
    const COL_BATCH_NR = 'care_test_request_patho.batch_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_request_patho.encounter_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_test_request_patho.dept_nr';

    /**
     * the column name for the quick_cut field
     */
    const COL_QUICK_CUT = 'care_test_request_patho.quick_cut';

    /**
     * the column name for the qc_phone field
     */
    const COL_QC_PHONE = 'care_test_request_patho.qc_phone';

    /**
     * the column name for the quick_diagnosis field
     */
    const COL_QUICK_DIAGNOSIS = 'care_test_request_patho.quick_diagnosis';

    /**
     * the column name for the qd_phone field
     */
    const COL_QD_PHONE = 'care_test_request_patho.qd_phone';

    /**
     * the column name for the material_type field
     */
    const COL_MATERIAL_TYPE = 'care_test_request_patho.material_type';

    /**
     * the column name for the material_desc field
     */
    const COL_MATERIAL_DESC = 'care_test_request_patho.material_desc';

    /**
     * the column name for the localization field
     */
    const COL_LOCALIZATION = 'care_test_request_patho.localization';

    /**
     * the column name for the clinical_note field
     */
    const COL_CLINICAL_NOTE = 'care_test_request_patho.clinical_note';

    /**
     * the column name for the extra_note field
     */
    const COL_EXTRA_NOTE = 'care_test_request_patho.extra_note';

    /**
     * the column name for the repeat_note field
     */
    const COL_REPEAT_NOTE = 'care_test_request_patho.repeat_note';

    /**
     * the column name for the gyn_last_period field
     */
    const COL_GYN_LAST_PERIOD = 'care_test_request_patho.gyn_last_period';

    /**
     * the column name for the gyn_period_type field
     */
    const COL_GYN_PERIOD_TYPE = 'care_test_request_patho.gyn_period_type';

    /**
     * the column name for the gyn_gravida field
     */
    const COL_GYN_GRAVIDA = 'care_test_request_patho.gyn_gravida';

    /**
     * the column name for the gyn_menopause_since field
     */
    const COL_GYN_MENOPAUSE_SINCE = 'care_test_request_patho.gyn_menopause_since';

    /**
     * the column name for the gyn_hysterectomy field
     */
    const COL_GYN_HYSTERECTOMY = 'care_test_request_patho.gyn_hysterectomy';

    /**
     * the column name for the gyn_contraceptive field
     */
    const COL_GYN_CONTRACEPTIVE = 'care_test_request_patho.gyn_contraceptive';

    /**
     * the column name for the gyn_iud field
     */
    const COL_GYN_IUD = 'care_test_request_patho.gyn_iud';

    /**
     * the column name for the gyn_hormone_therapy field
     */
    const COL_GYN_HORMONE_THERAPY = 'care_test_request_patho.gyn_hormone_therapy';

    /**
     * the column name for the doctor_sign field
     */
    const COL_DOCTOR_SIGN = 'care_test_request_patho.doctor_sign';

    /**
     * the column name for the op_date field
     */
    const COL_OP_DATE = 'care_test_request_patho.op_date';

    /**
     * the column name for the send_date field
     */
    const COL_SEND_DATE = 'care_test_request_patho.send_date';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_request_patho.status';

    /**
     * the column name for the entry_date field
     */
    const COL_ENTRY_DATE = 'care_test_request_patho.entry_date';

    /**
     * the column name for the journal_nr field
     */
    const COL_JOURNAL_NR = 'care_test_request_patho.journal_nr';

    /**
     * the column name for the blocks_nr field
     */
    const COL_BLOCKS_NR = 'care_test_request_patho.blocks_nr';

    /**
     * the column name for the deep_cuts field
     */
    const COL_DEEP_CUTS = 'care_test_request_patho.deep_cuts';

    /**
     * the column name for the special_dye field
     */
    const COL_SPECIAL_DYE = 'care_test_request_patho.special_dye';

    /**
     * the column name for the immune_histochem field
     */
    const COL_IMMUNE_HISTOCHEM = 'care_test_request_patho.immune_histochem';

    /**
     * the column name for the hormone_receptors field
     */
    const COL_HORMONE_RECEPTORS = 'care_test_request_patho.hormone_receptors';

    /**
     * the column name for the specials field
     */
    const COL_SPECIALS = 'care_test_request_patho.specials';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_request_patho.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_request_patho.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_request_patho.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_request_patho.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_request_patho.create_time';

    /**
     * the column name for the process_id field
     */
    const COL_PROCESS_ID = 'care_test_request_patho.process_id';

    /**
     * the column name for the process_time field
     */
    const COL_PROCESS_TIME = 'care_test_request_patho.process_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'EncounterNr', 'DeptNr', 'QuickCut', 'QcPhone', 'QuickDiagnosis', 'QdPhone', 'MaterialType', 'MaterialDesc', 'Localization', 'ClinicalNote', 'ExtraNote', 'RepeatNote', 'GynLastPeriod', 'GynPeriodType', 'GynGravida', 'GynMenopauseSince', 'GynHysterectomy', 'GynContraceptive', 'GynIud', 'GynHormoneTherapy', 'DoctorSign', 'OpDate', 'SendDate', 'Status', 'EntryDate', 'JournalNr', 'BlocksNr', 'DeepCuts', 'SpecialDye', 'ImmuneHistochem', 'HormoneReceptors', 'Specials', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'ProcessId', 'ProcessTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'encounterNr', 'deptNr', 'quickCut', 'qcPhone', 'quickDiagnosis', 'qdPhone', 'materialType', 'materialDesc', 'localization', 'clinicalNote', 'extraNote', 'repeatNote', 'gynLastPeriod', 'gynPeriodType', 'gynGravida', 'gynMenopauseSince', 'gynHysterectomy', 'gynContraceptive', 'gynIud', 'gynHormoneTherapy', 'doctorSign', 'opDate', 'sendDate', 'status', 'entryDate', 'journalNr', 'blocksNr', 'deepCuts', 'specialDye', 'immuneHistochem', 'hormoneReceptors', 'specials', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', 'processId', 'processTime', ),
        self::TYPE_COLNAME       => array(CareTestRequestPathoTableMap::COL_BATCH_NR, CareTestRequestPathoTableMap::COL_ENCOUNTER_NR, CareTestRequestPathoTableMap::COL_DEPT_NR, CareTestRequestPathoTableMap::COL_QUICK_CUT, CareTestRequestPathoTableMap::COL_QC_PHONE, CareTestRequestPathoTableMap::COL_QUICK_DIAGNOSIS, CareTestRequestPathoTableMap::COL_QD_PHONE, CareTestRequestPathoTableMap::COL_MATERIAL_TYPE, CareTestRequestPathoTableMap::COL_MATERIAL_DESC, CareTestRequestPathoTableMap::COL_LOCALIZATION, CareTestRequestPathoTableMap::COL_CLINICAL_NOTE, CareTestRequestPathoTableMap::COL_EXTRA_NOTE, CareTestRequestPathoTableMap::COL_REPEAT_NOTE, CareTestRequestPathoTableMap::COL_GYN_LAST_PERIOD, CareTestRequestPathoTableMap::COL_GYN_PERIOD_TYPE, CareTestRequestPathoTableMap::COL_GYN_GRAVIDA, CareTestRequestPathoTableMap::COL_GYN_MENOPAUSE_SINCE, CareTestRequestPathoTableMap::COL_GYN_HYSTERECTOMY, CareTestRequestPathoTableMap::COL_GYN_CONTRACEPTIVE, CareTestRequestPathoTableMap::COL_GYN_IUD, CareTestRequestPathoTableMap::COL_GYN_HORMONE_THERAPY, CareTestRequestPathoTableMap::COL_DOCTOR_SIGN, CareTestRequestPathoTableMap::COL_OP_DATE, CareTestRequestPathoTableMap::COL_SEND_DATE, CareTestRequestPathoTableMap::COL_STATUS, CareTestRequestPathoTableMap::COL_ENTRY_DATE, CareTestRequestPathoTableMap::COL_JOURNAL_NR, CareTestRequestPathoTableMap::COL_BLOCKS_NR, CareTestRequestPathoTableMap::COL_DEEP_CUTS, CareTestRequestPathoTableMap::COL_SPECIAL_DYE, CareTestRequestPathoTableMap::COL_IMMUNE_HISTOCHEM, CareTestRequestPathoTableMap::COL_HORMONE_RECEPTORS, CareTestRequestPathoTableMap::COL_SPECIALS, CareTestRequestPathoTableMap::COL_HISTORY, CareTestRequestPathoTableMap::COL_MODIFY_ID, CareTestRequestPathoTableMap::COL_MODIFY_TIME, CareTestRequestPathoTableMap::COL_CREATE_ID, CareTestRequestPathoTableMap::COL_CREATE_TIME, CareTestRequestPathoTableMap::COL_PROCESS_ID, CareTestRequestPathoTableMap::COL_PROCESS_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'encounter_nr', 'dept_nr', 'quick_cut', 'qc_phone', 'quick_diagnosis', 'qd_phone', 'material_type', 'material_desc', 'localization', 'clinical_note', 'extra_note', 'repeat_note', 'gyn_last_period', 'gyn_period_type', 'gyn_gravida', 'gyn_menopause_since', 'gyn_hysterectomy', 'gyn_contraceptive', 'gyn_iud', 'gyn_hormone_therapy', 'doctor_sign', 'op_date', 'send_date', 'status', 'entry_date', 'journal_nr', 'blocks_nr', 'deep_cuts', 'special_dye', 'immune_histochem', 'hormone_receptors', 'specials', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'process_id', 'process_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'EncounterNr' => 1, 'DeptNr' => 2, 'QuickCut' => 3, 'QcPhone' => 4, 'QuickDiagnosis' => 5, 'QdPhone' => 6, 'MaterialType' => 7, 'MaterialDesc' => 8, 'Localization' => 9, 'ClinicalNote' => 10, 'ExtraNote' => 11, 'RepeatNote' => 12, 'GynLastPeriod' => 13, 'GynPeriodType' => 14, 'GynGravida' => 15, 'GynMenopauseSince' => 16, 'GynHysterectomy' => 17, 'GynContraceptive' => 18, 'GynIud' => 19, 'GynHormoneTherapy' => 20, 'DoctorSign' => 21, 'OpDate' => 22, 'SendDate' => 23, 'Status' => 24, 'EntryDate' => 25, 'JournalNr' => 26, 'BlocksNr' => 27, 'DeepCuts' => 28, 'SpecialDye' => 29, 'ImmuneHistochem' => 30, 'HormoneReceptors' => 31, 'Specials' => 32, 'History' => 33, 'ModifyId' => 34, 'ModifyTime' => 35, 'CreateId' => 36, 'CreateTime' => 37, 'ProcessId' => 38, 'ProcessTime' => 39, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'encounterNr' => 1, 'deptNr' => 2, 'quickCut' => 3, 'qcPhone' => 4, 'quickDiagnosis' => 5, 'qdPhone' => 6, 'materialType' => 7, 'materialDesc' => 8, 'localization' => 9, 'clinicalNote' => 10, 'extraNote' => 11, 'repeatNote' => 12, 'gynLastPeriod' => 13, 'gynPeriodType' => 14, 'gynGravida' => 15, 'gynMenopauseSince' => 16, 'gynHysterectomy' => 17, 'gynContraceptive' => 18, 'gynIud' => 19, 'gynHormoneTherapy' => 20, 'doctorSign' => 21, 'opDate' => 22, 'sendDate' => 23, 'status' => 24, 'entryDate' => 25, 'journalNr' => 26, 'blocksNr' => 27, 'deepCuts' => 28, 'specialDye' => 29, 'immuneHistochem' => 30, 'hormoneReceptors' => 31, 'specials' => 32, 'history' => 33, 'modifyId' => 34, 'modifyTime' => 35, 'createId' => 36, 'createTime' => 37, 'processId' => 38, 'processTime' => 39, ),
        self::TYPE_COLNAME       => array(CareTestRequestPathoTableMap::COL_BATCH_NR => 0, CareTestRequestPathoTableMap::COL_ENCOUNTER_NR => 1, CareTestRequestPathoTableMap::COL_DEPT_NR => 2, CareTestRequestPathoTableMap::COL_QUICK_CUT => 3, CareTestRequestPathoTableMap::COL_QC_PHONE => 4, CareTestRequestPathoTableMap::COL_QUICK_DIAGNOSIS => 5, CareTestRequestPathoTableMap::COL_QD_PHONE => 6, CareTestRequestPathoTableMap::COL_MATERIAL_TYPE => 7, CareTestRequestPathoTableMap::COL_MATERIAL_DESC => 8, CareTestRequestPathoTableMap::COL_LOCALIZATION => 9, CareTestRequestPathoTableMap::COL_CLINICAL_NOTE => 10, CareTestRequestPathoTableMap::COL_EXTRA_NOTE => 11, CareTestRequestPathoTableMap::COL_REPEAT_NOTE => 12, CareTestRequestPathoTableMap::COL_GYN_LAST_PERIOD => 13, CareTestRequestPathoTableMap::COL_GYN_PERIOD_TYPE => 14, CareTestRequestPathoTableMap::COL_GYN_GRAVIDA => 15, CareTestRequestPathoTableMap::COL_GYN_MENOPAUSE_SINCE => 16, CareTestRequestPathoTableMap::COL_GYN_HYSTERECTOMY => 17, CareTestRequestPathoTableMap::COL_GYN_CONTRACEPTIVE => 18, CareTestRequestPathoTableMap::COL_GYN_IUD => 19, CareTestRequestPathoTableMap::COL_GYN_HORMONE_THERAPY => 20, CareTestRequestPathoTableMap::COL_DOCTOR_SIGN => 21, CareTestRequestPathoTableMap::COL_OP_DATE => 22, CareTestRequestPathoTableMap::COL_SEND_DATE => 23, CareTestRequestPathoTableMap::COL_STATUS => 24, CareTestRequestPathoTableMap::COL_ENTRY_DATE => 25, CareTestRequestPathoTableMap::COL_JOURNAL_NR => 26, CareTestRequestPathoTableMap::COL_BLOCKS_NR => 27, CareTestRequestPathoTableMap::COL_DEEP_CUTS => 28, CareTestRequestPathoTableMap::COL_SPECIAL_DYE => 29, CareTestRequestPathoTableMap::COL_IMMUNE_HISTOCHEM => 30, CareTestRequestPathoTableMap::COL_HORMONE_RECEPTORS => 31, CareTestRequestPathoTableMap::COL_SPECIALS => 32, CareTestRequestPathoTableMap::COL_HISTORY => 33, CareTestRequestPathoTableMap::COL_MODIFY_ID => 34, CareTestRequestPathoTableMap::COL_MODIFY_TIME => 35, CareTestRequestPathoTableMap::COL_CREATE_ID => 36, CareTestRequestPathoTableMap::COL_CREATE_TIME => 37, CareTestRequestPathoTableMap::COL_PROCESS_ID => 38, CareTestRequestPathoTableMap::COL_PROCESS_TIME => 39, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'encounter_nr' => 1, 'dept_nr' => 2, 'quick_cut' => 3, 'qc_phone' => 4, 'quick_diagnosis' => 5, 'qd_phone' => 6, 'material_type' => 7, 'material_desc' => 8, 'localization' => 9, 'clinical_note' => 10, 'extra_note' => 11, 'repeat_note' => 12, 'gyn_last_period' => 13, 'gyn_period_type' => 14, 'gyn_gravida' => 15, 'gyn_menopause_since' => 16, 'gyn_hysterectomy' => 17, 'gyn_contraceptive' => 18, 'gyn_iud' => 19, 'gyn_hormone_therapy' => 20, 'doctor_sign' => 21, 'op_date' => 22, 'send_date' => 23, 'status' => 24, 'entry_date' => 25, 'journal_nr' => 26, 'blocks_nr' => 27, 'deep_cuts' => 28, 'special_dye' => 29, 'immune_histochem' => 30, 'hormone_receptors' => 31, 'specials' => 32, 'history' => 33, 'modify_id' => 34, 'modify_time' => 35, 'create_id' => 36, 'create_time' => 37, 'process_id' => 38, 'process_time' => 39, ),
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
        $this->setName('care_test_request_patho');
        $this->setPhpName('CareTestRequestPatho');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestRequestPatho');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('quick_cut', 'QuickCut', 'TINYINT', true, null, 0);
        $this->addColumn('qc_phone', 'QcPhone', 'VARCHAR', true, 40, '');
        $this->addColumn('quick_diagnosis', 'QuickDiagnosis', 'TINYINT', true, null, 0);
        $this->addColumn('qd_phone', 'QdPhone', 'VARCHAR', true, 40, '');
        $this->addColumn('material_type', 'MaterialType', 'VARCHAR', true, 25, '');
        $this->addColumn('material_desc', 'MaterialDesc', 'LONGVARCHAR', true, null, null);
        $this->addColumn('localization', 'Localization', 'VARCHAR', true, 255, null);
        $this->addColumn('clinical_note', 'ClinicalNote', 'VARCHAR', true, 255, null);
        $this->addColumn('extra_note', 'ExtraNote', 'VARCHAR', true, 255, null);
        $this->addColumn('repeat_note', 'RepeatNote', 'VARCHAR', true, 255, null);
        $this->addColumn('gyn_last_period', 'GynLastPeriod', 'VARCHAR', true, 25, '');
        $this->addColumn('gyn_period_type', 'GynPeriodType', 'VARCHAR', true, 25, '');
        $this->addColumn('gyn_gravida', 'GynGravida', 'VARCHAR', true, 25, '');
        $this->addColumn('gyn_menopause_since', 'GynMenopauseSince', 'VARCHAR', true, 25, '0');
        $this->addColumn('gyn_hysterectomy', 'GynHysterectomy', 'VARCHAR', true, 25, '0');
        $this->addColumn('gyn_contraceptive', 'GynContraceptive', 'VARCHAR', true, 25, '0');
        $this->addColumn('gyn_iud', 'GynIud', 'VARCHAR', true, 25, '');
        $this->addColumn('gyn_hormone_therapy', 'GynHormoneTherapy', 'VARCHAR', true, 25, '');
        $this->addColumn('doctor_sign', 'DoctorSign', 'VARCHAR', true, 35, '');
        $this->addColumn('op_date', 'OpDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('send_date', 'SendDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 10, '');
        $this->addColumn('entry_date', 'EntryDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('journal_nr', 'JournalNr', 'VARCHAR', true, 15, '');
        $this->addColumn('blocks_nr', 'BlocksNr', 'INTEGER', true, null, 0);
        $this->addColumn('deep_cuts', 'DeepCuts', 'INTEGER', true, null, 0);
        $this->addColumn('special_dye', 'SpecialDye', 'VARCHAR', true, 35, '');
        $this->addColumn('immune_histochem', 'ImmuneHistochem', 'VARCHAR', true, 35, '');
        $this->addColumn('hormone_receptors', 'HormoneReceptors', 'VARCHAR', true, 35, '');
        $this->addColumn('specials', 'Specials', 'VARCHAR', true, 35, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('process_id', 'ProcessId', 'VARCHAR', true, 35, '');
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
        return $withPrefix ? CareTestRequestPathoTableMap::CLASS_DEFAULT : CareTestRequestPathoTableMap::OM_CLASS;
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
     * @return array           (CareTestRequestPatho object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestRequestPathoTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestRequestPathoTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestRequestPathoTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestRequestPathoTableMap::OM_CLASS;
            /** @var CareTestRequestPatho $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestRequestPathoTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestRequestPathoTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestRequestPathoTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestRequestPatho $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestRequestPathoTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_QUICK_CUT);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_QC_PHONE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_QUICK_DIAGNOSIS);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_QD_PHONE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_MATERIAL_TYPE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_MATERIAL_DESC);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_LOCALIZATION);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_CLINICAL_NOTE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_EXTRA_NOTE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_REPEAT_NOTE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_GYN_LAST_PERIOD);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_GYN_PERIOD_TYPE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_GYN_GRAVIDA);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_GYN_MENOPAUSE_SINCE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_GYN_HYSTERECTOMY);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_GYN_CONTRACEPTIVE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_GYN_IUD);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_GYN_HORMONE_THERAPY);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_DOCTOR_SIGN);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_OP_DATE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_SEND_DATE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_ENTRY_DATE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_JOURNAL_NR);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_BLOCKS_NR);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_DEEP_CUTS);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_SPECIAL_DYE);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_IMMUNE_HISTOCHEM);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_HORMONE_RECEPTORS);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_SPECIALS);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_PROCESS_ID);
            $criteria->addSelectColumn(CareTestRequestPathoTableMap::COL_PROCESS_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.quick_cut');
            $criteria->addSelectColumn($alias . '.qc_phone');
            $criteria->addSelectColumn($alias . '.quick_diagnosis');
            $criteria->addSelectColumn($alias . '.qd_phone');
            $criteria->addSelectColumn($alias . '.material_type');
            $criteria->addSelectColumn($alias . '.material_desc');
            $criteria->addSelectColumn($alias . '.localization');
            $criteria->addSelectColumn($alias . '.clinical_note');
            $criteria->addSelectColumn($alias . '.extra_note');
            $criteria->addSelectColumn($alias . '.repeat_note');
            $criteria->addSelectColumn($alias . '.gyn_last_period');
            $criteria->addSelectColumn($alias . '.gyn_period_type');
            $criteria->addSelectColumn($alias . '.gyn_gravida');
            $criteria->addSelectColumn($alias . '.gyn_menopause_since');
            $criteria->addSelectColumn($alias . '.gyn_hysterectomy');
            $criteria->addSelectColumn($alias . '.gyn_contraceptive');
            $criteria->addSelectColumn($alias . '.gyn_iud');
            $criteria->addSelectColumn($alias . '.gyn_hormone_therapy');
            $criteria->addSelectColumn($alias . '.doctor_sign');
            $criteria->addSelectColumn($alias . '.op_date');
            $criteria->addSelectColumn($alias . '.send_date');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.entry_date');
            $criteria->addSelectColumn($alias . '.journal_nr');
            $criteria->addSelectColumn($alias . '.blocks_nr');
            $criteria->addSelectColumn($alias . '.deep_cuts');
            $criteria->addSelectColumn($alias . '.special_dye');
            $criteria->addSelectColumn($alias . '.immune_histochem');
            $criteria->addSelectColumn($alias . '.hormone_receptors');
            $criteria->addSelectColumn($alias . '.specials');
            $criteria->addSelectColumn($alias . '.history');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestRequestPathoTableMap::DATABASE_NAME)->getTable(CareTestRequestPathoTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestRequestPathoTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestRequestPathoTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestRequestPathoTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestRequestPatho or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestRequestPatho object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestPathoTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestRequestPatho) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestRequestPathoTableMap::DATABASE_NAME);
            $criteria->add(CareTestRequestPathoTableMap::COL_BATCH_NR, (array) $values, Criteria::IN);
        }

        $query = CareTestRequestPathoQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestRequestPathoTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestRequestPathoTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_request_patho table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestRequestPathoQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestRequestPatho or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestRequestPatho object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestPathoTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestRequestPatho object
        }

        if ($criteria->containsKey(CareTestRequestPathoTableMap::COL_BATCH_NR) && $criteria->keyContainsValue(CareTestRequestPathoTableMap::COL_BATCH_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestRequestPathoTableMap::COL_BATCH_NR.')');
        }


        // Set the correct dbName
        $query = CareTestRequestPathoQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestRequestPathoTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestRequestPathoTableMap::buildTableMap();
