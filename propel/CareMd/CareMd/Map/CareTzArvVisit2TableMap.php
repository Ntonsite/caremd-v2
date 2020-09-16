<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzArvVisit2;
use CareMd\CareMd\CareTzArvVisit2Query;
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
 * This class defines the structure of the 'care_tz_arv_visit_2' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzArvVisit2TableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzArvVisit2TableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_arv_visit_2';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzArvVisit2';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzArvVisit2';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 27;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 27;

    /**
     * the column name for the care_tz_arv_visit_2_id field
     */
    const COL_CARE_TZ_ARV_VISIT_2_ID = 'care_tz_arv_visit_2.care_tz_arv_visit_2_id';

    /**
     * the column name for the care_tz_arv_registration_id field
     */
    const COL_CARE_TZ_ARV_REGISTRATION_ID = 'care_tz_arv_visit_2.care_tz_arv_registration_id';

    /**
     * the column name for the care_tz_arv_adher_code_id field
     */
    const COL_CARE_TZ_ARV_ADHER_CODE_ID = 'care_tz_arv_visit_2.care_tz_arv_adher_code_id';

    /**
     * the column name for the care_tz_arv_functional_status_id field
     */
    const COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID = 'care_tz_arv_visit_2.care_tz_arv_functional_status_id';

    /**
     * the column name for the care_tz_arv_tb_status_id field
     */
    const COL_CARE_TZ_ARV_TB_STATUS_ID = 'care_tz_arv_visit_2.care_tz_arv_tb_status_id';

    /**
     * the column name for the care_tz_arv_status_id field
     */
    const COL_CARE_TZ_ARV_STATUS_ID = 'care_tz_arv_visit_2.care_tz_arv_status_id';

    /**
     * the column name for the care_tz_arv_nutritional_status_id field
     */
    const COL_CARE_TZ_ARV_NUTRITIONAL_STATUS_ID = 'care_tz_arv_visit_2.care_tz_arv_nutritional_status_id';

    /**
     * the column name for the care_tz_arv_nutritional_supp_id field
     */
    const COL_CARE_TZ_ARV_NUTRITIONAL_SUPP_ID = 'care_tz_arv_visit_2.care_tz_arv_nutritional_supp_id';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_tz_arv_visit_2.encounter_nr';

    /**
     * the column name for the visit_date field
     */
    const COL_VISIT_DATE = 'care_tz_arv_visit_2.visit_date';

    /**
     * the column name for the care_tz_arv_visit_type_id field
     */
    const COL_CARE_TZ_ARV_VISIT_TYPE_ID = 'care_tz_arv_visit_2.care_tz_arv_visit_type_id';

    /**
     * the column name for the weight field
     */
    const COL_WEIGHT = 'care_tz_arv_visit_2.weight';

    /**
     * the column name for the height field
     */
    const COL_HEIGHT = 'care_tz_arv_visit_2.height';

    /**
     * the column name for the clinical_stage field
     */
    const COL_CLINICAL_STAGE = 'care_tz_arv_visit_2.clinical_stage';

    /**
     * the column name for the pregnant field
     */
    const COL_PREGNANT = 'care_tz_arv_visit_2.pregnant';

    /**
     * the column name for the date_of_delivery field
     */
    const COL_DATE_OF_DELIVERY = 'care_tz_arv_visit_2.date_of_delivery';

    /**
     * the column name for the family_planning_id field
     */
    const COL_FAMILY_PLANNING_ID = 'care_tz_arv_visit_2.family_planning_id';

    /**
     * the column name for the preg_clinic_id field
     */
    const COL_PREG_CLINIC_ID = 'care_tz_arv_visit_2.preg_clinic_id';

    /**
     * the column name for the cotrim field
     */
    const COL_COTRIM = 'care_tz_arv_visit_2.cotrim';

    /**
     * the column name for the diflucan field
     */
    const COL_DIFLUCAN = 'care_tz_arv_visit_2.diflucan';

    /**
     * the column name for the nutrition_support field
     */
    const COL_NUTRITION_SUPPORT = 'care_tz_arv_visit_2.nutrition_support';

    /**
     * the column name for the next_visit_date field
     */
    const COL_NEXT_VISIT_DATE = 'care_tz_arv_visit_2.next_visit_date';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_tz_arv_visit_2.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_tz_arv_visit_2.create_time';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tz_arv_visit_2.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_tz_arv_visit_2.modify_time';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_tz_arv_visit_2.history';

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
        self::TYPE_PHPNAME       => array('CareTzArvVisit2Id', 'CareTzArvRegistrationId', 'CareTzArvAdherCodeId', 'CareTzArvFunctionalStatusId', 'CareTzArvTbStatusId', 'CareTzArvStatusId', 'CareTzArvNutritionalStatusId', 'CareTzArvNutritionalSuppId', 'EncounterNr', 'VisitDate', 'CareTzArvVisitTypeId', 'Weight', 'Height', 'ClinicalStage', 'Pregnant', 'DateOfDelivery', 'FamilyPlanningId', 'PregClinicId', 'Cotrim', 'Diflucan', 'NutritionSupport', 'NextVisitDate', 'CreateId', 'CreateTime', 'ModifyId', 'ModifyTime', 'History', ),
        self::TYPE_CAMELNAME     => array('careTzArvVisit2Id', 'careTzArvRegistrationId', 'careTzArvAdherCodeId', 'careTzArvFunctionalStatusId', 'careTzArvTbStatusId', 'careTzArvStatusId', 'careTzArvNutritionalStatusId', 'careTzArvNutritionalSuppId', 'encounterNr', 'visitDate', 'careTzArvVisitTypeId', 'weight', 'height', 'clinicalStage', 'pregnant', 'dateOfDelivery', 'familyPlanningId', 'pregClinicId', 'cotrim', 'diflucan', 'nutritionSupport', 'nextVisitDate', 'createId', 'createTime', 'modifyId', 'modifyTime', 'history', ),
        self::TYPE_COLNAME       => array(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_STATUS_ID, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_STATUS_ID, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_SUPP_ID, CareTzArvVisit2TableMap::COL_ENCOUNTER_NR, CareTzArvVisit2TableMap::COL_VISIT_DATE, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID, CareTzArvVisit2TableMap::COL_WEIGHT, CareTzArvVisit2TableMap::COL_HEIGHT, CareTzArvVisit2TableMap::COL_CLINICAL_STAGE, CareTzArvVisit2TableMap::COL_PREGNANT, CareTzArvVisit2TableMap::COL_DATE_OF_DELIVERY, CareTzArvVisit2TableMap::COL_FAMILY_PLANNING_ID, CareTzArvVisit2TableMap::COL_PREG_CLINIC_ID, CareTzArvVisit2TableMap::COL_COTRIM, CareTzArvVisit2TableMap::COL_DIFLUCAN, CareTzArvVisit2TableMap::COL_NUTRITION_SUPPORT, CareTzArvVisit2TableMap::COL_NEXT_VISIT_DATE, CareTzArvVisit2TableMap::COL_CREATE_ID, CareTzArvVisit2TableMap::COL_CREATE_TIME, CareTzArvVisit2TableMap::COL_MODIFY_ID, CareTzArvVisit2TableMap::COL_MODIFY_TIME, CareTzArvVisit2TableMap::COL_HISTORY, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_visit_2_id', 'care_tz_arv_registration_id', 'care_tz_arv_adher_code_id', 'care_tz_arv_functional_status_id', 'care_tz_arv_tb_status_id', 'care_tz_arv_status_id', 'care_tz_arv_nutritional_status_id', 'care_tz_arv_nutritional_supp_id', 'encounter_nr', 'visit_date', 'care_tz_arv_visit_type_id', 'weight', 'height', 'clinical_stage', 'pregnant', 'date_of_delivery', 'family_planning_id', 'preg_clinic_id', 'cotrim', 'diflucan', 'nutrition_support', 'next_visit_date', 'create_id', 'create_time', 'modify_id', 'modify_time', 'history', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('CareTzArvVisit2Id' => 0, 'CareTzArvRegistrationId' => 1, 'CareTzArvAdherCodeId' => 2, 'CareTzArvFunctionalStatusId' => 3, 'CareTzArvTbStatusId' => 4, 'CareTzArvStatusId' => 5, 'CareTzArvNutritionalStatusId' => 6, 'CareTzArvNutritionalSuppId' => 7, 'EncounterNr' => 8, 'VisitDate' => 9, 'CareTzArvVisitTypeId' => 10, 'Weight' => 11, 'Height' => 12, 'ClinicalStage' => 13, 'Pregnant' => 14, 'DateOfDelivery' => 15, 'FamilyPlanningId' => 16, 'PregClinicId' => 17, 'Cotrim' => 18, 'Diflucan' => 19, 'NutritionSupport' => 20, 'NextVisitDate' => 21, 'CreateId' => 22, 'CreateTime' => 23, 'ModifyId' => 24, 'ModifyTime' => 25, 'History' => 26, ),
        self::TYPE_CAMELNAME     => array('careTzArvVisit2Id' => 0, 'careTzArvRegistrationId' => 1, 'careTzArvAdherCodeId' => 2, 'careTzArvFunctionalStatusId' => 3, 'careTzArvTbStatusId' => 4, 'careTzArvStatusId' => 5, 'careTzArvNutritionalStatusId' => 6, 'careTzArvNutritionalSuppId' => 7, 'encounterNr' => 8, 'visitDate' => 9, 'careTzArvVisitTypeId' => 10, 'weight' => 11, 'height' => 12, 'clinicalStage' => 13, 'pregnant' => 14, 'dateOfDelivery' => 15, 'familyPlanningId' => 16, 'pregClinicId' => 17, 'cotrim' => 18, 'diflucan' => 19, 'nutritionSupport' => 20, 'nextVisitDate' => 21, 'createId' => 22, 'createTime' => 23, 'modifyId' => 24, 'modifyTime' => 25, 'history' => 26, ),
        self::TYPE_COLNAME       => array(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID => 0, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_REGISTRATION_ID => 1, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID => 2, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID => 3, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_TB_STATUS_ID => 4, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_STATUS_ID => 5, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_STATUS_ID => 6, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_SUPP_ID => 7, CareTzArvVisit2TableMap::COL_ENCOUNTER_NR => 8, CareTzArvVisit2TableMap::COL_VISIT_DATE => 9, CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID => 10, CareTzArvVisit2TableMap::COL_WEIGHT => 11, CareTzArvVisit2TableMap::COL_HEIGHT => 12, CareTzArvVisit2TableMap::COL_CLINICAL_STAGE => 13, CareTzArvVisit2TableMap::COL_PREGNANT => 14, CareTzArvVisit2TableMap::COL_DATE_OF_DELIVERY => 15, CareTzArvVisit2TableMap::COL_FAMILY_PLANNING_ID => 16, CareTzArvVisit2TableMap::COL_PREG_CLINIC_ID => 17, CareTzArvVisit2TableMap::COL_COTRIM => 18, CareTzArvVisit2TableMap::COL_DIFLUCAN => 19, CareTzArvVisit2TableMap::COL_NUTRITION_SUPPORT => 20, CareTzArvVisit2TableMap::COL_NEXT_VISIT_DATE => 21, CareTzArvVisit2TableMap::COL_CREATE_ID => 22, CareTzArvVisit2TableMap::COL_CREATE_TIME => 23, CareTzArvVisit2TableMap::COL_MODIFY_ID => 24, CareTzArvVisit2TableMap::COL_MODIFY_TIME => 25, CareTzArvVisit2TableMap::COL_HISTORY => 26, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_visit_2_id' => 0, 'care_tz_arv_registration_id' => 1, 'care_tz_arv_adher_code_id' => 2, 'care_tz_arv_functional_status_id' => 3, 'care_tz_arv_tb_status_id' => 4, 'care_tz_arv_status_id' => 5, 'care_tz_arv_nutritional_status_id' => 6, 'care_tz_arv_nutritional_supp_id' => 7, 'encounter_nr' => 8, 'visit_date' => 9, 'care_tz_arv_visit_type_id' => 10, 'weight' => 11, 'height' => 12, 'clinical_stage' => 13, 'pregnant' => 14, 'date_of_delivery' => 15, 'family_planning_id' => 16, 'preg_clinic_id' => 17, 'cotrim' => 18, 'diflucan' => 19, 'nutrition_support' => 20, 'next_visit_date' => 21, 'create_id' => 22, 'create_time' => 23, 'modify_id' => 24, 'modify_time' => 25, 'history' => 26, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
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
        $this->setName('care_tz_arv_visit_2');
        $this->setPhpName('CareTzArvVisit2');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzArvVisit2');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('care_tz_arv_visit_2_id', 'CareTzArvVisit2Id', 'BIGINT', true, null, null);
        $this->addColumn('care_tz_arv_registration_id', 'CareTzArvRegistrationId', 'BIGINT', true, null, null);
        $this->addColumn('care_tz_arv_adher_code_id', 'CareTzArvAdherCodeId', 'BIGINT', false, null, null);
        $this->addColumn('care_tz_arv_functional_status_id', 'CareTzArvFunctionalStatusId', 'INTEGER', false, 10, null);
        $this->addColumn('care_tz_arv_tb_status_id', 'CareTzArvTbStatusId', 'BIGINT', false, null, null);
        $this->addColumn('care_tz_arv_status_id', 'CareTzArvStatusId', 'BIGINT', false, null, null);
        $this->addColumn('care_tz_arv_nutritional_status_id', 'CareTzArvNutritionalStatusId', 'INTEGER', true, 10, null);
        $this->addColumn('care_tz_arv_nutritional_supp_id', 'CareTzArvNutritionalSuppId', 'INTEGER', true, 10, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'BIGINT', true, null, null);
        $this->addColumn('visit_date', 'VisitDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('care_tz_arv_visit_type_id', 'CareTzArvVisitTypeId', 'INTEGER', true, 10, null);
        $this->addColumn('weight', 'Weight', 'DOUBLE', false, null, null);
        $this->addColumn('height', 'Height', 'DOUBLE', false, null, null);
        $this->addColumn('clinical_stage', 'ClinicalStage', 'TINYINT', false, 3, null);
        $this->addColumn('pregnant', 'Pregnant', 'BOOLEAN', false, 1, true);
        $this->addColumn('date_of_delivery', 'DateOfDelivery', 'DATE', false, null, null);
        $this->addColumn('family_planning_id', 'FamilyPlanningId', 'INTEGER', false, 10, null);
        $this->addColumn('preg_clinic_id', 'PregClinicId', 'VARCHAR', false, 7, null);
        $this->addColumn('cotrim', 'Cotrim', 'BOOLEAN', false, 1, true);
        $this->addColumn('diflucan', 'Diflucan', 'BOOLEAN', false, 1, true);
        $this->addColumn('nutrition_support', 'NutritionSupport', 'BOOLEAN', false, 1, null);
        $this->addColumn('next_visit_date', 'NextVisitDate', 'DATE', false, null, null);
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', false, 35, null);
        $this->addColumn('create_time', 'CreateTime', 'BIGINT', false, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', false, 35, null);
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', false, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
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
        return $withPrefix ? CareTzArvVisit2TableMap::CLASS_DEFAULT : CareTzArvVisit2TableMap::OM_CLASS;
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
     * @return array           (CareTzArvVisit2 object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzArvVisit2TableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzArvVisit2TableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzArvVisit2TableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzArvVisit2TableMap::OM_CLASS;
            /** @var CareTzArvVisit2 $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzArvVisit2TableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzArvVisit2TableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzArvVisit2TableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzArvVisit2 $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzArvVisit2TableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_REGISTRATION_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_TB_STATUS_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_STATUS_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_STATUS_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_NUTRITIONAL_SUPP_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_VISIT_DATE);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_WEIGHT);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_HEIGHT);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CLINICAL_STAGE);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_PREGNANT);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_DATE_OF_DELIVERY);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_FAMILY_PLANNING_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_PREG_CLINIC_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_COTRIM);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_DIFLUCAN);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_NUTRITION_SUPPORT);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_NEXT_VISIT_DATE);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTzArvVisit2TableMap::COL_HISTORY);
        } else {
            $criteria->addSelectColumn($alias . '.care_tz_arv_visit_2_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_registration_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_adher_code_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_functional_status_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_tb_status_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_status_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_nutritional_status_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_nutritional_supp_id');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.visit_date');
            $criteria->addSelectColumn($alias . '.care_tz_arv_visit_type_id');
            $criteria->addSelectColumn($alias . '.weight');
            $criteria->addSelectColumn($alias . '.height');
            $criteria->addSelectColumn($alias . '.clinical_stage');
            $criteria->addSelectColumn($alias . '.pregnant');
            $criteria->addSelectColumn($alias . '.date_of_delivery');
            $criteria->addSelectColumn($alias . '.family_planning_id');
            $criteria->addSelectColumn($alias . '.preg_clinic_id');
            $criteria->addSelectColumn($alias . '.cotrim');
            $criteria->addSelectColumn($alias . '.diflucan');
            $criteria->addSelectColumn($alias . '.nutrition_support');
            $criteria->addSelectColumn($alias . '.next_visit_date');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzArvVisit2TableMap::DATABASE_NAME)->getTable(CareTzArvVisit2TableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzArvVisit2TableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzArvVisit2TableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzArvVisit2TableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzArvVisit2 or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzArvVisit2 object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisit2TableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzArvVisit2) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzArvVisit2TableMap::DATABASE_NAME);
            $criteria->add(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzArvVisit2Query::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzArvVisit2TableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzArvVisit2TableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_arv_visit_2 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzArvVisit2Query::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzArvVisit2 or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzArvVisit2 object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisit2TableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzArvVisit2 object
        }

        if ($criteria->containsKey(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID) && $criteria->keyContainsValue(CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzArvVisit2TableMap::COL_CARE_TZ_ARV_VISIT_2_ID.')');
        }


        // Set the correct dbName
        $query = CareTzArvVisit2Query::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzArvVisit2TableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzArvVisit2TableMap::buildTableMap();
