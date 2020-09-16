<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareOpMedDoc;
use CareMd\CareMd\CareOpMedDocQuery;
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
 * This class defines the structure of the 'care_op_med_doc' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareOpMedDocTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareOpMedDocTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_op_med_doc';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareOpMedDoc';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareOpMedDoc';

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
     * the column name for the nr field
     */
    const COL_NR = 'care_op_med_doc.nr';

    /**
     * the column name for the op_date field
     */
    const COL_OP_DATE = 'care_op_med_doc.op_date';

    /**
     * the column name for the operator field
     */
    const COL_OPERATOR = 'care_op_med_doc.operator';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_op_med_doc.encounter_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_op_med_doc.dept_nr';

    /**
     * the column name for the diagnosis field
     */
    const COL_DIAGNOSIS = 'care_op_med_doc.diagnosis';

    /**
     * the column name for the localize field
     */
    const COL_LOCALIZE = 'care_op_med_doc.localize';

    /**
     * the column name for the therapy field
     */
    const COL_THERAPY = 'care_op_med_doc.therapy';

    /**
     * the column name for the special field
     */
    const COL_SPECIAL = 'care_op_med_doc.special';

    /**
     * the column name for the class_s field
     */
    const COL_CLASS_S = 'care_op_med_doc.class_s';

    /**
     * the column name for the class_l field
     */
    const COL_CLASS_L = 'care_op_med_doc.class_l';

    /**
     * the column name for the op_start field
     */
    const COL_OP_START = 'care_op_med_doc.op_start';

    /**
     * the column name for the op_end field
     */
    const COL_OP_END = 'care_op_med_doc.op_end';

    /**
     * the column name for the anasthetist field
     */
    const COL_ANASTHETIST = 'care_op_med_doc.anasthetist';

    /**
     * the column name for the scrub_nurse field
     */
    const COL_SCRUB_NURSE = 'care_op_med_doc.scrub_nurse';

    /**
     * the column name for the assistant field
     */
    const COL_ASSISTANT = 'care_op_med_doc.assistant';

    /**
     * the column name for the anaesthesia_type field
     */
    const COL_ANAESTHESIA_TYPE = 'care_op_med_doc.anaesthesia_type';

    /**
     * the column name for the postorder field
     */
    const COL_POSTORDER = 'care_op_med_doc.postorder';

    /**
     * the column name for the indication field
     */
    const COL_INDICATION = 'care_op_med_doc.indication';

    /**
     * the column name for the procedure_or field
     */
    const COL_PROCEDURE_OR = 'care_op_med_doc.procedure_or';

    /**
     * the column name for the op_room field
     */
    const COL_OP_ROOM = 'care_op_med_doc.op_room';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_op_med_doc.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_op_med_doc.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_op_med_doc.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_op_med_doc.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_op_med_doc.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_op_med_doc.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'OpDate', 'Operator', 'EncounterNr', 'DeptNr', 'Diagnosis', 'Localize', 'Therapy', 'Special', 'ClassS', 'ClassL', 'OpStart', 'OpEnd', 'Anasthetist', 'ScrubNurse', 'Assistant', 'AnaesthesiaType', 'Postorder', 'Indication', 'ProcedureOr', 'OpRoom', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'opDate', 'operator', 'encounterNr', 'deptNr', 'diagnosis', 'localize', 'therapy', 'special', 'classS', 'classL', 'opStart', 'opEnd', 'anasthetist', 'scrubNurse', 'assistant', 'anaesthesiaType', 'postorder', 'indication', 'procedureOr', 'opRoom', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareOpMedDocTableMap::COL_NR, CareOpMedDocTableMap::COL_OP_DATE, CareOpMedDocTableMap::COL_OPERATOR, CareOpMedDocTableMap::COL_ENCOUNTER_NR, CareOpMedDocTableMap::COL_DEPT_NR, CareOpMedDocTableMap::COL_DIAGNOSIS, CareOpMedDocTableMap::COL_LOCALIZE, CareOpMedDocTableMap::COL_THERAPY, CareOpMedDocTableMap::COL_SPECIAL, CareOpMedDocTableMap::COL_CLASS_S, CareOpMedDocTableMap::COL_CLASS_L, CareOpMedDocTableMap::COL_OP_START, CareOpMedDocTableMap::COL_OP_END, CareOpMedDocTableMap::COL_ANASTHETIST, CareOpMedDocTableMap::COL_SCRUB_NURSE, CareOpMedDocTableMap::COL_ASSISTANT, CareOpMedDocTableMap::COL_ANAESTHESIA_TYPE, CareOpMedDocTableMap::COL_POSTORDER, CareOpMedDocTableMap::COL_INDICATION, CareOpMedDocTableMap::COL_PROCEDURE_OR, CareOpMedDocTableMap::COL_OP_ROOM, CareOpMedDocTableMap::COL_STATUS, CareOpMedDocTableMap::COL_HISTORY, CareOpMedDocTableMap::COL_MODIFY_ID, CareOpMedDocTableMap::COL_MODIFY_TIME, CareOpMedDocTableMap::COL_CREATE_ID, CareOpMedDocTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'op_date', 'operator', 'encounter_nr', 'dept_nr', 'diagnosis', 'localize', 'therapy', 'special', 'class_s', 'class_l', 'op_start', 'op_end', 'anasthetist', 'scrub_nurse', 'assistant', 'anaesthesia_type', 'postorder', 'indication', 'procedure_or', 'op_room', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'OpDate' => 1, 'Operator' => 2, 'EncounterNr' => 3, 'DeptNr' => 4, 'Diagnosis' => 5, 'Localize' => 6, 'Therapy' => 7, 'Special' => 8, 'ClassS' => 9, 'ClassL' => 10, 'OpStart' => 11, 'OpEnd' => 12, 'Anasthetist' => 13, 'ScrubNurse' => 14, 'Assistant' => 15, 'AnaesthesiaType' => 16, 'Postorder' => 17, 'Indication' => 18, 'ProcedureOr' => 19, 'OpRoom' => 20, 'Status' => 21, 'History' => 22, 'ModifyId' => 23, 'ModifyTime' => 24, 'CreateId' => 25, 'CreateTime' => 26, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'opDate' => 1, 'operator' => 2, 'encounterNr' => 3, 'deptNr' => 4, 'diagnosis' => 5, 'localize' => 6, 'therapy' => 7, 'special' => 8, 'classS' => 9, 'classL' => 10, 'opStart' => 11, 'opEnd' => 12, 'anasthetist' => 13, 'scrubNurse' => 14, 'assistant' => 15, 'anaesthesiaType' => 16, 'postorder' => 17, 'indication' => 18, 'procedureOr' => 19, 'opRoom' => 20, 'status' => 21, 'history' => 22, 'modifyId' => 23, 'modifyTime' => 24, 'createId' => 25, 'createTime' => 26, ),
        self::TYPE_COLNAME       => array(CareOpMedDocTableMap::COL_NR => 0, CareOpMedDocTableMap::COL_OP_DATE => 1, CareOpMedDocTableMap::COL_OPERATOR => 2, CareOpMedDocTableMap::COL_ENCOUNTER_NR => 3, CareOpMedDocTableMap::COL_DEPT_NR => 4, CareOpMedDocTableMap::COL_DIAGNOSIS => 5, CareOpMedDocTableMap::COL_LOCALIZE => 6, CareOpMedDocTableMap::COL_THERAPY => 7, CareOpMedDocTableMap::COL_SPECIAL => 8, CareOpMedDocTableMap::COL_CLASS_S => 9, CareOpMedDocTableMap::COL_CLASS_L => 10, CareOpMedDocTableMap::COL_OP_START => 11, CareOpMedDocTableMap::COL_OP_END => 12, CareOpMedDocTableMap::COL_ANASTHETIST => 13, CareOpMedDocTableMap::COL_SCRUB_NURSE => 14, CareOpMedDocTableMap::COL_ASSISTANT => 15, CareOpMedDocTableMap::COL_ANAESTHESIA_TYPE => 16, CareOpMedDocTableMap::COL_POSTORDER => 17, CareOpMedDocTableMap::COL_INDICATION => 18, CareOpMedDocTableMap::COL_PROCEDURE_OR => 19, CareOpMedDocTableMap::COL_OP_ROOM => 20, CareOpMedDocTableMap::COL_STATUS => 21, CareOpMedDocTableMap::COL_HISTORY => 22, CareOpMedDocTableMap::COL_MODIFY_ID => 23, CareOpMedDocTableMap::COL_MODIFY_TIME => 24, CareOpMedDocTableMap::COL_CREATE_ID => 25, CareOpMedDocTableMap::COL_CREATE_TIME => 26, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'op_date' => 1, 'operator' => 2, 'encounter_nr' => 3, 'dept_nr' => 4, 'diagnosis' => 5, 'localize' => 6, 'therapy' => 7, 'special' => 8, 'class_s' => 9, 'class_l' => 10, 'op_start' => 11, 'op_end' => 12, 'anasthetist' => 13, 'scrub_nurse' => 14, 'assistant' => 15, 'anaesthesia_type' => 16, 'postorder' => 17, 'indication' => 18, 'procedure_or' => 19, 'op_room' => 20, 'status' => 21, 'history' => 22, 'modify_id' => 23, 'modify_time' => 24, 'create_id' => 25, 'create_time' => 26, ),
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
        $this->setName('care_op_med_doc');
        $this->setPhpName('CareOpMedDoc');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareOpMedDoc');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'BIGINT', true, null, null);
        $this->addColumn('op_date', 'OpDate', 'VARCHAR', true, 12, '');
        $this->addColumn('operator', 'Operator', 'VARCHAR', true, 255, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('diagnosis', 'Diagnosis', 'LONGVARCHAR', true, null, null);
        $this->addColumn('localize', 'Localize', 'LONGVARCHAR', true, null, null);
        $this->addColumn('therapy', 'Therapy', 'LONGVARCHAR', true, null, null);
        $this->addColumn('special', 'Special', 'LONGVARCHAR', true, null, null);
        $this->addColumn('class_s', 'ClassS', 'TINYINT', true, null, 0);
        $this->addColumn('class_l', 'ClassL', 'TINYINT', true, null, 0);
        $this->addColumn('op_start', 'OpStart', 'VARCHAR', true, 8, '');
        $this->addColumn('op_end', 'OpEnd', 'VARCHAR', true, 8, '');
        $this->addColumn('anasthetist', 'Anasthetist', 'VARCHAR', true, 20, null);
        $this->addColumn('scrub_nurse', 'ScrubNurse', 'VARCHAR', true, 70, '');
        $this->addColumn('assistant', 'Assistant', 'VARCHAR', true, 20, null);
        $this->addColumn('anaesthesia_type', 'AnaesthesiaType', 'VARCHAR', true, 20, null);
        $this->addColumn('postorder', 'Postorder', 'LONGVARCHAR', true, null, null);
        $this->addColumn('indication', 'Indication', 'LONGVARCHAR', true, null, null);
        $this->addColumn('procedure_or', 'ProcedureOr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('op_room', 'OpRoom', 'VARCHAR', true, 10, '');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 15, '');
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
        return (string) $row[
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
        return $withPrefix ? CareOpMedDocTableMap::CLASS_DEFAULT : CareOpMedDocTableMap::OM_CLASS;
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
     * @return array           (CareOpMedDoc object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareOpMedDocTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareOpMedDocTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareOpMedDocTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareOpMedDocTableMap::OM_CLASS;
            /** @var CareOpMedDoc $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareOpMedDocTableMap::addInstanceToPool($obj, $key);
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
            $key = CareOpMedDocTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareOpMedDocTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareOpMedDoc $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareOpMedDocTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_NR);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_OP_DATE);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_OPERATOR);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_DIAGNOSIS);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_LOCALIZE);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_THERAPY);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_SPECIAL);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_CLASS_S);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_CLASS_L);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_OP_START);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_OP_END);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_ANASTHETIST);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_SCRUB_NURSE);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_ASSISTANT);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_ANAESTHESIA_TYPE);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_POSTORDER);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_INDICATION);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_PROCEDURE_OR);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_OP_ROOM);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareOpMedDocTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.op_date');
            $criteria->addSelectColumn($alias . '.operator');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.diagnosis');
            $criteria->addSelectColumn($alias . '.localize');
            $criteria->addSelectColumn($alias . '.therapy');
            $criteria->addSelectColumn($alias . '.special');
            $criteria->addSelectColumn($alias . '.class_s');
            $criteria->addSelectColumn($alias . '.class_l');
            $criteria->addSelectColumn($alias . '.op_start');
            $criteria->addSelectColumn($alias . '.op_end');
            $criteria->addSelectColumn($alias . '.anasthetist');
            $criteria->addSelectColumn($alias . '.scrub_nurse');
            $criteria->addSelectColumn($alias . '.assistant');
            $criteria->addSelectColumn($alias . '.anaesthesia_type');
            $criteria->addSelectColumn($alias . '.postorder');
            $criteria->addSelectColumn($alias . '.indication');
            $criteria->addSelectColumn($alias . '.procedure_or');
            $criteria->addSelectColumn($alias . '.op_room');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareOpMedDocTableMap::DATABASE_NAME)->getTable(CareOpMedDocTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareOpMedDocTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareOpMedDocTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareOpMedDocTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareOpMedDoc or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareOpMedDoc object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareOpMedDocTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareOpMedDoc) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareOpMedDocTableMap::DATABASE_NAME);
            $criteria->add(CareOpMedDocTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareOpMedDocQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareOpMedDocTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareOpMedDocTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_op_med_doc table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareOpMedDocQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareOpMedDoc or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareOpMedDoc object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareOpMedDocTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareOpMedDoc object
        }

        if ($criteria->containsKey(CareOpMedDocTableMap::COL_NR) && $criteria->keyContainsValue(CareOpMedDocTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareOpMedDocTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareOpMedDocQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareOpMedDocTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareOpMedDocTableMap::buildTableMap();
