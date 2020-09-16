<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzDrugsandservicesQuery as ChildCareTzDrugsandservicesQuery;
use CareMd\CareMd\Map\CareTzDrugsandservicesTableMap;
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
 * Base class that represents a row from the 'care_tz_drugsandservices' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTzDrugsandservices implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTzDrugsandservicesTableMap';


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
     * The value for the item_id field.
     *
     * @var        string
     */
    protected $item_id;

    /**
     * The value for the item_number field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $item_number;

    /**
     * The value for the partcode field.
     *
     * @var        string
     */
    protected $partcode;

    /**
     * The value for the is_pediatric field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_pediatric;

    /**
     * The value for the is_adult field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_adult;

    /**
     * The value for the is_other field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_other;

    /**
     * The value for the is_consumable field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_consumable;

    /**
     * The value for the is_labtest field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_labtest;

    /**
     * The value for the is_radio_test field.
     *
     * @var        int
     */
    protected $is_radio_test;

    /**
     * The value for the item_description field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $item_description;

    /**
     * The value for the item_full_description field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $item_full_description;

    /**
     * The value for the unit_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $unit_price;

    /**
     * The value for the unit_price_1 field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $unit_price_1;

    /**
     * The value for the unit_price_2 field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $unit_price_2;

    /**
     * The value for the unit_price_3 field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $unit_price_3;

    /**
     * The value for the purchasing_class field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $purchasing_class;

    /**
     * The value for the sub_class field.
     *
     * @var        string
     */
    protected $sub_class;

    /**
     * The value for the not_in_use field.
     *
     * @var        int
     */
    protected $not_in_use;

    /**
     * The value for the min_level field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $min_level;

    /**
     * The value for the unit_price_4 field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $unit_price_4;

    /**
     * The value for the unit_price_5 field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $unit_price_5;

    /**
     * The value for the unit_price_6 field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $unit_price_6;

    /**
     * The value for the unit_price_7 field.
     *
     * @var        int
     */
    protected $unit_price_7;

    /**
     * The value for the unit_price_8 field.
     *
     * @var        int
     */
    protected $unit_price_8;

    /**
     * The value for the unit_price_9 field.
     *
     * @var        int
     */
    protected $unit_price_9;

    /**
     * The value for the unit_price_10 field.
     *
     * @var        int
     */
    protected $unit_price_10;

    /**
     * The value for the unit_price_11 field.
     *
     * @var        int
     */
    protected $unit_price_11;

    /**
     * The value for the unit_cost field.
     *
     * @var        string
     */
    protected $unit_cost;

    /**
     * The value for the nhif_item_code field.
     *
     * @var        string
     */
    protected $nhif_item_code;

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
        $this->item_number = '';
        $this->is_pediatric = 0;
        $this->is_adult = 0;
        $this->is_other = 0;
        $this->is_consumable = 0;
        $this->is_labtest = 0;
        $this->item_description = '';
        $this->item_full_description = '';
        $this->unit_price = 0.0;
        $this->unit_price_1 = 0.0;
        $this->unit_price_2 = 0.0;
        $this->unit_price_3 = 0.0;
        $this->purchasing_class = '';
        $this->min_level = 0;
        $this->unit_price_4 = 0.0;
        $this->unit_price_5 = 0.0;
        $this->unit_price_6 = 0.0;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTzDrugsandservices object.
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
     * Compares this with another <code>CareTzDrugsandservices</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTzDrugsandservices</code>, delegates to
     * <code>equals(CareTzDrugsandservices)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTzDrugsandservices The current object, for fluid interface
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
     * Get the [item_id] column value.
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Get the [item_number] column value.
     *
     * @return string
     */
    public function getItemNumber()
    {
        return $this->item_number;
    }

    /**
     * Get the [partcode] column value.
     *
     * @return string
     */
    public function getPartcode()
    {
        return $this->partcode;
    }

    /**
     * Get the [is_pediatric] column value.
     *
     * @return int
     */
    public function getIsPediatric()
    {
        return $this->is_pediatric;
    }

    /**
     * Get the [is_adult] column value.
     *
     * @return int
     */
    public function getIsAdult()
    {
        return $this->is_adult;
    }

    /**
     * Get the [is_other] column value.
     *
     * @return int
     */
    public function getIsOther()
    {
        return $this->is_other;
    }

    /**
     * Get the [is_consumable] column value.
     *
     * @return int
     */
    public function getIsConsumable()
    {
        return $this->is_consumable;
    }

    /**
     * Get the [is_labtest] column value.
     *
     * @return int
     */
    public function getIsLabtest()
    {
        return $this->is_labtest;
    }

    /**
     * Get the [is_radio_test] column value.
     *
     * @return int
     */
    public function getIsRadioTest()
    {
        return $this->is_radio_test;
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
     * Get the [item_full_description] column value.
     *
     * @return string
     */
    public function getItemFullDescription()
    {
        return $this->item_full_description;
    }

    /**
     * Get the [unit_price] column value.
     *
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * Get the [unit_price_1] column value.
     *
     * @return double
     */
    public function getUnitPrice1()
    {
        return $this->unit_price_1;
    }

    /**
     * Get the [unit_price_2] column value.
     *
     * @return double
     */
    public function getUnitPrice2()
    {
        return $this->unit_price_2;
    }

    /**
     * Get the [unit_price_3] column value.
     *
     * @return double
     */
    public function getUnitPrice3()
    {
        return $this->unit_price_3;
    }

    /**
     * Get the [purchasing_class] column value.
     *
     * @return string
     */
    public function getPurchasingClass()
    {
        return $this->purchasing_class;
    }

    /**
     * Get the [sub_class] column value.
     *
     * @return string
     */
    public function getSubClass()
    {
        return $this->sub_class;
    }

    /**
     * Get the [not_in_use] column value.
     *
     * @return int
     */
    public function getNotInUse()
    {
        return $this->not_in_use;
    }

    /**
     * Get the [min_level] column value.
     *
     * @return int
     */
    public function getMinLevel()
    {
        return $this->min_level;
    }

    /**
     * Get the [unit_price_4] column value.
     *
     * @return double
     */
    public function getUnitPrice4()
    {
        return $this->unit_price_4;
    }

    /**
     * Get the [unit_price_5] column value.
     *
     * @return double
     */
    public function getUnitPrice5()
    {
        return $this->unit_price_5;
    }

    /**
     * Get the [unit_price_6] column value.
     *
     * @return double
     */
    public function getUnitPrice6()
    {
        return $this->unit_price_6;
    }

    /**
     * Get the [unit_price_7] column value.
     *
     * @return int
     */
    public function getUnitPrice7()
    {
        return $this->unit_price_7;
    }

    /**
     * Get the [unit_price_8] column value.
     *
     * @return int
     */
    public function getUnitPrice8()
    {
        return $this->unit_price_8;
    }

    /**
     * Get the [unit_price_9] column value.
     *
     * @return int
     */
    public function getUnitPrice9()
    {
        return $this->unit_price_9;
    }

    /**
     * Get the [unit_price_10] column value.
     *
     * @return int
     */
    public function getUnitPrice10()
    {
        return $this->unit_price_10;
    }

    /**
     * Get the [unit_price_11] column value.
     *
     * @return int
     */
    public function getUnitPrice11()
    {
        return $this->unit_price_11;
    }

    /**
     * Get the [unit_cost] column value.
     *
     * @return string
     */
    public function getUnitCost()
    {
        return $this->unit_cost;
    }

    /**
     * Get the [nhif_item_code] column value.
     *
     * @return string
     */
    public function getNhifItemCode()
    {
        return $this->nhif_item_code;
    }

    /**
     * Set the value of [item_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setItemId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->item_id !== $v) {
            $this->item_id = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_ITEM_ID] = true;
        }

        return $this;
    } // setItemId()

    /**
     * Set the value of [item_number] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setItemNumber($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->item_number !== $v) {
            $this->item_number = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_ITEM_NUMBER] = true;
        }

        return $this;
    } // setItemNumber()

    /**
     * Set the value of [partcode] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setPartcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->partcode !== $v) {
            $this->partcode = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_PARTCODE] = true;
        }

        return $this;
    } // setPartcode()

    /**
     * Set the value of [is_pediatric] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setIsPediatric($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_pediatric !== $v) {
            $this->is_pediatric = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_IS_PEDIATRIC] = true;
        }

        return $this;
    } // setIsPediatric()

    /**
     * Set the value of [is_adult] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setIsAdult($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_adult !== $v) {
            $this->is_adult = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_IS_ADULT] = true;
        }

        return $this;
    } // setIsAdult()

    /**
     * Set the value of [is_other] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setIsOther($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_other !== $v) {
            $this->is_other = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_IS_OTHER] = true;
        }

        return $this;
    } // setIsOther()

    /**
     * Set the value of [is_consumable] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setIsConsumable($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_consumable !== $v) {
            $this->is_consumable = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_IS_CONSUMABLE] = true;
        }

        return $this;
    } // setIsConsumable()

    /**
     * Set the value of [is_labtest] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setIsLabtest($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_labtest !== $v) {
            $this->is_labtest = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_IS_LABTEST] = true;
        }

        return $this;
    } // setIsLabtest()

    /**
     * Set the value of [is_radio_test] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setIsRadioTest($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_radio_test !== $v) {
            $this->is_radio_test = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_IS_RADIO_TEST] = true;
        }

        return $this;
    } // setIsRadioTest()

    /**
     * Set the value of [item_description] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setItemDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->item_description !== $v) {
            $this->item_description = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_ITEM_DESCRIPTION] = true;
        }

        return $this;
    } // setItemDescription()

    /**
     * Set the value of [item_full_description] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setItemFullDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->item_full_description !== $v) {
            $this->item_full_description = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_ITEM_FULL_DESCRIPTION] = true;
        }

        return $this;
    } // setItemFullDescription()

    /**
     * Set the value of [unit_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->unit_price !== $v) {
            $this->unit_price = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE] = true;
        }

        return $this;
    } // setUnitPrice()

    /**
     * Set the value of [unit_price_1] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice1($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->unit_price_1 !== $v) {
            $this->unit_price_1 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_1] = true;
        }

        return $this;
    } // setUnitPrice1()

    /**
     * Set the value of [unit_price_2] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice2($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->unit_price_2 !== $v) {
            $this->unit_price_2 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_2] = true;
        }

        return $this;
    } // setUnitPrice2()

    /**
     * Set the value of [unit_price_3] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice3($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->unit_price_3 !== $v) {
            $this->unit_price_3 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_3] = true;
        }

        return $this;
    } // setUnitPrice3()

    /**
     * Set the value of [purchasing_class] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setPurchasingClass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->purchasing_class !== $v) {
            $this->purchasing_class = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_PURCHASING_CLASS] = true;
        }

        return $this;
    } // setPurchasingClass()

    /**
     * Set the value of [sub_class] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setSubClass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sub_class !== $v) {
            $this->sub_class = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_SUB_CLASS] = true;
        }

        return $this;
    } // setSubClass()

    /**
     * Set the value of [not_in_use] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setNotInUse($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->not_in_use !== $v) {
            $this->not_in_use = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_NOT_IN_USE] = true;
        }

        return $this;
    } // setNotInUse()

    /**
     * Set the value of [min_level] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setMinLevel($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->min_level !== $v) {
            $this->min_level = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_MIN_LEVEL] = true;
        }

        return $this;
    } // setMinLevel()

    /**
     * Set the value of [unit_price_4] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice4($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->unit_price_4 !== $v) {
            $this->unit_price_4 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_4] = true;
        }

        return $this;
    } // setUnitPrice4()

    /**
     * Set the value of [unit_price_5] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice5($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->unit_price_5 !== $v) {
            $this->unit_price_5 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_5] = true;
        }

        return $this;
    } // setUnitPrice5()

    /**
     * Set the value of [unit_price_6] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice6($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->unit_price_6 !== $v) {
            $this->unit_price_6 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_6] = true;
        }

        return $this;
    } // setUnitPrice6()

    /**
     * Set the value of [unit_price_7] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice7($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->unit_price_7 !== $v) {
            $this->unit_price_7 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_7] = true;
        }

        return $this;
    } // setUnitPrice7()

    /**
     * Set the value of [unit_price_8] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice8($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->unit_price_8 !== $v) {
            $this->unit_price_8 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_8] = true;
        }

        return $this;
    } // setUnitPrice8()

    /**
     * Set the value of [unit_price_9] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice9($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->unit_price_9 !== $v) {
            $this->unit_price_9 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_9] = true;
        }

        return $this;
    } // setUnitPrice9()

    /**
     * Set the value of [unit_price_10] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice10($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->unit_price_10 !== $v) {
            $this->unit_price_10 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_10] = true;
        }

        return $this;
    } // setUnitPrice10()

    /**
     * Set the value of [unit_price_11] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitPrice11($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->unit_price_11 !== $v) {
            $this->unit_price_11 = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_11] = true;
        }

        return $this;
    } // setUnitPrice11()

    /**
     * Set the value of [unit_cost] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setUnitCost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->unit_cost !== $v) {
            $this->unit_cost = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_UNIT_COST] = true;
        }

        return $this;
    } // setUnitCost()

    /**
     * Set the value of [nhif_item_code] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object (for fluent API support)
     */
    public function setNhifItemCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nhif_item_code !== $v) {
            $this->nhif_item_code = $v;
            $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_NHIF_ITEM_CODE] = true;
        }

        return $this;
    } // setNhifItemCode()

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
            if ($this->item_number !== '') {
                return false;
            }

            if ($this->is_pediatric !== 0) {
                return false;
            }

            if ($this->is_adult !== 0) {
                return false;
            }

            if ($this->is_other !== 0) {
                return false;
            }

            if ($this->is_consumable !== 0) {
                return false;
            }

            if ($this->is_labtest !== 0) {
                return false;
            }

            if ($this->item_description !== '') {
                return false;
            }

            if ($this->item_full_description !== '') {
                return false;
            }

            if ($this->unit_price !== 0.0) {
                return false;
            }

            if ($this->unit_price_1 !== 0.0) {
                return false;
            }

            if ($this->unit_price_2 !== 0.0) {
                return false;
            }

            if ($this->unit_price_3 !== 0.0) {
                return false;
            }

            if ($this->purchasing_class !== '') {
                return false;
            }

            if ($this->min_level !== 0) {
                return false;
            }

            if ($this->unit_price_4 !== 0.0) {
                return false;
            }

            if ($this->unit_price_5 !== 0.0) {
                return false;
            }

            if ($this->unit_price_6 !== 0.0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('ItemId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->item_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('ItemNumber', TableMap::TYPE_PHPNAME, $indexType)];
            $this->item_number = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('Partcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->partcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('IsPediatric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_pediatric = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('IsAdult', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_adult = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('IsOther', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_other = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('IsConsumable', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_consumable = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('IsLabtest', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_labtest = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('IsRadioTest', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_radio_test = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('ItemDescription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->item_description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('ItemFullDescription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->item_full_description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_1 = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_2 = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_3 = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('PurchasingClass', TableMap::TYPE_PHPNAME, $indexType)];
            $this->purchasing_class = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('SubClass', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sub_class = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('NotInUse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->not_in_use = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('MinLevel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->min_level = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_4 = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_5 = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_6 = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_7 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_8 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_9 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_10 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitPrice11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_price_11 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('UnitCost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->unit_cost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareTzDrugsandservicesTableMap::translateFieldName('NhifItemCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nhif_item_code = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 29; // 29 = CareTzDrugsandservicesTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTzDrugsandservices'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTzDrugsandservicesTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTzDrugsandservicesQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTzDrugsandservices::setDeleted()
     * @see CareTzDrugsandservices::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTzDrugsandservicesQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesTableMap::DATABASE_NAME);
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
                CareTzDrugsandservicesTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTzDrugsandservicesTableMap::COL_ITEM_ID] = true;
        if (null !== $this->item_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTzDrugsandservicesTableMap::COL_ITEM_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'item_id';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_ITEM_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'item_number';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_PARTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'partcode';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_PEDIATRIC)) {
            $modifiedColumns[':p' . $index++]  = 'is_pediatric';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_ADULT)) {
            $modifiedColumns[':p' . $index++]  = 'is_adult';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_OTHER)) {
            $modifiedColumns[':p' . $index++]  = 'is_other';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_CONSUMABLE)) {
            $modifiedColumns[':p' . $index++]  = 'is_consumable';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_LABTEST)) {
            $modifiedColumns[':p' . $index++]  = 'is_labtest';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_RADIO_TEST)) {
            $modifiedColumns[':p' . $index++]  = 'is_radio_test';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_ITEM_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'item_description';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_ITEM_FULL_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'item_full_description';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_1)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_1';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_2)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_2';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_3)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_3';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_PURCHASING_CLASS)) {
            $modifiedColumns[':p' . $index++]  = 'purchasing_class';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_SUB_CLASS)) {
            $modifiedColumns[':p' . $index++]  = 'sub_class';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_NOT_IN_USE)) {
            $modifiedColumns[':p' . $index++]  = 'not_in_use';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_MIN_LEVEL)) {
            $modifiedColumns[':p' . $index++]  = 'min_level';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_4)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_4';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_5)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_5';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_6)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_6';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_7)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_7';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_8)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_8';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_9)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_9';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_10)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_10';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_11)) {
            $modifiedColumns[':p' . $index++]  = 'unit_price_11';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_COST)) {
            $modifiedColumns[':p' . $index++]  = 'unit_cost';
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_NHIF_ITEM_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'nhif_item_code';
        }

        $sql = sprintf(
            'INSERT INTO care_tz_drugsandservices (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'item_id':
                        $stmt->bindValue($identifier, $this->item_id, PDO::PARAM_INT);
                        break;
                    case 'item_number':
                        $stmt->bindValue($identifier, $this->item_number, PDO::PARAM_STR);
                        break;
                    case 'partcode':
                        $stmt->bindValue($identifier, $this->partcode, PDO::PARAM_STR);
                        break;
                    case 'is_pediatric':
                        $stmt->bindValue($identifier, $this->is_pediatric, PDO::PARAM_INT);
                        break;
                    case 'is_adult':
                        $stmt->bindValue($identifier, $this->is_adult, PDO::PARAM_INT);
                        break;
                    case 'is_other':
                        $stmt->bindValue($identifier, $this->is_other, PDO::PARAM_INT);
                        break;
                    case 'is_consumable':
                        $stmt->bindValue($identifier, $this->is_consumable, PDO::PARAM_INT);
                        break;
                    case 'is_labtest':
                        $stmt->bindValue($identifier, $this->is_labtest, PDO::PARAM_INT);
                        break;
                    case 'is_radio_test':
                        $stmt->bindValue($identifier, $this->is_radio_test, PDO::PARAM_INT);
                        break;
                    case 'item_description':
                        $stmt->bindValue($identifier, $this->item_description, PDO::PARAM_STR);
                        break;
                    case 'item_full_description':
                        $stmt->bindValue($identifier, $this->item_full_description, PDO::PARAM_STR);
                        break;
                    case 'unit_price':
                        $stmt->bindValue($identifier, $this->unit_price, PDO::PARAM_STR);
                        break;
                    case 'unit_price_1':
                        $stmt->bindValue($identifier, $this->unit_price_1, PDO::PARAM_STR);
                        break;
                    case 'unit_price_2':
                        $stmt->bindValue($identifier, $this->unit_price_2, PDO::PARAM_STR);
                        break;
                    case 'unit_price_3':
                        $stmt->bindValue($identifier, $this->unit_price_3, PDO::PARAM_STR);
                        break;
                    case 'purchasing_class':
                        $stmt->bindValue($identifier, $this->purchasing_class, PDO::PARAM_STR);
                        break;
                    case 'sub_class':
                        $stmt->bindValue($identifier, $this->sub_class, PDO::PARAM_STR);
                        break;
                    case 'not_in_use':
                        $stmt->bindValue($identifier, $this->not_in_use, PDO::PARAM_INT);
                        break;
                    case 'min_level':
                        $stmt->bindValue($identifier, $this->min_level, PDO::PARAM_INT);
                        break;
                    case 'unit_price_4':
                        $stmt->bindValue($identifier, $this->unit_price_4, PDO::PARAM_STR);
                        break;
                    case 'unit_price_5':
                        $stmt->bindValue($identifier, $this->unit_price_5, PDO::PARAM_STR);
                        break;
                    case 'unit_price_6':
                        $stmt->bindValue($identifier, $this->unit_price_6, PDO::PARAM_STR);
                        break;
                    case 'unit_price_7':
                        $stmt->bindValue($identifier, $this->unit_price_7, PDO::PARAM_INT);
                        break;
                    case 'unit_price_8':
                        $stmt->bindValue($identifier, $this->unit_price_8, PDO::PARAM_INT);
                        break;
                    case 'unit_price_9':
                        $stmt->bindValue($identifier, $this->unit_price_9, PDO::PARAM_INT);
                        break;
                    case 'unit_price_10':
                        $stmt->bindValue($identifier, $this->unit_price_10, PDO::PARAM_INT);
                        break;
                    case 'unit_price_11':
                        $stmt->bindValue($identifier, $this->unit_price_11, PDO::PARAM_INT);
                        break;
                    case 'unit_cost':
                        $stmt->bindValue($identifier, $this->unit_cost, PDO::PARAM_STR);
                        break;
                    case 'nhif_item_code':
                        $stmt->bindValue($identifier, $this->nhif_item_code, PDO::PARAM_STR);
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
        $this->setItemId($pk);

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
        $pos = CareTzDrugsandservicesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getItemId();
                break;
            case 1:
                return $this->getItemNumber();
                break;
            case 2:
                return $this->getPartcode();
                break;
            case 3:
                return $this->getIsPediatric();
                break;
            case 4:
                return $this->getIsAdult();
                break;
            case 5:
                return $this->getIsOther();
                break;
            case 6:
                return $this->getIsConsumable();
                break;
            case 7:
                return $this->getIsLabtest();
                break;
            case 8:
                return $this->getIsRadioTest();
                break;
            case 9:
                return $this->getItemDescription();
                break;
            case 10:
                return $this->getItemFullDescription();
                break;
            case 11:
                return $this->getUnitPrice();
                break;
            case 12:
                return $this->getUnitPrice1();
                break;
            case 13:
                return $this->getUnitPrice2();
                break;
            case 14:
                return $this->getUnitPrice3();
                break;
            case 15:
                return $this->getPurchasingClass();
                break;
            case 16:
                return $this->getSubClass();
                break;
            case 17:
                return $this->getNotInUse();
                break;
            case 18:
                return $this->getMinLevel();
                break;
            case 19:
                return $this->getUnitPrice4();
                break;
            case 20:
                return $this->getUnitPrice5();
                break;
            case 21:
                return $this->getUnitPrice6();
                break;
            case 22:
                return $this->getUnitPrice7();
                break;
            case 23:
                return $this->getUnitPrice8();
                break;
            case 24:
                return $this->getUnitPrice9();
                break;
            case 25:
                return $this->getUnitPrice10();
                break;
            case 26:
                return $this->getUnitPrice11();
                break;
            case 27:
                return $this->getUnitCost();
                break;
            case 28:
                return $this->getNhifItemCode();
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

        if (isset($alreadyDumpedObjects['CareTzDrugsandservices'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTzDrugsandservices'][$this->hashCode()] = true;
        $keys = CareTzDrugsandservicesTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getItemId(),
            $keys[1] => $this->getItemNumber(),
            $keys[2] => $this->getPartcode(),
            $keys[3] => $this->getIsPediatric(),
            $keys[4] => $this->getIsAdult(),
            $keys[5] => $this->getIsOther(),
            $keys[6] => $this->getIsConsumable(),
            $keys[7] => $this->getIsLabtest(),
            $keys[8] => $this->getIsRadioTest(),
            $keys[9] => $this->getItemDescription(),
            $keys[10] => $this->getItemFullDescription(),
            $keys[11] => $this->getUnitPrice(),
            $keys[12] => $this->getUnitPrice1(),
            $keys[13] => $this->getUnitPrice2(),
            $keys[14] => $this->getUnitPrice3(),
            $keys[15] => $this->getPurchasingClass(),
            $keys[16] => $this->getSubClass(),
            $keys[17] => $this->getNotInUse(),
            $keys[18] => $this->getMinLevel(),
            $keys[19] => $this->getUnitPrice4(),
            $keys[20] => $this->getUnitPrice5(),
            $keys[21] => $this->getUnitPrice6(),
            $keys[22] => $this->getUnitPrice7(),
            $keys[23] => $this->getUnitPrice8(),
            $keys[24] => $this->getUnitPrice9(),
            $keys[25] => $this->getUnitPrice10(),
            $keys[26] => $this->getUnitPrice11(),
            $keys[27] => $this->getUnitCost(),
            $keys[28] => $this->getNhifItemCode(),
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
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTzDrugsandservicesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setItemId($value);
                break;
            case 1:
                $this->setItemNumber($value);
                break;
            case 2:
                $this->setPartcode($value);
                break;
            case 3:
                $this->setIsPediatric($value);
                break;
            case 4:
                $this->setIsAdult($value);
                break;
            case 5:
                $this->setIsOther($value);
                break;
            case 6:
                $this->setIsConsumable($value);
                break;
            case 7:
                $this->setIsLabtest($value);
                break;
            case 8:
                $this->setIsRadioTest($value);
                break;
            case 9:
                $this->setItemDescription($value);
                break;
            case 10:
                $this->setItemFullDescription($value);
                break;
            case 11:
                $this->setUnitPrice($value);
                break;
            case 12:
                $this->setUnitPrice1($value);
                break;
            case 13:
                $this->setUnitPrice2($value);
                break;
            case 14:
                $this->setUnitPrice3($value);
                break;
            case 15:
                $this->setPurchasingClass($value);
                break;
            case 16:
                $this->setSubClass($value);
                break;
            case 17:
                $this->setNotInUse($value);
                break;
            case 18:
                $this->setMinLevel($value);
                break;
            case 19:
                $this->setUnitPrice4($value);
                break;
            case 20:
                $this->setUnitPrice5($value);
                break;
            case 21:
                $this->setUnitPrice6($value);
                break;
            case 22:
                $this->setUnitPrice7($value);
                break;
            case 23:
                $this->setUnitPrice8($value);
                break;
            case 24:
                $this->setUnitPrice9($value);
                break;
            case 25:
                $this->setUnitPrice10($value);
                break;
            case 26:
                $this->setUnitPrice11($value);
                break;
            case 27:
                $this->setUnitCost($value);
                break;
            case 28:
                $this->setNhifItemCode($value);
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
        $keys = CareTzDrugsandservicesTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setItemId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setItemNumber($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPartcode($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIsPediatric($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIsAdult($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIsOther($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIsConsumable($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIsLabtest($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIsRadioTest($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setItemDescription($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setItemFullDescription($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setUnitPrice($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setUnitPrice1($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setUnitPrice2($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setUnitPrice3($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setPurchasingClass($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setSubClass($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setNotInUse($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setMinLevel($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setUnitPrice4($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setUnitPrice5($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setUnitPrice6($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setUnitPrice7($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setUnitPrice8($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setUnitPrice9($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setUnitPrice10($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setUnitPrice11($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setUnitCost($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setNhifItemCode($arr[$keys[28]]);
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
     * @return $this|\CareMd\CareMd\CareTzDrugsandservices The current object, for fluid interface
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
        $criteria = new Criteria(CareTzDrugsandservicesTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_ITEM_ID)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_ITEM_ID, $this->item_id);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_ITEM_NUMBER)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_ITEM_NUMBER, $this->item_number);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_PARTCODE)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_PARTCODE, $this->partcode);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_PEDIATRIC)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_IS_PEDIATRIC, $this->is_pediatric);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_ADULT)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_IS_ADULT, $this->is_adult);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_OTHER)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_IS_OTHER, $this->is_other);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_CONSUMABLE)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_IS_CONSUMABLE, $this->is_consumable);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_LABTEST)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_IS_LABTEST, $this->is_labtest);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_IS_RADIO_TEST)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_IS_RADIO_TEST, $this->is_radio_test);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_ITEM_DESCRIPTION)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_ITEM_DESCRIPTION, $this->item_description);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_ITEM_FULL_DESCRIPTION)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_ITEM_FULL_DESCRIPTION, $this->item_full_description);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE, $this->unit_price);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_1)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_1, $this->unit_price_1);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_2)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_2, $this->unit_price_2);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_3)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_3, $this->unit_price_3);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_PURCHASING_CLASS)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_PURCHASING_CLASS, $this->purchasing_class);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_SUB_CLASS)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_SUB_CLASS, $this->sub_class);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_NOT_IN_USE)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_NOT_IN_USE, $this->not_in_use);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_MIN_LEVEL)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_MIN_LEVEL, $this->min_level);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_4)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_4, $this->unit_price_4);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_5)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_5, $this->unit_price_5);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_6)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_6, $this->unit_price_6);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_7)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_7, $this->unit_price_7);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_8)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_8, $this->unit_price_8);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_9)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_9, $this->unit_price_9);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_10)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_10, $this->unit_price_10);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_11)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_11, $this->unit_price_11);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_UNIT_COST)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_UNIT_COST, $this->unit_cost);
        }
        if ($this->isColumnModified(CareTzDrugsandservicesTableMap::COL_NHIF_ITEM_CODE)) {
            $criteria->add(CareTzDrugsandservicesTableMap::COL_NHIF_ITEM_CODE, $this->nhif_item_code);
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
        $criteria = ChildCareTzDrugsandservicesQuery::create();
        $criteria->add(CareTzDrugsandservicesTableMap::COL_ITEM_ID, $this->item_id);

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
        $validPk = null !== $this->getItemId();

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
        return $this->getItemId();
    }

    /**
     * Generic method to set the primary key (item_id column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setItemId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getItemId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTzDrugsandservices (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setItemNumber($this->getItemNumber());
        $copyObj->setPartcode($this->getPartcode());
        $copyObj->setIsPediatric($this->getIsPediatric());
        $copyObj->setIsAdult($this->getIsAdult());
        $copyObj->setIsOther($this->getIsOther());
        $copyObj->setIsConsumable($this->getIsConsumable());
        $copyObj->setIsLabtest($this->getIsLabtest());
        $copyObj->setIsRadioTest($this->getIsRadioTest());
        $copyObj->setItemDescription($this->getItemDescription());
        $copyObj->setItemFullDescription($this->getItemFullDescription());
        $copyObj->setUnitPrice($this->getUnitPrice());
        $copyObj->setUnitPrice1($this->getUnitPrice1());
        $copyObj->setUnitPrice2($this->getUnitPrice2());
        $copyObj->setUnitPrice3($this->getUnitPrice3());
        $copyObj->setPurchasingClass($this->getPurchasingClass());
        $copyObj->setSubClass($this->getSubClass());
        $copyObj->setNotInUse($this->getNotInUse());
        $copyObj->setMinLevel($this->getMinLevel());
        $copyObj->setUnitPrice4($this->getUnitPrice4());
        $copyObj->setUnitPrice5($this->getUnitPrice5());
        $copyObj->setUnitPrice6($this->getUnitPrice6());
        $copyObj->setUnitPrice7($this->getUnitPrice7());
        $copyObj->setUnitPrice8($this->getUnitPrice8());
        $copyObj->setUnitPrice9($this->getUnitPrice9());
        $copyObj->setUnitPrice10($this->getUnitPrice10());
        $copyObj->setUnitPrice11($this->getUnitPrice11());
        $copyObj->setUnitCost($this->getUnitCost());
        $copyObj->setNhifItemCode($this->getNhifItemCode());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setItemId(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareTzDrugsandservices Clone of current object.
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
        $this->item_id = null;
        $this->item_number = null;
        $this->partcode = null;
        $this->is_pediatric = null;
        $this->is_adult = null;
        $this->is_other = null;
        $this->is_consumable = null;
        $this->is_labtest = null;
        $this->is_radio_test = null;
        $this->item_description = null;
        $this->item_full_description = null;
        $this->unit_price = null;
        $this->unit_price_1 = null;
        $this->unit_price_2 = null;
        $this->unit_price_3 = null;
        $this->purchasing_class = null;
        $this->sub_class = null;
        $this->not_in_use = null;
        $this->min_level = null;
        $this->unit_price_4 = null;
        $this->unit_price_5 = null;
        $this->unit_price_6 = null;
        $this->unit_price_7 = null;
        $this->unit_price_8 = null;
        $this->unit_price_9 = null;
        $this->unit_price_10 = null;
        $this->unit_price_11 = null;
        $this->unit_cost = null;
        $this->nhif_item_code = null;
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
        return (string) $this->exportTo(CareTzDrugsandservicesTableMap::DEFAULT_STRING_FORMAT);
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
