<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzBillingElemQuery as ChildCareTzBillingElemQuery;
use CareMd\CareMd\Map\CareTzBillingElemTableMap;
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
 * Base class that represents a row from the 'care_tz_billing_elem' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzBillingElem implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzBillingElemTableMap';


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
     * @var        string
     */
    protected $id;

    /**
     * The value for the nr field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $nr;

    /**
     * The value for the date_change field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $date_change;

    /**
     * The value for the is_labtest field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_labtest;

    /**
     * The value for the is_medicine field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_medicine;

    /**
     * The value for the is_radio_test field.
     *
     * @var        int
     */
    protected $is_radio_test;

    /**
     * The value for the is_comment field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_comment;

    /**
     * The value for the is_paid field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_paid;

    /**
     * The value for the amount field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $amount;

    /**
     * The value for the amount_doc field.
     *
     * @var        string
     */
    protected $amount_doc;

    /**
     * The value for the times_per_day field.
     *
     * @var        int
     */
    protected $times_per_day;

    /**
     * The value for the days field.
     *
     * @var        int
     */
    protected $days;

    /**
     * The value for the price field.
     *
     * @var        string
     */
    protected $price;

    /**
     * The value for the materialcost field.
     *
     * @var        double
     */
    protected $materialcost;

    /**
     * The value for the bank_ref field.
     *
     * @var        string
     */
    protected $bank_ref;

    /**
     * The value for the balanced_insurance field.
     *
     * @var        string
     */
    protected $balanced_insurance;

    /**
     * The value for the insurance_id field.
     *
     * @var        string
     */
    protected $insurance_id;

    /**
     * The value for the description field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $description;

    /**
     * The value for the notes field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $notes;

    /**
     * The value for the item_number field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $item_number;

    /**
     * The value for the prescriptions_nr field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $prescriptions_nr;

    /**
     * The value for the sub_store field.
     *
     * @var        string
     */
    protected $sub_store;

    /**
     * The value for the is_deposit_item field.
     *
     * @var        int
     */
    protected $is_deposit_item;

    /**
     * The value for the user_id field.
     *
     * @var        string
     */
    protected $user_id;

    /**
     * The value for the current_dept_nr field.
     *
     * @var        int
     */
    protected $current_dept_nr;

    /**
     * The value for the current_ward_nr field.
     *
     * @var        int
     */
    protected $current_ward_nr;

    /**
     * The value for the encounter_class_nr field.
     *
     * @var        int
     */
    protected $encounter_class_nr;

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
        $this->nr = '0';
        $this->date_change = '0';
        $this->is_labtest = 0;
        $this->is_medicine = 0;
        $this->is_comment = 0;
        $this->is_paid = 0;
        $this->amount = '0';
        $this->description = '';
        $this->notes = '';
        $this->item_number = '0';
        $this->prescriptions_nr = '0';
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTzBillingElem object.
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
     * Compares this with another <code>CareTzBillingElem</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzBillingElem</code>, delegates to
     * <code>equals(CareTzBillingElem)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzBillingElem The current object, for fluid interface
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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [nr] column value.
     *
     * @return string
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Get the [date_change] column value.
     *
     * @return string
     */
    public function getDateChange()
    {
        return $this->date_change;
    }

    /**
     * Get the [is_labtest] column value.
     *
     * @return int
     */
    public function getIsLabtest()
    {
        return $this->is_labtest;
    }

    /**
     * Get the [is_medicine] column value.
     *
     * @return int
     */
    public function getIsMedicine()
    {
        return $this->is_medicine;
    }

    /**
     * Get the [is_radio_test] column value.
     *
     * @return int
     */
    public function getIsRadioTest()
    {
        return $this->is_radio_test;
    }

    /**
     * Get the [is_comment] column value.
     *
     * @return int
     */
    public function getIsComment()
    {
        return $this->is_comment;
    }

    /**
     * Get the [is_paid] column value.
     *
     * @return int
     */
    public function getIsPaid()
    {
        return $this->is_paid;
    }

    /**
     * Get the [amount] column value.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get the [amount_doc] column value.
     *
     * @return string
     */
    public function getAmountDoc()
    {
        return $this->amount_doc;
    }

    /**
     * Get the [times_per_day] column value.
     *
     * @return int
     */
    public function getTimesPerDay()
    {
        return $this->times_per_day;
    }

    /**
     * Get the [days] column value.
     *
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Get the [price] column value.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the [materialcost] column value.
     *
     * @return double
     */
    public function getMaterialcost()
    {
        return $this->materialcost;
    }

    /**
     * Get the [bank_ref] column value.
     *
     * @return string
     */
    public function getBankRef()
    {
        return $this->bank_ref;
    }

    /**
     * Get the [balanced_insurance] column value.
     *
     * @return string
     */
    public function getBalancedInsurance()
    {
        return $this->balanced_insurance;
    }

    /**
     * Get the [insurance_id] column value.
     *
     * @return string
     */
    public function getInsuranceId()
    {
        return $this->insurance_id;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * Get the [item_number] column value.
     *
     * @return string
     */
    public function getItemNumber()
    {
        return $this->item_number;
    }

    /**
     * Get the [prescriptions_nr] column value.
     *
     * @return string
     */
    public function getPrescriptionsNr()
    {
        return $this->prescriptions_nr;
    }

    /**
     * Get the [sub_store] column value.
     *
     * @return string
     */
    public function getSubStore()
    {
        return $this->sub_store;
    }

    /**
     * Get the [is_deposit_item] column value.
     *
     * @return int
     */
    public function getIsDepositItem()
    {
        return $this->is_deposit_item;
    }

    /**
     * Get the [user_id] column value.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
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
     * Get the [current_ward_nr] column value.
     *
     * @return int
     */
    public function getCurrentWardNr()
    {
        return $this->current_ward_nr;
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
     * Set the value of [id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [date_change] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setDateChange($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->date_change !== $v) {
            $this->date_change = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_DATE_CHANGE] = true;
        }

        return $this;
    } // setDateChange()

    /**
     * Set the value of [is_labtest] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setIsLabtest($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_labtest !== $v) {
            $this->is_labtest = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_IS_LABTEST] = true;
        }

        return $this;
    } // setIsLabtest()

    /**
     * Set the value of [is_medicine] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setIsMedicine($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_medicine !== $v) {
            $this->is_medicine = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_IS_MEDICINE] = true;
        }

        return $this;
    } // setIsMedicine()

    /**
     * Set the value of [is_radio_test] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setIsRadioTest($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_radio_test !== $v) {
            $this->is_radio_test = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_IS_RADIO_TEST] = true;
        }

        return $this;
    } // setIsRadioTest()

    /**
     * Set the value of [is_comment] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setIsComment($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_comment !== $v) {
            $this->is_comment = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_IS_COMMENT] = true;
        }

        return $this;
    } // setIsComment()

    /**
     * Set the value of [is_paid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setIsPaid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_paid !== $v) {
            $this->is_paid = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_IS_PAID] = true;
        }

        return $this;
    } // setIsPaid()

    /**
     * Set the value of [amount] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setAmount($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->amount !== $v) {
            $this->amount = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_AMOUNT] = true;
        }

        return $this;
    } // setAmount()

    /**
     * Set the value of [amount_doc] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setAmountDoc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->amount_doc !== $v) {
            $this->amount_doc = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_AMOUNT_DOC] = true;
        }

        return $this;
    } // setAmountDoc()

    /**
     * Set the value of [times_per_day] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setTimesPerDay($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->times_per_day !== $v) {
            $this->times_per_day = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_TIMES_PER_DAY] = true;
        }

        return $this;
    } // setTimesPerDay()

    /**
     * Set the value of [days] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setDays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->days !== $v) {
            $this->days = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_DAYS] = true;
        }

        return $this;
    } // setDays()

    /**
     * Set the value of [price] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setPrice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->price !== $v) {
            $this->price = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_PRICE] = true;
        }

        return $this;
    } // setPrice()

    /**
     * Set the value of [materialcost] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setMaterialcost($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->materialcost !== $v) {
            $this->materialcost = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_MATERIALCOST] = true;
        }

        return $this;
    } // setMaterialcost()

    /**
     * Set the value of [bank_ref] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setBankRef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bank_ref !== $v) {
            $this->bank_ref = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_BANK_REF] = true;
        }

        return $this;
    } // setBankRef()

    /**
     * Set the value of [balanced_insurance] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setBalancedInsurance($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->balanced_insurance !== $v) {
            $this->balanced_insurance = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_BALANCED_INSURANCE] = true;
        }

        return $this;
    } // setBalancedInsurance()

    /**
     * Set the value of [insurance_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setInsuranceId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insurance_id !== $v) {
            $this->insurance_id = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_INSURANCE_ID] = true;
        }

        return $this;
    } // setInsuranceId()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_DESCRIPTION] = true;
        }

        return $this;
    } // setDescription()

    /**
     * Set the value of [notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->notes !== $v) {
            $this->notes = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_NOTES] = true;
        }

        return $this;
    } // setNotes()

    /**
     * Set the value of [item_number] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setItemNumber($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->item_number !== $v) {
            $this->item_number = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_ITEM_NUMBER] = true;
        }

        return $this;
    } // setItemNumber()

    /**
     * Set the value of [prescriptions_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setPrescriptionsNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prescriptions_nr !== $v) {
            $this->prescriptions_nr = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_PRESCRIPTIONS_NR] = true;
        }

        return $this;
    } // setPrescriptionsNr()

    /**
     * Set the value of [sub_store] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setSubStore($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sub_store !== $v) {
            $this->sub_store = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_SUB_STORE] = true;
        }

        return $this;
    } // setSubStore()

    /**
     * Set the value of [is_deposit_item] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setIsDepositItem($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_deposit_item !== $v) {
            $this->is_deposit_item = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_IS_DEPOSIT_ITEM] = true;
        }

        return $this;
    } // setIsDepositItem()

    /**
     * Set the value of [user_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_USER_ID] = true;
        }

        return $this;
    } // setUserId()

    /**
     * Set the value of [current_dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setCurrentDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->current_dept_nr !== $v) {
            $this->current_dept_nr = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_CURRENT_DEPT_NR] = true;
        }

        return $this;
    } // setCurrentDeptNr()

    /**
     * Set the value of [current_ward_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setCurrentWardNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->current_ward_nr !== $v) {
            $this->current_ward_nr = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_CURRENT_WARD_NR] = true;
        }

        return $this;
    } // setCurrentWardNr()

    /**
     * Set the value of [encounter_class_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object (for fluent API support)
     */
    public function setEncounterClassNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_class_nr !== $v) {
            $this->encounter_class_nr = $v;
            $this->modifiedColumns[CareTzBillingElemTableMap::COL_ENCOUNTER_CLASS_NR] = true;
        }

        return $this;
    } // setEncounterClassNr()

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
            if ($this->nr !== '0') {
                return false;
            }

            if ($this->date_change !== '0') {
                return false;
            }

            if ($this->is_labtest !== 0) {
                return false;
            }

            if ($this->is_medicine !== 0) {
                return false;
            }

            if ($this->is_comment !== 0) {
                return false;
            }

            if ($this->is_paid !== 0) {
                return false;
            }

            if ($this->amount !== '0') {
                return false;
            }

            if ($this->description !== '') {
                return false;
            }

            if ($this->notes !== '') {
                return false;
            }

            if ($this->item_number !== '0') {
                return false;
            }

            if ($this->prescriptions_nr !== '0') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzBillingElemTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzBillingElemTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzBillingElemTableMap::translateFieldName('DateChange', TableMap::TYPE_PHPNAME, $indexType)];
            $this->date_change = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzBillingElemTableMap::translateFieldName('IsLabtest', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_labtest = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzBillingElemTableMap::translateFieldName('IsMedicine', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_medicine = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzBillingElemTableMap::translateFieldName('IsRadioTest', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_radio_test = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzBillingElemTableMap::translateFieldName('IsComment', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_comment = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzBillingElemTableMap::translateFieldName('IsPaid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_paid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzBillingElemTableMap::translateFieldName('Amount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->amount = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzBillingElemTableMap::translateFieldName('AmountDoc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->amount_doc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTzBillingElemTableMap::translateFieldName('TimesPerDay', TableMap::TYPE_PHPNAME, $indexType)];
            $this->times_per_day = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTzBillingElemTableMap::translateFieldName('Days', TableMap::TYPE_PHPNAME, $indexType)];
            $this->days = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTzBillingElemTableMap::translateFieldName('Price', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTzBillingElemTableMap::translateFieldName('Materialcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->materialcost = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTzBillingElemTableMap::translateFieldName('BankRef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bank_ref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTzBillingElemTableMap::translateFieldName('BalancedInsurance', TableMap::TYPE_PHPNAME, $indexType)];
            $this->balanced_insurance = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTzBillingElemTableMap::translateFieldName('InsuranceId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insurance_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTzBillingElemTableMap::translateFieldName('Description', TableMap::TYPE_PHPNAME, $indexType)];
            $this->description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTzBillingElemTableMap::translateFieldName('Notes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTzBillingElemTableMap::translateFieldName('ItemNumber', TableMap::TYPE_PHPNAME, $indexType)];
            $this->item_number = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTzBillingElemTableMap::translateFieldName('PrescriptionsNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prescriptions_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTzBillingElemTableMap::translateFieldName('SubStore', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sub_store = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTzBillingElemTableMap::translateFieldName('IsDepositItem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_deposit_item = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareTzBillingElemTableMap::translateFieldName('UserId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->user_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareTzBillingElemTableMap::translateFieldName('CurrentDeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->current_dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareTzBillingElemTableMap::translateFieldName('CurrentWardNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->current_ward_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareTzBillingElemTableMap::translateFieldName('EncounterClassNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_class_nr = (null !== $col) ? (int) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 27; // 27 = CareTzBillingElemTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzBillingElem'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzBillingElemTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzBillingElemQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzBillingElem::setDeleted()
     * @see CareTzBillingElem::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingElemTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzBillingElemQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingElemTableMap::DATABASE_NAME);
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
                CareTzBillingElemTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzBillingElemTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzBillingElemTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'ID';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_DATE_CHANGE)) {
            $modifiedColumns[':p' . $index++]  = 'date_change';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_LABTEST)) {
            $modifiedColumns[':p' . $index++]  = 'is_labtest';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_MEDICINE)) {
            $modifiedColumns[':p' . $index++]  = 'is_medicine';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_RADIO_TEST)) {
            $modifiedColumns[':p' . $index++]  = 'is_radio_test';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_COMMENT)) {
            $modifiedColumns[':p' . $index++]  = 'is_comment';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_PAID)) {
            $modifiedColumns[':p' . $index++]  = 'is_paid';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'amount';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_AMOUNT_DOC)) {
            $modifiedColumns[':p' . $index++]  = 'amount_doc';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_TIMES_PER_DAY)) {
            $modifiedColumns[':p' . $index++]  = 'times_per_day';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_DAYS)) {
            $modifiedColumns[':p' . $index++]  = 'days';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'price';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_MATERIALCOST)) {
            $modifiedColumns[':p' . $index++]  = 'materialcost';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_BANK_REF)) {
            $modifiedColumns[':p' . $index++]  = 'bank_ref';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_BALANCED_INSURANCE)) {
            $modifiedColumns[':p' . $index++]  = 'balanced_insurance';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_INSURANCE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'insurance_id';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'description';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'notes';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_ITEM_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'item_number';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_PRESCRIPTIONS_NR)) {
            $modifiedColumns[':p' . $index++]  = 'prescriptions_nr';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_SUB_STORE)) {
            $modifiedColumns[':p' . $index++]  = 'sub_store';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_DEPOSIT_ITEM)) {
            $modifiedColumns[':p' . $index++]  = 'is_deposit_item';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_USER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'User_Id';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_CURRENT_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'current_dept_nr';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_CURRENT_WARD_NR)) {
            $modifiedColumns[':p' . $index++]  = 'current_ward_nr';
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_ENCOUNTER_CLASS_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_class_nr';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_billing_elem (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ID':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'nr':
                        $stmt->bindValue($identifier, $this->nr, PDO::PARAM_INT);
                        break;
                    case 'date_change':
                        $stmt->bindValue($identifier, $this->date_change, PDO::PARAM_INT);
                        break;
                    case 'is_labtest':
                        $stmt->bindValue($identifier, $this->is_labtest, PDO::PARAM_INT);
                        break;
                    case 'is_medicine':
                        $stmt->bindValue($identifier, $this->is_medicine, PDO::PARAM_INT);
                        break;
                    case 'is_radio_test':
                        $stmt->bindValue($identifier, $this->is_radio_test, PDO::PARAM_INT);
                        break;
                    case 'is_comment':
                        $stmt->bindValue($identifier, $this->is_comment, PDO::PARAM_INT);
                        break;
                    case 'is_paid':
                        $stmt->bindValue($identifier, $this->is_paid, PDO::PARAM_INT);
                        break;
                    case 'amount':
                        $stmt->bindValue($identifier, $this->amount, PDO::PARAM_INT);
                        break;
                    case 'amount_doc':
                        $stmt->bindValue($identifier, $this->amount_doc, PDO::PARAM_INT);
                        break;
                    case 'times_per_day':
                        $stmt->bindValue($identifier, $this->times_per_day, PDO::PARAM_INT);
                        break;
                    case 'days':
                        $stmt->bindValue($identifier, $this->days, PDO::PARAM_INT);
                        break;
                    case 'price':
                        $stmt->bindValue($identifier, $this->price, PDO::PARAM_STR);
                        break;
                    case 'materialcost':
                        $stmt->bindValue($identifier, $this->materialcost, PDO::PARAM_STR);
                        break;
                    case 'bank_ref':
                        $stmt->bindValue($identifier, $this->bank_ref, PDO::PARAM_INT);
                        break;
                    case 'balanced_insurance':
                        $stmt->bindValue($identifier, $this->balanced_insurance, PDO::PARAM_STR);
                        break;
                    case 'insurance_id':
                        $stmt->bindValue($identifier, $this->insurance_id, PDO::PARAM_INT);
                        break;
                    case 'description':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case 'notes':
                        $stmt->bindValue($identifier, $this->notes, PDO::PARAM_STR);
                        break;
                    case 'item_number':
                        $stmt->bindValue($identifier, $this->item_number, PDO::PARAM_INT);
                        break;
                    case 'prescriptions_nr':
                        $stmt->bindValue($identifier, $this->prescriptions_nr, PDO::PARAM_INT);
                        break;
                    case 'sub_store':
                        $stmt->bindValue($identifier, $this->sub_store, PDO::PARAM_STR);
                        break;
                    case 'is_deposit_item':
                        $stmt->bindValue($identifier, $this->is_deposit_item, PDO::PARAM_INT);
                        break;
                    case 'User_Id':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_STR);
                        break;
                    case 'current_dept_nr':
                        $stmt->bindValue($identifier, $this->current_dept_nr, PDO::PARAM_INT);
                        break;
                    case 'current_ward_nr':
                        $stmt->bindValue($identifier, $this->current_ward_nr, PDO::PARAM_INT);
                        break;
                    case 'encounter_class_nr':
                        $stmt->bindValue($identifier, $this->encounter_class_nr, PDO::PARAM_INT);
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
        $pos = CareTzBillingElemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getNr();
                break;
            case 2:
                return $this->getDateChange();
                break;
            case 3:
                return $this->getIsLabtest();
                break;
            case 4:
                return $this->getIsMedicine();
                break;
            case 5:
                return $this->getIsRadioTest();
                break;
            case 6:
                return $this->getIsComment();
                break;
            case 7:
                return $this->getIsPaid();
                break;
            case 8:
                return $this->getAmount();
                break;
            case 9:
                return $this->getAmountDoc();
                break;
            case 10:
                return $this->getTimesPerDay();
                break;
            case 11:
                return $this->getDays();
                break;
            case 12:
                return $this->getPrice();
                break;
            case 13:
                return $this->getMaterialcost();
                break;
            case 14:
                return $this->getBankRef();
                break;
            case 15:
                return $this->getBalancedInsurance();
                break;
            case 16:
                return $this->getInsuranceId();
                break;
            case 17:
                return $this->getDescription();
                break;
            case 18:
                return $this->getNotes();
                break;
            case 19:
                return $this->getItemNumber();
                break;
            case 20:
                return $this->getPrescriptionsNr();
                break;
            case 21:
                return $this->getSubStore();
                break;
            case 22:
                return $this->getIsDepositItem();
                break;
            case 23:
                return $this->getUserId();
                break;
            case 24:
                return $this->getCurrentDeptNr();
                break;
            case 25:
                return $this->getCurrentWardNr();
                break;
            case 26:
                return $this->getEncounterClassNr();
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

        if (isset($alreadyDumpedObjects['CareTzBillingElem'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzBillingElem'][$this->hashCode()] = true;
        $keys = CareTzBillingElemTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNr(),
            $keys[2] => $this->getDateChange(),
            $keys[3] => $this->getIsLabtest(),
            $keys[4] => $this->getIsMedicine(),
            $keys[5] => $this->getIsRadioTest(),
            $keys[6] => $this->getIsComment(),
            $keys[7] => $this->getIsPaid(),
            $keys[8] => $this->getAmount(),
            $keys[9] => $this->getAmountDoc(),
            $keys[10] => $this->getTimesPerDay(),
            $keys[11] => $this->getDays(),
            $keys[12] => $this->getPrice(),
            $keys[13] => $this->getMaterialcost(),
            $keys[14] => $this->getBankRef(),
            $keys[15] => $this->getBalancedInsurance(),
            $keys[16] => $this->getInsuranceId(),
            $keys[17] => $this->getDescription(),
            $keys[18] => $this->getNotes(),
            $keys[19] => $this->getItemNumber(),
            $keys[20] => $this->getPrescriptionsNr(),
            $keys[21] => $this->getSubStore(),
            $keys[22] => $this->getIsDepositItem(),
            $keys[23] => $this->getUserId(),
            $keys[24] => $this->getCurrentDeptNr(),
            $keys[25] => $this->getCurrentWardNr(),
            $keys[26] => $this->getEncounterClassNr(),
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
     * @return $this|\CareMd\CareMd\CareTzBillingElem
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzBillingElemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzBillingElem
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setNr($value);
                break;
            case 2:
                $this->setDateChange($value);
                break;
            case 3:
                $this->setIsLabtest($value);
                break;
            case 4:
                $this->setIsMedicine($value);
                break;
            case 5:
                $this->setIsRadioTest($value);
                break;
            case 6:
                $this->setIsComment($value);
                break;
            case 7:
                $this->setIsPaid($value);
                break;
            case 8:
                $this->setAmount($value);
                break;
            case 9:
                $this->setAmountDoc($value);
                break;
            case 10:
                $this->setTimesPerDay($value);
                break;
            case 11:
                $this->setDays($value);
                break;
            case 12:
                $this->setPrice($value);
                break;
            case 13:
                $this->setMaterialcost($value);
                break;
            case 14:
                $this->setBankRef($value);
                break;
            case 15:
                $this->setBalancedInsurance($value);
                break;
            case 16:
                $this->setInsuranceId($value);
                break;
            case 17:
                $this->setDescription($value);
                break;
            case 18:
                $this->setNotes($value);
                break;
            case 19:
                $this->setItemNumber($value);
                break;
            case 20:
                $this->setPrescriptionsNr($value);
                break;
            case 21:
                $this->setSubStore($value);
                break;
            case 22:
                $this->setIsDepositItem($value);
                break;
            case 23:
                $this->setUserId($value);
                break;
            case 24:
                $this->setCurrentDeptNr($value);
                break;
            case 25:
                $this->setCurrentWardNr($value);
                break;
            case 26:
                $this->setEncounterClassNr($value);
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
        $keys = CareTzBillingElemTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDateChange($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIsLabtest($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIsMedicine($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIsRadioTest($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIsComment($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIsPaid($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setAmount($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setAmountDoc($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setTimesPerDay($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setDays($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPrice($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setMaterialcost($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setBankRef($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setBalancedInsurance($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setInsuranceId($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setDescription($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setNotes($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setItemNumber($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setPrescriptionsNr($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setSubStore($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setIsDepositItem($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setUserId($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setCurrentDeptNr($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setCurrentWardNr($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setEncounterClassNr($arr[$keys[26]]);
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
     * @return $this|\CareMd\CareMd\CareTzBillingElem The current object, for fluid interface
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
        $criteria = new Criteria(CareTzBillingElemTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_ID)) {
            $criteria->add(CareTzBillingElemTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_NR)) {
            $criteria->add(CareTzBillingElemTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_DATE_CHANGE)) {
            $criteria->add(CareTzBillingElemTableMap::COL_DATE_CHANGE, $this->date_change);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_LABTEST)) {
            $criteria->add(CareTzBillingElemTableMap::COL_IS_LABTEST, $this->is_labtest);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_MEDICINE)) {
            $criteria->add(CareTzBillingElemTableMap::COL_IS_MEDICINE, $this->is_medicine);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_RADIO_TEST)) {
            $criteria->add(CareTzBillingElemTableMap::COL_IS_RADIO_TEST, $this->is_radio_test);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_COMMENT)) {
            $criteria->add(CareTzBillingElemTableMap::COL_IS_COMMENT, $this->is_comment);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_PAID)) {
            $criteria->add(CareTzBillingElemTableMap::COL_IS_PAID, $this->is_paid);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_AMOUNT)) {
            $criteria->add(CareTzBillingElemTableMap::COL_AMOUNT, $this->amount);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_AMOUNT_DOC)) {
            $criteria->add(CareTzBillingElemTableMap::COL_AMOUNT_DOC, $this->amount_doc);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_TIMES_PER_DAY)) {
            $criteria->add(CareTzBillingElemTableMap::COL_TIMES_PER_DAY, $this->times_per_day);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_DAYS)) {
            $criteria->add(CareTzBillingElemTableMap::COL_DAYS, $this->days);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_PRICE)) {
            $criteria->add(CareTzBillingElemTableMap::COL_PRICE, $this->price);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_MATERIALCOST)) {
            $criteria->add(CareTzBillingElemTableMap::COL_MATERIALCOST, $this->materialcost);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_BANK_REF)) {
            $criteria->add(CareTzBillingElemTableMap::COL_BANK_REF, $this->bank_ref);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_BALANCED_INSURANCE)) {
            $criteria->add(CareTzBillingElemTableMap::COL_BALANCED_INSURANCE, $this->balanced_insurance);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_INSURANCE_ID)) {
            $criteria->add(CareTzBillingElemTableMap::COL_INSURANCE_ID, $this->insurance_id);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_DESCRIPTION)) {
            $criteria->add(CareTzBillingElemTableMap::COL_DESCRIPTION, $this->description);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_NOTES)) {
            $criteria->add(CareTzBillingElemTableMap::COL_NOTES, $this->notes);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_ITEM_NUMBER)) {
            $criteria->add(CareTzBillingElemTableMap::COL_ITEM_NUMBER, $this->item_number);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_PRESCRIPTIONS_NR)) {
            $criteria->add(CareTzBillingElemTableMap::COL_PRESCRIPTIONS_NR, $this->prescriptions_nr);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_SUB_STORE)) {
            $criteria->add(CareTzBillingElemTableMap::COL_SUB_STORE, $this->sub_store);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_IS_DEPOSIT_ITEM)) {
            $criteria->add(CareTzBillingElemTableMap::COL_IS_DEPOSIT_ITEM, $this->is_deposit_item);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_USER_ID)) {
            $criteria->add(CareTzBillingElemTableMap::COL_USER_ID, $this->user_id);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_CURRENT_DEPT_NR)) {
            $criteria->add(CareTzBillingElemTableMap::COL_CURRENT_DEPT_NR, $this->current_dept_nr);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_CURRENT_WARD_NR)) {
            $criteria->add(CareTzBillingElemTableMap::COL_CURRENT_WARD_NR, $this->current_ward_nr);
        }
        if ($this->isColumnModified(CareTzBillingElemTableMap::COL_ENCOUNTER_CLASS_NR)) {
            $criteria->add(CareTzBillingElemTableMap::COL_ENCOUNTER_CLASS_NR, $this->encounter_class_nr);
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
        $criteria = ChildCareTzBillingElemQuery::create();
        $criteria->add(CareTzBillingElemTableMap::COL_ID, $this->id);

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
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       string $key Primary key.
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
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzBillingElem (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNr($this->getNr());
        $copyObj->setDateChange($this->getDateChange());
        $copyObj->setIsLabtest($this->getIsLabtest());
        $copyObj->setIsMedicine($this->getIsMedicine());
        $copyObj->setIsRadioTest($this->getIsRadioTest());
        $copyObj->setIsComment($this->getIsComment());
        $copyObj->setIsPaid($this->getIsPaid());
        $copyObj->setAmount($this->getAmount());
        $copyObj->setAmountDoc($this->getAmountDoc());
        $copyObj->setTimesPerDay($this->getTimesPerDay());
        $copyObj->setDays($this->getDays());
        $copyObj->setPrice($this->getPrice());
        $copyObj->setMaterialcost($this->getMaterialcost());
        $copyObj->setBankRef($this->getBankRef());
        $copyObj->setBalancedInsurance($this->getBalancedInsurance());
        $copyObj->setInsuranceId($this->getInsuranceId());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setNotes($this->getNotes());
        $copyObj->setItemNumber($this->getItemNumber());
        $copyObj->setPrescriptionsNr($this->getPrescriptionsNr());
        $copyObj->setSubStore($this->getSubStore());
        $copyObj->setIsDepositItem($this->getIsDepositItem());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setCurrentDeptNr($this->getCurrentDeptNr());
        $copyObj->setCurrentWardNr($this->getCurrentWardNr());
        $copyObj->setEncounterClassNr($this->getEncounterClassNr());
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
     * @return \CareMd\CareMd\CareTzBillingElem Clone of current object.
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
        $this->nr = null;
        $this->date_change = null;
        $this->is_labtest = null;
        $this->is_medicine = null;
        $this->is_radio_test = null;
        $this->is_comment = null;
        $this->is_paid = null;
        $this->amount = null;
        $this->amount_doc = null;
        $this->times_per_day = null;
        $this->days = null;
        $this->price = null;
        $this->materialcost = null;
        $this->bank_ref = null;
        $this->balanced_insurance = null;
        $this->insurance_id = null;
        $this->description = null;
        $this->notes = null;
        $this->item_number = null;
        $this->prescriptions_nr = null;
        $this->sub_store = null;
        $this->is_deposit_item = null;
        $this->user_id = null;
        $this->current_dept_nr = null;
        $this->current_ward_nr = null;
        $this->encounter_class_nr = null;
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
        return (string) $this->exportTo(CareTzBillingElemTableMap::DEFAULT_STRING_FORMAT);
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
