<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzLaboratoryParam as ChildCareTzLaboratoryParam;
use CareMd\CareMd\CareTzLaboratoryParamQuery as ChildCareTzLaboratoryParamQuery;
use CareMd\CareMd\Map\CareTzLaboratoryParamTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_laboratory_param' table.
 *
 *
 *
 * @method     ChildCareTzLaboratoryParamQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareTzLaboratoryParamQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method     ChildCareTzLaboratoryParamQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTzLaboratoryParamQuery orderByShortname($order = Criteria::ASC) Order by the shortname column
 * @method     ChildCareTzLaboratoryParamQuery orderBySortNr($order = Criteria::ASC) Order by the sort_nr column
 * @method     ChildCareTzLaboratoryParamQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzLaboratoryParamQuery orderByMsrUnit($order = Criteria::ASC) Order by the msr_unit column
 * @method     ChildCareTzLaboratoryParamQuery orderByMedian($order = Criteria::ASC) Order by the median column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiBound($order = Criteria::ASC) Order by the hi_bound column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoBound($order = Criteria::ASC) Order by the lo_bound column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiCritical($order = Criteria::ASC) Order by the hi_critical column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoCritical($order = Criteria::ASC) Order by the lo_critical column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiToxic($order = Criteria::ASC) Order by the hi_toxic column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoToxic($order = Criteria::ASC) Order by the lo_toxic column
 * @method     ChildCareTzLaboratoryParamQuery orderByMedianF($order = Criteria::ASC) Order by the median_f column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiBoundF($order = Criteria::ASC) Order by the hi_bound_f column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoBoundF($order = Criteria::ASC) Order by the lo_bound_f column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiCriticalF($order = Criteria::ASC) Order by the hi_critical_f column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoCriticalF($order = Criteria::ASC) Order by the lo_critical_f column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiToxicF($order = Criteria::ASC) Order by the hi_toxic_f column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoToxicF($order = Criteria::ASC) Order by the lo_toxic_f column
 * @method     ChildCareTzLaboratoryParamQuery orderByMedianN($order = Criteria::ASC) Order by the median_n column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiBoundN($order = Criteria::ASC) Order by the hi_bound_n column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoBoundN($order = Criteria::ASC) Order by the lo_bound_n column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiCriticalN($order = Criteria::ASC) Order by the hi_critical_n column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoCriticalN($order = Criteria::ASC) Order by the lo_critical_n column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiToxicN($order = Criteria::ASC) Order by the hi_toxic_n column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoToxicN($order = Criteria::ASC) Order by the lo_toxic_n column
 * @method     ChildCareTzLaboratoryParamQuery orderByMedianY($order = Criteria::ASC) Order by the median_y column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiBoundY($order = Criteria::ASC) Order by the hi_bound_y column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoBoundY($order = Criteria::ASC) Order by the lo_bound_y column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiCriticalY($order = Criteria::ASC) Order by the hi_critical_y column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoCriticalY($order = Criteria::ASC) Order by the lo_critical_y column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiToxicY($order = Criteria::ASC) Order by the hi_toxic_y column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoToxicY($order = Criteria::ASC) Order by the lo_toxic_y column
 * @method     ChildCareTzLaboratoryParamQuery orderByMedianC($order = Criteria::ASC) Order by the median_c column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiBoundC($order = Criteria::ASC) Order by the hi_bound_c column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoBoundC($order = Criteria::ASC) Order by the lo_bound_c column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiCriticalC($order = Criteria::ASC) Order by the hi_critical_c column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoCriticalC($order = Criteria::ASC) Order by the lo_critical_c column
 * @method     ChildCareTzLaboratoryParamQuery orderByHiToxicC($order = Criteria::ASC) Order by the hi_toxic_c column
 * @method     ChildCareTzLaboratoryParamQuery orderByLoToxicC($order = Criteria::ASC) Order by the lo_toxic_c column
 * @method     ChildCareTzLaboratoryParamQuery orderByMethod($order = Criteria::ASC) Order by the method column
 * @method     ChildCareTzLaboratoryParamQuery orderByFieldType($order = Criteria::ASC) Order by the field_type column
 * @method     ChildCareTzLaboratoryParamQuery orderByAddType($order = Criteria::ASC) Order by the add_type column
 * @method     ChildCareTzLaboratoryParamQuery orderByAddLabel($order = Criteria::ASC) Order by the add_label column
 * @method     ChildCareTzLaboratoryParamQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTzLaboratoryParamQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTzLaboratoryParamQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTzLaboratoryParamQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTzLaboratoryParamQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTzLaboratoryParamQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareTzLaboratoryParamQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     ChildCareTzLaboratoryParamQuery orderByPrice3($order = Criteria::ASC) Order by the price_3 column
 * @method     ChildCareTzLaboratoryParamQuery orderByPrice2($order = Criteria::ASC) Order by the price_2 column
 * @method     ChildCareTzLaboratoryParamQuery orderByPrice1($order = Criteria::ASC) Order by the price_1 column
 *
 * @method     ChildCareTzLaboratoryParamQuery groupByNr() Group by the nr column
 * @method     ChildCareTzLaboratoryParamQuery groupByGroupId() Group by the group_id column
 * @method     ChildCareTzLaboratoryParamQuery groupByName() Group by the name column
 * @method     ChildCareTzLaboratoryParamQuery groupByShortname() Group by the shortname column
 * @method     ChildCareTzLaboratoryParamQuery groupBySortNr() Group by the sort_nr column
 * @method     ChildCareTzLaboratoryParamQuery groupById() Group by the id column
 * @method     ChildCareTzLaboratoryParamQuery groupByMsrUnit() Group by the msr_unit column
 * @method     ChildCareTzLaboratoryParamQuery groupByMedian() Group by the median column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiBound() Group by the hi_bound column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoBound() Group by the lo_bound column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiCritical() Group by the hi_critical column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoCritical() Group by the lo_critical column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiToxic() Group by the hi_toxic column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoToxic() Group by the lo_toxic column
 * @method     ChildCareTzLaboratoryParamQuery groupByMedianF() Group by the median_f column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiBoundF() Group by the hi_bound_f column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoBoundF() Group by the lo_bound_f column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiCriticalF() Group by the hi_critical_f column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoCriticalF() Group by the lo_critical_f column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiToxicF() Group by the hi_toxic_f column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoToxicF() Group by the lo_toxic_f column
 * @method     ChildCareTzLaboratoryParamQuery groupByMedianN() Group by the median_n column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiBoundN() Group by the hi_bound_n column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoBoundN() Group by the lo_bound_n column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiCriticalN() Group by the hi_critical_n column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoCriticalN() Group by the lo_critical_n column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiToxicN() Group by the hi_toxic_n column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoToxicN() Group by the lo_toxic_n column
 * @method     ChildCareTzLaboratoryParamQuery groupByMedianY() Group by the median_y column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiBoundY() Group by the hi_bound_y column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoBoundY() Group by the lo_bound_y column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiCriticalY() Group by the hi_critical_y column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoCriticalY() Group by the lo_critical_y column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiToxicY() Group by the hi_toxic_y column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoToxicY() Group by the lo_toxic_y column
 * @method     ChildCareTzLaboratoryParamQuery groupByMedianC() Group by the median_c column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiBoundC() Group by the hi_bound_c column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoBoundC() Group by the lo_bound_c column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiCriticalC() Group by the hi_critical_c column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoCriticalC() Group by the lo_critical_c column
 * @method     ChildCareTzLaboratoryParamQuery groupByHiToxicC() Group by the hi_toxic_c column
 * @method     ChildCareTzLaboratoryParamQuery groupByLoToxicC() Group by the lo_toxic_c column
 * @method     ChildCareTzLaboratoryParamQuery groupByMethod() Group by the method column
 * @method     ChildCareTzLaboratoryParamQuery groupByFieldType() Group by the field_type column
 * @method     ChildCareTzLaboratoryParamQuery groupByAddType() Group by the add_type column
 * @method     ChildCareTzLaboratoryParamQuery groupByAddLabel() Group by the add_label column
 * @method     ChildCareTzLaboratoryParamQuery groupByStatus() Group by the status column
 * @method     ChildCareTzLaboratoryParamQuery groupByHistory() Group by the history column
 * @method     ChildCareTzLaboratoryParamQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTzLaboratoryParamQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTzLaboratoryParamQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTzLaboratoryParamQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareTzLaboratoryParamQuery groupByPrice() Group by the price column
 * @method     ChildCareTzLaboratoryParamQuery groupByPrice3() Group by the price_3 column
 * @method     ChildCareTzLaboratoryParamQuery groupByPrice2() Group by the price_2 column
 * @method     ChildCareTzLaboratoryParamQuery groupByPrice1() Group by the price_1 column
 *
 * @method     ChildCareTzLaboratoryParamQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzLaboratoryParamQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzLaboratoryParamQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzLaboratoryParamQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzLaboratoryParamQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzLaboratoryParamQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzLaboratoryParam findOne(ConnectionInterface $con = null) Return the first ChildCareTzLaboratoryParam matching the query
 * @method     ChildCareTzLaboratoryParam findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzLaboratoryParam matching the query, or a new ChildCareTzLaboratoryParam object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzLaboratoryParam findOneByNr(string $nr) Return the first ChildCareTzLaboratoryParam filtered by the nr column
 * @method     ChildCareTzLaboratoryParam findOneByGroupId(string $group_id) Return the first ChildCareTzLaboratoryParam filtered by the group_id column
 * @method     ChildCareTzLaboratoryParam findOneByName(string $name) Return the first ChildCareTzLaboratoryParam filtered by the name column
 * @method     ChildCareTzLaboratoryParam findOneByShortname(string $shortname) Return the first ChildCareTzLaboratoryParam filtered by the shortname column
 * @method     ChildCareTzLaboratoryParam findOneBySortNr(int $sort_nr) Return the first ChildCareTzLaboratoryParam filtered by the sort_nr column
 * @method     ChildCareTzLaboratoryParam findOneById(string $id) Return the first ChildCareTzLaboratoryParam filtered by the id column
 * @method     ChildCareTzLaboratoryParam findOneByMsrUnit(string $msr_unit) Return the first ChildCareTzLaboratoryParam filtered by the msr_unit column
 * @method     ChildCareTzLaboratoryParam findOneByMedian(string $median) Return the first ChildCareTzLaboratoryParam filtered by the median column
 * @method     ChildCareTzLaboratoryParam findOneByHiBound(string $hi_bound) Return the first ChildCareTzLaboratoryParam filtered by the hi_bound column
 * @method     ChildCareTzLaboratoryParam findOneByLoBound(string $lo_bound) Return the first ChildCareTzLaboratoryParam filtered by the lo_bound column
 * @method     ChildCareTzLaboratoryParam findOneByHiCritical(string $hi_critical) Return the first ChildCareTzLaboratoryParam filtered by the hi_critical column
 * @method     ChildCareTzLaboratoryParam findOneByLoCritical(string $lo_critical) Return the first ChildCareTzLaboratoryParam filtered by the lo_critical column
 * @method     ChildCareTzLaboratoryParam findOneByHiToxic(string $hi_toxic) Return the first ChildCareTzLaboratoryParam filtered by the hi_toxic column
 * @method     ChildCareTzLaboratoryParam findOneByLoToxic(string $lo_toxic) Return the first ChildCareTzLaboratoryParam filtered by the lo_toxic column
 * @method     ChildCareTzLaboratoryParam findOneByMedianF(string $median_f) Return the first ChildCareTzLaboratoryParam filtered by the median_f column
 * @method     ChildCareTzLaboratoryParam findOneByHiBoundF(string $hi_bound_f) Return the first ChildCareTzLaboratoryParam filtered by the hi_bound_f column
 * @method     ChildCareTzLaboratoryParam findOneByLoBoundF(string $lo_bound_f) Return the first ChildCareTzLaboratoryParam filtered by the lo_bound_f column
 * @method     ChildCareTzLaboratoryParam findOneByHiCriticalF(string $hi_critical_f) Return the first ChildCareTzLaboratoryParam filtered by the hi_critical_f column
 * @method     ChildCareTzLaboratoryParam findOneByLoCriticalF(string $lo_critical_f) Return the first ChildCareTzLaboratoryParam filtered by the lo_critical_f column
 * @method     ChildCareTzLaboratoryParam findOneByHiToxicF(string $hi_toxic_f) Return the first ChildCareTzLaboratoryParam filtered by the hi_toxic_f column
 * @method     ChildCareTzLaboratoryParam findOneByLoToxicF(string $lo_toxic_f) Return the first ChildCareTzLaboratoryParam filtered by the lo_toxic_f column
 * @method     ChildCareTzLaboratoryParam findOneByMedianN(string $median_n) Return the first ChildCareTzLaboratoryParam filtered by the median_n column
 * @method     ChildCareTzLaboratoryParam findOneByHiBoundN(string $hi_bound_n) Return the first ChildCareTzLaboratoryParam filtered by the hi_bound_n column
 * @method     ChildCareTzLaboratoryParam findOneByLoBoundN(string $lo_bound_n) Return the first ChildCareTzLaboratoryParam filtered by the lo_bound_n column
 * @method     ChildCareTzLaboratoryParam findOneByHiCriticalN(string $hi_critical_n) Return the first ChildCareTzLaboratoryParam filtered by the hi_critical_n column
 * @method     ChildCareTzLaboratoryParam findOneByLoCriticalN(string $lo_critical_n) Return the first ChildCareTzLaboratoryParam filtered by the lo_critical_n column
 * @method     ChildCareTzLaboratoryParam findOneByHiToxicN(string $hi_toxic_n) Return the first ChildCareTzLaboratoryParam filtered by the hi_toxic_n column
 * @method     ChildCareTzLaboratoryParam findOneByLoToxicN(string $lo_toxic_n) Return the first ChildCareTzLaboratoryParam filtered by the lo_toxic_n column
 * @method     ChildCareTzLaboratoryParam findOneByMedianY(string $median_y) Return the first ChildCareTzLaboratoryParam filtered by the median_y column
 * @method     ChildCareTzLaboratoryParam findOneByHiBoundY(string $hi_bound_y) Return the first ChildCareTzLaboratoryParam filtered by the hi_bound_y column
 * @method     ChildCareTzLaboratoryParam findOneByLoBoundY(string $lo_bound_y) Return the first ChildCareTzLaboratoryParam filtered by the lo_bound_y column
 * @method     ChildCareTzLaboratoryParam findOneByHiCriticalY(string $hi_critical_y) Return the first ChildCareTzLaboratoryParam filtered by the hi_critical_y column
 * @method     ChildCareTzLaboratoryParam findOneByLoCriticalY(string $lo_critical_y) Return the first ChildCareTzLaboratoryParam filtered by the lo_critical_y column
 * @method     ChildCareTzLaboratoryParam findOneByHiToxicY(string $hi_toxic_y) Return the first ChildCareTzLaboratoryParam filtered by the hi_toxic_y column
 * @method     ChildCareTzLaboratoryParam findOneByLoToxicY(string $lo_toxic_y) Return the first ChildCareTzLaboratoryParam filtered by the lo_toxic_y column
 * @method     ChildCareTzLaboratoryParam findOneByMedianC(string $median_c) Return the first ChildCareTzLaboratoryParam filtered by the median_c column
 * @method     ChildCareTzLaboratoryParam findOneByHiBoundC(string $hi_bound_c) Return the first ChildCareTzLaboratoryParam filtered by the hi_bound_c column
 * @method     ChildCareTzLaboratoryParam findOneByLoBoundC(string $lo_bound_c) Return the first ChildCareTzLaboratoryParam filtered by the lo_bound_c column
 * @method     ChildCareTzLaboratoryParam findOneByHiCriticalC(string $hi_critical_c) Return the first ChildCareTzLaboratoryParam filtered by the hi_critical_c column
 * @method     ChildCareTzLaboratoryParam findOneByLoCriticalC(string $lo_critical_c) Return the first ChildCareTzLaboratoryParam filtered by the lo_critical_c column
 * @method     ChildCareTzLaboratoryParam findOneByHiToxicC(string $hi_toxic_c) Return the first ChildCareTzLaboratoryParam filtered by the hi_toxic_c column
 * @method     ChildCareTzLaboratoryParam findOneByLoToxicC(string $lo_toxic_c) Return the first ChildCareTzLaboratoryParam filtered by the lo_toxic_c column
 * @method     ChildCareTzLaboratoryParam findOneByMethod(string $method) Return the first ChildCareTzLaboratoryParam filtered by the method column
 * @method     ChildCareTzLaboratoryParam findOneByFieldType(string $field_type) Return the first ChildCareTzLaboratoryParam filtered by the field_type column
 * @method     ChildCareTzLaboratoryParam findOneByAddType(string $add_type) Return the first ChildCareTzLaboratoryParam filtered by the add_type column
 * @method     ChildCareTzLaboratoryParam findOneByAddLabel(string $add_label) Return the first ChildCareTzLaboratoryParam filtered by the add_label column
 * @method     ChildCareTzLaboratoryParam findOneByStatus(string $status) Return the first ChildCareTzLaboratoryParam filtered by the status column
 * @method     ChildCareTzLaboratoryParam findOneByHistory(string $history) Return the first ChildCareTzLaboratoryParam filtered by the history column
 * @method     ChildCareTzLaboratoryParam findOneByModifyId(string $modify_id) Return the first ChildCareTzLaboratoryParam filtered by the modify_id column
 * @method     ChildCareTzLaboratoryParam findOneByModifyTime(string $modify_time) Return the first ChildCareTzLaboratoryParam filtered by the modify_time column
 * @method     ChildCareTzLaboratoryParam findOneByCreateId(string $create_id) Return the first ChildCareTzLaboratoryParam filtered by the create_id column
 * @method     ChildCareTzLaboratoryParam findOneByCreateTime(string $create_time) Return the first ChildCareTzLaboratoryParam filtered by the create_time column
 * @method     ChildCareTzLaboratoryParam findOneByPrice(string $price) Return the first ChildCareTzLaboratoryParam filtered by the price column
 * @method     ChildCareTzLaboratoryParam findOneByPrice3(string $price_3) Return the first ChildCareTzLaboratoryParam filtered by the price_3 column
 * @method     ChildCareTzLaboratoryParam findOneByPrice2(string $price_2) Return the first ChildCareTzLaboratoryParam filtered by the price_2 column
 * @method     ChildCareTzLaboratoryParam findOneByPrice1(string $price_1) Return the first ChildCareTzLaboratoryParam filtered by the price_1 column *

 * @method     ChildCareTzLaboratoryParam requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzLaboratoryParam by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOne(ConnectionInterface $con = null) Return the first ChildCareTzLaboratoryParam matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzLaboratoryParam requireOneByNr(string $nr) Return the first ChildCareTzLaboratoryParam filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByGroupId(string $group_id) Return the first ChildCareTzLaboratoryParam filtered by the group_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByName(string $name) Return the first ChildCareTzLaboratoryParam filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByShortname(string $shortname) Return the first ChildCareTzLaboratoryParam filtered by the shortname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneBySortNr(int $sort_nr) Return the first ChildCareTzLaboratoryParam filtered by the sort_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneById(string $id) Return the first ChildCareTzLaboratoryParam filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByMsrUnit(string $msr_unit) Return the first ChildCareTzLaboratoryParam filtered by the msr_unit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByMedian(string $median) Return the first ChildCareTzLaboratoryParam filtered by the median column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiBound(string $hi_bound) Return the first ChildCareTzLaboratoryParam filtered by the hi_bound column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoBound(string $lo_bound) Return the first ChildCareTzLaboratoryParam filtered by the lo_bound column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiCritical(string $hi_critical) Return the first ChildCareTzLaboratoryParam filtered by the hi_critical column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoCritical(string $lo_critical) Return the first ChildCareTzLaboratoryParam filtered by the lo_critical column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiToxic(string $hi_toxic) Return the first ChildCareTzLaboratoryParam filtered by the hi_toxic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoToxic(string $lo_toxic) Return the first ChildCareTzLaboratoryParam filtered by the lo_toxic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByMedianF(string $median_f) Return the first ChildCareTzLaboratoryParam filtered by the median_f column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiBoundF(string $hi_bound_f) Return the first ChildCareTzLaboratoryParam filtered by the hi_bound_f column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoBoundF(string $lo_bound_f) Return the first ChildCareTzLaboratoryParam filtered by the lo_bound_f column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiCriticalF(string $hi_critical_f) Return the first ChildCareTzLaboratoryParam filtered by the hi_critical_f column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoCriticalF(string $lo_critical_f) Return the first ChildCareTzLaboratoryParam filtered by the lo_critical_f column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiToxicF(string $hi_toxic_f) Return the first ChildCareTzLaboratoryParam filtered by the hi_toxic_f column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoToxicF(string $lo_toxic_f) Return the first ChildCareTzLaboratoryParam filtered by the lo_toxic_f column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByMedianN(string $median_n) Return the first ChildCareTzLaboratoryParam filtered by the median_n column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiBoundN(string $hi_bound_n) Return the first ChildCareTzLaboratoryParam filtered by the hi_bound_n column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoBoundN(string $lo_bound_n) Return the first ChildCareTzLaboratoryParam filtered by the lo_bound_n column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiCriticalN(string $hi_critical_n) Return the first ChildCareTzLaboratoryParam filtered by the hi_critical_n column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoCriticalN(string $lo_critical_n) Return the first ChildCareTzLaboratoryParam filtered by the lo_critical_n column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiToxicN(string $hi_toxic_n) Return the first ChildCareTzLaboratoryParam filtered by the hi_toxic_n column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoToxicN(string $lo_toxic_n) Return the first ChildCareTzLaboratoryParam filtered by the lo_toxic_n column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByMedianY(string $median_y) Return the first ChildCareTzLaboratoryParam filtered by the median_y column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiBoundY(string $hi_bound_y) Return the first ChildCareTzLaboratoryParam filtered by the hi_bound_y column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoBoundY(string $lo_bound_y) Return the first ChildCareTzLaboratoryParam filtered by the lo_bound_y column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiCriticalY(string $hi_critical_y) Return the first ChildCareTzLaboratoryParam filtered by the hi_critical_y column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoCriticalY(string $lo_critical_y) Return the first ChildCareTzLaboratoryParam filtered by the lo_critical_y column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiToxicY(string $hi_toxic_y) Return the first ChildCareTzLaboratoryParam filtered by the hi_toxic_y column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoToxicY(string $lo_toxic_y) Return the first ChildCareTzLaboratoryParam filtered by the lo_toxic_y column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByMedianC(string $median_c) Return the first ChildCareTzLaboratoryParam filtered by the median_c column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiBoundC(string $hi_bound_c) Return the first ChildCareTzLaboratoryParam filtered by the hi_bound_c column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoBoundC(string $lo_bound_c) Return the first ChildCareTzLaboratoryParam filtered by the lo_bound_c column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiCriticalC(string $hi_critical_c) Return the first ChildCareTzLaboratoryParam filtered by the hi_critical_c column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoCriticalC(string $lo_critical_c) Return the first ChildCareTzLaboratoryParam filtered by the lo_critical_c column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHiToxicC(string $hi_toxic_c) Return the first ChildCareTzLaboratoryParam filtered by the hi_toxic_c column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByLoToxicC(string $lo_toxic_c) Return the first ChildCareTzLaboratoryParam filtered by the lo_toxic_c column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByMethod(string $method) Return the first ChildCareTzLaboratoryParam filtered by the method column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByFieldType(string $field_type) Return the first ChildCareTzLaboratoryParam filtered by the field_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByAddType(string $add_type) Return the first ChildCareTzLaboratoryParam filtered by the add_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByAddLabel(string $add_label) Return the first ChildCareTzLaboratoryParam filtered by the add_label column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByStatus(string $status) Return the first ChildCareTzLaboratoryParam filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByHistory(string $history) Return the first ChildCareTzLaboratoryParam filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByModifyId(string $modify_id) Return the first ChildCareTzLaboratoryParam filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByModifyTime(string $modify_time) Return the first ChildCareTzLaboratoryParam filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByCreateId(string $create_id) Return the first ChildCareTzLaboratoryParam filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByCreateTime(string $create_time) Return the first ChildCareTzLaboratoryParam filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByPrice(string $price) Return the first ChildCareTzLaboratoryParam filtered by the price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByPrice3(string $price_3) Return the first ChildCareTzLaboratoryParam filtered by the price_3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByPrice2(string $price_2) Return the first ChildCareTzLaboratoryParam filtered by the price_2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzLaboratoryParam requireOneByPrice1(string $price_1) Return the first ChildCareTzLaboratoryParam filtered by the price_1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzLaboratoryParam objects based on current ModelCriteria
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByNr(string $nr) Return ChildCareTzLaboratoryParam objects filtered by the nr column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByGroupId(string $group_id) Return ChildCareTzLaboratoryParam objects filtered by the group_id column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByName(string $name) Return ChildCareTzLaboratoryParam objects filtered by the name column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByShortname(string $shortname) Return ChildCareTzLaboratoryParam objects filtered by the shortname column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findBySortNr(int $sort_nr) Return ChildCareTzLaboratoryParam objects filtered by the sort_nr column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findById(string $id) Return ChildCareTzLaboratoryParam objects filtered by the id column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByMsrUnit(string $msr_unit) Return ChildCareTzLaboratoryParam objects filtered by the msr_unit column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByMedian(string $median) Return ChildCareTzLaboratoryParam objects filtered by the median column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiBound(string $hi_bound) Return ChildCareTzLaboratoryParam objects filtered by the hi_bound column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoBound(string $lo_bound) Return ChildCareTzLaboratoryParam objects filtered by the lo_bound column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiCritical(string $hi_critical) Return ChildCareTzLaboratoryParam objects filtered by the hi_critical column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoCritical(string $lo_critical) Return ChildCareTzLaboratoryParam objects filtered by the lo_critical column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiToxic(string $hi_toxic) Return ChildCareTzLaboratoryParam objects filtered by the hi_toxic column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoToxic(string $lo_toxic) Return ChildCareTzLaboratoryParam objects filtered by the lo_toxic column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByMedianF(string $median_f) Return ChildCareTzLaboratoryParam objects filtered by the median_f column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiBoundF(string $hi_bound_f) Return ChildCareTzLaboratoryParam objects filtered by the hi_bound_f column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoBoundF(string $lo_bound_f) Return ChildCareTzLaboratoryParam objects filtered by the lo_bound_f column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiCriticalF(string $hi_critical_f) Return ChildCareTzLaboratoryParam objects filtered by the hi_critical_f column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoCriticalF(string $lo_critical_f) Return ChildCareTzLaboratoryParam objects filtered by the lo_critical_f column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiToxicF(string $hi_toxic_f) Return ChildCareTzLaboratoryParam objects filtered by the hi_toxic_f column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoToxicF(string $lo_toxic_f) Return ChildCareTzLaboratoryParam objects filtered by the lo_toxic_f column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByMedianN(string $median_n) Return ChildCareTzLaboratoryParam objects filtered by the median_n column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiBoundN(string $hi_bound_n) Return ChildCareTzLaboratoryParam objects filtered by the hi_bound_n column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoBoundN(string $lo_bound_n) Return ChildCareTzLaboratoryParam objects filtered by the lo_bound_n column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiCriticalN(string $hi_critical_n) Return ChildCareTzLaboratoryParam objects filtered by the hi_critical_n column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoCriticalN(string $lo_critical_n) Return ChildCareTzLaboratoryParam objects filtered by the lo_critical_n column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiToxicN(string $hi_toxic_n) Return ChildCareTzLaboratoryParam objects filtered by the hi_toxic_n column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoToxicN(string $lo_toxic_n) Return ChildCareTzLaboratoryParam objects filtered by the lo_toxic_n column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByMedianY(string $median_y) Return ChildCareTzLaboratoryParam objects filtered by the median_y column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiBoundY(string $hi_bound_y) Return ChildCareTzLaboratoryParam objects filtered by the hi_bound_y column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoBoundY(string $lo_bound_y) Return ChildCareTzLaboratoryParam objects filtered by the lo_bound_y column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiCriticalY(string $hi_critical_y) Return ChildCareTzLaboratoryParam objects filtered by the hi_critical_y column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoCriticalY(string $lo_critical_y) Return ChildCareTzLaboratoryParam objects filtered by the lo_critical_y column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiToxicY(string $hi_toxic_y) Return ChildCareTzLaboratoryParam objects filtered by the hi_toxic_y column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoToxicY(string $lo_toxic_y) Return ChildCareTzLaboratoryParam objects filtered by the lo_toxic_y column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByMedianC(string $median_c) Return ChildCareTzLaboratoryParam objects filtered by the median_c column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiBoundC(string $hi_bound_c) Return ChildCareTzLaboratoryParam objects filtered by the hi_bound_c column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoBoundC(string $lo_bound_c) Return ChildCareTzLaboratoryParam objects filtered by the lo_bound_c column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiCriticalC(string $hi_critical_c) Return ChildCareTzLaboratoryParam objects filtered by the hi_critical_c column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoCriticalC(string $lo_critical_c) Return ChildCareTzLaboratoryParam objects filtered by the lo_critical_c column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHiToxicC(string $hi_toxic_c) Return ChildCareTzLaboratoryParam objects filtered by the hi_toxic_c column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByLoToxicC(string $lo_toxic_c) Return ChildCareTzLaboratoryParam objects filtered by the lo_toxic_c column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByMethod(string $method) Return ChildCareTzLaboratoryParam objects filtered by the method column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByFieldType(string $field_type) Return ChildCareTzLaboratoryParam objects filtered by the field_type column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByAddType(string $add_type) Return ChildCareTzLaboratoryParam objects filtered by the add_type column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByAddLabel(string $add_label) Return ChildCareTzLaboratoryParam objects filtered by the add_label column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByStatus(string $status) Return ChildCareTzLaboratoryParam objects filtered by the status column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByHistory(string $history) Return ChildCareTzLaboratoryParam objects filtered by the history column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTzLaboratoryParam objects filtered by the modify_id column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTzLaboratoryParam objects filtered by the modify_time column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTzLaboratoryParam objects filtered by the create_id column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTzLaboratoryParam objects filtered by the create_time column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByPrice(string $price) Return ChildCareTzLaboratoryParam objects filtered by the price column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByPrice3(string $price_3) Return ChildCareTzLaboratoryParam objects filtered by the price_3 column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByPrice2(string $price_2) Return ChildCareTzLaboratoryParam objects filtered by the price_2 column
 * @method     ChildCareTzLaboratoryParam[]|ObjectCollection findByPrice1(string $price_1) Return ChildCareTzLaboratoryParam objects filtered by the price_1 column
 * @method     ChildCareTzLaboratoryParam[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzLaboratoryParamQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzLaboratoryParamQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzLaboratoryParam', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzLaboratoryParamQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzLaboratoryParamQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzLaboratoryParamQuery) {
            return $criteria;
        }
        $query = new ChildCareTzLaboratoryParamQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTzLaboratoryParam|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzLaboratoryParamTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzLaboratoryParamTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCareTzLaboratoryParam A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, group_id, name, shortname, sort_nr, id, msr_unit, median, hi_bound, lo_bound, hi_critical, lo_critical, hi_toxic, lo_toxic, median_f, hi_bound_f, lo_bound_f, hi_critical_f, lo_critical_f, hi_toxic_f, lo_toxic_f, median_n, hi_bound_n, lo_bound_n, hi_critical_n, lo_critical_n, hi_toxic_n, lo_toxic_n, median_y, hi_bound_y, lo_bound_y, hi_critical_y, lo_critical_y, hi_toxic_y, lo_toxic_y, median_c, hi_bound_c, lo_bound_c, hi_critical_c, lo_critical_c, hi_toxic_c, lo_toxic_c, method, field_type, add_type, add_label, status, history, modify_id, modify_time, create_id, create_time, price, price_3, price_2, price_1 FROM care_tz_laboratory_param WHERE nr = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTzLaboratoryParam $obj */
            $obj = new ChildCareTzLaboratoryParam();
            $obj->hydrate($row);
            CareTzLaboratoryParamTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildCareTzLaboratoryParam|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the nr column
     *
     * Example usage:
     * <code>
     * $query->filterByNr(1234); // WHERE nr = 1234
     * $query->filterByNr(array(12, 34)); // WHERE nr IN (12, 34)
     * $query->filterByNr(array('min' => 12)); // WHERE nr > 12
     * </code>
     *
     * @param     mixed $nr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the group_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupId('fooValue');   // WHERE group_id = 'fooValue'
     * $query->filterByGroupId('%fooValue%', Criteria::LIKE); // WHERE group_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groupId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByGroupId($groupId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_GROUP_ID, $groupId, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the shortname column
     *
     * Example usage:
     * <code>
     * $query->filterByShortname('fooValue');   // WHERE shortname = 'fooValue'
     * $query->filterByShortname('%fooValue%', Criteria::LIKE); // WHERE shortname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shortname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByShortname($shortname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_SHORTNAME, $shortname, $comparison);
    }

    /**
     * Filter the query on the sort_nr column
     *
     * Example usage:
     * <code>
     * $query->filterBySortNr(1234); // WHERE sort_nr = 1234
     * $query->filterBySortNr(array(12, 34)); // WHERE sort_nr IN (12, 34)
     * $query->filterBySortNr(array('min' => 12)); // WHERE sort_nr > 12
     * </code>
     *
     * @param     mixed $sortNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterBySortNr($sortNr = null, $comparison = null)
    {
        if (is_array($sortNr)) {
            $useMinMax = false;
            if (isset($sortNr['min'])) {
                $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_SORT_NR, $sortNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortNr['max'])) {
                $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_SORT_NR, $sortNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_SORT_NR, $sortNr, $comparison);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE id = 'fooValue'
     * $query->filterById('%fooValue%', Criteria::LIKE); // WHERE id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the msr_unit column
     *
     * Example usage:
     * <code>
     * $query->filterByMsrUnit('fooValue');   // WHERE msr_unit = 'fooValue'
     * $query->filterByMsrUnit('%fooValue%', Criteria::LIKE); // WHERE msr_unit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $msrUnit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByMsrUnit($msrUnit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($msrUnit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_MSR_UNIT, $msrUnit, $comparison);
    }

    /**
     * Filter the query on the median column
     *
     * Example usage:
     * <code>
     * $query->filterByMedian('fooValue');   // WHERE median = 'fooValue'
     * $query->filterByMedian('%fooValue%', Criteria::LIKE); // WHERE median LIKE '%fooValue%'
     * </code>
     *
     * @param     string $median The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByMedian($median = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($median)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_MEDIAN, $median, $comparison);
    }

    /**
     * Filter the query on the hi_bound column
     *
     * Example usage:
     * <code>
     * $query->filterByHiBound('fooValue');   // WHERE hi_bound = 'fooValue'
     * $query->filterByHiBound('%fooValue%', Criteria::LIKE); // WHERE hi_bound LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiBound The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiBound($hiBound = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiBound)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_BOUND, $hiBound, $comparison);
    }

    /**
     * Filter the query on the lo_bound column
     *
     * Example usage:
     * <code>
     * $query->filterByLoBound('fooValue');   // WHERE lo_bound = 'fooValue'
     * $query->filterByLoBound('%fooValue%', Criteria::LIKE); // WHERE lo_bound LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loBound The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoBound($loBound = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loBound)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_BOUND, $loBound, $comparison);
    }

    /**
     * Filter the query on the hi_critical column
     *
     * Example usage:
     * <code>
     * $query->filterByHiCritical('fooValue');   // WHERE hi_critical = 'fooValue'
     * $query->filterByHiCritical('%fooValue%', Criteria::LIKE); // WHERE hi_critical LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiCritical The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiCritical($hiCritical = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiCritical)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL, $hiCritical, $comparison);
    }

    /**
     * Filter the query on the lo_critical column
     *
     * Example usage:
     * <code>
     * $query->filterByLoCritical('fooValue');   // WHERE lo_critical = 'fooValue'
     * $query->filterByLoCritical('%fooValue%', Criteria::LIKE); // WHERE lo_critical LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loCritical The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoCritical($loCritical = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loCritical)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL, $loCritical, $comparison);
    }

    /**
     * Filter the query on the hi_toxic column
     *
     * Example usage:
     * <code>
     * $query->filterByHiToxic('fooValue');   // WHERE hi_toxic = 'fooValue'
     * $query->filterByHiToxic('%fooValue%', Criteria::LIKE); // WHERE hi_toxic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiToxic The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiToxic($hiToxic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiToxic)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_TOXIC, $hiToxic, $comparison);
    }

    /**
     * Filter the query on the lo_toxic column
     *
     * Example usage:
     * <code>
     * $query->filterByLoToxic('fooValue');   // WHERE lo_toxic = 'fooValue'
     * $query->filterByLoToxic('%fooValue%', Criteria::LIKE); // WHERE lo_toxic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loToxic The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoToxic($loToxic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loToxic)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_TOXIC, $loToxic, $comparison);
    }

    /**
     * Filter the query on the median_f column
     *
     * Example usage:
     * <code>
     * $query->filterByMedianF('fooValue');   // WHERE median_f = 'fooValue'
     * $query->filterByMedianF('%fooValue%', Criteria::LIKE); // WHERE median_f LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medianF The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByMedianF($medianF = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medianF)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_MEDIAN_F, $medianF, $comparison);
    }

    /**
     * Filter the query on the hi_bound_f column
     *
     * Example usage:
     * <code>
     * $query->filterByHiBoundF('fooValue');   // WHERE hi_bound_f = 'fooValue'
     * $query->filterByHiBoundF('%fooValue%', Criteria::LIKE); // WHERE hi_bound_f LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiBoundF The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiBoundF($hiBoundF = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiBoundF)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_BOUND_F, $hiBoundF, $comparison);
    }

    /**
     * Filter the query on the lo_bound_f column
     *
     * Example usage:
     * <code>
     * $query->filterByLoBoundF('fooValue');   // WHERE lo_bound_f = 'fooValue'
     * $query->filterByLoBoundF('%fooValue%', Criteria::LIKE); // WHERE lo_bound_f LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loBoundF The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoBoundF($loBoundF = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loBoundF)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_BOUND_F, $loBoundF, $comparison);
    }

    /**
     * Filter the query on the hi_critical_f column
     *
     * Example usage:
     * <code>
     * $query->filterByHiCriticalF('fooValue');   // WHERE hi_critical_f = 'fooValue'
     * $query->filterByHiCriticalF('%fooValue%', Criteria::LIKE); // WHERE hi_critical_f LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiCriticalF The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiCriticalF($hiCriticalF = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiCriticalF)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_F, $hiCriticalF, $comparison);
    }

    /**
     * Filter the query on the lo_critical_f column
     *
     * Example usage:
     * <code>
     * $query->filterByLoCriticalF('fooValue');   // WHERE lo_critical_f = 'fooValue'
     * $query->filterByLoCriticalF('%fooValue%', Criteria::LIKE); // WHERE lo_critical_f LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loCriticalF The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoCriticalF($loCriticalF = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loCriticalF)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_F, $loCriticalF, $comparison);
    }

    /**
     * Filter the query on the hi_toxic_f column
     *
     * Example usage:
     * <code>
     * $query->filterByHiToxicF('fooValue');   // WHERE hi_toxic_f = 'fooValue'
     * $query->filterByHiToxicF('%fooValue%', Criteria::LIKE); // WHERE hi_toxic_f LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiToxicF The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiToxicF($hiToxicF = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiToxicF)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_F, $hiToxicF, $comparison);
    }

    /**
     * Filter the query on the lo_toxic_f column
     *
     * Example usage:
     * <code>
     * $query->filterByLoToxicF('fooValue');   // WHERE lo_toxic_f = 'fooValue'
     * $query->filterByLoToxicF('%fooValue%', Criteria::LIKE); // WHERE lo_toxic_f LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loToxicF The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoToxicF($loToxicF = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loToxicF)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_F, $loToxicF, $comparison);
    }

    /**
     * Filter the query on the median_n column
     *
     * Example usage:
     * <code>
     * $query->filterByMedianN('fooValue');   // WHERE median_n = 'fooValue'
     * $query->filterByMedianN('%fooValue%', Criteria::LIKE); // WHERE median_n LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medianN The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByMedianN($medianN = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medianN)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_MEDIAN_N, $medianN, $comparison);
    }

    /**
     * Filter the query on the hi_bound_n column
     *
     * Example usage:
     * <code>
     * $query->filterByHiBoundN('fooValue');   // WHERE hi_bound_n = 'fooValue'
     * $query->filterByHiBoundN('%fooValue%', Criteria::LIKE); // WHERE hi_bound_n LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiBoundN The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiBoundN($hiBoundN = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiBoundN)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_BOUND_N, $hiBoundN, $comparison);
    }

    /**
     * Filter the query on the lo_bound_n column
     *
     * Example usage:
     * <code>
     * $query->filterByLoBoundN('fooValue');   // WHERE lo_bound_n = 'fooValue'
     * $query->filterByLoBoundN('%fooValue%', Criteria::LIKE); // WHERE lo_bound_n LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loBoundN The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoBoundN($loBoundN = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loBoundN)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_BOUND_N, $loBoundN, $comparison);
    }

    /**
     * Filter the query on the hi_critical_n column
     *
     * Example usage:
     * <code>
     * $query->filterByHiCriticalN('fooValue');   // WHERE hi_critical_n = 'fooValue'
     * $query->filterByHiCriticalN('%fooValue%', Criteria::LIKE); // WHERE hi_critical_n LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiCriticalN The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiCriticalN($hiCriticalN = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiCriticalN)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_N, $hiCriticalN, $comparison);
    }

    /**
     * Filter the query on the lo_critical_n column
     *
     * Example usage:
     * <code>
     * $query->filterByLoCriticalN('fooValue');   // WHERE lo_critical_n = 'fooValue'
     * $query->filterByLoCriticalN('%fooValue%', Criteria::LIKE); // WHERE lo_critical_n LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loCriticalN The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoCriticalN($loCriticalN = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loCriticalN)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_N, $loCriticalN, $comparison);
    }

    /**
     * Filter the query on the hi_toxic_n column
     *
     * Example usage:
     * <code>
     * $query->filterByHiToxicN('fooValue');   // WHERE hi_toxic_n = 'fooValue'
     * $query->filterByHiToxicN('%fooValue%', Criteria::LIKE); // WHERE hi_toxic_n LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiToxicN The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiToxicN($hiToxicN = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiToxicN)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_N, $hiToxicN, $comparison);
    }

    /**
     * Filter the query on the lo_toxic_n column
     *
     * Example usage:
     * <code>
     * $query->filterByLoToxicN('fooValue');   // WHERE lo_toxic_n = 'fooValue'
     * $query->filterByLoToxicN('%fooValue%', Criteria::LIKE); // WHERE lo_toxic_n LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loToxicN The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoToxicN($loToxicN = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loToxicN)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_N, $loToxicN, $comparison);
    }

    /**
     * Filter the query on the median_y column
     *
     * Example usage:
     * <code>
     * $query->filterByMedianY('fooValue');   // WHERE median_y = 'fooValue'
     * $query->filterByMedianY('%fooValue%', Criteria::LIKE); // WHERE median_y LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medianY The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByMedianY($medianY = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medianY)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_MEDIAN_Y, $medianY, $comparison);
    }

    /**
     * Filter the query on the hi_bound_y column
     *
     * Example usage:
     * <code>
     * $query->filterByHiBoundY('fooValue');   // WHERE hi_bound_y = 'fooValue'
     * $query->filterByHiBoundY('%fooValue%', Criteria::LIKE); // WHERE hi_bound_y LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiBoundY The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiBoundY($hiBoundY = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiBoundY)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_BOUND_Y, $hiBoundY, $comparison);
    }

    /**
     * Filter the query on the lo_bound_y column
     *
     * Example usage:
     * <code>
     * $query->filterByLoBoundY('fooValue');   // WHERE lo_bound_y = 'fooValue'
     * $query->filterByLoBoundY('%fooValue%', Criteria::LIKE); // WHERE lo_bound_y LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loBoundY The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoBoundY($loBoundY = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loBoundY)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_BOUND_Y, $loBoundY, $comparison);
    }

    /**
     * Filter the query on the hi_critical_y column
     *
     * Example usage:
     * <code>
     * $query->filterByHiCriticalY('fooValue');   // WHERE hi_critical_y = 'fooValue'
     * $query->filterByHiCriticalY('%fooValue%', Criteria::LIKE); // WHERE hi_critical_y LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiCriticalY The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiCriticalY($hiCriticalY = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiCriticalY)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_Y, $hiCriticalY, $comparison);
    }

    /**
     * Filter the query on the lo_critical_y column
     *
     * Example usage:
     * <code>
     * $query->filterByLoCriticalY('fooValue');   // WHERE lo_critical_y = 'fooValue'
     * $query->filterByLoCriticalY('%fooValue%', Criteria::LIKE); // WHERE lo_critical_y LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loCriticalY The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoCriticalY($loCriticalY = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loCriticalY)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_Y, $loCriticalY, $comparison);
    }

    /**
     * Filter the query on the hi_toxic_y column
     *
     * Example usage:
     * <code>
     * $query->filterByHiToxicY('fooValue');   // WHERE hi_toxic_y = 'fooValue'
     * $query->filterByHiToxicY('%fooValue%', Criteria::LIKE); // WHERE hi_toxic_y LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiToxicY The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiToxicY($hiToxicY = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiToxicY)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_Y, $hiToxicY, $comparison);
    }

    /**
     * Filter the query on the lo_toxic_y column
     *
     * Example usage:
     * <code>
     * $query->filterByLoToxicY('fooValue');   // WHERE lo_toxic_y = 'fooValue'
     * $query->filterByLoToxicY('%fooValue%', Criteria::LIKE); // WHERE lo_toxic_y LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loToxicY The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoToxicY($loToxicY = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loToxicY)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_Y, $loToxicY, $comparison);
    }

    /**
     * Filter the query on the median_c column
     *
     * Example usage:
     * <code>
     * $query->filterByMedianC('fooValue');   // WHERE median_c = 'fooValue'
     * $query->filterByMedianC('%fooValue%', Criteria::LIKE); // WHERE median_c LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medianC The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByMedianC($medianC = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medianC)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_MEDIAN_C, $medianC, $comparison);
    }

    /**
     * Filter the query on the hi_bound_c column
     *
     * Example usage:
     * <code>
     * $query->filterByHiBoundC('fooValue');   // WHERE hi_bound_c = 'fooValue'
     * $query->filterByHiBoundC('%fooValue%', Criteria::LIKE); // WHERE hi_bound_c LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiBoundC The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiBoundC($hiBoundC = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiBoundC)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_BOUND_C, $hiBoundC, $comparison);
    }

    /**
     * Filter the query on the lo_bound_c column
     *
     * Example usage:
     * <code>
     * $query->filterByLoBoundC('fooValue');   // WHERE lo_bound_c = 'fooValue'
     * $query->filterByLoBoundC('%fooValue%', Criteria::LIKE); // WHERE lo_bound_c LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loBoundC The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoBoundC($loBoundC = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loBoundC)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_BOUND_C, $loBoundC, $comparison);
    }

    /**
     * Filter the query on the hi_critical_c column
     *
     * Example usage:
     * <code>
     * $query->filterByHiCriticalC('fooValue');   // WHERE hi_critical_c = 'fooValue'
     * $query->filterByHiCriticalC('%fooValue%', Criteria::LIKE); // WHERE hi_critical_c LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiCriticalC The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiCriticalC($hiCriticalC = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiCriticalC)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_CRITICAL_C, $hiCriticalC, $comparison);
    }

    /**
     * Filter the query on the lo_critical_c column
     *
     * Example usage:
     * <code>
     * $query->filterByLoCriticalC('fooValue');   // WHERE lo_critical_c = 'fooValue'
     * $query->filterByLoCriticalC('%fooValue%', Criteria::LIKE); // WHERE lo_critical_c LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loCriticalC The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoCriticalC($loCriticalC = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loCriticalC)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_CRITICAL_C, $loCriticalC, $comparison);
    }

    /**
     * Filter the query on the hi_toxic_c column
     *
     * Example usage:
     * <code>
     * $query->filterByHiToxicC('fooValue');   // WHERE hi_toxic_c = 'fooValue'
     * $query->filterByHiToxicC('%fooValue%', Criteria::LIKE); // WHERE hi_toxic_c LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiToxicC The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHiToxicC($hiToxicC = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiToxicC)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HI_TOXIC_C, $hiToxicC, $comparison);
    }

    /**
     * Filter the query on the lo_toxic_c column
     *
     * Example usage:
     * <code>
     * $query->filterByLoToxicC('fooValue');   // WHERE lo_toxic_c = 'fooValue'
     * $query->filterByLoToxicC('%fooValue%', Criteria::LIKE); // WHERE lo_toxic_c LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loToxicC The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByLoToxicC($loToxicC = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loToxicC)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_LO_TOXIC_C, $loToxicC, $comparison);
    }

    /**
     * Filter the query on the method column
     *
     * Example usage:
     * <code>
     * $query->filterByMethod('fooValue');   // WHERE method = 'fooValue'
     * $query->filterByMethod('%fooValue%', Criteria::LIKE); // WHERE method LIKE '%fooValue%'
     * </code>
     *
     * @param     string $method The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByMethod($method = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($method)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_METHOD, $method, $comparison);
    }

    /**
     * Filter the query on the field_type column
     *
     * Example usage:
     * <code>
     * $query->filterByFieldType('fooValue');   // WHERE field_type = 'fooValue'
     * $query->filterByFieldType('%fooValue%', Criteria::LIKE); // WHERE field_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fieldType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByFieldType($fieldType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fieldType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_FIELD_TYPE, $fieldType, $comparison);
    }

    /**
     * Filter the query on the add_type column
     *
     * Example usage:
     * <code>
     * $query->filterByAddType('fooValue');   // WHERE add_type = 'fooValue'
     * $query->filterByAddType('%fooValue%', Criteria::LIKE); // WHERE add_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByAddType($addType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_ADD_TYPE, $addType, $comparison);
    }

    /**
     * Filter the query on the add_label column
     *
     * Example usage:
     * <code>
     * $query->filterByAddLabel('fooValue');   // WHERE add_label = 'fooValue'
     * $query->filterByAddLabel('%fooValue%', Criteria::LIKE); // WHERE add_label LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addLabel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByAddLabel($addLabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addLabel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_ADD_LABEL, $addLabel, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%', Criteria::LIKE); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the history column
     *
     * Example usage:
     * <code>
     * $query->filterByHistory('fooValue');   // WHERE history = 'fooValue'
     * $query->filterByHistory('%fooValue%', Criteria::LIKE); // WHERE history LIKE '%fooValue%'
     * </code>
     *
     * @param     string $history The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Filter the query on the modify_id column
     *
     * Example usage:
     * <code>
     * $query->filterByModifyId('fooValue');   // WHERE modify_id = 'fooValue'
     * $query->filterByModifyId('%fooValue%', Criteria::LIKE); // WHERE modify_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifyId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_MODIFY_ID, $modifyId, $comparison);
    }

    /**
     * Filter the query on the modify_time column
     *
     * Example usage:
     * <code>
     * $query->filterByModifyTime('2011-03-14'); // WHERE modify_time = '2011-03-14'
     * $query->filterByModifyTime('now'); // WHERE modify_time = '2011-03-14'
     * $query->filterByModifyTime(array('max' => 'yesterday')); // WHERE modify_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $modifyTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
    }

    /**
     * Filter the query on the create_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateId('fooValue');   // WHERE create_id = 'fooValue'
     * $query->filterByCreateId('%fooValue%', Criteria::LIKE); // WHERE create_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $createId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_CREATE_ID, $createId, $comparison);
    }

    /**
     * Filter the query on the create_time column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateTime('2011-03-14'); // WHERE create_time = '2011-03-14'
     * $query->filterByCreateTime('now'); // WHERE create_time = '2011-03-14'
     * $query->filterByCreateTime(array('max' => 'yesterday')); // WHERE create_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $createTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice('fooValue');   // WHERE price = 'fooValue'
     * $query->filterByPrice('%fooValue%', Criteria::LIKE); // WHERE price LIKE '%fooValue%'
     * </code>
     *
     * @param     string $price The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($price)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the price_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice3('fooValue');   // WHERE price_3 = 'fooValue'
     * $query->filterByPrice3('%fooValue%', Criteria::LIKE); // WHERE price_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $price3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByPrice3($price3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($price3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_PRICE_3, $price3, $comparison);
    }

    /**
     * Filter the query on the price_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice2('fooValue');   // WHERE price_2 = 'fooValue'
     * $query->filterByPrice2('%fooValue%', Criteria::LIKE); // WHERE price_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $price2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByPrice2($price2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($price2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_PRICE_2, $price2, $comparison);
    }

    /**
     * Filter the query on the price_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice1('fooValue');   // WHERE price_1 = 'fooValue'
     * $query->filterByPrice1('%fooValue%', Criteria::LIKE); // WHERE price_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $price1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function filterByPrice1($price1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($price1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_PRICE_1, $price1, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzLaboratoryParam $careTzLaboratoryParam Object to remove from the list of results
     *
     * @return $this|ChildCareTzLaboratoryParamQuery The current query, for fluid interface
     */
    public function prune($careTzLaboratoryParam = null)
    {
        if ($careTzLaboratoryParam) {
            $this->addUsingAlias(CareTzLaboratoryParamTableMap::COL_NR, $careTzLaboratoryParam->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_laboratory_param table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzLaboratoryParamTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzLaboratoryParamTableMap::clearInstancePool();
            CareTzLaboratoryParamTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzLaboratoryParamTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzLaboratoryParamTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzLaboratoryParamTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzLaboratoryParamTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzLaboratoryParamQuery
