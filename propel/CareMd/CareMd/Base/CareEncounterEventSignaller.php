<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterEventSignallerQuery as ChildCareEncounterEventSignallerQuery;
use CareMd\CareMd\Map\CareEncounterEventSignallerTableMap;
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
 * Base class that represents a row from the 'care_encounter_event_signaller' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareEncounterEventSignaller implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareEncounterEventSignallerTableMap';


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
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

    /**
     * The value for the yellow field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $yellow;

    /**
     * The value for the black field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $black;

    /**
     * The value for the blue_pale field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $blue_pale;

    /**
     * The value for the brown field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $brown;

    /**
     * The value for the pink field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $pink;

    /**
     * The value for the yellow_pale field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $yellow_pale;

    /**
     * The value for the red field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $red;

    /**
     * The value for the green_pale field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $green_pale;

    /**
     * The value for the violet field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $violet;

    /**
     * The value for the blue field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $blue;

    /**
     * The value for the biege field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $biege;

    /**
     * The value for the orange field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $orange;

    /**
     * The value for the green_1 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $green_1;

    /**
     * The value for the green_2 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $green_2;

    /**
     * The value for the green_3 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $green_3;

    /**
     * The value for the green_4 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $green_4;

    /**
     * The value for the green_5 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $green_5;

    /**
     * The value for the green_6 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $green_6;

    /**
     * The value for the green_7 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $green_7;

    /**
     * The value for the rose_1 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_1;

    /**
     * The value for the rose_2 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_2;

    /**
     * The value for the rose_3 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_3;

    /**
     * The value for the rose_4 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_4;

    /**
     * The value for the rose_5 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_5;

    /**
     * The value for the rose_6 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_6;

    /**
     * The value for the rose_7 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_7;

    /**
     * The value for the rose_8 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_8;

    /**
     * The value for the rose_9 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_9;

    /**
     * The value for the rose_10 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_10;

    /**
     * The value for the rose_11 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_11;

    /**
     * The value for the rose_12 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_12;

    /**
     * The value for the rose_13 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_13;

    /**
     * The value for the rose_14 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_14;

    /**
     * The value for the rose_15 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_15;

    /**
     * The value for the rose_16 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_16;

    /**
     * The value for the rose_17 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_17;

    /**
     * The value for the rose_18 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_18;

    /**
     * The value for the rose_19 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_19;

    /**
     * The value for the rose_20 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_20;

    /**
     * The value for the rose_21 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_21;

    /**
     * The value for the rose_22 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_22;

    /**
     * The value for the rose_23 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_23;

    /**
     * The value for the rose_24 field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rose_24;

    /**
     * The value for the maroon field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $maroon;

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
        $this->encounter_nr = 0;
        $this->yellow = false;
        $this->black = false;
        $this->blue_pale = false;
        $this->brown = false;
        $this->pink = false;
        $this->yellow_pale = false;
        $this->red = false;
        $this->green_pale = false;
        $this->violet = false;
        $this->blue = false;
        $this->biege = false;
        $this->orange = false;
        $this->green_1 = false;
        $this->green_2 = false;
        $this->green_3 = false;
        $this->green_4 = false;
        $this->green_5 = false;
        $this->green_6 = false;
        $this->green_7 = false;
        $this->rose_1 = false;
        $this->rose_2 = false;
        $this->rose_3 = false;
        $this->rose_4 = false;
        $this->rose_5 = false;
        $this->rose_6 = false;
        $this->rose_7 = false;
        $this->rose_8 = false;
        $this->rose_9 = false;
        $this->rose_10 = false;
        $this->rose_11 = false;
        $this->rose_12 = false;
        $this->rose_13 = false;
        $this->rose_14 = false;
        $this->rose_15 = false;
        $this->rose_16 = false;
        $this->rose_17 = false;
        $this->rose_18 = false;
        $this->rose_19 = false;
        $this->rose_20 = false;
        $this->rose_21 = false;
        $this->rose_22 = false;
        $this->rose_23 = false;
        $this->rose_24 = false;
        $this->maroon = false;
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareEncounterEventSignaller object.
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
     * Compares this with another <code>CareEncounterEventSignaller</code> instance.  If
     * <code>obj</code> is an instance of <code>CareEncounterEventSignaller</code>, delegates to
     * <code>equals(CareEncounterEventSignaller)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareEncounterEventSignaller The current object, for fluid interface
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
     * Get the [encounter_nr] column value.
     *
     * @return int
     */
    public function getEncounterNr()
    {
        return $this->encounter_nr;
    }

    /**
     * Get the [yellow] column value.
     *
     * @return boolean
     */
    public function getYellow()
    {
        return $this->yellow;
    }

    /**
     * Get the [yellow] column value.
     *
     * @return boolean
     */
    public function isYellow()
    {
        return $this->getYellow();
    }

    /**
     * Get the [black] column value.
     *
     * @return boolean
     */
    public function getBlack()
    {
        return $this->black;
    }

    /**
     * Get the [black] column value.
     *
     * @return boolean
     */
    public function isBlack()
    {
        return $this->getBlack();
    }

    /**
     * Get the [blue_pale] column value.
     *
     * @return boolean
     */
    public function getBluePale()
    {
        return $this->blue_pale;
    }

    /**
     * Get the [blue_pale] column value.
     *
     * @return boolean
     */
    public function isBluePale()
    {
        return $this->getBluePale();
    }

    /**
     * Get the [brown] column value.
     *
     * @return boolean
     */
    public function getBrown()
    {
        return $this->brown;
    }

    /**
     * Get the [brown] column value.
     *
     * @return boolean
     */
    public function isBrown()
    {
        return $this->getBrown();
    }

    /**
     * Get the [pink] column value.
     *
     * @return boolean
     */
    public function getPink()
    {
        return $this->pink;
    }

    /**
     * Get the [pink] column value.
     *
     * @return boolean
     */
    public function isPink()
    {
        return $this->getPink();
    }

    /**
     * Get the [yellow_pale] column value.
     *
     * @return boolean
     */
    public function getYellowPale()
    {
        return $this->yellow_pale;
    }

    /**
     * Get the [yellow_pale] column value.
     *
     * @return boolean
     */
    public function isYellowPale()
    {
        return $this->getYellowPale();
    }

    /**
     * Get the [red] column value.
     *
     * @return boolean
     */
    public function getRed()
    {
        return $this->red;
    }

    /**
     * Get the [red] column value.
     *
     * @return boolean
     */
    public function isRed()
    {
        return $this->getRed();
    }

    /**
     * Get the [green_pale] column value.
     *
     * @return boolean
     */
    public function getGreenPale()
    {
        return $this->green_pale;
    }

    /**
     * Get the [green_pale] column value.
     *
     * @return boolean
     */
    public function isGreenPale()
    {
        return $this->getGreenPale();
    }

    /**
     * Get the [violet] column value.
     *
     * @return boolean
     */
    public function getViolet()
    {
        return $this->violet;
    }

    /**
     * Get the [violet] column value.
     *
     * @return boolean
     */
    public function isViolet()
    {
        return $this->getViolet();
    }

    /**
     * Get the [blue] column value.
     *
     * @return boolean
     */
    public function getBlue()
    {
        return $this->blue;
    }

    /**
     * Get the [blue] column value.
     *
     * @return boolean
     */
    public function isBlue()
    {
        return $this->getBlue();
    }

    /**
     * Get the [biege] column value.
     *
     * @return boolean
     */
    public function getBiege()
    {
        return $this->biege;
    }

    /**
     * Get the [biege] column value.
     *
     * @return boolean
     */
    public function isBiege()
    {
        return $this->getBiege();
    }

    /**
     * Get the [orange] column value.
     *
     * @return boolean
     */
    public function getOrange()
    {
        return $this->orange;
    }

    /**
     * Get the [orange] column value.
     *
     * @return boolean
     */
    public function isOrange()
    {
        return $this->getOrange();
    }

    /**
     * Get the [green_1] column value.
     *
     * @return boolean
     */
    public function getGreen1()
    {
        return $this->green_1;
    }

    /**
     * Get the [green_1] column value.
     *
     * @return boolean
     */
    public function isGreen1()
    {
        return $this->getGreen1();
    }

    /**
     * Get the [green_2] column value.
     *
     * @return boolean
     */
    public function getGreen2()
    {
        return $this->green_2;
    }

    /**
     * Get the [green_2] column value.
     *
     * @return boolean
     */
    public function isGreen2()
    {
        return $this->getGreen2();
    }

    /**
     * Get the [green_3] column value.
     *
     * @return boolean
     */
    public function getGreen3()
    {
        return $this->green_3;
    }

    /**
     * Get the [green_3] column value.
     *
     * @return boolean
     */
    public function isGreen3()
    {
        return $this->getGreen3();
    }

    /**
     * Get the [green_4] column value.
     *
     * @return boolean
     */
    public function getGreen4()
    {
        return $this->green_4;
    }

    /**
     * Get the [green_4] column value.
     *
     * @return boolean
     */
    public function isGreen4()
    {
        return $this->getGreen4();
    }

    /**
     * Get the [green_5] column value.
     *
     * @return boolean
     */
    public function getGreen5()
    {
        return $this->green_5;
    }

    /**
     * Get the [green_5] column value.
     *
     * @return boolean
     */
    public function isGreen5()
    {
        return $this->getGreen5();
    }

    /**
     * Get the [green_6] column value.
     *
     * @return boolean
     */
    public function getGreen6()
    {
        return $this->green_6;
    }

    /**
     * Get the [green_6] column value.
     *
     * @return boolean
     */
    public function isGreen6()
    {
        return $this->getGreen6();
    }

    /**
     * Get the [green_7] column value.
     *
     * @return boolean
     */
    public function getGreen7()
    {
        return $this->green_7;
    }

    /**
     * Get the [green_7] column value.
     *
     * @return boolean
     */
    public function isGreen7()
    {
        return $this->getGreen7();
    }

    /**
     * Get the [rose_1] column value.
     *
     * @return boolean
     */
    public function getRose1()
    {
        return $this->rose_1;
    }

    /**
     * Get the [rose_1] column value.
     *
     * @return boolean
     */
    public function isRose1()
    {
        return $this->getRose1();
    }

    /**
     * Get the [rose_2] column value.
     *
     * @return boolean
     */
    public function getRose2()
    {
        return $this->rose_2;
    }

    /**
     * Get the [rose_2] column value.
     *
     * @return boolean
     */
    public function isRose2()
    {
        return $this->getRose2();
    }

    /**
     * Get the [rose_3] column value.
     *
     * @return boolean
     */
    public function getRose3()
    {
        return $this->rose_3;
    }

    /**
     * Get the [rose_3] column value.
     *
     * @return boolean
     */
    public function isRose3()
    {
        return $this->getRose3();
    }

    /**
     * Get the [rose_4] column value.
     *
     * @return boolean
     */
    public function getRose4()
    {
        return $this->rose_4;
    }

    /**
     * Get the [rose_4] column value.
     *
     * @return boolean
     */
    public function isRose4()
    {
        return $this->getRose4();
    }

    /**
     * Get the [rose_5] column value.
     *
     * @return boolean
     */
    public function getRose5()
    {
        return $this->rose_5;
    }

    /**
     * Get the [rose_5] column value.
     *
     * @return boolean
     */
    public function isRose5()
    {
        return $this->getRose5();
    }

    /**
     * Get the [rose_6] column value.
     *
     * @return boolean
     */
    public function getRose6()
    {
        return $this->rose_6;
    }

    /**
     * Get the [rose_6] column value.
     *
     * @return boolean
     */
    public function isRose6()
    {
        return $this->getRose6();
    }

    /**
     * Get the [rose_7] column value.
     *
     * @return boolean
     */
    public function getRose7()
    {
        return $this->rose_7;
    }

    /**
     * Get the [rose_7] column value.
     *
     * @return boolean
     */
    public function isRose7()
    {
        return $this->getRose7();
    }

    /**
     * Get the [rose_8] column value.
     *
     * @return boolean
     */
    public function getRose8()
    {
        return $this->rose_8;
    }

    /**
     * Get the [rose_8] column value.
     *
     * @return boolean
     */
    public function isRose8()
    {
        return $this->getRose8();
    }

    /**
     * Get the [rose_9] column value.
     *
     * @return boolean
     */
    public function getRose9()
    {
        return $this->rose_9;
    }

    /**
     * Get the [rose_9] column value.
     *
     * @return boolean
     */
    public function isRose9()
    {
        return $this->getRose9();
    }

    /**
     * Get the [rose_10] column value.
     *
     * @return boolean
     */
    public function getRose10()
    {
        return $this->rose_10;
    }

    /**
     * Get the [rose_10] column value.
     *
     * @return boolean
     */
    public function isRose10()
    {
        return $this->getRose10();
    }

    /**
     * Get the [rose_11] column value.
     *
     * @return boolean
     */
    public function getRose11()
    {
        return $this->rose_11;
    }

    /**
     * Get the [rose_11] column value.
     *
     * @return boolean
     */
    public function isRose11()
    {
        return $this->getRose11();
    }

    /**
     * Get the [rose_12] column value.
     *
     * @return boolean
     */
    public function getRose12()
    {
        return $this->rose_12;
    }

    /**
     * Get the [rose_12] column value.
     *
     * @return boolean
     */
    public function isRose12()
    {
        return $this->getRose12();
    }

    /**
     * Get the [rose_13] column value.
     *
     * @return boolean
     */
    public function getRose13()
    {
        return $this->rose_13;
    }

    /**
     * Get the [rose_13] column value.
     *
     * @return boolean
     */
    public function isRose13()
    {
        return $this->getRose13();
    }

    /**
     * Get the [rose_14] column value.
     *
     * @return boolean
     */
    public function getRose14()
    {
        return $this->rose_14;
    }

    /**
     * Get the [rose_14] column value.
     *
     * @return boolean
     */
    public function isRose14()
    {
        return $this->getRose14();
    }

    /**
     * Get the [rose_15] column value.
     *
     * @return boolean
     */
    public function getRose15()
    {
        return $this->rose_15;
    }

    /**
     * Get the [rose_15] column value.
     *
     * @return boolean
     */
    public function isRose15()
    {
        return $this->getRose15();
    }

    /**
     * Get the [rose_16] column value.
     *
     * @return boolean
     */
    public function getRose16()
    {
        return $this->rose_16;
    }

    /**
     * Get the [rose_16] column value.
     *
     * @return boolean
     */
    public function isRose16()
    {
        return $this->getRose16();
    }

    /**
     * Get the [rose_17] column value.
     *
     * @return boolean
     */
    public function getRose17()
    {
        return $this->rose_17;
    }

    /**
     * Get the [rose_17] column value.
     *
     * @return boolean
     */
    public function isRose17()
    {
        return $this->getRose17();
    }

    /**
     * Get the [rose_18] column value.
     *
     * @return boolean
     */
    public function getRose18()
    {
        return $this->rose_18;
    }

    /**
     * Get the [rose_18] column value.
     *
     * @return boolean
     */
    public function isRose18()
    {
        return $this->getRose18();
    }

    /**
     * Get the [rose_19] column value.
     *
     * @return boolean
     */
    public function getRose19()
    {
        return $this->rose_19;
    }

    /**
     * Get the [rose_19] column value.
     *
     * @return boolean
     */
    public function isRose19()
    {
        return $this->getRose19();
    }

    /**
     * Get the [rose_20] column value.
     *
     * @return boolean
     */
    public function getRose20()
    {
        return $this->rose_20;
    }

    /**
     * Get the [rose_20] column value.
     *
     * @return boolean
     */
    public function isRose20()
    {
        return $this->getRose20();
    }

    /**
     * Get the [rose_21] column value.
     *
     * @return boolean
     */
    public function getRose21()
    {
        return $this->rose_21;
    }

    /**
     * Get the [rose_21] column value.
     *
     * @return boolean
     */
    public function isRose21()
    {
        return $this->getRose21();
    }

    /**
     * Get the [rose_22] column value.
     *
     * @return boolean
     */
    public function getRose22()
    {
        return $this->rose_22;
    }

    /**
     * Get the [rose_22] column value.
     *
     * @return boolean
     */
    public function isRose22()
    {
        return $this->getRose22();
    }

    /**
     * Get the [rose_23] column value.
     *
     * @return boolean
     */
    public function getRose23()
    {
        return $this->rose_23;
    }

    /**
     * Get the [rose_23] column value.
     *
     * @return boolean
     */
    public function isRose23()
    {
        return $this->getRose23();
    }

    /**
     * Get the [rose_24] column value.
     *
     * @return boolean
     */
    public function getRose24()
    {
        return $this->rose_24;
    }

    /**
     * Get the [rose_24] column value.
     *
     * @return boolean
     */
    public function isRose24()
    {
        return $this->getRose24();
    }

    /**
     * Get the [maroon] column value.
     *
     * @return boolean
     */
    public function getMaroon()
    {
        return $this->maroon;
    }

    /**
     * Get the [maroon] column value.
     *
     * @return boolean
     */
    public function isMaroon()
    {
        return $this->getMaroon();
    }

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Sets the value of the [yellow] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setYellow($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->yellow !== $v) {
            $this->yellow = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_YELLOW] = true;
        }

        return $this;
    } // setYellow()

    /**
     * Sets the value of the [black] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setBlack($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->black !== $v) {
            $this->black = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_BLACK] = true;
        }

        return $this;
    } // setBlack()

    /**
     * Sets the value of the [blue_pale] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setBluePale($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->blue_pale !== $v) {
            $this->blue_pale = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_BLUE_PALE] = true;
        }

        return $this;
    } // setBluePale()

    /**
     * Sets the value of the [brown] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setBrown($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->brown !== $v) {
            $this->brown = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_BROWN] = true;
        }

        return $this;
    } // setBrown()

    /**
     * Sets the value of the [pink] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setPink($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->pink !== $v) {
            $this->pink = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_PINK] = true;
        }

        return $this;
    } // setPink()

    /**
     * Sets the value of the [yellow_pale] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setYellowPale($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->yellow_pale !== $v) {
            $this->yellow_pale = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_YELLOW_PALE] = true;
        }

        return $this;
    } // setYellowPale()

    /**
     * Sets the value of the [red] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRed($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->red !== $v) {
            $this->red = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_RED] = true;
        }

        return $this;
    } // setRed()

    /**
     * Sets the value of the [green_pale] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setGreenPale($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->green_pale !== $v) {
            $this->green_pale = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_GREEN_PALE] = true;
        }

        return $this;
    } // setGreenPale()

    /**
     * Sets the value of the [violet] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setViolet($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->violet !== $v) {
            $this->violet = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_VIOLET] = true;
        }

        return $this;
    } // setViolet()

    /**
     * Sets the value of the [blue] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setBlue($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->blue !== $v) {
            $this->blue = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_BLUE] = true;
        }

        return $this;
    } // setBlue()

    /**
     * Sets the value of the [biege] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setBiege($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->biege !== $v) {
            $this->biege = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_BIEGE] = true;
        }

        return $this;
    } // setBiege()

    /**
     * Sets the value of the [orange] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setOrange($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->orange !== $v) {
            $this->orange = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ORANGE] = true;
        }

        return $this;
    } // setOrange()

    /**
     * Sets the value of the [green_1] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setGreen1($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->green_1 !== $v) {
            $this->green_1 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_GREEN_1] = true;
        }

        return $this;
    } // setGreen1()

    /**
     * Sets the value of the [green_2] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setGreen2($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->green_2 !== $v) {
            $this->green_2 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_GREEN_2] = true;
        }

        return $this;
    } // setGreen2()

    /**
     * Sets the value of the [green_3] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setGreen3($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->green_3 !== $v) {
            $this->green_3 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_GREEN_3] = true;
        }

        return $this;
    } // setGreen3()

    /**
     * Sets the value of the [green_4] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setGreen4($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->green_4 !== $v) {
            $this->green_4 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_GREEN_4] = true;
        }

        return $this;
    } // setGreen4()

    /**
     * Sets the value of the [green_5] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setGreen5($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->green_5 !== $v) {
            $this->green_5 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_GREEN_5] = true;
        }

        return $this;
    } // setGreen5()

    /**
     * Sets the value of the [green_6] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setGreen6($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->green_6 !== $v) {
            $this->green_6 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_GREEN_6] = true;
        }

        return $this;
    } // setGreen6()

    /**
     * Sets the value of the [green_7] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setGreen7($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->green_7 !== $v) {
            $this->green_7 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_GREEN_7] = true;
        }

        return $this;
    } // setGreen7()

    /**
     * Sets the value of the [rose_1] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose1($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_1 !== $v) {
            $this->rose_1 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_1] = true;
        }

        return $this;
    } // setRose1()

    /**
     * Sets the value of the [rose_2] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose2($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_2 !== $v) {
            $this->rose_2 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_2] = true;
        }

        return $this;
    } // setRose2()

    /**
     * Sets the value of the [rose_3] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose3($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_3 !== $v) {
            $this->rose_3 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_3] = true;
        }

        return $this;
    } // setRose3()

    /**
     * Sets the value of the [rose_4] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose4($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_4 !== $v) {
            $this->rose_4 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_4] = true;
        }

        return $this;
    } // setRose4()

    /**
     * Sets the value of the [rose_5] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose5($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_5 !== $v) {
            $this->rose_5 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_5] = true;
        }

        return $this;
    } // setRose5()

    /**
     * Sets the value of the [rose_6] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose6($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_6 !== $v) {
            $this->rose_6 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_6] = true;
        }

        return $this;
    } // setRose6()

    /**
     * Sets the value of the [rose_7] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose7($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_7 !== $v) {
            $this->rose_7 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_7] = true;
        }

        return $this;
    } // setRose7()

    /**
     * Sets the value of the [rose_8] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose8($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_8 !== $v) {
            $this->rose_8 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_8] = true;
        }

        return $this;
    } // setRose8()

    /**
     * Sets the value of the [rose_9] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose9($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_9 !== $v) {
            $this->rose_9 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_9] = true;
        }

        return $this;
    } // setRose9()

    /**
     * Sets the value of the [rose_10] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose10($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_10 !== $v) {
            $this->rose_10 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_10] = true;
        }

        return $this;
    } // setRose10()

    /**
     * Sets the value of the [rose_11] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose11($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_11 !== $v) {
            $this->rose_11 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_11] = true;
        }

        return $this;
    } // setRose11()

    /**
     * Sets the value of the [rose_12] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose12($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_12 !== $v) {
            $this->rose_12 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_12] = true;
        }

        return $this;
    } // setRose12()

    /**
     * Sets the value of the [rose_13] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose13($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_13 !== $v) {
            $this->rose_13 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_13] = true;
        }

        return $this;
    } // setRose13()

    /**
     * Sets the value of the [rose_14] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose14($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_14 !== $v) {
            $this->rose_14 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_14] = true;
        }

        return $this;
    } // setRose14()

    /**
     * Sets the value of the [rose_15] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose15($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_15 !== $v) {
            $this->rose_15 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_15] = true;
        }

        return $this;
    } // setRose15()

    /**
     * Sets the value of the [rose_16] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose16($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_16 !== $v) {
            $this->rose_16 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_16] = true;
        }

        return $this;
    } // setRose16()

    /**
     * Sets the value of the [rose_17] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose17($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_17 !== $v) {
            $this->rose_17 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_17] = true;
        }

        return $this;
    } // setRose17()

    /**
     * Sets the value of the [rose_18] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose18($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_18 !== $v) {
            $this->rose_18 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_18] = true;
        }

        return $this;
    } // setRose18()

    /**
     * Sets the value of the [rose_19] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose19($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_19 !== $v) {
            $this->rose_19 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_19] = true;
        }

        return $this;
    } // setRose19()

    /**
     * Sets the value of the [rose_20] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose20($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_20 !== $v) {
            $this->rose_20 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_20] = true;
        }

        return $this;
    } // setRose20()

    /**
     * Sets the value of the [rose_21] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose21($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_21 !== $v) {
            $this->rose_21 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_21] = true;
        }

        return $this;
    } // setRose21()

    /**
     * Sets the value of the [rose_22] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose22($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_22 !== $v) {
            $this->rose_22 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_22] = true;
        }

        return $this;
    } // setRose22()

    /**
     * Sets the value of the [rose_23] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose23($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_23 !== $v) {
            $this->rose_23 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_23] = true;
        }

        return $this;
    } // setRose23()

    /**
     * Sets the value of the [rose_24] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setRose24($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rose_24 !== $v) {
            $this->rose_24 = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_ROSE_24] = true;
        }

        return $this;
    } // setRose24()

    /**
     * Sets the value of the [maroon] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object (for fluent API support)
     */
    public function setMaroon($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->maroon !== $v) {
            $this->maroon = $v;
            $this->modifiedColumns[CareEncounterEventSignallerTableMap::COL_MAROON] = true;
        }

        return $this;
    } // setMaroon()

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
            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->yellow !== false) {
                return false;
            }

            if ($this->black !== false) {
                return false;
            }

            if ($this->blue_pale !== false) {
                return false;
            }

            if ($this->brown !== false) {
                return false;
            }

            if ($this->pink !== false) {
                return false;
            }

            if ($this->yellow_pale !== false) {
                return false;
            }

            if ($this->red !== false) {
                return false;
            }

            if ($this->green_pale !== false) {
                return false;
            }

            if ($this->violet !== false) {
                return false;
            }

            if ($this->blue !== false) {
                return false;
            }

            if ($this->biege !== false) {
                return false;
            }

            if ($this->orange !== false) {
                return false;
            }

            if ($this->green_1 !== false) {
                return false;
            }

            if ($this->green_2 !== false) {
                return false;
            }

            if ($this->green_3 !== false) {
                return false;
            }

            if ($this->green_4 !== false) {
                return false;
            }

            if ($this->green_5 !== false) {
                return false;
            }

            if ($this->green_6 !== false) {
                return false;
            }

            if ($this->green_7 !== false) {
                return false;
            }

            if ($this->rose_1 !== false) {
                return false;
            }

            if ($this->rose_2 !== false) {
                return false;
            }

            if ($this->rose_3 !== false) {
                return false;
            }

            if ($this->rose_4 !== false) {
                return false;
            }

            if ($this->rose_5 !== false) {
                return false;
            }

            if ($this->rose_6 !== false) {
                return false;
            }

            if ($this->rose_7 !== false) {
                return false;
            }

            if ($this->rose_8 !== false) {
                return false;
            }

            if ($this->rose_9 !== false) {
                return false;
            }

            if ($this->rose_10 !== false) {
                return false;
            }

            if ($this->rose_11 !== false) {
                return false;
            }

            if ($this->rose_12 !== false) {
                return false;
            }

            if ($this->rose_13 !== false) {
                return false;
            }

            if ($this->rose_14 !== false) {
                return false;
            }

            if ($this->rose_15 !== false) {
                return false;
            }

            if ($this->rose_16 !== false) {
                return false;
            }

            if ($this->rose_17 !== false) {
                return false;
            }

            if ($this->rose_18 !== false) {
                return false;
            }

            if ($this->rose_19 !== false) {
                return false;
            }

            if ($this->rose_20 !== false) {
                return false;
            }

            if ($this->rose_21 !== false) {
                return false;
            }

            if ($this->rose_22 !== false) {
                return false;
            }

            if ($this->rose_23 !== false) {
                return false;
            }

            if ($this->rose_24 !== false) {
                return false;
            }

            if ($this->maroon !== false) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Yellow', TableMap::TYPE_PHPNAME, $indexType)];
            $this->yellow = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Black', TableMap::TYPE_PHPNAME, $indexType)];
            $this->black = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('BluePale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blue_pale = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Brown', TableMap::TYPE_PHPNAME, $indexType)];
            $this->brown = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Pink', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pink = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('YellowPale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->yellow_pale = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Red', TableMap::TYPE_PHPNAME, $indexType)];
            $this->red = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('GreenPale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->green_pale = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Violet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->violet = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Blue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blue = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Biege', TableMap::TYPE_PHPNAME, $indexType)];
            $this->biege = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Orange', TableMap::TYPE_PHPNAME, $indexType)];
            $this->orange = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Green1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->green_1 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Green2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->green_2 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Green3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->green_3 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Green4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->green_4 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Green5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->green_5 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Green6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->green_6 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Green7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->green_7 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_1 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_2 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_3 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_4 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_5 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_6 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_7 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_8 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_9 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_10 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_11 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_12 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_13 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_14 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_15 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_16 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_17 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_18 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_19 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_20 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_21 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_22 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_23 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Rose24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rose_24 = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : CareEncounterEventSignallerTableMap::translateFieldName('Maroon', TableMap::TYPE_PHPNAME, $indexType)];
            $this->maroon = (null !== $col) ? (boolean) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 45; // 45 = CareEncounterEventSignallerTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareEncounterEventSignaller'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterEventSignallerTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareEncounterEventSignallerQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareEncounterEventSignaller::setDeleted()
     * @see CareEncounterEventSignaller::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterEventSignallerTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareEncounterEventSignallerQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterEventSignallerTableMap::DATABASE_NAME);
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
                CareEncounterEventSignallerTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_YELLOW)) {
            $modifiedColumns[':p' . $index++]  = 'yellow';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_BLACK)) {
            $modifiedColumns[':p' . $index++]  = 'black';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_BLUE_PALE)) {
            $modifiedColumns[':p' . $index++]  = 'blue_pale';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_BROWN)) {
            $modifiedColumns[':p' . $index++]  = 'brown';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_PINK)) {
            $modifiedColumns[':p' . $index++]  = 'pink';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_YELLOW_PALE)) {
            $modifiedColumns[':p' . $index++]  = 'yellow_pale';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_RED)) {
            $modifiedColumns[':p' . $index++]  = 'red';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_PALE)) {
            $modifiedColumns[':p' . $index++]  = 'green_pale';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_VIOLET)) {
            $modifiedColumns[':p' . $index++]  = 'violet';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_BLUE)) {
            $modifiedColumns[':p' . $index++]  = 'blue';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_BIEGE)) {
            $modifiedColumns[':p' . $index++]  = 'biege';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ORANGE)) {
            $modifiedColumns[':p' . $index++]  = 'orange';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_1)) {
            $modifiedColumns[':p' . $index++]  = 'green_1';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_2)) {
            $modifiedColumns[':p' . $index++]  = 'green_2';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_3)) {
            $modifiedColumns[':p' . $index++]  = 'green_3';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_4)) {
            $modifiedColumns[':p' . $index++]  = 'green_4';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_5)) {
            $modifiedColumns[':p' . $index++]  = 'green_5';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_6)) {
            $modifiedColumns[':p' . $index++]  = 'green_6';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_7)) {
            $modifiedColumns[':p' . $index++]  = 'green_7';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_1)) {
            $modifiedColumns[':p' . $index++]  = 'rose_1';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_2)) {
            $modifiedColumns[':p' . $index++]  = 'rose_2';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_3)) {
            $modifiedColumns[':p' . $index++]  = 'rose_3';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_4)) {
            $modifiedColumns[':p' . $index++]  = 'rose_4';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_5)) {
            $modifiedColumns[':p' . $index++]  = 'rose_5';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_6)) {
            $modifiedColumns[':p' . $index++]  = 'rose_6';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_7)) {
            $modifiedColumns[':p' . $index++]  = 'rose_7';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_8)) {
            $modifiedColumns[':p' . $index++]  = 'rose_8';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_9)) {
            $modifiedColumns[':p' . $index++]  = 'rose_9';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_10)) {
            $modifiedColumns[':p' . $index++]  = 'rose_10';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_11)) {
            $modifiedColumns[':p' . $index++]  = 'rose_11';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_12)) {
            $modifiedColumns[':p' . $index++]  = 'rose_12';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_13)) {
            $modifiedColumns[':p' . $index++]  = 'rose_13';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_14)) {
            $modifiedColumns[':p' . $index++]  = 'rose_14';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_15)) {
            $modifiedColumns[':p' . $index++]  = 'rose_15';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_16)) {
            $modifiedColumns[':p' . $index++]  = 'rose_16';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_17)) {
            $modifiedColumns[':p' . $index++]  = 'rose_17';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_18)) {
            $modifiedColumns[':p' . $index++]  = 'rose_18';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_19)) {
            $modifiedColumns[':p' . $index++]  = 'rose_19';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_20)) {
            $modifiedColumns[':p' . $index++]  = 'rose_20';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_21)) {
            $modifiedColumns[':p' . $index++]  = 'rose_21';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_22)) {
            $modifiedColumns[':p' . $index++]  = 'rose_22';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_23)) {
            $modifiedColumns[':p' . $index++]  = 'rose_23';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_24)) {
            $modifiedColumns[':p' . $index++]  = 'rose_24';
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_MAROON)) {
            $modifiedColumns[':p' . $index++]  = 'maroon';
        }

        $sql = sprintf(
            'INSERT INTO care_encounter_event_signaller (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'yellow':
                        $stmt->bindValue($identifier, (int) $this->yellow, PDO::PARAM_INT);
                        break;
                    case 'black':
                        $stmt->bindValue($identifier, (int) $this->black, PDO::PARAM_INT);
                        break;
                    case 'blue_pale':
                        $stmt->bindValue($identifier, (int) $this->blue_pale, PDO::PARAM_INT);
                        break;
                    case 'brown':
                        $stmt->bindValue($identifier, (int) $this->brown, PDO::PARAM_INT);
                        break;
                    case 'pink':
                        $stmt->bindValue($identifier, (int) $this->pink, PDO::PARAM_INT);
                        break;
                    case 'yellow_pale':
                        $stmt->bindValue($identifier, (int) $this->yellow_pale, PDO::PARAM_INT);
                        break;
                    case 'red':
                        $stmt->bindValue($identifier, (int) $this->red, PDO::PARAM_INT);
                        break;
                    case 'green_pale':
                        $stmt->bindValue($identifier, (int) $this->green_pale, PDO::PARAM_INT);
                        break;
                    case 'violet':
                        $stmt->bindValue($identifier, (int) $this->violet, PDO::PARAM_INT);
                        break;
                    case 'blue':
                        $stmt->bindValue($identifier, (int) $this->blue, PDO::PARAM_INT);
                        break;
                    case 'biege':
                        $stmt->bindValue($identifier, (int) $this->biege, PDO::PARAM_INT);
                        break;
                    case 'orange':
                        $stmt->bindValue($identifier, (int) $this->orange, PDO::PARAM_INT);
                        break;
                    case 'green_1':
                        $stmt->bindValue($identifier, (int) $this->green_1, PDO::PARAM_INT);
                        break;
                    case 'green_2':
                        $stmt->bindValue($identifier, (int) $this->green_2, PDO::PARAM_INT);
                        break;
                    case 'green_3':
                        $stmt->bindValue($identifier, (int) $this->green_3, PDO::PARAM_INT);
                        break;
                    case 'green_4':
                        $stmt->bindValue($identifier, (int) $this->green_4, PDO::PARAM_INT);
                        break;
                    case 'green_5':
                        $stmt->bindValue($identifier, (int) $this->green_5, PDO::PARAM_INT);
                        break;
                    case 'green_6':
                        $stmt->bindValue($identifier, (int) $this->green_6, PDO::PARAM_INT);
                        break;
                    case 'green_7':
                        $stmt->bindValue($identifier, (int) $this->green_7, PDO::PARAM_INT);
                        break;
                    case 'rose_1':
                        $stmt->bindValue($identifier, (int) $this->rose_1, PDO::PARAM_INT);
                        break;
                    case 'rose_2':
                        $stmt->bindValue($identifier, (int) $this->rose_2, PDO::PARAM_INT);
                        break;
                    case 'rose_3':
                        $stmt->bindValue($identifier, (int) $this->rose_3, PDO::PARAM_INT);
                        break;
                    case 'rose_4':
                        $stmt->bindValue($identifier, (int) $this->rose_4, PDO::PARAM_INT);
                        break;
                    case 'rose_5':
                        $stmt->bindValue($identifier, (int) $this->rose_5, PDO::PARAM_INT);
                        break;
                    case 'rose_6':
                        $stmt->bindValue($identifier, (int) $this->rose_6, PDO::PARAM_INT);
                        break;
                    case 'rose_7':
                        $stmt->bindValue($identifier, (int) $this->rose_7, PDO::PARAM_INT);
                        break;
                    case 'rose_8':
                        $stmt->bindValue($identifier, (int) $this->rose_8, PDO::PARAM_INT);
                        break;
                    case 'rose_9':
                        $stmt->bindValue($identifier, (int) $this->rose_9, PDO::PARAM_INT);
                        break;
                    case 'rose_10':
                        $stmt->bindValue($identifier, (int) $this->rose_10, PDO::PARAM_INT);
                        break;
                    case 'rose_11':
                        $stmt->bindValue($identifier, (int) $this->rose_11, PDO::PARAM_INT);
                        break;
                    case 'rose_12':
                        $stmt->bindValue($identifier, (int) $this->rose_12, PDO::PARAM_INT);
                        break;
                    case 'rose_13':
                        $stmt->bindValue($identifier, (int) $this->rose_13, PDO::PARAM_INT);
                        break;
                    case 'rose_14':
                        $stmt->bindValue($identifier, (int) $this->rose_14, PDO::PARAM_INT);
                        break;
                    case 'rose_15':
                        $stmt->bindValue($identifier, (int) $this->rose_15, PDO::PARAM_INT);
                        break;
                    case 'rose_16':
                        $stmt->bindValue($identifier, (int) $this->rose_16, PDO::PARAM_INT);
                        break;
                    case 'rose_17':
                        $stmt->bindValue($identifier, (int) $this->rose_17, PDO::PARAM_INT);
                        break;
                    case 'rose_18':
                        $stmt->bindValue($identifier, (int) $this->rose_18, PDO::PARAM_INT);
                        break;
                    case 'rose_19':
                        $stmt->bindValue($identifier, (int) $this->rose_19, PDO::PARAM_INT);
                        break;
                    case 'rose_20':
                        $stmt->bindValue($identifier, (int) $this->rose_20, PDO::PARAM_INT);
                        break;
                    case 'rose_21':
                        $stmt->bindValue($identifier, (int) $this->rose_21, PDO::PARAM_INT);
                        break;
                    case 'rose_22':
                        $stmt->bindValue($identifier, (int) $this->rose_22, PDO::PARAM_INT);
                        break;
                    case 'rose_23':
                        $stmt->bindValue($identifier, (int) $this->rose_23, PDO::PARAM_INT);
                        break;
                    case 'rose_24':
                        $stmt->bindValue($identifier, (int) $this->rose_24, PDO::PARAM_INT);
                        break;
                    case 'maroon':
                        $stmt->bindValue($identifier, (int) $this->maroon, PDO::PARAM_INT);
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
        $pos = CareEncounterEventSignallerTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getEncounterNr();
                break;
            case 1:
                return $this->getYellow();
                break;
            case 2:
                return $this->getBlack();
                break;
            case 3:
                return $this->getBluePale();
                break;
            case 4:
                return $this->getBrown();
                break;
            case 5:
                return $this->getPink();
                break;
            case 6:
                return $this->getYellowPale();
                break;
            case 7:
                return $this->getRed();
                break;
            case 8:
                return $this->getGreenPale();
                break;
            case 9:
                return $this->getViolet();
                break;
            case 10:
                return $this->getBlue();
                break;
            case 11:
                return $this->getBiege();
                break;
            case 12:
                return $this->getOrange();
                break;
            case 13:
                return $this->getGreen1();
                break;
            case 14:
                return $this->getGreen2();
                break;
            case 15:
                return $this->getGreen3();
                break;
            case 16:
                return $this->getGreen4();
                break;
            case 17:
                return $this->getGreen5();
                break;
            case 18:
                return $this->getGreen6();
                break;
            case 19:
                return $this->getGreen7();
                break;
            case 20:
                return $this->getRose1();
                break;
            case 21:
                return $this->getRose2();
                break;
            case 22:
                return $this->getRose3();
                break;
            case 23:
                return $this->getRose4();
                break;
            case 24:
                return $this->getRose5();
                break;
            case 25:
                return $this->getRose6();
                break;
            case 26:
                return $this->getRose7();
                break;
            case 27:
                return $this->getRose8();
                break;
            case 28:
                return $this->getRose9();
                break;
            case 29:
                return $this->getRose10();
                break;
            case 30:
                return $this->getRose11();
                break;
            case 31:
                return $this->getRose12();
                break;
            case 32:
                return $this->getRose13();
                break;
            case 33:
                return $this->getRose14();
                break;
            case 34:
                return $this->getRose15();
                break;
            case 35:
                return $this->getRose16();
                break;
            case 36:
                return $this->getRose17();
                break;
            case 37:
                return $this->getRose18();
                break;
            case 38:
                return $this->getRose19();
                break;
            case 39:
                return $this->getRose20();
                break;
            case 40:
                return $this->getRose21();
                break;
            case 41:
                return $this->getRose22();
                break;
            case 42:
                return $this->getRose23();
                break;
            case 43:
                return $this->getRose24();
                break;
            case 44:
                return $this->getMaroon();
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

        if (isset($alreadyDumpedObjects['CareEncounterEventSignaller'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareEncounterEventSignaller'][$this->hashCode()] = true;
        $keys = CareEncounterEventSignallerTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getEncounterNr(),
            $keys[1] => $this->getYellow(),
            $keys[2] => $this->getBlack(),
            $keys[3] => $this->getBluePale(),
            $keys[4] => $this->getBrown(),
            $keys[5] => $this->getPink(),
            $keys[6] => $this->getYellowPale(),
            $keys[7] => $this->getRed(),
            $keys[8] => $this->getGreenPale(),
            $keys[9] => $this->getViolet(),
            $keys[10] => $this->getBlue(),
            $keys[11] => $this->getBiege(),
            $keys[12] => $this->getOrange(),
            $keys[13] => $this->getGreen1(),
            $keys[14] => $this->getGreen2(),
            $keys[15] => $this->getGreen3(),
            $keys[16] => $this->getGreen4(),
            $keys[17] => $this->getGreen5(),
            $keys[18] => $this->getGreen6(),
            $keys[19] => $this->getGreen7(),
            $keys[20] => $this->getRose1(),
            $keys[21] => $this->getRose2(),
            $keys[22] => $this->getRose3(),
            $keys[23] => $this->getRose4(),
            $keys[24] => $this->getRose5(),
            $keys[25] => $this->getRose6(),
            $keys[26] => $this->getRose7(),
            $keys[27] => $this->getRose8(),
            $keys[28] => $this->getRose9(),
            $keys[29] => $this->getRose10(),
            $keys[30] => $this->getRose11(),
            $keys[31] => $this->getRose12(),
            $keys[32] => $this->getRose13(),
            $keys[33] => $this->getRose14(),
            $keys[34] => $this->getRose15(),
            $keys[35] => $this->getRose16(),
            $keys[36] => $this->getRose17(),
            $keys[37] => $this->getRose18(),
            $keys[38] => $this->getRose19(),
            $keys[39] => $this->getRose20(),
            $keys[40] => $this->getRose21(),
            $keys[41] => $this->getRose22(),
            $keys[42] => $this->getRose23(),
            $keys[43] => $this->getRose24(),
            $keys[44] => $this->getMaroon(),
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
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareEncounterEventSignallerTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setEncounterNr($value);
                break;
            case 1:
                $this->setYellow($value);
                break;
            case 2:
                $this->setBlack($value);
                break;
            case 3:
                $this->setBluePale($value);
                break;
            case 4:
                $this->setBrown($value);
                break;
            case 5:
                $this->setPink($value);
                break;
            case 6:
                $this->setYellowPale($value);
                break;
            case 7:
                $this->setRed($value);
                break;
            case 8:
                $this->setGreenPale($value);
                break;
            case 9:
                $this->setViolet($value);
                break;
            case 10:
                $this->setBlue($value);
                break;
            case 11:
                $this->setBiege($value);
                break;
            case 12:
                $this->setOrange($value);
                break;
            case 13:
                $this->setGreen1($value);
                break;
            case 14:
                $this->setGreen2($value);
                break;
            case 15:
                $this->setGreen3($value);
                break;
            case 16:
                $this->setGreen4($value);
                break;
            case 17:
                $this->setGreen5($value);
                break;
            case 18:
                $this->setGreen6($value);
                break;
            case 19:
                $this->setGreen7($value);
                break;
            case 20:
                $this->setRose1($value);
                break;
            case 21:
                $this->setRose2($value);
                break;
            case 22:
                $this->setRose3($value);
                break;
            case 23:
                $this->setRose4($value);
                break;
            case 24:
                $this->setRose5($value);
                break;
            case 25:
                $this->setRose6($value);
                break;
            case 26:
                $this->setRose7($value);
                break;
            case 27:
                $this->setRose8($value);
                break;
            case 28:
                $this->setRose9($value);
                break;
            case 29:
                $this->setRose10($value);
                break;
            case 30:
                $this->setRose11($value);
                break;
            case 31:
                $this->setRose12($value);
                break;
            case 32:
                $this->setRose13($value);
                break;
            case 33:
                $this->setRose14($value);
                break;
            case 34:
                $this->setRose15($value);
                break;
            case 35:
                $this->setRose16($value);
                break;
            case 36:
                $this->setRose17($value);
                break;
            case 37:
                $this->setRose18($value);
                break;
            case 38:
                $this->setRose19($value);
                break;
            case 39:
                $this->setRose20($value);
                break;
            case 40:
                $this->setRose21($value);
                break;
            case 41:
                $this->setRose22($value);
                break;
            case 42:
                $this->setRose23($value);
                break;
            case 43:
                $this->setRose24($value);
                break;
            case 44:
                $this->setMaroon($value);
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
        $keys = CareEncounterEventSignallerTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setEncounterNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setYellow($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setBlack($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setBluePale($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setBrown($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPink($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setYellowPale($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setRed($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setGreenPale($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setViolet($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setBlue($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setBiege($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOrange($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setGreen1($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setGreen2($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setGreen3($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setGreen4($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setGreen5($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setGreen6($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setGreen7($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setRose1($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setRose2($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setRose3($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setRose4($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setRose5($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setRose6($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setRose7($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setRose8($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setRose9($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setRose10($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setRose11($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setRose12($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setRose13($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setRose14($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setRose15($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setRose16($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setRose17($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setRose18($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setRose19($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setRose20($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setRose21($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setRose22($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setRose23($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setRose24($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setMaroon($arr[$keys[44]]);
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
     * @return $this|\CareMd\CareMd\CareEncounterEventSignaller The current object, for fluid interface
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
        $criteria = new Criteria(CareEncounterEventSignallerTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_YELLOW)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_YELLOW, $this->yellow);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_BLACK)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_BLACK, $this->black);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_BLUE_PALE)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_BLUE_PALE, $this->blue_pale);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_BROWN)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_BROWN, $this->brown);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_PINK)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_PINK, $this->pink);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_YELLOW_PALE)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_YELLOW_PALE, $this->yellow_pale);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_RED)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_RED, $this->red);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_PALE)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_GREEN_PALE, $this->green_pale);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_VIOLET)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_VIOLET, $this->violet);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_BLUE)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_BLUE, $this->blue);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_BIEGE)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_BIEGE, $this->biege);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ORANGE)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ORANGE, $this->orange);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_1)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_GREEN_1, $this->green_1);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_2)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_GREEN_2, $this->green_2);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_3)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_GREEN_3, $this->green_3);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_4)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_GREEN_4, $this->green_4);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_5)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_GREEN_5, $this->green_5);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_6)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_GREEN_6, $this->green_6);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_GREEN_7)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_GREEN_7, $this->green_7);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_1)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_1, $this->rose_1);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_2)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_2, $this->rose_2);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_3)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_3, $this->rose_3);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_4)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_4, $this->rose_4);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_5)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_5, $this->rose_5);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_6)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_6, $this->rose_6);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_7)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_7, $this->rose_7);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_8)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_8, $this->rose_8);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_9)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_9, $this->rose_9);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_10)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_10, $this->rose_10);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_11)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_11, $this->rose_11);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_12)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_12, $this->rose_12);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_13)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_13, $this->rose_13);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_14)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_14, $this->rose_14);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_15)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_15, $this->rose_15);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_16)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_16, $this->rose_16);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_17)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_17, $this->rose_17);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_18)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_18, $this->rose_18);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_19)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_19, $this->rose_19);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_20)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_20, $this->rose_20);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_21)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_21, $this->rose_21);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_22)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_22, $this->rose_22);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_23)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_23, $this->rose_23);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_ROSE_24)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ROSE_24, $this->rose_24);
        }
        if ($this->isColumnModified(CareEncounterEventSignallerTableMap::COL_MAROON)) {
            $criteria->add(CareEncounterEventSignallerTableMap::COL_MAROON, $this->maroon);
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
        $criteria = ChildCareEncounterEventSignallerQuery::create();
        $criteria->add(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);

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
        $validPk = null !== $this->getEncounterNr();

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
        return $this->getEncounterNr();
    }

    /**
     * Generic method to set the primary key (encounter_nr column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setEncounterNr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getEncounterNr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareEncounterEventSignaller (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setYellow($this->getYellow());
        $copyObj->setBlack($this->getBlack());
        $copyObj->setBluePale($this->getBluePale());
        $copyObj->setBrown($this->getBrown());
        $copyObj->setPink($this->getPink());
        $copyObj->setYellowPale($this->getYellowPale());
        $copyObj->setRed($this->getRed());
        $copyObj->setGreenPale($this->getGreenPale());
        $copyObj->setViolet($this->getViolet());
        $copyObj->setBlue($this->getBlue());
        $copyObj->setBiege($this->getBiege());
        $copyObj->setOrange($this->getOrange());
        $copyObj->setGreen1($this->getGreen1());
        $copyObj->setGreen2($this->getGreen2());
        $copyObj->setGreen3($this->getGreen3());
        $copyObj->setGreen4($this->getGreen4());
        $copyObj->setGreen5($this->getGreen5());
        $copyObj->setGreen6($this->getGreen6());
        $copyObj->setGreen7($this->getGreen7());
        $copyObj->setRose1($this->getRose1());
        $copyObj->setRose2($this->getRose2());
        $copyObj->setRose3($this->getRose3());
        $copyObj->setRose4($this->getRose4());
        $copyObj->setRose5($this->getRose5());
        $copyObj->setRose6($this->getRose6());
        $copyObj->setRose7($this->getRose7());
        $copyObj->setRose8($this->getRose8());
        $copyObj->setRose9($this->getRose9());
        $copyObj->setRose10($this->getRose10());
        $copyObj->setRose11($this->getRose11());
        $copyObj->setRose12($this->getRose12());
        $copyObj->setRose13($this->getRose13());
        $copyObj->setRose14($this->getRose14());
        $copyObj->setRose15($this->getRose15());
        $copyObj->setRose16($this->getRose16());
        $copyObj->setRose17($this->getRose17());
        $copyObj->setRose18($this->getRose18());
        $copyObj->setRose19($this->getRose19());
        $copyObj->setRose20($this->getRose20());
        $copyObj->setRose21($this->getRose21());
        $copyObj->setRose22($this->getRose22());
        $copyObj->setRose23($this->getRose23());
        $copyObj->setRose24($this->getRose24());
        $copyObj->setMaroon($this->getMaroon());
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
     * @return \CareMd\CareMd\CareEncounterEventSignaller Clone of current object.
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
        $this->encounter_nr = null;
        $this->yellow = null;
        $this->black = null;
        $this->blue_pale = null;
        $this->brown = null;
        $this->pink = null;
        $this->yellow_pale = null;
        $this->red = null;
        $this->green_pale = null;
        $this->violet = null;
        $this->blue = null;
        $this->biege = null;
        $this->orange = null;
        $this->green_1 = null;
        $this->green_2 = null;
        $this->green_3 = null;
        $this->green_4 = null;
        $this->green_5 = null;
        $this->green_6 = null;
        $this->green_7 = null;
        $this->rose_1 = null;
        $this->rose_2 = null;
        $this->rose_3 = null;
        $this->rose_4 = null;
        $this->rose_5 = null;
        $this->rose_6 = null;
        $this->rose_7 = null;
        $this->rose_8 = null;
        $this->rose_9 = null;
        $this->rose_10 = null;
        $this->rose_11 = null;
        $this->rose_12 = null;
        $this->rose_13 = null;
        $this->rose_14 = null;
        $this->rose_15 = null;
        $this->rose_16 = null;
        $this->rose_17 = null;
        $this->rose_18 = null;
        $this->rose_19 = null;
        $this->rose_20 = null;
        $this->rose_21 = null;
        $this->rose_22 = null;
        $this->rose_23 = null;
        $this->rose_24 = null;
        $this->maroon = null;
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
        return (string) $this->exportTo(CareEncounterEventSignallerTableMap::DEFAULT_STRING_FORMAT);
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
