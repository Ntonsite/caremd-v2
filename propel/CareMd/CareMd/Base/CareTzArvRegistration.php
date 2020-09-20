<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvRegistrationQuery as ChildCareTzArvRegistrationQuery;
use CareMd\CareMd\Map\CareTzArvRegistrationTableMap;
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
 * Base class that represents a row from the 'care_tz_arv_registration' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzArvRegistration implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzArvRegistrationTableMap';


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
     * The value for the care_tz_arv_registration_id field.
     *
     * @var        string
     */
    protected $care_tz_arv_registration_id;

    /**
     * The value for the care_tz_arv_lab_id field.
     *
     * @var        string
     */
    protected $care_tz_arv_lab_id;

    /**
     * The value for the care_tz_arv_functional_status_id field.
     *
     * @var        int
     */
    protected $care_tz_arv_functional_status_id;

    /**
     * The value for the care_tz_arv_exposure_id field.
     *
     * @var        int
     */
    protected $care_tz_arv_exposure_id;

    /**
     * The value for the pid field.
     *
     * @var        int
     */
    protected $pid;

    /**
     * The value for the ctc_id field.
     *
     * @var        string
     */
    protected $ctc_id;

    /**
     * The value for the tb_reg_no field.
     *
     * @var        string
     */
    protected $tb_reg_no;

    /**
     * The value for the hbc_number field.
     *
     * @var        string
     */
    protected $hbc_number;

    /**
     * The value for the ten_cell_leader field.
     *
     * @var        string
     */
    protected $ten_cell_leader;

    /**
     * The value for the head_of_household field.
     *
     * @var        string
     */
    protected $head_of_household;

    /**
     * The value for the head_of_household_contact field.
     *
     * @var        string
     */
    protected $head_of_household_contact;

    /**
     * The value for the date_first_hiv_test field.
     *
     * @var        DateTime
     */
    protected $date_first_hiv_test;

    /**
     * The value for the date_confirmed_hiv field.
     *
     * @var        DateTime
     */
    protected $date_confirmed_hiv;

    /**
     * The value for the date_eligible field.
     *
     * @var        DateTime
     */
    protected $date_eligible;

    /**
     * The value for the date_enrolled field.
     *
     * @var        DateTime
     */
    protected $date_enrolled;

    /**
     * The value for the date_ready field.
     *
     * @var        DateTime
     */
    protected $date_ready;

    /**
     * The value for the date_start_art field.
     *
     * @var        DateTime
     */
    protected $date_start_art;

    /**
     * The value for the age_start_art field.
     *
     * @var        int
     */
    protected $age_start_art;

    /**
     * The value for the status_clinical_stage field.
     *
     * @var        int
     */
    protected $status_clinical_stage;

    /**
     * The value for the status_weight field.
     *
     * @var        double
     */
    protected $status_weight;

    /**
     * The value for the status_height field.
     *
     * @var        double
     */
    protected $status_height;

    /**
     * The value for the create_id field.
     *
     * @var        string
     */
    protected $create_id;

    /**
     * The value for the create_time field.
     *
     * @var        string
     */
    protected $create_time;

    /**
     * The value for the modify_id field.
     *
     * @var        string
     */
    protected $modify_id;

    /**
     * The value for the modify_time field.
     *
     * @var        DateTime
     */
    protected $modify_time;

    /**
     * The value for the history field.
     *
     * @var        string
     */
    protected $history;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTzArvRegistration object.
     */
    public function __construct()
    {
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
     * Compares this with another <code>CareTzArvRegistration</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzArvRegistration</code>, delegates to
     * <code>equals(CareTzArvRegistration)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzArvRegistration The current object, for fluid interface
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
     * Get the [care_tz_arv_registration_id] column value.
     *
     * @return string
     */
    public function getCareTzArvRegistrationId()
    {
        return $this->care_tz_arv_registration_id;
    }

    /**
     * Get the [care_tz_arv_lab_id] column value.
     *
     * @return string
     */
    public function getCareTzArvLabId()
    {
        return $this->care_tz_arv_lab_id;
    }

    /**
     * Get the [care_tz_arv_functional_status_id] column value.
     *
     * @return int
     */
    public function getCareTzArvFunctionalStatusId()
    {
        return $this->care_tz_arv_functional_status_id;
    }

    /**
     * Get the [care_tz_arv_exposure_id] column value.
     *
     * @return int
     */
    public function getCareTzArvExposureId()
    {
        return $this->care_tz_arv_exposure_id;
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
     * Get the [ctc_id] column value.
     *
     * @return string
     */
    public function getCtcId()
    {
        return $this->ctc_id;
    }

    /**
     * Get the [tb_reg_no] column value.
     *
     * @return string
     */
    public function getTbRegNo()
    {
        return $this->tb_reg_no;
    }

    /**
     * Get the [hbc_number] column value.
     *
     * @return string
     */
    public function getHbcNumber()
    {
        return $this->hbc_number;
    }

    /**
     * Get the [ten_cell_leader] column value.
     *
     * @return string
     */
    public function getTenCellLeader()
    {
        return $this->ten_cell_leader;
    }

    /**
     * Get the [head_of_household] column value.
     *
     * @return string
     */
    public function getHeadOfHousehold()
    {
        return $this->head_of_household;
    }

    /**
     * Get the [head_of_household_contact] column value.
     *
     * @return string
     */
    public function getHeadOfHouseholdContact()
    {
        return $this->head_of_household_contact;
    }

    /**
     * Get the [optionally formatted] temporal [date_first_hiv_test] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateFirstHivTest($format = NULL)
    {
        if ($format === null) {
            return $this->date_first_hiv_test;
        } else {
            return $this->date_first_hiv_test instanceof \DateTimeInterface ? $this->date_first_hiv_test->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [date_confirmed_hiv] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateConfirmedHiv($format = NULL)
    {
        if ($format === null) {
            return $this->date_confirmed_hiv;
        } else {
            return $this->date_confirmed_hiv instanceof \DateTimeInterface ? $this->date_confirmed_hiv->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [date_eligible] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEligible($format = NULL)
    {
        if ($format === null) {
            return $this->date_eligible;
        } else {
            return $this->date_eligible instanceof \DateTimeInterface ? $this->date_eligible->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [date_enrolled] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEnrolled($format = NULL)
    {
        if ($format === null) {
            return $this->date_enrolled;
        } else {
            return $this->date_enrolled instanceof \DateTimeInterface ? $this->date_enrolled->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [date_ready] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateReady($format = NULL)
    {
        if ($format === null) {
            return $this->date_ready;
        } else {
            return $this->date_ready instanceof \DateTimeInterface ? $this->date_ready->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [date_start_art] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateStartArt($format = NULL)
    {
        if ($format === null) {
            return $this->date_start_art;
        } else {
            return $this->date_start_art instanceof \DateTimeInterface ? $this->date_start_art->format($format) : null;
        }
    }

    /**
     * Get the [age_start_art] column value.
     *
     * @return int
     */
    public function getAgeStartArt()
    {
        return $this->age_start_art;
    }

    /**
     * Get the [status_clinical_stage] column value.
     *
     * @return int
     */
    public function getStatusClinicalStage()
    {
        return $this->status_clinical_stage;
    }

    /**
     * Get the [status_weight] column value.
     *
     * @return double
     */
    public function getStatusWeight()
    {
        return $this->status_weight;
    }

    /**
     * Get the [status_height] column value.
     *
     * @return double
     */
    public function getStatusHeight()
    {
        return $this->status_height;
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
     * Get the [create_time] column value.
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
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
     * Get the [history] column value.
     *
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Set the value of [care_tz_arv_registration_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setCareTzArvRegistrationId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->care_tz_arv_registration_id !== $v) {
            $this->care_tz_arv_registration_id = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID] = true;
        }

        return $this;
    } // setCareTzArvRegistrationId()

    /**
     * Set the value of [care_tz_arv_lab_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setCareTzArvLabId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->care_tz_arv_lab_id !== $v) {
            $this->care_tz_arv_lab_id = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_LAB_ID] = true;
        }

        return $this;
    } // setCareTzArvLabId()

    /**
     * Set the value of [care_tz_arv_functional_status_id] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setCareTzArvFunctionalStatusId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->care_tz_arv_functional_status_id !== $v) {
            $this->care_tz_arv_functional_status_id = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID] = true;
        }

        return $this;
    } // setCareTzArvFunctionalStatusId()

    /**
     * Set the value of [care_tz_arv_exposure_id] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setCareTzArvExposureId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->care_tz_arv_exposure_id !== $v) {
            $this->care_tz_arv_exposure_id = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_EXPOSURE_ID] = true;
        }

        return $this;
    } // setCareTzArvExposureId()

    /**
     * Set the value of [pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_PID] = true;
        }

        return $this;
    } // setPid()

    /**
     * Set the value of [ctc_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setCtcId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ctc_id !== $v) {
            $this->ctc_id = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_CTC_ID] = true;
        }

        return $this;
    } // setCtcId()

    /**
     * Set the value of [tb_reg_no] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setTbRegNo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tb_reg_no !== $v) {
            $this->tb_reg_no = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_TB_REG_NO] = true;
        }

        return $this;
    } // setTbRegNo()

    /**
     * Set the value of [hbc_number] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setHbcNumber($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hbc_number !== $v) {
            $this->hbc_number = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_HBC_NUMBER] = true;
        }

        return $this;
    } // setHbcNumber()

    /**
     * Set the value of [ten_cell_leader] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setTenCellLeader($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ten_cell_leader !== $v) {
            $this->ten_cell_leader = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_TEN_CELL_LEADER] = true;
        }

        return $this;
    } // setTenCellLeader()

    /**
     * Set the value of [head_of_household] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setHeadOfHousehold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->head_of_household !== $v) {
            $this->head_of_household = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD] = true;
        }

        return $this;
    } // setHeadOfHousehold()

    /**
     * Set the value of [head_of_household_contact] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setHeadOfHouseholdContact($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->head_of_household_contact !== $v) {
            $this->head_of_household_contact = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD_CONTACT] = true;
        }

        return $this;
    } // setHeadOfHouseholdContact()

    /**
     * Sets the value of [date_first_hiv_test] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setDateFirstHivTest($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_first_hiv_test !== null || $dt !== null) {
            if ($this->date_first_hiv_test === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_first_hiv_test->format("Y-m-d H:i:s.u")) {
                $this->date_first_hiv_test = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_DATE_FIRST_HIV_TEST] = true;
            }
        } // if either are not null

        return $this;
    } // setDateFirstHivTest()

    /**
     * Sets the value of [date_confirmed_hiv] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setDateConfirmedHiv($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_confirmed_hiv !== null || $dt !== null) {
            if ($this->date_confirmed_hiv === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_confirmed_hiv->format("Y-m-d H:i:s.u")) {
                $this->date_confirmed_hiv = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_DATE_CONFIRMED_HIV] = true;
            }
        } // if either are not null

        return $this;
    } // setDateConfirmedHiv()

    /**
     * Sets the value of [date_eligible] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setDateEligible($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_eligible !== null || $dt !== null) {
            if ($this->date_eligible === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_eligible->format("Y-m-d H:i:s.u")) {
                $this->date_eligible = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_DATE_ELIGIBLE] = true;
            }
        } // if either are not null

        return $this;
    } // setDateEligible()

    /**
     * Sets the value of [date_enrolled] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setDateEnrolled($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_enrolled !== null || $dt !== null) {
            if ($this->date_enrolled === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_enrolled->format("Y-m-d H:i:s.u")) {
                $this->date_enrolled = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_DATE_ENROLLED] = true;
            }
        } // if either are not null

        return $this;
    } // setDateEnrolled()

    /**
     * Sets the value of [date_ready] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setDateReady($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_ready !== null || $dt !== null) {
            if ($this->date_ready === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_ready->format("Y-m-d H:i:s.u")) {
                $this->date_ready = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_DATE_READY] = true;
            }
        } // if either are not null

        return $this;
    } // setDateReady()

    /**
     * Sets the value of [date_start_art] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setDateStartArt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_start_art !== null || $dt !== null) {
            if ($this->date_start_art === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_start_art->format("Y-m-d H:i:s.u")) {
                $this->date_start_art = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_DATE_START_ART] = true;
            }
        } // if either are not null

        return $this;
    } // setDateStartArt()

    /**
     * Set the value of [age_start_art] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setAgeStartArt($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->age_start_art !== $v) {
            $this->age_start_art = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_AGE_START_ART] = true;
        }

        return $this;
    } // setAgeStartArt()

    /**
     * Set the value of [status_clinical_stage] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setStatusClinicalStage($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->status_clinical_stage !== $v) {
            $this->status_clinical_stage = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_STATUS_CLINICAL_STAGE] = true;
        }

        return $this;
    } // setStatusClinicalStage()

    /**
     * Set the value of [status_weight] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setStatusWeight($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->status_weight !== $v) {
            $this->status_weight = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_STATUS_WEIGHT] = true;
        }

        return $this;
    } // setStatusWeight()

    /**
     * Set the value of [status_height] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setStatusHeight($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->status_height !== $v) {
            $this->status_height = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_STATUS_HEIGHT] = true;
        }

        return $this;
    } // setStatusHeight()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Set the value of [create_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_time !== $v) {
            $this->create_time = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_CREATE_TIME] = true;
        }

        return $this;
    } // setCreateTime()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_registration_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('CareTzArvLabId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_lab_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('CareTzArvFunctionalStatusId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_functional_status_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('CareTzArvExposureId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_exposure_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('CtcId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ctc_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('TbRegNo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->tb_reg_no = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('HbcNumber', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hbc_number = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('TenCellLeader', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ten_cell_leader = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('HeadOfHousehold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->head_of_household = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('HeadOfHouseholdContact', TableMap::TYPE_PHPNAME, $indexType)];
            $this->head_of_household_contact = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('DateFirstHivTest', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_first_hiv_test = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('DateConfirmedHiv', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_confirmed_hiv = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('DateEligible', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_eligible = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('DateEnrolled', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_enrolled = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('DateReady', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_ready = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('DateStartArt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_start_art = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('AgeStartArt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->age_start_art = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('StatusClinicalStage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status_clinical_stage = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('StatusWeight', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status_weight = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('StatusHeight', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status_height = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareTzArvRegistrationTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 26; // 26 = CareTzArvRegistrationTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzArvRegistration'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvRegistrationTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzArvRegistrationQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzArvRegistration::setDeleted()
     * @see CareTzArvRegistration::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegistrationTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzArvRegistrationQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRegistrationTableMap::DATABASE_NAME);
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
                CareTzArvRegistrationTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID] = true;
        if (null !== $this->care_tz_arv_registration_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_registration_id';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_LAB_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_lab_id';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_functional_status_id';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_EXPOSURE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_exposure_id';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_PID)) {
            $modifiedColumns[':p' . $index++]  = 'pid';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CTC_ID)) {
            $modifiedColumns[':p' . $index++]  = 'ctc_id';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_TB_REG_NO)) {
            $modifiedColumns[':p' . $index++]  = 'tb_reg_no';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_HBC_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'hbc_number';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_TEN_CELL_LEADER)) {
            $modifiedColumns[':p' . $index++]  = 'ten_cell_leader';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'head_of_household';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD_CONTACT)) {
            $modifiedColumns[':p' . $index++]  = 'head_of_household_contact';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_FIRST_HIV_TEST)) {
            $modifiedColumns[':p' . $index++]  = 'date_first_hiv_test';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_CONFIRMED_HIV)) {
            $modifiedColumns[':p' . $index++]  = 'date_confirmed_hiv';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_ELIGIBLE)) {
            $modifiedColumns[':p' . $index++]  = 'date_eligible';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_ENROLLED)) {
            $modifiedColumns[':p' . $index++]  = 'date_enrolled';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_READY)) {
            $modifiedColumns[':p' . $index++]  = 'date_ready';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_START_ART)) {
            $modifiedColumns[':p' . $index++]  = 'date_start_art';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_AGE_START_ART)) {
            $modifiedColumns[':p' . $index++]  = 'age_start_art';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_STATUS_CLINICAL_STAGE)) {
            $modifiedColumns[':p' . $index++]  = 'status_clinical_stage';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_STATUS_WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'status_weight';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_STATUS_HEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'status_height';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_arv_registration (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'care_tz_arv_registration_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_registration_id, PDO::PARAM_INT);
                        break;
                    case 'care_tz_arv_lab_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_lab_id, PDO::PARAM_INT);
                        break;
                    case 'care_tz_arv_functional_status_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_functional_status_id, PDO::PARAM_INT);
                        break;
                    case 'care_tz_arv_exposure_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_exposure_id, PDO::PARAM_INT);
                        break;
                    case 'pid':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_INT);
                        break;
                    case 'ctc_id':
                        $stmt->bindValue($identifier, $this->ctc_id, PDO::PARAM_STR);
                        break;
                    case 'tb_reg_no':
                        $stmt->bindValue($identifier, $this->tb_reg_no, PDO::PARAM_STR);
                        break;
                    case 'hbc_number':
                        $stmt->bindValue($identifier, $this->hbc_number, PDO::PARAM_STR);
                        break;
                    case 'ten_cell_leader':
                        $stmt->bindValue($identifier, $this->ten_cell_leader, PDO::PARAM_STR);
                        break;
                    case 'head_of_household':
                        $stmt->bindValue($identifier, $this->head_of_household, PDO::PARAM_STR);
                        break;
                    case 'head_of_household_contact':
                        $stmt->bindValue($identifier, $this->head_of_household_contact, PDO::PARAM_STR);
                        break;
                    case 'date_first_hiv_test':
                        $stmt->bindValue($identifier, $this->date_first_hiv_test ? $this->date_first_hiv_test->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'date_confirmed_hiv':
                        $stmt->bindValue($identifier, $this->date_confirmed_hiv ? $this->date_confirmed_hiv->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'date_eligible':
                        $stmt->bindValue($identifier, $this->date_eligible ? $this->date_eligible->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'date_enrolled':
                        $stmt->bindValue($identifier, $this->date_enrolled ? $this->date_enrolled->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'date_ready':
                        $stmt->bindValue($identifier, $this->date_ready ? $this->date_ready->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'date_start_art':
                        $stmt->bindValue($identifier, $this->date_start_art ? $this->date_start_art->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'age_start_art':
                        $stmt->bindValue($identifier, $this->age_start_art, PDO::PARAM_INT);
                        break;
                    case 'status_clinical_stage':
                        $stmt->bindValue($identifier, $this->status_clinical_stage, PDO::PARAM_INT);
                        break;
                    case 'status_weight':
                        $stmt->bindValue($identifier, $this->status_weight, PDO::PARAM_STR);
                        break;
                    case 'status_height':
                        $stmt->bindValue($identifier, $this->status_height, PDO::PARAM_STR);
                        break;
                    case 'create_id':
                        $stmt->bindValue($identifier, $this->create_id, PDO::PARAM_STR);
                        break;
                    case 'create_time':
                        $stmt->bindValue($identifier, $this->create_time, PDO::PARAM_INT);
                        break;
                    case 'modify_id':
                        $stmt->bindValue($identifier, $this->modify_id, PDO::PARAM_STR);
                        break;
                    case 'modify_time':
                        $stmt->bindValue($identifier, $this->modify_time ? $this->modify_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'history':
                        $stmt->bindValue($identifier, $this->history, PDO::PARAM_STR);
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
        $this->setCareTzArvRegistrationId($pk);

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
        $pos = CareTzArvRegistrationTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getCareTzArvRegistrationId();
                break;
            case 1:
                return $this->getCareTzArvLabId();
                break;
            case 2:
                return $this->getCareTzArvFunctionalStatusId();
                break;
            case 3:
                return $this->getCareTzArvExposureId();
                break;
            case 4:
                return $this->getPid();
                break;
            case 5:
                return $this->getCtcId();
                break;
            case 6:
                return $this->getTbRegNo();
                break;
            case 7:
                return $this->getHbcNumber();
                break;
            case 8:
                return $this->getTenCellLeader();
                break;
            case 9:
                return $this->getHeadOfHousehold();
                break;
            case 10:
                return $this->getHeadOfHouseholdContact();
                break;
            case 11:
                return $this->getDateFirstHivTest();
                break;
            case 12:
                return $this->getDateConfirmedHiv();
                break;
            case 13:
                return $this->getDateEligible();
                break;
            case 14:
                return $this->getDateEnrolled();
                break;
            case 15:
                return $this->getDateReady();
                break;
            case 16:
                return $this->getDateStartArt();
                break;
            case 17:
                return $this->getAgeStartArt();
                break;
            case 18:
                return $this->getStatusClinicalStage();
                break;
            case 19:
                return $this->getStatusWeight();
                break;
            case 20:
                return $this->getStatusHeight();
                break;
            case 21:
                return $this->getCreateId();
                break;
            case 22:
                return $this->getCreateTime();
                break;
            case 23:
                return $this->getModifyId();
                break;
            case 24:
                return $this->getModifyTime();
                break;
            case 25:
                return $this->getHistory();
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

        if (isset($alreadyDumpedObjects['CareTzArvRegistration'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzArvRegistration'][$this->hashCode()] = true;
        $keys = CareTzArvRegistrationTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCareTzArvRegistrationId(),
            $keys[1] => $this->getCareTzArvLabId(),
            $keys[2] => $this->getCareTzArvFunctionalStatusId(),
            $keys[3] => $this->getCareTzArvExposureId(),
            $keys[4] => $this->getPid(),
            $keys[5] => $this->getCtcId(),
            $keys[6] => $this->getTbRegNo(),
            $keys[7] => $this->getHbcNumber(),
            $keys[8] => $this->getTenCellLeader(),
            $keys[9] => $this->getHeadOfHousehold(),
            $keys[10] => $this->getHeadOfHouseholdContact(),
            $keys[11] => $this->getDateFirstHivTest(),
            $keys[12] => $this->getDateConfirmedHiv(),
            $keys[13] => $this->getDateEligible(),
            $keys[14] => $this->getDateEnrolled(),
            $keys[15] => $this->getDateReady(),
            $keys[16] => $this->getDateStartArt(),
            $keys[17] => $this->getAgeStartArt(),
            $keys[18] => $this->getStatusClinicalStage(),
            $keys[19] => $this->getStatusWeight(),
            $keys[20] => $this->getStatusHeight(),
            $keys[21] => $this->getCreateId(),
            $keys[22] => $this->getCreateTime(),
            $keys[23] => $this->getModifyId(),
            $keys[24] => $this->getModifyTime(),
            $keys[25] => $this->getHistory(),
        );
        if ($result[$keys[11]] instanceof \DateTimeInterface) {
            $result[$keys[11]] = $result[$keys[11]]->format('c');
        }

        if ($result[$keys[12]] instanceof \DateTimeInterface) {
            $result[$keys[12]] = $result[$keys[12]]->format('c');
        }

        if ($result[$keys[13]] instanceof \DateTimeInterface) {
            $result[$keys[13]] = $result[$keys[13]]->format('c');
        }

        if ($result[$keys[14]] instanceof \DateTimeInterface) {
            $result[$keys[14]] = $result[$keys[14]]->format('c');
        }

        if ($result[$keys[15]] instanceof \DateTimeInterface) {
            $result[$keys[15]] = $result[$keys[15]]->format('c');
        }

        if ($result[$keys[16]] instanceof \DateTimeInterface) {
            $result[$keys[16]] = $result[$keys[16]]->format('c');
        }

        if ($result[$keys[24]] instanceof \DateTimeInterface) {
            $result[$keys[24]] = $result[$keys[24]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTzArvRegistration
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzArvRegistrationTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzArvRegistration
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setCareTzArvRegistrationId($value);
                break;
            case 1:
                $this->setCareTzArvLabId($value);
                break;
            case 2:
                $this->setCareTzArvFunctionalStatusId($value);
                break;
            case 3:
                $this->setCareTzArvExposureId($value);
                break;
            case 4:
                $this->setPid($value);
                break;
            case 5:
                $this->setCtcId($value);
                break;
            case 6:
                $this->setTbRegNo($value);
                break;
            case 7:
                $this->setHbcNumber($value);
                break;
            case 8:
                $this->setTenCellLeader($value);
                break;
            case 9:
                $this->setHeadOfHousehold($value);
                break;
            case 10:
                $this->setHeadOfHouseholdContact($value);
                break;
            case 11:
                $this->setDateFirstHivTest($value);
                break;
            case 12:
                $this->setDateConfirmedHiv($value);
                break;
            case 13:
                $this->setDateEligible($value);
                break;
            case 14:
                $this->setDateEnrolled($value);
                break;
            case 15:
                $this->setDateReady($value);
                break;
            case 16:
                $this->setDateStartArt($value);
                break;
            case 17:
                $this->setAgeStartArt($value);
                break;
            case 18:
                $this->setStatusClinicalStage($value);
                break;
            case 19:
                $this->setStatusWeight($value);
                break;
            case 20:
                $this->setStatusHeight($value);
                break;
            case 21:
                $this->setCreateId($value);
                break;
            case 22:
                $this->setCreateTime($value);
                break;
            case 23:
                $this->setModifyId($value);
                break;
            case 24:
                $this->setModifyTime($value);
                break;
            case 25:
                $this->setHistory($value);
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
        $keys = CareTzArvRegistrationTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setCareTzArvRegistrationId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setCareTzArvLabId($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCareTzArvFunctionalStatusId($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCareTzArvExposureId($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPid($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setCtcId($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setTbRegNo($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setHbcNumber($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setTenCellLeader($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setHeadOfHousehold($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setHeadOfHouseholdContact($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setDateFirstHivTest($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setDateConfirmedHiv($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setDateEligible($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setDateEnrolled($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setDateReady($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setDateStartArt($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setAgeStartArt($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setStatusClinicalStage($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setStatusWeight($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setStatusHeight($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setCreateId($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setCreateTime($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setModifyId($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setModifyTime($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setHistory($arr[$keys[25]]);
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
     * @return $this|\CareMd\CareMd\CareTzArvRegistration The current object, for fluid interface
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
        $criteria = new Criteria(CareTzArvRegistrationTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $this->care_tz_arv_registration_id);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_LAB_ID)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_LAB_ID, $this->care_tz_arv_lab_id);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $this->care_tz_arv_functional_status_id);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_EXPOSURE_ID)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_EXPOSURE_ID, $this->care_tz_arv_exposure_id);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_PID)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_PID, $this->pid);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CTC_ID)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_CTC_ID, $this->ctc_id);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_TB_REG_NO)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_TB_REG_NO, $this->tb_reg_no);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_HBC_NUMBER)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_HBC_NUMBER, $this->hbc_number);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_TEN_CELL_LEADER)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_TEN_CELL_LEADER, $this->ten_cell_leader);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD, $this->head_of_household);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD_CONTACT)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_HEAD_OF_HOUSEHOLD_CONTACT, $this->head_of_household_contact);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_FIRST_HIV_TEST)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_DATE_FIRST_HIV_TEST, $this->date_first_hiv_test);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_CONFIRMED_HIV)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_DATE_CONFIRMED_HIV, $this->date_confirmed_hiv);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_ELIGIBLE)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_DATE_ELIGIBLE, $this->date_eligible);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_ENROLLED)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_DATE_ENROLLED, $this->date_enrolled);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_READY)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_DATE_READY, $this->date_ready);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_DATE_START_ART)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_DATE_START_ART, $this->date_start_art);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_AGE_START_ART)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_AGE_START_ART, $this->age_start_art);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_STATUS_CLINICAL_STAGE)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_STATUS_CLINICAL_STAGE, $this->status_clinical_stage);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_STATUS_WEIGHT)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_STATUS_WEIGHT, $this->status_weight);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_STATUS_HEIGHT)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_STATUS_HEIGHT, $this->status_height);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareTzArvRegistrationTableMap::COL_HISTORY)) {
            $criteria->add(CareTzArvRegistrationTableMap::COL_HISTORY, $this->history);
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
        $criteria = ChildCareTzArvRegistrationQuery::create();
        $criteria->add(CareTzArvRegistrationTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $this->care_tz_arv_registration_id);

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
        $validPk = null !== $this->getCareTzArvRegistrationId();

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
        return $this->getCareTzArvRegistrationId();
    }

    /**
     * Generic method to set the primary key (care_tz_arv_registration_id column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCareTzArvRegistrationId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getCareTzArvRegistrationId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzArvRegistration (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCareTzArvLabId($this->getCareTzArvLabId());
        $copyObj->setCareTzArvFunctionalStatusId($this->getCareTzArvFunctionalStatusId());
        $copyObj->setCareTzArvExposureId($this->getCareTzArvExposureId());
        $copyObj->setPid($this->getPid());
        $copyObj->setCtcId($this->getCtcId());
        $copyObj->setTbRegNo($this->getTbRegNo());
        $copyObj->setHbcNumber($this->getHbcNumber());
        $copyObj->setTenCellLeader($this->getTenCellLeader());
        $copyObj->setHeadOfHousehold($this->getHeadOfHousehold());
        $copyObj->setHeadOfHouseholdContact($this->getHeadOfHouseholdContact());
        $copyObj->setDateFirstHivTest($this->getDateFirstHivTest());
        $copyObj->setDateConfirmedHiv($this->getDateConfirmedHiv());
        $copyObj->setDateEligible($this->getDateEligible());
        $copyObj->setDateEnrolled($this->getDateEnrolled());
        $copyObj->setDateReady($this->getDateReady());
        $copyObj->setDateStartArt($this->getDateStartArt());
        $copyObj->setAgeStartArt($this->getAgeStartArt());
        $copyObj->setStatusClinicalStage($this->getStatusClinicalStage());
        $copyObj->setStatusWeight($this->getStatusWeight());
        $copyObj->setStatusHeight($this->getStatusHeight());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setHistory($this->getHistory());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCareTzArvRegistrationId(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareTzArvRegistration Clone of current object.
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
        $this->care_tz_arv_registration_id = null;
        $this->care_tz_arv_lab_id = null;
        $this->care_tz_arv_functional_status_id = null;
        $this->care_tz_arv_exposure_id = null;
        $this->pid = null;
        $this->ctc_id = null;
        $this->tb_reg_no = null;
        $this->hbc_number = null;
        $this->ten_cell_leader = null;
        $this->head_of_household = null;
        $this->head_of_household_contact = null;
        $this->date_first_hiv_test = null;
        $this->date_confirmed_hiv = null;
        $this->date_eligible = null;
        $this->date_enrolled = null;
        $this->date_ready = null;
        $this->date_start_art = null;
        $this->age_start_art = null;
        $this->status_clinical_stage = null;
        $this->status_weight = null;
        $this->status_height = null;
        $this->create_id = null;
        $this->create_time = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->history = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
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
        return (string) $this->exportTo(CareTzArvRegistrationTableMap::DEFAULT_STRING_FORMAT);
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
