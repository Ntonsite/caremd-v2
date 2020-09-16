<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareBillingFinal;
use CareMd\CareMd\CareBillingFinalQuery;
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
 * This class defines the structure of the 'care_billing_final' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareBillingFinalTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareBillingFinalTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_billing_final';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareBillingFinal';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareBillingFinal';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the final_id field
     */
    const COL_FINAL_ID = 'care_billing_final.final_id';

    /**
     * the column name for the final_encounter_nr field
     */
    const COL_FINAL_ENCOUNTER_NR = 'care_billing_final.final_encounter_nr';

    /**
     * the column name for the final_bill_no field
     */
    const COL_FINAL_BILL_NO = 'care_billing_final.final_bill_no';

    /**
     * the column name for the final_date field
     */
    const COL_FINAL_DATE = 'care_billing_final.final_date';

    /**
     * the column name for the final_total_bill_amount field
     */
    const COL_FINAL_TOTAL_BILL_AMOUNT = 'care_billing_final.final_total_bill_amount';

    /**
     * the column name for the final_discount field
     */
    const COL_FINAL_DISCOUNT = 'care_billing_final.final_discount';

    /**
     * the column name for the final_total_receipt_amount field
     */
    const COL_FINAL_TOTAL_RECEIPT_AMOUNT = 'care_billing_final.final_total_receipt_amount';

    /**
     * the column name for the final_amount_due field
     */
    const COL_FINAL_AMOUNT_DUE = 'care_billing_final.final_amount_due';

    /**
     * the column name for the final_amount_recieved field
     */
    const COL_FINAL_AMOUNT_RECIEVED = 'care_billing_final.final_amount_recieved';

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
        self::TYPE_PHPNAME       => array('FinalId', 'FinalEncounterNr', 'FinalBillNo', 'FinalDate', 'FinalTotalBillAmount', 'FinalDiscount', 'FinalTotalReceiptAmount', 'FinalAmountDue', 'FinalAmountRecieved', ),
        self::TYPE_CAMELNAME     => array('finalId', 'finalEncounterNr', 'finalBillNo', 'finalDate', 'finalTotalBillAmount', 'finalDiscount', 'finalTotalReceiptAmount', 'finalAmountDue', 'finalAmountRecieved', ),
        self::TYPE_COLNAME       => array(CareBillingFinalTableMap::COL_FINAL_ID, CareBillingFinalTableMap::COL_FINAL_ENCOUNTER_NR, CareBillingFinalTableMap::COL_FINAL_BILL_NO, CareBillingFinalTableMap::COL_FINAL_DATE, CareBillingFinalTableMap::COL_FINAL_TOTAL_BILL_AMOUNT, CareBillingFinalTableMap::COL_FINAL_DISCOUNT, CareBillingFinalTableMap::COL_FINAL_TOTAL_RECEIPT_AMOUNT, CareBillingFinalTableMap::COL_FINAL_AMOUNT_DUE, CareBillingFinalTableMap::COL_FINAL_AMOUNT_RECIEVED, ),
        self::TYPE_FIELDNAME     => array('final_id', 'final_encounter_nr', 'final_bill_no', 'final_date', 'final_total_bill_amount', 'final_discount', 'final_total_receipt_amount', 'final_amount_due', 'final_amount_recieved', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('FinalId' => 0, 'FinalEncounterNr' => 1, 'FinalBillNo' => 2, 'FinalDate' => 3, 'FinalTotalBillAmount' => 4, 'FinalDiscount' => 5, 'FinalTotalReceiptAmount' => 6, 'FinalAmountDue' => 7, 'FinalAmountRecieved' => 8, ),
        self::TYPE_CAMELNAME     => array('finalId' => 0, 'finalEncounterNr' => 1, 'finalBillNo' => 2, 'finalDate' => 3, 'finalTotalBillAmount' => 4, 'finalDiscount' => 5, 'finalTotalReceiptAmount' => 6, 'finalAmountDue' => 7, 'finalAmountRecieved' => 8, ),
        self::TYPE_COLNAME       => array(CareBillingFinalTableMap::COL_FINAL_ID => 0, CareBillingFinalTableMap::COL_FINAL_ENCOUNTER_NR => 1, CareBillingFinalTableMap::COL_FINAL_BILL_NO => 2, CareBillingFinalTableMap::COL_FINAL_DATE => 3, CareBillingFinalTableMap::COL_FINAL_TOTAL_BILL_AMOUNT => 4, CareBillingFinalTableMap::COL_FINAL_DISCOUNT => 5, CareBillingFinalTableMap::COL_FINAL_TOTAL_RECEIPT_AMOUNT => 6, CareBillingFinalTableMap::COL_FINAL_AMOUNT_DUE => 7, CareBillingFinalTableMap::COL_FINAL_AMOUNT_RECIEVED => 8, ),
        self::TYPE_FIELDNAME     => array('final_id' => 0, 'final_encounter_nr' => 1, 'final_bill_no' => 2, 'final_date' => 3, 'final_total_bill_amount' => 4, 'final_discount' => 5, 'final_total_receipt_amount' => 6, 'final_amount_due' => 7, 'final_amount_recieved' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $this->setName('care_billing_final');
        $this->setPhpName('CareBillingFinal');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareBillingFinal');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('final_id', 'FinalId', 'TINYINT', true, 3, null);
        $this->addColumn('final_encounter_nr', 'FinalEncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('final_bill_no', 'FinalBillNo', 'INTEGER', false, null, null);
        $this->addColumn('final_date', 'FinalDate', 'DATE', false, null, null);
        $this->addColumn('final_total_bill_amount', 'FinalTotalBillAmount', 'FLOAT', false, 10, null);
        $this->addColumn('final_discount', 'FinalDiscount', 'TINYINT', false, null, null);
        $this->addColumn('final_total_receipt_amount', 'FinalTotalReceiptAmount', 'FLOAT', false, 10, null);
        $this->addColumn('final_amount_due', 'FinalAmountDue', 'FLOAT', false, 10, null);
        $this->addColumn('final_amount_recieved', 'FinalAmountRecieved', 'FLOAT', false, 10, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FinalId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FinalId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FinalId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FinalId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FinalId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FinalId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('FinalId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareBillingFinalTableMap::CLASS_DEFAULT : CareBillingFinalTableMap::OM_CLASS;
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
     * @return array           (CareBillingFinal object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareBillingFinalTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareBillingFinalTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareBillingFinalTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareBillingFinalTableMap::OM_CLASS;
            /** @var CareBillingFinal $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareBillingFinalTableMap::addInstanceToPool($obj, $key);
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
            $key = CareBillingFinalTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareBillingFinalTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareBillingFinal $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareBillingFinalTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareBillingFinalTableMap::COL_FINAL_ID);
            $criteria->addSelectColumn(CareBillingFinalTableMap::COL_FINAL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareBillingFinalTableMap::COL_FINAL_BILL_NO);
            $criteria->addSelectColumn(CareBillingFinalTableMap::COL_FINAL_DATE);
            $criteria->addSelectColumn(CareBillingFinalTableMap::COL_FINAL_TOTAL_BILL_AMOUNT);
            $criteria->addSelectColumn(CareBillingFinalTableMap::COL_FINAL_DISCOUNT);
            $criteria->addSelectColumn(CareBillingFinalTableMap::COL_FINAL_TOTAL_RECEIPT_AMOUNT);
            $criteria->addSelectColumn(CareBillingFinalTableMap::COL_FINAL_AMOUNT_DUE);
            $criteria->addSelectColumn(CareBillingFinalTableMap::COL_FINAL_AMOUNT_RECIEVED);
        } else {
            $criteria->addSelectColumn($alias . '.final_id');
            $criteria->addSelectColumn($alias . '.final_encounter_nr');
            $criteria->addSelectColumn($alias . '.final_bill_no');
            $criteria->addSelectColumn($alias . '.final_date');
            $criteria->addSelectColumn($alias . '.final_total_bill_amount');
            $criteria->addSelectColumn($alias . '.final_discount');
            $criteria->addSelectColumn($alias . '.final_total_receipt_amount');
            $criteria->addSelectColumn($alias . '.final_amount_due');
            $criteria->addSelectColumn($alias . '.final_amount_recieved');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareBillingFinalTableMap::DATABASE_NAME)->getTable(CareBillingFinalTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareBillingFinalTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareBillingFinalTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareBillingFinalTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareBillingFinal or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareBillingFinal object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingFinalTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareBillingFinal) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareBillingFinalTableMap::DATABASE_NAME);
            $criteria->add(CareBillingFinalTableMap::COL_FINAL_ID, (array) $values, Criteria::IN);
        }

        $query = CareBillingFinalQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareBillingFinalTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareBillingFinalTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_billing_final table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareBillingFinalQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareBillingFinal or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareBillingFinal object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingFinalTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareBillingFinal object
        }

        if ($criteria->containsKey(CareBillingFinalTableMap::COL_FINAL_ID) && $criteria->keyContainsValue(CareBillingFinalTableMap::COL_FINAL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareBillingFinalTableMap::COL_FINAL_ID.')');
        }


        // Set the correct dbName
        $query = CareBillingFinalQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareBillingFinalTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareBillingFinalTableMap::buildTableMap();
