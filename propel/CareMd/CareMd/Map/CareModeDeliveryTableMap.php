<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareModeDelivery;
use CareMd\CareMd\CareModeDeliveryQuery;
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
 * This class defines the structure of the 'care_mode_delivery' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareModeDeliveryTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareModeDeliveryTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_mode_delivery';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareModeDelivery';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareModeDelivery';

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
    const COL_NR = 'care_mode_delivery.nr';

    /**
     * the column name for the group_nr field
     */
    const COL_GROUP_NR = 'care_mode_delivery.group_nr';

    /**
     * the column name for the mode field
     */
    const COL_MODE = 'care_mode_delivery.mode';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_mode_delivery.name';

    /**
     * the column name for the LD_var field
     */
    const COL_LD_VAR = 'care_mode_delivery.LD_var';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_mode_delivery.description';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_mode_delivery.status';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_mode_delivery.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_mode_delivery.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_mode_delivery.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_mode_delivery.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'GroupNr', 'Mode', 'Name', 'LdVar', 'Description', 'Status', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'groupNr', 'mode', 'name', 'ldVar', 'description', 'status', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareModeDeliveryTableMap::COL_NR, CareModeDeliveryTableMap::COL_GROUP_NR, CareModeDeliveryTableMap::COL_MODE, CareModeDeliveryTableMap::COL_NAME, CareModeDeliveryTableMap::COL_LD_VAR, CareModeDeliveryTableMap::COL_DESCRIPTION, CareModeDeliveryTableMap::COL_STATUS, CareModeDeliveryTableMap::COL_MODIFY_ID, CareModeDeliveryTableMap::COL_MODIFY_TIME, CareModeDeliveryTableMap::COL_CREATE_ID, CareModeDeliveryTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'group_nr', 'mode', 'name', 'LD_var', 'description', 'status', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'GroupNr' => 1, 'Mode' => 2, 'Name' => 3, 'LdVar' => 4, 'Description' => 5, 'Status' => 6, 'ModifyId' => 7, 'ModifyTime' => 8, 'CreateId' => 9, 'CreateTime' => 10, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'groupNr' => 1, 'mode' => 2, 'name' => 3, 'ldVar' => 4, 'description' => 5, 'status' => 6, 'modifyId' => 7, 'modifyTime' => 8, 'createId' => 9, 'createTime' => 10, ),
        self::TYPE_COLNAME       => array(CareModeDeliveryTableMap::COL_NR => 0, CareModeDeliveryTableMap::COL_GROUP_NR => 1, CareModeDeliveryTableMap::COL_MODE => 2, CareModeDeliveryTableMap::COL_NAME => 3, CareModeDeliveryTableMap::COL_LD_VAR => 4, CareModeDeliveryTableMap::COL_DESCRIPTION => 5, CareModeDeliveryTableMap::COL_STATUS => 6, CareModeDeliveryTableMap::COL_MODIFY_ID => 7, CareModeDeliveryTableMap::COL_MODIFY_TIME => 8, CareModeDeliveryTableMap::COL_CREATE_ID => 9, CareModeDeliveryTableMap::COL_CREATE_TIME => 10, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'group_nr' => 1, 'mode' => 2, 'name' => 3, 'LD_var' => 4, 'description' => 5, 'status' => 6, 'modify_id' => 7, 'modify_time' => 8, 'create_id' => 9, 'create_time' => 10, ),
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
        $this->setName('care_mode_delivery');
        $this->setPhpName('CareModeDelivery');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareModeDelivery');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'SMALLINT', true, 5, null);
        $this->addColumn('group_nr', 'GroupNr', 'TINYINT', true, 3, 0);
        $this->addColumn('mode', 'Mode', 'VARCHAR', true, 35, '');
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
        return $withPrefix ? CareModeDeliveryTableMap::CLASS_DEFAULT : CareModeDeliveryTableMap::OM_CLASS;
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
     * @return array           (CareModeDelivery object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareModeDeliveryTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareModeDeliveryTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareModeDeliveryTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareModeDeliveryTableMap::OM_CLASS;
            /** @var CareModeDelivery $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareModeDeliveryTableMap::addInstanceToPool($obj, $key);
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
            $key = CareModeDeliveryTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareModeDeliveryTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareModeDelivery $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareModeDeliveryTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_NR);
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_GROUP_NR);
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_MODE);
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_NAME);
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_LD_VAR);
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareModeDeliveryTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.group_nr');
            $criteria->addSelectColumn($alias . '.mode');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareModeDeliveryTableMap::DATABASE_NAME)->getTable(CareModeDeliveryTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareModeDeliveryTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareModeDeliveryTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareModeDeliveryTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareModeDelivery or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareModeDelivery object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareModeDeliveryTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareModeDelivery) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareModeDeliveryTableMap::DATABASE_NAME);
            $criteria->add(CareModeDeliveryTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareModeDeliveryQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareModeDeliveryTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareModeDeliveryTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_mode_delivery table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareModeDeliveryQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareModeDelivery or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareModeDelivery object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareModeDeliveryTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareModeDelivery object
        }

        if ($criteria->containsKey(CareModeDeliveryTableMap::COL_NR) && $criteria->keyContainsValue(CareModeDeliveryTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareModeDeliveryTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareModeDeliveryQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareModeDeliveryTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareModeDeliveryTableMap::buildTableMap();
