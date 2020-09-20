<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzStockItemPropertiesQuery as ChildCareTzStockItemPropertiesQuery;
use CareMd\CareMd\Map\CareTzStockItemPropertiesTableMap;
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
 * Base class that represents a row from the 'care_tz_stock_item_properties' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzStockItemProperties implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzStockItemPropertiesTableMap';


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
     * The value for the drugsandservices_id field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $drugsandservices_id;

    /**
     * The value for the item_description field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $item_description;

    /**
     * The value for the unitofissue field.
     *
     * @var        string
     */
    protected $unitofissue;

    /**
     * The value for the alternatives field.
     *
     * @var        string
     */
    protected $alternatives;

    /**
     * The value for the maximumlevel field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $maximumlevel;

    /**
     * The value for the reorderlevel field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $reorderlevel;

    /**
     * The value for the minimumlevel field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $minimumlevel;

    /**
     * The value for the orderquantity field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $orderquantity;

    /**
     * The value for the is_disabled field.
     *
     * @var        int
     */
    protected $is_disabled;

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
        $this->drugsandservices_id = '0';
        $this->item_description = '0';
        $this->maximumlevel = '0';
        $this->reorderlevel = '0';
        $this->minimumlevel = '0';
        $this->orderquantity = '0';
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTzStockItemProperties object.
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
     * Compares this with another <code>CareTzStockItemProperties</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzStockItemProperties</code>, delegates to
     * <code>equals(CareTzStockItemProperties)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzStockItemProperties The current object, for fluid interface
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
     * Get the [drugsandservices_id] column value.
     *
     * @return string
     */
    public function getDrugsandservicesId()
    {
        return $this->drugsandservices_id;
    }

    /**
     * Get the [item_description] column value.
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->item_description;
    }

    /**
     * Get the [unitofissue] column value.
     *
     * @return string
     */
    public function getUnitofissue()
    {
        return $this->unitofissue;
    }

    /**
     * Get the [alternatives] column value.
     *
     * @return string
     */
    public function getAlternatives()
    {
        return $this->alternatives;
    }

    /**
     * Get the [maximumlevel] column value.
     *
     * @return string
     */
    public function getMaximumlevel()
    {
        return $this->maximumlevel;
    }

    /**
     * Get the [reorderlevel] column value.
     *
     * @return string
     */
    public function getReorderlevel()
    {
        return $this->reorderlevel;
    }

    /**
     * Get the [minimumlevel] column value.
     *
     * @return string
     */
    public function getMinimumlevel()
    {
        return $this->minimumlevel;
    }

    /**
     * Get the [orderquantity] column value.
     *
     * @return string
     */
    public function getOrderquantity()
    {
        return $this->orderquantity;
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
     * Set the value of [id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [drugsandservices_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object (for fluent API support)
     */
    public function setDrugsandservicesId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->drugsandservices_id !== $v) {
            $this->drugsandservices_id = $v;
            $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_DRUGSANDSERVICES_ID] = true;
        }

        return $this;
    } // setDrugsandservicesId()

    /**
     * Set the value of [item_description] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object (for fluent API support)
     */
    public function setItemDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->item_description !== $v) {
            $this->item_description = $v;
            $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_ITEM_DESCRIPTION] = true;
        }

        return $this;
    } // setItemDescription()

    /**
     * Set the value of [unitofissue] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object (for fluent API support)
     */
    public function setUnitofissue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->unitofissue !== $v) {
            $this->unitofissue = $v;
            $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_UNITOFISSUE] = true;
        }

        return $this;
    } // setUnitofissue()

    /**
     * Set the value of [alternatives] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object (for fluent API support)
     */
    public function setAlternatives($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->alternatives !== $v) {
            $this->alternatives = $v;
            $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_ALTERNATIVES] = true;
        }

        return $this;
    } // setAlternatives()

    /**
     * Set the value of [maximumlevel] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object (for fluent API support)
     */
    public function setMaximumlevel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->maximumlevel !== $v) {
            $this->maximumlevel = $v;
            $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_MAXIMUMLEVEL] = true;
        }

        return $this;
    } // setMaximumlevel()

    /**
     * Set the value of [reorderlevel] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object (for fluent API support)
     */
    public function setReorderlevel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->reorderlevel !== $v) {
            $this->reorderlevel = $v;
            $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_REORDERLEVEL] = true;
        }

        return $this;
    } // setReorderlevel()

    /**
     * Set the value of [minimumlevel] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object (for fluent API support)
     */
    public function setMinimumlevel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->minimumlevel !== $v) {
            $this->minimumlevel = $v;
            $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_MINIMUMLEVEL] = true;
        }

        return $this;
    } // setMinimumlevel()

    /**
     * Set the value of [orderquantity] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object (for fluent API support)
     */
    public function setOrderquantity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->orderquantity !== $v) {
            $this->orderquantity = $v;
            $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_ORDERQUANTITY] = true;
        }

        return $this;
    } // setOrderquantity()

    /**
     * Set the value of [is_disabled] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object (for fluent API support)
     */
    public function setIsDisabled($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_disabled !== $v) {
            $this->is_disabled = $v;
            $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_IS_DISABLED] = true;
        }

        return $this;
    } // setIsDisabled()

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
            if ($this->drugsandservices_id !== '0') {
                return false;
            }

            if ($this->item_description !== '0') {
                return false;
            }

            if ($this->maximumlevel !== '0') {
                return false;
            }

            if ($this->reorderlevel !== '0') {
                return false;
            }

            if ($this->minimumlevel !== '0') {
                return false;
            }

            if ($this->orderquantity !== '0') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzStockItemPropertiesTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzStockItemPropertiesTableMap::translateFieldName('DrugsandservicesId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->drugsandservices_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzStockItemPropertiesTableMap::translateFieldName('ItemDescription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->item_description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzStockItemPropertiesTableMap::translateFieldName('Unitofissue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unitofissue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzStockItemPropertiesTableMap::translateFieldName('Alternatives', TableMap::TYPE_PHPNAME, $indexType)];
            $this->alternatives = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzStockItemPropertiesTableMap::translateFieldName('Maximumlevel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->maximumlevel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzStockItemPropertiesTableMap::translateFieldName('Reorderlevel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->reorderlevel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzStockItemPropertiesTableMap::translateFieldName('Minimumlevel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->minimumlevel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzStockItemPropertiesTableMap::translateFieldName('Orderquantity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->orderquantity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzStockItemPropertiesTableMap::translateFieldName('IsDisabled', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_disabled = (null !== $col) ? (int) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 10; // 10 = CareTzStockItemPropertiesTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzStockItemProperties'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzStockItemPropertiesTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzStockItemPropertiesQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzStockItemProperties::setDeleted()
     * @see CareTzStockItemProperties::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockItemPropertiesTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzStockItemPropertiesQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzStockItemPropertiesTableMap::DATABASE_NAME);
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
                CareTzStockItemPropertiesTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzStockItemPropertiesTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzStockItemPropertiesTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'ID';
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_DRUGSANDSERVICES_ID)) {
            $modifiedColumns[':p' . $index++]  = 'Drugsandservices_id';
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_ITEM_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'item_description';
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_UNITOFISSUE)) {
            $modifiedColumns[':p' . $index++]  = 'UnitOfIssue';
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_ALTERNATIVES)) {
            $modifiedColumns[':p' . $index++]  = 'Alternatives';
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_MAXIMUMLEVEL)) {
            $modifiedColumns[':p' . $index++]  = 'Maximumlevel';
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_REORDERLEVEL)) {
            $modifiedColumns[':p' . $index++]  = 'Reorderlevel';
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_MINIMUMLEVEL)) {
            $modifiedColumns[':p' . $index++]  = 'Minimumlevel';
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_ORDERQUANTITY)) {
            $modifiedColumns[':p' . $index++]  = 'Orderquantity';
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_IS_DISABLED)) {
            $modifiedColumns[':p' . $index++]  = 'is_disabled';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_stock_item_properties (%s) VALUES (%s)',
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
                    case 'Drugsandservices_id':
                        $stmt->bindValue($identifier, $this->drugsandservices_id, PDO::PARAM_STR);
                        break;
                    case 'item_description':
                        $stmt->bindValue($identifier, $this->item_description, PDO::PARAM_STR);
                        break;
                    case 'UnitOfIssue':
                        $stmt->bindValue($identifier, $this->unitofissue, PDO::PARAM_STR);
                        break;
                    case 'Alternatives':
                        $stmt->bindValue($identifier, $this->alternatives, PDO::PARAM_STR);
                        break;
                    case 'Maximumlevel':
                        $stmt->bindValue($identifier, $this->maximumlevel, PDO::PARAM_INT);
                        break;
                    case 'Reorderlevel':
                        $stmt->bindValue($identifier, $this->reorderlevel, PDO::PARAM_INT);
                        break;
                    case 'Minimumlevel':
                        $stmt->bindValue($identifier, $this->minimumlevel, PDO::PARAM_INT);
                        break;
                    case 'Orderquantity':
                        $stmt->bindValue($identifier, $this->orderquantity, PDO::PARAM_INT);
                        break;
                    case 'is_disabled':
                        $stmt->bindValue($identifier, $this->is_disabled, PDO::PARAM_INT);
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
        $pos = CareTzStockItemPropertiesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getDrugsandservicesId();
                break;
            case 2:
                return $this->getItemDescription();
                break;
            case 3:
                return $this->getUnitofissue();
                break;
            case 4:
                return $this->getAlternatives();
                break;
            case 5:
                return $this->getMaximumlevel();
                break;
            case 6:
                return $this->getReorderlevel();
                break;
            case 7:
                return $this->getMinimumlevel();
                break;
            case 8:
                return $this->getOrderquantity();
                break;
            case 9:
                return $this->getIsDisabled();
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

        if (isset($alreadyDumpedObjects['CareTzStockItemProperties'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzStockItemProperties'][$this->hashCode()] = true;
        $keys = CareTzStockItemPropertiesTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getDrugsandservicesId(),
            $keys[2] => $this->getItemDescription(),
            $keys[3] => $this->getUnitofissue(),
            $keys[4] => $this->getAlternatives(),
            $keys[5] => $this->getMaximumlevel(),
            $keys[6] => $this->getReorderlevel(),
            $keys[7] => $this->getMinimumlevel(),
            $keys[8] => $this->getOrderquantity(),
            $keys[9] => $this->getIsDisabled(),
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
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzStockItemPropertiesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setDrugsandservicesId($value);
                break;
            case 2:
                $this->setItemDescription($value);
                break;
            case 3:
                $this->setUnitofissue($value);
                break;
            case 4:
                $this->setAlternatives($value);
                break;
            case 5:
                $this->setMaximumlevel($value);
                break;
            case 6:
                $this->setReorderlevel($value);
                break;
            case 7:
                $this->setMinimumlevel($value);
                break;
            case 8:
                $this->setOrderquantity($value);
                break;
            case 9:
                $this->setIsDisabled($value);
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
        $keys = CareTzStockItemPropertiesTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setDrugsandservicesId($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setItemDescription($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setUnitofissue($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setAlternatives($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setMaximumlevel($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setReorderlevel($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setMinimumlevel($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOrderquantity($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIsDisabled($arr[$keys[9]]);
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
     * @return $this|\CareMd\CareMd\CareTzStockItemProperties The current object, for fluid interface
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
        $criteria = new Criteria(CareTzStockItemPropertiesTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_ID)) {
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_DRUGSANDSERVICES_ID)) {
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_DRUGSANDSERVICES_ID, $this->drugsandservices_id);
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_ITEM_DESCRIPTION)) {
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_ITEM_DESCRIPTION, $this->item_description);
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_UNITOFISSUE)) {
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_UNITOFISSUE, $this->unitofissue);
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_ALTERNATIVES)) {
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_ALTERNATIVES, $this->alternatives);
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_MAXIMUMLEVEL)) {
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_MAXIMUMLEVEL, $this->maximumlevel);
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_REORDERLEVEL)) {
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_REORDERLEVEL, $this->reorderlevel);
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_MINIMUMLEVEL)) {
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_MINIMUMLEVEL, $this->minimumlevel);
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_ORDERQUANTITY)) {
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_ORDERQUANTITY, $this->orderquantity);
        }
        if ($this->isColumnModified(CareTzStockItemPropertiesTableMap::COL_IS_DISABLED)) {
            $criteria->add(CareTzStockItemPropertiesTableMap::COL_IS_DISABLED, $this->is_disabled);
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
        $criteria = ChildCareTzStockItemPropertiesQuery::create();
        $criteria->add(CareTzStockItemPropertiesTableMap::COL_ID, $this->id);

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
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzStockItemProperties (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDrugsandservicesId($this->getDrugsandservicesId());
        $copyObj->setItemDescription($this->getItemDescription());
        $copyObj->setUnitofissue($this->getUnitofissue());
        $copyObj->setAlternatives($this->getAlternatives());
        $copyObj->setMaximumlevel($this->getMaximumlevel());
        $copyObj->setReorderlevel($this->getReorderlevel());
        $copyObj->setMinimumlevel($this->getMinimumlevel());
        $copyObj->setOrderquantity($this->getOrderquantity());
        $copyObj->setIsDisabled($this->getIsDisabled());
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
     * @return \CareMd\CareMd\CareTzStockItemProperties Clone of current object.
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
        $this->drugsandservices_id = null;
        $this->item_description = null;
        $this->unitofissue = null;
        $this->alternatives = null;
        $this->maximumlevel = null;
        $this->reorderlevel = null;
        $this->minimumlevel = null;
        $this->orderquantity = null;
        $this->is_disabled = null;
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
        return (string) $this->exportTo(CareTzStockItemPropertiesTableMap::DEFAULT_STRING_FORMAT);
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
