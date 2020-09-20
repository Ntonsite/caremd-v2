<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CarePersonellAssignment;
use CareMd\CareMd\CarePersonellAssignmentQuery;
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
 * This class defines the structure of the 'care_personell_assignment' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CarePersonellAssignmentTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CarePersonellAssignmentTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_personell_assignment';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CarePersonellAssignment';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CarePersonellAssignment';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 15;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 15;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_personell_assignment.nr';

    /**
     * the column name for the personell_nr field
     */
    const COL_PERSONELL_NR = 'care_personell_assignment.personell_nr';

    /**
     * the column name for the role_nr field
     */
    const COL_ROLE_NR = 'care_personell_assignment.role_nr';

    /**
     * the column name for the location_type_nr field
     */
    const COL_LOCATION_TYPE_NR = 'care_personell_assignment.location_type_nr';

    /**
     * the column name for the location_nr field
     */
    const COL_LOCATION_NR = 'care_personell_assignment.location_nr';

    /**
     * the column name for the date_start field
     */
    const COL_DATE_START = 'care_personell_assignment.date_start';

    /**
     * the column name for the date_end field
     */
    const COL_DATE_END = 'care_personell_assignment.date_end';

    /**
     * the column name for the is_temporary field
     */
    const COL_IS_TEMPORARY = 'care_personell_assignment.is_temporary';

    /**
     * the column name for the list_frequency field
     */
    const COL_LIST_FREQUENCY = 'care_personell_assignment.list_frequency';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_personell_assignment.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_personell_assignment.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_personell_assignment.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_personell_assignment.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_personell_assignment.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_personell_assignment.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'PersonellNr', 'RoleNr', 'LocationTypeNr', 'LocationNr', 'DateStart', 'DateEnd', 'IsTemporary', 'ListFrequency', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'personellNr', 'roleNr', 'locationTypeNr', 'locationNr', 'dateStart', 'dateEnd', 'isTemporary', 'listFrequency', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CarePersonellAssignmentTableMap::COL_NR, CarePersonellAssignmentTableMap::COL_PERSONELL_NR, CarePersonellAssignmentTableMap::COL_ROLE_NR, CarePersonellAssignmentTableMap::COL_LOCATION_TYPE_NR, CarePersonellAssignmentTableMap::COL_LOCATION_NR, CarePersonellAssignmentTableMap::COL_DATE_START, CarePersonellAssignmentTableMap::COL_DATE_END, CarePersonellAssignmentTableMap::COL_IS_TEMPORARY, CarePersonellAssignmentTableMap::COL_LIST_FREQUENCY, CarePersonellAssignmentTableMap::COL_STATUS, CarePersonellAssignmentTableMap::COL_HISTORY, CarePersonellAssignmentTableMap::COL_MODIFY_ID, CarePersonellAssignmentTableMap::COL_MODIFY_TIME, CarePersonellAssignmentTableMap::COL_CREATE_ID, CarePersonellAssignmentTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'personell_nr', 'role_nr', 'location_type_nr', 'location_nr', 'date_start', 'date_end', 'is_temporary', 'list_frequency', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'PersonellNr' => 1, 'RoleNr' => 2, 'LocationTypeNr' => 3, 'LocationNr' => 4, 'DateStart' => 5, 'DateEnd' => 6, 'IsTemporary' => 7, 'ListFrequency' => 8, 'Status' => 9, 'History' => 10, 'ModifyId' => 11, 'ModifyTime' => 12, 'CreateId' => 13, 'CreateTime' => 14, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'personellNr' => 1, 'roleNr' => 2, 'locationTypeNr' => 3, 'locationNr' => 4, 'dateStart' => 5, 'dateEnd' => 6, 'isTemporary' => 7, 'listFrequency' => 8, 'status' => 9, 'history' => 10, 'modifyId' => 11, 'modifyTime' => 12, 'createId' => 13, 'createTime' => 14, ),
        self::TYPE_COLNAME       => array(CarePersonellAssignmentTableMap::COL_NR => 0, CarePersonellAssignmentTableMap::COL_PERSONELL_NR => 1, CarePersonellAssignmentTableMap::COL_ROLE_NR => 2, CarePersonellAssignmentTableMap::COL_LOCATION_TYPE_NR => 3, CarePersonellAssignmentTableMap::COL_LOCATION_NR => 4, CarePersonellAssignmentTableMap::COL_DATE_START => 5, CarePersonellAssignmentTableMap::COL_DATE_END => 6, CarePersonellAssignmentTableMap::COL_IS_TEMPORARY => 7, CarePersonellAssignmentTableMap::COL_LIST_FREQUENCY => 8, CarePersonellAssignmentTableMap::COL_STATUS => 9, CarePersonellAssignmentTableMap::COL_HISTORY => 10, CarePersonellAssignmentTableMap::COL_MODIFY_ID => 11, CarePersonellAssignmentTableMap::COL_MODIFY_TIME => 12, CarePersonellAssignmentTableMap::COL_CREATE_ID => 13, CarePersonellAssignmentTableMap::COL_CREATE_TIME => 14, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'personell_nr' => 1, 'role_nr' => 2, 'location_type_nr' => 3, 'location_nr' => 4, 'date_start' => 5, 'date_end' => 6, 'is_temporary' => 7, 'list_frequency' => 8, 'status' => 9, 'history' => 10, 'modify_id' => 11, 'modify_time' => 12, 'create_id' => 13, 'create_time' => 14, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $this->setName('care_personell_assignment');
        $this->setPhpName('CarePersonellAssignment');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CarePersonellAssignment');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, 10, null);
        $this->addPrimaryKey('personell_nr', 'PersonellNr', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('role_nr', 'RoleNr', 'SMALLINT', true, 5, 0);
        $this->addPrimaryKey('location_type_nr', 'LocationTypeNr', 'SMALLINT', true, 5, 0);
        $this->addPrimaryKey('location_nr', 'LocationNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('date_start', 'DateStart', 'DATE', true, null, '0000-00-00');
        $this->addColumn('date_end', 'DateEnd', 'DATE', true, null, '0000-00-00');
        $this->addColumn('is_temporary', 'IsTemporary', 'BOOLEAN', false, 1, null);
        $this->addColumn('list_frequency', 'ListFrequency', 'INTEGER', true, null, 0);
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
     * @param \CareMd\CareMd\CarePersonellAssignment $obj A \CareMd\CareMd\CarePersonellAssignment object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getNr() || is_scalar($obj->getNr()) || is_callable([$obj->getNr(), '__toString']) ? (string) $obj->getNr() : $obj->getNr()), (null === $obj->getPersonellNr() || is_scalar($obj->getPersonellNr()) || is_callable([$obj->getPersonellNr(), '__toString']) ? (string) $obj->getPersonellNr() : $obj->getPersonellNr()), (null === $obj->getRoleNr() || is_scalar($obj->getRoleNr()) || is_callable([$obj->getRoleNr(), '__toString']) ? (string) $obj->getRoleNr() : $obj->getRoleNr()), (null === $obj->getLocationTypeNr() || is_scalar($obj->getLocationTypeNr()) || is_callable([$obj->getLocationTypeNr(), '__toString']) ? (string) $obj->getLocationTypeNr() : $obj->getLocationTypeNr()), (null === $obj->getLocationNr() || is_scalar($obj->getLocationNr()) || is_callable([$obj->getLocationNr(), '__toString']) ? (string) $obj->getLocationNr() : $obj->getLocationNr())]);
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
     * @param mixed $value A \CareMd\CareMd\CarePersonellAssignment object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CarePersonellAssignment) {
                $key = serialize([(null === $value->getNr() || is_scalar($value->getNr()) || is_callable([$value->getNr(), '__toString']) ? (string) $value->getNr() : $value->getNr()), (null === $value->getPersonellNr() || is_scalar($value->getPersonellNr()) || is_callable([$value->getPersonellNr(), '__toString']) ? (string) $value->getPersonellNr() : $value->getPersonellNr()), (null === $value->getRoleNr() || is_scalar($value->getRoleNr()) || is_callable([$value->getRoleNr(), '__toString']) ? (string) $value->getRoleNr() : $value->getRoleNr()), (null === $value->getLocationTypeNr() || is_scalar($value->getLocationTypeNr()) || is_callable([$value->getLocationTypeNr(), '__toString']) ? (string) $value->getLocationTypeNr() : $value->getLocationTypeNr()), (null === $value->getLocationNr() || is_scalar($value->getLocationNr()) || is_callable([$value->getLocationNr(), '__toString']) ? (string) $value->getLocationNr() : $value->getLocationNr())]);

            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CarePersonellAssignment object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoleNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationTypeNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoleNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoleNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoleNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoleNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('RoleNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationTypeNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationTypeNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationTypeNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationTypeNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationTypeNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('RoleNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('LocationTypeNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CarePersonellAssignmentTableMap::CLASS_DEFAULT : CarePersonellAssignmentTableMap::OM_CLASS;
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
     * @return array           (CarePersonellAssignment object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CarePersonellAssignmentTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CarePersonellAssignmentTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CarePersonellAssignmentTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CarePersonellAssignmentTableMap::OM_CLASS;
            /** @var CarePersonellAssignment $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CarePersonellAssignmentTableMap::addInstanceToPool($obj, $key);
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
            $key = CarePersonellAssignmentTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CarePersonellAssignmentTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CarePersonellAssignment $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CarePersonellAssignmentTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_NR);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_PERSONELL_NR);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_ROLE_NR);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_LOCATION_TYPE_NR);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_LOCATION_NR);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_DATE_START);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_DATE_END);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_IS_TEMPORARY);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_LIST_FREQUENCY);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_STATUS);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CarePersonellAssignmentTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.personell_nr');
            $criteria->addSelectColumn($alias . '.role_nr');
            $criteria->addSelectColumn($alias . '.location_type_nr');
            $criteria->addSelectColumn($alias . '.location_nr');
            $criteria->addSelectColumn($alias . '.date_start');
            $criteria->addSelectColumn($alias . '.date_end');
            $criteria->addSelectColumn($alias . '.is_temporary');
            $criteria->addSelectColumn($alias . '.list_frequency');
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
        return Propel::getServiceContainer()->getDatabaseMap(CarePersonellAssignmentTableMap::DATABASE_NAME)->getTable(CarePersonellAssignmentTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CarePersonellAssignmentTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CarePersonellAssignmentTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CarePersonellAssignmentTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CarePersonellAssignment or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CarePersonellAssignment object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonellAssignmentTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CarePersonellAssignment) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CarePersonellAssignmentTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CarePersonellAssignmentTableMap::COL_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CarePersonellAssignmentTableMap::COL_PERSONELL_NR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CarePersonellAssignmentTableMap::COL_ROLE_NR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CarePersonellAssignmentTableMap::COL_LOCATION_TYPE_NR, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(CarePersonellAssignmentTableMap::COL_LOCATION_NR, $value[4]));
                $criteria->addOr($criterion);
            }
        }

        $query = CarePersonellAssignmentQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CarePersonellAssignmentTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CarePersonellAssignmentTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_personell_assignment table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CarePersonellAssignmentQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CarePersonellAssignment or Criteria object.
     *
     * @param mixed               $criteria Criteria or CarePersonellAssignment object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonellAssignmentTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CarePersonellAssignment object
        }

        if ($criteria->containsKey(CarePersonellAssignmentTableMap::COL_NR) && $criteria->keyContainsValue(CarePersonellAssignmentTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CarePersonellAssignmentTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CarePersonellAssignmentQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CarePersonellAssignmentTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CarePersonellAssignmentTableMap::buildTableMap();
