<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTechRepairDone;
use CareMd\CareMd\CareTechRepairDoneQuery;
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
 * This class defines the structure of the 'care_tech_repair_done' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTechRepairDoneTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTechRepairDoneTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tech_repair_done';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTechRepairDone';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTechRepairDone';

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
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_tech_repair_done.batch_nr';

    /**
     * the column name for the dept field
     */
    const COL_DEPT = 'care_tech_repair_done.dept';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_tech_repair_done.dept_nr';

    /**
     * the column name for the job_id field
     */
    const COL_JOB_ID = 'care_tech_repair_done.job_id';

    /**
     * the column name for the job field
     */
    const COL_JOB = 'care_tech_repair_done.job';

    /**
     * the column name for the reporter field
     */
    const COL_REPORTER = 'care_tech_repair_done.reporter';

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_tech_repair_done.id';

    /**
     * the column name for the tdate field
     */
    const COL_TDATE = 'care_tech_repair_done.tdate';

    /**
     * the column name for the ttime field
     */
    const COL_TTIME = 'care_tech_repair_done.ttime';

    /**
     * the column name for the tid field
     */
    const COL_TID = 'care_tech_repair_done.tid';

    /**
     * the column name for the seen field
     */
    const COL_SEEN = 'care_tech_repair_done.seen';

    /**
     * the column name for the d_idx field
     */
    const COL_D_IDX = 'care_tech_repair_done.d_idx';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_tech_repair_done.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_tech_repair_done.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tech_repair_done.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_tech_repair_done.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_tech_repair_done.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_tech_repair_done.create_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'Dept', 'DeptNr', 'JobId', 'Job', 'Reporter', 'Id', 'Tdate', 'Ttime', 'Tid', 'Seen', 'DIdx', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'dept', 'deptNr', 'jobId', 'job', 'reporter', 'id', 'tdate', 'ttime', 'tid', 'seen', 'dIdx', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTechRepairDoneTableMap::COL_BATCH_NR, CareTechRepairDoneTableMap::COL_DEPT, CareTechRepairDoneTableMap::COL_DEPT_NR, CareTechRepairDoneTableMap::COL_JOB_ID, CareTechRepairDoneTableMap::COL_JOB, CareTechRepairDoneTableMap::COL_REPORTER, CareTechRepairDoneTableMap::COL_ID, CareTechRepairDoneTableMap::COL_TDATE, CareTechRepairDoneTableMap::COL_TTIME, CareTechRepairDoneTableMap::COL_TID, CareTechRepairDoneTableMap::COL_SEEN, CareTechRepairDoneTableMap::COL_D_IDX, CareTechRepairDoneTableMap::COL_STATUS, CareTechRepairDoneTableMap::COL_HISTORY, CareTechRepairDoneTableMap::COL_MODIFY_ID, CareTechRepairDoneTableMap::COL_MODIFY_TIME, CareTechRepairDoneTableMap::COL_CREATE_ID, CareTechRepairDoneTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'dept', 'dept_nr', 'job_id', 'job', 'reporter', 'id', 'tdate', 'ttime', 'tid', 'seen', 'd_idx', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'Dept' => 1, 'DeptNr' => 2, 'JobId' => 3, 'Job' => 4, 'Reporter' => 5, 'Id' => 6, 'Tdate' => 7, 'Ttime' => 8, 'Tid' => 9, 'Seen' => 10, 'DIdx' => 11, 'Status' => 12, 'History' => 13, 'ModifyId' => 14, 'ModifyTime' => 15, 'CreateId' => 16, 'CreateTime' => 17, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'dept' => 1, 'deptNr' => 2, 'jobId' => 3, 'job' => 4, 'reporter' => 5, 'id' => 6, 'tdate' => 7, 'ttime' => 8, 'tid' => 9, 'seen' => 10, 'dIdx' => 11, 'status' => 12, 'history' => 13, 'modifyId' => 14, 'modifyTime' => 15, 'createId' => 16, 'createTime' => 17, ),
        self::TYPE_COLNAME       => array(CareTechRepairDoneTableMap::COL_BATCH_NR => 0, CareTechRepairDoneTableMap::COL_DEPT => 1, CareTechRepairDoneTableMap::COL_DEPT_NR => 2, CareTechRepairDoneTableMap::COL_JOB_ID => 3, CareTechRepairDoneTableMap::COL_JOB => 4, CareTechRepairDoneTableMap::COL_REPORTER => 5, CareTechRepairDoneTableMap::COL_ID => 6, CareTechRepairDoneTableMap::COL_TDATE => 7, CareTechRepairDoneTableMap::COL_TTIME => 8, CareTechRepairDoneTableMap::COL_TID => 9, CareTechRepairDoneTableMap::COL_SEEN => 10, CareTechRepairDoneTableMap::COL_D_IDX => 11, CareTechRepairDoneTableMap::COL_STATUS => 12, CareTechRepairDoneTableMap::COL_HISTORY => 13, CareTechRepairDoneTableMap::COL_MODIFY_ID => 14, CareTechRepairDoneTableMap::COL_MODIFY_TIME => 15, CareTechRepairDoneTableMap::COL_CREATE_ID => 16, CareTechRepairDoneTableMap::COL_CREATE_TIME => 17, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'dept' => 1, 'dept_nr' => 2, 'job_id' => 3, 'job' => 4, 'reporter' => 5, 'id' => 6, 'tdate' => 7, 'ttime' => 8, 'tid' => 9, 'seen' => 10, 'd_idx' => 11, 'status' => 12, 'history' => 13, 'modify_id' => 14, 'modify_time' => 15, 'create_id' => 16, 'create_time' => 17, ),
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
        $this->setName('care_tech_repair_done');
        $this->setPhpName('CareTechRepairDone');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTechRepairDone');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, null);
        $this->addColumn('dept', 'Dept', 'VARCHAR', false, 15, null);
        $this->addPrimaryKey('dept_nr', 'DeptNr', 'TINYINT', true, 3, 0);
        $this->addColumn('job_id', 'JobId', 'VARCHAR', true, 15, '0');
        $this->addColumn('job', 'Job', 'LONGVARCHAR', true, null, null);
        $this->addColumn('reporter', 'Reporter', 'VARCHAR', true, 25, '');
        $this->addColumn('id', 'Id', 'VARCHAR', true, 15, '');
        $this->addColumn('tdate', 'Tdate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('ttime', 'Ttime', 'TIME', true, null, '00:00:00');
        $this->addColumn('tid', 'Tid', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('seen', 'Seen', 'BOOLEAN', true, 1, false);
        $this->addColumn('d_idx', 'DIdx', 'VARCHAR', true, 8, '');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 15, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CareMd\CareMd\CareTechRepairDone $obj A \CareMd\CareMd\CareTechRepairDone object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getBatchNr() || is_scalar($obj->getBatchNr()) || is_callable([$obj->getBatchNr(), '__toString']) ? (string) $obj->getBatchNr() : $obj->getBatchNr()), (null === $obj->getDeptNr() || is_scalar($obj->getDeptNr()) || is_callable([$obj->getDeptNr(), '__toString']) ? (string) $obj->getDeptNr() : $obj->getDeptNr())]);
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
     * @param mixed $value A \CareMd\CareMd\CareTechRepairDone object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CareTechRepairDone) {
                $key = serialize([(null === $value->getBatchNr() || is_scalar($value->getBatchNr()) || is_callable([$value->getBatchNr(), '__toString']) ? (string) $value->getBatchNr() : $value->getBatchNr()), (null === $value->getDeptNr() || is_scalar($value->getDeptNr()) || is_callable([$value->getDeptNr(), '__toString']) ? (string) $value->getDeptNr() : $value->getDeptNr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CareTechRepairDone object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTechRepairDoneTableMap::CLASS_DEFAULT : CareTechRepairDoneTableMap::OM_CLASS;
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
     * @return array           (CareTechRepairDone object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTechRepairDoneTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTechRepairDoneTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTechRepairDoneTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTechRepairDoneTableMap::OM_CLASS;
            /** @var CareTechRepairDone $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTechRepairDoneTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTechRepairDoneTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTechRepairDoneTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTechRepairDone $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTechRepairDoneTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_DEPT);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_JOB_ID);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_JOB);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_REPORTER);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_ID);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_TDATE);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_TTIME);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_TID);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_SEEN);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_D_IDX);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTechRepairDoneTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.dept');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.job_id');
            $criteria->addSelectColumn($alias . '.job');
            $criteria->addSelectColumn($alias . '.reporter');
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.tdate');
            $criteria->addSelectColumn($alias . '.ttime');
            $criteria->addSelectColumn($alias . '.tid');
            $criteria->addSelectColumn($alias . '.seen');
            $criteria->addSelectColumn($alias . '.d_idx');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTechRepairDoneTableMap::DATABASE_NAME)->getTable(CareTechRepairDoneTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTechRepairDoneTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTechRepairDoneTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTechRepairDoneTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTechRepairDone or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTechRepairDone object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechRepairDoneTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTechRepairDone) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTechRepairDoneTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CareTechRepairDoneTableMap::COL_BATCH_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CareTechRepairDoneTableMap::COL_DEPT_NR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = CareTechRepairDoneQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTechRepairDoneTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTechRepairDoneTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tech_repair_done table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTechRepairDoneQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTechRepairDone or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTechRepairDone object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechRepairDoneTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTechRepairDone object
        }

        if ($criteria->containsKey(CareTechRepairDoneTableMap::COL_BATCH_NR) && $criteria->keyContainsValue(CareTechRepairDoneTableMap::COL_BATCH_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTechRepairDoneTableMap::COL_BATCH_NR.')');
        }


        // Set the correct dbName
        $query = CareTechRepairDoneQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTechRepairDoneTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTechRepairDoneTableMap::buildTableMap();
