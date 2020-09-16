<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareClassFinancial;
use CareMd\CareMd\CareClassFinancialQuery;
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
 * This class defines the structure of the 'care_class_financial' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareClassFinancialTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareClassFinancialTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_class_financial';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareClassFinancial';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareClassFinancial';

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
     * the column name for the class_nr field
     */
    const COL_CLASS_NR = 'care_class_financial.class_nr';

    /**
     * the column name for the class_id field
     */
    const COL_CLASS_ID = 'care_class_financial.class_id';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'care_class_financial.type';

    /**
     * the column name for the code field
     */
    const COL_CODE = 'care_class_financial.code';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_class_financial.name';

    /**
     * the column name for the LD_var field
     */
    const COL_LD_VAR = 'care_class_financial.LD_var';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_class_financial.description';

    /**
     * the column name for the policy field
     */
    const COL_POLICY = 'care_class_financial.policy';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_class_financial.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_class_financial.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_class_financial.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_class_financial.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_class_financial.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_class_financial.create_time';

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
        self::TYPE_PHPNAME       => array('ClassNr', 'ClassId', 'Type', 'Code', 'Name', 'LdVar', 'Description', 'Policy', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('classNr', 'classId', 'type', 'code', 'name', 'ldVar', 'description', 'policy', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareClassFinancialTableMap::COL_CLASS_NR, CareClassFinancialTableMap::COL_CLASS_ID, CareClassFinancialTableMap::COL_TYPE, CareClassFinancialTableMap::COL_CODE, CareClassFinancialTableMap::COL_NAME, CareClassFinancialTableMap::COL_LD_VAR, CareClassFinancialTableMap::COL_DESCRIPTION, CareClassFinancialTableMap::COL_POLICY, CareClassFinancialTableMap::COL_STATUS, CareClassFinancialTableMap::COL_HISTORY, CareClassFinancialTableMap::COL_MODIFY_ID, CareClassFinancialTableMap::COL_MODIFY_TIME, CareClassFinancialTableMap::COL_CREATE_ID, CareClassFinancialTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('class_nr', 'class_id', 'type', 'code', 'name', 'LD_var', 'description', 'policy', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ClassNr' => 0, 'ClassId' => 1, 'Type' => 2, 'Code' => 3, 'Name' => 4, 'LdVar' => 5, 'Description' => 6, 'Policy' => 7, 'Status' => 8, 'History' => 9, 'ModifyId' => 10, 'ModifyTime' => 11, 'CreateId' => 12, 'CreateTime' => 13, ),
        self::TYPE_CAMELNAME     => array('classNr' => 0, 'classId' => 1, 'type' => 2, 'code' => 3, 'name' => 4, 'ldVar' => 5, 'description' => 6, 'policy' => 7, 'status' => 8, 'history' => 9, 'modifyId' => 10, 'modifyTime' => 11, 'createId' => 12, 'createTime' => 13, ),
        self::TYPE_COLNAME       => array(CareClassFinancialTableMap::COL_CLASS_NR => 0, CareClassFinancialTableMap::COL_CLASS_ID => 1, CareClassFinancialTableMap::COL_TYPE => 2, CareClassFinancialTableMap::COL_CODE => 3, CareClassFinancialTableMap::COL_NAME => 4, CareClassFinancialTableMap::COL_LD_VAR => 5, CareClassFinancialTableMap::COL_DESCRIPTION => 6, CareClassFinancialTableMap::COL_POLICY => 7, CareClassFinancialTableMap::COL_STATUS => 8, CareClassFinancialTableMap::COL_HISTORY => 9, CareClassFinancialTableMap::COL_MODIFY_ID => 10, CareClassFinancialTableMap::COL_MODIFY_TIME => 11, CareClassFinancialTableMap::COL_CREATE_ID => 12, CareClassFinancialTableMap::COL_CREATE_TIME => 13, ),
        self::TYPE_FIELDNAME     => array('class_nr' => 0, 'class_id' => 1, 'type' => 2, 'code' => 3, 'name' => 4, 'LD_var' => 5, 'description' => 6, 'policy' => 7, 'status' => 8, 'history' => 9, 'modify_id' => 10, 'modify_time' => 11, 'create_id' => 12, 'create_time' => 13, ),
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
        $this->setName('care_class_financial');
        $this->setPhpName('CareClassFinancial');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareClassFinancial');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('class_nr', 'ClassNr', 'SMALLINT', true, 5, null);
        $this->addColumn('class_id', 'ClassId', 'VARCHAR', true, 15, '0');
        $this->addColumn('type', 'Type', 'VARCHAR', true, 25, '0');
        $this->addColumn('code', 'Code', 'VARCHAR', true, 5, '');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 35, '');
        $this->addColumn('LD_var', 'LdVar', 'VARCHAR', true, 25, '');
        $this->addColumn('description', 'Description', 'VARCHAR', true, 255, '');
        $this->addColumn('policy', 'Policy', 'LONGVARCHAR', true, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ClassNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ClassNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ClassNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ClassNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ClassNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ClassNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('ClassNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareClassFinancialTableMap::CLASS_DEFAULT : CareClassFinancialTableMap::OM_CLASS;
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
     * @return array           (CareClassFinancial object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareClassFinancialTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareClassFinancialTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareClassFinancialTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareClassFinancialTableMap::OM_CLASS;
            /** @var CareClassFinancial $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareClassFinancialTableMap::addInstanceToPool($obj, $key);
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
            $key = CareClassFinancialTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareClassFinancialTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareClassFinancial $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareClassFinancialTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_CLASS_NR);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_CLASS_ID);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_TYPE);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_CODE);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_NAME);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_LD_VAR);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_POLICY);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareClassFinancialTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.class_nr');
            $criteria->addSelectColumn($alias . '.class_id');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.LD_var');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.policy');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareClassFinancialTableMap::DATABASE_NAME)->getTable(CareClassFinancialTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareClassFinancialTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareClassFinancialTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareClassFinancialTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareClassFinancial or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareClassFinancial object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareClassFinancialTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareClassFinancial) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareClassFinancialTableMap::DATABASE_NAME);
            $criteria->add(CareClassFinancialTableMap::COL_CLASS_NR, (array) $values, Criteria::IN);
        }

        $query = CareClassFinancialQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareClassFinancialTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareClassFinancialTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_class_financial table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareClassFinancialQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareClassFinancial or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareClassFinancial object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareClassFinancialTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareClassFinancial object
        }

        if ($criteria->containsKey(CareClassFinancialTableMap::COL_CLASS_NR) && $criteria->keyContainsValue(CareClassFinancialTableMap::COL_CLASS_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareClassFinancialTableMap::COL_CLASS_NR.')');
        }


        // Set the correct dbName
        $query = CareClassFinancialQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareClassFinancialTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareClassFinancialTableMap::buildTableMap();
