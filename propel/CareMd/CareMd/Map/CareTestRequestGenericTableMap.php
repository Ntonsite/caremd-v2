<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestRequestGeneric;
use CareMd\CareMd\CareTestRequestGenericQuery;
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
 * This class defines the structure of the 'care_test_request_generic' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestRequestGenericTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestRequestGenericTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_request_generic';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestRequestGeneric';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestRequestGeneric';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_request_generic.batch_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_request_generic.encounter_nr';

    /**
     * the column name for the testing_dept field
     */
    const COL_TESTING_DEPT = 'care_test_request_generic.testing_dept';

    /**
     * the column name for the visit field
     */
    const COL_VISIT = 'care_test_request_generic.visit';

    /**
     * the column name for the order_patient field
     */
    const COL_ORDER_PATIENT = 'care_test_request_generic.order_patient';

    /**
     * the column name for the diagnosis_quiry field
     */
    const COL_DIAGNOSIS_QUIRY = 'care_test_request_generic.diagnosis_quiry';

    /**
     * the column name for the send_date field
     */
    const COL_SEND_DATE = 'care_test_request_generic.send_date';

    /**
     * the column name for the send_doctor field
     */
    const COL_SEND_DOCTOR = 'care_test_request_generic.send_doctor';

    /**
     * the column name for the result field
     */
    const COL_RESULT = 'care_test_request_generic.result';

    /**
     * the column name for the result_date field
     */
    const COL_RESULT_DATE = 'care_test_request_generic.result_date';

    /**
     * the column name for the result_doctor field
     */
    const COL_RESULT_DOCTOR = 'care_test_request_generic.result_doctor';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_request_generic.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_request_generic.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_request_generic.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_request_generic.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_request_generic.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_request_generic.create_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'EncounterNr', 'TestingDept', 'Visit', 'OrderPatient', 'DiagnosisQuiry', 'SendDate', 'SendDoctor', 'Result', 'ResultDate', 'ResultDoctor', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'encounterNr', 'testingDept', 'visit', 'orderPatient', 'diagnosisQuiry', 'sendDate', 'sendDoctor', 'result', 'resultDate', 'resultDoctor', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTestRequestGenericTableMap::COL_BATCH_NR, CareTestRequestGenericTableMap::COL_ENCOUNTER_NR, CareTestRequestGenericTableMap::COL_TESTING_DEPT, CareTestRequestGenericTableMap::COL_VISIT, CareTestRequestGenericTableMap::COL_ORDER_PATIENT, CareTestRequestGenericTableMap::COL_DIAGNOSIS_QUIRY, CareTestRequestGenericTableMap::COL_SEND_DATE, CareTestRequestGenericTableMap::COL_SEND_DOCTOR, CareTestRequestGenericTableMap::COL_RESULT, CareTestRequestGenericTableMap::COL_RESULT_DATE, CareTestRequestGenericTableMap::COL_RESULT_DOCTOR, CareTestRequestGenericTableMap::COL_STATUS, CareTestRequestGenericTableMap::COL_HISTORY, CareTestRequestGenericTableMap::COL_MODIFY_ID, CareTestRequestGenericTableMap::COL_MODIFY_TIME, CareTestRequestGenericTableMap::COL_CREATE_ID, CareTestRequestGenericTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'encounter_nr', 'testing_dept', 'visit', 'order_patient', 'diagnosis_quiry', 'send_date', 'send_doctor', 'result', 'result_date', 'result_doctor', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'EncounterNr' => 1, 'TestingDept' => 2, 'Visit' => 3, 'OrderPatient' => 4, 'DiagnosisQuiry' => 5, 'SendDate' => 6, 'SendDoctor' => 7, 'Result' => 8, 'ResultDate' => 9, 'ResultDoctor' => 10, 'Status' => 11, 'History' => 12, 'ModifyId' => 13, 'ModifyTime' => 14, 'CreateId' => 15, 'CreateTime' => 16, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'encounterNr' => 1, 'testingDept' => 2, 'visit' => 3, 'orderPatient' => 4, 'diagnosisQuiry' => 5, 'sendDate' => 6, 'sendDoctor' => 7, 'result' => 8, 'resultDate' => 9, 'resultDoctor' => 10, 'status' => 11, 'history' => 12, 'modifyId' => 13, 'modifyTime' => 14, 'createId' => 15, 'createTime' => 16, ),
        self::TYPE_COLNAME       => array(CareTestRequestGenericTableMap::COL_BATCH_NR => 0, CareTestRequestGenericTableMap::COL_ENCOUNTER_NR => 1, CareTestRequestGenericTableMap::COL_TESTING_DEPT => 2, CareTestRequestGenericTableMap::COL_VISIT => 3, CareTestRequestGenericTableMap::COL_ORDER_PATIENT => 4, CareTestRequestGenericTableMap::COL_DIAGNOSIS_QUIRY => 5, CareTestRequestGenericTableMap::COL_SEND_DATE => 6, CareTestRequestGenericTableMap::COL_SEND_DOCTOR => 7, CareTestRequestGenericTableMap::COL_RESULT => 8, CareTestRequestGenericTableMap::COL_RESULT_DATE => 9, CareTestRequestGenericTableMap::COL_RESULT_DOCTOR => 10, CareTestRequestGenericTableMap::COL_STATUS => 11, CareTestRequestGenericTableMap::COL_HISTORY => 12, CareTestRequestGenericTableMap::COL_MODIFY_ID => 13, CareTestRequestGenericTableMap::COL_MODIFY_TIME => 14, CareTestRequestGenericTableMap::COL_CREATE_ID => 15, CareTestRequestGenericTableMap::COL_CREATE_TIME => 16, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'encounter_nr' => 1, 'testing_dept' => 2, 'visit' => 3, 'order_patient' => 4, 'diagnosis_quiry' => 5, 'send_date' => 6, 'send_doctor' => 7, 'result' => 8, 'result_date' => 9, 'result_doctor' => 10, 'status' => 11, 'history' => 12, 'modify_id' => 13, 'modify_time' => 14, 'create_id' => 15, 'create_time' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('care_test_request_generic');
        $this->setPhpName('CareTestRequestGeneric');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestRequestGeneric');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, 0);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('testing_dept', 'TestingDept', 'VARCHAR', true, 35, '');
        $this->addColumn('visit', 'Visit', 'BOOLEAN', true, 1, false);
        $this->addColumn('order_patient', 'OrderPatient', 'BOOLEAN', true, 1, false);
        $this->addColumn('diagnosis_quiry', 'DiagnosisQuiry', 'LONGVARCHAR', true, null, null);
        $this->addColumn('send_date', 'SendDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('send_doctor', 'SendDoctor', 'VARCHAR', true, 35, '');
        $this->addColumn('result', 'Result', 'LONGVARCHAR', true, null, null);
        $this->addColumn('result_date', 'ResultDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('result_doctor', 'ResultDoctor', 'VARCHAR', true, 35, '');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 10, '');
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
        return $withPrefix ? CareTestRequestGenericTableMap::CLASS_DEFAULT : CareTestRequestGenericTableMap::OM_CLASS;
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
     * @return array           (CareTestRequestGeneric object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestRequestGenericTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestRequestGenericTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestRequestGenericTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestRequestGenericTableMap::OM_CLASS;
            /** @var CareTestRequestGeneric $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestRequestGenericTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestRequestGenericTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestRequestGenericTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestRequestGeneric $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestRequestGenericTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_TESTING_DEPT);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_VISIT);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_ORDER_PATIENT);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_DIAGNOSIS_QUIRY);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_SEND_DATE);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_SEND_DOCTOR);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_RESULT);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_RESULT_DATE);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_RESULT_DOCTOR);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestRequestGenericTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.testing_dept');
            $criteria->addSelectColumn($alias . '.visit');
            $criteria->addSelectColumn($alias . '.order_patient');
            $criteria->addSelectColumn($alias . '.diagnosis_quiry');
            $criteria->addSelectColumn($alias . '.send_date');
            $criteria->addSelectColumn($alias . '.send_doctor');
            $criteria->addSelectColumn($alias . '.result');
            $criteria->addSelectColumn($alias . '.result_date');
            $criteria->addSelectColumn($alias . '.result_doctor');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestRequestGenericTableMap::DATABASE_NAME)->getTable(CareTestRequestGenericTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestRequestGenericTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestRequestGenericTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestRequestGenericTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestRequestGeneric or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestRequestGeneric object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestGenericTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestRequestGeneric) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestRequestGenericTableMap::DATABASE_NAME);
            $criteria->add(CareTestRequestGenericTableMap::COL_BATCH_NR, (array) $values, Criteria::IN);
        }

        $query = CareTestRequestGenericQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestRequestGenericTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestRequestGenericTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_request_generic table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestRequestGenericQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestRequestGeneric or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestRequestGeneric object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestGenericTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestRequestGeneric object
        }


        // Set the correct dbName
        $query = CareTestRequestGenericQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestRequestGenericTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestRequestGenericTableMap::buildTableMap();
