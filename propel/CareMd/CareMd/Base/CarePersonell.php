<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CarePersonellQuery as ChildCarePersonellQuery;
use CareMd\CareMd\Map\CarePersonellTableMap;
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
 * Base class that represents a row from the 'care_personell' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CarePersonell implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CarePersonellTableMap';


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
     * The value for the short_id field.
     *
     * @var        string
     */
    protected $short_id;

    /**
     * The value for the pid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pid;

    /**
     * The value for the job_type_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $job_type_nr;

    /**
     * The value for the job_function_title field.
     *
     * @var        string
     */
    protected $job_function_title;

    /**
     * The value for the date_join field.
     *
     * @var        DateTime
     */
    protected $date_join;

    /**
     * The value for the date_exit field.
     *
     * @var        DateTime
     */
    protected $date_exit;

    /**
     * The value for the contract_class field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $contract_class;

    /**
     * The value for the contract_start field.
     *
     * @var        DateTime
     */
    protected $contract_start;

    /**
     * The value for the contract_end field.
     *
     * @var        DateTime
     */
    protected $contract_end;

    /**
     * The value for the is_discharged field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_discharged;

    /**
     * The value for the pay_class field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pay_class;

    /**
     * The value for the pay_class_sub field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pay_class_sub;

    /**
     * The value for the local_premium_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $local_premium_id;

    /**
     * The value for the tax_account_nr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tax_account_nr;

    /**
     * The value for the ir_code field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ir_code;

    /**
     * The value for the nr_workday field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $nr_workday;

    /**
     * The value for the nr_weekhour field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $nr_weekhour;

    /**
     * The value for the nr_vacation_day field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $nr_vacation_day;

    /**
     * The value for the multiple_employer field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $multiple_employer;

    /**
     * The value for the nr_dependent field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $nr_dependent;

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
        $this->job_type_nr = 0;
        $this->contract_class = '0';
        $this->is_discharged = false;
        $this->pay_class = '';
        $this->pay_class_sub = '';
        $this->local_premium_id = '';
        $this->tax_account_nr = '';
        $this->ir_code = '';
        $this->nr_workday = false;
        $this->nr_weekhour = 0.0;
        $this->nr_vacation_day = 0;
        $this->multiple_employer = false;
        $this->nr_dependent = 0;
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CarePersonell object.
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
     * Compares this with another <code>CarePersonell</code> instance.  If
     * <code>obj</code> is an instance of <code>CarePersonell</code>, delegates to
     * <code>equals(CarePersonell)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CarePersonell The current object, for fluid interface
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
     * Get the [short_id] column value.
     *
     * @return string
     */
    public function getShortId()
    {
        return $this->short_id;
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
     * Get the [job_type_nr] column value.
     *
     * @return int
     */
    public function getJobTypeNr()
    {
        return $this->job_type_nr;
    }

    /**
     * Get the [job_function_title] column value.
     *
     * @return string
     */
    public function getJobFunctionTitle()
    {
        return $this->job_function_title;
    }

    /**
     * Get the [optionally formatted] temporal [date_join] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateJoin($format = NULL)
    {
        if ($format === null) {
            return $this->date_join;
        } else {
            return $this->date_join instanceof \DateTimeInterface ? $this->date_join->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [date_exit] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateExit($format = NULL)
    {
        if ($format === null) {
            return $this->date_exit;
        } else {
            return $this->date_exit instanceof \DateTimeInterface ? $this->date_exit->format($format) : null;
        }
    }

    /**
     * Get the [contract_class] column value.
     *
     * @return string
     */
    public function getContractClass()
    {
        return $this->contract_class;
    }

    /**
     * Get the [optionally formatted] temporal [contract_start] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getContractStart($format = NULL)
    {
        if ($format === null) {
            return $this->contract_start;
        } else {
            return $this->contract_start instanceof \DateTimeInterface ? $this->contract_start->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [contract_end] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getContractEnd($format = NULL)
    {
        if ($format === null) {
            return $this->contract_end;
        } else {
            return $this->contract_end instanceof \DateTimeInterface ? $this->contract_end->format($format) : null;
        }
    }

    /**
     * Get the [is_discharged] column value.
     *
     * @return boolean
     */
    public function getIsDischarged()
    {
        return $this->is_discharged;
    }

    /**
     * Get the [is_discharged] column value.
     *
     * @return boolean
     */
    public function isDischarged()
    {
        return $this->getIsDischarged();
    }

    /**
     * Get the [pay_class] column value.
     *
     * @return string
     */
    public function getPayClass()
    {
        return $this->pay_class;
    }

    /**
     * Get the [pay_class_sub] column value.
     *
     * @return string
     */
    public function getPayClassSub()
    {
        return $this->pay_class_sub;
    }

    /**
     * Get the [local_premium_id] column value.
     *
     * @return string
     */
    public function getLocalPremiumId()
    {
        return $this->local_premium_id;
    }

    /**
     * Get the [tax_account_nr] column value.
     *
     * @return string
     */
    public function getTaxAccountNr()
    {
        return $this->tax_account_nr;
    }

    /**
     * Get the [ir_code] column value.
     *
     * @return string
     */
    public function getIrCode()
    {
        return $this->ir_code;
    }

    /**
     * Get the [nr_workday] column value.
     *
     * @return boolean
     */
    public function getNrWorkday()
    {
        return $this->nr_workday;
    }

    /**
     * Get the [nr_workday] column value.
     *
     * @return boolean
     */
    public function isNrWorkday()
    {
        return $this->getNrWorkday();
    }

    /**
     * Get the [nr_weekhour] column value.
     *
     * @return double
     */
    public function getNrWeekhour()
    {
        return $this->nr_weekhour;
    }

    /**
     * Get the [nr_vacation_day] column value.
     *
     * @return int
     */
    public function getNrVacationDay()
    {
        return $this->nr_vacation_day;
    }

    /**
     * Get the [multiple_employer] column value.
     *
     * @return boolean
     */
    public function getMultipleEmployer()
    {
        return $this->multiple_employer;
    }

    /**
     * Get the [multiple_employer] column value.
     *
     * @return boolean
     */
    public function isMultipleEmployer()
    {
        return $this->getMultipleEmployer();
    }

    /**
     * Get the [nr_dependent] column value.
     *
     * @return int
     */
    public function getNrDependent()
    {
        return $this->nr_dependent;
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
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [short_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setShortId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->short_id !== $v) {
            $this->short_id = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_SHORT_ID] = true;
        }

        return $this;
    } // setShortId()

    /**
     * Set the value of [pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_PID] = true;
        }

        return $this;
    } // setPid()

    /**
     * Set the value of [job_type_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setJobTypeNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->job_type_nr !== $v) {
            $this->job_type_nr = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_JOB_TYPE_NR] = true;
        }

        return $this;
    } // setJobTypeNr()

    /**
     * Set the value of [job_function_title] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setJobFunctionTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->job_function_title !== $v) {
            $this->job_function_title = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_JOB_FUNCTION_TITLE] = true;
        }

        return $this;
    } // setJobFunctionTitle()

    /**
     * Sets the value of [date_join] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setDateJoin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_join !== null || $dt !== null) {
            if ($this->date_join === null || $dt === null || $dt->format("Y-m-d") !== $this->date_join->format("Y-m-d")) {
                $this->date_join = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonellTableMap::COL_DATE_JOIN] = true;
            }
        } // if either are not null

        return $this;
    } // setDateJoin()

    /**
     * Sets the value of [date_exit] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setDateExit($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_exit !== null || $dt !== null) {
            if ($this->date_exit === null || $dt === null || $dt->format("Y-m-d") !== $this->date_exit->format("Y-m-d")) {
                $this->date_exit = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonellTableMap::COL_DATE_EXIT] = true;
            }
        } // if either are not null

        return $this;
    } // setDateExit()

    /**
     * Set the value of [contract_class] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setContractClass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contract_class !== $v) {
            $this->contract_class = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_CONTRACT_CLASS] = true;
        }

        return $this;
    } // setContractClass()

    /**
     * Sets the value of [contract_start] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setContractStart($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->contract_start !== null || $dt !== null) {
            if ($this->contract_start === null || $dt === null || $dt->format("Y-m-d") !== $this->contract_start->format("Y-m-d")) {
                $this->contract_start = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonellTableMap::COL_CONTRACT_START] = true;
            }
        } // if either are not null

        return $this;
    } // setContractStart()

    /**
     * Sets the value of [contract_end] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setContractEnd($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->contract_end !== null || $dt !== null) {
            if ($this->contract_end === null || $dt === null || $dt->format("Y-m-d") !== $this->contract_end->format("Y-m-d")) {
                $this->contract_end = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonellTableMap::COL_CONTRACT_END] = true;
            }
        } // if either are not null

        return $this;
    } // setContractEnd()

    /**
     * Sets the value of the [is_discharged] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setIsDischarged($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_discharged !== $v) {
            $this->is_discharged = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_IS_DISCHARGED] = true;
        }

        return $this;
    } // setIsDischarged()

    /**
     * Set the value of [pay_class] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setPayClass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pay_class !== $v) {
            $this->pay_class = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_PAY_CLASS] = true;
        }

        return $this;
    } // setPayClass()

    /**
     * Set the value of [pay_class_sub] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setPayClassSub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pay_class_sub !== $v) {
            $this->pay_class_sub = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_PAY_CLASS_SUB] = true;
        }

        return $this;
    } // setPayClassSub()

    /**
     * Set the value of [local_premium_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setLocalPremiumId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->local_premium_id !== $v) {
            $this->local_premium_id = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_LOCAL_PREMIUM_ID] = true;
        }

        return $this;
    } // setLocalPremiumId()

    /**
     * Set the value of [tax_account_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setTaxAccountNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tax_account_nr !== $v) {
            $this->tax_account_nr = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_TAX_ACCOUNT_NR] = true;
        }

        return $this;
    } // setTaxAccountNr()

    /**
     * Set the value of [ir_code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setIrCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ir_code !== $v) {
            $this->ir_code = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_IR_CODE] = true;
        }

        return $this;
    } // setIrCode()

    /**
     * Sets the value of the [nr_workday] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setNrWorkday($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->nr_workday !== $v) {
            $this->nr_workday = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_NR_WORKDAY] = true;
        }

        return $this;
    } // setNrWorkday()

    /**
     * Set the value of [nr_weekhour] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setNrWeekhour($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->nr_weekhour !== $v) {
            $this->nr_weekhour = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_NR_WEEKHOUR] = true;
        }

        return $this;
    } // setNrWeekhour()

    /**
     * Set the value of [nr_vacation_day] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setNrVacationDay($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr_vacation_day !== $v) {
            $this->nr_vacation_day = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_NR_VACATION_DAY] = true;
        }

        return $this;
    } // setNrVacationDay()

    /**
     * Sets the value of the [multiple_employer] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setMultipleEmployer($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->multiple_employer !== $v) {
            $this->multiple_employer = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_MULTIPLE_EMPLOYER] = true;
        }

        return $this;
    } // setMultipleEmployer()

    /**
     * Set the value of [nr_dependent] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setNrDependent($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr_dependent !== $v) {
            $this->nr_dependent = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_NR_DEPENDENT] = true;
        }

        return $this;
    } // setNrDependent()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonellTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CarePersonellTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePersonell The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonellTableMap::COL_CREATE_TIME] = true;
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

            if ($this->job_type_nr !== 0) {
                return false;
            }

            if ($this->contract_class !== '0') {
                return false;
            }

            if ($this->is_discharged !== false) {
                return false;
            }

            if ($this->pay_class !== '') {
                return false;
            }

            if ($this->pay_class_sub !== '') {
                return false;
            }

            if ($this->local_premium_id !== '') {
                return false;
            }

            if ($this->tax_account_nr !== '') {
                return false;
            }

            if ($this->ir_code !== '') {
                return false;
            }

            if ($this->nr_workday !== false) {
                return false;
            }

            if ($this->nr_weekhour !== 0.0) {
                return false;
            }

            if ($this->nr_vacation_day !== 0) {
                return false;
            }

            if ($this->multiple_employer !== false) {
                return false;
            }

            if ($this->nr_dependent !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CarePersonellTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CarePersonellTableMap::translateFieldName('ShortId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->short_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CarePersonellTableMap::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CarePersonellTableMap::translateFieldName('JobTypeNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->job_type_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CarePersonellTableMap::translateFieldName('JobFunctionTitle', TableMap::TYPE_PHPNAME, $indexType)];
            $this->job_function_title = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CarePersonellTableMap::translateFieldName('DateJoin', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->date_join = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CarePersonellTableMap::translateFieldName('DateExit', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->date_exit = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CarePersonellTableMap::translateFieldName('ContractClass', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contract_class = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CarePersonellTableMap::translateFieldName('ContractStart', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->contract_start = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CarePersonellTableMap::translateFieldName('ContractEnd', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->contract_end = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CarePersonellTableMap::translateFieldName('IsDischarged', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_discharged = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CarePersonellTableMap::translateFieldName('PayClass', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pay_class = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CarePersonellTableMap::translateFieldName('PayClassSub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pay_class_sub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CarePersonellTableMap::translateFieldName('LocalPremiumId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->local_premium_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CarePersonellTableMap::translateFieldName('TaxAccountNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->tax_account_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CarePersonellTableMap::translateFieldName('IrCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ir_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CarePersonellTableMap::translateFieldName('NrWorkday', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr_workday = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CarePersonellTableMap::translateFieldName('NrWeekhour', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr_weekhour = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CarePersonellTableMap::translateFieldName('NrVacationDay', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr_vacation_day = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CarePersonellTableMap::translateFieldName('MultipleEmployer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->multiple_employer = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CarePersonellTableMap::translateFieldName('NrDependent', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr_dependent = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CarePersonellTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CarePersonellTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CarePersonellTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CarePersonellTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CarePersonellTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CarePersonellTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 27; // 27 = CarePersonellTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CarePersonell'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CarePersonellTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCarePersonellQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CarePersonell::setDeleted()
     * @see CarePersonell::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonellTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCarePersonellQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonellTableMap::DATABASE_NAME);
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
                CarePersonellTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CarePersonellTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CarePersonellTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CarePersonellTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_SHORT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'short_id';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_PID)) {
            $modifiedColumns[':p' . $index++]  = 'pid';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_JOB_TYPE_NR)) {
            $modifiedColumns[':p' . $index++]  = 'job_type_nr';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_JOB_FUNCTION_TITLE)) {
            $modifiedColumns[':p' . $index++]  = 'job_function_title';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_DATE_JOIN)) {
            $modifiedColumns[':p' . $index++]  = 'date_join';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_DATE_EXIT)) {
            $modifiedColumns[':p' . $index++]  = 'date_exit';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_CONTRACT_CLASS)) {
            $modifiedColumns[':p' . $index++]  = 'contract_class';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_CONTRACT_START)) {
            $modifiedColumns[':p' . $index++]  = 'contract_start';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_CONTRACT_END)) {
            $modifiedColumns[':p' . $index++]  = 'contract_end';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_IS_DISCHARGED)) {
            $modifiedColumns[':p' . $index++]  = 'is_discharged';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_PAY_CLASS)) {
            $modifiedColumns[':p' . $index++]  = 'pay_class';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_PAY_CLASS_SUB)) {
            $modifiedColumns[':p' . $index++]  = 'pay_class_sub';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_LOCAL_PREMIUM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'local_premium_id';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_TAX_ACCOUNT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'tax_account_nr';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_IR_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'ir_code';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_NR_WORKDAY)) {
            $modifiedColumns[':p' . $index++]  = 'nr_workday';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_NR_WEEKHOUR)) {
            $modifiedColumns[':p' . $index++]  = 'nr_weekhour';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_NR_VACATION_DAY)) {
            $modifiedColumns[':p' . $index++]  = 'nr_vacation_day';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_MULTIPLE_EMPLOYER)) {
            $modifiedColumns[':p' . $index++]  = 'multiple_employer';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_NR_DEPENDENT)) {
            $modifiedColumns[':p' . $index++]  = 'nr_dependent';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_personell (%s) VALUES (%s)',
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
                    case 'short_id':
                        $stmt->bindValue($identifier, $this->short_id, PDO::PARAM_STR);
                        break;
                    case 'pid':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_INT);
                        break;
                    case 'job_type_nr':
                        $stmt->bindValue($identifier, $this->job_type_nr, PDO::PARAM_INT);
                        break;
                    case 'job_function_title':
                        $stmt->bindValue($identifier, $this->job_function_title, PDO::PARAM_STR);
                        break;
                    case 'date_join':
                        $stmt->bindValue($identifier, $this->date_join ? $this->date_join->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'date_exit':
                        $stmt->bindValue($identifier, $this->date_exit ? $this->date_exit->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'contract_class':
                        $stmt->bindValue($identifier, $this->contract_class, PDO::PARAM_STR);
                        break;
                    case 'contract_start':
                        $stmt->bindValue($identifier, $this->contract_start ? $this->contract_start->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'contract_end':
                        $stmt->bindValue($identifier, $this->contract_end ? $this->contract_end->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'is_discharged':
                        $stmt->bindValue($identifier, (int) $this->is_discharged, PDO::PARAM_INT);
                        break;
                    case 'pay_class':
                        $stmt->bindValue($identifier, $this->pay_class, PDO::PARAM_STR);
                        break;
                    case 'pay_class_sub':
                        $stmt->bindValue($identifier, $this->pay_class_sub, PDO::PARAM_STR);
                        break;
                    case 'local_premium_id':
                        $stmt->bindValue($identifier, $this->local_premium_id, PDO::PARAM_STR);
                        break;
                    case 'tax_account_nr':
                        $stmt->bindValue($identifier, $this->tax_account_nr, PDO::PARAM_STR);
                        break;
                    case 'ir_code':
                        $stmt->bindValue($identifier, $this->ir_code, PDO::PARAM_STR);
                        break;
                    case 'nr_workday':
                        $stmt->bindValue($identifier, (int) $this->nr_workday, PDO::PARAM_INT);
                        break;
                    case 'nr_weekhour':
                        $stmt->bindValue($identifier, $this->nr_weekhour, PDO::PARAM_STR);
                        break;
                    case 'nr_vacation_day':
                        $stmt->bindValue($identifier, $this->nr_vacation_day, PDO::PARAM_INT);
                        break;
                    case 'multiple_employer':
                        $stmt->bindValue($identifier, (int) $this->multiple_employer, PDO::PARAM_INT);
                        break;
                    case 'nr_dependent':
                        $stmt->bindValue($identifier, $this->nr_dependent, PDO::PARAM_INT);
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
        $pos = CarePersonellTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getShortId();
                break;
            case 2:
                return $this->getPid();
                break;
            case 3:
                return $this->getJobTypeNr();
                break;
            case 4:
                return $this->getJobFunctionTitle();
                break;
            case 5:
                return $this->getDateJoin();
                break;
            case 6:
                return $this->getDateExit();
                break;
            case 7:
                return $this->getContractClass();
                break;
            case 8:
                return $this->getContractStart();
                break;
            case 9:
                return $this->getContractEnd();
                break;
            case 10:
                return $this->getIsDischarged();
                break;
            case 11:
                return $this->getPayClass();
                break;
            case 12:
                return $this->getPayClassSub();
                break;
            case 13:
                return $this->getLocalPremiumId();
                break;
            case 14:
                return $this->getTaxAccountNr();
                break;
            case 15:
                return $this->getIrCode();
                break;
            case 16:
                return $this->getNrWorkday();
                break;
            case 17:
                return $this->getNrWeekhour();
                break;
            case 18:
                return $this->getNrVacationDay();
                break;
            case 19:
                return $this->getMultipleEmployer();
                break;
            case 20:
                return $this->getNrDependent();
                break;
            case 21:
                return $this->getStatus();
                break;
            case 22:
                return $this->getHistory();
                break;
            case 23:
                return $this->getModifyId();
                break;
            case 24:
                return $this->getModifyTime();
                break;
            case 25:
                return $this->getCreateId();
                break;
            case 26:
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

        if (isset($alreadyDumpedObjects['CarePersonell'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CarePersonell'][$this->hashCode()] = true;
        $keys = CarePersonellTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getShortId(),
            $keys[2] => $this->getPid(),
            $keys[3] => $this->getJobTypeNr(),
            $keys[4] => $this->getJobFunctionTitle(),
            $keys[5] => $this->getDateJoin(),
            $keys[6] => $this->getDateExit(),
            $keys[7] => $this->getContractClass(),
            $keys[8] => $this->getContractStart(),
            $keys[9] => $this->getContractEnd(),
            $keys[10] => $this->getIsDischarged(),
            $keys[11] => $this->getPayClass(),
            $keys[12] => $this->getPayClassSub(),
            $keys[13] => $this->getLocalPremiumId(),
            $keys[14] => $this->getTaxAccountNr(),
            $keys[15] => $this->getIrCode(),
            $keys[16] => $this->getNrWorkday(),
            $keys[17] => $this->getNrWeekhour(),
            $keys[18] => $this->getNrVacationDay(),
            $keys[19] => $this->getMultipleEmployer(),
            $keys[20] => $this->getNrDependent(),
            $keys[21] => $this->getStatus(),
            $keys[22] => $this->getHistory(),
            $keys[23] => $this->getModifyId(),
            $keys[24] => $this->getModifyTime(),
            $keys[25] => $this->getCreateId(),
            $keys[26] => $this->getCreateTime(),
        );
        if ($result[$keys[5]] instanceof \DateTimeInterface) {
            $result[$keys[5]] = $result[$keys[5]]->format('c');
        }

        if ($result[$keys[6]] instanceof \DateTimeInterface) {
            $result[$keys[6]] = $result[$keys[6]]->format('c');
        }

        if ($result[$keys[8]] instanceof \DateTimeInterface) {
            $result[$keys[8]] = $result[$keys[8]]->format('c');
        }

        if ($result[$keys[9]] instanceof \DateTimeInterface) {
            $result[$keys[9]] = $result[$keys[9]]->format('c');
        }

        if ($result[$keys[24]] instanceof \DateTimeInterface) {
            $result[$keys[24]] = $result[$keys[24]]->format('c');
        }

        if ($result[$keys[26]] instanceof \DateTimeInterface) {
            $result[$keys[26]] = $result[$keys[26]]->format('c');
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
     * @return $this|\CareMd\CareMd\CarePersonell
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CarePersonellTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CarePersonell
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNr($value);
                break;
            case 1:
                $this->setShortId($value);
                break;
            case 2:
                $this->setPid($value);
                break;
            case 3:
                $this->setJobTypeNr($value);
                break;
            case 4:
                $this->setJobFunctionTitle($value);
                break;
            case 5:
                $this->setDateJoin($value);
                break;
            case 6:
                $this->setDateExit($value);
                break;
            case 7:
                $this->setContractClass($value);
                break;
            case 8:
                $this->setContractStart($value);
                break;
            case 9:
                $this->setContractEnd($value);
                break;
            case 10:
                $this->setIsDischarged($value);
                break;
            case 11:
                $this->setPayClass($value);
                break;
            case 12:
                $this->setPayClassSub($value);
                break;
            case 13:
                $this->setLocalPremiumId($value);
                break;
            case 14:
                $this->setTaxAccountNr($value);
                break;
            case 15:
                $this->setIrCode($value);
                break;
            case 16:
                $this->setNrWorkday($value);
                break;
            case 17:
                $this->setNrWeekhour($value);
                break;
            case 18:
                $this->setNrVacationDay($value);
                break;
            case 19:
                $this->setMultipleEmployer($value);
                break;
            case 20:
                $this->setNrDependent($value);
                break;
            case 21:
                $this->setStatus($value);
                break;
            case 22:
                $this->setHistory($value);
                break;
            case 23:
                $this->setModifyId($value);
                break;
            case 24:
                $this->setModifyTime($value);
                break;
            case 25:
                $this->setCreateId($value);
                break;
            case 26:
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
        $keys = CarePersonellTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setShortId($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPid($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setJobTypeNr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setJobFunctionTitle($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setDateJoin($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDateExit($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setContractClass($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setContractStart($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setContractEnd($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIsDischarged($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPayClass($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPayClassSub($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setLocalPremiumId($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setTaxAccountNr($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setIrCode($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setNrWorkday($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setNrWeekhour($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setNrVacationDay($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setMultipleEmployer($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setNrDependent($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setStatus($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setHistory($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setModifyId($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setModifyTime($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setCreateId($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setCreateTime($arr[$keys[26]]);
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
     * @return $this|\CareMd\CareMd\CarePersonell The current object, for fluid interface
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
        $criteria = new Criteria(CarePersonellTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CarePersonellTableMap::COL_NR)) {
            $criteria->add(CarePersonellTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_SHORT_ID)) {
            $criteria->add(CarePersonellTableMap::COL_SHORT_ID, $this->short_id);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_PID)) {
            $criteria->add(CarePersonellTableMap::COL_PID, $this->pid);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_JOB_TYPE_NR)) {
            $criteria->add(CarePersonellTableMap::COL_JOB_TYPE_NR, $this->job_type_nr);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_JOB_FUNCTION_TITLE)) {
            $criteria->add(CarePersonellTableMap::COL_JOB_FUNCTION_TITLE, $this->job_function_title);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_DATE_JOIN)) {
            $criteria->add(CarePersonellTableMap::COL_DATE_JOIN, $this->date_join);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_DATE_EXIT)) {
            $criteria->add(CarePersonellTableMap::COL_DATE_EXIT, $this->date_exit);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_CONTRACT_CLASS)) {
            $criteria->add(CarePersonellTableMap::COL_CONTRACT_CLASS, $this->contract_class);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_CONTRACT_START)) {
            $criteria->add(CarePersonellTableMap::COL_CONTRACT_START, $this->contract_start);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_CONTRACT_END)) {
            $criteria->add(CarePersonellTableMap::COL_CONTRACT_END, $this->contract_end);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_IS_DISCHARGED)) {
            $criteria->add(CarePersonellTableMap::COL_IS_DISCHARGED, $this->is_discharged);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_PAY_CLASS)) {
            $criteria->add(CarePersonellTableMap::COL_PAY_CLASS, $this->pay_class);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_PAY_CLASS_SUB)) {
            $criteria->add(CarePersonellTableMap::COL_PAY_CLASS_SUB, $this->pay_class_sub);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_LOCAL_PREMIUM_ID)) {
            $criteria->add(CarePersonellTableMap::COL_LOCAL_PREMIUM_ID, $this->local_premium_id);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_TAX_ACCOUNT_NR)) {
            $criteria->add(CarePersonellTableMap::COL_TAX_ACCOUNT_NR, $this->tax_account_nr);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_IR_CODE)) {
            $criteria->add(CarePersonellTableMap::COL_IR_CODE, $this->ir_code);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_NR_WORKDAY)) {
            $criteria->add(CarePersonellTableMap::COL_NR_WORKDAY, $this->nr_workday);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_NR_WEEKHOUR)) {
            $criteria->add(CarePersonellTableMap::COL_NR_WEEKHOUR, $this->nr_weekhour);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_NR_VACATION_DAY)) {
            $criteria->add(CarePersonellTableMap::COL_NR_VACATION_DAY, $this->nr_vacation_day);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_MULTIPLE_EMPLOYER)) {
            $criteria->add(CarePersonellTableMap::COL_MULTIPLE_EMPLOYER, $this->multiple_employer);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_NR_DEPENDENT)) {
            $criteria->add(CarePersonellTableMap::COL_NR_DEPENDENT, $this->nr_dependent);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_STATUS)) {
            $criteria->add(CarePersonellTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_HISTORY)) {
            $criteria->add(CarePersonellTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_MODIFY_ID)) {
            $criteria->add(CarePersonellTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CarePersonellTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_CREATE_ID)) {
            $criteria->add(CarePersonellTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CarePersonellTableMap::COL_CREATE_TIME)) {
            $criteria->add(CarePersonellTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCarePersonellQuery::create();
        $criteria->add(CarePersonellTableMap::COL_NR, $this->nr);
        $criteria->add(CarePersonellTableMap::COL_PID, $this->pid);
        $criteria->add(CarePersonellTableMap::COL_JOB_TYPE_NR, $this->job_type_nr);

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
            null !== $this->getPid() &&
            null !== $this->getJobTypeNr();

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
        $pks[1] = $this->getPid();
        $pks[2] = $this->getJobTypeNr();

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
        $this->setPid($keys[1]);
        $this->setJobTypeNr($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getNr()) && (null === $this->getPid()) && (null === $this->getJobTypeNr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CarePersonell (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setShortId($this->getShortId());
        $copyObj->setPid($this->getPid());
        $copyObj->setJobTypeNr($this->getJobTypeNr());
        $copyObj->setJobFunctionTitle($this->getJobFunctionTitle());
        $copyObj->setDateJoin($this->getDateJoin());
        $copyObj->setDateExit($this->getDateExit());
        $copyObj->setContractClass($this->getContractClass());
        $copyObj->setContractStart($this->getContractStart());
        $copyObj->setContractEnd($this->getContractEnd());
        $copyObj->setIsDischarged($this->getIsDischarged());
        $copyObj->setPayClass($this->getPayClass());
        $copyObj->setPayClassSub($this->getPayClassSub());
        $copyObj->setLocalPremiumId($this->getLocalPremiumId());
        $copyObj->setTaxAccountNr($this->getTaxAccountNr());
        $copyObj->setIrCode($this->getIrCode());
        $copyObj->setNrWorkday($this->getNrWorkday());
        $copyObj->setNrWeekhour($this->getNrWeekhour());
        $copyObj->setNrVacationDay($this->getNrVacationDay());
        $copyObj->setMultipleEmployer($this->getMultipleEmployer());
        $copyObj->setNrDependent($this->getNrDependent());
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
     * @return \CareMd\CareMd\CarePersonell Clone of current object.
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
        $this->short_id = null;
        $this->pid = null;
        $this->job_type_nr = null;
        $this->job_function_title = null;
        $this->date_join = null;
        $this->date_exit = null;
        $this->contract_class = null;
        $this->contract_start = null;
        $this->contract_end = null;
        $this->is_discharged = null;
        $this->pay_class = null;
        $this->pay_class_sub = null;
        $this->local_premium_id = null;
        $this->tax_account_nr = null;
        $this->ir_code = null;
        $this->nr_workday = null;
        $this->nr_weekhour = null;
        $this->nr_vacation_day = null;
        $this->multiple_employer = null;
        $this->nr_dependent = null;
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
        return (string) $this->exportTo(CarePersonellTableMap::DEFAULT_STRING_FORMAT);
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
