<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareBillingItem;
use CareMd\CareMd\CareBillingItemQuery;
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
 * This class defines the structure of the 'care_billing_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareBillingItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareBillingItemTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_billing_item';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareBillingItem';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareBillingItem';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the item_code field
     */
    const COL_ITEM_CODE = 'care_billing_item.item_code';

    /**
     * the column name for the item_description field
     */
    const COL_ITEM_DESCRIPTION = 'care_billing_item.item_description';

    /**
     * the column name for the item_unit_cost field
     */
    const COL_ITEM_UNIT_COST = 'care_billing_item.item_unit_cost';

    /**
     * the column name for the item_type field
     */
    const COL_ITEM_TYPE = 'care_billing_item.item_type';

    /**
     * the column name for the item_discount_max_allowed field
     */
    const COL_ITEM_DISCOUNT_MAX_ALLOWED = 'care_billing_item.item_discount_max_allowed';

    /**
     * the column name for the group field
     */
    const COL_GROUP = 'care_billing_item.group';

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
        self::TYPE_PHPNAME       => array('ItemCode', 'ItemDescription', 'ItemUnitCost', 'ItemType', 'ItemDiscountMaxAllowed', 'Group', ),
        self::TYPE_CAMELNAME     => array('itemCode', 'itemDescription', 'itemUnitCost', 'itemType', 'itemDiscountMaxAllowed', 'group', ),
        self::TYPE_COLNAME       => array(CareBillingItemTableMap::COL_ITEM_CODE, CareBillingItemTableMap::COL_ITEM_DESCRIPTION, CareBillingItemTableMap::COL_ITEM_UNIT_COST, CareBillingItemTableMap::COL_ITEM_TYPE, CareBillingItemTableMap::COL_ITEM_DISCOUNT_MAX_ALLOWED, CareBillingItemTableMap::COL_GROUP, ),
        self::TYPE_FIELDNAME     => array('item_code', 'item_description', 'item_unit_cost', 'item_type', 'item_discount_max_allowed', 'group', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ItemCode' => 0, 'ItemDescription' => 1, 'ItemUnitCost' => 2, 'ItemType' => 3, 'ItemDiscountMaxAllowed' => 4, 'Group' => 5, ),
        self::TYPE_CAMELNAME     => array('itemCode' => 0, 'itemDescription' => 1, 'itemUnitCost' => 2, 'itemType' => 3, 'itemDiscountMaxAllowed' => 4, 'group' => 5, ),
        self::TYPE_COLNAME       => array(CareBillingItemTableMap::COL_ITEM_CODE => 0, CareBillingItemTableMap::COL_ITEM_DESCRIPTION => 1, CareBillingItemTableMap::COL_ITEM_UNIT_COST => 2, CareBillingItemTableMap::COL_ITEM_TYPE => 3, CareBillingItemTableMap::COL_ITEM_DISCOUNT_MAX_ALLOWED => 4, CareBillingItemTableMap::COL_GROUP => 5, ),
        self::TYPE_FIELDNAME     => array('item_code' => 0, 'item_description' => 1, 'item_unit_cost' => 2, 'item_type' => 3, 'item_discount_max_allowed' => 4, 'group' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
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
        $this->setName('care_billing_item');
        $this->setPhpName('CareBillingItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareBillingItem');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('item_code', 'ItemCode', 'VARCHAR', true, 5, '');
        $this->addColumn('item_description', 'ItemDescription', 'VARCHAR', false, 100, null);
        $this->addColumn('item_unit_cost', 'ItemUnitCost', 'FLOAT', false, 10, 0);
        $this->addColumn('item_type', 'ItemType', 'VARCHAR', false, 255, null);
        $this->addColumn('item_discount_max_allowed', 'ItemDiscountMaxAllowed', 'TINYINT', false, null, 0);
        $this->addColumn('group', 'Group', 'VARCHAR', false, 6, '0');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemCode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemCode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemCode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemCode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemCode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemCode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('ItemCode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareBillingItemTableMap::CLASS_DEFAULT : CareBillingItemTableMap::OM_CLASS;
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
     * @return array           (CareBillingItem object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareBillingItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareBillingItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareBillingItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareBillingItemTableMap::OM_CLASS;
            /** @var CareBillingItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareBillingItemTableMap::addInstanceToPool($obj, $key);
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
            $key = CareBillingItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareBillingItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareBillingItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareBillingItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareBillingItemTableMap::COL_ITEM_CODE);
            $criteria->addSelectColumn(CareBillingItemTableMap::COL_ITEM_DESCRIPTION);
            $criteria->addSelectColumn(CareBillingItemTableMap::COL_ITEM_UNIT_COST);
            $criteria->addSelectColumn(CareBillingItemTableMap::COL_ITEM_TYPE);
            $criteria->addSelectColumn(CareBillingItemTableMap::COL_ITEM_DISCOUNT_MAX_ALLOWED);
            $criteria->addSelectColumn(CareBillingItemTableMap::COL_GROUP);
        } else {
            $criteria->addSelectColumn($alias . '.item_code');
            $criteria->addSelectColumn($alias . '.item_description');
            $criteria->addSelectColumn($alias . '.item_unit_cost');
            $criteria->addSelectColumn($alias . '.item_type');
            $criteria->addSelectColumn($alias . '.item_discount_max_allowed');
            $criteria->addSelectColumn($alias . '.group');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareBillingItemTableMap::DATABASE_NAME)->getTable(CareBillingItemTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareBillingItemTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareBillingItemTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareBillingItemTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareBillingItem or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareBillingItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareBillingItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareBillingItemTableMap::DATABASE_NAME);
            $criteria->add(CareBillingItemTableMap::COL_ITEM_CODE, (array) $values, Criteria::IN);
        }

        $query = CareBillingItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareBillingItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareBillingItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_billing_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareBillingItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareBillingItem or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareBillingItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareBillingItem object
        }


        // Set the correct dbName
        $query = CareBillingItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareBillingItemTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareBillingItemTableMap::buildTableMap();
