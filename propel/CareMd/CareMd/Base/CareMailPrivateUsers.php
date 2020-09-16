<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareMailPrivateUsersQuery as ChildCareMailPrivateUsersQuery;
use CareMd\CareMd\Map\CareMailPrivateUsersTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'care_mail_private_users' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareMailPrivateUsers implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareMailPrivateUsersTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the user_name field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $user_name;

    /**
     * The value for the email field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the alias field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $alias;

    /**
     * The value for the pw field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pw;

    /**
     * The value for the inbox field.
     *
     * @var        string
     */
    protected $inbox;

    /**
     * The value for the sent field.
     *
     * @var        string
     */
    protected $sent;

    /**
     * The value for the drafts field.
     *
     * @var        string
     */
    protected $drafts;

    /**
     * The value for the trash field.
     *
     * @var        string
     */
    protected $trash;

    /**
     * The value for the lastcheck field.
     *
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        DateTime
     */
    protected $lastcheck;

    /**
     * The value for the lock_flag field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lock_flag;

    /**
     * The value for the addr_book field.
     *
     * @var        string
     */
    protected $addr_book;

    /**
     * The value for the addr_quick field.
     *
     * @var        string
     */
    protected $addr_quick;

    /**
     * The value for the secret_q field.
     *
     * @var        string
     */
    protected $secret_q;

    /**
     * The value for the secret_q_ans field.
     *
     * @var        string
     */
    protected $secret_q_ans;

    /**
     * The value for the public field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $public;

    /**
     * The value for the sig field.
     *
     * @var        string
     */
    protected $sig;

    /**
     * The value for the append_sig field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $append_sig;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->user_name = '';
        $this->email = '';
        $this->alias = '';
        $this->pw = '';
        $this->lock_flag = 0;
        $this->public = 0;
        $this->append_sig = 0;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareMailPrivateUsers object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>CareMailPrivateUsers</code> instance.  If
     * <code>obj</code> is an instance of <code>CareMailPrivateUsers</code>, delegates to
     * <code>equals(CareMailPrivateUsers)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|CareMailPrivateUsers The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [user_name] column value.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [alias] column value.
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Get the [pw] column value.
     *
     * @return string
     */
    public function getPw()
    {
        return $this->pw;
    }

    /**
     * Get the [inbox] column value.
     *
     * @return string
     */
    public function getInbox()
    {
        return $this->inbox;
    }

    /**
     * Get the [sent] column value.
     *
     * @return string
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Get the [drafts] column value.
     *
     * @return string
     */
    public function getDrafts()
    {
        return $this->drafts;
    }

    /**
     * Get the [trash] column value.
     *
     * @return string
     */
    public function getTrash()
    {
        return $this->trash;
    }

    /**
     * Get the [optionally formatted] temporal [lastcheck] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastcheck($format = NULL)
    {
        if ($format === null) {
            return $this->lastcheck;
        } else {
            return $this->lastcheck instanceof \DateTimeInterface ? $this->lastcheck->format($format) : null;
        }
    }

    /**
     * Get the [lock_flag] column value.
     *
     * @return int
     */
    public function getLockFlag()
    {
        return $this->lock_flag;
    }

    /**
     * Get the [addr_book] column value.
     *
     * @return string
     */
    public function getAddrBook()
    {
        return $this->addr_book;
    }

    /**
     * Get the [addr_quick] column value.
     *
     * @return string
     */
    public function getAddrQuick()
    {
        return $this->addr_quick;
    }

    /**
     * Get the [secret_q] column value.
     *
     * @return string
     */
    public function getSecretQ()
    {
        return $this->secret_q;
    }

    /**
     * Get the [secret_q_ans] column value.
     *
     * @return string
     */
    public function getSecretQAns()
    {
        return $this->secret_q_ans;
    }

    /**
     * Get the [public] column value.
     *
     * @return int
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Get the [sig] column value.
     *
     * @return string
     */
    public function getSig()
    {
        return $this->sig;
    }

    /**
     * Get the [append_sig] column value.
     *
     * @return int
     */
    public function getAppendSig()
    {
        return $this->append_sig;
    }

    /**
     * Set the value of [user_name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setUserName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_name !== $v) {
            $this->user_name = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_USER_NAME] = true;
        }

        return $this;
    } // setUserName()

    /**
     * Set the value of [email] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_EMAIL] = true;
        }

        return $this;
    } // setEmail()

    /**
     * Set the value of [alias] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setAlias($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->alias !== $v) {
            $this->alias = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_ALIAS] = true;
        }

        return $this;
    } // setAlias()

    /**
     * Set the value of [pw] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setPw($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pw !== $v) {
            $this->pw = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_PW] = true;
        }

        return $this;
    } // setPw()

    /**
     * Set the value of [inbox] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setInbox($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inbox !== $v) {
            $this->inbox = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_INBOX] = true;
        }

        return $this;
    } // setInbox()

    /**
     * Set the value of [sent] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setSent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sent !== $v) {
            $this->sent = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_SENT] = true;
        }

        return $this;
    } // setSent()

    /**
     * Set the value of [drafts] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setDrafts($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->drafts !== $v) {
            $this->drafts = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_DRAFTS] = true;
        }

        return $this;
    } // setDrafts()

    /**
     * Set the value of [trash] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setTrash($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->trash !== $v) {
            $this->trash = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_TRASH] = true;
        }

        return $this;
    } // setTrash()

    /**
     * Sets the value of [lastcheck] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setLastcheck($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastcheck !== null || $dt !== null) {
            if ($this->lastcheck === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->lastcheck->format("Y-m-d H:i:s.u")) {
                $this->lastcheck = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_LASTCHECK] = true;
            }
        } // if either are not null

        return $this;
    } // setLastcheck()

    /**
     * Set the value of [lock_flag] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setLockFlag($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lock_flag !== $v) {
            $this->lock_flag = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_LOCK_FLAG] = true;
        }

        return $this;
    } // setLockFlag()

    /**
     * Set the value of [addr_book] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setAddrBook($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->addr_book !== $v) {
            $this->addr_book = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_ADDR_BOOK] = true;
        }

        return $this;
    } // setAddrBook()

    /**
     * Set the value of [addr_quick] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setAddrQuick($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->addr_quick !== $v) {
            $this->addr_quick = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_ADDR_QUICK] = true;
        }

        return $this;
    } // setAddrQuick()

    /**
     * Set the value of [secret_q] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setSecretQ($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->secret_q !== $v) {
            $this->secret_q = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_SECRET_Q] = true;
        }

        return $this;
    } // setSecretQ()

    /**
     * Set the value of [secret_q_ans] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setSecretQAns($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->secret_q_ans !== $v) {
            $this->secret_q_ans = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_SECRET_Q_ANS] = true;
        }

        return $this;
    } // setSecretQAns()

    /**
     * Set the value of [public] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setPublic($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->public !== $v) {
            $this->public = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_PUBLIC] = true;
        }

        return $this;
    } // setPublic()

    /**
     * Set the value of [sig] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setSig($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sig !== $v) {
            $this->sig = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_SIG] = true;
        }

        return $this;
    } // setSig()

    /**
     * Set the value of [append_sig] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object (for fluent API support)
     */
    public function setAppendSig($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->append_sig !== $v) {
            $this->append_sig = $v;
            $this->modifiedColumns[CareMailPrivateUsersTableMap::COL_APPEND_SIG] = true;
        }

        return $this;
    } // setAppendSig()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->user_name !== '') {
                return false;
            }

            if ($this->email !== '') {
                return false;
            }

            if ($this->alias !== '') {
                return false;
            }

            if ($this->pw !== '') {
                return false;
            }

            if ($this->lock_flag !== 0) {
                return false;
            }

            if ($this->public !== 0) {
                return false;
            }

            if ($this->append_sig !== 0) {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('UserName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->user_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('Alias', TableMap::TYPE_PHPNAME, $indexType)];
            $this->alias = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('Pw', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pw = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('Inbox', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inbox = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('Sent', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sent = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('Drafts', TableMap::TYPE_PHPNAME, $indexType)];
            $this->drafts = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('Trash', TableMap::TYPE_PHPNAME, $indexType)];
            $this->trash = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('Lastcheck', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->lastcheck = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('LockFlag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lock_flag = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('AddrBook', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_book = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('AddrQuick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_quick = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('SecretQ', TableMap::TYPE_PHPNAME, $indexType)];
            $this->secret_q = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('SecretQAns', TableMap::TYPE_PHPNAME, $indexType)];
            $this->secret_q_ans = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('Public', TableMap::TYPE_PHPNAME, $indexType)];
            $this->public = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('Sig', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sig = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareMailPrivateUsersTableMap::translateFieldName('AppendSig', TableMap::TYPE_PHPNAME, $indexType)];
            $this->append_sig = (null !== $col) ? (int) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 17; // 17 = CareMailPrivateUsersTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareMailPrivateUsers'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareMailPrivateUsersTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareMailPrivateUsersQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see CareMailPrivateUsers::setDeleted()
     * @see CareMailPrivateUsers::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateUsersTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareMailPrivateUsersQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateUsersTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                CareMailPrivateUsersTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_USER_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'user_name';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'email';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_ALIAS)) {
            $modifiedColumns[':p' . $index++]  = 'alias';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_PW)) {
            $modifiedColumns[':p' . $index++]  = 'pw';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_INBOX)) {
            $modifiedColumns[':p' . $index++]  = 'inbox';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_SENT)) {
            $modifiedColumns[':p' . $index++]  = 'sent';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_DRAFTS)) {
            $modifiedColumns[':p' . $index++]  = 'drafts';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_TRASH)) {
            $modifiedColumns[':p' . $index++]  = 'trash';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_LASTCHECK)) {
            $modifiedColumns[':p' . $index++]  = 'lastcheck';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_LOCK_FLAG)) {
            $modifiedColumns[':p' . $index++]  = 'lock_flag';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_ADDR_BOOK)) {
            $modifiedColumns[':p' . $index++]  = 'addr_book';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_ADDR_QUICK)) {
            $modifiedColumns[':p' . $index++]  = 'addr_quick';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_SECRET_Q)) {
            $modifiedColumns[':p' . $index++]  = 'secret_q';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_SECRET_Q_ANS)) {
            $modifiedColumns[':p' . $index++]  = 'secret_q_ans';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_PUBLIC)) {
            $modifiedColumns[':p' . $index++]  = 'public';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_SIG)) {
            $modifiedColumns[':p' . $index++]  = 'sig';
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_APPEND_SIG)) {
            $modifiedColumns[':p' . $index++]  = 'append_sig';
        }

        $sql = sprintf(
            'INSERT INTO care_mail_private_users (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'user_name':
                        $stmt->bindValue($identifier, $this->user_name, PDO::PARAM_STR);
                        break;
                    case 'email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case 'alias':
                        $stmt->bindValue($identifier, $this->alias, PDO::PARAM_STR);
                        break;
                    case 'pw':
                        $stmt->bindValue($identifier, $this->pw, PDO::PARAM_STR);
                        break;
                    case 'inbox':
                        $stmt->bindValue($identifier, $this->inbox, PDO::PARAM_STR);
                        break;
                    case 'sent':
                        $stmt->bindValue($identifier, $this->sent, PDO::PARAM_STR);
                        break;
                    case 'drafts':
                        $stmt->bindValue($identifier, $this->drafts, PDO::PARAM_STR);
                        break;
                    case 'trash':
                        $stmt->bindValue($identifier, $this->trash, PDO::PARAM_STR);
                        break;
                    case 'lastcheck':
                        $stmt->bindValue($identifier, $this->lastcheck ? $this->lastcheck->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'lock_flag':
                        $stmt->bindValue($identifier, $this->lock_flag, PDO::PARAM_INT);
                        break;
                    case 'addr_book':
                        $stmt->bindValue($identifier, $this->addr_book, PDO::PARAM_STR);
                        break;
                    case 'addr_quick':
                        $stmt->bindValue($identifier, $this->addr_quick, PDO::PARAM_STR);
                        break;
                    case 'secret_q':
                        $stmt->bindValue($identifier, $this->secret_q, PDO::PARAM_STR);
                        break;
                    case 'secret_q_ans':
                        $stmt->bindValue($identifier, $this->secret_q_ans, PDO::PARAM_STR);
                        break;
                    case 'public':
                        $stmt->bindValue($identifier, $this->public, PDO::PARAM_INT);
                        break;
                    case 'sig':
                        $stmt->bindValue($identifier, $this->sig, PDO::PARAM_STR);
                        break;
                    case 'append_sig':
                        $stmt->bindValue($identifier, $this->append_sig, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareMailPrivateUsersTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getUserName();
                break;
            case 1:
                return $this->getEmail();
                break;
            case 2:
                return $this->getAlias();
                break;
            case 3:
                return $this->getPw();
                break;
            case 4:
                return $this->getInbox();
                break;
            case 5:
                return $this->getSent();
                break;
            case 6:
                return $this->getDrafts();
                break;
            case 7:
                return $this->getTrash();
                break;
            case 8:
                return $this->getLastcheck();
                break;
            case 9:
                return $this->getLockFlag();
                break;
            case 10:
                return $this->getAddrBook();
                break;
            case 11:
                return $this->getAddrQuick();
                break;
            case 12:
                return $this->getSecretQ();
                break;
            case 13:
                return $this->getSecretQAns();
                break;
            case 14:
                return $this->getPublic();
                break;
            case 15:
                return $this->getSig();
                break;
            case 16:
                return $this->getAppendSig();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['CareMailPrivateUsers'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareMailPrivateUsers'][$this->hashCode()] = true;
        $keys = CareMailPrivateUsersTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getUserName(),
            $keys[1] => $this->getEmail(),
            $keys[2] => $this->getAlias(),
            $keys[3] => $this->getPw(),
            $keys[4] => $this->getInbox(),
            $keys[5] => $this->getSent(),
            $keys[6] => $this->getDrafts(),
            $keys[7] => $this->getTrash(),
            $keys[8] => $this->getLastcheck(),
            $keys[9] => $this->getLockFlag(),
            $keys[10] => $this->getAddrBook(),
            $keys[11] => $this->getAddrQuick(),
            $keys[12] => $this->getSecretQ(),
            $keys[13] => $this->getSecretQAns(),
            $keys[14] => $this->getPublic(),
            $keys[15] => $this->getSig(),
            $keys[16] => $this->getAppendSig(),
        );
        if ($result[$keys[8]] instanceof \DateTimeInterface) {
            $result[$keys[8]] = $result[$keys[8]]->format('c');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareMailPrivateUsersTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setUserName($value);
                break;
            case 1:
                $this->setEmail($value);
                break;
            case 2:
                $this->setAlias($value);
                break;
            case 3:
                $this->setPw($value);
                break;
            case 4:
                $this->setInbox($value);
                break;
            case 5:
                $this->setSent($value);
                break;
            case 6:
                $this->setDrafts($value);
                break;
            case 7:
                $this->setTrash($value);
                break;
            case 8:
                $this->setLastcheck($value);
                break;
            case 9:
                $this->setLockFlag($value);
                break;
            case 10:
                $this->setAddrBook($value);
                break;
            case 11:
                $this->setAddrQuick($value);
                break;
            case 12:
                $this->setSecretQ($value);
                break;
            case 13:
                $this->setSecretQAns($value);
                break;
            case 14:
                $this->setPublic($value);
                break;
            case 15:
                $this->setSig($value);
                break;
            case 16:
                $this->setAppendSig($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = CareMailPrivateUsersTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setUserName($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEmail($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setAlias($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setPw($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInbox($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setSent($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDrafts($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setTrash($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setLastcheck($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setLockFlag($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setAddrBook($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setAddrQuick($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setSecretQ($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setSecretQAns($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setPublic($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setSig($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setAppendSig($arr[$keys[16]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\CareMd\CareMd\CareMailPrivateUsers The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CareMailPrivateUsersTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_USER_NAME)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_USER_NAME, $this->user_name);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_EMAIL)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_EMAIL, $this->email);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_ALIAS)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_ALIAS, $this->alias);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_PW)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_PW, $this->pw);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_INBOX)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_INBOX, $this->inbox);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_SENT)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_SENT, $this->sent);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_DRAFTS)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_DRAFTS, $this->drafts);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_TRASH)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_TRASH, $this->trash);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_LASTCHECK)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_LASTCHECK, $this->lastcheck);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_LOCK_FLAG)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_LOCK_FLAG, $this->lock_flag);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_ADDR_BOOK)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_ADDR_BOOK, $this->addr_book);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_ADDR_QUICK)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_ADDR_QUICK, $this->addr_quick);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_SECRET_Q)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_SECRET_Q, $this->secret_q);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_SECRET_Q_ANS)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_SECRET_Q_ANS, $this->secret_q_ans);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_PUBLIC)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_PUBLIC, $this->public);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_SIG)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_SIG, $this->sig);
        }
        if ($this->isColumnModified(CareMailPrivateUsersTableMap::COL_APPEND_SIG)) {
            $criteria->add(CareMailPrivateUsersTableMap::COL_APPEND_SIG, $this->append_sig);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildCareMailPrivateUsersQuery::create();
        $criteria->add(CareMailPrivateUsersTableMap::COL_EMAIL, $this->email);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getEmail();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getEmail();
    }

    /**
     * Generic method to set the primary key (email column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setEmail($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getEmail();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareMailPrivateUsers (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserName($this->getUserName());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setAlias($this->getAlias());
        $copyObj->setPw($this->getPw());
        $copyObj->setInbox($this->getInbox());
        $copyObj->setSent($this->getSent());
        $copyObj->setDrafts($this->getDrafts());
        $copyObj->setTrash($this->getTrash());
        $copyObj->setLastcheck($this->getLastcheck());
        $copyObj->setLockFlag($this->getLockFlag());
        $copyObj->setAddrBook($this->getAddrBook());
        $copyObj->setAddrQuick($this->getAddrQuick());
        $copyObj->setSecretQ($this->getSecretQ());
        $copyObj->setSecretQAns($this->getSecretQAns());
        $copyObj->setPublic($this->getPublic());
        $copyObj->setSig($this->getSig());
        $copyObj->setAppendSig($this->getAppendSig());
        if ($makeNew) {
            $copyObj->setNew(true);
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \CareMd\CareMd\CareMailPrivateUsers Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->user_name = null;
        $this->email = null;
        $this->alias = null;
        $this->pw = null;
        $this->inbox = null;
        $this->sent = null;
        $this->drafts = null;
        $this->trash = null;
        $this->lastcheck = null;
        $this->lock_flag = null;
        $this->addr_book = null;
        $this->addr_quick = null;
        $this->secret_q = null;
        $this->secret_q_ans = null;
        $this->public = null;
        $this->sig = null;
        $this->append_sig = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CareMailPrivateUsersTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return parent::preSave($con);
        }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postSave')) {
            parent::postSave($con);
        }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preInsert')) {
            return parent::preInsert($con);
        }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postInsert')) {
            parent::postInsert($con);
        }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preUpdate')) {
            return parent::preUpdate($con);
        }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postUpdate')) {
            parent::postUpdate($con);
        }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preDelete')) {
            return parent::preDelete($con);
        }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postDelete')) {
            parent::postDelete($con);
        }
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
