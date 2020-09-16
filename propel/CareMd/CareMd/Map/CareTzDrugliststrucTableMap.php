<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzDrugliststruc;
use CareMd\CareMd\CareTzDrugliststrucQuery;
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
 * This class defines the structure of the 'care_tz_drugliststruc' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzDrugliststrucTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzDrugliststrucTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_drugliststruc';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzDrugliststruc';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzDrugliststruc';

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
     * the column name for the item_id field
     */
    const COL_ITEM_ID = 'care_tz_drugliststruc.item_id';

    /**
     * the column name for the item_number field
     */
    const COL_ITEM_NUMBER = 'care_tz_drugliststruc.item_number';

    /**
     * the column name for the is_pediatric field
     */
    const COL_IS_PEDIATRIC = 'care_tz_drugliststruc.is_pediatric';

    /**
     * the column name for the is_adult field
     */
    const COL_IS_ADULT = 'care_tz_drugliststruc.is_adult';

    /**
     * the column name for the is_other field
     */
    const COL_IS_OTHER = 'care_tz_drugliststruc.is_other';

    /**
     * the column name for the is_consumable field
     */
    const COL_IS_CONSUMABLE = 'care_tz_drugliststruc.is_consumable';

    /**
     * the column name for the mems_item_code field
     */
    const COL_MEMS_ITEM_CODE = 'care_tz_drugliststruc.mems_item_code';

    /**
     * the column name for the mems_item_description field
     */
    const COL_MEMS_ITEM_DESCRIPTION = 'care_tz_drugliststruc.mems_item_description';

    /**
     * the column name for the mems_pack_size field
     */
    const COL_MEMS_PACK_SIZE = 'care_tz_drugliststruc.mems_pack_size';

    /**
     * the column name for the mems_price_per_pack_size field
     */
    const COL_MEMS_PRICE_PER_PACK_SIZE = 'care_tz_drugliststruc.mems_price_per_pack_size';

    /**
     * the column name for the mems_sizes field
     */
    const COL_MEMS_SIZES = 'care_tz_drugliststruc.mems_sizes';

    /**
     * the column name for the item_description field
     */
    const COL_ITEM_DESCRIPTION = 'care_tz_drugliststruc.item_description';

    /**
     * the column name for the item_full_description field
     */
    const COL_ITEM_FULL_DESCRIPTION = 'care_tz_drugliststruc.item_full_description';

    /**
     * the column name for the dosage field
     */
    const COL_DOSAGE = 'care_tz_drugliststruc.dosage';

    /**
     * the column name for the unit_price field
     */
    const COL_UNIT_PRICE = 'care_tz_drugliststruc.unit_price';

    /**
     * the column name for the purchasing_class field
     */
    const COL_PURCHASING_CLASS = 'care_tz_drugliststruc.purchasing_class';

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
        self::TYPE_PHPNAME       => array('ItemId', 'ItemNumber', 'IsPediatric', 'IsAdult', 'IsOther', 'IsConsumable', 'MemsItemCode', 'MemsItemDescription', 'MemsPackSize', 'MemsPricePerPackSize', 'MemsSizes', 'ItemDescription', 'ItemFullDescription', 'Dosage', 'UnitPrice', 'PurchasingClass', ),
        self::TYPE_CAMELNAME     => array('itemId', 'itemNumber', 'isPediatric', 'isAdult', 'isOther', 'isConsumable', 'memsItemCode', 'memsItemDescription', 'memsPackSize', 'memsPricePerPackSize', 'memsSizes', 'itemDescription', 'itemFullDescription', 'dosage', 'unitPrice', 'purchasingClass', ),
        self::TYPE_COLNAME       => array(CareTzDrugliststrucTableMap::COL_ITEM_ID, CareTzDrugliststrucTableMap::COL_ITEM_NUMBER, CareTzDrugliststrucTableMap::COL_IS_PEDIATRIC, CareTzDrugliststrucTableMap::COL_IS_ADULT, CareTzDrugliststrucTableMap::COL_IS_OTHER, CareTzDrugliststrucTableMap::COL_IS_CONSUMABLE, CareTzDrugliststrucTableMap::COL_MEMS_ITEM_CODE, CareTzDrugliststrucTableMap::COL_MEMS_ITEM_DESCRIPTION, CareTzDrugliststrucTableMap::COL_MEMS_PACK_SIZE, CareTzDrugliststrucTableMap::COL_MEMS_PRICE_PER_PACK_SIZE, CareTzDrugliststrucTableMap::COL_MEMS_SIZES, CareTzDrugliststrucTableMap::COL_ITEM_DESCRIPTION, CareTzDrugliststrucTableMap::COL_ITEM_FULL_DESCRIPTION, CareTzDrugliststrucTableMap::COL_DOSAGE, CareTzDrugliststrucTableMap::COL_UNIT_PRICE, CareTzDrugliststrucTableMap::COL_PURCHASING_CLASS, ),
        self::TYPE_FIELDNAME     => array('item_id', 'item_number', 'is_pediatric', 'is_adult', 'is_other', 'is_consumable', 'mems_item_code', 'mems_item_description', 'mems_pack_size', 'mems_price_per_pack_size', 'mems_sizes', 'item_description', 'item_full_description', 'dosage', 'unit_price', 'purchasing_class', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ItemId' => 0, 'ItemNumber' => 1, 'IsPediatric' => 2, 'IsAdult' => 3, 'IsOther' => 4, 'IsConsumable' => 5, 'MemsItemCode' => 6, 'MemsItemDescription' => 7, 'MemsPackSize' => 8, 'MemsPricePerPackSize' => 9, 'MemsSizes' => 10, 'ItemDescription' => 11, 'ItemFullDescription' => 12, 'Dosage' => 13, 'UnitPrice' => 14, 'PurchasingClass' => 15, ),
        self::TYPE_CAMELNAME     => array('itemId' => 0, 'itemNumber' => 1, 'isPediatric' => 2, 'isAdult' => 3, 'isOther' => 4, 'isConsumable' => 5, 'memsItemCode' => 6, 'memsItemDescription' => 7, 'memsPackSize' => 8, 'memsPricePerPackSize' => 9, 'memsSizes' => 10, 'itemDescription' => 11, 'itemFullDescription' => 12, 'dosage' => 13, 'unitPrice' => 14, 'purchasingClass' => 15, ),
        self::TYPE_COLNAME       => array(CareTzDrugliststrucTableMap::COL_ITEM_ID => 0, CareTzDrugliststrucTableMap::COL_ITEM_NUMBER => 1, CareTzDrugliststrucTableMap::COL_IS_PEDIATRIC => 2, CareTzDrugliststrucTableMap::COL_IS_ADULT => 3, CareTzDrugliststrucTableMap::COL_IS_OTHER => 4, CareTzDrugliststrucTableMap::COL_IS_CONSUMABLE => 5, CareTzDrugliststrucTableMap::COL_MEMS_ITEM_CODE => 6, CareTzDrugliststrucTableMap::COL_MEMS_ITEM_DESCRIPTION => 7, CareTzDrugliststrucTableMap::COL_MEMS_PACK_SIZE => 8, CareTzDrugliststrucTableMap::COL_MEMS_PRICE_PER_PACK_SIZE => 9, CareTzDrugliststrucTableMap::COL_MEMS_SIZES => 10, CareTzDrugliststrucTableMap::COL_ITEM_DESCRIPTION => 11, CareTzDrugliststrucTableMap::COL_ITEM_FULL_DESCRIPTION => 12, CareTzDrugliststrucTableMap::COL_DOSAGE => 13, CareTzDrugliststrucTableMap::COL_UNIT_PRICE => 14, CareTzDrugliststrucTableMap::COL_PURCHASING_CLASS => 15, ),
        self::TYPE_FIELDNAME     => array('item_id' => 0, 'item_number' => 1, 'is_pediatric' => 2, 'is_adult' => 3, 'is_other' => 4, 'is_consumable' => 5, 'mems_item_code' => 6, 'mems_item_description' => 7, 'mems_pack_size' => 8, 'mems_price_per_pack_size' => 9, 'mems_sizes' => 10, 'item_description' => 11, 'item_full_description' => 12, 'dosage' => 13, 'unit_price' => 14, 'purchasing_class' => 15, ),
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
        $this->setName('care_tz_drugliststruc');
        $this->setPhpName('CareTzDrugliststruc');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzDrugliststruc');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('item_id', 'ItemId', 'BIGINT', true, null, 0);
        $this->addPrimaryKey('item_number', 'ItemNumber', 'VARCHAR', true, 5, '');
        $this->addColumn('is_pediatric', 'IsPediatric', 'SMALLINT', true, null, 0);
        $this->addColumn('is_adult', 'IsAdult', 'SMALLINT', true, null, 0);
        $this->addColumn('is_other', 'IsOther', 'SMALLINT', true, null, 0);
        $this->addColumn('is_consumable', 'IsConsumable', 'SMALLINT', true, null, 0);
        $this->addColumn('mems_item_code', 'MemsItemCode', 'VARCHAR', true, 255, '');
        $this->addColumn('mems_item_description', 'MemsItemDescription', 'VARCHAR', true, 255, '');
        $this->addColumn('mems_pack_size', 'MemsPackSize', 'VARCHAR', true, 255, '');
        $this->addColumn('mems_price_per_pack_size', 'MemsPricePerPackSize', 'DOUBLE', true, null, 0);
        $this->addColumn('mems_sizes', 'MemsSizes', 'VARCHAR', true, 50, '');
        $this->addColumn('item_description', 'ItemDescription', 'VARCHAR', false, 100, null);
        $this->addColumn('item_full_description', 'ItemFullDescription', 'VARCHAR', true, 255, '');
        $this->addColumn('dosage', 'Dosage', 'VARCHAR', true, 50, '');
        $this->addColumn('unit_price', 'UnitPrice', 'VARCHAR', false, 50, '0.00');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ItemNumber', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ItemNumber', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ItemNumber', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ItemNumber', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ItemNumber', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ItemNumber', TableMap::TYPE_PHPNAME, $indexType)];
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
                ? 1 + $offset
                : self::translateFieldName('ItemNumber', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzDrugliststrucTableMap::CLASS_DEFAULT : CareTzDrugliststrucTableMap::OM_CLASS;
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
     * @return array           (CareTzDrugliststruc object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzDrugliststrucTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzDrugliststrucTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzDrugliststrucTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzDrugliststrucTableMap::OM_CLASS;
            /** @var CareTzDrugliststruc $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzDrugliststrucTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzDrugliststrucTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzDrugliststrucTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzDrugliststruc $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzDrugliststrucTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_ITEM_ID);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_ITEM_NUMBER);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_IS_PEDIATRIC);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_IS_ADULT);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_IS_OTHER);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_IS_CONSUMABLE);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_MEMS_ITEM_CODE);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_MEMS_ITEM_DESCRIPTION);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_MEMS_PACK_SIZE);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_MEMS_PRICE_PER_PACK_SIZE);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_MEMS_SIZES);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_ITEM_DESCRIPTION);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_ITEM_FULL_DESCRIPTION);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_DOSAGE);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_UNIT_PRICE);
            $criteria->addSelectColumn(CareTzDrugliststrucTableMap::COL_PURCHASING_CLASS);
        } else {
            $criteria->addSelectColumn($alias . '.item_id');
            $criteria->addSelectColumn($alias . '.item_number');
            $criteria->addSelectColumn($alias . '.is_pediatric');
            $criteria->addSelectColumn($alias . '.is_adult');
            $criteria->addSelectColumn($alias . '.is_other');
            $criteria->addSelectColumn($alias . '.is_consumable');
            $criteria->addSelectColumn($alias . '.mems_item_code');
            $criteria->addSelectColumn($alias . '.mems_item_description');
            $criteria->addSelectColumn($alias . '.mems_pack_size');
            $criteria->addSelectColumn($alias . '.mems_price_per_pack_size');
            $criteria->addSelectColumn($alias . '.mems_sizes');
            $criteria->addSelectColumn($alias . '.item_description');
            $criteria->addSelectColumn($alias . '.item_full_description');
            $criteria->addSelectColumn($alias . '.dosage');
            $criteria->addSelectColumn($alias . '.unit_price');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzDrugliststrucTableMap::DATABASE_NAME)->getTable(CareTzDrugliststrucTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzDrugliststrucTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzDrugliststrucTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzDrugliststrucTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzDrugliststruc or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzDrugliststruc object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugliststrucTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzDrugliststruc) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzDrugliststrucTableMap::DATABASE_NAME);
            $criteria->add(CareTzDrugliststrucTableMap::COL_ITEM_NUMBER, (array) $values, Criteria::IN);
        }

        $query = CareTzDrugliststrucQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzDrugliststrucTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzDrugliststrucTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_drugliststruc table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzDrugliststrucQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzDrugliststruc or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzDrugliststruc object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugliststrucTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzDrugliststruc object
        }


        // Set the correct dbName
        $query = CareTzDrugliststrucQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzDrugliststrucTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzDrugliststrucTableMap::buildTableMap();
