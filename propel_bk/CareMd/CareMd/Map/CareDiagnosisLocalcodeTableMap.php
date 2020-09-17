<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareDiagnosisLocalcode;
use CareMd\CareMd\CareDiagnosisLocalcodeQuery;
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
 * This class defines the structure of the 'care_diagnosis_localcode' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareDiagnosisLocalcodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareDiagnosisLocalcodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_diagnosis_localcode';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareDiagnosisLocalcode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareDiagnosisLocalcode';

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
     * the column name for the localcode field
     */
    const COL_LOCALCODE = 'care_diagnosis_localcode.localcode';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_diagnosis_localcode.description';

    /**
     * the column name for the class_sub field
     */
    const COL_CLASS_SUB = 'care_diagnosis_localcode.class_sub';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'care_diagnosis_localcode.type';

    /**
     * the column name for the inclusive field
     */
    const COL_INCLUSIVE = 'care_diagnosis_localcode.inclusive';

    /**
     * the column name for the exclusive field
     */
    const COL_EXCLUSIVE = 'care_diagnosis_localcode.exclusive';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_diagnosis_localcode.notes';

    /**
     * the column name for the std_code field
     */
    const COL_STD_CODE = 'care_diagnosis_localcode.std_code';

    /**
     * the column name for the sub_level field
     */
    const COL_SUB_LEVEL = 'care_diagnosis_localcode.sub_level';

    /**
     * the column name for the remarks field
     */
    const COL_REMARKS = 'care_diagnosis_localcode.remarks';

    /**
     * the column name for the extra_codes field
     */
    const COL_EXTRA_CODES = 'care_diagnosis_localcode.extra_codes';

    /**
     * the column name for the extra_subclass field
     */
    const COL_EXTRA_SUBCLASS = 'care_diagnosis_localcode.extra_subclass';

    /**
     * the column name for the search_keys field
     */
    const COL_SEARCH_KEYS = 'care_diagnosis_localcode.search_keys';

    /**
     * the column name for the use_frequency field
     */
    const COL_USE_FREQUENCY = 'care_diagnosis_localcode.use_frequency';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_diagnosis_localcode.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_diagnosis_localcode.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_diagnosis_localcode.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_diagnosis_localcode.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_diagnosis_localcode.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_diagnosis_localcode.create_time';

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
        self::TYPE_PHPNAME       => array('Localcode', 'Description', 'ClassSub', 'Type', 'Inclusive', 'Exclusive', 'Notes', 'StdCode', 'SubLevel', 'Remarks', 'ExtraCodes', 'ExtraSubclass', 'SearchKeys', 'UseFrequency', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('localcode', 'description', 'classSub', 'type', 'inclusive', 'exclusive', 'notes', 'stdCode', 'subLevel', 'remarks', 'extraCodes', 'extraSubclass', 'searchKeys', 'useFrequency', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE, CareDiagnosisLocalcodeTableMap::COL_DESCRIPTION, CareDiagnosisLocalcodeTableMap::COL_CLASS_SUB, CareDiagnosisLocalcodeTableMap::COL_TYPE, CareDiagnosisLocalcodeTableMap::COL_INCLUSIVE, CareDiagnosisLocalcodeTableMap::COL_EXCLUSIVE, CareDiagnosisLocalcodeTableMap::COL_NOTES, CareDiagnosisLocalcodeTableMap::COL_STD_CODE, CareDiagnosisLocalcodeTableMap::COL_SUB_LEVEL, CareDiagnosisLocalcodeTableMap::COL_REMARKS, CareDiagnosisLocalcodeTableMap::COL_EXTRA_CODES, CareDiagnosisLocalcodeTableMap::COL_EXTRA_SUBCLASS, CareDiagnosisLocalcodeTableMap::COL_SEARCH_KEYS, CareDiagnosisLocalcodeTableMap::COL_USE_FREQUENCY, CareDiagnosisLocalcodeTableMap::COL_STATUS, CareDiagnosisLocalcodeTableMap::COL_HISTORY, CareDiagnosisLocalcodeTableMap::COL_MODIFY_ID, CareDiagnosisLocalcodeTableMap::COL_MODIFY_TIME, CareDiagnosisLocalcodeTableMap::COL_CREATE_ID, CareDiagnosisLocalcodeTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('localcode', 'description', 'class_sub', 'type', 'inclusive', 'exclusive', 'notes', 'std_code', 'sub_level', 'remarks', 'extra_codes', 'extra_subclass', 'search_keys', 'use_frequency', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Localcode' => 0, 'Description' => 1, 'ClassSub' => 2, 'Type' => 3, 'Inclusive' => 4, 'Exclusive' => 5, 'Notes' => 6, 'StdCode' => 7, 'SubLevel' => 8, 'Remarks' => 9, 'ExtraCodes' => 10, 'ExtraSubclass' => 11, 'SearchKeys' => 12, 'UseFrequency' => 13, 'Status' => 14, 'History' => 15, 'ModifyId' => 16, 'ModifyTime' => 17, 'CreateId' => 18, 'CreateTime' => 19, ),
        self::TYPE_CAMELNAME     => array('localcode' => 0, 'description' => 1, 'classSub' => 2, 'type' => 3, 'inclusive' => 4, 'exclusive' => 5, 'notes' => 6, 'stdCode' => 7, 'subLevel' => 8, 'remarks' => 9, 'extraCodes' => 10, 'extraSubclass' => 11, 'searchKeys' => 12, 'useFrequency' => 13, 'status' => 14, 'history' => 15, 'modifyId' => 16, 'modifyTime' => 17, 'createId' => 18, 'createTime' => 19, ),
        self::TYPE_COLNAME       => array(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE => 0, CareDiagnosisLocalcodeTableMap::COL_DESCRIPTION => 1, CareDiagnosisLocalcodeTableMap::COL_CLASS_SUB => 2, CareDiagnosisLocalcodeTableMap::COL_TYPE => 3, CareDiagnosisLocalcodeTableMap::COL_INCLUSIVE => 4, CareDiagnosisLocalcodeTableMap::COL_EXCLUSIVE => 5, CareDiagnosisLocalcodeTableMap::COL_NOTES => 6, CareDiagnosisLocalcodeTableMap::COL_STD_CODE => 7, CareDiagnosisLocalcodeTableMap::COL_SUB_LEVEL => 8, CareDiagnosisLocalcodeTableMap::COL_REMARKS => 9, CareDiagnosisLocalcodeTableMap::COL_EXTRA_CODES => 10, CareDiagnosisLocalcodeTableMap::COL_EXTRA_SUBCLASS => 11, CareDiagnosisLocalcodeTableMap::COL_SEARCH_KEYS => 12, CareDiagnosisLocalcodeTableMap::COL_USE_FREQUENCY => 13, CareDiagnosisLocalcodeTableMap::COL_STATUS => 14, CareDiagnosisLocalcodeTableMap::COL_HISTORY => 15, CareDiagnosisLocalcodeTableMap::COL_MODIFY_ID => 16, CareDiagnosisLocalcodeTableMap::COL_MODIFY_TIME => 17, CareDiagnosisLocalcodeTableMap::COL_CREATE_ID => 18, CareDiagnosisLocalcodeTableMap::COL_CREATE_TIME => 19, ),
        self::TYPE_FIELDNAME     => array('localcode' => 0, 'description' => 1, 'class_sub' => 2, 'type' => 3, 'inclusive' => 4, 'exclusive' => 5, 'notes' => 6, 'std_code' => 7, 'sub_level' => 8, 'remarks' => 9, 'extra_codes' => 10, 'extra_subclass' => 11, 'search_keys' => 12, 'use_frequency' => 13, 'status' => 14, 'history' => 15, 'modify_id' => 16, 'modify_time' => 17, 'create_id' => 18, 'create_time' => 19, ),
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
        $this->setName('care_diagnosis_localcode');
        $this->setPhpName('CareDiagnosisLocalcode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareDiagnosisLocalcode');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('localcode', 'Localcode', 'VARCHAR', true, 12, '');
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('class_sub', 'ClassSub', 'VARCHAR', true, 5, '');
        $this->addColumn('type', 'Type', 'VARCHAR', true, 10, '');
        $this->addColumn('inclusive', 'Inclusive', 'LONGVARCHAR', true, null, null);
        $this->addColumn('exclusive', 'Exclusive', 'LONGVARCHAR', true, null, null);
        $this->addColumn('notes', 'Notes', 'LONGVARCHAR', true, null, null);
        $this->addColumn('std_code', 'StdCode', 'CHAR', true, null, '');
        $this->addColumn('sub_level', 'SubLevel', 'TINYINT', true, null, 0);
        $this->addColumn('remarks', 'Remarks', 'LONGVARCHAR', true, null, null);
        $this->addColumn('extra_codes', 'ExtraCodes', 'LONGVARCHAR', true, null, null);
        $this->addColumn('extra_subclass', 'ExtraSubclass', 'LONGVARCHAR', true, null, null);
        $this->addColumn('search_keys', 'SearchKeys', 'VARCHAR', true, 255, '');
        $this->addColumn('use_frequency', 'UseFrequency', 'INTEGER', true, null, 0);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Localcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Localcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Localcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Localcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Localcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Localcode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Localcode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareDiagnosisLocalcodeTableMap::CLASS_DEFAULT : CareDiagnosisLocalcodeTableMap::OM_CLASS;
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
     * @return array           (CareDiagnosisLocalcode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareDiagnosisLocalcodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareDiagnosisLocalcodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareDiagnosisLocalcodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareDiagnosisLocalcodeTableMap::OM_CLASS;
            /** @var CareDiagnosisLocalcode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareDiagnosisLocalcodeTableMap::addInstanceToPool($obj, $key);
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
            $key = CareDiagnosisLocalcodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareDiagnosisLocalcodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareDiagnosisLocalcode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareDiagnosisLocalcodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_CLASS_SUB);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_TYPE);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_INCLUSIVE);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_EXCLUSIVE);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_STD_CODE);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_SUB_LEVEL);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_REMARKS);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_EXTRA_CODES);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_EXTRA_SUBCLASS);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_SEARCH_KEYS);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_USE_FREQUENCY);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareDiagnosisLocalcodeTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.localcode');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.class_sub');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.inclusive');
            $criteria->addSelectColumn($alias . '.exclusive');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.std_code');
            $criteria->addSelectColumn($alias . '.sub_level');
            $criteria->addSelectColumn($alias . '.remarks');
            $criteria->addSelectColumn($alias . '.extra_codes');
            $criteria->addSelectColumn($alias . '.extra_subclass');
            $criteria->addSelectColumn($alias . '.search_keys');
            $criteria->addSelectColumn($alias . '.use_frequency');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareDiagnosisLocalcodeTableMap::DATABASE_NAME)->getTable(CareDiagnosisLocalcodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareDiagnosisLocalcodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareDiagnosisLocalcodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareDiagnosisLocalcode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareDiagnosisLocalcode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareDiagnosisLocalcode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE, (array) $values, Criteria::IN);
        }

        $query = CareDiagnosisLocalcodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareDiagnosisLocalcodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareDiagnosisLocalcodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_diagnosis_localcode table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareDiagnosisLocalcodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareDiagnosisLocalcode or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareDiagnosisLocalcode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareDiagnosisLocalcode object
        }


        // Set the correct dbName
        $query = CareDiagnosisLocalcodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareDiagnosisLocalcodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareDiagnosisLocalcodeTableMap::buildTableMap();
