<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzDrugsandservices as ChildCareTzDrugsandservices;
use CareMd\CareMd\CareTzDrugsandservicesQuery as ChildCareTzDrugsandservicesQuery;
use CareMd\CareMd\Map\CareTzDrugsandservicesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_drugsandservices' table.
 *
 *
 *
 * @method     ChildCareTzDrugsandservicesQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ChildCareTzDrugsandservicesQuery orderByItemNumber($order = Criteria::ASC) Order by the item_number column
 * @method     ChildCareTzDrugsandservicesQuery orderByPartcode($order = Criteria::ASC) Order by the partcode column
 * @method     ChildCareTzDrugsandservicesQuery orderByIsPediatric($order = Criteria::ASC) Order by the is_pediatric column
 * @method     ChildCareTzDrugsandservicesQuery orderByIsAdult($order = Criteria::ASC) Order by the is_adult column
 * @method     ChildCareTzDrugsandservicesQuery orderByIsOther($order = Criteria::ASC) Order by the is_other column
 * @method     ChildCareTzDrugsandservicesQuery orderByIsConsumable($order = Criteria::ASC) Order by the is_consumable column
 * @method     ChildCareTzDrugsandservicesQuery orderByIsLabtest($order = Criteria::ASC) Order by the is_labtest column
 * @method     ChildCareTzDrugsandservicesQuery orderByIsRadioTest($order = Criteria::ASC) Order by the is_radio_test column
 * @method     ChildCareTzDrugsandservicesQuery orderByItemDescription($order = Criteria::ASC) Order by the item_description column
 * @method     ChildCareTzDrugsandservicesQuery orderByItemFullDescription($order = Criteria::ASC) Order by the item_full_description column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice($order = Criteria::ASC) Order by the unit_price column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice1($order = Criteria::ASC) Order by the unit_price_1 column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice2($order = Criteria::ASC) Order by the unit_price_2 column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice3($order = Criteria::ASC) Order by the unit_price_3 column
 * @method     ChildCareTzDrugsandservicesQuery orderByPurchasingClass($order = Criteria::ASC) Order by the purchasing_class column
 * @method     ChildCareTzDrugsandservicesQuery orderBySubClass($order = Criteria::ASC) Order by the sub_class column
 * @method     ChildCareTzDrugsandservicesQuery orderByNotInUse($order = Criteria::ASC) Order by the not_in_use column
 * @method     ChildCareTzDrugsandservicesQuery orderByMinLevel($order = Criteria::ASC) Order by the min_level column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice4($order = Criteria::ASC) Order by the unit_price_4 column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice5($order = Criteria::ASC) Order by the unit_price_5 column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice6($order = Criteria::ASC) Order by the unit_price_6 column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice7($order = Criteria::ASC) Order by the unit_price_7 column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice8($order = Criteria::ASC) Order by the unit_price_8 column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice9($order = Criteria::ASC) Order by the unit_price_9 column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice10($order = Criteria::ASC) Order by the unit_price_10 column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitPrice11($order = Criteria::ASC) Order by the unit_price_11 column
 * @method     ChildCareTzDrugsandservicesQuery orderByUnitCost($order = Criteria::ASC) Order by the unit_cost column
 * @method     ChildCareTzDrugsandservicesQuery orderByNhifItemCode($order = Criteria::ASC) Order by the nhif_item_code column
 *
 * @method     ChildCareTzDrugsandservicesQuery groupByItemId() Group by the item_id column
 * @method     ChildCareTzDrugsandservicesQuery groupByItemNumber() Group by the item_number column
 * @method     ChildCareTzDrugsandservicesQuery groupByPartcode() Group by the partcode column
 * @method     ChildCareTzDrugsandservicesQuery groupByIsPediatric() Group by the is_pediatric column
 * @method     ChildCareTzDrugsandservicesQuery groupByIsAdult() Group by the is_adult column
 * @method     ChildCareTzDrugsandservicesQuery groupByIsOther() Group by the is_other column
 * @method     ChildCareTzDrugsandservicesQuery groupByIsConsumable() Group by the is_consumable column
 * @method     ChildCareTzDrugsandservicesQuery groupByIsLabtest() Group by the is_labtest column
 * @method     ChildCareTzDrugsandservicesQuery groupByIsRadioTest() Group by the is_radio_test column
 * @method     ChildCareTzDrugsandservicesQuery groupByItemDescription() Group by the item_description column
 * @method     ChildCareTzDrugsandservicesQuery groupByItemFullDescription() Group by the item_full_description column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice() Group by the unit_price column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice1() Group by the unit_price_1 column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice2() Group by the unit_price_2 column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice3() Group by the unit_price_3 column
 * @method     ChildCareTzDrugsandservicesQuery groupByPurchasingClass() Group by the purchasing_class column
 * @method     ChildCareTzDrugsandservicesQuery groupBySubClass() Group by the sub_class column
 * @method     ChildCareTzDrugsandservicesQuery groupByNotInUse() Group by the not_in_use column
 * @method     ChildCareTzDrugsandservicesQuery groupByMinLevel() Group by the min_level column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice4() Group by the unit_price_4 column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice5() Group by the unit_price_5 column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice6() Group by the unit_price_6 column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice7() Group by the unit_price_7 column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice8() Group by the unit_price_8 column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice9() Group by the unit_price_9 column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice10() Group by the unit_price_10 column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitPrice11() Group by the unit_price_11 column
 * @method     ChildCareTzDrugsandservicesQuery groupByUnitCost() Group by the unit_cost column
 * @method     ChildCareTzDrugsandservicesQuery groupByNhifItemCode() Group by the nhif_item_code column
 *
 * @method     ChildCareTzDrugsandservicesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzDrugsandservicesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzDrugsandservicesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzDrugsandservicesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzDrugsandservicesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzDrugsandservicesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzDrugsandservices findOne(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservices matching the query
 * @method     ChildCareTzDrugsandservices findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservices matching the query, or a new ChildCareTzDrugsandservices object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzDrugsandservices findOneByItemId(string $item_id) Return the first ChildCareTzDrugsandservices filtered by the item_id column
 * @method     ChildCareTzDrugsandservices findOneByItemNumber(string $item_number) Return the first ChildCareTzDrugsandservices filtered by the item_number column
 * @method     ChildCareTzDrugsandservices findOneByPartcode(string $partcode) Return the first ChildCareTzDrugsandservices filtered by the partcode column
 * @method     ChildCareTzDrugsandservices findOneByIsPediatric(int $is_pediatric) Return the first ChildCareTzDrugsandservices filtered by the is_pediatric column
 * @method     ChildCareTzDrugsandservices findOneByIsAdult(int $is_adult) Return the first ChildCareTzDrugsandservices filtered by the is_adult column
 * @method     ChildCareTzDrugsandservices findOneByIsOther(int $is_other) Return the first ChildCareTzDrugsandservices filtered by the is_other column
 * @method     ChildCareTzDrugsandservices findOneByIsConsumable(int $is_consumable) Return the first ChildCareTzDrugsandservices filtered by the is_consumable column
 * @method     ChildCareTzDrugsandservices findOneByIsLabtest(int $is_labtest) Return the first ChildCareTzDrugsandservices filtered by the is_labtest column
 * @method     ChildCareTzDrugsandservices findOneByIsRadioTest(int $is_radio_test) Return the first ChildCareTzDrugsandservices filtered by the is_radio_test column
 * @method     ChildCareTzDrugsandservices findOneByItemDescription(string $item_description) Return the first ChildCareTzDrugsandservices filtered by the item_description column
 * @method     ChildCareTzDrugsandservices findOneByItemFullDescription(string $item_full_description) Return the first ChildCareTzDrugsandservices filtered by the item_full_description column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice(double $unit_price) Return the first ChildCareTzDrugsandservices filtered by the unit_price column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice1(double $unit_price_1) Return the first ChildCareTzDrugsandservices filtered by the unit_price_1 column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice2(double $unit_price_2) Return the first ChildCareTzDrugsandservices filtered by the unit_price_2 column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice3(double $unit_price_3) Return the first ChildCareTzDrugsandservices filtered by the unit_price_3 column
 * @method     ChildCareTzDrugsandservices findOneByPurchasingClass(string $purchasing_class) Return the first ChildCareTzDrugsandservices filtered by the purchasing_class column
 * @method     ChildCareTzDrugsandservices findOneBySubClass(string $sub_class) Return the first ChildCareTzDrugsandservices filtered by the sub_class column
 * @method     ChildCareTzDrugsandservices findOneByNotInUse(int $not_in_use) Return the first ChildCareTzDrugsandservices filtered by the not_in_use column
 * @method     ChildCareTzDrugsandservices findOneByMinLevel(int $min_level) Return the first ChildCareTzDrugsandservices filtered by the min_level column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice4(double $unit_price_4) Return the first ChildCareTzDrugsandservices filtered by the unit_price_4 column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice5(double $unit_price_5) Return the first ChildCareTzDrugsandservices filtered by the unit_price_5 column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice6(double $unit_price_6) Return the first ChildCareTzDrugsandservices filtered by the unit_price_6 column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice7(int $unit_price_7) Return the first ChildCareTzDrugsandservices filtered by the unit_price_7 column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice8(int $unit_price_8) Return the first ChildCareTzDrugsandservices filtered by the unit_price_8 column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice9(int $unit_price_9) Return the first ChildCareTzDrugsandservices filtered by the unit_price_9 column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice10(int $unit_price_10) Return the first ChildCareTzDrugsandservices filtered by the unit_price_10 column
 * @method     ChildCareTzDrugsandservices findOneByUnitPrice11(int $unit_price_11) Return the first ChildCareTzDrugsandservices filtered by the unit_price_11 column
 * @method     ChildCareTzDrugsandservices findOneByUnitCost(string $unit_cost) Return the first ChildCareTzDrugsandservices filtered by the unit_cost column
 * @method     ChildCareTzDrugsandservices findOneByNhifItemCode(string $nhif_item_code) Return the first ChildCareTzDrugsandservices filtered by the nhif_item_code column *

 * @method     ChildCareTzDrugsandservices requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzDrugsandservices by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOne(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservices matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDrugsandservices requireOneByItemId(string $item_id) Return the first ChildCareTzDrugsandservices filtered by the item_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByItemNumber(string $item_number) Return the first ChildCareTzDrugsandservices filtered by the item_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByPartcode(string $partcode) Return the first ChildCareTzDrugsandservices filtered by the partcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByIsPediatric(int $is_pediatric) Return the first ChildCareTzDrugsandservices filtered by the is_pediatric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByIsAdult(int $is_adult) Return the first ChildCareTzDrugsandservices filtered by the is_adult column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByIsOther(int $is_other) Return the first ChildCareTzDrugsandservices filtered by the is_other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByIsConsumable(int $is_consumable) Return the first ChildCareTzDrugsandservices filtered by the is_consumable column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByIsLabtest(int $is_labtest) Return the first ChildCareTzDrugsandservices filtered by the is_labtest column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByIsRadioTest(int $is_radio_test) Return the first ChildCareTzDrugsandservices filtered by the is_radio_test column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByItemDescription(string $item_description) Return the first ChildCareTzDrugsandservices filtered by the item_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByItemFullDescription(string $item_full_description) Return the first ChildCareTzDrugsandservices filtered by the item_full_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice(double $unit_price) Return the first ChildCareTzDrugsandservices filtered by the unit_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice1(double $unit_price_1) Return the first ChildCareTzDrugsandservices filtered by the unit_price_1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice2(double $unit_price_2) Return the first ChildCareTzDrugsandservices filtered by the unit_price_2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice3(double $unit_price_3) Return the first ChildCareTzDrugsandservices filtered by the unit_price_3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByPurchasingClass(string $purchasing_class) Return the first ChildCareTzDrugsandservices filtered by the purchasing_class column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneBySubClass(string $sub_class) Return the first ChildCareTzDrugsandservices filtered by the sub_class column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByNotInUse(int $not_in_use) Return the first ChildCareTzDrugsandservices filtered by the not_in_use column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByMinLevel(int $min_level) Return the first ChildCareTzDrugsandservices filtered by the min_level column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice4(double $unit_price_4) Return the first ChildCareTzDrugsandservices filtered by the unit_price_4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice5(double $unit_price_5) Return the first ChildCareTzDrugsandservices filtered by the unit_price_5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice6(double $unit_price_6) Return the first ChildCareTzDrugsandservices filtered by the unit_price_6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice7(int $unit_price_7) Return the first ChildCareTzDrugsandservices filtered by the unit_price_7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice8(int $unit_price_8) Return the first ChildCareTzDrugsandservices filtered by the unit_price_8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice9(int $unit_price_9) Return the first ChildCareTzDrugsandservices filtered by the unit_price_9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice10(int $unit_price_10) Return the first ChildCareTzDrugsandservices filtered by the unit_price_10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitPrice11(int $unit_price_11) Return the first ChildCareTzDrugsandservices filtered by the unit_price_11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByUnitCost(string $unit_cost) Return the first ChildCareTzDrugsandservices filtered by the unit_cost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservices requireOneByNhifItemCode(string $nhif_item_code) Return the first ChildCareTzDrugsandservices filtered by the nhif_item_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzDrugsandservices objects based on current ModelCriteria
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByItemId(string $item_id) Return ChildCareTzDrugsandservices objects filtered by the item_id column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByItemNumber(string $item_number) Return ChildCareTzDrugsandservices objects filtered by the item_number column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByPartcode(string $partcode) Return ChildCareTzDrugsandservices objects filtered by the partcode column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByIsPediatric(int $is_pediatric) Return ChildCareTzDrugsandservices objects filtered by the is_pediatric column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByIsAdult(int $is_adult) Return ChildCareTzDrugsandservices objects filtered by the is_adult column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByIsOther(int $is_other) Return ChildCareTzDrugsandservices objects filtered by the is_other column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByIsConsumable(int $is_consumable) Return ChildCareTzDrugsandservices objects filtered by the is_consumable column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByIsLabtest(int $is_labtest) Return ChildCareTzDrugsandservices objects filtered by the is_labtest column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByIsRadioTest(int $is_radio_test) Return ChildCareTzDrugsandservices objects filtered by the is_radio_test column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByItemDescription(string $item_description) Return ChildCareTzDrugsandservices objects filtered by the item_description column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByItemFullDescription(string $item_full_description) Return ChildCareTzDrugsandservices objects filtered by the item_full_description column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice(double $unit_price) Return ChildCareTzDrugsandservices objects filtered by the unit_price column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice1(double $unit_price_1) Return ChildCareTzDrugsandservices objects filtered by the unit_price_1 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice2(double $unit_price_2) Return ChildCareTzDrugsandservices objects filtered by the unit_price_2 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice3(double $unit_price_3) Return ChildCareTzDrugsandservices objects filtered by the unit_price_3 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByPurchasingClass(string $purchasing_class) Return ChildCareTzDrugsandservices objects filtered by the purchasing_class column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findBySubClass(string $sub_class) Return ChildCareTzDrugsandservices objects filtered by the sub_class column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByNotInUse(int $not_in_use) Return ChildCareTzDrugsandservices objects filtered by the not_in_use column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByMinLevel(int $min_level) Return ChildCareTzDrugsandservices objects filtered by the min_level column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice4(double $unit_price_4) Return ChildCareTzDrugsandservices objects filtered by the unit_price_4 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice5(double $unit_price_5) Return ChildCareTzDrugsandservices objects filtered by the unit_price_5 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice6(double $unit_price_6) Return ChildCareTzDrugsandservices objects filtered by the unit_price_6 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice7(int $unit_price_7) Return ChildCareTzDrugsandservices objects filtered by the unit_price_7 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice8(int $unit_price_8) Return ChildCareTzDrugsandservices objects filtered by the unit_price_8 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice9(int $unit_price_9) Return ChildCareTzDrugsandservices objects filtered by the unit_price_9 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice10(int $unit_price_10) Return ChildCareTzDrugsandservices objects filtered by the unit_price_10 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitPrice11(int $unit_price_11) Return ChildCareTzDrugsandservices objects filtered by the unit_price_11 column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByUnitCost(string $unit_cost) Return ChildCareTzDrugsandservices objects filtered by the unit_cost column
 * @method     ChildCareTzDrugsandservices[]|ObjectCollection findByNhifItemCode(string $nhif_item_code) Return ChildCareTzDrugsandservices objects filtered by the nhif_item_code column
 * @method     ChildCareTzDrugsandservices[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzDrugsandservicesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzDrugsandservicesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzDrugsandservices', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzDrugsandservicesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzDrugsandservicesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzDrugsandservicesQuery) {
            return $criteria;
        }
        $query = new ChildCareTzDrugsandservicesQuery();
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
     * @return ChildCareTzDrugsandservices|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzDrugsandservicesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzDrugsandservicesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzDrugsandservices A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT item_id, item_number, partcode, is_pediatric, is_adult, is_other, is_consumable, is_labtest, is_radio_test, item_description, item_full_description, unit_price, unit_price_1, unit_price_2, unit_price_3, purchasing_class, sub_class, not_in_use, min_level, unit_price_4, unit_price_5, unit_price_6, unit_price_7, unit_price_8, unit_price_9, unit_price_10, unit_price_11, unit_cost, nhif_item_code FROM care_tz_drugsandservices WHERE item_id = :p0';
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
            /** @var ChildCareTzDrugsandservices $obj */
            $obj = new ChildCareTzDrugsandservices();
            $obj->hydrate($row);
            CareTzDrugsandservicesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzDrugsandservices|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_ITEM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_ITEM_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemId(1234); // WHERE item_id = 1234
     * $query->filterByItemId(array(12, 34)); // WHERE item_id IN (12, 34)
     * $query->filterByItemId(array('min' => 12)); // WHERE item_id > 12
     * </code>
     *
     * @param     mixed $itemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (is_array($itemId)) {
            $useMinMax = false;
            if (isset($itemId['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemId['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the item_number column
     *
     * Example usage:
     * <code>
     * $query->filterByItemNumber('fooValue');   // WHERE item_number = 'fooValue'
     * $query->filterByItemNumber('%fooValue%', Criteria::LIKE); // WHERE item_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemNumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByItemNumber($itemNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_ITEM_NUMBER, $itemNumber, $comparison);
    }

    /**
     * Filter the query on the partcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPartcode('fooValue');   // WHERE partcode = 'fooValue'
     * $query->filterByPartcode('%fooValue%', Criteria::LIKE); // WHERE partcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $partcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByPartcode($partcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($partcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_PARTCODE, $partcode, $comparison);
    }

    /**
     * Filter the query on the is_pediatric column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPediatric(1234); // WHERE is_pediatric = 1234
     * $query->filterByIsPediatric(array(12, 34)); // WHERE is_pediatric IN (12, 34)
     * $query->filterByIsPediatric(array('min' => 12)); // WHERE is_pediatric > 12
     * </code>
     *
     * @param     mixed $isPediatric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByIsPediatric($isPediatric = null, $comparison = null)
    {
        if (is_array($isPediatric)) {
            $useMinMax = false;
            if (isset($isPediatric['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_PEDIATRIC, $isPediatric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isPediatric['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_PEDIATRIC, $isPediatric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_PEDIATRIC, $isPediatric, $comparison);
    }

    /**
     * Filter the query on the is_adult column
     *
     * Example usage:
     * <code>
     * $query->filterByIsAdult(1234); // WHERE is_adult = 1234
     * $query->filterByIsAdult(array(12, 34)); // WHERE is_adult IN (12, 34)
     * $query->filterByIsAdult(array('min' => 12)); // WHERE is_adult > 12
     * </code>
     *
     * @param     mixed $isAdult The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByIsAdult($isAdult = null, $comparison = null)
    {
        if (is_array($isAdult)) {
            $useMinMax = false;
            if (isset($isAdult['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_ADULT, $isAdult['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isAdult['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_ADULT, $isAdult['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_ADULT, $isAdult, $comparison);
    }

    /**
     * Filter the query on the is_other column
     *
     * Example usage:
     * <code>
     * $query->filterByIsOther(1234); // WHERE is_other = 1234
     * $query->filterByIsOther(array(12, 34)); // WHERE is_other IN (12, 34)
     * $query->filterByIsOther(array('min' => 12)); // WHERE is_other > 12
     * </code>
     *
     * @param     mixed $isOther The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByIsOther($isOther = null, $comparison = null)
    {
        if (is_array($isOther)) {
            $useMinMax = false;
            if (isset($isOther['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_OTHER, $isOther['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isOther['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_OTHER, $isOther['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_OTHER, $isOther, $comparison);
    }

    /**
     * Filter the query on the is_consumable column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConsumable(1234); // WHERE is_consumable = 1234
     * $query->filterByIsConsumable(array(12, 34)); // WHERE is_consumable IN (12, 34)
     * $query->filterByIsConsumable(array('min' => 12)); // WHERE is_consumable > 12
     * </code>
     *
     * @param     mixed $isConsumable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByIsConsumable($isConsumable = null, $comparison = null)
    {
        if (is_array($isConsumable)) {
            $useMinMax = false;
            if (isset($isConsumable['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_CONSUMABLE, $isConsumable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isConsumable['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_CONSUMABLE, $isConsumable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_CONSUMABLE, $isConsumable, $comparison);
    }

    /**
     * Filter the query on the is_labtest column
     *
     * Example usage:
     * <code>
     * $query->filterByIsLabtest(1234); // WHERE is_labtest = 1234
     * $query->filterByIsLabtest(array(12, 34)); // WHERE is_labtest IN (12, 34)
     * $query->filterByIsLabtest(array('min' => 12)); // WHERE is_labtest > 12
     * </code>
     *
     * @param     mixed $isLabtest The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByIsLabtest($isLabtest = null, $comparison = null)
    {
        if (is_array($isLabtest)) {
            $useMinMax = false;
            if (isset($isLabtest['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_LABTEST, $isLabtest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isLabtest['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_LABTEST, $isLabtest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_LABTEST, $isLabtest, $comparison);
    }

    /**
     * Filter the query on the is_radio_test column
     *
     * Example usage:
     * <code>
     * $query->filterByIsRadioTest(1234); // WHERE is_radio_test = 1234
     * $query->filterByIsRadioTest(array(12, 34)); // WHERE is_radio_test IN (12, 34)
     * $query->filterByIsRadioTest(array('min' => 12)); // WHERE is_radio_test > 12
     * </code>
     *
     * @param     mixed $isRadioTest The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByIsRadioTest($isRadioTest = null, $comparison = null)
    {
        if (is_array($isRadioTest)) {
            $useMinMax = false;
            if (isset($isRadioTest['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_RADIO_TEST, $isRadioTest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isRadioTest['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_RADIO_TEST, $isRadioTest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_IS_RADIO_TEST, $isRadioTest, $comparison);
    }

    /**
     * Filter the query on the item_description column
     *
     * Example usage:
     * <code>
     * $query->filterByItemDescription('fooValue');   // WHERE item_description = 'fooValue'
     * $query->filterByItemDescription('%fooValue%', Criteria::LIKE); // WHERE item_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByItemDescription($itemDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_ITEM_DESCRIPTION, $itemDescription, $comparison);
    }

    /**
     * Filter the query on the item_full_description column
     *
     * Example usage:
     * <code>
     * $query->filterByItemFullDescription('fooValue');   // WHERE item_full_description = 'fooValue'
     * $query->filterByItemFullDescription('%fooValue%', Criteria::LIKE); // WHERE item_full_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemFullDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByItemFullDescription($itemFullDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemFullDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_ITEM_FULL_DESCRIPTION, $itemFullDescription, $comparison);
    }

    /**
     * Filter the query on the unit_price column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice(1234); // WHERE unit_price = 1234
     * $query->filterByUnitPrice(array(12, 34)); // WHERE unit_price IN (12, 34)
     * $query->filterByUnitPrice(array('min' => 12)); // WHERE unit_price > 12
     * </code>
     *
     * @param     mixed $unitPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice($unitPrice = null, $comparison = null)
    {
        if (is_array($unitPrice)) {
            $useMinMax = false;
            if (isset($unitPrice['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE, $unitPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE, $unitPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE, $unitPrice, $comparison);
    }

    /**
     * Filter the query on the unit_price_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice1(1234); // WHERE unit_price_1 = 1234
     * $query->filterByUnitPrice1(array(12, 34)); // WHERE unit_price_1 IN (12, 34)
     * $query->filterByUnitPrice1(array('min' => 12)); // WHERE unit_price_1 > 12
     * </code>
     *
     * @param     mixed $unitPrice1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice1($unitPrice1 = null, $comparison = null)
    {
        if (is_array($unitPrice1)) {
            $useMinMax = false;
            if (isset($unitPrice1['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_1, $unitPrice1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice1['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_1, $unitPrice1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_1, $unitPrice1, $comparison);
    }

    /**
     * Filter the query on the unit_price_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice2(1234); // WHERE unit_price_2 = 1234
     * $query->filterByUnitPrice2(array(12, 34)); // WHERE unit_price_2 IN (12, 34)
     * $query->filterByUnitPrice2(array('min' => 12)); // WHERE unit_price_2 > 12
     * </code>
     *
     * @param     mixed $unitPrice2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice2($unitPrice2 = null, $comparison = null)
    {
        if (is_array($unitPrice2)) {
            $useMinMax = false;
            if (isset($unitPrice2['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_2, $unitPrice2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice2['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_2, $unitPrice2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_2, $unitPrice2, $comparison);
    }

    /**
     * Filter the query on the unit_price_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice3(1234); // WHERE unit_price_3 = 1234
     * $query->filterByUnitPrice3(array(12, 34)); // WHERE unit_price_3 IN (12, 34)
     * $query->filterByUnitPrice3(array('min' => 12)); // WHERE unit_price_3 > 12
     * </code>
     *
     * @param     mixed $unitPrice3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice3($unitPrice3 = null, $comparison = null)
    {
        if (is_array($unitPrice3)) {
            $useMinMax = false;
            if (isset($unitPrice3['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_3, $unitPrice3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice3['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_3, $unitPrice3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_3, $unitPrice3, $comparison);
    }

    /**
     * Filter the query on the purchasing_class column
     *
     * Example usage:
     * <code>
     * $query->filterByPurchasingClass('fooValue');   // WHERE purchasing_class = 'fooValue'
     * $query->filterByPurchasingClass('%fooValue%', Criteria::LIKE); // WHERE purchasing_class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $purchasingClass The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByPurchasingClass($purchasingClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($purchasingClass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_PURCHASING_CLASS, $purchasingClass, $comparison);
    }

    /**
     * Filter the query on the sub_class column
     *
     * Example usage:
     * <code>
     * $query->filterBySubClass('fooValue');   // WHERE sub_class = 'fooValue'
     * $query->filterBySubClass('%fooValue%', Criteria::LIKE); // WHERE sub_class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subClass The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterBySubClass($subClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subClass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_SUB_CLASS, $subClass, $comparison);
    }

    /**
     * Filter the query on the not_in_use column
     *
     * Example usage:
     * <code>
     * $query->filterByNotInUse(1234); // WHERE not_in_use = 1234
     * $query->filterByNotInUse(array(12, 34)); // WHERE not_in_use IN (12, 34)
     * $query->filterByNotInUse(array('min' => 12)); // WHERE not_in_use > 12
     * </code>
     *
     * @param     mixed $notInUse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByNotInUse($notInUse = null, $comparison = null)
    {
        if (is_array($notInUse)) {
            $useMinMax = false;
            if (isset($notInUse['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_NOT_IN_USE, $notInUse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notInUse['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_NOT_IN_USE, $notInUse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_NOT_IN_USE, $notInUse, $comparison);
    }

    /**
     * Filter the query on the min_level column
     *
     * Example usage:
     * <code>
     * $query->filterByMinLevel(1234); // WHERE min_level = 1234
     * $query->filterByMinLevel(array(12, 34)); // WHERE min_level IN (12, 34)
     * $query->filterByMinLevel(array('min' => 12)); // WHERE min_level > 12
     * </code>
     *
     * @param     mixed $minLevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByMinLevel($minLevel = null, $comparison = null)
    {
        if (is_array($minLevel)) {
            $useMinMax = false;
            if (isset($minLevel['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_MIN_LEVEL, $minLevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minLevel['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_MIN_LEVEL, $minLevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_MIN_LEVEL, $minLevel, $comparison);
    }

    /**
     * Filter the query on the unit_price_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice4(1234); // WHERE unit_price_4 = 1234
     * $query->filterByUnitPrice4(array(12, 34)); // WHERE unit_price_4 IN (12, 34)
     * $query->filterByUnitPrice4(array('min' => 12)); // WHERE unit_price_4 > 12
     * </code>
     *
     * @param     mixed $unitPrice4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice4($unitPrice4 = null, $comparison = null)
    {
        if (is_array($unitPrice4)) {
            $useMinMax = false;
            if (isset($unitPrice4['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_4, $unitPrice4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice4['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_4, $unitPrice4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_4, $unitPrice4, $comparison);
    }

    /**
     * Filter the query on the unit_price_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice5(1234); // WHERE unit_price_5 = 1234
     * $query->filterByUnitPrice5(array(12, 34)); // WHERE unit_price_5 IN (12, 34)
     * $query->filterByUnitPrice5(array('min' => 12)); // WHERE unit_price_5 > 12
     * </code>
     *
     * @param     mixed $unitPrice5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice5($unitPrice5 = null, $comparison = null)
    {
        if (is_array($unitPrice5)) {
            $useMinMax = false;
            if (isset($unitPrice5['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_5, $unitPrice5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice5['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_5, $unitPrice5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_5, $unitPrice5, $comparison);
    }

    /**
     * Filter the query on the unit_price_6 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice6(1234); // WHERE unit_price_6 = 1234
     * $query->filterByUnitPrice6(array(12, 34)); // WHERE unit_price_6 IN (12, 34)
     * $query->filterByUnitPrice6(array('min' => 12)); // WHERE unit_price_6 > 12
     * </code>
     *
     * @param     mixed $unitPrice6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice6($unitPrice6 = null, $comparison = null)
    {
        if (is_array($unitPrice6)) {
            $useMinMax = false;
            if (isset($unitPrice6['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_6, $unitPrice6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice6['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_6, $unitPrice6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_6, $unitPrice6, $comparison);
    }

    /**
     * Filter the query on the unit_price_7 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice7(1234); // WHERE unit_price_7 = 1234
     * $query->filterByUnitPrice7(array(12, 34)); // WHERE unit_price_7 IN (12, 34)
     * $query->filterByUnitPrice7(array('min' => 12)); // WHERE unit_price_7 > 12
     * </code>
     *
     * @param     mixed $unitPrice7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice7($unitPrice7 = null, $comparison = null)
    {
        if (is_array($unitPrice7)) {
            $useMinMax = false;
            if (isset($unitPrice7['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_7, $unitPrice7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice7['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_7, $unitPrice7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_7, $unitPrice7, $comparison);
    }

    /**
     * Filter the query on the unit_price_8 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice8(1234); // WHERE unit_price_8 = 1234
     * $query->filterByUnitPrice8(array(12, 34)); // WHERE unit_price_8 IN (12, 34)
     * $query->filterByUnitPrice8(array('min' => 12)); // WHERE unit_price_8 > 12
     * </code>
     *
     * @param     mixed $unitPrice8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice8($unitPrice8 = null, $comparison = null)
    {
        if (is_array($unitPrice8)) {
            $useMinMax = false;
            if (isset($unitPrice8['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_8, $unitPrice8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice8['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_8, $unitPrice8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_8, $unitPrice8, $comparison);
    }

    /**
     * Filter the query on the unit_price_9 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice9(1234); // WHERE unit_price_9 = 1234
     * $query->filterByUnitPrice9(array(12, 34)); // WHERE unit_price_9 IN (12, 34)
     * $query->filterByUnitPrice9(array('min' => 12)); // WHERE unit_price_9 > 12
     * </code>
     *
     * @param     mixed $unitPrice9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice9($unitPrice9 = null, $comparison = null)
    {
        if (is_array($unitPrice9)) {
            $useMinMax = false;
            if (isset($unitPrice9['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_9, $unitPrice9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice9['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_9, $unitPrice9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_9, $unitPrice9, $comparison);
    }

    /**
     * Filter the query on the unit_price_10 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice10(1234); // WHERE unit_price_10 = 1234
     * $query->filterByUnitPrice10(array(12, 34)); // WHERE unit_price_10 IN (12, 34)
     * $query->filterByUnitPrice10(array('min' => 12)); // WHERE unit_price_10 > 12
     * </code>
     *
     * @param     mixed $unitPrice10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice10($unitPrice10 = null, $comparison = null)
    {
        if (is_array($unitPrice10)) {
            $useMinMax = false;
            if (isset($unitPrice10['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_10, $unitPrice10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice10['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_10, $unitPrice10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_10, $unitPrice10, $comparison);
    }

    /**
     * Filter the query on the unit_price_11 column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitPrice11(1234); // WHERE unit_price_11 = 1234
     * $query->filterByUnitPrice11(array(12, 34)); // WHERE unit_price_11 IN (12, 34)
     * $query->filterByUnitPrice11(array('min' => 12)); // WHERE unit_price_11 > 12
     * </code>
     *
     * @param     mixed $unitPrice11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitPrice11($unitPrice11 = null, $comparison = null)
    {
        if (is_array($unitPrice11)) {
            $useMinMax = false;
            if (isset($unitPrice11['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_11, $unitPrice11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unitPrice11['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_11, $unitPrice11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_PRICE_11, $unitPrice11, $comparison);
    }

    /**
     * Filter the query on the unit_cost column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitCost('fooValue');   // WHERE unit_cost = 'fooValue'
     * $query->filterByUnitCost('%fooValue%', Criteria::LIKE); // WHERE unit_cost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitCost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByUnitCost($unitCost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitCost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_UNIT_COST, $unitCost, $comparison);
    }

    /**
     * Filter the query on the nhif_item_code column
     *
     * Example usage:
     * <code>
     * $query->filterByNhifItemCode('fooValue');   // WHERE nhif_item_code = 'fooValue'
     * $query->filterByNhifItemCode('%fooValue%', Criteria::LIKE); // WHERE nhif_item_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nhifItemCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function filterByNhifItemCode($nhifItemCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nhifItemCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_NHIF_ITEM_CODE, $nhifItemCode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzDrugsandservices $careTzDrugsandservices Object to remove from the list of results
     *
     * @return $this|ChildCareTzDrugsandservicesQuery The current query, for fluid interface
     */
    public function prune($careTzDrugsandservices = null)
    {
        if ($careTzDrugsandservices) {
            $this->addUsingAlias(CareTzDrugsandservicesTableMap::COL_ITEM_ID, $careTzDrugsandservices->getItemId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_drugsandservices table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzDrugsandservicesTableMap::clearInstancePool();
            CareTzDrugsandservicesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzDrugsandservicesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzDrugsandservicesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzDrugsandservicesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzDrugsandservicesQuery
