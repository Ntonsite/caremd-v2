<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzArvLab;
use CareMd\CareMd\CareTzArvLabQuery;
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
 * This class defines the structure of the 'care_tz_arv_lab' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzArvLabTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzArvLabTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_arv_lab';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzArvLab';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzArvLab';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the care_tz_arv_lab_id field
     */
    const COL_CARE_TZ_ARV_LAB_ID = 'care_tz_arv_lab.care_tz_arv_lab_id';

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_tz_arv_lab.nr';

    /**
     * the column name for the care_tz_arv_visit_2_id field
     */
    const COL_CARE_TZ_ARV_VISIT_2_ID = 'care_tz_arv_lab.care_tz_arv_visit_2_id';

    /**
     * the column name for the value field
     */
    const COL_VALUE = 'care_tz_arv_lab.value';

    /**
     * the column name for the date_analyse field
     */
    const COL_DATE_ANALYSE = 'care_tz_arv_lab.date_analyse';

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
        self::TYPE_PHPNAME       => array('CareTzArvLabId', 'Nr', 'CareTzArvVisit2Id', 'Value', 'DateAnalyse', ),
        self::TYPE_CAMELNAME     => array('careTzArvLabId', 'nr', 'careTzArvVisit2Id', 'value', 'dateAnalyse', ),
        self::TYPE_COLNAME       => array(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID, CareTzArvLabTableMap::COL_NR, CareTzArvLabTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, CareTzArvLabTableMap::COL_VALUE, CareTzArvLabTableMap::COL_DATE_ANALYSE, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_lab_id', 'nr', 'care_tz_arv_visit_2_id', 'value', 'date_analyse', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('CareTzArvLabId' => 0, 'Nr' => 1, 'CareTzArvVisit2Id' => 2, 'Value' => 3, 'DateAnalyse' => 4, ),
        self::TYPE_CAMELNAME     => array('careTzArvLabId' => 0, 'nr' => 1, 'careTzArvVisit2Id' => 2, 'value' => 3, 'dateAnalyse' => 4, ),
        self::TYPE_COLNAME       => array(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID => 0, CareTzArvLabTableMap::COL_NR => 1, CareTzArvLabTableMap::COL_CARE_TZ_ARV_VISIT_2_ID => 2, CareTzArvLabTableMap::COL_VALUE => 3, CareTzArvLabTableMap::COL_DATE_ANALYSE => 4, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_lab_id' => 0, 'nr' => 1, 'care_tz_arv_visit_2_id' => 2, 'value' => 3, 'date_analyse' => 4, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
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
        $this->setName('care_tz_arv_lab');
        $this->setPhpName('CareTzArvLab');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzArvLab');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('care_tz_arv_lab_id', 'CareTzArvLabId', 'BIGINT', true, null, null);
        $this->addColumn('nr', 'Nr', 'BIGINT', true, null, null);
        $this->addColumn('care_tz_arv_visit_2_id', 'CareTzArvVisit2Id', 'BIGINT', false, null, null);
        $this->addColumn('value', 'Value', 'VARCHAR', false, 6, null);
        $this->addColumn('date_analyse', 'DateAnalyse', 'INTEGER', false, 10, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvLabId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvLabId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvLabId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvLabId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvLabId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvLabId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('CareTzArvLabId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzArvLabTableMap::CLASS_DEFAULT : CareTzArvLabTableMap::OM_CLASS;
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
     * @return array           (CareTzArvLab object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzArvLabTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzArvLabTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzArvLabTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzArvLabTableMap::OM_CLASS;
            /** @var CareTzArvLab $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzArvLabTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzArvLabTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzArvLabTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzArvLab $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzArvLabTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID);
            $criteria->addSelectColumn(CareTzArvLabTableMap::COL_NR);
            $criteria->addSelectColumn(CareTzArvLabTableMap::COL_CARE_TZ_ARV_VISIT_2_ID);
            $criteria->addSelectColumn(CareTzArvLabTableMap::COL_VALUE);
            $criteria->addSelectColumn(CareTzArvLabTableMap::COL_DATE_ANALYSE);
        } else {
            $criteria->addSelectColumn($alias . '.care_tz_arv_lab_id');
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.care_tz_arv_visit_2_id');
            $criteria->addSelectColumn($alias . '.value');
            $criteria->addSelectColumn($alias . '.date_analyse');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzArvLabTableMap::DATABASE_NAME)->getTable(CareTzArvLabTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzArvLabTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzArvLabTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzArvLabTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzArvLab or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzArvLab object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvLabTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzArvLab) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzArvLabTableMap::DATABASE_NAME);
            $criteria->add(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzArvLabQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzArvLabTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzArvLabTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_arv_lab table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzArvLabQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzArvLab or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzArvLab object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvLabTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzArvLab object
        }

        if ($criteria->containsKey(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID) && $criteria->keyContainsValue(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID.')');
        }


        // Set the correct dbName
        $query = CareTzArvLabQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzArvLabTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzArvLabTableMap::buildTableMap();
