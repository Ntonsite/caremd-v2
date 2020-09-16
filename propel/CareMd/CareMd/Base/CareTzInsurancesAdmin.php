<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzInsurancesAdminQuery as ChildCareTzInsurancesAdminQuery;
use CareMd\CareMd\Map\CareTzInsurancesAdminTableMap;
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

/**
 * Base class that represents a row from the 'care_tz_insurances_admin' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzInsurancesAdmin implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzInsurancesAdminTableMap';


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
     * The value for the insurance_id field.
     *
     * @var        int
     */
    protected $insurance_id;

    /**
     * The value for the insurer field.
     *
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $insurer;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * The value for the max_pay field.
     *
     * @var        int
     */
    protected $max_pay;

    /**
     * The value for the deleted field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $deleted;

    /**
     * The value for the creation field.
     *
     * @var        string
     */
    protected $creation;

    /**
     * The value for the id_insurer_hist field.
     *
     * @var        string
     */
    protected $id_insurer_hist;

    /**
     * The value for the name_hist field.
     *
     * @var        string
     */
    protected $name_hist;

    /**
     * The value for the max_pay_hist field.
     *
     * @var        string
     */
    protected $max_pay_hist;

    /**
     * The value for the deleted_hist field.
     *
     * @var        string
     */
    protected $deleted_hist;

    /**
     * The value for the contact_person field.
     *
     * @var        string
     */
    protected $contact_person;

    /**
     * The value for the contact_person_hist field.
     *
     * @var        string
     */
    protected $contact_person_hist;

    /**
     * The value for the po_box field.
     *
     * @var        string
     */
    protected $po_box;

    /**
     * The value for the po_box_hist field.
     *
     * @var        string
     */
    protected $po_box_hist;

    /**
     * The value for the city field.
     *
     * @var        string
     */
    protected $city;

    /**
     * The value for the city_hist field.
     *
     * @var        string
     */
    protected $city_hist;

    /**
     * The value for the phone field.
     *
     * @var        string
     */
    protected $phone;

    /**
     * The value for the phone_hist field.
     *
     * @var        string
     */
    protected $phone_hist;

    /**
     * The value for the email field.
     *
     * @var        string
     */
    protected $email;

    /**
     * The value for the email_hist field.
     *
     * @var        string
     */
    protected $email_hist;

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
        $this->insurer = -1;
        $this->deleted = false;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTzInsurancesAdmin object.
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
     * Compares this with another <code>CareTzInsurancesAdmin</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzInsurancesAdmin</code>, delegates to
     * <code>equals(CareTzInsurancesAdmin)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzInsurancesAdmin The current object, for fluid interface
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
     * Get the [insurance_id] column value.
     *
     * @return int
     */
    public function getInsuranceId()
    {
        return $this->insurance_id;
    }

    /**
     * Get the [insurer] column value.
     *
     * @return int
     */
    public function getInsurer()
    {
        return $this->insurer;
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
     * Get the [max_pay] column value.
     *
     * @return int
     */
    public function getMaxPay()
    {
        return $this->max_pay;
    }

    /**
     * Get the [deleted] column value.
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Get the [creation] column value.
     *
     * @return string
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Get the [id_insurer_hist] column value.
     *
     * @return string
     */
    public function getIdInsurerHist()
    {
        return $this->id_insurer_hist;
    }

    /**
     * Get the [name_hist] column value.
     *
     * @return string
     */
    public function getNameHist()
    {
        return $this->name_hist;
    }

    /**
     * Get the [max_pay_hist] column value.
     *
     * @return string
     */
    public function getMaxPayHist()
    {
        return $this->max_pay_hist;
    }

    /**
     * Get the [deleted_hist] column value.
     *
     * @return string
     */
    public function getDeletedHist()
    {
        return $this->deleted_hist;
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
     * Get the [contact_person_hist] column value.
     *
     * @return string
     */
    public function getContactPersonHist()
    {
        return $this->contact_person_hist;
    }

    /**
     * Get the [po_box] column value.
     *
     * @return string
     */
    public function getPoBox()
    {
        return $this->po_box;
    }

    /**
     * Get the [po_box_hist] column value.
     *
     * @return string
     */
    public function getPoBoxHist()
    {
        return $this->po_box_hist;
    }

    /**
     * Get the [city] column value.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get the [city_hist] column value.
     *
     * @return string
     */
    public function getCityHist()
    {
        return $this->city_hist;
    }

    /**
     * Get the [phone] column value.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get the [phone_hist] column value.
     *
     * @return string
     */
    public function getPhoneHist()
    {
        return $this->phone_hist;
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
     * Get the [email_hist] column value.
     *
     * @return string
     */
    public function getEmailHist()
    {
        return $this->email_hist;
    }

    /**
     * Set the value of [insurance_id] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setInsuranceId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurance_id !== $v) {
            $this->insurance_id = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_INSURANCE_ID] = true;
        }

        return $this;
    } // setInsuranceId()

    /**
     * Set the value of [insurer] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setInsurer($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insurer !== $v) {
            $this->insurer = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_INSURER] = true;
        }

        return $this;
    } // setInsurer()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [max_pay] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setMaxPay($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->max_pay !== $v) {
            $this->max_pay = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_MAX_PAY] = true;
        }

        return $this;
    } // setMaxPay()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setDeleted($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->deleted !== $v) {
            $this->deleted = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_DELETED] = true;
        }

        return $this;
    } // setDeleted()

    /**
     * Set the value of [creation] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setCreation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->creation !== $v) {
            $this->creation = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_CREATION] = true;
        }

        return $this;
    } // setCreation()

    /**
     * Set the value of [id_insurer_hist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setIdInsurerHist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->id_insurer_hist !== $v) {
            $this->id_insurer_hist = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_ID_INSURER_HIST] = true;
        }

        return $this;
    } // setIdInsurerHist()

    /**
     * Set the value of [name_hist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setNameHist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name_hist !== $v) {
            $this->name_hist = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_NAME_HIST] = true;
        }

        return $this;
    } // setNameHist()

    /**
     * Set the value of [max_pay_hist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setMaxPayHist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->max_pay_hist !== $v) {
            $this->max_pay_hist = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_MAX_PAY_HIST] = true;
        }

        return $this;
    } // setMaxPayHist()

    /**
     * Set the value of [deleted_hist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setDeletedHist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->deleted_hist !== $v) {
            $this->deleted_hist = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_DELETED_HIST] = true;
        }

        return $this;
    } // setDeletedHist()

    /**
     * Set the value of [contact_person] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setContactPerson($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contact_person !== $v) {
            $this->contact_person = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON] = true;
        }

        return $this;
    } // setContactPerson()

    /**
     * Set the value of [contact_person_hist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setContactPersonHist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contact_person_hist !== $v) {
            $this->contact_person_hist = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON_HIST] = true;
        }

        return $this;
    } // setContactPersonHist()

    /**
     * Set the value of [po_box] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setPoBox($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->po_box !== $v) {
            $this->po_box = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_PO_BOX] = true;
        }

        return $this;
    } // setPoBox()

    /**
     * Set the value of [po_box_hist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setPoBoxHist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->po_box_hist !== $v) {
            $this->po_box_hist = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_PO_BOX_HIST] = true;
        }

        return $this;
    } // setPoBoxHist()

    /**
     * Set the value of [city] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_CITY] = true;
        }

        return $this;
    } // setCity()

    /**
     * Set the value of [city_hist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setCityHist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->city_hist !== $v) {
            $this->city_hist = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_CITY_HIST] = true;
        }

        return $this;
    } // setCityHist()

    /**
     * Set the value of [phone] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone !== $v) {
            $this->phone = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_PHONE] = true;
        }

        return $this;
    } // setPhone()

    /**
     * Set the value of [phone_hist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setPhoneHist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone_hist !== $v) {
            $this->phone_hist = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_PHONE_HIST] = true;
        }

        return $this;
    } // setPhoneHist()

    /**
     * Set the value of [email] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_EMAIL] = true;
        }

        return $this;
    } // setEmail()

    /**
     * Set the value of [email_hist] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object (for fluent API support)
     */
    public function setEmailHist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email_hist !== $v) {
            $this->email_hist = $v;
            $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_EMAIL_HIST] = true;
        }

        return $this;
    } // setEmailHist()

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
            if ($this->insurer !== -1) {
                return false;
            }

            if ($this->deleted !== false) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('InsuranceId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('Insurer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurer = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('MaxPay', TableMap::TYPE_PHPNAME, $indexType)];
            $this->max_pay = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('Deleted', TableMap::TYPE_PHPNAME, $indexType)];
            $this->deleted = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('Creation', TableMap::TYPE_PHPNAME, $indexType)];
            $this->creation = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('IdInsurerHist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_insurer_hist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('NameHist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name_hist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('MaxPayHist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->max_pay_hist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('DeletedHist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->deleted_hist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('ContactPerson', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_person = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('ContactPersonHist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact_person_hist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('PoBox', TableMap::TYPE_PHPNAME, $indexType)];
            $this->po_box = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('PoBoxHist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->po_box_hist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('City', TableMap::TYPE_PHPNAME, $indexType)];
            $this->city = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('CityHist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->city_hist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('Phone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('PhoneHist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone_hist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTzInsurancesAdminTableMap::translateFieldName('EmailHist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email_hist = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 20; // 20 = CareTzInsurancesAdminTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzInsurancesAdmin'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzInsurancesAdminTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzInsurancesAdminQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzInsurancesAdmin::setDeleted()
     * @see CareTzInsurancesAdmin::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsurancesAdminTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzInsurancesAdminQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsurancesAdminTableMap::DATABASE_NAME);
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
                CareTzInsurancesAdminTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzInsurancesAdminTableMap::COL_INSURANCE_ID] = true;
        if (null !== $this->insurance_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzInsurancesAdminTableMap::COL_INSURANCE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_ID';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_INSURER)) {
            $modifiedColumns[':p' . $index++]  = 'insurer';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_MAX_PAY)) {
            $modifiedColumns[':p' . $index++]  = 'max_pay';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_DELETED)) {
            $modifiedColumns[':p' . $index++]  = 'deleted';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_CREATION)) {
            $modifiedColumns[':p' . $index++]  = 'creation';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_ID_INSURER_HIST)) {
            $modifiedColumns[':p' . $index++]  = 'id_insurer_hist';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_NAME_HIST)) {
            $modifiedColumns[':p' . $index++]  = 'name_hist';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_MAX_PAY_HIST)) {
            $modifiedColumns[':p' . $index++]  = 'max_pay_hist';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_DELETED_HIST)) {
            $modifiedColumns[':p' . $index++]  = 'deleted_hist';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON)) {
            $modifiedColumns[':p' . $index++]  = 'contact_person';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON_HIST)) {
            $modifiedColumns[':p' . $index++]  = 'contact_person_hist';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_PO_BOX)) {
            $modifiedColumns[':p' . $index++]  = 'po_box';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_PO_BOX_HIST)) {
            $modifiedColumns[':p' . $index++]  = 'po_box_hist';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_CITY)) {
            $modifiedColumns[':p' . $index++]  = 'city';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_CITY_HIST)) {
            $modifiedColumns[':p' . $index++]  = 'city_hist';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'phone';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_PHONE_HIST)) {
            $modifiedColumns[':p' . $index++]  = 'phone_hist';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'email';
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_EMAIL_HIST)) {
            $modifiedColumns[':p' . $index++]  = 'email_hist';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_insurances_admin (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'insurance_ID':
                        $stmt->bindValue($identifier, $this->insurance_id, PDO::PARAM_INT);
                        break;
                    case 'insurer':
                        $stmt->bindValue($identifier, $this->insurer, PDO::PARAM_INT);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'max_pay':
                        $stmt->bindValue($identifier, $this->max_pay, PDO::PARAM_INT);
                        break;
                    case 'deleted':
                        $stmt->bindValue($identifier, (int) $this->deleted, PDO::PARAM_INT);
                        break;
                    case 'creation':
                        $stmt->bindValue($identifier, $this->creation, PDO::PARAM_STR);
                        break;
                    case 'id_insurer_hist':
                        $stmt->bindValue($identifier, $this->id_insurer_hist, PDO::PARAM_STR);
                        break;
                    case 'name_hist':
                        $stmt->bindValue($identifier, $this->name_hist, PDO::PARAM_STR);
                        break;
                    case 'max_pay_hist':
                        $stmt->bindValue($identifier, $this->max_pay_hist, PDO::PARAM_STR);
                        break;
                    case 'deleted_hist':
                        $stmt->bindValue($identifier, $this->deleted_hist, PDO::PARAM_STR);
                        break;
                    case 'contact_person':
                        $stmt->bindValue($identifier, $this->contact_person, PDO::PARAM_STR);
                        break;
                    case 'contact_person_hist':
                        $stmt->bindValue($identifier, $this->contact_person_hist, PDO::PARAM_STR);
                        break;
                    case 'po_box':
                        $stmt->bindValue($identifier, $this->po_box, PDO::PARAM_STR);
                        break;
                    case 'po_box_hist':
                        $stmt->bindValue($identifier, $this->po_box_hist, PDO::PARAM_STR);
                        break;
                    case 'city':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case 'city_hist':
                        $stmt->bindValue($identifier, $this->city_hist, PDO::PARAM_STR);
                        break;
                    case 'phone':
                        $stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
                        break;
                    case 'phone_hist':
                        $stmt->bindValue($identifier, $this->phone_hist, PDO::PARAM_STR);
                        break;
                    case 'email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case 'email_hist':
                        $stmt->bindValue($identifier, $this->email_hist, PDO::PARAM_STR);
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
        $this->setInsuranceId($pk);

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
        $pos = CareTzInsurancesAdminTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInsuranceId();
                break;
            case 1:
                return $this->getInsurer();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getMaxPay();
                break;
            case 4:
                return $this->getDeleted();
                break;
            case 5:
                return $this->getCreation();
                break;
            case 6:
                return $this->getIdInsurerHist();
                break;
            case 7:
                return $this->getNameHist();
                break;
            case 8:
                return $this->getMaxPayHist();
                break;
            case 9:
                return $this->getDeletedHist();
                break;
            case 10:
                return $this->getContactPerson();
                break;
            case 11:
                return $this->getContactPersonHist();
                break;
            case 12:
                return $this->getPoBox();
                break;
            case 13:
                return $this->getPoBoxHist();
                break;
            case 14:
                return $this->getCity();
                break;
            case 15:
                return $this->getCityHist();
                break;
            case 16:
                return $this->getPhone();
                break;
            case 17:
                return $this->getPhoneHist();
                break;
            case 18:
                return $this->getEmail();
                break;
            case 19:
                return $this->getEmailHist();
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

        if (isset($alreadyDumpedObjects['CareTzInsurancesAdmin'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzInsurancesAdmin'][$this->hashCode()] = true;
        $keys = CareTzInsurancesAdminTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInsuranceId(),
            $keys[1] => $this->getInsurer(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getMaxPay(),
            $keys[4] => $this->getDeleted(),
            $keys[5] => $this->getCreation(),
            $keys[6] => $this->getIdInsurerHist(),
            $keys[7] => $this->getNameHist(),
            $keys[8] => $this->getMaxPayHist(),
            $keys[9] => $this->getDeletedHist(),
            $keys[10] => $this->getContactPerson(),
            $keys[11] => $this->getContactPersonHist(),
            $keys[12] => $this->getPoBox(),
            $keys[13] => $this->getPoBoxHist(),
            $keys[14] => $this->getCity(),
            $keys[15] => $this->getCityHist(),
            $keys[16] => $this->getPhone(),
            $keys[17] => $this->getPhoneHist(),
            $keys[18] => $this->getEmail(),
            $keys[19] => $this->getEmailHist(),
        );
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
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzInsurancesAdminTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInsuranceId($value);
                break;
            case 1:
                $this->setInsurer($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setMaxPay($value);
                break;
            case 4:
                $this->setDeleted($value);
                break;
            case 5:
                $this->setCreation($value);
                break;
            case 6:
                $this->setIdInsurerHist($value);
                break;
            case 7:
                $this->setNameHist($value);
                break;
            case 8:
                $this->setMaxPayHist($value);
                break;
            case 9:
                $this->setDeletedHist($value);
                break;
            case 10:
                $this->setContactPerson($value);
                break;
            case 11:
                $this->setContactPersonHist($value);
                break;
            case 12:
                $this->setPoBox($value);
                break;
            case 13:
                $this->setPoBoxHist($value);
                break;
            case 14:
                $this->setCity($value);
                break;
            case 15:
                $this->setCityHist($value);
                break;
            case 16:
                $this->setPhone($value);
                break;
            case 17:
                $this->setPhoneHist($value);
                break;
            case 18:
                $this->setEmail($value);
                break;
            case 19:
                $this->setEmailHist($value);
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
        $keys = CareTzInsurancesAdminTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInsuranceId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setInsurer($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setName($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setMaxPay($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDeleted($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setCreation($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIdInsurerHist($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setNameHist($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setMaxPayHist($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setDeletedHist($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setContactPerson($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setContactPersonHist($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPoBox($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setPoBoxHist($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setCity($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCityHist($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setPhone($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPhoneHist($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setEmail($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setEmailHist($arr[$keys[19]]);
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
     * @return $this|\CareMd\CareMd\CareTzInsurancesAdmin The current object, for fluid interface
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
        $criteria = new Criteria(CareTzInsurancesAdminTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID, $this->insurance_id);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_INSURER)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_INSURER, $this->insurer);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_NAME)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_MAX_PAY)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_MAX_PAY, $this->max_pay);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_DELETED)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_DELETED, $this->deleted);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_CREATION)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_CREATION, $this->creation);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_ID_INSURER_HIST)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_ID_INSURER_HIST, $this->id_insurer_hist);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_NAME_HIST)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_NAME_HIST, $this->name_hist);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_MAX_PAY_HIST)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_MAX_PAY_HIST, $this->max_pay_hist);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_DELETED_HIST)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_DELETED_HIST, $this->deleted_hist);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON, $this->contact_person);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON_HIST)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON_HIST, $this->contact_person_hist);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_PO_BOX)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_PO_BOX, $this->po_box);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_PO_BOX_HIST)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_PO_BOX_HIST, $this->po_box_hist);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_CITY)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_CITY, $this->city);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_CITY_HIST)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_CITY_HIST, $this->city_hist);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_PHONE)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_PHONE, $this->phone);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_PHONE_HIST)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_PHONE_HIST, $this->phone_hist);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_EMAIL)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_EMAIL, $this->email);
        }
        if ($this->isColumnModified(CareTzInsurancesAdminTableMap::COL_EMAIL_HIST)) {
            $criteria->add(CareTzInsurancesAdminTableMap::COL_EMAIL_HIST, $this->email_hist);
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
        $criteria = ChildCareTzInsurancesAdminQuery::create();
        $criteria->add(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID, $this->insurance_id);

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
        $validPk = null !== $this->getInsuranceId();

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
        return $this->getInsuranceId();
    }

    /**
     * Generic method to set the primary key (insurance_id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setInsuranceId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getInsuranceId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzInsurancesAdmin (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInsurer($this->getInsurer());
        $copyObj->setName($this->getName());
        $copyObj->setMaxPay($this->getMaxPay());
        $copyObj->setDeleted($this->getDeleted());
        $copyObj->setCreation($this->getCreation());
        $copyObj->setIdInsurerHist($this->getIdInsurerHist());
        $copyObj->setNameHist($this->getNameHist());
        $copyObj->setMaxPayHist($this->getMaxPayHist());
        $copyObj->setDeletedHist($this->getDeletedHist());
        $copyObj->setContactPerson($this->getContactPerson());
        $copyObj->setContactPersonHist($this->getContactPersonHist());
        $copyObj->setPoBox($this->getPoBox());
        $copyObj->setPoBoxHist($this->getPoBoxHist());
        $copyObj->setCity($this->getCity());
        $copyObj->setCityHist($this->getCityHist());
        $copyObj->setPhone($this->getPhone());
        $copyObj->setPhoneHist($this->getPhoneHist());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setEmailHist($this->getEmailHist());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setInsuranceId(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareTzInsurancesAdmin Clone of current object.
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
        $this->insurance_id = null;
        $this->insurer = null;
        $this->name = null;
        $this->max_pay = null;
        $this->deleted = null;
        $this->creation = null;
        $this->id_insurer_hist = null;
        $this->name_hist = null;
        $this->max_pay_hist = null;
        $this->deleted_hist = null;
        $this->contact_person = null;
        $this->contact_person_hist = null;
        $this->po_box = null;
        $this->po_box_hist = null;
        $this->city = null;
        $this->city_hist = null;
        $this->phone = null;
        $this->phone_hist = null;
        $this->email = null;
        $this->email_hist = null;
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
        return (string) $this->exportTo(CareTzInsurancesAdminTableMap::DEFAULT_STRING_FORMAT);
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
