<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareDiagnosisLocalcodeQuery as ChildCareDiagnosisLocalcodeQuery;
use CareMd\CareMd\Map\CareDiagnosisLocalcodeTableMap;
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
 * Base class that represents a row from the 'care_diagnosis_localcode' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareDiagnosisLocalcode implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareDiagnosisLocalcodeTableMap';


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
     * The value for the localcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $localcode;

    /**
     * The value for the description field.
     *
     * @var        string
     */
    protected $description;

    /**
     * The value for the class_sub field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $class_sub;

    /**
     * The value for the type field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $type;

    /**
     * The value for the inclusive field.
     *
     * @var        string
     */
    protected $inclusive;

    /**
     * The value for the exclusive field.
     *
     * @var        string
     */
    protected $exclusive;

    /**
     * The value for the notes field.
     *
     * @var        string
     */
    protected $notes;

    /**
     * The value for the std_code field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $std_code;

    /**
     * The value for the sub_level field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $sub_level;

    /**
     * The value for the remarks field.
     *
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the extra_codes field.
     *
     * @var        string
     */
    protected $extra_codes;

    /**
     * The value for the extra_subclass field.
     *
     * @var        string
     */
    protected $extra_subclass;

    /**
     * The value for the search_keys field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $search_keys;

    /**
     * The value for the use_frequency field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $use_frequency;

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
        $this->localcode = '';
        $this->class_sub = '';
        $this->type = '';
        $this->std_code = '';
        $this->sub_level = 0;
        $this->search_keys = '';
        $this->use_frequency = 0;
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareDiagnosisLocalcode object.
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
     * Compares this with another <code>CareDiagnosisLocalcode</code> instance.  If
     * <code>obj</code> is an instance of <code>CareDiagnosisLocalcode</code>, delegates to
     * <code>equals(CareDiagnosisLocalcode)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareDiagnosisLocalcode The current object, for fluid interface
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
     * Get the [localcode] column value.
     *
     * @return string
     */
    public function getLocalcode()
    {
        return $this->localcode;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the [class_sub] column value.
     *
     * @return string
     */
    public function getClassSub()
    {
        return $this->class_sub;
    }

    /**
     * Get the [type] column value.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the [inclusive] column value.
     *
     * @return string
     */
    public function getInclusive()
    {
        return $this->inclusive;
    }

    /**
     * Get the [exclusive] column value.
     *
     * @return string
     */
    public function getExclusive()
    {
        return $this->exclusive;
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
     * Get the [std_code] column value.
     *
     * @return string
     */
    public function getStdCode()
    {
        return $this->std_code;
    }

    /**
     * Get the [sub_level] column value.
     *
     * @return int
     */
    public function getSubLevel()
    {
        return $this->sub_level;
    }

    /**
     * Get the [remarks] column value.
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Get the [extra_codes] column value.
     *
     * @return string
     */
    public function getExtraCodes()
    {
        return $this->extra_codes;
    }

    /**
     * Get the [extra_subclass] column value.
     *
     * @return string
     */
    public function getExtraSubclass()
    {
        return $this->extra_subclass;
    }

    /**
     * Get the [search_keys] column value.
     *
     * @return string
     */
    public function getSearchKeys()
    {
        return $this->search_keys;
    }

    /**
     * Get the [use_frequency] column value.
     *
     * @return int
     */
    public function getUseFrequency()
    {
        return $this->use_frequency;
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
     * Set the value of [localcode] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setLocalcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->localcode !== $v) {
            $this->localcode = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_LOCALCODE] = true;
        }

        return $this;
    } // setLocalcode()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_DESCRIPTION] = true;
        }

        return $this;
    } // setDescription()

    /**
     * Set the value of [class_sub] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setClassSub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->class_sub !== $v) {
            $this->class_sub = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_CLASS_SUB] = true;
        }

        return $this;
    } // setClassSub()

    /**
     * Set the value of [type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_TYPE] = true;
        }

        return $this;
    } // setType()

    /**
     * Set the value of [inclusive] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setInclusive($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inclusive !== $v) {
            $this->inclusive = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_INCLUSIVE] = true;
        }

        return $this;
    } // setInclusive()

    /**
     * Set the value of [exclusive] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setExclusive($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->exclusive !== $v) {
            $this->exclusive = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_EXCLUSIVE] = true;
        }

        return $this;
    } // setExclusive()

    /**
     * Set the value of [notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->notes !== $v) {
            $this->notes = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_NOTES] = true;
        }

        return $this;
    } // setNotes()

    /**
     * Set the value of [std_code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setStdCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->std_code !== $v) {
            $this->std_code = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_STD_CODE] = true;
        }

        return $this;
    } // setStdCode()

    /**
     * Set the value of [sub_level] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setSubLevel($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->sub_level !== $v) {
            $this->sub_level = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_SUB_LEVEL] = true;
        }

        return $this;
    } // setSubLevel()

    /**
     * Set the value of [remarks] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_REMARKS] = true;
        }

        return $this;
    } // setRemarks()

    /**
     * Set the value of [extra_codes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setExtraCodes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->extra_codes !== $v) {
            $this->extra_codes = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_EXTRA_CODES] = true;
        }

        return $this;
    } // setExtraCodes()

    /**
     * Set the value of [extra_subclass] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setExtraSubclass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->extra_subclass !== $v) {
            $this->extra_subclass = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_EXTRA_SUBCLASS] = true;
        }

        return $this;
    } // setExtraSubclass()

    /**
     * Set the value of [search_keys] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setSearchKeys($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->search_keys !== $v) {
            $this->search_keys = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_SEARCH_KEYS] = true;
        }

        return $this;
    } // setSearchKeys()

    /**
     * Set the value of [use_frequency] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setUseFrequency($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->use_frequency !== $v) {
            $this->use_frequency = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_USE_FREQUENCY] = true;
        }

        return $this;
    } // setUseFrequency()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareDiagnosisLocalcodeTableMap::COL_CREATE_TIME] = true;
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
            if ($this->localcode !== '') {
                return false;
            }

            if ($this->class_sub !== '') {
                return false;
            }

            if ($this->type !== '') {
                return false;
            }

            if ($this->std_code !== '') {
                return false;
            }

            if ($this->sub_level !== 0) {
                return false;
            }

            if ($this->search_keys !== '') {
                return false;
            }

            if ($this->use_frequency !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('Localcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->localcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('Description', TableMap::TYPE_PHPNAME, $indexType)];
            $this->description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('ClassSub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->class_sub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('Type', TableMap::TYPE_PHPNAME, $indexType)];
            $this->type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('Inclusive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inclusive = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('Exclusive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->exclusive = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('Notes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('StdCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->std_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('SubLevel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sub_level = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('Remarks', TableMap::TYPE_PHPNAME, $indexType)];
            $this->remarks = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('ExtraCodes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->extra_codes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('ExtraSubclass', TableMap::TYPE_PHPNAME, $indexType)];
            $this->extra_subclass = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('SearchKeys', TableMap::TYPE_PHPNAME, $indexType)];
            $this->search_keys = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('UseFrequency', TableMap::TYPE_PHPNAME, $indexType)];
            $this->use_frequency = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareDiagnosisLocalcodeTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 20; // 20 = CareDiagnosisLocalcodeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareDiagnosisLocalcode'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareDiagnosisLocalcodeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareDiagnosisLocalcode::setDeleted()
     * @see CareDiagnosisLocalcode::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareDiagnosisLocalcodeQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);
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
                CareDiagnosisLocalcodeTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE)) {
            $modifiedColumns[':p' . $index++]  = 'localcode';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'description';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_CLASS_SUB)) {
            $modifiedColumns[':p' . $index++]  = 'class_sub';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'type';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_INCLUSIVE)) {
            $modifiedColumns[':p' . $index++]  = 'inclusive';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_EXCLUSIVE)) {
            $modifiedColumns[':p' . $index++]  = 'exclusive';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'notes';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_STD_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'std_code';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_SUB_LEVEL)) {
            $modifiedColumns[':p' . $index++]  = 'sub_level';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_REMARKS)) {
            $modifiedColumns[':p' . $index++]  = 'remarks';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_EXTRA_CODES)) {
            $modifiedColumns[':p' . $index++]  = 'extra_codes';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_EXTRA_SUBCLASS)) {
            $modifiedColumns[':p' . $index++]  = 'extra_subclass';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_SEARCH_KEYS)) {
            $modifiedColumns[':p' . $index++]  = 'search_keys';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_USE_FREQUENCY)) {
            $modifiedColumns[':p' . $index++]  = 'use_frequency';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_diagnosis_localcode (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'localcode':
                        $stmt->bindValue($identifier, $this->localcode, PDO::PARAM_STR);
                        break;
                    case 'description':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case 'class_sub':
                        $stmt->bindValue($identifier, $this->class_sub, PDO::PARAM_STR);
                        break;
                    case 'type':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case 'inclusive':
                        $stmt->bindValue($identifier, $this->inclusive, PDO::PARAM_STR);
                        break;
                    case 'exclusive':
                        $stmt->bindValue($identifier, $this->exclusive, PDO::PARAM_STR);
                        break;
                    case 'notes':
                        $stmt->bindValue($identifier, $this->notes, PDO::PARAM_STR);
                        break;
                    case 'std_code':
                        $stmt->bindValue($identifier, $this->std_code, PDO::PARAM_STR);
                        break;
                    case 'sub_level':
                        $stmt->bindValue($identifier, $this->sub_level, PDO::PARAM_INT);
                        break;
                    case 'remarks':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case 'extra_codes':
                        $stmt->bindValue($identifier, $this->extra_codes, PDO::PARAM_STR);
                        break;
                    case 'extra_subclass':
                        $stmt->bindValue($identifier, $this->extra_subclass, PDO::PARAM_STR);
                        break;
                    case 'search_keys':
                        $stmt->bindValue($identifier, $this->search_keys, PDO::PARAM_STR);
                        break;
                    case 'use_frequency':
                        $stmt->bindValue($identifier, $this->use_frequency, PDO::PARAM_INT);
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
        $pos = CareDiagnosisLocalcodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getLocalcode();
                break;
            case 1:
                return $this->getDescription();
                break;
            case 2:
                return $this->getClassSub();
                break;
            case 3:
                return $this->getType();
                break;
            case 4:
                return $this->getInclusive();
                break;
            case 5:
                return $this->getExclusive();
                break;
            case 6:
                return $this->getNotes();
                break;
            case 7:
                return $this->getStdCode();
                break;
            case 8:
                return $this->getSubLevel();
                break;
            case 9:
                return $this->getRemarks();
                break;
            case 10:
                return $this->getExtraCodes();
                break;
            case 11:
                return $this->getExtraSubclass();
                break;
            case 12:
                return $this->getSearchKeys();
                break;
            case 13:
                return $this->getUseFrequency();
                break;
            case 14:
                return $this->getStatus();
                break;
            case 15:
                return $this->getHistory();
                break;
            case 16:
                return $this->getModifyId();
                break;
            case 17:
                return $this->getModifyTime();
                break;
            case 18:
                return $this->getCreateId();
                break;
            case 19:
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

        if (isset($alreadyDumpedObjects['CareDiagnosisLocalcode'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareDiagnosisLocalcode'][$this->hashCode()] = true;
        $keys = CareDiagnosisLocalcodeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLocalcode(),
            $keys[1] => $this->getDescription(),
            $keys[2] => $this->getClassSub(),
            $keys[3] => $this->getType(),
            $keys[4] => $this->getInclusive(),
            $keys[5] => $this->getExclusive(),
            $keys[6] => $this->getNotes(),
            $keys[7] => $this->getStdCode(),
            $keys[8] => $this->getSubLevel(),
            $keys[9] => $this->getRemarks(),
            $keys[10] => $this->getExtraCodes(),
            $keys[11] => $this->getExtraSubclass(),
            $keys[12] => $this->getSearchKeys(),
            $keys[13] => $this->getUseFrequency(),
            $keys[14] => $this->getStatus(),
            $keys[15] => $this->getHistory(),
            $keys[16] => $this->getModifyId(),
            $keys[17] => $this->getModifyTime(),
            $keys[18] => $this->getCreateId(),
            $keys[19] => $this->getCreateTime(),
        );
        if ($result[$keys[17]] instanceof \DateTimeInterface) {
            $result[$keys[17]] = $result[$keys[17]]->format('c');
        }

        if ($result[$keys[19]] instanceof \DateTimeInterface) {
            $result[$keys[19]] = $result[$keys[19]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareDiagnosisLocalcodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setLocalcode($value);
                break;
            case 1:
                $this->setDescription($value);
                break;
            case 2:
                $this->setClassSub($value);
                break;
            case 3:
                $this->setType($value);
                break;
            case 4:
                $this->setInclusive($value);
                break;
            case 5:
                $this->setExclusive($value);
                break;
            case 6:
                $this->setNotes($value);
                break;
            case 7:
                $this->setStdCode($value);
                break;
            case 8:
                $this->setSubLevel($value);
                break;
            case 9:
                $this->setRemarks($value);
                break;
            case 10:
                $this->setExtraCodes($value);
                break;
            case 11:
                $this->setExtraSubclass($value);
                break;
            case 12:
                $this->setSearchKeys($value);
                break;
            case 13:
                $this->setUseFrequency($value);
                break;
            case 14:
                $this->setStatus($value);
                break;
            case 15:
                $this->setHistory($value);
                break;
            case 16:
                $this->setModifyId($value);
                break;
            case 17:
                $this->setModifyTime($value);
                break;
            case 18:
                $this->setCreateId($value);
                break;
            case 19:
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
        $keys = CareDiagnosisLocalcodeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setLocalcode($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setDescription($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setClassSub($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setType($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInclusive($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setExclusive($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setNotes($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setStdCode($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setSubLevel($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setRemarks($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setExtraCodes($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setExtraSubclass($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setSearchKeys($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setUseFrequency($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setStatus($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setHistory($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setModifyId($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setModifyTime($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setCreateId($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setCreateTime($arr[$keys[19]]);
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
     * @return $this|\CareMd\CareMd\CareDiagnosisLocalcode The current object, for fluid interface
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
        $criteria = new Criteria(CareDiagnosisLocalcodeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE, $this->localcode);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_DESCRIPTION)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_DESCRIPTION, $this->description);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_CLASS_SUB)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_CLASS_SUB, $this->class_sub);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_TYPE)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_TYPE, $this->type);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_INCLUSIVE)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_INCLUSIVE, $this->inclusive);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_EXCLUSIVE)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_EXCLUSIVE, $this->exclusive);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_NOTES)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_NOTES, $this->notes);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_STD_CODE)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_STD_CODE, $this->std_code);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_SUB_LEVEL)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_SUB_LEVEL, $this->sub_level);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_REMARKS)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_REMARKS, $this->remarks);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_EXTRA_CODES)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_EXTRA_CODES, $this->extra_codes);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_EXTRA_SUBCLASS)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_EXTRA_SUBCLASS, $this->extra_subclass);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_SEARCH_KEYS)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_SEARCH_KEYS, $this->search_keys);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_USE_FREQUENCY)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_USE_FREQUENCY, $this->use_frequency);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_STATUS)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_HISTORY)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_CREATE_ID)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareDiagnosisLocalcodeTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareDiagnosisLocalcodeTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareDiagnosisLocalcodeQuery::create();
        $criteria->add(CareDiagnosisLocalcodeTableMap::COL_LOCALCODE, $this->localcode);

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
        $validPk = null !== $this->getLocalcode();

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
        return $this->getLocalcode();
    }

    /**
     * Generic method to set the primary key (localcode column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setLocalcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getLocalcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareDiagnosisLocalcode (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLocalcode($this->getLocalcode());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setClassSub($this->getClassSub());
        $copyObj->setType($this->getType());
        $copyObj->setInclusive($this->getInclusive());
        $copyObj->setExclusive($this->getExclusive());
        $copyObj->setNotes($this->getNotes());
        $copyObj->setStdCode($this->getStdCode());
        $copyObj->setSubLevel($this->getSubLevel());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setExtraCodes($this->getExtraCodes());
        $copyObj->setExtraSubclass($this->getExtraSubclass());
        $copyObj->setSearchKeys($this->getSearchKeys());
        $copyObj->setUseFrequency($this->getUseFrequency());
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
     * @return \CareMd\CareMd\CareDiagnosisLocalcode Clone of current object.
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
        $this->localcode = null;
        $this->description = null;
        $this->class_sub = null;
        $this->type = null;
        $this->inclusive = null;
        $this->exclusive = null;
        $this->notes = null;
        $this->std_code = null;
        $this->sub_level = null;
        $this->remarks = null;
        $this->extra_codes = null;
        $this->extra_subclass = null;
        $this->search_keys = null;
        $this->use_frequency = null;
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
        return (string) $this->exportTo(CareDiagnosisLocalcodeTableMap::DEFAULT_STRING_FORMAT);
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
