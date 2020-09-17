<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareSteriProductsMain;
use CareMd\CareMd\CareSteriProductsMainQuery;
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
 * This class defines the structure of the 'care_steri_products_main' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareSteriProductsMainTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareSteriProductsMainTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_steri_products_main';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareSteriProductsMain';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareSteriProductsMain';

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
     * the column name for the bestellnum field
     */
    const COL_BESTELLNUM = 'care_steri_products_main.bestellnum';

    /**
     * the column name for the containernum field
     */
    const COL_CONTAINERNUM = 'care_steri_products_main.containernum';

    /**
     * the column name for the industrynum field
     */
    const COL_INDUSTRYNUM = 'care_steri_products_main.industrynum';

    /**
     * the column name for the containername field
     */
    const COL_CONTAINERNAME = 'care_steri_products_main.containername';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_steri_products_main.description';

    /**
     * the column name for the packing field
     */
    const COL_PACKING = 'care_steri_products_main.packing';

    /**
     * the column name for the minorder field
     */
    const COL_MINORDER = 'care_steri_products_main.minorder';

    /**
     * the column name for the maxorder field
     */
    const COL_MAXORDER = 'care_steri_products_main.maxorder';

    /**
     * the column name for the proorder field
     */
    const COL_PROORDER = 'care_steri_products_main.proorder';

    /**
     * the column name for the picfile field
     */
    const COL_PICFILE = 'care_steri_products_main.picfile';

    /**
     * the column name for the encoder field
     */
    const COL_ENCODER = 'care_steri_products_main.encoder';

    /**
     * the column name for the enc_date field
     */
    const COL_ENC_DATE = 'care_steri_products_main.enc_date';

    /**
     * the column name for the enc_time field
     */
    const COL_ENC_TIME = 'care_steri_products_main.enc_time';

    /**
     * the column name for the lock_flag field
     */
    const COL_LOCK_FLAG = 'care_steri_products_main.lock_flag';

    /**
     * the column name for the medgroup field
     */
    const COL_MEDGROUP = 'care_steri_products_main.medgroup';

    /**
     * the column name for the cave field
     */
    const COL_CAVE = 'care_steri_products_main.cave';

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
        self::TYPE_PHPNAME       => array('Bestellnum', 'Containernum', 'Industrynum', 'Containername', 'Description', 'Packing', 'Minorder', 'Maxorder', 'Proorder', 'Picfile', 'Encoder', 'EncDate', 'EncTime', 'LockFlag', 'Medgroup', 'Cave', ),
        self::TYPE_CAMELNAME     => array('bestellnum', 'containernum', 'industrynum', 'containername', 'description', 'packing', 'minorder', 'maxorder', 'proorder', 'picfile', 'encoder', 'encDate', 'encTime', 'lockFlag', 'medgroup', 'cave', ),
        self::TYPE_COLNAME       => array(CareSteriProductsMainTableMap::COL_BESTELLNUM, CareSteriProductsMainTableMap::COL_CONTAINERNUM, CareSteriProductsMainTableMap::COL_INDUSTRYNUM, CareSteriProductsMainTableMap::COL_CONTAINERNAME, CareSteriProductsMainTableMap::COL_DESCRIPTION, CareSteriProductsMainTableMap::COL_PACKING, CareSteriProductsMainTableMap::COL_MINORDER, CareSteriProductsMainTableMap::COL_MAXORDER, CareSteriProductsMainTableMap::COL_PROORDER, CareSteriProductsMainTableMap::COL_PICFILE, CareSteriProductsMainTableMap::COL_ENCODER, CareSteriProductsMainTableMap::COL_ENC_DATE, CareSteriProductsMainTableMap::COL_ENC_TIME, CareSteriProductsMainTableMap::COL_LOCK_FLAG, CareSteriProductsMainTableMap::COL_MEDGROUP, CareSteriProductsMainTableMap::COL_CAVE, ),
        self::TYPE_FIELDNAME     => array('bestellnum', 'containernum', 'industrynum', 'containername', 'description', 'packing', 'minorder', 'maxorder', 'proorder', 'picfile', 'encoder', 'enc_date', 'enc_time', 'lock_flag', 'medgroup', 'cave', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Bestellnum' => 0, 'Containernum' => 1, 'Industrynum' => 2, 'Containername' => 3, 'Description' => 4, 'Packing' => 5, 'Minorder' => 6, 'Maxorder' => 7, 'Proorder' => 8, 'Picfile' => 9, 'Encoder' => 10, 'EncDate' => 11, 'EncTime' => 12, 'LockFlag' => 13, 'Medgroup' => 14, 'Cave' => 15, ),
        self::TYPE_CAMELNAME     => array('bestellnum' => 0, 'containernum' => 1, 'industrynum' => 2, 'containername' => 3, 'description' => 4, 'packing' => 5, 'minorder' => 6, 'maxorder' => 7, 'proorder' => 8, 'picfile' => 9, 'encoder' => 10, 'encDate' => 11, 'encTime' => 12, 'lockFlag' => 13, 'medgroup' => 14, 'cave' => 15, ),
        self::TYPE_COLNAME       => array(CareSteriProductsMainTableMap::COL_BESTELLNUM => 0, CareSteriProductsMainTableMap::COL_CONTAINERNUM => 1, CareSteriProductsMainTableMap::COL_INDUSTRYNUM => 2, CareSteriProductsMainTableMap::COL_CONTAINERNAME => 3, CareSteriProductsMainTableMap::COL_DESCRIPTION => 4, CareSteriProductsMainTableMap::COL_PACKING => 5, CareSteriProductsMainTableMap::COL_MINORDER => 6, CareSteriProductsMainTableMap::COL_MAXORDER => 7, CareSteriProductsMainTableMap::COL_PROORDER => 8, CareSteriProductsMainTableMap::COL_PICFILE => 9, CareSteriProductsMainTableMap::COL_ENCODER => 10, CareSteriProductsMainTableMap::COL_ENC_DATE => 11, CareSteriProductsMainTableMap::COL_ENC_TIME => 12, CareSteriProductsMainTableMap::COL_LOCK_FLAG => 13, CareSteriProductsMainTableMap::COL_MEDGROUP => 14, CareSteriProductsMainTableMap::COL_CAVE => 15, ),
        self::TYPE_FIELDNAME     => array('bestellnum' => 0, 'containernum' => 1, 'industrynum' => 2, 'containername' => 3, 'description' => 4, 'packing' => 5, 'minorder' => 6, 'maxorder' => 7, 'proorder' => 8, 'picfile' => 9, 'encoder' => 10, 'enc_date' => 11, 'enc_time' => 12, 'lock_flag' => 13, 'medgroup' => 14, 'cave' => 15, ),
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
        $this->setName('care_steri_products_main');
        $this->setPhpName('CareSteriProductsMain');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareSteriProductsMain');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestellnum', 'Bestellnum', 'INTEGER', true, 15, 0);
        $this->addColumn('containernum', 'Containernum', 'VARCHAR', true, 15, '');
        $this->addColumn('industrynum', 'Industrynum', 'VARCHAR', true, 255, null);
        $this->addColumn('containername', 'Containername', 'VARCHAR', true, 40, '');
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('packing', 'Packing', 'VARCHAR', true, 255, null);
        $this->addColumn('minorder', 'Minorder', 'INTEGER', true, 4, 0);
        $this->addColumn('maxorder', 'Maxorder', 'INTEGER', true, 4, 0);
        $this->addColumn('proorder', 'Proorder', 'VARCHAR', true, 255, null);
        $this->addColumn('picfile', 'Picfile', 'VARCHAR', true, 255, null);
        $this->addColumn('encoder', 'Encoder', 'VARCHAR', true, 255, null);
        $this->addColumn('enc_date', 'EncDate', 'VARCHAR', true, 255, null);
        $this->addColumn('enc_time', 'EncTime', 'VARCHAR', true, 255, null);
        $this->addColumn('lock_flag', 'LockFlag', 'BOOLEAN', true, 1, false);
        $this->addColumn('medgroup', 'Medgroup', 'LONGVARCHAR', true, null, null);
        $this->addColumn('cave', 'Cave', 'VARCHAR', true, 255, null);
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
        return $withPrefix ? CareSteriProductsMainTableMap::CLASS_DEFAULT : CareSteriProductsMainTableMap::OM_CLASS;
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
     * @return array           (CareSteriProductsMain object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareSteriProductsMainTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareSteriProductsMainTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareSteriProductsMainTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareSteriProductsMainTableMap::OM_CLASS;
            /** @var CareSteriProductsMain $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareSteriProductsMainTableMap::addInstanceToPool($obj, $key);
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
            $key = CareSteriProductsMainTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareSteriProductsMainTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareSteriProductsMain $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareSteriProductsMainTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_BESTELLNUM);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_CONTAINERNUM);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_INDUSTRYNUM);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_CONTAINERNAME);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_PACKING);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_MINORDER);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_MAXORDER);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_PROORDER);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_PICFILE);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_ENCODER);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_ENC_DATE);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_ENC_TIME);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_LOCK_FLAG);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_MEDGROUP);
            $criteria->addSelectColumn(CareSteriProductsMainTableMap::COL_CAVE);
        } else {
            $criteria->addSelectColumn($alias . '.bestellnum');
            $criteria->addSelectColumn($alias . '.containernum');
            $criteria->addSelectColumn($alias . '.industrynum');
            $criteria->addSelectColumn($alias . '.containername');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.packing');
            $criteria->addSelectColumn($alias . '.minorder');
            $criteria->addSelectColumn($alias . '.maxorder');
            $criteria->addSelectColumn($alias . '.proorder');
            $criteria->addSelectColumn($alias . '.picfile');
            $criteria->addSelectColumn($alias . '.encoder');
            $criteria->addSelectColumn($alias . '.enc_date');
            $criteria->addSelectColumn($alias . '.enc_time');
            $criteria->addSelectColumn($alias . '.lock_flag');
            $criteria->addSelectColumn($alias . '.medgroup');
            $criteria->addSelectColumn($alias . '.cave');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareSteriProductsMainTableMap::DATABASE_NAME)->getTable(CareSteriProductsMainTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareSteriProductsMainTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareSteriProductsMainTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareSteriProductsMainTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareSteriProductsMain or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareSteriProductsMain object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareSteriProductsMainTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareSteriProductsMain) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The CareSteriProductsMain object has no primary key');
        }

        $query = CareSteriProductsMainQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareSteriProductsMainTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareSteriProductsMainTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_steri_products_main table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareSteriProductsMainQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareSteriProductsMain or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareSteriProductsMain object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareSteriProductsMainTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareSteriProductsMain object
        }


        // Set the correct dbName
        $query = CareSteriProductsMainQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareSteriProductsMainTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareSteriProductsMainTableMap::buildTableMap();
