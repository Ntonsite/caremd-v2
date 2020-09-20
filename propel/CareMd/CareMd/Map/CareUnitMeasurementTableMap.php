<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareUnitMeasurement;
use CareMd\CareMd\CareUnitMeasurementQuery;
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
 * This class defines the structure of the 'care_unit_measurement' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareUnitMeasurementTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareUnitMeasurementTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_unit_measurement';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareUnitMeasurement';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareUnitMeasurement';

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
     * the column name for the nr field
     */
    const COL_NR = 'care_unit_measurement.nr';

    /**
     * the column name for the unit_type_nr field
     */
    const COL_UNIT_TYPE_NR = 'care_unit_measurement.unit_type_nr';

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_unit_measurement.id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_unit_measurement.name';

    /**
     * the column name for the LD_var field
     */
    const COL_LD_VAR = 'care_unit_measurement.LD_var';

    /**
     * the column name for the sytem field
     */
    const COL_SYTEM = 'care_unit_measurement.sytem';

    /**
     * the column name for the use_frequency field
     */
    const COL_USE_FREQUENCY = 'care_unit_measurement.use_frequency';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_unit_measurement.status';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_unit_measurement.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_unit_measurement.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_unit_measurement.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_unit_measurement.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'UnitTypeNr', 'Id', 'Name', 'LdVar', 'Sytem', 'UseFrequency', 'Status', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'unitTypeNr', 'id', 'name', 'ldVar', 'sytem', 'useFrequency', 'status', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareUnitMeasurementTableMap::COL_NR, CareUnitMeasurementTableMap::COL_UNIT_TYPE_NR, CareUnitMeasurementTableMap::COL_ID, CareUnitMeasurementTableMap::COL_NAME, CareUnitMeasurementTableMap::COL_LD_VAR, CareUnitMeasurementTableMap::COL_SYTEM, CareUnitMeasurementTableMap::COL_USE_FREQUENCY, CareUnitMeasurementTableMap::COL_STATUS, CareUnitMeasurementTableMap::COL_MODIFY_ID, CareUnitMeasurementTableMap::COL_MODIFY_TIME, CareUnitMeasurementTableMap::COL_CREATE_ID, CareUnitMeasurementTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'unit_type_nr', 'id', 'name', 'LD_var', 'sytem', 'use_frequency', 'status', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'UnitTypeNr' => 1, 'Id' => 2, 'Name' => 3, 'LdVar' => 4, 'Sytem' => 5, 'UseFrequency' => 6, 'Status' => 7, 'ModifyId' => 8, 'ModifyTime' => 9, 'CreateId' => 10, 'CreateTime' => 11, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'unitTypeNr' => 1, 'id' => 2, 'name' => 3, 'ldVar' => 4, 'sytem' => 5, 'useFrequency' => 6, 'status' => 7, 'modifyId' => 8, 'modifyTime' => 9, 'createId' => 10, 'createTime' => 11, ),
        self::TYPE_COLNAME       => array(CareUnitMeasurementTableMap::COL_NR => 0, CareUnitMeasurementTableMap::COL_UNIT_TYPE_NR => 1, CareUnitMeasurementTableMap::COL_ID => 2, CareUnitMeasurementTableMap::COL_NAME => 3, CareUnitMeasurementTableMap::COL_LD_VAR => 4, CareUnitMeasurementTableMap::COL_SYTEM => 5, CareUnitMeasurementTableMap::COL_USE_FREQUENCY => 6, CareUnitMeasurementTableMap::COL_STATUS => 7, CareUnitMeasurementTableMap::COL_MODIFY_ID => 8, CareUnitMeasurementTableMap::COL_MODIFY_TIME => 9, CareUnitMeasurementTableMap::COL_CREATE_ID => 10, CareUnitMeasurementTableMap::COL_CREATE_TIME => 11, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'unit_type_nr' => 1, 'id' => 2, 'name' => 3, 'LD_var' => 4, 'sytem' => 5, 'use_frequency' => 6, 'status' => 7, 'modify_id' => 8, 'modify_time' => 9, 'create_id' => 10, 'create_time' => 11, ),
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
        $this->setName('care_unit_measurement');
        $this->setPhpName('CareUnitMeasurement');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareUnitMeasurement');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'SMALLINT', true, 5, null);
        $this->addColumn('unit_type_nr', 'UnitTypeNr', 'SMALLINT', true, 2, 0);
        $this->addColumn('id', 'Id', 'VARCHAR', true, 15, '');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 35, '');
        $this->addColumn('LD_var', 'LdVar', 'VARCHAR', true, 35, '');
        $this->addColumn('sytem', 'Sytem', 'VARCHAR', true, 35, '');
        $this->addColumn('use_frequency', 'UseFrequency', 'BIGINT', false, null, null);
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
        return $withPrefix ? CareUnitMeasurementTableMap::CLASS_DEFAULT : CareUnitMeasurementTableMap::OM_CLASS;
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
     * @return array           (CareUnitMeasurement object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareUnitMeasurementTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareUnitMeasurementTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareUnitMeasurementTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareUnitMeasurementTableMap::OM_CLASS;
            /** @var CareUnitMeasurement $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareUnitMeasurementTableMap::addInstanceToPool($obj, $key);
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
            $key = CareUnitMeasurementTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareUnitMeasurementTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareUnitMeasurement $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareUnitMeasurementTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_NR);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_UNIT_TYPE_NR);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_ID);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_NAME);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_LD_VAR);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_SYTEM);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_USE_FREQUENCY);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareUnitMeasurementTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.unit_type_nr');
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.LD_var');
            $criteria->addSelectColumn($alias . '.sytem');
            $criteria->addSelectColumn($alias . '.use_frequency');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareUnitMeasurementTableMap::DATABASE_NAME)->getTable(CareUnitMeasurementTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareUnitMeasurementTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareUnitMeasurementTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareUnitMeasurementTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareUnitMeasurement or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareUnitMeasurement object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareUnitMeasurementTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareUnitMeasurement) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareUnitMeasurementTableMap::DATABASE_NAME);
            $criteria->add(CareUnitMeasurementTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareUnitMeasurementQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareUnitMeasurementTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareUnitMeasurementTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_unit_measurement table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareUnitMeasurementQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareUnitMeasurement or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareUnitMeasurement object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareUnitMeasurementTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareUnitMeasurement object
        }

        if ($criteria->containsKey(CareUnitMeasurementTableMap::COL_NR) && $criteria->keyContainsValue(CareUnitMeasurementTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareUnitMeasurementTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareUnitMeasurementQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareUnitMeasurementTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareUnitMeasurementTableMap::buildTableMap();
