<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzEyeLens;
use CareMd\CareMd\CareTzEyeLensQuery;
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
 * This class defines the structure of the 'care_tz_eye_lens' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzEyeLensTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzEyeLensTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_eye_lens';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzEyeLens';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzEyeLens';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 22;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 22;

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_tz_eye_lens.id';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_tz_eye_lens.pid';

    /**
     * the column name for the right_eye_test1 field
     */
    const COL_RIGHT_EYE_TEST1 = 'care_tz_eye_lens.right_eye_test1';

    /**
     * the column name for the right_eye_test2 field
     */
    const COL_RIGHT_EYE_TEST2 = 'care_tz_eye_lens.right_eye_test2';

    /**
     * the column name for the right_eye_test3 field
     */
    const COL_RIGHT_EYE_TEST3 = 'care_tz_eye_lens.right_eye_test3';

    /**
     * the column name for the right_eye_test4 field
     */
    const COL_RIGHT_EYE_TEST4 = 'care_tz_eye_lens.right_eye_test4';

    /**
     * the column name for the right_eye_test5 field
     */
    const COL_RIGHT_EYE_TEST5 = 'care_tz_eye_lens.right_eye_test5';

    /**
     * the column name for the right_eye_test6 field
     */
    const COL_RIGHT_EYE_TEST6 = 'care_tz_eye_lens.right_eye_test6';

    /**
     * the column name for the right_eye_test7 field
     */
    const COL_RIGHT_EYE_TEST7 = 'care_tz_eye_lens.right_eye_test7';

    /**
     * the column name for the right_eye_test8 field
     */
    const COL_RIGHT_EYE_TEST8 = 'care_tz_eye_lens.right_eye_test8';

    /**
     * the column name for the right_eye_test9 field
     */
    const COL_RIGHT_EYE_TEST9 = 'care_tz_eye_lens.right_eye_test9';

    /**
     * the column name for the left_eye_test1 field
     */
    const COL_LEFT_EYE_TEST1 = 'care_tz_eye_lens.left_eye_test1';

    /**
     * the column name for the left_eye_test2 field
     */
    const COL_LEFT_EYE_TEST2 = 'care_tz_eye_lens.left_eye_test2';

    /**
     * the column name for the left_eye_test3 field
     */
    const COL_LEFT_EYE_TEST3 = 'care_tz_eye_lens.left_eye_test3';

    /**
     * the column name for the left_eye_test4 field
     */
    const COL_LEFT_EYE_TEST4 = 'care_tz_eye_lens.left_eye_test4';

    /**
     * the column name for the left_eye_test5 field
     */
    const COL_LEFT_EYE_TEST5 = 'care_tz_eye_lens.left_eye_test5';

    /**
     * the column name for the left_eye_test6 field
     */
    const COL_LEFT_EYE_TEST6 = 'care_tz_eye_lens.left_eye_test6';

    /**
     * the column name for the left_eye_test7 field
     */
    const COL_LEFT_EYE_TEST7 = 'care_tz_eye_lens.left_eye_test7';

    /**
     * the column name for the left_eye_test8 field
     */
    const COL_LEFT_EYE_TEST8 = 'care_tz_eye_lens.left_eye_test8';

    /**
     * the column name for the left_eye_test9 field
     */
    const COL_LEFT_EYE_TEST9 = 'care_tz_eye_lens.left_eye_test9';

    /**
     * the column name for the Signature field
     */
    const COL_SIGNATURE = 'care_tz_eye_lens.Signature';

    /**
     * the column name for the Examination_date field
     */
    const COL_EXAMINATION_DATE = 'care_tz_eye_lens.Examination_date';

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
        self::TYPE_PHPNAME       => array('Id', 'Pid', 'RightEyeTest1', 'RightEyeTest2', 'RightEyeTest3', 'RightEyeTest4', 'RightEyeTest5', 'RightEyeTest6', 'RightEyeTest7', 'RightEyeTest8', 'RightEyeTest9', 'LeftEyeTest1', 'LeftEyeTest2', 'LeftEyeTest3', 'LeftEyeTest4', 'LeftEyeTest5', 'LeftEyeTest6', 'LeftEyeTest7', 'LeftEyeTest8', 'LeftEyeTest9', 'Signature', 'ExaminationDate', ),
        self::TYPE_CAMELNAME     => array('id', 'pid', 'rightEyeTest1', 'rightEyeTest2', 'rightEyeTest3', 'rightEyeTest4', 'rightEyeTest5', 'rightEyeTest6', 'rightEyeTest7', 'rightEyeTest8', 'rightEyeTest9', 'leftEyeTest1', 'leftEyeTest2', 'leftEyeTest3', 'leftEyeTest4', 'leftEyeTest5', 'leftEyeTest6', 'leftEyeTest7', 'leftEyeTest8', 'leftEyeTest9', 'signature', 'examinationDate', ),
        self::TYPE_COLNAME       => array(CareTzEyeLensTableMap::COL_ID, CareTzEyeLensTableMap::COL_PID, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST1, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST2, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST3, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST4, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST5, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST6, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST7, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST8, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST9, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST1, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST2, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST3, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST4, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST5, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST6, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST7, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST8, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST9, CareTzEyeLensTableMap::COL_SIGNATURE, CareTzEyeLensTableMap::COL_EXAMINATION_DATE, ),
        self::TYPE_FIELDNAME     => array('id', 'pid', 'right_eye_test1', 'right_eye_test2', 'right_eye_test3', 'right_eye_test4', 'right_eye_test5', 'right_eye_test6', 'right_eye_test7', 'right_eye_test8', 'right_eye_test9', 'left_eye_test1', 'left_eye_test2', 'left_eye_test3', 'left_eye_test4', 'left_eye_test5', 'left_eye_test6', 'left_eye_test7', 'left_eye_test8', 'left_eye_test9', 'Signature', 'Examination_date', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Pid' => 1, 'RightEyeTest1' => 2, 'RightEyeTest2' => 3, 'RightEyeTest3' => 4, 'RightEyeTest4' => 5, 'RightEyeTest5' => 6, 'RightEyeTest6' => 7, 'RightEyeTest7' => 8, 'RightEyeTest8' => 9, 'RightEyeTest9' => 10, 'LeftEyeTest1' => 11, 'LeftEyeTest2' => 12, 'LeftEyeTest3' => 13, 'LeftEyeTest4' => 14, 'LeftEyeTest5' => 15, 'LeftEyeTest6' => 16, 'LeftEyeTest7' => 17, 'LeftEyeTest8' => 18, 'LeftEyeTest9' => 19, 'Signature' => 20, 'ExaminationDate' => 21, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'pid' => 1, 'rightEyeTest1' => 2, 'rightEyeTest2' => 3, 'rightEyeTest3' => 4, 'rightEyeTest4' => 5, 'rightEyeTest5' => 6, 'rightEyeTest6' => 7, 'rightEyeTest7' => 8, 'rightEyeTest8' => 9, 'rightEyeTest9' => 10, 'leftEyeTest1' => 11, 'leftEyeTest2' => 12, 'leftEyeTest3' => 13, 'leftEyeTest4' => 14, 'leftEyeTest5' => 15, 'leftEyeTest6' => 16, 'leftEyeTest7' => 17, 'leftEyeTest8' => 18, 'leftEyeTest9' => 19, 'signature' => 20, 'examinationDate' => 21, ),
        self::TYPE_COLNAME       => array(CareTzEyeLensTableMap::COL_ID => 0, CareTzEyeLensTableMap::COL_PID => 1, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST1 => 2, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST2 => 3, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST3 => 4, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST4 => 5, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST5 => 6, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST6 => 7, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST7 => 8, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST8 => 9, CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST9 => 10, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST1 => 11, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST2 => 12, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST3 => 13, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST4 => 14, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST5 => 15, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST6 => 16, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST7 => 17, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST8 => 18, CareTzEyeLensTableMap::COL_LEFT_EYE_TEST9 => 19, CareTzEyeLensTableMap::COL_SIGNATURE => 20, CareTzEyeLensTableMap::COL_EXAMINATION_DATE => 21, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'pid' => 1, 'right_eye_test1' => 2, 'right_eye_test2' => 3, 'right_eye_test3' => 4, 'right_eye_test4' => 5, 'right_eye_test5' => 6, 'right_eye_test6' => 7, 'right_eye_test7' => 8, 'right_eye_test8' => 9, 'right_eye_test9' => 10, 'left_eye_test1' => 11, 'left_eye_test2' => 12, 'left_eye_test3' => 13, 'left_eye_test4' => 14, 'left_eye_test5' => 15, 'left_eye_test6' => 16, 'left_eye_test7' => 17, 'left_eye_test8' => 18, 'left_eye_test9' => 19, 'Signature' => 20, 'Examination_date' => 21, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
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
        $this->setName('care_tz_eye_lens');
        $this->setPhpName('CareTzEyeLens');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzEyeLens');
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
        $this->addColumn('right_eye_test8', 'RightEyeTest8', 'VARCHAR', false, 100, null);
        $this->addColumn('right_eye_test9', 'RightEyeTest9', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test1', 'LeftEyeTest1', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test2', 'LeftEyeTest2', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test3', 'LeftEyeTest3', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test4', 'LeftEyeTest4', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test5', 'LeftEyeTest5', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test6', 'LeftEyeTest6', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test7', 'LeftEyeTest7', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test8', 'LeftEyeTest8', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test9', 'LeftEyeTest9', 'VARCHAR', false, 100, null);
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
        return $withPrefix ? CareTzEyeLensTableMap::CLASS_DEFAULT : CareTzEyeLensTableMap::OM_CLASS;
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
     * @return array           (CareTzEyeLens object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzEyeLensTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzEyeLensTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzEyeLensTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzEyeLensTableMap::OM_CLASS;
            /** @var CareTzEyeLens $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzEyeLensTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzEyeLensTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzEyeLensTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzEyeLens $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzEyeLensTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_PID);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST1);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST2);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST3);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST4);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST5);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST6);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST7);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST8);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST9);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST1);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST2);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST3);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST4);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST5);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST6);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST7);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST8);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST9);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_SIGNATURE);
            $criteria->addSelectColumn(CareTzEyeLensTableMap::COL_EXAMINATION_DATE);
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
            $criteria->addSelectColumn($alias . '.right_eye_test8');
            $criteria->addSelectColumn($alias . '.right_eye_test9');
            $criteria->addSelectColumn($alias . '.left_eye_test1');
            $criteria->addSelectColumn($alias . '.left_eye_test2');
            $criteria->addSelectColumn($alias . '.left_eye_test3');
            $criteria->addSelectColumn($alias . '.left_eye_test4');
            $criteria->addSelectColumn($alias . '.left_eye_test5');
            $criteria->addSelectColumn($alias . '.left_eye_test6');
            $criteria->addSelectColumn($alias . '.left_eye_test7');
            $criteria->addSelectColumn($alias . '.left_eye_test8');
            $criteria->addSelectColumn($alias . '.left_eye_test9');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzEyeLensTableMap::DATABASE_NAME)->getTable(CareTzEyeLensTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzEyeLensTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzEyeLensTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzEyeLensTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzEyeLens or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzEyeLens object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeLensTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzEyeLens) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzEyeLensTableMap::DATABASE_NAME);
            $criteria->add(CareTzEyeLensTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzEyeLensQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzEyeLensTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzEyeLensTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_eye_lens table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzEyeLensQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzEyeLens or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzEyeLens object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeLensTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzEyeLens object
        }

        if ($criteria->containsKey(CareTzEyeLensTableMap::COL_ID) && $criteria->keyContainsValue(CareTzEyeLensTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzEyeLensTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzEyeLensQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzEyeLensTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzEyeLensTableMap::buildTableMap();
