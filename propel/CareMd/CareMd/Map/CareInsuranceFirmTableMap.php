<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareInsuranceFirm;
use CareMd\CareMd\CareInsuranceFirmQuery;
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
 * This class defines the structure of the 'care_insurance_firm' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareInsuranceFirmTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareInsuranceFirmTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_insurance_firm';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareInsuranceFirm';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareInsuranceFirm';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 24;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 24;

    /**
     * the column name for the firm_id field
     */
    const COL_FIRM_ID = 'care_insurance_firm.firm_id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_insurance_firm.name';

    /**
     * the column name for the iso_country_id field
     */
    const COL_ISO_COUNTRY_ID = 'care_insurance_firm.iso_country_id';

    /**
     * the column name for the sub_area field
     */
    const COL_SUB_AREA = 'care_insurance_firm.sub_area';

    /**
     * the column name for the type_nr field
     */
    const COL_TYPE_NR = 'care_insurance_firm.type_nr';

    /**
     * the column name for the addr field
     */
    const COL_ADDR = 'care_insurance_firm.addr';

    /**
     * the column name for the addr_mail field
     */
    const COL_ADDR_MAIL = 'care_insurance_firm.addr_mail';

    /**
     * the column name for the addr_billing field
     */
    const COL_ADDR_BILLING = 'care_insurance_firm.addr_billing';

    /**
     * the column name for the addr_email field
     */
    const COL_ADDR_EMAIL = 'care_insurance_firm.addr_email';

    /**
     * the column name for the phone_main field
     */
    const COL_PHONE_MAIN = 'care_insurance_firm.phone_main';

    /**
     * the column name for the phone_aux field
     */
    const COL_PHONE_AUX = 'care_insurance_firm.phone_aux';

    /**
     * the column name for the fax_main field
     */
    const COL_FAX_MAIN = 'care_insurance_firm.fax_main';

    /**
     * the column name for the fax_aux field
     */
    const COL_FAX_AUX = 'care_insurance_firm.fax_aux';

    /**
     * the column name for the contact_person field
     */
    const COL_CONTACT_PERSON = 'care_insurance_firm.contact_person';

    /**
     * the column name for the contact_phone field
     */
    const COL_CONTACT_PHONE = 'care_insurance_firm.contact_phone';

    /**
     * the column name for the contact_fax field
     */
    const COL_CONTACT_FAX = 'care_insurance_firm.contact_fax';

    /**
     * the column name for the contact_email field
     */
    const COL_CONTACT_EMAIL = 'care_insurance_firm.contact_email';

    /**
     * the column name for the use_frequency field
     */
    const COL_USE_FREQUENCY = 'care_insurance_firm.use_frequency';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_insurance_firm.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_insurance_firm.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_insurance_firm.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_insurance_firm.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_insurance_firm.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_insurance_firm.create_time';

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
        self::TYPE_PHPNAME       => array('FirmId', 'Name', 'IsoCountryId', 'SubArea', 'TypeNr', 'Addr', 'AddrMail', 'AddrBilling', 'AddrEmail', 'PhoneMain', 'PhoneAux', 'FaxMain', 'FaxAux', 'ContactPerson', 'ContactPhone', 'ContactFax', 'ContactEmail', 'UseFrequency', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('firmId', 'name', 'isoCountryId', 'subArea', 'typeNr', 'addr', 'addrMail', 'addrBilling', 'addrEmail', 'phoneMain', 'phoneAux', 'faxMain', 'faxAux', 'contactPerson', 'contactPhone', 'contactFax', 'contactEmail', 'useFrequency', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareInsuranceFirmTableMap::COL_FIRM_ID, CareInsuranceFirmTableMap::COL_NAME, CareInsuranceFirmTableMap::COL_ISO_COUNTRY_ID, CareInsuranceFirmTableMap::COL_SUB_AREA, CareInsuranceFirmTableMap::COL_TYPE_NR, CareInsuranceFirmTableMap::COL_ADDR, CareInsuranceFirmTableMap::COL_ADDR_MAIL, CareInsuranceFirmTableMap::COL_ADDR_BILLING, CareInsuranceFirmTableMap::COL_ADDR_EMAIL, CareInsuranceFirmTableMap::COL_PHONE_MAIN, CareInsuranceFirmTableMap::COL_PHONE_AUX, CareInsuranceFirmTableMap::COL_FAX_MAIN, CareInsuranceFirmTableMap::COL_FAX_AUX, CareInsuranceFirmTableMap::COL_CONTACT_PERSON, CareInsuranceFirmTableMap::COL_CONTACT_PHONE, CareInsuranceFirmTableMap::COL_CONTACT_FAX, CareInsuranceFirmTableMap::COL_CONTACT_EMAIL, CareInsuranceFirmTableMap::COL_USE_FREQUENCY, CareInsuranceFirmTableMap::COL_STATUS, CareInsuranceFirmTableMap::COL_HISTORY, CareInsuranceFirmTableMap::COL_MODIFY_ID, CareInsuranceFirmTableMap::COL_MODIFY_TIME, CareInsuranceFirmTableMap::COL_CREATE_ID, CareInsuranceFirmTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('firm_id', 'name', 'iso_country_id', 'sub_area', 'type_nr', 'addr', 'addr_mail', 'addr_billing', 'addr_email', 'phone_main', 'phone_aux', 'fax_main', 'fax_aux', 'contact_person', 'contact_phone', 'contact_fax', 'contact_email', 'use_frequency', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('FirmId' => 0, 'Name' => 1, 'IsoCountryId' => 2, 'SubArea' => 3, 'TypeNr' => 4, 'Addr' => 5, 'AddrMail' => 6, 'AddrBilling' => 7, 'AddrEmail' => 8, 'PhoneMain' => 9, 'PhoneAux' => 10, 'FaxMain' => 11, 'FaxAux' => 12, 'ContactPerson' => 13, 'ContactPhone' => 14, 'ContactFax' => 15, 'ContactEmail' => 16, 'UseFrequency' => 17, 'Status' => 18, 'History' => 19, 'ModifyId' => 20, 'ModifyTime' => 21, 'CreateId' => 22, 'CreateTime' => 23, ),
        self::TYPE_CAMELNAME     => array('firmId' => 0, 'name' => 1, 'isoCountryId' => 2, 'subArea' => 3, 'typeNr' => 4, 'addr' => 5, 'addrMail' => 6, 'addrBilling' => 7, 'addrEmail' => 8, 'phoneMain' => 9, 'phoneAux' => 10, 'faxMain' => 11, 'faxAux' => 12, 'contactPerson' => 13, 'contactPhone' => 14, 'contactFax' => 15, 'contactEmail' => 16, 'useFrequency' => 17, 'status' => 18, 'history' => 19, 'modifyId' => 20, 'modifyTime' => 21, 'createId' => 22, 'createTime' => 23, ),
        self::TYPE_COLNAME       => array(CareInsuranceFirmTableMap::COL_FIRM_ID => 0, CareInsuranceFirmTableMap::COL_NAME => 1, CareInsuranceFirmTableMap::COL_ISO_COUNTRY_ID => 2, CareInsuranceFirmTableMap::COL_SUB_AREA => 3, CareInsuranceFirmTableMap::COL_TYPE_NR => 4, CareInsuranceFirmTableMap::COL_ADDR => 5, CareInsuranceFirmTableMap::COL_ADDR_MAIL => 6, CareInsuranceFirmTableMap::COL_ADDR_BILLING => 7, CareInsuranceFirmTableMap::COL_ADDR_EMAIL => 8, CareInsuranceFirmTableMap::COL_PHONE_MAIN => 9, CareInsuranceFirmTableMap::COL_PHONE_AUX => 10, CareInsuranceFirmTableMap::COL_FAX_MAIN => 11, CareInsuranceFirmTableMap::COL_FAX_AUX => 12, CareInsuranceFirmTableMap::COL_CONTACT_PERSON => 13, CareInsuranceFirmTableMap::COL_CONTACT_PHONE => 14, CareInsuranceFirmTableMap::COL_CONTACT_FAX => 15, CareInsuranceFirmTableMap::COL_CONTACT_EMAIL => 16, CareInsuranceFirmTableMap::COL_USE_FREQUENCY => 17, CareInsuranceFirmTableMap::COL_STATUS => 18, CareInsuranceFirmTableMap::COL_HISTORY => 19, CareInsuranceFirmTableMap::COL_MODIFY_ID => 20, CareInsuranceFirmTableMap::COL_MODIFY_TIME => 21, CareInsuranceFirmTableMap::COL_CREATE_ID => 22, CareInsuranceFirmTableMap::COL_CREATE_TIME => 23, ),
        self::TYPE_FIELDNAME     => array('firm_id' => 0, 'name' => 1, 'iso_country_id' => 2, 'sub_area' => 3, 'type_nr' => 4, 'addr' => 5, 'addr_mail' => 6, 'addr_billing' => 7, 'addr_email' => 8, 'phone_main' => 9, 'phone_aux' => 10, 'fax_main' => 11, 'fax_aux' => 12, 'contact_person' => 13, 'contact_phone' => 14, 'contact_fax' => 15, 'contact_email' => 16, 'use_frequency' => 17, 'status' => 18, 'history' => 19, 'modify_id' => 20, 'modify_time' => 21, 'create_id' => 22, 'create_time' => 23, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
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
        $this->setName('care_insurance_firm');
        $this->setPhpName('CareInsuranceFirm');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareInsuranceFirm');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('firm_id', 'FirmId', 'VARCHAR', true, 40, '');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 60, '');
        $this->addColumn('iso_country_id', 'IsoCountryId', 'CHAR', true, 3, '');
        $this->addColumn('sub_area', 'SubArea', 'VARCHAR', true, 60, '');
        $this->addColumn('type_nr', 'TypeNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('addr', 'Addr', 'VARCHAR', false, 255, null);
        $this->addColumn('addr_mail', 'AddrMail', 'VARCHAR', false, 200, null);
        $this->addColumn('addr_billing', 'AddrBilling', 'VARCHAR', false, 200, null);
        $this->addColumn('addr_email', 'AddrEmail', 'VARCHAR', false, 60, null);
        $this->addColumn('phone_main', 'PhoneMain', 'VARCHAR', false, 35, null);
        $this->addColumn('phone_aux', 'PhoneAux', 'VARCHAR', false, 35, null);
        $this->addColumn('fax_main', 'FaxMain', 'VARCHAR', false, 35, null);
        $this->addColumn('fax_aux', 'FaxAux', 'VARCHAR', false, 35, null);
        $this->addColumn('contact_person', 'ContactPerson', 'VARCHAR', false, 60, null);
        $this->addColumn('contact_phone', 'ContactPhone', 'VARCHAR', false, 35, null);
        $this->addColumn('contact_fax', 'ContactFax', 'VARCHAR', false, 35, null);
        $this->addColumn('contact_email', 'ContactEmail', 'VARCHAR', false, 60, null);
        $this->addColumn('use_frequency', 'UseFrequency', 'BIGINT', true, null, 0);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FirmId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FirmId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FirmId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FirmId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FirmId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FirmId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('FirmId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareInsuranceFirmTableMap::CLASS_DEFAULT : CareInsuranceFirmTableMap::OM_CLASS;
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
     * @return array           (CareInsuranceFirm object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareInsuranceFirmTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareInsuranceFirmTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareInsuranceFirmTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareInsuranceFirmTableMap::OM_CLASS;
            /** @var CareInsuranceFirm $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareInsuranceFirmTableMap::addInstanceToPool($obj, $key);
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
            $key = CareInsuranceFirmTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareInsuranceFirmTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareInsuranceFirm $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareInsuranceFirmTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_FIRM_ID);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_NAME);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_ISO_COUNTRY_ID);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_SUB_AREA);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_TYPE_NR);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_ADDR);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_ADDR_MAIL);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_ADDR_BILLING);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_ADDR_EMAIL);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_PHONE_MAIN);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_PHONE_AUX);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_FAX_MAIN);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_FAX_AUX);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_CONTACT_PERSON);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_CONTACT_PHONE);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_CONTACT_FAX);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_CONTACT_EMAIL);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_USE_FREQUENCY);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareInsuranceFirmTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.firm_id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.iso_country_id');
            $criteria->addSelectColumn($alias . '.sub_area');
            $criteria->addSelectColumn($alias . '.type_nr');
            $criteria->addSelectColumn($alias . '.addr');
            $criteria->addSelectColumn($alias . '.addr_mail');
            $criteria->addSelectColumn($alias . '.addr_billing');
            $criteria->addSelectColumn($alias . '.addr_email');
            $criteria->addSelectColumn($alias . '.phone_main');
            $criteria->addSelectColumn($alias . '.phone_aux');
            $criteria->addSelectColumn($alias . '.fax_main');
            $criteria->addSelectColumn($alias . '.fax_aux');
            $criteria->addSelectColumn($alias . '.contact_person');
            $criteria->addSelectColumn($alias . '.contact_phone');
            $criteria->addSelectColumn($alias . '.contact_fax');
            $criteria->addSelectColumn($alias . '.contact_email');
            $criteria->addSelectColumn($alias . '.use_frequency');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareInsuranceFirmTableMap::DATABASE_NAME)->getTable(CareInsuranceFirmTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareInsuranceFirmTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareInsuranceFirmTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareInsuranceFirmTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareInsuranceFirm or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareInsuranceFirm object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareInsuranceFirmTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareInsuranceFirm) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareInsuranceFirmTableMap::DATABASE_NAME);
            $criteria->add(CareInsuranceFirmTableMap::COL_FIRM_ID, (array) $values, Criteria::IN);
        }

        $query = CareInsuranceFirmQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareInsuranceFirmTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareInsuranceFirmTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_insurance_firm table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareInsuranceFirmQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareInsuranceFirm or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareInsuranceFirm object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareInsuranceFirmTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareInsuranceFirm object
        }


        // Set the correct dbName
        $query = CareInsuranceFirmQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareInsuranceFirmTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareInsuranceFirmTableMap::buildTableMap();
