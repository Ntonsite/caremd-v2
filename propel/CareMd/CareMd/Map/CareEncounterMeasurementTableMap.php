<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterMeasurement;
use CareMd\CareMd\CareEncounterMeasurementQuery;
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
 * This class defines the structure of the 'care_encounter_measurement' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterMeasurementTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterMeasurementTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_measurement';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterMeasurement';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterMeasurement';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_encounter_measurement.nr';

    /**
     * the column name for the msr_date field
     */
    const COL_MSR_DATE = 'care_encounter_measurement.msr_date';

    /**
     * the column name for the msr_time field
     */
    const COL_MSR_TIME = 'care_encounter_measurement.msr_time';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_measurement.encounter_nr';

    /**
     * the column name for the msr_type_nr field
     */
    const COL_MSR_TYPE_NR = 'care_encounter_measurement.msr_type_nr';

    /**
     * the column name for the value field
     */
    const COL_VALUE = 'care_encounter_measurement.value';

    /**
     * the column name for the unit_nr field
     */
    const COL_UNIT_NR = 'care_encounter_measurement.unit_nr';

    /**
     * the column name for the unit_type_nr field
     */
    const COL_UNIT_TYPE_NR = 'care_encounter_measurement.unit_type_nr';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_encounter_measurement.notes';

    /**
     * the column name for the measured_by field
     */
    const COL_MEASURED_BY = 'care_encounter_measurement.measured_by';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_measurement.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_measurement.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_measurement.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_measurement.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_measurement.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_measurement.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'MsrDate', 'MsrTime', 'EncounterNr', 'MsrTypeNr', 'Value', 'UnitNr', 'UnitTypeNr', 'Notes', 'MeasuredBy', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'msrDate', 'msrTime', 'encounterNr', 'msrTypeNr', 'value', 'unitNr', 'unitTypeNr', 'notes', 'measuredBy', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterMeasurementTableMap::COL_NR, CareEncounterMeasurementTableMap::COL_MSR_DATE, CareEncounterMeasurementTableMap::COL_MSR_TIME, CareEncounterMeasurementTableMap::COL_ENCOUNTER_NR, CareEncounterMeasurementTableMap::COL_MSR_TYPE_NR, CareEncounterMeasurementTableMap::COL_VALUE, CareEncounterMeasurementTableMap::COL_UNIT_NR, CareEncounterMeasurementTableMap::COL_UNIT_TYPE_NR, CareEncounterMeasurementTableMap::COL_NOTES, CareEncounterMeasurementTableMap::COL_MEASURED_BY, CareEncounterMeasurementTableMap::COL_STATUS, CareEncounterMeasurementTableMap::COL_HISTORY, CareEncounterMeasurementTableMap::COL_MODIFY_ID, CareEncounterMeasurementTableMap::COL_MODIFY_TIME, CareEncounterMeasurementTableMap::COL_CREATE_ID, CareEncounterMeasurementTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'msr_date', 'msr_time', 'encounter_nr', 'msr_type_nr', 'value', 'unit_nr', 'unit_type_nr', 'notes', 'measured_by', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'MsrDate' => 1, 'MsrTime' => 2, 'EncounterNr' => 3, 'MsrTypeNr' => 4, 'Value' => 5, 'UnitNr' => 6, 'UnitTypeNr' => 7, 'Notes' => 8, 'MeasuredBy' => 9, 'Status' => 10, 'History' => 11, 'ModifyId' => 12, 'ModifyTime' => 13, 'CreateId' => 14, 'CreateTime' => 15, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'msrDate' => 1, 'msrTime' => 2, 'encounterNr' => 3, 'msrTypeNr' => 4, 'value' => 5, 'unitNr' => 6, 'unitTypeNr' => 7, 'notes' => 8, 'measuredBy' => 9, 'status' => 10, 'history' => 11, 'modifyId' => 12, 'modifyTime' => 13, 'createId' => 14, 'createTime' => 15, ),
        self::TYPE_COLNAME       => array(CareEncounterMeasurementTableMap::COL_NR => 0, CareEncounterMeasurementTableMap::COL_MSR_DATE => 1, CareEncounterMeasurementTableMap::COL_MSR_TIME => 2, CareEncounterMeasurementTableMap::COL_ENCOUNTER_NR => 3, CareEncounterMeasurementTableMap::COL_MSR_TYPE_NR => 4, CareEncounterMeasurementTableMap::COL_VALUE => 5, CareEncounterMeasurementTableMap::COL_UNIT_NR => 6, CareEncounterMeasurementTableMap::COL_UNIT_TYPE_NR => 7, CareEncounterMeasurementTableMap::COL_NOTES => 8, CareEncounterMeasurementTableMap::COL_MEASURED_BY => 9, CareEncounterMeasurementTableMap::COL_STATUS => 10, CareEncounterMeasurementTableMap::COL_HISTORY => 11, CareEncounterMeasurementTableMap::COL_MODIFY_ID => 12, CareEncounterMeasurementTableMap::COL_MODIFY_TIME => 13, CareEncounterMeasurementTableMap::COL_CREATE_ID => 14, CareEncounterMeasurementTableMap::COL_CREATE_TIME => 15, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'msr_date' => 1, 'msr_time' => 2, 'encounter_nr' => 3, 'msr_type_nr' => 4, 'value' => 5, 'unit_nr' => 6, 'unit_type_nr' => 7, 'notes' => 8, 'measured_by' => 9, 'status' => 10, 'history' => 11, 'modify_id' => 12, 'modify_time' => 13, 'create_id' => 14, 'create_time' => 15, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $this->setName('care_encounter_measurement');
        $this->setPhpName('CareEncounterMeasurement');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterMeasurement');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('msr_date', 'MsrDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('msr_time', 'MsrTime', 'VARCHAR', true, 5, '0');
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('msr_type_nr', 'MsrTypeNr', 'TINYINT', true, 3, 0);
        $this->addColumn('value', 'Value', 'VARCHAR', false, 255, null);
        $this->addColumn('unit_nr', 'UnitNr', 'SMALLINT', false, 5, null);
        $this->addColumn('unit_type_nr', 'UnitTypeNr', 'TINYINT', true, 2, 0);
        $this->addColumn('notes', 'Notes', 'VARCHAR', false, 255, null);
        $this->addColumn('measured_by', 'MeasuredBy', 'VARCHAR', true, 35, '');
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
        return $withPrefix ? CareEncounterMeasurementTableMap::CLASS_DEFAULT : CareEncounterMeasurementTableMap::OM_CLASS;
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
     * @return array           (CareEncounterMeasurement object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterMeasurementTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterMeasurementTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterMeasurementTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterMeasurementTableMap::OM_CLASS;
            /** @var CareEncounterMeasurement $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterMeasurementTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterMeasurementTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterMeasurementTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterMeasurement $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterMeasurementTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_NR);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_MSR_DATE);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_MSR_TIME);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_MSR_TYPE_NR);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_VALUE);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_UNIT_NR);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_UNIT_TYPE_NR);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_MEASURED_BY);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterMeasurementTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.msr_date');
            $criteria->addSelectColumn($alias . '.msr_time');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.msr_type_nr');
            $criteria->addSelectColumn($alias . '.value');
            $criteria->addSelectColumn($alias . '.unit_nr');
            $criteria->addSelectColumn($alias . '.unit_type_nr');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.measured_by');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterMeasurementTableMap::DATABASE_NAME)->getTable(CareEncounterMeasurementTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterMeasurementTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterMeasurementTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterMeasurementTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterMeasurement or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterMeasurement object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterMeasurementTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterMeasurement) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterMeasurementTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterMeasurementTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterMeasurementQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterMeasurementTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterMeasurementTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_measurement table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterMeasurementQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterMeasurement or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterMeasurement object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterMeasurementTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterMeasurement object
        }

        if ($criteria->containsKey(CareEncounterMeasurementTableMap::COL_NR) && $criteria->keyContainsValue(CareEncounterMeasurementTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterMeasurementTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterMeasurementQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterMeasurementTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterMeasurementTableMap::buildTableMap();
