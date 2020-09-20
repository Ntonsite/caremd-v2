<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterLocation;
use CareMd\CareMd\CareEncounterLocationQuery;
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
 * This class defines the structure of the 'care_encounter_location' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterLocationTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterLocationTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_location';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterLocation';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterLocation';

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
     * the column name for the nr field
     */
    const COL_NR = 'care_encounter_location.nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_location.encounter_nr';

    /**
     * the column name for the type_nr field
     */
    const COL_TYPE_NR = 'care_encounter_location.type_nr';

    /**
     * the column name for the location_nr field
     */
    const COL_LOCATION_NR = 'care_encounter_location.location_nr';

    /**
     * the column name for the group_nr field
     */
    const COL_GROUP_NR = 'care_encounter_location.group_nr';

    /**
     * the column name for the date_from field
     */
    const COL_DATE_FROM = 'care_encounter_location.date_from';

    /**
     * the column name for the date_to field
     */
    const COL_DATE_TO = 'care_encounter_location.date_to';

    /**
     * the column name for the time_from field
     */
    const COL_TIME_FROM = 'care_encounter_location.time_from';

    /**
     * the column name for the time_to field
     */
    const COL_TIME_TO = 'care_encounter_location.time_to';

    /**
     * the column name for the discharge_type_nr field
     */
    const COL_DISCHARGE_TYPE_NR = 'care_encounter_location.discharge_type_nr';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_location.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_location.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_location.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_location.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_location.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_location.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'EncounterNr', 'TypeNr', 'LocationNr', 'GroupNr', 'DateFrom', 'DateTo', 'TimeFrom', 'TimeTo', 'DischargeTypeNr', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'encounterNr', 'typeNr', 'locationNr', 'groupNr', 'dateFrom', 'dateTo', 'timeFrom', 'timeTo', 'dischargeTypeNr', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterLocationTableMap::COL_NR, CareEncounterLocationTableMap::COL_ENCOUNTER_NR, CareEncounterLocationTableMap::COL_TYPE_NR, CareEncounterLocationTableMap::COL_LOCATION_NR, CareEncounterLocationTableMap::COL_GROUP_NR, CareEncounterLocationTableMap::COL_DATE_FROM, CareEncounterLocationTableMap::COL_DATE_TO, CareEncounterLocationTableMap::COL_TIME_FROM, CareEncounterLocationTableMap::COL_TIME_TO, CareEncounterLocationTableMap::COL_DISCHARGE_TYPE_NR, CareEncounterLocationTableMap::COL_STATUS, CareEncounterLocationTableMap::COL_HISTORY, CareEncounterLocationTableMap::COL_MODIFY_ID, CareEncounterLocationTableMap::COL_MODIFY_TIME, CareEncounterLocationTableMap::COL_CREATE_ID, CareEncounterLocationTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'encounter_nr', 'type_nr', 'location_nr', 'group_nr', 'date_from', 'date_to', 'time_from', 'time_to', 'discharge_type_nr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'EncounterNr' => 1, 'TypeNr' => 2, 'LocationNr' => 3, 'GroupNr' => 4, 'DateFrom' => 5, 'DateTo' => 6, 'TimeFrom' => 7, 'TimeTo' => 8, 'DischargeTypeNr' => 9, 'Status' => 10, 'History' => 11, 'ModifyId' => 12, 'ModifyTime' => 13, 'CreateId' => 14, 'CreateTime' => 15, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'encounterNr' => 1, 'typeNr' => 2, 'locationNr' => 3, 'groupNr' => 4, 'dateFrom' => 5, 'dateTo' => 6, 'timeFrom' => 7, 'timeTo' => 8, 'dischargeTypeNr' => 9, 'status' => 10, 'history' => 11, 'modifyId' => 12, 'modifyTime' => 13, 'createId' => 14, 'createTime' => 15, ),
        self::TYPE_COLNAME       => array(CareEncounterLocationTableMap::COL_NR => 0, CareEncounterLocationTableMap::COL_ENCOUNTER_NR => 1, CareEncounterLocationTableMap::COL_TYPE_NR => 2, CareEncounterLocationTableMap::COL_LOCATION_NR => 3, CareEncounterLocationTableMap::COL_GROUP_NR => 4, CareEncounterLocationTableMap::COL_DATE_FROM => 5, CareEncounterLocationTableMap::COL_DATE_TO => 6, CareEncounterLocationTableMap::COL_TIME_FROM => 7, CareEncounterLocationTableMap::COL_TIME_TO => 8, CareEncounterLocationTableMap::COL_DISCHARGE_TYPE_NR => 9, CareEncounterLocationTableMap::COL_STATUS => 10, CareEncounterLocationTableMap::COL_HISTORY => 11, CareEncounterLocationTableMap::COL_MODIFY_ID => 12, CareEncounterLocationTableMap::COL_MODIFY_TIME => 13, CareEncounterLocationTableMap::COL_CREATE_ID => 14, CareEncounterLocationTableMap::COL_CREATE_TIME => 15, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'encounter_nr' => 1, 'type_nr' => 2, 'location_nr' => 3, 'group_nr' => 4, 'date_from' => 5, 'date_to' => 6, 'time_from' => 7, 'time_to' => 8, 'discharge_type_nr' => 9, 'status' => 10, 'history' => 11, 'modify_id' => 12, 'modify_time' => 13, 'create_id' => 14, 'create_time' => 15, ),
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
        $this->setName('care_encounter_location');
        $this->setPhpName('CareEncounterLocation');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterLocation');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('type_nr', 'TypeNr', 'SMALLINT', true, 5, 0);
        $this->addPrimaryKey('location_nr', 'LocationNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('group_nr', 'GroupNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('date_from', 'DateFrom', 'DATE', true, null, '0000-00-00');
        $this->addColumn('date_to', 'DateTo', 'DATE', true, null, '0000-00-00');
        $this->addColumn('time_from', 'TimeFrom', 'TIME', false, null, '00:00:00');
        $this->addColumn('time_to', 'TimeTo', 'TIME', false, null, null);
        $this->addColumn('discharge_type_nr', 'DischargeTypeNr', 'TINYINT', true, 3, 0);
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
     * @param \CareMd\CareMd\CareEncounterLocation $obj A \CareMd\CareMd\CareEncounterLocation object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getNr() || is_scalar($obj->getNr()) || is_callable([$obj->getNr(), '__toString']) ? (string) $obj->getNr() : $obj->getNr()), (null === $obj->getLocationNr() || is_scalar($obj->getLocationNr()) || is_callable([$obj->getLocationNr(), '__toString']) ? (string) $obj->getLocationNr() : $obj->getLocationNr())]);
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
     * @param mixed $value A \CareMd\CareMd\CareEncounterLocation object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CareEncounterLocation) {
                $key = serialize([(null === $value->getNr() || is_scalar($value->getNr()) || is_callable([$value->getNr(), '__toString']) ? (string) $value->getNr() : $value->getNr()), (null === $value->getLocationNr() || is_scalar($value->getLocationNr()) || is_callable([$value->getLocationNr(), '__toString']) ? (string) $value->getLocationNr() : $value->getLocationNr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CareEncounterLocation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                ? 3 + $offset
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
        return $withPrefix ? CareEncounterLocationTableMap::CLASS_DEFAULT : CareEncounterLocationTableMap::OM_CLASS;
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
     * @return array           (CareEncounterLocation object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterLocationTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterLocationTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterLocationTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterLocationTableMap::OM_CLASS;
            /** @var CareEncounterLocation $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterLocationTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterLocationTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterLocationTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterLocation $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterLocationTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_NR);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_TYPE_NR);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_LOCATION_NR);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_GROUP_NR);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_DATE_FROM);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_DATE_TO);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_TIME_FROM);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_TIME_TO);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_DISCHARGE_TYPE_NR);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterLocationTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.type_nr');
            $criteria->addSelectColumn($alias . '.location_nr');
            $criteria->addSelectColumn($alias . '.group_nr');
            $criteria->addSelectColumn($alias . '.date_from');
            $criteria->addSelectColumn($alias . '.date_to');
            $criteria->addSelectColumn($alias . '.time_from');
            $criteria->addSelectColumn($alias . '.time_to');
            $criteria->addSelectColumn($alias . '.discharge_type_nr');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterLocationTableMap::DATABASE_NAME)->getTable(CareEncounterLocationTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterLocationTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterLocationTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterLocationTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterLocation or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterLocation object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterLocationTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterLocation) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterLocationTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CareEncounterLocationTableMap::COL_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CareEncounterLocationTableMap::COL_LOCATION_NR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = CareEncounterLocationQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterLocationTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterLocationTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_location table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterLocationQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterLocation or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterLocation object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterLocationTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterLocation object
        }

        if ($criteria->containsKey(CareEncounterLocationTableMap::COL_NR) && $criteria->keyContainsValue(CareEncounterLocationTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterLocationTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterLocationQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterLocationTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterLocationTableMap::buildTableMap();
