<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTzLaboratoryParamQuery as ChildCareTzLaboratoryParamQuery;
use CareMd\CareMd\Map\CareTzLaboratoryParamTableMap;
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
 * Base class that represents a row from the 'care_tz_laboratory_param' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzLaboratoryParam implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzLaboratoryParamTableMap';


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
     * The value for the group_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $group_id;

    /**
     * The value for the name field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $name;

    /**
     * The value for the shortname field.
     *
     * @var        string
     */
    protected $shortname;

    /**
     * The value for the sort_nr field.
     *
     * @var        int
     */
    protected $sort_nr;

    /**
     * The value for the id field.
     *
     * @var        string
     */
    protected $id;

    /**
     * The value for the msr_unit field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $msr_unit;

    /**
     * The value for the median field.
     *
     * @var        string
     */
    protected $median;

    /**
     * The value for the hi_bound field.
     *
     * @var        string
     */
    protected $hi_bound;

    /**
     * The value for the lo_bound field.
     *
     * @var        string
     */
    protected $lo_bound;

    /**
     * The value for the hi_critical field.
     *
     * @var        string
     */
    protected $hi_critical;

    /**
     * The value for the lo_critical field.
     *
     * @var        string
     */
    protected $lo_critical;

    /**
     * The value for the hi_toxic field.
     *
     * @var        string
     */
    protected $hi_toxic;

    /**
     * The value for the lo_toxic field.
     *
     * @var        string
     */
    protected $lo_toxic;

    /**
     * The value for the median_f field.
     *
     * @var        string
     */
    protected $median_f;

    /**
     * The value for the hi_bound_f field.
     *
     * @var        string
     */
    protected $hi_bound_f;

    /**
     * The value for the lo_bound_f field.
     *
     * @var        string
     */
    protected $lo_bound_f;

    /**
     * The value for the hi_critical_f field.
     *
     * @var        string
     */
    protected $hi_critical_f;

    /**
     * The value for the lo_critical_f field.
     *
     * @var        string
     */
    protected $lo_critical_f;

    /**
     * The value for the hi_toxic_f field.
     *
     * @var        string
     */
    protected $hi_toxic_f;

    /**
     * The value for the lo_toxic_f field.
     *
     * @var        string
     */
    protected $lo_toxic_f;

    /**
     * The value for the median_n field.
     *
     * @var        string
     */
    protected $median_n;

    /**
     * The value for the hi_bound_n field.
     *
     * @var        string
     */
    protected $hi_bound_n;

    /**
     * The value for the lo_bound_n field.
     *
     * @var        string
     */
    protected $lo_bound_n;

    /**
     * The value for the hi_critical_n field.
     *
     * @var        string
     */
    protected $hi_critical_n;

    /**
     * The value for the lo_critical_n field.
     *
     * @var        string
     */
    protected $lo_critical_n;

    /**
     * The value for the hi_toxic_n field.
     *
     * @var        string
     */
    protected $hi_toxic_n;

    /**
     * The value for the lo_toxic_n field.
     *
     * @var        string
     */
    protected $lo_toxic_n;

    /**
     * The value for the median_y field.
     *
     * @var        string
     */
    protected $median_y;

    /**
     * The value for the hi_bound_y field.
     *
     * @var        string
     */
    protected $hi_bound_y;

    /**
     * The value for the lo_bound_y field.
     *
     * @var        string
     */
    protected $lo_bound_y;

    /**
     * The value for the hi_critical_y field.
     *
     * @var        string
     */
    protected $hi_critical_y;

    /**
     * The value for the lo_critical_y field.
     *
     * @var        string
     */
    protected $lo_critical_y;

    /**
     * The value for the hi_toxic_y field.
     *
     * @var        string
     */
    protected $hi_toxic_y;

    /**
     * The value for the lo_toxic_y field.
     *
     * @var        string
     */
    protected $lo_toxic_y;

    /**
     * The value for the median_c field.
     *
     * @var        string
     */
    protected $median_c;

    /**
     * The value for the hi_bound_c field.
     *
     * @var        string
     */
    protected $hi_bound_c;

    /**
     * The value for the lo_bound_c field.
     *
     * @var        string
     */
    protected $lo_bound_c;

    /**
     * The value for the hi_critical_c field.
     *
     * @var        string
     */
    protected $hi_critical_c;

    /**
     * The value for the lo_critical_c field.
     *
     * @var        string
     */
    protected $lo_critical_c;

    /**
     * The value for the hi_toxic_c field.
     *
     * @var        string
     */
    protected $hi_toxic_c;

    /**
     * The value for the lo_toxic_c field.
     *
     * @var        string
     */
    protected $lo_toxic_c;

    /**
     * The value for the method field.
     *
     * @var        string
     */
    protected $method;

    /**
     * The value for the field_type field.
     *
     * @var        string
     */
    protected $field_type;

    /**
     * The value for the add_type field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $add_type;

    /**
     * The value for the add_label field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $add_label;

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
     * The value for the price field.
     *
     * @var        string
     */
    protected $price;

    /**
     * The value for the price_3 field.
     *
     * @var        string
     */
    protected $price_3;

    /**
     * The value for the price_2 field.
     *
     * @var        string
     */
    protected $price_2;

    /**
     * The value for the price_1 field.
     *
     * @var        string
     */
    protected $price_1;

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
        $this->group_id = '';
        $this->name = '';
        $this->msr_unit = '';
        $this->add_type = '';
        $this->add_label = '';
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTzLaboratoryParam object.
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
     * Compares this with another <code>CareTzLaboratoryParam</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzLaboratoryParam</code>, delegates to
     * <code>equals(CareTzLaboratoryParam)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzLaboratoryParam The current object, for fluid interface
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
     * Get the [group_id] column value.
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [shortname] column value.
     *
     * @return string
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Get the [sort_nr] column value.
     *
     * @return int
     */
    public function getSortNr()
    {
        return $this->sort_nr;
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
     * Get the [msr_unit] column value.
     *
     * @return string
     */
    public function getMsrUnit()
    {
        return $this->msr_unit;
    }

    /**
     * Get the [median] column value.
     *
     * @return string
     */
    public function getMedian()
    {
        return $this->median;
    }

    /**
     * Get the [hi_bound] column value.
     *
     * @return string
     */
    public function getHiBound()
    {
        return $this->hi_bound;
    }

    /**
     * Get the [lo_bound] column value.
     *
     * @return string
     */
    public function getLoBound()
    {
        return $this->lo_bound;
    }

    /**
     * Get the [hi_critical] column value.
     *
     * @return string
     */
    public function getHiCritical()
    {
        return $this->hi_critical;
    }

    /**
     * Get the [lo_critical] column value.
     *
     * @return string
     */
    public function getLoCritical()
    {
        return $this->lo_critical;
    }

    /**
     * Get the [hi_toxic] column value.
     *
     * @return string
     */
    public function getHiToxic()
    {
        return $this->hi_toxic;
    }

    /**
     * Get the [lo_toxic] column value.
     *
     * @return string
     */
    public function getLoToxic()
    {
        return $this->lo_toxic;
    }

    /**
     * Get the [median_f] column value.
     *
     * @return string
     */
    public function getMedianF()
    {
        return $this->median_f;
    }

    /**
     * Get the [hi_bound_f] column value.
     *
     * @return string
     */
    public function getHiBoundF()
    {
        return $this->hi_bound_f;
    }

    /**
     * Get the [lo_bound_f] column value.
     *
     * @return string
     */
    public function getLoBoundF()
    {
        return $this->lo_bound_f;
    }

    /**
     * Get the [hi_critical_f] column value.
     *
     * @return string
     */
    public function getHiCriticalF()
    {
        return $this->hi_critical_f;
    }

    /**
     * Get the [lo_critical_f] column value.
     *
     * @return string
     */
    public function getLoCriticalF()
    {
        return $this->lo_critical_f;
    }

    /**
     * Get the [hi_toxic_f] column value.
     *
     * @return string
     */
    public function getHiToxicF()
    {
        return $this->hi_toxic_f;
    }

    /**
     * Get the [lo_toxic_f] column value.
     *
     * @return string
     */
    public function getLoToxicF()
    {
        return $this->lo_toxic_f;
    }

    /**
     * Get the [median_n] column value.
     *
     * @return string
     */
    public function getMedianN()
    {
        return $this->median_n;
    }

    /**
     * Get the [hi_bound_n] column value.
     *
     * @return string
     */
    public function getHiBoundN()
    {
        return $this->hi_bound_n;
    }

    /**
     * Get the [lo_bound_n] column value.
     *
     * @return string
     */
    public function getLoBoundN()
    {
        return $this->lo_bound_n;
    }

    /**
     * Get the [hi_critical_n] column value.
     *
     * @return string
     */
    public function getHiCriticalN()
    {
        return $this->hi_critical_n;
    }

    /**
     * Get the [lo_critical_n] column value.
     *
     * @return string
     */
    public function getLoCriticalN()
    {
        return $this->lo_critical_n;
    }

    /**
     * Get the [hi_toxic_n] column value.
     *
     * @return string
     */
    public function getHiToxicN()
    {
        return $this->hi_toxic_n;
    }

    /**
     * Get the [lo_toxic_n] column value.
     *
     * @return string
     */
    public function getLoToxicN()
    {
        return $this->lo_toxic_n;
    }

    /**
     * Get the [median_y] column value.
     *
     * @return string
     */
    public function getMedianY()
    {
        return $this->median_y;
    }

    /**
     * Get the [hi_bound_y] column value.
     *
     * @return string
     */
    public function getHiBoundY()
    {
        return $this->hi_bound_y;
    }

    /**
     * Get the [lo_bound_y] column value.
     *
     * @return string
     */
    public function getLoBoundY()
    {
        return $this->lo_bound_y;
    }

    /**
     * Get the [hi_critical_y] column value.
     *
     * @return string
     */
    public function getHiCriticalY()
    {
        return $this->hi_critical_y;
    }

    /**
     * Get the [lo_critical_y] column value.
     *
     * @return string
     */
    public function getLoCriticalY()
    {
        return $this->lo_critical_y;
    }

    /**
     * Get the [hi_toxic_y] column value.
     *
     * @return string
     */
    public function getHiToxicY()
    {
        return $this->hi_toxic_y;
    }

    /**
     * Get the [lo_toxic_y] column value.
     *
     * @return string
     */
    public function getLoToxicY()
    {
        return $this->lo_toxic_y;
    }

    /**
     * Get the [median_c] column value.
     *
     * @return string
     */
    public function getMedianC()
    {
        return $this->median_c;
    }

    /**
     * Get the [hi_bound_c] column value.
     *
     * @return string
     */
    public function getHiBoundC()
    {
        return $this->hi_bound_c;
    }

    /**
     * Get the [lo_bound_c] column value.
     *
     * @return string
     */
    public function getLoBoundC()
    {
        return $this->lo_bound_c;
    }

    /**
     * Get the [hi_critical_c] column value.
     *
     * @return string
     */
    public function getHiCriticalC()
    {
        return $this->hi_critical_c;
    }

    /**
     * Get the [lo_critical_c] column value.
     *
     * @return string
     */
    public function getLoCriticalC()
    {
        return $this->lo_critical_c;
    }

    /**
     * Get the [hi_toxic_c] column value.
     *
     * @return string
     */
    public function getHiToxicC()
    {
        return $this->hi_toxic_c;
    }

    /**
     * Get the [lo_toxic_c] column value.
     *
     * @return string
     */
    public function getLoToxicC()
    {
        return $this->lo_toxic_c;
    }

    /**
     * Get the [method] column value.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Get the [field_type] column value.
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->field_type;
    }

    /**
     * Get the [add_type] column value.
     *
     * @return string
     */
    public function getAddType()
    {
        return $this->add_type;
    }

    /**
     * Get the [add_label] column value.
     *
     * @return string
     */
    public function getAddLabel()
    {
        return $this->add_label;
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
     * Get the [price] column value.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the [price_3] column value.
     *
     * @return string
     */
    public function getPrice3()
    {
        return $this->price_3;
    }

    /**
     * Get the [price_2] column value.
     *
     * @return string
     */
    public function getPrice2()
    {
        return $this->price_2;
    }

    /**
     * Get the [price_1] column value.
     *
     * @return string
     */
    public function getPrice1()
    {
        return $this->price_1;
    }

    /**
     * Set the value of [nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [group_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setGroupId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->group_id !== $v) {
            $this->group_id = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_GROUP_ID] = true;
        }

        return $this;
    } // setGroupId()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [shortname] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setShortname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shortname !== $v) {
            $this->shortname = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_SHORTNAME] = true;
        }

        return $this;
    } // setShortname()

    /**
     * Set the value of [sort_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setSortNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->sort_nr !== $v) {
            $this->sort_nr = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_SORT_NR] = true;
        }

        return $this;
    } // setSortNr()

    /**
     * Set the value of [id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [msr_unit] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setMsrUnit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->msr_unit !== $v) {
            $this->msr_unit = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_MSR_UNIT] = true;
        }

        return $this;
    } // setMsrUnit()

    /**
     * Set the value of [median] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setMedian($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->median !== $v) {
            $this->median = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_MEDIAN] = true;
        }

        return $this;
    } // setMedian()

    /**
     * Set the value of [hi_bound] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiBound($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_bound !== $v) {
            $this->hi_bound = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_BOUND] = true;
        }

        return $this;
    } // setHiBound()

    /**
     * Set the value of [lo_bound] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoBound($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_bound !== $v) {
            $this->lo_bound = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_BOUND] = true;
        }

        return $this;
    } // setLoBound()

    /**
     * Set the value of [hi_critical] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiCritical($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_critical !== $v) {
            $this->hi_critical = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_CRITICAL] = true;
        }

        return $this;
    } // setHiCritical()

    /**
     * Set the value of [lo_critical] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoCritical($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_critical !== $v) {
            $this->lo_critical = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_CRITICAL] = true;
        }

        return $this;
    } // setLoCritical()

    /**
     * Set the value of [hi_toxic] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiToxic($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_toxic !== $v) {
            $this->hi_toxic = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_TOXIC] = true;
        }

        return $this;
    } // setHiToxic()

    /**
     * Set the value of [lo_toxic] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoToxic($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_toxic !== $v) {
            $this->lo_toxic = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_TOXIC] = true;
        }

        return $this;
    } // setLoToxic()

    /**
     * Set the value of [median_f] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setMedianF($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->median_f !== $v) {
            $this->median_f = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_MEDIAN_F] = true;
        }

        return $this;
    } // setMedianF()

    /**
     * Set the value of [hi_bound_f] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiBoundF($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_bound_f !== $v) {
            $this->hi_bound_f = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_BOUND_F] = true;
        }

        return $this;
    } // setHiBoundF()

    /**
     * Set the value of [lo_bound_f] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoBoundF($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_bound_f !== $v) {
            $this->lo_bound_f = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_BOUND_F] = true;
        }

        return $this;
    } // setLoBoundF()

    /**
     * Set the value of [hi_critical_f] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiCriticalF($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_critical_f !== $v) {
            $this->hi_critical_f = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_F] = true;
        }

        return $this;
    } // setHiCriticalF()

    /**
     * Set the value of [lo_critical_f] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoCriticalF($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_critical_f !== $v) {
            $this->lo_critical_f = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_F] = true;
        }

        return $this;
    } // setLoCriticalF()

    /**
     * Set the value of [hi_toxic_f] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiToxicF($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_toxic_f !== $v) {
            $this->hi_toxic_f = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_TOXIC_F] = true;
        }

        return $this;
    } // setHiToxicF()

    /**
     * Set the value of [lo_toxic_f] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoToxicF($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_toxic_f !== $v) {
            $this->lo_toxic_f = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_TOXIC_F] = true;
        }

        return $this;
    } // setLoToxicF()

    /**
     * Set the value of [median_n] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setMedianN($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->median_n !== $v) {
            $this->median_n = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_MEDIAN_N] = true;
        }

        return $this;
    } // setMedianN()

    /**
     * Set the value of [hi_bound_n] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiBoundN($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_bound_n !== $v) {
            $this->hi_bound_n = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_BOUND_N] = true;
        }

        return $this;
    } // setHiBoundN()

    /**
     * Set the value of [lo_bound_n] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoBoundN($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_bound_n !== $v) {
            $this->lo_bound_n = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_BOUND_N] = true;
        }

        return $this;
    } // setLoBoundN()

    /**
     * Set the value of [hi_critical_n] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiCriticalN($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_critical_n !== $v) {
            $this->hi_critical_n = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_N] = true;
        }

        return $this;
    } // setHiCriticalN()

    /**
     * Set the value of [lo_critical_n] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoCriticalN($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_critical_n !== $v) {
            $this->lo_critical_n = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_N] = true;
        }

        return $this;
    } // setLoCriticalN()

    /**
     * Set the value of [hi_toxic_n] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiToxicN($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_toxic_n !== $v) {
            $this->hi_toxic_n = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_TOXIC_N] = true;
        }

        return $this;
    } // setHiToxicN()

    /**
     * Set the value of [lo_toxic_n] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoToxicN($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_toxic_n !== $v) {
            $this->lo_toxic_n = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_TOXIC_N] = true;
        }

        return $this;
    } // setLoToxicN()

    /**
     * Set the value of [median_y] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setMedianY($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->median_y !== $v) {
            $this->median_y = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_MEDIAN_Y] = true;
        }

        return $this;
    } // setMedianY()

    /**
     * Set the value of [hi_bound_y] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiBoundY($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_bound_y !== $v) {
            $this->hi_bound_y = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_BOUND_Y] = true;
        }

        return $this;
    } // setHiBoundY()

    /**
     * Set the value of [lo_bound_y] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoBoundY($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_bound_y !== $v) {
            $this->lo_bound_y = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_BOUND_Y] = true;
        }

        return $this;
    } // setLoBoundY()

    /**
     * Set the value of [hi_critical_y] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiCriticalY($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_critical_y !== $v) {
            $this->hi_critical_y = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_Y] = true;
        }

        return $this;
    } // setHiCriticalY()

    /**
     * Set the value of [lo_critical_y] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoCriticalY($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_critical_y !== $v) {
            $this->lo_critical_y = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_Y] = true;
        }

        return $this;
    } // setLoCriticalY()

    /**
     * Set the value of [hi_toxic_y] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiToxicY($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_toxic_y !== $v) {
            $this->hi_toxic_y = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_TOXIC_Y] = true;
        }

        return $this;
    } // setHiToxicY()

    /**
     * Set the value of [lo_toxic_y] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoToxicY($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_toxic_y !== $v) {
            $this->lo_toxic_y = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_TOXIC_Y] = true;
        }

        return $this;
    } // setLoToxicY()

    /**
     * Set the value of [median_c] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setMedianC($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->median_c !== $v) {
            $this->median_c = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_MEDIAN_C] = true;
        }

        return $this;
    } // setMedianC()

    /**
     * Set the value of [hi_bound_c] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiBoundC($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_bound_c !== $v) {
            $this->hi_bound_c = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_BOUND_C] = true;
        }

        return $this;
    } // setHiBoundC()

    /**
     * Set the value of [lo_bound_c] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoBoundC($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_bound_c !== $v) {
            $this->lo_bound_c = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_BOUND_C] = true;
        }

        return $this;
    } // setLoBoundC()

    /**
     * Set the value of [hi_critical_c] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiCriticalC($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_critical_c !== $v) {
            $this->hi_critical_c = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_C] = true;
        }

        return $this;
    } // setHiCriticalC()

    /**
     * Set the value of [lo_critical_c] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoCriticalC($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_critical_c !== $v) {
            $this->lo_critical_c = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_C] = true;
        }

        return $this;
    } // setLoCriticalC()

    /**
     * Set the value of [hi_toxic_c] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHiToxicC($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hi_toxic_c !== $v) {
            $this->hi_toxic_c = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HI_TOXIC_C] = true;
        }

        return $this;
    } // setHiToxicC()

    /**
     * Set the value of [lo_toxic_c] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setLoToxicC($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lo_toxic_c !== $v) {
            $this->lo_toxic_c = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_LO_TOXIC_C] = true;
        }

        return $this;
    } // setLoToxicC()

    /**
     * Set the value of [method] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setMethod($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->method !== $v) {
            $this->method = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_METHOD] = true;
        }

        return $this;
    } // setMethod()

    /**
     * Set the value of [field_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setFieldType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_type !== $v) {
            $this->field_type = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_FIELD_TYPE] = true;
        }

        return $this;
    } // setFieldType()

    /**
     * Set the value of [add_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setAddType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->add_type !== $v) {
            $this->add_type = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_ADD_TYPE] = true;
        }

        return $this;
    } // setAddType()

    /**
     * Set the value of [add_label] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setAddLabel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->add_label !== $v) {
            $this->add_label = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_ADD_LABEL] = true;
        }

        return $this;
    } // setAddLabel()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_CREATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateTime()

    /**
     * Set the value of [price] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setPrice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->price !== $v) {
            $this->price = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_PRICE] = true;
        }

        return $this;
    } // setPrice()

    /**
     * Set the value of [price_3] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setPrice3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->price_3 !== $v) {
            $this->price_3 = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_PRICE_3] = true;
        }

        return $this;
    } // setPrice3()

    /**
     * Set the value of [price_2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setPrice2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->price_2 !== $v) {
            $this->price_2 = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_PRICE_2] = true;
        }

        return $this;
    } // setPrice2()

    /**
     * Set the value of [price_1] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object (for fluent API support)
     */
    public function setPrice1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->price_1 !== $v) {
            $this->price_1 = $v;
            $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_PRICE_1] = true;
        }

        return $this;
    } // setPrice1()

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
            if ($this->group_id !== '') {
                return false;
            }

            if ($this->name !== '') {
                return false;
            }

            if ($this->msr_unit !== '') {
                return false;
            }

            if ($this->add_type !== '') {
                return false;
            }

            if ($this->add_label !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('GroupId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->group_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Shortname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shortname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('SortNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sort_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('MsrUnit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->msr_unit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Median', TableMap::TYPE_PHPNAME, $indexType)];
            $this->median = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiBound', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_bound = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoBound', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_bound = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiCritical', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_critical = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoCritical', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_critical = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiToxic', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_toxic = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoToxic', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_toxic = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('MedianF', TableMap::TYPE_PHPNAME, $indexType)];
            $this->median_f = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiBoundF', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_bound_f = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoBoundF', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_bound_f = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiCriticalF', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_critical_f = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoCriticalF', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_critical_f = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiToxicF', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_toxic_f = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoToxicF', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_toxic_f = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('MedianN', TableMap::TYPE_PHPNAME, $indexType)];
            $this->median_n = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiBoundN', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_bound_n = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoBoundN', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_bound_n = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiCriticalN', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_critical_n = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoCriticalN', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_critical_n = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiToxicN', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_toxic_n = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoToxicN', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_toxic_n = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('MedianY', TableMap::TYPE_PHPNAME, $indexType)];
            $this->median_y = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiBoundY', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_bound_y = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoBoundY', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_bound_y = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiCriticalY', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_critical_y = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoCriticalY', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_critical_y = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiToxicY', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_toxic_y = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoToxicY', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_toxic_y = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('MedianC', TableMap::TYPE_PHPNAME, $indexType)];
            $this->median_c = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiBoundC', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_bound_c = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoBoundC', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_bound_c = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiCriticalC', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_critical_c = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoCriticalC', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_critical_c = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('HiToxicC', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hi_toxic_c = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('LoToxicC', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lo_toxic_c = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Method', TableMap::TYPE_PHPNAME, $indexType)];
            $this->method = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('FieldType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('AddType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->add_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('AddLabel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->add_label = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Price', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Price3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price_3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Price2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price_2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : CareTzLaboratoryParamTableMap::translateFieldName('Price1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price_1 = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 56; // 56 = CareTzLaboratoryParamTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzLaboratoryParam'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzLaboratoryParamTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzLaboratoryParamQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzLaboratoryParam::setDeleted()
     * @see CareTzLaboratoryParam::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzLaboratoryParamTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzLaboratoryParamQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzLaboratoryParamTableMap::DATABASE_NAME);
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
                CareTzLaboratoryParamTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzLaboratoryParamTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzLaboratoryParamTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_GROUP_ID)) {
            $modifiedColumns[':p' . $index++]  = 'group_id';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_SHORTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'shortname';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_SORT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'sort_nr';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MSR_UNIT)) {
            $modifiedColumns[':p' . $index++]  = 'msr_unit';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MEDIAN)) {
            $modifiedColumns[':p' . $index++]  = 'median';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_BOUND)) {
            $modifiedColumns[':p' . $index++]  = 'hi_bound';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_BOUND)) {
            $modifiedColumns[':p' . $index++]  = 'lo_bound';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL)) {
            $modifiedColumns[':p' . $index++]  = 'hi_critical';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL)) {
            $modifiedColumns[':p' . $index++]  = 'lo_critical';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_TOXIC)) {
            $modifiedColumns[':p' . $index++]  = 'hi_toxic';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_TOXIC)) {
            $modifiedColumns[':p' . $index++]  = 'lo_toxic';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MEDIAN_F)) {
            $modifiedColumns[':p' . $index++]  = 'median_f';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_BOUND_F)) {
            $modifiedColumns[':p' . $index++]  = 'hi_bound_f';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_BOUND_F)) {
            $modifiedColumns[':p' . $index++]  = 'lo_bound_f';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_F)) {
            $modifiedColumns[':p' . $index++]  = 'hi_critical_f';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_F)) {
            $modifiedColumns[':p' . $index++]  = 'lo_critical_f';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_F)) {
            $modifiedColumns[':p' . $index++]  = 'hi_toxic_f';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_F)) {
            $modifiedColumns[':p' . $index++]  = 'lo_toxic_f';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MEDIAN_N)) {
            $modifiedColumns[':p' . $index++]  = 'median_n';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_BOUND_N)) {
            $modifiedColumns[':p' . $index++]  = 'hi_bound_n';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_BOUND_N)) {
            $modifiedColumns[':p' . $index++]  = 'lo_bound_n';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_N)) {
            $modifiedColumns[':p' . $index++]  = 'hi_critical_n';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_N)) {
            $modifiedColumns[':p' . $index++]  = 'lo_critical_n';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_N)) {
            $modifiedColumns[':p' . $index++]  = 'hi_toxic_n';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_N)) {
            $modifiedColumns[':p' . $index++]  = 'lo_toxic_n';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MEDIAN_Y)) {
            $modifiedColumns[':p' . $index++]  = 'median_y';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_BOUND_Y)) {
            $modifiedColumns[':p' . $index++]  = 'hi_bound_y';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_BOUND_Y)) {
            $modifiedColumns[':p' . $index++]  = 'lo_bound_y';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_Y)) {
            $modifiedColumns[':p' . $index++]  = 'hi_critical_y';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_Y)) {
            $modifiedColumns[':p' . $index++]  = 'lo_critical_y';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_Y)) {
            $modifiedColumns[':p' . $index++]  = 'hi_toxic_y';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_Y)) {
            $modifiedColumns[':p' . $index++]  = 'lo_toxic_y';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MEDIAN_C)) {
            $modifiedColumns[':p' . $index++]  = 'median_c';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_BOUND_C)) {
            $modifiedColumns[':p' . $index++]  = 'hi_bound_c';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_BOUND_C)) {
            $modifiedColumns[':p' . $index++]  = 'lo_bound_c';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_C)) {
            $modifiedColumns[':p' . $index++]  = 'hi_critical_c';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_C)) {
            $modifiedColumns[':p' . $index++]  = 'lo_critical_c';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_C)) {
            $modifiedColumns[':p' . $index++]  = 'hi_toxic_c';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_C)) {
            $modifiedColumns[':p' . $index++]  = 'lo_toxic_c';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_METHOD)) {
            $modifiedColumns[':p' . $index++]  = 'method';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_FIELD_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'field_type';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_ADD_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'add_type';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_ADD_LABEL)) {
            $modifiedColumns[':p' . $index++]  = 'add_label';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'price';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_PRICE_3)) {
            $modifiedColumns[':p' . $index++]  = 'price_3';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_PRICE_2)) {
            $modifiedColumns[':p' . $index++]  = 'price_2';
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_PRICE_1)) {
            $modifiedColumns[':p' . $index++]  = 'price_1';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_laboratory_param (%s) VALUES (%s)',
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
                    case 'group_id':
                        $stmt->bindValue($identifier, $this->group_id, PDO::PARAM_STR);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'shortname':
                        $stmt->bindValue($identifier, $this->shortname, PDO::PARAM_STR);
                        break;
                    case 'sort_nr':
                        $stmt->bindValue($identifier, $this->sort_nr, PDO::PARAM_INT);
                        break;
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_STR);
                        break;
                    case 'msr_unit':
                        $stmt->bindValue($identifier, $this->msr_unit, PDO::PARAM_STR);
                        break;
                    case 'median':
                        $stmt->bindValue($identifier, $this->median, PDO::PARAM_STR);
                        break;
                    case 'hi_bound':
                        $stmt->bindValue($identifier, $this->hi_bound, PDO::PARAM_STR);
                        break;
                    case 'lo_bound':
                        $stmt->bindValue($identifier, $this->lo_bound, PDO::PARAM_STR);
                        break;
                    case 'hi_critical':
                        $stmt->bindValue($identifier, $this->hi_critical, PDO::PARAM_STR);
                        break;
                    case 'lo_critical':
                        $stmt->bindValue($identifier, $this->lo_critical, PDO::PARAM_STR);
                        break;
                    case 'hi_toxic':
                        $stmt->bindValue($identifier, $this->hi_toxic, PDO::PARAM_STR);
                        break;
                    case 'lo_toxic':
                        $stmt->bindValue($identifier, $this->lo_toxic, PDO::PARAM_STR);
                        break;
                    case 'median_f':
                        $stmt->bindValue($identifier, $this->median_f, PDO::PARAM_STR);
                        break;
                    case 'hi_bound_f':
                        $stmt->bindValue($identifier, $this->hi_bound_f, PDO::PARAM_STR);
                        break;
                    case 'lo_bound_f':
                        $stmt->bindValue($identifier, $this->lo_bound_f, PDO::PARAM_STR);
                        break;
                    case 'hi_critical_f':
                        $stmt->bindValue($identifier, $this->hi_critical_f, PDO::PARAM_STR);
                        break;
                    case 'lo_critical_f':
                        $stmt->bindValue($identifier, $this->lo_critical_f, PDO::PARAM_STR);
                        break;
                    case 'hi_toxic_f':
                        $stmt->bindValue($identifier, $this->hi_toxic_f, PDO::PARAM_STR);
                        break;
                    case 'lo_toxic_f':
                        $stmt->bindValue($identifier, $this->lo_toxic_f, PDO::PARAM_STR);
                        break;
                    case 'median_n':
                        $stmt->bindValue($identifier, $this->median_n, PDO::PARAM_STR);
                        break;
                    case 'hi_bound_n':
                        $stmt->bindValue($identifier, $this->hi_bound_n, PDO::PARAM_STR);
                        break;
                    case 'lo_bound_n':
                        $stmt->bindValue($identifier, $this->lo_bound_n, PDO::PARAM_STR);
                        break;
                    case 'hi_critical_n':
                        $stmt->bindValue($identifier, $this->hi_critical_n, PDO::PARAM_STR);
                        break;
                    case 'lo_critical_n':
                        $stmt->bindValue($identifier, $this->lo_critical_n, PDO::PARAM_STR);
                        break;
                    case 'hi_toxic_n':
                        $stmt->bindValue($identifier, $this->hi_toxic_n, PDO::PARAM_STR);
                        break;
                    case 'lo_toxic_n':
                        $stmt->bindValue($identifier, $this->lo_toxic_n, PDO::PARAM_STR);
                        break;
                    case 'median_y':
                        $stmt->bindValue($identifier, $this->median_y, PDO::PARAM_STR);
                        break;
                    case 'hi_bound_y':
                        $stmt->bindValue($identifier, $this->hi_bound_y, PDO::PARAM_STR);
                        break;
                    case 'lo_bound_y':
                        $stmt->bindValue($identifier, $this->lo_bound_y, PDO::PARAM_STR);
                        break;
                    case 'hi_critical_y':
                        $stmt->bindValue($identifier, $this->hi_critical_y, PDO::PARAM_STR);
                        break;
                    case 'lo_critical_y':
                        $stmt->bindValue($identifier, $this->lo_critical_y, PDO::PARAM_STR);
                        break;
                    case 'hi_toxic_y':
                        $stmt->bindValue($identifier, $this->hi_toxic_y, PDO::PARAM_STR);
                        break;
                    case 'lo_toxic_y':
                        $stmt->bindValue($identifier, $this->lo_toxic_y, PDO::PARAM_STR);
                        break;
                    case 'median_c':
                        $stmt->bindValue($identifier, $this->median_c, PDO::PARAM_STR);
                        break;
                    case 'hi_bound_c':
                        $stmt->bindValue($identifier, $this->hi_bound_c, PDO::PARAM_STR);
                        break;
                    case 'lo_bound_c':
                        $stmt->bindValue($identifier, $this->lo_bound_c, PDO::PARAM_STR);
                        break;
                    case 'hi_critical_c':
                        $stmt->bindValue($identifier, $this->hi_critical_c, PDO::PARAM_STR);
                        break;
                    case 'lo_critical_c':
                        $stmt->bindValue($identifier, $this->lo_critical_c, PDO::PARAM_STR);
                        break;
                    case 'hi_toxic_c':
                        $stmt->bindValue($identifier, $this->hi_toxic_c, PDO::PARAM_STR);
                        break;
                    case 'lo_toxic_c':
                        $stmt->bindValue($identifier, $this->lo_toxic_c, PDO::PARAM_STR);
                        break;
                    case 'method':
                        $stmt->bindValue($identifier, $this->method, PDO::PARAM_STR);
                        break;
                    case 'field_type':
                        $stmt->bindValue($identifier, $this->field_type, PDO::PARAM_STR);
                        break;
                    case 'add_type':
                        $stmt->bindValue($identifier, $this->add_type, PDO::PARAM_STR);
                        break;
                    case 'add_label':
                        $stmt->bindValue($identifier, $this->add_label, PDO::PARAM_STR);
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
                    case 'price':
                        $stmt->bindValue($identifier, $this->price, PDO::PARAM_STR);
                        break;
                    case 'price_3':
                        $stmt->bindValue($identifier, $this->price_3, PDO::PARAM_STR);
                        break;
                    case 'price_2':
                        $stmt->bindValue($identifier, $this->price_2, PDO::PARAM_STR);
                        break;
                    case 'price_1':
                        $stmt->bindValue($identifier, $this->price_1, PDO::PARAM_STR);
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
        $pos = CareTzLaboratoryParamTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getGroupId();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getShortname();
                break;
            case 4:
                return $this->getSortNr();
                break;
            case 5:
                return $this->getId();
                break;
            case 6:
                return $this->getMsrUnit();
                break;
            case 7:
                return $this->getMedian();
                break;
            case 8:
                return $this->getHiBound();
                break;
            case 9:
                return $this->getLoBound();
                break;
            case 10:
                return $this->getHiCritical();
                break;
            case 11:
                return $this->getLoCritical();
                break;
            case 12:
                return $this->getHiToxic();
                break;
            case 13:
                return $this->getLoToxic();
                break;
            case 14:
                return $this->getMedianF();
                break;
            case 15:
                return $this->getHiBoundF();
                break;
            case 16:
                return $this->getLoBoundF();
                break;
            case 17:
                return $this->getHiCriticalF();
                break;
            case 18:
                return $this->getLoCriticalF();
                break;
            case 19:
                return $this->getHiToxicF();
                break;
            case 20:
                return $this->getLoToxicF();
                break;
            case 21:
                return $this->getMedianN();
                break;
            case 22:
                return $this->getHiBoundN();
                break;
            case 23:
                return $this->getLoBoundN();
                break;
            case 24:
                return $this->getHiCriticalN();
                break;
            case 25:
                return $this->getLoCriticalN();
                break;
            case 26:
                return $this->getHiToxicN();
                break;
            case 27:
                return $this->getLoToxicN();
                break;
            case 28:
                return $this->getMedianY();
                break;
            case 29:
                return $this->getHiBoundY();
                break;
            case 30:
                return $this->getLoBoundY();
                break;
            case 31:
                return $this->getHiCriticalY();
                break;
            case 32:
                return $this->getLoCriticalY();
                break;
            case 33:
                return $this->getHiToxicY();
                break;
            case 34:
                return $this->getLoToxicY();
                break;
            case 35:
                return $this->getMedianC();
                break;
            case 36:
                return $this->getHiBoundC();
                break;
            case 37:
                return $this->getLoBoundC();
                break;
            case 38:
                return $this->getHiCriticalC();
                break;
            case 39:
                return $this->getLoCriticalC();
                break;
            case 40:
                return $this->getHiToxicC();
                break;
            case 41:
                return $this->getLoToxicC();
                break;
            case 42:
                return $this->getMethod();
                break;
            case 43:
                return $this->getFieldType();
                break;
            case 44:
                return $this->getAddType();
                break;
            case 45:
                return $this->getAddLabel();
                break;
            case 46:
                return $this->getStatus();
                break;
            case 47:
                return $this->getHistory();
                break;
            case 48:
                return $this->getModifyId();
                break;
            case 49:
                return $this->getModifyTime();
                break;
            case 50:
                return $this->getCreateId();
                break;
            case 51:
                return $this->getCreateTime();
                break;
            case 52:
                return $this->getPrice();
                break;
            case 53:
                return $this->getPrice3();
                break;
            case 54:
                return $this->getPrice2();
                break;
            case 55:
                return $this->getPrice1();
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

        if (isset($alreadyDumpedObjects['CareTzLaboratoryParam'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzLaboratoryParam'][$this->hashCode()] = true;
        $keys = CareTzLaboratoryParamTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getGroupId(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getShortname(),
            $keys[4] => $this->getSortNr(),
            $keys[5] => $this->getId(),
            $keys[6] => $this->getMsrUnit(),
            $keys[7] => $this->getMedian(),
            $keys[8] => $this->getHiBound(),
            $keys[9] => $this->getLoBound(),
            $keys[10] => $this->getHiCritical(),
            $keys[11] => $this->getLoCritical(),
            $keys[12] => $this->getHiToxic(),
            $keys[13] => $this->getLoToxic(),
            $keys[14] => $this->getMedianF(),
            $keys[15] => $this->getHiBoundF(),
            $keys[16] => $this->getLoBoundF(),
            $keys[17] => $this->getHiCriticalF(),
            $keys[18] => $this->getLoCriticalF(),
            $keys[19] => $this->getHiToxicF(),
            $keys[20] => $this->getLoToxicF(),
            $keys[21] => $this->getMedianN(),
            $keys[22] => $this->getHiBoundN(),
            $keys[23] => $this->getLoBoundN(),
            $keys[24] => $this->getHiCriticalN(),
            $keys[25] => $this->getLoCriticalN(),
            $keys[26] => $this->getHiToxicN(),
            $keys[27] => $this->getLoToxicN(),
            $keys[28] => $this->getMedianY(),
            $keys[29] => $this->getHiBoundY(),
            $keys[30] => $this->getLoBoundY(),
            $keys[31] => $this->getHiCriticalY(),
            $keys[32] => $this->getLoCriticalY(),
            $keys[33] => $this->getHiToxicY(),
            $keys[34] => $this->getLoToxicY(),
            $keys[35] => $this->getMedianC(),
            $keys[36] => $this->getHiBoundC(),
            $keys[37] => $this->getLoBoundC(),
            $keys[38] => $this->getHiCriticalC(),
            $keys[39] => $this->getLoCriticalC(),
            $keys[40] => $this->getHiToxicC(),
            $keys[41] => $this->getLoToxicC(),
            $keys[42] => $this->getMethod(),
            $keys[43] => $this->getFieldType(),
            $keys[44] => $this->getAddType(),
            $keys[45] => $this->getAddLabel(),
            $keys[46] => $this->getStatus(),
            $keys[47] => $this->getHistory(),
            $keys[48] => $this->getModifyId(),
            $keys[49] => $this->getModifyTime(),
            $keys[50] => $this->getCreateId(),
            $keys[51] => $this->getCreateTime(),
            $keys[52] => $this->getPrice(),
            $keys[53] => $this->getPrice3(),
            $keys[54] => $this->getPrice2(),
            $keys[55] => $this->getPrice1(),
        );
        if ($result[$keys[49]] instanceof \DateTimeInterface) {
            $result[$keys[49]] = $result[$keys[49]]->format('c');
        }

        if ($result[$keys[51]] instanceof \DateTimeInterface) {
            $result[$keys[51]] = $result[$keys[51]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzLaboratoryParamTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNr($value);
                break;
            case 1:
                $this->setGroupId($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setShortname($value);
                break;
            case 4:
                $this->setSortNr($value);
                break;
            case 5:
                $this->setId($value);
                break;
            case 6:
                $this->setMsrUnit($value);
                break;
            case 7:
                $this->setMedian($value);
                break;
            case 8:
                $this->setHiBound($value);
                break;
            case 9:
                $this->setLoBound($value);
                break;
            case 10:
                $this->setHiCritical($value);
                break;
            case 11:
                $this->setLoCritical($value);
                break;
            case 12:
                $this->setHiToxic($value);
                break;
            case 13:
                $this->setLoToxic($value);
                break;
            case 14:
                $this->setMedianF($value);
                break;
            case 15:
                $this->setHiBoundF($value);
                break;
            case 16:
                $this->setLoBoundF($value);
                break;
            case 17:
                $this->setHiCriticalF($value);
                break;
            case 18:
                $this->setLoCriticalF($value);
                break;
            case 19:
                $this->setHiToxicF($value);
                break;
            case 20:
                $this->setLoToxicF($value);
                break;
            case 21:
                $this->setMedianN($value);
                break;
            case 22:
                $this->setHiBoundN($value);
                break;
            case 23:
                $this->setLoBoundN($value);
                break;
            case 24:
                $this->setHiCriticalN($value);
                break;
            case 25:
                $this->setLoCriticalN($value);
                break;
            case 26:
                $this->setHiToxicN($value);
                break;
            case 27:
                $this->setLoToxicN($value);
                break;
            case 28:
                $this->setMedianY($value);
                break;
            case 29:
                $this->setHiBoundY($value);
                break;
            case 30:
                $this->setLoBoundY($value);
                break;
            case 31:
                $this->setHiCriticalY($value);
                break;
            case 32:
                $this->setLoCriticalY($value);
                break;
            case 33:
                $this->setHiToxicY($value);
                break;
            case 34:
                $this->setLoToxicY($value);
                break;
            case 35:
                $this->setMedianC($value);
                break;
            case 36:
                $this->setHiBoundC($value);
                break;
            case 37:
                $this->setLoBoundC($value);
                break;
            case 38:
                $this->setHiCriticalC($value);
                break;
            case 39:
                $this->setLoCriticalC($value);
                break;
            case 40:
                $this->setHiToxicC($value);
                break;
            case 41:
                $this->setLoToxicC($value);
                break;
            case 42:
                $this->setMethod($value);
                break;
            case 43:
                $this->setFieldType($value);
                break;
            case 44:
                $this->setAddType($value);
                break;
            case 45:
                $this->setAddLabel($value);
                break;
            case 46:
                $this->setStatus($value);
                break;
            case 47:
                $this->setHistory($value);
                break;
            case 48:
                $this->setModifyId($value);
                break;
            case 49:
                $this->setModifyTime($value);
                break;
            case 50:
                $this->setCreateId($value);
                break;
            case 51:
                $this->setCreateTime($value);
                break;
            case 52:
                $this->setPrice($value);
                break;
            case 53:
                $this->setPrice3($value);
                break;
            case 54:
                $this->setPrice2($value);
                break;
            case 55:
                $this->setPrice1($value);
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
        $keys = CareTzLaboratoryParamTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setGroupId($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setName($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setShortname($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setSortNr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setId($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setMsrUnit($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setMedian($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setHiBound($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setLoBound($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setHiCritical($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setLoCritical($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setHiToxic($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setLoToxic($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setMedianF($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setHiBoundF($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setLoBoundF($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setHiCriticalF($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setLoCriticalF($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setHiToxicF($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setLoToxicF($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setMedianN($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setHiBoundN($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setLoBoundN($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setHiCriticalN($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setLoCriticalN($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setHiToxicN($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setLoToxicN($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setMedianY($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setHiBoundY($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setLoBoundY($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setHiCriticalY($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setLoCriticalY($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setHiToxicY($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setLoToxicY($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setMedianC($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setHiBoundC($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setLoBoundC($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setHiCriticalC($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setLoCriticalC($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setHiToxicC($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setLoToxicC($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setMethod($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setFieldType($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setAddType($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setAddLabel($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setStatus($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setHistory($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setModifyId($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setModifyTime($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setCreateId($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setCreateTime($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setPrice($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setPrice3($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setPrice2($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setPrice1($arr[$keys[55]]);
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
     * @return $this|\CareMd\CareMd\CareTzLaboratoryParam The current object, for fluid interface
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
        $criteria = new Criteria(CareTzLaboratoryParamTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_NR)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_GROUP_ID)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_GROUP_ID, $this->group_id);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_NAME)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_SHORTNAME)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_SHORTNAME, $this->shortname);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_SORT_NR)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_SORT_NR, $this->sort_nr);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_ID)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MSR_UNIT)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_MSR_UNIT, $this->msr_unit);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MEDIAN)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_MEDIAN, $this->median);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_BOUND)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_BOUND, $this->hi_bound);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_BOUND)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_BOUND, $this->lo_bound);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL, $this->hi_critical);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL, $this->lo_critical);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_TOXIC)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_TOXIC, $this->hi_toxic);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_TOXIC)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_TOXIC, $this->lo_toxic);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MEDIAN_F)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_MEDIAN_F, $this->median_f);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_BOUND_F)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_BOUND_F, $this->hi_bound_f);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_BOUND_F)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_BOUND_F, $this->lo_bound_f);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_F)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_F, $this->hi_critical_f);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_F)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_F, $this->lo_critical_f);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_F)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_F, $this->hi_toxic_f);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_F)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_F, $this->lo_toxic_f);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MEDIAN_N)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_MEDIAN_N, $this->median_n);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_BOUND_N)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_BOUND_N, $this->hi_bound_n);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_BOUND_N)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_BOUND_N, $this->lo_bound_n);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_N)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_N, $this->hi_critical_n);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_N)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_N, $this->lo_critical_n);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_N)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_N, $this->hi_toxic_n);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_N)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_N, $this->lo_toxic_n);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MEDIAN_Y)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_MEDIAN_Y, $this->median_y);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_BOUND_Y)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_BOUND_Y, $this->hi_bound_y);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_BOUND_Y)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_BOUND_Y, $this->lo_bound_y);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_Y)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_Y, $this->hi_critical_y);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_Y)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_Y, $this->lo_critical_y);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_Y)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_Y, $this->hi_toxic_y);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_Y)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_Y, $this->lo_toxic_y);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MEDIAN_C)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_MEDIAN_C, $this->median_c);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_BOUND_C)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_BOUND_C, $this->hi_bound_c);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_BOUND_C)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_BOUND_C, $this->lo_bound_c);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_C)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_C, $this->hi_critical_c);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_C)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_C, $this->lo_critical_c);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_C)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_C, $this->hi_toxic_c);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_C)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_C, $this->lo_toxic_c);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_METHOD)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_METHOD, $this->method);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_FIELD_TYPE)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_FIELD_TYPE, $this->field_type);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_ADD_TYPE)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_ADD_TYPE, $this->add_type);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_ADD_LABEL)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_ADD_LABEL, $this->add_label);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_STATUS)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_HISTORY)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_PRICE)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_PRICE, $this->price);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_PRICE_3)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_PRICE_3, $this->price_3);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_PRICE_2)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_PRICE_2, $this->price_2);
        }
        if ($this->isColumnModified(CareTzLaboratoryParamTableMap::COL_PRICE_1)) {
            $criteria->add(CareTzLaboratoryParamTableMap::COL_PRICE_1, $this->price_1);
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
        $criteria = ChildCareTzLaboratoryParamQuery::create();
        $criteria->add(CareTzLaboratoryParamTableMap::COL_NR, $this->nr);

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
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzLaboratoryParam (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGroupId($this->getGroupId());
        $copyObj->setName($this->getName());
        $copyObj->setShortname($this->getShortname());
        $copyObj->setSortNr($this->getSortNr());
        $copyObj->setId($this->getId());
        $copyObj->setMsrUnit($this->getMsrUnit());
        $copyObj->setMedian($this->getMedian());
        $copyObj->setHiBound($this->getHiBound());
        $copyObj->setLoBound($this->getLoBound());
        $copyObj->setHiCritical($this->getHiCritical());
        $copyObj->setLoCritical($this->getLoCritical());
        $copyObj->setHiToxic($this->getHiToxic());
        $copyObj->setLoToxic($this->getLoToxic());
        $copyObj->setMedianF($this->getMedianF());
        $copyObj->setHiBoundF($this->getHiBoundF());
        $copyObj->setLoBoundF($this->getLoBoundF());
        $copyObj->setHiCriticalF($this->getHiCriticalF());
        $copyObj->setLoCriticalF($this->getLoCriticalF());
        $copyObj->setHiToxicF($this->getHiToxicF());
        $copyObj->setLoToxicF($this->getLoToxicF());
        $copyObj->setMedianN($this->getMedianN());
        $copyObj->setHiBoundN($this->getHiBoundN());
        $copyObj->setLoBoundN($this->getLoBoundN());
        $copyObj->setHiCriticalN($this->getHiCriticalN());
        $copyObj->setLoCriticalN($this->getLoCriticalN());
        $copyObj->setHiToxicN($this->getHiToxicN());
        $copyObj->setLoToxicN($this->getLoToxicN());
        $copyObj->setMedianY($this->getMedianY());
        $copyObj->setHiBoundY($this->getHiBoundY());
        $copyObj->setLoBoundY($this->getLoBoundY());
        $copyObj->setHiCriticalY($this->getHiCriticalY());
        $copyObj->setLoCriticalY($this->getLoCriticalY());
        $copyObj->setHiToxicY($this->getHiToxicY());
        $copyObj->setLoToxicY($this->getLoToxicY());
        $copyObj->setMedianC($this->getMedianC());
        $copyObj->setHiBoundC($this->getHiBoundC());
        $copyObj->setLoBoundC($this->getLoBoundC());
        $copyObj->setHiCriticalC($this->getHiCriticalC());
        $copyObj->setLoCriticalC($this->getLoCriticalC());
        $copyObj->setHiToxicC($this->getHiToxicC());
        $copyObj->setLoToxicC($this->getLoToxicC());
        $copyObj->setMethod($this->getMethod());
        $copyObj->setFieldType($this->getFieldType());
        $copyObj->setAddType($this->getAddType());
        $copyObj->setAddLabel($this->getAddLabel());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setPrice($this->getPrice());
        $copyObj->setPrice3($this->getPrice3());
        $copyObj->setPrice2($this->getPrice2());
        $copyObj->setPrice1($this->getPrice1());
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
     * @return \CareMd\CareMd\CareTzLaboratoryParam Clone of current object.
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
        $this->group_id = null;
        $this->name = null;
        $this->shortname = null;
        $this->sort_nr = null;
        $this->id = null;
        $this->msr_unit = null;
        $this->median = null;
        $this->hi_bound = null;
        $this->lo_bound = null;
        $this->hi_critical = null;
        $this->lo_critical = null;
        $this->hi_toxic = null;
        $this->lo_toxic = null;
        $this->median_f = null;
        $this->hi_bound_f = null;
        $this->lo_bound_f = null;
        $this->hi_critical_f = null;
        $this->lo_critical_f = null;
        $this->hi_toxic_f = null;
        $this->lo_toxic_f = null;
        $this->median_n = null;
        $this->hi_bound_n = null;
        $this->lo_bound_n = null;
        $this->hi_critical_n = null;
        $this->lo_critical_n = null;
        $this->hi_toxic_n = null;
        $this->lo_toxic_n = null;
        $this->median_y = null;
        $this->hi_bound_y = null;
        $this->lo_bound_y = null;
        $this->hi_critical_y = null;
        $this->lo_critical_y = null;
        $this->hi_toxic_y = null;
        $this->lo_toxic_y = null;
        $this->median_c = null;
        $this->hi_bound_c = null;
        $this->lo_bound_c = null;
        $this->hi_critical_c = null;
        $this->lo_critical_c = null;
        $this->hi_toxic_c = null;
        $this->lo_toxic_c = null;
        $this->method = null;
        $this->field_type = null;
        $this->add_type = null;
        $this->add_label = null;
        $this->status = null;
        $this->history = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->create_id = null;
        $this->create_time = null;
        $this->price = null;
        $this->price_3 = null;
        $this->price_2 = null;
        $this->price_1 = null;
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
        return (string) $this->exportTo(CareTzLaboratoryParamTableMap::DEFAULT_STRING_FORMAT);
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
