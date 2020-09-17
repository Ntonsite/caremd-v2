<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareOps301De;
use CareMd\CareMd\CareOps301DeQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'care_ops301_de' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareOps301DeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareOps301DeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_ops301_de';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareOps301De';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareOps301De';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the code field
     */
    const COL_CODE = 'care_ops301_de.code';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_ops301_de.description';

    /**
     * the column name for the inclusive field
     */
    const COL_INCLUSIVE = 'care_ops301_de.inclusive';

    /**
     * the column name for the exclusive field
     */
    const COL_EXCLUSIVE = 'care_ops301_de.exclusive';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_ops301_de.notes';

    /**
     * the column name for the std_code field
     */
    const COL_STD_CODE = 'care_ops301_de.std_code';

    /**
     * the column name for the sub_level field
     */
    const COL_SUB_LEVEL = 'care_ops301_de.sub_level';

    /**
     * the column name for the remarks field
     */
    const COL_REMARKS = 'care_ops301_de.remarks';

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
        self::TYPE_PHPNAME       => array('Code', 'Description', 'Inclusive', 'Exclusive', 'Notes', 'StdCode', 'SubLevel', 'Remarks', ),
        self::TYPE_CAMELNAME     => array('code', 'description', 'inclusive', 'exclusive', 'notes', 'stdCode', 'subLevel', 'remarks', ),
        self::TYPE_COLNAME       => array(CareOps301DeTableMap::COL_CODE, CareOps301DeTableMap::COL_DESCRIPTION, CareOps301DeTableMap::COL_INCLUSIVE, CareOps301DeTableMap::COL_EXCLUSIVE, CareOps301DeTableMap::COL_NOTES, CareOps301DeTableMap::COL_STD_CODE, CareOps301DeTableMap::COL_SUB_LEVEL, CareOps301DeTableMap::COL_REMARKS, ),
        self::TYPE_FIELDNAME     => array('code', 'description', 'inclusive', 'exclusive', 'notes', 'std_code', 'sub_level', 'remarks', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Code' => 0, 'Description' => 1, 'Inclusive' => 2, 'Exclusive' => 3, 'Notes' => 4, 'StdCode' => 5, 'SubLevel' => 6, 'Remarks' => 7, ),
        self::TYPE_CAMELNAME     => array('code' => 0, 'description' => 1, 'inclusive' => 2, 'exclusive' => 3, 'notes' => 4, 'stdCode' => 5, 'subLevel' => 6, 'remarks' => 7, ),
        self::TYPE_COLNAME       => array(CareOps301DeTableMap::COL_CODE => 0, CareOps301DeTableMap::COL_DESCRIPTION => 1, CareOps301DeTableMap::COL_INCLUSIVE => 2, CareOps301DeTableMap::COL_EXCLUSIVE => 3, CareOps301DeTableMap::COL_NOTES => 4, CareOps301DeTableMap::COL_STD_CODE => 5, CareOps301DeTableMap::COL_SUB_LEVEL => 6, CareOps301DeTableMap::COL_REMARKS => 7, ),
        self::TYPE_FIELDNAME     => array('code' => 0, 'description' => 1, 'inclusive' => 2, 'exclusive' => 3, 'notes' => 4, 'std_code' => 5, 'sub_level' => 6, 'remarks' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
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
        $this->setName('care_ops301_de');
        $this->setPhpName('CareOps301De');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareOps301De');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('code', 'Code', 'VARCHAR', true, 12, '');
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('inclusive', 'Inclusive', 'LONGVARCHAR', true, null, null);
        $this->addColumn('exclusive', 'Exclusive', 'LONGVARCHAR', true, null, null);
        $this->addColumn('notes', 'Notes', 'LONGVARCHAR', true, null, null);
        $this->addColumn('std_code', 'StdCode', 'CHAR', true, null, '');
        $this->addColumn('sub_level', 'SubLevel', 'TINYINT', true, null, 0);
        $this->addColumn('remarks', 'Remarks', 'LONGVARCHAR', true, null, null);
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
        return null;
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
        return '';
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
        return $withPrefix ? CareOps301DeTableMap::CLASS_DEFAULT : CareOps301DeTableMap::OM_CLASS;
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
     * @return array           (CareOps301De object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareOps301DeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareOps301DeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareOps301DeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareOps301DeTableMap::OM_CLASS;
            /** @var CareOps301De $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareOps301DeTableMap::addInstanceToPool($obj, $key);
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
            $key = CareOps301DeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareOps301DeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareOps301De $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareOps301DeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareOps301DeTableMap::COL_CODE);
            $criteria->addSelectColumn(CareOps301DeTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareOps301DeTableMap::COL_INCLUSIVE);
            $criteria->addSelectColumn(CareOps301DeTableMap::COL_EXCLUSIVE);
            $criteria->addSelectColumn(CareOps301DeTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareOps301DeTableMap::COL_STD_CODE);
            $criteria->addSelectColumn(CareOps301DeTableMap::COL_SUB_LEVEL);
            $criteria->addSelectColumn(CareOps301DeTableMap::COL_REMARKS);
        } else {
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.inclusive');
            $criteria->addSelectColumn($alias . '.exclusive');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.std_code');
            $criteria->addSelectColumn($alias . '.sub_level');
            $criteria->addSelectColumn($alias . '.remarks');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareOps301DeTableMap::DATABASE_NAME)->getTable(CareOps301DeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareOps301DeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareOps301DeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareOps301DeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareOps301De or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareOps301De object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareOps301DeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareOps301De) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The CareOps301De object has no primary key');
        }

        $query = CareOps301DeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareOps301DeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareOps301DeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_ops301_de table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareOps301DeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareOps301De or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareOps301De object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareOps301DeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareOps301De object
        }


        // Set the correct dbName
        $query = CareOps301DeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareOps301DeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareOps301DeTableMap::buildTableMap();
