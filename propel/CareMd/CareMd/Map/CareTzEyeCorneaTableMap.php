<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzEyeCornea;
use CareMd\CareMd\CareTzEyeCorneaQuery;
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
 * This class defines the structure of the 'care_tz_eye_cornea' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzEyeCorneaTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzEyeCorneaTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_eye_cornea';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzEyeCornea';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzEyeCornea';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 18;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 18;

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_tz_eye_cornea.id';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_tz_eye_cornea.pid';

    /**
     * the column name for the right_eye_test1 field
     */
    const COL_RIGHT_EYE_TEST1 = 'care_tz_eye_cornea.right_eye_test1';

    /**
     * the column name for the right_eye_test2 field
     */
    const COL_RIGHT_EYE_TEST2 = 'care_tz_eye_cornea.right_eye_test2';

    /**
     * the column name for the right_eye_test3 field
     */
    const COL_RIGHT_EYE_TEST3 = 'care_tz_eye_cornea.right_eye_test3';

    /**
     * the column name for the right_eye_test4 field
     */
    const COL_RIGHT_EYE_TEST4 = 'care_tz_eye_cornea.right_eye_test4';

    /**
     * the column name for the right_eye_test5 field
     */
    const COL_RIGHT_EYE_TEST5 = 'care_tz_eye_cornea.right_eye_test5';

    /**
     * the column name for the right_eye_test6 field
     */
    const COL_RIGHT_EYE_TEST6 = 'care_tz_eye_cornea.right_eye_test6';

    /**
     * the column name for the right_eye_test7 field
     */
    const COL_RIGHT_EYE_TEST7 = 'care_tz_eye_cornea.right_eye_test7';

    /**
     * the column name for the left_eye_test1 field
     */
    const COL_LEFT_EYE_TEST1 = 'care_tz_eye_cornea.left_eye_test1';

    /**
     * the column name for the left_eye_test2 field
     */
    const COL_LEFT_EYE_TEST2 = 'care_tz_eye_cornea.left_eye_test2';

    /**
     * the column name for the left_eye_test3 field
     */
    const COL_LEFT_EYE_TEST3 = 'care_tz_eye_cornea.left_eye_test3';

    /**
     * the column name for the left_eye_test4 field
     */
    const COL_LEFT_EYE_TEST4 = 'care_tz_eye_cornea.left_eye_test4';

    /**
     * the column name for the left_eye_test5 field
     */
    const COL_LEFT_EYE_TEST5 = 'care_tz_eye_cornea.left_eye_test5';

    /**
     * the column name for the left_eye_test6 field
     */
    const COL_LEFT_EYE_TEST6 = 'care_tz_eye_cornea.left_eye_test6';

    /**
     * the column name for the left_eye_test7 field
     */
    const COL_LEFT_EYE_TEST7 = 'care_tz_eye_cornea.left_eye_test7';

    /**
     * the column name for the Signature field
     */
    const COL_SIGNATURE = 'care_tz_eye_cornea.Signature';

    /**
     * the column name for the Examination_date field
     */
    const COL_EXAMINATION_DATE = 'care_tz_eye_cornea.Examination_date';

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
        self::TYPE_PHPNAME       => array('Id', 'Pid', 'RightEyeTest1', 'RightEyeTest2', 'RightEyeTest3', 'RightEyeTest4', 'RightEyeTest5', 'RightEyeTest6', 'RightEyeTest7', 'LeftEyeTest1', 'LeftEyeTest2', 'LeftEyeTest3', 'LeftEyeTest4', 'LeftEyeTest5', 'LeftEyeTest6', 'LeftEyeTest7', 'Signature', 'ExaminationDate', ),
        self::TYPE_CAMELNAME     => array('id', 'pid', 'rightEyeTest1', 'rightEyeTest2', 'rightEyeTest3', 'rightEyeTest4', 'rightEyeTest5', 'rightEyeTest6', 'rightEyeTest7', 'leftEyeTest1', 'leftEyeTest2', 'leftEyeTest3', 'leftEyeTest4', 'leftEyeTest5', 'leftEyeTest6', 'leftEyeTest7', 'signature', 'examinationDate', ),
        self::TYPE_COLNAME       => array(CareTzEyeCorneaTableMap::COL_ID, CareTzEyeCorneaTableMap::COL_PID, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST1, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST2, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST3, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST4, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST5, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST6, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST7, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST1, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST2, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST3, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST4, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST5, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST6, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST7, CareTzEyeCorneaTableMap::COL_SIGNATURE, CareTzEyeCorneaTableMap::COL_EXAMINATION_DATE, ),
        self::TYPE_FIELDNAME     => array('id', 'pid', 'right_eye_test1', 'right_eye_test2', 'right_eye_test3', 'right_eye_test4', 'right_eye_test5', 'right_eye_test6', 'right_eye_test7', 'left_eye_test1', 'left_eye_test2', 'left_eye_test3', 'left_eye_test4', 'left_eye_test5', 'left_eye_test6', 'left_eye_test7', 'Signature', 'Examination_date', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Pid' => 1, 'RightEyeTest1' => 2, 'RightEyeTest2' => 3, 'RightEyeTest3' => 4, 'RightEyeTest4' => 5, 'RightEyeTest5' => 6, 'RightEyeTest6' => 7, 'RightEyeTest7' => 8, 'LeftEyeTest1' => 9, 'LeftEyeTest2' => 10, 'LeftEyeTest3' => 11, 'LeftEyeTest4' => 12, 'LeftEyeTest5' => 13, 'LeftEyeTest6' => 14, 'LeftEyeTest7' => 15, 'Signature' => 16, 'ExaminationDate' => 17, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'pid' => 1, 'rightEyeTest1' => 2, 'rightEyeTest2' => 3, 'rightEyeTest3' => 4, 'rightEyeTest4' => 5, 'rightEyeTest5' => 6, 'rightEyeTest6' => 7, 'rightEyeTest7' => 8, 'leftEyeTest1' => 9, 'leftEyeTest2' => 10, 'leftEyeTest3' => 11, 'leftEyeTest4' => 12, 'leftEyeTest5' => 13, 'leftEyeTest6' => 14, 'leftEyeTest7' => 15, 'signature' => 16, 'examinationDate' => 17, ),
        self::TYPE_COLNAME       => array(CareTzEyeCorneaTableMap::COL_ID => 0, CareTzEyeCorneaTableMap::COL_PID => 1, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST1 => 2, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST2 => 3, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST3 => 4, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST4 => 5, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST5 => 6, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST6 => 7, CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST7 => 8, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST1 => 9, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST2 => 10, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST3 => 11, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST4 => 12, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST5 => 13, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST6 => 14, CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST7 => 15, CareTzEyeCorneaTableMap::COL_SIGNATURE => 16, CareTzEyeCorneaTableMap::COL_EXAMINATION_DATE => 17, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'pid' => 1, 'right_eye_test1' => 2, 'right_eye_test2' => 3, 'right_eye_test3' => 4, 'right_eye_test4' => 5, 'right_eye_test5' => 6, 'right_eye_test6' => 7, 'right_eye_test7' => 8, 'left_eye_test1' => 9, 'left_eye_test2' => 10, 'left_eye_test3' => 11, 'left_eye_test4' => 12, 'left_eye_test5' => 13, 'left_eye_test6' => 14, 'left_eye_test7' => 15, 'Signature' => 16, 'Examination_date' => 17, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
        $this->setName('care_tz_eye_cornea');
        $this->setPhpName('CareTzEyeCornea');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzEyeCornea');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('pid', 'Pid', 'INTEGER', false, 30, null);
        $this->addColumn('right_eye_test1', 'RightEyeTest1', 'VARCHAR', false, 100, null);
        $this->addColumn('right_eye_test2', 'RightEyeTest2', 'VARCHAR', false, 100, null);
        $this->addColumn('right_eye_test3', 'RightEyeTest3', 'VARCHAR', false, 100, null);
        $this->addColumn('right_eye_test4', 'RightEyeTest4', 'VARCHAR', false, 100, null);
        $this->addColumn('right_eye_test5', 'RightEyeTest5', 'VARCHAR', false, 100, null);
        $this->addColumn('right_eye_test6', 'RightEyeTest6', 'VARCHAR', false, 100, null);
        $this->addColumn('right_eye_test7', 'RightEyeTest7', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test1', 'LeftEyeTest1', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test2', 'LeftEyeTest2', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test3', 'LeftEyeTest3', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test4', 'LeftEyeTest4', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test5', 'LeftEyeTest5', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test6', 'LeftEyeTest6', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test7', 'LeftEyeTest7', 'VARCHAR', false, 100, null);
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
        return $withPrefix ? CareTzEyeCorneaTableMap::CLASS_DEFAULT : CareTzEyeCorneaTableMap::OM_CLASS;
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
     * @return array           (CareTzEyeCornea object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzEyeCorneaTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzEyeCorneaTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzEyeCorneaTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzEyeCorneaTableMap::OM_CLASS;
            /** @var CareTzEyeCornea $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzEyeCorneaTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzEyeCorneaTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzEyeCorneaTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzEyeCornea $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzEyeCorneaTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_PID);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST1);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST2);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST3);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST4);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST5);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST6);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_RIGHT_EYE_TEST7);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST1);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST2);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST3);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST4);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST5);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST6);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_LEFT_EYE_TEST7);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_SIGNATURE);
            $criteria->addSelectColumn(CareTzEyeCorneaTableMap::COL_EXAMINATION_DATE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.right_eye_test1');
            $criteria->addSelectColumn($alias . '.right_eye_test2');
            $criteria->addSelectColumn($alias . '.right_eye_test3');
            $criteria->addSelectColumn($alias . '.right_eye_test4');
            $criteria->addSelectColumn($alias . '.right_eye_test5');
            $criteria->addSelectColumn($alias . '.right_eye_test6');
            $criteria->addSelectColumn($alias . '.right_eye_test7');
            $criteria->addSelectColumn($alias . '.left_eye_test1');
            $criteria->addSelectColumn($alias . '.left_eye_test2');
            $criteria->addSelectColumn($alias . '.left_eye_test3');
            $criteria->addSelectColumn($alias . '.left_eye_test4');
            $criteria->addSelectColumn($alias . '.left_eye_test5');
            $criteria->addSelectColumn($alias . '.left_eye_test6');
            $criteria->addSelectColumn($alias . '.left_eye_test7');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzEyeCorneaTableMap::DATABASE_NAME)->getTable(CareTzEyeCorneaTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzEyeCorneaTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzEyeCorneaTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzEyeCorneaTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzEyeCornea or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzEyeCornea object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeCorneaTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzEyeCornea) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzEyeCorneaTableMap::DATABASE_NAME);
            $criteria->add(CareTzEyeCorneaTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzEyeCorneaQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzEyeCorneaTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzEyeCorneaTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_eye_cornea table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzEyeCorneaQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzEyeCornea or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzEyeCornea object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeCorneaTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzEyeCornea object
        }

        if ($criteria->containsKey(CareTzEyeCorneaTableMap::COL_ID) && $criteria->keyContainsValue(CareTzEyeCorneaTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzEyeCorneaTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzEyeCorneaQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzEyeCorneaTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzEyeCorneaTableMap::buildTableMap();
