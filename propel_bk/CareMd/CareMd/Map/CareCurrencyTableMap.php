<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareCurrency;
use CareMd\CareMd\CareCurrencyQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'care_currency' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareCurrencyTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareCurrencyTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_currency';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareCurrency';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareCurrency';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the item_no field
     */
    const COL_ITEM_NO = 'care_currency.item_no';

    /**
     * the column name for the short_name field
     */
    const COL_SHORT_NAME = 'care_currency.short_name';

    /**
     * the column name for the long_name field
     */
    const COL_LONG_NAME = 'care_currency.long_name';

    /**
     * the column name for the info field
     */
    const COL_INFO = 'care_currency.info';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_currency.status';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_currency.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_currency.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_currency.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_currency.create_time';

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
        self::TYPE_PHPNAME       => array('ItemNo', 'ShortName', 'LongName', 'Info', 'Status', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('itemNo', 'shortName', 'longName', 'info', 'status', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareCurrencyTableMap::COL_ITEM_NO, CareCurrencyTableMap::COL_SHORT_NAME, CareCurrencyTableMap::COL_LONG_NAME, CareCurrencyTableMap::COL_INFO, CareCurrencyTableMap::COL_STATUS, CareCurrencyTableMap::COL_MODIFY_ID, CareCurrencyTableMap::COL_MODIFY_TIME, CareCurrencyTableMap::COL_CREATE_ID, CareCurrencyTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('item_no', 'short_name', 'long_name', 'info', 'status', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ItemNo' => 0, 'ShortName' => 1, 'LongName' => 2, 'Info' => 3, 'Status' => 4, 'ModifyId' => 5, 'ModifyTime' => 6, 'CreateId' => 7, 'CreateTime' => 8, ),
        self::TYPE_CAMELNAME     => array('itemNo' => 0, 'shortName' => 1, 'longName' => 2, 'info' => 3, 'status' => 4, 'modifyId' => 5, 'modifyTime' => 6, 'createId' => 7, 'createTime' => 8, ),
        self::TYPE_COLNAME       => array(CareCurrencyTableMap::COL_ITEM_NO => 0, CareCurrencyTableMap::COL_SHORT_NAME => 1, CareCurrencyTableMap::COL_LONG_NAME => 2, CareCurrencyTableMap::COL_INFO => 3, CareCurrencyTableMap::COL_STATUS => 4, CareCurrencyTableMap::COL_MODIFY_ID => 5, CareCurrencyTableMap::COL_MODIFY_TIME => 6, CareCurrencyTableMap::COL_CREATE_ID => 7, CareCurrencyTableMap::COL_CREATE_TIME => 8, ),
        self::TYPE_FIELDNAME     => array('item_no' => 0, 'short_name' => 1, 'long_name' => 2, 'info' => 3, 'status' => 4, 'modify_id' => 5, 'modify_time' => 6, 'create_id' => 7, 'create_time' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $this->setName('care_currency');
        $this->setPhpName('CareCurrency');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareCurrency');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('item_no', 'ItemNo', 'SMALLINT', true, 5, null);
        $this->addColumn('short_name', 'ShortName', 'VARCHAR', true, 10, '');
        $this->addColumn('long_name', 'LongName', 'VARCHAR', true, 20, '');
        $this->addColumn('info', 'Info', 'VARCHAR', true, 50, '');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 5, '');
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 20, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 20, '');
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
        return null;
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
        return '';
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
        return $withPrefix ? CareCurrencyTableMap::CLASS_DEFAULT : CareCurrencyTableMap::OM_CLASS;
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
     * @return array           (CareCurrency object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareCurrencyTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareCurrencyTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareCurrencyTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareCurrencyTableMap::OM_CLASS;
            /** @var CareCurrency $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareCurrencyTableMap::addInstanceToPool($obj, $key);
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
            $key = CareCurrencyTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareCurrencyTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareCurrency $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareCurrencyTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareCurrencyTableMap::COL_ITEM_NO);
            $criteria->addSelectColumn(CareCurrencyTableMap::COL_SHORT_NAME);
            $criteria->addSelectColumn(CareCurrencyTableMap::COL_LONG_NAME);
            $criteria->addSelectColumn(CareCurrencyTableMap::COL_INFO);
            $criteria->addSelectColumn(CareCurrencyTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareCurrencyTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareCurrencyTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareCurrencyTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareCurrencyTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.item_no');
            $criteria->addSelectColumn($alias . '.short_name');
            $criteria->addSelectColumn($alias . '.long_name');
            $criteria->addSelectColumn($alias . '.info');
            $criteria->addSelectColumn($alias . '.status');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareCurrencyTableMap::DATABASE_NAME)->getTable(CareCurrencyTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareCurrencyTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareCurrencyTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareCurrencyTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareCurrency or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareCurrency object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareCurrencyTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareCurrency) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The CareCurrency object has no primary key');
        }

        $query = CareCurrencyQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareCurrencyTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareCurrencyTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_currency table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareCurrencyQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareCurrency or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareCurrency object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareCurrencyTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareCurrency object
        }


        // Set the correct dbName
        $query = CareCurrencyQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareCurrencyTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareCurrencyTableMap::buildTableMap();
