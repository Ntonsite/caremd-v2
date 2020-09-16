<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CarePersonInsurance;
use CareMd\CareMd\CarePersonInsuranceQuery;
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
 * This class defines the structure of the 'care_person_insurance' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CarePersonInsuranceTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CarePersonInsuranceTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_person_insurance';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CarePersonInsurance';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CarePersonInsurance';

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
     * the column name for the item_nr field
     */
    const COL_ITEM_NR = 'care_person_insurance.item_nr';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_person_insurance.pid';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'care_person_insurance.type';

    /**
     * the column name for the insurance_nr field
     */
    const COL_INSURANCE_NR = 'care_person_insurance.insurance_nr';

    /**
     * the column name for the firm_id field
     */
    const COL_FIRM_ID = 'care_person_insurance.firm_id';

    /**
     * the column name for the class_nr field
     */
    const COL_CLASS_NR = 'care_person_insurance.class_nr';

    /**
     * the column name for the is_void field
     */
    const COL_IS_VOID = 'care_person_insurance.is_void';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_person_insurance.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_person_insurance.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_person_insurance.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_person_insurance.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_person_insurance.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_person_insurance.create_time';

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
        self::TYPE_PHPNAME       => array('ItemNr', 'Pid', 'Type', 'InsuranceNr', 'FirmId', 'ClassNr', 'IsVoid', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('itemNr', 'pid', 'type', 'insuranceNr', 'firmId', 'classNr', 'isVoid', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CarePersonInsuranceTableMap::COL_ITEM_NR, CarePersonInsuranceTableMap::COL_PID, CarePersonInsuranceTableMap::COL_TYPE, CarePersonInsuranceTableMap::COL_INSURANCE_NR, CarePersonInsuranceTableMap::COL_FIRM_ID, CarePersonInsuranceTableMap::COL_CLASS_NR, CarePersonInsuranceTableMap::COL_IS_VOID, CarePersonInsuranceTableMap::COL_STATUS, CarePersonInsuranceTableMap::COL_HISTORY, CarePersonInsuranceTableMap::COL_MODIFY_ID, CarePersonInsuranceTableMap::COL_MODIFY_TIME, CarePersonInsuranceTableMap::COL_CREATE_ID, CarePersonInsuranceTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('item_nr', 'pid', 'type', 'insurance_nr', 'firm_id', 'class_nr', 'is_void', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ItemNr' => 0, 'Pid' => 1, 'Type' => 2, 'InsuranceNr' => 3, 'FirmId' => 4, 'ClassNr' => 5, 'IsVoid' => 6, 'Status' => 7, 'History' => 8, 'ModifyId' => 9, 'ModifyTime' => 10, 'CreateId' => 11, 'CreateTime' => 12, ),
        self::TYPE_CAMELNAME     => array('itemNr' => 0, 'pid' => 1, 'type' => 2, 'insuranceNr' => 3, 'firmId' => 4, 'classNr' => 5, 'isVoid' => 6, 'status' => 7, 'history' => 8, 'modifyId' => 9, 'modifyTime' => 10, 'createId' => 11, 'createTime' => 12, ),
        self::TYPE_COLNAME       => array(CarePersonInsuranceTableMap::COL_ITEM_NR => 0, CarePersonInsuranceTableMap::COL_PID => 1, CarePersonInsuranceTableMap::COL_TYPE => 2, CarePersonInsuranceTableMap::COL_INSURANCE_NR => 3, CarePersonInsuranceTableMap::COL_FIRM_ID => 4, CarePersonInsuranceTableMap::COL_CLASS_NR => 5, CarePersonInsuranceTableMap::COL_IS_VOID => 6, CarePersonInsuranceTableMap::COL_STATUS => 7, CarePersonInsuranceTableMap::COL_HISTORY => 8, CarePersonInsuranceTableMap::COL_MODIFY_ID => 9, CarePersonInsuranceTableMap::COL_MODIFY_TIME => 10, CarePersonInsuranceTableMap::COL_CREATE_ID => 11, CarePersonInsuranceTableMap::COL_CREATE_TIME => 12, ),
        self::TYPE_FIELDNAME     => array('item_nr' => 0, 'pid' => 1, 'type' => 2, 'insurance_nr' => 3, 'firm_id' => 4, 'class_nr' => 5, 'is_void' => 6, 'status' => 7, 'history' => 8, 'modify_id' => 9, 'modify_time' => 10, 'create_id' => 11, 'create_time' => 12, ),
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
        $this->setName('care_person_insurance');
        $this->setPhpName('CarePersonInsurance');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CarePersonInsurance');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('item_nr', 'ItemNr', 'INTEGER', true, 10, null);
        $this->addColumn('pid', 'Pid', 'INTEGER', true, 10, 0);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 60, '');
        $this->addColumn('insurance_nr', 'InsuranceNr', 'VARCHAR', true, 50, '0');
        $this->addColumn('firm_id', 'FirmId', 'VARCHAR', true, 60, '');
        $this->addColumn('class_nr', 'ClassNr', 'TINYINT', true, 2, 0);
        $this->addColumn('is_void', 'IsVoid', 'BOOLEAN', true, 1, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CarePersonInsuranceTableMap::CLASS_DEFAULT : CarePersonInsuranceTableMap::OM_CLASS;
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
     * @return array           (CarePersonInsurance object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CarePersonInsuranceTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CarePersonInsuranceTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CarePersonInsuranceTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CarePersonInsuranceTableMap::OM_CLASS;
            /** @var CarePersonInsurance $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CarePersonInsuranceTableMap::addInstanceToPool($obj, $key);
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
            $key = CarePersonInsuranceTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CarePersonInsuranceTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CarePersonInsurance $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CarePersonInsuranceTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_ITEM_NR);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_PID);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_TYPE);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_INSURANCE_NR);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_FIRM_ID);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_CLASS_NR);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_IS_VOID);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_STATUS);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CarePersonInsuranceTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.item_nr');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.insurance_nr');
            $criteria->addSelectColumn($alias . '.firm_id');
            $criteria->addSelectColumn($alias . '.class_nr');
            $criteria->addSelectColumn($alias . '.is_void');
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
        return Propel::getServiceContainer()->getDatabaseMap(CarePersonInsuranceTableMap::DATABASE_NAME)->getTable(CarePersonInsuranceTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CarePersonInsuranceTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CarePersonInsuranceTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CarePersonInsuranceTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CarePersonInsurance or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CarePersonInsurance object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonInsuranceTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CarePersonInsurance) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CarePersonInsuranceTableMap::DATABASE_NAME);
            $criteria->add(CarePersonInsuranceTableMap::COL_ITEM_NR, (array) $values, Criteria::IN);
        }

        $query = CarePersonInsuranceQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CarePersonInsuranceTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CarePersonInsuranceTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_person_insurance table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CarePersonInsuranceQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CarePersonInsurance or Criteria object.
     *
     * @param mixed               $criteria Criteria or CarePersonInsurance object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonInsuranceTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CarePersonInsurance object
        }

        if ($criteria->containsKey(CarePersonInsuranceTableMap::COL_ITEM_NR) && $criteria->keyContainsValue(CarePersonInsuranceTableMap::COL_ITEM_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CarePersonInsuranceTableMap::COL_ITEM_NR.')');
        }


        // Set the correct dbName
        $query = CarePersonInsuranceQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CarePersonInsuranceTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CarePersonInsuranceTableMap::buildTableMap();
