<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTechQuestions;
use CareMd\CareMd\CareTechQuestionsQuery;
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
 * This class defines the structure of the 'care_tech_questions' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTechQuestionsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTechQuestionsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tech_questions';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTechQuestions';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTechQuestions';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 19;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 19;

    /**
     * the column name for the batch_nr field
     */
    const COL_BATCH_NR = 'care_tech_questions.batch_nr';

    /**
     * the column name for the dept field
     */
    const COL_DEPT = 'care_tech_questions.dept';

    /**
     * the column name for the query field
     */
    const COL_QUERY = 'care_tech_questions.query';

    /**
     * the column name for the inquirer field
     */
    const COL_INQUIRER = 'care_tech_questions.inquirer';

    /**
     * the column name for the tphone field
     */
    const COL_TPHONE = 'care_tech_questions.tphone';

    /**
     * the column name for the tdate field
     */
    const COL_TDATE = 'care_tech_questions.tdate';

    /**
     * the column name for the ttime field
     */
    const COL_TTIME = 'care_tech_questions.ttime';

    /**
     * the column name for the tid field
     */
    const COL_TID = 'care_tech_questions.tid';

    /**
     * the column name for the reply field
     */
    const COL_REPLY = 'care_tech_questions.reply';

    /**
     * the column name for the answered field
     */
    const COL_ANSWERED = 'care_tech_questions.answered';

    /**
     * the column name for the ansby field
     */
    const COL_ANSBY = 'care_tech_questions.ansby';

    /**
     * the column name for the astamp field
     */
    const COL_ASTAMP = 'care_tech_questions.astamp';

    /**
     * the column name for the archive field
     */
    const COL_ARCHIVE = 'care_tech_questions.archive';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_tech_questions.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_tech_questions.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tech_questions.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_tech_questions.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_tech_questions.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_tech_questions.create_time';

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
        self::TYPE_PHPNAME       => array('BatchNr', 'Dept', 'Query', 'Inquirer', 'Tphone', 'Tdate', 'Ttime', 'Tid', 'Reply', 'Answered', 'Ansby', 'Astamp', 'Archive', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('batchNr', 'dept', 'query', 'inquirer', 'tphone', 'tdate', 'ttime', 'tid', 'reply', 'answered', 'ansby', 'astamp', 'archive', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareTechQuestionsTableMap::COL_BATCH_NR, CareTechQuestionsTableMap::COL_DEPT, CareTechQuestionsTableMap::COL_QUERY, CareTechQuestionsTableMap::COL_INQUIRER, CareTechQuestionsTableMap::COL_TPHONE, CareTechQuestionsTableMap::COL_TDATE, CareTechQuestionsTableMap::COL_TTIME, CareTechQuestionsTableMap::COL_TID, CareTechQuestionsTableMap::COL_REPLY, CareTechQuestionsTableMap::COL_ANSWERED, CareTechQuestionsTableMap::COL_ANSBY, CareTechQuestionsTableMap::COL_ASTAMP, CareTechQuestionsTableMap::COL_ARCHIVE, CareTechQuestionsTableMap::COL_STATUS, CareTechQuestionsTableMap::COL_HISTORY, CareTechQuestionsTableMap::COL_MODIFY_ID, CareTechQuestionsTableMap::COL_MODIFY_TIME, CareTechQuestionsTableMap::COL_CREATE_ID, CareTechQuestionsTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('batch_nr', 'dept', 'query', 'inquirer', 'tphone', 'tdate', 'ttime', 'tid', 'reply', 'answered', 'ansby', 'astamp', 'archive', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('BatchNr' => 0, 'Dept' => 1, 'Query' => 2, 'Inquirer' => 3, 'Tphone' => 4, 'Tdate' => 5, 'Ttime' => 6, 'Tid' => 7, 'Reply' => 8, 'Answered' => 9, 'Ansby' => 10, 'Astamp' => 11, 'Archive' => 12, 'Status' => 13, 'History' => 14, 'ModifyId' => 15, 'ModifyTime' => 16, 'CreateId' => 17, 'CreateTime' => 18, ),
        self::TYPE_CAMELNAME     => array('batchNr' => 0, 'dept' => 1, 'query' => 2, 'inquirer' => 3, 'tphone' => 4, 'tdate' => 5, 'ttime' => 6, 'tid' => 7, 'reply' => 8, 'answered' => 9, 'ansby' => 10, 'astamp' => 11, 'archive' => 12, 'status' => 13, 'history' => 14, 'modifyId' => 15, 'modifyTime' => 16, 'createId' => 17, 'createTime' => 18, ),
        self::TYPE_COLNAME       => array(CareTechQuestionsTableMap::COL_BATCH_NR => 0, CareTechQuestionsTableMap::COL_DEPT => 1, CareTechQuestionsTableMap::COL_QUERY => 2, CareTechQuestionsTableMap::COL_INQUIRER => 3, CareTechQuestionsTableMap::COL_TPHONE => 4, CareTechQuestionsTableMap::COL_TDATE => 5, CareTechQuestionsTableMap::COL_TTIME => 6, CareTechQuestionsTableMap::COL_TID => 7, CareTechQuestionsTableMap::COL_REPLY => 8, CareTechQuestionsTableMap::COL_ANSWERED => 9, CareTechQuestionsTableMap::COL_ANSBY => 10, CareTechQuestionsTableMap::COL_ASTAMP => 11, CareTechQuestionsTableMap::COL_ARCHIVE => 12, CareTechQuestionsTableMap::COL_STATUS => 13, CareTechQuestionsTableMap::COL_HISTORY => 14, CareTechQuestionsTableMap::COL_MODIFY_ID => 15, CareTechQuestionsTableMap::COL_MODIFY_TIME => 16, CareTechQuestionsTableMap::COL_CREATE_ID => 17, CareTechQuestionsTableMap::COL_CREATE_TIME => 18, ),
        self::TYPE_FIELDNAME     => array('batch_nr' => 0, 'dept' => 1, 'query' => 2, 'inquirer' => 3, 'tphone' => 4, 'tdate' => 5, 'ttime' => 6, 'tid' => 7, 'reply' => 8, 'answered' => 9, 'ansby' => 10, 'astamp' => 11, 'archive' => 12, 'status' => 13, 'history' => 14, 'modify_id' => 15, 'modify_time' => 16, 'create_id' => 17, 'create_time' => 18, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $this->setName('care_tech_questions');
        $this->setPhpName('CareTechQuestions');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTechQuestions');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('batch_nr', 'BatchNr', 'INTEGER', true, null, null);
        $this->addColumn('dept', 'Dept', 'VARCHAR', true, 60, '');
        $this->addColumn('query', 'Query', 'LONGVARCHAR', true, null, null);
        $this->addColumn('inquirer', 'Inquirer', 'VARCHAR', true, 25, '');
        $this->addColumn('tphone', 'Tphone', 'VARCHAR', true, 30, '');
        $this->addColumn('tdate', 'Tdate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('ttime', 'Ttime', 'TIME', true, null, '00:00:00');
        $this->addColumn('tid', 'Tid', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('reply', 'Reply', 'LONGVARCHAR', true, null, null);
        $this->addColumn('answered', 'Answered', 'BOOLEAN', true, 1, false);
        $this->addColumn('ansby', 'Ansby', 'VARCHAR', true, 25, '');
        $this->addColumn('astamp', 'Astamp', 'VARCHAR', true, 16, '');
        $this->addColumn('archive', 'Archive', 'BOOLEAN', true, 1, false);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 15, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareTechQuestionsTableMap::CLASS_DEFAULT : CareTechQuestionsTableMap::OM_CLASS;
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
     * @return array           (CareTechQuestions object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTechQuestionsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTechQuestionsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTechQuestionsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTechQuestionsTableMap::OM_CLASS;
            /** @var CareTechQuestions $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTechQuestionsTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTechQuestionsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTechQuestionsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTechQuestions $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTechQuestionsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_BATCH_NR);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_DEPT);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_QUERY);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_INQUIRER);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_TPHONE);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_TDATE);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_TTIME);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_TID);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_REPLY);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_ANSWERED);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_ANSBY);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_ASTAMP);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_ARCHIVE);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTechQuestionsTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.batch_nr');
            $criteria->addSelectColumn($alias . '.dept');
            $criteria->addSelectColumn($alias . '.query');
            $criteria->addSelectColumn($alias . '.inquirer');
            $criteria->addSelectColumn($alias . '.tphone');
            $criteria->addSelectColumn($alias . '.tdate');
            $criteria->addSelectColumn($alias . '.ttime');
            $criteria->addSelectColumn($alias . '.tid');
            $criteria->addSelectColumn($alias . '.reply');
            $criteria->addSelectColumn($alias . '.answered');
            $criteria->addSelectColumn($alias . '.ansby');
            $criteria->addSelectColumn($alias . '.astamp');
            $criteria->addSelectColumn($alias . '.archive');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTechQuestionsTableMap::DATABASE_NAME)->getTable(CareTechQuestionsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTechQuestionsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTechQuestionsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTechQuestionsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTechQuestions or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTechQuestions object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechQuestionsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTechQuestions) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTechQuestionsTableMap::DATABASE_NAME);
            $criteria->add(CareTechQuestionsTableMap::COL_BATCH_NR, (array) $values, Criteria::IN);
        }

        $query = CareTechQuestionsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTechQuestionsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTechQuestionsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tech_questions table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTechQuestionsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTechQuestions or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTechQuestions object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechQuestionsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTechQuestions object
        }

        if ($criteria->containsKey(CareTechQuestionsTableMap::COL_BATCH_NR) && $criteria->keyContainsValue(CareTechQuestionsTableMap::COL_BATCH_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTechQuestionsTableMap::COL_BATCH_NR.')');
        }


        // Set the correct dbName
        $query = CareTechQuestionsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTechQuestionsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTechQuestionsTableMap::buildTableMap();
