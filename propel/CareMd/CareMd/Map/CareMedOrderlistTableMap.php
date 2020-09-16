<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareMedOrderlist;
use CareMd\CareMd\CareMedOrderlistQuery;
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
 * This class defines the structure of the 'care_med_orderlist' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareMedOrderlistTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareMedOrderlistTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_med_orderlist';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareMedOrderlist';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareMedOrderlist';

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
     * the column name for the order_nr field
     */
    const COL_ORDER_NR = 'care_med_orderlist.order_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_med_orderlist.dept_nr';

    /**
     * the column name for the order_date field
     */
    const COL_ORDER_DATE = 'care_med_orderlist.order_date';

    /**
     * the column name for the order_time field
     */
    const COL_ORDER_TIME = 'care_med_orderlist.order_time';

    /**
     * the column name for the articles field
     */
    const COL_ARTICLES = 'care_med_orderlist.articles';

    /**
     * the column name for the extra1 field
     */
    const COL_EXTRA1 = 'care_med_orderlist.extra1';

    /**
     * the column name for the extra2 field
     */
    const COL_EXTRA2 = 'care_med_orderlist.extra2';

    /**
     * the column name for the validator field
     */
    const COL_VALIDATOR = 'care_med_orderlist.validator';

    /**
     * the column name for the ip_addr field
     */
    const COL_IP_ADDR = 'care_med_orderlist.ip_addr';

    /**
     * the column name for the priority field
     */
    const COL_PRIORITY = 'care_med_orderlist.priority';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_med_orderlist.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_med_orderlist.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_med_orderlist.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_med_orderlist.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_med_orderlist.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_med_orderlist.create_time';

    /**
     * the column name for the sent_datetime field
     */
    const COL_SENT_DATETIME = 'care_med_orderlist.sent_datetime';

    /**
     * the column name for the process_datetime field
     */
    const COL_PROCESS_DATETIME = 'care_med_orderlist.process_datetime';

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
        self::TYPE_PHPNAME       => array('OrderNr', 'DeptNr', 'OrderDate', 'OrderTime', 'Articles', 'Extra1', 'Extra2', 'Validator', 'IpAddr', 'Priority', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'SentDatetime', 'ProcessDatetime', ),
        self::TYPE_CAMELNAME     => array('orderNr', 'deptNr', 'orderDate', 'orderTime', 'articles', 'extra1', 'extra2', 'validator', 'ipAddr', 'priority', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', 'sentDatetime', 'processDatetime', ),
        self::TYPE_COLNAME       => array(CareMedOrderlistTableMap::COL_ORDER_NR, CareMedOrderlistTableMap::COL_DEPT_NR, CareMedOrderlistTableMap::COL_ORDER_DATE, CareMedOrderlistTableMap::COL_ORDER_TIME, CareMedOrderlistTableMap::COL_ARTICLES, CareMedOrderlistTableMap::COL_EXTRA1, CareMedOrderlistTableMap::COL_EXTRA2, CareMedOrderlistTableMap::COL_VALIDATOR, CareMedOrderlistTableMap::COL_IP_ADDR, CareMedOrderlistTableMap::COL_PRIORITY, CareMedOrderlistTableMap::COL_STATUS, CareMedOrderlistTableMap::COL_HISTORY, CareMedOrderlistTableMap::COL_MODIFY_ID, CareMedOrderlistTableMap::COL_MODIFY_TIME, CareMedOrderlistTableMap::COL_CREATE_ID, CareMedOrderlistTableMap::COL_CREATE_TIME, CareMedOrderlistTableMap::COL_SENT_DATETIME, CareMedOrderlistTableMap::COL_PROCESS_DATETIME, ),
        self::TYPE_FIELDNAME     => array('order_nr', 'dept_nr', 'order_date', 'order_time', 'articles', 'extra1', 'extra2', 'validator', 'ip_addr', 'priority', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'sent_datetime', 'process_datetime', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('OrderNr' => 0, 'DeptNr' => 1, 'OrderDate' => 2, 'OrderTime' => 3, 'Articles' => 4, 'Extra1' => 5, 'Extra2' => 6, 'Validator' => 7, 'IpAddr' => 8, 'Priority' => 9, 'Status' => 10, 'History' => 11, 'ModifyId' => 12, 'ModifyTime' => 13, 'CreateId' => 14, 'CreateTime' => 15, 'SentDatetime' => 16, 'ProcessDatetime' => 17, ),
        self::TYPE_CAMELNAME     => array('orderNr' => 0, 'deptNr' => 1, 'orderDate' => 2, 'orderTime' => 3, 'articles' => 4, 'extra1' => 5, 'extra2' => 6, 'validator' => 7, 'ipAddr' => 8, 'priority' => 9, 'status' => 10, 'history' => 11, 'modifyId' => 12, 'modifyTime' => 13, 'createId' => 14, 'createTime' => 15, 'sentDatetime' => 16, 'processDatetime' => 17, ),
        self::TYPE_COLNAME       => array(CareMedOrderlistTableMap::COL_ORDER_NR => 0, CareMedOrderlistTableMap::COL_DEPT_NR => 1, CareMedOrderlistTableMap::COL_ORDER_DATE => 2, CareMedOrderlistTableMap::COL_ORDER_TIME => 3, CareMedOrderlistTableMap::COL_ARTICLES => 4, CareMedOrderlistTableMap::COL_EXTRA1 => 5, CareMedOrderlistTableMap::COL_EXTRA2 => 6, CareMedOrderlistTableMap::COL_VALIDATOR => 7, CareMedOrderlistTableMap::COL_IP_ADDR => 8, CareMedOrderlistTableMap::COL_PRIORITY => 9, CareMedOrderlistTableMap::COL_STATUS => 10, CareMedOrderlistTableMap::COL_HISTORY => 11, CareMedOrderlistTableMap::COL_MODIFY_ID => 12, CareMedOrderlistTableMap::COL_MODIFY_TIME => 13, CareMedOrderlistTableMap::COL_CREATE_ID => 14, CareMedOrderlistTableMap::COL_CREATE_TIME => 15, CareMedOrderlistTableMap::COL_SENT_DATETIME => 16, CareMedOrderlistTableMap::COL_PROCESS_DATETIME => 17, ),
        self::TYPE_FIELDNAME     => array('order_nr' => 0, 'dept_nr' => 1, 'order_date' => 2, 'order_time' => 3, 'articles' => 4, 'extra1' => 5, 'extra2' => 6, 'validator' => 7, 'ip_addr' => 8, 'priority' => 9, 'status' => 10, 'history' => 11, 'modify_id' => 12, 'modify_time' => 13, 'create_id' => 14, 'create_time' => 15, 'sent_datetime' => 16, 'process_datetime' => 17, ),
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
        $this->setName('care_med_orderlist');
        $this->setPhpName('CareMedOrderlist');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareMedOrderlist');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('order_nr', 'OrderNr', 'INTEGER', true, null, null);
        $this->addColumn('dept_nr', 'DeptNr', 'INTEGER', true, 3, 0);
        $this->addColumn('order_date', 'OrderDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('order_time', 'OrderTime', 'TIME', true, null, '00:00:00');
        $this->addColumn('articles', 'Articles', 'LONGVARCHAR', true, null, null);
        $this->addColumn('extra1', 'Extra1', 'VARCHAR', true, 255, null);
        $this->addColumn('extra2', 'Extra2', 'LONGVARCHAR', true, null, null);
        $this->addColumn('validator', 'Validator', 'VARCHAR', true, 255, null);
        $this->addColumn('ip_addr', 'IpAddr', 'VARCHAR', true, 255, null);
        $this->addColumn('priority', 'Priority', 'VARCHAR', true, 255, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('sent_datetime', 'SentDatetime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('process_datetime', 'ProcessDatetime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OrderNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OrderNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OrderNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OrderNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OrderNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OrderNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('OrderNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareMedOrderlistTableMap::CLASS_DEFAULT : CareMedOrderlistTableMap::OM_CLASS;
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
     * @return array           (CareMedOrderlist object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareMedOrderlistTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareMedOrderlistTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareMedOrderlistTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareMedOrderlistTableMap::OM_CLASS;
            /** @var CareMedOrderlist $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareMedOrderlistTableMap::addInstanceToPool($obj, $key);
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
            $key = CareMedOrderlistTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareMedOrderlistTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareMedOrderlist $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareMedOrderlistTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_ORDER_NR);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_ORDER_DATE);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_ORDER_TIME);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_ARTICLES);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_EXTRA1);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_EXTRA2);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_VALIDATOR);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_IP_ADDR);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_PRIORITY);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_SENT_DATETIME);
            $criteria->addSelectColumn(CareMedOrderlistTableMap::COL_PROCESS_DATETIME);
        } else {
            $criteria->addSelectColumn($alias . '.order_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.order_date');
            $criteria->addSelectColumn($alias . '.order_time');
            $criteria->addSelectColumn($alias . '.articles');
            $criteria->addSelectColumn($alias . '.extra1');
            $criteria->addSelectColumn($alias . '.extra2');
            $criteria->addSelectColumn($alias . '.validator');
            $criteria->addSelectColumn($alias . '.ip_addr');
            $criteria->addSelectColumn($alias . '.priority');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.sent_datetime');
            $criteria->addSelectColumn($alias . '.process_datetime');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareMedOrderlistTableMap::DATABASE_NAME)->getTable(CareMedOrderlistTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareMedOrderlistTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareMedOrderlistTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareMedOrderlistTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareMedOrderlist or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareMedOrderlist object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedOrderlistTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareMedOrderlist) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareMedOrderlistTableMap::DATABASE_NAME);
            $criteria->add(CareMedOrderlistTableMap::COL_ORDER_NR, (array) $values, Criteria::IN);
        }

        $query = CareMedOrderlistQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareMedOrderlistTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareMedOrderlistTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_med_orderlist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareMedOrderlistQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareMedOrderlist or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareMedOrderlist object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedOrderlistTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareMedOrderlist object
        }

        if ($criteria->containsKey(CareMedOrderlistTableMap::COL_ORDER_NR) && $criteria->keyContainsValue(CareMedOrderlistTableMap::COL_ORDER_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareMedOrderlistTableMap::COL_ORDER_NR.')');
        }


        // Set the correct dbName
        $query = CareMedOrderlistQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareMedOrderlistTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareMedOrderlistTableMap::buildTableMap();
