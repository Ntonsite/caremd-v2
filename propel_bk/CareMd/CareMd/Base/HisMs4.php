<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\HisMs4Query as ChildHisMs4Query;
use CareMd\CareMd\Map\HisMs4TableMap;
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
 * Base class that represents a row from the 'his_ms4' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class HisMs4 implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\HisMs4TableMap';


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
     * @var        int
     */
    protected $id;

    /**
     * The value for the sampleid field.
     *
     * @var        string
     */
    protected $sampleid;

    /**
     * The value for the datentime field.
     *
     * @var        DateTime
     */
    protected $datentime;

    /**
     * The value for the wbc field.
     *
     * @var        string
     */
    protected $wbc;

    /**
     * The value for the lym field.
     *
     * @var        string
     */
    protected $lym;

    /**
     * The value for the mon field.
     *
     * @var        string
     */
    protected $mon;

    /**
     * The value for the neu field.
     *
     * @var        string
     */
    protected $neu;

    /**
     * The value for the eo field.
     *
     * @var        string
     */
    protected $eo;

    /**
     * The value for the ba field.
     *
     * @var        string
     */
    protected $ba;

    /**
     * The value for the rbc field.
     *
     * @var        string
     */
    protected $rbc;

    /**
     * The value for the mcv field.
     *
     * @var        string
     */
    protected $mcv;

    /**
     * The value for the hct field.
     *
     * @var        string
     */
    protected $hct;

    /**
     * The value for the mch field.
     *
     * @var        string
     */
    protected $mch;

    /**
     * The value for the mchc field.
     *
     * @var        string
     */
    protected $mchc;

    /**
     * The value for the rdw field.
     *
     * @var        string
     */
    protected $rdw;

    /**
     * The value for the hb field.
     *
     * @var        string
     */
    protected $hb;

    /**
     * The value for the thr field.
     *
     * @var        int
     */
    protected $thr;

    /**
     * The value for the mpv field.
     *
     * @var        string
     */
    protected $mpv;

    /**
     * The value for the pct field.
     *
     * @var        string
     */
    protected $pct;

    /**
     * The value for the pdw field.
     *
     * @var        string
     */
    protected $pdw;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of CareMd\CareMd\Base\HisMs4 object.
     */
    public function __construct()
    {
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
     * Compares this with another <code>HisMs4</code> instance.  If
     * <code>obj</code> is an instance of <code>HisMs4</code>, delegates to
     * <code>equals(HisMs4)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|HisMs4 The current object, for fluid interface
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [sampleid] column value.
     *
     * @return string
     */
    public function getSampleid()
    {
        return $this->sampleid;
    }

    /**
     * Get the [optionally formatted] temporal [datentime] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatentime($format = NULL)
    {
        if ($format === null) {
            return $this->datentime;
        } else {
            return $this->datentime instanceof \DateTimeInterface ? $this->datentime->format($format) : null;
        }
    }

    /**
     * Get the [wbc] column value.
     *
     * @return string
     */
    public function getWbc()
    {
        return $this->wbc;
    }

    /**
     * Get the [lym] column value.
     *
     * @return string
     */
    public function getLym()
    {
        return $this->lym;
    }

    /**
     * Get the [mon] column value.
     *
     * @return string
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Get the [neu] column value.
     *
     * @return string
     */
    public function getNeu()
    {
        return $this->neu;
    }

    /**
     * Get the [eo] column value.
     *
     * @return string
     */
    public function getEo()
    {
        return $this->eo;
    }

    /**
     * Get the [ba] column value.
     *
     * @return string
     */
    public function getBa()
    {
        return $this->ba;
    }

    /**
     * Get the [rbc] column value.
     *
     * @return string
     */
    public function getRbc()
    {
        return $this->rbc;
    }

    /**
     * Get the [mcv] column value.
     *
     * @return string
     */
    public function getMcv()
    {
        return $this->mcv;
    }

    /**
     * Get the [hct] column value.
     *
     * @return string
     */
    public function getHct()
    {
        return $this->hct;
    }

    /**
     * Get the [mch] column value.
     *
     * @return string
     */
    public function getMch()
    {
        return $this->mch;
    }

    /**
     * Get the [mchc] column value.
     *
     * @return string
     */
    public function getMchc()
    {
        return $this->mchc;
    }

    /**
     * Get the [rdw] column value.
     *
     * @return string
     */
    public function getRdw()
    {
        return $this->rdw;
    }

    /**
     * Get the [hb] column value.
     *
     * @return string
     */
    public function getHb()
    {
        return $this->hb;
    }

    /**
     * Get the [thr] column value.
     *
     * @return int
     */
    public function getThr()
    {
        return $this->thr;
    }

    /**
     * Get the [mpv] column value.
     *
     * @return string
     */
    public function getMpv()
    {
        return $this->mpv;
    }

    /**
     * Get the [pct] column value.
     *
     * @return string
     */
    public function getPct()
    {
        return $this->pct;
    }

    /**
     * Get the [pdw] column value.
     *
     * @return string
     */
    public function getPdw()
    {
        return $this->pdw;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [sampleid] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setSampleid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sampleid !== $v) {
            $this->sampleid = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_SAMPLEID] = true;
        }

        return $this;
    } // setSampleid()

    /**
     * Sets the value of [datentime] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setDatentime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datentime !== null || $dt !== null) {
            if ($this->datentime === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->datentime->format("Y-m-d H:i:s.u")) {
                $this->datentime = $dt === null ? null : clone $dt;
                $this->modifiedColumns[HisMs4TableMap::COL_DATENTIME] = true;
            }
        } // if either are not null

        return $this;
    } // setDatentime()

    /**
     * Set the value of [wbc] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setWbc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->wbc !== $v) {
            $this->wbc = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_WBC] = true;
        }

        return $this;
    } // setWbc()

    /**
     * Set the value of [lym] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setLym($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lym !== $v) {
            $this->lym = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_LYM] = true;
        }

        return $this;
    } // setLym()

    /**
     * Set the value of [mon] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setMon($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mon !== $v) {
            $this->mon = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_MON] = true;
        }

        return $this;
    } // setMon()

    /**
     * Set the value of [neu] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setNeu($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->neu !== $v) {
            $this->neu = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_NEU] = true;
        }

        return $this;
    } // setNeu()

    /**
     * Set the value of [eo] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setEo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->eo !== $v) {
            $this->eo = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_EO] = true;
        }

        return $this;
    } // setEo()

    /**
     * Set the value of [ba] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setBa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ba !== $v) {
            $this->ba = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_BA] = true;
        }

        return $this;
    } // setBa()

    /**
     * Set the value of [rbc] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setRbc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rbc !== $v) {
            $this->rbc = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_RBC] = true;
        }

        return $this;
    } // setRbc()

    /**
     * Set the value of [mcv] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setMcv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mcv !== $v) {
            $this->mcv = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_MCV] = true;
        }

        return $this;
    } // setMcv()

    /**
     * Set the value of [hct] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setHct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hct !== $v) {
            $this->hct = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_HCT] = true;
        }

        return $this;
    } // setHct()

    /**
     * Set the value of [mch] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setMch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mch !== $v) {
            $this->mch = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_MCH] = true;
        }

        return $this;
    } // setMch()

    /**
     * Set the value of [mchc] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setMchc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mchc !== $v) {
            $this->mchc = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_MCHC] = true;
        }

        return $this;
    } // setMchc()

    /**
     * Set the value of [rdw] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setRdw($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rdw !== $v) {
            $this->rdw = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_RDW] = true;
        }

        return $this;
    } // setRdw()

    /**
     * Set the value of [hb] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setHb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hb !== $v) {
            $this->hb = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_HB] = true;
        }

        return $this;
    } // setHb()

    /**
     * Set the value of [thr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setThr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->thr !== $v) {
            $this->thr = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_THR] = true;
        }

        return $this;
    } // setThr()

    /**
     * Set the value of [mpv] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setMpv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mpv !== $v) {
            $this->mpv = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_MPV] = true;
        }

        return $this;
    } // setMpv()

    /**
     * Set the value of [pct] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setPct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pct !== $v) {
            $this->pct = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_PCT] = true;
        }

        return $this;
    } // setPct()

    /**
     * Set the value of [pdw] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\HisMs4 The current object (for fluent API support)
     */
    public function setPdw($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pdw !== $v) {
            $this->pdw = $v;
            $this->modifiedColumns[HisMs4TableMap::COL_PDW] = true;
        }

        return $this;
    } // setPdw()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : HisMs4TableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : HisMs4TableMap::translateFieldName('Sampleid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sampleid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : HisMs4TableMap::translateFieldName('Datentime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->datentime = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : HisMs4TableMap::translateFieldName('Wbc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wbc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : HisMs4TableMap::translateFieldName('Lym', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lym = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : HisMs4TableMap::translateFieldName('Mon', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mon = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : HisMs4TableMap::translateFieldName('Neu', TableMap::TYPE_PHPNAME, $indexType)];
            $this->neu = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : HisMs4TableMap::translateFieldName('Eo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->eo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : HisMs4TableMap::translateFieldName('Ba', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ba = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : HisMs4TableMap::translateFieldName('Rbc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rbc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : HisMs4TableMap::translateFieldName('Mcv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mcv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : HisMs4TableMap::translateFieldName('Hct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : HisMs4TableMap::translateFieldName('Mch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : HisMs4TableMap::translateFieldName('Mchc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mchc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : HisMs4TableMap::translateFieldName('Rdw', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rdw = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : HisMs4TableMap::translateFieldName('Hb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->hb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : HisMs4TableMap::translateFieldName('Thr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->thr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : HisMs4TableMap::translateFieldName('Mpv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mpv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : HisMs4TableMap::translateFieldName('Pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : HisMs4TableMap::translateFieldName('Pdw', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pdw = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 20; // 20 = HisMs4TableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\HisMs4'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(HisMs4TableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildHisMs4Query::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see HisMs4::setDeleted()
     * @see HisMs4::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(HisMs4TableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildHisMs4Query::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(HisMs4TableMap::DATABASE_NAME);
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
                HisMs4TableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[HisMs4TableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . HisMs4TableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(HisMs4TableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'ID';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_SAMPLEID)) {
            $modifiedColumns[':p' . $index++]  = 'SampleID';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_DATENTIME)) {
            $modifiedColumns[':p' . $index++]  = 'DateNTime';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_WBC)) {
            $modifiedColumns[':p' . $index++]  = 'WBC';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_LYM)) {
            $modifiedColumns[':p' . $index++]  = 'Lym';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_MON)) {
            $modifiedColumns[':p' . $index++]  = 'Mon';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_NEU)) {
            $modifiedColumns[':p' . $index++]  = 'Neu';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_EO)) {
            $modifiedColumns[':p' . $index++]  = 'Eo';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_BA)) {
            $modifiedColumns[':p' . $index++]  = 'Ba';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_RBC)) {
            $modifiedColumns[':p' . $index++]  = 'RBC';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_MCV)) {
            $modifiedColumns[':p' . $index++]  = 'MCV';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_HCT)) {
            $modifiedColumns[':p' . $index++]  = 'Hct';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_MCH)) {
            $modifiedColumns[':p' . $index++]  = 'MCH';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_MCHC)) {
            $modifiedColumns[':p' . $index++]  = 'MCHC';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_RDW)) {
            $modifiedColumns[':p' . $index++]  = 'RDW';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_HB)) {
            $modifiedColumns[':p' . $index++]  = 'Hb';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_THR)) {
            $modifiedColumns[':p' . $index++]  = 'THR';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_MPV)) {
            $modifiedColumns[':p' . $index++]  = 'MPV';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_PCT)) {
            $modifiedColumns[':p' . $index++]  = 'Pct';
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_PDW)) {
            $modifiedColumns[':p' . $index++]  = 'PDW';
        }

        $sql = sprintf(
            'INSERT INTO his_ms4 (%s) VALUES (%s)',
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
                    case 'SampleID':
                        $stmt->bindValue($identifier, $this->sampleid, PDO::PARAM_STR);
                        break;
                    case 'DateNTime':
                        $stmt->bindValue($identifier, $this->datentime ? $this->datentime->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'WBC':
                        $stmt->bindValue($identifier, $this->wbc, PDO::PARAM_STR);
                        break;
                    case 'Lym':
                        $stmt->bindValue($identifier, $this->lym, PDO::PARAM_STR);
                        break;
                    case 'Mon':
                        $stmt->bindValue($identifier, $this->mon, PDO::PARAM_STR);
                        break;
                    case 'Neu':
                        $stmt->bindValue($identifier, $this->neu, PDO::PARAM_STR);
                        break;
                    case 'Eo':
                        $stmt->bindValue($identifier, $this->eo, PDO::PARAM_STR);
                        break;
                    case 'Ba':
                        $stmt->bindValue($identifier, $this->ba, PDO::PARAM_STR);
                        break;
                    case 'RBC':
                        $stmt->bindValue($identifier, $this->rbc, PDO::PARAM_STR);
                        break;
                    case 'MCV':
                        $stmt->bindValue($identifier, $this->mcv, PDO::PARAM_STR);
                        break;
                    case 'Hct':
                        $stmt->bindValue($identifier, $this->hct, PDO::PARAM_STR);
                        break;
                    case 'MCH':
                        $stmt->bindValue($identifier, $this->mch, PDO::PARAM_STR);
                        break;
                    case 'MCHC':
                        $stmt->bindValue($identifier, $this->mchc, PDO::PARAM_STR);
                        break;
                    case 'RDW':
                        $stmt->bindValue($identifier, $this->rdw, PDO::PARAM_STR);
                        break;
                    case 'Hb':
                        $stmt->bindValue($identifier, $this->hb, PDO::PARAM_STR);
                        break;
                    case 'THR':
                        $stmt->bindValue($identifier, $this->thr, PDO::PARAM_INT);
                        break;
                    case 'MPV':
                        $stmt->bindValue($identifier, $this->mpv, PDO::PARAM_STR);
                        break;
                    case 'Pct':
                        $stmt->bindValue($identifier, $this->pct, PDO::PARAM_STR);
                        break;
                    case 'PDW':
                        $stmt->bindValue($identifier, $this->pdw, PDO::PARAM_STR);
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
        $pos = HisMs4TableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getSampleid();
                break;
            case 2:
                return $this->getDatentime();
                break;
            case 3:
                return $this->getWbc();
                break;
            case 4:
                return $this->getLym();
                break;
            case 5:
                return $this->getMon();
                break;
            case 6:
                return $this->getNeu();
                break;
            case 7:
                return $this->getEo();
                break;
            case 8:
                return $this->getBa();
                break;
            case 9:
                return $this->getRbc();
                break;
            case 10:
                return $this->getMcv();
                break;
            case 11:
                return $this->getHct();
                break;
            case 12:
                return $this->getMch();
                break;
            case 13:
                return $this->getMchc();
                break;
            case 14:
                return $this->getRdw();
                break;
            case 15:
                return $this->getHb();
                break;
            case 16:
                return $this->getThr();
                break;
            case 17:
                return $this->getMpv();
                break;
            case 18:
                return $this->getPct();
                break;
            case 19:
                return $this->getPdw();
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

        if (isset($alreadyDumpedObjects['HisMs4'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['HisMs4'][$this->hashCode()] = true;
        $keys = HisMs4TableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getSampleid(),
            $keys[2] => $this->getDatentime(),
            $keys[3] => $this->getWbc(),
            $keys[4] => $this->getLym(),
            $keys[5] => $this->getMon(),
            $keys[6] => $this->getNeu(),
            $keys[7] => $this->getEo(),
            $keys[8] => $this->getBa(),
            $keys[9] => $this->getRbc(),
            $keys[10] => $this->getMcv(),
            $keys[11] => $this->getHct(),
            $keys[12] => $this->getMch(),
            $keys[13] => $this->getMchc(),
            $keys[14] => $this->getRdw(),
            $keys[15] => $this->getHb(),
            $keys[16] => $this->getThr(),
            $keys[17] => $this->getMpv(),
            $keys[18] => $this->getPct(),
            $keys[19] => $this->getPdw(),
        );
        if ($result[$keys[2]] instanceof \DateTimeInterface) {
            $result[$keys[2]] = $result[$keys[2]]->format('c');
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
     * @return $this|\CareMd\CareMd\HisMs4
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = HisMs4TableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\HisMs4
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setSampleid($value);
                break;
            case 2:
                $this->setDatentime($value);
                break;
            case 3:
                $this->setWbc($value);
                break;
            case 4:
                $this->setLym($value);
                break;
            case 5:
                $this->setMon($value);
                break;
            case 6:
                $this->setNeu($value);
                break;
            case 7:
                $this->setEo($value);
                break;
            case 8:
                $this->setBa($value);
                break;
            case 9:
                $this->setRbc($value);
                break;
            case 10:
                $this->setMcv($value);
                break;
            case 11:
                $this->setHct($value);
                break;
            case 12:
                $this->setMch($value);
                break;
            case 13:
                $this->setMchc($value);
                break;
            case 14:
                $this->setRdw($value);
                break;
            case 15:
                $this->setHb($value);
                break;
            case 16:
                $this->setThr($value);
                break;
            case 17:
                $this->setMpv($value);
                break;
            case 18:
                $this->setPct($value);
                break;
            case 19:
                $this->setPdw($value);
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
        $keys = HisMs4TableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setSampleid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDatentime($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setWbc($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setLym($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setMon($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setNeu($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setEo($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setBa($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setRbc($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setMcv($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setHct($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setMch($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setMchc($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setRdw($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setHb($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setThr($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setMpv($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setPct($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setPdw($arr[$keys[19]]);
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
     * @return $this|\CareMd\CareMd\HisMs4 The current object, for fluid interface
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
        $criteria = new Criteria(HisMs4TableMap::DATABASE_NAME);

        if ($this->isColumnModified(HisMs4TableMap::COL_ID)) {
            $criteria->add(HisMs4TableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_SAMPLEID)) {
            $criteria->add(HisMs4TableMap::COL_SAMPLEID, $this->sampleid);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_DATENTIME)) {
            $criteria->add(HisMs4TableMap::COL_DATENTIME, $this->datentime);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_WBC)) {
            $criteria->add(HisMs4TableMap::COL_WBC, $this->wbc);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_LYM)) {
            $criteria->add(HisMs4TableMap::COL_LYM, $this->lym);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_MON)) {
            $criteria->add(HisMs4TableMap::COL_MON, $this->mon);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_NEU)) {
            $criteria->add(HisMs4TableMap::COL_NEU, $this->neu);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_EO)) {
            $criteria->add(HisMs4TableMap::COL_EO, $this->eo);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_BA)) {
            $criteria->add(HisMs4TableMap::COL_BA, $this->ba);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_RBC)) {
            $criteria->add(HisMs4TableMap::COL_RBC, $this->rbc);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_MCV)) {
            $criteria->add(HisMs4TableMap::COL_MCV, $this->mcv);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_HCT)) {
            $criteria->add(HisMs4TableMap::COL_HCT, $this->hct);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_MCH)) {
            $criteria->add(HisMs4TableMap::COL_MCH, $this->mch);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_MCHC)) {
            $criteria->add(HisMs4TableMap::COL_MCHC, $this->mchc);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_RDW)) {
            $criteria->add(HisMs4TableMap::COL_RDW, $this->rdw);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_HB)) {
            $criteria->add(HisMs4TableMap::COL_HB, $this->hb);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_THR)) {
            $criteria->add(HisMs4TableMap::COL_THR, $this->thr);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_MPV)) {
            $criteria->add(HisMs4TableMap::COL_MPV, $this->mpv);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_PCT)) {
            $criteria->add(HisMs4TableMap::COL_PCT, $this->pct);
        }
        if ($this->isColumnModified(HisMs4TableMap::COL_PDW)) {
            $criteria->add(HisMs4TableMap::COL_PDW, $this->pdw);
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
        $criteria = ChildHisMs4Query::create();
        $criteria->add(HisMs4TableMap::COL_ID, $this->id);

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
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
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
     * @param      object $copyObj An object of \CareMd\CareMd\HisMs4 (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSampleid($this->getSampleid());
        $copyObj->setDatentime($this->getDatentime());
        $copyObj->setWbc($this->getWbc());
        $copyObj->setLym($this->getLym());
        $copyObj->setMon($this->getMon());
        $copyObj->setNeu($this->getNeu());
        $copyObj->setEo($this->getEo());
        $copyObj->setBa($this->getBa());
        $copyObj->setRbc($this->getRbc());
        $copyObj->setMcv($this->getMcv());
        $copyObj->setHct($this->getHct());
        $copyObj->setMch($this->getMch());
        $copyObj->setMchc($this->getMchc());
        $copyObj->setRdw($this->getRdw());
        $copyObj->setHb($this->getHb());
        $copyObj->setThr($this->getThr());
        $copyObj->setMpv($this->getMpv());
        $copyObj->setPct($this->getPct());
        $copyObj->setPdw($this->getPdw());
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
     * @return \CareMd\CareMd\HisMs4 Clone of current object.
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
        $this->sampleid = null;
        $this->datentime = null;
        $this->wbc = null;
        $this->lym = null;
        $this->mon = null;
        $this->neu = null;
        $this->eo = null;
        $this->ba = null;
        $this->rbc = null;
        $this->mcv = null;
        $this->hct = null;
        $this->mch = null;
        $this->mchc = null;
        $this->rdw = null;
        $this->hb = null;
        $this->thr = null;
        $this->mpv = null;
        $this->pct = null;
        $this->pdw = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
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
        return (string) $this->exportTo(HisMs4TableMap::DEFAULT_STRING_FORMAT);
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
