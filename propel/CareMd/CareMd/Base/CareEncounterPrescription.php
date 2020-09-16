<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterPrescriptionQuery as ChildCareEncounterPrescriptionQuery;
use CareMd\CareMd\Map\CareEncounterPrescriptionTableMap;
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
 * Base class that represents a row from the 'care_encounter_prescription' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareEncounterPrescription implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareEncounterPrescriptionTableMap';


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
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

    /**
     * The value for the prescription_type_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $prescription_type_nr;

    /**
     * The value for the article field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $article;

    /**
     * The value for the article_item_number field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $article_item_number;

    /**
     * The value for the partcode field.
     *
     * @var        string
     */
    protected $partcode;

    /**
     * The value for the mark_os field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $mark_os;

    /**
     * The value for the materialcost field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $materialcost;

    /**
     * The value for the price field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $price;

    /**
     * The value for the drug_class field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $drug_class;

    /**
     * The value for the order_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $order_nr;

    /**
     * The value for the dosage field.
     *
     * @var        double
     */
    protected $dosage;

    /**
     * The value for the times_per_day field.
     *
     * @var        int
     */
    protected $times_per_day;

    /**
     * The value for the days field.
     *
     * @var        int
     */
    protected $days;

    /**
     * The value for the total_dosage field.
     *
     * @var        double
     */
    protected $total_dosage;

    /**
     * The value for the application_type_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $application_type_nr;

    /**
     * The value for the notes field.
     *
     * @var        string
     */
    protected $notes;

    /**
     * The value for the prescribe_date field.
     *
     * @var        DateTime
     */
    protected $prescribe_date;

    /**
     * The value for the prescriber field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prescriber;

    /**
     * The value for the taken field.
     *
     * @var        boolean
     */
    protected $taken;

    /**
     * The value for the color_marker field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $color_marker;

    /**
     * The value for the is_stopped field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_stopped;

    /**
     * The value for the is_outpatient_prescription field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_outpatient_prescription;

    /**
     * The value for the issuer field.
     *
     * @var        string
     */
    protected $issuer;

    /**
     * The value for the issue_date field.
     *
     * @var        DateTime
     */
    protected $issue_date;

    /**
     * The value for the is_disabled field.
     *
     * @var        string
     */
    protected $is_disabled;

    /**
     * The value for the disable_id field.
     *
     * @var        string
     */
    protected $disable_id;

    /**
     * The value for the disable_date field.
     *
     * @var        DateTime
     */
    protected $disable_date;

    /**
     * The value for the stop_date field.
     *
     * @var        DateTime
     */
    protected $stop_date;

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
     * The value for the bill_number field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $bill_number;

    /**
     * The value for the bill_status field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $bill_status;

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
     * The value for the priority field.
     *
     * @var        boolean
     */
    protected $priority;

    /**
     * The value for the sub_store field.
     *
     * @var        string
     */
    protected $sub_store;

    /**
     * The value for the in_weberp field.
     *
     * @var        int
     */
    protected $in_weberp;

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
        $this->prescription_type_nr = 0;
        $this->article = '';
        $this->article_item_number = '0';
        $this->mark_os = 0;
        $this->materialcost = '0';
        $this->price = '';
        $this->drug_class = '';
        $this->order_nr = 0;
        $this->application_type_nr = 0;
        $this->prescriber = '';
        $this->color_marker = '';
        $this->is_stopped = false;
        $this->is_outpatient_prescription = 0;
        $this->status = '';
        $this->bill_number = '0';
        $this->bill_status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareEncounterPrescription object.
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
     * Compares this with another <code>CareEncounterPrescription</code> instance.  If
     * <code>obj</code> is an instance of <code>CareEncounterPrescription</code>, delegates to
     * <code>equals(CareEncounterPrescription)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareEncounterPrescription The current object, for fluid interface
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
     * Get the [encounter_nr] column value.
     *
     * @return int
     */
    public function getEncounterNr()
    {
        return $this->encounter_nr;
    }

    /**
     * Get the [prescription_type_nr] column value.
     *
     * @return int
     */
    public function getPrescriptionTypeNr()
    {
        return $this->prescription_type_nr;
    }

    /**
     * Get the [article] column value.
     *
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Get the [article_item_number] column value.
     *
     * @return string
     */
    public function getArticleItemNumber()
    {
        return $this->article_item_number;
    }

    /**
     * Get the [partcode] column value.
     *
     * @return string
     */
    public function getPartcode()
    {
        return $this->partcode;
    }

    /**
     * Get the [mark_os] column value.
     *
     * @return int
     */
    public function getMarkOs()
    {
        return $this->mark_os;
    }

    /**
     * Get the [materialcost] column value.
     *
     * @return string
     */
    public function getMaterialcost()
    {
        return $this->materialcost;
    }

    /**
     * Get the [price] column value.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the [drug_class] column value.
     *
     * @return string
     */
    public function getDrugClass()
    {
        return $this->drug_class;
    }

    /**
     * Get the [order_nr] column value.
     *
     * @return int
     */
    public function getOrderNr()
    {
        return $this->order_nr;
    }

    /**
     * Get the [dosage] column value.
     *
     * @return double
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Get the [times_per_day] column value.
     *
     * @return int
     */
    public function getTimesPerDay()
    {
        return $this->times_per_day;
    }

    /**
     * Get the [days] column value.
     *
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Get the [total_dosage] column value.
     *
     * @return double
     */
    public function getTotalDosage()
    {
        return $this->total_dosage;
    }

    /**
     * Get the [application_type_nr] column value.
     *
     * @return int
     */
    public function getApplicationTypeNr()
    {
        return $this->application_type_nr;
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
     * Get the [optionally formatted] temporal [prescribe_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPrescribeDate($format = NULL)
    {
        if ($format === null) {
            return $this->prescribe_date;
        } else {
            return $this->prescribe_date instanceof \DateTimeInterface ? $this->prescribe_date->format($format) : null;
        }
    }

    /**
     * Get the [prescriber] column value.
     *
     * @return string
     */
    public function getPrescriber()
    {
        return $this->prescriber;
    }

    /**
     * Get the [taken] column value.
     *
     * @return boolean
     */
    public function getTaken()
    {
        return $this->taken;
    }

    /**
     * Get the [taken] column value.
     *
     * @return boolean
     */
    public function isTaken()
    {
        return $this->getTaken();
    }

    /**
     * Get the [color_marker] column value.
     *
     * @return string
     */
    public function getColorMarker()
    {
        return $this->color_marker;
    }

    /**
     * Get the [is_stopped] column value.
     *
     * @return boolean
     */
    public function getIsStopped()
    {
        return $this->is_stopped;
    }

    /**
     * Get the [is_stopped] column value.
     *
     * @return boolean
     */
    public function isStopped()
    {
        return $this->getIsStopped();
    }

    /**
     * Get the [is_outpatient_prescription] column value.
     *
     * @return int
     */
    public function getIsOutpatientPrescription()
    {
        return $this->is_outpatient_prescription;
    }

    /**
     * Get the [issuer] column value.
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Get the [optionally formatted] temporal [issue_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getIssueDate($format = NULL)
    {
        if ($format === null) {
            return $this->issue_date;
        } else {
            return $this->issue_date instanceof \DateTimeInterface ? $this->issue_date->format($format) : null;
        }
    }

    /**
     * Get the [is_disabled] column value.
     *
     * @return string
     */
    public function getIsDisabled()
    {
        return $this->is_disabled;
    }

    /**
     * Get the [disable_id] column value.
     *
     * @return string
     */
    public function getDisableId()
    {
        return $this->disable_id;
    }

    /**
     * Get the [optionally formatted] temporal [disable_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDisableDate($format = NULL)
    {
        if ($format === null) {
            return $this->disable_date;
        } else {
            return $this->disable_date instanceof \DateTimeInterface ? $this->disable_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [stop_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getStopDate($format = NULL)
    {
        if ($format === null) {
            return $this->stop_date;
        } else {
            return $this->stop_date instanceof \DateTimeInterface ? $this->stop_date->format($format) : null;
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
     * Get the [bill_number] column value.
     *
     * @return string
     */
    public function getBillNumber()
    {
        return $this->bill_number;
    }

    /**
     * Get the [bill_status] column value.
     *
     * @return string
     */
    public function getBillStatus()
    {
        return $this->bill_status;
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
     * Get the [priority] column value.
     *
     * @return boolean
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Get the [priority] column value.
     *
     * @return boolean
     */
    public function isPriority()
    {
        return $this->getPriority();
    }

    /**
     * Get the [sub_store] column value.
     *
     * @return string
     */
    public function getSubStore()
    {
        return $this->sub_store;
    }

    /**
     * Get the [in_weberp] column value.
     *
     * @return int
     */
    public function getInWeberp()
    {
        return $this->in_weberp;
    }

    /**
     * Set the value of [nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [prescription_type_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setPrescriptionTypeNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->prescription_type_nr !== $v) {
            $this->prescription_type_nr = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_PRESCRIPTION_TYPE_NR] = true;
        }

        return $this;
    } // setPrescriptionTypeNr()

    /**
     * Set the value of [article] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setArticle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->article !== $v) {
            $this->article = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_ARTICLE] = true;
        }

        return $this;
    } // setArticle()

    /**
     * Set the value of [article_item_number] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setArticleItemNumber($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->article_item_number !== $v) {
            $this->article_item_number = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_ARTICLE_ITEM_NUMBER] = true;
        }

        return $this;
    } // setArticleItemNumber()

    /**
     * Set the value of [partcode] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setPartcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->partcode !== $v) {
            $this->partcode = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_PARTCODE] = true;
        }

        return $this;
    } // setPartcode()

    /**
     * Set the value of [mark_os] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setMarkOs($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->mark_os !== $v) {
            $this->mark_os = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_MARK_OS] = true;
        }

        return $this;
    } // setMarkOs()

    /**
     * Set the value of [materialcost] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setMaterialcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->materialcost !== $v) {
            $this->materialcost = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_MATERIALCOST] = true;
        }

        return $this;
    } // setMaterialcost()

    /**
     * Set the value of [price] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setPrice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->price !== $v) {
            $this->price = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_PRICE] = true;
        }

        return $this;
    } // setPrice()

    /**
     * Set the value of [drug_class] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setDrugClass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->drug_class !== $v) {
            $this->drug_class = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_DRUG_CLASS] = true;
        }

        return $this;
    } // setDrugClass()

    /**
     * Set the value of [order_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setOrderNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->order_nr !== $v) {
            $this->order_nr = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_ORDER_NR] = true;
        }

        return $this;
    } // setOrderNr()

    /**
     * Set the value of [dosage] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setDosage($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->dosage !== $v) {
            $this->dosage = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_DOSAGE] = true;
        }

        return $this;
    } // setDosage()

    /**
     * Set the value of [times_per_day] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setTimesPerDay($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->times_per_day !== $v) {
            $this->times_per_day = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_TIMES_PER_DAY] = true;
        }

        return $this;
    } // setTimesPerDay()

    /**
     * Set the value of [days] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setDays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->days !== $v) {
            $this->days = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_DAYS] = true;
        }

        return $this;
    } // setDays()

    /**
     * Set the value of [total_dosage] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setTotalDosage($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->total_dosage !== $v) {
            $this->total_dosage = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_TOTAL_DOSAGE] = true;
        }

        return $this;
    } // setTotalDosage()

    /**
     * Set the value of [application_type_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setApplicationTypeNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->application_type_nr !== $v) {
            $this->application_type_nr = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_APPLICATION_TYPE_NR] = true;
        }

        return $this;
    } // setApplicationTypeNr()

    /**
     * Set the value of [notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->notes !== $v) {
            $this->notes = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_NOTES] = true;
        }

        return $this;
    } // setNotes()

    /**
     * Sets the value of [prescribe_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setPrescribeDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->prescribe_date !== null || $dt !== null) {
            if ($this->prescribe_date === null || $dt === null || $dt->format("Y-m-d") !== $this->prescribe_date->format("Y-m-d")) {
                $this->prescribe_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_PRESCRIBE_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setPrescribeDate()

    /**
     * Set the value of [prescriber] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setPrescriber($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prescriber !== $v) {
            $this->prescriber = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_PRESCRIBER] = true;
        }

        return $this;
    } // setPrescriber()

    /**
     * Sets the value of the [taken] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setTaken($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->taken !== $v) {
            $this->taken = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_TAKEN] = true;
        }

        return $this;
    } // setTaken()

    /**
     * Set the value of [color_marker] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setColorMarker($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->color_marker !== $v) {
            $this->color_marker = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_COLOR_MARKER] = true;
        }

        return $this;
    } // setColorMarker()

    /**
     * Sets the value of the [is_stopped] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setIsStopped($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_stopped !== $v) {
            $this->is_stopped = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_IS_STOPPED] = true;
        }

        return $this;
    } // setIsStopped()

    /**
     * Set the value of [is_outpatient_prescription] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setIsOutpatientPrescription($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_outpatient_prescription !== $v) {
            $this->is_outpatient_prescription = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_IS_OUTPATIENT_PRESCRIPTION] = true;
        }

        return $this;
    } // setIsOutpatientPrescription()

    /**
     * Set the value of [issuer] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setIssuer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->issuer !== $v) {
            $this->issuer = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_ISSUER] = true;
        }

        return $this;
    } // setIssuer()

    /**
     * Sets the value of [issue_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setIssueDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->issue_date !== null || $dt !== null) {
            if ($this->issue_date === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->issue_date->format("Y-m-d H:i:s.u")) {
                $this->issue_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_ISSUE_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setIssueDate()

    /**
     * Set the value of [is_disabled] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setIsDisabled($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->is_disabled !== $v) {
            $this->is_disabled = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_IS_DISABLED] = true;
        }

        return $this;
    } // setIsDisabled()

    /**
     * Set the value of [disable_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setDisableId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->disable_id !== $v) {
            $this->disable_id = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_DISABLE_ID] = true;
        }

        return $this;
    } // setDisableId()

    /**
     * Sets the value of [disable_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setDisableDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->disable_date !== null || $dt !== null) {
            if ($this->disable_date === null || $dt === null || $dt->format("Y-m-d") !== $this->disable_date->format("Y-m-d")) {
                $this->disable_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_DISABLE_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDisableDate()

    /**
     * Sets the value of [stop_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setStopDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->stop_date !== null || $dt !== null) {
            if ($this->stop_date === null || $dt === null || $dt->format("Y-m-d") !== $this->stop_date->format("Y-m-d")) {
                $this->stop_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_STOP_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setStopDate()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [bill_number] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setBillNumber($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bill_number !== $v) {
            $this->bill_number = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_BILL_NUMBER] = true;
        }

        return $this;
    } // setBillNumber()

    /**
     * Set the value of [bill_status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setBillStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bill_status !== $v) {
            $this->bill_status = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_BILL_STATUS] = true;
        }

        return $this;
    } // setBillStatus()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_CREATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateTime()

    /**
     * Sets the value of the [priority] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setPriority($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->priority !== $v) {
            $this->priority = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_PRIORITY] = true;
        }

        return $this;
    } // setPriority()

    /**
     * Set the value of [sub_store] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setSubStore($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sub_store !== $v) {
            $this->sub_store = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_SUB_STORE] = true;
        }

        return $this;
    } // setSubStore()

    /**
     * Set the value of [in_weberp] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object (for fluent API support)
     */
    public function setInWeberp($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->in_weberp !== $v) {
            $this->in_weberp = $v;
            $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_IN_WEBERP] = true;
        }

        return $this;
    } // setInWeberp()

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

            if ($this->prescription_type_nr !== 0) {
                return false;
            }

            if ($this->article !== '') {
                return false;
            }

            if ($this->article_item_number !== '0') {
                return false;
            }

            if ($this->mark_os !== 0) {
                return false;
            }

            if ($this->materialcost !== '0') {
                return false;
            }

            if ($this->price !== '') {
                return false;
            }

            if ($this->drug_class !== '') {
                return false;
            }

            if ($this->order_nr !== 0) {
                return false;
            }

            if ($this->application_type_nr !== 0) {
                return false;
            }

            if ($this->prescriber !== '') {
                return false;
            }

            if ($this->color_marker !== '') {
                return false;
            }

            if ($this->is_stopped !== false) {
                return false;
            }

            if ($this->is_outpatient_prescription !== 0) {
                return false;
            }

            if ($this->status !== '') {
                return false;
            }

            if ($this->bill_number !== '0') {
                return false;
            }

            if ($this->bill_status !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('PrescriptionTypeNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prescription_type_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Article', TableMap::TYPE_PHPNAME, $indexType)];
            $this->article = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('ArticleItemNumber', TableMap::TYPE_PHPNAME, $indexType)];
            $this->article_item_number = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Partcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->partcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('MarkOs', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mark_os = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Materialcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->materialcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Price', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('DrugClass', TableMap::TYPE_PHPNAME, $indexType)];
            $this->drug_class = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('OrderNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->order_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Dosage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dosage = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('TimesPerDay', TableMap::TYPE_PHPNAME, $indexType)];
            $this->times_per_day = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Days', TableMap::TYPE_PHPNAME, $indexType)];
            $this->days = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('TotalDosage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->total_dosage = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('ApplicationTypeNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->application_type_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Notes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('PrescribeDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->prescribe_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Prescriber', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prescriber = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Taken', TableMap::TYPE_PHPNAME, $indexType)];
            $this->taken = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('ColorMarker', TableMap::TYPE_PHPNAME, $indexType)];
            $this->color_marker = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('IsStopped', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_stopped = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('IsOutpatientPrescription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_outpatient_prescription = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Issuer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->issuer = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('IssueDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->issue_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('IsDisabled', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_disabled = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('DisableId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->disable_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('DisableDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->disable_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('StopDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->stop_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('BillNumber', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_number = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('BillStatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('Priority', TableMap::TYPE_PHPNAME, $indexType)];
            $this->priority = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('SubStore', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sub_store = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CareEncounterPrescriptionTableMap::translateFieldName('InWeberp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->in_weberp = (null !== $col) ? (int) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 40; // 40 = CareEncounterPrescriptionTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareEncounterPrescription'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterPrescriptionTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareEncounterPrescriptionQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareEncounterPrescription::setDeleted()
     * @see CareEncounterPrescription::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterPrescriptionTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareEncounterPrescriptionQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterPrescriptionTableMap::DATABASE_NAME);
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
                CareEncounterPrescriptionTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareEncounterPrescriptionTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareEncounterPrescriptionTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PRESCRIPTION_TYPE_NR)) {
            $modifiedColumns[':p' . $index++]  = 'prescription_type_nr';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ARTICLE)) {
            $modifiedColumns[':p' . $index++]  = 'article';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ARTICLE_ITEM_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'article_item_number';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PARTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'partcode';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_MARK_OS)) {
            $modifiedColumns[':p' . $index++]  = 'mark_os';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_MATERIALCOST)) {
            $modifiedColumns[':p' . $index++]  = 'materialcost';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'price';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_DRUG_CLASS)) {
            $modifiedColumns[':p' . $index++]  = 'drug_class';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ORDER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'order_nr';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_DOSAGE)) {
            $modifiedColumns[':p' . $index++]  = 'dosage';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_TIMES_PER_DAY)) {
            $modifiedColumns[':p' . $index++]  = 'times_per_day';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_DAYS)) {
            $modifiedColumns[':p' . $index++]  = 'days';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_TOTAL_DOSAGE)) {
            $modifiedColumns[':p' . $index++]  = 'total_dosage';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_APPLICATION_TYPE_NR)) {
            $modifiedColumns[':p' . $index++]  = 'application_type_nr';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'notes';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PRESCRIBE_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'prescribe_date';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PRESCRIBER)) {
            $modifiedColumns[':p' . $index++]  = 'prescriber';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_TAKEN)) {
            $modifiedColumns[':p' . $index++]  = 'taken';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_COLOR_MARKER)) {
            $modifiedColumns[':p' . $index++]  = 'color_marker';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_IS_STOPPED)) {
            $modifiedColumns[':p' . $index++]  = 'is_stopped';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_IS_OUTPATIENT_PRESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'is_outpatient_prescription';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ISSUER)) {
            $modifiedColumns[':p' . $index++]  = 'issuer';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ISSUE_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'issue_date';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_IS_DISABLED)) {
            $modifiedColumns[':p' . $index++]  = 'is_disabled';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_DISABLE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'disable_id';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_DISABLE_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'disable_date';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_STOP_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'stop_date';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_BILL_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'bill_number';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_BILL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'bill_status';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PRIORITY)) {
            $modifiedColumns[':p' . $index++]  = 'priority';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_SUB_STORE)) {
            $modifiedColumns[':p' . $index++]  = 'sub_store';
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_IN_WEBERP)) {
            $modifiedColumns[':p' . $index++]  = 'in_weberp';
        }

        $sql = sprintf(
            'INSERT INTO care_encounter_prescription (%s) VALUES (%s)',
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
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'prescription_type_nr':
                        $stmt->bindValue($identifier, $this->prescription_type_nr, PDO::PARAM_INT);
                        break;
                    case 'article':
                        $stmt->bindValue($identifier, $this->article, PDO::PARAM_STR);
                        break;
                    case 'article_item_number':
                        $stmt->bindValue($identifier, $this->article_item_number, PDO::PARAM_STR);
                        break;
                    case 'partcode':
                        $stmt->bindValue($identifier, $this->partcode, PDO::PARAM_STR);
                        break;
                    case 'mark_os':
                        $stmt->bindValue($identifier, $this->mark_os, PDO::PARAM_INT);
                        break;
                    case 'materialcost':
                        $stmt->bindValue($identifier, $this->materialcost, PDO::PARAM_STR);
                        break;
                    case 'price':
                        $stmt->bindValue($identifier, $this->price, PDO::PARAM_STR);
                        break;
                    case 'drug_class':
                        $stmt->bindValue($identifier, $this->drug_class, PDO::PARAM_STR);
                        break;
                    case 'order_nr':
                        $stmt->bindValue($identifier, $this->order_nr, PDO::PARAM_INT);
                        break;
                    case 'dosage':
                        $stmt->bindValue($identifier, $this->dosage, PDO::PARAM_STR);
                        break;
                    case 'times_per_day':
                        $stmt->bindValue($identifier, $this->times_per_day, PDO::PARAM_INT);
                        break;
                    case 'days':
                        $stmt->bindValue($identifier, $this->days, PDO::PARAM_INT);
                        break;
                    case 'total_dosage':
                        $stmt->bindValue($identifier, $this->total_dosage, PDO::PARAM_STR);
                        break;
                    case 'application_type_nr':
                        $stmt->bindValue($identifier, $this->application_type_nr, PDO::PARAM_INT);
                        break;
                    case 'notes':
                        $stmt->bindValue($identifier, $this->notes, PDO::PARAM_STR);
                        break;
                    case 'prescribe_date':
                        $stmt->bindValue($identifier, $this->prescribe_date ? $this->prescribe_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'prescriber':
                        $stmt->bindValue($identifier, $this->prescriber, PDO::PARAM_STR);
                        break;
                    case 'taken':
                        $stmt->bindValue($identifier, (int) $this->taken, PDO::PARAM_INT);
                        break;
                    case 'color_marker':
                        $stmt->bindValue($identifier, $this->color_marker, PDO::PARAM_STR);
                        break;
                    case 'is_stopped':
                        $stmt->bindValue($identifier, (int) $this->is_stopped, PDO::PARAM_INT);
                        break;
                    case 'is_outpatient_prescription':
                        $stmt->bindValue($identifier, $this->is_outpatient_prescription, PDO::PARAM_INT);
                        break;
                    case 'issuer':
                        $stmt->bindValue($identifier, $this->issuer, PDO::PARAM_STR);
                        break;
                    case 'issue_date':
                        $stmt->bindValue($identifier, $this->issue_date ? $this->issue_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'is_disabled':
                        $stmt->bindValue($identifier, $this->is_disabled, PDO::PARAM_STR);
                        break;
                    case 'disable_id':
                        $stmt->bindValue($identifier, $this->disable_id, PDO::PARAM_STR);
                        break;
                    case 'disable_date':
                        $stmt->bindValue($identifier, $this->disable_date ? $this->disable_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'stop_date':
                        $stmt->bindValue($identifier, $this->stop_date ? $this->stop_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'history':
                        $stmt->bindValue($identifier, $this->history, PDO::PARAM_STR);
                        break;
                    case 'bill_number':
                        $stmt->bindValue($identifier, $this->bill_number, PDO::PARAM_INT);
                        break;
                    case 'bill_status':
                        $stmt->bindValue($identifier, $this->bill_status, PDO::PARAM_STR);
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
                    case 'priority':
                        $stmt->bindValue($identifier, (int) $this->priority, PDO::PARAM_INT);
                        break;
                    case 'sub_store':
                        $stmt->bindValue($identifier, $this->sub_store, PDO::PARAM_STR);
                        break;
                    case 'in_weberp':
                        $stmt->bindValue($identifier, $this->in_weberp, PDO::PARAM_INT);
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
        $pos = CareEncounterPrescriptionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getEncounterNr();
                break;
            case 2:
                return $this->getPrescriptionTypeNr();
                break;
            case 3:
                return $this->getArticle();
                break;
            case 4:
                return $this->getArticleItemNumber();
                break;
            case 5:
                return $this->getPartcode();
                break;
            case 6:
                return $this->getMarkOs();
                break;
            case 7:
                return $this->getMaterialcost();
                break;
            case 8:
                return $this->getPrice();
                break;
            case 9:
                return $this->getDrugClass();
                break;
            case 10:
                return $this->getOrderNr();
                break;
            case 11:
                return $this->getDosage();
                break;
            case 12:
                return $this->getTimesPerDay();
                break;
            case 13:
                return $this->getDays();
                break;
            case 14:
                return $this->getTotalDosage();
                break;
            case 15:
                return $this->getApplicationTypeNr();
                break;
            case 16:
                return $this->getNotes();
                break;
            case 17:
                return $this->getPrescribeDate();
                break;
            case 18:
                return $this->getPrescriber();
                break;
            case 19:
                return $this->getTaken();
                break;
            case 20:
                return $this->getColorMarker();
                break;
            case 21:
                return $this->getIsStopped();
                break;
            case 22:
                return $this->getIsOutpatientPrescription();
                break;
            case 23:
                return $this->getIssuer();
                break;
            case 24:
                return $this->getIssueDate();
                break;
            case 25:
                return $this->getIsDisabled();
                break;
            case 26:
                return $this->getDisableId();
                break;
            case 27:
                return $this->getDisableDate();
                break;
            case 28:
                return $this->getStopDate();
                break;
            case 29:
                return $this->getStatus();
                break;
            case 30:
                return $this->getHistory();
                break;
            case 31:
                return $this->getBillNumber();
                break;
            case 32:
                return $this->getBillStatus();
                break;
            case 33:
                return $this->getModifyId();
                break;
            case 34:
                return $this->getModifyTime();
                break;
            case 35:
                return $this->getCreateId();
                break;
            case 36:
                return $this->getCreateTime();
                break;
            case 37:
                return $this->getPriority();
                break;
            case 38:
                return $this->getSubStore();
                break;
            case 39:
                return $this->getInWeberp();
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

        if (isset($alreadyDumpedObjects['CareEncounterPrescription'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareEncounterPrescription'][$this->hashCode()] = true;
        $keys = CareEncounterPrescriptionTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getEncounterNr(),
            $keys[2] => $this->getPrescriptionTypeNr(),
            $keys[3] => $this->getArticle(),
            $keys[4] => $this->getArticleItemNumber(),
            $keys[5] => $this->getPartcode(),
            $keys[6] => $this->getMarkOs(),
            $keys[7] => $this->getMaterialcost(),
            $keys[8] => $this->getPrice(),
            $keys[9] => $this->getDrugClass(),
            $keys[10] => $this->getOrderNr(),
            $keys[11] => $this->getDosage(),
            $keys[12] => $this->getTimesPerDay(),
            $keys[13] => $this->getDays(),
            $keys[14] => $this->getTotalDosage(),
            $keys[15] => $this->getApplicationTypeNr(),
            $keys[16] => $this->getNotes(),
            $keys[17] => $this->getPrescribeDate(),
            $keys[18] => $this->getPrescriber(),
            $keys[19] => $this->getTaken(),
            $keys[20] => $this->getColorMarker(),
            $keys[21] => $this->getIsStopped(),
            $keys[22] => $this->getIsOutpatientPrescription(),
            $keys[23] => $this->getIssuer(),
            $keys[24] => $this->getIssueDate(),
            $keys[25] => $this->getIsDisabled(),
            $keys[26] => $this->getDisableId(),
            $keys[27] => $this->getDisableDate(),
            $keys[28] => $this->getStopDate(),
            $keys[29] => $this->getStatus(),
            $keys[30] => $this->getHistory(),
            $keys[31] => $this->getBillNumber(),
            $keys[32] => $this->getBillStatus(),
            $keys[33] => $this->getModifyId(),
            $keys[34] => $this->getModifyTime(),
            $keys[35] => $this->getCreateId(),
            $keys[36] => $this->getCreateTime(),
            $keys[37] => $this->getPriority(),
            $keys[38] => $this->getSubStore(),
            $keys[39] => $this->getInWeberp(),
        );
        if ($result[$keys[17]] instanceof \DateTimeInterface) {
            $result[$keys[17]] = $result[$keys[17]]->format('c');
        }

        if ($result[$keys[24]] instanceof \DateTimeInterface) {
            $result[$keys[24]] = $result[$keys[24]]->format('c');
        }

        if ($result[$keys[27]] instanceof \DateTimeInterface) {
            $result[$keys[27]] = $result[$keys[27]]->format('c');
        }

        if ($result[$keys[28]] instanceof \DateTimeInterface) {
            $result[$keys[28]] = $result[$keys[28]]->format('c');
        }

        if ($result[$keys[34]] instanceof \DateTimeInterface) {
            $result[$keys[34]] = $result[$keys[34]]->format('c');
        }

        if ($result[$keys[36]] instanceof \DateTimeInterface) {
            $result[$keys[36]] = $result[$keys[36]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareEncounterPrescription
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareEncounterPrescriptionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareEncounterPrescription
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNr($value);
                break;
            case 1:
                $this->setEncounterNr($value);
                break;
            case 2:
                $this->setPrescriptionTypeNr($value);
                break;
            case 3:
                $this->setArticle($value);
                break;
            case 4:
                $this->setArticleItemNumber($value);
                break;
            case 5:
                $this->setPartcode($value);
                break;
            case 6:
                $this->setMarkOs($value);
                break;
            case 7:
                $this->setMaterialcost($value);
                break;
            case 8:
                $this->setPrice($value);
                break;
            case 9:
                $this->setDrugClass($value);
                break;
            case 10:
                $this->setOrderNr($value);
                break;
            case 11:
                $this->setDosage($value);
                break;
            case 12:
                $this->setTimesPerDay($value);
                break;
            case 13:
                $this->setDays($value);
                break;
            case 14:
                $this->setTotalDosage($value);
                break;
            case 15:
                $this->setApplicationTypeNr($value);
                break;
            case 16:
                $this->setNotes($value);
                break;
            case 17:
                $this->setPrescribeDate($value);
                break;
            case 18:
                $this->setPrescriber($value);
                break;
            case 19:
                $this->setTaken($value);
                break;
            case 20:
                $this->setColorMarker($value);
                break;
            case 21:
                $this->setIsStopped($value);
                break;
            case 22:
                $this->setIsOutpatientPrescription($value);
                break;
            case 23:
                $this->setIssuer($value);
                break;
            case 24:
                $this->setIssueDate($value);
                break;
            case 25:
                $this->setIsDisabled($value);
                break;
            case 26:
                $this->setDisableId($value);
                break;
            case 27:
                $this->setDisableDate($value);
                break;
            case 28:
                $this->setStopDate($value);
                break;
            case 29:
                $this->setStatus($value);
                break;
            case 30:
                $this->setHistory($value);
                break;
            case 31:
                $this->setBillNumber($value);
                break;
            case 32:
                $this->setBillStatus($value);
                break;
            case 33:
                $this->setModifyId($value);
                break;
            case 34:
                $this->setModifyTime($value);
                break;
            case 35:
                $this->setCreateId($value);
                break;
            case 36:
                $this->setCreateTime($value);
                break;
            case 37:
                $this->setPriority($value);
                break;
            case 38:
                $this->setSubStore($value);
                break;
            case 39:
                $this->setInWeberp($value);
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
        $keys = CareEncounterPrescriptionTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPrescriptionTypeNr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArticle($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArticleItemNumber($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPartcode($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setMarkOs($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setMaterialcost($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPrice($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setDrugClass($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOrderNr($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setDosage($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setTimesPerDay($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setDays($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setTotalDosage($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setApplicationTypeNr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setNotes($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPrescribeDate($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setPrescriber($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setTaken($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setColorMarker($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setIsStopped($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setIsOutpatientPrescription($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setIssuer($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setIssueDate($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setIsDisabled($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setDisableId($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setDisableDate($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setStopDate($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setStatus($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setHistory($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setBillNumber($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setBillStatus($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setModifyId($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setModifyTime($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setCreateId($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setCreateTime($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setPriority($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setSubStore($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setInWeberp($arr[$keys[39]]);
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
     * @return $this|\CareMd\CareMd\CareEncounterPrescription The current object, for fluid interface
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
        $criteria = new Criteria(CareEncounterPrescriptionTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_NR)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PRESCRIPTION_TYPE_NR)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_PRESCRIPTION_TYPE_NR, $this->prescription_type_nr);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ARTICLE)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_ARTICLE, $this->article);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ARTICLE_ITEM_NUMBER)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_ARTICLE_ITEM_NUMBER, $this->article_item_number);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PARTCODE)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_PARTCODE, $this->partcode);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_MARK_OS)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_MARK_OS, $this->mark_os);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_MATERIALCOST)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_MATERIALCOST, $this->materialcost);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PRICE)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_PRICE, $this->price);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_DRUG_CLASS)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_DRUG_CLASS, $this->drug_class);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ORDER_NR)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_ORDER_NR, $this->order_nr);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_DOSAGE)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_DOSAGE, $this->dosage);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_TIMES_PER_DAY)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_TIMES_PER_DAY, $this->times_per_day);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_DAYS)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_DAYS, $this->days);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_TOTAL_DOSAGE)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_TOTAL_DOSAGE, $this->total_dosage);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_APPLICATION_TYPE_NR)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_APPLICATION_TYPE_NR, $this->application_type_nr);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_NOTES)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_NOTES, $this->notes);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PRESCRIBE_DATE)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_PRESCRIBE_DATE, $this->prescribe_date);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PRESCRIBER)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_PRESCRIBER, $this->prescriber);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_TAKEN)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_TAKEN, $this->taken);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_COLOR_MARKER)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_COLOR_MARKER, $this->color_marker);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_IS_STOPPED)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_IS_STOPPED, $this->is_stopped);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_IS_OUTPATIENT_PRESCRIPTION)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_IS_OUTPATIENT_PRESCRIPTION, $this->is_outpatient_prescription);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ISSUER)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_ISSUER, $this->issuer);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_ISSUE_DATE)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_ISSUE_DATE, $this->issue_date);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_IS_DISABLED)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_IS_DISABLED, $this->is_disabled);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_DISABLE_ID)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_DISABLE_ID, $this->disable_id);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_DISABLE_DATE)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_DISABLE_DATE, $this->disable_date);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_STOP_DATE)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_STOP_DATE, $this->stop_date);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_STATUS)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_HISTORY)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_BILL_NUMBER)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_BILL_NUMBER, $this->bill_number);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_BILL_STATUS)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_BILL_STATUS, $this->bill_status);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_CREATE_ID)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_PRIORITY)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_PRIORITY, $this->priority);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_SUB_STORE)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_SUB_STORE, $this->sub_store);
        }
        if ($this->isColumnModified(CareEncounterPrescriptionTableMap::COL_IN_WEBERP)) {
            $criteria->add(CareEncounterPrescriptionTableMap::COL_IN_WEBERP, $this->in_weberp);
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
        $criteria = ChildCareEncounterPrescriptionQuery::create();
        $criteria->add(CareEncounterPrescriptionTableMap::COL_NR, $this->nr);

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
     * @param      object $copyObj An object of \CareMd\CareMd\CareEncounterPrescription (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setPrescriptionTypeNr($this->getPrescriptionTypeNr());
        $copyObj->setArticle($this->getArticle());
        $copyObj->setArticleItemNumber($this->getArticleItemNumber());
        $copyObj->setPartcode($this->getPartcode());
        $copyObj->setMarkOs($this->getMarkOs());
        $copyObj->setMaterialcost($this->getMaterialcost());
        $copyObj->setPrice($this->getPrice());
        $copyObj->setDrugClass($this->getDrugClass());
        $copyObj->setOrderNr($this->getOrderNr());
        $copyObj->setDosage($this->getDosage());
        $copyObj->setTimesPerDay($this->getTimesPerDay());
        $copyObj->setDays($this->getDays());
        $copyObj->setTotalDosage($this->getTotalDosage());
        $copyObj->setApplicationTypeNr($this->getApplicationTypeNr());
        $copyObj->setNotes($this->getNotes());
        $copyObj->setPrescribeDate($this->getPrescribeDate());
        $copyObj->setPrescriber($this->getPrescriber());
        $copyObj->setTaken($this->getTaken());
        $copyObj->setColorMarker($this->getColorMarker());
        $copyObj->setIsStopped($this->getIsStopped());
        $copyObj->setIsOutpatientPrescription($this->getIsOutpatientPrescription());
        $copyObj->setIssuer($this->getIssuer());
        $copyObj->setIssueDate($this->getIssueDate());
        $copyObj->setIsDisabled($this->getIsDisabled());
        $copyObj->setDisableId($this->getDisableId());
        $copyObj->setDisableDate($this->getDisableDate());
        $copyObj->setStopDate($this->getStopDate());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setBillNumber($this->getBillNumber());
        $copyObj->setBillStatus($this->getBillStatus());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setPriority($this->getPriority());
        $copyObj->setSubStore($this->getSubStore());
        $copyObj->setInWeberp($this->getInWeberp());
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
     * @return \CareMd\CareMd\CareEncounterPrescription Clone of current object.
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
        $this->encounter_nr = null;
        $this->prescription_type_nr = null;
        $this->article = null;
        $this->article_item_number = null;
        $this->partcode = null;
        $this->mark_os = null;
        $this->materialcost = null;
        $this->price = null;
        $this->drug_class = null;
        $this->order_nr = null;
        $this->dosage = null;
        $this->times_per_day = null;
        $this->days = null;
        $this->total_dosage = null;
        $this->application_type_nr = null;
        $this->notes = null;
        $this->prescribe_date = null;
        $this->prescriber = null;
        $this->taken = null;
        $this->color_marker = null;
        $this->is_stopped = null;
        $this->is_outpatient_prescription = null;
        $this->issuer = null;
        $this->issue_date = null;
        $this->is_disabled = null;
        $this->disable_id = null;
        $this->disable_date = null;
        $this->stop_date = null;
        $this->status = null;
        $this->history = null;
        $this->bill_number = null;
        $this->bill_status = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->create_id = null;
        $this->create_time = null;
        $this->priority = null;
        $this->sub_store = null;
        $this->in_weberp = null;
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
        return (string) $this->exportTo(CareEncounterPrescriptionTableMap::DEFAULT_STRING_FORMAT);
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
