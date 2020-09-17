<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareRoom;
use CareMd\CareMd\CareRoomQuery;
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
 * This class defines the structure of the 'care_room' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareRoomTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareRoomTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_room';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareRoom';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareRoom';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_room.nr';

    /**
     * the column name for the type_nr field
     */
    const COL_TYPE_NR = 'care_room.type_nr';

    /**
     * the column name for the date_create field
     */
    const COL_DATE_CREATE = 'care_room.date_create';

    /**
     * the column name for the date_close field
     */
    const COL_DATE_CLOSE = 'care_room.date_close';

    /**
     * the column name for the is_temp_closed field
     */
    const COL_IS_TEMP_CLOSED = 'care_room.is_temp_closed';

    /**
     * the column name for the room_nr field
     */
    const COL_ROOM_NR = 'care_room.room_nr';

    /**
     * the column name for the ward_nr field
     */
    const COL_WARD_NR = 'care_room.ward_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_room.dept_nr';

    /**
     * the column name for the nr_of_beds field
     */
    const COL_NR_OF_BEDS = 'care_room.nr_of_beds';

    /**
     * the column name for the closed_beds field
     */
    const COL_CLOSED_BEDS = 'care_room.closed_beds';

    /**
     * the column name for the info field
     */
    const COL_INFO = 'care_room.info';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_room.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_room.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_room.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_room.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_room.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_room.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'TypeNr', 'DateCreate', 'DateClose', 'IsTempClosed', 'RoomNr', 'WardNr', 'DeptNr', 'NrOfBeds', 'ClosedBeds', 'Info', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'typeNr', 'dateCreate', 'dateClose', 'isTempClosed', 'roomNr', 'wardNr', 'deptNr', 'nrOfBeds', 'closedBeds', 'info', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareRoomTableMap::COL_NR, CareRoomTableMap::COL_TYPE_NR, CareRoomTableMap::COL_DATE_CREATE, CareRoomTableMap::COL_DATE_CLOSE, CareRoomTableMap::COL_IS_TEMP_CLOSED, CareRoomTableMap::COL_ROOM_NR, CareRoomTableMap::COL_WARD_NR, CareRoomTableMap::COL_DEPT_NR, CareRoomTableMap::COL_NR_OF_BEDS, CareRoomTableMap::COL_CLOSED_BEDS, CareRoomTableMap::COL_INFO, CareRoomTableMap::COL_STATUS, CareRoomTableMap::COL_HISTORY, CareRoomTableMap::COL_MODIFY_ID, CareRoomTableMap::COL_MODIFY_TIME, CareRoomTableMap::COL_CREATE_ID, CareRoomTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'type_nr', 'date_create', 'date_close', 'is_temp_closed', 'room_nr', 'ward_nr', 'dept_nr', 'nr_of_beds', 'closed_beds', 'info', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'TypeNr' => 1, 'DateCreate' => 2, 'DateClose' => 3, 'IsTempClosed' => 4, 'RoomNr' => 5, 'WardNr' => 6, 'DeptNr' => 7, 'NrOfBeds' => 8, 'ClosedBeds' => 9, 'Info' => 10, 'Status' => 11, 'History' => 12, 'ModifyId' => 13, 'ModifyTime' => 14, 'CreateId' => 15, 'CreateTime' => 16, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'typeNr' => 1, 'dateCreate' => 2, 'dateClose' => 3, 'isTempClosed' => 4, 'roomNr' => 5, 'wardNr' => 6, 'deptNr' => 7, 'nrOfBeds' => 8, 'closedBeds' => 9, 'info' => 10, 'status' => 11, 'history' => 12, 'modifyId' => 13, 'modifyTime' => 14, 'createId' => 15, 'createTime' => 16, ),
        self::TYPE_COLNAME       => array(CareRoomTableMap::COL_NR => 0, CareRoomTableMap::COL_TYPE_NR => 1, CareRoomTableMap::COL_DATE_CREATE => 2, CareRoomTableMap::COL_DATE_CLOSE => 3, CareRoomTableMap::COL_IS_TEMP_CLOSED => 4, CareRoomTableMap::COL_ROOM_NR => 5, CareRoomTableMap::COL_WARD_NR => 6, CareRoomTableMap::COL_DEPT_NR => 7, CareRoomTableMap::COL_NR_OF_BEDS => 8, CareRoomTableMap::COL_CLOSED_BEDS => 9, CareRoomTableMap::COL_INFO => 10, CareRoomTableMap::COL_STATUS => 11, CareRoomTableMap::COL_HISTORY => 12, CareRoomTableMap::COL_MODIFY_ID => 13, CareRoomTableMap::COL_MODIFY_TIME => 14, CareRoomTableMap::COL_CREATE_ID => 15, CareRoomTableMap::COL_CREATE_TIME => 16, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'type_nr' => 1, 'date_create' => 2, 'date_close' => 3, 'is_temp_closed' => 4, 'room_nr' => 5, 'ward_nr' => 6, 'dept_nr' => 7, 'nr_of_beds' => 8, 'closed_beds' => 9, 'info' => 10, 'status' => 11, 'history' => 12, 'modify_id' => 13, 'modify_time' => 14, 'create_id' => 15, 'create_time' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('care_room');
        $this->setPhpName('CareRoom');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareRoom');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, 8, null);
        $this->addPrimaryKey('type_nr', 'TypeNr', 'TINYINT', true, 3, 0);
        $this->addColumn('date_create', 'DateCreate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('date_close', 'DateClose', 'DATE', true, null, '0000-00-00');
        $this->addColumn('is_temp_closed', 'IsTempClosed', 'BOOLEAN', false, 1, false);
        $this->addColumn('room_nr', 'RoomNr', 'SMALLINT', true, 5, 0);
        $this->addPrimaryKey('ward_nr', 'WardNr', 'SMALLINT', true, 5, 0);
        $this->addPrimaryKey('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('nr_of_beds', 'NrOfBeds', 'TINYINT', true, 3, 1);
        $this->addColumn('closed_beds', 'ClosedBeds', 'VARCHAR', true, 255, '');
        $this->addColumn('info', 'Info', 'VARCHAR', false, 60, null);
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
     * @param \CareMd\CareMd\CareRoom $obj A \CareMd\CareMd\CareRoom object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getNr() || is_scalar($obj->getNr()) || is_callable([$obj->getNr(), '__toString']) ? (string) $obj->getNr() : $obj->getNr()), (null === $obj->getTypeNr() || is_scalar($obj->getTypeNr()) || is_callable([$obj->getTypeNr(), '__toString']) ? (string) $obj->getTypeNr() : $obj->getTypeNr()), (null === $obj->getWardNr() || is_scalar($obj->getWardNr()) || is_callable([$obj->getWardNr(), '__toString']) ? (string) $obj->getWardNr() : $obj->getWardNr()), (null === $obj->getDeptNr() || is_scalar($obj->getDeptNr()) || is_callable([$obj->getDeptNr(), '__toString']) ? (string) $obj->getDeptNr() : $obj->getDeptNr())]);
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
     * @param mixed $value A \CareMd\CareMd\CareRoom object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CareRoom) {
                $key = serialize([(null === $value->getNr() || is_scalar($value->getNr()) || is_callable([$value->getNr(), '__toString']) ? (string) $value->getNr() : $value->getNr()), (null === $value->getTypeNr() || is_scalar($value->getTypeNr()) || is_callable([$value->getTypeNr(), '__toString']) ? (string) $value->getTypeNr() : $value->getTypeNr()), (null === $value->getWardNr() || is_scalar($value->getWardNr()) || is_callable([$value->getWardNr(), '__toString']) ? (string) $value->getWardNr() : $value->getWardNr()), (null === $value->getDeptNr() || is_scalar($value->getDeptNr()) || is_callable([$value->getDeptNr(), '__toString']) ? (string) $value->getDeptNr() : $value->getDeptNr())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CareRoom object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('TypeNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('WardNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('TypeNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('TypeNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('TypeNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('TypeNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('TypeNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('WardNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('WardNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('WardNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('WardNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('WardNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('TypeNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('WardNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 7 + $offset
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
        return $withPrefix ? CareRoomTableMap::CLASS_DEFAULT : CareRoomTableMap::OM_CLASS;
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
     * @return array           (CareRoom object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareRoomTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareRoomTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareRoomTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareRoomTableMap::OM_CLASS;
            /** @var CareRoom $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareRoomTableMap::addInstanceToPool($obj, $key);
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
            $key = CareRoomTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareRoomTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareRoom $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareRoomTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareRoomTableMap::COL_NR);
            $criteria->addSelectColumn(CareRoomTableMap::COL_TYPE_NR);
            $criteria->addSelectColumn(CareRoomTableMap::COL_DATE_CREATE);
            $criteria->addSelectColumn(CareRoomTableMap::COL_DATE_CLOSE);
            $criteria->addSelectColumn(CareRoomTableMap::COL_IS_TEMP_CLOSED);
            $criteria->addSelectColumn(CareRoomTableMap::COL_ROOM_NR);
            $criteria->addSelectColumn(CareRoomTableMap::COL_WARD_NR);
            $criteria->addSelectColumn(CareRoomTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareRoomTableMap::COL_NR_OF_BEDS);
            $criteria->addSelectColumn(CareRoomTableMap::COL_CLOSED_BEDS);
            $criteria->addSelectColumn(CareRoomTableMap::COL_INFO);
            $criteria->addSelectColumn(CareRoomTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareRoomTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareRoomTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareRoomTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareRoomTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareRoomTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.type_nr');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_close');
            $criteria->addSelectColumn($alias . '.is_temp_closed');
            $criteria->addSelectColumn($alias . '.room_nr');
            $criteria->addSelectColumn($alias . '.ward_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.nr_of_beds');
            $criteria->addSelectColumn($alias . '.closed_beds');
            $criteria->addSelectColumn($alias . '.info');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareRoomTableMap::DATABASE_NAME)->getTable(CareRoomTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareRoomTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareRoomTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareRoomTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareRoom or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareRoom object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareRoomTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareRoom) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareRoomTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CareRoomTableMap::COL_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CareRoomTableMap::COL_TYPE_NR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CareRoomTableMap::COL_WARD_NR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CareRoomTableMap::COL_DEPT_NR, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = CareRoomQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareRoomTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareRoomTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_room table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareRoomQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareRoom or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareRoom object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareRoomTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareRoom object
        }

        if ($criteria->containsKey(CareRoomTableMap::COL_NR) && $criteria->keyContainsValue(CareRoomTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareRoomTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareRoomQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareRoomTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareRoomTableMap::buildTableMap();
