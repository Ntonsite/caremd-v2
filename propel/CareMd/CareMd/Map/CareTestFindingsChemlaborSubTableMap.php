<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestFindingsChemlaborSub;
use CareMd\CareMd\CareTestFindingsChemlaborSubQuery;
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
 * This class defines the structure of the 'care_test_findings_chemlabor_sub' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestFindingsChemlaborSubTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestFindingsChemlaborSubTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_findings_chemlabor_sub';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestFindingsChemlaborSub';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestFindingsChemlaborSub';

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
     * the column name for the sub_id field
     */
    const COL_SUB_ID = 'care_test_findings_chemlabor_sub.sub_id';

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_findings_chemlabor_sub.batch_nr';

    /**
     * the column name for the job_id field
     */
    const COL_JOB_ID = 'care_test_findings_chemlabor_sub.job_id';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_findings_chemlabor_sub.encounter_nr';

    /**
     * the column name for the paramater_name field
     */
    const COL_PARAMATER_NAME = 'care_test_findings_chemlabor_sub.paramater_name';

    /**
     * the column name for the parameter_value field
     */
    const COL_PARAMETER_VALUE = 'care_test_findings_chemlabor_sub.parameter_value';

    /**
     * the column name for the is_updated field
     */
    const COL_IS_UPDATED = 'care_test_findings_chemlabor_sub.is_updated';

    /**
     * the column name for the old_param_value field
     */
    const COL_OLD_PARAM_VALUE = 'care_test_findings_chemlabor_sub.old_param_value';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_findings_chemlabor_sub.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_findings_chemlabor_sub.history';

    /**
     * the column name for the test_date field
     */
    const COL_TEST_DATE = 'care_test_findings_chemlabor_sub.test_date';

    /**
     * the column name for the test_time field
     */
    const COL_TEST_TIME = 'care_test_findings_chemlabor_sub.test_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_findings_chemlabor_sub.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_findings_chemlabor_sub.create_time';

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
        self::TYPE_PHPNAME       => array('SubId', 'BatchNr', 'JobId', 'EncounterNr', 'ParamaterName', 'ParameterValue', 'IsUpdated', 'OldParamValue', 'Status', 'History', 'TestDate', 'TestTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('subId', 'batchNr', 'jobId', 'encounterNr', 'paramaterName', 'parameterValue', 'isUpdated', 'oldParamValue', 'status', 'history', 'testDate', 'testTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID, CareTestFindingsChemlaborSubTableMap::COL_BATCH_NR, CareTestFindingsChemlaborSubTableMap::COL_JOB_ID, CareTestFindingsChemlaborSubTableMap::COL_ENCOUNTER_NR, CareTestFindingsChemlaborSubTableMap::COL_PARAMATER_NAME, CareTestFindingsChemlaborSubTableMap::COL_PARAMETER_VALUE, CareTestFindingsChemlaborSubTableMap::COL_IS_UPDATED, CareTestFindingsChemlaborSubTableMap::COL_OLD_PARAM_VALUE, CareTestFindingsChemlaborSubTableMap::COL_STATUS, CareTestFindingsChemlaborSubTableMap::COL_HISTORY, CareTestFindingsChemlaborSubTableMap::COL_TEST_DATE, CareTestFindingsChemlaborSubTableMap::COL_TEST_TIME, CareTestFindingsChemlaborSubTableMap::COL_CREATE_ID, CareTestFindingsChemlaborSubTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('sub_id', 'batch_nr', 'job_id', 'encounter_nr', 'paramater_name', 'parameter_value', 'is_updated', 'old_param_value', 'status', 'history', 'test_date', 'test_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('SubId' => 0, 'BatchNr' => 1, 'JobId' => 2, 'EncounterNr' => 3, 'ParamaterName' => 4, 'ParameterValue' => 5, 'IsUpdated' => 6, 'OldParamValue' => 7, 'Status' => 8, 'History' => 9, 'TestDate' => 10, 'TestTime' => 11, 'CreateId' => 12, 'CreateTime' => 13, ),
        self::TYPE_CAMELNAME     => array('subId' => 0, 'batchNr' => 1, 'jobId' => 2, 'encounterNr' => 3, 'paramaterName' => 4, 'parameterValue' => 5, 'isUpdated' => 6, 'oldParamValue' => 7, 'status' => 8, 'history' => 9, 'testDate' => 10, 'testTime' => 11, 'createId' => 12, 'createTime' => 13, ),
        self::TYPE_COLNAME       => array(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID => 0, CareTestFindingsChemlaborSubTableMap::COL_BATCH_NR => 1, CareTestFindingsChemlaborSubTableMap::COL_JOB_ID => 2, CareTestFindingsChemlaborSubTableMap::COL_ENCOUNTER_NR => 3, CareTestFindingsChemlaborSubTableMap::COL_PARAMATER_NAME => 4, CareTestFindingsChemlaborSubTableMap::COL_PARAMETER_VALUE => 5, CareTestFindingsChemlaborSubTableMap::COL_IS_UPDATED => 6, CareTestFindingsChemlaborSubTableMap::COL_OLD_PARAM_VALUE => 7, CareTestFindingsChemlaborSubTableMap::COL_STATUS => 8, CareTestFindingsChemlaborSubTableMap::COL_HISTORY => 9, CareTestFindingsChemlaborSubTableMap::COL_TEST_DATE => 10, CareTestFindingsChemlaborSubTableMap::COL_TEST_TIME => 11, CareTestFindingsChemlaborSubTableMap::COL_CREATE_ID => 12, CareTestFindingsChemlaborSubTableMap::COL_CREATE_TIME => 13, ),
        self::TYPE_FIELDNAME     => array('sub_id' => 0, 'batch_nr' => 1, 'job_id' => 2, 'encounter_nr' => 3, 'paramater_name' => 4, 'parameter_value' => 5, 'is_updated' => 6, 'old_param_value' => 7, 'status' => 8, 'history' => 9, 'test_date' => 10, 'test_time' => 11, 'create_id' => 12, 'create_time' => 13, ),
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
        $this->setName('care_test_findings_chemlabor_sub');
        $this->setPhpName('CareTestFindingsChemlaborSub');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestFindingsChemlaborSub');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('sub_id', 'SubId', 'INTEGER', true, 40, null);
        $this->addColumn('batch_nr', 'BatchNr', 'INTEGER', true, null, 0);
        $this->addColumn('job_id', 'JobId', 'VARCHAR', true, 25, '0');
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('paramater_name', 'ParamaterName', 'VARCHAR', false, 255, '0');
        $this->addColumn('parameter_value', 'ParameterValue', 'VARCHAR', false, 255, '0');
        $this->addColumn('is_updated', 'IsUpdated', 'BOOLEAN', true, 1, false);
        $this->addColumn('old_param_value', 'OldParamValue', 'VARCHAR', false, 255, null);
        $this->addColumn('status', 'Status', 'VARCHAR', false, 255, null);
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
        $this->addColumn('test_date', 'TestDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('test_time', 'TestTime', 'TIME', false, null, null);
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', false, 35, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTestFindingsChemlaborSubTableMap::CLASS_DEFAULT : CareTestFindingsChemlaborSubTableMap::OM_CLASS;
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
     * @return array           (CareTestFindingsChemlaborSub object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestFindingsChemlaborSubTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestFindingsChemlaborSubTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestFindingsChemlaborSubTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestFindingsChemlaborSubTableMap::OM_CLASS;
            /** @var CareTestFindingsChemlaborSub $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestFindingsChemlaborSubTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestFindingsChemlaborSubTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestFindingsChemlaborSubTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestFindingsChemlaborSub $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestFindingsChemlaborSubTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_JOB_ID);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_PARAMATER_NAME);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_PARAMETER_VALUE);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_IS_UPDATED);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_OLD_PARAM_VALUE);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_TEST_DATE);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_TEST_TIME);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestFindingsChemlaborSubTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.sub_id');
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.job_id');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.paramater_name');
            $criteria->addSelectColumn($alias . '.parameter_value');
            $criteria->addSelectColumn($alias . '.is_updated');
            $criteria->addSelectColumn($alias . '.old_param_value');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.test_date');
            $criteria->addSelectColumn($alias . '.test_time');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestFindingsChemlaborSubTableMap::DATABASE_NAME)->getTable(CareTestFindingsChemlaborSubTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestFindingsChemlaborSubTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestFindingsChemlaborSubTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestFindingsChemlaborSubTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestFindingsChemlaborSub or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestFindingsChemlaborSub object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsChemlaborSubTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestFindingsChemlaborSub) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestFindingsChemlaborSubTableMap::DATABASE_NAME);
            $criteria->add(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID, (array) $values, Criteria::IN);
        }

        $query = CareTestFindingsChemlaborSubQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestFindingsChemlaborSubTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestFindingsChemlaborSubTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_findings_chemlabor_sub table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestFindingsChemlaborSubQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestFindingsChemlaborSub or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestFindingsChemlaborSub object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsChemlaborSubTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestFindingsChemlaborSub object
        }

        if ($criteria->containsKey(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID) && $criteria->keyContainsValue(CareTestFindingsChemlaborSubTableMap::COL_SUB_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestFindingsChemlaborSubTableMap::COL_SUB_ID.')');
        }


        // Set the correct dbName
        $query = CareTestFindingsChemlaborSubQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestFindingsChemlaborSubTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestFindingsChemlaborSubTableMap::buildTableMap();
