<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CarePregnancyQuery as ChildCarePregnancyQuery;
use CareMd\CareMd\Map\CarePregnancyTableMap;
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
 * Base class that represents a row from the 'care_pregnancy' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CarePregnancy implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CarePregnancyTableMap';


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
     * The value for the this_pregnancy_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $this_pregnancy_nr;

    /**
     * The value for the delivery_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $delivery_date;

    /**
     * The value for the delivery_time field.
     *
     * Note: this column has a database default value of: '00:00:00.000000'
     * @var        DateTime
     */
    protected $delivery_time;

    /**
     * The value for the gravida field.
     *
     * @var        int
     */
    protected $gravida;

    /**
     * The value for the para field.
     *
     * @var        int
     */
    protected $para;

    /**
     * The value for the pregnancy_gestational_age field.
     *
     * @var        int
     */
    protected $pregnancy_gestational_age;

    /**
     * The value for the nr_of_fetuses field.
     *
     * @var        int
     */
    protected $nr_of_fetuses;

    /**
     * The value for the child_encounter_nr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $child_encounter_nr;

    /**
     * The value for the is_booked field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_booked;

    /**
     * The value for the vdrl field.
     *
     * @var        string
     */
    protected $vdrl;

    /**
     * The value for the rh field.
     *
     * @var        boolean
     */
    protected $rh;

    /**
     * The value for the delivery_mode field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $delivery_mode;

    /**
     * The value for the delivery_by field.
     *
     * @var        string
     */
    protected $delivery_by;

    /**
     * The value for the bp_systolic_high field.
     *
     * @var        int
     */
    protected $bp_systolic_high;

    /**
     * The value for the bp_diastolic_high field.
     *
     * @var        int
     */
    protected $bp_diastolic_high;

    /**
     * The value for the proteinuria field.
     *
     * @var        boolean
     */
    protected $proteinuria;

    /**
     * The value for the labour_duration field.
     *
     * @var        int
     */
    protected $labour_duration;

    /**
     * The value for the induction_method field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $induction_method;

    /**
     * The value for the induction_indication field.
     *
     * @var        string
     */
    protected $induction_indication;

    /**
     * The value for the anaesth_type_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $anaesth_type_nr;

    /**
     * The value for the is_epidural field.
     *
     * @var        string
     */
    protected $is_epidural;

    /**
     * The value for the complications field.
     *
     * @var        string
     */
    protected $complications;

    /**
     * The value for the perineum field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $perineum;

    /**
     * The value for the blood_loss field.
     *
     * @var        double
     */
    protected $blood_loss;

    /**
     * The value for the blood_loss_unit field.
     *
     * @var        string
     */
    protected $blood_loss_unit;

    /**
     * The value for the is_retained_placenta field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $is_retained_placenta;

    /**
     * The value for the post_labour_condition field.
     *
     * @var        string
     */
    protected $post_labour_condition;

    /**
     * The value for the outcome field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $outcome;

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
        $this->this_pregnancy_nr = 0;
        $this->delivery_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->delivery_time = PropelDateTime::newInstance('00:00:00.000000', null, 'DateTime');
        $this->child_encounter_nr = '';
        $this->is_booked = false;
        $this->delivery_mode = 0;
        $this->induction_method = 0;
        $this->anaesth_type_nr = 0;
        $this->perineum = 0;
        $this->is_retained_placenta = '';
        $this->outcome = '';
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CarePregnancy object.
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
     * Compares this with another <code>CarePregnancy</code> instance.  If
     * <code>obj</code> is an instance of <code>CarePregnancy</code>, delegates to
     * <code>equals(CarePregnancy)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CarePregnancy The current object, for fluid interface
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
     * Get the [this_pregnancy_nr] column value.
     *
     * @return int
     */
    public function getThisPregnancyNr()
    {
        return $this->this_pregnancy_nr;
    }

    /**
     * Get the [optionally formatted] temporal [delivery_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDeliveryDate($format = NULL)
    {
        if ($format === null) {
            return $this->delivery_date;
        } else {
            return $this->delivery_date instanceof \DateTimeInterface ? $this->delivery_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [delivery_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDeliveryTime($format = NULL)
    {
        if ($format === null) {
            return $this->delivery_time;
        } else {
            return $this->delivery_time instanceof \DateTimeInterface ? $this->delivery_time->format($format) : null;
        }
    }

    /**
     * Get the [gravida] column value.
     *
     * @return int
     */
    public function getGravida()
    {
        return $this->gravida;
    }

    /**
     * Get the [para] column value.
     *
     * @return int
     */
    public function getPara()
    {
        return $this->para;
    }

    /**
     * Get the [pregnancy_gestational_age] column value.
     *
     * @return int
     */
    public function getPregnancyGestationalAge()
    {
        return $this->pregnancy_gestational_age;
    }

    /**
     * Get the [nr_of_fetuses] column value.
     *
     * @return int
     */
    public function getNrOfFetuses()
    {
        return $this->nr_of_fetuses;
    }

    /**
     * Get the [child_encounter_nr] column value.
     *
     * @return string
     */
    public function getChildEncounterNr()
    {
        return $this->child_encounter_nr;
    }

    /**
     * Get the [is_booked] column value.
     *
     * @return boolean
     */
    public function getIsBooked()
    {
        return $this->is_booked;
    }

    /**
     * Get the [is_booked] column value.
     *
     * @return boolean
     */
    public function isBooked()
    {
        return $this->getIsBooked();
    }

    /**
     * Get the [vdrl] column value.
     *
     * @return string
     */
    public function getVdrl()
    {
        return $this->vdrl;
    }

    /**
     * Get the [rh] column value.
     *
     * @return boolean
     */
    public function getRh()
    {
        return $this->rh;
    }

    /**
     * Get the [rh] column value.
     *
     * @return boolean
     */
    public function isRh()
    {
        return $this->getRh();
    }

    /**
     * Get the [delivery_mode] column value.
     *
     * @return int
     */
    public function getDeliveryMode()
    {
        return $this->delivery_mode;
    }

    /**
     * Get the [delivery_by] column value.
     *
     * @return string
     */
    public function getDeliveryBy()
    {
        return $this->delivery_by;
    }

    /**
     * Get the [bp_systolic_high] column value.
     *
     * @return int
     */
    public function getBpSystolicHigh()
    {
        return $this->bp_systolic_high;
    }

    /**
     * Get the [bp_diastolic_high] column value.
     *
     * @return int
     */
    public function getBpDiastolicHigh()
    {
        return $this->bp_diastolic_high;
    }

    /**
     * Get the [proteinuria] column value.
     *
     * @return boolean
     */
    public function getProteinuria()
    {
        return $this->proteinuria;
    }

    /**
     * Get the [proteinuria] column value.
     *
     * @return boolean
     */
    public function isProteinuria()
    {
        return $this->getProteinuria();
    }

    /**
     * Get the [labour_duration] column value.
     *
     * @return int
     */
    public function getLabourDuration()
    {
        return $this->labour_duration;
    }

    /**
     * Get the [induction_method] column value.
     *
     * @return int
     */
    public function getInductionMethod()
    {
        return $this->induction_method;
    }

    /**
     * Get the [induction_indication] column value.
     *
     * @return string
     */
    public function getInductionIndication()
    {
        return $this->induction_indication;
    }

    /**
     * Get the [anaesth_type_nr] column value.
     *
     * @return int
     */
    public function getAnaesthTypeNr()
    {
        return $this->anaesth_type_nr;
    }

    /**
     * Get the [is_epidural] column value.
     *
     * @return string
     */
    public function getIsEpidural()
    {
        return $this->is_epidural;
    }

    /**
     * Get the [complications] column value.
     *
     * @return string
     */
    public function getComplications()
    {
        return $this->complications;
    }

    /**
     * Get the [perineum] column value.
     *
     * @return int
     */
    public function getPerineum()
    {
        return $this->perineum;
    }

    /**
     * Get the [blood_loss] column value.
     *
     * @return double
     */
    public function getBloodLoss()
    {
        return $this->blood_loss;
    }

    /**
     * Get the [blood_loss_unit] column value.
     *
     * @return string
     */
    public function getBloodLossUnit()
    {
        return $this->blood_loss_unit;
    }

    /**
     * Get the [is_retained_placenta] column value.
     *
     * @return string
     */
    public function getIsRetainedPlacenta()
    {
        return $this->is_retained_placenta;
    }

    /**
     * Get the [post_labour_condition] column value.
     *
     * @return string
     */
    public function getPostLabourCondition()
    {
        return $this->post_labour_condition;
    }

    /**
     * Get the [outcome] column value.
     *
     * @return string
     */
    public function getOutcome()
    {
        return $this->outcome;
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
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [this_pregnancy_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setThisPregnancyNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->this_pregnancy_nr !== $v) {
            $this->this_pregnancy_nr = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_THIS_PREGNANCY_NR] = true;
        }

        return $this;
    } // setThisPregnancyNr()

    /**
     * Sets the value of [delivery_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setDeliveryDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->delivery_date !== null || $dt !== null) {
            if ( ($dt != $this->delivery_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->delivery_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePregnancyTableMap::COL_DELIVERY_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDeliveryDate()

    /**
     * Sets the value of [delivery_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setDeliveryTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->delivery_time !== null || $dt !== null) {
            if ( ($dt != $this->delivery_time) // normalized values don't match
                || ($dt->format('H:i:s.u') === '00:00:00.000000') // or the entered value matches the default
                 ) {
                $this->delivery_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePregnancyTableMap::COL_DELIVERY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setDeliveryTime()

    /**
     * Set the value of [gravida] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setGravida($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->gravida !== $v) {
            $this->gravida = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_GRAVIDA] = true;
        }

        return $this;
    } // setGravida()

    /**
     * Set the value of [para] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setPara($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->para !== $v) {
            $this->para = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_PARA] = true;
        }

        return $this;
    } // setPara()

    /**
     * Set the value of [pregnancy_gestational_age] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setPregnancyGestationalAge($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pregnancy_gestational_age !== $v) {
            $this->pregnancy_gestational_age = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_PREGNANCY_GESTATIONAL_AGE] = true;
        }

        return $this;
    } // setPregnancyGestationalAge()

    /**
     * Set the value of [nr_of_fetuses] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setNrOfFetuses($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr_of_fetuses !== $v) {
            $this->nr_of_fetuses = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_NR_OF_FETUSES] = true;
        }

        return $this;
    } // setNrOfFetuses()

    /**
     * Set the value of [child_encounter_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setChildEncounterNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->child_encounter_nr !== $v) {
            $this->child_encounter_nr = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_CHILD_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setChildEncounterNr()

    /**
     * Sets the value of the [is_booked] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setIsBooked($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_booked !== $v) {
            $this->is_booked = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_IS_BOOKED] = true;
        }

        return $this;
    } // setIsBooked()

    /**
     * Set the value of [vdrl] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setVdrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vdrl !== $v) {
            $this->vdrl = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_VDRL] = true;
        }

        return $this;
    } // setVdrl()

    /**
     * Sets the value of the [rh] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setRh($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rh !== $v) {
            $this->rh = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_RH] = true;
        }

        return $this;
    } // setRh()

    /**
     * Set the value of [delivery_mode] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setDeliveryMode($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->delivery_mode !== $v) {
            $this->delivery_mode = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_DELIVERY_MODE] = true;
        }

        return $this;
    } // setDeliveryMode()

    /**
     * Set the value of [delivery_by] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setDeliveryBy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->delivery_by !== $v) {
            $this->delivery_by = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_DELIVERY_BY] = true;
        }

        return $this;
    } // setDeliveryBy()

    /**
     * Set the value of [bp_systolic_high] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setBpSystolicHigh($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->bp_systolic_high !== $v) {
            $this->bp_systolic_high = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_BP_SYSTOLIC_HIGH] = true;
        }

        return $this;
    } // setBpSystolicHigh()

    /**
     * Set the value of [bp_diastolic_high] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setBpDiastolicHigh($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->bp_diastolic_high !== $v) {
            $this->bp_diastolic_high = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_BP_DIASTOLIC_HIGH] = true;
        }

        return $this;
    } // setBpDiastolicHigh()

    /**
     * Sets the value of the [proteinuria] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setProteinuria($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->proteinuria !== $v) {
            $this->proteinuria = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_PROTEINURIA] = true;
        }

        return $this;
    } // setProteinuria()

    /**
     * Set the value of [labour_duration] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setLabourDuration($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->labour_duration !== $v) {
            $this->labour_duration = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_LABOUR_DURATION] = true;
        }

        return $this;
    } // setLabourDuration()

    /**
     * Set the value of [induction_method] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setInductionMethod($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->induction_method !== $v) {
            $this->induction_method = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_INDUCTION_METHOD] = true;
        }

        return $this;
    } // setInductionMethod()

    /**
     * Set the value of [induction_indication] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setInductionIndication($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->induction_indication !== $v) {
            $this->induction_indication = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_INDUCTION_INDICATION] = true;
        }

        return $this;
    } // setInductionIndication()

    /**
     * Set the value of [anaesth_type_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setAnaesthTypeNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->anaesth_type_nr !== $v) {
            $this->anaesth_type_nr = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_ANAESTH_TYPE_NR] = true;
        }

        return $this;
    } // setAnaesthTypeNr()

    /**
     * Set the value of [is_epidural] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setIsEpidural($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->is_epidural !== $v) {
            $this->is_epidural = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_IS_EPIDURAL] = true;
        }

        return $this;
    } // setIsEpidural()

    /**
     * Set the value of [complications] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setComplications($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->complications !== $v) {
            $this->complications = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_COMPLICATIONS] = true;
        }

        return $this;
    } // setComplications()

    /**
     * Set the value of [perineum] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setPerineum($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->perineum !== $v) {
            $this->perineum = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_PERINEUM] = true;
        }

        return $this;
    } // setPerineum()

    /**
     * Set the value of [blood_loss] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setBloodLoss($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->blood_loss !== $v) {
            $this->blood_loss = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_BLOOD_LOSS] = true;
        }

        return $this;
    } // setBloodLoss()

    /**
     * Set the value of [blood_loss_unit] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setBloodLossUnit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_loss_unit !== $v) {
            $this->blood_loss_unit = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_BLOOD_LOSS_UNIT] = true;
        }

        return $this;
    } // setBloodLossUnit()

    /**
     * Set the value of [is_retained_placenta] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setIsRetainedPlacenta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->is_retained_placenta !== $v) {
            $this->is_retained_placenta = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_IS_RETAINED_PLACENTA] = true;
        }

        return $this;
    } // setIsRetainedPlacenta()

    /**
     * Set the value of [post_labour_condition] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setPostLabourCondition($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_labour_condition !== $v) {
            $this->post_labour_condition = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_POST_LABOUR_CONDITION] = true;
        }

        return $this;
    } // setPostLabourCondition()

    /**
     * Set the value of [outcome] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setOutcome($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->outcome !== $v) {
            $this->outcome = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_OUTCOME] = true;
        }

        return $this;
    } // setOutcome()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePregnancyTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CarePregnancyTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePregnancy The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePregnancyTableMap::COL_CREATE_TIME] = true;
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

            if ($this->this_pregnancy_nr !== 0) {
                return false;
            }

            if ($this->delivery_date && $this->delivery_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->delivery_time && $this->delivery_time->format('H:i:s.u') !== '00:00:00.000000') {
                return false;
            }

            if ($this->child_encounter_nr !== '') {
                return false;
            }

            if ($this->is_booked !== false) {
                return false;
            }

            if ($this->delivery_mode !== 0) {
                return false;
            }

            if ($this->induction_method !== 0) {
                return false;
            }

            if ($this->anaesth_type_nr !== 0) {
                return false;
            }

            if ($this->perineum !== 0) {
                return false;
            }

            if ($this->is_retained_placenta !== '') {
                return false;
            }

            if ($this->outcome !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CarePregnancyTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CarePregnancyTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CarePregnancyTableMap::translateFieldName('ThisPregnancyNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->this_pregnancy_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CarePregnancyTableMap::translateFieldName('DeliveryDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->delivery_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CarePregnancyTableMap::translateFieldName('DeliveryTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->delivery_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CarePregnancyTableMap::translateFieldName('Gravida', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gravida = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CarePregnancyTableMap::translateFieldName('Para', TableMap::TYPE_PHPNAME, $indexType)];
            $this->para = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CarePregnancyTableMap::translateFieldName('PregnancyGestationalAge', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pregnancy_gestational_age = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CarePregnancyTableMap::translateFieldName('NrOfFetuses', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr_of_fetuses = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CarePregnancyTableMap::translateFieldName('ChildEncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->child_encounter_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CarePregnancyTableMap::translateFieldName('IsBooked', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_booked = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CarePregnancyTableMap::translateFieldName('Vdrl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vdrl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CarePregnancyTableMap::translateFieldName('Rh', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rh = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CarePregnancyTableMap::translateFieldName('DeliveryMode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->delivery_mode = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CarePregnancyTableMap::translateFieldName('DeliveryBy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->delivery_by = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CarePregnancyTableMap::translateFieldName('BpSystolicHigh', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bp_systolic_high = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CarePregnancyTableMap::translateFieldName('BpDiastolicHigh', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bp_diastolic_high = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CarePregnancyTableMap::translateFieldName('Proteinuria', TableMap::TYPE_PHPNAME, $indexType)];
            $this->proteinuria = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CarePregnancyTableMap::translateFieldName('LabourDuration', TableMap::TYPE_PHPNAME, $indexType)];
            $this->labour_duration = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CarePregnancyTableMap::translateFieldName('InductionMethod', TableMap::TYPE_PHPNAME, $indexType)];
            $this->induction_method = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CarePregnancyTableMap::translateFieldName('InductionIndication', TableMap::TYPE_PHPNAME, $indexType)];
            $this->induction_indication = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CarePregnancyTableMap::translateFieldName('AnaesthTypeNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->anaesth_type_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CarePregnancyTableMap::translateFieldName('IsEpidural', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_epidural = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CarePregnancyTableMap::translateFieldName('Complications', TableMap::TYPE_PHPNAME, $indexType)];
            $this->complications = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CarePregnancyTableMap::translateFieldName('Perineum', TableMap::TYPE_PHPNAME, $indexType)];
            $this->perineum = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CarePregnancyTableMap::translateFieldName('BloodLoss', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_loss = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CarePregnancyTableMap::translateFieldName('BloodLossUnit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_loss_unit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CarePregnancyTableMap::translateFieldName('IsRetainedPlacenta', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_retained_placenta = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CarePregnancyTableMap::translateFieldName('PostLabourCondition', TableMap::TYPE_PHPNAME, $indexType)];
            $this->post_labour_condition = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CarePregnancyTableMap::translateFieldName('Outcome', TableMap::TYPE_PHPNAME, $indexType)];
            $this->outcome = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CarePregnancyTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CarePregnancyTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CarePregnancyTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CarePregnancyTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CarePregnancyTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CarePregnancyTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 36; // 36 = CarePregnancyTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CarePregnancy'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CarePregnancyTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCarePregnancyQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CarePregnancy::setDeleted()
     * @see CarePregnancy::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePregnancyTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCarePregnancyQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePregnancyTableMap::DATABASE_NAME);
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
                CarePregnancyTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CarePregnancyTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CarePregnancyTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CarePregnancyTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_THIS_PREGNANCY_NR)) {
            $modifiedColumns[':p' . $index++]  = 'this_pregnancy_nr';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_DELIVERY_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'delivery_date';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_DELIVERY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'delivery_time';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_GRAVIDA)) {
            $modifiedColumns[':p' . $index++]  = 'gravida';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_PARA)) {
            $modifiedColumns[':p' . $index++]  = 'para';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_PREGNANCY_GESTATIONAL_AGE)) {
            $modifiedColumns[':p' . $index++]  = 'pregnancy_gestational_age';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_NR_OF_FETUSES)) {
            $modifiedColumns[':p' . $index++]  = 'nr_of_fetuses';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_CHILD_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'child_encounter_nr';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_IS_BOOKED)) {
            $modifiedColumns[':p' . $index++]  = 'is_booked';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_VDRL)) {
            $modifiedColumns[':p' . $index++]  = 'vdrl';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_RH)) {
            $modifiedColumns[':p' . $index++]  = 'rh';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_DELIVERY_MODE)) {
            $modifiedColumns[':p' . $index++]  = 'delivery_mode';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_DELIVERY_BY)) {
            $modifiedColumns[':p' . $index++]  = 'delivery_by';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_BP_SYSTOLIC_HIGH)) {
            $modifiedColumns[':p' . $index++]  = 'bp_systolic_high';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_BP_DIASTOLIC_HIGH)) {
            $modifiedColumns[':p' . $index++]  = 'bp_diastolic_high';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_PROTEINURIA)) {
            $modifiedColumns[':p' . $index++]  = 'proteinuria';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_LABOUR_DURATION)) {
            $modifiedColumns[':p' . $index++]  = 'labour_duration';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_INDUCTION_METHOD)) {
            $modifiedColumns[':p' . $index++]  = 'induction_method';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_INDUCTION_INDICATION)) {
            $modifiedColumns[':p' . $index++]  = 'induction_indication';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_ANAESTH_TYPE_NR)) {
            $modifiedColumns[':p' . $index++]  = 'anaesth_type_nr';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_IS_EPIDURAL)) {
            $modifiedColumns[':p' . $index++]  = 'is_epidural';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_COMPLICATIONS)) {
            $modifiedColumns[':p' . $index++]  = 'complications';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_PERINEUM)) {
            $modifiedColumns[':p' . $index++]  = 'perineum';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_BLOOD_LOSS)) {
            $modifiedColumns[':p' . $index++]  = 'blood_loss';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_BLOOD_LOSS_UNIT)) {
            $modifiedColumns[':p' . $index++]  = 'blood_loss_unit';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_IS_RETAINED_PLACENTA)) {
            $modifiedColumns[':p' . $index++]  = 'is_retained_placenta';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_POST_LABOUR_CONDITION)) {
            $modifiedColumns[':p' . $index++]  = 'post_labour_condition';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_OUTCOME)) {
            $modifiedColumns[':p' . $index++]  = 'outcome';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_pregnancy (%s) VALUES (%s)',
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
                    case 'this_pregnancy_nr':
                        $stmt->bindValue($identifier, $this->this_pregnancy_nr, PDO::PARAM_INT);
                        break;
                    case 'delivery_date':
                        $stmt->bindValue($identifier, $this->delivery_date ? $this->delivery_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'delivery_time':
                        $stmt->bindValue($identifier, $this->delivery_time ? $this->delivery_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'gravida':
                        $stmt->bindValue($identifier, $this->gravida, PDO::PARAM_INT);
                        break;
                    case 'para':
                        $stmt->bindValue($identifier, $this->para, PDO::PARAM_INT);
                        break;
                    case 'pregnancy_gestational_age':
                        $stmt->bindValue($identifier, $this->pregnancy_gestational_age, PDO::PARAM_INT);
                        break;
                    case 'nr_of_fetuses':
                        $stmt->bindValue($identifier, $this->nr_of_fetuses, PDO::PARAM_INT);
                        break;
                    case 'child_encounter_nr':
                        $stmt->bindValue($identifier, $this->child_encounter_nr, PDO::PARAM_STR);
                        break;
                    case 'is_booked':
                        $stmt->bindValue($identifier, (int) $this->is_booked, PDO::PARAM_INT);
                        break;
                    case 'vdrl':
                        $stmt->bindValue($identifier, $this->vdrl, PDO::PARAM_STR);
                        break;
                    case 'rh':
                        $stmt->bindValue($identifier, (int) $this->rh, PDO::PARAM_INT);
                        break;
                    case 'delivery_mode':
                        $stmt->bindValue($identifier, $this->delivery_mode, PDO::PARAM_INT);
                        break;
                    case 'delivery_by':
                        $stmt->bindValue($identifier, $this->delivery_by, PDO::PARAM_STR);
                        break;
                    case 'bp_systolic_high':
                        $stmt->bindValue($identifier, $this->bp_systolic_high, PDO::PARAM_INT);
                        break;
                    case 'bp_diastolic_high':
                        $stmt->bindValue($identifier, $this->bp_diastolic_high, PDO::PARAM_INT);
                        break;
                    case 'proteinuria':
                        $stmt->bindValue($identifier, (int) $this->proteinuria, PDO::PARAM_INT);
                        break;
                    case 'labour_duration':
                        $stmt->bindValue($identifier, $this->labour_duration, PDO::PARAM_INT);
                        break;
                    case 'induction_method':
                        $stmt->bindValue($identifier, $this->induction_method, PDO::PARAM_INT);
                        break;
                    case 'induction_indication':
                        $stmt->bindValue($identifier, $this->induction_indication, PDO::PARAM_STR);
                        break;
                    case 'anaesth_type_nr':
                        $stmt->bindValue($identifier, $this->anaesth_type_nr, PDO::PARAM_INT);
                        break;
                    case 'is_epidural':
                        $stmt->bindValue($identifier, $this->is_epidural, PDO::PARAM_STR);
                        break;
                    case 'complications':
                        $stmt->bindValue($identifier, $this->complications, PDO::PARAM_STR);
                        break;
                    case 'perineum':
                        $stmt->bindValue($identifier, $this->perineum, PDO::PARAM_INT);
                        break;
                    case 'blood_loss':
                        $stmt->bindValue($identifier, $this->blood_loss, PDO::PARAM_STR);
                        break;
                    case 'blood_loss_unit':
                        $stmt->bindValue($identifier, $this->blood_loss_unit, PDO::PARAM_STR);
                        break;
                    case 'is_retained_placenta':
                        $stmt->bindValue($identifier, $this->is_retained_placenta, PDO::PARAM_STR);
                        break;
                    case 'post_labour_condition':
                        $stmt->bindValue($identifier, $this->post_labour_condition, PDO::PARAM_STR);
                        break;
                    case 'outcome':
                        $stmt->bindValue($identifier, $this->outcome, PDO::PARAM_STR);
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
        $pos = CarePregnancyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getThisPregnancyNr();
                break;
            case 3:
                return $this->getDeliveryDate();
                break;
            case 4:
                return $this->getDeliveryTime();
                break;
            case 5:
                return $this->getGravida();
                break;
            case 6:
                return $this->getPara();
                break;
            case 7:
                return $this->getPregnancyGestationalAge();
                break;
            case 8:
                return $this->getNrOfFetuses();
                break;
            case 9:
                return $this->getChildEncounterNr();
                break;
            case 10:
                return $this->getIsBooked();
                break;
            case 11:
                return $this->getVdrl();
                break;
            case 12:
                return $this->getRh();
                break;
            case 13:
                return $this->getDeliveryMode();
                break;
            case 14:
                return $this->getDeliveryBy();
                break;
            case 15:
                return $this->getBpSystolicHigh();
                break;
            case 16:
                return $this->getBpDiastolicHigh();
                break;
            case 17:
                return $this->getProteinuria();
                break;
            case 18:
                return $this->getLabourDuration();
                break;
            case 19:
                return $this->getInductionMethod();
                break;
            case 20:
                return $this->getInductionIndication();
                break;
            case 21:
                return $this->getAnaesthTypeNr();
                break;
            case 22:
                return $this->getIsEpidural();
                break;
            case 23:
                return $this->getComplications();
                break;
            case 24:
                return $this->getPerineum();
                break;
            case 25:
                return $this->getBloodLoss();
                break;
            case 26:
                return $this->getBloodLossUnit();
                break;
            case 27:
                return $this->getIsRetainedPlacenta();
                break;
            case 28:
                return $this->getPostLabourCondition();
                break;
            case 29:
                return $this->getOutcome();
                break;
            case 30:
                return $this->getStatus();
                break;
            case 31:
                return $this->getHistory();
                break;
            case 32:
                return $this->getModifyId();
                break;
            case 33:
                return $this->getModifyTime();
                break;
            case 34:
                return $this->getCreateId();
                break;
            case 35:
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

        if (isset($alreadyDumpedObjects['CarePregnancy'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CarePregnancy'][$this->hashCode()] = true;
        $keys = CarePregnancyTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getEncounterNr(),
            $keys[2] => $this->getThisPregnancyNr(),
            $keys[3] => $this->getDeliveryDate(),
            $keys[4] => $this->getDeliveryTime(),
            $keys[5] => $this->getGravida(),
            $keys[6] => $this->getPara(),
            $keys[7] => $this->getPregnancyGestationalAge(),
            $keys[8] => $this->getNrOfFetuses(),
            $keys[9] => $this->getChildEncounterNr(),
            $keys[10] => $this->getIsBooked(),
            $keys[11] => $this->getVdrl(),
            $keys[12] => $this->getRh(),
            $keys[13] => $this->getDeliveryMode(),
            $keys[14] => $this->getDeliveryBy(),
            $keys[15] => $this->getBpSystolicHigh(),
            $keys[16] => $this->getBpDiastolicHigh(),
            $keys[17] => $this->getProteinuria(),
            $keys[18] => $this->getLabourDuration(),
            $keys[19] => $this->getInductionMethod(),
            $keys[20] => $this->getInductionIndication(),
            $keys[21] => $this->getAnaesthTypeNr(),
            $keys[22] => $this->getIsEpidural(),
            $keys[23] => $this->getComplications(),
            $keys[24] => $this->getPerineum(),
            $keys[25] => $this->getBloodLoss(),
            $keys[26] => $this->getBloodLossUnit(),
            $keys[27] => $this->getIsRetainedPlacenta(),
            $keys[28] => $this->getPostLabourCondition(),
            $keys[29] => $this->getOutcome(),
            $keys[30] => $this->getStatus(),
            $keys[31] => $this->getHistory(),
            $keys[32] => $this->getModifyId(),
            $keys[33] => $this->getModifyTime(),
            $keys[34] => $this->getCreateId(),
            $keys[35] => $this->getCreateTime(),
        );
        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('c');
        }

        if ($result[$keys[4]] instanceof \DateTimeInterface) {
            $result[$keys[4]] = $result[$keys[4]]->format('c');
        }

        if ($result[$keys[33]] instanceof \DateTimeInterface) {
            $result[$keys[33]] = $result[$keys[33]]->format('c');
        }

        if ($result[$keys[35]] instanceof \DateTimeInterface) {
            $result[$keys[35]] = $result[$keys[35]]->format('c');
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
     * @return $this|\CareMd\CareMd\CarePregnancy
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CarePregnancyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CarePregnancy
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
                $this->setThisPregnancyNr($value);
                break;
            case 3:
                $this->setDeliveryDate($value);
                break;
            case 4:
                $this->setDeliveryTime($value);
                break;
            case 5:
                $this->setGravida($value);
                break;
            case 6:
                $this->setPara($value);
                break;
            case 7:
                $this->setPregnancyGestationalAge($value);
                break;
            case 8:
                $this->setNrOfFetuses($value);
                break;
            case 9:
                $this->setChildEncounterNr($value);
                break;
            case 10:
                $this->setIsBooked($value);
                break;
            case 11:
                $this->setVdrl($value);
                break;
            case 12:
                $this->setRh($value);
                break;
            case 13:
                $this->setDeliveryMode($value);
                break;
            case 14:
                $this->setDeliveryBy($value);
                break;
            case 15:
                $this->setBpSystolicHigh($value);
                break;
            case 16:
                $this->setBpDiastolicHigh($value);
                break;
            case 17:
                $this->setProteinuria($value);
                break;
            case 18:
                $this->setLabourDuration($value);
                break;
            case 19:
                $this->setInductionMethod($value);
                break;
            case 20:
                $this->setInductionIndication($value);
                break;
            case 21:
                $this->setAnaesthTypeNr($value);
                break;
            case 22:
                $this->setIsEpidural($value);
                break;
            case 23:
                $this->setComplications($value);
                break;
            case 24:
                $this->setPerineum($value);
                break;
            case 25:
                $this->setBloodLoss($value);
                break;
            case 26:
                $this->setBloodLossUnit($value);
                break;
            case 27:
                $this->setIsRetainedPlacenta($value);
                break;
            case 28:
                $this->setPostLabourCondition($value);
                break;
            case 29:
                $this->setOutcome($value);
                break;
            case 30:
                $this->setStatus($value);
                break;
            case 31:
                $this->setHistory($value);
                break;
            case 32:
                $this->setModifyId($value);
                break;
            case 33:
                $this->setModifyTime($value);
                break;
            case 34:
                $this->setCreateId($value);
                break;
            case 35:
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
        $keys = CarePregnancyTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setThisPregnancyNr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setDeliveryDate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDeliveryTime($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setGravida($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPara($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPregnancyGestationalAge($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setNrOfFetuses($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setChildEncounterNr($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIsBooked($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setVdrl($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setRh($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setDeliveryMode($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setDeliveryBy($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setBpSystolicHigh($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setBpDiastolicHigh($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setProteinuria($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setLabourDuration($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setInductionMethod($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setInductionIndication($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setAnaesthTypeNr($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setIsEpidural($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setComplications($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setPerineum($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setBloodLoss($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setBloodLossUnit($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setIsRetainedPlacenta($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setPostLabourCondition($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setOutcome($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setStatus($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setHistory($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setModifyId($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setModifyTime($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setCreateId($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setCreateTime($arr[$keys[35]]);
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
     * @return $this|\CareMd\CareMd\CarePregnancy The current object, for fluid interface
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
        $criteria = new Criteria(CarePregnancyTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CarePregnancyTableMap::COL_NR)) {
            $criteria->add(CarePregnancyTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CarePregnancyTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_THIS_PREGNANCY_NR)) {
            $criteria->add(CarePregnancyTableMap::COL_THIS_PREGNANCY_NR, $this->this_pregnancy_nr);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_DELIVERY_DATE)) {
            $criteria->add(CarePregnancyTableMap::COL_DELIVERY_DATE, $this->delivery_date);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_DELIVERY_TIME)) {
            $criteria->add(CarePregnancyTableMap::COL_DELIVERY_TIME, $this->delivery_time);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_GRAVIDA)) {
            $criteria->add(CarePregnancyTableMap::COL_GRAVIDA, $this->gravida);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_PARA)) {
            $criteria->add(CarePregnancyTableMap::COL_PARA, $this->para);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_PREGNANCY_GESTATIONAL_AGE)) {
            $criteria->add(CarePregnancyTableMap::COL_PREGNANCY_GESTATIONAL_AGE, $this->pregnancy_gestational_age);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_NR_OF_FETUSES)) {
            $criteria->add(CarePregnancyTableMap::COL_NR_OF_FETUSES, $this->nr_of_fetuses);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_CHILD_ENCOUNTER_NR)) {
            $criteria->add(CarePregnancyTableMap::COL_CHILD_ENCOUNTER_NR, $this->child_encounter_nr);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_IS_BOOKED)) {
            $criteria->add(CarePregnancyTableMap::COL_IS_BOOKED, $this->is_booked);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_VDRL)) {
            $criteria->add(CarePregnancyTableMap::COL_VDRL, $this->vdrl);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_RH)) {
            $criteria->add(CarePregnancyTableMap::COL_RH, $this->rh);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_DELIVERY_MODE)) {
            $criteria->add(CarePregnancyTableMap::COL_DELIVERY_MODE, $this->delivery_mode);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_DELIVERY_BY)) {
            $criteria->add(CarePregnancyTableMap::COL_DELIVERY_BY, $this->delivery_by);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_BP_SYSTOLIC_HIGH)) {
            $criteria->add(CarePregnancyTableMap::COL_BP_SYSTOLIC_HIGH, $this->bp_systolic_high);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_BP_DIASTOLIC_HIGH)) {
            $criteria->add(CarePregnancyTableMap::COL_BP_DIASTOLIC_HIGH, $this->bp_diastolic_high);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_PROTEINURIA)) {
            $criteria->add(CarePregnancyTableMap::COL_PROTEINURIA, $this->proteinuria);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_LABOUR_DURATION)) {
            $criteria->add(CarePregnancyTableMap::COL_LABOUR_DURATION, $this->labour_duration);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_INDUCTION_METHOD)) {
            $criteria->add(CarePregnancyTableMap::COL_INDUCTION_METHOD, $this->induction_method);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_INDUCTION_INDICATION)) {
            $criteria->add(CarePregnancyTableMap::COL_INDUCTION_INDICATION, $this->induction_indication);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_ANAESTH_TYPE_NR)) {
            $criteria->add(CarePregnancyTableMap::COL_ANAESTH_TYPE_NR, $this->anaesth_type_nr);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_IS_EPIDURAL)) {
            $criteria->add(CarePregnancyTableMap::COL_IS_EPIDURAL, $this->is_epidural);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_COMPLICATIONS)) {
            $criteria->add(CarePregnancyTableMap::COL_COMPLICATIONS, $this->complications);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_PERINEUM)) {
            $criteria->add(CarePregnancyTableMap::COL_PERINEUM, $this->perineum);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_BLOOD_LOSS)) {
            $criteria->add(CarePregnancyTableMap::COL_BLOOD_LOSS, $this->blood_loss);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_BLOOD_LOSS_UNIT)) {
            $criteria->add(CarePregnancyTableMap::COL_BLOOD_LOSS_UNIT, $this->blood_loss_unit);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_IS_RETAINED_PLACENTA)) {
            $criteria->add(CarePregnancyTableMap::COL_IS_RETAINED_PLACENTA, $this->is_retained_placenta);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_POST_LABOUR_CONDITION)) {
            $criteria->add(CarePregnancyTableMap::COL_POST_LABOUR_CONDITION, $this->post_labour_condition);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_OUTCOME)) {
            $criteria->add(CarePregnancyTableMap::COL_OUTCOME, $this->outcome);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_STATUS)) {
            $criteria->add(CarePregnancyTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_HISTORY)) {
            $criteria->add(CarePregnancyTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_MODIFY_ID)) {
            $criteria->add(CarePregnancyTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CarePregnancyTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_CREATE_ID)) {
            $criteria->add(CarePregnancyTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CarePregnancyTableMap::COL_CREATE_TIME)) {
            $criteria->add(CarePregnancyTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCarePregnancyQuery::create();
        $criteria->add(CarePregnancyTableMap::COL_NR, $this->nr);
        $criteria->add(CarePregnancyTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);

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
            null !== $this->getEncounterNr();

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
        $pks[1] = $this->getEncounterNr();

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
        $this->setEncounterNr($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getNr()) && (null === $this->getEncounterNr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CarePregnancy (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setThisPregnancyNr($this->getThisPregnancyNr());
        $copyObj->setDeliveryDate($this->getDeliveryDate());
        $copyObj->setDeliveryTime($this->getDeliveryTime());
        $copyObj->setGravida($this->getGravida());
        $copyObj->setPara($this->getPara());
        $copyObj->setPregnancyGestationalAge($this->getPregnancyGestationalAge());
        $copyObj->setNrOfFetuses($this->getNrOfFetuses());
        $copyObj->setChildEncounterNr($this->getChildEncounterNr());
        $copyObj->setIsBooked($this->getIsBooked());
        $copyObj->setVdrl($this->getVdrl());
        $copyObj->setRh($this->getRh());
        $copyObj->setDeliveryMode($this->getDeliveryMode());
        $copyObj->setDeliveryBy($this->getDeliveryBy());
        $copyObj->setBpSystolicHigh($this->getBpSystolicHigh());
        $copyObj->setBpDiastolicHigh($this->getBpDiastolicHigh());
        $copyObj->setProteinuria($this->getProteinuria());
        $copyObj->setLabourDuration($this->getLabourDuration());
        $copyObj->setInductionMethod($this->getInductionMethod());
        $copyObj->setInductionIndication($this->getInductionIndication());
        $copyObj->setAnaesthTypeNr($this->getAnaesthTypeNr());
        $copyObj->setIsEpidural($this->getIsEpidural());
        $copyObj->setComplications($this->getComplications());
        $copyObj->setPerineum($this->getPerineum());
        $copyObj->setBloodLoss($this->getBloodLoss());
        $copyObj->setBloodLossUnit($this->getBloodLossUnit());
        $copyObj->setIsRetainedPlacenta($this->getIsRetainedPlacenta());
        $copyObj->setPostLabourCondition($this->getPostLabourCondition());
        $copyObj->setOutcome($this->getOutcome());
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
     * @return \CareMd\CareMd\CarePregnancy Clone of current object.
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
        $this->this_pregnancy_nr = null;
        $this->delivery_date = null;
        $this->delivery_time = null;
        $this->gravida = null;
        $this->para = null;
        $this->pregnancy_gestational_age = null;
        $this->nr_of_fetuses = null;
        $this->child_encounter_nr = null;
        $this->is_booked = null;
        $this->vdrl = null;
        $this->rh = null;
        $this->delivery_mode = null;
        $this->delivery_by = null;
        $this->bp_systolic_high = null;
        $this->bp_diastolic_high = null;
        $this->proteinuria = null;
        $this->labour_duration = null;
        $this->induction_method = null;
        $this->induction_indication = null;
        $this->anaesth_type_nr = null;
        $this->is_epidural = null;
        $this->complications = null;
        $this->perineum = null;
        $this->blood_loss = null;
        $this->blood_loss_unit = null;
        $this->is_retained_placenta = null;
        $this->post_labour_condition = null;
        $this->outcome = null;
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
        return (string) $this->exportTo(CarePregnancyTableMap::DEFAULT_STRING_FORMAT);
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
