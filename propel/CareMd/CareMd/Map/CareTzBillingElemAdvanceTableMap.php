<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzBillingElemAdvance;
use CareMd\CareMd\CareTzBillingElemAdvanceQuery;
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
 * This class defines the structure of the 'care_tz_billing_elem_advance' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzBillingElemAdvanceTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzBillingElemAdvanceTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_billing_elem_advance';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzBillingElemAdvance';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzBillingElemAdvance';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 21;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 21;

    /**
     * the column name for the ID field
     */
    const COL_ID = 'care_tz_billing_elem_advance.ID';

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_tz_billing_elem_advance.nr';

    /**
     * the column name for the date_change field
     */
    const COL_DATE_CHANGE = 'care_tz_billing_elem_advance.date_change';

    /**
     * the column name for the is_labtest field
     */
    const COL_IS_LABTEST = 'care_tz_billing_elem_advance.is_labtest';

    /**
     * the column name for the is_medicine field
     */
    const COL_IS_MEDICINE = 'care_tz_billing_elem_advance.is_medicine';

    /**
     * the column name for the is_radio_test field
     */
    const COL_IS_RADIO_TEST = 'care_tz_billing_elem_advance.is_radio_test';

    /**
     * the column name for the is_comment field
     */
    const COL_IS_COMMENT = 'care_tz_billing_elem_advance.is_comment';

    /**
     * the column name for the is_paid field
     */
    const COL_IS_PAID = 'care_tz_billing_elem_advance.is_paid';

    /**
     * the column name for the amount field
     */
    const COL_AMOUNT = 'care_tz_billing_elem_advance.amount';

    /**
     * the column name for the amount_doc field
     */
    const COL_AMOUNT_DOC = 'care_tz_billing_elem_advance.amount_doc';

    /**
     * the column name for the times_per_day field
     */
    const COL_TIMES_PER_DAY = 'care_tz_billing_elem_advance.times_per_day';

    /**
     * the column name for the days field
     */
    const COL_DAYS = 'care_tz_billing_elem_advance.days';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'care_tz_billing_elem_advance.price';

    /**
     * the column name for the balanced_insurance field
     */
    const COL_BALANCED_INSURANCE = 'care_tz_billing_elem_advance.balanced_insurance';

    /**
     * the column name for the insurance_id field
     */
    const COL_INSURANCE_ID = 'care_tz_billing_elem_advance.insurance_id';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_tz_billing_elem_advance.description';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_tz_billing_elem_advance.notes';

    /**
     * the column name for the item_number field
     */
    const COL_ITEM_NUMBER = 'care_tz_billing_elem_advance.item_number';

    /**
     * the column name for the prescriptions_nr field
     */
    const COL_PRESCRIPTIONS_NR = 'care_tz_billing_elem_advance.prescriptions_nr';

    /**
     * the column name for the is_deposit_item field
     */
    const COL_IS_DEPOSIT_ITEM = 'care_tz_billing_elem_advance.is_deposit_item';

    /**
     * the column name for the User_Id field
     */
    const COL_USER_ID = 'care_tz_billing_elem_advance.User_Id';

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
        self::TYPE_PHPNAME       => array('Id', 'Nr', 'DateChange', 'IsLabtest', 'IsMedicine', 'IsRadioTest', 'IsComment', 'IsPaid', 'Amount', 'AmountDoc', 'TimesPerDay', 'Days', 'Price', 'BalancedInsurance', 'InsuranceId', 'Description', 'Notes', 'ItemNumber', 'PrescriptionsNr', 'IsDepositItem', 'UserId', ),
        self::TYPE_CAMELNAME     => array('id', 'nr', 'dateChange', 'isLabtest', 'isMedicine', 'isRadioTest', 'isComment', 'isPaid', 'amount', 'amountDoc', 'timesPerDay', 'days', 'price', 'balancedInsurance', 'insuranceId', 'description', 'notes', 'itemNumber', 'prescriptionsNr', 'isDepositItem', 'userId', ),
        self::TYPE_COLNAME       => array(CareTzBillingElemAdvanceTableMap::COL_ID, CareTzBillingElemAdvanceTableMap::COL_NR, CareTzBillingElemAdvanceTableMap::COL_DATE_CHANGE, CareTzBillingElemAdvanceTableMap::COL_IS_LABTEST, CareTzBillingElemAdvanceTableMap::COL_IS_MEDICINE, CareTzBillingElemAdvanceTableMap::COL_IS_RADIO_TEST, CareTzBillingElemAdvanceTableMap::COL_IS_COMMENT, CareTzBillingElemAdvanceTableMap::COL_IS_PAID, CareTzBillingElemAdvanceTableMap::COL_AMOUNT, CareTzBillingElemAdvanceTableMap::COL_AMOUNT_DOC, CareTzBillingElemAdvanceTableMap::COL_TIMES_PER_DAY, CareTzBillingElemAdvanceTableMap::COL_DAYS, CareTzBillingElemAdvanceTableMap::COL_PRICE, CareTzBillingElemAdvanceTableMap::COL_BALANCED_INSURANCE, CareTzBillingElemAdvanceTableMap::COL_INSURANCE_ID, CareTzBillingElemAdvanceTableMap::COL_DESCRIPTION, CareTzBillingElemAdvanceTableMap::COL_NOTES, CareTzBillingElemAdvanceTableMap::COL_ITEM_NUMBER, CareTzBillingElemAdvanceTableMap::COL_PRESCRIPTIONS_NR, CareTzBillingElemAdvanceTableMap::COL_IS_DEPOSIT_ITEM, CareTzBillingElemAdvanceTableMap::COL_USER_ID, ),
        self::TYPE_FIELDNAME     => array('ID', 'nr', 'date_change', 'is_labtest', 'is_medicine', 'is_radio_test', 'is_comment', 'is_paid', 'amount', 'amount_doc', 'times_per_day', 'days', 'price', 'balanced_insurance', 'insurance_id', 'description', 'notes', 'item_number', 'prescriptions_nr', 'is_deposit_item', 'User_Id', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Nr' => 1, 'DateChange' => 2, 'IsLabtest' => 3, 'IsMedicine' => 4, 'IsRadioTest' => 5, 'IsComment' => 6, 'IsPaid' => 7, 'Amount' => 8, 'AmountDoc' => 9, 'TimesPerDay' => 10, 'Days' => 11, 'Price' => 12, 'BalancedInsurance' => 13, 'InsuranceId' => 14, 'Description' => 15, 'Notes' => 16, 'ItemNumber' => 17, 'PrescriptionsNr' => 18, 'IsDepositItem' => 19, 'UserId' => 20, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'nr' => 1, 'dateChange' => 2, 'isLabtest' => 3, 'isMedicine' => 4, 'isRadioTest' => 5, 'isComment' => 6, 'isPaid' => 7, 'amount' => 8, 'amountDoc' => 9, 'timesPerDay' => 10, 'days' => 11, 'price' => 12, 'balancedInsurance' => 13, 'insuranceId' => 14, 'description' => 15, 'notes' => 16, 'itemNumber' => 17, 'prescriptionsNr' => 18, 'isDepositItem' => 19, 'userId' => 20, ),
        self::TYPE_COLNAME       => array(CareTzBillingElemAdvanceTableMap::COL_ID => 0, CareTzBillingElemAdvanceTableMap::COL_NR => 1, CareTzBillingElemAdvanceTableMap::COL_DATE_CHANGE => 2, CareTzBillingElemAdvanceTableMap::COL_IS_LABTEST => 3, CareTzBillingElemAdvanceTableMap::COL_IS_MEDICINE => 4, CareTzBillingElemAdvanceTableMap::COL_IS_RADIO_TEST => 5, CareTzBillingElemAdvanceTableMap::COL_IS_COMMENT => 6, CareTzBillingElemAdvanceTableMap::COL_IS_PAID => 7, CareTzBillingElemAdvanceTableMap::COL_AMOUNT => 8, CareTzBillingElemAdvanceTableMap::COL_AMOUNT_DOC => 9, CareTzBillingElemAdvanceTableMap::COL_TIMES_PER_DAY => 10, CareTzBillingElemAdvanceTableMap::COL_DAYS => 11, CareTzBillingElemAdvanceTableMap::COL_PRICE => 12, CareTzBillingElemAdvanceTableMap::COL_BALANCED_INSURANCE => 13, CareTzBillingElemAdvanceTableMap::COL_INSURANCE_ID => 14, CareTzBillingElemAdvanceTableMap::COL_DESCRIPTION => 15, CareTzBillingElemAdvanceTableMap::COL_NOTES => 16, CareTzBillingElemAdvanceTableMap::COL_ITEM_NUMBER => 17, CareTzBillingElemAdvanceTableMap::COL_PRESCRIPTIONS_NR => 18, CareTzBillingElemAdvanceTableMap::COL_IS_DEPOSIT_ITEM => 19, CareTzBillingElemAdvanceTableMap::COL_USER_ID => 20, ),
        self::TYPE_FIELDNAME     => array('ID' => 0, 'nr' => 1, 'date_change' => 2, 'is_labtest' => 3, 'is_medicine' => 4, 'is_radio_test' => 5, 'is_comment' => 6, 'is_paid' => 7, 'amount' => 8, 'amount_doc' => 9, 'times_per_day' => 10, 'days' => 11, 'price' => 12, 'balanced_insurance' => 13, 'insurance_id' => 14, 'description' => 15, 'notes' => 16, 'item_number' => 17, 'prescriptions_nr' => 18, 'is_deposit_item' => 19, 'User_Id' => 20, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $this->setName('care_tz_billing_elem_advance');
        $this->setPhpName('CareTzBillingElemAdvance');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzBillingElemAdvance');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'BIGINT', true, null, null);
        $this->addColumn('nr', 'Nr', 'BIGINT', true, null, 0);
        $this->addColumn('date_change', 'DateChange', 'BIGINT', true, null, 0);
        $this->addColumn('is_labtest', 'IsLabtest', 'TINYINT', true, null, 0);
        $this->addColumn('is_medicine', 'IsMedicine', 'TINYINT', true, null, 0);
        $this->addColumn('is_radio_test', 'IsRadioTest', 'TINYINT', true, null, null);
        $this->addColumn('is_comment', 'IsComment', 'TINYINT', true, null, 0);
        $this->addColumn('is_paid', 'IsPaid', 'TINYINT', true, null, 0);
        $this->addColumn('amount', 'Amount', 'BIGINT', true, null, 0);
        $this->addColumn('amount_doc', 'AmountDoc', 'BIGINT', true, null, null);
        $this->addColumn('times_per_day', 'TimesPerDay', 'SMALLINT', true, 10, null);
        $this->addColumn('days', 'Days', 'SMALLINT', true, 10, null);
        $this->addColumn('price', 'Price', 'VARCHAR', true, 255, '');
        $this->addColumn('balanced_insurance', 'BalancedInsurance', 'VARCHAR', false, 20, null);
        $this->addColumn('insurance_id', 'InsuranceId', 'BIGINT', false, null, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 255, '');
        $this->addColumn('notes', 'Notes', 'VARCHAR', true, 255, '');
        $this->addColumn('item_number', 'ItemNumber', 'BIGINT', true, null, 0);
        $this->addColumn('prescriptions_nr', 'PrescriptionsNr', 'BIGINT', true, null, 0);
        $this->addColumn('is_deposit_item', 'IsDepositItem', 'BOOLEAN', true, 1, false);
        $this->addColumn('User_Id', 'UserId', 'VARCHAR', true, 50, null);
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
        return $withPrefix ? CareTzBillingElemAdvanceTableMap::CLASS_DEFAULT : CareTzBillingElemAdvanceTableMap::OM_CLASS;
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
     * @return array           (CareTzBillingElemAdvance object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzBillingElemAdvanceTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzBillingElemAdvanceTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzBillingElemAdvanceTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzBillingElemAdvanceTableMap::OM_CLASS;
            /** @var CareTzBillingElemAdvance $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzBillingElemAdvanceTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzBillingElemAdvanceTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzBillingElemAdvanceTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzBillingElemAdvance $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzBillingElemAdvanceTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_NR);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_DATE_CHANGE);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_IS_LABTEST);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_IS_MEDICINE);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_IS_RADIO_TEST);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_IS_COMMENT);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_IS_PAID);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_AMOUNT);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_AMOUNT_DOC);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_TIMES_PER_DAY);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_DAYS);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_PRICE);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_BALANCED_INSURANCE);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_INSURANCE_ID);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_ITEM_NUMBER);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_PRESCRIPTIONS_NR);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_IS_DEPOSIT_ITEM);
            $criteria->addSelectColumn(CareTzBillingElemAdvanceTableMap::COL_USER_ID);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.date_change');
            $criteria->addSelectColumn($alias . '.is_labtest');
            $criteria->addSelectColumn($alias . '.is_medicine');
            $criteria->addSelectColumn($alias . '.is_radio_test');
            $criteria->addSelectColumn($alias . '.is_comment');
            $criteria->addSelectColumn($alias . '.is_paid');
            $criteria->addSelectColumn($alias . '.amount');
            $criteria->addSelectColumn($alias . '.amount_doc');
            $criteria->addSelectColumn($alias . '.times_per_day');
            $criteria->addSelectColumn($alias . '.days');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.balanced_insurance');
            $criteria->addSelectColumn($alias . '.insurance_id');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.item_number');
            $criteria->addSelectColumn($alias . '.prescriptions_nr');
            $criteria->addSelectColumn($alias . '.is_deposit_item');
            $criteria->addSelectColumn($alias . '.User_Id');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzBillingElemAdvanceTableMap::DATABASE_NAME)->getTable(CareTzBillingElemAdvanceTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzBillingElemAdvanceTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzBillingElemAdvanceTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzBillingElemAdvanceTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzBillingElemAdvance or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzBillingElemAdvance object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingElemAdvanceTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzBillingElemAdvance) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzBillingElemAdvanceTableMap::DATABASE_NAME);
            $criteria->add(CareTzBillingElemAdvanceTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzBillingElemAdvanceQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzBillingElemAdvanceTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzBillingElemAdvanceTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_billing_elem_advance table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzBillingElemAdvanceQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzBillingElemAdvance or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzBillingElemAdvance object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingElemAdvanceTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzBillingElemAdvance object
        }

        if ($criteria->containsKey(CareTzBillingElemAdvanceTableMap::COL_ID) && $criteria->keyContainsValue(CareTzBillingElemAdvanceTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzBillingElemAdvanceTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzBillingElemAdvanceQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzBillingElemAdvanceTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzBillingElemAdvanceTableMap::buildTableMap();
