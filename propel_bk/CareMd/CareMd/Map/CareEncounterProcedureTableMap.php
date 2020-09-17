<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterProcedure;
use CareMd\CareMd\CareEncounterProcedureQuery;
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
 * This class defines the structure of the 'care_encounter_procedure' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterProcedureTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterProcedureTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_procedure';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterProcedure';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterProcedure';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 19;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 19;

    /**
     * the column name for the procedure_nr field
     */
    const COL_PROCEDURE_NR = 'care_encounter_procedure.procedure_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_procedure.encounter_nr';

    /**
     * the column name for the op_nr field
     */
    const COL_OP_NR = 'care_encounter_procedure.op_nr';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'care_encounter_procedure.date';

    /**
     * the column name for the code field
     */
    const COL_CODE = 'care_encounter_procedure.code';

    /**
     * the column name for the code_parent field
     */
    const COL_CODE_PARENT = 'care_encounter_procedure.code_parent';

    /**
     * the column name for the group_nr field
     */
    const COL_GROUP_NR = 'care_encounter_procedure.group_nr';

    /**
     * the column name for the code_version field
     */
    const COL_CODE_VERSION = 'care_encounter_procedure.code_version';

    /**
     * the column name for the localcode field
     */
    const COL_LOCALCODE = 'care_encounter_procedure.localcode';

    /**
     * the column name for the category_nr field
     */
    const COL_CATEGORY_NR = 'care_encounter_procedure.category_nr';

    /**
     * the column name for the localization field
     */
    const COL_LOCALIZATION = 'care_encounter_procedure.localization';

    /**
     * the column name for the responsible_clinician field
     */
    const COL_RESPONSIBLE_CLINICIAN = 'care_encounter_procedure.responsible_clinician';

    /**
     * the column name for the responsible_dept_nr field
     */
    const COL_RESPONSIBLE_DEPT_NR = 'care_encounter_procedure.responsible_dept_nr';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_procedure.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_procedure.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_procedure.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_procedure.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_procedure.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_procedure.create_time';

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
        self::TYPE_PHPNAME       => array('ProcedureNr', 'EncounterNr', 'OpNr', 'Date', 'Code', 'CodeParent', 'GroupNr', 'CodeVersion', 'Localcode', 'CategoryNr', 'Localization', 'ResponsibleClinician', 'ResponsibleDeptNr', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('procedureNr', 'encounterNr', 'opNr', 'date', 'code', 'codeParent', 'groupNr', 'codeVersion', 'localcode', 'categoryNr', 'localization', 'responsibleClinician', 'responsibleDeptNr', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterProcedureTableMap::COL_PROCEDURE_NR, CareEncounterProcedureTableMap::COL_ENCOUNTER_NR, CareEncounterProcedureTableMap::COL_OP_NR, CareEncounterProcedureTableMap::COL_DATE, CareEncounterProcedureTableMap::COL_CODE, CareEncounterProcedureTableMap::COL_CODE_PARENT, CareEncounterProcedureTableMap::COL_GROUP_NR, CareEncounterProcedureTableMap::COL_CODE_VERSION, CareEncounterProcedureTableMap::COL_LOCALCODE, CareEncounterProcedureTableMap::COL_CATEGORY_NR, CareEncounterProcedureTableMap::COL_LOCALIZATION, CareEncounterProcedureTableMap::COL_RESPONSIBLE_CLINICIAN, CareEncounterProcedureTableMap::COL_RESPONSIBLE_DEPT_NR, CareEncounterProcedureTableMap::COL_STATUS, CareEncounterProcedureTableMap::COL_HISTORY, CareEncounterProcedureTableMap::COL_MODIFY_ID, CareEncounterProcedureTableMap::COL_MODIFY_TIME, CareEncounterProcedureTableMap::COL_CREATE_ID, CareEncounterProcedureTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('procedure_nr', 'encounter_nr', 'op_nr', 'date', 'code', 'code_parent', 'group_nr', 'code_version', 'localcode', 'category_nr', 'localization', 'responsible_clinician', 'responsible_dept_nr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ProcedureNr' => 0, 'EncounterNr' => 1, 'OpNr' => 2, 'Date' => 3, 'Code' => 4, 'CodeParent' => 5, 'GroupNr' => 6, 'CodeVersion' => 7, 'Localcode' => 8, 'CategoryNr' => 9, 'Localization' => 10, 'ResponsibleClinician' => 11, 'ResponsibleDeptNr' => 12, 'Status' => 13, 'History' => 14, 'ModifyId' => 15, 'ModifyTime' => 16, 'CreateId' => 17, 'CreateTime' => 18, ),
        self::TYPE_CAMELNAME     => array('procedureNr' => 0, 'encounterNr' => 1, 'opNr' => 2, 'date' => 3, 'code' => 4, 'codeParent' => 5, 'groupNr' => 6, 'codeVersion' => 7, 'localcode' => 8, 'categoryNr' => 9, 'localization' => 10, 'responsibleClinician' => 11, 'responsibleDeptNr' => 12, 'status' => 13, 'history' => 14, 'modifyId' => 15, 'modifyTime' => 16, 'createId' => 17, 'createTime' => 18, ),
        self::TYPE_COLNAME       => array(CareEncounterProcedureTableMap::COL_PROCEDURE_NR => 0, CareEncounterProcedureTableMap::COL_ENCOUNTER_NR => 1, CareEncounterProcedureTableMap::COL_OP_NR => 2, CareEncounterProcedureTableMap::COL_DATE => 3, CareEncounterProcedureTableMap::COL_CODE => 4, CareEncounterProcedureTableMap::COL_CODE_PARENT => 5, CareEncounterProcedureTableMap::COL_GROUP_NR => 6, CareEncounterProcedureTableMap::COL_CODE_VERSION => 7, CareEncounterProcedureTableMap::COL_LOCALCODE => 8, CareEncounterProcedureTableMap::COL_CATEGORY_NR => 9, CareEncounterProcedureTableMap::COL_LOCALIZATION => 10, CareEncounterProcedureTableMap::COL_RESPONSIBLE_CLINICIAN => 11, CareEncounterProcedureTableMap::COL_RESPONSIBLE_DEPT_NR => 12, CareEncounterProcedureTableMap::COL_STATUS => 13, CareEncounterProcedureTableMap::COL_HISTORY => 14, CareEncounterProcedureTableMap::COL_MODIFY_ID => 15, CareEncounterProcedureTableMap::COL_MODIFY_TIME => 16, CareEncounterProcedureTableMap::COL_CREATE_ID => 17, CareEncounterProcedureTableMap::COL_CREATE_TIME => 18, ),
        self::TYPE_FIELDNAME     => array('procedure_nr' => 0, 'encounter_nr' => 1, 'op_nr' => 2, 'date' => 3, 'code' => 4, 'code_parent' => 5, 'group_nr' => 6, 'code_version' => 7, 'localcode' => 8, 'category_nr' => 9, 'localization' => 10, 'responsible_clinician' => 11, 'responsible_dept_nr' => 12, 'status' => 13, 'history' => 14, 'modify_id' => 15, 'modify_time' => 16, 'create_id' => 17, 'create_time' => 18, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $this->setName('care_encounter_procedure');
        $this->setPhpName('CareEncounterProcedure');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterProcedure');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('procedure_nr', 'ProcedureNr', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('op_nr', 'OpNr', 'INTEGER', true, null, 0);
        $this->addColumn('date', 'Date', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('code', 'Code', 'VARCHAR', true, 25, '');
        $this->addColumn('code_parent', 'CodeParent', 'VARCHAR', true, 25, '');
        $this->addColumn('group_nr', 'GroupNr', 'SMALLINT', true, 8, 0);
        $this->addColumn('code_version', 'CodeVersion', 'TINYINT', true, null, 0);
        $this->addColumn('localcode', 'Localcode', 'VARCHAR', true, 35, '');
        $this->addColumn('category_nr', 'CategoryNr', 'TINYINT', true, 3, 0);
        $this->addColumn('localization', 'Localization', 'VARCHAR', true, 35, '');
        $this->addColumn('responsible_clinician', 'ResponsibleClinician', 'VARCHAR', true, 60, '');
        $this->addColumn('responsible_dept_nr', 'ResponsibleDeptNr', 'SMALLINT', true, 5, 0);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProcedureNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProcedureNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProcedureNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProcedureNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProcedureNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProcedureNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('ProcedureNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareEncounterProcedureTableMap::CLASS_DEFAULT : CareEncounterProcedureTableMap::OM_CLASS;
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
     * @return array           (CareEncounterProcedure object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterProcedureTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterProcedureTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterProcedureTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterProcedureTableMap::OM_CLASS;
            /** @var CareEncounterProcedure $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterProcedureTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterProcedureTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterProcedureTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterProcedure $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterProcedureTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_PROCEDURE_NR);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_OP_NR);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_DATE);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_CODE);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_CODE_PARENT);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_GROUP_NR);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_CODE_VERSION);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_LOCALCODE);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_CATEGORY_NR);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_LOCALIZATION);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_RESPONSIBLE_CLINICIAN);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_RESPONSIBLE_DEPT_NR);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterProcedureTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.procedure_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.op_nr');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.code_parent');
            $criteria->addSelectColumn($alias . '.group_nr');
            $criteria->addSelectColumn($alias . '.code_version');
            $criteria->addSelectColumn($alias . '.localcode');
            $criteria->addSelectColumn($alias . '.category_nr');
            $criteria->addSelectColumn($alias . '.localization');
            $criteria->addSelectColumn($alias . '.responsible_clinician');
            $criteria->addSelectColumn($alias . '.responsible_dept_nr');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterProcedureTableMap::DATABASE_NAME)->getTable(CareEncounterProcedureTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterProcedureTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterProcedureTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterProcedureTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterProcedure or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterProcedure object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterProcedureTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterProcedure) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterProcedureTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterProcedureTableMap::COL_PROCEDURE_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterProcedureQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterProcedureTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterProcedureTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_procedure table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterProcedureQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterProcedure or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterProcedure object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterProcedureTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterProcedure object
        }

        if ($criteria->containsKey(CareEncounterProcedureTableMap::COL_PROCEDURE_NR) && $criteria->keyContainsValue(CareEncounterProcedureTableMap::COL_PROCEDURE_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterProcedureTableMap::COL_PROCEDURE_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterProcedureQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterProcedureTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterProcedureTableMap::buildTableMap();
