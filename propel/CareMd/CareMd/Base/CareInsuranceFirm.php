<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareInsuranceFirmQuery as ChildCareInsuranceFirmQuery;
use CareMd\CareMd\Map\CareInsuranceFirmTableMap;
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
 * Base class that represents a row from the 'care_insurance_firm' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareInsuranceFirm implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareInsuranceFirmTableMap';


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
     * The value for the firm_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $firm_id;

    /**
     * The value for the name field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $name;

    /**
     * The value for the iso_country_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $iso_country_id;

    /**
     * The value for the sub_area field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $sub_area;

    /**
     * The value for the type_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_nr;

    /**
     * The value for the addr field.
     *
     * @var        string
     */
    protected $addr;

    /**
     * The value for the addr_mail field.
     *
     * @var        string
     */
    protected $addr_mail;

    /**
     * The value for the addr_billing field.
     *
     * @var        string
     */
    protected $addr_billing;

    /**
     * The value for the addr_email field.
     *
     * @var        string
     */
    protected $addr_email;

    /**
     * The value for the phone_main field.
     *
     * @var        string
     */
    protected $phone_main;

    /**
     * The value for the phone_aux field.
     *
     * @var        string
     */
    protected $phone_aux;

    /**
     * The value for the fax_main field.
     *
     * @var        string
     */
    protected $fax_main;

    /**
     * The value for the fax_aux field.
     *
     * @var        string
     */
    protected $fax_aux;

    /**
     * The value for the contact_person field.
     *
     * @var        string
     */
    protected $contact_person;

    /**
     * The value for the contact_phone field.
     *
     * @var        string
     */
    protected $contact_phone;

    /**
     * The value for the contact_fax field.
     *
     * @var        string
     */
    protected $contact_fax;

    /**
     * The value for the contact_email field.
     *
     * @var        string
     */
    protected $contact_email;

    /**
     * The value for the use_frequency field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $use_frequency;

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
        $this->firm_id = '';
        $this->name = '';
        $this->iso_country_id = '';
        $this->sub_area = '';
        $this->type_nr = 0;
        $this->use_frequency = '0';
        $this->status = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareInsuranceFirm object.
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
     * Compares this with another <code>CareInsuranceFirm</code> instance.  If
     * <code>obj</code> is an instance of <code>CareInsuranceFirm</code>, delegates to
     * <code>equals(CareInsuranceFirm)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareInsuranceFirm The current object, for fluid interface
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
     * Get the [firm_id] column value.
     *
     * @return string
     */
    public function getFirmId()
    {
        return $this->firm_id;
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
     * Get the [iso_country_id] column value.
     *
     * @return string
     */
    public function getIsoCountryId()
    {
        return $this->iso_country_id;
    }

    /**
     * Get the [sub_area] column value.
     *
     * @return string
     */
    public function getSubArea()
    {
        return $this->sub_area;
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
     * Get the [addr] column value.
     *
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * Get the [addr_mail] column value.
     *
     * @return string
     */
    public function getAddrMail()
    {
        return $this->addr_mail;
    }

    /**
     * Get the [addr_billing] column value.
     *
     * @return string
     */
    public function getAddrBilling()
    {
        return $this->addr_billing;
    }

    /**
     * Get the [addr_email] column value.
     *
     * @return string
     */
    public function getAddrEmail()
    {
        return $this->addr_email;
    }

    /**
     * Get the [phone_main] column value.
     *
     * @return string
     */
    public function getPhoneMain()
    {
        return $this->phone_main;
    }

    /**
     * Get the [phone_aux] column value.
     *
     * @return string
     */
    public function getPhoneAux()
    {
        return $this->phone_aux;
    }

    /**
     * Get the [fax_main] column value.
     *
     * @return string
     */
    public function getFaxMain()
    {
        return $this->fax_main;
    }

    /**
     * Get the [fax_aux] column value.
     *
     * @return string
     */
    public function getFaxAux()
    {
        return $this->fax_aux;
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
     * Get the [contact_phone] column value.
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contact_phone;
    }

    /**
     * Get the [contact_fax] column value.
     *
     * @return string
     */
    public function getContactFax()
    {
        return $this->contact_fax;
    }

    /**
     * Get the [contact_email] column value.
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contact_email;
    }

    /**
     * Get the [use_frequency] column value.
     *
     * @return string
     */
    public function getUseFrequency()
    {
        return $this->use_frequency;
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
     * Set the value of [firm_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setFirmId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->firm_id !== $v) {
            $this->firm_id = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_FIRM_ID] = true;
        }

        return $this;
    } // setFirmId()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [iso_country_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setIsoCountryId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iso_country_id !== $v) {
            $this->iso_country_id = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_ISO_COUNTRY_ID] = true;
        }

        return $this;
    } // setIsoCountryId()

    /**
     * Set the value of [sub_area] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setSubArea($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sub_area !== $v) {
            $this->sub_area = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_SUB_AREA] = true;
        }

        return $this;
    } // setSubArea()

    /**
     * Set the value of [type_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setTypeNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->type_nr !== $v) {
            $this->type_nr = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_TYPE_NR] = true;
        }

        return $this;
    } // setTypeNr()

    /**
     * Set the value of [addr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setAddr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->addr !== $v) {
            $this->addr = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_ADDR] = true;
        }

        return $this;
    } // setAddr()

    /**
     * Set the value of [addr_mail] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setAddrMail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->addr_mail !== $v) {
            $this->addr_mail = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_ADDR_MAIL] = true;
        }

        return $this;
    } // setAddrMail()

    /**
     * Set the value of [addr_billing] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setAddrBilling($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->addr_billing !== $v) {
            $this->addr_billing = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_ADDR_BILLING] = true;
        }

        return $this;
    } // setAddrBilling()

    /**
     * Set the value of [addr_email] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setAddrEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->addr_email !== $v) {
            $this->addr_email = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_ADDR_EMAIL] = true;
        }

        return $this;
    } // setAddrEmail()

    /**
     * Set the value of [phone_main] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setPhoneMain($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone_main !== $v) {
            $this->phone_main = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_PHONE_MAIN] = true;
        }

        return $this;
    } // setPhoneMain()

    /**
     * Set the value of [phone_aux] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setPhoneAux($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone_aux !== $v) {
            $this->phone_aux = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_PHONE_AUX] = true;
        }

        return $this;
    } // setPhoneAux()

    /**
     * Set the value of [fax_main] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setFaxMain($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fax_main !== $v) {
            $this->fax_main = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_FAX_MAIN] = true;
        }

        return $this;
    } // setFaxMain()

    /**
     * Set the value of [fax_aux] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setFaxAux($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fax_aux !== $v) {
            $this->fax_aux = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_FAX_AUX] = true;
        }

        return $this;
    } // setFaxAux()

    /**
     * Set the value of [contact_person] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setContactPerson($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contact_person !== $v) {
            $this->contact_person = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_CONTACT_PERSON] = true;
        }

        return $this;
    } // setContactPerson()

    /**
     * Set the value of [contact_phone] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setContactPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contact_phone !== $v) {
            $this->contact_phone = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_CONTACT_PHONE] = true;
        }

        return $this;
    } // setContactPhone()

    /**
     * Set the value of [contact_fax] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setContactFax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contact_fax !== $v) {
            $this->contact_fax = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_CONTACT_FAX] = true;
        }

        return $this;
    } // setContactFax()

    /**
     * Set the value of [contact_email] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setContactEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contact_email !== $v) {
            $this->contact_email = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_CONTACT_EMAIL] = true;
        }

        return $this;
    } // setContactEmail()

    /**
     * Set the value of [use_frequency] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setUseFrequency($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->use_frequency !== $v) {
            $this->use_frequency = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_USE_FREQUENCY] = true;
        }

        return $this;
    } // setUseFrequency()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareInsuranceFirmTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareInsuranceFirmTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareInsuranceFirmTableMap::COL_CREATE_TIME] = true;
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
            if ($this->firm_id !== '') {
                return false;
            }

            if ($this->name !== '') {
                return false;
            }

            if ($this->iso_country_id !== '') {
                return false;
            }

            if ($this->sub_area !== '') {
                return false;
            }

            if ($this->type_nr !== 0) {
                return false;
            }

            if ($this->use_frequency !== '0') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareInsuranceFirmTableMap::translateFieldName('FirmId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->firm_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareInsuranceFirmTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareInsuranceFirmTableMap::translateFieldName('IsoCountryId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iso_country_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareInsuranceFirmTableMap::translateFieldName('SubArea', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sub_area = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareInsuranceFirmTableMap::translateFieldName('TypeNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->type_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareInsuranceFirmTableMap::translateFieldName('Addr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareInsuranceFirmTableMap::translateFieldName('AddrMail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_mail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareInsuranceFirmTableMap::translateFieldName('AddrBilling', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_billing = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareInsuranceFirmTableMap::translateFieldName('AddrEmail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->addr_email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareInsuranceFirmTableMap::translateFieldName('PhoneMain', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone_main = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareInsuranceFirmTableMap::translateFieldName('PhoneAux', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone_aux = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareInsuranceFirmTableMap::translateFieldName('FaxMain', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fax_main = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareInsuranceFirmTableMap::translateFieldName('FaxAux', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fax_aux = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareInsuranceFirmTableMap::translateFieldName('ContactPerson', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_person = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareInsuranceFirmTableMap::translateFieldName('ContactPhone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_phone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareInsuranceFirmTableMap::translateFieldName('ContactFax', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_fax = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareInsuranceFirmTableMap::translateFieldName('ContactEmail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareInsuranceFirmTableMap::translateFieldName('UseFrequency', TableMap::TYPE_PHPNAME, $indexType)];
            $this->use_frequency = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareInsuranceFirmTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareInsuranceFirmTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareInsuranceFirmTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareInsuranceFirmTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareInsuranceFirmTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareInsuranceFirmTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 24; // 24 = CareInsuranceFirmTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareInsuranceFirm'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareInsuranceFirmTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareInsuranceFirmQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareInsuranceFirm::setDeleted()
     * @see CareInsuranceFirm::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareInsuranceFirmTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareInsuranceFirmQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareInsuranceFirmTableMap::DATABASE_NAME);
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
                CareInsuranceFirmTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_FIRM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'firm_id';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_ISO_COUNTRY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'iso_country_id';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_SUB_AREA)) {
            $modifiedColumns[':p' . $index++]  = 'sub_area';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_TYPE_NR)) {
            $modifiedColumns[':p' . $index++]  = 'type_nr';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_ADDR)) {
            $modifiedColumns[':p' . $index++]  = 'addr';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_ADDR_MAIL)) {
            $modifiedColumns[':p' . $index++]  = 'addr_mail';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_ADDR_BILLING)) {
            $modifiedColumns[':p' . $index++]  = 'addr_billing';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_ADDR_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'addr_email';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_PHONE_MAIN)) {
            $modifiedColumns[':p' . $index++]  = 'phone_main';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_PHONE_AUX)) {
            $modifiedColumns[':p' . $index++]  = 'phone_aux';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_FAX_MAIN)) {
            $modifiedColumns[':p' . $index++]  = 'fax_main';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_FAX_AUX)) {
            $modifiedColumns[':p' . $index++]  = 'fax_aux';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CONTACT_PERSON)) {
            $modifiedColumns[':p' . $index++]  = 'contact_person';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CONTACT_PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'contact_phone';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CONTACT_FAX)) {
            $modifiedColumns[':p' . $index++]  = 'contact_fax';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CONTACT_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'contact_email';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_USE_FREQUENCY)) {
            $modifiedColumns[':p' . $index++]  = 'use_frequency';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_insurance_firm (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'firm_id':
                        $stmt->bindValue($identifier, $this->firm_id, PDO::PARAM_STR);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'iso_country_id':
                        $stmt->bindValue($identifier, $this->iso_country_id, PDO::PARAM_STR);
                        break;
                    case 'sub_area':
                        $stmt->bindValue($identifier, $this->sub_area, PDO::PARAM_STR);
                        break;
                    case 'type_nr':
                        $stmt->bindValue($identifier, $this->type_nr, PDO::PARAM_INT);
                        break;
                    case 'addr':
                        $stmt->bindValue($identifier, $this->addr, PDO::PARAM_STR);
                        break;
                    case 'addr_mail':
                        $stmt->bindValue($identifier, $this->addr_mail, PDO::PARAM_STR);
                        break;
                    case 'addr_billing':
                        $stmt->bindValue($identifier, $this->addr_billing, PDO::PARAM_STR);
                        break;
                    case 'addr_email':
                        $stmt->bindValue($identifier, $this->addr_email, PDO::PARAM_STR);
                        break;
                    case 'phone_main':
                        $stmt->bindValue($identifier, $this->phone_main, PDO::PARAM_STR);
                        break;
                    case 'phone_aux':
                        $stmt->bindValue($identifier, $this->phone_aux, PDO::PARAM_STR);
                        break;
                    case 'fax_main':
                        $stmt->bindValue($identifier, $this->fax_main, PDO::PARAM_STR);
                        break;
                    case 'fax_aux':
                        $stmt->bindValue($identifier, $this->fax_aux, PDO::PARAM_STR);
                        break;
                    case 'contact_person':
                        $stmt->bindValue($identifier, $this->contact_person, PDO::PARAM_STR);
                        break;
                    case 'contact_phone':
                        $stmt->bindValue($identifier, $this->contact_phone, PDO::PARAM_STR);
                        break;
                    case 'contact_fax':
                        $stmt->bindValue($identifier, $this->contact_fax, PDO::PARAM_STR);
                        break;
                    case 'contact_email':
                        $stmt->bindValue($identifier, $this->contact_email, PDO::PARAM_STR);
                        break;
                    case 'use_frequency':
                        $stmt->bindValue($identifier, $this->use_frequency, PDO::PARAM_INT);
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
        $pos = CareInsuranceFirmTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getFirmId();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getIsoCountryId();
                break;
            case 3:
                return $this->getSubArea();
                break;
            case 4:
                return $this->getTypeNr();
                break;
            case 5:
                return $this->getAddr();
                break;
            case 6:
                return $this->getAddrMail();
                break;
            case 7:
                return $this->getAddrBilling();
                break;
            case 8:
                return $this->getAddrEmail();
                break;
            case 9:
                return $this->getPhoneMain();
                break;
            case 10:
                return $this->getPhoneAux();
                break;
            case 11:
                return $this->getFaxMain();
                break;
            case 12:
                return $this->getFaxAux();
                break;
            case 13:
                return $this->getContactPerson();
                break;
            case 14:
                return $this->getContactPhone();
                break;
            case 15:
                return $this->getContactFax();
                break;
            case 16:
                return $this->getContactEmail();
                break;
            case 17:
                return $this->getUseFrequency();
                break;
            case 18:
                return $this->getStatus();
                break;
            case 19:
                return $this->getHistory();
                break;
            case 20:
                return $this->getModifyId();
                break;
            case 21:
                return $this->getModifyTime();
                break;
            case 22:
                return $this->getCreateId();
                break;
            case 23:
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

        if (isset($alreadyDumpedObjects['CareInsuranceFirm'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareInsuranceFirm'][$this->hashCode()] = true;
        $keys = CareInsuranceFirmTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFirmId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getIsoCountryId(),
            $keys[3] => $this->getSubArea(),
            $keys[4] => $this->getTypeNr(),
            $keys[5] => $this->getAddr(),
            $keys[6] => $this->getAddrMail(),
            $keys[7] => $this->getAddrBilling(),
            $keys[8] => $this->getAddrEmail(),
            $keys[9] => $this->getPhoneMain(),
            $keys[10] => $this->getPhoneAux(),
            $keys[11] => $this->getFaxMain(),
            $keys[12] => $this->getFaxAux(),
            $keys[13] => $this->getContactPerson(),
            $keys[14] => $this->getContactPhone(),
            $keys[15] => $this->getContactFax(),
            $keys[16] => $this->getContactEmail(),
            $keys[17] => $this->getUseFrequency(),
            $keys[18] => $this->getStatus(),
            $keys[19] => $this->getHistory(),
            $keys[20] => $this->getModifyId(),
            $keys[21] => $this->getModifyTime(),
            $keys[22] => $this->getCreateId(),
            $keys[23] => $this->getCreateTime(),
        );
        if ($result[$keys[21]] instanceof \DateTimeInterface) {
            $result[$keys[21]] = $result[$keys[21]]->format('c');
        }

        if ($result[$keys[23]] instanceof \DateTimeInterface) {
            $result[$keys[23]] = $result[$keys[23]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareInsuranceFirm
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareInsuranceFirmTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareInsuranceFirm
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setFirmId($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setIsoCountryId($value);
                break;
            case 3:
                $this->setSubArea($value);
                break;
            case 4:
                $this->setTypeNr($value);
                break;
            case 5:
                $this->setAddr($value);
                break;
            case 6:
                $this->setAddrMail($value);
                break;
            case 7:
                $this->setAddrBilling($value);
                break;
            case 8:
                $this->setAddrEmail($value);
                break;
            case 9:
                $this->setPhoneMain($value);
                break;
            case 10:
                $this->setPhoneAux($value);
                break;
            case 11:
                $this->setFaxMain($value);
                break;
            case 12:
                $this->setFaxAux($value);
                break;
            case 13:
                $this->setContactPerson($value);
                break;
            case 14:
                $this->setContactPhone($value);
                break;
            case 15:
                $this->setContactFax($value);
                break;
            case 16:
                $this->setContactEmail($value);
                break;
            case 17:
                $this->setUseFrequency($value);
                break;
            case 18:
                $this->setStatus($value);
                break;
            case 19:
                $this->setHistory($value);
                break;
            case 20:
                $this->setModifyId($value);
                break;
            case 21:
                $this->setModifyTime($value);
                break;
            case 22:
                $this->setCreateId($value);
                break;
            case 23:
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
        $keys = CareInsuranceFirmTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setFirmId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setName($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIsoCountryId($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setSubArea($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setTypeNr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setAddr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setAddrMail($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setAddrBilling($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setAddrEmail($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPhoneMain($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPhoneAux($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setFaxMain($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setFaxAux($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setContactPerson($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setContactPhone($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setContactFax($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setContactEmail($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setUseFrequency($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setStatus($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setHistory($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setModifyId($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setModifyTime($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setCreateId($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setCreateTime($arr[$keys[23]]);
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
     * @return $this|\CareMd\CareMd\CareInsuranceFirm The current object, for fluid interface
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
        $criteria = new Criteria(CareInsuranceFirmTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_FIRM_ID)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_FIRM_ID, $this->firm_id);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_NAME)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_ISO_COUNTRY_ID)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_ISO_COUNTRY_ID, $this->iso_country_id);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_SUB_AREA)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_SUB_AREA, $this->sub_area);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_TYPE_NR)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_TYPE_NR, $this->type_nr);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_ADDR)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_ADDR, $this->addr);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_ADDR_MAIL)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_ADDR_MAIL, $this->addr_mail);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_ADDR_BILLING)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_ADDR_BILLING, $this->addr_billing);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_ADDR_EMAIL)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_ADDR_EMAIL, $this->addr_email);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_PHONE_MAIN)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_PHONE_MAIN, $this->phone_main);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_PHONE_AUX)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_PHONE_AUX, $this->phone_aux);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_FAX_MAIN)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_FAX_MAIN, $this->fax_main);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_FAX_AUX)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_FAX_AUX, $this->fax_aux);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CONTACT_PERSON)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_CONTACT_PERSON, $this->contact_person);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CONTACT_PHONE)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_CONTACT_PHONE, $this->contact_phone);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CONTACT_FAX)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_CONTACT_FAX, $this->contact_fax);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CONTACT_EMAIL)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_CONTACT_EMAIL, $this->contact_email);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_USE_FREQUENCY)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_USE_FREQUENCY, $this->use_frequency);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_STATUS)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_HISTORY)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CREATE_ID)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareInsuranceFirmTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareInsuranceFirmTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareInsuranceFirmQuery::create();
        $criteria->add(CareInsuranceFirmTableMap::COL_FIRM_ID, $this->firm_id);

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
        $validPk = null !== $this->getFirmId();

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
        return $this->getFirmId();
    }

    /**
     * Generic method to set the primary key (firm_id column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setFirmId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getFirmId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareInsuranceFirm (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFirmId($this->getFirmId());
        $copyObj->setName($this->getName());
        $copyObj->setIsoCountryId($this->getIsoCountryId());
        $copyObj->setSubArea($this->getSubArea());
        $copyObj->setTypeNr($this->getTypeNr());
        $copyObj->setAddr($this->getAddr());
        $copyObj->setAddrMail($this->getAddrMail());
        $copyObj->setAddrBilling($this->getAddrBilling());
        $copyObj->setAddrEmail($this->getAddrEmail());
        $copyObj->setPhoneMain($this->getPhoneMain());
        $copyObj->setPhoneAux($this->getPhoneAux());
        $copyObj->setFaxMain($this->getFaxMain());
        $copyObj->setFaxAux($this->getFaxAux());
        $copyObj->setContactPerson($this->getContactPerson());
        $copyObj->setContactPhone($this->getContactPhone());
        $copyObj->setContactFax($this->getContactFax());
        $copyObj->setContactEmail($this->getContactEmail());
        $copyObj->setUseFrequency($this->getUseFrequency());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
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
     * @return \CareMd\CareMd\CareInsuranceFirm Clone of current object.
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
        $this->firm_id = null;
        $this->name = null;
        $this->iso_country_id = null;
        $this->sub_area = null;
        $this->type_nr = null;
        $this->addr = null;
        $this->addr_mail = null;
        $this->addr_billing = null;
        $this->addr_email = null;
        $this->phone_main = null;
        $this->phone_aux = null;
        $this->fax_main = null;
        $this->fax_aux = null;
        $this->contact_person = null;
        $this->contact_phone = null;
        $this->contact_fax = null;
        $this->contact_email = null;
        $this->use_frequency = null;
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
        return (string) $this->exportTo(CareInsuranceFirmTableMap::DEFAULT_STRING_FORMAT);
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
