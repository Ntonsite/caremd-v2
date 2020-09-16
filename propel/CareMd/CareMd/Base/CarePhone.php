<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CarePhoneQuery as ChildCarePhoneQuery;
use CareMd\CareMd\Map\CarePhoneTableMap;
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
 * Base class that represents a row from the 'care_phone' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CarePhone implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CarePhoneTableMap';


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
     * The value for the item_nr field.
     *
     * @var        string
     */
    protected $item_nr;

    /**
     * The value for the title field.
     *
     * @var        string
     */
    protected $title;

    /**
     * The value for the name field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $name;

    /**
     * The value for the vorname field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $vorname;

    /**
     * The value for the pid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pid;

    /**
     * The value for the personell_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $personell_nr;

    /**
     * The value for the dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $dept_nr;

    /**
     * The value for the beruf field.
     *
     * @var        string
     */
    protected $beruf;

    /**
     * The value for the bereich1 field.
     *
     * @var        string
     */
    protected $bereich1;

    /**
     * The value for the bereich2 field.
     *
     * @var        string
     */
    protected $bereich2;

    /**
     * The value for the inphone1 field.
     *
     * @var        string
     */
    protected $inphone1;

    /**
     * The value for the inphone2 field.
     *
     * @var        string
     */
    protected $inphone2;

    /**
     * The value for the inphone3 field.
     *
     * @var        string
     */
    protected $inphone3;

    /**
     * The value for the exphone1 field.
     *
     * @var        string
     */
    protected $exphone1;

    /**
     * The value for the exphone2 field.
     *
     * @var        string
     */
    protected $exphone2;

    /**
     * The value for the funk1 field.
     *
     * @var        string
     */
    protected $funk1;

    /**
     * The value for the funk2 field.
     *
     * @var        string
     */
    protected $funk2;

    /**
     * The value for the roomnr field.
     *
     * @var        string
     */
    protected $roomnr;

    /**
     * The value for the date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $date;

    /**
     * The value for the time field.
     *
     * Note: this column has a database default value of: '00:00:00.000000'
     * @var        DateTime
     */
    protected $time;

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
        $this->name = '';
        $this->vorname = '';
        $this->pid = 0;
        $this->personell_nr = 0;
        $this->dept_nr = 0;
        $this->date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->time = PropelDateTime::newInstance('00:00:00.000000', null, 'DateTime');
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CarePhone object.
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
     * Compares this with another <code>CarePhone</code> instance.  If
     * <code>obj</code> is an instance of <code>CarePhone</code>, delegates to
     * <code>equals(CarePhone)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CarePhone The current object, for fluid interface
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
     * Get the [item_nr] column value.
     *
     * @return string
     */
    public function getItemNr()
    {
        return $this->item_nr;
    }

    /**
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
     * Get the [vorname] column value.
     *
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
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
     * Get the [personell_nr] column value.
     *
     * @return int
     */
    public function getPersonellNr()
    {
        return $this->personell_nr;
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
     * Get the [beruf] column value.
     *
     * @return string
     */
    public function getBeruf()
    {
        return $this->beruf;
    }

    /**
     * Get the [bereich1] column value.
     *
     * @return string
     */
    public function getBereich1()
    {
        return $this->bereich1;
    }

    /**
     * Get the [bereich2] column value.
     *
     * @return string
     */
    public function getBereich2()
    {
        return $this->bereich2;
    }

    /**
     * Get the [inphone1] column value.
     *
     * @return string
     */
    public function getInphone1()
    {
        return $this->inphone1;
    }

    /**
     * Get the [inphone2] column value.
     *
     * @return string
     */
    public function getInphone2()
    {
        return $this->inphone2;
    }

    /**
     * Get the [inphone3] column value.
     *
     * @return string
     */
    public function getInphone3()
    {
        return $this->inphone3;
    }

    /**
     * Get the [exphone1] column value.
     *
     * @return string
     */
    public function getExphone1()
    {
        return $this->exphone1;
    }

    /**
     * Get the [exphone2] column value.
     *
     * @return string
     */
    public function getExphone2()
    {
        return $this->exphone2;
    }

    /**
     * Get the [funk1] column value.
     *
     * @return string
     */
    public function getFunk1()
    {
        return $this->funk1;
    }

    /**
     * Get the [funk2] column value.
     *
     * @return string
     */
    public function getFunk2()
    {
        return $this->funk2;
    }

    /**
     * Get the [roomnr] column value.
     *
     * @return string
     */
    public function getRoomnr()
    {
        return $this->roomnr;
    }

    /**
     * Get the [optionally formatted] temporal [date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = NULL)
    {
        if ($format === null) {
            return $this->date;
        } else {
            return $this->date instanceof \DateTimeInterface ? $this->date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTime($format = NULL)
    {
        if ($format === null) {
            return $this->time;
        } else {
            return $this->time instanceof \DateTimeInterface ? $this->time->format($format) : null;
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
     * Set the value of [item_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setItemNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->item_nr !== $v) {
            $this->item_nr = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_ITEM_NR] = true;
        }

        return $this;
    } // setItemNr()

    /**
     * Set the value of [title] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_TITLE] = true;
        }

        return $this;
    } // setTitle()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [vorname] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setVorname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vorname !== $v) {
            $this->vorname = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_VORNAME] = true;
        }

        return $this;
    } // setVorname()

    /**
     * Set the value of [pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_PID] = true;
        }

        return $this;
    } // setPid()

    /**
     * Set the value of [personell_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setPersonellNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->personell_nr !== $v) {
            $this->personell_nr = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_PERSONELL_NR] = true;
        }

        return $this;
    } // setPersonellNr()

    /**
     * Set the value of [dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dept_nr !== $v) {
            $this->dept_nr = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_DEPT_NR] = true;
        }

        return $this;
    } // setDeptNr()

    /**
     * Set the value of [beruf] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setBeruf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->beruf !== $v) {
            $this->beruf = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_BERUF] = true;
        }

        return $this;
    } // setBeruf()

    /**
     * Set the value of [bereich1] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setBereich1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bereich1 !== $v) {
            $this->bereich1 = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_BEREICH1] = true;
        }

        return $this;
    } // setBereich1()

    /**
     * Set the value of [bereich2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setBereich2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bereich2 !== $v) {
            $this->bereich2 = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_BEREICH2] = true;
        }

        return $this;
    } // setBereich2()

    /**
     * Set the value of [inphone1] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setInphone1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inphone1 !== $v) {
            $this->inphone1 = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_INPHONE1] = true;
        }

        return $this;
    } // setInphone1()

    /**
     * Set the value of [inphone2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setInphone2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inphone2 !== $v) {
            $this->inphone2 = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_INPHONE2] = true;
        }

        return $this;
    } // setInphone2()

    /**
     * Set the value of [inphone3] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setInphone3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inphone3 !== $v) {
            $this->inphone3 = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_INPHONE3] = true;
        }

        return $this;
    } // setInphone3()

    /**
     * Set the value of [exphone1] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setExphone1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->exphone1 !== $v) {
            $this->exphone1 = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_EXPHONE1] = true;
        }

        return $this;
    } // setExphone1()

    /**
     * Set the value of [exphone2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setExphone2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->exphone2 !== $v) {
            $this->exphone2 = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_EXPHONE2] = true;
        }

        return $this;
    } // setExphone2()

    /**
     * Set the value of [funk1] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setFunk1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->funk1 !== $v) {
            $this->funk1 = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_FUNK1] = true;
        }

        return $this;
    } // setFunk1()

    /**
     * Set the value of [funk2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setFunk2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->funk2 !== $v) {
            $this->funk2 = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_FUNK2] = true;
        }

        return $this;
    } // setFunk2()

    /**
     * Set the value of [roomnr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setRoomnr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->roomnr !== $v) {
            $this->roomnr = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_ROOMNR] = true;
        }

        return $this;
    } // setRoomnr()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            if ( ($dt != $this->date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePhoneTableMap::COL_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDate()

    /**
     * Sets the value of [time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->time !== null || $dt !== null) {
            if ( ($dt != $this->time) // normalized values don't match
                || ($dt->format('H:i:s.u') === '00:00:00.000000') // or the entered value matches the default
                 ) {
                $this->time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePhoneTableMap::COL_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setTime()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePhoneTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CarePhoneTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePhone The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePhoneTableMap::COL_CREATE_TIME] = true;
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
            if ($this->name !== '') {
                return false;
            }

            if ($this->vorname !== '') {
                return false;
            }

            if ($this->pid !== 0) {
                return false;
            }

            if ($this->personell_nr !== 0) {
                return false;
            }

            if ($this->dept_nr !== 0) {
                return false;
            }

            if ($this->date && $this->date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->time && $this->time->format('H:i:s.u') !== '00:00:00.000000') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CarePhoneTableMap::translateFieldName('ItemNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->item_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CarePhoneTableMap::translateFieldName('Title', TableMap::TYPE_PHPNAME, $indexType)];
            $this->title = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CarePhoneTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CarePhoneTableMap::translateFieldName('Vorname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vorname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CarePhoneTableMap::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CarePhoneTableMap::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->personell_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CarePhoneTableMap::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CarePhoneTableMap::translateFieldName('Beruf', TableMap::TYPE_PHPNAME, $indexType)];
            $this->beruf = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CarePhoneTableMap::translateFieldName('Bereich1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bereich1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CarePhoneTableMap::translateFieldName('Bereich2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bereich2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CarePhoneTableMap::translateFieldName('Inphone1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inphone1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CarePhoneTableMap::translateFieldName('Inphone2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inphone2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CarePhoneTableMap::translateFieldName('Inphone3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inphone3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CarePhoneTableMap::translateFieldName('Exphone1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->exphone1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CarePhoneTableMap::translateFieldName('Exphone2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->exphone2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CarePhoneTableMap::translateFieldName('Funk1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->funk1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CarePhoneTableMap::translateFieldName('Funk2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->funk2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CarePhoneTableMap::translateFieldName('Roomnr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->roomnr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CarePhoneTableMap::translateFieldName('Date', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CarePhoneTableMap::translateFieldName('Time', TableMap::TYPE_PHPNAME, $indexType)];
            $this->time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CarePhoneTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CarePhoneTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CarePhoneTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CarePhoneTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CarePhoneTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CarePhoneTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 26; // 26 = CarePhoneTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CarePhone'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CarePhoneTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCarePhoneQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CarePhone::setDeleted()
     * @see CarePhone::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePhoneTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCarePhoneQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePhoneTableMap::DATABASE_NAME);
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
                CarePhoneTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CarePhoneTableMap::COL_ITEM_NR] = true;
        if (null !== $this->item_nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CarePhoneTableMap::COL_ITEM_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CarePhoneTableMap::COL_ITEM_NR)) {
            $modifiedColumns[':p' . $index++]  = 'item_nr';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_TITLE)) {
            $modifiedColumns[':p' . $index++]  = 'title';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_VORNAME)) {
            $modifiedColumns[':p' . $index++]  = 'vorname';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_PID)) {
            $modifiedColumns[':p' . $index++]  = 'pid';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_PERSONELL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'personell_nr';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'dept_nr';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_BERUF)) {
            $modifiedColumns[':p' . $index++]  = 'beruf';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_BEREICH1)) {
            $modifiedColumns[':p' . $index++]  = 'bereich1';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_BEREICH2)) {
            $modifiedColumns[':p' . $index++]  = 'bereich2';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_INPHONE1)) {
            $modifiedColumns[':p' . $index++]  = 'inphone1';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_INPHONE2)) {
            $modifiedColumns[':p' . $index++]  = 'inphone2';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_INPHONE3)) {
            $modifiedColumns[':p' . $index++]  = 'inphone3';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_EXPHONE1)) {
            $modifiedColumns[':p' . $index++]  = 'exphone1';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_EXPHONE2)) {
            $modifiedColumns[':p' . $index++]  = 'exphone2';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_FUNK1)) {
            $modifiedColumns[':p' . $index++]  = 'funk1';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_FUNK2)) {
            $modifiedColumns[':p' . $index++]  = 'funk2';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_ROOMNR)) {
            $modifiedColumns[':p' . $index++]  = 'roomnr';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'date';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'time';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_phone (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'item_nr':
                        $stmt->bindValue($identifier, $this->item_nr, PDO::PARAM_INT);
                        break;
                    case 'title':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'vorname':
                        $stmt->bindValue($identifier, $this->vorname, PDO::PARAM_STR);
                        break;
                    case 'pid':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_INT);
                        break;
                    case 'personell_nr':
                        $stmt->bindValue($identifier, $this->personell_nr, PDO::PARAM_INT);
                        break;
                    case 'dept_nr':
                        $stmt->bindValue($identifier, $this->dept_nr, PDO::PARAM_INT);
                        break;
                    case 'beruf':
                        $stmt->bindValue($identifier, $this->beruf, PDO::PARAM_STR);
                        break;
                    case 'bereich1':
                        $stmt->bindValue($identifier, $this->bereich1, PDO::PARAM_STR);
                        break;
                    case 'bereich2':
                        $stmt->bindValue($identifier, $this->bereich2, PDO::PARAM_STR);
                        break;
                    case 'inphone1':
                        $stmt->bindValue($identifier, $this->inphone1, PDO::PARAM_STR);
                        break;
                    case 'inphone2':
                        $stmt->bindValue($identifier, $this->inphone2, PDO::PARAM_STR);
                        break;
                    case 'inphone3':
                        $stmt->bindValue($identifier, $this->inphone3, PDO::PARAM_STR);
                        break;
                    case 'exphone1':
                        $stmt->bindValue($identifier, $this->exphone1, PDO::PARAM_STR);
                        break;
                    case 'exphone2':
                        $stmt->bindValue($identifier, $this->exphone2, PDO::PARAM_STR);
                        break;
                    case 'funk1':
                        $stmt->bindValue($identifier, $this->funk1, PDO::PARAM_STR);
                        break;
                    case 'funk2':
                        $stmt->bindValue($identifier, $this->funk2, PDO::PARAM_STR);
                        break;
                    case 'roomnr':
                        $stmt->bindValue($identifier, $this->roomnr, PDO::PARAM_STR);
                        break;
                    case 'date':
                        $stmt->bindValue($identifier, $this->date ? $this->date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'time':
                        $stmt->bindValue($identifier, $this->time ? $this->time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
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
        $this->setItemNr($pk);

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
        $pos = CarePhoneTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getItemNr();
                break;
            case 1:
                return $this->getTitle();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getVorname();
                break;
            case 4:
                return $this->getPid();
                break;
            case 5:
                return $this->getPersonellNr();
                break;
            case 6:
                return $this->getDeptNr();
                break;
            case 7:
                return $this->getBeruf();
                break;
            case 8:
                return $this->getBereich1();
                break;
            case 9:
                return $this->getBereich2();
                break;
            case 10:
                return $this->getInphone1();
                break;
            case 11:
                return $this->getInphone2();
                break;
            case 12:
                return $this->getInphone3();
                break;
            case 13:
                return $this->getExphone1();
                break;
            case 14:
                return $this->getExphone2();
                break;
            case 15:
                return $this->getFunk1();
                break;
            case 16:
                return $this->getFunk2();
                break;
            case 17:
                return $this->getRoomnr();
                break;
            case 18:
                return $this->getDate();
                break;
            case 19:
                return $this->getTime();
                break;
            case 20:
                return $this->getStatus();
                break;
            case 21:
                return $this->getHistory();
                break;
            case 22:
                return $this->getModifyId();
                break;
            case 23:
                return $this->getModifyTime();
                break;
            case 24:
                return $this->getCreateId();
                break;
            case 25:
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

        if (isset($alreadyDumpedObjects['CarePhone'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CarePhone'][$this->hashCode()] = true;
        $keys = CarePhoneTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getItemNr(),
            $keys[1] => $this->getTitle(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getVorname(),
            $keys[4] => $this->getPid(),
            $keys[5] => $this->getPersonellNr(),
            $keys[6] => $this->getDeptNr(),
            $keys[7] => $this->getBeruf(),
            $keys[8] => $this->getBereich1(),
            $keys[9] => $this->getBereich2(),
            $keys[10] => $this->getInphone1(),
            $keys[11] => $this->getInphone2(),
            $keys[12] => $this->getInphone3(),
            $keys[13] => $this->getExphone1(),
            $keys[14] => $this->getExphone2(),
            $keys[15] => $this->getFunk1(),
            $keys[16] => $this->getFunk2(),
            $keys[17] => $this->getRoomnr(),
            $keys[18] => $this->getDate(),
            $keys[19] => $this->getTime(),
            $keys[20] => $this->getStatus(),
            $keys[21] => $this->getHistory(),
            $keys[22] => $this->getModifyId(),
            $keys[23] => $this->getModifyTime(),
            $keys[24] => $this->getCreateId(),
            $keys[25] => $this->getCreateTime(),
        );
        if ($result[$keys[18]] instanceof \DateTimeInterface) {
            $result[$keys[18]] = $result[$keys[18]]->format('c');
        }

        if ($result[$keys[19]] instanceof \DateTimeInterface) {
            $result[$keys[19]] = $result[$keys[19]]->format('c');
        }

        if ($result[$keys[23]] instanceof \DateTimeInterface) {
            $result[$keys[23]] = $result[$keys[23]]->format('c');
        }

        if ($result[$keys[25]] instanceof \DateTimeInterface) {
            $result[$keys[25]] = $result[$keys[25]]->format('c');
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
     * @return $this|\CareMd\CareMd\CarePhone
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CarePhoneTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CarePhone
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setItemNr($value);
                break;
            case 1:
                $this->setTitle($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setVorname($value);
                break;
            case 4:
                $this->setPid($value);
                break;
            case 5:
                $this->setPersonellNr($value);
                break;
            case 6:
                $this->setDeptNr($value);
                break;
            case 7:
                $this->setBeruf($value);
                break;
            case 8:
                $this->setBereich1($value);
                break;
            case 9:
                $this->setBereich2($value);
                break;
            case 10:
                $this->setInphone1($value);
                break;
            case 11:
                $this->setInphone2($value);
                break;
            case 12:
                $this->setInphone3($value);
                break;
            case 13:
                $this->setExphone1($value);
                break;
            case 14:
                $this->setExphone2($value);
                break;
            case 15:
                $this->setFunk1($value);
                break;
            case 16:
                $this->setFunk2($value);
                break;
            case 17:
                $this->setRoomnr($value);
                break;
            case 18:
                $this->setDate($value);
                break;
            case 19:
                $this->setTime($value);
                break;
            case 20:
                $this->setStatus($value);
                break;
            case 21:
                $this->setHistory($value);
                break;
            case 22:
                $this->setModifyId($value);
                break;
            case 23:
                $this->setModifyTime($value);
                break;
            case 24:
                $this->setCreateId($value);
                break;
            case 25:
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
        $keys = CarePhoneTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setItemNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setTitle($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setName($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setVorname($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPid($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPersonellNr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDeptNr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setBeruf($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setBereich1($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setBereich2($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInphone1($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setInphone2($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setInphone3($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setExphone1($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setExphone2($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setFunk1($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setFunk2($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setRoomnr($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setDate($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setTime($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setStatus($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setHistory($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setModifyId($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setModifyTime($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setCreateId($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setCreateTime($arr[$keys[25]]);
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
     * @return $this|\CareMd\CareMd\CarePhone The current object, for fluid interface
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
        $criteria = new Criteria(CarePhoneTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CarePhoneTableMap::COL_ITEM_NR)) {
            $criteria->add(CarePhoneTableMap::COL_ITEM_NR, $this->item_nr);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_TITLE)) {
            $criteria->add(CarePhoneTableMap::COL_TITLE, $this->title);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_NAME)) {
            $criteria->add(CarePhoneTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_VORNAME)) {
            $criteria->add(CarePhoneTableMap::COL_VORNAME, $this->vorname);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_PID)) {
            $criteria->add(CarePhoneTableMap::COL_PID, $this->pid);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_PERSONELL_NR)) {
            $criteria->add(CarePhoneTableMap::COL_PERSONELL_NR, $this->personell_nr);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_DEPT_NR)) {
            $criteria->add(CarePhoneTableMap::COL_DEPT_NR, $this->dept_nr);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_BERUF)) {
            $criteria->add(CarePhoneTableMap::COL_BERUF, $this->beruf);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_BEREICH1)) {
            $criteria->add(CarePhoneTableMap::COL_BEREICH1, $this->bereich1);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_BEREICH2)) {
            $criteria->add(CarePhoneTableMap::COL_BEREICH2, $this->bereich2);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_INPHONE1)) {
            $criteria->add(CarePhoneTableMap::COL_INPHONE1, $this->inphone1);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_INPHONE2)) {
            $criteria->add(CarePhoneTableMap::COL_INPHONE2, $this->inphone2);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_INPHONE3)) {
            $criteria->add(CarePhoneTableMap::COL_INPHONE3, $this->inphone3);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_EXPHONE1)) {
            $criteria->add(CarePhoneTableMap::COL_EXPHONE1, $this->exphone1);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_EXPHONE2)) {
            $criteria->add(CarePhoneTableMap::COL_EXPHONE2, $this->exphone2);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_FUNK1)) {
            $criteria->add(CarePhoneTableMap::COL_FUNK1, $this->funk1);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_FUNK2)) {
            $criteria->add(CarePhoneTableMap::COL_FUNK2, $this->funk2);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_ROOMNR)) {
            $criteria->add(CarePhoneTableMap::COL_ROOMNR, $this->roomnr);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_DATE)) {
            $criteria->add(CarePhoneTableMap::COL_DATE, $this->date);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_TIME)) {
            $criteria->add(CarePhoneTableMap::COL_TIME, $this->time);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_STATUS)) {
            $criteria->add(CarePhoneTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_HISTORY)) {
            $criteria->add(CarePhoneTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_MODIFY_ID)) {
            $criteria->add(CarePhoneTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CarePhoneTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_CREATE_ID)) {
            $criteria->add(CarePhoneTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CarePhoneTableMap::COL_CREATE_TIME)) {
            $criteria->add(CarePhoneTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCarePhoneQuery::create();
        $criteria->add(CarePhoneTableMap::COL_ITEM_NR, $this->item_nr);
        $criteria->add(CarePhoneTableMap::COL_PID, $this->pid);
        $criteria->add(CarePhoneTableMap::COL_PERSONELL_NR, $this->personell_nr);
        $criteria->add(CarePhoneTableMap::COL_DEPT_NR, $this->dept_nr);

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
        $validPk = null !== $this->getItemNr() &&
            null !== $this->getPid() &&
            null !== $this->getPersonellNr() &&
            null !== $this->getDeptNr();

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
        $pks[0] = $this->getItemNr();
        $pks[1] = $this->getPid();
        $pks[2] = $this->getPersonellNr();
        $pks[3] = $this->getDeptNr();

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
        $this->setItemNr($keys[0]);
        $this->setPid($keys[1]);
        $this->setPersonellNr($keys[2]);
        $this->setDeptNr($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getItemNr()) && (null === $this->getPid()) && (null === $this->getPersonellNr()) && (null === $this->getDeptNr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CarePhone (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTitle($this->getTitle());
        $copyObj->setName($this->getName());
        $copyObj->setVorname($this->getVorname());
        $copyObj->setPid($this->getPid());
        $copyObj->setPersonellNr($this->getPersonellNr());
        $copyObj->setDeptNr($this->getDeptNr());
        $copyObj->setBeruf($this->getBeruf());
        $copyObj->setBereich1($this->getBereich1());
        $copyObj->setBereich2($this->getBereich2());
        $copyObj->setInphone1($this->getInphone1());
        $copyObj->setInphone2($this->getInphone2());
        $copyObj->setInphone3($this->getInphone3());
        $copyObj->setExphone1($this->getExphone1());
        $copyObj->setExphone2($this->getExphone2());
        $copyObj->setFunk1($this->getFunk1());
        $copyObj->setFunk2($this->getFunk2());
        $copyObj->setRoomnr($this->getRoomnr());
        $copyObj->setDate($this->getDate());
        $copyObj->setTime($this->getTime());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setItemNr(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CarePhone Clone of current object.
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
        $this->item_nr = null;
        $this->title = null;
        $this->name = null;
        $this->vorname = null;
        $this->pid = null;
        $this->personell_nr = null;
        $this->dept_nr = null;
        $this->beruf = null;
        $this->bereich1 = null;
        $this->bereich2 = null;
        $this->inphone1 = null;
        $this->inphone2 = null;
        $this->inphone3 = null;
        $this->exphone1 = null;
        $this->exphone2 = null;
        $this->funk1 = null;
        $this->funk2 = null;
        $this->roomnr = null;
        $this->date = null;
        $this->time = null;
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
        return (string) $this->exportTo(CarePhoneTableMap::DEFAULT_STRING_FORMAT);
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
