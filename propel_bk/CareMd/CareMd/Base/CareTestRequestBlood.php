<?php

namespace CareMd\CareMd\Base;

use \DateTime;
use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestBloodQuery as ChildCareTestRequestBloodQuery;
use CareMd\CareMd\Map\CareTestRequestBloodTableMap;
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
 * Base class that represents a row from the 'care_test_request_blood' table.
 *
 *
 *
 * @package    propel.generator.CareMd.CareMd.Base
 */
abstract class CareTestRequestBlood implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\CareMd\\CareMd\\Map\\CareTestRequestBloodTableMap';


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
     * The value for the batch_nr field.
     *
     * @var        int
     */
    protected $batch_nr;

    /**
     * The value for the encounter_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $encounter_nr;

    /**
     * The value for the dept_nr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $dept_nr;

    /**
     * The value for the blood_group field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $blood_group;

    /**
     * The value for the rh_factor field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rh_factor;

    /**
     * The value for the kell field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $kell;

    /**
     * The value for the date_protoc_nr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $date_protoc_nr;

    /**
     * The value for the pure_blood field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pure_blood;

    /**
     * The value for the red_blood field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $red_blood;

    /**
     * The value for the leukoless_blood field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $leukoless_blood;

    /**
     * The value for the washed_blood field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $washed_blood;

    /**
     * The value for the prp_blood field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prp_blood;

    /**
     * The value for the thrombo_con field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $thrombo_con;

    /**
     * The value for the ffp_plasma field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ffp_plasma;

    /**
     * The value for the transfusion_dev field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $transfusion_dev;

    /**
     * The value for the match_sample field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $match_sample;

    /**
     * The value for the transfusion_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $transfusion_date;

    /**
     * The value for the diagnosis field.
     *
     * @var        string
     */
    protected $diagnosis;

    /**
     * The value for the notes field.
     *
     * @var        string
     */
    protected $notes;

    /**
     * The value for the send_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $send_date;

    /**
     * The value for the doctor field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $doctor;

    /**
     * The value for the phone_nr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $phone_nr;

    /**
     * The value for the status field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $status;

    /**
     * The value for the blood_pb field.
     *
     * @var        string
     */
    protected $blood_pb;

    /**
     * The value for the blood_rb field.
     *
     * @var        string
     */
    protected $blood_rb;

    /**
     * The value for the blood_llrb field.
     *
     * @var        string
     */
    protected $blood_llrb;

    /**
     * The value for the blood_wrb field.
     *
     * @var        string
     */
    protected $blood_wrb;

    /**
     * The value for the blood_prp field.
     *
     * @var        string
     */
    protected $blood_prp;

    /**
     * The value for the blood_tc field.
     *
     * @var        string
     */
    protected $blood_tc;

    /**
     * The value for the blood_ffp field.
     *
     * @var        string
     */
    protected $blood_ffp;

    /**
     * The value for the b_group_count field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $b_group_count;

    /**
     * The value for the b_group_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $b_group_price;

    /**
     * The value for the a_subgroup_count field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $a_subgroup_count;

    /**
     * The value for the a_subgroup_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $a_subgroup_price;

    /**
     * The value for the extra_factors_count field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $extra_factors_count;

    /**
     * The value for the extra_factors_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $extra_factors_price;

    /**
     * The value for the coombs_count field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $coombs_count;

    /**
     * The value for the coombs_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $coombs_price;

    /**
     * The value for the ab_test_count field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ab_test_count;

    /**
     * The value for the ab_test_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $ab_test_price;

    /**
     * The value for the crosstest_count field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $crosstest_count;

    /**
     * The value for the crosstest_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $crosstest_price;

    /**
     * The value for the ab_diff_count field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ab_diff_count;

    /**
     * The value for the ab_diff_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $ab_diff_price;

    /**
     * The value for the x_test_1_code field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $x_test_1_code;

    /**
     * The value for the x_test_1_name field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $x_test_1_name;

    /**
     * The value for the x_test_1_count field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $x_test_1_count;

    /**
     * The value for the x_test_1_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $x_test_1_price;

    /**
     * The value for the x_test_2_code field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $x_test_2_code;

    /**
     * The value for the x_test_2_name field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $x_test_2_name;

    /**
     * The value for the x_test_2_count field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $x_test_2_count;

    /**
     * The value for the x_test_2_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $x_test_2_price;

    /**
     * The value for the x_test_3_code field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $x_test_3_code;

    /**
     * The value for the x_test_3_name field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $x_test_3_name;

    /**
     * The value for the x_test_3_count field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $x_test_3_count;

    /**
     * The value for the x_test_3_price field.
     *
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $x_test_3_price;

    /**
     * The value for the lab_stamp field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $lab_stamp;

    /**
     * The value for the release_via field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $release_via;

    /**
     * The value for the receipt_ack field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $receipt_ack;

    /**
     * The value for the mainlog_nr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mainlog_nr;

    /**
     * The value for the lab_nr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lab_nr;

    /**
     * The value for the mainlog_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $mainlog_date;

    /**
     * The value for the lab_date field.
     *
     * Note: this column has a database default value of: NULL
     * @var        DateTime
     */
    protected $lab_date;

    /**
     * The value for the mainlog_sign field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mainlog_sign;

    /**
     * The value for the lab_sign field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lab_sign;

    /**
     * The value for the history field.
     *
     * @var        string
     */
    protected $history;

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
        $this->encounter_nr = 0;
        $this->dept_nr = 0;
        $this->blood_group = '';
        $this->rh_factor = '';
        $this->kell = '';
        $this->date_protoc_nr = '';
        $this->pure_blood = '';
        $this->red_blood = '';
        $this->leukoless_blood = '';
        $this->washed_blood = '';
        $this->prp_blood = '';
        $this->thrombo_con = '';
        $this->ffp_plasma = '';
        $this->transfusion_dev = '';
        $this->match_sample = 0;
        $this->transfusion_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->send_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->doctor = '';
        $this->phone_nr = '';
        $this->status = '';
        $this->b_group_count = 0;
        $this->b_group_price = 0.0;
        $this->a_subgroup_count = 0;
        $this->a_subgroup_price = 0.0;
        $this->extra_factors_count = 0;
        $this->extra_factors_price = 0.0;
        $this->coombs_count = 0;
        $this->coombs_price = 0.0;
        $this->ab_test_count = 0;
        $this->ab_test_price = 0.0;
        $this->crosstest_count = 0;
        $this->crosstest_price = 0.0;
        $this->ab_diff_count = 0;
        $this->ab_diff_price = 0.0;
        $this->x_test_1_code = 0;
        $this->x_test_1_name = '';
        $this->x_test_1_count = 0;
        $this->x_test_1_price = 0.0;
        $this->x_test_2_code = 0;
        $this->x_test_2_name = '';
        $this->x_test_2_count = 0;
        $this->x_test_2_price = 0.0;
        $this->x_test_3_code = 0;
        $this->x_test_3_name = '';
        $this->x_test_3_count = 0;
        $this->x_test_3_price = 0.0;
        $this->lab_stamp = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->release_via = '';
        $this->receipt_ack = '';
        $this->mainlog_nr = '';
        $this->lab_nr = '';
        $this->mainlog_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->lab_date = PropelDateTime::newInstance(NULL, null, 'DateTime');
        $this->mainlog_sign = '';
        $this->lab_sign = '';
        $this->modify_id = '';
        $this->create_id = '';
        $this->create_time = PropelDateTime::newInstance(NULL, null, 'DateTime');
    }

    /**
     * Initializes internal state of CareMd\CareMd\Base\CareTestRequestBlood object.
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
     * Compares this with another <code>CareTestRequestBlood</code> instance.  If
     * <code>obj</code> is an instance of <code>CareTestRequestBlood</code>, delegates to
     * <code>equals(CareTestRequestBlood)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CareTestRequestBlood The current object, for fluid interface
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
     * Get the [batch_nr] column value.
     *
     * @return int
     */
    public function getBatchNr()
    {
        return $this->batch_nr;
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
     * Get the [dept_nr] column value.
     *
     * @return int
     */
    public function getDeptNr()
    {
        return $this->dept_nr;
    }

    /**
     * Get the [blood_group] column value.
     *
     * @return string
     */
    public function getBloodGroup()
    {
        return $this->blood_group;
    }

    /**
     * Get the [rh_factor] column value.
     *
     * @return string
     */
    public function getRhFactor()
    {
        return $this->rh_factor;
    }

    /**
     * Get the [kell] column value.
     *
     * @return string
     */
    public function getKell()
    {
        return $this->kell;
    }

    /**
     * Get the [date_protoc_nr] column value.
     *
     * @return string
     */
    public function getDateProtocNr()
    {
        return $this->date_protoc_nr;
    }

    /**
     * Get the [pure_blood] column value.
     *
     * @return string
     */
    public function getPureBlood()
    {
        return $this->pure_blood;
    }

    /**
     * Get the [red_blood] column value.
     *
     * @return string
     */
    public function getRedBlood()
    {
        return $this->red_blood;
    }

    /**
     * Get the [leukoless_blood] column value.
     *
     * @return string
     */
    public function getLeukolessBlood()
    {
        return $this->leukoless_blood;
    }

    /**
     * Get the [washed_blood] column value.
     *
     * @return string
     */
    public function getWashedBlood()
    {
        return $this->washed_blood;
    }

    /**
     * Get the [prp_blood] column value.
     *
     * @return string
     */
    public function getPrpBlood()
    {
        return $this->prp_blood;
    }

    /**
     * Get the [thrombo_con] column value.
     *
     * @return string
     */
    public function getThromboCon()
    {
        return $this->thrombo_con;
    }

    /**
     * Get the [ffp_plasma] column value.
     *
     * @return string
     */
    public function getFfpPlasma()
    {
        return $this->ffp_plasma;
    }

    /**
     * Get the [transfusion_dev] column value.
     *
     * @return string
     */
    public function getTransfusionDev()
    {
        return $this->transfusion_dev;
    }

    /**
     * Get the [match_sample] column value.
     *
     * @return int
     */
    public function getMatchSample()
    {
        return $this->match_sample;
    }

    /**
     * Get the [optionally formatted] temporal [transfusion_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTransfusionDate($format = NULL)
    {
        if ($format === null) {
            return $this->transfusion_date;
        } else {
            return $this->transfusion_date instanceof \DateTimeInterface ? $this->transfusion_date->format($format) : null;
        }
    }

    /**
     * Get the [diagnosis] column value.
     *
     * @return string
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Get the [notes] column value.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Get the [optionally formatted] temporal [send_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSendDate($format = NULL)
    {
        if ($format === null) {
            return $this->send_date;
        } else {
            return $this->send_date instanceof \DateTimeInterface ? $this->send_date->format($format) : null;
        }
    }

    /**
     * Get the [doctor] column value.
     *
     * @return string
     */
    public function getDoctor()
    {
        return $this->doctor;
    }

    /**
     * Get the [phone_nr] column value.
     *
     * @return string
     */
    public function getPhoneNr()
    {
        return $this->phone_nr;
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
     * Get the [blood_pb] column value.
     *
     * @return string
     */
    public function getBloodPb()
    {
        return $this->blood_pb;
    }

    /**
     * Get the [blood_rb] column value.
     *
     * @return string
     */
    public function getBloodRb()
    {
        return $this->blood_rb;
    }

    /**
     * Get the [blood_llrb] column value.
     *
     * @return string
     */
    public function getBloodLlrb()
    {
        return $this->blood_llrb;
    }

    /**
     * Get the [blood_wrb] column value.
     *
     * @return string
     */
    public function getBloodWrb()
    {
        return $this->blood_wrb;
    }

    /**
     * Get the [blood_prp] column value.
     *
     * @return string
     */
    public function getBloodPrp()
    {
        return $this->blood_prp;
    }

    /**
     * Get the [blood_tc] column value.
     *
     * @return string
     */
    public function getBloodTc()
    {
        return $this->blood_tc;
    }

    /**
     * Get the [blood_ffp] column value.
     *
     * @return string
     */
    public function getBloodFfp()
    {
        return $this->blood_ffp;
    }

    /**
     * Get the [b_group_count] column value.
     *
     * @return int
     */
    public function getBGroupCount()
    {
        return $this->b_group_count;
    }

    /**
     * Get the [b_group_price] column value.
     *
     * @return double
     */
    public function getBGroupPrice()
    {
        return $this->b_group_price;
    }

    /**
     * Get the [a_subgroup_count] column value.
     *
     * @return int
     */
    public function getASubgroupCount()
    {
        return $this->a_subgroup_count;
    }

    /**
     * Get the [a_subgroup_price] column value.
     *
     * @return double
     */
    public function getASubgroupPrice()
    {
        return $this->a_subgroup_price;
    }

    /**
     * Get the [extra_factors_count] column value.
     *
     * @return int
     */
    public function getExtraFactorsCount()
    {
        return $this->extra_factors_count;
    }

    /**
     * Get the [extra_factors_price] column value.
     *
     * @return double
     */
    public function getExtraFactorsPrice()
    {
        return $this->extra_factors_price;
    }

    /**
     * Get the [coombs_count] column value.
     *
     * @return int
     */
    public function getCoombsCount()
    {
        return $this->coombs_count;
    }

    /**
     * Get the [coombs_price] column value.
     *
     * @return double
     */
    public function getCoombsPrice()
    {
        return $this->coombs_price;
    }

    /**
     * Get the [ab_test_count] column value.
     *
     * @return int
     */
    public function getAbTestCount()
    {
        return $this->ab_test_count;
    }

    /**
     * Get the [ab_test_price] column value.
     *
     * @return double
     */
    public function getAbTestPrice()
    {
        return $this->ab_test_price;
    }

    /**
     * Get the [crosstest_count] column value.
     *
     * @return int
     */
    public function getCrosstestCount()
    {
        return $this->crosstest_count;
    }

    /**
     * Get the [crosstest_price] column value.
     *
     * @return double
     */
    public function getCrosstestPrice()
    {
        return $this->crosstest_price;
    }

    /**
     * Get the [ab_diff_count] column value.
     *
     * @return int
     */
    public function getAbDiffCount()
    {
        return $this->ab_diff_count;
    }

    /**
     * Get the [ab_diff_price] column value.
     *
     * @return double
     */
    public function getAbDiffPrice()
    {
        return $this->ab_diff_price;
    }

    /**
     * Get the [x_test_1_code] column value.
     *
     * @return int
     */
    public function getXTest1Code()
    {
        return $this->x_test_1_code;
    }

    /**
     * Get the [x_test_1_name] column value.
     *
     * @return string
     */
    public function getXTest1Name()
    {
        return $this->x_test_1_name;
    }

    /**
     * Get the [x_test_1_count] column value.
     *
     * @return int
     */
    public function getXTest1Count()
    {
        return $this->x_test_1_count;
    }

    /**
     * Get the [x_test_1_price] column value.
     *
     * @return double
     */
    public function getXTest1Price()
    {
        return $this->x_test_1_price;
    }

    /**
     * Get the [x_test_2_code] column value.
     *
     * @return int
     */
    public function getXTest2Code()
    {
        return $this->x_test_2_code;
    }

    /**
     * Get the [x_test_2_name] column value.
     *
     * @return string
     */
    public function getXTest2Name()
    {
        return $this->x_test_2_name;
    }

    /**
     * Get the [x_test_2_count] column value.
     *
     * @return int
     */
    public function getXTest2Count()
    {
        return $this->x_test_2_count;
    }

    /**
     * Get the [x_test_2_price] column value.
     *
     * @return double
     */
    public function getXTest2Price()
    {
        return $this->x_test_2_price;
    }

    /**
     * Get the [x_test_3_code] column value.
     *
     * @return int
     */
    public function getXTest3Code()
    {
        return $this->x_test_3_code;
    }

    /**
     * Get the [x_test_3_name] column value.
     *
     * @return string
     */
    public function getXTest3Name()
    {
        return $this->x_test_3_name;
    }

    /**
     * Get the [x_test_3_count] column value.
     *
     * @return int
     */
    public function getXTest3Count()
    {
        return $this->x_test_3_count;
    }

    /**
     * Get the [x_test_3_price] column value.
     *
     * @return double
     */
    public function getXTest3Price()
    {
        return $this->x_test_3_price;
    }

    /**
     * Get the [optionally formatted] temporal [lab_stamp] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLabStamp($format = NULL)
    {
        if ($format === null) {
            return $this->lab_stamp;
        } else {
            return $this->lab_stamp instanceof \DateTimeInterface ? $this->lab_stamp->format($format) : null;
        }
    }

    /**
     * Get the [release_via] column value.
     *
     * @return string
     */
    public function getReleaseVia()
    {
        return $this->release_via;
    }

    /**
     * Get the [receipt_ack] column value.
     *
     * @return string
     */
    public function getReceiptAck()
    {
        return $this->receipt_ack;
    }

    /**
     * Get the [mainlog_nr] column value.
     *
     * @return string
     */
    public function getMainlogNr()
    {
        return $this->mainlog_nr;
    }

    /**
     * Get the [lab_nr] column value.
     *
     * @return string
     */
    public function getLabNr()
    {
        return $this->lab_nr;
    }

    /**
     * Get the [optionally formatted] temporal [mainlog_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getMainlogDate($format = NULL)
    {
        if ($format === null) {
            return $this->mainlog_date;
        } else {
            return $this->mainlog_date instanceof \DateTimeInterface ? $this->mainlog_date->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [lab_date] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLabDate($format = NULL)
    {
        if ($format === null) {
            return $this->lab_date;
        } else {
            return $this->lab_date instanceof \DateTimeInterface ? $this->lab_date->format($format) : null;
        }
    }

    /**
     * Get the [mainlog_sign] column value.
     *
     * @return string
     */
    public function getMainlogSign()
    {
        return $this->mainlog_sign;
    }

    /**
     * Get the [lab_sign] column value.
     *
     * @return string
     */
    public function getLabSign()
    {
        return $this->lab_sign;
    }

    /**
     * Get the [history] column value.
     *
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
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
     * Set the value of [batch_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBatchNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->batch_nr !== $v) {
            $this->batch_nr = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_BATCH_NR] = true;
        }

        return $this;
    } // setBatchNr()

    /**
     * Set the value of [encounter_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setEncounterNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->encounter_nr !== $v) {
            $this->encounter_nr = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_ENCOUNTER_NR] = true;
        }

        return $this;
    } // setEncounterNr()

    /**
     * Set the value of [dept_nr] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setDeptNr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dept_nr !== $v) {
            $this->dept_nr = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_DEPT_NR] = true;
        }

        return $this;
    } // setDeptNr()

    /**
     * Set the value of [blood_group] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBloodGroup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_group !== $v) {
            $this->blood_group = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_BLOOD_GROUP] = true;
        }

        return $this;
    } // setBloodGroup()

    /**
     * Set the value of [rh_factor] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setRhFactor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rh_factor !== $v) {
            $this->rh_factor = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_RH_FACTOR] = true;
        }

        return $this;
    } // setRhFactor()

    /**
     * Set the value of [kell] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setKell($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kell !== $v) {
            $this->kell = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_KELL] = true;
        }

        return $this;
    } // setKell()

    /**
     * Set the value of [date_protoc_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setDateProtocNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->date_protoc_nr !== $v) {
            $this->date_protoc_nr = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_DATE_PROTOC_NR] = true;
        }

        return $this;
    } // setDateProtocNr()

    /**
     * Set the value of [pure_blood] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setPureBlood($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pure_blood !== $v) {
            $this->pure_blood = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_PURE_BLOOD] = true;
        }

        return $this;
    } // setPureBlood()

    /**
     * Set the value of [red_blood] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setRedBlood($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->red_blood !== $v) {
            $this->red_blood = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_RED_BLOOD] = true;
        }

        return $this;
    } // setRedBlood()

    /**
     * Set the value of [leukoless_blood] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setLeukolessBlood($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->leukoless_blood !== $v) {
            $this->leukoless_blood = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_LEUKOLESS_BLOOD] = true;
        }

        return $this;
    } // setLeukolessBlood()

    /**
     * Set the value of [washed_blood] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setWashedBlood($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->washed_blood !== $v) {
            $this->washed_blood = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_WASHED_BLOOD] = true;
        }

        return $this;
    } // setWashedBlood()

    /**
     * Set the value of [prp_blood] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setPrpBlood($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prp_blood !== $v) {
            $this->prp_blood = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_PRP_BLOOD] = true;
        }

        return $this;
    } // setPrpBlood()

    /**
     * Set the value of [thrombo_con] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setThromboCon($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->thrombo_con !== $v) {
            $this->thrombo_con = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_THROMBO_CON] = true;
        }

        return $this;
    } // setThromboCon()

    /**
     * Set the value of [ffp_plasma] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setFfpPlasma($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ffp_plasma !== $v) {
            $this->ffp_plasma = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_FFP_PLASMA] = true;
        }

        return $this;
    } // setFfpPlasma()

    /**
     * Set the value of [transfusion_dev] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setTransfusionDev($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->transfusion_dev !== $v) {
            $this->transfusion_dev = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_TRANSFUSION_DEV] = true;
        }

        return $this;
    } // setTransfusionDev()

    /**
     * Set the value of [match_sample] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setMatchSample($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->match_sample !== $v) {
            $this->match_sample = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_MATCH_SAMPLE] = true;
        }

        return $this;
    } // setMatchSample()

    /**
     * Sets the value of [transfusion_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setTransfusionDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->transfusion_date !== null || $dt !== null) {
            if ( ($dt != $this->transfusion_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->transfusion_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestBloodTableMap::COL_TRANSFUSION_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setTransfusionDate()

    /**
     * Set the value of [diagnosis] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setDiagnosis($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->diagnosis !== $v) {
            $this->diagnosis = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_DIAGNOSIS] = true;
        }

        return $this;
    } // setDiagnosis()

    /**
     * Set the value of [notes] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setNotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->notes !== $v) {
            $this->notes = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_NOTES] = true;
        }

        return $this;
    } // setNotes()

    /**
     * Sets the value of [send_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setSendDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->send_date !== null || $dt !== null) {
            if ( ($dt != $this->send_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->send_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestBloodTableMap::COL_SEND_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setSendDate()

    /**
     * Set the value of [doctor] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setDoctor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doctor !== $v) {
            $this->doctor = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_DOCTOR] = true;
        }

        return $this;
    } // setDoctor()

    /**
     * Set the value of [phone_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setPhoneNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone_nr !== $v) {
            $this->phone_nr = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_PHONE_NR] = true;
        }

        return $this;
    } // setPhoneNr()

    /**
     * Set the value of [status] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [blood_pb] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBloodPb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_pb !== $v) {
            $this->blood_pb = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_BLOOD_PB] = true;
        }

        return $this;
    } // setBloodPb()

    /**
     * Set the value of [blood_rb] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBloodRb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_rb !== $v) {
            $this->blood_rb = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_BLOOD_RB] = true;
        }

        return $this;
    } // setBloodRb()

    /**
     * Set the value of [blood_llrb] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBloodLlrb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_llrb !== $v) {
            $this->blood_llrb = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_BLOOD_LLRB] = true;
        }

        return $this;
    } // setBloodLlrb()

    /**
     * Set the value of [blood_wrb] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBloodWrb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_wrb !== $v) {
            $this->blood_wrb = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_BLOOD_WRB] = true;
        }

        return $this;
    } // setBloodWrb()

    /**
     * Set the value of [blood_prp] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBloodPrp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_prp !== $v) {
            $this->blood_prp = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_BLOOD_PRP] = true;
        }

        return $this;
    } // setBloodPrp()

    /**
     * Set the value of [blood_tc] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBloodTc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_tc !== $v) {
            $this->blood_tc = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_BLOOD_TC] = true;
        }

        return $this;
    } // setBloodTc()

    /**
     * Set the value of [blood_ffp] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBloodFfp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_ffp !== $v) {
            $this->blood_ffp = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_BLOOD_FFP] = true;
        }

        return $this;
    } // setBloodFfp()

    /**
     * Set the value of [b_group_count] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBGroupCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->b_group_count !== $v) {
            $this->b_group_count = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_B_GROUP_COUNT] = true;
        }

        return $this;
    } // setBGroupCount()

    /**
     * Set the value of [b_group_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setBGroupPrice($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->b_group_price !== $v) {
            $this->b_group_price = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_B_GROUP_PRICE] = true;
        }

        return $this;
    } // setBGroupPrice()

    /**
     * Set the value of [a_subgroup_count] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setASubgroupCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->a_subgroup_count !== $v) {
            $this->a_subgroup_count = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_A_SUBGROUP_COUNT] = true;
        }

        return $this;
    } // setASubgroupCount()

    /**
     * Set the value of [a_subgroup_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setASubgroupPrice($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->a_subgroup_price !== $v) {
            $this->a_subgroup_price = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_A_SUBGROUP_PRICE] = true;
        }

        return $this;
    } // setASubgroupPrice()

    /**
     * Set the value of [extra_factors_count] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setExtraFactorsCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->extra_factors_count !== $v) {
            $this->extra_factors_count = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_COUNT] = true;
        }

        return $this;
    } // setExtraFactorsCount()

    /**
     * Set the value of [extra_factors_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setExtraFactorsPrice($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->extra_factors_price !== $v) {
            $this->extra_factors_price = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_PRICE] = true;
        }

        return $this;
    } // setExtraFactorsPrice()

    /**
     * Set the value of [coombs_count] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setCoombsCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->coombs_count !== $v) {
            $this->coombs_count = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_COOMBS_COUNT] = true;
        }

        return $this;
    } // setCoombsCount()

    /**
     * Set the value of [coombs_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setCoombsPrice($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->coombs_price !== $v) {
            $this->coombs_price = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_COOMBS_PRICE] = true;
        }

        return $this;
    } // setCoombsPrice()

    /**
     * Set the value of [ab_test_count] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setAbTestCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->ab_test_count !== $v) {
            $this->ab_test_count = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_AB_TEST_COUNT] = true;
        }

        return $this;
    } // setAbTestCount()

    /**
     * Set the value of [ab_test_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setAbTestPrice($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->ab_test_price !== $v) {
            $this->ab_test_price = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_AB_TEST_PRICE] = true;
        }

        return $this;
    } // setAbTestPrice()

    /**
     * Set the value of [crosstest_count] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setCrosstestCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->crosstest_count !== $v) {
            $this->crosstest_count = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_CROSSTEST_COUNT] = true;
        }

        return $this;
    } // setCrosstestCount()

    /**
     * Set the value of [crosstest_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setCrosstestPrice($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->crosstest_price !== $v) {
            $this->crosstest_price = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_CROSSTEST_PRICE] = true;
        }

        return $this;
    } // setCrosstestPrice()

    /**
     * Set the value of [ab_diff_count] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setAbDiffCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->ab_diff_count !== $v) {
            $this->ab_diff_count = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_AB_DIFF_COUNT] = true;
        }

        return $this;
    } // setAbDiffCount()

    /**
     * Set the value of [ab_diff_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setAbDiffPrice($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->ab_diff_price !== $v) {
            $this->ab_diff_price = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_AB_DIFF_PRICE] = true;
        }

        return $this;
    } // setAbDiffPrice()

    /**
     * Set the value of [x_test_1_code] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest1Code($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->x_test_1_code !== $v) {
            $this->x_test_1_code = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_1_CODE] = true;
        }

        return $this;
    } // setXTest1Code()

    /**
     * Set the value of [x_test_1_name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest1Name($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->x_test_1_name !== $v) {
            $this->x_test_1_name = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_1_NAME] = true;
        }

        return $this;
    } // setXTest1Name()

    /**
     * Set the value of [x_test_1_count] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest1Count($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->x_test_1_count !== $v) {
            $this->x_test_1_count = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_1_COUNT] = true;
        }

        return $this;
    } // setXTest1Count()

    /**
     * Set the value of [x_test_1_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest1Price($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->x_test_1_price !== $v) {
            $this->x_test_1_price = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_1_PRICE] = true;
        }

        return $this;
    } // setXTest1Price()

    /**
     * Set the value of [x_test_2_code] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest2Code($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->x_test_2_code !== $v) {
            $this->x_test_2_code = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_2_CODE] = true;
        }

        return $this;
    } // setXTest2Code()

    /**
     * Set the value of [x_test_2_name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest2Name($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->x_test_2_name !== $v) {
            $this->x_test_2_name = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_2_NAME] = true;
        }

        return $this;
    } // setXTest2Name()

    /**
     * Set the value of [x_test_2_count] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest2Count($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->x_test_2_count !== $v) {
            $this->x_test_2_count = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_2_COUNT] = true;
        }

        return $this;
    } // setXTest2Count()

    /**
     * Set the value of [x_test_2_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest2Price($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->x_test_2_price !== $v) {
            $this->x_test_2_price = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_2_PRICE] = true;
        }

        return $this;
    } // setXTest2Price()

    /**
     * Set the value of [x_test_3_code] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest3Code($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->x_test_3_code !== $v) {
            $this->x_test_3_code = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_3_CODE] = true;
        }

        return $this;
    } // setXTest3Code()

    /**
     * Set the value of [x_test_3_name] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest3Name($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->x_test_3_name !== $v) {
            $this->x_test_3_name = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_3_NAME] = true;
        }

        return $this;
    } // setXTest3Name()

    /**
     * Set the value of [x_test_3_count] column.
     *
     * @param int $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest3Count($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->x_test_3_count !== $v) {
            $this->x_test_3_count = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_3_COUNT] = true;
        }

        return $this;
    } // setXTest3Count()

    /**
     * Set the value of [x_test_3_price] column.
     *
     * @param double $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setXTest3Price($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->x_test_3_price !== $v) {
            $this->x_test_3_price = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_X_TEST_3_PRICE] = true;
        }

        return $this;
    } // setXTest3Price()

    /**
     * Sets the value of [lab_stamp] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setLabStamp($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lab_stamp !== null || $dt !== null) {
            if ( ($dt != $this->lab_stamp) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->lab_stamp = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestBloodTableMap::COL_LAB_STAMP] = true;
            }
        } // if either are not null

        return $this;
    } // setLabStamp()

    /**
     * Set the value of [release_via] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setReleaseVia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->release_via !== $v) {
            $this->release_via = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_RELEASE_VIA] = true;
        }

        return $this;
    } // setReleaseVia()

    /**
     * Set the value of [receipt_ack] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setReceiptAck($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->receipt_ack !== $v) {
            $this->receipt_ack = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_RECEIPT_ACK] = true;
        }

        return $this;
    } // setReceiptAck()

    /**
     * Set the value of [mainlog_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setMainlogNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mainlog_nr !== $v) {
            $this->mainlog_nr = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_MAINLOG_NR] = true;
        }

        return $this;
    } // setMainlogNr()

    /**
     * Set the value of [lab_nr] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setLabNr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lab_nr !== $v) {
            $this->lab_nr = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_LAB_NR] = true;
        }

        return $this;
    } // setLabNr()

    /**
     * Sets the value of [mainlog_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setMainlogDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->mainlog_date !== null || $dt !== null) {
            if ( ($dt != $this->mainlog_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->mainlog_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestBloodTableMap::COL_MAINLOG_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setMainlogDate()

    /**
     * Sets the value of [lab_date] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setLabDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lab_date !== null || $dt !== null) {
            if ( ($dt != $this->lab_date) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->lab_date = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestBloodTableMap::COL_LAB_DATE] = true;
            }
        } // if either are not null

        return $this;
    } // setLabDate()

    /**
     * Set the value of [mainlog_sign] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setMainlogSign($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mainlog_sign !== $v) {
            $this->mainlog_sign = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_MAINLOG_SIGN] = true;
        }

        return $this;
    } // setMainlogSign()

    /**
     * Set the value of [lab_sign] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setLabSign($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lab_sign !== $v) {
            $this->lab_sign = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_LAB_SIGN] = true;
        }

        return $this;
    } // setLabSign()

    /**
     * Set the value of [history] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setHistory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->history !== $v) {
            $this->history = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_HISTORY] = true;
        }

        return $this;
    } // setHistory()

    /**
     * Set the value of [modify_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setModifyId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modify_id !== $v) {
            $this->modify_id = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_MODIFY_ID] = true;
        }

        return $this;
    } // setModifyId()

    /**
     * Sets the value of [modify_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setModifyTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modify_time !== null || $dt !== null) {
            if ($this->modify_time === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->modify_time->format("Y-m-d H:i:s.u")) {
                $this->modify_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestBloodTableMap::COL_MODIFY_TIME] = true;
            }
        } // if either are not null

        return $this;
    } // setModifyTime()

    /**
     * Set the value of [create_id] column.
     *
     * @param string $v new value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setCreateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->create_id !== $v) {
            $this->create_id = $v;
            $this->modifiedColumns[CareTestRequestBloodTableMap::COL_CREATE_ID] = true;
        }

        return $this;
    } // setCreateId()

    /**
     * Sets the value of [create_time] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object (for fluent API support)
     */
    public function setCreateTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_time !== null || $dt !== null) {
            if ( ($dt != $this->create_time) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s.u') === NULL) // or the entered value matches the default
                 ) {
                $this->create_time = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CareTestRequestBloodTableMap::COL_CREATE_TIME] = true;
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
            if ($this->encounter_nr !== 0) {
                return false;
            }

            if ($this->dept_nr !== 0) {
                return false;
            }

            if ($this->blood_group !== '') {
                return false;
            }

            if ($this->rh_factor !== '') {
                return false;
            }

            if ($this->kell !== '') {
                return false;
            }

            if ($this->date_protoc_nr !== '') {
                return false;
            }

            if ($this->pure_blood !== '') {
                return false;
            }

            if ($this->red_blood !== '') {
                return false;
            }

            if ($this->leukoless_blood !== '') {
                return false;
            }

            if ($this->washed_blood !== '') {
                return false;
            }

            if ($this->prp_blood !== '') {
                return false;
            }

            if ($this->thrombo_con !== '') {
                return false;
            }

            if ($this->ffp_plasma !== '') {
                return false;
            }

            if ($this->transfusion_dev !== '') {
                return false;
            }

            if ($this->match_sample !== 0) {
                return false;
            }

            if ($this->transfusion_date && $this->transfusion_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->send_date && $this->send_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->doctor !== '') {
                return false;
            }

            if ($this->phone_nr !== '') {
                return false;
            }

            if ($this->status !== '') {
                return false;
            }

            if ($this->b_group_count !== 0) {
                return false;
            }

            if ($this->b_group_price !== 0.0) {
                return false;
            }

            if ($this->a_subgroup_count !== 0) {
                return false;
            }

            if ($this->a_subgroup_price !== 0.0) {
                return false;
            }

            if ($this->extra_factors_count !== 0) {
                return false;
            }

            if ($this->extra_factors_price !== 0.0) {
                return false;
            }

            if ($this->coombs_count !== 0) {
                return false;
            }

            if ($this->coombs_price !== 0.0) {
                return false;
            }

            if ($this->ab_test_count !== 0) {
                return false;
            }

            if ($this->ab_test_price !== 0.0) {
                return false;
            }

            if ($this->crosstest_count !== 0) {
                return false;
            }

            if ($this->crosstest_price !== 0.0) {
                return false;
            }

            if ($this->ab_diff_count !== 0) {
                return false;
            }

            if ($this->ab_diff_price !== 0.0) {
                return false;
            }

            if ($this->x_test_1_code !== 0) {
                return false;
            }

            if ($this->x_test_1_name !== '') {
                return false;
            }

            if ($this->x_test_1_count !== 0) {
                return false;
            }

            if ($this->x_test_1_price !== 0.0) {
                return false;
            }

            if ($this->x_test_2_code !== 0) {
                return false;
            }

            if ($this->x_test_2_name !== '') {
                return false;
            }

            if ($this->x_test_2_count !== 0) {
                return false;
            }

            if ($this->x_test_2_price !== 0.0) {
                return false;
            }

            if ($this->x_test_3_code !== 0) {
                return false;
            }

            if ($this->x_test_3_name !== '') {
                return false;
            }

            if ($this->x_test_3_count !== 0) {
                return false;
            }

            if ($this->x_test_3_price !== 0.0) {
                return false;
            }

            if ($this->lab_stamp && $this->lab_stamp->format('Y-m-d H:i:s.u') !== NULL) {
                return false;
            }

            if ($this->release_via !== '') {
                return false;
            }

            if ($this->receipt_ack !== '') {
                return false;
            }

            if ($this->mainlog_nr !== '') {
                return false;
            }

            if ($this->lab_nr !== '') {
                return false;
            }

            if ($this->mainlog_date && $this->mainlog_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->lab_date && $this->lab_date->format('Y-m-d') !== NULL) {
                return false;
            }

            if ($this->mainlog_sign !== '') {
                return false;
            }

            if ($this->lab_sign !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BatchNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->batch_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CareTestRequestBloodTableMap::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->encounter_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CareTestRequestBloodTableMap::translateFieldName('DeptNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dept_nr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BloodGroup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_group = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CareTestRequestBloodTableMap::translateFieldName('RhFactor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rh_factor = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CareTestRequestBloodTableMap::translateFieldName('Kell', TableMap::TYPE_PHPNAME, $indexType)];
            $this->kell = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CareTestRequestBloodTableMap::translateFieldName('DateProtocNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->date_protoc_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CareTestRequestBloodTableMap::translateFieldName('PureBlood', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pure_blood = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CareTestRequestBloodTableMap::translateFieldName('RedBlood', TableMap::TYPE_PHPNAME, $indexType)];
            $this->red_blood = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CareTestRequestBloodTableMap::translateFieldName('LeukolessBlood', TableMap::TYPE_PHPNAME, $indexType)];
            $this->leukoless_blood = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CareTestRequestBloodTableMap::translateFieldName('WashedBlood', TableMap::TYPE_PHPNAME, $indexType)];
            $this->washed_blood = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CareTestRequestBloodTableMap::translateFieldName('PrpBlood', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prp_blood = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CareTestRequestBloodTableMap::translateFieldName('ThromboCon', TableMap::TYPE_PHPNAME, $indexType)];
            $this->thrombo_con = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CareTestRequestBloodTableMap::translateFieldName('FfpPlasma', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ffp_plasma = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CareTestRequestBloodTableMap::translateFieldName('TransfusionDev', TableMap::TYPE_PHPNAME, $indexType)];
            $this->transfusion_dev = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CareTestRequestBloodTableMap::translateFieldName('MatchSample', TableMap::TYPE_PHPNAME, $indexType)];
            $this->match_sample = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CareTestRequestBloodTableMap::translateFieldName('TransfusionDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->transfusion_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CareTestRequestBloodTableMap::translateFieldName('Diagnosis', TableMap::TYPE_PHPNAME, $indexType)];
            $this->diagnosis = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CareTestRequestBloodTableMap::translateFieldName('Notes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->notes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CareTestRequestBloodTableMap::translateFieldName('SendDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->send_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CareTestRequestBloodTableMap::translateFieldName('Doctor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doctor = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CareTestRequestBloodTableMap::translateFieldName('PhoneNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CareTestRequestBloodTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BloodPb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_pb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BloodRb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_rb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BloodLlrb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_llrb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BloodWrb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_wrb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BloodPrp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_prp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BloodTc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_tc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BloodFfp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->blood_ffp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BGroupCount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->b_group_count = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CareTestRequestBloodTableMap::translateFieldName('BGroupPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->b_group_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CareTestRequestBloodTableMap::translateFieldName('ASubgroupCount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->a_subgroup_count = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CareTestRequestBloodTableMap::translateFieldName('ASubgroupPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->a_subgroup_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CareTestRequestBloodTableMap::translateFieldName('ExtraFactorsCount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->extra_factors_count = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CareTestRequestBloodTableMap::translateFieldName('ExtraFactorsPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->extra_factors_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CareTestRequestBloodTableMap::translateFieldName('CoombsCount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->coombs_count = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CareTestRequestBloodTableMap::translateFieldName('CoombsPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->coombs_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CareTestRequestBloodTableMap::translateFieldName('AbTestCount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ab_test_count = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CareTestRequestBloodTableMap::translateFieldName('AbTestPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ab_test_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : CareTestRequestBloodTableMap::translateFieldName('CrosstestCount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->crosstest_count = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : CareTestRequestBloodTableMap::translateFieldName('CrosstestPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->crosstest_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : CareTestRequestBloodTableMap::translateFieldName('AbDiffCount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ab_diff_count = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : CareTestRequestBloodTableMap::translateFieldName('AbDiffPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ab_diff_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest1Code', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_1_code = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest1Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_1_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest1Count', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_1_count = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest1Price', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_1_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest2Code', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_2_code = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest2Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_2_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest2Count', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_2_count = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest2Price', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_2_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest3Code', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_3_code = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest3Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_3_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest3Count', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_3_count = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : CareTestRequestBloodTableMap::translateFieldName('XTest3Price', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x_test_3_price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : CareTestRequestBloodTableMap::translateFieldName('LabStamp', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->lab_stamp = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : CareTestRequestBloodTableMap::translateFieldName('ReleaseVia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->release_via = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : CareTestRequestBloodTableMap::translateFieldName('ReceiptAck', TableMap::TYPE_PHPNAME, $indexType)];
            $this->receipt_ack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : CareTestRequestBloodTableMap::translateFieldName('MainlogNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mainlog_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : CareTestRequestBloodTableMap::translateFieldName('LabNr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lab_nr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : CareTestRequestBloodTableMap::translateFieldName('MainlogDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->mainlog_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : CareTestRequestBloodTableMap::translateFieldName('LabDate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->lab_date = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : CareTestRequestBloodTableMap::translateFieldName('MainlogSign', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mainlog_sign = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : CareTestRequestBloodTableMap::translateFieldName('LabSign', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lab_sign = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : CareTestRequestBloodTableMap::translateFieldName('History', TableMap::TYPE_PHPNAME, $indexType)];
            $this->history = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : CareTestRequestBloodTableMap::translateFieldName('ModifyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->modify_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : CareTestRequestBloodTableMap::translateFieldName('ModifyTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->modify_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : CareTestRequestBloodTableMap::translateFieldName('CreateId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->create_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : CareTestRequestBloodTableMap::translateFieldName('CreateTime', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->create_time = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 70; // 70 = CareTestRequestBloodTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CareMd\\CareMd\\CareTestRequestBlood'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestBloodTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCareTestRequestBloodQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CareTestRequestBlood::setDeleted()
     * @see CareTestRequestBlood::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestBloodTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCareTestRequestBloodQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestBloodTableMap::DATABASE_NAME);
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
                CareTestRequestBloodTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[CareTestRequestBloodTableMap::COL_BATCH_NR] = true;
        if (null !== $this->batch_nr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CareTestRequestBloodTableMap::COL_BATCH_NR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BATCH_NR)) {
            $modifiedColumns[':p' . $index++]  = 'batch_nr';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_ENCOUNTER_NR)) {
            $modifiedColumns[':p' . $index++]  = 'encounter_nr';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_DEPT_NR)) {
            $modifiedColumns[':p' . $index++]  = 'dept_nr';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_GROUP)) {
            $modifiedColumns[':p' . $index++]  = 'blood_group';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_RH_FACTOR)) {
            $modifiedColumns[':p' . $index++]  = 'rh_factor';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_KELL)) {
            $modifiedColumns[':p' . $index++]  = 'kell';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_DATE_PROTOC_NR)) {
            $modifiedColumns[':p' . $index++]  = 'date_protoc_nr';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_PURE_BLOOD)) {
            $modifiedColumns[':p' . $index++]  = 'pure_blood';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_RED_BLOOD)) {
            $modifiedColumns[':p' . $index++]  = 'red_blood';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_LEUKOLESS_BLOOD)) {
            $modifiedColumns[':p' . $index++]  = 'leukoless_blood';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_WASHED_BLOOD)) {
            $modifiedColumns[':p' . $index++]  = 'washed_blood';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_PRP_BLOOD)) {
            $modifiedColumns[':p' . $index++]  = 'prp_blood';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_THROMBO_CON)) {
            $modifiedColumns[':p' . $index++]  = 'thrombo_con';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_FFP_PLASMA)) {
            $modifiedColumns[':p' . $index++]  = 'ffp_plasma';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_TRANSFUSION_DEV)) {
            $modifiedColumns[':p' . $index++]  = 'transfusion_dev';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MATCH_SAMPLE)) {
            $modifiedColumns[':p' . $index++]  = 'match_sample';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_TRANSFUSION_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'transfusion_date';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_DIAGNOSIS)) {
            $modifiedColumns[':p' . $index++]  = 'diagnosis';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_NOTES)) {
            $modifiedColumns[':p' . $index++]  = 'notes';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_SEND_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'send_date';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_DOCTOR)) {
            $modifiedColumns[':p' . $index++]  = 'doctor';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_PHONE_NR)) {
            $modifiedColumns[':p' . $index++]  = 'phone_nr';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_PB)) {
            $modifiedColumns[':p' . $index++]  = 'blood_pb';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_RB)) {
            $modifiedColumns[':p' . $index++]  = 'blood_rb';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_LLRB)) {
            $modifiedColumns[':p' . $index++]  = 'blood_llrb';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_WRB)) {
            $modifiedColumns[':p' . $index++]  = 'blood_wrb';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_PRP)) {
            $modifiedColumns[':p' . $index++]  = 'blood_prp';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_TC)) {
            $modifiedColumns[':p' . $index++]  = 'blood_tc';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_FFP)) {
            $modifiedColumns[':p' . $index++]  = 'blood_ffp';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_B_GROUP_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'b_group_count';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_B_GROUP_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'b_group_price';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_A_SUBGROUP_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'a_subgroup_count';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_A_SUBGROUP_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'a_subgroup_price';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'extra_factors_count';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'extra_factors_price';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_COOMBS_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'coombs_count';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_COOMBS_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'coombs_price';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_AB_TEST_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'ab_test_count';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_AB_TEST_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'ab_test_price';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_CROSSTEST_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'crosstest_count';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_CROSSTEST_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'crosstest_price';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_AB_DIFF_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'ab_diff_count';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_AB_DIFF_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'ab_diff_price';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_1_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_1_code';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_1_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_1_name';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_1_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_1_count';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_1_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_1_price';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_2_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_2_code';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_2_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_2_name';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_2_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_2_count';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_2_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_2_price';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_3_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_3_code';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_3_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_3_name';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_3_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_3_count';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_3_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'x_test_3_price';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_LAB_STAMP)) {
            $modifiedColumns[':p' . $index++]  = 'lab_stamp';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_RELEASE_VIA)) {
            $modifiedColumns[':p' . $index++]  = 'release_via';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_RECEIPT_ACK)) {
            $modifiedColumns[':p' . $index++]  = 'receipt_ack';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MAINLOG_NR)) {
            $modifiedColumns[':p' . $index++]  = 'mainlog_nr';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_LAB_NR)) {
            $modifiedColumns[':p' . $index++]  = 'lab_nr';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MAINLOG_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'mainlog_date';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_LAB_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'lab_date';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MAINLOG_SIGN)) {
            $modifiedColumns[':p' . $index++]  = 'mainlog_sign';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_LAB_SIGN)) {
            $modifiedColumns[':p' . $index++]  = 'lab_sign';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_HISTORY)) {
            $modifiedColumns[':p' . $index++]  = 'history';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MODIFY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'modify_id';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MODIFY_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'modify_time';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_CREATE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'create_id';
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_CREATE_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'create_time';
        }

        $sql = sprintf(
            'INSERT INTO care_test_request_blood (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'batch_nr':
                        $stmt->bindValue($identifier, $this->batch_nr, PDO::PARAM_INT);
                        break;
                    case 'encounter_nr':
                        $stmt->bindValue($identifier, $this->encounter_nr, PDO::PARAM_INT);
                        break;
                    case 'dept_nr':
                        $stmt->bindValue($identifier, $this->dept_nr, PDO::PARAM_INT);
                        break;
                    case 'blood_group':
                        $stmt->bindValue($identifier, $this->blood_group, PDO::PARAM_STR);
                        break;
                    case 'rh_factor':
                        $stmt->bindValue($identifier, $this->rh_factor, PDO::PARAM_STR);
                        break;
                    case 'kell':
                        $stmt->bindValue($identifier, $this->kell, PDO::PARAM_STR);
                        break;
                    case 'date_protoc_nr':
                        $stmt->bindValue($identifier, $this->date_protoc_nr, PDO::PARAM_STR);
                        break;
                    case 'pure_blood':
                        $stmt->bindValue($identifier, $this->pure_blood, PDO::PARAM_STR);
                        break;
                    case 'red_blood':
                        $stmt->bindValue($identifier, $this->red_blood, PDO::PARAM_STR);
                        break;
                    case 'leukoless_blood':
                        $stmt->bindValue($identifier, $this->leukoless_blood, PDO::PARAM_STR);
                        break;
                    case 'washed_blood':
                        $stmt->bindValue($identifier, $this->washed_blood, PDO::PARAM_STR);
                        break;
                    case 'prp_blood':
                        $stmt->bindValue($identifier, $this->prp_blood, PDO::PARAM_STR);
                        break;
                    case 'thrombo_con':
                        $stmt->bindValue($identifier, $this->thrombo_con, PDO::PARAM_STR);
                        break;
                    case 'ffp_plasma':
                        $stmt->bindValue($identifier, $this->ffp_plasma, PDO::PARAM_STR);
                        break;
                    case 'transfusion_dev':
                        $stmt->bindValue($identifier, $this->transfusion_dev, PDO::PARAM_STR);
                        break;
                    case 'match_sample':
                        $stmt->bindValue($identifier, $this->match_sample, PDO::PARAM_INT);
                        break;
                    case 'transfusion_date':
                        $stmt->bindValue($identifier, $this->transfusion_date ? $this->transfusion_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'diagnosis':
                        $stmt->bindValue($identifier, $this->diagnosis, PDO::PARAM_STR);
                        break;
                    case 'notes':
                        $stmt->bindValue($identifier, $this->notes, PDO::PARAM_STR);
                        break;
                    case 'send_date':
                        $stmt->bindValue($identifier, $this->send_date ? $this->send_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'doctor':
                        $stmt->bindValue($identifier, $this->doctor, PDO::PARAM_STR);
                        break;
                    case 'phone_nr':
                        $stmt->bindValue($identifier, $this->phone_nr, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'blood_pb':
                        $stmt->bindValue($identifier, $this->blood_pb, PDO::PARAM_STR);
                        break;
                    case 'blood_rb':
                        $stmt->bindValue($identifier, $this->blood_rb, PDO::PARAM_STR);
                        break;
                    case 'blood_llrb':
                        $stmt->bindValue($identifier, $this->blood_llrb, PDO::PARAM_STR);
                        break;
                    case 'blood_wrb':
                        $stmt->bindValue($identifier, $this->blood_wrb, PDO::PARAM_STR);
                        break;
                    case 'blood_prp':
                        $stmt->bindValue($identifier, $this->blood_prp, PDO::PARAM_STR);
                        break;
                    case 'blood_tc':
                        $stmt->bindValue($identifier, $this->blood_tc, PDO::PARAM_STR);
                        break;
                    case 'blood_ffp':
                        $stmt->bindValue($identifier, $this->blood_ffp, PDO::PARAM_STR);
                        break;
                    case 'b_group_count':
                        $stmt->bindValue($identifier, $this->b_group_count, PDO::PARAM_INT);
                        break;
                    case 'b_group_price':
                        $stmt->bindValue($identifier, $this->b_group_price, PDO::PARAM_STR);
                        break;
                    case 'a_subgroup_count':
                        $stmt->bindValue($identifier, $this->a_subgroup_count, PDO::PARAM_INT);
                        break;
                    case 'a_subgroup_price':
                        $stmt->bindValue($identifier, $this->a_subgroup_price, PDO::PARAM_STR);
                        break;
                    case 'extra_factors_count':
                        $stmt->bindValue($identifier, $this->extra_factors_count, PDO::PARAM_INT);
                        break;
                    case 'extra_factors_price':
                        $stmt->bindValue($identifier, $this->extra_factors_price, PDO::PARAM_STR);
                        break;
                    case 'coombs_count':
                        $stmt->bindValue($identifier, $this->coombs_count, PDO::PARAM_INT);
                        break;
                    case 'coombs_price':
                        $stmt->bindValue($identifier, $this->coombs_price, PDO::PARAM_STR);
                        break;
                    case 'ab_test_count':
                        $stmt->bindValue($identifier, $this->ab_test_count, PDO::PARAM_INT);
                        break;
                    case 'ab_test_price':
                        $stmt->bindValue($identifier, $this->ab_test_price, PDO::PARAM_STR);
                        break;
                    case 'crosstest_count':
                        $stmt->bindValue($identifier, $this->crosstest_count, PDO::PARAM_INT);
                        break;
                    case 'crosstest_price':
                        $stmt->bindValue($identifier, $this->crosstest_price, PDO::PARAM_STR);
                        break;
                    case 'ab_diff_count':
                        $stmt->bindValue($identifier, $this->ab_diff_count, PDO::PARAM_INT);
                        break;
                    case 'ab_diff_price':
                        $stmt->bindValue($identifier, $this->ab_diff_price, PDO::PARAM_STR);
                        break;
                    case 'x_test_1_code':
                        $stmt->bindValue($identifier, $this->x_test_1_code, PDO::PARAM_INT);
                        break;
                    case 'x_test_1_name':
                        $stmt->bindValue($identifier, $this->x_test_1_name, PDO::PARAM_STR);
                        break;
                    case 'x_test_1_count':
                        $stmt->bindValue($identifier, $this->x_test_1_count, PDO::PARAM_INT);
                        break;
                    case 'x_test_1_price':
                        $stmt->bindValue($identifier, $this->x_test_1_price, PDO::PARAM_STR);
                        break;
                    case 'x_test_2_code':
                        $stmt->bindValue($identifier, $this->x_test_2_code, PDO::PARAM_INT);
                        break;
                    case 'x_test_2_name':
                        $stmt->bindValue($identifier, $this->x_test_2_name, PDO::PARAM_STR);
                        break;
                    case 'x_test_2_count':
                        $stmt->bindValue($identifier, $this->x_test_2_count, PDO::PARAM_INT);
                        break;
                    case 'x_test_2_price':
                        $stmt->bindValue($identifier, $this->x_test_2_price, PDO::PARAM_STR);
                        break;
                    case 'x_test_3_code':
                        $stmt->bindValue($identifier, $this->x_test_3_code, PDO::PARAM_INT);
                        break;
                    case 'x_test_3_name':
                        $stmt->bindValue($identifier, $this->x_test_3_name, PDO::PARAM_STR);
                        break;
                    case 'x_test_3_count':
                        $stmt->bindValue($identifier, $this->x_test_3_count, PDO::PARAM_INT);
                        break;
                    case 'x_test_3_price':
                        $stmt->bindValue($identifier, $this->x_test_3_price, PDO::PARAM_STR);
                        break;
                    case 'lab_stamp':
                        $stmt->bindValue($identifier, $this->lab_stamp ? $this->lab_stamp->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'release_via':
                        $stmt->bindValue($identifier, $this->release_via, PDO::PARAM_STR);
                        break;
                    case 'receipt_ack':
                        $stmt->bindValue($identifier, $this->receipt_ack, PDO::PARAM_STR);
                        break;
                    case 'mainlog_nr':
                        $stmt->bindValue($identifier, $this->mainlog_nr, PDO::PARAM_STR);
                        break;
                    case 'lab_nr':
                        $stmt->bindValue($identifier, $this->lab_nr, PDO::PARAM_STR);
                        break;
                    case 'mainlog_date':
                        $stmt->bindValue($identifier, $this->mainlog_date ? $this->mainlog_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'lab_date':
                        $stmt->bindValue($identifier, $this->lab_date ? $this->lab_date->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'mainlog_sign':
                        $stmt->bindValue($identifier, $this->mainlog_sign, PDO::PARAM_STR);
                        break;
                    case 'lab_sign':
                        $stmt->bindValue($identifier, $this->lab_sign, PDO::PARAM_STR);
                        break;
                    case 'history':
                        $stmt->bindValue($identifier, $this->history, PDO::PARAM_STR);
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
        $this->setBatchNr($pk);

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
        $pos = CareTestRequestBloodTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getBatchNr();
                break;
            case 1:
                return $this->getEncounterNr();
                break;
            case 2:
                return $this->getDeptNr();
                break;
            case 3:
                return $this->getBloodGroup();
                break;
            case 4:
                return $this->getRhFactor();
                break;
            case 5:
                return $this->getKell();
                break;
            case 6:
                return $this->getDateProtocNr();
                break;
            case 7:
                return $this->getPureBlood();
                break;
            case 8:
                return $this->getRedBlood();
                break;
            case 9:
                return $this->getLeukolessBlood();
                break;
            case 10:
                return $this->getWashedBlood();
                break;
            case 11:
                return $this->getPrpBlood();
                break;
            case 12:
                return $this->getThromboCon();
                break;
            case 13:
                return $this->getFfpPlasma();
                break;
            case 14:
                return $this->getTransfusionDev();
                break;
            case 15:
                return $this->getMatchSample();
                break;
            case 16:
                return $this->getTransfusionDate();
                break;
            case 17:
                return $this->getDiagnosis();
                break;
            case 18:
                return $this->getNotes();
                break;
            case 19:
                return $this->getSendDate();
                break;
            case 20:
                return $this->getDoctor();
                break;
            case 21:
                return $this->getPhoneNr();
                break;
            case 22:
                return $this->getStatus();
                break;
            case 23:
                return $this->getBloodPb();
                break;
            case 24:
                return $this->getBloodRb();
                break;
            case 25:
                return $this->getBloodLlrb();
                break;
            case 26:
                return $this->getBloodWrb();
                break;
            case 27:
                return $this->getBloodPrp();
                break;
            case 28:
                return $this->getBloodTc();
                break;
            case 29:
                return $this->getBloodFfp();
                break;
            case 30:
                return $this->getBGroupCount();
                break;
            case 31:
                return $this->getBGroupPrice();
                break;
            case 32:
                return $this->getASubgroupCount();
                break;
            case 33:
                return $this->getASubgroupPrice();
                break;
            case 34:
                return $this->getExtraFactorsCount();
                break;
            case 35:
                return $this->getExtraFactorsPrice();
                break;
            case 36:
                return $this->getCoombsCount();
                break;
            case 37:
                return $this->getCoombsPrice();
                break;
            case 38:
                return $this->getAbTestCount();
                break;
            case 39:
                return $this->getAbTestPrice();
                break;
            case 40:
                return $this->getCrosstestCount();
                break;
            case 41:
                return $this->getCrosstestPrice();
                break;
            case 42:
                return $this->getAbDiffCount();
                break;
            case 43:
                return $this->getAbDiffPrice();
                break;
            case 44:
                return $this->getXTest1Code();
                break;
            case 45:
                return $this->getXTest1Name();
                break;
            case 46:
                return $this->getXTest1Count();
                break;
            case 47:
                return $this->getXTest1Price();
                break;
            case 48:
                return $this->getXTest2Code();
                break;
            case 49:
                return $this->getXTest2Name();
                break;
            case 50:
                return $this->getXTest2Count();
                break;
            case 51:
                return $this->getXTest2Price();
                break;
            case 52:
                return $this->getXTest3Code();
                break;
            case 53:
                return $this->getXTest3Name();
                break;
            case 54:
                return $this->getXTest3Count();
                break;
            case 55:
                return $this->getXTest3Price();
                break;
            case 56:
                return $this->getLabStamp();
                break;
            case 57:
                return $this->getReleaseVia();
                break;
            case 58:
                return $this->getReceiptAck();
                break;
            case 59:
                return $this->getMainlogNr();
                break;
            case 60:
                return $this->getLabNr();
                break;
            case 61:
                return $this->getMainlogDate();
                break;
            case 62:
                return $this->getLabDate();
                break;
            case 63:
                return $this->getMainlogSign();
                break;
            case 64:
                return $this->getLabSign();
                break;
            case 65:
                return $this->getHistory();
                break;
            case 66:
                return $this->getModifyId();
                break;
            case 67:
                return $this->getModifyTime();
                break;
            case 68:
                return $this->getCreateId();
                break;
            case 69:
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

        if (isset($alreadyDumpedObjects['CareTestRequestBlood'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CareTestRequestBlood'][$this->hashCode()] = true;
        $keys = CareTestRequestBloodTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBatchNr(),
            $keys[1] => $this->getEncounterNr(),
            $keys[2] => $this->getDeptNr(),
            $keys[3] => $this->getBloodGroup(),
            $keys[4] => $this->getRhFactor(),
            $keys[5] => $this->getKell(),
            $keys[6] => $this->getDateProtocNr(),
            $keys[7] => $this->getPureBlood(),
            $keys[8] => $this->getRedBlood(),
            $keys[9] => $this->getLeukolessBlood(),
            $keys[10] => $this->getWashedBlood(),
            $keys[11] => $this->getPrpBlood(),
            $keys[12] => $this->getThromboCon(),
            $keys[13] => $this->getFfpPlasma(),
            $keys[14] => $this->getTransfusionDev(),
            $keys[15] => $this->getMatchSample(),
            $keys[16] => $this->getTransfusionDate(),
            $keys[17] => $this->getDiagnosis(),
            $keys[18] => $this->getNotes(),
            $keys[19] => $this->getSendDate(),
            $keys[20] => $this->getDoctor(),
            $keys[21] => $this->getPhoneNr(),
            $keys[22] => $this->getStatus(),
            $keys[23] => $this->getBloodPb(),
            $keys[24] => $this->getBloodRb(),
            $keys[25] => $this->getBloodLlrb(),
            $keys[26] => $this->getBloodWrb(),
            $keys[27] => $this->getBloodPrp(),
            $keys[28] => $this->getBloodTc(),
            $keys[29] => $this->getBloodFfp(),
            $keys[30] => $this->getBGroupCount(),
            $keys[31] => $this->getBGroupPrice(),
            $keys[32] => $this->getASubgroupCount(),
            $keys[33] => $this->getASubgroupPrice(),
            $keys[34] => $this->getExtraFactorsCount(),
            $keys[35] => $this->getExtraFactorsPrice(),
            $keys[36] => $this->getCoombsCount(),
            $keys[37] => $this->getCoombsPrice(),
            $keys[38] => $this->getAbTestCount(),
            $keys[39] => $this->getAbTestPrice(),
            $keys[40] => $this->getCrosstestCount(),
            $keys[41] => $this->getCrosstestPrice(),
            $keys[42] => $this->getAbDiffCount(),
            $keys[43] => $this->getAbDiffPrice(),
            $keys[44] => $this->getXTest1Code(),
            $keys[45] => $this->getXTest1Name(),
            $keys[46] => $this->getXTest1Count(),
            $keys[47] => $this->getXTest1Price(),
            $keys[48] => $this->getXTest2Code(),
            $keys[49] => $this->getXTest2Name(),
            $keys[50] => $this->getXTest2Count(),
            $keys[51] => $this->getXTest2Price(),
            $keys[52] => $this->getXTest3Code(),
            $keys[53] => $this->getXTest3Name(),
            $keys[54] => $this->getXTest3Count(),
            $keys[55] => $this->getXTest3Price(),
            $keys[56] => $this->getLabStamp(),
            $keys[57] => $this->getReleaseVia(),
            $keys[58] => $this->getReceiptAck(),
            $keys[59] => $this->getMainlogNr(),
            $keys[60] => $this->getLabNr(),
            $keys[61] => $this->getMainlogDate(),
            $keys[62] => $this->getLabDate(),
            $keys[63] => $this->getMainlogSign(),
            $keys[64] => $this->getLabSign(),
            $keys[65] => $this->getHistory(),
            $keys[66] => $this->getModifyId(),
            $keys[67] => $this->getModifyTime(),
            $keys[68] => $this->getCreateId(),
            $keys[69] => $this->getCreateTime(),
        );
        if ($result[$keys[16]] instanceof \DateTimeInterface) {
            $result[$keys[16]] = $result[$keys[16]]->format('c');
        }

        if ($result[$keys[19]] instanceof \DateTimeInterface) {
            $result[$keys[19]] = $result[$keys[19]]->format('c');
        }

        if ($result[$keys[56]] instanceof \DateTimeInterface) {
            $result[$keys[56]] = $result[$keys[56]]->format('c');
        }

        if ($result[$keys[61]] instanceof \DateTimeInterface) {
            $result[$keys[61]] = $result[$keys[61]]->format('c');
        }

        if ($result[$keys[62]] instanceof \DateTimeInterface) {
            $result[$keys[62]] = $result[$keys[62]]->format('c');
        }

        if ($result[$keys[67]] instanceof \DateTimeInterface) {
            $result[$keys[67]] = $result[$keys[67]]->format('c');
        }

        if ($result[$keys[69]] instanceof \DateTimeInterface) {
            $result[$keys[69]] = $result[$keys[69]]->format('c');
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
     * @return $this|\CareMd\CareMd\CareTestRequestBlood
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CareTestRequestBloodTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CareMd\CareMd\CareTestRequestBlood
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBatchNr($value);
                break;
            case 1:
                $this->setEncounterNr($value);
                break;
            case 2:
                $this->setDeptNr($value);
                break;
            case 3:
                $this->setBloodGroup($value);
                break;
            case 4:
                $this->setRhFactor($value);
                break;
            case 5:
                $this->setKell($value);
                break;
            case 6:
                $this->setDateProtocNr($value);
                break;
            case 7:
                $this->setPureBlood($value);
                break;
            case 8:
                $this->setRedBlood($value);
                break;
            case 9:
                $this->setLeukolessBlood($value);
                break;
            case 10:
                $this->setWashedBlood($value);
                break;
            case 11:
                $this->setPrpBlood($value);
                break;
            case 12:
                $this->setThromboCon($value);
                break;
            case 13:
                $this->setFfpPlasma($value);
                break;
            case 14:
                $this->setTransfusionDev($value);
                break;
            case 15:
                $this->setMatchSample($value);
                break;
            case 16:
                $this->setTransfusionDate($value);
                break;
            case 17:
                $this->setDiagnosis($value);
                break;
            case 18:
                $this->setNotes($value);
                break;
            case 19:
                $this->setSendDate($value);
                break;
            case 20:
                $this->setDoctor($value);
                break;
            case 21:
                $this->setPhoneNr($value);
                break;
            case 22:
                $this->setStatus($value);
                break;
            case 23:
                $this->setBloodPb($value);
                break;
            case 24:
                $this->setBloodRb($value);
                break;
            case 25:
                $this->setBloodLlrb($value);
                break;
            case 26:
                $this->setBloodWrb($value);
                break;
            case 27:
                $this->setBloodPrp($value);
                break;
            case 28:
                $this->setBloodTc($value);
                break;
            case 29:
                $this->setBloodFfp($value);
                break;
            case 30:
                $this->setBGroupCount($value);
                break;
            case 31:
                $this->setBGroupPrice($value);
                break;
            case 32:
                $this->setASubgroupCount($value);
                break;
            case 33:
                $this->setASubgroupPrice($value);
                break;
            case 34:
                $this->setExtraFactorsCount($value);
                break;
            case 35:
                $this->setExtraFactorsPrice($value);
                break;
            case 36:
                $this->setCoombsCount($value);
                break;
            case 37:
                $this->setCoombsPrice($value);
                break;
            case 38:
                $this->setAbTestCount($value);
                break;
            case 39:
                $this->setAbTestPrice($value);
                break;
            case 40:
                $this->setCrosstestCount($value);
                break;
            case 41:
                $this->setCrosstestPrice($value);
                break;
            case 42:
                $this->setAbDiffCount($value);
                break;
            case 43:
                $this->setAbDiffPrice($value);
                break;
            case 44:
                $this->setXTest1Code($value);
                break;
            case 45:
                $this->setXTest1Name($value);
                break;
            case 46:
                $this->setXTest1Count($value);
                break;
            case 47:
                $this->setXTest1Price($value);
                break;
            case 48:
                $this->setXTest2Code($value);
                break;
            case 49:
                $this->setXTest2Name($value);
                break;
            case 50:
                $this->setXTest2Count($value);
                break;
            case 51:
                $this->setXTest2Price($value);
                break;
            case 52:
                $this->setXTest3Code($value);
                break;
            case 53:
                $this->setXTest3Name($value);
                break;
            case 54:
                $this->setXTest3Count($value);
                break;
            case 55:
                $this->setXTest3Price($value);
                break;
            case 56:
                $this->setLabStamp($value);
                break;
            case 57:
                $this->setReleaseVia($value);
                break;
            case 58:
                $this->setReceiptAck($value);
                break;
            case 59:
                $this->setMainlogNr($value);
                break;
            case 60:
                $this->setLabNr($value);
                break;
            case 61:
                $this->setMainlogDate($value);
                break;
            case 62:
                $this->setLabDate($value);
                break;
            case 63:
                $this->setMainlogSign($value);
                break;
            case 64:
                $this->setLabSign($value);
                break;
            case 65:
                $this->setHistory($value);
                break;
            case 66:
                $this->setModifyId($value);
                break;
            case 67:
                $this->setModifyTime($value);
                break;
            case 68:
                $this->setCreateId($value);
                break;
            case 69:
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
        $keys = CareTestRequestBloodTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setBatchNr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEncounterNr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDeptNr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setBloodGroup($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setRhFactor($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setKell($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDateProtocNr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPureBlood($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setRedBlood($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setLeukolessBlood($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setWashedBlood($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPrpBlood($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setThromboCon($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setFfpPlasma($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setTransfusionDev($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setMatchSample($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setTransfusionDate($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setDiagnosis($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setNotes($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setSendDate($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setDoctor($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setPhoneNr($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setStatus($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setBloodPb($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setBloodRb($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setBloodLlrb($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setBloodWrb($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setBloodPrp($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setBloodTc($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setBloodFfp($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setBGroupCount($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setBGroupPrice($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setASubgroupCount($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setASubgroupPrice($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setExtraFactorsCount($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setExtraFactorsPrice($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setCoombsCount($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setCoombsPrice($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setAbTestCount($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setAbTestPrice($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setCrosstestCount($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setCrosstestPrice($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setAbDiffCount($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setAbDiffPrice($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setXTest1Code($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setXTest1Name($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setXTest1Count($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setXTest1Price($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setXTest2Code($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setXTest2Name($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setXTest2Count($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setXTest2Price($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setXTest3Code($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setXTest3Name($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setXTest3Count($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setXTest3Price($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setLabStamp($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setReleaseVia($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setReceiptAck($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setMainlogNr($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setLabNr($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setMainlogDate($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setLabDate($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setMainlogSign($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setLabSign($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setHistory($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setModifyId($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setModifyTime($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setCreateId($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setCreateTime($arr[$keys[69]]);
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
     * @return $this|\CareMd\CareMd\CareTestRequestBlood The current object, for fluid interface
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
        $criteria = new Criteria(CareTestRequestBloodTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BATCH_NR)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_BATCH_NR, $this->batch_nr);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_ENCOUNTER_NR)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_ENCOUNTER_NR, $this->encounter_nr);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_DEPT_NR)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_DEPT_NR, $this->dept_nr);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_GROUP)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_BLOOD_GROUP, $this->blood_group);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_RH_FACTOR)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_RH_FACTOR, $this->rh_factor);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_KELL)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_KELL, $this->kell);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_DATE_PROTOC_NR)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_DATE_PROTOC_NR, $this->date_protoc_nr);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_PURE_BLOOD)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_PURE_BLOOD, $this->pure_blood);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_RED_BLOOD)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_RED_BLOOD, $this->red_blood);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_LEUKOLESS_BLOOD)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_LEUKOLESS_BLOOD, $this->leukoless_blood);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_WASHED_BLOOD)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_WASHED_BLOOD, $this->washed_blood);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_PRP_BLOOD)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_PRP_BLOOD, $this->prp_blood);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_THROMBO_CON)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_THROMBO_CON, $this->thrombo_con);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_FFP_PLASMA)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_FFP_PLASMA, $this->ffp_plasma);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_TRANSFUSION_DEV)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_TRANSFUSION_DEV, $this->transfusion_dev);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MATCH_SAMPLE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_MATCH_SAMPLE, $this->match_sample);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_TRANSFUSION_DATE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_TRANSFUSION_DATE, $this->transfusion_date);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_DIAGNOSIS)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_DIAGNOSIS, $this->diagnosis);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_NOTES)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_NOTES, $this->notes);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_SEND_DATE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_SEND_DATE, $this->send_date);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_DOCTOR)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_DOCTOR, $this->doctor);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_PHONE_NR)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_PHONE_NR, $this->phone_nr);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_STATUS)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_PB)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_BLOOD_PB, $this->blood_pb);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_RB)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_BLOOD_RB, $this->blood_rb);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_LLRB)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_BLOOD_LLRB, $this->blood_llrb);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_WRB)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_BLOOD_WRB, $this->blood_wrb);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_PRP)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_BLOOD_PRP, $this->blood_prp);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_TC)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_BLOOD_TC, $this->blood_tc);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_BLOOD_FFP)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_BLOOD_FFP, $this->blood_ffp);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_B_GROUP_COUNT)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_B_GROUP_COUNT, $this->b_group_count);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_B_GROUP_PRICE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_B_GROUP_PRICE, $this->b_group_price);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_A_SUBGROUP_COUNT)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_A_SUBGROUP_COUNT, $this->a_subgroup_count);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_A_SUBGROUP_PRICE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_A_SUBGROUP_PRICE, $this->a_subgroup_price);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_COUNT)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_COUNT, $this->extra_factors_count);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_PRICE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_PRICE, $this->extra_factors_price);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_COOMBS_COUNT)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_COOMBS_COUNT, $this->coombs_count);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_COOMBS_PRICE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_COOMBS_PRICE, $this->coombs_price);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_AB_TEST_COUNT)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_AB_TEST_COUNT, $this->ab_test_count);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_AB_TEST_PRICE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_AB_TEST_PRICE, $this->ab_test_price);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_CROSSTEST_COUNT)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_CROSSTEST_COUNT, $this->crosstest_count);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_CROSSTEST_PRICE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_CROSSTEST_PRICE, $this->crosstest_price);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_AB_DIFF_COUNT)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_AB_DIFF_COUNT, $this->ab_diff_count);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_AB_DIFF_PRICE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_AB_DIFF_PRICE, $this->ab_diff_price);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_1_CODE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_1_CODE, $this->x_test_1_code);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_1_NAME)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_1_NAME, $this->x_test_1_name);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_1_COUNT)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_1_COUNT, $this->x_test_1_count);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_1_PRICE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_1_PRICE, $this->x_test_1_price);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_2_CODE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_2_CODE, $this->x_test_2_code);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_2_NAME)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_2_NAME, $this->x_test_2_name);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_2_COUNT)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_2_COUNT, $this->x_test_2_count);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_2_PRICE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_2_PRICE, $this->x_test_2_price);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_3_CODE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_3_CODE, $this->x_test_3_code);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_3_NAME)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_3_NAME, $this->x_test_3_name);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_3_COUNT)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_3_COUNT, $this->x_test_3_count);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_X_TEST_3_PRICE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_X_TEST_3_PRICE, $this->x_test_3_price);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_LAB_STAMP)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_LAB_STAMP, $this->lab_stamp);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_RELEASE_VIA)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_RELEASE_VIA, $this->release_via);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_RECEIPT_ACK)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_RECEIPT_ACK, $this->receipt_ack);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MAINLOG_NR)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_MAINLOG_NR, $this->mainlog_nr);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_LAB_NR)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_LAB_NR, $this->lab_nr);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MAINLOG_DATE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_MAINLOG_DATE, $this->mainlog_date);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_LAB_DATE)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_LAB_DATE, $this->lab_date);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MAINLOG_SIGN)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_MAINLOG_SIGN, $this->mainlog_sign);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_LAB_SIGN)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_LAB_SIGN, $this->lab_sign);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_HISTORY)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_HISTORY, $this->history);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MODIFY_ID)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_MODIFY_ID, $this->modify_id);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_MODIFY_TIME)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_MODIFY_TIME, $this->modify_time);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_CREATE_ID)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_CREATE_ID, $this->create_id);
        }
        if ($this->isColumnModified(CareTestRequestBloodTableMap::COL_CREATE_TIME)) {
            $criteria->add(CareTestRequestBloodTableMap::COL_CREATE_TIME, $this->create_time);
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
        $criteria = ChildCareTestRequestBloodQuery::create();
        $criteria->add(CareTestRequestBloodTableMap::COL_BATCH_NR, $this->batch_nr);

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
        $validPk = null !== $this->getBatchNr();

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
        return $this->getBatchNr();
    }

    /**
     * Generic method to set the primary key (batch_nr column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setBatchNr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getBatchNr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CareMd\CareMd\CareTestRequestBlood (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEncounterNr($this->getEncounterNr());
        $copyObj->setDeptNr($this->getDeptNr());
        $copyObj->setBloodGroup($this->getBloodGroup());
        $copyObj->setRhFactor($this->getRhFactor());
        $copyObj->setKell($this->getKell());
        $copyObj->setDateProtocNr($this->getDateProtocNr());
        $copyObj->setPureBlood($this->getPureBlood());
        $copyObj->setRedBlood($this->getRedBlood());
        $copyObj->setLeukolessBlood($this->getLeukolessBlood());
        $copyObj->setWashedBlood($this->getWashedBlood());
        $copyObj->setPrpBlood($this->getPrpBlood());
        $copyObj->setThromboCon($this->getThromboCon());
        $copyObj->setFfpPlasma($this->getFfpPlasma());
        $copyObj->setTransfusionDev($this->getTransfusionDev());
        $copyObj->setMatchSample($this->getMatchSample());
        $copyObj->setTransfusionDate($this->getTransfusionDate());
        $copyObj->setDiagnosis($this->getDiagnosis());
        $copyObj->setNotes($this->getNotes());
        $copyObj->setSendDate($this->getSendDate());
        $copyObj->setDoctor($this->getDoctor());
        $copyObj->setPhoneNr($this->getPhoneNr());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setBloodPb($this->getBloodPb());
        $copyObj->setBloodRb($this->getBloodRb());
        $copyObj->setBloodLlrb($this->getBloodLlrb());
        $copyObj->setBloodWrb($this->getBloodWrb());
        $copyObj->setBloodPrp($this->getBloodPrp());
        $copyObj->setBloodTc($this->getBloodTc());
        $copyObj->setBloodFfp($this->getBloodFfp());
        $copyObj->setBGroupCount($this->getBGroupCount());
        $copyObj->setBGroupPrice($this->getBGroupPrice());
        $copyObj->setASubgroupCount($this->getASubgroupCount());
        $copyObj->setASubgroupPrice($this->getASubgroupPrice());
        $copyObj->setExtraFactorsCount($this->getExtraFactorsCount());
        $copyObj->setExtraFactorsPrice($this->getExtraFactorsPrice());
        $copyObj->setCoombsCount($this->getCoombsCount());
        $copyObj->setCoombsPrice($this->getCoombsPrice());
        $copyObj->setAbTestCount($this->getAbTestCount());
        $copyObj->setAbTestPrice($this->getAbTestPrice());
        $copyObj->setCrosstestCount($this->getCrosstestCount());
        $copyObj->setCrosstestPrice($this->getCrosstestPrice());
        $copyObj->setAbDiffCount($this->getAbDiffCount());
        $copyObj->setAbDiffPrice($this->getAbDiffPrice());
        $copyObj->setXTest1Code($this->getXTest1Code());
        $copyObj->setXTest1Name($this->getXTest1Name());
        $copyObj->setXTest1Count($this->getXTest1Count());
        $copyObj->setXTest1Price($this->getXTest1Price());
        $copyObj->setXTest2Code($this->getXTest2Code());
        $copyObj->setXTest2Name($this->getXTest2Name());
        $copyObj->setXTest2Count($this->getXTest2Count());
        $copyObj->setXTest2Price($this->getXTest2Price());
        $copyObj->setXTest3Code($this->getXTest3Code());
        $copyObj->setXTest3Name($this->getXTest3Name());
        $copyObj->setXTest3Count($this->getXTest3Count());
        $copyObj->setXTest3Price($this->getXTest3Price());
        $copyObj->setLabStamp($this->getLabStamp());
        $copyObj->setReleaseVia($this->getReleaseVia());
        $copyObj->setReceiptAck($this->getReceiptAck());
        $copyObj->setMainlogNr($this->getMainlogNr());
        $copyObj->setLabNr($this->getLabNr());
        $copyObj->setMainlogDate($this->getMainlogDate());
        $copyObj->setLabDate($this->getLabDate());
        $copyObj->setMainlogSign($this->getMainlogSign());
        $copyObj->setLabSign($this->getLabSign());
        $copyObj->setHistory($this->getHistory());
        $copyObj->setModifyId($this->getModifyId());
        $copyObj->setModifyTime($this->getModifyTime());
        $copyObj->setCreateId($this->getCreateId());
        $copyObj->setCreateTime($this->getCreateTime());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setBatchNr(NULL); // this is a auto-increment column, so set to default value
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
     * @return \CareMd\CareMd\CareTestRequestBlood Clone of current object.
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
        $this->batch_nr = null;
        $this->encounter_nr = null;
        $this->dept_nr = null;
        $this->blood_group = null;
        $this->rh_factor = null;
        $this->kell = null;
        $this->date_protoc_nr = null;
        $this->pure_blood = null;
        $this->red_blood = null;
        $this->leukoless_blood = null;
        $this->washed_blood = null;
        $this->prp_blood = null;
        $this->thrombo_con = null;
        $this->ffp_plasma = null;
        $this->transfusion_dev = null;
        $this->match_sample = null;
        $this->transfusion_date = null;
        $this->diagnosis = null;
        $this->notes = null;
        $this->send_date = null;
        $this->doctor = null;
        $this->phone_nr = null;
        $this->status = null;
        $this->blood_pb = null;
        $this->blood_rb = null;
        $this->blood_llrb = null;
        $this->blood_wrb = null;
        $this->blood_prp = null;
        $this->blood_tc = null;
        $this->blood_ffp = null;
        $this->b_group_count = null;
        $this->b_group_price = null;
        $this->a_subgroup_count = null;
        $this->a_subgroup_price = null;
        $this->extra_factors_count = null;
        $this->extra_factors_price = null;
        $this->coombs_count = null;
        $this->coombs_price = null;
        $this->ab_test_count = null;
        $this->ab_test_price = null;
        $this->crosstest_count = null;
        $this->crosstest_price = null;
        $this->ab_diff_count = null;
        $this->ab_diff_price = null;
        $this->x_test_1_code = null;
        $this->x_test_1_name = null;
        $this->x_test_1_count = null;
        $this->x_test_1_price = null;
        $this->x_test_2_code = null;
        $this->x_test_2_name = null;
        $this->x_test_2_count = null;
        $this->x_test_2_price = null;
        $this->x_test_3_code = null;
        $this->x_test_3_name = null;
        $this->x_test_3_count = null;
        $this->x_test_3_price = null;
        $this->lab_stamp = null;
        $this->release_via = null;
        $this->receipt_ack = null;
        $this->mainlog_nr = null;
        $this->lab_nr = null;
        $this->mainlog_date = null;
        $this->lab_date = null;
        $this->mainlog_sign = null;
        $this->lab_sign = null;
        $this->history = null;
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
        return (string) $this->exportTo(CareTestRequestBloodTableMap::DEFAULT_STRING_FORMAT);
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
