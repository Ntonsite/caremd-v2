<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzArvVisit;
use CareMd\CareMd\CareTzArvVisitQuery;
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
 * This class defines the structure of the 'care_tz_arv_visit' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzArvVisitTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzArvVisitTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_arv_visit';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzArvVisit';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzArvVisit';

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
     * the column name for the care_tz_arv_visit_2_id field
     */
    const COL_CARE_TZ_ARV_VISIT_2_ID = 'care_tz_arv_visit.care_tz_arv_visit_2_id';

    /**
     * the column name for the care_tz_arv_registration_id field
     */
    const COL_CARE_TZ_ARV_REGISTRATION_ID = 'care_tz_arv_visit.care_tz_arv_registration_id';

    /**
     * the column name for the care_tz_arv_adher_code_id field
     */
    const COL_CARE_TZ_ARV_ADHER_CODE_ID = 'care_tz_arv_visit.care_tz_arv_adher_code_id';

    /**
     * the column name for the care_tz_arv_functional_status_id field
     */
    const COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID = 'care_tz_arv_visit.care_tz_arv_functional_status_id';

    /**
     * the column name for the care_tz_arv_tb_status_id field
     */
    const COL_CARE_TZ_ARV_TB_STATUS_ID = 'care_tz_arv_visit.care_tz_arv_tb_status_id';

    /**
     * the column name for the care_tz_arv_case_id field
     */
    const COL_CARE_TZ_ARV_CASE_ID = 'care_tz_arv_visit.care_tz_arv_case_id';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_tz_arv_visit.encounter_nr';

    /**
     * the column name for the visit_date field
     */
    const COL_VISIT_DATE = 'care_tz_arv_visit.visit_date';

    /**
     * the column name for the care_tz_arv_status_id field
     */
    const COL_CARE_TZ_ARV_STATUS_ID = 'care_tz_arv_visit.care_tz_arv_status_id';

    /**
     * the column name for the weight field
     */
    const COL_WEIGHT = 'care_tz_arv_visit.weight';

    /**
     * the column name for the height field
     */
    const COL_HEIGHT = 'care_tz_arv_visit.height';

    /**
     * the column name for the clinical_stage field
     */
    const COL_CLINICAL_STAGE = 'care_tz_arv_visit.clinical_stage';

    /**
     * the column name for the pregnant field
     */
    const COL_PREGNANT = 'care_tz_arv_visit.pregnant';

    /**
     * the column name for the date_of_delivery field
     */
    const COL_DATE_OF_DELIVERY = 'care_tz_arv_visit.date_of_delivery';

    /**
     * the column name for the test_TB field
     */
    const COL_TEST_TB = 'care_tz_arv_visit.test_TB';

    /**
     * the column name for the cotrim field
     */
    const COL_COTRIM = 'care_tz_arv_visit.cotrim';

    /**
     * the column name for the test_INH field
     */
    const COL_TEST_INH = 'care_tz_arv_visit.test_INH';

    /**
     * the column name for the diflucan field
     */
    const COL_DIFLUCAN = 'care_tz_arv_visit.diflucan';

    /**
     * the column name for the nutrition_support field
     */
    const COL_NUTRITION_SUPPORT = 'care_tz_arv_visit.nutrition_support';

    /**
     * the column name for the next_visit_date field
     */
    const COL_NEXT_VISIT_DATE = 'care_tz_arv_visit.next_visit_date';

    /**
     * the column name for the other_problems field
     */
    const COL_OTHER_PROBLEMS = 'care_tz_arv_visit.other_problems';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_tz_arv_visit.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_tz_arv_visit.create_time';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tz_arv_visit.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_tz_arv_visit.modify_time';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_tz_arv_visit.history';

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
        self::TYPE_PHPNAME       => array('CareTzArvVisit2Id', 'CareTzArvRegistrationId', 'CareTzArvAdherCodeId', 'CareTzArvFunctionalStatusId', 'CareTzArvTbStatusId', 'CareTzArvCaseId', 'EncounterNr', 'VisitDate', 'CareTzArvStatusId', 'Weight', 'Height', 'ClinicalStage', 'Pregnant', 'DateOfDelivery', 'TestTb', 'Cotrim', 'TestInh', 'Diflucan', 'NutritionSupport', 'NextVisitDate', 'OtherProblems', 'CreateId', 'CreateTime', 'ModifyId', 'ModifyTime', 'History', ),
        self::TYPE_CAMELNAME     => array('careTzArvVisit2Id', 'careTzArvRegistrationId', 'careTzArvAdherCodeId', 'careTzArvFunctionalStatusId', 'careTzArvTbStatusId', 'careTzArvCaseId', 'encounterNr', 'visitDate', 'careTzArvStatusId', 'weight', 'height', 'clinicalStage', 'pregnant', 'dateOfDelivery', 'testTb', 'cotrim', 'testInh', 'diflucan', 'nutritionSupport', 'nextVisitDate', 'otherProblems', 'createId', 'createTime', 'modifyId', 'modifyTime', 'history', ),
        self::TYPE_COLNAME       => array(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_CASE_ID, CareTzArvVisitTableMap::COL_ENCOUNTER_NR, CareTzArvVisitTableMap::COL_VISIT_DATE, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_STATUS_ID, CareTzArvVisitTableMap::COL_WEIGHT, CareTzArvVisitTableMap::COL_HEIGHT, CareTzArvVisitTableMap::COL_CLINICAL_STAGE, CareTzArvVisitTableMap::COL_PREGNANT, CareTzArvVisitTableMap::COL_DATE_OF_DELIVERY, CareTzArvVisitTableMap::COL_TEST_TB, CareTzArvVisitTableMap::COL_COTRIM, CareTzArvVisitTableMap::COL_TEST_INH, CareTzArvVisitTableMap::COL_DIFLUCAN, CareTzArvVisitTableMap::COL_NUTRITION_SUPPORT, CareTzArvVisitTableMap::COL_NEXT_VISIT_DATE, CareTzArvVisitTableMap::COL_OTHER_PROBLEMS, CareTzArvVisitTableMap::COL_CREATE_ID, CareTzArvVisitTableMap::COL_CREATE_TIME, CareTzArvVisitTableMap::COL_MODIFY_ID, CareTzArvVisitTableMap::COL_MODIFY_TIME, CareTzArvVisitTableMap::COL_HISTORY, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_visit_2_id', 'care_tz_arv_registration_id', 'care_tz_arv_adher_code_id', 'care_tz_arv_functional_status_id', 'care_tz_arv_tb_status_id', 'care_tz_arv_case_id', 'encounter_nr', 'visit_date', 'care_tz_arv_status_id', 'weight', 'height', 'clinical_stage', 'pregnant', 'date_of_delivery', 'test_TB', 'cotrim', 'test_INH', 'diflucan', 'nutrition_support', 'next_visit_date', 'other_problems', 'create_id', 'create_time', 'modify_id', 'modify_time', 'history', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('CareTzArvVisit2Id' => 0, 'CareTzArvRegistrationId' => 1, 'CareTzArvAdherCodeId' => 2, 'CareTzArvFunctionalStatusId' => 3, 'CareTzArvTbStatusId' => 4, 'CareTzArvCaseId' => 5, 'EncounterNr' => 6, 'VisitDate' => 7, 'CareTzArvStatusId' => 8, 'Weight' => 9, 'Height' => 10, 'ClinicalStage' => 11, 'Pregnant' => 12, 'DateOfDelivery' => 13, 'TestTb' => 14, 'Cotrim' => 15, 'TestInh' => 16, 'Diflucan' => 17, 'NutritionSupport' => 18, 'NextVisitDate' => 19, 'OtherProblems' => 20, 'CreateId' => 21, 'CreateTime' => 22, 'ModifyId' => 23, 'ModifyTime' => 24, 'History' => 25, ),
        self::TYPE_CAMELNAME     => array('careTzArvVisit2Id' => 0, 'careTzArvRegistrationId' => 1, 'careTzArvAdherCodeId' => 2, 'careTzArvFunctionalStatusId' => 3, 'careTzArvTbStatusId' => 4, 'careTzArvCaseId' => 5, 'encounterNr' => 6, 'visitDate' => 7, 'careTzArvStatusId' => 8, 'weight' => 9, 'height' => 10, 'clinicalStage' => 11, 'pregnant' => 12, 'dateOfDelivery' => 13, 'testTb' => 14, 'cotrim' => 15, 'testInh' => 16, 'diflucan' => 17, 'nutritionSupport' => 18, 'nextVisitDate' => 19, 'otherProblems' => 20, 'createId' => 21, 'createTime' => 22, 'modifyId' => 23, 'modifyTime' => 24, 'history' => 25, ),
        self::TYPE_COLNAME       => array(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID => 0, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID => 1, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID => 2, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID => 3, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID => 4, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_CASE_ID => 5, CareTzArvVisitTableMap::COL_ENCOUNTER_NR => 6, CareTzArvVisitTableMap::COL_VISIT_DATE => 7, CareTzArvVisitTableMap::COL_CARE_TZ_ARV_STATUS_ID => 8, CareTzArvVisitTableMap::COL_WEIGHT => 9, CareTzArvVisitTableMap::COL_HEIGHT => 10, CareTzArvVisitTableMap::COL_CLINICAL_STAGE => 11, CareTzArvVisitTableMap::COL_PREGNANT => 12, CareTzArvVisitTableMap::COL_DATE_OF_DELIVERY => 13, CareTzArvVisitTableMap::COL_TEST_TB => 14, CareTzArvVisitTableMap::COL_COTRIM => 15, CareTzArvVisitTableMap::COL_TEST_INH => 16, CareTzArvVisitTableMap::COL_DIFLUCAN => 17, CareTzArvVisitTableMap::COL_NUTRITION_SUPPORT => 18, CareTzArvVisitTableMap::COL_NEXT_VISIT_DATE => 19, CareTzArvVisitTableMap::COL_OTHER_PROBLEMS => 20, CareTzArvVisitTableMap::COL_CREATE_ID => 21, CareTzArvVisitTableMap::COL_CREATE_TIME => 22, CareTzArvVisitTableMap::COL_MODIFY_ID => 23, CareTzArvVisitTableMap::COL_MODIFY_TIME => 24, CareTzArvVisitTableMap::COL_HISTORY => 25, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_visit_2_id' => 0, 'care_tz_arv_registration_id' => 1, 'care_tz_arv_adher_code_id' => 2, 'care_tz_arv_functional_status_id' => 3, 'care_tz_arv_tb_status_id' => 4, 'care_tz_arv_case_id' => 5, 'encounter_nr' => 6, 'visit_date' => 7, 'care_tz_arv_status_id' => 8, 'weight' => 9, 'height' => 10, 'clinical_stage' => 11, 'pregnant' => 12, 'date_of_delivery' => 13, 'test_TB' => 14, 'cotrim' => 15, 'test_INH' => 16, 'diflucan' => 17, 'nutrition_support' => 18, 'next_visit_date' => 19, 'other_problems' => 20, 'create_id' => 21, 'create_time' => 22, 'modify_id' => 23, 'modify_time' => 24, 'history' => 25, ),
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
        $this->setName('care_tz_arv_visit');
        $this->setPhpName('CareTzArvVisit');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzArvVisit');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('care_tz_arv_visit_2_id', 'CareTzArvVisit2Id', 'BIGINT', true, null, null);
        $this->addColumn('care_tz_arv_registration_id', 'CareTzArvRegistrationId', 'BIGINT', true, null, null);
        $this->addColumn('care_tz_arv_adher_code_id', 'CareTzArvAdherCodeId', 'BIGINT', true, null, null);
        $this->addColumn('care_tz_arv_functional_status_id', 'CareTzArvFunctionalStatusId', 'INTEGER', true, 10, null);
        $this->addColumn('care_tz_arv_tb_status_id', 'CareTzArvTbStatusId', 'BIGINT', true, null, null);
        $this->addColumn('care_tz_arv_case_id', 'CareTzArvCaseId', 'BIGINT', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'BIGINT', true, null, null);
        $this->addColumn('visit_date', 'VisitDate', 'TIMESTAMP', true, null, null);
        $this->addColumn('care_tz_arv_status_id', 'CareTzArvStatusId', 'BIGINT', true, null, -1);
        $this->addColumn('weight', 'Weight', 'DOUBLE', false, null, null);
        $this->addColumn('height', 'Height', 'DOUBLE', true, null, null);
        $this->addColumn('clinical_stage', 'ClinicalStage', 'TINYINT', true, 3, null);
        $this->addColumn('pregnant', 'Pregnant', 'BOOLEAN', true, 1, null);
        $this->addColumn('date_of_delivery', 'DateOfDelivery', 'TIMESTAMP', true, null, null);
        $this->addColumn('test_TB', 'TestTb', 'BOOLEAN', true, 1, true);
        $this->addColumn('cotrim', 'Cotrim', 'BOOLEAN', true, 1, true);
        $this->addColumn('test_INH', 'TestInh', 'BOOLEAN', true, 1, true);
        $this->addColumn('diflucan', 'Diflucan', 'BOOLEAN', true, 1, true);
        $this->addColumn('nutrition_support', 'NutritionSupport', 'BOOLEAN', true, 1, null);
        $this->addColumn('next_visit_date', 'NextVisitDate', 'DATE', true, null, null);
        $this->addColumn('other_problems', 'OtherProblems', 'VARCHAR', false, 80, null);
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, null);
        $this->addColumn('create_time', 'CreateTime', 'BIGINT', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', false, 35, null);
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', false, null, 'CURRENT_TIMESTAMP');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvVisit2Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvVisit2Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvVisit2Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvVisit2Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvVisit2Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvVisit2Id', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('CareTzArvVisit2Id', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzArvVisitTableMap::CLASS_DEFAULT : CareTzArvVisitTableMap::OM_CLASS;
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
     * @return array           (CareTzArvVisit object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzArvVisitTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzArvVisitTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzArvVisitTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzArvVisitTableMap::OM_CLASS;
            /** @var CareTzArvVisit $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzArvVisitTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzArvVisitTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzArvVisitTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzArvVisit $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzArvVisitTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_CASE_ID);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_VISIT_DATE);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_STATUS_ID);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_WEIGHT);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_HEIGHT);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_CLINICAL_STAGE);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_PREGNANT);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_DATE_OF_DELIVERY);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_TEST_TB);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_COTRIM);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_TEST_INH);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_DIFLUCAN);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_NUTRITION_SUPPORT);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_NEXT_VISIT_DATE);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_OTHER_PROBLEMS);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTzArvVisitTableMap::COL_HISTORY);
        } else {
            $criteria->addSelectColumn($alias . '.care_tz_arv_visit_2_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_registration_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_adher_code_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_functional_status_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_tb_status_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_case_id');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.visit_date');
            $criteria->addSelectColumn($alias . '.care_tz_arv_status_id');
            $criteria->addSelectColumn($alias . '.weight');
            $criteria->addSelectColumn($alias . '.height');
            $criteria->addSelectColumn($alias . '.clinical_stage');
            $criteria->addSelectColumn($alias . '.pregnant');
            $criteria->addSelectColumn($alias . '.date_of_delivery');
            $criteria->addSelectColumn($alias . '.test_TB');
            $criteria->addSelectColumn($alias . '.cotrim');
            $criteria->addSelectColumn($alias . '.test_INH');
            $criteria->addSelectColumn($alias . '.diflucan');
            $criteria->addSelectColumn($alias . '.nutrition_support');
            $criteria->addSelectColumn($alias . '.next_visit_date');
            $criteria->addSelectColumn($alias . '.other_problems');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzArvVisitTableMap::DATABASE_NAME)->getTable(CareTzArvVisitTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzArvVisitTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzArvVisitTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzArvVisitTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzArvVisit or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzArvVisit object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisitTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzArvVisit) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzArvVisitTableMap::DATABASE_NAME);
            $criteria->add(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzArvVisitQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzArvVisitTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzArvVisitTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_arv_visit table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzArvVisitQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzArvVisit or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzArvVisit object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisitTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzArvVisit object
        }

        if ($criteria->containsKey(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID) && $criteria->keyContainsValue(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID.')');
        }


        // Set the correct dbName
        $query = CareTzArvVisitQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzArvVisitTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzArvVisitTableMap::buildTableMap();
