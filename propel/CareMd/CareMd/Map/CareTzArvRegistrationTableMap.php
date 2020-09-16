<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzArvRegistration;
use CareMd\CareMd\CareTzArvRegistrationQuery;
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
 * This class defines the structure of the 'care_tz_arv_registration' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzArvRegistrationTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzArvRegistrationTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_arv_registration';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzArvRegistration';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzArvRegistration';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 26;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 26;

    /**
     * the column name for the care_tz_arv_registration_id field
     */
    const COL_CARE_TZ_ARV_REGISTRATION_ID = 'care_tz_arv_registration.care_tz_arv_registration_id';

    /**
     * the column name for the care_tz_arv_lab_id field
     */
    const COL_CARE_TZ_ARV_LAB_ID = 'care_tz_arv_registration.care_tz_arv_lab_id';

    /**
     * the column name for the care_tz_arv_functional_status_id field
     */
    const COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID = 'care_tz_arv_registration.care_tz_arv_functional_status_id';

    /**
     * the column name for the care_tz_arv_exposure_id field
     */
    const COL_CARE_TZ_ARV_EXPOSURE_ID = 'care_tz_arv_registration.care_tz_arv_exposure_id';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_tz_arv_registration.pid';

    /**
     * the column name for the ctc_id field
     */
    const COL_CTC_ID = 'care_tz_arv_registration.ctc_id';

    /**
     * the column name for the tb_reg_no field
     */
    const COL_TB_REG_NO = 'care_tz_arv_registration.tb_reg_no';

    /**
     * the column name for the hbc_number field
     */
    const COL_HBC_NUMBER = 'care_tz_arv_registration.hbc_number';

    /**
     * the column name for the ten_cell_leader field
     */
    const COL_TEN_CELL_LEADER = 'care_tz_arv_registration.ten_cell_leader';

    /**
     * the column name for the head_of_household field
     */
    const COL_HEAD_OF_HOUSEHOLD = 'care_tz_arv_registration.head_of_household';

    /**
     * the column name for the head_of_household_contact field
     */
    const COL_HEAD_OF_HOUSEHOLD_CONTACT = 'care_tz_arv_registration.head_of_household_contact';

    /**
     * the column name for the date_first_hiv_test field
     */
    const COL_DATE_FIRST_HIV_TEST = 'care_tz_arv_registration.date_first_hiv_test';

    /**
     * the column name for the date_confirmed_hiv field
     */
    const COL_DATE_CONFIRMED_HIV = 'care_tz_arv_registration.date_confirmed_hiv';

    /**
     * the column name for the date_eligible field
     */
    const COL_DATE_ELIGIBLE = 'care_tz_arv_registration.date_eligible';

    /**
     * the column name for the date_enrolled field
     */
    const COL_DATE_ENROLLED = 'care_tz_arv_registration.date_enrolled';

    /**
     * the column name for the date_ready field
     */
    const COL_DATE_READY = 'care_tz_arv_registration.date_ready';

    /**
     * the column name for the date_start_art field
     */
    const COL_DATE_START_ART = 'care_tz_arv_registration.date_start_art';

    /**
     * the column name for the age_start_art field
     */
    const COL_AGE_START_ART = 'care_tz_arv_registration.age_start_art';

    /**
     * the column name for the status_clinical_stage field
     */
    const COL_STATUS_CLINICAL_STAGE = 'care_tz_arv_registration.status_clinical_stage';

    /**
     * the column name for the status_weight field
     */
    const COL_STATUS_WEIGHT = 'care_tz_arv_registration.status_weight';

    /**
     * the column name for the status_height field
     */
    const COL_STATUS_HEIGHT = 'care_tz_arv_registration.status_height';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_tz_arv_registration.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_tz_arv_registration.create_time';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tz_arv_registration.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_tz_arv_registration.modify_time';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_tz_arv_registration.history';

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
        self::TYPE_PHPNAME       => array('CareTzArvRegistrationId', 'CareTzArvLabId', 'CareTzArvFunctionalStatusId', 'CareTzArvExposureId', 'Pid', 'CtcId', 'TbRegNo', 'HbcNumber', 'TenCellLeader', 'HeadOfHousehold', 'HeadOfHouseholdContact', 'DateFirstHivTest', 'DateConfirmedHiv', 'DateEligible', 'DateEnrolled', 'DateReady', 'DateStartArt', 'AgeStartArt', 'StatusClinicalStage', 'StatusWeight', 'StatusHeight', 'CreateId', 'CreateTime', 'ModifyId', 'ModifyTime', 'History', ),
        self::TYPE_CAMELNAME     => array('careTzArvRegistrationId', 'careTzArvLabId', 'careTzArvFunctionalStatusId', 'careTzArvExposureId', 'pid', 'ctcId', 'tbRegNo', 'hbcNumber', 'tenCellLeader', 'headOfHousehold', 'headOfHouseholdContact', 'dateFirstHivTest', 'dateConfirmedHiv', 'dateEligible', 'dateEnrolled', 'dateReady', 'dateStartArt', 'ageStartArt', 'statusClinicalStage', 'statusWeight', 'statusHeight', 'createId', 'createTime', 'modifyId', 'modifyTime', 'history', ),
        self::TYPE_COLNAME       => array(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_LAB_ID, CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_EXPOSURE_ID, CareTzArvRegistrationTableMap::COL_PID, CareTzArvRegistrationTableMap::COL_CTC_ID, CareTzArvRegistrationTableMap::COL_TB_REG_NO, CareTzArvRegistrationTableMap::COL_HBC_NUMBER, CareTzArvRegistrationTableMap::COL_TEN_CELL_LEADER, CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD, CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD_CONTACT, CareTzArvRegistrationTableMap::COL_DATE_FIRST_HIV_TEST, CareTzArvRegistrationTableMap::COL_DATE_CONFIRMED_HIV, CareTzArvRegistrationTableMap::COL_DATE_ELIGIBLE, CareTzArvRegistrationTableMap::COL_DATE_ENROLLED, CareTzArvRegistrationTableMap::COL_DATE_READY, CareTzArvRegistrationTableMap::COL_DATE_START_ART, CareTzArvRegistrationTableMap::COL_AGE_START_ART, CareTzArvRegistrationTableMap::COL_STATUS_CLINICAL_STAGE, CareTzArvRegistrationTableMap::COL_STATUS_WEIGHT, CareTzArvRegistrationTableMap::COL_STATUS_HEIGHT, CareTzArvRegistrationTableMap::COL_CREATE_ID, CareTzArvRegistrationTableMap::COL_CREATE_TIME, CareTzArvRegistrationTableMap::COL_MODIFY_ID, CareTzArvRegistrationTableMap::COL_MODIFY_TIME, CareTzArvRegistrationTableMap::COL_HISTORY, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_registration_id', 'care_tz_arv_lab_id', 'care_tz_arv_functional_status_id', 'care_tz_arv_exposure_id', 'pid', 'ctc_id', 'tb_reg_no', 'hbc_number', 'ten_cell_leader', 'head_of_household', 'head_of_household_contact', 'date_first_hiv_test', 'date_confirmed_hiv', 'date_eligible', 'date_enrolled', 'date_ready', 'date_start_art', 'age_start_art', 'status_clinical_stage', 'status_weight', 'status_height', 'create_id', 'create_time', 'modify_id', 'modify_time', 'history', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('CareTzArvRegistrationId' => 0, 'CareTzArvLabId' => 1, 'CareTzArvFunctionalStatusId' => 2, 'CareTzArvExposureId' => 3, 'Pid' => 4, 'CtcId' => 5, 'TbRegNo' => 6, 'HbcNumber' => 7, 'TenCellLeader' => 8, 'HeadOfHousehold' => 9, 'HeadOfHouseholdContact' => 10, 'DateFirstHivTest' => 11, 'DateConfirmedHiv' => 12, 'DateEligible' => 13, 'DateEnrolled' => 14, 'DateReady' => 15, 'DateStartArt' => 16, 'AgeStartArt' => 17, 'StatusClinicalStage' => 18, 'StatusWeight' => 19, 'StatusHeight' => 20, 'CreateId' => 21, 'CreateTime' => 22, 'ModifyId' => 23, 'ModifyTime' => 24, 'History' => 25, ),
        self::TYPE_CAMELNAME     => array('careTzArvRegistrationId' => 0, 'careTzArvLabId' => 1, 'careTzArvFunctionalStatusId' => 2, 'careTzArvExposureId' => 3, 'pid' => 4, 'ctcId' => 5, 'tbRegNo' => 6, 'hbcNumber' => 7, 'tenCellLeader' => 8, 'headOfHousehold' => 9, 'headOfHouseholdContact' => 10, 'dateFirstHivTest' => 11, 'dateConfirmedHiv' => 12, 'dateEligible' => 13, 'dateEnrolled' => 14, 'dateReady' => 15, 'dateStartArt' => 16, 'ageStartArt' => 17, 'statusClinicalStage' => 18, 'statusWeight' => 19, 'statusHeight' => 20, 'createId' => 21, 'createTime' => 22, 'modifyId' => 23, 'modifyTime' => 24, 'history' => 25, ),
        self::TYPE_COLNAME       => array(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID => 0, CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_LAB_ID => 1, CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID => 2, CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_EXPOSURE_ID => 3, CareTzArvRegistrationTableMap::COL_PID => 4, CareTzArvRegistrationTableMap::COL_CTC_ID => 5, CareTzArvRegistrationTableMap::COL_TB_REG_NO => 6, CareTzArvRegistrationTableMap::COL_HBC_NUMBER => 7, CareTzArvRegistrationTableMap::COL_TEN_CELL_LEADER => 8, CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD => 9, CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD_CONTACT => 10, CareTzArvRegistrationTableMap::COL_DATE_FIRST_HIV_TEST => 11, CareTzArvRegistrationTableMap::COL_DATE_CONFIRMED_HIV => 12, CareTzArvRegistrationTableMap::COL_DATE_ELIGIBLE => 13, CareTzArvRegistrationTableMap::COL_DATE_ENROLLED => 14, CareTzArvRegistrationTableMap::COL_DATE_READY => 15, CareTzArvRegistrationTableMap::COL_DATE_START_ART => 16, CareTzArvRegistrationTableMap::COL_AGE_START_ART => 17, CareTzArvRegistrationTableMap::COL_STATUS_CLINICAL_STAGE => 18, CareTzArvRegistrationTableMap::COL_STATUS_WEIGHT => 19, CareTzArvRegistrationTableMap::COL_STATUS_HEIGHT => 20, CareTzArvRegistrationTableMap::COL_CREATE_ID => 21, CareTzArvRegistrationTableMap::COL_CREATE_TIME => 22, CareTzArvRegistrationTableMap::COL_MODIFY_ID => 23, CareTzArvRegistrationTableMap::COL_MODIFY_TIME => 24, CareTzArvRegistrationTableMap::COL_HISTORY => 25, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_registration_id' => 0, 'care_tz_arv_lab_id' => 1, 'care_tz_arv_functional_status_id' => 2, 'care_tz_arv_exposure_id' => 3, 'pid' => 4, 'ctc_id' => 5, 'tb_reg_no' => 6, 'hbc_number' => 7, 'ten_cell_leader' => 8, 'head_of_household' => 9, 'head_of_household_contact' => 10, 'date_first_hiv_test' => 11, 'date_confirmed_hiv' => 12, 'date_eligible' => 13, 'date_enrolled' => 14, 'date_ready' => 15, 'date_start_art' => 16, 'age_start_art' => 17, 'status_clinical_stage' => 18, 'status_weight' => 19, 'status_height' => 20, 'create_id' => 21, 'create_time' => 22, 'modify_id' => 23, 'modify_time' => 24, 'history' => 25, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
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
        $this->setName('care_tz_arv_registration');
        $this->setPhpName('CareTzArvRegistration');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzArvRegistration');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('care_tz_arv_registration_id', 'CareTzArvRegistrationId', 'BIGINT', true, null, null);
        $this->addColumn('care_tz_arv_lab_id', 'CareTzArvLabId', 'BIGINT', false, null, null);
        $this->addColumn('care_tz_arv_functional_status_id', 'CareTzArvFunctionalStatusId', 'INTEGER', false, 10, null);
        $this->addColumn('care_tz_arv_exposure_id', 'CareTzArvExposureId', 'INTEGER', false, 10, null);
        $this->addColumn('pid', 'Pid', 'INTEGER', true, null, null);
        $this->addColumn('ctc_id', 'CtcId', 'VARCHAR', true, 14, null);
        $this->addColumn('tb_reg_no', 'TbRegNo', 'VARCHAR', false, 14, null);
        $this->addColumn('hbc_number', 'HbcNumber', 'VARCHAR', false, 14, null);
        $this->addColumn('ten_cell_leader', 'TenCellLeader', 'VARCHAR', false, 60, null);
        $this->addColumn('head_of_household', 'HeadOfHousehold', 'VARCHAR', false, 60, null);
        $this->addColumn('head_of_household_contact', 'HeadOfHouseholdContact', 'VARCHAR', false, 100, null);
        $this->addColumn('date_first_hiv_test', 'DateFirstHivTest', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_confirmed_hiv', 'DateConfirmedHiv', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_eligible', 'DateEligible', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_enrolled', 'DateEnrolled', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_ready', 'DateReady', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_start_art', 'DateStartArt', 'TIMESTAMP', false, null, null);
        $this->addColumn('age_start_art', 'AgeStartArt', 'INTEGER', false, 10, null);
        $this->addColumn('status_clinical_stage', 'StatusClinicalStage', 'INTEGER', false, 10, null);
        $this->addColumn('status_weight', 'StatusWeight', 'DOUBLE', false, null, null);
        $this->addColumn('status_height', 'StatusHeight', 'DOUBLE', false, null, null);
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', false, 35, null);
        $this->addColumn('create_time', 'CreateTime', 'BIGINT', false, 35, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', false, 35, null);
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', false, null, null);
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzArvRegistrationTableMap::CLASS_DEFAULT : CareTzArvRegistrationTableMap::OM_CLASS;
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
     * @return array           (CareTzArvRegistration object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzArvRegistrationTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzArvRegistrationTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzArvRegistrationTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzArvRegistrationTableMap::OM_CLASS;
            /** @var CareTzArvRegistration $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzArvRegistrationTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzArvRegistrationTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzArvRegistrationTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzArvRegistration $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzArvRegistrationTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_LAB_ID);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_EXPOSURE_ID);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_PID);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_CTC_ID);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_TB_REG_NO);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_HBC_NUMBER);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_TEN_CELL_LEADER);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD_CONTACT);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_DATE_FIRST_HIV_TEST);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_DATE_CONFIRMED_HIV);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_DATE_ELIGIBLE);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_DATE_ENROLLED);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_DATE_READY);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_DATE_START_ART);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_AGE_START_ART);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_STATUS_CLINICAL_STAGE);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_STATUS_WEIGHT);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_STATUS_HEIGHT);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTzArvRegistrationTableMap::COL_HISTORY);
        } else {
            $criteria->addSelectColumn($alias . '.care_tz_arv_registration_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_lab_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_functional_status_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_exposure_id');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.ctc_id');
            $criteria->addSelectColumn($alias . '.tb_reg_no');
            $criteria->addSelectColumn($alias . '.hbc_number');
            $criteria->addSelectColumn($alias . '.ten_cell_leader');
            $criteria->addSelectColumn($alias . '.head_of_household');
            $criteria->addSelectColumn($alias . '.head_of_household_contact');
            $criteria->addSelectColumn($alias . '.date_first_hiv_test');
            $criteria->addSelectColumn($alias . '.date_confirmed_hiv');
            $criteria->addSelectColumn($alias . '.date_eligible');
            $criteria->addSelectColumn($alias . '.date_enrolled');
            $criteria->addSelectColumn($alias . '.date_ready');
            $criteria->addSelectColumn($alias . '.date_start_art');
            $criteria->addSelectColumn($alias . '.age_start_art');
            $criteria->addSelectColumn($alias . '.status_clinical_stage');
            $criteria->addSelectColumn($alias . '.status_weight');
            $criteria->addSelectColumn($alias . '.status_height');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.history');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzArvRegistrationTableMap::DATABASE_NAME)->getTable(CareTzArvRegistrationTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzArvRegistrationTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzArvRegistrationTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzArvRegistrationTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzArvRegistration or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzArvRegistration object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegistrationTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzArvRegistration) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzArvRegistrationTableMap::DATABASE_NAME);
            $criteria->add(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzArvRegistrationQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzArvRegistrationTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzArvRegistrationTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_arv_registration table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzArvRegistrationQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzArvRegistration or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzArvRegistration object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegistrationTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzArvRegistration object
        }

        if ($criteria->containsKey(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID) && $criteria->keyContainsValue(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID.')');
        }


        // Set the correct dbName
        $query = CareTzArvRegistrationQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzArvRegistrationTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzArvRegistrationTableMap::buildTableMap();
