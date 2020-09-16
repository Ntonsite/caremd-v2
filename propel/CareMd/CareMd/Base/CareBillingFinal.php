<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareBillingFinalQuery as ChildCareBillingFinalQuery;
use CareMd\CareMd\Map\CareBillingFinalTableMap;
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
 * Base class that represents a row from the 'care_billing_final' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareBillingFinal implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareBillingFinalTableMap';


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
     * The value for the final_id field.
     *
     * @var        int
     */
    protected $final_id;

    /**
     * The value for the final_encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $final_encounter_nr;

    /**
     * The value for the final_bill_no field.
     *
     * @var        int
     */
    protected $final_bill_no;

    /**
     * The value for the final_date field.
     *
     * @var        DateTime
     */
    protected $final_date;

    /**
     * The value for the final_total_bill_amount field.
     *
     * @var        double
     */
    protected $final_total_bill_amount;

    /**
     * The value for the final_discount field.
     *
     * @var        int
     */
    protected $final_discount;

    /**
     * The value for the final_total_receipt_amount field.
     *
     * @var        double
     */
    protected $final_total_receipt_amount;

    /**
     * The value for the final_amount_due field.
     *
     * @var        double
     */
    protected $final_amount_due;

    /**
     * The value for the final_amount_recieved field.
     *
     * @var        double
     */
    protected $final_amount_recieved;

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
        $this->final_encounter_nr = 0;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareBillingFinal object.
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
     * Compares this with another <code>CareBillingFinal</code> instance.  If
     * <code>obj</code> is an instance of <code>CareBillingFinal</code>, delegates to
     * <code>equals(CareBillingFinal)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareBillingFinal The current object, for fluid interface
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
     * Get the [final_id] column value.
     *
     * @return int
     */
    public function getFinalId()
    {
        return $this->final_id;
    }

    /**
     * Get the [final_encounter_nr] column value.
     *
     * @return int
     */
    public function getFinalEncounterNr()
    {
        return $this->final_encounter_nr;
    }

    /**
     * Get the [final_bill_no] column value.
     *
     * @return int
     */
    public function getFinalBillNo()
    {
        return $this->final_bill_no;
    }

    /**
     * Get the [optionally formatted] temporal [final_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFinalDate($format = NULL)
    {
        if ($format === null) {
            return $this->final_date;
        } else {
            return $this->final_date instanceof \DateTimeInterface ? $this->final_date->format($format) : null;
        }
    }

    /**
     * Get the [final_total_bill_amount] column value.
     *
     * @return double
     */
    public function getFinalTotalBillAmount()
    {
        return $this->final_total_bill_amount;
    }

    /**
     * Get the [final_discount] column value.
     *
     * @return int
     */
    public function getFinalDiscount()
    {
        return $this->final_discount;
    }

    /**
     * Get the [final_total_receipt_amount] column value.
     *
     * @return double
     */
    public function getFinalTotalReceiptAmount()
    {
        return $this->final_total_receipt_amount;
    }

    /**
     * Get the [final_amount_due] column value.
     *
     * @return double
     */
    public function getFinalAmountDue()
    {
        return $this->final_amount_due;
    }

    /**
     * Get the [final_amount_recieved] column value.
     *
     * @return double
     */
    public function getFinalAmountRecieved()
    {
        return $this->final_amount_recieved;
    }

    /**
     * Set the value of [final_id] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareBillingFinal The current object (for fluent API support)
     */
    public function setFinalId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->final_id !== $v) {
            $this->final_id = $v;
            $this->modifiedColumns[CareBillingFinalTableMap::COL_FINAL_ID] = true;
        }

        return $this;
    } // setFinalId()

    /**
     * Set the value of [final_encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareBillingFinal The current object (for fluent API support)
     */
    public function setFinalEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->final_encounter_nr !== $v) {
            $this->final_encounter_nr = $v;
            $this->modifiedColumns[CareBillingFinalTableMap::COL_FINAL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setFinalEncounterNr()

    /**
     * Set the value of [final_bill_no] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareBillingFinal The current object (for fluent API support)
     */
    public function setFinalBillNo($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->final_bill_no !== $v) {
            $this->final_bill_no = $v;
            $this->modifiedColumns[CareBillingFinalTableMap::COL_FINAL_BILL_NO] = true;
        }

        return $this;
    } // setFinalBillNo()

    /**
     * Sets the value of [final_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareBillingFinal The current object (for fluent API support)
     */
    public function setFinalDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->final_date !== null || $dt !== null) {
            if ($this->final_date === null || $dt === null || $dt->format("Y-m-d") !== $this->final_date->format("Y-m-d")) {
                $this->final_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareBillingFinalTableMap::COL_FINAL_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setFinalDate()

    /**
     * Set the value of [final_total_bill_amount] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareBillingFinal The current object (for fluent API support)
     */
    public function setFinalTotalBillAmount($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->final_total_bill_amount !== $v) {
            $this->final_total_bill_amount = $v;
            $this->modifiedColumns[CareBillingFinalTableMap::COL_FINAL_TOTAL_BILL_AMOUNT] = true;
        }

        return $this;
    } // setFinalTotalBillAmount()

    /**
     * Set the value of [final_discount] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareBillingFinal The current object (for fluent API support)
     */
    public function setFinalDiscount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->final_discount !== $v) {
            $this->final_discount = $v;
            $this->modifiedColumns[CareBillingFinalTableMap::COL_FINAL_DISCOUNT] = true;
        }

        return $this;
    } // setFinalDiscount()

    /**
     * Set the value of [final_total_receipt_amount] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareBillingFinal The current object (for fluent API support)
     */
    public function setFinalTotalReceiptAmount($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->final_total_receipt_amount !== $v) {
            $this->final_total_receipt_amount = $v;
            $this->modifiedColumns[CareBillingFinalTableMap::COL_FINAL_TOTAL_RECEIPT_AMOUNT] = true;
        }

        return $this;
    } // setFinalTotalReceiptAmount()

    /**
     * Set the value of [final_amount_due] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareBillingFinal The current object (for fluent API support)
     */
    public function setFinalAmountDue($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->final_amount_due !== $v) {
            $this->final_amount_due = $v;
            $this->modifiedColumns[CareBillingFinalTableMap::COL_FINAL_AMOUNT_DUE] = true;
        }

        return $this;
    } // setFinalAmountDue()

    /**
     * Set the value of [final_amount_recieved] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareBillingFinal The current object (for fluent API support)
     */
    public function setFinalAmountRecieved($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->final_amount_recieved !== $v) {
            $this->final_amount_recieved = $v;
            $this->modifiedColumns[CareBillingFinalTableMap::COL_FINAL_AMOUNT_RECIEVED] = true;
        }

        return $this;
    } // setFinalAmountRecieved()

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
            if ($this->final_encounter_nr !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareBillingFinalTableMap::translateFieldName('FinalId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->final_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareBillingFinalTableMap::translateFieldName('FinalEncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->final_encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareBillingFinalTableMap::translateFieldName('FinalBillNo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->final_bill_no = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareBillingFinalTableMap::translateFieldName('FinalDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->final_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareBillingFinalTableMap::translateFieldName('FinalTotalBillAmount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->final_total_bill_amount = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareBillingFinalTableMap::translateFieldName('FinalDiscount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->final_discount = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareBillingFinalTableMap::translateFieldName('FinalTotalReceiptAmount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->final_total_receipt_amount = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareBillingFinalTableMap::translateFieldName('FinalAmountDue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->final_amount_due = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareBillingFinalTableMap::translateFieldName('FinalAmountRecieved', TableMap::TYPE_PHPNAME, $indexType)];
            $this->final_amount_recieved = (null !== $col) ? (double) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 9; // 9 = CareBillingFinalTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareBillingFinal'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareBillingFinalTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareBillingFinalQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareBillingFinal::setDeleted()
     * @see CareBillingFinal::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingFinalTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareBillingFinalQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingFinalTableMap::DATABASE_NAME);
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
                CareBillingFinalTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareBillingFinalTableMap::COL_FINAL_ID] = true;
        if (null !== $this->final_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareBillingFinalTableMap::COL_FINAL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'final_id';
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'final_encounter_nr';
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_BILL_NO)) {
            $modifiedColumns[':p' . $index++]  = 'final_bill_no';
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'final_date';
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_TOTAL_BILL_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'final_total_bill_amount';
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_DISCOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'final_discount';
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_TOTAL_RECEIPT_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'final_total_receipt_amount';
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_AMOUNT_DUE)) {
            $modifiedColumns[':p' . $index++]  = 'final_amount_due';
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_AMOUNT_RECIEVED)) {
            $modifiedColumns[':p' . $index++]  = 'final_amount_recieved';
        }

        $sql = sprintf(
            'INSERT INTO care_billing_final (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'final_id':
                        $stmt->bindValue($identifier, $this->final_id, PDO::PARAM_INT);
                        break;
                    case 'final_encounter_nr':
                        $stmt->bindValue($identifier, $this->final_encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'final_bill_no':
                        $stmt->bindValue($identifier, $this->final_bill_no, PDO::PARAM_INT);
                        break;
                    case 'final_date':
                        $stmt->bindValue($identifier, $this->final_date ? $this->final_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'final_total_bill_amount':
                        $stmt->bindValue($identifier, $this->final_total_bill_amount, PDO::PARAM_STR);
                        break;
                    case 'final_discount':
                        $stmt->bindValue($identifier, $this->final_discount, PDO::PARAM_INT);
                        break;
                    case 'final_total_receipt_amount':
                        $stmt->bindValue($identifier, $this->final_total_receipt_amount, PDO::PARAM_STR);
                        break;
                    case 'final_amount_due':
                        $stmt->bindValue($identifier, $this->final_amount_due, PDO::PARAM_STR);
                        break;
                    case 'final_amount_recieved':
                        $stmt->bindValue($identifier, $this->final_amount_recieved, PDO::PARAM_STR);
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
        $this->setFinalId($pk);

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
        $pos = CareBillingFinalTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getFinalId();
                break;
            case 1:
                return $this->getFinalEncounterNr();
                break;
            case 2:
                return $this->getFinalBillNo();
                break;
            case 3:
                return $this->getFinalDate();
                break;
            case 4:
                return $this->getFinalTotalBillAmount();
                break;
            case 5:
                return $this->getFinalDiscount();
                break;
            case 6:
                return $this->getFinalTotalReceiptAmount();
                break;
            case 7:
                return $this->getFinalAmountDue();
                break;
            case 8:
                return $this->getFinalAmountRecieved();
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

        if (isset($alreadyDumpedObjects['CareBillingFinal'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareBillingFinal'][$this->hashCode()] = true;
        $keys = CareBillingFinalTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFinalId(),
            $keys[1] => $this->getFinalEncounterNr(),
            $keys[2] => $this->getFinalBillNo(),
            $keys[3] => $this->getFinalDate(),
            $keys[4] => $this->getFinalTotalBillAmount(),
            $keys[5] => $this->getFinalDiscount(),
            $keys[6] => $this->getFinalTotalReceiptAmount(),
            $keys[7] => $this->getFinalAmountDue(),
            $keys[8] => $this->getFinalAmountRecieved(),
        );
        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareBillingFinal
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareBillingFinalTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareBillingFinal
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setFinalId($value);
                break;
            case 1:
                $this->setFinalEncounterNr($value);
                break;
            case 2:
                $this->setFinalBillNo($value);
                break;
            case 3:
                $this->setFinalDate($value);
                break;
            case 4:
                $this->setFinalTotalBillAmount($value);
                break;
            case 5:
                $this->setFinalDiscount($value);
                break;
            case 6:
                $this->setFinalTotalReceiptAmount($value);
                break;
            case 7:
                $this->setFinalAmountDue($value);
                break;
            case 8:
                $this->setFinalAmountRecieved($value);
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
        $keys = CareBillingFinalTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setFinalId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFinalEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFinalBillNo($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setFinalDate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setFinalTotalBillAmount($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setFinalDiscount($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setFinalTotalReceiptAmount($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setFinalAmountDue($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setFinalAmountRecieved($arr[$keys[8]]);
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
     * @return $this|\CareMd\CareMd\CareBillingFinal The current object, for fluid interface
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
        $criteria = new Criteria(CareBillingFinalTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_ID)) {
            $criteria->add(CareBillingFinalTableMap::COL_FINAL_ID, $this->final_id);
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_ENCOUNTER_NR)) {
            $criteria->add(CareBillingFinalTableMap::COL_FINAL_ENCOUNTER_NR, $this->final_encounter_nr);
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_BILL_NO)) {
            $criteria->add(CareBillingFinalTableMap::COL_FINAL_BILL_NO, $this->final_bill_no);
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_DATE)) {
            $criteria->add(CareBillingFinalTableMap::COL_FINAL_DATE, $this->final_date);
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_TOTAL_BILL_AMOUNT)) {
            $criteria->add(CareBillingFinalTableMap::COL_FINAL_TOTAL_BILL_AMOUNT, $this->final_total_bill_amount);
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_DISCOUNT)) {
            $criteria->add(CareBillingFinalTableMap::COL_FINAL_DISCOUNT, $this->final_discount);
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_TOTAL_RECEIPT_AMOUNT)) {
            $criteria->add(CareBillingFinalTableMap::COL_FINAL_TOTAL_RECEIPT_AMOUNT, $this->final_total_receipt_amount);
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_AMOUNT_DUE)) {
            $criteria->add(CareBillingFinalTableMap::COL_FINAL_AMOUNT_DUE, $this->final_amount_due);
        }
        if ($this->isColumnModified(CareBillingFinalTableMap::COL_FINAL_AMOUNT_RECIEVED)) {
            $criteria->add(CareBillingFinalTableMap::COL_FINAL_AMOUNT_RECIEVED, $this->final_amount_recieved);
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
        $criteria = ChildCareBillingFinalQuery::create();
        $criteria->add(CareBillingFinalTableMap::COL_FINAL_ID, $this->final_id);

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
        $validPk = null !== $this->getFinalId();

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
        return $this->getFinalId();
    }

    /**
     * Generic method to set the primary key (final_id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setFinalId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getFinalId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareBillingFinal (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFinalEncounterNr($this->getFinalEncounterNr());
        $copyObj->setFinalBillNo($this->getFinalBillNo());
        $copyObj->setFinalDate($this->getFinalDate());
        $copyObj->setFinalTotalBillAmount($this->getFinalTotalBillAmount());
        $copyObj->setFinalDiscount($this->getFinalDiscount());
        $copyObj->setFinalTotalReceiptAmount($this->getFinalTotalReceiptAmount());
        $copyObj->setFinalAmountDue($this->getFinalAmountDue());
        $copyObj->setFinalAmountRecieved($this->getFinalAmountRecieved());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setFinalId(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareBillingFinal Clone of current object.
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
        $this->final_id = null;
        $this->final_encounter_nr = null;
        $this->final_bill_no = null;
        $this->final_date = null;
        $this->final_total_bill_amount = null;
        $this->final_discount = null;
        $this->final_total_receipt_amount = null;
        $this->final_amount_due = null;
        $this->final_amount_recieved = null;
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
        return (string) $this->exportTo(CareBillingFinalTableMap::DEFAULT_STRING_FORMAT);
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
