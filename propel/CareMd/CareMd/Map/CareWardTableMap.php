<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareWard;
use CareMd\CareMd\CareWardQuery;
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
 * This class defines the structure of the 'care_ward' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareWardTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareWardTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_ward';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareWard';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareWard';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 18;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 18;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_ward.nr';

    /**
     * the column name for the ward_id field
     */
    const COL_WARD_ID = 'care_ward.ward_id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_ward.name';

    /**
     * the column name for the is_temp_closed field
     */
    const COL_IS_TEMP_CLOSED = 'care_ward.is_temp_closed';

    /**
     * the column name for the date_create field
     */
    const COL_DATE_CREATE = 'care_ward.date_create';

    /**
     * the column name for the date_close field
     */
    const COL_DATE_CLOSE = 'care_ward.date_close';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_ward.description';

    /**
     * the column name for the info field
     */
    const COL_INFO = 'care_ward.info';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_ward.dept_nr';

    /**
     * the column name for the room_nr_start field
     */
    const COL_ROOM_NR_START = 'care_ward.room_nr_start';

    /**
     * the column name for the room_nr_end field
     */
    const COL_ROOM_NR_END = 'care_ward.room_nr_end';

    /**
     * the column name for the roomprefix field
     */
    const COL_ROOMPREFIX = 'care_ward.roomprefix';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_ward.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_ward.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_ward.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_ward.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_ward.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_ward.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'WardId', 'Name', 'IsTempClosed', 'DateCreate', 'DateClose', 'Description', 'Info', 'DeptNr', 'RoomNrStart', 'RoomNrEnd', 'Roomprefix', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'wardId', 'name', 'isTempClosed', 'dateCreate', 'dateClose', 'description', 'info', 'deptNr', 'roomNrStart', 'roomNrEnd', 'roomprefix', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareWardTableMap::COL_NR, CareWardTableMap::COL_WARD_ID, CareWardTableMap::COL_NAME, CareWardTableMap::COL_IS_TEMP_CLOSED, CareWardTableMap::COL_DATE_CREATE, CareWardTableMap::COL_DATE_CLOSE, CareWardTableMap::COL_DESCRIPTION, CareWardTableMap::COL_INFO, CareWardTableMap::COL_DEPT_NR, CareWardTableMap::COL_ROOM_NR_START, CareWardTableMap::COL_ROOM_NR_END, CareWardTableMap::COL_ROOMPREFIX, CareWardTableMap::COL_STATUS, CareWardTableMap::COL_HISTORY, CareWardTableMap::COL_MODIFY_ID, CareWardTableMap::COL_MODIFY_TIME, CareWardTableMap::COL_CREATE_ID, CareWardTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'ward_id', 'name', 'is_temp_closed', 'date_create', 'date_close', 'description', 'info', 'dept_nr', 'room_nr_start', 'room_nr_end', 'roomprefix', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'WardId' => 1, 'Name' => 2, 'IsTempClosed' => 3, 'DateCreate' => 4, 'DateClose' => 5, 'Description' => 6, 'Info' => 7, 'DeptNr' => 8, 'RoomNrStart' => 9, 'RoomNrEnd' => 10, 'Roomprefix' => 11, 'Status' => 12, 'History' => 13, 'ModifyId' => 14, 'ModifyTime' => 15, 'CreateId' => 16, 'CreateTime' => 17, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'wardId' => 1, 'name' => 2, 'isTempClosed' => 3, 'dateCreate' => 4, 'dateClose' => 5, 'description' => 6, 'info' => 7, 'deptNr' => 8, 'roomNrStart' => 9, 'roomNrEnd' => 10, 'roomprefix' => 11, 'status' => 12, 'history' => 13, 'modifyId' => 14, 'modifyTime' => 15, 'createId' => 16, 'createTime' => 17, ),
        self::TYPE_COLNAME       => array(CareWardTableMap::COL_NR => 0, CareWardTableMap::COL_WARD_ID => 1, CareWardTableMap::COL_NAME => 2, CareWardTableMap::COL_IS_TEMP_CLOSED => 3, CareWardTableMap::COL_DATE_CREATE => 4, CareWardTableMap::COL_DATE_CLOSE => 5, CareWardTableMap::COL_DESCRIPTION => 6, CareWardTableMap::COL_INFO => 7, CareWardTableMap::COL_DEPT_NR => 8, CareWardTableMap::COL_ROOM_NR_START => 9, CareWardTableMap::COL_ROOM_NR_END => 10, CareWardTableMap::COL_ROOMPREFIX => 11, CareWardTableMap::COL_STATUS => 12, CareWardTableMap::COL_HISTORY => 13, CareWardTableMap::COL_MODIFY_ID => 14, CareWardTableMap::COL_MODIFY_TIME => 15, CareWardTableMap::COL_CREATE_ID => 16, CareWardTableMap::COL_CREATE_TIME => 17, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'ward_id' => 1, 'name' => 2, 'is_temp_closed' => 3, 'date_create' => 4, 'date_close' => 5, 'description' => 6, 'info' => 7, 'dept_nr' => 8, 'room_nr_start' => 9, 'room_nr_end' => 10, 'roomprefix' => 11, 'status' => 12, 'history' => 13, 'modify_id' => 14, 'modify_time' => 15, 'create_id' => 16, 'create_time' => 17, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
        $this->setName('care_ward');
        $this->setPhpName('CareWard');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareWard');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'SMALLINT', true, 5, null);
        $this->addColumn('ward_id', 'WardId', 'VARCHAR', true, 35, '');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 35, '');
        $this->addColumn('is_temp_closed', 'IsTempClosed', 'BOOLEAN', true, 1, false);
        $this->addColumn('date_create', 'DateCreate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('date_close', 'DateClose', 'DATE', true, null, '0000-00-00');
        $this->addColumn('description', 'Description', 'LONGVARCHAR', false, null, null);
        $this->addColumn('info', 'Info', 'VARCHAR', false, 255, null);
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('room_nr_start', 'RoomNrStart', 'SMALLINT', true, null, 0);
        $this->addColumn('room_nr_end', 'RoomNrEnd', 'SMALLINT', true, null, 0);
        $this->addColumn('roomprefix', 'Roomprefix', 'VARCHAR', false, 4, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 25, '0');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 25, '0');
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
        return $withPrefix ? CareWardTableMap::CLASS_DEFAULT : CareWardTableMap::OM_CLASS;
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
     * @return array           (CareWard object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareWardTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareWardTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareWardTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareWardTableMap::OM_CLASS;
            /** @var CareWard $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareWardTableMap::addInstanceToPool($obj, $key);
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
            $key = CareWardTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareWardTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareWard $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareWardTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareWardTableMap::COL_NR);
            $criteria->addSelectColumn(CareWardTableMap::COL_WARD_ID);
            $criteria->addSelectColumn(CareWardTableMap::COL_NAME);
            $criteria->addSelectColumn(CareWardTableMap::COL_IS_TEMP_CLOSED);
            $criteria->addSelectColumn(CareWardTableMap::COL_DATE_CREATE);
            $criteria->addSelectColumn(CareWardTableMap::COL_DATE_CLOSE);
            $criteria->addSelectColumn(CareWardTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareWardTableMap::COL_INFO);
            $criteria->addSelectColumn(CareWardTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareWardTableMap::COL_ROOM_NR_START);
            $criteria->addSelectColumn(CareWardTableMap::COL_ROOM_NR_END);
            $criteria->addSelectColumn(CareWardTableMap::COL_ROOMPREFIX);
            $criteria->addSelectColumn(CareWardTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareWardTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareWardTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareWardTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareWardTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareWardTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.ward_id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.is_temp_closed');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_close');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.info');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.room_nr_start');
            $criteria->addSelectColumn($alias . '.room_nr_end');
            $criteria->addSelectColumn($alias . '.roomprefix');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareWardTableMap::DATABASE_NAME)->getTable(CareWardTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareWardTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareWardTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareWardTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareWard or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareWard object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareWardTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareWard) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareWardTableMap::DATABASE_NAME);
            $criteria->add(CareWardTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareWardQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareWardTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareWardTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_ward table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareWardQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareWard or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareWard object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareWardTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareWard object
        }

        if ($criteria->containsKey(CareWardTableMap::COL_NR) && $criteria->keyContainsValue(CareWardTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareWardTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareWardQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareWardTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareWardTableMap::buildTableMap();
