<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareAppointment;
use CareMd\CareMd\CareAppointmentQuery;
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
 * This class defines the structure of the 'care_appointment' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareAppointmentTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareAppointmentTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_appointment';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareAppointment';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareAppointment';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 26;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 26;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_appointment.nr';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_appointment.pid';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'care_appointment.date';

    /**
     * the column name for the time field
     */
    const COL_TIME = 'care_appointment.time';

    /**
     * the column name for the to_dept_id field
     */
    const COL_TO_DEPT_ID = 'care_appointment.to_dept_id';

    /**
     * the column name for the to_dept_nr field
     */
    const COL_TO_DEPT_NR = 'care_appointment.to_dept_nr';

    /**
     * the column name for the to_personell_nr field
     */
    const COL_TO_PERSONELL_NR = 'care_appointment.to_personell_nr';

    /**
     * the column name for the to_personell_name field
     */
    const COL_TO_PERSONELL_NAME = 'care_appointment.to_personell_name';

    /**
     * the column name for the purpose field
     */
    const COL_PURPOSE = 'care_appointment.purpose';

    /**
     * the column name for the urgency field
     */
    const COL_URGENCY = 'care_appointment.urgency';

    /**
     * the column name for the remind field
     */
    const COL_REMIND = 'care_appointment.remind';

    /**
     * the column name for the remind_email field
     */
    const COL_REMIND_EMAIL = 'care_appointment.remind_email';

    /**
     * the column name for the remind_mail field
     */
    const COL_REMIND_MAIL = 'care_appointment.remind_mail';

    /**
     * the column name for the remind_phone field
     */
    const COL_REMIND_PHONE = 'care_appointment.remind_phone';

    /**
     * the column name for the appt_status field
     */
    const COL_APPT_STATUS = 'care_appointment.appt_status';

    /**
     * the column name for the cancel_by field
     */
    const COL_CANCEL_BY = 'care_appointment.cancel_by';

    /**
     * the column name for the cancel_date field
     */
    const COL_CANCEL_DATE = 'care_appointment.cancel_date';

    /**
     * the column name for the cancel_reason field
     */
    const COL_CANCEL_REASON = 'care_appointment.cancel_reason';

    /**
     * the column name for the encounter_class_nr field
     */
    const COL_ENCOUNTER_CLASS_NR = 'care_appointment.encounter_class_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_appointment.encounter_nr';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_appointment.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_appointment.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_appointment.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_appointment.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_appointment.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_appointment.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'Pid', 'Date', 'Time', 'ToDeptId', 'ToDeptNr', 'ToPersonellNr', 'ToPersonellName', 'Purpose', 'Urgency', 'Remind', 'RemindEmail', 'RemindMail', 'RemindPhone', 'ApptStatus', 'CancelBy', 'CancelDate', 'CancelReason', 'EncounterClassNr', 'EncounterNr', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'pid', 'date', 'time', 'toDeptId', 'toDeptNr', 'toPersonellNr', 'toPersonellName', 'purpose', 'urgency', 'remind', 'remindEmail', 'remindMail', 'remindPhone', 'apptStatus', 'cancelBy', 'cancelDate', 'cancelReason', 'encounterClassNr', 'encounterNr', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareAppointmentTableMap::COL_NR, CareAppointmentTableMap::COL_PID, CareAppointmentTableMap::COL_DATE, CareAppointmentTableMap::COL_TIME, CareAppointmentTableMap::COL_TO_DEPT_ID, CareAppointmentTableMap::COL_TO_DEPT_NR, CareAppointmentTableMap::COL_TO_PERSONELL_NR, CareAppointmentTableMap::COL_TO_PERSONELL_NAME, CareAppointmentTableMap::COL_PURPOSE, CareAppointmentTableMap::COL_URGENCY, CareAppointmentTableMap::COL_REMIND, CareAppointmentTableMap::COL_REMIND_EMAIL, CareAppointmentTableMap::COL_REMIND_MAIL, CareAppointmentTableMap::COL_REMIND_PHONE, CareAppointmentTableMap::COL_APPT_STATUS, CareAppointmentTableMap::COL_CANCEL_BY, CareAppointmentTableMap::COL_CANCEL_DATE, CareAppointmentTableMap::COL_CANCEL_REASON, CareAppointmentTableMap::COL_ENCOUNTER_CLASS_NR, CareAppointmentTableMap::COL_ENCOUNTER_NR, CareAppointmentTableMap::COL_STATUS, CareAppointmentTableMap::COL_HISTORY, CareAppointmentTableMap::COL_MODIFY_ID, CareAppointmentTableMap::COL_MODIFY_TIME, CareAppointmentTableMap::COL_CREATE_ID, CareAppointmentTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'pid', 'date', 'time', 'to_dept_id', 'to_dept_nr', 'to_personell_nr', 'to_personell_name', 'purpose', 'urgency', 'remind', 'remind_email', 'remind_mail', 'remind_phone', 'appt_status', 'cancel_by', 'cancel_date', 'cancel_reason', 'encounter_class_nr', 'encounter_nr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'Pid' => 1, 'Date' => 2, 'Time' => 3, 'ToDeptId' => 4, 'ToDeptNr' => 5, 'ToPersonellNr' => 6, 'ToPersonellName' => 7, 'Purpose' => 8, 'Urgency' => 9, 'Remind' => 10, 'RemindEmail' => 11, 'RemindMail' => 12, 'RemindPhone' => 13, 'ApptStatus' => 14, 'CancelBy' => 15, 'CancelDate' => 16, 'CancelReason' => 17, 'EncounterClassNr' => 18, 'EncounterNr' => 19, 'Status' => 20, 'History' => 21, 'ModifyId' => 22, 'ModifyTime' => 23, 'CreateId' => 24, 'CreateTime' => 25, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'pid' => 1, 'date' => 2, 'time' => 3, 'toDeptId' => 4, 'toDeptNr' => 5, 'toPersonellNr' => 6, 'toPersonellName' => 7, 'purpose' => 8, 'urgency' => 9, 'remind' => 10, 'remindEmail' => 11, 'remindMail' => 12, 'remindPhone' => 13, 'apptStatus' => 14, 'cancelBy' => 15, 'cancelDate' => 16, 'cancelReason' => 17, 'encounterClassNr' => 18, 'encounterNr' => 19, 'status' => 20, 'history' => 21, 'modifyId' => 22, 'modifyTime' => 23, 'createId' => 24, 'createTime' => 25, ),
        self::TYPE_COLNAME       => array(CareAppointmentTableMap::COL_NR => 0, CareAppointmentTableMap::COL_PID => 1, CareAppointmentTableMap::COL_DATE => 2, CareAppointmentTableMap::COL_TIME => 3, CareAppointmentTableMap::COL_TO_DEPT_ID => 4, CareAppointmentTableMap::COL_TO_DEPT_NR => 5, CareAppointmentTableMap::COL_TO_PERSONELL_NR => 6, CareAppointmentTableMap::COL_TO_PERSONELL_NAME => 7, CareAppointmentTableMap::COL_PURPOSE => 8, CareAppointmentTableMap::COL_URGENCY => 9, CareAppointmentTableMap::COL_REMIND => 10, CareAppointmentTableMap::COL_REMIND_EMAIL => 11, CareAppointmentTableMap::COL_REMIND_MAIL => 12, CareAppointmentTableMap::COL_REMIND_PHONE => 13, CareAppointmentTableMap::COL_APPT_STATUS => 14, CareAppointmentTableMap::COL_CANCEL_BY => 15, CareAppointmentTableMap::COL_CANCEL_DATE => 16, CareAppointmentTableMap::COL_CANCEL_REASON => 17, CareAppointmentTableMap::COL_ENCOUNTER_CLASS_NR => 18, CareAppointmentTableMap::COL_ENCOUNTER_NR => 19, CareAppointmentTableMap::COL_STATUS => 20, CareAppointmentTableMap::COL_HISTORY => 21, CareAppointmentTableMap::COL_MODIFY_ID => 22, CareAppointmentTableMap::COL_MODIFY_TIME => 23, CareAppointmentTableMap::COL_CREATE_ID => 24, CareAppointmentTableMap::COL_CREATE_TIME => 25, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'pid' => 1, 'date' => 2, 'time' => 3, 'to_dept_id' => 4, 'to_dept_nr' => 5, 'to_personell_nr' => 6, 'to_personell_name' => 7, 'purpose' => 8, 'urgency' => 9, 'remind' => 10, 'remind_email' => 11, 'remind_mail' => 12, 'remind_phone' => 13, 'appt_status' => 14, 'cancel_by' => 15, 'cancel_date' => 16, 'cancel_reason' => 17, 'encounter_class_nr' => 18, 'encounter_nr' => 19, 'status' => 20, 'history' => 21, 'modify_id' => 22, 'modify_time' => 23, 'create_id' => 24, 'create_time' => 25, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
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
        $this->setName('care_appointment');
        $this->setPhpName('CareAppointment');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareAppointment');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'BIGINT', true, null, null);
        $this->addColumn('pid', 'Pid', 'INTEGER', true, null, 0);
        $this->addColumn('date', 'Date', 'DATE', true, null, '0000-00-00');
        $this->addColumn('time', 'Time', 'TIME', true, null, '00:00:00');
        $this->addColumn('to_dept_id', 'ToDeptId', 'VARCHAR', true, 25, '');
        $this->addColumn('to_dept_nr', 'ToDeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('to_personell_nr', 'ToPersonellNr', 'INTEGER', true, null, 0);
        $this->addColumn('to_personell_name', 'ToPersonellName', 'VARCHAR', false, 60, null);
        $this->addColumn('purpose', 'Purpose', 'LONGVARCHAR', true, null, null);
        $this->addColumn('urgency', 'Urgency', 'TINYINT', true, 2, 0);
        $this->addColumn('remind', 'Remind', 'BOOLEAN', true, 1, false);
        $this->addColumn('remind_email', 'RemindEmail', 'BOOLEAN', true, 1, false);
        $this->addColumn('remind_mail', 'RemindMail', 'BOOLEAN', true, 1, false);
        $this->addColumn('remind_phone', 'RemindPhone', 'BOOLEAN', true, 1, false);
        $this->addColumn('appt_status', 'ApptStatus', 'VARCHAR', true, 35, 'pending');
        $this->addColumn('cancel_by', 'CancelBy', 'VARCHAR', true, 255, '');
        $this->addColumn('cancel_date', 'CancelDate', 'DATE', false, null, null);
        $this->addColumn('cancel_reason', 'CancelReason', 'VARCHAR', false, 255, null);
        $this->addColumn('encounter_class_nr', 'EncounterClassNr', 'INTEGER', true, 1, 0);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
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
        return (string) $row[
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
        return $withPrefix ? CareAppointmentTableMap::CLASS_DEFAULT : CareAppointmentTableMap::OM_CLASS;
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
     * @return array           (CareAppointment object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareAppointmentTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareAppointmentTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareAppointmentTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareAppointmentTableMap::OM_CLASS;
            /** @var CareAppointment $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareAppointmentTableMap::addInstanceToPool($obj, $key);
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
            $key = CareAppointmentTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareAppointmentTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareAppointment $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareAppointmentTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_NR);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_PID);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_DATE);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_TIME);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_TO_DEPT_ID);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_TO_DEPT_NR);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_TO_PERSONELL_NR);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_TO_PERSONELL_NAME);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_PURPOSE);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_URGENCY);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_REMIND);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_REMIND_EMAIL);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_REMIND_MAIL);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_REMIND_PHONE);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_APPT_STATUS);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_CANCEL_BY);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_CANCEL_DATE);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_CANCEL_REASON);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_ENCOUNTER_CLASS_NR);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareAppointmentTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.time');
            $criteria->addSelectColumn($alias . '.to_dept_id');
            $criteria->addSelectColumn($alias . '.to_dept_nr');
            $criteria->addSelectColumn($alias . '.to_personell_nr');
            $criteria->addSelectColumn($alias . '.to_personell_name');
            $criteria->addSelectColumn($alias . '.purpose');
            $criteria->addSelectColumn($alias . '.urgency');
            $criteria->addSelectColumn($alias . '.remind');
            $criteria->addSelectColumn($alias . '.remind_email');
            $criteria->addSelectColumn($alias . '.remind_mail');
            $criteria->addSelectColumn($alias . '.remind_phone');
            $criteria->addSelectColumn($alias . '.appt_status');
            $criteria->addSelectColumn($alias . '.cancel_by');
            $criteria->addSelectColumn($alias . '.cancel_date');
            $criteria->addSelectColumn($alias . '.cancel_reason');
            $criteria->addSelectColumn($alias . '.encounter_class_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareAppointmentTableMap::DATABASE_NAME)->getTable(CareAppointmentTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareAppointmentTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareAppointmentTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareAppointmentTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareAppointment or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareAppointment object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareAppointmentTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareAppointment) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareAppointmentTableMap::DATABASE_NAME);
            $criteria->add(CareAppointmentTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareAppointmentQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareAppointmentTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareAppointmentTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_appointment table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareAppointmentQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareAppointment or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareAppointment object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareAppointmentTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareAppointment object
        }

        if ($criteria->containsKey(CareAppointmentTableMap::COL_NR) && $criteria->keyContainsValue(CareAppointmentTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareAppointmentTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareAppointmentQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareAppointmentTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareAppointmentTableMap::buildTableMap();
