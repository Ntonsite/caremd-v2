<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTypeFeeding;
use CareMd\CareMd\CareTypeFeedingQuery;
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
 * This class defines the structure of the 'care_type_feeding' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTypeFeedingTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTypeFeedingTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_type_feeding';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTypeFeeding';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTypeFeeding';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 11;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 11;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_type_feeding.nr';

    /**
     * the column name for the group_nr field
     */
    const COL_GROUP_NR = 'care_type_feeding.group_nr';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'care_type_feeding.type';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_type_feeding.name';

    /**
     * the column name for the LD_var field
     */
    const COL_LD_VAR = 'care_type_feeding.LD_var';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_type_feeding.description';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_type_feeding.status';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_type_feeding.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_type_feeding.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_type_feeding.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_type_feeding.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'GroupNr', 'Type', 'Name', 'LdVar', 'Description', 'Status', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'groupNr', 'type', 'name', 'ldVar', 'description', 'status', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTypeFeedingTableMap::COL_NR, CareTypeFeedingTableMap::COL_GROUP_NR, CareTypeFeedingTableMap::COL_TYPE, CareTypeFeedingTableMap::COL_NAME, CareTypeFeedingTableMap::COL_LD_VAR, CareTypeFeedingTableMap::COL_DESCRIPTION, CareTypeFeedingTableMap::COL_STATUS, CareTypeFeedingTableMap::COL_MODIFY_ID, CareTypeFeedingTableMap::COL_MODIFY_TIME, CareTypeFeedingTableMap::COL_CREATE_ID, CareTypeFeedingTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'group_nr', 'type', 'name', 'LD_var', 'description', 'status', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'GroupNr' => 1, 'Type' => 2, 'Name' => 3, 'LdVar' => 4, 'Description' => 5, 'Status' => 6, 'ModifyId' => 7, 'ModifyTime' => 8, 'CreateId' => 9, 'CreateTime' => 10, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'groupNr' => 1, 'type' => 2, 'name' => 3, 'ldVar' => 4, 'description' => 5, 'status' => 6, 'modifyId' => 7, 'modifyTime' => 8, 'createId' => 9, 'createTime' => 10, ),
        self::TYPE_COLNAME       => array(CareTypeFeedingTableMap::COL_NR => 0, CareTypeFeedingTableMap::COL_GROUP_NR => 1, CareTypeFeedingTableMap::COL_TYPE => 2, CareTypeFeedingTableMap::COL_NAME => 3, CareTypeFeedingTableMap::COL_LD_VAR => 4, CareTypeFeedingTableMap::COL_DESCRIPTION => 5, CareTypeFeedingTableMap::COL_STATUS => 6, CareTypeFeedingTableMap::COL_MODIFY_ID => 7, CareTypeFeedingTableMap::COL_MODIFY_TIME => 8, CareTypeFeedingTableMap::COL_CREATE_ID => 9, CareTypeFeedingTableMap::COL_CREATE_TIME => 10, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'group_nr' => 1, 'type' => 2, 'name' => 3, 'LD_var' => 4, 'description' => 5, 'status' => 6, 'modify_id' => 7, 'modify_time' => 8, 'create_id' => 9, 'create_time' => 10, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $this->setName('care_type_feeding');
        $this->setPhpName('CareTypeFeeding');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTypeFeeding');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'SMALLINT', true, 2, null);
        $this->addColumn('group_nr', 'GroupNr', 'TINYINT', true, 3, 0);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 35, '');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 35, '');
        $this->addColumn('LD_var', 'LdVar', 'VARCHAR', true, 35, '');
        $this->addColumn('description', 'Description', 'VARCHAR', false, 255, null);
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
        return $withPrefix ? CareTypeFeedingTableMap::CLASS_DEFAULT : CareTypeFeedingTableMap::OM_CLASS;
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
     * @return array           (CareTypeFeeding object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTypeFeedingTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTypeFeedingTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTypeFeedingTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTypeFeedingTableMap::OM_CLASS;
            /** @var CareTypeFeeding $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTypeFeedingTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTypeFeedingTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTypeFeedingTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTypeFeeding $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTypeFeedingTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_NR);
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_GROUP_NR);
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_TYPE);
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_NAME);
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_LD_VAR);
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTypeFeedingTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.group_nr');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.LD_var');
            $criteria->addSelectColumn($alias . '.description');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTypeFeedingTableMap::DATABASE_NAME)->getTable(CareTypeFeedingTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTypeFeedingTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTypeFeedingTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTypeFeedingTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTypeFeeding or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTypeFeeding object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeFeedingTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTypeFeeding) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTypeFeedingTableMap::DATABASE_NAME);
            $criteria->add(CareTypeFeedingTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareTypeFeedingQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTypeFeedingTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTypeFeedingTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_type_feeding table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTypeFeedingQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTypeFeeding or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTypeFeeding object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeFeedingTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTypeFeeding object
        }

        if ($criteria->containsKey(CareTypeFeedingTableMap::COL_NR) && $criteria->keyContainsValue(CareTypeFeedingTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTypeFeedingTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareTypeFeedingQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTypeFeedingTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTypeFeedingTableMap::buildTableMap();
