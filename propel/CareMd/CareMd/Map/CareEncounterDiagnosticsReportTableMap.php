<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterDiagnosticsReport;
use CareMd\CareMd\CareEncounterDiagnosticsReportQuery;
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
 * This class defines the structure of the 'care_encounter_diagnostics_report' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterDiagnosticsReportTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterDiagnosticsReportTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_diagnostics_report';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterDiagnosticsReport';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterDiagnosticsReport';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 18;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 18;

    /**
     * the column name for the item_nr field
     */
    const COL_ITEM_NR = 'care_encounter_diagnostics_report.item_nr';

    /**
     * the column name for the report_nr field
     */
    const COL_REPORT_NR = 'care_encounter_diagnostics_report.report_nr';

    /**
     * the column name for the reporting_dept_nr field
     */
    const COL_REPORTING_DEPT_NR = 'care_encounter_diagnostics_report.reporting_dept_nr';

    /**
     * the column name for the reporting_dept field
     */
    const COL_REPORTING_DEPT = 'care_encounter_diagnostics_report.reporting_dept';

    /**
     * the column name for the report_date field
     */
    const COL_REPORT_DATE = 'care_encounter_diagnostics_report.report_date';

    /**
     * the column name for the report_time field
     */
    const COL_REPORT_TIME = 'care_encounter_diagnostics_report.report_time';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_diagnostics_report.encounter_nr';

    /**
     * the column name for the script_call field
     */
    const COL_SCRIPT_CALL = 'care_encounter_diagnostics_report.script_call';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_diagnostics_report.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_diagnostics_report.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_diagnostics_report.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_diagnostics_report.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_diagnostics_report.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_diagnostics_report.create_time';

    /**
     * the column name for the open_status field
     */
    const COL_OPEN_STATUS = 'care_encounter_diagnostics_report.open_status';

    /**
     * the column name for the is_reviewed field
     */
    const COL_IS_REVIEWED = 'care_encounter_diagnostics_report.is_reviewed';

    /**
     * the column name for the reviewer_comments field
     */
    const COL_REVIEWER_COMMENTS = 'care_encounter_diagnostics_report.reviewer_comments';

    /**
     * the column name for the reviewed_by field
     */
    const COL_REVIEWED_BY = 'care_encounter_diagnostics_report.reviewed_by';

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
        self::TYPE_PHPNAME       => array('ItemNr', 'ReportNr', 'ReportingDeptNr', 'ReportingDept', 'ReportDate', 'ReportTime', 'EncounterNr', 'ScriptCall', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'OpenStatus', 'IsReviewed', 'ReviewerComments', 'ReviewedBy', ),
        self::TYPE_CAMELNAME     => array('itemNr', 'reportNr', 'reportingDeptNr', 'reportingDept', 'reportDate', 'reportTime', 'encounterNr', 'scriptCall', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', 'openStatus', 'isReviewed', 'reviewerComments', 'reviewedBy', ),
        self::TYPE_COLNAME       => array(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR, CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR, CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT_NR, CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT, CareEncounterDiagnosticsReportTableMap::COL_REPORT_DATE, CareEncounterDiagnosticsReportTableMap::COL_REPORT_TIME, CareEncounterDiagnosticsReportTableMap::COL_ENCOUNTER_NR, CareEncounterDiagnosticsReportTableMap::COL_SCRIPT_CALL, CareEncounterDiagnosticsReportTableMap::COL_STATUS, CareEncounterDiagnosticsReportTableMap::COL_HISTORY, CareEncounterDiagnosticsReportTableMap::COL_MODIFY_ID, CareEncounterDiagnosticsReportTableMap::COL_MODIFY_TIME, CareEncounterDiagnosticsReportTableMap::COL_CREATE_ID, CareEncounterDiagnosticsReportTableMap::COL_CREATE_TIME, CareEncounterDiagnosticsReportTableMap::COL_OPEN_STATUS, CareEncounterDiagnosticsReportTableMap::COL_IS_REVIEWED, CareEncounterDiagnosticsReportTableMap::COL_REVIEWER_COMMENTS, CareEncounterDiagnosticsReportTableMap::COL_REVIEWED_BY, ),
        self::TYPE_FIELDNAME     => array('item_nr', 'report_nr', 'reporting_dept_nr', 'reporting_dept', 'report_date', 'report_time', 'encounter_nr', 'script_call', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'open_status', 'is_reviewed', 'reviewer_comments', 'reviewed_by', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ItemNr' => 0, 'ReportNr' => 1, 'ReportingDeptNr' => 2, 'ReportingDept' => 3, 'ReportDate' => 4, 'ReportTime' => 5, 'EncounterNr' => 6, 'ScriptCall' => 7, 'Status' => 8, 'History' => 9, 'ModifyId' => 10, 'ModifyTime' => 11, 'CreateId' => 12, 'CreateTime' => 13, 'OpenStatus' => 14, 'IsReviewed' => 15, 'ReviewerComments' => 16, 'ReviewedBy' => 17, ),
        self::TYPE_CAMELNAME     => array('itemNr' => 0, 'reportNr' => 1, 'reportingDeptNr' => 2, 'reportingDept' => 3, 'reportDate' => 4, 'reportTime' => 5, 'encounterNr' => 6, 'scriptCall' => 7, 'status' => 8, 'history' => 9, 'modifyId' => 10, 'modifyTime' => 11, 'createId' => 12, 'createTime' => 13, 'openStatus' => 14, 'isReviewed' => 15, 'reviewerComments' => 16, 'reviewedBy' => 17, ),
        self::TYPE_COLNAME       => array(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR => 0, CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR => 1, CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT_NR => 2, CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT => 3, CareEncounterDiagnosticsReportTableMap::COL_REPORT_DATE => 4, CareEncounterDiagnosticsReportTableMap::COL_REPORT_TIME => 5, CareEncounterDiagnosticsReportTableMap::COL_ENCOUNTER_NR => 6, CareEncounterDiagnosticsReportTableMap::COL_SCRIPT_CALL => 7, CareEncounterDiagnosticsReportTableMap::COL_STATUS => 8, CareEncounterDiagnosticsReportTableMap::COL_HISTORY => 9, CareEncounterDiagnosticsReportTableMap::COL_MODIFY_ID => 10, CareEncounterDiagnosticsReportTableMap::COL_MODIFY_TIME => 11, CareEncounterDiagnosticsReportTableMap::COL_CREATE_ID => 12, CareEncounterDiagnosticsReportTableMap::COL_CREATE_TIME => 13, CareEncounterDiagnosticsReportTableMap::COL_OPEN_STATUS => 14, CareEncounterDiagnosticsReportTableMap::COL_IS_REVIEWED => 15, CareEncounterDiagnosticsReportTableMap::COL_REVIEWER_COMMENTS => 16, CareEncounterDiagnosticsReportTableMap::COL_REVIEWED_BY => 17, ),
        self::TYPE_FIELDNAME     => array('item_nr' => 0, 'report_nr' => 1, 'reporting_dept_nr' => 2, 'reporting_dept' => 3, 'report_date' => 4, 'report_time' => 5, 'encounter_nr' => 6, 'script_call' => 7, 'status' => 8, 'history' => 9, 'modify_id' => 10, 'modify_time' => 11, 'create_id' => 12, 'create_time' => 13, 'open_status' => 14, 'is_reviewed' => 15, 'reviewer_comments' => 16, 'reviewed_by' => 17, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
        $this->setName('care_encounter_diagnostics_report');
        $this->setPhpName('CareEncounterDiagnosticsReport');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterDiagnosticsReport');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('item_nr', 'ItemNr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('report_nr', 'ReportNr', 'INTEGER', true, null, 0);
        $this->addColumn('reporting_dept_nr', 'ReportingDeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('reporting_dept', 'ReportingDept', 'VARCHAR', true, 100, '');
        $this->addColumn('report_date', 'ReportDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('report_time', 'ReportTime', 'TIME', true, null, '00:00:00');
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('script_call', 'ScriptCall', 'VARCHAR', true, 255, '');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('open_status', 'OpenStatus', 'BOOLEAN', false, 1, false);
        $this->addColumn('is_reviewed', 'IsReviewed', 'BOOLEAN', true, 1, false);
        $this->addColumn('reviewer_comments', 'ReviewerComments', 'VARCHAR', false, 255, null);
        $this->addColumn('reviewed_by', 'ReviewedBy', 'VARCHAR', false, 255, null);
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
     * @param \CareMd\CareMd\CareEncounterDiagnosticsReport $obj A \CareMd\CareMd\CareEncounterDiagnosticsReport object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getItemNr() || is_scalar($obj->getItemNr()) || is_callable([$obj->getItemNr(), '__toString']) ? (string) $obj->getItemNr() : $obj->getItemNr()), (null === $obj->getReportNr() || is_scalar($obj->getReportNr()) || is_callable([$obj->getReportNr(), '__toString']) ? (string) $obj->getReportNr() : $obj->getReportNr())]);
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
     * @param mixed $value A \CareMd\CareMd\CareEncounterDiagnosticsReport object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CareEncounterDiagnosticsReport) {
                $key = serialize([(null === $value->getItemNr() || is_scalar($value->getItemNr()) || is_callable([$value->getItemNr(), '__toString']) ? (string) $value->getItemNr() : $value->getItemNr()), (null === $value->getReportNr() || is_scalar($value->getReportNr()) || is_callable([$value->getReportNr(), '__toString']) ? (string) $value->getReportNr() : $value->getReportNr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CareEncounterDiagnosticsReport object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareEncounterDiagnosticsReportTableMap::CLASS_DEFAULT : CareEncounterDiagnosticsReportTableMap::OM_CLASS;
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
     * @return array           (CareEncounterDiagnosticsReport object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterDiagnosticsReportTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterDiagnosticsReportTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterDiagnosticsReportTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterDiagnosticsReportTableMap::OM_CLASS;
            /** @var CareEncounterDiagnosticsReport $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterDiagnosticsReportTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterDiagnosticsReportTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterDiagnosticsReportTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterDiagnosticsReport $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterDiagnosticsReportTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT_NR);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_REPORT_DATE);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_REPORT_TIME);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_SCRIPT_CALL);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_OPEN_STATUS);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_IS_REVIEWED);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_REVIEWER_COMMENTS);
            $criteria->addSelectColumn(CareEncounterDiagnosticsReportTableMap::COL_REVIEWED_BY);
        } else {
            $criteria->addSelectColumn($alias . '.item_nr');
            $criteria->addSelectColumn($alias . '.report_nr');
            $criteria->addSelectColumn($alias . '.reporting_dept_nr');
            $criteria->addSelectColumn($alias . '.reporting_dept');
            $criteria->addSelectColumn($alias . '.report_date');
            $criteria->addSelectColumn($alias . '.report_time');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.script_call');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.open_status');
            $criteria->addSelectColumn($alias . '.is_reviewed');
            $criteria->addSelectColumn($alias . '.reviewer_comments');
            $criteria->addSelectColumn($alias . '.reviewed_by');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME)->getTable(CareEncounterDiagnosticsReportTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterDiagnosticsReportTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterDiagnosticsReportTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterDiagnosticsReport or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterDiagnosticsReport object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterDiagnosticsReport) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = CareEncounterDiagnosticsReportQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterDiagnosticsReportTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterDiagnosticsReportTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_diagnostics_report table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterDiagnosticsReportQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterDiagnosticsReport or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterDiagnosticsReport object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterDiagnosticsReport object
        }

        if ($criteria->containsKey(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR) && $criteria->keyContainsValue(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterDiagnosticsReportQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterDiagnosticsReportTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterDiagnosticsReportTableMap::buildTableMap();
