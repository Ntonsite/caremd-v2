<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvCaseQuery as ChildCareTzArvCaseQuery;
use CareMd\CareMd\Map\CareTzArvCaseTableMap;
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
 * Base class that represents a row from the 'care_tz_arv_case' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzArvCase implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzArvCaseTableMap';


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
     * The value for the care_tz_arv_case_id field.
     *
     * @var        string
     */
    protected $care_tz_arv_case_id;

    /**
     * The value for the pid field.
     *
     * @var        int
     */
    protected $pid;

    /**
     * The value for the datetime_first_hivtest field.
     *
     * @var        DateTime
     */
    protected $datetime_first_hivtest;

    /**
     * The value for the datetime_start_arv field.
     *
     * @var        DateTime
     */
    protected $datetime_start_arv;

    /**
     * The value for the arv_pid field.
     *
     * @var        string
     */
    protected $arv_pid;

    /**
     * The value for the district field.
     *
     * @var        string
     */
    protected $district;

    /**
     * The value for the village field.
     *
     * @var        string
     */
    protected $village;

    /**
     * The value for the street field.
     *
     * @var        string
     */
    protected $street;

    /**
     * The value for the balozi field.
     *
     * @var        string
     */
    protected $balozi;

    /**
     * The value for the chairman_of_village field.
     *
     * @var        string
     */
    protected $chairman_of_village;

    /**
     * The value for the head_of_family field.
     *
     * @var        string
     */
    protected $head_of_family;

    /**
     * The value for the name_of_secretary field.
     *
     * @var        string
     */
    protected $name_of_secretary;

    /**
     * The value for the secretary_phone field.
     *
     * @var        string
     */
    protected $secretary_phone;

    /**
     * The value for the secretary_adress field.
     *
     * @var        string
     */
    protected $secretary_adress;

    /**
     * The value for the history field.
     *
     * @var        string
     */
    protected $history;

    /**
     * The value for the create_id field.
     *
     * @var        DateTime
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
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTzArvCase object.
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
     * Compares this with another <code>CareTzArvCase</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzArvCase</code>, delegates to
     * <code>equals(CareTzArvCase)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzArvCase The current object, for fluid interface
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
     * Get the [care_tz_arv_case_id] column value.
     *
     * @return string
     */
    public function getCareTzArvCaseId()
    {
        return $this->care_tz_arv_case_id;
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
     * Get the [optionally formatted] temporal [datetime_first_hivtest] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatetimeFirstHivtest($format = NULL)
    {
        if ($format === null) {
            return $this->datetime_first_hivtest;
        } else {
            return $this->datetime_first_hivtest instanceof \DateTimeInterface ? $this->datetime_first_hivtest->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [datetime_start_arv] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatetimeStartArv($format = NULL)
    {
        if ($format === null) {
            return $this->datetime_start_arv;
        } else {
            return $this->datetime_start_arv instanceof \DateTimeInterface ? $this->datetime_start_arv->format($format) : null;
        }
    }

    /**
     * Get the [arv_pid] column value.
     *
     * @return string
     */
    public function getArvPid()
    {
        return $this->arv_pid;
    }

    /**
     * Get the [district] column value.
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Get the [village] column value.
     *
     * @return string
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * Get the [street] column value.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Get the [balozi] column value.
     *
     * @return string
     */
    public function getBalozi()
    {
        return $this->balozi;
    }

    /**
     * Get the [chairman_of_village] column value.
     *
     * @return string
     */
    public function getChairmanOfVillage()
    {
        return $this->chairman_of_village;
    }

    /**
     * Get the [head_of_family] column value.
     *
     * @return string
     */
    public function getHeadOfFamily()
    {
        return $this->head_of_family;
    }

    /**
     * Get the [name_of_secretary] column value.
     *
     * @return string
     */
    public function getNameOfSecretary()
    {
        return $this->name_of_secretary;
    }

    /**
     * Get the [secretary_phone] column value.
     *
     * @return string
     */
    public function getSecretaryPhone()
    {
        return $this->secretary_phone;
    }

    /**
     * Get the [secretary_adress] column value.
     *
     * @return string
     */
    public function getSecretaryAdress()
    {
        return $this->secretary_adress;
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
     * Get the [optionally formatted] temporal [create_id] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreateId($format = NULL)
    {
        if ($format === null) {
            return $this->create_id;
        } else {
            return $this->create_id instanceof \DateTimeInterface ? $this->create_id->format($format) : null;
        }
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
     * Set the value of [care_tz_arv_case_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setCareTzArvCaseId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->care_tz_arv_case_id !== $v) {
            $this->care_tz_arv_case_id = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID] = true;
        }

        return $this;
    } // setCareTzArvCaseId()

    /**
     * Set the value of [pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_PID] = true;
        }

        return $this;
    } // setPid()

    /**
     * Sets the value of [datetime_first_hivtest] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setDatetimeFirstHivtest($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datetime_first_hivtest !== null || $dt !== null) {
            if ($this->datetime_first_hivtest === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->datetime_first_hivtest->format("Y-m-d H:i:s.u")) {
                $this->datetime_first_hivtest = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvCaseTableMap::COL_DATETIME_FIRST_HIVTEST] = true;
            }
        } // if either are not null

        return $this;
    } // setDatetimeFirstHivtest()

    /**
     * Sets the value of [datetime_start_arv] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setDatetimeStartArv($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datetime_start_arv !== null || $dt !== null) {
            if ($this->datetime_start_arv === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->datetime_start_arv->format("Y-m-d H:i:s.u")) {
                $this->datetime_start_arv = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvCaseTableMap::COL_DATETIME_START_ARV] = true;
            }
        } // if either are not null

        return $this;
    } // setDatetimeStartArv()

    /**
     * Set the value of [arv_pid] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setArvPid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arv_pid !== $v) {
            $this->arv_pid = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_ARV_PID] = true;
        }

        return $this;
    } // setArvPid()

    /**
     * Set the value of [district] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setDistrict($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->district !== $v) {
            $this->district = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_DISTRICT] = true;
        }

        return $this;
    } // setDistrict()

    /**
     * Set the value of [village] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setVillage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->village !== $v) {
            $this->village = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_VILLAGE] = true;
        }

        return $this;
    } // setVillage()

    /**
     * Set the value of [street] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setStreet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->street !== $v) {
            $this->street = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_STREET] = true;
        }

        return $this;
    } // setStreet()

    /**
     * Set the value of [balozi] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setBalozi($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->balozi !== $v) {
            $this->balozi = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_BALOZI] = true;
        }

        return $this;
    } // setBalozi()

    /**
     * Set the value of [chairman_of_village] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setChairmanOfVillage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->chairman_of_village !== $v) {
            $this->chairman_of_village = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_CHAIRMAN_OF_VILLAGE] = true;
        }

        return $this;
    } // setChairmanOfVillage()

    /**
     * Set the value of [head_of_family] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setHeadOfFamily($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->head_of_family !== $v) {
            $this->head_of_family = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_HEAD_OF_FAMILY] = true;
        }

        return $this;
    } // setHeadOfFamily()

    /**
     * Set the value of [name_of_secretary] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setNameOfSecretary($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_of_secretary !== $v) {
            $this->name_of_secretary = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_NAME_OF_SECRETARY] = true;
        }

        return $this;
    } // setNameOfSecretary()

    /**
     * Set the value of [secretary_phone] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setSecretaryPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->secretary_phone !== $v) {
            $this->secretary_phone = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_SECRETARY_PHONE] = true;
        }

        return $this;
    } // setSecretaryPhone()

    /**
     * Set the value of [secretary_adress] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setSecretaryAdress($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->secretary_adress !== $v) {
            $this->secretary_adress = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_SECRETARY_ADRESS] = true;
        }

        return $this;
    } // setSecretaryAdress()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Sets the value of [create_id] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_id !== null || $dt !== null) {
            if ($this->create_id === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->create_id->format("Y-m-d H:i:s.u")) {
                $this->create_id = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvCaseTableMap::COL_CREATE_ID] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateId()

    /**
     * Set the value of [create_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_time !== $v) {
            $this->create_time = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_CREATE_TIME] = true;
        }

        return $this;
    } // setCreateTime()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTzArvCaseTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzArvCaseTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzArvCaseTableMap::translateFieldName('CareTzArvCaseId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->care_tz_arv_case_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzArvCaseTableMap::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzArvCaseTableMap::translateFieldName('DatetimeFirstHivtest', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->datetime_first_hivtest = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzArvCaseTableMap::translateFieldName('DatetimeStartArv', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->datetime_start_arv = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzArvCaseTableMap::translateFieldName('ArvPid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arv_pid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzArvCaseTableMap::translateFieldName('District', TableMap::TYPE_PHPNAME, $indexType)];
            $this->district = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzArvCaseTableMap::translateFieldName('Village', TableMap::TYPE_PHPNAME, $indexType)];
            $this->village = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzArvCaseTableMap::translateFieldName('Street', TableMap::TYPE_PHPNAME, $indexType)];
            $this->street = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzArvCaseTableMap::translateFieldName('Balozi', TableMap::TYPE_PHPNAME, $indexType)];
            $this->balozi = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzArvCaseTableMap::translateFieldName('ChairmanOfVillage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->chairman_of_village = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTzArvCaseTableMap::translateFieldName('HeadOfFamily', TableMap::TYPE_PHPNAME, $indexType)];
            $this->head_of_family = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTzArvCaseTableMap::translateFieldName('NameOfSecretary', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_of_secretary = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTzArvCaseTableMap::translateFieldName('SecretaryPhone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->secretary_phone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTzArvCaseTableMap::translateFieldName('SecretaryAdress', TableMap::TYPE_PHPNAME, $indexType)];
            $this->secretary_adress = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTzArvCaseTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTzArvCaseTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_id = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTzArvCaseTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTzArvCaseTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTzArvCaseTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 19; // 19 = CareTzArvCaseTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzArvCase'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvCaseTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzArvCaseQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzArvCase::setDeleted()
     * @see CareTzArvCase::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvCaseTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzArvCaseQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvCaseTableMap::DATABASE_NAME);
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
                CareTzArvCaseTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID] = true;
        if (null !== $this->care_tz_arv_case_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'care_tz_arv_case_id';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_PID)) {
            $modifiedColumns[':p' . $index++]  = 'pid';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_DATETIME_FIRST_HIVTEST)) {
            $modifiedColumns[':p' . $index++]  = 'datetime_first_hivtest';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_DATETIME_START_ARV)) {
            $modifiedColumns[':p' . $index++]  = 'datetime_start_arv';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_ARV_PID)) {
            $modifiedColumns[':p' . $index++]  = 'arv_pid';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_DISTRICT)) {
            $modifiedColumns[':p' . $index++]  = 'district';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_VILLAGE)) {
            $modifiedColumns[':p' . $index++]  = 'village';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_STREET)) {
            $modifiedColumns[':p' . $index++]  = 'street';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_BALOZI)) {
            $modifiedColumns[':p' . $index++]  = 'balozi';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_CHAIRMAN_OF_VILLAGE)) {
            $modifiedColumns[':p' . $index++]  = 'chairman_of_village';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_HEAD_OF_FAMILY)) {
            $modifiedColumns[':p' . $index++]  = 'head_of_family';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_NAME_OF_SECRETARY)) {
            $modifiedColumns[':p' . $index++]  = 'name_of_secretary';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_SECRETARY_PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'secretary_phone';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_SECRETARY_ADRESS)) {
            $modifiedColumns[':p' . $index++]  = 'secretary_adress';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_arv_case (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'care_tz_arv_case_id':
                        $stmt->bindValue($identifier, $this->care_tz_arv_case_id, PDO::PARAM_INT);
                        break;
                    case 'pid':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_INT);
                        break;
                    case 'datetime_first_hivtest':
                        $stmt->bindValue($identifier, $this->datetime_first_hivtest ? $this->datetime_first_hivtest->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'datetime_start_arv':
                        $stmt->bindValue($identifier, $this->datetime_start_arv ? $this->datetime_start_arv->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'arv_pid':
                        $stmt->bindValue($identifier, $this->arv_pid, PDO::PARAM_INT);
                        break;
                    case 'district':
                        $stmt->bindValue($identifier, $this->district, PDO::PARAM_STR);
                        break;
                    case 'village':
                        $stmt->bindValue($identifier, $this->village, PDO::PARAM_STR);
                        break;
                    case 'street':
                        $stmt->bindValue($identifier, $this->street, PDO::PARAM_STR);
                        break;
                    case 'balozi':
                        $stmt->bindValue($identifier, $this->balozi, PDO::PARAM_STR);
                        break;
                    case 'chairman_of_village':
                        $stmt->bindValue($identifier, $this->chairman_of_village, PDO::PARAM_STR);
                        break;
                    case 'head_of_family':
                        $stmt->bindValue($identifier, $this->head_of_family, PDO::PARAM_STR);
                        break;
                    case 'name_of_secretary':
                        $stmt->bindValue($identifier, $this->name_of_secretary, PDO::PARAM_STR);
                        break;
                    case 'secretary_phone':
                        $stmt->bindValue($identifier, $this->secretary_phone, PDO::PARAM_STR);
                        break;
                    case 'secretary_adress':
                        $stmt->bindValue($identifier, $this->secretary_adress, PDO::PARAM_STR);
                        break;
                    case 'history':
                        $stmt->bindValue($identifier, $this->history, PDO::PARAM_STR);
                        break;
                    case 'create_id':
                        $stmt->bindValue($identifier, $this->create_id ? $this->create_id->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
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
        $this->setCareTzArvCaseId($pk);

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
        $pos = CareTzArvCaseTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getCareTzArvCaseId();
                break;
            case 1:
                return $this->getPid();
                break;
            case 2:
                return $this->getDatetimeFirstHivtest();
                break;
            case 3:
                return $this->getDatetimeStartArv();
                break;
            case 4:
                return $this->getArvPid();
                break;
            case 5:
                return $this->getDistrict();
                break;
            case 6:
                return $this->getVillage();
                break;
            case 7:
                return $this->getStreet();
                break;
            case 8:
                return $this->getBalozi();
                break;
            case 9:
                return $this->getChairmanOfVillage();
                break;
            case 10:
                return $this->getHeadOfFamily();
                break;
            case 11:
                return $this->getNameOfSecretary();
                break;
            case 12:
                return $this->getSecretaryPhone();
                break;
            case 13:
                return $this->getSecretaryAdress();
                break;
            case 14:
                return $this->getHistory();
                break;
            case 15:
                return $this->getCreateId();
                break;
            case 16:
                return $this->getCreateTime();
                break;
            case 17:
                return $this->getModifyId();
                break;
            case 18:
                return $this->getModifyTime();
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

        if (isset($alreadyDumpedObjects['CareTzArvCase'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzArvCase'][$this->hashCode()] = true;
        $keys = CareTzArvCaseTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCareTzArvCaseId(),
            $keys[1] => $this->getPid(),
            $keys[2] => $this->getDatetimeFirstHivtest(),
            $keys[3] => $this->getDatetimeStartArv(),
            $keys[4] => $this->getArvPid(),
            $keys[5] => $this->getDistrict(),
            $keys[6] => $this->getVillage(),
            $keys[7] => $this->getStreet(),
            $keys[8] => $this->getBalozi(),
            $keys[9] => $this->getChairmanOfVillage(),
            $keys[10] => $this->getHeadOfFamily(),
            $keys[11] => $this->getNameOfSecretary(),
            $keys[12] => $this->getSecretaryPhone(),
            $keys[13] => $this->getSecretaryAdress(),
            $keys[14] => $this->getHistory(),
            $keys[15] => $this->getCreateId(),
            $keys[16] => $this->getCreateTime(),
            $keys[17] => $this->getModifyId(),
            $keys[18] => $this->getModifyTime(),
        );
        if ($result[$keys[2]] instanceof \DateTimeInterface) {
            $result[$keys[2]] = $result[$keys[2]]->format('c');
        }

        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('c');
        }

        if ($result[$keys[15]] instanceof \DateTimeInterface) {
            $result[$keys[15]] = $result[$keys[15]]->format('c');
        }

        if ($result[$keys[18]] instanceof \DateTimeInterface) {
            $result[$keys[18]] = $result[$keys[18]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTzArvCase
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzArvCaseTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzArvCase
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setCareTzArvCaseId($value);
                break;
            case 1:
                $this->setPid($value);
                break;
            case 2:
                $this->setDatetimeFirstHivtest($value);
                break;
            case 3:
                $this->setDatetimeStartArv($value);
                break;
            case 4:
                $this->setArvPid($value);
                break;
            case 5:
                $this->setDistrict($value);
                break;
            case 6:
                $this->setVillage($value);
                break;
            case 7:
                $this->setStreet($value);
                break;
            case 8:
                $this->setBalozi($value);
                break;
            case 9:
                $this->setChairmanOfVillage($value);
                break;
            case 10:
                $this->setHeadOfFamily($value);
                break;
            case 11:
                $this->setNameOfSecretary($value);
                break;
            case 12:
                $this->setSecretaryPhone($value);
                break;
            case 13:
                $this->setSecretaryAdress($value);
                break;
            case 14:
                $this->setHistory($value);
                break;
            case 15:
                $this->setCreateId($value);
                break;
            case 16:
                $this->setCreateTime($value);
                break;
            case 17:
                $this->setModifyId($value);
                break;
            case 18:
                $this->setModifyTime($value);
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
        $keys = CareTzArvCaseTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setCareTzArvCaseId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDatetimeFirstHivtest($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setDatetimeStartArv($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArvPid($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setDistrict($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setVillage($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setStreet($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setBalozi($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setChairmanOfVillage($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setHeadOfFamily($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setNameOfSecretary($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setSecretaryPhone($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setSecretaryAdress($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setHistory($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCreateId($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setCreateTime($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setModifyId($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setModifyTime($arr[$keys[18]]);
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
     * @return $this|\CareMd\CareMd\CareTzArvCase The current object, for fluid interface
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
        $criteria = new Criteria(CareTzArvCaseTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID)) {
            $criteria->add(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID, $this->care_tz_arv_case_id);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_PID)) {
            $criteria->add(CareTzArvCaseTableMap::COL_PID, $this->pid);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_DATETIME_FIRST_HIVTEST)) {
            $criteria->add(CareTzArvCaseTableMap::COL_DATETIME_FIRST_HIVTEST, $this->datetime_first_hivtest);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_DATETIME_START_ARV)) {
            $criteria->add(CareTzArvCaseTableMap::COL_DATETIME_START_ARV, $this->datetime_start_arv);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_ARV_PID)) {
            $criteria->add(CareTzArvCaseTableMap::COL_ARV_PID, $this->arv_pid);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_DISTRICT)) {
            $criteria->add(CareTzArvCaseTableMap::COL_DISTRICT, $this->district);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_VILLAGE)) {
            $criteria->add(CareTzArvCaseTableMap::COL_VILLAGE, $this->village);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_STREET)) {
            $criteria->add(CareTzArvCaseTableMap::COL_STREET, $this->street);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_BALOZI)) {
            $criteria->add(CareTzArvCaseTableMap::COL_BALOZI, $this->balozi);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_CHAIRMAN_OF_VILLAGE)) {
            $criteria->add(CareTzArvCaseTableMap::COL_CHAIRMAN_OF_VILLAGE, $this->chairman_of_village);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_HEAD_OF_FAMILY)) {
            $criteria->add(CareTzArvCaseTableMap::COL_HEAD_OF_FAMILY, $this->head_of_family);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_NAME_OF_SECRETARY)) {
            $criteria->add(CareTzArvCaseTableMap::COL_NAME_OF_SECRETARY, $this->name_of_secretary);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_SECRETARY_PHONE)) {
            $criteria->add(CareTzArvCaseTableMap::COL_SECRETARY_PHONE, $this->secretary_phone);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_SECRETARY_ADRESS)) {
            $criteria->add(CareTzArvCaseTableMap::COL_SECRETARY_ADRESS, $this->secretary_adress);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_HISTORY)) {
            $criteria->add(CareTzArvCaseTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTzArvCaseTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTzArvCaseTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTzArvCaseTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTzArvCaseTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTzArvCaseTableMap::COL_MODIFY_TIME, $this->modify_time);
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
        $criteria = ChildCareTzArvCaseQuery::create();
        $criteria->add(CareTzArvCaseTableMap::COL_CARE_TZ_ARV_CASE_ID, $this->care_tz_arv_case_id);

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
        $validPk = null !== $this->getCareTzArvCaseId();

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
        return $this->getCareTzArvCaseId();
    }

    /**
     * Generic method to set the primary key (care_tz_arv_case_id column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCareTzArvCaseId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getCareTzArvCaseId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzArvCase (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPid($this->getPid());
        $copyObj->setDatetimeFirstHivtest($this->getDatetimeFirstHivtest());
        $copyObj->setDatetimeStartArv($this->getDatetimeStartArv());
        $copyObj->setArvPid($this->getArvPid());
        $copyObj->setDistrict($this->getDistrict());
        $copyObj->setVillage($this->getVillage());
        $copyObj->setStreet($this->getStreet());
        $copyObj->setBalozi($this->getBalozi());
        $copyObj->setChairmanOfVillage($this->getChairmanOfVillage());
        $copyObj->setHeadOfFamily($this->getHeadOfFamily());
        $copyObj->setNameOfSecretary($this->getNameOfSecretary());
        $copyObj->setSecretaryPhone($this->getSecretaryPhone());
        $copyObj->setSecretaryAdress($this->getSecretaryAdress());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCareTzArvCaseId(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareTzArvCase Clone of current object.
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
        $this->care_tz_arv_case_id = null;
        $this->pid = null;
        $this->datetime_first_hivtest = null;
        $this->datetime_start_arv = null;
        $this->arv_pid = null;
        $this->district = null;
        $this->village = null;
        $this->street = null;
        $this->balozi = null;
        $this->chairman_of_village = null;
        $this->head_of_family = null;
        $this->name_of_secretary = null;
        $this->secretary_phone = null;
        $this->secretary_adress = null;
        $this->history = null;
        $this->create_id = null;
        $this->create_time = null;
        $this->modify_id = null;
        $this->modify_time = null;
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
        return (string) $this->exportTo(CareTzArvCaseTableMap::DEFAULT_STRING_FORMAT);
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
