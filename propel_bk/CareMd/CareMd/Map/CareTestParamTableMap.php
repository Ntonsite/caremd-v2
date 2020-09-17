<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestParam;
use CareMd\CareMd\CareTestParamQuery;
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
 * This class defines the structure of the 'care_test_param' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestParamTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestParamTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_param';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestParam';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestParam';

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
     * the column name for the nr field
     */
    const COL_NR = 'care_test_param.nr';

    /**
     * the column name for the group_id field
     */
    const COL_GROUP_ID = 'care_test_param.group_id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_test_param.name';

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_test_param.id';

    /**
     * the column name for the msr_unit field
     */
    const COL_MSR_UNIT = 'care_test_param.msr_unit';

    /**
     * the column name for the median field
     */
    const COL_MEDIAN = 'care_test_param.median';

    /**
     * the column name for the hi_bound field
     */
    const COL_HI_BOUND = 'care_test_param.hi_bound';

    /**
     * the column name for the lo_bound field
     */
    const COL_LO_BOUND = 'care_test_param.lo_bound';

    /**
     * the column name for the hi_critical field
     */
    const COL_HI_CRITICAL = 'care_test_param.hi_critical';

    /**
     * the column name for the lo_critical field
     */
    const COL_LO_CRITICAL = 'care_test_param.lo_critical';

    /**
     * the column name for the hi_toxic field
     */
    const COL_HI_TOXIC = 'care_test_param.hi_toxic';

    /**
     * the column name for the lo_toxic field
     */
    const COL_LO_TOXIC = 'care_test_param.lo_toxic';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_param.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_param.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_test_param.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_test_param.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_test_param.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_test_param.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'GroupId', 'Name', 'Id', 'MsrUnit', 'Median', 'HiBound', 'LoBound', 'HiCritical', 'LoCritical', 'HiToxic', 'LoToxic', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'groupId', 'name', 'id', 'msrUnit', 'median', 'hiBound', 'loBound', 'hiCritical', 'loCritical', 'hiToxic', 'loToxic', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTestParamTableMap::COL_NR, CareTestParamTableMap::COL_GROUP_ID, CareTestParamTableMap::COL_NAME, CareTestParamTableMap::COL_ID, CareTestParamTableMap::COL_MSR_UNIT, CareTestParamTableMap::COL_MEDIAN, CareTestParamTableMap::COL_HI_BOUND, CareTestParamTableMap::COL_LO_BOUND, CareTestParamTableMap::COL_HI_CRITICAL, CareTestParamTableMap::COL_LO_CRITICAL, CareTestParamTableMap::COL_HI_TOXIC, CareTestParamTableMap::COL_LO_TOXIC, CareTestParamTableMap::COL_STATUS, CareTestParamTableMap::COL_HISTORY, CareTestParamTableMap::COL_MODIFY_ID, CareTestParamTableMap::COL_MODIFY_TIME, CareTestParamTableMap::COL_CREATE_ID, CareTestParamTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'group_id', 'name', 'id', 'msr_unit', 'median', 'hi_bound', 'lo_bound', 'hi_critical', 'lo_critical', 'hi_toxic', 'lo_toxic', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'GroupId' => 1, 'Name' => 2, 'Id' => 3, 'MsrUnit' => 4, 'Median' => 5, 'HiBound' => 6, 'LoBound' => 7, 'HiCritical' => 8, 'LoCritical' => 9, 'HiToxic' => 10, 'LoToxic' => 11, 'Status' => 12, 'History' => 13, 'ModifyId' => 14, 'ModifyTime' => 15, 'CreateId' => 16, 'CreateTime' => 17, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'groupId' => 1, 'name' => 2, 'id' => 3, 'msrUnit' => 4, 'median' => 5, 'hiBound' => 6, 'loBound' => 7, 'hiCritical' => 8, 'loCritical' => 9, 'hiToxic' => 10, 'loToxic' => 11, 'status' => 12, 'history' => 13, 'modifyId' => 14, 'modifyTime' => 15, 'createId' => 16, 'createTime' => 17, ),
        self::TYPE_COLNAME       => array(CareTestParamTableMap::COL_NR => 0, CareTestParamTableMap::COL_GROUP_ID => 1, CareTestParamTableMap::COL_NAME => 2, CareTestParamTableMap::COL_ID => 3, CareTestParamTableMap::COL_MSR_UNIT => 4, CareTestParamTableMap::COL_MEDIAN => 5, CareTestParamTableMap::COL_HI_BOUND => 6, CareTestParamTableMap::COL_LO_BOUND => 7, CareTestParamTableMap::COL_HI_CRITICAL => 8, CareTestParamTableMap::COL_LO_CRITICAL => 9, CareTestParamTableMap::COL_HI_TOXIC => 10, CareTestParamTableMap::COL_LO_TOXIC => 11, CareTestParamTableMap::COL_STATUS => 12, CareTestParamTableMap::COL_HISTORY => 13, CareTestParamTableMap::COL_MODIFY_ID => 14, CareTestParamTableMap::COL_MODIFY_TIME => 15, CareTestParamTableMap::COL_CREATE_ID => 16, CareTestParamTableMap::COL_CREATE_TIME => 17, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'group_id' => 1, 'name' => 2, 'id' => 3, 'msr_unit' => 4, 'median' => 5, 'hi_bound' => 6, 'lo_bound' => 7, 'hi_critical' => 8, 'lo_critical' => 9, 'hi_toxic' => 10, 'lo_toxic' => 11, 'status' => 12, 'history' => 13, 'modify_id' => 14, 'modify_time' => 15, 'create_id' => 16, 'create_time' => 17, ),
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
        $this->setName('care_test_param');
        $this->setPhpName('CareTestParam');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestParam');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'SMALLINT', true, 5, null);
        $this->addPrimaryKey('group_id', 'GroupId', 'VARCHAR', true, 35, '');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 35, '');
        $this->addColumn('id', 'Id', 'VARCHAR', true, 10, '');
        $this->addColumn('msr_unit', 'MsrUnit', 'VARCHAR', true, 15, '');
        $this->addColumn('median', 'Median', 'VARCHAR', false, 20, null);
        $this->addColumn('hi_bound', 'HiBound', 'VARCHAR', false, 20, null);
        $this->addColumn('lo_bound', 'LoBound', 'VARCHAR', false, 20, null);
        $this->addColumn('hi_critical', 'HiCritical', 'VARCHAR', false, 20, null);
        $this->addColumn('lo_critical', 'LoCritical', 'VARCHAR', false, 20, null);
        $this->addColumn('hi_toxic', 'HiToxic', 'VARCHAR', false, 20, null);
        $this->addColumn('lo_toxic', 'LoToxic', 'VARCHAR', false, 20, null);
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CareMd\CareMd\CareTestParam $obj A \CareMd\CareMd\CareTestParam object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getNr() || is_scalar($obj->getNr()) || is_callable([$obj->getNr(), '__toString']) ? (string) $obj->getNr() : $obj->getNr()), (null === $obj->getGroupId() || is_scalar($obj->getGroupId()) || is_callable([$obj->getGroupId(), '__toString']) ? (string) $obj->getGroupId() : $obj->getGroupId())]);
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
     * @param mixed $value A \CareMd\CareMd\CareTestParam object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CareTestParam) {
                $key = serialize([(null === $value->getNr() || is_scalar($value->getNr()) || is_callable([$value->getNr(), '__toString']) ? (string) $value->getNr() : $value->getNr()), (null === $value->getGroupId() || is_scalar($value->getGroupId()) || is_callable([$value->getGroupId(), '__toString']) ? (string) $value->getGroupId() : $value->getGroupId())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CareTestParam object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('GroupId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('GroupId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('GroupId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('GroupId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('GroupId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('GroupId', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('GroupId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTestParamTableMap::CLASS_DEFAULT : CareTestParamTableMap::OM_CLASS;
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
     * @return array           (CareTestParam object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestParamTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestParamTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestParamTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestParamTableMap::OM_CLASS;
            /** @var CareTestParam $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestParamTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestParamTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestParamTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestParam $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestParamTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestParamTableMap::COL_NR);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_GROUP_ID);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_NAME);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_ID);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_MSR_UNIT);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_MEDIAN);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_HI_BOUND);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_LO_BOUND);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_HI_CRITICAL);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_LO_CRITICAL);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_HI_TOXIC);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_LO_TOXIC);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTestParamTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.group_id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.msr_unit');
            $criteria->addSelectColumn($alias . '.median');
            $criteria->addSelectColumn($alias . '.hi_bound');
            $criteria->addSelectColumn($alias . '.lo_bound');
            $criteria->addSelectColumn($alias . '.hi_critical');
            $criteria->addSelectColumn($alias . '.lo_critical');
            $criteria->addSelectColumn($alias . '.hi_toxic');
            $criteria->addSelectColumn($alias . '.lo_toxic');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestParamTableMap::DATABASE_NAME)->getTable(CareTestParamTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestParamTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestParamTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestParamTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestParam or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestParam object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestParamTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestParam) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestParamTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CareTestParamTableMap::COL_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CareTestParamTableMap::COL_GROUP_ID, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = CareTestParamQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestParamTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestParamTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_param table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestParamQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestParam or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestParam object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestParamTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestParam object
        }

        if ($criteria->containsKey(CareTestParamTableMap::COL_NR) && $criteria->keyContainsValue(CareTestParamTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestParamTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareTestParamQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestParamTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestParamTableMap::buildTableMap();
