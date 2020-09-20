<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestRequestBaclabor;
use CareMd\CareMd\CareTestRequestBaclaborQuery;
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
 * This class defines the structure of the 'care_test_request_baclabor' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestRequestBaclaborTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestRequestBaclaborTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_request_baclabor';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestRequestBaclabor';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestRequestBaclabor';

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
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_request_baclabor.batch_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_request_baclabor.encounter_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_test_request_baclabor.dept_nr';

    /**
     * the column name for the material field
     */
    const COL_MATERIAL = 'care_test_request_baclabor.material';

    /**
     * the column name for the test_type field
     */
    const COL_TEST_TYPE = 'care_test_request_baclabor.test_type';

    /**
     * the column name for the material_note field
     */
    const COL_MATERIAL_NOTE = 'care_test_request_baclabor.material_note';

    /**
     * the column name for the diagnosis_note field
     */
    const COL_DIAGNOSIS_NOTE = 'care_test_request_baclabor.diagnosis_note';

    /**
     * the column name for the immune_supp field
     */
    const COL_IMMUNE_SUPP = 'care_test_request_baclabor.immune_supp';

    /**
     * the column name for the send_date field
     */
    const COL_SEND_DATE = 'care_test_request_baclabor.send_date';

    /**
     * the column name for the sample_date field
     */
    const COL_SAMPLE_DATE = 'care_test_request_baclabor.sample_date';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_request_baclabor.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_request_baclabor.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_request_baclabor.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_request_baclabor.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_request_baclabor.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_request_baclabor.create_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'EncounterNr', 'DeptNr', 'Material', 'TestType', 'MaterialNote', 'DiagnosisNote', 'ImmuneSupp', 'SendDate', 'SampleDate', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'encounterNr', 'deptNr', 'material', 'testType', 'materialNote', 'diagnosisNote', 'immuneSupp', 'sendDate', 'sampleDate', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTestRequestBaclaborTableMap::COL_BATCH_NR, CareTestRequestBaclaborTableMap::COL_ENCOUNTER_NR, CareTestRequestBaclaborTableMap::COL_DEPT_NR, CareTestRequestBaclaborTableMap::COL_MATERIAL, CareTestRequestBaclaborTableMap::COL_TEST_TYPE, CareTestRequestBaclaborTableMap::COL_MATERIAL_NOTE, CareTestRequestBaclaborTableMap::COL_DIAGNOSIS_NOTE, CareTestRequestBaclaborTableMap::COL_IMMUNE_SUPP, CareTestRequestBaclaborTableMap::COL_SEND_DATE, CareTestRequestBaclaborTableMap::COL_SAMPLE_DATE, CareTestRequestBaclaborTableMap::COL_STATUS, CareTestRequestBaclaborTableMap::COL_HISTORY, CareTestRequestBaclaborTableMap::COL_MODIFY_ID, CareTestRequestBaclaborTableMap::COL_MODIFY_TIME, CareTestRequestBaclaborTableMap::COL_CREATE_ID, CareTestRequestBaclaborTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'encounter_nr', 'dept_nr', 'material', 'test_type', 'material_note', 'diagnosis_note', 'immune_supp', 'send_date', 'sample_date', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'EncounterNr' => 1, 'DeptNr' => 2, 'Material' => 3, 'TestType' => 4, 'MaterialNote' => 5, 'DiagnosisNote' => 6, 'ImmuneSupp' => 7, 'SendDate' => 8, 'SampleDate' => 9, 'Status' => 10, 'History' => 11, 'ModifyId' => 12, 'ModifyTime' => 13, 'CreateId' => 14, 'CreateTime' => 15, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'encounterNr' => 1, 'deptNr' => 2, 'material' => 3, 'testType' => 4, 'materialNote' => 5, 'diagnosisNote' => 6, 'immuneSupp' => 7, 'sendDate' => 8, 'sampleDate' => 9, 'status' => 10, 'history' => 11, 'modifyId' => 12, 'modifyTime' => 13, 'createId' => 14, 'createTime' => 15, ),
        self::TYPE_COLNAME       => array(CareTestRequestBaclaborTableMap::COL_BATCH_NR => 0, CareTestRequestBaclaborTableMap::COL_ENCOUNTER_NR => 1, CareTestRequestBaclaborTableMap::COL_DEPT_NR => 2, CareTestRequestBaclaborTableMap::COL_MATERIAL => 3, CareTestRequestBaclaborTableMap::COL_TEST_TYPE => 4, CareTestRequestBaclaborTableMap::COL_MATERIAL_NOTE => 5, CareTestRequestBaclaborTableMap::COL_DIAGNOSIS_NOTE => 6, CareTestRequestBaclaborTableMap::COL_IMMUNE_SUPP => 7, CareTestRequestBaclaborTableMap::COL_SEND_DATE => 8, CareTestRequestBaclaborTableMap::COL_SAMPLE_DATE => 9, CareTestRequestBaclaborTableMap::COL_STATUS => 10, CareTestRequestBaclaborTableMap::COL_HISTORY => 11, CareTestRequestBaclaborTableMap::COL_MODIFY_ID => 12, CareTestRequestBaclaborTableMap::COL_MODIFY_TIME => 13, CareTestRequestBaclaborTableMap::COL_CREATE_ID => 14, CareTestRequestBaclaborTableMap::COL_CREATE_TIME => 15, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'encounter_nr' => 1, 'dept_nr' => 2, 'material' => 3, 'test_type' => 4, 'material_note' => 5, 'diagnosis_note' => 6, 'immune_supp' => 7, 'send_date' => 8, 'sample_date' => 9, 'status' => 10, 'history' => 11, 'modify_id' => 12, 'modify_time' => 13, 'create_id' => 14, 'create_time' => 15, ),
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
        $this->setName('care_test_request_baclabor');
        $this->setPhpName('CareTestRequestBaclabor');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestRequestBaclabor');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('material', 'Material', 'LONGVARCHAR', true, null, null);
        $this->addColumn('test_type', 'TestType', 'LONGVARCHAR', true, null, null);
        $this->addColumn('material_note', 'MaterialNote', 'VARCHAR', true, 255, null);
        $this->addColumn('diagnosis_note', 'DiagnosisNote', 'VARCHAR', true, 255, null);
        $this->addColumn('immune_supp', 'ImmuneSupp', 'TINYINT', true, null, 0);
        $this->addColumn('send_date', 'SendDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('sample_date', 'SampleDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 10, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTestRequestBaclaborTableMap::CLASS_DEFAULT : CareTestRequestBaclaborTableMap::OM_CLASS;
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
     * @return array           (CareTestRequestBaclabor object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestRequestBaclaborTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestRequestBaclaborTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestRequestBaclaborTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestRequestBaclaborTableMap::OM_CLASS;
            /** @var CareTestRequestBaclabor $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestRequestBaclaborTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestRequestBaclaborTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestRequestBaclaborTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestRequestBaclabor $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestRequestBaclaborTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_MATERIAL);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_TEST_TYPE);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_MATERIAL_NOTE);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_DIAGNOSIS_NOTE);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_IMMUNE_SUPP);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_SEND_DATE);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_SAMPLE_DATE);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestRequestBaclaborTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.material');
            $criteria->addSelectColumn($alias . '.test_type');
            $criteria->addSelectColumn($alias . '.material_note');
            $criteria->addSelectColumn($alias . '.diagnosis_note');
            $criteria->addSelectColumn($alias . '.immune_supp');
            $criteria->addSelectColumn($alias . '.send_date');
            $criteria->addSelectColumn($alias . '.sample_date');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestRequestBaclaborTableMap::DATABASE_NAME)->getTable(CareTestRequestBaclaborTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestRequestBaclaborTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestRequestBaclaborTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestRequestBaclaborTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestRequestBaclabor or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestRequestBaclabor object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestBaclaborTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestRequestBaclabor) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestRequestBaclaborTableMap::DATABASE_NAME);
            $criteria->add(CareTestRequestBaclaborTableMap::COL_BATCH_NR, (array) $values, Criteria::IN);
        }

        $query = CareTestRequestBaclaborQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestRequestBaclaborTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestRequestBaclaborTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_request_baclabor table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestRequestBaclaborQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestRequestBaclabor or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestRequestBaclabor object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestBaclaborTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestRequestBaclabor object
        }

        if ($criteria->containsKey(CareTestRequestBaclaborTableMap::COL_BATCH_NR) && $criteria->keyContainsValue(CareTestRequestBaclaborTableMap::COL_BATCH_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestRequestBaclaborTableMap::COL_BATCH_NR.')');
        }


        // Set the correct dbName
        $query = CareTestRequestBaclaborQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestRequestBaclaborTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestRequestBaclaborTableMap::buildTableMap();
