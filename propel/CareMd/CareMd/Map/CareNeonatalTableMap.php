<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareNeonatal;
use CareMd\CareMd\CareNeonatalQuery;
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
 * This class defines the structure of the 'care_neonatal' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareNeonatalTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareNeonatalTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_neonatal';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareNeonatal';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareNeonatal';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 33;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 33;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_neonatal.nr';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_neonatal.pid';

    /**
     * the column name for the delivery_date field
     */
    const COL_DELIVERY_DATE = 'care_neonatal.delivery_date';

    /**
     * the column name for the parent_encounter_nr field
     */
    const COL_PARENT_ENCOUNTER_NR = 'care_neonatal.parent_encounter_nr';

    /**
     * the column name for the delivery_nr field
     */
    const COL_DELIVERY_NR = 'care_neonatal.delivery_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_neonatal.encounter_nr';

    /**
     * the column name for the delivery_place field
     */
    const COL_DELIVERY_PLACE = 'care_neonatal.delivery_place';

    /**
     * the column name for the delivery_mode field
     */
    const COL_DELIVERY_MODE = 'care_neonatal.delivery_mode';

    /**
     * the column name for the c_s_reason field
     */
    const COL_C_S_REASON = 'care_neonatal.c_s_reason';

    /**
     * the column name for the born_before_arrival field
     */
    const COL_BORN_BEFORE_ARRIVAL = 'care_neonatal.born_before_arrival';

    /**
     * the column name for the face_presentation field
     */
    const COL_FACE_PRESENTATION = 'care_neonatal.face_presentation';

    /**
     * the column name for the posterio_occipital_position field
     */
    const COL_POSTERIO_OCCIPITAL_POSITION = 'care_neonatal.posterio_occipital_position';

    /**
     * the column name for the delivery_rank field
     */
    const COL_DELIVERY_RANK = 'care_neonatal.delivery_rank';

    /**
     * the column name for the apgar_1_min field
     */
    const COL_APGAR_1_MIN = 'care_neonatal.apgar_1_min';

    /**
     * the column name for the apgar_5_min field
     */
    const COL_APGAR_5_MIN = 'care_neonatal.apgar_5_min';

    /**
     * the column name for the apgar_10_min field
     */
    const COL_APGAR_10_MIN = 'care_neonatal.apgar_10_min';

    /**
     * the column name for the time_to_spont_resp field
     */
    const COL_TIME_TO_SPONT_RESP = 'care_neonatal.time_to_spont_resp';

    /**
     * the column name for the condition field
     */
    const COL_CONDITION = 'care_neonatal.condition';

    /**
     * the column name for the weight field
     */
    const COL_WEIGHT = 'care_neonatal.weight';

    /**
     * the column name for the length field
     */
    const COL_LENGTH = 'care_neonatal.length';

    /**
     * the column name for the head_circumference field
     */
    const COL_HEAD_CIRCUMFERENCE = 'care_neonatal.head_circumference';

    /**
     * the column name for the scored_gestational_age field
     */
    const COL_SCORED_GESTATIONAL_AGE = 'care_neonatal.scored_gestational_age';

    /**
     * the column name for the feeding field
     */
    const COL_FEEDING = 'care_neonatal.feeding';

    /**
     * the column name for the congenital_abnormality field
     */
    const COL_CONGENITAL_ABNORMALITY = 'care_neonatal.congenital_abnormality';

    /**
     * the column name for the classification field
     */
    const COL_CLASSIFICATION = 'care_neonatal.classification';

    /**
     * the column name for the disease_category field
     */
    const COL_DISEASE_CATEGORY = 'care_neonatal.disease_category';

    /**
     * the column name for the outcome field
     */
    const COL_OUTCOME = 'care_neonatal.outcome';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_neonatal.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_neonatal.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_neonatal.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_neonatal.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_neonatal.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_neonatal.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'Pid', 'DeliveryDate', 'ParentEncounterNr', 'DeliveryNr', 'EncounterNr', 'DeliveryPlace', 'DeliveryMode', 'CSReason', 'BornBeforeArrival', 'FacePresentation', 'PosterioOccipitalPosition', 'DeliveryRank', 'Apgar1Min', 'Apgar5Min', 'Apgar10Min', 'TimeToSpontResp', 'Condition', 'Weight', 'Length', 'HeadCircumference', 'ScoredGestationalAge', 'Feeding', 'CongenitalAbnormality', 'Classification', 'DiseaseCategory', 'Outcome', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'pid', 'deliveryDate', 'parentEncounterNr', 'deliveryNr', 'encounterNr', 'deliveryPlace', 'deliveryMode', 'cSReason', 'bornBeforeArrival', 'facePresentation', 'posterioOccipitalPosition', 'deliveryRank', 'apgar1Min', 'apgar5Min', 'apgar10Min', 'timeToSpontResp', 'condition', 'weight', 'length', 'headCircumference', 'scoredGestationalAge', 'feeding', 'congenitalAbnormality', 'classification', 'diseaseCategory', 'outcome', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareNeonatalTableMap::COL_NR, CareNeonatalTableMap::COL_PID, CareNeonatalTableMap::COL_DELIVERY_DATE, CareNeonatalTableMap::COL_PARENT_ENCOUNTER_NR, CareNeonatalTableMap::COL_DELIVERY_NR, CareNeonatalTableMap::COL_ENCOUNTER_NR, CareNeonatalTableMap::COL_DELIVERY_PLACE, CareNeonatalTableMap::COL_DELIVERY_MODE, CareNeonatalTableMap::COL_C_S_REASON, CareNeonatalTableMap::COL_BORN_BEFORE_ARRIVAL, CareNeonatalTableMap::COL_FACE_PRESENTATION, CareNeonatalTableMap::COL_POSTERIO_OCCIPITAL_POSITION, CareNeonatalTableMap::COL_DELIVERY_RANK, CareNeonatalTableMap::COL_APGAR_1_MIN, CareNeonatalTableMap::COL_APGAR_5_MIN, CareNeonatalTableMap::COL_APGAR_10_MIN, CareNeonatalTableMap::COL_TIME_TO_SPONT_RESP, CareNeonatalTableMap::COL_CONDITION, CareNeonatalTableMap::COL_WEIGHT, CareNeonatalTableMap::COL_LENGTH, CareNeonatalTableMap::COL_HEAD_CIRCUMFERENCE, CareNeonatalTableMap::COL_SCORED_GESTATIONAL_AGE, CareNeonatalTableMap::COL_FEEDING, CareNeonatalTableMap::COL_CONGENITAL_ABNORMALITY, CareNeonatalTableMap::COL_CLASSIFICATION, CareNeonatalTableMap::COL_DISEASE_CATEGORY, CareNeonatalTableMap::COL_OUTCOME, CareNeonatalTableMap::COL_STATUS, CareNeonatalTableMap::COL_HISTORY, CareNeonatalTableMap::COL_MODIFY_ID, CareNeonatalTableMap::COL_MODIFY_TIME, CareNeonatalTableMap::COL_CREATE_ID, CareNeonatalTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'pid', 'delivery_date', 'parent_encounter_nr', 'delivery_nr', 'encounter_nr', 'delivery_place', 'delivery_mode', 'c_s_reason', 'born_before_arrival', 'face_presentation', 'posterio_occipital_position', 'delivery_rank', 'apgar_1_min', 'apgar_5_min', 'apgar_10_min', 'time_to_spont_resp', 'condition', 'weight', 'length', 'head_circumference', 'scored_gestational_age', 'feeding', 'congenital_abnormality', 'classification', 'disease_category', 'outcome', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'Pid' => 1, 'DeliveryDate' => 2, 'ParentEncounterNr' => 3, 'DeliveryNr' => 4, 'EncounterNr' => 5, 'DeliveryPlace' => 6, 'DeliveryMode' => 7, 'CSReason' => 8, 'BornBeforeArrival' => 9, 'FacePresentation' => 10, 'PosterioOccipitalPosition' => 11, 'DeliveryRank' => 12, 'Apgar1Min' => 13, 'Apgar5Min' => 14, 'Apgar10Min' => 15, 'TimeToSpontResp' => 16, 'Condition' => 17, 'Weight' => 18, 'Length' => 19, 'HeadCircumference' => 20, 'ScoredGestationalAge' => 21, 'Feeding' => 22, 'CongenitalAbnormality' => 23, 'Classification' => 24, 'DiseaseCategory' => 25, 'Outcome' => 26, 'Status' => 27, 'History' => 28, 'ModifyId' => 29, 'ModifyTime' => 30, 'CreateId' => 31, 'CreateTime' => 32, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'pid' => 1, 'deliveryDate' => 2, 'parentEncounterNr' => 3, 'deliveryNr' => 4, 'encounterNr' => 5, 'deliveryPlace' => 6, 'deliveryMode' => 7, 'cSReason' => 8, 'bornBeforeArrival' => 9, 'facePresentation' => 10, 'posterioOccipitalPosition' => 11, 'deliveryRank' => 12, 'apgar1Min' => 13, 'apgar5Min' => 14, 'apgar10Min' => 15, 'timeToSpontResp' => 16, 'condition' => 17, 'weight' => 18, 'length' => 19, 'headCircumference' => 20, 'scoredGestationalAge' => 21, 'feeding' => 22, 'congenitalAbnormality' => 23, 'classification' => 24, 'diseaseCategory' => 25, 'outcome' => 26, 'status' => 27, 'history' => 28, 'modifyId' => 29, 'modifyTime' => 30, 'createId' => 31, 'createTime' => 32, ),
        self::TYPE_COLNAME       => array(CareNeonatalTableMap::COL_NR => 0, CareNeonatalTableMap::COL_PID => 1, CareNeonatalTableMap::COL_DELIVERY_DATE => 2, CareNeonatalTableMap::COL_PARENT_ENCOUNTER_NR => 3, CareNeonatalTableMap::COL_DELIVERY_NR => 4, CareNeonatalTableMap::COL_ENCOUNTER_NR => 5, CareNeonatalTableMap::COL_DELIVERY_PLACE => 6, CareNeonatalTableMap::COL_DELIVERY_MODE => 7, CareNeonatalTableMap::COL_C_S_REASON => 8, CareNeonatalTableMap::COL_BORN_BEFORE_ARRIVAL => 9, CareNeonatalTableMap::COL_FACE_PRESENTATION => 10, CareNeonatalTableMap::COL_POSTERIO_OCCIPITAL_POSITION => 11, CareNeonatalTableMap::COL_DELIVERY_RANK => 12, CareNeonatalTableMap::COL_APGAR_1_MIN => 13, CareNeonatalTableMap::COL_APGAR_5_MIN => 14, CareNeonatalTableMap::COL_APGAR_10_MIN => 15, CareNeonatalTableMap::COL_TIME_TO_SPONT_RESP => 16, CareNeonatalTableMap::COL_CONDITION => 17, CareNeonatalTableMap::COL_WEIGHT => 18, CareNeonatalTableMap::COL_LENGTH => 19, CareNeonatalTableMap::COL_HEAD_CIRCUMFERENCE => 20, CareNeonatalTableMap::COL_SCORED_GESTATIONAL_AGE => 21, CareNeonatalTableMap::COL_FEEDING => 22, CareNeonatalTableMap::COL_CONGENITAL_ABNORMALITY => 23, CareNeonatalTableMap::COL_CLASSIFICATION => 24, CareNeonatalTableMap::COL_DISEASE_CATEGORY => 25, CareNeonatalTableMap::COL_OUTCOME => 26, CareNeonatalTableMap::COL_STATUS => 27, CareNeonatalTableMap::COL_HISTORY => 28, CareNeonatalTableMap::COL_MODIFY_ID => 29, CareNeonatalTableMap::COL_MODIFY_TIME => 30, CareNeonatalTableMap::COL_CREATE_ID => 31, CareNeonatalTableMap::COL_CREATE_TIME => 32, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'pid' => 1, 'delivery_date' => 2, 'parent_encounter_nr' => 3, 'delivery_nr' => 4, 'encounter_nr' => 5, 'delivery_place' => 6, 'delivery_mode' => 7, 'c_s_reason' => 8, 'born_before_arrival' => 9, 'face_presentation' => 10, 'posterio_occipital_position' => 11, 'delivery_rank' => 12, 'apgar_1_min' => 13, 'apgar_5_min' => 14, 'apgar_10_min' => 15, 'time_to_spont_resp' => 16, 'condition' => 17, 'weight' => 18, 'length' => 19, 'head_circumference' => 20, 'scored_gestational_age' => 21, 'feeding' => 22, 'congenital_abnormality' => 23, 'classification' => 24, 'disease_category' => 25, 'outcome' => 26, 'status' => 27, 'history' => 28, 'modify_id' => 29, 'modify_time' => 30, 'create_id' => 31, 'create_time' => 32, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
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
        $this->setName('care_neonatal');
        $this->setPhpName('CareNeonatal');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareNeonatal');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('pid', 'Pid', 'INTEGER', true, null, 0);
        $this->addColumn('delivery_date', 'DeliveryDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('parent_encounter_nr', 'ParentEncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('delivery_nr', 'DeliveryNr', 'TINYINT', true, null, 0);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('delivery_place', 'DeliveryPlace', 'VARCHAR', true, 60, '');
        $this->addColumn('delivery_mode', 'DeliveryMode', 'TINYINT', true, 2, 0);
        $this->addColumn('c_s_reason', 'CSReason', 'LONGVARCHAR', false, null, null);
        $this->addColumn('born_before_arrival', 'BornBeforeArrival', 'BOOLEAN', false, 1, false);
        $this->addColumn('face_presentation', 'FacePresentation', 'BOOLEAN', true, 1, false);
        $this->addColumn('posterio_occipital_position', 'PosterioOccipitalPosition', 'BOOLEAN', true, 1, false);
        $this->addColumn('delivery_rank', 'DeliveryRank', 'TINYINT', true, 2, 1);
        $this->addColumn('apgar_1_min', 'Apgar1Min', 'TINYINT', true, null, 0);
        $this->addColumn('apgar_5_min', 'Apgar5Min', 'TINYINT', true, null, 0);
        $this->addColumn('apgar_10_min', 'Apgar10Min', 'TINYINT', true, null, 0);
        $this->addColumn('time_to_spont_resp', 'TimeToSpontResp', 'TINYINT', false, 2, null);
        $this->addColumn('condition', 'Condition', 'VARCHAR', false, 60, '0');
        $this->addColumn('weight', 'Weight', 'FLOAT', false, 8, null);
        $this->addColumn('length', 'Length', 'FLOAT', false, 8, null);
        $this->addColumn('head_circumference', 'HeadCircumference', 'FLOAT', false, 8, null);
        $this->addColumn('scored_gestational_age', 'ScoredGestationalAge', 'FLOAT', false, 4, null);
        $this->addColumn('feeding', 'Feeding', 'TINYINT', true, null, 0);
        $this->addColumn('congenital_abnormality', 'CongenitalAbnormality', 'VARCHAR', true, 125, '');
        $this->addColumn('classification', 'Classification', 'VARCHAR', true, 255, '0');
        $this->addColumn('disease_category', 'DiseaseCategory', 'TINYINT', true, 2, 0);
        $this->addColumn('outcome', 'Outcome', 'TINYINT', true, 2, 0);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareNeonatalTableMap::CLASS_DEFAULT : CareNeonatalTableMap::OM_CLASS;
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
     * @return array           (CareNeonatal object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareNeonatalTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareNeonatalTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareNeonatalTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareNeonatalTableMap::OM_CLASS;
            /** @var CareNeonatal $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareNeonatalTableMap::addInstanceToPool($obj, $key);
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
            $key = CareNeonatalTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareNeonatalTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareNeonatal $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareNeonatalTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_NR);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_PID);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_DELIVERY_DATE);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_PARENT_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_DELIVERY_NR);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_DELIVERY_PLACE);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_DELIVERY_MODE);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_C_S_REASON);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_BORN_BEFORE_ARRIVAL);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_FACE_PRESENTATION);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_POSTERIO_OCCIPITAL_POSITION);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_DELIVERY_RANK);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_APGAR_1_MIN);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_APGAR_5_MIN);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_APGAR_10_MIN);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_TIME_TO_SPONT_RESP);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_CONDITION);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_WEIGHT);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_LENGTH);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_HEAD_CIRCUMFERENCE);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_SCORED_GESTATIONAL_AGE);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_FEEDING);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_CONGENITAL_ABNORMALITY);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_CLASSIFICATION);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_DISEASE_CATEGORY);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_OUTCOME);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareNeonatalTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.delivery_date');
            $criteria->addSelectColumn($alias . '.parent_encounter_nr');
            $criteria->addSelectColumn($alias . '.delivery_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.delivery_place');
            $criteria->addSelectColumn($alias . '.delivery_mode');
            $criteria->addSelectColumn($alias . '.c_s_reason');
            $criteria->addSelectColumn($alias . '.born_before_arrival');
            $criteria->addSelectColumn($alias . '.face_presentation');
            $criteria->addSelectColumn($alias . '.posterio_occipital_position');
            $criteria->addSelectColumn($alias . '.delivery_rank');
            $criteria->addSelectColumn($alias . '.apgar_1_min');
            $criteria->addSelectColumn($alias . '.apgar_5_min');
            $criteria->addSelectColumn($alias . '.apgar_10_min');
            $criteria->addSelectColumn($alias . '.time_to_spont_resp');
            $criteria->addSelectColumn($alias . '.condition');
            $criteria->addSelectColumn($alias . '.weight');
            $criteria->addSelectColumn($alias . '.length');
            $criteria->addSelectColumn($alias . '.head_circumference');
            $criteria->addSelectColumn($alias . '.scored_gestational_age');
            $criteria->addSelectColumn($alias . '.feeding');
            $criteria->addSelectColumn($alias . '.congenital_abnormality');
            $criteria->addSelectColumn($alias . '.classification');
            $criteria->addSelectColumn($alias . '.disease_category');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareNeonatalTableMap::DATABASE_NAME)->getTable(CareNeonatalTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareNeonatalTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareNeonatalTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareNeonatalTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareNeonatal or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareNeonatal object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareNeonatalTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareNeonatal) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareNeonatalTableMap::DATABASE_NAME);
            $criteria->add(CareNeonatalTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareNeonatalQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareNeonatalTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareNeonatalTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_neonatal table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareNeonatalQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareNeonatal or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareNeonatal object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareNeonatalTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareNeonatal object
        }

        if ($criteria->containsKey(CareNeonatalTableMap::COL_NR) && $criteria->keyContainsValue(CareNeonatalTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareNeonatalTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareNeonatalQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareNeonatalTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareNeonatalTableMap::buildTableMap();
