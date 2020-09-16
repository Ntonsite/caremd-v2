<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzStockSupplierLists;
use CareMd\CareMd\CareTzStockSupplierListsQuery;
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
 * This class defines the structure of the 'care_tz_stock_supplier_lists' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzStockSupplierListsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzStockSupplierListsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_stock_supplier_lists';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzStockSupplierLists';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzStockSupplierLists';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the ID field
     */
    const COL_ID = 'care_tz_stock_supplier_lists.ID';

    /**
     * the column name for the Supplier_id field
     */
    const COL_SUPPLIER_ID = 'care_tz_stock_supplier_lists.Supplier_id';

    /**
     * the column name for the Supplier_item_id1 field
     */
    const COL_SUPPLIER_ITEM_ID1 = 'care_tz_stock_supplier_lists.Supplier_item_id1';

    /**
     * the column name for the Supplier_item_id2 field
     */
    const COL_SUPPLIER_ITEM_ID2 = 'care_tz_stock_supplier_lists.Supplier_item_id2';

    /**
     * the column name for the Supplier_item_name field
     */
    const COL_SUPPLIER_ITEM_NAME = 'care_tz_stock_supplier_lists.Supplier_item_name';

    /**
     * the column name for the Supplier_item_description field
     */
    const COL_SUPPLIER_ITEM_DESCRIPTION = 'care_tz_stock_supplier_lists.Supplier_item_description';

    /**
     * the column name for the Supplier_item_packsize field
     */
    const COL_SUPPLIER_ITEM_PACKSIZE = 'care_tz_stock_supplier_lists.Supplier_item_packsize';

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
        self::TYPE_PHPNAME       => array('Id', 'SupplierId', 'SupplierItemId1', 'SupplierItemId2', 'SupplierItemName', 'SupplierItemDescription', 'SupplierItemPacksize', ),
        self::TYPE_CAMELNAME     => array('id', 'supplierId', 'supplierItemId1', 'supplierItemId2', 'supplierItemName', 'supplierItemDescription', 'supplierItemPacksize', ),
        self::TYPE_COLNAME       => array(CareTzStockSupplierListsTableMap::COL_ID, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ID, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_ID1, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_ID2, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_NAME, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_DESCRIPTION, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_PACKSIZE, ),
        self::TYPE_FIELDNAME     => array('ID', 'Supplier_id', 'Supplier_item_id1', 'Supplier_item_id2', 'Supplier_item_name', 'Supplier_item_description', 'Supplier_item_packsize', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'SupplierId' => 1, 'SupplierItemId1' => 2, 'SupplierItemId2' => 3, 'SupplierItemName' => 4, 'SupplierItemDescription' => 5, 'SupplierItemPacksize' => 6, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'supplierId' => 1, 'supplierItemId1' => 2, 'supplierItemId2' => 3, 'supplierItemName' => 4, 'supplierItemDescription' => 5, 'supplierItemPacksize' => 6, ),
        self::TYPE_COLNAME       => array(CareTzStockSupplierListsTableMap::COL_ID => 0, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ID => 1, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_ID1 => 2, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_ID2 => 3, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_NAME => 4, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_DESCRIPTION => 5, CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_PACKSIZE => 6, ),
        self::TYPE_FIELDNAME     => array('ID' => 0, 'Supplier_id' => 1, 'Supplier_item_id1' => 2, 'Supplier_item_id2' => 3, 'Supplier_item_name' => 4, 'Supplier_item_description' => 5, 'Supplier_item_packsize' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
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
        $this->setName('care_tz_stock_supplier_lists');
        $this->setPhpName('CareTzStockSupplierLists');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzStockSupplierLists');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'BIGINT', true, null, null);
        $this->addColumn('Supplier_id', 'SupplierId', 'BIGINT', true, null, null);
        $this->addColumn('Supplier_item_id1', 'SupplierItemId1', 'VARCHAR', true, 30, null);
        $this->addColumn('Supplier_item_id2', 'SupplierItemId2', 'VARCHAR', true, 30, null);
        $this->addColumn('Supplier_item_name', 'SupplierItemName', 'VARCHAR', true, 100, null);
        $this->addColumn('Supplier_item_description', 'SupplierItemDescription', 'VARCHAR', true, 255, null);
        $this->addColumn('Supplier_item_packsize', 'SupplierItemPacksize', 'VARCHAR', true, 30, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzStockSupplierListsTableMap::CLASS_DEFAULT : CareTzStockSupplierListsTableMap::OM_CLASS;
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
     * @return array           (CareTzStockSupplierLists object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzStockSupplierListsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzStockSupplierListsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzStockSupplierListsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzStockSupplierListsTableMap::OM_CLASS;
            /** @var CareTzStockSupplierLists $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzStockSupplierListsTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzStockSupplierListsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzStockSupplierListsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzStockSupplierLists $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzStockSupplierListsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzStockSupplierListsTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ID);
            $criteria->addSelectColumn(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_ID1);
            $criteria->addSelectColumn(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_ID2);
            $criteria->addSelectColumn(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_NAME);
            $criteria->addSelectColumn(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_DESCRIPTION);
            $criteria->addSelectColumn(CareTzStockSupplierListsTableMap::COL_SUPPLIER_ITEM_PACKSIZE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.Supplier_id');
            $criteria->addSelectColumn($alias . '.Supplier_item_id1');
            $criteria->addSelectColumn($alias . '.Supplier_item_id2');
            $criteria->addSelectColumn($alias . '.Supplier_item_name');
            $criteria->addSelectColumn($alias . '.Supplier_item_description');
            $criteria->addSelectColumn($alias . '.Supplier_item_packsize');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzStockSupplierListsTableMap::DATABASE_NAME)->getTable(CareTzStockSupplierListsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzStockSupplierListsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzStockSupplierListsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzStockSupplierListsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzStockSupplierLists or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzStockSupplierLists object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockSupplierListsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzStockSupplierLists) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzStockSupplierListsTableMap::DATABASE_NAME);
            $criteria->add(CareTzStockSupplierListsTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzStockSupplierListsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzStockSupplierListsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzStockSupplierListsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_stock_supplier_lists table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzStockSupplierListsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzStockSupplierLists or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzStockSupplierLists object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockSupplierListsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzStockSupplierLists object
        }

        if ($criteria->containsKey(CareTzStockSupplierListsTableMap::COL_ID) && $criteria->keyContainsValue(CareTzStockSupplierListsTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzStockSupplierListsTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzStockSupplierListsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzStockSupplierListsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzStockSupplierListsTableMap::buildTableMap();
