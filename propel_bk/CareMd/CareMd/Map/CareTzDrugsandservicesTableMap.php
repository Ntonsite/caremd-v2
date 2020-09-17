<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzDrugsandservices;
use CareMd\CareMd\CareTzDrugsandservicesQuery;
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
 * This class defines the structure of the 'care_tz_drugsandservices' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzDrugsandservicesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzDrugsandservicesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_drugsandservices';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzDrugsandservices';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzDrugsandservices';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 29;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 29;

    /**
     * the column name for the item_id field
     */
    const COL_ITEM_ID = 'care_tz_drugsandservices.item_id';

    /**
     * the column name for the item_number field
     */
    const COL_ITEM_NUMBER = 'care_tz_drugsandservices.item_number';

    /**
     * the column name for the partcode field
     */
    const COL_PARTCODE = 'care_tz_drugsandservices.partcode';

    /**
     * the column name for the is_pediatric field
     */
    const COL_IS_PEDIATRIC = 'care_tz_drugsandservices.is_pediatric';

    /**
     * the column name for the is_adult field
     */
    const COL_IS_ADULT = 'care_tz_drugsandservices.is_adult';

    /**
     * the column name for the is_other field
     */
    const COL_IS_OTHER = 'care_tz_drugsandservices.is_other';

    /**
     * the column name for the is_consumable field
     */
    const COL_IS_CONSUMABLE = 'care_tz_drugsandservices.is_consumable';

    /**
     * the column name for the is_labtest field
     */
    const COL_IS_LABTEST = 'care_tz_drugsandservices.is_labtest';

    /**
     * the column name for the is_radio_test field
     */
    const COL_IS_RADIO_TEST = 'care_tz_drugsandservices.is_radio_test';

    /**
     * the column name for the item_description field
     */
    const COL_ITEM_DESCRIPTION = 'care_tz_drugsandservices.item_description';

    /**
     * the column name for the item_full_description field
     */
    const COL_ITEM_FULL_DESCRIPTION = 'care_tz_drugsandservices.item_full_description';

    /**
     * the column name for the unit_price field
     */
    const COL_UNIT_PRICE = 'care_tz_drugsandservices.unit_price';

    /**
     * the column name for the unit_price_1 field
     */
    const COL_UNIT_PRICE_1 = 'care_tz_drugsandservices.unit_price_1';

    /**
     * the column name for the unit_price_2 field
     */
    const COL_UNIT_PRICE_2 = 'care_tz_drugsandservices.unit_price_2';

    /**
     * the column name for the unit_price_3 field
     */
    const COL_UNIT_PRICE_3 = 'care_tz_drugsandservices.unit_price_3';

    /**
     * the column name for the purchasing_class field
     */
    const COL_PURCHASING_CLASS = 'care_tz_drugsandservices.purchasing_class';

    /**
     * the column name for the sub_class field
     */
    const COL_SUB_CLASS = 'care_tz_drugsandservices.sub_class';

    /**
     * the column name for the not_in_use field
     */
    const COL_NOT_IN_USE = 'care_tz_drugsandservices.not_in_use';

    /**
     * the column name for the min_level field
     */
    const COL_MIN_LEVEL = 'care_tz_drugsandservices.min_level';

    /**
     * the column name for the unit_price_4 field
     */
    const COL_UNIT_PRICE_4 = 'care_tz_drugsandservices.unit_price_4';

    /**
     * the column name for the unit_price_5 field
     */
    const COL_UNIT_PRICE_5 = 'care_tz_drugsandservices.unit_price_5';

    /**
     * the column name for the unit_price_6 field
     */
    const COL_UNIT_PRICE_6 = 'care_tz_drugsandservices.unit_price_6';

    /**
     * the column name for the unit_price_7 field
     */
    const COL_UNIT_PRICE_7 = 'care_tz_drugsandservices.unit_price_7';

    /**
     * the column name for the unit_price_8 field
     */
    const COL_UNIT_PRICE_8 = 'care_tz_drugsandservices.unit_price_8';

    /**
     * the column name for the unit_price_9 field
     */
    const COL_UNIT_PRICE_9 = 'care_tz_drugsandservices.unit_price_9';

    /**
     * the column name for the unit_price_10 field
     */
    const COL_UNIT_PRICE_10 = 'care_tz_drugsandservices.unit_price_10';

    /**
     * the column name for the unit_price_11 field
     */
    const COL_UNIT_PRICE_11 = 'care_tz_drugsandservices.unit_price_11';

    /**
     * the column name for the unit_cost field
     */
    const COL_UNIT_COST = 'care_tz_drugsandservices.unit_cost';

    /**
     * the column name for the nhif_item_code field
     */
    const COL_NHIF_ITEM_CODE = 'care_tz_drugsandservices.nhif_item_code';

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
        self::TYPE_PHPNAME       => array('ItemId', 'ItemNumber', 'Partcode', 'IsPediatric', 'IsAdult', 'IsOther', 'IsConsumable', 'IsLabtest', 'IsRadioTest', 'ItemDescription', 'ItemFullDescription', 'UnitPrice', 'UnitPrice1', 'UnitPrice2', 'UnitPrice3', 'PurchasingClass', 'SubClass', 'NotInUse', 'MinLevel', 'UnitPrice4', 'UnitPrice5', 'UnitPrice6', 'UnitPrice7', 'UnitPrice8', 'UnitPrice9', 'UnitPrice10', 'UnitPrice11', 'UnitCost', 'NhifItemCode', ),
        self::TYPE_CAMELNAME     => array('itemId', 'itemNumber', 'partcode', 'isPediatric', 'isAdult', 'isOther', 'isConsumable', 'isLabtest', 'isRadioTest', 'itemDescription', 'itemFullDescription', 'unitPrice', 'unitPrice1', 'unitPrice2', 'unitPrice3', 'purchasingClass', 'subClass', 'notInUse', 'minLevel', 'unitPrice4', 'unitPrice5', 'unitPrice6', 'unitPrice7', 'unitPrice8', 'unitPrice9', 'unitPrice10', 'unitPrice11', 'unitCost', 'nhifItemCode', ),
        self::TYPE_COLNAME       => array(CareTzDrugsandservicesTableMap::COL_ITEM_ID, CareTzDrugsandservicesTableMap::COL_ITEM_NUMBER, CareTzDrugsandservicesTableMap::COL_PARTCODE, CareTzDrugsandservicesTableMap::COL_IS_PEDIATRIC, CareTzDrugsandservicesTableMap::COL_IS_ADULT, CareTzDrugsandservicesTableMap::COL_IS_OTHER, CareTzDrugsandservicesTableMap::COL_IS_CONSUMABLE, CareTzDrugsandservicesTableMap::COL_IS_LABTEST, CareTzDrugsandservicesTableMap::COL_IS_RADIO_TEST, CareTzDrugsandservicesTableMap::COL_ITEM_DESCRIPTION, CareTzDrugsandservicesTableMap::COL_ITEM_FULL_DESCRIPTION, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_1, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_2, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_3, CareTzDrugsandservicesTableMap::COL_PURCHASING_CLASS, CareTzDrugsandservicesTableMap::COL_SUB_CLASS, CareTzDrugsandservicesTableMap::COL_NOT_IN_USE, CareTzDrugsandservicesTableMap::COL_MIN_LEVEL, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_4, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_5, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_6, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_7, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_8, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_9, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_10, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_11, CareTzDrugsandservicesTableMap::COL_UNIT_COST, CareTzDrugsandservicesTableMap::COL_NHIF_ITEM_CODE, ),
        self::TYPE_FIELDNAME     => array('item_id', 'item_number', 'partcode', 'is_pediatric', 'is_adult', 'is_other', 'is_consumable', 'is_labtest', 'is_radio_test', 'item_description', 'item_full_description', 'unit_price', 'unit_price_1', 'unit_price_2', 'unit_price_3', 'purchasing_class', 'sub_class', 'not_in_use', 'min_level', 'unit_price_4', 'unit_price_5', 'unit_price_6', 'unit_price_7', 'unit_price_8', 'unit_price_9', 'unit_price_10', 'unit_price_11', 'unit_cost', 'nhif_item_code', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ItemId' => 0, 'ItemNumber' => 1, 'Partcode' => 2, 'IsPediatric' => 3, 'IsAdult' => 4, 'IsOther' => 5, 'IsConsumable' => 6, 'IsLabtest' => 7, 'IsRadioTest' => 8, 'ItemDescription' => 9, 'ItemFullDescription' => 10, 'UnitPrice' => 11, 'UnitPrice1' => 12, 'UnitPrice2' => 13, 'UnitPrice3' => 14, 'PurchasingClass' => 15, 'SubClass' => 16, 'NotInUse' => 17, 'MinLevel' => 18, 'UnitPrice4' => 19, 'UnitPrice5' => 20, 'UnitPrice6' => 21, 'UnitPrice7' => 22, 'UnitPrice8' => 23, 'UnitPrice9' => 24, 'UnitPrice10' => 25, 'UnitPrice11' => 26, 'UnitCost' => 27, 'NhifItemCode' => 28, ),
        self::TYPE_CAMELNAME     => array('itemId' => 0, 'itemNumber' => 1, 'partcode' => 2, 'isPediatric' => 3, 'isAdult' => 4, 'isOther' => 5, 'isConsumable' => 6, 'isLabtest' => 7, 'isRadioTest' => 8, 'itemDescription' => 9, 'itemFullDescription' => 10, 'unitPrice' => 11, 'unitPrice1' => 12, 'unitPrice2' => 13, 'unitPrice3' => 14, 'purchasingClass' => 15, 'subClass' => 16, 'notInUse' => 17, 'minLevel' => 18, 'unitPrice4' => 19, 'unitPrice5' => 20, 'unitPrice6' => 21, 'unitPrice7' => 22, 'unitPrice8' => 23, 'unitPrice9' => 24, 'unitPrice10' => 25, 'unitPrice11' => 26, 'unitCost' => 27, 'nhifItemCode' => 28, ),
        self::TYPE_COLNAME       => array(CareTzDrugsandservicesTableMap::COL_ITEM_ID => 0, CareTzDrugsandservicesTableMap::COL_ITEM_NUMBER => 1, CareTzDrugsandservicesTableMap::COL_PARTCODE => 2, CareTzDrugsandservicesTableMap::COL_IS_PEDIATRIC => 3, CareTzDrugsandservicesTableMap::COL_IS_ADULT => 4, CareTzDrugsandservicesTableMap::COL_IS_OTHER => 5, CareTzDrugsandservicesTableMap::COL_IS_CONSUMABLE => 6, CareTzDrugsandservicesTableMap::COL_IS_LABTEST => 7, CareTzDrugsandservicesTableMap::COL_IS_RADIO_TEST => 8, CareTzDrugsandservicesTableMap::COL_ITEM_DESCRIPTION => 9, CareTzDrugsandservicesTableMap::COL_ITEM_FULL_DESCRIPTION => 10, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE => 11, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_1 => 12, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_2 => 13, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_3 => 14, CareTzDrugsandservicesTableMap::COL_PURCHASING_CLASS => 15, CareTzDrugsandservicesTableMap::COL_SUB_CLASS => 16, CareTzDrugsandservicesTableMap::COL_NOT_IN_USE => 17, CareTzDrugsandservicesTableMap::COL_MIN_LEVEL => 18, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_4 => 19, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_5 => 20, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_6 => 21, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_7 => 22, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_8 => 23, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_9 => 24, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_10 => 25, CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_11 => 26, CareTzDrugsandservicesTableMap::COL_UNIT_COST => 27, CareTzDrugsandservicesTableMap::COL_NHIF_ITEM_CODE => 28, ),
        self::TYPE_FIELDNAME     => array('item_id' => 0, 'item_number' => 1, 'partcode' => 2, 'is_pediatric' => 3, 'is_adult' => 4, 'is_other' => 5, 'is_consumable' => 6, 'is_labtest' => 7, 'is_radio_test' => 8, 'item_description' => 9, 'item_full_description' => 10, 'unit_price' => 11, 'unit_price_1' => 12, 'unit_price_2' => 13, 'unit_price_3' => 14, 'purchasing_class' => 15, 'sub_class' => 16, 'not_in_use' => 17, 'min_level' => 18, 'unit_price_4' => 19, 'unit_price_5' => 20, 'unit_price_6' => 21, 'unit_price_7' => 22, 'unit_price_8' => 23, 'unit_price_9' => 24, 'unit_price_10' => 25, 'unit_price_11' => 26, 'unit_cost' => 27, 'nhif_item_code' => 28, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
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
        $this->setName('care_tz_drugsandservices');
        $this->setPhpName('CareTzDrugsandservices');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzDrugsandservices');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('item_id', 'ItemId', 'BIGINT', true, null, null);
        $this->addColumn('item_number', 'ItemNumber', 'VARCHAR', true, 50, '');
        $this->addColumn('partcode', 'Partcode', 'VARCHAR', true, 255, null);
        $this->addColumn('is_pediatric', 'IsPediatric', 'SMALLINT', true, null, 0);
        $this->addColumn('is_adult', 'IsAdult', 'SMALLINT', true, null, 0);
        $this->addColumn('is_other', 'IsOther', 'SMALLINT', true, null, 0);
        $this->addColumn('is_consumable', 'IsConsumable', 'SMALLINT', true, null, 0);
        $this->addColumn('is_labtest', 'IsLabtest', 'TINYINT', true, null, 0);
        $this->addColumn('is_radio_test', 'IsRadioTest', 'TINYINT', true, null, null);
        $this->addColumn('item_description', 'ItemDescription', 'VARCHAR', true, 255, '');
        $this->addColumn('item_full_description', 'ItemFullDescription', 'VARCHAR', true, 255, '');
        $this->addColumn('unit_price', 'UnitPrice', 'DOUBLE', false, 10, 0);
        $this->addColumn('unit_price_1', 'UnitPrice1', 'DOUBLE', false, 10, 0);
        $this->addColumn('unit_price_2', 'UnitPrice2', 'DOUBLE', false, 10, 0);
        $this->addColumn('unit_price_3', 'UnitPrice3', 'DOUBLE', false, 10, 0);
        $this->addColumn('purchasing_class', 'PurchasingClass', 'VARCHAR', true, 50, '');
        $this->addColumn('sub_class', 'SubClass', 'VARCHAR', true, 25, null);
        $this->addColumn('not_in_use', 'NotInUse', 'INTEGER', true, 4, null);
        $this->addColumn('min_level', 'MinLevel', 'INTEGER', true, 20, 0);
        $this->addColumn('unit_price_4', 'UnitPrice4', 'DOUBLE', false, 10, 0);
        $this->addColumn('unit_price_5', 'UnitPrice5', 'DOUBLE', false, 10, 0);
        $this->addColumn('unit_price_6', 'UnitPrice6', 'DOUBLE', false, 10, 0);
        $this->addColumn('unit_price_7', 'UnitPrice7', 'INTEGER', true, 10, null);
        $this->addColumn('unit_price_8', 'UnitPrice8', 'INTEGER', true, 10, null);
        $this->addColumn('unit_price_9', 'UnitPrice9', 'INTEGER', true, 10, null);
        $this->addColumn('unit_price_10', 'UnitPrice10', 'INTEGER', true, 10, null);
        $this->addColumn('unit_price_11', 'UnitPrice11', 'INTEGER', true, 10, null);
        $this->addColumn('unit_cost', 'UnitCost', 'VARCHAR', true, 50, null);
        $this->addColumn('nhif_item_code', 'NhifItemCode', 'VARCHAR', false, 20, null);
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
        return $withPrefix ? CareTzDrugsandservicesTableMap::CLASS_DEFAULT : CareTzDrugsandservicesTableMap::OM_CLASS;
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
     * @return array           (CareTzDrugsandservices object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzDrugsandservicesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzDrugsandservicesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzDrugsandservicesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzDrugsandservicesTableMap::OM_CLASS;
            /** @var CareTzDrugsandservices $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzDrugsandservicesTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzDrugsandservicesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzDrugsandservicesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzDrugsandservices $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzDrugsandservicesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_ITEM_ID);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_ITEM_NUMBER);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_PARTCODE);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_IS_PEDIATRIC);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_IS_ADULT);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_IS_OTHER);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_IS_CONSUMABLE);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_IS_LABTEST);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_IS_RADIO_TEST);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_ITEM_DESCRIPTION);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_ITEM_FULL_DESCRIPTION);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_1);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_2);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_3);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_PURCHASING_CLASS);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_SUB_CLASS);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_NOT_IN_USE);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_MIN_LEVEL);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_4);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_5);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_6);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_7);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_8);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_9);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_10);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_11);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_UNIT_COST);
            $criteria->addSelectColumn(CareTzDrugsandservicesTableMap::COL_NHIF_ITEM_CODE);
        } else {
            $criteria->addSelectColumn($alias . '.item_id');
            $criteria->addSelectColumn($alias . '.item_number');
            $criteria->addSelectColumn($alias . '.partcode');
            $criteria->addSelectColumn($alias . '.is_pediatric');
            $criteria->addSelectColumn($alias . '.is_adult');
            $criteria->addSelectColumn($alias . '.is_other');
            $criteria->addSelectColumn($alias . '.is_consumable');
            $criteria->addSelectColumn($alias . '.is_labtest');
            $criteria->addSelectColumn($alias . '.is_radio_test');
            $criteria->addSelectColumn($alias . '.item_description');
            $criteria->addSelectColumn($alias . '.item_full_description');
            $criteria->addSelectColumn($alias . '.unit_price');
            $criteria->addSelectColumn($alias . '.unit_price_1');
            $criteria->addSelectColumn($alias . '.unit_price_2');
            $criteria->addSelectColumn($alias . '.unit_price_3');
            $criteria->addSelectColumn($alias . '.purchasing_class');
            $criteria->addSelectColumn($alias . '.sub_class');
            $criteria->addSelectColumn($alias . '.not_in_use');
            $criteria->addSelectColumn($alias . '.min_level');
            $criteria->addSelectColumn($alias . '.unit_price_4');
            $criteria->addSelectColumn($alias . '.unit_price_5');
            $criteria->addSelectColumn($alias . '.unit_price_6');
            $criteria->addSelectColumn($alias . '.unit_price_7');
            $criteria->addSelectColumn($alias . '.unit_price_8');
            $criteria->addSelectColumn($alias . '.unit_price_9');
            $criteria->addSelectColumn($alias . '.unit_price_10');
            $criteria->addSelectColumn($alias . '.unit_price_11');
            $criteria->addSelectColumn($alias . '.unit_cost');
            $criteria->addSelectColumn($alias . '.nhif_item_code');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzDrugsandservicesTableMap::DATABASE_NAME)->getTable(CareTzDrugsandservicesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzDrugsandservicesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzDrugsandservicesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzDrugsandservicesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzDrugsandservices or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzDrugsandservices object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzDrugsandservices) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzDrugsandservicesTableMap::DATABASE_NAME);
            $criteria->add(CareTzDrugsandservicesTableMap::COL_ITEM_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzDrugsandservicesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzDrugsandservicesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzDrugsandservicesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_drugsandservices table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzDrugsandservicesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzDrugsandservices or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzDrugsandservices object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzDrugsandservices object
        }

        if ($criteria->containsKey(CareTzDrugsandservicesTableMap::COL_ITEM_ID) && $criteria->keyContainsValue(CareTzDrugsandservicesTableMap::COL_ITEM_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzDrugsandservicesTableMap::COL_ITEM_ID.')');
        }


        // Set the correct dbName
        $query = CareTzDrugsandservicesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzDrugsandservicesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzDrugsandservicesTableMap::buildTableMap();
