<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterDiagnosticsReportQuery as ChildCareEncounterDiagnosticsReportQuery;
use CareMd\CareMd\Map\CareEncounterDiagnosticsReportTableMap;
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
 * Base class that represents a row from the 'care_encounter_diagnostics_report' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareEncounterDiagnosticsReport implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareEncounterDiagnosticsReportTableMap';


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
     * The value for the item_nr field.
     *
     * @var        int
     */
    protected $item_nr;

    /**
     * The value for the report_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $report_nr;

    /**
     * The value for the reporting_dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $reporting_dept_nr;

    /**
     * The value for the reporting_dept field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $reporting_dept;

    /**
     * The value for the report_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $report_date;

    /**
     * The value for the report_time field.
     *
     * Note: this column has a database default value of: '00:00:00.000000'
     * @var        DateTime
     */
    protected $report_time;

    /**
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

    /**
     * The value for the script_call field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $script_call;

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
     * The value for the open_status field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $open_status;

    /**
     * The value for the is_reviewed field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_reviewed;

    /**
     * The value for the reviewer_comments field.
     *
     * @var        string
     */
    protected $reviewer_comments;

    /**
     * The value for the reviewed_by field.
     *
     * @var        string
     */
    protected $reviewed_by;

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
        $this->report_nr = 0;
        $this->reporting_dept_nr = 0;
        $this->reporting_dept = '';
        $this->report_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->report_time = PropelDateTime::newInstance('00:00:00.000000', null, 'DateTime');
        $this->encounter_nr = 0;
        $this->script_call = '';
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->open_status = false;
        $this->is_reviewed = false;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareEncounterDiagnosticsReport object.
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
     * Compares this with another <code>CareEncounterDiagnosticsReport</code> instance.  If
     * <code>obj</code> is an instance of <code>CareEncounterDiagnosticsReport</code>, delegates to
     * <code>equals(CareEncounterDiagnosticsReport)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareEncounterDiagnosticsReport The current object, for fluid interface
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
     * Get the [item_nr] column value.
     *
     * @return int
     */
    public function getItemNr()
    {
        return $this->item_nr;
    }

    /**
     * Get the [report_nr] column value.
     *
     * @return int
     */
    public function getReportNr()
    {
        return $this->report_nr;
    }

    /**
     * Get the [reporting_dept_nr] column value.
     *
     * @return int
     */
    public function getReportingDeptNr()
    {
        return $this->reporting_dept_nr;
    }

    /**
     * Get the [reporting_dept] column value.
     *
     * @return string
     */
    public function getReportingDept()
    {
        return $this->reporting_dept;
    }

    /**
     * Get the [optionally formatted] temporal [report_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getReportDate($format = NULL)
    {
        if ($format === null) {
            return $this->report_date;
        } else {
            return $this->report_date instanceof \DateTimeInterface ? $this->report_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [report_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getReportTime($format = NULL)
    {
        if ($format === null) {
            return $this->report_time;
        } else {
            return $this->report_time instanceof \DateTimeInterface ? $this->report_time->format($format) : null;
        }
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
     * Get the [script_call] column value.
     *
     * @return string
     */
    public function getScriptCall()
    {
        return $this->script_call;
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
     * Get the [open_status] column value.
     *
     * @return boolean
     */
    public function getOpenStatus()
    {
        return $this->open_status;
    }

    /**
     * Get the [open_status] column value.
     *
     * @return boolean
     */
    public function isOpenStatus()
    {
        return $this->getOpenStatus();
    }

    /**
     * Get the [is_reviewed] column value.
     *
     * @return boolean
     */
    public function getIsReviewed()
    {
        return $this->is_reviewed;
    }

    /**
     * Get the [is_reviewed] column value.
     *
     * @return boolean
     */
    public function isReviewed()
    {
        return $this->getIsReviewed();
    }

    /**
     * Get the [reviewer_comments] column value.
     *
     * @return string
     */
    public function getReviewerComments()
    {
        return $this->reviewer_comments;
    }

    /**
     * Get the [reviewed_by] column value.
     *
     * @return string
     */
    public function getReviewedBy()
    {
        return $this->reviewed_by;
    }

    /**
     * Set the value of [item_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setItemNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->item_nr !== $v) {
            $this->item_nr = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR] = true;
        }

        return $this;
    } // setItemNr()

    /**
     * Set the value of [report_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setReportNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->report_nr !== $v) {
            $this->report_nr = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR] = true;
        }

        return $this;
    } // setReportNr()

    /**
     * Set the value of [reporting_dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setReportingDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->reporting_dept_nr !== $v) {
            $this->reporting_dept_nr = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT_NR] = true;
        }

        return $this;
    } // setReportingDeptNr()

    /**
     * Set the value of [reporting_dept] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setReportingDept($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->reporting_dept !== $v) {
            $this->reporting_dept = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT] = true;
        }

        return $this;
    } // setReportingDept()

    /**
     * Sets the value of [report_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setReportDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->report_date !== null || $dt !== null) {
            if ( ($dt != $this->report_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->report_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_REPORT_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setReportDate()

    /**
     * Sets the value of [report_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setReportTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->report_time !== null || $dt !== null) {
            if ( ($dt != $this->report_time) // normalized values don't match
                || ($dt->format('H:i:s.u') === '00:00:00.000000') // or the entered value matches the default
                 ) {
                $this->report_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_REPORT_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setReportTime()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [script_call] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setScriptCall($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->script_call !== $v) {
            $this->script_call = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_SCRIPT_CALL] = true;
        }

        return $this;
    } // setScriptCall()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_CREATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateTime()

    /**
     * Sets the value of the [open_status] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setOpenStatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->open_status !== $v) {
            $this->open_status = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_OPEN_STATUS] = true;
        }

        return $this;
    } // setOpenStatus()

    /**
     * Sets the value of the [is_reviewed] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setIsReviewed($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_reviewed !== $v) {
            $this->is_reviewed = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_IS_REVIEWED] = true;
        }

        return $this;
    } // setIsReviewed()

    /**
     * Set the value of [reviewer_comments] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setReviewerComments($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->reviewer_comments !== $v) {
            $this->reviewer_comments = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_REVIEWER_COMMENTS] = true;
        }

        return $this;
    } // setReviewerComments()

    /**
     * Set the value of [reviewed_by] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object (for fluent API support)
     */
    public function setReviewedBy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->reviewed_by !== $v) {
            $this->reviewed_by = $v;
            $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_REVIEWED_BY] = true;
        }

        return $this;
    } // setReviewedBy()

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
            if ($this->report_nr !== 0) {
                return false;
            }

            if ($this->reporting_dept_nr !== 0) {
                return false;
            }

            if ($this->reporting_dept !== '') {
                return false;
            }

            if ($this->report_date && $this->report_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->report_time && $this->report_time->format('H:i:s.u') !== '00:00:00.000000') {
                return false;
            }

            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->script_call !== '') {
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

            if ($this->open_status !== false) {
                return false;
            }

            if ($this->is_reviewed !== false) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->item_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ReportNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->report_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ReportingDeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->reporting_dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ReportingDept', TableMap::TYPE_PHPNAME, $indexType)];
            $this->reporting_dept = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ReportDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->report_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ReportTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->report_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ScriptCall', TableMap::TYPE_PHPNAME, $indexType)];
            $this->script_call = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('OpenStatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->open_status = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('IsReviewed', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_reviewed = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ReviewerComments', TableMap::TYPE_PHPNAME, $indexType)];
            $this->reviewer_comments = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareEncounterDiagnosticsReportTableMap::translateFieldName('ReviewedBy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->reviewed_by = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 18; // 18 = CareEncounterDiagnosticsReportTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareEncounterDiagnosticsReport'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareEncounterDiagnosticsReportQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareEncounterDiagnosticsReport::setDeleted()
     * @see CareEncounterDiagnosticsReport::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareEncounterDiagnosticsReportQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);
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
                CareEncounterDiagnosticsReportTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR] = true;
        if (null !== $this->item_nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR)) {
            $modifiedColumns[':p' . $index++]  = 'item_nr';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'report_nr';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'reporting_dept_nr';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT)) {
            $modifiedColumns[':p' . $index++]  = 'reporting_dept';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REPORT_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'report_date';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REPORT_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'report_time';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_SCRIPT_CALL)) {
            $modifiedColumns[':p' . $index++]  = 'script_call';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_OPEN_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'open_status';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_IS_REVIEWED)) {
            $modifiedColumns[':p' . $index++]  = 'is_reviewed';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REVIEWER_COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = 'reviewer_comments';
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REVIEWED_BY)) {
            $modifiedColumns[':p' . $index++]  = 'reviewed_by';
        }

        $sql = sprintf(
            'INSERT INTO care_encounter_diagnostics_report (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'item_nr':
                        $stmt->bindValue($identifier, $this->item_nr, PDO::PARAM_INT);
                        break;
                    case 'report_nr':
                        $stmt->bindValue($identifier, $this->report_nr, PDO::PARAM_INT);
                        break;
                    case 'reporting_dept_nr':
                        $stmt->bindValue($identifier, $this->reporting_dept_nr, PDO::PARAM_INT);
                        break;
                    case 'reporting_dept':
                        $stmt->bindValue($identifier, $this->reporting_dept, PDO::PARAM_STR);
                        break;
                    case 'report_date':
                        $stmt->bindValue($identifier, $this->report_date ? $this->report_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'report_time':
                        $stmt->bindValue($identifier, $this->report_time ? $this->report_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'script_call':
                        $stmt->bindValue($identifier, $this->script_call, PDO::PARAM_STR);
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
                    case 'open_status':
                        $stmt->bindValue($identifier, (int) $this->open_status, PDO::PARAM_INT);
                        break;
                    case 'is_reviewed':
                        $stmt->bindValue($identifier, (int) $this->is_reviewed, PDO::PARAM_INT);
                        break;
                    case 'reviewer_comments':
                        $stmt->bindValue($identifier, $this->reviewer_comments, PDO::PARAM_STR);
                        break;
                    case 'reviewed_by':
                        $stmt->bindValue($identifier, $this->reviewed_by, PDO::PARAM_STR);
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
        $this->setItemNr($pk);

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
        $pos = CareEncounterDiagnosticsReportTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getItemNr();
                break;
            case 1:
                return $this->getReportNr();
                break;
            case 2:
                return $this->getReportingDeptNr();
                break;
            case 3:
                return $this->getReportingDept();
                break;
            case 4:
                return $this->getReportDate();
                break;
            case 5:
                return $this->getReportTime();
                break;
            case 6:
                return $this->getEncounterNr();
                break;
            case 7:
                return $this->getScriptCall();
                break;
            case 8:
                return $this->getStatus();
                break;
            case 9:
                return $this->getHistory();
                break;
            case 10:
                return $this->getModifyId();
                break;
            case 11:
                return $this->getModifyTime();
                break;
            case 12:
                return $this->getCreateId();
                break;
            case 13:
                return $this->getCreateTime();
                break;
            case 14:
                return $this->getOpenStatus();
                break;
            case 15:
                return $this->getIsReviewed();
                break;
            case 16:
                return $this->getReviewerComments();
                break;
            case 17:
                return $this->getReviewedBy();
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

        if (isset($alreadyDumpedObjects['CareEncounterDiagnosticsReport'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareEncounterDiagnosticsReport'][$this->hashCode()] = true;
        $keys = CareEncounterDiagnosticsReportTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getItemNr(),
            $keys[1] => $this->getReportNr(),
            $keys[2] => $this->getReportingDeptNr(),
            $keys[3] => $this->getReportingDept(),
            $keys[4] => $this->getReportDate(),
            $keys[5] => $this->getReportTime(),
            $keys[6] => $this->getEncounterNr(),
            $keys[7] => $this->getScriptCall(),
            $keys[8] => $this->getStatus(),
            $keys[9] => $this->getHistory(),
            $keys[10] => $this->getModifyId(),
            $keys[11] => $this->getModifyTime(),
            $keys[12] => $this->getCreateId(),
            $keys[13] => $this->getCreateTime(),
            $keys[14] => $this->getOpenStatus(),
            $keys[15] => $this->getIsReviewed(),
            $keys[16] => $this->getReviewerComments(),
            $keys[17] => $this->getReviewedBy(),
        );
        if ($result[$keys[4]] instanceof \DateTimeInterface) {
            $result[$keys[4]] = $result[$keys[4]]->format('c');
        }

        if ($result[$keys[5]] instanceof \DateTimeInterface) {
            $result[$keys[5]] = $result[$keys[5]]->format('c');
        }

        if ($result[$keys[11]] instanceof \DateTimeInterface) {
            $result[$keys[11]] = $result[$keys[11]]->format('c');
        }

        if ($result[$keys[13]] instanceof \DateTimeInterface) {
            $result[$keys[13]] = $result[$keys[13]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareEncounterDiagnosticsReportTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setItemNr($value);
                break;
            case 1:
                $this->setReportNr($value);
                break;
            case 2:
                $this->setReportingDeptNr($value);
                break;
            case 3:
                $this->setReportingDept($value);
                break;
            case 4:
                $this->setReportDate($value);
                break;
            case 5:
                $this->setReportTime($value);
                break;
            case 6:
                $this->setEncounterNr($value);
                break;
            case 7:
                $this->setScriptCall($value);
                break;
            case 8:
                $this->setStatus($value);
                break;
            case 9:
                $this->setHistory($value);
                break;
            case 10:
                $this->setModifyId($value);
                break;
            case 11:
                $this->setModifyTime($value);
                break;
            case 12:
                $this->setCreateId($value);
                break;
            case 13:
                $this->setCreateTime($value);
                break;
            case 14:
                $this->setOpenStatus($value);
                break;
            case 15:
                $this->setIsReviewed($value);
                break;
            case 16:
                $this->setReviewerComments($value);
                break;
            case 17:
                $this->setReviewedBy($value);
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
        $keys = CareEncounterDiagnosticsReportTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setItemNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setReportNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setReportingDeptNr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setReportingDept($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setReportDate($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setReportTime($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setEncounterNr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setScriptCall($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setStatus($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setHistory($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setModifyId($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setModifyTime($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setCreateId($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setCreateTime($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOpenStatus($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setIsReviewed($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setReviewerComments($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setReviewedBy($arr[$keys[17]]);
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
     * @return $this|\CareMd\CareMd\CareEncounterDiagnosticsReport The current object, for fluid interface
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
        $criteria = new Criteria(CareEncounterDiagnosticsReportTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR, $this->item_nr);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR, $this->report_nr);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT_NR)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT_NR, $this->reporting_dept_nr);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_REPORTING_DEPT, $this->reporting_dept);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REPORT_DATE)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_REPORT_DATE, $this->report_date);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REPORT_TIME)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_REPORT_TIME, $this->report_time);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_SCRIPT_CALL)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_SCRIPT_CALL, $this->script_call);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_STATUS)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_HISTORY)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_CREATE_ID)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_OPEN_STATUS)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_OPEN_STATUS, $this->open_status);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_IS_REVIEWED)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_IS_REVIEWED, $this->is_reviewed);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REVIEWER_COMMENTS)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_REVIEWER_COMMENTS, $this->reviewer_comments);
        }
        if ($this->isColumnModified(CareEncounterDiagnosticsReportTableMap::COL_REVIEWED_BY)) {
            $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_REVIEWED_BY, $this->reviewed_by);
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
        $criteria = ChildCareEncounterDiagnosticsReportQuery::create();
        $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_ITEM_NR, $this->item_nr);
        $criteria->add(CareEncounterDiagnosticsReportTableMap::COL_REPORT_NR, $this->report_nr);

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
        $validPk = null !== $this->getItemNr() &&
            null !== $this->getReportNr();

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
        $pks[0] = $this->getItemNr();
        $pks[1] = $this->getReportNr();

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
        $this->setItemNr($keys[0]);
        $this->setReportNr($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getItemNr()) && (null === $this->getReportNr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareEncounterDiagnosticsReport (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setReportNr($this->getReportNr());
        $copyObj->setReportingDeptNr($this->getReportingDeptNr());
        $copyObj->setReportingDept($this->getReportingDept());
        $copyObj->setReportDate($this->getReportDate());
        $copyObj->setReportTime($this->getReportTime());
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setScriptCall($this->getScriptCall());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setOpenStatus($this->getOpenStatus());
        $copyObj->setIsReviewed($this->getIsReviewed());
        $copyObj->setReviewerComments($this->getReviewerComments());
        $copyObj->setReviewedBy($this->getReviewedBy());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setItemNr(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareEncounterDiagnosticsReport Clone of current object.
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
        $this->item_nr = null;
        $this->report_nr = null;
        $this->reporting_dept_nr = null;
        $this->reporting_dept = null;
        $this->report_date = null;
        $this->report_time = null;
        $this->encounter_nr = null;
        $this->script_call = null;
        $this->status = null;
        $this->history = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->create_id = null;
        $this->create_time = null;
        $this->open_status = null;
        $this->is_reviewed = null;
        $this->reviewer_comments = null;
        $this->reviewed_by = null;
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
        return (string) $this->exportTo(CareEncounterDiagnosticsReportTableMap::DEFAULT_STRING_FORMAT);
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
