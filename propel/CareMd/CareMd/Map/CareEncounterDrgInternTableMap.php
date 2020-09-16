<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterDrgIntern;
use CareMd\CareMd\CareEncounterDrgInternQuery;
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
 * This class defines the structure of the 'care_encounter_drg_intern' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterDrgInternTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterDrgInternTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_drg_intern';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterDrgIntern';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterDrgIntern';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_encounter_drg_intern.nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_drg_intern.encounter_nr';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'care_encounter_drg_intern.date';

    /**
     * the column name for the group_nr field
     */
    const COL_GROUP_NR = 'care_encounter_drg_intern.group_nr';

    /**
     * the column name for the clinician field
     */
    const COL_CLINICIAN = 'care_encounter_drg_intern.clinician';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_encounter_drg_intern.dept_nr';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_drg_intern.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_drg_intern.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_drg_intern.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_drg_intern.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_drg_intern.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_drg_intern.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'EncounterNr', 'Date', 'GroupNr', 'Clinician', 'DeptNr', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'encounterNr', 'date', 'groupNr', 'clinician', 'deptNr', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterDrgInternTableMap::COL_NR, CareEncounterDrgInternTableMap::COL_ENCOUNTER_NR, CareEncounterDrgInternTableMap::COL_DATE, CareEncounterDrgInternTableMap::COL_GROUP_NR, CareEncounterDrgInternTableMap::COL_CLINICIAN, CareEncounterDrgInternTableMap::COL_DEPT_NR, CareEncounterDrgInternTableMap::COL_STATUS, CareEncounterDrgInternTableMap::COL_HISTORY, CareEncounterDrgInternTableMap::COL_MODIFY_ID, CareEncounterDrgInternTableMap::COL_MODIFY_TIME, CareEncounterDrgInternTableMap::COL_CREATE_ID, CareEncounterDrgInternTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'encounter_nr', 'date', 'group_nr', 'clinician', 'dept_nr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'EncounterNr' => 1, 'Date' => 2, 'GroupNr' => 3, 'Clinician' => 4, 'DeptNr' => 5, 'Status' => 6, 'History' => 7, 'ModifyId' => 8, 'ModifyTime' => 9, 'CreateId' => 10, 'CreateTime' => 11, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'encounterNr' => 1, 'date' => 2, 'groupNr' => 3, 'clinician' => 4, 'deptNr' => 5, 'status' => 6, 'history' => 7, 'modifyId' => 8, 'modifyTime' => 9, 'createId' => 10, 'createTime' => 11, ),
        self::TYPE_COLNAME       => array(CareEncounterDrgInternTableMap::COL_NR => 0, CareEncounterDrgInternTableMap::COL_ENCOUNTER_NR => 1, CareEncounterDrgInternTableMap::COL_DATE => 2, CareEncounterDrgInternTableMap::COL_GROUP_NR => 3, CareEncounterDrgInternTableMap::COL_CLINICIAN => 4, CareEncounterDrgInternTableMap::COL_DEPT_NR => 5, CareEncounterDrgInternTableMap::COL_STATUS => 6, CareEncounterDrgInternTableMap::COL_HISTORY => 7, CareEncounterDrgInternTableMap::COL_MODIFY_ID => 8, CareEncounterDrgInternTableMap::COL_MODIFY_TIME => 9, CareEncounterDrgInternTableMap::COL_CREATE_ID => 10, CareEncounterDrgInternTableMap::COL_CREATE_TIME => 11, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'encounter_nr' => 1, 'date' => 2, 'group_nr' => 3, 'clinician' => 4, 'dept_nr' => 5, 'status' => 6, 'history' => 7, 'modify_id' => 8, 'modify_time' => 9, 'create_id' => 10, 'create_time' => 11, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $this->setName('care_encounter_drg_intern');
        $this->setPhpName('CareEncounterDrgIntern');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterDrgIntern');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('date', 'Date', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('group_nr', 'GroupNr', 'SMALLINT', true, 8, 0);
        $this->addColumn('clinician', 'Clinician', 'VARCHAR', true, 60, '');
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
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
        return $withPrefix ? CareEncounterDrgInternTableMap::CLASS_DEFAULT : CareEncounterDrgInternTableMap::OM_CLASS;
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
     * @return array           (CareEncounterDrgIntern object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterDrgInternTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterDrgInternTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterDrgInternTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterDrgInternTableMap::OM_CLASS;
            /** @var CareEncounterDrgIntern $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterDrgInternTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterDrgInternTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterDrgInternTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterDrgIntern $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterDrgInternTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_NR);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_DATE);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_GROUP_NR);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_CLINICIAN);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterDrgInternTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.group_nr');
            $criteria->addSelectColumn($alias . '.clinician');
            $criteria->addSelectColumn($alias . '.dept_nr');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterDrgInternTableMap::DATABASE_NAME)->getTable(CareEncounterDrgInternTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterDrgInternTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterDrgInternTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterDrgInternTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterDrgIntern or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterDrgIntern object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDrgInternTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterDrgIntern) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterDrgInternTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterDrgInternTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterDrgInternQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterDrgInternTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterDrgInternTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_drg_intern table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterDrgInternQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterDrgIntern or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterDrgIntern object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDrgInternTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterDrgIntern object
        }

        if ($criteria->containsKey(CareEncounterDrgInternTableMap::COL_NR) && $criteria->keyContainsValue(CareEncounterDrgInternTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterDrgInternTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterDrgInternQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterDrgInternTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterDrgInternTableMap::buildTableMap();
