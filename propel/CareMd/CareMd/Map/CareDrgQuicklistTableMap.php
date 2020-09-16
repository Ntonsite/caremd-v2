<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareDrgQuicklist;
use CareMd\CareMd\CareDrgQuicklistQuery;
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
 * This class defines the structure of the 'care_drg_quicklist' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareDrgQuicklistTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareDrgQuicklistTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_drg_quicklist';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareDrgQuicklist';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareDrgQuicklist';

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
    const COL_NR = 'care_drg_quicklist.nr';

    /**
     * the column name for the code field
     */
    const COL_CODE = 'care_drg_quicklist.code';

    /**
     * the column name for the code_parent field
     */
    const COL_CODE_PARENT = 'care_drg_quicklist.code_parent';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_drg_quicklist.dept_nr';

    /**
     * the column name for the qlist_type field
     */
    const COL_QLIST_TYPE = 'care_drg_quicklist.qlist_type';

    /**
     * the column name for the rank field
     */
    const COL_RANK = 'care_drg_quicklist.rank';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_drg_quicklist.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_drg_quicklist.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_drg_quicklist.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_drg_quicklist.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_drg_quicklist.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_drg_quicklist.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'Code', 'CodeParent', 'DeptNr', 'QlistType', 'Rank', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'code', 'codeParent', 'deptNr', 'qlistType', 'rank', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareDrgQuicklistTableMap::COL_NR, CareDrgQuicklistTableMap::COL_CODE, CareDrgQuicklistTableMap::COL_CODE_PARENT, CareDrgQuicklistTableMap::COL_DEPT_NR, CareDrgQuicklistTableMap::COL_QLIST_TYPE, CareDrgQuicklistTableMap::COL_RANK, CareDrgQuicklistTableMap::COL_STATUS, CareDrgQuicklistTableMap::COL_HISTORY, CareDrgQuicklistTableMap::COL_MODIFY_ID, CareDrgQuicklistTableMap::COL_MODIFY_TIME, CareDrgQuicklistTableMap::COL_CREATE_ID, CareDrgQuicklistTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'code', 'code_parent', 'dept_nr', 'qlist_type', 'rank', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'Code' => 1, 'CodeParent' => 2, 'DeptNr' => 3, 'QlistType' => 4, 'Rank' => 5, 'Status' => 6, 'History' => 7, 'ModifyId' => 8, 'ModifyTime' => 9, 'CreateId' => 10, 'CreateTime' => 11, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'code' => 1, 'codeParent' => 2, 'deptNr' => 3, 'qlistType' => 4, 'rank' => 5, 'status' => 6, 'history' => 7, 'modifyId' => 8, 'modifyTime' => 9, 'createId' => 10, 'createTime' => 11, ),
        self::TYPE_COLNAME       => array(CareDrgQuicklistTableMap::COL_NR => 0, CareDrgQuicklistTableMap::COL_CODE => 1, CareDrgQuicklistTableMap::COL_CODE_PARENT => 2, CareDrgQuicklistTableMap::COL_DEPT_NR => 3, CareDrgQuicklistTableMap::COL_QLIST_TYPE => 4, CareDrgQuicklistTableMap::COL_RANK => 5, CareDrgQuicklistTableMap::COL_STATUS => 6, CareDrgQuicklistTableMap::COL_HISTORY => 7, CareDrgQuicklistTableMap::COL_MODIFY_ID => 8, CareDrgQuicklistTableMap::COL_MODIFY_TIME => 9, CareDrgQuicklistTableMap::COL_CREATE_ID => 10, CareDrgQuicklistTableMap::COL_CREATE_TIME => 11, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'code' => 1, 'code_parent' => 2, 'dept_nr' => 3, 'qlist_type' => 4, 'rank' => 5, 'status' => 6, 'history' => 7, 'modify_id' => 8, 'modify_time' => 9, 'create_id' => 10, 'create_time' => 11, ),
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
        $this->setName('care_drg_quicklist');
        $this->setPhpName('CareDrgQuicklist');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareDrgQuicklist');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('code', 'Code', 'VARCHAR', true, 25, '');
        $this->addColumn('code_parent', 'CodeParent', 'VARCHAR', true, 25, '');
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('qlist_type', 'QlistType', 'VARCHAR', true, 25, '0');
        $this->addColumn('rank', 'Rank', 'INTEGER', true, null, 0);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 15, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 25, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 25, '');
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
        return $withPrefix ? CareDrgQuicklistTableMap::CLASS_DEFAULT : CareDrgQuicklistTableMap::OM_CLASS;
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
     * @return array           (CareDrgQuicklist object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareDrgQuicklistTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareDrgQuicklistTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareDrgQuicklistTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareDrgQuicklistTableMap::OM_CLASS;
            /** @var CareDrgQuicklist $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareDrgQuicklistTableMap::addInstanceToPool($obj, $key);
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
            $key = CareDrgQuicklistTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareDrgQuicklistTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareDrgQuicklist $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareDrgQuicklistTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_NR);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_CODE);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_CODE_PARENT);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_QLIST_TYPE);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_RANK);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareDrgQuicklistTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.code_parent');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.qlist_type');
            $criteria->addSelectColumn($alias . '.rank');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareDrgQuicklistTableMap::DATABASE_NAME)->getTable(CareDrgQuicklistTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareDrgQuicklistTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareDrgQuicklistTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareDrgQuicklistTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareDrgQuicklist or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareDrgQuicklist object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDrgQuicklistTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareDrgQuicklist) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareDrgQuicklistTableMap::DATABASE_NAME);
            $criteria->add(CareDrgQuicklistTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareDrgQuicklistQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareDrgQuicklistTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareDrgQuicklistTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_drg_quicklist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareDrgQuicklistQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareDrgQuicklist or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareDrgQuicklist object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDrgQuicklistTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareDrgQuicklist object
        }

        if ($criteria->containsKey(CareDrgQuicklistTableMap::COL_NR) && $criteria->keyContainsValue(CareDrgQuicklistTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareDrgQuicklistTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareDrgQuicklistQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareDrgQuicklistTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareDrgQuicklistTableMap::buildTableMap();
