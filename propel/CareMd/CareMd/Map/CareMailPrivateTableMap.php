<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareMailPrivate;
use CareMd\CareMd\CareMailPrivateQuery;
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
 * This class defines the structure of the 'care_mail_private' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareMailPrivateTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareMailPrivateTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_mail_private';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareMailPrivate';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareMailPrivate';

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
     * the column name for the recipient field
     */
    const COL_RECIPIENT = 'care_mail_private.recipient';

    /**
     * the column name for the sender field
     */
    const COL_SENDER = 'care_mail_private.sender';

    /**
     * the column name for the sender_ip field
     */
    const COL_SENDER_IP = 'care_mail_private.sender_ip';

    /**
     * the column name for the cc field
     */
    const COL_CC = 'care_mail_private.cc';

    /**
     * the column name for the bcc field
     */
    const COL_BCC = 'care_mail_private.bcc';

    /**
     * the column name for the subject field
     */
    const COL_SUBJECT = 'care_mail_private.subject';

    /**
     * the column name for the body field
     */
    const COL_BODY = 'care_mail_private.body';

    /**
     * the column name for the sign field
     */
    const COL_SIGN = 'care_mail_private.sign';

    /**
     * the column name for the ask4ack field
     */
    const COL_ASK4ACK = 'care_mail_private.ask4ack';

    /**
     * the column name for the reply2 field
     */
    const COL_REPLY2 = 'care_mail_private.reply2';

    /**
     * the column name for the attachment field
     */
    const COL_ATTACHMENT = 'care_mail_private.attachment';

    /**
     * the column name for the attach_type field
     */
    const COL_ATTACH_TYPE = 'care_mail_private.attach_type';

    /**
     * the column name for the read_flag field
     */
    const COL_READ_FLAG = 'care_mail_private.read_flag';

    /**
     * the column name for the mailgroup field
     */
    const COL_MAILGROUP = 'care_mail_private.mailgroup';

    /**
     * the column name for the maildir field
     */
    const COL_MAILDIR = 'care_mail_private.maildir';

    /**
     * the column name for the exec_level field
     */
    const COL_EXEC_LEVEL = 'care_mail_private.exec_level';

    /**
     * the column name for the exclude_addr field
     */
    const COL_EXCLUDE_ADDR = 'care_mail_private.exclude_addr';

    /**
     * the column name for the send_dt field
     */
    const COL_SEND_DT = 'care_mail_private.send_dt';

    /**
     * the column name for the send_stamp field
     */
    const COL_SEND_STAMP = 'care_mail_private.send_stamp';

    /**
     * the column name for the uid field
     */
    const COL_UID = 'care_mail_private.uid';

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
        self::TYPE_PHPNAME       => array('Recipient', 'Sender', 'SenderIp', 'Cc', 'Bcc', 'Subject', 'Body', 'Sign', 'Ask4ack', 'Reply2', 'Attachment', 'AttachType', 'ReadFlag', 'Mailgroup', 'Maildir', 'ExecLevel', 'ExcludeAddr', 'SendDt', 'SendStamp', 'Uid', ),
        self::TYPE_CAMELNAME     => array('recipient', 'sender', 'senderIp', 'cc', 'bcc', 'subject', 'body', 'sign', 'ask4ack', 'reply2', 'attachment', 'attachType', 'readFlag', 'mailgroup', 'maildir', 'execLevel', 'excludeAddr', 'sendDt', 'sendStamp', 'uid', ),
        self::TYPE_COLNAME       => array(CareMailPrivateTableMap::COL_RECIPIENT, CareMailPrivateTableMap::COL_SENDER, CareMailPrivateTableMap::COL_SENDER_IP, CareMailPrivateTableMap::COL_CC, CareMailPrivateTableMap::COL_BCC, CareMailPrivateTableMap::COL_SUBJECT, CareMailPrivateTableMap::COL_BODY, CareMailPrivateTableMap::COL_SIGN, CareMailPrivateTableMap::COL_ASK4ACK, CareMailPrivateTableMap::COL_REPLY2, CareMailPrivateTableMap::COL_ATTACHMENT, CareMailPrivateTableMap::COL_ATTACH_TYPE, CareMailPrivateTableMap::COL_READ_FLAG, CareMailPrivateTableMap::COL_MAILGROUP, CareMailPrivateTableMap::COL_MAILDIR, CareMailPrivateTableMap::COL_EXEC_LEVEL, CareMailPrivateTableMap::COL_EXCLUDE_ADDR, CareMailPrivateTableMap::COL_SEND_DT, CareMailPrivateTableMap::COL_SEND_STAMP, CareMailPrivateTableMap::COL_UID, ),
        self::TYPE_FIELDNAME     => array('recipient', 'sender', 'sender_ip', 'cc', 'bcc', 'subject', 'body', 'sign', 'ask4ack', 'reply2', 'attachment', 'attach_type', 'read_flag', 'mailgroup', 'maildir', 'exec_level', 'exclude_addr', 'send_dt', 'send_stamp', 'uid', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Recipient' => 0, 'Sender' => 1, 'SenderIp' => 2, 'Cc' => 3, 'Bcc' => 4, 'Subject' => 5, 'Body' => 6, 'Sign' => 7, 'Ask4ack' => 8, 'Reply2' => 9, 'Attachment' => 10, 'AttachType' => 11, 'ReadFlag' => 12, 'Mailgroup' => 13, 'Maildir' => 14, 'ExecLevel' => 15, 'ExcludeAddr' => 16, 'SendDt' => 17, 'SendStamp' => 18, 'Uid' => 19, ),
        self::TYPE_CAMELNAME     => array('recipient' => 0, 'sender' => 1, 'senderIp' => 2, 'cc' => 3, 'bcc' => 4, 'subject' => 5, 'body' => 6, 'sign' => 7, 'ask4ack' => 8, 'reply2' => 9, 'attachment' => 10, 'attachType' => 11, 'readFlag' => 12, 'mailgroup' => 13, 'maildir' => 14, 'execLevel' => 15, 'excludeAddr' => 16, 'sendDt' => 17, 'sendStamp' => 18, 'uid' => 19, ),
        self::TYPE_COLNAME       => array(CareMailPrivateTableMap::COL_RECIPIENT => 0, CareMailPrivateTableMap::COL_SENDER => 1, CareMailPrivateTableMap::COL_SENDER_IP => 2, CareMailPrivateTableMap::COL_CC => 3, CareMailPrivateTableMap::COL_BCC => 4, CareMailPrivateTableMap::COL_SUBJECT => 5, CareMailPrivateTableMap::COL_BODY => 6, CareMailPrivateTableMap::COL_SIGN => 7, CareMailPrivateTableMap::COL_ASK4ACK => 8, CareMailPrivateTableMap::COL_REPLY2 => 9, CareMailPrivateTableMap::COL_ATTACHMENT => 10, CareMailPrivateTableMap::COL_ATTACH_TYPE => 11, CareMailPrivateTableMap::COL_READ_FLAG => 12, CareMailPrivateTableMap::COL_MAILGROUP => 13, CareMailPrivateTableMap::COL_MAILDIR => 14, CareMailPrivateTableMap::COL_EXEC_LEVEL => 15, CareMailPrivateTableMap::COL_EXCLUDE_ADDR => 16, CareMailPrivateTableMap::COL_SEND_DT => 17, CareMailPrivateTableMap::COL_SEND_STAMP => 18, CareMailPrivateTableMap::COL_UID => 19, ),
        self::TYPE_FIELDNAME     => array('recipient' => 0, 'sender' => 1, 'sender_ip' => 2, 'cc' => 3, 'bcc' => 4, 'subject' => 5, 'body' => 6, 'sign' => 7, 'ask4ack' => 8, 'reply2' => 9, 'attachment' => 10, 'attach_type' => 11, 'read_flag' => 12, 'mailgroup' => 13, 'maildir' => 14, 'exec_level' => 15, 'exclude_addr' => 16, 'send_dt' => 17, 'send_stamp' => 18, 'uid' => 19, ),
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
        $this->setName('care_mail_private');
        $this->setPhpName('CareMailPrivate');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareMailPrivate');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('recipient', 'Recipient', 'VARCHAR', true, 60, '');
        $this->addColumn('sender', 'Sender', 'VARCHAR', true, 60, '');
        $this->addColumn('sender_ip', 'SenderIp', 'VARCHAR', true, 60, '');
        $this->addColumn('cc', 'Cc', 'VARCHAR', true, 255, '');
        $this->addColumn('bcc', 'Bcc', 'VARCHAR', true, 255, '');
        $this->addColumn('subject', 'Subject', 'VARCHAR', true, 255, '');
        $this->addColumn('body', 'Body', 'LONGVARCHAR', true, null, null);
        $this->addColumn('sign', 'Sign', 'VARCHAR', true, 255, '');
        $this->addColumn('ask4ack', 'Ask4ack', 'TINYINT', true, null, 0);
        $this->addColumn('reply2', 'Reply2', 'VARCHAR', true, 255, '');
        $this->addColumn('attachment', 'Attachment', 'VARCHAR', true, 255, '');
        $this->addColumn('attach_type', 'AttachType', 'VARCHAR', true, 30, '');
        $this->addColumn('read_flag', 'ReadFlag', 'TINYINT', true, null, 0);
        $this->addColumn('mailgroup', 'Mailgroup', 'VARCHAR', true, 60, '');
        $this->addColumn('maildir', 'Maildir', 'VARCHAR', true, 60, '');
        $this->addColumn('exec_level', 'ExecLevel', 'TINYINT', true, null, 0);
        $this->addColumn('exclude_addr', 'ExcludeAddr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('send_dt', 'SendDt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('send_stamp', 'SendStamp', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('uid', 'Uid', 'VARCHAR', true, 255, '');
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
        return $withPrefix ? CareMailPrivateTableMap::CLASS_DEFAULT : CareMailPrivateTableMap::OM_CLASS;
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
     * @return array           (CareMailPrivate object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareMailPrivateTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareMailPrivateTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareMailPrivateTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareMailPrivateTableMap::OM_CLASS;
            /** @var CareMailPrivate $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareMailPrivateTableMap::addInstanceToPool($obj, $key);
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
            $key = CareMailPrivateTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareMailPrivateTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareMailPrivate $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareMailPrivateTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_RECIPIENT);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_SENDER);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_SENDER_IP);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_CC);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_BCC);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_SUBJECT);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_BODY);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_SIGN);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_ASK4ACK);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_REPLY2);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_ATTACHMENT);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_ATTACH_TYPE);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_READ_FLAG);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_MAILGROUP);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_MAILDIR);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_EXEC_LEVEL);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_EXCLUDE_ADDR);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_SEND_DT);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_SEND_STAMP);
            $criteria->addSelectColumn(CareMailPrivateTableMap::COL_UID);
        } else {
            $criteria->addSelectColumn($alias . '.recipient');
            $criteria->addSelectColumn($alias . '.sender');
            $criteria->addSelectColumn($alias . '.sender_ip');
            $criteria->addSelectColumn($alias . '.cc');
            $criteria->addSelectColumn($alias . '.bcc');
            $criteria->addSelectColumn($alias . '.subject');
            $criteria->addSelectColumn($alias . '.body');
            $criteria->addSelectColumn($alias . '.sign');
            $criteria->addSelectColumn($alias . '.ask4ack');
            $criteria->addSelectColumn($alias . '.reply2');
            $criteria->addSelectColumn($alias . '.attachment');
            $criteria->addSelectColumn($alias . '.attach_type');
            $criteria->addSelectColumn($alias . '.read_flag');
            $criteria->addSelectColumn($alias . '.mailgroup');
            $criteria->addSelectColumn($alias . '.maildir');
            $criteria->addSelectColumn($alias . '.exec_level');
            $criteria->addSelectColumn($alias . '.exclude_addr');
            $criteria->addSelectColumn($alias . '.send_dt');
            $criteria->addSelectColumn($alias . '.send_stamp');
            $criteria->addSelectColumn($alias . '.uid');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareMailPrivateTableMap::DATABASE_NAME)->getTable(CareMailPrivateTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareMailPrivateTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareMailPrivateTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareMailPrivateTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareMailPrivate or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareMailPrivate object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareMailPrivate) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The CareMailPrivate object has no primary key');
        }

        $query = CareMailPrivateQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareMailPrivateTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareMailPrivateTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_mail_private table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareMailPrivateQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareMailPrivate or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareMailPrivate object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareMailPrivate object
        }


        // Set the correct dbName
        $query = CareMailPrivateQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareMailPrivateTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareMailPrivateTableMap::buildTableMap();
