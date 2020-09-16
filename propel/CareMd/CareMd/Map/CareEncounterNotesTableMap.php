<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterNotes;
use CareMd\CareMd\CareEncounterNotesQuery;
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
 * This class defines the structure of the 'care_encounter_notes' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterNotesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterNotesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_notes';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterNotes';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterNotes';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 30;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 30;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_encounter_notes.nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_notes.encounter_nr';

    /**
     * the column name for the type_nr field
     */
    const COL_TYPE_NR = 'care_encounter_notes.type_nr';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_encounter_notes.notes';

    /**
     * the column name for the short_notes field
     */
    const COL_SHORT_NOTES = 'care_encounter_notes.short_notes';

    /**
     * the column name for the aux_notes field
     */
    const COL_AUX_NOTES = 'care_encounter_notes.aux_notes';

    /**
     * the column name for the ref_notes_nr field
     */
    const COL_REF_NOTES_NR = 'care_encounter_notes.ref_notes_nr';

    /**
     * the column name for the personell_nr field
     */
    const COL_PERSONELL_NR = 'care_encounter_notes.personell_nr';

    /**
     * the column name for the personell_name field
     */
    const COL_PERSONELL_NAME = 'care_encounter_notes.personell_name';

    /**
     * the column name for the send_to_pid field
     */
    const COL_SEND_TO_PID = 'care_encounter_notes.send_to_pid';

    /**
     * the column name for the send_to_name field
     */
    const COL_SEND_TO_NAME = 'care_encounter_notes.send_to_name';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'care_encounter_notes.date';

    /**
     * the column name for the time field
     */
    const COL_TIME = 'care_encounter_notes.time';

    /**
     * the column name for the location_type field
     */
    const COL_LOCATION_TYPE = 'care_encounter_notes.location_type';

    /**
     * the column name for the location_type_nr field
     */
    const COL_LOCATION_TYPE_NR = 'care_encounter_notes.location_type_nr';

    /**
     * the column name for the location_nr field
     */
    const COL_LOCATION_NR = 'care_encounter_notes.location_nr';

    /**
     * the column name for the location_id field
     */
    const COL_LOCATION_ID = 'care_encounter_notes.location_id';

    /**
     * the column name for the ack_short_id field
     */
    const COL_ACK_SHORT_ID = 'care_encounter_notes.ack_short_id';

    /**
     * the column name for the date_ack field
     */
    const COL_DATE_ACK = 'care_encounter_notes.date_ack';

    /**
     * the column name for the date_checked field
     */
    const COL_DATE_CHECKED = 'care_encounter_notes.date_checked';

    /**
     * the column name for the date_printed field
     */
    const COL_DATE_PRINTED = 'care_encounter_notes.date_printed';

    /**
     * the column name for the send_by_mail field
     */
    const COL_SEND_BY_MAIL = 'care_encounter_notes.send_by_mail';

    /**
     * the column name for the send_by_email field
     */
    const COL_SEND_BY_EMAIL = 'care_encounter_notes.send_by_email';

    /**
     * the column name for the send_by_fax field
     */
    const COL_SEND_BY_FAX = 'care_encounter_notes.send_by_fax';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_notes.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_notes.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_notes.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_notes.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_notes.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_notes.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'EncounterNr', 'TypeNr', 'Notes', 'ShortNotes', 'AuxNotes', 'RefNotesNr', 'PersonellNr', 'PersonellName', 'SendToPid', 'SendToName', 'Date', 'Time', 'LocationType', 'LocationTypeNr', 'LocationNr', 'LocationId', 'AckShortId', 'DateAck', 'DateChecked', 'DatePrinted', 'SendByMail', 'SendByEmail', 'SendByFax', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'encounterNr', 'typeNr', 'notes', 'shortNotes', 'auxNotes', 'refNotesNr', 'personellNr', 'personellName', 'sendToPid', 'sendToName', 'date', 'time', 'locationType', 'locationTypeNr', 'locationNr', 'locationId', 'ackShortId', 'dateAck', 'dateChecked', 'datePrinted', 'sendByMail', 'sendByEmail', 'sendByFax', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterNotesTableMap::COL_NR, CareEncounterNotesTableMap::COL_ENCOUNTER_NR, CareEncounterNotesTableMap::COL_TYPE_NR, CareEncounterNotesTableMap::COL_NOTES, CareEncounterNotesTableMap::COL_SHORT_NOTES, CareEncounterNotesTableMap::COL_AUX_NOTES, CareEncounterNotesTableMap::COL_REF_NOTES_NR, CareEncounterNotesTableMap::COL_PERSONELL_NR, CareEncounterNotesTableMap::COL_PERSONELL_NAME, CareEncounterNotesTableMap::COL_SEND_TO_PID, CareEncounterNotesTableMap::COL_SEND_TO_NAME, CareEncounterNotesTableMap::COL_DATE, CareEncounterNotesTableMap::COL_TIME, CareEncounterNotesTableMap::COL_LOCATION_TYPE, CareEncounterNotesTableMap::COL_LOCATION_TYPE_NR, CareEncounterNotesTableMap::COL_LOCATION_NR, CareEncounterNotesTableMap::COL_LOCATION_ID, CareEncounterNotesTableMap::COL_ACK_SHORT_ID, CareEncounterNotesTableMap::COL_DATE_ACK, CareEncounterNotesTableMap::COL_DATE_CHECKED, CareEncounterNotesTableMap::COL_DATE_PRINTED, CareEncounterNotesTableMap::COL_SEND_BY_MAIL, CareEncounterNotesTableMap::COL_SEND_BY_EMAIL, CareEncounterNotesTableMap::COL_SEND_BY_FAX, CareEncounterNotesTableMap::COL_STATUS, CareEncounterNotesTableMap::COL_HISTORY, CareEncounterNotesTableMap::COL_MODIFY_ID, CareEncounterNotesTableMap::COL_MODIFY_TIME, CareEncounterNotesTableMap::COL_CREATE_ID, CareEncounterNotesTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'encounter_nr', 'type_nr', 'notes', 'short_notes', 'aux_notes', 'ref_notes_nr', 'personell_nr', 'personell_name', 'send_to_pid', 'send_to_name', 'date', 'time', 'location_type', 'location_type_nr', 'location_nr', 'location_id', 'ack_short_id', 'date_ack', 'date_checked', 'date_printed', 'send_by_mail', 'send_by_email', 'send_by_fax', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'EncounterNr' => 1, 'TypeNr' => 2, 'Notes' => 3, 'ShortNotes' => 4, 'AuxNotes' => 5, 'RefNotesNr' => 6, 'PersonellNr' => 7, 'PersonellName' => 8, 'SendToPid' => 9, 'SendToName' => 10, 'Date' => 11, 'Time' => 12, 'LocationType' => 13, 'LocationTypeNr' => 14, 'LocationNr' => 15, 'LocationId' => 16, 'AckShortId' => 17, 'DateAck' => 18, 'DateChecked' => 19, 'DatePrinted' => 20, 'SendByMail' => 21, 'SendByEmail' => 22, 'SendByFax' => 23, 'Status' => 24, 'History' => 25, 'ModifyId' => 26, 'ModifyTime' => 27, 'CreateId' => 28, 'CreateTime' => 29, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'encounterNr' => 1, 'typeNr' => 2, 'notes' => 3, 'shortNotes' => 4, 'auxNotes' => 5, 'refNotesNr' => 6, 'personellNr' => 7, 'personellName' => 8, 'sendToPid' => 9, 'sendToName' => 10, 'date' => 11, 'time' => 12, 'locationType' => 13, 'locationTypeNr' => 14, 'locationNr' => 15, 'locationId' => 16, 'ackShortId' => 17, 'dateAck' => 18, 'dateChecked' => 19, 'datePrinted' => 20, 'sendByMail' => 21, 'sendByEmail' => 22, 'sendByFax' => 23, 'status' => 24, 'history' => 25, 'modifyId' => 26, 'modifyTime' => 27, 'createId' => 28, 'createTime' => 29, ),
        self::TYPE_COLNAME       => array(CareEncounterNotesTableMap::COL_NR => 0, CareEncounterNotesTableMap::COL_ENCOUNTER_NR => 1, CareEncounterNotesTableMap::COL_TYPE_NR => 2, CareEncounterNotesTableMap::COL_NOTES => 3, CareEncounterNotesTableMap::COL_SHORT_NOTES => 4, CareEncounterNotesTableMap::COL_AUX_NOTES => 5, CareEncounterNotesTableMap::COL_REF_NOTES_NR => 6, CareEncounterNotesTableMap::COL_PERSONELL_NR => 7, CareEncounterNotesTableMap::COL_PERSONELL_NAME => 8, CareEncounterNotesTableMap::COL_SEND_TO_PID => 9, CareEncounterNotesTableMap::COL_SEND_TO_NAME => 10, CareEncounterNotesTableMap::COL_DATE => 11, CareEncounterNotesTableMap::COL_TIME => 12, CareEncounterNotesTableMap::COL_LOCATION_TYPE => 13, CareEncounterNotesTableMap::COL_LOCATION_TYPE_NR => 14, CareEncounterNotesTableMap::COL_LOCATION_NR => 15, CareEncounterNotesTableMap::COL_LOCATION_ID => 16, CareEncounterNotesTableMap::COL_ACK_SHORT_ID => 17, CareEncounterNotesTableMap::COL_DATE_ACK => 18, CareEncounterNotesTableMap::COL_DATE_CHECKED => 19, CareEncounterNotesTableMap::COL_DATE_PRINTED => 20, CareEncounterNotesTableMap::COL_SEND_BY_MAIL => 21, CareEncounterNotesTableMap::COL_SEND_BY_EMAIL => 22, CareEncounterNotesTableMap::COL_SEND_BY_FAX => 23, CareEncounterNotesTableMap::COL_STATUS => 24, CareEncounterNotesTableMap::COL_HISTORY => 25, CareEncounterNotesTableMap::COL_MODIFY_ID => 26, CareEncounterNotesTableMap::COL_MODIFY_TIME => 27, CareEncounterNotesTableMap::COL_CREATE_ID => 28, CareEncounterNotesTableMap::COL_CREATE_TIME => 29, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'encounter_nr' => 1, 'type_nr' => 2, 'notes' => 3, 'short_notes' => 4, 'aux_notes' => 5, 'ref_notes_nr' => 6, 'personell_nr' => 7, 'personell_name' => 8, 'send_to_pid' => 9, 'send_to_name' => 10, 'date' => 11, 'time' => 12, 'location_type' => 13, 'location_type_nr' => 14, 'location_nr' => 15, 'location_id' => 16, 'ack_short_id' => 17, 'date_ack' => 18, 'date_checked' => 19, 'date_printed' => 20, 'send_by_mail' => 21, 'send_by_email' => 22, 'send_by_fax' => 23, 'status' => 24, 'history' => 25, 'modify_id' => 26, 'modify_time' => 27, 'create_id' => 28, 'create_time' => 29, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
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
        $this->setName('care_encounter_notes');
        $this->setPhpName('CareEncounterNotes');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterNotes');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, 10, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('type_nr', 'TypeNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('notes', 'Notes', 'LONGVARCHAR', true, null, null);
        $this->addColumn('short_notes', 'ShortNotes', 'VARCHAR', false, 25, null);
        $this->addColumn('aux_notes', 'AuxNotes', 'VARCHAR', false, 255, null);
        $this->addColumn('ref_notes_nr', 'RefNotesNr', 'INTEGER', true, 10, 0);
        $this->addColumn('personell_nr', 'PersonellNr', 'INTEGER', true, 10, 0);
        $this->addColumn('personell_name', 'PersonellName', 'VARCHAR', true, 60, '');
        $this->addColumn('send_to_pid', 'SendToPid', 'INTEGER', true, null, 0);
        $this->addColumn('send_to_name', 'SendToName', 'VARCHAR', false, 60, null);
        $this->addColumn('date', 'Date', 'DATE', false, null, null);
        $this->addColumn('time', 'Time', 'TIME', false, null, null);
        $this->addColumn('location_type', 'LocationType', 'VARCHAR', false, 35, null);
        $this->addColumn('location_type_nr', 'LocationTypeNr', 'TINYINT', true, 3, 0);
        $this->addColumn('location_nr', 'LocationNr', 'SMALLINT', true, 8, 0);
        $this->addColumn('location_id', 'LocationId', 'VARCHAR', false, 60, null);
        $this->addColumn('ack_short_id', 'AckShortId', 'VARCHAR', true, 10, '');
        $this->addColumn('date_ack', 'DateAck', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_checked', 'DateChecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_printed', 'DatePrinted', 'TIMESTAMP', false, null, null);
        $this->addColumn('send_by_mail', 'SendByMail', 'BOOLEAN', false, 1, null);
        $this->addColumn('send_by_email', 'SendByEmail', 'BOOLEAN', false, 1, null);
        $this->addColumn('send_by_fax', 'SendByFax', 'BOOLEAN', false, 1, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
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
        return $withPrefix ? CareEncounterNotesTableMap::CLASS_DEFAULT : CareEncounterNotesTableMap::OM_CLASS;
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
     * @return array           (CareEncounterNotes object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterNotesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterNotesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterNotesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterNotesTableMap::OM_CLASS;
            /** @var CareEncounterNotes $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterNotesTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterNotesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterNotesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterNotes $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterNotesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_NR);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_TYPE_NR);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_SHORT_NOTES);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_AUX_NOTES);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_REF_NOTES_NR);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_PERSONELL_NR);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_PERSONELL_NAME);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_SEND_TO_PID);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_SEND_TO_NAME);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_DATE);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_TIME);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_LOCATION_TYPE);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_LOCATION_TYPE_NR);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_LOCATION_NR);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_LOCATION_ID);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_ACK_SHORT_ID);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_DATE_ACK);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_DATE_CHECKED);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_DATE_PRINTED);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_SEND_BY_MAIL);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_SEND_BY_EMAIL);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_SEND_BY_FAX);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterNotesTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.type_nr');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.short_notes');
            $criteria->addSelectColumn($alias . '.aux_notes');
            $criteria->addSelectColumn($alias . '.ref_notes_nr');
            $criteria->addSelectColumn($alias . '.personell_nr');
            $criteria->addSelectColumn($alias . '.personell_name');
            $criteria->addSelectColumn($alias . '.send_to_pid');
            $criteria->addSelectColumn($alias . '.send_to_name');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.time');
            $criteria->addSelectColumn($alias . '.location_type');
            $criteria->addSelectColumn($alias . '.location_type_nr');
            $criteria->addSelectColumn($alias . '.location_nr');
            $criteria->addSelectColumn($alias . '.location_id');
            $criteria->addSelectColumn($alias . '.ack_short_id');
            $criteria->addSelectColumn($alias . '.date_ack');
            $criteria->addSelectColumn($alias . '.date_checked');
            $criteria->addSelectColumn($alias . '.date_printed');
            $criteria->addSelectColumn($alias . '.send_by_mail');
            $criteria->addSelectColumn($alias . '.send_by_email');
            $criteria->addSelectColumn($alias . '.send_by_fax');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterNotesTableMap::DATABASE_NAME)->getTable(CareEncounterNotesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterNotesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterNotesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterNotesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterNotes or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterNotes object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterNotesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterNotes) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterNotesTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterNotesTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterNotesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterNotesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterNotesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_notes table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterNotesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterNotes or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterNotes object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterNotesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterNotes object
        }

        if ($criteria->containsKey(CareEncounterNotesTableMap::COL_NR) && $criteria->keyContainsValue(CareEncounterNotesTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterNotesTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterNotesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterNotesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterNotesTableMap::buildTableMap();
