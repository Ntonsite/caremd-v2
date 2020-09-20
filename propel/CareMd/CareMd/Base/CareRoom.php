<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareRoomQuery as ChildCareRoomQuery;
use CareMd\CareMd\Map\CareRoomTableMap;
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
 * Base class that represents a row from the 'care_room' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareRoom implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareRoomTableMap';


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
     * The value for the nr field.
     *
     * @var        int
     */
    protected $nr;

    /**
     * The value for the type_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_nr;

    /**
     * The value for the date_create field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $date_create;

    /**
     * The value for the date_close field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $date_close;

    /**
     * The value for the is_temp_closed field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_temp_closed;

    /**
     * The value for the room_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $room_nr;

    /**
     * The value for the ward_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ward_nr;

    /**
     * The value for the dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $dept_nr;

    /**
     * The value for the nr_of_beds field.
     *
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $nr_of_beds;

    /**
     * The value for the closed_beds field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $closed_beds;

    /**
     * The value for the info field.
     *
     * @var        string
     */
    protected $info;

    /**
     * The value for the status field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $status;

    /**
     * The value for the history field.
     *
     * @var        string
     */
    protected $history;

    /**
     * The value for the modify_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $modify_id;

    /**
     * The value for the modify_time field.
     *
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        DateTime
     */
    protected $modify_time;

    /**
     * The value for the create_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $create_id;

    /**
     * The value for the create_time field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $create_time;

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
        $this->type_nr = 0;
        $this->date_create = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->date_close = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->is_temp_closed = false;
        $this->room_nr = 0;
        $this->ward_nr = 0;
        $this->dept_nr = 0;
        $this->nr_of_beds = 1;
        $this->closed_beds = '';
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareRoom object.
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
     * Compares this with another <code>CareRoom</code> instance.  If
     * <code>obj</code> is an instance of <code>CareRoom</code>, delegates to
     * <code>equals(CareRoom)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareRoom The current object, for fluid interface
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
     * Get the [nr] column value.
     *
     * @return int
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Get the [type_nr] column value.
     *
     * @return int
     */
    public function getTypeNr()
    {
        return $this->type_nr;
    }

    /**
     * Get the [optionally formatted] temporal [date_create] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCreate($format = NULL)
    {
        if ($format === null) {
            return $this->date_create;
        } else {
            return $this->date_create instanceof \DateTimeInterface ? $this->date_create->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [date_close] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateClose($format = NULL)
    {
        if ($format === null) {
            return $this->date_close;
        } else {
            return $this->date_close instanceof \DateTimeInterface ? $this->date_close->format($format) : null;
        }
    }

    /**
     * Get the [is_temp_closed] column value.
     *
     * @return boolean
     */
    public function getIsTempClosed()
    {
        return $this->is_temp_closed;
    }

    /**
     * Get the [is_temp_closed] column value.
     *
     * @return boolean
     */
    public function isTempClosed()
    {
        return $this->getIsTempClosed();
    }

    /**
     * Get the [room_nr] column value.
     *
     * @return int
     */
    public function getRoomNr()
    {
        return $this->room_nr;
    }

    /**
     * Get the [ward_nr] column value.
     *
     * @return int
     */
    public function getWardNr()
    {
        return $this->ward_nr;
    }

    /**
     * Get the [dept_nr] column value.
     *
     * @return int
     */
    public function getDeptNr()
    {
        return $this->dept_nr;
    }

    /**
     * Get the [nr_of_beds] column value.
     *
     * @return int
     */
    public function getNrOfBeds()
    {
        return $this->nr_of_beds;
    }

    /**
     * Get the [closed_beds] column value.
     *
     * @return string
     */
    public function getClosedBeds()
    {
        return $this->closed_beds;
    }

    /**
     * Get the [info] column value.
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the [history] column value.
     *
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Get the [modify_id] column value.
     *
     * @return string
     */
    public function getModifyId()
    {
        return $this->modify_id;
    }

    /**
     * Get the [optionally formatted] temporal [modify_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getModifyTime($format = NULL)
    {
        if ($format === null) {
            return $this->modify_time;
        } else {
            return $this->modify_time instanceof \DateTimeInterface ? $this->modify_time->format($format) : null;
        }
    }

    /**
     * Get the [create_id] column value.
     *
     * @return string
     */
    public function getCreateId()
    {
        return $this->create_id;
    }

    /**
     * Get the [optionally formatted] temporal [create_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreateTime($format = NULL)
    {
        if ($format === null) {
            return $this->create_time;
        } else {
            return $this->create_time instanceof \DateTimeInterface ? $this->create_time->format($format) : null;
        }
    }

    /**
     * Set the value of [nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [type_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setTypeNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->type_nr !== $v) {
            $this->type_nr = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_TYPE_NR] = true;
        }

        return $this;
    } // setTypeNr()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            if ( ($dt != $this->date_create) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->date_create = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareRoomTableMap::COL_DATE_CREATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [date_close] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setDateClose($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_close !== null || $dt !== null) {
            if ( ($dt != $this->date_close) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->date_close = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareRoomTableMap::COL_DATE_CLOSE] = true;
            }
        } // if either are not null

        return $this;
    } // setDateClose()

    /**
     * Sets the value of the [is_temp_closed] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setIsTempClosed($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_temp_closed !== $v) {
            $this->is_temp_closed = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_IS_TEMP_CLOSED] = true;
        }

        return $this;
    } // setIsTempClosed()

    /**
     * Set the value of [room_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setRoomNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->room_nr !== $v) {
            $this->room_nr = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_ROOM_NR] = true;
        }

        return $this;
    } // setRoomNr()

    /**
     * Set the value of [ward_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setWardNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->ward_nr !== $v) {
            $this->ward_nr = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_WARD_NR] = true;
        }

        return $this;
    } // setWardNr()

    /**
     * Set the value of [dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dept_nr !== $v) {
            $this->dept_nr = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_DEPT_NR] = true;
        }

        return $this;
    } // setDeptNr()

    /**
     * Set the value of [nr_of_beds] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setNrOfBeds($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr_of_beds !== $v) {
            $this->nr_of_beds = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_NR_OF_BEDS] = true;
        }

        return $this;
    } // setNrOfBeds()

    /**
     * Set the value of [closed_beds] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setClosedBeds($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->closed_beds !== $v) {
            $this->closed_beds = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_CLOSED_BEDS] = true;
        }

        return $this;
    } // setClosedBeds()

    /**
     * Set the value of [info] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setInfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->info !== $v) {
            $this->info = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_INFO] = true;
        }

        return $this;
    } // setInfo()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareRoomTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareRoomTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareRoom The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareRoomTableMap::COL_CREATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateTime()

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
            if ($this->type_nr !== 0) {
                return false;
            }

            if ($this->date_create && $this->date_create->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->date_close && $this->date_close->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->is_temp_closed !== false) {
                return false;
            }

            if ($this->room_nr !== 0) {
                return false;
            }

            if ($this->ward_nr !== 0) {
                return false;
            }

            if ($this->dept_nr !== 0) {
                return false;
            }

            if ($this->nr_of_beds !== 1) {
                return false;
            }

            if ($this->closed_beds !== '') {
                return false;
            }

            if ($this->status !== '') {
                return false;
            }

            if ($this->modify_id !== '') {
                return false;
            }

            if ($this->create_id !== '') {
                return false;
            }

            if ($this->create_time && $this->create_time->format('Y-m-d H:i:s.u') !== NULL) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareRoomTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareRoomTableMap::translateFieldName('TypeNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->type_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareRoomTableMap::translateFieldName('DateCreate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->date_create = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareRoomTableMap::translateFieldName('DateClose', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->date_close = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareRoomTableMap::translateFieldName('IsTempClosed', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_temp_closed = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareRoomTableMap::translateFieldName('RoomNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->room_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareRoomTableMap::translateFieldName('WardNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ward_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareRoomTableMap::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareRoomTableMap::translateFieldName('NrOfBeds', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr_of_beds = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareRoomTableMap::translateFieldName('ClosedBeds', TableMap::TYPE_PHPNAME, $indexType)];
            $this->closed_beds = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareRoomTableMap::translateFieldName('Info', TableMap::TYPE_PHPNAME, $indexType)];
            $this->info = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareRoomTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareRoomTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareRoomTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareRoomTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareRoomTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareRoomTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 17; // 17 = CareRoomTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareRoom'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareRoomTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareRoomQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareRoom::setDeleted()
     * @see CareRoom::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareRoomTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareRoomQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareRoomTableMap::DATABASE_NAME);
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
                CareRoomTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareRoomTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareRoomTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareRoomTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_TYPE_NR)) {
            $modifiedColumns[':p' . $index++]  = 'type_nr';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = 'date_create';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_DATE_CLOSE)) {
            $modifiedColumns[':p' . $index++]  = 'date_close';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_IS_TEMP_CLOSED)) {
            $modifiedColumns[':p' . $index++]  = 'is_temp_closed';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_ROOM_NR)) {
            $modifiedColumns[':p' . $index++]  = 'room_nr';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_WARD_NR)) {
            $modifiedColumns[':p' . $index++]  = 'ward_nr';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'dept_nr';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_NR_OF_BEDS)) {
            $modifiedColumns[':p' . $index++]  = 'nr_of_beds';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_CLOSED_BEDS)) {
            $modifiedColumns[':p' . $index++]  = 'closed_beds';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_INFO)) {
            $modifiedColumns[':p' . $index++]  = 'info';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_room (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'nr':
                        $stmt->bindValue($identifier, $this->nr, PDO::PARAM_INT);
                        break;
                    case 'type_nr':
                        $stmt->bindValue($identifier, $this->type_nr, PDO::PARAM_INT);
                        break;
                    case 'date_create':
                        $stmt->bindValue($identifier, $this->date_create ? $this->date_create->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'date_close':
                        $stmt->bindValue($identifier, $this->date_close ? $this->date_close->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'is_temp_closed':
                        $stmt->bindValue($identifier, (int) $this->is_temp_closed, PDO::PARAM_INT);
                        break;
                    case 'room_nr':
                        $stmt->bindValue($identifier, $this->room_nr, PDO::PARAM_INT);
                        break;
                    case 'ward_nr':
                        $stmt->bindValue($identifier, $this->ward_nr, PDO::PARAM_INT);
                        break;
                    case 'dept_nr':
                        $stmt->bindValue($identifier, $this->dept_nr, PDO::PARAM_INT);
                        break;
                    case 'nr_of_beds':
                        $stmt->bindValue($identifier, $this->nr_of_beds, PDO::PARAM_INT);
                        break;
                    case 'closed_beds':
                        $stmt->bindValue($identifier, $this->closed_beds, PDO::PARAM_STR);
                        break;
                    case 'info':
                        $stmt->bindValue($identifier, $this->info, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'history':
                        $stmt->bindValue($identifier, $this->history, PDO::PARAM_STR);
                        break;
                    case 'modify_id':
                        $stmt->bindValue($identifier, $this->modify_id, PDO::PARAM_STR);
                        break;
                    case 'modify_time':
                        $stmt->bindValue($identifier, $this->modify_time ? $this->modify_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'create_id':
                        $stmt->bindValue($identifier, $this->create_id, PDO::PARAM_STR);
                        break;
                    case 'create_time':
                        $stmt->bindValue($identifier, $this->create_time ? $this->create_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setNr($pk);

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
        $pos = CareRoomTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getNr();
                break;
            case 1:
                return $this->getTypeNr();
                break;
            case 2:
                return $this->getDateCreate();
                break;
            case 3:
                return $this->getDateClose();
                break;
            case 4:
                return $this->getIsTempClosed();
                break;
            case 5:
                return $this->getRoomNr();
                break;
            case 6:
                return $this->getWardNr();
                break;
            case 7:
                return $this->getDeptNr();
                break;
            case 8:
                return $this->getNrOfBeds();
                break;
            case 9:
                return $this->getClosedBeds();
                break;
            case 10:
                return $this->getInfo();
                break;
            case 11:
                return $this->getStatus();
                break;
            case 12:
                return $this->getHistory();
                break;
            case 13:
                return $this->getModifyId();
                break;
            case 14:
                return $this->getModifyTime();
                break;
            case 15:
                return $this->getCreateId();
                break;
            case 16:
                return $this->getCreateTime();
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

        if (isset($alreadyDumpedObjects['CareRoom'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareRoom'][$this->hashCode()] = true;
        $keys = CareRoomTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getTypeNr(),
            $keys[2] => $this->getDateCreate(),
            $keys[3] => $this->getDateClose(),
            $keys[4] => $this->getIsTempClosed(),
            $keys[5] => $this->getRoomNr(),
            $keys[6] => $this->getWardNr(),
            $keys[7] => $this->getDeptNr(),
            $keys[8] => $this->getNrOfBeds(),
            $keys[9] => $this->getClosedBeds(),
            $keys[10] => $this->getInfo(),
            $keys[11] => $this->getStatus(),
            $keys[12] => $this->getHistory(),
            $keys[13] => $this->getModifyId(),
            $keys[14] => $this->getModifyTime(),
            $keys[15] => $this->getCreateId(),
            $keys[16] => $this->getCreateTime(),
        );
        if ($result[$keys[2]] instanceof \DateTimeInterface) {
            $result[$keys[2]] = $result[$keys[2]]->format('c');
        }

        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('c');
        }

        if ($result[$keys[14]] instanceof \DateTimeInterface) {
            $result[$keys[14]] = $result[$keys[14]]->format('c');
        }

        if ($result[$keys[16]] instanceof \DateTimeInterface) {
            $result[$keys[16]] = $result[$keys[16]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareRoom
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareRoomTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareRoom
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNr($value);
                break;
            case 1:
                $this->setTypeNr($value);
                break;
            case 2:
                $this->setDateCreate($value);
                break;
            case 3:
                $this->setDateClose($value);
                break;
            case 4:
                $this->setIsTempClosed($value);
                break;
            case 5:
                $this->setRoomNr($value);
                break;
            case 6:
                $this->setWardNr($value);
                break;
            case 7:
                $this->setDeptNr($value);
                break;
            case 8:
                $this->setNrOfBeds($value);
                break;
            case 9:
                $this->setClosedBeds($value);
                break;
            case 10:
                $this->setInfo($value);
                break;
            case 11:
                $this->setStatus($value);
                break;
            case 12:
                $this->setHistory($value);
                break;
            case 13:
                $this->setModifyId($value);
                break;
            case 14:
                $this->setModifyTime($value);
                break;
            case 15:
                $this->setCreateId($value);
                break;
            case 16:
                $this->setCreateTime($value);
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
        $keys = CareRoomTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setTypeNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDateCreate($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setDateClose($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIsTempClosed($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setRoomNr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setWardNr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setDeptNr($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setNrOfBeds($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setClosedBeds($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInfo($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setStatus($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setHistory($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setModifyId($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setModifyTime($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCreateId($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setCreateTime($arr[$keys[16]]);
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
     * @return $this|\CareMd\CareMd\CareRoom The current object, for fluid interface
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
        $criteria = new Criteria(CareRoomTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareRoomTableMap::COL_NR)) {
            $criteria->add(CareRoomTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_TYPE_NR)) {
            $criteria->add(CareRoomTableMap::COL_TYPE_NR, $this->type_nr);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_DATE_CREATE)) {
            $criteria->add(CareRoomTableMap::COL_DATE_CREATE, $this->date_create);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_DATE_CLOSE)) {
            $criteria->add(CareRoomTableMap::COL_DATE_CLOSE, $this->date_close);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_IS_TEMP_CLOSED)) {
            $criteria->add(CareRoomTableMap::COL_IS_TEMP_CLOSED, $this->is_temp_closed);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_ROOM_NR)) {
            $criteria->add(CareRoomTableMap::COL_ROOM_NR, $this->room_nr);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_WARD_NR)) {
            $criteria->add(CareRoomTableMap::COL_WARD_NR, $this->ward_nr);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_DEPT_NR)) {
            $criteria->add(CareRoomTableMap::COL_DEPT_NR, $this->dept_nr);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_NR_OF_BEDS)) {
            $criteria->add(CareRoomTableMap::COL_NR_OF_BEDS, $this->nr_of_beds);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_CLOSED_BEDS)) {
            $criteria->add(CareRoomTableMap::COL_CLOSED_BEDS, $this->closed_beds);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_INFO)) {
            $criteria->add(CareRoomTableMap::COL_INFO, $this->info);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_STATUS)) {
            $criteria->add(CareRoomTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_HISTORY)) {
            $criteria->add(CareRoomTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareRoomTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareRoomTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_CREATE_ID)) {
            $criteria->add(CareRoomTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareRoomTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareRoomTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareRoomQuery::create();
        $criteria->add(CareRoomTableMap::COL_NR, $this->nr);
        $criteria->add(CareRoomTableMap::COL_TYPE_NR, $this->type_nr);
        $criteria->add(CareRoomTableMap::COL_WARD_NR, $this->ward_nr);
        $criteria->add(CareRoomTableMap::COL_DEPT_NR, $this->dept_nr);

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
        $validPk = null !== $this->getNr() &&
            null !== $this->getTypeNr() &&
            null !== $this->getWardNr() &&
            null !== $this->getDeptNr();

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
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getNr();
        $pks[1] = $this->getTypeNr();
        $pks[2] = $this->getWardNr();
        $pks[3] = $this->getDeptNr();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param      array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setNr($keys[0]);
        $this->setTypeNr($keys[1]);
        $this->setWardNr($keys[2]);
        $this->setDeptNr($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getNr()) && (null === $this->getTypeNr()) && (null === $this->getWardNr()) && (null === $this->getDeptNr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareRoom (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTypeNr($this->getTypeNr());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setDateClose($this->getDateClose());
        $copyObj->setIsTempClosed($this->getIsTempClosed());
        $copyObj->setRoomNr($this->getRoomNr());
        $copyObj->setWardNr($this->getWardNr());
        $copyObj->setDeptNr($this->getDeptNr());
        $copyObj->setNrOfBeds($this->getNrOfBeds());
        $copyObj->setClosedBeds($this->getClosedBeds());
        $copyObj->setInfo($this->getInfo());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setNr(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareRoom Clone of current object.
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
        $this->nr = null;
        $this->type_nr = null;
        $this->date_create = null;
        $this->date_close = null;
        $this->is_temp_closed = null;
        $this->room_nr = null;
        $this->ward_nr = null;
        $this->dept_nr = null;
        $this->nr_of_beds = null;
        $this->closed_beds = null;
        $this->info = null;
        $this->status = null;
        $this->history = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->create_id = null;
        $this->create_time = null;
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
        return (string) $this->exportTo(CareRoomTableMap::DEFAULT_STRING_FORMAT);
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