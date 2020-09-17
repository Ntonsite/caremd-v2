<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareNewsArticleQuery as ChildCareNewsArticleQuery;
use CareMd\CareMd\Map\CareNewsArticleTableMap;
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
 * Base class that represents a row from the 'care_news_article' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareNewsArticle implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareNewsArticleTableMap';


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
     * The value for the nr field.
     *
     * @var        int
     */
    protected $nr;

    /**
     * The value for the lang field.
     *
     * Note: this column has a database default value of: 'en'
     * @var        string
     */
    protected $lang;

    /**
     * The value for the dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $dept_nr;

    /**
     * The value for the category field.
     *
     * @var        string
     */
    protected $category;

    /**
     * The value for the status field.
     *
     * Note: this column has a database default value of: 'pending'
     * @var        string
     */
    protected $status;

    /**
     * The value for the title field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $title;

    /**
     * The value for the preface field.
     *
     * @var        string
     */
    protected $preface;

    /**
     * The value for the body field.
     *
     * @var        string
     */
    protected $body;

    /**
     * The value for the pic field.
     *
     * @var        resource
     */
    protected $pic;

    /**
     * The value for the pic_mime field.
     *
     * @var        string
     */
    protected $pic_mime;

    /**
     * The value for the art_num field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $art_num;

    /**
     * The value for the head_file field.
     *
     * @var        string
     */
    protected $head_file;

    /**
     * The value for the main_file field.
     *
     * @var        string
     */
    protected $main_file;

    /**
     * The value for the pic_file field.
     *
     * @var        string
     */
    protected $pic_file;

    /**
     * The value for the author field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $author;

    /**
     * The value for the submit_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $submit_date;

    /**
     * The value for the encode_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $encode_date;

    /**
     * The value for the publish_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $publish_date;

    /**
     * The value for the modify_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $modify_id;

    /**
     * The value for the modify_time field.
     *
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        DateTime
     */
    protected $modify_time;

    /**
     * The value for the create_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $create_id;

    /**
     * The value for the create_time field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $create_time;

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
        $this->lang = 'en';
        $this->dept_nr = 0;
        $this->status = 'pending';
        $this->title = '';
        $this->art_num = false;
        $this->author = '';
        $this->submit_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->encode_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->publish_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareNewsArticle object.
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
     * Compares this with another <code>CareNewsArticle</code> instance.  If
     * <code>obj</code> is an instance of <code>CareNewsArticle</code>, delegates to
     * <code>equals(CareNewsArticle)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareNewsArticle The current object, for fluid interface
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
     * Get the [nr] column value.
     *
     * @return int
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Get the [lang] column value.
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Get the [dept_nr] column value.
     *
     * @return int
     */
    public function getDeptNr()
    {
        return $this->dept_nr;
    }

    /**
     * Get the [category] column value.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the [preface] column value.
     *
     * @return string
     */
    public function getPreface()
    {
        return $this->preface;
    }

    /**
     * Get the [body] column value.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Get the [pic] column value.
     *
     * @return resource
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Get the [pic_mime] column value.
     *
     * @return string
     */
    public function getPicMime()
    {
        return $this->pic_mime;
    }

    /**
     * Get the [art_num] column value.
     *
     * @return boolean
     */
    public function getArtNum()
    {
        return $this->art_num;
    }

    /**
     * Get the [art_num] column value.
     *
     * @return boolean
     */
    public function isArtNum()
    {
        return $this->getArtNum();
    }

    /**
     * Get the [head_file] column value.
     *
     * @return string
     */
    public function getHeadFile()
    {
        return $this->head_file;
    }

    /**
     * Get the [main_file] column value.
     *
     * @return string
     */
    public function getMainFile()
    {
        return $this->main_file;
    }

    /**
     * Get the [pic_file] column value.
     *
     * @return string
     */
    public function getPicFile()
    {
        return $this->pic_file;
    }

    /**
     * Get the [author] column value.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get the [optionally formatted] temporal [submit_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSubmitDate($format = NULL)
    {
        if ($format === null) {
            return $this->submit_date;
        } else {
            return $this->submit_date instanceof \DateTimeInterface ? $this->submit_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [encode_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEncodeDate($format = NULL)
    {
        if ($format === null) {
            return $this->encode_date;
        } else {
            return $this->encode_date instanceof \DateTimeInterface ? $this->encode_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [publish_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPublishDate($format = NULL)
    {
        if ($format === null) {
            return $this->publish_date;
        } else {
            return $this->publish_date instanceof \DateTimeInterface ? $this->publish_date->format($format) : null;
        }
    }

    /**
     * Get the [modify_id] column value.
     *
     * @return string
     */
    public function getModifyId()
    {
        return $this->modify_id;
    }

    /**
     * Get the [optionally formatted] temporal [modify_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getModifyTime($format = NULL)
    {
        if ($format === null) {
            return $this->modify_time;
        } else {
            return $this->modify_time instanceof \DateTimeInterface ? $this->modify_time->format($format) : null;
        }
    }

    /**
     * Get the [create_id] column value.
     *
     * @return string
     */
    public function getCreateId()
    {
        return $this->create_id;
    }

    /**
     * Get the [optionally formatted] temporal [create_time] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreateTime($format = NULL)
    {
        if ($format === null) {
            return $this->create_time;
        } else {
            return $this->create_time instanceof \DateTimeInterface ? $this->create_time->format($format) : null;
        }
    }

    /**
     * Set the value of [nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nr !== $v) {
            $this->nr = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_NR] = true;
        }

        return $this;
    } // setNr()

    /**
     * Set the value of [lang] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setLang($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lang !== $v) {
            $this->lang = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_LANG] = true;
        }

        return $this;
    } // setLang()

    /**
     * Set the value of [dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dept_nr !== $v) {
            $this->dept_nr = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_DEPT_NR] = true;
        }

        return $this;
    } // setDeptNr()

    /**
     * Set the value of [category] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setCategory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->category !== $v) {
            $this->category = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_CATEGORY] = true;
        }

        return $this;
    } // setCategory()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [title] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_TITLE] = true;
        }

        return $this;
    } // setTitle()

    /**
     * Set the value of [preface] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setPreface($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->preface !== $v) {
            $this->preface = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_PREFACE] = true;
        }

        return $this;
    } // setPreface()

    /**
     * Set the value of [body] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setBody($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->body !== $v) {
            $this->body = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_BODY] = true;
        }

        return $this;
    } // setBody()

    /**
     * Set the value of [pic] column.
     *
     * @param resource $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setPic($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->pic = fopen('php://memory', 'r+');
            fwrite($this->pic, $v);
            rewind($this->pic);
        } else { // it's already a stream
            $this->pic = $v;
        }
        $this->modifiedColumns[CareNewsArticleTableMap::COL_PIC] = true;

        return $this;
    } // setPic()

    /**
     * Set the value of [pic_mime] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setPicMime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pic_mime !== $v) {
            $this->pic_mime = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_PIC_MIME] = true;
        }

        return $this;
    } // setPicMime()

    /**
     * Sets the value of the [art_num] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setArtNum($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->art_num !== $v) {
            $this->art_num = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_ART_NUM] = true;
        }

        return $this;
    } // setArtNum()

    /**
     * Set the value of [head_file] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setHeadFile($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->head_file !== $v) {
            $this->head_file = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_HEAD_FILE] = true;
        }

        return $this;
    } // setHeadFile()

    /**
     * Set the value of [main_file] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setMainFile($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->main_file !== $v) {
            $this->main_file = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_MAIN_FILE] = true;
        }

        return $this;
    } // setMainFile()

    /**
     * Set the value of [pic_file] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setPicFile($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pic_file !== $v) {
            $this->pic_file = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_PIC_FILE] = true;
        }

        return $this;
    } // setPicFile()

    /**
     * Set the value of [author] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setAuthor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->author !== $v) {
            $this->author = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_AUTHOR] = true;
        }

        return $this;
    } // setAuthor()

    /**
     * Sets the value of [submit_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setSubmitDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->submit_date !== null || $dt !== null) {
            if ( ($dt != $this->submit_date) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->submit_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareNewsArticleTableMap::COL_SUBMIT_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setSubmitDate()

    /**
     * Sets the value of [encode_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setEncodeDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->encode_date !== null || $dt !== null) {
            if ( ($dt != $this->encode_date) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->encode_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareNewsArticleTableMap::COL_ENCODE_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setEncodeDate()

    /**
     * Sets the value of [publish_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setPublishDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->publish_date !== null || $dt !== null) {
            if ( ($dt != $this->publish_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->publish_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareNewsArticleTableMap::COL_PUBLISH_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setPublishDate()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareNewsArticleTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareNewsArticleTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareNewsArticleTableMap::COL_CREATE_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setCreateTime()

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
            if ($this->lang !== 'en') {
                return false;
            }

            if ($this->dept_nr !== 0) {
                return false;
            }

            if ($this->status !== 'pending') {
                return false;
            }

            if ($this->title !== '') {
                return false;
            }

            if ($this->art_num !== false) {
                return false;
            }

            if ($this->author !== '') {
                return false;
            }

            if ($this->submit_date && $this->submit_date->format('Y-m-d H:i:s.u') !== NULL) {
                return false;
            }

            if ($this->encode_date && $this->encode_date->format('Y-m-d H:i:s.u') !== NULL) {
                return false;
            }

            if ($this->publish_date && $this->publish_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->modify_id !== '') {
                return false;
            }

            if ($this->create_id !== '') {
                return false;
            }

            if ($this->create_time && $this->create_time->format('Y-m-d H:i:s.u') !== NULL) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareNewsArticleTableMap::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareNewsArticleTableMap::translateFieldName('Lang', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lang = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareNewsArticleTableMap::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareNewsArticleTableMap::translateFieldName('Category', TableMap::TYPE_PHPNAME, $indexType)];
            $this->category = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareNewsArticleTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareNewsArticleTableMap::translateFieldName('Title', TableMap::TYPE_PHPNAME, $indexType)];
            $this->title = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareNewsArticleTableMap::translateFieldName('Preface', TableMap::TYPE_PHPNAME, $indexType)];
            $this->preface = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareNewsArticleTableMap::translateFieldName('Body', TableMap::TYPE_PHPNAME, $indexType)];
            $this->body = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareNewsArticleTableMap::translateFieldName('Pic', TableMap::TYPE_PHPNAME, $indexType)];
            if (null !== $col) {
                $this->pic = fopen('php://memory', 'r+');
                fwrite($this->pic, $col);
                rewind($this->pic);
            } else {
                $this->pic = null;
            }

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareNewsArticleTableMap::translateFieldName('PicMime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pic_mime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareNewsArticleTableMap::translateFieldName('ArtNum', TableMap::TYPE_PHPNAME, $indexType)];
            $this->art_num = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareNewsArticleTableMap::translateFieldName('HeadFile', TableMap::TYPE_PHPNAME, $indexType)];
            $this->head_file = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareNewsArticleTableMap::translateFieldName('MainFile', TableMap::TYPE_PHPNAME, $indexType)];
            $this->main_file = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareNewsArticleTableMap::translateFieldName('PicFile', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pic_file = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareNewsArticleTableMap::translateFieldName('Author', TableMap::TYPE_PHPNAME, $indexType)];
            $this->author = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareNewsArticleTableMap::translateFieldName('SubmitDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->submit_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareNewsArticleTableMap::translateFieldName('EncodeDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->encode_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareNewsArticleTableMap::translateFieldName('PublishDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->publish_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareNewsArticleTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareNewsArticleTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareNewsArticleTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareNewsArticleTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 22; // 22 = CareNewsArticleTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareNewsArticle'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareNewsArticleTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareNewsArticleQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareNewsArticle::setDeleted()
     * @see CareNewsArticle::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareNewsArticleTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareNewsArticleQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareNewsArticleTableMap::DATABASE_NAME);
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
                CareNewsArticleTableMap::addInstanceToPool($this);
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
                // Rewind the pic LOB column, since PDO does not rewind after inserting value.
                if ($this->pic !== null && is_resource($this->pic)) {
                    rewind($this->pic);
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

        $this->modifiedColumns[CareNewsArticleTableMap::COL_NR] = true;
        if (null !== $this->nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareNewsArticleTableMap::COL_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_NR)) {
            $modifiedColumns[':p' . $index++]  = 'nr';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_LANG)) {
            $modifiedColumns[':p' . $index++]  = 'lang';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'dept_nr';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_CATEGORY)) {
            $modifiedColumns[':p' . $index++]  = 'category';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_TITLE)) {
            $modifiedColumns[':p' . $index++]  = 'title';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_PREFACE)) {
            $modifiedColumns[':p' . $index++]  = 'preface';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_BODY)) {
            $modifiedColumns[':p' . $index++]  = 'body';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_PIC)) {
            $modifiedColumns[':p' . $index++]  = 'pic';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_PIC_MIME)) {
            $modifiedColumns[':p' . $index++]  = 'pic_mime';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_ART_NUM)) {
            $modifiedColumns[':p' . $index++]  = 'art_num';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_HEAD_FILE)) {
            $modifiedColumns[':p' . $index++]  = 'head_file';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_MAIN_FILE)) {
            $modifiedColumns[':p' . $index++]  = 'main_file';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_PIC_FILE)) {
            $modifiedColumns[':p' . $index++]  = 'pic_file';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = 'author';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_SUBMIT_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'submit_date';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_ENCODE_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'encode_date';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_PUBLISH_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'publish_date';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_news_article (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'nr':
                        $stmt->bindValue($identifier, $this->nr, PDO::PARAM_INT);
                        break;
                    case 'lang':
                        $stmt->bindValue($identifier, $this->lang, PDO::PARAM_STR);
                        break;
                    case 'dept_nr':
                        $stmt->bindValue($identifier, $this->dept_nr, PDO::PARAM_INT);
                        break;
                    case 'category':
                        $stmt->bindValue($identifier, $this->category, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'title':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case 'preface':
                        $stmt->bindValue($identifier, $this->preface, PDO::PARAM_STR);
                        break;
                    case 'body':
                        $stmt->bindValue($identifier, $this->body, PDO::PARAM_STR);
                        break;
                    case 'pic':
                        if (is_resource($this->pic)) {
                            rewind($this->pic);
                        }
                        $stmt->bindValue($identifier, $this->pic, PDO::PARAM_LOB);
                        break;
                    case 'pic_mime':
                        $stmt->bindValue($identifier, $this->pic_mime, PDO::PARAM_STR);
                        break;
                    case 'art_num':
                        $stmt->bindValue($identifier, (int) $this->art_num, PDO::PARAM_INT);
                        break;
                    case 'head_file':
                        $stmt->bindValue($identifier, $this->head_file, PDO::PARAM_STR);
                        break;
                    case 'main_file':
                        $stmt->bindValue($identifier, $this->main_file, PDO::PARAM_STR);
                        break;
                    case 'pic_file':
                        $stmt->bindValue($identifier, $this->pic_file, PDO::PARAM_STR);
                        break;
                    case 'author':
                        $stmt->bindValue($identifier, $this->author, PDO::PARAM_STR);
                        break;
                    case 'submit_date':
                        $stmt->bindValue($identifier, $this->submit_date ? $this->submit_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'encode_date':
                        $stmt->bindValue($identifier, $this->encode_date ? $this->encode_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'publish_date':
                        $stmt->bindValue($identifier, $this->publish_date ? $this->publish_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'modify_id':
                        $stmt->bindValue($identifier, $this->modify_id, PDO::PARAM_STR);
                        break;
                    case 'modify_time':
                        $stmt->bindValue($identifier, $this->modify_time ? $this->modify_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'create_id':
                        $stmt->bindValue($identifier, $this->create_id, PDO::PARAM_STR);
                        break;
                    case 'create_time':
                        $stmt->bindValue($identifier, $this->create_time ? $this->create_time->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
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
        $this->setNr($pk);

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
        $pos = CareNewsArticleTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getNr();
                break;
            case 1:
                return $this->getLang();
                break;
            case 2:
                return $this->getDeptNr();
                break;
            case 3:
                return $this->getCategory();
                break;
            case 4:
                return $this->getStatus();
                break;
            case 5:
                return $this->getTitle();
                break;
            case 6:
                return $this->getPreface();
                break;
            case 7:
                return $this->getBody();
                break;
            case 8:
                return $this->getPic();
                break;
            case 9:
                return $this->getPicMime();
                break;
            case 10:
                return $this->getArtNum();
                break;
            case 11:
                return $this->getHeadFile();
                break;
            case 12:
                return $this->getMainFile();
                break;
            case 13:
                return $this->getPicFile();
                break;
            case 14:
                return $this->getAuthor();
                break;
            case 15:
                return $this->getSubmitDate();
                break;
            case 16:
                return $this->getEncodeDate();
                break;
            case 17:
                return $this->getPublishDate();
                break;
            case 18:
                return $this->getModifyId();
                break;
            case 19:
                return $this->getModifyTime();
                break;
            case 20:
                return $this->getCreateId();
                break;
            case 21:
                return $this->getCreateTime();
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

        if (isset($alreadyDumpedObjects['CareNewsArticle'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareNewsArticle'][$this->hashCode()] = true;
        $keys = CareNewsArticleTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNr(),
            $keys[1] => $this->getLang(),
            $keys[2] => $this->getDeptNr(),
            $keys[3] => $this->getCategory(),
            $keys[4] => $this->getStatus(),
            $keys[5] => $this->getTitle(),
            $keys[6] => $this->getPreface(),
            $keys[7] => $this->getBody(),
            $keys[8] => $this->getPic(),
            $keys[9] => $this->getPicMime(),
            $keys[10] => $this->getArtNum(),
            $keys[11] => $this->getHeadFile(),
            $keys[12] => $this->getMainFile(),
            $keys[13] => $this->getPicFile(),
            $keys[14] => $this->getAuthor(),
            $keys[15] => $this->getSubmitDate(),
            $keys[16] => $this->getEncodeDate(),
            $keys[17] => $this->getPublishDate(),
            $keys[18] => $this->getModifyId(),
            $keys[19] => $this->getModifyTime(),
            $keys[20] => $this->getCreateId(),
            $keys[21] => $this->getCreateTime(),
        );
        if ($result[$keys[15]] instanceof \DateTimeInterface) {
            $result[$keys[15]] = $result[$keys[15]]->format('c');
        }

        if ($result[$keys[16]] instanceof \DateTimeInterface) {
            $result[$keys[16]] = $result[$keys[16]]->format('c');
        }

        if ($result[$keys[17]] instanceof \DateTimeInterface) {
            $result[$keys[17]] = $result[$keys[17]]->format('c');
        }

        if ($result[$keys[19]] instanceof \DateTimeInterface) {
            $result[$keys[19]] = $result[$keys[19]]->format('c');
        }

        if ($result[$keys[21]] instanceof \DateTimeInterface) {
            $result[$keys[21]] = $result[$keys[21]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareNewsArticle
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareNewsArticleTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareNewsArticle
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNr($value);
                break;
            case 1:
                $this->setLang($value);
                break;
            case 2:
                $this->setDeptNr($value);
                break;
            case 3:
                $this->setCategory($value);
                break;
            case 4:
                $this->setStatus($value);
                break;
            case 5:
                $this->setTitle($value);
                break;
            case 6:
                $this->setPreface($value);
                break;
            case 7:
                $this->setBody($value);
                break;
            case 8:
                $this->setPic($value);
                break;
            case 9:
                $this->setPicMime($value);
                break;
            case 10:
                $this->setArtNum($value);
                break;
            case 11:
                $this->setHeadFile($value);
                break;
            case 12:
                $this->setMainFile($value);
                break;
            case 13:
                $this->setPicFile($value);
                break;
            case 14:
                $this->setAuthor($value);
                break;
            case 15:
                $this->setSubmitDate($value);
                break;
            case 16:
                $this->setEncodeDate($value);
                break;
            case 17:
                $this->setPublishDate($value);
                break;
            case 18:
                $this->setModifyId($value);
                break;
            case 19:
                $this->setModifyTime($value);
                break;
            case 20:
                $this->setCreateId($value);
                break;
            case 21:
                $this->setCreateTime($value);
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
        $keys = CareNewsArticleTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setLang($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDeptNr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCategory($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setStatus($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setTitle($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPreface($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setBody($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPic($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPicMime($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArtNum($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setHeadFile($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setMainFile($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setPicFile($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setAuthor($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setSubmitDate($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setEncodeDate($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPublishDate($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setModifyId($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setModifyTime($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setCreateId($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setCreateTime($arr[$keys[21]]);
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
     * @return $this|\CareMd\CareMd\CareNewsArticle The current object, for fluid interface
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
        $criteria = new Criteria(CareNewsArticleTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareNewsArticleTableMap::COL_NR)) {
            $criteria->add(CareNewsArticleTableMap::COL_NR, $this->nr);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_LANG)) {
            $criteria->add(CareNewsArticleTableMap::COL_LANG, $this->lang);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_DEPT_NR)) {
            $criteria->add(CareNewsArticleTableMap::COL_DEPT_NR, $this->dept_nr);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_CATEGORY)) {
            $criteria->add(CareNewsArticleTableMap::COL_CATEGORY, $this->category);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_STATUS)) {
            $criteria->add(CareNewsArticleTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_TITLE)) {
            $criteria->add(CareNewsArticleTableMap::COL_TITLE, $this->title);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_PREFACE)) {
            $criteria->add(CareNewsArticleTableMap::COL_PREFACE, $this->preface);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_BODY)) {
            $criteria->add(CareNewsArticleTableMap::COL_BODY, $this->body);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_PIC)) {
            $criteria->add(CareNewsArticleTableMap::COL_PIC, $this->pic);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_PIC_MIME)) {
            $criteria->add(CareNewsArticleTableMap::COL_PIC_MIME, $this->pic_mime);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_ART_NUM)) {
            $criteria->add(CareNewsArticleTableMap::COL_ART_NUM, $this->art_num);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_HEAD_FILE)) {
            $criteria->add(CareNewsArticleTableMap::COL_HEAD_FILE, $this->head_file);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_MAIN_FILE)) {
            $criteria->add(CareNewsArticleTableMap::COL_MAIN_FILE, $this->main_file);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_PIC_FILE)) {
            $criteria->add(CareNewsArticleTableMap::COL_PIC_FILE, $this->pic_file);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_AUTHOR)) {
            $criteria->add(CareNewsArticleTableMap::COL_AUTHOR, $this->author);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_SUBMIT_DATE)) {
            $criteria->add(CareNewsArticleTableMap::COL_SUBMIT_DATE, $this->submit_date);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_ENCODE_DATE)) {
            $criteria->add(CareNewsArticleTableMap::COL_ENCODE_DATE, $this->encode_date);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_PUBLISH_DATE)) {
            $criteria->add(CareNewsArticleTableMap::COL_PUBLISH_DATE, $this->publish_date);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareNewsArticleTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareNewsArticleTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_CREATE_ID)) {
            $criteria->add(CareNewsArticleTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareNewsArticleTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareNewsArticleTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareNewsArticleQuery::create();
        $criteria->add(CareNewsArticleTableMap::COL_NR, $this->nr);

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
        $validPk = null !== $this->getNr();

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
        return $this->getNr();
    }

    /**
     * Generic method to set the primary key (nr column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setNr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getNr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareNewsArticle (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLang($this->getLang());
        $copyObj->setDeptNr($this->getDeptNr());
        $copyObj->setCategory($this->getCategory());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setPreface($this->getPreface());
        $copyObj->setBody($this->getBody());
        $copyObj->setPic($this->getPic());
        $copyObj->setPicMime($this->getPicMime());
        $copyObj->setArtNum($this->getArtNum());
        $copyObj->setHeadFile($this->getHeadFile());
        $copyObj->setMainFile($this->getMainFile());
        $copyObj->setPicFile($this->getPicFile());
        $copyObj->setAuthor($this->getAuthor());
        $copyObj->setSubmitDate($this->getSubmitDate());
        $copyObj->setEncodeDate($this->getEncodeDate());
        $copyObj->setPublishDate($this->getPublishDate());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setNr(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareNewsArticle Clone of current object.
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
        $this->nr = null;
        $this->lang = null;
        $this->dept_nr = null;
        $this->category = null;
        $this->status = null;
        $this->title = null;
        $this->preface = null;
        $this->body = null;
        $this->pic = null;
        $this->pic_mime = null;
        $this->art_num = null;
        $this->head_file = null;
        $this->main_file = null;
        $this->pic_file = null;
        $this->author = null;
        $this->submit_date = null;
        $this->encode_date = null;
        $this->publish_date = null;
        $this->modify_id = null;
        $this->modify_time = null;
        $this->create_id = null;
        $this->create_time = null;
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
        return (string) $this->exportTo(CareNewsArticleTableMap::DEFAULT_STRING_FORMAT);
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
