<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzArvEducation;
use CareMd\CareMd\CareTzArvEducationQuery;
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
 * This class defines the structure of the 'care_tz_arv_education' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzArvEducationTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzArvEducationTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_arv_education';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzArvEducation';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzArvEducation';

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
     * the column name for the care_tz_arv_education_id field
     */
    const COL_CARE_TZ_ARV_EDUCATION_ID = 'care_tz_arv_education.care_tz_arv_education_id';

    /**
     * the column name for the care_tz_arv_education_topic_id field
     */
    const COL_CARE_TZ_ARV_EDUCATION_TOPIC_ID = 'care_tz_arv_education.care_tz_arv_education_topic_id';

    /**
     * the column name for the care_tz_arv_registration_id field
     */
    const COL_CARE_TZ_ARV_REGISTRATION_ID = 'care_tz_arv_education.care_tz_arv_registration_id';

    /**
     * the column name for the comment field
     */
    const COL_COMMENT = 'care_tz_arv_education.comment';

    /**
     * the column name for the comment_date field
     */
    const COL_COMMENT_DATE = 'care_tz_arv_education.comment_date';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_tz_arv_education.create_id';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tz_arv_education.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_tz_arv_education.modify_time';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_tz_arv_education.history';

    /**
     * the column name for the care_tz_arv_education_group_id field
     */
    const COL_CARE_TZ_ARV_EDUCATION_GROUP_ID = 'care_tz_arv_education.care_tz_arv_education_group_id';

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
        self::TYPE_PHPNAME       => array('CareTzArvEducationId', 'CareTzArvEducationTopicId', 'CareTzArvRegistrationId', 'Comment', 'CommentDate', 'CreateId', 'ModifyId', 'ModifyTime', 'History', 'CareTzArvEducationGroupId', ),
        self::TYPE_CAMELNAME     => array('careTzArvEducationId', 'careTzArvEducationTopicId', 'careTzArvRegistrationId', 'comment', 'commentDate', 'createId', 'modifyId', 'modifyTime', 'history', 'careTzArvEducationGroupId', ),
        self::TYPE_COLNAME       => array(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID, CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_TOPIC_ID, CareTzArvEducationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, CareTzArvEducationTableMap::COL_COMMENT, CareTzArvEducationTableMap::COL_COMMENT_DATE, CareTzArvEducationTableMap::COL_CREATE_ID, CareTzArvEducationTableMap::COL_MODIFY_ID, CareTzArvEducationTableMap::COL_MODIFY_TIME, CareTzArvEducationTableMap::COL_HISTORY, CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_GROUP_ID, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_education_id', 'care_tz_arv_education_topic_id', 'care_tz_arv_registration_id', 'comment', 'comment_date', 'create_id', 'modify_id', 'modify_time', 'history', 'care_tz_arv_education_group_id', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('CareTzArvEducationId' => 0, 'CareTzArvEducationTopicId' => 1, 'CareTzArvRegistrationId' => 2, 'Comment' => 3, 'CommentDate' => 4, 'CreateId' => 5, 'ModifyId' => 6, 'ModifyTime' => 7, 'History' => 8, 'CareTzArvEducationGroupId' => 9, ),
        self::TYPE_CAMELNAME     => array('careTzArvEducationId' => 0, 'careTzArvEducationTopicId' => 1, 'careTzArvRegistrationId' => 2, 'comment' => 3, 'commentDate' => 4, 'createId' => 5, 'modifyId' => 6, 'modifyTime' => 7, 'history' => 8, 'careTzArvEducationGroupId' => 9, ),
        self::TYPE_COLNAME       => array(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID => 0, CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_TOPIC_ID => 1, CareTzArvEducationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID => 2, CareTzArvEducationTableMap::COL_COMMENT => 3, CareTzArvEducationTableMap::COL_COMMENT_DATE => 4, CareTzArvEducationTableMap::COL_CREATE_ID => 5, CareTzArvEducationTableMap::COL_MODIFY_ID => 6, CareTzArvEducationTableMap::COL_MODIFY_TIME => 7, CareTzArvEducationTableMap::COL_HISTORY => 8, CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_GROUP_ID => 9, ),
        self::TYPE_FIELDNAME     => array('care_tz_arv_education_id' => 0, 'care_tz_arv_education_topic_id' => 1, 'care_tz_arv_registration_id' => 2, 'comment' => 3, 'comment_date' => 4, 'create_id' => 5, 'modify_id' => 6, 'modify_time' => 7, 'history' => 8, 'care_tz_arv_education_group_id' => 9, ),
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
        $this->setName('care_tz_arv_education');
        $this->setPhpName('CareTzArvEducation');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzArvEducation');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('care_tz_arv_education_id', 'CareTzArvEducationId', 'INTEGER', true, 10, null);
        $this->addColumn('care_tz_arv_education_topic_id', 'CareTzArvEducationTopicId', 'BIGINT', true, null, null);
        $this->addColumn('care_tz_arv_registration_id', 'CareTzArvRegistrationId', 'BIGINT', true, null, null);
        $this->addColumn('comment', 'Comment', 'LONGVARCHAR', false, null, null);
        $this->addColumn('comment_date', 'CommentDate', 'DATE', false, null, null);
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', false, 35, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', false, 35, null);
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('care_tz_arv_education_group_id', 'CareTzArvEducationGroupId', 'INTEGER', true, 10, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEducationId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEducationId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEducationId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEducationId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEducationId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('CareTzArvEducationId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('CareTzArvEducationId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTzArvEducationTableMap::CLASS_DEFAULT : CareTzArvEducationTableMap::OM_CLASS;
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
     * @return array           (CareTzArvEducation object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzArvEducationTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzArvEducationTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzArvEducationTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzArvEducationTableMap::OM_CLASS;
            /** @var CareTzArvEducation $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzArvEducationTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzArvEducationTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzArvEducationTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzArvEducation $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzArvEducationTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID);
            $criteria->addSelectColumn(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_TOPIC_ID);
            $criteria->addSelectColumn(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID);
            $criteria->addSelectColumn(CareTzArvEducationTableMap::COL_COMMENT);
            $criteria->addSelectColumn(CareTzArvEducationTableMap::COL_COMMENT_DATE);
            $criteria->addSelectColumn(CareTzArvEducationTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTzArvEducationTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTzArvEducationTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTzArvEducationTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_GROUP_ID);
        } else {
            $criteria->addSelectColumn($alias . '.care_tz_arv_education_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_education_topic_id');
            $criteria->addSelectColumn($alias . '.care_tz_arv_registration_id');
            $criteria->addSelectColumn($alias . '.comment');
            $criteria->addSelectColumn($alias . '.comment_date');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.care_tz_arv_education_group_id');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzArvEducationTableMap::DATABASE_NAME)->getTable(CareTzArvEducationTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzArvEducationTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzArvEducationTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzArvEducationTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzArvEducation or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzArvEducation object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvEducationTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzArvEducation) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzArvEducationTableMap::DATABASE_NAME);
            $criteria->add(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID, (array) $values, Criteria::IN);
        }

        $query = CareTzArvEducationQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzArvEducationTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzArvEducationTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_arv_education table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzArvEducationQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzArvEducation or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzArvEducation object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvEducationTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzArvEducation object
        }

        if ($criteria->containsKey(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID) && $criteria->keyContainsValue(CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzArvEducationTableMap::COL_CARE_TZ_ARV_EDUCATION_ID.')');
        }


        // Set the correct dbName
        $query = CareTzArvEducationQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzArvEducationTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzArvEducationTableMap::buildTableMap();
