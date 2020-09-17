<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestRequestLaboratory;
use CareMd\CareMd\CareTestRequestLaboratoryQuery;
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
 * This class defines the structure of the 'care_test_request_laboratory' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestRequestLaboratoryTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestRequestLaboratoryTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_request_laboratory';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestRequestLaboratory';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestRequestLaboratory';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_request_laboratory.batch_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_request_laboratory.encounter_nr';

    /**
     * the column name for the room_nr field
     */
    const COL_ROOM_NR = 'care_test_request_laboratory.room_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_test_request_laboratory.dept_nr';

    /**
     * the column name for the doctor_sign field
     */
    const COL_DOCTOR_SIGN = 'care_test_request_laboratory.doctor_sign';

    /**
     * the column name for the highrisk field
     */
    const COL_HIGHRISK = 'care_test_request_laboratory.highrisk';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_test_request_laboratory.notes';

    /**
     * the column name for the send_date field
     */
    const COL_SEND_DATE = 'care_test_request_laboratory.send_date';

    /**
     * the column name for the sample_time field
     */
    const COL_SAMPLE_TIME = 'care_test_request_laboratory.sample_time';

    /**
     * the column name for the sample_weekday field
     */
    const COL_SAMPLE_WEEKDAY = 'care_test_request_laboratory.sample_weekday';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_request_laboratory.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_request_laboratory.history';

    /**
     * the column name for the is_disabled field
     */
    const COL_IS_DISABLED = 'care_test_request_laboratory.is_disabled';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_request_laboratory.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_request_laboratory.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_request_laboratory.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_request_laboratory.create_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'EncounterNr', 'RoomNr', 'DeptNr', 'DoctorSign', 'Highrisk', 'Notes', 'SendDate', 'SampleTime', 'SampleWeekday', 'Status', 'History', 'IsDisabled', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'encounterNr', 'roomNr', 'deptNr', 'doctorSign', 'highrisk', 'notes', 'sendDate', 'sampleTime', 'sampleWeekday', 'status', 'history', 'isDisabled', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTestRequestLaboratoryTableMap::COL_BATCH_NR, CareTestRequestLaboratoryTableMap::COL_ENCOUNTER_NR, CareTestRequestLaboratoryTableMap::COL_ROOM_NR, CareTestRequestLaboratoryTableMap::COL_DEPT_NR, CareTestRequestLaboratoryTableMap::COL_DOCTOR_SIGN, CareTestRequestLaboratoryTableMap::COL_HIGHRISK, CareTestRequestLaboratoryTableMap::COL_NOTES, CareTestRequestLaboratoryTableMap::COL_SEND_DATE, CareTestRequestLaboratoryTableMap::COL_SAMPLE_TIME, CareTestRequestLaboratoryTableMap::COL_SAMPLE_WEEKDAY, CareTestRequestLaboratoryTableMap::COL_STATUS, CareTestRequestLaboratoryTableMap::COL_HISTORY, CareTestRequestLaboratoryTableMap::COL_IS_DISABLED, CareTestRequestLaboratoryTableMap::COL_MODIFY_ID, CareTestRequestLaboratoryTableMap::COL_MODIFY_TIME, CareTestRequestLaboratoryTableMap::COL_CREATE_ID, CareTestRequestLaboratoryTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'encounter_nr', 'room_nr', 'dept_nr', 'doctor_sign', 'highrisk', 'notes', 'send_date', 'sample_time', 'sample_weekday', 'status', 'history', 'is_disabled', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'EncounterNr' => 1, 'RoomNr' => 2, 'DeptNr' => 3, 'DoctorSign' => 4, 'Highrisk' => 5, 'Notes' => 6, 'SendDate' => 7, 'SampleTime' => 8, 'SampleWeekday' => 9, 'Status' => 10, 'History' => 11, 'IsDisabled' => 12, 'ModifyId' => 13, 'ModifyTime' => 14, 'CreateId' => 15, 'CreateTime' => 16, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'encounterNr' => 1, 'roomNr' => 2, 'deptNr' => 3, 'doctorSign' => 4, 'highrisk' => 5, 'notes' => 6, 'sendDate' => 7, 'sampleTime' => 8, 'sampleWeekday' => 9, 'status' => 10, 'history' => 11, 'isDisabled' => 12, 'modifyId' => 13, 'modifyTime' => 14, 'createId' => 15, 'createTime' => 16, ),
        self::TYPE_COLNAME       => array(CareTestRequestLaboratoryTableMap::COL_BATCH_NR => 0, CareTestRequestLaboratoryTableMap::COL_ENCOUNTER_NR => 1, CareTestRequestLaboratoryTableMap::COL_ROOM_NR => 2, CareTestRequestLaboratoryTableMap::COL_DEPT_NR => 3, CareTestRequestLaboratoryTableMap::COL_DOCTOR_SIGN => 4, CareTestRequestLaboratoryTableMap::COL_HIGHRISK => 5, CareTestRequestLaboratoryTableMap::COL_NOTES => 6, CareTestRequestLaboratoryTableMap::COL_SEND_DATE => 7, CareTestRequestLaboratoryTableMap::COL_SAMPLE_TIME => 8, CareTestRequestLaboratoryTableMap::COL_SAMPLE_WEEKDAY => 9, CareTestRequestLaboratoryTableMap::COL_STATUS => 10, CareTestRequestLaboratoryTableMap::COL_HISTORY => 11, CareTestRequestLaboratoryTableMap::COL_IS_DISABLED => 12, CareTestRequestLaboratoryTableMap::COL_MODIFY_ID => 13, CareTestRequestLaboratoryTableMap::COL_MODIFY_TIME => 14, CareTestRequestLaboratoryTableMap::COL_CREATE_ID => 15, CareTestRequestLaboratoryTableMap::COL_CREATE_TIME => 16, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'encounter_nr' => 1, 'room_nr' => 2, 'dept_nr' => 3, 'doctor_sign' => 4, 'highrisk' => 5, 'notes' => 6, 'send_date' => 7, 'sample_time' => 8, 'sample_weekday' => 9, 'status' => 10, 'history' => 11, 'is_disabled' => 12, 'modify_id' => 13, 'modify_time' => 14, 'create_id' => 15, 'create_time' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('care_test_request_laboratory');
        $this->setPhpName('CareTestRequestLaboratory');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestRequestLaboratory');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('room_nr', 'RoomNr', 'INTEGER', true, null, 0);
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('doctor_sign', 'DoctorSign', 'VARCHAR', true, 255, '');
        $this->addColumn('highrisk', 'Highrisk', 'SMALLINT', true, 1, 0);
        $this->addColumn('notes', 'Notes', 'VARCHAR', true, 255, '');
        $this->addColumn('send_date', 'SendDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('sample_time', 'SampleTime', 'TIME', true, null, '00:00:00');
        $this->addColumn('sample_weekday', 'SampleWeekday', 'SMALLINT', true, 1, 0);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 15, '');
        $this->addColumn('history', 'History', 'VARCHAR', true, 255, '');
        $this->addColumn('is_disabled', 'IsDisabled', 'VARCHAR', false, 255, null);
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
        return $withPrefix ? CareTestRequestLaboratoryTableMap::CLASS_DEFAULT : CareTestRequestLaboratoryTableMap::OM_CLASS;
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
     * @return array           (CareTestRequestLaboratory object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestRequestLaboratoryTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestRequestLaboratoryTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestRequestLaboratoryTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestRequestLaboratoryTableMap::OM_CLASS;
            /** @var CareTestRequestLaboratory $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestRequestLaboratoryTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestRequestLaboratoryTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestRequestLaboratoryTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestRequestLaboratory $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestRequestLaboratoryTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_ROOM_NR);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_DOCTOR_SIGN);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_HIGHRISK);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_SEND_DATE);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_SAMPLE_TIME);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_SAMPLE_WEEKDAY);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_IS_DISABLED);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.room_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.doctor_sign');
            $criteria->addSelectColumn($alias . '.highrisk');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.send_date');
            $criteria->addSelectColumn($alias . '.sample_time');
            $criteria->addSelectColumn($alias . '.sample_weekday');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.is_disabled');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestRequestLaboratoryTableMap::DATABASE_NAME)->getTable(CareTestRequestLaboratoryTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestRequestLaboratoryTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestRequestLaboratoryTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestRequestLaboratoryTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestRequestLaboratory or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestRequestLaboratory object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestLaboratoryTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestRequestLaboratory) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestRequestLaboratoryTableMap::DATABASE_NAME);
            $criteria->add(CareTestRequestLaboratoryTableMap::COL_BATCH_NR, (array) $values, Criteria::IN);
        }

        $query = CareTestRequestLaboratoryQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestRequestLaboratoryTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestRequestLaboratoryTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_request_laboratory table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestRequestLaboratoryQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestRequestLaboratory or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestRequestLaboratory object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestLaboratoryTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestRequestLaboratory object
        }

        if ($criteria->containsKey(CareTestRequestLaboratoryTableMap::COL_BATCH_NR) && $criteria->keyContainsValue(CareTestRequestLaboratoryTableMap::COL_BATCH_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestRequestLaboratoryTableMap::COL_BATCH_NR.')');
        }


        // Set the correct dbName
        $query = CareTestRequestLaboratoryQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestRequestLaboratoryTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestRequestLaboratoryTableMap::buildTableMap();
