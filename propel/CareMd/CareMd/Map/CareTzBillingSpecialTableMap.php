<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzBillingSpecial;
use CareMd\CareMd\CareTzBillingSpecialQuery;
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
 * This class defines the structure of the 'care_tz_billing_special' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzBillingSpecialTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzBillingSpecialTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_billing_special';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzBillingSpecial';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzBillingSpecial';

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
     * the column name for the id field
     */
    const COL_ID = 'care_tz_billing_special.id';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_tz_billing_special.encounter_nr';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'care_tz_billing_special.date';

    /**
     * the column name for the fullname field
     */
    const COL_FULLNAME = 'care_tz_billing_special.fullname';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_tz_billing_special.dept_nr';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'care_tz_billing_special.type';

    /**
     * the column name for the remain field
     */
    const COL_REMAIN = 'care_tz_billing_special.remain';

    /**
     * the column name for the total field
     */
    const COL_TOTAL = 'care_tz_billing_special.total';

    /**
     * the column name for the billno field
     */
    const COL_BILLNO = 'care_tz_billing_special.billno';

    /**
     * the column name for the paid field
     */
    const COL_PAID = 'care_tz_billing_special.paid';

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
        self::TYPE_PHPNAME       => array('Id', 'EncounterNr', 'Date', 'Fullname', 'DeptNr', 'Type', 'Remain', 'Total', 'Billno', 'Paid', ),
        self::TYPE_CAMELNAME     => array('id', 'encounterNr', 'date', 'fullname', 'deptNr', 'type', 'remain', 'total', 'billno', 'paid', ),
        self::TYPE_COLNAME       => array(CareTzBillingSpecialTableMap::COL_ID, CareTzBillingSpecialTableMap::COL_ENCOUNTER_NR, CareTzBillingSpecialTableMap::COL_DATE, CareTzBillingSpecialTableMap::COL_FULLNAME, CareTzBillingSpecialTableMap::COL_DEPT_NR, CareTzBillingSpecialTableMap::COL_TYPE, CareTzBillingSpecialTableMap::COL_REMAIN, CareTzBillingSpecialTableMap::COL_TOTAL, CareTzBillingSpecialTableMap::COL_BILLNO, CareTzBillingSpecialTableMap::COL_PAID, ),
        self::TYPE_FIELDNAME     => array('id', 'encounter_nr', 'date', 'fullname', 'dept_nr', 'type', 'remain', 'total', 'billno', 'paid', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'EncounterNr' => 1, 'Date' => 2, 'Fullname' => 3, 'DeptNr' => 4, 'Type' => 5, 'Remain' => 6, 'Total' => 7, 'Billno' => 8, 'Paid' => 9, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'encounterNr' => 1, 'date' => 2, 'fullname' => 3, 'deptNr' => 4, 'type' => 5, 'remain' => 6, 'total' => 7, 'billno' => 8, 'paid' => 9, ),
        self::TYPE_COLNAME       => array(CareTzBillingSpecialTableMap::COL_ID => 0, CareTzBillingSpecialTableMap::COL_ENCOUNTER_NR => 1, CareTzBillingSpecialTableMap::COL_DATE => 2, CareTzBillingSpecialTableMap::COL_FULLNAME => 3, CareTzBillingSpecialTableMap::COL_DEPT_NR => 4, CareTzBillingSpecialTableMap::COL_TYPE => 5, CareTzBillingSpecialTableMap::COL_REMAIN => 6, CareTzBillingSpecialTableMap::COL_TOTAL => 7, CareTzBillingSpecialTableMap::COL_BILLNO => 8, CareTzBillingSpecialTableMap::COL_PAID => 9, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'encounter_nr' => 1, 'date' => 2, 'fullname' => 3, 'dept_nr' => 4, 'type' => 5, 'remain' => 6, 'total' => 7, 'billno' => 8, 'paid' => 9, ),
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
        $this->setName('care_tz_billing_special');
        $this->setPhpName('CareTzBillingSpecial');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzBillingSpecial');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'VARCHAR', true, 100, '');
        $this->addColumn('date', 'Date', 'DATE', true, null, '0000-00-00');
        $this->addColumn('fullname', 'Fullname', 'VARCHAR', true, 100, '');
        $this->addColumn('dept_nr', 'DeptNr', 'VARCHAR', true, 100, '');
        $this->addColumn('type', 'Type', 'VARCHAR', true, 100, '');
        $this->addColumn('remain', 'Remain', 'DOUBLE', true, 11, 0);
        $this->addColumn('total', 'Total', 'DOUBLE', true, 11, 0);
        $this->addColumn('billno', 'Billno', 'BIGINT', true, null, 0);
        $this->addColumn('paid', 'Paid', 'DOUBLE', true, 11, 0);
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
        return (int) $row[
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
        return $withPrefix ? CareTzBillingSpecialTableMap::CLASS_DEFAULT : CareTzBillingSpecialTableMap::OM_CLASS;
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
     * @return array           (CareTzBillingSpecial object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzBillingSpecialTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzBillingSpecialTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzBillingSpecialTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzBillingSpecialTableMap::OM_CLASS;
            /** @var CareTzBillingSpecial $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzBillingSpecialTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzBillingSpecialTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzBillingSpecialTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzBillingSpecial $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzBillingSpecialTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzBillingSpecialTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzBillingSpecialTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareTzBillingSpecialTableMap::COL_DATE);
            $criteria->addSelectColumn(CareTzBillingSpecialTableMap::COL_FULLNAME);
            $criteria->addSelectColumn(CareTzBillingSpecialTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareTzBillingSpecialTableMap::COL_TYPE);
            $criteria->addSelectColumn(CareTzBillingSpecialTableMap::COL_REMAIN);
            $criteria->addSelectColumn(CareTzBillingSpecialTableMap::COL_TOTAL);
            $criteria->addSelectColumn(CareTzBillingSpecialTableMap::COL_BILLNO);
            $criteria->addSelectColumn(CareTzBillingSpecialTableMap::COL_PAID);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.fullname');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.remain');
            $criteria->addSelectColumn($alias . '.total');
            $criteria->addSelectColumn($alias . '.billno');
            $criteria->addSelectColumn($alias . '.paid');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzBillingSpecialTableMap::DATABASE_NAME)->getTable(CareTzBillingSpecialTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzBillingSpecialTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzBillingSpecialTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzBillingSpecialTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzBillingSpecial or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzBillingSpecial object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingSpecialTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzBillingSpecial) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzBillingSpecialTableMap::DATABASE_NAME);
            $criteria->add(CareTzBillingSpecialTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzBillingSpecialQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzBillingSpecialTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzBillingSpecialTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_billing_special table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzBillingSpecialQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzBillingSpecial or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzBillingSpecial object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingSpecialTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzBillingSpecial object
        }

        if ($criteria->containsKey(CareTzBillingSpecialTableMap::COL_ID) && $criteria->keyContainsValue(CareTzBillingSpecialTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzBillingSpecialTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzBillingSpecialQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzBillingSpecialTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzBillingSpecialTableMap::buildTableMap();
