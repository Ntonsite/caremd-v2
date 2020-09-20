<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterDrugsheet;
use CareMd\CareMd\CareEncounterDrugsheetQuery;
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
 * This class defines the structure of the 'care_encounter_drugsheet' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterDrugsheetTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterDrugsheetTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_drugsheet';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterDrugsheet';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterDrugsheet';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the prescr_nr field
     */
    const COL_PRESCR_NR = 'care_encounter_drugsheet.prescr_nr';

    /**
     * the column name for the chart_date field
     */
    const COL_CHART_DATE = 'care_encounter_drugsheet.chart_date';

    /**
     * the column name for the chart_time field
     */
    const COL_CHART_TIME = 'care_encounter_drugsheet.chart_time';

    /**
     * the column name for the amount field
     */
    const COL_AMOUNT = 'care_encounter_drugsheet.amount';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_drugsheet.status';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_drugsheet.create_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_drugsheet.create_id';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_drugsheet.modify_id';

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
        self::TYPE_PHPNAME       => array('PrescrNr', 'ChartDate', 'ChartTime', 'Amount', 'Status', 'CreateTime', 'CreateId', 'ModifyId', ),
        self::TYPE_CAMELNAME     => array('prescrNr', 'chartDate', 'chartTime', 'amount', 'status', 'createTime', 'createId', 'modifyId', ),
        self::TYPE_COLNAME       => array(CareEncounterDrugsheetTableMap::COL_PRESCR_NR, CareEncounterDrugsheetTableMap::COL_CHART_DATE, CareEncounterDrugsheetTableMap::COL_CHART_TIME, CareEncounterDrugsheetTableMap::COL_AMOUNT, CareEncounterDrugsheetTableMap::COL_STATUS, CareEncounterDrugsheetTableMap::COL_CREATE_TIME, CareEncounterDrugsheetTableMap::COL_CREATE_ID, CareEncounterDrugsheetTableMap::COL_MODIFY_ID, ),
        self::TYPE_FIELDNAME     => array('prescr_nr', 'chart_date', 'chart_time', 'amount', 'status', 'create_time', 'create_id', 'modify_id', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('PrescrNr' => 0, 'ChartDate' => 1, 'ChartTime' => 2, 'Amount' => 3, 'Status' => 4, 'CreateTime' => 5, 'CreateId' => 6, 'ModifyId' => 7, ),
        self::TYPE_CAMELNAME     => array('prescrNr' => 0, 'chartDate' => 1, 'chartTime' => 2, 'amount' => 3, 'status' => 4, 'createTime' => 5, 'createId' => 6, 'modifyId' => 7, ),
        self::TYPE_COLNAME       => array(CareEncounterDrugsheetTableMap::COL_PRESCR_NR => 0, CareEncounterDrugsheetTableMap::COL_CHART_DATE => 1, CareEncounterDrugsheetTableMap::COL_CHART_TIME => 2, CareEncounterDrugsheetTableMap::COL_AMOUNT => 3, CareEncounterDrugsheetTableMap::COL_STATUS => 4, CareEncounterDrugsheetTableMap::COL_CREATE_TIME => 5, CareEncounterDrugsheetTableMap::COL_CREATE_ID => 6, CareEncounterDrugsheetTableMap::COL_MODIFY_ID => 7, ),
        self::TYPE_FIELDNAME     => array('prescr_nr' => 0, 'chart_date' => 1, 'chart_time' => 2, 'amount' => 3, 'status' => 4, 'create_time' => 5, 'create_id' => 6, 'modify_id' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
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
        $this->setName('care_encounter_drugsheet');
        $this->setPhpName('CareEncounterDrugsheet');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterDrugsheet');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('prescr_nr', 'PrescrNr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('chart_date', 'ChartDate', 'DATE', true, null, null);
        $this->addPrimaryKey('chart_time', 'ChartTime', 'VARCHAR', true, 6, null);
        $this->addColumn('amount', 'Amount', 'DECIMAL', true, 4, null);
        $this->addColumn('status', 'Status', 'TINYINT', true, null, 0);
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 100, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 255, null);
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
     * @param \CareMd\CareMd\CareEncounterDrugsheet $obj A \CareMd\CareMd\CareEncounterDrugsheet object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getPrescrNr() || is_scalar($obj->getPrescrNr()) || is_callable([$obj->getPrescrNr(), '__toString']) ? (string) $obj->getPrescrNr() : $obj->getPrescrNr()), (null === $obj->getChartDate() || is_scalar($obj->getChartDate()) || is_callable([$obj->getChartDate(), '__toString']) ? (string) $obj->getChartDate() : $obj->getChartDate()), (null === $obj->getChartTime() || is_scalar($obj->getChartTime()) || is_callable([$obj->getChartTime(), '__toString']) ? (string) $obj->getChartTime() : $obj->getChartTime())]);
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
     * @param mixed $value A \CareMd\CareMd\CareEncounterDrugsheet object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CareEncounterDrugsheet) {
                $key = serialize([(null === $value->getPrescrNr() || is_scalar($value->getPrescrNr()) || is_callable([$value->getPrescrNr(), '__toString']) ? (string) $value->getPrescrNr() : $value->getPrescrNr()), (null === $value->getChartDate() || is_scalar($value->getChartDate()) || is_callable([$value->getChartDate(), '__toString']) ? (string) $value->getChartDate() : $value->getChartDate()), (null === $value->getChartTime() || is_scalar($value->getChartTime()) || is_callable([$value->getChartTime(), '__toString']) ? (string) $value->getChartTime() : $value->getChartTime())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CareEncounterDrugsheet object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PrescrNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ChartDate', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('ChartTime', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PrescrNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PrescrNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PrescrNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PrescrNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PrescrNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ChartDate', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ChartDate', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ChartDate', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ChartDate', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('ChartDate', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('ChartTime', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('ChartTime', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('ChartTime', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('ChartTime', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('ChartTime', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('PrescrNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('ChartDate', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('ChartTime', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareEncounterDrugsheetTableMap::CLASS_DEFAULT : CareEncounterDrugsheetTableMap::OM_CLASS;
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
     * @return array           (CareEncounterDrugsheet object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterDrugsheetTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterDrugsheetTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterDrugsheetTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterDrugsheetTableMap::OM_CLASS;
            /** @var CareEncounterDrugsheet $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterDrugsheetTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterDrugsheetTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterDrugsheetTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterDrugsheet $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterDrugsheetTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterDrugsheetTableMap::COL_PRESCR_NR);
            $criteria->addSelectColumn(CareEncounterDrugsheetTableMap::COL_CHART_DATE);
            $criteria->addSelectColumn(CareEncounterDrugsheetTableMap::COL_CHART_TIME);
            $criteria->addSelectColumn(CareEncounterDrugsheetTableMap::COL_AMOUNT);
            $criteria->addSelectColumn(CareEncounterDrugsheetTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterDrugsheetTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareEncounterDrugsheetTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterDrugsheetTableMap::COL_MODIFY_ID);
        } else {
            $criteria->addSelectColumn($alias . '.prescr_nr');
            $criteria->addSelectColumn($alias . '.chart_date');
            $criteria->addSelectColumn($alias . '.chart_time');
            $criteria->addSelectColumn($alias . '.amount');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.modify_id');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterDrugsheetTableMap::DATABASE_NAME)->getTable(CareEncounterDrugsheetTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterDrugsheetTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterDrugsheetTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterDrugsheetTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterDrugsheet or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterDrugsheet object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDrugsheetTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterDrugsheet) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterDrugsheetTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CareEncounterDrugsheetTableMap::COL_PRESCR_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CareEncounterDrugsheetTableMap::COL_CHART_DATE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CareEncounterDrugsheetTableMap::COL_CHART_TIME, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = CareEncounterDrugsheetQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterDrugsheetTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterDrugsheetTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_drugsheet table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterDrugsheetQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterDrugsheet or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterDrugsheet object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDrugsheetTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterDrugsheet object
        }


        // Set the correct dbName
        $query = CareEncounterDrugsheetQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterDrugsheetTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterDrugsheetTableMap::buildTableMap();
