<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CarePhone;
use CareMd\CareMd\CarePhoneQuery;
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
 * This class defines the structure of the 'care_phone' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CarePhoneTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CarePhoneTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_phone';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CarePhone';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CarePhone';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 26;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 26;

    /**
     * the column name for the item_nr field
     */
    const COL_ITEM_NR = 'care_phone.item_nr';

    /**
     * the column name for the title field
     */
    const COL_TITLE = 'care_phone.title';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_phone.name';

    /**
     * the column name for the vorname field
     */
    const COL_VORNAME = 'care_phone.vorname';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_phone.pid';

    /**
     * the column name for the personell_nr field
     */
    const COL_PERSONELL_NR = 'care_phone.personell_nr';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_phone.dept_nr';

    /**
     * the column name for the beruf field
     */
    const COL_BERUF = 'care_phone.beruf';

    /**
     * the column name for the bereich1 field
     */
    const COL_BEREICH1 = 'care_phone.bereich1';

    /**
     * the column name for the bereich2 field
     */
    const COL_BEREICH2 = 'care_phone.bereich2';

    /**
     * the column name for the inphone1 field
     */
    const COL_INPHONE1 = 'care_phone.inphone1';

    /**
     * the column name for the inphone2 field
     */
    const COL_INPHONE2 = 'care_phone.inphone2';

    /**
     * the column name for the inphone3 field
     */
    const COL_INPHONE3 = 'care_phone.inphone3';

    /**
     * the column name for the exphone1 field
     */
    const COL_EXPHONE1 = 'care_phone.exphone1';

    /**
     * the column name for the exphone2 field
     */
    const COL_EXPHONE2 = 'care_phone.exphone2';

    /**
     * the column name for the funk1 field
     */
    const COL_FUNK1 = 'care_phone.funk1';

    /**
     * the column name for the funk2 field
     */
    const COL_FUNK2 = 'care_phone.funk2';

    /**
     * the column name for the roomnr field
     */
    const COL_ROOMNR = 'care_phone.roomnr';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'care_phone.date';

    /**
     * the column name for the time field
     */
    const COL_TIME = 'care_phone.time';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_phone.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_phone.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_phone.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_phone.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_phone.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_phone.create_time';

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
        self::TYPE_PHPNAME       => array('ItemNr', 'Title', 'Name', 'Vorname', 'Pid', 'PersonellNr', 'DeptNr', 'Beruf', 'Bereich1', 'Bereich2', 'Inphone1', 'Inphone2', 'Inphone3', 'Exphone1', 'Exphone2', 'Funk1', 'Funk2', 'Roomnr', 'Date', 'Time', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('itemNr', 'title', 'name', 'vorname', 'pid', 'personellNr', 'deptNr', 'beruf', 'bereich1', 'bereich2', 'inphone1', 'inphone2', 'inphone3', 'exphone1', 'exphone2', 'funk1', 'funk2', 'roomnr', 'date', 'time', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CarePhoneTableMap::COL_ITEM_NR, CarePhoneTableMap::COL_TITLE, CarePhoneTableMap::COL_NAME, CarePhoneTableMap::COL_VORNAME, CarePhoneTableMap::COL_PID, CarePhoneTableMap::COL_PERSONELL_NR, CarePhoneTableMap::COL_DEPT_NR, CarePhoneTableMap::COL_BERUF, CarePhoneTableMap::COL_BEREICH1, CarePhoneTableMap::COL_BEREICH2, CarePhoneTableMap::COL_INPHONE1, CarePhoneTableMap::COL_INPHONE2, CarePhoneTableMap::COL_INPHONE3, CarePhoneTableMap::COL_EXPHONE1, CarePhoneTableMap::COL_EXPHONE2, CarePhoneTableMap::COL_FUNK1, CarePhoneTableMap::COL_FUNK2, CarePhoneTableMap::COL_ROOMNR, CarePhoneTableMap::COL_DATE, CarePhoneTableMap::COL_TIME, CarePhoneTableMap::COL_STATUS, CarePhoneTableMap::COL_HISTORY, CarePhoneTableMap::COL_MODIFY_ID, CarePhoneTableMap::COL_MODIFY_TIME, CarePhoneTableMap::COL_CREATE_ID, CarePhoneTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('item_nr', 'title', 'name', 'vorname', 'pid', 'personell_nr', 'dept_nr', 'beruf', 'bereich1', 'bereich2', 'inphone1', 'inphone2', 'inphone3', 'exphone1', 'exphone2', 'funk1', 'funk2', 'roomnr', 'date', 'time', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ItemNr' => 0, 'Title' => 1, 'Name' => 2, 'Vorname' => 3, 'Pid' => 4, 'PersonellNr' => 5, 'DeptNr' => 6, 'Beruf' => 7, 'Bereich1' => 8, 'Bereich2' => 9, 'Inphone1' => 10, 'Inphone2' => 11, 'Inphone3' => 12, 'Exphone1' => 13, 'Exphone2' => 14, 'Funk1' => 15, 'Funk2' => 16, 'Roomnr' => 17, 'Date' => 18, 'Time' => 19, 'Status' => 20, 'History' => 21, 'ModifyId' => 22, 'ModifyTime' => 23, 'CreateId' => 24, 'CreateTime' => 25, ),
        self::TYPE_CAMELNAME     => array('itemNr' => 0, 'title' => 1, 'name' => 2, 'vorname' => 3, 'pid' => 4, 'personellNr' => 5, 'deptNr' => 6, 'beruf' => 7, 'bereich1' => 8, 'bereich2' => 9, 'inphone1' => 10, 'inphone2' => 11, 'inphone3' => 12, 'exphone1' => 13, 'exphone2' => 14, 'funk1' => 15, 'funk2' => 16, 'roomnr' => 17, 'date' => 18, 'time' => 19, 'status' => 20, 'history' => 21, 'modifyId' => 22, 'modifyTime' => 23, 'createId' => 24, 'createTime' => 25, ),
        self::TYPE_COLNAME       => array(CarePhoneTableMap::COL_ITEM_NR => 0, CarePhoneTableMap::COL_TITLE => 1, CarePhoneTableMap::COL_NAME => 2, CarePhoneTableMap::COL_VORNAME => 3, CarePhoneTableMap::COL_PID => 4, CarePhoneTableMap::COL_PERSONELL_NR => 5, CarePhoneTableMap::COL_DEPT_NR => 6, CarePhoneTableMap::COL_BERUF => 7, CarePhoneTableMap::COL_BEREICH1 => 8, CarePhoneTableMap::COL_BEREICH2 => 9, CarePhoneTableMap::COL_INPHONE1 => 10, CarePhoneTableMap::COL_INPHONE2 => 11, CarePhoneTableMap::COL_INPHONE3 => 12, CarePhoneTableMap::COL_EXPHONE1 => 13, CarePhoneTableMap::COL_EXPHONE2 => 14, CarePhoneTableMap::COL_FUNK1 => 15, CarePhoneTableMap::COL_FUNK2 => 16, CarePhoneTableMap::COL_ROOMNR => 17, CarePhoneTableMap::COL_DATE => 18, CarePhoneTableMap::COL_TIME => 19, CarePhoneTableMap::COL_STATUS => 20, CarePhoneTableMap::COL_HISTORY => 21, CarePhoneTableMap::COL_MODIFY_ID => 22, CarePhoneTableMap::COL_MODIFY_TIME => 23, CarePhoneTableMap::COL_CREATE_ID => 24, CarePhoneTableMap::COL_CREATE_TIME => 25, ),
        self::TYPE_FIELDNAME     => array('item_nr' => 0, 'title' => 1, 'name' => 2, 'vorname' => 3, 'pid' => 4, 'personell_nr' => 5, 'dept_nr' => 6, 'beruf' => 7, 'bereich1' => 8, 'bereich2' => 9, 'inphone1' => 10, 'inphone2' => 11, 'inphone3' => 12, 'exphone1' => 13, 'exphone2' => 14, 'funk1' => 15, 'funk2' => 16, 'roomnr' => 17, 'date' => 18, 'time' => 19, 'status' => 20, 'history' => 21, 'modify_id' => 22, 'modify_time' => 23, 'create_id' => 24, 'create_time' => 25, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
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
        $this->setName('care_phone');
        $this->setPhpName('CarePhone');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CarePhone');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('item_nr', 'ItemNr', 'BIGINT', true, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', false, 25, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 45, '');
        $this->addColumn('vorname', 'Vorname', 'VARCHAR', true, 45, '');
        $this->addPrimaryKey('pid', 'Pid', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('personell_nr', 'PersonellNr', 'INTEGER', true, 10, 0);
        $this->addPrimaryKey('dept_nr', 'DeptNr', 'SMALLINT', true, 3, 0);
        $this->addColumn('beruf', 'Beruf', 'VARCHAR', false, 25, null);
        $this->addColumn('bereich1', 'Bereich1', 'VARCHAR', false, 25, null);
        $this->addColumn('bereich2', 'Bereich2', 'VARCHAR', false, 25, null);
        $this->addColumn('inphone1', 'Inphone1', 'VARCHAR', false, 15, null);
        $this->addColumn('inphone2', 'Inphone2', 'VARCHAR', false, 15, null);
        $this->addColumn('inphone3', 'Inphone3', 'VARCHAR', false, 15, null);
        $this->addColumn('exphone1', 'Exphone1', 'VARCHAR', false, 25, null);
        $this->addColumn('exphone2', 'Exphone2', 'VARCHAR', false, 25, null);
        $this->addColumn('funk1', 'Funk1', 'VARCHAR', false, 15, null);
        $this->addColumn('funk2', 'Funk2', 'VARCHAR', false, 15, null);
        $this->addColumn('roomnr', 'Roomnr', 'VARCHAR', false, 10, null);
        $this->addColumn('date', 'Date', 'DATE', true, null, '0000-00-00');
        $this->addColumn('time', 'Time', 'TIME', true, null, '00:00:00');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 15, '');
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CareMd\CareMd\CarePhone $obj A \CareMd\CareMd\CarePhone object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getItemNr() || is_scalar($obj->getItemNr()) || is_callable([$obj->getItemNr(), '__toString']) ? (string) $obj->getItemNr() : $obj->getItemNr()), (null === $obj->getPid() || is_scalar($obj->getPid()) || is_callable([$obj->getPid(), '__toString']) ? (string) $obj->getPid() : $obj->getPid()), (null === $obj->getPersonellNr() || is_scalar($obj->getPersonellNr()) || is_callable([$obj->getPersonellNr(), '__toString']) ? (string) $obj->getPersonellNr() : $obj->getPersonellNr()), (null === $obj->getDeptNr() || is_scalar($obj->getDeptNr()) || is_callable([$obj->getDeptNr(), '__toString']) ? (string) $obj->getDeptNr() : $obj->getDeptNr())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \CareMd\CareMd\CarePhone object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CarePhone) {
                $key = serialize([(null === $value->getItemNr() || is_scalar($value->getItemNr()) || is_callable([$value->getItemNr(), '__toString']) ? (string) $value->getItemNr() : $value->getItemNr()), (null === $value->getPid() || is_scalar($value->getPid()) || is_callable([$value->getPid(), '__toString']) ? (string) $value->getPid() : $value->getPid()), (null === $value->getPersonellNr() || is_scalar($value->getPersonellNr()) || is_callable([$value->getPersonellNr(), '__toString']) ? (string) $value->getPersonellNr() : $value->getPersonellNr()), (null === $value->getDeptNr() || is_scalar($value->getDeptNr()) || is_callable([$value->getDeptNr(), '__toString']) ? (string) $value->getDeptNr() : $value->getDeptNr())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CarePhone object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? CarePhoneTableMap::CLASS_DEFAULT : CarePhoneTableMap::OM_CLASS;
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
     * @return array           (CarePhone object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CarePhoneTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CarePhoneTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CarePhoneTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CarePhoneTableMap::OM_CLASS;
            /** @var CarePhone $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CarePhoneTableMap::addInstanceToPool($obj, $key);
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
            $key = CarePhoneTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CarePhoneTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CarePhone $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CarePhoneTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CarePhoneTableMap::COL_ITEM_NR);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_TITLE);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_NAME);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_VORNAME);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_PID);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_PERSONELL_NR);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_BERUF);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_BEREICH1);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_BEREICH2);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_INPHONE1);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_INPHONE2);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_INPHONE3);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_EXPHONE1);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_EXPHONE2);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_FUNK1);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_FUNK2);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_ROOMNR);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_DATE);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_TIME);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_STATUS);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CarePhoneTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.item_nr');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.vorname');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.personell_nr');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.beruf');
            $criteria->addSelectColumn($alias . '.bereich1');
            $criteria->addSelectColumn($alias . '.bereich2');
            $criteria->addSelectColumn($alias . '.inphone1');
            $criteria->addSelectColumn($alias . '.inphone2');
            $criteria->addSelectColumn($alias . '.inphone3');
            $criteria->addSelectColumn($alias . '.exphone1');
            $criteria->addSelectColumn($alias . '.exphone2');
            $criteria->addSelectColumn($alias . '.funk1');
            $criteria->addSelectColumn($alias . '.funk2');
            $criteria->addSelectColumn($alias . '.roomnr');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.time');
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
        return Propel::getServiceContainer()->getDatabaseMap(CarePhoneTableMap::DATABASE_NAME)->getTable(CarePhoneTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CarePhoneTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CarePhoneTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CarePhoneTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CarePhone or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CarePhone object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePhoneTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CarePhone) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CarePhoneTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CarePhoneTableMap::COL_ITEM_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CarePhoneTableMap::COL_PID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CarePhoneTableMap::COL_PERSONELL_NR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CarePhoneTableMap::COL_DEPT_NR, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = CarePhoneQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CarePhoneTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CarePhoneTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_phone table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CarePhoneQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CarePhone or Criteria object.
     *
     * @param mixed               $criteria Criteria or CarePhone object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePhoneTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CarePhone object
        }

        if ($criteria->containsKey(CarePhoneTableMap::COL_ITEM_NR) && $criteria->keyContainsValue(CarePhoneTableMap::COL_ITEM_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CarePhoneTableMap::COL_ITEM_NR.')');
        }


        // Set the correct dbName
        $query = CarePhoneQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CarePhoneTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CarePhoneTableMap::buildTableMap();
