<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareBillingArchiveQuery as ChildCareBillingArchiveQuery;
use CareMd\CareMd\Map\CareBillingArchiveTableMap;
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
 * Base class that represents a row from the 'care_billing_archive' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareBillingArchive implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareBillingArchiveTableMap';


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
     * The value for the bill_no field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $bill_no;

    /**
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

    /**
     * The value for the patient_name field.
     *
     * @var        string
     */
    protected $patient_name;

    /**
     * The value for the vorname field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $vorname;

    /**
     * The value for the bill_date_time field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $bill_date_time;

    /**
     * The value for the bill_amt field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $bill_amt;

    /**
     * The value for the payment_date_time field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $payment_date_time;

    /**
     * The value for the payment_mode field.
     *
     * @var        string
     */
    protected $payment_mode;

    /**
     * The value for the cheque_no field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $cheque_no;

    /**
     * The value for the creditcard_no field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creditcard_no;

    /**
     * The value for the paid_by field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $paid_by;

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
        $this->bill_no = '0';
        $this->encounter_nr = 0;
        $this->vorname = '0';
        $this->bill_date_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->bill_amt = 0.0;
        $this->payment_date_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->cheque_no = '0';
        $this->creditcard_no = '0';
        $this->paid_by = '0';
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareBillingArchive object.
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
     * Compares this with another <code>CareBillingArchive</code> instance.  If
     * <code>obj</code> is an instance of <code>CareBillingArchive</code>, delegates to
     * <code>equals(CareBillingArchive)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareBillingArchive The current object, for fluid interface
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
     * Get the [bill_no] column value.
     *
     * @return string
     */
    public function getBillNo()
    {
        return $this->bill_no;
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
     * Get the [patient_name] column value.
     *
     * @return string
     */
    public function getPatientName()
    {
        return $this->patient_name;
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
     * Get the [optionally formatted] temporal [bill_date_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getBillDateTime($format = NULL)
    {
        if ($format === null) {
            return $this->bill_date_time;
        } else {
            return $this->bill_date_time instanceof \DateTimeInterface ? $this->bill_date_time->format($format) : null;
        }
    }

    /**
     * Get the [bill_amt] column value.
     *
     * @return double
     */
    public function getBillAmt()
    {
        return $this->bill_amt;
    }

    /**
     * Get the [optionally formatted] temporal [payment_date_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPaymentDateTime($format = NULL)
    {
        if ($format === null) {
            return $this->payment_date_time;
        } else {
            return $this->payment_date_time instanceof \DateTimeInterface ? $this->payment_date_time->format($format) : null;
        }
    }

    /**
     * Get the [payment_mode] column value.
     *
     * @return string
     */
    public function getPaymentMode()
    {
        return $this->payment_mode;
    }

    /**
     * Get the [cheque_no] column value.
     *
     * @return string
     */
    public function getChequeNo()
    {
        return $this->cheque_no;
    }

    /**
     * Get the [creditcard_no] column value.
     *
     * @return string
     */
    public function getCreditcardNo()
    {
        return $this->creditcard_no;
    }

    /**
     * Get the [paid_by] column value.
     *
     * @return string
     */
    public function getPaidBy()
    {
        return $this->paid_by;
    }

    /**
     * Set the value of [bill_no] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setBillNo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bill_no !== $v) {
            $this->bill_no = $v;
            $this->modifiedColumns[CareBillingArchiveTableMap::COL_BILL_NO] = true;
        }

        return $this;
    } // setBillNo()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareBillingArchiveTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [patient_name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setPatientName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->patient_name !== $v) {
            $this->patient_name = $v;
            $this->modifiedColumns[CareBillingArchiveTableMap::COL_PATIENT_NAME] = true;
        }

        return $this;
    } // setPatientName()

    /**
     * Set the value of [vorname] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setVorname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vorname !== $v) {
            $this->vorname = $v;
            $this->modifiedColumns[CareBillingArchiveTableMap::COL_VORNAME] = true;
        }

        return $this;
    } // setVorname()

    /**
     * Sets the value of [bill_date_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setBillDateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->bill_date_time !== null || $dt !== null) {
            if ( ($dt != $this->bill_date_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->bill_date_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareBillingArchiveTableMap::COL_BILL_DATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setBillDateTime()

    /**
     * Set the value of [bill_amt] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setBillAmt($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->bill_amt !== $v) {
            $this->bill_amt = $v;
            $this->modifiedColumns[CareBillingArchiveTableMap::COL_BILL_AMT] = true;
        }

        return $this;
    } // setBillAmt()

    /**
     * Sets the value of [payment_date_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setPaymentDateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->payment_date_time !== null || $dt !== null) {
            if ( ($dt != $this->payment_date_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->payment_date_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareBillingArchiveTableMap::COL_PAYMENT_DATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setPaymentDateTime()

    /**
     * Set the value of [payment_mode] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setPaymentMode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->payment_mode !== $v) {
            $this->payment_mode = $v;
            $this->modifiedColumns[CareBillingArchiveTableMap::COL_PAYMENT_MODE] = true;
        }

        return $this;
    } // setPaymentMode()

    /**
     * Set the value of [cheque_no] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setChequeNo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cheque_no !== $v) {
            $this->cheque_no = $v;
            $this->modifiedColumns[CareBillingArchiveTableMap::COL_CHEQUE_NO] = true;
        }

        return $this;
    } // setChequeNo()

    /**
     * Set the value of [creditcard_no] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setCreditcardNo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->creditcard_no !== $v) {
            $this->creditcard_no = $v;
            $this->modifiedColumns[CareBillingArchiveTableMap::COL_CREDITCARD_NO] = true;
        }

        return $this;
    } // setCreditcardNo()

    /**
     * Set the value of [paid_by] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object (for fluent API support)
     */
    public function setPaidBy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paid_by !== $v) {
            $this->paid_by = $v;
            $this->modifiedColumns[CareBillingArchiveTableMap::COL_PAID_BY] = true;
        }

        return $this;
    } // setPaidBy()

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
            if ($this->bill_no !== '0') {
                return false;
            }

            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->vorname !== '0') {
                return false;
            }

            if ($this->bill_date_time && $this->bill_date_time->format('Y-m-d H:i:s.u') !== NULL) {
                return false;
            }

            if ($this->bill_amt !== 0.0) {
                return false;
            }

            if ($this->payment_date_time && $this->payment_date_time->format('Y-m-d H:i:s.u') !== NULL) {
                return false;
            }

            if ($this->cheque_no !== '0') {
                return false;
            }

            if ($this->creditcard_no !== '0') {
                return false;
            }

            if ($this->paid_by !== '0') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareBillingArchiveTableMap::translateFieldName('BillNo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_no = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareBillingArchiveTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareBillingArchiveTableMap::translateFieldName('PatientName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->patient_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareBillingArchiveTableMap::translateFieldName('Vorname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vorname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareBillingArchiveTableMap::translateFieldName('BillDateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->bill_date_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareBillingArchiveTableMap::translateFieldName('BillAmt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_amt = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareBillingArchiveTableMap::translateFieldName('PaymentDateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->payment_date_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareBillingArchiveTableMap::translateFieldName('PaymentMode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->payment_mode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareBillingArchiveTableMap::translateFieldName('ChequeNo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cheque_no = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareBillingArchiveTableMap::translateFieldName('CreditcardNo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->creditcard_no = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareBillingArchiveTableMap::translateFieldName('PaidBy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->paid_by = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 11; // 11 = CareBillingArchiveTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareBillingArchive'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareBillingArchiveTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareBillingArchiveQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareBillingArchive::setDeleted()
     * @see CareBillingArchive::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingArchiveTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareBillingArchiveQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingArchiveTableMap::DATABASE_NAME);
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
                CareBillingArchiveTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_BILL_NO)) {
            $modifiedColumns[':p' . $index++]  = 'bill_no';
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_PATIENT_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'patient_name';
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_VORNAME)) {
            $modifiedColumns[':p' . $index++]  = 'vorname';
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_BILL_DATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'bill_date_time';
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_BILL_AMT)) {
            $modifiedColumns[':p' . $index++]  = 'bill_amt';
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_PAYMENT_DATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'payment_date_time';
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_PAYMENT_MODE)) {
            $modifiedColumns[':p' . $index++]  = 'payment_mode';
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_CHEQUE_NO)) {
            $modifiedColumns[':p' . $index++]  = 'cheque_no';
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_CREDITCARD_NO)) {
            $modifiedColumns[':p' . $index++]  = 'creditcard_no';
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_PAID_BY)) {
            $modifiedColumns[':p' . $index++]  = 'paid_by';
        }

        $sql = sprintf(
            'INSERT INTO care_billing_archive (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'bill_no':
                        $stmt->bindValue($identifier, $this->bill_no, PDO::PARAM_INT);
                        break;
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'patient_name':
                        $stmt->bindValue($identifier, $this->patient_name, PDO::PARAM_STR);
                        break;
                    case 'vorname':
                        $stmt->bindValue($identifier, $this->vorname, PDO::PARAM_STR);
                        break;
                    case 'bill_date_time':
                        $stmt->bindValue($identifier, $this->bill_date_time ? $this->bill_date_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'bill_amt':
                        $stmt->bindValue($identifier, $this->bill_amt, PDO::PARAM_STR);
                        break;
                    case 'payment_date_time':
                        $stmt->bindValue($identifier, $this->payment_date_time ? $this->payment_date_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'payment_mode':
                        $stmt->bindValue($identifier, $this->payment_mode, PDO::PARAM_STR);
                        break;
                    case 'cheque_no':
                        $stmt->bindValue($identifier, $this->cheque_no, PDO::PARAM_STR);
                        break;
                    case 'creditcard_no':
                        $stmt->bindValue($identifier, $this->creditcard_no, PDO::PARAM_STR);
                        break;
                    case 'paid_by':
                        $stmt->bindValue($identifier, $this->paid_by, PDO::PARAM_STR);
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
        $pos = CareBillingArchiveTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getBillNo();
                break;
            case 1:
                return $this->getEncounterNr();
                break;
            case 2:
                return $this->getPatientName();
                break;
            case 3:
                return $this->getVorname();
                break;
            case 4:
                return $this->getBillDateTime();
                break;
            case 5:
                return $this->getBillAmt();
                break;
            case 6:
                return $this->getPaymentDateTime();
                break;
            case 7:
                return $this->getPaymentMode();
                break;
            case 8:
                return $this->getChequeNo();
                break;
            case 9:
                return $this->getCreditcardNo();
                break;
            case 10:
                return $this->getPaidBy();
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

        if (isset($alreadyDumpedObjects['CareBillingArchive'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareBillingArchive'][$this->hashCode()] = true;
        $keys = CareBillingArchiveTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBillNo(),
            $keys[1] => $this->getEncounterNr(),
            $keys[2] => $this->getPatientName(),
            $keys[3] => $this->getVorname(),
            $keys[4] => $this->getBillDateTime(),
            $keys[5] => $this->getBillAmt(),
            $keys[6] => $this->getPaymentDateTime(),
            $keys[7] => $this->getPaymentMode(),
            $keys[8] => $this->getChequeNo(),
            $keys[9] => $this->getCreditcardNo(),
            $keys[10] => $this->getPaidBy(),
        );
        if ($result[$keys[4]] instanceof \DateTimeInterface) {
            $result[$keys[4]] = $result[$keys[4]]->format('c');
        }

        if ($result[$keys[6]] instanceof \DateTimeInterface) {
            $result[$keys[6]] = $result[$keys[6]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareBillingArchive
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareBillingArchiveTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareBillingArchive
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBillNo($value);
                break;
            case 1:
                $this->setEncounterNr($value);
                break;
            case 2:
                $this->setPatientName($value);
                break;
            case 3:
                $this->setVorname($value);
                break;
            case 4:
                $this->setBillDateTime($value);
                break;
            case 5:
                $this->setBillAmt($value);
                break;
            case 6:
                $this->setPaymentDateTime($value);
                break;
            case 7:
                $this->setPaymentMode($value);
                break;
            case 8:
                $this->setChequeNo($value);
                break;
            case 9:
                $this->setCreditcardNo($value);
                break;
            case 10:
                $this->setPaidBy($value);
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
        $keys = CareBillingArchiveTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setBillNo($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPatientName($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setVorname($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setBillDateTime($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setBillAmt($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPaymentDateTime($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPaymentMode($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setChequeNo($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setCreditcardNo($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPaidBy($arr[$keys[10]]);
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
     * @return $this|\CareMd\CareMd\CareBillingArchive The current object, for fluid interface
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
        $criteria = new Criteria(CareBillingArchiveTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_BILL_NO)) {
            $criteria->add(CareBillingArchiveTableMap::COL_BILL_NO, $this->bill_no);
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareBillingArchiveTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_PATIENT_NAME)) {
            $criteria->add(CareBillingArchiveTableMap::COL_PATIENT_NAME, $this->patient_name);
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_VORNAME)) {
            $criteria->add(CareBillingArchiveTableMap::COL_VORNAME, $this->vorname);
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_BILL_DATE_TIME)) {
            $criteria->add(CareBillingArchiveTableMap::COL_BILL_DATE_TIME, $this->bill_date_time);
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_BILL_AMT)) {
            $criteria->add(CareBillingArchiveTableMap::COL_BILL_AMT, $this->bill_amt);
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_PAYMENT_DATE_TIME)) {
            $criteria->add(CareBillingArchiveTableMap::COL_PAYMENT_DATE_TIME, $this->payment_date_time);
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_PAYMENT_MODE)) {
            $criteria->add(CareBillingArchiveTableMap::COL_PAYMENT_MODE, $this->payment_mode);
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_CHEQUE_NO)) {
            $criteria->add(CareBillingArchiveTableMap::COL_CHEQUE_NO, $this->cheque_no);
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_CREDITCARD_NO)) {
            $criteria->add(CareBillingArchiveTableMap::COL_CREDITCARD_NO, $this->creditcard_no);
        }
        if ($this->isColumnModified(CareBillingArchiveTableMap::COL_PAID_BY)) {
            $criteria->add(CareBillingArchiveTableMap::COL_PAID_BY, $this->paid_by);
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
        $criteria = ChildCareBillingArchiveQuery::create();
        $criteria->add(CareBillingArchiveTableMap::COL_BILL_NO, $this->bill_no);

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
        $validPk = null !== $this->getBillNo();

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
        return $this->getBillNo();
    }

    /**
     * Generic method to set the primary key (bill_no column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setBillNo($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getBillNo();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareBillingArchive (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBillNo($this->getBillNo());
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setPatientName($this->getPatientName());
        $copyObj->setVorname($this->getVorname());
        $copyObj->setBillDateTime($this->getBillDateTime());
        $copyObj->setBillAmt($this->getBillAmt());
        $copyObj->setPaymentDateTime($this->getPaymentDateTime());
        $copyObj->setPaymentMode($this->getPaymentMode());
        $copyObj->setChequeNo($this->getChequeNo());
        $copyObj->setCreditcardNo($this->getCreditcardNo());
        $copyObj->setPaidBy($this->getPaidBy());
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
     * @return \CareMd\CareMd\CareBillingArchive Clone of current object.
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
        $this->bill_no = null;
        $this->encounter_nr = null;
        $this->patient_name = null;
        $this->vorname = null;
        $this->bill_date_time = null;
        $this->bill_amt = null;
        $this->payment_date_time = null;
        $this->payment_mode = null;
        $this->cheque_no = null;
        $this->creditcard_no = null;
        $this->paid_by = null;
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
        return (string) $this->exportTo(CareBillingArchiveTableMap::DEFAULT_STRING_FORMAT);
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
