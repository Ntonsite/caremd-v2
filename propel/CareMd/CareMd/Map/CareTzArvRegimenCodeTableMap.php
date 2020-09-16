<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzArvRegimenCode;
use CareMd\CareMd\CareTzArvRegimenCodeQuery;
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
 * This class defines the structure of the 'care_tz_arv_regimen_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzArvRegimenCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzArvRegimenCodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_arv_regimen_code';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzArvRegimenCode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzArvRegimenCode';

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
     * the column name for the care_tz_arv_regimen_code_id field
     */
    const COL_CARE_TZ_ARV_REGIMEN_CODE_ID = 'care_tz_arv_regimen_code.care_tz_arv_regimen_code_id';

    /**
     * the column name for the code field
     */
    const COL_CODE = 'care_tz_arv_regimen_code.code';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_tz_arv_regimen_code.description';

    /**
     * the column name for the parent field
     */
    const COL_PARENT = 'care_tz_arv_regimen_code.parent';

    /**
     * the column name for the other field
     */
    const COL_OTHER = 'care_tz_arv_regimen_code.other';

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
        self::TYPE_PHPNAME       => array('CareTzArvRegimenCodeId', 'Code', 'Description', 'Parent', 'Other', ),
        self::TYPE_CAMELNAME     => array('careTzArvRegimenCodeId', 'code', 'description', 'parent', 'other', ),
        self::TYPE_COLNAME       => array(CareTzArvRegimenCodeTableMap::COL_CARE_TZ_ARV_REGIMEN_CODE_ID, CareTzArvRegimenCodeTableMap::COL_CODE, CareTzArvRegimenCodeTableMap::COL_DESCRIPTION, CareTzArvRegimenCodeTableMap::COL_PARENT, CareTzArvRegimenCodeTableMap::COL_OTHER, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_regimen_code_id', 'code', 'description', 'parent', 'other', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('CareTzArvRegimenCodeId' => 0, 'Code' => 1, 'Description' => 2, 'Parent' => 3, 'Other' => 4, ),
        self::TYPE_CAMELNAME     => array('careTzArvRegimenCodeId' => 0, 'code' => 1, 'description' => 2, 'parent' => 3, 'other' => 4, ),
        self::TYPE_COLNAME       => array(CareTzArvRegimenCodeTableMap::COL_CARE_TZ_ARV_REGIMEN_CODE_ID => 0, CareTzArvRegimenCodeTableMap::COL_CODE => 1, CareTzArvRegimenCodeTableMap::COL_DESCRIPTION => 2, CareTzArvRegimenCodeTableMap::COL_PARENT => 3, CareTzArvRegimenCodeTableMap::COL_OTHER => 4, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_regimen_code_id' => 0, 'code' => 1, 'description' => 2, 'parent' => 3, 'other' => 4, ),
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
        $this->setName('care_tz_arv_regimen_code');
        $this->setPhpName('CareTzArvRegimenCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzArvRegimenCode');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('care_tz_arv_regimen_code_id', 'CareTzArvRegimenCodeId', 'BIGINT', true, null, null);
        $this->addColumn('code', 'Code', 'VARCHAR', false, 10, null);
        $this->addColumn('description', 'Description', 'VARCHAR', false, 60, null);
        $this->addColumn('parent', 'Parent', 'INTEGER', false, 10, null);
        $this->addColumn('other', 'Other', 'BOOLEAN', true, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegimenCodeId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegimenCodeId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegimenCodeId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegimenCodeId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegimenCodeId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegimenCodeId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('CareTzArvRegimenCodeId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzArvRegimenCodeTableMap::CLASS_DEFAULT : CareTzArvRegimenCodeTableMap::OM_CLASS;
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
     * @return array           (CareTzArvRegimenCode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzArvRegimenCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzArvRegimenCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzArvRegimenCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzArvRegimenCodeTableMap::OM_CLASS;
            /** @var CareTzArvRegimenCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzArvRegimenCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzArvRegimenCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzArvRegimenCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzArvRegimenCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzArvRegimenCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzArvRegimenCodeTableMap::COL_CARE_TZ_ARV_REGIMEN_CODE_ID);
            $criteria->addSelectColumn(CareTzArvRegimenCodeTableMap::COL_CODE);
            $criteria->addSelectColumn(CareTzArvRegimenCodeTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareTzArvRegimenCodeTableMap::COL_PARENT);
            $criteria->addSelectColumn(CareTzArvRegimenCodeTableMap::COL_OTHER);
        } else {
            $criteria->addSelectColumn($alias . '.care_tz_arv_regimen_code_id');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.parent');
            $criteria->addSelectColumn($alias . '.other');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzArvRegimenCodeTableMap::DATABASE_NAME)->getTable(CareTzArvRegimenCodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzArvRegimenCodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzArvRegimenCodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzArvRegimenCodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzArvRegimenCode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzArvRegimenCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegimenCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzArvRegimenCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzArvRegimenCodeTableMap::DATABASE_NAME);
            $criteria->add(CareTzArvRegimenCodeTableMap::COL_CARE_TZ_ARV_REGIMEN_CODE_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzArvRegimenCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzArvRegimenCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzArvRegimenCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_arv_regimen_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzArvRegimenCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzArvRegimenCode or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzArvRegimenCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegimenCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzArvRegimenCode object
        }

        if ($criteria->containsKey(CareTzArvRegimenCodeTableMap::COL_CARE_TZ_ARV_REGIMEN_CODE_ID) && $criteria->keyContainsValue(CareTzArvRegimenCodeTableMap::COL_CARE_TZ_ARV_REGIMEN_CODE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzArvRegimenCodeTableMap::COL_CARE_TZ_ARV_REGIMEN_CODE_ID.')');
        }


        // Set the correct dbName
        $query = CareTzArvRegimenCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzArvRegimenCodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzArvRegimenCodeTableMap::buildTableMap();
