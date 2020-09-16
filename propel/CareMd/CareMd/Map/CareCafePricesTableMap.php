<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareCafePrices;
use CareMd\CareMd\CareCafePricesQuery;
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
 * This class defines the structure of the 'care_cafe_prices' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareCafePricesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareCafePricesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_cafe_prices';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareCafePrices';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareCafePrices';

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
     * the column name for the item field
     */
    const COL_ITEM = 'care_cafe_prices.item';

    /**
     * the column name for the lang field
     */
    const COL_LANG = 'care_cafe_prices.lang';

    /**
     * the column name for the productgroup field
     */
    const COL_PRODUCTGROUP = 'care_cafe_prices.productgroup';

    /**
     * the column name for the article field
     */
    const COL_ARTICLE = 'care_cafe_prices.article';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_cafe_prices.description';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'care_cafe_prices.price';

    /**
     * the column name for the unit field
     */
    const COL_UNIT = 'care_cafe_prices.unit';

    /**
     * the column name for the pic_filename field
     */
    const COL_PIC_FILENAME = 'care_cafe_prices.pic_filename';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_cafe_prices.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_cafe_prices.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_cafe_prices.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_cafe_prices.create_time';

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
        self::TYPE_PHPNAME       => array('Item', 'Lang', 'Productgroup', 'Article', 'Description', 'Price', 'Unit', 'PicFilename', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('item', 'lang', 'productgroup', 'article', 'description', 'price', 'unit', 'picFilename', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareCafePricesTableMap::COL_ITEM, CareCafePricesTableMap::COL_LANG, CareCafePricesTableMap::COL_PRODUCTGROUP, CareCafePricesTableMap::COL_ARTICLE, CareCafePricesTableMap::COL_DESCRIPTION, CareCafePricesTableMap::COL_PRICE, CareCafePricesTableMap::COL_UNIT, CareCafePricesTableMap::COL_PIC_FILENAME, CareCafePricesTableMap::COL_MODIFY_ID, CareCafePricesTableMap::COL_MODIFY_TIME, CareCafePricesTableMap::COL_CREATE_ID, CareCafePricesTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('item', 'lang', 'productgroup', 'article', 'description', 'price', 'unit', 'pic_filename', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Item' => 0, 'Lang' => 1, 'Productgroup' => 2, 'Article' => 3, 'Description' => 4, 'Price' => 5, 'Unit' => 6, 'PicFilename' => 7, 'ModifyId' => 8, 'ModifyTime' => 9, 'CreateId' => 10, 'CreateTime' => 11, ),
        self::TYPE_CAMELNAME     => array('item' => 0, 'lang' => 1, 'productgroup' => 2, 'article' => 3, 'description' => 4, 'price' => 5, 'unit' => 6, 'picFilename' => 7, 'modifyId' => 8, 'modifyTime' => 9, 'createId' => 10, 'createTime' => 11, ),
        self::TYPE_COLNAME       => array(CareCafePricesTableMap::COL_ITEM => 0, CareCafePricesTableMap::COL_LANG => 1, CareCafePricesTableMap::COL_PRODUCTGROUP => 2, CareCafePricesTableMap::COL_ARTICLE => 3, CareCafePricesTableMap::COL_DESCRIPTION => 4, CareCafePricesTableMap::COL_PRICE => 5, CareCafePricesTableMap::COL_UNIT => 6, CareCafePricesTableMap::COL_PIC_FILENAME => 7, CareCafePricesTableMap::COL_MODIFY_ID => 8, CareCafePricesTableMap::COL_MODIFY_TIME => 9, CareCafePricesTableMap::COL_CREATE_ID => 10, CareCafePricesTableMap::COL_CREATE_TIME => 11, ),
        self::TYPE_FIELDNAME     => array('item' => 0, 'lang' => 1, 'productgroup' => 2, 'article' => 3, 'description' => 4, 'price' => 5, 'unit' => 6, 'pic_filename' => 7, 'modify_id' => 8, 'modify_time' => 9, 'create_id' => 10, 'create_time' => 11, ),
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
        $this->setName('care_cafe_prices');
        $this->setPhpName('CareCafePrices');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareCafePrices');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('item', 'Item', 'INTEGER', true, null, null);
        $this->addColumn('lang', 'Lang', 'VARCHAR', true, 10, 'en');
        $this->addColumn('productgroup', 'Productgroup', 'VARCHAR', true, 255, null);
        $this->addColumn('article', 'Article', 'VARCHAR', true, 255, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 255, null);
        $this->addColumn('price', 'Price', 'VARCHAR', true, 10, '');
        $this->addColumn('unit', 'Unit', 'VARCHAR', true, 255, null);
        $this->addColumn('pic_filename', 'PicFilename', 'VARCHAR', true, 255, null);
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
        return $withPrefix ? CareCafePricesTableMap::CLASS_DEFAULT : CareCafePricesTableMap::OM_CLASS;
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
     * @return array           (CareCafePrices object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareCafePricesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareCafePricesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareCafePricesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareCafePricesTableMap::OM_CLASS;
            /** @var CareCafePrices $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareCafePricesTableMap::addInstanceToPool($obj, $key);
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
            $key = CareCafePricesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareCafePricesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareCafePrices $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareCafePricesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_ITEM);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_LANG);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_PRODUCTGROUP);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_ARTICLE);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_PRICE);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_UNIT);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_PIC_FILENAME);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareCafePricesTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.item');
            $criteria->addSelectColumn($alias . '.lang');
            $criteria->addSelectColumn($alias . '.productgroup');
            $criteria->addSelectColumn($alias . '.article');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.unit');
            $criteria->addSelectColumn($alias . '.pic_filename');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareCafePricesTableMap::DATABASE_NAME)->getTable(CareCafePricesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareCafePricesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareCafePricesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareCafePricesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareCafePrices or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareCafePrices object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareCafePricesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareCafePrices) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The CareCafePrices object has no primary key');
        }

        $query = CareCafePricesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareCafePricesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareCafePricesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_cafe_prices table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareCafePricesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareCafePrices or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareCafePrices object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareCafePricesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareCafePrices object
        }


        // Set the correct dbName
        $query = CareCafePricesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareCafePricesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareCafePricesTableMap::buildTableMap();
