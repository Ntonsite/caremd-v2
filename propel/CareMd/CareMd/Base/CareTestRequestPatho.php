<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestPathoQuery as ChildCareTestRequestPathoQuery;
use CareMd\CareMd\Map\CareTestRequestPathoTableMap;
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
 * Base class that represents a row from the 'care_test_request_patho' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTestRequestPatho implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTestRequestPathoTableMap';


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
     * The value for the batch_nr field.
     *
     * @var        int
     */
    protected $batch_nr;

    /**
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

    /**
     * The value for the dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $dept_nr;

    /**
     * The value for the quick_cut field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $quick_cut;

    /**
     * The value for the qc_phone field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qc_phone;

    /**
     * The value for the quick_diagnosis field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $quick_diagnosis;

    /**
     * The value for the qd_phone field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qd_phone;

    /**
     * The value for the material_type field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $material_type;

    /**
     * The value for the material_desc field.
     *
     * @var        string
     */
    protected $material_desc;

    /**
     * The value for the localization field.
     *
     * @var        string
     */
    protected $localization;

    /**
     * The value for the clinical_note field.
     *
     * @var        string
     */
    protected $clinical_note;

    /**
     * The value for the extra_note field.
     *
     * @var        string
     */
    protected $extra_note;

    /**
     * The value for the repeat_note field.
     *
     * @var        string
     */
    protected $repeat_note;

    /**
     * The value for the gyn_last_period field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gyn_last_period;

    /**
     * The value for the gyn_period_type field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gyn_period_type;

    /**
     * The value for the gyn_gravida field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gyn_gravida;

    /**
     * The value for the gyn_menopause_since field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gyn_menopause_since;

    /**
     * The value for the gyn_hysterectomy field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gyn_hysterectomy;

    /**
     * The value for the gyn_contraceptive field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gyn_contraceptive;

    /**
     * The value for the gyn_iud field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gyn_iud;

    /**
     * The value for the gyn_hormone_therapy field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gyn_hormone_therapy;

    /**
     * The value for the doctor_sign field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $doctor_sign;

    /**
     * The value for the op_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $op_date;

    /**
     * The value for the send_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $send_date;

    /**
     * The value for the status field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $status;

    /**
     * The value for the entry_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $entry_date;

    /**
     * The value for the journal_nr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $journal_nr;

    /**
     * The value for the blocks_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $blocks_nr;

    /**
     * The value for the deep_cuts field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $deep_cuts;

    /**
     * The value for the special_dye field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $special_dye;

    /**
     * The value for the immune_histochem field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $immune_histochem;

    /**
     * The value for the hormone_receptors field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hormone_receptors;

    /**
     * The value for the specials field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $specials;

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
     * The value for the process_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $process_id;

    /**
     * The value for the process_time field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $process_time;

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
        $this->dept_nr = 0;
        $this->quick_cut = 0;
        $this->qc_phone = '';
        $this->quick_diagnosis = 0;
        $this->qd_phone = '';
        $this->material_type = '';
        $this->gyn_last_period = '';
        $this->gyn_period_type = '';
        $this->gyn_gravida = '';
        $this->gyn_menopause_since = '0';
        $this->gyn_hysterectomy = '0';
        $this->gyn_contraceptive = '0';
        $this->gyn_iud = '';
        $this->gyn_hormone_therapy = '';
        $this->doctor_sign = '';
        $this->op_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->send_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->status = '';
        $this->entry_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->journal_nr = '';
        $this->blocks_nr = 0;
        $this->deep_cuts = 0;
        $this->special_dye = '';
        $this->immune_histochem = '';
        $this->hormone_receptors = '';
        $this->specials = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->process_id = '';
        $this->process_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTestRequestPatho object.
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
     * Compares this with another <code>CareTestRequestPatho</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTestRequestPatho</code>, delegates to
     * <code>equals(CareTestRequestPatho)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTestRequestPatho The current object, for fluid interface
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
     * Get the [batch_nr] column value.
     *
     * @return int
     */
    public function getBatchNr()
    {
        return $this->batch_nr;
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
     * Get the [dept_nr] column value.
     *
     * @return int
     */
    public function getDeptNr()
    {
        return $this->dept_nr;
    }

    /**
     * Get the [quick_cut] column value.
     *
     * @return int
     */
    public function getQuickCut()
    {
        return $this->quick_cut;
    }

    /**
     * Get the [qc_phone] column value.
     *
     * @return string
     */
    public function getQcPhone()
    {
        return $this->qc_phone;
    }

    /**
     * Get the [quick_diagnosis] column value.
     *
     * @return int
     */
    public function getQuickDiagnosis()
    {
        return $this->quick_diagnosis;
    }

    /**
     * Get the [qd_phone] column value.
     *
     * @return string
     */
    public function getQdPhone()
    {
        return $this->qd_phone;
    }

    /**
     * Get the [material_type] column value.
     *
     * @return string
     */
    public function getMaterialType()
    {
        return $this->material_type;
    }

    /**
     * Get the [material_desc] column value.
     *
     * @return string
     */
    public function getMaterialDesc()
    {
        return $this->material_desc;
    }

    /**
     * Get the [localization] column value.
     *
     * @return string
     */
    public function getLocalization()
    {
        return $this->localization;
    }

    /**
     * Get the [clinical_note] column value.
     *
     * @return string
     */
    public function getClinicalNote()
    {
        return $this->clinical_note;
    }

    /**
     * Get the [extra_note] column value.
     *
     * @return string
     */
    public function getExtraNote()
    {
        return $this->extra_note;
    }

    /**
     * Get the [repeat_note] column value.
     *
     * @return string
     */
    public function getRepeatNote()
    {
        return $this->repeat_note;
    }

    /**
     * Get the [gyn_last_period] column value.
     *
     * @return string
     */
    public function getGynLastPeriod()
    {
        return $this->gyn_last_period;
    }

    /**
     * Get the [gyn_period_type] column value.
     *
     * @return string
     */
    public function getGynPeriodType()
    {
        return $this->gyn_period_type;
    }

    /**
     * Get the [gyn_gravida] column value.
     *
     * @return string
     */
    public function getGynGravida()
    {
        return $this->gyn_gravida;
    }

    /**
     * Get the [gyn_menopause_since] column value.
     *
     * @return string
     */
    public function getGynMenopauseSince()
    {
        return $this->gyn_menopause_since;
    }

    /**
     * Get the [gyn_hysterectomy] column value.
     *
     * @return string
     */
    public function getGynHysterectomy()
    {
        return $this->gyn_hysterectomy;
    }

    /**
     * Get the [gyn_contraceptive] column value.
     *
     * @return string
     */
    public function getGynContraceptive()
    {
        return $this->gyn_contraceptive;
    }

    /**
     * Get the [gyn_iud] column value.
     *
     * @return string
     */
    public function getGynIud()
    {
        return $this->gyn_iud;
    }

    /**
     * Get the [gyn_hormone_therapy] column value.
     *
     * @return string
     */
    public function getGynHormoneTherapy()
    {
        return $this->gyn_hormone_therapy;
    }

    /**
     * Get the [doctor_sign] column value.
     *
     * @return string
     */
    public function getDoctorSign()
    {
        return $this->doctor_sign;
    }

    /**
     * Get the [optionally formatted] temporal [op_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpDate($format = NULL)
    {
        if ($format === null) {
            return $this->op_date;
        } else {
            return $this->op_date instanceof \DateTimeInterface ? $this->op_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [send_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSendDate($format = NULL)
    {
        if ($format === null) {
            return $this->send_date;
        } else {
            return $this->send_date instanceof \DateTimeInterface ? $this->send_date->format($format) : null;
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
     * Get the [optionally formatted] temporal [entry_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEntryDate($format = NULL)
    {
        if ($format === null) {
            return $this->entry_date;
        } else {
            return $this->entry_date instanceof \DateTimeInterface ? $this->entry_date->format($format) : null;
        }
    }

    /**
     * Get the [journal_nr] column value.
     *
     * @return string
     */
    public function getJournalNr()
    {
        return $this->journal_nr;
    }

    /**
     * Get the [blocks_nr] column value.
     *
     * @return int
     */
    public function getBlocksNr()
    {
        return $this->blocks_nr;
    }

    /**
     * Get the [deep_cuts] column value.
     *
     * @return int
     */
    public function getDeepCuts()
    {
        return $this->deep_cuts;
    }

    /**
     * Get the [special_dye] column value.
     *
     * @return string
     */
    public function getSpecialDye()
    {
        return $this->special_dye;
    }

    /**
     * Get the [immune_histochem] column value.
     *
     * @return string
     */
    public function getImmuneHistochem()
    {
        return $this->immune_histochem;
    }

    /**
     * Get the [hormone_receptors] column value.
     *
     * @return string
     */
    public function getHormoneReceptors()
    {
        return $this->hormone_receptors;
    }

    /**
     * Get the [specials] column value.
     *
     * @return string
     */
    public function getSpecials()
    {
        return $this->specials;
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
     * Get the [process_id] column value.
     *
     * @return string
     */
    public function getProcessId()
    {
        return $this->process_id;
    }

    /**
     * Get the [optionally formatted] temporal [process_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getProcessTime($format = NULL)
    {
        if ($format === null) {
            return $this->process_time;
        } else {
            return $this->process_time instanceof \DateTimeInterface ? $this->process_time->format($format) : null;
        }
    }

    /**
     * Set the value of [batch_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setBatchNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->batch_nr !== $v) {
            $this->batch_nr = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_BATCH_NR] = true;
        }

        return $this;
    } // setBatchNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dept_nr !== $v) {
            $this->dept_nr = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_DEPT_NR] = true;
        }

        return $this;
    } // setDeptNr()

    /**
     * Set the value of [quick_cut] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setQuickCut($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->quick_cut !== $v) {
            $this->quick_cut = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_QUICK_CUT] = true;
        }

        return $this;
    } // setQuickCut()

    /**
     * Set the value of [qc_phone] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setQcPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qc_phone !== $v) {
            $this->qc_phone = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_QC_PHONE] = true;
        }

        return $this;
    } // setQcPhone()

    /**
     * Set the value of [quick_diagnosis] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setQuickDiagnosis($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->quick_diagnosis !== $v) {
            $this->quick_diagnosis = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_QUICK_DIAGNOSIS] = true;
        }

        return $this;
    } // setQuickDiagnosis()

    /**
     * Set the value of [qd_phone] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setQdPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qd_phone !== $v) {
            $this->qd_phone = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_QD_PHONE] = true;
        }

        return $this;
    } // setQdPhone()

    /**
     * Set the value of [material_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setMaterialType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->material_type !== $v) {
            $this->material_type = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_MATERIAL_TYPE] = true;
        }

        return $this;
    } // setMaterialType()

    /**
     * Set the value of [material_desc] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setMaterialDesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->material_desc !== $v) {
            $this->material_desc = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_MATERIAL_DESC] = true;
        }

        return $this;
    } // setMaterialDesc()

    /**
     * Set the value of [localization] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setLocalization($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->localization !== $v) {
            $this->localization = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_LOCALIZATION] = true;
        }

        return $this;
    } // setLocalization()

    /**
     * Set the value of [clinical_note] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setClinicalNote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->clinical_note !== $v) {
            $this->clinical_note = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_CLINICAL_NOTE] = true;
        }

        return $this;
    } // setClinicalNote()

    /**
     * Set the value of [extra_note] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setExtraNote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->extra_note !== $v) {
            $this->extra_note = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_EXTRA_NOTE] = true;
        }

        return $this;
    } // setExtraNote()

    /**
     * Set the value of [repeat_note] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setRepeatNote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->repeat_note !== $v) {
            $this->repeat_note = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_REPEAT_NOTE] = true;
        }

        return $this;
    } // setRepeatNote()

    /**
     * Set the value of [gyn_last_period] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setGynLastPeriod($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gyn_last_period !== $v) {
            $this->gyn_last_period = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_GYN_LAST_PERIOD] = true;
        }

        return $this;
    } // setGynLastPeriod()

    /**
     * Set the value of [gyn_period_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setGynPeriodType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gyn_period_type !== $v) {
            $this->gyn_period_type = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_GYN_PERIOD_TYPE] = true;
        }

        return $this;
    } // setGynPeriodType()

    /**
     * Set the value of [gyn_gravida] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setGynGravida($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gyn_gravida !== $v) {
            $this->gyn_gravida = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_GYN_GRAVIDA] = true;
        }

        return $this;
    } // setGynGravida()

    /**
     * Set the value of [gyn_menopause_since] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setGynMenopauseSince($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gyn_menopause_since !== $v) {
            $this->gyn_menopause_since = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_GYN_MENOPAUSE_SINCE] = true;
        }

        return $this;
    } // setGynMenopauseSince()

    /**
     * Set the value of [gyn_hysterectomy] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setGynHysterectomy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gyn_hysterectomy !== $v) {
            $this->gyn_hysterectomy = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_GYN_HYSTERECTOMY] = true;
        }

        return $this;
    } // setGynHysterectomy()

    /**
     * Set the value of [gyn_contraceptive] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setGynContraceptive($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gyn_contraceptive !== $v) {
            $this->gyn_contraceptive = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_GYN_CONTRACEPTIVE] = true;
        }

        return $this;
    } // setGynContraceptive()

    /**
     * Set the value of [gyn_iud] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setGynIud($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gyn_iud !== $v) {
            $this->gyn_iud = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_GYN_IUD] = true;
        }

        return $this;
    } // setGynIud()

    /**
     * Set the value of [gyn_hormone_therapy] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setGynHormoneTherapy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gyn_hormone_therapy !== $v) {
            $this->gyn_hormone_therapy = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_GYN_HORMONE_THERAPY] = true;
        }

        return $this;
    } // setGynHormoneTherapy()

    /**
     * Set the value of [doctor_sign] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setDoctorSign($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doctor_sign !== $v) {
            $this->doctor_sign = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_DOCTOR_SIGN] = true;
        }

        return $this;
    } // setDoctorSign()

    /**
     * Sets the value of [op_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setOpDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_date !== null || $dt !== null) {
            if ( ($dt != $this->op_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->op_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestPathoTableMap::COL_OP_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setOpDate()

    /**
     * Sets the value of [send_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setSendDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->send_date !== null || $dt !== null) {
            if ( ($dt != $this->send_date) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->send_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestPathoTableMap::COL_SEND_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setSendDate()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Sets the value of [entry_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setEntryDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->entry_date !== null || $dt !== null) {
            if ( ($dt != $this->entry_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->entry_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestPathoTableMap::COL_ENTRY_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setEntryDate()

    /**
     * Set the value of [journal_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setJournalNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->journal_nr !== $v) {
            $this->journal_nr = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_JOURNAL_NR] = true;
        }

        return $this;
    } // setJournalNr()

    /**
     * Set the value of [blocks_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setBlocksNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->blocks_nr !== $v) {
            $this->blocks_nr = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_BLOCKS_NR] = true;
        }

        return $this;
    } // setBlocksNr()

    /**
     * Set the value of [deep_cuts] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setDeepCuts($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->deep_cuts !== $v) {
            $this->deep_cuts = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_DEEP_CUTS] = true;
        }

        return $this;
    } // setDeepCuts()

    /**
     * Set the value of [special_dye] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setSpecialDye($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->special_dye !== $v) {
            $this->special_dye = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_SPECIAL_DYE] = true;
        }

        return $this;
    } // setSpecialDye()

    /**
     * Set the value of [immune_histochem] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setImmuneHistochem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->immune_histochem !== $v) {
            $this->immune_histochem = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_IMMUNE_HISTOCHEM] = true;
        }

        return $this;
    } // setImmuneHistochem()

    /**
     * Set the value of [hormone_receptors] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setHormoneReceptors($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hormone_receptors !== $v) {
            $this->hormone_receptors = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_HORMONE_RECEPTORS] = true;
        }

        return $this;
    } // setHormoneReceptors()

    /**
     * Set the value of [specials] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setSpecials($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->specials !== $v) {
            $this->specials = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_SPECIALS] = true;
        }

        return $this;
    } // setSpecials()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestPathoTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestPathoTableMap::COL_CREATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateTime()

    /**
     * Set the value of [process_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setProcessId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->process_id !== $v) {
            $this->process_id = $v;
            $this->modifiedColumns[CareTestRequestPathoTableMap::COL_PROCESS_ID] = true;
        }

        return $this;
    } // setProcessId()

    /**
     * Sets the value of [process_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object (for fluent API support)
     */
    public function setProcessTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->process_time !== null || $dt !== null) {
            if ( ($dt != $this->process_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->process_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestPathoTableMap::COL_PROCESS_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setProcessTime()

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

            if ($this->dept_nr !== 0) {
                return false;
            }

            if ($this->quick_cut !== 0) {
                return false;
            }

            if ($this->qc_phone !== '') {
                return false;
            }

            if ($this->quick_diagnosis !== 0) {
                return false;
            }

            if ($this->qd_phone !== '') {
                return false;
            }

            if ($this->material_type !== '') {
                return false;
            }

            if ($this->gyn_last_period !== '') {
                return false;
            }

            if ($this->gyn_period_type !== '') {
                return false;
            }

            if ($this->gyn_gravida !== '') {
                return false;
            }

            if ($this->gyn_menopause_since !== '0') {
                return false;
            }

            if ($this->gyn_hysterectomy !== '0') {
                return false;
            }

            if ($this->gyn_contraceptive !== '0') {
                return false;
            }

            if ($this->gyn_iud !== '') {
                return false;
            }

            if ($this->gyn_hormone_therapy !== '') {
                return false;
            }

            if ($this->doctor_sign !== '') {
                return false;
            }

            if ($this->op_date && $this->op_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->send_date && $this->send_date->format('Y-m-d H:i:s.u') !== NULL) {
                return false;
            }

            if ($this->status !== '') {
                return false;
            }

            if ($this->entry_date && $this->entry_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->journal_nr !== '') {
                return false;
            }

            if ($this->blocks_nr !== 0) {
                return false;
            }

            if ($this->deep_cuts !== 0) {
                return false;
            }

            if ($this->special_dye !== '') {
                return false;
            }

            if ($this->immune_histochem !== '') {
                return false;
            }

            if ($this->hormone_receptors !== '') {
                return false;
            }

            if ($this->specials !== '') {
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

            if ($this->process_id !== '') {
                return false;
            }

            if ($this->process_time && $this->process_time->format('Y-m-d H:i:s.u') !== NULL) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTestRequestPathoTableMap::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->batch_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTestRequestPathoTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTestRequestPathoTableMap::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTestRequestPathoTableMap::translateFieldName('QuickCut', TableMap::TYPE_PHPNAME, $indexType)];
            $this->quick_cut = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTestRequestPathoTableMap::translateFieldName('QcPhone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qc_phone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTestRequestPathoTableMap::translateFieldName('QuickDiagnosis', TableMap::TYPE_PHPNAME, $indexType)];
            $this->quick_diagnosis = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTestRequestPathoTableMap::translateFieldName('QdPhone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qd_phone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTestRequestPathoTableMap::translateFieldName('MaterialType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->material_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTestRequestPathoTableMap::translateFieldName('MaterialDesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->material_desc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTestRequestPathoTableMap::translateFieldName('Localization', TableMap::TYPE_PHPNAME, $indexType)];
            $this->localization = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTestRequestPathoTableMap::translateFieldName('ClinicalNote', TableMap::TYPE_PHPNAME, $indexType)];
            $this->clinical_note = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTestRequestPathoTableMap::translateFieldName('ExtraNote', TableMap::TYPE_PHPNAME, $indexType)];
            $this->extra_note = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTestRequestPathoTableMap::translateFieldName('RepeatNote', TableMap::TYPE_PHPNAME, $indexType)];
            $this->repeat_note = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTestRequestPathoTableMap::translateFieldName('GynLastPeriod', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gyn_last_period = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTestRequestPathoTableMap::translateFieldName('GynPeriodType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gyn_period_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTestRequestPathoTableMap::translateFieldName('GynGravida', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gyn_gravida = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTestRequestPathoTableMap::translateFieldName('GynMenopauseSince', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gyn_menopause_since = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTestRequestPathoTableMap::translateFieldName('GynHysterectomy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gyn_hysterectomy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTestRequestPathoTableMap::translateFieldName('GynContraceptive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gyn_contraceptive = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTestRequestPathoTableMap::translateFieldName('GynIud', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gyn_iud = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTestRequestPathoTableMap::translateFieldName('GynHormoneTherapy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gyn_hormone_therapy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTestRequestPathoTableMap::translateFieldName('DoctorSign', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doctor_sign = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTestRequestPathoTableMap::translateFieldName('OpDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->op_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareTestRequestPathoTableMap::translateFieldName('SendDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->send_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareTestRequestPathoTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareTestRequestPathoTableMap::translateFieldName('EntryDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->entry_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareTestRequestPathoTableMap::translateFieldName('JournalNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->journal_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareTestRequestPathoTableMap::translateFieldName('BlocksNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blocks_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareTestRequestPathoTableMap::translateFieldName('DeepCuts', TableMap::TYPE_PHPNAME, $indexType)];
            $this->deep_cuts = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareTestRequestPathoTableMap::translateFieldName('SpecialDye', TableMap::TYPE_PHPNAME, $indexType)];
            $this->special_dye = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CareTestRequestPathoTableMap::translateFieldName('ImmuneHistochem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->immune_histochem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CareTestRequestPathoTableMap::translateFieldName('HormoneReceptors', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hormone_receptors = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CareTestRequestPathoTableMap::translateFieldName('Specials', TableMap::TYPE_PHPNAME, $indexType)];
            $this->specials = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CareTestRequestPathoTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CareTestRequestPathoTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CareTestRequestPathoTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CareTestRequestPathoTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CareTestRequestPathoTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CareTestRequestPathoTableMap::translateFieldName('ProcessId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->process_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CareTestRequestPathoTableMap::translateFieldName('ProcessTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->process_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 40; // 40 = CareTestRequestPathoTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTestRequestPatho'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestPathoTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTestRequestPathoQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTestRequestPatho::setDeleted()
     * @see CareTestRequestPatho::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestPathoTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTestRequestPathoQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestPathoTableMap::DATABASE_NAME);
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
                CareTestRequestPathoTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTestRequestPathoTableMap::COL_BATCH_NR] = true;
        if (null !== $this->batch_nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTestRequestPathoTableMap::COL_BATCH_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_BATCH_NR)) {
            $modifiedColumns[':p' . $index++]  = 'batch_nr';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'dept_nr';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_QUICK_CUT)) {
            $modifiedColumns[':p' . $index++]  = 'quick_cut';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_QC_PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'qc_phone';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_QUICK_DIAGNOSIS)) {
            $modifiedColumns[':p' . $index++]  = 'quick_diagnosis';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_QD_PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'qd_phone';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_MATERIAL_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'material_type';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_MATERIAL_DESC)) {
            $modifiedColumns[':p' . $index++]  = 'material_desc';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_LOCALIZATION)) {
            $modifiedColumns[':p' . $index++]  = 'localization';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_CLINICAL_NOTE)) {
            $modifiedColumns[':p' . $index++]  = 'clinical_note';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_EXTRA_NOTE)) {
            $modifiedColumns[':p' . $index++]  = 'extra_note';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_REPEAT_NOTE)) {
            $modifiedColumns[':p' . $index++]  = 'repeat_note';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_LAST_PERIOD)) {
            $modifiedColumns[':p' . $index++]  = 'gyn_last_period';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_PERIOD_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'gyn_period_type';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_GRAVIDA)) {
            $modifiedColumns[':p' . $index++]  = 'gyn_gravida';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_MENOPAUSE_SINCE)) {
            $modifiedColumns[':p' . $index++]  = 'gyn_menopause_since';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_HYSTERECTOMY)) {
            $modifiedColumns[':p' . $index++]  = 'gyn_hysterectomy';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_CONTRACEPTIVE)) {
            $modifiedColumns[':p' . $index++]  = 'gyn_contraceptive';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_IUD)) {
            $modifiedColumns[':p' . $index++]  = 'gyn_iud';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_HORMONE_THERAPY)) {
            $modifiedColumns[':p' . $index++]  = 'gyn_hormone_therapy';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_DOCTOR_SIGN)) {
            $modifiedColumns[':p' . $index++]  = 'doctor_sign';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_OP_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'op_date';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_SEND_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'send_date';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_ENTRY_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'entry_date';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_JOURNAL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'journal_nr';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_BLOCKS_NR)) {
            $modifiedColumns[':p' . $index++]  = 'blocks_nr';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_DEEP_CUTS)) {
            $modifiedColumns[':p' . $index++]  = 'deep_cuts';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_SPECIAL_DYE)) {
            $modifiedColumns[':p' . $index++]  = 'special_dye';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_IMMUNE_HISTOCHEM)) {
            $modifiedColumns[':p' . $index++]  = 'immune_histochem';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_HORMONE_RECEPTORS)) {
            $modifiedColumns[':p' . $index++]  = 'hormone_receptors';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_SPECIALS)) {
            $modifiedColumns[':p' . $index++]  = 'specials';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_PROCESS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'process_id';
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_PROCESS_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'process_time';
        }

        $sql = sprintf(
            'INSERT INTO care_test_request_patho (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'batch_nr':
                        $stmt->bindValue($identifier, $this->batch_nr, PDO::PARAM_INT);
                        break;
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'dept_nr':
                        $stmt->bindValue($identifier, $this->dept_nr, PDO::PARAM_INT);
                        break;
                    case 'quick_cut':
                        $stmt->bindValue($identifier, $this->quick_cut, PDO::PARAM_INT);
                        break;
                    case 'qc_phone':
                        $stmt->bindValue($identifier, $this->qc_phone, PDO::PARAM_STR);
                        break;
                    case 'quick_diagnosis':
                        $stmt->bindValue($identifier, $this->quick_diagnosis, PDO::PARAM_INT);
                        break;
                    case 'qd_phone':
                        $stmt->bindValue($identifier, $this->qd_phone, PDO::PARAM_STR);
                        break;
                    case 'material_type':
                        $stmt->bindValue($identifier, $this->material_type, PDO::PARAM_STR);
                        break;
                    case 'material_desc':
                        $stmt->bindValue($identifier, $this->material_desc, PDO::PARAM_STR);
                        break;
                    case 'localization':
                        $stmt->bindValue($identifier, $this->localization, PDO::PARAM_STR);
                        break;
                    case 'clinical_note':
                        $stmt->bindValue($identifier, $this->clinical_note, PDO::PARAM_STR);
                        break;
                    case 'extra_note':
                        $stmt->bindValue($identifier, $this->extra_note, PDO::PARAM_STR);
                        break;
                    case 'repeat_note':
                        $stmt->bindValue($identifier, $this->repeat_note, PDO::PARAM_STR);
                        break;
                    case 'gyn_last_period':
                        $stmt->bindValue($identifier, $this->gyn_last_period, PDO::PARAM_STR);
                        break;
                    case 'gyn_period_type':
                        $stmt->bindValue($identifier, $this->gyn_period_type, PDO::PARAM_STR);
                        break;
                    case 'gyn_gravida':
                        $stmt->bindValue($identifier, $this->gyn_gravida, PDO::PARAM_STR);
                        break;
                    case 'gyn_menopause_since':
                        $stmt->bindValue($identifier, $this->gyn_menopause_since, PDO::PARAM_STR);
                        break;
                    case 'gyn_hysterectomy':
                        $stmt->bindValue($identifier, $this->gyn_hysterectomy, PDO::PARAM_STR);
                        break;
                    case 'gyn_contraceptive':
                        $stmt->bindValue($identifier, $this->gyn_contraceptive, PDO::PARAM_STR);
                        break;
                    case 'gyn_iud':
                        $stmt->bindValue($identifier, $this->gyn_iud, PDO::PARAM_STR);
                        break;
                    case 'gyn_hormone_therapy':
                        $stmt->bindValue($identifier, $this->gyn_hormone_therapy, PDO::PARAM_STR);
                        break;
                    case 'doctor_sign':
                        $stmt->bindValue($identifier, $this->doctor_sign, PDO::PARAM_STR);
                        break;
                    case 'op_date':
                        $stmt->bindValue($identifier, $this->op_date ? $this->op_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'send_date':
                        $stmt->bindValue($identifier, $this->send_date ? $this->send_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'entry_date':
                        $stmt->bindValue($identifier, $this->entry_date ? $this->entry_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'journal_nr':
                        $stmt->bindValue($identifier, $this->journal_nr, PDO::PARAM_STR);
                        break;
                    case 'blocks_nr':
                        $stmt->bindValue($identifier, $this->blocks_nr, PDO::PARAM_INT);
                        break;
                    case 'deep_cuts':
                        $stmt->bindValue($identifier, $this->deep_cuts, PDO::PARAM_INT);
                        break;
                    case 'special_dye':
                        $stmt->bindValue($identifier, $this->special_dye, PDO::PARAM_STR);
                        break;
                    case 'immune_histochem':
                        $stmt->bindValue($identifier, $this->immune_histochem, PDO::PARAM_STR);
                        break;
                    case 'hormone_receptors':
                        $stmt->bindValue($identifier, $this->hormone_receptors, PDO::PARAM_STR);
                        break;
                    case 'specials':
                        $stmt->bindValue($identifier, $this->specials, PDO::PARAM_STR);
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
                    case 'process_id':
                        $stmt->bindValue($identifier, $this->process_id, PDO::PARAM_STR);
                        break;
                    case 'process_time':
                        $stmt->bindValue($identifier, $this->process_time ? $this->process_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
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
        $this->setBatchNr($pk);

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
        $pos = CareTestRequestPathoTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getBatchNr();
                break;
            case 1:
                return $this->getEncounterNr();
                break;
            case 2:
                return $this->getDeptNr();
                break;
            case 3:
                return $this->getQuickCut();
                break;
            case 4:
                return $this->getQcPhone();
                break;
            case 5:
                return $this->getQuickDiagnosis();
                break;
            case 6:
                return $this->getQdPhone();
                break;
            case 7:
                return $this->getMaterialType();
                break;
            case 8:
                return $this->getMaterialDesc();
                break;
            case 9:
                return $this->getLocalization();
                break;
            case 10:
                return $this->getClinicalNote();
                break;
            case 11:
                return $this->getExtraNote();
                break;
            case 12:
                return $this->getRepeatNote();
                break;
            case 13:
                return $this->getGynLastPeriod();
                break;
            case 14:
                return $this->getGynPeriodType();
                break;
            case 15:
                return $this->getGynGravida();
                break;
            case 16:
                return $this->getGynMenopauseSince();
                break;
            case 17:
                return $this->getGynHysterectomy();
                break;
            case 18:
                return $this->getGynContraceptive();
                break;
            case 19:
                return $this->getGynIud();
                break;
            case 20:
                return $this->getGynHormoneTherapy();
                break;
            case 21:
                return $this->getDoctorSign();
                break;
            case 22:
                return $this->getOpDate();
                break;
            case 23:
                return $this->getSendDate();
                break;
            case 24:
                return $this->getStatus();
                break;
            case 25:
                return $this->getEntryDate();
                break;
            case 26:
                return $this->getJournalNr();
                break;
            case 27:
                return $this->getBlocksNr();
                break;
            case 28:
                return $this->getDeepCuts();
                break;
            case 29:
                return $this->getSpecialDye();
                break;
            case 30:
                return $this->getImmuneHistochem();
                break;
            case 31:
                return $this->getHormoneReceptors();
                break;
            case 32:
                return $this->getSpecials();
                break;
            case 33:
                return $this->getHistory();
                break;
            case 34:
                return $this->getModifyId();
                break;
            case 35:
                return $this->getModifyTime();
                break;
            case 36:
                return $this->getCreateId();
                break;
            case 37:
                return $this->getCreateTime();
                break;
            case 38:
                return $this->getProcessId();
                break;
            case 39:
                return $this->getProcessTime();
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

        if (isset($alreadyDumpedObjects['CareTestRequestPatho'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTestRequestPatho'][$this->hashCode()] = true;
        $keys = CareTestRequestPathoTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBatchNr(),
            $keys[1] => $this->getEncounterNr(),
            $keys[2] => $this->getDeptNr(),
            $keys[3] => $this->getQuickCut(),
            $keys[4] => $this->getQcPhone(),
            $keys[5] => $this->getQuickDiagnosis(),
            $keys[6] => $this->getQdPhone(),
            $keys[7] => $this->getMaterialType(),
            $keys[8] => $this->getMaterialDesc(),
            $keys[9] => $this->getLocalization(),
            $keys[10] => $this->getClinicalNote(),
            $keys[11] => $this->getExtraNote(),
            $keys[12] => $this->getRepeatNote(),
            $keys[13] => $this->getGynLastPeriod(),
            $keys[14] => $this->getGynPeriodType(),
            $keys[15] => $this->getGynGravida(),
            $keys[16] => $this->getGynMenopauseSince(),
            $keys[17] => $this->getGynHysterectomy(),
            $keys[18] => $this->getGynContraceptive(),
            $keys[19] => $this->getGynIud(),
            $keys[20] => $this->getGynHormoneTherapy(),
            $keys[21] => $this->getDoctorSign(),
            $keys[22] => $this->getOpDate(),
            $keys[23] => $this->getSendDate(),
            $keys[24] => $this->getStatus(),
            $keys[25] => $this->getEntryDate(),
            $keys[26] => $this->getJournalNr(),
            $keys[27] => $this->getBlocksNr(),
            $keys[28] => $this->getDeepCuts(),
            $keys[29] => $this->getSpecialDye(),
            $keys[30] => $this->getImmuneHistochem(),
            $keys[31] => $this->getHormoneReceptors(),
            $keys[32] => $this->getSpecials(),
            $keys[33] => $this->getHistory(),
            $keys[34] => $this->getModifyId(),
            $keys[35] => $this->getModifyTime(),
            $keys[36] => $this->getCreateId(),
            $keys[37] => $this->getCreateTime(),
            $keys[38] => $this->getProcessId(),
            $keys[39] => $this->getProcessTime(),
        );
        if ($result[$keys[22]] instanceof \DateTimeInterface) {
            $result[$keys[22]] = $result[$keys[22]]->format('c');
        }

        if ($result[$keys[23]] instanceof \DateTimeInterface) {
            $result[$keys[23]] = $result[$keys[23]]->format('c');
        }

        if ($result[$keys[25]] instanceof \DateTimeInterface) {
            $result[$keys[25]] = $result[$keys[25]]->format('c');
        }

        if ($result[$keys[35]] instanceof \DateTimeInterface) {
            $result[$keys[35]] = $result[$keys[35]]->format('c');
        }

        if ($result[$keys[37]] instanceof \DateTimeInterface) {
            $result[$keys[37]] = $result[$keys[37]]->format('c');
        }

        if ($result[$keys[39]] instanceof \DateTimeInterface) {
            $result[$keys[39]] = $result[$keys[39]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTestRequestPatho
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTestRequestPathoTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTestRequestPatho
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBatchNr($value);
                break;
            case 1:
                $this->setEncounterNr($value);
                break;
            case 2:
                $this->setDeptNr($value);
                break;
            case 3:
                $this->setQuickCut($value);
                break;
            case 4:
                $this->setQcPhone($value);
                break;
            case 5:
                $this->setQuickDiagnosis($value);
                break;
            case 6:
                $this->setQdPhone($value);
                break;
            case 7:
                $this->setMaterialType($value);
                break;
            case 8:
                $this->setMaterialDesc($value);
                break;
            case 9:
                $this->setLocalization($value);
                break;
            case 10:
                $this->setClinicalNote($value);
                break;
            case 11:
                $this->setExtraNote($value);
                break;
            case 12:
                $this->setRepeatNote($value);
                break;
            case 13:
                $this->setGynLastPeriod($value);
                break;
            case 14:
                $this->setGynPeriodType($value);
                break;
            case 15:
                $this->setGynGravida($value);
                break;
            case 16:
                $this->setGynMenopauseSince($value);
                break;
            case 17:
                $this->setGynHysterectomy($value);
                break;
            case 18:
                $this->setGynContraceptive($value);
                break;
            case 19:
                $this->setGynIud($value);
                break;
            case 20:
                $this->setGynHormoneTherapy($value);
                break;
            case 21:
                $this->setDoctorSign($value);
                break;
            case 22:
                $this->setOpDate($value);
                break;
            case 23:
                $this->setSendDate($value);
                break;
            case 24:
                $this->setStatus($value);
                break;
            case 25:
                $this->setEntryDate($value);
                break;
            case 26:
                $this->setJournalNr($value);
                break;
            case 27:
                $this->setBlocksNr($value);
                break;
            case 28:
                $this->setDeepCuts($value);
                break;
            case 29:
                $this->setSpecialDye($value);
                break;
            case 30:
                $this->setImmuneHistochem($value);
                break;
            case 31:
                $this->setHormoneReceptors($value);
                break;
            case 32:
                $this->setSpecials($value);
                break;
            case 33:
                $this->setHistory($value);
                break;
            case 34:
                $this->setModifyId($value);
                break;
            case 35:
                $this->setModifyTime($value);
                break;
            case 36:
                $this->setCreateId($value);
                break;
            case 37:
                $this->setCreateTime($value);
                break;
            case 38:
                $this->setProcessId($value);
                break;
            case 39:
                $this->setProcessTime($value);
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
        $keys = CareTestRequestPathoTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setBatchNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDeptNr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setQuickCut($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setQcPhone($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setQuickDiagnosis($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setQdPhone($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setMaterialType($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setMaterialDesc($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setLocalization($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setClinicalNote($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setExtraNote($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setRepeatNote($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setGynLastPeriod($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setGynPeriodType($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setGynGravida($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setGynMenopauseSince($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setGynHysterectomy($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setGynContraceptive($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setGynIud($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setGynHormoneTherapy($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setDoctorSign($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setOpDate($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setSendDate($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setStatus($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setEntryDate($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setJournalNr($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setBlocksNr($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setDeepCuts($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setSpecialDye($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setImmuneHistochem($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setHormoneReceptors($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setSpecials($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setHistory($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setModifyId($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setModifyTime($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setCreateId($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setCreateTime($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setProcessId($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setProcessTime($arr[$keys[39]]);
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
     * @return $this|\CareMd\CareMd\CareTestRequestPatho The current object, for fluid interface
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
        $criteria = new Criteria(CareTestRequestPathoTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_BATCH_NR)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_BATCH_NR, $this->batch_nr);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_DEPT_NR)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_DEPT_NR, $this->dept_nr);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_QUICK_CUT)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_QUICK_CUT, $this->quick_cut);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_QC_PHONE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_QC_PHONE, $this->qc_phone);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_QUICK_DIAGNOSIS)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_QUICK_DIAGNOSIS, $this->quick_diagnosis);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_QD_PHONE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_QD_PHONE, $this->qd_phone);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_MATERIAL_TYPE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_MATERIAL_TYPE, $this->material_type);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_MATERIAL_DESC)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_MATERIAL_DESC, $this->material_desc);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_LOCALIZATION)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_LOCALIZATION, $this->localization);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_CLINICAL_NOTE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_CLINICAL_NOTE, $this->clinical_note);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_EXTRA_NOTE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_EXTRA_NOTE, $this->extra_note);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_REPEAT_NOTE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_REPEAT_NOTE, $this->repeat_note);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_LAST_PERIOD)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_GYN_LAST_PERIOD, $this->gyn_last_period);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_PERIOD_TYPE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_GYN_PERIOD_TYPE, $this->gyn_period_type);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_GRAVIDA)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_GYN_GRAVIDA, $this->gyn_gravida);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_MENOPAUSE_SINCE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_GYN_MENOPAUSE_SINCE, $this->gyn_menopause_since);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_HYSTERECTOMY)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_GYN_HYSTERECTOMY, $this->gyn_hysterectomy);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_CONTRACEPTIVE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_GYN_CONTRACEPTIVE, $this->gyn_contraceptive);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_IUD)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_GYN_IUD, $this->gyn_iud);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_GYN_HORMONE_THERAPY)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_GYN_HORMONE_THERAPY, $this->gyn_hormone_therapy);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_DOCTOR_SIGN)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_DOCTOR_SIGN, $this->doctor_sign);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_OP_DATE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_OP_DATE, $this->op_date);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_SEND_DATE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_SEND_DATE, $this->send_date);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_STATUS)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_ENTRY_DATE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_ENTRY_DATE, $this->entry_date);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_JOURNAL_NR)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_JOURNAL_NR, $this->journal_nr);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_BLOCKS_NR)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_BLOCKS_NR, $this->blocks_nr);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_DEEP_CUTS)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_DEEP_CUTS, $this->deep_cuts);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_SPECIAL_DYE)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_SPECIAL_DYE, $this->special_dye);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_IMMUNE_HISTOCHEM)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_IMMUNE_HISTOCHEM, $this->immune_histochem);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_HORMONE_RECEPTORS)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_HORMONE_RECEPTORS, $this->hormone_receptors);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_SPECIALS)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_SPECIALS, $this->specials);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_HISTORY)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_PROCESS_ID)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_PROCESS_ID, $this->process_id);
        }
        if ($this->isColumnModified(CareTestRequestPathoTableMap::COL_PROCESS_TIME)) {
            $criteria->add(CareTestRequestPathoTableMap::COL_PROCESS_TIME, $this->process_time);
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
        $criteria = ChildCareTestRequestPathoQuery::create();
        $criteria->add(CareTestRequestPathoTableMap::COL_BATCH_NR, $this->batch_nr);

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
        $validPk = null !== $this->getBatchNr();

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
        return $this->getBatchNr();
    }

    /**
     * Generic method to set the primary key (batch_nr column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setBatchNr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getBatchNr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTestRequestPatho (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setDeptNr($this->getDeptNr());
        $copyObj->setQuickCut($this->getQuickCut());
        $copyObj->setQcPhone($this->getQcPhone());
        $copyObj->setQuickDiagnosis($this->getQuickDiagnosis());
        $copyObj->setQdPhone($this->getQdPhone());
        $copyObj->setMaterialType($this->getMaterialType());
        $copyObj->setMaterialDesc($this->getMaterialDesc());
        $copyObj->setLocalization($this->getLocalization());
        $copyObj->setClinicalNote($this->getClinicalNote());
        $copyObj->setExtraNote($this->getExtraNote());
        $copyObj->setRepeatNote($this->getRepeatNote());
        $copyObj->setGynLastPeriod($this->getGynLastPeriod());
        $copyObj->setGynPeriodType($this->getGynPeriodType());
        $copyObj->setGynGravida($this->getGynGravida());
        $copyObj->setGynMenopauseSince($this->getGynMenopauseSince());
        $copyObj->setGynHysterectomy($this->getGynHysterectomy());
        $copyObj->setGynContraceptive($this->getGynContraceptive());
        $copyObj->setGynIud($this->getGynIud());
        $copyObj->setGynHormoneTherapy($this->getGynHormoneTherapy());
        $copyObj->setDoctorSign($this->getDoctorSign());
        $copyObj->setOpDate($this->getOpDate());
        $copyObj->setSendDate($this->getSendDate());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setEntryDate($this->getEntryDate());
        $copyObj->setJournalNr($this->getJournalNr());
        $copyObj->setBlocksNr($this->getBlocksNr());
        $copyObj->setDeepCuts($this->getDeepCuts());
        $copyObj->setSpecialDye($this->getSpecialDye());
        $copyObj->setImmuneHistochem($this->getImmuneHistochem());
        $copyObj->setHormoneReceptors($this->getHormoneReceptors());
        $copyObj->setSpecials($this->getSpecials());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setProcessId($this->getProcessId());
        $copyObj->setProcessTime($this->getProcessTime());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setBatchNr(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareTestRequestPatho Clone of current object.
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
        $this->batch_nr = null;
        $this->encounter_nr = null;
        $this->dept_nr = null;
        $this->quick_cut = null;
        $this->qc_phone = null;
        $this->quick_diagnosis = null;
        $this->qd_phone = null;
        $this->material_type = null;
        $this->material_desc = null;
        $this->localization = null;
        $this->clinical_note = null;
        $this->extra_note = null;
        $this->repeat_note = null;
        $this->gyn_last_period = null;
        $this->gyn_period_type = null;
        $this->gyn_gravida = null;
        $this->gyn_menopause_since = null;
        $this->gyn_hysterectomy = null;
        $this->gyn_contraceptive = null;
        $this->gyn_iud = null;
        $this->gyn_hormone_therapy = null;
        $this->doctor_sign = null;
        $this->op_date = null;
        $this->send_date = null;
        $this->status = null;
        $this->entry_date = null;
        $this->journal_nr = null;
        $this->blocks_nr = null;
        $this->deep_cuts = null;
        $this->special_dye = null;
        $this->immune_histochem = null;
        $this->hormone_receptors = null;
        $this->specials = null;
        $this->history = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->create_id = null;
        $this->create_time = null;
        $this->process_id = null;
        $this->process_time = null;
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
        return (string) $this->exportTo(CareTestRequestPathoTableMap::DEFAULT_STRING_FORMAT);
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
