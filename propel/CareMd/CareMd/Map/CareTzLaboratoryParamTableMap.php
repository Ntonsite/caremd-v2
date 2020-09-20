<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzLaboratoryParam;
use CareMd\CareMd\CareTzLaboratoryParamQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'care_tz_laboratory_param' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzLaboratoryParamTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzLaboratoryParamTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_laboratory_param';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzLaboratoryParam';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzLaboratoryParam';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 56;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 56;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_tz_laboratory_param.nr';

    /**
     * the column name for the group_id field
     */
    const COL_GROUP_ID = 'care_tz_laboratory_param.group_id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'care_tz_laboratory_param.name';

    /**
     * the column name for the shortname field
     */
    const COL_SHORTNAME = 'care_tz_laboratory_param.shortname';

    /**
     * the column name for the sort_nr field
     */
    const COL_SORT_NR = 'care_tz_laboratory_param.sort_nr';

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_tz_laboratory_param.id';

    /**
     * the column name for the msr_unit field
     */
    const COL_MSR_UNIT = 'care_tz_laboratory_param.msr_unit';

    /**
     * the column name for the median field
     */
    const COL_MEDIAN = 'care_tz_laboratory_param.median';

    /**
     * the column name for the hi_bound field
     */
    const COL_HI_BOUND = 'care_tz_laboratory_param.hi_bound';

    /**
     * the column name for the lo_bound field
     */
    const COL_LO_BOUND = 'care_tz_laboratory_param.lo_bound';

    /**
     * the column name for the hi_critical field
     */
    const COL_HI_CRITICAL = 'care_tz_laboratory_param.hi_critical';

    /**
     * the column name for the lo_critical field
     */
    const COL_LO_CRITICAL = 'care_tz_laboratory_param.lo_critical';

    /**
     * the column name for the hi_toxic field
     */
    const COL_HI_TOXIC = 'care_tz_laboratory_param.hi_toxic';

    /**
     * the column name for the lo_toxic field
     */
    const COL_LO_TOXIC = 'care_tz_laboratory_param.lo_toxic';

    /**
     * the column name for the median_f field
     */
    const COL_MEDIAN_F = 'care_tz_laboratory_param.median_f';

    /**
     * the column name for the hi_bound_f field
     */
    const COL_HI_BOUND_F = 'care_tz_laboratory_param.hi_bound_f';

    /**
     * the column name for the lo_bound_f field
     */
    const COL_LO_BOUND_F = 'care_tz_laboratory_param.lo_bound_f';

    /**
     * the column name for the hi_critical_f field
     */
    const COL_HI_CRITICAL_F = 'care_tz_laboratory_param.hi_critical_f';

    /**
     * the column name for the lo_critical_f field
     */
    const COL_LO_CRITICAL_F = 'care_tz_laboratory_param.lo_critical_f';

    /**
     * the column name for the hi_toxic_f field
     */
    const COL_HI_TOXIC_F = 'care_tz_laboratory_param.hi_toxic_f';

    /**
     * the column name for the lo_toxic_f field
     */
    const COL_LO_TOXIC_F = 'care_tz_laboratory_param.lo_toxic_f';

    /**
     * the column name for the median_n field
     */
    const COL_MEDIAN_N = 'care_tz_laboratory_param.median_n';

    /**
     * the column name for the hi_bound_n field
     */
    const COL_HI_BOUND_N = 'care_tz_laboratory_param.hi_bound_n';

    /**
     * the column name for the lo_bound_n field
     */
    const COL_LO_BOUND_N = 'care_tz_laboratory_param.lo_bound_n';

    /**
     * the column name for the hi_critical_n field
     */
    const COL_HI_CRITICAL_N = 'care_tz_laboratory_param.hi_critical_n';

    /**
     * the column name for the lo_critical_n field
     */
    const COL_LO_CRITICAL_N = 'care_tz_laboratory_param.lo_critical_n';

    /**
     * the column name for the hi_toxic_n field
     */
    const COL_HI_TOXIC_N = 'care_tz_laboratory_param.hi_toxic_n';

    /**
     * the column name for the lo_toxic_n field
     */
    const COL_LO_TOXIC_N = 'care_tz_laboratory_param.lo_toxic_n';

    /**
     * the column name for the median_y field
     */
    const COL_MEDIAN_Y = 'care_tz_laboratory_param.median_y';

    /**
     * the column name for the hi_bound_y field
     */
    const COL_HI_BOUND_Y = 'care_tz_laboratory_param.hi_bound_y';

    /**
     * the column name for the lo_bound_y field
     */
    const COL_LO_BOUND_Y = 'care_tz_laboratory_param.lo_bound_y';

    /**
     * the column name for the hi_critical_y field
     */
    const COL_HI_CRITICAL_Y = 'care_tz_laboratory_param.hi_critical_y';

    /**
     * the column name for the lo_critical_y field
     */
    const COL_LO_CRITICAL_Y = 'care_tz_laboratory_param.lo_critical_y';

    /**
     * the column name for the hi_toxic_y field
     */
    const COL_HI_TOXIC_Y = 'care_tz_laboratory_param.hi_toxic_y';

    /**
     * the column name for the lo_toxic_y field
     */
    const COL_LO_TOXIC_Y = 'care_tz_laboratory_param.lo_toxic_y';

    /**
     * the column name for the median_c field
     */
    const COL_MEDIAN_C = 'care_tz_laboratory_param.median_c';

    /**
     * the column name for the hi_bound_c field
     */
    const COL_HI_BOUND_C = 'care_tz_laboratory_param.hi_bound_c';

    /**
     * the column name for the lo_bound_c field
     */
    const COL_LO_BOUND_C = 'care_tz_laboratory_param.lo_bound_c';

    /**
     * the column name for the hi_critical_c field
     */
    const COL_HI_CRITICAL_C = 'care_tz_laboratory_param.hi_critical_c';

    /**
     * the column name for the lo_critical_c field
     */
    const COL_LO_CRITICAL_C = 'care_tz_laboratory_param.lo_critical_c';

    /**
     * the column name for the hi_toxic_c field
     */
    const COL_HI_TOXIC_C = 'care_tz_laboratory_param.hi_toxic_c';

    /**
     * the column name for the lo_toxic_c field
     */
    const COL_LO_TOXIC_C = 'care_tz_laboratory_param.lo_toxic_c';

    /**
     * the column name for the method field
     */
    const COL_METHOD = 'care_tz_laboratory_param.method';

    /**
     * the column name for the field_type field
     */
    const COL_FIELD_TYPE = 'care_tz_laboratory_param.field_type';

    /**
     * the column name for the add_type field
     */
    const COL_ADD_TYPE = 'care_tz_laboratory_param.add_type';

    /**
     * the column name for the add_label field
     */
    const COL_ADD_LABEL = 'care_tz_laboratory_param.add_label';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_tz_laboratory_param.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_tz_laboratory_param.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_tz_laboratory_param.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_tz_laboratory_param.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_tz_laboratory_param.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_tz_laboratory_param.create_time';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'care_tz_laboratory_param.price';

    /**
     * the column name for the price_3 field
     */
    const COL_PRICE_3 = 'care_tz_laboratory_param.price_3';

    /**
     * the column name for the price_2 field
     */
    const COL_PRICE_2 = 'care_tz_laboratory_param.price_2';

    /**
     * the column name for the price_1 field
     */
    const COL_PRICE_1 = 'care_tz_laboratory_param.price_1';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Nr', 'GroupId', 'Name', 'Shortname', 'SortNr', 'Id', 'MsrUnit', 'Median', 'HiBound', 'LoBound', 'HiCritical', 'LoCritical', 'HiToxic', 'LoToxic', 'MedianF', 'HiBoundF', 'LoBoundF', 'HiCriticalF', 'LoCriticalF', 'HiToxicF', 'LoToxicF', 'MedianN', 'HiBoundN', 'LoBoundN', 'HiCriticalN', 'LoCriticalN', 'HiToxicN', 'LoToxicN', 'MedianY', 'HiBoundY', 'LoBoundY', 'HiCriticalY', 'LoCriticalY', 'HiToxicY', 'LoToxicY', 'MedianC', 'HiBoundC', 'LoBoundC', 'HiCriticalC', 'LoCriticalC', 'HiToxicC', 'LoToxicC', 'Method', 'FieldType', 'AddType', 'AddLabel', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', 'Price', 'Price3', 'Price2', 'Price1', ),
        self::TYPE_CAMELNAME     => array('nr', 'groupId', 'name', 'shortname', 'sortNr', 'id', 'msrUnit', 'median', 'hiBound', 'loBound', 'hiCritical', 'loCritical', 'hiToxic', 'loToxic', 'medianF', 'hiBoundF', 'loBoundF', 'hiCriticalF', 'loCriticalF', 'hiToxicF', 'loToxicF', 'medianN', 'hiBoundN', 'loBoundN', 'hiCriticalN', 'loCriticalN', 'hiToxicN', 'loToxicN', 'medianY', 'hiBoundY', 'loBoundY', 'hiCriticalY', 'loCriticalY', 'hiToxicY', 'loToxicY', 'medianC', 'hiBoundC', 'loBoundC', 'hiCriticalC', 'loCriticalC', 'hiToxicC', 'loToxicC', 'method', 'fieldType', 'addType', 'addLabel', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', 'price', 'price3', 'price2', 'price1', ),
        self::TYPE_COLNAME       => array(CareTzLaboratoryParamTableMap::COL_NR, CareTzLaboratoryParamTableMap::COL_GROUP_ID, CareTzLaboratoryParamTableMap::COL_NAME, CareTzLaboratoryParamTableMap::COL_SHORTNAME, CareTzLaboratoryParamTableMap::COL_SORT_NR, CareTzLaboratoryParamTableMap::COL_ID, CareTzLaboratoryParamTableMap::COL_MSR_UNIT, CareTzLaboratoryParamTableMap::COL_MEDIAN, CareTzLaboratoryParamTableMap::COL_HI_BOUND, CareTzLaboratoryParamTableMap::COL_LO_BOUND, CareTzLaboratoryParamTableMap::COL_HI_CRITICAL, CareTzLaboratoryParamTableMap::COL_LO_CRITICAL, CareTzLaboratoryParamTableMap::COL_HI_TOXIC, CareTzLaboratoryParamTableMap::COL_LO_TOXIC, CareTzLaboratoryParamTableMap::COL_MEDIAN_F, CareTzLaboratoryParamTableMap::COL_HI_BOUND_F, CareTzLaboratoryParamTableMap::COL_LO_BOUND_F, CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_F, CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_F, CareTzLaboratoryParamTableMap::COL_HI_TOXIC_F, CareTzLaboratoryParamTableMap::COL_LO_TOXIC_F, CareTzLaboratoryParamTableMap::COL_MEDIAN_N, CareTzLaboratoryParamTableMap::COL_HI_BOUND_N, CareTzLaboratoryParamTableMap::COL_LO_BOUND_N, CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_N, CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_N, CareTzLaboratoryParamTableMap::COL_HI_TOXIC_N, CareTzLaboratoryParamTableMap::COL_LO_TOXIC_N, CareTzLaboratoryParamTableMap::COL_MEDIAN_Y, CareTzLaboratoryParamTableMap::COL_HI_BOUND_Y, CareTzLaboratoryParamTableMap::COL_LO_BOUND_Y, CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_Y, CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_Y, CareTzLaboratoryParamTableMap::COL_HI_TOXIC_Y, CareTzLaboratoryParamTableMap::COL_LO_TOXIC_Y, CareTzLaboratoryParamTableMap::COL_MEDIAN_C, CareTzLaboratoryParamTableMap::COL_HI_BOUND_C, CareTzLaboratoryParamTableMap::COL_LO_BOUND_C, CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_C, CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_C, CareTzLaboratoryParamTableMap::COL_HI_TOXIC_C, CareTzLaboratoryParamTableMap::COL_LO_TOXIC_C, CareTzLaboratoryParamTableMap::COL_METHOD, CareTzLaboratoryParamTableMap::COL_FIELD_TYPE, CareTzLaboratoryParamTableMap::COL_ADD_TYPE, CareTzLaboratoryParamTableMap::COL_ADD_LABEL, CareTzLaboratoryParamTableMap::COL_STATUS, CareTzLaboratoryParamTableMap::COL_HISTORY, CareTzLaboratoryParamTableMap::COL_MODIFY_ID, CareTzLaboratoryParamTableMap::COL_MODIFY_TIME, CareTzLaboratoryParamTableMap::COL_CREATE_ID, CareTzLaboratoryParamTableMap::COL_CREATE_TIME, CareTzLaboratoryParamTableMap::COL_PRICE, CareTzLaboratoryParamTableMap::COL_PRICE_3, CareTzLaboratoryParamTableMap::COL_PRICE_2, CareTzLaboratoryParamTableMap::COL_PRICE_1, ),
        self::TYPE_FIELDNAME     => array('nr', 'group_id', 'name', 'shortname', 'sort_nr', 'id', 'msr_unit', 'median', 'hi_bound', 'lo_bound', 'hi_critical', 'lo_critical', 'hi_toxic', 'lo_toxic', 'median_f', 'hi_bound_f', 'lo_bound_f', 'hi_critical_f', 'lo_critical_f', 'hi_toxic_f', 'lo_toxic_f', 'median_n', 'hi_bound_n', 'lo_bound_n', 'hi_critical_n', 'lo_critical_n', 'hi_toxic_n', 'lo_toxic_n', 'median_y', 'hi_bound_y', 'lo_bound_y', 'hi_critical_y', 'lo_critical_y', 'hi_toxic_y', 'lo_toxic_y', 'median_c', 'hi_bound_c', 'lo_bound_c', 'hi_critical_c', 'lo_critical_c', 'hi_toxic_c', 'lo_toxic_c', 'method', 'field_type', 'add_type', 'add_label', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'price', 'price_3', 'price_2', 'price_1', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'GroupId' => 1, 'Name' => 2, 'Shortname' => 3, 'SortNr' => 4, 'Id' => 5, 'MsrUnit' => 6, 'Median' => 7, 'HiBound' => 8, 'LoBound' => 9, 'HiCritical' => 10, 'LoCritical' => 11, 'HiToxic' => 12, 'LoToxic' => 13, 'MedianF' => 14, 'HiBoundF' => 15, 'LoBoundF' => 16, 'HiCriticalF' => 17, 'LoCriticalF' => 18, 'HiToxicF' => 19, 'LoToxicF' => 20, 'MedianN' => 21, 'HiBoundN' => 22, 'LoBoundN' => 23, 'HiCriticalN' => 24, 'LoCriticalN' => 25, 'HiToxicN' => 26, 'LoToxicN' => 27, 'MedianY' => 28, 'HiBoundY' => 29, 'LoBoundY' => 30, 'HiCriticalY' => 31, 'LoCriticalY' => 32, 'HiToxicY' => 33, 'LoToxicY' => 34, 'MedianC' => 35, 'HiBoundC' => 36, 'LoBoundC' => 37, 'HiCriticalC' => 38, 'LoCriticalC' => 39, 'HiToxicC' => 40, 'LoToxicC' => 41, 'Method' => 42, 'FieldType' => 43, 'AddType' => 44, 'AddLabel' => 45, 'Status' => 46, 'History' => 47, 'ModifyId' => 48, 'ModifyTime' => 49, 'CreateId' => 50, 'CreateTime' => 51, 'Price' => 52, 'Price3' => 53, 'Price2' => 54, 'Price1' => 55, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'groupId' => 1, 'name' => 2, 'shortname' => 3, 'sortNr' => 4, 'id' => 5, 'msrUnit' => 6, 'median' => 7, 'hiBound' => 8, 'loBound' => 9, 'hiCritical' => 10, 'loCritical' => 11, 'hiToxic' => 12, 'loToxic' => 13, 'medianF' => 14, 'hiBoundF' => 15, 'loBoundF' => 16, 'hiCriticalF' => 17, 'loCriticalF' => 18, 'hiToxicF' => 19, 'loToxicF' => 20, 'medianN' => 21, 'hiBoundN' => 22, 'loBoundN' => 23, 'hiCriticalN' => 24, 'loCriticalN' => 25, 'hiToxicN' => 26, 'loToxicN' => 27, 'medianY' => 28, 'hiBoundY' => 29, 'loBoundY' => 30, 'hiCriticalY' => 31, 'loCriticalY' => 32, 'hiToxicY' => 33, 'loToxicY' => 34, 'medianC' => 35, 'hiBoundC' => 36, 'loBoundC' => 37, 'hiCriticalC' => 38, 'loCriticalC' => 39, 'hiToxicC' => 40, 'loToxicC' => 41, 'method' => 42, 'fieldType' => 43, 'addType' => 44, 'addLabel' => 45, 'status' => 46, 'history' => 47, 'modifyId' => 48, 'modifyTime' => 49, 'createId' => 50, 'createTime' => 51, 'price' => 52, 'price3' => 53, 'price2' => 54, 'price1' => 55, ),
        self::TYPE_COLNAME       => array(CareTzLaboratoryParamTableMap::COL_NR => 0, CareTzLaboratoryParamTableMap::COL_GROUP_ID => 1, CareTzLaboratoryParamTableMap::COL_NAME => 2, CareTzLaboratoryParamTableMap::COL_SHORTNAME => 3, CareTzLaboratoryParamTableMap::COL_SORT_NR => 4, CareTzLaboratoryParamTableMap::COL_ID => 5, CareTzLaboratoryParamTableMap::COL_MSR_UNIT => 6, CareTzLaboratoryParamTableMap::COL_MEDIAN => 7, CareTzLaboratoryParamTableMap::COL_HI_BOUND => 8, CareTzLaboratoryParamTableMap::COL_LO_BOUND => 9, CareTzLaboratoryParamTableMap::COL_HI_CRITICAL => 10, CareTzLaboratoryParamTableMap::COL_LO_CRITICAL => 11, CareTzLaboratoryParamTableMap::COL_HI_TOXIC => 12, CareTzLaboratoryParamTableMap::COL_LO_TOXIC => 13, CareTzLaboratoryParamTableMap::COL_MEDIAN_F => 14, CareTzLaboratoryParamTableMap::COL_HI_BOUND_F => 15, CareTzLaboratoryParamTableMap::COL_LO_BOUND_F => 16, CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_F => 17, CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_F => 18, CareTzLaboratoryParamTableMap::COL_HI_TOXIC_F => 19, CareTzLaboratoryParamTableMap::COL_LO_TOXIC_F => 20, CareTzLaboratoryParamTableMap::COL_MEDIAN_N => 21, CareTzLaboratoryParamTableMap::COL_HI_BOUND_N => 22, CareTzLaboratoryParamTableMap::COL_LO_BOUND_N => 23, CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_N => 24, CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_N => 25, CareTzLaboratoryParamTableMap::COL_HI_TOXIC_N => 26, CareTzLaboratoryParamTableMap::COL_LO_TOXIC_N => 27, CareTzLaboratoryParamTableMap::COL_MEDIAN_Y => 28, CareTzLaboratoryParamTableMap::COL_HI_BOUND_Y => 29, CareTzLaboratoryParamTableMap::COL_LO_BOUND_Y => 30, CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_Y => 31, CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_Y => 32, CareTzLaboratoryParamTableMap::COL_HI_TOXIC_Y => 33, CareTzLaboratoryParamTableMap::COL_LO_TOXIC_Y => 34, CareTzLaboratoryParamTableMap::COL_MEDIAN_C => 35, CareTzLaboratoryParamTableMap::COL_HI_BOUND_C => 36, CareTzLaboratoryParamTableMap::COL_LO_BOUND_C => 37, CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_C => 38, CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_C => 39, CareTzLaboratoryParamTableMap::COL_HI_TOXIC_C => 40, CareTzLaboratoryParamTableMap::COL_LO_TOXIC_C => 41, CareTzLaboratoryParamTableMap::COL_METHOD => 42, CareTzLaboratoryParamTableMap::COL_FIELD_TYPE => 43, CareTzLaboratoryParamTableMap::COL_ADD_TYPE => 44, CareTzLaboratoryParamTableMap::COL_ADD_LABEL => 45, CareTzLaboratoryParamTableMap::COL_STATUS => 46, CareTzLaboratoryParamTableMap::COL_HISTORY => 47, CareTzLaboratoryParamTableMap::COL_MODIFY_ID => 48, CareTzLaboratoryParamTableMap::COL_MODIFY_TIME => 49, CareTzLaboratoryParamTableMap::COL_CREATE_ID => 50, CareTzLaboratoryParamTableMap::COL_CREATE_TIME => 51, CareTzLaboratoryParamTableMap::COL_PRICE => 52, CareTzLaboratoryParamTableMap::COL_PRICE_3 => 53, CareTzLaboratoryParamTableMap::COL_PRICE_2 => 54, CareTzLaboratoryParamTableMap::COL_PRICE_1 => 55, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'group_id' => 1, 'name' => 2, 'shortname' => 3, 'sort_nr' => 4, 'id' => 5, 'msr_unit' => 6, 'median' => 7, 'hi_bound' => 8, 'lo_bound' => 9, 'hi_critical' => 10, 'lo_critical' => 11, 'hi_toxic' => 12, 'lo_toxic' => 13, 'median_f' => 14, 'hi_bound_f' => 15, 'lo_bound_f' => 16, 'hi_critical_f' => 17, 'lo_critical_f' => 18, 'hi_toxic_f' => 19, 'lo_toxic_f' => 20, 'median_n' => 21, 'hi_bound_n' => 22, 'lo_bound_n' => 23, 'hi_critical_n' => 24, 'lo_critical_n' => 25, 'hi_toxic_n' => 26, 'lo_toxic_n' => 27, 'median_y' => 28, 'hi_bound_y' => 29, 'lo_bound_y' => 30, 'hi_critical_y' => 31, 'lo_critical_y' => 32, 'hi_toxic_y' => 33, 'lo_toxic_y' => 34, 'median_c' => 35, 'hi_bound_c' => 36, 'lo_bound_c' => 37, 'hi_critical_c' => 38, 'lo_critical_c' => 39, 'hi_toxic_c' => 40, 'lo_toxic_c' => 41, 'method' => 42, 'field_type' => 43, 'add_type' => 44, 'add_label' => 45, 'status' => 46, 'history' => 47, 'modify_id' => 48, 'modify_time' => 49, 'create_id' => 50, 'create_time' => 51, 'price' => 52, 'price_3' => 53, 'price_2' => 54, 'price_1' => 55, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('care_tz_laboratory_param');
        $this->setPhpName('CareTzLaboratoryParam');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzLaboratoryParam');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'BIGINT', true, null, null);
        $this->addColumn('group_id', 'GroupId', 'VARCHAR', true, 35, '');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 35, '');
        $this->addColumn('shortname', 'Shortname', 'VARCHAR', true, 10, null);
        $this->addColumn('sort_nr', 'SortNr', 'TINYINT', true, null, null);
        $this->addColumn('id', 'Id', 'VARCHAR', true, 50, null);
        $this->addColumn('msr_unit', 'MsrUnit', 'VARCHAR', true, 15, '');
        $this->addColumn('median', 'Median', 'VARCHAR', false, 20, null);
        $this->addColumn('hi_bound', 'HiBound', 'VARCHAR', false, 20, null);
        $this->addColumn('lo_bound', 'LoBound', 'VARCHAR', false, 20, null);
        $this->addColumn('hi_critical', 'HiCritical', 'VARCHAR', false, 20, null);
        $this->addColumn('lo_critical', 'LoCritical', 'VARCHAR', false, 20, null);
        $this->addColumn('hi_toxic', 'HiToxic', 'VARCHAR', false, 20, null);
        $this->addColumn('lo_toxic', 'LoToxic', 'VARCHAR', false, 20, null);
        $this->addColumn('median_f', 'MedianF', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_bound_f', 'HiBoundF', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_bound_f', 'LoBoundF', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_critical_f', 'HiCriticalF', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_critical_f', 'LoCriticalF', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_toxic_f', 'HiToxicF', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_toxic_f', 'LoToxicF', 'VARCHAR', true, 20, null);
        $this->addColumn('median_n', 'MedianN', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_bound_n', 'HiBoundN', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_bound_n', 'LoBoundN', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_critical_n', 'HiCriticalN', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_critical_n', 'LoCriticalN', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_toxic_n', 'HiToxicN', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_toxic_n', 'LoToxicN', 'VARCHAR', true, 20, null);
        $this->addColumn('median_y', 'MedianY', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_bound_y', 'HiBoundY', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_bound_y', 'LoBoundY', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_critical_y', 'HiCriticalY', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_critical_y', 'LoCriticalY', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_toxic_y', 'HiToxicY', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_toxic_y', 'LoToxicY', 'VARCHAR', true, 20, null);
        $this->addColumn('median_c', 'MedianC', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_bound_c', 'HiBoundC', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_bound_c', 'LoBoundC', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_critical_c', 'HiCriticalC', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_critical_c', 'LoCriticalC', 'VARCHAR', true, 20, null);
        $this->addColumn('hi_toxic_c', 'HiToxicC', 'VARCHAR', true, 20, null);
        $this->addColumn('lo_toxic_c', 'LoToxicC', 'VARCHAR', true, 20, null);
        $this->addColumn('method', 'Method', 'VARCHAR', true, 255, null);
        $this->addColumn('field_type', 'FieldType', 'VARCHAR', true, 20, null);
        $this->addColumn('add_type', 'AddType', 'VARCHAR', true, 255, '');
        $this->addColumn('add_label', 'AddLabel', 'VARCHAR', true, 255, '');
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('price', 'Price', 'VARCHAR', true, 255, null);
        $this->addColumn('price_3', 'Price3', 'VARCHAR', true, 10, null);
        $this->addColumn('price_2', 'Price2', 'VARCHAR', true, 10, null);
        $this->addColumn('price_1', 'Price1', 'VARCHAR', true, 10, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? CareTzLaboratoryParamTableMap::CLASS_DEFAULT : CareTzLaboratoryParamTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (CareTzLaboratoryParam object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzLaboratoryParamTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzLaboratoryParamTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzLaboratoryParamTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzLaboratoryParamTableMap::OM_CLASS;
            /** @var CareTzLaboratoryParam $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzLaboratoryParamTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = CareTzLaboratoryParamTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzLaboratoryParamTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzLaboratoryParam $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzLaboratoryParamTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_NR);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_GROUP_ID);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_NAME);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_SHORTNAME);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_SORT_NR);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_ID);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_MSR_UNIT);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_MEDIAN);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_BOUND);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_BOUND);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_TOXIC);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_TOXIC);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_MEDIAN_F);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_BOUND_F);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_BOUND_F);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_F);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_F);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_F);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_F);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_MEDIAN_N);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_BOUND_N);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_BOUND_N);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_N);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_N);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_N);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_N);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_MEDIAN_Y);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_BOUND_Y);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_BOUND_Y);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_Y);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_Y);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_Y);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_Y);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_MEDIAN_C);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_BOUND_C);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_BOUND_C);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_C);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_C);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_C);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_C);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_METHOD);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_FIELD_TYPE);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_ADD_TYPE);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_ADD_LABEL);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_CREATE_TIME);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_PRICE);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_PRICE_3);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_PRICE_2);
            $criteria->addSelectColumn(CareTzLaboratoryParamTableMap::COL_PRICE_1);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.group_id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.shortname');
            $criteria->addSelectColumn($alias . '.sort_nr');
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.msr_unit');
            $criteria->addSelectColumn($alias . '.median');
            $criteria->addSelectColumn($alias . '.hi_bound');
            $criteria->addSelectColumn($alias . '.lo_bound');
            $criteria->addSelectColumn($alias . '.hi_critical');
            $criteria->addSelectColumn($alias . '.lo_critical');
            $criteria->addSelectColumn($alias . '.hi_toxic');
            $criteria->addSelectColumn($alias . '.lo_toxic');
            $criteria->addSelectColumn($alias . '.median_f');
            $criteria->addSelectColumn($alias . '.hi_bound_f');
            $criteria->addSelectColumn($alias . '.lo_bound_f');
            $criteria->addSelectColumn($alias . '.hi_critical_f');
            $criteria->addSelectColumn($alias . '.lo_critical_f');
            $criteria->addSelectColumn($alias . '.hi_toxic_f');
            $criteria->addSelectColumn($alias . '.lo_toxic_f');
            $criteria->addSelectColumn($alias . '.median_n');
            $criteria->addSelectColumn($alias . '.hi_bound_n');
            $criteria->addSelectColumn($alias . '.lo_bound_n');
            $criteria->addSelectColumn($alias . '.hi_critical_n');
            $criteria->addSelectColumn($alias . '.lo_critical_n');
            $criteria->addSelectColumn($alias . '.hi_toxic_n');
            $criteria->addSelectColumn($alias . '.lo_toxic_n');
            $criteria->addSelectColumn($alias . '.median_y');
            $criteria->addSelectColumn($alias . '.hi_bound_y');
            $criteria->addSelectColumn($alias . '.lo_bound_y');
            $criteria->addSelectColumn($alias . '.hi_critical_y');
            $criteria->addSelectColumn($alias . '.lo_critical_y');
            $criteria->addSelectColumn($alias . '.hi_toxic_y');
            $criteria->addSelectColumn($alias . '.lo_toxic_y');
            $criteria->addSelectColumn($alias . '.median_c');
            $criteria->addSelectColumn($alias . '.hi_bound_c');
            $criteria->addSelectColumn($alias . '.lo_bound_c');
            $criteria->addSelectColumn($alias . '.hi_critical_c');
            $criteria->addSelectColumn($alias . '.lo_critical_c');
            $criteria->addSelectColumn($alias . '.hi_toxic_c');
            $criteria->addSelectColumn($alias . '.lo_toxic_c');
            $criteria->addSelectColumn($alias . '.method');
            $criteria->addSelectColumn($alias . '.field_type');
            $criteria->addSelectColumn($alias . '.add_type');
            $criteria->addSelectColumn($alias . '.add_label');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.price_3');
            $criteria->addSelectColumn($alias . '.price_2');
            $criteria->addSelectColumn($alias . '.price_1');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(CareTzLaboratoryParamTableMap::DATABASE_NAME)->getTable(CareTzLaboratoryParamTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzLaboratoryParamTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzLaboratoryParamTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzLaboratoryParamTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzLaboratoryParam or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzLaboratoryParam object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzLaboratoryParamTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzLaboratoryParam) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareTzLaboratoryParamTableMap::DATABASE_NAME);
            $criteria->add(CareTzLaboratoryParamTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareTzLaboratoryParamQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzLaboratoryParamTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzLaboratoryParamTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_laboratory_param table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzLaboratoryParamQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzLaboratoryParam or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzLaboratoryParam object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzLaboratoryParamTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzLaboratoryParam object
        }

        if ($criteria->containsKey(CareTzLaboratoryParamTableMap::COL_NR) && $criteria->keyContainsValue(CareTzLaboratoryParamTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareTzLaboratoryParamTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareTzLaboratoryParamQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzLaboratoryParamTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzLaboratoryParamTableMap::buildTableMap();
