<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareDepartmentQuery as ChildCareDepartmentQuery;
use CareMd\CareMd\Map\CareDepartmentTableMap;
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
 * Base class that represents a row from the 'care_department' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareDepartment implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareDepartmentTableMap';


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
     * The value for the id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $id;

    /**
     * The value for the type field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $type;

    /**
     * The value for the name_formal field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $name_formal;

    /**
     * The value for the name_short field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $name_short;

    /**
     * The value for the name_alternate field.
     *
     * @var        string
     */
    protected $name_alternate;

    /**
     * The value for the ld_var field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ld_var;

    /**
     * The value for the description field.
     *
     * @var        string
     */
    protected $description;

    /**
     * The value for the admit_inpatient field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $admit_inpatient;

    /**
     * The value for the admit_outpatient field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $admit_outpatient;

    /**
     * The value for the has_oncall_doc field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $has_oncall_doc;

    /**
     * The value for the has_oncall_nurse field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $has_oncall_nurse;

    /**
     * The value for the does_surgery field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $does_surgery;

    /**
     * The value for the this_institution field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $this_institution;

    /**
     * The value for the is_sub_dept field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_sub_dept;

    /**
     * The value for the parent_dept_nr field.
     *
     * @var        int
     */
    protected $parent_dept_nr;

    /**
     * The value for the work_hours field.
     *
     * @var        string
     */
    protected $work_hours;

    /**
     * The value for the consult_hours field.
     *
     * @var        string
     */
    protected $consult_hours;

    /**
     * The value for the max_appointments field.
     *
     * Note: this column has a database default value of: 20
     * @var        int
     */
    protected $max_appointments;

    /**
     * The value for the is_inactive field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_inactive;

    /**
     * The value for the sort_order field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $sort_order;

    /**
     * The value for the address field.
     *
     * @var        string
     */
    protected $address;

    /**
     * The value for the sig_line field.
     *
     * @var        string
     */
    protected $sig_line;

    /**
     * The value for the sig_stamp field.
     *
     * @var        string
     */
    protected $sig_stamp;

    /**
     * The value for the logo_mime_type field.
     *
     * @var        string
     */
    protected $logo_mime_type;

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
        $this->id = '';
        $this->type = '';
        $this->name_formal = '';
        $this->name_short = '';
        $this->ld_var = '';
        $this->admit_inpatient = false;
        $this->admit_outpatient = false;
        $this->has_oncall_doc = true;
        $this->has_oncall_nurse = true;
        $this->does_surgery = false;
        $this->this_institution = true;
        $this->is_sub_dept = false;
        $this->max_appointments = 20;
        $this->is_inactive = false;
        $this->sort_order = 0;
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareDepartment object.
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
     * Compares this with another <code>CareDepartment</code> instance.  If
     * <code>obj</code> is an instance of <code>CareDepartment</code>, delegates to
     * <code>equals(CareDepartment)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareDepartment The current object, for fluid interface
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
     * Get the [id] column value.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
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
     * Get the [name_formal] column value.
     *
     * @return string
     */
    public function getNameFormal()
    {
        return $this->name_formal;
    }

    /**
     * Get the [name_short] column value.
     *
     * @return string
     */
    public function getNameShort()
    {
        return $this->name_short;
    }

    /**
     * Get the [name_alternate] column value.
     *
     * @return string
     */
    public function getNameAlternate()
    {
        return $this->name_alternate;
    }

    /**
     * Get the [ld_var] column value.
     *
     * @return string
     */
    public function getLdVar()
    {
        return $this->ld_var;
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
     * Get the [admit_inpatient] column value.
     *
     * @return boolean
     */
    public function getAdmitInpatient()
    {
        return $this->admit_inpatient;
    }

    /**
     * Get the [admit_inpatient] column value.
     *
     * @return boolean
     */
    public function isAdmitInpatient()
    {
        return $this->getAdmitInpatient();
    }

    /**
     * Get the [admit_outpatient] column value.
     *
     * @return boolean
     */
    public function getAdmitOutpatient()
    {
        return $this->admit_outpatient;
    }

    /**
     * Get the [admit_outpatient] column value.
     *
     * @return boolean
     */
    public function isAdmitOutpatient()
    {
        return $this->getAdmitOutpatient();
    }

    /**
     * Get the [has_oncall_doc] column value.
     *
     * @return boolean
     */
    public function getHasOncallDoc()
    {
        return $this->has_oncall_doc;
    }

    /**
     * Get the [has_oncall_doc] column value.
     *
     * @return boolean
     */
    public function hasOncallDoc()
    {
        return $this->getHasOncallDoc();
    }

    /**
     * Get the [has_oncall_nurse] column value.
     *
     * @return boolean
     */
    public function getHasOncallNurse()
    {
        return $this->has_oncall_nurse;
    }

    /**
     * Get the [has_oncall_nurse] column value.
     *
     * @return boolean
     */
    public function hasOncallNurse()
    {
        return $this->getHasOncallNurse();
    }

    /**
     * Get the [does_surgery] column value.
     *
     * @return boolean
     */
    public function getDoesSurgery()
    {
        return $this->does_surgery;
    }

    /**
     * Get the [does_surgery] column value.
     *
     * @return boolean
     */
    public function isDoesSurgery()
    {
        return $this->getDoesSurgery();
    }

    /**
     * Get the [this_institution] column value.
     *
     * @return boolean
     */
    public function getThisInstitution()
    {
        return $this->this_institution;
    }

    /**
     * Get the [this_institution] column value.
     *
     * @return boolean
     */
    public function isThisInstitution()
    {
        return $this->getThisInstitution();
    }

    /**
     * Get the [is_sub_dept] column value.
     *
     * @return boolean
     */
    public function getIsSubDept()
    {
        return $this->is_sub_dept;
    }

    /**
     * Get the [is_sub_dept] column value.
     *
     * @return boolean
     */
    public function isSubDept()
    {
        return $this->getIsSubDept();
    }

    /**
     * Get the [parent_dept_nr] column value.
     *
     * @return int
     */
    public function getParentDeptNr()
    {
        return $this->parent_dept_nr;
    }

    /**
     * Get the [work_hours] column value.
     *
     * @return string
     */
    public function getWorkHours()
    {
        return $this->work_hours;
    }

    /**
     * Get the [consult_hours] column value.
     *
     * @return string
     */
    public function getConsultHours()
    {
        return $this->consult_hours;
    }

    /**
     * Get the [max_appointments] column value.
     *
     * @return int
     */
    public function getMaxAppointments()
    {
        return $this->max_appointments;
    }

    /**
     * Get the [is_inactive] column value.
     *
     * @return boolean
     */
    public function getIsInactive()
    {
        return $this->is_inactive;
    }

    /**
     * Get the [is_inactive] column value.
     *
     * @return boolean
     */
    public function isInactive()
    {
        return $this->getIsInactive();
    }

    /**
     * Get the [sort_order] column value.
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * Get the [address] column value.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Get the [sig_line] column value.
     *
     * @return string
     */
    public function getSigLine()
    {
        return $this->sig_line;
    }

    /**
     * Get the [sig_stamp] column value.
     *
     * @return string
     */
    public function getSigStamp()
    {
        return $this->sig_stamp;
    }

    /**
     * Get the [logo_mime_type] column value.
     *
     * @return string
     */
    public function getLogoMimeType()
    {
        return $this->logo_mime_type;
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
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_TYPE] = true;
        }

        return $this;
    } // setType()

    /**
     * Set the value of [name_formal] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setNameFormal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_formal !== $v) {
            $this->name_formal = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_NAME_FORMAL] = true;
        }

        return $this;
    } // setNameFormal()

    /**
     * Set the value of [name_short] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setNameShort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_short !== $v) {
            $this->name_short = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_NAME_SHORT] = true;
        }

        return $this;
    } // setNameShort()

    /**
     * Set the value of [name_alternate] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setNameAlternate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_alternate !== $v) {
            $this->name_alternate = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_NAME_ALTERNATE] = true;
        }

        return $this;
    } // setNameAlternate()

    /**
     * Set the value of [ld_var] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setLdVar($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ld_var !== $v) {
            $this->ld_var = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_LD_VAR] = true;
        }

        return $this;
    } // setLdVar()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_DESCRIPTION] = true;
        }

        return $this;
    } // setDescription()

    /**
     * Sets the value of the [admit_inpatient] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setAdmitInpatient($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->admit_inpatient !== $v) {
            $this->admit_inpatient = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_ADMIT_INPATIENT] = true;
        }

        return $this;
    } // setAdmitInpatient()

    /**
     * Sets the value of the [admit_outpatient] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setAdmitOutpatient($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->admit_outpatient !== $v) {
            $this->admit_outpatient = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_ADMIT_OUTPATIENT] = true;
        }

        return $this;
    } // setAdmitOutpatient()

    /**
     * Sets the value of the [has_oncall_doc] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setHasOncallDoc($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->has_oncall_doc !== $v) {
            $this->has_oncall_doc = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_HAS_ONCALL_DOC] = true;
        }

        return $this;
    } // setHasOncallDoc()

    /**
     * Sets the value of the [has_oncall_nurse] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setHasOncallNurse($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->has_oncall_nurse !== $v) {
            $this->has_oncall_nurse = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_HAS_ONCALL_NURSE] = true;
        }

        return $this;
    } // setHasOncallNurse()

    /**
     * Sets the value of the [does_surgery] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setDoesSurgery($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->does_surgery !== $v) {
            $this->does_surgery = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_DOES_SURGERY] = true;
        }

        return $this;
    } // setDoesSurgery()

    /**
     * Sets the value of the [this_institution] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setThisInstitution($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->this_institution !== $v) {
            $this->this_institution = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_THIS_INSTITUTION] = true;
        }

        return $this;
    } // setThisInstitution()

    /**
     * Sets the value of the [is_sub_dept] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setIsSubDept($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_sub_dept !== $v) {
            $this->is_sub_dept = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_IS_SUB_DEPT] = true;
        }

        return $this;
    } // setIsSubDept()

    /**
     * Set the value of [parent_dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setParentDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->parent_dept_nr !== $v) {
            $this->parent_dept_nr = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_PARENT_DEPT_NR] = true;
        }

        return $this;
    } // setParentDeptNr()

    /**
     * Set the value of [work_hours] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setWorkHours($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->work_hours !== $v) {
            $this->work_hours = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_WORK_HOURS] = true;
        }

        return $this;
    } // setWorkHours()

    /**
     * Set the value of [consult_hours] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setConsultHours($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->consult_hours !== $v) {
            $this->consult_hours = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_CONSULT_HOURS] = true;
        }

        return $this;
    } // setConsultHours()

    /**
     * Set the value of [max_appointments] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setMaxAppointments($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->max_appointments !== $v) {
            $this->max_appointments = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_MAX_APPOINTMENTS] = true;
        }

        return $this;
    } // setMaxAppointments()

    /**
     * Sets the value of the [is_inactive] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setIsInactive($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_inactive !== $v) {
            $this->is_inactive = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_IS_INACTIVE] = true;
        }

        return $this;
    } // setIsInactive()

    /**
     * Set the value of [sort_order] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setSortOrder($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->sort_order !== $v) {
            $this->sort_order = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_SORT_ORDER] = true;
        }

        return $this;
    } // setSortOrder()

    /**
     * Set the value of [address] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_ADDRESS] = true;
        }

        return $this;
    } // setAddress()

    /**
     * Set the value of [sig_line] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setSigLine($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sig_line !== $v) {
            $this->sig_line = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_SIG_LINE] = true;
        }

        return $this;
    } // setSigLine()

    /**
     * Set the value of [sig_stamp] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setSigStamp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sig_stamp !== $v) {
            $this->sig_stamp = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_SIG_STAMP] = true;
        }

        return $this;
    } // setSigStamp()

    /**
     * Set the value of [logo_mime_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setLogoMimeType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->logo_mime_type !== $v) {
            $this->logo_mime_type = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_LOGO_MIME_TYPE] = true;
        }

        return $this;
    } // setLogoMimeType()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareDepartmentTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareDepartmentTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareDepartment The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareDepartmentTableMap::COL_CREATE_TIME] = true;
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
            if ($this->id !== '') {
                return false;
            }

            if ($this->type !== '') {
                return false;
            }

            if ($this->name_formal !== '') {
                return false;
            }

            if ($this->name_short !== '') {
                return false;
            }

            if ($this->ld_var !== '') {
                return false;
            }

            if ($this->admit_inpatient !== false) {
                return false;
            }

            if ($this->admit_outpatient !== false) {
                return false;
            }

            if ($this->has_oncall_doc !== true) {
                return false;
            }

            if ($this->has_oncall_nurse !== true) {
                return false;
            }

            if ($this->does_surgery !== false) {
                return false;
            }

            if ($this->this_institution !== true) {
                return false;
            }

            if ($this->is_sub_dept !== false) {
                return false;
            }

            if ($this->max_appointments !== 20) {
                return false;
            }

            if ($this->is_inactive !== false) {
                return false;
            }

            if ($this->sort_order !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareDepartmentTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareDepartmentTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareDepartmentTableMap::translateFieldName('Type', TableMap::TYPE_PHPNAME, $indexType)];
            $this->type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareDepartmentTableMap::translateFieldName('NameFormal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_formal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareDepartmentTableMap::translateFieldName('NameShort', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_short = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareDepartmentTableMap::translateFieldName('NameAlternate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_alternate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareDepartmentTableMap::translateFieldName('LdVar', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ld_var = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareDepartmentTableMap::translateFieldName('Description', TableMap::TYPE_PHPNAME, $indexType)];
            $this->description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareDepartmentTableMap::translateFieldName('AdmitInpatient', TableMap::TYPE_PHPNAME, $indexType)];
            $this->admit_inpatient = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareDepartmentTableMap::translateFieldName('AdmitOutpatient', TableMap::TYPE_PHPNAME, $indexType)];
            $this->admit_outpatient = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareDepartmentTableMap::translateFieldName('HasOncallDoc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->has_oncall_doc = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareDepartmentTableMap::translateFieldName('HasOncallNurse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->has_oncall_nurse = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareDepartmentTableMap::translateFieldName('DoesSurgery', TableMap::TYPE_PHPNAME, $indexType)];
            $this->does_surgery = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareDepartmentTableMap::translateFieldName('ThisInstitution', TableMap::TYPE_PHPNAME, $indexType)];
            $this->this_institution = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareDepartmentTableMap::translateFieldName('IsSubDept', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_sub_dept = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareDepartmentTableMap::translateFieldName('ParentDeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->parent_dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareDepartmentTableMap::translateFieldName('WorkHours', TableMap::TYPE_PHPNAME, $indexType)];
            $this->work_hours = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareDepartmentTableMap::translateFieldName('ConsultHours', TableMap::TYPE_PHPNAME, $indexType)];
            $this->consult_hours = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareDepartmentTableMap::translateFieldName('MaxAppointments', TableMap::TYPE_PHPNAME, $indexType)];
            $this->max_appointments = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareDepartmentTableMap::translateFieldName('IsInactive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_inactive = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareDepartmentTableMap::translateFieldName('SortOrder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sort_order = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareDepartmentTableMap::translateFieldName('Address', TableMap::TYPE_PHPNAME, $indexType)];
            $this->address = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareDepartmentTableMap::translateFieldName('SigLine', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sig_line = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareDepartmentTableMap::translateFieldName('SigStamp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sig_stamp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareDepartmentTableMap::translateFieldName('LogoMimeType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->logo_mime_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareDepartmentTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareDepartmentTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareDepartmentTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareDepartmentTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareDepartmentTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CareDepartmentTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 31; // 31 = CareDepartmentTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareDepartment'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareDepartmentTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareDepartmentQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareDepartment::setDeleted()
     * @see CareDepartment::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDepartmentTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareDepartmentQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDepartmentTableMap::DATABASE_NAME);
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
                CareDepartmentTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareDepartmentTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareDepartmentTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareDepartmentTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'type';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_NAME_FORMAL)) {
            $modifiedColumns[':p' . $index++]  = 'name_formal';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_NAME_SHORT)) {
            $modifiedColumns[':p' . $index++]  = 'name_short';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_NAME_ALTERNATE)) {
            $modifiedColumns[':p' . $index++]  = 'name_alternate';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_LD_VAR)) {
            $modifiedColumns[':p' . $index++]  = 'LD_var';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'description';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_ADMIT_INPATIENT)) {
            $modifiedColumns[':p' . $index++]  = 'admit_inpatient';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_ADMIT_OUTPATIENT)) {
            $modifiedColumns[':p' . $index++]  = 'admit_outpatient';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_HAS_ONCALL_DOC)) {
            $modifiedColumns[':p' . $index++]  = 'has_oncall_doc';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_HAS_ONCALL_NURSE)) {
            $modifiedColumns[':p' . $index++]  = 'has_oncall_nurse';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_DOES_SURGERY)) {
            $modifiedColumns[':p' . $index++]  = 'does_surgery';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_THIS_INSTITUTION)) {
            $modifiedColumns[':p' . $index++]  = 'this_institution';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_IS_SUB_DEPT)) {
            $modifiedColumns[':p' . $index++]  = 'is_sub_dept';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_PARENT_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'parent_dept_nr';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_WORK_HOURS)) {
            $modifiedColumns[':p' . $index++]  = 'work_hours';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_CONSULT_HOURS)) {
            $modifiedColumns[':p' . $index++]  = 'consult_hours';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_MAX_APPOINTMENTS)) {
            $modifiedColumns[':p' . $index++]  = 'max_appointments';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_IS_INACTIVE)) {
            $modifiedColumns[':p' . $index++]  = 'is_inactive';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_SORT_ORDER)) {
            $modifiedColumns[':p' . $index++]  = 'sort_order';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = 'address';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_SIG_LINE)) {
            $modifiedColumns[':p' . $index++]  = 'sig_line';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_SIG_STAMP)) {
            $modifiedColumns[':p' . $index++]  = 'sig_stamp';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_LOGO_MIME_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'logo_mime_type';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_department (%s) VALUES (%s)',
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
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_STR);
                        break;
                    case 'type':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case 'name_formal':
                        $stmt->bindValue($identifier, $this->name_formal, PDO::PARAM_STR);
                        break;
                    case 'name_short':
                        $stmt->bindValue($identifier, $this->name_short, PDO::PARAM_STR);
                        break;
                    case 'name_alternate':
                        $stmt->bindValue($identifier, $this->name_alternate, PDO::PARAM_STR);
                        break;
                    case 'LD_var':
                        $stmt->bindValue($identifier, $this->ld_var, PDO::PARAM_STR);
                        break;
                    case 'description':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case 'admit_inpatient':
                        $stmt->bindValue($identifier, (int) $this->admit_inpatient, PDO::PARAM_INT);
                        break;
                    case 'admit_outpatient':
                        $stmt->bindValue($identifier, (int) $this->admit_outpatient, PDO::PARAM_INT);
                        break;
                    case 'has_oncall_doc':
                        $stmt->bindValue($identifier, (int) $this->has_oncall_doc, PDO::PARAM_INT);
                        break;
                    case 'has_oncall_nurse':
                        $stmt->bindValue($identifier, (int) $this->has_oncall_nurse, PDO::PARAM_INT);
                        break;
                    case 'does_surgery':
                        $stmt->bindValue($identifier, (int) $this->does_surgery, PDO::PARAM_INT);
                        break;
                    case 'this_institution':
                        $stmt->bindValue($identifier, (int) $this->this_institution, PDO::PARAM_INT);
                        break;
                    case 'is_sub_dept':
                        $stmt->bindValue($identifier, (int) $this->is_sub_dept, PDO::PARAM_INT);
                        break;
                    case 'parent_dept_nr':
                        $stmt->bindValue($identifier, $this->parent_dept_nr, PDO::PARAM_INT);
                        break;
                    case 'work_hours':
                        $stmt->bindValue($identifier, $this->work_hours, PDO::PARAM_STR);
                        break;
                    case 'consult_hours':
                        $stmt->bindValue($identifier, $this->consult_hours, PDO::PARAM_STR);
                        break;
                    case 'max_appointments':
                        $stmt->bindValue($identifier, $this->max_appointments, PDO::PARAM_INT);
                        break;
                    case 'is_inactive':
                        $stmt->bindValue($identifier, (int) $this->is_inactive, PDO::PARAM_INT);
                        break;
                    case 'sort_order':
                        $stmt->bindValue($identifier, $this->sort_order, PDO::PARAM_INT);
                        break;
                    case 'address':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case 'sig_line':
                        $stmt->bindValue($identifier, $this->sig_line, PDO::PARAM_STR);
                        break;
                    case 'sig_stamp':
                        $stmt->bindValue($identifier, $this->sig_stamp, PDO::PARAM_STR);
                        break;
                    case 'logo_mime_type':
                        $stmt->bindValue($identifier, $this->logo_mime_type, PDO::PARAM_STR);
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
        $pos = CareDepartmentTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getId();
                break;
            case 2:
                return $this->getType();
                break;
            case 3:
                return $this->getNameFormal();
                break;
            case 4:
                return $this->getNameShort();
                break;
            case 5:
                return $this->getNameAlternate();
                break;
            case 6:
                return $this->getLdVar();
                break;
            case 7:
                return $this->getDescription();
                break;
            case 8:
                return $this->getAdmitInpatient();
                break;
            case 9:
                return $this->getAdmitOutpatient();
                break;
            case 10:
                return $this->getHasOncallDoc();
                break;
            case 11:
                return $this->getHasOncallNurse();
                break;
            case 12:
                return $this->getDoesSurgery();
                break;
            case 13:
                return $this->getThisInstitution();
                break;
            case 14:
                return $this->getIsSubDept();
                break;
            case 15:
                return $this->getParentDeptNr();
                break;
            case 16:
                return $this->getWorkHours();
                break;
            case 17:
                return $this->getConsultHours();
                break;
            case 18:
                return $this->getMaxAppointments();
                break;
            case 19:
                return $this->getIsInactive();
                break;
            case 20:
                return $this->getSortOrder();
                break;
            case 21:
                return $this->getAddress();
                break;
            case 22:
                return $this->getSigLine();
                break;
            case 23:
                return $this->getSigStamp();
                break;
            case 24:
                return $this->getLogoMimeType();
                break;
            case 25:
                return $this->getStatus();
                break;
            case 26:
                return $this->getHistory();
                break;
            case 27:
                return $this->getModifyId();
                break;
            case 28:
                return $this->getModifyTime();
                break;
            case 29:
                return $this->getCreateId();
                break;
            case 30:
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

        if (isset($alreadyDumpedObjects['CareDepartment'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareDepartment'][$this->hashCode()] = true;
        $keys = CareDepartmentTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getId(),
            $keys[2] => $this->getType(),
            $keys[3] => $this->getNameFormal(),
            $keys[4] => $this->getNameShort(),
            $keys[5] => $this->getNameAlternate(),
            $keys[6] => $this->getLdVar(),
            $keys[7] => $this->getDescription(),
            $keys[8] => $this->getAdmitInpatient(),
            $keys[9] => $this->getAdmitOutpatient(),
            $keys[10] => $this->getHasOncallDoc(),
            $keys[11] => $this->getHasOncallNurse(),
            $keys[12] => $this->getDoesSurgery(),
            $keys[13] => $this->getThisInstitution(),
            $keys[14] => $this->getIsSubDept(),
            $keys[15] => $this->getParentDeptNr(),
            $keys[16] => $this->getWorkHours(),
            $keys[17] => $this->getConsultHours(),
            $keys[18] => $this->getMaxAppointments(),
            $keys[19] => $this->getIsInactive(),
            $keys[20] => $this->getSortOrder(),
            $keys[21] => $this->getAddress(),
            $keys[22] => $this->getSigLine(),
            $keys[23] => $this->getSigStamp(),
            $keys[24] => $this->getLogoMimeType(),
            $keys[25] => $this->getStatus(),
            $keys[26] => $this->getHistory(),
            $keys[27] => $this->getModifyId(),
            $keys[28] => $this->getModifyTime(),
            $keys[29] => $this->getCreateId(),
            $keys[30] => $this->getCreateTime(),
        );
        if ($result[$keys[28]] instanceof \DateTimeInterface) {
            $result[$keys[28]] = $result[$keys[28]]->format('c');
        }

        if ($result[$keys[30]] instanceof \DateTimeInterface) {
            $result[$keys[30]] = $result[$keys[30]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareDepartment
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareDepartmentTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareDepartment
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNr($value);
                break;
            case 1:
                $this->setId($value);
                break;
            case 2:
                $this->setType($value);
                break;
            case 3:
                $this->setNameFormal($value);
                break;
            case 4:
                $this->setNameShort($value);
                break;
            case 5:
                $this->setNameAlternate($value);
                break;
            case 6:
                $this->setLdVar($value);
                break;
            case 7:
                $this->setDescription($value);
                break;
            case 8:
                $this->setAdmitInpatient($value);
                break;
            case 9:
                $this->setAdmitOutpatient($value);
                break;
            case 10:
                $this->setHasOncallDoc($value);
                break;
            case 11:
                $this->setHasOncallNurse($value);
                break;
            case 12:
                $this->setDoesSurgery($value);
                break;
            case 13:
                $this->setThisInstitution($value);
                break;
            case 14:
                $this->setIsSubDept($value);
                break;
            case 15:
                $this->setParentDeptNr($value);
                break;
            case 16:
                $this->setWorkHours($value);
                break;
            case 17:
                $this->setConsultHours($value);
                break;
            case 18:
                $this->setMaxAppointments($value);
                break;
            case 19:
                $this->setIsInactive($value);
                break;
            case 20:
                $this->setSortOrder($value);
                break;
            case 21:
                $this->setAddress($value);
                break;
            case 22:
                $this->setSigLine($value);
                break;
            case 23:
                $this->setSigStamp($value);
                break;
            case 24:
                $this->setLogoMimeType($value);
                break;
            case 25:
                $this->setStatus($value);
                break;
            case 26:
                $this->setHistory($value);
                break;
            case 27:
                $this->setModifyId($value);
                break;
            case 28:
                $this->setModifyTime($value);
                break;
            case 29:
                $this->setCreateId($value);
                break;
            case 30:
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
        $keys = CareDepartmentTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setId($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setType($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setNameFormal($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setNameShort($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setNameAlternate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setLdVar($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setDescription($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setAdmitInpatient($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setAdmitOutpatient($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setHasOncallDoc($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setHasOncallNurse($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setDoesSurgery($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setThisInstitution($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setIsSubDept($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setParentDeptNr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setWorkHours($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setConsultHours($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setMaxAppointments($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setIsInactive($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setSortOrder($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setAddress($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setSigLine($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setSigStamp($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setLogoMimeType($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setStatus($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setHistory($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setModifyId($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setModifyTime($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setCreateId($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setCreateTime($arr[$keys[30]]);
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
     * @return $this|\CareMd\CareMd\CareDepartment The current object, for fluid interface
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
        $criteria = new Criteria(CareDepartmentTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareDepartmentTableMap::COL_NR)) {
            $criteria->add(CareDepartmentTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_ID)) {
            $criteria->add(CareDepartmentTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_TYPE)) {
            $criteria->add(CareDepartmentTableMap::COL_TYPE, $this->type);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_NAME_FORMAL)) {
            $criteria->add(CareDepartmentTableMap::COL_NAME_FORMAL, $this->name_formal);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_NAME_SHORT)) {
            $criteria->add(CareDepartmentTableMap::COL_NAME_SHORT, $this->name_short);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_NAME_ALTERNATE)) {
            $criteria->add(CareDepartmentTableMap::COL_NAME_ALTERNATE, $this->name_alternate);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_LD_VAR)) {
            $criteria->add(CareDepartmentTableMap::COL_LD_VAR, $this->ld_var);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_DESCRIPTION)) {
            $criteria->add(CareDepartmentTableMap::COL_DESCRIPTION, $this->description);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_ADMIT_INPATIENT)) {
            $criteria->add(CareDepartmentTableMap::COL_ADMIT_INPATIENT, $this->admit_inpatient);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_ADMIT_OUTPATIENT)) {
            $criteria->add(CareDepartmentTableMap::COL_ADMIT_OUTPATIENT, $this->admit_outpatient);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_HAS_ONCALL_DOC)) {
            $criteria->add(CareDepartmentTableMap::COL_HAS_ONCALL_DOC, $this->has_oncall_doc);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_HAS_ONCALL_NURSE)) {
            $criteria->add(CareDepartmentTableMap::COL_HAS_ONCALL_NURSE, $this->has_oncall_nurse);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_DOES_SURGERY)) {
            $criteria->add(CareDepartmentTableMap::COL_DOES_SURGERY, $this->does_surgery);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_THIS_INSTITUTION)) {
            $criteria->add(CareDepartmentTableMap::COL_THIS_INSTITUTION, $this->this_institution);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_IS_SUB_DEPT)) {
            $criteria->add(CareDepartmentTableMap::COL_IS_SUB_DEPT, $this->is_sub_dept);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_PARENT_DEPT_NR)) {
            $criteria->add(CareDepartmentTableMap::COL_PARENT_DEPT_NR, $this->parent_dept_nr);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_WORK_HOURS)) {
            $criteria->add(CareDepartmentTableMap::COL_WORK_HOURS, $this->work_hours);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_CONSULT_HOURS)) {
            $criteria->add(CareDepartmentTableMap::COL_CONSULT_HOURS, $this->consult_hours);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_MAX_APPOINTMENTS)) {
            $criteria->add(CareDepartmentTableMap::COL_MAX_APPOINTMENTS, $this->max_appointments);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_IS_INACTIVE)) {
            $criteria->add(CareDepartmentTableMap::COL_IS_INACTIVE, $this->is_inactive);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_SORT_ORDER)) {
            $criteria->add(CareDepartmentTableMap::COL_SORT_ORDER, $this->sort_order);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_ADDRESS)) {
            $criteria->add(CareDepartmentTableMap::COL_ADDRESS, $this->address);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_SIG_LINE)) {
            $criteria->add(CareDepartmentTableMap::COL_SIG_LINE, $this->sig_line);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_SIG_STAMP)) {
            $criteria->add(CareDepartmentTableMap::COL_SIG_STAMP, $this->sig_stamp);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_LOGO_MIME_TYPE)) {
            $criteria->add(CareDepartmentTableMap::COL_LOGO_MIME_TYPE, $this->logo_mime_type);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_STATUS)) {
            $criteria->add(CareDepartmentTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_HISTORY)) {
            $criteria->add(CareDepartmentTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareDepartmentTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareDepartmentTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_CREATE_ID)) {
            $criteria->add(CareDepartmentTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareDepartmentTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareDepartmentTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareDepartmentQuery::create();
        $criteria->add(CareDepartmentTableMap::COL_NR, $this->nr);

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
     * @param      object $copyObj An object of \CareMd\CareMd\CareDepartment (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setId($this->getId());
        $copyObj->setType($this->getType());
        $copyObj->setNameFormal($this->getNameFormal());
        $copyObj->setNameShort($this->getNameShort());
        $copyObj->setNameAlternate($this->getNameAlternate());
        $copyObj->setLdVar($this->getLdVar());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setAdmitInpatient($this->getAdmitInpatient());
        $copyObj->setAdmitOutpatient($this->getAdmitOutpatient());
        $copyObj->setHasOncallDoc($this->getHasOncallDoc());
        $copyObj->setHasOncallNurse($this->getHasOncallNurse());
        $copyObj->setDoesSurgery($this->getDoesSurgery());
        $copyObj->setThisInstitution($this->getThisInstitution());
        $copyObj->setIsSubDept($this->getIsSubDept());
        $copyObj->setParentDeptNr($this->getParentDeptNr());
        $copyObj->setWorkHours($this->getWorkHours());
        $copyObj->setConsultHours($this->getConsultHours());
        $copyObj->setMaxAppointments($this->getMaxAppointments());
        $copyObj->setIsInactive($this->getIsInactive());
        $copyObj->setSortOrder($this->getSortOrder());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setSigLine($this->getSigLine());
        $copyObj->setSigStamp($this->getSigStamp());
        $copyObj->setLogoMimeType($this->getLogoMimeType());
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
     * @return \CareMd\CareMd\CareDepartment Clone of current object.
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
        $this->id = null;
        $this->type = null;
        $this->name_formal = null;
        $this->name_short = null;
        $this->name_alternate = null;
        $this->ld_var = null;
        $this->description = null;
        $this->admit_inpatient = null;
        $this->admit_outpatient = null;
        $this->has_oncall_doc = null;
        $this->has_oncall_nurse = null;
        $this->does_surgery = null;
        $this->this_institution = null;
        $this->is_sub_dept = null;
        $this->parent_dept_nr = null;
        $this->work_hours = null;
        $this->consult_hours = null;
        $this->max_appointments = null;
        $this->is_inactive = null;
        $this->sort_order = null;
        $this->address = null;
        $this->sig_line = null;
        $this->sig_stamp = null;
        $this->logo_mime_type = null;
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
        return (string) $this->exportTo(CareDepartmentTableMap::DEFAULT_STRING_FORMAT);
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
