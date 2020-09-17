<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzCompany;
use CareMd\CareMd\CareTzCompanyQuery;
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
 * This class defines the structure of the 'care_tz_company' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzCompanyTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzCompanyTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_company';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzCompany';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzCompany';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_tz_company.id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_tz_company.name';

    /**
     * the column name for the contact field
     */
    const COL_CONTACT = 'care_tz_company.contact';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'care_tz_company.email';

    /**
     * the column name for the phone_code field
     */
    const COL_PHONE_CODE = 'care_tz_company.phone_code';

    /**
     * the column name for the phone_nr field
     */
    const COL_PHONE_NR = 'care_tz_company.phone_nr';

    /**
     * the column name for the po_box field
     */
    const COL_PO_BOX = 'care_tz_company.po_box';

    /**
     * the column name for the city field
     */
    const COL_CITY = 'care_tz_company.city';

    /**
     * the column name for the start_date field
     */
    const COL_START_DATE = 'care_tz_company.start_date';

    /**
     * the column name for the end_date field
     */
    const COL_END_DATE = 'care_tz_company.end_date';

    /**
     * the column name for the invoice_flag field
     */
    const COL_INVOICE_FLAG = 'care_tz_company.invoice_flag';

    /**
     * the column name for the credit_preselection_flag field
     */
    const COL_CREDIT_PRESELECTION_FLAG = 'care_tz_company.credit_preselection_flag';

    /**
     * the column name for the hide_company_flag field
     */
    const COL_HIDE_COMPANY_FLAG = 'care_tz_company.hide_company_flag';

    /**
     * the column name for the prepaid_amount field
     */
    const COL_PREPAID_AMOUNT = 'care_tz_company.prepaid_amount';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tz_company.modify_id';

    /**
     * the column name for the enable_member_expiry field
     */
    const COL_ENABLE_MEMBER_EXPIRY = 'care_tz_company.enable_member_expiry';

    /**
     * the column name for the company_code field
     */
    const COL_COMPANY_CODE = 'care_tz_company.company_code';

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
        self::TYPE_PHPNAME       => array('Id', 'Name', 'Contact', 'Email', 'PhoneCode', 'PhoneNr', 'PoBox', 'City', 'StartDate', 'EndDate', 'InvoiceFlag', 'CreditPreselectionFlag', 'HideCompanyFlag', 'PrepaidAmount', 'ModifyId', 'EnableMemberExpiry', 'CompanyCode', ),
        self::TYPE_CAMELNAME     => array('id', 'name', 'contact', 'email', 'phoneCode', 'phoneNr', 'poBox', 'city', 'startDate', 'endDate', 'invoiceFlag', 'creditPreselectionFlag', 'hideCompanyFlag', 'prepaidAmount', 'modifyId', 'enableMemberExpiry', 'companyCode', ),
        self::TYPE_COLNAME       => array(CareTzCompanyTableMap::COL_ID, CareTzCompanyTableMap::COL_NAME, CareTzCompanyTableMap::COL_CONTACT, CareTzCompanyTableMap::COL_EMAIL, CareTzCompanyTableMap::COL_PHONE_CODE, CareTzCompanyTableMap::COL_PHONE_NR, CareTzCompanyTableMap::COL_PO_BOX, CareTzCompanyTableMap::COL_CITY, CareTzCompanyTableMap::COL_START_DATE, CareTzCompanyTableMap::COL_END_DATE, CareTzCompanyTableMap::COL_INVOICE_FLAG, CareTzCompanyTableMap::COL_CREDIT_PRESELECTION_FLAG, CareTzCompanyTableMap::COL_HIDE_COMPANY_FLAG, CareTzCompanyTableMap::COL_PREPAID_AMOUNT, CareTzCompanyTableMap::COL_MODIFY_ID, CareTzCompanyTableMap::COL_ENABLE_MEMBER_EXPIRY, CareTzCompanyTableMap::COL_COMPANY_CODE, ),
        self::TYPE_FIELDNAME     => array('id', 'name', 'contact', 'email', 'phone_code', 'phone_nr', 'po_box', 'city', 'start_date', 'end_date', 'invoice_flag', 'credit_preselection_flag', 'hide_company_flag', 'prepaid_amount', 'modify_id', 'enable_member_expiry', 'company_code', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Name' => 1, 'Contact' => 2, 'Email' => 3, 'PhoneCode' => 4, 'PhoneNr' => 5, 'PoBox' => 6, 'City' => 7, 'StartDate' => 8, 'EndDate' => 9, 'InvoiceFlag' => 10, 'CreditPreselectionFlag' => 11, 'HideCompanyFlag' => 12, 'PrepaidAmount' => 13, 'ModifyId' => 14, 'EnableMemberExpiry' => 15, 'CompanyCode' => 16, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'name' => 1, 'contact' => 2, 'email' => 3, 'phoneCode' => 4, 'phoneNr' => 5, 'poBox' => 6, 'city' => 7, 'startDate' => 8, 'endDate' => 9, 'invoiceFlag' => 10, 'creditPreselectionFlag' => 11, 'hideCompanyFlag' => 12, 'prepaidAmount' => 13, 'modifyId' => 14, 'enableMemberExpiry' => 15, 'companyCode' => 16, ),
        self::TYPE_COLNAME       => array(CareTzCompanyTableMap::COL_ID => 0, CareTzCompanyTableMap::COL_NAME => 1, CareTzCompanyTableMap::COL_CONTACT => 2, CareTzCompanyTableMap::COL_EMAIL => 3, CareTzCompanyTableMap::COL_PHONE_CODE => 4, CareTzCompanyTableMap::COL_PHONE_NR => 5, CareTzCompanyTableMap::COL_PO_BOX => 6, CareTzCompanyTableMap::COL_CITY => 7, CareTzCompanyTableMap::COL_START_DATE => 8, CareTzCompanyTableMap::COL_END_DATE => 9, CareTzCompanyTableMap::COL_INVOICE_FLAG => 10, CareTzCompanyTableMap::COL_CREDIT_PRESELECTION_FLAG => 11, CareTzCompanyTableMap::COL_HIDE_COMPANY_FLAG => 12, CareTzCompanyTableMap::COL_PREPAID_AMOUNT => 13, CareTzCompanyTableMap::COL_MODIFY_ID => 14, CareTzCompanyTableMap::COL_ENABLE_MEMBER_EXPIRY => 15, CareTzCompanyTableMap::COL_COMPANY_CODE => 16, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'name' => 1, 'contact' => 2, 'email' => 3, 'phone_code' => 4, 'phone_nr' => 5, 'po_box' => 6, 'city' => 7, 'start_date' => 8, 'end_date' => 9, 'invoice_flag' => 10, 'credit_preselection_flag' => 11, 'hide_company_flag' => 12, 'prepaid_amount' => 13, 'modify_id' => 14, 'enable_member_expiry' => 15, 'company_code' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('care_tz_company');
        $this->setPhpName('CareTzCompany');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzCompany');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'BIGINT', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, '');
        $this->addColumn('contact', 'Contact', 'VARCHAR', true, 255, '');
        $this->addColumn('email', 'Email', 'VARCHAR', true, 60, null);
        $this->addColumn('phone_code', 'PhoneCode', 'INTEGER', true, 5, null);
        $this->addColumn('phone_nr', 'PhoneNr', 'VARCHAR', true, 20, null);
        $this->addColumn('po_box', 'PoBox', 'VARCHAR', true, 255, '');
        $this->addColumn('city', 'City', 'VARCHAR', true, 255, '');
        $this->addColumn('start_date', 'StartDate', 'BIGINT', true, null, 0);
        $this->addColumn('end_date', 'EndDate', 'BIGINT', true, null, 0);
        $this->addColumn('invoice_flag', 'InvoiceFlag', 'TINYINT', true, null, 0);
        $this->addColumn('credit_preselection_flag', 'CreditPreselectionFlag', 'TINYINT', true, null, 0);
        $this->addColumn('hide_company_flag', 'HideCompanyFlag', 'TINYINT', true, null, 0);
        $this->addColumn('prepaid_amount', 'PrepaidAmount', 'INTEGER', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 25, null);
        $this->addColumn('enable_member_expiry', 'EnableMemberExpiry', 'TINYINT', true, 2, null);
        $this->addColumn('company_code', 'CompanyCode', 'VARCHAR', true, 255, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzCompanyTableMap::CLASS_DEFAULT : CareTzCompanyTableMap::OM_CLASS;
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
     * @return array           (CareTzCompany object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzCompanyTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzCompanyTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzCompanyTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzCompanyTableMap::OM_CLASS;
            /** @var CareTzCompany $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzCompanyTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzCompanyTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzCompanyTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzCompany $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzCompanyTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_NAME);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_CONTACT);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_EMAIL);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_PHONE_CODE);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_PHONE_NR);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_PO_BOX);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_CITY);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_START_DATE);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_END_DATE);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_INVOICE_FLAG);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_CREDIT_PRESELECTION_FLAG);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_HIDE_COMPANY_FLAG);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_PREPAID_AMOUNT);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_ENABLE_MEMBER_EXPIRY);
            $criteria->addSelectColumn(CareTzCompanyTableMap::COL_COMPANY_CODE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.contact');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.phone_code');
            $criteria->addSelectColumn($alias . '.phone_nr');
            $criteria->addSelectColumn($alias . '.po_box');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.start_date');
            $criteria->addSelectColumn($alias . '.end_date');
            $criteria->addSelectColumn($alias . '.invoice_flag');
            $criteria->addSelectColumn($alias . '.credit_preselection_flag');
            $criteria->addSelectColumn($alias . '.hide_company_flag');
            $criteria->addSelectColumn($alias . '.prepaid_amount');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.enable_member_expiry');
            $criteria->addSelectColumn($alias . '.company_code');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzCompanyTableMap::DATABASE_NAME)->getTable(CareTzCompanyTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzCompanyTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzCompanyTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzCompanyTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzCompany or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzCompany object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzCompanyTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzCompany) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzCompanyTableMap::DATABASE_NAME);
            $criteria->add(CareTzCompanyTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzCompanyQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzCompanyTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzCompanyTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_company table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzCompanyQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzCompany or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzCompany object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzCompanyTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzCompany object
        }

        if ($criteria->containsKey(CareTzCompanyTableMap::COL_ID) && $criteria->keyContainsValue(CareTzCompanyTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzCompanyTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzCompanyQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzCompanyTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzCompanyTableMap::buildTableMap();
