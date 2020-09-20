<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterPrescription;
use CareMd\CareMd\CareEncounterPrescriptionQuery;
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
 * This class defines the structure of the 'care_encounter_prescription' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterPrescriptionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterPrescriptionTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_prescription';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterPrescription';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterPrescription';

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
     * the column name for the nr field
     */
    const COL_NR = 'care_encounter_prescription.nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_prescription.encounter_nr';

    /**
     * the column name for the prescription_type_nr field
     */
    const COL_PRESCRIPTION_TYPE_NR = 'care_encounter_prescription.prescription_type_nr';

    /**
     * the column name for the article field
     */
    const COL_ARTICLE = 'care_encounter_prescription.article';

    /**
     * the column name for the article_item_number field
     */
    const COL_ARTICLE_ITEM_NUMBER = 'care_encounter_prescription.article_item_number';

    /**
     * the column name for the partcode field
     */
    const COL_PARTCODE = 'care_encounter_prescription.partcode';

    /**
     * the column name for the mark_os field
     */
    const COL_MARK_OS = 'care_encounter_prescription.mark_os';

    /**
     * the column name for the materialcost field
     */
    const COL_MATERIALCOST = 'care_encounter_prescription.materialcost';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'care_encounter_prescription.price';

    /**
     * the column name for the drug_class field
     */
    const COL_DRUG_CLASS = 'care_encounter_prescription.drug_class';

    /**
     * the column name for the order_nr field
     */
    const COL_ORDER_NR = 'care_encounter_prescription.order_nr';

    /**
     * the column name for the dosage field
     */
    const COL_DOSAGE = 'care_encounter_prescription.dosage';

    /**
     * the column name for the times_per_day field
     */
    const COL_TIMES_PER_DAY = 'care_encounter_prescription.times_per_day';

    /**
     * the column name for the days field
     */
    const COL_DAYS = 'care_encounter_prescription.days';

    /**
     * the column name for the total_dosage field
     */
    const COL_TOTAL_DOSAGE = 'care_encounter_prescription.total_dosage';

    /**
     * the column name for the application_type_nr field
     */
    const COL_APPLICATION_TYPE_NR = 'care_encounter_prescription.application_type_nr';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_encounter_prescription.notes';

    /**
     * the column name for the prescribe_date field
     */
    const COL_PRESCRIBE_DATE = 'care_encounter_prescription.prescribe_date';

    /**
     * the column name for the prescriber field
     */
    const COL_PRESCRIBER = 'care_encounter_prescription.prescriber';

    /**
     * the column name for the taken field
     */
    const COL_TAKEN = 'care_encounter_prescription.taken';

    /**
     * the column name for the color_marker field
     */
    const COL_COLOR_MARKER = 'care_encounter_prescription.color_marker';

    /**
     * the column name for the is_stopped field
     */
    const COL_IS_STOPPED = 'care_encounter_prescription.is_stopped';

    /**
     * the column name for the is_outpatient_prescription field
     */
    const COL_IS_OUTPATIENT_PRESCRIPTION = 'care_encounter_prescription.is_outpatient_prescription';

    /**
     * the column name for the issuer field
     */
    const COL_ISSUER = 'care_encounter_prescription.issuer';

    /**
     * the column name for the issue_date field
     */
    const COL_ISSUE_DATE = 'care_encounter_prescription.issue_date';

    /**
     * the column name for the is_disabled field
     */
    const COL_IS_DISABLED = 'care_encounter_prescription.is_disabled';

    /**
     * the column name for the disable_id field
     */
    const COL_DISABLE_ID = 'care_encounter_prescription.disable_id';

    /**
     * the column name for the disable_date field
     */
    const COL_DISABLE_DATE = 'care_encounter_prescription.disable_date';

    /**
     * the column name for the stop_date field
     */
    const COL_STOP_DATE = 'care_encounter_prescription.stop_date';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_prescription.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_prescription.history';

    /**
     * the column name for the bill_number field
     */
    const COL_BILL_NUMBER = 'care_encounter_prescription.bill_number';

    /**
     * the column name for the bill_status field
     */
    const COL_BILL_STATUS = 'care_encounter_prescription.bill_status';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_prescription.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_prescription.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_prescription.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_prescription.create_time';

    /**
     * the column name for the priority field
     */
    const COL_PRIORITY = 'care_encounter_prescription.priority';

    /**
     * the column name for the sub_store field
     */
    const COL_SUB_STORE = 'care_encounter_prescription.sub_store';

    /**
     * the column name for the in_weberp field
     */
    const COL_IN_WEBERP = 'care_encounter_prescription.in_weberp';

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
        self::TYPE_PHPNAME       => array('Nr', 'EncounterNr', 'PrescriptionTypeNr', 'Article', 'ArticleItemNumber', 'Partcode', 'MarkOs', 'Materialcost', 'Price', 'DrugClass', 'OrderNr', 'Dosage', 'TimesPerDay', 'Days', 'TotalDosage', 'ApplicationTypeNr', 'Notes', 'PrescribeDate', 'Prescriber', 'Taken', 'ColorMarker', 'IsStopped', 'IsOutpatientPrescription', 'Issuer', 'IssueDate', 'IsDisabled', 'DisableId', 'DisableDate', 'StopDate', 'Status', 'History', 'BillNumber', 'BillStatus', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'Priority', 'SubStore', 'InWeberp', ),
        self::TYPE_CAMELNAME     => array('nr', 'encounterNr', 'prescriptionTypeNr', 'article', 'articleItemNumber', 'partcode', 'markOs', 'materialcost', 'price', 'drugClass', 'orderNr', 'dosage', 'timesPerDay', 'days', 'totalDosage', 'applicationTypeNr', 'notes', 'prescribeDate', 'prescriber', 'taken', 'colorMarker', 'isStopped', 'isOutpatientPrescription', 'issuer', 'issueDate', 'isDisabled', 'disableId', 'disableDate', 'stopDate', 'status', 'history', 'billNumber', 'billStatus', 'modifyId', 'modifyTime', 'createId', 'createTime', 'priority', 'subStore', 'inWeberp', ),
        self::TYPE_COLNAME       => array(CareEncounterPrescriptionTableMap::COL_NR, CareEncounterPrescriptionTableMap::COL_ENCOUNTER_NR, CareEncounterPrescriptionTableMap::COL_PRESCRIPTION_TYPE_NR, CareEncounterPrescriptionTableMap::COL_ARTICLE, CareEncounterPrescriptionTableMap::COL_ARTICLE_ITEM_NUMBER, CareEncounterPrescriptionTableMap::COL_PARTCODE, CareEncounterPrescriptionTableMap::COL_MARK_OS, CareEncounterPrescriptionTableMap::COL_MATERIALCOST, CareEncounterPrescriptionTableMap::COL_PRICE, CareEncounterPrescriptionTableMap::COL_DRUG_CLASS, CareEncounterPrescriptionTableMap::COL_ORDER_NR, CareEncounterPrescriptionTableMap::COL_DOSAGE, CareEncounterPrescriptionTableMap::COL_TIMES_PER_DAY, CareEncounterPrescriptionTableMap::COL_DAYS, CareEncounterPrescriptionTableMap::COL_TOTAL_DOSAGE, CareEncounterPrescriptionTableMap::COL_APPLICATION_TYPE_NR, CareEncounterPrescriptionTableMap::COL_NOTES, CareEncounterPrescriptionTableMap::COL_PRESCRIBE_DATE, CareEncounterPrescriptionTableMap::COL_PRESCRIBER, CareEncounterPrescriptionTableMap::COL_TAKEN, CareEncounterPrescriptionTableMap::COL_COLOR_MARKER, CareEncounterPrescriptionTableMap::COL_IS_STOPPED, CareEncounterPrescriptionTableMap::COL_IS_OUTPATIENT_PRESCRIPTION, CareEncounterPrescriptionTableMap::COL_ISSUER, CareEncounterPrescriptionTableMap::COL_ISSUE_DATE, CareEncounterPrescriptionTableMap::COL_IS_DISABLED, CareEncounterPrescriptionTableMap::COL_DISABLE_ID, CareEncounterPrescriptionTableMap::COL_DISABLE_DATE, CareEncounterPrescriptionTableMap::COL_STOP_DATE, CareEncounterPrescriptionTableMap::COL_STATUS, CareEncounterPrescriptionTableMap::COL_HISTORY, CareEncounterPrescriptionTableMap::COL_BILL_NUMBER, CareEncounterPrescriptionTableMap::COL_BILL_STATUS, CareEncounterPrescriptionTableMap::COL_MODIFY_ID, CareEncounterPrescriptionTableMap::COL_MODIFY_TIME, CareEncounterPrescriptionTableMap::COL_CREATE_ID, CareEncounterPrescriptionTableMap::COL_CREATE_TIME, CareEncounterPrescriptionTableMap::COL_PRIORITY, CareEncounterPrescriptionTableMap::COL_SUB_STORE, CareEncounterPrescriptionTableMap::COL_IN_WEBERP, ),
        self::TYPE_FIELDNAME     => array('nr', 'encounter_nr', 'prescription_type_nr', 'article', 'article_item_number', 'partcode', 'mark_os', 'materialcost', 'price', 'drug_class', 'order_nr', 'dosage', 'times_per_day', 'days', 'total_dosage', 'application_type_nr', 'notes', 'prescribe_date', 'prescriber', 'taken', 'color_marker', 'is_stopped', 'is_outpatient_prescription', 'issuer', 'issue_date', 'is_disabled', 'disable_id', 'disable_date', 'stop_date', 'status', 'history', 'bill_number', 'bill_status', 'modify_id', 'modify_time', 'create_id', 'create_time', 'priority', 'sub_store', 'in_weberp', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'EncounterNr' => 1, 'PrescriptionTypeNr' => 2, 'Article' => 3, 'ArticleItemNumber' => 4, 'Partcode' => 5, 'MarkOs' => 6, 'Materialcost' => 7, 'Price' => 8, 'DrugClass' => 9, 'OrderNr' => 10, 'Dosage' => 11, 'TimesPerDay' => 12, 'Days' => 13, 'TotalDosage' => 14, 'ApplicationTypeNr' => 15, 'Notes' => 16, 'PrescribeDate' => 17, 'Prescriber' => 18, 'Taken' => 19, 'ColorMarker' => 20, 'IsStopped' => 21, 'IsOutpatientPrescription' => 22, 'Issuer' => 23, 'IssueDate' => 24, 'IsDisabled' => 25, 'DisableId' => 26, 'DisableDate' => 27, 'StopDate' => 28, 'Status' => 29, 'History' => 30, 'BillNumber' => 31, 'BillStatus' => 32, 'ModifyId' => 33, 'ModifyTime' => 34, 'CreateId' => 35, 'CreateTime' => 36, 'Priority' => 37, 'SubStore' => 38, 'InWeberp' => 39, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'encounterNr' => 1, 'prescriptionTypeNr' => 2, 'article' => 3, 'articleItemNumber' => 4, 'partcode' => 5, 'markOs' => 6, 'materialcost' => 7, 'price' => 8, 'drugClass' => 9, 'orderNr' => 10, 'dosage' => 11, 'timesPerDay' => 12, 'days' => 13, 'totalDosage' => 14, 'applicationTypeNr' => 15, 'notes' => 16, 'prescribeDate' => 17, 'prescriber' => 18, 'taken' => 19, 'colorMarker' => 20, 'isStopped' => 21, 'isOutpatientPrescription' => 22, 'issuer' => 23, 'issueDate' => 24, 'isDisabled' => 25, 'disableId' => 26, 'disableDate' => 27, 'stopDate' => 28, 'status' => 29, 'history' => 30, 'billNumber' => 31, 'billStatus' => 32, 'modifyId' => 33, 'modifyTime' => 34, 'createId' => 35, 'createTime' => 36, 'priority' => 37, 'subStore' => 38, 'inWeberp' => 39, ),
        self::TYPE_COLNAME       => array(CareEncounterPrescriptionTableMap::COL_NR => 0, CareEncounterPrescriptionTableMap::COL_ENCOUNTER_NR => 1, CareEncounterPrescriptionTableMap::COL_PRESCRIPTION_TYPE_NR => 2, CareEncounterPrescriptionTableMap::COL_ARTICLE => 3, CareEncounterPrescriptionTableMap::COL_ARTICLE_ITEM_NUMBER => 4, CareEncounterPrescriptionTableMap::COL_PARTCODE => 5, CareEncounterPrescriptionTableMap::COL_MARK_OS => 6, CareEncounterPrescriptionTableMap::COL_MATERIALCOST => 7, CareEncounterPrescriptionTableMap::COL_PRICE => 8, CareEncounterPrescriptionTableMap::COL_DRUG_CLASS => 9, CareEncounterPrescriptionTableMap::COL_ORDER_NR => 10, CareEncounterPrescriptionTableMap::COL_DOSAGE => 11, CareEncounterPrescriptionTableMap::COL_TIMES_PER_DAY => 12, CareEncounterPrescriptionTableMap::COL_DAYS => 13, CareEncounterPrescriptionTableMap::COL_TOTAL_DOSAGE => 14, CareEncounterPrescriptionTableMap::COL_APPLICATION_TYPE_NR => 15, CareEncounterPrescriptionTableMap::COL_NOTES => 16, CareEncounterPrescriptionTableMap::COL_PRESCRIBE_DATE => 17, CareEncounterPrescriptionTableMap::COL_PRESCRIBER => 18, CareEncounterPrescriptionTableMap::COL_TAKEN => 19, CareEncounterPrescriptionTableMap::COL_COLOR_MARKER => 20, CareEncounterPrescriptionTableMap::COL_IS_STOPPED => 21, CareEncounterPrescriptionTableMap::COL_IS_OUTPATIENT_PRESCRIPTION => 22, CareEncounterPrescriptionTableMap::COL_ISSUER => 23, CareEncounterPrescriptionTableMap::COL_ISSUE_DATE => 24, CareEncounterPrescriptionTableMap::COL_IS_DISABLED => 25, CareEncounterPrescriptionTableMap::COL_DISABLE_ID => 26, CareEncounterPrescriptionTableMap::COL_DISABLE_DATE => 27, CareEncounterPrescriptionTableMap::COL_STOP_DATE => 28, CareEncounterPrescriptionTableMap::COL_STATUS => 29, CareEncounterPrescriptionTableMap::COL_HISTORY => 30, CareEncounterPrescriptionTableMap::COL_BILL_NUMBER => 31, CareEncounterPrescriptionTableMap::COL_BILL_STATUS => 32, CareEncounterPrescriptionTableMap::COL_MODIFY_ID => 33, CareEncounterPrescriptionTableMap::COL_MODIFY_TIME => 34, CareEncounterPrescriptionTableMap::COL_CREATE_ID => 35, CareEncounterPrescriptionTableMap::COL_CREATE_TIME => 36, CareEncounterPrescriptionTableMap::COL_PRIORITY => 37, CareEncounterPrescriptionTableMap::COL_SUB_STORE => 38, CareEncounterPrescriptionTableMap::COL_IN_WEBERP => 39, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'encounter_nr' => 1, 'prescription_type_nr' => 2, 'article' => 3, 'article_item_number' => 4, 'partcode' => 5, 'mark_os' => 6, 'materialcost' => 7, 'price' => 8, 'drug_class' => 9, 'order_nr' => 10, 'dosage' => 11, 'times_per_day' => 12, 'days' => 13, 'total_dosage' => 14, 'application_type_nr' => 15, 'notes' => 16, 'prescribe_date' => 17, 'prescriber' => 18, 'taken' => 19, 'color_marker' => 20, 'is_stopped' => 21, 'is_outpatient_prescription' => 22, 'issuer' => 23, 'issue_date' => 24, 'is_disabled' => 25, 'disable_id' => 26, 'disable_date' => 27, 'stop_date' => 28, 'status' => 29, 'history' => 30, 'bill_number' => 31, 'bill_status' => 32, 'modify_id' => 33, 'modify_time' => 34, 'create_id' => 35, 'create_time' => 36, 'priority' => 37, 'sub_store' => 38, 'in_weberp' => 39, ),
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
        $this->setName('care_encounter_prescription');
        $this->setPhpName('CareEncounterPrescription');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterPrescription');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('prescription_type_nr', 'PrescriptionTypeNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('article', 'Article', 'VARCHAR', true, 100, '');
        $this->addColumn('article_item_number', 'ArticleItemNumber', 'VARCHAR', true, 50, '0');
        $this->addColumn('partcode', 'Partcode', 'VARCHAR', true, 255, null);
        $this->addColumn('mark_os', 'MarkOs', 'SMALLINT', true, 2, 0);
        $this->addColumn('materialcost', 'Materialcost', 'VARCHAR', true, 255, '0');
        $this->addColumn('price', 'Price', 'VARCHAR', true, 255, '');
        $this->addColumn('drug_class', 'DrugClass', 'VARCHAR', true, 60, '');
        $this->addColumn('order_nr', 'OrderNr', 'INTEGER', true, null, 0);
        $this->addColumn('dosage', 'Dosage', 'DOUBLE', true, null, null);
        $this->addColumn('times_per_day', 'TimesPerDay', 'SMALLINT', true, 10, null);
        $this->addColumn('days', 'Days', 'SMALLINT', true, 10, null);
        $this->addColumn('total_dosage', 'TotalDosage', 'DOUBLE', true, null, null);
        $this->addColumn('application_type_nr', 'ApplicationTypeNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('notes', 'Notes', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prescribe_date', 'PrescribeDate', 'DATE', false, null, null);
        $this->addColumn('prescriber', 'Prescriber', 'VARCHAR', true, 60, '');
        $this->addColumn('taken', 'Taken', 'BOOLEAN', true, 1, null);
        $this->addColumn('color_marker', 'ColorMarker', 'VARCHAR', true, 10, '');
        $this->addColumn('is_stopped', 'IsStopped', 'BOOLEAN', true, 1, false);
        $this->addColumn('is_outpatient_prescription', 'IsOutpatientPrescription', 'TINYINT', true, 11, 0);
        $this->addColumn('issuer', 'Issuer', 'VARCHAR', true, 35, null);
        $this->addColumn('issue_date', 'IssueDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('is_disabled', 'IsDisabled', 'VARCHAR', false, 255, null);
        $this->addColumn('disable_id', 'DisableId', 'VARCHAR', true, 25, null);
        $this->addColumn('disable_date', 'DisableDate', 'DATE', true, null, null);
        $this->addColumn('stop_date', 'StopDate', 'DATE', false, null, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('bill_number', 'BillNumber', 'BIGINT', true, null, 0);
        $this->addColumn('bill_status', 'BillStatus', 'VARCHAR', true, 10, '');
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('priority', 'Priority', 'BOOLEAN', true, 1, null);
        $this->addColumn('sub_store', 'SubStore', 'VARCHAR', true, 20, null);
        $this->addColumn('in_weberp', 'InWeberp', 'INTEGER', true, 3, null);
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
        return $withPrefix ? CareEncounterPrescriptionTableMap::CLASS_DEFAULT : CareEncounterPrescriptionTableMap::OM_CLASS;
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
     * @return array           (CareEncounterPrescription object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterPrescriptionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterPrescriptionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterPrescriptionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterPrescriptionTableMap::OM_CLASS;
            /** @var CareEncounterPrescription $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterPrescriptionTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterPrescriptionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterPrescriptionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterPrescription $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterPrescriptionTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_NR);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_PRESCRIPTION_TYPE_NR);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_ARTICLE);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_ARTICLE_ITEM_NUMBER);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_PARTCODE);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_MARK_OS);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_MATERIALCOST);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_PRICE);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_DRUG_CLASS);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_ORDER_NR);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_DOSAGE);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_TIMES_PER_DAY);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_DAYS);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_TOTAL_DOSAGE);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_APPLICATION_TYPE_NR);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_PRESCRIBE_DATE);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_PRESCRIBER);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_TAKEN);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_COLOR_MARKER);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_IS_STOPPED);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_IS_OUTPATIENT_PRESCRIPTION);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_ISSUER);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_ISSUE_DATE);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_IS_DISABLED);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_DISABLE_ID);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_DISABLE_DATE);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_STOP_DATE);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_BILL_NUMBER);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_BILL_STATUS);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_PRIORITY);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_SUB_STORE);
            $criteria->addSelectColumn(CareEncounterPrescriptionTableMap::COL_IN_WEBERP);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.prescription_type_nr');
            $criteria->addSelectColumn($alias . '.article');
            $criteria->addSelectColumn($alias . '.article_item_number');
            $criteria->addSelectColumn($alias . '.partcode');
            $criteria->addSelectColumn($alias . '.mark_os');
            $criteria->addSelectColumn($alias . '.materialcost');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.drug_class');
            $criteria->addSelectColumn($alias . '.order_nr');
            $criteria->addSelectColumn($alias . '.dosage');
            $criteria->addSelectColumn($alias . '.times_per_day');
            $criteria->addSelectColumn($alias . '.days');
            $criteria->addSelectColumn($alias . '.total_dosage');
            $criteria->addSelectColumn($alias . '.application_type_nr');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.prescribe_date');
            $criteria->addSelectColumn($alias . '.prescriber');
            $criteria->addSelectColumn($alias . '.taken');
            $criteria->addSelectColumn($alias . '.color_marker');
            $criteria->addSelectColumn($alias . '.is_stopped');
            $criteria->addSelectColumn($alias . '.is_outpatient_prescription');
            $criteria->addSelectColumn($alias . '.issuer');
            $criteria->addSelectColumn($alias . '.issue_date');
            $criteria->addSelectColumn($alias . '.is_disabled');
            $criteria->addSelectColumn($alias . '.disable_id');
            $criteria->addSelectColumn($alias . '.disable_date');
            $criteria->addSelectColumn($alias . '.stop_date');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.bill_number');
            $criteria->addSelectColumn($alias . '.bill_status');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.priority');
            $criteria->addSelectColumn($alias . '.sub_store');
            $criteria->addSelectColumn($alias . '.in_weberp');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterPrescriptionTableMap::DATABASE_NAME)->getTable(CareEncounterPrescriptionTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterPrescriptionTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterPrescriptionTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterPrescriptionTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterPrescription or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterPrescription object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterPrescriptionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterPrescription) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterPrescriptionTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterPrescriptionTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterPrescriptionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterPrescriptionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterPrescriptionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_prescription table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterPrescriptionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterPrescription or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterPrescription object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterPrescriptionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterPrescription object
        }

        if ($criteria->containsKey(CareEncounterPrescriptionTableMap::COL_NR) && $criteria->keyContainsValue(CareEncounterPrescriptionTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterPrescriptionTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterPrescriptionQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterPrescriptionTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterPrescriptionTableMap::buildTableMap();
