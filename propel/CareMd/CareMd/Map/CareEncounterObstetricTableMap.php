<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterObstetric;
use CareMd\CareMd\CareEncounterObstetricQuery;
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
 * This class defines the structure of the 'care_encounter_obstetric' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterObstetricTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterObstetricTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_obstetric';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterObstetric';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterObstetric';

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
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_obstetric.encounter_nr';

    /**
     * the column name for the pregnancy_nr field
     */
    const COL_PREGNANCY_NR = 'care_encounter_obstetric.pregnancy_nr';

    /**
     * the column name for the hospital_adm_nr field
     */
    const COL_HOSPITAL_ADM_NR = 'care_encounter_obstetric.hospital_adm_nr';

    /**
     * the column name for the patient_class field
     */
    const COL_PATIENT_CLASS = 'care_encounter_obstetric.patient_class';

    /**
     * the column name for the is_discharged_not_in_labour field
     */
    const COL_IS_DISCHARGED_NOT_IN_LABOUR = 'care_encounter_obstetric.is_discharged_not_in_labour';

    /**
     * the column name for the is_re_admission field
     */
    const COL_IS_RE_ADMISSION = 'care_encounter_obstetric.is_re_admission';

    /**
     * the column name for the referral_status field
     */
    const COL_REFERRAL_STATUS = 'care_encounter_obstetric.referral_status';

    /**
     * the column name for the referral_reason field
     */
    const COL_REFERRAL_REASON = 'care_encounter_obstetric.referral_reason';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_obstetric.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_obstetric.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_obstetric.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_obstetric.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_obstetric.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_obstetric.create_time';

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
        self::TYPE_PHPNAME       => array('EncounterNr', 'PregnancyNr', 'HospitalAdmNr', 'PatientClass', 'IsDischargedNotInLabour', 'IsReAdmission', 'ReferralStatus', 'ReferralReason', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('encounterNr', 'pregnancyNr', 'hospitalAdmNr', 'patientClass', 'isDischargedNotInLabour', 'isReAdmission', 'referralStatus', 'referralReason', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR, CareEncounterObstetricTableMap::COL_PREGNANCY_NR, CareEncounterObstetricTableMap::COL_HOSPITAL_ADM_NR, CareEncounterObstetricTableMap::COL_PATIENT_CLASS, CareEncounterObstetricTableMap::COL_IS_DISCHARGED_NOT_IN_LABOUR, CareEncounterObstetricTableMap::COL_IS_RE_ADMISSION, CareEncounterObstetricTableMap::COL_REFERRAL_STATUS, CareEncounterObstetricTableMap::COL_REFERRAL_REASON, CareEncounterObstetricTableMap::COL_STATUS, CareEncounterObstetricTableMap::COL_HISTORY, CareEncounterObstetricTableMap::COL_MODIFY_ID, CareEncounterObstetricTableMap::COL_MODIFY_TIME, CareEncounterObstetricTableMap::COL_CREATE_ID, CareEncounterObstetricTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('encounter_nr', 'pregnancy_nr', 'hospital_adm_nr', 'patient_class', 'is_discharged_not_in_labour', 'is_re_admission', 'referral_status', 'referral_reason', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('EncounterNr' => 0, 'PregnancyNr' => 1, 'HospitalAdmNr' => 2, 'PatientClass' => 3, 'IsDischargedNotInLabour' => 4, 'IsReAdmission' => 5, 'ReferralStatus' => 6, 'ReferralReason' => 7, 'Status' => 8, 'History' => 9, 'ModifyId' => 10, 'ModifyTime' => 11, 'CreateId' => 12, 'CreateTime' => 13, ),
        self::TYPE_CAMELNAME     => array('encounterNr' => 0, 'pregnancyNr' => 1, 'hospitalAdmNr' => 2, 'patientClass' => 3, 'isDischargedNotInLabour' => 4, 'isReAdmission' => 5, 'referralStatus' => 6, 'referralReason' => 7, 'status' => 8, 'history' => 9, 'modifyId' => 10, 'modifyTime' => 11, 'createId' => 12, 'createTime' => 13, ),
        self::TYPE_COLNAME       => array(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR => 0, CareEncounterObstetricTableMap::COL_PREGNANCY_NR => 1, CareEncounterObstetricTableMap::COL_HOSPITAL_ADM_NR => 2, CareEncounterObstetricTableMap::COL_PATIENT_CLASS => 3, CareEncounterObstetricTableMap::COL_IS_DISCHARGED_NOT_IN_LABOUR => 4, CareEncounterObstetricTableMap::COL_IS_RE_ADMISSION => 5, CareEncounterObstetricTableMap::COL_REFERRAL_STATUS => 6, CareEncounterObstetricTableMap::COL_REFERRAL_REASON => 7, CareEncounterObstetricTableMap::COL_STATUS => 8, CareEncounterObstetricTableMap::COL_HISTORY => 9, CareEncounterObstetricTableMap::COL_MODIFY_ID => 10, CareEncounterObstetricTableMap::COL_MODIFY_TIME => 11, CareEncounterObstetricTableMap::COL_CREATE_ID => 12, CareEncounterObstetricTableMap::COL_CREATE_TIME => 13, ),
        self::TYPE_FIELDNAME     => array('encounter_nr' => 0, 'pregnancy_nr' => 1, 'hospital_adm_nr' => 2, 'patient_class' => 3, 'is_discharged_not_in_labour' => 4, 'is_re_admission' => 5, 'referral_status' => 6, 'referral_reason' => 7, 'status' => 8, 'history' => 9, 'modify_id' => 10, 'modify_time' => 11, 'create_id' => 12, 'create_time' => 13, ),
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
        $this->setName('care_encounter_obstetric');
        $this->setPhpName('CareEncounterObstetric');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterObstetric');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('encounter_nr', 'EncounterNr', 'INTEGER', true, null, null);
        $this->addColumn('pregnancy_nr', 'PregnancyNr', 'INTEGER', true, null, 0);
        $this->addColumn('hospital_adm_nr', 'HospitalAdmNr', 'INTEGER', true, null, 0);
        $this->addColumn('patient_class', 'PatientClass', 'VARCHAR', true, 60, '');
        $this->addColumn('is_discharged_not_in_labour', 'IsDischargedNotInLabour', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_re_admission', 'IsReAdmission', 'BOOLEAN', false, 1, null);
        $this->addColumn('referral_status', 'ReferralStatus', 'VARCHAR', false, 60, null);
        $this->addColumn('referral_reason', 'ReferralReason', 'LONGVARCHAR', false, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareEncounterObstetricTableMap::CLASS_DEFAULT : CareEncounterObstetricTableMap::OM_CLASS;
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
     * @return array           (CareEncounterObstetric object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterObstetricTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterObstetricTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterObstetricTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterObstetricTableMap::OM_CLASS;
            /** @var CareEncounterObstetric $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterObstetricTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterObstetricTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterObstetricTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterObstetric $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterObstetricTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_PREGNANCY_NR);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_HOSPITAL_ADM_NR);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_PATIENT_CLASS);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_IS_DISCHARGED_NOT_IN_LABOUR);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_IS_RE_ADMISSION);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_REFERRAL_STATUS);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_REFERRAL_REASON);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterObstetricTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.pregnancy_nr');
            $criteria->addSelectColumn($alias . '.hospital_adm_nr');
            $criteria->addSelectColumn($alias . '.patient_class');
            $criteria->addSelectColumn($alias . '.is_discharged_not_in_labour');
            $criteria->addSelectColumn($alias . '.is_re_admission');
            $criteria->addSelectColumn($alias . '.referral_status');
            $criteria->addSelectColumn($alias . '.referral_reason');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterObstetricTableMap::DATABASE_NAME)->getTable(CareEncounterObstetricTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterObstetricTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterObstetricTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterObstetricTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterObstetric or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterObstetric object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterObstetricTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterObstetric) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterObstetricTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterObstetricQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterObstetricTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterObstetricTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_obstetric table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterObstetricQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterObstetric or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterObstetric object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterObstetricTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterObstetric object
        }

        if ($criteria->containsKey(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR) && $criteria->keyContainsValue(CareEncounterObstetricTableMap::COL_ENCOUNTER_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterObstetricTableMap::COL_ENCOUNTER_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterObstetricQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterObstetricTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterObstetricTableMap::buildTableMap();
