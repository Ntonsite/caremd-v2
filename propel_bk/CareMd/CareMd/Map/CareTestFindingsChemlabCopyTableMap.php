<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestFindingsChemlabCopy;
use CareMd\CareMd\CareTestFindingsChemlabCopyQuery;
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
 * This class defines the structure of the 'care_test_findings_chemlab_copy' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestFindingsChemlabCopyTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestFindingsChemlabCopyTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_findings_chemlab_copy';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestFindingsChemlabCopy';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestFindingsChemlabCopy';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_findings_chemlab_copy.batch_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_findings_chemlab_copy.encounter_nr';

    /**
     * the column name for the job_id field
     */
    const COL_JOB_ID = 'care_test_findings_chemlab_copy.job_id';

    /**
     * the column name for the test_date field
     */
    const COL_TEST_DATE = 'care_test_findings_chemlab_copy.test_date';

    /**
     * the column name for the test_time field
     */
    const COL_TEST_TIME = 'care_test_findings_chemlab_copy.test_time';

    /**
     * the column name for the group_id field
     */
    const COL_GROUP_ID = 'care_test_findings_chemlab_copy.group_id';

    /**
     * the column name for the serial_value field
     */
    const COL_SERIAL_VALUE = 'care_test_findings_chemlab_copy.serial_value';

    /**
     * the column name for the add_value field
     */
    const COL_ADD_VALUE = 'care_test_findings_chemlab_copy.add_value';

    /**
     * the column name for the validator field
     */
    const COL_VALIDATOR = 'care_test_findings_chemlab_copy.validator';

    /**
     * the column name for the validate_dt field
     */
    const COL_VALIDATE_DT = 'care_test_findings_chemlab_copy.validate_dt';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_findings_chemlab_copy.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_findings_chemlab_copy.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_findings_chemlab_copy.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_findings_chemlab_copy.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_findings_chemlab_copy.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_findings_chemlab_copy.create_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'EncounterNr', 'JobId', 'TestDate', 'TestTime', 'GroupId', 'SerialValue', 'AddValue', 'Validator', 'ValidateDt', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'encounterNr', 'jobId', 'testDate', 'testTime', 'groupId', 'serialValue', 'addValue', 'validator', 'validateDt', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR, CareTestFindingsChemlabCopyTableMap::COL_ENCOUNTER_NR, CareTestFindingsChemlabCopyTableMap::COL_JOB_ID, CareTestFindingsChemlabCopyTableMap::COL_TEST_DATE, CareTestFindingsChemlabCopyTableMap::COL_TEST_TIME, CareTestFindingsChemlabCopyTableMap::COL_GROUP_ID, CareTestFindingsChemlabCopyTableMap::COL_SERIAL_VALUE, CareTestFindingsChemlabCopyTableMap::COL_ADD_VALUE, CareTestFindingsChemlabCopyTableMap::COL_VALIDATOR, CareTestFindingsChemlabCopyTableMap::COL_VALIDATE_DT, CareTestFindingsChemlabCopyTableMap::COL_STATUS, CareTestFindingsChemlabCopyTableMap::COL_HISTORY, CareTestFindingsChemlabCopyTableMap::COL_MODIFY_ID, CareTestFindingsChemlabCopyTableMap::COL_MODIFY_TIME, CareTestFindingsChemlabCopyTableMap::COL_CREATE_ID, CareTestFindingsChemlabCopyTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'encounter_nr', 'job_id', 'test_date', 'test_time', 'group_id', 'serial_value', 'add_value', 'validator', 'validate_dt', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'EncounterNr' => 1, 'JobId' => 2, 'TestDate' => 3, 'TestTime' => 4, 'GroupId' => 5, 'SerialValue' => 6, 'AddValue' => 7, 'Validator' => 8, 'ValidateDt' => 9, 'Status' => 10, 'History' => 11, 'ModifyId' => 12, 'ModifyTime' => 13, 'CreateId' => 14, 'CreateTime' => 15, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'encounterNr' => 1, 'jobId' => 2, 'testDate' => 3, 'testTime' => 4, 'groupId' => 5, 'serialValue' => 6, 'addValue' => 7, 'validator' => 8, 'validateDt' => 9, 'status' => 10, 'history' => 11, 'modifyId' => 12, 'modifyTime' => 13, 'createId' => 14, 'createTime' => 15, ),
        self::TYPE_COLNAME       => array(CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR => 0, CareTestFindingsChemlabCopyTableMap::COL_ENCOUNTER_NR => 1, CareTestFindingsChemlabCopyTableMap::COL_JOB_ID => 2, CareTestFindingsChemlabCopyTableMap::COL_TEST_DATE => 3, CareTestFindingsChemlabCopyTableMap::COL_TEST_TIME => 4, CareTestFindingsChemlabCopyTableMap::COL_GROUP_ID => 5, CareTestFindingsChemlabCopyTableMap::COL_SERIAL_VALUE => 6, CareTestFindingsChemlabCopyTableMap::COL_ADD_VALUE => 7, CareTestFindingsChemlabCopyTableMap::COL_VALIDATOR => 8, CareTestFindingsChemlabCopyTableMap::COL_VALIDATE_DT => 9, CareTestFindingsChemlabCopyTableMap::COL_STATUS => 10, CareTestFindingsChemlabCopyTableMap::COL_HISTORY => 11, CareTestFindingsChemlabCopyTableMap::COL_MODIFY_ID => 12, CareTestFindingsChemlabCopyTableMap::COL_MODIFY_TIME => 13, CareTestFindingsChemlabCopyTableMap::COL_CREATE_ID => 14, CareTestFindingsChemlabCopyTableMap::COL_CREATE_TIME => 15, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'encounter_nr' => 1, 'job_id' => 2, 'test_date' => 3, 'test_time' => 4, 'group_id' => 5, 'serial_value' => 6, 'add_value' => 7, 'validator' => 8, 'validate_dt' => 9, 'status' => 10, 'history' => 11, 'modify_id' => 12, 'modify_time' => 13, 'create_id' => 14, 'create_time' => 15, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $this->setName('care_test_findings_chemlab_copy');
        $this->setPhpName('CareTestFindingsChemlabCopy');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestFindingsChemlabCopy');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('job_id', 'JobId', 'VARCHAR', true, 25, '');
        $this->addColumn('test_date', 'TestDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('test_time', 'TestTime', 'TIME', true, null, '00:00:00');
        $this->addColumn('group_id', 'GroupId', 'VARCHAR', true, 30, '');
        $this->addColumn('serial_value', 'SerialValue', 'LONGVARCHAR', true, null, null);
        $this->addColumn('add_value', 'AddValue', 'LONGVARCHAR', true, null, null);
        $this->addColumn('validator', 'Validator', 'VARCHAR', true, 15, '');
        $this->addColumn('validate_dt', 'ValidateDt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CareMd\CareMd\CareTestFindingsChemlabCopy $obj A \CareMd\CareMd\CareTestFindingsChemlabCopy object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getBatchNr() || is_scalar($obj->getBatchNr()) || is_callable([$obj->getBatchNr(), '__toString']) ? (string) $obj->getBatchNr() : $obj->getBatchNr()), (null === $obj->getEncounterNr() || is_scalar($obj->getEncounterNr()) || is_callable([$obj->getEncounterNr(), '__toString']) ? (string) $obj->getEncounterNr() : $obj->getEncounterNr()), (null === $obj->getJobId() || is_scalar($obj->getJobId()) || is_callable([$obj->getJobId(), '__toString']) ? (string) $obj->getJobId() : $obj->getJobId())]);
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
     * @param mixed $value A \CareMd\CareMd\CareTestFindingsChemlabCopy object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CareTestFindingsChemlabCopy) {
                $key = serialize([(null === $value->getBatchNr() || is_scalar($value->getBatchNr()) || is_callable([$value->getBatchNr(), '__toString']) ? (string) $value->getBatchNr() : $value->getBatchNr()), (null === $value->getEncounterNr() || is_scalar($value->getEncounterNr()) || is_callable([$value->getEncounterNr(), '__toString']) ? (string) $value->getEncounterNr() : $value->getEncounterNr()), (null === $value->getJobId() || is_scalar($value->getJobId()) || is_callable([$value->getJobId(), '__toString']) ? (string) $value->getJobId() : $value->getJobId())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CareTestFindingsChemlabCopy object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('JobId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('JobId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('JobId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('JobId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('JobId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('JobId', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                ? 1 + $offset
                : self::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('JobId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTestFindingsChemlabCopyTableMap::CLASS_DEFAULT : CareTestFindingsChemlabCopyTableMap::OM_CLASS;
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
     * @return array           (CareTestFindingsChemlabCopy object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestFindingsChemlabCopyTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestFindingsChemlabCopyTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestFindingsChemlabCopyTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestFindingsChemlabCopyTableMap::OM_CLASS;
            /** @var CareTestFindingsChemlabCopy $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestFindingsChemlabCopyTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestFindingsChemlabCopyTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestFindingsChemlabCopyTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestFindingsChemlabCopy $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestFindingsChemlabCopyTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_JOB_ID);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_TEST_DATE);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_TEST_TIME);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_GROUP_ID);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_SERIAL_VALUE);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_ADD_VALUE);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_VALIDATOR);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_VALIDATE_DT);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestFindingsChemlabCopyTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.job_id');
            $criteria->addSelectColumn($alias . '.test_date');
            $criteria->addSelectColumn($alias . '.test_time');
            $criteria->addSelectColumn($alias . '.group_id');
            $criteria->addSelectColumn($alias . '.serial_value');
            $criteria->addSelectColumn($alias . '.add_value');
            $criteria->addSelectColumn($alias . '.validator');
            $criteria->addSelectColumn($alias . '.validate_dt');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestFindingsChemlabCopyTableMap::DATABASE_NAME)->getTable(CareTestFindingsChemlabCopyTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestFindingsChemlabCopyTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestFindingsChemlabCopyTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestFindingsChemlabCopyTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestFindingsChemlabCopy or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestFindingsChemlabCopy object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsChemlabCopyTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestFindingsChemlabCopy) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestFindingsChemlabCopyTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CareTestFindingsChemlabCopyTableMap::COL_ENCOUNTER_NR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CareTestFindingsChemlabCopyTableMap::COL_JOB_ID, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = CareTestFindingsChemlabCopyQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestFindingsChemlabCopyTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestFindingsChemlabCopyTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_findings_chemlab_copy table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestFindingsChemlabCopyQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestFindingsChemlabCopy or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestFindingsChemlabCopy object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsChemlabCopyTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestFindingsChemlabCopy object
        }

        if ($criteria->containsKey(CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR) && $criteria->keyContainsValue(CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR.')');
        }


        // Set the correct dbName
        $query = CareTestFindingsChemlabCopyQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestFindingsChemlabCopyTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestFindingsChemlabCopyTableMap::buildTableMap();
