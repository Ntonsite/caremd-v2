<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzDrugsandservicesBackup;
use CareMd\CareMd\CareTzDrugsandservicesBackupQuery;
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
 * This class defines the structure of the 'care_tz_drugsandservices_backup' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzDrugsandservicesBackupTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzDrugsandservicesBackupTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_drugsandservices_backup';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzDrugsandservicesBackup';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzDrugsandservicesBackup';

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
     * the column name for the item_id field
     */
    const COL_ITEM_ID = 'care_tz_drugsandservices_backup.item_id';

    /**
     * the column name for the item_number field
     */
    const COL_ITEM_NUMBER = 'care_tz_drugsandservices_backup.item_number';

    /**
     * the column name for the is_pediatric field
     */
    const COL_IS_PEDIATRIC = 'care_tz_drugsandservices_backup.is_pediatric';

    /**
     * the column name for the is_adult field
     */
    const COL_IS_ADULT = 'care_tz_drugsandservices_backup.is_adult';

    /**
     * the column name for the is_other field
     */
    const COL_IS_OTHER = 'care_tz_drugsandservices_backup.is_other';

    /**
     * the column name for the is_consumable field
     */
    const COL_IS_CONSUMABLE = 'care_tz_drugsandservices_backup.is_consumable';

    /**
     * the column name for the is_labtest field
     */
    const COL_IS_LABTEST = 'care_tz_drugsandservices_backup.is_labtest';

    /**
     * the column name for the item_description field
     */
    const COL_ITEM_DESCRIPTION = 'care_tz_drugsandservices_backup.item_description';

    /**
     * the column name for the item_full_description field
     */
    const COL_ITEM_FULL_DESCRIPTION = 'care_tz_drugsandservices_backup.item_full_description';

    /**
     * the column name for the unit_price field
     */
    const COL_UNIT_PRICE = 'care_tz_drugsandservices_backup.unit_price';

    /**
     * the column name for the unit_price_1 field
     */
    const COL_UNIT_PRICE_1 = 'care_tz_drugsandservices_backup.unit_price_1';

    /**
     * the column name for the unit_price_2 field
     */
    const COL_UNIT_PRICE_2 = 'care_tz_drugsandservices_backup.unit_price_2';

    /**
     * the column name for the unit_price_3 field
     */
    const COL_UNIT_PRICE_3 = 'care_tz_drugsandservices_backup.unit_price_3';

    /**
     * the column name for the purchasing_class field
     */
    const COL_PURCHASING_CLASS = 'care_tz_drugsandservices_backup.purchasing_class';

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
        self::TYPE_PHPNAME       => array('ItemId', 'ItemNumber', 'IsPediatric', 'IsAdult', 'IsOther', 'IsConsumable', 'IsLabtest', 'ItemDescription', 'ItemFullDescription', 'UnitPrice', 'UnitPrice1', 'UnitPrice2', 'UnitPrice3', 'PurchasingClass', ),
        self::TYPE_CAMELNAME     => array('itemId', 'itemNumber', 'isPediatric', 'isAdult', 'isOther', 'isConsumable', 'isLabtest', 'itemDescription', 'itemFullDescription', 'unitPrice', 'unitPrice1', 'unitPrice2', 'unitPrice3', 'purchasingClass', ),
        self::TYPE_COLNAME       => array(CareTzDrugsandservicesBackupTableMap::COL_ITEM_ID, CareTzDrugsandservicesBackupTableMap::COL_ITEM_NUMBER, CareTzDrugsandservicesBackupTableMap::COL_IS_PEDIATRIC, CareTzDrugsandservicesBackupTableMap::COL_IS_ADULT, CareTzDrugsandservicesBackupTableMap::COL_IS_OTHER, CareTzDrugsandservicesBackupTableMap::COL_IS_CONSUMABLE, CareTzDrugsandservicesBackupTableMap::COL_IS_LABTEST, CareTzDrugsandservicesBackupTableMap::COL_ITEM_DESCRIPTION, CareTzDrugsandservicesBackupTableMap::COL_ITEM_FULL_DESCRIPTION, CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE, CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE_1, CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE_2, CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE_3, CareTzDrugsandservicesBackupTableMap::COL_PURCHASING_CLASS, ),
        self::TYPE_FIELDNAME     => array('item_id', 'item_number', 'is_pediatric', 'is_adult', 'is_other', 'is_consumable', 'is_labtest', 'item_description', 'item_full_description', 'unit_price', 'unit_price_1', 'unit_price_2', 'unit_price_3', 'purchasing_class', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ItemId' => 0, 'ItemNumber' => 1, 'IsPediatric' => 2, 'IsAdult' => 3, 'IsOther' => 4, 'IsConsumable' => 5, 'IsLabtest' => 6, 'ItemDescription' => 7, 'ItemFullDescription' => 8, 'UnitPrice' => 9, 'UnitPrice1' => 10, 'UnitPrice2' => 11, 'UnitPrice3' => 12, 'PurchasingClass' => 13, ),
        self::TYPE_CAMELNAME     => array('itemId' => 0, 'itemNumber' => 1, 'isPediatric' => 2, 'isAdult' => 3, 'isOther' => 4, 'isConsumable' => 5, 'isLabtest' => 6, 'itemDescription' => 7, 'itemFullDescription' => 8, 'unitPrice' => 9, 'unitPrice1' => 10, 'unitPrice2' => 11, 'unitPrice3' => 12, 'purchasingClass' => 13, ),
        self::TYPE_COLNAME       => array(CareTzDrugsandservicesBackupTableMap::COL_ITEM_ID => 0, CareTzDrugsandservicesBackupTableMap::COL_ITEM_NUMBER => 1, CareTzDrugsandservicesBackupTableMap::COL_IS_PEDIATRIC => 2, CareTzDrugsandservicesBackupTableMap::COL_IS_ADULT => 3, CareTzDrugsandservicesBackupTableMap::COL_IS_OTHER => 4, CareTzDrugsandservicesBackupTableMap::COL_IS_CONSUMABLE => 5, CareTzDrugsandservicesBackupTableMap::COL_IS_LABTEST => 6, CareTzDrugsandservicesBackupTableMap::COL_ITEM_DESCRIPTION => 7, CareTzDrugsandservicesBackupTableMap::COL_ITEM_FULL_DESCRIPTION => 8, CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE => 9, CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE_1 => 10, CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE_2 => 11, CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE_3 => 12, CareTzDrugsandservicesBackupTableMap::COL_PURCHASING_CLASS => 13, ),
        self::TYPE_FIELDNAME     => array('item_id' => 0, 'item_number' => 1, 'is_pediatric' => 2, 'is_adult' => 3, 'is_other' => 4, 'is_consumable' => 5, 'is_labtest' => 6, 'item_description' => 7, 'item_full_description' => 8, 'unit_price' => 9, 'unit_price_1' => 10, 'unit_price_2' => 11, 'unit_price_3' => 12, 'purchasing_class' => 13, ),
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
        $this->setName('care_tz_drugsandservices_backup');
        $this->setPhpName('CareTzDrugsandservicesBackup');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzDrugsandservicesBackup');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('item_id', 'ItemId', 'BIGINT', true, null, null);
        $this->addColumn('item_number', 'ItemNumber', 'VARCHAR', true, 50, '');
        $this->addColumn('is_pediatric', 'IsPediatric', 'SMALLINT', true, null, 0);
        $this->addColumn('is_adult', 'IsAdult', 'SMALLINT', true, null, 0);
        $this->addColumn('is_other', 'IsOther', 'SMALLINT', true, null, 0);
        $this->addColumn('is_consumable', 'IsConsumable', 'SMALLINT', true, null, 0);
        $this->addColumn('is_labtest', 'IsLabtest', 'TINYINT', true, null, 0);
        $this->addColumn('item_description', 'ItemDescription', 'VARCHAR', true, 255, '');
        $this->addColumn('item_full_description', 'ItemFullDescription', 'VARCHAR', true, 255, '');
        $this->addColumn('unit_price', 'UnitPrice', 'VARCHAR', true, 50, '');
        $this->addColumn('unit_price_1', 'UnitPrice1', 'VARCHAR', false, 50, null);
        $this->addColumn('unit_price_2', 'UnitPrice2', 'VARCHAR', false, 50, null);
        $this->addColumn('unit_price_3', 'UnitPrice3', 'VARCHAR', false, 50, null);
        $this->addColumn('purchasing_class', 'PurchasingClass', 'VARCHAR', true, 50, '');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('ItemId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzDrugsandservicesBackupTableMap::CLASS_DEFAULT : CareTzDrugsandservicesBackupTableMap::OM_CLASS;
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
     * @return array           (CareTzDrugsandservicesBackup object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzDrugsandservicesBackupTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzDrugsandservicesBackupTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzDrugsandservicesBackupTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzDrugsandservicesBackupTableMap::OM_CLASS;
            /** @var CareTzDrugsandservicesBackup $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzDrugsandservicesBackupTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzDrugsandservicesBackupTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzDrugsandservicesBackupTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzDrugsandservicesBackup $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzDrugsandservicesBackupTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_ITEM_ID);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_ITEM_NUMBER);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_IS_PEDIATRIC);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_IS_ADULT);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_IS_OTHER);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_IS_CONSUMABLE);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_IS_LABTEST);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_ITEM_DESCRIPTION);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_ITEM_FULL_DESCRIPTION);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE_1);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE_2);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_UNIT_PRICE_3);
            $criteria->addSelectColumn(CareTzDrugsandservicesBackupTableMap::COL_PURCHASING_CLASS);
        } else {
            $criteria->addSelectColumn($alias . '.item_id');
            $criteria->addSelectColumn($alias . '.item_number');
            $criteria->addSelectColumn($alias . '.is_pediatric');
            $criteria->addSelectColumn($alias . '.is_adult');
            $criteria->addSelectColumn($alias . '.is_other');
            $criteria->addSelectColumn($alias . '.is_consumable');
            $criteria->addSelectColumn($alias . '.is_labtest');
            $criteria->addSelectColumn($alias . '.item_description');
            $criteria->addSelectColumn($alias . '.item_full_description');
            $criteria->addSelectColumn($alias . '.unit_price');
            $criteria->addSelectColumn($alias . '.unit_price_1');
            $criteria->addSelectColumn($alias . '.unit_price_2');
            $criteria->addSelectColumn($alias . '.unit_price_3');
            $criteria->addSelectColumn($alias . '.purchasing_class');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzDrugsandservicesBackupTableMap::DATABASE_NAME)->getTable(CareTzDrugsandservicesBackupTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzDrugsandservicesBackupTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzDrugsandservicesBackupTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzDrugsandservicesBackupTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzDrugsandservicesBackup or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzDrugsandservicesBackup object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesBackupTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzDrugsandservicesBackup) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzDrugsandservicesBackupTableMap::DATABASE_NAME);
            $criteria->add(CareTzDrugsandservicesBackupTableMap::COL_ITEM_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzDrugsandservicesBackupQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzDrugsandservicesBackupTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzDrugsandservicesBackupTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_drugsandservices_backup table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzDrugsandservicesBackupQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzDrugsandservicesBackup or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzDrugsandservicesBackup object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesBackupTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzDrugsandservicesBackup object
        }

        if ($criteria->containsKey(CareTzDrugsandservicesBackupTableMap::COL_ITEM_ID) && $criteria->keyContainsValue(CareTzDrugsandservicesBackupTableMap::COL_ITEM_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzDrugsandservicesBackupTableMap::COL_ITEM_ID.')');
        }


        // Set the correct dbName
        $query = CareTzDrugsandservicesBackupQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzDrugsandservicesBackupTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzDrugsandservicesBackupTableMap::buildTableMap();
