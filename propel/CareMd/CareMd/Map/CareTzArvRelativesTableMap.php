<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzArvRelatives;
use CareMd\CareMd\CareTzArvRelativesQuery;
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
 * This class defines the structure of the 'care_tz_arv_relatives' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzArvRelativesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzArvRelativesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_arv_relatives';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzArvRelatives';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzArvRelatives';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the care_tz_arv_registration_id field
     */
    const COL_CARE_TZ_ARV_REGISTRATION_ID = 'care_tz_arv_relatives.care_tz_arv_registration_id';

    /**
     * the column name for the relative_name field
     */
    const COL_RELATIVE_NAME = 'care_tz_arv_relatives.relative_name';

    /**
     * the column name for the care_tz_arv_relatives_code_id field
     */
    const COL_CARE_TZ_ARV_RELATIVES_CODE_ID = 'care_tz_arv_relatives.care_tz_arv_relatives_code_id';

    /**
     * the column name for the age field
     */
    const COL_AGE = 'care_tz_arv_relatives.age';

    /**
     * the column name for the hiv_status field
     */
    const COL_HIV_STATUS = 'care_tz_arv_relatives.hiv_status';

    /**
     * the column name for the hiv_care_status field
     */
    const COL_HIV_CARE_STATUS = 'care_tz_arv_relatives.hiv_care_status';

    /**
     * the column name for the relative_ctc_id field
     */
    const COL_RELATIVE_CTC_ID = 'care_tz_arv_relatives.relative_ctc_id';

    /**
     * the column name for the facility_file_no field
     */
    const COL_FACILITY_FILE_NO = 'care_tz_arv_relatives.facility_file_no';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_tz_arv_relatives.history';

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
        self::TYPE_PHPNAME       => array('CareTzArvRegistrationId', 'RelativeName', 'CareTzArvRelativesCodeId', 'Age', 'HivStatus', 'HivCareStatus', 'RelativeCtcId', 'FacilityFileNo', 'History', ),
        self::TYPE_CAMELNAME     => array('careTzArvRegistrationId', 'relativeName', 'careTzArvRelativesCodeId', 'age', 'hivStatus', 'hivCareStatus', 'relativeCtcId', 'facilityFileNo', 'history', ),
        self::TYPE_COLNAME       => array(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, CareTzArvRelativesTableMap::COL_RELATIVE_NAME, CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_RELATIVES_CODE_ID, CareTzArvRelativesTableMap::COL_AGE, CareTzArvRelativesTableMap::COL_HIV_STATUS, CareTzArvRelativesTableMap::COL_HIV_CARE_STATUS, CareTzArvRelativesTableMap::COL_RELATIVE_CTC_ID, CareTzArvRelativesTableMap::COL_FACILITY_FILE_NO, CareTzArvRelativesTableMap::COL_HISTORY, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_registration_id', 'relative_name', 'care_tz_arv_relatives_code_id', 'age', 'hiv_status', 'hiv_care_status', 'relative_ctc_id', 'facility_file_no', 'history', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('CareTzArvRegistrationId' => 0, 'RelativeName' => 1, 'CareTzArvRelativesCodeId' => 2, 'Age' => 3, 'HivStatus' => 4, 'HivCareStatus' => 5, 'RelativeCtcId' => 6, 'FacilityFileNo' => 7, 'History' => 8, ),
        self::TYPE_CAMELNAME     => array('careTzArvRegistrationId' => 0, 'relativeName' => 1, 'careTzArvRelativesCodeId' => 2, 'age' => 3, 'hivStatus' => 4, 'hivCareStatus' => 5, 'relativeCtcId' => 6, 'facilityFileNo' => 7, 'history' => 8, ),
        self::TYPE_COLNAME       => array(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID => 0, CareTzArvRelativesTableMap::COL_RELATIVE_NAME => 1, CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_RELATIVES_CODE_ID => 2, CareTzArvRelativesTableMap::COL_AGE => 3, CareTzArvRelativesTableMap::COL_HIV_STATUS => 4, CareTzArvRelativesTableMap::COL_HIV_CARE_STATUS => 5, CareTzArvRelativesTableMap::COL_RELATIVE_CTC_ID => 6, CareTzArvRelativesTableMap::COL_FACILITY_FILE_NO => 7, CareTzArvRelativesTableMap::COL_HISTORY => 8, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_registration_id' => 0, 'relative_name' => 1, 'care_tz_arv_relatives_code_id' => 2, 'age' => 3, 'hiv_status' => 4, 'hiv_care_status' => 5, 'relative_ctc_id' => 6, 'facility_file_no' => 7, 'history' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $this->setName('care_tz_arv_relatives');
        $this->setPhpName('CareTzArvRelatives');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzArvRelatives');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('care_tz_arv_registration_id', 'CareTzArvRegistrationId', 'INTEGER', true, 10, null);
        $this->addColumn('relative_name', 'RelativeName', 'VARCHAR', true, 100, null);
        $this->addColumn('care_tz_arv_relatives_code_id', 'CareTzArvRelativesCodeId', 'INTEGER', true, 10, null);
        $this->addColumn('age', 'Age', 'INTEGER', true, 10, null);
        $this->addColumn('hiv_status', 'HivStatus', 'VARCHAR', true, 25, null);
        $this->addColumn('hiv_care_status', 'HivCareStatus', 'VARCHAR', true, 50, null);
        $this->addPrimaryKey('relative_ctc_id', 'RelativeCtcId', 'VARCHAR', true, 14, '');
        $this->addPrimaryKey('facility_file_no', 'FacilityFileNo', 'VARCHAR', true, 10, '');
        $this->addColumn('history', 'History', 'VARCHAR', true, 200, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CareMd\CareMd\CareTzArvRelatives $obj A \CareMd\CareMd\CareTzArvRelatives object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getCareTzArvRegistrationId() || is_scalar($obj->getCareTzArvRegistrationId()) || is_callable([$obj->getCareTzArvRegistrationId(), '__toString']) ? (string) $obj->getCareTzArvRegistrationId() : $obj->getCareTzArvRegistrationId()), (null === $obj->getRelativeCtcId() || is_scalar($obj->getRelativeCtcId()) || is_callable([$obj->getRelativeCtcId(), '__toString']) ? (string) $obj->getRelativeCtcId() : $obj->getRelativeCtcId()), (null === $obj->getFacilityFileNo() || is_scalar($obj->getFacilityFileNo()) || is_callable([$obj->getFacilityFileNo(), '__toString']) ? (string) $obj->getFacilityFileNo() : $obj->getFacilityFileNo())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \CareMd\CareMd\CareTzArvRelatives object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CareTzArvRelatives) {
                $key = serialize([(null === $value->getCareTzArvRegistrationId() || is_scalar($value->getCareTzArvRegistrationId()) || is_callable([$value->getCareTzArvRegistrationId(), '__toString']) ? (string) $value->getCareTzArvRegistrationId() : $value->getCareTzArvRegistrationId()), (null === $value->getRelativeCtcId() || is_scalar($value->getRelativeCtcId()) || is_callable([$value->getRelativeCtcId(), '__toString']) ? (string) $value->getRelativeCtcId() : $value->getRelativeCtcId()), (null === $value->getFacilityFileNo() || is_scalar($value->getFacilityFileNo()) || is_callable([$value->getFacilityFileNo(), '__toString']) ? (string) $value->getFacilityFileNo() : $value->getFacilityFileNo())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CareTzArvRelatives object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('RelativeCtcId', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('FacilityFileNo', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('RelativeCtcId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('RelativeCtcId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('RelativeCtcId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('RelativeCtcId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('RelativeCtcId', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('FacilityFileNo', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('FacilityFileNo', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('FacilityFileNo', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('FacilityFileNo', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('FacilityFileNo', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('RelativeCtcId', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 7 + $offset
                : self::translateFieldName('FacilityFileNo', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? CareTzArvRelativesTableMap::CLASS_DEFAULT : CareTzArvRelativesTableMap::OM_CLASS;
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
     * @return array           (CareTzArvRelatives object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzArvRelativesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzArvRelativesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzArvRelativesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzArvRelativesTableMap::OM_CLASS;
            /** @var CareTzArvRelatives $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzArvRelativesTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzArvRelativesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzArvRelativesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzArvRelatives $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzArvRelativesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID);
            $criteria->addSelectColumn(CareTzArvRelativesTableMap::COL_RELATIVE_NAME);
            $criteria->addSelectColumn(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_RELATIVES_CODE_ID);
            $criteria->addSelectColumn(CareTzArvRelativesTableMap::COL_AGE);
            $criteria->addSelectColumn(CareTzArvRelativesTableMap::COL_HIV_STATUS);
            $criteria->addSelectColumn(CareTzArvRelativesTableMap::COL_HIV_CARE_STATUS);
            $criteria->addSelectColumn(CareTzArvRelativesTableMap::COL_RELATIVE_CTC_ID);
            $criteria->addSelectColumn(CareTzArvRelativesTableMap::COL_FACILITY_FILE_NO);
            $criteria->addSelectColumn(CareTzArvRelativesTableMap::COL_HISTORY);
        } else {
            $criteria->addSelectColumn($alias . '.care_tz_arv_registration_id');
            $criteria->addSelectColumn($alias . '.relative_name');
            $criteria->addSelectColumn($alias . '.care_tz_arv_relatives_code_id');
            $criteria->addSelectColumn($alias . '.age');
            $criteria->addSelectColumn($alias . '.hiv_status');
            $criteria->addSelectColumn($alias . '.hiv_care_status');
            $criteria->addSelectColumn($alias . '.relative_ctc_id');
            $criteria->addSelectColumn($alias . '.facility_file_no');
            $criteria->addSelectColumn($alias . '.history');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzArvRelativesTableMap::DATABASE_NAME)->getTable(CareTzArvRelativesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzArvRelativesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzArvRelativesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzArvRelativesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzArvRelatives or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzArvRelatives object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRelativesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzArvRelatives) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzArvRelativesTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CareTzArvRelativesTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CareTzArvRelativesTableMap::COL_RELATIVE_CTC_ID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CareTzArvRelativesTableMap::COL_FACILITY_FILE_NO, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = CareTzArvRelativesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzArvRelativesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzArvRelativesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_arv_relatives table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzArvRelativesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzArvRelatives or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzArvRelatives object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRelativesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzArvRelatives object
        }


        // Set the correct dbName
        $query = CareTzArvRelativesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzArvRelativesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzArvRelativesTableMap::buildTableMap();
