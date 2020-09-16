<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTypeImmunization;
use CareMd\CareMd\CareTypeImmunizationQuery;
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
 * This class defines the structure of the 'care_type_immunization' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTypeImmunizationTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTypeImmunizationTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_type_immunization';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTypeImmunization';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTypeImmunization';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_type_immunization.nr';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'care_type_immunization.type';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_type_immunization.name';

    /**
     * the column name for the LD_var field
     */
    const COL_LD_VAR = 'care_type_immunization.LD_var';

    /**
     * the column name for the period field
     */
    const COL_PERIOD = 'care_type_immunization.period';

    /**
     * the column name for the tolerance field
     */
    const COL_TOLERANCE = 'care_type_immunization.tolerance';

    /**
     * the column name for the dosage field
     */
    const COL_DOSAGE = 'care_type_immunization.dosage';

    /**
     * the column name for the medicine field
     */
    const COL_MEDICINE = 'care_type_immunization.medicine';

    /**
     * the column name for the titer field
     */
    const COL_TITER = 'care_type_immunization.titer';

    /**
     * the column name for the note field
     */
    const COL_NOTE = 'care_type_immunization.note';

    /**
     * the column name for the application field
     */
    const COL_APPLICATION = 'care_type_immunization.application';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_type_immunization.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_type_immunization.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_type_immunization.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_type_immunization.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_type_immunization.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_type_immunization.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'Type', 'Name', 'LdVar', 'Period', 'Tolerance', 'Dosage', 'Medicine', 'Titer', 'Note', 'Application', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'type', 'name', 'ldVar', 'period', 'tolerance', 'dosage', 'medicine', 'titer', 'note', 'application', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTypeImmunizationTableMap::COL_NR, CareTypeImmunizationTableMap::COL_TYPE, CareTypeImmunizationTableMap::COL_NAME, CareTypeImmunizationTableMap::COL_LD_VAR, CareTypeImmunizationTableMap::COL_PERIOD, CareTypeImmunizationTableMap::COL_TOLERANCE, CareTypeImmunizationTableMap::COL_DOSAGE, CareTypeImmunizationTableMap::COL_MEDICINE, CareTypeImmunizationTableMap::COL_TITER, CareTypeImmunizationTableMap::COL_NOTE, CareTypeImmunizationTableMap::COL_APPLICATION, CareTypeImmunizationTableMap::COL_STATUS, CareTypeImmunizationTableMap::COL_HISTORY, CareTypeImmunizationTableMap::COL_MODIFY_ID, CareTypeImmunizationTableMap::COL_MODIFY_TIME, CareTypeImmunizationTableMap::COL_CREATE_ID, CareTypeImmunizationTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'type', 'name', 'LD_var', 'period', 'tolerance', 'dosage', 'medicine', 'titer', 'note', 'application', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'Type' => 1, 'Name' => 2, 'LdVar' => 3, 'Period' => 4, 'Tolerance' => 5, 'Dosage' => 6, 'Medicine' => 7, 'Titer' => 8, 'Note' => 9, 'Application' => 10, 'Status' => 11, 'History' => 12, 'ModifyId' => 13, 'ModifyTime' => 14, 'CreateId' => 15, 'CreateTime' => 16, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'type' => 1, 'name' => 2, 'ldVar' => 3, 'period' => 4, 'tolerance' => 5, 'dosage' => 6, 'medicine' => 7, 'titer' => 8, 'note' => 9, 'application' => 10, 'status' => 11, 'history' => 12, 'modifyId' => 13, 'modifyTime' => 14, 'createId' => 15, 'createTime' => 16, ),
        self::TYPE_COLNAME       => array(CareTypeImmunizationTableMap::COL_NR => 0, CareTypeImmunizationTableMap::COL_TYPE => 1, CareTypeImmunizationTableMap::COL_NAME => 2, CareTypeImmunizationTableMap::COL_LD_VAR => 3, CareTypeImmunizationTableMap::COL_PERIOD => 4, CareTypeImmunizationTableMap::COL_TOLERANCE => 5, CareTypeImmunizationTableMap::COL_DOSAGE => 6, CareTypeImmunizationTableMap::COL_MEDICINE => 7, CareTypeImmunizationTableMap::COL_TITER => 8, CareTypeImmunizationTableMap::COL_NOTE => 9, CareTypeImmunizationTableMap::COL_APPLICATION => 10, CareTypeImmunizationTableMap::COL_STATUS => 11, CareTypeImmunizationTableMap::COL_HISTORY => 12, CareTypeImmunizationTableMap::COL_MODIFY_ID => 13, CareTypeImmunizationTableMap::COL_MODIFY_TIME => 14, CareTypeImmunizationTableMap::COL_CREATE_ID => 15, CareTypeImmunizationTableMap::COL_CREATE_TIME => 16, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'type' => 1, 'name' => 2, 'LD_var' => 3, 'period' => 4, 'tolerance' => 5, 'dosage' => 6, 'medicine' => 7, 'titer' => 8, 'note' => 9, 'application' => 10, 'status' => 11, 'history' => 12, 'modify_id' => 13, 'modify_time' => 14, 'create_id' => 15, 'create_time' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('care_type_immunization');
        $this->setPhpName('CareTypeImmunization');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTypeImmunization');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'SMALLINT', true, 5, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 20, '');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 20, '');
        $this->addColumn('LD_var', 'LdVar', 'VARCHAR', true, 35, '');
        $this->addColumn('period', 'Period', 'SMALLINT', false, null, 0);
        $this->addColumn('tolerance', 'Tolerance', 'SMALLINT', false, 3, 0);
        $this->addColumn('dosage', 'Dosage', 'LONGVARCHAR', false, null, null);
        $this->addColumn('medicine', 'Medicine', 'LONGVARCHAR', true, null, null);
        $this->addColumn('titer', 'Titer', 'LONGVARCHAR', false, null, null);
        $this->addColumn('note', 'Note', 'LONGVARCHAR', false, null, null);
        $this->addColumn('application', 'Application', 'TINYINT', false, 3, 0);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, 'normal');
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', false, 35, null);
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
        return $withPrefix ? CareTypeImmunizationTableMap::CLASS_DEFAULT : CareTypeImmunizationTableMap::OM_CLASS;
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
     * @return array           (CareTypeImmunization object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTypeImmunizationTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTypeImmunizationTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTypeImmunizationTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTypeImmunizationTableMap::OM_CLASS;
            /** @var CareTypeImmunization $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTypeImmunizationTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTypeImmunizationTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTypeImmunizationTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTypeImmunization $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTypeImmunizationTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_NR);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_TYPE);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_NAME);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_LD_VAR);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_PERIOD);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_TOLERANCE);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_DOSAGE);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_MEDICINE);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_TITER);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_NOTE);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_APPLICATION);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTypeImmunizationTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.LD_var');
            $criteria->addSelectColumn($alias . '.period');
            $criteria->addSelectColumn($alias . '.tolerance');
            $criteria->addSelectColumn($alias . '.dosage');
            $criteria->addSelectColumn($alias . '.medicine');
            $criteria->addSelectColumn($alias . '.titer');
            $criteria->addSelectColumn($alias . '.note');
            $criteria->addSelectColumn($alias . '.application');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTypeImmunizationTableMap::DATABASE_NAME)->getTable(CareTypeImmunizationTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTypeImmunizationTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTypeImmunizationTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTypeImmunizationTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTypeImmunization or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTypeImmunization object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeImmunizationTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTypeImmunization) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTypeImmunizationTableMap::DATABASE_NAME);
            $criteria->add(CareTypeImmunizationTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareTypeImmunizationQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTypeImmunizationTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTypeImmunizationTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_type_immunization table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTypeImmunizationQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTypeImmunization or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTypeImmunization object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeImmunizationTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTypeImmunization object
        }

        if ($criteria->containsKey(CareTypeImmunizationTableMap::COL_NR) && $criteria->keyContainsValue(CareTypeImmunizationTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTypeImmunizationTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareTypeImmunizationQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTypeImmunizationTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTypeImmunizationTableMap::buildTableMap();
