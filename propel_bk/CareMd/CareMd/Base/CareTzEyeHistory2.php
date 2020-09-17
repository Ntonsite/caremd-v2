<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTzEyeHistory2Query as ChildCareTzEyeHistory2Query;
use CareMd\CareMd\Map\CareTzEyeHistory2TableMap;
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
 * Base class that represents a row from the 'care_tz_eye_history2' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzEyeHistory2 implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzEyeHistory2TableMap';


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
     * The value for the id field.
     *
     * @var        int
     */
    protected $id;

    /**
     * The value for the pid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pid;

    /**
     * The value for the hid1 field.
     *
     * @var        string
     */
    protected $hid1;

    /**
     * The value for the hid1e field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hid1e;

    /**
     * The value for the hid1d field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hid1d;

    /**
     * The value for the hid2 field.
     *
     * @var        string
     */
    protected $hid2;

    /**
     * The value for the hid2e field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hid2e;

    /**
     * The value for the hid2d field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hid2d;

    /**
     * The value for the hid3 field.
     *
     * @var        string
     */
    protected $hid3;

    /**
     * The value for the hid3e field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hid3e;

    /**
     * The value for the hid3d field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hid3d;

    /**
     * The value for the hid4 field.
     *
     * @var        string
     */
    protected $hid4;

    /**
     * The value for the hid4e field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hid4e;

    /**
     * The value for the hid4d field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hid4d;

    /**
     * The value for the hid5 field.
     *
     * @var        string
     */
    protected $hid5;

    /**
     * The value for the hid5e field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hid5e;

    /**
     * The value for the hid5d field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hid5d;

    /**
     * The value for the hid6 field.
     *
     * @var        string
     */
    protected $hid6;

    /**
     * The value for the hid6e field.
     *
     * @var        string
     */
    protected $hid6e;

    /**
     * The value for the hid6d field.
     *
     * @var        string
     */
    protected $hid6d;

    /**
     * The value for the hid7 field.
     *
     * @var        string
     */
    protected $hid7;

    /**
     * The value for the hid7e field.
     *
     * @var        string
     */
    protected $hid7e;

    /**
     * The value for the hid7d field.
     *
     * @var        string
     */
    protected $hid7d;

    /**
     * The value for the hid8 field.
     *
     * @var        string
     */
    protected $hid8;

    /**
     * The value for the signature field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $signature;

    /**
     * The value for the remarks field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the examination_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $examination_date;

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
        $this->pid = '';
        $this->hid1e = '';
        $this->hid1d = '';
        $this->hid2e = '';
        $this->hid2d = '';
        $this->hid3e = '';
        $this->hid3d = '';
        $this->hid4e = '';
        $this->hid4d = '';
        $this->hid5e = '';
        $this->hid5d = '';
        $this->signature = '';
        $this->remarks = '';
        $this->examination_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTzEyeHistory2 object.
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
     * Compares this with another <code>CareTzEyeHistory2</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzEyeHistory2</code>, delegates to
     * <code>equals(CareTzEyeHistory2)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzEyeHistory2 The current object, for fluid interface
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
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [pid] column value.
     *
     * @return string
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Get the [hid1] column value.
     *
     * @return string
     */
    public function getHid1()
    {
        return $this->hid1;
    }

    /**
     * Get the [hid1e] column value.
     *
     * @return string
     */
    public function getHid1e()
    {
        return $this->hid1e;
    }

    /**
     * Get the [hid1d] column value.
     *
     * @return string
     */
    public function getHid1d()
    {
        return $this->hid1d;
    }

    /**
     * Get the [hid2] column value.
     *
     * @return string
     */
    public function getHid2()
    {
        return $this->hid2;
    }

    /**
     * Get the [hid2e] column value.
     *
     * @return string
     */
    public function getHid2e()
    {
        return $this->hid2e;
    }

    /**
     * Get the [hid2d] column value.
     *
     * @return string
     */
    public function getHid2d()
    {
        return $this->hid2d;
    }

    /**
     * Get the [hid3] column value.
     *
     * @return string
     */
    public function getHid3()
    {
        return $this->hid3;
    }

    /**
     * Get the [hid3e] column value.
     *
     * @return string
     */
    public function getHid3e()
    {
        return $this->hid3e;
    }

    /**
     * Get the [hid3d] column value.
     *
     * @return string
     */
    public function getHid3d()
    {
        return $this->hid3d;
    }

    /**
     * Get the [hid4] column value.
     *
     * @return string
     */
    public function getHid4()
    {
        return $this->hid4;
    }

    /**
     * Get the [hid4e] column value.
     *
     * @return string
     */
    public function getHid4e()
    {
        return $this->hid4e;
    }

    /**
     * Get the [hid4d] column value.
     *
     * @return string
     */
    public function getHid4d()
    {
        return $this->hid4d;
    }

    /**
     * Get the [hid5] column value.
     *
     * @return string
     */
    public function getHid5()
    {
        return $this->hid5;
    }

    /**
     * Get the [hid5e] column value.
     *
     * @return string
     */
    public function getHid5e()
    {
        return $this->hid5e;
    }

    /**
     * Get the [hid5d] column value.
     *
     * @return string
     */
    public function getHid5d()
    {
        return $this->hid5d;
    }

    /**
     * Get the [hid6] column value.
     *
     * @return string
     */
    public function getHid6()
    {
        return $this->hid6;
    }

    /**
     * Get the [hid6e] column value.
     *
     * @return string
     */
    public function getHid6e()
    {
        return $this->hid6e;
    }

    /**
     * Get the [hid6d] column value.
     *
     * @return string
     */
    public function getHid6d()
    {
        return $this->hid6d;
    }

    /**
     * Get the [hid7] column value.
     *
     * @return string
     */
    public function getHid7()
    {
        return $this->hid7;
    }

    /**
     * Get the [hid7e] column value.
     *
     * @return string
     */
    public function getHid7e()
    {
        return $this->hid7e;
    }

    /**
     * Get the [hid7d] column value.
     *
     * @return string
     */
    public function getHid7d()
    {
        return $this->hid7d;
    }

    /**
     * Get the [hid8] column value.
     *
     * @return string
     */
    public function getHid8()
    {
        return $this->hid8;
    }

    /**
     * Get the [signature] column value.
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Get the [remarks] column value.
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Get the [optionally formatted] temporal [examination_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getExaminationDate($format = NULL)
    {
        if ($format === null) {
            return $this->examination_date;
        } else {
            return $this->examination_date instanceof \DateTimeInterface ? $this->examination_date->format($format) : null;
        }
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [pid] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_PID] = true;
        }

        return $this;
    } // setPid()

    /**
     * Set the value of [hid1] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid1 !== $v) {
            $this->hid1 = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID1] = true;
        }

        return $this;
    } // setHid1()

    /**
     * Set the value of [hid1e] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid1e($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid1e !== $v) {
            $this->hid1e = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID1E] = true;
        }

        return $this;
    } // setHid1e()

    /**
     * Set the value of [hid1d] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid1d($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid1d !== $v) {
            $this->hid1d = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID1D] = true;
        }

        return $this;
    } // setHid1d()

    /**
     * Set the value of [hid2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid2 !== $v) {
            $this->hid2 = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID2] = true;
        }

        return $this;
    } // setHid2()

    /**
     * Set the value of [hid2e] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid2e($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid2e !== $v) {
            $this->hid2e = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID2E] = true;
        }

        return $this;
    } // setHid2e()

    /**
     * Set the value of [hid2d] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid2d($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid2d !== $v) {
            $this->hid2d = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID2D] = true;
        }

        return $this;
    } // setHid2d()

    /**
     * Set the value of [hid3] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid3 !== $v) {
            $this->hid3 = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID3] = true;
        }

        return $this;
    } // setHid3()

    /**
     * Set the value of [hid3e] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid3e($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid3e !== $v) {
            $this->hid3e = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID3E] = true;
        }

        return $this;
    } // setHid3e()

    /**
     * Set the value of [hid3d] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid3d($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid3d !== $v) {
            $this->hid3d = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID3D] = true;
        }

        return $this;
    } // setHid3d()

    /**
     * Set the value of [hid4] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid4 !== $v) {
            $this->hid4 = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID4] = true;
        }

        return $this;
    } // setHid4()

    /**
     * Set the value of [hid4e] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid4e($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid4e !== $v) {
            $this->hid4e = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID4E] = true;
        }

        return $this;
    } // setHid4e()

    /**
     * Set the value of [hid4d] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid4d($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid4d !== $v) {
            $this->hid4d = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID4D] = true;
        }

        return $this;
    } // setHid4d()

    /**
     * Set the value of [hid5] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid5 !== $v) {
            $this->hid5 = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID5] = true;
        }

        return $this;
    } // setHid5()

    /**
     * Set the value of [hid5e] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid5e($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid5e !== $v) {
            $this->hid5e = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID5E] = true;
        }

        return $this;
    } // setHid5e()

    /**
     * Set the value of [hid5d] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid5d($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid5d !== $v) {
            $this->hid5d = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID5D] = true;
        }

        return $this;
    } // setHid5d()

    /**
     * Set the value of [hid6] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid6 !== $v) {
            $this->hid6 = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID6] = true;
        }

        return $this;
    } // setHid6()

    /**
     * Set the value of [hid6e] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid6e($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid6e !== $v) {
            $this->hid6e = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID6E] = true;
        }

        return $this;
    } // setHid6e()

    /**
     * Set the value of [hid6d] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid6d($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid6d !== $v) {
            $this->hid6d = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID6D] = true;
        }

        return $this;
    } // setHid6d()

    /**
     * Set the value of [hid7] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid7 !== $v) {
            $this->hid7 = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID7] = true;
        }

        return $this;
    } // setHid7()

    /**
     * Set the value of [hid7e] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid7e($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid7e !== $v) {
            $this->hid7e = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID7E] = true;
        }

        return $this;
    } // setHid7e()

    /**
     * Set the value of [hid7d] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid7d($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid7d !== $v) {
            $this->hid7d = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID7D] = true;
        }

        return $this;
    } // setHid7d()

    /**
     * Set the value of [hid8] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setHid8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hid8 !== $v) {
            $this->hid8 = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_HID8] = true;
        }

        return $this;
    } // setHid8()

    /**
     * Set the value of [signature] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setSignature($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->signature !== $v) {
            $this->signature = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_SIGNATURE] = true;
        }

        return $this;
    } // setSignature()

    /**
     * Set the value of [remarks] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_REMARKS] = true;
        }

        return $this;
    } // setRemarks()

    /**
     * Sets the value of [examination_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object (for fluent API support)
     */
    public function setExaminationDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->examination_date !== null || $dt !== null) {
            if ( ($dt != $this->examination_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->examination_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_EXAMINATION_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setExaminationDate()

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
            if ($this->pid !== '') {
                return false;
            }

            if ($this->hid1e !== '') {
                return false;
            }

            if ($this->hid1d !== '') {
                return false;
            }

            if ($this->hid2e !== '') {
                return false;
            }

            if ($this->hid2d !== '') {
                return false;
            }

            if ($this->hid3e !== '') {
                return false;
            }

            if ($this->hid3d !== '') {
                return false;
            }

            if ($this->hid4e !== '') {
                return false;
            }

            if ($this->hid4d !== '') {
                return false;
            }

            if ($this->hid5e !== '') {
                return false;
            }

            if ($this->hid5d !== '') {
                return false;
            }

            if ($this->signature !== '') {
                return false;
            }

            if ($this->remarks !== '') {
                return false;
            }

            if ($this->examination_date && $this->examination_date->format('Y-m-d') !== NULL) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid1e', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid1e = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid1d', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid1d = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid2e', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid2e = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid2d', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid2d = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid3e', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid3e = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid3d', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid3d = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid4e', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid4e = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid4d', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid4d = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid5e', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid5e = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid5d', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid5d = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid6e', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid6e = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid6d', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid6d = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid7e', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid7e = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid7d', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid7d = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Hid8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hid8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Signature', TableMap::TYPE_PHPNAME, $indexType)];
            $this->signature = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('Remarks', TableMap::TYPE_PHPNAME, $indexType)];
            $this->remarks = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareTzEyeHistory2TableMap::translateFieldName('ExaminationDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->examination_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 27; // 27 = CareTzEyeHistory2TableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzEyeHistory2'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzEyeHistory2TableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzEyeHistory2Query::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzEyeHistory2::setDeleted()
     * @see CareTzEyeHistory2::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeHistory2TableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzEyeHistory2Query::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeHistory2TableMap::DATABASE_NAME);
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
                CareTzEyeHistory2TableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzEyeHistory2TableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzEyeHistory2TableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_PID)) {
            $modifiedColumns[':p' . $index++]  = 'pid';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID1)) {
            $modifiedColumns[':p' . $index++]  = 'hid1';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID1E)) {
            $modifiedColumns[':p' . $index++]  = 'hid1e';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID1D)) {
            $modifiedColumns[':p' . $index++]  = 'hid1d';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID2)) {
            $modifiedColumns[':p' . $index++]  = 'hid2';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID2E)) {
            $modifiedColumns[':p' . $index++]  = 'hid2e';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID2D)) {
            $modifiedColumns[':p' . $index++]  = 'hid2d';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID3)) {
            $modifiedColumns[':p' . $index++]  = 'hid3';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID3E)) {
            $modifiedColumns[':p' . $index++]  = 'hid3e';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID3D)) {
            $modifiedColumns[':p' . $index++]  = 'hid3d';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID4)) {
            $modifiedColumns[':p' . $index++]  = 'hid4';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID4E)) {
            $modifiedColumns[':p' . $index++]  = 'hid4e';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID4D)) {
            $modifiedColumns[':p' . $index++]  = 'hid4d';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID5)) {
            $modifiedColumns[':p' . $index++]  = 'hid5';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID5E)) {
            $modifiedColumns[':p' . $index++]  = 'hid5e';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID5D)) {
            $modifiedColumns[':p' . $index++]  = 'hid5d';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID6)) {
            $modifiedColumns[':p' . $index++]  = 'hid6';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID6E)) {
            $modifiedColumns[':p' . $index++]  = 'hid6e';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID6D)) {
            $modifiedColumns[':p' . $index++]  = 'hid6d';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID7)) {
            $modifiedColumns[':p' . $index++]  = 'hid7';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID7E)) {
            $modifiedColumns[':p' . $index++]  = 'hid7e';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID7D)) {
            $modifiedColumns[':p' . $index++]  = 'hid7d';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID8)) {
            $modifiedColumns[':p' . $index++]  = 'hid8';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = 'signature';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_REMARKS)) {
            $modifiedColumns[':p' . $index++]  = 'remarks';
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_EXAMINATION_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'examination_date';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_eye_history2 (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'pid':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_STR);
                        break;
                    case 'hid1':
                        $stmt->bindValue($identifier, $this->hid1, PDO::PARAM_STR);
                        break;
                    case 'hid1e':
                        $stmt->bindValue($identifier, $this->hid1e, PDO::PARAM_STR);
                        break;
                    case 'hid1d':
                        $stmt->bindValue($identifier, $this->hid1d, PDO::PARAM_STR);
                        break;
                    case 'hid2':
                        $stmt->bindValue($identifier, $this->hid2, PDO::PARAM_STR);
                        break;
                    case 'hid2e':
                        $stmt->bindValue($identifier, $this->hid2e, PDO::PARAM_STR);
                        break;
                    case 'hid2d':
                        $stmt->bindValue($identifier, $this->hid2d, PDO::PARAM_STR);
                        break;
                    case 'hid3':
                        $stmt->bindValue($identifier, $this->hid3, PDO::PARAM_STR);
                        break;
                    case 'hid3e':
                        $stmt->bindValue($identifier, $this->hid3e, PDO::PARAM_STR);
                        break;
                    case 'hid3d':
                        $stmt->bindValue($identifier, $this->hid3d, PDO::PARAM_STR);
                        break;
                    case 'hid4':
                        $stmt->bindValue($identifier, $this->hid4, PDO::PARAM_STR);
                        break;
                    case 'hid4e':
                        $stmt->bindValue($identifier, $this->hid4e, PDO::PARAM_STR);
                        break;
                    case 'hid4d':
                        $stmt->bindValue($identifier, $this->hid4d, PDO::PARAM_STR);
                        break;
                    case 'hid5':
                        $stmt->bindValue($identifier, $this->hid5, PDO::PARAM_STR);
                        break;
                    case 'hid5e':
                        $stmt->bindValue($identifier, $this->hid5e, PDO::PARAM_STR);
                        break;
                    case 'hid5d':
                        $stmt->bindValue($identifier, $this->hid5d, PDO::PARAM_STR);
                        break;
                    case 'hid6':
                        $stmt->bindValue($identifier, $this->hid6, PDO::PARAM_STR);
                        break;
                    case 'hid6e':
                        $stmt->bindValue($identifier, $this->hid6e, PDO::PARAM_STR);
                        break;
                    case 'hid6d':
                        $stmt->bindValue($identifier, $this->hid6d, PDO::PARAM_STR);
                        break;
                    case 'hid7':
                        $stmt->bindValue($identifier, $this->hid7, PDO::PARAM_STR);
                        break;
                    case 'hid7e':
                        $stmt->bindValue($identifier, $this->hid7e, PDO::PARAM_STR);
                        break;
                    case 'hid7d':
                        $stmt->bindValue($identifier, $this->hid7d, PDO::PARAM_STR);
                        break;
                    case 'hid8':
                        $stmt->bindValue($identifier, $this->hid8, PDO::PARAM_STR);
                        break;
                    case 'signature':
                        $stmt->bindValue($identifier, $this->signature, PDO::PARAM_STR);
                        break;
                    case 'remarks':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case 'examination_date':
                        $stmt->bindValue($identifier, $this->examination_date ? $this->examination_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
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
        $this->setId($pk);

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
        $pos = CareTzEyeHistory2TableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getId();
                break;
            case 1:
                return $this->getPid();
                break;
            case 2:
                return $this->getHid1();
                break;
            case 3:
                return $this->getHid1e();
                break;
            case 4:
                return $this->getHid1d();
                break;
            case 5:
                return $this->getHid2();
                break;
            case 6:
                return $this->getHid2e();
                break;
            case 7:
                return $this->getHid2d();
                break;
            case 8:
                return $this->getHid3();
                break;
            case 9:
                return $this->getHid3e();
                break;
            case 10:
                return $this->getHid3d();
                break;
            case 11:
                return $this->getHid4();
                break;
            case 12:
                return $this->getHid4e();
                break;
            case 13:
                return $this->getHid4d();
                break;
            case 14:
                return $this->getHid5();
                break;
            case 15:
                return $this->getHid5e();
                break;
            case 16:
                return $this->getHid5d();
                break;
            case 17:
                return $this->getHid6();
                break;
            case 18:
                return $this->getHid6e();
                break;
            case 19:
                return $this->getHid6d();
                break;
            case 20:
                return $this->getHid7();
                break;
            case 21:
                return $this->getHid7e();
                break;
            case 22:
                return $this->getHid7d();
                break;
            case 23:
                return $this->getHid8();
                break;
            case 24:
                return $this->getSignature();
                break;
            case 25:
                return $this->getRemarks();
                break;
            case 26:
                return $this->getExaminationDate();
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

        if (isset($alreadyDumpedObjects['CareTzEyeHistory2'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzEyeHistory2'][$this->hashCode()] = true;
        $keys = CareTzEyeHistory2TableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getPid(),
            $keys[2] => $this->getHid1(),
            $keys[3] => $this->getHid1e(),
            $keys[4] => $this->getHid1d(),
            $keys[5] => $this->getHid2(),
            $keys[6] => $this->getHid2e(),
            $keys[7] => $this->getHid2d(),
            $keys[8] => $this->getHid3(),
            $keys[9] => $this->getHid3e(),
            $keys[10] => $this->getHid3d(),
            $keys[11] => $this->getHid4(),
            $keys[12] => $this->getHid4e(),
            $keys[13] => $this->getHid4d(),
            $keys[14] => $this->getHid5(),
            $keys[15] => $this->getHid5e(),
            $keys[16] => $this->getHid5d(),
            $keys[17] => $this->getHid6(),
            $keys[18] => $this->getHid6e(),
            $keys[19] => $this->getHid6d(),
            $keys[20] => $this->getHid7(),
            $keys[21] => $this->getHid7e(),
            $keys[22] => $this->getHid7d(),
            $keys[23] => $this->getHid8(),
            $keys[24] => $this->getSignature(),
            $keys[25] => $this->getRemarks(),
            $keys[26] => $this->getExaminationDate(),
        );
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
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzEyeHistory2TableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setPid($value);
                break;
            case 2:
                $this->setHid1($value);
                break;
            case 3:
                $this->setHid1e($value);
                break;
            case 4:
                $this->setHid1d($value);
                break;
            case 5:
                $this->setHid2($value);
                break;
            case 6:
                $this->setHid2e($value);
                break;
            case 7:
                $this->setHid2d($value);
                break;
            case 8:
                $this->setHid3($value);
                break;
            case 9:
                $this->setHid3e($value);
                break;
            case 10:
                $this->setHid3d($value);
                break;
            case 11:
                $this->setHid4($value);
                break;
            case 12:
                $this->setHid4e($value);
                break;
            case 13:
                $this->setHid4d($value);
                break;
            case 14:
                $this->setHid5($value);
                break;
            case 15:
                $this->setHid5e($value);
                break;
            case 16:
                $this->setHid5d($value);
                break;
            case 17:
                $this->setHid6($value);
                break;
            case 18:
                $this->setHid6e($value);
                break;
            case 19:
                $this->setHid6d($value);
                break;
            case 20:
                $this->setHid7($value);
                break;
            case 21:
                $this->setHid7e($value);
                break;
            case 22:
                $this->setHid7d($value);
                break;
            case 23:
                $this->setHid8($value);
                break;
            case 24:
                $this->setSignature($value);
                break;
            case 25:
                $this->setRemarks($value);
                break;
            case 26:
                $this->setExaminationDate($value);
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
        $keys = CareTzEyeHistory2TableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setHid1($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setHid1e($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setHid1d($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setHid2($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setHid2e($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setHid2d($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setHid3($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setHid3e($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setHid3d($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setHid4($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setHid4e($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setHid4d($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setHid5($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setHid5e($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setHid5d($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setHid6($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setHid6e($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setHid6d($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setHid7($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setHid7e($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setHid7d($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setHid8($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setSignature($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setRemarks($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setExaminationDate($arr[$keys[26]]);
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
     * @return $this|\CareMd\CareMd\CareTzEyeHistory2 The current object, for fluid interface
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
        $criteria = new Criteria(CareTzEyeHistory2TableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_ID)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_PID)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_PID, $this->pid);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID1)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID1, $this->hid1);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID1E)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID1E, $this->hid1e);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID1D)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID1D, $this->hid1d);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID2)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID2, $this->hid2);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID2E)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID2E, $this->hid2e);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID2D)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID2D, $this->hid2d);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID3)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID3, $this->hid3);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID3E)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID3E, $this->hid3e);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID3D)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID3D, $this->hid3d);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID4)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID4, $this->hid4);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID4E)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID4E, $this->hid4e);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID4D)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID4D, $this->hid4d);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID5)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID5, $this->hid5);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID5E)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID5E, $this->hid5e);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID5D)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID5D, $this->hid5d);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID6)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID6, $this->hid6);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID6E)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID6E, $this->hid6e);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID6D)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID6D, $this->hid6d);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID7)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID7, $this->hid7);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID7E)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID7E, $this->hid7e);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID7D)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID7D, $this->hid7d);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_HID8)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_HID8, $this->hid8);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_SIGNATURE)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_SIGNATURE, $this->signature);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_REMARKS)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_REMARKS, $this->remarks);
        }
        if ($this->isColumnModified(CareTzEyeHistory2TableMap::COL_EXAMINATION_DATE)) {
            $criteria->add(CareTzEyeHistory2TableMap::COL_EXAMINATION_DATE, $this->examination_date);
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
        $criteria = ChildCareTzEyeHistory2Query::create();
        $criteria->add(CareTzEyeHistory2TableMap::COL_ID, $this->id);

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
        $validPk = null !== $this->getId();

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
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzEyeHistory2 (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPid($this->getPid());
        $copyObj->setHid1($this->getHid1());
        $copyObj->setHid1e($this->getHid1e());
        $copyObj->setHid1d($this->getHid1d());
        $copyObj->setHid2($this->getHid2());
        $copyObj->setHid2e($this->getHid2e());
        $copyObj->setHid2d($this->getHid2d());
        $copyObj->setHid3($this->getHid3());
        $copyObj->setHid3e($this->getHid3e());
        $copyObj->setHid3d($this->getHid3d());
        $copyObj->setHid4($this->getHid4());
        $copyObj->setHid4e($this->getHid4e());
        $copyObj->setHid4d($this->getHid4d());
        $copyObj->setHid5($this->getHid5());
        $copyObj->setHid5e($this->getHid5e());
        $copyObj->setHid5d($this->getHid5d());
        $copyObj->setHid6($this->getHid6());
        $copyObj->setHid6e($this->getHid6e());
        $copyObj->setHid6d($this->getHid6d());
        $copyObj->setHid7($this->getHid7());
        $copyObj->setHid7e($this->getHid7e());
        $copyObj->setHid7d($this->getHid7d());
        $copyObj->setHid8($this->getHid8());
        $copyObj->setSignature($this->getSignature());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setExaminationDate($this->getExaminationDate());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareTzEyeHistory2 Clone of current object.
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
        $this->id = null;
        $this->pid = null;
        $this->hid1 = null;
        $this->hid1e = null;
        $this->hid1d = null;
        $this->hid2 = null;
        $this->hid2e = null;
        $this->hid2d = null;
        $this->hid3 = null;
        $this->hid3e = null;
        $this->hid3d = null;
        $this->hid4 = null;
        $this->hid4e = null;
        $this->hid4d = null;
        $this->hid5 = null;
        $this->hid5e = null;
        $this->hid5d = null;
        $this->hid6 = null;
        $this->hid6e = null;
        $this->hid6d = null;
        $this->hid7 = null;
        $this->hid7e = null;
        $this->hid7d = null;
        $this->hid8 = null;
        $this->signature = null;
        $this->remarks = null;
        $this->examination_date = null;
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
        return (string) $this->exportTo(CareTzEyeHistory2TableMap::DEFAULT_STRING_FORMAT);
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
