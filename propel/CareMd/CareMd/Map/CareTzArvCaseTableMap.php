<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzArvCase;
use CareMd\CareMd\CareTzArvCaseQuery;
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
 * This class defines the structure of the 'care_tz_arv_case' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzArvCaseTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzArvCaseTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_arv_case';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzArvCase';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzArvCase';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 19;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 19;

    /**
     * the column name for the care_tz_arv_case_id field
     */
    const COL_CARE_TZ_ARV_CASE_ID = 'care_tz_arv_case.care_tz_arv_case_id';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_tz_arv_case.pid';

    /**
     * the column name for the datetime_first_hivtest field
     */
    const COL_DATETIME_FIRST_HIVTEST = 'care_tz_arv_case.datetime_first_hivtest';

    /**
     * the column name for the datetime_start_arv field
     */
    const COL_DATETIME_START_ARV = 'care_tz_arv_case.datetime_start_arv';

    /**
     * the column name for the arv_pid field
     */
    const COL_ARV_PID = 'care_tz_arv_case.arv_pid';

    /**
     * the column name for the district field
     */
    const COL_DISTRICT = 'care_tz_arv_case.district';

    /**
     * the column name for the village field
     */
    const COL_VILLAGE = 'care_tz_arv_case.village';

    /**
     * the column name for the street field
     */
    const COL_STREET = 'care_tz_arv_case.street';

    /**
     * the column name for the balozi field
     */
    const COL_BALOZI = 'care_tz_arv_case.balozi';

    /**
     * the column name for the chairman_of_village field
     */
    const COL_CHAIRMAN_OF_VILLAGE = 'care_tz_arv_case.chairman_of_village';

    /**
     * the column name for the head_of_family field
     */
    const COL_HEAD_OF_FAMILY = 'care_tz_arv_case.head_of_family';

    /**
     * the column name for the name_of_secretary field
     */
    const COL_NAME_OF_SECRETARY = 'care_tz_arv_case.name_of_secretary';

    /**
     * the column name for the secretary_phone field
     */
    const COL_SECRETARY_PHONE = 'care_tz_arv_case.secretary_phone';

    /**
     * the column name for the secretary_adress field
     */
    const COL_SECRETARY_ADRESS = 'care_tz_arv_case.secretary_adress';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_tz_arv_case.history';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_tz_arv_case.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_tz_arv_case.create_time';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tz_arv_case.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_tz_arv_case.modify_time';

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
        self::TYPE_PHPNAME       => array('CareTzArvCaseId', 'Pid', 'DatetimeFirstHivtest', 'DatetimeStartArv', 'ArvPid', 'District', 'Village', 'Street', 'Balozi', 'ChairmanOfVillage', 'HeadOfFamily', 'NameOfSecretary', 'SecretaryPhone', 'SecretaryAdress', 'History', 'CreateId', 'CreateTime', 'ModifyId', 'ModifyTime', ),
        self::TYPE_CAMELNAME     => array('careTzArvCaseId', 'pid', 'datetimeFirstHivtest', 'datetimeStartArv', 'arvPid', 'district', 'village', 'street', 'balozi', 'chairmanOfVillage', 'headOfFamily', 'nameOfSecretary', 'secretaryPhone', 'secretaryAdress', 'history', 'createId', 'createTime', 'modifyId', 'modifyTime', ),
        self::TYPE_COLNAME       => array(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID, CareTzArvCaseTableMap::COL_PID, CareTzArvCaseTableMap::COL_DATETIME_FIRST_HIVTEST, CareTzArvCaseTableMap::COL_DATETIME_START_ARV, CareTzArvCaseTableMap::COL_ARV_PID, CareTzArvCaseTableMap::COL_DISTRICT, CareTzArvCaseTableMap::COL_VILLAGE, CareTzArvCaseTableMap::COL_STREET, CareTzArvCaseTableMap::COL_BALOZI, CareTzArvCaseTableMap::COL_CHAIRMAN_OF_VILLAGE, CareTzArvCaseTableMap::COL_HEAD_OF_FAMILY, CareTzArvCaseTableMap::COL_NAME_OF_SECRETARY, CareTzArvCaseTableMap::COL_SECRETARY_PHONE, CareTzArvCaseTableMap::COL_SECRETARY_ADRESS, CareTzArvCaseTableMap::COL_HISTORY, CareTzArvCaseTableMap::COL_CREATE_ID, CareTzArvCaseTableMap::COL_CREATE_TIME, CareTzArvCaseTableMap::COL_MODIFY_ID, CareTzArvCaseTableMap::COL_MODIFY_TIME, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_case_id', 'pid', 'datetime_first_hivtest', 'datetime_start_arv', 'arv_pid', 'district', 'village', 'street', 'balozi', 'chairman_of_village', 'head_of_family', 'name_of_secretary', 'secretary_phone', 'secretary_adress', 'history', 'create_id', 'create_time', 'modify_id', 'modify_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('CareTzArvCaseId' => 0, 'Pid' => 1, 'DatetimeFirstHivtest' => 2, 'DatetimeStartArv' => 3, 'ArvPid' => 4, 'District' => 5, 'Village' => 6, 'Street' => 7, 'Balozi' => 8, 'ChairmanOfVillage' => 9, 'HeadOfFamily' => 10, 'NameOfSecretary' => 11, 'SecretaryPhone' => 12, 'SecretaryAdress' => 13, 'History' => 14, 'CreateId' => 15, 'CreateTime' => 16, 'ModifyId' => 17, 'ModifyTime' => 18, ),
        self::TYPE_CAMELNAME     => array('careTzArvCaseId' => 0, 'pid' => 1, 'datetimeFirstHivtest' => 2, 'datetimeStartArv' => 3, 'arvPid' => 4, 'district' => 5, 'village' => 6, 'street' => 7, 'balozi' => 8, 'chairmanOfVillage' => 9, 'headOfFamily' => 10, 'nameOfSecretary' => 11, 'secretaryPhone' => 12, 'secretaryAdress' => 13, 'history' => 14, 'createId' => 15, 'createTime' => 16, 'modifyId' => 17, 'modifyTime' => 18, ),
        self::TYPE_COLNAME       => array(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID => 0, CareTzArvCaseTableMap::COL_PID => 1, CareTzArvCaseTableMap::COL_DATETIME_FIRST_HIVTEST => 2, CareTzArvCaseTableMap::COL_DATETIME_START_ARV => 3, CareTzArvCaseTableMap::COL_ARV_PID => 4, CareTzArvCaseTableMap::COL_DISTRICT => 5, CareTzArvCaseTableMap::COL_VILLAGE => 6, CareTzArvCaseTableMap::COL_STREET => 7, CareTzArvCaseTableMap::COL_BALOZI => 8, CareTzArvCaseTableMap::COL_CHAIRMAN_OF_VILLAGE => 9, CareTzArvCaseTableMap::COL_HEAD_OF_FAMILY => 10, CareTzArvCaseTableMap::COL_NAME_OF_SECRETARY => 11, CareTzArvCaseTableMap::COL_SECRETARY_PHONE => 12, CareTzArvCaseTableMap::COL_SECRETARY_ADRESS => 13, CareTzArvCaseTableMap::COL_HISTORY => 14, CareTzArvCaseTableMap::COL_CREATE_ID => 15, CareTzArvCaseTableMap::COL_CREATE_TIME => 16, CareTzArvCaseTableMap::COL_MODIFY_ID => 17, CareTzArvCaseTableMap::COL_MODIFY_TIME => 18, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_case_id' => 0, 'pid' => 1, 'datetime_first_hivtest' => 2, 'datetime_start_arv' => 3, 'arv_pid' => 4, 'district' => 5, 'village' => 6, 'street' => 7, 'balozi' => 8, 'chairman_of_village' => 9, 'head_of_family' => 10, 'name_of_secretary' => 11, 'secretary_phone' => 12, 'secretary_adress' => 13, 'history' => 14, 'create_id' => 15, 'create_time' => 16, 'modify_id' => 17, 'modify_time' => 18, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $this->setName('care_tz_arv_case');
        $this->setPhpName('CareTzArvCase');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzArvCase');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('care_tz_arv_case_id', 'CareTzArvCaseId', 'BIGINT', true, null, null);
        $this->addColumn('pid', 'Pid', 'INTEGER', true, null, null);
        $this->addColumn('datetime_first_hivtest', 'DatetimeFirstHivtest', 'TIMESTAMP', false, null, null);
        $this->addColumn('datetime_start_arv', 'DatetimeStartArv', 'TIMESTAMP', false, null, null);
        $this->addColumn('arv_pid', 'ArvPid', 'BIGINT', true, null, null);
        $this->addColumn('district', 'District', 'VARCHAR', false, 80, null);
        $this->addColumn('village', 'Village', 'VARCHAR', false, 60, null);
        $this->addColumn('street', 'Street', 'VARCHAR', false, 60, null);
        $this->addColumn('balozi', 'Balozi', 'VARCHAR', false, 80, null);
        $this->addColumn('chairman_of_village', 'ChairmanOfVillage', 'VARCHAR', false, 80, null);
        $this->addColumn('head_of_family', 'HeadOfFamily', 'VARCHAR', false, 80, null);
        $this->addColumn('name_of_secretary', 'NameOfSecretary', 'VARCHAR', false, 80, null);
        $this->addColumn('secretary_phone', 'SecretaryPhone', 'VARCHAR', false, 10, null);
        $this->addColumn('secretary_adress', 'SecretaryAdress', 'VARCHAR', false, 100, null);
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
        $this->addColumn('create_id', 'CreateId', 'TIMESTAMP', false, null, null);
        $this->addColumn('create_time', 'CreateTime', 'BIGINT', false, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', false, 35, null);
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', false, null, 'CURRENT_TIMESTAMP');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvCaseId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvCaseId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvCaseId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvCaseId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvCaseId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvCaseId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('CareTzArvCaseId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzArvCaseTableMap::CLASS_DEFAULT : CareTzArvCaseTableMap::OM_CLASS;
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
     * @return array           (CareTzArvCase object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzArvCaseTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzArvCaseTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzArvCaseTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzArvCaseTableMap::OM_CLASS;
            /** @var CareTzArvCase $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzArvCaseTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzArvCaseTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzArvCaseTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzArvCase $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzArvCaseTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_PID);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_DATETIME_FIRST_HIVTEST);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_DATETIME_START_ARV);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_ARV_PID);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_DISTRICT);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_VILLAGE);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_STREET);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_BALOZI);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_CHAIRMAN_OF_VILLAGE);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_HEAD_OF_FAMILY);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_NAME_OF_SECRETARY);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_SECRETARY_PHONE);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_SECRETARY_ADRESS);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTzArvCaseTableMap::COL_MODIFY_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.care_tz_arv_case_id');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.datetime_first_hivtest');
            $criteria->addSelectColumn($alias . '.datetime_start_arv');
            $criteria->addSelectColumn($alias . '.arv_pid');
            $criteria->addSelectColumn($alias . '.district');
            $criteria->addSelectColumn($alias . '.village');
            $criteria->addSelectColumn($alias . '.street');
            $criteria->addSelectColumn($alias . '.balozi');
            $criteria->addSelectColumn($alias . '.chairman_of_village');
            $criteria->addSelectColumn($alias . '.head_of_family');
            $criteria->addSelectColumn($alias . '.name_of_secretary');
            $criteria->addSelectColumn($alias . '.secretary_phone');
            $criteria->addSelectColumn($alias . '.secretary_adress');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzArvCaseTableMap::DATABASE_NAME)->getTable(CareTzArvCaseTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzArvCaseTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzArvCaseTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzArvCaseTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzArvCase or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzArvCase object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvCaseTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzArvCase) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzArvCaseTableMap::DATABASE_NAME);
            $criteria->add(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzArvCaseQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzArvCaseTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzArvCaseTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_arv_case table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzArvCaseQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzArvCase or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzArvCase object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvCaseTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzArvCase object
        }

        if ($criteria->containsKey(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID) && $criteria->keyContainsValue(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID.')');
        }


        // Set the correct dbName
        $query = CareTzArvCaseQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzArvCaseTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzArvCaseTableMap::buildTableMap();
