<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzSupplierDeatail;
use CareMd\CareMd\CareTzSupplierDeatailQuery;
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
 * This class defines the structure of the 'care_tz_supplier_deatail' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzSupplierDeatailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzSupplierDeatailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_supplier_deatail';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzSupplierDeatail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzSupplierDeatail';

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
     * the column name for the Suplier_id field
     */
    const COL_SUPLIER_ID = 'care_tz_supplier_deatail.Suplier_id';

    /**
     * the column name for the Company_Name field
     */
    const COL_COMPANY_NAME = 'care_tz_supplier_deatail.Company_Name';

    /**
     * the column name for the Contact_Person field
     */
    const COL_CONTACT_PERSON = 'care_tz_supplier_deatail.Contact_Person';

    /**
     * the column name for the Address1 field
     */
    const COL_ADDRESS1 = 'care_tz_supplier_deatail.Address1';

    /**
     * the column name for the Address2 field
     */
    const COL_ADDRESS2 = 'care_tz_supplier_deatail.Address2';

    /**
     * the column name for the Phone1 field
     */
    const COL_PHONE1 = 'care_tz_supplier_deatail.Phone1';

    /**
     * the column name for the Phone2 field
     */
    const COL_PHONE2 = 'care_tz_supplier_deatail.Phone2';

    /**
     * the column name for the Cell1 field
     */
    const COL_CELL1 = 'care_tz_supplier_deatail.Cell1';

    /**
     * the column name for the Cell2 field
     */
    const COL_CELL2 = 'care_tz_supplier_deatail.Cell2';

    /**
     * the column name for the Email field
     */
    const COL_EMAIL = 'care_tz_supplier_deatail.Email';

    /**
     * the column name for the Fax field
     */
    const COL_FAX = 'care_tz_supplier_deatail.Fax';

    /**
     * the column name for the Banker field
     */
    const COL_BANKER = 'care_tz_supplier_deatail.Banker';

    /**
     * the column name for the Bank_Details field
     */
    const COL_BANK_DETAILS = 'care_tz_supplier_deatail.Bank_Details';

    /**
     * the column name for the Account_no field
     */
    const COL_ACCOUNT_NO = 'care_tz_supplier_deatail.Account_no';

    /**
     * the column name for the Credit_Limit field
     */
    const COL_CREDIT_LIMIT = 'care_tz_supplier_deatail.Credit_Limit';

    /**
     * the column name for the Credit_Period field
     */
    const COL_CREDIT_PERIOD = 'care_tz_supplier_deatail.Credit_Period';

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
        self::TYPE_PHPNAME       => array('SuplierId', 'CompanyName', 'ContactPerson', 'Address1', 'Address2', 'Phone1', 'Phone2', 'Cell1', 'Cell2', 'Email', 'Fax', 'Banker', 'BankDetails', 'AccountNo', 'CreditLimit', 'CreditPeriod', ),
        self::TYPE_CAMELNAME     => array('suplierId', 'companyName', 'contactPerson', 'address1', 'address2', 'phone1', 'phone2', 'cell1', 'cell2', 'email', 'fax', 'banker', 'bankDetails', 'accountNo', 'creditLimit', 'creditPeriod', ),
        self::TYPE_COLNAME       => array(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID, CareTzSupplierDeatailTableMap::COL_COMPANY_NAME, CareTzSupplierDeatailTableMap::COL_CONTACT_PERSON, CareTzSupplierDeatailTableMap::COL_ADDRESS1, CareTzSupplierDeatailTableMap::COL_ADDRESS2, CareTzSupplierDeatailTableMap::COL_PHONE1, CareTzSupplierDeatailTableMap::COL_PHONE2, CareTzSupplierDeatailTableMap::COL_CELL1, CareTzSupplierDeatailTableMap::COL_CELL2, CareTzSupplierDeatailTableMap::COL_EMAIL, CareTzSupplierDeatailTableMap::COL_FAX, CareTzSupplierDeatailTableMap::COL_BANKER, CareTzSupplierDeatailTableMap::COL_BANK_DETAILS, CareTzSupplierDeatailTableMap::COL_ACCOUNT_NO, CareTzSupplierDeatailTableMap::COL_CREDIT_LIMIT, CareTzSupplierDeatailTableMap::COL_CREDIT_PERIOD, ),
        self::TYPE_FIELDNAME     => array('Suplier_id', 'Company_Name', 'Contact_Person', 'Address1', 'Address2', 'Phone1', 'Phone2', 'Cell1', 'Cell2', 'Email', 'Fax', 'Banker', 'Bank_Details', 'Account_no', 'Credit_Limit', 'Credit_Period', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('SuplierId' => 0, 'CompanyName' => 1, 'ContactPerson' => 2, 'Address1' => 3, 'Address2' => 4, 'Phone1' => 5, 'Phone2' => 6, 'Cell1' => 7, 'Cell2' => 8, 'Email' => 9, 'Fax' => 10, 'Banker' => 11, 'BankDetails' => 12, 'AccountNo' => 13, 'CreditLimit' => 14, 'CreditPeriod' => 15, ),
        self::TYPE_CAMELNAME     => array('suplierId' => 0, 'companyName' => 1, 'contactPerson' => 2, 'address1' => 3, 'address2' => 4, 'phone1' => 5, 'phone2' => 6, 'cell1' => 7, 'cell2' => 8, 'email' => 9, 'fax' => 10, 'banker' => 11, 'bankDetails' => 12, 'accountNo' => 13, 'creditLimit' => 14, 'creditPeriod' => 15, ),
        self::TYPE_COLNAME       => array(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID => 0, CareTzSupplierDeatailTableMap::COL_COMPANY_NAME => 1, CareTzSupplierDeatailTableMap::COL_CONTACT_PERSON => 2, CareTzSupplierDeatailTableMap::COL_ADDRESS1 => 3, CareTzSupplierDeatailTableMap::COL_ADDRESS2 => 4, CareTzSupplierDeatailTableMap::COL_PHONE1 => 5, CareTzSupplierDeatailTableMap::COL_PHONE2 => 6, CareTzSupplierDeatailTableMap::COL_CELL1 => 7, CareTzSupplierDeatailTableMap::COL_CELL2 => 8, CareTzSupplierDeatailTableMap::COL_EMAIL => 9, CareTzSupplierDeatailTableMap::COL_FAX => 10, CareTzSupplierDeatailTableMap::COL_BANKER => 11, CareTzSupplierDeatailTableMap::COL_BANK_DETAILS => 12, CareTzSupplierDeatailTableMap::COL_ACCOUNT_NO => 13, CareTzSupplierDeatailTableMap::COL_CREDIT_LIMIT => 14, CareTzSupplierDeatailTableMap::COL_CREDIT_PERIOD => 15, ),
        self::TYPE_FIELDNAME     => array('Suplier_id' => 0, 'Company_Name' => 1, 'Contact_Person' => 2, 'Address1' => 3, 'Address2' => 4, 'Phone1' => 5, 'Phone2' => 6, 'Cell1' => 7, 'Cell2' => 8, 'Email' => 9, 'Fax' => 10, 'Banker' => 11, 'Bank_Details' => 12, 'Account_no' => 13, 'Credit_Limit' => 14, 'Credit_Period' => 15, ),
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
        $this->setName('care_tz_supplier_deatail');
        $this->setPhpName('CareTzSupplierDeatail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzSupplierDeatail');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('Suplier_id', 'SuplierId', 'INTEGER', true, null, null);
        $this->addColumn('Company_Name', 'CompanyName', 'VARCHAR', true, 50, null);
        $this->addColumn('Contact_Person', 'ContactPerson', 'VARCHAR', true, 50, null);
        $this->addColumn('Address1', 'Address1', 'VARCHAR', true, 150, null);
        $this->addColumn('Address2', 'Address2', 'VARCHAR', false, 150, null);
        $this->addColumn('Phone1', 'Phone1', 'VARCHAR', true, 50, null);
        $this->addColumn('Phone2', 'Phone2', 'VARCHAR', false, 50, null);
        $this->addColumn('Cell1', 'Cell1', 'VARCHAR', true, 50, null);
        $this->addColumn('Cell2', 'Cell2', 'VARCHAR', false, 50, null);
        $this->addColumn('Email', 'Email', 'VARCHAR', true, 75, null);
        $this->addColumn('Fax', 'Fax', 'VARCHAR', false, 75, null);
        $this->addColumn('Banker', 'Banker', 'VARCHAR', false, 50, null);
        $this->addColumn('Bank_Details', 'BankDetails', 'VARCHAR', false, 100, null);
        $this->addColumn('Account_no', 'AccountNo', 'VARCHAR', false, 50, null);
        $this->addColumn('Credit_Limit', 'CreditLimit', 'VARCHAR', false, 50, null);
        $this->addColumn('Credit_Period', 'CreditPeriod', 'VARCHAR', false, 50, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SuplierId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SuplierId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SuplierId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SuplierId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SuplierId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('SuplierId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('SuplierId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzSupplierDeatailTableMap::CLASS_DEFAULT : CareTzSupplierDeatailTableMap::OM_CLASS;
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
     * @return array           (CareTzSupplierDeatail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzSupplierDeatailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzSupplierDeatailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzSupplierDeatailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzSupplierDeatailTableMap::OM_CLASS;
            /** @var CareTzSupplierDeatail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzSupplierDeatailTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzSupplierDeatailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzSupplierDeatailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzSupplierDeatail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzSupplierDeatailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_COMPANY_NAME);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_CONTACT_PERSON);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_ADDRESS1);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_ADDRESS2);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_PHONE1);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_PHONE2);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_CELL1);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_CELL2);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_EMAIL);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_FAX);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_BANKER);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_BANK_DETAILS);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_ACCOUNT_NO);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_CREDIT_LIMIT);
            $criteria->addSelectColumn(CareTzSupplierDeatailTableMap::COL_CREDIT_PERIOD);
        } else {
            $criteria->addSelectColumn($alias . '.Suplier_id');
            $criteria->addSelectColumn($alias . '.Company_Name');
            $criteria->addSelectColumn($alias . '.Contact_Person');
            $criteria->addSelectColumn($alias . '.Address1');
            $criteria->addSelectColumn($alias . '.Address2');
            $criteria->addSelectColumn($alias . '.Phone1');
            $criteria->addSelectColumn($alias . '.Phone2');
            $criteria->addSelectColumn($alias . '.Cell1');
            $criteria->addSelectColumn($alias . '.Cell2');
            $criteria->addSelectColumn($alias . '.Email');
            $criteria->addSelectColumn($alias . '.Fax');
            $criteria->addSelectColumn($alias . '.Banker');
            $criteria->addSelectColumn($alias . '.Bank_Details');
            $criteria->addSelectColumn($alias . '.Account_no');
            $criteria->addSelectColumn($alias . '.Credit_Limit');
            $criteria->addSelectColumn($alias . '.Credit_Period');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzSupplierDeatailTableMap::DATABASE_NAME)->getTable(CareTzSupplierDeatailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzSupplierDeatailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzSupplierDeatailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzSupplierDeatailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzSupplierDeatail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzSupplierDeatail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzSupplierDeatailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzSupplierDeatail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzSupplierDeatailTableMap::DATABASE_NAME);
            $criteria->add(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzSupplierDeatailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzSupplierDeatailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzSupplierDeatailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_supplier_deatail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzSupplierDeatailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzSupplierDeatail or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzSupplierDeatail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzSupplierDeatailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzSupplierDeatail object
        }

        if ($criteria->containsKey(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID) && $criteria->keyContainsValue(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzSupplierDeatailTableMap::COL_SUPLIER_ID.')');
        }


        // Set the correct dbName
        $query = CareTzSupplierDeatailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzSupplierDeatailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzSupplierDeatailTableMap::buildTableMap();
