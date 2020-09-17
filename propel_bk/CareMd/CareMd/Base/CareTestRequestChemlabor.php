<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestChemlaborQuery as ChildCareTestRequestChemlaborQuery;
use CareMd\CareMd\Map\CareTestRequestChemlaborTableMap;
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
 * Base class that represents a row from the 'care_test_request_chemlabor' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTestRequestChemlabor implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTestRequestChemlaborTableMap';


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
     * The value for the batch_nr field.
     *
     * @var        int
     */
    protected $batch_nr;

    /**
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

    /**
     * The value for the item_id field.
     *
     * @var        string
     */
    protected $item_id;

    /**
     * The value for the room_nr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $room_nr;

    /**
     * The value for the dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $dept_nr;

    /**
     * The value for the parameters field.
     *
     * @var        string
     */
    protected $parameters;

    /**
     * The value for the doctor_sign field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $doctor_sign;

    /**
     * The value for the highrisk field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $highrisk;

    /**
     * The value for the notes field.
     *
     * @var        string
     */
    protected $notes;

    /**
     * The value for the send_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $send_date;

    /**
     * The value for the specimen_collected field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $specimen_collected;

    /**
     * The value for the specimen_date field.
     *
     * @var        DateTime
     */
    protected $specimen_date;

    /**
     * The value for the specimen_type field.
     *
     * @var        string
     */
    protected $specimen_type;

    /**
     * The value for the specimen_volume field.
     *
     * @var        string
     */
    protected $specimen_volume;

    /**
     * The value for the specimen_units field.
     *
     * @var        string
     */
    protected $specimen_units;

    /**
     * The value for the specimen_taken_by field.
     *
     * @var        string
     */
    protected $specimen_taken_by;

    /**
     * The value for the specimen_container field.
     *
     * @var        string
     */
    protected $specimen_container;

    /**
     * The value for the sample_time field.
     *
     * Note: this column has a database default value of: '00:00:00.000000'
     * @var        DateTime
     */
    protected $sample_time;

    /**
     * The value for the sample_weekday field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $sample_weekday;

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
     * The value for the bill_number field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $bill_number;

    /**
     * The value for the bill_status field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $bill_status;

    /**
     * The value for the is_disabled field.
     *
     * @var        string
     */
    protected $is_disabled;

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
     * The value for the priority field.
     *
     * @var        boolean
     */
    protected $priority;

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
        $this->encounter_nr = 0;
        $this->room_nr = '';
        $this->dept_nr = 0;
        $this->doctor_sign = '';
        $this->highrisk = 0;
        $this->send_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->specimen_collected = false;
        $this->sample_time = PropelDateTime::newInstance('00:00:00.000000', null, 'DateTime');
        $this->sample_weekday = 0;
        $this->status = '';
        $this->bill_number = '0';
        $this->bill_status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTestRequestChemlabor object.
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
     * Compares this with another <code>CareTestRequestChemlabor</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTestRequestChemlabor</code>, delegates to
     * <code>equals(CareTestRequestChemlabor)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTestRequestChemlabor The current object, for fluid interface
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
     * Get the [batch_nr] column value.
     *
     * @return int
     */
    public function getBatchNr()
    {
        return $this->batch_nr;
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
     * Get the [item_id] column value.
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Get the [room_nr] column value.
     *
     * @return string
     */
    public function getRoomNr()
    {
        return $this->room_nr;
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
     * Get the [parameters] column value.
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Get the [doctor_sign] column value.
     *
     * @return string
     */
    public function getDoctorSign()
    {
        return $this->doctor_sign;
    }

    /**
     * Get the [highrisk] column value.
     *
     * @return int
     */
    public function getHighrisk()
    {
        return $this->highrisk;
    }

    /**
     * Get the [notes] column value.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Get the [optionally formatted] temporal [send_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSendDate($format = NULL)
    {
        if ($format === null) {
            return $this->send_date;
        } else {
            return $this->send_date instanceof \DateTimeInterface ? $this->send_date->format($format) : null;
        }
    }

    /**
     * Get the [specimen_collected] column value.
     *
     * @return boolean
     */
    public function getSpecimenCollected()
    {
        return $this->specimen_collected;
    }

    /**
     * Get the [specimen_collected] column value.
     *
     * @return boolean
     */
    public function isSpecimenCollected()
    {
        return $this->getSpecimenCollected();
    }

    /**
     * Get the [optionally formatted] temporal [specimen_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSpecimenDate($format = NULL)
    {
        if ($format === null) {
            return $this->specimen_date;
        } else {
            return $this->specimen_date instanceof \DateTimeInterface ? $this->specimen_date->format($format) : null;
        }
    }

    /**
     * Get the [specimen_type] column value.
     *
     * @return string
     */
    public function getSpecimenType()
    {
        return $this->specimen_type;
    }

    /**
     * Get the [specimen_volume] column value.
     *
     * @return string
     */
    public function getSpecimenVolume()
    {
        return $this->specimen_volume;
    }

    /**
     * Get the [specimen_units] column value.
     *
     * @return string
     */
    public function getSpecimenUnits()
    {
        return $this->specimen_units;
    }

    /**
     * Get the [specimen_taken_by] column value.
     *
     * @return string
     */
    public function getSpecimenTakenBy()
    {
        return $this->specimen_taken_by;
    }

    /**
     * Get the [specimen_container] column value.
     *
     * @return string
     */
    public function getSpecimenContainer()
    {
        return $this->specimen_container;
    }

    /**
     * Get the [optionally formatted] temporal [sample_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSampleTime($format = NULL)
    {
        if ($format === null) {
            return $this->sample_time;
        } else {
            return $this->sample_time instanceof \DateTimeInterface ? $this->sample_time->format($format) : null;
        }
    }

    /**
     * Get the [sample_weekday] column value.
     *
     * @return int
     */
    public function getSampleWeekday()
    {
        return $this->sample_weekday;
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
     * Get the [bill_number] column value.
     *
     * @return string
     */
    public function getBillNumber()
    {
        return $this->bill_number;
    }

    /**
     * Get the [bill_status] column value.
     *
     * @return string
     */
    public function getBillStatus()
    {
        return $this->bill_status;
    }

    /**
     * Get the [is_disabled] column value.
     *
     * @return string
     */
    public function getIsDisabled()
    {
        return $this->is_disabled;
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
     * Get the [priority] column value.
     *
     * @return boolean
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Get the [priority] column value.
     *
     * @return boolean
     */
    public function isPriority()
    {
        return $this->getPriority();
    }

    /**
     * Set the value of [batch_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setBatchNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->batch_nr !== $v) {
            $this->batch_nr = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_BATCH_NR] = true;
        }

        return $this;
    } // setBatchNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [item_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setItemId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->item_id !== $v) {
            $this->item_id = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_ITEM_ID] = true;
        }

        return $this;
    } // setItemId()

    /**
     * Set the value of [room_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setRoomNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->room_nr !== $v) {
            $this->room_nr = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_ROOM_NR] = true;
        }

        return $this;
    } // setRoomNr()

    /**
     * Set the value of [dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dept_nr !== $v) {
            $this->dept_nr = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_DEPT_NR] = true;
        }

        return $this;
    } // setDeptNr()

    /**
     * Set the value of [parameters] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setParameters($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->parameters !== $v) {
            $this->parameters = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_PARAMETERS] = true;
        }

        return $this;
    } // setParameters()

    /**
     * Set the value of [doctor_sign] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setDoctorSign($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doctor_sign !== $v) {
            $this->doctor_sign = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_DOCTOR_SIGN] = true;
        }

        return $this;
    } // setDoctorSign()

    /**
     * Set the value of [highrisk] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setHighrisk($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->highrisk !== $v) {
            $this->highrisk = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_HIGHRISK] = true;
        }

        return $this;
    } // setHighrisk()

    /**
     * Set the value of [notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->notes !== $v) {
            $this->notes = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_NOTES] = true;
        }

        return $this;
    } // setNotes()

    /**
     * Sets the value of [send_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setSendDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->send_date !== null || $dt !== null) {
            if ( ($dt != $this->send_date) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->send_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_SEND_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setSendDate()

    /**
     * Sets the value of the [specimen_collected] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setSpecimenCollected($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->specimen_collected !== $v) {
            $this->specimen_collected = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_SPECIMEN_COLLECTED] = true;
        }

        return $this;
    } // setSpecimenCollected()

    /**
     * Sets the value of [specimen_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setSpecimenDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->specimen_date !== null || $dt !== null) {
            if ($this->specimen_date === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->specimen_date->format("Y-m-d H:i:s.u")) {
                $this->specimen_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_SPECIMEN_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setSpecimenDate()

    /**
     * Set the value of [specimen_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setSpecimenType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->specimen_type !== $v) {
            $this->specimen_type = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_SPECIMEN_TYPE] = true;
        }

        return $this;
    } // setSpecimenType()

    /**
     * Set the value of [specimen_volume] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setSpecimenVolume($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->specimen_volume !== $v) {
            $this->specimen_volume = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_SPECIMEN_VOLUME] = true;
        }

        return $this;
    } // setSpecimenVolume()

    /**
     * Set the value of [specimen_units] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setSpecimenUnits($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->specimen_units !== $v) {
            $this->specimen_units = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_SPECIMEN_UNITS] = true;
        }

        return $this;
    } // setSpecimenUnits()

    /**
     * Set the value of [specimen_taken_by] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setSpecimenTakenBy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->specimen_taken_by !== $v) {
            $this->specimen_taken_by = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_SPECIMEN_TAKEN_BY] = true;
        }

        return $this;
    } // setSpecimenTakenBy()

    /**
     * Set the value of [specimen_container] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setSpecimenContainer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->specimen_container !== $v) {
            $this->specimen_container = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_SPECIMEN_CONTAINER] = true;
        }

        return $this;
    } // setSpecimenContainer()

    /**
     * Sets the value of [sample_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setSampleTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->sample_time !== null || $dt !== null) {
            if ( ($dt != $this->sample_time) // normalized values don't match
                || ($dt->format('H:i:s.u') === '00:00:00.000000') // or the entered value matches the default
                 ) {
                $this->sample_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_SAMPLE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setSampleTime()

    /**
     * Set the value of [sample_weekday] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setSampleWeekday($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->sample_weekday !== $v) {
            $this->sample_weekday = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_SAMPLE_WEEKDAY] = true;
        }

        return $this;
    } // setSampleWeekday()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [bill_number] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setBillNumber($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bill_number !== $v) {
            $this->bill_number = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_BILL_NUMBER] = true;
        }

        return $this;
    } // setBillNumber()

    /**
     * Set the value of [bill_status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setBillStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bill_status !== $v) {
            $this->bill_status = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_BILL_STATUS] = true;
        }

        return $this;
    } // setBillStatus()

    /**
     * Set the value of [is_disabled] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setIsDisabled($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->is_disabled !== $v) {
            $this->is_disabled = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_IS_DISABLED] = true;
        }

        return $this;
    } // setIsDisabled()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_CREATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateTime()

    /**
     * Sets the value of the [priority] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object (for fluent API support)
     */
    public function setPriority($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->priority !== $v) {
            $this->priority = $v;
            $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_PRIORITY] = true;
        }

        return $this;
    } // setPriority()

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
            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->room_nr !== '') {
                return false;
            }

            if ($this->dept_nr !== 0) {
                return false;
            }

            if ($this->doctor_sign !== '') {
                return false;
            }

            if ($this->highrisk !== 0) {
                return false;
            }

            if ($this->send_date && $this->send_date->format('Y-m-d H:i:s.u') !== NULL) {
                return false;
            }

            if ($this->specimen_collected !== false) {
                return false;
            }

            if ($this->sample_time && $this->sample_time->format('H:i:s.u') !== '00:00:00.000000') {
                return false;
            }

            if ($this->sample_weekday !== 0) {
                return false;
            }

            if ($this->status !== '') {
                return false;
            }

            if ($this->bill_number !== '0') {
                return false;
            }

            if ($this->bill_status !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->batch_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('ItemId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->item_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('RoomNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->room_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('Parameters', TableMap::TYPE_PHPNAME, $indexType)];
            $this->parameters = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('DoctorSign', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doctor_sign = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('Highrisk', TableMap::TYPE_PHPNAME, $indexType)];
            $this->highrisk = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('Notes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('SendDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->send_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('SpecimenCollected', TableMap::TYPE_PHPNAME, $indexType)];
            $this->specimen_collected = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('SpecimenDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->specimen_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('SpecimenType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->specimen_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('SpecimenVolume', TableMap::TYPE_PHPNAME, $indexType)];
            $this->specimen_volume = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('SpecimenUnits', TableMap::TYPE_PHPNAME, $indexType)];
            $this->specimen_units = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('SpecimenTakenBy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->specimen_taken_by = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('SpecimenContainer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->specimen_container = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('SampleTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sample_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('SampleWeekday', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sample_weekday = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('BillNumber', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_number = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('BillStatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('IsDisabled', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_disabled = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareTestRequestChemlaborTableMap::translateFieldName('Priority', TableMap::TYPE_PHPNAME, $indexType)];
            $this->priority = (null !== $col) ? (boolean) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 29; // 29 = CareTestRequestChemlaborTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTestRequestChemlabor'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestChemlaborTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTestRequestChemlaborQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTestRequestChemlabor::setDeleted()
     * @see CareTestRequestChemlabor::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestChemlaborTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTestRequestChemlaborQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestChemlaborTableMap::DATABASE_NAME);
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
                CareTestRequestChemlaborTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTestRequestChemlaborTableMap::COL_BATCH_NR] = true;
        if (null !== $this->batch_nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTestRequestChemlaborTableMap::COL_BATCH_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_BATCH_NR)) {
            $modifiedColumns[':p' . $index++]  = 'batch_nr';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'item_id';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_ROOM_NR)) {
            $modifiedColumns[':p' . $index++]  = 'room_nr';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'dept_nr';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_PARAMETERS)) {
            $modifiedColumns[':p' . $index++]  = 'parameters';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_DOCTOR_SIGN)) {
            $modifiedColumns[':p' . $index++]  = 'doctor_sign';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_HIGHRISK)) {
            $modifiedColumns[':p' . $index++]  = 'highrisk';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'notes';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SEND_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'send_date';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_COLLECTED)) {
            $modifiedColumns[':p' . $index++]  = 'specimen_collected';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'specimen_date';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'specimen_type';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_VOLUME)) {
            $modifiedColumns[':p' . $index++]  = 'specimen_volume';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_UNITS)) {
            $modifiedColumns[':p' . $index++]  = 'specimen_units';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_TAKEN_BY)) {
            $modifiedColumns[':p' . $index++]  = 'specimen_taken_by';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_CONTAINER)) {
            $modifiedColumns[':p' . $index++]  = 'specimen_container';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SAMPLE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'sample_time';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SAMPLE_WEEKDAY)) {
            $modifiedColumns[':p' . $index++]  = 'sample_weekday';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_BILL_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'bill_number';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_BILL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'bill_status';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_IS_DISABLED)) {
            $modifiedColumns[':p' . $index++]  = 'is_disabled';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_PRIORITY)) {
            $modifiedColumns[':p' . $index++]  = 'priority';
        }

        $sql = sprintf(
            'INSERT INTO care_test_request_chemlabor (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'batch_nr':
                        $stmt->bindValue($identifier, $this->batch_nr, PDO::PARAM_INT);
                        break;
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'item_id':
                        $stmt->bindValue($identifier, $this->item_id, PDO::PARAM_STR);
                        break;
                    case 'room_nr':
                        $stmt->bindValue($identifier, $this->room_nr, PDO::PARAM_STR);
                        break;
                    case 'dept_nr':
                        $stmt->bindValue($identifier, $this->dept_nr, PDO::PARAM_INT);
                        break;
                    case 'parameters':
                        $stmt->bindValue($identifier, $this->parameters, PDO::PARAM_STR);
                        break;
                    case 'doctor_sign':
                        $stmt->bindValue($identifier, $this->doctor_sign, PDO::PARAM_STR);
                        break;
                    case 'highrisk':
                        $stmt->bindValue($identifier, $this->highrisk, PDO::PARAM_INT);
                        break;
                    case 'notes':
                        $stmt->bindValue($identifier, $this->notes, PDO::PARAM_STR);
                        break;
                    case 'send_date':
                        $stmt->bindValue($identifier, $this->send_date ? $this->send_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'specimen_collected':
                        $stmt->bindValue($identifier, (int) $this->specimen_collected, PDO::PARAM_INT);
                        break;
                    case 'specimen_date':
                        $stmt->bindValue($identifier, $this->specimen_date ? $this->specimen_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'specimen_type':
                        $stmt->bindValue($identifier, $this->specimen_type, PDO::PARAM_STR);
                        break;
                    case 'specimen_volume':
                        $stmt->bindValue($identifier, $this->specimen_volume, PDO::PARAM_STR);
                        break;
                    case 'specimen_units':
                        $stmt->bindValue($identifier, $this->specimen_units, PDO::PARAM_STR);
                        break;
                    case 'specimen_taken_by':
                        $stmt->bindValue($identifier, $this->specimen_taken_by, PDO::PARAM_STR);
                        break;
                    case 'specimen_container':
                        $stmt->bindValue($identifier, $this->specimen_container, PDO::PARAM_STR);
                        break;
                    case 'sample_time':
                        $stmt->bindValue($identifier, $this->sample_time ? $this->sample_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'sample_weekday':
                        $stmt->bindValue($identifier, $this->sample_weekday, PDO::PARAM_INT);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'history':
                        $stmt->bindValue($identifier, $this->history, PDO::PARAM_STR);
                        break;
                    case 'bill_number':
                        $stmt->bindValue($identifier, $this->bill_number, PDO::PARAM_INT);
                        break;
                    case 'bill_status':
                        $stmt->bindValue($identifier, $this->bill_status, PDO::PARAM_STR);
                        break;
                    case 'is_disabled':
                        $stmt->bindValue($identifier, $this->is_disabled, PDO::PARAM_STR);
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
                    case 'priority':
                        $stmt->bindValue($identifier, (int) $this->priority, PDO::PARAM_INT);
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
        $this->setBatchNr($pk);

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
        $pos = CareTestRequestChemlaborTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getBatchNr();
                break;
            case 1:
                return $this->getEncounterNr();
                break;
            case 2:
                return $this->getItemId();
                break;
            case 3:
                return $this->getRoomNr();
                break;
            case 4:
                return $this->getDeptNr();
                break;
            case 5:
                return $this->getParameters();
                break;
            case 6:
                return $this->getDoctorSign();
                break;
            case 7:
                return $this->getHighrisk();
                break;
            case 8:
                return $this->getNotes();
                break;
            case 9:
                return $this->getSendDate();
                break;
            case 10:
                return $this->getSpecimenCollected();
                break;
            case 11:
                return $this->getSpecimenDate();
                break;
            case 12:
                return $this->getSpecimenType();
                break;
            case 13:
                return $this->getSpecimenVolume();
                break;
            case 14:
                return $this->getSpecimenUnits();
                break;
            case 15:
                return $this->getSpecimenTakenBy();
                break;
            case 16:
                return $this->getSpecimenContainer();
                break;
            case 17:
                return $this->getSampleTime();
                break;
            case 18:
                return $this->getSampleWeekday();
                break;
            case 19:
                return $this->getStatus();
                break;
            case 20:
                return $this->getHistory();
                break;
            case 21:
                return $this->getBillNumber();
                break;
            case 22:
                return $this->getBillStatus();
                break;
            case 23:
                return $this->getIsDisabled();
                break;
            case 24:
                return $this->getModifyId();
                break;
            case 25:
                return $this->getModifyTime();
                break;
            case 26:
                return $this->getCreateId();
                break;
            case 27:
                return $this->getCreateTime();
                break;
            case 28:
                return $this->getPriority();
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

        if (isset($alreadyDumpedObjects['CareTestRequestChemlabor'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTestRequestChemlabor'][$this->hashCode()] = true;
        $keys = CareTestRequestChemlaborTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBatchNr(),
            $keys[1] => $this->getEncounterNr(),
            $keys[2] => $this->getItemId(),
            $keys[3] => $this->getRoomNr(),
            $keys[4] => $this->getDeptNr(),
            $keys[5] => $this->getParameters(),
            $keys[6] => $this->getDoctorSign(),
            $keys[7] => $this->getHighrisk(),
            $keys[8] => $this->getNotes(),
            $keys[9] => $this->getSendDate(),
            $keys[10] => $this->getSpecimenCollected(),
            $keys[11] => $this->getSpecimenDate(),
            $keys[12] => $this->getSpecimenType(),
            $keys[13] => $this->getSpecimenVolume(),
            $keys[14] => $this->getSpecimenUnits(),
            $keys[15] => $this->getSpecimenTakenBy(),
            $keys[16] => $this->getSpecimenContainer(),
            $keys[17] => $this->getSampleTime(),
            $keys[18] => $this->getSampleWeekday(),
            $keys[19] => $this->getStatus(),
            $keys[20] => $this->getHistory(),
            $keys[21] => $this->getBillNumber(),
            $keys[22] => $this->getBillStatus(),
            $keys[23] => $this->getIsDisabled(),
            $keys[24] => $this->getModifyId(),
            $keys[25] => $this->getModifyTime(),
            $keys[26] => $this->getCreateId(),
            $keys[27] => $this->getCreateTime(),
            $keys[28] => $this->getPriority(),
        );
        if ($result[$keys[9]] instanceof \DateTimeInterface) {
            $result[$keys[9]] = $result[$keys[9]]->format('c');
        }

        if ($result[$keys[11]] instanceof \DateTimeInterface) {
            $result[$keys[11]] = $result[$keys[11]]->format('c');
        }

        if ($result[$keys[17]] instanceof \DateTimeInterface) {
            $result[$keys[17]] = $result[$keys[17]]->format('c');
        }

        if ($result[$keys[25]] instanceof \DateTimeInterface) {
            $result[$keys[25]] = $result[$keys[25]]->format('c');
        }

        if ($result[$keys[27]] instanceof \DateTimeInterface) {
            $result[$keys[27]] = $result[$keys[27]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTestRequestChemlaborTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBatchNr($value);
                break;
            case 1:
                $this->setEncounterNr($value);
                break;
            case 2:
                $this->setItemId($value);
                break;
            case 3:
                $this->setRoomNr($value);
                break;
            case 4:
                $this->setDeptNr($value);
                break;
            case 5:
                $this->setParameters($value);
                break;
            case 6:
                $this->setDoctorSign($value);
                break;
            case 7:
                $this->setHighrisk($value);
                break;
            case 8:
                $this->setNotes($value);
                break;
            case 9:
                $this->setSendDate($value);
                break;
            case 10:
                $this->setSpecimenCollected($value);
                break;
            case 11:
                $this->setSpecimenDate($value);
                break;
            case 12:
                $this->setSpecimenType($value);
                break;
            case 13:
                $this->setSpecimenVolume($value);
                break;
            case 14:
                $this->setSpecimenUnits($value);
                break;
            case 15:
                $this->setSpecimenTakenBy($value);
                break;
            case 16:
                $this->setSpecimenContainer($value);
                break;
            case 17:
                $this->setSampleTime($value);
                break;
            case 18:
                $this->setSampleWeekday($value);
                break;
            case 19:
                $this->setStatus($value);
                break;
            case 20:
                $this->setHistory($value);
                break;
            case 21:
                $this->setBillNumber($value);
                break;
            case 22:
                $this->setBillStatus($value);
                break;
            case 23:
                $this->setIsDisabled($value);
                break;
            case 24:
                $this->setModifyId($value);
                break;
            case 25:
                $this->setModifyTime($value);
                break;
            case 26:
                $this->setCreateId($value);
                break;
            case 27:
                $this->setCreateTime($value);
                break;
            case 28:
                $this->setPriority($value);
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
        $keys = CareTestRequestChemlaborTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setBatchNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setItemId($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setRoomNr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDeptNr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setParameters($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDoctorSign($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setHighrisk($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setNotes($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setSendDate($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setSpecimenCollected($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setSpecimenDate($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setSpecimenType($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setSpecimenVolume($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setSpecimenUnits($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setSpecimenTakenBy($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setSpecimenContainer($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setSampleTime($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setSampleWeekday($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setStatus($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setHistory($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setBillNumber($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setBillStatus($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setIsDisabled($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setModifyId($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setModifyTime($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setCreateId($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setCreateTime($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setPriority($arr[$keys[28]]);
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
     * @return $this|\CareMd\CareMd\CareTestRequestChemlabor The current object, for fluid interface
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
        $criteria = new Criteria(CareTestRequestChemlaborTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_BATCH_NR)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_BATCH_NR, $this->batch_nr);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_ITEM_ID)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_ITEM_ID, $this->item_id);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_ROOM_NR)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_ROOM_NR, $this->room_nr);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_DEPT_NR)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_DEPT_NR, $this->dept_nr);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_PARAMETERS)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_PARAMETERS, $this->parameters);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_DOCTOR_SIGN)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_DOCTOR_SIGN, $this->doctor_sign);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_HIGHRISK)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_HIGHRISK, $this->highrisk);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_NOTES)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_NOTES, $this->notes);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SEND_DATE)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_SEND_DATE, $this->send_date);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_COLLECTED)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_SPECIMEN_COLLECTED, $this->specimen_collected);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_DATE)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_SPECIMEN_DATE, $this->specimen_date);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_TYPE)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_SPECIMEN_TYPE, $this->specimen_type);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_VOLUME)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_SPECIMEN_VOLUME, $this->specimen_volume);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_UNITS)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_SPECIMEN_UNITS, $this->specimen_units);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_TAKEN_BY)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_SPECIMEN_TAKEN_BY, $this->specimen_taken_by);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SPECIMEN_CONTAINER)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_SPECIMEN_CONTAINER, $this->specimen_container);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SAMPLE_TIME)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_SAMPLE_TIME, $this->sample_time);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_SAMPLE_WEEKDAY)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_SAMPLE_WEEKDAY, $this->sample_weekday);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_STATUS)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_HISTORY)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_BILL_NUMBER)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_BILL_NUMBER, $this->bill_number);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_BILL_STATUS)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_BILL_STATUS, $this->bill_status);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_IS_DISABLED)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_IS_DISABLED, $this->is_disabled);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CareTestRequestChemlaborTableMap::COL_PRIORITY)) {
            $criteria->add(CareTestRequestChemlaborTableMap::COL_PRIORITY, $this->priority);
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
        $criteria = ChildCareTestRequestChemlaborQuery::create();
        $criteria->add(CareTestRequestChemlaborTableMap::COL_BATCH_NR, $this->batch_nr);

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
        $validPk = null !== $this->getBatchNr();

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
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getBatchNr();
    }

    /**
     * Generic method to set the primary key (batch_nr column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setBatchNr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getBatchNr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTestRequestChemlabor (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setItemId($this->getItemId());
        $copyObj->setRoomNr($this->getRoomNr());
        $copyObj->setDeptNr($this->getDeptNr());
        $copyObj->setParameters($this->getParameters());
        $copyObj->setDoctorSign($this->getDoctorSign());
        $copyObj->setHighrisk($this->getHighrisk());
        $copyObj->setNotes($this->getNotes());
        $copyObj->setSendDate($this->getSendDate());
        $copyObj->setSpecimenCollected($this->getSpecimenCollected());
        $copyObj->setSpecimenDate($this->getSpecimenDate());
        $copyObj->setSpecimenType($this->getSpecimenType());
        $copyObj->setSpecimenVolume($this->getSpecimenVolume());
        $copyObj->setSpecimenUnits($this->getSpecimenUnits());
        $copyObj->setSpecimenTakenBy($this->getSpecimenTakenBy());
        $copyObj->setSpecimenContainer($this->getSpecimenContainer());
        $copyObj->setSampleTime($this->getSampleTime());
        $copyObj->setSampleWeekday($this->getSampleWeekday());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setBillNumber($this->getBillNumber());
        $copyObj->setBillStatus($this->getBillStatus());
        $copyObj->setIsDisabled($this->getIsDisabled());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setPriority($this->getPriority());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setBatchNr(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareTestRequestChemlabor Clone of current object.
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
        $this->batch_nr = null;
        $this->encounter_nr = null;
        $this->item_id = null;
        $this->room_nr = null;
        $this->dept_nr = null;
        $this->parameters = null;
        $this->doctor_sign = null;
        $this->highrisk = null;
        $this->notes = null;
        $this->send_date = null;
        $this->specimen_collected = null;
        $this->specimen_date = null;
        $this->specimen_type = null;
        $this->specimen_volume = null;
        $this->specimen_units = null;
        $this->specimen_taken_by = null;
        $this->specimen_container = null;
        $this->sample_time = null;
        $this->sample_weekday = null;
        $this->status = null;
        $this->history = null;
        $this->bill_number = null;
        $this->bill_status = null;
        $this->is_disabled = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->create_id = null;
        $this->create_time = null;
        $this->priority = null;
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
        return (string) $this->exportTo(CareTestRequestChemlaborTableMap::DEFAULT_STRING_FORMAT);
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
