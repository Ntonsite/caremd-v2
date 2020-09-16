<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareCategoryDiagnosis;
use CareMd\CareMd\CareCategoryDiagnosisQuery;
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
 * This class defines the structure of the 'care_category_diagnosis' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareCategoryDiagnosisTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareCategoryDiagnosisTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_category_diagnosis';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareCategoryDiagnosis';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareCategoryDiagnosis';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_category_diagnosis.nr';

    /**
     * the column name for the category field
     */
    const COL_CATEGORY = 'care_category_diagnosis.category';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_category_diagnosis.name';

    /**
     * the column name for the LD_var field
     */
    const COL_LD_VAR = 'care_category_diagnosis.LD_var';

    /**
     * the column name for the short_code field
     */
    const COL_SHORT_CODE = 'care_category_diagnosis.short_code';

    /**
     * the column name for the LD_var_short_code field
     */
    const COL_LD_VAR_SHORT_CODE = 'care_category_diagnosis.LD_var_short_code';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_category_diagnosis.description';

    /**
     * the column name for the hide_from field
     */
    const COL_HIDE_FROM = 'care_category_diagnosis.hide_from';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_category_diagnosis.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_category_diagnosis.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_category_diagnosis.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_category_diagnosis.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_category_diagnosis.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_category_diagnosis.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'Category', 'Name', 'LdVar', 'ShortCode', 'LdVarShortCode', 'Description', 'HideFrom', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'category', 'name', 'ldVar', 'shortCode', 'ldVarShortCode', 'description', 'hideFrom', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareCategoryDiagnosisTableMap::COL_NR, CareCategoryDiagnosisTableMap::COL_CATEGORY, CareCategoryDiagnosisTableMap::COL_NAME, CareCategoryDiagnosisTableMap::COL_LD_VAR, CareCategoryDiagnosisTableMap::COL_SHORT_CODE, CareCategoryDiagnosisTableMap::COL_LD_VAR_SHORT_CODE, CareCategoryDiagnosisTableMap::COL_DESCRIPTION, CareCategoryDiagnosisTableMap::COL_HIDE_FROM, CareCategoryDiagnosisTableMap::COL_STATUS, CareCategoryDiagnosisTableMap::COL_HISTORY, CareCategoryDiagnosisTableMap::COL_MODIFY_ID, CareCategoryDiagnosisTableMap::COL_MODIFY_TIME, CareCategoryDiagnosisTableMap::COL_CREATE_ID, CareCategoryDiagnosisTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'category', 'name', 'LD_var', 'short_code', 'LD_var_short_code', 'description', 'hide_from', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'Category' => 1, 'Name' => 2, 'LdVar' => 3, 'ShortCode' => 4, 'LdVarShortCode' => 5, 'Description' => 6, 'HideFrom' => 7, 'Status' => 8, 'History' => 9, 'ModifyId' => 10, 'ModifyTime' => 11, 'CreateId' => 12, 'CreateTime' => 13, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'category' => 1, 'name' => 2, 'ldVar' => 3, 'shortCode' => 4, 'ldVarShortCode' => 5, 'description' => 6, 'hideFrom' => 7, 'status' => 8, 'history' => 9, 'modifyId' => 10, 'modifyTime' => 11, 'createId' => 12, 'createTime' => 13, ),
        self::TYPE_COLNAME       => array(CareCategoryDiagnosisTableMap::COL_NR => 0, CareCategoryDiagnosisTableMap::COL_CATEGORY => 1, CareCategoryDiagnosisTableMap::COL_NAME => 2, CareCategoryDiagnosisTableMap::COL_LD_VAR => 3, CareCategoryDiagnosisTableMap::COL_SHORT_CODE => 4, CareCategoryDiagnosisTableMap::COL_LD_VAR_SHORT_CODE => 5, CareCategoryDiagnosisTableMap::COL_DESCRIPTION => 6, CareCategoryDiagnosisTableMap::COL_HIDE_FROM => 7, CareCategoryDiagnosisTableMap::COL_STATUS => 8, CareCategoryDiagnosisTableMap::COL_HISTORY => 9, CareCategoryDiagnosisTableMap::COL_MODIFY_ID => 10, CareCategoryDiagnosisTableMap::COL_MODIFY_TIME => 11, CareCategoryDiagnosisTableMap::COL_CREATE_ID => 12, CareCategoryDiagnosisTableMap::COL_CREATE_TIME => 13, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'category' => 1, 'name' => 2, 'LD_var' => 3, 'short_code' => 4, 'LD_var_short_code' => 5, 'description' => 6, 'hide_from' => 7, 'status' => 8, 'history' => 9, 'modify_id' => 10, 'modify_time' => 11, 'create_id' => 12, 'create_time' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $this->setName('care_category_diagnosis');
        $this->setPhpName('CareCategoryDiagnosis');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareCategoryDiagnosis');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'TINYINT', true, 3, 0);
        $this->addColumn('category', 'Category', 'VARCHAR', true, 35, '');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 35, '');
        $this->addColumn('LD_var', 'LdVar', 'VARCHAR', true, 35, '');
        $this->addColumn('short_code', 'ShortCode', 'CHAR', true, null, '');
        $this->addColumn('LD_var_short_code', 'LdVarShortCode', 'VARCHAR', true, 25, '');
        $this->addColumn('description', 'Description', 'VARCHAR', true, 255, '');
        $this->addColumn('hide_from', 'HideFrom', 'VARCHAR', true, 255, '0');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareCategoryDiagnosisTableMap::CLASS_DEFAULT : CareCategoryDiagnosisTableMap::OM_CLASS;
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
     * @return array           (CareCategoryDiagnosis object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareCategoryDiagnosisTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareCategoryDiagnosisTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareCategoryDiagnosisTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareCategoryDiagnosisTableMap::OM_CLASS;
            /** @var CareCategoryDiagnosis $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareCategoryDiagnosisTableMap::addInstanceToPool($obj, $key);
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
            $key = CareCategoryDiagnosisTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareCategoryDiagnosisTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareCategoryDiagnosis $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareCategoryDiagnosisTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_NR);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_CATEGORY);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_NAME);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_LD_VAR);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_SHORT_CODE);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_LD_VAR_SHORT_CODE);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_HIDE_FROM);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareCategoryDiagnosisTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.category');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.LD_var');
            $criteria->addSelectColumn($alias . '.short_code');
            $criteria->addSelectColumn($alias . '.LD_var_short_code');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.hide_from');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareCategoryDiagnosisTableMap::DATABASE_NAME)->getTable(CareCategoryDiagnosisTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareCategoryDiagnosisTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareCategoryDiagnosisTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareCategoryDiagnosisTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareCategoryDiagnosis or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareCategoryDiagnosis object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareCategoryDiagnosisTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareCategoryDiagnosis) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareCategoryDiagnosisTableMap::DATABASE_NAME);
            $criteria->add(CareCategoryDiagnosisTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareCategoryDiagnosisQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareCategoryDiagnosisTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareCategoryDiagnosisTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_category_diagnosis table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareCategoryDiagnosisQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareCategoryDiagnosis or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareCategoryDiagnosis object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareCategoryDiagnosisTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareCategoryDiagnosis object
        }


        // Set the correct dbName
        $query = CareCategoryDiagnosisQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareCategoryDiagnosisTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareCategoryDiagnosisTableMap::buildTableMap();
