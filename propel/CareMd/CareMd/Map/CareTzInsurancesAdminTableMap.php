<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzInsurancesAdmin;
use CareMd\CareMd\CareTzInsurancesAdminQuery;
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
 * This class defines the structure of the 'care_tz_insurances_admin' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzInsurancesAdminTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzInsurancesAdminTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_insurances_admin';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzInsurancesAdmin';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzInsurancesAdmin';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 20;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 20;

    /**
     * the column name for the insurance_ID field
     */
    const COL_INSURANCE_ID = 'care_tz_insurances_admin.insurance_ID';

    /**
     * the column name for the insurer field
     */
    const COL_INSURER = 'care_tz_insurances_admin.insurer';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_tz_insurances_admin.name';

    /**
     * the column name for the max_pay field
     */
    const COL_MAX_PAY = 'care_tz_insurances_admin.max_pay';

    /**
     * the column name for the deleted field
     */
    const COL_DELETED = 'care_tz_insurances_admin.deleted';

    /**
     * the column name for the creation field
     */
    const COL_CREATION = 'care_tz_insurances_admin.creation';

    /**
     * the column name for the id_insurer_hist field
     */
    const COL_ID_INSURER_HIST = 'care_tz_insurances_admin.id_insurer_hist';

    /**
     * the column name for the name_hist field
     */
    const COL_NAME_HIST = 'care_tz_insurances_admin.name_hist';

    /**
     * the column name for the max_pay_hist field
     */
    const COL_MAX_PAY_HIST = 'care_tz_insurances_admin.max_pay_hist';

    /**
     * the column name for the deleted_hist field
     */
    const COL_DELETED_HIST = 'care_tz_insurances_admin.deleted_hist';

    /**
     * the column name for the contact_person field
     */
    const COL_CONTACT_PERSON = 'care_tz_insurances_admin.contact_person';

    /**
     * the column name for the contact_person_hist field
     */
    const COL_CONTACT_PERSON_HIST = 'care_tz_insurances_admin.contact_person_hist';

    /**
     * the column name for the po_box field
     */
    const COL_PO_BOX = 'care_tz_insurances_admin.po_box';

    /**
     * the column name for the po_box_hist field
     */
    const COL_PO_BOX_HIST = 'care_tz_insurances_admin.po_box_hist';

    /**
     * the column name for the city field
     */
    const COL_CITY = 'care_tz_insurances_admin.city';

    /**
     * the column name for the city_hist field
     */
    const COL_CITY_HIST = 'care_tz_insurances_admin.city_hist';

    /**
     * the column name for the phone field
     */
    const COL_PHONE = 'care_tz_insurances_admin.phone';

    /**
     * the column name for the phone_hist field
     */
    const COL_PHONE_HIST = 'care_tz_insurances_admin.phone_hist';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'care_tz_insurances_admin.email';

    /**
     * the column name for the email_hist field
     */
    const COL_EMAIL_HIST = 'care_tz_insurances_admin.email_hist';

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
        self::TYPE_PHPNAME       => array('InsuranceId', 'Insurer', 'Name', 'MaxPay', 'Deleted', 'Creation', 'IdInsurerHist', 'NameHist', 'MaxPayHist', 'DeletedHist', 'ContactPerson', 'ContactPersonHist', 'PoBox', 'PoBoxHist', 'City', 'CityHist', 'Phone', 'PhoneHist', 'Email', 'EmailHist', ),
        self::TYPE_CAMELNAME     => array('insuranceId', 'insurer', 'name', 'maxPay', 'deleted', 'creation', 'idInsurerHist', 'nameHist', 'maxPayHist', 'deletedHist', 'contactPerson', 'contactPersonHist', 'poBox', 'poBoxHist', 'city', 'cityHist', 'phone', 'phoneHist', 'email', 'emailHist', ),
        self::TYPE_COLNAME       => array(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID, CareTzInsurancesAdminTableMap::COL_INSURER, CareTzInsurancesAdminTableMap::COL_NAME, CareTzInsurancesAdminTableMap::COL_MAX_PAY, CareTzInsurancesAdminTableMap::COL_DELETED, CareTzInsurancesAdminTableMap::COL_CREATION, CareTzInsurancesAdminTableMap::COL_ID_INSURER_HIST, CareTzInsurancesAdminTableMap::COL_NAME_HIST, CareTzInsurancesAdminTableMap::COL_MAX_PAY_HIST, CareTzInsurancesAdminTableMap::COL_DELETED_HIST, CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON, CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON_HIST, CareTzInsurancesAdminTableMap::COL_PO_BOX, CareTzInsurancesAdminTableMap::COL_PO_BOX_HIST, CareTzInsurancesAdminTableMap::COL_CITY, CareTzInsurancesAdminTableMap::COL_CITY_HIST, CareTzInsurancesAdminTableMap::COL_PHONE, CareTzInsurancesAdminTableMap::COL_PHONE_HIST, CareTzInsurancesAdminTableMap::COL_EMAIL, CareTzInsurancesAdminTableMap::COL_EMAIL_HIST, ),
        self::TYPE_FIELDNAME     => array('insurance_ID', 'insurer', 'name', 'max_pay', 'deleted', 'creation', 'id_insurer_hist', 'name_hist', 'max_pay_hist', 'deleted_hist', 'contact_person', 'contact_person_hist', 'po_box', 'po_box_hist', 'city', 'city_hist', 'phone', 'phone_hist', 'email', 'email_hist', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('InsuranceId' => 0, 'Insurer' => 1, 'Name' => 2, 'MaxPay' => 3, 'Deleted' => 4, 'Creation' => 5, 'IdInsurerHist' => 6, 'NameHist' => 7, 'MaxPayHist' => 8, 'DeletedHist' => 9, 'ContactPerson' => 10, 'ContactPersonHist' => 11, 'PoBox' => 12, 'PoBoxHist' => 13, 'City' => 14, 'CityHist' => 15, 'Phone' => 16, 'PhoneHist' => 17, 'Email' => 18, 'EmailHist' => 19, ),
        self::TYPE_CAMELNAME     => array('insuranceId' => 0, 'insurer' => 1, 'name' => 2, 'maxPay' => 3, 'deleted' => 4, 'creation' => 5, 'idInsurerHist' => 6, 'nameHist' => 7, 'maxPayHist' => 8, 'deletedHist' => 9, 'contactPerson' => 10, 'contactPersonHist' => 11, 'poBox' => 12, 'poBoxHist' => 13, 'city' => 14, 'cityHist' => 15, 'phone' => 16, 'phoneHist' => 17, 'email' => 18, 'emailHist' => 19, ),
        self::TYPE_COLNAME       => array(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID => 0, CareTzInsurancesAdminTableMap::COL_INSURER => 1, CareTzInsurancesAdminTableMap::COL_NAME => 2, CareTzInsurancesAdminTableMap::COL_MAX_PAY => 3, CareTzInsurancesAdminTableMap::COL_DELETED => 4, CareTzInsurancesAdminTableMap::COL_CREATION => 5, CareTzInsurancesAdminTableMap::COL_ID_INSURER_HIST => 6, CareTzInsurancesAdminTableMap::COL_NAME_HIST => 7, CareTzInsurancesAdminTableMap::COL_MAX_PAY_HIST => 8, CareTzInsurancesAdminTableMap::COL_DELETED_HIST => 9, CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON => 10, CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON_HIST => 11, CareTzInsurancesAdminTableMap::COL_PO_BOX => 12, CareTzInsurancesAdminTableMap::COL_PO_BOX_HIST => 13, CareTzInsurancesAdminTableMap::COL_CITY => 14, CareTzInsurancesAdminTableMap::COL_CITY_HIST => 15, CareTzInsurancesAdminTableMap::COL_PHONE => 16, CareTzInsurancesAdminTableMap::COL_PHONE_HIST => 17, CareTzInsurancesAdminTableMap::COL_EMAIL => 18, CareTzInsurancesAdminTableMap::COL_EMAIL_HIST => 19, ),
        self::TYPE_FIELDNAME     => array('insurance_ID' => 0, 'insurer' => 1, 'name' => 2, 'max_pay' => 3, 'deleted' => 4, 'creation' => 5, 'id_insurer_hist' => 6, 'name_hist' => 7, 'max_pay_hist' => 8, 'deleted_hist' => 9, 'contact_person' => 10, 'contact_person_hist' => 11, 'po_box' => 12, 'po_box_hist' => 13, 'city' => 14, 'city_hist' => 15, 'phone' => 16, 'phone_hist' => 17, 'email' => 18, 'email_hist' => 19, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
        $this->setName('care_tz_insurances_admin');
        $this->setPhpName('CareTzInsurancesAdmin');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzInsurancesAdmin');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('insurance_ID', 'InsuranceId', 'SMALLINT', true, 5, null);
        $this->addColumn('insurer', 'Insurer', 'SMALLINT', true, 5, -1);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 30, null);
        $this->addColumn('max_pay', 'MaxPay', 'INTEGER', false, 10, null);
        $this->addColumn('deleted', 'Deleted', 'BOOLEAN', true, 1, false);
        $this->addColumn('creation', 'Creation', 'LONGVARCHAR', true, null, null);
        $this->addColumn('id_insurer_hist', 'IdInsurerHist', 'LONGVARCHAR', false, null, null);
        $this->addColumn('name_hist', 'NameHist', 'LONGVARCHAR', false, null, null);
        $this->addColumn('max_pay_hist', 'MaxPayHist', 'LONGVARCHAR', false, null, null);
        $this->addColumn('deleted_hist', 'DeletedHist', 'LONGVARCHAR', false, null, null);
        $this->addColumn('contact_person', 'ContactPerson', 'VARCHAR', false, 60, null);
        $this->addColumn('contact_person_hist', 'ContactPersonHist', 'LONGVARCHAR', true, null, null);
        $this->addColumn('po_box', 'PoBox', 'VARCHAR', false, 50, null);
        $this->addColumn('po_box_hist', 'PoBoxHist', 'LONGVARCHAR', true, null, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 60, null);
        $this->addColumn('city_hist', 'CityHist', 'LONGVARCHAR', true, null, null);
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 35, null);
        $this->addColumn('phone_hist', 'PhoneHist', 'LONGVARCHAR', true, null, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 60, null);
        $this->addColumn('email_hist', 'EmailHist', 'LONGVARCHAR', true, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('InsuranceId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('InsuranceId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('InsuranceId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('InsuranceId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('InsuranceId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('InsuranceId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('InsuranceId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzInsurancesAdminTableMap::CLASS_DEFAULT : CareTzInsurancesAdminTableMap::OM_CLASS;
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
     * @return array           (CareTzInsurancesAdmin object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzInsurancesAdminTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzInsurancesAdminTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzInsurancesAdminTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzInsurancesAdminTableMap::OM_CLASS;
            /** @var CareTzInsurancesAdmin $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzInsurancesAdminTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzInsurancesAdminTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzInsurancesAdminTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzInsurancesAdmin $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzInsurancesAdminTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_INSURER);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_NAME);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_MAX_PAY);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_DELETED);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_CREATION);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_ID_INSURER_HIST);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_NAME_HIST);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_MAX_PAY_HIST);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_DELETED_HIST);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON_HIST);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_PO_BOX);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_PO_BOX_HIST);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_CITY);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_CITY_HIST);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_PHONE);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_PHONE_HIST);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_EMAIL);
            $criteria->addSelectColumn(CareTzInsurancesAdminTableMap::COL_EMAIL_HIST);
        } else {
            $criteria->addSelectColumn($alias . '.insurance_ID');
            $criteria->addSelectColumn($alias . '.insurer');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.max_pay');
            $criteria->addSelectColumn($alias . '.deleted');
            $criteria->addSelectColumn($alias . '.creation');
            $criteria->addSelectColumn($alias . '.id_insurer_hist');
            $criteria->addSelectColumn($alias . '.name_hist');
            $criteria->addSelectColumn($alias . '.max_pay_hist');
            $criteria->addSelectColumn($alias . '.deleted_hist');
            $criteria->addSelectColumn($alias . '.contact_person');
            $criteria->addSelectColumn($alias . '.contact_person_hist');
            $criteria->addSelectColumn($alias . '.po_box');
            $criteria->addSelectColumn($alias . '.po_box_hist');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.city_hist');
            $criteria->addSelectColumn($alias . '.phone');
            $criteria->addSelectColumn($alias . '.phone_hist');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.email_hist');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzInsurancesAdminTableMap::DATABASE_NAME)->getTable(CareTzInsurancesAdminTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzInsurancesAdminTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzInsurancesAdminTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzInsurancesAdminTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzInsurancesAdmin or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzInsurancesAdmin object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsurancesAdminTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzInsurancesAdmin) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzInsurancesAdminTableMap::DATABASE_NAME);
            $criteria->add(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzInsurancesAdminQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzInsurancesAdminTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzInsurancesAdminTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_insurances_admin table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzInsurancesAdminQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzInsurancesAdmin or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzInsurancesAdmin object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsurancesAdminTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzInsurancesAdmin object
        }

        if ($criteria->containsKey(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID) && $criteria->keyContainsValue(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzInsurancesAdminTableMap::COL_INSURANCE_ID.')');
        }


        // Set the correct dbName
        $query = CareTzInsurancesAdminQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzInsurancesAdminTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzInsurancesAdminTableMap::buildTableMap();
