<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzStockItemProperties;
use CareMd\CareMd\CareTzStockItemPropertiesQuery;
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
 * This class defines the structure of the 'care_tz_stock_item_properties' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzStockItemPropertiesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzStockItemPropertiesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_stock_item_properties';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzStockItemProperties';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzStockItemProperties';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the ID field
     */
    const COL_ID = 'care_tz_stock_item_properties.ID';

    /**
     * the column name for the Drugsandservices_id field
     */
    const COL_DRUGSANDSERVICES_ID = 'care_tz_stock_item_properties.Drugsandservices_id';

    /**
     * the column name for the item_description field
     */
    const COL_ITEM_DESCRIPTION = 'care_tz_stock_item_properties.item_description';

    /**
     * the column name for the UnitOfIssue field
     */
    const COL_UNITOFISSUE = 'care_tz_stock_item_properties.UnitOfIssue';

    /**
     * the column name for the Alternatives field
     */
    const COL_ALTERNATIVES = 'care_tz_stock_item_properties.Alternatives';

    /**
     * the column name for the Maximumlevel field
     */
    const COL_MAXIMUMLEVEL = 'care_tz_stock_item_properties.Maximumlevel';

    /**
     * the column name for the Reorderlevel field
     */
    const COL_REORDERLEVEL = 'care_tz_stock_item_properties.Reorderlevel';

    /**
     * the column name for the Minimumlevel field
     */
    const COL_MINIMUMLEVEL = 'care_tz_stock_item_properties.Minimumlevel';

    /**
     * the column name for the Orderquantity field
     */
    const COL_ORDERQUANTITY = 'care_tz_stock_item_properties.Orderquantity';

    /**
     * the column name for the is_disabled field
     */
    const COL_IS_DISABLED = 'care_tz_stock_item_properties.is_disabled';

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
        self::TYPE_PHPNAME       => array('Id', 'DrugsandservicesId', 'ItemDescription', 'Unitofissue', 'Alternatives', 'Maximumlevel', 'Reorderlevel', 'Minimumlevel', 'Orderquantity', 'IsDisabled', ),
        self::TYPE_CAMELNAME     => array('id', 'drugsandservicesId', 'itemDescription', 'unitofissue', 'alternatives', 'maximumlevel', 'reorderlevel', 'minimumlevel', 'orderquantity', 'isDisabled', ),
        self::TYPE_COLNAME       => array(CareTzStockItemPropertiesTableMap::COL_ID, CareTzStockItemPropertiesTableMap::COL_DRUGSANDSERVICES_ID, CareTzStockItemPropertiesTableMap::COL_ITEM_DESCRIPTION, CareTzStockItemPropertiesTableMap::COL_UNITOFISSUE, CareTzStockItemPropertiesTableMap::COL_ALTERNATIVES, CareTzStockItemPropertiesTableMap::COL_MAXIMUMLEVEL, CareTzStockItemPropertiesTableMap::COL_REORDERLEVEL, CareTzStockItemPropertiesTableMap::COL_MINIMUMLEVEL, CareTzStockItemPropertiesTableMap::COL_ORDERQUANTITY, CareTzStockItemPropertiesTableMap::COL_IS_DISABLED, ),
        self::TYPE_FIELDNAME     => array('ID', 'Drugsandservices_id', 'item_description', 'UnitOfIssue', 'Alternatives', 'Maximumlevel', 'Reorderlevel', 'Minimumlevel', 'Orderquantity', 'is_disabled', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'DrugsandservicesId' => 1, 'ItemDescription' => 2, 'Unitofissue' => 3, 'Alternatives' => 4, 'Maximumlevel' => 5, 'Reorderlevel' => 6, 'Minimumlevel' => 7, 'Orderquantity' => 8, 'IsDisabled' => 9, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'drugsandservicesId' => 1, 'itemDescription' => 2, 'unitofissue' => 3, 'alternatives' => 4, 'maximumlevel' => 5, 'reorderlevel' => 6, 'minimumlevel' => 7, 'orderquantity' => 8, 'isDisabled' => 9, ),
        self::TYPE_COLNAME       => array(CareTzStockItemPropertiesTableMap::COL_ID => 0, CareTzStockItemPropertiesTableMap::COL_DRUGSANDSERVICES_ID => 1, CareTzStockItemPropertiesTableMap::COL_ITEM_DESCRIPTION => 2, CareTzStockItemPropertiesTableMap::COL_UNITOFISSUE => 3, CareTzStockItemPropertiesTableMap::COL_ALTERNATIVES => 4, CareTzStockItemPropertiesTableMap::COL_MAXIMUMLEVEL => 5, CareTzStockItemPropertiesTableMap::COL_REORDERLEVEL => 6, CareTzStockItemPropertiesTableMap::COL_MINIMUMLEVEL => 7, CareTzStockItemPropertiesTableMap::COL_ORDERQUANTITY => 8, CareTzStockItemPropertiesTableMap::COL_IS_DISABLED => 9, ),
        self::TYPE_FIELDNAME     => array('ID' => 0, 'Drugsandservices_id' => 1, 'item_description' => 2, 'UnitOfIssue' => 3, 'Alternatives' => 4, 'Maximumlevel' => 5, 'Reorderlevel' => 6, 'Minimumlevel' => 7, 'Orderquantity' => 8, 'is_disabled' => 9, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $this->setName('care_tz_stock_item_properties');
        $this->setPhpName('CareTzStockItemProperties');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzStockItemProperties');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'BIGINT', true, null, null);
        $this->addColumn('Drugsandservices_id', 'DrugsandservicesId', 'VARCHAR', true, 25, '0');
        $this->addColumn('item_description', 'ItemDescription', 'VARCHAR', true, 25, '0');
        $this->addColumn('UnitOfIssue', 'Unitofissue', 'VARCHAR', true, 25, null);
        $this->addColumn('Alternatives', 'Alternatives', 'VARCHAR', true, 255, null);
        $this->addColumn('Maximumlevel', 'Maximumlevel', 'BIGINT', true, null, 0);
        $this->addColumn('Reorderlevel', 'Reorderlevel', 'BIGINT', true, null, 0);
        $this->addColumn('Minimumlevel', 'Minimumlevel', 'BIGINT', true, null, 0);
        $this->addColumn('Orderquantity', 'Orderquantity', 'BIGINT', true, null, 0);
        $this->addColumn('is_disabled', 'IsDisabled', 'INTEGER', true, 1, null);
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
        return $withPrefix ? CareTzStockItemPropertiesTableMap::CLASS_DEFAULT : CareTzStockItemPropertiesTableMap::OM_CLASS;
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
     * @return array           (CareTzStockItemProperties object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzStockItemPropertiesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzStockItemPropertiesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzStockItemPropertiesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzStockItemPropertiesTableMap::OM_CLASS;
            /** @var CareTzStockItemProperties $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzStockItemPropertiesTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzStockItemPropertiesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzStockItemPropertiesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzStockItemProperties $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzStockItemPropertiesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzStockItemPropertiesTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzStockItemPropertiesTableMap::COL_DRUGSANDSERVICES_ID);
            $criteria->addSelectColumn(CareTzStockItemPropertiesTableMap::COL_ITEM_DESCRIPTION);
            $criteria->addSelectColumn(CareTzStockItemPropertiesTableMap::COL_UNITOFISSUE);
            $criteria->addSelectColumn(CareTzStockItemPropertiesTableMap::COL_ALTERNATIVES);
            $criteria->addSelectColumn(CareTzStockItemPropertiesTableMap::COL_MAXIMUMLEVEL);
            $criteria->addSelectColumn(CareTzStockItemPropertiesTableMap::COL_REORDERLEVEL);
            $criteria->addSelectColumn(CareTzStockItemPropertiesTableMap::COL_MINIMUMLEVEL);
            $criteria->addSelectColumn(CareTzStockItemPropertiesTableMap::COL_ORDERQUANTITY);
            $criteria->addSelectColumn(CareTzStockItemPropertiesTableMap::COL_IS_DISABLED);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.Drugsandservices_id');
            $criteria->addSelectColumn($alias . '.item_description');
            $criteria->addSelectColumn($alias . '.UnitOfIssue');
            $criteria->addSelectColumn($alias . '.Alternatives');
            $criteria->addSelectColumn($alias . '.Maximumlevel');
            $criteria->addSelectColumn($alias . '.Reorderlevel');
            $criteria->addSelectColumn($alias . '.Minimumlevel');
            $criteria->addSelectColumn($alias . '.Orderquantity');
            $criteria->addSelectColumn($alias . '.is_disabled');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzStockItemPropertiesTableMap::DATABASE_NAME)->getTable(CareTzStockItemPropertiesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzStockItemPropertiesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzStockItemPropertiesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzStockItemPropertiesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzStockItemProperties or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzStockItemProperties object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockItemPropertiesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzStockItemProperties) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzStockItemPropertiesTableMap::DATABASE_NAME);
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzStockItemPropertiesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzStockItemPropertiesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzStockItemPropertiesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_stock_item_properties table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzStockItemPropertiesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzStockItemProperties or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzStockItemProperties object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockItemPropertiesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzStockItemProperties object
        }

        if ($criteria->containsKey(CareTzStockItemPropertiesTableMap::COL_ID) && $criteria->keyContainsValue(CareTzStockItemPropertiesTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzStockItemPropertiesTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzStockItemPropertiesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzStockItemPropertiesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzStockItemPropertiesTableMap::buildTableMap();
