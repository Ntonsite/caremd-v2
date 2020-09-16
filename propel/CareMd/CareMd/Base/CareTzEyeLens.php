<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTzEyeLensQuery as ChildCareTzEyeLensQuery;
use CareMd\CareMd\Map\CareTzEyeLensTableMap;
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
 * Base class that represents a row from the 'care_tz_eye_lens' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzEyeLens implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzEyeLensTableMap';


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
     * The value for the pid field.
     *
     * @var        int
     */
    protected $pid;

    /**
     * The value for the right_eye_test1 field.
     *
     * @var        string
     */
    protected $right_eye_test1;

    /**
     * The value for the right_eye_test2 field.
     *
     * @var        string
     */
    protected $right_eye_test2;

    /**
     * The value for the right_eye_test3 field.
     *
     * @var        string
     */
    protected $right_eye_test3;

    /**
     * The value for the right_eye_test4 field.
     *
     * @var        string
     */
    protected $right_eye_test4;

    /**
     * The value for the right_eye_test5 field.
     *
     * @var        string
     */
    protected $right_eye_test5;

    /**
     * The value for the right_eye_test6 field.
     *
     * @var        string
     */
    protected $right_eye_test6;

    /**
     * The value for the right_eye_test7 field.
     *
     * @var        string
     */
    protected $right_eye_test7;

    /**
     * The value for the right_eye_test8 field.
     *
     * @var        string
     */
    protected $right_eye_test8;

    /**
     * The value for the right_eye_test9 field.
     *
     * @var        string
     */
    protected $right_eye_test9;

    /**
     * The value for the left_eye_test1 field.
     *
     * @var        string
     */
    protected $left_eye_test1;

    /**
     * The value for the left_eye_test2 field.
     *
     * @var        string
     */
    protected $left_eye_test2;

    /**
     * The value for the left_eye_test3 field.
     *
     * @var        string
     */
    protected $left_eye_test3;

    /**
     * The value for the left_eye_test4 field.
     *
     * @var        string
     */
    protected $left_eye_test4;

    /**
     * The value for the left_eye_test5 field.
     *
     * @var        string
     */
    protected $left_eye_test5;

    /**
     * The value for the left_eye_test6 field.
     *
     * @var        string
     */
    protected $left_eye_test6;

    /**
     * The value for the left_eye_test7 field.
     *
     * @var        string
     */
    protected $left_eye_test7;

    /**
     * The value for the left_eye_test8 field.
     *
     * @var        string
     */
    protected $left_eye_test8;

    /**
     * The value for the left_eye_test9 field.
     *
     * @var        string
     */
    protected $left_eye_test9;

    /**
     * The value for the signature field.
     *
     * @var        string
     */
    protected $signature;

    /**
     * The value for the examination_date field.
     *
     * @var        DateTime
     */
    protected $examination_date;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTzEyeLens object.
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
     * Compares this with another <code>CareTzEyeLens</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzEyeLens</code>, delegates to
     * <code>equals(CareTzEyeLens)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzEyeLens The current object, for fluid interface
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
     * Get the [pid] column value.
     *
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Get the [right_eye_test1] column value.
     *
     * @return string
     */
    public function getRightEyeTest1()
    {
        return $this->right_eye_test1;
    }

    /**
     * Get the [right_eye_test2] column value.
     *
     * @return string
     */
    public function getRightEyeTest2()
    {
        return $this->right_eye_test2;
    }

    /**
     * Get the [right_eye_test3] column value.
     *
     * @return string
     */
    public function getRightEyeTest3()
    {
        return $this->right_eye_test3;
    }

    /**
     * Get the [right_eye_test4] column value.
     *
     * @return string
     */
    public function getRightEyeTest4()
    {
        return $this->right_eye_test4;
    }

    /**
     * Get the [right_eye_test5] column value.
     *
     * @return string
     */
    public function getRightEyeTest5()
    {
        return $this->right_eye_test5;
    }

    /**
     * Get the [right_eye_test6] column value.
     *
     * @return string
     */
    public function getRightEyeTest6()
    {
        return $this->right_eye_test6;
    }

    /**
     * Get the [right_eye_test7] column value.
     *
     * @return string
     */
    public function getRightEyeTest7()
    {
        return $this->right_eye_test7;
    }

    /**
     * Get the [right_eye_test8] column value.
     *
     * @return string
     */
    public function getRightEyeTest8()
    {
        return $this->right_eye_test8;
    }

    /**
     * Get the [right_eye_test9] column value.
     *
     * @return string
     */
    public function getRightEyeTest9()
    {
        return $this->right_eye_test9;
    }

    /**
     * Get the [left_eye_test1] column value.
     *
     * @return string
     */
    public function getLeftEyeTest1()
    {
        return $this->left_eye_test1;
    }

    /**
     * Get the [left_eye_test2] column value.
     *
     * @return string
     */
    public function getLeftEyeTest2()
    {
        return $this->left_eye_test2;
    }

    /**
     * Get the [left_eye_test3] column value.
     *
     * @return string
     */
    public function getLeftEyeTest3()
    {
        return $this->left_eye_test3;
    }

    /**
     * Get the [left_eye_test4] column value.
     *
     * @return string
     */
    public function getLeftEyeTest4()
    {
        return $this->left_eye_test4;
    }

    /**
     * Get the [left_eye_test5] column value.
     *
     * @return string
     */
    public function getLeftEyeTest5()
    {
        return $this->left_eye_test5;
    }

    /**
     * Get the [left_eye_test6] column value.
     *
     * @return string
     */
    public function getLeftEyeTest6()
    {
        return $this->left_eye_test6;
    }

    /**
     * Get the [left_eye_test7] column value.
     *
     * @return string
     */
    public function getLeftEyeTest7()
    {
        return $this->left_eye_test7;
    }

    /**
     * Get the [left_eye_test8] column value.
     *
     * @return string
     */
    public function getLeftEyeTest8()
    {
        return $this->left_eye_test8;
    }

    /**
     * Get the [left_eye_test9] column value.
     *
     * @return string
     */
    public function getLeftEyeTest9()
    {
        return $this->left_eye_test9;
    }

    /**
     * Get the [signature] column value.
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Get the [optionally formatted] temporal [examination_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getExaminationDate($format = NULL)
    {
        if ($format === null) {
            return $this->examination_date;
        } else {
            return $this->examination_date instanceof \DateTimeInterface ? $this->examination_date->format($format) : null;
        }
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [pid] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_PID] = true;
        }

        return $this;
    } // setPid()

    /**
     * Set the value of [right_eye_test1] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setRightEyeTest1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->right_eye_test1 !== $v) {
            $this->right_eye_test1 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST1] = true;
        }

        return $this;
    } // setRightEyeTest1()

    /**
     * Set the value of [right_eye_test2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setRightEyeTest2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->right_eye_test2 !== $v) {
            $this->right_eye_test2 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST2] = true;
        }

        return $this;
    } // setRightEyeTest2()

    /**
     * Set the value of [right_eye_test3] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setRightEyeTest3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->right_eye_test3 !== $v) {
            $this->right_eye_test3 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST3] = true;
        }

        return $this;
    } // setRightEyeTest3()

    /**
     * Set the value of [right_eye_test4] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setRightEyeTest4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->right_eye_test4 !== $v) {
            $this->right_eye_test4 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST4] = true;
        }

        return $this;
    } // setRightEyeTest4()

    /**
     * Set the value of [right_eye_test5] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setRightEyeTest5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->right_eye_test5 !== $v) {
            $this->right_eye_test5 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST5] = true;
        }

        return $this;
    } // setRightEyeTest5()

    /**
     * Set the value of [right_eye_test6] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setRightEyeTest6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->right_eye_test6 !== $v) {
            $this->right_eye_test6 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST6] = true;
        }

        return $this;
    } // setRightEyeTest6()

    /**
     * Set the value of [right_eye_test7] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setRightEyeTest7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->right_eye_test7 !== $v) {
            $this->right_eye_test7 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST7] = true;
        }

        return $this;
    } // setRightEyeTest7()

    /**
     * Set the value of [right_eye_test8] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setRightEyeTest8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->right_eye_test8 !== $v) {
            $this->right_eye_test8 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST8] = true;
        }

        return $this;
    } // setRightEyeTest8()

    /**
     * Set the value of [right_eye_test9] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setRightEyeTest9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->right_eye_test9 !== $v) {
            $this->right_eye_test9 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST9] = true;
        }

        return $this;
    } // setRightEyeTest9()

    /**
     * Set the value of [left_eye_test1] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setLeftEyeTest1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->left_eye_test1 !== $v) {
            $this->left_eye_test1 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_LEFT_EYE_TEST1] = true;
        }

        return $this;
    } // setLeftEyeTest1()

    /**
     * Set the value of [left_eye_test2] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setLeftEyeTest2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->left_eye_test2 !== $v) {
            $this->left_eye_test2 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_LEFT_EYE_TEST2] = true;
        }

        return $this;
    } // setLeftEyeTest2()

    /**
     * Set the value of [left_eye_test3] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setLeftEyeTest3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->left_eye_test3 !== $v) {
            $this->left_eye_test3 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_LEFT_EYE_TEST3] = true;
        }

        return $this;
    } // setLeftEyeTest3()

    /**
     * Set the value of [left_eye_test4] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setLeftEyeTest4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->left_eye_test4 !== $v) {
            $this->left_eye_test4 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_LEFT_EYE_TEST4] = true;
        }

        return $this;
    } // setLeftEyeTest4()

    /**
     * Set the value of [left_eye_test5] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setLeftEyeTest5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->left_eye_test5 !== $v) {
            $this->left_eye_test5 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_LEFT_EYE_TEST5] = true;
        }

        return $this;
    } // setLeftEyeTest5()

    /**
     * Set the value of [left_eye_test6] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setLeftEyeTest6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->left_eye_test6 !== $v) {
            $this->left_eye_test6 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_LEFT_EYE_TEST6] = true;
        }

        return $this;
    } // setLeftEyeTest6()

    /**
     * Set the value of [left_eye_test7] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setLeftEyeTest7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->left_eye_test7 !== $v) {
            $this->left_eye_test7 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_LEFT_EYE_TEST7] = true;
        }

        return $this;
    } // setLeftEyeTest7()

    /**
     * Set the value of [left_eye_test8] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setLeftEyeTest8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->left_eye_test8 !== $v) {
            $this->left_eye_test8 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_LEFT_EYE_TEST8] = true;
        }

        return $this;
    } // setLeftEyeTest8()

    /**
     * Set the value of [left_eye_test9] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setLeftEyeTest9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->left_eye_test9 !== $v) {
            $this->left_eye_test9 = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_LEFT_EYE_TEST9] = true;
        }

        return $this;
    } // setLeftEyeTest9()

    /**
     * Set the value of [signature] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setSignature($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->signature !== $v) {
            $this->signature = $v;
            $this->modifiedColumns[CareTzEyeLensTableMap::COL_SIGNATURE] = true;
        }

        return $this;
    } // setSignature()

    /**
     * Sets the value of [examination_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object (for fluent API support)
     */
    public function setExaminationDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->examination_date !== null || $dt !== null) {
            if ($this->examination_date === null || $dt === null || $dt->format("Y-m-d") !== $this->examination_date->format("Y-m-d")) {
                $this->examination_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTzEyeLensTableMap::COL_EXAMINATION_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setExaminationDate()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzEyeLensTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzEyeLensTableMap::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzEyeLensTableMap::translateFieldName('RightEyeTest1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->right_eye_test1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzEyeLensTableMap::translateFieldName('RightEyeTest2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->right_eye_test2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzEyeLensTableMap::translateFieldName('RightEyeTest3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->right_eye_test3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzEyeLensTableMap::translateFieldName('RightEyeTest4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->right_eye_test4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzEyeLensTableMap::translateFieldName('RightEyeTest5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->right_eye_test5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzEyeLensTableMap::translateFieldName('RightEyeTest6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->right_eye_test6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzEyeLensTableMap::translateFieldName('RightEyeTest7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->right_eye_test7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzEyeLensTableMap::translateFieldName('RightEyeTest8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->right_eye_test8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTzEyeLensTableMap::translateFieldName('RightEyeTest9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->right_eye_test9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTzEyeLensTableMap::translateFieldName('LeftEyeTest1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->left_eye_test1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTzEyeLensTableMap::translateFieldName('LeftEyeTest2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->left_eye_test2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTzEyeLensTableMap::translateFieldName('LeftEyeTest3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->left_eye_test3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTzEyeLensTableMap::translateFieldName('LeftEyeTest4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->left_eye_test4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTzEyeLensTableMap::translateFieldName('LeftEyeTest5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->left_eye_test5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTzEyeLensTableMap::translateFieldName('LeftEyeTest6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->left_eye_test6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTzEyeLensTableMap::translateFieldName('LeftEyeTest7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->left_eye_test7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTzEyeLensTableMap::translateFieldName('LeftEyeTest8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->left_eye_test8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTzEyeLensTableMap::translateFieldName('LeftEyeTest9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->left_eye_test9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTzEyeLensTableMap::translateFieldName('Signature', TableMap::TYPE_PHPNAME, $indexType)];
            $this->signature = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTzEyeLensTableMap::translateFieldName('ExaminationDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->examination_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 22; // 22 = CareTzEyeLensTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzEyeLens'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzEyeLensTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzEyeLensQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzEyeLens::setDeleted()
     * @see CareTzEyeLens::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeLensTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzEyeLensQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzEyeLensTableMap::DATABASE_NAME);
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
                CareTzEyeLensTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzEyeLensTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzEyeLensTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_PID)) {
            $modifiedColumns[':p' . $index++]  = 'pid';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST1)) {
            $modifiedColumns[':p' . $index++]  = 'right_eye_test1';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST2)) {
            $modifiedColumns[':p' . $index++]  = 'right_eye_test2';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST3)) {
            $modifiedColumns[':p' . $index++]  = 'right_eye_test3';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST4)) {
            $modifiedColumns[':p' . $index++]  = 'right_eye_test4';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST5)) {
            $modifiedColumns[':p' . $index++]  = 'right_eye_test5';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST6)) {
            $modifiedColumns[':p' . $index++]  = 'right_eye_test6';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST7)) {
            $modifiedColumns[':p' . $index++]  = 'right_eye_test7';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST8)) {
            $modifiedColumns[':p' . $index++]  = 'right_eye_test8';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST9)) {
            $modifiedColumns[':p' . $index++]  = 'right_eye_test9';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST1)) {
            $modifiedColumns[':p' . $index++]  = 'left_eye_test1';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST2)) {
            $modifiedColumns[':p' . $index++]  = 'left_eye_test2';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST3)) {
            $modifiedColumns[':p' . $index++]  = 'left_eye_test3';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST4)) {
            $modifiedColumns[':p' . $index++]  = 'left_eye_test4';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST5)) {
            $modifiedColumns[':p' . $index++]  = 'left_eye_test5';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST6)) {
            $modifiedColumns[':p' . $index++]  = 'left_eye_test6';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST7)) {
            $modifiedColumns[':p' . $index++]  = 'left_eye_test7';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST8)) {
            $modifiedColumns[':p' . $index++]  = 'left_eye_test8';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST9)) {
            $modifiedColumns[':p' . $index++]  = 'left_eye_test9';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = 'Signature';
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_EXAMINATION_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'Examination_date';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_eye_lens (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'pid':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_INT);
                        break;
                    case 'right_eye_test1':
                        $stmt->bindValue($identifier, $this->right_eye_test1, PDO::PARAM_STR);
                        break;
                    case 'right_eye_test2':
                        $stmt->bindValue($identifier, $this->right_eye_test2, PDO::PARAM_STR);
                        break;
                    case 'right_eye_test3':
                        $stmt->bindValue($identifier, $this->right_eye_test3, PDO::PARAM_STR);
                        break;
                    case 'right_eye_test4':
                        $stmt->bindValue($identifier, $this->right_eye_test4, PDO::PARAM_STR);
                        break;
                    case 'right_eye_test5':
                        $stmt->bindValue($identifier, $this->right_eye_test5, PDO::PARAM_STR);
                        break;
                    case 'right_eye_test6':
                        $stmt->bindValue($identifier, $this->right_eye_test6, PDO::PARAM_STR);
                        break;
                    case 'right_eye_test7':
                        $stmt->bindValue($identifier, $this->right_eye_test7, PDO::PARAM_STR);
                        break;
                    case 'right_eye_test8':
                        $stmt->bindValue($identifier, $this->right_eye_test8, PDO::PARAM_STR);
                        break;
                    case 'right_eye_test9':
                        $stmt->bindValue($identifier, $this->right_eye_test9, PDO::PARAM_STR);
                        break;
                    case 'left_eye_test1':
                        $stmt->bindValue($identifier, $this->left_eye_test1, PDO::PARAM_STR);
                        break;
                    case 'left_eye_test2':
                        $stmt->bindValue($identifier, $this->left_eye_test2, PDO::PARAM_STR);
                        break;
                    case 'left_eye_test3':
                        $stmt->bindValue($identifier, $this->left_eye_test3, PDO::PARAM_STR);
                        break;
                    case 'left_eye_test4':
                        $stmt->bindValue($identifier, $this->left_eye_test4, PDO::PARAM_STR);
                        break;
                    case 'left_eye_test5':
                        $stmt->bindValue($identifier, $this->left_eye_test5, PDO::PARAM_STR);
                        break;
                    case 'left_eye_test6':
                        $stmt->bindValue($identifier, $this->left_eye_test6, PDO::PARAM_STR);
                        break;
                    case 'left_eye_test7':
                        $stmt->bindValue($identifier, $this->left_eye_test7, PDO::PARAM_STR);
                        break;
                    case 'left_eye_test8':
                        $stmt->bindValue($identifier, $this->left_eye_test8, PDO::PARAM_STR);
                        break;
                    case 'left_eye_test9':
                        $stmt->bindValue($identifier, $this->left_eye_test9, PDO::PARAM_STR);
                        break;
                    case 'Signature':
                        $stmt->bindValue($identifier, $this->signature, PDO::PARAM_STR);
                        break;
                    case 'Examination_date':
                        $stmt->bindValue($identifier, $this->examination_date ? $this->examination_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
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
        $pos = CareTzEyeLensTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPid();
                break;
            case 2:
                return $this->getRightEyeTest1();
                break;
            case 3:
                return $this->getRightEyeTest2();
                break;
            case 4:
                return $this->getRightEyeTest3();
                break;
            case 5:
                return $this->getRightEyeTest4();
                break;
            case 6:
                return $this->getRightEyeTest5();
                break;
            case 7:
                return $this->getRightEyeTest6();
                break;
            case 8:
                return $this->getRightEyeTest7();
                break;
            case 9:
                return $this->getRightEyeTest8();
                break;
            case 10:
                return $this->getRightEyeTest9();
                break;
            case 11:
                return $this->getLeftEyeTest1();
                break;
            case 12:
                return $this->getLeftEyeTest2();
                break;
            case 13:
                return $this->getLeftEyeTest3();
                break;
            case 14:
                return $this->getLeftEyeTest4();
                break;
            case 15:
                return $this->getLeftEyeTest5();
                break;
            case 16:
                return $this->getLeftEyeTest6();
                break;
            case 17:
                return $this->getLeftEyeTest7();
                break;
            case 18:
                return $this->getLeftEyeTest8();
                break;
            case 19:
                return $this->getLeftEyeTest9();
                break;
            case 20:
                return $this->getSignature();
                break;
            case 21:
                return $this->getExaminationDate();
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

        if (isset($alreadyDumpedObjects['CareTzEyeLens'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzEyeLens'][$this->hashCode()] = true;
        $keys = CareTzEyeLensTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getPid(),
            $keys[2] => $this->getRightEyeTest1(),
            $keys[3] => $this->getRightEyeTest2(),
            $keys[4] => $this->getRightEyeTest3(),
            $keys[5] => $this->getRightEyeTest4(),
            $keys[6] => $this->getRightEyeTest5(),
            $keys[7] => $this->getRightEyeTest6(),
            $keys[8] => $this->getRightEyeTest7(),
            $keys[9] => $this->getRightEyeTest8(),
            $keys[10] => $this->getRightEyeTest9(),
            $keys[11] => $this->getLeftEyeTest1(),
            $keys[12] => $this->getLeftEyeTest2(),
            $keys[13] => $this->getLeftEyeTest3(),
            $keys[14] => $this->getLeftEyeTest4(),
            $keys[15] => $this->getLeftEyeTest5(),
            $keys[16] => $this->getLeftEyeTest6(),
            $keys[17] => $this->getLeftEyeTest7(),
            $keys[18] => $this->getLeftEyeTest8(),
            $keys[19] => $this->getLeftEyeTest9(),
            $keys[20] => $this->getSignature(),
            $keys[21] => $this->getExaminationDate(),
        );
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
     * @return $this|\CareMd\CareMd\CareTzEyeLens
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzEyeLensTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzEyeLens
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setPid($value);
                break;
            case 2:
                $this->setRightEyeTest1($value);
                break;
            case 3:
                $this->setRightEyeTest2($value);
                break;
            case 4:
                $this->setRightEyeTest3($value);
                break;
            case 5:
                $this->setRightEyeTest4($value);
                break;
            case 6:
                $this->setRightEyeTest5($value);
                break;
            case 7:
                $this->setRightEyeTest6($value);
                break;
            case 8:
                $this->setRightEyeTest7($value);
                break;
            case 9:
                $this->setRightEyeTest8($value);
                break;
            case 10:
                $this->setRightEyeTest9($value);
                break;
            case 11:
                $this->setLeftEyeTest1($value);
                break;
            case 12:
                $this->setLeftEyeTest2($value);
                break;
            case 13:
                $this->setLeftEyeTest3($value);
                break;
            case 14:
                $this->setLeftEyeTest4($value);
                break;
            case 15:
                $this->setLeftEyeTest5($value);
                break;
            case 16:
                $this->setLeftEyeTest6($value);
                break;
            case 17:
                $this->setLeftEyeTest7($value);
                break;
            case 18:
                $this->setLeftEyeTest8($value);
                break;
            case 19:
                $this->setLeftEyeTest9($value);
                break;
            case 20:
                $this->setSignature($value);
                break;
            case 21:
                $this->setExaminationDate($value);
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
        $keys = CareTzEyeLensTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setRightEyeTest1($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setRightEyeTest2($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setRightEyeTest3($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setRightEyeTest4($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setRightEyeTest5($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setRightEyeTest6($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setRightEyeTest7($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setRightEyeTest8($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setRightEyeTest9($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setLeftEyeTest1($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setLeftEyeTest2($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setLeftEyeTest3($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setLeftEyeTest4($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setLeftEyeTest5($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setLeftEyeTest6($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setLeftEyeTest7($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setLeftEyeTest8($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setLeftEyeTest9($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setSignature($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setExaminationDate($arr[$keys[21]]);
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
     * @return $this|\CareMd\CareMd\CareTzEyeLens The current object, for fluid interface
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
        $criteria = new Criteria(CareTzEyeLensTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_ID)) {
            $criteria->add(CareTzEyeLensTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_PID)) {
            $criteria->add(CareTzEyeLensTableMap::COL_PID, $this->pid);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST1)) {
            $criteria->add(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST1, $this->right_eye_test1);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST2)) {
            $criteria->add(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST2, $this->right_eye_test2);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST3)) {
            $criteria->add(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST3, $this->right_eye_test3);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST4)) {
            $criteria->add(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST4, $this->right_eye_test4);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST5)) {
            $criteria->add(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST5, $this->right_eye_test5);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST6)) {
            $criteria->add(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST6, $this->right_eye_test6);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST7)) {
            $criteria->add(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST7, $this->right_eye_test7);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST8)) {
            $criteria->add(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST8, $this->right_eye_test8);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST9)) {
            $criteria->add(CareTzEyeLensTableMap::COL_RIGHT_EYE_TEST9, $this->right_eye_test9);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST1)) {
            $criteria->add(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST1, $this->left_eye_test1);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST2)) {
            $criteria->add(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST2, $this->left_eye_test2);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST3)) {
            $criteria->add(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST3, $this->left_eye_test3);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST4)) {
            $criteria->add(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST4, $this->left_eye_test4);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST5)) {
            $criteria->add(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST5, $this->left_eye_test5);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST6)) {
            $criteria->add(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST6, $this->left_eye_test6);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST7)) {
            $criteria->add(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST7, $this->left_eye_test7);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST8)) {
            $criteria->add(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST8, $this->left_eye_test8);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST9)) {
            $criteria->add(CareTzEyeLensTableMap::COL_LEFT_EYE_TEST9, $this->left_eye_test9);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_SIGNATURE)) {
            $criteria->add(CareTzEyeLensTableMap::COL_SIGNATURE, $this->signature);
        }
        if ($this->isColumnModified(CareTzEyeLensTableMap::COL_EXAMINATION_DATE)) {
            $criteria->add(CareTzEyeLensTableMap::COL_EXAMINATION_DATE, $this->examination_date);
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
        $criteria = ChildCareTzEyeLensQuery::create();
        $criteria->add(CareTzEyeLensTableMap::COL_ID, $this->id);

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
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzEyeLens (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPid($this->getPid());
        $copyObj->setRightEyeTest1($this->getRightEyeTest1());
        $copyObj->setRightEyeTest2($this->getRightEyeTest2());
        $copyObj->setRightEyeTest3($this->getRightEyeTest3());
        $copyObj->setRightEyeTest4($this->getRightEyeTest4());
        $copyObj->setRightEyeTest5($this->getRightEyeTest5());
        $copyObj->setRightEyeTest6($this->getRightEyeTest6());
        $copyObj->setRightEyeTest7($this->getRightEyeTest7());
        $copyObj->setRightEyeTest8($this->getRightEyeTest8());
        $copyObj->setRightEyeTest9($this->getRightEyeTest9());
        $copyObj->setLeftEyeTest1($this->getLeftEyeTest1());
        $copyObj->setLeftEyeTest2($this->getLeftEyeTest2());
        $copyObj->setLeftEyeTest3($this->getLeftEyeTest3());
        $copyObj->setLeftEyeTest4($this->getLeftEyeTest4());
        $copyObj->setLeftEyeTest5($this->getLeftEyeTest5());
        $copyObj->setLeftEyeTest6($this->getLeftEyeTest6());
        $copyObj->setLeftEyeTest7($this->getLeftEyeTest7());
        $copyObj->setLeftEyeTest8($this->getLeftEyeTest8());
        $copyObj->setLeftEyeTest9($this->getLeftEyeTest9());
        $copyObj->setSignature($this->getSignature());
        $copyObj->setExaminationDate($this->getExaminationDate());
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
     * @return \CareMd\CareMd\CareTzEyeLens Clone of current object.
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
        $this->pid = null;
        $this->right_eye_test1 = null;
        $this->right_eye_test2 = null;
        $this->right_eye_test3 = null;
        $this->right_eye_test4 = null;
        $this->right_eye_test5 = null;
        $this->right_eye_test6 = null;
        $this->right_eye_test7 = null;
        $this->right_eye_test8 = null;
        $this->right_eye_test9 = null;
        $this->left_eye_test1 = null;
        $this->left_eye_test2 = null;
        $this->left_eye_test3 = null;
        $this->left_eye_test4 = null;
        $this->left_eye_test5 = null;
        $this->left_eye_test6 = null;
        $this->left_eye_test7 = null;
        $this->left_eye_test8 = null;
        $this->left_eye_test9 = null;
        $this->signature = null;
        $this->examination_date = null;
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
        return (string) $this->exportTo(CareTzEyeLensTableMap::DEFAULT_STRING_FORMAT);
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
