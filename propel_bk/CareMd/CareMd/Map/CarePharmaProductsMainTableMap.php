<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CarePharmaProductsMain;
use CareMd\CareMd\CarePharmaProductsMainQuery;
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
 * This class defines the structure of the 'care_pharma_products_main' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CarePharmaProductsMainTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CarePharmaProductsMainTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_pharma_products_main';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CarePharmaProductsMain';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CarePharmaProductsMain';

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
     * the column name for the bestellnum field
     */
    const COL_BESTELLNUM = 'care_pharma_products_main.bestellnum';

    /**
     * the column name for the artikelnum field
     */
    const COL_ARTIKELNUM = 'care_pharma_products_main.artikelnum';

    /**
     * the column name for the industrynum field
     */
    const COL_INDUSTRYNUM = 'care_pharma_products_main.industrynum';

    /**
     * the column name for the artikelname field
     */
    const COL_ARTIKELNAME = 'care_pharma_products_main.artikelname';

    /**
     * the column name for the generic field
     */
    const COL_GENERIC = 'care_pharma_products_main.generic';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_pharma_products_main.description';

    /**
     * the column name for the packing field
     */
    const COL_PACKING = 'care_pharma_products_main.packing';

    /**
     * the column name for the minorder field
     */
    const COL_MINORDER = 'care_pharma_products_main.minorder';

    /**
     * the column name for the maxorder field
     */
    const COL_MAXORDER = 'care_pharma_products_main.maxorder';

    /**
     * the column name for the proorder field
     */
    const COL_PROORDER = 'care_pharma_products_main.proorder';

    /**
     * the column name for the picfile field
     */
    const COL_PICFILE = 'care_pharma_products_main.picfile';

    /**
     * the column name for the encoder field
     */
    const COL_ENCODER = 'care_pharma_products_main.encoder';

    /**
     * the column name for the enc_date field
     */
    const COL_ENC_DATE = 'care_pharma_products_main.enc_date';

    /**
     * the column name for the enc_time field
     */
    const COL_ENC_TIME = 'care_pharma_products_main.enc_time';

    /**
     * the column name for the lock_flag field
     */
    const COL_LOCK_FLAG = 'care_pharma_products_main.lock_flag';

    /**
     * the column name for the medgroup field
     */
    const COL_MEDGROUP = 'care_pharma_products_main.medgroup';

    /**
     * the column name for the cave field
     */
    const COL_CAVE = 'care_pharma_products_main.cave';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_pharma_products_main.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_pharma_products_main.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_pharma_products_main.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_pharma_products_main.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_pharma_products_main.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_pharma_products_main.create_time';

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
        self::TYPE_PHPNAME       => array('Bestellnum', 'Artikelnum', 'Industrynum', 'Artikelname', 'Generic', 'Description', 'Packing', 'Minorder', 'Maxorder', 'Proorder', 'Picfile', 'Encoder', 'EncDate', 'EncTime', 'LockFlag', 'Medgroup', 'Cave', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('bestellnum', 'artikelnum', 'industrynum', 'artikelname', 'generic', 'description', 'packing', 'minorder', 'maxorder', 'proorder', 'picfile', 'encoder', 'encDate', 'encTime', 'lockFlag', 'medgroup', 'cave', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CarePharmaProductsMainTableMap::COL_BESTELLNUM, CarePharmaProductsMainTableMap::COL_ARTIKELNUM, CarePharmaProductsMainTableMap::COL_INDUSTRYNUM, CarePharmaProductsMainTableMap::COL_ARTIKELNAME, CarePharmaProductsMainTableMap::COL_GENERIC, CarePharmaProductsMainTableMap::COL_DESCRIPTION, CarePharmaProductsMainTableMap::COL_PACKING, CarePharmaProductsMainTableMap::COL_MINORDER, CarePharmaProductsMainTableMap::COL_MAXORDER, CarePharmaProductsMainTableMap::COL_PROORDER, CarePharmaProductsMainTableMap::COL_PICFILE, CarePharmaProductsMainTableMap::COL_ENCODER, CarePharmaProductsMainTableMap::COL_ENC_DATE, CarePharmaProductsMainTableMap::COL_ENC_TIME, CarePharmaProductsMainTableMap::COL_LOCK_FLAG, CarePharmaProductsMainTableMap::COL_MEDGROUP, CarePharmaProductsMainTableMap::COL_CAVE, CarePharmaProductsMainTableMap::COL_STATUS, CarePharmaProductsMainTableMap::COL_HISTORY, CarePharmaProductsMainTableMap::COL_MODIFY_ID, CarePharmaProductsMainTableMap::COL_MODIFY_TIME, CarePharmaProductsMainTableMap::COL_CREATE_ID, CarePharmaProductsMainTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('bestellnum', 'artikelnum', 'industrynum', 'artikelname', 'generic', 'description', 'packing', 'minorder', 'maxorder', 'proorder', 'picfile', 'encoder', 'enc_date', 'enc_time', 'lock_flag', 'medgroup', 'cave', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Bestellnum' => 0, 'Artikelnum' => 1, 'Industrynum' => 2, 'Artikelname' => 3, 'Generic' => 4, 'Description' => 5, 'Packing' => 6, 'Minorder' => 7, 'Maxorder' => 8, 'Proorder' => 9, 'Picfile' => 10, 'Encoder' => 11, 'EncDate' => 12, 'EncTime' => 13, 'LockFlag' => 14, 'Medgroup' => 15, 'Cave' => 16, 'Status' => 17, 'History' => 18, 'ModifyId' => 19, 'ModifyTime' => 20, 'CreateId' => 21, 'CreateTime' => 22, ),
        self::TYPE_CAMELNAME     => array('bestellnum' => 0, 'artikelnum' => 1, 'industrynum' => 2, 'artikelname' => 3, 'generic' => 4, 'description' => 5, 'packing' => 6, 'minorder' => 7, 'maxorder' => 8, 'proorder' => 9, 'picfile' => 10, 'encoder' => 11, 'encDate' => 12, 'encTime' => 13, 'lockFlag' => 14, 'medgroup' => 15, 'cave' => 16, 'status' => 17, 'history' => 18, 'modifyId' => 19, 'modifyTime' => 20, 'createId' => 21, 'createTime' => 22, ),
        self::TYPE_COLNAME       => array(CarePharmaProductsMainTableMap::COL_BESTELLNUM => 0, CarePharmaProductsMainTableMap::COL_ARTIKELNUM => 1, CarePharmaProductsMainTableMap::COL_INDUSTRYNUM => 2, CarePharmaProductsMainTableMap::COL_ARTIKELNAME => 3, CarePharmaProductsMainTableMap::COL_GENERIC => 4, CarePharmaProductsMainTableMap::COL_DESCRIPTION => 5, CarePharmaProductsMainTableMap::COL_PACKING => 6, CarePharmaProductsMainTableMap::COL_MINORDER => 7, CarePharmaProductsMainTableMap::COL_MAXORDER => 8, CarePharmaProductsMainTableMap::COL_PROORDER => 9, CarePharmaProductsMainTableMap::COL_PICFILE => 10, CarePharmaProductsMainTableMap::COL_ENCODER => 11, CarePharmaProductsMainTableMap::COL_ENC_DATE => 12, CarePharmaProductsMainTableMap::COL_ENC_TIME => 13, CarePharmaProductsMainTableMap::COL_LOCK_FLAG => 14, CarePharmaProductsMainTableMap::COL_MEDGROUP => 15, CarePharmaProductsMainTableMap::COL_CAVE => 16, CarePharmaProductsMainTableMap::COL_STATUS => 17, CarePharmaProductsMainTableMap::COL_HISTORY => 18, CarePharmaProductsMainTableMap::COL_MODIFY_ID => 19, CarePharmaProductsMainTableMap::COL_MODIFY_TIME => 20, CarePharmaProductsMainTableMap::COL_CREATE_ID => 21, CarePharmaProductsMainTableMap::COL_CREATE_TIME => 22, ),
        self::TYPE_FIELDNAME     => array('bestellnum' => 0, 'artikelnum' => 1, 'industrynum' => 2, 'artikelname' => 3, 'generic' => 4, 'description' => 5, 'packing' => 6, 'minorder' => 7, 'maxorder' => 8, 'proorder' => 9, 'picfile' => 10, 'encoder' => 11, 'enc_date' => 12, 'enc_time' => 13, 'lock_flag' => 14, 'medgroup' => 15, 'cave' => 16, 'status' => 17, 'history' => 18, 'modify_id' => 19, 'modify_time' => 20, 'create_id' => 21, 'create_time' => 22, ),
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
        $this->setName('care_pharma_products_main');
        $this->setPhpName('CarePharmaProductsMain');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CarePharmaProductsMain');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('bestellnum', 'Bestellnum', 'VARCHAR', true, 25, '');
        $this->addColumn('artikelnum', 'Artikelnum', 'VARCHAR', true, 255, null);
        $this->addColumn('industrynum', 'Industrynum', 'VARCHAR', true, 255, null);
        $this->addColumn('artikelname', 'Artikelname', 'VARCHAR', true, 255, null);
        $this->addColumn('generic', 'Generic', 'VARCHAR', true, 255, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('packing', 'Packing', 'VARCHAR', true, 255, null);
        $this->addColumn('minorder', 'Minorder', 'INTEGER', true, 4, 0);
        $this->addColumn('maxorder', 'Maxorder', 'INTEGER', true, 4, 0);
        $this->addColumn('proorder', 'Proorder', 'VARCHAR', true, 255, null);
        $this->addColumn('picfile', 'Picfile', 'VARCHAR', true, 255, null);
        $this->addColumn('encoder', 'Encoder', 'VARCHAR', true, 255, null);
        $this->addColumn('enc_date', 'EncDate', 'VARCHAR', true, 255, null);
        $this->addColumn('enc_time', 'EncTime', 'VARCHAR', true, 255, null);
        $this->addColumn('lock_flag', 'LockFlag', 'BOOLEAN', true, 1, false);
        $this->addColumn('medgroup', 'Medgroup', 'LONGVARCHAR', true, null, null);
        $this->addColumn('cave', 'Cave', 'VARCHAR', true, 255, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 20, '');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bestellnum', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bestellnum', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bestellnum', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bestellnum', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bestellnum', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bestellnum', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Bestellnum', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CarePharmaProductsMainTableMap::CLASS_DEFAULT : CarePharmaProductsMainTableMap::OM_CLASS;
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
     * @return array           (CarePharmaProductsMain object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CarePharmaProductsMainTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CarePharmaProductsMainTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CarePharmaProductsMainTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CarePharmaProductsMainTableMap::OM_CLASS;
            /** @var CarePharmaProductsMain $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CarePharmaProductsMainTableMap::addInstanceToPool($obj, $key);
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
            $key = CarePharmaProductsMainTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CarePharmaProductsMainTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CarePharmaProductsMain $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CarePharmaProductsMainTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_BESTELLNUM);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_ARTIKELNUM);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_INDUSTRYNUM);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_ARTIKELNAME);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_GENERIC);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_PACKING);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_MINORDER);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_MAXORDER);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_PROORDER);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_PICFILE);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_ENCODER);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_ENC_DATE);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_ENC_TIME);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_LOCK_FLAG);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_MEDGROUP);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_CAVE);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_STATUS);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CarePharmaProductsMainTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.bestellnum');
            $criteria->addSelectColumn($alias . '.artikelnum');
            $criteria->addSelectColumn($alias . '.industrynum');
            $criteria->addSelectColumn($alias . '.artikelname');
            $criteria->addSelectColumn($alias . '.generic');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.packing');
            $criteria->addSelectColumn($alias . '.minorder');
            $criteria->addSelectColumn($alias . '.maxorder');
            $criteria->addSelectColumn($alias . '.proorder');
            $criteria->addSelectColumn($alias . '.picfile');
            $criteria->addSelectColumn($alias . '.encoder');
            $criteria->addSelectColumn($alias . '.enc_date');
            $criteria->addSelectColumn($alias . '.enc_time');
            $criteria->addSelectColumn($alias . '.lock_flag');
            $criteria->addSelectColumn($alias . '.medgroup');
            $criteria->addSelectColumn($alias . '.cave');
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
        return Propel::getServiceContainer()->getDatabaseMap(CarePharmaProductsMainTableMap::DATABASE_NAME)->getTable(CarePharmaProductsMainTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CarePharmaProductsMainTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CarePharmaProductsMainTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CarePharmaProductsMainTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CarePharmaProductsMain or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CarePharmaProductsMain object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePharmaProductsMainTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CarePharmaProductsMain) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CarePharmaProductsMainTableMap::DATABASE_NAME);
            $criteria->add(CarePharmaProductsMainTableMap::COL_BESTELLNUM, (array) $values, Criteria::IN);
        }

        $query = CarePharmaProductsMainQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CarePharmaProductsMainTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CarePharmaProductsMainTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_pharma_products_main table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CarePharmaProductsMainQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CarePharmaProductsMain or Criteria object.
     *
     * @param mixed               $criteria Criteria or CarePharmaProductsMain object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePharmaProductsMainTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CarePharmaProductsMain object
        }


        // Set the correct dbName
        $query = CarePharmaProductsMainQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CarePharmaProductsMainTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CarePharmaProductsMainTableMap::buildTableMap();
