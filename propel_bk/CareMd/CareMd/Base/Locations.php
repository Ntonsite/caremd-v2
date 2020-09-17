<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\LocationsQuery as ChildLocationsQuery;
use CareMd\CareMd\Map\LocationsTableMap;
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
 * Base class that represents a row from the 'locations' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class Locations implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\LocationsTableMap';


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
     * The value for the loccode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $loccode;

    /**
     * The value for the locationname field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $locationname;

    /**
     * The value for the deladd1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $deladd1;

    /**
     * The value for the deladd2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $deladd2;

    /**
     * The value for the deladd3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $deladd3;

    /**
     * The value for the deladd4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $deladd4;

    /**
     * The value for the deladd5 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $deladd5;

    /**
     * The value for the deladd6 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $deladd6;

    /**
     * The value for the tel field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tel;

    /**
     * The value for the fax field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $fax;

    /**
     * The value for the email field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the contact field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $contact;

    /**
     * The value for the taxprovinceid field.
     *
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $taxprovinceid;

    /**
     * The value for the cashsalecustomer field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cashsalecustomer;

    /**
     * The value for the cashsalebranch field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cashsalebranch;

    /**
     * The value for the managed field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $managed;

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
        $this->loccode = '';
        $this->locationname = '';
        $this->deladd1 = '';
        $this->deladd2 = '';
        $this->deladd3 = '';
        $this->deladd4 = '';
        $this->deladd5 = '';
        $this->deladd6 = '';
        $this->tel = '';
        $this->fax = '';
        $this->email = '';
        $this->contact = '';
        $this->taxprovinceid = 1;
        $this->cashsalecustomer = '';
        $this->cashsalebranch = '';
        $this->managed = 0;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\Locations object.
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
     * Compares this with another <code>Locations</code> instance.  If
     * <code>obj</code> is an instance of <code>Locations</code>, delegates to
     * <code>equals(Locations)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Locations The current object, for fluid interface
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
     * Get the [loccode] column value.
     *
     * @return string
     */
    public function getLoccode()
    {
        return $this->loccode;
    }

    /**
     * Get the [locationname] column value.
     *
     * @return string
     */
    public function getLocationname()
    {
        return $this->locationname;
    }

    /**
     * Get the [deladd1] column value.
     *
     * @return string
     */
    public function getDeladd1()
    {
        return $this->deladd1;
    }

    /**
     * Get the [deladd2] column value.
     *
     * @return string
     */
    public function getDeladd2()
    {
        return $this->deladd2;
    }

    /**
     * Get the [deladd3] column value.
     *
     * @return string
     */
    public function getDeladd3()
    {
        return $this->deladd3;
    }

    /**
     * Get the [deladd4] column value.
     *
     * @return string
     */
    public function getDeladd4()
    {
        return $this->deladd4;
    }

    /**
     * Get the [deladd5] column value.
     *
     * @return string
     */
    public function getDeladd5()
    {
        return $this->deladd5;
    }

    /**
     * Get the [deladd6] column value.
     *
     * @return string
     */
    public function getDeladd6()
    {
        return $this->deladd6;
    }

    /**
     * Get the [tel] column value.
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
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
     * Get the [contact] column value.
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Get the [taxprovinceid] column value.
     *
     * @return int
     */
    public function getTaxprovinceid()
    {
        return $this->taxprovinceid;
    }

    /**
     * Get the [cashsalecustomer] column value.
     *
     * @return string
     */
    public function getCashsalecustomer()
    {
        return $this->cashsalecustomer;
    }

    /**
     * Get the [cashsalebranch] column value.
     *
     * @return string
     */
    public function getCashsalebranch()
    {
        return $this->cashsalebranch;
    }

    /**
     * Get the [managed] column value.
     *
     * @return int
     */
    public function getManaged()
    {
        return $this->managed;
    }

    /**
     * Set the value of [loccode] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setLoccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->loccode !== $v) {
            $this->loccode = $v;
            $this->modifiedColumns[LocationsTableMap::COL_LOCCODE] = true;
        }

        return $this;
    } // setLoccode()

    /**
     * Set the value of [locationname] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setLocationname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->locationname !== $v) {
            $this->locationname = $v;
            $this->modifiedColumns[LocationsTableMap::COL_LOCATIONNAME] = true;
        }

        return $this;
    } // setLocationname()

    /**
     * Set the value of [deladd1] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setDeladd1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->deladd1 !== $v) {
            $this->deladd1 = $v;
            $this->modifiedColumns[LocationsTableMap::COL_DELADD1] = true;
        }

        return $this;
    } // setDeladd1()

    /**
     * Set the value of [deladd2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setDeladd2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->deladd2 !== $v) {
            $this->deladd2 = $v;
            $this->modifiedColumns[LocationsTableMap::COL_DELADD2] = true;
        }

        return $this;
    } // setDeladd2()

    /**
     * Set the value of [deladd3] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setDeladd3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->deladd3 !== $v) {
            $this->deladd3 = $v;
            $this->modifiedColumns[LocationsTableMap::COL_DELADD3] = true;
        }

        return $this;
    } // setDeladd3()

    /**
     * Set the value of [deladd4] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setDeladd4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->deladd4 !== $v) {
            $this->deladd4 = $v;
            $this->modifiedColumns[LocationsTableMap::COL_DELADD4] = true;
        }

        return $this;
    } // setDeladd4()

    /**
     * Set the value of [deladd5] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setDeladd5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->deladd5 !== $v) {
            $this->deladd5 = $v;
            $this->modifiedColumns[LocationsTableMap::COL_DELADD5] = true;
        }

        return $this;
    } // setDeladd5()

    /**
     * Set the value of [deladd6] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setDeladd6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->deladd6 !== $v) {
            $this->deladd6 = $v;
            $this->modifiedColumns[LocationsTableMap::COL_DELADD6] = true;
        }

        return $this;
    } // setDeladd6()

    /**
     * Set the value of [tel] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setTel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tel !== $v) {
            $this->tel = $v;
            $this->modifiedColumns[LocationsTableMap::COL_TEL] = true;
        }

        return $this;
    } // setTel()

    /**
     * Set the value of [fax] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[LocationsTableMap::COL_FAX] = true;
        }

        return $this;
    } // setFax()

    /**
     * Set the value of [email] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[LocationsTableMap::COL_EMAIL] = true;
        }

        return $this;
    } // setEmail()

    /**
     * Set the value of [contact] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setContact($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contact !== $v) {
            $this->contact = $v;
            $this->modifiedColumns[LocationsTableMap::COL_CONTACT] = true;
        }

        return $this;
    } // setContact()

    /**
     * Set the value of [taxprovinceid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setTaxprovinceid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->taxprovinceid !== $v) {
            $this->taxprovinceid = $v;
            $this->modifiedColumns[LocationsTableMap::COL_TAXPROVINCEID] = true;
        }

        return $this;
    } // setTaxprovinceid()

    /**
     * Set the value of [cashsalecustomer] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setCashsalecustomer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cashsalecustomer !== $v) {
            $this->cashsalecustomer = $v;
            $this->modifiedColumns[LocationsTableMap::COL_CASHSALECUSTOMER] = true;
        }

        return $this;
    } // setCashsalecustomer()

    /**
     * Set the value of [cashsalebranch] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setCashsalebranch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cashsalebranch !== $v) {
            $this->cashsalebranch = $v;
            $this->modifiedColumns[LocationsTableMap::COL_CASHSALEBRANCH] = true;
        }

        return $this;
    } // setCashsalebranch()

    /**
     * Set the value of [managed] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\Locations The current object (for fluent API support)
     */
    public function setManaged($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->managed !== $v) {
            $this->managed = $v;
            $this->modifiedColumns[LocationsTableMap::COL_MANAGED] = true;
        }

        return $this;
    } // setManaged()

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
            if ($this->loccode !== '') {
                return false;
            }

            if ($this->locationname !== '') {
                return false;
            }

            if ($this->deladd1 !== '') {
                return false;
            }

            if ($this->deladd2 !== '') {
                return false;
            }

            if ($this->deladd3 !== '') {
                return false;
            }

            if ($this->deladd4 !== '') {
                return false;
            }

            if ($this->deladd5 !== '') {
                return false;
            }

            if ($this->deladd6 !== '') {
                return false;
            }

            if ($this->tel !== '') {
                return false;
            }

            if ($this->fax !== '') {
                return false;
            }

            if ($this->email !== '') {
                return false;
            }

            if ($this->contact !== '') {
                return false;
            }

            if ($this->taxprovinceid !== 1) {
                return false;
            }

            if ($this->cashsalecustomer !== '') {
                return false;
            }

            if ($this->cashsalebranch !== '') {
                return false;
            }

            if ($this->managed !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : LocationsTableMap::translateFieldName('Loccode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->loccode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : LocationsTableMap::translateFieldName('Locationname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->locationname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : LocationsTableMap::translateFieldName('Deladd1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->deladd1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : LocationsTableMap::translateFieldName('Deladd2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->deladd2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : LocationsTableMap::translateFieldName('Deladd3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->deladd3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : LocationsTableMap::translateFieldName('Deladd4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->deladd4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : LocationsTableMap::translateFieldName('Deladd5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->deladd5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : LocationsTableMap::translateFieldName('Deladd6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->deladd6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : LocationsTableMap::translateFieldName('Tel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->tel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : LocationsTableMap::translateFieldName('Fax', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fax = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : LocationsTableMap::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : LocationsTableMap::translateFieldName('Contact', TableMap::TYPE_PHPNAME, $indexType)];
            $this->contact = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : LocationsTableMap::translateFieldName('Taxprovinceid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->taxprovinceid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : LocationsTableMap::translateFieldName('Cashsalecustomer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cashsalecustomer = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : LocationsTableMap::translateFieldName('Cashsalebranch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cashsalebranch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : LocationsTableMap::translateFieldName('Managed', TableMap::TYPE_PHPNAME, $indexType)];
            $this->managed = (null !== $col) ? (int) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 16; // 16 = LocationsTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\Locations'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(LocationsTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildLocationsQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see Locations::setDeleted()
     * @see Locations::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(LocationsTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildLocationsQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(LocationsTableMap::DATABASE_NAME);
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
                LocationsTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(LocationsTableMap::COL_LOCCODE)) {
            $modifiedColumns[':p' . $index++]  = 'loccode';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_LOCATIONNAME)) {
            $modifiedColumns[':p' . $index++]  = 'locationname';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD1)) {
            $modifiedColumns[':p' . $index++]  = 'deladd1';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD2)) {
            $modifiedColumns[':p' . $index++]  = 'deladd2';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD3)) {
            $modifiedColumns[':p' . $index++]  = 'deladd3';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD4)) {
            $modifiedColumns[':p' . $index++]  = 'deladd4';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD5)) {
            $modifiedColumns[':p' . $index++]  = 'deladd5';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD6)) {
            $modifiedColumns[':p' . $index++]  = 'deladd6';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_TEL)) {
            $modifiedColumns[':p' . $index++]  = 'tel';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_FAX)) {
            $modifiedColumns[':p' . $index++]  = 'fax';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'email';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_CONTACT)) {
            $modifiedColumns[':p' . $index++]  = 'contact';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_TAXPROVINCEID)) {
            $modifiedColumns[':p' . $index++]  = 'taxprovinceid';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_CASHSALECUSTOMER)) {
            $modifiedColumns[':p' . $index++]  = 'cashsalecustomer';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_CASHSALEBRANCH)) {
            $modifiedColumns[':p' . $index++]  = 'cashsalebranch';
        }
        if ($this->isColumnModified(LocationsTableMap::COL_MANAGED)) {
            $modifiedColumns[':p' . $index++]  = 'managed';
        }

        $sql = sprintf(
            'INSERT INTO locations (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'loccode':
                        $stmt->bindValue($identifier, $this->loccode, PDO::PARAM_STR);
                        break;
                    case 'locationname':
                        $stmt->bindValue($identifier, $this->locationname, PDO::PARAM_STR);
                        break;
                    case 'deladd1':
                        $stmt->bindValue($identifier, $this->deladd1, PDO::PARAM_STR);
                        break;
                    case 'deladd2':
                        $stmt->bindValue($identifier, $this->deladd2, PDO::PARAM_STR);
                        break;
                    case 'deladd3':
                        $stmt->bindValue($identifier, $this->deladd3, PDO::PARAM_STR);
                        break;
                    case 'deladd4':
                        $stmt->bindValue($identifier, $this->deladd4, PDO::PARAM_STR);
                        break;
                    case 'deladd5':
                        $stmt->bindValue($identifier, $this->deladd5, PDO::PARAM_STR);
                        break;
                    case 'deladd6':
                        $stmt->bindValue($identifier, $this->deladd6, PDO::PARAM_STR);
                        break;
                    case 'tel':
                        $stmt->bindValue($identifier, $this->tel, PDO::PARAM_STR);
                        break;
                    case 'fax':
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case 'email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case 'contact':
                        $stmt->bindValue($identifier, $this->contact, PDO::PARAM_STR);
                        break;
                    case 'taxprovinceid':
                        $stmt->bindValue($identifier, $this->taxprovinceid, PDO::PARAM_INT);
                        break;
                    case 'cashsalecustomer':
                        $stmt->bindValue($identifier, $this->cashsalecustomer, PDO::PARAM_STR);
                        break;
                    case 'cashsalebranch':
                        $stmt->bindValue($identifier, $this->cashsalebranch, PDO::PARAM_STR);
                        break;
                    case 'managed':
                        $stmt->bindValue($identifier, $this->managed, PDO::PARAM_INT);
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
        $pos = LocationsTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getLoccode();
                break;
            case 1:
                return $this->getLocationname();
                break;
            case 2:
                return $this->getDeladd1();
                break;
            case 3:
                return $this->getDeladd2();
                break;
            case 4:
                return $this->getDeladd3();
                break;
            case 5:
                return $this->getDeladd4();
                break;
            case 6:
                return $this->getDeladd5();
                break;
            case 7:
                return $this->getDeladd6();
                break;
            case 8:
                return $this->getTel();
                break;
            case 9:
                return $this->getFax();
                break;
            case 10:
                return $this->getEmail();
                break;
            case 11:
                return $this->getContact();
                break;
            case 12:
                return $this->getTaxprovinceid();
                break;
            case 13:
                return $this->getCashsalecustomer();
                break;
            case 14:
                return $this->getCashsalebranch();
                break;
            case 15:
                return $this->getManaged();
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

        if (isset($alreadyDumpedObjects['Locations'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Locations'][$this->hashCode()] = true;
        $keys = LocationsTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLoccode(),
            $keys[1] => $this->getLocationname(),
            $keys[2] => $this->getDeladd1(),
            $keys[3] => $this->getDeladd2(),
            $keys[4] => $this->getDeladd3(),
            $keys[5] => $this->getDeladd4(),
            $keys[6] => $this->getDeladd5(),
            $keys[7] => $this->getDeladd6(),
            $keys[8] => $this->getTel(),
            $keys[9] => $this->getFax(),
            $keys[10] => $this->getEmail(),
            $keys[11] => $this->getContact(),
            $keys[12] => $this->getTaxprovinceid(),
            $keys[13] => $this->getCashsalecustomer(),
            $keys[14] => $this->getCashsalebranch(),
            $keys[15] => $this->getManaged(),
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
     * @return $this|\CareMd\CareMd\Locations
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = LocationsTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\Locations
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setLoccode($value);
                break;
            case 1:
                $this->setLocationname($value);
                break;
            case 2:
                $this->setDeladd1($value);
                break;
            case 3:
                $this->setDeladd2($value);
                break;
            case 4:
                $this->setDeladd3($value);
                break;
            case 5:
                $this->setDeladd4($value);
                break;
            case 6:
                $this->setDeladd5($value);
                break;
            case 7:
                $this->setDeladd6($value);
                break;
            case 8:
                $this->setTel($value);
                break;
            case 9:
                $this->setFax($value);
                break;
            case 10:
                $this->setEmail($value);
                break;
            case 11:
                $this->setContact($value);
                break;
            case 12:
                $this->setTaxprovinceid($value);
                break;
            case 13:
                $this->setCashsalecustomer($value);
                break;
            case 14:
                $this->setCashsalebranch($value);
                break;
            case 15:
                $this->setManaged($value);
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
        $keys = LocationsTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setLoccode($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setLocationname($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDeladd1($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setDeladd2($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDeladd3($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setDeladd4($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDeladd5($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setDeladd6($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setTel($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setFax($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setEmail($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setContact($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setTaxprovinceid($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setCashsalecustomer($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setCashsalebranch($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setManaged($arr[$keys[15]]);
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
     * @return $this|\CareMd\CareMd\Locations The current object, for fluid interface
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
        $criteria = new Criteria(LocationsTableMap::DATABASE_NAME);

        if ($this->isColumnModified(LocationsTableMap::COL_LOCCODE)) {
            $criteria->add(LocationsTableMap::COL_LOCCODE, $this->loccode);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_LOCATIONNAME)) {
            $criteria->add(LocationsTableMap::COL_LOCATIONNAME, $this->locationname);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD1)) {
            $criteria->add(LocationsTableMap::COL_DELADD1, $this->deladd1);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD2)) {
            $criteria->add(LocationsTableMap::COL_DELADD2, $this->deladd2);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD3)) {
            $criteria->add(LocationsTableMap::COL_DELADD3, $this->deladd3);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD4)) {
            $criteria->add(LocationsTableMap::COL_DELADD4, $this->deladd4);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD5)) {
            $criteria->add(LocationsTableMap::COL_DELADD5, $this->deladd5);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_DELADD6)) {
            $criteria->add(LocationsTableMap::COL_DELADD6, $this->deladd6);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_TEL)) {
            $criteria->add(LocationsTableMap::COL_TEL, $this->tel);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_FAX)) {
            $criteria->add(LocationsTableMap::COL_FAX, $this->fax);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_EMAIL)) {
            $criteria->add(LocationsTableMap::COL_EMAIL, $this->email);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_CONTACT)) {
            $criteria->add(LocationsTableMap::COL_CONTACT, $this->contact);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_TAXPROVINCEID)) {
            $criteria->add(LocationsTableMap::COL_TAXPROVINCEID, $this->taxprovinceid);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_CASHSALECUSTOMER)) {
            $criteria->add(LocationsTableMap::COL_CASHSALECUSTOMER, $this->cashsalecustomer);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_CASHSALEBRANCH)) {
            $criteria->add(LocationsTableMap::COL_CASHSALEBRANCH, $this->cashsalebranch);
        }
        if ($this->isColumnModified(LocationsTableMap::COL_MANAGED)) {
            $criteria->add(LocationsTableMap::COL_MANAGED, $this->managed);
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
        $criteria = ChildLocationsQuery::create();
        $criteria->add(LocationsTableMap::COL_LOCCODE, $this->loccode);

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
        $validPk = null !== $this->getLoccode();

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
        return $this->getLoccode();
    }

    /**
     * Generic method to set the primary key (loccode column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setLoccode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getLoccode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\Locations (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLoccode($this->getLoccode());
        $copyObj->setLocationname($this->getLocationname());
        $copyObj->setDeladd1($this->getDeladd1());
        $copyObj->setDeladd2($this->getDeladd2());
        $copyObj->setDeladd3($this->getDeladd3());
        $copyObj->setDeladd4($this->getDeladd4());
        $copyObj->setDeladd5($this->getDeladd5());
        $copyObj->setDeladd6($this->getDeladd6());
        $copyObj->setTel($this->getTel());
        $copyObj->setFax($this->getFax());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setContact($this->getContact());
        $copyObj->setTaxprovinceid($this->getTaxprovinceid());
        $copyObj->setCashsalecustomer($this->getCashsalecustomer());
        $copyObj->setCashsalebranch($this->getCashsalebranch());
        $copyObj->setManaged($this->getManaged());
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
     * @return \CareMd\CareMd\Locations Clone of current object.
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
        $this->loccode = null;
        $this->locationname = null;
        $this->deladd1 = null;
        $this->deladd2 = null;
        $this->deladd3 = null;
        $this->deladd4 = null;
        $this->deladd5 = null;
        $this->deladd6 = null;
        $this->tel = null;
        $this->fax = null;
        $this->email = null;
        $this->contact = null;
        $this->taxprovinceid = null;
        $this->cashsalecustomer = null;
        $this->cashsalebranch = null;
        $this->managed = null;
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
        return (string) $this->exportTo(LocationsTableMap::DEFAULT_STRING_FORMAT);
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
