<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTechRepairJob;
use CareMd\CareMd\CareTechRepairJobQuery;
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
 * This class defines the structure of the 'care_tech_repair_job' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTechRepairJobTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTechRepairJobTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tech_repair_job';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTechRepairJob';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTechRepairJob';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 23;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 23;

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_tech_repair_job.batch_nr';

    /**
     * the column name for the dept field
     */
    const COL_DEPT = 'care_tech_repair_job.dept';

    /**
     * the column name for the job field
     */
    const COL_JOB = 'care_tech_repair_job.job';

    /**
     * the column name for the reporter field
     */
    const COL_REPORTER = 'care_tech_repair_job.reporter';

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_tech_repair_job.id';

    /**
     * the column name for the tphone field
     */
    const COL_TPHONE = 'care_tech_repair_job.tphone';

    /**
     * the column name for the tdate field
     */
    const COL_TDATE = 'care_tech_repair_job.tdate';

    /**
     * the column name for the ttime field
     */
    const COL_TTIME = 'care_tech_repair_job.ttime';

    /**
     * the column name for the tid field
     */
    const COL_TID = 'care_tech_repair_job.tid';

    /**
     * the column name for the done field
     */
    const COL_DONE = 'care_tech_repair_job.done';

    /**
     * the column name for the seen field
     */
    const COL_SEEN = 'care_tech_repair_job.seen';

    /**
     * the column name for the seenby field
     */
    const COL_SEENBY = 'care_tech_repair_job.seenby';

    /**
     * the column name for the sstamp field
     */
    const COL_SSTAMP = 'care_tech_repair_job.sstamp';

    /**
     * the column name for the doneby field
     */
    const COL_DONEBY = 'care_tech_repair_job.doneby';

    /**
     * the column name for the dstamp field
     */
    const COL_DSTAMP = 'care_tech_repair_job.dstamp';

    /**
     * the column name for the d_idx field
     */
    const COL_D_IDX = 'care_tech_repair_job.d_idx';

    /**
     * the column name for the archive field
     */
    const COL_ARCHIVE = 'care_tech_repair_job.archive';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_tech_repair_job.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_tech_repair_job.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tech_repair_job.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_tech_repair_job.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_tech_repair_job.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_tech_repair_job.create_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'Dept', 'Job', 'Reporter', 'Id', 'Tphone', 'Tdate', 'Ttime', 'Tid', 'Done', 'Seen', 'Seenby', 'Sstamp', 'Doneby', 'Dstamp', 'DIdx', 'Archive', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'dept', 'job', 'reporter', 'id', 'tphone', 'tdate', 'ttime', 'tid', 'done', 'seen', 'seenby', 'sstamp', 'doneby', 'dstamp', 'dIdx', 'archive', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTechRepairJobTableMap::COL_BATCH_NR, CareTechRepairJobTableMap::COL_DEPT, CareTechRepairJobTableMap::COL_JOB, CareTechRepairJobTableMap::COL_REPORTER, CareTechRepairJobTableMap::COL_ID, CareTechRepairJobTableMap::COL_TPHONE, CareTechRepairJobTableMap::COL_TDATE, CareTechRepairJobTableMap::COL_TTIME, CareTechRepairJobTableMap::COL_TID, CareTechRepairJobTableMap::COL_DONE, CareTechRepairJobTableMap::COL_SEEN, CareTechRepairJobTableMap::COL_SEENBY, CareTechRepairJobTableMap::COL_SSTAMP, CareTechRepairJobTableMap::COL_DONEBY, CareTechRepairJobTableMap::COL_DSTAMP, CareTechRepairJobTableMap::COL_D_IDX, CareTechRepairJobTableMap::COL_ARCHIVE, CareTechRepairJobTableMap::COL_STATUS, CareTechRepairJobTableMap::COL_HISTORY, CareTechRepairJobTableMap::COL_MODIFY_ID, CareTechRepairJobTableMap::COL_MODIFY_TIME, CareTechRepairJobTableMap::COL_CREATE_ID, CareTechRepairJobTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'dept', 'job', 'reporter', 'id', 'tphone', 'tdate', 'ttime', 'tid', 'done', 'seen', 'seenby', 'sstamp', 'doneby', 'dstamp', 'd_idx', 'archive', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'Dept' => 1, 'Job' => 2, 'Reporter' => 3, 'Id' => 4, 'Tphone' => 5, 'Tdate' => 6, 'Ttime' => 7, 'Tid' => 8, 'Done' => 9, 'Seen' => 10, 'Seenby' => 11, 'Sstamp' => 12, 'Doneby' => 13, 'Dstamp' => 14, 'DIdx' => 15, 'Archive' => 16, 'Status' => 17, 'History' => 18, 'ModifyId' => 19, 'ModifyTime' => 20, 'CreateId' => 21, 'CreateTime' => 22, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'dept' => 1, 'job' => 2, 'reporter' => 3, 'id' => 4, 'tphone' => 5, 'tdate' => 6, 'ttime' => 7, 'tid' => 8, 'done' => 9, 'seen' => 10, 'seenby' => 11, 'sstamp' => 12, 'doneby' => 13, 'dstamp' => 14, 'dIdx' => 15, 'archive' => 16, 'status' => 17, 'history' => 18, 'modifyId' => 19, 'modifyTime' => 20, 'createId' => 21, 'createTime' => 22, ),
        self::TYPE_COLNAME       => array(CareTechRepairJobTableMap::COL_BATCH_NR => 0, CareTechRepairJobTableMap::COL_DEPT => 1, CareTechRepairJobTableMap::COL_JOB => 2, CareTechRepairJobTableMap::COL_REPORTER => 3, CareTechRepairJobTableMap::COL_ID => 4, CareTechRepairJobTableMap::COL_TPHONE => 5, CareTechRepairJobTableMap::COL_TDATE => 6, CareTechRepairJobTableMap::COL_TTIME => 7, CareTechRepairJobTableMap::COL_TID => 8, CareTechRepairJobTableMap::COL_DONE => 9, CareTechRepairJobTableMap::COL_SEEN => 10, CareTechRepairJobTableMap::COL_SEENBY => 11, CareTechRepairJobTableMap::COL_SSTAMP => 12, CareTechRepairJobTableMap::COL_DONEBY => 13, CareTechRepairJobTableMap::COL_DSTAMP => 14, CareTechRepairJobTableMap::COL_D_IDX => 15, CareTechRepairJobTableMap::COL_ARCHIVE => 16, CareTechRepairJobTableMap::COL_STATUS => 17, CareTechRepairJobTableMap::COL_HISTORY => 18, CareTechRepairJobTableMap::COL_MODIFY_ID => 19, CareTechRepairJobTableMap::COL_MODIFY_TIME => 20, CareTechRepairJobTableMap::COL_CREATE_ID => 21, CareTechRepairJobTableMap::COL_CREATE_TIME => 22, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'dept' => 1, 'job' => 2, 'reporter' => 3, 'id' => 4, 'tphone' => 5, 'tdate' => 6, 'ttime' => 7, 'tid' => 8, 'done' => 9, 'seen' => 10, 'seenby' => 11, 'sstamp' => 12, 'doneby' => 13, 'dstamp' => 14, 'd_idx' => 15, 'archive' => 16, 'status' => 17, 'history' => 18, 'modify_id' => 19, 'modify_time' => 20, 'create_id' => 21, 'create_time' => 22, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
        $this->setName('care_tech_repair_job');
        $this->setPhpName('CareTechRepairJob');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTechRepairJob');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'TINYINT', true, null, null);
        $this->addColumn('dept', 'Dept', 'VARCHAR', true, 15, '');
        $this->addColumn('job', 'Job', 'LONGVARCHAR', true, null, null);
        $this->addColumn('reporter', 'Reporter', 'VARCHAR', true, 25, '');
        $this->addColumn('id', 'Id', 'VARCHAR', true, 15, '');
        $this->addColumn('tphone', 'Tphone', 'VARCHAR', true, 30, '');
        $this->addColumn('tdate', 'Tdate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('ttime', 'Ttime', 'TIME', true, null, '00:00:00');
        $this->addColumn('tid', 'Tid', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('done', 'Done', 'BOOLEAN', true, 1, false);
        $this->addColumn('seen', 'Seen', 'BOOLEAN', true, 1, false);
        $this->addColumn('seenby', 'Seenby', 'VARCHAR', true, 25, '');
        $this->addColumn('sstamp', 'Sstamp', 'VARCHAR', true, 16, '');
        $this->addColumn('doneby', 'Doneby', 'VARCHAR', true, 25, '');
        $this->addColumn('dstamp', 'Dstamp', 'VARCHAR', true, 16, '');
        $this->addColumn('d_idx', 'DIdx', 'VARCHAR', true, 8, '');
        $this->addColumn('archive', 'Archive', 'BOOLEAN', true, 1, false);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 20, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTechRepairJobTableMap::CLASS_DEFAULT : CareTechRepairJobTableMap::OM_CLASS;
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
     * @return array           (CareTechRepairJob object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTechRepairJobTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTechRepairJobTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTechRepairJobTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTechRepairJobTableMap::OM_CLASS;
            /** @var CareTechRepairJob $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTechRepairJobTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTechRepairJobTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTechRepairJobTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTechRepairJob $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTechRepairJobTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_DEPT);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_JOB);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_REPORTER);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_ID);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_TPHONE);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_TDATE);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_TTIME);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_TID);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_DONE);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_SEEN);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_SEENBY);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_SSTAMP);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_DONEBY);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_DSTAMP);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_D_IDX);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_ARCHIVE);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTechRepairJobTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.dept');
            $criteria->addSelectColumn($alias . '.job');
            $criteria->addSelectColumn($alias . '.reporter');
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.tphone');
            $criteria->addSelectColumn($alias . '.tdate');
            $criteria->addSelectColumn($alias . '.ttime');
            $criteria->addSelectColumn($alias . '.tid');
            $criteria->addSelectColumn($alias . '.done');
            $criteria->addSelectColumn($alias . '.seen');
            $criteria->addSelectColumn($alias . '.seenby');
            $criteria->addSelectColumn($alias . '.sstamp');
            $criteria->addSelectColumn($alias . '.doneby');
            $criteria->addSelectColumn($alias . '.dstamp');
            $criteria->addSelectColumn($alias . '.d_idx');
            $criteria->addSelectColumn($alias . '.archive');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTechRepairJobTableMap::DATABASE_NAME)->getTable(CareTechRepairJobTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTechRepairJobTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTechRepairJobTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTechRepairJobTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTechRepairJob or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTechRepairJob object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechRepairJobTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTechRepairJob) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTechRepairJobTableMap::DATABASE_NAME);
            $criteria->add(CareTechRepairJobTableMap::COL_BATCH_NR, (array) $values, Criteria::IN);
        }

        $query = CareTechRepairJobQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTechRepairJobTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTechRepairJobTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tech_repair_job table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTechRepairJobQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTechRepairJob or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTechRepairJob object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechRepairJobTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTechRepairJob object
        }

        if ($criteria->containsKey(CareTechRepairJobTableMap::COL_BATCH_NR) && $criteria->keyContainsValue(CareTechRepairJobTableMap::COL_BATCH_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTechRepairJobTableMap::COL_BATCH_NR.')');
        }


        // Set the correct dbName
        $query = CareTechRepairJobQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTechRepairJobTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTechRepairJobTableMap::buildTableMap();
