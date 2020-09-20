<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterSickconfirm;
use CareMd\CareMd\CareEncounterSickconfirmQuery;
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
 * This class defines the structure of the 'care_encounter_sickconfirm' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterSickconfirmTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterSickconfirmTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_sickconfirm';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterSickconfirm';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterSickconfirm';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_encounter_sickconfirm.nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_sickconfirm.encounter_nr';

    /**
     * the column name for the date_confirm field
     */
    const COL_DATE_CONFIRM = 'care_encounter_sickconfirm.date_confirm';

    /**
     * the column name for the date_start field
     */
    const COL_DATE_START = 'care_encounter_sickconfirm.date_start';

    /**
     * the column name for the date_end field
     */
    const COL_DATE_END = 'care_encounter_sickconfirm.date_end';

    /**
     * the column name for the date_create field
     */
    const COL_DATE_CREATE = 'care_encounter_sickconfirm.date_create';

    /**
     * the column name for the diagnosis field
     */
    const COL_DIAGNOSIS = 'care_encounter_sickconfirm.diagnosis';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_encounter_sickconfirm.dept_nr';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_sickconfirm.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_sickconfirm.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_sickconfirm.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_sickconfirm.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_sickconfirm.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_sickconfirm.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'EncounterNr', 'DateConfirm', 'DateStart', 'DateEnd', 'DateCreate', 'Diagnosis', 'DeptNr', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'encounterNr', 'dateConfirm', 'dateStart', 'dateEnd', 'dateCreate', 'diagnosis', 'deptNr', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterSickconfirmTableMap::COL_NR, CareEncounterSickconfirmTableMap::COL_ENCOUNTER_NR, CareEncounterSickconfirmTableMap::COL_DATE_CONFIRM, CareEncounterSickconfirmTableMap::COL_DATE_START, CareEncounterSickconfirmTableMap::COL_DATE_END, CareEncounterSickconfirmTableMap::COL_DATE_CREATE, CareEncounterSickconfirmTableMap::COL_DIAGNOSIS, CareEncounterSickconfirmTableMap::COL_DEPT_NR, CareEncounterSickconfirmTableMap::COL_STATUS, CareEncounterSickconfirmTableMap::COL_HISTORY, CareEncounterSickconfirmTableMap::COL_MODIFY_ID, CareEncounterSickconfirmTableMap::COL_MODIFY_TIME, CareEncounterSickconfirmTableMap::COL_CREATE_ID, CareEncounterSickconfirmTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'encounter_nr', 'date_confirm', 'date_start', 'date_end', 'date_create', 'diagnosis', 'dept_nr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'EncounterNr' => 1, 'DateConfirm' => 2, 'DateStart' => 3, 'DateEnd' => 4, 'DateCreate' => 5, 'Diagnosis' => 6, 'DeptNr' => 7, 'Status' => 8, 'History' => 9, 'ModifyId' => 10, 'ModifyTime' => 11, 'CreateId' => 12, 'CreateTime' => 13, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'encounterNr' => 1, 'dateConfirm' => 2, 'dateStart' => 3, 'dateEnd' => 4, 'dateCreate' => 5, 'diagnosis' => 6, 'deptNr' => 7, 'status' => 8, 'history' => 9, 'modifyId' => 10, 'modifyTime' => 11, 'createId' => 12, 'createTime' => 13, ),
        self::TYPE_COLNAME       => array(CareEncounterSickconfirmTableMap::COL_NR => 0, CareEncounterSickconfirmTableMap::COL_ENCOUNTER_NR => 1, CareEncounterSickconfirmTableMap::COL_DATE_CONFIRM => 2, CareEncounterSickconfirmTableMap::COL_DATE_START => 3, CareEncounterSickconfirmTableMap::COL_DATE_END => 4, CareEncounterSickconfirmTableMap::COL_DATE_CREATE => 5, CareEncounterSickconfirmTableMap::COL_DIAGNOSIS => 6, CareEncounterSickconfirmTableMap::COL_DEPT_NR => 7, CareEncounterSickconfirmTableMap::COL_STATUS => 8, CareEncounterSickconfirmTableMap::COL_HISTORY => 9, CareEncounterSickconfirmTableMap::COL_MODIFY_ID => 10, CareEncounterSickconfirmTableMap::COL_MODIFY_TIME => 11, CareEncounterSickconfirmTableMap::COL_CREATE_ID => 12, CareEncounterSickconfirmTableMap::COL_CREATE_TIME => 13, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'encounter_nr' => 1, 'date_confirm' => 2, 'date_start' => 3, 'date_end' => 4, 'date_create' => 5, 'diagnosis' => 6, 'dept_nr' => 7, 'status' => 8, 'history' => 9, 'modify_id' => 10, 'modify_time' => 11, 'create_id' => 12, 'create_time' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $this->setName('care_encounter_sickconfirm');
        $this->setPhpName('CareEncounterSickconfirm');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterSickconfirm');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('date_confirm', 'DateConfirm', 'DATE', true, null, '0000-00-00');
        $this->addColumn('date_start', 'DateStart', 'DATE', true, null, '0000-00-00');
        $this->addColumn('date_end', 'DateEnd', 'DATE', true, null, '0000-00-00');
        $this->addColumn('date_create', 'DateCreate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('diagnosis', 'Diagnosis', 'LONGVARCHAR', true, null, null);
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, null, 0);
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
        return $withPrefix ? CareEncounterSickconfirmTableMap::CLASS_DEFAULT : CareEncounterSickconfirmTableMap::OM_CLASS;
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
     * @return array           (CareEncounterSickconfirm object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterSickconfirmTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterSickconfirmTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterSickconfirmTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterSickconfirmTableMap::OM_CLASS;
            /** @var CareEncounterSickconfirm $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterSickconfirmTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterSickconfirmTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterSickconfirmTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterSickconfirm $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterSickconfirmTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_NR);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_DATE_CONFIRM);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_DATE_START);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_DATE_END);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_DATE_CREATE);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_DIAGNOSIS);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterSickconfirmTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.date_confirm');
            $criteria->addSelectColumn($alias . '.date_start');
            $criteria->addSelectColumn($alias . '.date_end');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.diagnosis');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterSickconfirmTableMap::DATABASE_NAME)->getTable(CareEncounterSickconfirmTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterSickconfirmTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterSickconfirmTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterSickconfirmTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterSickconfirm or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterSickconfirm object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterSickconfirmTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterSickconfirm) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterSickconfirmTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterSickconfirmTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterSickconfirmQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterSickconfirmTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterSickconfirmTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_sickconfirm table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterSickconfirmQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterSickconfirm or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterSickconfirm object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterSickconfirmTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterSickconfirm object
        }

        if ($criteria->containsKey(CareEncounterSickconfirmTableMap::COL_NR) && $criteria->keyContainsValue(CareEncounterSickconfirmTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterSickconfirmTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterSickconfirmQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterSickconfirmTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterSickconfirmTableMap::buildTableMap();
