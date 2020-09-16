<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareDutyplanOncall;
use CareMd\CareMd\CareDutyplanOncallQuery;
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
 * This class defines the structure of the 'care_dutyplan_oncall' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareDutyplanOncallTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareDutyplanOncallTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_dutyplan_oncall';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareDutyplanOncall';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareDutyplanOncall';

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
     * the column name for the nr field
     */
    const COL_NR = 'care_dutyplan_oncall.nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_dutyplan_oncall.dept_nr';

    /**
     * the column name for the role_nr field
     */
    const COL_ROLE_NR = 'care_dutyplan_oncall.role_nr';

    /**
     * the column name for the year field
     */
    const COL_YEAR = 'care_dutyplan_oncall.year';

    /**
     * the column name for the month field
     */
    const COL_MONTH = 'care_dutyplan_oncall.month';

    /**
     * the column name for the duty_1_txt field
     */
    const COL_DUTY_1_TXT = 'care_dutyplan_oncall.duty_1_txt';

    /**
     * the column name for the duty_2_txt field
     */
    const COL_DUTY_2_TXT = 'care_dutyplan_oncall.duty_2_txt';

    /**
     * the column name for the duty_1_pnr field
     */
    const COL_DUTY_1_PNR = 'care_dutyplan_oncall.duty_1_pnr';

    /**
     * the column name for the duty_2_pnr field
     */
    const COL_DUTY_2_PNR = 'care_dutyplan_oncall.duty_2_pnr';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_dutyplan_oncall.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_dutyplan_oncall.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_dutyplan_oncall.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_dutyplan_oncall.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_dutyplan_oncall.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_dutyplan_oncall.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'DeptNr', 'RoleNr', 'Year', 'Month', 'Duty1Txt', 'Duty2Txt', 'Duty1Pnr', 'Duty2Pnr', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'deptNr', 'roleNr', 'year', 'month', 'duty1Txt', 'duty2Txt', 'duty1Pnr', 'duty2Pnr', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareDutyplanOncallTableMap::COL_NR, CareDutyplanOncallTableMap::COL_DEPT_NR, CareDutyplanOncallTableMap::COL_ROLE_NR, CareDutyplanOncallTableMap::COL_YEAR, CareDutyplanOncallTableMap::COL_MONTH, CareDutyplanOncallTableMap::COL_DUTY_1_TXT, CareDutyplanOncallTableMap::COL_DUTY_2_TXT, CareDutyplanOncallTableMap::COL_DUTY_1_PNR, CareDutyplanOncallTableMap::COL_DUTY_2_PNR, CareDutyplanOncallTableMap::COL_STATUS, CareDutyplanOncallTableMap::COL_HISTORY, CareDutyplanOncallTableMap::COL_MODIFY_ID, CareDutyplanOncallTableMap::COL_MODIFY_TIME, CareDutyplanOncallTableMap::COL_CREATE_ID, CareDutyplanOncallTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'dept_nr', 'role_nr', 'year', 'month', 'duty_1_txt', 'duty_2_txt', 'duty_1_pnr', 'duty_2_pnr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'DeptNr' => 1, 'RoleNr' => 2, 'Year' => 3, 'Month' => 4, 'Duty1Txt' => 5, 'Duty2Txt' => 6, 'Duty1Pnr' => 7, 'Duty2Pnr' => 8, 'Status' => 9, 'History' => 10, 'ModifyId' => 11, 'ModifyTime' => 12, 'CreateId' => 13, 'CreateTime' => 14, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'deptNr' => 1, 'roleNr' => 2, 'year' => 3, 'month' => 4, 'duty1Txt' => 5, 'duty2Txt' => 6, 'duty1Pnr' => 7, 'duty2Pnr' => 8, 'status' => 9, 'history' => 10, 'modifyId' => 11, 'modifyTime' => 12, 'createId' => 13, 'createTime' => 14, ),
        self::TYPE_COLNAME       => array(CareDutyplanOncallTableMap::COL_NR => 0, CareDutyplanOncallTableMap::COL_DEPT_NR => 1, CareDutyplanOncallTableMap::COL_ROLE_NR => 2, CareDutyplanOncallTableMap::COL_YEAR => 3, CareDutyplanOncallTableMap::COL_MONTH => 4, CareDutyplanOncallTableMap::COL_DUTY_1_TXT => 5, CareDutyplanOncallTableMap::COL_DUTY_2_TXT => 6, CareDutyplanOncallTableMap::COL_DUTY_1_PNR => 7, CareDutyplanOncallTableMap::COL_DUTY_2_PNR => 8, CareDutyplanOncallTableMap::COL_STATUS => 9, CareDutyplanOncallTableMap::COL_HISTORY => 10, CareDutyplanOncallTableMap::COL_MODIFY_ID => 11, CareDutyplanOncallTableMap::COL_MODIFY_TIME => 12, CareDutyplanOncallTableMap::COL_CREATE_ID => 13, CareDutyplanOncallTableMap::COL_CREATE_TIME => 14, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'dept_nr' => 1, 'role_nr' => 2, 'year' => 3, 'month' => 4, 'duty_1_txt' => 5, 'duty_2_txt' => 6, 'duty_1_pnr' => 7, 'duty_2_pnr' => 8, 'status' => 9, 'history' => 10, 'modify_id' => 11, 'modify_time' => 12, 'create_id' => 13, 'create_time' => 14, ),
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
        $this->setName('care_dutyplan_oncall');
        $this->setPhpName('CareDutyplanOncall');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareDutyplanOncall');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'BIGINT', true, null, null);
        $this->addColumn('dept_nr', 'DeptNr', 'INTEGER', true, 10, 0);
        $this->addColumn('role_nr', 'RoleNr', 'TINYINT', true, 3, 0);
        $this->addColumn('year', 'Year', 'INTEGER', true, 4, 0);
        $this->addColumn('month', 'Month', 'CHAR', true, 2, '');
        $this->addColumn('duty_1_txt', 'Duty1Txt', 'LONGVARCHAR', true, null, null);
        $this->addColumn('duty_2_txt', 'Duty2Txt', 'LONGVARCHAR', true, null, null);
        $this->addColumn('duty_1_pnr', 'Duty1Pnr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('duty_2_pnr', 'Duty2Pnr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
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
        return (string) $row[
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
        return $withPrefix ? CareDutyplanOncallTableMap::CLASS_DEFAULT : CareDutyplanOncallTableMap::OM_CLASS;
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
     * @return array           (CareDutyplanOncall object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareDutyplanOncallTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareDutyplanOncallTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareDutyplanOncallTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareDutyplanOncallTableMap::OM_CLASS;
            /** @var CareDutyplanOncall $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareDutyplanOncallTableMap::addInstanceToPool($obj, $key);
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
            $key = CareDutyplanOncallTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareDutyplanOncallTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareDutyplanOncall $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareDutyplanOncallTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_NR);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_ROLE_NR);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_YEAR);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_MONTH);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_DUTY_1_TXT);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_DUTY_2_TXT);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_DUTY_1_PNR);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_DUTY_2_PNR);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareDutyplanOncallTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.role_nr');
            $criteria->addSelectColumn($alias . '.year');
            $criteria->addSelectColumn($alias . '.month');
            $criteria->addSelectColumn($alias . '.duty_1_txt');
            $criteria->addSelectColumn($alias . '.duty_2_txt');
            $criteria->addSelectColumn($alias . '.duty_1_pnr');
            $criteria->addSelectColumn($alias . '.duty_2_pnr');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareDutyplanOncallTableMap::DATABASE_NAME)->getTable(CareDutyplanOncallTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareDutyplanOncallTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareDutyplanOncallTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareDutyplanOncallTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareDutyplanOncall or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareDutyplanOncall object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDutyplanOncallTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareDutyplanOncall) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareDutyplanOncallTableMap::DATABASE_NAME);
            $criteria->add(CareDutyplanOncallTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareDutyplanOncallQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareDutyplanOncallTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareDutyplanOncallTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_dutyplan_oncall table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareDutyplanOncallQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareDutyplanOncall or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareDutyplanOncall object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDutyplanOncallTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareDutyplanOncall object
        }

        if ($criteria->containsKey(CareDutyplanOncallTableMap::COL_NR) && $criteria->keyContainsValue(CareDutyplanOncallTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareDutyplanOncallTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareDutyplanOncallQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareDutyplanOncallTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareDutyplanOncallTableMap::buildTableMap();
