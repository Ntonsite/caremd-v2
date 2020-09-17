<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTestFindingsChemlabCopyQuery as ChildCareTestFindingsChemlabCopyQuery;
use CareMd\CareMd\Map\CareTestFindingsChemlabCopyTableMap;
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
 * Base class that represents a row from the 'care_test_findings_chemlab_copy' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTestFindingsChemlabCopy implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTestFindingsChemlabCopyTableMap';


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
     * The value for the job_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $job_id;

    /**
     * The value for the test_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $test_date;

    /**
     * The value for the test_time field.
     *
     * Note: this column has a database default value of: '00:00:00.000000'
     * @var        DateTime
     */
    protected $test_time;

    /**
     * The value for the group_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $group_id;

    /**
     * The value for the serial_value field.
     *
     * @var        string
     */
    protected $serial_value;

    /**
     * The value for the add_value field.
     *
     * @var        string
     */
    protected $add_value;

    /**
     * The value for the validator field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $validator;

    /**
     * The value for the validate_dt field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $validate_dt;

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
        $this->encounter_nr = 0;
        $this->job_id = '';
        $this->test_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->test_time = PropelDateTime::newInstance('00:00:00.000000', null, 'DateTime');
        $this->group_id = '';
        $this->validator = '';
        $this->validate_dt = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTestFindingsChemlabCopy object.
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
     * Compares this with another <code>CareTestFindingsChemlabCopy</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTestFindingsChemlabCopy</code>, delegates to
     * <code>equals(CareTestFindingsChemlabCopy)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTestFindingsChemlabCopy The current object, for fluid interface
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
     * Get the [job_id] column value.
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Get the [optionally formatted] temporal [test_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTestDate($format = NULL)
    {
        if ($format === null) {
            return $this->test_date;
        } else {
            return $this->test_date instanceof \DateTimeInterface ? $this->test_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [test_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTestTime($format = NULL)
    {
        if ($format === null) {
            return $this->test_time;
        } else {
            return $this->test_time instanceof \DateTimeInterface ? $this->test_time->format($format) : null;
        }
    }

    /**
     * Get the [group_id] column value.
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Get the [serial_value] column value.
     *
     * @return string
     */
    public function getSerialValue()
    {
        return $this->serial_value;
    }

    /**
     * Get the [add_value] column value.
     *
     * @return string
     */
    public function getAddValue()
    {
        return $this->add_value;
    }

    /**
     * Get the [validator] column value.
     *
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Get the [optionally formatted] temporal [validate_dt] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getValidateDt($format = NULL)
    {
        if ($format === null) {
            return $this->validate_dt;
        } else {
            return $this->validate_dt instanceof \DateTimeInterface ? $this->validate_dt->format($format) : null;
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
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setBatchNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->batch_nr !== $v) {
            $this->batch_nr = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR] = true;
        }

        return $this;
    } // setBatchNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [job_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setJobId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->job_id !== $v) {
            $this->job_id = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_JOB_ID] = true;
        }

        return $this;
    } // setJobId()

    /**
     * Sets the value of [test_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setTestDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->test_date !== null || $dt !== null) {
            if ( ($dt != $this->test_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->test_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_TEST_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setTestDate()

    /**
     * Sets the value of [test_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setTestTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->test_time !== null || $dt !== null) {
            if ( ($dt != $this->test_time) // normalized values don't match
                || ($dt->format('H:i:s.u') === '00:00:00.000000') // or the entered value matches the default
                 ) {
                $this->test_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_TEST_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setTestTime()

    /**
     * Set the value of [group_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setGroupId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->group_id !== $v) {
            $this->group_id = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_GROUP_ID] = true;
        }

        return $this;
    } // setGroupId()

    /**
     * Set the value of [serial_value] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setSerialValue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->serial_value !== $v) {
            $this->serial_value = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_SERIAL_VALUE] = true;
        }

        return $this;
    } // setSerialValue()

    /**
     * Set the value of [add_value] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setAddValue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->add_value !== $v) {
            $this->add_value = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_ADD_VALUE] = true;
        }

        return $this;
    } // setAddValue()

    /**
     * Set the value of [validator] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setValidator($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->validator !== $v) {
            $this->validator = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_VALIDATOR] = true;
        }

        return $this;
    } // setValidator()

    /**
     * Sets the value of [validate_dt] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setValidateDt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->validate_dt !== null || $dt !== null) {
            if ( ($dt != $this->validate_dt) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->validate_dt = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_VALIDATE_DT] = true;
            }
        } // if either are not null

        return $this;
    } // setValidateDt()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_CREATE_TIME] = true;
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
            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->job_id !== '') {
                return false;
            }

            if ($this->test_date && $this->test_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->test_time && $this->test_time->format('H:i:s.u') !== '00:00:00.000000') {
                return false;
            }

            if ($this->group_id !== '') {
                return false;
            }

            if ($this->validator !== '') {
                return false;
            }

            if ($this->validate_dt && $this->validate_dt->format('Y-m-d H:i:s.u') !== NULL) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->batch_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('JobId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->job_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('TestDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->test_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('TestTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->test_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('GroupId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->group_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('SerialValue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->serial_value = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('AddValue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->add_value = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('Validator', TableMap::TYPE_PHPNAME, $indexType)];
            $this->validator = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('ValidateDt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->validate_dt = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTestFindingsChemlabCopyTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 16; // 16 = CareTestFindingsChemlabCopyTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTestFindingsChemlabCopy'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTestFindingsChemlabCopyTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTestFindingsChemlabCopyQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTestFindingsChemlabCopy::setDeleted()
     * @see CareTestFindingsChemlabCopy::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsChemlabCopyTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTestFindingsChemlabCopyQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestFindingsChemlabCopyTableMap::DATABASE_NAME);
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
                CareTestFindingsChemlabCopyTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR] = true;
        if (null !== $this->batch_nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR)) {
            $modifiedColumns[':p' . $index++]  = 'batch_nr';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_JOB_ID)) {
            $modifiedColumns[':p' . $index++]  = 'job_id';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_TEST_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'test_date';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_TEST_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'test_time';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_GROUP_ID)) {
            $modifiedColumns[':p' . $index++]  = 'group_id';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_SERIAL_VALUE)) {
            $modifiedColumns[':p' . $index++]  = 'serial_value';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_ADD_VALUE)) {
            $modifiedColumns[':p' . $index++]  = 'add_value';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_VALIDATOR)) {
            $modifiedColumns[':p' . $index++]  = 'validator';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_VALIDATE_DT)) {
            $modifiedColumns[':p' . $index++]  = 'validate_dt';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_test_findings_chemlab_copy (%s) VALUES (%s)',
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
                    case 'job_id':
                        $stmt->bindValue($identifier, $this->job_id, PDO::PARAM_STR);
                        break;
                    case 'test_date':
                        $stmt->bindValue($identifier, $this->test_date ? $this->test_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'test_time':
                        $stmt->bindValue($identifier, $this->test_time ? $this->test_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'group_id':
                        $stmt->bindValue($identifier, $this->group_id, PDO::PARAM_STR);
                        break;
                    case 'serial_value':
                        $stmt->bindValue($identifier, $this->serial_value, PDO::PARAM_STR);
                        break;
                    case 'add_value':
                        $stmt->bindValue($identifier, $this->add_value, PDO::PARAM_STR);
                        break;
                    case 'validator':
                        $stmt->bindValue($identifier, $this->validator, PDO::PARAM_STR);
                        break;
                    case 'validate_dt':
                        $stmt->bindValue($identifier, $this->validate_dt ? $this->validate_dt->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
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
        $pos = CareTestFindingsChemlabCopyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getJobId();
                break;
            case 3:
                return $this->getTestDate();
                break;
            case 4:
                return $this->getTestTime();
                break;
            case 5:
                return $this->getGroupId();
                break;
            case 6:
                return $this->getSerialValue();
                break;
            case 7:
                return $this->getAddValue();
                break;
            case 8:
                return $this->getValidator();
                break;
            case 9:
                return $this->getValidateDt();
                break;
            case 10:
                return $this->getStatus();
                break;
            case 11:
                return $this->getHistory();
                break;
            case 12:
                return $this->getModifyId();
                break;
            case 13:
                return $this->getModifyTime();
                break;
            case 14:
                return $this->getCreateId();
                break;
            case 15:
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

        if (isset($alreadyDumpedObjects['CareTestFindingsChemlabCopy'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTestFindingsChemlabCopy'][$this->hashCode()] = true;
        $keys = CareTestFindingsChemlabCopyTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBatchNr(),
            $keys[1] => $this->getEncounterNr(),
            $keys[2] => $this->getJobId(),
            $keys[3] => $this->getTestDate(),
            $keys[4] => $this->getTestTime(),
            $keys[5] => $this->getGroupId(),
            $keys[6] => $this->getSerialValue(),
            $keys[7] => $this->getAddValue(),
            $keys[8] => $this->getValidator(),
            $keys[9] => $this->getValidateDt(),
            $keys[10] => $this->getStatus(),
            $keys[11] => $this->getHistory(),
            $keys[12] => $this->getModifyId(),
            $keys[13] => $this->getModifyTime(),
            $keys[14] => $this->getCreateId(),
            $keys[15] => $this->getCreateTime(),
        );
        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('c');
        }

        if ($result[$keys[4]] instanceof \DateTimeInterface) {
            $result[$keys[4]] = $result[$keys[4]]->format('c');
        }

        if ($result[$keys[9]] instanceof \DateTimeInterface) {
            $result[$keys[9]] = $result[$keys[9]]->format('c');
        }

        if ($result[$keys[13]] instanceof \DateTimeInterface) {
            $result[$keys[13]] = $result[$keys[13]]->format('c');
        }

        if ($result[$keys[15]] instanceof \DateTimeInterface) {
            $result[$keys[15]] = $result[$keys[15]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTestFindingsChemlabCopyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy
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
                $this->setJobId($value);
                break;
            case 3:
                $this->setTestDate($value);
                break;
            case 4:
                $this->setTestTime($value);
                break;
            case 5:
                $this->setGroupId($value);
                break;
            case 6:
                $this->setSerialValue($value);
                break;
            case 7:
                $this->setAddValue($value);
                break;
            case 8:
                $this->setValidator($value);
                break;
            case 9:
                $this->setValidateDt($value);
                break;
            case 10:
                $this->setStatus($value);
                break;
            case 11:
                $this->setHistory($value);
                break;
            case 12:
                $this->setModifyId($value);
                break;
            case 13:
                $this->setModifyTime($value);
                break;
            case 14:
                $this->setCreateId($value);
                break;
            case 15:
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
        $keys = CareTestFindingsChemlabCopyTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setBatchNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setJobId($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setTestDate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setTestTime($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setGroupId($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setSerialValue($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setAddValue($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setValidator($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setValidateDt($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setStatus($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setHistory($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setModifyId($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setModifyTime($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setCreateId($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCreateTime($arr[$keys[15]]);
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
     * @return $this|\CareMd\CareMd\CareTestFindingsChemlabCopy The current object, for fluid interface
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
        $criteria = new Criteria(CareTestFindingsChemlabCopyTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR, $this->batch_nr);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_JOB_ID)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_JOB_ID, $this->job_id);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_TEST_DATE)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_TEST_DATE, $this->test_date);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_TEST_TIME)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_TEST_TIME, $this->test_time);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_GROUP_ID)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_GROUP_ID, $this->group_id);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_SERIAL_VALUE)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_SERIAL_VALUE, $this->serial_value);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_ADD_VALUE)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_ADD_VALUE, $this->add_value);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_VALIDATOR)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_VALIDATOR, $this->validator);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_VALIDATE_DT)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_VALIDATE_DT, $this->validate_dt);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_STATUS)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_HISTORY)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTestFindingsChemlabCopyTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareTestFindingsChemlabCopyQuery::create();
        $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_BATCH_NR, $this->batch_nr);
        $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        $criteria->add(CareTestFindingsChemlabCopyTableMap::COL_JOB_ID, $this->job_id);

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
            null !== $this->getJobId();

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
        $pks[2] = $this->getJobId();

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
        $this->setJobId($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getBatchNr()) && (null === $this->getEncounterNr()) && (null === $this->getJobId());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTestFindingsChemlabCopy (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setJobId($this->getJobId());
        $copyObj->setTestDate($this->getTestDate());
        $copyObj->setTestTime($this->getTestTime());
        $copyObj->setGroupId($this->getGroupId());
        $copyObj->setSerialValue($this->getSerialValue());
        $copyObj->setAddValue($this->getAddValue());
        $copyObj->setValidator($this->getValidator());
        $copyObj->setValidateDt($this->getValidateDt());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
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
     * @return \CareMd\CareMd\CareTestFindingsChemlabCopy Clone of current object.
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
        $this->job_id = null;
        $this->test_date = null;
        $this->test_time = null;
        $this->group_id = null;
        $this->serial_value = null;
        $this->add_value = null;
        $this->validator = null;
        $this->validate_dt = null;
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
        return (string) $this->exportTo(CareTestFindingsChemlabCopyTableMap::DEFAULT_STRING_FORMAT);
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
