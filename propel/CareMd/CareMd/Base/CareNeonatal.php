<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareNeonatalQuery as ChildCareNeonatalQuery;
use CareMd\CareMd\Map\CareNeonatalTableMap;
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
 * Base class that represents a row from the 'care_neonatal' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareNeonatal implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareNeonatalTableMap';


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
     * The value for the pid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pid;

    /**
     * The value for the delivery_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $delivery_date;

    /**
     * The value for the parent_encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $parent_encounter_nr;

    /**
     * The value for the delivery_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $delivery_nr;

    /**
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

    /**
     * The value for the delivery_place field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $delivery_place;

    /**
     * The value for the delivery_mode field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $delivery_mode;

    /**
     * The value for the c_s_reason field.
     *
     * @var        string
     */
    protected $c_s_reason;

    /**
     * The value for the born_before_arrival field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $born_before_arrival;

    /**
     * The value for the face_presentation field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $face_presentation;

    /**
     * The value for the posterio_occipital_position field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $posterio_occipital_position;

    /**
     * The value for the delivery_rank field.
     *
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $delivery_rank;

    /**
     * The value for the apgar_1_min field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $apgar_1_min;

    /**
     * The value for the apgar_5_min field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $apgar_5_min;

    /**
     * The value for the apgar_10_min field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $apgar_10_min;

    /**
     * The value for the time_to_spont_resp field.
     *
     * @var        int
     */
    protected $time_to_spont_resp;

    /**
     * The value for the condition field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $condition;

    /**
     * The value for the weight field.
     *
     * @var        double
     */
    protected $weight;

    /**
     * The value for the length field.
     *
     * @var        double
     */
    protected $length;

    /**
     * The value for the head_circumference field.
     *
     * @var        double
     */
    protected $head_circumference;

    /**
     * The value for the scored_gestational_age field.
     *
     * @var        double
     */
    protected $scored_gestational_age;

    /**
     * The value for the feeding field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $feeding;

    /**
     * The value for the congenital_abnormality field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $congenital_abnormality;

    /**
     * The value for the classification field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $classification;

    /**
     * The value for the disease_category field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $disease_category;

    /**
     * The value for the outcome field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
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
        $this->pid = 0;
        $this->delivery_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->parent_encounter_nr = 0;
        $this->delivery_nr = 0;
        $this->encounter_nr = 0;
        $this->delivery_place = '';
        $this->delivery_mode = 0;
        $this->born_before_arrival = false;
        $this->face_presentation = false;
        $this->posterio_occipital_position = false;
        $this->delivery_rank = 1;
        $this->apgar_1_min = 0;
        $this->apgar_5_min = 0;
        $this->apgar_10_min = 0;
        $this->condition = '0';
        $this->feeding = 0;
        $this->congenital_abnormality = '';
        $this->classification = '0';
        $this->disease_category = 0;
        $this->outcome = 0;
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareNeonatal object.
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
     * Compares this with another <code>CareNeonatal</code> instance.  If
     * <code>obj</code> is an instance of <code>CareNeonatal</code>, delegates to
     * <code>equals(CareNeonatal)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareNeonatal The current object, for fluid interface
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
     * Get the [pid] column value.
     *
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
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
     * Get the [parent_encounter_nr] column value.
     *
     * @return int
     */
    public function getParentEncounterNr()
    {
        return $this->parent_encounter_nr;
    }

    /**
     * Get the [delivery_nr] column value.
     *
     * @return int
     */
    public function getDeliveryNr()
    {
        return $this->delivery_nr;
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
     * Get the [delivery_place] column value.
     *
     * @return string
     */
    public function getDeliveryPlace()
    {
        return $this->delivery_place;
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
     * Get the [c_s_reason] column value.
     *
     * @return string
     */
    public function getCSReason()
    {
        return $this->c_s_reason;
    }

    /**
     * Get the [born_before_arrival] column value.
     *
     * @return boolean
     */
    public function getBornBeforeArrival()
    {
        return $this->born_before_arrival;
    }

    /**
     * Get the [born_before_arrival] column value.
     *
     * @return boolean
     */
    public function isBornBeforeArrival()
    {
        return $this->getBornBeforeArrival();
    }

    /**
     * Get the [face_presentation] column value.
     *
     * @return boolean
     */
    public function getFacePresentation()
    {
        return $this->face_presentation;
    }

    /**
     * Get the [face_presentation] column value.
     *
     * @return boolean
     */
    public function isFacePresentation()
    {
        return $this->getFacePresentation();
    }

    /**
     * Get the [posterio_occipital_position] column value.
     *
     * @return boolean
     */
    public function getPosterioOccipitalPosition()
    {
        return $this->posterio_occipital_position;
    }

    /**
     * Get the [posterio_occipital_position] column value.
     *
     * @return boolean
     */
    public function isPosterioOccipitalPosition()
    {
        return $this->getPosterioOccipitalPosition();
    }

    /**
     * Get the [delivery_rank] column value.
     *
     * @return int
     */
    public function getDeliveryRank()
    {
        return $this->delivery_rank;
    }

    /**
     * Get the [apgar_1_min] column value.
     *
     * @return int
     */
    public function getApgar1Min()
    {
        return $this->apgar_1_min;
    }

    /**
     * Get the [apgar_5_min] column value.
     *
     * @return int
     */
    public function getApgar5Min()
    {
        return $this->apgar_5_min;
    }

    /**
     * Get the [apgar_10_min] column value.
     *
     * @return int
     */
    public function getApgar10Min()
    {
        return $this->apgar_10_min;
    }

    /**
     * Get the [time_to_spont_resp] column value.
     *
     * @return int
     */
    public function getTimeToSpontResp()
    {
        return $this->time_to_spont_resp;
    }

    /**
     * Get the [condition] column value.
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
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
     * Get the [length] column value.
     *
     * @return double
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Get the [head_circumference] column value.
     *
     * @return double
     */
    public function getHeadCircumference()
    {
        return $this->head_circumference;
    }

    /**
     * Get the [scored_gestational_age] column value.
     *
     * @return double
     */
    public function getScoredGestationalAge()
    {
        return $this->scored_gestational_age;
    }

    /**
     * Get the [feeding] column value.
     *
     * @return int
     */
    public function getFeeding()
    {
        return $this->feeding;
    }

    /**
     * Get the [congenital_abnormality] column value.
     *
     * @return string
     */
    public function getCongenitalAbnormality()
    {
        return $this->congenital_abnormality;
    }

    /**
     * Get the [classification] column value.
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Get the [disease_category] column value.
     *
     * @return int
     */
    public function getDiseaseCategory()
    {
        return $this->disease_category;
    }

    /**
     * Get the [outcome] column value.
     *
     * @return int
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
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_PID] = true;
        }

        return $this;
    } // setPid()

    /**
     * Sets the value of [delivery_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setDeliveryDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->delivery_date !== null || $dt !== null) {
            if ( ($dt != $this->delivery_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->delivery_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareNeonatalTableMap::COL_DELIVERY_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDeliveryDate()

    /**
     * Set the value of [parent_encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setParentEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->parent_encounter_nr !== $v) {
            $this->parent_encounter_nr = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_PARENT_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setParentEncounterNr()

    /**
     * Set the value of [delivery_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setDeliveryNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->delivery_nr !== $v) {
            $this->delivery_nr = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_DELIVERY_NR] = true;
        }

        return $this;
    } // setDeliveryNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [delivery_place] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setDeliveryPlace($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->delivery_place !== $v) {
            $this->delivery_place = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_DELIVERY_PLACE] = true;
        }

        return $this;
    } // setDeliveryPlace()

    /**
     * Set the value of [delivery_mode] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setDeliveryMode($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->delivery_mode !== $v) {
            $this->delivery_mode = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_DELIVERY_MODE] = true;
        }

        return $this;
    } // setDeliveryMode()

    /**
     * Set the value of [c_s_reason] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setCSReason($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->c_s_reason !== $v) {
            $this->c_s_reason = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_C_S_REASON] = true;
        }

        return $this;
    } // setCSReason()

    /**
     * Sets the value of the [born_before_arrival] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setBornBeforeArrival($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->born_before_arrival !== $v) {
            $this->born_before_arrival = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_BORN_BEFORE_ARRIVAL] = true;
        }

        return $this;
    } // setBornBeforeArrival()

    /**
     * Sets the value of the [face_presentation] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setFacePresentation($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->face_presentation !== $v) {
            $this->face_presentation = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_FACE_PRESENTATION] = true;
        }

        return $this;
    } // setFacePresentation()

    /**
     * Sets the value of the [posterio_occipital_position] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setPosterioOccipitalPosition($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->posterio_occipital_position !== $v) {
            $this->posterio_occipital_position = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_POSTERIO_OCCIPITAL_POSITION] = true;
        }

        return $this;
    } // setPosterioOccipitalPosition()

    /**
     * Set the value of [delivery_rank] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setDeliveryRank($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->delivery_rank !== $v) {
            $this->delivery_rank = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_DELIVERY_RANK] = true;
        }

        return $this;
    } // setDeliveryRank()

    /**
     * Set the value of [apgar_1_min] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setApgar1Min($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apgar_1_min !== $v) {
            $this->apgar_1_min = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_APGAR_1_MIN] = true;
        }

        return $this;
    } // setApgar1Min()

    /**
     * Set the value of [apgar_5_min] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setApgar5Min($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apgar_5_min !== $v) {
            $this->apgar_5_min = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_APGAR_5_MIN] = true;
        }

        return $this;
    } // setApgar5Min()

    /**
     * Set the value of [apgar_10_min] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setApgar10Min($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apgar_10_min !== $v) {
            $this->apgar_10_min = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_APGAR_10_MIN] = true;
        }

        return $this;
    } // setApgar10Min()

    /**
     * Set the value of [time_to_spont_resp] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setTimeToSpontResp($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->time_to_spont_resp !== $v) {
            $this->time_to_spont_resp = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_TIME_TO_SPONT_RESP] = true;
        }

        return $this;
    } // setTimeToSpontResp()

    /**
     * Set the value of [condition] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setCondition($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->condition !== $v) {
            $this->condition = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_CONDITION] = true;
        }

        return $this;
    } // setCondition()

    /**
     * Set the value of [weight] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setWeight($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->weight !== $v) {
            $this->weight = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_WEIGHT] = true;
        }

        return $this;
    } // setWeight()

    /**
     * Set the value of [length] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setLength($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->length !== $v) {
            $this->length = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_LENGTH] = true;
        }

        return $this;
    } // setLength()

    /**
     * Set the value of [head_circumference] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setHeadCircumference($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->head_circumference !== $v) {
            $this->head_circumference = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_HEAD_CIRCUMFERENCE] = true;
        }

        return $this;
    } // setHeadCircumference()

    /**
     * Set the value of [scored_gestational_age] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setScoredGestationalAge($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->scored_gestational_age !== $v) {
            $this->scored_gestational_age = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_SCORED_GESTATIONAL_AGE] = true;
        }

        return $this;
    } // setScoredGestationalAge()

    /**
     * Set the value of [feeding] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setFeeding($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->feeding !== $v) {
            $this->feeding = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_FEEDING] = true;
        }

        return $this;
    } // setFeeding()

    /**
     * Set the value of [congenital_abnormality] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setCongenitalAbnormality($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->congenital_abnormality !== $v) {
            $this->congenital_abnormality = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_CONGENITAL_ABNORMALITY] = true;
        }

        return $this;
    } // setCongenitalAbnormality()

    /**
     * Set the value of [classification] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setClassification($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->classification !== $v) {
            $this->classification = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_CLASSIFICATION] = true;
        }

        return $this;
    } // setClassification()

    /**
     * Set the value of [disease_category] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setDiseaseCategory($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->disease_category !== $v) {
            $this->disease_category = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_DISEASE_CATEGORY] = true;
        }

        return $this;
    } // setDiseaseCategory()

    /**
     * Set the value of [outcome] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setOutcome($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->outcome !== $v) {
            $this->outcome = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_OUTCOME] = true;
        }

        return $this;
    } // setOutcome()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareNeonatalTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareNeonatalTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareNeonatal The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareNeonatalTableMap::COL_CREATE_TIME] = true;
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

            if ($this->delivery_date && $this->delivery_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->parent_encounter_nr !== 0) {
                return false;
            }

            if ($this->delivery_nr !== 0) {
                return false;
            }

            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->delivery_place !== '') {
                return false;
            }

            if ($this->delivery_mode !== 0) {
                return false;
            }

            if ($this->born_before_arrival !== false) {
                return false;
            }

            if ($this->face_presentation !== false) {
                return false;
            }

            if ($this->posterio_occipital_position !== false) {
                return false;
            }

            if ($this->delivery_rank !== 1) {
                return false;
            }

            if ($this->apgar_1_min !== 0) {
                return false;
            }

            if ($this->apgar_5_min !== 0) {
                return false;
            }

            if ($this->apgar_10_min !== 0) {
                return false;
            }

            if ($this->condition !== '0') {
                return false;
            }

            if ($this->feeding !== 0) {
                return false;
            }

            if ($this->congenital_abnormality !== '') {
                return false;
            }

            if ($this->classification !== '0') {
                return false;
            }

            if ($this->disease_category !== 0) {
                return false;
            }

            if ($this->outcome !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareNeonatalTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareNeonatalTableMap::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareNeonatalTableMap::translateFieldName('DeliveryDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->delivery_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareNeonatalTableMap::translateFieldName('ParentEncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->parent_encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareNeonatalTableMap::translateFieldName('DeliveryNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->delivery_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareNeonatalTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareNeonatalTableMap::translateFieldName('DeliveryPlace', TableMap::TYPE_PHPNAME, $indexType)];
            $this->delivery_place = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareNeonatalTableMap::translateFieldName('DeliveryMode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->delivery_mode = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareNeonatalTableMap::translateFieldName('CSReason', TableMap::TYPE_PHPNAME, $indexType)];
            $this->c_s_reason = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareNeonatalTableMap::translateFieldName('BornBeforeArrival', TableMap::TYPE_PHPNAME, $indexType)];
            $this->born_before_arrival = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareNeonatalTableMap::translateFieldName('FacePresentation', TableMap::TYPE_PHPNAME, $indexType)];
            $this->face_presentation = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareNeonatalTableMap::translateFieldName('PosterioOccipitalPosition', TableMap::TYPE_PHPNAME, $indexType)];
            $this->posterio_occipital_position = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareNeonatalTableMap::translateFieldName('DeliveryRank', TableMap::TYPE_PHPNAME, $indexType)];
            $this->delivery_rank = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareNeonatalTableMap::translateFieldName('Apgar1Min', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apgar_1_min = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareNeonatalTableMap::translateFieldName('Apgar5Min', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apgar_5_min = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareNeonatalTableMap::translateFieldName('Apgar10Min', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apgar_10_min = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareNeonatalTableMap::translateFieldName('TimeToSpontResp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->time_to_spont_resp = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareNeonatalTableMap::translateFieldName('Condition', TableMap::TYPE_PHPNAME, $indexType)];
            $this->condition = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareNeonatalTableMap::translateFieldName('Weight', TableMap::TYPE_PHPNAME, $indexType)];
            $this->weight = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareNeonatalTableMap::translateFieldName('Length', TableMap::TYPE_PHPNAME, $indexType)];
            $this->length = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareNeonatalTableMap::translateFieldName('HeadCircumference', TableMap::TYPE_PHPNAME, $indexType)];
            $this->head_circumference = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareNeonatalTableMap::translateFieldName('ScoredGestationalAge', TableMap::TYPE_PHPNAME, $indexType)];
            $this->scored_gestational_age = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareNeonatalTableMap::translateFieldName('Feeding', TableMap::TYPE_PHPNAME, $indexType)];
            $this->feeding = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareNeonatalTableMap::translateFieldName('CongenitalAbnormality', TableMap::TYPE_PHPNAME, $indexType)];
            $this->congenital_abnormality = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareNeonatalTableMap::translateFieldName('Classification', TableMap::TYPE_PHPNAME, $indexType)];
            $this->classification = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareNeonatalTableMap::translateFieldName('DiseaseCategory', TableMap::TYPE_PHPNAME, $indexType)];
            $this->disease_category = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareNeonatalTableMap::translateFieldName('Outcome', TableMap::TYPE_PHPNAME, $indexType)];
            $this->outcome = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareNeonatalTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareNeonatalTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareNeonatalTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CareNeonatalTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CareNeonatalTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CareNeonatalTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 33; // 33 = CareNeonatalTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareNeonatal'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareNeonatalTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareNeonatalQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareNeonatal::setDeleted()
     * @see CareNeonatal::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareNeonatalTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareNeonatalQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareNeonatalTableMap::DATABASE_NAME);
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
                CareNeonatalTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareNeonatalTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareNeonatalTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareNeonatalTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_PID)) {
            $modifiedColumns[':p' . $index++]  = 'pid';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DELIVERY_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'delivery_date';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_PARENT_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'parent_encounter_nr';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DELIVERY_NR)) {
            $modifiedColumns[':p' . $index++]  = 'delivery_nr';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DELIVERY_PLACE)) {
            $modifiedColumns[':p' . $index++]  = 'delivery_place';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DELIVERY_MODE)) {
            $modifiedColumns[':p' . $index++]  = 'delivery_mode';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_C_S_REASON)) {
            $modifiedColumns[':p' . $index++]  = 'c_s_reason';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_BORN_BEFORE_ARRIVAL)) {
            $modifiedColumns[':p' . $index++]  = 'born_before_arrival';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_FACE_PRESENTATION)) {
            $modifiedColumns[':p' . $index++]  = 'face_presentation';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_POSTERIO_OCCIPITAL_POSITION)) {
            $modifiedColumns[':p' . $index++]  = 'posterio_occipital_position';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DELIVERY_RANK)) {
            $modifiedColumns[':p' . $index++]  = 'delivery_rank';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_APGAR_1_MIN)) {
            $modifiedColumns[':p' . $index++]  = 'apgar_1_min';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_APGAR_5_MIN)) {
            $modifiedColumns[':p' . $index++]  = 'apgar_5_min';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_APGAR_10_MIN)) {
            $modifiedColumns[':p' . $index++]  = 'apgar_10_min';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_TIME_TO_SPONT_RESP)) {
            $modifiedColumns[':p' . $index++]  = 'time_to_spont_resp';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_CONDITION)) {
            $modifiedColumns[':p' . $index++]  = 'condition';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'weight';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_LENGTH)) {
            $modifiedColumns[':p' . $index++]  = 'length';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_HEAD_CIRCUMFERENCE)) {
            $modifiedColumns[':p' . $index++]  = 'head_circumference';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_SCORED_GESTATIONAL_AGE)) {
            $modifiedColumns[':p' . $index++]  = 'scored_gestational_age';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_FEEDING)) {
            $modifiedColumns[':p' . $index++]  = 'feeding';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_CONGENITAL_ABNORMALITY)) {
            $modifiedColumns[':p' . $index++]  = 'congenital_abnormality';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_CLASSIFICATION)) {
            $modifiedColumns[':p' . $index++]  = 'classification';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DISEASE_CATEGORY)) {
            $modifiedColumns[':p' . $index++]  = 'disease_category';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_OUTCOME)) {
            $modifiedColumns[':p' . $index++]  = 'outcome';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_neonatal (%s) VALUES (%s)',
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
                    case 'pid':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_INT);
                        break;
                    case 'delivery_date':
                        $stmt->bindValue($identifier, $this->delivery_date ? $this->delivery_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'parent_encounter_nr':
                        $stmt->bindValue($identifier, $this->parent_encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'delivery_nr':
                        $stmt->bindValue($identifier, $this->delivery_nr, PDO::PARAM_INT);
                        break;
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'delivery_place':
                        $stmt->bindValue($identifier, $this->delivery_place, PDO::PARAM_STR);
                        break;
                    case 'delivery_mode':
                        $stmt->bindValue($identifier, $this->delivery_mode, PDO::PARAM_INT);
                        break;
                    case 'c_s_reason':
                        $stmt->bindValue($identifier, $this->c_s_reason, PDO::PARAM_STR);
                        break;
                    case 'born_before_arrival':
                        $stmt->bindValue($identifier, (int) $this->born_before_arrival, PDO::PARAM_INT);
                        break;
                    case 'face_presentation':
                        $stmt->bindValue($identifier, (int) $this->face_presentation, PDO::PARAM_INT);
                        break;
                    case 'posterio_occipital_position':
                        $stmt->bindValue($identifier, (int) $this->posterio_occipital_position, PDO::PARAM_INT);
                        break;
                    case 'delivery_rank':
                        $stmt->bindValue($identifier, $this->delivery_rank, PDO::PARAM_INT);
                        break;
                    case 'apgar_1_min':
                        $stmt->bindValue($identifier, $this->apgar_1_min, PDO::PARAM_INT);
                        break;
                    case 'apgar_5_min':
                        $stmt->bindValue($identifier, $this->apgar_5_min, PDO::PARAM_INT);
                        break;
                    case 'apgar_10_min':
                        $stmt->bindValue($identifier, $this->apgar_10_min, PDO::PARAM_INT);
                        break;
                    case 'time_to_spont_resp':
                        $stmt->bindValue($identifier, $this->time_to_spont_resp, PDO::PARAM_INT);
                        break;
                    case 'condition':
                        $stmt->bindValue($identifier, $this->condition, PDO::PARAM_STR);
                        break;
                    case 'weight':
                        $stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
                        break;
                    case 'length':
                        $stmt->bindValue($identifier, $this->length, PDO::PARAM_STR);
                        break;
                    case 'head_circumference':
                        $stmt->bindValue($identifier, $this->head_circumference, PDO::PARAM_STR);
                        break;
                    case 'scored_gestational_age':
                        $stmt->bindValue($identifier, $this->scored_gestational_age, PDO::PARAM_STR);
                        break;
                    case 'feeding':
                        $stmt->bindValue($identifier, $this->feeding, PDO::PARAM_INT);
                        break;
                    case 'congenital_abnormality':
                        $stmt->bindValue($identifier, $this->congenital_abnormality, PDO::PARAM_STR);
                        break;
                    case 'classification':
                        $stmt->bindValue($identifier, $this->classification, PDO::PARAM_STR);
                        break;
                    case 'disease_category':
                        $stmt->bindValue($identifier, $this->disease_category, PDO::PARAM_INT);
                        break;
                    case 'outcome':
                        $stmt->bindValue($identifier, $this->outcome, PDO::PARAM_INT);
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
        $pos = CareNeonatalTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPid();
                break;
            case 2:
                return $this->getDeliveryDate();
                break;
            case 3:
                return $this->getParentEncounterNr();
                break;
            case 4:
                return $this->getDeliveryNr();
                break;
            case 5:
                return $this->getEncounterNr();
                break;
            case 6:
                return $this->getDeliveryPlace();
                break;
            case 7:
                return $this->getDeliveryMode();
                break;
            case 8:
                return $this->getCSReason();
                break;
            case 9:
                return $this->getBornBeforeArrival();
                break;
            case 10:
                return $this->getFacePresentation();
                break;
            case 11:
                return $this->getPosterioOccipitalPosition();
                break;
            case 12:
                return $this->getDeliveryRank();
                break;
            case 13:
                return $this->getApgar1Min();
                break;
            case 14:
                return $this->getApgar5Min();
                break;
            case 15:
                return $this->getApgar10Min();
                break;
            case 16:
                return $this->getTimeToSpontResp();
                break;
            case 17:
                return $this->getCondition();
                break;
            case 18:
                return $this->getWeight();
                break;
            case 19:
                return $this->getLength();
                break;
            case 20:
                return $this->getHeadCircumference();
                break;
            case 21:
                return $this->getScoredGestationalAge();
                break;
            case 22:
                return $this->getFeeding();
                break;
            case 23:
                return $this->getCongenitalAbnormality();
                break;
            case 24:
                return $this->getClassification();
                break;
            case 25:
                return $this->getDiseaseCategory();
                break;
            case 26:
                return $this->getOutcome();
                break;
            case 27:
                return $this->getStatus();
                break;
            case 28:
                return $this->getHistory();
                break;
            case 29:
                return $this->getModifyId();
                break;
            case 30:
                return $this->getModifyTime();
                break;
            case 31:
                return $this->getCreateId();
                break;
            case 32:
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

        if (isset($alreadyDumpedObjects['CareNeonatal'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareNeonatal'][$this->hashCode()] = true;
        $keys = CareNeonatalTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getPid(),
            $keys[2] => $this->getDeliveryDate(),
            $keys[3] => $this->getParentEncounterNr(),
            $keys[4] => $this->getDeliveryNr(),
            $keys[5] => $this->getEncounterNr(),
            $keys[6] => $this->getDeliveryPlace(),
            $keys[7] => $this->getDeliveryMode(),
            $keys[8] => $this->getCSReason(),
            $keys[9] => $this->getBornBeforeArrival(),
            $keys[10] => $this->getFacePresentation(),
            $keys[11] => $this->getPosterioOccipitalPosition(),
            $keys[12] => $this->getDeliveryRank(),
            $keys[13] => $this->getApgar1Min(),
            $keys[14] => $this->getApgar5Min(),
            $keys[15] => $this->getApgar10Min(),
            $keys[16] => $this->getTimeToSpontResp(),
            $keys[17] => $this->getCondition(),
            $keys[18] => $this->getWeight(),
            $keys[19] => $this->getLength(),
            $keys[20] => $this->getHeadCircumference(),
            $keys[21] => $this->getScoredGestationalAge(),
            $keys[22] => $this->getFeeding(),
            $keys[23] => $this->getCongenitalAbnormality(),
            $keys[24] => $this->getClassification(),
            $keys[25] => $this->getDiseaseCategory(),
            $keys[26] => $this->getOutcome(),
            $keys[27] => $this->getStatus(),
            $keys[28] => $this->getHistory(),
            $keys[29] => $this->getModifyId(),
            $keys[30] => $this->getModifyTime(),
            $keys[31] => $this->getCreateId(),
            $keys[32] => $this->getCreateTime(),
        );
        if ($result[$keys[2]] instanceof \DateTimeInterface) {
            $result[$keys[2]] = $result[$keys[2]]->format('c');
        }

        if ($result[$keys[30]] instanceof \DateTimeInterface) {
            $result[$keys[30]] = $result[$keys[30]]->format('c');
        }

        if ($result[$keys[32]] instanceof \DateTimeInterface) {
            $result[$keys[32]] = $result[$keys[32]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareNeonatal
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareNeonatalTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareNeonatal
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNr($value);
                break;
            case 1:
                $this->setPid($value);
                break;
            case 2:
                $this->setDeliveryDate($value);
                break;
            case 3:
                $this->setParentEncounterNr($value);
                break;
            case 4:
                $this->setDeliveryNr($value);
                break;
            case 5:
                $this->setEncounterNr($value);
                break;
            case 6:
                $this->setDeliveryPlace($value);
                break;
            case 7:
                $this->setDeliveryMode($value);
                break;
            case 8:
                $this->setCSReason($value);
                break;
            case 9:
                $this->setBornBeforeArrival($value);
                break;
            case 10:
                $this->setFacePresentation($value);
                break;
            case 11:
                $this->setPosterioOccipitalPosition($value);
                break;
            case 12:
                $this->setDeliveryRank($value);
                break;
            case 13:
                $this->setApgar1Min($value);
                break;
            case 14:
                $this->setApgar5Min($value);
                break;
            case 15:
                $this->setApgar10Min($value);
                break;
            case 16:
                $this->setTimeToSpontResp($value);
                break;
            case 17:
                $this->setCondition($value);
                break;
            case 18:
                $this->setWeight($value);
                break;
            case 19:
                $this->setLength($value);
                break;
            case 20:
                $this->setHeadCircumference($value);
                break;
            case 21:
                $this->setScoredGestationalAge($value);
                break;
            case 22:
                $this->setFeeding($value);
                break;
            case 23:
                $this->setCongenitalAbnormality($value);
                break;
            case 24:
                $this->setClassification($value);
                break;
            case 25:
                $this->setDiseaseCategory($value);
                break;
            case 26:
                $this->setOutcome($value);
                break;
            case 27:
                $this->setStatus($value);
                break;
            case 28:
                $this->setHistory($value);
                break;
            case 29:
                $this->setModifyId($value);
                break;
            case 30:
                $this->setModifyTime($value);
                break;
            case 31:
                $this->setCreateId($value);
                break;
            case 32:
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
        $keys = CareNeonatalTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDeliveryDate($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setParentEncounterNr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDeliveryNr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setEncounterNr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDeliveryPlace($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setDeliveryMode($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCSReason($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setBornBeforeArrival($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setFacePresentation($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPosterioOccipitalPosition($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setDeliveryRank($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setApgar1Min($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setApgar5Min($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setApgar10Min($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setTimeToSpontResp($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setCondition($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setWeight($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setLength($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setHeadCircumference($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setScoredGestationalAge($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setFeeding($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setCongenitalAbnormality($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setClassification($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setDiseaseCategory($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setOutcome($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setStatus($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setHistory($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setModifyId($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setModifyTime($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setCreateId($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setCreateTime($arr[$keys[32]]);
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
     * @return $this|\CareMd\CareMd\CareNeonatal The current object, for fluid interface
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
        $criteria = new Criteria(CareNeonatalTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareNeonatalTableMap::COL_NR)) {
            $criteria->add(CareNeonatalTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_PID)) {
            $criteria->add(CareNeonatalTableMap::COL_PID, $this->pid);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DELIVERY_DATE)) {
            $criteria->add(CareNeonatalTableMap::COL_DELIVERY_DATE, $this->delivery_date);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_PARENT_ENCOUNTER_NR)) {
            $criteria->add(CareNeonatalTableMap::COL_PARENT_ENCOUNTER_NR, $this->parent_encounter_nr);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DELIVERY_NR)) {
            $criteria->add(CareNeonatalTableMap::COL_DELIVERY_NR, $this->delivery_nr);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareNeonatalTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DELIVERY_PLACE)) {
            $criteria->add(CareNeonatalTableMap::COL_DELIVERY_PLACE, $this->delivery_place);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DELIVERY_MODE)) {
            $criteria->add(CareNeonatalTableMap::COL_DELIVERY_MODE, $this->delivery_mode);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_C_S_REASON)) {
            $criteria->add(CareNeonatalTableMap::COL_C_S_REASON, $this->c_s_reason);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_BORN_BEFORE_ARRIVAL)) {
            $criteria->add(CareNeonatalTableMap::COL_BORN_BEFORE_ARRIVAL, $this->born_before_arrival);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_FACE_PRESENTATION)) {
            $criteria->add(CareNeonatalTableMap::COL_FACE_PRESENTATION, $this->face_presentation);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_POSTERIO_OCCIPITAL_POSITION)) {
            $criteria->add(CareNeonatalTableMap::COL_POSTERIO_OCCIPITAL_POSITION, $this->posterio_occipital_position);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DELIVERY_RANK)) {
            $criteria->add(CareNeonatalTableMap::COL_DELIVERY_RANK, $this->delivery_rank);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_APGAR_1_MIN)) {
            $criteria->add(CareNeonatalTableMap::COL_APGAR_1_MIN, $this->apgar_1_min);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_APGAR_5_MIN)) {
            $criteria->add(CareNeonatalTableMap::COL_APGAR_5_MIN, $this->apgar_5_min);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_APGAR_10_MIN)) {
            $criteria->add(CareNeonatalTableMap::COL_APGAR_10_MIN, $this->apgar_10_min);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_TIME_TO_SPONT_RESP)) {
            $criteria->add(CareNeonatalTableMap::COL_TIME_TO_SPONT_RESP, $this->time_to_spont_resp);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_CONDITION)) {
            $criteria->add(CareNeonatalTableMap::COL_CONDITION, $this->condition);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_WEIGHT)) {
            $criteria->add(CareNeonatalTableMap::COL_WEIGHT, $this->weight);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_LENGTH)) {
            $criteria->add(CareNeonatalTableMap::COL_LENGTH, $this->length);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_HEAD_CIRCUMFERENCE)) {
            $criteria->add(CareNeonatalTableMap::COL_HEAD_CIRCUMFERENCE, $this->head_circumference);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_SCORED_GESTATIONAL_AGE)) {
            $criteria->add(CareNeonatalTableMap::COL_SCORED_GESTATIONAL_AGE, $this->scored_gestational_age);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_FEEDING)) {
            $criteria->add(CareNeonatalTableMap::COL_FEEDING, $this->feeding);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_CONGENITAL_ABNORMALITY)) {
            $criteria->add(CareNeonatalTableMap::COL_CONGENITAL_ABNORMALITY, $this->congenital_abnormality);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_CLASSIFICATION)) {
            $criteria->add(CareNeonatalTableMap::COL_CLASSIFICATION, $this->classification);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_DISEASE_CATEGORY)) {
            $criteria->add(CareNeonatalTableMap::COL_DISEASE_CATEGORY, $this->disease_category);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_OUTCOME)) {
            $criteria->add(CareNeonatalTableMap::COL_OUTCOME, $this->outcome);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_STATUS)) {
            $criteria->add(CareNeonatalTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_HISTORY)) {
            $criteria->add(CareNeonatalTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareNeonatalTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareNeonatalTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_CREATE_ID)) {
            $criteria->add(CareNeonatalTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareNeonatalTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareNeonatalTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareNeonatalQuery::create();
        $criteria->add(CareNeonatalTableMap::COL_NR, $this->nr);

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
     * @param      object $copyObj An object of \CareMd\CareMd\CareNeonatal (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPid($this->getPid());
        $copyObj->setDeliveryDate($this->getDeliveryDate());
        $copyObj->setParentEncounterNr($this->getParentEncounterNr());
        $copyObj->setDeliveryNr($this->getDeliveryNr());
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setDeliveryPlace($this->getDeliveryPlace());
        $copyObj->setDeliveryMode($this->getDeliveryMode());
        $copyObj->setCSReason($this->getCSReason());
        $copyObj->setBornBeforeArrival($this->getBornBeforeArrival());
        $copyObj->setFacePresentation($this->getFacePresentation());
        $copyObj->setPosterioOccipitalPosition($this->getPosterioOccipitalPosition());
        $copyObj->setDeliveryRank($this->getDeliveryRank());
        $copyObj->setApgar1Min($this->getApgar1Min());
        $copyObj->setApgar5Min($this->getApgar5Min());
        $copyObj->setApgar10Min($this->getApgar10Min());
        $copyObj->setTimeToSpontResp($this->getTimeToSpontResp());
        $copyObj->setCondition($this->getCondition());
        $copyObj->setWeight($this->getWeight());
        $copyObj->setLength($this->getLength());
        $copyObj->setHeadCircumference($this->getHeadCircumference());
        $copyObj->setScoredGestationalAge($this->getScoredGestationalAge());
        $copyObj->setFeeding($this->getFeeding());
        $copyObj->setCongenitalAbnormality($this->getCongenitalAbnormality());
        $copyObj->setClassification($this->getClassification());
        $copyObj->setDiseaseCategory($this->getDiseaseCategory());
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
     * @return \CareMd\CareMd\CareNeonatal Clone of current object.
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
        $this->pid = null;
        $this->delivery_date = null;
        $this->parent_encounter_nr = null;
        $this->delivery_nr = null;
        $this->encounter_nr = null;
        $this->delivery_place = null;
        $this->delivery_mode = null;
        $this->c_s_reason = null;
        $this->born_before_arrival = null;
        $this->face_presentation = null;
        $this->posterio_occipital_position = null;
        $this->delivery_rank = null;
        $this->apgar_1_min = null;
        $this->apgar_5_min = null;
        $this->apgar_10_min = null;
        $this->time_to_spont_resp = null;
        $this->condition = null;
        $this->weight = null;
        $this->length = null;
        $this->head_circumference = null;
        $this->scored_gestational_age = null;
        $this->feeding = null;
        $this->congenital_abnormality = null;
        $this->classification = null;
        $this->disease_category = null;
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
        return (string) $this->exportTo(CareNeonatalTableMap::DEFAULT_STRING_FORMAT);
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
