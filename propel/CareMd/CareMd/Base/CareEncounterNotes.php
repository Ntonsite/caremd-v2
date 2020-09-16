<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterNotesQuery as ChildCareEncounterNotesQuery;
use CareMd\CareMd\Map\CareEncounterNotesTableMap;
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
 * Base class that represents a row from the 'care_encounter_notes' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareEncounterNotes implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareEncounterNotesTableMap';


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
     * The value for the type_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_nr;

    /**
     * The value for the notes field.
     *
     * @var        string
     */
    protected $notes;

    /**
     * The value for the short_notes field.
     *
     * @var        string
     */
    protected $short_notes;

    /**
     * The value for the aux_notes field.
     *
     * @var        string
     */
    protected $aux_notes;

    /**
     * The value for the ref_notes_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ref_notes_nr;

    /**
     * The value for the personell_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $personell_nr;

    /**
     * The value for the personell_name field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $personell_name;

    /**
     * The value for the send_to_pid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $send_to_pid;

    /**
     * The value for the send_to_name field.
     *
     * @var        string
     */
    protected $send_to_name;

    /**
     * The value for the date field.
     *
     * @var        DateTime
     */
    protected $date;

    /**
     * The value for the time field.
     *
     * @var        DateTime
     */
    protected $time;

    /**
     * The value for the location_type field.
     *
     * @var        string
     */
    protected $location_type;

    /**
     * The value for the location_type_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $location_type_nr;

    /**
     * The value for the location_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $location_nr;

    /**
     * The value for the location_id field.
     *
     * @var        string
     */
    protected $location_id;

    /**
     * The value for the ack_short_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ack_short_id;

    /**
     * The value for the date_ack field.
     *
     * @var        DateTime
     */
    protected $date_ack;

    /**
     * The value for the date_checked field.
     *
     * @var        DateTime
     */
    protected $date_checked;

    /**
     * The value for the date_printed field.
     *
     * @var        DateTime
     */
    protected $date_printed;

    /**
     * The value for the send_by_mail field.
     *
     * @var        boolean
     */
    protected $send_by_mail;

    /**
     * The value for the send_by_email field.
     *
     * @var        boolean
     */
    protected $send_by_email;

    /**
     * The value for the send_by_fax field.
     *
     * @var        boolean
     */
    protected $send_by_fax;

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
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
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
        $this->type_nr = 0;
        $this->ref_notes_nr = 0;
        $this->personell_nr = 0;
        $this->personell_name = '';
        $this->send_to_pid = 0;
        $this->location_type_nr = 0;
        $this->location_nr = 0;
        $this->ack_short_id = '';
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareEncounterNotes object.
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
     * Compares this with another <code>CareEncounterNotes</code> instance.  If
     * <code>obj</code> is an instance of <code>CareEncounterNotes</code>, delegates to
     * <code>equals(CareEncounterNotes)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareEncounterNotes The current object, for fluid interface
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
     * Get the [type_nr] column value.
     *
     * @return int
     */
    public function getTypeNr()
    {
        return $this->type_nr;
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
     * Get the [short_notes] column value.
     *
     * @return string
     */
    public function getShortNotes()
    {
        return $this->short_notes;
    }

    /**
     * Get the [aux_notes] column value.
     *
     * @return string
     */
    public function getAuxNotes()
    {
        return $this->aux_notes;
    }

    /**
     * Get the [ref_notes_nr] column value.
     *
     * @return int
     */
    public function getRefNotesNr()
    {
        return $this->ref_notes_nr;
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
     * Get the [personell_name] column value.
     *
     * @return string
     */
    public function getPersonellName()
    {
        return $this->personell_name;
    }

    /**
     * Get the [send_to_pid] column value.
     *
     * @return int
     */
    public function getSendToPid()
    {
        return $this->send_to_pid;
    }

    /**
     * Get the [send_to_name] column value.
     *
     * @return string
     */
    public function getSendToName()
    {
        return $this->send_to_name;
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
     * Get the [location_type] column value.
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * Get the [location_type_nr] column value.
     *
     * @return int
     */
    public function getLocationTypeNr()
    {
        return $this->location_type_nr;
    }

    /**
     * Get the [location_nr] column value.
     *
     * @return int
     */
    public function getLocationNr()
    {
        return $this->location_nr;
    }

    /**
     * Get the [location_id] column value.
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Get the [ack_short_id] column value.
     *
     * @return string
     */
    public function getAckShortId()
    {
        return $this->ack_short_id;
    }

    /**
     * Get the [optionally formatted] temporal [date_ack] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateAck($format = NULL)
    {
        if ($format === null) {
            return $this->date_ack;
        } else {
            return $this->date_ack instanceof \DateTimeInterface ? $this->date_ack->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [date_checked] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateChecked($format = NULL)
    {
        if ($format === null) {
            return $this->date_checked;
        } else {
            return $this->date_checked instanceof \DateTimeInterface ? $this->date_checked->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [date_printed] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatePrinted($format = NULL)
    {
        if ($format === null) {
            return $this->date_printed;
        } else {
            return $this->date_printed instanceof \DateTimeInterface ? $this->date_printed->format($format) : null;
        }
    }

    /**
     * Get the [send_by_mail] column value.
     *
     * @return boolean
     */
    public function getSendByMail()
    {
        return $this->send_by_mail;
    }

    /**
     * Get the [send_by_mail] column value.
     *
     * @return boolean
     */
    public function isSendByMail()
    {
        return $this->getSendByMail();
    }

    /**
     * Get the [send_by_email] column value.
     *
     * @return boolean
     */
    public function getSendByEmail()
    {
        return $this->send_by_email;
    }

    /**
     * Get the [send_by_email] column value.
     *
     * @return boolean
     */
    public function isSendByEmail()
    {
        return $this->getSendByEmail();
    }

    /**
     * Get the [send_by_fax] column value.
     *
     * @return boolean
     */
    public function getSendByFax()
    {
        return $this->send_by_fax;
    }

    /**
     * Get the [send_by_fax] column value.
     *
     * @return boolean
     */
    public function isSendByFax()
    {
        return $this->getSendByFax();
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
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [type_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setTypeNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->type_nr !== $v) {
            $this->type_nr = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_TYPE_NR] = true;
        }

        return $this;
    } // setTypeNr()

    /**
     * Set the value of [notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->notes !== $v) {
            $this->notes = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_NOTES] = true;
        }

        return $this;
    } // setNotes()

    /**
     * Set the value of [short_notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setShortNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->short_notes !== $v) {
            $this->short_notes = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_SHORT_NOTES] = true;
        }

        return $this;
    } // setShortNotes()

    /**
     * Set the value of [aux_notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setAuxNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aux_notes !== $v) {
            $this->aux_notes = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_AUX_NOTES] = true;
        }

        return $this;
    } // setAuxNotes()

    /**
     * Set the value of [ref_notes_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setRefNotesNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->ref_notes_nr !== $v) {
            $this->ref_notes_nr = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_REF_NOTES_NR] = true;
        }

        return $this;
    } // setRefNotesNr()

    /**
     * Set the value of [personell_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setPersonellNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->personell_nr !== $v) {
            $this->personell_nr = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_PERSONELL_NR] = true;
        }

        return $this;
    } // setPersonellNr()

    /**
     * Set the value of [personell_name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setPersonellName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->personell_name !== $v) {
            $this->personell_name = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_PERSONELL_NAME] = true;
        }

        return $this;
    } // setPersonellName()

    /**
     * Set the value of [send_to_pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setSendToPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->send_to_pid !== $v) {
            $this->send_to_pid = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_SEND_TO_PID] = true;
        }

        return $this;
    } // setSendToPid()

    /**
     * Set the value of [send_to_name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setSendToName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->send_to_name !== $v) {
            $this->send_to_name = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_SEND_TO_NAME] = true;
        }

        return $this;
    } // setSendToName()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            if ($this->date === null || $dt === null || $dt->format("Y-m-d") !== $this->date->format("Y-m-d")) {
                $this->date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterNotesTableMap::COL_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDate()

    /**
     * Sets the value of [time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->time !== null || $dt !== null) {
            if ($this->time === null || $dt === null || $dt->format("H:i:s.u") !== $this->time->format("H:i:s.u")) {
                $this->time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterNotesTableMap::COL_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setTime()

    /**
     * Set the value of [location_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setLocationType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->location_type !== $v) {
            $this->location_type = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_LOCATION_TYPE] = true;
        }

        return $this;
    } // setLocationType()

    /**
     * Set the value of [location_type_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setLocationTypeNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->location_type_nr !== $v) {
            $this->location_type_nr = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_LOCATION_TYPE_NR] = true;
        }

        return $this;
    } // setLocationTypeNr()

    /**
     * Set the value of [location_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setLocationNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->location_nr !== $v) {
            $this->location_nr = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_LOCATION_NR] = true;
        }

        return $this;
    } // setLocationNr()

    /**
     * Set the value of [location_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setLocationId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->location_id !== $v) {
            $this->location_id = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_LOCATION_ID] = true;
        }

        return $this;
    } // setLocationId()

    /**
     * Set the value of [ack_short_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setAckShortId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ack_short_id !== $v) {
            $this->ack_short_id = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_ACK_SHORT_ID] = true;
        }

        return $this;
    } // setAckShortId()

    /**
     * Sets the value of [date_ack] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setDateAck($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_ack !== null || $dt !== null) {
            if ($this->date_ack === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_ack->format("Y-m-d H:i:s.u")) {
                $this->date_ack = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterNotesTableMap::COL_DATE_ACK] = true;
            }
        } // if either are not null

        return $this;
    } // setDateAck()

    /**
     * Sets the value of [date_checked] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setDateChecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_checked !== null || $dt !== null) {
            if ($this->date_checked === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_checked->format("Y-m-d H:i:s.u")) {
                $this->date_checked = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterNotesTableMap::COL_DATE_CHECKED] = true;
            }
        } // if either are not null

        return $this;
    } // setDateChecked()

    /**
     * Sets the value of [date_printed] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setDatePrinted($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_printed !== null || $dt !== null) {
            if ($this->date_printed === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_printed->format("Y-m-d H:i:s.u")) {
                $this->date_printed = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterNotesTableMap::COL_DATE_PRINTED] = true;
            }
        } // if either are not null

        return $this;
    } // setDatePrinted()

    /**
     * Sets the value of the [send_by_mail] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setSendByMail($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->send_by_mail !== $v) {
            $this->send_by_mail = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_SEND_BY_MAIL] = true;
        }

        return $this;
    } // setSendByMail()

    /**
     * Sets the value of the [send_by_email] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setSendByEmail($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->send_by_email !== $v) {
            $this->send_by_email = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_SEND_BY_EMAIL] = true;
        }

        return $this;
    } // setSendByEmail()

    /**
     * Sets the value of the [send_by_fax] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setSendByFax($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->send_by_fax !== $v) {
            $this->send_by_fax = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_SEND_BY_FAX] = true;
        }

        return $this;
    } // setSendByFax()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterNotesTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareEncounterNotesTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ($this->create_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->create_time->format("Y-m-d H:i:s.u")) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterNotesTableMap::COL_CREATE_TIME] = true;
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

            if ($this->type_nr !== 0) {
                return false;
            }

            if ($this->ref_notes_nr !== 0) {
                return false;
            }

            if ($this->personell_nr !== 0) {
                return false;
            }

            if ($this->personell_name !== '') {
                return false;
            }

            if ($this->send_to_pid !== 0) {
                return false;
            }

            if ($this->location_type_nr !== 0) {
                return false;
            }

            if ($this->location_nr !== 0) {
                return false;
            }

            if ($this->ack_short_id !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareEncounterNotesTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareEncounterNotesTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareEncounterNotesTableMap::translateFieldName('TypeNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->type_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareEncounterNotesTableMap::translateFieldName('Notes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareEncounterNotesTableMap::translateFieldName('ShortNotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->short_notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareEncounterNotesTableMap::translateFieldName('AuxNotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aux_notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareEncounterNotesTableMap::translateFieldName('RefNotesNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ref_notes_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareEncounterNotesTableMap::translateFieldName('PersonellNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->personell_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareEncounterNotesTableMap::translateFieldName('PersonellName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->personell_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareEncounterNotesTableMap::translateFieldName('SendToPid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->send_to_pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareEncounterNotesTableMap::translateFieldName('SendToName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->send_to_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareEncounterNotesTableMap::translateFieldName('Date', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareEncounterNotesTableMap::translateFieldName('Time', TableMap::TYPE_PHPNAME, $indexType)];
            $this->time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareEncounterNotesTableMap::translateFieldName('LocationType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->location_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareEncounterNotesTableMap::translateFieldName('LocationTypeNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->location_type_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareEncounterNotesTableMap::translateFieldName('LocationNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->location_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareEncounterNotesTableMap::translateFieldName('LocationId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->location_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareEncounterNotesTableMap::translateFieldName('AckShortId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ack_short_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareEncounterNotesTableMap::translateFieldName('DateAck', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_ack = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareEncounterNotesTableMap::translateFieldName('DateChecked', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_checked = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareEncounterNotesTableMap::translateFieldName('DatePrinted', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_printed = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareEncounterNotesTableMap::translateFieldName('SendByMail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->send_by_mail = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareEncounterNotesTableMap::translateFieldName('SendByEmail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->send_by_email = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareEncounterNotesTableMap::translateFieldName('SendByFax', TableMap::TYPE_PHPNAME, $indexType)];
            $this->send_by_fax = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareEncounterNotesTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareEncounterNotesTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareEncounterNotesTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareEncounterNotesTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareEncounterNotesTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareEncounterNotesTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 30; // 30 = CareEncounterNotesTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareEncounterNotes'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterNotesTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareEncounterNotesQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareEncounterNotes::setDeleted()
     * @see CareEncounterNotes::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterNotesTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareEncounterNotesQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterNotesTableMap::DATABASE_NAME);
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
                CareEncounterNotesTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareEncounterNotesTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareEncounterNotesTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_TYPE_NR)) {
            $modifiedColumns[':p' . $index++]  = 'type_nr';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'notes';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SHORT_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'short_notes';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_AUX_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'aux_notes';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_REF_NOTES_NR)) {
            $modifiedColumns[':p' . $index++]  = 'ref_notes_nr';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_PERSONELL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'personell_nr';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_PERSONELL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'personell_name';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SEND_TO_PID)) {
            $modifiedColumns[':p' . $index++]  = 'send_to_pid';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SEND_TO_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'send_to_name';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'date';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'time';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_LOCATION_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'location_type';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_LOCATION_TYPE_NR)) {
            $modifiedColumns[':p' . $index++]  = 'location_type_nr';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_LOCATION_NR)) {
            $modifiedColumns[':p' . $index++]  = 'location_nr';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_LOCATION_ID)) {
            $modifiedColumns[':p' . $index++]  = 'location_id';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_ACK_SHORT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'ack_short_id';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_DATE_ACK)) {
            $modifiedColumns[':p' . $index++]  = 'date_ack';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_DATE_CHECKED)) {
            $modifiedColumns[':p' . $index++]  = 'date_checked';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_DATE_PRINTED)) {
            $modifiedColumns[':p' . $index++]  = 'date_printed';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SEND_BY_MAIL)) {
            $modifiedColumns[':p' . $index++]  = 'send_by_mail';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SEND_BY_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'send_by_email';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SEND_BY_FAX)) {
            $modifiedColumns[':p' . $index++]  = 'send_by_fax';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_encounter_notes (%s) VALUES (%s)',
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
                    case 'type_nr':
                        $stmt->bindValue($identifier, $this->type_nr, PDO::PARAM_INT);
                        break;
                    case 'notes':
                        $stmt->bindValue($identifier, $this->notes, PDO::PARAM_STR);
                        break;
                    case 'short_notes':
                        $stmt->bindValue($identifier, $this->short_notes, PDO::PARAM_STR);
                        break;
                    case 'aux_notes':
                        $stmt->bindValue($identifier, $this->aux_notes, PDO::PARAM_STR);
                        break;
                    case 'ref_notes_nr':
                        $stmt->bindValue($identifier, $this->ref_notes_nr, PDO::PARAM_INT);
                        break;
                    case 'personell_nr':
                        $stmt->bindValue($identifier, $this->personell_nr, PDO::PARAM_INT);
                        break;
                    case 'personell_name':
                        $stmt->bindValue($identifier, $this->personell_name, PDO::PARAM_STR);
                        break;
                    case 'send_to_pid':
                        $stmt->bindValue($identifier, $this->send_to_pid, PDO::PARAM_INT);
                        break;
                    case 'send_to_name':
                        $stmt->bindValue($identifier, $this->send_to_name, PDO::PARAM_STR);
                        break;
                    case 'date':
                        $stmt->bindValue($identifier, $this->date ? $this->date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'time':
                        $stmt->bindValue($identifier, $this->time ? $this->time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'location_type':
                        $stmt->bindValue($identifier, $this->location_type, PDO::PARAM_STR);
                        break;
                    case 'location_type_nr':
                        $stmt->bindValue($identifier, $this->location_type_nr, PDO::PARAM_INT);
                        break;
                    case 'location_nr':
                        $stmt->bindValue($identifier, $this->location_nr, PDO::PARAM_INT);
                        break;
                    case 'location_id':
                        $stmt->bindValue($identifier, $this->location_id, PDO::PARAM_STR);
                        break;
                    case 'ack_short_id':
                        $stmt->bindValue($identifier, $this->ack_short_id, PDO::PARAM_STR);
                        break;
                    case 'date_ack':
                        $stmt->bindValue($identifier, $this->date_ack ? $this->date_ack->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'date_checked':
                        $stmt->bindValue($identifier, $this->date_checked ? $this->date_checked->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'date_printed':
                        $stmt->bindValue($identifier, $this->date_printed ? $this->date_printed->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'send_by_mail':
                        $stmt->bindValue($identifier, (int) $this->send_by_mail, PDO::PARAM_INT);
                        break;
                    case 'send_by_email':
                        $stmt->bindValue($identifier, (int) $this->send_by_email, PDO::PARAM_INT);
                        break;
                    case 'send_by_fax':
                        $stmt->bindValue($identifier, (int) $this->send_by_fax, PDO::PARAM_INT);
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
        $pos = CareEncounterNotesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getTypeNr();
                break;
            case 3:
                return $this->getNotes();
                break;
            case 4:
                return $this->getShortNotes();
                break;
            case 5:
                return $this->getAuxNotes();
                break;
            case 6:
                return $this->getRefNotesNr();
                break;
            case 7:
                return $this->getPersonellNr();
                break;
            case 8:
                return $this->getPersonellName();
                break;
            case 9:
                return $this->getSendToPid();
                break;
            case 10:
                return $this->getSendToName();
                break;
            case 11:
                return $this->getDate();
                break;
            case 12:
                return $this->getTime();
                break;
            case 13:
                return $this->getLocationType();
                break;
            case 14:
                return $this->getLocationTypeNr();
                break;
            case 15:
                return $this->getLocationNr();
                break;
            case 16:
                return $this->getLocationId();
                break;
            case 17:
                return $this->getAckShortId();
                break;
            case 18:
                return $this->getDateAck();
                break;
            case 19:
                return $this->getDateChecked();
                break;
            case 20:
                return $this->getDatePrinted();
                break;
            case 21:
                return $this->getSendByMail();
                break;
            case 22:
                return $this->getSendByEmail();
                break;
            case 23:
                return $this->getSendByFax();
                break;
            case 24:
                return $this->getStatus();
                break;
            case 25:
                return $this->getHistory();
                break;
            case 26:
                return $this->getModifyId();
                break;
            case 27:
                return $this->getModifyTime();
                break;
            case 28:
                return $this->getCreateId();
                break;
            case 29:
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

        if (isset($alreadyDumpedObjects['CareEncounterNotes'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareEncounterNotes'][$this->hashCode()] = true;
        $keys = CareEncounterNotesTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getEncounterNr(),
            $keys[2] => $this->getTypeNr(),
            $keys[3] => $this->getNotes(),
            $keys[4] => $this->getShortNotes(),
            $keys[5] => $this->getAuxNotes(),
            $keys[6] => $this->getRefNotesNr(),
            $keys[7] => $this->getPersonellNr(),
            $keys[8] => $this->getPersonellName(),
            $keys[9] => $this->getSendToPid(),
            $keys[10] => $this->getSendToName(),
            $keys[11] => $this->getDate(),
            $keys[12] => $this->getTime(),
            $keys[13] => $this->getLocationType(),
            $keys[14] => $this->getLocationTypeNr(),
            $keys[15] => $this->getLocationNr(),
            $keys[16] => $this->getLocationId(),
            $keys[17] => $this->getAckShortId(),
            $keys[18] => $this->getDateAck(),
            $keys[19] => $this->getDateChecked(),
            $keys[20] => $this->getDatePrinted(),
            $keys[21] => $this->getSendByMail(),
            $keys[22] => $this->getSendByEmail(),
            $keys[23] => $this->getSendByFax(),
            $keys[24] => $this->getStatus(),
            $keys[25] => $this->getHistory(),
            $keys[26] => $this->getModifyId(),
            $keys[27] => $this->getModifyTime(),
            $keys[28] => $this->getCreateId(),
            $keys[29] => $this->getCreateTime(),
        );
        if ($result[$keys[11]] instanceof \DateTimeInterface) {
            $result[$keys[11]] = $result[$keys[11]]->format('c');
        }

        if ($result[$keys[12]] instanceof \DateTimeInterface) {
            $result[$keys[12]] = $result[$keys[12]]->format('c');
        }

        if ($result[$keys[18]] instanceof \DateTimeInterface) {
            $result[$keys[18]] = $result[$keys[18]]->format('c');
        }

        if ($result[$keys[19]] instanceof \DateTimeInterface) {
            $result[$keys[19]] = $result[$keys[19]]->format('c');
        }

        if ($result[$keys[20]] instanceof \DateTimeInterface) {
            $result[$keys[20]] = $result[$keys[20]]->format('c');
        }

        if ($result[$keys[27]] instanceof \DateTimeInterface) {
            $result[$keys[27]] = $result[$keys[27]]->format('c');
        }

        if ($result[$keys[29]] instanceof \DateTimeInterface) {
            $result[$keys[29]] = $result[$keys[29]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareEncounterNotes
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareEncounterNotesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareEncounterNotes
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
                $this->setTypeNr($value);
                break;
            case 3:
                $this->setNotes($value);
                break;
            case 4:
                $this->setShortNotes($value);
                break;
            case 5:
                $this->setAuxNotes($value);
                break;
            case 6:
                $this->setRefNotesNr($value);
                break;
            case 7:
                $this->setPersonellNr($value);
                break;
            case 8:
                $this->setPersonellName($value);
                break;
            case 9:
                $this->setSendToPid($value);
                break;
            case 10:
                $this->setSendToName($value);
                break;
            case 11:
                $this->setDate($value);
                break;
            case 12:
                $this->setTime($value);
                break;
            case 13:
                $this->setLocationType($value);
                break;
            case 14:
                $this->setLocationTypeNr($value);
                break;
            case 15:
                $this->setLocationNr($value);
                break;
            case 16:
                $this->setLocationId($value);
                break;
            case 17:
                $this->setAckShortId($value);
                break;
            case 18:
                $this->setDateAck($value);
                break;
            case 19:
                $this->setDateChecked($value);
                break;
            case 20:
                $this->setDatePrinted($value);
                break;
            case 21:
                $this->setSendByMail($value);
                break;
            case 22:
                $this->setSendByEmail($value);
                break;
            case 23:
                $this->setSendByFax($value);
                break;
            case 24:
                $this->setStatus($value);
                break;
            case 25:
                $this->setHistory($value);
                break;
            case 26:
                $this->setModifyId($value);
                break;
            case 27:
                $this->setModifyTime($value);
                break;
            case 28:
                $this->setCreateId($value);
                break;
            case 29:
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
        $keys = CareEncounterNotesTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setTypeNr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setNotes($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setShortNotes($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setAuxNotes($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setRefNotesNr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPersonellNr($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPersonellName($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setSendToPid($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setSendToName($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setDate($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setTime($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setLocationType($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setLocationTypeNr($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setLocationNr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setLocationId($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setAckShortId($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setDateAck($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setDateChecked($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setDatePrinted($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setSendByMail($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setSendByEmail($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setSendByFax($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setStatus($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setHistory($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setModifyId($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setModifyTime($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setCreateId($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setCreateTime($arr[$keys[29]]);
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
     * @return $this|\CareMd\CareMd\CareEncounterNotes The current object, for fluid interface
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
        $criteria = new Criteria(CareEncounterNotesTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_NR)) {
            $criteria->add(CareEncounterNotesTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareEncounterNotesTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_TYPE_NR)) {
            $criteria->add(CareEncounterNotesTableMap::COL_TYPE_NR, $this->type_nr);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_NOTES)) {
            $criteria->add(CareEncounterNotesTableMap::COL_NOTES, $this->notes);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SHORT_NOTES)) {
            $criteria->add(CareEncounterNotesTableMap::COL_SHORT_NOTES, $this->short_notes);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_AUX_NOTES)) {
            $criteria->add(CareEncounterNotesTableMap::COL_AUX_NOTES, $this->aux_notes);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_REF_NOTES_NR)) {
            $criteria->add(CareEncounterNotesTableMap::COL_REF_NOTES_NR, $this->ref_notes_nr);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_PERSONELL_NR)) {
            $criteria->add(CareEncounterNotesTableMap::COL_PERSONELL_NR, $this->personell_nr);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_PERSONELL_NAME)) {
            $criteria->add(CareEncounterNotesTableMap::COL_PERSONELL_NAME, $this->personell_name);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SEND_TO_PID)) {
            $criteria->add(CareEncounterNotesTableMap::COL_SEND_TO_PID, $this->send_to_pid);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SEND_TO_NAME)) {
            $criteria->add(CareEncounterNotesTableMap::COL_SEND_TO_NAME, $this->send_to_name);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_DATE)) {
            $criteria->add(CareEncounterNotesTableMap::COL_DATE, $this->date);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_TIME)) {
            $criteria->add(CareEncounterNotesTableMap::COL_TIME, $this->time);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_LOCATION_TYPE)) {
            $criteria->add(CareEncounterNotesTableMap::COL_LOCATION_TYPE, $this->location_type);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_LOCATION_TYPE_NR)) {
            $criteria->add(CareEncounterNotesTableMap::COL_LOCATION_TYPE_NR, $this->location_type_nr);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_LOCATION_NR)) {
            $criteria->add(CareEncounterNotesTableMap::COL_LOCATION_NR, $this->location_nr);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_LOCATION_ID)) {
            $criteria->add(CareEncounterNotesTableMap::COL_LOCATION_ID, $this->location_id);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_ACK_SHORT_ID)) {
            $criteria->add(CareEncounterNotesTableMap::COL_ACK_SHORT_ID, $this->ack_short_id);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_DATE_ACK)) {
            $criteria->add(CareEncounterNotesTableMap::COL_DATE_ACK, $this->date_ack);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_DATE_CHECKED)) {
            $criteria->add(CareEncounterNotesTableMap::COL_DATE_CHECKED, $this->date_checked);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_DATE_PRINTED)) {
            $criteria->add(CareEncounterNotesTableMap::COL_DATE_PRINTED, $this->date_printed);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SEND_BY_MAIL)) {
            $criteria->add(CareEncounterNotesTableMap::COL_SEND_BY_MAIL, $this->send_by_mail);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SEND_BY_EMAIL)) {
            $criteria->add(CareEncounterNotesTableMap::COL_SEND_BY_EMAIL, $this->send_by_email);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_SEND_BY_FAX)) {
            $criteria->add(CareEncounterNotesTableMap::COL_SEND_BY_FAX, $this->send_by_fax);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_STATUS)) {
            $criteria->add(CareEncounterNotesTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_HISTORY)) {
            $criteria->add(CareEncounterNotesTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareEncounterNotesTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareEncounterNotesTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_CREATE_ID)) {
            $criteria->add(CareEncounterNotesTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareEncounterNotesTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareEncounterNotesTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareEncounterNotesQuery::create();
        $criteria->add(CareEncounterNotesTableMap::COL_NR, $this->nr);

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
     * @param      object $copyObj An object of \CareMd\CareMd\CareEncounterNotes (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setTypeNr($this->getTypeNr());
        $copyObj->setNotes($this->getNotes());
        $copyObj->setShortNotes($this->getShortNotes());
        $copyObj->setAuxNotes($this->getAuxNotes());
        $copyObj->setRefNotesNr($this->getRefNotesNr());
        $copyObj->setPersonellNr($this->getPersonellNr());
        $copyObj->setPersonellName($this->getPersonellName());
        $copyObj->setSendToPid($this->getSendToPid());
        $copyObj->setSendToName($this->getSendToName());
        $copyObj->setDate($this->getDate());
        $copyObj->setTime($this->getTime());
        $copyObj->setLocationType($this->getLocationType());
        $copyObj->setLocationTypeNr($this->getLocationTypeNr());
        $copyObj->setLocationNr($this->getLocationNr());
        $copyObj->setLocationId($this->getLocationId());
        $copyObj->setAckShortId($this->getAckShortId());
        $copyObj->setDateAck($this->getDateAck());
        $copyObj->setDateChecked($this->getDateChecked());
        $copyObj->setDatePrinted($this->getDatePrinted());
        $copyObj->setSendByMail($this->getSendByMail());
        $copyObj->setSendByEmail($this->getSendByEmail());
        $copyObj->setSendByFax($this->getSendByFax());
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
     * @return \CareMd\CareMd\CareEncounterNotes Clone of current object.
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
        $this->type_nr = null;
        $this->notes = null;
        $this->short_notes = null;
        $this->aux_notes = null;
        $this->ref_notes_nr = null;
        $this->personell_nr = null;
        $this->personell_name = null;
        $this->send_to_pid = null;
        $this->send_to_name = null;
        $this->date = null;
        $this->time = null;
        $this->location_type = null;
        $this->location_type_nr = null;
        $this->location_nr = null;
        $this->location_id = null;
        $this->ack_short_id = null;
        $this->date_ack = null;
        $this->date_checked = null;
        $this->date_printed = null;
        $this->send_by_mail = null;
        $this->send_by_email = null;
        $this->send_by_fax = null;
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
        return (string) $this->exportTo(CareEncounterNotesTableMap::DEFAULT_STRING_FORMAT);
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
