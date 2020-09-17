<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTestFindingsBaclaborQuery as ChildCareTestFindingsBaclaborQuery;
use CareMd\CareMd\Map\CareTestFindingsBaclaborTableMap;
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
 * Base class that represents a row from the 'care_test_findings_baclabor' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTestFindingsBaclabor implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTestFindingsBaclaborTableMap';


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
     * Note: this column has a database default value of: 0
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
     * The value for the notes field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $notes;

    /**
     * The value for the findings_init field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $findings_init;

    /**
     * The value for the findings_current field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $findings_current;

    /**
     * The value for the findings_final field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $findings_final;

    /**
     * The value for the entry_nr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $entry_nr;

    /**
     * The value for the rec_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $rec_date;

    /**
     * The value for the type_general field.
     *
     * @var        string
     */
    protected $type_general;

    /**
     * The value for the resist_anaerob field.
     *
     * @var        string
     */
    protected $resist_anaerob;

    /**
     * The value for the resist_aerob field.
     *
     * @var        string
     */
    protected $resist_aerob;

    /**
     * The value for the findings field.
     *
     * @var        string
     */
    protected $findings;

    /**
     * The value for the doctor_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $doctor_id;

    /**
     * The value for the findings_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $findings_date;

    /**
     * The value for the findings_time field.
     *
     * Note: this column has a database default value of: '00:00:00.000000'
     * @var        DateTime
     */
    protected $findings_time;

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
        $this->batch_nr = 0;
        $this->encounter_nr = 0;
        $this->room_nr = '';
        $this->dept_nr = 0;
        $this->notes = '';
        $this->findings_init = false;
        $this->findings_current = false;
        $this->findings_final = false;
        $this->entry_nr = '';
        $this->rec_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->doctor_id = '';
        $this->findings_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->findings_time = PropelDateTime::newInstance('00:00:00.000000', null, 'DateTime');
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTestFindingsBaclabor object.
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
     * Compares this with another <code>CareTestFindingsBaclabor</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTestFindingsBaclabor</code>, delegates to
     * <code>equals(CareTestFindingsBaclabor)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTestFindingsBaclabor The current object, for fluid interface
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
     * Get the [notes] column value.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Get the [findings_init] column value.
     *
     * @return boolean
     */
    public function getFindingsInit()
    {
        return $this->findings_init;
    }

    /**
     * Get the [findings_init] column value.
     *
     * @return boolean
     */
    public function isFindingsInit()
    {
        return $this->getFindingsInit();
    }

    /**
     * Get the [findings_current] column value.
     *
     * @return boolean
     */
    public function getFindingsCurrent()
    {
        return $this->findings_current;
    }

    /**
     * Get the [findings_current] column value.
     *
     * @return boolean
     */
    public function isFindingsCurrent()
    {
        return $this->getFindingsCurrent();
    }

    /**
     * Get the [findings_final] column value.
     *
     * @return boolean
     */
    public function getFindingsFinal()
    {
        return $this->findings_final;
    }

    /**
     * Get the [findings_final] column value.
     *
     * @return boolean
     */
    public function isFindingsFinal()
    {
        return $this->getFindingsFinal();
    }

    /**
     * Get the [entry_nr] column value.
     *
     * @return string
     */
    public function getEntryNr()
    {
        return $this->entry_nr;
    }

    /**
     * Get the [optionally formatted] temporal [rec_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getRecDate($format = NULL)
    {
        if ($format === null) {
            return $this->rec_date;
        } else {
            return $this->rec_date instanceof \DateTimeInterface ? $this->rec_date->format($format) : null;
        }
    }

    /**
     * Get the [type_general] column value.
     *
     * @return string
     */
    public function getTypeGeneral()
    {
        return $this->type_general;
    }

    /**
     * Get the [resist_anaerob] column value.
     *
     * @return string
     */
    public function getResistAnaerob()
    {
        return $this->resist_anaerob;
    }

    /**
     * Get the [resist_aerob] column value.
     *
     * @return string
     */
    public function getResistAerob()
    {
        return $this->resist_aerob;
    }

    /**
     * Get the [findings] column value.
     *
     * @return string
     */
    public function getFindings()
    {
        return $this->findings;
    }

    /**
     * Get the [doctor_id] column value.
     *
     * @return string
     */
    public function getDoctorId()
    {
        return $this->doctor_id;
    }

    /**
     * Get the [optionally formatted] temporal [findings_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFindingsDate($format = NULL)
    {
        if ($format === null) {
            return $this->findings_date;
        } else {
            return $this->findings_date instanceof \DateTimeInterface ? $this->findings_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [findings_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFindingsTime($format = NULL)
    {
        if ($format === null) {
            return $this->findings_time;
        } else {
            return $this->findings_time instanceof \DateTimeInterface ? $this->findings_time->format($format) : null;
        }
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
     * Set the value of [batch_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setBatchNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->batch_nr !== $v) {
            $this->batch_nr = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_BATCH_NR] = true;
        }

        return $this;
    } // setBatchNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [room_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setRoomNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->room_nr !== $v) {
            $this->room_nr = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_ROOM_NR] = true;
        }

        return $this;
    } // setRoomNr()

    /**
     * Set the value of [dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dept_nr !== $v) {
            $this->dept_nr = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_DEPT_NR] = true;
        }

        return $this;
    } // setDeptNr()

    /**
     * Set the value of [notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->notes !== $v) {
            $this->notes = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_NOTES] = true;
        }

        return $this;
    } // setNotes()

    /**
     * Sets the value of the [findings_init] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setFindingsInit($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->findings_init !== $v) {
            $this->findings_init = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_FINDINGS_INIT] = true;
        }

        return $this;
    } // setFindingsInit()

    /**
     * Sets the value of the [findings_current] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setFindingsCurrent($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->findings_current !== $v) {
            $this->findings_current = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_FINDINGS_CURRENT] = true;
        }

        return $this;
    } // setFindingsCurrent()

    /**
     * Sets the value of the [findings_final] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setFindingsFinal($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->findings_final !== $v) {
            $this->findings_final = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_FINDINGS_FINAL] = true;
        }

        return $this;
    } // setFindingsFinal()

    /**
     * Set the value of [entry_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setEntryNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->entry_nr !== $v) {
            $this->entry_nr = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_ENTRY_NR] = true;
        }

        return $this;
    } // setEntryNr()

    /**
     * Sets the value of [rec_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setRecDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->rec_date !== null || $dt !== null) {
            if ( ($dt != $this->rec_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->rec_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_REC_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setRecDate()

    /**
     * Set the value of [type_general] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setTypeGeneral($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->type_general !== $v) {
            $this->type_general = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_TYPE_GENERAL] = true;
        }

        return $this;
    } // setTypeGeneral()

    /**
     * Set the value of [resist_anaerob] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setResistAnaerob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->resist_anaerob !== $v) {
            $this->resist_anaerob = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_RESIST_ANAEROB] = true;
        }

        return $this;
    } // setResistAnaerob()

    /**
     * Set the value of [resist_aerob] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setResistAerob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->resist_aerob !== $v) {
            $this->resist_aerob = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_RESIST_AEROB] = true;
        }

        return $this;
    } // setResistAerob()

    /**
     * Set the value of [findings] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setFindings($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->findings !== $v) {
            $this->findings = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_FINDINGS] = true;
        }

        return $this;
    } // setFindings()

    /**
     * Set the value of [doctor_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setDoctorId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doctor_id !== $v) {
            $this->doctor_id = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_DOCTOR_ID] = true;
        }

        return $this;
    } // setDoctorId()

    /**
     * Sets the value of [findings_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setFindingsDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->findings_date !== null || $dt !== null) {
            if ( ($dt != $this->findings_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->findings_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_FINDINGS_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setFindingsDate()

    /**
     * Sets the value of [findings_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setFindingsTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->findings_time !== null || $dt !== null) {
            if ( ($dt != $this->findings_time) // normalized values don't match
                || ($dt->format('H:i:s.u') === '00:00:00.000000') // or the entered value matches the default
                 ) {
                $this->findings_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_FINDINGS_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setFindingsTime()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestFindingsBaclaborTableMap::COL_CREATE_TIME] = true;
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
            if ($this->batch_nr !== 0) {
                return false;
            }

            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->room_nr !== '') {
                return false;
            }

            if ($this->dept_nr !== 0) {
                return false;
            }

            if ($this->notes !== '') {
                return false;
            }

            if ($this->findings_init !== false) {
                return false;
            }

            if ($this->findings_current !== false) {
                return false;
            }

            if ($this->findings_final !== false) {
                return false;
            }

            if ($this->entry_nr !== '') {
                return false;
            }

            if ($this->rec_date && $this->rec_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->doctor_id !== '') {
                return false;
            }

            if ($this->findings_date && $this->findings_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->findings_time && $this->findings_time->format('H:i:s.u') !== '00:00:00.000000') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->batch_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('RoomNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->room_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('Notes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('FindingsInit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->findings_init = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('FindingsCurrent', TableMap::TYPE_PHPNAME, $indexType)];
            $this->findings_current = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('FindingsFinal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->findings_final = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('EntryNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->entry_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('RecDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->rec_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('TypeGeneral', TableMap::TYPE_PHPNAME, $indexType)];
            $this->type_general = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('ResistAnaerob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->resist_anaerob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('ResistAerob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->resist_aerob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('Findings', TableMap::TYPE_PHPNAME, $indexType)];
            $this->findings = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('DoctorId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doctor_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('FindingsDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->findings_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('FindingsTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->findings_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTestFindingsBaclaborTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 23; // 23 = CareTestFindingsBaclaborTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTestFindingsBaclabor'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTestFindingsBaclaborTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTestFindingsBaclaborQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTestFindingsBaclabor::setDeleted()
     * @see CareTestFindingsBaclabor::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsBaclaborTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTestFindingsBaclaborQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsBaclaborTableMap::DATABASE_NAME);
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
                CareTestFindingsBaclaborTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_BATCH_NR)) {
            $modifiedColumns[':p' . $index++]  = 'batch_nr';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_ROOM_NR)) {
            $modifiedColumns[':p' . $index++]  = 'room_nr';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'dept_nr';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'notes';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS_INIT)) {
            $modifiedColumns[':p' . $index++]  = 'findings_init';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS_CURRENT)) {
            $modifiedColumns[':p' . $index++]  = 'findings_current';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS_FINAL)) {
            $modifiedColumns[':p' . $index++]  = 'findings_final';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_ENTRY_NR)) {
            $modifiedColumns[':p' . $index++]  = 'entry_nr';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_REC_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'rec_date';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_TYPE_GENERAL)) {
            $modifiedColumns[':p' . $index++]  = 'type_general';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_RESIST_ANAEROB)) {
            $modifiedColumns[':p' . $index++]  = 'resist_anaerob';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_RESIST_AEROB)) {
            $modifiedColumns[':p' . $index++]  = 'resist_aerob';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS)) {
            $modifiedColumns[':p' . $index++]  = 'findings';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_DOCTOR_ID)) {
            $modifiedColumns[':p' . $index++]  = 'doctor_id';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'findings_date';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'findings_time';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_test_findings_baclabor (%s) VALUES (%s)',
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
                    case 'room_nr':
                        $stmt->bindValue($identifier, $this->room_nr, PDO::PARAM_STR);
                        break;
                    case 'dept_nr':
                        $stmt->bindValue($identifier, $this->dept_nr, PDO::PARAM_INT);
                        break;
                    case 'notes':
                        $stmt->bindValue($identifier, $this->notes, PDO::PARAM_STR);
                        break;
                    case 'findings_init':
                        $stmt->bindValue($identifier, (int) $this->findings_init, PDO::PARAM_INT);
                        break;
                    case 'findings_current':
                        $stmt->bindValue($identifier, (int) $this->findings_current, PDO::PARAM_INT);
                        break;
                    case 'findings_final':
                        $stmt->bindValue($identifier, (int) $this->findings_final, PDO::PARAM_INT);
                        break;
                    case 'entry_nr':
                        $stmt->bindValue($identifier, $this->entry_nr, PDO::PARAM_STR);
                        break;
                    case 'rec_date':
                        $stmt->bindValue($identifier, $this->rec_date ? $this->rec_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'type_general':
                        $stmt->bindValue($identifier, $this->type_general, PDO::PARAM_STR);
                        break;
                    case 'resist_anaerob':
                        $stmt->bindValue($identifier, $this->resist_anaerob, PDO::PARAM_STR);
                        break;
                    case 'resist_aerob':
                        $stmt->bindValue($identifier, $this->resist_aerob, PDO::PARAM_STR);
                        break;
                    case 'findings':
                        $stmt->bindValue($identifier, $this->findings, PDO::PARAM_STR);
                        break;
                    case 'doctor_id':
                        $stmt->bindValue($identifier, $this->doctor_id, PDO::PARAM_STR);
                        break;
                    case 'findings_date':
                        $stmt->bindValue($identifier, $this->findings_date ? $this->findings_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'findings_time':
                        $stmt->bindValue($identifier, $this->findings_time ? $this->findings_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
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
        $pos = CareTestFindingsBaclaborTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getRoomNr();
                break;
            case 3:
                return $this->getDeptNr();
                break;
            case 4:
                return $this->getNotes();
                break;
            case 5:
                return $this->getFindingsInit();
                break;
            case 6:
                return $this->getFindingsCurrent();
                break;
            case 7:
                return $this->getFindingsFinal();
                break;
            case 8:
                return $this->getEntryNr();
                break;
            case 9:
                return $this->getRecDate();
                break;
            case 10:
                return $this->getTypeGeneral();
                break;
            case 11:
                return $this->getResistAnaerob();
                break;
            case 12:
                return $this->getResistAerob();
                break;
            case 13:
                return $this->getFindings();
                break;
            case 14:
                return $this->getDoctorId();
                break;
            case 15:
                return $this->getFindingsDate();
                break;
            case 16:
                return $this->getFindingsTime();
                break;
            case 17:
                return $this->getStatus();
                break;
            case 18:
                return $this->getHistory();
                break;
            case 19:
                return $this->getModifyId();
                break;
            case 20:
                return $this->getModifyTime();
                break;
            case 21:
                return $this->getCreateId();
                break;
            case 22:
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

        if (isset($alreadyDumpedObjects['CareTestFindingsBaclabor'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTestFindingsBaclabor'][$this->hashCode()] = true;
        $keys = CareTestFindingsBaclaborTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBatchNr(),
            $keys[1] => $this->getEncounterNr(),
            $keys[2] => $this->getRoomNr(),
            $keys[3] => $this->getDeptNr(),
            $keys[4] => $this->getNotes(),
            $keys[5] => $this->getFindingsInit(),
            $keys[6] => $this->getFindingsCurrent(),
            $keys[7] => $this->getFindingsFinal(),
            $keys[8] => $this->getEntryNr(),
            $keys[9] => $this->getRecDate(),
            $keys[10] => $this->getTypeGeneral(),
            $keys[11] => $this->getResistAnaerob(),
            $keys[12] => $this->getResistAerob(),
            $keys[13] => $this->getFindings(),
            $keys[14] => $this->getDoctorId(),
            $keys[15] => $this->getFindingsDate(),
            $keys[16] => $this->getFindingsTime(),
            $keys[17] => $this->getStatus(),
            $keys[18] => $this->getHistory(),
            $keys[19] => $this->getModifyId(),
            $keys[20] => $this->getModifyTime(),
            $keys[21] => $this->getCreateId(),
            $keys[22] => $this->getCreateTime(),
        );
        if ($result[$keys[9]] instanceof \DateTimeInterface) {
            $result[$keys[9]] = $result[$keys[9]]->format('c');
        }

        if ($result[$keys[15]] instanceof \DateTimeInterface) {
            $result[$keys[15]] = $result[$keys[15]]->format('c');
        }

        if ($result[$keys[16]] instanceof \DateTimeInterface) {
            $result[$keys[16]] = $result[$keys[16]]->format('c');
        }

        if ($result[$keys[20]] instanceof \DateTimeInterface) {
            $result[$keys[20]] = $result[$keys[20]]->format('c');
        }

        if ($result[$keys[22]] instanceof \DateTimeInterface) {
            $result[$keys[22]] = $result[$keys[22]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTestFindingsBaclaborTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor
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
                $this->setRoomNr($value);
                break;
            case 3:
                $this->setDeptNr($value);
                break;
            case 4:
                $this->setNotes($value);
                break;
            case 5:
                $this->setFindingsInit($value);
                break;
            case 6:
                $this->setFindingsCurrent($value);
                break;
            case 7:
                $this->setFindingsFinal($value);
                break;
            case 8:
                $this->setEntryNr($value);
                break;
            case 9:
                $this->setRecDate($value);
                break;
            case 10:
                $this->setTypeGeneral($value);
                break;
            case 11:
                $this->setResistAnaerob($value);
                break;
            case 12:
                $this->setResistAerob($value);
                break;
            case 13:
                $this->setFindings($value);
                break;
            case 14:
                $this->setDoctorId($value);
                break;
            case 15:
                $this->setFindingsDate($value);
                break;
            case 16:
                $this->setFindingsTime($value);
                break;
            case 17:
                $this->setStatus($value);
                break;
            case 18:
                $this->setHistory($value);
                break;
            case 19:
                $this->setModifyId($value);
                break;
            case 20:
                $this->setModifyTime($value);
                break;
            case 21:
                $this->setCreateId($value);
                break;
            case 22:
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
        $keys = CareTestFindingsBaclaborTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setBatchNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setRoomNr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setDeptNr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setNotes($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setFindingsInit($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setFindingsCurrent($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setFindingsFinal($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setEntryNr($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setRecDate($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setTypeGeneral($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setResistAnaerob($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setResistAerob($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setFindings($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setDoctorId($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setFindingsDate($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setFindingsTime($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setStatus($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setHistory($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setModifyId($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setModifyTime($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setCreateId($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setCreateTime($arr[$keys[22]]);
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
     * @return $this|\CareMd\CareMd\CareTestFindingsBaclabor The current object, for fluid interface
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
        $criteria = new Criteria(CareTestFindingsBaclaborTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_BATCH_NR)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_BATCH_NR, $this->batch_nr);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_ROOM_NR)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_ROOM_NR, $this->room_nr);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_DEPT_NR)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_DEPT_NR, $this->dept_nr);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_NOTES)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_NOTES, $this->notes);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS_INIT)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_FINDINGS_INIT, $this->findings_init);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS_CURRENT)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_FINDINGS_CURRENT, $this->findings_current);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS_FINAL)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_FINDINGS_FINAL, $this->findings_final);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_ENTRY_NR)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_ENTRY_NR, $this->entry_nr);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_REC_DATE)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_REC_DATE, $this->rec_date);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_TYPE_GENERAL)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_TYPE_GENERAL, $this->type_general);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_RESIST_ANAEROB)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_RESIST_ANAEROB, $this->resist_anaerob);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_RESIST_AEROB)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_RESIST_AEROB, $this->resist_aerob);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_FINDINGS, $this->findings);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_DOCTOR_ID)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_DOCTOR_ID, $this->doctor_id);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS_DATE)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_FINDINGS_DATE, $this->findings_date);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_FINDINGS_TIME)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_FINDINGS_TIME, $this->findings_time);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_STATUS)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_HISTORY)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTestFindingsBaclaborTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTestFindingsBaclaborTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareTestFindingsBaclaborQuery::create();
        $criteria->add(CareTestFindingsBaclaborTableMap::COL_BATCH_NR, $this->batch_nr);
        $criteria->add(CareTestFindingsBaclaborTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        $criteria->add(CareTestFindingsBaclaborTableMap::COL_ROOM_NR, $this->room_nr);
        $criteria->add(CareTestFindingsBaclaborTableMap::COL_DEPT_NR, $this->dept_nr);

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
        $validPk = null !== $this->getBatchNr() &&
            null !== $this->getEncounterNr() &&
            null !== $this->getRoomNr() &&
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
        $pks[0] = $this->getBatchNr();
        $pks[1] = $this->getEncounterNr();
        $pks[2] = $this->getRoomNr();
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
        $this->setBatchNr($keys[0]);
        $this->setEncounterNr($keys[1]);
        $this->setRoomNr($keys[2]);
        $this->setDeptNr($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getBatchNr()) && (null === $this->getEncounterNr()) && (null === $this->getRoomNr()) && (null === $this->getDeptNr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTestFindingsBaclabor (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBatchNr($this->getBatchNr());
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setRoomNr($this->getRoomNr());
        $copyObj->setDeptNr($this->getDeptNr());
        $copyObj->setNotes($this->getNotes());
        $copyObj->setFindingsInit($this->getFindingsInit());
        $copyObj->setFindingsCurrent($this->getFindingsCurrent());
        $copyObj->setFindingsFinal($this->getFindingsFinal());
        $copyObj->setEntryNr($this->getEntryNr());
        $copyObj->setRecDate($this->getRecDate());
        $copyObj->setTypeGeneral($this->getTypeGeneral());
        $copyObj->setResistAnaerob($this->getResistAnaerob());
        $copyObj->setResistAerob($this->getResistAerob());
        $copyObj->setFindings($this->getFindings());
        $copyObj->setDoctorId($this->getDoctorId());
        $copyObj->setFindingsDate($this->getFindingsDate());
        $copyObj->setFindingsTime($this->getFindingsTime());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
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
     * @return \CareMd\CareMd\CareTestFindingsBaclabor Clone of current object.
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
        $this->room_nr = null;
        $this->dept_nr = null;
        $this->notes = null;
        $this->findings_init = null;
        $this->findings_current = null;
        $this->findings_final = null;
        $this->entry_nr = null;
        $this->rec_date = null;
        $this->type_general = null;
        $this->resist_anaerob = null;
        $this->resist_aerob = null;
        $this->findings = null;
        $this->doctor_id = null;
        $this->findings_date = null;
        $this->findings_time = null;
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
        return (string) $this->exportTo(CareTestFindingsBaclaborTableMap::DEFAULT_STRING_FORMAT);
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
