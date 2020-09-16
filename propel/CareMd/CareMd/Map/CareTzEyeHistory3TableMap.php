<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzEyeHistory3;
use CareMd\CareMd\CareTzEyeHistory3Query;
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
 * This class defines the structure of the 'care_tz_eye_history3' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzEyeHistory3TableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzEyeHistory3TableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_eye_history3';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzEyeHistory3';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzEyeHistory3';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 21;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 21;

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_tz_eye_history3.id';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_tz_eye_history3.pid';

    /**
     * the column name for the hid1 field
     */
    const COL_HID1 = 'care_tz_eye_history3.hid1';

    /**
     * the column name for the hid1e field
     */
    const COL_HID1E = 'care_tz_eye_history3.hid1e';

    /**
     * the column name for the hid1d field
     */
    const COL_HID1D = 'care_tz_eye_history3.hid1d';

    /**
     * the column name for the hid2 field
     */
    const COL_HID2 = 'care_tz_eye_history3.hid2';

    /**
     * the column name for the hid2e field
     */
    const COL_HID2E = 'care_tz_eye_history3.hid2e';

    /**
     * the column name for the hid2d field
     */
    const COL_HID2D = 'care_tz_eye_history3.hid2d';

    /**
     * the column name for the hid3 field
     */
    const COL_HID3 = 'care_tz_eye_history3.hid3';

    /**
     * the column name for the hid3e field
     */
    const COL_HID3E = 'care_tz_eye_history3.hid3e';

    /**
     * the column name for the hid3d field
     */
    const COL_HID3D = 'care_tz_eye_history3.hid3d';

    /**
     * the column name for the hid4 field
     */
    const COL_HID4 = 'care_tz_eye_history3.hid4';

    /**
     * the column name for the hid4e field
     */
    const COL_HID4E = 'care_tz_eye_history3.hid4e';

    /**
     * the column name for the hid4d field
     */
    const COL_HID4D = 'care_tz_eye_history3.hid4d';

    /**
     * the column name for the hid5 field
     */
    const COL_HID5 = 'care_tz_eye_history3.hid5';

    /**
     * the column name for the hid5e field
     */
    const COL_HID5E = 'care_tz_eye_history3.hid5e';

    /**
     * the column name for the hid5d field
     */
    const COL_HID5D = 'care_tz_eye_history3.hid5d';

    /**
     * the column name for the hid6 field
     */
    const COL_HID6 = 'care_tz_eye_history3.hid6';

    /**
     * the column name for the signature field
     */
    const COL_SIGNATURE = 'care_tz_eye_history3.signature';

    /**
     * the column name for the remarks field
     */
    const COL_REMARKS = 'care_tz_eye_history3.remarks';

    /**
     * the column name for the examination_date field
     */
    const COL_EXAMINATION_DATE = 'care_tz_eye_history3.examination_date';

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
        self::TYPE_PHPNAME       => array('Id', 'Pid', 'Hid1', 'Hid1e', 'Hid1d', 'Hid2', 'Hid2e', 'Hid2d', 'Hid3', 'Hid3e', 'Hid3d', 'Hid4', 'Hid4e', 'Hid4d', 'Hid5', 'Hid5e', 'Hid5d', 'Hid6', 'Signature', 'Remarks', 'ExaminationDate', ),
        self::TYPE_CAMELNAME     => array('id', 'pid', 'hid1', 'hid1e', 'hid1d', 'hid2', 'hid2e', 'hid2d', 'hid3', 'hid3e', 'hid3d', 'hid4', 'hid4e', 'hid4d', 'hid5', 'hid5e', 'hid5d', 'hid6', 'signature', 'remarks', 'examinationDate', ),
        self::TYPE_COLNAME       => array(CareTzEyeHistory3TableMap::COL_ID, CareTzEyeHistory3TableMap::COL_PID, CareTzEyeHistory3TableMap::COL_HID1, CareTzEyeHistory3TableMap::COL_HID1E, CareTzEyeHistory3TableMap::COL_HID1D, CareTzEyeHistory3TableMap::COL_HID2, CareTzEyeHistory3TableMap::COL_HID2E, CareTzEyeHistory3TableMap::COL_HID2D, CareTzEyeHistory3TableMap::COL_HID3, CareTzEyeHistory3TableMap::COL_HID3E, CareTzEyeHistory3TableMap::COL_HID3D, CareTzEyeHistory3TableMap::COL_HID4, CareTzEyeHistory3TableMap::COL_HID4E, CareTzEyeHistory3TableMap::COL_HID4D, CareTzEyeHistory3TableMap::COL_HID5, CareTzEyeHistory3TableMap::COL_HID5E, CareTzEyeHistory3TableMap::COL_HID5D, CareTzEyeHistory3TableMap::COL_HID6, CareTzEyeHistory3TableMap::COL_SIGNATURE, CareTzEyeHistory3TableMap::COL_REMARKS, CareTzEyeHistory3TableMap::COL_EXAMINATION_DATE, ),
        self::TYPE_FIELDNAME     => array('id', 'pid', 'hid1', 'hid1e', 'hid1d', 'hid2', 'hid2e', 'hid2d', 'hid3', 'hid3e', 'hid3d', 'hid4', 'hid4e', 'hid4d', 'hid5', 'hid5e', 'hid5d', 'hid6', 'signature', 'remarks', 'examination_date', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Pid' => 1, 'Hid1' => 2, 'Hid1e' => 3, 'Hid1d' => 4, 'Hid2' => 5, 'Hid2e' => 6, 'Hid2d' => 7, 'Hid3' => 8, 'Hid3e' => 9, 'Hid3d' => 10, 'Hid4' => 11, 'Hid4e' => 12, 'Hid4d' => 13, 'Hid5' => 14, 'Hid5e' => 15, 'Hid5d' => 16, 'Hid6' => 17, 'Signature' => 18, 'Remarks' => 19, 'ExaminationDate' => 20, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'pid' => 1, 'hid1' => 2, 'hid1e' => 3, 'hid1d' => 4, 'hid2' => 5, 'hid2e' => 6, 'hid2d' => 7, 'hid3' => 8, 'hid3e' => 9, 'hid3d' => 10, 'hid4' => 11, 'hid4e' => 12, 'hid4d' => 13, 'hid5' => 14, 'hid5e' => 15, 'hid5d' => 16, 'hid6' => 17, 'signature' => 18, 'remarks' => 19, 'examinationDate' => 20, ),
        self::TYPE_COLNAME       => array(CareTzEyeHistory3TableMap::COL_ID => 0, CareTzEyeHistory3TableMap::COL_PID => 1, CareTzEyeHistory3TableMap::COL_HID1 => 2, CareTzEyeHistory3TableMap::COL_HID1E => 3, CareTzEyeHistory3TableMap::COL_HID1D => 4, CareTzEyeHistory3TableMap::COL_HID2 => 5, CareTzEyeHistory3TableMap::COL_HID2E => 6, CareTzEyeHistory3TableMap::COL_HID2D => 7, CareTzEyeHistory3TableMap::COL_HID3 => 8, CareTzEyeHistory3TableMap::COL_HID3E => 9, CareTzEyeHistory3TableMap::COL_HID3D => 10, CareTzEyeHistory3TableMap::COL_HID4 => 11, CareTzEyeHistory3TableMap::COL_HID4E => 12, CareTzEyeHistory3TableMap::COL_HID4D => 13, CareTzEyeHistory3TableMap::COL_HID5 => 14, CareTzEyeHistory3TableMap::COL_HID5E => 15, CareTzEyeHistory3TableMap::COL_HID5D => 16, CareTzEyeHistory3TableMap::COL_HID6 => 17, CareTzEyeHistory3TableMap::COL_SIGNATURE => 18, CareTzEyeHistory3TableMap::COL_REMARKS => 19, CareTzEyeHistory3TableMap::COL_EXAMINATION_DATE => 20, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'pid' => 1, 'hid1' => 2, 'hid1e' => 3, 'hid1d' => 4, 'hid2' => 5, 'hid2e' => 6, 'hid2d' => 7, 'hid3' => 8, 'hid3e' => 9, 'hid3d' => 10, 'hid4' => 11, 'hid4e' => 12, 'hid4d' => 13, 'hid5' => 14, 'hid5e' => 15, 'hid5d' => 16, 'hid6' => 17, 'signature' => 18, 'remarks' => 19, 'examination_date' => 20, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $this->setName('care_tz_eye_history3');
        $this->setPhpName('CareTzEyeHistory3');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzEyeHistory3');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('pid', 'Pid', 'VARCHAR', true, 100, '');
        $this->addColumn('hid1', 'Hid1', 'VARCHAR', true, 100, null);
        $this->addColumn('hid1e', 'Hid1e', 'VARCHAR', true, 100, '');
        $this->addColumn('hid1d', 'Hid1d', 'VARCHAR', true, 100, '');
        $this->addColumn('hid2', 'Hid2', 'VARCHAR', true, 100, null);
        $this->addColumn('hid2e', 'Hid2e', 'VARCHAR', true, 100, '');
        $this->addColumn('hid2d', 'Hid2d', 'VARCHAR', true, 100, '');
        $this->addColumn('hid3', 'Hid3', 'VARCHAR', true, 100, null);
        $this->addColumn('hid3e', 'Hid3e', 'VARCHAR', true, 100, '');
        $this->addColumn('hid3d', 'Hid3d', 'VARCHAR', true, 100, '');
        $this->addColumn('hid4', 'Hid4', 'VARCHAR', true, 100, null);
        $this->addColumn('hid4e', 'Hid4e', 'VARCHAR', true, 100, '');
        $this->addColumn('hid4d', 'Hid4d', 'VARCHAR', true, 100, '');
        $this->addColumn('hid5', 'Hid5', 'VARCHAR', true, 100, null);
        $this->addColumn('hid5e', 'Hid5e', 'VARCHAR', true, 100, '');
        $this->addColumn('hid5d', 'Hid5d', 'VARCHAR', true, 100, '');
        $this->addColumn('hid6', 'Hid6', 'VARCHAR', true, 100, '');
        $this->addColumn('signature', 'Signature', 'VARCHAR', true, 100, '');
        $this->addColumn('remarks', 'Remarks', 'VARCHAR', true, 100, '');
        $this->addColumn('examination_date', 'ExaminationDate', 'DATE', true, null, '0000-00-00');
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
        return $withPrefix ? CareTzEyeHistory3TableMap::CLASS_DEFAULT : CareTzEyeHistory3TableMap::OM_CLASS;
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
     * @return array           (CareTzEyeHistory3 object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzEyeHistory3TableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzEyeHistory3TableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzEyeHistory3TableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzEyeHistory3TableMap::OM_CLASS;
            /** @var CareTzEyeHistory3 $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzEyeHistory3TableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzEyeHistory3TableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzEyeHistory3TableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzEyeHistory3 $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzEyeHistory3TableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_ID);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_PID);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID1);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID1E);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID1D);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID2);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID2E);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID2D);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID3);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID3E);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID3D);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID4);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID4E);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID4D);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID5);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID5E);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID5D);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_HID6);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_SIGNATURE);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_REMARKS);
            $criteria->addSelectColumn(CareTzEyeHistory3TableMap::COL_EXAMINATION_DATE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.hid1');
            $criteria->addSelectColumn($alias . '.hid1e');
            $criteria->addSelectColumn($alias . '.hid1d');
            $criteria->addSelectColumn($alias . '.hid2');
            $criteria->addSelectColumn($alias . '.hid2e');
            $criteria->addSelectColumn($alias . '.hid2d');
            $criteria->addSelectColumn($alias . '.hid3');
            $criteria->addSelectColumn($alias . '.hid3e');
            $criteria->addSelectColumn($alias . '.hid3d');
            $criteria->addSelectColumn($alias . '.hid4');
            $criteria->addSelectColumn($alias . '.hid4e');
            $criteria->addSelectColumn($alias . '.hid4d');
            $criteria->addSelectColumn($alias . '.hid5');
            $criteria->addSelectColumn($alias . '.hid5e');
            $criteria->addSelectColumn($alias . '.hid5d');
            $criteria->addSelectColumn($alias . '.hid6');
            $criteria->addSelectColumn($alias . '.signature');
            $criteria->addSelectColumn($alias . '.remarks');
            $criteria->addSelectColumn($alias . '.examination_date');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzEyeHistory3TableMap::DATABASE_NAME)->getTable(CareTzEyeHistory3TableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzEyeHistory3TableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzEyeHistory3TableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzEyeHistory3TableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzEyeHistory3 or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzEyeHistory3 object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeHistory3TableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzEyeHistory3) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzEyeHistory3TableMap::DATABASE_NAME);
            $criteria->add(CareTzEyeHistory3TableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzEyeHistory3Query::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzEyeHistory3TableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzEyeHistory3TableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_eye_history3 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzEyeHistory3Query::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzEyeHistory3 or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzEyeHistory3 object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeHistory3TableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzEyeHistory3 object
        }

        if ($criteria->containsKey(CareTzEyeHistory3TableMap::COL_ID) && $criteria->keyContainsValue(CareTzEyeHistory3TableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzEyeHistory3TableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CareTzEyeHistory3Query::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzEyeHistory3TableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzEyeHistory3TableMap::buildTableMap();
