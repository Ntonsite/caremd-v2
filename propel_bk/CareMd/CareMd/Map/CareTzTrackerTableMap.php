<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzTracker;
use CareMd\CareMd\CareTzTrackerQuery;
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
 * This class defines the structure of the 'care_tz_tracker' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzTrackerTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzTrackerTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_tracker';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzTracker';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzTracker';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 13;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 13;

    /**
     * the column name for the tracker_ID field
     */
    const COL_TRACKER_ID = 'care_tz_tracker.tracker_ID';

    /**
     * the column name for the time field
     */
    const COL_TIME = 'care_tz_tracker.time';

    /**
     * the column name for the module field
     */
    const COL_MODULE = 'care_tz_tracker.module';

    /**
     * the column name for the module_id field
     */
    const COL_MODULE_ID = 'care_tz_tracker.module_id';

    /**
     * the column name for the refering_module field
     */
    const COL_REFERING_MODULE = 'care_tz_tracker.refering_module';

    /**
     * the column name for the refering_module_id field
     */
    const COL_REFERING_MODULE_ID = 'care_tz_tracker.refering_module_id';

    /**
     * the column name for the action field
     */
    const COL_ACTION = 'care_tz_tracker.action';

    /**
     * the column name for the old_value field
     */
    const COL_OLD_VALUE = 'care_tz_tracker.old_value';

    /**
     * the column name for the new_value field
     */
    const COL_NEW_VALUE = 'care_tz_tracker.new_value';

    /**
     * the column name for the value_type field
     */
    const COL_VALUE_TYPE = 'care_tz_tracker.value_type';

    /**
     * the column name for the parameters field
     */
    const COL_PARAMETERS = 'care_tz_tracker.parameters';

    /**
     * the column name for the comment_user field
     */
    const COL_COMMENT_USER = 'care_tz_tracker.comment_user';

    /**
     * the column name for the session_user field
     */
    const COL_SESSION_USER = 'care_tz_tracker.session_user';

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
        self::TYPE_PHPNAME       => array('TrackerId', 'Time', 'Module', 'ModuleId', 'ReferingModule', 'ReferingModuleId', 'Action', 'OldValue', 'NewValue', 'ValueType', 'Parameters', 'CommentUser', 'SessionUser', ),
        self::TYPE_CAMELNAME     => array('trackerId', 'time', 'module', 'moduleId', 'referingModule', 'referingModuleId', 'action', 'oldValue', 'newValue', 'valueType', 'parameters', 'commentUser', 'sessionUser', ),
        self::TYPE_COLNAME       => array(CareTzTrackerTableMap::COL_TRACKER_ID, CareTzTrackerTableMap::COL_TIME, CareTzTrackerTableMap::COL_MODULE, CareTzTrackerTableMap::COL_MODULE_ID, CareTzTrackerTableMap::COL_REFERING_MODULE, CareTzTrackerTableMap::COL_REFERING_MODULE_ID, CareTzTrackerTableMap::COL_ACTION, CareTzTrackerTableMap::COL_OLD_VALUE, CareTzTrackerTableMap::COL_NEW_VALUE, CareTzTrackerTableMap::COL_VALUE_TYPE, CareTzTrackerTableMap::COL_PARAMETERS, CareTzTrackerTableMap::COL_COMMENT_USER, CareTzTrackerTableMap::COL_SESSION_USER, ),
        self::TYPE_FIELDNAME     => array('tracker_ID', 'time', 'module', 'module_id', 'refering_module', 'refering_module_id', 'action', 'old_value', 'new_value', 'value_type', 'parameters', 'comment_user', 'session_user', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('TrackerId' => 0, 'Time' => 1, 'Module' => 2, 'ModuleId' => 3, 'ReferingModule' => 4, 'ReferingModuleId' => 5, 'Action' => 6, 'OldValue' => 7, 'NewValue' => 8, 'ValueType' => 9, 'Parameters' => 10, 'CommentUser' => 11, 'SessionUser' => 12, ),
        self::TYPE_CAMELNAME     => array('trackerId' => 0, 'time' => 1, 'module' => 2, 'moduleId' => 3, 'referingModule' => 4, 'referingModuleId' => 5, 'action' => 6, 'oldValue' => 7, 'newValue' => 8, 'valueType' => 9, 'parameters' => 10, 'commentUser' => 11, 'sessionUser' => 12, ),
        self::TYPE_COLNAME       => array(CareTzTrackerTableMap::COL_TRACKER_ID => 0, CareTzTrackerTableMap::COL_TIME => 1, CareTzTrackerTableMap::COL_MODULE => 2, CareTzTrackerTableMap::COL_MODULE_ID => 3, CareTzTrackerTableMap::COL_REFERING_MODULE => 4, CareTzTrackerTableMap::COL_REFERING_MODULE_ID => 5, CareTzTrackerTableMap::COL_ACTION => 6, CareTzTrackerTableMap::COL_OLD_VALUE => 7, CareTzTrackerTableMap::COL_NEW_VALUE => 8, CareTzTrackerTableMap::COL_VALUE_TYPE => 9, CareTzTrackerTableMap::COL_PARAMETERS => 10, CareTzTrackerTableMap::COL_COMMENT_USER => 11, CareTzTrackerTableMap::COL_SESSION_USER => 12, ),
        self::TYPE_FIELDNAME     => array('tracker_ID' => 0, 'time' => 1, 'module' => 2, 'module_id' => 3, 'refering_module' => 4, 'refering_module_id' => 5, 'action' => 6, 'old_value' => 7, 'new_value' => 8, 'value_type' => 9, 'parameters' => 10, 'comment_user' => 11, 'session_user' => 12, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $this->setName('care_tz_tracker');
        $this->setPhpName('CareTzTracker');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzTracker');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('tracker_ID', 'TrackerId', 'BIGINT', true, null, null);
        $this->addColumn('time', 'Time', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('module', 'Module', 'VARCHAR', true, 255, null);
        $this->addColumn('module_id', 'ModuleId', 'BIGINT', true, null, null);
        $this->addColumn('refering_module', 'ReferingModule', 'VARCHAR', true, 255, null);
        $this->addColumn('refering_module_id', 'ReferingModuleId', 'BIGINT', true, null, null);
        $this->addColumn('action', 'Action', 'VARCHAR', true, 255, null);
        $this->addColumn('old_value', 'OldValue', 'VARCHAR', true, 255, null);
        $this->addColumn('new_value', 'NewValue', 'VARCHAR', true, 255, null);
        $this->addColumn('value_type', 'ValueType', 'VARCHAR', true, 255, null);
        $this->addColumn('parameters', 'Parameters', 'VARCHAR', true, 255, null);
        $this->addColumn('comment_user', 'CommentUser', 'VARCHAR', true, 255, null);
        $this->addColumn('session_user', 'SessionUser', 'VARCHAR', true, 255, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TrackerId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TrackerId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TrackerId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TrackerId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TrackerId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TrackerId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('TrackerId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzTrackerTableMap::CLASS_DEFAULT : CareTzTrackerTableMap::OM_CLASS;
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
     * @return array           (CareTzTracker object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzTrackerTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzTrackerTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzTrackerTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzTrackerTableMap::OM_CLASS;
            /** @var CareTzTracker $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzTrackerTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzTrackerTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzTrackerTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzTracker $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzTrackerTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_TRACKER_ID);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_TIME);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_MODULE);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_MODULE_ID);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_REFERING_MODULE);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_REFERING_MODULE_ID);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_ACTION);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_OLD_VALUE);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_NEW_VALUE);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_VALUE_TYPE);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_PARAMETERS);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_COMMENT_USER);
            $criteria->addSelectColumn(CareTzTrackerTableMap::COL_SESSION_USER);
        } else {
            $criteria->addSelectColumn($alias . '.tracker_ID');
            $criteria->addSelectColumn($alias . '.time');
            $criteria->addSelectColumn($alias . '.module');
            $criteria->addSelectColumn($alias . '.module_id');
            $criteria->addSelectColumn($alias . '.refering_module');
            $criteria->addSelectColumn($alias . '.refering_module_id');
            $criteria->addSelectColumn($alias . '.action');
            $criteria->addSelectColumn($alias . '.old_value');
            $criteria->addSelectColumn($alias . '.new_value');
            $criteria->addSelectColumn($alias . '.value_type');
            $criteria->addSelectColumn($alias . '.parameters');
            $criteria->addSelectColumn($alias . '.comment_user');
            $criteria->addSelectColumn($alias . '.session_user');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzTrackerTableMap::DATABASE_NAME)->getTable(CareTzTrackerTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzTrackerTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzTrackerTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzTrackerTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzTracker or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzTracker object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzTrackerTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzTracker) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzTrackerTableMap::DATABASE_NAME);
            $criteria->add(CareTzTrackerTableMap::COL_TRACKER_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzTrackerQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzTrackerTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzTrackerTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_tracker table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzTrackerQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzTracker or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzTracker object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzTrackerTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzTracker object
        }

        if ($criteria->containsKey(CareTzTrackerTableMap::COL_TRACKER_ID) && $criteria->keyContainsValue(CareTzTrackerTableMap::COL_TRACKER_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzTrackerTableMap::COL_TRACKER_ID.')');
        }


        // Set the correct dbName
        $query = CareTzTrackerQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzTrackerTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzTrackerTableMap::buildTableMap();
