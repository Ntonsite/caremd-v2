<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestRequestLaboratoryTasks;
use CareMd\CareMd\CareTestRequestLaboratoryTasksQuery;
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
 * This class defines the structure of the 'care_test_request_laboratory_tasks' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestRequestLaboratoryTasksTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestRequestLaboratoryTasksTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_request_laboratory_tasks';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestRequestLaboratoryTasks';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestRequestLaboratoryTasks';

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
     * the column name for the task_nr field
     */
    const COL_TASK_NR = 'care_test_request_laboratory_tasks.task_nr';

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_request_laboratory_tasks.batch_nr';

    /**
     * the column name for the test_nr field
     */
    const COL_TEST_NR = 'care_test_request_laboratory_tasks.test_nr';

    /**
     * the column name for the bill_number field
     */
    const COL_BILL_NUMBER = 'care_test_request_laboratory_tasks.bill_number';

    /**
     * the column name for the bill_status field
     */
    const COL_BILL_STATUS = 'care_test_request_laboratory_tasks.bill_status';

    /**
     * the column name for the send_date field
     */
    const COL_SEND_DATE = 'care_test_request_laboratory_tasks.send_date';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_request_laboratory_tasks.status';

    /**
     * the column name for the is_disabled field
     */
    const COL_IS_DISABLED = 'care_test_request_laboratory_tasks.is_disabled';

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
        self::TYPE_PHPNAME       => array('TaskNr', 'BatchNr', 'TestNr', 'BillNumber', 'BillStatus', 'SendDate', 'Status', 'IsDisabled', ),
        self::TYPE_CAMELNAME     => array('taskNr', 'batchNr', 'testNr', 'billNumber', 'billStatus', 'sendDate', 'status', 'isDisabled', ),
        self::TYPE_COLNAME       => array(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR, CareTestRequestLaboratoryTasksTableMap::COL_BATCH_NR, CareTestRequestLaboratoryTasksTableMap::COL_TEST_NR, CareTestRequestLaboratoryTasksTableMap::COL_BILL_NUMBER, CareTestRequestLaboratoryTasksTableMap::COL_BILL_STATUS, CareTestRequestLaboratoryTasksTableMap::COL_SEND_DATE, CareTestRequestLaboratoryTasksTableMap::COL_STATUS, CareTestRequestLaboratoryTasksTableMap::COL_IS_DISABLED, ),
        self::TYPE_FIELDNAME     => array('task_nr', 'batch_nr', 'test_nr', 'bill_number', 'bill_status', 'send_date', 'status', 'is_disabled', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('TaskNr' => 0, 'BatchNr' => 1, 'TestNr' => 2, 'BillNumber' => 3, 'BillStatus' => 4, 'SendDate' => 5, 'Status' => 6, 'IsDisabled' => 7, ),
        self::TYPE_CAMELNAME     => array('taskNr' => 0, 'batchNr' => 1, 'testNr' => 2, 'billNumber' => 3, 'billStatus' => 4, 'sendDate' => 5, 'status' => 6, 'isDisabled' => 7, ),
        self::TYPE_COLNAME       => array(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR => 0, CareTestRequestLaboratoryTasksTableMap::COL_BATCH_NR => 1, CareTestRequestLaboratoryTasksTableMap::COL_TEST_NR => 2, CareTestRequestLaboratoryTasksTableMap::COL_BILL_NUMBER => 3, CareTestRequestLaboratoryTasksTableMap::COL_BILL_STATUS => 4, CareTestRequestLaboratoryTasksTableMap::COL_SEND_DATE => 5, CareTestRequestLaboratoryTasksTableMap::COL_STATUS => 6, CareTestRequestLaboratoryTasksTableMap::COL_IS_DISABLED => 7, ),
        self::TYPE_FIELDNAME     => array('task_nr' => 0, 'batch_nr' => 1, 'test_nr' => 2, 'bill_number' => 3, 'bill_status' => 4, 'send_date' => 5, 'status' => 6, 'is_disabled' => 7, ),
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
        $this->setName('care_test_request_laboratory_tasks');
        $this->setPhpName('CareTestRequestLaboratoryTasks');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestRequestLaboratoryTasks');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('task_nr', 'TaskNr', 'INTEGER', true, null, null);
        $this->addColumn('batch_nr', 'BatchNr', 'INTEGER', true, null, null);
        $this->addColumn('test_nr', 'TestNr', 'INTEGER', true, null, null);
        $this->addColumn('bill_number', 'BillNumber', 'BIGINT', true, null, 0);
        $this->addColumn('bill_status', 'BillStatus', 'VARCHAR', true, 10, '');
        $this->addColumn('send_date', 'SendDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 15, '');
        $this->addColumn('is_disabled', 'IsDisabled', 'TINYINT', false, null, 0);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTestRequestLaboratoryTasksTableMap::CLASS_DEFAULT : CareTestRequestLaboratoryTasksTableMap::OM_CLASS;
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
     * @return array           (CareTestRequestLaboratoryTasks object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestRequestLaboratoryTasksTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestRequestLaboratoryTasksTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestRequestLaboratoryTasksTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestRequestLaboratoryTasksTableMap::OM_CLASS;
            /** @var CareTestRequestLaboratoryTasks $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestRequestLaboratoryTasksTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestRequestLaboratoryTasksTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestRequestLaboratoryTasksTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestRequestLaboratoryTasks $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestRequestLaboratoryTasksTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTasksTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTasksTableMap::COL_TEST_NR);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTasksTableMap::COL_BILL_NUMBER);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTasksTableMap::COL_BILL_STATUS);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTasksTableMap::COL_SEND_DATE);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTasksTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestRequestLaboratoryTasksTableMap::COL_IS_DISABLED);
        } else {
            $criteria->addSelectColumn($alias . '.task_nr');
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.test_nr');
            $criteria->addSelectColumn($alias . '.bill_number');
            $criteria->addSelectColumn($alias . '.bill_status');
            $criteria->addSelectColumn($alias . '.send_date');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.is_disabled');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestRequestLaboratoryTasksTableMap::DATABASE_NAME)->getTable(CareTestRequestLaboratoryTasksTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestRequestLaboratoryTasksTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestRequestLaboratoryTasksTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestRequestLaboratoryTasksTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestRequestLaboratoryTasks or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestRequestLaboratoryTasks object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestLaboratoryTasksTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestRequestLaboratoryTasks) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestRequestLaboratoryTasksTableMap::DATABASE_NAME);
            $criteria->add(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR, (array) $values, Criteria::IN);
        }

        $query = CareTestRequestLaboratoryTasksQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestRequestLaboratoryTasksTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestRequestLaboratoryTasksTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_request_laboratory_tasks table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestRequestLaboratoryTasksQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestRequestLaboratoryTasks or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestRequestLaboratoryTasks object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestLaboratoryTasksTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestRequestLaboratoryTasks object
        }

        if ($criteria->containsKey(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR) && $criteria->keyContainsValue(CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestRequestLaboratoryTasksTableMap::COL_TASK_NR.')');
        }


        // Set the correct dbName
        $query = CareTestRequestLaboratoryTasksQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestRequestLaboratoryTasksTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestRequestLaboratoryTasksTableMap::buildTableMap();
