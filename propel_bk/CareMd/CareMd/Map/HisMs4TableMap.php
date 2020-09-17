<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\HisMs4;
use CareMd\CareMd\HisMs4Query;
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
 * This class defines the structure of the 'his_ms4' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class HisMs4TableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.HisMs4TableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'his_ms4';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\HisMs4';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.HisMs4';

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
     * the column name for the ID field
     */
    const COL_ID = 'his_ms4.ID';

    /**
     * the column name for the SampleID field
     */
    const COL_SAMPLEID = 'his_ms4.SampleID';

    /**
     * the column name for the DateNTime field
     */
    const COL_DATENTIME = 'his_ms4.DateNTime';

    /**
     * the column name for the WBC field
     */
    const COL_WBC = 'his_ms4.WBC';

    /**
     * the column name for the Lym field
     */
    const COL_LYM = 'his_ms4.Lym';

    /**
     * the column name for the Mon field
     */
    const COL_MON = 'his_ms4.Mon';

    /**
     * the column name for the Neu field
     */
    const COL_NEU = 'his_ms4.Neu';

    /**
     * the column name for the Eo field
     */
    const COL_EO = 'his_ms4.Eo';

    /**
     * the column name for the Ba field
     */
    const COL_BA = 'his_ms4.Ba';

    /**
     * the column name for the RBC field
     */
    const COL_RBC = 'his_ms4.RBC';

    /**
     * the column name for the MCV field
     */
    const COL_MCV = 'his_ms4.MCV';

    /**
     * the column name for the Hct field
     */
    const COL_HCT = 'his_ms4.Hct';

    /**
     * the column name for the MCH field
     */
    const COL_MCH = 'his_ms4.MCH';

    /**
     * the column name for the MCHC field
     */
    const COL_MCHC = 'his_ms4.MCHC';

    /**
     * the column name for the RDW field
     */
    const COL_RDW = 'his_ms4.RDW';

    /**
     * the column name for the Hb field
     */
    const COL_HB = 'his_ms4.Hb';

    /**
     * the column name for the THR field
     */
    const COL_THR = 'his_ms4.THR';

    /**
     * the column name for the MPV field
     */
    const COL_MPV = 'his_ms4.MPV';

    /**
     * the column name for the Pct field
     */
    const COL_PCT = 'his_ms4.Pct';

    /**
     * the column name for the PDW field
     */
    const COL_PDW = 'his_ms4.PDW';

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
        self::TYPE_PHPNAME       => array('Id', 'Sampleid', 'Datentime', 'Wbc', 'Lym', 'Mon', 'Neu', 'Eo', 'Ba', 'Rbc', 'Mcv', 'Hct', 'Mch', 'Mchc', 'Rdw', 'Hb', 'Thr', 'Mpv', 'Pct', 'Pdw', ),
        self::TYPE_CAMELNAME     => array('id', 'sampleid', 'datentime', 'wbc', 'lym', 'mon', 'neu', 'eo', 'ba', 'rbc', 'mcv', 'hct', 'mch', 'mchc', 'rdw', 'hb', 'thr', 'mpv', 'pct', 'pdw', ),
        self::TYPE_COLNAME       => array(HisMs4TableMap::COL_ID, HisMs4TableMap::COL_SAMPLEID, HisMs4TableMap::COL_DATENTIME, HisMs4TableMap::COL_WBC, HisMs4TableMap::COL_LYM, HisMs4TableMap::COL_MON, HisMs4TableMap::COL_NEU, HisMs4TableMap::COL_EO, HisMs4TableMap::COL_BA, HisMs4TableMap::COL_RBC, HisMs4TableMap::COL_MCV, HisMs4TableMap::COL_HCT, HisMs4TableMap::COL_MCH, HisMs4TableMap::COL_MCHC, HisMs4TableMap::COL_RDW, HisMs4TableMap::COL_HB, HisMs4TableMap::COL_THR, HisMs4TableMap::COL_MPV, HisMs4TableMap::COL_PCT, HisMs4TableMap::COL_PDW, ),
        self::TYPE_FIELDNAME     => array('ID', 'SampleID', 'DateNTime', 'WBC', 'Lym', 'Mon', 'Neu', 'Eo', 'Ba', 'RBC', 'MCV', 'Hct', 'MCH', 'MCHC', 'RDW', 'Hb', 'THR', 'MPV', 'Pct', 'PDW', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Sampleid' => 1, 'Datentime' => 2, 'Wbc' => 3, 'Lym' => 4, 'Mon' => 5, 'Neu' => 6, 'Eo' => 7, 'Ba' => 8, 'Rbc' => 9, 'Mcv' => 10, 'Hct' => 11, 'Mch' => 12, 'Mchc' => 13, 'Rdw' => 14, 'Hb' => 15, 'Thr' => 16, 'Mpv' => 17, 'Pct' => 18, 'Pdw' => 19, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'sampleid' => 1, 'datentime' => 2, 'wbc' => 3, 'lym' => 4, 'mon' => 5, 'neu' => 6, 'eo' => 7, 'ba' => 8, 'rbc' => 9, 'mcv' => 10, 'hct' => 11, 'mch' => 12, 'mchc' => 13, 'rdw' => 14, 'hb' => 15, 'thr' => 16, 'mpv' => 17, 'pct' => 18, 'pdw' => 19, ),
        self::TYPE_COLNAME       => array(HisMs4TableMap::COL_ID => 0, HisMs4TableMap::COL_SAMPLEID => 1, HisMs4TableMap::COL_DATENTIME => 2, HisMs4TableMap::COL_WBC => 3, HisMs4TableMap::COL_LYM => 4, HisMs4TableMap::COL_MON => 5, HisMs4TableMap::COL_NEU => 6, HisMs4TableMap::COL_EO => 7, HisMs4TableMap::COL_BA => 8, HisMs4TableMap::COL_RBC => 9, HisMs4TableMap::COL_MCV => 10, HisMs4TableMap::COL_HCT => 11, HisMs4TableMap::COL_MCH => 12, HisMs4TableMap::COL_MCHC => 13, HisMs4TableMap::COL_RDW => 14, HisMs4TableMap::COL_HB => 15, HisMs4TableMap::COL_THR => 16, HisMs4TableMap::COL_MPV => 17, HisMs4TableMap::COL_PCT => 18, HisMs4TableMap::COL_PDW => 19, ),
        self::TYPE_FIELDNAME     => array('ID' => 0, 'SampleID' => 1, 'DateNTime' => 2, 'WBC' => 3, 'Lym' => 4, 'Mon' => 5, 'Neu' => 6, 'Eo' => 7, 'Ba' => 8, 'RBC' => 9, 'MCV' => 10, 'Hct' => 11, 'MCH' => 12, 'MCHC' => 13, 'RDW' => 14, 'Hb' => 15, 'THR' => 16, 'MPV' => 17, 'Pct' => 18, 'PDW' => 19, ),
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
        $this->setName('his_ms4');
        $this->setPhpName('HisMs4');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\HisMs4');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('SampleID', 'Sampleid', 'VARCHAR', false, 8, null);
        $this->addColumn('DateNTime', 'Datentime', 'TIMESTAMP', false, null, null);
        $this->addColumn('WBC', 'Wbc', 'DECIMAL', false, 4, null);
        $this->addColumn('Lym', 'Lym', 'DECIMAL', false, 3, null);
        $this->addColumn('Mon', 'Mon', 'DECIMAL', false, 3, null);
        $this->addColumn('Neu', 'Neu', 'DECIMAL', false, 3, null);
        $this->addColumn('Eo', 'Eo', 'DECIMAL', false, 3, null);
        $this->addColumn('Ba', 'Ba', 'DECIMAL', false, 3, null);
        $this->addColumn('RBC', 'Rbc', 'DECIMAL', false, 4, null);
        $this->addColumn('MCV', 'Mcv', 'DECIMAL', false, 4, null);
        $this->addColumn('Hct', 'Hct', 'DECIMAL', false, 4, null);
        $this->addColumn('MCH', 'Mch', 'DECIMAL', false, 4, null);
        $this->addColumn('MCHC', 'Mchc', 'DECIMAL', false, 3, null);
        $this->addColumn('RDW', 'Rdw', 'DECIMAL', false, 3, null);
        $this->addColumn('Hb', 'Hb', 'DECIMAL', false, 3, null);
        $this->addColumn('THR', 'Thr', 'INTEGER', false, null, null);
        $this->addColumn('MPV', 'Mpv', 'DECIMAL', false, 3, null);
        $this->addColumn('Pct', 'Pct', 'DECIMAL', false, 4, null);
        $this->addColumn('PDW', 'Pdw', 'DECIMAL', false, 3, null);
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
        return $withPrefix ? HisMs4TableMap::CLASS_DEFAULT : HisMs4TableMap::OM_CLASS;
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
     * @return array           (HisMs4 object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = HisMs4TableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = HisMs4TableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + HisMs4TableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = HisMs4TableMap::OM_CLASS;
            /** @var HisMs4 $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            HisMs4TableMap::addInstanceToPool($obj, $key);
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
            $key = HisMs4TableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = HisMs4TableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var HisMs4 $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                HisMs4TableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(HisMs4TableMap::COL_ID);
            $criteria->addSelectColumn(HisMs4TableMap::COL_SAMPLEID);
            $criteria->addSelectColumn(HisMs4TableMap::COL_DATENTIME);
            $criteria->addSelectColumn(HisMs4TableMap::COL_WBC);
            $criteria->addSelectColumn(HisMs4TableMap::COL_LYM);
            $criteria->addSelectColumn(HisMs4TableMap::COL_MON);
            $criteria->addSelectColumn(HisMs4TableMap::COL_NEU);
            $criteria->addSelectColumn(HisMs4TableMap::COL_EO);
            $criteria->addSelectColumn(HisMs4TableMap::COL_BA);
            $criteria->addSelectColumn(HisMs4TableMap::COL_RBC);
            $criteria->addSelectColumn(HisMs4TableMap::COL_MCV);
            $criteria->addSelectColumn(HisMs4TableMap::COL_HCT);
            $criteria->addSelectColumn(HisMs4TableMap::COL_MCH);
            $criteria->addSelectColumn(HisMs4TableMap::COL_MCHC);
            $criteria->addSelectColumn(HisMs4TableMap::COL_RDW);
            $criteria->addSelectColumn(HisMs4TableMap::COL_HB);
            $criteria->addSelectColumn(HisMs4TableMap::COL_THR);
            $criteria->addSelectColumn(HisMs4TableMap::COL_MPV);
            $criteria->addSelectColumn(HisMs4TableMap::COL_PCT);
            $criteria->addSelectColumn(HisMs4TableMap::COL_PDW);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.SampleID');
            $criteria->addSelectColumn($alias . '.DateNTime');
            $criteria->addSelectColumn($alias . '.WBC');
            $criteria->addSelectColumn($alias . '.Lym');
            $criteria->addSelectColumn($alias . '.Mon');
            $criteria->addSelectColumn($alias . '.Neu');
            $criteria->addSelectColumn($alias . '.Eo');
            $criteria->addSelectColumn($alias . '.Ba');
            $criteria->addSelectColumn($alias . '.RBC');
            $criteria->addSelectColumn($alias . '.MCV');
            $criteria->addSelectColumn($alias . '.Hct');
            $criteria->addSelectColumn($alias . '.MCH');
            $criteria->addSelectColumn($alias . '.MCHC');
            $criteria->addSelectColumn($alias . '.RDW');
            $criteria->addSelectColumn($alias . '.Hb');
            $criteria->addSelectColumn($alias . '.THR');
            $criteria->addSelectColumn($alias . '.MPV');
            $criteria->addSelectColumn($alias . '.Pct');
            $criteria->addSelectColumn($alias . '.PDW');
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
        return Propel::getServiceContainer()->getDatabaseMap(HisMs4TableMap::DATABASE_NAME)->getTable(HisMs4TableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(HisMs4TableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(HisMs4TableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new HisMs4TableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a HisMs4 or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or HisMs4 object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(HisMs4TableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\HisMs4) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(HisMs4TableMap::DATABASE_NAME);
            $criteria->add(HisMs4TableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = HisMs4Query::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            HisMs4TableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                HisMs4TableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the his_ms4 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return HisMs4Query::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a HisMs4 or Criteria object.
     *
     * @param mixed               $criteria Criteria or HisMs4 object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(HisMs4TableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from HisMs4 object
        }

        if ($criteria->containsKey(HisMs4TableMap::COL_ID) && $criteria->keyContainsValue(HisMs4TableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.HisMs4TableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = HisMs4Query::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // HisMs4TableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
HisMs4TableMap::buildTableMap();
