<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareBillingBill;
use CareMd\CareMd\CareBillingBillQuery;
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
 * This class defines the structure of the 'care_billing_bill' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareBillingBillTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareBillingBillTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_billing_bill';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareBillingBill';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareBillingBill';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the bill_bill_no field
     */
    const COL_BILL_BILL_NO = 'care_billing_bill.bill_bill_no';

    /**
     * the column name for the bill_encounter_nr field
     */
    const COL_BILL_ENCOUNTER_NR = 'care_billing_bill.bill_encounter_nr';

    /**
     * the column name for the bill_date_time field
     */
    const COL_BILL_DATE_TIME = 'care_billing_bill.bill_date_time';

    /**
     * the column name for the bill_amount field
     */
    const COL_BILL_AMOUNT = 'care_billing_bill.bill_amount';

    /**
     * the column name for the bill_outstanding field
     */
    const COL_BILL_OUTSTANDING = 'care_billing_bill.bill_outstanding';

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
        self::TYPE_PHPNAME       => array('BillBillNo', 'BillEncounterNr', 'BillDateTime', 'BillAmount', 'BillOutstanding', ),
        self::TYPE_CAMELNAME     => array('billBillNo', 'billEncounterNr', 'billDateTime', 'billAmount', 'billOutstanding', ),
        self::TYPE_COLNAME       => array(CareBillingBillTableMap::COL_BILL_BILL_NO, CareBillingBillTableMap::COL_BILL_ENCOUNTER_NR, CareBillingBillTableMap::COL_BILL_DATE_TIME, CareBillingBillTableMap::COL_BILL_AMOUNT, CareBillingBillTableMap::COL_BILL_OUTSTANDING, ),
        self::TYPE_FIELDNAME     => array('bill_bill_no', 'bill_encounter_nr', 'bill_date_time', 'bill_amount', 'bill_outstanding', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BillBillNo' => 0, 'BillEncounterNr' => 1, 'BillDateTime' => 2, 'BillAmount' => 3, 'BillOutstanding' => 4, ),
        self::TYPE_CAMELNAME     => array('billBillNo' => 0, 'billEncounterNr' => 1, 'billDateTime' => 2, 'billAmount' => 3, 'billOutstanding' => 4, ),
        self::TYPE_COLNAME       => array(CareBillingBillTableMap::COL_BILL_BILL_NO => 0, CareBillingBillTableMap::COL_BILL_ENCOUNTER_NR => 1, CareBillingBillTableMap::COL_BILL_DATE_TIME => 2, CareBillingBillTableMap::COL_BILL_AMOUNT => 3, CareBillingBillTableMap::COL_BILL_OUTSTANDING => 4, ),
        self::TYPE_FIELDNAME     => array('bill_bill_no' => 0, 'bill_encounter_nr' => 1, 'bill_date_time' => 2, 'bill_amount' => 3, 'bill_outstanding' => 4, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
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
        $this->setName('care_billing_bill');
        $this->setPhpName('CareBillingBill');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareBillingBill');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('bill_bill_no', 'BillBillNo', 'BIGINT', true, null, 0);
        $this->addColumn('bill_encounter_nr', 'BillEncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('bill_date_time', 'BillDateTime', 'DATE', false, null, null);
        $this->addColumn('bill_amount', 'BillAmount', 'FLOAT', false, 10, null);
        $this->addColumn('bill_outstanding', 'BillOutstanding', 'FLOAT', false, 10, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillBillNo', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillBillNo', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillBillNo', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillBillNo', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillBillNo', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillBillNo', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('BillBillNo', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareBillingBillTableMap::CLASS_DEFAULT : CareBillingBillTableMap::OM_CLASS;
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
     * @return array           (CareBillingBill object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareBillingBillTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareBillingBillTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareBillingBillTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareBillingBillTableMap::OM_CLASS;
            /** @var CareBillingBill $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareBillingBillTableMap::addInstanceToPool($obj, $key);
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
            $key = CareBillingBillTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareBillingBillTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareBillingBill $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareBillingBillTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareBillingBillTableMap::COL_BILL_BILL_NO);
            $criteria->addSelectColumn(CareBillingBillTableMap::COL_BILL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareBillingBillTableMap::COL_BILL_DATE_TIME);
            $criteria->addSelectColumn(CareBillingBillTableMap::COL_BILL_AMOUNT);
            $criteria->addSelectColumn(CareBillingBillTableMap::COL_BILL_OUTSTANDING);
        } else {
            $criteria->addSelectColumn($alias . '.bill_bill_no');
            $criteria->addSelectColumn($alias . '.bill_encounter_nr');
            $criteria->addSelectColumn($alias . '.bill_date_time');
            $criteria->addSelectColumn($alias . '.bill_amount');
            $criteria->addSelectColumn($alias . '.bill_outstanding');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareBillingBillTableMap::DATABASE_NAME)->getTable(CareBillingBillTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareBillingBillTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareBillingBillTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareBillingBillTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareBillingBill or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareBillingBill object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingBillTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareBillingBill) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareBillingBillTableMap::DATABASE_NAME);
            $criteria->add(CareBillingBillTableMap::COL_BILL_BILL_NO, (array) $values, Criteria::IN);
        }

        $query = CareBillingBillQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareBillingBillTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareBillingBillTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_billing_bill table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareBillingBillQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareBillingBill or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareBillingBill object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingBillTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareBillingBill object
        }


        // Set the correct dbName
        $query = CareBillingBillQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareBillingBillTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareBillingBillTableMap::buildTableMap();
