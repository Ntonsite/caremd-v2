<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareRegistry;
use CareMd\CareMd\CareRegistryQuery;
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
 * This class defines the structure of the 'care_registry' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareRegistryTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareRegistryTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_registry';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareRegistry';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareRegistry';

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
     * the column name for the registry_id field
     */
    const COL_REGISTRY_ID = 'care_registry.registry_id';

    /**
     * the column name for the module_start_script field
     */
    const COL_MODULE_START_SCRIPT = 'care_registry.module_start_script';

    /**
     * the column name for the news_start_script field
     */
    const COL_NEWS_START_SCRIPT = 'care_registry.news_start_script';

    /**
     * the column name for the news_editor_script field
     */
    const COL_NEWS_EDITOR_SCRIPT = 'care_registry.news_editor_script';

    /**
     * the column name for the news_reader_script field
     */
    const COL_NEWS_READER_SCRIPT = 'care_registry.news_reader_script';

    /**
     * the column name for the passcheck_script field
     */
    const COL_PASSCHECK_SCRIPT = 'care_registry.passcheck_script';

    /**
     * the column name for the composite field
     */
    const COL_COMPOSITE = 'care_registry.composite';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_registry.status';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_registry.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_registry.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_registry.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_registry.create_time';

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
        self::TYPE_PHPNAME       => array('RegistryId', 'ModuleStartScript', 'NewsStartScript', 'NewsEditorScript', 'NewsReaderScript', 'PasscheckScript', 'Composite', 'Status', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('registryId', 'moduleStartScript', 'newsStartScript', 'newsEditorScript', 'newsReaderScript', 'passcheckScript', 'composite', 'status', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareRegistryTableMap::COL_REGISTRY_ID, CareRegistryTableMap::COL_MODULE_START_SCRIPT, CareRegistryTableMap::COL_NEWS_START_SCRIPT, CareRegistryTableMap::COL_NEWS_EDITOR_SCRIPT, CareRegistryTableMap::COL_NEWS_READER_SCRIPT, CareRegistryTableMap::COL_PASSCHECK_SCRIPT, CareRegistryTableMap::COL_COMPOSITE, CareRegistryTableMap::COL_STATUS, CareRegistryTableMap::COL_MODIFY_ID, CareRegistryTableMap::COL_MODIFY_TIME, CareRegistryTableMap::COL_CREATE_ID, CareRegistryTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('registry_id', 'module_start_script', 'news_start_script', 'news_editor_script', 'news_reader_script', 'passcheck_script', 'composite', 'status', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('RegistryId' => 0, 'ModuleStartScript' => 1, 'NewsStartScript' => 2, 'NewsEditorScript' => 3, 'NewsReaderScript' => 4, 'PasscheckScript' => 5, 'Composite' => 6, 'Status' => 7, 'ModifyId' => 8, 'ModifyTime' => 9, 'CreateId' => 10, 'CreateTime' => 11, ),
        self::TYPE_CAMELNAME     => array('registryId' => 0, 'moduleStartScript' => 1, 'newsStartScript' => 2, 'newsEditorScript' => 3, 'newsReaderScript' => 4, 'passcheckScript' => 5, 'composite' => 6, 'status' => 7, 'modifyId' => 8, 'modifyTime' => 9, 'createId' => 10, 'createTime' => 11, ),
        self::TYPE_COLNAME       => array(CareRegistryTableMap::COL_REGISTRY_ID => 0, CareRegistryTableMap::COL_MODULE_START_SCRIPT => 1, CareRegistryTableMap::COL_NEWS_START_SCRIPT => 2, CareRegistryTableMap::COL_NEWS_EDITOR_SCRIPT => 3, CareRegistryTableMap::COL_NEWS_READER_SCRIPT => 4, CareRegistryTableMap::COL_PASSCHECK_SCRIPT => 5, CareRegistryTableMap::COL_COMPOSITE => 6, CareRegistryTableMap::COL_STATUS => 7, CareRegistryTableMap::COL_MODIFY_ID => 8, CareRegistryTableMap::COL_MODIFY_TIME => 9, CareRegistryTableMap::COL_CREATE_ID => 10, CareRegistryTableMap::COL_CREATE_TIME => 11, ),
        self::TYPE_FIELDNAME     => array('registry_id' => 0, 'module_start_script' => 1, 'news_start_script' => 2, 'news_editor_script' => 3, 'news_reader_script' => 4, 'passcheck_script' => 5, 'composite' => 6, 'status' => 7, 'modify_id' => 8, 'modify_time' => 9, 'create_id' => 10, 'create_time' => 11, ),
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
        $this->setName('care_registry');
        $this->setPhpName('CareRegistry');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareRegistry');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('registry_id', 'RegistryId', 'VARCHAR', true, 35, '');
        $this->addColumn('module_start_script', 'ModuleStartScript', 'VARCHAR', true, 60, '');
        $this->addColumn('news_start_script', 'NewsStartScript', 'VARCHAR', true, 60, '');
        $this->addColumn('news_editor_script', 'NewsEditorScript', 'VARCHAR', true, 255, '');
        $this->addColumn('news_reader_script', 'NewsReaderScript', 'VARCHAR', true, 255, '');
        $this->addColumn('passcheck_script', 'PasscheckScript', 'VARCHAR', true, 255, '');
        $this->addColumn('composite', 'Composite', 'LONGVARCHAR', true, null, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
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
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('RegistryId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('RegistryId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('RegistryId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('RegistryId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('RegistryId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('RegistryId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('RegistryId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareRegistryTableMap::CLASS_DEFAULT : CareRegistryTableMap::OM_CLASS;
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
     * @return array           (CareRegistry object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareRegistryTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareRegistryTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareRegistryTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareRegistryTableMap::OM_CLASS;
            /** @var CareRegistry $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareRegistryTableMap::addInstanceToPool($obj, $key);
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
            $key = CareRegistryTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareRegistryTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareRegistry $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareRegistryTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareRegistryTableMap::COL_REGISTRY_ID);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_MODULE_START_SCRIPT);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_NEWS_START_SCRIPT);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_NEWS_EDITOR_SCRIPT);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_NEWS_READER_SCRIPT);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_PASSCHECK_SCRIPT);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_COMPOSITE);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareRegistryTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.registry_id');
            $criteria->addSelectColumn($alias . '.module_start_script');
            $criteria->addSelectColumn($alias . '.news_start_script');
            $criteria->addSelectColumn($alias . '.news_editor_script');
            $criteria->addSelectColumn($alias . '.news_reader_script');
            $criteria->addSelectColumn($alias . '.passcheck_script');
            $criteria->addSelectColumn($alias . '.composite');
            $criteria->addSelectColumn($alias . '.status');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareRegistryTableMap::DATABASE_NAME)->getTable(CareRegistryTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareRegistryTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareRegistryTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareRegistryTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareRegistry or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareRegistry object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareRegistryTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareRegistry) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareRegistryTableMap::DATABASE_NAME);
            $criteria->add(CareRegistryTableMap::COL_REGISTRY_ID, (array) $values, Criteria::IN);
        }

        $query = CareRegistryQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareRegistryTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareRegistryTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_registry table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareRegistryQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareRegistry or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareRegistry object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareRegistryTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareRegistry object
        }


        // Set the correct dbName
        $query = CareRegistryQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareRegistryTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareRegistryTableMap::buildTableMap();
