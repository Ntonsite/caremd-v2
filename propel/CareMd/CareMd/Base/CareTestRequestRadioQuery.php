<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestRadio as ChildCareTestRequestRadio;
use CareMd\CareMd\CareTestRequestRadioQuery as ChildCareTestRequestRadioQuery;
use CareMd\CareMd\Map\CareTestRequestRadioTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_request_radio' table.
 *
 *
 *
 * @method     ChildCareTestRequestRadioQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestRequestRadioQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestRequestRadioQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTestRequestRadioQuery orderByXray($order = Criteria::ASC) Order by the xray column
 * @method     ChildCareTestRequestRadioQuery orderByCt($order = Criteria::ASC) Order by the ct column
 * @method     ChildCareTestRequestRadioQuery orderBySono($order = Criteria::ASC) Order by the sono column
 * @method     ChildCareTestRequestRadioQuery orderByMammograph($order = Criteria::ASC) Order by the mammograph column
 * @method     ChildCareTestRequestRadioQuery orderByMrt($order = Criteria::ASC) Order by the mrt column
 * @method     ChildCareTestRequestRadioQuery orderByNuclear($order = Criteria::ASC) Order by the nuclear column
 * @method     ChildCareTestRequestRadioQuery orderByIfPatmobile($order = Criteria::ASC) Order by the if_patmobile column
 * @method     ChildCareTestRequestRadioQuery orderByIfAllergy($order = Criteria::ASC) Order by the if_allergy column
 * @method     ChildCareTestRequestRadioQuery orderByIfHyperten($order = Criteria::ASC) Order by the if_hyperten column
 * @method     ChildCareTestRequestRadioQuery orderByIfPregnant($order = Criteria::ASC) Order by the if_pregnant column
 * @method     ChildCareTestRequestRadioQuery orderByClinicalInfo($order = Criteria::ASC) Order by the clinical_info column
 * @method     ChildCareTestRequestRadioQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ChildCareTestRequestRadioQuery orderByTestRequest($order = Criteria::ASC) Order by the test_request column
 * @method     ChildCareTestRequestRadioQuery orderByNumberOfTests($order = Criteria::ASC) Order by the number_of_tests column
 * @method     ChildCareTestRequestRadioQuery orderBySendDate($order = Criteria::ASC) Order by the send_date column
 * @method     ChildCareTestRequestRadioQuery orderBySendDoctor($order = Criteria::ASC) Order by the send_doctor column
 * @method     ChildCareTestRequestRadioQuery orderByIsDisabled($order = Criteria::ASC) Order by the is_disabled column
 * @method     ChildCareTestRequestRadioQuery orderByDisableId($order = Criteria::ASC) Order by the disable_id column
 * @method     ChildCareTestRequestRadioQuery orderByDisableDate($order = Criteria::ASC) Order by the disable_date column
 * @method     ChildCareTestRequestRadioQuery orderByXrayNr($order = Criteria::ASC) Order by the xray_nr column
 * @method     ChildCareTestRequestRadioQuery orderByRCm2($order = Criteria::ASC) Order by the r_cm_2 column
 * @method     ChildCareTestRequestRadioQuery orderByMtr($order = Criteria::ASC) Order by the mtr column
 * @method     ChildCareTestRequestRadioQuery orderByXrayDate($order = Criteria::ASC) Order by the xray_date column
 * @method     ChildCareTestRequestRadioQuery orderByXrayTime($order = Criteria::ASC) Order by the xray_time column
 * @method     ChildCareTestRequestRadioQuery orderByResults($order = Criteria::ASC) Order by the results column
 * @method     ChildCareTestRequestRadioQuery orderByResultsDate($order = Criteria::ASC) Order by the results_date column
 * @method     ChildCareTestRequestRadioQuery orderByResultsDoctor($order = Criteria::ASC) Order by the results_doctor column
 * @method     ChildCareTestRequestRadioQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestRequestRadioQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestRequestRadioQuery orderByBillNumber($order = Criteria::ASC) Order by the bill_number column
 * @method     ChildCareTestRequestRadioQuery orderByBillStatus($order = Criteria::ASC) Order by the bill_status column
 * @method     ChildCareTestRequestRadioQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestRequestRadioQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestRequestRadioQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestRequestRadioQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareTestRequestRadioQuery orderByProcessId($order = Criteria::ASC) Order by the process_id column
 * @method     ChildCareTestRequestRadioQuery orderByProcessTime($order = Criteria::ASC) Order by the process_time column
 *
 * @method     ChildCareTestRequestRadioQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestRequestRadioQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestRequestRadioQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTestRequestRadioQuery groupByXray() Group by the xray column
 * @method     ChildCareTestRequestRadioQuery groupByCt() Group by the ct column
 * @method     ChildCareTestRequestRadioQuery groupBySono() Group by the sono column
 * @method     ChildCareTestRequestRadioQuery groupByMammograph() Group by the mammograph column
 * @method     ChildCareTestRequestRadioQuery groupByMrt() Group by the mrt column
 * @method     ChildCareTestRequestRadioQuery groupByNuclear() Group by the nuclear column
 * @method     ChildCareTestRequestRadioQuery groupByIfPatmobile() Group by the if_patmobile column
 * @method     ChildCareTestRequestRadioQuery groupByIfAllergy() Group by the if_allergy column
 * @method     ChildCareTestRequestRadioQuery groupByIfHyperten() Group by the if_hyperten column
 * @method     ChildCareTestRequestRadioQuery groupByIfPregnant() Group by the if_pregnant column
 * @method     ChildCareTestRequestRadioQuery groupByClinicalInfo() Group by the clinical_info column
 * @method     ChildCareTestRequestRadioQuery groupByItemId() Group by the item_id column
 * @method     ChildCareTestRequestRadioQuery groupByTestRequest() Group by the test_request column
 * @method     ChildCareTestRequestRadioQuery groupByNumberOfTests() Group by the number_of_tests column
 * @method     ChildCareTestRequestRadioQuery groupBySendDate() Group by the send_date column
 * @method     ChildCareTestRequestRadioQuery groupBySendDoctor() Group by the send_doctor column
 * @method     ChildCareTestRequestRadioQuery groupByIsDisabled() Group by the is_disabled column
 * @method     ChildCareTestRequestRadioQuery groupByDisableId() Group by the disable_id column
 * @method     ChildCareTestRequestRadioQuery groupByDisableDate() Group by the disable_date column
 * @method     ChildCareTestRequestRadioQuery groupByXrayNr() Group by the xray_nr column
 * @method     ChildCareTestRequestRadioQuery groupByRCm2() Group by the r_cm_2 column
 * @method     ChildCareTestRequestRadioQuery groupByMtr() Group by the mtr column
 * @method     ChildCareTestRequestRadioQuery groupByXrayDate() Group by the xray_date column
 * @method     ChildCareTestRequestRadioQuery groupByXrayTime() Group by the xray_time column
 * @method     ChildCareTestRequestRadioQuery groupByResults() Group by the results column
 * @method     ChildCareTestRequestRadioQuery groupByResultsDate() Group by the results_date column
 * @method     ChildCareTestRequestRadioQuery groupByResultsDoctor() Group by the results_doctor column
 * @method     ChildCareTestRequestRadioQuery groupByStatus() Group by the status column
 * @method     ChildCareTestRequestRadioQuery groupByHistory() Group by the history column
 * @method     ChildCareTestRequestRadioQuery groupByBillNumber() Group by the bill_number column
 * @method     ChildCareTestRequestRadioQuery groupByBillStatus() Group by the bill_status column
 * @method     ChildCareTestRequestRadioQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestRequestRadioQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestRequestRadioQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestRequestRadioQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareTestRequestRadioQuery groupByProcessId() Group by the process_id column
 * @method     ChildCareTestRequestRadioQuery groupByProcessTime() Group by the process_time column
 *
 * @method     ChildCareTestRequestRadioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestRequestRadioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestRequestRadioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestRequestRadioQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestRequestRadioQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestRequestRadioQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestRequestRadio findOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestRadio matching the query
 * @method     ChildCareTestRequestRadio findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestRequestRadio matching the query, or a new ChildCareTestRequestRadio object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestRequestRadio findOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestRadio filtered by the batch_nr column
 * @method     ChildCareTestRequestRadio findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestRadio filtered by the encounter_nr column
 * @method     ChildCareTestRequestRadio findOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestRadio filtered by the dept_nr column
 * @method     ChildCareTestRequestRadio findOneByXray(boolean $xray) Return the first ChildCareTestRequestRadio filtered by the xray column
 * @method     ChildCareTestRequestRadio findOneByCt(boolean $ct) Return the first ChildCareTestRequestRadio filtered by the ct column
 * @method     ChildCareTestRequestRadio findOneBySono(boolean $sono) Return the first ChildCareTestRequestRadio filtered by the sono column
 * @method     ChildCareTestRequestRadio findOneByMammograph(boolean $mammograph) Return the first ChildCareTestRequestRadio filtered by the mammograph column
 * @method     ChildCareTestRequestRadio findOneByMrt(boolean $mrt) Return the first ChildCareTestRequestRadio filtered by the mrt column
 * @method     ChildCareTestRequestRadio findOneByNuclear(boolean $nuclear) Return the first ChildCareTestRequestRadio filtered by the nuclear column
 * @method     ChildCareTestRequestRadio findOneByIfPatmobile(boolean $if_patmobile) Return the first ChildCareTestRequestRadio filtered by the if_patmobile column
 * @method     ChildCareTestRequestRadio findOneByIfAllergy(boolean $if_allergy) Return the first ChildCareTestRequestRadio filtered by the if_allergy column
 * @method     ChildCareTestRequestRadio findOneByIfHyperten(boolean $if_hyperten) Return the first ChildCareTestRequestRadio filtered by the if_hyperten column
 * @method     ChildCareTestRequestRadio findOneByIfPregnant(boolean $if_pregnant) Return the first ChildCareTestRequestRadio filtered by the if_pregnant column
 * @method     ChildCareTestRequestRadio findOneByClinicalInfo(string $clinical_info) Return the first ChildCareTestRequestRadio filtered by the clinical_info column
 * @method     ChildCareTestRequestRadio findOneByItemId(string $item_id) Return the first ChildCareTestRequestRadio filtered by the item_id column
 * @method     ChildCareTestRequestRadio findOneByTestRequest(string $test_request) Return the first ChildCareTestRequestRadio filtered by the test_request column
 * @method     ChildCareTestRequestRadio findOneByNumberOfTests(int $number_of_tests) Return the first ChildCareTestRequestRadio filtered by the number_of_tests column
 * @method     ChildCareTestRequestRadio findOneBySendDate(string $send_date) Return the first ChildCareTestRequestRadio filtered by the send_date column
 * @method     ChildCareTestRequestRadio findOneBySendDoctor(string $send_doctor) Return the first ChildCareTestRequestRadio filtered by the send_doctor column
 * @method     ChildCareTestRequestRadio findOneByIsDisabled(int $is_disabled) Return the first ChildCareTestRequestRadio filtered by the is_disabled column
 * @method     ChildCareTestRequestRadio findOneByDisableId(string $disable_id) Return the first ChildCareTestRequestRadio filtered by the disable_id column
 * @method     ChildCareTestRequestRadio findOneByDisableDate(string $disable_date) Return the first ChildCareTestRequestRadio filtered by the disable_date column
 * @method     ChildCareTestRequestRadio findOneByXrayNr(string $xray_nr) Return the first ChildCareTestRequestRadio filtered by the xray_nr column
 * @method     ChildCareTestRequestRadio findOneByRCm2(string $r_cm_2) Return the first ChildCareTestRequestRadio filtered by the r_cm_2 column
 * @method     ChildCareTestRequestRadio findOneByMtr(string $mtr) Return the first ChildCareTestRequestRadio filtered by the mtr column
 * @method     ChildCareTestRequestRadio findOneByXrayDate(string $xray_date) Return the first ChildCareTestRequestRadio filtered by the xray_date column
 * @method     ChildCareTestRequestRadio findOneByXrayTime(string $xray_time) Return the first ChildCareTestRequestRadio filtered by the xray_time column
 * @method     ChildCareTestRequestRadio findOneByResults(string $results) Return the first ChildCareTestRequestRadio filtered by the results column
 * @method     ChildCareTestRequestRadio findOneByResultsDate(string $results_date) Return the first ChildCareTestRequestRadio filtered by the results_date column
 * @method     ChildCareTestRequestRadio findOneByResultsDoctor(string $results_doctor) Return the first ChildCareTestRequestRadio filtered by the results_doctor column
 * @method     ChildCareTestRequestRadio findOneByStatus(string $status) Return the first ChildCareTestRequestRadio filtered by the status column
 * @method     ChildCareTestRequestRadio findOneByHistory(string $history) Return the first ChildCareTestRequestRadio filtered by the history column
 * @method     ChildCareTestRequestRadio findOneByBillNumber(int $bill_number) Return the first ChildCareTestRequestRadio filtered by the bill_number column
 * @method     ChildCareTestRequestRadio findOneByBillStatus(string $bill_status) Return the first ChildCareTestRequestRadio filtered by the bill_status column
 * @method     ChildCareTestRequestRadio findOneByModifyId(string $modify_id) Return the first ChildCareTestRequestRadio filtered by the modify_id column
 * @method     ChildCareTestRequestRadio findOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestRadio filtered by the modify_time column
 * @method     ChildCareTestRequestRadio findOneByCreateId(string $create_id) Return the first ChildCareTestRequestRadio filtered by the create_id column
 * @method     ChildCareTestRequestRadio findOneByCreateTime(string $create_time) Return the first ChildCareTestRequestRadio filtered by the create_time column
 * @method     ChildCareTestRequestRadio findOneByProcessId(string $process_id) Return the first ChildCareTestRequestRadio filtered by the process_id column
 * @method     ChildCareTestRequestRadio findOneByProcessTime(string $process_time) Return the first ChildCareTestRequestRadio filtered by the process_time column *

 * @method     ChildCareTestRequestRadio requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestRequestRadio by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestRadio matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestRadio requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestRadio filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestRadio filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestRadio filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByXray(boolean $xray) Return the first ChildCareTestRequestRadio filtered by the xray column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByCt(boolean $ct) Return the first ChildCareTestRequestRadio filtered by the ct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneBySono(boolean $sono) Return the first ChildCareTestRequestRadio filtered by the sono column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByMammograph(boolean $mammograph) Return the first ChildCareTestRequestRadio filtered by the mammograph column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByMrt(boolean $mrt) Return the first ChildCareTestRequestRadio filtered by the mrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByNuclear(boolean $nuclear) Return the first ChildCareTestRequestRadio filtered by the nuclear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByIfPatmobile(boolean $if_patmobile) Return the first ChildCareTestRequestRadio filtered by the if_patmobile column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByIfAllergy(boolean $if_allergy) Return the first ChildCareTestRequestRadio filtered by the if_allergy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByIfHyperten(boolean $if_hyperten) Return the first ChildCareTestRequestRadio filtered by the if_hyperten column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByIfPregnant(boolean $if_pregnant) Return the first ChildCareTestRequestRadio filtered by the if_pregnant column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByClinicalInfo(string $clinical_info) Return the first ChildCareTestRequestRadio filtered by the clinical_info column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByItemId(string $item_id) Return the first ChildCareTestRequestRadio filtered by the item_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByTestRequest(string $test_request) Return the first ChildCareTestRequestRadio filtered by the test_request column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByNumberOfTests(int $number_of_tests) Return the first ChildCareTestRequestRadio filtered by the number_of_tests column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneBySendDate(string $send_date) Return the first ChildCareTestRequestRadio filtered by the send_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneBySendDoctor(string $send_doctor) Return the first ChildCareTestRequestRadio filtered by the send_doctor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByIsDisabled(int $is_disabled) Return the first ChildCareTestRequestRadio filtered by the is_disabled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByDisableId(string $disable_id) Return the first ChildCareTestRequestRadio filtered by the disable_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByDisableDate(string $disable_date) Return the first ChildCareTestRequestRadio filtered by the disable_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByXrayNr(string $xray_nr) Return the first ChildCareTestRequestRadio filtered by the xray_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByRCm2(string $r_cm_2) Return the first ChildCareTestRequestRadio filtered by the r_cm_2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByMtr(string $mtr) Return the first ChildCareTestRequestRadio filtered by the mtr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByXrayDate(string $xray_date) Return the first ChildCareTestRequestRadio filtered by the xray_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByXrayTime(string $xray_time) Return the first ChildCareTestRequestRadio filtered by the xray_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByResults(string $results) Return the first ChildCareTestRequestRadio filtered by the results column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByResultsDate(string $results_date) Return the first ChildCareTestRequestRadio filtered by the results_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByResultsDoctor(string $results_doctor) Return the first ChildCareTestRequestRadio filtered by the results_doctor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByStatus(string $status) Return the first ChildCareTestRequestRadio filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByHistory(string $history) Return the first ChildCareTestRequestRadio filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByBillNumber(int $bill_number) Return the first ChildCareTestRequestRadio filtered by the bill_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByBillStatus(string $bill_status) Return the first ChildCareTestRequestRadio filtered by the bill_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByModifyId(string $modify_id) Return the first ChildCareTestRequestRadio filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestRadio filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByCreateId(string $create_id) Return the first ChildCareTestRequestRadio filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByCreateTime(string $create_time) Return the first ChildCareTestRequestRadio filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByProcessId(string $process_id) Return the first ChildCareTestRequestRadio filtered by the process_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestRadio requireOneByProcessTime(string $process_time) Return the first ChildCareTestRequestRadio filtered by the process_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestRadio[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestRequestRadio objects based on current ModelCriteria
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestRequestRadio objects filtered by the batch_nr column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestRequestRadio objects filtered by the encounter_nr column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareTestRequestRadio objects filtered by the dept_nr column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByXray(boolean $xray) Return ChildCareTestRequestRadio objects filtered by the xray column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByCt(boolean $ct) Return ChildCareTestRequestRadio objects filtered by the ct column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findBySono(boolean $sono) Return ChildCareTestRequestRadio objects filtered by the sono column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByMammograph(boolean $mammograph) Return ChildCareTestRequestRadio objects filtered by the mammograph column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByMrt(boolean $mrt) Return ChildCareTestRequestRadio objects filtered by the mrt column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByNuclear(boolean $nuclear) Return ChildCareTestRequestRadio objects filtered by the nuclear column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByIfPatmobile(boolean $if_patmobile) Return ChildCareTestRequestRadio objects filtered by the if_patmobile column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByIfAllergy(boolean $if_allergy) Return ChildCareTestRequestRadio objects filtered by the if_allergy column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByIfHyperten(boolean $if_hyperten) Return ChildCareTestRequestRadio objects filtered by the if_hyperten column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByIfPregnant(boolean $if_pregnant) Return ChildCareTestRequestRadio objects filtered by the if_pregnant column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByClinicalInfo(string $clinical_info) Return ChildCareTestRequestRadio objects filtered by the clinical_info column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByItemId(string $item_id) Return ChildCareTestRequestRadio objects filtered by the item_id column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByTestRequest(string $test_request) Return ChildCareTestRequestRadio objects filtered by the test_request column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByNumberOfTests(int $number_of_tests) Return ChildCareTestRequestRadio objects filtered by the number_of_tests column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findBySendDate(string $send_date) Return ChildCareTestRequestRadio objects filtered by the send_date column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findBySendDoctor(string $send_doctor) Return ChildCareTestRequestRadio objects filtered by the send_doctor column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByIsDisabled(int $is_disabled) Return ChildCareTestRequestRadio objects filtered by the is_disabled column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByDisableId(string $disable_id) Return ChildCareTestRequestRadio objects filtered by the disable_id column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByDisableDate(string $disable_date) Return ChildCareTestRequestRadio objects filtered by the disable_date column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByXrayNr(string $xray_nr) Return ChildCareTestRequestRadio objects filtered by the xray_nr column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByRCm2(string $r_cm_2) Return ChildCareTestRequestRadio objects filtered by the r_cm_2 column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByMtr(string $mtr) Return ChildCareTestRequestRadio objects filtered by the mtr column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByXrayDate(string $xray_date) Return ChildCareTestRequestRadio objects filtered by the xray_date column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByXrayTime(string $xray_time) Return ChildCareTestRequestRadio objects filtered by the xray_time column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByResults(string $results) Return ChildCareTestRequestRadio objects filtered by the results column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByResultsDate(string $results_date) Return ChildCareTestRequestRadio objects filtered by the results_date column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByResultsDoctor(string $results_doctor) Return ChildCareTestRequestRadio objects filtered by the results_doctor column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByStatus(string $status) Return ChildCareTestRequestRadio objects filtered by the status column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByHistory(string $history) Return ChildCareTestRequestRadio objects filtered by the history column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByBillNumber(int $bill_number) Return ChildCareTestRequestRadio objects filtered by the bill_number column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByBillStatus(string $bill_status) Return ChildCareTestRequestRadio objects filtered by the bill_status column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestRequestRadio objects filtered by the modify_id column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestRequestRadio objects filtered by the modify_time column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestRequestRadio objects filtered by the create_id column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestRequestRadio objects filtered by the create_time column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByProcessId(string $process_id) Return ChildCareTestRequestRadio objects filtered by the process_id column
 * @method     ChildCareTestRequestRadio[]|ObjectCollection findByProcessTime(string $process_time) Return ChildCareTestRequestRadio objects filtered by the process_time column
 * @method     ChildCareTestRequestRadio[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestRequestRadioQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestRequestRadioQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestRequestRadio', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestRequestRadioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestRequestRadioQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestRequestRadioQuery) {
            return $criteria;
        }
        $query = new ChildCareTestRequestRadioQuery();
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
     * @return ChildCareTestRequestRadio|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestRadioTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestRequestRadioTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTestRequestRadio A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, encounter_nr, dept_nr, xray, ct, sono, mammograph, mrt, nuclear, if_patmobile, if_allergy, if_hyperten, if_pregnant, clinical_info, item_id, test_request, number_of_tests, send_date, send_doctor, is_disabled, disable_id, disable_date, xray_nr, r_cm_2, mtr, xray_date, xray_time, results, results_date, results_doctor, status, history, bill_number, bill_status, modify_id, modify_time, create_id, create_time, process_id, process_time FROM care_test_request_radio WHERE batch_nr = :p0';
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
            /** @var ChildCareTestRequestRadio $obj */
            $obj = new ChildCareTestRequestRadio();
            $obj->hydrate($row);
            CareTestRequestRadioTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTestRequestRadio|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_BATCH_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_BATCH_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the batch_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByBatchNr(1234); // WHERE batch_nr = 1234
     * $query->filterByBatchNr(array(12, 34)); // WHERE batch_nr IN (12, 34)
     * $query->filterByBatchNr(array('min' => 12)); // WHERE batch_nr > 12
     * </code>
     *
     * @param     mixed $batchNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_BATCH_NR, $batchNr, $comparison);
    }

    /**
     * Filter the query on the encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterNr(1234); // WHERE encounter_nr = 1234
     * $query->filterByEncounterNr(array(12, 34)); // WHERE encounter_nr IN (12, 34)
     * $query->filterByEncounterNr(array('min' => 12)); // WHERE encounter_nr > 12
     * </code>
     *
     * @param     mixed $encounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptNr(1234); // WHERE dept_nr = 1234
     * $query->filterByDeptNr(array(12, 34)); // WHERE dept_nr IN (12, 34)
     * $query->filterByDeptNr(array('min' => 12)); // WHERE dept_nr > 12
     * </code>
     *
     * @param     mixed $deptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the xray column
     *
     * Example usage:
     * <code>
     * $query->filterByXray(true); // WHERE xray = true
     * $query->filterByXray('yes'); // WHERE xray = true
     * </code>
     *
     * @param     boolean|string $xray The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByXray($xray = null, $comparison = null)
    {
        if (is_string($xray)) {
            $xray = in_array(strtolower($xray), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_XRAY, $xray, $comparison);
    }

    /**
     * Filter the query on the ct column
     *
     * Example usage:
     * <code>
     * $query->filterByCt(true); // WHERE ct = true
     * $query->filterByCt('yes'); // WHERE ct = true
     * </code>
     *
     * @param     boolean|string $ct The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByCt($ct = null, $comparison = null)
    {
        if (is_string($ct)) {
            $ct = in_array(strtolower($ct), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_CT, $ct, $comparison);
    }

    /**
     * Filter the query on the sono column
     *
     * Example usage:
     * <code>
     * $query->filterBySono(true); // WHERE sono = true
     * $query->filterBySono('yes'); // WHERE sono = true
     * </code>
     *
     * @param     boolean|string $sono The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterBySono($sono = null, $comparison = null)
    {
        if (is_string($sono)) {
            $sono = in_array(strtolower($sono), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_SONO, $sono, $comparison);
    }

    /**
     * Filter the query on the mammograph column
     *
     * Example usage:
     * <code>
     * $query->filterByMammograph(true); // WHERE mammograph = true
     * $query->filterByMammograph('yes'); // WHERE mammograph = true
     * </code>
     *
     * @param     boolean|string $mammograph The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByMammograph($mammograph = null, $comparison = null)
    {
        if (is_string($mammograph)) {
            $mammograph = in_array(strtolower($mammograph), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_MAMMOGRAPH, $mammograph, $comparison);
    }

    /**
     * Filter the query on the mrt column
     *
     * Example usage:
     * <code>
     * $query->filterByMrt(true); // WHERE mrt = true
     * $query->filterByMrt('yes'); // WHERE mrt = true
     * </code>
     *
     * @param     boolean|string $mrt The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByMrt($mrt = null, $comparison = null)
    {
        if (is_string($mrt)) {
            $mrt = in_array(strtolower($mrt), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_MRT, $mrt, $comparison);
    }

    /**
     * Filter the query on the nuclear column
     *
     * Example usage:
     * <code>
     * $query->filterByNuclear(true); // WHERE nuclear = true
     * $query->filterByNuclear('yes'); // WHERE nuclear = true
     * </code>
     *
     * @param     boolean|string $nuclear The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByNuclear($nuclear = null, $comparison = null)
    {
        if (is_string($nuclear)) {
            $nuclear = in_array(strtolower($nuclear), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_NUCLEAR, $nuclear, $comparison);
    }

    /**
     * Filter the query on the if_patmobile column
     *
     * Example usage:
     * <code>
     * $query->filterByIfPatmobile(true); // WHERE if_patmobile = true
     * $query->filterByIfPatmobile('yes'); // WHERE if_patmobile = true
     * </code>
     *
     * @param     boolean|string $ifPatmobile The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByIfPatmobile($ifPatmobile = null, $comparison = null)
    {
        if (is_string($ifPatmobile)) {
            $ifPatmobile = in_array(strtolower($ifPatmobile), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_IF_PATMOBILE, $ifPatmobile, $comparison);
    }

    /**
     * Filter the query on the if_allergy column
     *
     * Example usage:
     * <code>
     * $query->filterByIfAllergy(true); // WHERE if_allergy = true
     * $query->filterByIfAllergy('yes'); // WHERE if_allergy = true
     * </code>
     *
     * @param     boolean|string $ifAllergy The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByIfAllergy($ifAllergy = null, $comparison = null)
    {
        if (is_string($ifAllergy)) {
            $ifAllergy = in_array(strtolower($ifAllergy), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_IF_ALLERGY, $ifAllergy, $comparison);
    }

    /**
     * Filter the query on the if_hyperten column
     *
     * Example usage:
     * <code>
     * $query->filterByIfHyperten(true); // WHERE if_hyperten = true
     * $query->filterByIfHyperten('yes'); // WHERE if_hyperten = true
     * </code>
     *
     * @param     boolean|string $ifHyperten The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByIfHyperten($ifHyperten = null, $comparison = null)
    {
        if (is_string($ifHyperten)) {
            $ifHyperten = in_array(strtolower($ifHyperten), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_IF_HYPERTEN, $ifHyperten, $comparison);
    }

    /**
     * Filter the query on the if_pregnant column
     *
     * Example usage:
     * <code>
     * $query->filterByIfPregnant(true); // WHERE if_pregnant = true
     * $query->filterByIfPregnant('yes'); // WHERE if_pregnant = true
     * </code>
     *
     * @param     boolean|string $ifPregnant The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByIfPregnant($ifPregnant = null, $comparison = null)
    {
        if (is_string($ifPregnant)) {
            $ifPregnant = in_array(strtolower($ifPregnant), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_IF_PREGNANT, $ifPregnant, $comparison);
    }

    /**
     * Filter the query on the clinical_info column
     *
     * Example usage:
     * <code>
     * $query->filterByClinicalInfo('fooValue');   // WHERE clinical_info = 'fooValue'
     * $query->filterByClinicalInfo('%fooValue%', Criteria::LIKE); // WHERE clinical_info LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clinicalInfo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByClinicalInfo($clinicalInfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clinicalInfo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_CLINICAL_INFO, $clinicalInfo, $comparison);
    }

    /**
     * Filter the query on the item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemId('fooValue');   // WHERE item_id = 'fooValue'
     * $query->filterByItemId('%fooValue%', Criteria::LIKE); // WHERE item_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the test_request column
     *
     * Example usage:
     * <code>
     * $query->filterByTestRequest('fooValue');   // WHERE test_request = 'fooValue'
     * $query->filterByTestRequest('%fooValue%', Criteria::LIKE); // WHERE test_request LIKE '%fooValue%'
     * </code>
     *
     * @param     string $testRequest The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByTestRequest($testRequest = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($testRequest)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_TEST_REQUEST, $testRequest, $comparison);
    }

    /**
     * Filter the query on the number_of_tests column
     *
     * Example usage:
     * <code>
     * $query->filterByNumberOfTests(1234); // WHERE number_of_tests = 1234
     * $query->filterByNumberOfTests(array(12, 34)); // WHERE number_of_tests IN (12, 34)
     * $query->filterByNumberOfTests(array('min' => 12)); // WHERE number_of_tests > 12
     * </code>
     *
     * @param     mixed $numberOfTests The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByNumberOfTests($numberOfTests = null, $comparison = null)
    {
        if (is_array($numberOfTests)) {
            $useMinMax = false;
            if (isset($numberOfTests['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_NUMBER_OF_TESTS, $numberOfTests['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numberOfTests['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_NUMBER_OF_TESTS, $numberOfTests['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_NUMBER_OF_TESTS, $numberOfTests, $comparison);
    }

    /**
     * Filter the query on the send_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySendDate('2011-03-14'); // WHERE send_date = '2011-03-14'
     * $query->filterBySendDate('now'); // WHERE send_date = '2011-03-14'
     * $query->filterBySendDate(array('max' => 'yesterday')); // WHERE send_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $sendDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterBySendDate($sendDate = null, $comparison = null)
    {
        if (is_array($sendDate)) {
            $useMinMax = false;
            if (isset($sendDate['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_SEND_DATE, $sendDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendDate['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_SEND_DATE, $sendDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_SEND_DATE, $sendDate, $comparison);
    }

    /**
     * Filter the query on the send_doctor column
     *
     * Example usage:
     * <code>
     * $query->filterBySendDoctor('fooValue');   // WHERE send_doctor = 'fooValue'
     * $query->filterBySendDoctor('%fooValue%', Criteria::LIKE); // WHERE send_doctor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sendDoctor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterBySendDoctor($sendDoctor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sendDoctor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_SEND_DOCTOR, $sendDoctor, $comparison);
    }

    /**
     * Filter the query on the is_disabled column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDisabled(1234); // WHERE is_disabled = 1234
     * $query->filterByIsDisabled(array(12, 34)); // WHERE is_disabled IN (12, 34)
     * $query->filterByIsDisabled(array('min' => 12)); // WHERE is_disabled > 12
     * </code>
     *
     * @param     mixed $isDisabled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByIsDisabled($isDisabled = null, $comparison = null)
    {
        if (is_array($isDisabled)) {
            $useMinMax = false;
            if (isset($isDisabled['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_IS_DISABLED, $isDisabled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isDisabled['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_IS_DISABLED, $isDisabled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_IS_DISABLED, $isDisabled, $comparison);
    }

    /**
     * Filter the query on the disable_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDisableId('fooValue');   // WHERE disable_id = 'fooValue'
     * $query->filterByDisableId('%fooValue%', Criteria::LIKE); // WHERE disable_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $disableId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByDisableId($disableId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($disableId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_DISABLE_ID, $disableId, $comparison);
    }

    /**
     * Filter the query on the disable_date column
     *
     * Example usage:
     * <code>
     * $query->filterByDisableDate('2011-03-14'); // WHERE disable_date = '2011-03-14'
     * $query->filterByDisableDate('now'); // WHERE disable_date = '2011-03-14'
     * $query->filterByDisableDate(array('max' => 'yesterday')); // WHERE disable_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $disableDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByDisableDate($disableDate = null, $comparison = null)
    {
        if (is_array($disableDate)) {
            $useMinMax = false;
            if (isset($disableDate['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_DISABLE_DATE, $disableDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($disableDate['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_DISABLE_DATE, $disableDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_DISABLE_DATE, $disableDate, $comparison);
    }

    /**
     * Filter the query on the xray_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByXrayNr('fooValue');   // WHERE xray_nr = 'fooValue'
     * $query->filterByXrayNr('%fooValue%', Criteria::LIKE); // WHERE xray_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xrayNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByXrayNr($xrayNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xrayNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_XRAY_NR, $xrayNr, $comparison);
    }

    /**
     * Filter the query on the r_cm_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRCm2('fooValue');   // WHERE r_cm_2 = 'fooValue'
     * $query->filterByRCm2('%fooValue%', Criteria::LIKE); // WHERE r_cm_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCm2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByRCm2($rCm2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCm2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_R_CM_2, $rCm2, $comparison);
    }

    /**
     * Filter the query on the mtr column
     *
     * Example usage:
     * <code>
     * $query->filterByMtr('fooValue');   // WHERE mtr = 'fooValue'
     * $query->filterByMtr('%fooValue%', Criteria::LIKE); // WHERE mtr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mtr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByMtr($mtr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mtr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_MTR, $mtr, $comparison);
    }

    /**
     * Filter the query on the xray_date column
     *
     * Example usage:
     * <code>
     * $query->filterByXrayDate('2011-03-14'); // WHERE xray_date = '2011-03-14'
     * $query->filterByXrayDate('now'); // WHERE xray_date = '2011-03-14'
     * $query->filterByXrayDate(array('max' => 'yesterday')); // WHERE xray_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $xrayDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByXrayDate($xrayDate = null, $comparison = null)
    {
        if (is_array($xrayDate)) {
            $useMinMax = false;
            if (isset($xrayDate['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_XRAY_DATE, $xrayDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xrayDate['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_XRAY_DATE, $xrayDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_XRAY_DATE, $xrayDate, $comparison);
    }

    /**
     * Filter the query on the xray_time column
     *
     * Example usage:
     * <code>
     * $query->filterByXrayTime('2011-03-14'); // WHERE xray_time = '2011-03-14'
     * $query->filterByXrayTime('now'); // WHERE xray_time = '2011-03-14'
     * $query->filterByXrayTime(array('max' => 'yesterday')); // WHERE xray_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $xrayTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByXrayTime($xrayTime = null, $comparison = null)
    {
        if (is_array($xrayTime)) {
            $useMinMax = false;
            if (isset($xrayTime['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_XRAY_TIME, $xrayTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xrayTime['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_XRAY_TIME, $xrayTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_XRAY_TIME, $xrayTime, $comparison);
    }

    /**
     * Filter the query on the results column
     *
     * Example usage:
     * <code>
     * $query->filterByResults('fooValue');   // WHERE results = 'fooValue'
     * $query->filterByResults('%fooValue%', Criteria::LIKE); // WHERE results LIKE '%fooValue%'
     * </code>
     *
     * @param     string $results The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByResults($results = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($results)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_RESULTS, $results, $comparison);
    }

    /**
     * Filter the query on the results_date column
     *
     * Example usage:
     * <code>
     * $query->filterByResultsDate('2011-03-14'); // WHERE results_date = '2011-03-14'
     * $query->filterByResultsDate('now'); // WHERE results_date = '2011-03-14'
     * $query->filterByResultsDate(array('max' => 'yesterday')); // WHERE results_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $resultsDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByResultsDate($resultsDate = null, $comparison = null)
    {
        if (is_array($resultsDate)) {
            $useMinMax = false;
            if (isset($resultsDate['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_RESULTS_DATE, $resultsDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($resultsDate['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_RESULTS_DATE, $resultsDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_RESULTS_DATE, $resultsDate, $comparison);
    }

    /**
     * Filter the query on the results_doctor column
     *
     * Example usage:
     * <code>
     * $query->filterByResultsDoctor('fooValue');   // WHERE results_doctor = 'fooValue'
     * $query->filterByResultsDoctor('%fooValue%', Criteria::LIKE); // WHERE results_doctor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resultsDoctor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByResultsDoctor($resultsDoctor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resultsDoctor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_RESULTS_DOCTOR, $resultsDoctor, $comparison);
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
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Filter the query on the bill_number column
     *
     * Example usage:
     * <code>
     * $query->filterByBillNumber(1234); // WHERE bill_number = 1234
     * $query->filterByBillNumber(array(12, 34)); // WHERE bill_number IN (12, 34)
     * $query->filterByBillNumber(array('min' => 12)); // WHERE bill_number > 12
     * </code>
     *
     * @param     mixed $billNumber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByBillNumber($billNumber = null, $comparison = null)
    {
        if (is_array($billNumber)) {
            $useMinMax = false;
            if (isset($billNumber['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_BILL_NUMBER, $billNumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billNumber['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_BILL_NUMBER, $billNumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_BILL_NUMBER, $billNumber, $comparison);
    }

    /**
     * Filter the query on the bill_status column
     *
     * Example usage:
     * <code>
     * $query->filterByBillStatus('fooValue');   // WHERE bill_status = 'fooValue'
     * $query->filterByBillStatus('%fooValue%', Criteria::LIKE); // WHERE bill_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByBillStatus($billStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_BILL_STATUS, $billStatus, $comparison);
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
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Filter the query on the process_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProcessId('fooValue');   // WHERE process_id = 'fooValue'
     * $query->filterByProcessId('%fooValue%', Criteria::LIKE); // WHERE process_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $processId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByProcessId($processId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($processId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_PROCESS_ID, $processId, $comparison);
    }

    /**
     * Filter the query on the process_time column
     *
     * Example usage:
     * <code>
     * $query->filterByProcessTime('2011-03-14'); // WHERE process_time = '2011-03-14'
     * $query->filterByProcessTime('now'); // WHERE process_time = '2011-03-14'
     * $query->filterByProcessTime(array('max' => 'yesterday')); // WHERE process_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $processTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function filterByProcessTime($processTime = null, $comparison = null)
    {
        if (is_array($processTime)) {
            $useMinMax = false;
            if (isset($processTime['min'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_PROCESS_TIME, $processTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processTime['max'])) {
                $this->addUsingAlias(CareTestRequestRadioTableMap::COL_PROCESS_TIME, $processTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestRadioTableMap::COL_PROCESS_TIME, $processTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestRequestRadio $careTestRequestRadio Object to remove from the list of results
     *
     * @return $this|ChildCareTestRequestRadioQuery The current query, for fluid interface
     */
    public function prune($careTestRequestRadio = null)
    {
        if ($careTestRequestRadio) {
            $this->addUsingAlias(CareTestRequestRadioTableMap::COL_BATCH_NR, $careTestRequestRadio->getBatchNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_request_radio table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestRadioTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestRequestRadioTableMap::clearInstancePool();
            CareTestRequestRadioTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestRadioTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestRequestRadioTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestRequestRadioTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestRequestRadioTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestRequestRadioQuery
