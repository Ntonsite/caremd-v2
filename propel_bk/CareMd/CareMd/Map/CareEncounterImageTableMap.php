<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterImage;
use CareMd\CareMd\CareEncounterImageQuery;
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
 * This class defines the structure of the 'care_encounter_image' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterImageTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterImageTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_image';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterImage';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterImage';

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
    const COL_NR = 'care_encounter_image.nr';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_image.encounter_nr';

    /**
     * the column name for the shot_date field
     */
    const COL_SHOT_DATE = 'care_encounter_image.shot_date';

    /**
     * the column name for the shot_nr field
     */
    const COL_SHOT_NR = 'care_encounter_image.shot_nr';

    /**
     * the column name for the mime_type field
     */
    const COL_MIME_TYPE = 'care_encounter_image.mime_type';

    /**
     * the column name for the upload_date field
     */
    const COL_UPLOAD_DATE = 'care_encounter_image.upload_date';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'care_encounter_image.notes';

    /**
     * the column name for the graphic_script field
     */
    const COL_GRAPHIC_SCRIPT = 'care_encounter_image.graphic_script';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_encounter_image.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_encounter_image.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_encounter_image.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_encounter_image.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_encounter_image.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_encounter_image.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'EncounterNr', 'ShotDate', 'ShotNr', 'MimeType', 'UploadDate', 'Notes', 'GraphicScript', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'encounterNr', 'shotDate', 'shotNr', 'mimeType', 'uploadDate', 'notes', 'graphicScript', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareEncounterImageTableMap::COL_NR, CareEncounterImageTableMap::COL_ENCOUNTER_NR, CareEncounterImageTableMap::COL_SHOT_DATE, CareEncounterImageTableMap::COL_SHOT_NR, CareEncounterImageTableMap::COL_MIME_TYPE, CareEncounterImageTableMap::COL_UPLOAD_DATE, CareEncounterImageTableMap::COL_NOTES, CareEncounterImageTableMap::COL_GRAPHIC_SCRIPT, CareEncounterImageTableMap::COL_STATUS, CareEncounterImageTableMap::COL_HISTORY, CareEncounterImageTableMap::COL_MODIFY_ID, CareEncounterImageTableMap::COL_MODIFY_TIME, CareEncounterImageTableMap::COL_CREATE_ID, CareEncounterImageTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'encounter_nr', 'shot_date', 'shot_nr', 'mime_type', 'upload_date', 'notes', 'graphic_script', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'EncounterNr' => 1, 'ShotDate' => 2, 'ShotNr' => 3, 'MimeType' => 4, 'UploadDate' => 5, 'Notes' => 6, 'GraphicScript' => 7, 'Status' => 8, 'History' => 9, 'ModifyId' => 10, 'ModifyTime' => 11, 'CreateId' => 12, 'CreateTime' => 13, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'encounterNr' => 1, 'shotDate' => 2, 'shotNr' => 3, 'mimeType' => 4, 'uploadDate' => 5, 'notes' => 6, 'graphicScript' => 7, 'status' => 8, 'history' => 9, 'modifyId' => 10, 'modifyTime' => 11, 'createId' => 12, 'createTime' => 13, ),
        self::TYPE_COLNAME       => array(CareEncounterImageTableMap::COL_NR => 0, CareEncounterImageTableMap::COL_ENCOUNTER_NR => 1, CareEncounterImageTableMap::COL_SHOT_DATE => 2, CareEncounterImageTableMap::COL_SHOT_NR => 3, CareEncounterImageTableMap::COL_MIME_TYPE => 4, CareEncounterImageTableMap::COL_UPLOAD_DATE => 5, CareEncounterImageTableMap::COL_NOTES => 6, CareEncounterImageTableMap::COL_GRAPHIC_SCRIPT => 7, CareEncounterImageTableMap::COL_STATUS => 8, CareEncounterImageTableMap::COL_HISTORY => 9, CareEncounterImageTableMap::COL_MODIFY_ID => 10, CareEncounterImageTableMap::COL_MODIFY_TIME => 11, CareEncounterImageTableMap::COL_CREATE_ID => 12, CareEncounterImageTableMap::COL_CREATE_TIME => 13, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'encounter_nr' => 1, 'shot_date' => 2, 'shot_nr' => 3, 'mime_type' => 4, 'upload_date' => 5, 'notes' => 6, 'graphic_script' => 7, 'status' => 8, 'history' => 9, 'modify_id' => 10, 'modify_time' => 11, 'create_id' => 12, 'create_time' => 13, ),
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
        $this->setName('care_encounter_image');
        $this->setPhpName('CareEncounterImage');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterImage');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'BIGINT', true, null, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'INTEGER', true, null, 0);
        $this->addColumn('shot_date', 'ShotDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('shot_nr', 'ShotNr', 'SMALLINT', true, null, 0);
        $this->addColumn('mime_type', 'MimeType', 'VARCHAR', true, 10, '');
        $this->addColumn('upload_date', 'UploadDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('notes', 'Notes', 'LONGVARCHAR', true, null, null);
        $this->addColumn('graphic_script', 'GraphicScript', 'LONGVARCHAR', true, null, null);
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
        return (string) $row[
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
        return $withPrefix ? CareEncounterImageTableMap::CLASS_DEFAULT : CareEncounterImageTableMap::OM_CLASS;
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
     * @return array           (CareEncounterImage object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterImageTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterImageTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterImageTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterImageTableMap::OM_CLASS;
            /** @var CareEncounterImage $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterImageTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterImageTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterImageTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterImage $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterImageTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_NR);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_SHOT_DATE);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_SHOT_NR);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_MIME_TYPE);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_UPLOAD_DATE);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_NOTES);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_GRAPHIC_SCRIPT);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareEncounterImageTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.shot_date');
            $criteria->addSelectColumn($alias . '.shot_nr');
            $criteria->addSelectColumn($alias . '.mime_type');
            $criteria->addSelectColumn($alias . '.upload_date');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.graphic_script');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterImageTableMap::DATABASE_NAME)->getTable(CareEncounterImageTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterImageTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterImageTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterImageTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterImage or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterImage object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterImageTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterImage) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterImageTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterImageTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterImageQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterImageTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterImageTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_image table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterImageQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterImage or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterImage object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterImageTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterImage object
        }

        if ($criteria->containsKey(CareEncounterImageTableMap::COL_NR) && $criteria->keyContainsValue(CareEncounterImageTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareEncounterImageTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareEncounterImageQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterImageTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterImageTableMap::buildTableMap();
