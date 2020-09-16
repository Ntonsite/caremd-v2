<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareMedOrdercatalog;
use CareMd\CareMd\CareMedOrdercatalogQuery;
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
 * This class defines the structure of the 'care_med_ordercatalog' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareMedOrdercatalogTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareMedOrdercatalogTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_med_ordercatalog';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareMedOrdercatalog';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareMedOrdercatalog';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the item_no field
     */
    const COL_ITEM_NO = 'care_med_ordercatalog.item_no';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_med_ordercatalog.dept_nr';

    /**
     * the column name for the hit field
     */
    const COL_HIT = 'care_med_ordercatalog.hit';

    /**
     * the column name for the artikelname field
     */
    const COL_ARTIKELNAME = 'care_med_ordercatalog.artikelname';

    /**
     * the column name for the bestellnum field
     */
    const COL_BESTELLNUM = 'care_med_ordercatalog.bestellnum';

    /**
     * the column name for the minorder field
     */
    const COL_MINORDER = 'care_med_ordercatalog.minorder';

    /**
     * the column name for the maxorder field
     */
    const COL_MAXORDER = 'care_med_ordercatalog.maxorder';

    /**
     * the column name for the proorder field
     */
    const COL_PROORDER = 'care_med_ordercatalog.proorder';

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
        self::TYPE_PHPNAME       => array('ItemNo', 'DeptNr', 'Hit', 'Artikelname', 'Bestellnum', 'Minorder', 'Maxorder', 'Proorder', ),
        self::TYPE_CAMELNAME     => array('itemNo', 'deptNr', 'hit', 'artikelname', 'bestellnum', 'minorder', 'maxorder', 'proorder', ),
        self::TYPE_COLNAME       => array(CareMedOrdercatalogTableMap::COL_ITEM_NO, CareMedOrdercatalogTableMap::COL_DEPT_NR, CareMedOrdercatalogTableMap::COL_HIT, CareMedOrdercatalogTableMap::COL_ARTIKELNAME, CareMedOrdercatalogTableMap::COL_BESTELLNUM, CareMedOrdercatalogTableMap::COL_MINORDER, CareMedOrdercatalogTableMap::COL_MAXORDER, CareMedOrdercatalogTableMap::COL_PROORDER, ),
        self::TYPE_FIELDNAME     => array('item_no', 'dept_nr', 'hit', 'artikelname', 'bestellnum', 'minorder', 'maxorder', 'proorder', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ItemNo' => 0, 'DeptNr' => 1, 'Hit' => 2, 'Artikelname' => 3, 'Bestellnum' => 4, 'Minorder' => 5, 'Maxorder' => 6, 'Proorder' => 7, ),
        self::TYPE_CAMELNAME     => array('itemNo' => 0, 'deptNr' => 1, 'hit' => 2, 'artikelname' => 3, 'bestellnum' => 4, 'minorder' => 5, 'maxorder' => 6, 'proorder' => 7, ),
        self::TYPE_COLNAME       => array(CareMedOrdercatalogTableMap::COL_ITEM_NO => 0, CareMedOrdercatalogTableMap::COL_DEPT_NR => 1, CareMedOrdercatalogTableMap::COL_HIT => 2, CareMedOrdercatalogTableMap::COL_ARTIKELNAME => 3, CareMedOrdercatalogTableMap::COL_BESTELLNUM => 4, CareMedOrdercatalogTableMap::COL_MINORDER => 5, CareMedOrdercatalogTableMap::COL_MAXORDER => 6, CareMedOrdercatalogTableMap::COL_PROORDER => 7, ),
        self::TYPE_FIELDNAME     => array('item_no' => 0, 'dept_nr' => 1, 'hit' => 2, 'artikelname' => 3, 'bestellnum' => 4, 'minorder' => 5, 'maxorder' => 6, 'proorder' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
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
        $this->setName('care_med_ordercatalog');
        $this->setPhpName('CareMedOrdercatalog');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareMedOrdercatalog');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('item_no', 'ItemNo', 'INTEGER', true, null, null);
        $this->addColumn('dept_nr', 'DeptNr', 'INTEGER', true, 3, 0);
        $this->addColumn('hit', 'Hit', 'INTEGER', true, null, 0);
        $this->addColumn('artikelname', 'Artikelname', 'VARCHAR', true, 255, null);
        $this->addColumn('bestellnum', 'Bestellnum', 'VARCHAR', true, 20, '');
        $this->addColumn('minorder', 'Minorder', 'INTEGER', true, 4, 0);
        $this->addColumn('maxorder', 'Maxorder', 'INTEGER', true, 4, 0);
        $this->addColumn('proorder', 'Proorder', 'VARCHAR', true, 255, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNo', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNo', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNo', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNo', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNo', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNo', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('ItemNo', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareMedOrdercatalogTableMap::CLASS_DEFAULT : CareMedOrdercatalogTableMap::OM_CLASS;
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
     * @return array           (CareMedOrdercatalog object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareMedOrdercatalogTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareMedOrdercatalogTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareMedOrdercatalogTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareMedOrdercatalogTableMap::OM_CLASS;
            /** @var CareMedOrdercatalog $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareMedOrdercatalogTableMap::addInstanceToPool($obj, $key);
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
            $key = CareMedOrdercatalogTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareMedOrdercatalogTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareMedOrdercatalog $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareMedOrdercatalogTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareMedOrdercatalogTableMap::COL_ITEM_NO);
            $criteria->addSelectColumn(CareMedOrdercatalogTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareMedOrdercatalogTableMap::COL_HIT);
            $criteria->addSelectColumn(CareMedOrdercatalogTableMap::COL_ARTIKELNAME);
            $criteria->addSelectColumn(CareMedOrdercatalogTableMap::COL_BESTELLNUM);
            $criteria->addSelectColumn(CareMedOrdercatalogTableMap::COL_MINORDER);
            $criteria->addSelectColumn(CareMedOrdercatalogTableMap::COL_MAXORDER);
            $criteria->addSelectColumn(CareMedOrdercatalogTableMap::COL_PROORDER);
        } else {
            $criteria->addSelectColumn($alias . '.item_no');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.hit');
            $criteria->addSelectColumn($alias . '.artikelname');
            $criteria->addSelectColumn($alias . '.bestellnum');
            $criteria->addSelectColumn($alias . '.minorder');
            $criteria->addSelectColumn($alias . '.maxorder');
            $criteria->addSelectColumn($alias . '.proorder');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareMedOrdercatalogTableMap::DATABASE_NAME)->getTable(CareMedOrdercatalogTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareMedOrdercatalogTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareMedOrdercatalogTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareMedOrdercatalogTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareMedOrdercatalog or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareMedOrdercatalog object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedOrdercatalogTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareMedOrdercatalog) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareMedOrdercatalogTableMap::DATABASE_NAME);
            $criteria->add(CareMedOrdercatalogTableMap::COL_ITEM_NO, (array) $values, Criteria::IN);
        }

        $query = CareMedOrdercatalogQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareMedOrdercatalogTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareMedOrdercatalogTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_med_ordercatalog table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareMedOrdercatalogQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareMedOrdercatalog or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareMedOrdercatalog object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedOrdercatalogTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareMedOrdercatalog object
        }

        if ($criteria->containsKey(CareMedOrdercatalogTableMap::COL_ITEM_NO) && $criteria->keyContainsValue(CareMedOrdercatalogTableMap::COL_ITEM_NO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareMedOrdercatalogTableMap::COL_ITEM_NO.')');
        }


        // Set the correct dbName
        $query = CareMedOrdercatalogQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareMedOrdercatalogTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareMedOrdercatalogTableMap::buildTableMap();
