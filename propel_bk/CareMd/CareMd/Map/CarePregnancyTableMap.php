<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CarePregnancy;
use CareMd\CareMd\CarePregnancyQuery;
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
 * This class defines the structure of the 'care_pregnancy' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CarePregnancyTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CarePregnancyTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_pregnancy';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CarePregnancy';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CarePregnancy';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 36;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 36;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_pregnancy.nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_pregnancy.encounter_nr';

    /**
     * the column name for the this_pregnancy_nr field
     */
    const COL_THIS_PREGNANCY_NR = 'care_pregnancy.this_pregnancy_nr';

    /**
     * the column name for the delivery_date field
     */
    const COL_DELIVERY_DATE = 'care_pregnancy.delivery_date';

    /**
     * the column name for the delivery_time field
     */
    const COL_DELIVERY_TIME = 'care_pregnancy.delivery_time';

    /**
     * the column name for the gravida field
     */
    const COL_GRAVIDA = 'care_pregnancy.gravida';

    /**
     * the column name for the para field
     */
    const COL_PARA = 'care_pregnancy.para';

    /**
     * the column name for the pregnancy_gestational_age field
     */
    const COL_PREGNANCY_GESTATIONAL_AGE = 'care_pregnancy.pregnancy_gestational_age';

    /**
     * the column name for the nr_of_fetuses field
     */
    const COL_NR_OF_FETUSES = 'care_pregnancy.nr_of_fetuses';

    /**
     * the column name for the child_encounter_nr field
     */
    const COL_CHILD_ENCOUNTER_NR = 'care_pregnancy.child_encounter_nr';

    /**
     * the column name for the is_booked field
     */
    const COL_IS_BOOKED = 'care_pregnancy.is_booked';

    /**
     * the column name for the vdrl field
     */
    const COL_VDRL = 'care_pregnancy.vdrl';

    /**
     * the column name for the rh field
     */
    const COL_RH = 'care_pregnancy.rh';

    /**
     * the column name for the delivery_mode field
     */
    const COL_DELIVERY_MODE = 'care_pregnancy.delivery_mode';

    /**
     * the column name for the delivery_by field
     */
    const COL_DELIVERY_BY = 'care_pregnancy.delivery_by';

    /**
     * the column name for the bp_systolic_high field
     */
    const COL_BP_SYSTOLIC_HIGH = 'care_pregnancy.bp_systolic_high';

    /**
     * the column name for the bp_diastolic_high field
     */
    const COL_BP_DIASTOLIC_HIGH = 'care_pregnancy.bp_diastolic_high';

    /**
     * the column name for the proteinuria field
     */
    const COL_PROTEINURIA = 'care_pregnancy.proteinuria';

    /**
     * the column name for the labour_duration field
     */
    const COL_LABOUR_DURATION = 'care_pregnancy.labour_duration';

    /**
     * the column name for the induction_method field
     */
    const COL_INDUCTION_METHOD = 'care_pregnancy.induction_method';

    /**
     * the column name for the induction_indication field
     */
    const COL_INDUCTION_INDICATION = 'care_pregnancy.induction_indication';

    /**
     * the column name for the anaesth_type_nr field
     */
    const COL_ANAESTH_TYPE_NR = 'care_pregnancy.anaesth_type_nr';

    /**
     * the column name for the is_epidural field
     */
    const COL_IS_EPIDURAL = 'care_pregnancy.is_epidural';

    /**
     * the column name for the complications field
     */
    const COL_COMPLICATIONS = 'care_pregnancy.complications';

    /**
     * the column name for the perineum field
     */
    const COL_PERINEUM = 'care_pregnancy.perineum';

    /**
     * the column name for the blood_loss field
     */
    const COL_BLOOD_LOSS = 'care_pregnancy.blood_loss';

    /**
     * the column name for the blood_loss_unit field
     */
    const COL_BLOOD_LOSS_UNIT = 'care_pregnancy.blood_loss_unit';

    /**
     * the column name for the is_retained_placenta field
     */
    const COL_IS_RETAINED_PLACENTA = 'care_pregnancy.is_retained_placenta';

    /**
     * the column name for the post_labour_condition field
     */
    const COL_POST_LABOUR_CONDITION = 'care_pregnancy.post_labour_condition';

    /**
     * the column name for the outcome field
     */
    const COL_OUTCOME = 'care_pregnancy.outcome';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_pregnancy.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_pregnancy.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_pregnancy.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_pregnancy.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_pregnancy.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_pregnancy.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'EncounterNr', 'ThisPregnancyNr', 'DeliveryDate', 'DeliveryTime', 'Gravida', 'Para', 'PregnancyGestationalAge', 'NrOfFetuses', 'ChildEncounterNr', 'IsBooked', 'Vdrl', 'Rh', 'DeliveryMode', 'DeliveryBy', 'BpSystolicHigh', 'BpDiastolicHigh', 'Proteinuria', 'LabourDuration', 'InductionMethod', 'InductionIndication', 'AnaesthTypeNr', 'IsEpidural', 'Complications', 'Perineum', 'BloodLoss', 'BloodLossUnit', 'IsRetainedPlacenta', 'PostLabourCondition', 'Outcome', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'encounterNr', 'thisPregnancyNr', 'deliveryDate', 'deliveryTime', 'gravida', 'para', 'pregnancyGestationalAge', 'nrOfFetuses', 'childEncounterNr', 'isBooked', 'vdrl', 'rh', 'deliveryMode', 'deliveryBy', 'bpSystolicHigh', 'bpDiastolicHigh', 'proteinuria', 'labourDuration', 'inductionMethod', 'inductionIndication', 'anaesthTypeNr', 'isEpidural', 'complications', 'perineum', 'bloodLoss', 'bloodLossUnit', 'isRetainedPlacenta', 'postLabourCondition', 'outcome', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CarePregnancyTableMap::COL_NR, CarePregnancyTableMap::COL_ENCOUNTER_NR, CarePregnancyTableMap::COL_THIS_PREGNANCY_NR, CarePregnancyTableMap::COL_DELIVERY_DATE, CarePregnancyTableMap::COL_DELIVERY_TIME, CarePregnancyTableMap::COL_GRAVIDA, CarePregnancyTableMap::COL_PARA, CarePregnancyTableMap::COL_PREGNANCY_GESTATIONAL_AGE, CarePregnancyTableMap::COL_NR_OF_FETUSES, CarePregnancyTableMap::COL_CHILD_ENCOUNTER_NR, CarePregnancyTableMap::COL_IS_BOOKED, CarePregnancyTableMap::COL_VDRL, CarePregnancyTableMap::COL_RH, CarePregnancyTableMap::COL_DELIVERY_MODE, CarePregnancyTableMap::COL_DELIVERY_BY, CarePregnancyTableMap::COL_BP_SYSTOLIC_HIGH, CarePregnancyTableMap::COL_BP_DIASTOLIC_HIGH, CarePregnancyTableMap::COL_PROTEINURIA, CarePregnancyTableMap::COL_LABOUR_DURATION, CarePregnancyTableMap::COL_INDUCTION_METHOD, CarePregnancyTableMap::COL_INDUCTION_INDICATION, CarePregnancyTableMap::COL_ANAESTH_TYPE_NR, CarePregnancyTableMap::COL_IS_EPIDURAL, CarePregnancyTableMap::COL_COMPLICATIONS, CarePregnancyTableMap::COL_PERINEUM, CarePregnancyTableMap::COL_BLOOD_LOSS, CarePregnancyTableMap::COL_BLOOD_LOSS_UNIT, CarePregnancyTableMap::COL_IS_RETAINED_PLACENTA, CarePregnancyTableMap::COL_POST_LABOUR_CONDITION, CarePregnancyTableMap::COL_OUTCOME, CarePregnancyTableMap::COL_STATUS, CarePregnancyTableMap::COL_HISTORY, CarePregnancyTableMap::COL_MODIFY_ID, CarePregnancyTableMap::COL_MODIFY_TIME, CarePregnancyTableMap::COL_CREATE_ID, CarePregnancyTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'encounter_nr', 'this_pregnancy_nr', 'delivery_date', 'delivery_time', 'gravida', 'para', 'pregnancy_gestational_age', 'nr_of_fetuses', 'child_encounter_nr', 'is_booked', 'vdrl', 'rh', 'delivery_mode', 'delivery_by', 'bp_systolic_high', 'bp_diastolic_high', 'proteinuria', 'labour_duration', 'induction_method', 'induction_indication', 'anaesth_type_nr', 'is_epidural', 'complications', 'perineum', 'blood_loss', 'blood_loss_unit', 'is_retained_placenta', 'post_labour_condition', 'outcome', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'EncounterNr' => 1, 'ThisPregnancyNr' => 2, 'DeliveryDate' => 3, 'DeliveryTime' => 4, 'Gravida' => 5, 'Para' => 6, 'PregnancyGestationalAge' => 7, 'NrOfFetuses' => 8, 'ChildEncounterNr' => 9, 'IsBooked' => 10, 'Vdrl' => 11, 'Rh' => 12, 'DeliveryMode' => 13, 'DeliveryBy' => 14, 'BpSystolicHigh' => 15, 'BpDiastolicHigh' => 16, 'Proteinuria' => 17, 'LabourDuration' => 18, 'InductionMethod' => 19, 'InductionIndication' => 20, 'AnaesthTypeNr' => 21, 'IsEpidural' => 22, 'Complications' => 23, 'Perineum' => 24, 'BloodLoss' => 25, 'BloodLossUnit' => 26, 'IsRetainedPlacenta' => 27, 'PostLabourCondition' => 28, 'Outcome' => 29, 'Status' => 30, 'History' => 31, 'ModifyId' => 32, 'ModifyTime' => 33, 'CreateId' => 34, 'CreateTime' => 35, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'encounterNr' => 1, 'thisPregnancyNr' => 2, 'deliveryDate' => 3, 'deliveryTime' => 4, 'gravida' => 5, 'para' => 6, 'pregnancyGestationalAge' => 7, 'nrOfFetuses' => 8, 'childEncounterNr' => 9, 'isBooked' => 10, 'vdrl' => 11, 'rh' => 12, 'deliveryMode' => 13, 'deliveryBy' => 14, 'bpSystolicHigh' => 15, 'bpDiastolicHigh' => 16, 'proteinuria' => 17, 'labourDuration' => 18, 'inductionMethod' => 19, 'inductionIndication' => 20, 'anaesthTypeNr' => 21, 'isEpidural' => 22, 'complications' => 23, 'perineum' => 24, 'bloodLoss' => 25, 'bloodLossUnit' => 26, 'isRetainedPlacenta' => 27, 'postLabourCondition' => 28, 'outcome' => 29, 'status' => 30, 'history' => 31, 'modifyId' => 32, 'modifyTime' => 33, 'createId' => 34, 'createTime' => 35, ),
        self::TYPE_COLNAME       => array(CarePregnancyTableMap::COL_NR => 0, CarePregnancyTableMap::COL_ENCOUNTER_NR => 1, CarePregnancyTableMap::COL_THIS_PREGNANCY_NR => 2, CarePregnancyTableMap::COL_DELIVERY_DATE => 3, CarePregnancyTableMap::COL_DELIVERY_TIME => 4, CarePregnancyTableMap::COL_GRAVIDA => 5, CarePregnancyTableMap::COL_PARA => 6, CarePregnancyTableMap::COL_PREGNANCY_GESTATIONAL_AGE => 7, CarePregnancyTableMap::COL_NR_OF_FETUSES => 8, CarePregnancyTableMap::COL_CHILD_ENCOUNTER_NR => 9, CarePregnancyTableMap::COL_IS_BOOKED => 10, CarePregnancyTableMap::COL_VDRL => 11, CarePregnancyTableMap::COL_RH => 12, CarePregnancyTableMap::COL_DELIVERY_MODE => 13, CarePregnancyTableMap::COL_DELIVERY_BY => 14, CarePregnancyTableMap::COL_BP_SYSTOLIC_HIGH => 15, CarePregnancyTableMap::COL_BP_DIASTOLIC_HIGH => 16, CarePregnancyTableMap::COL_PROTEINURIA => 17, CarePregnancyTableMap::COL_LABOUR_DURATION => 18, CarePregnancyTableMap::COL_INDUCTION_METHOD => 19, CarePregnancyTableMap::COL_INDUCTION_INDICATION => 20, CarePregnancyTableMap::COL_ANAESTH_TYPE_NR => 21, CarePregnancyTableMap::COL_IS_EPIDURAL => 22, CarePregnancyTableMap::COL_COMPLICATIONS => 23, CarePregnancyTableMap::COL_PERINEUM => 24, CarePregnancyTableMap::COL_BLOOD_LOSS => 25, CarePregnancyTableMap::COL_BLOOD_LOSS_UNIT => 26, CarePregnancyTableMap::COL_IS_RETAINED_PLACENTA => 27, CarePregnancyTableMap::COL_POST_LABOUR_CONDITION => 28, CarePregnancyTableMap::COL_OUTCOME => 29, CarePregnancyTableMap::COL_STATUS => 30, CarePregnancyTableMap::COL_HISTORY => 31, CarePregnancyTableMap::COL_MODIFY_ID => 32, CarePregnancyTableMap::COL_MODIFY_TIME => 33, CarePregnancyTableMap::COL_CREATE_ID => 34, CarePregnancyTableMap::COL_CREATE_TIME => 35, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'encounter_nr' => 1, 'this_pregnancy_nr' => 2, 'delivery_date' => 3, 'delivery_time' => 4, 'gravida' => 5, 'para' => 6, 'pregnancy_gestational_age' => 7, 'nr_of_fetuses' => 8, 'child_encounter_nr' => 9, 'is_booked' => 10, 'vdrl' => 11, 'rh' => 12, 'delivery_mode' => 13, 'delivery_by' => 14, 'bp_systolic_high' => 15, 'bp_diastolic_high' => 16, 'proteinuria' => 17, 'labour_duration' => 18, 'induction_method' => 19, 'induction_indication' => 20, 'anaesth_type_nr' => 21, 'is_epidural' => 22, 'complications' => 23, 'perineum' => 24, 'blood_loss' => 25, 'blood_loss_unit' => 26, 'is_retained_placenta' => 27, 'post_labour_condition' => 28, 'outcome' => 29, 'status' => 30, 'history' => 31, 'modify_id' => 32, 'modify_time' => 33, 'create_id' => 34, 'create_time' => 35, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
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
        $this->setName('care_pregnancy');
        $this->setPhpName('CarePregnancy');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CarePregnancy');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, 10, null);
        $this->addPrimaryKey('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('this_pregnancy_nr', 'ThisPregnancyNr', 'INTEGER', true, null, 0);
        $this->addColumn('delivery_date', 'DeliveryDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('delivery_time', 'DeliveryTime', 'TIME', true, null, '00:00:00');
        $this->addColumn('gravida', 'Gravida', 'TINYINT', false, 2, null);
        $this->addColumn('para', 'Para', 'TINYINT', false, 2, null);
        $this->addColumn('pregnancy_gestational_age', 'PregnancyGestationalAge', 'TINYINT', false, 2, null);
        $this->addColumn('nr_of_fetuses', 'NrOfFetuses', 'TINYINT', false, 2, null);
        $this->addColumn('child_encounter_nr', 'ChildEncounterNr', 'VARCHAR', true, 255, '');
        $this->addColumn('is_booked', 'IsBooked', 'BOOLEAN', true, 1, false);
        $this->addColumn('vdrl', 'Vdrl', 'CHAR', false, null, null);
        $this->addColumn('rh', 'Rh', 'BOOLEAN', false, 1, null);
        $this->addColumn('delivery_mode', 'DeliveryMode', 'TINYINT', true, 2, 0);
        $this->addColumn('delivery_by', 'DeliveryBy', 'VARCHAR', false, 60, null);
        $this->addColumn('bp_systolic_high', 'BpSystolicHigh', 'SMALLINT', false, 4, null);
        $this->addColumn('bp_diastolic_high', 'BpDiastolicHigh', 'SMALLINT', false, 4, null);
        $this->addColumn('proteinuria', 'Proteinuria', 'BOOLEAN', false, 1, null);
        $this->addColumn('labour_duration', 'LabourDuration', 'SMALLINT', false, 3, null);
        $this->addColumn('induction_method', 'InductionMethod', 'TINYINT', true, 2, 0);
        $this->addColumn('induction_indication', 'InductionIndication', 'VARCHAR', false, 125, null);
        $this->addColumn('anaesth_type_nr', 'AnaesthTypeNr', 'TINYINT', true, 2, 0);
        $this->addColumn('is_epidural', 'IsEpidural', 'CHAR', false, null, null);
        $this->addColumn('complications', 'Complications', 'VARCHAR', false, 255, null);
        $this->addColumn('perineum', 'Perineum', 'TINYINT', true, 2, 0);
        $this->addColumn('blood_loss', 'BloodLoss', 'FLOAT', false, 8, null);
        $this->addColumn('blood_loss_unit', 'BloodLossUnit', 'VARCHAR', false, 10, null);
        $this->addColumn('is_retained_placenta', 'IsRetainedPlacenta', 'CHAR', true, null, '');
        $this->addColumn('post_labour_condition', 'PostLabourCondition', 'VARCHAR', false, 35, null);
        $this->addColumn('outcome', 'Outcome', 'VARCHAR', true, 35, '');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CareMd\CareMd\CarePregnancy $obj A \CareMd\CareMd\CarePregnancy object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getNr() || is_scalar($obj->getNr()) || is_callable([$obj->getNr(), '__toString']) ? (string) $obj->getNr() : $obj->getNr()), (null === $obj->getEncounterNr() || is_scalar($obj->getEncounterNr()) || is_callable([$obj->getEncounterNr(), '__toString']) ? (string) $obj->getEncounterNr() : $obj->getEncounterNr())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \CareMd\CareMd\CarePregnancy object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CarePregnancy) {
                $key = serialize([(null === $value->getNr() || is_scalar($value->getNr()) || is_callable([$value->getNr(), '__toString']) ? (string) $value->getNr() : $value->getNr()), (null === $value->getEncounterNr() || is_scalar($value->getEncounterNr()) || is_callable([$value->getEncounterNr(), '__toString']) ? (string) $value->getEncounterNr() : $value->getEncounterNr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CarePregnancy object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? CarePregnancyTableMap::CLASS_DEFAULT : CarePregnancyTableMap::OM_CLASS;
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
     * @return array           (CarePregnancy object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CarePregnancyTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CarePregnancyTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CarePregnancyTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CarePregnancyTableMap::OM_CLASS;
            /** @var CarePregnancy $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CarePregnancyTableMap::addInstanceToPool($obj, $key);
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
            $key = CarePregnancyTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CarePregnancyTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CarePregnancy $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CarePregnancyTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_NR);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_THIS_PREGNANCY_NR);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_DELIVERY_DATE);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_DELIVERY_TIME);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_GRAVIDA);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_PARA);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_PREGNANCY_GESTATIONAL_AGE);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_NR_OF_FETUSES);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_CHILD_ENCOUNTER_NR);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_IS_BOOKED);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_VDRL);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_RH);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_DELIVERY_MODE);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_DELIVERY_BY);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_BP_SYSTOLIC_HIGH);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_BP_DIASTOLIC_HIGH);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_PROTEINURIA);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_LABOUR_DURATION);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_INDUCTION_METHOD);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_INDUCTION_INDICATION);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_ANAESTH_TYPE_NR);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_IS_EPIDURAL);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_COMPLICATIONS);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_PERINEUM);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_BLOOD_LOSS);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_BLOOD_LOSS_UNIT);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_IS_RETAINED_PLACENTA);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_POST_LABOUR_CONDITION);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_OUTCOME);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_STATUS);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CarePregnancyTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.this_pregnancy_nr');
            $criteria->addSelectColumn($alias . '.delivery_date');
            $criteria->addSelectColumn($alias . '.delivery_time');
            $criteria->addSelectColumn($alias . '.gravida');
            $criteria->addSelectColumn($alias . '.para');
            $criteria->addSelectColumn($alias . '.pregnancy_gestational_age');
            $criteria->addSelectColumn($alias . '.nr_of_fetuses');
            $criteria->addSelectColumn($alias . '.child_encounter_nr');
            $criteria->addSelectColumn($alias . '.is_booked');
            $criteria->addSelectColumn($alias . '.vdrl');
            $criteria->addSelectColumn($alias . '.rh');
            $criteria->addSelectColumn($alias . '.delivery_mode');
            $criteria->addSelectColumn($alias . '.delivery_by');
            $criteria->addSelectColumn($alias . '.bp_systolic_high');
            $criteria->addSelectColumn($alias . '.bp_diastolic_high');
            $criteria->addSelectColumn($alias . '.proteinuria');
            $criteria->addSelectColumn($alias . '.labour_duration');
            $criteria->addSelectColumn($alias . '.induction_method');
            $criteria->addSelectColumn($alias . '.induction_indication');
            $criteria->addSelectColumn($alias . '.anaesth_type_nr');
            $criteria->addSelectColumn($alias . '.is_epidural');
            $criteria->addSelectColumn($alias . '.complications');
            $criteria->addSelectColumn($alias . '.perineum');
            $criteria->addSelectColumn($alias . '.blood_loss');
            $criteria->addSelectColumn($alias . '.blood_loss_unit');
            $criteria->addSelectColumn($alias . '.is_retained_placenta');
            $criteria->addSelectColumn($alias . '.post_labour_condition');
            $criteria->addSelectColumn($alias . '.outcome');
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
        return Propel::getServiceContainer()->getDatabaseMap(CarePregnancyTableMap::DATABASE_NAME)->getTable(CarePregnancyTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CarePregnancyTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CarePregnancyTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CarePregnancyTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CarePregnancy or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CarePregnancy object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePregnancyTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CarePregnancy) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CarePregnancyTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CarePregnancyTableMap::COL_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CarePregnancyTableMap::COL_ENCOUNTER_NR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = CarePregnancyQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CarePregnancyTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CarePregnancyTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_pregnancy table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CarePregnancyQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CarePregnancy or Criteria object.
     *
     * @param mixed               $criteria Criteria or CarePregnancy object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePregnancyTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CarePregnancy object
        }

        if ($criteria->containsKey(CarePregnancyTableMap::COL_NR) && $criteria->keyContainsValue(CarePregnancyTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CarePregnancyTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CarePregnancyQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CarePregnancyTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CarePregnancyTableMap::buildTableMap();
