<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestRadioQuery as ChildCareTestRequestRadioQuery;
use CareMd\CareMd\Map\CareTestRequestRadioTableMap;
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
 * Base class that represents a row from the 'care_test_request_radio' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTestRequestRadio implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTestRequestRadioTableMap';


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
     * Note: this column has a database default value of: 0
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
     * The value for the xray field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $xray;

    /**
     * The value for the ct field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $ct;

    /**
     * The value for the sono field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $sono;

    /**
     * The value for the mammograph field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $mammograph;

    /**
     * The value for the mrt field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $mrt;

    /**
     * The value for the nuclear field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $nuclear;

    /**
     * The value for the if_patmobile field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $if_patmobile;

    /**
     * The value for the if_allergy field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $if_allergy;

    /**
     * The value for the if_hyperten field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $if_hyperten;

    /**
     * The value for the if_pregnant field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $if_pregnant;

    /**
     * The value for the clinical_info field.
     *
     * @var        string
     */
    protected $clinical_info;

    /**
     * The value for the item_id field.
     *
     * @var        string
     */
    protected $item_id;

    /**
     * The value for the test_request field.
     *
     * @var        string
     */
    protected $test_request;

    /**
     * The value for the number_of_tests field.
     *
     * @var        int
     */
    protected $number_of_tests;

    /**
     * The value for the send_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $send_date;

    /**
     * The value for the send_doctor field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $send_doctor;

    /**
     * The value for the is_disabled field.
     *
     * @var        int
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
     * The value for the xray_nr field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $xray_nr;

    /**
     * The value for the r_cm_2 field.
     *
     * @var        string
     */
    protected $r_cm_2;

    /**
     * The value for the mtr field.
     *
     * @var        string
     */
    protected $mtr;

    /**
     * The value for the xray_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $xray_date;

    /**
     * The value for the xray_time field.
     *
     * Note: this column has a database default value of: '00:00:00.000000'
     * @var        DateTime
     */
    protected $xray_time;

    /**
     * The value for the results field.
     *
     * @var        string
     */
    protected $results;

    /**
     * The value for the results_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $results_date;

    /**
     * The value for the results_doctor field.
     *
     * @var        string
     */
    protected $results_doctor;

    /**
     * The value for the status field.
     *
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
     * @var        int
     */
    protected $bill_number;

    /**
     * The value for the bill_status field.
     *
     * @var        string
     */
    protected $bill_status;

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
     * The value for the create_id field.
     *
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
        $this->batch_nr = 0;
        $this->encounter_nr = 0;
        $this->dept_nr = 0;
        $this->xray = false;
        $this->ct = false;
        $this->sono = false;
        $this->mammograph = false;
        $this->mrt = false;
        $this->nuclear = false;
        $this->if_patmobile = false;
        $this->if_allergy = false;
        $this->if_hyperten = false;
        $this->if_pregnant = false;
        $this->send_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->send_doctor = '0';
        $this->xray_nr = '0';
        $this->xray_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->xray_time = PropelDateTime::newInstance('00:00:00.000000', null, 'DateTime');
        $this->results_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->process_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTestRequestRadio object.
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
     * Compares this with another <code>CareTestRequestRadio</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTestRequestRadio</code>, delegates to
     * <code>equals(CareTestRequestRadio)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTestRequestRadio The current object, for fluid interface
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
     * Get the [xray] column value.
     *
     * @return boolean
     */
    public function getXray()
    {
        return $this->xray;
    }

    /**
     * Get the [xray] column value.
     *
     * @return boolean
     */
    public function isXray()
    {
        return $this->getXray();
    }

    /**
     * Get the [ct] column value.
     *
     * @return boolean
     */
    public function getCt()
    {
        return $this->ct;
    }

    /**
     * Get the [ct] column value.
     *
     * @return boolean
     */
    public function isCt()
    {
        return $this->getCt();
    }

    /**
     * Get the [sono] column value.
     *
     * @return boolean
     */
    public function getSono()
    {
        return $this->sono;
    }

    /**
     * Get the [sono] column value.
     *
     * @return boolean
     */
    public function isSono()
    {
        return $this->getSono();
    }

    /**
     * Get the [mammograph] column value.
     *
     * @return boolean
     */
    public function getMammograph()
    {
        return $this->mammograph;
    }

    /**
     * Get the [mammograph] column value.
     *
     * @return boolean
     */
    public function isMammograph()
    {
        return $this->getMammograph();
    }

    /**
     * Get the [mrt] column value.
     *
     * @return boolean
     */
    public function getMrt()
    {
        return $this->mrt;
    }

    /**
     * Get the [mrt] column value.
     *
     * @return boolean
     */
    public function isMrt()
    {
        return $this->getMrt();
    }

    /**
     * Get the [nuclear] column value.
     *
     * @return boolean
     */
    public function getNuclear()
    {
        return $this->nuclear;
    }

    /**
     * Get the [nuclear] column value.
     *
     * @return boolean
     */
    public function isNuclear()
    {
        return $this->getNuclear();
    }

    /**
     * Get the [if_patmobile] column value.
     *
     * @return boolean
     */
    public function getIfPatmobile()
    {
        return $this->if_patmobile;
    }

    /**
     * Get the [if_patmobile] column value.
     *
     * @return boolean
     */
    public function isIfPatmobile()
    {
        return $this->getIfPatmobile();
    }

    /**
     * Get the [if_allergy] column value.
     *
     * @return boolean
     */
    public function getIfAllergy()
    {
        return $this->if_allergy;
    }

    /**
     * Get the [if_allergy] column value.
     *
     * @return boolean
     */
    public function isIfAllergy()
    {
        return $this->getIfAllergy();
    }

    /**
     * Get the [if_hyperten] column value.
     *
     * @return boolean
     */
    public function getIfHyperten()
    {
        return $this->if_hyperten;
    }

    /**
     * Get the [if_hyperten] column value.
     *
     * @return boolean
     */
    public function isIfHyperten()
    {
        return $this->getIfHyperten();
    }

    /**
     * Get the [if_pregnant] column value.
     *
     * @return boolean
     */
    public function getIfPregnant()
    {
        return $this->if_pregnant;
    }

    /**
     * Get the [if_pregnant] column value.
     *
     * @return boolean
     */
    public function isIfPregnant()
    {
        return $this->getIfPregnant();
    }

    /**
     * Get the [clinical_info] column value.
     *
     * @return string
     */
    public function getClinicalInfo()
    {
        return $this->clinical_info;
    }

    /**
     * Get the [item_id] column value.
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Get the [test_request] column value.
     *
     * @return string
     */
    public function getTestRequest()
    {
        return $this->test_request;
    }

    /**
     * Get the [number_of_tests] column value.
     *
     * @return int
     */
    public function getNumberOfTests()
    {
        return $this->number_of_tests;
    }

    /**
     * Get the [optionally formatted] temporal [send_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
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
     * Get the [send_doctor] column value.
     *
     * @return string
     */
    public function getSendDoctor()
    {
        return $this->send_doctor;
    }

    /**
     * Get the [is_disabled] column value.
     *
     * @return int
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
     * Get the [xray_nr] column value.
     *
     * @return string
     */
    public function getXrayNr()
    {
        return $this->xray_nr;
    }

    /**
     * Get the [r_cm_2] column value.
     *
     * @return string
     */
    public function getRCm2()
    {
        return $this->r_cm_2;
    }

    /**
     * Get the [mtr] column value.
     *
     * @return string
     */
    public function getMtr()
    {
        return $this->mtr;
    }

    /**
     * Get the [optionally formatted] temporal [xray_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getXrayDate($format = NULL)
    {
        if ($format === null) {
            return $this->xray_date;
        } else {
            return $this->xray_date instanceof \DateTimeInterface ? $this->xray_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [xray_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getXrayTime($format = NULL)
    {
        if ($format === null) {
            return $this->xray_time;
        } else {
            return $this->xray_time instanceof \DateTimeInterface ? $this->xray_time->format($format) : null;
        }
    }

    /**
     * Get the [results] column value.
     *
     * @return string
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Get the [optionally formatted] temporal [results_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getResultsDate($format = NULL)
    {
        if ($format === null) {
            return $this->results_date;
        } else {
            return $this->results_date instanceof \DateTimeInterface ? $this->results_date->format($format) : null;
        }
    }

    /**
     * Get the [results_doctor] column value.
     *
     * @return string
     */
    public function getResultsDoctor()
    {
        return $this->results_doctor;
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
     * @return int
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
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setBatchNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->batch_nr !== $v) {
            $this->batch_nr = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_BATCH_NR] = true;
        }

        return $this;
    } // setBatchNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dept_nr !== $v) {
            $this->dept_nr = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_DEPT_NR] = true;
        }

        return $this;
    } // setDeptNr()

    /**
     * Sets the value of the [xray] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setXray($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->xray !== $v) {
            $this->xray = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_XRAY] = true;
        }

        return $this;
    } // setXray()

    /**
     * Sets the value of the [ct] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setCt($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ct !== $v) {
            $this->ct = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_CT] = true;
        }

        return $this;
    } // setCt()

    /**
     * Sets the value of the [sono] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setSono($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->sono !== $v) {
            $this->sono = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_SONO] = true;
        }

        return $this;
    } // setSono()

    /**
     * Sets the value of the [mammograph] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setMammograph($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->mammograph !== $v) {
            $this->mammograph = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_MAMMOGRAPH] = true;
        }

        return $this;
    } // setMammograph()

    /**
     * Sets the value of the [mrt] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setMrt($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->mrt !== $v) {
            $this->mrt = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_MRT] = true;
        }

        return $this;
    } // setMrt()

    /**
     * Sets the value of the [nuclear] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setNuclear($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->nuclear !== $v) {
            $this->nuclear = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_NUCLEAR] = true;
        }

        return $this;
    } // setNuclear()

    /**
     * Sets the value of the [if_patmobile] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setIfPatmobile($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->if_patmobile !== $v) {
            $this->if_patmobile = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_IF_PATMOBILE] = true;
        }

        return $this;
    } // setIfPatmobile()

    /**
     * Sets the value of the [if_allergy] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setIfAllergy($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->if_allergy !== $v) {
            $this->if_allergy = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_IF_ALLERGY] = true;
        }

        return $this;
    } // setIfAllergy()

    /**
     * Sets the value of the [if_hyperten] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setIfHyperten($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->if_hyperten !== $v) {
            $this->if_hyperten = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_IF_HYPERTEN] = true;
        }

        return $this;
    } // setIfHyperten()

    /**
     * Sets the value of the [if_pregnant] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setIfPregnant($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->if_pregnant !== $v) {
            $this->if_pregnant = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_IF_PREGNANT] = true;
        }

        return $this;
    } // setIfPregnant()

    /**
     * Set the value of [clinical_info] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setClinicalInfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->clinical_info !== $v) {
            $this->clinical_info = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_CLINICAL_INFO] = true;
        }

        return $this;
    } // setClinicalInfo()

    /**
     * Set the value of [item_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setItemId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->item_id !== $v) {
            $this->item_id = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_ITEM_ID] = true;
        }

        return $this;
    } // setItemId()

    /**
     * Set the value of [test_request] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setTestRequest($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->test_request !== $v) {
            $this->test_request = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_TEST_REQUEST] = true;
        }

        return $this;
    } // setTestRequest()

    /**
     * Set the value of [number_of_tests] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setNumberOfTests($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->number_of_tests !== $v) {
            $this->number_of_tests = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_NUMBER_OF_TESTS] = true;
        }

        return $this;
    } // setNumberOfTests()

    /**
     * Sets the value of [send_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setSendDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->send_date !== null || $dt !== null) {
            if ( ($dt != $this->send_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->send_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestRadioTableMap::COL_SEND_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setSendDate()

    /**
     * Set the value of [send_doctor] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setSendDoctor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->send_doctor !== $v) {
            $this->send_doctor = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_SEND_DOCTOR] = true;
        }

        return $this;
    } // setSendDoctor()

    /**
     * Set the value of [is_disabled] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setIsDisabled($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_disabled !== $v) {
            $this->is_disabled = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_IS_DISABLED] = true;
        }

        return $this;
    } // setIsDisabled()

    /**
     * Set the value of [disable_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setDisableId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->disable_id !== $v) {
            $this->disable_id = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_DISABLE_ID] = true;
        }

        return $this;
    } // setDisableId()

    /**
     * Sets the value of [disable_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setDisableDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->disable_date !== null || $dt !== null) {
            if ($this->disable_date === null || $dt === null || $dt->format("Y-m-d") !== $this->disable_date->format("Y-m-d")) {
                $this->disable_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestRadioTableMap::COL_DISABLE_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDisableDate()

    /**
     * Set the value of [xray_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setXrayNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->xray_nr !== $v) {
            $this->xray_nr = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_XRAY_NR] = true;
        }

        return $this;
    } // setXrayNr()

    /**
     * Set the value of [r_cm_2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setRCm2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_cm_2 !== $v) {
            $this->r_cm_2 = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_R_CM_2] = true;
        }

        return $this;
    } // setRCm2()

    /**
     * Set the value of [mtr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setMtr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mtr !== $v) {
            $this->mtr = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_MTR] = true;
        }

        return $this;
    } // setMtr()

    /**
     * Sets the value of [xray_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setXrayDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->xray_date !== null || $dt !== null) {
            if ( ($dt != $this->xray_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->xray_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestRadioTableMap::COL_XRAY_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setXrayDate()

    /**
     * Sets the value of [xray_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setXrayTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->xray_time !== null || $dt !== null) {
            if ( ($dt != $this->xray_time) // normalized values don't match
                || ($dt->format('H:i:s.u') === '00:00:00.000000') // or the entered value matches the default
                 ) {
                $this->xray_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestRadioTableMap::COL_XRAY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setXrayTime()

    /**
     * Set the value of [results] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setResults($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->results !== $v) {
            $this->results = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_RESULTS] = true;
        }

        return $this;
    } // setResults()

    /**
     * Sets the value of [results_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setResultsDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->results_date !== null || $dt !== null) {
            if ( ($dt != $this->results_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->results_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestRadioTableMap::COL_RESULTS_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setResultsDate()

    /**
     * Set the value of [results_doctor] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setResultsDoctor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->results_doctor !== $v) {
            $this->results_doctor = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_RESULTS_DOCTOR] = true;
        }

        return $this;
    } // setResultsDoctor()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [bill_number] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setBillNumber($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->bill_number !== $v) {
            $this->bill_number = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_BILL_NUMBER] = true;
        }

        return $this;
    } // setBillNumber()

    /**
     * Set the value of [bill_status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setBillStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bill_status !== $v) {
            $this->bill_status = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_BILL_STATUS] = true;
        }

        return $this;
    } // setBillStatus()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestRadioTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestRadioTableMap::COL_CREATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateTime()

    /**
     * Set the value of [process_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setProcessId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->process_id !== $v) {
            $this->process_id = $v;
            $this->modifiedColumns[CareTestRequestRadioTableMap::COL_PROCESS_ID] = true;
        }

        return $this;
    } // setProcessId()

    /**
     * Sets the value of [process_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object (for fluent API support)
     */
    public function setProcessTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->process_time !== null || $dt !== null) {
            if ( ($dt != $this->process_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->process_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestRadioTableMap::COL_PROCESS_TIME] = true;
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
            if ($this->batch_nr !== 0) {
                return false;
            }

            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->dept_nr !== 0) {
                return false;
            }

            if ($this->xray !== false) {
                return false;
            }

            if ($this->ct !== false) {
                return false;
            }

            if ($this->sono !== false) {
                return false;
            }

            if ($this->mammograph !== false) {
                return false;
            }

            if ($this->mrt !== false) {
                return false;
            }

            if ($this->nuclear !== false) {
                return false;
            }

            if ($this->if_patmobile !== false) {
                return false;
            }

            if ($this->if_allergy !== false) {
                return false;
            }

            if ($this->if_hyperten !== false) {
                return false;
            }

            if ($this->if_pregnant !== false) {
                return false;
            }

            if ($this->send_date && $this->send_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->send_doctor !== '0') {
                return false;
            }

            if ($this->xray_nr !== '0') {
                return false;
            }

            if ($this->xray_date && $this->xray_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->xray_time && $this->xray_time->format('H:i:s.u') !== '00:00:00.000000') {
                return false;
            }

            if ($this->results_date && $this->results_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->create_time && $this->create_time->format('Y-m-d H:i:s.u') !== NULL) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTestRequestRadioTableMap::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->batch_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTestRequestRadioTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTestRequestRadioTableMap::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTestRequestRadioTableMap::translateFieldName('Xray', TableMap::TYPE_PHPNAME, $indexType)];
            $this->xray = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTestRequestRadioTableMap::translateFieldName('Ct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ct = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTestRequestRadioTableMap::translateFieldName('Sono', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sono = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTestRequestRadioTableMap::translateFieldName('Mammograph', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mammograph = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTestRequestRadioTableMap::translateFieldName('Mrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mrt = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTestRequestRadioTableMap::translateFieldName('Nuclear', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nuclear = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTestRequestRadioTableMap::translateFieldName('IfPatmobile', TableMap::TYPE_PHPNAME, $indexType)];
            $this->if_patmobile = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTestRequestRadioTableMap::translateFieldName('IfAllergy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->if_allergy = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTestRequestRadioTableMap::translateFieldName('IfHyperten', TableMap::TYPE_PHPNAME, $indexType)];
            $this->if_hyperten = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTestRequestRadioTableMap::translateFieldName('IfPregnant', TableMap::TYPE_PHPNAME, $indexType)];
            $this->if_pregnant = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTestRequestRadioTableMap::translateFieldName('ClinicalInfo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->clinical_info = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTestRequestRadioTableMap::translateFieldName('ItemId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->item_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTestRequestRadioTableMap::translateFieldName('TestRequest', TableMap::TYPE_PHPNAME, $indexType)];
            $this->test_request = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTestRequestRadioTableMap::translateFieldName('NumberOfTests', TableMap::TYPE_PHPNAME, $indexType)];
            $this->number_of_tests = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTestRequestRadioTableMap::translateFieldName('SendDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->send_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTestRequestRadioTableMap::translateFieldName('SendDoctor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->send_doctor = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTestRequestRadioTableMap::translateFieldName('IsDisabled', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_disabled = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTestRequestRadioTableMap::translateFieldName('DisableId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->disable_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTestRequestRadioTableMap::translateFieldName('DisableDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->disable_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTestRequestRadioTableMap::translateFieldName('XrayNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->xray_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareTestRequestRadioTableMap::translateFieldName('RCm2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->r_cm_2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareTestRequestRadioTableMap::translateFieldName('Mtr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mtr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareTestRequestRadioTableMap::translateFieldName('XrayDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->xray_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareTestRequestRadioTableMap::translateFieldName('XrayTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->xray_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareTestRequestRadioTableMap::translateFieldName('Results', TableMap::TYPE_PHPNAME, $indexType)];
            $this->results = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareTestRequestRadioTableMap::translateFieldName('ResultsDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->results_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareTestRequestRadioTableMap::translateFieldName('ResultsDoctor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->results_doctor = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CareTestRequestRadioTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CareTestRequestRadioTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CareTestRequestRadioTableMap::translateFieldName('BillNumber', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_number = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CareTestRequestRadioTableMap::translateFieldName('BillStatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CareTestRequestRadioTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CareTestRequestRadioTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CareTestRequestRadioTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CareTestRequestRadioTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CareTestRequestRadioTableMap::translateFieldName('ProcessId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->process_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CareTestRequestRadioTableMap::translateFieldName('ProcessTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->process_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 40; // 40 = CareTestRequestRadioTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTestRequestRadio'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestRadioTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTestRequestRadioQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTestRequestRadio::setDeleted()
     * @see CareTestRequestRadio::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestRadioTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTestRequestRadioQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestRadioTableMap::DATABASE_NAME);
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
                CareTestRequestRadioTableMap::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_BATCH_NR)) {
            $modifiedColumns[':p' . $index++]  = 'batch_nr';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'dept_nr';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_XRAY)) {
            $modifiedColumns[':p' . $index++]  = 'xray';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_CT)) {
            $modifiedColumns[':p' . $index++]  = 'ct';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_SONO)) {
            $modifiedColumns[':p' . $index++]  = 'sono';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_MAMMOGRAPH)) {
            $modifiedColumns[':p' . $index++]  = 'mammograph';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_MRT)) {
            $modifiedColumns[':p' . $index++]  = 'mrt';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_NUCLEAR)) {
            $modifiedColumns[':p' . $index++]  = 'nuclear';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_IF_PATMOBILE)) {
            $modifiedColumns[':p' . $index++]  = 'if_patmobile';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_IF_ALLERGY)) {
            $modifiedColumns[':p' . $index++]  = 'if_allergy';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_IF_HYPERTEN)) {
            $modifiedColumns[':p' . $index++]  = 'if_hyperten';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_IF_PREGNANT)) {
            $modifiedColumns[':p' . $index++]  = 'if_pregnant';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_CLINICAL_INFO)) {
            $modifiedColumns[':p' . $index++]  = 'clinical_info';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'item_id';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_TEST_REQUEST)) {
            $modifiedColumns[':p' . $index++]  = 'test_request';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_NUMBER_OF_TESTS)) {
            $modifiedColumns[':p' . $index++]  = 'number_of_tests';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_SEND_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'send_date';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_SEND_DOCTOR)) {
            $modifiedColumns[':p' . $index++]  = 'send_doctor';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_IS_DISABLED)) {
            $modifiedColumns[':p' . $index++]  = 'is_disabled';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_DISABLE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'disable_id';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_DISABLE_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'disable_date';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_XRAY_NR)) {
            $modifiedColumns[':p' . $index++]  = 'xray_nr';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_R_CM_2)) {
            $modifiedColumns[':p' . $index++]  = 'r_cm_2';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_MTR)) {
            $modifiedColumns[':p' . $index++]  = 'mtr';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_XRAY_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'xray_date';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_XRAY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'xray_time';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_RESULTS)) {
            $modifiedColumns[':p' . $index++]  = 'results';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_RESULTS_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'results_date';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_RESULTS_DOCTOR)) {
            $modifiedColumns[':p' . $index++]  = 'results_doctor';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_BILL_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'bill_number';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_BILL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'bill_status';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_PROCESS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'process_id';
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_PROCESS_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'process_time';
        }

        $sql = sprintf(
            'INSERT INTO care_test_request_radio (%s) VALUES (%s)',
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
                    case 'xray':
                        $stmt->bindValue($identifier, (int) $this->xray, PDO::PARAM_INT);
                        break;
                    case 'ct':
                        $stmt->bindValue($identifier, (int) $this->ct, PDO::PARAM_INT);
                        break;
                    case 'sono':
                        $stmt->bindValue($identifier, (int) $this->sono, PDO::PARAM_INT);
                        break;
                    case 'mammograph':
                        $stmt->bindValue($identifier, (int) $this->mammograph, PDO::PARAM_INT);
                        break;
                    case 'mrt':
                        $stmt->bindValue($identifier, (int) $this->mrt, PDO::PARAM_INT);
                        break;
                    case 'nuclear':
                        $stmt->bindValue($identifier, (int) $this->nuclear, PDO::PARAM_INT);
                        break;
                    case 'if_patmobile':
                        $stmt->bindValue($identifier, (int) $this->if_patmobile, PDO::PARAM_INT);
                        break;
                    case 'if_allergy':
                        $stmt->bindValue($identifier, (int) $this->if_allergy, PDO::PARAM_INT);
                        break;
                    case 'if_hyperten':
                        $stmt->bindValue($identifier, (int) $this->if_hyperten, PDO::PARAM_INT);
                        break;
                    case 'if_pregnant':
                        $stmt->bindValue($identifier, (int) $this->if_pregnant, PDO::PARAM_INT);
                        break;
                    case 'clinical_info':
                        $stmt->bindValue($identifier, $this->clinical_info, PDO::PARAM_STR);
                        break;
                    case 'item_id':
                        $stmt->bindValue($identifier, $this->item_id, PDO::PARAM_STR);
                        break;
                    case 'test_request':
                        $stmt->bindValue($identifier, $this->test_request, PDO::PARAM_STR);
                        break;
                    case 'number_of_tests':
                        $stmt->bindValue($identifier, $this->number_of_tests, PDO::PARAM_INT);
                        break;
                    case 'send_date':
                        $stmt->bindValue($identifier, $this->send_date ? $this->send_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'send_doctor':
                        $stmt->bindValue($identifier, $this->send_doctor, PDO::PARAM_STR);
                        break;
                    case 'is_disabled':
                        $stmt->bindValue($identifier, $this->is_disabled, PDO::PARAM_INT);
                        break;
                    case 'disable_id':
                        $stmt->bindValue($identifier, $this->disable_id, PDO::PARAM_STR);
                        break;
                    case 'disable_date':
                        $stmt->bindValue($identifier, $this->disable_date ? $this->disable_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'xray_nr':
                        $stmt->bindValue($identifier, $this->xray_nr, PDO::PARAM_STR);
                        break;
                    case 'r_cm_2':
                        $stmt->bindValue($identifier, $this->r_cm_2, PDO::PARAM_STR);
                        break;
                    case 'mtr':
                        $stmt->bindValue($identifier, $this->mtr, PDO::PARAM_STR);
                        break;
                    case 'xray_date':
                        $stmt->bindValue($identifier, $this->xray_date ? $this->xray_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'xray_time':
                        $stmt->bindValue($identifier, $this->xray_time ? $this->xray_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'results':
                        $stmt->bindValue($identifier, $this->results, PDO::PARAM_STR);
                        break;
                    case 'results_date':
                        $stmt->bindValue($identifier, $this->results_date ? $this->results_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'results_doctor':
                        $stmt->bindValue($identifier, $this->results_doctor, PDO::PARAM_STR);
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
        $pos = CareTestRequestRadioTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getXray();
                break;
            case 4:
                return $this->getCt();
                break;
            case 5:
                return $this->getSono();
                break;
            case 6:
                return $this->getMammograph();
                break;
            case 7:
                return $this->getMrt();
                break;
            case 8:
                return $this->getNuclear();
                break;
            case 9:
                return $this->getIfPatmobile();
                break;
            case 10:
                return $this->getIfAllergy();
                break;
            case 11:
                return $this->getIfHyperten();
                break;
            case 12:
                return $this->getIfPregnant();
                break;
            case 13:
                return $this->getClinicalInfo();
                break;
            case 14:
                return $this->getItemId();
                break;
            case 15:
                return $this->getTestRequest();
                break;
            case 16:
                return $this->getNumberOfTests();
                break;
            case 17:
                return $this->getSendDate();
                break;
            case 18:
                return $this->getSendDoctor();
                break;
            case 19:
                return $this->getIsDisabled();
                break;
            case 20:
                return $this->getDisableId();
                break;
            case 21:
                return $this->getDisableDate();
                break;
            case 22:
                return $this->getXrayNr();
                break;
            case 23:
                return $this->getRCm2();
                break;
            case 24:
                return $this->getMtr();
                break;
            case 25:
                return $this->getXrayDate();
                break;
            case 26:
                return $this->getXrayTime();
                break;
            case 27:
                return $this->getResults();
                break;
            case 28:
                return $this->getResultsDate();
                break;
            case 29:
                return $this->getResultsDoctor();
                break;
            case 30:
                return $this->getStatus();
                break;
            case 31:
                return $this->getHistory();
                break;
            case 32:
                return $this->getBillNumber();
                break;
            case 33:
                return $this->getBillStatus();
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

        if (isset($alreadyDumpedObjects['CareTestRequestRadio'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTestRequestRadio'][$this->hashCode()] = true;
        $keys = CareTestRequestRadioTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBatchNr(),
            $keys[1] => $this->getEncounterNr(),
            $keys[2] => $this->getDeptNr(),
            $keys[3] => $this->getXray(),
            $keys[4] => $this->getCt(),
            $keys[5] => $this->getSono(),
            $keys[6] => $this->getMammograph(),
            $keys[7] => $this->getMrt(),
            $keys[8] => $this->getNuclear(),
            $keys[9] => $this->getIfPatmobile(),
            $keys[10] => $this->getIfAllergy(),
            $keys[11] => $this->getIfHyperten(),
            $keys[12] => $this->getIfPregnant(),
            $keys[13] => $this->getClinicalInfo(),
            $keys[14] => $this->getItemId(),
            $keys[15] => $this->getTestRequest(),
            $keys[16] => $this->getNumberOfTests(),
            $keys[17] => $this->getSendDate(),
            $keys[18] => $this->getSendDoctor(),
            $keys[19] => $this->getIsDisabled(),
            $keys[20] => $this->getDisableId(),
            $keys[21] => $this->getDisableDate(),
            $keys[22] => $this->getXrayNr(),
            $keys[23] => $this->getRCm2(),
            $keys[24] => $this->getMtr(),
            $keys[25] => $this->getXrayDate(),
            $keys[26] => $this->getXrayTime(),
            $keys[27] => $this->getResults(),
            $keys[28] => $this->getResultsDate(),
            $keys[29] => $this->getResultsDoctor(),
            $keys[30] => $this->getStatus(),
            $keys[31] => $this->getHistory(),
            $keys[32] => $this->getBillNumber(),
            $keys[33] => $this->getBillStatus(),
            $keys[34] => $this->getModifyId(),
            $keys[35] => $this->getModifyTime(),
            $keys[36] => $this->getCreateId(),
            $keys[37] => $this->getCreateTime(),
            $keys[38] => $this->getProcessId(),
            $keys[39] => $this->getProcessTime(),
        );
        if ($result[$keys[17]] instanceof \DateTimeInterface) {
            $result[$keys[17]] = $result[$keys[17]]->format('c');
        }

        if ($result[$keys[21]] instanceof \DateTimeInterface) {
            $result[$keys[21]] = $result[$keys[21]]->format('c');
        }

        if ($result[$keys[25]] instanceof \DateTimeInterface) {
            $result[$keys[25]] = $result[$keys[25]]->format('c');
        }

        if ($result[$keys[26]] instanceof \DateTimeInterface) {
            $result[$keys[26]] = $result[$keys[26]]->format('c');
        }

        if ($result[$keys[28]] instanceof \DateTimeInterface) {
            $result[$keys[28]] = $result[$keys[28]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTestRequestRadio
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTestRequestRadioTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTestRequestRadio
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
                $this->setXray($value);
                break;
            case 4:
                $this->setCt($value);
                break;
            case 5:
                $this->setSono($value);
                break;
            case 6:
                $this->setMammograph($value);
                break;
            case 7:
                $this->setMrt($value);
                break;
            case 8:
                $this->setNuclear($value);
                break;
            case 9:
                $this->setIfPatmobile($value);
                break;
            case 10:
                $this->setIfAllergy($value);
                break;
            case 11:
                $this->setIfHyperten($value);
                break;
            case 12:
                $this->setIfPregnant($value);
                break;
            case 13:
                $this->setClinicalInfo($value);
                break;
            case 14:
                $this->setItemId($value);
                break;
            case 15:
                $this->setTestRequest($value);
                break;
            case 16:
                $this->setNumberOfTests($value);
                break;
            case 17:
                $this->setSendDate($value);
                break;
            case 18:
                $this->setSendDoctor($value);
                break;
            case 19:
                $this->setIsDisabled($value);
                break;
            case 20:
                $this->setDisableId($value);
                break;
            case 21:
                $this->setDisableDate($value);
                break;
            case 22:
                $this->setXrayNr($value);
                break;
            case 23:
                $this->setRCm2($value);
                break;
            case 24:
                $this->setMtr($value);
                break;
            case 25:
                $this->setXrayDate($value);
                break;
            case 26:
                $this->setXrayTime($value);
                break;
            case 27:
                $this->setResults($value);
                break;
            case 28:
                $this->setResultsDate($value);
                break;
            case 29:
                $this->setResultsDoctor($value);
                break;
            case 30:
                $this->setStatus($value);
                break;
            case 31:
                $this->setHistory($value);
                break;
            case 32:
                $this->setBillNumber($value);
                break;
            case 33:
                $this->setBillStatus($value);
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
        $keys = CareTestRequestRadioTableMap::getFieldNames($keyType);

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
            $this->setXray($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setCt($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setSono($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setMammograph($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setMrt($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setNuclear($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIfPatmobile($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIfAllergy($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setIfHyperten($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setIfPregnant($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setClinicalInfo($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setItemId($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setTestRequest($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setNumberOfTests($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setSendDate($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setSendDoctor($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setIsDisabled($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setDisableId($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setDisableDate($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setXrayNr($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setRCm2($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setMtr($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setXrayDate($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setXrayTime($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setResults($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setResultsDate($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setResultsDoctor($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setStatus($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setHistory($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setBillNumber($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setBillStatus($arr[$keys[33]]);
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
     * @return $this|\CareMd\CareMd\CareTestRequestRadio The current object, for fluid interface
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
        $criteria = new Criteria(CareTestRequestRadioTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_BATCH_NR)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_BATCH_NR, $this->batch_nr);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_DEPT_NR)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_DEPT_NR, $this->dept_nr);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_XRAY)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_XRAY, $this->xray);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_CT)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_CT, $this->ct);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_SONO)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_SONO, $this->sono);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_MAMMOGRAPH)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_MAMMOGRAPH, $this->mammograph);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_MRT)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_MRT, $this->mrt);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_NUCLEAR)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_NUCLEAR, $this->nuclear);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_IF_PATMOBILE)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_IF_PATMOBILE, $this->if_patmobile);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_IF_ALLERGY)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_IF_ALLERGY, $this->if_allergy);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_IF_HYPERTEN)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_IF_HYPERTEN, $this->if_hyperten);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_IF_PREGNANT)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_IF_PREGNANT, $this->if_pregnant);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_CLINICAL_INFO)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_CLINICAL_INFO, $this->clinical_info);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_ITEM_ID)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_ITEM_ID, $this->item_id);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_TEST_REQUEST)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_TEST_REQUEST, $this->test_request);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_NUMBER_OF_TESTS)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_NUMBER_OF_TESTS, $this->number_of_tests);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_SEND_DATE)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_SEND_DATE, $this->send_date);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_SEND_DOCTOR)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_SEND_DOCTOR, $this->send_doctor);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_IS_DISABLED)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_IS_DISABLED, $this->is_disabled);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_DISABLE_ID)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_DISABLE_ID, $this->disable_id);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_DISABLE_DATE)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_DISABLE_DATE, $this->disable_date);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_XRAY_NR)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_XRAY_NR, $this->xray_nr);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_R_CM_2)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_R_CM_2, $this->r_cm_2);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_MTR)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_MTR, $this->mtr);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_XRAY_DATE)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_XRAY_DATE, $this->xray_date);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_XRAY_TIME)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_XRAY_TIME, $this->xray_time);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_RESULTS)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_RESULTS, $this->results);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_RESULTS_DATE)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_RESULTS_DATE, $this->results_date);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_RESULTS_DOCTOR)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_RESULTS_DOCTOR, $this->results_doctor);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_STATUS)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_HISTORY)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_BILL_NUMBER)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_BILL_NUMBER, $this->bill_number);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_BILL_STATUS)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_BILL_STATUS, $this->bill_status);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_PROCESS_ID)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_PROCESS_ID, $this->process_id);
        }
        if ($this->isColumnModified(CareTestRequestRadioTableMap::COL_PROCESS_TIME)) {
            $criteria->add(CareTestRequestRadioTableMap::COL_PROCESS_TIME, $this->process_time);
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
        $criteria = ChildCareTestRequestRadioQuery::create();
        $criteria->add(CareTestRequestRadioTableMap::COL_BATCH_NR, $this->batch_nr);

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
     * @param      object $copyObj An object of \CareMd\CareMd\CareTestRequestRadio (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBatchNr($this->getBatchNr());
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setDeptNr($this->getDeptNr());
        $copyObj->setXray($this->getXray());
        $copyObj->setCt($this->getCt());
        $copyObj->setSono($this->getSono());
        $copyObj->setMammograph($this->getMammograph());
        $copyObj->setMrt($this->getMrt());
        $copyObj->setNuclear($this->getNuclear());
        $copyObj->setIfPatmobile($this->getIfPatmobile());
        $copyObj->setIfAllergy($this->getIfAllergy());
        $copyObj->setIfHyperten($this->getIfHyperten());
        $copyObj->setIfPregnant($this->getIfPregnant());
        $copyObj->setClinicalInfo($this->getClinicalInfo());
        $copyObj->setItemId($this->getItemId());
        $copyObj->setTestRequest($this->getTestRequest());
        $copyObj->setNumberOfTests($this->getNumberOfTests());
        $copyObj->setSendDate($this->getSendDate());
        $copyObj->setSendDoctor($this->getSendDoctor());
        $copyObj->setIsDisabled($this->getIsDisabled());
        $copyObj->setDisableId($this->getDisableId());
        $copyObj->setDisableDate($this->getDisableDate());
        $copyObj->setXrayNr($this->getXrayNr());
        $copyObj->setRCm2($this->getRCm2());
        $copyObj->setMtr($this->getMtr());
        $copyObj->setXrayDate($this->getXrayDate());
        $copyObj->setXrayTime($this->getXrayTime());
        $copyObj->setResults($this->getResults());
        $copyObj->setResultsDate($this->getResultsDate());
        $copyObj->setResultsDoctor($this->getResultsDoctor());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setBillNumber($this->getBillNumber());
        $copyObj->setBillStatus($this->getBillStatus());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setProcessId($this->getProcessId());
        $copyObj->setProcessTime($this->getProcessTime());
        if ($makeNew) {
            $copyObj->setNew(true);
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
     * @return \CareMd\CareMd\CareTestRequestRadio Clone of current object.
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
        $this->xray = null;
        $this->ct = null;
        $this->sono = null;
        $this->mammograph = null;
        $this->mrt = null;
        $this->nuclear = null;
        $this->if_patmobile = null;
        $this->if_allergy = null;
        $this->if_hyperten = null;
        $this->if_pregnant = null;
        $this->clinical_info = null;
        $this->item_id = null;
        $this->test_request = null;
        $this->number_of_tests = null;
        $this->send_date = null;
        $this->send_doctor = null;
        $this->is_disabled = null;
        $this->disable_id = null;
        $this->disable_date = null;
        $this->xray_nr = null;
        $this->r_cm_2 = null;
        $this->mtr = null;
        $this->xray_date = null;
        $this->xray_time = null;
        $this->results = null;
        $this->results_date = null;
        $this->results_doctor = null;
        $this->status = null;
        $this->history = null;
        $this->bill_number = null;
        $this->bill_status = null;
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
        return (string) $this->exportTo(CareTestRequestRadioTableMap::DEFAULT_STRING_FORMAT);
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
