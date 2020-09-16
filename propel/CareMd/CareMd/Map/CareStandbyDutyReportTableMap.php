<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareStandbyDutyReport;
use CareMd\CareMd\CareStandbyDutyReportQuery;
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
 * This class defines the structure of the 'care_standby_duty_report' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareStandbyDutyReportTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareStandbyDutyReportTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_standby_duty_report';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareStandbyDutyReport';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareStandbyDutyReport';

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
     * the column name for the report_nr field
     */
    const COL_REPORT_NR = 'care_standby_duty_report.report_nr';

    /**
     * the column name for the dept field
     */
    const COL_DEPT = 'care_standby_duty_report.dept';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'care_standby_duty_report.date';

    /**
     * the column name for the standby_name field
     */
    const COL_STANDBY_NAME = 'care_standby_duty_report.standby_name';

    /**
     * the column name for the standby_start field
     */
    const COL_STANDBY_START = 'care_standby_duty_report.standby_start';

    /**
     * the column name for the standby_end field
     */
    const COL_STANDBY_END = 'care_standby_duty_report.standby_end';

    /**
     * the column name for the oncall_name field
     */
    const COL_ONCALL_NAME = 'care_standby_duty_report.oncall_name';

    /**
     * the column name for the oncall_start field
     */
    const COL_ONCALL_START = 'care_standby_duty_report.oncall_start';

    /**
     * the column name for the oncall_end field
     */
    const COL_ONCALL_END = 'care_standby_duty_report.oncall_end';

    /**
     * the column name for the op_room field
     */
    const COL_OP_ROOM = 'care_standby_duty_report.op_room';

    /**
     * the column name for the diagnosis_therapy field
     */
    const COL_DIAGNOSIS_THERAPY = 'care_standby_duty_report.diagnosis_therapy';

    /**
     * the column name for the encoding field
     */
    const COL_ENCODING = 'care_standby_duty_report.encoding';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_standby_duty_report.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_standby_duty_report.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_standby_duty_report.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_standby_duty_report.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_standby_duty_report.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_standby_duty_report.create_time';

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
        self::TYPE_PHPNAME       => array('ReportNr', 'Dept', 'Date', 'StandbyName', 'StandbyStart', 'StandbyEnd', 'OncallName', 'OncallStart', 'OncallEnd', 'OpRoom', 'DiagnosisTherapy', 'Encoding', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('reportNr', 'dept', 'date', 'standbyName', 'standbyStart', 'standbyEnd', 'oncallName', 'oncallStart', 'oncallEnd', 'opRoom', 'diagnosisTherapy', 'encoding', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareStandbyDutyReportTableMap::COL_REPORT_NR, CareStandbyDutyReportTableMap::COL_DEPT, CareStandbyDutyReportTableMap::COL_DATE, CareStandbyDutyReportTableMap::COL_STANDBY_NAME, CareStandbyDutyReportTableMap::COL_STANDBY_START, CareStandbyDutyReportTableMap::COL_STANDBY_END, CareStandbyDutyReportTableMap::COL_ONCALL_NAME, CareStandbyDutyReportTableMap::COL_ONCALL_START, CareStandbyDutyReportTableMap::COL_ONCALL_END, CareStandbyDutyReportTableMap::COL_OP_ROOM, CareStandbyDutyReportTableMap::COL_DIAGNOSIS_THERAPY, CareStandbyDutyReportTableMap::COL_ENCODING, CareStandbyDutyReportTableMap::COL_STATUS, CareStandbyDutyReportTableMap::COL_HISTORY, CareStandbyDutyReportTableMap::COL_MODIFY_ID, CareStandbyDutyReportTableMap::COL_MODIFY_TIME, CareStandbyDutyReportTableMap::COL_CREATE_ID, CareStandbyDutyReportTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('report_nr', 'dept', 'date', 'standby_name', 'standby_start', 'standby_end', 'oncall_name', 'oncall_start', 'oncall_end', 'op_room', 'diagnosis_therapy', 'encoding', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ReportNr' => 0, 'Dept' => 1, 'Date' => 2, 'StandbyName' => 3, 'StandbyStart' => 4, 'StandbyEnd' => 5, 'OncallName' => 6, 'OncallStart' => 7, 'OncallEnd' => 8, 'OpRoom' => 9, 'DiagnosisTherapy' => 10, 'Encoding' => 11, 'Status' => 12, 'History' => 13, 'ModifyId' => 14, 'ModifyTime' => 15, 'CreateId' => 16, 'CreateTime' => 17, ),
        self::TYPE_CAMELNAME     => array('reportNr' => 0, 'dept' => 1, 'date' => 2, 'standbyName' => 3, 'standbyStart' => 4, 'standbyEnd' => 5, 'oncallName' => 6, 'oncallStart' => 7, 'oncallEnd' => 8, 'opRoom' => 9, 'diagnosisTherapy' => 10, 'encoding' => 11, 'status' => 12, 'history' => 13, 'modifyId' => 14, 'modifyTime' => 15, 'createId' => 16, 'createTime' => 17, ),
        self::TYPE_COLNAME       => array(CareStandbyDutyReportTableMap::COL_REPORT_NR => 0, CareStandbyDutyReportTableMap::COL_DEPT => 1, CareStandbyDutyReportTableMap::COL_DATE => 2, CareStandbyDutyReportTableMap::COL_STANDBY_NAME => 3, CareStandbyDutyReportTableMap::COL_STANDBY_START => 4, CareStandbyDutyReportTableMap::COL_STANDBY_END => 5, CareStandbyDutyReportTableMap::COL_ONCALL_NAME => 6, CareStandbyDutyReportTableMap::COL_ONCALL_START => 7, CareStandbyDutyReportTableMap::COL_ONCALL_END => 8, CareStandbyDutyReportTableMap::COL_OP_ROOM => 9, CareStandbyDutyReportTableMap::COL_DIAGNOSIS_THERAPY => 10, CareStandbyDutyReportTableMap::COL_ENCODING => 11, CareStandbyDutyReportTableMap::COL_STATUS => 12, CareStandbyDutyReportTableMap::COL_HISTORY => 13, CareStandbyDutyReportTableMap::COL_MODIFY_ID => 14, CareStandbyDutyReportTableMap::COL_MODIFY_TIME => 15, CareStandbyDutyReportTableMap::COL_CREATE_ID => 16, CareStandbyDutyReportTableMap::COL_CREATE_TIME => 17, ),
        self::TYPE_FIELDNAME     => array('report_nr' => 0, 'dept' => 1, 'date' => 2, 'standby_name' => 3, 'standby_start' => 4, 'standby_end' => 5, 'oncall_name' => 6, 'oncall_start' => 7, 'oncall_end' => 8, 'op_room' => 9, 'diagnosis_therapy' => 10, 'encoding' => 11, 'status' => 12, 'history' => 13, 'modify_id' => 14, 'modify_time' => 15, 'create_id' => 16, 'create_time' => 17, ),
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
        $this->setName('care_standby_duty_report');
        $this->setPhpName('CareStandbyDutyReport');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareStandbyDutyReport');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('report_nr', 'ReportNr', 'INTEGER', true, null, null);
        $this->addColumn('dept', 'Dept', 'VARCHAR', true, 15, '');
        $this->addColumn('date', 'Date', 'DATE', true, null, '0000-00-00');
        $this->addColumn('standby_name', 'StandbyName', 'VARCHAR', true, 35, '');
        $this->addColumn('standby_start', 'StandbyStart', 'TIME', true, null, '00:00:00');
        $this->addColumn('standby_end', 'StandbyEnd', 'TIME', true, null, '00:00:00');
        $this->addColumn('oncall_name', 'OncallName', 'VARCHAR', true, 35, '');
        $this->addColumn('oncall_start', 'OncallStart', 'TIME', true, null, '00:00:00');
        $this->addColumn('oncall_end', 'OncallEnd', 'TIME', true, null, '00:00:00');
        $this->addColumn('op_room', 'OpRoom', 'CHAR', true, 2, '');
        $this->addColumn('diagnosis_therapy', 'DiagnosisTherapy', 'LONGVARCHAR', true, null, null);
        $this->addColumn('encoding', 'Encoding', 'LONGVARCHAR', true, null, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 20, '');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareStandbyDutyReportTableMap::CLASS_DEFAULT : CareStandbyDutyReportTableMap::OM_CLASS;
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
     * @return array           (CareStandbyDutyReport object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareStandbyDutyReportTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareStandbyDutyReportTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareStandbyDutyReportTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareStandbyDutyReportTableMap::OM_CLASS;
            /** @var CareStandbyDutyReport $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareStandbyDutyReportTableMap::addInstanceToPool($obj, $key);
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
            $key = CareStandbyDutyReportTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareStandbyDutyReportTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareStandbyDutyReport $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareStandbyDutyReportTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_REPORT_NR);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_DEPT);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_DATE);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_STANDBY_NAME);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_STANDBY_START);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_STANDBY_END);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_ONCALL_NAME);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_ONCALL_START);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_ONCALL_END);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_OP_ROOM);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_DIAGNOSIS_THERAPY);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_ENCODING);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareStandbyDutyReportTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.report_nr');
            $criteria->addSelectColumn($alias . '.dept');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.standby_name');
            $criteria->addSelectColumn($alias . '.standby_start');
            $criteria->addSelectColumn($alias . '.standby_end');
            $criteria->addSelectColumn($alias . '.oncall_name');
            $criteria->addSelectColumn($alias . '.oncall_start');
            $criteria->addSelectColumn($alias . '.oncall_end');
            $criteria->addSelectColumn($alias . '.op_room');
            $criteria->addSelectColumn($alias . '.diagnosis_therapy');
            $criteria->addSelectColumn($alias . '.encoding');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareStandbyDutyReportTableMap::DATABASE_NAME)->getTable(CareStandbyDutyReportTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareStandbyDutyReportTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareStandbyDutyReportTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareStandbyDutyReportTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareStandbyDutyReport or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareStandbyDutyReport object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareStandbyDutyReportTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareStandbyDutyReport) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareStandbyDutyReportTableMap::DATABASE_NAME);
            $criteria->add(CareStandbyDutyReportTableMap::COL_REPORT_NR, (array) $values, Criteria::IN);
        }

        $query = CareStandbyDutyReportQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareStandbyDutyReportTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareStandbyDutyReportTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_standby_duty_report table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareStandbyDutyReportQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareStandbyDutyReport or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareStandbyDutyReport object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareStandbyDutyReportTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareStandbyDutyReport object
        }

        if ($criteria->containsKey(CareStandbyDutyReportTableMap::COL_REPORT_NR) && $criteria->keyContainsValue(CareStandbyDutyReportTableMap::COL_REPORT_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareStandbyDutyReportTableMap::COL_REPORT_NR.')');
        }


        // Set the correct dbName
        $query = CareStandbyDutyReportQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareStandbyDutyReportTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareStandbyDutyReportTableMap::buildTableMap();
