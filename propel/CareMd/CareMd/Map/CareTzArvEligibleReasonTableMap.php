<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzArvEligibleReason;
use CareMd\CareMd\CareTzArvEligibleReasonQuery;
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
 * This class defines the structure of the 'care_tz_arv_eligible_reason' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzArvEligibleReasonTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzArvEligibleReasonTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_arv_eligible_reason';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzArvEligibleReason';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzArvEligibleReason';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 4;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 4;

    /**
     * the column name for the care_tz_arv_eligible_reason_id field
     */
    const COL_CARE_TZ_ARV_ELIGIBLE_REASON_ID = 'care_tz_arv_eligible_reason.care_tz_arv_eligible_reason_id';

    /**
     * the column name for the care_tz_arv_eligible_reason_code_id field
     */
    const COL_CARE_TZ_ARV_ELIGIBLE_REASON_CODE_ID = 'care_tz_arv_eligible_reason.care_tz_arv_eligible_reason_code_id';

    /**
     * the column name for the care_tz_arv_registration_id field
     */
    const COL_CARE_TZ_ARV_REGISTRATION_ID = 'care_tz_arv_eligible_reason.care_tz_arv_registration_id';

    /**
     * the column name for the care_tz_arv_lab_id field
     */
    const COL_CARE_TZ_ARV_LAB_ID = 'care_tz_arv_eligible_reason.care_tz_arv_lab_id';

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
        self::TYPE_PHPNAME       => array('CareTzArvEligibleReasonId', 'CareTzArvEligibleReasonCodeId', 'CareTzArvRegistrationId', 'CareTzArvLabId', ),
        self::TYPE_CAMELNAME     => array('careTzArvEligibleReasonId', 'careTzArvEligibleReasonCodeId', 'careTzArvRegistrationId', 'careTzArvLabId', ),
        self::TYPE_COLNAME       => array(CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_ELIGIBLE_REASON_ID, CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_ELIGIBLE_REASON_CODE_ID, CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_LAB_ID, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_eligible_reason_id', 'care_tz_arv_eligible_reason_code_id', 'care_tz_arv_registration_id', 'care_tz_arv_lab_id', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('CareTzArvEligibleReasonId' => 0, 'CareTzArvEligibleReasonCodeId' => 1, 'CareTzArvRegistrationId' => 2, 'CareTzArvLabId' => 3, ),
        self::TYPE_CAMELNAME     => array('careTzArvEligibleReasonId' => 0, 'careTzArvEligibleReasonCodeId' => 1, 'careTzArvRegistrationId' => 2, 'careTzArvLabId' => 3, ),
        self::TYPE_COLNAME       => array(CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_ELIGIBLE_REASON_ID => 0, CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_ELIGIBLE_REASON_CODE_ID => 1, CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID => 2, CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_LAB_ID => 3, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_eligible_reason_id' => 0, 'care_tz_arv_eligible_reason_code_id' => 1, 'care_tz_arv_registration_id' => 2, 'care_tz_arv_lab_id' => 3, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
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
        $this->setName('care_tz_arv_eligible_reason');
        $this->setPhpName('CareTzArvEligibleReason');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzArvEligibleReason');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('care_tz_arv_eligible_reason_id', 'CareTzArvEligibleReasonId', 'INTEGER', true, 10, null);
        $this->addColumn('care_tz_arv_eligible_reason_code_id', 'CareTzArvEligibleReasonCodeId', 'INTEGER', true, 10, null);
        $this->addColumn('care_tz_arv_registration_id', 'CareTzArvRegistrationId', 'BIGINT', true, null, null);
        $this->addColumn('care_tz_arv_lab_id', 'CareTzArvLabId', 'BIGINT', false, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEligibleReasonId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEligibleReasonId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEligibleReasonId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEligibleReasonId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEligibleReasonId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEligibleReasonId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('CareTzArvEligibleReasonId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzArvEligibleReasonTableMap::CLASS_DEFAULT : CareTzArvEligibleReasonTableMap::OM_CLASS;
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
     * @return array           (CareTzArvEligibleReason object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzArvEligibleReasonTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzArvEligibleReasonTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzArvEligibleReasonTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzArvEligibleReasonTableMap::OM_CLASS;
            /** @var CareTzArvEligibleReason $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzArvEligibleReasonTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzArvEligibleReasonTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzArvEligibleReasonTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzArvEligibleReason $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzArvEligibleReasonTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_ELIGIBLE_REASON_ID);
            $criteria->addSelectColumn(CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_ELIGIBLE_REASON_CODE_ID);
            $criteria->addSelectColumn(CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID);
            $criteria->addSelectColumn(CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_LAB_ID);
        } else {
            $criteria->addSelectColumn($alias . '.care_tz_arv_eligible_reason_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_eligible_reason_code_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_registration_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_lab_id');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzArvEligibleReasonTableMap::DATABASE_NAME)->getTable(CareTzArvEligibleReasonTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzArvEligibleReasonTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzArvEligibleReasonTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzArvEligibleReasonTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzArvEligibleReason or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzArvEligibleReason object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvEligibleReasonTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzArvEligibleReason) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzArvEligibleReasonTableMap::DATABASE_NAME);
            $criteria->add(CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_ELIGIBLE_REASON_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzArvEligibleReasonQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzArvEligibleReasonTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzArvEligibleReasonTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_arv_eligible_reason table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzArvEligibleReasonQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzArvEligibleReason or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzArvEligibleReason object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvEligibleReasonTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzArvEligibleReason object
        }

        if ($criteria->containsKey(CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_ELIGIBLE_REASON_ID) && $criteria->keyContainsValue(CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_ELIGIBLE_REASON_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzArvEligibleReasonTableMap::COL_CARE_TZ_ARV_ELIGIBLE_REASON_ID.')');
        }


        // Set the correct dbName
        $query = CareTzArvEligibleReasonQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzArvEligibleReasonTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzArvEligibleReasonTableMap::buildTableMap();
