<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareMailPrivateUsers;
use CareMd\CareMd\CareMailPrivateUsersQuery;
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
 * This class defines the structure of the 'care_mail_private_users' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareMailPrivateUsersTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareMailPrivateUsersTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_mail_private_users';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareMailPrivateUsers';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareMailPrivateUsers';

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
     * the column name for the user_name field
     */
    const COL_USER_NAME = 'care_mail_private_users.user_name';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'care_mail_private_users.email';

    /**
     * the column name for the alias field
     */
    const COL_ALIAS = 'care_mail_private_users.alias';

    /**
     * the column name for the pw field
     */
    const COL_PW = 'care_mail_private_users.pw';

    /**
     * the column name for the inbox field
     */
    const COL_INBOX = 'care_mail_private_users.inbox';

    /**
     * the column name for the sent field
     */
    const COL_SENT = 'care_mail_private_users.sent';

    /**
     * the column name for the drafts field
     */
    const COL_DRAFTS = 'care_mail_private_users.drafts';

    /**
     * the column name for the trash field
     */
    const COL_TRASH = 'care_mail_private_users.trash';

    /**
     * the column name for the lastcheck field
     */
    const COL_LASTCHECK = 'care_mail_private_users.lastcheck';

    /**
     * the column name for the lock_flag field
     */
    const COL_LOCK_FLAG = 'care_mail_private_users.lock_flag';

    /**
     * the column name for the addr_book field
     */
    const COL_ADDR_BOOK = 'care_mail_private_users.addr_book';

    /**
     * the column name for the addr_quick field
     */
    const COL_ADDR_QUICK = 'care_mail_private_users.addr_quick';

    /**
     * the column name for the secret_q field
     */
    const COL_SECRET_Q = 'care_mail_private_users.secret_q';

    /**
     * the column name for the secret_q_ans field
     */
    const COL_SECRET_Q_ANS = 'care_mail_private_users.secret_q_ans';

    /**
     * the column name for the public field
     */
    const COL_PUBLIC = 'care_mail_private_users.public';

    /**
     * the column name for the sig field
     */
    const COL_SIG = 'care_mail_private_users.sig';

    /**
     * the column name for the append_sig field
     */
    const COL_APPEND_SIG = 'care_mail_private_users.append_sig';

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
        self::TYPE_PHPNAME       => array('UserName', 'Email', 'Alias', 'Pw', 'Inbox', 'Sent', 'Drafts', 'Trash', 'Lastcheck', 'LockFlag', 'AddrBook', 'AddrQuick', 'SecretQ', 'SecretQAns', 'Public', 'Sig', 'AppendSig', ),
        self::TYPE_CAMELNAME     => array('userName', 'email', 'alias', 'pw', 'inbox', 'sent', 'drafts', 'trash', 'lastcheck', 'lockFlag', 'addrBook', 'addrQuick', 'secretQ', 'secretQAns', 'public', 'sig', 'appendSig', ),
        self::TYPE_COLNAME       => array(CareMailPrivateUsersTableMap::COL_USER_NAME, CareMailPrivateUsersTableMap::COL_EMAIL, CareMailPrivateUsersTableMap::COL_ALIAS, CareMailPrivateUsersTableMap::COL_PW, CareMailPrivateUsersTableMap::COL_INBOX, CareMailPrivateUsersTableMap::COL_SENT, CareMailPrivateUsersTableMap::COL_DRAFTS, CareMailPrivateUsersTableMap::COL_TRASH, CareMailPrivateUsersTableMap::COL_LASTCHECK, CareMailPrivateUsersTableMap::COL_LOCK_FLAG, CareMailPrivateUsersTableMap::COL_ADDR_BOOK, CareMailPrivateUsersTableMap::COL_ADDR_QUICK, CareMailPrivateUsersTableMap::COL_SECRET_Q, CareMailPrivateUsersTableMap::COL_SECRET_Q_ANS, CareMailPrivateUsersTableMap::COL_PUBLIC, CareMailPrivateUsersTableMap::COL_SIG, CareMailPrivateUsersTableMap::COL_APPEND_SIG, ),
        self::TYPE_FIELDNAME     => array('user_name', 'email', 'alias', 'pw', 'inbox', 'sent', 'drafts', 'trash', 'lastcheck', 'lock_flag', 'addr_book', 'addr_quick', 'secret_q', 'secret_q_ans', 'public', 'sig', 'append_sig', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('UserName' => 0, 'Email' => 1, 'Alias' => 2, 'Pw' => 3, 'Inbox' => 4, 'Sent' => 5, 'Drafts' => 6, 'Trash' => 7, 'Lastcheck' => 8, 'LockFlag' => 9, 'AddrBook' => 10, 'AddrQuick' => 11, 'SecretQ' => 12, 'SecretQAns' => 13, 'Public' => 14, 'Sig' => 15, 'AppendSig' => 16, ),
        self::TYPE_CAMELNAME     => array('userName' => 0, 'email' => 1, 'alias' => 2, 'pw' => 3, 'inbox' => 4, 'sent' => 5, 'drafts' => 6, 'trash' => 7, 'lastcheck' => 8, 'lockFlag' => 9, 'addrBook' => 10, 'addrQuick' => 11, 'secretQ' => 12, 'secretQAns' => 13, 'public' => 14, 'sig' => 15, 'appendSig' => 16, ),
        self::TYPE_COLNAME       => array(CareMailPrivateUsersTableMap::COL_USER_NAME => 0, CareMailPrivateUsersTableMap::COL_EMAIL => 1, CareMailPrivateUsersTableMap::COL_ALIAS => 2, CareMailPrivateUsersTableMap::COL_PW => 3, CareMailPrivateUsersTableMap::COL_INBOX => 4, CareMailPrivateUsersTableMap::COL_SENT => 5, CareMailPrivateUsersTableMap::COL_DRAFTS => 6, CareMailPrivateUsersTableMap::COL_TRASH => 7, CareMailPrivateUsersTableMap::COL_LASTCHECK => 8, CareMailPrivateUsersTableMap::COL_LOCK_FLAG => 9, CareMailPrivateUsersTableMap::COL_ADDR_BOOK => 10, CareMailPrivateUsersTableMap::COL_ADDR_QUICK => 11, CareMailPrivateUsersTableMap::COL_SECRET_Q => 12, CareMailPrivateUsersTableMap::COL_SECRET_Q_ANS => 13, CareMailPrivateUsersTableMap::COL_PUBLIC => 14, CareMailPrivateUsersTableMap::COL_SIG => 15, CareMailPrivateUsersTableMap::COL_APPEND_SIG => 16, ),
        self::TYPE_FIELDNAME     => array('user_name' => 0, 'email' => 1, 'alias' => 2, 'pw' => 3, 'inbox' => 4, 'sent' => 5, 'drafts' => 6, 'trash' => 7, 'lastcheck' => 8, 'lock_flag' => 9, 'addr_book' => 10, 'addr_quick' => 11, 'secret_q' => 12, 'secret_q_ans' => 13, 'public' => 14, 'sig' => 15, 'append_sig' => 16, ),
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
        $this->setName('care_mail_private_users');
        $this->setPhpName('CareMailPrivateUsers');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareMailPrivateUsers');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('user_name', 'UserName', 'VARCHAR', true, 60, '');
        $this->addPrimaryKey('email', 'Email', 'VARCHAR', true, 60, '');
        $this->addColumn('alias', 'Alias', 'VARCHAR', true, 60, '');
        $this->addColumn('pw', 'Pw', 'VARCHAR', true, 255, '');
        $this->addColumn('inbox', 'Inbox', 'CLOB', true, null, null);
        $this->addColumn('sent', 'Sent', 'CLOB', true, null, null);
        $this->addColumn('drafts', 'Drafts', 'CLOB', true, null, null);
        $this->addColumn('trash', 'Trash', 'CLOB', true, null, null);
        $this->addColumn('lastcheck', 'Lastcheck', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('lock_flag', 'LockFlag', 'TINYINT', true, null, 0);
        $this->addColumn('addr_book', 'AddrBook', 'LONGVARCHAR', true, null, null);
        $this->addColumn('addr_quick', 'AddrQuick', 'VARCHAR', true, 255, null);
        $this->addColumn('secret_q', 'SecretQ', 'VARCHAR', true, 255, null);
        $this->addColumn('secret_q_ans', 'SecretQAns', 'VARCHAR', true, 255, null);
        $this->addColumn('public', 'Public', 'TINYINT', true, null, 0);
        $this->addColumn('sig', 'Sig', 'VARCHAR', true, 255, null);
        $this->addColumn('append_sig', 'AppendSig', 'TINYINT', true, null, 0);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareMailPrivateUsersTableMap::CLASS_DEFAULT : CareMailPrivateUsersTableMap::OM_CLASS;
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
     * @return array           (CareMailPrivateUsers object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareMailPrivateUsersTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareMailPrivateUsersTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareMailPrivateUsersTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareMailPrivateUsersTableMap::OM_CLASS;
            /** @var CareMailPrivateUsers $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareMailPrivateUsersTableMap::addInstanceToPool($obj, $key);
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
            $key = CareMailPrivateUsersTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareMailPrivateUsersTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareMailPrivateUsers $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareMailPrivateUsersTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_USER_NAME);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_EMAIL);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_ALIAS);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_PW);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_INBOX);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_SENT);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_DRAFTS);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_TRASH);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_LASTCHECK);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_LOCK_FLAG);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_ADDR_BOOK);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_ADDR_QUICK);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_SECRET_Q);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_SECRET_Q_ANS);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_PUBLIC);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_SIG);
            $criteria->addSelectColumn(CareMailPrivateUsersTableMap::COL_APPEND_SIG);
        } else {
            $criteria->addSelectColumn($alias . '.user_name');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.alias');
            $criteria->addSelectColumn($alias . '.pw');
            $criteria->addSelectColumn($alias . '.inbox');
            $criteria->addSelectColumn($alias . '.sent');
            $criteria->addSelectColumn($alias . '.drafts');
            $criteria->addSelectColumn($alias . '.trash');
            $criteria->addSelectColumn($alias . '.lastcheck');
            $criteria->addSelectColumn($alias . '.lock_flag');
            $criteria->addSelectColumn($alias . '.addr_book');
            $criteria->addSelectColumn($alias . '.addr_quick');
            $criteria->addSelectColumn($alias . '.secret_q');
            $criteria->addSelectColumn($alias . '.secret_q_ans');
            $criteria->addSelectColumn($alias . '.public');
            $criteria->addSelectColumn($alias . '.sig');
            $criteria->addSelectColumn($alias . '.append_sig');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareMailPrivateUsersTableMap::DATABASE_NAME)->getTable(CareMailPrivateUsersTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareMailPrivateUsersTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareMailPrivateUsersTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareMailPrivateUsersTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareMailPrivateUsers or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareMailPrivateUsers object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateUsersTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareMailPrivateUsers) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareMailPrivateUsersTableMap::DATABASE_NAME);
            $criteria->add(CareMailPrivateUsersTableMap::COL_EMAIL, (array) $values, Criteria::IN);
        }

        $query = CareMailPrivateUsersQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareMailPrivateUsersTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareMailPrivateUsersTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_mail_private_users table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareMailPrivateUsersQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareMailPrivateUsers or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareMailPrivateUsers object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateUsersTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareMailPrivateUsers object
        }


        // Set the correct dbName
        $query = CareMailPrivateUsersQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareMailPrivateUsersTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareMailPrivateUsersTableMap::buildTableMap();
