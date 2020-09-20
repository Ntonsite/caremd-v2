<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzBillingArchiveElem as ChildCareTzBillingArchiveElem;
use CareMd\CareMd\CareTzBillingArchiveElemQuery as ChildCareTzBillingArchiveElemQuery;
use CareMd\CareMd\Map\CareTzBillingArchiveElemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_billing_archive_elem' table.
 *
 *
 *
 * @method     ChildCareTzBillingArchiveElemQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildCareTzBillingArchiveElemQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareTzBillingArchiveElemQuery orderByDateChange($order = Criteria::ASC) Order by the date_change column
 * @method     ChildCareTzBillingArchiveElemQuery orderByIsLabtest($order = Criteria::ASC) Order by the is_labtest column
 * @method     ChildCareTzBillingArchiveElemQuery orderByIsMedicine($order = Criteria::ASC) Order by the is_medicine column
 * @method     ChildCareTzBillingArchiveElemQuery orderByIsRadioTest($order = Criteria::ASC) Order by the is_radio_test column
 * @method     ChildCareTzBillingArchiveElemQuery orderByIsComment($order = Criteria::ASC) Order by the is_comment column
 * @method     ChildCareTzBillingArchiveElemQuery orderByIsPaid($order = Criteria::ASC) Order by the is_paid column
 * @method     ChildCareTzBillingArchiveElemQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     ChildCareTzBillingArchiveElemQuery orderByTimesPerDay($order = Criteria::ASC) Order by the times_per_day column
 * @method     ChildCareTzBillingArchiveElemQuery orderByDays($order = Criteria::ASC) Order by the days column
 * @method     ChildCareTzBillingArchiveElemQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     ChildCareTzBillingArchiveElemQuery orderByMaterialcost($order = Criteria::ASC) Order by the materialcost column
 * @method     ChildCareTzBillingArchiveElemQuery orderByBalancedInsurance($order = Criteria::ASC) Order by the balanced_insurance column
 * @method     ChildCareTzBillingArchiveElemQuery orderByInsuranceId($order = Criteria::ASC) Order by the insurance_id column
 * @method     ChildCareTzBillingArchiveElemQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareTzBillingArchiveElemQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareTzBillingArchiveElemQuery orderByItemNumber($order = Criteria::ASC) Order by the item_number column
 * @method     ChildCareTzBillingArchiveElemQuery orderByPrescriptionsNr($order = Criteria::ASC) Order by the prescriptions_nr column
 * @method     ChildCareTzBillingArchiveElemQuery orderByUserId($order = Criteria::ASC) Order by the User_Id column
 * @method     ChildCareTzBillingArchiveElemQuery orderBySignedByFollower($order = Criteria::ASC) Order by the signed_by_follower column
 * @method     ChildCareTzBillingArchiveElemQuery orderByIsTransmit2erp($order = Criteria::ASC) Order by the is_transmit2ERP column
 * @method     ChildCareTzBillingArchiveElemQuery orderByIsDepositItem($order = Criteria::ASC) Order by the is_deposit_item column
 * @method     ChildCareTzBillingArchiveElemQuery orderBySubStore($order = Criteria::ASC) Order by the sub_store column
 * @method     ChildCareTzBillingArchiveElemQuery orderByBankRef($order = Criteria::ASC) Order by the bank_ref column
 * @method     ChildCareTzBillingArchiveElemQuery orderByCurrentDeptNr($order = Criteria::ASC) Order by the current_dept_nr column
 * @method     ChildCareTzBillingArchiveElemQuery orderByCurrentWardNr($order = Criteria::ASC) Order by the current_ward_nr column
 * @method     ChildCareTzBillingArchiveElemQuery orderByCloseDeposit($order = Criteria::ASC) Order by the close_deposit column
 * @method     ChildCareTzBillingArchiveElemQuery orderByEncounterClassNr($order = Criteria::ASC) Order by the encounter_class_nr column
 *
 * @method     ChildCareTzBillingArchiveElemQuery groupById() Group by the ID column
 * @method     ChildCareTzBillingArchiveElemQuery groupByNr() Group by the nr column
 * @method     ChildCareTzBillingArchiveElemQuery groupByDateChange() Group by the date_change column
 * @method     ChildCareTzBillingArchiveElemQuery groupByIsLabtest() Group by the is_labtest column
 * @method     ChildCareTzBillingArchiveElemQuery groupByIsMedicine() Group by the is_medicine column
 * @method     ChildCareTzBillingArchiveElemQuery groupByIsRadioTest() Group by the is_radio_test column
 * @method     ChildCareTzBillingArchiveElemQuery groupByIsComment() Group by the is_comment column
 * @method     ChildCareTzBillingArchiveElemQuery groupByIsPaid() Group by the is_paid column
 * @method     ChildCareTzBillingArchiveElemQuery groupByAmount() Group by the amount column
 * @method     ChildCareTzBillingArchiveElemQuery groupByTimesPerDay() Group by the times_per_day column
 * @method     ChildCareTzBillingArchiveElemQuery groupByDays() Group by the days column
 * @method     ChildCareTzBillingArchiveElemQuery groupByPrice() Group by the price column
 * @method     ChildCareTzBillingArchiveElemQuery groupByMaterialcost() Group by the materialcost column
 * @method     ChildCareTzBillingArchiveElemQuery groupByBalancedInsurance() Group by the balanced_insurance column
 * @method     ChildCareTzBillingArchiveElemQuery groupByInsuranceId() Group by the insurance_id column
 * @method     ChildCareTzBillingArchiveElemQuery groupByDescription() Group by the description column
 * @method     ChildCareTzBillingArchiveElemQuery groupByNotes() Group by the notes column
 * @method     ChildCareTzBillingArchiveElemQuery groupByItemNumber() Group by the item_number column
 * @method     ChildCareTzBillingArchiveElemQuery groupByPrescriptionsNr() Group by the prescriptions_nr column
 * @method     ChildCareTzBillingArchiveElemQuery groupByUserId() Group by the User_Id column
 * @method     ChildCareTzBillingArchiveElemQuery groupBySignedByFollower() Group by the signed_by_follower column
 * @method     ChildCareTzBillingArchiveElemQuery groupByIsTransmit2erp() Group by the is_transmit2ERP column
 * @method     ChildCareTzBillingArchiveElemQuery groupByIsDepositItem() Group by the is_deposit_item column
 * @method     ChildCareTzBillingArchiveElemQuery groupBySubStore() Group by the sub_store column
 * @method     ChildCareTzBillingArchiveElemQuery groupByBankRef() Group by the bank_ref column
 * @method     ChildCareTzBillingArchiveElemQuery groupByCurrentDeptNr() Group by the current_dept_nr column
 * @method     ChildCareTzBillingArchiveElemQuery groupByCurrentWardNr() Group by the current_ward_nr column
 * @method     ChildCareTzBillingArchiveElemQuery groupByCloseDeposit() Group by the close_deposit column
 * @method     ChildCareTzBillingArchiveElemQuery groupByEncounterClassNr() Group by the encounter_class_nr column
 *
 * @method     ChildCareTzBillingArchiveElemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzBillingArchiveElemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzBillingArchiveElemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzBillingArchiveElemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzBillingArchiveElemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzBillingArchiveElemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzBillingArchiveElem findOne(ConnectionInterface $con = null) Return the first ChildCareTzBillingArchiveElem matching the query
 * @method     ChildCareTzBillingArchiveElem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzBillingArchiveElem matching the query, or a new ChildCareTzBillingArchiveElem object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzBillingArchiveElem findOneById(string $ID) Return the first ChildCareTzBillingArchiveElem filtered by the ID column
 * @method     ChildCareTzBillingArchiveElem findOneByNr(string $nr) Return the first ChildCareTzBillingArchiveElem filtered by the nr column
 * @method     ChildCareTzBillingArchiveElem findOneByDateChange(string $date_change) Return the first ChildCareTzBillingArchiveElem filtered by the date_change column
 * @method     ChildCareTzBillingArchiveElem findOneByIsLabtest(int $is_labtest) Return the first ChildCareTzBillingArchiveElem filtered by the is_labtest column
 * @method     ChildCareTzBillingArchiveElem findOneByIsMedicine(int $is_medicine) Return the first ChildCareTzBillingArchiveElem filtered by the is_medicine column
 * @method     ChildCareTzBillingArchiveElem findOneByIsRadioTest(int $is_radio_test) Return the first ChildCareTzBillingArchiveElem filtered by the is_radio_test column
 * @method     ChildCareTzBillingArchiveElem findOneByIsComment(int $is_comment) Return the first ChildCareTzBillingArchiveElem filtered by the is_comment column
 * @method     ChildCareTzBillingArchiveElem findOneByIsPaid(int $is_paid) Return the first ChildCareTzBillingArchiveElem filtered by the is_paid column
 * @method     ChildCareTzBillingArchiveElem findOneByAmount(string $amount) Return the first ChildCareTzBillingArchiveElem filtered by the amount column
 * @method     ChildCareTzBillingArchiveElem findOneByTimesPerDay(int $times_per_day) Return the first ChildCareTzBillingArchiveElem filtered by the times_per_day column
 * @method     ChildCareTzBillingArchiveElem findOneByDays(int $days) Return the first ChildCareTzBillingArchiveElem filtered by the days column
 * @method     ChildCareTzBillingArchiveElem findOneByPrice(string $price) Return the first ChildCareTzBillingArchiveElem filtered by the price column
 * @method     ChildCareTzBillingArchiveElem findOneByMaterialcost(string $materialcost) Return the first ChildCareTzBillingArchiveElem filtered by the materialcost column
 * @method     ChildCareTzBillingArchiveElem findOneByBalancedInsurance(string $balanced_insurance) Return the first ChildCareTzBillingArchiveElem filtered by the balanced_insurance column
 * @method     ChildCareTzBillingArchiveElem findOneByInsuranceId(string $insurance_id) Return the first ChildCareTzBillingArchiveElem filtered by the insurance_id column
 * @method     ChildCareTzBillingArchiveElem findOneByDescription(string $description) Return the first ChildCareTzBillingArchiveElem filtered by the description column
 * @method     ChildCareTzBillingArchiveElem findOneByNotes(string $notes) Return the first ChildCareTzBillingArchiveElem filtered by the notes column
 * @method     ChildCareTzBillingArchiveElem findOneByItemNumber(string $item_number) Return the first ChildCareTzBillingArchiveElem filtered by the item_number column
 * @method     ChildCareTzBillingArchiveElem findOneByPrescriptionsNr(string $prescriptions_nr) Return the first ChildCareTzBillingArchiveElem filtered by the prescriptions_nr column
 * @method     ChildCareTzBillingArchiveElem findOneByUserId(string $User_Id) Return the first ChildCareTzBillingArchiveElem filtered by the User_Id column
 * @method     ChildCareTzBillingArchiveElem findOneBySignedByFollower(boolean $signed_by_follower) Return the first ChildCareTzBillingArchiveElem filtered by the signed_by_follower column
 * @method     ChildCareTzBillingArchiveElem findOneByIsTransmit2erp(int $is_transmit2ERP) Return the first ChildCareTzBillingArchiveElem filtered by the is_transmit2ERP column
 * @method     ChildCareTzBillingArchiveElem findOneByIsDepositItem(boolean $is_deposit_item) Return the first ChildCareTzBillingArchiveElem filtered by the is_deposit_item column
 * @method     ChildCareTzBillingArchiveElem findOneBySubStore(string $sub_store) Return the first ChildCareTzBillingArchiveElem filtered by the sub_store column
 * @method     ChildCareTzBillingArchiveElem findOneByBankRef(string $bank_ref) Return the first ChildCareTzBillingArchiveElem filtered by the bank_ref column
 * @method     ChildCareTzBillingArchiveElem findOneByCurrentDeptNr(int $current_dept_nr) Return the first ChildCareTzBillingArchiveElem filtered by the current_dept_nr column
 * @method     ChildCareTzBillingArchiveElem findOneByCurrentWardNr(int $current_ward_nr) Return the first ChildCareTzBillingArchiveElem filtered by the current_ward_nr column
 * @method     ChildCareTzBillingArchiveElem findOneByCloseDeposit(int $close_deposit) Return the first ChildCareTzBillingArchiveElem filtered by the close_deposit column
 * @method     ChildCareTzBillingArchiveElem findOneByEncounterClassNr(int $encounter_class_nr) Return the first ChildCareTzBillingArchiveElem filtered by the encounter_class_nr column *

 * @method     ChildCareTzBillingArchiveElem requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzBillingArchiveElem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOne(ConnectionInterface $con = null) Return the first ChildCareTzBillingArchiveElem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzBillingArchiveElem requireOneById(string $ID) Return the first ChildCareTzBillingArchiveElem filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByNr(string $nr) Return the first ChildCareTzBillingArchiveElem filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByDateChange(string $date_change) Return the first ChildCareTzBillingArchiveElem filtered by the date_change column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByIsLabtest(int $is_labtest) Return the first ChildCareTzBillingArchiveElem filtered by the is_labtest column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByIsMedicine(int $is_medicine) Return the first ChildCareTzBillingArchiveElem filtered by the is_medicine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByIsRadioTest(int $is_radio_test) Return the first ChildCareTzBillingArchiveElem filtered by the is_radio_test column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByIsComment(int $is_comment) Return the first ChildCareTzBillingArchiveElem filtered by the is_comment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByIsPaid(int $is_paid) Return the first ChildCareTzBillingArchiveElem filtered by the is_paid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByAmount(string $amount) Return the first ChildCareTzBillingArchiveElem filtered by the amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByTimesPerDay(int $times_per_day) Return the first ChildCareTzBillingArchiveElem filtered by the times_per_day column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByDays(int $days) Return the first ChildCareTzBillingArchiveElem filtered by the days column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByPrice(string $price) Return the first ChildCareTzBillingArchiveElem filtered by the price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByMaterialcost(string $materialcost) Return the first ChildCareTzBillingArchiveElem filtered by the materialcost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByBalancedInsurance(string $balanced_insurance) Return the first ChildCareTzBillingArchiveElem filtered by the balanced_insurance column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByInsuranceId(string $insurance_id) Return the first ChildCareTzBillingArchiveElem filtered by the insurance_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByDescription(string $description) Return the first ChildCareTzBillingArchiveElem filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByNotes(string $notes) Return the first ChildCareTzBillingArchiveElem filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByItemNumber(string $item_number) Return the first ChildCareTzBillingArchiveElem filtered by the item_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByPrescriptionsNr(string $prescriptions_nr) Return the first ChildCareTzBillingArchiveElem filtered by the prescriptions_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByUserId(string $User_Id) Return the first ChildCareTzBillingArchiveElem filtered by the User_Id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneBySignedByFollower(boolean $signed_by_follower) Return the first ChildCareTzBillingArchiveElem filtered by the signed_by_follower column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByIsTransmit2erp(int $is_transmit2ERP) Return the first ChildCareTzBillingArchiveElem filtered by the is_transmit2ERP column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByIsDepositItem(boolean $is_deposit_item) Return the first ChildCareTzBillingArchiveElem filtered by the is_deposit_item column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneBySubStore(string $sub_store) Return the first ChildCareTzBillingArchiveElem filtered by the sub_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByBankRef(string $bank_ref) Return the first ChildCareTzBillingArchiveElem filtered by the bank_ref column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByCurrentDeptNr(int $current_dept_nr) Return the first ChildCareTzBillingArchiveElem filtered by the current_dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByCurrentWardNr(int $current_ward_nr) Return the first ChildCareTzBillingArchiveElem filtered by the current_ward_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByCloseDeposit(int $close_deposit) Return the first ChildCareTzBillingArchiveElem filtered by the close_deposit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchiveElem requireOneByEncounterClassNr(int $encounter_class_nr) Return the first ChildCareTzBillingArchiveElem filtered by the encounter_class_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzBillingArchiveElem objects based on current ModelCriteria
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findById(string $ID) Return ChildCareTzBillingArchiveElem objects filtered by the ID column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByNr(string $nr) Return ChildCareTzBillingArchiveElem objects filtered by the nr column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByDateChange(string $date_change) Return ChildCareTzBillingArchiveElem objects filtered by the date_change column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByIsLabtest(int $is_labtest) Return ChildCareTzBillingArchiveElem objects filtered by the is_labtest column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByIsMedicine(int $is_medicine) Return ChildCareTzBillingArchiveElem objects filtered by the is_medicine column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByIsRadioTest(int $is_radio_test) Return ChildCareTzBillingArchiveElem objects filtered by the is_radio_test column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByIsComment(int $is_comment) Return ChildCareTzBillingArchiveElem objects filtered by the is_comment column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByIsPaid(int $is_paid) Return ChildCareTzBillingArchiveElem objects filtered by the is_paid column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByAmount(string $amount) Return ChildCareTzBillingArchiveElem objects filtered by the amount column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByTimesPerDay(int $times_per_day) Return ChildCareTzBillingArchiveElem objects filtered by the times_per_day column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByDays(int $days) Return ChildCareTzBillingArchiveElem objects filtered by the days column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByPrice(string $price) Return ChildCareTzBillingArchiveElem objects filtered by the price column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByMaterialcost(string $materialcost) Return ChildCareTzBillingArchiveElem objects filtered by the materialcost column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByBalancedInsurance(string $balanced_insurance) Return ChildCareTzBillingArchiveElem objects filtered by the balanced_insurance column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByInsuranceId(string $insurance_id) Return ChildCareTzBillingArchiveElem objects filtered by the insurance_id column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByDescription(string $description) Return ChildCareTzBillingArchiveElem objects filtered by the description column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByNotes(string $notes) Return ChildCareTzBillingArchiveElem objects filtered by the notes column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByItemNumber(string $item_number) Return ChildCareTzBillingArchiveElem objects filtered by the item_number column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByPrescriptionsNr(string $prescriptions_nr) Return ChildCareTzBillingArchiveElem objects filtered by the prescriptions_nr column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByUserId(string $User_Id) Return ChildCareTzBillingArchiveElem objects filtered by the User_Id column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findBySignedByFollower(boolean $signed_by_follower) Return ChildCareTzBillingArchiveElem objects filtered by the signed_by_follower column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByIsTransmit2erp(int $is_transmit2ERP) Return ChildCareTzBillingArchiveElem objects filtered by the is_transmit2ERP column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByIsDepositItem(boolean $is_deposit_item) Return ChildCareTzBillingArchiveElem objects filtered by the is_deposit_item column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findBySubStore(string $sub_store) Return ChildCareTzBillingArchiveElem objects filtered by the sub_store column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByBankRef(string $bank_ref) Return ChildCareTzBillingArchiveElem objects filtered by the bank_ref column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByCurrentDeptNr(int $current_dept_nr) Return ChildCareTzBillingArchiveElem objects filtered by the current_dept_nr column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByCurrentWardNr(int $current_ward_nr) Return ChildCareTzBillingArchiveElem objects filtered by the current_ward_nr column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByCloseDeposit(int $close_deposit) Return ChildCareTzBillingArchiveElem objects filtered by the close_deposit column
 * @method     ChildCareTzBillingArchiveElem[]|ObjectCollection findByEncounterClassNr(int $encounter_class_nr) Return ChildCareTzBillingArchiveElem objects filtered by the encounter_class_nr column
 * @method     ChildCareTzBillingArchiveElem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzBillingArchiveElemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzBillingArchiveElemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzBillingArchiveElem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzBillingArchiveElemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzBillingArchiveElemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzBillingArchiveElemQuery) {
            return $criteria;
        }
        $query = new ChildCareTzBillingArchiveElemQuery();
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
     * @return ChildCareTzBillingArchiveElem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzBillingArchiveElemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzBillingArchiveElemTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzBillingArchiveElem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, nr, date_change, is_labtest, is_medicine, is_radio_test, is_comment, is_paid, amount, times_per_day, days, price, materialcost, balanced_insurance, insurance_id, description, notes, item_number, prescriptions_nr, User_Id, signed_by_follower, is_transmit2ERP, is_deposit_item, sub_store, bank_ref, current_dept_nr, current_ward_nr, close_deposit, encounter_class_nr FROM care_tz_billing_archive_elem WHERE ID = :p0';
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
            /** @var ChildCareTzBillingArchiveElem $obj */
            $obj = new ChildCareTzBillingArchiveElem();
            $obj->hydrate($row);
            CareTzBillingArchiveElemTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzBillingArchiveElem|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the date_change column
     *
     * Example usage:
     * <code>
     * $query->filterByDateChange(1234); // WHERE date_change = 1234
     * $query->filterByDateChange(array(12, 34)); // WHERE date_change IN (12, 34)
     * $query->filterByDateChange(array('min' => 12)); // WHERE date_change > 12
     * </code>
     *
     * @param     mixed $dateChange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByDateChange($dateChange = null, $comparison = null)
    {
        if (is_array($dateChange)) {
            $useMinMax = false;
            if (isset($dateChange['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_DATE_CHANGE, $dateChange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateChange['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_DATE_CHANGE, $dateChange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_DATE_CHANGE, $dateChange, $comparison);
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
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByIsLabtest($isLabtest = null, $comparison = null)
    {
        if (is_array($isLabtest)) {
            $useMinMax = false;
            if (isset($isLabtest['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_LABTEST, $isLabtest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isLabtest['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_LABTEST, $isLabtest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_LABTEST, $isLabtest, $comparison);
    }

    /**
     * Filter the query on the is_medicine column
     *
     * Example usage:
     * <code>
     * $query->filterByIsMedicine(1234); // WHERE is_medicine = 1234
     * $query->filterByIsMedicine(array(12, 34)); // WHERE is_medicine IN (12, 34)
     * $query->filterByIsMedicine(array('min' => 12)); // WHERE is_medicine > 12
     * </code>
     *
     * @param     mixed $isMedicine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByIsMedicine($isMedicine = null, $comparison = null)
    {
        if (is_array($isMedicine)) {
            $useMinMax = false;
            if (isset($isMedicine['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_MEDICINE, $isMedicine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isMedicine['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_MEDICINE, $isMedicine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_MEDICINE, $isMedicine, $comparison);
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
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByIsRadioTest($isRadioTest = null, $comparison = null)
    {
        if (is_array($isRadioTest)) {
            $useMinMax = false;
            if (isset($isRadioTest['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_RADIO_TEST, $isRadioTest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isRadioTest['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_RADIO_TEST, $isRadioTest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_RADIO_TEST, $isRadioTest, $comparison);
    }

    /**
     * Filter the query on the is_comment column
     *
     * Example usage:
     * <code>
     * $query->filterByIsComment(1234); // WHERE is_comment = 1234
     * $query->filterByIsComment(array(12, 34)); // WHERE is_comment IN (12, 34)
     * $query->filterByIsComment(array('min' => 12)); // WHERE is_comment > 12
     * </code>
     *
     * @param     mixed $isComment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByIsComment($isComment = null, $comparison = null)
    {
        if (is_array($isComment)) {
            $useMinMax = false;
            if (isset($isComment['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_COMMENT, $isComment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isComment['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_COMMENT, $isComment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_COMMENT, $isComment, $comparison);
    }

    /**
     * Filter the query on the is_paid column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPaid(1234); // WHERE is_paid = 1234
     * $query->filterByIsPaid(array(12, 34)); // WHERE is_paid IN (12, 34)
     * $query->filterByIsPaid(array('min' => 12)); // WHERE is_paid > 12
     * </code>
     *
     * @param     mixed $isPaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByIsPaid($isPaid = null, $comparison = null)
    {
        if (is_array($isPaid)) {
            $useMinMax = false;
            if (isset($isPaid['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_PAID, $isPaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isPaid['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_PAID, $isPaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_PAID, $isPaid, $comparison);
    }

    /**
     * Filter the query on the amount column
     *
     * Example usage:
     * <code>
     * $query->filterByAmount(1234); // WHERE amount = 1234
     * $query->filterByAmount(array(12, 34)); // WHERE amount IN (12, 34)
     * $query->filterByAmount(array('min' => 12)); // WHERE amount > 12
     * </code>
     *
     * @param     mixed $amount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByAmount($amount = null, $comparison = null)
    {
        if (is_array($amount)) {
            $useMinMax = false;
            if (isset($amount['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amount['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_AMOUNT, $amount, $comparison);
    }

    /**
     * Filter the query on the times_per_day column
     *
     * Example usage:
     * <code>
     * $query->filterByTimesPerDay(1234); // WHERE times_per_day = 1234
     * $query->filterByTimesPerDay(array(12, 34)); // WHERE times_per_day IN (12, 34)
     * $query->filterByTimesPerDay(array('min' => 12)); // WHERE times_per_day > 12
     * </code>
     *
     * @param     mixed $timesPerDay The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByTimesPerDay($timesPerDay = null, $comparison = null)
    {
        if (is_array($timesPerDay)) {
            $useMinMax = false;
            if (isset($timesPerDay['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_TIMES_PER_DAY, $timesPerDay['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timesPerDay['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_TIMES_PER_DAY, $timesPerDay['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_TIMES_PER_DAY, $timesPerDay, $comparison);
    }

    /**
     * Filter the query on the days column
     *
     * Example usage:
     * <code>
     * $query->filterByDays(1234); // WHERE days = 1234
     * $query->filterByDays(array(12, 34)); // WHERE days IN (12, 34)
     * $query->filterByDays(array('min' => 12)); // WHERE days > 12
     * </code>
     *
     * @param     mixed $days The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByDays($days = null, $comparison = null)
    {
        if (is_array($days)) {
            $useMinMax = false;
            if (isset($days['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_DAYS, $days['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($days['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_DAYS, $days['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_DAYS, $days, $comparison);
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
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($price)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the materialcost column
     *
     * Example usage:
     * <code>
     * $query->filterByMaterialcost('fooValue');   // WHERE materialcost = 'fooValue'
     * $query->filterByMaterialcost('%fooValue%', Criteria::LIKE); // WHERE materialcost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $materialcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByMaterialcost($materialcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($materialcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_MATERIALCOST, $materialcost, $comparison);
    }

    /**
     * Filter the query on the balanced_insurance column
     *
     * Example usage:
     * <code>
     * $query->filterByBalancedInsurance('fooValue');   // WHERE balanced_insurance = 'fooValue'
     * $query->filterByBalancedInsurance('%fooValue%', Criteria::LIKE); // WHERE balanced_insurance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $balancedInsurance The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByBalancedInsurance($balancedInsurance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($balancedInsurance)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_BALANCED_INSURANCE, $balancedInsurance, $comparison);
    }

    /**
     * Filter the query on the insurance_id column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceId(1234); // WHERE insurance_id = 1234
     * $query->filterByInsuranceId(array(12, 34)); // WHERE insurance_id IN (12, 34)
     * $query->filterByInsuranceId(array('min' => 12)); // WHERE insurance_id > 12
     * </code>
     *
     * @param     mixed $insuranceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByInsuranceId($insuranceId = null, $comparison = null)
    {
        if (is_array($insuranceId)) {
            $useMinMax = false;
            if (isset($insuranceId['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_INSURANCE_ID, $insuranceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceId['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_INSURANCE_ID, $insuranceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_INSURANCE_ID, $insuranceId, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the notes column
     *
     * Example usage:
     * <code>
     * $query->filterByNotes('fooValue');   // WHERE notes = 'fooValue'
     * $query->filterByNotes('%fooValue%', Criteria::LIKE); // WHERE notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the item_number column
     *
     * Example usage:
     * <code>
     * $query->filterByItemNumber(1234); // WHERE item_number = 1234
     * $query->filterByItemNumber(array(12, 34)); // WHERE item_number IN (12, 34)
     * $query->filterByItemNumber(array('min' => 12)); // WHERE item_number > 12
     * </code>
     *
     * @param     mixed $itemNumber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByItemNumber($itemNumber = null, $comparison = null)
    {
        if (is_array($itemNumber)) {
            $useMinMax = false;
            if (isset($itemNumber['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ITEM_NUMBER, $itemNumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemNumber['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ITEM_NUMBER, $itemNumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ITEM_NUMBER, $itemNumber, $comparison);
    }

    /**
     * Filter the query on the prescriptions_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPrescriptionsNr(1234); // WHERE prescriptions_nr = 1234
     * $query->filterByPrescriptionsNr(array(12, 34)); // WHERE prescriptions_nr IN (12, 34)
     * $query->filterByPrescriptionsNr(array('min' => 12)); // WHERE prescriptions_nr > 12
     * </code>
     *
     * @param     mixed $prescriptionsNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByPrescriptionsNr($prescriptionsNr = null, $comparison = null)
    {
        if (is_array($prescriptionsNr)) {
            $useMinMax = false;
            if (isset($prescriptionsNr['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_PRESCRIPTIONS_NR, $prescriptionsNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prescriptionsNr['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_PRESCRIPTIONS_NR, $prescriptionsNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_PRESCRIPTIONS_NR, $prescriptionsNr, $comparison);
    }

    /**
     * Filter the query on the User_Id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId('fooValue');   // WHERE User_Id = 'fooValue'
     * $query->filterByUserId('%fooValue%', Criteria::LIKE); // WHERE User_Id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the signed_by_follower column
     *
     * Example usage:
     * <code>
     * $query->filterBySignedByFollower(true); // WHERE signed_by_follower = true
     * $query->filterBySignedByFollower('yes'); // WHERE signed_by_follower = true
     * </code>
     *
     * @param     boolean|string $signedByFollower The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterBySignedByFollower($signedByFollower = null, $comparison = null)
    {
        if (is_string($signedByFollower)) {
            $signedByFollower = in_array(strtolower($signedByFollower), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_SIGNED_BY_FOLLOWER, $signedByFollower, $comparison);
    }

    /**
     * Filter the query on the is_transmit2ERP column
     *
     * Example usage:
     * <code>
     * $query->filterByIsTransmit2erp(1234); // WHERE is_transmit2ERP = 1234
     * $query->filterByIsTransmit2erp(array(12, 34)); // WHERE is_transmit2ERP IN (12, 34)
     * $query->filterByIsTransmit2erp(array('min' => 12)); // WHERE is_transmit2ERP > 12
     * </code>
     *
     * @param     mixed $isTransmit2erp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByIsTransmit2erp($isTransmit2erp = null, $comparison = null)
    {
        if (is_array($isTransmit2erp)) {
            $useMinMax = false;
            if (isset($isTransmit2erp['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_TRANSMIT2ERP, $isTransmit2erp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isTransmit2erp['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_TRANSMIT2ERP, $isTransmit2erp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_TRANSMIT2ERP, $isTransmit2erp, $comparison);
    }

    /**
     * Filter the query on the is_deposit_item column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDepositItem(true); // WHERE is_deposit_item = true
     * $query->filterByIsDepositItem('yes'); // WHERE is_deposit_item = true
     * </code>
     *
     * @param     boolean|string $isDepositItem The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByIsDepositItem($isDepositItem = null, $comparison = null)
    {
        if (is_string($isDepositItem)) {
            $isDepositItem = in_array(strtolower($isDepositItem), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_IS_DEPOSIT_ITEM, $isDepositItem, $comparison);
    }

    /**
     * Filter the query on the sub_store column
     *
     * Example usage:
     * <code>
     * $query->filterBySubStore('fooValue');   // WHERE sub_store = 'fooValue'
     * $query->filterBySubStore('%fooValue%', Criteria::LIKE); // WHERE sub_store LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subStore The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterBySubStore($subStore = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subStore)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_SUB_STORE, $subStore, $comparison);
    }

    /**
     * Filter the query on the bank_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByBankRef('fooValue');   // WHERE bank_ref = 'fooValue'
     * $query->filterByBankRef('%fooValue%', Criteria::LIKE); // WHERE bank_ref LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bankRef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByBankRef($bankRef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bankRef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_BANK_REF, $bankRef, $comparison);
    }

    /**
     * Filter the query on the current_dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentDeptNr(1234); // WHERE current_dept_nr = 1234
     * $query->filterByCurrentDeptNr(array(12, 34)); // WHERE current_dept_nr IN (12, 34)
     * $query->filterByCurrentDeptNr(array('min' => 12)); // WHERE current_dept_nr > 12
     * </code>
     *
     * @param     mixed $currentDeptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByCurrentDeptNr($currentDeptNr = null, $comparison = null)
    {
        if (is_array($currentDeptNr)) {
            $useMinMax = false;
            if (isset($currentDeptNr['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_CURRENT_DEPT_NR, $currentDeptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentDeptNr['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_CURRENT_DEPT_NR, $currentDeptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_CURRENT_DEPT_NR, $currentDeptNr, $comparison);
    }

    /**
     * Filter the query on the current_ward_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentWardNr(1234); // WHERE current_ward_nr = 1234
     * $query->filterByCurrentWardNr(array(12, 34)); // WHERE current_ward_nr IN (12, 34)
     * $query->filterByCurrentWardNr(array('min' => 12)); // WHERE current_ward_nr > 12
     * </code>
     *
     * @param     mixed $currentWardNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByCurrentWardNr($currentWardNr = null, $comparison = null)
    {
        if (is_array($currentWardNr)) {
            $useMinMax = false;
            if (isset($currentWardNr['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_CURRENT_WARD_NR, $currentWardNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentWardNr['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_CURRENT_WARD_NR, $currentWardNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_CURRENT_WARD_NR, $currentWardNr, $comparison);
    }

    /**
     * Filter the query on the close_deposit column
     *
     * Example usage:
     * <code>
     * $query->filterByCloseDeposit(1234); // WHERE close_deposit = 1234
     * $query->filterByCloseDeposit(array(12, 34)); // WHERE close_deposit IN (12, 34)
     * $query->filterByCloseDeposit(array('min' => 12)); // WHERE close_deposit > 12
     * </code>
     *
     * @param     mixed $closeDeposit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByCloseDeposit($closeDeposit = null, $comparison = null)
    {
        if (is_array($closeDeposit)) {
            $useMinMax = false;
            if (isset($closeDeposit['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_CLOSE_DEPOSIT, $closeDeposit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($closeDeposit['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_CLOSE_DEPOSIT, $closeDeposit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_CLOSE_DEPOSIT, $closeDeposit, $comparison);
    }

    /**
     * Filter the query on the encounter_class_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterClassNr(1234); // WHERE encounter_class_nr = 1234
     * $query->filterByEncounterClassNr(array(12, 34)); // WHERE encounter_class_nr IN (12, 34)
     * $query->filterByEncounterClassNr(array('min' => 12)); // WHERE encounter_class_nr > 12
     * </code>
     *
     * @param     mixed $encounterClassNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function filterByEncounterClassNr($encounterClassNr = null, $comparison = null)
    {
        if (is_array($encounterClassNr)) {
            $useMinMax = false;
            if (isset($encounterClassNr['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ENCOUNTER_CLASS_NR, $encounterClassNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterClassNr['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ENCOUNTER_CLASS_NR, $encounterClassNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ENCOUNTER_CLASS_NR, $encounterClassNr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzBillingArchiveElem $careTzBillingArchiveElem Object to remove from the list of results
     *
     * @return $this|ChildCareTzBillingArchiveElemQuery The current query, for fluid interface
     */
    public function prune($careTzBillingArchiveElem = null)
    {
        if ($careTzBillingArchiveElem) {
            $this->addUsingAlias(CareTzBillingArchiveElemTableMap::COL_ID, $careTzBillingArchiveElem->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_billing_archive_elem table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingArchiveElemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzBillingArchiveElemTableMap::clearInstancePool();
            CareTzBillingArchiveElemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingArchiveElemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzBillingArchiveElemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzBillingArchiveElemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzBillingArchiveElemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzBillingArchiveElemQuery
