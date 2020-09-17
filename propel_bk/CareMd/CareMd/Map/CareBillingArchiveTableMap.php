<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareBillingArchive;
use CareMd\CareMd\CareBillingArchiveQuery;
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
 * This class defines the structure of the 'care_billing_archive' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareBillingArchiveTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareBillingArchiveTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_billing_archive';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareBillingArchive';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareBillingArchive';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 11;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 11;

    /**
     * the column name for the bill_no field
     */
    const COL_BILL_NO = 'care_billing_archive.bill_no';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_billing_archive.encounter_nr';

    /**
     * the column name for the patient_name field
     */
    const COL_PATIENT_NAME = 'care_billing_archive.patient_name';

    /**
     * the column name for the vorname field
     */
    const COL_VORNAME = 'care_billing_archive.vorname';

    /**
     * the column name for the bill_date_time field
     */
    const COL_BILL_DATE_TIME = 'care_billing_archive.bill_date_time';

    /**
     * the column name for the bill_amt field
     */
    const COL_BILL_AMT = 'care_billing_archive.bill_amt';

    /**
     * the column name for the payment_date_time field
     */
    const COL_PAYMENT_DATE_TIME = 'care_billing_archive.payment_date_time';

    /**
     * the column name for the payment_mode field
     */
    const COL_PAYMENT_MODE = 'care_billing_archive.payment_mode';

    /**
     * the column name for the cheque_no field
     */
    const COL_CHEQUE_NO = 'care_billing_archive.cheque_no';

    /**
     * the column name for the creditcard_no field
     */
    const COL_CREDITCARD_NO = 'care_billing_archive.creditcard_no';

    /**
     * the column name for the paid_by field
     */
    const COL_PAID_BY = 'care_billing_archive.paid_by';

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
        self::TYPE_PHPNAME       => array('BillNo', 'EncounterNr', 'PatientName', 'Vorname', 'BillDateTime', 'BillAmt', 'PaymentDateTime', 'PaymentMode', 'ChequeNo', 'CreditcardNo', 'PaidBy', ),
        self::TYPE_CAMELNAME     => array('billNo', 'encounterNr', 'patientName', 'vorname', 'billDateTime', 'billAmt', 'paymentDateTime', 'paymentMode', 'chequeNo', 'creditcardNo', 'paidBy', ),
        self::TYPE_COLNAME       => array(CareBillingArchiveTableMap::COL_BILL_NO, CareBillingArchiveTableMap::COL_ENCOUNTER_NR, CareBillingArchiveTableMap::COL_PATIENT_NAME, CareBillingArchiveTableMap::COL_VORNAME, CareBillingArchiveTableMap::COL_BILL_DATE_TIME, CareBillingArchiveTableMap::COL_BILL_AMT, CareBillingArchiveTableMap::COL_PAYMENT_DATE_TIME, CareBillingArchiveTableMap::COL_PAYMENT_MODE, CareBillingArchiveTableMap::COL_CHEQUE_NO, CareBillingArchiveTableMap::COL_CREDITCARD_NO, CareBillingArchiveTableMap::COL_PAID_BY, ),
        self::TYPE_FIELDNAME     => array('bill_no', 'encounter_nr', 'patient_name', 'vorname', 'bill_date_time', 'bill_amt', 'payment_date_time', 'payment_mode', 'cheque_no', 'creditcard_no', 'paid_by', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BillNo' => 0, 'EncounterNr' => 1, 'PatientName' => 2, 'Vorname' => 3, 'BillDateTime' => 4, 'BillAmt' => 5, 'PaymentDateTime' => 6, 'PaymentMode' => 7, 'ChequeNo' => 8, 'CreditcardNo' => 9, 'PaidBy' => 10, ),
        self::TYPE_CAMELNAME     => array('billNo' => 0, 'encounterNr' => 1, 'patientName' => 2, 'vorname' => 3, 'billDateTime' => 4, 'billAmt' => 5, 'paymentDateTime' => 6, 'paymentMode' => 7, 'chequeNo' => 8, 'creditcardNo' => 9, 'paidBy' => 10, ),
        self::TYPE_COLNAME       => array(CareBillingArchiveTableMap::COL_BILL_NO => 0, CareBillingArchiveTableMap::COL_ENCOUNTER_NR => 1, CareBillingArchiveTableMap::COL_PATIENT_NAME => 2, CareBillingArchiveTableMap::COL_VORNAME => 3, CareBillingArchiveTableMap::COL_BILL_DATE_TIME => 4, CareBillingArchiveTableMap::COL_BILL_AMT => 5, CareBillingArchiveTableMap::COL_PAYMENT_DATE_TIME => 6, CareBillingArchiveTableMap::COL_PAYMENT_MODE => 7, CareBillingArchiveTableMap::COL_CHEQUE_NO => 8, CareBillingArchiveTableMap::COL_CREDITCARD_NO => 9, CareBillingArchiveTableMap::COL_PAID_BY => 10, ),
        self::TYPE_FIELDNAME     => array('bill_no' => 0, 'encounter_nr' => 1, 'patient_name' => 2, 'vorname' => 3, 'bill_date_time' => 4, 'bill_amt' => 5, 'payment_date_time' => 6, 'payment_mode' => 7, 'cheque_no' => 8, 'creditcard_no' => 9, 'paid_by' => 10, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $this->setName('care_billing_archive');
        $this->setPhpName('CareBillingArchive');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareBillingArchive');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('bill_no', 'BillNo', 'BIGINT', true, null, 0);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('patient_name', 'PatientName', 'VARCHAR', true, 255, null);
        $this->addColumn('vorname', 'Vorname', 'VARCHAR', true, 35, '0');
        $this->addColumn('bill_date_time', 'BillDateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('bill_amt', 'BillAmt', 'DOUBLE', true, 16, 0);
        $this->addColumn('payment_date_time', 'PaymentDateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('payment_mode', 'PaymentMode', 'LONGVARCHAR', true, null, null);
        $this->addColumn('cheque_no', 'ChequeNo', 'VARCHAR', true, 10, '0');
        $this->addColumn('creditcard_no', 'CreditcardNo', 'VARCHAR', true, 10, '0');
        $this->addColumn('paid_by', 'PaidBy', 'VARCHAR', true, 15, '0');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillNo', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillNo', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillNo', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillNo', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillNo', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BillNo', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('BillNo', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareBillingArchiveTableMap::CLASS_DEFAULT : CareBillingArchiveTableMap::OM_CLASS;
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
     * @return array           (CareBillingArchive object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareBillingArchiveTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareBillingArchiveTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareBillingArchiveTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareBillingArchiveTableMap::OM_CLASS;
            /** @var CareBillingArchive $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareBillingArchiveTableMap::addInstanceToPool($obj, $key);
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
            $key = CareBillingArchiveTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareBillingArchiveTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareBillingArchive $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareBillingArchiveTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_BILL_NO);
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_PATIENT_NAME);
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_VORNAME);
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_BILL_DATE_TIME);
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_BILL_AMT);
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_PAYMENT_DATE_TIME);
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_PAYMENT_MODE);
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_CHEQUE_NO);
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_CREDITCARD_NO);
            $criteria->addSelectColumn(CareBillingArchiveTableMap::COL_PAID_BY);
        } else {
            $criteria->addSelectColumn($alias . '.bill_no');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.patient_name');
            $criteria->addSelectColumn($alias . '.vorname');
            $criteria->addSelectColumn($alias . '.bill_date_time');
            $criteria->addSelectColumn($alias . '.bill_amt');
            $criteria->addSelectColumn($alias . '.payment_date_time');
            $criteria->addSelectColumn($alias . '.payment_mode');
            $criteria->addSelectColumn($alias . '.cheque_no');
            $criteria->addSelectColumn($alias . '.creditcard_no');
            $criteria->addSelectColumn($alias . '.paid_by');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareBillingArchiveTableMap::DATABASE_NAME)->getTable(CareBillingArchiveTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareBillingArchiveTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareBillingArchiveTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareBillingArchiveTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareBillingArchive or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareBillingArchive object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingArchiveTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareBillingArchive) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareBillingArchiveTableMap::DATABASE_NAME);
            $criteria->add(CareBillingArchiveTableMap::COL_BILL_NO, (array) $values, Criteria::IN);
        }

        $query = CareBillingArchiveQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareBillingArchiveTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareBillingArchiveTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_billing_archive table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareBillingArchiveQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareBillingArchive or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareBillingArchive object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingArchiveTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareBillingArchive object
        }


        // Set the correct dbName
        $query = CareBillingArchiveQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareBillingArchiveTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareBillingArchiveTableMap::buildTableMap();
