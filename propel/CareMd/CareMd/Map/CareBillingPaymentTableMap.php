<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareBillingPayment;
use CareMd\CareMd\CareBillingPaymentQuery;
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
 * This class defines the structure of the 'care_billing_payment' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareBillingPaymentTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareBillingPaymentTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_billing_payment';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareBillingPayment';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareBillingPayment';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the payment_id field
     */
    const COL_PAYMENT_ID = 'care_billing_payment.payment_id';

    /**
     * the column name for the payment_encounter_nr field
     */
    const COL_PAYMENT_ENCOUNTER_NR = 'care_billing_payment.payment_encounter_nr';

    /**
     * the column name for the payment_receipt_no field
     */
    const COL_PAYMENT_RECEIPT_NO = 'care_billing_payment.payment_receipt_no';

    /**
     * the column name for the payment_date field
     */
    const COL_PAYMENT_DATE = 'care_billing_payment.payment_date';

    /**
     * the column name for the payment_cash_amount field
     */
    const COL_PAYMENT_CASH_AMOUNT = 'care_billing_payment.payment_cash_amount';

    /**
     * the column name for the payment_cheque_no field
     */
    const COL_PAYMENT_CHEQUE_NO = 'care_billing_payment.payment_cheque_no';

    /**
     * the column name for the payment_cheque_amount field
     */
    const COL_PAYMENT_CHEQUE_AMOUNT = 'care_billing_payment.payment_cheque_amount';

    /**
     * the column name for the payment_creditcard_no field
     */
    const COL_PAYMENT_CREDITCARD_NO = 'care_billing_payment.payment_creditcard_no';

    /**
     * the column name for the payment_creditcard_amount field
     */
    const COL_PAYMENT_CREDITCARD_AMOUNT = 'care_billing_payment.payment_creditcard_amount';

    /**
     * the column name for the payment_amount_total field
     */
    const COL_PAYMENT_AMOUNT_TOTAL = 'care_billing_payment.payment_amount_total';

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
        self::TYPE_PHPNAME       => array('PaymentId', 'PaymentEncounterNr', 'PaymentReceiptNo', 'PaymentDate', 'PaymentCashAmount', 'PaymentChequeNo', 'PaymentChequeAmount', 'PaymentCreditcardNo', 'PaymentCreditcardAmount', 'PaymentAmountTotal', ),
        self::TYPE_CAMELNAME     => array('paymentId', 'paymentEncounterNr', 'paymentReceiptNo', 'paymentDate', 'paymentCashAmount', 'paymentChequeNo', 'paymentChequeAmount', 'paymentCreditcardNo', 'paymentCreditcardAmount', 'paymentAmountTotal', ),
        self::TYPE_COLNAME       => array(CareBillingPaymentTableMap::COL_PAYMENT_ID, CareBillingPaymentTableMap::COL_PAYMENT_ENCOUNTER_NR, CareBillingPaymentTableMap::COL_PAYMENT_RECEIPT_NO, CareBillingPaymentTableMap::COL_PAYMENT_DATE, CareBillingPaymentTableMap::COL_PAYMENT_CASH_AMOUNT, CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_NO, CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_AMOUNT, CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_NO, CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_AMOUNT, CareBillingPaymentTableMap::COL_PAYMENT_AMOUNT_TOTAL, ),
        self::TYPE_FIELDNAME     => array('payment_id', 'payment_encounter_nr', 'payment_receipt_no', 'payment_date', 'payment_cash_amount', 'payment_cheque_no', 'payment_cheque_amount', 'payment_creditcard_no', 'payment_creditcard_amount', 'payment_amount_total', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('PaymentId' => 0, 'PaymentEncounterNr' => 1, 'PaymentReceiptNo' => 2, 'PaymentDate' => 3, 'PaymentCashAmount' => 4, 'PaymentChequeNo' => 5, 'PaymentChequeAmount' => 6, 'PaymentCreditcardNo' => 7, 'PaymentCreditcardAmount' => 8, 'PaymentAmountTotal' => 9, ),
        self::TYPE_CAMELNAME     => array('paymentId' => 0, 'paymentEncounterNr' => 1, 'paymentReceiptNo' => 2, 'paymentDate' => 3, 'paymentCashAmount' => 4, 'paymentChequeNo' => 5, 'paymentChequeAmount' => 6, 'paymentCreditcardNo' => 7, 'paymentCreditcardAmount' => 8, 'paymentAmountTotal' => 9, ),
        self::TYPE_COLNAME       => array(CareBillingPaymentTableMap::COL_PAYMENT_ID => 0, CareBillingPaymentTableMap::COL_PAYMENT_ENCOUNTER_NR => 1, CareBillingPaymentTableMap::COL_PAYMENT_RECEIPT_NO => 2, CareBillingPaymentTableMap::COL_PAYMENT_DATE => 3, CareBillingPaymentTableMap::COL_PAYMENT_CASH_AMOUNT => 4, CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_NO => 5, CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_AMOUNT => 6, CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_NO => 7, CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_AMOUNT => 8, CareBillingPaymentTableMap::COL_PAYMENT_AMOUNT_TOTAL => 9, ),
        self::TYPE_FIELDNAME     => array('payment_id' => 0, 'payment_encounter_nr' => 1, 'payment_receipt_no' => 2, 'payment_date' => 3, 'payment_cash_amount' => 4, 'payment_cheque_no' => 5, 'payment_cheque_amount' => 6, 'payment_creditcard_no' => 7, 'payment_creditcard_amount' => 8, 'payment_amount_total' => 9, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $this->setName('care_billing_payment');
        $this->setPhpName('CareBillingPayment');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareBillingPayment');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('payment_id', 'PaymentId', 'TINYINT', true, 5, null);
        $this->addColumn('payment_encounter_nr', 'PaymentEncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('payment_receipt_no', 'PaymentReceiptNo', 'INTEGER', true, null, 0);
        $this->addColumn('payment_date', 'PaymentDate', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
        $this->addColumn('payment_cash_amount', 'PaymentCashAmount', 'FLOAT', false, 10, 0);
        $this->addColumn('payment_cheque_no', 'PaymentChequeNo', 'INTEGER', false, null, 0);
        $this->addColumn('payment_cheque_amount', 'PaymentChequeAmount', 'FLOAT', false, 10, 0);
        $this->addColumn('payment_creditcard_no', 'PaymentCreditcardNo', 'INTEGER', false, 25, 0);
        $this->addColumn('payment_creditcard_amount', 'PaymentCreditcardAmount', 'FLOAT', false, 10, 0);
        $this->addColumn('payment_amount_total', 'PaymentAmountTotal', 'FLOAT', false, 10, 0);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PaymentId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PaymentId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PaymentId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PaymentId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PaymentId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('PaymentId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('PaymentId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareBillingPaymentTableMap::CLASS_DEFAULT : CareBillingPaymentTableMap::OM_CLASS;
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
     * @return array           (CareBillingPayment object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareBillingPaymentTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareBillingPaymentTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareBillingPaymentTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareBillingPaymentTableMap::OM_CLASS;
            /** @var CareBillingPayment $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareBillingPaymentTableMap::addInstanceToPool($obj, $key);
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
            $key = CareBillingPaymentTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareBillingPaymentTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareBillingPayment $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareBillingPaymentTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareBillingPaymentTableMap::COL_PAYMENT_ID);
            $criteria->addSelectColumn(CareBillingPaymentTableMap::COL_PAYMENT_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareBillingPaymentTableMap::COL_PAYMENT_RECEIPT_NO);
            $criteria->addSelectColumn(CareBillingPaymentTableMap::COL_PAYMENT_DATE);
            $criteria->addSelectColumn(CareBillingPaymentTableMap::COL_PAYMENT_CASH_AMOUNT);
            $criteria->addSelectColumn(CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_NO);
            $criteria->addSelectColumn(CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_AMOUNT);
            $criteria->addSelectColumn(CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_NO);
            $criteria->addSelectColumn(CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_AMOUNT);
            $criteria->addSelectColumn(CareBillingPaymentTableMap::COL_PAYMENT_AMOUNT_TOTAL);
        } else {
            $criteria->addSelectColumn($alias . '.payment_id');
            $criteria->addSelectColumn($alias . '.payment_encounter_nr');
            $criteria->addSelectColumn($alias . '.payment_receipt_no');
            $criteria->addSelectColumn($alias . '.payment_date');
            $criteria->addSelectColumn($alias . '.payment_cash_amount');
            $criteria->addSelectColumn($alias . '.payment_cheque_no');
            $criteria->addSelectColumn($alias . '.payment_cheque_amount');
            $criteria->addSelectColumn($alias . '.payment_creditcard_no');
            $criteria->addSelectColumn($alias . '.payment_creditcard_amount');
            $criteria->addSelectColumn($alias . '.payment_amount_total');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareBillingPaymentTableMap::DATABASE_NAME)->getTable(CareBillingPaymentTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareBillingPaymentTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareBillingPaymentTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareBillingPaymentTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareBillingPayment or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareBillingPayment object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingPaymentTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareBillingPayment) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareBillingPaymentTableMap::DATABASE_NAME);
            $criteria->add(CareBillingPaymentTableMap::COL_PAYMENT_ID, (array) $values, Criteria::IN);
        }

        $query = CareBillingPaymentQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareBillingPaymentTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareBillingPaymentTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_billing_payment table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareBillingPaymentQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareBillingPayment or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareBillingPayment object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingPaymentTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareBillingPayment object
        }

        if ($criteria->containsKey(CareBillingPaymentTableMap::COL_PAYMENT_ID) && $criteria->keyContainsValue(CareBillingPaymentTableMap::COL_PAYMENT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareBillingPaymentTableMap::COL_PAYMENT_ID.')');
        }


        // Set the correct dbName
        $query = CareBillingPaymentQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareBillingPaymentTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareBillingPaymentTableMap::buildTableMap();
