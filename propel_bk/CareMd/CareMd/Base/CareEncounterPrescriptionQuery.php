<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterPrescription as ChildCareEncounterPrescription;
use CareMd\CareMd\CareEncounterPrescriptionQuery as ChildCareEncounterPrescriptionQuery;
use CareMd\CareMd\Map\CareEncounterPrescriptionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_prescription' table.
 *
 *
 *
 * @method     ChildCareEncounterPrescriptionQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareEncounterPrescriptionQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterPrescriptionQuery orderByPrescriptionTypeNr($order = Criteria::ASC) Order by the prescription_type_nr column
 * @method     ChildCareEncounterPrescriptionQuery orderByArticle($order = Criteria::ASC) Order by the article column
 * @method     ChildCareEncounterPrescriptionQuery orderByArticleItemNumber($order = Criteria::ASC) Order by the article_item_number column
 * @method     ChildCareEncounterPrescriptionQuery orderByPartcode($order = Criteria::ASC) Order by the partcode column
 * @method     ChildCareEncounterPrescriptionQuery orderByMarkOs($order = Criteria::ASC) Order by the mark_os column
 * @method     ChildCareEncounterPrescriptionQuery orderByMaterialcost($order = Criteria::ASC) Order by the materialcost column
 * @method     ChildCareEncounterPrescriptionQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     ChildCareEncounterPrescriptionQuery orderByDrugClass($order = Criteria::ASC) Order by the drug_class column
 * @method     ChildCareEncounterPrescriptionQuery orderByOrderNr($order = Criteria::ASC) Order by the order_nr column
 * @method     ChildCareEncounterPrescriptionQuery orderByDosage($order = Criteria::ASC) Order by the dosage column
 * @method     ChildCareEncounterPrescriptionQuery orderByTimesPerDay($order = Criteria::ASC) Order by the times_per_day column
 * @method     ChildCareEncounterPrescriptionQuery orderByDays($order = Criteria::ASC) Order by the days column
 * @method     ChildCareEncounterPrescriptionQuery orderByTotalDosage($order = Criteria::ASC) Order by the total_dosage column
 * @method     ChildCareEncounterPrescriptionQuery orderByApplicationTypeNr($order = Criteria::ASC) Order by the application_type_nr column
 * @method     ChildCareEncounterPrescriptionQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareEncounterPrescriptionQuery orderByPrescribeDate($order = Criteria::ASC) Order by the prescribe_date column
 * @method     ChildCareEncounterPrescriptionQuery orderByPrescriber($order = Criteria::ASC) Order by the prescriber column
 * @method     ChildCareEncounterPrescriptionQuery orderByTaken($order = Criteria::ASC) Order by the taken column
 * @method     ChildCareEncounterPrescriptionQuery orderByColorMarker($order = Criteria::ASC) Order by the color_marker column
 * @method     ChildCareEncounterPrescriptionQuery orderByIsStopped($order = Criteria::ASC) Order by the is_stopped column
 * @method     ChildCareEncounterPrescriptionQuery orderByIsOutpatientPrescription($order = Criteria::ASC) Order by the is_outpatient_prescription column
 * @method     ChildCareEncounterPrescriptionQuery orderByIssuer($order = Criteria::ASC) Order by the issuer column
 * @method     ChildCareEncounterPrescriptionQuery orderByIssueDate($order = Criteria::ASC) Order by the issue_date column
 * @method     ChildCareEncounterPrescriptionQuery orderByIsDisabled($order = Criteria::ASC) Order by the is_disabled column
 * @method     ChildCareEncounterPrescriptionQuery orderByDisableId($order = Criteria::ASC) Order by the disable_id column
 * @method     ChildCareEncounterPrescriptionQuery orderByDisableDate($order = Criteria::ASC) Order by the disable_date column
 * @method     ChildCareEncounterPrescriptionQuery orderByStopDate($order = Criteria::ASC) Order by the stop_date column
 * @method     ChildCareEncounterPrescriptionQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterPrescriptionQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterPrescriptionQuery orderByBillNumber($order = Criteria::ASC) Order by the bill_number column
 * @method     ChildCareEncounterPrescriptionQuery orderByBillStatus($order = Criteria::ASC) Order by the bill_status column
 * @method     ChildCareEncounterPrescriptionQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterPrescriptionQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterPrescriptionQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterPrescriptionQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareEncounterPrescriptionQuery orderByPriority($order = Criteria::ASC) Order by the priority column
 * @method     ChildCareEncounterPrescriptionQuery orderBySubStore($order = Criteria::ASC) Order by the sub_store column
 * @method     ChildCareEncounterPrescriptionQuery orderByInWeberp($order = Criteria::ASC) Order by the in_weberp column
 *
 * @method     ChildCareEncounterPrescriptionQuery groupByNr() Group by the nr column
 * @method     ChildCareEncounterPrescriptionQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterPrescriptionQuery groupByPrescriptionTypeNr() Group by the prescription_type_nr column
 * @method     ChildCareEncounterPrescriptionQuery groupByArticle() Group by the article column
 * @method     ChildCareEncounterPrescriptionQuery groupByArticleItemNumber() Group by the article_item_number column
 * @method     ChildCareEncounterPrescriptionQuery groupByPartcode() Group by the partcode column
 * @method     ChildCareEncounterPrescriptionQuery groupByMarkOs() Group by the mark_os column
 * @method     ChildCareEncounterPrescriptionQuery groupByMaterialcost() Group by the materialcost column
 * @method     ChildCareEncounterPrescriptionQuery groupByPrice() Group by the price column
 * @method     ChildCareEncounterPrescriptionQuery groupByDrugClass() Group by the drug_class column
 * @method     ChildCareEncounterPrescriptionQuery groupByOrderNr() Group by the order_nr column
 * @method     ChildCareEncounterPrescriptionQuery groupByDosage() Group by the dosage column
 * @method     ChildCareEncounterPrescriptionQuery groupByTimesPerDay() Group by the times_per_day column
 * @method     ChildCareEncounterPrescriptionQuery groupByDays() Group by the days column
 * @method     ChildCareEncounterPrescriptionQuery groupByTotalDosage() Group by the total_dosage column
 * @method     ChildCareEncounterPrescriptionQuery groupByApplicationTypeNr() Group by the application_type_nr column
 * @method     ChildCareEncounterPrescriptionQuery groupByNotes() Group by the notes column
 * @method     ChildCareEncounterPrescriptionQuery groupByPrescribeDate() Group by the prescribe_date column
 * @method     ChildCareEncounterPrescriptionQuery groupByPrescriber() Group by the prescriber column
 * @method     ChildCareEncounterPrescriptionQuery groupByTaken() Group by the taken column
 * @method     ChildCareEncounterPrescriptionQuery groupByColorMarker() Group by the color_marker column
 * @method     ChildCareEncounterPrescriptionQuery groupByIsStopped() Group by the is_stopped column
 * @method     ChildCareEncounterPrescriptionQuery groupByIsOutpatientPrescription() Group by the is_outpatient_prescription column
 * @method     ChildCareEncounterPrescriptionQuery groupByIssuer() Group by the issuer column
 * @method     ChildCareEncounterPrescriptionQuery groupByIssueDate() Group by the issue_date column
 * @method     ChildCareEncounterPrescriptionQuery groupByIsDisabled() Group by the is_disabled column
 * @method     ChildCareEncounterPrescriptionQuery groupByDisableId() Group by the disable_id column
 * @method     ChildCareEncounterPrescriptionQuery groupByDisableDate() Group by the disable_date column
 * @method     ChildCareEncounterPrescriptionQuery groupByStopDate() Group by the stop_date column
 * @method     ChildCareEncounterPrescriptionQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterPrescriptionQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterPrescriptionQuery groupByBillNumber() Group by the bill_number column
 * @method     ChildCareEncounterPrescriptionQuery groupByBillStatus() Group by the bill_status column
 * @method     ChildCareEncounterPrescriptionQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterPrescriptionQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterPrescriptionQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterPrescriptionQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareEncounterPrescriptionQuery groupByPriority() Group by the priority column
 * @method     ChildCareEncounterPrescriptionQuery groupBySubStore() Group by the sub_store column
 * @method     ChildCareEncounterPrescriptionQuery groupByInWeberp() Group by the in_weberp column
 *
 * @method     ChildCareEncounterPrescriptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterPrescriptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterPrescriptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterPrescriptionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterPrescriptionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterPrescriptionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterPrescription findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterPrescription matching the query
 * @method     ChildCareEncounterPrescription findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterPrescription matching the query, or a new ChildCareEncounterPrescription object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterPrescription findOneByNr(int $nr) Return the first ChildCareEncounterPrescription filtered by the nr column
 * @method     ChildCareEncounterPrescription findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterPrescription filtered by the encounter_nr column
 * @method     ChildCareEncounterPrescription findOneByPrescriptionTypeNr(int $prescription_type_nr) Return the first ChildCareEncounterPrescription filtered by the prescription_type_nr column
 * @method     ChildCareEncounterPrescription findOneByArticle(string $article) Return the first ChildCareEncounterPrescription filtered by the article column
 * @method     ChildCareEncounterPrescription findOneByArticleItemNumber(string $article_item_number) Return the first ChildCareEncounterPrescription filtered by the article_item_number column
 * @method     ChildCareEncounterPrescription findOneByPartcode(string $partcode) Return the first ChildCareEncounterPrescription filtered by the partcode column
 * @method     ChildCareEncounterPrescription findOneByMarkOs(int $mark_os) Return the first ChildCareEncounterPrescription filtered by the mark_os column
 * @method     ChildCareEncounterPrescription findOneByMaterialcost(string $materialcost) Return the first ChildCareEncounterPrescription filtered by the materialcost column
 * @method     ChildCareEncounterPrescription findOneByPrice(string $price) Return the first ChildCareEncounterPrescription filtered by the price column
 * @method     ChildCareEncounterPrescription findOneByDrugClass(string $drug_class) Return the first ChildCareEncounterPrescription filtered by the drug_class column
 * @method     ChildCareEncounterPrescription findOneByOrderNr(int $order_nr) Return the first ChildCareEncounterPrescription filtered by the order_nr column
 * @method     ChildCareEncounterPrescription findOneByDosage(double $dosage) Return the first ChildCareEncounterPrescription filtered by the dosage column
 * @method     ChildCareEncounterPrescription findOneByTimesPerDay(int $times_per_day) Return the first ChildCareEncounterPrescription filtered by the times_per_day column
 * @method     ChildCareEncounterPrescription findOneByDays(int $days) Return the first ChildCareEncounterPrescription filtered by the days column
 * @method     ChildCareEncounterPrescription findOneByTotalDosage(double $total_dosage) Return the first ChildCareEncounterPrescription filtered by the total_dosage column
 * @method     ChildCareEncounterPrescription findOneByApplicationTypeNr(int $application_type_nr) Return the first ChildCareEncounterPrescription filtered by the application_type_nr column
 * @method     ChildCareEncounterPrescription findOneByNotes(string $notes) Return the first ChildCareEncounterPrescription filtered by the notes column
 * @method     ChildCareEncounterPrescription findOneByPrescribeDate(string $prescribe_date) Return the first ChildCareEncounterPrescription filtered by the prescribe_date column
 * @method     ChildCareEncounterPrescription findOneByPrescriber(string $prescriber) Return the first ChildCareEncounterPrescription filtered by the prescriber column
 * @method     ChildCareEncounterPrescription findOneByTaken(boolean $taken) Return the first ChildCareEncounterPrescription filtered by the taken column
 * @method     ChildCareEncounterPrescription findOneByColorMarker(string $color_marker) Return the first ChildCareEncounterPrescription filtered by the color_marker column
 * @method     ChildCareEncounterPrescription findOneByIsStopped(boolean $is_stopped) Return the first ChildCareEncounterPrescription filtered by the is_stopped column
 * @method     ChildCareEncounterPrescription findOneByIsOutpatientPrescription(int $is_outpatient_prescription) Return the first ChildCareEncounterPrescription filtered by the is_outpatient_prescription column
 * @method     ChildCareEncounterPrescription findOneByIssuer(string $issuer) Return the first ChildCareEncounterPrescription filtered by the issuer column
 * @method     ChildCareEncounterPrescription findOneByIssueDate(string $issue_date) Return the first ChildCareEncounterPrescription filtered by the issue_date column
 * @method     ChildCareEncounterPrescription findOneByIsDisabled(string $is_disabled) Return the first ChildCareEncounterPrescription filtered by the is_disabled column
 * @method     ChildCareEncounterPrescription findOneByDisableId(string $disable_id) Return the first ChildCareEncounterPrescription filtered by the disable_id column
 * @method     ChildCareEncounterPrescription findOneByDisableDate(string $disable_date) Return the first ChildCareEncounterPrescription filtered by the disable_date column
 * @method     ChildCareEncounterPrescription findOneByStopDate(string $stop_date) Return the first ChildCareEncounterPrescription filtered by the stop_date column
 * @method     ChildCareEncounterPrescription findOneByStatus(string $status) Return the first ChildCareEncounterPrescription filtered by the status column
 * @method     ChildCareEncounterPrescription findOneByHistory(string $history) Return the first ChildCareEncounterPrescription filtered by the history column
 * @method     ChildCareEncounterPrescription findOneByBillNumber(string $bill_number) Return the first ChildCareEncounterPrescription filtered by the bill_number column
 * @method     ChildCareEncounterPrescription findOneByBillStatus(string $bill_status) Return the first ChildCareEncounterPrescription filtered by the bill_status column
 * @method     ChildCareEncounterPrescription findOneByModifyId(string $modify_id) Return the first ChildCareEncounterPrescription filtered by the modify_id column
 * @method     ChildCareEncounterPrescription findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterPrescription filtered by the modify_time column
 * @method     ChildCareEncounterPrescription findOneByCreateId(string $create_id) Return the first ChildCareEncounterPrescription filtered by the create_id column
 * @method     ChildCareEncounterPrescription findOneByCreateTime(string $create_time) Return the first ChildCareEncounterPrescription filtered by the create_time column
 * @method     ChildCareEncounterPrescription findOneByPriority(boolean $priority) Return the first ChildCareEncounterPrescription filtered by the priority column
 * @method     ChildCareEncounterPrescription findOneBySubStore(string $sub_store) Return the first ChildCareEncounterPrescription filtered by the sub_store column
 * @method     ChildCareEncounterPrescription findOneByInWeberp(int $in_weberp) Return the first ChildCareEncounterPrescription filtered by the in_weberp column *

 * @method     ChildCareEncounterPrescription requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterPrescription by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterPrescription matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterPrescription requireOneByNr(int $nr) Return the first ChildCareEncounterPrescription filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterPrescription filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByPrescriptionTypeNr(int $prescription_type_nr) Return the first ChildCareEncounterPrescription filtered by the prescription_type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByArticle(string $article) Return the first ChildCareEncounterPrescription filtered by the article column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByArticleItemNumber(string $article_item_number) Return the first ChildCareEncounterPrescription filtered by the article_item_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByPartcode(string $partcode) Return the first ChildCareEncounterPrescription filtered by the partcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByMarkOs(int $mark_os) Return the first ChildCareEncounterPrescription filtered by the mark_os column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByMaterialcost(string $materialcost) Return the first ChildCareEncounterPrescription filtered by the materialcost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByPrice(string $price) Return the first ChildCareEncounterPrescription filtered by the price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByDrugClass(string $drug_class) Return the first ChildCareEncounterPrescription filtered by the drug_class column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByOrderNr(int $order_nr) Return the first ChildCareEncounterPrescription filtered by the order_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByDosage(double $dosage) Return the first ChildCareEncounterPrescription filtered by the dosage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByTimesPerDay(int $times_per_day) Return the first ChildCareEncounterPrescription filtered by the times_per_day column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByDays(int $days) Return the first ChildCareEncounterPrescription filtered by the days column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByTotalDosage(double $total_dosage) Return the first ChildCareEncounterPrescription filtered by the total_dosage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByApplicationTypeNr(int $application_type_nr) Return the first ChildCareEncounterPrescription filtered by the application_type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByNotes(string $notes) Return the first ChildCareEncounterPrescription filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByPrescribeDate(string $prescribe_date) Return the first ChildCareEncounterPrescription filtered by the prescribe_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByPrescriber(string $prescriber) Return the first ChildCareEncounterPrescription filtered by the prescriber column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByTaken(boolean $taken) Return the first ChildCareEncounterPrescription filtered by the taken column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByColorMarker(string $color_marker) Return the first ChildCareEncounterPrescription filtered by the color_marker column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByIsStopped(boolean $is_stopped) Return the first ChildCareEncounterPrescription filtered by the is_stopped column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByIsOutpatientPrescription(int $is_outpatient_prescription) Return the first ChildCareEncounterPrescription filtered by the is_outpatient_prescription column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByIssuer(string $issuer) Return the first ChildCareEncounterPrescription filtered by the issuer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByIssueDate(string $issue_date) Return the first ChildCareEncounterPrescription filtered by the issue_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByIsDisabled(string $is_disabled) Return the first ChildCareEncounterPrescription filtered by the is_disabled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByDisableId(string $disable_id) Return the first ChildCareEncounterPrescription filtered by the disable_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByDisableDate(string $disable_date) Return the first ChildCareEncounterPrescription filtered by the disable_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByStopDate(string $stop_date) Return the first ChildCareEncounterPrescription filtered by the stop_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByStatus(string $status) Return the first ChildCareEncounterPrescription filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByHistory(string $history) Return the first ChildCareEncounterPrescription filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByBillNumber(string $bill_number) Return the first ChildCareEncounterPrescription filtered by the bill_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByBillStatus(string $bill_status) Return the first ChildCareEncounterPrescription filtered by the bill_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterPrescription filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterPrescription filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByCreateId(string $create_id) Return the first ChildCareEncounterPrescription filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterPrescription filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByPriority(boolean $priority) Return the first ChildCareEncounterPrescription filtered by the priority column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneBySubStore(string $sub_store) Return the first ChildCareEncounterPrescription filtered by the sub_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescription requireOneByInWeberp(int $in_weberp) Return the first ChildCareEncounterPrescription filtered by the in_weberp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterPrescription[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterPrescription objects based on current ModelCriteria
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByNr(int $nr) Return ChildCareEncounterPrescription objects filtered by the nr column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterPrescription objects filtered by the encounter_nr column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByPrescriptionTypeNr(int $prescription_type_nr) Return ChildCareEncounterPrescription objects filtered by the prescription_type_nr column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByArticle(string $article) Return ChildCareEncounterPrescription objects filtered by the article column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByArticleItemNumber(string $article_item_number) Return ChildCareEncounterPrescription objects filtered by the article_item_number column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByPartcode(string $partcode) Return ChildCareEncounterPrescription objects filtered by the partcode column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByMarkOs(int $mark_os) Return ChildCareEncounterPrescription objects filtered by the mark_os column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByMaterialcost(string $materialcost) Return ChildCareEncounterPrescription objects filtered by the materialcost column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByPrice(string $price) Return ChildCareEncounterPrescription objects filtered by the price column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByDrugClass(string $drug_class) Return ChildCareEncounterPrescription objects filtered by the drug_class column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByOrderNr(int $order_nr) Return ChildCareEncounterPrescription objects filtered by the order_nr column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByDosage(double $dosage) Return ChildCareEncounterPrescription objects filtered by the dosage column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByTimesPerDay(int $times_per_day) Return ChildCareEncounterPrescription objects filtered by the times_per_day column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByDays(int $days) Return ChildCareEncounterPrescription objects filtered by the days column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByTotalDosage(double $total_dosage) Return ChildCareEncounterPrescription objects filtered by the total_dosage column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByApplicationTypeNr(int $application_type_nr) Return ChildCareEncounterPrescription objects filtered by the application_type_nr column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByNotes(string $notes) Return ChildCareEncounterPrescription objects filtered by the notes column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByPrescribeDate(string $prescribe_date) Return ChildCareEncounterPrescription objects filtered by the prescribe_date column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByPrescriber(string $prescriber) Return ChildCareEncounterPrescription objects filtered by the prescriber column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByTaken(boolean $taken) Return ChildCareEncounterPrescription objects filtered by the taken column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByColorMarker(string $color_marker) Return ChildCareEncounterPrescription objects filtered by the color_marker column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByIsStopped(boolean $is_stopped) Return ChildCareEncounterPrescription objects filtered by the is_stopped column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByIsOutpatientPrescription(int $is_outpatient_prescription) Return ChildCareEncounterPrescription objects filtered by the is_outpatient_prescription column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByIssuer(string $issuer) Return ChildCareEncounterPrescription objects filtered by the issuer column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByIssueDate(string $issue_date) Return ChildCareEncounterPrescription objects filtered by the issue_date column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByIsDisabled(string $is_disabled) Return ChildCareEncounterPrescription objects filtered by the is_disabled column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByDisableId(string $disable_id) Return ChildCareEncounterPrescription objects filtered by the disable_id column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByDisableDate(string $disable_date) Return ChildCareEncounterPrescription objects filtered by the disable_date column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByStopDate(string $stop_date) Return ChildCareEncounterPrescription objects filtered by the stop_date column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterPrescription objects filtered by the status column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterPrescription objects filtered by the history column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByBillNumber(string $bill_number) Return ChildCareEncounterPrescription objects filtered by the bill_number column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByBillStatus(string $bill_status) Return ChildCareEncounterPrescription objects filtered by the bill_status column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterPrescription objects filtered by the modify_id column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterPrescription objects filtered by the modify_time column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterPrescription objects filtered by the create_id column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterPrescription objects filtered by the create_time column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByPriority(boolean $priority) Return ChildCareEncounterPrescription objects filtered by the priority column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findBySubStore(string $sub_store) Return ChildCareEncounterPrescription objects filtered by the sub_store column
 * @method     ChildCareEncounterPrescription[]|ObjectCollection findByInWeberp(int $in_weberp) Return ChildCareEncounterPrescription objects filtered by the in_weberp column
 * @method     ChildCareEncounterPrescription[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterPrescriptionQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterPrescriptionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterPrescription', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterPrescriptionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterPrescriptionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterPrescriptionQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterPrescriptionQuery();
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
     * @return ChildCareEncounterPrescription|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterPrescriptionTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterPrescriptionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterPrescription A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, encounter_nr, prescription_type_nr, article, article_item_number, partcode, mark_os, materialcost, price, drug_class, order_nr, dosage, times_per_day, days, total_dosage, application_type_nr, notes, prescribe_date, prescriber, taken, color_marker, is_stopped, is_outpatient_prescription, issuer, issue_date, is_disabled, disable_id, disable_date, stop_date, status, history, bill_number, bill_status, modify_id, modify_time, create_id, create_time, priority, sub_store, in_weberp FROM care_encounter_prescription WHERE nr = :p0';
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
            /** @var ChildCareEncounterPrescription $obj */
            $obj = new ChildCareEncounterPrescription();
            $obj->hydrate($row);
            CareEncounterPrescriptionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterPrescription|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the prescription_type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPrescriptionTypeNr(1234); // WHERE prescription_type_nr = 1234
     * $query->filterByPrescriptionTypeNr(array(12, 34)); // WHERE prescription_type_nr IN (12, 34)
     * $query->filterByPrescriptionTypeNr(array('min' => 12)); // WHERE prescription_type_nr > 12
     * </code>
     *
     * @param     mixed $prescriptionTypeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByPrescriptionTypeNr($prescriptionTypeNr = null, $comparison = null)
    {
        if (is_array($prescriptionTypeNr)) {
            $useMinMax = false;
            if (isset($prescriptionTypeNr['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_PRESCRIPTION_TYPE_NR, $prescriptionTypeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prescriptionTypeNr['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_PRESCRIPTION_TYPE_NR, $prescriptionTypeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_PRESCRIPTION_TYPE_NR, $prescriptionTypeNr, $comparison);
    }

    /**
     * Filter the query on the article column
     *
     * Example usage:
     * <code>
     * $query->filterByArticle('fooValue');   // WHERE article = 'fooValue'
     * $query->filterByArticle('%fooValue%', Criteria::LIKE); // WHERE article LIKE '%fooValue%'
     * </code>
     *
     * @param     string $article The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByArticle($article = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($article)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ARTICLE, $article, $comparison);
    }

    /**
     * Filter the query on the article_item_number column
     *
     * Example usage:
     * <code>
     * $query->filterByArticleItemNumber('fooValue');   // WHERE article_item_number = 'fooValue'
     * $query->filterByArticleItemNumber('%fooValue%', Criteria::LIKE); // WHERE article_item_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articleItemNumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByArticleItemNumber($articleItemNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articleItemNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ARTICLE_ITEM_NUMBER, $articleItemNumber, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByPartcode($partcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($partcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_PARTCODE, $partcode, $comparison);
    }

    /**
     * Filter the query on the mark_os column
     *
     * Example usage:
     * <code>
     * $query->filterByMarkOs(1234); // WHERE mark_os = 1234
     * $query->filterByMarkOs(array(12, 34)); // WHERE mark_os IN (12, 34)
     * $query->filterByMarkOs(array('min' => 12)); // WHERE mark_os > 12
     * </code>
     *
     * @param     mixed $markOs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByMarkOs($markOs = null, $comparison = null)
    {
        if (is_array($markOs)) {
            $useMinMax = false;
            if (isset($markOs['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_MARK_OS, $markOs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($markOs['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_MARK_OS, $markOs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_MARK_OS, $markOs, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByMaterialcost($materialcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($materialcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_MATERIALCOST, $materialcost, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($price)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the drug_class column
     *
     * Example usage:
     * <code>
     * $query->filterByDrugClass('fooValue');   // WHERE drug_class = 'fooValue'
     * $query->filterByDrugClass('%fooValue%', Criteria::LIKE); // WHERE drug_class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $drugClass The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByDrugClass($drugClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($drugClass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DRUG_CLASS, $drugClass, $comparison);
    }

    /**
     * Filter the query on the order_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderNr(1234); // WHERE order_nr = 1234
     * $query->filterByOrderNr(array(12, 34)); // WHERE order_nr IN (12, 34)
     * $query->filterByOrderNr(array('min' => 12)); // WHERE order_nr > 12
     * </code>
     *
     * @param     mixed $orderNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByOrderNr($orderNr = null, $comparison = null)
    {
        if (is_array($orderNr)) {
            $useMinMax = false;
            if (isset($orderNr['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ORDER_NR, $orderNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderNr['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ORDER_NR, $orderNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ORDER_NR, $orderNr, $comparison);
    }

    /**
     * Filter the query on the dosage column
     *
     * Example usage:
     * <code>
     * $query->filterByDosage(1234); // WHERE dosage = 1234
     * $query->filterByDosage(array(12, 34)); // WHERE dosage IN (12, 34)
     * $query->filterByDosage(array('min' => 12)); // WHERE dosage > 12
     * </code>
     *
     * @param     mixed $dosage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByDosage($dosage = null, $comparison = null)
    {
        if (is_array($dosage)) {
            $useMinMax = false;
            if (isset($dosage['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DOSAGE, $dosage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dosage['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DOSAGE, $dosage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DOSAGE, $dosage, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByTimesPerDay($timesPerDay = null, $comparison = null)
    {
        if (is_array($timesPerDay)) {
            $useMinMax = false;
            if (isset($timesPerDay['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_TIMES_PER_DAY, $timesPerDay['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timesPerDay['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_TIMES_PER_DAY, $timesPerDay['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_TIMES_PER_DAY, $timesPerDay, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByDays($days = null, $comparison = null)
    {
        if (is_array($days)) {
            $useMinMax = false;
            if (isset($days['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DAYS, $days['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($days['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DAYS, $days['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DAYS, $days, $comparison);
    }

    /**
     * Filter the query on the total_dosage column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalDosage(1234); // WHERE total_dosage = 1234
     * $query->filterByTotalDosage(array(12, 34)); // WHERE total_dosage IN (12, 34)
     * $query->filterByTotalDosage(array('min' => 12)); // WHERE total_dosage > 12
     * </code>
     *
     * @param     mixed $totalDosage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByTotalDosage($totalDosage = null, $comparison = null)
    {
        if (is_array($totalDosage)) {
            $useMinMax = false;
            if (isset($totalDosage['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_TOTAL_DOSAGE, $totalDosage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalDosage['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_TOTAL_DOSAGE, $totalDosage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_TOTAL_DOSAGE, $totalDosage, $comparison);
    }

    /**
     * Filter the query on the application_type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByApplicationTypeNr(1234); // WHERE application_type_nr = 1234
     * $query->filterByApplicationTypeNr(array(12, 34)); // WHERE application_type_nr IN (12, 34)
     * $query->filterByApplicationTypeNr(array('min' => 12)); // WHERE application_type_nr > 12
     * </code>
     *
     * @param     mixed $applicationTypeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByApplicationTypeNr($applicationTypeNr = null, $comparison = null)
    {
        if (is_array($applicationTypeNr)) {
            $useMinMax = false;
            if (isset($applicationTypeNr['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_APPLICATION_TYPE_NR, $applicationTypeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($applicationTypeNr['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_APPLICATION_TYPE_NR, $applicationTypeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_APPLICATION_TYPE_NR, $applicationTypeNr, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the prescribe_date column
     *
     * Example usage:
     * <code>
     * $query->filterByPrescribeDate('2011-03-14'); // WHERE prescribe_date = '2011-03-14'
     * $query->filterByPrescribeDate('now'); // WHERE prescribe_date = '2011-03-14'
     * $query->filterByPrescribeDate(array('max' => 'yesterday')); // WHERE prescribe_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $prescribeDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByPrescribeDate($prescribeDate = null, $comparison = null)
    {
        if (is_array($prescribeDate)) {
            $useMinMax = false;
            if (isset($prescribeDate['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_PRESCRIBE_DATE, $prescribeDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prescribeDate['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_PRESCRIBE_DATE, $prescribeDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_PRESCRIBE_DATE, $prescribeDate, $comparison);
    }

    /**
     * Filter the query on the prescriber column
     *
     * Example usage:
     * <code>
     * $query->filterByPrescriber('fooValue');   // WHERE prescriber = 'fooValue'
     * $query->filterByPrescriber('%fooValue%', Criteria::LIKE); // WHERE prescriber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prescriber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByPrescriber($prescriber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prescriber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_PRESCRIBER, $prescriber, $comparison);
    }

    /**
     * Filter the query on the taken column
     *
     * Example usage:
     * <code>
     * $query->filterByTaken(true); // WHERE taken = true
     * $query->filterByTaken('yes'); // WHERE taken = true
     * </code>
     *
     * @param     boolean|string $taken The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByTaken($taken = null, $comparison = null)
    {
        if (is_string($taken)) {
            $taken = in_array(strtolower($taken), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_TAKEN, $taken, $comparison);
    }

    /**
     * Filter the query on the color_marker column
     *
     * Example usage:
     * <code>
     * $query->filterByColorMarker('fooValue');   // WHERE color_marker = 'fooValue'
     * $query->filterByColorMarker('%fooValue%', Criteria::LIKE); // WHERE color_marker LIKE '%fooValue%'
     * </code>
     *
     * @param     string $colorMarker The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByColorMarker($colorMarker = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($colorMarker)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_COLOR_MARKER, $colorMarker, $comparison);
    }

    /**
     * Filter the query on the is_stopped column
     *
     * Example usage:
     * <code>
     * $query->filterByIsStopped(true); // WHERE is_stopped = true
     * $query->filterByIsStopped('yes'); // WHERE is_stopped = true
     * </code>
     *
     * @param     boolean|string $isStopped The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByIsStopped($isStopped = null, $comparison = null)
    {
        if (is_string($isStopped)) {
            $isStopped = in_array(strtolower($isStopped), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_IS_STOPPED, $isStopped, $comparison);
    }

    /**
     * Filter the query on the is_outpatient_prescription column
     *
     * Example usage:
     * <code>
     * $query->filterByIsOutpatientPrescription(1234); // WHERE is_outpatient_prescription = 1234
     * $query->filterByIsOutpatientPrescription(array(12, 34)); // WHERE is_outpatient_prescription IN (12, 34)
     * $query->filterByIsOutpatientPrescription(array('min' => 12)); // WHERE is_outpatient_prescription > 12
     * </code>
     *
     * @param     mixed $isOutpatientPrescription The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByIsOutpatientPrescription($isOutpatientPrescription = null, $comparison = null)
    {
        if (is_array($isOutpatientPrescription)) {
            $useMinMax = false;
            if (isset($isOutpatientPrescription['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_IS_OUTPATIENT_PRESCRIPTION, $isOutpatientPrescription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isOutpatientPrescription['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_IS_OUTPATIENT_PRESCRIPTION, $isOutpatientPrescription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_IS_OUTPATIENT_PRESCRIPTION, $isOutpatientPrescription, $comparison);
    }

    /**
     * Filter the query on the issuer column
     *
     * Example usage:
     * <code>
     * $query->filterByIssuer('fooValue');   // WHERE issuer = 'fooValue'
     * $query->filterByIssuer('%fooValue%', Criteria::LIKE); // WHERE issuer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $issuer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByIssuer($issuer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($issuer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ISSUER, $issuer, $comparison);
    }

    /**
     * Filter the query on the issue_date column
     *
     * Example usage:
     * <code>
     * $query->filterByIssueDate('2011-03-14'); // WHERE issue_date = '2011-03-14'
     * $query->filterByIssueDate('now'); // WHERE issue_date = '2011-03-14'
     * $query->filterByIssueDate(array('max' => 'yesterday')); // WHERE issue_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $issueDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByIssueDate($issueDate = null, $comparison = null)
    {
        if (is_array($issueDate)) {
            $useMinMax = false;
            if (isset($issueDate['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ISSUE_DATE, $issueDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($issueDate['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ISSUE_DATE, $issueDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_ISSUE_DATE, $issueDate, $comparison);
    }

    /**
     * Filter the query on the is_disabled column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDisabled('fooValue');   // WHERE is_disabled = 'fooValue'
     * $query->filterByIsDisabled('%fooValue%', Criteria::LIKE); // WHERE is_disabled LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isDisabled The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByIsDisabled($isDisabled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isDisabled)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_IS_DISABLED, $isDisabled, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByDisableId($disableId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($disableId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DISABLE_ID, $disableId, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByDisableDate($disableDate = null, $comparison = null)
    {
        if (is_array($disableDate)) {
            $useMinMax = false;
            if (isset($disableDate['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DISABLE_DATE, $disableDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($disableDate['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DISABLE_DATE, $disableDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_DISABLE_DATE, $disableDate, $comparison);
    }

    /**
     * Filter the query on the stop_date column
     *
     * Example usage:
     * <code>
     * $query->filterByStopDate('2011-03-14'); // WHERE stop_date = '2011-03-14'
     * $query->filterByStopDate('now'); // WHERE stop_date = '2011-03-14'
     * $query->filterByStopDate(array('max' => 'yesterday')); // WHERE stop_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $stopDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByStopDate($stopDate = null, $comparison = null)
    {
        if (is_array($stopDate)) {
            $useMinMax = false;
            if (isset($stopDate['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_STOP_DATE, $stopDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stopDate['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_STOP_DATE, $stopDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_STOP_DATE, $stopDate, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByBillNumber($billNumber = null, $comparison = null)
    {
        if (is_array($billNumber)) {
            $useMinMax = false;
            if (isset($billNumber['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_BILL_NUMBER, $billNumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billNumber['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_BILL_NUMBER, $billNumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_BILL_NUMBER, $billNumber, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByBillStatus($billStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_BILL_STATUS, $billStatus, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Filter the query on the priority column
     *
     * Example usage:
     * <code>
     * $query->filterByPriority(true); // WHERE priority = true
     * $query->filterByPriority('yes'); // WHERE priority = true
     * </code>
     *
     * @param     boolean|string $priority The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByPriority($priority = null, $comparison = null)
    {
        if (is_string($priority)) {
            $priority = in_array(strtolower($priority), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_PRIORITY, $priority, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterBySubStore($subStore = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subStore)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_SUB_STORE, $subStore, $comparison);
    }

    /**
     * Filter the query on the in_weberp column
     *
     * Example usage:
     * <code>
     * $query->filterByInWeberp(1234); // WHERE in_weberp = 1234
     * $query->filterByInWeberp(array(12, 34)); // WHERE in_weberp IN (12, 34)
     * $query->filterByInWeberp(array('min' => 12)); // WHERE in_weberp > 12
     * </code>
     *
     * @param     mixed $inWeberp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function filterByInWeberp($inWeberp = null, $comparison = null)
    {
        if (is_array($inWeberp)) {
            $useMinMax = false;
            if (isset($inWeberp['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_IN_WEBERP, $inWeberp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inWeberp['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_IN_WEBERP, $inWeberp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_IN_WEBERP, $inWeberp, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterPrescription $careEncounterPrescription Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterPrescriptionQuery The current query, for fluid interface
     */
    public function prune($careEncounterPrescription = null)
    {
        if ($careEncounterPrescription) {
            $this->addUsingAlias(CareEncounterPrescriptionTableMap::COL_NR, $careEncounterPrescription->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_prescription table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterPrescriptionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterPrescriptionTableMap::clearInstancePool();
            CareEncounterPrescriptionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterPrescriptionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterPrescriptionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterPrescriptionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterPrescriptionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterPrescriptionQuery
