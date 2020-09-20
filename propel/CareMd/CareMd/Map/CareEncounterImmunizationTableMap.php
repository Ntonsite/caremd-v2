<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterImmunization;
use CareMd\CareMd\CareEncounterImmunizationQuery;
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
 * This class defines the structure of the 'care_encounter_immunization' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterImmunizationTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterImmunizationTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_immunization';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterImmunization';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterImmunization';

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
     * the column name for the nr field
     */
    const COL_NR = 'care_encounter_immunization.nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_immunization.encounter_nr';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'care_encounter_immunization.date';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'care_encounter_immunization.type';

    /**
     * the column name for the medicine field
     */
    const COL_MEDICINE = 'care_encounter_immunization.medicine';

    /**
     * the column name for the dosage field
     */
    const COL_DOSAGE = 'care_encounter_immunization.dosage';

    /**
     * the column name for the application_type_nr field
     */
    const COL_APPLICATION_TYPE_NR = 'care_encounter_immunization.application_type_nr';

    /**
     * the column name for the application_by field
     */
    const COL_APPLICATION_BY = 'care_encounter_immunization.application_by';

    /**
     * the column name for the titer field
     */
    const COL_TITER = 'care_encounter_immunization.titer';

    /**
     * the column name for the refresh_date field
     */
    const COL_REFRESH_DATE = 'care_encounter_immunization.refresh_date';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_encounter_immunization.notes';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_immunization.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_immunization.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_immunization.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_immunization.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_immunization.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_immunization.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'EncounterNr', 'Date', 'Type', 'Medicine', 'Dosage', 'ApplicationTypeNr', 'ApplicationBy', 'Titer', 'RefreshDate', 'Notes', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'encounterNr', 'date', 'type', 'medicine', 'dosage', 'applicationTypeNr', 'applicationBy', 'titer', 'refreshDate', 'notes', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterImmunizationTableMap::COL_NR, CareEncounterImmunizationTableMap::COL_ENCOUNTER_NR, CareEncounterImmunizationTableMap::COL_DATE, CareEncounterImmunizationTableMap::COL_TYPE, CareEncounterImmunizationTableMap::COL_MEDICINE, CareEncounterImmunizationTableMap::COL_DOSAGE, CareEncounterImmunizationTableMap::COL_APPLICATION_TYPE_NR, CareEncounterImmunizationTableMap::COL_APPLICATION_BY, CareEncounterImmunizationTableMap::COL_TITER, CareEncounterImmunizationTableMap::COL_REFRESH_DATE, CareEncounterImmunizationTableMap::COL_NOTES, CareEncounterImmunizationTableMap::COL_STATUS, CareEncounterImmunizationTableMap::COL_HISTORY, CareEncounterImmunizationTableMap::COL_MODIFY_ID, CareEncounterImmunizationTableMap::COL_MODIFY_TIME, CareEncounterImmunizationTableMap::COL_CREATE_ID, CareEncounterImmunizationTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'encounter_nr', 'date', 'type', 'medicine', 'dosage', 'application_type_nr', 'application_by', 'titer', 'refresh_date', 'notes', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'EncounterNr' => 1, 'Date' => 2, 'Type' => 3, 'Medicine' => 4, 'Dosage' => 5, 'ApplicationTypeNr' => 6, 'ApplicationBy' => 7, 'Titer' => 8, 'RefreshDate' => 9, 'Notes' => 10, 'Status' => 11, 'History' => 12, 'ModifyId' => 13, 'ModifyTime' => 14, 'CreateId' => 15, 'CreateTime' => 16, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'encounterNr' => 1, 'date' => 2, 'type' => 3, 'medicine' => 4, 'dosage' => 5, 'applicationTypeNr' => 6, 'applicationBy' => 7, 'titer' => 8, 'refreshDate' => 9, 'notes' => 10, 'status' => 11, 'history' => 12, 'modifyId' => 13, 'modifyTime' => 14, 'createId' => 15, 'createTime' => 16, ),
        self::TYPE_COLNAME       => array(CareEncounterImmunizationTableMap::COL_NR => 0, CareEncounterImmunizationTableMap::COL_ENCOUNTER_NR => 1, CareEncounterImmunizationTableMap::COL_DATE => 2, CareEncounterImmunizationTableMap::COL_TYPE => 3, CareEncounterImmunizationTableMap::COL_MEDICINE => 4, CareEncounterImmunizationTableMap::COL_DOSAGE => 5, CareEncounterImmunizationTableMap::COL_APPLICATION_TYPE_NR => 6, CareEncounterImmunizationTableMap::COL_APPLICATION_BY => 7, CareEncounterImmunizationTableMap::COL_TITER => 8, CareEncounterImmunizationTableMap::COL_REFRESH_DATE => 9, CareEncounterImmunizationTableMap::COL_NOTES => 10, CareEncounterImmunizationTableMap::COL_STATUS => 11, CareEncounterImmunizationTableMap::COL_HISTORY => 12, CareEncounterImmunizationTableMap::COL_MODIFY_ID => 13, CareEncounterImmunizationTableMap::COL_MODIFY_TIME => 14, CareEncounterImmunizationTableMap::COL_CREATE_ID => 15, CareEncounterImmunizationTableMap::COL_CREATE_TIME => 16, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'encounter_nr' => 1, 'date' => 2, 'type' => 3, 'medicine' => 4, 'dosage' => 5, 'application_type_nr' => 6, 'application_by' => 7, 'titer' => 8, 'refresh_date' => 9, 'notes' => 10, 'status' => 11, 'history' => 12, 'modify_id' => 13, 'modify_time' => 14, 'create_id' => 15, 'create_time' => 16, ),
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
        $this->setName('care_encounter_immunization');
        $this->setPhpName('CareEncounterImmunization');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterImmunization');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, 10, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('date', 'Date', 'DATE', true, null, '0000-00-00');
        $this->addColumn('type', 'Type', 'VARCHAR', true, 60, '');
        $this->addColumn('medicine', 'Medicine', 'VARCHAR', true, 60, '');
        $this->addColumn('dosage', 'Dosage', 'VARCHAR', false, 60, null);
        $this->addColumn('application_type_nr', 'ApplicationTypeNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('application_by', 'ApplicationBy', 'VARCHAR', false, 60, null);
        $this->addColumn('titer', 'Titer', 'VARCHAR', false, 15, null);
        $this->addColumn('refresh_date', 'RefreshDate', 'DATE', false, null, null);
        $this->addColumn('notes', 'Notes', 'LONGVARCHAR', false, null, null);
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
        return $withPrefix ? CareEncounterImmunizationTableMap::CLASS_DEFAULT : CareEncounterImmunizationTableMap::OM_CLASS;
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
     * @return array           (CareEncounterImmunization object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterImmunizationTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterImmunizationTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterImmunizationTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterImmunizationTableMap::OM_CLASS;
            /** @var CareEncounterImmunization $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterImmunizationTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterImmunizationTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterImmunizationTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterImmunization $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterImmunizationTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_NR);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_DATE);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_TYPE);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_MEDICINE);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_DOSAGE);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_APPLICATION_TYPE_NR);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_APPLICATION_BY);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_TITER);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_REFRESH_DATE);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterImmunizationTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.medicine');
            $criteria->addSelectColumn($alias . '.dosage');
            $criteria->addSelectColumn($alias . '.application_type_nr');
            $criteria->addSelectColumn($alias . '.application_by');
            $criteria->addSelectColumn($alias . '.titer');
            $criteria->addSelectColumn($alias . '.refresh_date');
            $criteria->addSelectColumn($alias . '.notes');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterImmunizationTableMap::DATABASE_NAME)->getTable(CareEncounterImmunizationTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterImmunizationTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterImmunizationTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterImmunizationTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterImmunization or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterImmunization object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterImmunizationTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterImmunization) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterImmunizationTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterImmunizationTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterImmunizationQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterImmunizationTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterImmunizationTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_immunization table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterImmunizationQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterImmunization or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterImmunization object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterImmunizationTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterImmunization object
        }

        if ($criteria->containsKey(CareEncounterImmunizationTableMap::COL_NR) && $criteria->keyContainsValue(CareEncounterImmunizationTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterImmunizationTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterImmunizationQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterImmunizationTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterImmunizationTableMap::buildTableMap();
