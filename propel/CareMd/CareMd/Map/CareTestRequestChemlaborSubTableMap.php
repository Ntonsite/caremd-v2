<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTestRequestChemlaborSub;
use CareMd\CareMd\CareTestRequestChemlaborSubQuery;
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
 * This class defines the structure of the 'care_test_request_chemlabor_sub' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTestRequestChemlaborSubTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTestRequestChemlaborSubTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_test_request_chemlabor_sub';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTestRequestChemlaborSub';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTestRequestChemlaborSub';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 13;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 13;

    /**
     * the column name for the sub_id field
     */
    const COL_SUB_ID = 'care_test_request_chemlabor_sub.sub_id';

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_test_request_chemlabor_sub.batch_nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_test_request_chemlabor_sub.encounter_nr';

    /**
     * the column name for the paramater_name field
     */
    const COL_PARAMATER_NAME = 'care_test_request_chemlabor_sub.paramater_name';

    /**
     * the column name for the parameter_value field
     */
    const COL_PARAMETER_VALUE = 'care_test_request_chemlabor_sub.parameter_value';

    /**
     * the column name for the item_id field
     */
    const COL_ITEM_ID = 'care_test_request_chemlabor_sub.item_id';

    /**
     * the column name for the bill_number field
     */
    const COL_BILL_NUMBER = 'care_test_request_chemlabor_sub.bill_number';

    /**
     * the column name for the bill_status field
     */
    const COL_BILL_STATUS = 'care_test_request_chemlabor_sub.bill_status';

    /**
     * the column name for the is_disabled field
     */
    const COL_IS_DISABLED = 'care_test_request_chemlabor_sub.is_disabled';

    /**
     * the column name for the disable_id field
     */
    const COL_DISABLE_ID = 'care_test_request_chemlabor_sub.disable_id';

    /**
     * the column name for the disable_date field
     */
    const COL_DISABLE_DATE = 'care_test_request_chemlabor_sub.disable_date';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_test_request_chemlabor_sub.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_test_request_chemlabor_sub.history';

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
        self::TYPE_PHPNAME       => array('SubId', 'BatchNr', 'EncounterNr', 'ParamaterName', 'ParameterValue', 'ItemId', 'BillNumber', 'BillStatus', 'IsDisabled', 'DisableId', 'DisableDate', 'Status', 'History', ),
        self::TYPE_CAMELNAME     => array('subId', 'batchNr', 'encounterNr', 'paramaterName', 'parameterValue', 'itemId', 'billNumber', 'billStatus', 'isDisabled', 'disableId', 'disableDate', 'status', 'history', ),
        self::TYPE_COLNAME       => array(CareTestRequestChemlaborSubTableMap::COL_SUB_ID, CareTestRequestChemlaborSubTableMap::COL_BATCH_NR, CareTestRequestChemlaborSubTableMap::COL_ENCOUNTER_NR, CareTestRequestChemlaborSubTableMap::COL_PARAMATER_NAME, CareTestRequestChemlaborSubTableMap::COL_PARAMETER_VALUE, CareTestRequestChemlaborSubTableMap::COL_ITEM_ID, CareTestRequestChemlaborSubTableMap::COL_BILL_NUMBER, CareTestRequestChemlaborSubTableMap::COL_BILL_STATUS, CareTestRequestChemlaborSubTableMap::COL_IS_DISABLED, CareTestRequestChemlaborSubTableMap::COL_DISABLE_ID, CareTestRequestChemlaborSubTableMap::COL_DISABLE_DATE, CareTestRequestChemlaborSubTableMap::COL_STATUS, CareTestRequestChemlaborSubTableMap::COL_HISTORY, ),
        self::TYPE_FIELDNAME     => array('sub_id', 'batch_nr', 'encounter_nr', 'paramater_name', 'parameter_value', 'item_id', 'bill_number', 'bill_status', 'is_disabled', 'disable_id', 'disable_date', 'status', 'history', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('SubId' => 0, 'BatchNr' => 1, 'EncounterNr' => 2, 'ParamaterName' => 3, 'ParameterValue' => 4, 'ItemId' => 5, 'BillNumber' => 6, 'BillStatus' => 7, 'IsDisabled' => 8, 'DisableId' => 9, 'DisableDate' => 10, 'Status' => 11, 'History' => 12, ),
        self::TYPE_CAMELNAME     => array('subId' => 0, 'batchNr' => 1, 'encounterNr' => 2, 'paramaterName' => 3, 'parameterValue' => 4, 'itemId' => 5, 'billNumber' => 6, 'billStatus' => 7, 'isDisabled' => 8, 'disableId' => 9, 'disableDate' => 10, 'status' => 11, 'history' => 12, ),
        self::TYPE_COLNAME       => array(CareTestRequestChemlaborSubTableMap::COL_SUB_ID => 0, CareTestRequestChemlaborSubTableMap::COL_BATCH_NR => 1, CareTestRequestChemlaborSubTableMap::COL_ENCOUNTER_NR => 2, CareTestRequestChemlaborSubTableMap::COL_PARAMATER_NAME => 3, CareTestRequestChemlaborSubTableMap::COL_PARAMETER_VALUE => 4, CareTestRequestChemlaborSubTableMap::COL_ITEM_ID => 5, CareTestRequestChemlaborSubTableMap::COL_BILL_NUMBER => 6, CareTestRequestChemlaborSubTableMap::COL_BILL_STATUS => 7, CareTestRequestChemlaborSubTableMap::COL_IS_DISABLED => 8, CareTestRequestChemlaborSubTableMap::COL_DISABLE_ID => 9, CareTestRequestChemlaborSubTableMap::COL_DISABLE_DATE => 10, CareTestRequestChemlaborSubTableMap::COL_STATUS => 11, CareTestRequestChemlaborSubTableMap::COL_HISTORY => 12, ),
        self::TYPE_FIELDNAME     => array('sub_id' => 0, 'batch_nr' => 1, 'encounter_nr' => 2, 'paramater_name' => 3, 'parameter_value' => 4, 'item_id' => 5, 'bill_number' => 6, 'bill_status' => 7, 'is_disabled' => 8, 'disable_id' => 9, 'disable_date' => 10, 'status' => 11, 'history' => 12, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $this->setName('care_test_request_chemlabor_sub');
        $this->setPhpName('CareTestRequestChemlaborSub');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTestRequestChemlaborSub');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('sub_id', 'SubId', 'INTEGER', true, 40, null);
        $this->addColumn('batch_nr', 'BatchNr', 'INTEGER', true, null, 0);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('paramater_name', 'ParamaterName', 'VARCHAR', false, 255, '0');
        $this->addColumn('parameter_value', 'ParameterValue', 'VARCHAR', false, 255, '0');
        $this->addColumn('item_id', 'ItemId', 'VARCHAR', true, 15, null);
        $this->addColumn('bill_number', 'BillNumber', 'INTEGER', true, 20, null);
        $this->addColumn('bill_status', 'BillStatus', 'VARCHAR', true, 15, null);
        $this->addColumn('is_disabled', 'IsDisabled', 'VARCHAR', true, 4, null);
        $this->addColumn('disable_id', 'DisableId', 'VARCHAR', true, 20, null);
        $this->addColumn('disable_date', 'DisableDate', 'DATE', true, null, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 15, null);
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('SubId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTestRequestChemlaborSubTableMap::CLASS_DEFAULT : CareTestRequestChemlaborSubTableMap::OM_CLASS;
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
     * @return array           (CareTestRequestChemlaborSub object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTestRequestChemlaborSubTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTestRequestChemlaborSubTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTestRequestChemlaborSubTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTestRequestChemlaborSubTableMap::OM_CLASS;
            /** @var CareTestRequestChemlaborSub $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTestRequestChemlaborSubTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTestRequestChemlaborSubTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTestRequestChemlaborSubTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTestRequestChemlaborSub $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTestRequestChemlaborSubTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_SUB_ID);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_PARAMATER_NAME);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_PARAMETER_VALUE);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_ITEM_ID);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_BILL_NUMBER);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_BILL_STATUS);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_IS_DISABLED);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_DISABLE_ID);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_DISABLE_DATE);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTestRequestChemlaborSubTableMap::COL_HISTORY);
        } else {
            $criteria->addSelectColumn($alias . '.sub_id');
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.paramater_name');
            $criteria->addSelectColumn($alias . '.parameter_value');
            $criteria->addSelectColumn($alias . '.item_id');
            $criteria->addSelectColumn($alias . '.bill_number');
            $criteria->addSelectColumn($alias . '.bill_status');
            $criteria->addSelectColumn($alias . '.is_disabled');
            $criteria->addSelectColumn($alias . '.disable_id');
            $criteria->addSelectColumn($alias . '.disable_date');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTestRequestChemlaborSubTableMap::DATABASE_NAME)->getTable(CareTestRequestChemlaborSubTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTestRequestChemlaborSubTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTestRequestChemlaborSubTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTestRequestChemlaborSubTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTestRequestChemlaborSub or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTestRequestChemlaborSub object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestChemlaborSubTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTestRequestChemlaborSub) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTestRequestChemlaborSubTableMap::DATABASE_NAME);
            $criteria->add(CareTestRequestChemlaborSubTableMap::COL_SUB_ID, (array) $values, Criteria::IN);
        }

        $query = CareTestRequestChemlaborSubQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTestRequestChemlaborSubTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTestRequestChemlaborSubTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_test_request_chemlabor_sub table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTestRequestChemlaborSubQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTestRequestChemlaborSub or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTestRequestChemlaborSub object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestChemlaborSubTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTestRequestChemlaborSub object
        }

        if ($criteria->containsKey(CareTestRequestChemlaborSubTableMap::COL_SUB_ID) && $criteria->keyContainsValue(CareTestRequestChemlaborSubTableMap::COL_SUB_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTestRequestChemlaborSubTableMap::COL_SUB_ID.')');
        }


        // Set the correct dbName
        $query = CareTestRequestChemlaborSubQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTestRequestChemlaborSubTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTestRequestChemlaborSubTableMap::buildTableMap();
