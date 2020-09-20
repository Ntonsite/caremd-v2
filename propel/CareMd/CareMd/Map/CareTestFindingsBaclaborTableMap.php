<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestFindingsBaclabor;
use CareMd\CareMd\CareTestFindingsBaclaborQuery;
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
 * This class defines the structure of the 'care_test_findings_baclabor' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestFindingsBaclaborTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestFindingsBaclaborTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_findings_baclabor';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestFindingsBaclabor';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestFindingsBaclabor';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 23;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 23;

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_findings_baclabor.batch_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_findings_baclabor.encounter_nr';

    /**
     * the column name for the room_nr field
     */
    const COL_ROOM_NR = 'care_test_findings_baclabor.room_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_test_findings_baclabor.dept_nr';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_test_findings_baclabor.notes';

    /**
     * the column name for the findings_init field
     */
    const COL_FINDINGS_INIT = 'care_test_findings_baclabor.findings_init';

    /**
     * the column name for the findings_current field
     */
    const COL_FINDINGS_CURRENT = 'care_test_findings_baclabor.findings_current';

    /**
     * the column name for the findings_final field
     */
    const COL_FINDINGS_FINAL = 'care_test_findings_baclabor.findings_final';

    /**
     * the column name for the entry_nr field
     */
    const COL_ENTRY_NR = 'care_test_findings_baclabor.entry_nr';

    /**
     * the column name for the rec_date field
     */
    const COL_REC_DATE = 'care_test_findings_baclabor.rec_date';

    /**
     * the column name for the type_general field
     */
    const COL_TYPE_GENERAL = 'care_test_findings_baclabor.type_general';

    /**
     * the column name for the resist_anaerob field
     */
    const COL_RESIST_ANAEROB = 'care_test_findings_baclabor.resist_anaerob';

    /**
     * the column name for the resist_aerob field
     */
    const COL_RESIST_AEROB = 'care_test_findings_baclabor.resist_aerob';

    /**
     * the column name for the findings field
     */
    const COL_FINDINGS = 'care_test_findings_baclabor.findings';

    /**
     * the column name for the doctor_id field
     */
    const COL_DOCTOR_ID = 'care_test_findings_baclabor.doctor_id';

    /**
     * the column name for the findings_date field
     */
    const COL_FINDINGS_DATE = 'care_test_findings_baclabor.findings_date';

    /**
     * the column name for the findings_time field
     */
    const COL_FINDINGS_TIME = 'care_test_findings_baclabor.findings_time';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_findings_baclabor.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_findings_baclabor.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_findings_baclabor.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_findings_baclabor.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_findings_baclabor.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_findings_baclabor.create_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'EncounterNr', 'RoomNr', 'DeptNr', 'Notes', 'FindingsInit', 'FindingsCurrent', 'FindingsFinal', 'EntryNr', 'RecDate', 'TypeGeneral', 'ResistAnaerob', 'ResistAerob', 'Findings', 'DoctorId', 'FindingsDate', 'FindingsTime', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'encounterNr', 'roomNr', 'deptNr', 'notes', 'findingsInit', 'findingsCurrent', 'findingsFinal', 'entryNr', 'recDate', 'typeGeneral', 'resistAnaerob', 'resistAerob', 'findings', 'doctorId', 'findingsDate', 'findingsTime', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTestFindingsBaclaborTableMap::COL_BATCH_NR, CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR, CareTestFindingsBaclaborTableMap::COL_ROOM_NR, CareTestFindingsBaclaborTableMap::COL_DEPT_NR, CareTestFindingsBaclaborTableMap::COL_NOTES, CareTestFindingsBaclaborTableMap::COL_FINDINGS_INIT, CareTestFindingsBaclaborTableMap::COL_FINDINGS_CURRENT, CareTestFindingsBaclaborTableMap::COL_FINDINGS_FINAL, CareTestFindingsBaclaborTableMap::COL_ENTRY_NR, CareTestFindingsBaclaborTableMap::COL_REC_DATE, CareTestFindingsBaclaborTableMap::COL_TYPE_GENERAL, CareTestFindingsBaclaborTableMap::COL_RESIST_ANAEROB, CareTestFindingsBaclaborTableMap::COL_RESIST_AEROB, CareTestFindingsBaclaborTableMap::COL_FINDINGS, CareTestFindingsBaclaborTableMap::COL_DOCTOR_ID, CareTestFindingsBaclaborTableMap::COL_FINDINGS_DATE, CareTestFindingsBaclaborTableMap::COL_FINDINGS_TIME, CareTestFindingsBaclaborTableMap::COL_STATUS, CareTestFindingsBaclaborTableMap::COL_HISTORY, CareTestFindingsBaclaborTableMap::COL_MODIFY_ID, CareTestFindingsBaclaborTableMap::COL_MODIFY_TIME, CareTestFindingsBaclaborTableMap::COL_CREATE_ID, CareTestFindingsBaclaborTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'encounter_nr', 'room_nr', 'dept_nr', 'notes', 'findings_init', 'findings_current', 'findings_final', 'entry_nr', 'rec_date', 'type_general', 'resist_anaerob', 'resist_aerob', 'findings', 'doctor_id', 'findings_date', 'findings_time', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'EncounterNr' => 1, 'RoomNr' => 2, 'DeptNr' => 3, 'Notes' => 4, 'FindingsInit' => 5, 'FindingsCurrent' => 6, 'FindingsFinal' => 7, 'EntryNr' => 8, 'RecDate' => 9, 'TypeGeneral' => 10, 'ResistAnaerob' => 11, 'ResistAerob' => 12, 'Findings' => 13, 'DoctorId' => 14, 'FindingsDate' => 15, 'FindingsTime' => 16, 'Status' => 17, 'History' => 18, 'ModifyId' => 19, 'ModifyTime' => 20, 'CreateId' => 21, 'CreateTime' => 22, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'encounterNr' => 1, 'roomNr' => 2, 'deptNr' => 3, 'notes' => 4, 'findingsInit' => 5, 'findingsCurrent' => 6, 'findingsFinal' => 7, 'entryNr' => 8, 'recDate' => 9, 'typeGeneral' => 10, 'resistAnaerob' => 11, 'resistAerob' => 12, 'findings' => 13, 'doctorId' => 14, 'findingsDate' => 15, 'findingsTime' => 16, 'status' => 17, 'history' => 18, 'modifyId' => 19, 'modifyTime' => 20, 'createId' => 21, 'createTime' => 22, ),
        self::TYPE_COLNAME       => array(CareTestFindingsBaclaborTableMap::COL_BATCH_NR => 0, CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR => 1, CareTestFindingsBaclaborTableMap::COL_ROOM_NR => 2, CareTestFindingsBaclaborTableMap::COL_DEPT_NR => 3, CareTestFindingsBaclaborTableMap::COL_NOTES => 4, CareTestFindingsBaclaborTableMap::COL_FINDINGS_INIT => 5, CareTestFindingsBaclaborTableMap::COL_FINDINGS_CURRENT => 6, CareTestFindingsBaclaborTableMap::COL_FINDINGS_FINAL => 7, CareTestFindingsBaclaborTableMap::COL_ENTRY_NR => 8, CareTestFindingsBaclaborTableMap::COL_REC_DATE => 9, CareTestFindingsBaclaborTableMap::COL_TYPE_GENERAL => 10, CareTestFindingsBaclaborTableMap::COL_RESIST_ANAEROB => 11, CareTestFindingsBaclaborTableMap::COL_RESIST_AEROB => 12, CareTestFindingsBaclaborTableMap::COL_FINDINGS => 13, CareTestFindingsBaclaborTableMap::COL_DOCTOR_ID => 14, CareTestFindingsBaclaborTableMap::COL_FINDINGS_DATE => 15, CareTestFindingsBaclaborTableMap::COL_FINDINGS_TIME => 16, CareTestFindingsBaclaborTableMap::COL_STATUS => 17, CareTestFindingsBaclaborTableMap::COL_HISTORY => 18, CareTestFindingsBaclaborTableMap::COL_MODIFY_ID => 19, CareTestFindingsBaclaborTableMap::COL_MODIFY_TIME => 20, CareTestFindingsBaclaborTableMap::COL_CREATE_ID => 21, CareTestFindingsBaclaborTableMap::COL_CREATE_TIME => 22, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'encounter_nr' => 1, 'room_nr' => 2, 'dept_nr' => 3, 'notes' => 4, 'findings_init' => 5, 'findings_current' => 6, 'findings_final' => 7, 'entry_nr' => 8, 'rec_date' => 9, 'type_general' => 10, 'resist_anaerob' => 11, 'resist_aerob' => 12, 'findings' => 13, 'doctor_id' => 14, 'findings_date' => 15, 'findings_time' => 16, 'status' => 17, 'history' => 18, 'modify_id' => 19, 'modify_time' => 20, 'create_id' => 21, 'create_time' => 22, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
        $this->setName('care_test_findings_baclabor');
        $this->setPhpName('CareTestFindingsBaclabor');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestFindingsBaclabor');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('room_nr', 'RoomNr', 'VARCHAR', true, 10, '');
        $this->addPrimaryKey('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('notes', 'Notes', 'VARCHAR', true, 255, '');
        $this->addColumn('findings_init', 'FindingsInit', 'BOOLEAN', true, 1, false);
        $this->addColumn('findings_current', 'FindingsCurrent', 'BOOLEAN', true, 1, false);
        $this->addColumn('findings_final', 'FindingsFinal', 'BOOLEAN', true, 1, false);
        $this->addColumn('entry_nr', 'EntryNr', 'VARCHAR', true, 10, '');
        $this->addColumn('rec_date', 'RecDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('type_general', 'TypeGeneral', 'LONGVARCHAR', true, null, null);
        $this->addColumn('resist_anaerob', 'ResistAnaerob', 'LONGVARCHAR', true, null, null);
        $this->addColumn('resist_aerob', 'ResistAerob', 'LONGVARCHAR', true, null, null);
        $this->addColumn('findings', 'Findings', 'LONGVARCHAR', true, null, null);
        $this->addColumn('doctor_id', 'DoctorId', 'VARCHAR', true, 35, '');
        $this->addColumn('findings_date', 'FindingsDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('findings_time', 'FindingsTime', 'TIME', true, null, '00:00:00');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 10, '');
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CareMd\CareMd\CareTestFindingsBaclabor $obj A \CareMd\CareMd\CareTestFindingsBaclabor object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getBatchNr() || is_scalar($obj->getBatchNr()) || is_callable([$obj->getBatchNr(), '__toString']) ? (string) $obj->getBatchNr() : $obj->getBatchNr()), (null === $obj->getEncounterNr() || is_scalar($obj->getEncounterNr()) || is_callable([$obj->getEncounterNr(), '__toString']) ? (string) $obj->getEncounterNr() : $obj->getEncounterNr()), (null === $obj->getRoomNr() || is_scalar($obj->getRoomNr()) || is_callable([$obj->getRoomNr(), '__toString']) ? (string) $obj->getRoomNr() : $obj->getRoomNr()), (null === $obj->getDeptNr() || is_scalar($obj->getDeptNr()) || is_callable([$obj->getDeptNr(), '__toString']) ? (string) $obj->getDeptNr() : $obj->getDeptNr())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \CareMd\CareMd\CareTestFindingsBaclabor object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CareTestFindingsBaclabor) {
                $key = serialize([(null === $value->getBatchNr() || is_scalar($value->getBatchNr()) || is_callable([$value->getBatchNr(), '__toString']) ? (string) $value->getBatchNr() : $value->getBatchNr()), (null === $value->getEncounterNr() || is_scalar($value->getEncounterNr()) || is_callable([$value->getEncounterNr(), '__toString']) ? (string) $value->getEncounterNr() : $value->getEncounterNr()), (null === $value->getRoomNr() || is_scalar($value->getRoomNr()) || is_callable([$value->getRoomNr(), '__toString']) ? (string) $value->getRoomNr() : $value->getRoomNr()), (null === $value->getDeptNr() || is_scalar($value->getDeptNr()) || is_callable([$value->getDeptNr(), '__toString']) ? (string) $value->getDeptNr() : $value->getDeptNr())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CareTestFindingsBaclabor object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoomNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoomNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoomNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoomNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoomNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoomNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('RoomNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? CareTestFindingsBaclaborTableMap::CLASS_DEFAULT : CareTestFindingsBaclaborTableMap::OM_CLASS;
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
     * @return array           (CareTestFindingsBaclabor object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestFindingsBaclaborTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestFindingsBaclaborTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestFindingsBaclaborTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestFindingsBaclaborTableMap::OM_CLASS;
            /** @var CareTestFindingsBaclabor $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestFindingsBaclaborTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestFindingsBaclaborTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestFindingsBaclaborTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestFindingsBaclabor $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestFindingsBaclaborTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_ROOM_NR);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_FINDINGS_INIT);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_FINDINGS_CURRENT);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_FINDINGS_FINAL);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_ENTRY_NR);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_REC_DATE);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_TYPE_GENERAL);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_RESIST_ANAEROB);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_RESIST_AEROB);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_FINDINGS);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_DOCTOR_ID);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_FINDINGS_DATE);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_FINDINGS_TIME);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestFindingsBaclaborTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.room_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.findings_init');
            $criteria->addSelectColumn($alias . '.findings_current');
            $criteria->addSelectColumn($alias . '.findings_final');
            $criteria->addSelectColumn($alias . '.entry_nr');
            $criteria->addSelectColumn($alias . '.rec_date');
            $criteria->addSelectColumn($alias . '.type_general');
            $criteria->addSelectColumn($alias . '.resist_anaerob');
            $criteria->addSelectColumn($alias . '.resist_aerob');
            $criteria->addSelectColumn($alias . '.findings');
            $criteria->addSelectColumn($alias . '.doctor_id');
            $criteria->addSelectColumn($alias . '.findings_date');
            $criteria->addSelectColumn($alias . '.findings_time');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestFindingsBaclaborTableMap::DATABASE_NAME)->getTable(CareTestFindingsBaclaborTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestFindingsBaclaborTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestFindingsBaclaborTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestFindingsBaclaborTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestFindingsBaclabor or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestFindingsBaclabor object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsBaclaborTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestFindingsBaclabor) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestFindingsBaclaborTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CareTestFindingsBaclaborTableMap::COL_BATCH_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CareTestFindingsBaclaborTableMap::COL_ROOM_NR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CareTestFindingsBaclaborTableMap::COL_DEPT_NR, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = CareTestFindingsBaclaborQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestFindingsBaclaborTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestFindingsBaclaborTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_findings_baclabor table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestFindingsBaclaborQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestFindingsBaclabor or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestFindingsBaclabor object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsBaclaborTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestFindingsBaclabor object
        }


        // Set the correct dbName
        $query = CareTestFindingsBaclaborQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestFindingsBaclaborTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestFindingsBaclaborTableMap::buildTableMap();
