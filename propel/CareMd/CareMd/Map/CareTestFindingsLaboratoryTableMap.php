<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestFindingsLaboratory;
use CareMd\CareMd\CareTestFindingsLaboratoryQuery;
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
 * This class defines the structure of the 'care_test_findings_laboratory' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestFindingsLaboratoryTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestFindingsLaboratoryTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_findings_laboratory';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestFindingsLaboratory';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestFindingsLaboratory';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 11;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 11;

    /**
     * the column name for the findings_nr field
     */
    const COL_FINDINGS_NR = 'care_test_findings_laboratory.findings_nr';

    /**
     * the column name for the parent field
     */
    const COL_PARENT = 'care_test_findings_laboratory.parent';

    /**
     * the column name for the task_nr field
     */
    const COL_TASK_NR = 'care_test_findings_laboratory.task_nr';

    /**
     * the column name for the timestamp field
     */
    const COL_TIMESTAMP = 'care_test_findings_laboratory.timestamp';

    /**
     * the column name for the finding field
     */
    const COL_FINDING = 'care_test_findings_laboratory.finding';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_findings_laboratory.status';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_findings_laboratory.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_findings_laboratory.modify_time';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_findings_laboratory.history';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_findings_laboratory.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_findings_laboratory.create_time';

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
        self::TYPE_PHPNAME       => array('FindingsNr', 'Parent', 'TaskNr', 'Timestamp', 'Finding', 'Status', 'ModifyId', 'ModifyTime', 'History', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('findingsNr', 'parent', 'taskNr', 'timestamp', 'finding', 'status', 'modifyId', 'modifyTime', 'history', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR, CareTestFindingsLaboratoryTableMap::COL_PARENT, CareTestFindingsLaboratoryTableMap::COL_TASK_NR, CareTestFindingsLaboratoryTableMap::COL_TIMESTAMP, CareTestFindingsLaboratoryTableMap::COL_FINDING, CareTestFindingsLaboratoryTableMap::COL_STATUS, CareTestFindingsLaboratoryTableMap::COL_MODIFY_ID, CareTestFindingsLaboratoryTableMap::COL_MODIFY_TIME, CareTestFindingsLaboratoryTableMap::COL_HISTORY, CareTestFindingsLaboratoryTableMap::COL_CREATE_ID, CareTestFindingsLaboratoryTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('findings_nr', 'parent', 'task_nr', 'timestamp', 'finding', 'status', 'modify_id', 'modify_time', 'history', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('FindingsNr' => 0, 'Parent' => 1, 'TaskNr' => 2, 'Timestamp' => 3, 'Finding' => 4, 'Status' => 5, 'ModifyId' => 6, 'ModifyTime' => 7, 'History' => 8, 'CreateId' => 9, 'CreateTime' => 10, ),
        self::TYPE_CAMELNAME     => array('findingsNr' => 0, 'parent' => 1, 'taskNr' => 2, 'timestamp' => 3, 'finding' => 4, 'status' => 5, 'modifyId' => 6, 'modifyTime' => 7, 'history' => 8, 'createId' => 9, 'createTime' => 10, ),
        self::TYPE_COLNAME       => array(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR => 0, CareTestFindingsLaboratoryTableMap::COL_PARENT => 1, CareTestFindingsLaboratoryTableMap::COL_TASK_NR => 2, CareTestFindingsLaboratoryTableMap::COL_TIMESTAMP => 3, CareTestFindingsLaboratoryTableMap::COL_FINDING => 4, CareTestFindingsLaboratoryTableMap::COL_STATUS => 5, CareTestFindingsLaboratoryTableMap::COL_MODIFY_ID => 6, CareTestFindingsLaboratoryTableMap::COL_MODIFY_TIME => 7, CareTestFindingsLaboratoryTableMap::COL_HISTORY => 8, CareTestFindingsLaboratoryTableMap::COL_CREATE_ID => 9, CareTestFindingsLaboratoryTableMap::COL_CREATE_TIME => 10, ),
        self::TYPE_FIELDNAME     => array('findings_nr' => 0, 'parent' => 1, 'task_nr' => 2, 'timestamp' => 3, 'finding' => 4, 'status' => 5, 'modify_id' => 6, 'modify_time' => 7, 'history' => 8, 'create_id' => 9, 'create_time' => 10, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $this->setName('care_test_findings_laboratory');
        $this->setPhpName('CareTestFindingsLaboratory');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestFindingsLaboratory');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('findings_nr', 'FindingsNr', 'INTEGER', true, null, null);
        $this->addColumn('parent', 'Parent', 'INTEGER', false, null, null);
        $this->addPrimaryKey('task_nr', 'TaskNr', 'INTEGER', true, null, -1);
        $this->addColumn('timestamp', 'Timestamp', 'BIGINT', true, null, null);
        $this->addColumn('finding', 'Finding', 'LONGVARCHAR', true, null, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 20, '');
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
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
     * @param \CareMd\CareMd\CareTestFindingsLaboratory $obj A \CareMd\CareMd\CareTestFindingsLaboratory object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getFindingsNr() || is_scalar($obj->getFindingsNr()) || is_callable([$obj->getFindingsNr(), '__toString']) ? (string) $obj->getFindingsNr() : $obj->getFindingsNr()), (null === $obj->getTaskNr() || is_scalar($obj->getTaskNr()) || is_callable([$obj->getTaskNr(), '__toString']) ? (string) $obj->getTaskNr() : $obj->getTaskNr())]);
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
     * @param mixed $value A \CareMd\CareMd\CareTestFindingsLaboratory object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CareTestFindingsLaboratory) {
                $key = serialize([(null === $value->getFindingsNr() || is_scalar($value->getFindingsNr()) || is_callable([$value->getFindingsNr(), '__toString']) ? (string) $value->getFindingsNr() : $value->getFindingsNr()), (null === $value->getTaskNr() || is_scalar($value->getTaskNr()) || is_callable([$value->getTaskNr(), '__toString']) ? (string) $value->getTaskNr() : $value->getTaskNr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CareTestFindingsLaboratory object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FindingsNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FindingsNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FindingsNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FindingsNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FindingsNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FindingsNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('FindingsNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('TaskNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTestFindingsLaboratoryTableMap::CLASS_DEFAULT : CareTestFindingsLaboratoryTableMap::OM_CLASS;
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
     * @return array           (CareTestFindingsLaboratory object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestFindingsLaboratoryTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestFindingsLaboratoryTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestFindingsLaboratoryTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestFindingsLaboratoryTableMap::OM_CLASS;
            /** @var CareTestFindingsLaboratory $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestFindingsLaboratoryTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestFindingsLaboratoryTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestFindingsLaboratoryTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestFindingsLaboratory $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestFindingsLaboratoryTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR);
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_PARENT);
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_TASK_NR);
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_TIMESTAMP);
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_FINDING);
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestFindingsLaboratoryTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.findings_nr');
            $criteria->addSelectColumn($alias . '.parent');
            $criteria->addSelectColumn($alias . '.task_nr');
            $criteria->addSelectColumn($alias . '.timestamp');
            $criteria->addSelectColumn($alias . '.finding');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.history');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestFindingsLaboratoryTableMap::DATABASE_NAME)->getTable(CareTestFindingsLaboratoryTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestFindingsLaboratoryTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestFindingsLaboratoryTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestFindingsLaboratoryTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestFindingsLaboratory or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestFindingsLaboratory object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsLaboratoryTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestFindingsLaboratory) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestFindingsLaboratoryTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CareTestFindingsLaboratoryTableMap::COL_TASK_NR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = CareTestFindingsLaboratoryQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestFindingsLaboratoryTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestFindingsLaboratoryTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_findings_laboratory table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestFindingsLaboratoryQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestFindingsLaboratory or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestFindingsLaboratory object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsLaboratoryTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestFindingsLaboratory object
        }

        if ($criteria->containsKey(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR) && $criteria->keyContainsValue(CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestFindingsLaboratoryTableMap::COL_FINDINGS_NR.')');
        }


        // Set the correct dbName
        $query = CareTestFindingsLaboratoryQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestFindingsLaboratoryTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestFindingsLaboratoryTableMap::buildTableMap();
