<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareAddressCitytown;
use CareMd\CareMd\CareAddressCitytownQuery;
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
 * This class defines the structure of the 'care_address_citytown' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareAddressCitytownTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareAddressCitytownTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_address_citytown';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareAddressCitytown';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareAddressCitytown';

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
    const COL_NR = 'care_address_citytown.nr';

    /**
     * the column name for the unece_modifier field
     */
    const COL_UNECE_MODIFIER = 'care_address_citytown.unece_modifier';

    /**
     * the column name for the unece_locode field
     */
    const COL_UNECE_LOCODE = 'care_address_citytown.unece_locode';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_address_citytown.name';

    /**
     * the column name for the zip_code field
     */
    const COL_ZIP_CODE = 'care_address_citytown.zip_code';

    /**
     * the column name for the iso_country_id field
     */
    const COL_ISO_COUNTRY_ID = 'care_address_citytown.iso_country_id';

    /**
     * the column name for the unece_locode_type field
     */
    const COL_UNECE_LOCODE_TYPE = 'care_address_citytown.unece_locode_type';

    /**
     * the column name for the unece_coordinates field
     */
    const COL_UNECE_COORDINATES = 'care_address_citytown.unece_coordinates';

    /**
     * the column name for the info_url field
     */
    const COL_INFO_URL = 'care_address_citytown.info_url';

    /**
     * the column name for the use_frequency field
     */
    const COL_USE_FREQUENCY = 'care_address_citytown.use_frequency';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_address_citytown.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_address_citytown.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_address_citytown.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_address_citytown.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_address_citytown.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_address_citytown.create_time';

    /**
     * the column name for the is_additional field
     */
    const COL_IS_ADDITIONAL = 'care_address_citytown.is_additional';

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
        self::TYPE_PHPNAME       => array('Nr', 'UneceModifier', 'UneceLocode', 'Name', 'ZipCode', 'IsoCountryId', 'UneceLocodeType', 'UneceCoordinates', 'InfoUrl', 'UseFrequency', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'IsAdditional', ),
        self::TYPE_CAMELNAME     => array('nr', 'uneceModifier', 'uneceLocode', 'name', 'zipCode', 'isoCountryId', 'uneceLocodeType', 'uneceCoordinates', 'infoUrl', 'useFrequency', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', 'isAdditional', ),
        self::TYPE_COLNAME       => array(CareAddressCitytownTableMap::COL_NR, CareAddressCitytownTableMap::COL_UNECE_MODIFIER, CareAddressCitytownTableMap::COL_UNECE_LOCODE, CareAddressCitytownTableMap::COL_NAME, CareAddressCitytownTableMap::COL_ZIP_CODE, CareAddressCitytownTableMap::COL_ISO_COUNTRY_ID, CareAddressCitytownTableMap::COL_UNECE_LOCODE_TYPE, CareAddressCitytownTableMap::COL_UNECE_COORDINATES, CareAddressCitytownTableMap::COL_INFO_URL, CareAddressCitytownTableMap::COL_USE_FREQUENCY, CareAddressCitytownTableMap::COL_STATUS, CareAddressCitytownTableMap::COL_HISTORY, CareAddressCitytownTableMap::COL_MODIFY_ID, CareAddressCitytownTableMap::COL_MODIFY_TIME, CareAddressCitytownTableMap::COL_CREATE_ID, CareAddressCitytownTableMap::COL_CREATE_TIME, CareAddressCitytownTableMap::COL_IS_ADDITIONAL, ),
        self::TYPE_FIELDNAME     => array('nr', 'unece_modifier', 'unece_locode', 'name', 'zip_code', 'iso_country_id', 'unece_locode_type', 'unece_coordinates', 'info_url', 'use_frequency', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'is_additional', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'UneceModifier' => 1, 'UneceLocode' => 2, 'Name' => 3, 'ZipCode' => 4, 'IsoCountryId' => 5, 'UneceLocodeType' => 6, 'UneceCoordinates' => 7, 'InfoUrl' => 8, 'UseFrequency' => 9, 'Status' => 10, 'History' => 11, 'ModifyId' => 12, 'ModifyTime' => 13, 'CreateId' => 14, 'CreateTime' => 15, 'IsAdditional' => 16, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'uneceModifier' => 1, 'uneceLocode' => 2, 'name' => 3, 'zipCode' => 4, 'isoCountryId' => 5, 'uneceLocodeType' => 6, 'uneceCoordinates' => 7, 'infoUrl' => 8, 'useFrequency' => 9, 'status' => 10, 'history' => 11, 'modifyId' => 12, 'modifyTime' => 13, 'createId' => 14, 'createTime' => 15, 'isAdditional' => 16, ),
        self::TYPE_COLNAME       => array(CareAddressCitytownTableMap::COL_NR => 0, CareAddressCitytownTableMap::COL_UNECE_MODIFIER => 1, CareAddressCitytownTableMap::COL_UNECE_LOCODE => 2, CareAddressCitytownTableMap::COL_NAME => 3, CareAddressCitytownTableMap::COL_ZIP_CODE => 4, CareAddressCitytownTableMap::COL_ISO_COUNTRY_ID => 5, CareAddressCitytownTableMap::COL_UNECE_LOCODE_TYPE => 6, CareAddressCitytownTableMap::COL_UNECE_COORDINATES => 7, CareAddressCitytownTableMap::COL_INFO_URL => 8, CareAddressCitytownTableMap::COL_USE_FREQUENCY => 9, CareAddressCitytownTableMap::COL_STATUS => 10, CareAddressCitytownTableMap::COL_HISTORY => 11, CareAddressCitytownTableMap::COL_MODIFY_ID => 12, CareAddressCitytownTableMap::COL_MODIFY_TIME => 13, CareAddressCitytownTableMap::COL_CREATE_ID => 14, CareAddressCitytownTableMap::COL_CREATE_TIME => 15, CareAddressCitytownTableMap::COL_IS_ADDITIONAL => 16, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'unece_modifier' => 1, 'unece_locode' => 2, 'name' => 3, 'zip_code' => 4, 'iso_country_id' => 5, 'unece_locode_type' => 6, 'unece_coordinates' => 7, 'info_url' => 8, 'use_frequency' => 9, 'status' => 10, 'history' => 11, 'modify_id' => 12, 'modify_time' => 13, 'create_id' => 14, 'create_time' => 15, 'is_additional' => 16, ),
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
        $this->setName('care_address_citytown');
        $this->setPhpName('CareAddressCitytown');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareAddressCitytown');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'SMALLINT', true, 8, null);
        $this->addColumn('unece_modifier', 'UneceModifier', 'CHAR', false, 2, null);
        $this->addColumn('unece_locode', 'UneceLocode', 'VARCHAR', false, 15, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 100, '');
        $this->addColumn('zip_code', 'ZipCode', 'VARCHAR', true, 25, '');
        $this->addColumn('iso_country_id', 'IsoCountryId', 'CHAR', true, 3, '');
        $this->addColumn('unece_locode_type', 'UneceLocodeType', 'TINYINT', false, 3, null);
        $this->addColumn('unece_coordinates', 'UneceCoordinates', 'VARCHAR', false, 25, null);
        $this->addColumn('info_url', 'InfoUrl', 'VARCHAR', false, 255, null);
        $this->addColumn('use_frequency', 'UseFrequency', 'BIGINT', true, null, 0);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('is_additional', 'IsAdditional', 'TINYINT', true, null, 0);
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
        return $withPrefix ? CareAddressCitytownTableMap::CLASS_DEFAULT : CareAddressCitytownTableMap::OM_CLASS;
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
     * @return array           (CareAddressCitytown object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareAddressCitytownTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareAddressCitytownTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareAddressCitytownTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareAddressCitytownTableMap::OM_CLASS;
            /** @var CareAddressCitytown $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareAddressCitytownTableMap::addInstanceToPool($obj, $key);
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
            $key = CareAddressCitytownTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareAddressCitytownTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareAddressCitytown $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareAddressCitytownTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_NR);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_UNECE_MODIFIER);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_UNECE_LOCODE);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_NAME);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_ZIP_CODE);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_ISO_COUNTRY_ID);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_UNECE_LOCODE_TYPE);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_UNECE_COORDINATES);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_INFO_URL);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_USE_FREQUENCY);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareAddressCitytownTableMap::COL_IS_ADDITIONAL);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.unece_modifier');
            $criteria->addSelectColumn($alias . '.unece_locode');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.zip_code');
            $criteria->addSelectColumn($alias . '.iso_country_id');
            $criteria->addSelectColumn($alias . '.unece_locode_type');
            $criteria->addSelectColumn($alias . '.unece_coordinates');
            $criteria->addSelectColumn($alias . '.info_url');
            $criteria->addSelectColumn($alias . '.use_frequency');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.is_additional');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareAddressCitytownTableMap::DATABASE_NAME)->getTable(CareAddressCitytownTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareAddressCitytownTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareAddressCitytownTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareAddressCitytownTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareAddressCitytown or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareAddressCitytown object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareAddressCitytownTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareAddressCitytown) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareAddressCitytownTableMap::DATABASE_NAME);
            $criteria->add(CareAddressCitytownTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareAddressCitytownQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareAddressCitytownTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareAddressCitytownTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_address_citytown table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareAddressCitytownQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareAddressCitytown or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareAddressCitytown object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareAddressCitytownTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareAddressCitytown object
        }

        if ($criteria->containsKey(CareAddressCitytownTableMap::COL_NR) && $criteria->keyContainsValue(CareAddressCitytownTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareAddressCitytownTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareAddressCitytownQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareAddressCitytownTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareAddressCitytownTableMap::buildTableMap();
