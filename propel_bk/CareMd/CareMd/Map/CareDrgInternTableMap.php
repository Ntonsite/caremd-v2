<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareDrgIntern;
use CareMd\CareMd\CareDrgInternQuery;
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
 * This class defines the structure of the 'care_drg_intern' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareDrgInternTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareDrgInternTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_drg_intern';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareDrgIntern';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareDrgIntern';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_drg_intern.nr';

    /**
     * the column name for the code field
     */
    const COL_CODE = 'care_drg_intern.code';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_drg_intern.description';

    /**
     * the column name for the synonyms field
     */
    const COL_SYNONYMS = 'care_drg_intern.synonyms';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_drg_intern.notes';

    /**
     * the column name for the std_code field
     */
    const COL_STD_CODE = 'care_drg_intern.std_code';

    /**
     * the column name for the sub_level field
     */
    const COL_SUB_LEVEL = 'care_drg_intern.sub_level';

    /**
     * the column name for the parent_code field
     */
    const COL_PARENT_CODE = 'care_drg_intern.parent_code';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_drg_intern.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_drg_intern.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_drg_intern.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_drg_intern.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_drg_intern.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_drg_intern.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'Code', 'Description', 'Synonyms', 'Notes', 'StdCode', 'SubLevel', 'ParentCode', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'code', 'description', 'synonyms', 'notes', 'stdCode', 'subLevel', 'parentCode', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareDrgInternTableMap::COL_NR, CareDrgInternTableMap::COL_CODE, CareDrgInternTableMap::COL_DESCRIPTION, CareDrgInternTableMap::COL_SYNONYMS, CareDrgInternTableMap::COL_NOTES, CareDrgInternTableMap::COL_STD_CODE, CareDrgInternTableMap::COL_SUB_LEVEL, CareDrgInternTableMap::COL_PARENT_CODE, CareDrgInternTableMap::COL_STATUS, CareDrgInternTableMap::COL_HISTORY, CareDrgInternTableMap::COL_MODIFY_ID, CareDrgInternTableMap::COL_MODIFY_TIME, CareDrgInternTableMap::COL_CREATE_ID, CareDrgInternTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'code', 'description', 'synonyms', 'notes', 'std_code', 'sub_level', 'parent_code', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'Code' => 1, 'Description' => 2, 'Synonyms' => 3, 'Notes' => 4, 'StdCode' => 5, 'SubLevel' => 6, 'ParentCode' => 7, 'Status' => 8, 'History' => 9, 'ModifyId' => 10, 'ModifyTime' => 11, 'CreateId' => 12, 'CreateTime' => 13, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'code' => 1, 'description' => 2, 'synonyms' => 3, 'notes' => 4, 'stdCode' => 5, 'subLevel' => 6, 'parentCode' => 7, 'status' => 8, 'history' => 9, 'modifyId' => 10, 'modifyTime' => 11, 'createId' => 12, 'createTime' => 13, ),
        self::TYPE_COLNAME       => array(CareDrgInternTableMap::COL_NR => 0, CareDrgInternTableMap::COL_CODE => 1, CareDrgInternTableMap::COL_DESCRIPTION => 2, CareDrgInternTableMap::COL_SYNONYMS => 3, CareDrgInternTableMap::COL_NOTES => 4, CareDrgInternTableMap::COL_STD_CODE => 5, CareDrgInternTableMap::COL_SUB_LEVEL => 6, CareDrgInternTableMap::COL_PARENT_CODE => 7, CareDrgInternTableMap::COL_STATUS => 8, CareDrgInternTableMap::COL_HISTORY => 9, CareDrgInternTableMap::COL_MODIFY_ID => 10, CareDrgInternTableMap::COL_MODIFY_TIME => 11, CareDrgInternTableMap::COL_CREATE_ID => 12, CareDrgInternTableMap::COL_CREATE_TIME => 13, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'code' => 1, 'description' => 2, 'synonyms' => 3, 'notes' => 4, 'std_code' => 5, 'sub_level' => 6, 'parent_code' => 7, 'status' => 8, 'history' => 9, 'modify_id' => 10, 'modify_time' => 11, 'create_id' => 12, 'create_time' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $this->setName('care_drg_intern');
        $this->setPhpName('CareDrgIntern');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareDrgIntern');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('code', 'Code', 'VARCHAR', true, 12, '');
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('synonyms', 'Synonyms', 'LONGVARCHAR', true, null, null);
        $this->addColumn('notes', 'Notes', 'LONGVARCHAR', false, null, null);
        $this->addColumn('std_code', 'StdCode', 'CHAR', true, null, '');
        $this->addColumn('sub_level', 'SubLevel', 'BOOLEAN', true, 1, false);
        $this->addColumn('parent_code', 'ParentCode', 'VARCHAR', true, 12, '');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
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
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareDrgInternTableMap::CLASS_DEFAULT : CareDrgInternTableMap::OM_CLASS;
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
     * @return array           (CareDrgIntern object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareDrgInternTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareDrgInternTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareDrgInternTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareDrgInternTableMap::OM_CLASS;
            /** @var CareDrgIntern $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareDrgInternTableMap::addInstanceToPool($obj, $key);
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
            $key = CareDrgInternTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareDrgInternTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareDrgIntern $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareDrgInternTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_NR);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_CODE);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_SYNONYMS);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_STD_CODE);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_SUB_LEVEL);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_PARENT_CODE);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareDrgInternTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.synonyms');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.std_code');
            $criteria->addSelectColumn($alias . '.sub_level');
            $criteria->addSelectColumn($alias . '.parent_code');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareDrgInternTableMap::DATABASE_NAME)->getTable(CareDrgInternTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareDrgInternTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareDrgInternTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareDrgInternTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareDrgIntern or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareDrgIntern object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDrgInternTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareDrgIntern) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareDrgInternTableMap::DATABASE_NAME);
            $criteria->add(CareDrgInternTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareDrgInternQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareDrgInternTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareDrgInternTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_drg_intern table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareDrgInternQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareDrgIntern or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareDrgIntern object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDrgInternTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareDrgIntern object
        }

        if ($criteria->containsKey(CareDrgInternTableMap::COL_NR) && $criteria->keyContainsValue(CareDrgInternTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareDrgInternTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareDrgInternQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareDrgInternTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareDrgInternTableMap::buildTableMap();
