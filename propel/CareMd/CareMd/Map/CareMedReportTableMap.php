<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareMedReport;
use CareMd\CareMd\CareMedReportQuery;
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
 * This class defines the structure of the 'care_med_report' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareMedReportTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareMedReportTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_med_report';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareMedReport';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareMedReport';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 13;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 13;

    /**
     * the column name for the report_nr field
     */
    const COL_REPORT_NR = 'care_med_report.report_nr';

    /**
     * the column name for the dept field
     */
    const COL_DEPT = 'care_med_report.dept';

    /**
     * the column name for the report field
     */
    const COL_REPORT = 'care_med_report.report';

    /**
     * the column name for the reporter field
     */
    const COL_REPORTER = 'care_med_report.reporter';

    /**
     * the column name for the id_nr field
     */
    const COL_ID_NR = 'care_med_report.id_nr';

    /**
     * the column name for the report_date field
     */
    const COL_REPORT_DATE = 'care_med_report.report_date';

    /**
     * the column name for the report_time field
     */
    const COL_REPORT_TIME = 'care_med_report.report_time';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_med_report.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_med_report.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_med_report.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_med_report.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_med_report.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_med_report.create_time';

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
        self::TYPE_PHPNAME       => array('ReportNr', 'Dept', 'Report', 'Reporter', 'IdNr', 'ReportDate', 'ReportTime', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('reportNr', 'dept', 'report', 'reporter', 'idNr', 'reportDate', 'reportTime', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareMedReportTableMap::COL_REPORT_NR, CareMedReportTableMap::COL_DEPT, CareMedReportTableMap::COL_REPORT, CareMedReportTableMap::COL_REPORTER, CareMedReportTableMap::COL_ID_NR, CareMedReportTableMap::COL_REPORT_DATE, CareMedReportTableMap::COL_REPORT_TIME, CareMedReportTableMap::COL_STATUS, CareMedReportTableMap::COL_HISTORY, CareMedReportTableMap::COL_MODIFY_ID, CareMedReportTableMap::COL_MODIFY_TIME, CareMedReportTableMap::COL_CREATE_ID, CareMedReportTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('report_nr', 'dept', 'report', 'reporter', 'id_nr', 'report_date', 'report_time', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ReportNr' => 0, 'Dept' => 1, 'Report' => 2, 'Reporter' => 3, 'IdNr' => 4, 'ReportDate' => 5, 'ReportTime' => 6, 'Status' => 7, 'History' => 8, 'ModifyId' => 9, 'ModifyTime' => 10, 'CreateId' => 11, 'CreateTime' => 12, ),
        self::TYPE_CAMELNAME     => array('reportNr' => 0, 'dept' => 1, 'report' => 2, 'reporter' => 3, 'idNr' => 4, 'reportDate' => 5, 'reportTime' => 6, 'status' => 7, 'history' => 8, 'modifyId' => 9, 'modifyTime' => 10, 'createId' => 11, 'createTime' => 12, ),
        self::TYPE_COLNAME       => array(CareMedReportTableMap::COL_REPORT_NR => 0, CareMedReportTableMap::COL_DEPT => 1, CareMedReportTableMap::COL_REPORT => 2, CareMedReportTableMap::COL_REPORTER => 3, CareMedReportTableMap::COL_ID_NR => 4, CareMedReportTableMap::COL_REPORT_DATE => 5, CareMedReportTableMap::COL_REPORT_TIME => 6, CareMedReportTableMap::COL_STATUS => 7, CareMedReportTableMap::COL_HISTORY => 8, CareMedReportTableMap::COL_MODIFY_ID => 9, CareMedReportTableMap::COL_MODIFY_TIME => 10, CareMedReportTableMap::COL_CREATE_ID => 11, CareMedReportTableMap::COL_CREATE_TIME => 12, ),
        self::TYPE_FIELDNAME     => array('report_nr' => 0, 'dept' => 1, 'report' => 2, 'reporter' => 3, 'id_nr' => 4, 'report_date' => 5, 'report_time' => 6, 'status' => 7, 'history' => 8, 'modify_id' => 9, 'modify_time' => 10, 'create_id' => 11, 'create_time' => 12, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $this->setName('care_med_report');
        $this->setPhpName('CareMedReport');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareMedReport');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('report_nr', 'ReportNr', 'INTEGER', true, null, null);
        $this->addColumn('dept', 'Dept', 'VARCHAR', true, 15, '');
        $this->addColumn('report', 'Report', 'LONGVARCHAR', true, null, null);
        $this->addColumn('reporter', 'Reporter', 'VARCHAR', true, 25, '');
        $this->addColumn('id_nr', 'IdNr', 'VARCHAR', true, 15, '');
        $this->addColumn('report_date', 'ReportDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('report_time', 'ReportTime', 'TIME', true, null, '00:00:00');
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
        return $withPrefix ? CareMedReportTableMap::CLASS_DEFAULT : CareMedReportTableMap::OM_CLASS;
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
     * @return array           (CareMedReport object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareMedReportTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareMedReportTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareMedReportTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareMedReportTableMap::OM_CLASS;
            /** @var CareMedReport $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareMedReportTableMap::addInstanceToPool($obj, $key);
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
            $key = CareMedReportTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareMedReportTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareMedReport $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareMedReportTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareMedReportTableMap::COL_REPORT_NR);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_DEPT);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_REPORT);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_REPORTER);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_ID_NR);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_REPORT_DATE);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_REPORT_TIME);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareMedReportTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.report_nr');
            $criteria->addSelectColumn($alias . '.dept');
            $criteria->addSelectColumn($alias . '.report');
            $criteria->addSelectColumn($alias . '.reporter');
            $criteria->addSelectColumn($alias . '.id_nr');
            $criteria->addSelectColumn($alias . '.report_date');
            $criteria->addSelectColumn($alias . '.report_time');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareMedReportTableMap::DATABASE_NAME)->getTable(CareMedReportTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareMedReportTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareMedReportTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareMedReportTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareMedReport or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareMedReport object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedReportTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareMedReport) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareMedReportTableMap::DATABASE_NAME);
            $criteria->add(CareMedReportTableMap::COL_REPORT_NR, (array) $values, Criteria::IN);
        }

        $query = CareMedReportQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareMedReportTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareMedReportTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_med_report table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareMedReportQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareMedReport or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareMedReport object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedReportTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareMedReport object
        }

        if ($criteria->containsKey(CareMedReportTableMap::COL_REPORT_NR) && $criteria->keyContainsValue(CareMedReportTableMap::COL_REPORT_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareMedReportTableMap::COL_REPORT_NR.')');
        }


        // Set the correct dbName
        $query = CareMedReportQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareMedReportTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareMedReportTableMap::buildTableMap();
