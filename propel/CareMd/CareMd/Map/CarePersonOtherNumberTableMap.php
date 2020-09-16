<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CarePersonOtherNumber;
use CareMd\CareMd\CarePersonOtherNumberQuery;
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
 * This class defines the structure of the 'care_person_other_number' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CarePersonOtherNumberTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CarePersonOtherNumberTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_person_other_number';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CarePersonOtherNumber';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CarePersonOtherNumber';

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
     * the column name for the nr field
     */
    const COL_NR = 'care_person_other_number.nr';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_person_other_number.pid';

    /**
     * the column name for the other_nr field
     */
    const COL_OTHER_NR = 'care_person_other_number.other_nr';

    /**
     * the column name for the org field
     */
    const COL_ORG = 'care_person_other_number.org';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_person_other_number.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_person_other_number.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_person_other_number.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_person_other_number.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_person_other_number.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_person_other_number.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'Pid', 'OtherNr', 'Org', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'pid', 'otherNr', 'org', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CarePersonOtherNumberTableMap::COL_NR, CarePersonOtherNumberTableMap::COL_PID, CarePersonOtherNumberTableMap::COL_OTHER_NR, CarePersonOtherNumberTableMap::COL_ORG, CarePersonOtherNumberTableMap::COL_STATUS, CarePersonOtherNumberTableMap::COL_HISTORY, CarePersonOtherNumberTableMap::COL_MODIFY_ID, CarePersonOtherNumberTableMap::COL_MODIFY_TIME, CarePersonOtherNumberTableMap::COL_CREATE_ID, CarePersonOtherNumberTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'pid', 'other_nr', 'org', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'Pid' => 1, 'OtherNr' => 2, 'Org' => 3, 'Status' => 4, 'History' => 5, 'ModifyId' => 6, 'ModifyTime' => 7, 'CreateId' => 8, 'CreateTime' => 9, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'pid' => 1, 'otherNr' => 2, 'org' => 3, 'status' => 4, 'history' => 5, 'modifyId' => 6, 'modifyTime' => 7, 'createId' => 8, 'createTime' => 9, ),
        self::TYPE_COLNAME       => array(CarePersonOtherNumberTableMap::COL_NR => 0, CarePersonOtherNumberTableMap::COL_PID => 1, CarePersonOtherNumberTableMap::COL_OTHER_NR => 2, CarePersonOtherNumberTableMap::COL_ORG => 3, CarePersonOtherNumberTableMap::COL_STATUS => 4, CarePersonOtherNumberTableMap::COL_HISTORY => 5, CarePersonOtherNumberTableMap::COL_MODIFY_ID => 6, CarePersonOtherNumberTableMap::COL_MODIFY_TIME => 7, CarePersonOtherNumberTableMap::COL_CREATE_ID => 8, CarePersonOtherNumberTableMap::COL_CREATE_TIME => 9, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'pid' => 1, 'other_nr' => 2, 'org' => 3, 'status' => 4, 'history' => 5, 'modify_id' => 6, 'modify_time' => 7, 'create_id' => 8, 'create_time' => 9, ),
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
        $this->setName('care_person_other_number');
        $this->setPhpName('CarePersonOtherNumber');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CarePersonOtherNumber');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, 10, null);
        $this->addColumn('pid', 'Pid', 'INTEGER', true, null, 0);
        $this->addColumn('other_nr', 'OtherNr', 'VARCHAR', true, 30, '');
        $this->addColumn('org', 'Org', 'VARCHAR', true, 35, '');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
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
        return $withPrefix ? CarePersonOtherNumberTableMap::CLASS_DEFAULT : CarePersonOtherNumberTableMap::OM_CLASS;
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
     * @return array           (CarePersonOtherNumber object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CarePersonOtherNumberTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CarePersonOtherNumberTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CarePersonOtherNumberTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CarePersonOtherNumberTableMap::OM_CLASS;
            /** @var CarePersonOtherNumber $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CarePersonOtherNumberTableMap::addInstanceToPool($obj, $key);
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
            $key = CarePersonOtherNumberTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CarePersonOtherNumberTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CarePersonOtherNumber $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CarePersonOtherNumberTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CarePersonOtherNumberTableMap::COL_NR);
            $criteria->addSelectColumn(CarePersonOtherNumberTableMap::COL_PID);
            $criteria->addSelectColumn(CarePersonOtherNumberTableMap::COL_OTHER_NR);
            $criteria->addSelectColumn(CarePersonOtherNumberTableMap::COL_ORG);
            $criteria->addSelectColumn(CarePersonOtherNumberTableMap::COL_STATUS);
            $criteria->addSelectColumn(CarePersonOtherNumberTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CarePersonOtherNumberTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CarePersonOtherNumberTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CarePersonOtherNumberTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CarePersonOtherNumberTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.other_nr');
            $criteria->addSelectColumn($alias . '.org');
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
        return Propel::getServiceContainer()->getDatabaseMap(CarePersonOtherNumberTableMap::DATABASE_NAME)->getTable(CarePersonOtherNumberTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CarePersonOtherNumberTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CarePersonOtherNumberTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CarePersonOtherNumberTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CarePersonOtherNumber or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CarePersonOtherNumber object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonOtherNumberTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CarePersonOtherNumber) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CarePersonOtherNumberTableMap::DATABASE_NAME);
            $criteria->add(CarePersonOtherNumberTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CarePersonOtherNumberQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CarePersonOtherNumberTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CarePersonOtherNumberTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_person_other_number table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CarePersonOtherNumberQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CarePersonOtherNumber or Criteria object.
     *
     * @param mixed               $criteria Criteria or CarePersonOtherNumber object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonOtherNumberTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CarePersonOtherNumber object
        }

        if ($criteria->containsKey(CarePersonOtherNumberTableMap::COL_NR) && $criteria->keyContainsValue(CarePersonOtherNumberTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CarePersonOtherNumberTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CarePersonOtherNumberQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CarePersonOtherNumberTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CarePersonOtherNumberTableMap::buildTableMap();
