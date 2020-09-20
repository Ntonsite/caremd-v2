<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTzTrackerQuery as ChildCareTzTrackerQuery;
use CareMd\CareMd\Map\CareTzTrackerTableMap;
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
 * Base class that represents a row from the 'care_tz_tracker' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzTracker implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzTrackerTableMap';


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
     * The value for the tracker_id field.
     *
     * @var        string
     */
    protected $tracker_id;

    /**
     * The value for the time field.
     *
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        DateTime
     */
    protected $time;

    /**
     * The value for the module field.
     *
     * @var        string
     */
    protected $module;

    /**
     * The value for the module_id field.
     *
     * @var        string
     */
    protected $module_id;

    /**
     * The value for the refering_module field.
     *
     * @var        string
     */
    protected $refering_module;

    /**
     * The value for the refering_module_id field.
     *
     * @var        string
     */
    protected $refering_module_id;

    /**
     * The value for the action field.
     *
     * @var        string
     */
    protected $action;

    /**
     * The value for the old_value field.
     *
     * @var        string
     */
    protected $old_value;

    /**
     * The value for the new_value field.
     *
     * @var        string
     */
    protected $new_value;

    /**
     * The value for the value_type field.
     *
     * @var        string
     */
    protected $value_type;

    /**
     * The value for the parameters field.
     *
     * @var        string
     */
    protected $parameters;

    /**
     * The value for the comment_user field.
     *
     * @var        string
     */
    protected $comment_user;

    /**
     * The value for the session_user field.
     *
     * @var        string
     */
    protected $session_user;

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
     * Initializes internal state of CareMd\CareMd\Base\CareTzTracker object.
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
     * Compares this with another <code>CareTzTracker</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzTracker</code>, delegates to
     * <code>equals(CareTzTracker)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzTracker The current object, for fluid interface
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
     * Get the [tracker_id] column value.
     *
     * @return string
     */
    public function getTrackerId()
    {
        return $this->tracker_id;
    }

    /**
     * Get the [optionally formatted] temporal [time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
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
     * Get the [module] column value.
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Get the [module_id] column value.
     *
     * @return string
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * Get the [refering_module] column value.
     *
     * @return string
     */
    public function getReferingModule()
    {
        return $this->refering_module;
    }

    /**
     * Get the [refering_module_id] column value.
     *
     * @return string
     */
    public function getReferingModuleId()
    {
        return $this->refering_module_id;
    }

    /**
     * Get the [action] column value.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Get the [old_value] column value.
     *
     * @return string
     */
    public function getOldValue()
    {
        return $this->old_value;
    }

    /**
     * Get the [new_value] column value.
     *
     * @return string
     */
    public function getNewValue()
    {
        return $this->new_value;
    }

    /**
     * Get the [value_type] column value.
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * Get the [parameters] column value.
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Get the [comment_user] column value.
     *
     * @return string
     */
    public function getCommentUser()
    {
        return $this->comment_user;
    }

    /**
     * Get the [session_user] column value.
     *
     * @return string
     */
    public function getSessionUser()
    {
        return $this->session_user;
    }

    /**
     * Set the value of [tracker_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setTrackerId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tracker_id !== $v) {
            $this->tracker_id = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_TRACKER_ID] = true;
        }

        return $this;
    } // setTrackerId()

    /**
     * Sets the value of [time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->time !== null || $dt !== null) {
            if ($this->time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->time->format("Y-m-d H:i:s.u")) {
                $this->time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzTrackerTableMap::COL_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setTime()

    /**
     * Set the value of [module] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setModule($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->module !== $v) {
            $this->module = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_MODULE] = true;
        }

        return $this;
    } // setModule()

    /**
     * Set the value of [module_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setModuleId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->module_id !== $v) {
            $this->module_id = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_MODULE_ID] = true;
        }

        return $this;
    } // setModuleId()

    /**
     * Set the value of [refering_module] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setReferingModule($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->refering_module !== $v) {
            $this->refering_module = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_REFERING_MODULE] = true;
        }

        return $this;
    } // setReferingModule()

    /**
     * Set the value of [refering_module_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setReferingModuleId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->refering_module_id !== $v) {
            $this->refering_module_id = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_REFERING_MODULE_ID] = true;
        }

        return $this;
    } // setReferingModuleId()

    /**
     * Set the value of [action] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setAction($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->action !== $v) {
            $this->action = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_ACTION] = true;
        }

        return $this;
    } // setAction()

    /**
     * Set the value of [old_value] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setOldValue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->old_value !== $v) {
            $this->old_value = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_OLD_VALUE] = true;
        }

        return $this;
    } // setOldValue()

    /**
     * Set the value of [new_value] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setNewValue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->new_value !== $v) {
            $this->new_value = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_NEW_VALUE] = true;
        }

        return $this;
    } // setNewValue()

    /**
     * Set the value of [value_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setValueType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->value_type !== $v) {
            $this->value_type = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_VALUE_TYPE] = true;
        }

        return $this;
    } // setValueType()

    /**
     * Set the value of [parameters] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setParameters($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->parameters !== $v) {
            $this->parameters = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_PARAMETERS] = true;
        }

        return $this;
    } // setParameters()

    /**
     * Set the value of [comment_user] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setCommentUser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_user !== $v) {
            $this->comment_user = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_COMMENT_USER] = true;
        }

        return $this;
    } // setCommentUser()

    /**
     * Set the value of [session_user] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzTracker The current object (for fluent API support)
     */
    public function setSessionUser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->session_user !== $v) {
            $this->session_user = $v;
            $this->modifiedColumns[CareTzTrackerTableMap::COL_SESSION_USER] = true;
        }

        return $this;
    } // setSessionUser()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzTrackerTableMap::translateFieldName('TrackerId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->tracker_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzTrackerTableMap::translateFieldName('Time', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzTrackerTableMap::translateFieldName('Module', TableMap::TYPE_PHPNAME, $indexType)];
            $this->module = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzTrackerTableMap::translateFieldName('ModuleId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->module_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzTrackerTableMap::translateFieldName('ReferingModule', TableMap::TYPE_PHPNAME, $indexType)];
            $this->refering_module = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzTrackerTableMap::translateFieldName('ReferingModuleId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->refering_module_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzTrackerTableMap::translateFieldName('Action', TableMap::TYPE_PHPNAME, $indexType)];
            $this->action = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzTrackerTableMap::translateFieldName('OldValue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->old_value = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzTrackerTableMap::translateFieldName('NewValue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->new_value = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzTrackerTableMap::translateFieldName('ValueType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->value_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTzTrackerTableMap::translateFieldName('Parameters', TableMap::TYPE_PHPNAME, $indexType)];
            $this->parameters = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTzTrackerTableMap::translateFieldName('CommentUser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->comment_user = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTzTrackerTableMap::translateFieldName('SessionUser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->session_user = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 13; // 13 = CareTzTrackerTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzTracker'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzTrackerTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzTrackerQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzTracker::setDeleted()
     * @see CareTzTracker::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzTrackerTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzTrackerQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzTrackerTableMap::DATABASE_NAME);
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
                CareTzTrackerTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzTrackerTableMap::COL_TRACKER_ID] = true;
        if (null !== $this->tracker_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzTrackerTableMap::COL_TRACKER_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_TRACKER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'tracker_ID';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'time';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_MODULE)) {
            $modifiedColumns[':p' . $index++]  = 'module';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_MODULE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'module_id';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_REFERING_MODULE)) {
            $modifiedColumns[':p' . $index++]  = 'refering_module';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_REFERING_MODULE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'refering_module_id';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_ACTION)) {
            $modifiedColumns[':p' . $index++]  = 'action';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_OLD_VALUE)) {
            $modifiedColumns[':p' . $index++]  = 'old_value';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_NEW_VALUE)) {
            $modifiedColumns[':p' . $index++]  = 'new_value';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_VALUE_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'value_type';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_PARAMETERS)) {
            $modifiedColumns[':p' . $index++]  = 'parameters';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_COMMENT_USER)) {
            $modifiedColumns[':p' . $index++]  = 'comment_user';
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_SESSION_USER)) {
            $modifiedColumns[':p' . $index++]  = 'session_user';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_tracker (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'tracker_ID':
                        $stmt->bindValue($identifier, $this->tracker_id, PDO::PARAM_INT);
                        break;
                    case 'time':
                        $stmt->bindValue($identifier, $this->time ? $this->time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'module':
                        $stmt->bindValue($identifier, $this->module, PDO::PARAM_STR);
                        break;
                    case 'module_id':
                        $stmt->bindValue($identifier, $this->module_id, PDO::PARAM_INT);
                        break;
                    case 'refering_module':
                        $stmt->bindValue($identifier, $this->refering_module, PDO::PARAM_STR);
                        break;
                    case 'refering_module_id':
                        $stmt->bindValue($identifier, $this->refering_module_id, PDO::PARAM_INT);
                        break;
                    case 'action':
                        $stmt->bindValue($identifier, $this->action, PDO::PARAM_STR);
                        break;
                    case 'old_value':
                        $stmt->bindValue($identifier, $this->old_value, PDO::PARAM_STR);
                        break;
                    case 'new_value':
                        $stmt->bindValue($identifier, $this->new_value, PDO::PARAM_STR);
                        break;
                    case 'value_type':
                        $stmt->bindValue($identifier, $this->value_type, PDO::PARAM_STR);
                        break;
                    case 'parameters':
                        $stmt->bindValue($identifier, $this->parameters, PDO::PARAM_STR);
                        break;
                    case 'comment_user':
                        $stmt->bindValue($identifier, $this->comment_user, PDO::PARAM_STR);
                        break;
                    case 'session_user':
                        $stmt->bindValue($identifier, $this->session_user, PDO::PARAM_STR);
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
        $this->setTrackerId($pk);

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
        $pos = CareTzTrackerTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getTrackerId();
                break;
            case 1:
                return $this->getTime();
                break;
            case 2:
                return $this->getModule();
                break;
            case 3:
                return $this->getModuleId();
                break;
            case 4:
                return $this->getReferingModule();
                break;
            case 5:
                return $this->getReferingModuleId();
                break;
            case 6:
                return $this->getAction();
                break;
            case 7:
                return $this->getOldValue();
                break;
            case 8:
                return $this->getNewValue();
                break;
            case 9:
                return $this->getValueType();
                break;
            case 10:
                return $this->getParameters();
                break;
            case 11:
                return $this->getCommentUser();
                break;
            case 12:
                return $this->getSessionUser();
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

        if (isset($alreadyDumpedObjects['CareTzTracker'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzTracker'][$this->hashCode()] = true;
        $keys = CareTzTrackerTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getTrackerId(),
            $keys[1] => $this->getTime(),
            $keys[2] => $this->getModule(),
            $keys[3] => $this->getModuleId(),
            $keys[4] => $this->getReferingModule(),
            $keys[5] => $this->getReferingModuleId(),
            $keys[6] => $this->getAction(),
            $keys[7] => $this->getOldValue(),
            $keys[8] => $this->getNewValue(),
            $keys[9] => $this->getValueType(),
            $keys[10] => $this->getParameters(),
            $keys[11] => $this->getCommentUser(),
            $keys[12] => $this->getSessionUser(),
        );
        if ($result[$keys[1]] instanceof \DateTimeInterface) {
            $result[$keys[1]] = $result[$keys[1]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTzTracker
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzTrackerTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzTracker
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setTrackerId($value);
                break;
            case 1:
                $this->setTime($value);
                break;
            case 2:
                $this->setModule($value);
                break;
            case 3:
                $this->setModuleId($value);
                break;
            case 4:
                $this->setReferingModule($value);
                break;
            case 5:
                $this->setReferingModuleId($value);
                break;
            case 6:
                $this->setAction($value);
                break;
            case 7:
                $this->setOldValue($value);
                break;
            case 8:
                $this->setNewValue($value);
                break;
            case 9:
                $this->setValueType($value);
                break;
            case 10:
                $this->setParameters($value);
                break;
            case 11:
                $this->setCommentUser($value);
                break;
            case 12:
                $this->setSessionUser($value);
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
        $keys = CareTzTrackerTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setTrackerId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setTime($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setModule($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setModuleId($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setReferingModule($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setReferingModuleId($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setAction($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOldValue($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setNewValue($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setValueType($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setParameters($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setCommentUser($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setSessionUser($arr[$keys[12]]);
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
     * @return $this|\CareMd\CareMd\CareTzTracker The current object, for fluid interface
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
        $criteria = new Criteria(CareTzTrackerTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzTrackerTableMap::COL_TRACKER_ID)) {
            $criteria->add(CareTzTrackerTableMap::COL_TRACKER_ID, $this->tracker_id);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_TIME)) {
            $criteria->add(CareTzTrackerTableMap::COL_TIME, $this->time);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_MODULE)) {
            $criteria->add(CareTzTrackerTableMap::COL_MODULE, $this->module);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_MODULE_ID)) {
            $criteria->add(CareTzTrackerTableMap::COL_MODULE_ID, $this->module_id);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_REFERING_MODULE)) {
            $criteria->add(CareTzTrackerTableMap::COL_REFERING_MODULE, $this->refering_module);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_REFERING_MODULE_ID)) {
            $criteria->add(CareTzTrackerTableMap::COL_REFERING_MODULE_ID, $this->refering_module_id);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_ACTION)) {
            $criteria->add(CareTzTrackerTableMap::COL_ACTION, $this->action);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_OLD_VALUE)) {
            $criteria->add(CareTzTrackerTableMap::COL_OLD_VALUE, $this->old_value);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_NEW_VALUE)) {
            $criteria->add(CareTzTrackerTableMap::COL_NEW_VALUE, $this->new_value);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_VALUE_TYPE)) {
            $criteria->add(CareTzTrackerTableMap::COL_VALUE_TYPE, $this->value_type);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_PARAMETERS)) {
            $criteria->add(CareTzTrackerTableMap::COL_PARAMETERS, $this->parameters);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_COMMENT_USER)) {
            $criteria->add(CareTzTrackerTableMap::COL_COMMENT_USER, $this->comment_user);
        }
        if ($this->isColumnModified(CareTzTrackerTableMap::COL_SESSION_USER)) {
            $criteria->add(CareTzTrackerTableMap::COL_SESSION_USER, $this->session_user);
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
        $criteria = ChildCareTzTrackerQuery::create();
        $criteria->add(CareTzTrackerTableMap::COL_TRACKER_ID, $this->tracker_id);

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
        $validPk = null !== $this->getTrackerId();

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
        return $this->getTrackerId();
    }

    /**
     * Generic method to set the primary key (tracker_id column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setTrackerId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getTrackerId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzTracker (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTime($this->getTime());
        $copyObj->setModule($this->getModule());
        $copyObj->setModuleId($this->getModuleId());
        $copyObj->setReferingModule($this->getReferingModule());
        $copyObj->setReferingModuleId($this->getReferingModuleId());
        $copyObj->setAction($this->getAction());
        $copyObj->setOldValue($this->getOldValue());
        $copyObj->setNewValue($this->getNewValue());
        $copyObj->setValueType($this->getValueType());
        $copyObj->setParameters($this->getParameters());
        $copyObj->setCommentUser($this->getCommentUser());
        $copyObj->setSessionUser($this->getSessionUser());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setTrackerId(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareTzTracker Clone of current object.
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
        $this->tracker_id = null;
        $this->time = null;
        $this->module = null;
        $this->module_id = null;
        $this->refering_module = null;
        $this->refering_module_id = null;
        $this->action = null;
        $this->old_value = null;
        $this->new_value = null;
        $this->value_type = null;
        $this->parameters = null;
        $this->comment_user = null;
        $this->session_user = null;
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
        return (string) $this->exportTo(CareTzTrackerTableMap::DEFAULT_STRING_FORMAT);
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
