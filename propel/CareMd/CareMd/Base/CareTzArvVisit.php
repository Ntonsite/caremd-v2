<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvVisitQuery as ChildCareTzArvVisitQuery;
use CareMd\CareMd\Map\CareTzArvVisitTableMap;
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
 * Base class that represents a row from the 'care_tz_arv_visit' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzArvVisit implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzArvVisitTableMap';


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
     * The value for the care_tz_arv_visit_2_id field.
     *
     * @var        string
     */
    protected $care_tz_arv_visit_2_id;

    /**
     * The value for the care_tz_arv_registration_id field.
     *
     * @var        string
     */
    protected $care_tz_arv_registration_id;

    /**
     * The value for the care_tz_arv_adher_code_id field.
     *
     * @var        string
     */
    protected $care_tz_arv_adher_code_id;

    /**
     * The value for the care_tz_arv_functional_status_id field.
     *
     * @var        int
     */
    protected $care_tz_arv_functional_status_id;

    /**
     * The value for the care_tz_arv_tb_status_id field.
     *
     * @var        string
     */
    protected $care_tz_arv_tb_status_id;

    /**
     * The value for the care_tz_arv_case_id field.
     *
     * @var        string
     */
    protected $care_tz_arv_case_id;

    /**
     * The value for the encounter_nr field.
     *
     * @var        string
     */
    protected $encounter_nr;

    /**
     * The value for the visit_date field.
     *
     * @var        DateTime
     */
    protected $visit_date;

    /**
     * The value for the care_tz_arv_status_id field.
     *
     * Note: this column has a database default value of: '-1'
     * @var        string
     */
    protected $care_tz_arv_status_id;

    /**
     * The value for the weight field.
     *
     * @var        double
     */
    protected $weight;

    /**
     * The value for the height field.
     *
     * @var        double
     */
    protected $height;

    /**
     * The value for the clinical_stage field.
     *
     * @var        int
     */
    protected $clinical_stage;

    /**
     * The value for the pregnant field.
     *
     * @var        boolean
     */
    protected $pregnant;

    /**
     * The value for the date_of_delivery field.
     *
     * @var        DateTime
     */
    protected $date_of_delivery;

    /**
     * The value for the test_tb field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $test_tb;

    /**
     * The value for the cotrim field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $cotrim;

    /**
     * The value for the test_inh field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $test_inh;

    /**
     * The value for the diflucan field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $diflucan;

    /**
     * The value for the nutrition_support field.
     *
     * @var        boolean
     */
    protected $nutrition_support;

    /**
     * The value for the next_visit_date field.
     *
     * @var        DateTime
     */
    protected $next_visit_date;

    /**
     * The value for the other_problems field.
     *
     * @var        string
     */
    protected $other_problems;

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
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->care_tz_arv_status_id = '-1';
        $this->test_tb = true;
        $this->cotrim = true;
        $this->test_inh = true;
        $this->diflucan = true;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTzArvVisit object.
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
     * Compares this with another <code>CareTzArvVisit</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzArvVisit</code>, delegates to
     * <code>equals(CareTzArvVisit)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzArvVisit The current object, for fluid interface
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
     * Get the [care_tz_arv_visit_2_id] column value.
     *
     * @return string
     */
    public function getCareTzArvVisit2Id()
    {
        return $this->care_tz_arv_visit_2_id;
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
     * Get the [care_tz_arv_adher_code_id] column value.
     *
     * @return string
     */
    public function getCareTzArvAdherCodeId()
    {
        return $this->care_tz_arv_adher_code_id;
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
     * Get the [care_tz_arv_tb_status_id] column value.
     *
     * @return string
     */
    public function getCareTzArvTbStatusId()
    {
        return $this->care_tz_arv_tb_status_id;
    }

    /**
     * Get the [care_tz_arv_case_id] column value.
     *
     * @return string
     */
    public function getCareTzArvCaseId()
    {
        return $this->care_tz_arv_case_id;
    }

    /**
     * Get the [encounter_nr] column value.
     *
     * @return string
     */
    public function getEncounterNr()
    {
        return $this->encounter_nr;
    }

    /**
     * Get the [optionally formatted] temporal [visit_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVisitDate($format = NULL)
    {
        if ($format === null) {
            return $this->visit_date;
        } else {
            return $this->visit_date instanceof \DateTimeInterface ? $this->visit_date->format($format) : null;
        }
    }

    /**
     * Get the [care_tz_arv_status_id] column value.
     *
     * @return string
     */
    public function getCareTzArvStatusId()
    {
        return $this->care_tz_arv_status_id;
    }

    /**
     * Get the [weight] column value.
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Get the [height] column value.
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Get the [clinical_stage] column value.
     *
     * @return int
     */
    public function getClinicalStage()
    {
        return $this->clinical_stage;
    }

    /**
     * Get the [pregnant] column value.
     *
     * @return boolean
     */
    public function getPregnant()
    {
        return $this->pregnant;
    }

    /**
     * Get the [pregnant] column value.
     *
     * @return boolean
     */
    public function isPregnant()
    {
        return $this->getPregnant();
    }

    /**
     * Get the [optionally formatted] temporal [date_of_delivery] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateOfDelivery($format = NULL)
    {
        if ($format === null) {
            return $this->date_of_delivery;
        } else {
            return $this->date_of_delivery instanceof \DateTimeInterface ? $this->date_of_delivery->format($format) : null;
        }
    }

    /**
     * Get the [test_tb] column value.
     *
     * @return boolean
     */
    public function getTestTb()
    {
        return $this->test_tb;
    }

    /**
     * Get the [test_tb] column value.
     *
     * @return boolean
     */
    public function isTestTb()
    {
        return $this->getTestTb();
    }

    /**
     * Get the [cotrim] column value.
     *
     * @return boolean
     */
    public function getCotrim()
    {
        return $this->cotrim;
    }

    /**
     * Get the [cotrim] column value.
     *
     * @return boolean
     */
    public function isCotrim()
    {
        return $this->getCotrim();
    }

    /**
     * Get the [test_inh] column value.
     *
     * @return boolean
     */
    public function getTestInh()
    {
        return $this->test_inh;
    }

    /**
     * Get the [test_inh] column value.
     *
     * @return boolean
     */
    public function isTestInh()
    {
        return $this->getTestInh();
    }

    /**
     * Get the [diflucan] column value.
     *
     * @return boolean
     */
    public function getDiflucan()
    {
        return $this->diflucan;
    }

    /**
     * Get the [diflucan] column value.
     *
     * @return boolean
     */
    public function isDiflucan()
    {
        return $this->getDiflucan();
    }

    /**
     * Get the [nutrition_support] column value.
     *
     * @return boolean
     */
    public function getNutritionSupport()
    {
        return $this->nutrition_support;
    }

    /**
     * Get the [nutrition_support] column value.
     *
     * @return boolean
     */
    public function isNutritionSupport()
    {
        return $this->getNutritionSupport();
    }

    /**
     * Get the [optionally formatted] temporal [next_visit_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getNextVisitDate($format = NULL)
    {
        if ($format === null) {
            return $this->next_visit_date;
        } else {
            return $this->next_visit_date instanceof \DateTimeInterface ? $this->next_visit_date->format($format) : null;
        }
    }

    /**
     * Get the [other_problems] column value.
     *
     * @return string
     */
    public function getOtherProblems()
    {
        return $this->other_problems;
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
     * Set the value of [care_tz_arv_visit_2_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setCareTzArvVisit2Id($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->care_tz_arv_visit_2_id !== $v) {
            $this->care_tz_arv_visit_2_id = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID] = true;
        }

        return $this;
    } // setCareTzArvVisit2Id()

    /**
     * Set the value of [care_tz_arv_registration_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setCareTzArvRegistrationId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->care_tz_arv_registration_id !== $v) {
            $this->care_tz_arv_registration_id = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID] = true;
        }

        return $this;
    } // setCareTzArvRegistrationId()

    /**
     * Set the value of [care_tz_arv_adher_code_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setCareTzArvAdherCodeId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->care_tz_arv_adher_code_id !== $v) {
            $this->care_tz_arv_adher_code_id = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID] = true;
        }

        return $this;
    } // setCareTzArvAdherCodeId()

    /**
     * Set the value of [care_tz_arv_functional_status_id] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setCareTzArvFunctionalStatusId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->care_tz_arv_functional_status_id !== $v) {
            $this->care_tz_arv_functional_status_id = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID] = true;
        }

        return $this;
    } // setCareTzArvFunctionalStatusId()

    /**
     * Set the value of [care_tz_arv_tb_status_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setCareTzArvTbStatusId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->care_tz_arv_tb_status_id !== $v) {
            $this->care_tz_arv_tb_status_id = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID] = true;
        }

        return $this;
    } // setCareTzArvTbStatusId()

    /**
     * Set the value of [care_tz_arv_case_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setCareTzArvCaseId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->care_tz_arv_case_id !== $v) {
            $this->care_tz_arv_case_id = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_CARE_TZ_ARV_CASE_ID] = true;
        }

        return $this;
    } // setCareTzArvCaseId()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Sets the value of [visit_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setVisitDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->visit_date !== null || $dt !== null) {
            if ($this->visit_date === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->visit_date->format("Y-m-d H:i:s.u")) {
                $this->visit_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvVisitTableMap::COL_VISIT_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setVisitDate()

    /**
     * Set the value of [care_tz_arv_status_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setCareTzArvStatusId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->care_tz_arv_status_id !== $v) {
            $this->care_tz_arv_status_id = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_CARE_TZ_ARV_STATUS_ID] = true;
        }

        return $this;
    } // setCareTzArvStatusId()

    /**
     * Set the value of [weight] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setWeight($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->weight !== $v) {
            $this->weight = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_WEIGHT] = true;
        }

        return $this;
    } // setWeight()

    /**
     * Set the value of [height] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setHeight($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->height !== $v) {
            $this->height = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_HEIGHT] = true;
        }

        return $this;
    } // setHeight()

    /**
     * Set the value of [clinical_stage] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setClinicalStage($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->clinical_stage !== $v) {
            $this->clinical_stage = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_CLINICAL_STAGE] = true;
        }

        return $this;
    } // setClinicalStage()

    /**
     * Sets the value of the [pregnant] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setPregnant($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->pregnant !== $v) {
            $this->pregnant = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_PREGNANT] = true;
        }

        return $this;
    } // setPregnant()

    /**
     * Sets the value of [date_of_delivery] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setDateOfDelivery($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_of_delivery !== null || $dt !== null) {
            if ($this->date_of_delivery === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_of_delivery->format("Y-m-d H:i:s.u")) {
                $this->date_of_delivery = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvVisitTableMap::COL_DATE_OF_DELIVERY] = true;
            }
        } // if either are not null

        return $this;
    } // setDateOfDelivery()

    /**
     * Sets the value of the [test_tb] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setTestTb($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->test_tb !== $v) {
            $this->test_tb = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_TEST_TB] = true;
        }

        return $this;
    } // setTestTb()

    /**
     * Sets the value of the [cotrim] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setCotrim($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->cotrim !== $v) {
            $this->cotrim = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_COTRIM] = true;
        }

        return $this;
    } // setCotrim()

    /**
     * Sets the value of the [test_inh] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setTestInh($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->test_inh !== $v) {
            $this->test_inh = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_TEST_INH] = true;
        }

        return $this;
    } // setTestInh()

    /**
     * Sets the value of the [diflucan] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setDiflucan($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->diflucan !== $v) {
            $this->diflucan = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_DIFLUCAN] = true;
        }

        return $this;
    } // setDiflucan()

    /**
     * Sets the value of the [nutrition_support] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setNutritionSupport($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->nutrition_support !== $v) {
            $this->nutrition_support = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_NUTRITION_SUPPORT] = true;
        }

        return $this;
    } // setNutritionSupport()

    /**
     * Sets the value of [next_visit_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setNextVisitDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->next_visit_date !== null || $dt !== null) {
            if ($this->next_visit_date === null || $dt === null || $dt->format("Y-m-d") !== $this->next_visit_date->format("Y-m-d")) {
                $this->next_visit_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvVisitTableMap::COL_NEXT_VISIT_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setNextVisitDate()

    /**
     * Set the value of [other_problems] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setOtherProblems($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->other_problems !== $v) {
            $this->other_problems = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_OTHER_PROBLEMS] = true;
        }

        return $this;
    } // setOtherProblems()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Set the value of [create_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_time !== $v) {
            $this->create_time = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_CREATE_TIME] = true;
        }

        return $this;
    } // setCreateTime()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvVisitTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTzArvVisitTableMap::COL_HISTORY] = true;
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
            if ($this->care_tz_arv_status_id !== '-1') {
                return false;
            }

            if ($this->test_tb !== true) {
                return false;
            }

            if ($this->cotrim !== true) {
                return false;
            }

            if ($this->test_inh !== true) {
                return false;
            }

            if ($this->diflucan !== true) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzArvVisitTableMap::translateFieldName('CareTzArvVisit2Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_visit_2_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzArvVisitTableMap::translateFieldName('CareTzArvRegistrationId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_registration_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzArvVisitTableMap::translateFieldName('CareTzArvAdherCodeId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_adher_code_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzArvVisitTableMap::translateFieldName('CareTzArvFunctionalStatusId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_functional_status_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzArvVisitTableMap::translateFieldName('CareTzArvTbStatusId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_tb_status_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzArvVisitTableMap::translateFieldName('CareTzArvCaseId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_case_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzArvVisitTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzArvVisitTableMap::translateFieldName('VisitDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->visit_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzArvVisitTableMap::translateFieldName('CareTzArvStatusId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_status_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzArvVisitTableMap::translateFieldName('Weight', TableMap::TYPE_PHPNAME, $indexType)];
            $this->weight = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTzArvVisitTableMap::translateFieldName('Height', TableMap::TYPE_PHPNAME, $indexType)];
            $this->height = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTzArvVisitTableMap::translateFieldName('ClinicalStage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->clinical_stage = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTzArvVisitTableMap::translateFieldName('Pregnant', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pregnant = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTzArvVisitTableMap::translateFieldName('DateOfDelivery', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_of_delivery = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTzArvVisitTableMap::translateFieldName('TestTb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->test_tb = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTzArvVisitTableMap::translateFieldName('Cotrim', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cotrim = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTzArvVisitTableMap::translateFieldName('TestInh', TableMap::TYPE_PHPNAME, $indexType)];
            $this->test_inh = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTzArvVisitTableMap::translateFieldName('Diflucan', TableMap::TYPE_PHPNAME, $indexType)];
            $this->diflucan = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTzArvVisitTableMap::translateFieldName('NutritionSupport', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nutrition_support = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTzArvVisitTableMap::translateFieldName('NextVisitDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->next_visit_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTzArvVisitTableMap::translateFieldName('OtherProblems', TableMap::TYPE_PHPNAME, $indexType)];
            $this->other_problems = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTzArvVisitTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTzArvVisitTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareTzArvVisitTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareTzArvVisitTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareTzArvVisitTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 26; // 26 = CareTzArvVisitTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzArvVisit'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvVisitTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzArvVisitQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzArvVisit::setDeleted()
     * @see CareTzArvVisit::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisitTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzArvVisitQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisitTableMap::DATABASE_NAME);
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
                CareTzArvVisitTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID] = true;
        if (null !== $this->care_tz_arv_visit_2_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_visit_2_id';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_registration_id';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_adher_code_id';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_functional_status_id';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_tb_status_id';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_CASE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_case_id';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_VISIT_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'visit_date';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_status_id';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'weight';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_HEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'height';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CLINICAL_STAGE)) {
            $modifiedColumns[':p' . $index++]  = 'clinical_stage';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_PREGNANT)) {
            $modifiedColumns[':p' . $index++]  = 'pregnant';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_DATE_OF_DELIVERY)) {
            $modifiedColumns[':p' . $index++]  = 'date_of_delivery';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_TEST_TB)) {
            $modifiedColumns[':p' . $index++]  = 'test_TB';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_COTRIM)) {
            $modifiedColumns[':p' . $index++]  = 'cotrim';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_TEST_INH)) {
            $modifiedColumns[':p' . $index++]  = 'test_INH';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_DIFLUCAN)) {
            $modifiedColumns[':p' . $index++]  = 'diflucan';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_NUTRITION_SUPPORT)) {
            $modifiedColumns[':p' . $index++]  = 'nutrition_support';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_NEXT_VISIT_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'next_visit_date';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_OTHER_PROBLEMS)) {
            $modifiedColumns[':p' . $index++]  = 'other_problems';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_arv_visit (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'care_tz_arv_visit_2_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_visit_2_id, PDO::PARAM_INT);
                        break;
                    case 'care_tz_arv_registration_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_registration_id, PDO::PARAM_INT);
                        break;
                    case 'care_tz_arv_adher_code_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_adher_code_id, PDO::PARAM_INT);
                        break;
                    case 'care_tz_arv_functional_status_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_functional_status_id, PDO::PARAM_INT);
                        break;
                    case 'care_tz_arv_tb_status_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_tb_status_id, PDO::PARAM_INT);
                        break;
                    case 'care_tz_arv_case_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_case_id, PDO::PARAM_INT);
                        break;
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'visit_date':
                        $stmt->bindValue($identifier, $this->visit_date ? $this->visit_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'care_tz_arv_status_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_status_id, PDO::PARAM_INT);
                        break;
                    case 'weight':
                        $stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
                        break;
                    case 'height':
                        $stmt->bindValue($identifier, $this->height, PDO::PARAM_STR);
                        break;
                    case 'clinical_stage':
                        $stmt->bindValue($identifier, $this->clinical_stage, PDO::PARAM_INT);
                        break;
                    case 'pregnant':
                        $stmt->bindValue($identifier, (int) $this->pregnant, PDO::PARAM_INT);
                        break;
                    case 'date_of_delivery':
                        $stmt->bindValue($identifier, $this->date_of_delivery ? $this->date_of_delivery->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'test_TB':
                        $stmt->bindValue($identifier, (int) $this->test_tb, PDO::PARAM_INT);
                        break;
                    case 'cotrim':
                        $stmt->bindValue($identifier, (int) $this->cotrim, PDO::PARAM_INT);
                        break;
                    case 'test_INH':
                        $stmt->bindValue($identifier, (int) $this->test_inh, PDO::PARAM_INT);
                        break;
                    case 'diflucan':
                        $stmt->bindValue($identifier, (int) $this->diflucan, PDO::PARAM_INT);
                        break;
                    case 'nutrition_support':
                        $stmt->bindValue($identifier, (int) $this->nutrition_support, PDO::PARAM_INT);
                        break;
                    case 'next_visit_date':
                        $stmt->bindValue($identifier, $this->next_visit_date ? $this->next_visit_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'other_problems':
                        $stmt->bindValue($identifier, $this->other_problems, PDO::PARAM_STR);
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
        $this->setCareTzArvVisit2Id($pk);

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
        $pos = CareTzArvVisitTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getCareTzArvVisit2Id();
                break;
            case 1:
                return $this->getCareTzArvRegistrationId();
                break;
            case 2:
                return $this->getCareTzArvAdherCodeId();
                break;
            case 3:
                return $this->getCareTzArvFunctionalStatusId();
                break;
            case 4:
                return $this->getCareTzArvTbStatusId();
                break;
            case 5:
                return $this->getCareTzArvCaseId();
                break;
            case 6:
                return $this->getEncounterNr();
                break;
            case 7:
                return $this->getVisitDate();
                break;
            case 8:
                return $this->getCareTzArvStatusId();
                break;
            case 9:
                return $this->getWeight();
                break;
            case 10:
                return $this->getHeight();
                break;
            case 11:
                return $this->getClinicalStage();
                break;
            case 12:
                return $this->getPregnant();
                break;
            case 13:
                return $this->getDateOfDelivery();
                break;
            case 14:
                return $this->getTestTb();
                break;
            case 15:
                return $this->getCotrim();
                break;
            case 16:
                return $this->getTestInh();
                break;
            case 17:
                return $this->getDiflucan();
                break;
            case 18:
                return $this->getNutritionSupport();
                break;
            case 19:
                return $this->getNextVisitDate();
                break;
            case 20:
                return $this->getOtherProblems();
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

        if (isset($alreadyDumpedObjects['CareTzArvVisit'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzArvVisit'][$this->hashCode()] = true;
        $keys = CareTzArvVisitTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCareTzArvVisit2Id(),
            $keys[1] => $this->getCareTzArvRegistrationId(),
            $keys[2] => $this->getCareTzArvAdherCodeId(),
            $keys[3] => $this->getCareTzArvFunctionalStatusId(),
            $keys[4] => $this->getCareTzArvTbStatusId(),
            $keys[5] => $this->getCareTzArvCaseId(),
            $keys[6] => $this->getEncounterNr(),
            $keys[7] => $this->getVisitDate(),
            $keys[8] => $this->getCareTzArvStatusId(),
            $keys[9] => $this->getWeight(),
            $keys[10] => $this->getHeight(),
            $keys[11] => $this->getClinicalStage(),
            $keys[12] => $this->getPregnant(),
            $keys[13] => $this->getDateOfDelivery(),
            $keys[14] => $this->getTestTb(),
            $keys[15] => $this->getCotrim(),
            $keys[16] => $this->getTestInh(),
            $keys[17] => $this->getDiflucan(),
            $keys[18] => $this->getNutritionSupport(),
            $keys[19] => $this->getNextVisitDate(),
            $keys[20] => $this->getOtherProblems(),
            $keys[21] => $this->getCreateId(),
            $keys[22] => $this->getCreateTime(),
            $keys[23] => $this->getModifyId(),
            $keys[24] => $this->getModifyTime(),
            $keys[25] => $this->getHistory(),
        );
        if ($result[$keys[7]] instanceof \DateTimeInterface) {
            $result[$keys[7]] = $result[$keys[7]]->format('c');
        }

        if ($result[$keys[13]] instanceof \DateTimeInterface) {
            $result[$keys[13]] = $result[$keys[13]]->format('c');
        }

        if ($result[$keys[19]] instanceof \DateTimeInterface) {
            $result[$keys[19]] = $result[$keys[19]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTzArvVisit
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzArvVisitTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzArvVisit
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setCareTzArvVisit2Id($value);
                break;
            case 1:
                $this->setCareTzArvRegistrationId($value);
                break;
            case 2:
                $this->setCareTzArvAdherCodeId($value);
                break;
            case 3:
                $this->setCareTzArvFunctionalStatusId($value);
                break;
            case 4:
                $this->setCareTzArvTbStatusId($value);
                break;
            case 5:
                $this->setCareTzArvCaseId($value);
                break;
            case 6:
                $this->setEncounterNr($value);
                break;
            case 7:
                $this->setVisitDate($value);
                break;
            case 8:
                $this->setCareTzArvStatusId($value);
                break;
            case 9:
                $this->setWeight($value);
                break;
            case 10:
                $this->setHeight($value);
                break;
            case 11:
                $this->setClinicalStage($value);
                break;
            case 12:
                $this->setPregnant($value);
                break;
            case 13:
                $this->setDateOfDelivery($value);
                break;
            case 14:
                $this->setTestTb($value);
                break;
            case 15:
                $this->setCotrim($value);
                break;
            case 16:
                $this->setTestInh($value);
                break;
            case 17:
                $this->setDiflucan($value);
                break;
            case 18:
                $this->setNutritionSupport($value);
                break;
            case 19:
                $this->setNextVisitDate($value);
                break;
            case 20:
                $this->setOtherProblems($value);
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
        $keys = CareTzArvVisitTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setCareTzArvVisit2Id($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setCareTzArvRegistrationId($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCareTzArvAdherCodeId($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCareTzArvFunctionalStatusId($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setCareTzArvTbStatusId($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setCareTzArvCaseId($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setEncounterNr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setVisitDate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCareTzArvStatusId($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setWeight($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setHeight($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setClinicalStage($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPregnant($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setDateOfDelivery($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setTestTb($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCotrim($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setTestInh($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setDiflucan($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setNutritionSupport($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setNextVisitDate($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOtherProblems($arr[$keys[20]]);
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
     * @return $this|\CareMd\CareMd\CareTzArvVisit The current object, for fluid interface
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
        $criteria = new Criteria(CareTzArvVisitTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID)) {
            $criteria->add(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $this->care_tz_arv_visit_2_id);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID)) {
            $criteria->add(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $this->care_tz_arv_registration_id);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID)) {
            $criteria->add(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_ADHER_CODE_ID, $this->care_tz_arv_adher_code_id);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID)) {
            $criteria->add(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_FUNCTIONAL_STATUS_ID, $this->care_tz_arv_functional_status_id);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID)) {
            $criteria->add(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_TB_STATUS_ID, $this->care_tz_arv_tb_status_id);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_CASE_ID)) {
            $criteria->add(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_CASE_ID, $this->care_tz_arv_case_id);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareTzArvVisitTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_VISIT_DATE)) {
            $criteria->add(CareTzArvVisitTableMap::COL_VISIT_DATE, $this->visit_date);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_STATUS_ID)) {
            $criteria->add(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_STATUS_ID, $this->care_tz_arv_status_id);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_WEIGHT)) {
            $criteria->add(CareTzArvVisitTableMap::COL_WEIGHT, $this->weight);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_HEIGHT)) {
            $criteria->add(CareTzArvVisitTableMap::COL_HEIGHT, $this->height);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CLINICAL_STAGE)) {
            $criteria->add(CareTzArvVisitTableMap::COL_CLINICAL_STAGE, $this->clinical_stage);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_PREGNANT)) {
            $criteria->add(CareTzArvVisitTableMap::COL_PREGNANT, $this->pregnant);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_DATE_OF_DELIVERY)) {
            $criteria->add(CareTzArvVisitTableMap::COL_DATE_OF_DELIVERY, $this->date_of_delivery);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_TEST_TB)) {
            $criteria->add(CareTzArvVisitTableMap::COL_TEST_TB, $this->test_tb);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_COTRIM)) {
            $criteria->add(CareTzArvVisitTableMap::COL_COTRIM, $this->cotrim);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_TEST_INH)) {
            $criteria->add(CareTzArvVisitTableMap::COL_TEST_INH, $this->test_inh);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_DIFLUCAN)) {
            $criteria->add(CareTzArvVisitTableMap::COL_DIFLUCAN, $this->diflucan);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_NUTRITION_SUPPORT)) {
            $criteria->add(CareTzArvVisitTableMap::COL_NUTRITION_SUPPORT, $this->nutrition_support);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_NEXT_VISIT_DATE)) {
            $criteria->add(CareTzArvVisitTableMap::COL_NEXT_VISIT_DATE, $this->next_visit_date);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_OTHER_PROBLEMS)) {
            $criteria->add(CareTzArvVisitTableMap::COL_OTHER_PROBLEMS, $this->other_problems);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTzArvVisitTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTzArvVisitTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTzArvVisitTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTzArvVisitTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareTzArvVisitTableMap::COL_HISTORY)) {
            $criteria->add(CareTzArvVisitTableMap::COL_HISTORY, $this->history);
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
        $criteria = ChildCareTzArvVisitQuery::create();
        $criteria->add(CareTzArvVisitTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $this->care_tz_arv_visit_2_id);

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
        $validPk = null !== $this->getCareTzArvVisit2Id();

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
        return $this->getCareTzArvVisit2Id();
    }

    /**
     * Generic method to set the primary key (care_tz_arv_visit_2_id column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCareTzArvVisit2Id($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getCareTzArvVisit2Id();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzArvVisit (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCareTzArvRegistrationId($this->getCareTzArvRegistrationId());
        $copyObj->setCareTzArvAdherCodeId($this->getCareTzArvAdherCodeId());
        $copyObj->setCareTzArvFunctionalStatusId($this->getCareTzArvFunctionalStatusId());
        $copyObj->setCareTzArvTbStatusId($this->getCareTzArvTbStatusId());
        $copyObj->setCareTzArvCaseId($this->getCareTzArvCaseId());
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setVisitDate($this->getVisitDate());
        $copyObj->setCareTzArvStatusId($this->getCareTzArvStatusId());
        $copyObj->setWeight($this->getWeight());
        $copyObj->setHeight($this->getHeight());
        $copyObj->setClinicalStage($this->getClinicalStage());
        $copyObj->setPregnant($this->getPregnant());
        $copyObj->setDateOfDelivery($this->getDateOfDelivery());
        $copyObj->setTestTb($this->getTestTb());
        $copyObj->setCotrim($this->getCotrim());
        $copyObj->setTestInh($this->getTestInh());
        $copyObj->setDiflucan($this->getDiflucan());
        $copyObj->setNutritionSupport($this->getNutritionSupport());
        $copyObj->setNextVisitDate($this->getNextVisitDate());
        $copyObj->setOtherProblems($this->getOtherProblems());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setHistory($this->getHistory());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCareTzArvVisit2Id(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareTzArvVisit Clone of current object.
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
        $this->care_tz_arv_visit_2_id = null;
        $this->care_tz_arv_registration_id = null;
        $this->care_tz_arv_adher_code_id = null;
        $this->care_tz_arv_functional_status_id = null;
        $this->care_tz_arv_tb_status_id = null;
        $this->care_tz_arv_case_id = null;
        $this->encounter_nr = null;
        $this->visit_date = null;
        $this->care_tz_arv_status_id = null;
        $this->weight = null;
        $this->height = null;
        $this->clinical_stage = null;
        $this->pregnant = null;
        $this->date_of_delivery = null;
        $this->test_tb = null;
        $this->cotrim = null;
        $this->test_inh = null;
        $this->diflucan = null;
        $this->nutrition_support = null;
        $this->next_visit_date = null;
        $this->other_problems = null;
        $this->create_id = null;
        $this->create_time = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->history = null;
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
        return (string) $this->exportTo(CareTzArvVisitTableMap::DEFAULT_STRING_FORMAT);
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
