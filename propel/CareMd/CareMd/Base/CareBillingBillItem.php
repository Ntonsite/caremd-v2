<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareBillingBillItemQuery as ChildCareBillingBillItemQuery;
use CareMd\CareMd\Map\CareBillingBillItemTableMap;
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
 * Base class that represents a row from the 'care_billing_bill_item' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareBillingBillItem implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareBillingBillItemTableMap';


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
     * The value for the bill_item_id field.
     *
     * @var        int
     */
    protected $bill_item_id;

    /**
     * The value for the bill_item_encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $bill_item_encounter_nr;

    /**
     * The value for the bill_item_code field.
     *
     * @var        string
     */
    protected $bill_item_code;

    /**
     * The value for the bill_item_unit_cost field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $bill_item_unit_cost;

    /**
     * The value for the bill_item_units field.
     *
     * @var        int
     */
    protected $bill_item_units;

    /**
     * The value for the bill_item_amount field.
     *
     * @var        double
     */
    protected $bill_item_amount;

    /**
     * The value for the bill_item_date field.
     *
     * @var        DateTime
     */
    protected $bill_item_date;

    /**
     * The value for the bill_item_status field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $bill_item_status;

    /**
     * The value for the bill_item_bill_no field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $bill_item_bill_no;

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
        $this->bill_item_encounter_nr = 0;
        $this->bill_item_unit_cost = 0.0;
        $this->bill_item_status = '0';
        $this->bill_item_bill_no = 0;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareBillingBillItem object.
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
     * Compares this with another <code>CareBillingBillItem</code> instance.  If
     * <code>obj</code> is an instance of <code>CareBillingBillItem</code>, delegates to
     * <code>equals(CareBillingBillItem)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareBillingBillItem The current object, for fluid interface
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
     * Get the [bill_item_id] column value.
     *
     * @return int
     */
    public function getBillItemId()
    {
        return $this->bill_item_id;
    }

    /**
     * Get the [bill_item_encounter_nr] column value.
     *
     * @return int
     */
    public function getBillItemEncounterNr()
    {
        return $this->bill_item_encounter_nr;
    }

    /**
     * Get the [bill_item_code] column value.
     *
     * @return string
     */
    public function getBillItemCode()
    {
        return $this->bill_item_code;
    }

    /**
     * Get the [bill_item_unit_cost] column value.
     *
     * @return double
     */
    public function getBillItemUnitCost()
    {
        return $this->bill_item_unit_cost;
    }

    /**
     * Get the [bill_item_units] column value.
     *
     * @return int
     */
    public function getBillItemUnits()
    {
        return $this->bill_item_units;
    }

    /**
     * Get the [bill_item_amount] column value.
     *
     * @return double
     */
    public function getBillItemAmount()
    {
        return $this->bill_item_amount;
    }

    /**
     * Get the [optionally formatted] temporal [bill_item_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getBillItemDate($format = NULL)
    {
        if ($format === null) {
            return $this->bill_item_date;
        } else {
            return $this->bill_item_date instanceof \DateTimeInterface ? $this->bill_item_date->format($format) : null;
        }
    }

    /**
     * Get the [bill_item_status] column value.
     *
     * @return string
     */
    public function getBillItemStatus()
    {
        return $this->bill_item_status;
    }

    /**
     * Get the [bill_item_bill_no] column value.
     *
     * @return int
     */
    public function getBillItemBillNo()
    {
        return $this->bill_item_bill_no;
    }

    /**
     * Set the value of [bill_item_id] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareBillingBillItem The current object (for fluent API support)
     */
    public function setBillItemId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->bill_item_id !== $v) {
            $this->bill_item_id = $v;
            $this->modifiedColumns[CareBillingBillItemTableMap::COL_BILL_ITEM_ID] = true;
        }

        return $this;
    } // setBillItemId()

    /**
     * Set the value of [bill_item_encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareBillingBillItem The current object (for fluent API support)
     */
    public function setBillItemEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->bill_item_encounter_nr !== $v) {
            $this->bill_item_encounter_nr = $v;
            $this->modifiedColumns[CareBillingBillItemTableMap::COL_BILL_ITEM_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setBillItemEncounterNr()

    /**
     * Set the value of [bill_item_code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareBillingBillItem The current object (for fluent API support)
     */
    public function setBillItemCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bill_item_code !== $v) {
            $this->bill_item_code = $v;
            $this->modifiedColumns[CareBillingBillItemTableMap::COL_BILL_ITEM_CODE] = true;
        }

        return $this;
    } // setBillItemCode()

    /**
     * Set the value of [bill_item_unit_cost] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareBillingBillItem The current object (for fluent API support)
     */
    public function setBillItemUnitCost($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->bill_item_unit_cost !== $v) {
            $this->bill_item_unit_cost = $v;
            $this->modifiedColumns[CareBillingBillItemTableMap::COL_BILL_ITEM_UNIT_COST] = true;
        }

        return $this;
    } // setBillItemUnitCost()

    /**
     * Set the value of [bill_item_units] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareBillingBillItem The current object (for fluent API support)
     */
    public function setBillItemUnits($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->bill_item_units !== $v) {
            $this->bill_item_units = $v;
            $this->modifiedColumns[CareBillingBillItemTableMap::COL_BILL_ITEM_UNITS] = true;
        }

        return $this;
    } // setBillItemUnits()

    /**
     * Set the value of [bill_item_amount] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareBillingBillItem The current object (for fluent API support)
     */
    public function setBillItemAmount($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->bill_item_amount !== $v) {
            $this->bill_item_amount = $v;
            $this->modifiedColumns[CareBillingBillItemTableMap::COL_BILL_ITEM_AMOUNT] = true;
        }

        return $this;
    } // setBillItemAmount()

    /**
     * Sets the value of [bill_item_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareBillingBillItem The current object (for fluent API support)
     */
    public function setBillItemDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->bill_item_date !== null || $dt !== null) {
            if ($this->bill_item_date === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->bill_item_date->format("Y-m-d H:i:s.u")) {
                $this->bill_item_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareBillingBillItemTableMap::COL_BILL_ITEM_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setBillItemDate()

    /**
     * Set the value of [bill_item_status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareBillingBillItem The current object (for fluent API support)
     */
    public function setBillItemStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bill_item_status !== $v) {
            $this->bill_item_status = $v;
            $this->modifiedColumns[CareBillingBillItemTableMap::COL_BILL_ITEM_STATUS] = true;
        }

        return $this;
    } // setBillItemStatus()

    /**
     * Set the value of [bill_item_bill_no] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareBillingBillItem The current object (for fluent API support)
     */
    public function setBillItemBillNo($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->bill_item_bill_no !== $v) {
            $this->bill_item_bill_no = $v;
            $this->modifiedColumns[CareBillingBillItemTableMap::COL_BILL_ITEM_BILL_NO] = true;
        }

        return $this;
    } // setBillItemBillNo()

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
            if ($this->bill_item_encounter_nr !== 0) {
                return false;
            }

            if ($this->bill_item_unit_cost !== 0.0) {
                return false;
            }

            if ($this->bill_item_status !== '0') {
                return false;
            }

            if ($this->bill_item_bill_no !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareBillingBillItemTableMap::translateFieldName('BillItemId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_item_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareBillingBillItemTableMap::translateFieldName('BillItemEncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_item_encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareBillingBillItemTableMap::translateFieldName('BillItemCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_item_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareBillingBillItemTableMap::translateFieldName('BillItemUnitCost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_item_unit_cost = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareBillingBillItemTableMap::translateFieldName('BillItemUnits', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_item_units = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareBillingBillItemTableMap::translateFieldName('BillItemAmount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_item_amount = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareBillingBillItemTableMap::translateFieldName('BillItemDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->bill_item_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareBillingBillItemTableMap::translateFieldName('BillItemStatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_item_status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareBillingBillItemTableMap::translateFieldName('BillItemBillNo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bill_item_bill_no = (null !== $col) ? (int) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 9; // 9 = CareBillingBillItemTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareBillingBillItem'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareBillingBillItemTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareBillingBillItemQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareBillingBillItem::setDeleted()
     * @see CareBillingBillItem::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingBillItemTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareBillingBillItemQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingBillItemTableMap::DATABASE_NAME);
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
                CareBillingBillItemTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareBillingBillItemTableMap::COL_BILL_ITEM_ID] = true;
        if (null !== $this->bill_item_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareBillingBillItemTableMap::COL_BILL_ITEM_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'bill_item_id';
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'bill_item_encounter_nr';
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'bill_item_code';
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_UNIT_COST)) {
            $modifiedColumns[':p' . $index++]  = 'bill_item_unit_cost';
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_UNITS)) {
            $modifiedColumns[':p' . $index++]  = 'bill_item_units';
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'bill_item_amount';
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'bill_item_date';
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'bill_item_status';
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_BILL_NO)) {
            $modifiedColumns[':p' . $index++]  = 'bill_item_bill_no';
        }

        $sql = sprintf(
            'INSERT INTO care_billing_bill_item (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'bill_item_id':
                        $stmt->bindValue($identifier, $this->bill_item_id, PDO::PARAM_INT);
                        break;
                    case 'bill_item_encounter_nr':
                        $stmt->bindValue($identifier, $this->bill_item_encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'bill_item_code':
                        $stmt->bindValue($identifier, $this->bill_item_code, PDO::PARAM_STR);
                        break;
                    case 'bill_item_unit_cost':
                        $stmt->bindValue($identifier, $this->bill_item_unit_cost, PDO::PARAM_STR);
                        break;
                    case 'bill_item_units':
                        $stmt->bindValue($identifier, $this->bill_item_units, PDO::PARAM_INT);
                        break;
                    case 'bill_item_amount':
                        $stmt->bindValue($identifier, $this->bill_item_amount, PDO::PARAM_STR);
                        break;
                    case 'bill_item_date':
                        $stmt->bindValue($identifier, $this->bill_item_date ? $this->bill_item_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'bill_item_status':
                        $stmt->bindValue($identifier, $this->bill_item_status, PDO::PARAM_STR);
                        break;
                    case 'bill_item_bill_no':
                        $stmt->bindValue($identifier, $this->bill_item_bill_no, PDO::PARAM_INT);
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
        $this->setBillItemId($pk);

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
        $pos = CareBillingBillItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getBillItemId();
                break;
            case 1:
                return $this->getBillItemEncounterNr();
                break;
            case 2:
                return $this->getBillItemCode();
                break;
            case 3:
                return $this->getBillItemUnitCost();
                break;
            case 4:
                return $this->getBillItemUnits();
                break;
            case 5:
                return $this->getBillItemAmount();
                break;
            case 6:
                return $this->getBillItemDate();
                break;
            case 7:
                return $this->getBillItemStatus();
                break;
            case 8:
                return $this->getBillItemBillNo();
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

        if (isset($alreadyDumpedObjects['CareBillingBillItem'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareBillingBillItem'][$this->hashCode()] = true;
        $keys = CareBillingBillItemTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBillItemId(),
            $keys[1] => $this->getBillItemEncounterNr(),
            $keys[2] => $this->getBillItemCode(),
            $keys[3] => $this->getBillItemUnitCost(),
            $keys[4] => $this->getBillItemUnits(),
            $keys[5] => $this->getBillItemAmount(),
            $keys[6] => $this->getBillItemDate(),
            $keys[7] => $this->getBillItemStatus(),
            $keys[8] => $this->getBillItemBillNo(),
        );
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
     * @return $this|\CareMd\CareMd\CareBillingBillItem
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareBillingBillItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareBillingBillItem
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBillItemId($value);
                break;
            case 1:
                $this->setBillItemEncounterNr($value);
                break;
            case 2:
                $this->setBillItemCode($value);
                break;
            case 3:
                $this->setBillItemUnitCost($value);
                break;
            case 4:
                $this->setBillItemUnits($value);
                break;
            case 5:
                $this->setBillItemAmount($value);
                break;
            case 6:
                $this->setBillItemDate($value);
                break;
            case 7:
                $this->setBillItemStatus($value);
                break;
            case 8:
                $this->setBillItemBillNo($value);
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
        $keys = CareBillingBillItemTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setBillItemId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setBillItemEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setBillItemCode($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setBillItemUnitCost($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setBillItemUnits($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setBillItemAmount($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setBillItemDate($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setBillItemStatus($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setBillItemBillNo($arr[$keys[8]]);
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
     * @return $this|\CareMd\CareMd\CareBillingBillItem The current object, for fluid interface
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
        $criteria = new Criteria(CareBillingBillItemTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_ID)) {
            $criteria->add(CareBillingBillItemTableMap::COL_BILL_ITEM_ID, $this->bill_item_id);
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_ENCOUNTER_NR)) {
            $criteria->add(CareBillingBillItemTableMap::COL_BILL_ITEM_ENCOUNTER_NR, $this->bill_item_encounter_nr);
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_CODE)) {
            $criteria->add(CareBillingBillItemTableMap::COL_BILL_ITEM_CODE, $this->bill_item_code);
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_UNIT_COST)) {
            $criteria->add(CareBillingBillItemTableMap::COL_BILL_ITEM_UNIT_COST, $this->bill_item_unit_cost);
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_UNITS)) {
            $criteria->add(CareBillingBillItemTableMap::COL_BILL_ITEM_UNITS, $this->bill_item_units);
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_AMOUNT)) {
            $criteria->add(CareBillingBillItemTableMap::COL_BILL_ITEM_AMOUNT, $this->bill_item_amount);
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_DATE)) {
            $criteria->add(CareBillingBillItemTableMap::COL_BILL_ITEM_DATE, $this->bill_item_date);
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_STATUS)) {
            $criteria->add(CareBillingBillItemTableMap::COL_BILL_ITEM_STATUS, $this->bill_item_status);
        }
        if ($this->isColumnModified(CareBillingBillItemTableMap::COL_BILL_ITEM_BILL_NO)) {
            $criteria->add(CareBillingBillItemTableMap::COL_BILL_ITEM_BILL_NO, $this->bill_item_bill_no);
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
        $criteria = ChildCareBillingBillItemQuery::create();
        $criteria->add(CareBillingBillItemTableMap::COL_BILL_ITEM_ID, $this->bill_item_id);

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
        $validPk = null !== $this->getBillItemId();

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
        return $this->getBillItemId();
    }

    /**
     * Generic method to set the primary key (bill_item_id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setBillItemId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getBillItemId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareBillingBillItem (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBillItemEncounterNr($this->getBillItemEncounterNr());
        $copyObj->setBillItemCode($this->getBillItemCode());
        $copyObj->setBillItemUnitCost($this->getBillItemUnitCost());
        $copyObj->setBillItemUnits($this->getBillItemUnits());
        $copyObj->setBillItemAmount($this->getBillItemAmount());
        $copyObj->setBillItemDate($this->getBillItemDate());
        $copyObj->setBillItemStatus($this->getBillItemStatus());
        $copyObj->setBillItemBillNo($this->getBillItemBillNo());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setBillItemId(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareBillingBillItem Clone of current object.
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
        $this->bill_item_id = null;
        $this->bill_item_encounter_nr = null;
        $this->bill_item_code = null;
        $this->bill_item_unit_cost = null;
        $this->bill_item_units = null;
        $this->bill_item_amount = null;
        $this->bill_item_date = null;
        $this->bill_item_status = null;
        $this->bill_item_bill_no = null;
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
        return (string) $this->exportTo(CareBillingBillItemTableMap::DEFAULT_STRING_FORMAT);
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
