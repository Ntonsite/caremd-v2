<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTechQuestionsQuery as ChildCareTechQuestionsQuery;
use CareMd\CareMd\Map\CareTechQuestionsTableMap;
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
 * Base class that represents a row from the 'care_tech_questions' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTechQuestions implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTechQuestionsTableMap';


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
     * The value for the dept field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $dept;

    /**
     * The value for the query field.
     *
     * @var        string
     */
    protected $query;

    /**
     * The value for the inquirer field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inquirer;

    /**
     * The value for the tphone field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tphone;

    /**
     * The value for the tdate field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $tdate;

    /**
     * The value for the ttime field.
     *
     * Note: this column has a database default value of: '00:00:00.000000'
     * @var        DateTime
     */
    protected $ttime;

    /**
     * The value for the tid field.
     *
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        DateTime
     */
    protected $tid;

    /**
     * The value for the reply field.
     *
     * @var        string
     */
    protected $reply;

    /**
     * The value for the answered field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $answered;

    /**
     * The value for the ansby field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ansby;

    /**
     * The value for the astamp field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $astamp;

    /**
     * The value for the archive field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $archive;

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
     * Note: this column has a database default value of: NULL
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
        $this->dept = '';
        $this->inquirer = '';
        $this->tphone = '';
        $this->tdate = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->ttime = PropelDateTime::newInstance('00:00:00.000000', null, 'DateTime');
        $this->answered = false;
        $this->ansby = '';
        $this->astamp = '';
        $this->archive = false;
        $this->status = '';
        $this->modify_id = '';
        $this->modify_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTechQuestions object.
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
     * Compares this with another <code>CareTechQuestions</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTechQuestions</code>, delegates to
     * <code>equals(CareTechQuestions)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTechQuestions The current object, for fluid interface
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
     * Get the [dept] column value.
     *
     * @return string
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Get the [query] column value.
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Get the [inquirer] column value.
     *
     * @return string
     */
    public function getInquirer()
    {
        return $this->inquirer;
    }

    /**
     * Get the [tphone] column value.
     *
     * @return string
     */
    public function getTphone()
    {
        return $this->tphone;
    }

    /**
     * Get the [optionally formatted] temporal [tdate] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTdate($format = NULL)
    {
        if ($format === null) {
            return $this->tdate;
        } else {
            return $this->tdate instanceof \DateTimeInterface ? $this->tdate->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [ttime] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTtime($format = NULL)
    {
        if ($format === null) {
            return $this->ttime;
        } else {
            return $this->ttime instanceof \DateTimeInterface ? $this->ttime->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [tid] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTid($format = NULL)
    {
        if ($format === null) {
            return $this->tid;
        } else {
            return $this->tid instanceof \DateTimeInterface ? $this->tid->format($format) : null;
        }
    }

    /**
     * Get the [reply] column value.
     *
     * @return string
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Get the [answered] column value.
     *
     * @return boolean
     */
    public function getAnswered()
    {
        return $this->answered;
    }

    /**
     * Get the [answered] column value.
     *
     * @return boolean
     */
    public function isAnswered()
    {
        return $this->getAnswered();
    }

    /**
     * Get the [ansby] column value.
     *
     * @return string
     */
    public function getAnsby()
    {
        return $this->ansby;
    }

    /**
     * Get the [astamp] column value.
     *
     * @return string
     */
    public function getAstamp()
    {
        return $this->astamp;
    }

    /**
     * Get the [archive] column value.
     *
     * @return boolean
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Get the [archive] column value.
     *
     * @return boolean
     */
    public function isArchive()
    {
        return $this->getArchive();
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
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setBatchNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->batch_nr !== $v) {
            $this->batch_nr = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_BATCH_NR] = true;
        }

        return $this;
    } // setBatchNr()

    /**
     * Set the value of [dept] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setDept($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dept !== $v) {
            $this->dept = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_DEPT] = true;
        }

        return $this;
    } // setDept()

    /**
     * Set the value of [query] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setQuery($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->query !== $v) {
            $this->query = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_QUERY] = true;
        }

        return $this;
    } // setQuery()

    /**
     * Set the value of [inquirer] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setInquirer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inquirer !== $v) {
            $this->inquirer = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_INQUIRER] = true;
        }

        return $this;
    } // setInquirer()

    /**
     * Set the value of [tphone] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setTphone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tphone !== $v) {
            $this->tphone = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_TPHONE] = true;
        }

        return $this;
    } // setTphone()

    /**
     * Sets the value of [tdate] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setTdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->tdate !== null || $dt !== null) {
            if ( ($dt != $this->tdate) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->tdate = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTechQuestionsTableMap::COL_TDATE] = true;
            }
        } // if either are not null

        return $this;
    } // setTdate()

    /**
     * Sets the value of [ttime] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setTtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ttime !== null || $dt !== null) {
            if ( ($dt != $this->ttime) // normalized values don't match
                || ($dt->format('H:i:s.u') === '00:00:00.000000') // or the entered value matches the default
                 ) {
                $this->ttime = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTechQuestionsTableMap::COL_TTIME] = true;
            }
        } // if either are not null

        return $this;
    } // setTtime()

    /**
     * Sets the value of [tid] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setTid($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->tid !== null || $dt !== null) {
            if ($this->tid === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->tid->format("Y-m-d H:i:s.u")) {
                $this->tid = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTechQuestionsTableMap::COL_TID] = true;
            }
        } // if either are not null

        return $this;
    } // setTid()

    /**
     * Set the value of [reply] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setReply($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->reply !== $v) {
            $this->reply = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_REPLY] = true;
        }

        return $this;
    } // setReply()

    /**
     * Sets the value of the [answered] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setAnswered($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->answered !== $v) {
            $this->answered = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_ANSWERED] = true;
        }

        return $this;
    } // setAnswered()

    /**
     * Set the value of [ansby] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setAnsby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ansby !== $v) {
            $this->ansby = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_ANSBY] = true;
        }

        return $this;
    } // setAnsby()

    /**
     * Set the value of [astamp] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setAstamp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->astamp !== $v) {
            $this->astamp = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_ASTAMP] = true;
        }

        return $this;
    } // setAstamp()

    /**
     * Sets the value of the [archive] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setArchive($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->archive !== $v) {
            $this->archive = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_ARCHIVE] = true;
        }

        return $this;
    } // setArchive()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ( ($dt != $this->modify_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTechQuestionsTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareTechQuestionsTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTechQuestionsTableMap::COL_CREATE_TIME] = true;
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
            if ($this->dept !== '') {
                return false;
            }

            if ($this->inquirer !== '') {
                return false;
            }

            if ($this->tphone !== '') {
                return false;
            }

            if ($this->tdate && $this->tdate->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->ttime && $this->ttime->format('H:i:s.u') !== '00:00:00.000000') {
                return false;
            }

            if ($this->answered !== false) {
                return false;
            }

            if ($this->ansby !== '') {
                return false;
            }

            if ($this->astamp !== '') {
                return false;
            }

            if ($this->archive !== false) {
                return false;
            }

            if ($this->status !== '') {
                return false;
            }

            if ($this->modify_id !== '') {
                return false;
            }

            if ($this->modify_time && $this->modify_time->format('Y-m-d H:i:s.u') !== NULL) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTechQuestionsTableMap::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->batch_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTechQuestionsTableMap::translateFieldName('Dept', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTechQuestionsTableMap::translateFieldName('Query', TableMap::TYPE_PHPNAME, $indexType)];
            $this->query = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTechQuestionsTableMap::translateFieldName('Inquirer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inquirer = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTechQuestionsTableMap::translateFieldName('Tphone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->tphone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTechQuestionsTableMap::translateFieldName('Tdate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->tdate = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTechQuestionsTableMap::translateFieldName('Ttime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ttime = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTechQuestionsTableMap::translateFieldName('Tid', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->tid = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTechQuestionsTableMap::translateFieldName('Reply', TableMap::TYPE_PHPNAME, $indexType)];
            $this->reply = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTechQuestionsTableMap::translateFieldName('Answered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->answered = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTechQuestionsTableMap::translateFieldName('Ansby', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ansby = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTechQuestionsTableMap::translateFieldName('Astamp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->astamp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTechQuestionsTableMap::translateFieldName('Archive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->archive = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTechQuestionsTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTechQuestionsTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTechQuestionsTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTechQuestionsTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTechQuestionsTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTechQuestionsTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 19; // 19 = CareTechQuestionsTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTechQuestions'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTechQuestionsTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTechQuestionsQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTechQuestions::setDeleted()
     * @see CareTechQuestions::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechQuestionsTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTechQuestionsQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTechQuestionsTableMap::DATABASE_NAME);
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
                CareTechQuestionsTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTechQuestionsTableMap::COL_BATCH_NR] = true;
        if (null !== $this->batch_nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTechQuestionsTableMap::COL_BATCH_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_BATCH_NR)) {
            $modifiedColumns[':p' . $index++]  = 'batch_nr';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_DEPT)) {
            $modifiedColumns[':p' . $index++]  = 'dept';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_QUERY)) {
            $modifiedColumns[':p' . $index++]  = 'query';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_INQUIRER)) {
            $modifiedColumns[':p' . $index++]  = 'inquirer';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_TPHONE)) {
            $modifiedColumns[':p' . $index++]  = 'tphone';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_TDATE)) {
            $modifiedColumns[':p' . $index++]  = 'tdate';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_TTIME)) {
            $modifiedColumns[':p' . $index++]  = 'ttime';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_TID)) {
            $modifiedColumns[':p' . $index++]  = 'tid';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_REPLY)) {
            $modifiedColumns[':p' . $index++]  = 'reply';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_ANSWERED)) {
            $modifiedColumns[':p' . $index++]  = 'answered';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_ANSBY)) {
            $modifiedColumns[':p' . $index++]  = 'ansby';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_ASTAMP)) {
            $modifiedColumns[':p' . $index++]  = 'astamp';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_ARCHIVE)) {
            $modifiedColumns[':p' . $index++]  = 'archive';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_tech_questions (%s) VALUES (%s)',
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
                    case 'dept':
                        $stmt->bindValue($identifier, $this->dept, PDO::PARAM_STR);
                        break;
                    case 'query':
                        $stmt->bindValue($identifier, $this->query, PDO::PARAM_STR);
                        break;
                    case 'inquirer':
                        $stmt->bindValue($identifier, $this->inquirer, PDO::PARAM_STR);
                        break;
                    case 'tphone':
                        $stmt->bindValue($identifier, $this->tphone, PDO::PARAM_STR);
                        break;
                    case 'tdate':
                        $stmt->bindValue($identifier, $this->tdate ? $this->tdate->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'ttime':
                        $stmt->bindValue($identifier, $this->ttime ? $this->ttime->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'tid':
                        $stmt->bindValue($identifier, $this->tid ? $this->tid->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'reply':
                        $stmt->bindValue($identifier, $this->reply, PDO::PARAM_STR);
                        break;
                    case 'answered':
                        $stmt->bindValue($identifier, (int) $this->answered, PDO::PARAM_INT);
                        break;
                    case 'ansby':
                        $stmt->bindValue($identifier, $this->ansby, PDO::PARAM_STR);
                        break;
                    case 'astamp':
                        $stmt->bindValue($identifier, $this->astamp, PDO::PARAM_STR);
                        break;
                    case 'archive':
                        $stmt->bindValue($identifier, (int) $this->archive, PDO::PARAM_INT);
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
        $pos = CareTechQuestionsTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getDept();
                break;
            case 2:
                return $this->getQuery();
                break;
            case 3:
                return $this->getInquirer();
                break;
            case 4:
                return $this->getTphone();
                break;
            case 5:
                return $this->getTdate();
                break;
            case 6:
                return $this->getTtime();
                break;
            case 7:
                return $this->getTid();
                break;
            case 8:
                return $this->getReply();
                break;
            case 9:
                return $this->getAnswered();
                break;
            case 10:
                return $this->getAnsby();
                break;
            case 11:
                return $this->getAstamp();
                break;
            case 12:
                return $this->getArchive();
                break;
            case 13:
                return $this->getStatus();
                break;
            case 14:
                return $this->getHistory();
                break;
            case 15:
                return $this->getModifyId();
                break;
            case 16:
                return $this->getModifyTime();
                break;
            case 17:
                return $this->getCreateId();
                break;
            case 18:
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

        if (isset($alreadyDumpedObjects['CareTechQuestions'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTechQuestions'][$this->hashCode()] = true;
        $keys = CareTechQuestionsTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBatchNr(),
            $keys[1] => $this->getDept(),
            $keys[2] => $this->getQuery(),
            $keys[3] => $this->getInquirer(),
            $keys[4] => $this->getTphone(),
            $keys[5] => $this->getTdate(),
            $keys[6] => $this->getTtime(),
            $keys[7] => $this->getTid(),
            $keys[8] => $this->getReply(),
            $keys[9] => $this->getAnswered(),
            $keys[10] => $this->getAnsby(),
            $keys[11] => $this->getAstamp(),
            $keys[12] => $this->getArchive(),
            $keys[13] => $this->getStatus(),
            $keys[14] => $this->getHistory(),
            $keys[15] => $this->getModifyId(),
            $keys[16] => $this->getModifyTime(),
            $keys[17] => $this->getCreateId(),
            $keys[18] => $this->getCreateTime(),
        );
        if ($result[$keys[5]] instanceof \DateTimeInterface) {
            $result[$keys[5]] = $result[$keys[5]]->format('c');
        }

        if ($result[$keys[6]] instanceof \DateTimeInterface) {
            $result[$keys[6]] = $result[$keys[6]]->format('c');
        }

        if ($result[$keys[7]] instanceof \DateTimeInterface) {
            $result[$keys[7]] = $result[$keys[7]]->format('c');
        }

        if ($result[$keys[16]] instanceof \DateTimeInterface) {
            $result[$keys[16]] = $result[$keys[16]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTechQuestions
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTechQuestionsTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTechQuestions
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBatchNr($value);
                break;
            case 1:
                $this->setDept($value);
                break;
            case 2:
                $this->setQuery($value);
                break;
            case 3:
                $this->setInquirer($value);
                break;
            case 4:
                $this->setTphone($value);
                break;
            case 5:
                $this->setTdate($value);
                break;
            case 6:
                $this->setTtime($value);
                break;
            case 7:
                $this->setTid($value);
                break;
            case 8:
                $this->setReply($value);
                break;
            case 9:
                $this->setAnswered($value);
                break;
            case 10:
                $this->setAnsby($value);
                break;
            case 11:
                $this->setAstamp($value);
                break;
            case 12:
                $this->setArchive($value);
                break;
            case 13:
                $this->setStatus($value);
                break;
            case 14:
                $this->setHistory($value);
                break;
            case 15:
                $this->setModifyId($value);
                break;
            case 16:
                $this->setModifyTime($value);
                break;
            case 17:
                $this->setCreateId($value);
                break;
            case 18:
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
        $keys = CareTechQuestionsTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setBatchNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setDept($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setQuery($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInquirer($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setTphone($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setTdate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setTtime($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setTid($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setReply($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setAnswered($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setAnsby($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setAstamp($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArchive($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setStatus($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setHistory($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setModifyId($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setModifyTime($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setCreateId($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setCreateTime($arr[$keys[18]]);
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
     * @return $this|\CareMd\CareMd\CareTechQuestions The current object, for fluid interface
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
        $criteria = new Criteria(CareTechQuestionsTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_BATCH_NR)) {
            $criteria->add(CareTechQuestionsTableMap::COL_BATCH_NR, $this->batch_nr);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_DEPT)) {
            $criteria->add(CareTechQuestionsTableMap::COL_DEPT, $this->dept);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_QUERY)) {
            $criteria->add(CareTechQuestionsTableMap::COL_QUERY, $this->query);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_INQUIRER)) {
            $criteria->add(CareTechQuestionsTableMap::COL_INQUIRER, $this->inquirer);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_TPHONE)) {
            $criteria->add(CareTechQuestionsTableMap::COL_TPHONE, $this->tphone);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_TDATE)) {
            $criteria->add(CareTechQuestionsTableMap::COL_TDATE, $this->tdate);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_TTIME)) {
            $criteria->add(CareTechQuestionsTableMap::COL_TTIME, $this->ttime);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_TID)) {
            $criteria->add(CareTechQuestionsTableMap::COL_TID, $this->tid);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_REPLY)) {
            $criteria->add(CareTechQuestionsTableMap::COL_REPLY, $this->reply);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_ANSWERED)) {
            $criteria->add(CareTechQuestionsTableMap::COL_ANSWERED, $this->answered);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_ANSBY)) {
            $criteria->add(CareTechQuestionsTableMap::COL_ANSBY, $this->ansby);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_ASTAMP)) {
            $criteria->add(CareTechQuestionsTableMap::COL_ASTAMP, $this->astamp);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_ARCHIVE)) {
            $criteria->add(CareTechQuestionsTableMap::COL_ARCHIVE, $this->archive);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_STATUS)) {
            $criteria->add(CareTechQuestionsTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_HISTORY)) {
            $criteria->add(CareTechQuestionsTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTechQuestionsTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTechQuestionsTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTechQuestionsTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTechQuestionsTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTechQuestionsTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareTechQuestionsQuery::create();
        $criteria->add(CareTechQuestionsTableMap::COL_BATCH_NR, $this->batch_nr);

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
     * @param      object $copyObj An object of \CareMd\CareMd\CareTechQuestions (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDept($this->getDept());
        $copyObj->setQuery($this->getQuery());
        $copyObj->setInquirer($this->getInquirer());
        $copyObj->setTphone($this->getTphone());
        $copyObj->setTdate($this->getTdate());
        $copyObj->setTtime($this->getTtime());
        $copyObj->setTid($this->getTid());
        $copyObj->setReply($this->getReply());
        $copyObj->setAnswered($this->getAnswered());
        $copyObj->setAnsby($this->getAnsby());
        $copyObj->setAstamp($this->getAstamp());
        $copyObj->setArchive($this->getArchive());
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
     * @return \CareMd\CareMd\CareTechQuestions Clone of current object.
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
        $this->dept = null;
        $this->query = null;
        $this->inquirer = null;
        $this->tphone = null;
        $this->tdate = null;
        $this->ttime = null;
        $this->tid = null;
        $this->reply = null;
        $this->answered = null;
        $this->ansby = null;
        $this->astamp = null;
        $this->archive = null;
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
        return (string) $this->exportTo(CareTechQuestionsTableMap::DEFAULT_STRING_FORMAT);
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
