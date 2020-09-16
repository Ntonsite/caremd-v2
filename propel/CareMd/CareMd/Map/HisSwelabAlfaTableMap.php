<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\HisSwelabAlfa;
use CareMd\CareMd\HisSwelabAlfaQuery;
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
 * This class defines the structure of the 'his_swelab_alfa' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class HisSwelabAlfaTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.HisSwelabAlfaTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'his_swelab_alfa';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\HisSwelabAlfa';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.HisSwelabAlfa';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 23;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 23;

    /**
     * the column name for the ID field
     */
    const COL_ID = 'his_swelab_alfa.ID';

    /**
     * the column name for the SampleID field
     */
    const COL_SAMPLEID = 'his_swelab_alfa.SampleID';

    /**
     * the column name for the DateNTime field
     */
    const COL_DATENTIME = 'his_swelab_alfa.DateNTime';

    /**
     * the column name for the WBC field
     */
    const COL_WBC = 'his_swelab_alfa.WBC';

    /**
     * the column name for the LYM field
     */
    const COL_LYM = 'his_swelab_alfa.LYM';

    /**
     * the column name for the LYMPa field
     */
    const COL_LYMPA = 'his_swelab_alfa.LYMPa';

    /**
     * the column name for the MID field
     */
    const COL_MID = 'his_swelab_alfa.MID';

    /**
     * the column name for the MIDPa field
     */
    const COL_MIDPA = 'his_swelab_alfa.MIDPa';

    /**
     * the column name for the GRA field
     */
    const COL_GRA = 'his_swelab_alfa.GRA';

    /**
     * the column name for the GRAPa field
     */
    const COL_GRAPA = 'his_swelab_alfa.GRAPa';

    /**
     * the column name for the HGB field
     */
    const COL_HGB = 'his_swelab_alfa.HGB';

    /**
     * the column name for the MCH field
     */
    const COL_MCH = 'his_swelab_alfa.MCH';

    /**
     * the column name for the MCHC field
     */
    const COL_MCHC = 'his_swelab_alfa.MCHC';

    /**
     * the column name for the RBC field
     */
    const COL_RBC = 'his_swelab_alfa.RBC';

    /**
     * the column name for the MCV field
     */
    const COL_MCV = 'his_swelab_alfa.MCV';

    /**
     * the column name for the HCT field
     */
    const COL_HCT = 'his_swelab_alfa.HCT';

    /**
     * the column name for the RDWa field
     */
    const COL_RDWA = 'his_swelab_alfa.RDWa';

    /**
     * the column name for the RDW field
     */
    const COL_RDW = 'his_swelab_alfa.RDW';

    /**
     * the column name for the PLT field
     */
    const COL_PLT = 'his_swelab_alfa.PLT';

    /**
     * the column name for the MPV field
     */
    const COL_MPV = 'his_swelab_alfa.MPV';

    /**
     * the column name for the PDW field
     */
    const COL_PDW = 'his_swelab_alfa.PDW';

    /**
     * the column name for the PCT field
     */
    const COL_PCT = 'his_swelab_alfa.PCT';

    /**
     * the column name for the LPCR field
     */
    const COL_LPCR = 'his_swelab_alfa.LPCR';

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
        self::TYPE_PHPNAME       => array('Id', 'Sampleid', 'Datentime', 'Wbc', 'Lym', 'Lympa', 'Mid', 'Midpa', 'Gra', 'Grapa', 'Hgb', 'Mch', 'Mchc', 'Rbc', 'Mcv', 'Hct', 'Rdwa', 'Rdw', 'Plt', 'Mpv', 'Pdw', 'Pct', 'Lpcr', ),
        self::TYPE_CAMELNAME     => array('id', 'sampleid', 'datentime', 'wbc', 'lym', 'lympa', 'mid', 'midpa', 'gra', 'grapa', 'hgb', 'mch', 'mchc', 'rbc', 'mcv', 'hct', 'rdwa', 'rdw', 'plt', 'mpv', 'pdw', 'pct', 'lpcr', ),
        self::TYPE_COLNAME       => array(HisSwelabAlfaTableMap::COL_ID, HisSwelabAlfaTableMap::COL_SAMPLEID, HisSwelabAlfaTableMap::COL_DATENTIME, HisSwelabAlfaTableMap::COL_WBC, HisSwelabAlfaTableMap::COL_LYM, HisSwelabAlfaTableMap::COL_LYMPA, HisSwelabAlfaTableMap::COL_MID, HisSwelabAlfaTableMap::COL_MIDPA, HisSwelabAlfaTableMap::COL_GRA, HisSwelabAlfaTableMap::COL_GRAPA, HisSwelabAlfaTableMap::COL_HGB, HisSwelabAlfaTableMap::COL_MCH, HisSwelabAlfaTableMap::COL_MCHC, HisSwelabAlfaTableMap::COL_RBC, HisSwelabAlfaTableMap::COL_MCV, HisSwelabAlfaTableMap::COL_HCT, HisSwelabAlfaTableMap::COL_RDWA, HisSwelabAlfaTableMap::COL_RDW, HisSwelabAlfaTableMap::COL_PLT, HisSwelabAlfaTableMap::COL_MPV, HisSwelabAlfaTableMap::COL_PDW, HisSwelabAlfaTableMap::COL_PCT, HisSwelabAlfaTableMap::COL_LPCR, ),
        self::TYPE_FIELDNAME     => array('ID', 'SampleID', 'DateNTime', 'WBC', 'LYM', 'LYMPa', 'MID', 'MIDPa', 'GRA', 'GRAPa', 'HGB', 'MCH', 'MCHC', 'RBC', 'MCV', 'HCT', 'RDWa', 'RDW', 'PLT', 'MPV', 'PDW', 'PCT', 'LPCR', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Sampleid' => 1, 'Datentime' => 2, 'Wbc' => 3, 'Lym' => 4, 'Lympa' => 5, 'Mid' => 6, 'Midpa' => 7, 'Gra' => 8, 'Grapa' => 9, 'Hgb' => 10, 'Mch' => 11, 'Mchc' => 12, 'Rbc' => 13, 'Mcv' => 14, 'Hct' => 15, 'Rdwa' => 16, 'Rdw' => 17, 'Plt' => 18, 'Mpv' => 19, 'Pdw' => 20, 'Pct' => 21, 'Lpcr' => 22, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'sampleid' => 1, 'datentime' => 2, 'wbc' => 3, 'lym' => 4, 'lympa' => 5, 'mid' => 6, 'midpa' => 7, 'gra' => 8, 'grapa' => 9, 'hgb' => 10, 'mch' => 11, 'mchc' => 12, 'rbc' => 13, 'mcv' => 14, 'hct' => 15, 'rdwa' => 16, 'rdw' => 17, 'plt' => 18, 'mpv' => 19, 'pdw' => 20, 'pct' => 21, 'lpcr' => 22, ),
        self::TYPE_COLNAME       => array(HisSwelabAlfaTableMap::COL_ID => 0, HisSwelabAlfaTableMap::COL_SAMPLEID => 1, HisSwelabAlfaTableMap::COL_DATENTIME => 2, HisSwelabAlfaTableMap::COL_WBC => 3, HisSwelabAlfaTableMap::COL_LYM => 4, HisSwelabAlfaTableMap::COL_LYMPA => 5, HisSwelabAlfaTableMap::COL_MID => 6, HisSwelabAlfaTableMap::COL_MIDPA => 7, HisSwelabAlfaTableMap::COL_GRA => 8, HisSwelabAlfaTableMap::COL_GRAPA => 9, HisSwelabAlfaTableMap::COL_HGB => 10, HisSwelabAlfaTableMap::COL_MCH => 11, HisSwelabAlfaTableMap::COL_MCHC => 12, HisSwelabAlfaTableMap::COL_RBC => 13, HisSwelabAlfaTableMap::COL_MCV => 14, HisSwelabAlfaTableMap::COL_HCT => 15, HisSwelabAlfaTableMap::COL_RDWA => 16, HisSwelabAlfaTableMap::COL_RDW => 17, HisSwelabAlfaTableMap::COL_PLT => 18, HisSwelabAlfaTableMap::COL_MPV => 19, HisSwelabAlfaTableMap::COL_PDW => 20, HisSwelabAlfaTableMap::COL_PCT => 21, HisSwelabAlfaTableMap::COL_LPCR => 22, ),
        self::TYPE_FIELDNAME     => array('ID' => 0, 'SampleID' => 1, 'DateNTime' => 2, 'WBC' => 3, 'LYM' => 4, 'LYMPa' => 5, 'MID' => 6, 'MIDPa' => 7, 'GRA' => 8, 'GRAPa' => 9, 'HGB' => 10, 'MCH' => 11, 'MCHC' => 12, 'RBC' => 13, 'MCV' => 14, 'HCT' => 15, 'RDWa' => 16, 'RDW' => 17, 'PLT' => 18, 'MPV' => 19, 'PDW' => 20, 'PCT' => 21, 'LPCR' => 22, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
        $this->setName('his_swelab_alfa');
        $this->setPhpName('HisSwelabAlfa');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\HisSwelabAlfa');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('SampleID', 'Sampleid', 'VARCHAR', false, 8, null);
        $this->addColumn('DateNTime', 'Datentime', 'TIMESTAMP', false, null, null);
        $this->addColumn('WBC', 'Wbc', 'DECIMAL', false, 3, null);
        $this->addColumn('LYM', 'Lym', 'DECIMAL', false, 3, null);
        $this->addColumn('LYMPa', 'Lympa', 'DECIMAL', false, 3, null);
        $this->addColumn('MID', 'Mid', 'DECIMAL', false, 3, null);
        $this->addColumn('MIDPa', 'Midpa', 'DECIMAL', false, 3, null);
        $this->addColumn('GRA', 'Gra', 'DECIMAL', false, 3, null);
        $this->addColumn('GRAPa', 'Grapa', 'DECIMAL', false, 3, null);
        $this->addColumn('HGB', 'Hgb', 'DECIMAL', false, 3, null);
        $this->addColumn('MCH', 'Mch', 'DECIMAL', false, 3, null);
        $this->addColumn('MCHC', 'Mchc', 'DECIMAL', false, 3, null);
        $this->addColumn('RBC', 'Rbc', 'DECIMAL', false, 3, null);
        $this->addColumn('MCV', 'Mcv', 'DECIMAL', false, 4, null);
        $this->addColumn('HCT', 'Hct', 'DECIMAL', false, 3, null);
        $this->addColumn('RDWa', 'Rdwa', 'DECIMAL', false, 4, null);
        $this->addColumn('RDW', 'Rdw', 'DECIMAL', false, 3, null);
        $this->addColumn('PLT', 'Plt', 'INTEGER', false, null, null);
        $this->addColumn('MPV', 'Mpv', 'DECIMAL', false, 3, null);
        $this->addColumn('PDW', 'Pdw', 'DECIMAL', false, 4, null);
        $this->addColumn('PCT', 'Pct', 'DECIMAL', false, 4, null);
        $this->addColumn('LPCR', 'Lpcr', 'DECIMAL', false, 4, null);
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
        return $withPrefix ? HisSwelabAlfaTableMap::CLASS_DEFAULT : HisSwelabAlfaTableMap::OM_CLASS;
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
     * @return array           (HisSwelabAlfa object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = HisSwelabAlfaTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = HisSwelabAlfaTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + HisSwelabAlfaTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = HisSwelabAlfaTableMap::OM_CLASS;
            /** @var HisSwelabAlfa $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            HisSwelabAlfaTableMap::addInstanceToPool($obj, $key);
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
            $key = HisSwelabAlfaTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = HisSwelabAlfaTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var HisSwelabAlfa $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                HisSwelabAlfaTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_ID);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_SAMPLEID);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_DATENTIME);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_WBC);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_LYM);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_LYMPA);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_MID);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_MIDPA);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_GRA);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_GRAPA);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_HGB);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_MCH);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_MCHC);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_RBC);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_MCV);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_HCT);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_RDWA);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_RDW);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_PLT);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_MPV);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_PDW);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_PCT);
            $criteria->addSelectColumn(HisSwelabAlfaTableMap::COL_LPCR);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.SampleID');
            $criteria->addSelectColumn($alias . '.DateNTime');
            $criteria->addSelectColumn($alias . '.WBC');
            $criteria->addSelectColumn($alias . '.LYM');
            $criteria->addSelectColumn($alias . '.LYMPa');
            $criteria->addSelectColumn($alias . '.MID');
            $criteria->addSelectColumn($alias . '.MIDPa');
            $criteria->addSelectColumn($alias . '.GRA');
            $criteria->addSelectColumn($alias . '.GRAPa');
            $criteria->addSelectColumn($alias . '.HGB');
            $criteria->addSelectColumn($alias . '.MCH');
            $criteria->addSelectColumn($alias . '.MCHC');
            $criteria->addSelectColumn($alias . '.RBC');
            $criteria->addSelectColumn($alias . '.MCV');
            $criteria->addSelectColumn($alias . '.HCT');
            $criteria->addSelectColumn($alias . '.RDWa');
            $criteria->addSelectColumn($alias . '.RDW');
            $criteria->addSelectColumn($alias . '.PLT');
            $criteria->addSelectColumn($alias . '.MPV');
            $criteria->addSelectColumn($alias . '.PDW');
            $criteria->addSelectColumn($alias . '.PCT');
            $criteria->addSelectColumn($alias . '.LPCR');
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
        return Propel::getServiceContainer()->getDatabaseMap(HisSwelabAlfaTableMap::DATABASE_NAME)->getTable(HisSwelabAlfaTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(HisSwelabAlfaTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(HisSwelabAlfaTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new HisSwelabAlfaTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a HisSwelabAlfa or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or HisSwelabAlfa object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(HisSwelabAlfaTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\HisSwelabAlfa) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(HisSwelabAlfaTableMap::DATABASE_NAME);
            $criteria->add(HisSwelabAlfaTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = HisSwelabAlfaQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            HisSwelabAlfaTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                HisSwelabAlfaTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the his_swelab_alfa table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return HisSwelabAlfaQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a HisSwelabAlfa or Criteria object.
     *
     * @param mixed               $criteria Criteria or HisSwelabAlfa object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(HisSwelabAlfaTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from HisSwelabAlfa object
        }

        if ($criteria->containsKey(HisSwelabAlfaTableMap::COL_ID) && $criteria->keyContainsValue(HisSwelabAlfaTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.HisSwelabAlfaTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = HisSwelabAlfaQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // HisSwelabAlfaTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
HisSwelabAlfaTableMap::buildTableMap();
