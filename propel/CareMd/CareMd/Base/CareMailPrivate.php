<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareMailPrivateQuery as ChildCareMailPrivateQuery;
use CareMd\CareMd\Map\CareMailPrivateTableMap;
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
 * Base class that represents a row from the 'care_mail_private' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareMailPrivate implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareMailPrivateTableMap';


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
     * The value for the recipient field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $recipient;

    /**
     * The value for the sender field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $sender;

    /**
     * The value for the sender_ip field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $sender_ip;

    /**
     * The value for the cc field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cc;

    /**
     * The value for the bcc field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $bcc;

    /**
     * The value for the subject field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $subject;

    /**
     * The value for the body field.
     *
     * @var        string
     */
    protected $body;

    /**
     * The value for the sign field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $sign;

    /**
     * The value for the ask4ack field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ask4ack;

    /**
     * The value for the reply2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $reply2;

    /**
     * The value for the attachment field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $attachment;

    /**
     * The value for the attach_type field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $attach_type;

    /**
     * The value for the read_flag field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $read_flag;

    /**
     * The value for the mailgroup field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mailgroup;

    /**
     * The value for the maildir field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $maildir;

    /**
     * The value for the exec_level field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $exec_level;

    /**
     * The value for the exclude_addr field.
     *
     * @var        string
     */
    protected $exclude_addr;

    /**
     * The value for the send_dt field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $send_dt;

    /**
     * The value for the send_stamp field.
     *
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        DateTime
     */
    protected $send_stamp;

    /**
     * The value for the uid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $uid;

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
        $this->recipient = '';
        $this->sender = '';
        $this->sender_ip = '';
        $this->cc = '';
        $this->bcc = '';
        $this->subject = '';
        $this->sign = '';
        $this->ask4ack = 0;
        $this->reply2 = '';
        $this->attachment = '';
        $this->attach_type = '';
        $this->read_flag = 0;
        $this->mailgroup = '';
        $this->maildir = '';
        $this->exec_level = 0;
        $this->send_dt = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->uid = '';
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareMailPrivate object.
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
     * Compares this with another <code>CareMailPrivate</code> instance.  If
     * <code>obj</code> is an instance of <code>CareMailPrivate</code>, delegates to
     * <code>equals(CareMailPrivate)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareMailPrivate The current object, for fluid interface
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
     * Get the [recipient] column value.
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Get the [sender] column value.
     *
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Get the [sender_ip] column value.
     *
     * @return string
     */
    public function getSenderIp()
    {
        return $this->sender_ip;
    }

    /**
     * Get the [cc] column value.
     *
     * @return string
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Get the [bcc] column value.
     *
     * @return string
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * Get the [subject] column value.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Get the [body] column value.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Get the [sign] column value.
     *
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Get the [ask4ack] column value.
     *
     * @return int
     */
    public function getAsk4ack()
    {
        return $this->ask4ack;
    }

    /**
     * Get the [reply2] column value.
     *
     * @return string
     */
    public function getReply2()
    {
        return $this->reply2;
    }

    /**
     * Get the [attachment] column value.
     *
     * @return string
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Get the [attach_type] column value.
     *
     * @return string
     */
    public function getAttachType()
    {
        return $this->attach_type;
    }

    /**
     * Get the [read_flag] column value.
     *
     * @return int
     */
    public function getReadFlag()
    {
        return $this->read_flag;
    }

    /**
     * Get the [mailgroup] column value.
     *
     * @return string
     */
    public function getMailgroup()
    {
        return $this->mailgroup;
    }

    /**
     * Get the [maildir] column value.
     *
     * @return string
     */
    public function getMaildir()
    {
        return $this->maildir;
    }

    /**
     * Get the [exec_level] column value.
     *
     * @return int
     */
    public function getExecLevel()
    {
        return $this->exec_level;
    }

    /**
     * Get the [exclude_addr] column value.
     *
     * @return string
     */
    public function getExcludeAddr()
    {
        return $this->exclude_addr;
    }

    /**
     * Get the [optionally formatted] temporal [send_dt] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSendDt($format = NULL)
    {
        if ($format === null) {
            return $this->send_dt;
        } else {
            return $this->send_dt instanceof \DateTimeInterface ? $this->send_dt->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [send_stamp] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSendStamp($format = NULL)
    {
        if ($format === null) {
            return $this->send_stamp;
        } else {
            return $this->send_stamp instanceof \DateTimeInterface ? $this->send_stamp->format($format) : null;
        }
    }

    /**
     * Get the [uid] column value.
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set the value of [recipient] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setRecipient($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->recipient !== $v) {
            $this->recipient = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_RECIPIENT] = true;
        }

        return $this;
    } // setRecipient()

    /**
     * Set the value of [sender] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setSender($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sender !== $v) {
            $this->sender = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_SENDER] = true;
        }

        return $this;
    } // setSender()

    /**
     * Set the value of [sender_ip] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setSenderIp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sender_ip !== $v) {
            $this->sender_ip = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_SENDER_IP] = true;
        }

        return $this;
    } // setSenderIp()

    /**
     * Set the value of [cc] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setCc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cc !== $v) {
            $this->cc = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_CC] = true;
        }

        return $this;
    } // setCc()

    /**
     * Set the value of [bcc] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setBcc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bcc !== $v) {
            $this->bcc = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_BCC] = true;
        }

        return $this;
    } // setBcc()

    /**
     * Set the value of [subject] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setSubject($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->subject !== $v) {
            $this->subject = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_SUBJECT] = true;
        }

        return $this;
    } // setSubject()

    /**
     * Set the value of [body] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setBody($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->body !== $v) {
            $this->body = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_BODY] = true;
        }

        return $this;
    } // setBody()

    /**
     * Set the value of [sign] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setSign($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sign !== $v) {
            $this->sign = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_SIGN] = true;
        }

        return $this;
    } // setSign()

    /**
     * Set the value of [ask4ack] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setAsk4ack($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->ask4ack !== $v) {
            $this->ask4ack = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_ASK4ACK] = true;
        }

        return $this;
    } // setAsk4ack()

    /**
     * Set the value of [reply2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setReply2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->reply2 !== $v) {
            $this->reply2 = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_REPLY2] = true;
        }

        return $this;
    } // setReply2()

    /**
     * Set the value of [attachment] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setAttachment($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->attachment !== $v) {
            $this->attachment = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_ATTACHMENT] = true;
        }

        return $this;
    } // setAttachment()

    /**
     * Set the value of [attach_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setAttachType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->attach_type !== $v) {
            $this->attach_type = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_ATTACH_TYPE] = true;
        }

        return $this;
    } // setAttachType()

    /**
     * Set the value of [read_flag] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setReadFlag($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->read_flag !== $v) {
            $this->read_flag = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_READ_FLAG] = true;
        }

        return $this;
    } // setReadFlag()

    /**
     * Set the value of [mailgroup] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setMailgroup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mailgroup !== $v) {
            $this->mailgroup = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_MAILGROUP] = true;
        }

        return $this;
    } // setMailgroup()

    /**
     * Set the value of [maildir] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setMaildir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->maildir !== $v) {
            $this->maildir = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_MAILDIR] = true;
        }

        return $this;
    } // setMaildir()

    /**
     * Set the value of [exec_level] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setExecLevel($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->exec_level !== $v) {
            $this->exec_level = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_EXEC_LEVEL] = true;
        }

        return $this;
    } // setExecLevel()

    /**
     * Set the value of [exclude_addr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setExcludeAddr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->exclude_addr !== $v) {
            $this->exclude_addr = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_EXCLUDE_ADDR] = true;
        }

        return $this;
    } // setExcludeAddr()

    /**
     * Sets the value of [send_dt] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setSendDt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->send_dt !== null || $dt !== null) {
            if ( ($dt != $this->send_dt) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->send_dt = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareMailPrivateTableMap::COL_SEND_DT] = true;
            }
        } // if either are not null

        return $this;
    } // setSendDt()

    /**
     * Sets the value of [send_stamp] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setSendStamp($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->send_stamp !== null || $dt !== null) {
            if ($this->send_stamp === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->send_stamp->format("Y-m-d H:i:s.u")) {
                $this->send_stamp = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareMailPrivateTableMap::COL_SEND_STAMP] = true;
            }
        } // if either are not null

        return $this;
    } // setSendStamp()

    /**
     * Set the value of [uid] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object (for fluent API support)
     */
    public function setUid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->uid !== $v) {
            $this->uid = $v;
            $this->modifiedColumns[CareMailPrivateTableMap::COL_UID] = true;
        }

        return $this;
    } // setUid()

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
            if ($this->recipient !== '') {
                return false;
            }

            if ($this->sender !== '') {
                return false;
            }

            if ($this->sender_ip !== '') {
                return false;
            }

            if ($this->cc !== '') {
                return false;
            }

            if ($this->bcc !== '') {
                return false;
            }

            if ($this->subject !== '') {
                return false;
            }

            if ($this->sign !== '') {
                return false;
            }

            if ($this->ask4ack !== 0) {
                return false;
            }

            if ($this->reply2 !== '') {
                return false;
            }

            if ($this->attachment !== '') {
                return false;
            }

            if ($this->attach_type !== '') {
                return false;
            }

            if ($this->read_flag !== 0) {
                return false;
            }

            if ($this->mailgroup !== '') {
                return false;
            }

            if ($this->maildir !== '') {
                return false;
            }

            if ($this->exec_level !== 0) {
                return false;
            }

            if ($this->send_dt && $this->send_dt->format('Y-m-d H:i:s.u') !== NULL) {
                return false;
            }

            if ($this->uid !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareMailPrivateTableMap::translateFieldName('Recipient', TableMap::TYPE_PHPNAME, $indexType)];
            $this->recipient = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareMailPrivateTableMap::translateFieldName('Sender', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sender = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareMailPrivateTableMap::translateFieldName('SenderIp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sender_ip = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareMailPrivateTableMap::translateFieldName('Cc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareMailPrivateTableMap::translateFieldName('Bcc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bcc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareMailPrivateTableMap::translateFieldName('Subject', TableMap::TYPE_PHPNAME, $indexType)];
            $this->subject = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareMailPrivateTableMap::translateFieldName('Body', TableMap::TYPE_PHPNAME, $indexType)];
            $this->body = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareMailPrivateTableMap::translateFieldName('Sign', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sign = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareMailPrivateTableMap::translateFieldName('Ask4ack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ask4ack = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareMailPrivateTableMap::translateFieldName('Reply2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->reply2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareMailPrivateTableMap::translateFieldName('Attachment', TableMap::TYPE_PHPNAME, $indexType)];
            $this->attachment = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareMailPrivateTableMap::translateFieldName('AttachType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->attach_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareMailPrivateTableMap::translateFieldName('ReadFlag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->read_flag = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareMailPrivateTableMap::translateFieldName('Mailgroup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mailgroup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareMailPrivateTableMap::translateFieldName('Maildir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->maildir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareMailPrivateTableMap::translateFieldName('ExecLevel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->exec_level = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareMailPrivateTableMap::translateFieldName('ExcludeAddr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->exclude_addr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareMailPrivateTableMap::translateFieldName('SendDt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->send_dt = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareMailPrivateTableMap::translateFieldName('SendStamp', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->send_stamp = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareMailPrivateTableMap::translateFieldName('Uid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->uid = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 20; // 20 = CareMailPrivateTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareMailPrivate'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareMailPrivateTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareMailPrivateQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareMailPrivate::setDeleted()
     * @see CareMailPrivate::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareMailPrivateQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateTableMap::DATABASE_NAME);
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
                CareMailPrivateTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_RECIPIENT)) {
            $modifiedColumns[':p' . $index++]  = 'recipient';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SENDER)) {
            $modifiedColumns[':p' . $index++]  = 'sender';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SENDER_IP)) {
            $modifiedColumns[':p' . $index++]  = 'sender_ip';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_CC)) {
            $modifiedColumns[':p' . $index++]  = 'cc';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_BCC)) {
            $modifiedColumns[':p' . $index++]  = 'bcc';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SUBJECT)) {
            $modifiedColumns[':p' . $index++]  = 'subject';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_BODY)) {
            $modifiedColumns[':p' . $index++]  = 'body';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SIGN)) {
            $modifiedColumns[':p' . $index++]  = 'sign';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_ASK4ACK)) {
            $modifiedColumns[':p' . $index++]  = 'ask4ack';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_REPLY2)) {
            $modifiedColumns[':p' . $index++]  = 'reply2';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_ATTACHMENT)) {
            $modifiedColumns[':p' . $index++]  = 'attachment';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_ATTACH_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'attach_type';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_READ_FLAG)) {
            $modifiedColumns[':p' . $index++]  = 'read_flag';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_MAILGROUP)) {
            $modifiedColumns[':p' . $index++]  = 'mailgroup';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_MAILDIR)) {
            $modifiedColumns[':p' . $index++]  = 'maildir';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_EXEC_LEVEL)) {
            $modifiedColumns[':p' . $index++]  = 'exec_level';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_EXCLUDE_ADDR)) {
            $modifiedColumns[':p' . $index++]  = 'exclude_addr';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SEND_DT)) {
            $modifiedColumns[':p' . $index++]  = 'send_dt';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SEND_STAMP)) {
            $modifiedColumns[':p' . $index++]  = 'send_stamp';
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_UID)) {
            $modifiedColumns[':p' . $index++]  = 'uid';
        }

        $sql = sprintf(
            'INSERT INTO care_mail_private (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'recipient':
                        $stmt->bindValue($identifier, $this->recipient, PDO::PARAM_STR);
                        break;
                    case 'sender':
                        $stmt->bindValue($identifier, $this->sender, PDO::PARAM_STR);
                        break;
                    case 'sender_ip':
                        $stmt->bindValue($identifier, $this->sender_ip, PDO::PARAM_STR);
                        break;
                    case 'cc':
                        $stmt->bindValue($identifier, $this->cc, PDO::PARAM_STR);
                        break;
                    case 'bcc':
                        $stmt->bindValue($identifier, $this->bcc, PDO::PARAM_STR);
                        break;
                    case 'subject':
                        $stmt->bindValue($identifier, $this->subject, PDO::PARAM_STR);
                        break;
                    case 'body':
                        $stmt->bindValue($identifier, $this->body, PDO::PARAM_STR);
                        break;
                    case 'sign':
                        $stmt->bindValue($identifier, $this->sign, PDO::PARAM_STR);
                        break;
                    case 'ask4ack':
                        $stmt->bindValue($identifier, $this->ask4ack, PDO::PARAM_INT);
                        break;
                    case 'reply2':
                        $stmt->bindValue($identifier, $this->reply2, PDO::PARAM_STR);
                        break;
                    case 'attachment':
                        $stmt->bindValue($identifier, $this->attachment, PDO::PARAM_STR);
                        break;
                    case 'attach_type':
                        $stmt->bindValue($identifier, $this->attach_type, PDO::PARAM_STR);
                        break;
                    case 'read_flag':
                        $stmt->bindValue($identifier, $this->read_flag, PDO::PARAM_INT);
                        break;
                    case 'mailgroup':
                        $stmt->bindValue($identifier, $this->mailgroup, PDO::PARAM_STR);
                        break;
                    case 'maildir':
                        $stmt->bindValue($identifier, $this->maildir, PDO::PARAM_STR);
                        break;
                    case 'exec_level':
                        $stmt->bindValue($identifier, $this->exec_level, PDO::PARAM_INT);
                        break;
                    case 'exclude_addr':
                        $stmt->bindValue($identifier, $this->exclude_addr, PDO::PARAM_STR);
                        break;
                    case 'send_dt':
                        $stmt->bindValue($identifier, $this->send_dt ? $this->send_dt->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'send_stamp':
                        $stmt->bindValue($identifier, $this->send_stamp ? $this->send_stamp->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'uid':
                        $stmt->bindValue($identifier, $this->uid, PDO::PARAM_STR);
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
        $pos = CareMailPrivateTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getRecipient();
                break;
            case 1:
                return $this->getSender();
                break;
            case 2:
                return $this->getSenderIp();
                break;
            case 3:
                return $this->getCc();
                break;
            case 4:
                return $this->getBcc();
                break;
            case 5:
                return $this->getSubject();
                break;
            case 6:
                return $this->getBody();
                break;
            case 7:
                return $this->getSign();
                break;
            case 8:
                return $this->getAsk4ack();
                break;
            case 9:
                return $this->getReply2();
                break;
            case 10:
                return $this->getAttachment();
                break;
            case 11:
                return $this->getAttachType();
                break;
            case 12:
                return $this->getReadFlag();
                break;
            case 13:
                return $this->getMailgroup();
                break;
            case 14:
                return $this->getMaildir();
                break;
            case 15:
                return $this->getExecLevel();
                break;
            case 16:
                return $this->getExcludeAddr();
                break;
            case 17:
                return $this->getSendDt();
                break;
            case 18:
                return $this->getSendStamp();
                break;
            case 19:
                return $this->getUid();
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

        if (isset($alreadyDumpedObjects['CareMailPrivate'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareMailPrivate'][$this->hashCode()] = true;
        $keys = CareMailPrivateTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRecipient(),
            $keys[1] => $this->getSender(),
            $keys[2] => $this->getSenderIp(),
            $keys[3] => $this->getCc(),
            $keys[4] => $this->getBcc(),
            $keys[5] => $this->getSubject(),
            $keys[6] => $this->getBody(),
            $keys[7] => $this->getSign(),
            $keys[8] => $this->getAsk4ack(),
            $keys[9] => $this->getReply2(),
            $keys[10] => $this->getAttachment(),
            $keys[11] => $this->getAttachType(),
            $keys[12] => $this->getReadFlag(),
            $keys[13] => $this->getMailgroup(),
            $keys[14] => $this->getMaildir(),
            $keys[15] => $this->getExecLevel(),
            $keys[16] => $this->getExcludeAddr(),
            $keys[17] => $this->getSendDt(),
            $keys[18] => $this->getSendStamp(),
            $keys[19] => $this->getUid(),
        );
        if ($result[$keys[17]] instanceof \DateTimeInterface) {
            $result[$keys[17]] = $result[$keys[17]]->format('c');
        }

        if ($result[$keys[18]] instanceof \DateTimeInterface) {
            $result[$keys[18]] = $result[$keys[18]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareMailPrivate
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareMailPrivateTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareMailPrivate
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setRecipient($value);
                break;
            case 1:
                $this->setSender($value);
                break;
            case 2:
                $this->setSenderIp($value);
                break;
            case 3:
                $this->setCc($value);
                break;
            case 4:
                $this->setBcc($value);
                break;
            case 5:
                $this->setSubject($value);
                break;
            case 6:
                $this->setBody($value);
                break;
            case 7:
                $this->setSign($value);
                break;
            case 8:
                $this->setAsk4ack($value);
                break;
            case 9:
                $this->setReply2($value);
                break;
            case 10:
                $this->setAttachment($value);
                break;
            case 11:
                $this->setAttachType($value);
                break;
            case 12:
                $this->setReadFlag($value);
                break;
            case 13:
                $this->setMailgroup($value);
                break;
            case 14:
                $this->setMaildir($value);
                break;
            case 15:
                $this->setExecLevel($value);
                break;
            case 16:
                $this->setExcludeAddr($value);
                break;
            case 17:
                $this->setSendDt($value);
                break;
            case 18:
                $this->setSendStamp($value);
                break;
            case 19:
                $this->setUid($value);
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
        $keys = CareMailPrivateTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setRecipient($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setSender($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setSenderIp($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCc($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setBcc($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setSubject($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setBody($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setSign($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setAsk4ack($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setReply2($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setAttachment($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setAttachType($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setReadFlag($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setMailgroup($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setMaildir($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setExecLevel($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setExcludeAddr($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setSendDt($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setSendStamp($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setUid($arr[$keys[19]]);
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
     * @return $this|\CareMd\CareMd\CareMailPrivate The current object, for fluid interface
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
        $criteria = new Criteria(CareMailPrivateTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareMailPrivateTableMap::COL_RECIPIENT)) {
            $criteria->add(CareMailPrivateTableMap::COL_RECIPIENT, $this->recipient);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SENDER)) {
            $criteria->add(CareMailPrivateTableMap::COL_SENDER, $this->sender);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SENDER_IP)) {
            $criteria->add(CareMailPrivateTableMap::COL_SENDER_IP, $this->sender_ip);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_CC)) {
            $criteria->add(CareMailPrivateTableMap::COL_CC, $this->cc);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_BCC)) {
            $criteria->add(CareMailPrivateTableMap::COL_BCC, $this->bcc);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SUBJECT)) {
            $criteria->add(CareMailPrivateTableMap::COL_SUBJECT, $this->subject);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_BODY)) {
            $criteria->add(CareMailPrivateTableMap::COL_BODY, $this->body);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SIGN)) {
            $criteria->add(CareMailPrivateTableMap::COL_SIGN, $this->sign);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_ASK4ACK)) {
            $criteria->add(CareMailPrivateTableMap::COL_ASK4ACK, $this->ask4ack);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_REPLY2)) {
            $criteria->add(CareMailPrivateTableMap::COL_REPLY2, $this->reply2);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_ATTACHMENT)) {
            $criteria->add(CareMailPrivateTableMap::COL_ATTACHMENT, $this->attachment);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_ATTACH_TYPE)) {
            $criteria->add(CareMailPrivateTableMap::COL_ATTACH_TYPE, $this->attach_type);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_READ_FLAG)) {
            $criteria->add(CareMailPrivateTableMap::COL_READ_FLAG, $this->read_flag);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_MAILGROUP)) {
            $criteria->add(CareMailPrivateTableMap::COL_MAILGROUP, $this->mailgroup);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_MAILDIR)) {
            $criteria->add(CareMailPrivateTableMap::COL_MAILDIR, $this->maildir);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_EXEC_LEVEL)) {
            $criteria->add(CareMailPrivateTableMap::COL_EXEC_LEVEL, $this->exec_level);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_EXCLUDE_ADDR)) {
            $criteria->add(CareMailPrivateTableMap::COL_EXCLUDE_ADDR, $this->exclude_addr);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SEND_DT)) {
            $criteria->add(CareMailPrivateTableMap::COL_SEND_DT, $this->send_dt);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_SEND_STAMP)) {
            $criteria->add(CareMailPrivateTableMap::COL_SEND_STAMP, $this->send_stamp);
        }
        if ($this->isColumnModified(CareMailPrivateTableMap::COL_UID)) {
            $criteria->add(CareMailPrivateTableMap::COL_UID, $this->uid);
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
        throw new LogicException('The CareMailPrivate object has no primary key');

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
        $validPk = false;

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
     * Returns NULL since this table doesn't have a primary key.
     * This method exists only for BC and is deprecated!
     * @return null
     */
    public function getPrimaryKey()
    {
        return null;
    }

    /**
     * Dummy primary key setter.
     *
     * This function only exists to preserve backwards compatibility.  It is no longer
     * needed or required by the Persistent interface.  It will be removed in next BC-breaking
     * release of Propel.
     *
     * @deprecated
     */
    public function setPrimaryKey($pk)
    {
        // do nothing, because this object doesn't have any primary keys
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return ;
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareMailPrivate (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRecipient($this->getRecipient());
        $copyObj->setSender($this->getSender());
        $copyObj->setSenderIp($this->getSenderIp());
        $copyObj->setCc($this->getCc());
        $copyObj->setBcc($this->getBcc());
        $copyObj->setSubject($this->getSubject());
        $copyObj->setBody($this->getBody());
        $copyObj->setSign($this->getSign());
        $copyObj->setAsk4ack($this->getAsk4ack());
        $copyObj->setReply2($this->getReply2());
        $copyObj->setAttachment($this->getAttachment());
        $copyObj->setAttachType($this->getAttachType());
        $copyObj->setReadFlag($this->getReadFlag());
        $copyObj->setMailgroup($this->getMailgroup());
        $copyObj->setMaildir($this->getMaildir());
        $copyObj->setExecLevel($this->getExecLevel());
        $copyObj->setExcludeAddr($this->getExcludeAddr());
        $copyObj->setSendDt($this->getSendDt());
        $copyObj->setSendStamp($this->getSendStamp());
        $copyObj->setUid($this->getUid());
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
     * @return \CareMd\CareMd\CareMailPrivate Clone of current object.
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
        $this->recipient = null;
        $this->sender = null;
        $this->sender_ip = null;
        $this->cc = null;
        $this->bcc = null;
        $this->subject = null;
        $this->body = null;
        $this->sign = null;
        $this->ask4ack = null;
        $this->reply2 = null;
        $this->attachment = null;
        $this->attach_type = null;
        $this->read_flag = null;
        $this->mailgroup = null;
        $this->maildir = null;
        $this->exec_level = null;
        $this->exclude_addr = null;
        $this->send_dt = null;
        $this->send_stamp = null;
        $this->uid = null;
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
        return (string) $this->exportTo(CareMailPrivateTableMap::DEFAULT_STRING_FORMAT);
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
