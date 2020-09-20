<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestRequestChemlabor;
use CareMd\CareMd\CareTestRequestChemlaborQuery;
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
 * This class defines the structure of the 'care_test_request_chemlabor' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestRequestChemlaborTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestRequestChemlaborTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_request_chemlabor';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestRequestChemlabor';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestRequestChemlabor';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 29;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 29;

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_request_chemlabor.batch_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_request_chemlabor.encounter_nr';

    /**
     * the column name for the item_id field
     */
    const COL_ITEM_ID = 'care_test_request_chemlabor.item_id';

    /**
     * the column name for the room_nr field
     */
    const COL_ROOM_NR = 'care_test_request_chemlabor.room_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_test_request_chemlabor.dept_nr';

    /**
     * the column name for the parameters field
     */
    const COL_PARAMETERS = 'care_test_request_chemlabor.parameters';

    /**
     * the column name for the doctor_sign field
     */
    const COL_DOCTOR_SIGN = 'care_test_request_chemlabor.doctor_sign';

    /**
     * the column name for the highrisk field
     */
    const COL_HIGHRISK = 'care_test_request_chemlabor.highrisk';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_test_request_chemlabor.notes';

    /**
     * the column name for the send_date field
     */
    const COL_SEND_DATE = 'care_test_request_chemlabor.send_date';

    /**
     * the column name for the specimen_collected field
     */
    const COL_SPECIMEN_COLLECTED = 'care_test_request_chemlabor.specimen_collected';

    /**
     * the column name for the specimen_date field
     */
    const COL_SPECIMEN_DATE = 'care_test_request_chemlabor.specimen_date';

    /**
     * the column name for the specimen_type field
     */
    const COL_SPECIMEN_TYPE = 'care_test_request_chemlabor.specimen_type';

    /**
     * the column name for the specimen_volume field
     */
    const COL_SPECIMEN_VOLUME = 'care_test_request_chemlabor.specimen_volume';

    /**
     * the column name for the specimen_units field
     */
    const COL_SPECIMEN_UNITS = 'care_test_request_chemlabor.specimen_units';

    /**
     * the column name for the specimen_taken_by field
     */
    const COL_SPECIMEN_TAKEN_BY = 'care_test_request_chemlabor.specimen_taken_by';

    /**
     * the column name for the specimen_container field
     */
    const COL_SPECIMEN_CONTAINER = 'care_test_request_chemlabor.specimen_container';

    /**
     * the column name for the sample_time field
     */
    const COL_SAMPLE_TIME = 'care_test_request_chemlabor.sample_time';

    /**
     * the column name for the sample_weekday field
     */
    const COL_SAMPLE_WEEKDAY = 'care_test_request_chemlabor.sample_weekday';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_request_chemlabor.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_request_chemlabor.history';

    /**
     * the column name for the bill_number field
     */
    const COL_BILL_NUMBER = 'care_test_request_chemlabor.bill_number';

    /**
     * the column name for the bill_status field
     */
    const COL_BILL_STATUS = 'care_test_request_chemlabor.bill_status';

    /**
     * the column name for the is_disabled field
     */
    const COL_IS_DISABLED = 'care_test_request_chemlabor.is_disabled';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_request_chemlabor.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_request_chemlabor.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_request_chemlabor.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_request_chemlabor.create_time';

    /**
     * the column name for the priority field
     */
    const COL_PRIORITY = 'care_test_request_chemlabor.priority';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'EncounterNr', 'ItemId', 'RoomNr', 'DeptNr', 'Parameters', 'DoctorSign', 'Highrisk', 'Notes', 'SendDate', 'SpecimenCollected', 'SpecimenDate', 'SpecimenType', 'SpecimenVolume', 'SpecimenUnits', 'SpecimenTakenBy', 'SpecimenContainer', 'SampleTime', 'SampleWeekday', 'Status', 'History', 'BillNumber', 'BillStatus', 'IsDisabled', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'Priority', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'encounterNr', 'itemId', 'roomNr', 'deptNr', 'parameters', 'doctorSign', 'highrisk', 'notes', 'sendDate', 'specimenCollected', 'specimenDate', 'specimenType', 'specimenVolume', 'specimenUnits', 'specimenTakenBy', 'specimenContainer', 'sampleTime', 'sampleWeekday', 'status', 'history', 'billNumber', 'billStatus', 'isDisabled', 'modifyId', 'modifyTime', 'createId', 'createTime', 'priority', ),
        self::TYPE_COLNAME       => array(CareTestRequestChemlaborTableMap::COL_BATCH_NR, CareTestRequestChemlaborTableMap::COL_ENCOUNTER_NR, CareTestRequestChemlaborTableMap::COL_ITEM_ID, CareTestRequestChemlaborTableMap::COL_ROOM_NR, CareTestRequestChemlaborTableMap::COL_DEPT_NR, CareTestRequestChemlaborTableMap::COL_PARAMETERS, CareTestRequestChemlaborTableMap::COL_DOCTOR_SIGN, CareTestRequestChemlaborTableMap::COL_HIGHRISK, CareTestRequestChemlaborTableMap::COL_NOTES, CareTestRequestChemlaborTableMap::COL_SEND_DATE, CareTestRequestChemlaborTableMap::COL_SPECIMEN_COLLECTED, CareTestRequestChemlaborTableMap::COL_SPECIMEN_DATE, CareTestRequestChemlaborTableMap::COL_SPECIMEN_TYPE, CareTestRequestChemlaborTableMap::COL_SPECIMEN_VOLUME, CareTestRequestChemlaborTableMap::COL_SPECIMEN_UNITS, CareTestRequestChemlaborTableMap::COL_SPECIMEN_TAKEN_BY, CareTestRequestChemlaborTableMap::COL_SPECIMEN_CONTAINER, CareTestRequestChemlaborTableMap::COL_SAMPLE_TIME, CareTestRequestChemlaborTableMap::COL_SAMPLE_WEEKDAY, CareTestRequestChemlaborTableMap::COL_STATUS, CareTestRequestChemlaborTableMap::COL_HISTORY, CareTestRequestChemlaborTableMap::COL_BILL_NUMBER, CareTestRequestChemlaborTableMap::COL_BILL_STATUS, CareTestRequestChemlaborTableMap::COL_IS_DISABLED, CareTestRequestChemlaborTableMap::COL_MODIFY_ID, CareTestRequestChemlaborTableMap::COL_MODIFY_TIME, CareTestRequestChemlaborTableMap::COL_CREATE_ID, CareTestRequestChemlaborTableMap::COL_CREATE_TIME, CareTestRequestChemlaborTableMap::COL_PRIORITY, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'encounter_nr', 'item_id', 'room_nr', 'dept_nr', 'parameters', 'doctor_sign', 'highrisk', 'notes', 'send_date', 'specimen_collected', 'specimen_date', 'specimen_type', 'specimen_volume', 'specimen_units', 'specimen_taken_by', 'specimen_container', 'sample_time', 'sample_weekday', 'status', 'history', 'bill_number', 'bill_status', 'is_disabled', 'modify_id', 'modify_time', 'create_id', 'create_time', 'priority', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'EncounterNr' => 1, 'ItemId' => 2, 'RoomNr' => 3, 'DeptNr' => 4, 'Parameters' => 5, 'DoctorSign' => 6, 'Highrisk' => 7, 'Notes' => 8, 'SendDate' => 9, 'SpecimenCollected' => 10, 'SpecimenDate' => 11, 'SpecimenType' => 12, 'SpecimenVolume' => 13, 'SpecimenUnits' => 14, 'SpecimenTakenBy' => 15, 'SpecimenContainer' => 16, 'SampleTime' => 17, 'SampleWeekday' => 18, 'Status' => 19, 'History' => 20, 'BillNumber' => 21, 'BillStatus' => 22, 'IsDisabled' => 23, 'ModifyId' => 24, 'ModifyTime' => 25, 'CreateId' => 26, 'CreateTime' => 27, 'Priority' => 28, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'encounterNr' => 1, 'itemId' => 2, 'roomNr' => 3, 'deptNr' => 4, 'parameters' => 5, 'doctorSign' => 6, 'highrisk' => 7, 'notes' => 8, 'sendDate' => 9, 'specimenCollected' => 10, 'specimenDate' => 11, 'specimenType' => 12, 'specimenVolume' => 13, 'specimenUnits' => 14, 'specimenTakenBy' => 15, 'specimenContainer' => 16, 'sampleTime' => 17, 'sampleWeekday' => 18, 'status' => 19, 'history' => 20, 'billNumber' => 21, 'billStatus' => 22, 'isDisabled' => 23, 'modifyId' => 24, 'modifyTime' => 25, 'createId' => 26, 'createTime' => 27, 'priority' => 28, ),
        self::TYPE_COLNAME       => array(CareTestRequestChemlaborTableMap::COL_BATCH_NR => 0, CareTestRequestChemlaborTableMap::COL_ENCOUNTER_NR => 1, CareTestRequestChemlaborTableMap::COL_ITEM_ID => 2, CareTestRequestChemlaborTableMap::COL_ROOM_NR => 3, CareTestRequestChemlaborTableMap::COL_DEPT_NR => 4, CareTestRequestChemlaborTableMap::COL_PARAMETERS => 5, CareTestRequestChemlaborTableMap::COL_DOCTOR_SIGN => 6, CareTestRequestChemlaborTableMap::COL_HIGHRISK => 7, CareTestRequestChemlaborTableMap::COL_NOTES => 8, CareTestRequestChemlaborTableMap::COL_SEND_DATE => 9, CareTestRequestChemlaborTableMap::COL_SPECIMEN_COLLECTED => 10, CareTestRequestChemlaborTableMap::COL_SPECIMEN_DATE => 11, CareTestRequestChemlaborTableMap::COL_SPECIMEN_TYPE => 12, CareTestRequestChemlaborTableMap::COL_SPECIMEN_VOLUME => 13, CareTestRequestChemlaborTableMap::COL_SPECIMEN_UNITS => 14, CareTestRequestChemlaborTableMap::COL_SPECIMEN_TAKEN_BY => 15, CareTestRequestChemlaborTableMap::COL_SPECIMEN_CONTAINER => 16, CareTestRequestChemlaborTableMap::COL_SAMPLE_TIME => 17, CareTestRequestChemlaborTableMap::COL_SAMPLE_WEEKDAY => 18, CareTestRequestChemlaborTableMap::COL_STATUS => 19, CareTestRequestChemlaborTableMap::COL_HISTORY => 20, CareTestRequestChemlaborTableMap::COL_BILL_NUMBER => 21, CareTestRequestChemlaborTableMap::COL_BILL_STATUS => 22, CareTestRequestChemlaborTableMap::COL_IS_DISABLED => 23, CareTestRequestChemlaborTableMap::COL_MODIFY_ID => 24, CareTestRequestChemlaborTableMap::COL_MODIFY_TIME => 25, CareTestRequestChemlaborTableMap::COL_CREATE_ID => 26, CareTestRequestChemlaborTableMap::COL_CREATE_TIME => 27, CareTestRequestChemlaborTableMap::COL_PRIORITY => 28, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'encounter_nr' => 1, 'item_id' => 2, 'room_nr' => 3, 'dept_nr' => 4, 'parameters' => 5, 'doctor_sign' => 6, 'highrisk' => 7, 'notes' => 8, 'send_date' => 9, 'specimen_collected' => 10, 'specimen_date' => 11, 'specimen_type' => 12, 'specimen_volume' => 13, 'specimen_units' => 14, 'specimen_taken_by' => 15, 'specimen_container' => 16, 'sample_time' => 17, 'sample_weekday' => 18, 'status' => 19, 'history' => 20, 'bill_number' => 21, 'bill_status' => 22, 'is_disabled' => 23, 'modify_id' => 24, 'modify_time' => 25, 'create_id' => 26, 'create_time' => 27, 'priority' => 28, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
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
        $this->setName('care_test_request_chemlabor');
        $this->setPhpName('CareTestRequestChemlabor');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestRequestChemlabor');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('item_id', 'ItemId', 'VARCHAR', true, 20, null);
        $this->addColumn('room_nr', 'RoomNr', 'VARCHAR', true, 10, '');
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('parameters', 'Parameters', 'LONGVARCHAR', true, null, null);
        $this->addColumn('doctor_sign', 'DoctorSign', 'VARCHAR', true, 35, '');
        $this->addColumn('highrisk', 'Highrisk', 'SMALLINT', true, 1, 0);
        $this->addColumn('notes', 'Notes', 'CLOB', true, null, null);
        $this->addColumn('send_date', 'SendDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('specimen_collected', 'SpecimenCollected', 'BOOLEAN', true, 1, false);
        $this->addColumn('specimen_date', 'SpecimenDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('specimen_type', 'SpecimenType', 'VARCHAR', false, 200, null);
        $this->addColumn('specimen_volume', 'SpecimenVolume', 'VARCHAR', false, 100, null);
        $this->addColumn('specimen_units', 'SpecimenUnits', 'VARCHAR', false, 50, null);
        $this->addColumn('specimen_taken_by', 'SpecimenTakenBy', 'VARCHAR', false, 200, null);
        $this->addColumn('specimen_container', 'SpecimenContainer', 'VARCHAR', false, 200, null);
        $this->addColumn('sample_time', 'SampleTime', 'TIME', true, null, '00:00:00');
        $this->addColumn('sample_weekday', 'SampleWeekday', 'SMALLINT', true, 1, 0);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 15, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
        $this->addColumn('bill_number', 'BillNumber', 'BIGINT', true, null, 0);
        $this->addColumn('bill_status', 'BillStatus', 'VARCHAR', true, 10, '');
        $this->addColumn('is_disabled', 'IsDisabled', 'VARCHAR', false, 255, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('priority', 'Priority', 'BOOLEAN', true, 1, null);
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
        return $withPrefix ? CareTestRequestChemlaborTableMap::CLASS_DEFAULT : CareTestRequestChemlaborTableMap::OM_CLASS;
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
     * @return array           (CareTestRequestChemlabor object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestRequestChemlaborTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestRequestChemlaborTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestRequestChemlaborTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestRequestChemlaborTableMap::OM_CLASS;
            /** @var CareTestRequestChemlabor $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestRequestChemlaborTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestRequestChemlaborTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestRequestChemlaborTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestRequestChemlabor $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestRequestChemlaborTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_ITEM_ID);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_ROOM_NR);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_PARAMETERS);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_DOCTOR_SIGN);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_HIGHRISK);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_SEND_DATE);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_SPECIMEN_COLLECTED);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_SPECIMEN_DATE);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_SPECIMEN_TYPE);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_SPECIMEN_VOLUME);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_SPECIMEN_UNITS);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_SPECIMEN_TAKEN_BY);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_SPECIMEN_CONTAINER);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_SAMPLE_TIME);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_SAMPLE_WEEKDAY);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_BILL_NUMBER);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_BILL_STATUS);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_IS_DISABLED);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareTestRequestChemlaborTableMap::COL_PRIORITY);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.item_id');
            $criteria->addSelectColumn($alias . '.room_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.parameters');
            $criteria->addSelectColumn($alias . '.doctor_sign');
            $criteria->addSelectColumn($alias . '.highrisk');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.send_date');
            $criteria->addSelectColumn($alias . '.specimen_collected');
            $criteria->addSelectColumn($alias . '.specimen_date');
            $criteria->addSelectColumn($alias . '.specimen_type');
            $criteria->addSelectColumn($alias . '.specimen_volume');
            $criteria->addSelectColumn($alias . '.specimen_units');
            $criteria->addSelectColumn($alias . '.specimen_taken_by');
            $criteria->addSelectColumn($alias . '.specimen_container');
            $criteria->addSelectColumn($alias . '.sample_time');
            $criteria->addSelectColumn($alias . '.sample_weekday');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.bill_number');
            $criteria->addSelectColumn($alias . '.bill_status');
            $criteria->addSelectColumn($alias . '.is_disabled');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.priority');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestRequestChemlaborTableMap::DATABASE_NAME)->getTable(CareTestRequestChemlaborTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestRequestChemlaborTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestRequestChemlaborTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestRequestChemlaborTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestRequestChemlabor or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestRequestChemlabor object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestChemlaborTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestRequestChemlabor) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestRequestChemlaborTableMap::DATABASE_NAME);
            $criteria->add(CareTestRequestChemlaborTableMap::COL_BATCH_NR, (array) $values, Criteria::IN);
        }

        $query = CareTestRequestChemlaborQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestRequestChemlaborTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestRequestChemlaborTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_request_chemlabor table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestRequestChemlaborQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestRequestChemlabor or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestRequestChemlabor object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestChemlaborTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestRequestChemlabor object
        }

        if ($criteria->containsKey(CareTestRequestChemlaborTableMap::COL_BATCH_NR) && $criteria->keyContainsValue(CareTestRequestChemlaborTableMap::COL_BATCH_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestRequestChemlaborTableMap::COL_BATCH_NR.')');
        }


        // Set the correct dbName
        $query = CareTestRequestChemlaborQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestRequestChemlaborTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestRequestChemlaborTableMap::buildTableMap();
