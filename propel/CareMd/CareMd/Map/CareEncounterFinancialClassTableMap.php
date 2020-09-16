<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterFinancialClass;
use CareMd\CareMd\CareEncounterFinancialClassQuery;
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
 * This class defines the structure of the 'care_encounter_financial_class' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterFinancialClassTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterFinancialClassTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_financial_class';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterFinancialClass';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterFinancialClass';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_encounter_financial_class.nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_financial_class.encounter_nr';

    /**
     * the column name for the class_nr field
     */
    const COL_CLASS_NR = 'care_encounter_financial_class.class_nr';

    /**
     * the column name for the date_start field
     */
    const COL_DATE_START = 'care_encounter_financial_class.date_start';

    /**
     * the column name for the date_end field
     */
    const COL_DATE_END = 'care_encounter_financial_class.date_end';

    /**
     * the column name for the date_create field
     */
    const COL_DATE_CREATE = 'care_encounter_financial_class.date_create';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_financial_class.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_financial_class.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_financial_class.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_financial_class.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_financial_class.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_financial_class.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'EncounterNr', 'ClassNr', 'DateStart', 'DateEnd', 'DateCreate', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'encounterNr', 'classNr', 'dateStart', 'dateEnd', 'dateCreate', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterFinancialClassTableMap::COL_NR, CareEncounterFinancialClassTableMap::COL_ENCOUNTER_NR, CareEncounterFinancialClassTableMap::COL_CLASS_NR, CareEncounterFinancialClassTableMap::COL_DATE_START, CareEncounterFinancialClassTableMap::COL_DATE_END, CareEncounterFinancialClassTableMap::COL_DATE_CREATE, CareEncounterFinancialClassTableMap::COL_STATUS, CareEncounterFinancialClassTableMap::COL_HISTORY, CareEncounterFinancialClassTableMap::COL_MODIFY_ID, CareEncounterFinancialClassTableMap::COL_MODIFY_TIME, CareEncounterFinancialClassTableMap::COL_CREATE_ID, CareEncounterFinancialClassTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'encounter_nr', 'class_nr', 'date_start', 'date_end', 'date_create', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'EncounterNr' => 1, 'ClassNr' => 2, 'DateStart' => 3, 'DateEnd' => 4, 'DateCreate' => 5, 'Status' => 6, 'History' => 7, 'ModifyId' => 8, 'ModifyTime' => 9, 'CreateId' => 10, 'CreateTime' => 11, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'encounterNr' => 1, 'classNr' => 2, 'dateStart' => 3, 'dateEnd' => 4, 'dateCreate' => 5, 'status' => 6, 'history' => 7, 'modifyId' => 8, 'modifyTime' => 9, 'createId' => 10, 'createTime' => 11, ),
        self::TYPE_COLNAME       => array(CareEncounterFinancialClassTableMap::COL_NR => 0, CareEncounterFinancialClassTableMap::COL_ENCOUNTER_NR => 1, CareEncounterFinancialClassTableMap::COL_CLASS_NR => 2, CareEncounterFinancialClassTableMap::COL_DATE_START => 3, CareEncounterFinancialClassTableMap::COL_DATE_END => 4, CareEncounterFinancialClassTableMap::COL_DATE_CREATE => 5, CareEncounterFinancialClassTableMap::COL_STATUS => 6, CareEncounterFinancialClassTableMap::COL_HISTORY => 7, CareEncounterFinancialClassTableMap::COL_MODIFY_ID => 8, CareEncounterFinancialClassTableMap::COL_MODIFY_TIME => 9, CareEncounterFinancialClassTableMap::COL_CREATE_ID => 10, CareEncounterFinancialClassTableMap::COL_CREATE_TIME => 11, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'encounter_nr' => 1, 'class_nr' => 2, 'date_start' => 3, 'date_end' => 4, 'date_create' => 5, 'status' => 6, 'history' => 7, 'modify_id' => 8, 'modify_time' => 9, 'create_id' => 10, 'create_time' => 11, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $this->setName('care_encounter_financial_class');
        $this->setPhpName('CareEncounterFinancialClass');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterFinancialClass');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'BIGINT', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('class_nr', 'ClassNr', 'SMALLINT', true, 3, 0);
        $this->addColumn('date_start', 'DateStart', 'DATE', false, null, null);
        $this->addColumn('date_end', 'DateEnd', 'DATE', false, null, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareEncounterFinancialClassTableMap::CLASS_DEFAULT : CareEncounterFinancialClassTableMap::OM_CLASS;
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
     * @return array           (CareEncounterFinancialClass object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterFinancialClassTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterFinancialClassTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterFinancialClassTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterFinancialClassTableMap::OM_CLASS;
            /** @var CareEncounterFinancialClass $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterFinancialClassTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterFinancialClassTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterFinancialClassTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterFinancialClass $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterFinancialClassTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_NR);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_CLASS_NR);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_DATE_START);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_DATE_END);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_DATE_CREATE);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterFinancialClassTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.class_nr');
            $criteria->addSelectColumn($alias . '.date_start');
            $criteria->addSelectColumn($alias . '.date_end');
            $criteria->addSelectColumn($alias . '.date_create');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterFinancialClassTableMap::DATABASE_NAME)->getTable(CareEncounterFinancialClassTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterFinancialClassTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterFinancialClassTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterFinancialClassTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterFinancialClass or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterFinancialClass object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterFinancialClassTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterFinancialClass) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterFinancialClassTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterFinancialClassTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterFinancialClassQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterFinancialClassTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterFinancialClassTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_financial_class table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterFinancialClassQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterFinancialClass or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterFinancialClass object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterFinancialClassTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterFinancialClass object
        }

        if ($criteria->containsKey(CareEncounterFinancialClassTableMap::COL_NR) && $criteria->keyContainsValue(CareEncounterFinancialClassTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterFinancialClassTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterFinancialClassQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterFinancialClassTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterFinancialClassTableMap::buildTableMap();
