<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\Locations;
use CareMd\CareMd\LocationsQuery;
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
 * This class defines the structure of the 'locations' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class LocationsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.LocationsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'locations';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\Locations';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.Locations';

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
     * the column name for the loccode field
     */
    const COL_LOCCODE = 'locations.loccode';

    /**
     * the column name for the locationname field
     */
    const COL_LOCATIONNAME = 'locations.locationname';

    /**
     * the column name for the deladd1 field
     */
    const COL_DELADD1 = 'locations.deladd1';

    /**
     * the column name for the deladd2 field
     */
    const COL_DELADD2 = 'locations.deladd2';

    /**
     * the column name for the deladd3 field
     */
    const COL_DELADD3 = 'locations.deladd3';

    /**
     * the column name for the deladd4 field
     */
    const COL_DELADD4 = 'locations.deladd4';

    /**
     * the column name for the deladd5 field
     */
    const COL_DELADD5 = 'locations.deladd5';

    /**
     * the column name for the deladd6 field
     */
    const COL_DELADD6 = 'locations.deladd6';

    /**
     * the column name for the tel field
     */
    const COL_TEL = 'locations.tel';

    /**
     * the column name for the fax field
     */
    const COL_FAX = 'locations.fax';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'locations.email';

    /**
     * the column name for the contact field
     */
    const COL_CONTACT = 'locations.contact';

    /**
     * the column name for the taxprovinceid field
     */
    const COL_TAXPROVINCEID = 'locations.taxprovinceid';

    /**
     * the column name for the cashsalecustomer field
     */
    const COL_CASHSALECUSTOMER = 'locations.cashsalecustomer';

    /**
     * the column name for the cashsalebranch field
     */
    const COL_CASHSALEBRANCH = 'locations.cashsalebranch';

    /**
     * the column name for the managed field
     */
    const COL_MANAGED = 'locations.managed';

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
        self::TYPE_PHPNAME       => array('Loccode', 'Locationname', 'Deladd1', 'Deladd2', 'Deladd3', 'Deladd4', 'Deladd5', 'Deladd6', 'Tel', 'Fax', 'Email', 'Contact', 'Taxprovinceid', 'Cashsalecustomer', 'Cashsalebranch', 'Managed', ),
        self::TYPE_CAMELNAME     => array('loccode', 'locationname', 'deladd1', 'deladd2', 'deladd3', 'deladd4', 'deladd5', 'deladd6', 'tel', 'fax', 'email', 'contact', 'taxprovinceid', 'cashsalecustomer', 'cashsalebranch', 'managed', ),
        self::TYPE_COLNAME       => array(LocationsTableMap::COL_LOCCODE, LocationsTableMap::COL_LOCATIONNAME, LocationsTableMap::COL_DELADD1, LocationsTableMap::COL_DELADD2, LocationsTableMap::COL_DELADD3, LocationsTableMap::COL_DELADD4, LocationsTableMap::COL_DELADD5, LocationsTableMap::COL_DELADD6, LocationsTableMap::COL_TEL, LocationsTableMap::COL_FAX, LocationsTableMap::COL_EMAIL, LocationsTableMap::COL_CONTACT, LocationsTableMap::COL_TAXPROVINCEID, LocationsTableMap::COL_CASHSALECUSTOMER, LocationsTableMap::COL_CASHSALEBRANCH, LocationsTableMap::COL_MANAGED, ),
        self::TYPE_FIELDNAME     => array('loccode', 'locationname', 'deladd1', 'deladd2', 'deladd3', 'deladd4', 'deladd5', 'deladd6', 'tel', 'fax', 'email', 'contact', 'taxprovinceid', 'cashsalecustomer', 'cashsalebranch', 'managed', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Loccode' => 0, 'Locationname' => 1, 'Deladd1' => 2, 'Deladd2' => 3, 'Deladd3' => 4, 'Deladd4' => 5, 'Deladd5' => 6, 'Deladd6' => 7, 'Tel' => 8, 'Fax' => 9, 'Email' => 10, 'Contact' => 11, 'Taxprovinceid' => 12, 'Cashsalecustomer' => 13, 'Cashsalebranch' => 14, 'Managed' => 15, ),
        self::TYPE_CAMELNAME     => array('loccode' => 0, 'locationname' => 1, 'deladd1' => 2, 'deladd2' => 3, 'deladd3' => 4, 'deladd4' => 5, 'deladd5' => 6, 'deladd6' => 7, 'tel' => 8, 'fax' => 9, 'email' => 10, 'contact' => 11, 'taxprovinceid' => 12, 'cashsalecustomer' => 13, 'cashsalebranch' => 14, 'managed' => 15, ),
        self::TYPE_COLNAME       => array(LocationsTableMap::COL_LOCCODE => 0, LocationsTableMap::COL_LOCATIONNAME => 1, LocationsTableMap::COL_DELADD1 => 2, LocationsTableMap::COL_DELADD2 => 3, LocationsTableMap::COL_DELADD3 => 4, LocationsTableMap::COL_DELADD4 => 5, LocationsTableMap::COL_DELADD5 => 6, LocationsTableMap::COL_DELADD6 => 7, LocationsTableMap::COL_TEL => 8, LocationsTableMap::COL_FAX => 9, LocationsTableMap::COL_EMAIL => 10, LocationsTableMap::COL_CONTACT => 11, LocationsTableMap::COL_TAXPROVINCEID => 12, LocationsTableMap::COL_CASHSALECUSTOMER => 13, LocationsTableMap::COL_CASHSALEBRANCH => 14, LocationsTableMap::COL_MANAGED => 15, ),
        self::TYPE_FIELDNAME     => array('loccode' => 0, 'locationname' => 1, 'deladd1' => 2, 'deladd2' => 3, 'deladd3' => 4, 'deladd4' => 5, 'deladd5' => 6, 'deladd6' => 7, 'tel' => 8, 'fax' => 9, 'email' => 10, 'contact' => 11, 'taxprovinceid' => 12, 'cashsalecustomer' => 13, 'cashsalebranch' => 14, 'managed' => 15, ),
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
        $this->setName('locations');
        $this->setPhpName('Locations');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\Locations');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('loccode', 'Loccode', 'VARCHAR', true, 5, '');
        $this->addColumn('locationname', 'Locationname', 'VARCHAR', true, 50, '');
        $this->addColumn('deladd1', 'Deladd1', 'VARCHAR', true, 40, '');
        $this->addColumn('deladd2', 'Deladd2', 'VARCHAR', true, 40, '');
        $this->addColumn('deladd3', 'Deladd3', 'VARCHAR', true, 40, '');
        $this->addColumn('deladd4', 'Deladd4', 'VARCHAR', true, 40, '');
        $this->addColumn('deladd5', 'Deladd5', 'VARCHAR', true, 20, '');
        $this->addColumn('deladd6', 'Deladd6', 'VARCHAR', true, 15, '');
        $this->addColumn('tel', 'Tel', 'VARCHAR', true, 30, '');
        $this->addColumn('fax', 'Fax', 'VARCHAR', true, 30, '');
        $this->addColumn('email', 'Email', 'VARCHAR', true, 55, '');
        $this->addColumn('contact', 'Contact', 'VARCHAR', true, 30, '');
        $this->addColumn('taxprovinceid', 'Taxprovinceid', 'TINYINT', true, null, 1);
        $this->addColumn('cashsalecustomer', 'Cashsalecustomer', 'VARCHAR', true, 10, '');
        $this->addColumn('cashsalebranch', 'Cashsalebranch', 'VARCHAR', true, 10, '');
        $this->addColumn('managed', 'Managed', 'INTEGER', false, null, 0);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Loccode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Loccode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Loccode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Loccode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Loccode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Loccode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Loccode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? LocationsTableMap::CLASS_DEFAULT : LocationsTableMap::OM_CLASS;
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
     * @return array           (Locations object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = LocationsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = LocationsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + LocationsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LocationsTableMap::OM_CLASS;
            /** @var Locations $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            LocationsTableMap::addInstanceToPool($obj, $key);
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
            $key = LocationsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = LocationsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Locations $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LocationsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(LocationsTableMap::COL_LOCCODE);
            $criteria->addSelectColumn(LocationsTableMap::COL_LOCATIONNAME);
            $criteria->addSelectColumn(LocationsTableMap::COL_DELADD1);
            $criteria->addSelectColumn(LocationsTableMap::COL_DELADD2);
            $criteria->addSelectColumn(LocationsTableMap::COL_DELADD3);
            $criteria->addSelectColumn(LocationsTableMap::COL_DELADD4);
            $criteria->addSelectColumn(LocationsTableMap::COL_DELADD5);
            $criteria->addSelectColumn(LocationsTableMap::COL_DELADD6);
            $criteria->addSelectColumn(LocationsTableMap::COL_TEL);
            $criteria->addSelectColumn(LocationsTableMap::COL_FAX);
            $criteria->addSelectColumn(LocationsTableMap::COL_EMAIL);
            $criteria->addSelectColumn(LocationsTableMap::COL_CONTACT);
            $criteria->addSelectColumn(LocationsTableMap::COL_TAXPROVINCEID);
            $criteria->addSelectColumn(LocationsTableMap::COL_CASHSALECUSTOMER);
            $criteria->addSelectColumn(LocationsTableMap::COL_CASHSALEBRANCH);
            $criteria->addSelectColumn(LocationsTableMap::COL_MANAGED);
        } else {
            $criteria->addSelectColumn($alias . '.loccode');
            $criteria->addSelectColumn($alias . '.locationname');
            $criteria->addSelectColumn($alias . '.deladd1');
            $criteria->addSelectColumn($alias . '.deladd2');
            $criteria->addSelectColumn($alias . '.deladd3');
            $criteria->addSelectColumn($alias . '.deladd4');
            $criteria->addSelectColumn($alias . '.deladd5');
            $criteria->addSelectColumn($alias . '.deladd6');
            $criteria->addSelectColumn($alias . '.tel');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.contact');
            $criteria->addSelectColumn($alias . '.taxprovinceid');
            $criteria->addSelectColumn($alias . '.cashsalecustomer');
            $criteria->addSelectColumn($alias . '.cashsalebranch');
            $criteria->addSelectColumn($alias . '.managed');
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
        return Propel::getServiceContainer()->getDatabaseMap(LocationsTableMap::DATABASE_NAME)->getTable(LocationsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(LocationsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(LocationsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new LocationsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Locations or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Locations object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(LocationsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\Locations) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LocationsTableMap::DATABASE_NAME);
            $criteria->add(LocationsTableMap::COL_LOCCODE, (array) $values, Criteria::IN);
        }

        $query = LocationsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            LocationsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                LocationsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the locations table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return LocationsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Locations or Criteria object.
     *
     * @param mixed               $criteria Criteria or Locations object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(LocationsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Locations object
        }


        // Set the correct dbName
        $query = LocationsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // LocationsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
LocationsTableMap::buildTableMap();
