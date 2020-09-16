<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzEyeConjunctiva;
use CareMd\CareMd\CareTzEyeConjunctivaQuery;
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
 * This class defines the structure of the 'care_tz_eye_conjunctiva' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzEyeConjunctivaTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzEyeConjunctivaTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_eye_conjunctiva';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzEyeConjunctiva';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzEyeConjunctiva';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 20;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 20;

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_tz_eye_conjunctiva.id';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_tz_eye_conjunctiva.pid';

    /**
     * the column name for the right_eye_test1 field
     */
    const COL_RIGHT_EYE_TEST1 = 'care_tz_eye_conjunctiva.right_eye_test1';

    /**
     * the column name for the right_eye_test2 field
     */
    const COL_RIGHT_EYE_TEST2 = 'care_tz_eye_conjunctiva.right_eye_test2';

    /**
     * the column name for the right_eye_test3 field
     */
    const COL_RIGHT_EYE_TEST3 = 'care_tz_eye_conjunctiva.right_eye_test3';

    /**
     * the column name for the right_eye_test4 field
     */
    const COL_RIGHT_EYE_TEST4 = 'care_tz_eye_conjunctiva.right_eye_test4';

    /**
     * the column name for the right_eye_test5 field
     */
    const COL_RIGHT_EYE_TEST5 = 'care_tz_eye_conjunctiva.right_eye_test5';

    /**
     * the column name for the right_eye_test6 field
     */
    const COL_RIGHT_EYE_TEST6 = 'care_tz_eye_conjunctiva.right_eye_test6';

    /**
     * the column name for the right_eye_test7 field
     */
    const COL_RIGHT_EYE_TEST7 = 'care_tz_eye_conjunctiva.right_eye_test7';

    /**
     * the column name for the right_eye_test8 field
     */
    const COL_RIGHT_EYE_TEST8 = 'care_tz_eye_conjunctiva.right_eye_test8';

    /**
     * the column name for the left_eye_test1 field
     */
    const COL_LEFT_EYE_TEST1 = 'care_tz_eye_conjunctiva.left_eye_test1';

    /**
     * the column name for the left_eye_test2 field
     */
    const COL_LEFT_EYE_TEST2 = 'care_tz_eye_conjunctiva.left_eye_test2';

    /**
     * the column name for the left_eye_test3 field
     */
    const COL_LEFT_EYE_TEST3 = 'care_tz_eye_conjunctiva.left_eye_test3';

    /**
     * the column name for the left_eye_test4 field
     */
    const COL_LEFT_EYE_TEST4 = 'care_tz_eye_conjunctiva.left_eye_test4';

    /**
     * the column name for the left_eye_test5 field
     */
    const COL_LEFT_EYE_TEST5 = 'care_tz_eye_conjunctiva.left_eye_test5';

    /**
     * the column name for the left_eye_test6 field
     */
    const COL_LEFT_EYE_TEST6 = 'care_tz_eye_conjunctiva.left_eye_test6';

    /**
     * the column name for the left_eye_test7 field
     */
    const COL_LEFT_EYE_TEST7 = 'care_tz_eye_conjunctiva.left_eye_test7';

    /**
     * the column name for the left_eye_test8 field
     */
    const COL_LEFT_EYE_TEST8 = 'care_tz_eye_conjunctiva.left_eye_test8';

    /**
     * the column name for the Signature field
     */
    const COL_SIGNATURE = 'care_tz_eye_conjunctiva.Signature';

    /**
     * the column name for the Examination_date field
     */
    const COL_EXAMINATION_DATE = 'care_tz_eye_conjunctiva.Examination_date';

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
        self::TYPE_PHPNAME       => array('Id', 'Pid', 'RightEyeTest1', 'RightEyeTest2', 'RightEyeTest3', 'RightEyeTest4', 'RightEyeTest5', 'RightEyeTest6', 'RightEyeTest7', 'RightEyeTest8', 'LeftEyeTest1', 'LeftEyeTest2', 'LeftEyeTest3', 'LeftEyeTest4', 'LeftEyeTest5', 'LeftEyeTest6', 'LeftEyeTest7', 'LeftEyeTest8', 'Signature', 'ExaminationDate', ),
        self::TYPE_CAMELNAME     => array('id', 'pid', 'rightEyeTest1', 'rightEyeTest2', 'rightEyeTest3', 'rightEyeTest4', 'rightEyeTest5', 'rightEyeTest6', 'rightEyeTest7', 'rightEyeTest8', 'leftEyeTest1', 'leftEyeTest2', 'leftEyeTest3', 'leftEyeTest4', 'leftEyeTest5', 'leftEyeTest6', 'leftEyeTest7', 'leftEyeTest8', 'signature', 'examinationDate', ),
        self::TYPE_COLNAME       => array(CareTzEyeConjunctivaTableMap::COL_ID, CareTzEyeConjunctivaTableMap::COL_PID, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST1, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST2, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST3, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST4, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST5, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST6, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST7, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST8, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST1, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST2, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST3, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST4, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST5, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST6, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST7, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST8, CareTzEyeConjunctivaTableMap::COL_SIGNATURE, CareTzEyeConjunctivaTableMap::COL_EXAMINATION_DATE, ),
        self::TYPE_FIELDNAME     => array('id', 'pid', 'right_eye_test1', 'right_eye_test2', 'right_eye_test3', 'right_eye_test4', 'right_eye_test5', 'right_eye_test6', 'right_eye_test7', 'right_eye_test8', 'left_eye_test1', 'left_eye_test2', 'left_eye_test3', 'left_eye_test4', 'left_eye_test5', 'left_eye_test6', 'left_eye_test7', 'left_eye_test8', 'Signature', 'Examination_date', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Pid' => 1, 'RightEyeTest1' => 2, 'RightEyeTest2' => 3, 'RightEyeTest3' => 4, 'RightEyeTest4' => 5, 'RightEyeTest5' => 6, 'RightEyeTest6' => 7, 'RightEyeTest7' => 8, 'RightEyeTest8' => 9, 'LeftEyeTest1' => 10, 'LeftEyeTest2' => 11, 'LeftEyeTest3' => 12, 'LeftEyeTest4' => 13, 'LeftEyeTest5' => 14, 'LeftEyeTest6' => 15, 'LeftEyeTest7' => 16, 'LeftEyeTest8' => 17, 'Signature' => 18, 'ExaminationDate' => 19, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'pid' => 1, 'rightEyeTest1' => 2, 'rightEyeTest2' => 3, 'rightEyeTest3' => 4, 'rightEyeTest4' => 5, 'rightEyeTest5' => 6, 'rightEyeTest6' => 7, 'rightEyeTest7' => 8, 'rightEyeTest8' => 9, 'leftEyeTest1' => 10, 'leftEyeTest2' => 11, 'leftEyeTest3' => 12, 'leftEyeTest4' => 13, 'leftEyeTest5' => 14, 'leftEyeTest6' => 15, 'leftEyeTest7' => 16, 'leftEyeTest8' => 17, 'signature' => 18, 'examinationDate' => 19, ),
        self::TYPE_COLNAME       => array(CareTzEyeConjunctivaTableMap::COL_ID => 0, CareTzEyeConjunctivaTableMap::COL_PID => 1, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST1 => 2, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST2 => 3, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST3 => 4, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST4 => 5, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST5 => 6, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST6 => 7, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST7 => 8, CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST8 => 9, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST1 => 10, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST2 => 11, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST3 => 12, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST4 => 13, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST5 => 14, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST6 => 15, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST7 => 16, CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST8 => 17, CareTzEyeConjunctivaTableMap::COL_SIGNATURE => 18, CareTzEyeConjunctivaTableMap::COL_EXAMINATION_DATE => 19, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'pid' => 1, 'right_eye_test1' => 2, 'right_eye_test2' => 3, 'right_eye_test3' => 4, 'right_eye_test4' => 5, 'right_eye_test5' => 6, 'right_eye_test6' => 7, 'right_eye_test7' => 8, 'right_eye_test8' => 9, 'left_eye_test1' => 10, 'left_eye_test2' => 11, 'left_eye_test3' => 12, 'left_eye_test4' => 13, 'left_eye_test5' => 14, 'left_eye_test6' => 15, 'left_eye_test7' => 16, 'left_eye_test8' => 17, 'Signature' => 18, 'Examination_date' => 19, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
        $this->setName('care_tz_eye_conjunctiva');
        $this->setPhpName('CareTzEyeConjunctiva');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzEyeConjunctiva');
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
        $this->addColumn('left_eye_test1', 'LeftEyeTest1', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test2', 'LeftEyeTest2', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test3', 'LeftEyeTest3', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test4', 'LeftEyeTest4', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test5', 'LeftEyeTest5', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test6', 'LeftEyeTest6', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test7', 'LeftEyeTest7', 'VARCHAR', false, 100, null);
        $this->addColumn('left_eye_test8', 'LeftEyeTest8', 'VARCHAR', false, 100, null);
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
        return $withPrefix ? CareTzEyeConjunctivaTableMap::CLASS_DEFAULT : CareTzEyeConjunctivaTableMap::OM_CLASS;
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
     * @return array           (CareTzEyeConjunctiva object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzEyeConjunctivaTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzEyeConjunctivaTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzEyeConjunctivaTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzEyeConjunctivaTableMap::OM_CLASS;
            /** @var CareTzEyeConjunctiva $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzEyeConjunctivaTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzEyeConjunctivaTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzEyeConjunctivaTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzEyeConjunctiva $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzEyeConjunctivaTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_PID);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST1);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST2);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST3);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST4);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST5);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST6);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST7);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_RIGHT_EYE_TEST8);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST1);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST2);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST3);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST4);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST5);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST6);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST7);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_LEFT_EYE_TEST8);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_SIGNATURE);
            $criteria->addSelectColumn(CareTzEyeConjunctivaTableMap::COL_EXAMINATION_DATE);
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
            $criteria->addSelectColumn($alias . '.left_eye_test1');
            $criteria->addSelectColumn($alias . '.left_eye_test2');
            $criteria->addSelectColumn($alias . '.left_eye_test3');
            $criteria->addSelectColumn($alias . '.left_eye_test4');
            $criteria->addSelectColumn($alias . '.left_eye_test5');
            $criteria->addSelectColumn($alias . '.left_eye_test6');
            $criteria->addSelectColumn($alias . '.left_eye_test7');
            $criteria->addSelectColumn($alias . '.left_eye_test8');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzEyeConjunctivaTableMap::DATABASE_NAME)->getTable(CareTzEyeConjunctivaTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzEyeConjunctivaTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzEyeConjunctivaTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzEyeConjunctivaTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzEyeConjunctiva or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzEyeConjunctiva object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeConjunctivaTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzEyeConjunctiva) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzEyeConjunctivaTableMap::DATABASE_NAME);
            $criteria->add(CareTzEyeConjunctivaTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzEyeConjunctivaQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzEyeConjunctivaTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzEyeConjunctivaTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_eye_conjunctiva table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzEyeConjunctivaQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzEyeConjunctiva or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzEyeConjunctiva object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeConjunctivaTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzEyeConjunctiva object
        }

        if ($criteria->containsKey(CareTzEyeConjunctivaTableMap::COL_ID) && $criteria->keyContainsValue(CareTzEyeConjunctivaTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzEyeConjunctivaTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzEyeConjunctivaQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzEyeConjunctivaTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzEyeConjunctivaTableMap::buildTableMap();
