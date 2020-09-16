<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CarePersonQuery as ChildCarePersonQuery;
use CareMd\CareMd\Map\CarePersonTableMap;
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
 * Base class that represents a row from the 'care_person' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CarePerson implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CarePersonTableMap';


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
     * The value for the pid field.
     *
     * @var        int
     */
    protected $pid;

    /**
     * The value for the selian_pid field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $selian_pid;

    /**
     * The value for the date_reg field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $date_reg;

    /**
     * The value for the name_first field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $name_first;

    /**
     * The value for the name_2 field.
     *
     * @var        string
     */
    protected $name_2;

    /**
     * The value for the name_3 field.
     *
     * @var        string
     */
    protected $name_3;

    /**
     * The value for the name_middle field.
     *
     * @var        string
     */
    protected $name_middle;

    /**
     * The value for the name_last field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $name_last;

    /**
     * The value for the name_maiden field.
     *
     * @var        string
     */
    protected $name_maiden;

    /**
     * The value for the name_others field.
     *
     * @var        string
     */
    protected $name_others;

    /**
     * The value for the education field.
     *
     * @var        string
     */
    protected $education;

    /**
     * The value for the date_birth field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $date_birth;

    /**
     * The value for the blood_group field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $blood_group;

    /**
     * The value for the rh field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rh;

    /**
     * The value for the addr_str field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $addr_str;

    /**
     * The value for the addr_str_nr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $addr_str_nr;

    /**
     * The value for the addr_zip field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $addr_zip;

    /**
     * The value for the addr_citytown_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $addr_citytown_nr;

    /**
     * The value for the addr_is_valid field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $addr_is_valid;

    /**
     * The value for the citizenship field.
     *
     * @var        string
     */
    protected $citizenship;

    /**
     * The value for the phone_1_code field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $phone_1_code;

    /**
     * The value for the phone_1_nr field.
     *
     * @var        string
     */
    protected $phone_1_nr;

    /**
     * The value for the phone_2_code field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $phone_2_code;

    /**
     * The value for the phone_2_nr field.
     *
     * @var        string
     */
    protected $phone_2_nr;

    /**
     * The value for the cellphone_1_nr field.
     *
     * @var        string
     */
    protected $cellphone_1_nr;

    /**
     * The value for the cellphone_2_nr field.
     *
     * @var        string
     */
    protected $cellphone_2_nr;

    /**
     * The value for the fax field.
     *
     * @var        string
     */
    protected $fax;

    /**
     * The value for the email field.
     *
     * @var        string
     */
    protected $email;

    /**
     * The value for the civil_status field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $civil_status;

    /**
     * The value for the sex field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $sex;

    /**
     * The value for the title field.
     *
     * @var        string
     */
    protected $title;

    /**
     * The value for the photo field.
     *
     * @var        resource
     */
    protected $photo;

    /**
     * The value for the photo_filename field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $photo_filename;

    /**
     * The value for the ethnic_orig field.
     *
     * @var        int
     */
    protected $ethnic_orig;

    /**
     * The value for the org_id field.
     *
     * @var        string
     */
    protected $org_id;

    /**
     * The value for the sss_nr field.
     *
     * @var        string
     */
    protected $sss_nr;

    /**
     * The value for the nat_id_nr field.
     *
     * @var        string
     */
    protected $nat_id_nr;

    /**
     * The value for the religion field.
     *
     * @var        string
     */
    protected $religion;

    /**
     * The value for the is_first_reg field.
     *
     * @var        int
     */
    protected $is_first_reg;

    /**
     * The value for the region field.
     *
     * @var        string
     */
    protected $region;

    /**
     * The value for the district field.
     *
     * @var        string
     */
    protected $district;

    /**
     * The value for the ward field.
     *
     * @var        string
     */
    protected $ward;

    /**
     * The value for the mother_pid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $mother_pid;

    /**
     * The value for the father_pid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $father_pid;

    /**
     * The value for the contact_person field.
     *
     * @var        string
     */
    protected $contact_person;

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
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $contact_relation;

    /**
     * The value for the death_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $death_date;

    /**
     * The value for the death_encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $death_encounter_nr;

    /**
     * The value for the death_cause field.
     *
     * @var        string
     */
    protected $death_cause;

    /**
     * The value for the death_cause_code field.
     *
     * @var        string
     */
    protected $death_cause_code;

    /**
     * The value for the date_update field.
     *
     * @var        DateTime
     */
    protected $date_update;

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
     * The value for the allergy field.
     *
     * @var        string
     */
    protected $allergy;

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
     * The value for the addr_citytown_name field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $addr_citytown_name;

    /**
     * The value for the is_transmit2erp field.
     *
     * @var        int
     */
    protected $is_transmit2erp;

    /**
     * The value for the insurance_id field.
     *
     * @var        int
     */
    protected $insurance_id;

    /**
     * The value for the insurance_head_pid field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $insurance_head_pid;

    /**
     * The value for the membership_nr field.
     *
     * @var        string
     */
    protected $membership_nr;

    /**
     * The value for the form_nr field.
     *
     * @var        string
     */
    protected $form_nr;

    /**
     * The value for the nhif_nr field.
     *
     * @var        string
     */
    protected $nhif_nr;

    /**
     * The value for the insurance_silver field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_silver;

    /**
     * The value for the insurance_gold field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_gold;

    /**
     * The value for the insurance_friedkin field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_friedkin;

    /**
     * The value for the insurance_selian_stuff field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_selian_stuff;

    /**
     * The value for the insurance_premium_for_adults field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_premium_for_adults;

    /**
     * The value for the insurance_premium_for_childs field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_premium_for_childs;

    /**
     * The value for the insurance_premium_for_senior field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_premium_for_senior;

    /**
     * The value for the insurance_copayment_opd field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_copayment_opd;

    /**
     * The value for the insurance_copayment_ipd field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_copayment_ipd;

    /**
     * The value for the insurance_ceiling_by_individual field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_ceiling_by_individual;

    /**
     * The value for the insurance_ceiling_by_family field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_ceiling_by_family;

    /**
     * The value for the insurance_ceiling_amount field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_ceiling_amount;

    /**
     * The value for the insurance_ceiling_for_families field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insurance_ceiling_for_families;

    /**
     * The value for the national_id field.
     *
     * @var        string
     */
    protected $national_id;

    /**
     * The value for the employee_id field.
     *
     * @var        string
     */
    protected $employee_id;

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
        $this->selian_pid = '0';
        $this->date_reg = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->name_first = '';
        $this->name_last = '';
        $this->date_birth = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->blood_group = '';
        $this->rh = '';
        $this->addr_str = '';
        $this->addr_str_nr = '';
        $this->addr_zip = '';
        $this->addr_citytown_nr = 0;
        $this->addr_is_valid = false;
        $this->phone_1_code = '0';
        $this->phone_2_code = '0';
        $this->civil_status = '';
        $this->sex = '';
        $this->photo_filename = '';
        $this->mother_pid = 0;
        $this->father_pid = 0;
        $this->contact_pid = 0;
        $this->contact_relation = '0';
        $this->death_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->death_encounter_nr = 0;
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->addr_citytown_name = '';
        $this->insurance_head_pid = '0';
        $this->insurance_silver = 0;
        $this->insurance_gold = 0;
        $this->insurance_friedkin = 0;
        $this->insurance_selian_stuff = 0;
        $this->insurance_premium_for_adults = 0;
        $this->insurance_premium_for_childs = 0;
        $this->insurance_premium_for_senior = 0;
        $this->insurance_copayment_opd = 0;
        $this->insurance_copayment_ipd = 0;
        $this->insurance_ceiling_by_individual = 0;
        $this->insurance_ceiling_by_family = 0;
        $this->insurance_ceiling_amount = 0;
        $this->insurance_ceiling_for_families = 0;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CarePerson object.
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
     * Compares this with another <code>CarePerson</code> instance.  If
     * <code>obj</code> is an instance of <code>CarePerson</code>, delegates to
     * <code>equals(CarePerson)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CarePerson The current object, for fluid interface
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
     * Get the [pid] column value.
     *
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Get the [selian_pid] column value.
     *
     * @return string
     */
    public function getSelianPid()
    {
        return $this->selian_pid;
    }

    /**
     * Get the [optionally formatted] temporal [date_reg] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateReg($format = NULL)
    {
        if ($format === null) {
            return $this->date_reg;
        } else {
            return $this->date_reg instanceof \DateTimeInterface ? $this->date_reg->format($format) : null;
        }
    }

    /**
     * Get the [name_first] column value.
     *
     * @return string
     */
    public function getNameFirst()
    {
        return $this->name_first;
    }

    /**
     * Get the [name_2] column value.
     *
     * @return string
     */
    public function getName2()
    {
        return $this->name_2;
    }

    /**
     * Get the [name_3] column value.
     *
     * @return string
     */
    public function getName3()
    {
        return $this->name_3;
    }

    /**
     * Get the [name_middle] column value.
     *
     * @return string
     */
    public function getNameMiddle()
    {
        return $this->name_middle;
    }

    /**
     * Get the [name_last] column value.
     *
     * @return string
     */
    public function getNameLast()
    {
        return $this->name_last;
    }

    /**
     * Get the [name_maiden] column value.
     *
     * @return string
     */
    public function getNameMaiden()
    {
        return $this->name_maiden;
    }

    /**
     * Get the [name_others] column value.
     *
     * @return string
     */
    public function getNameOthers()
    {
        return $this->name_others;
    }

    /**
     * Get the [education] column value.
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Get the [optionally formatted] temporal [date_birth] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateBirth($format = NULL)
    {
        if ($format === null) {
            return $this->date_birth;
        } else {
            return $this->date_birth instanceof \DateTimeInterface ? $this->date_birth->format($format) : null;
        }
    }

    /**
     * Get the [blood_group] column value.
     *
     * @return string
     */
    public function getBloodGroup()
    {
        return $this->blood_group;
    }

    /**
     * Get the [rh] column value.
     *
     * @return string
     */
    public function getRh()
    {
        return $this->rh;
    }

    /**
     * Get the [addr_str] column value.
     *
     * @return string
     */
    public function getAddrStr()
    {
        return $this->addr_str;
    }

    /**
     * Get the [addr_str_nr] column value.
     *
     * @return string
     */
    public function getAddrStrNr()
    {
        return $this->addr_str_nr;
    }

    /**
     * Get the [addr_zip] column value.
     *
     * @return string
     */
    public function getAddrZip()
    {
        return $this->addr_zip;
    }

    /**
     * Get the [addr_citytown_nr] column value.
     *
     * @return int
     */
    public function getAddrCitytownNr()
    {
        return $this->addr_citytown_nr;
    }

    /**
     * Get the [addr_is_valid] column value.
     *
     * @return boolean
     */
    public function getAddrIsValid()
    {
        return $this->addr_is_valid;
    }

    /**
     * Get the [addr_is_valid] column value.
     *
     * @return boolean
     */
    public function isAddrIsValid()
    {
        return $this->getAddrIsValid();
    }

    /**
     * Get the [citizenship] column value.
     *
     * @return string
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * Get the [phone_1_code] column value.
     *
     * @return string
     */
    public function getPhone1Code()
    {
        return $this->phone_1_code;
    }

    /**
     * Get the [phone_1_nr] column value.
     *
     * @return string
     */
    public function getPhone1Nr()
    {
        return $this->phone_1_nr;
    }

    /**
     * Get the [phone_2_code] column value.
     *
     * @return string
     */
    public function getPhone2Code()
    {
        return $this->phone_2_code;
    }

    /**
     * Get the [phone_2_nr] column value.
     *
     * @return string
     */
    public function getPhone2Nr()
    {
        return $this->phone_2_nr;
    }

    /**
     * Get the [cellphone_1_nr] column value.
     *
     * @return string
     */
    public function getCellphone1Nr()
    {
        return $this->cellphone_1_nr;
    }

    /**
     * Get the [cellphone_2_nr] column value.
     *
     * @return string
     */
    public function getCellphone2Nr()
    {
        return $this->cellphone_2_nr;
    }

    /**
     * Get the [fax] column value.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [civil_status] column value.
     *
     * @return string
     */
    public function getCivilStatus()
    {
        return $this->civil_status;
    }

    /**
     * Get the [sex] column value.
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
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
     * Get the [photo] column value.
     *
     * @return resource
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Get the [photo_filename] column value.
     *
     * @return string
     */
    public function getPhotoFilename()
    {
        return $this->photo_filename;
    }

    /**
     * Get the [ethnic_orig] column value.
     *
     * @return int
     */
    public function getEthnicOrig()
    {
        return $this->ethnic_orig;
    }

    /**
     * Get the [org_id] column value.
     *
     * @return string
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * Get the [sss_nr] column value.
     *
     * @return string
     */
    public function getSssNr()
    {
        return $this->sss_nr;
    }

    /**
     * Get the [nat_id_nr] column value.
     *
     * @return string
     */
    public function getNatIdNr()
    {
        return $this->nat_id_nr;
    }

    /**
     * Get the [religion] column value.
     *
     * @return string
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Get the [is_first_reg] column value.
     *
     * @return int
     */
    public function getIsFirstReg()
    {
        return $this->is_first_reg;
    }

    /**
     * Get the [region] column value.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
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
     * Get the [ward] column value.
     *
     * @return string
     */
    public function getWard()
    {
        return $this->ward;
    }

    /**
     * Get the [mother_pid] column value.
     *
     * @return int
     */
    public function getMotherPid()
    {
        return $this->mother_pid;
    }

    /**
     * Get the [father_pid] column value.
     *
     * @return int
     */
    public function getFatherPid()
    {
        return $this->father_pid;
    }

    /**
     * Get the [contact_person] column value.
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contact_person;
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
     * Get the [optionally formatted] temporal [death_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDeathDate($format = NULL)
    {
        if ($format === null) {
            return $this->death_date;
        } else {
            return $this->death_date instanceof \DateTimeInterface ? $this->death_date->format($format) : null;
        }
    }

    /**
     * Get the [death_encounter_nr] column value.
     *
     * @return int
     */
    public function getDeathEncounterNr()
    {
        return $this->death_encounter_nr;
    }

    /**
     * Get the [death_cause] column value.
     *
     * @return string
     */
    public function getDeathCause()
    {
        return $this->death_cause;
    }

    /**
     * Get the [death_cause_code] column value.
     *
     * @return string
     */
    public function getDeathCauseCode()
    {
        return $this->death_cause_code;
    }

    /**
     * Get the [optionally formatted] temporal [date_update] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateUpdate($format = NULL)
    {
        if ($format === null) {
            return $this->date_update;
        } else {
            return $this->date_update instanceof \DateTimeInterface ? $this->date_update->format($format) : null;
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
     * Get the [allergy] column value.
     *
     * @return string
     */
    public function getAllergy()
    {
        return $this->allergy;
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
     * Get the [addr_citytown_name] column value.
     *
     * @return string
     */
    public function getAddrCitytownName()
    {
        return $this->addr_citytown_name;
    }

    /**
     * Get the [is_transmit2erp] column value.
     *
     * @return int
     */
    public function getIsTransmit2erp()
    {
        return $this->is_transmit2erp;
    }

    /**
     * Get the [insurance_id] column value.
     *
     * @return int
     */
    public function getInsuranceId()
    {
        return $this->insurance_id;
    }

    /**
     * Get the [insurance_head_pid] column value.
     *
     * @return string
     */
    public function getInsuranceHeadPid()
    {
        return $this->insurance_head_pid;
    }

    /**
     * Get the [membership_nr] column value.
     *
     * @return string
     */
    public function getMembershipNr()
    {
        return $this->membership_nr;
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
     * Get the [nhif_nr] column value.
     *
     * @return string
     */
    public function getNhifNr()
    {
        return $this->nhif_nr;
    }

    /**
     * Get the [insurance_silver] column value.
     *
     * @return int
     */
    public function getInsuranceSilver()
    {
        return $this->insurance_silver;
    }

    /**
     * Get the [insurance_gold] column value.
     *
     * @return int
     */
    public function getInsuranceGold()
    {
        return $this->insurance_gold;
    }

    /**
     * Get the [insurance_friedkin] column value.
     *
     * @return int
     */
    public function getInsuranceFriedkin()
    {
        return $this->insurance_friedkin;
    }

    /**
     * Get the [insurance_selian_stuff] column value.
     *
     * @return int
     */
    public function getInsuranceSelianStuff()
    {
        return $this->insurance_selian_stuff;
    }

    /**
     * Get the [insurance_premium_for_adults] column value.
     *
     * @return int
     */
    public function getInsurancePremiumForAdults()
    {
        return $this->insurance_premium_for_adults;
    }

    /**
     * Get the [insurance_premium_for_childs] column value.
     *
     * @return int
     */
    public function getInsurancePremiumForChilds()
    {
        return $this->insurance_premium_for_childs;
    }

    /**
     * Get the [insurance_premium_for_senior] column value.
     *
     * @return int
     */
    public function getInsurancePremiumForSenior()
    {
        return $this->insurance_premium_for_senior;
    }

    /**
     * Get the [insurance_copayment_opd] column value.
     *
     * @return int
     */
    public function getInsuranceCopaymentOpd()
    {
        return $this->insurance_copayment_opd;
    }

    /**
     * Get the [insurance_copayment_ipd] column value.
     *
     * @return int
     */
    public function getInsuranceCopaymentIpd()
    {
        return $this->insurance_copayment_ipd;
    }

    /**
     * Get the [insurance_ceiling_by_individual] column value.
     *
     * @return int
     */
    public function getInsuranceCeilingByIndividual()
    {
        return $this->insurance_ceiling_by_individual;
    }

    /**
     * Get the [insurance_ceiling_by_family] column value.
     *
     * @return int
     */
    public function getInsuranceCeilingByFamily()
    {
        return $this->insurance_ceiling_by_family;
    }

    /**
     * Get the [insurance_ceiling_amount] column value.
     *
     * @return int
     */
    public function getInsuranceCeilingAmount()
    {
        return $this->insurance_ceiling_amount;
    }

    /**
     * Get the [insurance_ceiling_for_families] column value.
     *
     * @return int
     */
    public function getInsuranceCeilingForFamilies()
    {
        return $this->insurance_ceiling_for_families;
    }

    /**
     * Get the [national_id] column value.
     *
     * @return string
     */
    public function getNationalId()
    {
        return $this->national_id;
    }

    /**
     * Get the [employee_id] column value.
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }

    /**
     * Set the value of [pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_PID] = true;
        }

        return $this;
    } // setPid()

    /**
     * Set the value of [selian_pid] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setSelianPid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->selian_pid !== $v) {
            $this->selian_pid = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_SELIAN_PID] = true;
        }

        return $this;
    } // setSelianPid()

    /**
     * Sets the value of [date_reg] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setDateReg($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_reg !== null || $dt !== null) {
            if ( ($dt != $this->date_reg) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->date_reg = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonTableMap::COL_DATE_REG] = true;
            }
        } // if either are not null

        return $this;
    } // setDateReg()

    /**
     * Set the value of [name_first] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setNameFirst($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_first !== $v) {
            $this->name_first = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_NAME_FIRST] = true;
        }

        return $this;
    } // setNameFirst()

    /**
     * Set the value of [name_2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setName2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_2 !== $v) {
            $this->name_2 = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_NAME_2] = true;
        }

        return $this;
    } // setName2()

    /**
     * Set the value of [name_3] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setName3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_3 !== $v) {
            $this->name_3 = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_NAME_3] = true;
        }

        return $this;
    } // setName3()

    /**
     * Set the value of [name_middle] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setNameMiddle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_middle !== $v) {
            $this->name_middle = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_NAME_MIDDLE] = true;
        }

        return $this;
    } // setNameMiddle()

    /**
     * Set the value of [name_last] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setNameLast($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_last !== $v) {
            $this->name_last = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_NAME_LAST] = true;
        }

        return $this;
    } // setNameLast()

    /**
     * Set the value of [name_maiden] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setNameMaiden($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_maiden !== $v) {
            $this->name_maiden = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_NAME_MAIDEN] = true;
        }

        return $this;
    } // setNameMaiden()

    /**
     * Set the value of [name_others] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setNameOthers($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_others !== $v) {
            $this->name_others = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_NAME_OTHERS] = true;
        }

        return $this;
    } // setNameOthers()

    /**
     * Set the value of [education] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setEducation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->education !== $v) {
            $this->education = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_EDUCATION] = true;
        }

        return $this;
    } // setEducation()

    /**
     * Sets the value of [date_birth] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setDateBirth($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_birth !== null || $dt !== null) {
            if ( ($dt != $this->date_birth) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->date_birth = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonTableMap::COL_DATE_BIRTH] = true;
            }
        } // if either are not null

        return $this;
    } // setDateBirth()

    /**
     * Set the value of [blood_group] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setBloodGroup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_group !== $v) {
            $this->blood_group = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_BLOOD_GROUP] = true;
        }

        return $this;
    } // setBloodGroup()

    /**
     * Set the value of [rh] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setRh($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rh !== $v) {
            $this->rh = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_RH] = true;
        }

        return $this;
    } // setRh()

    /**
     * Set the value of [addr_str] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setAddrStr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->addr_str !== $v) {
            $this->addr_str = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_ADDR_STR] = true;
        }

        return $this;
    } // setAddrStr()

    /**
     * Set the value of [addr_str_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setAddrStrNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->addr_str_nr !== $v) {
            $this->addr_str_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_ADDR_STR_NR] = true;
        }

        return $this;
    } // setAddrStrNr()

    /**
     * Set the value of [addr_zip] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setAddrZip($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->addr_zip !== $v) {
            $this->addr_zip = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_ADDR_ZIP] = true;
        }

        return $this;
    } // setAddrZip()

    /**
     * Set the value of [addr_citytown_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setAddrCitytownNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->addr_citytown_nr !== $v) {
            $this->addr_citytown_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_ADDR_CITYTOWN_NR] = true;
        }

        return $this;
    } // setAddrCitytownNr()

    /**
     * Sets the value of the [addr_is_valid] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setAddrIsValid($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->addr_is_valid !== $v) {
            $this->addr_is_valid = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_ADDR_IS_VALID] = true;
        }

        return $this;
    } // setAddrIsValid()

    /**
     * Set the value of [citizenship] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setCitizenship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citizenship !== $v) {
            $this->citizenship = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_CITIZENSHIP] = true;
        }

        return $this;
    } // setCitizenship()

    /**
     * Set the value of [phone_1_code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setPhone1Code($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone_1_code !== $v) {
            $this->phone_1_code = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_PHONE_1_CODE] = true;
        }

        return $this;
    } // setPhone1Code()

    /**
     * Set the value of [phone_1_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setPhone1Nr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone_1_nr !== $v) {
            $this->phone_1_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_PHONE_1_NR] = true;
        }

        return $this;
    } // setPhone1Nr()

    /**
     * Set the value of [phone_2_code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setPhone2Code($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone_2_code !== $v) {
            $this->phone_2_code = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_PHONE_2_CODE] = true;
        }

        return $this;
    } // setPhone2Code()

    /**
     * Set the value of [phone_2_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setPhone2Nr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone_2_nr !== $v) {
            $this->phone_2_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_PHONE_2_NR] = true;
        }

        return $this;
    } // setPhone2Nr()

    /**
     * Set the value of [cellphone_1_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setCellphone1Nr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cellphone_1_nr !== $v) {
            $this->cellphone_1_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_CELLPHONE_1_NR] = true;
        }

        return $this;
    } // setCellphone1Nr()

    /**
     * Set the value of [cellphone_2_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setCellphone2Nr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cellphone_2_nr !== $v) {
            $this->cellphone_2_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_CELLPHONE_2_NR] = true;
        }

        return $this;
    } // setCellphone2Nr()

    /**
     * Set the value of [fax] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_FAX] = true;
        }

        return $this;
    } // setFax()

    /**
     * Set the value of [email] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_EMAIL] = true;
        }

        return $this;
    } // setEmail()

    /**
     * Set the value of [civil_status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setCivilStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->civil_status !== $v) {
            $this->civil_status = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_CIVIL_STATUS] = true;
        }

        return $this;
    } // setCivilStatus()

    /**
     * Set the value of [sex] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_SEX] = true;
        }

        return $this;
    } // setSex()

    /**
     * Set the value of [title] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_TITLE] = true;
        }

        return $this;
    } // setTitle()

    /**
     * Set the value of [photo] column.
     *
     * @param resource $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setPhoto($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->photo = fopen('php://memory', 'r+');
            fwrite($this->photo, $v);
            rewind($this->photo);
        } else { // it's already a stream
            $this->photo = $v;
        }
        $this->modifiedColumns[CarePersonTableMap::COL_PHOTO] = true;

        return $this;
    } // setPhoto()

    /**
     * Set the value of [photo_filename] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setPhotoFilename($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->photo_filename !== $v) {
            $this->photo_filename = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_PHOTO_FILENAME] = true;
        }

        return $this;
    } // setPhotoFilename()

    /**
     * Set the value of [ethnic_orig] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setEthnicOrig($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->ethnic_orig !== $v) {
            $this->ethnic_orig = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_ETHNIC_ORIG] = true;
        }

        return $this;
    } // setEthnicOrig()

    /**
     * Set the value of [org_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setOrgId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->org_id !== $v) {
            $this->org_id = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_ORG_ID] = true;
        }

        return $this;
    } // setOrgId()

    /**
     * Set the value of [sss_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setSssNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sss_nr !== $v) {
            $this->sss_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_SSS_NR] = true;
        }

        return $this;
    } // setSssNr()

    /**
     * Set the value of [nat_id_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setNatIdNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nat_id_nr !== $v) {
            $this->nat_id_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_NAT_ID_NR] = true;
        }

        return $this;
    } // setNatIdNr()

    /**
     * Set the value of [religion] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setReligion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->religion !== $v) {
            $this->religion = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_RELIGION] = true;
        }

        return $this;
    } // setReligion()

    /**
     * Set the value of [is_first_reg] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setIsFirstReg($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_first_reg !== $v) {
            $this->is_first_reg = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_IS_FIRST_REG] = true;
        }

        return $this;
    } // setIsFirstReg()

    /**
     * Set the value of [region] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setRegion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->region !== $v) {
            $this->region = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_REGION] = true;
        }

        return $this;
    } // setRegion()

    /**
     * Set the value of [district] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setDistrict($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->district !== $v) {
            $this->district = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_DISTRICT] = true;
        }

        return $this;
    } // setDistrict()

    /**
     * Set the value of [ward] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setWard($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ward !== $v) {
            $this->ward = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_WARD] = true;
        }

        return $this;
    } // setWard()

    /**
     * Set the value of [mother_pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setMotherPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->mother_pid !== $v) {
            $this->mother_pid = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_MOTHER_PID] = true;
        }

        return $this;
    } // setMotherPid()

    /**
     * Set the value of [father_pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setFatherPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->father_pid !== $v) {
            $this->father_pid = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_FATHER_PID] = true;
        }

        return $this;
    } // setFatherPid()

    /**
     * Set the value of [contact_person] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setContactPerson($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contact_person !== $v) {
            $this->contact_person = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_CONTACT_PERSON] = true;
        }

        return $this;
    } // setContactPerson()

    /**
     * Set the value of [contact_pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setContactPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->contact_pid !== $v) {
            $this->contact_pid = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_CONTACT_PID] = true;
        }

        return $this;
    } // setContactPid()

    /**
     * Set the value of [contact_relation] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setContactRelation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contact_relation !== $v) {
            $this->contact_relation = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_CONTACT_RELATION] = true;
        }

        return $this;
    } // setContactRelation()

    /**
     * Sets the value of [death_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setDeathDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->death_date !== null || $dt !== null) {
            if ( ($dt != $this->death_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->death_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonTableMap::COL_DEATH_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDeathDate()

    /**
     * Set the value of [death_encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setDeathEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->death_encounter_nr !== $v) {
            $this->death_encounter_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_DEATH_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setDeathEncounterNr()

    /**
     * Set the value of [death_cause] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setDeathCause($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->death_cause !== $v) {
            $this->death_cause = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_DEATH_CAUSE] = true;
        }

        return $this;
    } // setDeathCause()

    /**
     * Set the value of [death_cause_code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setDeathCauseCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->death_cause_code !== $v) {
            $this->death_cause_code = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_DEATH_CAUSE_CODE] = true;
        }

        return $this;
    } // setDeathCauseCode()

    /**
     * Sets the value of [date_update] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setDateUpdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_update !== null || $dt !== null) {
            if ($this->date_update === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->date_update->format("Y-m-d H:i:s.u")) {
                $this->date_update = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonTableMap::COL_DATE_UPDATE] = true;
            }
        } // if either are not null

        return $this;
    } // setDateUpdate()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [allergy] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setAllergy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->allergy !== $v) {
            $this->allergy = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_ALLERGY] = true;
        }

        return $this;
    } // setAllergy()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CarePersonTableMap::COL_CREATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateTime()

    /**
     * Set the value of [addr_citytown_name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setAddrCitytownName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->addr_citytown_name !== $v) {
            $this->addr_citytown_name = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_ADDR_CITYTOWN_NAME] = true;
        }

        return $this;
    } // setAddrCitytownName()

    /**
     * Set the value of [is_transmit2erp] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setIsTransmit2erp($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_transmit2erp !== $v) {
            $this->is_transmit2erp = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_IS_TRANSMIT2ERP] = true;
        }

        return $this;
    } // setIsTransmit2erp()

    /**
     * Set the value of [insurance_id] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_id !== $v) {
            $this->insurance_id = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_ID] = true;
        }

        return $this;
    } // setInsuranceId()

    /**
     * Set the value of [insurance_head_pid] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceHeadPid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insurance_head_pid !== $v) {
            $this->insurance_head_pid = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_HEAD_PID] = true;
        }

        return $this;
    } // setInsuranceHeadPid()

    /**
     * Set the value of [membership_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setMembershipNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->membership_nr !== $v) {
            $this->membership_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_MEMBERSHIP_NR] = true;
        }

        return $this;
    } // setMembershipNr()

    /**
     * Set the value of [form_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setFormNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->form_nr !== $v) {
            $this->form_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_FORM_NR] = true;
        }

        return $this;
    } // setFormNr()

    /**
     * Set the value of [nhif_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setNhifNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nhif_nr !== $v) {
            $this->nhif_nr = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_NHIF_NR] = true;
        }

        return $this;
    } // setNhifNr()

    /**
     * Set the value of [insurance_silver] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceSilver($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_silver !== $v) {
            $this->insurance_silver = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_SILVER] = true;
        }

        return $this;
    } // setInsuranceSilver()

    /**
     * Set the value of [insurance_gold] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceGold($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_gold !== $v) {
            $this->insurance_gold = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_GOLD] = true;
        }

        return $this;
    } // setInsuranceGold()

    /**
     * Set the value of [insurance_friedkin] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceFriedkin($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_friedkin !== $v) {
            $this->insurance_friedkin = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_FRIEDKIN] = true;
        }

        return $this;
    } // setInsuranceFriedkin()

    /**
     * Set the value of [insurance_selian_stuff] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceSelianStuff($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_selian_stuff !== $v) {
            $this->insurance_selian_stuff = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_SELIAN_STUFF] = true;
        }

        return $this;
    } // setInsuranceSelianStuff()

    /**
     * Set the value of [insurance_premium_for_adults] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsurancePremiumForAdults($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_premium_for_adults !== $v) {
            $this->insurance_premium_for_adults = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_ADULTS] = true;
        }

        return $this;
    } // setInsurancePremiumForAdults()

    /**
     * Set the value of [insurance_premium_for_childs] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsurancePremiumForChilds($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_premium_for_childs !== $v) {
            $this->insurance_premium_for_childs = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_CHILDS] = true;
        }

        return $this;
    } // setInsurancePremiumForChilds()

    /**
     * Set the value of [insurance_premium_for_senior] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsurancePremiumForSenior($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_premium_for_senior !== $v) {
            $this->insurance_premium_for_senior = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_SENIOR] = true;
        }

        return $this;
    } // setInsurancePremiumForSenior()

    /**
     * Set the value of [insurance_copayment_opd] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceCopaymentOpd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_copayment_opd !== $v) {
            $this->insurance_copayment_opd = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_COPAYMENT_OPD] = true;
        }

        return $this;
    } // setInsuranceCopaymentOpd()

    /**
     * Set the value of [insurance_copayment_ipd] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceCopaymentIpd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_copayment_ipd !== $v) {
            $this->insurance_copayment_ipd = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_COPAYMENT_IPD] = true;
        }

        return $this;
    } // setInsuranceCopaymentIpd()

    /**
     * Set the value of [insurance_ceiling_by_individual] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceCeilingByIndividual($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_ceiling_by_individual !== $v) {
            $this->insurance_ceiling_by_individual = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_CEILING_BY_INDIVIDUAL] = true;
        }

        return $this;
    } // setInsuranceCeilingByIndividual()

    /**
     * Set the value of [insurance_ceiling_by_family] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceCeilingByFamily($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_ceiling_by_family !== $v) {
            $this->insurance_ceiling_by_family = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_CEILING_BY_FAMILY] = true;
        }

        return $this;
    } // setInsuranceCeilingByFamily()

    /**
     * Set the value of [insurance_ceiling_amount] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceCeilingAmount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_ceiling_amount !== $v) {
            $this->insurance_ceiling_amount = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_CEILING_AMOUNT] = true;
        }

        return $this;
    } // setInsuranceCeilingAmount()

    /**
     * Set the value of [insurance_ceiling_for_families] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setInsuranceCeilingForFamilies($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_ceiling_for_families !== $v) {
            $this->insurance_ceiling_for_families = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_INSURANCE_CEILING_FOR_FAMILIES] = true;
        }

        return $this;
    } // setInsuranceCeilingForFamilies()

    /**
     * Set the value of [national_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setNationalId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->national_id !== $v) {
            $this->national_id = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_NATIONAL_ID] = true;
        }

        return $this;
    } // setNationalId()

    /**
     * Set the value of [employee_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CarePerson The current object (for fluent API support)
     */
    public function setEmployeeId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->employee_id !== $v) {
            $this->employee_id = $v;
            $this->modifiedColumns[CarePersonTableMap::COL_EMPLOYEE_ID] = true;
        }

        return $this;
    } // setEmployeeId()

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
            if ($this->selian_pid !== '0') {
                return false;
            }

            if ($this->date_reg && $this->date_reg->format('Y-m-d H:i:s.u') !== NULL) {
                return false;
            }

            if ($this->name_first !== '') {
                return false;
            }

            if ($this->name_last !== '') {
                return false;
            }

            if ($this->date_birth && $this->date_birth->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->blood_group !== '') {
                return false;
            }

            if ($this->rh !== '') {
                return false;
            }

            if ($this->addr_str !== '') {
                return false;
            }

            if ($this->addr_str_nr !== '') {
                return false;
            }

            if ($this->addr_zip !== '') {
                return false;
            }

            if ($this->addr_citytown_nr !== 0) {
                return false;
            }

            if ($this->addr_is_valid !== false) {
                return false;
            }

            if ($this->phone_1_code !== '0') {
                return false;
            }

            if ($this->phone_2_code !== '0') {
                return false;
            }

            if ($this->civil_status !== '') {
                return false;
            }

            if ($this->sex !== '') {
                return false;
            }

            if ($this->photo_filename !== '') {
                return false;
            }

            if ($this->mother_pid !== 0) {
                return false;
            }

            if ($this->father_pid !== 0) {
                return false;
            }

            if ($this->contact_pid !== 0) {
                return false;
            }

            if ($this->contact_relation !== '0') {
                return false;
            }

            if ($this->death_date && $this->death_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->death_encounter_nr !== 0) {
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

            if ($this->addr_citytown_name !== '') {
                return false;
            }

            if ($this->insurance_head_pid !== '0') {
                return false;
            }

            if ($this->insurance_silver !== 0) {
                return false;
            }

            if ($this->insurance_gold !== 0) {
                return false;
            }

            if ($this->insurance_friedkin !== 0) {
                return false;
            }

            if ($this->insurance_selian_stuff !== 0) {
                return false;
            }

            if ($this->insurance_premium_for_adults !== 0) {
                return false;
            }

            if ($this->insurance_premium_for_childs !== 0) {
                return false;
            }

            if ($this->insurance_premium_for_senior !== 0) {
                return false;
            }

            if ($this->insurance_copayment_opd !== 0) {
                return false;
            }

            if ($this->insurance_copayment_ipd !== 0) {
                return false;
            }

            if ($this->insurance_ceiling_by_individual !== 0) {
                return false;
            }

            if ($this->insurance_ceiling_by_family !== 0) {
                return false;
            }

            if ($this->insurance_ceiling_amount !== 0) {
                return false;
            }

            if ($this->insurance_ceiling_for_families !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CarePersonTableMap::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CarePersonTableMap::translateFieldName('SelianPid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->selian_pid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CarePersonTableMap::translateFieldName('DateReg', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_reg = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CarePersonTableMap::translateFieldName('NameFirst', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_first = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CarePersonTableMap::translateFieldName('Name2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CarePersonTableMap::translateFieldName('Name3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CarePersonTableMap::translateFieldName('NameMiddle', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_middle = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CarePersonTableMap::translateFieldName('NameLast', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_last = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CarePersonTableMap::translateFieldName('NameMaiden', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_maiden = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CarePersonTableMap::translateFieldName('NameOthers', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_others = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CarePersonTableMap::translateFieldName('Education', TableMap::TYPE_PHPNAME, $indexType)];
            $this->education = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CarePersonTableMap::translateFieldName('DateBirth', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->date_birth = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CarePersonTableMap::translateFieldName('BloodGroup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_group = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CarePersonTableMap::translateFieldName('Rh', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rh = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CarePersonTableMap::translateFieldName('AddrStr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_str = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CarePersonTableMap::translateFieldName('AddrStrNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_str_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CarePersonTableMap::translateFieldName('AddrZip', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_zip = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CarePersonTableMap::translateFieldName('AddrCitytownNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_citytown_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CarePersonTableMap::translateFieldName('AddrIsValid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_is_valid = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CarePersonTableMap::translateFieldName('Citizenship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citizenship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CarePersonTableMap::translateFieldName('Phone1Code', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone_1_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CarePersonTableMap::translateFieldName('Phone1Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone_1_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CarePersonTableMap::translateFieldName('Phone2Code', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone_2_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CarePersonTableMap::translateFieldName('Phone2Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone_2_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CarePersonTableMap::translateFieldName('Cellphone1Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cellphone_1_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CarePersonTableMap::translateFieldName('Cellphone2Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cellphone_2_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CarePersonTableMap::translateFieldName('Fax', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fax = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CarePersonTableMap::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CarePersonTableMap::translateFieldName('CivilStatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->civil_status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CarePersonTableMap::translateFieldName('Sex', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sex = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CarePersonTableMap::translateFieldName('Title', TableMap::TYPE_PHPNAME, $indexType)];
            $this->title = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CarePersonTableMap::translateFieldName('Photo', TableMap::TYPE_PHPNAME, $indexType)];
            if (null !== $col) {
                $this->photo = fopen('php://memory', 'r+');
                fwrite($this->photo, $col);
                rewind($this->photo);
            } else {
                $this->photo = null;
            }

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CarePersonTableMap::translateFieldName('PhotoFilename', TableMap::TYPE_PHPNAME, $indexType)];
            $this->photo_filename = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CarePersonTableMap::translateFieldName('EthnicOrig', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ethnic_orig = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CarePersonTableMap::translateFieldName('OrgId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->org_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CarePersonTableMap::translateFieldName('SssNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sss_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CarePersonTableMap::translateFieldName('NatIdNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nat_id_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CarePersonTableMap::translateFieldName('Religion', TableMap::TYPE_PHPNAME, $indexType)];
            $this->religion = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CarePersonTableMap::translateFieldName('IsFirstReg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_first_reg = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CarePersonTableMap::translateFieldName('Region', TableMap::TYPE_PHPNAME, $indexType)];
            $this->region = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : CarePersonTableMap::translateFieldName('District', TableMap::TYPE_PHPNAME, $indexType)];
            $this->district = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : CarePersonTableMap::translateFieldName('Ward', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ward = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : CarePersonTableMap::translateFieldName('MotherPid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mother_pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : CarePersonTableMap::translateFieldName('FatherPid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->father_pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : CarePersonTableMap::translateFieldName('ContactPerson', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_person = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : CarePersonTableMap::translateFieldName('ContactPid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : CarePersonTableMap::translateFieldName('ContactRelation', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_relation = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : CarePersonTableMap::translateFieldName('DeathDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->death_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : CarePersonTableMap::translateFieldName('DeathEncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->death_encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : CarePersonTableMap::translateFieldName('DeathCause', TableMap::TYPE_PHPNAME, $indexType)];
            $this->death_cause = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : CarePersonTableMap::translateFieldName('DeathCauseCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->death_cause_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : CarePersonTableMap::translateFieldName('DateUpdate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->date_update = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : CarePersonTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : CarePersonTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : CarePersonTableMap::translateFieldName('Allergy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->allergy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : CarePersonTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : CarePersonTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : CarePersonTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : CarePersonTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : CarePersonTableMap::translateFieldName('AddrCitytownName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_citytown_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : CarePersonTableMap::translateFieldName('IsTransmit2erp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_transmit2erp = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : CarePersonTableMap::translateFieldName('InsuranceId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : CarePersonTableMap::translateFieldName('InsuranceHeadPid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_head_pid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : CarePersonTableMap::translateFieldName('MembershipNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->membership_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : CarePersonTableMap::translateFieldName('FormNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->form_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : CarePersonTableMap::translateFieldName('NhifNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nhif_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : CarePersonTableMap::translateFieldName('InsuranceSilver', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_silver = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : CarePersonTableMap::translateFieldName('InsuranceGold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_gold = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : CarePersonTableMap::translateFieldName('InsuranceFriedkin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_friedkin = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : CarePersonTableMap::translateFieldName('InsuranceSelianStuff', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_selian_stuff = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : CarePersonTableMap::translateFieldName('InsurancePremiumForAdults', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_premium_for_adults = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : CarePersonTableMap::translateFieldName('InsurancePremiumForChilds', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_premium_for_childs = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : CarePersonTableMap::translateFieldName('InsurancePremiumForSenior', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_premium_for_senior = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : CarePersonTableMap::translateFieldName('InsuranceCopaymentOpd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_copayment_opd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : CarePersonTableMap::translateFieldName('InsuranceCopaymentIpd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_copayment_ipd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : CarePersonTableMap::translateFieldName('InsuranceCeilingByIndividual', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_ceiling_by_individual = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : CarePersonTableMap::translateFieldName('InsuranceCeilingByFamily', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_ceiling_by_family = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : CarePersonTableMap::translateFieldName('InsuranceCeilingAmount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_ceiling_amount = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : CarePersonTableMap::translateFieldName('InsuranceCeilingForFamilies', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_ceiling_for_families = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : CarePersonTableMap::translateFieldName('NationalId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->national_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : CarePersonTableMap::translateFieldName('EmployeeId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->employee_id = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 81; // 81 = CarePersonTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CarePerson'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CarePersonTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCarePersonQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CarePerson::setDeleted()
     * @see CarePerson::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCarePersonQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonTableMap::DATABASE_NAME);
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
                CarePersonTableMap::addInstanceToPool($this);
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
                // Rewind the photo LOB column, since PDO does not rewind after inserting value.
                if ($this->photo !== null && is_resource($this->photo)) {
                    rewind($this->photo);
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

        $this->modifiedColumns[CarePersonTableMap::COL_PID] = true;
        if (null !== $this->pid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CarePersonTableMap::COL_PID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CarePersonTableMap::COL_PID)) {
            $modifiedColumns[':p' . $index++]  = 'pid';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_SELIAN_PID)) {
            $modifiedColumns[':p' . $index++]  = 'selian_pid';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DATE_REG)) {
            $modifiedColumns[':p' . $index++]  = 'date_reg';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_FIRST)) {
            $modifiedColumns[':p' . $index++]  = 'name_first';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_2)) {
            $modifiedColumns[':p' . $index++]  = 'name_2';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_3)) {
            $modifiedColumns[':p' . $index++]  = 'name_3';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_MIDDLE)) {
            $modifiedColumns[':p' . $index++]  = 'name_middle';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_LAST)) {
            $modifiedColumns[':p' . $index++]  = 'name_last';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_MAIDEN)) {
            $modifiedColumns[':p' . $index++]  = 'name_maiden';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_OTHERS)) {
            $modifiedColumns[':p' . $index++]  = 'name_others';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_EDUCATION)) {
            $modifiedColumns[':p' . $index++]  = 'education';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DATE_BIRTH)) {
            $modifiedColumns[':p' . $index++]  = 'date_birth';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_BLOOD_GROUP)) {
            $modifiedColumns[':p' . $index++]  = 'blood_group';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_RH)) {
            $modifiedColumns[':p' . $index++]  = 'rh';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_STR)) {
            $modifiedColumns[':p' . $index++]  = 'addr_str';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_STR_NR)) {
            $modifiedColumns[':p' . $index++]  = 'addr_str_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_ZIP)) {
            $modifiedColumns[':p' . $index++]  = 'addr_zip';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_CITYTOWN_NR)) {
            $modifiedColumns[':p' . $index++]  = 'addr_citytown_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_IS_VALID)) {
            $modifiedColumns[':p' . $index++]  = 'addr_is_valid';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CITIZENSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'citizenship';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHONE_1_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'phone_1_code';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHONE_1_NR)) {
            $modifiedColumns[':p' . $index++]  = 'phone_1_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHONE_2_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'phone_2_code';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHONE_2_NR)) {
            $modifiedColumns[':p' . $index++]  = 'phone_2_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CELLPHONE_1_NR)) {
            $modifiedColumns[':p' . $index++]  = 'cellphone_1_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CELLPHONE_2_NR)) {
            $modifiedColumns[':p' . $index++]  = 'cellphone_2_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_FAX)) {
            $modifiedColumns[':p' . $index++]  = 'fax';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'email';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CIVIL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'civil_status';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_SEX)) {
            $modifiedColumns[':p' . $index++]  = 'sex';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_TITLE)) {
            $modifiedColumns[':p' . $index++]  = 'title';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHOTO)) {
            $modifiedColumns[':p' . $index++]  = 'photo';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHOTO_FILENAME)) {
            $modifiedColumns[':p' . $index++]  = 'photo_filename';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ETHNIC_ORIG)) {
            $modifiedColumns[':p' . $index++]  = 'ethnic_orig';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ORG_ID)) {
            $modifiedColumns[':p' . $index++]  = 'org_id';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_SSS_NR)) {
            $modifiedColumns[':p' . $index++]  = 'sss_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAT_ID_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nat_id_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_RELIGION)) {
            $modifiedColumns[':p' . $index++]  = 'religion';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_IS_FIRST_REG)) {
            $modifiedColumns[':p' . $index++]  = 'is_first_reg';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_REGION)) {
            $modifiedColumns[':p' . $index++]  = 'region';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DISTRICT)) {
            $modifiedColumns[':p' . $index++]  = 'district';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_WARD)) {
            $modifiedColumns[':p' . $index++]  = 'ward';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_MOTHER_PID)) {
            $modifiedColumns[':p' . $index++]  = 'mother_pid';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_FATHER_PID)) {
            $modifiedColumns[':p' . $index++]  = 'father_pid';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CONTACT_PERSON)) {
            $modifiedColumns[':p' . $index++]  = 'contact_person';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CONTACT_PID)) {
            $modifiedColumns[':p' . $index++]  = 'contact_pid';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CONTACT_RELATION)) {
            $modifiedColumns[':p' . $index++]  = 'contact_relation';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DEATH_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'death_date';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DEATH_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'death_encounter_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DEATH_CAUSE)) {
            $modifiedColumns[':p' . $index++]  = 'death_cause';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DEATH_CAUSE_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'death_cause_code';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DATE_UPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'date_update';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ALLERGY)) {
            $modifiedColumns[':p' . $index++]  = 'allergy';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_CITYTOWN_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'addr_citytown_name';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_IS_TRANSMIT2ERP)) {
            $modifiedColumns[':p' . $index++]  = 'is_transmit2ERP';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_ID';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_HEAD_PID)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_head_pid';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_MEMBERSHIP_NR)) {
            $modifiedColumns[':p' . $index++]  = 'membership_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_FORM_NR)) {
            $modifiedColumns[':p' . $index++]  = 'form_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NHIF_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nhif_nr';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_SILVER)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_silver';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_GOLD)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_gold';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_FRIEDKIN)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_friedkin';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_SELIAN_STUFF)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_selian_stuff';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_ADULTS)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_premium_for_adults';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_CHILDS)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_premium_for_childs';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_SENIOR)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_premium_for_senior';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_COPAYMENT_OPD)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_copayment_OPD';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_COPAYMENT_IPD)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_copayment_IPD';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_CEILING_BY_INDIVIDUAL)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_ceiling_by_individual';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_CEILING_BY_FAMILY)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_ceiling_by_family';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_CEILING_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_ceiling_amount';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_CEILING_FOR_FAMILIES)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_ceiling_for_families';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NATIONAL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'national_id';
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_EMPLOYEE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'employee_Id';
        }

        $sql = sprintf(
            'INSERT INTO care_person (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'pid':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_INT);
                        break;
                    case 'selian_pid':
                        $stmt->bindValue($identifier, $this->selian_pid, PDO::PARAM_INT);
                        break;
                    case 'date_reg':
                        $stmt->bindValue($identifier, $this->date_reg ? $this->date_reg->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'name_first':
                        $stmt->bindValue($identifier, $this->name_first, PDO::PARAM_STR);
                        break;
                    case 'name_2':
                        $stmt->bindValue($identifier, $this->name_2, PDO::PARAM_STR);
                        break;
                    case 'name_3':
                        $stmt->bindValue($identifier, $this->name_3, PDO::PARAM_STR);
                        break;
                    case 'name_middle':
                        $stmt->bindValue($identifier, $this->name_middle, PDO::PARAM_STR);
                        break;
                    case 'name_last':
                        $stmt->bindValue($identifier, $this->name_last, PDO::PARAM_STR);
                        break;
                    case 'name_maiden':
                        $stmt->bindValue($identifier, $this->name_maiden, PDO::PARAM_STR);
                        break;
                    case 'name_others':
                        $stmt->bindValue($identifier, $this->name_others, PDO::PARAM_STR);
                        break;
                    case 'education':
                        $stmt->bindValue($identifier, $this->education, PDO::PARAM_STR);
                        break;
                    case 'date_birth':
                        $stmt->bindValue($identifier, $this->date_birth ? $this->date_birth->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'blood_group':
                        $stmt->bindValue($identifier, $this->blood_group, PDO::PARAM_STR);
                        break;
                    case 'rh':
                        $stmt->bindValue($identifier, $this->rh, PDO::PARAM_STR);
                        break;
                    case 'addr_str':
                        $stmt->bindValue($identifier, $this->addr_str, PDO::PARAM_STR);
                        break;
                    case 'addr_str_nr':
                        $stmt->bindValue($identifier, $this->addr_str_nr, PDO::PARAM_STR);
                        break;
                    case 'addr_zip':
                        $stmt->bindValue($identifier, $this->addr_zip, PDO::PARAM_STR);
                        break;
                    case 'addr_citytown_nr':
                        $stmt->bindValue($identifier, $this->addr_citytown_nr, PDO::PARAM_INT);
                        break;
                    case 'addr_is_valid':
                        $stmt->bindValue($identifier, (int) $this->addr_is_valid, PDO::PARAM_INT);
                        break;
                    case 'citizenship':
                        $stmt->bindValue($identifier, $this->citizenship, PDO::PARAM_STR);
                        break;
                    case 'phone_1_code':
                        $stmt->bindValue($identifier, $this->phone_1_code, PDO::PARAM_STR);
                        break;
                    case 'phone_1_nr':
                        $stmt->bindValue($identifier, $this->phone_1_nr, PDO::PARAM_STR);
                        break;
                    case 'phone_2_code':
                        $stmt->bindValue($identifier, $this->phone_2_code, PDO::PARAM_STR);
                        break;
                    case 'phone_2_nr':
                        $stmt->bindValue($identifier, $this->phone_2_nr, PDO::PARAM_STR);
                        break;
                    case 'cellphone_1_nr':
                        $stmt->bindValue($identifier, $this->cellphone_1_nr, PDO::PARAM_STR);
                        break;
                    case 'cellphone_2_nr':
                        $stmt->bindValue($identifier, $this->cellphone_2_nr, PDO::PARAM_STR);
                        break;
                    case 'fax':
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case 'email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case 'civil_status':
                        $stmt->bindValue($identifier, $this->civil_status, PDO::PARAM_STR);
                        break;
                    case 'sex':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case 'title':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case 'photo':
                        if (is_resource($this->photo)) {
                            rewind($this->photo);
                        }
                        $stmt->bindValue($identifier, $this->photo, PDO::PARAM_LOB);
                        break;
                    case 'photo_filename':
                        $stmt->bindValue($identifier, $this->photo_filename, PDO::PARAM_STR);
                        break;
                    case 'ethnic_orig':
                        $stmt->bindValue($identifier, $this->ethnic_orig, PDO::PARAM_INT);
                        break;
                    case 'org_id':
                        $stmt->bindValue($identifier, $this->org_id, PDO::PARAM_STR);
                        break;
                    case 'sss_nr':
                        $stmt->bindValue($identifier, $this->sss_nr, PDO::PARAM_STR);
                        break;
                    case 'nat_id_nr':
                        $stmt->bindValue($identifier, $this->nat_id_nr, PDO::PARAM_STR);
                        break;
                    case 'religion':
                        $stmt->bindValue($identifier, $this->religion, PDO::PARAM_STR);
                        break;
                    case 'is_first_reg':
                        $stmt->bindValue($identifier, $this->is_first_reg, PDO::PARAM_INT);
                        break;
                    case 'region':
                        $stmt->bindValue($identifier, $this->region, PDO::PARAM_STR);
                        break;
                    case 'district':
                        $stmt->bindValue($identifier, $this->district, PDO::PARAM_STR);
                        break;
                    case 'ward':
                        $stmt->bindValue($identifier, $this->ward, PDO::PARAM_STR);
                        break;
                    case 'mother_pid':
                        $stmt->bindValue($identifier, $this->mother_pid, PDO::PARAM_INT);
                        break;
                    case 'father_pid':
                        $stmt->bindValue($identifier, $this->father_pid, PDO::PARAM_INT);
                        break;
                    case 'contact_person':
                        $stmt->bindValue($identifier, $this->contact_person, PDO::PARAM_STR);
                        break;
                    case 'contact_pid':
                        $stmt->bindValue($identifier, $this->contact_pid, PDO::PARAM_INT);
                        break;
                    case 'contact_relation':
                        $stmt->bindValue($identifier, $this->contact_relation, PDO::PARAM_STR);
                        break;
                    case 'death_date':
                        $stmt->bindValue($identifier, $this->death_date ? $this->death_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'death_encounter_nr':
                        $stmt->bindValue($identifier, $this->death_encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'death_cause':
                        $stmt->bindValue($identifier, $this->death_cause, PDO::PARAM_STR);
                        break;
                    case 'death_cause_code':
                        $stmt->bindValue($identifier, $this->death_cause_code, PDO::PARAM_STR);
                        break;
                    case 'date_update':
                        $stmt->bindValue($identifier, $this->date_update ? $this->date_update->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'history':
                        $stmt->bindValue($identifier, $this->history, PDO::PARAM_STR);
                        break;
                    case 'allergy':
                        $stmt->bindValue($identifier, $this->allergy, PDO::PARAM_STR);
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
                    case 'addr_citytown_name':
                        $stmt->bindValue($identifier, $this->addr_citytown_name, PDO::PARAM_STR);
                        break;
                    case 'is_transmit2ERP':
                        $stmt->bindValue($identifier, $this->is_transmit2erp, PDO::PARAM_INT);
                        break;
                    case 'insurance_ID':
                        $stmt->bindValue($identifier, $this->insurance_id, PDO::PARAM_INT);
                        break;
                    case 'insurance_head_pid':
                        $stmt->bindValue($identifier, $this->insurance_head_pid, PDO::PARAM_INT);
                        break;
                    case 'membership_nr':
                        $stmt->bindValue($identifier, $this->membership_nr, PDO::PARAM_STR);
                        break;
                    case 'form_nr':
                        $stmt->bindValue($identifier, $this->form_nr, PDO::PARAM_STR);
                        break;
                    case 'nhif_nr':
                        $stmt->bindValue($identifier, $this->nhif_nr, PDO::PARAM_STR);
                        break;
                    case 'insurance_silver':
                        $stmt->bindValue($identifier, $this->insurance_silver, PDO::PARAM_INT);
                        break;
                    case 'insurance_gold':
                        $stmt->bindValue($identifier, $this->insurance_gold, PDO::PARAM_INT);
                        break;
                    case 'insurance_friedkin':
                        $stmt->bindValue($identifier, $this->insurance_friedkin, PDO::PARAM_INT);
                        break;
                    case 'insurance_selian_stuff':
                        $stmt->bindValue($identifier, $this->insurance_selian_stuff, PDO::PARAM_INT);
                        break;
                    case 'insurance_premium_for_adults':
                        $stmt->bindValue($identifier, $this->insurance_premium_for_adults, PDO::PARAM_INT);
                        break;
                    case 'insurance_premium_for_childs':
                        $stmt->bindValue($identifier, $this->insurance_premium_for_childs, PDO::PARAM_INT);
                        break;
                    case 'insurance_premium_for_senior':
                        $stmt->bindValue($identifier, $this->insurance_premium_for_senior, PDO::PARAM_INT);
                        break;
                    case 'insurance_copayment_OPD':
                        $stmt->bindValue($identifier, $this->insurance_copayment_opd, PDO::PARAM_INT);
                        break;
                    case 'insurance_copayment_IPD':
                        $stmt->bindValue($identifier, $this->insurance_copayment_ipd, PDO::PARAM_INT);
                        break;
                    case 'insurance_ceiling_by_individual':
                        $stmt->bindValue($identifier, $this->insurance_ceiling_by_individual, PDO::PARAM_INT);
                        break;
                    case 'insurance_ceiling_by_family':
                        $stmt->bindValue($identifier, $this->insurance_ceiling_by_family, PDO::PARAM_INT);
                        break;
                    case 'insurance_ceiling_amount':
                        $stmt->bindValue($identifier, $this->insurance_ceiling_amount, PDO::PARAM_INT);
                        break;
                    case 'insurance_ceiling_for_families':
                        $stmt->bindValue($identifier, $this->insurance_ceiling_for_families, PDO::PARAM_INT);
                        break;
                    case 'national_id':
                        $stmt->bindValue($identifier, $this->national_id, PDO::PARAM_STR);
                        break;
                    case 'employee_Id':
                        $stmt->bindValue($identifier, $this->employee_id, PDO::PARAM_STR);
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
        $this->setPid($pk);

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
        $pos = CarePersonTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPid();
                break;
            case 1:
                return $this->getSelianPid();
                break;
            case 2:
                return $this->getDateReg();
                break;
            case 3:
                return $this->getNameFirst();
                break;
            case 4:
                return $this->getName2();
                break;
            case 5:
                return $this->getName3();
                break;
            case 6:
                return $this->getNameMiddle();
                break;
            case 7:
                return $this->getNameLast();
                break;
            case 8:
                return $this->getNameMaiden();
                break;
            case 9:
                return $this->getNameOthers();
                break;
            case 10:
                return $this->getEducation();
                break;
            case 11:
                return $this->getDateBirth();
                break;
            case 12:
                return $this->getBloodGroup();
                break;
            case 13:
                return $this->getRh();
                break;
            case 14:
                return $this->getAddrStr();
                break;
            case 15:
                return $this->getAddrStrNr();
                break;
            case 16:
                return $this->getAddrZip();
                break;
            case 17:
                return $this->getAddrCitytownNr();
                break;
            case 18:
                return $this->getAddrIsValid();
                break;
            case 19:
                return $this->getCitizenship();
                break;
            case 20:
                return $this->getPhone1Code();
                break;
            case 21:
                return $this->getPhone1Nr();
                break;
            case 22:
                return $this->getPhone2Code();
                break;
            case 23:
                return $this->getPhone2Nr();
                break;
            case 24:
                return $this->getCellphone1Nr();
                break;
            case 25:
                return $this->getCellphone2Nr();
                break;
            case 26:
                return $this->getFax();
                break;
            case 27:
                return $this->getEmail();
                break;
            case 28:
                return $this->getCivilStatus();
                break;
            case 29:
                return $this->getSex();
                break;
            case 30:
                return $this->getTitle();
                break;
            case 31:
                return $this->getPhoto();
                break;
            case 32:
                return $this->getPhotoFilename();
                break;
            case 33:
                return $this->getEthnicOrig();
                break;
            case 34:
                return $this->getOrgId();
                break;
            case 35:
                return $this->getSssNr();
                break;
            case 36:
                return $this->getNatIdNr();
                break;
            case 37:
                return $this->getReligion();
                break;
            case 38:
                return $this->getIsFirstReg();
                break;
            case 39:
                return $this->getRegion();
                break;
            case 40:
                return $this->getDistrict();
                break;
            case 41:
                return $this->getWard();
                break;
            case 42:
                return $this->getMotherPid();
                break;
            case 43:
                return $this->getFatherPid();
                break;
            case 44:
                return $this->getContactPerson();
                break;
            case 45:
                return $this->getContactPid();
                break;
            case 46:
                return $this->getContactRelation();
                break;
            case 47:
                return $this->getDeathDate();
                break;
            case 48:
                return $this->getDeathEncounterNr();
                break;
            case 49:
                return $this->getDeathCause();
                break;
            case 50:
                return $this->getDeathCauseCode();
                break;
            case 51:
                return $this->getDateUpdate();
                break;
            case 52:
                return $this->getStatus();
                break;
            case 53:
                return $this->getHistory();
                break;
            case 54:
                return $this->getAllergy();
                break;
            case 55:
                return $this->getModifyId();
                break;
            case 56:
                return $this->getModifyTime();
                break;
            case 57:
                return $this->getCreateId();
                break;
            case 58:
                return $this->getCreateTime();
                break;
            case 59:
                return $this->getAddrCitytownName();
                break;
            case 60:
                return $this->getIsTransmit2erp();
                break;
            case 61:
                return $this->getInsuranceId();
                break;
            case 62:
                return $this->getInsuranceHeadPid();
                break;
            case 63:
                return $this->getMembershipNr();
                break;
            case 64:
                return $this->getFormNr();
                break;
            case 65:
                return $this->getNhifNr();
                break;
            case 66:
                return $this->getInsuranceSilver();
                break;
            case 67:
                return $this->getInsuranceGold();
                break;
            case 68:
                return $this->getInsuranceFriedkin();
                break;
            case 69:
                return $this->getInsuranceSelianStuff();
                break;
            case 70:
                return $this->getInsurancePremiumForAdults();
                break;
            case 71:
                return $this->getInsurancePremiumForChilds();
                break;
            case 72:
                return $this->getInsurancePremiumForSenior();
                break;
            case 73:
                return $this->getInsuranceCopaymentOpd();
                break;
            case 74:
                return $this->getInsuranceCopaymentIpd();
                break;
            case 75:
                return $this->getInsuranceCeilingByIndividual();
                break;
            case 76:
                return $this->getInsuranceCeilingByFamily();
                break;
            case 77:
                return $this->getInsuranceCeilingAmount();
                break;
            case 78:
                return $this->getInsuranceCeilingForFamilies();
                break;
            case 79:
                return $this->getNationalId();
                break;
            case 80:
                return $this->getEmployeeId();
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

        if (isset($alreadyDumpedObjects['CarePerson'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CarePerson'][$this->hashCode()] = true;
        $keys = CarePersonTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPid(),
            $keys[1] => $this->getSelianPid(),
            $keys[2] => $this->getDateReg(),
            $keys[3] => $this->getNameFirst(),
            $keys[4] => $this->getName2(),
            $keys[5] => $this->getName3(),
            $keys[6] => $this->getNameMiddle(),
            $keys[7] => $this->getNameLast(),
            $keys[8] => $this->getNameMaiden(),
            $keys[9] => $this->getNameOthers(),
            $keys[10] => $this->getEducation(),
            $keys[11] => $this->getDateBirth(),
            $keys[12] => $this->getBloodGroup(),
            $keys[13] => $this->getRh(),
            $keys[14] => $this->getAddrStr(),
            $keys[15] => $this->getAddrStrNr(),
            $keys[16] => $this->getAddrZip(),
            $keys[17] => $this->getAddrCitytownNr(),
            $keys[18] => $this->getAddrIsValid(),
            $keys[19] => $this->getCitizenship(),
            $keys[20] => $this->getPhone1Code(),
            $keys[21] => $this->getPhone1Nr(),
            $keys[22] => $this->getPhone2Code(),
            $keys[23] => $this->getPhone2Nr(),
            $keys[24] => $this->getCellphone1Nr(),
            $keys[25] => $this->getCellphone2Nr(),
            $keys[26] => $this->getFax(),
            $keys[27] => $this->getEmail(),
            $keys[28] => $this->getCivilStatus(),
            $keys[29] => $this->getSex(),
            $keys[30] => $this->getTitle(),
            $keys[31] => $this->getPhoto(),
            $keys[32] => $this->getPhotoFilename(),
            $keys[33] => $this->getEthnicOrig(),
            $keys[34] => $this->getOrgId(),
            $keys[35] => $this->getSssNr(),
            $keys[36] => $this->getNatIdNr(),
            $keys[37] => $this->getReligion(),
            $keys[38] => $this->getIsFirstReg(),
            $keys[39] => $this->getRegion(),
            $keys[40] => $this->getDistrict(),
            $keys[41] => $this->getWard(),
            $keys[42] => $this->getMotherPid(),
            $keys[43] => $this->getFatherPid(),
            $keys[44] => $this->getContactPerson(),
            $keys[45] => $this->getContactPid(),
            $keys[46] => $this->getContactRelation(),
            $keys[47] => $this->getDeathDate(),
            $keys[48] => $this->getDeathEncounterNr(),
            $keys[49] => $this->getDeathCause(),
            $keys[50] => $this->getDeathCauseCode(),
            $keys[51] => $this->getDateUpdate(),
            $keys[52] => $this->getStatus(),
            $keys[53] => $this->getHistory(),
            $keys[54] => $this->getAllergy(),
            $keys[55] => $this->getModifyId(),
            $keys[56] => $this->getModifyTime(),
            $keys[57] => $this->getCreateId(),
            $keys[58] => $this->getCreateTime(),
            $keys[59] => $this->getAddrCitytownName(),
            $keys[60] => $this->getIsTransmit2erp(),
            $keys[61] => $this->getInsuranceId(),
            $keys[62] => $this->getInsuranceHeadPid(),
            $keys[63] => $this->getMembershipNr(),
            $keys[64] => $this->getFormNr(),
            $keys[65] => $this->getNhifNr(),
            $keys[66] => $this->getInsuranceSilver(),
            $keys[67] => $this->getInsuranceGold(),
            $keys[68] => $this->getInsuranceFriedkin(),
            $keys[69] => $this->getInsuranceSelianStuff(),
            $keys[70] => $this->getInsurancePremiumForAdults(),
            $keys[71] => $this->getInsurancePremiumForChilds(),
            $keys[72] => $this->getInsurancePremiumForSenior(),
            $keys[73] => $this->getInsuranceCopaymentOpd(),
            $keys[74] => $this->getInsuranceCopaymentIpd(),
            $keys[75] => $this->getInsuranceCeilingByIndividual(),
            $keys[76] => $this->getInsuranceCeilingByFamily(),
            $keys[77] => $this->getInsuranceCeilingAmount(),
            $keys[78] => $this->getInsuranceCeilingForFamilies(),
            $keys[79] => $this->getNationalId(),
            $keys[80] => $this->getEmployeeId(),
        );
        if ($result[$keys[2]] instanceof \DateTimeInterface) {
            $result[$keys[2]] = $result[$keys[2]]->format('c');
        }

        if ($result[$keys[11]] instanceof \DateTimeInterface) {
            $result[$keys[11]] = $result[$keys[11]]->format('c');
        }

        if ($result[$keys[47]] instanceof \DateTimeInterface) {
            $result[$keys[47]] = $result[$keys[47]]->format('c');
        }

        if ($result[$keys[51]] instanceof \DateTimeInterface) {
            $result[$keys[51]] = $result[$keys[51]]->format('c');
        }

        if ($result[$keys[56]] instanceof \DateTimeInterface) {
            $result[$keys[56]] = $result[$keys[56]]->format('c');
        }

        if ($result[$keys[58]] instanceof \DateTimeInterface) {
            $result[$keys[58]] = $result[$keys[58]]->format('c');
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
     * @return $this|\CareMd\CareMd\CarePerson
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CarePersonTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CarePerson
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setPid($value);
                break;
            case 1:
                $this->setSelianPid($value);
                break;
            case 2:
                $this->setDateReg($value);
                break;
            case 3:
                $this->setNameFirst($value);
                break;
            case 4:
                $this->setName2($value);
                break;
            case 5:
                $this->setName3($value);
                break;
            case 6:
                $this->setNameMiddle($value);
                break;
            case 7:
                $this->setNameLast($value);
                break;
            case 8:
                $this->setNameMaiden($value);
                break;
            case 9:
                $this->setNameOthers($value);
                break;
            case 10:
                $this->setEducation($value);
                break;
            case 11:
                $this->setDateBirth($value);
                break;
            case 12:
                $this->setBloodGroup($value);
                break;
            case 13:
                $this->setRh($value);
                break;
            case 14:
                $this->setAddrStr($value);
                break;
            case 15:
                $this->setAddrStrNr($value);
                break;
            case 16:
                $this->setAddrZip($value);
                break;
            case 17:
                $this->setAddrCitytownNr($value);
                break;
            case 18:
                $this->setAddrIsValid($value);
                break;
            case 19:
                $this->setCitizenship($value);
                break;
            case 20:
                $this->setPhone1Code($value);
                break;
            case 21:
                $this->setPhone1Nr($value);
                break;
            case 22:
                $this->setPhone2Code($value);
                break;
            case 23:
                $this->setPhone2Nr($value);
                break;
            case 24:
                $this->setCellphone1Nr($value);
                break;
            case 25:
                $this->setCellphone2Nr($value);
                break;
            case 26:
                $this->setFax($value);
                break;
            case 27:
                $this->setEmail($value);
                break;
            case 28:
                $this->setCivilStatus($value);
                break;
            case 29:
                $this->setSex($value);
                break;
            case 30:
                $this->setTitle($value);
                break;
            case 31:
                $this->setPhoto($value);
                break;
            case 32:
                $this->setPhotoFilename($value);
                break;
            case 33:
                $this->setEthnicOrig($value);
                break;
            case 34:
                $this->setOrgId($value);
                break;
            case 35:
                $this->setSssNr($value);
                break;
            case 36:
                $this->setNatIdNr($value);
                break;
            case 37:
                $this->setReligion($value);
                break;
            case 38:
                $this->setIsFirstReg($value);
                break;
            case 39:
                $this->setRegion($value);
                break;
            case 40:
                $this->setDistrict($value);
                break;
            case 41:
                $this->setWard($value);
                break;
            case 42:
                $this->setMotherPid($value);
                break;
            case 43:
                $this->setFatherPid($value);
                break;
            case 44:
                $this->setContactPerson($value);
                break;
            case 45:
                $this->setContactPid($value);
                break;
            case 46:
                $this->setContactRelation($value);
                break;
            case 47:
                $this->setDeathDate($value);
                break;
            case 48:
                $this->setDeathEncounterNr($value);
                break;
            case 49:
                $this->setDeathCause($value);
                break;
            case 50:
                $this->setDeathCauseCode($value);
                break;
            case 51:
                $this->setDateUpdate($value);
                break;
            case 52:
                $this->setStatus($value);
                break;
            case 53:
                $this->setHistory($value);
                break;
            case 54:
                $this->setAllergy($value);
                break;
            case 55:
                $this->setModifyId($value);
                break;
            case 56:
                $this->setModifyTime($value);
                break;
            case 57:
                $this->setCreateId($value);
                break;
            case 58:
                $this->setCreateTime($value);
                break;
            case 59:
                $this->setAddrCitytownName($value);
                break;
            case 60:
                $this->setIsTransmit2erp($value);
                break;
            case 61:
                $this->setInsuranceId($value);
                break;
            case 62:
                $this->setInsuranceHeadPid($value);
                break;
            case 63:
                $this->setMembershipNr($value);
                break;
            case 64:
                $this->setFormNr($value);
                break;
            case 65:
                $this->setNhifNr($value);
                break;
            case 66:
                $this->setInsuranceSilver($value);
                break;
            case 67:
                $this->setInsuranceGold($value);
                break;
            case 68:
                $this->setInsuranceFriedkin($value);
                break;
            case 69:
                $this->setInsuranceSelianStuff($value);
                break;
            case 70:
                $this->setInsurancePremiumForAdults($value);
                break;
            case 71:
                $this->setInsurancePremiumForChilds($value);
                break;
            case 72:
                $this->setInsurancePremiumForSenior($value);
                break;
            case 73:
                $this->setInsuranceCopaymentOpd($value);
                break;
            case 74:
                $this->setInsuranceCopaymentIpd($value);
                break;
            case 75:
                $this->setInsuranceCeilingByIndividual($value);
                break;
            case 76:
                $this->setInsuranceCeilingByFamily($value);
                break;
            case 77:
                $this->setInsuranceCeilingAmount($value);
                break;
            case 78:
                $this->setInsuranceCeilingForFamilies($value);
                break;
            case 79:
                $this->setNationalId($value);
                break;
            case 80:
                $this->setEmployeeId($value);
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
        $keys = CarePersonTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setPid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setSelianPid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDateReg($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setNameFirst($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setName2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setName3($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setNameMiddle($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setNameLast($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setNameMaiden($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setNameOthers($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setEducation($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setDateBirth($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setBloodGroup($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setRh($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setAddrStr($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setAddrStrNr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setAddrZip($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setAddrCitytownNr($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setAddrIsValid($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setCitizenship($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setPhone1Code($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setPhone1Nr($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setPhone2Code($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setPhone2Nr($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setCellphone1Nr($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setCellphone2Nr($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setFax($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setEmail($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setCivilStatus($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setSex($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setTitle($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setPhoto($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setPhotoFilename($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setEthnicOrig($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setOrgId($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setSssNr($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setNatIdNr($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setReligion($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setIsFirstReg($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setRegion($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setDistrict($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setWard($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setMotherPid($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setFatherPid($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setContactPerson($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setContactPid($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setContactRelation($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setDeathDate($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setDeathEncounterNr($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setDeathCause($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setDeathCauseCode($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setDateUpdate($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setStatus($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setHistory($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setAllergy($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setModifyId($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setModifyTime($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setCreateId($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setCreateTime($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setAddrCitytownName($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setIsTransmit2erp($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setInsuranceId($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setInsuranceHeadPid($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setMembershipNr($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setFormNr($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setNhifNr($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setInsuranceSilver($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setInsuranceGold($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setInsuranceFriedkin($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setInsuranceSelianStuff($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setInsurancePremiumForAdults($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setInsurancePremiumForChilds($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setInsurancePremiumForSenior($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setInsuranceCopaymentOpd($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setInsuranceCopaymentIpd($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setInsuranceCeilingByIndividual($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setInsuranceCeilingByFamily($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setInsuranceCeilingAmount($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setInsuranceCeilingForFamilies($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setNationalId($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setEmployeeId($arr[$keys[80]]);
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
     * @return $this|\CareMd\CareMd\CarePerson The current object, for fluid interface
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
        $criteria = new Criteria(CarePersonTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CarePersonTableMap::COL_PID)) {
            $criteria->add(CarePersonTableMap::COL_PID, $this->pid);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_SELIAN_PID)) {
            $criteria->add(CarePersonTableMap::COL_SELIAN_PID, $this->selian_pid);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DATE_REG)) {
            $criteria->add(CarePersonTableMap::COL_DATE_REG, $this->date_reg);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_FIRST)) {
            $criteria->add(CarePersonTableMap::COL_NAME_FIRST, $this->name_first);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_2)) {
            $criteria->add(CarePersonTableMap::COL_NAME_2, $this->name_2);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_3)) {
            $criteria->add(CarePersonTableMap::COL_NAME_3, $this->name_3);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_MIDDLE)) {
            $criteria->add(CarePersonTableMap::COL_NAME_MIDDLE, $this->name_middle);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_LAST)) {
            $criteria->add(CarePersonTableMap::COL_NAME_LAST, $this->name_last);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_MAIDEN)) {
            $criteria->add(CarePersonTableMap::COL_NAME_MAIDEN, $this->name_maiden);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAME_OTHERS)) {
            $criteria->add(CarePersonTableMap::COL_NAME_OTHERS, $this->name_others);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_EDUCATION)) {
            $criteria->add(CarePersonTableMap::COL_EDUCATION, $this->education);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DATE_BIRTH)) {
            $criteria->add(CarePersonTableMap::COL_DATE_BIRTH, $this->date_birth);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_BLOOD_GROUP)) {
            $criteria->add(CarePersonTableMap::COL_BLOOD_GROUP, $this->blood_group);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_RH)) {
            $criteria->add(CarePersonTableMap::COL_RH, $this->rh);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_STR)) {
            $criteria->add(CarePersonTableMap::COL_ADDR_STR, $this->addr_str);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_STR_NR)) {
            $criteria->add(CarePersonTableMap::COL_ADDR_STR_NR, $this->addr_str_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_ZIP)) {
            $criteria->add(CarePersonTableMap::COL_ADDR_ZIP, $this->addr_zip);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_CITYTOWN_NR)) {
            $criteria->add(CarePersonTableMap::COL_ADDR_CITYTOWN_NR, $this->addr_citytown_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_IS_VALID)) {
            $criteria->add(CarePersonTableMap::COL_ADDR_IS_VALID, $this->addr_is_valid);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CITIZENSHIP)) {
            $criteria->add(CarePersonTableMap::COL_CITIZENSHIP, $this->citizenship);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHONE_1_CODE)) {
            $criteria->add(CarePersonTableMap::COL_PHONE_1_CODE, $this->phone_1_code);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHONE_1_NR)) {
            $criteria->add(CarePersonTableMap::COL_PHONE_1_NR, $this->phone_1_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHONE_2_CODE)) {
            $criteria->add(CarePersonTableMap::COL_PHONE_2_CODE, $this->phone_2_code);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHONE_2_NR)) {
            $criteria->add(CarePersonTableMap::COL_PHONE_2_NR, $this->phone_2_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CELLPHONE_1_NR)) {
            $criteria->add(CarePersonTableMap::COL_CELLPHONE_1_NR, $this->cellphone_1_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CELLPHONE_2_NR)) {
            $criteria->add(CarePersonTableMap::COL_CELLPHONE_2_NR, $this->cellphone_2_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_FAX)) {
            $criteria->add(CarePersonTableMap::COL_FAX, $this->fax);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_EMAIL)) {
            $criteria->add(CarePersonTableMap::COL_EMAIL, $this->email);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CIVIL_STATUS)) {
            $criteria->add(CarePersonTableMap::COL_CIVIL_STATUS, $this->civil_status);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_SEX)) {
            $criteria->add(CarePersonTableMap::COL_SEX, $this->sex);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_TITLE)) {
            $criteria->add(CarePersonTableMap::COL_TITLE, $this->title);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHOTO)) {
            $criteria->add(CarePersonTableMap::COL_PHOTO, $this->photo);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_PHOTO_FILENAME)) {
            $criteria->add(CarePersonTableMap::COL_PHOTO_FILENAME, $this->photo_filename);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ETHNIC_ORIG)) {
            $criteria->add(CarePersonTableMap::COL_ETHNIC_ORIG, $this->ethnic_orig);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ORG_ID)) {
            $criteria->add(CarePersonTableMap::COL_ORG_ID, $this->org_id);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_SSS_NR)) {
            $criteria->add(CarePersonTableMap::COL_SSS_NR, $this->sss_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NAT_ID_NR)) {
            $criteria->add(CarePersonTableMap::COL_NAT_ID_NR, $this->nat_id_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_RELIGION)) {
            $criteria->add(CarePersonTableMap::COL_RELIGION, $this->religion);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_IS_FIRST_REG)) {
            $criteria->add(CarePersonTableMap::COL_IS_FIRST_REG, $this->is_first_reg);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_REGION)) {
            $criteria->add(CarePersonTableMap::COL_REGION, $this->region);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DISTRICT)) {
            $criteria->add(CarePersonTableMap::COL_DISTRICT, $this->district);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_WARD)) {
            $criteria->add(CarePersonTableMap::COL_WARD, $this->ward);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_MOTHER_PID)) {
            $criteria->add(CarePersonTableMap::COL_MOTHER_PID, $this->mother_pid);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_FATHER_PID)) {
            $criteria->add(CarePersonTableMap::COL_FATHER_PID, $this->father_pid);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CONTACT_PERSON)) {
            $criteria->add(CarePersonTableMap::COL_CONTACT_PERSON, $this->contact_person);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CONTACT_PID)) {
            $criteria->add(CarePersonTableMap::COL_CONTACT_PID, $this->contact_pid);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CONTACT_RELATION)) {
            $criteria->add(CarePersonTableMap::COL_CONTACT_RELATION, $this->contact_relation);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DEATH_DATE)) {
            $criteria->add(CarePersonTableMap::COL_DEATH_DATE, $this->death_date);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DEATH_ENCOUNTER_NR)) {
            $criteria->add(CarePersonTableMap::COL_DEATH_ENCOUNTER_NR, $this->death_encounter_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DEATH_CAUSE)) {
            $criteria->add(CarePersonTableMap::COL_DEATH_CAUSE, $this->death_cause);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DEATH_CAUSE_CODE)) {
            $criteria->add(CarePersonTableMap::COL_DEATH_CAUSE_CODE, $this->death_cause_code);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_DATE_UPDATE)) {
            $criteria->add(CarePersonTableMap::COL_DATE_UPDATE, $this->date_update);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_STATUS)) {
            $criteria->add(CarePersonTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_HISTORY)) {
            $criteria->add(CarePersonTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ALLERGY)) {
            $criteria->add(CarePersonTableMap::COL_ALLERGY, $this->allergy);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_MODIFY_ID)) {
            $criteria->add(CarePersonTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CarePersonTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CREATE_ID)) {
            $criteria->add(CarePersonTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_CREATE_TIME)) {
            $criteria->add(CarePersonTableMap::COL_CREATE_TIME, $this->create_time);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_ADDR_CITYTOWN_NAME)) {
            $criteria->add(CarePersonTableMap::COL_ADDR_CITYTOWN_NAME, $this->addr_citytown_name);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_IS_TRANSMIT2ERP)) {
            $criteria->add(CarePersonTableMap::COL_IS_TRANSMIT2ERP, $this->is_transmit2erp);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_ID)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_ID, $this->insurance_id);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_HEAD_PID)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_HEAD_PID, $this->insurance_head_pid);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_MEMBERSHIP_NR)) {
            $criteria->add(CarePersonTableMap::COL_MEMBERSHIP_NR, $this->membership_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_FORM_NR)) {
            $criteria->add(CarePersonTableMap::COL_FORM_NR, $this->form_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NHIF_NR)) {
            $criteria->add(CarePersonTableMap::COL_NHIF_NR, $this->nhif_nr);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_SILVER)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_SILVER, $this->insurance_silver);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_GOLD)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_GOLD, $this->insurance_gold);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_FRIEDKIN)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_FRIEDKIN, $this->insurance_friedkin);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_SELIAN_STUFF)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_SELIAN_STUFF, $this->insurance_selian_stuff);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_ADULTS)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_ADULTS, $this->insurance_premium_for_adults);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_CHILDS)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_CHILDS, $this->insurance_premium_for_childs);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_SENIOR)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_SENIOR, $this->insurance_premium_for_senior);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_COPAYMENT_OPD)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_COPAYMENT_OPD, $this->insurance_copayment_opd);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_COPAYMENT_IPD)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_COPAYMENT_IPD, $this->insurance_copayment_ipd);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_CEILING_BY_INDIVIDUAL)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_CEILING_BY_INDIVIDUAL, $this->insurance_ceiling_by_individual);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_CEILING_BY_FAMILY)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_CEILING_BY_FAMILY, $this->insurance_ceiling_by_family);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_CEILING_AMOUNT)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_CEILING_AMOUNT, $this->insurance_ceiling_amount);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_INSURANCE_CEILING_FOR_FAMILIES)) {
            $criteria->add(CarePersonTableMap::COL_INSURANCE_CEILING_FOR_FAMILIES, $this->insurance_ceiling_for_families);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_NATIONAL_ID)) {
            $criteria->add(CarePersonTableMap::COL_NATIONAL_ID, $this->national_id);
        }
        if ($this->isColumnModified(CarePersonTableMap::COL_EMPLOYEE_ID)) {
            $criteria->add(CarePersonTableMap::COL_EMPLOYEE_ID, $this->employee_id);
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
        $criteria = ChildCarePersonQuery::create();
        $criteria->add(CarePersonTableMap::COL_PID, $this->pid);

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
        $validPk = null !== $this->getPid();

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
        return $this->getPid();
    }

    /**
     * Generic method to set the primary key (pid column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getPid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CarePerson (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSelianPid($this->getSelianPid());
        $copyObj->setDateReg($this->getDateReg());
        $copyObj->setNameFirst($this->getNameFirst());
        $copyObj->setName2($this->getName2());
        $copyObj->setName3($this->getName3());
        $copyObj->setNameMiddle($this->getNameMiddle());
        $copyObj->setNameLast($this->getNameLast());
        $copyObj->setNameMaiden($this->getNameMaiden());
        $copyObj->setNameOthers($this->getNameOthers());
        $copyObj->setEducation($this->getEducation());
        $copyObj->setDateBirth($this->getDateBirth());
        $copyObj->setBloodGroup($this->getBloodGroup());
        $copyObj->setRh($this->getRh());
        $copyObj->setAddrStr($this->getAddrStr());
        $copyObj->setAddrStrNr($this->getAddrStrNr());
        $copyObj->setAddrZip($this->getAddrZip());
        $copyObj->setAddrCitytownNr($this->getAddrCitytownNr());
        $copyObj->setAddrIsValid($this->getAddrIsValid());
        $copyObj->setCitizenship($this->getCitizenship());
        $copyObj->setPhone1Code($this->getPhone1Code());
        $copyObj->setPhone1Nr($this->getPhone1Nr());
        $copyObj->setPhone2Code($this->getPhone2Code());
        $copyObj->setPhone2Nr($this->getPhone2Nr());
        $copyObj->setCellphone1Nr($this->getCellphone1Nr());
        $copyObj->setCellphone2Nr($this->getCellphone2Nr());
        $copyObj->setFax($this->getFax());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setCivilStatus($this->getCivilStatus());
        $copyObj->setSex($this->getSex());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setPhoto($this->getPhoto());
        $copyObj->setPhotoFilename($this->getPhotoFilename());
        $copyObj->setEthnicOrig($this->getEthnicOrig());
        $copyObj->setOrgId($this->getOrgId());
        $copyObj->setSssNr($this->getSssNr());
        $copyObj->setNatIdNr($this->getNatIdNr());
        $copyObj->setReligion($this->getReligion());
        $copyObj->setIsFirstReg($this->getIsFirstReg());
        $copyObj->setRegion($this->getRegion());
        $copyObj->setDistrict($this->getDistrict());
        $copyObj->setWard($this->getWard());
        $copyObj->setMotherPid($this->getMotherPid());
        $copyObj->setFatherPid($this->getFatherPid());
        $copyObj->setContactPerson($this->getContactPerson());
        $copyObj->setContactPid($this->getContactPid());
        $copyObj->setContactRelation($this->getContactRelation());
        $copyObj->setDeathDate($this->getDeathDate());
        $copyObj->setDeathEncounterNr($this->getDeathEncounterNr());
        $copyObj->setDeathCause($this->getDeathCause());
        $copyObj->setDeathCauseCode($this->getDeathCauseCode());
        $copyObj->setDateUpdate($this->getDateUpdate());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setAllergy($this->getAllergy());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        $copyObj->setAddrCitytownName($this->getAddrCitytownName());
        $copyObj->setIsTransmit2erp($this->getIsTransmit2erp());
        $copyObj->setInsuranceId($this->getInsuranceId());
        $copyObj->setInsuranceHeadPid($this->getInsuranceHeadPid());
        $copyObj->setMembershipNr($this->getMembershipNr());
        $copyObj->setFormNr($this->getFormNr());
        $copyObj->setNhifNr($this->getNhifNr());
        $copyObj->setInsuranceSilver($this->getInsuranceSilver());
        $copyObj->setInsuranceGold($this->getInsuranceGold());
        $copyObj->setInsuranceFriedkin($this->getInsuranceFriedkin());
        $copyObj->setInsuranceSelianStuff($this->getInsuranceSelianStuff());
        $copyObj->setInsurancePremiumForAdults($this->getInsurancePremiumForAdults());
        $copyObj->setInsurancePremiumForChilds($this->getInsurancePremiumForChilds());
        $copyObj->setInsurancePremiumForSenior($this->getInsurancePremiumForSenior());
        $copyObj->setInsuranceCopaymentOpd($this->getInsuranceCopaymentOpd());
        $copyObj->setInsuranceCopaymentIpd($this->getInsuranceCopaymentIpd());
        $copyObj->setInsuranceCeilingByIndividual($this->getInsuranceCeilingByIndividual());
        $copyObj->setInsuranceCeilingByFamily($this->getInsuranceCeilingByFamily());
        $copyObj->setInsuranceCeilingAmount($this->getInsuranceCeilingAmount());
        $copyObj->setInsuranceCeilingForFamilies($this->getInsuranceCeilingForFamilies());
        $copyObj->setNationalId($this->getNationalId());
        $copyObj->setEmployeeId($this->getEmployeeId());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setPid(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CarePerson Clone of current object.
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
        $this->pid = null;
        $this->selian_pid = null;
        $this->date_reg = null;
        $this->name_first = null;
        $this->name_2 = null;
        $this->name_3 = null;
        $this->name_middle = null;
        $this->name_last = null;
        $this->name_maiden = null;
        $this->name_others = null;
        $this->education = null;
        $this->date_birth = null;
        $this->blood_group = null;
        $this->rh = null;
        $this->addr_str = null;
        $this->addr_str_nr = null;
        $this->addr_zip = null;
        $this->addr_citytown_nr = null;
        $this->addr_is_valid = null;
        $this->citizenship = null;
        $this->phone_1_code = null;
        $this->phone_1_nr = null;
        $this->phone_2_code = null;
        $this->phone_2_nr = null;
        $this->cellphone_1_nr = null;
        $this->cellphone_2_nr = null;
        $this->fax = null;
        $this->email = null;
        $this->civil_status = null;
        $this->sex = null;
        $this->title = null;
        $this->photo = null;
        $this->photo_filename = null;
        $this->ethnic_orig = null;
        $this->org_id = null;
        $this->sss_nr = null;
        $this->nat_id_nr = null;
        $this->religion = null;
        $this->is_first_reg = null;
        $this->region = null;
        $this->district = null;
        $this->ward = null;
        $this->mother_pid = null;
        $this->father_pid = null;
        $this->contact_person = null;
        $this->contact_pid = null;
        $this->contact_relation = null;
        $this->death_date = null;
        $this->death_encounter_nr = null;
        $this->death_cause = null;
        $this->death_cause_code = null;
        $this->date_update = null;
        $this->status = null;
        $this->history = null;
        $this->allergy = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->create_id = null;
        $this->create_time = null;
        $this->addr_citytown_name = null;
        $this->is_transmit2erp = null;
        $this->insurance_id = null;
        $this->insurance_head_pid = null;
        $this->membership_nr = null;
        $this->form_nr = null;
        $this->nhif_nr = null;
        $this->insurance_silver = null;
        $this->insurance_gold = null;
        $this->insurance_friedkin = null;
        $this->insurance_selian_stuff = null;
        $this->insurance_premium_for_adults = null;
        $this->insurance_premium_for_childs = null;
        $this->insurance_premium_for_senior = null;
        $this->insurance_copayment_opd = null;
        $this->insurance_copayment_ipd = null;
        $this->insurance_ceiling_by_individual = null;
        $this->insurance_ceiling_by_family = null;
        $this->insurance_ceiling_amount = null;
        $this->insurance_ceiling_for_families = null;
        $this->national_id = null;
        $this->employee_id = null;
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
        return (string) $this->exportTo(CarePersonTableMap::DEFAULT_STRING_FORMAT);
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
