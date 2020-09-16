<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzDiagnosis;
use CareMd\CareMd\CareTzDiagnosisQuery;
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
 * This class defines the structure of the 'care_tz_diagnosis' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzDiagnosisTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzDiagnosisTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_diagnosis';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzDiagnosis';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzDiagnosis';

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
     * the column name for the case_nr field
     */
    const COL_CASE_NR = 'care_tz_diagnosis.case_nr';

    /**
     * the column name for the parent_case_nr field
     */
    const COL_PARENT_CASE_NR = 'care_tz_diagnosis.parent_case_nr';

    /**
     * the column name for the PID field
     */
    const COL_PID = 'care_tz_diagnosis.PID';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_tz_diagnosis.encounter_nr';

    /**
     * the column name for the timestamp field
     */
    const COL_TIMESTAMP = 'care_tz_diagnosis.timestamp';

    /**
     * the column name for the ICD_10_code field
     */
    const COL_ICD_10_CODE = 'care_tz_diagnosis.ICD_10_code';

    /**
     * the column name for the ICD_10_description field
     */
    const COL_ICD_10_DESCRIPTION = 'care_tz_diagnosis.ICD_10_description';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'care_tz_diagnosis.type';

    /**
     * the column name for the comment field
     */
    const COL_COMMENT = 'care_tz_diagnosis.comment';

    /**
     * the column name for the doctor_name field
     */
    const COL_DOCTOR_NAME = 'care_tz_diagnosis.doctor_name';

    /**
     * the column name for the diagnosis_type field
     */
    const COL_DIAGNOSIS_TYPE = 'care_tz_diagnosis.diagnosis_type';

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
        self::TYPE_PHPNAME       => array('CaseNr', 'ParentCaseNr', 'Pid', 'EncounterNr', 'Timestamp', 'Icd10Code', 'Icd10Description', 'Type', 'Comment', 'DoctorName', 'DiagnosisType', ),
        self::TYPE_CAMELNAME     => array('caseNr', 'parentCaseNr', 'pid', 'encounterNr', 'timestamp', 'icd10Code', 'icd10Description', 'type', 'comment', 'doctorName', 'diagnosisType', ),
        self::TYPE_COLNAME       => array(CareTzDiagnosisTableMap::COL_CASE_NR, CareTzDiagnosisTableMap::COL_PARENT_CASE_NR, CareTzDiagnosisTableMap::COL_PID, CareTzDiagnosisTableMap::COL_ENCOUNTER_NR, CareTzDiagnosisTableMap::COL_TIMESTAMP, CareTzDiagnosisTableMap::COL_ICD_10_CODE, CareTzDiagnosisTableMap::COL_ICD_10_DESCRIPTION, CareTzDiagnosisTableMap::COL_TYPE, CareTzDiagnosisTableMap::COL_COMMENT, CareTzDiagnosisTableMap::COL_DOCTOR_NAME, CareTzDiagnosisTableMap::COL_DIAGNOSIS_TYPE, ),
        self::TYPE_FIELDNAME     => array('case_nr', 'parent_case_nr', 'PID', 'encounter_nr', 'timestamp', 'ICD_10_code', 'ICD_10_description', 'type', 'comment', 'doctor_name', 'diagnosis_type', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('CaseNr' => 0, 'ParentCaseNr' => 1, 'Pid' => 2, 'EncounterNr' => 3, 'Timestamp' => 4, 'Icd10Code' => 5, 'Icd10Description' => 6, 'Type' => 7, 'Comment' => 8, 'DoctorName' => 9, 'DiagnosisType' => 10, ),
        self::TYPE_CAMELNAME     => array('caseNr' => 0, 'parentCaseNr' => 1, 'pid' => 2, 'encounterNr' => 3, 'timestamp' => 4, 'icd10Code' => 5, 'icd10Description' => 6, 'type' => 7, 'comment' => 8, 'doctorName' => 9, 'diagnosisType' => 10, ),
        self::TYPE_COLNAME       => array(CareTzDiagnosisTableMap::COL_CASE_NR => 0, CareTzDiagnosisTableMap::COL_PARENT_CASE_NR => 1, CareTzDiagnosisTableMap::COL_PID => 2, CareTzDiagnosisTableMap::COL_ENCOUNTER_NR => 3, CareTzDiagnosisTableMap::COL_TIMESTAMP => 4, CareTzDiagnosisTableMap::COL_ICD_10_CODE => 5, CareTzDiagnosisTableMap::COL_ICD_10_DESCRIPTION => 6, CareTzDiagnosisTableMap::COL_TYPE => 7, CareTzDiagnosisTableMap::COL_COMMENT => 8, CareTzDiagnosisTableMap::COL_DOCTOR_NAME => 9, CareTzDiagnosisTableMap::COL_DIAGNOSIS_TYPE => 10, ),
        self::TYPE_FIELDNAME     => array('case_nr' => 0, 'parent_case_nr' => 1, 'PID' => 2, 'encounter_nr' => 3, 'timestamp' => 4, 'ICD_10_code' => 5, 'ICD_10_description' => 6, 'type' => 7, 'comment' => 8, 'doctor_name' => 9, 'diagnosis_type' => 10, ),
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
        $this->setName('care_tz_diagnosis');
        $this->setPhpName('CareTzDiagnosis');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzDiagnosis');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('case_nr', 'CaseNr', 'BIGINT', true, null, null);
        $this->addColumn('parent_case_nr', 'ParentCaseNr', 'BIGINT', true, null, -1);
        $this->addColumn('PID', 'Pid', 'BIGINT', true, null, 0);
        $this->addColumn('encounter_nr', 'EncounterNr', 'BIGINT', true, null, 0);
        $this->addColumn('timestamp', 'Timestamp', 'BIGINT', true, null, 0);
        $this->addColumn('ICD_10_code', 'Icd10Code', 'VARCHAR', true, 10, '');
        $this->addColumn('ICD_10_description', 'Icd10Description', 'VARCHAR', true, 50, '');
        $this->addColumn('type', 'Type', 'VARCHAR', true, 25, '');
        $this->addColumn('comment', 'Comment', 'VARCHAR', false, 255, null);
        $this->addColumn('doctor_name', 'DoctorName', 'VARCHAR', false, 200, null);
        $this->addColumn('diagnosis_type', 'DiagnosisType', 'CHAR', true, null, 'final');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CaseNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CaseNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CaseNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CaseNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CaseNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CaseNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('CaseNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzDiagnosisTableMap::CLASS_DEFAULT : CareTzDiagnosisTableMap::OM_CLASS;
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
     * @return array           (CareTzDiagnosis object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzDiagnosisTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzDiagnosisTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzDiagnosisTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzDiagnosisTableMap::OM_CLASS;
            /** @var CareTzDiagnosis $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzDiagnosisTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzDiagnosisTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzDiagnosisTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzDiagnosis $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzDiagnosisTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_CASE_NR);
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_PARENT_CASE_NR);
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_PID);
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_TIMESTAMP);
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_ICD_10_CODE);
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_ICD_10_DESCRIPTION);
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_TYPE);
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_COMMENT);
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_DOCTOR_NAME);
            $criteria->addSelectColumn(CareTzDiagnosisTableMap::COL_DIAGNOSIS_TYPE);
        } else {
            $criteria->addSelectColumn($alias . '.case_nr');
            $criteria->addSelectColumn($alias . '.parent_case_nr');
            $criteria->addSelectColumn($alias . '.PID');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.timestamp');
            $criteria->addSelectColumn($alias . '.ICD_10_code');
            $criteria->addSelectColumn($alias . '.ICD_10_description');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.comment');
            $criteria->addSelectColumn($alias . '.doctor_name');
            $criteria->addSelectColumn($alias . '.diagnosis_type');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzDiagnosisTableMap::DATABASE_NAME)->getTable(CareTzDiagnosisTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzDiagnosisTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzDiagnosisTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzDiagnosisTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzDiagnosis or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzDiagnosis object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDiagnosisTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzDiagnosis) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzDiagnosisTableMap::DATABASE_NAME);
            $criteria->add(CareTzDiagnosisTableMap::COL_CASE_NR, (array) $values, Criteria::IN);
        }

        $query = CareTzDiagnosisQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzDiagnosisTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzDiagnosisTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_diagnosis table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzDiagnosisQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzDiagnosis or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzDiagnosis object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDiagnosisTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzDiagnosis object
        }

        if ($criteria->containsKey(CareTzDiagnosisTableMap::COL_CASE_NR) && $criteria->keyContainsValue(CareTzDiagnosisTableMap::COL_CASE_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzDiagnosisTableMap::COL_CASE_NR.')');
        }


        // Set the correct dbName
        $query = CareTzDiagnosisQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzDiagnosisTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzDiagnosisTableMap::buildTableMap();
