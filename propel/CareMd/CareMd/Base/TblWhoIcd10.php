<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\TblWhoIcd10Query as ChildTblWhoIcd10Query;
use CareMd\CareMd\Map\TblWhoIcd10TableMap;
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
 * Base class that represents a row from the 'tbl_who_icd10' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class TblWhoIcd10 implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\TblWhoIcd10TableMap';


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
     * The value for the ebene field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ebene;

    /**
     * The value for the ort field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ort;

    /**
     * The value for the art field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $art;

    /**
     * The value for the generiert field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $generiert;

    /**
     * The value for the kapnr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $kapnr;

    /**
     * The value for the grvon field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $grvon;

    /**
     * The value for the code field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $code;

    /**
     * The value for the normcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $normcode;

    /**
     * The value for the codeohnepunkt field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $codeohnepunkt;

    /**
     * The value for the titel field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $titel;

    /**
     * The value for the mortl1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mortl1;

    /**
     * The value for the mortl2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mortl2;

    /**
     * The value for the mortl3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mortl3;

    /**
     * The value for the mortl4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mortl4;

    /**
     * The value for the morbl field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $morbl;

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
        $this->ebene = '';
        $this->ort = '';
        $this->art = '';
        $this->generiert = '';
        $this->kapnr = '';
        $this->grvon = '';
        $this->code = '';
        $this->normcode = '';
        $this->codeohnepunkt = '';
        $this->titel = '';
        $this->mortl1 = '';
        $this->mortl2 = '';
        $this->mortl3 = '';
        $this->mortl4 = '';
        $this->morbl = '';
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\TblWhoIcd10 object.
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
     * Compares this with another <code>TblWhoIcd10</code> instance.  If
     * <code>obj</code> is an instance of <code>TblWhoIcd10</code>, delegates to
     * <code>equals(TblWhoIcd10)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|TblWhoIcd10 The current object, for fluid interface
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
     * Get the [ebene] column value.
     *
     * @return string
     */
    public function getEbene()
    {
        return $this->ebene;
    }

    /**
     * Get the [ort] column value.
     *
     * @return string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Get the [art] column value.
     *
     * @return string
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Get the [generiert] column value.
     *
     * @return string
     */
    public function getGeneriert()
    {
        return $this->generiert;
    }

    /**
     * Get the [kapnr] column value.
     *
     * @return string
     */
    public function getKapnr()
    {
        return $this->kapnr;
    }

    /**
     * Get the [grvon] column value.
     *
     * @return string
     */
    public function getGrvon()
    {
        return $this->grvon;
    }

    /**
     * Get the [code] column value.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get the [normcode] column value.
     *
     * @return string
     */
    public function getNormcode()
    {
        return $this->normcode;
    }

    /**
     * Get the [codeohnepunkt] column value.
     *
     * @return string
     */
    public function getCodeohnepunkt()
    {
        return $this->codeohnepunkt;
    }

    /**
     * Get the [titel] column value.
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Get the [mortl1] column value.
     *
     * @return string
     */
    public function getMortl1()
    {
        return $this->mortl1;
    }

    /**
     * Get the [mortl2] column value.
     *
     * @return string
     */
    public function getMortl2()
    {
        return $this->mortl2;
    }

    /**
     * Get the [mortl3] column value.
     *
     * @return string
     */
    public function getMortl3()
    {
        return $this->mortl3;
    }

    /**
     * Get the [mortl4] column value.
     *
     * @return string
     */
    public function getMortl4()
    {
        return $this->mortl4;
    }

    /**
     * Get the [morbl] column value.
     *
     * @return string
     */
    public function getMorbl()
    {
        return $this->morbl;
    }

    /**
     * Set the value of [ebene] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setEbene($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ebene !== $v) {
            $this->ebene = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_EBENE] = true;
        }

        return $this;
    } // setEbene()

    /**
     * Set the value of [ort] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setOrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ort !== $v) {
            $this->ort = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_ORT] = true;
        }

        return $this;
    } // setOrt()

    /**
     * Set the value of [art] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setArt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->art !== $v) {
            $this->art = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_ART] = true;
        }

        return $this;
    } // setArt()

    /**
     * Set the value of [generiert] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setGeneriert($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->generiert !== $v) {
            $this->generiert = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_GENERIERT] = true;
        }

        return $this;
    } // setGeneriert()

    /**
     * Set the value of [kapnr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setKapnr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kapnr !== $v) {
            $this->kapnr = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_KAPNR] = true;
        }

        return $this;
    } // setKapnr()

    /**
     * Set the value of [grvon] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setGrvon($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->grvon !== $v) {
            $this->grvon = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_GRVON] = true;
        }

        return $this;
    } // setGrvon()

    /**
     * Set the value of [code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_CODE] = true;
        }

        return $this;
    } // setCode()

    /**
     * Set the value of [normcode] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setNormcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->normcode !== $v) {
            $this->normcode = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_NORMCODE] = true;
        }

        return $this;
    } // setNormcode()

    /**
     * Set the value of [codeohnepunkt] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setCodeohnepunkt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->codeohnepunkt !== $v) {
            $this->codeohnepunkt = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_CODEOHNEPUNKT] = true;
        }

        return $this;
    } // setCodeohnepunkt()

    /**
     * Set the value of [titel] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setTitel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->titel !== $v) {
            $this->titel = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_TITEL] = true;
        }

        return $this;
    } // setTitel()

    /**
     * Set the value of [mortl1] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setMortl1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mortl1 !== $v) {
            $this->mortl1 = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_MORTL1] = true;
        }

        return $this;
    } // setMortl1()

    /**
     * Set the value of [mortl2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setMortl2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mortl2 !== $v) {
            $this->mortl2 = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_MORTL2] = true;
        }

        return $this;
    } // setMortl2()

    /**
     * Set the value of [mortl3] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setMortl3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mortl3 !== $v) {
            $this->mortl3 = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_MORTL3] = true;
        }

        return $this;
    } // setMortl3()

    /**
     * Set the value of [mortl4] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setMortl4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mortl4 !== $v) {
            $this->mortl4 = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_MORTL4] = true;
        }

        return $this;
    } // setMortl4()

    /**
     * Set the value of [morbl] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object (for fluent API support)
     */
    public function setMorbl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->morbl !== $v) {
            $this->morbl = $v;
            $this->modifiedColumns[TblWhoIcd10TableMap::COL_MORBL] = true;
        }

        return $this;
    } // setMorbl()

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
            if ($this->ebene !== '') {
                return false;
            }

            if ($this->ort !== '') {
                return false;
            }

            if ($this->art !== '') {
                return false;
            }

            if ($this->generiert !== '') {
                return false;
            }

            if ($this->kapnr !== '') {
                return false;
            }

            if ($this->grvon !== '') {
                return false;
            }

            if ($this->code !== '') {
                return false;
            }

            if ($this->normcode !== '') {
                return false;
            }

            if ($this->codeohnepunkt !== '') {
                return false;
            }

            if ($this->titel !== '') {
                return false;
            }

            if ($this->mortl1 !== '') {
                return false;
            }

            if ($this->mortl2 !== '') {
                return false;
            }

            if ($this->mortl3 !== '') {
                return false;
            }

            if ($this->mortl4 !== '') {
                return false;
            }

            if ($this->morbl !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblWhoIcd10TableMap::translateFieldName('Ebene', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ebene = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblWhoIcd10TableMap::translateFieldName('Ort', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ort = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblWhoIcd10TableMap::translateFieldName('Art', TableMap::TYPE_PHPNAME, $indexType)];
            $this->art = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblWhoIcd10TableMap::translateFieldName('Generiert', TableMap::TYPE_PHPNAME, $indexType)];
            $this->generiert = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblWhoIcd10TableMap::translateFieldName('Kapnr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->kapnr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblWhoIcd10TableMap::translateFieldName('Grvon', TableMap::TYPE_PHPNAME, $indexType)];
            $this->grvon = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblWhoIcd10TableMap::translateFieldName('Code', TableMap::TYPE_PHPNAME, $indexType)];
            $this->code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TblWhoIcd10TableMap::translateFieldName('Normcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->normcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : TblWhoIcd10TableMap::translateFieldName('Codeohnepunkt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->codeohnepunkt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : TblWhoIcd10TableMap::translateFieldName('Titel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->titel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : TblWhoIcd10TableMap::translateFieldName('Mortl1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mortl1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : TblWhoIcd10TableMap::translateFieldName('Mortl2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mortl2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : TblWhoIcd10TableMap::translateFieldName('Mortl3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mortl3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : TblWhoIcd10TableMap::translateFieldName('Mortl4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mortl4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : TblWhoIcd10TableMap::translateFieldName('Morbl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->morbl = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 15; // 15 = TblWhoIcd10TableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\TblWhoIcd10'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(TblWhoIcd10TableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblWhoIcd10Query::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see TblWhoIcd10::setDeleted()
     * @see TblWhoIcd10::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblWhoIcd10TableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblWhoIcd10Query::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblWhoIcd10TableMap::DATABASE_NAME);
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
                TblWhoIcd10TableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_EBENE)) {
            $modifiedColumns[':p' . $index++]  = 'Ebene';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_ORT)) {
            $modifiedColumns[':p' . $index++]  = 'Ort';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_ART)) {
            $modifiedColumns[':p' . $index++]  = 'Art';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_GENERIERT)) {
            $modifiedColumns[':p' . $index++]  = 'Generiert';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_KAPNR)) {
            $modifiedColumns[':p' . $index++]  = 'KapNr';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_GRVON)) {
            $modifiedColumns[':p' . $index++]  = 'GrVon';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'Code';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_NORMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'NormCode';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_CODEOHNEPUNKT)) {
            $modifiedColumns[':p' . $index++]  = 'CodeOhnePunkt';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_TITEL)) {
            $modifiedColumns[':p' . $index++]  = 'Titel';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_MORTL1)) {
            $modifiedColumns[':p' . $index++]  = 'MortL1';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_MORTL2)) {
            $modifiedColumns[':p' . $index++]  = 'MortL2';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_MORTL3)) {
            $modifiedColumns[':p' . $index++]  = 'MortL3';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_MORTL4)) {
            $modifiedColumns[':p' . $index++]  = 'MortL4';
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_MORBL)) {
            $modifiedColumns[':p' . $index++]  = 'MorbL';
        }

        $sql = sprintf(
            'INSERT INTO tbl_who_icd10 (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'Ebene':
                        $stmt->bindValue($identifier, $this->ebene, PDO::PARAM_STR);
                        break;
                    case 'Ort':
                        $stmt->bindValue($identifier, $this->ort, PDO::PARAM_STR);
                        break;
                    case 'Art':
                        $stmt->bindValue($identifier, $this->art, PDO::PARAM_STR);
                        break;
                    case 'Generiert':
                        $stmt->bindValue($identifier, $this->generiert, PDO::PARAM_STR);
                        break;
                    case 'KapNr':
                        $stmt->bindValue($identifier, $this->kapnr, PDO::PARAM_STR);
                        break;
                    case 'GrVon':
                        $stmt->bindValue($identifier, $this->grvon, PDO::PARAM_STR);
                        break;
                    case 'Code':
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case 'NormCode':
                        $stmt->bindValue($identifier, $this->normcode, PDO::PARAM_STR);
                        break;
                    case 'CodeOhnePunkt':
                        $stmt->bindValue($identifier, $this->codeohnepunkt, PDO::PARAM_STR);
                        break;
                    case 'Titel':
                        $stmt->bindValue($identifier, $this->titel, PDO::PARAM_STR);
                        break;
                    case 'MortL1':
                        $stmt->bindValue($identifier, $this->mortl1, PDO::PARAM_STR);
                        break;
                    case 'MortL2':
                        $stmt->bindValue($identifier, $this->mortl2, PDO::PARAM_STR);
                        break;
                    case 'MortL3':
                        $stmt->bindValue($identifier, $this->mortl3, PDO::PARAM_STR);
                        break;
                    case 'MortL4':
                        $stmt->bindValue($identifier, $this->mortl4, PDO::PARAM_STR);
                        break;
                    case 'MorbL':
                        $stmt->bindValue($identifier, $this->morbl, PDO::PARAM_STR);
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
        $pos = TblWhoIcd10TableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getEbene();
                break;
            case 1:
                return $this->getOrt();
                break;
            case 2:
                return $this->getArt();
                break;
            case 3:
                return $this->getGeneriert();
                break;
            case 4:
                return $this->getKapnr();
                break;
            case 5:
                return $this->getGrvon();
                break;
            case 6:
                return $this->getCode();
                break;
            case 7:
                return $this->getNormcode();
                break;
            case 8:
                return $this->getCodeohnepunkt();
                break;
            case 9:
                return $this->getTitel();
                break;
            case 10:
                return $this->getMortl1();
                break;
            case 11:
                return $this->getMortl2();
                break;
            case 12:
                return $this->getMortl3();
                break;
            case 13:
                return $this->getMortl4();
                break;
            case 14:
                return $this->getMorbl();
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

        if (isset($alreadyDumpedObjects['TblWhoIcd10'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TblWhoIcd10'][$this->hashCode()] = true;
        $keys = TblWhoIcd10TableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getEbene(),
            $keys[1] => $this->getOrt(),
            $keys[2] => $this->getArt(),
            $keys[3] => $this->getGeneriert(),
            $keys[4] => $this->getKapnr(),
            $keys[5] => $this->getGrvon(),
            $keys[6] => $this->getCode(),
            $keys[7] => $this->getNormcode(),
            $keys[8] => $this->getCodeohnepunkt(),
            $keys[9] => $this->getTitel(),
            $keys[10] => $this->getMortl1(),
            $keys[11] => $this->getMortl2(),
            $keys[12] => $this->getMortl3(),
            $keys[13] => $this->getMortl4(),
            $keys[14] => $this->getMorbl(),
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
     * @return $this|\CareMd\CareMd\TblWhoIcd10
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblWhoIcd10TableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\TblWhoIcd10
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setEbene($value);
                break;
            case 1:
                $this->setOrt($value);
                break;
            case 2:
                $this->setArt($value);
                break;
            case 3:
                $this->setGeneriert($value);
                break;
            case 4:
                $this->setKapnr($value);
                break;
            case 5:
                $this->setGrvon($value);
                break;
            case 6:
                $this->setCode($value);
                break;
            case 7:
                $this->setNormcode($value);
                break;
            case 8:
                $this->setCodeohnepunkt($value);
                break;
            case 9:
                $this->setTitel($value);
                break;
            case 10:
                $this->setMortl1($value);
                break;
            case 11:
                $this->setMortl2($value);
                break;
            case 12:
                $this->setMortl3($value);
                break;
            case 13:
                $this->setMortl4($value);
                break;
            case 14:
                $this->setMorbl($value);
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
        $keys = TblWhoIcd10TableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setEbene($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOrt($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArt($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setGeneriert($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setKapnr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setGrvon($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setCode($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setNormcode($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCodeohnepunkt($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setTitel($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setMortl1($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setMortl2($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setMortl3($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setMortl4($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setMorbl($arr[$keys[14]]);
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
     * @return $this|\CareMd\CareMd\TblWhoIcd10 The current object, for fluid interface
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
        $criteria = new Criteria(TblWhoIcd10TableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_EBENE)) {
            $criteria->add(TblWhoIcd10TableMap::COL_EBENE, $this->ebene);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_ORT)) {
            $criteria->add(TblWhoIcd10TableMap::COL_ORT, $this->ort);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_ART)) {
            $criteria->add(TblWhoIcd10TableMap::COL_ART, $this->art);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_GENERIERT)) {
            $criteria->add(TblWhoIcd10TableMap::COL_GENERIERT, $this->generiert);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_KAPNR)) {
            $criteria->add(TblWhoIcd10TableMap::COL_KAPNR, $this->kapnr);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_GRVON)) {
            $criteria->add(TblWhoIcd10TableMap::COL_GRVON, $this->grvon);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_CODE)) {
            $criteria->add(TblWhoIcd10TableMap::COL_CODE, $this->code);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_NORMCODE)) {
            $criteria->add(TblWhoIcd10TableMap::COL_NORMCODE, $this->normcode);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_CODEOHNEPUNKT)) {
            $criteria->add(TblWhoIcd10TableMap::COL_CODEOHNEPUNKT, $this->codeohnepunkt);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_TITEL)) {
            $criteria->add(TblWhoIcd10TableMap::COL_TITEL, $this->titel);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_MORTL1)) {
            $criteria->add(TblWhoIcd10TableMap::COL_MORTL1, $this->mortl1);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_MORTL2)) {
            $criteria->add(TblWhoIcd10TableMap::COL_MORTL2, $this->mortl2);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_MORTL3)) {
            $criteria->add(TblWhoIcd10TableMap::COL_MORTL3, $this->mortl3);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_MORTL4)) {
            $criteria->add(TblWhoIcd10TableMap::COL_MORTL4, $this->mortl4);
        }
        if ($this->isColumnModified(TblWhoIcd10TableMap::COL_MORBL)) {
            $criteria->add(TblWhoIcd10TableMap::COL_MORBL, $this->morbl);
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
        throw new LogicException('The TblWhoIcd10 object has no primary key');

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
     * @param      object $copyObj An object of \CareMd\CareMd\TblWhoIcd10 (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEbene($this->getEbene());
        $copyObj->setOrt($this->getOrt());
        $copyObj->setArt($this->getArt());
        $copyObj->setGeneriert($this->getGeneriert());
        $copyObj->setKapnr($this->getKapnr());
        $copyObj->setGrvon($this->getGrvon());
        $copyObj->setCode($this->getCode());
        $copyObj->setNormcode($this->getNormcode());
        $copyObj->setCodeohnepunkt($this->getCodeohnepunkt());
        $copyObj->setTitel($this->getTitel());
        $copyObj->setMortl1($this->getMortl1());
        $copyObj->setMortl2($this->getMortl2());
        $copyObj->setMortl3($this->getMortl3());
        $copyObj->setMortl4($this->getMortl4());
        $copyObj->setMorbl($this->getMorbl());
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
     * @return \CareMd\CareMd\TblWhoIcd10 Clone of current object.
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
        $this->ebene = null;
        $this->ort = null;
        $this->art = null;
        $this->generiert = null;
        $this->kapnr = null;
        $this->grvon = null;
        $this->code = null;
        $this->normcode = null;
        $this->codeohnepunkt = null;
        $this->titel = null;
        $this->mortl1 = null;
        $this->mortl2 = null;
        $this->mortl3 = null;
        $this->mortl4 = null;
        $this->morbl = null;
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
        return (string) $this->exportTo(TblWhoIcd10TableMap::DEFAULT_STRING_FORMAT);
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
