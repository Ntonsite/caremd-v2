<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareUsers;
use CareMd\CareMd\CareUsersQuery;
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
 * This class defines the structure of the 'care_users' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareUsersTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareUsersTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_users';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareUsers';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareUsers';

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
     * the column name for the name field
     */
    const COL_NAME = 'care_users.name';

    /**
     * the column name for the login_id field
     */
    const COL_LOGIN_ID = 'care_users.login_id';

    /**
     * the column name for the password field
     */
    const COL_PASSWORD = 'care_users.password';

    /**
     * the column name for the personell_nr field
     */
    const COL_PERSONELL_NR = 'care_users.personell_nr';

    /**
     * the column name for the lockflag field
     */
    const COL_LOCKFLAG = 'care_users.lockflag';

    /**
     * the column name for the role_id field
     */
    const COL_ROLE_ID = 'care_users.role_id';

    /**
     * the column name for the exc field
     */
    const COL_EXC = 'care_users.exc';

    /**
     * the column name for the s_date field
     */
    const COL_S_DATE = 'care_users.s_date';

    /**
     * the column name for the s_time field
     */
    const COL_S_TIME = 'care_users.s_time';

    /**
     * the column name for the expire_date field
     */
    const COL_EXPIRE_DATE = 'care_users.expire_date';

    /**
     * the column name for the expire_time field
     */
    const COL_EXPIRE_TIME = 'care_users.expire_time';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_users.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_users.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_users.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_users.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_users.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_users.create_time';

    /**
     * the column name for the theme_name field
     */
    const COL_THEME_NAME = 'care_users.theme_name';

    /**
     * the column name for the occupation field
     */
    const COL_OCCUPATION = 'care_users.occupation';

    /**
     * the column name for the tel_no field
     */
    const COL_TEL_NO = 'care_users.tel_no';

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
        self::TYPE_PHPNAME       => array('Name', 'LoginId', 'Password', 'PersonellNr', 'Lockflag', 'RoleId', 'Exc', 'SDate', 'STime', 'ExpireDate', 'ExpireTime', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'ThemeName', 'Occupation', 'TelNo', ),
        self::TYPE_CAMELNAME     => array('name', 'loginId', 'password', 'personellNr', 'lockflag', 'roleId', 'exc', 'sDate', 'sTime', 'expireDate', 'expireTime', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', 'themeName', 'occupation', 'telNo', ),
        self::TYPE_COLNAME       => array(CareUsersTableMap::COL_NAME, CareUsersTableMap::COL_LOGIN_ID, CareUsersTableMap::COL_PASSWORD, CareUsersTableMap::COL_PERSONELL_NR, CareUsersTableMap::COL_LOCKFLAG, CareUsersTableMap::COL_ROLE_ID, CareUsersTableMap::COL_EXC, CareUsersTableMap::COL_S_DATE, CareUsersTableMap::COL_S_TIME, CareUsersTableMap::COL_EXPIRE_DATE, CareUsersTableMap::COL_EXPIRE_TIME, CareUsersTableMap::COL_STATUS, CareUsersTableMap::COL_HISTORY, CareUsersTableMap::COL_MODIFY_ID, CareUsersTableMap::COL_MODIFY_TIME, CareUsersTableMap::COL_CREATE_ID, CareUsersTableMap::COL_CREATE_TIME, CareUsersTableMap::COL_THEME_NAME, CareUsersTableMap::COL_OCCUPATION, CareUsersTableMap::COL_TEL_NO, ),
        self::TYPE_FIELDNAME     => array('name', 'login_id', 'password', 'personell_nr', 'lockflag', 'role_id', 'exc', 's_date', 's_time', 'expire_date', 'expire_time', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'theme_name', 'occupation', 'tel_no', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Name' => 0, 'LoginId' => 1, 'Password' => 2, 'PersonellNr' => 3, 'Lockflag' => 4, 'RoleId' => 5, 'Exc' => 6, 'SDate' => 7, 'STime' => 8, 'ExpireDate' => 9, 'ExpireTime' => 10, 'Status' => 11, 'History' => 12, 'ModifyId' => 13, 'ModifyTime' => 14, 'CreateId' => 15, 'CreateTime' => 16, 'ThemeName' => 17, 'Occupation' => 18, 'TelNo' => 19, ),
        self::TYPE_CAMELNAME     => array('name' => 0, 'loginId' => 1, 'password' => 2, 'personellNr' => 3, 'lockflag' => 4, 'roleId' => 5, 'exc' => 6, 'sDate' => 7, 'sTime' => 8, 'expireDate' => 9, 'expireTime' => 10, 'status' => 11, 'history' => 12, 'modifyId' => 13, 'modifyTime' => 14, 'createId' => 15, 'createTime' => 16, 'themeName' => 17, 'occupation' => 18, 'telNo' => 19, ),
        self::TYPE_COLNAME       => array(CareUsersTableMap::COL_NAME => 0, CareUsersTableMap::COL_LOGIN_ID => 1, CareUsersTableMap::COL_PASSWORD => 2, CareUsersTableMap::COL_PERSONELL_NR => 3, CareUsersTableMap::COL_LOCKFLAG => 4, CareUsersTableMap::COL_ROLE_ID => 5, CareUsersTableMap::COL_EXC => 6, CareUsersTableMap::COL_S_DATE => 7, CareUsersTableMap::COL_S_TIME => 8, CareUsersTableMap::COL_EXPIRE_DATE => 9, CareUsersTableMap::COL_EXPIRE_TIME => 10, CareUsersTableMap::COL_STATUS => 11, CareUsersTableMap::COL_HISTORY => 12, CareUsersTableMap::COL_MODIFY_ID => 13, CareUsersTableMap::COL_MODIFY_TIME => 14, CareUsersTableMap::COL_CREATE_ID => 15, CareUsersTableMap::COL_CREATE_TIME => 16, CareUsersTableMap::COL_THEME_NAME => 17, CareUsersTableMap::COL_OCCUPATION => 18, CareUsersTableMap::COL_TEL_NO => 19, ),
        self::TYPE_FIELDNAME     => array('name' => 0, 'login_id' => 1, 'password' => 2, 'personell_nr' => 3, 'lockflag' => 4, 'role_id' => 5, 'exc' => 6, 's_date' => 7, 's_time' => 8, 'expire_date' => 9, 'expire_time' => 10, 'status' => 11, 'history' => 12, 'modify_id' => 13, 'modify_time' => 14, 'create_id' => 15, 'create_time' => 16, 'theme_name' => 17, 'occupation' => 18, 'tel_no' => 19, ),
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
        $this->setName('care_users');
        $this->setPhpName('CareUsers');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareUsers');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('name', 'Name', 'VARCHAR', true, 60, '');
        $this->addPrimaryKey('login_id', 'LoginId', 'VARCHAR', true, 35, '');
        $this->addColumn('password', 'Password', 'VARCHAR', false, 255, null);
        $this->addColumn('personell_nr', 'PersonellNr', 'INTEGER', true, 10, 0);
        $this->addColumn('lockflag', 'Lockflag', 'TINYINT', false, 3, 0);
        $this->addColumn('role_id', 'RoleId', 'INTEGER', true, 3, 0);
        $this->addColumn('exc', 'Exc', 'BOOLEAN', true, 1, false);
        $this->addColumn('s_date', 'SDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('s_time', 'STime', 'TIME', true, null, '00:00:00');
        $this->addColumn('expire_date', 'ExpireDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('expire_time', 'ExpireTime', 'TIME', true, null, '00:00:00');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 15, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('theme_name', 'ThemeName', 'VARCHAR', true, 40, null);
        $this->addColumn('occupation', 'Occupation', 'VARCHAR', false, 255, null);
        $this->addColumn('tel_no', 'TelNo', 'VARCHAR', false, 255, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('LoginId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('LoginId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('LoginId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('LoginId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('LoginId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('LoginId', TableMap::TYPE_PHPNAME, $indexType)];
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
                ? 1 + $offset
                : self::translateFieldName('LoginId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareUsersTableMap::CLASS_DEFAULT : CareUsersTableMap::OM_CLASS;
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
     * @return array           (CareUsers object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareUsersTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareUsersTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareUsersTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareUsersTableMap::OM_CLASS;
            /** @var CareUsers $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareUsersTableMap::addInstanceToPool($obj, $key);
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
            $key = CareUsersTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareUsersTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareUsers $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareUsersTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareUsersTableMap::COL_NAME);
            $criteria->addSelectColumn(CareUsersTableMap::COL_LOGIN_ID);
            $criteria->addSelectColumn(CareUsersTableMap::COL_PASSWORD);
            $criteria->addSelectColumn(CareUsersTableMap::COL_PERSONELL_NR);
            $criteria->addSelectColumn(CareUsersTableMap::COL_LOCKFLAG);
            $criteria->addSelectColumn(CareUsersTableMap::COL_ROLE_ID);
            $criteria->addSelectColumn(CareUsersTableMap::COL_EXC);
            $criteria->addSelectColumn(CareUsersTableMap::COL_S_DATE);
            $criteria->addSelectColumn(CareUsersTableMap::COL_S_TIME);
            $criteria->addSelectColumn(CareUsersTableMap::COL_EXPIRE_DATE);
            $criteria->addSelectColumn(CareUsersTableMap::COL_EXPIRE_TIME);
            $criteria->addSelectColumn(CareUsersTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareUsersTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareUsersTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareUsersTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareUsersTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareUsersTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareUsersTableMap::COL_THEME_NAME);
            $criteria->addSelectColumn(CareUsersTableMap::COL_OCCUPATION);
            $criteria->addSelectColumn(CareUsersTableMap::COL_TEL_NO);
        } else {
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.login_id');
            $criteria->addSelectColumn($alias . '.password');
            $criteria->addSelectColumn($alias . '.personell_nr');
            $criteria->addSelectColumn($alias . '.lockflag');
            $criteria->addSelectColumn($alias . '.role_id');
            $criteria->addSelectColumn($alias . '.exc');
            $criteria->addSelectColumn($alias . '.s_date');
            $criteria->addSelectColumn($alias . '.s_time');
            $criteria->addSelectColumn($alias . '.expire_date');
            $criteria->addSelectColumn($alias . '.expire_time');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.theme_name');
            $criteria->addSelectColumn($alias . '.occupation');
            $criteria->addSelectColumn($alias . '.tel_no');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareUsersTableMap::DATABASE_NAME)->getTable(CareUsersTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareUsersTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareUsersTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareUsersTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareUsers or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareUsers object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareUsersTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareUsers) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareUsersTableMap::DATABASE_NAME);
            $criteria->add(CareUsersTableMap::COL_LOGIN_ID, (array) $values, Criteria::IN);
        }

        $query = CareUsersQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareUsersTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareUsersTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_users table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareUsersQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareUsers or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareUsers object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareUsersTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareUsers object
        }


        // Set the correct dbName
        $query = CareUsersQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareUsersTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareUsersTableMap::buildTableMap();
