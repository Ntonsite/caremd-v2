<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzInsurance;
use CareMd\CareMd\CareTzInsuranceQuery;
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
 * This class defines the structure of the 'care_tz_insurance' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzInsuranceTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzInsuranceTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_insurance';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzInsurance';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzInsurance';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 15;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 15;

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_tz_insurance.id';

    /**
     * the column name for the parent field
     */
    const COL_PARENT = 'care_tz_insurance.parent';

    /**
     * the column name for the company_parent field
     */
    const COL_COMPANY_PARENT = 'care_tz_insurance.company_parent';

    /**
     * the column name for the company_id field
     */
    const COL_COMPANY_ID = 'care_tz_insurance.company_id';

    /**
     * the column name for the PID field
     */
    const COL_PID = 'care_tz_insurance.PID';

    /**
     * the column name for the ceiling field
     */
    const COL_CEILING = 'care_tz_insurance.ceiling';

    /**
     * the column name for the ceiling_startup_subtraction field
     */
    const COL_CEILING_STARTUP_SUBTRACTION = 'care_tz_insurance.ceiling_startup_subtraction';

    /**
     * the column name for the plan field
     */
    const COL_PLAN = 'care_tz_insurance.plan';

    /**
     * the column name for the start_date field
     */
    const COL_START_DATE = 'care_tz_insurance.start_date';

    /**
     * the column name for the end_date field
     */
    const COL_END_DATE = 'care_tz_insurance.end_date';

    /**
     * the column name for the timestamp field
     */
    const COL_TIMESTAMP = 'care_tz_insurance.timestamp';

    /**
     * the column name for the cancel_flag field
     */
    const COL_CANCEL_FLAG = 'care_tz_insurance.cancel_flag';

    /**
     * the column name for the paid_flag field
     */
    const COL_PAID_FLAG = 'care_tz_insurance.paid_flag';

    /**
     * the column name for the gets_company_credit field
     */
    const COL_GETS_COMPANY_CREDIT = 'care_tz_insurance.gets_company_credit';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tz_insurance.modify_id';

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
        self::TYPE_PHPNAME       => array('Id', 'Parent', 'CompanyParent', 'CompanyId', 'Pid', 'Ceiling', 'CeilingStartupSubtraction', 'Plan', 'StartDate', 'EndDate', 'Timestamp', 'CancelFlag', 'PaidFlag', 'GetsCompanyCredit', 'ModifyId', ),
        self::TYPE_CAMELNAME     => array('id', 'parent', 'companyParent', 'companyId', 'pid', 'ceiling', 'ceilingStartupSubtraction', 'plan', 'startDate', 'endDate', 'timestamp', 'cancelFlag', 'paidFlag', 'getsCompanyCredit', 'modifyId', ),
        self::TYPE_COLNAME       => array(CareTzInsuranceTableMap::COL_ID, CareTzInsuranceTableMap::COL_PARENT, CareTzInsuranceTableMap::COL_COMPANY_PARENT, CareTzInsuranceTableMap::COL_COMPANY_ID, CareTzInsuranceTableMap::COL_PID, CareTzInsuranceTableMap::COL_CEILING, CareTzInsuranceTableMap::COL_CEILING_STARTUP_SUBTRACTION, CareTzInsuranceTableMap::COL_PLAN, CareTzInsuranceTableMap::COL_START_DATE, CareTzInsuranceTableMap::COL_END_DATE, CareTzInsuranceTableMap::COL_TIMESTAMP, CareTzInsuranceTableMap::COL_CANCEL_FLAG, CareTzInsuranceTableMap::COL_PAID_FLAG, CareTzInsuranceTableMap::COL_GETS_COMPANY_CREDIT, CareTzInsuranceTableMap::COL_MODIFY_ID, ),
        self::TYPE_FIELDNAME     => array('id', 'parent', 'company_parent', 'company_id', 'PID', 'ceiling', 'ceiling_startup_subtraction', 'plan', 'start_date', 'end_date', 'timestamp', 'cancel_flag', 'paid_flag', 'gets_company_credit', 'modify_id', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Parent' => 1, 'CompanyParent' => 2, 'CompanyId' => 3, 'Pid' => 4, 'Ceiling' => 5, 'CeilingStartupSubtraction' => 6, 'Plan' => 7, 'StartDate' => 8, 'EndDate' => 9, 'Timestamp' => 10, 'CancelFlag' => 11, 'PaidFlag' => 12, 'GetsCompanyCredit' => 13, 'ModifyId' => 14, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'parent' => 1, 'companyParent' => 2, 'companyId' => 3, 'pid' => 4, 'ceiling' => 5, 'ceilingStartupSubtraction' => 6, 'plan' => 7, 'startDate' => 8, 'endDate' => 9, 'timestamp' => 10, 'cancelFlag' => 11, 'paidFlag' => 12, 'getsCompanyCredit' => 13, 'modifyId' => 14, ),
        self::TYPE_COLNAME       => array(CareTzInsuranceTableMap::COL_ID => 0, CareTzInsuranceTableMap::COL_PARENT => 1, CareTzInsuranceTableMap::COL_COMPANY_PARENT => 2, CareTzInsuranceTableMap::COL_COMPANY_ID => 3, CareTzInsuranceTableMap::COL_PID => 4, CareTzInsuranceTableMap::COL_CEILING => 5, CareTzInsuranceTableMap::COL_CEILING_STARTUP_SUBTRACTION => 6, CareTzInsuranceTableMap::COL_PLAN => 7, CareTzInsuranceTableMap::COL_START_DATE => 8, CareTzInsuranceTableMap::COL_END_DATE => 9, CareTzInsuranceTableMap::COL_TIMESTAMP => 10, CareTzInsuranceTableMap::COL_CANCEL_FLAG => 11, CareTzInsuranceTableMap::COL_PAID_FLAG => 12, CareTzInsuranceTableMap::COL_GETS_COMPANY_CREDIT => 13, CareTzInsuranceTableMap::COL_MODIFY_ID => 14, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'parent' => 1, 'company_parent' => 2, 'company_id' => 3, 'PID' => 4, 'ceiling' => 5, 'ceiling_startup_subtraction' => 6, 'plan' => 7, 'start_date' => 8, 'end_date' => 9, 'timestamp' => 10, 'cancel_flag' => 11, 'paid_flag' => 12, 'gets_company_credit' => 13, 'modify_id' => 14, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $this->setName('care_tz_insurance');
        $this->setPhpName('CareTzInsurance');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzInsurance');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'BIGINT', true, null, null);
        $this->addColumn('parent', 'Parent', 'BIGINT', true, null, 0);
        $this->addColumn('company_parent', 'CompanyParent', 'INTEGER', true, null, null);
        $this->addColumn('company_id', 'CompanyId', 'BIGINT', true, null, 0);
        $this->addColumn('PID', 'Pid', 'BIGINT', true, null, 0);
        $this->addColumn('ceiling', 'Ceiling', 'VARCHAR', true, 255, '');
        $this->addColumn('ceiling_startup_subtraction', 'CeilingStartupSubtraction', 'VARCHAR', true, 20, '');
        $this->addColumn('plan', 'Plan', 'VARCHAR', true, 255, '');
        $this->addColumn('start_date', 'StartDate', 'BIGINT', true, null, 0);
        $this->addColumn('end_date', 'EndDate', 'BIGINT', true, null, 0);
        $this->addColumn('timestamp', 'Timestamp', 'BIGINT', true, null, null);
        $this->addColumn('cancel_flag', 'CancelFlag', 'TINYINT', true, null, 0);
        $this->addColumn('paid_flag', 'PaidFlag', 'TINYINT', true, null, 0);
        $this->addColumn('gets_company_credit', 'GetsCompanyCredit', 'TINYINT', true, null, 0);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 25, null);
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
        return $withPrefix ? CareTzInsuranceTableMap::CLASS_DEFAULT : CareTzInsuranceTableMap::OM_CLASS;
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
     * @return array           (CareTzInsurance object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzInsuranceTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzInsuranceTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzInsuranceTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzInsuranceTableMap::OM_CLASS;
            /** @var CareTzInsurance $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzInsuranceTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzInsuranceTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzInsuranceTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzInsurance $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzInsuranceTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_PARENT);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_COMPANY_PARENT);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_COMPANY_ID);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_PID);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_CEILING);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_CEILING_STARTUP_SUBTRACTION);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_PLAN);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_START_DATE);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_END_DATE);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_TIMESTAMP);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_CANCEL_FLAG);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_PAID_FLAG);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_GETS_COMPANY_CREDIT);
            $criteria->addSelectColumn(CareTzInsuranceTableMap::COL_MODIFY_ID);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.parent');
            $criteria->addSelectColumn($alias . '.company_parent');
            $criteria->addSelectColumn($alias . '.company_id');
            $criteria->addSelectColumn($alias . '.PID');
            $criteria->addSelectColumn($alias . '.ceiling');
            $criteria->addSelectColumn($alias . '.ceiling_startup_subtraction');
            $criteria->addSelectColumn($alias . '.plan');
            $criteria->addSelectColumn($alias . '.start_date');
            $criteria->addSelectColumn($alias . '.end_date');
            $criteria->addSelectColumn($alias . '.timestamp');
            $criteria->addSelectColumn($alias . '.cancel_flag');
            $criteria->addSelectColumn($alias . '.paid_flag');
            $criteria->addSelectColumn($alias . '.gets_company_credit');
            $criteria->addSelectColumn($alias . '.modify_id');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzInsuranceTableMap::DATABASE_NAME)->getTable(CareTzInsuranceTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzInsuranceTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzInsuranceTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzInsuranceTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzInsurance or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzInsurance object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsuranceTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzInsurance) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzInsuranceTableMap::DATABASE_NAME);
            $criteria->add(CareTzInsuranceTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzInsuranceQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzInsuranceTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzInsuranceTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_insurance table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzInsuranceQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzInsurance or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzInsurance object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsuranceTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzInsurance object
        }

        if ($criteria->containsKey(CareTzInsuranceTableMap::COL_ID) && $criteria->keyContainsValue(CareTzInsuranceTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzInsuranceTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzInsuranceQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzInsuranceTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzInsuranceTableMap::buildTableMap();
