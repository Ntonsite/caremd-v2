<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareOpMedDocQuery as ChildCareOpMedDocQuery;
use CareMd\CareMd\Map\CareOpMedDocTableMap;
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
 * Base class that represents a row from the 'care_op_med_doc' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareOpMedDoc implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareOpMedDocTableMap';


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
     * The value for the op_date field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $op_date;

    /**
     * The value for the operator field.
     *
     * @var        string
     */
    protected $operator;

    /**
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

    /**
     * The value for the dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $dept_nr;

    /**
     * The value for the diagnosis field.
     *
     * @var        string
     */
    protected $diagnosis;

    /**
     * The value for the localize field.
     *
     * @var        string
     */
    protected $localize;

    /**
     * The value for the therapy field.
     *
     * @var        string
     */
    protected $therapy;

    /**
     * The value for the special field.
     *
     * @var        string
     */
    protected $special;

    /**
     * The value for the class_s field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $class_s;

    /**
     * The value for the class_l field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $class_l;

    /**
     * The value for the op_start field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $op_start;

    /**
     * The value for the op_end field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $op_end;

    /**
     * The value for the anasthetist field.
     *
     * @var        string
     */
    protected $anasthetist;

    /**
     * The value for the scrub_nurse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $scrub_nurse;

    /**
     * The value for the assistant field.
     *
     * @var        string
     */
    protected $assistant;

    /**
     * The value for the anaesthesia_type field.
     *
     * @var        string
     */
    protected $anaesthesia_type;

    /**
     * The value for the postorder field.
     *
     * @var        string
     */
    protected $postorder;

    /**
     * The value for the indication field.
     *
     * @var        string
     */
    protected $indication;

    /**
     * The value for the procedure_or field.
     *
     * @var        string
     */
    protected $procedure_or;

    /**
     * The value for the op_room field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $op_room;

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
        $this->op_date = '';
        $this->encounter_nr = 0;
        $this->dept_nr = 0;
        $this->class_s = 0;
        $this->class_l = 0;
        $this->op_start = '';
        $this->op_end = '';
        $this->scrub_nurse = '';
        $this->op_room = '';
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareOpMedDoc object.
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
     * Compares this with another <code>CareOpMedDoc</code> instance.  If
     * <code>obj</code> is an instance of <code>CareOpMedDoc</code>, delegates to
     * <code>equals(CareOpMedDoc)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareOpMedDoc The current object, for fluid interface
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
     * Get the [op_date] column value.
     *
     * @return string
     */
    public function getOpDate()
    {
        return $this->op_date;
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
     * Get the [encounter_nr] column value.
     *
     * @return int
     */
    public function getEncounterNr()
    {
        return $this->encounter_nr;
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
     * Get the [diagnosis] column value.
     *
     * @return string
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Get the [localize] column value.
     *
     * @return string
     */
    public function getLocalize()
    {
        return $this->localize;
    }

    /**
     * Get the [therapy] column value.
     *
     * @return string
     */
    public function getTherapy()
    {
        return $this->therapy;
    }

    /**
     * Get the [special] column value.
     *
     * @return string
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * Get the [class_s] column value.
     *
     * @return int
     */
    public function getClassS()
    {
        return $this->class_s;
    }

    /**
     * Get the [class_l] column value.
     *
     * @return int
     */
    public function getClassL()
    {
        return $this->class_l;
    }

    /**
     * Get the [op_start] column value.
     *
     * @return string
     */
    public function getOpStart()
    {
        return $this->op_start;
    }

    /**
     * Get the [op_end] column value.
     *
     * @return string
     */
    public function getOpEnd()
    {
        return $this->op_end;
    }

    /**
     * Get the [anasthetist] column value.
     *
     * @return string
     */
    public function getAnasthetist()
    {
        return $this->anasthetist;
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
     * Get the [assistant] column value.
     *
     * @return string
     */
    public function getAssistant()
    {
        return $this->assistant;
    }

    /**
     * Get the [anaesthesia_type] column value.
     *
     * @return string
     */
    public function getAnaesthesiaType()
    {
        return $this->anaesthesia_type;
    }

    /**
     * Get the [postorder] column value.
     *
     * @return string
     */
    public function getPostorder()
    {
        return $this->postorder;
    }

    /**
     * Get the [indication] column value.
     *
     * @return string
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Get the [procedure_or] column value.
     *
     * @return string
     */
    public function getProcedureOr()
    {
        return $this->procedure_or;
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
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [op_date] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setOpDate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_date !== $v) {
            $this->op_date = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_OP_DATE] = true;
        }

        return $this;
    } // setOpDate()

    /**
     * Set the value of [operator] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setOperator($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->operator !== $v) {
            $this->operator = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_OPERATOR] = true;
        }

        return $this;
    } // setOperator()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dept_nr !== $v) {
            $this->dept_nr = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_DEPT_NR] = true;
        }

        return $this;
    } // setDeptNr()

    /**
     * Set the value of [diagnosis] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setDiagnosis($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->diagnosis !== $v) {
            $this->diagnosis = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_DIAGNOSIS] = true;
        }

        return $this;
    } // setDiagnosis()

    /**
     * Set the value of [localize] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setLocalize($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->localize !== $v) {
            $this->localize = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_LOCALIZE] = true;
        }

        return $this;
    } // setLocalize()

    /**
     * Set the value of [therapy] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setTherapy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->therapy !== $v) {
            $this->therapy = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_THERAPY] = true;
        }

        return $this;
    } // setTherapy()

    /**
     * Set the value of [special] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setSpecial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->special !== $v) {
            $this->special = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_SPECIAL] = true;
        }

        return $this;
    } // setSpecial()

    /**
     * Set the value of [class_s] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setClassS($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->class_s !== $v) {
            $this->class_s = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_CLASS_S] = true;
        }

        return $this;
    } // setClassS()

    /**
     * Set the value of [class_l] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setClassL($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->class_l !== $v) {
            $this->class_l = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_CLASS_L] = true;
        }

        return $this;
    } // setClassL()

    /**
     * Set the value of [op_start] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setOpStart($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_start !== $v) {
            $this->op_start = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_OP_START] = true;
        }

        return $this;
    } // setOpStart()

    /**
     * Set the value of [op_end] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setOpEnd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_end !== $v) {
            $this->op_end = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_OP_END] = true;
        }

        return $this;
    } // setOpEnd()

    /**
     * Set the value of [anasthetist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setAnasthetist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->anasthetist !== $v) {
            $this->anasthetist = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_ANASTHETIST] = true;
        }

        return $this;
    } // setAnasthetist()

    /**
     * Set the value of [scrub_nurse] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setScrubNurse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->scrub_nurse !== $v) {
            $this->scrub_nurse = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_SCRUB_NURSE] = true;
        }

        return $this;
    } // setScrubNurse()

    /**
     * Set the value of [assistant] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setAssistant($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->assistant !== $v) {
            $this->assistant = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_ASSISTANT] = true;
        }

        return $this;
    } // setAssistant()

    /**
     * Set the value of [anaesthesia_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setAnaesthesiaType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->anaesthesia_type !== $v) {
            $this->anaesthesia_type = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_ANAESTHESIA_TYPE] = true;
        }

        return $this;
    } // setAnaesthesiaType()

    /**
     * Set the value of [postorder] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setPostorder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postorder !== $v) {
            $this->postorder = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_POSTORDER] = true;
        }

        return $this;
    } // setPostorder()

    /**
     * Set the value of [indication] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setIndication($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indication !== $v) {
            $this->indication = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_INDICATION] = true;
        }

        return $this;
    } // setIndication()

    /**
     * Set the value of [procedure_or] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setProcedureOr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->procedure_or !== $v) {
            $this->procedure_or = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_PROCEDURE_OR] = true;
        }

        return $this;
    } // setProcedureOr()

    /**
     * Set the value of [op_room] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setOpRoom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_room !== $v) {
            $this->op_room = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_OP_ROOM] = true;
        }

        return $this;
    } // setOpRoom()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareOpMedDocTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareOpMedDocTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareOpMedDocTableMap::COL_CREATE_TIME] = true;
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
            if ($this->op_date !== '') {
                return false;
            }

            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->dept_nr !== 0) {
                return false;
            }

            if ($this->class_s !== 0) {
                return false;
            }

            if ($this->class_l !== 0) {
                return false;
            }

            if ($this->op_start !== '') {
                return false;
            }

            if ($this->op_end !== '') {
                return false;
            }

            if ($this->scrub_nurse !== '') {
                return false;
            }

            if ($this->op_room !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareOpMedDocTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareOpMedDocTableMap::translateFieldName('OpDate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->op_date = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareOpMedDocTableMap::translateFieldName('Operator', TableMap::TYPE_PHPNAME, $indexType)];
            $this->operator = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareOpMedDocTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareOpMedDocTableMap::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareOpMedDocTableMap::translateFieldName('Diagnosis', TableMap::TYPE_PHPNAME, $indexType)];
            $this->diagnosis = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareOpMedDocTableMap::translateFieldName('Localize', TableMap::TYPE_PHPNAME, $indexType)];
            $this->localize = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareOpMedDocTableMap::translateFieldName('Therapy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->therapy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareOpMedDocTableMap::translateFieldName('Special', TableMap::TYPE_PHPNAME, $indexType)];
            $this->special = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareOpMedDocTableMap::translateFieldName('ClassS', TableMap::TYPE_PHPNAME, $indexType)];
            $this->class_s = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareOpMedDocTableMap::translateFieldName('ClassL', TableMap::TYPE_PHPNAME, $indexType)];
            $this->class_l = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareOpMedDocTableMap::translateFieldName('OpStart', TableMap::TYPE_PHPNAME, $indexType)];
            $this->op_start = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareOpMedDocTableMap::translateFieldName('OpEnd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->op_end = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareOpMedDocTableMap::translateFieldName('Anasthetist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->anasthetist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareOpMedDocTableMap::translateFieldName('ScrubNurse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->scrub_nurse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareOpMedDocTableMap::translateFieldName('Assistant', TableMap::TYPE_PHPNAME, $indexType)];
            $this->assistant = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareOpMedDocTableMap::translateFieldName('AnaesthesiaType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->anaesthesia_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareOpMedDocTableMap::translateFieldName('Postorder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->postorder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareOpMedDocTableMap::translateFieldName('Indication', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indication = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareOpMedDocTableMap::translateFieldName('ProcedureOr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->procedure_or = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareOpMedDocTableMap::translateFieldName('OpRoom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->op_room = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareOpMedDocTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareOpMedDocTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareOpMedDocTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareOpMedDocTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareOpMedDocTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareOpMedDocTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 27; // 27 = CareOpMedDocTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareOpMedDoc'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareOpMedDocTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareOpMedDocQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareOpMedDoc::setDeleted()
     * @see CareOpMedDoc::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareOpMedDocTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareOpMedDocQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareOpMedDocTableMap::DATABASE_NAME);
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
                CareOpMedDocTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareOpMedDocTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareOpMedDocTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_OP_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'op_date';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_OPERATOR)) {
            $modifiedColumns[':p' . $index++]  = 'operator';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'dept_nr';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_DIAGNOSIS)) {
            $modifiedColumns[':p' . $index++]  = 'diagnosis';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_LOCALIZE)) {
            $modifiedColumns[':p' . $index++]  = 'localize';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_THERAPY)) {
            $modifiedColumns[':p' . $index++]  = 'therapy';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_SPECIAL)) {
            $modifiedColumns[':p' . $index++]  = 'special';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_CLASS_S)) {
            $modifiedColumns[':p' . $index++]  = 'class_s';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_CLASS_L)) {
            $modifiedColumns[':p' . $index++]  = 'class_l';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_OP_START)) {
            $modifiedColumns[':p' . $index++]  = 'op_start';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_OP_END)) {
            $modifiedColumns[':p' . $index++]  = 'op_end';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_ANASTHETIST)) {
            $modifiedColumns[':p' . $index++]  = 'anasthetist';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_SCRUB_NURSE)) {
            $modifiedColumns[':p' . $index++]  = 'scrub_nurse';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_ASSISTANT)) {
            $modifiedColumns[':p' . $index++]  = 'assistant';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_ANAESTHESIA_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'anaesthesia_type';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_POSTORDER)) {
            $modifiedColumns[':p' . $index++]  = 'postorder';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_INDICATION)) {
            $modifiedColumns[':p' . $index++]  = 'indication';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_PROCEDURE_OR)) {
            $modifiedColumns[':p' . $index++]  = 'procedure_or';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_OP_ROOM)) {
            $modifiedColumns[':p' . $index++]  = 'op_room';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_op_med_doc (%s) VALUES (%s)',
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
                    case 'op_date':
                        $stmt->bindValue($identifier, $this->op_date, PDO::PARAM_STR);
                        break;
                    case 'operator':
                        $stmt->bindValue($identifier, $this->operator, PDO::PARAM_STR);
                        break;
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'dept_nr':
                        $stmt->bindValue($identifier, $this->dept_nr, PDO::PARAM_INT);
                        break;
                    case 'diagnosis':
                        $stmt->bindValue($identifier, $this->diagnosis, PDO::PARAM_STR);
                        break;
                    case 'localize':
                        $stmt->bindValue($identifier, $this->localize, PDO::PARAM_STR);
                        break;
                    case 'therapy':
                        $stmt->bindValue($identifier, $this->therapy, PDO::PARAM_STR);
                        break;
                    case 'special':
                        $stmt->bindValue($identifier, $this->special, PDO::PARAM_STR);
                        break;
                    case 'class_s':
                        $stmt->bindValue($identifier, $this->class_s, PDO::PARAM_INT);
                        break;
                    case 'class_l':
                        $stmt->bindValue($identifier, $this->class_l, PDO::PARAM_INT);
                        break;
                    case 'op_start':
                        $stmt->bindValue($identifier, $this->op_start, PDO::PARAM_STR);
                        break;
                    case 'op_end':
                        $stmt->bindValue($identifier, $this->op_end, PDO::PARAM_STR);
                        break;
                    case 'anasthetist':
                        $stmt->bindValue($identifier, $this->anasthetist, PDO::PARAM_STR);
                        break;
                    case 'scrub_nurse':
                        $stmt->bindValue($identifier, $this->scrub_nurse, PDO::PARAM_STR);
                        break;
                    case 'assistant':
                        $stmt->bindValue($identifier, $this->assistant, PDO::PARAM_STR);
                        break;
                    case 'anaesthesia_type':
                        $stmt->bindValue($identifier, $this->anaesthesia_type, PDO::PARAM_STR);
                        break;
                    case 'postorder':
                        $stmt->bindValue($identifier, $this->postorder, PDO::PARAM_STR);
                        break;
                    case 'indication':
                        $stmt->bindValue($identifier, $this->indication, PDO::PARAM_STR);
                        break;
                    case 'procedure_or':
                        $stmt->bindValue($identifier, $this->procedure_or, PDO::PARAM_STR);
                        break;
                    case 'op_room':
                        $stmt->bindValue($identifier, $this->op_room, PDO::PARAM_STR);
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
        $pos = CareOpMedDocTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOpDate();
                break;
            case 2:
                return $this->getOperator();
                break;
            case 3:
                return $this->getEncounterNr();
                break;
            case 4:
                return $this->getDeptNr();
                break;
            case 5:
                return $this->getDiagnosis();
                break;
            case 6:
                return $this->getLocalize();
                break;
            case 7:
                return $this->getTherapy();
                break;
            case 8:
                return $this->getSpecial();
                break;
            case 9:
                return $this->getClassS();
                break;
            case 10:
                return $this->getClassL();
                break;
            case 11:
                return $this->getOpStart();
                break;
            case 12:
                return $this->getOpEnd();
                break;
            case 13:
                return $this->getAnasthetist();
                break;
            case 14:
                return $this->getScrubNurse();
                break;
            case 15:
                return $this->getAssistant();
                break;
            case 16:
                return $this->getAnaesthesiaType();
                break;
            case 17:
                return $this->getPostorder();
                break;
            case 18:
                return $this->getIndication();
                break;
            case 19:
                return $this->getProcedureOr();
                break;
            case 20:
                return $this->getOpRoom();
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

        if (isset($alreadyDumpedObjects['CareOpMedDoc'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareOpMedDoc'][$this->hashCode()] = true;
        $keys = CareOpMedDocTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getOpDate(),
            $keys[2] => $this->getOperator(),
            $keys[3] => $this->getEncounterNr(),
            $keys[4] => $this->getDeptNr(),
            $keys[5] => $this->getDiagnosis(),
            $keys[6] => $this->getLocalize(),
            $keys[7] => $this->getTherapy(),
            $keys[8] => $this->getSpecial(),
            $keys[9] => $this->getClassS(),
            $keys[10] => $this->getClassL(),
            $keys[11] => $this->getOpStart(),
            $keys[12] => $this->getOpEnd(),
            $keys[13] => $this->getAnasthetist(),
            $keys[14] => $this->getScrubNurse(),
            $keys[15] => $this->getAssistant(),
            $keys[16] => $this->getAnaesthesiaType(),
            $keys[17] => $this->getPostorder(),
            $keys[18] => $this->getIndication(),
            $keys[19] => $this->getProcedureOr(),
            $keys[20] => $this->getOpRoom(),
            $keys[21] => $this->getStatus(),
            $keys[22] => $this->getHistory(),
            $keys[23] => $this->getModifyId(),
            $keys[24] => $this->getModifyTime(),
            $keys[25] => $this->getCreateId(),
            $keys[26] => $this->getCreateTime(),
        );
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
     * @return $this|\CareMd\CareMd\CareOpMedDoc
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareOpMedDocTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareOpMedDoc
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNr($value);
                break;
            case 1:
                $this->setOpDate($value);
                break;
            case 2:
                $this->setOperator($value);
                break;
            case 3:
                $this->setEncounterNr($value);
                break;
            case 4:
                $this->setDeptNr($value);
                break;
            case 5:
                $this->setDiagnosis($value);
                break;
            case 6:
                $this->setLocalize($value);
                break;
            case 7:
                $this->setTherapy($value);
                break;
            case 8:
                $this->setSpecial($value);
                break;
            case 9:
                $this->setClassS($value);
                break;
            case 10:
                $this->setClassL($value);
                break;
            case 11:
                $this->setOpStart($value);
                break;
            case 12:
                $this->setOpEnd($value);
                break;
            case 13:
                $this->setAnasthetist($value);
                break;
            case 14:
                $this->setScrubNurse($value);
                break;
            case 15:
                $this->setAssistant($value);
                break;
            case 16:
                $this->setAnaesthesiaType($value);
                break;
            case 17:
                $this->setPostorder($value);
                break;
            case 18:
                $this->setIndication($value);
                break;
            case 19:
                $this->setProcedureOr($value);
                break;
            case 20:
                $this->setOpRoom($value);
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
        $keys = CareOpMedDocTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOpDate($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOperator($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setEncounterNr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDeptNr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setDiagnosis($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setLocalize($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setTherapy($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setSpecial($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setClassS($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setClassL($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOpStart($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOpEnd($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setAnasthetist($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setScrubNurse($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setAssistant($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setAnaesthesiaType($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPostorder($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setIndication($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setProcedureOr($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOpRoom($arr[$keys[20]]);
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
     * @return $this|\CareMd\CareMd\CareOpMedDoc The current object, for fluid interface
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
        $criteria = new Criteria(CareOpMedDocTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareOpMedDocTableMap::COL_NR)) {
            $criteria->add(CareOpMedDocTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_OP_DATE)) {
            $criteria->add(CareOpMedDocTableMap::COL_OP_DATE, $this->op_date);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_OPERATOR)) {
            $criteria->add(CareOpMedDocTableMap::COL_OPERATOR, $this->operator);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareOpMedDocTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_DEPT_NR)) {
            $criteria->add(CareOpMedDocTableMap::COL_DEPT_NR, $this->dept_nr);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_DIAGNOSIS)) {
            $criteria->add(CareOpMedDocTableMap::COL_DIAGNOSIS, $this->diagnosis);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_LOCALIZE)) {
            $criteria->add(CareOpMedDocTableMap::COL_LOCALIZE, $this->localize);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_THERAPY)) {
            $criteria->add(CareOpMedDocTableMap::COL_THERAPY, $this->therapy);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_SPECIAL)) {
            $criteria->add(CareOpMedDocTableMap::COL_SPECIAL, $this->special);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_CLASS_S)) {
            $criteria->add(CareOpMedDocTableMap::COL_CLASS_S, $this->class_s);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_CLASS_L)) {
            $criteria->add(CareOpMedDocTableMap::COL_CLASS_L, $this->class_l);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_OP_START)) {
            $criteria->add(CareOpMedDocTableMap::COL_OP_START, $this->op_start);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_OP_END)) {
            $criteria->add(CareOpMedDocTableMap::COL_OP_END, $this->op_end);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_ANASTHETIST)) {
            $criteria->add(CareOpMedDocTableMap::COL_ANASTHETIST, $this->anasthetist);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_SCRUB_NURSE)) {
            $criteria->add(CareOpMedDocTableMap::COL_SCRUB_NURSE, $this->scrub_nurse);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_ASSISTANT)) {
            $criteria->add(CareOpMedDocTableMap::COL_ASSISTANT, $this->assistant);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_ANAESTHESIA_TYPE)) {
            $criteria->add(CareOpMedDocTableMap::COL_ANAESTHESIA_TYPE, $this->anaesthesia_type);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_POSTORDER)) {
            $criteria->add(CareOpMedDocTableMap::COL_POSTORDER, $this->postorder);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_INDICATION)) {
            $criteria->add(CareOpMedDocTableMap::COL_INDICATION, $this->indication);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_PROCEDURE_OR)) {
            $criteria->add(CareOpMedDocTableMap::COL_PROCEDURE_OR, $this->procedure_or);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_OP_ROOM)) {
            $criteria->add(CareOpMedDocTableMap::COL_OP_ROOM, $this->op_room);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_STATUS)) {
            $criteria->add(CareOpMedDocTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_HISTORY)) {
            $criteria->add(CareOpMedDocTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareOpMedDocTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareOpMedDocTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_CREATE_ID)) {
            $criteria->add(CareOpMedDocTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareOpMedDocTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareOpMedDocTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareOpMedDocQuery::create();
        $criteria->add(CareOpMedDocTableMap::COL_NR, $this->nr);

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
     * @param      object $copyObj An object of \CareMd\CareMd\CareOpMedDoc (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpDate($this->getOpDate());
        $copyObj->setOperator($this->getOperator());
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setDeptNr($this->getDeptNr());
        $copyObj->setDiagnosis($this->getDiagnosis());
        $copyObj->setLocalize($this->getLocalize());
        $copyObj->setTherapy($this->getTherapy());
        $copyObj->setSpecial($this->getSpecial());
        $copyObj->setClassS($this->getClassS());
        $copyObj->setClassL($this->getClassL());
        $copyObj->setOpStart($this->getOpStart());
        $copyObj->setOpEnd($this->getOpEnd());
        $copyObj->setAnasthetist($this->getAnasthetist());
        $copyObj->setScrubNurse($this->getScrubNurse());
        $copyObj->setAssistant($this->getAssistant());
        $copyObj->setAnaesthesiaType($this->getAnaesthesiaType());
        $copyObj->setPostorder($this->getPostorder());
        $copyObj->setIndication($this->getIndication());
        $copyObj->setProcedureOr($this->getProcedureOr());
        $copyObj->setOpRoom($this->getOpRoom());
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
     * @return \CareMd\CareMd\CareOpMedDoc Clone of current object.
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
        $this->op_date = null;
        $this->operator = null;
        $this->encounter_nr = null;
        $this->dept_nr = null;
        $this->diagnosis = null;
        $this->localize = null;
        $this->therapy = null;
        $this->special = null;
        $this->class_s = null;
        $this->class_l = null;
        $this->op_start = null;
        $this->op_end = null;
        $this->anasthetist = null;
        $this->scrub_nurse = null;
        $this->assistant = null;
        $this->anaesthesia_type = null;
        $this->postorder = null;
        $this->indication = null;
        $this->procedure_or = null;
        $this->op_room = null;
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
        return (string) $this->exportTo(CareOpMedDocTableMap::DEFAULT_STRING_FORMAT);
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
