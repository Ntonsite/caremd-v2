<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareMenuSub;
use CareMd\CareMd\CareMenuSubQuery;
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
 * This class defines the structure of the 'care_menu_sub' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareMenuSubTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareMenuSubTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_menu_sub';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareMenuSub';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareMenuSub';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 15;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 15;

    /**
     * the column name for the s_nr field
     */
    const COL_S_NR = 'care_menu_sub.s_nr';

    /**
     * the column name for the s_sort_nr field
     */
    const COL_S_SORT_NR = 'care_menu_sub.s_sort_nr';

    /**
     * the column name for the s_main_nr field
     */
    const COL_S_MAIN_NR = 'care_menu_sub.s_main_nr';

    /**
     * the column name for the s_ebene field
     */
    const COL_S_EBENE = 'care_menu_sub.s_ebene';

    /**
     * the column name for the s_name field
     */
    const COL_S_NAME = 'care_menu_sub.s_name';

    /**
     * the column name for the s_LD_var field
     */
    const COL_S_LD_VAR = 'care_menu_sub.s_LD_var';

    /**
     * the column name for the s_url field
     */
    const COL_S_URL = 'care_menu_sub.s_url';

    /**
     * the column name for the s_url_ext field
     */
    const COL_S_URL_EXT = 'care_menu_sub.s_url_ext';

    /**
     * the column name for the s_image field
     */
    const COL_S_IMAGE = 'care_menu_sub.s_image';

    /**
     * the column name for the s_open_image field
     */
    const COL_S_OPEN_IMAGE = 'care_menu_sub.s_open_image';

    /**
     * the column name for the s_is_visible field
     */
    const COL_S_IS_VISIBLE = 'care_menu_sub.s_is_visible';

    /**
     * the column name for the s_hide_by field
     */
    const COL_S_HIDE_BY = 'care_menu_sub.s_hide_by';

    /**
     * the column name for the s_status field
     */
    const COL_S_STATUS = 'care_menu_sub.s_status';

    /**
     * the column name for the s_modify_id field
     */
    const COL_S_MODIFY_ID = 'care_menu_sub.s_modify_id';

    /**
     * the column name for the s_modify_time field
     */
    const COL_S_MODIFY_TIME = 'care_menu_sub.s_modify_time';

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
        self::TYPE_PHPNAME       => array('SNr', 'SSortNr', 'SMainNr', 'SEbene', 'SName', 'SLdVar', 'SUrl', 'SUrlExt', 'SImage', 'SOpenImage', 'SIsVisible', 'SHideBy', 'SStatus', 'SModifyId', 'SModifyTime', ),
        self::TYPE_CAMELNAME     => array('sNr', 'sSortNr', 'sMainNr', 'sEbene', 'sName', 'sLdVar', 'sUrl', 'sUrlExt', 'sImage', 'sOpenImage', 'sIsVisible', 'sHideBy', 'sStatus', 'sModifyId', 'sModifyTime', ),
        self::TYPE_COLNAME       => array(CareMenuSubTableMap::COL_S_NR, CareMenuSubTableMap::COL_S_SORT_NR, CareMenuSubTableMap::COL_S_MAIN_NR, CareMenuSubTableMap::COL_S_EBENE, CareMenuSubTableMap::COL_S_NAME, CareMenuSubTableMap::COL_S_LD_VAR, CareMenuSubTableMap::COL_S_URL, CareMenuSubTableMap::COL_S_URL_EXT, CareMenuSubTableMap::COL_S_IMAGE, CareMenuSubTableMap::COL_S_OPEN_IMAGE, CareMenuSubTableMap::COL_S_IS_VISIBLE, CareMenuSubTableMap::COL_S_HIDE_BY, CareMenuSubTableMap::COL_S_STATUS, CareMenuSubTableMap::COL_S_MODIFY_ID, CareMenuSubTableMap::COL_S_MODIFY_TIME, ),
        self::TYPE_FIELDNAME     => array('s_nr', 's_sort_nr', 's_main_nr', 's_ebene', 's_name', 's_LD_var', 's_url', 's_url_ext', 's_image', 's_open_image', 's_is_visible', 's_hide_by', 's_status', 's_modify_id', 's_modify_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('SNr' => 0, 'SSortNr' => 1, 'SMainNr' => 2, 'SEbene' => 3, 'SName' => 4, 'SLdVar' => 5, 'SUrl' => 6, 'SUrlExt' => 7, 'SImage' => 8, 'SOpenImage' => 9, 'SIsVisible' => 10, 'SHideBy' => 11, 'SStatus' => 12, 'SModifyId' => 13, 'SModifyTime' => 14, ),
        self::TYPE_CAMELNAME     => array('sNr' => 0, 'sSortNr' => 1, 'sMainNr' => 2, 'sEbene' => 3, 'sName' => 4, 'sLdVar' => 5, 'sUrl' => 6, 'sUrlExt' => 7, 'sImage' => 8, 'sOpenImage' => 9, 'sIsVisible' => 10, 'sHideBy' => 11, 'sStatus' => 12, 'sModifyId' => 13, 'sModifyTime' => 14, ),
        self::TYPE_COLNAME       => array(CareMenuSubTableMap::COL_S_NR => 0, CareMenuSubTableMap::COL_S_SORT_NR => 1, CareMenuSubTableMap::COL_S_MAIN_NR => 2, CareMenuSubTableMap::COL_S_EBENE => 3, CareMenuSubTableMap::COL_S_NAME => 4, CareMenuSubTableMap::COL_S_LD_VAR => 5, CareMenuSubTableMap::COL_S_URL => 6, CareMenuSubTableMap::COL_S_URL_EXT => 7, CareMenuSubTableMap::COL_S_IMAGE => 8, CareMenuSubTableMap::COL_S_OPEN_IMAGE => 9, CareMenuSubTableMap::COL_S_IS_VISIBLE => 10, CareMenuSubTableMap::COL_S_HIDE_BY => 11, CareMenuSubTableMap::COL_S_STATUS => 12, CareMenuSubTableMap::COL_S_MODIFY_ID => 13, CareMenuSubTableMap::COL_S_MODIFY_TIME => 14, ),
        self::TYPE_FIELDNAME     => array('s_nr' => 0, 's_sort_nr' => 1, 's_main_nr' => 2, 's_ebene' => 3, 's_name' => 4, 's_LD_var' => 5, 's_url' => 6, 's_url_ext' => 7, 's_image' => 8, 's_open_image' => 9, 's_is_visible' => 10, 's_hide_by' => 11, 's_status' => 12, 's_modify_id' => 13, 's_modify_time' => 14, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $this->setName('care_menu_sub');
        $this->setPhpName('CareMenuSub');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareMenuSub');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('s_nr', 'SNr', 'INTEGER', true, null, 0);
        $this->addColumn('s_sort_nr', 'SSortNr', 'INTEGER', true, null, 0);
        $this->addColumn('s_main_nr', 'SMainNr', 'INTEGER', true, null, 0);
        $this->addColumn('s_ebene', 'SEbene', 'INTEGER', true, null, 0);
        $this->addColumn('s_name', 'SName', 'VARCHAR', true, 100, '');
        $this->addColumn('s_LD_var', 'SLdVar', 'VARCHAR', true, 100, '');
        $this->addColumn('s_url', 'SUrl', 'VARCHAR', true, 100, '');
        $this->addColumn('s_url_ext', 'SUrlExt', 'VARCHAR', true, 100, '');
        $this->addColumn('s_image', 'SImage', 'VARCHAR', true, 100, '');
        $this->addColumn('s_open_image', 'SOpenImage', 'VARCHAR', true, 100, '');
        $this->addColumn('s_is_visible', 'SIsVisible', 'VARCHAR', true, 100, '');
        $this->addColumn('s_hide_by', 'SHideBy', 'VARCHAR', true, 100, '');
        $this->addColumn('s_status', 'SStatus', 'VARCHAR', true, 100, '');
        $this->addColumn('s_modify_id', 'SModifyId', 'VARCHAR', true, 100, '');
        $this->addColumn('s_modify_time', 'SModifyTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
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
        return $withPrefix ? CareMenuSubTableMap::CLASS_DEFAULT : CareMenuSubTableMap::OM_CLASS;
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
     * @return array           (CareMenuSub object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareMenuSubTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareMenuSubTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareMenuSubTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareMenuSubTableMap::OM_CLASS;
            /** @var CareMenuSub $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareMenuSubTableMap::addInstanceToPool($obj, $key);
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
            $key = CareMenuSubTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareMenuSubTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareMenuSub $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareMenuSubTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_NR);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_SORT_NR);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_MAIN_NR);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_EBENE);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_NAME);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_LD_VAR);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_URL);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_URL_EXT);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_IMAGE);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_OPEN_IMAGE);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_IS_VISIBLE);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_HIDE_BY);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_STATUS);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_MODIFY_ID);
            $criteria->addSelectColumn(CareMenuSubTableMap::COL_S_MODIFY_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.s_nr');
            $criteria->addSelectColumn($alias . '.s_sort_nr');
            $criteria->addSelectColumn($alias . '.s_main_nr');
            $criteria->addSelectColumn($alias . '.s_ebene');
            $criteria->addSelectColumn($alias . '.s_name');
            $criteria->addSelectColumn($alias . '.s_LD_var');
            $criteria->addSelectColumn($alias . '.s_url');
            $criteria->addSelectColumn($alias . '.s_url_ext');
            $criteria->addSelectColumn($alias . '.s_image');
            $criteria->addSelectColumn($alias . '.s_open_image');
            $criteria->addSelectColumn($alias . '.s_is_visible');
            $criteria->addSelectColumn($alias . '.s_hide_by');
            $criteria->addSelectColumn($alias . '.s_status');
            $criteria->addSelectColumn($alias . '.s_modify_id');
            $criteria->addSelectColumn($alias . '.s_modify_time');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareMenuSubTableMap::DATABASE_NAME)->getTable(CareMenuSubTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareMenuSubTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareMenuSubTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareMenuSubTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareMenuSub or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareMenuSub object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMenuSubTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareMenuSub) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The CareMenuSub object has no primary key');
        }

        $query = CareMenuSubQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareMenuSubTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareMenuSubTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_menu_sub table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareMenuSubQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareMenuSub or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareMenuSub object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMenuSubTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareMenuSub object
        }


        // Set the correct dbName
        $query = CareMenuSubQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareMenuSubTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareMenuSubTableMap::buildTableMap();
