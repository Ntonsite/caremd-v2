<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzEyeVisualacuity;
use CareMd\CareMd\CareTzEyeVisualacuityQuery;
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
 * This class defines the structure of the 'care_tz_eye_visualacuity' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzEyeVisualacuityTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzEyeVisualacuityTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_eye_visualacuity';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzEyeVisualacuity';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzEyeVisualacuity';

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
    const COL_ID = 'care_tz_eye_visualacuity.id';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_tz_eye_visualacuity.pid';

    /**
     * the column name for the right_eye_test1 field
     */
    const COL_RIGHT_EYE_TEST1 = 'care_tz_eye_visualacuity.right_eye_test1';

    /**
     * the column name for the right_eye_test2 field
     */
    const COL_RIGHT_EYE_TEST2 = 'care_tz_eye_visualacuity.right_eye_test2';

    /**
     * the column name for the right_eye_test3 field
     */
    const COL_RIGHT_EYE_TEST3 = 'care_tz_eye_visualacuity.right_eye_test3';

    /**
     * the column name for the left_eye_test1 field
     */
    const COL_LEFT_EYE_TEST1 = 'care_tz_eye_visualacuity.left_eye_test1';

    /**
     * the column name for the left_eye_test2 field
     */
    const COL_LEFT_EYE_TEST2 = 'care_tz_eye_visualacuity.left_eye_test2';

    /**
     * the column name for the left_eye_test3 field
     */
    const COL_LEFT_EYE_TEST3 = 'care_tz_eye_visualacuity.left_eye_test3';

    /**
     * the column name for the Signature field
     */
    const COL_SIGNATURE = 'care_tz_eye_visualacuity.Signature';

    /**
     * the column name for the Examination_date field
     */
    const COL_EXAMINATION_DATE = 'care_tz_eye_visualacuity.Examination_date';

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
        self::TYPE_PHPNAME       => array('Id', 'Pid', 'RightEyeTest1', 'RightEyeTest2', 'RightEyeTest3', 'LeftEyeTest1', 'LeftEyeTest2', 'LeftEyeTest3', 'Signature', 'ExaminationDate', ),
        self::TYPE_CAMELNAME     => array('id', 'pid', 'rightEyeTest1', 'rightEyeTest2', 'rightEyeTest3', 'leftEyeTest1', 'leftEyeTest2', 'leftEyeTest3', 'signature', 'examinationDate', ),
        self::TYPE_COLNAME       => array(CareTzEyeVisualacuityTableMap::COL_ID, CareTzEyeVisualacuityTableMap::COL_PID, CareTzEyeVisualacuityTableMap::COL_RIGHT_EYE_TEST1, CareTzEyeVisualacuityTableMap::COL_RIGHT_EYE_TEST2, CareTzEyeVisualacuityTableMap::COL_RIGHT_EYE_TEST3, CareTzEyeVisualacuityTableMap::COL_LEFT_EYE_TEST1, CareTzEyeVisualacuityTableMap::COL_LEFT_EYE_TEST2, CareTzEyeVisualacuityTableMap::COL_LEFT_EYE_TEST3, CareTzEyeVisualacuityTableMap::COL_SIGNATURE, CareTzEyeVisualacuityTableMap::COL_EXAMINATION_DATE, ),
        self::TYPE_FIELDNAME     => array('id', 'pid', 'right_eye_test1', 'right_eye_test2', 'right_eye_test3', 'left_eye_test1', 'left_eye_test2', 'left_eye_test3', 'Signature', 'Examination_date', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Pid' => 1, 'RightEyeTest1' => 2, 'RightEyeTest2' => 3, 'RightEyeTest3' => 4, 'LeftEyeTest1' => 5, 'LeftEyeTest2' => 6, 'LeftEyeTest3' => 7, 'Signature' => 8, 'ExaminationDate' => 9, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'pid' => 1, 'rightEyeTest1' => 2, 'rightEyeTest2' => 3, 'rightEyeTest3' => 4, 'leftEyeTest1' => 5, 'leftEyeTest2' => 6, 'leftEyeTest3' => 7, 'signature' => 8, 'examinationDate' => 9, ),
        self::TYPE_COLNAME       => array(CareTzEyeVisualacuityTableMap::COL_ID => 0, CareTzEyeVisualacuityTableMap::COL_PID => 1, CareTzEyeVisualacuityTableMap::COL_RIGHT_EYE_TEST1 => 2, CareTzEyeVisualacuityTableMap::COL_RIGHT_EYE_TEST2 => 3, CareTzEyeVisualacuityTableMap::COL_RIGHT_EYE_TEST3 => 4, CareTzEyeVisualacuityTableMap::COL_LEFT_EYE_TEST1 => 5, CareTzEyeVisualacuityTableMap::COL_LEFT_EYE_TEST2 => 6, CareTzEyeVisualacuityTableMap::COL_LEFT_EYE_TEST3 => 7, CareTzEyeVisualacuityTableMap::COL_SIGNATURE => 8, CareTzEyeVisualacuityTableMap::COL_EXAMINATION_DATE => 9, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'pid' => 1, 'right_eye_test1' => 2, 'right_eye_test2' => 3, 'right_eye_test3' => 4, 'left_eye_test1' => 5, 'left_eye_test2' => 6, 'left_eye_test3' => 7, 'Signature' => 8, 'Examination_date' => 9, ),
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
        $this->setName('care_tz_eye_visualacuity');
        $this->setPhpName('CareTzEyeVisualacuity');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzEyeVisualacuity');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('pid', 'Pid', 'INTEGER', false, 30, null);
        $this->addColumn('right_eye_test1', 'RightEyeTest1', 'VARCHAR', false, 100, null);
        $this->addColumn('right_eye_test2', 'RightEyeTest2', 'VARCHAR', false, 100, null);
        $this->addColumn('right_eye_test3', 'RightEyeTest3', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test1', 'LeftEyeTest1', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test2', 'LeftEyeTest2', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test3', 'LeftEyeTest3', 'VARCHAR', false, 100, null);
        $this->addColumn('Signature', 'Signature', 'VARCHAR', false, 100, null);
        $this->addColumn('Examination_date', 'ExaminationDate', 'DATE', false, null, null);
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
        return $withPrefix ? CareTzEyeVisualacuityTableMap::CLASS_DEFAULT : CareTzEyeVisualacuityTableMap::OM_CLASS;
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
     * @return array           (CareTzEyeVisualacuity object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzEyeVisualacuityTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzEyeVisualacuityTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzEyeVisualacuityTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzEyeVisualacuityTableMap::OM_CLASS;
            /** @var CareTzEyeVisualacuity $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzEyeVisualacuityTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzEyeVisualacuityTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzEyeVisualacuityTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzEyeVisualacuity $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzEyeVisualacuityTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzEyeVisualacuityTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzEyeVisualacuityTableMap::COL_PID);
            $criteria->addSelectColumn(CareTzEyeVisualacuityTableMap::COL_RIGHT_EYE_TEST1);
            $criteria->addSelectColumn(CareTzEyeVisualacuityTableMap::COL_RIGHT_EYE_TEST2);
            $criteria->addSelectColumn(CareTzEyeVisualacuityTableMap::COL_RIGHT_EYE_TEST3);
            $criteria->addSelectColumn(CareTzEyeVisualacuityTableMap::COL_LEFT_EYE_TEST1);
            $criteria->addSelectColumn(CareTzEyeVisualacuityTableMap::COL_LEFT_EYE_TEST2);
            $criteria->addSelectColumn(CareTzEyeVisualacuityTableMap::COL_LEFT_EYE_TEST3);
            $criteria->addSelectColumn(CareTzEyeVisualacuityTableMap::COL_SIGNATURE);
            $criteria->addSelectColumn(CareTzEyeVisualacuityTableMap::COL_EXAMINATION_DATE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.right_eye_test1');
            $criteria->addSelectColumn($alias . '.right_eye_test2');
            $criteria->addSelectColumn($alias . '.right_eye_test3');
            $criteria->addSelectColumn($alias . '.left_eye_test1');
            $criteria->addSelectColumn($alias . '.left_eye_test2');
            $criteria->addSelectColumn($alias . '.left_eye_test3');
            $criteria->addSelectColumn($alias . '.Signature');
            $criteria->addSelectColumn($alias . '.Examination_date');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzEyeVisualacuityTableMap::DATABASE_NAME)->getTable(CareTzEyeVisualacuityTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzEyeVisualacuityTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzEyeVisualacuityTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzEyeVisualacuityTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzEyeVisualacuity or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzEyeVisualacuity object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeVisualacuityTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzEyeVisualacuity) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzEyeVisualacuityTableMap::DATABASE_NAME);
            $criteria->add(CareTzEyeVisualacuityTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzEyeVisualacuityQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzEyeVisualacuityTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzEyeVisualacuityTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_eye_visualacuity table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzEyeVisualacuityQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzEyeVisualacuity or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzEyeVisualacuity object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeVisualacuityTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzEyeVisualacuity object
        }

        if ($criteria->containsKey(CareTzEyeVisualacuityTableMap::COL_ID) && $criteria->keyContainsValue(CareTzEyeVisualacuityTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzEyeVisualacuityTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzEyeVisualacuityQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzEyeVisualacuityTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzEyeVisualacuityTableMap::buildTableMap();
