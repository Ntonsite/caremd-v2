<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterQuery as ChildCareEncounterQuery;
use CareMd\CareMd\Map\CareEncounterTableMap;
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
 * Base class that represents a row from the 'care_encounter' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareEncounter implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareEncounterTableMap';


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
     * The value for the encounter_nr field.
     *
     * @var        string
     */
    protected $encounter_nr;

    /**
     * The value for the encounter_nr_prev field.
     *
     * @var        string
     */
    protected $encounter_nr_prev;

    /**
     * The value for the pid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pid;

    /**
     * The value for the encounter_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $encounter_date;

    /**
     * The value for the encounter_class_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_class_nr;

    /**
     * The value for the encounter_type field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $encounter_type;

    /**
     * The value for the encounter_status field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $encounter_status;

    /**
     * The value for the referrer_diagnosis field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $referrer_diagnosis;

    /**
     * The value for the referrer_recom_therapy field.
     *
     * @var        string
     */
    protected $referrer_recom_therapy;

    /**
     * The value for the referrer_dr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $referrer_dr;

    /**
     * The value for the referrer_dept field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $referrer_dept;

    /**
     * The value for the referrer_institution field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $referrer_institution;

    /**
     * The value for the referrer_notes field.
     *
     * @var        string
     */
    protected $referrer_notes;

    /**
     * The value for the financial_class_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $financial_class_nr;

    /**
     * The value for the insurance_nr field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $insurance_nr;

    /**
     * The value for the insurance_firm_id field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $insurance_firm_id;

    /**
     * The value for the insurance_class_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_class_nr;

    /**
     * The value for the insurance_2_nr field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $insurance_2_nr;

    /**
     * The value for the insurance_2_firm_id field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $insurance_2_firm_id;

    /**
     * The value for the guarantor_pid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $guarantor_pid;

    /**
     * The value for the contact_pid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $contact_pid;

    /**
     * The value for the contact_relation field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $contact_relation;

    /**
     * The value for the current_ward_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $current_ward_nr;

    /**
     * The value for the current_room_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $current_room_nr;

    /**
     * The value for the in_ward field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $in_ward;

    /**
     * The value for the current_dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $current_dept_nr;

    /**
     * The value for the pharmacy field.
     *
     * @var        string
     */
    protected $pharmacy;

    /**
     * The value for the in_dept field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $in_dept;

    /**
     * The value for the current_firm_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $current_firm_nr;

    /**
     * The value for the current_att_dr_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $current_att_dr_nr;

    /**
     * The value for the consulting_dr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $consulting_dr;

    /**
     * The value for the extra_service field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $extra_service;

    /**
     * The value for the form_nr field.
     *
     * @var        string
     */
    protected $form_nr;

    /**
     * The value for the is_discharged field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_discharged;

    /**
     * The value for the discharge_date field.
     *
     * @var        DateTime
     */
    protected $discharge_date;

    /**
     * The value for the discharge_time field.
     *
     * @var        DateTime
     */
    protected $discharge_time;

    /**
     * The value for the followup_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $followup_date;

    /**
     * The value for the followup_responsibility field.
     *
     * @var        string
     */
    protected $followup_responsibility;

    /**
     * The value for the post_encounter_notes field.
     *
     * @var        string
     */
    protected $post_encounter_notes;

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
     * The value for the room field.
     *
     * Note: this column has a database default value of: 'GENERAL'
     * @var        string
     */
    protected $room;

    /**
     * The value for the room_history field.
     *
     * @var        string
     */
    protected $room_history;

    /**
     * The value for the current_dept_history field.
     *
     * @var        string
     */
    protected $current_dept_history;

    /**
     * The value for the medical_service field.
     *
     * @var        string
     */
    protected $medical_service;

    /**
     * The value for the referrer_number field.
     *
     * @var        string
     */
    protected $referrer_number;

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
        $this->encounter_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->encounter_class_nr = 0;
        $this->encounter_type = '';
        $this->encounter_status = '';
        $this->referrer_diagnosis = '';
        $this->referrer_dr = '';
        $this->referrer_dept = '';
        $this->referrer_institution = '';
        $this->financial_class_nr = 0;
        $this->insurance_nr = '0';
        $this->insurance_firm_id = '0';
        $this->insurance_class_nr = 0;
        $this->insurance_2_nr = '0';
        $this->insurance_2_firm_id = '0';
        $this->guarantor_pid = 0;
        $this->contact_pid = 0;
        $this->contact_relation = '';
        $this->current_ward_nr = 0;
        $this->current_room_nr = 0;
        $this->in_ward = false;
        $this->current_dept_nr = 0;
        $this->in_dept = false;
        $this->current_firm_nr = 0;
        $this->current_att_dr_nr = 0;
        $this->consulting_dr = '';
        $this->extra_service = '';
        $this->is_discharged = false;
        $this->followup_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->room = 'GENERAL';
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareEncounter object.
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
     * Compares this with another <code>CareEncounter</code> instance.  If
     * <code>obj</code> is an instance of <code>CareEncounter</code>, delegates to
     * <code>equals(CareEncounter)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareEncounter The current object, for fluid interface
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
     * Get the [encounter_nr] column value.
     *
     * @return string
     */
    public function getEncounterNr()
    {
        return $this->encounter_nr;
    }

    /**
     * Get the [encounter_nr_prev] column value.
     *
     * @return string
     */
    public function getEncounterNrPrev()
    {
        return $this->encounter_nr_prev;
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
     * Get the [optionally formatted] temporal [encounter_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEncounterDate($format = NULL)
    {
        if ($format === null) {
            return $this->encounter_date;
        } else {
            return $this->encounter_date instanceof \DateTimeInterface ? $this->encounter_date->format($format) : null;
        }
    }

    /**
     * Get the [encounter_class_nr] column value.
     *
     * @return int
     */
    public function getEncounterClassNr()
    {
        return $this->encounter_class_nr;
    }

    /**
     * Get the [encounter_type] column value.
     *
     * @return string
     */
    public function getEncounterType()
    {
        return $this->encounter_type;
    }

    /**
     * Get the [encounter_status] column value.
     *
     * @return string
     */
    public function getEncounterStatus()
    {
        return $this->encounter_status;
    }

    /**
     * Get the [referrer_diagnosis] column value.
     *
     * @return string
     */
    public function getReferrerDiagnosis()
    {
        return $this->referrer_diagnosis;
    }

    /**
     * Get the [referrer_recom_therapy] column value.
     *
     * @return string
     */
    public function getReferrerRecomTherapy()
    {
        return $this->referrer_recom_therapy;
    }

    /**
     * Get the [referrer_dr] column value.
     *
     * @return string
     */
    public function getReferrerDr()
    {
        return $this->referrer_dr;
    }

    /**
     * Get the [referrer_dept] column value.
     *
     * @return string
     */
    public function getReferrerDept()
    {
        return $this->referrer_dept;
    }

    /**
     * Get the [referrer_institution] column value.
     *
     * @return string
     */
    public function getReferrerInstitution()
    {
        return $this->referrer_institution;
    }

    /**
     * Get the [referrer_notes] column value.
     *
     * @return string
     */
    public function getReferrerNotes()
    {
        return $this->referrer_notes;
    }

    /**
     * Get the [financial_class_nr] column value.
     *
     * @return int
     */
    public function getFinancialClassNr()
    {
        return $this->financial_class_nr;
    }

    /**
     * Get the [insurance_nr] column value.
     *
     * @return string
     */
    public function getInsuranceNr()
    {
        return $this->insurance_nr;
    }

    /**
     * Get the [insurance_firm_id] column value.
     *
     * @return string
     */
    public function getInsuranceFirmId()
    {
        return $this->insurance_firm_id;
    }

    /**
     * Get the [insurance_class_nr] column value.
     *
     * @return int
     */
    public function getInsuranceClassNr()
    {
        return $this->insurance_class_nr;
    }

    /**
     * Get the [insurance_2_nr] column value.
     *
     * @return string
     */
    public function getInsurance2Nr()
    {
        return $this->insurance_2_nr;
    }

    /**
     * Get the [insurance_2_firm_id] column value.
     *
     * @return string
     */
    public function getInsurance2FirmId()
    {
        return $this->insurance_2_firm_id;
    }

    /**
     * Get the [guarantor_pid] column value.
     *
     * @return int
     */
    public function getGuarantorPid()
    {
        return $this->guarantor_pid;
    }

    /**
     * Get the [contact_pid] column value.
     *
     * @return int
     */
    public function getContactPid()
    {
        return $this->contact_pid;
    }

    /**
     * Get the [contact_relation] column value.
     *
     * @return string
     */
    public function getContactRelation()
    {
        return $this->contact_relation;
    }

    /**
     * Get the [current_ward_nr] column value.
     *
     * @return int
     */
    public function getCurrentWardNr()
    {
        return $this->current_ward_nr;
    }

    /**
     * Get the [current_room_nr] column value.
     *
     * @return int
     */
    public function getCurrentRoomNr()
    {
        return $this->current_room_nr;
    }

    /**
     * Get the [in_ward] column value.
     *
     * @return boolean
     */
    public function getInWard()
    {
        return $this->in_ward;
    }

    /**
     * Get the [in_ward] column value.
     *
     * @return boolean
     */
    public function isInWard()
    {
        return $this->getInWard();
    }

    /**
     * Get the [current_dept_nr] column value.
     *
     * @return int
     */
    public function getCurrentDeptNr()
    {
        return $this->current_dept_nr;
    }

    /**
     * Get the [pharmacy] column value.
     *
     * @return string
     */
    public function getPharmacy()
    {
        return $this->pharmacy;
    }

    /**
     * Get the [in_dept] column value.
     *
     * @return boolean
     */
    public function getInDept()
    {
        return $this->in_dept;
    }

    /**
     * Get the [in_dept] column value.
     *
     * @return boolean
     */
    public function isInDept()
    {
        return $this->getInDept();
    }

    /**
     * Get the [current_firm_nr] column value.
     *
     * @return int
     */
    public function getCurrentFirmNr()
    {
        return $this->current_firm_nr;
    }

    /**
     * Get the [current_att_dr_nr] column value.
     *
     * @return int
     */
    public function getCurrentAttDrNr()
    {
        return $this->current_att_dr_nr;
    }

    /**
     * Get the [consulting_dr] column value.
     *
     * @return string
     */
    public function getConsultingDr()
    {
        return $this->consulting_dr;
    }

    /**
     * Get the [extra_service] column value.
     *
     * @return string
     */
    public function getExtraService()
    {
        return $this->extra_service;
    }

    /**
     * Get the [form_nr] column value.
     *
     * @return string
     */
    public function getFormNr()
    {
        return $this->form_nr;
    }

    /**
     * Get the [is_discharged] column value.
     *
     * @return boolean
     */
    public function getIsDischarged()
    {
        return $this->is_discharged;
    }

    /**
     * Get the [is_discharged] column value.
     *
     * @return boolean
     */
    public function isDischarged()
    {
        return $this->getIsDischarged();
    }

    /**
     * Get the [optionally formatted] temporal [discharge_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDischargeDate($format = NULL)
    {
        if ($format === null) {
            return $this->discharge_date;
        } else {
            return $this->discharge_date instanceof \DateTimeInterface ? $this->discharge_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [discharge_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDischargeTime($format = NULL)
    {
        if ($format === null) {
            return $this->discharge_time;
        } else {
            return $this->discharge_time instanceof \DateTimeInterface ? $this->discharge_time->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [followup_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFollowupDate($format = NULL)
    {
        if ($format === null) {
            return $this->followup_date;
        } else {
            return $this->followup_date instanceof \DateTimeInterface ? $this->followup_date->format($format) : null;
        }
    }

    /**
     * Get the [followup_responsibility] column value.
     *
     * @return string
     */
    public function getFollowupResponsibility()
    {
        return $this->followup_responsibility;
    }

    /**
     * Get the [post_encounter_notes] column value.
     *
     * @return string
     */
    public function getPostEncounterNotes()
    {
        return $this->post_encounter_notes;
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
     * Get the [room] column value.
     *
     * @return string
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Get the [room_history] column value.
     *
     * @return string
     */
    public function getRoomHistory()
    {
        return $this->room_history;
    }

    /**
     * Get the [current_dept_history] column value.
     *
     * @return string
     */
    public function getCurrentDeptHistory()
    {
        return $this->current_dept_history;
    }

    /**
     * Get the [medical_service] column value.
     *
     * @return string
     */
    public function getMedicalService()
    {
        return $this->medical_service;
    }

    /**
     * Get the [referrer_number] column value.
     *
     * @return string
     */
    public function getReferrerNumber()
    {
        return $this->referrer_number;
    }

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [encounter_nr_prev] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setEncounterNrPrev($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->encounter_nr_prev !== $v) {
            $this->encounter_nr_prev = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_ENCOUNTER_NR_PREV] = true;
        }

        return $this;
    } // setEncounterNrPrev()

    /**
     * Set the value of [pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_PID] = true;
        }

        return $this;
    } // setPid()

    /**
     * Sets the value of [encounter_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setEncounterDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->encounter_date !== null || $dt !== null) {
            if ( ($dt != $this->encounter_date) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->encounter_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterTableMap::COL_ENCOUNTER_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setEncounterDate()

    /**
     * Set the value of [encounter_class_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setEncounterClassNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_class_nr !== $v) {
            $this->encounter_class_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_ENCOUNTER_CLASS_NR] = true;
        }

        return $this;
    } // setEncounterClassNr()

    /**
     * Set the value of [encounter_type] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setEncounterType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->encounter_type !== $v) {
            $this->encounter_type = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_ENCOUNTER_TYPE] = true;
        }

        return $this;
    } // setEncounterType()

    /**
     * Set the value of [encounter_status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setEncounterStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->encounter_status !== $v) {
            $this->encounter_status = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_ENCOUNTER_STATUS] = true;
        }

        return $this;
    } // setEncounterStatus()

    /**
     * Set the value of [referrer_diagnosis] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setReferrerDiagnosis($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->referrer_diagnosis !== $v) {
            $this->referrer_diagnosis = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_REFERRER_DIAGNOSIS] = true;
        }

        return $this;
    } // setReferrerDiagnosis()

    /**
     * Set the value of [referrer_recom_therapy] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setReferrerRecomTherapy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->referrer_recom_therapy !== $v) {
            $this->referrer_recom_therapy = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_REFERRER_RECOM_THERAPY] = true;
        }

        return $this;
    } // setReferrerRecomTherapy()

    /**
     * Set the value of [referrer_dr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setReferrerDr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->referrer_dr !== $v) {
            $this->referrer_dr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_REFERRER_DR] = true;
        }

        return $this;
    } // setReferrerDr()

    /**
     * Set the value of [referrer_dept] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setReferrerDept($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->referrer_dept !== $v) {
            $this->referrer_dept = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_REFERRER_DEPT] = true;
        }

        return $this;
    } // setReferrerDept()

    /**
     * Set the value of [referrer_institution] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setReferrerInstitution($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->referrer_institution !== $v) {
            $this->referrer_institution = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_REFERRER_INSTITUTION] = true;
        }

        return $this;
    } // setReferrerInstitution()

    /**
     * Set the value of [referrer_notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setReferrerNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->referrer_notes !== $v) {
            $this->referrer_notes = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_REFERRER_NOTES] = true;
        }

        return $this;
    } // setReferrerNotes()

    /**
     * Set the value of [financial_class_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setFinancialClassNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->financial_class_nr !== $v) {
            $this->financial_class_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_FINANCIAL_CLASS_NR] = true;
        }

        return $this;
    } // setFinancialClassNr()

    /**
     * Set the value of [insurance_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setInsuranceNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insurance_nr !== $v) {
            $this->insurance_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_INSURANCE_NR] = true;
        }

        return $this;
    } // setInsuranceNr()

    /**
     * Set the value of [insurance_firm_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setInsuranceFirmId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insurance_firm_id !== $v) {
            $this->insurance_firm_id = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_INSURANCE_FIRM_ID] = true;
        }

        return $this;
    } // setInsuranceFirmId()

    /**
     * Set the value of [insurance_class_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setInsuranceClassNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_class_nr !== $v) {
            $this->insurance_class_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_INSURANCE_CLASS_NR] = true;
        }

        return $this;
    } // setInsuranceClassNr()

    /**
     * Set the value of [insurance_2_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setInsurance2Nr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insurance_2_nr !== $v) {
            $this->insurance_2_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_INSURANCE_2_NR] = true;
        }

        return $this;
    } // setInsurance2Nr()

    /**
     * Set the value of [insurance_2_firm_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setInsurance2FirmId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insurance_2_firm_id !== $v) {
            $this->insurance_2_firm_id = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_INSURANCE_2_FIRM_ID] = true;
        }

        return $this;
    } // setInsurance2FirmId()

    /**
     * Set the value of [guarantor_pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setGuarantorPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->guarantor_pid !== $v) {
            $this->guarantor_pid = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_GUARANTOR_PID] = true;
        }

        return $this;
    } // setGuarantorPid()

    /**
     * Set the value of [contact_pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setContactPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->contact_pid !== $v) {
            $this->contact_pid = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_CONTACT_PID] = true;
        }

        return $this;
    } // setContactPid()

    /**
     * Set the value of [contact_relation] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setContactRelation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contact_relation !== $v) {
            $this->contact_relation = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_CONTACT_RELATION] = true;
        }

        return $this;
    } // setContactRelation()

    /**
     * Set the value of [current_ward_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setCurrentWardNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->current_ward_nr !== $v) {
            $this->current_ward_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_CURRENT_WARD_NR] = true;
        }

        return $this;
    } // setCurrentWardNr()

    /**
     * Set the value of [current_room_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setCurrentRoomNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->current_room_nr !== $v) {
            $this->current_room_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_CURRENT_ROOM_NR] = true;
        }

        return $this;
    } // setCurrentRoomNr()

    /**
     * Sets the value of the [in_ward] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setInWard($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->in_ward !== $v) {
            $this->in_ward = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_IN_WARD] = true;
        }

        return $this;
    } // setInWard()

    /**
     * Set the value of [current_dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setCurrentDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->current_dept_nr !== $v) {
            $this->current_dept_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_CURRENT_DEPT_NR] = true;
        }

        return $this;
    } // setCurrentDeptNr()

    /**
     * Set the value of [pharmacy] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setPharmacy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pharmacy !== $v) {
            $this->pharmacy = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_PHARMACY] = true;
        }

        return $this;
    } // setPharmacy()

    /**
     * Sets the value of the [in_dept] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setInDept($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->in_dept !== $v) {
            $this->in_dept = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_IN_DEPT] = true;
        }

        return $this;
    } // setInDept()

    /**
     * Set the value of [current_firm_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setCurrentFirmNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->current_firm_nr !== $v) {
            $this->current_firm_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_CURRENT_FIRM_NR] = true;
        }

        return $this;
    } // setCurrentFirmNr()

    /**
     * Set the value of [current_att_dr_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setCurrentAttDrNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->current_att_dr_nr !== $v) {
            $this->current_att_dr_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_CURRENT_ATT_DR_NR] = true;
        }

        return $this;
    } // setCurrentAttDrNr()

    /**
     * Set the value of [consulting_dr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setConsultingDr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->consulting_dr !== $v) {
            $this->consulting_dr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_CONSULTING_DR] = true;
        }

        return $this;
    } // setConsultingDr()

    /**
     * Set the value of [extra_service] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setExtraService($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->extra_service !== $v) {
            $this->extra_service = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_EXTRA_SERVICE] = true;
        }

        return $this;
    } // setExtraService()

    /**
     * Set the value of [form_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setFormNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->form_nr !== $v) {
            $this->form_nr = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_FORM_NR] = true;
        }

        return $this;
    } // setFormNr()

    /**
     * Sets the value of the [is_discharged] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setIsDischarged($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_discharged !== $v) {
            $this->is_discharged = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_IS_DISCHARGED] = true;
        }

        return $this;
    } // setIsDischarged()

    /**
     * Sets the value of [discharge_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setDischargeDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->discharge_date !== null || $dt !== null) {
            if ($this->discharge_date === null || $dt === null || $dt->format("Y-m-d") !== $this->discharge_date->format("Y-m-d")) {
                $this->discharge_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterTableMap::COL_DISCHARGE_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDischargeDate()

    /**
     * Sets the value of [discharge_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setDischargeTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->discharge_time !== null || $dt !== null) {
            if ($this->discharge_time === null || $dt === null || $dt->format("H:i:s.u") !== $this->discharge_time->format("H:i:s.u")) {
                $this->discharge_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterTableMap::COL_DISCHARGE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setDischargeTime()

    /**
     * Sets the value of [followup_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setFollowupDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->followup_date !== null || $dt !== null) {
            if ( ($dt != $this->followup_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->followup_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterTableMap::COL_FOLLOWUP_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setFollowupDate()

    /**
     * Set the value of [followup_responsibility] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setFollowupResponsibility($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->followup_responsibility !== $v) {
            $this->followup_responsibility = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_FOLLOWUP_RESPONSIBILITY] = true;
        }

        return $this;
    } // setFollowupResponsibility()

    /**
     * Set the value of [post_encounter_notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setPostEncounterNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_encounter_notes !== $v) {
            $this->post_encounter_notes = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_POST_ENCOUNTER_NOTES] = true;
        }

        return $this;
    } // setPostEncounterNotes()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareEncounterTableMap::COL_CREATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateTime()

    /**
     * Set the value of [room] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setRoom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->room !== $v) {
            $this->room = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_ROOM] = true;
        }

        return $this;
    } // setRoom()

    /**
     * Set the value of [room_history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setRoomHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->room_history !== $v) {
            $this->room_history = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_ROOM_HISTORY] = true;
        }

        return $this;
    } // setRoomHistory()

    /**
     * Set the value of [current_dept_history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setCurrentDeptHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->current_dept_history !== $v) {
            $this->current_dept_history = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_CURRENT_DEPT_HISTORY] = true;
        }

        return $this;
    } // setCurrentDeptHistory()

    /**
     * Set the value of [medical_service] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setMedicalService($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medical_service !== $v) {
            $this->medical_service = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_MEDICAL_SERVICE] = true;
        }

        return $this;
    } // setMedicalService()

    /**
     * Set the value of [referrer_number] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareEncounter The current object (for fluent API support)
     */
    public function setReferrerNumber($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->referrer_number !== $v) {
            $this->referrer_number = $v;
            $this->modifiedColumns[CareEncounterTableMap::COL_REFERRER_NUMBER] = true;
        }

        return $this;
    } // setReferrerNumber()

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

            if ($this->encounter_date && $this->encounter_date->format('Y-m-d H:i:s.u') !== NULL) {
                return false;
            }

            if ($this->encounter_class_nr !== 0) {
                return false;
            }

            if ($this->encounter_type !== '') {
                return false;
            }

            if ($this->encounter_status !== '') {
                return false;
            }

            if ($this->referrer_diagnosis !== '') {
                return false;
            }

            if ($this->referrer_dr !== '') {
                return false;
            }

            if ($this->referrer_dept !== '') {
                return false;
            }

            if ($this->referrer_institution !== '') {
                return false;
            }

            if ($this->financial_class_nr !== 0) {
                return false;
            }

            if ($this->insurance_nr !== '0') {
                return false;
            }

            if ($this->insurance_firm_id !== '0') {
                return false;
            }

            if ($this->insurance_class_nr !== 0) {
                return false;
            }

            if ($this->insurance_2_nr !== '0') {
                return false;
            }

            if ($this->insurance_2_firm_id !== '0') {
                return false;
            }

            if ($this->guarantor_pid !== 0) {
                return false;
            }

            if ($this->contact_pid !== 0) {
                return false;
            }

            if ($this->contact_relation !== '') {
                return false;
            }

            if ($this->current_ward_nr !== 0) {
                return false;
            }

            if ($this->current_room_nr !== 0) {
                return false;
            }

            if ($this->in_ward !== false) {
                return false;
            }

            if ($this->current_dept_nr !== 0) {
                return false;
            }

            if ($this->in_dept !== false) {
                return false;
            }

            if ($this->current_firm_nr !== 0) {
                return false;
            }

            if ($this->current_att_dr_nr !== 0) {
                return false;
            }

            if ($this->consulting_dr !== '') {
                return false;
            }

            if ($this->extra_service !== '') {
                return false;
            }

            if ($this->is_discharged !== false) {
                return false;
            }

            if ($this->followup_date && $this->followup_date->format('Y-m-d') !== NULL) {
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

            if ($this->room !== 'GENERAL') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareEncounterTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareEncounterTableMap::translateFieldName('EncounterNrPrev', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr_prev = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareEncounterTableMap::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareEncounterTableMap::translateFieldName('EncounterDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->encounter_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareEncounterTableMap::translateFieldName('EncounterClassNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_class_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareEncounterTableMap::translateFieldName('EncounterType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareEncounterTableMap::translateFieldName('EncounterStatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareEncounterTableMap::translateFieldName('ReferrerDiagnosis', TableMap::TYPE_PHPNAME, $indexType)];
            $this->referrer_diagnosis = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareEncounterTableMap::translateFieldName('ReferrerRecomTherapy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->referrer_recom_therapy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareEncounterTableMap::translateFieldName('ReferrerDr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->referrer_dr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareEncounterTableMap::translateFieldName('ReferrerDept', TableMap::TYPE_PHPNAME, $indexType)];
            $this->referrer_dept = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareEncounterTableMap::translateFieldName('ReferrerInstitution', TableMap::TYPE_PHPNAME, $indexType)];
            $this->referrer_institution = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareEncounterTableMap::translateFieldName('ReferrerNotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->referrer_notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareEncounterTableMap::translateFieldName('FinancialClassNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->financial_class_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareEncounterTableMap::translateFieldName('InsuranceNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareEncounterTableMap::translateFieldName('InsuranceFirmId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_firm_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareEncounterTableMap::translateFieldName('InsuranceClassNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_class_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareEncounterTableMap::translateFieldName('Insurance2Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_2_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareEncounterTableMap::translateFieldName('Insurance2FirmId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_2_firm_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareEncounterTableMap::translateFieldName('GuarantorPid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->guarantor_pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareEncounterTableMap::translateFieldName('ContactPid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareEncounterTableMap::translateFieldName('ContactRelation', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_relation = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareEncounterTableMap::translateFieldName('CurrentWardNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->current_ward_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareEncounterTableMap::translateFieldName('CurrentRoomNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->current_room_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareEncounterTableMap::translateFieldName('InWard', TableMap::TYPE_PHPNAME, $indexType)];
            $this->in_ward = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareEncounterTableMap::translateFieldName('CurrentDeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->current_dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareEncounterTableMap::translateFieldName('Pharmacy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pharmacy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareEncounterTableMap::translateFieldName('InDept', TableMap::TYPE_PHPNAME, $indexType)];
            $this->in_dept = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareEncounterTableMap::translateFieldName('CurrentFirmNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->current_firm_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareEncounterTableMap::translateFieldName('CurrentAttDrNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->current_att_dr_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CareEncounterTableMap::translateFieldName('ConsultingDr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->consulting_dr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CareEncounterTableMap::translateFieldName('ExtraService', TableMap::TYPE_PHPNAME, $indexType)];
            $this->extra_service = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CareEncounterTableMap::translateFieldName('FormNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->form_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CareEncounterTableMap::translateFieldName('IsDischarged', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_discharged = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CareEncounterTableMap::translateFieldName('DischargeDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->discharge_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CareEncounterTableMap::translateFieldName('DischargeTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->discharge_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CareEncounterTableMap::translateFieldName('FollowupDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->followup_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CareEncounterTableMap::translateFieldName('FollowupResponsibility', TableMap::TYPE_PHPNAME, $indexType)];
            $this->followup_responsibility = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CareEncounterTableMap::translateFieldName('PostEncounterNotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->post_encounter_notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CareEncounterTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : CareEncounterTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : CareEncounterTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : CareEncounterTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : CareEncounterTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : CareEncounterTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : CareEncounterTableMap::translateFieldName('Room', TableMap::TYPE_PHPNAME, $indexType)];
            $this->room = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : CareEncounterTableMap::translateFieldName('RoomHistory', TableMap::TYPE_PHPNAME, $indexType)];
            $this->room_history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : CareEncounterTableMap::translateFieldName('CurrentDeptHistory', TableMap::TYPE_PHPNAME, $indexType)];
            $this->current_dept_history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : CareEncounterTableMap::translateFieldName('MedicalService', TableMap::TYPE_PHPNAME, $indexType)];
            $this->medical_service = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : CareEncounterTableMap::translateFieldName('ReferrerNumber', TableMap::TYPE_PHPNAME, $indexType)];
            $this->referrer_number = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 50; // 50 = CareEncounterTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareEncounter'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareEncounterQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareEncounter::setDeleted()
     * @see CareEncounter::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareEncounterQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterTableMap::DATABASE_NAME);
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
                CareEncounterTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareEncounterTableMap::COL_ENCOUNTER_NR] = true;
        if (null !== $this->encounter_nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareEncounterTableMap::COL_ENCOUNTER_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_NR_PREV)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr_prev';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_PID)) {
            $modifiedColumns[':p' . $index++]  = 'pid';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_date';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_CLASS_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_class_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_type';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_status';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_DIAGNOSIS)) {
            $modifiedColumns[':p' . $index++]  = 'referrer_diagnosis';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_RECOM_THERAPY)) {
            $modifiedColumns[':p' . $index++]  = 'referrer_recom_therapy';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_DR)) {
            $modifiedColumns[':p' . $index++]  = 'referrer_dr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_DEPT)) {
            $modifiedColumns[':p' . $index++]  = 'referrer_dept';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_INSTITUTION)) {
            $modifiedColumns[':p' . $index++]  = 'referrer_institution';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'referrer_notes';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_FINANCIAL_CLASS_NR)) {
            $modifiedColumns[':p' . $index++]  = 'financial_class_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_INSURANCE_NR)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_INSURANCE_FIRM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_firm_id';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_INSURANCE_CLASS_NR)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_class_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_INSURANCE_2_NR)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_2_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_INSURANCE_2_FIRM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_2_firm_id';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_GUARANTOR_PID)) {
            $modifiedColumns[':p' . $index++]  = 'guarantor_pid';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CONTACT_PID)) {
            $modifiedColumns[':p' . $index++]  = 'contact_pid';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CONTACT_RELATION)) {
            $modifiedColumns[':p' . $index++]  = 'contact_relation';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_WARD_NR)) {
            $modifiedColumns[':p' . $index++]  = 'current_ward_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_ROOM_NR)) {
            $modifiedColumns[':p' . $index++]  = 'current_room_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_IN_WARD)) {
            $modifiedColumns[':p' . $index++]  = 'in_ward';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'current_dept_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_PHARMACY)) {
            $modifiedColumns[':p' . $index++]  = 'pharmacy';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_IN_DEPT)) {
            $modifiedColumns[':p' . $index++]  = 'in_dept';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_FIRM_NR)) {
            $modifiedColumns[':p' . $index++]  = 'current_firm_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_ATT_DR_NR)) {
            $modifiedColumns[':p' . $index++]  = 'current_att_dr_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CONSULTING_DR)) {
            $modifiedColumns[':p' . $index++]  = 'consulting_dr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_EXTRA_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = 'extra_service';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_FORM_NR)) {
            $modifiedColumns[':p' . $index++]  = 'form_nr';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_IS_DISCHARGED)) {
            $modifiedColumns[':p' . $index++]  = 'is_discharged';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_DISCHARGE_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'discharge_date';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_DISCHARGE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'discharge_time';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_FOLLOWUP_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'followup_date';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_FOLLOWUP_RESPONSIBILITY)) {
            $modifiedColumns[':p' . $index++]  = 'followup_responsibility';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_POST_ENCOUNTER_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'post_encounter_notes';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ROOM)) {
            $modifiedColumns[':p' . $index++]  = 'room';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ROOM_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'room_history';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_DEPT_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'current_dept_history';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_MEDICAL_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = 'medical_service';
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'referrer_number';
        }

        $sql = sprintf(
            'INSERT INTO care_encounter (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'encounter_nr_prev':
                        $stmt->bindValue($identifier, $this->encounter_nr_prev, PDO::PARAM_INT);
                        break;
                    case 'pid':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_INT);
                        break;
                    case 'encounter_date':
                        $stmt->bindValue($identifier, $this->encounter_date ? $this->encounter_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'encounter_class_nr':
                        $stmt->bindValue($identifier, $this->encounter_class_nr, PDO::PARAM_INT);
                        break;
                    case 'encounter_type':
                        $stmt->bindValue($identifier, $this->encounter_type, PDO::PARAM_STR);
                        break;
                    case 'encounter_status':
                        $stmt->bindValue($identifier, $this->encounter_status, PDO::PARAM_STR);
                        break;
                    case 'referrer_diagnosis':
                        $stmt->bindValue($identifier, $this->referrer_diagnosis, PDO::PARAM_STR);
                        break;
                    case 'referrer_recom_therapy':
                        $stmt->bindValue($identifier, $this->referrer_recom_therapy, PDO::PARAM_STR);
                        break;
                    case 'referrer_dr':
                        $stmt->bindValue($identifier, $this->referrer_dr, PDO::PARAM_STR);
                        break;
                    case 'referrer_dept':
                        $stmt->bindValue($identifier, $this->referrer_dept, PDO::PARAM_STR);
                        break;
                    case 'referrer_institution':
                        $stmt->bindValue($identifier, $this->referrer_institution, PDO::PARAM_STR);
                        break;
                    case 'referrer_notes':
                        $stmt->bindValue($identifier, $this->referrer_notes, PDO::PARAM_STR);
                        break;
                    case 'financial_class_nr':
                        $stmt->bindValue($identifier, $this->financial_class_nr, PDO::PARAM_INT);
                        break;
                    case 'insurance_nr':
                        $stmt->bindValue($identifier, $this->insurance_nr, PDO::PARAM_STR);
                        break;
                    case 'insurance_firm_id':
                        $stmt->bindValue($identifier, $this->insurance_firm_id, PDO::PARAM_STR);
                        break;
                    case 'insurance_class_nr':
                        $stmt->bindValue($identifier, $this->insurance_class_nr, PDO::PARAM_INT);
                        break;
                    case 'insurance_2_nr':
                        $stmt->bindValue($identifier, $this->insurance_2_nr, PDO::PARAM_STR);
                        break;
                    case 'insurance_2_firm_id':
                        $stmt->bindValue($identifier, $this->insurance_2_firm_id, PDO::PARAM_STR);
                        break;
                    case 'guarantor_pid':
                        $stmt->bindValue($identifier, $this->guarantor_pid, PDO::PARAM_INT);
                        break;
                    case 'contact_pid':
                        $stmt->bindValue($identifier, $this->contact_pid, PDO::PARAM_INT);
                        break;
                    case 'contact_relation':
                        $stmt->bindValue($identifier, $this->contact_relation, PDO::PARAM_STR);
                        break;
                    case 'current_ward_nr':
                        $stmt->bindValue($identifier, $this->current_ward_nr, PDO::PARAM_INT);
                        break;
                    case 'current_room_nr':
                        $stmt->bindValue($identifier, $this->current_room_nr, PDO::PARAM_INT);
                        break;
                    case 'in_ward':
                        $stmt->bindValue($identifier, (int) $this->in_ward, PDO::PARAM_INT);
                        break;
                    case 'current_dept_nr':
                        $stmt->bindValue($identifier, $this->current_dept_nr, PDO::PARAM_INT);
                        break;
                    case 'pharmacy':
                        $stmt->bindValue($identifier, $this->pharmacy, PDO::PARAM_STR);
                        break;
                    case 'in_dept':
                        $stmt->bindValue($identifier, (int) $this->in_dept, PDO::PARAM_INT);
                        break;
                    case 'current_firm_nr':
                        $stmt->bindValue($identifier, $this->current_firm_nr, PDO::PARAM_INT);
                        break;
                    case 'current_att_dr_nr':
                        $stmt->bindValue($identifier, $this->current_att_dr_nr, PDO::PARAM_INT);
                        break;
                    case 'consulting_dr':
                        $stmt->bindValue($identifier, $this->consulting_dr, PDO::PARAM_STR);
                        break;
                    case 'extra_service':
                        $stmt->bindValue($identifier, $this->extra_service, PDO::PARAM_STR);
                        break;
                    case 'form_nr':
                        $stmt->bindValue($identifier, $this->form_nr, PDO::PARAM_STR);
                        break;
                    case 'is_discharged':
                        $stmt->bindValue($identifier, (int) $this->is_discharged, PDO::PARAM_INT);
                        break;
                    case 'discharge_date':
                        $stmt->bindValue($identifier, $this->discharge_date ? $this->discharge_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'discharge_time':
                        $stmt->bindValue($identifier, $this->discharge_time ? $this->discharge_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'followup_date':
                        $stmt->bindValue($identifier, $this->followup_date ? $this->followup_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'followup_responsibility':
                        $stmt->bindValue($identifier, $this->followup_responsibility, PDO::PARAM_STR);
                        break;
                    case 'post_encounter_notes':
                        $stmt->bindValue($identifier, $this->post_encounter_notes, PDO::PARAM_STR);
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
                    case 'room':
                        $stmt->bindValue($identifier, $this->room, PDO::PARAM_STR);
                        break;
                    case 'room_history':
                        $stmt->bindValue($identifier, $this->room_history, PDO::PARAM_STR);
                        break;
                    case 'current_dept_history':
                        $stmt->bindValue($identifier, $this->current_dept_history, PDO::PARAM_STR);
                        break;
                    case 'medical_service':
                        $stmt->bindValue($identifier, $this->medical_service, PDO::PARAM_STR);
                        break;
                    case 'referrer_number':
                        $stmt->bindValue($identifier, $this->referrer_number, PDO::PARAM_STR);
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
        $this->setEncounterNr($pk);

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
        $pos = CareEncounterTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getEncounterNr();
                break;
            case 1:
                return $this->getEncounterNrPrev();
                break;
            case 2:
                return $this->getPid();
                break;
            case 3:
                return $this->getEncounterDate();
                break;
            case 4:
                return $this->getEncounterClassNr();
                break;
            case 5:
                return $this->getEncounterType();
                break;
            case 6:
                return $this->getEncounterStatus();
                break;
            case 7:
                return $this->getReferrerDiagnosis();
                break;
            case 8:
                return $this->getReferrerRecomTherapy();
                break;
            case 9:
                return $this->getReferrerDr();
                break;
            case 10:
                return $this->getReferrerDept();
                break;
            case 11:
                return $this->getReferrerInstitution();
                break;
            case 12:
                return $this->getReferrerNotes();
                break;
            case 13:
                return $this->getFinancialClassNr();
                break;
            case 14:
                return $this->getInsuranceNr();
                break;
            case 15:
                return $this->getInsuranceFirmId();
                break;
            case 16:
                return $this->getInsuranceClassNr();
                break;
            case 17:
                return $this->getInsurance2Nr();
                break;
            case 18:
                return $this->getInsurance2FirmId();
                break;
            case 19:
                return $this->getGuarantorPid();
                break;
            case 20:
                return $this->getContactPid();
                break;
            case 21:
                return $this->getContactRelation();
                break;
            case 22:
                return $this->getCurrentWardNr();
                break;
            case 23:
                return $this->getCurrentRoomNr();
                break;
            case 24:
                return $this->getInWard();
                break;
            case 25:
                return $this->getCurrentDeptNr();
                break;
            case 26:
                return $this->getPharmacy();
                break;
            case 27:
                return $this->getInDept();
                break;
            case 28:
                return $this->getCurrentFirmNr();
                break;
            case 29:
                return $this->getCurrentAttDrNr();
                break;
            case 30:
                return $this->getConsultingDr();
                break;
            case 31:
                return $this->getExtraService();
                break;
            case 32:
                return $this->getFormNr();
                break;
            case 33:
                return $this->getIsDischarged();
                break;
            case 34:
                return $this->getDischargeDate();
                break;
            case 35:
                return $this->getDischargeTime();
                break;
            case 36:
                return $this->getFollowupDate();
                break;
            case 37:
                return $this->getFollowupResponsibility();
                break;
            case 38:
                return $this->getPostEncounterNotes();
                break;
            case 39:
                return $this->getStatus();
                break;
            case 40:
                return $this->getHistory();
                break;
            case 41:
                return $this->getModifyId();
                break;
            case 42:
                return $this->getModifyTime();
                break;
            case 43:
                return $this->getCreateId();
                break;
            case 44:
                return $this->getCreateTime();
                break;
            case 45:
                return $this->getRoom();
                break;
            case 46:
                return $this->getRoomHistory();
                break;
            case 47:
                return $this->getCurrentDeptHistory();
                break;
            case 48:
                return $this->getMedicalService();
                break;
            case 49:
                return $this->getReferrerNumber();
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

        if (isset($alreadyDumpedObjects['CareEncounter'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareEncounter'][$this->hashCode()] = true;
        $keys = CareEncounterTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getEncounterNr(),
            $keys[1] => $this->getEncounterNrPrev(),
            $keys[2] => $this->getPid(),
            $keys[3] => $this->getEncounterDate(),
            $keys[4] => $this->getEncounterClassNr(),
            $keys[5] => $this->getEncounterType(),
            $keys[6] => $this->getEncounterStatus(),
            $keys[7] => $this->getReferrerDiagnosis(),
            $keys[8] => $this->getReferrerRecomTherapy(),
            $keys[9] => $this->getReferrerDr(),
            $keys[10] => $this->getReferrerDept(),
            $keys[11] => $this->getReferrerInstitution(),
            $keys[12] => $this->getReferrerNotes(),
            $keys[13] => $this->getFinancialClassNr(),
            $keys[14] => $this->getInsuranceNr(),
            $keys[15] => $this->getInsuranceFirmId(),
            $keys[16] => $this->getInsuranceClassNr(),
            $keys[17] => $this->getInsurance2Nr(),
            $keys[18] => $this->getInsurance2FirmId(),
            $keys[19] => $this->getGuarantorPid(),
            $keys[20] => $this->getContactPid(),
            $keys[21] => $this->getContactRelation(),
            $keys[22] => $this->getCurrentWardNr(),
            $keys[23] => $this->getCurrentRoomNr(),
            $keys[24] => $this->getInWard(),
            $keys[25] => $this->getCurrentDeptNr(),
            $keys[26] => $this->getPharmacy(),
            $keys[27] => $this->getInDept(),
            $keys[28] => $this->getCurrentFirmNr(),
            $keys[29] => $this->getCurrentAttDrNr(),
            $keys[30] => $this->getConsultingDr(),
            $keys[31] => $this->getExtraService(),
            $keys[32] => $this->getFormNr(),
            $keys[33] => $this->getIsDischarged(),
            $keys[34] => $this->getDischargeDate(),
            $keys[35] => $this->getDischargeTime(),
            $keys[36] => $this->getFollowupDate(),
            $keys[37] => $this->getFollowupResponsibility(),
            $keys[38] => $this->getPostEncounterNotes(),
            $keys[39] => $this->getStatus(),
            $keys[40] => $this->getHistory(),
            $keys[41] => $this->getModifyId(),
            $keys[42] => $this->getModifyTime(),
            $keys[43] => $this->getCreateId(),
            $keys[44] => $this->getCreateTime(),
            $keys[45] => $this->getRoom(),
            $keys[46] => $this->getRoomHistory(),
            $keys[47] => $this->getCurrentDeptHistory(),
            $keys[48] => $this->getMedicalService(),
            $keys[49] => $this->getReferrerNumber(),
        );
        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('c');
        }

        if ($result[$keys[34]] instanceof \DateTimeInterface) {
            $result[$keys[34]] = $result[$keys[34]]->format('c');
        }

        if ($result[$keys[35]] instanceof \DateTimeInterface) {
            $result[$keys[35]] = $result[$keys[35]]->format('c');
        }

        if ($result[$keys[36]] instanceof \DateTimeInterface) {
            $result[$keys[36]] = $result[$keys[36]]->format('c');
        }

        if ($result[$keys[42]] instanceof \DateTimeInterface) {
            $result[$keys[42]] = $result[$keys[42]]->format('c');
        }

        if ($result[$keys[44]] instanceof \DateTimeInterface) {
            $result[$keys[44]] = $result[$keys[44]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareEncounter
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareEncounterTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareEncounter
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setEncounterNr($value);
                break;
            case 1:
                $this->setEncounterNrPrev($value);
                break;
            case 2:
                $this->setPid($value);
                break;
            case 3:
                $this->setEncounterDate($value);
                break;
            case 4:
                $this->setEncounterClassNr($value);
                break;
            case 5:
                $this->setEncounterType($value);
                break;
            case 6:
                $this->setEncounterStatus($value);
                break;
            case 7:
                $this->setReferrerDiagnosis($value);
                break;
            case 8:
                $this->setReferrerRecomTherapy($value);
                break;
            case 9:
                $this->setReferrerDr($value);
                break;
            case 10:
                $this->setReferrerDept($value);
                break;
            case 11:
                $this->setReferrerInstitution($value);
                break;
            case 12:
                $this->setReferrerNotes($value);
                break;
            case 13:
                $this->setFinancialClassNr($value);
                break;
            case 14:
                $this->setInsuranceNr($value);
                break;
            case 15:
                $this->setInsuranceFirmId($value);
                break;
            case 16:
                $this->setInsuranceClassNr($value);
                break;
            case 17:
                $this->setInsurance2Nr($value);
                break;
            case 18:
                $this->setInsurance2FirmId($value);
                break;
            case 19:
                $this->setGuarantorPid($value);
                break;
            case 20:
                $this->setContactPid($value);
                break;
            case 21:
                $this->setContactRelation($value);
                break;
            case 22:
                $this->setCurrentWardNr($value);
                break;
            case 23:
                $this->setCurrentRoomNr($value);
                break;
            case 24:
                $this->setInWard($value);
                break;
            case 25:
                $this->setCurrentDeptNr($value);
                break;
            case 26:
                $this->setPharmacy($value);
                break;
            case 27:
                $this->setInDept($value);
                break;
            case 28:
                $this->setCurrentFirmNr($value);
                break;
            case 29:
                $this->setCurrentAttDrNr($value);
                break;
            case 30:
                $this->setConsultingDr($value);
                break;
            case 31:
                $this->setExtraService($value);
                break;
            case 32:
                $this->setFormNr($value);
                break;
            case 33:
                $this->setIsDischarged($value);
                break;
            case 34:
                $this->setDischargeDate($value);
                break;
            case 35:
                $this->setDischargeTime($value);
                break;
            case 36:
                $this->setFollowupDate($value);
                break;
            case 37:
                $this->setFollowupResponsibility($value);
                break;
            case 38:
                $this->setPostEncounterNotes($value);
                break;
            case 39:
                $this->setStatus($value);
                break;
            case 40:
                $this->setHistory($value);
                break;
            case 41:
                $this->setModifyId($value);
                break;
            case 42:
                $this->setModifyTime($value);
                break;
            case 43:
                $this->setCreateId($value);
                break;
            case 44:
                $this->setCreateTime($value);
                break;
            case 45:
                $this->setRoom($value);
                break;
            case 46:
                $this->setRoomHistory($value);
                break;
            case 47:
                $this->setCurrentDeptHistory($value);
                break;
            case 48:
                $this->setMedicalService($value);
                break;
            case 49:
                $this->setReferrerNumber($value);
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
        $keys = CareEncounterTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setEncounterNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEncounterNrPrev($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPid($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setEncounterDate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setEncounterClassNr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setEncounterType($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setEncounterStatus($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setReferrerDiagnosis($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setReferrerRecomTherapy($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setReferrerDr($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setReferrerDept($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setReferrerInstitution($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setReferrerNotes($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setFinancialClassNr($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInsuranceNr($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInsuranceFirmId($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setInsuranceClassNr($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInsurance2Nr($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setInsurance2FirmId($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setGuarantorPid($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setContactPid($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setContactRelation($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setCurrentWardNr($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setCurrentRoomNr($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setInWard($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setCurrentDeptNr($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setPharmacy($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setInDept($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setCurrentFirmNr($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setCurrentAttDrNr($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setConsultingDr($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setExtraService($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setFormNr($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setIsDischarged($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setDischargeDate($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setDischargeTime($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setFollowupDate($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setFollowupResponsibility($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setPostEncounterNotes($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setStatus($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setHistory($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setModifyId($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setModifyTime($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setCreateId($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setCreateTime($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setRoom($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setRoomHistory($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setCurrentDeptHistory($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setMedicalService($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setReferrerNumber($arr[$keys[49]]);
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
     * @return $this|\CareMd\CareMd\CareEncounter The current object, for fluid interface
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
        $criteria = new Criteria(CareEncounterTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareEncounterTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_NR_PREV)) {
            $criteria->add(CareEncounterTableMap::COL_ENCOUNTER_NR_PREV, $this->encounter_nr_prev);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_PID)) {
            $criteria->add(CareEncounterTableMap::COL_PID, $this->pid);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_DATE)) {
            $criteria->add(CareEncounterTableMap::COL_ENCOUNTER_DATE, $this->encounter_date);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_CLASS_NR)) {
            $criteria->add(CareEncounterTableMap::COL_ENCOUNTER_CLASS_NR, $this->encounter_class_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_TYPE)) {
            $criteria->add(CareEncounterTableMap::COL_ENCOUNTER_TYPE, $this->encounter_type);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ENCOUNTER_STATUS)) {
            $criteria->add(CareEncounterTableMap::COL_ENCOUNTER_STATUS, $this->encounter_status);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_DIAGNOSIS)) {
            $criteria->add(CareEncounterTableMap::COL_REFERRER_DIAGNOSIS, $this->referrer_diagnosis);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_RECOM_THERAPY)) {
            $criteria->add(CareEncounterTableMap::COL_REFERRER_RECOM_THERAPY, $this->referrer_recom_therapy);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_DR)) {
            $criteria->add(CareEncounterTableMap::COL_REFERRER_DR, $this->referrer_dr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_DEPT)) {
            $criteria->add(CareEncounterTableMap::COL_REFERRER_DEPT, $this->referrer_dept);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_INSTITUTION)) {
            $criteria->add(CareEncounterTableMap::COL_REFERRER_INSTITUTION, $this->referrer_institution);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_NOTES)) {
            $criteria->add(CareEncounterTableMap::COL_REFERRER_NOTES, $this->referrer_notes);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_FINANCIAL_CLASS_NR)) {
            $criteria->add(CareEncounterTableMap::COL_FINANCIAL_CLASS_NR, $this->financial_class_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_INSURANCE_NR)) {
            $criteria->add(CareEncounterTableMap::COL_INSURANCE_NR, $this->insurance_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_INSURANCE_FIRM_ID)) {
            $criteria->add(CareEncounterTableMap::COL_INSURANCE_FIRM_ID, $this->insurance_firm_id);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_INSURANCE_CLASS_NR)) {
            $criteria->add(CareEncounterTableMap::COL_INSURANCE_CLASS_NR, $this->insurance_class_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_INSURANCE_2_NR)) {
            $criteria->add(CareEncounterTableMap::COL_INSURANCE_2_NR, $this->insurance_2_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_INSURANCE_2_FIRM_ID)) {
            $criteria->add(CareEncounterTableMap::COL_INSURANCE_2_FIRM_ID, $this->insurance_2_firm_id);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_GUARANTOR_PID)) {
            $criteria->add(CareEncounterTableMap::COL_GUARANTOR_PID, $this->guarantor_pid);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CONTACT_PID)) {
            $criteria->add(CareEncounterTableMap::COL_CONTACT_PID, $this->contact_pid);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CONTACT_RELATION)) {
            $criteria->add(CareEncounterTableMap::COL_CONTACT_RELATION, $this->contact_relation);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_WARD_NR)) {
            $criteria->add(CareEncounterTableMap::COL_CURRENT_WARD_NR, $this->current_ward_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_ROOM_NR)) {
            $criteria->add(CareEncounterTableMap::COL_CURRENT_ROOM_NR, $this->current_room_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_IN_WARD)) {
            $criteria->add(CareEncounterTableMap::COL_IN_WARD, $this->in_ward);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_DEPT_NR)) {
            $criteria->add(CareEncounterTableMap::COL_CURRENT_DEPT_NR, $this->current_dept_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_PHARMACY)) {
            $criteria->add(CareEncounterTableMap::COL_PHARMACY, $this->pharmacy);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_IN_DEPT)) {
            $criteria->add(CareEncounterTableMap::COL_IN_DEPT, $this->in_dept);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_FIRM_NR)) {
            $criteria->add(CareEncounterTableMap::COL_CURRENT_FIRM_NR, $this->current_firm_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_ATT_DR_NR)) {
            $criteria->add(CareEncounterTableMap::COL_CURRENT_ATT_DR_NR, $this->current_att_dr_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CONSULTING_DR)) {
            $criteria->add(CareEncounterTableMap::COL_CONSULTING_DR, $this->consulting_dr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_EXTRA_SERVICE)) {
            $criteria->add(CareEncounterTableMap::COL_EXTRA_SERVICE, $this->extra_service);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_FORM_NR)) {
            $criteria->add(CareEncounterTableMap::COL_FORM_NR, $this->form_nr);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_IS_DISCHARGED)) {
            $criteria->add(CareEncounterTableMap::COL_IS_DISCHARGED, $this->is_discharged);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_DISCHARGE_DATE)) {
            $criteria->add(CareEncounterTableMap::COL_DISCHARGE_DATE, $this->discharge_date);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_DISCHARGE_TIME)) {
            $criteria->add(CareEncounterTableMap::COL_DISCHARGE_TIME, $this->discharge_time);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_FOLLOWUP_DATE)) {
            $criteria->add(CareEncounterTableMap::COL_FOLLOWUP_DATE, $this->followup_date);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_FOLLOWUP_RESPONSIBILITY)) {
            $criteria->add(CareEncounterTableMap::COL_FOLLOWUP_RESPONSIBILITY, $this->followup_responsibility);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_POST_ENCOUNTER_NOTES)) {
            $criteria->add(CareEncounterTableMap::COL_POST_ENCOUNTER_NOTES, $this->post_encounter_notes);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_STATUS)) {
            $criteria->add(CareEncounterTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_HISTORY)) {
            $criteria->add(CareEncounterTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareEncounterTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareEncounterTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CREATE_ID)) {
            $criteria->add(CareEncounterTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareEncounterTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ROOM)) {
            $criteria->add(CareEncounterTableMap::COL_ROOM, $this->room);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_ROOM_HISTORY)) {
            $criteria->add(CareEncounterTableMap::COL_ROOM_HISTORY, $this->room_history);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_CURRENT_DEPT_HISTORY)) {
            $criteria->add(CareEncounterTableMap::COL_CURRENT_DEPT_HISTORY, $this->current_dept_history);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_MEDICAL_SERVICE)) {
            $criteria->add(CareEncounterTableMap::COL_MEDICAL_SERVICE, $this->medical_service);
        }
        if ($this->isColumnModified(CareEncounterTableMap::COL_REFERRER_NUMBER)) {
            $criteria->add(CareEncounterTableMap::COL_REFERRER_NUMBER, $this->referrer_number);
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
        $criteria = ChildCareEncounterQuery::create();
        $criteria->add(CareEncounterTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);

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
        $validPk = null !== $this->getEncounterNr();

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
        return $this->getEncounterNr();
    }

    /**
     * Generic method to set the primary key (encounter_nr column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setEncounterNr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getEncounterNr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareEncounter (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEncounterNrPrev($this->getEncounterNrPrev());
        $copyObj->setPid($this->getPid());
        $copyObj->setEncounterDate($this->getEncounterDate());
        $copyObj->setEncounterClassNr($this->getEncounterClassNr());
        $copyObj->setEncounterType($this->getEncounterType());
        $copyObj->setEncounterStatus($this->getEncounterStatus());
        $copyObj->setReferrerDiagnosis($this->getReferrerDiagnosis());
        $copyObj->setReferrerRecomTherapy($this->getReferrerRecomTherapy());
        $copyObj->setReferrerDr($this->getReferrerDr());
        $copyObj->setReferrerDept($this->getReferrerDept());
        $copyObj->setReferrerInstitution($this->getReferrerInstitution());
        $copyObj->setReferrerNotes($this->getReferrerNotes());
        $copyObj->setFinancialClassNr($this->getFinancialClassNr());
        $copyObj->setInsuranceNr($this->getInsuranceNr());
        $copyObj->setInsuranceFirmId($this->getInsuranceFirmId());
        $copyObj->setInsuranceClassNr($this->getInsuranceClassNr());
        $copyObj->setInsurance2Nr($this->getInsurance2Nr());
        $copyObj->setInsurance2FirmId($this->getInsurance2FirmId());
        $copyObj->setGuarantorPid($this->getGuarantorPid());
        $copyObj->setContactPid($this->getContactPid());
        $copyObj->setContactRelation($this->getContactRelation());
        $copyObj->setCurrentWardNr($this->getCurrentWardNr());
        $copyObj->setCurrentRoomNr($this->getCurrentRoomNr());
        $copyObj->setInWard($this->getInWard());
        $copyObj->setCurrentDeptNr($this->getCurrentDeptNr());
        $copyObj->setPharmacy($this->getPharmacy());
        $copyObj->setInDept($this->getInDept());
        $copyObj->setCurrentFirmNr($this->getCurrentFirmNr());
        $copyObj->setCurrentAttDrNr($this->getCurrentAttDrNr());
        $copyObj->setConsultingDr($this->getConsultingDr());
        $copyObj->setExtraService($this->getExtraService());
        $copyObj->setFormNr($this->getFormNr());
        $copyObj->setIsDischarged($this->getIsDischarged());
        $copyObj->setDischargeDate($this->getDischargeDate());
        $copyObj->setDischargeTime($this->getDischargeTime());
        $copyObj->setFollowupDate($this->getFollowupDate());
        $copyObj->setFollowupResponsibility($this->getFollowupResponsibility());
        $copyObj->setPostEncounterNotes($this->getPostEncounterNotes());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setRoom($this->getRoom());
        $copyObj->setRoomHistory($this->getRoomHistory());
        $copyObj->setCurrentDeptHistory($this->getCurrentDeptHistory());
        $copyObj->setMedicalService($this->getMedicalService());
        $copyObj->setReferrerNumber($this->getReferrerNumber());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setEncounterNr(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareEncounter Clone of current object.
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
        $this->encounter_nr = null;
        $this->encounter_nr_prev = null;
        $this->pid = null;
        $this->encounter_date = null;
        $this->encounter_class_nr = null;
        $this->encounter_type = null;
        $this->encounter_status = null;
        $this->referrer_diagnosis = null;
        $this->referrer_recom_therapy = null;
        $this->referrer_dr = null;
        $this->referrer_dept = null;
        $this->referrer_institution = null;
        $this->referrer_notes = null;
        $this->financial_class_nr = null;
        $this->insurance_nr = null;
        $this->insurance_firm_id = null;
        $this->insurance_class_nr = null;
        $this->insurance_2_nr = null;
        $this->insurance_2_firm_id = null;
        $this->guarantor_pid = null;
        $this->contact_pid = null;
        $this->contact_relation = null;
        $this->current_ward_nr = null;
        $this->current_room_nr = null;
        $this->in_ward = null;
        $this->current_dept_nr = null;
        $this->pharmacy = null;
        $this->in_dept = null;
        $this->current_firm_nr = null;
        $this->current_att_dr_nr = null;
        $this->consulting_dr = null;
        $this->extra_service = null;
        $this->form_nr = null;
        $this->is_discharged = null;
        $this->discharge_date = null;
        $this->discharge_time = null;
        $this->followup_date = null;
        $this->followup_responsibility = null;
        $this->post_encounter_notes = null;
        $this->status = null;
        $this->history = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->create_id = null;
        $this->create_time = null;
        $this->room = null;
        $this->room_history = null;
        $this->current_dept_history = null;
        $this->medical_service = null;
        $this->referrer_number = null;
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
        return (string) $this->exportTo(CareEncounterTableMap::DEFAULT_STRING_FORMAT);
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
