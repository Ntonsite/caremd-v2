<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterOpQuery as ChildCareEncounterOpQuery;
use CareMd\CareMd\Map\CareEncounterOpTableMap;
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
 * Base class that represents a row from the 'care_encounter_op' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareEncounterOp implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareEncounterOpTableMap';


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
     * The value for the year field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $year;

    /**
     * The value for the dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $dept_nr;

    /**
     * The value for the op_room field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $op_room;

    /**
     * The value for the op_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $op_nr;

    /**
     * The value for the op_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $op_date;

    /**
     * The value for the op_src_date field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $op_src_date;

    /**
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

    /**
     * The value for the diagnosis field.
     *
     * @var        string
     */
    protected $diagnosis;

    /**
     * The value for the operator field.
     *
     * @var        string
     */
    protected $operator;

    /**
     * The value for the assistant field.
     *
     * @var        string
     */
    protected $assistant;

    /**
     * The value for the scrub_nurse field.
     *
     * @var        string
     */
    protected $scrub_nurse;

    /**
     * The value for the rotating_nurse field.
     *
     * @var        string
     */
    protected $rotating_nurse;

    /**
     * The value for the anesthesia field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $anesthesia;

    /**
     * The value for the an_doctor field.
     *
     * @var        string
     */
    protected $an_doctor;

    /**
     * The value for the op_therapy field.
     *
     * @var        string
     */
    protected $op_therapy;

    /**
     * The value for the result_info field.
     *
     * @var        string
     */
    protected $result_info;

    /**
     * The value for the entry_time field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $entry_time;

    /**
     * The value for the cut_time field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cut_time;

    /**
     * The value for the close_time field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $close_time;

    /**
     * The value for the exit_time field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $exit_time;

    /**
     * The value for the entry_out field.
     *
     * @var        string
     */
    protected $entry_out;

    /**
     * The value for the cut_close field.
     *
     * @var        string
     */
    protected $cut_close;

    /**
     * The value for the wait_time field.
     *
     * @var        string
     */
    protected $wait_time;

    /**
     * The value for the bandage_time field.
     *
     * @var        string
     */
    protected $bandage_time;

    /**
     * The value for the repos_time field.
     *
     * @var        string
     */
    protected $repos_time;

    /**
     * The value for the encoding field.
     *
     * @var        string
     */
    protected $encoding;

    /**
     * The value for the doc_date field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $doc_date;

    /**
     * The value for the doc_time field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $doc_time;

    /**
     * The value for the duty_type field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $duty_type;

    /**
     * The value for the material_codedlist field.
     *
     * @var        string
     */
    protected $material_codedlist;

    /**
     * The value for the container_codedlist field.
     *
     * @var        string
     */
    protected $container_codedlist;

    /**
     * The value for the icd_code field.
     *
     * @var        string
     */
    protected $icd_code;

    /**
     * The value for the ops_code field.
     *
     * @var        string
     */
    protected $ops_code;

    /**
     * The value for the ops_intern_code field.
     *
     * @var        string
     */
    protected $ops_intern_code;

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
        $this->year = '0';
        $this->dept_nr = 0;
        $this->op_room = '0';
        $this->op_nr = 0;
        $this->op_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->op_src_date = '';
        $this->encounter_nr = 0;
        $this->anesthesia = '';
        $this->entry_time = '';
        $this->cut_time = '';
        $this->close_time = '';
        $this->exit_time = '';
        $this->doc_date = '';
        $this->doc_time = '';
        $this->duty_type = '';
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareEncounterOp object.
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
     * Compares this with another <code>CareEncounterOp</code> instance.  If
     * <code>obj</code> is an instance of <code>CareEncounterOp</code>, delegates to
     * <code>equals(CareEncounterOp)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareEncounterOp The current object, for fluid interface
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
     * Get the [year] column value.
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
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
     * Get the [op_room] column value.
     *
     * @return string
     */
    public function getOpRoom()
    {
        return $this->op_room;
    }

    /**
     * Get the [op_nr] column value.
     *
     * @return int
     */
    public function getOpNr()
    {
        return $this->op_nr;
    }

    /**
     * Get the [optionally formatted] temporal [op_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpDate($format = NULL)
    {
        if ($format === null) {
            return $this->op_date;
        } else {
            return $this->op_date instanceof \DateTimeInterface ? $this->op_date->format($format) : null;
        }
    }

    /**
     * Get the [op_src_date] column value.
     *
     * @return string
     */
    public function getOpSrcDate()
    {
        return $this->op_src_date;
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
     * Get the [diagnosis] column value.
     *
     * @return string
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Get the [operator] column value.
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Get the [assistant] column value.
     *
     * @return string
     */
    public function getAssistant()
    {
        return $this->assistant;
    }

    /**
     * Get the [scrub_nurse] column value.
     *
     * @return string
     */
    public function getScrubNurse()
    {
        return $this->scrub_nurse;
    }

    /**
     * Get the [rotating_nurse] column value.
     *
     * @return string
     */
    public function getRotatingNurse()
    {
        return $this->rotating_nurse;
    }

    /**
     * Get the [anesthesia] column value.
     *
     * @return string
     */
    public function getAnesthesia()
    {
        return $this->anesthesia;
    }

    /**
     * Get the [an_doctor] column value.
     *
     * @return string
     */
    public function getAnDoctor()
    {
        return $this->an_doctor;
    }

    /**
     * Get the [op_therapy] column value.
     *
     * @return string
     */
    public function getOpTherapy()
    {
        return $this->op_therapy;
    }

    /**
     * Get the [result_info] column value.
     *
     * @return string
     */
    public function getResultInfo()
    {
        return $this->result_info;
    }

    /**
     * Get the [entry_time] column value.
     *
     * @return string
     */
    public function getEntryTime()
    {
        return $this->entry_time;
    }

    /**
     * Get the [cut_time] column value.
     *
     * @return string
     */
    public function getCutTime()
    {
        return $this->cut_time;
    }

    /**
     * Get the [close_time] column value.
     *
     * @return string
     */
    public function getCloseTime()
    {
        return $this->close_time;
    }

    /**
     * Get the [exit_time] column value.
     *
     * @return string
     */
    public function getExitTime()
    {
        return $this->exit_time;
    }

    /**
     * Get the [entry_out] column value.
     *
     * @return string
     */
    public function getEntryOut()
    {
        return $this->entry_out;
    }

    /**
     * Get the [cut_close] column value.
     *
     * @return string
     */
    public function getCutClose()
    {
        return $this->cut_close;
    }

    /**
     * Get the [wait_time] column value.
     *
     * @return string
     */
    public function getWaitTime()
    {
        return $this->wait_time;
    }

    /**
     * Get the [bandage_time] column value.
     *
     * @return string
     */
    public function getBandageTime()
    {
        return $this->bandage_time;
    }

    /**
     * Get the [repos_time] column value.
     *
     * @return string
     */
    public function getReposTime()
    {
        return $this->repos_time;
    }

    /**
     * Get the [encoding] column value.
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Get the [doc_date] column value.
     *
     * @return string
     */
    public function getDocDate()
    {
        return $this->doc_date;
    }

    /**
     * Get the [doc_time] column value.
     *
     * @return string
     */
    public function getDocTime()
    {
        return $this->doc_time;
    }

    /**
     * Get the [duty_type] column value.
     *
     * @return string
     */
    public function getDutyType()
    {
        return $this->duty_type;
    }

    /**
     * Get the [material_codedlist] column value.
     *
     * @return string
     */
    public function getMaterialCodedlist()
    {
        return $this->material_codedlist;
    }

    /**
     * Get the [container_codedlist] column value.
     *
     * @return string
     */
    public function getContainerCodedlist()
    {
        return $this->container_codedlist;
    }

    /**
     * Get the [icd_code] column value.
     *
     * @return string
     */
    public function getIcdCode()
    {
        return $this->icd_code;
    }

    /**
     * Get the [ops_code] column value.
     *
     * @return string
     */
    public function getOpsCode()
    {
        return $this->ops_code;
    }

    /**
     * Get the [ops_intern_code] column value.
     *
     * @return string
     */
    public function getOpsInternCode()
    {
        return $this->ops_intern_code;
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
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [year] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_YEAR] = true;
        }

        return $this;
    } // setYear()

    /**
     * Set the value of [dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dept_nr !== $v) {
            $this->dept_nr = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_DEPT_NR] = true;
        }

        return $this;
    } // setDeptNr()

    /**
     * Set the value of [op_room] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setOpRoom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_room !== $v) {
            $this->op_room = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_OP_ROOM] = true;
        }

        return $this;
    } // setOpRoom()

    /**
     * Set the value of [op_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setOpNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->op_nr !== $v) {
            $this->op_nr = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_OP_NR] = true;
        }

        return $this;
    } // setOpNr()

    /**
     * Sets the value of [op_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setOpDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_date !== null || $dt !== null) {
            if ( ($dt != $this->op_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->op_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterOpTableMap::COL_OP_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setOpDate()

    /**
     * Set the value of [op_src_date] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setOpSrcDate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_src_date !== $v) {
            $this->op_src_date = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_OP_SRC_DATE] = true;
        }

        return $this;
    } // setOpSrcDate()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [diagnosis] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setDiagnosis($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->diagnosis !== $v) {
            $this->diagnosis = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_DIAGNOSIS] = true;
        }

        return $this;
    } // setDiagnosis()

    /**
     * Set the value of [operator] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setOperator($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->operator !== $v) {
            $this->operator = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_OPERATOR] = true;
        }

        return $this;
    } // setOperator()

    /**
     * Set the value of [assistant] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setAssistant($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->assistant !== $v) {
            $this->assistant = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_ASSISTANT] = true;
        }

        return $this;
    } // setAssistant()

    /**
     * Set the value of [scrub_nurse] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setScrubNurse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->scrub_nurse !== $v) {
            $this->scrub_nurse = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_SCRUB_NURSE] = true;
        }

        return $this;
    } // setScrubNurse()

    /**
     * Set the value of [rotating_nurse] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setRotatingNurse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rotating_nurse !== $v) {
            $this->rotating_nurse = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_ROTATING_NURSE] = true;
        }

        return $this;
    } // setRotatingNurse()

    /**
     * Set the value of [anesthesia] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setAnesthesia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->anesthesia !== $v) {
            $this->anesthesia = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_ANESTHESIA] = true;
        }

        return $this;
    } // setAnesthesia()

    /**
     * Set the value of [an_doctor] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setAnDoctor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->an_doctor !== $v) {
            $this->an_doctor = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_AN_DOCTOR] = true;
        }

        return $this;
    } // setAnDoctor()

    /**
     * Set the value of [op_therapy] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setOpTherapy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_therapy !== $v) {
            $this->op_therapy = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_OP_THERAPY] = true;
        }

        return $this;
    } // setOpTherapy()

    /**
     * Set the value of [result_info] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setResultInfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->result_info !== $v) {
            $this->result_info = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_RESULT_INFO] = true;
        }

        return $this;
    } // setResultInfo()

    /**
     * Set the value of [entry_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setEntryTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->entry_time !== $v) {
            $this->entry_time = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_ENTRY_TIME] = true;
        }

        return $this;
    } // setEntryTime()

    /**
     * Set the value of [cut_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setCutTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cut_time !== $v) {
            $this->cut_time = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_CUT_TIME] = true;
        }

        return $this;
    } // setCutTime()

    /**
     * Set the value of [close_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setCloseTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->close_time !== $v) {
            $this->close_time = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_CLOSE_TIME] = true;
        }

        return $this;
    } // setCloseTime()

    /**
     * Set the value of [exit_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setExitTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->exit_time !== $v) {
            $this->exit_time = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_EXIT_TIME] = true;
        }

        return $this;
    } // setExitTime()

    /**
     * Set the value of [entry_out] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setEntryOut($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->entry_out !== $v) {
            $this->entry_out = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_ENTRY_OUT] = true;
        }

        return $this;
    } // setEntryOut()

    /**
     * Set the value of [cut_close] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setCutClose($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cut_close !== $v) {
            $this->cut_close = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_CUT_CLOSE] = true;
        }

        return $this;
    } // setCutClose()

    /**
     * Set the value of [wait_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setWaitTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->wait_time !== $v) {
            $this->wait_time = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_WAIT_TIME] = true;
        }

        return $this;
    } // setWaitTime()

    /**
     * Set the value of [bandage_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setBandageTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bandage_time !== $v) {
            $this->bandage_time = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_BANDAGE_TIME] = true;
        }

        return $this;
    } // setBandageTime()

    /**
     * Set the value of [repos_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setReposTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->repos_time !== $v) {
            $this->repos_time = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_REPOS_TIME] = true;
        }

        return $this;
    } // setReposTime()

    /**
     * Set the value of [encoding] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setEncoding($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->encoding !== $v) {
            $this->encoding = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_ENCODING] = true;
        }

        return $this;
    } // setEncoding()

    /**
     * Set the value of [doc_date] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setDocDate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doc_date !== $v) {
            $this->doc_date = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_DOC_DATE] = true;
        }

        return $this;
    } // setDocDate()

    /**
     * Set the value of [doc_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setDocTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doc_time !== $v) {
            $this->doc_time = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_DOC_TIME] = true;
        }

        return $this;
    } // setDocTime()

    /**
     * Set the value of [duty_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setDutyType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->duty_type !== $v) {
            $this->duty_type = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_DUTY_TYPE] = true;
        }

        return $this;
    } // setDutyType()

    /**
     * Set the value of [material_codedlist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setMaterialCodedlist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->material_codedlist !== $v) {
            $this->material_codedlist = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_MATERIAL_CODEDLIST] = true;
        }

        return $this;
    } // setMaterialCodedlist()

    /**
     * Set the value of [container_codedlist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setContainerCodedlist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->container_codedlist !== $v) {
            $this->container_codedlist = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_CONTAINER_CODEDLIST] = true;
        }

        return $this;
    } // setContainerCodedlist()

    /**
     * Set the value of [icd_code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setIcdCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->icd_code !== $v) {
            $this->icd_code = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_ICD_CODE] = true;
        }

        return $this;
    } // setIcdCode()

    /**
     * Set the value of [ops_code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setOpsCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ops_code !== $v) {
            $this->ops_code = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_OPS_CODE] = true;
        }

        return $this;
    } // setOpsCode()

    /**
     * Set the value of [ops_intern_code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setOpsInternCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ops_intern_code !== $v) {
            $this->ops_intern_code = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_OPS_INTERN_CODE] = true;
        }

        return $this;
    } // setOpsInternCode()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterOpTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareEncounterOpTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterOpTableMap::COL_CREATE_TIME] = true;
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
            if ($this->year !== '0') {
                return false;
            }

            if ($this->dept_nr !== 0) {
                return false;
            }

            if ($this->op_room !== '0') {
                return false;
            }

            if ($this->op_nr !== 0) {
                return false;
            }

            if ($this->op_date && $this->op_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->op_src_date !== '') {
                return false;
            }

            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->anesthesia !== '') {
                return false;
            }

            if ($this->entry_time !== '') {
                return false;
            }

            if ($this->cut_time !== '') {
                return false;
            }

            if ($this->close_time !== '') {
                return false;
            }

            if ($this->exit_time !== '') {
                return false;
            }

            if ($this->doc_date !== '') {
                return false;
            }

            if ($this->doc_time !== '') {
                return false;
            }

            if ($this->duty_type !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareEncounterOpTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareEncounterOpTableMap::translateFieldName('Year', TableMap::TYPE_PHPNAME, $indexType)];
            $this->year = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareEncounterOpTableMap::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareEncounterOpTableMap::translateFieldName('OpRoom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->op_room = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareEncounterOpTableMap::translateFieldName('OpNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->op_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareEncounterOpTableMap::translateFieldName('OpDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->op_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareEncounterOpTableMap::translateFieldName('OpSrcDate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->op_src_date = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareEncounterOpTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareEncounterOpTableMap::translateFieldName('Diagnosis', TableMap::TYPE_PHPNAME, $indexType)];
            $this->diagnosis = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareEncounterOpTableMap::translateFieldName('Operator', TableMap::TYPE_PHPNAME, $indexType)];
            $this->operator = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareEncounterOpTableMap::translateFieldName('Assistant', TableMap::TYPE_PHPNAME, $indexType)];
            $this->assistant = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareEncounterOpTableMap::translateFieldName('ScrubNurse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->scrub_nurse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareEncounterOpTableMap::translateFieldName('RotatingNurse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rotating_nurse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareEncounterOpTableMap::translateFieldName('Anesthesia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->anesthesia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareEncounterOpTableMap::translateFieldName('AnDoctor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->an_doctor = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareEncounterOpTableMap::translateFieldName('OpTherapy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->op_therapy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareEncounterOpTableMap::translateFieldName('ResultInfo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->result_info = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareEncounterOpTableMap::translateFieldName('EntryTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->entry_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareEncounterOpTableMap::translateFieldName('CutTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cut_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareEncounterOpTableMap::translateFieldName('CloseTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->close_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareEncounterOpTableMap::translateFieldName('ExitTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->exit_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareEncounterOpTableMap::translateFieldName('EntryOut', TableMap::TYPE_PHPNAME, $indexType)];
            $this->entry_out = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareEncounterOpTableMap::translateFieldName('CutClose', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cut_close = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareEncounterOpTableMap::translateFieldName('WaitTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wait_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareEncounterOpTableMap::translateFieldName('BandageTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bandage_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareEncounterOpTableMap::translateFieldName('ReposTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->repos_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareEncounterOpTableMap::translateFieldName('Encoding', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encoding = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareEncounterOpTableMap::translateFieldName('DocDate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doc_date = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareEncounterOpTableMap::translateFieldName('DocTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doc_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareEncounterOpTableMap::translateFieldName('DutyType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->duty_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CareEncounterOpTableMap::translateFieldName('MaterialCodedlist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->material_codedlist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CareEncounterOpTableMap::translateFieldName('ContainerCodedlist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->container_codedlist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CareEncounterOpTableMap::translateFieldName('IcdCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->icd_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CareEncounterOpTableMap::translateFieldName('OpsCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ops_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CareEncounterOpTableMap::translateFieldName('OpsInternCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ops_intern_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CareEncounterOpTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CareEncounterOpTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CareEncounterOpTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CareEncounterOpTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CareEncounterOpTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : CareEncounterOpTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 41; // 41 = CareEncounterOpTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareEncounterOp'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterOpTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareEncounterOpQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareEncounterOp::setDeleted()
     * @see CareEncounterOp::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterOpTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareEncounterOpQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterOpTableMap::DATABASE_NAME);
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
                CareEncounterOpTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareEncounterOpTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareEncounterOpTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_YEAR)) {
            $modifiedColumns[':p' . $index++]  = 'year';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'dept_nr';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OP_ROOM)) {
            $modifiedColumns[':p' . $index++]  = 'op_room';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OP_NR)) {
            $modifiedColumns[':p' . $index++]  = 'op_nr';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OP_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'op_date';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OP_SRC_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'op_src_date';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_DIAGNOSIS)) {
            $modifiedColumns[':p' . $index++]  = 'diagnosis';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OPERATOR)) {
            $modifiedColumns[':p' . $index++]  = 'operator';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ASSISTANT)) {
            $modifiedColumns[':p' . $index++]  = 'assistant';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_SCRUB_NURSE)) {
            $modifiedColumns[':p' . $index++]  = 'scrub_nurse';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ROTATING_NURSE)) {
            $modifiedColumns[':p' . $index++]  = 'rotating_nurse';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ANESTHESIA)) {
            $modifiedColumns[':p' . $index++]  = 'anesthesia';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_AN_DOCTOR)) {
            $modifiedColumns[':p' . $index++]  = 'an_doctor';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OP_THERAPY)) {
            $modifiedColumns[':p' . $index++]  = 'op_therapy';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_RESULT_INFO)) {
            $modifiedColumns[':p' . $index++]  = 'result_info';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ENTRY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'entry_time';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CUT_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'cut_time';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CLOSE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'close_time';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_EXIT_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'exit_time';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ENTRY_OUT)) {
            $modifiedColumns[':p' . $index++]  = 'entry_out';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CUT_CLOSE)) {
            $modifiedColumns[':p' . $index++]  = 'cut_close';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_WAIT_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'wait_time';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_BANDAGE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'bandage_time';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_REPOS_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'repos_time';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ENCODING)) {
            $modifiedColumns[':p' . $index++]  = 'encoding';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_DOC_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'doc_date';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_DOC_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'doc_time';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_DUTY_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'duty_type';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_MATERIAL_CODEDLIST)) {
            $modifiedColumns[':p' . $index++]  = 'material_codedlist';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CONTAINER_CODEDLIST)) {
            $modifiedColumns[':p' . $index++]  = 'container_codedlist';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ICD_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'icd_code';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OPS_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'ops_code';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OPS_INTERN_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'ops_intern_code';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_encounter_op (%s) VALUES (%s)',
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
                    case 'year':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_STR);
                        break;
                    case 'dept_nr':
                        $stmt->bindValue($identifier, $this->dept_nr, PDO::PARAM_INT);
                        break;
                    case 'op_room':
                        $stmt->bindValue($identifier, $this->op_room, PDO::PARAM_STR);
                        break;
                    case 'op_nr':
                        $stmt->bindValue($identifier, $this->op_nr, PDO::PARAM_INT);
                        break;
                    case 'op_date':
                        $stmt->bindValue($identifier, $this->op_date ? $this->op_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'op_src_date':
                        $stmt->bindValue($identifier, $this->op_src_date, PDO::PARAM_STR);
                        break;
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'diagnosis':
                        $stmt->bindValue($identifier, $this->diagnosis, PDO::PARAM_STR);
                        break;
                    case 'operator':
                        $stmt->bindValue($identifier, $this->operator, PDO::PARAM_STR);
                        break;
                    case 'assistant':
                        $stmt->bindValue($identifier, $this->assistant, PDO::PARAM_STR);
                        break;
                    case 'scrub_nurse':
                        $stmt->bindValue($identifier, $this->scrub_nurse, PDO::PARAM_STR);
                        break;
                    case 'rotating_nurse':
                        $stmt->bindValue($identifier, $this->rotating_nurse, PDO::PARAM_STR);
                        break;
                    case 'anesthesia':
                        $stmt->bindValue($identifier, $this->anesthesia, PDO::PARAM_STR);
                        break;
                    case 'an_doctor':
                        $stmt->bindValue($identifier, $this->an_doctor, PDO::PARAM_STR);
                        break;
                    case 'op_therapy':
                        $stmt->bindValue($identifier, $this->op_therapy, PDO::PARAM_STR);
                        break;
                    case 'result_info':
                        $stmt->bindValue($identifier, $this->result_info, PDO::PARAM_STR);
                        break;
                    case 'entry_time':
                        $stmt->bindValue($identifier, $this->entry_time, PDO::PARAM_STR);
                        break;
                    case 'cut_time':
                        $stmt->bindValue($identifier, $this->cut_time, PDO::PARAM_STR);
                        break;
                    case 'close_time':
                        $stmt->bindValue($identifier, $this->close_time, PDO::PARAM_STR);
                        break;
                    case 'exit_time':
                        $stmt->bindValue($identifier, $this->exit_time, PDO::PARAM_STR);
                        break;
                    case 'entry_out':
                        $stmt->bindValue($identifier, $this->entry_out, PDO::PARAM_STR);
                        break;
                    case 'cut_close':
                        $stmt->bindValue($identifier, $this->cut_close, PDO::PARAM_STR);
                        break;
                    case 'wait_time':
                        $stmt->bindValue($identifier, $this->wait_time, PDO::PARAM_STR);
                        break;
                    case 'bandage_time':
                        $stmt->bindValue($identifier, $this->bandage_time, PDO::PARAM_STR);
                        break;
                    case 'repos_time':
                        $stmt->bindValue($identifier, $this->repos_time, PDO::PARAM_STR);
                        break;
                    case 'encoding':
                        $stmt->bindValue($identifier, $this->encoding, PDO::PARAM_STR);
                        break;
                    case 'doc_date':
                        $stmt->bindValue($identifier, $this->doc_date, PDO::PARAM_STR);
                        break;
                    case 'doc_time':
                        $stmt->bindValue($identifier, $this->doc_time, PDO::PARAM_STR);
                        break;
                    case 'duty_type':
                        $stmt->bindValue($identifier, $this->duty_type, PDO::PARAM_STR);
                        break;
                    case 'material_codedlist':
                        $stmt->bindValue($identifier, $this->material_codedlist, PDO::PARAM_STR);
                        break;
                    case 'container_codedlist':
                        $stmt->bindValue($identifier, $this->container_codedlist, PDO::PARAM_STR);
                        break;
                    case 'icd_code':
                        $stmt->bindValue($identifier, $this->icd_code, PDO::PARAM_STR);
                        break;
                    case 'ops_code':
                        $stmt->bindValue($identifier, $this->ops_code, PDO::PARAM_STR);
                        break;
                    case 'ops_intern_code':
                        $stmt->bindValue($identifier, $this->ops_intern_code, PDO::PARAM_STR);
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
        $pos = CareEncounterOpTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getYear();
                break;
            case 2:
                return $this->getDeptNr();
                break;
            case 3:
                return $this->getOpRoom();
                break;
            case 4:
                return $this->getOpNr();
                break;
            case 5:
                return $this->getOpDate();
                break;
            case 6:
                return $this->getOpSrcDate();
                break;
            case 7:
                return $this->getEncounterNr();
                break;
            case 8:
                return $this->getDiagnosis();
                break;
            case 9:
                return $this->getOperator();
                break;
            case 10:
                return $this->getAssistant();
                break;
            case 11:
                return $this->getScrubNurse();
                break;
            case 12:
                return $this->getRotatingNurse();
                break;
            case 13:
                return $this->getAnesthesia();
                break;
            case 14:
                return $this->getAnDoctor();
                break;
            case 15:
                return $this->getOpTherapy();
                break;
            case 16:
                return $this->getResultInfo();
                break;
            case 17:
                return $this->getEntryTime();
                break;
            case 18:
                return $this->getCutTime();
                break;
            case 19:
                return $this->getCloseTime();
                break;
            case 20:
                return $this->getExitTime();
                break;
            case 21:
                return $this->getEntryOut();
                break;
            case 22:
                return $this->getCutClose();
                break;
            case 23:
                return $this->getWaitTime();
                break;
            case 24:
                return $this->getBandageTime();
                break;
            case 25:
                return $this->getReposTime();
                break;
            case 26:
                return $this->getEncoding();
                break;
            case 27:
                return $this->getDocDate();
                break;
            case 28:
                return $this->getDocTime();
                break;
            case 29:
                return $this->getDutyType();
                break;
            case 30:
                return $this->getMaterialCodedlist();
                break;
            case 31:
                return $this->getContainerCodedlist();
                break;
            case 32:
                return $this->getIcdCode();
                break;
            case 33:
                return $this->getOpsCode();
                break;
            case 34:
                return $this->getOpsInternCode();
                break;
            case 35:
                return $this->getStatus();
                break;
            case 36:
                return $this->getHistory();
                break;
            case 37:
                return $this->getModifyId();
                break;
            case 38:
                return $this->getModifyTime();
                break;
            case 39:
                return $this->getCreateId();
                break;
            case 40:
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

        if (isset($alreadyDumpedObjects['CareEncounterOp'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareEncounterOp'][$this->hashCode()] = true;
        $keys = CareEncounterOpTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getYear(),
            $keys[2] => $this->getDeptNr(),
            $keys[3] => $this->getOpRoom(),
            $keys[4] => $this->getOpNr(),
            $keys[5] => $this->getOpDate(),
            $keys[6] => $this->getOpSrcDate(),
            $keys[7] => $this->getEncounterNr(),
            $keys[8] => $this->getDiagnosis(),
            $keys[9] => $this->getOperator(),
            $keys[10] => $this->getAssistant(),
            $keys[11] => $this->getScrubNurse(),
            $keys[12] => $this->getRotatingNurse(),
            $keys[13] => $this->getAnesthesia(),
            $keys[14] => $this->getAnDoctor(),
            $keys[15] => $this->getOpTherapy(),
            $keys[16] => $this->getResultInfo(),
            $keys[17] => $this->getEntryTime(),
            $keys[18] => $this->getCutTime(),
            $keys[19] => $this->getCloseTime(),
            $keys[20] => $this->getExitTime(),
            $keys[21] => $this->getEntryOut(),
            $keys[22] => $this->getCutClose(),
            $keys[23] => $this->getWaitTime(),
            $keys[24] => $this->getBandageTime(),
            $keys[25] => $this->getReposTime(),
            $keys[26] => $this->getEncoding(),
            $keys[27] => $this->getDocDate(),
            $keys[28] => $this->getDocTime(),
            $keys[29] => $this->getDutyType(),
            $keys[30] => $this->getMaterialCodedlist(),
            $keys[31] => $this->getContainerCodedlist(),
            $keys[32] => $this->getIcdCode(),
            $keys[33] => $this->getOpsCode(),
            $keys[34] => $this->getOpsInternCode(),
            $keys[35] => $this->getStatus(),
            $keys[36] => $this->getHistory(),
            $keys[37] => $this->getModifyId(),
            $keys[38] => $this->getModifyTime(),
            $keys[39] => $this->getCreateId(),
            $keys[40] => $this->getCreateTime(),
        );
        if ($result[$keys[5]] instanceof \DateTimeInterface) {
            $result[$keys[5]] = $result[$keys[5]]->format('c');
        }

        if ($result[$keys[38]] instanceof \DateTimeInterface) {
            $result[$keys[38]] = $result[$keys[38]]->format('c');
        }

        if ($result[$keys[40]] instanceof \DateTimeInterface) {
            $result[$keys[40]] = $result[$keys[40]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareEncounterOp
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareEncounterOpTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareEncounterOp
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNr($value);
                break;
            case 1:
                $this->setYear($value);
                break;
            case 2:
                $this->setDeptNr($value);
                break;
            case 3:
                $this->setOpRoom($value);
                break;
            case 4:
                $this->setOpNr($value);
                break;
            case 5:
                $this->setOpDate($value);
                break;
            case 6:
                $this->setOpSrcDate($value);
                break;
            case 7:
                $this->setEncounterNr($value);
                break;
            case 8:
                $this->setDiagnosis($value);
                break;
            case 9:
                $this->setOperator($value);
                break;
            case 10:
                $this->setAssistant($value);
                break;
            case 11:
                $this->setScrubNurse($value);
                break;
            case 12:
                $this->setRotatingNurse($value);
                break;
            case 13:
                $this->setAnesthesia($value);
                break;
            case 14:
                $this->setAnDoctor($value);
                break;
            case 15:
                $this->setOpTherapy($value);
                break;
            case 16:
                $this->setResultInfo($value);
                break;
            case 17:
                $this->setEntryTime($value);
                break;
            case 18:
                $this->setCutTime($value);
                break;
            case 19:
                $this->setCloseTime($value);
                break;
            case 20:
                $this->setExitTime($value);
                break;
            case 21:
                $this->setEntryOut($value);
                break;
            case 22:
                $this->setCutClose($value);
                break;
            case 23:
                $this->setWaitTime($value);
                break;
            case 24:
                $this->setBandageTime($value);
                break;
            case 25:
                $this->setReposTime($value);
                break;
            case 26:
                $this->setEncoding($value);
                break;
            case 27:
                $this->setDocDate($value);
                break;
            case 28:
                $this->setDocTime($value);
                break;
            case 29:
                $this->setDutyType($value);
                break;
            case 30:
                $this->setMaterialCodedlist($value);
                break;
            case 31:
                $this->setContainerCodedlist($value);
                break;
            case 32:
                $this->setIcdCode($value);
                break;
            case 33:
                $this->setOpsCode($value);
                break;
            case 34:
                $this->setOpsInternCode($value);
                break;
            case 35:
                $this->setStatus($value);
                break;
            case 36:
                $this->setHistory($value);
                break;
            case 37:
                $this->setModifyId($value);
                break;
            case 38:
                $this->setModifyTime($value);
                break;
            case 39:
                $this->setCreateId($value);
                break;
            case 40:
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
        $keys = CareEncounterOpTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setYear($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDeptNr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOpRoom($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOpNr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOpDate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOpSrcDate($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setEncounterNr($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setDiagnosis($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOperator($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setAssistant($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setScrubNurse($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setRotatingNurse($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setAnesthesia($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setAnDoctor($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOpTherapy($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setResultInfo($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setEntryTime($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setCutTime($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setCloseTime($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setExitTime($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setEntryOut($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setCutClose($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setWaitTime($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setBandageTime($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setReposTime($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setEncoding($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setDocDate($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setDocTime($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setDutyType($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setMaterialCodedlist($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setContainerCodedlist($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setIcdCode($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setOpsCode($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setOpsInternCode($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setStatus($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setHistory($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setModifyId($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setModifyTime($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setCreateId($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setCreateTime($arr[$keys[40]]);
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
     * @return $this|\CareMd\CareMd\CareEncounterOp The current object, for fluid interface
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
        $criteria = new Criteria(CareEncounterOpTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareEncounterOpTableMap::COL_NR)) {
            $criteria->add(CareEncounterOpTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_YEAR)) {
            $criteria->add(CareEncounterOpTableMap::COL_YEAR, $this->year);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_DEPT_NR)) {
            $criteria->add(CareEncounterOpTableMap::COL_DEPT_NR, $this->dept_nr);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OP_ROOM)) {
            $criteria->add(CareEncounterOpTableMap::COL_OP_ROOM, $this->op_room);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OP_NR)) {
            $criteria->add(CareEncounterOpTableMap::COL_OP_NR, $this->op_nr);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OP_DATE)) {
            $criteria->add(CareEncounterOpTableMap::COL_OP_DATE, $this->op_date);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OP_SRC_DATE)) {
            $criteria->add(CareEncounterOpTableMap::COL_OP_SRC_DATE, $this->op_src_date);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareEncounterOpTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_DIAGNOSIS)) {
            $criteria->add(CareEncounterOpTableMap::COL_DIAGNOSIS, $this->diagnosis);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OPERATOR)) {
            $criteria->add(CareEncounterOpTableMap::COL_OPERATOR, $this->operator);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ASSISTANT)) {
            $criteria->add(CareEncounterOpTableMap::COL_ASSISTANT, $this->assistant);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_SCRUB_NURSE)) {
            $criteria->add(CareEncounterOpTableMap::COL_SCRUB_NURSE, $this->scrub_nurse);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ROTATING_NURSE)) {
            $criteria->add(CareEncounterOpTableMap::COL_ROTATING_NURSE, $this->rotating_nurse);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ANESTHESIA)) {
            $criteria->add(CareEncounterOpTableMap::COL_ANESTHESIA, $this->anesthesia);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_AN_DOCTOR)) {
            $criteria->add(CareEncounterOpTableMap::COL_AN_DOCTOR, $this->an_doctor);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OP_THERAPY)) {
            $criteria->add(CareEncounterOpTableMap::COL_OP_THERAPY, $this->op_therapy);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_RESULT_INFO)) {
            $criteria->add(CareEncounterOpTableMap::COL_RESULT_INFO, $this->result_info);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ENTRY_TIME)) {
            $criteria->add(CareEncounterOpTableMap::COL_ENTRY_TIME, $this->entry_time);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CUT_TIME)) {
            $criteria->add(CareEncounterOpTableMap::COL_CUT_TIME, $this->cut_time);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CLOSE_TIME)) {
            $criteria->add(CareEncounterOpTableMap::COL_CLOSE_TIME, $this->close_time);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_EXIT_TIME)) {
            $criteria->add(CareEncounterOpTableMap::COL_EXIT_TIME, $this->exit_time);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ENTRY_OUT)) {
            $criteria->add(CareEncounterOpTableMap::COL_ENTRY_OUT, $this->entry_out);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CUT_CLOSE)) {
            $criteria->add(CareEncounterOpTableMap::COL_CUT_CLOSE, $this->cut_close);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_WAIT_TIME)) {
            $criteria->add(CareEncounterOpTableMap::COL_WAIT_TIME, $this->wait_time);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_BANDAGE_TIME)) {
            $criteria->add(CareEncounterOpTableMap::COL_BANDAGE_TIME, $this->bandage_time);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_REPOS_TIME)) {
            $criteria->add(CareEncounterOpTableMap::COL_REPOS_TIME, $this->repos_time);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ENCODING)) {
            $criteria->add(CareEncounterOpTableMap::COL_ENCODING, $this->encoding);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_DOC_DATE)) {
            $criteria->add(CareEncounterOpTableMap::COL_DOC_DATE, $this->doc_date);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_DOC_TIME)) {
            $criteria->add(CareEncounterOpTableMap::COL_DOC_TIME, $this->doc_time);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_DUTY_TYPE)) {
            $criteria->add(CareEncounterOpTableMap::COL_DUTY_TYPE, $this->duty_type);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_MATERIAL_CODEDLIST)) {
            $criteria->add(CareEncounterOpTableMap::COL_MATERIAL_CODEDLIST, $this->material_codedlist);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CONTAINER_CODEDLIST)) {
            $criteria->add(CareEncounterOpTableMap::COL_CONTAINER_CODEDLIST, $this->container_codedlist);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_ICD_CODE)) {
            $criteria->add(CareEncounterOpTableMap::COL_ICD_CODE, $this->icd_code);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OPS_CODE)) {
            $criteria->add(CareEncounterOpTableMap::COL_OPS_CODE, $this->ops_code);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_OPS_INTERN_CODE)) {
            $criteria->add(CareEncounterOpTableMap::COL_OPS_INTERN_CODE, $this->ops_intern_code);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_STATUS)) {
            $criteria->add(CareEncounterOpTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_HISTORY)) {
            $criteria->add(CareEncounterOpTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareEncounterOpTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareEncounterOpTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CREATE_ID)) {
            $criteria->add(CareEncounterOpTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareEncounterOpTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareEncounterOpTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareEncounterOpQuery::create();
        $criteria->add(CareEncounterOpTableMap::COL_NR, $this->nr);

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
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getNr();
    }

    /**
     * Generic method to set the primary key (nr column).
     *
     * @param       int $key Primary key.
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
     * @param      object $copyObj An object of \CareMd\CareMd\CareEncounterOp (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setYear($this->getYear());
        $copyObj->setDeptNr($this->getDeptNr());
        $copyObj->setOpRoom($this->getOpRoom());
        $copyObj->setOpNr($this->getOpNr());
        $copyObj->setOpDate($this->getOpDate());
        $copyObj->setOpSrcDate($this->getOpSrcDate());
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setDiagnosis($this->getDiagnosis());
        $copyObj->setOperator($this->getOperator());
        $copyObj->setAssistant($this->getAssistant());
        $copyObj->setScrubNurse($this->getScrubNurse());
        $copyObj->setRotatingNurse($this->getRotatingNurse());
        $copyObj->setAnesthesia($this->getAnesthesia());
        $copyObj->setAnDoctor($this->getAnDoctor());
        $copyObj->setOpTherapy($this->getOpTherapy());
        $copyObj->setResultInfo($this->getResultInfo());
        $copyObj->setEntryTime($this->getEntryTime());
        $copyObj->setCutTime($this->getCutTime());
        $copyObj->setCloseTime($this->getCloseTime());
        $copyObj->setExitTime($this->getExitTime());
        $copyObj->setEntryOut($this->getEntryOut());
        $copyObj->setCutClose($this->getCutClose());
        $copyObj->setWaitTime($this->getWaitTime());
        $copyObj->setBandageTime($this->getBandageTime());
        $copyObj->setReposTime($this->getReposTime());
        $copyObj->setEncoding($this->getEncoding());
        $copyObj->setDocDate($this->getDocDate());
        $copyObj->setDocTime($this->getDocTime());
        $copyObj->setDutyType($this->getDutyType());
        $copyObj->setMaterialCodedlist($this->getMaterialCodedlist());
        $copyObj->setContainerCodedlist($this->getContainerCodedlist());
        $copyObj->setIcdCode($this->getIcdCode());
        $copyObj->setOpsCode($this->getOpsCode());
        $copyObj->setOpsInternCode($this->getOpsInternCode());
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
     * @return \CareMd\CareMd\CareEncounterOp Clone of current object.
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
        $this->year = null;
        $this->dept_nr = null;
        $this->op_room = null;
        $this->op_nr = null;
        $this->op_date = null;
        $this->op_src_date = null;
        $this->encounter_nr = null;
        $this->diagnosis = null;
        $this->operator = null;
        $this->assistant = null;
        $this->scrub_nurse = null;
        $this->rotating_nurse = null;
        $this->anesthesia = null;
        $this->an_doctor = null;
        $this->op_therapy = null;
        $this->result_info = null;
        $this->entry_time = null;
        $this->cut_time = null;
        $this->close_time = null;
        $this->exit_time = null;
        $this->entry_out = null;
        $this->cut_close = null;
        $this->wait_time = null;
        $this->bandage_time = null;
        $this->repos_time = null;
        $this->encoding = null;
        $this->doc_date = null;
        $this->doc_time = null;
        $this->duty_type = null;
        $this->material_codedlist = null;
        $this->container_codedlist = null;
        $this->icd_code = null;
        $this->ops_code = null;
        $this->ops_intern_code = null;
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
        return (string) $this->exportTo(CareEncounterOpTableMap::DEFAULT_STRING_FORMAT);
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
