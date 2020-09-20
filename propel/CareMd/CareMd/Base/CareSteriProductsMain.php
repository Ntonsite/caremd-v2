<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareSteriProductsMainQuery as ChildCareSteriProductsMainQuery;
use CareMd\CareMd\Map\CareSteriProductsMainTableMap;
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
 * Base class that represents a row from the 'care_steri_products_main' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareSteriProductsMain implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareSteriProductsMainTableMap';


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
     * The value for the bestellnum field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $bestellnum;

    /**
     * The value for the containernum field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $containernum;

    /**
     * The value for the industrynum field.
     *
     * @var        string
     */
    protected $industrynum;

    /**
     * The value for the containername field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $containername;

    /**
     * The value for the description field.
     *
     * @var        string
     */
    protected $description;

    /**
     * The value for the packing field.
     *
     * @var        string
     */
    protected $packing;

    /**
     * The value for the minorder field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $minorder;

    /**
     * The value for the maxorder field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $maxorder;

    /**
     * The value for the proorder field.
     *
     * @var        string
     */
    protected $proorder;

    /**
     * The value for the picfile field.
     *
     * @var        string
     */
    protected $picfile;

    /**
     * The value for the encoder field.
     *
     * @var        string
     */
    protected $encoder;

    /**
     * The value for the enc_date field.
     *
     * @var        string
     */
    protected $enc_date;

    /**
     * The value for the enc_time field.
     *
     * @var        string
     */
    protected $enc_time;

    /**
     * The value for the lock_flag field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $lock_flag;

    /**
     * The value for the medgroup field.
     *
     * @var        string
     */
    protected $medgroup;

    /**
     * The value for the cave field.
     *
     * @var        string
     */
    protected $cave;

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
        $this->bestellnum = 0;
        $this->containernum = '';
        $this->containername = '';
        $this->minorder = 0;
        $this->maxorder = 0;
        $this->lock_flag = false;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareSteriProductsMain object.
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
     * Compares this with another <code>CareSteriProductsMain</code> instance.  If
     * <code>obj</code> is an instance of <code>CareSteriProductsMain</code>, delegates to
     * <code>equals(CareSteriProductsMain)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareSteriProductsMain The current object, for fluid interface
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
     * Get the [bestellnum] column value.
     *
     * @return int
     */
    public function getBestellnum()
    {
        return $this->bestellnum;
    }

    /**
     * Get the [containernum] column value.
     *
     * @return string
     */
    public function getContainernum()
    {
        return $this->containernum;
    }

    /**
     * Get the [industrynum] column value.
     *
     * @return string
     */
    public function getIndustrynum()
    {
        return $this->industrynum;
    }

    /**
     * Get the [containername] column value.
     *
     * @return string
     */
    public function getContainername()
    {
        return $this->containername;
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
     * Get the [packing] column value.
     *
     * @return string
     */
    public function getPacking()
    {
        return $this->packing;
    }

    /**
     * Get the [minorder] column value.
     *
     * @return int
     */
    public function getMinorder()
    {
        return $this->minorder;
    }

    /**
     * Get the [maxorder] column value.
     *
     * @return int
     */
    public function getMaxorder()
    {
        return $this->maxorder;
    }

    /**
     * Get the [proorder] column value.
     *
     * @return string
     */
    public function getProorder()
    {
        return $this->proorder;
    }

    /**
     * Get the [picfile] column value.
     *
     * @return string
     */
    public function getPicfile()
    {
        return $this->picfile;
    }

    /**
     * Get the [encoder] column value.
     *
     * @return string
     */
    public function getEncoder()
    {
        return $this->encoder;
    }

    /**
     * Get the [enc_date] column value.
     *
     * @return string
     */
    public function getEncDate()
    {
        return $this->enc_date;
    }

    /**
     * Get the [enc_time] column value.
     *
     * @return string
     */
    public function getEncTime()
    {
        return $this->enc_time;
    }

    /**
     * Get the [lock_flag] column value.
     *
     * @return boolean
     */
    public function getLockFlag()
    {
        return $this->lock_flag;
    }

    /**
     * Get the [lock_flag] column value.
     *
     * @return boolean
     */
    public function isLockFlag()
    {
        return $this->getLockFlag();
    }

    /**
     * Get the [medgroup] column value.
     *
     * @return string
     */
    public function getMedgroup()
    {
        return $this->medgroup;
    }

    /**
     * Get the [cave] column value.
     *
     * @return string
     */
    public function getCave()
    {
        return $this->cave;
    }

    /**
     * Set the value of [bestellnum] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setBestellnum($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->bestellnum !== $v) {
            $this->bestellnum = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_BESTELLNUM] = true;
        }

        return $this;
    } // setBestellnum()

    /**
     * Set the value of [containernum] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setContainernum($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->containernum !== $v) {
            $this->containernum = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_CONTAINERNUM] = true;
        }

        return $this;
    } // setContainernum()

    /**
     * Set the value of [industrynum] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setIndustrynum($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->industrynum !== $v) {
            $this->industrynum = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_INDUSTRYNUM] = true;
        }

        return $this;
    } // setIndustrynum()

    /**
     * Set the value of [containername] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setContainername($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->containername !== $v) {
            $this->containername = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_CONTAINERNAME] = true;
        }

        return $this;
    } // setContainername()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_DESCRIPTION] = true;
        }

        return $this;
    } // setDescription()

    /**
     * Set the value of [packing] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setPacking($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->packing !== $v) {
            $this->packing = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_PACKING] = true;
        }

        return $this;
    } // setPacking()

    /**
     * Set the value of [minorder] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setMinorder($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->minorder !== $v) {
            $this->minorder = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_MINORDER] = true;
        }

        return $this;
    } // setMinorder()

    /**
     * Set the value of [maxorder] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setMaxorder($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->maxorder !== $v) {
            $this->maxorder = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_MAXORDER] = true;
        }

        return $this;
    } // setMaxorder()

    /**
     * Set the value of [proorder] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setProorder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proorder !== $v) {
            $this->proorder = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_PROORDER] = true;
        }

        return $this;
    } // setProorder()

    /**
     * Set the value of [picfile] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setPicfile($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->picfile !== $v) {
            $this->picfile = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_PICFILE] = true;
        }

        return $this;
    } // setPicfile()

    /**
     * Set the value of [encoder] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setEncoder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->encoder !== $v) {
            $this->encoder = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_ENCODER] = true;
        }

        return $this;
    } // setEncoder()

    /**
     * Set the value of [enc_date] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setEncDate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->enc_date !== $v) {
            $this->enc_date = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_ENC_DATE] = true;
        }

        return $this;
    } // setEncDate()

    /**
     * Set the value of [enc_time] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setEncTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->enc_time !== $v) {
            $this->enc_time = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_ENC_TIME] = true;
        }

        return $this;
    } // setEncTime()

    /**
     * Sets the value of the [lock_flag] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setLockFlag($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->lock_flag !== $v) {
            $this->lock_flag = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_LOCK_FLAG] = true;
        }

        return $this;
    } // setLockFlag()

    /**
     * Set the value of [medgroup] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setMedgroup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medgroup !== $v) {
            $this->medgroup = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_MEDGROUP] = true;
        }

        return $this;
    } // setMedgroup()

    /**
     * Set the value of [cave] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object (for fluent API support)
     */
    public function setCave($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cave !== $v) {
            $this->cave = $v;
            $this->modifiedColumns[CareSteriProductsMainTableMap::COL_CAVE] = true;
        }

        return $this;
    } // setCave()

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
            if ($this->bestellnum !== 0) {
                return false;
            }

            if ($this->containernum !== '') {
                return false;
            }

            if ($this->containername !== '') {
                return false;
            }

            if ($this->minorder !== 0) {
                return false;
            }

            if ($this->maxorder !== 0) {
                return false;
            }

            if ($this->lock_flag !== false) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Bestellnum', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bestellnum = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Containernum', TableMap::TYPE_PHPNAME, $indexType)];
            $this->containernum = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Industrynum', TableMap::TYPE_PHPNAME, $indexType)];
            $this->industrynum = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Containername', TableMap::TYPE_PHPNAME, $indexType)];
            $this->containername = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Description', TableMap::TYPE_PHPNAME, $indexType)];
            $this->description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Packing', TableMap::TYPE_PHPNAME, $indexType)];
            $this->packing = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Minorder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->minorder = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Maxorder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->maxorder = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Proorder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->proorder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Picfile', TableMap::TYPE_PHPNAME, $indexType)];
            $this->picfile = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Encoder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encoder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareSteriProductsMainTableMap::translateFieldName('EncDate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->enc_date = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareSteriProductsMainTableMap::translateFieldName('EncTime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->enc_time = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareSteriProductsMainTableMap::translateFieldName('LockFlag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lock_flag = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Medgroup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->medgroup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareSteriProductsMainTableMap::translateFieldName('Cave', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cave = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 16; // 16 = CareSteriProductsMainTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareSteriProductsMain'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareSteriProductsMainTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareSteriProductsMainQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareSteriProductsMain::setDeleted()
     * @see CareSteriProductsMain::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareSteriProductsMainTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareSteriProductsMainQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareSteriProductsMainTableMap::DATABASE_NAME);
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
                CareSteriProductsMainTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_BESTELLNUM)) {
            $modifiedColumns[':p' . $index++]  = 'bestellnum';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_CONTAINERNUM)) {
            $modifiedColumns[':p' . $index++]  = 'containernum';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_INDUSTRYNUM)) {
            $modifiedColumns[':p' . $index++]  = 'industrynum';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_CONTAINERNAME)) {
            $modifiedColumns[':p' . $index++]  = 'containername';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'description';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_PACKING)) {
            $modifiedColumns[':p' . $index++]  = 'packing';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_MINORDER)) {
            $modifiedColumns[':p' . $index++]  = 'minorder';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_MAXORDER)) {
            $modifiedColumns[':p' . $index++]  = 'maxorder';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_PROORDER)) {
            $modifiedColumns[':p' . $index++]  = 'proorder';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_PICFILE)) {
            $modifiedColumns[':p' . $index++]  = 'picfile';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_ENCODER)) {
            $modifiedColumns[':p' . $index++]  = 'encoder';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_ENC_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'enc_date';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_ENC_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'enc_time';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_LOCK_FLAG)) {
            $modifiedColumns[':p' . $index++]  = 'lock_flag';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_MEDGROUP)) {
            $modifiedColumns[':p' . $index++]  = 'medgroup';
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_CAVE)) {
            $modifiedColumns[':p' . $index++]  = 'cave';
        }

        $sql = sprintf(
            'INSERT INTO care_steri_products_main (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'bestellnum':
                        $stmt->bindValue($identifier, $this->bestellnum, PDO::PARAM_INT);
                        break;
                    case 'containernum':
                        $stmt->bindValue($identifier, $this->containernum, PDO::PARAM_STR);
                        break;
                    case 'industrynum':
                        $stmt->bindValue($identifier, $this->industrynum, PDO::PARAM_STR);
                        break;
                    case 'containername':
                        $stmt->bindValue($identifier, $this->containername, PDO::PARAM_STR);
                        break;
                    case 'description':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case 'packing':
                        $stmt->bindValue($identifier, $this->packing, PDO::PARAM_STR);
                        break;
                    case 'minorder':
                        $stmt->bindValue($identifier, $this->minorder, PDO::PARAM_INT);
                        break;
                    case 'maxorder':
                        $stmt->bindValue($identifier, $this->maxorder, PDO::PARAM_INT);
                        break;
                    case 'proorder':
                        $stmt->bindValue($identifier, $this->proorder, PDO::PARAM_STR);
                        break;
                    case 'picfile':
                        $stmt->bindValue($identifier, $this->picfile, PDO::PARAM_STR);
                        break;
                    case 'encoder':
                        $stmt->bindValue($identifier, $this->encoder, PDO::PARAM_STR);
                        break;
                    case 'enc_date':
                        $stmt->bindValue($identifier, $this->enc_date, PDO::PARAM_STR);
                        break;
                    case 'enc_time':
                        $stmt->bindValue($identifier, $this->enc_time, PDO::PARAM_STR);
                        break;
                    case 'lock_flag':
                        $stmt->bindValue($identifier, (int) $this->lock_flag, PDO::PARAM_INT);
                        break;
                    case 'medgroup':
                        $stmt->bindValue($identifier, $this->medgroup, PDO::PARAM_STR);
                        break;
                    case 'cave':
                        $stmt->bindValue($identifier, $this->cave, PDO::PARAM_STR);
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
        $pos = CareSteriProductsMainTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getBestellnum();
                break;
            case 1:
                return $this->getContainernum();
                break;
            case 2:
                return $this->getIndustrynum();
                break;
            case 3:
                return $this->getContainername();
                break;
            case 4:
                return $this->getDescription();
                break;
            case 5:
                return $this->getPacking();
                break;
            case 6:
                return $this->getMinorder();
                break;
            case 7:
                return $this->getMaxorder();
                break;
            case 8:
                return $this->getProorder();
                break;
            case 9:
                return $this->getPicfile();
                break;
            case 10:
                return $this->getEncoder();
                break;
            case 11:
                return $this->getEncDate();
                break;
            case 12:
                return $this->getEncTime();
                break;
            case 13:
                return $this->getLockFlag();
                break;
            case 14:
                return $this->getMedgroup();
                break;
            case 15:
                return $this->getCave();
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

        if (isset($alreadyDumpedObjects['CareSteriProductsMain'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareSteriProductsMain'][$this->hashCode()] = true;
        $keys = CareSteriProductsMainTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestellnum(),
            $keys[1] => $this->getContainernum(),
            $keys[2] => $this->getIndustrynum(),
            $keys[3] => $this->getContainername(),
            $keys[4] => $this->getDescription(),
            $keys[5] => $this->getPacking(),
            $keys[6] => $this->getMinorder(),
            $keys[7] => $this->getMaxorder(),
            $keys[8] => $this->getProorder(),
            $keys[9] => $this->getPicfile(),
            $keys[10] => $this->getEncoder(),
            $keys[11] => $this->getEncDate(),
            $keys[12] => $this->getEncTime(),
            $keys[13] => $this->getLockFlag(),
            $keys[14] => $this->getMedgroup(),
            $keys[15] => $this->getCave(),
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
     * @return $this|\CareMd\CareMd\CareSteriProductsMain
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareSteriProductsMainTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareSteriProductsMain
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBestellnum($value);
                break;
            case 1:
                $this->setContainernum($value);
                break;
            case 2:
                $this->setIndustrynum($value);
                break;
            case 3:
                $this->setContainername($value);
                break;
            case 4:
                $this->setDescription($value);
                break;
            case 5:
                $this->setPacking($value);
                break;
            case 6:
                $this->setMinorder($value);
                break;
            case 7:
                $this->setMaxorder($value);
                break;
            case 8:
                $this->setProorder($value);
                break;
            case 9:
                $this->setPicfile($value);
                break;
            case 10:
                $this->setEncoder($value);
                break;
            case 11:
                $this->setEncDate($value);
                break;
            case 12:
                $this->setEncTime($value);
                break;
            case 13:
                $this->setLockFlag($value);
                break;
            case 14:
                $this->setMedgroup($value);
                break;
            case 15:
                $this->setCave($value);
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
        $keys = CareSteriProductsMainTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setBestellnum($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setContainernum($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIndustrynum($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setContainername($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDescription($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPacking($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setMinorder($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setMaxorder($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setProorder($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPicfile($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setEncoder($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setEncDate($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setEncTime($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setLockFlag($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setMedgroup($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCave($arr[$keys[15]]);
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
     * @return $this|\CareMd\CareMd\CareSteriProductsMain The current object, for fluid interface
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
        $criteria = new Criteria(CareSteriProductsMainTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_BESTELLNUM)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_BESTELLNUM, $this->bestellnum);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_CONTAINERNUM)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_CONTAINERNUM, $this->containernum);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_INDUSTRYNUM)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_INDUSTRYNUM, $this->industrynum);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_CONTAINERNAME)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_CONTAINERNAME, $this->containername);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_DESCRIPTION)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_DESCRIPTION, $this->description);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_PACKING)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_PACKING, $this->packing);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_MINORDER)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_MINORDER, $this->minorder);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_MAXORDER)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_MAXORDER, $this->maxorder);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_PROORDER)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_PROORDER, $this->proorder);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_PICFILE)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_PICFILE, $this->picfile);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_ENCODER)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_ENCODER, $this->encoder);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_ENC_DATE)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_ENC_DATE, $this->enc_date);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_ENC_TIME)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_ENC_TIME, $this->enc_time);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_LOCK_FLAG)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_LOCK_FLAG, $this->lock_flag);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_MEDGROUP)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_MEDGROUP, $this->medgroup);
        }
        if ($this->isColumnModified(CareSteriProductsMainTableMap::COL_CAVE)) {
            $criteria->add(CareSteriProductsMainTableMap::COL_CAVE, $this->cave);
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
        throw new LogicException('The CareSteriProductsMain object has no primary key');

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
        $validPk = false;

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
     * Returns NULL since this table doesn't have a primary key.
     * This method exists only for BC and is deprecated!
     * @return null
     */
    public function getPrimaryKey()
    {
        return null;
    }

    /**
     * Dummy primary key setter.
     *
     * This function only exists to preserve backwards compatibility.  It is no longer
     * needed or required by the Persistent interface.  It will be removed in next BC-breaking
     * release of Propel.
     *
     * @deprecated
     */
    public function setPrimaryKey($pk)
    {
        // do nothing, because this object doesn't have any primary keys
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return ;
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareSteriProductsMain (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestellnum($this->getBestellnum());
        $copyObj->setContainernum($this->getContainernum());
        $copyObj->setIndustrynum($this->getIndustrynum());
        $copyObj->setContainername($this->getContainername());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setPacking($this->getPacking());
        $copyObj->setMinorder($this->getMinorder());
        $copyObj->setMaxorder($this->getMaxorder());
        $copyObj->setProorder($this->getProorder());
        $copyObj->setPicfile($this->getPicfile());
        $copyObj->setEncoder($this->getEncoder());
        $copyObj->setEncDate($this->getEncDate());
        $copyObj->setEncTime($this->getEncTime());
        $copyObj->setLockFlag($this->getLockFlag());
        $copyObj->setMedgroup($this->getMedgroup());
        $copyObj->setCave($this->getCave());
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
     * @return \CareMd\CareMd\CareSteriProductsMain Clone of current object.
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
        $this->bestellnum = null;
        $this->containernum = null;
        $this->industrynum = null;
        $this->containername = null;
        $this->description = null;
        $this->packing = null;
        $this->minorder = null;
        $this->maxorder = null;
        $this->proorder = null;
        $this->picfile = null;
        $this->encoder = null;
        $this->enc_date = null;
        $this->enc_time = null;
        $this->lock_flag = null;
        $this->medgroup = null;
        $this->cave = null;
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
        return (string) $this->exportTo(CareSteriProductsMainTableMap::DEFAULT_STRING_FORMAT);
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
