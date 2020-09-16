<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareAppointmentQuery as ChildCareAppointmentQuery;
use CareMd\CareMd\Map\CareAppointmentTableMap;
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
 * Base class that represents a row from the 'care_appointment' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareAppointment implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareAppointmentTableMap';


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
     * @var        string
     */
    protected $nr;

    /**
     * The value for the pid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pid;

    /**
     * The value for the date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $date;

    /**
     * The value for the time field.
     *
     * Note: this column has a database default value of: '00:00:00.000000'
     * @var        DateTime
     */
    protected $time;

    /**
     * The value for the to_dept_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $to_dept_id;

    /**
     * The value for the to_dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $to_dept_nr;

    /**
     * The value for the to_personell_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $to_personell_nr;

    /**
     * The value for the to_personell_name field.
     *
     * @var        string
     */
    protected $to_personell_name;

    /**
     * The value for the purpose field.
     *
     * @var        string
     */
    protected $purpose;

    /**
     * The value for the urgency field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $urgency;

    /**
     * The value for the remind field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $remind;

    /**
     * The value for the remind_email field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $remind_email;

    /**
     * The value for the remind_mail field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $remind_mail;

    /**
     * The value for the remind_phone field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $remind_phone;

    /**
     * The value for the appt_status field.
     *
     * Note: this column has a database default value of: 'pending'
     * @var        string
     */
    protected $appt_status;

    /**
     * The value for the cancel_by field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cancel_by;

    /**
     * The value for the cancel_date field.
     *
     * @var        DateTime
     */
    protected $cancel_date;

    /**
     * The value for the cancel_reason field.
     *
     * @var        string
     */
    protected $cancel_reason;

    /**
     * The value for the encounter_class_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_class_nr;

    /**
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

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
        $this->pid = 0;
        $this->date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->time = PropelDateTime::newInstance('00:00:00.000000', null, 'DateTime');
        $this->to_dept_id = '';
        $this->to_dept_nr = 0;
        $this->to_personell_nr = 0;
        $this->urgency = 0;
        $this->remind = false;
        $this->remind_email = false;
        $this->remind_mail = false;
        $this->remind_phone = false;
        $this->appt_status = 'pending';
        $this->cancel_by = '';
        $this->encounter_class_nr = 0;
        $this->encounter_nr = 0;
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareAppointment object.
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
     * Compares this with another <code>CareAppointment</code> instance.  If
     * <code>obj</code> is an instance of <code>CareAppointment</code>, delegates to
     * <code>equals(CareAppointment)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareAppointment The current object, for fluid interface
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
     * @return string
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Get the [pid] column value.
     *
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Get the [optionally formatted] temporal [date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = NULL)
    {
        if ($format === null) {
            return $this->date;
        } else {
            return $this->date instanceof \DateTimeInterface ? $this->date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTime($format = NULL)
    {
        if ($format === null) {
            return $this->time;
        } else {
            return $this->time instanceof \DateTimeInterface ? $this->time->format($format) : null;
        }
    }

    /**
     * Get the [to_dept_id] column value.
     *
     * @return string
     */
    public function getToDeptId()
    {
        return $this->to_dept_id;
    }

    /**
     * Get the [to_dept_nr] column value.
     *
     * @return int
     */
    public function getToDeptNr()
    {
        return $this->to_dept_nr;
    }

    /**
     * Get the [to_personell_nr] column value.
     *
     * @return int
     */
    public function getToPersonellNr()
    {
        return $this->to_personell_nr;
    }

    /**
     * Get the [to_personell_name] column value.
     *
     * @return string
     */
    public function getToPersonellName()
    {
        return $this->to_personell_name;
    }

    /**
     * Get the [purpose] column value.
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Get the [urgency] column value.
     *
     * @return int
     */
    public function getUrgency()
    {
        return $this->urgency;
    }

    /**
     * Get the [remind] column value.
     *
     * @return boolean
     */
    public function getRemind()
    {
        return $this->remind;
    }

    /**
     * Get the [remind] column value.
     *
     * @return boolean
     */
    public function isRemind()
    {
        return $this->getRemind();
    }

    /**
     * Get the [remind_email] column value.
     *
     * @return boolean
     */
    public function getRemindEmail()
    {
        return $this->remind_email;
    }

    /**
     * Get the [remind_email] column value.
     *
     * @return boolean
     */
    public function isRemindEmail()
    {
        return $this->getRemindEmail();
    }

    /**
     * Get the [remind_mail] column value.
     *
     * @return boolean
     */
    public function getRemindMail()
    {
        return $this->remind_mail;
    }

    /**
     * Get the [remind_mail] column value.
     *
     * @return boolean
     */
    public function isRemindMail()
    {
        return $this->getRemindMail();
    }

    /**
     * Get the [remind_phone] column value.
     *
     * @return boolean
     */
    public function getRemindPhone()
    {
        return $this->remind_phone;
    }

    /**
     * Get the [remind_phone] column value.
     *
     * @return boolean
     */
    public function isRemindPhone()
    {
        return $this->getRemindPhone();
    }

    /**
     * Get the [appt_status] column value.
     *
     * @return string
     */
    public function getApptStatus()
    {
        return $this->appt_status;
    }

    /**
     * Get the [cancel_by] column value.
     *
     * @return string
     */
    public function getCancelBy()
    {
        return $this->cancel_by;
    }

    /**
     * Get the [optionally formatted] temporal [cancel_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCancelDate($format = NULL)
    {
        if ($format === null) {
            return $this->cancel_date;
        } else {
            return $this->cancel_date instanceof \DateTimeInterface ? $this->cancel_date->format($format) : null;
        }
    }

    /**
     * Get the [cancel_reason] column value.
     *
     * @return string
     */
    public function getCancelReason()
    {
        return $this->cancel_reason;
    }

    /**
     * Get the [encounter_class_nr] column value.
     *
     * @return int
     */
    public function getEncounterClassNr()
    {
        return $this->encounter_class_nr;
    }

    /**
     * Get the [encounter_nr] column value.
     *
     * @return int
     */
    public function getEncounterNr()
    {
        return $this->encounter_nr;
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
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_PID] = true;
        }

        return $this;
    } // setPid()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            if ( ($dt != $this->date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareAppointmentTableMap::COL_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDate()

    /**
     * Sets the value of [time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->time !== null || $dt !== null) {
            if ( ($dt != $this->time) // normalized values don't match
                || ($dt->format('H:i:s.u') === '00:00:00.000000') // or the entered value matches the default
                 ) {
                $this->time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareAppointmentTableMap::COL_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setTime()

    /**
     * Set the value of [to_dept_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setToDeptId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->to_dept_id !== $v) {
            $this->to_dept_id = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_TO_DEPT_ID] = true;
        }

        return $this;
    } // setToDeptId()

    /**
     * Set the value of [to_dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setToDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->to_dept_nr !== $v) {
            $this->to_dept_nr = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_TO_DEPT_NR] = true;
        }

        return $this;
    } // setToDeptNr()

    /**
     * Set the value of [to_personell_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setToPersonellNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->to_personell_nr !== $v) {
            $this->to_personell_nr = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_TO_PERSONELL_NR] = true;
        }

        return $this;
    } // setToPersonellNr()

    /**
     * Set the value of [to_personell_name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setToPersonellName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->to_personell_name !== $v) {
            $this->to_personell_name = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_TO_PERSONELL_NAME] = true;
        }

        return $this;
    } // setToPersonellName()

    /**
     * Set the value of [purpose] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setPurpose($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->purpose !== $v) {
            $this->purpose = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_PURPOSE] = true;
        }

        return $this;
    } // setPurpose()

    /**
     * Set the value of [urgency] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setUrgency($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->urgency !== $v) {
            $this->urgency = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_URGENCY] = true;
        }

        return $this;
    } // setUrgency()

    /**
     * Sets the value of the [remind] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setRemind($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->remind !== $v) {
            $this->remind = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_REMIND] = true;
        }

        return $this;
    } // setRemind()

    /**
     * Sets the value of the [remind_email] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setRemindEmail($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->remind_email !== $v) {
            $this->remind_email = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_REMIND_EMAIL] = true;
        }

        return $this;
    } // setRemindEmail()

    /**
     * Sets the value of the [remind_mail] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setRemindMail($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->remind_mail !== $v) {
            $this->remind_mail = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_REMIND_MAIL] = true;
        }

        return $this;
    } // setRemindMail()

    /**
     * Sets the value of the [remind_phone] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setRemindPhone($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->remind_phone !== $v) {
            $this->remind_phone = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_REMIND_PHONE] = true;
        }

        return $this;
    } // setRemindPhone()

    /**
     * Set the value of [appt_status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setApptStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->appt_status !== $v) {
            $this->appt_status = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_APPT_STATUS] = true;
        }

        return $this;
    } // setApptStatus()

    /**
     * Set the value of [cancel_by] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setCancelBy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cancel_by !== $v) {
            $this->cancel_by = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_CANCEL_BY] = true;
        }

        return $this;
    } // setCancelBy()

    /**
     * Sets the value of [cancel_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setCancelDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->cancel_date !== null || $dt !== null) {
            if ($this->cancel_date === null || $dt === null || $dt->format("Y-m-d") !== $this->cancel_date->format("Y-m-d")) {
                $this->cancel_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareAppointmentTableMap::COL_CANCEL_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setCancelDate()

    /**
     * Set the value of [cancel_reason] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setCancelReason($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cancel_reason !== $v) {
            $this->cancel_reason = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_CANCEL_REASON] = true;
        }

        return $this;
    } // setCancelReason()

    /**
     * Set the value of [encounter_class_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setEncounterClassNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_class_nr !== $v) {
            $this->encounter_class_nr = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_ENCOUNTER_CLASS_NR] = true;
        }

        return $this;
    } // setEncounterClassNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareAppointmentTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareAppointmentTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareAppointment The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareAppointmentTableMap::COL_CREATE_TIME] = true;
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
            if ($this->pid !== 0) {
                return false;
            }

            if ($this->date && $this->date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->time && $this->time->format('H:i:s.u') !== '00:00:00.000000') {
                return false;
            }

            if ($this->to_dept_id !== '') {
                return false;
            }

            if ($this->to_dept_nr !== 0) {
                return false;
            }

            if ($this->to_personell_nr !== 0) {
                return false;
            }

            if ($this->urgency !== 0) {
                return false;
            }

            if ($this->remind !== false) {
                return false;
            }

            if ($this->remind_email !== false) {
                return false;
            }

            if ($this->remind_mail !== false) {
                return false;
            }

            if ($this->remind_phone !== false) {
                return false;
            }

            if ($this->appt_status !== 'pending') {
                return false;
            }

            if ($this->cancel_by !== '') {
                return false;
            }

            if ($this->encounter_class_nr !== 0) {
                return false;
            }

            if ($this->encounter_nr !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareAppointmentTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareAppointmentTableMap::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareAppointmentTableMap::translateFieldName('Date', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareAppointmentTableMap::translateFieldName('Time', TableMap::TYPE_PHPNAME, $indexType)];
            $this->time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareAppointmentTableMap::translateFieldName('ToDeptId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->to_dept_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareAppointmentTableMap::translateFieldName('ToDeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->to_dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareAppointmentTableMap::translateFieldName('ToPersonellNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->to_personell_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareAppointmentTableMap::translateFieldName('ToPersonellName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->to_personell_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareAppointmentTableMap::translateFieldName('Purpose', TableMap::TYPE_PHPNAME, $indexType)];
            $this->purpose = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareAppointmentTableMap::translateFieldName('Urgency', TableMap::TYPE_PHPNAME, $indexType)];
            $this->urgency = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareAppointmentTableMap::translateFieldName('Remind', TableMap::TYPE_PHPNAME, $indexType)];
            $this->remind = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareAppointmentTableMap::translateFieldName('RemindEmail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->remind_email = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareAppointmentTableMap::translateFieldName('RemindMail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->remind_mail = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareAppointmentTableMap::translateFieldName('RemindPhone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->remind_phone = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareAppointmentTableMap::translateFieldName('ApptStatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->appt_status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareAppointmentTableMap::translateFieldName('CancelBy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cancel_by = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareAppointmentTableMap::translateFieldName('CancelDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->cancel_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareAppointmentTableMap::translateFieldName('CancelReason', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cancel_reason = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareAppointmentTableMap::translateFieldName('EncounterClassNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_class_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareAppointmentTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareAppointmentTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareAppointmentTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareAppointmentTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareAppointmentTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareAppointmentTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareAppointmentTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 26; // 26 = CareAppointmentTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareAppointment'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareAppointmentTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareAppointmentQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareAppointment::setDeleted()
     * @see CareAppointment::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareAppointmentTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareAppointmentQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareAppointmentTableMap::DATABASE_NAME);
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
                CareAppointmentTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareAppointmentTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareAppointmentTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareAppointmentTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_PID)) {
            $modifiedColumns[':p' . $index++]  = 'pid';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'date';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'time';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_TO_DEPT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'to_dept_id';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_TO_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'to_dept_nr';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_TO_PERSONELL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'to_personell_nr';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_TO_PERSONELL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'to_personell_name';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_PURPOSE)) {
            $modifiedColumns[':p' . $index++]  = 'purpose';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_URGENCY)) {
            $modifiedColumns[':p' . $index++]  = 'urgency';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_REMIND)) {
            $modifiedColumns[':p' . $index++]  = 'remind';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_REMIND_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'remind_email';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_REMIND_MAIL)) {
            $modifiedColumns[':p' . $index++]  = 'remind_mail';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_REMIND_PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'remind_phone';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_APPT_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'appt_status';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_CANCEL_BY)) {
            $modifiedColumns[':p' . $index++]  = 'cancel_by';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_CANCEL_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'cancel_date';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_CANCEL_REASON)) {
            $modifiedColumns[':p' . $index++]  = 'cancel_reason';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_ENCOUNTER_CLASS_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_class_nr';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_appointment (%s) VALUES (%s)',
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
                    case 'pid':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_INT);
                        break;
                    case 'date':
                        $stmt->bindValue($identifier, $this->date ? $this->date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'time':
                        $stmt->bindValue($identifier, $this->time ? $this->time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'to_dept_id':
                        $stmt->bindValue($identifier, $this->to_dept_id, PDO::PARAM_STR);
                        break;
                    case 'to_dept_nr':
                        $stmt->bindValue($identifier, $this->to_dept_nr, PDO::PARAM_INT);
                        break;
                    case 'to_personell_nr':
                        $stmt->bindValue($identifier, $this->to_personell_nr, PDO::PARAM_INT);
                        break;
                    case 'to_personell_name':
                        $stmt->bindValue($identifier, $this->to_personell_name, PDO::PARAM_STR);
                        break;
                    case 'purpose':
                        $stmt->bindValue($identifier, $this->purpose, PDO::PARAM_STR);
                        break;
                    case 'urgency':
                        $stmt->bindValue($identifier, $this->urgency, PDO::PARAM_INT);
                        break;
                    case 'remind':
                        $stmt->bindValue($identifier, (int) $this->remind, PDO::PARAM_INT);
                        break;
                    case 'remind_email':
                        $stmt->bindValue($identifier, (int) $this->remind_email, PDO::PARAM_INT);
                        break;
                    case 'remind_mail':
                        $stmt->bindValue($identifier, (int) $this->remind_mail, PDO::PARAM_INT);
                        break;
                    case 'remind_phone':
                        $stmt->bindValue($identifier, (int) $this->remind_phone, PDO::PARAM_INT);
                        break;
                    case 'appt_status':
                        $stmt->bindValue($identifier, $this->appt_status, PDO::PARAM_STR);
                        break;
                    case 'cancel_by':
                        $stmt->bindValue($identifier, $this->cancel_by, PDO::PARAM_STR);
                        break;
                    case 'cancel_date':
                        $stmt->bindValue($identifier, $this->cancel_date ? $this->cancel_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'cancel_reason':
                        $stmt->bindValue($identifier, $this->cancel_reason, PDO::PARAM_STR);
                        break;
                    case 'encounter_class_nr':
                        $stmt->bindValue($identifier, $this->encounter_class_nr, PDO::PARAM_INT);
                        break;
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
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
        $pos = CareAppointmentTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPid();
                break;
            case 2:
                return $this->getDate();
                break;
            case 3:
                return $this->getTime();
                break;
            case 4:
                return $this->getToDeptId();
                break;
            case 5:
                return $this->getToDeptNr();
                break;
            case 6:
                return $this->getToPersonellNr();
                break;
            case 7:
                return $this->getToPersonellName();
                break;
            case 8:
                return $this->getPurpose();
                break;
            case 9:
                return $this->getUrgency();
                break;
            case 10:
                return $this->getRemind();
                break;
            case 11:
                return $this->getRemindEmail();
                break;
            case 12:
                return $this->getRemindMail();
                break;
            case 13:
                return $this->getRemindPhone();
                break;
            case 14:
                return $this->getApptStatus();
                break;
            case 15:
                return $this->getCancelBy();
                break;
            case 16:
                return $this->getCancelDate();
                break;
            case 17:
                return $this->getCancelReason();
                break;
            case 18:
                return $this->getEncounterClassNr();
                break;
            case 19:
                return $this->getEncounterNr();
                break;
            case 20:
                return $this->getStatus();
                break;
            case 21:
                return $this->getHistory();
                break;
            case 22:
                return $this->getModifyId();
                break;
            case 23:
                return $this->getModifyTime();
                break;
            case 24:
                return $this->getCreateId();
                break;
            case 25:
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

        if (isset($alreadyDumpedObjects['CareAppointment'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareAppointment'][$this->hashCode()] = true;
        $keys = CareAppointmentTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getPid(),
            $keys[2] => $this->getDate(),
            $keys[3] => $this->getTime(),
            $keys[4] => $this->getToDeptId(),
            $keys[5] => $this->getToDeptNr(),
            $keys[6] => $this->getToPersonellNr(),
            $keys[7] => $this->getToPersonellName(),
            $keys[8] => $this->getPurpose(),
            $keys[9] => $this->getUrgency(),
            $keys[10] => $this->getRemind(),
            $keys[11] => $this->getRemindEmail(),
            $keys[12] => $this->getRemindMail(),
            $keys[13] => $this->getRemindPhone(),
            $keys[14] => $this->getApptStatus(),
            $keys[15] => $this->getCancelBy(),
            $keys[16] => $this->getCancelDate(),
            $keys[17] => $this->getCancelReason(),
            $keys[18] => $this->getEncounterClassNr(),
            $keys[19] => $this->getEncounterNr(),
            $keys[20] => $this->getStatus(),
            $keys[21] => $this->getHistory(),
            $keys[22] => $this->getModifyId(),
            $keys[23] => $this->getModifyTime(),
            $keys[24] => $this->getCreateId(),
            $keys[25] => $this->getCreateTime(),
        );
        if ($result[$keys[2]] instanceof \DateTimeInterface) {
            $result[$keys[2]] = $result[$keys[2]]->format('c');
        }

        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('c');
        }

        if ($result[$keys[16]] instanceof \DateTimeInterface) {
            $result[$keys[16]] = $result[$keys[16]]->format('c');
        }

        if ($result[$keys[23]] instanceof \DateTimeInterface) {
            $result[$keys[23]] = $result[$keys[23]]->format('c');
        }

        if ($result[$keys[25]] instanceof \DateTimeInterface) {
            $result[$keys[25]] = $result[$keys[25]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareAppointment
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareAppointmentTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareAppointment
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNr($value);
                break;
            case 1:
                $this->setPid($value);
                break;
            case 2:
                $this->setDate($value);
                break;
            case 3:
                $this->setTime($value);
                break;
            case 4:
                $this->setToDeptId($value);
                break;
            case 5:
                $this->setToDeptNr($value);
                break;
            case 6:
                $this->setToPersonellNr($value);
                break;
            case 7:
                $this->setToPersonellName($value);
                break;
            case 8:
                $this->setPurpose($value);
                break;
            case 9:
                $this->setUrgency($value);
                break;
            case 10:
                $this->setRemind($value);
                break;
            case 11:
                $this->setRemindEmail($value);
                break;
            case 12:
                $this->setRemindMail($value);
                break;
            case 13:
                $this->setRemindPhone($value);
                break;
            case 14:
                $this->setApptStatus($value);
                break;
            case 15:
                $this->setCancelBy($value);
                break;
            case 16:
                $this->setCancelDate($value);
                break;
            case 17:
                $this->setCancelReason($value);
                break;
            case 18:
                $this->setEncounterClassNr($value);
                break;
            case 19:
                $this->setEncounterNr($value);
                break;
            case 20:
                $this->setStatus($value);
                break;
            case 21:
                $this->setHistory($value);
                break;
            case 22:
                $this->setModifyId($value);
                break;
            case 23:
                $this->setModifyTime($value);
                break;
            case 24:
                $this->setCreateId($value);
                break;
            case 25:
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
        $keys = CareAppointmentTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDate($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setTime($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setToDeptId($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setToDeptNr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setToPersonellNr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setToPersonellName($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPurpose($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setUrgency($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setRemind($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setRemindEmail($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setRemindMail($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setRemindPhone($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setApptStatus($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCancelBy($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setCancelDate($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setCancelReason($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setEncounterClassNr($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setEncounterNr($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setStatus($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setHistory($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setModifyId($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setModifyTime($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setCreateId($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setCreateTime($arr[$keys[25]]);
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
     * @return $this|\CareMd\CareMd\CareAppointment The current object, for fluid interface
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
        $criteria = new Criteria(CareAppointmentTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareAppointmentTableMap::COL_NR)) {
            $criteria->add(CareAppointmentTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_PID)) {
            $criteria->add(CareAppointmentTableMap::COL_PID, $this->pid);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_DATE)) {
            $criteria->add(CareAppointmentTableMap::COL_DATE, $this->date);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_TIME)) {
            $criteria->add(CareAppointmentTableMap::COL_TIME, $this->time);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_TO_DEPT_ID)) {
            $criteria->add(CareAppointmentTableMap::COL_TO_DEPT_ID, $this->to_dept_id);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_TO_DEPT_NR)) {
            $criteria->add(CareAppointmentTableMap::COL_TO_DEPT_NR, $this->to_dept_nr);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_TO_PERSONELL_NR)) {
            $criteria->add(CareAppointmentTableMap::COL_TO_PERSONELL_NR, $this->to_personell_nr);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_TO_PERSONELL_NAME)) {
            $criteria->add(CareAppointmentTableMap::COL_TO_PERSONELL_NAME, $this->to_personell_name);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_PURPOSE)) {
            $criteria->add(CareAppointmentTableMap::COL_PURPOSE, $this->purpose);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_URGENCY)) {
            $criteria->add(CareAppointmentTableMap::COL_URGENCY, $this->urgency);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_REMIND)) {
            $criteria->add(CareAppointmentTableMap::COL_REMIND, $this->remind);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_REMIND_EMAIL)) {
            $criteria->add(CareAppointmentTableMap::COL_REMIND_EMAIL, $this->remind_email);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_REMIND_MAIL)) {
            $criteria->add(CareAppointmentTableMap::COL_REMIND_MAIL, $this->remind_mail);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_REMIND_PHONE)) {
            $criteria->add(CareAppointmentTableMap::COL_REMIND_PHONE, $this->remind_phone);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_APPT_STATUS)) {
            $criteria->add(CareAppointmentTableMap::COL_APPT_STATUS, $this->appt_status);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_CANCEL_BY)) {
            $criteria->add(CareAppointmentTableMap::COL_CANCEL_BY, $this->cancel_by);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_CANCEL_DATE)) {
            $criteria->add(CareAppointmentTableMap::COL_CANCEL_DATE, $this->cancel_date);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_CANCEL_REASON)) {
            $criteria->add(CareAppointmentTableMap::COL_CANCEL_REASON, $this->cancel_reason);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_ENCOUNTER_CLASS_NR)) {
            $criteria->add(CareAppointmentTableMap::COL_ENCOUNTER_CLASS_NR, $this->encounter_class_nr);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareAppointmentTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_STATUS)) {
            $criteria->add(CareAppointmentTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_HISTORY)) {
            $criteria->add(CareAppointmentTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareAppointmentTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareAppointmentTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_CREATE_ID)) {
            $criteria->add(CareAppointmentTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareAppointmentTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareAppointmentTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareAppointmentQuery::create();
        $criteria->add(CareAppointmentTableMap::COL_NR, $this->nr);

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
        $validPk = null !== $this->getNr();

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
        return $this->getNr();
    }

    /**
     * Generic method to set the primary key (nr column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setNr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getNr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareAppointment (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPid($this->getPid());
        $copyObj->setDate($this->getDate());
        $copyObj->setTime($this->getTime());
        $copyObj->setToDeptId($this->getToDeptId());
        $copyObj->setToDeptNr($this->getToDeptNr());
        $copyObj->setToPersonellNr($this->getToPersonellNr());
        $copyObj->setToPersonellName($this->getToPersonellName());
        $copyObj->setPurpose($this->getPurpose());
        $copyObj->setUrgency($this->getUrgency());
        $copyObj->setRemind($this->getRemind());
        $copyObj->setRemindEmail($this->getRemindEmail());
        $copyObj->setRemindMail($this->getRemindMail());
        $copyObj->setRemindPhone($this->getRemindPhone());
        $copyObj->setApptStatus($this->getApptStatus());
        $copyObj->setCancelBy($this->getCancelBy());
        $copyObj->setCancelDate($this->getCancelDate());
        $copyObj->setCancelReason($this->getCancelReason());
        $copyObj->setEncounterClassNr($this->getEncounterClassNr());
        $copyObj->setEncounterNr($this->getEncounterNr());
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
     * @return \CareMd\CareMd\CareAppointment Clone of current object.
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
        $this->pid = null;
        $this->date = null;
        $this->time = null;
        $this->to_dept_id = null;
        $this->to_dept_nr = null;
        $this->to_personell_nr = null;
        $this->to_personell_name = null;
        $this->purpose = null;
        $this->urgency = null;
        $this->remind = null;
        $this->remind_email = null;
        $this->remind_mail = null;
        $this->remind_phone = null;
        $this->appt_status = null;
        $this->cancel_by = null;
        $this->cancel_date = null;
        $this->cancel_reason = null;
        $this->encounter_class_nr = null;
        $this->encounter_nr = null;
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
        return (string) $this->exportTo(CareAppointmentTableMap::DEFAULT_STRING_FORMAT);
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
